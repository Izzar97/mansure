<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_menu;
use App\Models\M_pesanan;
use App\Models\M_detailpesanan;

class Keranjang extends BaseController
{
    public function keranjang()
    {
        $datas['items'] = array_values(session('cart'));
        $datas['total'] = $this->total();
        return view('keranjang', $datas);
    }

    public function beli($id_menu)
    {
        $menuModel = new M_menu();
        $menu = $menuModel->find($id_menu);
        $item = array(
            'id_menu' => $menu['id_menu'],
            'nama_menu' => $menu['nama_menu'],
            'jenis_menu' => $menu['jenis_menu'],
            'harga' => $menu['harga'],
            'quantity' => 1,
            'notes_pesanan' => 'kosong',
        );
        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id_menu);
            $cart = array_values(session('cart'));
            if ($index == -1) {
                array_push($cart, $item);
            } else {
                $cart[$index]['quantity']++;
            }
            $session->set('cart', $cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        return $this->response->redirect(site_url('menu'));
    }

    public function remove($id_menu)
    {
        $index = $this->exists($id_menu);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('keranjang-nih'));
    }

    public function update($id_menu)
    {
        $cart = array_values(session('cart'));
        // var_dump($cart);
        // var_dump($_POST);
        // print_r($cart);
        // die();
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]['quantity'] = $_POST['quantity'][$i];
        }
        
        $session = session();
        $session->set('cart', $cart);
        $notes = $this->request->getVar("notes");
        $session->set('notes', $notes);
        return $this->response->redirect(site_url('keranjang-nih'));
    }

    
    private function exists($id_menu)
    {
        $items = array_values(session('cart'));
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id_menu'] == $id_menu) {
                return $i;
            }
        }
        return -1;
    }

    private function total()
    {
        $s = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item_menu) {
            $s += $item_menu['harga'] * $item_menu['quantity'];
        }
        return $s;
    }

    public function simpan()
    {
        $pesanan = new M_pesanan();
        $detail = new M_detailpesanan();

        $items = array_values(session('cart'));

        $simpan = $this->request->getPost();

        $request = [];

        $data = [
            "no_meja" => "",
            // "nama_pelanggan" => $this->request->getPost('nama_pelanggan'),
            "jml_pesanan" => count($items),
            "status_pesanan" => "menunggu",
            "tanggal" => date("Y-m-d H:i:s"),
            "total_harga_seluruh" => $this->total(),
        ];
        
        $pesanan->insert($data);
        $id_pesanan = $pesanan->getInsertID();

        foreach ($simpan["id_menu"] as $i => $value) {

            $request[] = [
                "id_menu" => $simpan["id_menu"][$i],
                "quantity" => $simpan["quantity"][$i],
                "notes_pesanan" => $simpan['notes_pesanan'][$i],
                "total_harga_per_menu" => $simpan["total_harga_per_menu"][$i],
                "id_pesanan" => $id_pesanan,
            ];
        }
        
        // dd($data);
        // dd($request);
        $detail->insertBatch($request);
        // return redirect()->to('dashboard/tambah-user')->with('status', 'berhasil');
        
    }

    // public function keranjang()
    // {
    //     return view('layout/v_kasir');
    // }

    // public function beli($id_menu)
    // {
    //     return view('layout/v_kasir');
    // }

}