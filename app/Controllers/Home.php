<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_menu;
use App\Models\M_login;


class Home extends BaseController
{
    private $mLogin = NULL;
    function __construct()
    {
        $this->mLogin = new M_login();
       
    }

    public function index()
    {
        return view('home');
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
        return view('v_login');
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

}