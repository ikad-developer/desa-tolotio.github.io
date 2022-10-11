<?php
require 'functions.php';

if (isset($_POST['tambah-data'])) {
  $nik = $_POST['nik'];
  $nama = ucwords($_POST['nama']);
  $tl = $_POST['tl'];
  $tgl = $_POST['tgl'];
  $rt = $_POST['rt-rw'];
  $desa = $_POST['desa'];
  $kecamatan = $_POST['kecamatan'];
  $agama = $_POST['agama'];
  $status = $_POST['status'];
  $pekerjaan = $_POST['pekerjaan'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $status_hidup = $_POST['status-hidup'];
  $kependudukan = $_POST['kependudukan'];
  $cek = query("SELECT * FROM `penduduk` WHERE nik = '$nik' ");
  if (mysqli_num_rows($cek) < 1) {
    $cek = query("INSERT INTO `penduduk`(`nik`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `rtrw`, `desa`, `kecamatan`, `agama`, `status`, `keterangan`, `catatan`) VALUES ('$nik','$nama','$alamat','$jk','$tl','$tgl','$pekerjaan','$rt','$desa','$kecamatan','$agama','$status','$status_hidup','$kependudukan')");
    if ($cek) {
      echo 'success|Data Penduduk berhasil ditambahkan';
    } else {
      echo 'error|Data Penduduk gagal ditambahkan';
    }
  } else {
    echo 'error|Data NIK sudah terdaftar';
  }
}

if (isset($_POST['edit-data'])) {
  $nik_awal = $_POST['edit-data'];
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tl = $_POST['tl'];
  $tgl = $_POST['tgl'];
  $rt = $_POST['rt-rw'];
  $desa = $_POST['desa'];
  $kecamatan = $_POST['kecamatan'];
  $agama = $_POST['agama'];
  $status = $_POST['status'];
  $pekerjaan = $_POST['pekerjaan'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $status_hidup = $_POST['status-hidup'];
  $kependudukan = $_POST['kependudukan'];
  $cek = query("UPDATE `penduduk` SET `nik`='$nik',`nama`='$nama',`alamat`='$alamat',`jenis_kelamin`='$jk',`tempat_lahir`='$tl',`tanggal_lahir`='$tgl',`pekerjaan`='$pekerjaan',`rtrw`='$rt',`desa`='$desa',`kecamatan`='$kecamatan',`agama`='$agama',`status`='$status',`keterangan`='$status_hidup', `catatan`='$kependudukan' WHERE nik='$nik_awal' ");
  if ($cek) {
    echo 'success|Perubahan Data berhasil disimpan';
  } else {
    echo 'error|Perubahan Data Gagal disimpan';
  }
}

if (isset($_POST['hapus-penduduk'])) {
  $nik = $_POST['hapus-penduduk'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `penduduk` WHERE nik = '$nik' "));
  $file = fopen("../../data-sampah/$nik.json", "w+");
  fwrite($file, json_encode($data));
  fclose($file);
  $cek = query("DELETE FROM `penduduk` WHERE nik = '$nik' ");
  if ($cek) {
    echo 'success|Data berhasil dihapus';
  } else {
    echo 'error|Data gagal dihapus. Periksa koneksi internet anda';
  }
}