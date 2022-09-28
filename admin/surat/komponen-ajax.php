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
<button type="button" class="btn btn-primary btn-block simpan-cetak" id="keterangan-tidak-mampu">Simpan & Cetak</button>
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
<button type="button" class="btn btn-primary btn-block simpan-cetak" id="surat-kuasa">Simpan & Cetak</button>
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
<button type="button" class="btn btn-primary btn-block simpan-cetak" id="surat-keterangan-profil-kerja">Simpan &
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
<button type="button" class="btn btn-primary btn-block simpan-cetak" id="surat-keterangan-kelakuan-baik">Simpan &
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
  <label for="tanggal" class="col-sm-4 col-form-label">Luas Tanah</label>
  <div class="col-sm-8">
    <div class="input-group mb-2">
      <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="234">
      <div class="input-group-prepend">
        <div class="input-group-text">M<sup>2</sup></div>
      </div>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Harga</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="3"
      placeholder="Rp.1.500.000 ( Satu Juta Lima Ratus Ribu Rupiah )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Batas Sebelah Utara</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2" placeholder="Berbatasan dengan Gunung"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Batas Sebelah Selatan</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2" placeholder="Berbatasan dengan Jalan Trans"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Batas Sebelah Timur</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2"
      placeholder="Berbatasan dengan Pekarangan Karnain Mohi"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Batas Sebelah Barat</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2" placeholder="Berbatasan dengan tanahnya Hasan Gusi"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Saksi 1</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2" placeholder="ISMATY A MOHI ( Kadus Tolite )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Saksi 2</label>
  <div class="col-sm-8">
    <textarea class="form-control" id="alasan" rows="2"
      placeholder="2.	DESRA A BOTUTIHE ( Plt.Kasie Pemerintahan )"></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Cetak</label>
  <div class="col-sm-8">
    <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
  </div>
</div>
<button type="button" class="btn btn-primary mb-2 btn-block simpan-cetak" id="surat-keterangan-jual-beli-tanah">Simpan &
  Cetak</button>
<div class="alert alert-primary mt-2" id="notif" role="alert" style="display:none">
  Jika terjadi kesalahan pada surat, silahkan diedit dan dicetak ulang di tab menu Surat Keluar
</div>
<?php
      break;
  }
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

<script>
$(document).ready(function() {

  $('.form-control').attr('autocomplete', 'off');

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
        window.open(pecah[2], '_blank');
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

  $('.simpan-cetak').click(function() {
    var keteranganSurat = $(this).attr('id');
    var data = new FormData();
    data.append('keterangan-surat', keteranganSurat);
    data.append('no-surat', $('#no-surat').val());
    data.append('nama-pemohon', $('#nama-pemohon').attr('data-nik'));
    data.append('tanggal', $('#tanggal').val());
    data.append('keterangan', $('#alasan').val());
    data.append('penerima', $('#nama-ortu').attr('data-nik'));

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
        window.open(pecah[2], '_blank');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        $('#notif').show();
      }
    })
  })

})
</script>