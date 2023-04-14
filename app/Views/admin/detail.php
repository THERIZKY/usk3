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
                    <a href="/admin/produk/edit/<?= $printer['slug']; ?>" class="btn btn-warning">Edit Printer</a>

                    <form action="/admin/produk/<?= $printer['id']; ?>" method="post" class="d-inline">
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