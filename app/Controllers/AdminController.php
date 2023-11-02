<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('dashboard-admin/index');
    }

    public function toko()
    {
        return view('dashboard-admin/toko');
    }

    public function transaksi()
    {
        return view('dashboard-admin/transaksi');
    }

    public function pengembalian()
    {
        return view('dashboard-admin/pengembalian');
    }
}
