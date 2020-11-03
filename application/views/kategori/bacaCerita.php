<!-- awal konten -->
<section class="konten">
  <div class="container">
  <a href="<?= base_url('kategori/daftarCerita/' . $cerita['id_kategori']); ?>" class="back-btn">Kembali</a><br>
  <br>
  
    <br>
        
   
    <div class="card">

        <div class="card-body">
            <h3 class="judul"> <?= $cerita['judul']; ?> </h3>
            <p>
            <?= $cerita['isi'] ?>
            </p>

        </div>
    </div>

  </div>
</section>
<!-- akhir konten -->   