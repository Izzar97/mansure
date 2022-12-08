<?php

namespace App\Controllers;

use App\Models\M_menu;


class Menu extends BaseController
{
    public function maincourse()
    {
        
    }

    public function uncaanmansure()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', "Unca'an")->findAll();
        return view('uncaanmansure', $data);
    }

    public function pasta()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Pasta')->findAll();
        return view('pasta', $data);
    }

    public function beverages()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Beverages')->findAll();
        return view('beverages', $data);
    }

    public function sweetooth()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Sweet Tooth')->findAll();
        return view('sweetooth', $data);
    }

    public function snacks()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Snacks')->findAll();
        return view('snacks', $data);
    }
}