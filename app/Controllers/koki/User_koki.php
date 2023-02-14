<?php

namespace App\Controllers\koki;

use App\Controllers\BaseController;
use App\Models\M_detailpesanan;
use App\Models\M_pesanan;
use CodeIgniter\API\ResponseTrait;

class User_koki extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $koki = new M_pesanan;
        $detail = new M_detailpesanan();
        $data['koki'] = $koki->orderBy('no_meja')->findAll();
         $data['detail'] = $detail->getRincian();
         return view('layout/v_koki',$data);


         
        // $data['detail'] = $detail->orderBy('id_pesanan')->findAll();

        // $pager = \Config\Services::pager();
    	// $model = new ModelsSiswa();
    	// $kunci = $this->request->getVar('cari');

        // if ($kunci) {
        //     $query = $koki->pencarian($kunci);
        //     $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan ".$query->affectedRows()." Data";
        // } else {
        //     $query = $koki;
        //     $jumlah = "";
        // }

        // $data['pesanan'] = $query->paginate(10);
        // $data['pager'] = $koki->pager;
        // $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        // $data['jumlah'] = $jumlah;
        
    }

    // public function show()
    // {
    //     $detail = new M_detailpesanan();
    //     $id = $this->request->getGet("id");
    //     $datax = $detail->getRincian($id);
    //     $response = [
    //         'message' => 'Success Get Detail Pesanan',
    //         'data' => $datax,
    //     ];
    //     $access = json_encode($response);

    //     // if($datax){
            
    //     // }
    //     // else{
    //     //     $response = [
    //     //         'message' => 'Failed Get Detail Pesanan',
    //     //         'data' => null,
    //     //     ];
    //     //     $access = json_encode($response);
    //     // }
    //     return $access;
    // }

    public function pencarian(){
        
    }
}