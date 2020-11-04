<div class="container mb-5">
  <div class="row mt-5">
    <div class="col-md-4">
      <div class=" position-fixed">
        <a href="<?= base_url('kategori/daftarCerita/' . $cerita['id_kategori']); ?>" class="btn btn-primary mb-2">Kembali</a><br>
        <h3 class="card-title mt-3"> <?= $cerita['judul']; ?></h3>
        <h6 class="card-subtitle text-muted mb-2">
          Penulis :
          <?php
          $data = $this->db->get_where('user', ['id_user' => $cerita['penulis']])->row_array();
          echo $data['username'];
          ?>
        </h6>
      </div>
    </div>

    <div class="col-md-8">
      <p class="card-text text-cerita">
        <?= $cerita['isi'] ?>
      </p>
    </div>
  </div>
</div>