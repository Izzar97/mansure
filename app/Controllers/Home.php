<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
}