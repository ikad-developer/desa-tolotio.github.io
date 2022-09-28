<?php
require '../../config.php';
$cek = query("SELECT * FROM `surat_keluar` ORDER BY id DESC");
if (mysqli_num_rows($cek) > 0) {
?>
<table class="table table-bordered mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Tanggal Cetak</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Pembuat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      while ($data = mysqli_fetch_assoc($cek)) {
      ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= penduduk($data['pemohon'])['nama']; ?></td>
      <td><?= tgl_indo($data['tanggal']); ?></td>
      <td><?= $data['tipe_surat']; ?></td>
      <td><?= penduduk($data['pembuat'])['nama']; ?></td>
      <td>
        <a class="btn btn-primary btn-sm"
          href="../cetak/<?= str_replace(' ', '-', strtolower($data['tipe_surat'])) . '/' . $data['id']; ?>"
          target="_blank" role="button">Lihat</a>
        <button type="button" class="btn btn-warning btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm">Hapus</button>
      </td>
    </tr>
    <?php
      }
      ?>
  </tbody>
</table>
<?php
} else {
?>
<div class="alert alert-primary" role="alert">
  Tidak Ada Data
</div>
<?php
}
?>