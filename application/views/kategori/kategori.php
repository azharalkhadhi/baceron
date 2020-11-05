<div class="container mt-5">
  <div class="row">
    <div class="col-md-12 col">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-bold text-uppercase title my-auto">Daftar Kategori</h4>

        <?php if ($this->session->userdata('id_role') == 1) : ?>
          <a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-primary">Tambah Kategori</a>
        <?php endif; ?>
      </div>

      <!-- <?php foreach ($kategori as $ktgr) : ?>
        <a href="<?= base_url('kategori/daftarcerita/') . $ktgr['id_kategori']; ?>" class="btn btn-primary"><?= $ktgr['nama_kategori']; ?></a>
      <?php endforeach; ?> -->

      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1;
          foreach ($kategori as $ktgr) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $ktgr['nama_kategori']; ?></td>
              <td>
                <a href="<?= base_url('kategori/daftarcerita/') . $ktgr['id_kategori']; ?>" class="btn btn-primary btn-sm">Lihat Cerita</a>
                <?php if ($this->session->userdata('id_role') == 1) : ?>
                  <a href="#" class="btn btn-warning btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>