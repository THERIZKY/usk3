<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Total Harga</th>
                        <th>Status Pemesanan</th>
                    </tr>
                </thead>
                <?php if (empty($produk)) : ?>
                    <tbody>

                    </tbody>
                <?php else : ?>
                    <?php foreach ($produk as $p) : ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $p['nama_lengkap'] ?>
                                </td>
                                <td>
                                    <?= $p['alamat'] ?>
                                </td>
                                <td>
                                    <?php
                                    $harga = $p['total'];
                                    echo number_format($harga, 0, '.', '.');
                                    ?>
                                </td>
                                <td>
                                    <?= $p['status_pemesanan']; ?>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>