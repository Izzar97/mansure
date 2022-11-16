<?php

namespace App\Models;
use App\Models;
use CodeIgniter\model;

class M_menu extends model{

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $returnType = 'object';
    protected $allowedFields = ['nama_menu','harga','deskripsi','jenis_menu','gambar','status_stok_menu'];
    
    public function lihatdata(){
        $query = $this->db->query("SELECT * FROM menu");
        return $query->getResult();
    }
}

