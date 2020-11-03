<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Remaja</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="kosong"></div>
  <!-- awal navbar -->
  <nav>
    <div class="container">

      <div class="brand">
        <h3>BACERON</h3>
      </div>

      <ul>
        <li>
          <a href="<?php echo base_url('auth/kategori')?>">Beranda</a>
        </li>
        <li>
          <a href="#">Ceritaku</a>
        </li>
        <li>
          <a href="<?php echo base_url('auth/tentangkami')?>">Tentang Kami</a>
        </li>
        <li>
          <a href="#">Username,</a>
          <a href="<?php echo base_url('auth/signin')?>">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- awal konten -->
  <section class="konten">
    <div class="container">
      <h3 class="judul">Remaja</h3>

      <div class="btn-group">
        <button class="btn btn-radius">
          <a href="#">Cintaku</a>
        </button>
        <button class="btn btn-radius">
          <a href="#">Pernah Ada</a>
        </button>
      </div>
    </div>
  </section>
  <!-- akhir konten -->

</body>

</html>