<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PenjualController extends BaseController
{
    public function index()
    {
        return view('dashboard-penjual/penjual');
    }

    public function transaksi()
    {
        return view('dashboard-penjual/transaksi');
    }

    public function pesanan()
    {
        return view('dashboard-penjual/pesanan');
    }
}

