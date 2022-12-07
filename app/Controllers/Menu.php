<?php

namespace App\Controllers;

use App\Models\M_menu;


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
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'snacks')->findAll();
        return view('snacks', $data);
    }
}