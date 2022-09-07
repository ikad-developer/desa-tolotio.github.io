<?php
require 'config.php';
$kategori = $_GET['kategori'];
$nik = $_GET['nik']
?>
<html>
  <head>
    <title>Cetak Surat</title>
    <link rel="stylesheet" href="<?= $basis_url; ?>css/paper.css">
  </head>
  <body class="A4">
    <?php
    switch($kategori){
      case 'surat-keterangan-kurang-mampu':
        require 'file-surat/keterangan-kurang-mampu.php';
        $tipe_surat = ucwords(strtolower(str_replace('-',' ',$kategori)));
        $data = mysqli_fetch_assoc(query("SELECT * FROM `surat_keluar` WHERE keterangan = '$tipe_surat' AND penerima = '$nik' ORDER BY id DESC "));
        $no_surat = $data['no_surat'];
        $penduduk = penduduk($nik);
        $nama = ucwords(strtolower($penduduk['nama']));
        $jk = $penduduk['jenis-kelamin'];
        $ttl = $penduduk['tempat-lahir'].', '.$penduduk['tanggal-lahir'];
        $umur = $penduduk['umur'].' Tahun';
        $pekerjaan = $penduduk['pekerjaan'];
        $alamat = $penduduk['alamat'];
        $tgl_cetak = tgl_indo(date('Y-m-d', $data['tanggal']));
        $org = mysqli_fetch_assoc(query("SELECT * FROM `user` WHERE `status` = 'kades' "));
        $kades = $org['nama'];
        keterangan_miskin($no_surat,$kades,$nama,$jk,$ttl,$umur,$pekerjaan,$alamat,$tgl_cetak);
        break;
    }
    ?>
  </body>
</html>