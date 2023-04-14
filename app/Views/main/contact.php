<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-8">
            <h2>Contact Us Here</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-brands fa-instagram"> Instagram</i></a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-brands fa-facebook"> Facebook</i></a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-brands fa-twitter"> Twitter</i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>