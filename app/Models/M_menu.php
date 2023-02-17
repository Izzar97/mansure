<?php

namespace App\Models;

use App\Models;
use CodeIgniter\model;

class M_menu extends model
{

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    // protected $returnType = 'object';
    protected $allowedFields = [
        'nama_menu', 'jenis_menu', 'harga', 'gambar', 'status_stok_menu', 'deskripsi', 'jenis_beverages'
    ];

    public function total_pesanan_baru()
    {
        return $this->db->table('pesanan')->countAllResults();
    }
    // public function total_pesanan_selesai()
    // {
    //     return $this->db->table('menu')->countAllResults();
    // }
    public function total_daftar_menu()
    {
        return $this->db->table('menu')->countAllResults();
    }
}