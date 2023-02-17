<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;
use App\Models\M_pesanan;
use App\Models\M_detailpesanan;
use App\Models\M_transaksi;

class User_kasir extends BaseController
{
    public function index()
    {
        $pesanan = new M_pesanan();
        $rincian = new M_detailpesanan();
        $status=['selesai', 'bayar'];
        $data['pesanan'] = $pesanan->orderby('id_pesanan')->whereIn('status_pesanan', $status)->findAll();
        $data['rincian'] = $rincian->getRincian();
        return view('layout/v_kasir', $data);
    }

    public function bayar($id_pesanan){
        date_default_timezone_set('Asia/Jakarta');
        $pesanan = new M_pesanan();
        $simpan = $this->request->getPost();
        $transaksi = new M_transaksi();
        
        // $id_pesanan = $pesanan->getInsertID();
        
        // $pesanan->where('id_pesanan', $id_pesanan);
        // $pesanan->update($datas);

        // $pesanan->update($datas, ['id_pesanan' => $id_pesanan]);

        // $id_pesanan = $simpan["id_pesanan"];
        $data = [
            "id_pesanan" => $simpan["id_pesanan"],
            "jml_bayar" => $this->request->getPost('jml_bayar'),
            "tanggal" => date("Y-m-d H:i:s"),
            // "status_pesanan" => $simpan["status"],
            // "status" => 'bayar'
        ];
        $transaksi->insert($data);

        $id_pesanan = $simpan["id_pesanan"];
        $datas = [
            'status_pesanan' => 'bayar',
        ];

        $pesanan->update($id_pesanan, $datas);

        return redirect()->to('dashboard/transaksi');
    }

    public function laporan()
    {
        $pesanan = new M_pesanan();
        $transaksi = new M_transaksi();
        $data['pesanan'] = $pesanan->orderby('id_pesanan')->where('status_pesanan', 'bayar')->findAll();
        $data['transaksi'] = $transaksi->rincian();
        return view('layout/v_laporan', $data);
    }
}