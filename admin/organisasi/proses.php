<?php
require 'functions.php';

if (isset($_POST['ubah-password'])) {
  $password = $_POST['ubah-password'];
  $ket = base64_encode($password);
  $pass_simpan = md5($pengacak . md5($password) . $pengacak);
  query("UPDATE `user` SET `password`='$pass_simpan',`ket`='$ket' WHERE id = '$id' ");
  echo 'success|Password Berhasil Diubah';
}

if (isset($_POST['ubah-struktur'])) {
  $id = $_POST['id'];
  $nama = bersihkan($_POST['nama']);
  $gambar = $_FILES['gambar'];
  if ($id == 'kades') {
    $nik = $_POST['nik'];
  } else {
    $nik = '';
  }
  if (is_numeric($id)) {
    $field = 'id';
  } else {
    $field = 'jabatan';
  }
  $cek = query("UPDATE `organisasi` SET `nik`='$nik',`nama`='$nama' WHERE $field='$id' ");
  if ($gambar['name'] != '') {
    $nama_file = str_replace(' ', '', $nama) . '.' . end(explode('.', $gambar['name']));
    $lokasi = '../../images/' . $nama_file;
    $lokasi_db = 'images/' . $nama_file;
    move_uploaded_file($gambar['tmp_name'], $lokasi);
    query("UPDATE `organisasi` SET `foto`='$lokasi_db' WHERE $field ='$id' ");
  }
  if ($cek) {
    echo 'success|Data Berhasil diubah';
    exit;
  } else {
    echo 'error|Data GAGAL diubah. Periksa koneksi internet anda';
    exit;
  }
}

if (isset($_POST['tambah-pegawai'])) {
  $nama = bersihkan($_POST['nama']);
  $gambar = $_FILES['gambar'];
  if ($gambar['name'] != '') {
    $nama_file = str_replace(' ', '', $nama) . '.' . end(explode('.', $gambar['name']));
    $lokasi = '../../images/' . $nama_file;
    $lokasi_db = 'images/' . $nama_file;
    move_uploaded_file($gambar['tmp_name'], $lokasi);
  } else {
    $lokasi_db = 'images/user.png';
  }
  $cek = query("INSERT INTO `organisasi`(`nama`, `jabatan`, `foto`) VALUES ('$nama','staf','$lokasi_db')");
  if ($cek) {
    echo 'success|Data Pegawai Berhasil Ditambahkan';
    exit;
  } else {
    echo 'error|Data Pegawai gagal Ditambahkan. Periksa koneksi internet anda';
    exit;
  }
}

if (isset($_POST['hapus-pegawai'])) {
  $id = $_POST['hapus-pegawai'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `organisasi` WHERE id = '$id' "));
  if ($data['foto'] != 'images/user.png') {
    unlink('../../' . $data['foto']);
  }
  $cek = query("DELETE FROM `organisasi` WHERE id = '$id' ");
  if ($cek) {
    echo 'success|Data Pegawai Berhasil Ditambahkan';
    exit;
  } else {
    echo 'error|Data Pegawai gagal Ditambahkan. Periksa koneksi internet anda';
    exit;
  }
}