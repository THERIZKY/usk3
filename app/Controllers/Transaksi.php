<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        $produk = $this->transaksiModel->where('user_id', user_id())->findAll();
        $data = [
            'title' => 'Transaki Yang Sedang Berlangsung',
            'produk' => $produk
        ];

        return view('transaksi/transaksi', $data);
    }
}
