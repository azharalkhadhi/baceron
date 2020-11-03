<!-- awal konten -->
<section class="konten">
  <div class="container">
    <h3 class="judul"> Daftar Cerita Kategori : <?= $kategori['nama_kategori']; ?> </h3>
    <div class="btn-group">

      <?php foreach ($cerita as $crt) : ?>
      <button class="btn btn-radius">
        <a href="<?= base_url('kategori/bacaCerita/' . $crt['id']); ?>"><?= $crt['judul']; ?></a>
      </button>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<!-- akhir konten -->   