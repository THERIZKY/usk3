<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center justify-content-sm-center justify-content-xs-center">
        <div class="col-12 col-sm-10 col-xxl-8">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>No Transaksi</th>
                        <th>Pembeli</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($transaksi as $t) : ?>
                    <tbody class="text-center">
                        <tr>
                            <td>
                                <?= $t['id_transaksi']; ?>
                            </td>
                            <td><?= $t['nama_lengkap']; ?></td>
                            <td><?= $t['status_pemesanan']; ?></td>
                            <td>
                                <?php if ($t['status_pemesanan'] != 'menunggu konfirmasi') : ?>
                                    <p class="fw-bold">Sudah Di Konfirmasi</p>
                                <?php else : ?>

                                <?php endif; ?>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>