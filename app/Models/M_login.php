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

    function isAlreadyRegister($authid){
        return $this->db->table('user')->getwhere(['oauth_id'=>$authid])->getRowArray()>0?true:false;
    }
    function updateUserData($userdata, $authid){
         $this->db->table('user')->where(['oauth_id'=>$authid])->update($userdata);
    }
    function insertUserData($userdata){
         $this->db->table('user')->insert($userdata);
    }

}