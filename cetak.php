<?php
require 'config.php';
$kategori = $_GET['kategori'];
$id = $_GET['nik']
?>
<html>

<head>
  <title>Cetak Surat</title>
  <link rel="stylesheet" href="<?= $basis_url; ?>css/paper.css">
</head>

<body class="A4">
  <?php
  switch ($kategori) {
    case 'surat-keterangan-kurang-mampu':
      require 'file-surat/keterangan-kurang-mampu.php';
      $tipe_surat = ucwords(strtolower(str_replace('-', ' ', $kategori)));
      $data = mysqli_fetch_assoc(query("SELECT * FROM `surat_keluar` WHERE keterangan = '$tipe_surat' AND penerima = '$nik' ORDER BY id DESC "));
      $no_surat = $data['no_surat'];
      $penduduk = penduduk($nik);
      $nama = ucwords(strtolower($penduduk['nama']));
      $jk = $penduduk['jenis-kelamin'];
      $ttl = $penduduk['tempat-lahir'] . ', ' . $penduduk['tanggal-lahir'];
      $umur = $penduduk['umur'] . ' Tahun';
      $pekerjaan = $penduduk['pekerjaan'];
      $alamat = $penduduk['alamat'];
      $tgl_cetak = tgl_indo(date('Y-m-d', $data['tanggal']));
      $org = mysqli_fetch_assoc(query("SELECT * FROM `user` WHERE `status` = 'kades' "));
      $kades = $org['nama'];
      keterangan_miskin($no_surat, $kades, $nama, $jk, $ttl, $umur, $pekerjaan, $alamat, $tgl_cetak);
      break;

    case 'surat-keterangan-penghasilan-orang-tua':
      require 'file-surat/surat-keterangan-penghasilan-orang-tua.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $tgl_cetak = $data['tanggal'];
        $penghasilan = $data['penghasilan'];
        $pemohon = $data['pemohon'];
        $ortu = $data['keterangan'];
        $alasan = $data['alasan'];
        keterangan_penghasilan_orang_tua($no_surat, $pemohon, $ortu, $kades,  $tgl_cetak, $penghasilan, $alasan);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-domisili':
      require 'file-surat/keterangan-domisili.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        keterangan_domisi($no_surat, $kades, $pemohon, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-harga-tanah':
      require 'file-surat/surat-keterangan-harga-tanah.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        $no_sertifikat = $data['alasan'];
        $luas_tanah = $data['status'];
        $lokasi = $data['keterangan'];
        $harga = $data['penghasilan'];
        keterangan_harga_tanah($no_surat, $kades, $pemohon, $tgl_cetak, $no_sertifikat, $luas_tanah, $lokasi, $harga);
      } else {
        echo 'Data surat tidak ditemukan';
      }
      break;
    default:
      echo 'Data surat tidak ditemukan';
  }
  ?>
</body>

</html>