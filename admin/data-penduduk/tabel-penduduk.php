<?php
require 'functions.php';

if(isset($_POST['data-tabel'])){
  $hal = $_POST['halaman'];
  $cari = $_POST['cari'];
  $kategori = $_POST['kategori'];
  $limit = 15;
  if($cari == ''){
    if($kategori == 'penduduk'){
      $awal = $hal * $limit;
      $data_penduduk = query("SELECT * FROM `penduduk` LIMIT $awal, $limit ");
      $hitung_penduduk = query("SELECT * FROM `penduduk`");
    }else{
      $awal = $hal * $limit;
      $data_penduduk = query("SELECT * FROM `kartu_keluarga` JOIN penduduk ON kartu_keluarga.kepala_kk = penduduk.nik LIMIT $awal, $limit ");
      $hitung_penduduk = query("SELECT * FROM `kartu_keluarga`");
    }
  }else{
    if($kategori == 'penduduk'){
      $data_penduduk = query("SELECT * FROM `penduduk` WHERE nik = '$cari' ");
    }else{
      $data_penduduk = query("SELECT * FROM `penduduk` JOIN kartu_keluarga ON penduduk.nik = kartu_keluarga.kepala_kk WHERE kartu_keluarga.kepala_kk = '$cari' ");
    }
  }
if(mysqli_num_rows($data_penduduk)>0){
?>
<table class="table table-bordered">
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col" width="200px">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
$i = $hal * $limit;
while($data = mysqli_fetch_assoc($data_penduduk)){
?>
    <tr>
      <th scope="row"><?= $i + 1; ?></th>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['nik']; ?></td>
      <td><?= $data['jenis_kelamin']; ?></td>
      <td>
        <button type="button" class="btn btn-info btn-sm detail" data-nik="<?= $data['nik']; ?>"><i class="fa fa-info" aria-hidden="true"></i> Info</button>
        <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Edit</button>
      </td>
    </tr>
<?php 
$i++;
} 
?>
  </tbody>
</table>
<?php
if($cari == '' AND mysqli_num_rows($hitung_penduduk)>$limit){
?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
<?php
if($hal > 0){
  $previous = '';
  $clas = 'halaman';
}else{
  $previous = 'disabled';
  $clas = '';
}
?>
    <li class="page-item <?= $previous.' '.$clas; ?>" data-halaman="<?= $hal-1; ?>">
      <a class="page-link" href="#">Previous</a>
    </li>
<?php
$jumlah_halaman = ceil(mysqli_num_rows($hitung_penduduk)/$limit);
if($jumlah_halaman > 5){
  if($hal > 2){
    $start = $hal - 2;
    if(($hal + 2) > $jumlah_halaman){
      $end = $jumlah_halaman;
    }else{
      $end = $hal + 2;
    }
  }else{
    $start = 0;
    if(($hal + 2) > $jumlah_halaman){
      $end = $jumlah_halaman;
    }else{
      $end = 5;
    }
  }
}else{
  $start = 0;
  $end = $jumlah_halaman;
}
for($i=$start; $i < $end; $i++){
  if($i == $hal){
    $aktif = 'active';
  }else{
    $aktif = '';
  }
?>
    <li class="page-item <?= $aktif; ?> halaman" data-halaman="<?= $i; ?>"><a class="page-link" href="#"><?= $i + 1; ?></a></li>
<?php 
}
if($hal == $jumlah_halaman - 1){
  $next = 'disabled';
  $clas = '';
}else{
  $next = '';
  $clas = 'halaman';
}
?>    
    <li class="page-item <?= $next.' '.$clas; ?>" data-halaman="<?= $hal + 1; ?>">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
<?php
}
}else{
?>
<div class="alert alert-danger" role="alert">
  Tidak ada data
</div>
<?php
}
?>

<!-- Modal -->
<div class="modal fade" id="detail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Detail penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="content-detail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

<script>
  $(document).ready(function(){
    $('.halaman').click(function(e){
      e.preventDefault();
      var halaman = $(this).attr('data-halaman');
      var cari = $('#cari-data').val();
      var kategori = $('#kategori').val();
      load_tabel(halaman,cari,kategori);
    })

    $('.detail').click(function(){
      $('#detail').modal('show');
      var nik = $(this).attr('data-nik');
      $.ajax({
        beforeSend : function(){ $('#content-detail').html('<center><img src="../images/loading.gif" alt="" width="210px"></center>') },
        url : 'data-penduduk/detail.php',
        type : 'post',
        data : 'detail=' + nik,
        success : function(respon){
          $('#content-detail').html(respon);
        }
      })
    })

    function load_tabel(hal,cari,kategori){
      $.ajax({
        beforeSend : function(){ $('#tabel-penduduk').html('<center><img src="../images/loading.gif" alt="" width="150px"></center>') },
        url : 'data-penduduk/tabel-penduduk.php',
        data : 'data-tabel=true&halaman=' + hal + '&cari=' + cari + '&kategori=' + kategori,
        type : 'post',
        success : function(respon){
          $('#tabel-penduduk').html(respon);
        }
      })
    }
  })
</script>