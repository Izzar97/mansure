<?php

namespace App\Models;

use App\Models;
use CodeIgniter\Model;

class M_transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey = 'id_transaksi';
    protected $allowedFields = [
        'id_pesanan', 'id_user', 'jml_bayar', 'jml_kembalian', 'tanggal_transaksi',
    ];

    public function transaksi(){
        return $this->db->table('transaksi')->countAllResults();
    }

    // public function getDetail(){
    //     return $this->db->table('transaksi')
    //     ->join('pesanan', 'pesanan.id_pesanan=transaksi.id_pesanan')
    //     ->join('user', 'user.id=transaksi.id')
    //     ->get()->getResultArray();
    // }

    public function getLaporan()
    {
         return $this->db->table('transaksi')
         ->join('pesanan', 'pesanan.id_pesanan=transaksi.id_pesanan')
        //  ->join('user', 'user.id_user=transaksi.id_user')
         ->get()->getResultArray();  
    }
}