<?php
require 'config.php';
setcookie('halaman', 'struktur-organisasi.php');
setcookie('menu', 'parent-struktur-organisasi');
$jabatan = ["kades", "sekretaris", "bendahara", "kadus1", "kadus2", "kadus3", "kadus4"];
$label = ["Kepala Desa", "Sekretaris", "Bendahara", "Kepala Dusun I Tamendao", "Kepala Dusun II Tangalo", "Kepala Dusun III Liawao", "Kepala Dusun IV Tolite"];
?>
<div class="row mt-2">
  <?php
  for ($i = 0; $i < count($jabatan); $i++) {
  ?>
  <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-header bg-info text-white text-center">
        <?= strtoupper($label[$i]); ?>
      </div>
      <div class="card-body">
        <center>
          <img src="<?= cek_organisasi($jabatan[$i])['profil']; ?>" id="gambar-<?= $jabatan[$i]; ?>" class="mb-2"
            alt="..." width="113px" height="151px" style="width: 120px;">
          <h5><?= cek_organisasi($jabatan[$i])['nama']; ?></h5>
        </center>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php
  $staf = query("SELECT * FROM `organisasi` WHERE jabatan = 'staf' ");
  while ($data = mysqli_fetch_assoc($staf)) {
  ?>
  <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-header bg-info text-white text-center">
        STAF PEGAWAI
      </div>
      <div class="card-body">
        <center>
          <img src="<?= $data['foto']; ?>" id="gambar-<?= $jabatan[$i]; ?>" class="mb-2" alt="..." width="113px"
            height="151px" style="width: 120px;">
          <h5><?= $data['nama']; ?></h5>
        </center>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<!-- <div class="row">
  <?php
  for ($i = 0; $i < 16; $i++) {
  ?>
  <div class="col-3 mb-3">
    <div class="card">
      <img src="images/lurah.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Afandra Djafar</h5>
        <p><strong><?= strtoupper($jabatan[$i]); ?></strong></p>
      </div>
    </div>
  </div>
  <?php } ?>
</div> -->