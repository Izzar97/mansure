<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;
use App\Models\M_pesanan;
use App\Models\M_detailpesanan;

class User_kasir extends BaseController
{
    public function index()
    {
        $pesanan = new M_pesanan();
        $detail = new M_detailpesanan();
        $data['pesanan'] = $pesanan->orderby('id_pesanan')->where('status_pesanan', 'selesai')->findAll();
        $data['detail'] = $detail->getRincian();
        return view('layout/v_kasir', $data);
    }

    public function laporan()
    {
        return view('layout/v_laporan');
    }
}