<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class PenjualController extends BaseController
{

    public $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        return view('dashboard-penjual/penjual');
    }

    public function transaksi()
    {
        return view('dashboard-penjual/transaksi');
    }

    public function produk()
    {
        $user_id = user()->id;
        $produk = $this->produkModel->getProduk();

        $data  = [
            'title' => 'Sneakers - Seller',
            'user_id' => $user_id,
            'produk' => $produk,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard-penjual/produk',$data);
    }

    public function pesanan()
    {
        return view('dashboard-penjual/pesanan');
    }

    public function create()
    {
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama produk harus di isi'
                ]
            ],
            'id_toko' => [
                'rules' => 'required',
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} deskripsi harus di isi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harga harus di isi.'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} stok harus di isi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/penjual/produk'))->withInput()->with('validation', $validation);
        }
        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $this->produkModel->saveProduk([
            'nama_produk' => $this->request->getVar('nama_produk'),
            'id_toko' => $this->request->getVar('id_toko'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'foto' => $foto
        ]);
       
        return redirect()->to(base_url('/penjual/produk'));
    }

    public function update($id){
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
        ];

        if($foto->isValid()) {
            $name = $foto->getRandomName();

            if($foto->move($path, $name)){
                $foto_path = base_url($path . $name);

                $data['foto'] = $foto_path;
            }
        }

        $result = $this->produkModel->updateProduk($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/penjual/produk'));
    }

    public function destroy($id){
        $result = $this->produkModel->deleteProduk($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        return redirect()->to(base_url('/penjual/produk'))
            ->with('success', 'Berhasil menghapus data');
    }
}

