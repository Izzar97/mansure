<?php

namespace App\Controllers;

use App\Models\M_menu;


class Menu extends BaseController
{
    public function index()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Main course')->findAll();
        return view('menu/maincourse', $data);
    }

    public function uncaanmansure()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', "Unca'an")->findAll();
        return view('menu/uncaanmansure', $data);
    }

    public function pasta()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Pasta')->findAll();
        return view('menu/pasta', $data);
    }

    public function beverages()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Beverages')->findAll();
        return view('menu/beverages', $data);
    }

    public function sweetooth()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'Sweet Tooth')->findAll();
        return view('menu/sweetooth', $data);
    }

    public function snacks()
    {
        $products = new M_menu();
        $data['products'] = $products->where('jenis_menu', 'snacks')->findAll();
        return view('menu/snacks', $data);
    }
}