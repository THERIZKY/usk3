<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\KeranjangModel;

class Users extends BaseController
{
    protected $produkModel;
    protected $keranjangModel;
    protected $builder;

    public function __construct()
    {
        $db      = \Config\Database::connect();
        $this->builder = $db->table('keranjang');
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new produkModel();
    }

    public function content()
    {
        $printer = $this->produkModel->getProduk();
        $data = [
            'title' => 'Daftar Product',
            'printer' => $printer
        ];

        return view('printer/index', $data);
    }

    public function detail($slug)
    {
        $printer = $this->produkModel->getProduk($slug);
        $data = [
            'title' => 'Detail Produk || Rizhura Computer',
            'printer' => $printer
        ];

        return view('printer/detail', $data);
    }
}
