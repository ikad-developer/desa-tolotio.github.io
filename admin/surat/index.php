<?php
require 'functions.php';
$_SESSION['menu'] = 'surat';
?>

<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Buat Surat</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Surat masuk</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Surat Keluar</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-lg-5">
        <div class="form-group">
          <select class="form-control" id="jenis-surat">
            <option>--Pilih Surat--</option>
            <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
            <option value="Surat Keterangan Penghasilan Orang Tua">Surat Keterangan Penghasilan Orang Tua</option>
            <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
          </select>
        </div>
        <div id="komponen-surat"></div>
      </div>
      <div class="col-lg-7 mb-2" id="contoh-surat">

      </div>
    </div>
  </div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

<script>
  $(document).ready(function() {
    $('#tabel-surat-keluar').load('surat/tabel-riwayat-surat.php');

    $('#jenis-surat').change(function() {
      var surat = $(this).val();
      if (surat != '') {
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
            $('#contoh-surat').html('<div class="embed-responsive embed-responsive-1by1"> <iframe class = "embed-responsive-item" src = "../file-surat/contoh/' + surat + '.pdf" allowfullscreen > < /iframe>');
          }
        })
      }
    })

  })
</script>