<?php
require 'functions.php';
$data = mysqli_fetch_assoc(query("SELECT * FROM `user` WHERE id = '$id' "));
?>
<style>
.titik-dua {
  text-align: center;
  ;
  width: 25px;
}

table tr {
  height: 30px;
}
</style>
<div class="row">
  <div class="col-sm-12 col-lg-4">
    <div class="card">
      <div class="card-body">
        <center>
          <h4>Informasi Akun</h4>
        </center>
        <div class="form-group row">
          <label for="inputEmail3" class="col-4 col-form-label">Username</label>
          <div class="col-8">
            <input type="text" class="form-control" value="<?= $data['id'] ?>" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-4 col-form-label">Password</label>
          <div class="col-8">
            <div class="input-group mb-2">
              <input type="password" class="form-control" id="password" value="<?= base64_decode($data['ket']); ?>">
              <div class="input-group-prepend">
                <div class="input-group-text" id="mata-password">
                  <i class="fa fa-eye-slash" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary btn-block" id="ubah-password"><i class="fa fa-lock"
            aria-hidden="true"></i> S I M
          P
          A N</button>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-lg-8">
    <center>
      <h4>Informasi Pribadi</h4>
    </center>
    <table>
      <tr>
        <td>Nama</td>
        <td class="titik-dua">:</td>
        <td><?= penduduk($nik)['nama']; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td class="titik-dua">:</td>
        <td><?= $nik; ?></td>
      </tr>
      <tr>
        <td>T T L</td>
        <td class="titik-dua">:</td>
        <td><?= penduduk($nik)['tempat-lahir'] . ', ' . penduduk($nik)['tanggal-lahir']; ?></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td class="titik-dua">:</td>
        <td><?= penduduk($nik)['pekerjaan']; ?></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td class="titik-dua">:</td>
        <td><?= penduduk($nik)['umur']; ?> Tahun</td>
      </tr>
    </table>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#mata-password').click(function() {
    if ($('#password').attr('type') == 'password') {
      $('#password').attr('type', 'text');
      $('#mata-password').html('<i class="fa fa-eye" aria-hidden="true"></i>');
    } else {
      $('#password').attr('type', 'password');
      $('#mata-password').html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
    }
  })

  $('#ubah-password').click(function() {
    var password = $('#password').val();
    $.ajax({
      beforeSend: function() {
        $('#ubah-password').attr('disabled', 'disabled')
      },
      url: 'organisasi/proses.php',
      data: 'ubah-password=' + password,
      type: 'post',
      success: function(respon) {
        var pecah = respon.split("|");
        Swal.fire({
          position: 'center',
          icon: pecah[0],
          title: pecah[1],
          showConfirmButton: false,
          timer: 1500
        })
        $('#ubah-password').removeAttr('disabled');
      }
    })
  })

})
</script>