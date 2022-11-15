<?php

namespace App\Controllers\kasir;

use App\Controllers\BaseController;

class User_kasir extends BaseController
{

    public function index()
    {
        return view('tambahmenu');
    }
}