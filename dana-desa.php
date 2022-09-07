<?php
require 'config.php';
setcookie('halaman','dana-desa.php');
setcookie('menu','parent-dana-desa');
$bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus"];
?>

<center><h1>Uang KAS : <em><?= rupiah(800000000); ?></em></h1></center>
<center><h5><?= hari_ini(); ?>, <em><?= tgl_indo(date('Y-m-d')); ?></em></h5></center>

<div class="row mt-5">

  <div class="col-6 pr-4">
    <h2>Pengeluaran</h2>
<?php
for($i=0; $i<8; $i++){
?>
    <h5 class="detail" data-bulan="<?= $bulan[$i]; ?>"><?= $bulan[$i]; ?> <label class="float-right"><?= rupiah(16000000); ?></label></h5>
    <hr>
<?php
}
?>
  </div>

  <div class="col-6 pl-4">
    <h2>Pemasukan</h2>
<?php
for($i=0; $i<8; $i++){
?>
    <h5><?= $bulan[$i]; ?> <label class="float-right"><?= rupiah(16000000); ?></label></h5>
    <hr>
<?php
}
?>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="detail-anggaran" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul-detail"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pembuatan Jembatan penghubung antara dusun melati ke dusun mawar</td>
              <td>Rp 8.000.000</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Rapat penyusunan dan audit dana desa</td>
              <td>Rp 750.000</td>
            </tr>
            <tr>
              <td colspan="2" class="text-center"><b>T O T A L</b></td>
              <td>Rp. 8.750.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

    $('.detail').click(function(){
      $('#detail-anggaran').modal('show');
      var bulan = $(this).attr('data-bulan');
      $('#judul-detail').html('Pengeluaran bulan '+ bulan);
    })

  })
</script>