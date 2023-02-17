<?php

namespace App\Models;

use App\Models;
use CodeIgniter\Model;

class M_transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey = 'id_transaksi';
    protected $allowedFields = [
        'id_pesanan', 'id', 'jml_bayar', 'jml_kembalian', 'tanggal',
    ];

    public function transaksi(){
        return $this->db->table('transaksi')->countAllResults();
    }

    public function rincian(){
        return $this->db->table('transaksi')
        ->join('pesanan', 'pesanan.id_pesanan=transaksi.id_pesanan')
        ->join('user', 'user.id=transaksi.id')
        ->get()->getResult();
    }
}