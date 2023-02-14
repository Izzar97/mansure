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
    public function getRincian()
    {
         return $this->db->table('detail_pesanan')
         ->join('menu','menu.id_menu=detail_pesanan.id_menu')
         ->join('pesanan', 'pesanan.id_pesanan=detail_pesanan.id_pesanan')
         ->get()->getResultArray();  
    }

    // public function getRincian($id)
    // {
    //      return $this->db->table('detail_pesanan')
    //      ->join('menu','menu.id_menu=detail_pesanan.id_menu')
    //      ->join('pesanan', 'pesanan.id_pesanan=detail_pesanan.id_pesanan')
    //      ->where('pesanan.id_pesanan', $id)
    //      ->get()->getResultArray();  
    // }

}