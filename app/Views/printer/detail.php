<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <div class="card">
                <h5 class="card-header"><img src="/img/<?= $produk['gambar']; ?>" alt=""></h5>
                <div class="card-body">
                    <h3 class="card-title"><b><?= $produk['nama']; ?></b></h3>
                    <h5 class="card-text mx-5 my-3"><?php $harga = $produk['harga'];
                                                    echo "Rp. " . number_format($harga, 0, '.', '.') ?></h5>
                    <p class="card-text mx-5 my-4"><?= $produk['deskripsi']; ?></p>
                    <div class="row justify-content-md-center mt-3">
                        <div class="col-6 mx-3">
                            <form class="m-3" action="/keranjang/add/<?= $produk['slug']; ?>">
                                <?php if (logged_in() && in_groups("users")) : ?>
                                    <button class="btn btn-success">Masukan Keranjang</button>
                                <?php elseif (in_groups("admin")) : ?>
                                    <a href="/admin" class="btn btn-warning">Admin Tidak Dapat Memesan</a>
                                <?php else : ?>
                                    <a href="/login" class="btn btn-danger">Harap Login Terlebih Dahulu</a>
                                <?php endif; ?>
                            </form>
                            <a href="/produk" class="btn btn-primary">Kembali Ke Halaman Utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>