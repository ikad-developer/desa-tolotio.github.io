<?php
require 'functions.php';

if(isset($_POST['cari'])){
  $cari = $_POST['cari'];
  $query = query("SELECT * FROM `penduduk` WHERE nik LIKE '%$cari%' OR nama LIKE '%$cari%' ");
?>
<select multiple class="form-control" id="exampleFormControlSelect2" style="margin-top:1.5px">
<?php
  if(mysqli_num_rows($query)>0){
    while($data = mysqli_fetch_assoc($query)){
?>
  <option class="pilih-nama" value="<?= $data['nik']; ?>"><?= $data['nama']; ?></option>
<?php
  }
}else{
?>
  <option disabled>Tidak ada data</option>
<?php
}
?>
</select>
<?php
}
?>

<script>
  $(document).ready(function(){
    $('.pilih-nama').click(function(){
      var nama = $(this).text();
      var nik = $(this).val();
      $('#cari').val(nama);
      $('#cari').attr('data-id',nik);
      $('#autocomplete').html("");

      var kategori = $('#kategori').val();
      var nik = $('#cari').attr('data-id');
      if(kategori != '' && nik !=''){
        $('#cetak').removeAttr('disabled');
      }else{
        $('#cetak').attr('disabled','disabled');
      }
    })

  })
</script>