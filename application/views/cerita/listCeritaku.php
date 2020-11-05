<div class="container mt-5">
  <div class="row mb-3">
    <div class="col-12 d-flex justify-content-between">
      <h4 class="text-bold text-uppercase my-auto">Ceritaku</h4>
      <a href="<?= base_url('ceritaku/tambah'); ?>" class="btn btn-primary">Tulis Cerita</a>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <?= $this->session->flashdata('info'); ?>
    </div>
  </div>

  <div class="row">
    <?php foreach ($cerita as $crt) : ?>
      <div class="col-md-3 col-sm-4 col">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-bold text-uppercase mb-3"><?= $crt['judul']; ?></h5>
            <h6 class="card-subtitle text-muted mb-3">
              Penulis :
              <?= $this->session->userdata('username'); ?>
            </h6>

            <h6 class="card-subtitle text-muted mb-3">
              Kategori :
              <?php
              $k = $this->Kategori_model->cekData('id_kategori', $crt['id_kategori']);
              echo $k['nama_kategori'];
              ?>
            </h6>

            <div class="d-flex justify-content-between">
              <a href="<?= base_url('ceritaku/edit/') . $crt['id']; ?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('ceritaku/hapus/') . $crt['id']; ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>