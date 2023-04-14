<?= $this->extend('layout/template'); ?>

<h2>Register Form</h2>

<?= $this->Section('content'); ?>
<?= form_open('register'); ?>

<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-6 px-5 form">
            <h1 class="text-center"><b>HALAMAN REGISTRASI</b></h1>
            <div class="mb-3 mt-4">
                <label for="nama" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="<?= set_value('nama'); ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username Yang Diinginkan" value="<?= set_value('username'); ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
            </div>
            <div class="mb-3">
                <label for="kon_password" class="form-label">Password</label>
                <input type="password" class="form-control" name="kon_password" id="kon_password" placeholder="Masukan Password">
            </div>

            <input type="submit" name="submit" value="Register">
        </div>
    </div>
</div>


<?= form_close(); ?>

<?= $this->endSection(); ?>