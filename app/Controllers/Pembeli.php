<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\UserModel;

class Pembeli extends BaseController
{
    public $produkModel;
    public $userModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->userModel = new UserModel();
    }
    public function user()
    {
        return view('dashboard-pembeli/index');
    }

    public function keranjang()
    {
        $produk = $this->produkModel->getProduk();

        $data  = [
            'title' => 'keranjang',
            'produk' => $produk,
        ];
        return view('dashboard-pembeli/keranjang', $data);
    }

    public function pemesanan()
    {
        return view('dashboard-pembeli/pemesanan');
    }

    public function pengembalian()
    {
        return view('dashboard-pembeli/pengembalian');
    }

    public function profile()
    {
        return view('dashboard-pembeli/profile');
    }
}
