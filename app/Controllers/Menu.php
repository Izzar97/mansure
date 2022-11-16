<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function maincourse()
    {
        return view('maincourse');
    }

    public function uncaanmansure()
    {
        return view('uncaanmansure');
    }

    public function pasta()
    {
        return view('pasta');
    }

    public function beverages()
    {
        return view('beverages');
    }

    public function sweetooth()
    {
        return view('sweetooth');
    }

    public function snacks()
    {
        return view('snacks');
    }
}