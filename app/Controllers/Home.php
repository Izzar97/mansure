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
    }

    public function index()
    {
        return view('home');
    }


    public function aboutus()
    {
        return view('aboutus');
    }

    public function login_pelayan()
    {
        
        $ModelUser = new M_login();
        $login = $this->request->getPost('login');
        if($login){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if($username == '' or $password == ''){
                $error = "masukin pw n username";
            }
            if(empty($error)){
                $datauser = $ModelUser->where('username', $username)->first();
                if($datauser['password']!= md5($password)){
                    $error = "pw salah";
                }
            }
            if(empty($error)){
                $datasesi = [
                    'id' => $datauser['id'],
                    'username' => $datauser['username'],
                    'password' => $datauser['password'],
                ];
                session()->set($datasesi);
                return redirect()->to(base_url('dashboard'));
            }
            if($error){
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $error);
                return redirect()->to(base_url('login-pelayan'));
            }
        }
        return view('login_pelayan');
    }

    public function login()
    {
        if (session()->get("LoggedUserData")) {
            session()->setFlashdata("Error", "udh login nih");
            return redirect()->to(base_url('/'));
        }
        $data['googleButton'] = '<a href="' . $this->googleClient->createAuthUrl() . '" class="btn">Pelanggan</a>';
        return view('v_login', $data);
    }

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
            session()->setFlashdata("Success", "logout berhasil");
            return redirect()->to(base_url() . "/login");
        } else {
            session()->setFlashdata("Error", "logout gagal");
            return redirect()->to(base_url());
        }
    }

}