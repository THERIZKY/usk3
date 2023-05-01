<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <h2 class="mt-4 text-center">
                Daftar Printer Kami
            </h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/admin/produk/tambah" class="btn btn-primary my-3">Tambah Data</a>
            <div class="d-flex flex-wrap gap-5 mb-5 mt-2">
                <?php foreach ($printer as $p) : ?>
                    <div class="card py-4" style="width: 18rem;">
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