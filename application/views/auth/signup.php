<h1 class="cover">BACERON</h1>
<div class="container">
	<div class="row justify-content-between align-items-center hv-100">
		<div class="col-md-7 col-12" id="signup">
			<h1 class="text-bold text-primary mb-2">BACERON</h1>
			<img src="<?= base_url('assets/'); ?>img/signup.png" alt="people signup" class="img-fluid">
		</div>

		<div class="col-md-5 col-12">
			<div class="card shadow custom-card p-3">
				<div class="card-body">
					<h1 class="text-bold text-uppercase pb-2 text-center">Sign up</h1>

					<form method="POST" action="<?= base_url('auth/signup'); ?>">
						<!-- tinggal apus disini -->
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
							<?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>

						<div class="form-group">
							<input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
							<?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>
						<!-- ampe ini buat nanti sign in mh -->
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>

						<div class="form-group">
							<input type="password" name="password1" id="password1" class="form-control" placeholder="Repeat Password">
							<?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>

						<div class="form-group d-flex justify-content-center">
							<button type="submit" class="btn btn-primary">SIGN UP</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>