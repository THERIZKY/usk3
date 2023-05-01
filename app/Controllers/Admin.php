<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function index()
    {
        $printer = $this->produkModel->getProduk();
        $data = [
            'title' => 'Daftar Produk || Rizhura Computer',
            'printer' => $printer
        ];
        return view('admin/index', $data);
    }
    public function detail($slug)
    {
        $printer = $this->produkModel->getProduk($slug);
        $data = [
            'title' => 'Detail Produk || Rizhura Computer',
            'printer' => $printer
        ];

        return view('admin/detail', $data);
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
