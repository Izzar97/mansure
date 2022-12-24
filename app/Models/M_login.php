<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_login extends model
{

    public function login($username, $password)
    {
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
            ])->get()->getRowArray();
    }

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