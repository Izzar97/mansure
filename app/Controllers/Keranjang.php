<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_menu;

class Keranjang extends BaseController
{
    public function keranjang()
    {
        return view('layout/v_kasir');
    }

    public function beli($id_menu)
    {
        return view('layout/v_kasir');
    }
}