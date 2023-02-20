<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_pesanan extends model
{

    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'no_meja', 'nama_pelanggan', 'jml_pesanan', 'status_pesanan', 'tanggal', 'total_harga_seluruh'
    ];

    public function pesanan()
    {
        return $this->db->table('pesanan')->countAllResults();
    }

    public function pencarian($kunci)
    {
        return $this->table('pesanan')->like('nama_pelanggan', $kunci);
    }

}