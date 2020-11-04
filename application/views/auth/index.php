<div class="container">
	<div class="row justify-content-center align-items-center hv-100">
		<div class="col-md-8 col" id="signup">
			<h1 class="text-bold text-primary">BACERON</h1>
			<p class=" lead w-75">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusantium debitis modi reprehenderit placeat, beatae voluptatum nobis a consequuntur ratione, similique dolorem, et aspernatur officia quam quidem praesentium deserunt veritatis.
			</p>

			<a href="<?= base_url('auth/signup') ?>" class="btn btn-outline-primary">Sign Up</a>
		</div>
		<div class="col-md-4 col-12">
			<div class="card shadow-sm custom-card p-3">
				<div class="card-body">
					<h1 class="text-bold text-uppercase pb-2 text-center">sign in</h1>
					<?= $this->session->flashdata('info'); ?>

					<form method="POST" action="<?= base_url('auth'); ?>">
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="Username">
							<?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>
						<!-- ampe ini buat nanti sign in mh -->
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							<?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
						</div>

						<div class="form-group d-flex justify-content-center">
							<button type="submit" class="btn btn-primary">SIGN IN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>