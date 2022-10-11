<?php
require 'functions.php';
$jenis = strtoupper($_POST['jenis-surat']);
$cek = query("SELECT * FROM `surat_keluar` ORDER BY tanggal,id DESC ");
?>
<style>
mark {
  background-color: #edc90c;
}
</style>
<h4>Riwayat Nomor Surat</h4>
<?php
if (mysqli_num_rows($cek) > 0) {
?>
<table class="table table-bordered" style="margin-bottom: 0;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipe Surat</th>
      <th scope="col">Nomor Surat</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      $tipe = [];
      while ($data = mysqli_fetch_assoc($cek)) {
        if (!in_array($data['tipe_surat'], $tipe)) {
          $tipe[] = $data['tipe_surat'];
      ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td>
        <?php
              if ($jenis == $data['tipe_surat']) {
                echo '<mark>' . ucwords($data['tipe_surat']) . '</mark>';
              } else {
                echo ucwords($data['tipe_surat']);
              }
              ?>
      </td>
      <td><?= $data['no_surat']; ?></td>
      <td><?= tgl_indo($data['tanggal']); ?></td>
    </tr>
    <?php }
      } ?>
  </tbody>
</table>
<?php
} else {
?>
<div class="alert alert-primary" role="alert">
  Belum ada riwayat surat
</div>
<?php
}