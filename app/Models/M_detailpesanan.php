<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_detailpesanan extends model
{

    protected $table = 'detail_pesanan';
    protected $primaryKey = 'id_detail';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'id_menu','total_harga_per_menu','notes_pesanan','quantity', 'id_pesanan'
    ];

    public function detail_pesanan()
    {
        return $this->db->table('detail_pesanan')->countAllResults();
    }

}