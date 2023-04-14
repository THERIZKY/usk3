<?php

namespace App\Controllers;

use App\Models\produkModel;

class Pages extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new produkModel();
    }
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
