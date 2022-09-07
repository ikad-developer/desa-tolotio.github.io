<?php
setcookie('halaman','struktur-organisasi.php');
setcookie('menu','parent-struktur-organisasi');
$jabatan = ["Kepala Desa","Sekretaris","bendahara","kepala dusun mawar","kepala dusun melati","kepala dusun kucup merah","kepala dusun aglonema","kapala dusun padinggi","anggota","anggota","anggota","anggota","anggota","anggota","anggota","anggota"];
?>
<div class="row">
<?php
for($i=0; $i<16; $i++){
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
</div>