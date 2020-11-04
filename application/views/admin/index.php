<div class="container mt-5">
  <div class="row mb-3">
    <div class="col-md-12 col">
      <h3 class=" text-bold text-uppercase">Daftar Kategori</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col">
      <?php foreach ($kategori as $ktgr) : ?>
        <a href="<?= base_url('kategori/daftarcerita/') . $ktgr['id_kategori']; ?>" class="btn btn-primary"><?= $ktgr['nama_kategori']; ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>