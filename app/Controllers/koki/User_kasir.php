<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;
use App\Models\M_pesanan;
use App\Models\M_detailpesanan;
use App\Models\M_transaksi;
use Dompdf\Dompdf;

class User_kasir extends BaseController
{
    public function index()
    {
        $rincian = new M_detailpesanan();
        $pesanan = new M_pesanan();
        $data['pesanan'] = $pesanan->orderBy('id_pesanan')->whereIn('status_pesanan',['selesai','bayar'])->findAll();
        $data['detail_pesanan'] = $rincian->getRincian();
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
            "tanggal_transaksi" => date("Y-m-d H:i:s"),
            // "status_pesanan" => $simpan["status"],
            // "status" => 'bayar'
        ];
        $transaksi->insert($data);

        $id_pesanan = $simpan["id_pesanan"];
        $datas = [
            'status_pesanan' => 'bayar',
        ];

        $pesanan->update($id_pesanan, $datas);

        // return redirect()->to('dashboard/transaksi');
        return redirect()->to('dashboard/struk'.'/'.$id_pesanan);
    }

    public function struk($id_pesanan){

        $transaksi = new M_transaksi();
        $rincian = new M_detailpesanan();
        $data['rincian'] = $rincian->getRincian();
        $data['transaksi'] = $transaksi->orderBy('id_pesanan')->where('id_pesanan', $id_pesanan)->findAll();
        // echo json_encode($data['transaksi']);
        return view('struk', $data);
    }

    public function laporan()
    {
        $transaksi = new M_transaksi();
        $data['transaksi'] = $transaksi->getLaporan();
        return view('layout/v_laporan', $data);
    }

    public function exportPDF(){
        $transaksi = new M_transaksi();
        $data['transaksi'] = $transaksi->getLaporan();
        $view = view('v_pdf', $data);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('laporan-penjualan', array('Attachment'=>false));
    }

    // public function filter(){
        
    // }
}