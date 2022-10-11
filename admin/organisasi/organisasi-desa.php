<?php
require 'functions.php';
$jabatan = ["kades", "sekretaris", "bendahara", "kadus1", "kadus2", "kadus3", "kadus4"];
$label = ["Kepala Desa", "Sekretaris", "Bendahara", "Kepala Dusun I Tamendao", "Kepala Dusun II Tangalo", "Kepala Dusun III Liawao", "Kepala Dusun IV Tolite"];
?>
<div class="row mt-2">
  <?php
  for ($i = 0; $i < count($jabatan); $i++) {
  ?>
  <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-body">
        <center>
          <h4><?= strtoupper($label[$i]); ?></h4>

          <img src="../<?= cek_organisasi($jabatan[$i])['profil']; ?>" id="gambar-<?= $jabatan[$i]; ?>" class="mb-2"
            alt="..." width="113px" height="151px" style="width: 120px;">
        </center>
        <input type="text" class="form-control nama" data-id="<?= $jabatan[$i]; ?>" id="nama-<?= $jabatan[$i]; ?>"
          placeholder="Nama Kepala Desa" value="<?= cek_organisasi($jabatan[$i])['nama']; ?>">

        <?php
          if ($i == 0) {
          ?>
        <input type="text" class="form-control nik mt-2" data-id="<?= $jabatan[$i]; ?>" id="nik-<?= $jabatan[$i]; ?>"
          placeholder="Nomor Induk Kependudukan (NIK)" value="<?= cek_organisasi($jabatan[$i])['nik']; ?>">
        <small class="form-text text-muted">Untuk Kepala Desa NIK harus disertakan</small>
        <?php } ?>
        <input type="file" class="form-control-file mt-2 upload-gambar" id="<?= $jabatan[$i]; ?>">
        <small class="form-text text-muted">Foto yang diupload <b>HARUS BERUKURAN 3x4 cm</b></small>
        <button type="button" class="btn btn-primary btn-sm mt-2 btn-block simpan-data" data-id="<?= $jabatan[$i]; ?>"
          id="simpan-<?= $jabatan[$i]; ?>" disabled>Simpan</button>
      </div>
    </div>
  </div>
  <?php } ?>
  <hr>
  <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
    <div class="card" style="background-color: #d7e5fc;">
      <div class="card-body">
        <center>
          <h4>STAF PEGAWAI BARU</h4>
          <img src="../images/user.png" id="gambar-calon" class="mb-2" alt="..." width="113px" height="151px"
            style="width: 120px;">
        </center>
        <input type="text" class="form-control nama" id="nama-pegawai-baru" placeholder="Nama Pegawai Baru" value="">
        <input type="file" class="form-control-file mt-2" id="foto-calon">
        <small class="form-text text-muted">Foto yang diupload <b>HARUS BERUKURAN 3x4 cm</b></small>
        <button type="button" class="btn btn-primary btn-sm mt-2 btn-block" id="simpan-data-pegawai" disabled>Simpan
          Data Pegawai Baru</button>
      </div>
    </div>
  </div>
  <?php
  $staf = query("SELECT * FROM `organisasi` WHERE jabatan = 'staf' ");
  while ($data = mysqli_fetch_assoc($staf)) {
  ?>
  <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-body">
        <center>
          <h4>STAF PEGAWAI</h4>
          <img src="../<?= $data['foto']; ?>" id="gambar-<?= $data['id']; ?>" class="mb-2" alt="..." width="113px"
            height="151px" style="width: 120px;">
        </center>
        <input type="text" class="form-control nama" data-id="<?= $data['id']; ?>" id="nama-<?= $data['id']; ?>"
          placeholder="Nama Kepala Desa" value="<?= $data['nama']; ?>">
        <input type="file" class="form-control-file mt-2 upload-gambar" id="<?= $data['id']; ?>">
        <small class="form-text text-muted">Foto yang diupload <b>HARUS BERUKURAN 3x4 cm</b></small>
        <button type="button" class="btn btn-primary btn-sm mt-2 btn-block simpan-data" data-id="<?= $data['id']; ?>"
          id="simpan-<?= $data['id']; ?>" disabled>Simpan</button>
        <button type="button" class="btn btn-danger btn-sm mt-2 btn-block hapus-data" data-id="<?= $data['id']; ?>"
          id="hapus-<?= $data['id']; ?>">Hapus</button>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>

<script>
$(document).ready(function() {

  $('.upload-gambar').change(function() {
    var id = "gambar-" + $(this).attr('id');
    var file = $(this).val();
    gambar(file, id);
    $('#simpan-' + $(this).attr('id')).removeAttr('disabled', 'disabled');
  })

  $('.simpan-data').click(function() {
    var id = $(this).attr('data-id');
    var nama = $('#nama-' + id).val();
    var gambar = $('#' + id).prop('files')[0];
    var nik = $('#nik-' + id).val();
    var data = new FormData();
    data.append('ubah-struktur', true);
    data.append('nama', nama);
    data.append('gambar', gambar);
    data.append('id', id);
    data.append('nik', nik);

    $.ajax({
      beforeSend: function() {
        $('#simpan-' + id).attr('disabled', 'disabled');
        $('#simpan-' + id).html('Menyimpan Data...');
      },
      url: 'organisasi/proses.php',
      type: 'post',
      data: data,
      processData: false,
      contentType: false,
      success: function(respon) {
        var pecah = respon.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        $('#simpan-' + id).html('Simpan');
      }
    })
  })

  $('.nama').keyup(function() {
    var id = $(this).attr('data-id');
    $('#simpan-' + id).removeAttr('disabled');
  })

  $('.nik').keyup(function() {
    var id = $(this).attr('data-id');
    $('#simpan-' + id).removeAttr('disabled');
  })

  $('#foto-calon').change(function() {
    var id = "gambar-calon";
    var file = $(this).val();
    gambar(file, id);
    $('#simpan-data-pegawai').removeAttr('disabled');
  })

  $('#simpan-data-pegawai').click(function() {
    var nama = $('#nama-pegawai-baru').val();
    var gambar = $('#foto-calon').prop('files')[0];
    var data = new FormData();
    data.append('tambah-pegawai', true);
    data.append('nama', nama);
    data.append('gambar', gambar);

    $.ajax({
      beforeSend: function() {
        $('#simpan-data-pegawai').attr('disabled', 'disabled');
        $('#simpan-data-pegawai').html('Menyimpan Data...');
      },
      url: 'organisasi/proses.php',
      type: 'post',
      data: data,
      processData: false,
      contentType: false,
      success: function(respon) {
        var pecah = respon.split('|');
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        $('#contact').load('organisasi/organisasi-desa.php');
      }
    })
  })

  $('#nama-pegawai-baru').keyup(function() {
    var nama = $(this).val();
    if (nama.length > 2) {
      $('#simpan-data-pegawai').removeAttr('disabled');
    } else {
      $('#simpan-data-pegawai').attr('disabled', 'disabled')
    }
  })

  $('.hapus-data').click(function() {
    var id = $(this).attr('data-id');
    var nama = $('#nama-' + id).val();
    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Anda akan menghapus data pegawai " + nama,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yah, hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          beforeSend: function() {
            $('#hapus-' + id).attr('disabled', 'disabled');
            $('#hapus-' + id).html('Menghapus Data...');
          },
          url: 'organisasi/proses.php',
          data: 'hapus-pegawai=' + id,
          type: 'post',
          success: function(respon) {
            var pecah = respon.split('|');
            Swal.fire({
              position: 'center',
              icon: pecah[0],
              title: pecah[1],
              showConfirmButton: false,
              timer: 1500
            })
            $('#contact').load('organisasi/organisasi-desa.php');
          }
        })
      }
    })
  })

  function gambar(val, id) {
    $("#" + id).attr('src', URL.createObjectURL(event.target.files[0]));
  }
})
</script>