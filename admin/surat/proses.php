<?php
require 'functions.php';

if (isset($_POST['cetak'])) {
  $nama_user = $_POST['nik'];
  $keterangan = $_POST['kategori'];
  $no_surat = $_POST['no-surat'];
  $tanggal = time();
  $ket = ucwords(strtolower(str_replace('-', ' ', $keterangan)));
  query("INSERT INTO `surat_keluar`(`no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`) VALUES ('$no_surat','$ket','$nama_user','$nama_user','$tanggal')");
  echo $basis_url . 'cetak/' . $keterangan . '/' . $nama_user;
}

if (isset($_POST['surat-keterangan-penghasilan'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $ortu = $_POST['orang-tua'];
  $penghasilan = $_POST['penghasilan'];
  $alasan = bersihkan($_POST['alasan']);
  $id_surat = time();
  $tanggal = $_POST['tanggal'];
  if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN PENGHASILAN ORANG TUA' AND tanggal = '$tanggal' ")) < 1) {
    $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`,`penghasilan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$ortu','$nama_user','$tanggal','$alasan','$penghasilan','$pemohon','SURAT KETERANGAN PENGHASILAN ORANG TUA')");
    if ($cek) {
      $keterangan = 'surat-keterangan-penghasilan-orang-tua';
      $url = $basis_url . 'cetak/' . $keterangan . '/' . $id_surat;
      echo 'success|Data surat berhasil dibuat|' . $url;
    } else {
      echo 'error|Data surat GAGAL dibuat';
    }
  } else {
    echo 'error|Data surat GAGAL dibuat';
  }
}

if (isset($_POST['surat-keterangan-domisili'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $id_surat = time();
  $tanggal = $_POST['tanggal'];
  if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN DOMISILI' AND tanggal = '$tanggal' ")) < 1) {
    $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN DOMISILI')");
    if ($cek) {
      $keterangan = 'surat-keterangan-domisili';
      $url = $basis_url . 'cetak/' . $keterangan . '/' . $id_surat;
      echo 'success|Data surat berhasil dibuat|' . $url;
    } else {
      echo 'error|Data surat GAGAL dibuat';
    }
  } else {
    echo 'error|Data surat GAGAL dibuat';
  }
}

if (isset($_POST['surat-keterangan-harga-tanah'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $lokasi = $_POST['lokasi'];
  $no_sertifikat = $_POST['no-sertifikat'];
  $luas_tanah = $_POST['luas-tanah'];
  $tanggal = $_POST['tanggal'];
  $harga = $_POST['harga'];
  $id_surat = time();
  if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN HARGA TANAH' AND tanggal = '$tanggal' ")) < 1) {
    $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `penghasilan`, `pemohon`, `status`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$nama_user','$tanggal','$no_sertifikat','$harga','$pemohon','$luas_tanah','SURAT KETERANGAN HARGA TANAH')");
    if ($cek) {
      $url = $basis_url . 'cetak/surat-keterangan-harga-tanah/' . $id_surat;
      echo 'success|Data Berhasil disimpan|' . $url;
    } else {
      echo 'error|Data Gagal disimpan';
    }
  } else {
    echo 'error|Data Gagal disimpan';
  }
}

if (isset($_POST['surat-keterangan-usaha'])) {
  $no = $_POST['no'];
  $pemohon = $_POST['pemohon'];
  $lokasi = bersihkan($_POST['lokasi']);
  $nama_usaha = bersihkan($_POST['nama-usaha']);
  $tanggal = $_POST['tanggal'];
  $id_surat = time();
  if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN USAHA' AND tanggal = '$tanggal' ")) < 1) {
    $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no','$lokasi','$nama_user','$tanggal','$nama_usaha','$pemohon','SURAT KETERANGAN USAHA')");
    $url = $basis_url . 'cetak/surat-keterangan-usaha/' . $id_surat;
    echo 'success|Data Berhasil disimpan|' . $url;
  }
}

if (isset($_POST['keterangan-surat'])) {
  $keterangan = $_POST['keterangan-surat'];
  $no_surat = $_POST['no-surat'];
  $tanggal = $_POST['tanggal'];
  $id_surat = time();
  $pemohon = $_POST['nama-pemohon'];
  unset($_POST['keterangan-surat']);
  switch ($keterangan) {
    case 'keterangan-tidak-mampu':
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN TIDAK MAMPU' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN TIDAK MAMPU')");
        $url = $basis_url . 'cetak/surat-keterangan-tidak-mampu/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;
    case 'surat-kuasa':
      $keterangan = bersihkan($_POST['keterangan']);
      $penerima = $_POST['penerima'];
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE  pemohon = '$pemohon' AND tipe_surat='SURAT KUASA' AND penerima = '$penerima' AND tanggal = '$tanggal' ")) < 1) {
        query("INSERT INTO `surat_keluar`(`id`, `penerima`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$penerima','$nama_user','$tanggal','$keterangan','$pemohon','SURAT KUASA')");
        $url = $basis_url . 'cetak/surat-kuasa/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }

      break;

    case 'surat-keterangan-profil-kerja':
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN PROFIL KERJA' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN PROFIL KERJA')");
        $url = $basis_url . 'cetak/surat-keterangan-profil-kerja/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;

    case 'surat-keterangan-kelakuan-baik':
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN KELAKUAN BAIK' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN KELAKUAN BAIK')");
        $url = $basis_url . 'cetak/surat-keterangan-kelakuan-baik/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;

    case 'surat-keterangan-jual-beli-tanah':
      $lokasi_tanah = bersihkan($_POST['keterangan']);
      $pembeli = $_POST['penerima'];
      $catatan = bersihkan($_POST['catatan-jual']);
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN JUAL BELI TANAH' AND tanggal = '$tanggal' ")) < 1) {
        query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$lokasi_tanah','$pembeli','$nama_user','$tanggal','$catatan','$pemohon','SURAT KETERANGAN JUAL BELI TANAH')");
        $url = $basis_url . 'cetak/surat-keterangan-jual-beli-tanah/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;
    case 'surat-rekomendasi':
      $keterangan = bersihkan($_POST['keterangan']);
      $catatan = bersihkan($_POST['catatan']);
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT REKOMENDASI' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `keterangan`, `pembuat`, `tanggal`, `alasan`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$keterangan','$nama_user','$tanggal','$catatan','$pemohon','SURAT REKOMENDASI')");
        $url = $basis_url . 'cetak/surat-rekomendasi/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }

      break;
    case 'surat-keterangan-ahli-waris':
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN AHLI WARIS' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN AHLI WARIS')");
        $url = $basis_url . 'file-surat/contoh/SKET AHLI WARIS.doc';
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;
    case 'surat-izin-keramaian-pesta':
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT IZIN KERAMAIAN PESTA' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT IZIN KERAMAIAN PESTA')");
        $url = $basis_url . 'file-surat/contoh/Surat Ijin Keramaian Pesta.doc';
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;
    case 'surat-keterangan-tidak-mampu-dari-kadus':
      $dusun = $_POST['keterangan'];
      if (mysqli_num_rows(query("SELECT * FROM `surat_keluar` WHERE no_surat = '$no_surat' AND pemohon = '$pemohon' AND tipe_surat='SURAT KETERANGAN TIDAK MAMPU DARI KADUS' AND tanggal = '$tanggal' ")) < 1) {
        $cek = query("INSERT INTO `surat_keluar`(`id`, `no_surat`, `pembuat`, `tanggal`, `pemohon`, `tipe_surat`,`keterangan`) VALUES ('$id_surat','$no_surat','$nama_user','$tanggal','$pemohon','SURAT KETERANGAN TIDAK MAMPU DARI KADUS','$dusun')");
        $url = $basis_url . 'cetak/surat-keterangan-tidak-mampu-dari-kadus/' . $id_surat;
        echo 'success|Data Berhasil Disimpan|' . $url;
      }
      break;
  }
  unset($_POST['keterangan-surat']);
  exit;
}

if (isset($_POST['surat-masuk'])) {
  $instansi = bersihkan($_POST['instansi']);
  $perihal = bersihkan($_POST['perihal']);
  $nomor = $_POST['nomor'];
  $tanggal = $_POST['tanggal'];
  $file = $_FILES['file'];
  $id_file = time();
  $lokasi_file = '';
  if ($file['name'] != '') {
    $format = end(explode('.', $file['name']));
    $nama_file = $id_file . '.' . $format;
    move_uploaded_file($file['tmp_name'], '../file/' . $nama_file);
    $lokasi_file = 'file/' . $nama_file;
  }
  $cek = query("INSERT INTO `surat_masuk`(`id`, `instansi`, `perihal`, `nomor`, `tanggal`, `file`) VALUES ('$id_file','$instansi','$perihal','$nomor','$tanggal','$lokasi_file')");
  if ($cek) {
    echo 'success|Surat masuk berhasil ditambahkan';
  } else {
    echo 'error|Surat masuk GAGAL ditambahkan. Periksa koneksi internet anda';
  }
  exit;
}

if (isset($_POST['hapus-surat-masuk'])) {
  $id = $_POST['hapus-surat-masuk'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `surat_masuk` WHERE id = '$id' "));
  $cek = query("DELETE FROM `surat_masuk` WHERE id = '$id' ");
  if ($cek) {
    unlink('../' . $data['file']);
    echo 'Berhasil||Data surat berhasil dihapus||success';
  } else {
    echo 'Opps||Data surat gagal dihapus. Periksa koneksi internet anda||error';
  }
}

if (isset($_POST['arsip-desa'])) {
  $nama_file = bersihkan($_POST['nama-file']);
  $deskripsi = bersihkan($_POST['deskripsi']);
  $file = $_FILES['file'];
  $id = time();
  $lokasi_file = '';
  if ($file['name'] != '') {
    $format = end(explode('.', $file['name']));
    $lokasi_file = 'file/' . $id . '.' . $format;
    move_uploaded_file($file['tmp_name'], '../' . $lokasi_file);
  }
  $cek = query("INSERT INTO `arsip`(`id`, `nama`, `deskripsi`, `file`) VALUES ('$id','$nama_file','$deskripsi','$lokasi_file')");
  if ($cek) {
    echo 'success|Data berhasil diunggah';
  } else {
    echo 'error|Data gagal diunggah. Periksa koneksi internet anda';
  }
}

if (isset($_POST['hapus-dokumen-desa'])) {
  $id = $_POST['hapus-dokumen-desa'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `arsip` WHERE id = '$id' "));
  $cek = query("DELETE FROM `arsip` WHERE id = '$id' ");
  if ($cek) {
    unlink('../' . $data['file']);
    echo 'Berhasil||Data surat berhasil dihapus||success';
  } else {
    echo 'Opps||Data surat gagal dihapus. Periksa koneksi internet anda||error';
  }
}