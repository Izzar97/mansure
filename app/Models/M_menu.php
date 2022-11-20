<?php

namespace App\Models;
use App\Models;
use CodeIgniter\model;

class M_menu extends model{

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'nama_menu','jenis_menu','harga','gambar','status_stok_menu','deskripsi'
    ];    
    
}

