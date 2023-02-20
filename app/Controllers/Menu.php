<?php

namespace App\Controllers;

use App\Models\M_menu;


class Menu extends BaseController
{
    public function index()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', '1')->findAll();
        return view('menu/maincourse', $data);
    }

    public function uncaanmansure()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', 2)->findAll();
        return view('menu/uncaanmansure', $data);
    }

    public function pasta()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', '3')->findAll();
        return view('menu/pasta', $data);
    }

    public function beverages()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', '4')->findAll();
        return view('menu/beverages', $data);
    }

    public function sweetooth()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', '5')->findAll();
        return view('menu/sweetooth', $data);
    }

    public function snacks()
    {
        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->where('jenis_menu', '6')->findAll();
        return view('menu/snacks', $data);
    }
}