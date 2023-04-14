<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <h2 class="text-center mb-3"><b>Halaman Tambah Data Produk</b></h2>
        <div class="col-6 form">
            <form action="/admin/produk/save" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukan Nama Barang">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi" id="deskripsi" rows="6" placeholder="Masukan Deskripsi" class="form-control" style="resize: none;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukan Harga Produk">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Masukan Gambar</label>
                    <input type="file" accept="image/*" class="form-control" name="gambar" id="gambar" placeholder="Masukan Gambar Produk">
                </div>
                <div class="mb-3">
                    <div class="row text-center mx-5">
                        <button type="submit" class="btn btn-primary p-2">Tambah Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>