<?php

namespace App\Controllers;


class Admin extends BaseController
{
    protected $builder;
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('transaksi');
    }

    /* buat Masuk dashboard admin */
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin || Rizhura Computer',
        ];
        return view('admin/index', $data);
    }


    //Untuk Halaman Detail
    public function detail($slug)
    {
        $produk = $this->produkModel->getProduk($slug);
        $data = [
            'title' => 'Detail Produk || Rizhura Computer',
            'produk' => $produk
        ];

        return view('admin/detail', $data);
    }

    /* Untuk Konfirmasi Barang */
    public function konfirmasi()
    {
        $query = $this
            ->db
            ->query("SELECT * FROM konfirmasi JOIN transaksi ON konfirmasi.id_transaksi = transaksi.id;");

        $transaksi = $query->getResultArray();
        $data = [
            'title' => 'Konfirmasi Transaksi',
            'transaksi' => $transaksi
        ];

        return view('admin/konfirmasi/konfirm_barang', $data);
    }

    /* Method Untuk Masuk Ke List Barang */
    public function list()
    {
        $produk = $this->produkModel->getProduk();
        $data = [
            'title' => 'Daftar Produk || Rizhura Computer',
            'produk' => $produk
        ];
        return view('admin/list_barang/list', $data);
    }


    /* Method Untuk Masuk Ke List Transaksi */
    public function AllTransaksi()
    {
        $transaksi = $this->transaksiModel->findAll();
        $data = [
            'title' => 'List Transaksi || Rizhura Computer',
            'transaksi' => $transaksi
        ];

        return view('admin/accTransaksi/transaksiAdmin', $data);
    }

    public function ChangeStatus($idTransaksi)
    {
        $newStatus  = $this->request->getPost('status_pemesanan');
        if (empty($newStatus)) {
            $status_pemesanan = $this->request->getPost('oldStatus');
        } else {
            $status_pemesanan = $newStatus;
        }
        $this->transaksiModel->update($idTransaksi, ['status_pemesanan' => $status_pemesanan]);

        session()->setFlashdata('pesan', 'Status Pemesanan Berhasil Dirubah');
        return redirect()->to('/admin/list-transaksi');
    }



    /* Method Tambah Data */
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Produk || Rizhura Computer'
        ];
        return view('admin/tambah', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama_produk'), '-', true);

        // Ngambil gambar
        $Filegambar = $this->request->getFile('gambar');

        if ($Filegambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            // buat nama gambar
            $namaGambar = $Filegambar->getRandomName();
            //pindahin gambar
            $Filegambar->move('img', $namaGambar);
        }

        $this->produkModel->save([
            'nama' => $this->request->getVar('nama_produk'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to('/admin');
    }


    /* Method Hapus Data */
    public function hapus($id)
    {
        // Cari nama file
        $printer = $this->produkModel->find($id);
        if ($printer['gambar'] != 'default.jpg') {
            //hapus gambar
            unlink('img/' . $printer['gambar']);
        }

        $this->produkModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('/admin');
    }


    /* Method Edit Data */
    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Data Produk || Rizhura Computer',
            'produk' => $this->produkModel->getProduk($slug)
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('nama_produk'), '-', true);

        // Ambil Gambar Baru 
        $gambarBaru = $this->request->getFile('gambar');
        $gambarLama = $this->produkModel->find($id)['gambar'];

        // Kalau data tidak di upload
        if ($gambarBaru->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            if ($gambarLama != 'default.jpg') {
                unlink('img/' . $gambarLama);
            }
            $namaGambar = $gambarBaru->getRandomName();
            $gambarBaru->move('img', $namaGambar);
        }


        $data = [
            'nama' => $this->request->getVar('nama_produk'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ];

        $this->produkModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data Berhasil Dirubah!');
        return redirect()->to('/admin');
    }
}
