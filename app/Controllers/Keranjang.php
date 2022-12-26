<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_menu;

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
            'quantity' => 1
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

    // public function keranjang()
    // {
    //     return view('layout/v_kasir');
    // }

    // public function beli($id_menu)
    // {
    //     return view('layout/v_kasir');
    // }

}