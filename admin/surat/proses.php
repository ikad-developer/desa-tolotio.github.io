<?php
require 'functions.php';

if(isset($_POST['cetak'])){
  $nik = $_POST['nik'];
  $keterangan = $_POST['kategori'];
  $no_surat = $_POST['no-surat'];
  $tanggal = time();
  $ket = ucwords(strtolower(str_replace('-',' ',$keterangan)));
  query("INSERT INTO `surat_keluar`(`no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`) VALUES ('$no_surat','$ket','$nik','$id','$tanggal')");
  echo $basis_url.'cetak/'.$keterangan.'/'.$nik;
}