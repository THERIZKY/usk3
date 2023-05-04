<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mb-5">
        <div class="col">
            <h2 class="mt-4 text-center">
                Daftar Printer Kami
            </h2>

            <a href="/admin/produk/tambah" class="btn btn-primary my-3"> <i class="fa-sharp fa-solid fa-plus"></i></a>
            <!-- <div class="d-flex flex-wrap gap-3 mb-5 ">
            </div> -->
            <div class="row row-cols-5 row-cols-md-2 gap-4 mb-5">
                <?php foreach ($produk as $p) : ?>
                    <div class="card pb-4" style="width: 18rem;">
                        <img src="/img/<?= $p['gambar']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nama']; ?></h5>
                            <p class="card-text"><?= $p['deskripsi']; ?></p>
                        </div>
                        <div class="text-center">
                            <a href="/admin/produk/<?= $p['slug']; ?>" class="btn btn-primary">Lebih Lanjut</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>