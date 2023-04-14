<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <h2 class="text-center mb-3"><b>Halaman Edit Data Produk</b></h2>
        <div class="col-6 form">
            <form action="/admin/produk/update/<?= $produk['id']; ?>" method="post" enctype="multipart/form-data">
                <?php csrf_field(); ?>
                <!-- <input type="hidden" name="gambarLama" id="gambarLama" value="<?php $produk['gambar'] ?>"> -->
                <input type="hidden" name="slug" value="<?php $produk['slug']; ?>">
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukan Nama Barang" value="<?= $produk['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi" id="deskripsi" rows="6" placeholder="Masukan Deskripsi" class="form-control" style="resize: none;"><?= $produk['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukan Harga Produk" value="<?= $produk['harga']; ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Masukan Gambar</label>
                    <input type="file" accept="image/*" class="form-control" name="gambar" id="gambar" placeholder="Masukan Gambar Produk" value="<?= $produk['gambar']; ?>">
                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-center">
                        <img src="/img/<?= $produk['gambar']; ?>" class="img-thumbnail">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row text-center mx-5">
                        <button type="submit" class="btn btn-danger p-2" onclick="return confirm('apakah anda yakin ingin mengedit data ini?')">Edit Data Produk</button>

                        <!-- Modals Pop Up -->
                        <!-- End Modals -->

                        <a href="/admin" class="btn btn-primary my-3 p-2">Kembali Ke Halaman Utama</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>