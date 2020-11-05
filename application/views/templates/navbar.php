<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand text-bold" href="#">BACERON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <?php if ($user['id_role'] == 1) : ?>
                    <a href="<?php echo base_url('admin') ?>" class="nav-link">Beranda</a>
                <?php else : ?>
                    <a href="<?php echo base_url('user') ?>" class="nav-link">Beranda</a>
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('ceritaku'); ?>">Ceritaku</a>


                <a class="nav-link" href="<?= base_url('kategori'); ?>">Kategori</a>


                <a class="nav-link" href="<?php echo base_url('tentangkami') ?>">Tentang Kami</a>
                <div class=" nav-link">
                    <?= $user['username']; ?>,
                    <a class="text-muted" href="<?php echo base_url('auth/logout') ?>">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->