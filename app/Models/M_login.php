<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_login extends model
{

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'created_at', 'nama_user', 'username', 'password', 'jabatan'
    ];


    public function user()
    {
        return $this->db->table('user')->countAllResults();
    }

    public function login($username, $password){
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

}