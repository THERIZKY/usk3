<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <h2>Total Belanja</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Subtotal produk</th>
                        <th>Total Ongkir</th>
                        <th>Total Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php
                            $total = $subtotal;
                            echo number_format($total, 0, '.', '.');
                            ?>
                        </td>
                        <td>
                            <?php echo number_format($ongkir, 0, '.', '.'); ?>
                        </td>
                        <td>
                            <?php
                            $totalBayar = $total + $ongkir;
                            echo number_format($totalBayar, 0, '.', '.');
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <h2>Checkout</h2>
            <form action="/checkout/done" method="POST" class="p-3">
                <input type="hidden" name="bayar" value="<?= $totalBayar; ?>">
                <div class="form-group my-2">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group my-2">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" style="resize: none;" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group my-2">
                    <label for="credit-card">Nomor Kartu Kredit:</label>
                    <input type="number" class="form-control" id="credit-card" name="credit-card">
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>