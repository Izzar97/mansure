<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_menu;

class Home extends BaseController
{
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
        return view('v_login');
    }

    public function login_admin()
    {
        return view('v_login_admin');
    }
}