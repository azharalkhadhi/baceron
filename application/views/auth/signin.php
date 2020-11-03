<div class="container">
  <div class="center">
    <h1>sign in</h1>
    <?= $this->session->flashdata('info'); ?>

    <form method="POST" action="<?= base_url('auth/signin'); ?>">
      <div class="form-group">
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        <?= form_error('username', '<span class="text-danger">', '</span>'); ?>
      </div>
      <!-- ampe ini buat nanti sign in mh -->
      <div class="form-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <?= form_error('password', '<span class="text-danger">', '</span>'); ?>
      </div>

      <div class="form-group">
        <button type="submit" class="submit">SIGN IN</button>
      </div>
    </form>
  </div>
</div>