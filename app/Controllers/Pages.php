<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $produk = $this->produkModel->getProduk();
        $data = [
            'title' => 'Home || Rizhura Computer',
            'produk' => $produk
        ];

        return view('main/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Rizhura Computer'
        ];
        return view('main/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Rizhura Computer'
        ];
        return view('main/contact', $data);
    }
}
