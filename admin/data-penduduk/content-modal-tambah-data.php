<?php
require 'functions.php';
?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Data Penduduk</a>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data KK</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li> -->
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="form-group">
      <label for="nik">NIK</label>
      <input type="number" class="form-control" id="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama">
    </div>
    <div class="form-group">
      <label for="tl">Tempat Lahir</label>
      <input type="text" class="form-control" id="tl">
    </div>
    <div class="form-group">
      <label for="tgl">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tgl">
    </div>
    <div class="form-group">
      <label for="jk">Jenis Kelamin</label>
      <select class="form-control" id="jk">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Jl. Trans Sulawesi">
    </div>
    <div class="form-group">
      <label for="rt-rw">RT/RW</label>
      <input type="text" class="form-control" id="rt-rw" placeholder="001/001">
    </div>
    <div class="form-group">
      <label for="desa">Kel/Desa</label>
      <input type="text" class="form-control" id="desa" value="Tolotio">
    </div>
    <div class="form-group">
      <label for="kecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" value="Bonepantai">
    </div>
    <div class="form-group">
      <label for="agama">Agama</label>
      <select class="form-control" id="agama">
        <option value="Islam">Islam</option>
        <option value="Protestan">Kristen Protestan</option>
        <option value="Katolik">Kristen Katolik</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Konghuchu">Konghuchu</option>
      </select>
    </div>
    <div class="form-group">
      <label for="status">Status Perkawinan</label>
      <select class="form-control" id="status">
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Cerai">Cerai</option>
      </select>
    </div>
    <div class="form-group">
      <label for="pekerjaan">Pekerjaan</label>
      <input type="text" class="form-control" id="pekerjaan">
    </div>
  </div>
  <div class="form-group">
    <label for="status-hidup">Status</label>
    <select class="form-control" id="status-hidup">
      <option value="Hidup">Hidup</option>
      <option value="Meninggal">Meninggal</option>
    </select>
  </div>
  <div class="form-group">
    <label for="kependudukan">Kependudukan</label>
    <select class="form-control" id="kependudukan">
      <option value="asli">Penduduk Desa Tolotio</option>
      <option value="bukan penduduk">Bukan Penduduk Desa Tolotio</option>
    </select>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
</div>

<script>
$(document).ready(function() {
  $('.form-control').attr('autocomplete', 'off');
})
</script>