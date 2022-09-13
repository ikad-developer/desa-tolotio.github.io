<?php
require 'functions.php';
$_SESSION['menu'] = 'data-penduduk';
?>
<div class="row">

  <div class="col-auto pt-3">
    <button type="button" class="btn btn-primary tambah-data">Tambah data</button>
  </div>

  <div class="col-5 pt-3">
    <div class="input-group mb-2">
      <input type="text" class="form-control" id="cari-data" placeholder="Cari nama..." autocomplete="off">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
    </div>
    <div id="autocomplete" style="display:none;position:absolute; width:87%; margin-top:-9px"></div>
  </div>

  <div class="col-4 pt-3">
    <select class="custom-select" id="kategori">
      <option value="penduduk" selected>Data per penduduk</option>
      <option value="kk">Data per Kepala Keluarga</option>
    </select>
  </div>

</div>

<div id="tabel-penduduk"></div>

<div class="modal fade" id="modal-tambah-data" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="content-tambah-data">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="tambah-data">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    $('.form-control').attr('autocomplete', 'off');

    $('.tambah-data').click(function() {
      $('#modal-tambah-data').modal('show');
      $('#content-tambah-data').load('data-penduduk/content-modal-tambah-data.php');
    })

    $(document).click(function() {
      $('#autocomplete').html("");
    })

    $('#cari-data').keyup(function() {
      var keyword = $(this).val();
      var kategori = $('#kategori').val();
      if (keyword.length > 2) {
        $.ajax({
          url: 'data-penduduk/komponen-ajax.php',
          type: 'post',
          data: 'cari-data=true&keyword=' + keyword + '&kategori=' + kategori,
          success: function(respon) {
            $('#autocomplete').show();
            $('#autocomplete').html(respon);
          }
        })
      } else {
        $('#autocomplete').hide();
        load_tabel(0, '', kategori);
      }
    })

    $('#tambah-data').click(function() {
      var data = new FormData();
      data.append('tambah-data', true);
      data.append('nik', $('#nik').val());
      data.append('nama', $('#nama').val());
      data.append('tl', $('#tl').val());
      data.append('tgl', $('#tgl').val());
      data.append('rt-rw', $('#rt-rw').val());
      data.append('desa', $('#desa').val());
      data.append('kecamatan', $('#kecamatan').val());
      data.append('agama', $('#agama').val());
      data.append('status', $('#status').val());
      data.append('pekerjaan', $('#pekerjaan').val());
      data.append('jk', $('#jk').val());
      data.append('alamat', $('#alamat').val());

      $.ajax({
        beforeSend: function() {
          $('#tambah-data').attr('disabled', 'disabled')
        },
        type: 'post',
        data: data,
        url: 'data-penduduk/proses.php',
        contentType: false,
        processData: false,
        success: function(respon) {
          var pecah = respon.split('|');
          Swal.fire({
            position: 'center',
            icon: pecah[0],
            title: pecah[1],
            showConfirmButton: false,
            timer: 1500
          })
          $('#tambah-data').removeAttr('disabled', 'disabled')
          $('#modal-tambah-data').modal('hide');
          var hal = 0;
          var cari = $('#cari-data').val();
          var kategori = $('#kategori').val();
          load_tabel(hal, cari, kategori);
        }
      })
    })

    var hal = 0;
    var cari = $('#cari-data').val();
    var kategori = $('#kategori').val();

    load_tabel(hal, cari, kategori);

    $('#kategori').change(function() {
      $('#cari-data').val("");
      var kategori = $(this).val();
      var cari = $('#cari-data').val();
      var halaman = 0;
      load_tabel(halaman, cari, kategori);
    })

    function load_tabel(hal, cari, kategori) {
      $.ajax({
        beforeSend: function() {
          $('#tabel-penduduk').html('<center><img src="../images/loading.gif" alt="" width="150px"></center>')
        },
        url: 'data-penduduk/tabel-penduduk.php',
        data: 'data-tabel=true&halaman=' + hal + '&cari=' + cari + '&kategori=' + kategori,
        type: 'post',
        success: function(respon) {
          $('#tabel-penduduk').html(respon);
        }
      })
    }

  })
</script>