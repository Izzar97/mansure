<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_login;

class Login extends BaseController
{
    // bagian tambah user (kasir&chef)

    public function tambahuser()
    {
        $users = new M_login();
        $data['users'] = $users->orderby('id_user')->findAll();
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

    public function reset($id_user){
        $user = new M_login();

        $data = [
            'password' => $this->request->getPost('password'),
        ];
        $user->update($id_user, $data);
        return redirect()->to('dashboard/tambah-user');
    }
}