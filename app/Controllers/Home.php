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
}