<?php
require 'functions.php';

if (isset($_POST['cetak'])) {
  $nik = $_POST['nik'];
  $keterangan = $_POST['kategori'];
  $no_surat = $_POST['no-surat'];
  $tanggal = time();
  $ket = ucwords(strtolower(str_replace('-', ' ', $keterangan)));
  query("INSERT INTO `surat_keluar`(`no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`) VALUES ('$no_surat','$ket','$nik','$nik','$tanggal')");
  echo $basis_url . 'cetak/' . $keterangan . '/' . $nik;
}

if (isset($_POST['surat-keterangan-penghasilan'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $ortu = $_POST['orang-tua'];
  $penghasilan = $_POST['penghasilan'];
  $alasan = $_POST['alasan'];
  $id_surat = time();
  $tanggal = $_POST['tanggal'];
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`,`penghasilan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$ortu','$nik','$tanggal','$alasan','$penghasilan','$pemohon','SURAT KETERANGAN PENGHASILAN ORANG TUA')");
  if ($cek) {
    $keterangan = 'surat-keterangan-penghasilan-orang-tua';
    $url = $basis_url . 'cetak/' . $keterangan . '/' . $id_surat;
    echo 'success|Data surat berhasil dibuat|' . $url;
  } else {
    echo 'error|Data surat GAGAL dibuat';
  }
}

if (isset($_POST['surat-keterangan-domisili'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $id_surat = time();
  $tanggal = $_POST['tanggal'];
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$nik','$tanggal','$pemohon','SURAT KETERANGAN DOMISILI')");
  if ($cek) {
    $keterangan = 'surat-keterangan-domisili';
    $url = $basis_url . 'cetak/' . $keterangan . '/' . $id_surat;
    echo 'success|Data surat berhasil dibuat|' . $url;
  } else {
    echo 'error|Data surat GAGAL dibuat';
  }
}

if ($_POST['surat-keterangan-harga-tanah']) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $lokasi = $_POST['lokasi'];
  $no_sertifikat = $_POST['no-sertifikat'];
  $luas_tanah = $_POST['luas-tanah'];
  $tanggal = $_POST['tanggal'];
  $harga = $_POST['harga'];
  $id_surat = time();
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `penghasilan`, `pemohon`, `status`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$nik','$tanggal','$no_sertifikat','$harga','$pemohon','$luas_tanah','SURAT KETERANGAN HARGA TANAH')");
  if ($cek) {
    $url = $basis_url . 'cetak/surat-keterangan-harga-tanah/' . $id_surat;
    echo 'success|Data Berhasil disimpan|' . $url;
  } else {
    echo 'error|Data Gagal disimpan';
  }
}

if (isset($_POST['surat-keterangan-usaha'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $lokasi = $_POST['lokasi'];
  $nama_usaha = $_POST['nama-usaha'];
  $tanggal = $_POST['tanggal'];
  $id_surat = time();
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$nik','$tanggal','$nama_usaha','$pemohon','SURAT KETERANGAN USAHA')");

  $url = $basis_url . 'cetak/surat-keterangan-usaha/' . $id_surat;
  echo 'success|Data Berhasil disimpan|' . $url;
}

if (isset($_POST['keterangan-surat'])) {
  $keterangan = $_POST['keterangan-surat'];
  $no_surat = $_POST['no-surat'];
  $tanggal = $_POST['tanggal'];
  $id_surat = time();
  $pemohon = $_POST['nama-pemohon'];
  switch ($keterangan) {
    case 'keterangan-tidak-mampu':
      $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nik','$tanggal','$pemohon','SURAT KETERANGAN TIDAK MAMPU')");

      $url = $basis_url . 'cetak/surat-keterangan-tidak-mampu/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;

      break;
    case 'surat-kuasa':
      $keterangan = $_POST['keterangan'];
      $penerima = $_POST['penerima'];
      query("INSERT INTO `surat_keluar`(`id`, `penerima`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$penerima','$nik','$tanggal','$keterangan','$pemohon','SURAT KUASA')");
      $url = $basis_url . 'cetak/surat-kuasa/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;
      break;

    case 'surat-keterangan-profil-kerja':
      $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nik','$tanggal','$pemohon','SURAT KETERANGAN PROFIL KERJA')");

      $url = $basis_url . 'cetak/surat-keterangan-profil-kerja/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;
      break;

    case 'surat-keterangan-kelakuan-baik':
      $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nik','$tanggal','$pemohon','SURAT KETERANGAN KELAKUAN BAIK')");

      $url = $basis_url . 'cetak/surat-keterangan-kelakuan-baik/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;
      break;

    case 'surat-keterangan-jual-beli-tanah':
      $lokasi_tanah = $_POST['keterangan'];
      $pembeli = $_POST['penerima'];
      $catatan = $_POST['catatan-jual'];
      query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$lokasi_tanah','$pembeli','$nik','$tanggal','$catatan','$pemohon','SURAT KETERANGAN JUAL BELI TANAH')");
      $url = $basis_url . 'cetak/surat-keterangan-jual-beli-tanah/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;
      break;
    case 'surat-rekomendasi':
      $keterangan = $_POST['keterangan'];
      $catatan = $_POST['catatan'];
      $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$keterangan','$nik','$tanggal','$catatan','$pemohon','SURAT REKOMENDASI')");
      $url = $basis_url . 'cetak/surat-rekomendasi/' . $id_surat;
      echo 'success|Data Berhasil Disimpan|' . $url;
      exit;
      break;
  }
  exit;
}