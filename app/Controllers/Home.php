<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('navbar');
    }

    public function menu()
    {
        return view('nav_menu');
    }
}