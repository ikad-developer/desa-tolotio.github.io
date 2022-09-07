<?php
require 'functions.php';
$_SESSION['menu'] = 'surat';
?>
<h4 class="mt-2">Buat Surat</h4>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <label for="cari">Pilih nama</label>
      <input type="text" class="form-control" id="cari" placeholder="Masukkan Nama atau NIK" data-id="">
      <div id="autocomplete" style="position:absolute; width:93%"></div>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group">
      <label for="kategori">Pilih Surat</label>
      <select class="form-control" id="kategori">
        <option value="">Pilih surat</option>
        <option value="surat-keterangan-kurang-mampu">Surat Keterangan Miskin</option>
      </select>
    </div>
  </div>
  <div class="col-4">
    <div class="form-group">
      <label for="no-surat">No Surat</label>
      <input type="text" class="form-control" id="no-surat">
    </div>
  </div>
  <div class="col-1">
    <button type="button" class="btn btn-primary" id="cetak" disabled style="margin-top:31px">Cetak</button>
  </div>
</div>

<center><h4 class="mt-4">Riwayat Surat Keluar</h4></center>
<div id="tabel-surat-keluar">
</div>

<script>
  $(document).ready(function(){
    $('#tabel-surat-keluar').load('surat/tabel-riwayat-surat.php');
    $('#cari').keyup(function(){
      var keyword = $(this).val();
      if(keyword.length > 2){
        $.ajax({
          beforeSend : function(){ $('#autocomplete').html("") },
          url : 'surat/komponen-ajax.php',
          data : 'cari=' + keyword,
          type : 'post',
          success : function(respon){
            $('#autocomplete').html(respon);
          }
        })
      }else{
        $("#autocomplete").html("");
      }
    })

    $('#kategori').change(function(){
      var kategori = $(this).val();
      var nik = $('#cari').attr('data-id');
      if(kategori != '' && nik !=''){
        $('#cetak').removeAttr('disabled');
      }else{
        $('#cetak').attr('disabled','disabled');
      }
    })

    $('#cetak').click(function(){
      var kategori = $('#kategori').val();
      var nik = $('#cari').attr('data-id');
      var no_surat = $('#no-surat').val();
      $.ajax({
        beforeSend : function(){ $('#cetak').attr('disabled','disabled') },
        url : 'surat/proses.php',
        data : 'cetak=true&kategori=' + kategori + '&nik=' + nik + '&no-surat=' + no_surat,
        type : 'post',
        success : function(respon){
          window.open(respon,'_blank');
          setTimeout(() => {
            location.reload();
          }, 1500);
        }
      })
    })
  })
</script>