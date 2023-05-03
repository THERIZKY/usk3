<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function content()
    {
        $produk = $this->produkModel->getProduk();
        $data = [
            'title' => 'Daftar Product',
            'produk' => $produk
        ];

        return view('printer/index', $data);
    }

    public function detail($slug)
    {
        $produk = $this->produkModel->getProduk($slug);
        $data = [
            'title' => 'Detail Produk || Rizhura Computer',
            'produk' => $produk
        ];

        return view('printer/detail', $data);
    }
}
