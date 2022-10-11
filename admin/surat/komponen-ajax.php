<?php
require 'functions.php';

if (isset($_POST['kategori-surat'])) {
  $kategori = $_POST['kategori-surat'];
  switch ($kategori) {
    case 'Surat Keterangan Penghasilan Orang Tua':
?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="nama-ortu" class="col-sm-4 col-form-label">Nama Orang Tua</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-ortu">
    <div id="hasil-ortu">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="penghasilan-ortu" class="col-sm-4 col-form-label">Penghasilan Orang Tua Perbulan</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="penghasilan-ortu" value="Rp. ">
  </div>
</div>
<div class="form-group row">
  <label for="alasan" class="col-sm-4 col-form-label">Alasan Penggunaan Surat Keterangan</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="3"
      placeholder="Persyaratan mendaftar Kuliah di Universitas Bina Taruna"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="keterangan-penghasil">Simpan & Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Domisili':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="keterangan-domisili">Simpan & Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Harga Tanah':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="lokasi" class="col-sm-4 col-form-label">Lokasi Tanah</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="lokasi" rows="3" placeholder="Dusun I Tamendao"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="no-sertifikat" class="col-sm-4 col-form-label">Nomor Sertifikat Tanah</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-sertifikat" placeholder="00058">
  </div>
</div>
<div class="form-group row">
  <label for="luas-tanah" class="col-sm-4 col-form-label">Luas Tanah</label>
  <div class="col-sm-8">
    <div class="input-group mb-2">
      <input type="number" class="form-control" id="luas-tanah" placeholder="234">
      <div class="input-group-prepend">
        <div class="input-group-text">M<sup>2</sup></div>
      </div>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="harga" class="col-sm-4 col-form-label">Harga Tanah</label>
  <div class="col-sm-8">
    <div class="input-group mb-2">
      <input type="text" class="form-control" id="harga" placeholder="234" value="Rp. ">
      <div class="input-group-prepend">
        <div class="input-group-text">/M<sup>2</sup></div>
      </div>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="harga-tanah">Simpan & Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Usaha':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="nama-usaha" class="col-sm-4 col-form-label">Nama Usaha</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-usaha" placeholder="NELAYAN IKAN PINGGIR">
  </div>
</div>
<div class="form-group row">
  <label for="lokasi" class="col-sm-4 col-form-label">Lokasi Usaha</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="lokasi" placeholder="Dusun IV Tolite">
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="keterangan-usaha">Simpan & Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
    case 'Surat Keterangan Tidak Mampu':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="simpan-cetak" id-surat="keterangan-tidak-mampu">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
    case 'Surat Kuasa':
    ?>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Pihak Pertama (I)</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
    <small class="form-text text-muted">Pemberi Kuasa</small>
  </div>
</div>
<div class="form-group row">
  <label for="nama-ortu" class="col-sm-4 col-form-label">Pihak Kedua (II)</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-ortu">
    <div id="hasil-ortu">
    </div>
    <small class="form-text text-muted">Penerima Kuasa</small>
  </div>
</div>
<div class="form-group row">
  <label for="alasan" class="col-sm-4 col-form-label">Keperluan</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="5"
      placeholder="mengambil Bantuan PKH (Program Keluarga Harapan) di Bank BRI Karena saya selaku Pihak Pertama (I) Sedang dalam Keadaan Sakit"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="simpan-cetak" id-surat="surat-kuasa">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Profil Kerja':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="simpan-cetak"
  id-surat="surat-keterangan-profil-kerja">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Kelakuan Baik':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary btn-block" id="simpan-cetak"
  id-surat="surat-keterangan-kelakuan-baik">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Jual Beli Tanah':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Penjual</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
    <small class="form-text text-muted">Pihak I ( Kesatu )</small>
  </div>
</div>
<div class="form-group row">
  <label for="nama-ortu" class="col-sm-4 col-form-label">Nama Pembeli</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-ortu">
    <div id="hasil-ortu">
    </div>
    <small class="form-text text-muted">Pihak II</small>
  </div>
</div>
<div class="form-group row">
  <label for="alasan" class="col-sm-4 col-form-label">Lokasi Tanah</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="5"
      placeholder="Dusun Tolite, Desa Tolotio Kecamatan Bonepantai, Kabupaten Bone Bolango."></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="luas-tanah" class="col-sm-4 col-form-label">Luas Tanah</label>
  <div class="col-sm-8">
    <div class="input-group mb-2">
      <input type="number" class="form-control" id="luas-tanah" placeholder="234">
      <div class="input-group-prepend">
        <div class="input-group-text">M<sup>2</sup></div>
      </div>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="harga" class="col-sm-4 col-form-label">Harga</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="harga" rows="3"
      placeholder="Rp.1.500.000 ( Satu Juta Lima Ratus Ribu Rupiah )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="batas-utara" class="col-sm-4 col-form-label">Batas Sebelah Utara</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="batas-utara" rows="2" placeholder="Berbatasan dengan Gunung"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="batas-selatan" class="col-sm-4 col-form-label">Batas Sebelah Selatan</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="batas-selatan" rows="2" placeholder="Berbatasan dengan Jalan Trans"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="batas-timur" class="col-sm-4 col-form-label">Batas Sebelah Timur</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="batas-timur" rows="2"
      placeholder="Berbatasan dengan Pekarangan Karnain Mohi"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="batas-barat" class="col-sm-4 col-form-label">Batas Sebelah Barat</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="batas-barat" rows="2"
      placeholder="Berbatasan dengan tanahnya Hasan Gusi"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="saksi1" class="col-sm-4 col-form-label">Saksi 1</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="saksi1" rows="2" placeholder="ISMATY A MOHI ( Kadus Tolite )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="saksi2" class="col-sm-4 col-form-label">Saksi 2</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="saksi2" rows="2"
      placeholder="DESRA A BOTUTIHE ( Plt.Kasie Pemerintahan )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block" id="simpan-cetak"
  id-surat="surat-keterangan-jual-beli-tanah">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Rekomendasi':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="catatan" class="col-sm-4 col-form-label">Keterangan Rekomendasi</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="catatan" rows="7"
      placeholder="Untuk dapat di layani dalam hal pembelian BBM Di pertamina untuk kebutuhan pengoperasian mesin perahu nelayan dengan kapasitas kebutuhan 35 liter untuk jarak operasi 30 Mil">Untuk dapat di layani dalam hal pembelian BBM Di pertamina untuk kebutuhan pengoperasian mesin perahu nelayan dengan kapasitas kebutuhan 35 liter untuk jarak operasi 30 Mil (CONTOH...)</textarea>
  </div>
</div>
<div class="form-group row">
  <label for="alasan" class="col-sm-4 col-form-label">Keperluan Rekomendasi</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2" placeholder="Kebutuhan Nelayan">Kebutuhan Nelayan</textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block" id="simpan-cetak" id-surat="surat-rekomendasi">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;

    case 'Surat Keterangan Ahli Waris':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block" id="simpan-cetak"
  id-surat="surat-keterangan-ahli-waris">Simpan &
  Download</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
    case 'Surat Izin Keramaian Pesta':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block" id="simpan-cetak"
  id-surat="surat-izin-keramaian-pesta">Simpan &
  Download</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
    case 'Surat Keterangan Tidak Mampu Dari Kadus':
    ?>
<div class="form-group row">
  <label for="no-surat" class="col-sm-4 col-form-label">Nomor Surat</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="no-surat">
    <a href="#" id="riwayat" style="font-size:10pt">Lihat Riwayat Nomor Surat</a>
  </div>
</div>
<div class="form-group row">
  <label for="nama-pemohon" class="col-sm-4 col-form-label">Nama Pemohon</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" id="nama-pemohon">
    <div id="hasil-pemohon">
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="alasan" class="col-sm-4 col-form-label">Dusun</label>
  <div class="col-sm-8">
    <select class="form-control" id="alasan">
      <?php
            $cek_dusun = query("SELECT * FROM `organisasi` WHERE jabatan LIKE 'kadus%' ");
            while ($dusun = mysqli_fetch_assoc($cek_dusun)) {
            ?>
      <option value="<?= $dusun['keterangan']; ?>"><?= $dusun['keterangan']; ?></option>
      <?php
            }
            ?>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block" id="simpan-cetak"
  id-surat="surat-keterangan-tidak-mampu-dari-kadus">Simpan
  &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
  }
  unset($_POST['kategori-surat']);
}

if (isset($_POST['cari-identitas'])) {
  $nama = $_POST['cari-identitas'];
  $sumber = $_POST['sumber'];
  $hasil = $_POST['hasil'];
  $cek = query("SELECT * FROM `penduduk` WHERE nama LIKE '%$nama%' ");
  ?>
<select multiple class="form-control" id="hasil-cari">
  <?php
    if (mysqli_num_rows($cek) < 1) {
    ?>
  <option value=""> Tidak ada data <?= $nama; ?></option>
  <?php
    } else {
      $no = 1;
      while ($data = mysqli_fetch_assoc($cek)) {
      ?>
  <option value="<?= $data['nik']; ?>" data-sumber="<?= $sumber; ?>" class="hasil-pencarian"
    data-nama="<?= $data['nama']; ?>" data-hasil="<?= $hasil ?>"><?= $no . '. ' . $data['nama']; ?></option>
  <?php
        $no++;
      }
    }
    ?>
</select>
<?php
}
?>

<div class="modal fade" id="modal-riwayat-no-surat" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body" id="body-modal-riwayat-surat">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {

  $('.form-control').attr('autocomplete', 'off');

  $('#riwayat').click(function(e) {
    e.preventDefault();
    var surat = $('#jenis-surat').val();
    $('#modal-riwayat-no-surat').modal('show');
    $.ajax({
      beforeSend: function() {
        $('#body-modal-riwayat-surat').html('<h5>Meload riwayat nomor surat...</h5>')
      },
      url: 'surat/riwayat-no-surat.php',
      type: 'post',
      data: 'jenis-surat=' + surat,
      success: function(respon) {
        $('#body-modal-riwayat-surat').html(respon);
      }
    })
  })

  $('.pilih-nama').click(function() {
    var nama = $(this).text();
    var nik = $(this).val();
    $('#cari').val(nama);
    $('#cari').attr('data-id', nik);
    $('#autocomplete').html("");

    var kategori = $('#kategori').val();
    var nik = $('#cari').attr('data-id');
    if (kategori != '' && nik != '') {
      $('#cetak').removeAttr('disabled');
    } else {
      $('#cetak').attr('disabled', 'disabled');
    }
  })

  $('#nama-pemohon').keyup(function() {
    var nama = $(this).val();
    cariIdentitas(nama, '#nama-pemohon', '#hasil-pemohon');
  })

  $('#nama-ortu').keyup(function() {
    var nama = $(this).val();
    cariIdentitas(nama, '#nama-ortu', '#hasil-ortu');
  })

  function cariIdentitas(nama, sumber, hasil) {

    if (nama.length > 1) {
      $.ajax({
        beforeSend: function() {
          $(hasil).html('<div class="d-flex align-items-center"> <strong > Mencari Data ' + nama +
            ' ... </strong> <div class = "spinner-border ml-auto spinner-border-sm" role = "status" aria - hidden = "true" > < /div> </div>'
          );
          $(sumber).attr('disabled', 'disabled');
        },
        url: 'surat/komponen-ajax.php',
        data: 'cari-identitas=' + nama + '&sumber=' + sumber + '&hasil=' + hasil,
        type: 'post',
        success: function(respon) {
          $(hasil).show();
          $(hasil).html(respon);
          $(sumber).removeAttr('disabled');
          $(sumber).focus();
        }
      })
    } else {
      $(hasil).html("")
    }
  }

  $('.hasil-pencarian').click(function() {
    var hasilCari = $(this).attr('data-nama');
    var sumber = $(this).attr('data-sumber');
    var hasil = $(this).attr('data-hasil');
    var nik = $(this).val();
    $(sumber).attr('data-nik', nik);
    $(sumber).val(hasilCari);
    $(hasil).hide();
  })

  $('#keterangan-penghasil').click(function() {
    var no = $('#no-surat').val();
    var pemohon = $('#nama-pemohon').attr('data-nik');
    var ortu = $('#nama-ortu').attr('data-nik');
    var penghasilan = $('#penghasilan-ortu').val();
    var alasan = $('#alasan').val();
    var tanggal = $('#tanggal').val();

    $.ajax({
      beforeSend: function() {
        $('#keterangan-penghasil').attr('disabled', 'disabled')
      },
      type: 'post',
      url: 'surat/proses.php',
      data: 'surat-keterangan-penghasilan=true&no=' + no + '&pemohon=' + pemohon + '&orang-tua=' + ortu +
        '&penghasilan=' + penghasilan + '&alasan=' + alasan + '&tanggal=' + tanggal,
      success: function(responData) {
        var pecah = responData.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        if (pecah[0] == 'success') {
          window.open(pecah[2], '_blank');
          $('#notif').show();
        }
      }
    })
  })

  $('#keterangan-domisili').click(function() {
    var no = $('#no-surat').val();
    var pemohon = $('#nama-pemohon').attr('data-nik');
    var tanggal = $('#tanggal').val();

    $.ajax({
      beforeSend: function() {
        $('#keterangan-domisili').attr('disabled', 'disabled')
      },
      type: 'post',
      url: 'surat/proses.php',
      data: 'surat-keterangan-domisili=true&no=' + no + '&pemohon=' + pemohon + '&tanggal=' + tanggal,
      success: function(responDomisili) {
        var pecah = responDomisili.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        if (pecah[0] == 'success') {
          window.open(pecah[2], '_blank');
        }
        $('#notif').show();
      }
    })
  })

  $('#harga-tanah').click(function() {
    var no_surat = $('#no-surat').val();
    var pemohon = $('#nama-pemohon').attr('data-nik');
    var tanggal = $('#tanggal').val();
    var lokasi = $('#lokasi').val();
    var no_sertifikat = $('#no-sertifikat').val();
    var luas_tanah = $('#luas-tanah').val();
    var harga = $('#harga').val();

    $.ajax({
      beforeSend: function() {
        $('#harga-tanah').attr('disabled', 'disabled')
      },
      type: 'post',
      url: 'surat/proses.php',
      data: 'surat-keterangan-harga-tanah=true&no=' + no_surat + '&pemohon=' + pemohon + '&lokasi=' +
        lokasi + '&no-sertifikat=' + no_sertifikat + '&luas-tanah=' + luas_tanah + '&tanggal=' + tanggal +
        '&harga=' + harga,
      success: function(responHarga) {
        var pecah = responHarga.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        if (pecah[0] == 'success') {
          window.open(pecah[2], '_blank');
        }
        $('#notif').show();
      }
    })
  })

  $('#keterangan-usaha').click(function() {
    var no_surat = $('#no-surat').val();
    var pemohon = $('#nama-pemohon').attr('data-nik');
    var tanggal = $('#tanggal').val();
    var lokasi = $('#lokasi').val();
    var nama_usaha = $('#nama-usaha').val();

    $.ajax({
      beforeSend: function() {
        $('#keterangan-usaha').attr('disabled', 'disabled')
      },
      type: 'post',
      url: 'surat/proses.php',
      data: 'surat-keterangan-usaha=true&no=' + no_surat + '&pemohon=' + pemohon + '&lokasi=' + lokasi +
        '&nama-usaha=' + nama_usaha + '&tanggal=' + tanggal,
      success: function(responUsaha) {
        var pecah = responUsaha.split('|');
        $('#notif').show();
        if (pecah[0] == 'success') {
          window.open(pecah[2], '_blank');
        }
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
      }
    })
  })

  $('#simpan-cetak').click(function(e) {
    e.stopPropagation();
    var keteranganSurat = $(this).attr('id-surat');
    var alasan = $('#luas-tanah').val() + '||' + $('#harga').val() + '||' + $('#batas-utara').val() + '||' + $(
      '#batas-selatan').val() + '||' + $('#batas-timur').val() + '||' + $('#batas-barat').val() + '||' + $(
      '#saksi1').val() + '||' + $('#saksi2').val();
    var data = new FormData();
    data.append('keterangan-surat', keteranganSurat);
    data.append('no-surat', $('#no-surat').val());
    data.append('nama-pemohon', $('#nama-pemohon').attr('data-nik'));
    data.append('tanggal', $('#tanggal').val());
    data.append('keterangan', $('#alasan').val());
    data.append('penerima', $('#nama-ortu').attr('data-nik'));
    data.append('catatan-jual', alasan);
    data.append('catatan', $('#catatan').val());

    $.ajax({
      beforeSend: function() {
        $('.simpan-cetak').attr('disabled', 'disabled')
      },
      type: 'post',
      url: 'surat/proses.php',
      data: data,
      processData: false,
      contentType: false,
      success: function(responHasil) {
        var pecah = responHasil.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        $('#notif').show();
        if (pecah[0] == 'success') {
          window.open(pecah[2], '_blank');
        }
        setTimeout(function() {
          location.reload();
        }, 2000);
        // $('#cetak-dokumen').remove()
        // $('.simpan-cetak').after('<a class="btn btn-primary btn-block" id="cetak-dokumen" href="' + pecah[
        //   2] + '" target="_blank" role="button">Cetak</a>');
        // $('.simpan-cetak').hide();
      }
    })
  })

})
</script>