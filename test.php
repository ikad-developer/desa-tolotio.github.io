<?php
require 'config.php';

$data = json_decode(file_get_contents("https://s5.aconvert.com/convert/p3r68-cdx67/xe1ah-mfgh8.json"), true);
for ($i = 0; $i < count($data); $i++) {
  $nik = $data[$i]['NIK'];
  query("UPDATE `penduduk` SET `dusun` = 'Tolite' WHERE nik = '$nik' ");
}
// echo $data[1]['NIK'];
// for ($i = 0; $i < count($data); $i++) {
//   $pecah = explode('-', $data[$i]['TANGGAL_LAHIR']);
//   $nik = $data[$i]['NIK'];
//   $nama = bersihkan($data[$i]['NAMA_LENGKAP']);
//   $tl = $data[$i]['TEMPAT_LAHIR'];
//   $tgl = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];
//   $rt = '';
//   $desa = $data[$i]['DESA_KELURAHAN'];
//   $kecamatan = $data[$i]['KECAMATAN'];
//   $agama = ucwords(strtolower($data[$i]['AGAMA']));
//   $status = ucwords(strtolower(str_replace('_', ' ', $data[$i]['STATUS_KAWIN'])));
//   $pekerjaan = ucwords(strtolower($data[$i]['JENIS_PKRJN']));
//   if ($data[$i]['JENIS_KELAMIN'] == 'PRIA') {
//     $jk = 'Laki-laki';
//   } else {
//     $jk = 'Perempuan';
//   }
//   $alamat = 'Desa Tolotio';
//   $status_hidup = 'Hidup';
//   $kependudukan = 'asli';
//   $no_kk = $data[$i]['NO_KK'];
//   $hubungan_dalam_keluarga = $data[$i]['STATUS_HUBUNGAN_KELUARGA'];
//   $cek = query("SELECT * FROM `penduduk` WHERE nik = '$nik' ");
//   if (mysqli_num_rows($cek) < 1) {
//     $cek = query("INSERT INTO `penduduk`(`nik`,`no_kk`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `rtrw`, `desa`, `kecamatan`, `agama`, `status`, `keterangan`, `catatan`, `hubungan_dalam_keluarga`) VALUES ('$nik','$no_kk','$nama','$alamat','$jk','$tl','$tgl','$pekerjaan','$rt','$desa','$kecamatan','$agama','$status','$status_hidup','$kependudukan','$hubungan_dalam_keluarga')");
//     if ($cek) {
//       // echo 'success|Data Penduduk berhasil ditambahkan';
//     } else {
//       echo 'Gagal Diinputkan ' . $nama;
//     }
//   } else {
//     echo 'Gagal, NIK Sudah Terdaftar ' . $nama;
//   }
// }