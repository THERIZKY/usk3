<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <h2 class="mt-4 text-center">
                Dashboard Admin
            </h2>
            <div class="d-flex justify-content-center gap-5 my-5">

                <!-- Card Buat List Barang -->
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">List Barang Gudang</h5>
                        <p class="card-text">Hak Akses Untuk Mengatur Semua Barang Yang Tersedia</p>
                        <a href="/admin/list-barang" class="btn btn-primary">Atur List Barang</a>
                    </div>
                </div>

                <!-- Card Buat List Transaksi -->
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">List Transaksi</h5>
                        <p class="card-text">Hak Akses Untuk Mengatur Status Pemesanan User</p>
                        <a href="/admin/list-transaksi" class="btn btn-primary">Atur List Transaksi</a>
                    </div>
                </div>

                <!-- !PLAN! Card buat konfirmasi transaksi -->
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Konfirmasi Transaksi</h5>
                        <p class="card-text">Hak Akses Untuk Mengkonfirmasi Pembayaran Dan pesan user</p>
                        <a href="/admin/konfirmasi" class="btn btn-primary">Konfirmasi Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>