<?php

namespace App\Controllers;

class Checkout extends BaseController
{
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

    public function transaction()
    {
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $no_kartu = $this->request->getPost('credit-card');
        $totalBayar = $this->request->getPost('bayar');

        $this->transaksiModel->save([
            'nama_lengkap' => $nama,
            'alamat' => $alamat,
            'user_id' => user_id(),
            'no_kartu' => $no_kartu,
            'total' => $totalBayar,
            'status_pemesanan' => 'diproses'
        ]);

        $this->builder->delete(['user_id' => user_id()]);

        return redirect()->to('/transaksi');
    }
}
