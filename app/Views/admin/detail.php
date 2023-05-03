<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <div class="card">
                <h5 class="card-header"><img src="/img/<?= $produk['gambar']; ?>" alt=""></h5>
                <div class="card-body">
                    <h5 class="card-title"><b><?= $produk['nama']; ?></b></h5>
                    <p class="card-text mx-5 my-4"><?= $produk['deskripsi']; ?></p>
                    <p class="card-text mx-5 my-3"><?php $harga = $produk['harga'];
                                                    echo "Rp. " .  number_format($harga, 0, '.', '.') ?></p>
                    <a href="/admin/produk/edit/<?= $produk['slug']; ?>" class="btn btn-warning">Edit produk</a>

                    <form action="/admin/produk/<?= $produk['id']; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Printer Ini?')">Hapus Printer</button>
                    </form>
                    <div class="row justify-content-md-center mt-3">
                        <div class="col-6">
                            <a href="/admin" class="btn btn-primary">Kembali Ke Halaman Utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>