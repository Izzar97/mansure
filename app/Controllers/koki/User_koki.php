<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;

class User_koki extends BaseController
{
    public function index()
    {
        return view('layout/lihatdaftarpesanan');
    }
}