<?php
require 'functions.php';

$surat = query("SELECT * FROM `surat_keluar` ORDER BY id DESC ");
if(mysqli_num_rows($surat)>0){
  
?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">No Surat</th>
        <th scope="col">Nama pemohon</th>
        <th scope="col">Surat</th>
        <th scope="col">Pembuat</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
<?php
$no = 1;
while($data = mysqli_fetch_assoc($surat)){
?>
      <tr>
        <th scope="row"><?= $no; ?></th>
        <td><?= $data['no_surat']; ?></td>
        <td><?= penduduk($data['penerima'])['nama']; ?></td>
        <td><?= $data['keterangan']; ?></td>
        <td><?= user($data['pembuat'])['nama']; ?></td>
        <td><?= tgl_indo(date('Y-m-d', $data['tanggal'])); ?></td>
      </tr>
<?php 
$no++;
} ?>
    </tbody>
  </table>
<?php
}else{
?>
  <div class="alert alert-danger" role="alert">
    Tidak ada data
  </div>
<?php
}
?>