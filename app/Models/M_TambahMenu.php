<?php

namespace App\Models;

use App\Models;
use CodeIgniter\Model;

class M_TambahMenu extends Model{

    public function lihatdata()
    {
        $query = $this->db->query("SELECT * FROM menu");
        return $query->getResult();    
    }

    function simpanmenu($table, $data)
    {
        $this->db->table($table)->insert($data);
        return true;
    }

}