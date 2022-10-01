<?php
require 'config.php';
$kategori = $_GET['kategori'];
$id = $_GET['nik']
?>
<html>

<head>
  <title>Cetak Surat</title>
  <link rel="stylesheet" href="<?= $basis_url; ?>css/paper.css">
  <style>
  * {
    font-family: 'Times New Roman', Times, serif;
    font-size: 12pt;
  }
  </style>
</head>
<?php
if ($kategori == 'surat-keterangan-jual-beli-tanah') {
  $kertas = 'A4';
} else {
  $kertas = 'A4';
}
?>

<body class="<?= $kertas ?>">
  <?php
  switch ($kategori) {
    case 'surat-keterangan-tidak-mampu':
      require 'file-surat/surat-keterangan-tidak-mampu.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $tgl_cetak = $data['tanggal'];
        $pemohon = $data['pemohon'];;
        keterangan_tidak_mampu($no_surat, $kades, $pemohon, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-penghasilan-orang-tua':
      require 'file-surat/surat-keterangan-penghasilan-orang-tua.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $tgl_cetak = $data['tanggal'];
        $penghasilan = $data['penghasilan'];
        $pemohon = $data['pemohon'];
        $ortu = $data['keterangan'];
        $alasan = $data['alasan'];
        keterangan_penghasilan_orang_tua($no_surat, $pemohon, $ortu, $kades,  $tgl_cetak, $penghasilan, $alasan);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-domisili':
      require 'file-surat/keterangan-domisili.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        keterangan_domisi($no_surat, $kades, $pemohon, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-harga-tanah':
      require 'file-surat/surat-keterangan-harga-tanah.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        $no_sertifikat = $data['alasan'];
        $luas_tanah = $data['status'];
        $lokasi = $data['keterangan'];
        $harga = $data['penghasilan'];
        keterangan_harga_tanah($no_surat, $kades, $pemohon, $tgl_cetak, $no_sertifikat, $luas_tanah, $lokasi, $harga);
      } else {
        echo 'Data surat tidak ditemukan';
      }
      break;

    case 'surat-kuasa':
      require 'file-surat/surat-kuasa.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $pemohon2 = $data['penerima'];
        $tgl_cetak = $data['tanggal'];
        $alasan = $data['alasan'];
        surat_kuasa($pemohon, $pemohon2, $kades, $tgl_cetak, $alasan);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-usaha':
      require 'file-surat/surat-keterangan-usaha.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        $usaha = $data['alasan'];
        $lokasi_usaha = $data['keterangan'];
        keterangan_usaha($no_surat, $kades, $pemohon, $tgl_cetak, $usaha, $lokasi_usaha);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-profil-kerja':
      require 'file-surat/surat-keterangan-profil-kerja.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        keterangan_profil_kerja($no_surat, $pemohon, $kades, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-kelakuan-baik':
      require 'file-surat/surat-keterangan-kelakuan-baik.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        keterangan_profil_kerja($no_surat, $pemohon, $kades, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;

    case 'surat-keterangan-jual-beli-tanah':
      require 'file-surat/surat-keterangan-jual-beli-tanah.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $pemohon2 = $data['penerima'];
        $tgl_cetak = $data['tanggal'];
        $lokasi = $data['keterangan'];
        $pecah = explode('||', $data['alasan']);
        $ukuran = $pecah[0];
        $harga = $pecah[1];
        $utara = $pecah[2];
        $selatan = $pecah[3];
        $timur = $pecah[4];
        $barat = $pecah[5];
        $saksi1 = $pecah[6];
        $saksi2 = $pecah[7];
        surat_jual_beli_tanah($no_surat, $pemohon, $pemohon2, $kades, $tgl_cetak, $lokasi, $ukuran, $harga, $utara, $selatan, $timur, $barat, $saksi1, $saksi2);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;
    case 'surat-rekomendasi':
      require 'file-surat/surat-rekomendasi.php';
      $cek = query("SELECT * FROM `surat_keluar` WHERE id = '$id' ");
      if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $no_surat = $data['no_surat'];
        $kades = organisasi('kades');
        $pemohon = $data['pemohon'];
        $tgl_cetak = $data['tanggal'];
        rekomendasi($no_surat, $kades, $pemohon, $tgl_cetak);
      } else {
        echo '<h2>Data surat tidak ditemukan</h2>';
      }
      break;


    default:
      echo 'Data surat tidak ditemukan';
  }
  ?>

  <script src="https://use.fontawesome.com/bb35aee334.js"></script>
</body>

</html>