<?php
session_start();
require '../../config.php';
$id = $_SESSION['id'];
$nik = $_SESSION['nik'];
$nama_user = $_SESSION['nama'];