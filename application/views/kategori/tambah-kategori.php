<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-bold text-uppercase my-auto">Tambah Kategori</h4>

        <a href="<?= base_url('kategori'); ?>" class="btn btn-primary">Kembali</a>
      </div>
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