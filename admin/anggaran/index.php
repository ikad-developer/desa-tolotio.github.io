<?php
require 'functions.php';
$_SESSION['menu'] = 'anggaran';
?>
<div class="mt-3">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pengeluaran</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pemasukan</a>
    </li>
    <!-- <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
    </li> -->
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <button type="button" class="btn btn-success tambah-pengeluaran"><i class="fa fa-plus" aria-hidden="true"></i> Tambah pengeluaran</button>
      <div id="tabel-pengeluaran" class="mt-3"></div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
    <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
  </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="tambah-pengeluaran" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama-kegiatan">Nama Kegiatan</label>
          <input type="text" class="form-control" id="nama-kegiatan" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="tanggal-kegiatan">Tanggal Pelaksanaan</label>
          <input type="date" class="form-control" id="tanggal-kegiatan" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi Kegiatan</label>
          <textarea class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary aksi-modal" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary aksi-modal" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

    $('.tambah-pengeluaran').click(function(){
      $('#tambah-pengeluaran').modal('show');
    })

    $('#simpan').click(function(){
      var nama = $('#nama-kegiatan').val();
      var tanggal = $('#tanggal-kegiatan').val();
      var deskripsi = $('#deskripsi').val();

      $.ajax({
        beforeSend : function(){ $('.aksi-modal').attr('disabled','disabled'); },
        url : 'anggaran/proses.php',
        type : 'post',
        data : 'tambah-kegiatan=true&kegiatan=' + nama + '&tanggal=' + tanggal + '&deskripsi=' + deskripsi,
        success : function(respon){
          var pecah = respon.split('||');
          Swal.fire(
            pecah[0],
            pecah[1],
            pecah[2]
          )
          $('#nama-kegiatan').val("");
          $('#tanggal-kegiatan').val("");
          $('#deskripsi').val("");
          $('.aksi-modal').removeAttr('disabled');
          $('#tambah-pengeluaran').modal('hide');
          $('#tabel-pengeluaran').load('anggaran/data-anggaran.php');
        }
      })
    })

    $('#tabel-pengeluaran').load('anggaran/data-anggaran.php');

  })
</script>