<?php

namespace App\Controllers\kasir;

use App\Controllers\BaseController;
use App\Models\M_menu;

class Menukasir extends BaseController
{
    public function __construct()
    {
        $this->M_menu = new M_menu();
    }

    public function dashboard()
    {
        $data = array(
            // 'total_pesanan_baru' => $this->M_menu->total_pesanan_baru(),
            // 'total_pesanan_Selesai' => $this->M_menu->total_pesanan_Selesai(),
            'total_daftar_menu' => $this->M_menu->total_daftar_menu(),
        );
        return view('layout/index', $data);
    }
    // public function dashboard()
    // {
    //     return view('layout/index');
    // }

    public function index()
    {

        $products = new M_menu();
        $data['products'] = $products->orderby('id_menu', 'DESC')->findAll();
        return view('layout/home_kasir', $data);
    }

    public function create()
    {
        return view('layout/tambahmenu');
    }

    public function daftar()
    {

        $product = new M_menu();
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {

            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'jenis_menu' => $this->request->getPost('jenis_menu'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $imageName,
            'status_stok_menu' => $this->request->getPost('status_stok_menu'),
            'deskripsi' => $this->request->getPost('deskripsi'),

        ];
        $product->save($data);
        return redirect()->to('/dashboard/home-kasir')->with('status', 'berhasil');
    }

    public function edit($id_menu)
    {
        $products = new M_menu();
        $data['product'] = $products->find($id_menu);

        return view('layout/editmenu', $data);
    }

    public function update($id_menu)
    {
        $products = new M_menu();
        $prod_item = $products->find($id_menu);
        $old_img_name = $prod_item['gambar'];

        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $old_img_name = $prod_item['gambar'];
            if (file_exists("uploads/" . $old_img_name)) {
                unlink("uploads/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
        } else {
            $imageName = $prod_item['gambar'];
        }
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'jenis_menu' => $this->request->getPost('jenis_menu'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $imageName,
            'status_stok_menu' => $this->request->getPost('status_stok_menu'),
            'deskripsi' => $this->request->getPost('deskripsi'),

        ];
        $products->update($id_menu, $data);
        return redirect()->to('/dashboard/home-kasir')->with('status', 'berhasil update');
    }


    public function delete($id_menu = false)
    {
        $products = new M_menu();
        $data['product'] = $products->delete($id_menu);

        return redirect()->to('/dashboard/home-kasir');
    }
}