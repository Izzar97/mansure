<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_login extends model
{

    protected $table = 'user';
    protected $primaryKey = 'id';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'updated_at', 'created_at', 'nama_user', 'username', 'password', 'email', 'oauth_id', 'jabatan'
    ];


    public function login($username, $password){
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

}