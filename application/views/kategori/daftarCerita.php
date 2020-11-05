<div class="container mt-5">
  <div class="row mb-3">
    <div class="col-md-12 col">
      <h4 class="text-bold text-uppercase title mb-3">Daftar Cerita Kategori : <?= $kategori['nama_kategori']; ?></h4>
      <a href="<?= base_url('kategori'); ?>" class="btn btn-primary">Kembali</a>

    </div>
  </div>

  <div class="row">
    <?php foreach ($cerita as $crt) : ?>
      <div class="col-md-3 col-sm-4 col">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-bold text-uppercase"><?= $crt['judul']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
              Penulis :
              <?php
              $data = $this->db->get_where('user', ['id_user' => $crt['penulis']])->row_array();
              echo $data['username'];
              ?>
            </h6>
            <!-- <div class="text-truncate card-text mb-2">
              <?= $crt['isi']; ?>
            </div> -->

            <a href="<?= base_url('kategori/bacacerita/') . $crt['id']; ?>" class="btn btn-primary">Baca</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- <div class="col-md-12 col">
      <?php foreach ($cerita as $crt) : ?>
        <a href="<?= base_url('kategori/daftarcerita/') . $crt['id']; ?>" class="btn btn-primary"><?= $crt['judul']; ?></a>
      <?php endforeach; ?>
    </div> -->
  </div>
</div>