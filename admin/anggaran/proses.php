<?php
require 'functions.php';

if(isset($_POST['tambah-kegiatan'])){
  $nama = $_POST['kegiatan'];
  $tanggal = $_POST['tanggal'];
  $deskripsi = $_POST['deskripsi'];
  $pisah = explode(' ',tgl_indo($tanggal));
  $bulan = $pisah[1];
  $tahun = $pisah[2];
  $cek = query("INSERT INTO `pengeluaran`(`nama`, `tanggal`, `keterangan`, `bulan`, `tahun`) VALUES ('$nama','$tanggal','$deskripsi','$bulan','$tahun')");
  if($cek){
    echo 'Berhasil||Data berhasil ditambahkan||success';
  }else{
    echo 'Opps||Data gagal ditambahkan||error';
  }
}

if(isset($_POST['upload-nota'])){
  $id_kegiatan = $_POST['id-kegiatan'];
  $nama_nota = $_POST['nama-nota'];
  $biaya = $_POST['biaya']; 
  if(isset($_FILES['file'])){
    $file = $_FILES['file'];
    $asal = $file['tmp_name'];
    $tujuan = '../file/'.time().'_'.$file['name'];
    move_uploaded_file($asal,$tujuan);
    $simpan_db = $basis_url.'admin/file/'.time().'_'.$file['name'];
  }else{
    $simpan_db = '';
  }
  $simpan = query("INSERT INTO `nota`(`id_kegiatan`, `keterangan`, `biaya`, `bukti`) VALUES ('$id_kegiatan','$nama_nota','$biaya','$simpan_db')");
  if($simpan){
    echo 'Berhasi||Nota berhasil ditambahkan||success';
  }else{
    echo 'Opps||Nota Gagal ditambahkan. periksa koneksi internet anda||error';
  }
}