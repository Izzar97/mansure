<?php

namespace App\Controllers\kasir;
use App\Controllers\BaseController;
use App\Models\M_menu;

class Tambahmenu extends BaseController{
    // public function __construct()
    // {
    //     $this->mmenu = new M_menu();
    // }

    public function index()
    {
        $model_menu = new M_menu();
        $all_data_menu = $model_menu->findAll();

        return view ('menu_admin', ['all_data_menu' => $all_data_menu]);
    }

    public function add_tambah_menu()
    {
        // //ambil gambar
        // $fileGambar = $this->request->getFile('gambar');

        // // pindahkan gambar ke folder img
        // $fileGambar->move('img');

        // // ambil nama file
        // $namagambar = $fileGambar->getName();
        return view ('add_data_menu');
    }

    public function proses_add_menu()
    {
        $model_menu = new M_menu();
        $model_menu->insert($this->request->getPost());
        return redirect()->to(base_url('menu_admin'));

    }

    public function edit_data_menu($id_menu = false)
    {
        $model_menu = new M_menu();
        $data_menu = $model_menu->find($id_menu);
        return view ('edit_data_menu', ['data_menu' => $data_menu]);
    }

    public function proses_edit_menu()
    {
        $model_menu = new M_menu();
        $model_menu->update($this->request->getPost('id_menu'), $this->request->getPost());
        return redirect()->to(base_url('menu_admin'));
    }

    public function hapus_data_menu($id_menu = false)
    {
        $model_menu = new M_menu();
        $model_menu->delete($id_menu);
        return redirect()->to(base_url('menu_admin'));
    }
}