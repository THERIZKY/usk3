<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-7">
            <h2 class="text-center">Welcome To Rizhura Computer</h2>
            <div id="carouselExample" class="carousel slide my-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/sampul.jpg" class=" w-100 h-100">
                    </div>
                    <?php foreach ($produk as $p) : ?>
                        <div class="carousel-item">
                            <img src="/img/<?= $p['gambar']; ?>" class="w-100 h-100">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
/img/1681358414_3ee329c2d847393d9fb0.jpg
/img/1680751011_f5833c7c27ab62c5a465.jpg
/img/printerhp1216.jpg