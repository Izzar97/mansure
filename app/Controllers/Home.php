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

    public function menu()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->findAll();
        return view('menu', $data);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function login()
    {
        if (session()->get("LoggedUserData")) {
            session()->setFlashdata("Error", "udh login nih");
            return redirect()->to(base_url('/'));
        }
        $data['googleButton'] = '<a href="' . $this->googleClient->createAuthUrl() . '" style: "background-color: black"><img src="public/uploads/google.png" alt="Login With Google"></a>';
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

    public function login_admin()
    {
        return view('v_login_admin');
    }
}