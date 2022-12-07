<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;

class User_kasir extends BaseController
{
    public function index()
    {
        return view('layout/v_kasir');
    }

    public function laporan()
    {
        return view('layout/v_laporan');
    }
}