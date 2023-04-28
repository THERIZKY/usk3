<?= $this->extend('layout/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
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
            <form>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea class="form-control" style="resize: none;" id="address" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="credit-card">Nomor Kartu Kredit:</label>
                    <input type="text" class="form-control" id="credit-card" name="credit-card">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>