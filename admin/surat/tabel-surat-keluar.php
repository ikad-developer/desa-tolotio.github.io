<?php
require '../../config.php';
if (isset($_POST['bulan'])) {
  $bulan = $_POST['bulan'];
  $tipe_surat = $_POST['tipe-surat'];
  $tahun = $_POST['tahun'];
  $sortir_awal = $tahun . '-' . $bulan . '-01';
  $sortir_akhir = $tahun . '-' . $bulan . '-31';
  if ($tipe_surat == '') {
    $cek = query("SELECT * FROM `surat_keluar` WHERE tanggal >= '$sortir_awal' AND tanggal <= '$sortir_akhir' ORDER BY tanggal DESC");
  } else {
    $cek = query("SELECT * FROM `surat_keluar` WHERE tipe_surat='$tipe_surat' AND tanggal >= '$sortir_awal' AND tanggal <= '$sortir_akhir' ORDER BY tanggal DESC");
  }
  if (mysqli_num_rows($cek) > 0) {
?>
<table class="table table-bordered mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Tanggal Cetak</th>
      <th scope="col">Keterangan</th>
      <th scope="col">NO. Surat</th>
      <th scope="col">Pembuat</th>
      <th scope="col" width="150px">Aksi</th>
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
      <td><?= $data['no_surat']; ?></td>
      <td><?= $data['pembuat']; ?></td>
      <td>
        <a class="btn btn-primary btn-sm"
          href="../cetak/<?= str_replace(' ', '-', strtolower($data['tipe_surat'])) . '/' . $data['id']; ?>"
          target="_blank" role="button">Lihat</a>
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
<div class="alert alert-primary mt-2" role="alert">
  Tidak Ada Data
</div>
<?php
  }
}