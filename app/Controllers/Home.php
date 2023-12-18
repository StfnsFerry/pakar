<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\SellerModel;
use App\Models\PesananModel;

class Home extends BaseController
{

    public $produkModel;
    public $sellerModel;
    public $pesananModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->sellerModel = new SellerModel();
        $this->pesananModel = new PesananModel();
    }
    
    public function index()
    {

        if (logged_in()) {
            if (in_groups('admin')) {
                return redirect()->to(base_url('/admin'));
            } else if (in_groups('seller')) {
                return redirect()->to(base_url('/penjual'));
            }else if (in_groups('user')) {
                $produk = $this->produkModel->getRandProduk();
    
                $data = [
                    'produk' => $produk,
                ];
                return view('landing-page/home', $data);
            }
        } else{
            $produk = $this->produkModel->getRandProduk();
    
            $data = [
                'produk' => $produk,
            ];
            return view('landing-page/home', $data);
        }
    }

    Public function recommendation(){
        return view ('landing-page/recommendation');
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

    public function detailProduk($id)
    {
        $produk = $this->produkModel->getAllProduk($id);
        $item = $this->produkModel->getRandProduk();

        $data = [
            'produk' => $produk,
            'item' => $item
        ];

        return view('landing-page/detail_produk',$data);
    }

    public function checkoutProduk($id)
    {
        $produk = $this->produkModel->getAllProduk($id);   

        $data = [
            'produk' => $produk,
        ];

        return view('landing-page/checkout',$data);
    }

    public function paymentProduk($id)
    {
        $produk = $this->produkModel->getAllProduk($id);   
        $banyak_barang = $this->request->getVar('banyak_barang');
        if($produk['stok'] < $banyak_barang){
            return redirect()->to(base_url('/checkout/'. $id))->withInput();
        }
        $data = [
            'produk' => $produk,
            'nama_penerima' => $this->request->getVar('nama_penerima'),
            'alamat' => $this->request->getVar('alamat'),
            'telepon' => $this->request->getVar('telepon'),
            'banyak_barang' => $banyak_barang,
        ];

        return view('landing-page/payment',$data);
    }

    public function transaksiProduk($id)
    {
        $produk = $this->produkModel->getAllProduk($id);   
        $banyak_barang = $this->request->getVar('banyak_barang');

        if($produk['stok'] < $banyak_barang){
            return redirect()->to(base_url('/checkout/'. $id))->withInput();
        }else{
            $newStock = $produk['stok'] - $banyak_barang;
            $this->produkModel->update($id, ['stok' => $newStock]);

            $data =[
                'id_toko' => $this->request->getVar('id_toko'),
                'id_produk' => $this->request->getVar('id_produk'),
                'id_pembeli' => $this->request->getVar('id_pembeli'),
                'nama_penerima' => $this->request->getVar('nama_penerima'),
                'alamat' => $this->request->getVar('alamat'),
                'telepon' => $this->request->getVar('telepon'),
                'banyak_barang' => $banyak_barang,
                'kurir' => $this->request->getVar('kurir'),
                'pembayaran' => $this->request->getVar('pembayaran'),
                'total_harga' => $this->request->getVar('total_harga'),
            ];

            $result = $this->pesananModel->saveTransaksi($data);

            return redirect()->to(base_url('/shop'));
        }

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
