<?php

namespace App\Controllers;

class Users extends BaseController
{
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
