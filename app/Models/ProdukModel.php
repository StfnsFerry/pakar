<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produk';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_toko','nama_produk', 'deskripsi', 'harga', 'stok','foto'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveProduk($data)
    {
        $this->insert($data);
    }

    public function getAllProduk($id = null){
        if($id != null){
            return $this->select('produk.*')->find($id);
        }    
        return $this->select('produk.*')->findAll();
    }

    public function getRandProduk(){ 
        return $this->select('produk.*')->orderBy('RAND()')->limit(4)->find();
    }

    public function getProduk($id = null)
    {
        if($id != null){
            return $this->select('produk.*')->find($id);
        }
        
        $user_id = user()->id;
        return $this->select('produk.*')->where('produk.id_toko',$user_id)->findAll();
    }

    public function updateProduk($data, $id){
        return $this->update($id,$data);
    }

    public function deleteProduk($id){
        return $this->delete($id);
    }
}
