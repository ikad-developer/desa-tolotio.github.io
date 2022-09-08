<?php
require 'functions.php';

if (isset($_POST['kategori-surat'])) {
  $kategori = $_POST['kategori-surat'];
  switch ($kategori) {
    case 'Surat Keterangan Penghasilan Orang Tua':
?>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Nama Pemohon</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
<?php
      break;
  }
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

  })
</script>