<?php
require 'functions.php';

if (isset($_POST['cetak'])) {
  $nik = $_POST['nik'];
  $keterangan = $_POST['kategori'];
  $no_surat = $_POST['no-surat'];
  $tanggal = time();
  $ket = ucwords(strtolower(str_replace('-', ' ', $keterangan)));
  query("INSERT INTO `surat_keluar`(`no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`) VALUES ('$no_surat','$ket','$nik','$id','$tanggal')");
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
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`,`penghasilan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$ortu','$id','$tanggal','$alasan','$penghasilan','$pemohon','SURAT KETERANGAN PENGHASILAN ORANG TUA')");
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
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$id','$tanggal','$pemohon','SURAT KETERANGAN DOMISILI')");
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
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `penghasilan`, `pemohon`, `status`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$id','$tanggal','$no_sertifikat','$harga','$pemohon','$luas_tanah','SURAT KETERANGAN HARGA TANAH')");
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
  $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$id','$tanggal','$nama_usaha','$pemohon','SURAT KETERANGAN USAHA')");

  $url = $basis_url . 'cetak/surat-keterangan-usaha/' . $id_surat;
  echo 'success|Data Berhasil disimpan|' . $url;
}
