<div class="container mt-5">
  <div class="row mb-5">
    <div class="col-12">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-bold text-uppercase my-auto">Tulis Cerita</h4>

        <a href="<?= base_url('ceritaku'); ?>" class="btn btn-primary">Kembali</a>
      </div>

      <div class="card custom-card">
        <div class="card-body">
          <form action="<?= base_url('ceritaku/tambah'); ?>" method="POST">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control" autofocus value="<?= set_value('judul'); ?>">
              <?= form_error('judul', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="isi">Isi Cerita</label>
              <textarea name="isi" id="isi"></textarea>
              <?= form_error('isi', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="id_kategori">Kategori Cerita</label>
              <select name="id_kategori" id="id_kategori" class="custom-select">
                <?php foreach ($kategori as $k) : ?>
                  <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Publikasikan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>