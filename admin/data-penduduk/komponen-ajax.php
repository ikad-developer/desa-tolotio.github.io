<?php
require 'functions.php';

if(isset($_POST['cari-data'])){
  $cari = $_POST['keyword'];
  $kategori = $_POST['kategori'];
  if($kategori == 'penduduk'){
    $cari_data = query("SELECT * FROM `penduduk` WHERE nama LIKE '%$cari%' ");
  }else{
    $cari_data = query("SELECT * FROM `penduduk` JOIN kartu_keluarga ON penduduk.nik = kartu_keluarga.kepala_kk WHERE penduduk.nama LIKE '%$cari%' ");
  }
?>
  <select multiple class="form-control">
<?php
  if(mysqli_num_rows($cari_data)<1){
    if($kategori == 'penduduk'){
      $status = "Tidak ada masyarakat yang bernama $cari";
    }else{
      $status = "Tidak ada kepala keluarga yang bernama $cari";
    }
?>
    <option disabled style="color:red"><?= $status; ?></option>
<?php
  }else{
    while($data = mysqli_fetch_assoc($cari_data)){
?>
      <option class="pilih-data" value="<?= $data['nik']; ?>"><?= $data['nama']; ?></option>
<?php
  }
}
?>
  </select>
<?php
}
?>
<script>
  $(document).ready(function(){

    $('.pilih-data').click(function(){
      var nik = $(this).val();
      var nama = $(this).text();
      var kategori = $('#kategori').val();
      var hal = 0;
      load_tabel(hal,nik,kategori);
      $('#cari-data').val(nama);
    })

    function load_tabel(hal,cari,kategori){
      $.ajax({
        beforeSend : function(){ $('#tabel-penduduk').html('<center><img src="../images/loading.gif" alt="" width="150px"></center>') },
        url : 'data-penduduk/tabel-penduduk.php',
        data : 'data-tabel=true&halaman=' + hal + '&cari=' + cari + '&kategori=' + kategori,
        type : 'post',
        success : function(respon){
          $('#tabel-penduduk').html(respon);
        }
      })
    }

  })
</script>