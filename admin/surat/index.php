<?php
require 'functions.php';
$_SESSION['menu'] = 'surat';
?>

<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab"
      aria-controls="home" aria-selected="true">Buat Surat</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#surat-keluar" type="button" role="tab"
      aria-controls="profile" aria-selected="false">Surat Keluar</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab"
      aria-controls="contact" aria-selected="false">Surat Masuk</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-lg-5">
        <div class="form-group">
          <select class="form-control" id="jenis-surat">
            <option>--Pilih Surat--</option>
            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
            <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
            <option value="Surat Keterangan Penghasilan Orang Tua">Surat Keterangan Penghasilan Orang Tua</option>
            <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
            <option value="Surat Kuasa">Surat Kuasa</option>
            <option value="Surat Keterangan Profil Kerja">Surat Keterangan Profil Kerja</option>
            <option value="Surat Keterangan Kelakuan Baik">Surat Keterangan Kelakuan Baik</option>
            <option value="Surat Keterangan Jual Beli Tanah">Surat Keterangan Jual Beli Tanah</option>
            <option value="Surat Rekomendasi">Surat Rekomendasi</option>
          </select>
        </div>
        <div id="komponen-surat"></div>
      </div>
      <div class="col-lg-7 mb-2" id="contoh-surat">

      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="surat-keluar" role="tabpanel" aria-labelledby="profile-tab"></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

<script>
$(document).ready(function() {
  $('#tabel-surat-keluar').load('surat/tabel-riwayat-surat.php');

  $('#surat-keluar').load('surat/tabel-surat-keluar.php');
  $('#profile-tab').click(function() {
    $('#surat-keluar').load('surat/tabel-surat-keluar.php');
  })


  $('#jenis-surat').change(function() {
    var surat = $(this).val();
    if (surat != '--Pilih Surat--') {
      $.ajax({
        beforeSend: function() {
          $('#jenis-surat').attr('disabled', 'disabled')
        },
        url: 'surat/komponen-ajax.php',
        data: 'kategori-surat=' + surat,
        type: 'post',
        success: function(respon) {
          $('#jenis-surat').removeAttr('disabled')
          $('#komponen-surat').html(respon);
          $('#contoh-surat').html(
            '<div class="embed-responsive embed-responsive-1by1"> <iframe class = "embed-responsive-item" src = "../file-surat/contoh/' +
            surat + '.pdf" allowfullscreen > < /iframe>');
        }
      })
    } else {
      $('#contoh-surat').html("");
      $('#komponen-surat').html("");
    }
  })

})
</script>