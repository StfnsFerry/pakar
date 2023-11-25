<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\SellerModel;

class Home extends BaseController
{

    public $produkModel;
    public $sellerModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->sellerModel = new SellerModel();
    }
    
    public function index()
    {
        $produk = $this->produkModel->getRandProduk();

        $data = [
            'produk' => $produk,
        ];
        return view('landing-page/home', $data);
    }

    public function newarrival()
    {
        $produk = $this->produkModel->getRandProduk();
        $item = $this->produkModel->getAllProduk();

        $data = [
            'produk' => $produk,
            'item' => $item
        ];

        return view('landing-page/new_arrival', $data);
    }

    public function shop() 
    {

        $data['toko'] = $this->sellerModel->getSeller();

        foreach ($data['toko'] as $toko) {
            $data['produk'][$toko['id']] = $this->produkModel->where('id_toko', $toko['id'])->orderBy('RAND()')->limit(4)->find();
        }

        return view('landing-page/shop', $data);
    }

    public function collection()
    {
        $produk = $this->produkModel->getRandProduk();
        $item = $this->produkModel->getAllProduk();

        $data = [
            'produk' => $produk,
            'item' => $item
        ];

        return view('landing-page/collection',$data);
    }

    public function login() 
    {
        return view('auth/login');
    }

    public function register() 
    {
        return view('auth/register');
    }

    public function registerSeller() 
    {
        return view('auth/register_seller');
    }
}
