<!-- awal navbar -->
<nav>
    <div class="container">

        <div class="brand">
            <h3>BACERON</h3>
        </div>

        <ul>
            <li>
                <a href="<?php echo base_url('kategori') ?>">Beranda</a>
            </li>
            <li>
                <a href="#">Ceritaku</a>
            </li>
            <li>
                <a href="<?php echo base_url('tentangkami') ?>">Tentang Kami</a>
            </li>
            <li>
                <?= $user['username']; ?>,
                <a href="<?php echo base_url('auth/logout') ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- akhir navbar -->