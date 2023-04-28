<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\keranjangModel;

class Keranjang extends BaseController
{
    protected $produkModel;
    protected $keranjangModel;
    protected $builder;
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('keranjang');
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new produkModel();
    }
    public function keranjang()
    {
        $this->builder->select('*');
        $produk = $this->builder->join('produk', 'produk.id = keranjang.barang_id', 'INNER')->where(['user_id' => user_id()])->get()->getResultArray();

        // dd($produk);
        $data = [
            'title' => 'Your Cart | Keranjang Anda',
            'produk' => $produk
        ];

        return view('keranjang/index', $data);
    }


    public function addKeranjang($slug)
    {
        $produk = $this->produkModel->getProduk($slug);
        $produkId = $produk['id'];
        $userId = user_id();
        $keranjang = $this->keranjangModel->where(['barang_id' => $produkId, 'user_id' => $userId])->first();


        if ($keranjang) {
            $newJumlah = $keranjang['jumlah'] + 1;
            $this->keranjangModel->update($keranjang['id'], ['jumlah' => $newJumlah]);
        } else {
            $this->keranjangModel->save([
                'user_id' => $userId,
                'barang_id' => $produkId,
                'jumlah' => 1
            ]);
        }

        return redirect()->to('/keranjang');
    }


    public function minusKeranjang($produkId)
    {
        $keranjang = $this->keranjangModel->where('barang_id', $produkId)->first();

        if ($keranjang['jumlah'] > 1) {
            $newJumlah = $keranjang['jumlah'] - 1;
            $this->keranjangModel->update($keranjang['id'], ['jumlah' => $newJumlah]);
        } else {
            $this->builder->delete(['barang_id' => $produkId]);
        }

        return redirect()->to('/keranjang');
    }
}
