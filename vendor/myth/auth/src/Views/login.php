<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="container">

	<?php session()->getFlashdata('pesan'); ?>

	<div class="row justify-content-center my-5">
		<div class="col-6 shadow-lg bg-body-secondary rounded p-5">

			<h2 class="text-center"><b><?= lang('Auth.loginTitle') ?></b></h2>

			<?= view('Myth\Auth\Views\_message_block') ?>
			<form action="<?= url_to('login') ?>" method="post">

				<?= csrf_field() ?>
				<?php if ($config->validFields === ['email']) : ?>
					<div class="form-group py-2">
						<label for="login"><?= lang('Auth.email') ?></label>
						<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php else : ?>
					<div class="form-group py-2">
						<label for="login"><?= lang('Auth.emailOrUsername') ?></label>
						<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="form-group py-2">
					<label for="password"><?= lang('Auth.password') ?></label>
					<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
					<div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>
				</div>

				<?php if ($config->allowRemembering) : ?>
					<div class="form-check py-2">
						<label class="form-check-label">
							<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
							<?= lang('Auth.rememberMe') ?>
						</label>
					</div>
				<?php endif; ?>
				<div class="text-center py-2">
					<button type="submit" class="btn btn-primary btn-block w-100"><?= lang('Auth.loginAction') ?></button>
				</div>
			</form>

			<?php if ($config->allowRegistration) : ?>
				<p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
			<?php endif; ?>
			<?php if ($config->activeResetter) : ?>
				<p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?= $this->endSection() ?>