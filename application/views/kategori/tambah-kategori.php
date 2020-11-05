<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <h4 class="text-bold text-uppercase mb-3">Tambah Kategori</h4>
      <div class="card custom-card">
        <div class="card-body">
          <form action="<?= base_url('kategori/tambah'); ?>" method="POST">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" autofocus>
              <?= form_error('nama_kategori', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>