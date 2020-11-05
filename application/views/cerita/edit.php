<div class="container mt-5">
  <div class="row mb-5">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-bold text-uppercase my-auto">Edit Cerita</h4>

        <a href="<?= base_url('ceritaku'); ?>" class="btn btn-primary">Kembali</a>
      </div>
      <div class="card custom-card">
        <div class="card-body">
          <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $cerita['id']; ?>">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" name="judul" id="judul" class="form-control" value="<?= $cerita['judul']; ?>">
              <?= form_error('judul', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="isi">Isi Cerita</label>
              <textarea name="isi" id="isi"><?= $cerita['isi']; ?></textarea>
              <?= form_error('isi', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>

            <div class="form-group">
              <label for="id_kategori">Kategori Cerita</label>
              <select name="id_kategori" id="id_kategori" class="custom-select">
                <?php foreach ($kategori as $k) : ?>
                  <?php if ($k['id_kategori'] == $cerita['id_kategori']) : ?>
                    <option value="<?= $k['id_kategori']; ?>" selected><?= $k['nama_kategori']; ?></option>
                  <?php else : ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>