<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
{
    public $produkModel;
    public $pesananModel;

    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        //
    }

    public function payment($id)
    {
        $produk = $this->produkModel->getAllProduk($id);

        $data = [
            'produk' => $produk,
            'nama_pembeli' => $this->request->getVar('nama_pembeli'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
        ];

        return view('landing-page/payment',$data);
    }

    public function transaksi()
    {

    }
}
