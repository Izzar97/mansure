<?php

namespace App\Controllers\kasir;

use App\Controllers\BaseController;
use App\Models\M_TambahMenu;

class User_kasir extends BaseController
{

    protected $mmenu;
    protected $table = "menu";
    public function __construct()
    {
        $this->mmenu = new M_TambahMenu();
    }

    public function index()
    {
        $lihatdata = $this->mmenu->lihatdata();
        $data = array(
            'datamenu' => $lihatdata,
        );

        return view ('tambahmenu', $data);    
    }

    function simpantambahmenu()
    {
        $namamenu = $this->request->getPost("namamenu");
        $hargamenu = $this->request->getPost("hargamenu");
        $deskripsi = $this->request->getPost("deskripsi");
        $jenismenu = $this->request->getPost("jenismenu");
        $stokmenu = $this->request->getPost("stokmenu");

        $data = [
            'nama_menu' => $namamenu,
            'harga' => $hargamenu,
            'deskripsi' => $deskripsi,
            'jenis_menu' => $jenismenu,
            'status_stok_menu' => $stokmenu,
        ];
    }
}