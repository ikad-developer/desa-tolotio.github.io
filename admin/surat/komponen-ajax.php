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
        <label for="penghasilan-ortu" class="col-sm-4 col-form-label">Alasan Penggunaan Surat Keterangan</label>
        <div class="col-sm-8">
          <textarea class="form-control" id="penghasilan-ortu" rows="3" placeholder="Persyaratan mendaftar Kuliah di Universitas Bina Taruna"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="penghasilan-ortu" class="col-sm-4 col-form-label">Tanggal Cetak</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="penghasilan-ortu" value="<?= date('Y-m-d') ?>">
        </div>
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
        <option value="<?= $data['nik']; ?>" data-sumber="<?= $sumber; ?>" class="hasil-pencarian" data-nama="<?= $data['nama']; ?>" data-hasil="<?= $hasil ?>"><?= $no . '. ' . $data['nama']; ?></option>
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

      if (nama.length > 3) {
        $.ajax({
          beforeSend: function() {
            $(hasil).html('<div class="d-flex align-items-center"> <strong > Mencari Data ' + nama + ' ... </strong> <div class = "spinner-border ml-auto spinner-border-sm" role = "status" aria - hidden = "true" > < /div> </div>');
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
      $(sumber).val(hasilCari);
      $(hasil).hide();
    })

  })
</script>