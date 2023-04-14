<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <div class="card">
                <h5 class="card-header"><img src="/img/<?= $printer['gambar']; ?>" alt=""></h5>
                <div class="card-body">
                    <h5 class="card-title"><b><?= $printer['nama']; ?></b></h5>
                    <p class="card-text mx-5 my-4"><?= $printer['deskripsi']; ?></p>

                    <div class="row justify-content-md-center mt-3">
                        <div class="col-6 mx-3">
                            <form class="m-3" action="/keranjang/add/<?= $printer['slug']; ?>">
                                <?php if (logged_in()) : ?>
                                    <button class="btn btn-success">Masukan Keranjang</button>
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