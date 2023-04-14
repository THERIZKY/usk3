<?php

namespace App\Models;

use CodeIgniter\Model;

class produkModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'slug', 'deskripsi', 'harga', 'gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    public function getProduk($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
