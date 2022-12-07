<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_login;

class Login extends BaseController
{
    // bagian login kasir&chef

    public function tambahuser()
    {
        $users = new M_login();
        $data['users'] = $users->orderby('id')->findAll();
        return view('layout/tambah_user', $data);
        $nama_user = 'nama_user';
    }

    public function daftaruser()
    {
        $user = new M_login();
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'jabatan' => $this->request->getPost('jabatan'),

        ];
        $user->save($data);
        return redirect()->to('dashboard/tambah-user')->with('status', 'berhasil');
    }

    public function hapus_user($id = false)
    {
        $users = new M_login();
        $data['user'] = $users->delete($id);

        return redirect()->to('dashboard/tambah-user');
    }
}