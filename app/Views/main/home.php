<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<!-- Hero section -->
<section class="hero mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1>Sedang Mencari Tempat Jualaan Printer Online?</h1>
                <p class="lead">Mencari printer yang andal dan terjangkau? Anda datang ke tempat yang tepat. Di PrinterShop, kami menawarkan berbagai macam printer untuk penggunaan pribadi dan bisnis.</p>
                <a href="/produk" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Features section -->
<section class="features mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Pilihannya Banyak</h3>
                        <p>Pilih dari beragam merek dan model printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>24/7 Customer Servive</h3>
                        <p>Tim dukungan pelanggan kami tersedia 24/7 untuk membantu Anda dengan pertanyaan atau masalah apa pun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured products section -->
<section class="featured-products mt-4 pb-5">
    <div class="container">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4">
                    <img src="/img/canonprintermg2527.jpg" alt="Printer" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Canon RMG 2527</h5>
                        <a href="/produk" class="btn btn-primary mt-3">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 pb-3">
                    <img src="/img/hptank500.jpg" alt="Printer" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">HP SMART TANK 500</h5>
                        <a href="/produk" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card mb-4 pb-3">
                    <img src="/img/hpinktank315.jpg" alt="Printer" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">HP INK TANK 315</h5>
                        <a href="/produk" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>