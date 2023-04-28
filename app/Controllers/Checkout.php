<?php

namespace App\Controllers;

class Checkout extends BaseController
{
    protected $builder;
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('keranjang');
    }

    public function index()
    {

        $produk = $this->builder->join('produk', 'produk.id = keranjang.barang_id', 'INNER')->where(['user_id' => user_id()])->get()->getResultArray();

        $total = 0;
        foreach ($produk as $p) {
            $total += $p['jumlah'] * $p['harga'];
        }


        $data = [
            'title' => 'Checkout Barang Anda || Rizhura Cafe',
            'subtotal' => $total,
            'ongkir' => 9000
        ];

        return view('checkout/index', $data);
    }
}
