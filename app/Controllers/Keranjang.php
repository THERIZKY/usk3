<?php

namespace App\Controllers;

use App\Models\produkModel;
use App\Models\keranjangModel;

class Keranjang extends BaseController
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
        $jumlah = $this->builder->selectCount('jumlah')->countAllResults();

        if ($jumlah > 0) {
            $this->builder->update(['jumlah' => +1], ['barang_id' => $produkId]);
            // $this->keranjangModel->update($produkId, ['jumlah' => +1]);
        } else {
            $this->keranjangModel->save([
                'user_id' => $userId,
                'barang_id' => $produkId,
                'jumlah' => 1
            ]);
        }


        return redirect()->to('/keranjang');
    }

    public function minusKeranjang($id)
    {
        $this->builder->delete(['barang_id' => $id]);

        return redirect()->to('/keranjang');
    }
}
