<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_menu;
use App\Models\M_login;


class Home extends BaseController
{
    private $mLogin = NULL;
    private $googleClient = NULL;
    function __construct()
    {
        require_once APPPATH . "libraries/vendor/autoload.php";
        $this->mLogin = new M_login();
        $this->googleClient = new \Google_Client();
        $this->googleClient->setClientId("880910608760-q60fcjtnq61ivur2lfvp7p7rni8mjip0.apps.googleusercontent.com");
        $this->googleClient->setClientSecret("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");
        $this->googleClient->setRedirectUri("http://localhost:8080/login/loginWithGoogle");
        $this->googleClient->addScope("email");
        $this->googleClient->addScope("profile");
    }

    public function index()
    {
        return view('home');
    }


    public function aboutus()
    {
        return view('aboutus');
    }

    // public function login_pelayan()
    // {

    //     $ModelUser = new M_login();
    //     $login = $this->request->getPost('login');
    //     if ($login) {
    //         $username = $this->request->getPost('username');
    //         $password = $this->request->getPost('password');

    //         if ($username == '' or $password == '') {
    //             $error = "Silahkan Masukkan Username dan Password!";
    //         }
    //         if (empty($error)) {
    //             $datauser = $ModelUser->where('username', $username)->first();
    //             if ($datauser['password'] != md5($password)) {
    //                 $error = "Password salah!";
    //             }
    //         }
    //         if (empty($error)) {
    //             $datasesi = [
    //                 'id' => $datauser['id'],
    //                 'username' => $datauser['username'],
    //                 'password' => $datauser['password'],
    //             ];
    //             session()->set($datasesi);
    //             return redirect()->to(base_url('dashboard'));
    //         }
    //         if ($error) {
    //             session()->setFlashdata('username', $username);
    //             session()->setFlashdata('error', $error);
    //             return redirect()->to(base_url('login-pelayan'));
    //         }
    //     }
    //     return view('login_pelayan');
    // }

    public function login()
    {
        if (session()->get("LoggedUserData")) {
            session()->setFlashdata("Error", "udh login nih");
            return redirect()->to(base_url('/'));
        }
        $data['googleButton'] = '<a href="' . $this->googleClient->createAuthUrl() . '" class="btn">Customer</a>';
        return view('v_login', $data);
    }

    public function cek_login_pelayan()
    {
        if($this->validate([
            'username' => [
                'label' => 'username',
                'rules' => 'required',
                'errors' => ['{field} wajib diisi nich']
            ],

            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => ['{field} wajib diisi nich']
            ],
        ])){
            //jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->mLogin->login($username, $password);
            if($cek){
                //jika data ada
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('jabatan', $cek['jabatan']);

                if(session()->get('jabatan') == 'chef'){
                    return redirect()->to(base_url('dashboard/koki'));
                }
                if(session()->get('jabatan') == 'kasir'){
                    return redirect()->to(base_url('dashboard/transaksi'));
                }
                if(session()->get('jabatan') == 'admin'){
                    return redirect()->to(base_url('dashboard'));
                }
                
            }
            else{
                session()->setFlashdata('pesan', 'Username atau Password salah');
                return redirect()->to(base_url('halaman-login-pelayan'));
            }
        }
        else{
            //jika tdk valid
        }
        return view('login_pelayan');
    }
// punya pelanggan
    public function loginWithGoogle()
    {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if (!isset($token['error'])) {
            $this->googleClient->setAccessToken($token['access_token']);
            session()->set("AccessToken", $token['access_token']);

            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $data = $googleService->userinfo->get();
            $currentDateTime = date("Y-m-d H:i:s");
            // echo "<pre>"; print_r($data); die;

            $userdata = array();
            if ($this->mLogin->isAlreadyRegister($data['id'])) {
                // bisa login dan mau login lagi
                $userdata = [
                    'nama_user' => $data['givenName'] . " " . $data['familyName'],
                    'email' => $data['email'],
                    'updated_at' => $currentDateTime
                ];
                $this->mLogin->updateUserData($userdata, $data['id']);
            } else {
                // pengguna baru mau login 
                $userdata = [
                    'oauth_id' => $data['id'],
                    'nama_user' => $data['givenName'] . " " . $data['familyName'],
                    'email' => $data['email'],
                    'created_at' => $currentDateTime
                ];
                $this->mLogin->insertUserData($userdata);
            }
            session()->set("LoggedUserData", $userdata);
        } else {
            session()->setFlashdata("Error", "Ada yang salah nih");
            return redirect()->to(base_url() . "/login");
        }
        // login sukses
        return redirect()->to(base_url());
    }
    function logout()
    {
        session()->remove('LoggedUserData');
        session()->remove('AccessToken');
        if (!(session()->get('LoggedUserData') && session()->get('AccessToken'))) {
            session()->setFlashdata("Success", "Logout berhasil");
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata("Error", "Logout gagal");
            return redirect()->to(base_url());
        }
    }
}