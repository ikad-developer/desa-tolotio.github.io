<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($pengacak . md5($_POST['password']) . $pengacak);
  $cek = query("SELECT * FROM `user` WHERE id = '$username' ");
  if (mysqli_num_rows($cek) > 0) {
    $data = mysqli_fetch_assoc($cek);
    if ($data['status'] == 'aktif') {
      if ($data['password'] == $password) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['menu'] = 'beranda';
        $_SESSION['nik'] = $data['nik'];
        echo 'Berhasil||Login berhasil||success';
      } else {
        echo 'Opps||Password Salah||error';
      }
    } else {
      echo 'Opps||Maaf, akun anda tidak aktif||error';
    }
  } else {
    echo 'Opps||Username tidak ditemukan||error';
  }
}