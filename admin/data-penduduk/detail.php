<?php
require 'functions.php';

if(isset($_POST['detail'])){
  $nik = $_POST['detail'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `penduduk` WHERE nik = '$nik' "));
?>
  <table>
    <tr>
      <td>NIK</td>
      <td class="text-center" width="12px">:</td>
      <td><?= $nik; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td class="text-center" width="12px">:</td>
      <td><?= $data['nama']; ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td class="text-center" width="12px">:</td>
      <td><?= $data['jenis_kelamin']; ?></td>
    </tr>
    <tr>
      <td>Pekerjaan</td>
      <td class="text-center" width="12px">:</td>
      <td><?= $data['pekerjaan']; ?></td>
    </tr>
    <tr>
      <td>Umur</td>
      <td class="text-center" width="12px">:</td>
      <td><?= umur($data['tanggal_lahir']); ?></td>
    </tr>
    <tr>
      <td>Kepala Keluarga</td>
      <td class="text-center" width="12px">:</td>
      <td><?= keluarga($data['no_kk'])['kepala-kk']; ?></td>
    </tr>
  </table>
<?php
}