<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pembeli extends BaseController
{
    public function user()
    {
        return view('dashboard-pembeli/index');
    }

    public function keranjang()
    {
        return view('dashboard-pembeli/keranjang');
    }

    public function pemesanan()
    {
        return view('dashboard-pembeli/pemesanan');
    }

    public function pengembalian()
    {
        return view('dashboard-pembeli/pengembalian');
    }
}
