<?php
require 'functions.php';

if (isset($_POST['ubah-password'])) {
  $password = $_POST['ubah-password'];
  $ket = base64_encode($password);
  $pass_simpan = md5($pengacak . md5($password) . $pengacak);
  query("UPDATE `user` SET `password`='$pass_simpan',`ket`='$ket' WHERE id = '$id' ");
  echo 'success|Password Berhasil Diubah';
}