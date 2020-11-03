<!-- awal konten -->
<section class="konten">
  <div class="container">
  <h3 class="judul">Kategori</h3>
  
    <div class="btn-group">
      <?php foreach ($kategori as $ktr) : ?>
      <button class="btn btn-radius">
        <a href="<?= base_url('kategori/daftarCerita/' . $ktr['id_kategori']); ?>"><?= $ktr['nama_kategori']; ?></a>
      </button>
      <?php endforeach; ?>

    </div>  
  </div>
</section>
<!-- akhir konten -->   