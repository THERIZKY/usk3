<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-16">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" class="col-1">Harga Produk</th>
                        <th scope="col" class="col-2">Jumlah</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($produk as $p) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="/hapus"></a></th>
                            <td><img src="/img/<?= $p['gambar']; ?>"></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['deskripsi']; ?></td>
                            <td>
                                <?php
                                $harga = $p['harga'] * $p['jumlah'];
                                echo "Rp. " . number_format($harga, 0, '.', '.');
                                ?>
                            </td>
                            <td>
                                <form class="d-inline" action="/keranjang/add/<?= $p['slug']; ?>">
                                    <?= csrf_field(); ?>
                                    <button class="btn"><i class="fa-solid fa-plus px-2"></i></button>
                                </form>
                                <?= $p['jumlah']; ?>
                                <form class="d-inline" action="/keranjang/minus/<?= $p['id']; ?>">
                                    <?= csrf_field(); ?>
                                    <button onclick="<?php echo $p['jumlah'] > 1 ? "" : "return confirm('Apakah Anda Yakin Ingin Menghilangkan Barang Dari Keranjang?')" ?>" class="btn"><i class="fa-solid fa-minus px-2"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
            <div class="col text-center">
                <a href="/checkout" class="btn btn-primary my-3 py-2d px-5">Checkout</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>