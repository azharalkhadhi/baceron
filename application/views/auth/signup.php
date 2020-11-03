<div class="container">
    <div class="center">
        <h1>sign up</h1>

        <form method="POST" action="<?= base_url('auth/signup'); ?>">
            <!-- tinggal apus disini -->
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
                <?= form_error('username', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
                <?= form_error('email', '<span class="text-danger">', '</span>'); ?>
            </div>
            <!-- ampe ini buat nanti sign in mh -->
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <?= form_error('password', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="form-group">
                <input type="password" name="password1" id="password1" class="form-control" placeholder="Repeat Password">
                <?= form_error('password1', '<span class="text-danger">', '</span>'); ?>
            </div>

            <div class="form-group">
                <button type="submit" class="submit">SIGN IN</button>
            </div>
        </form>
    </div>
</div>