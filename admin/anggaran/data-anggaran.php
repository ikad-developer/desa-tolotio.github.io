<?php
require 'functions.php';
$cari_bulan = query("SELECT * FROM `pengeluaran` ORDER BY tanggal ASC ");
$bulan = [];
$id_kegiatan = [];
if(mysqli_num_rows($cari_bulan)>0){
  while($data = mysqli_fetch_assoc($cari_bulan)){
    if(!in_array($data['bulan'],$bulan)){
      $bulan[] = $data['bulan'];
      // $id_kegiatan[] = $data['']
    }
  }
}

?>
<div class="accordion" id="accordionExample">
<?php
for($i = 0; $i < count($bulan); $i++){
?>
  <div class="card">
    <div class="card-header" id="headingOne-<?= $i ?>">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne-<?= $i ?>" aria-expanded="true" aria-controls="collapseOne">
          <?= $bulan[$i]; ?>
        </button>
      </h2>
    </div>

    <div id="collapseOne-<?= $i ?>" class="collapse" aria-labelledby="headingOne-<?= $i ?>" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kegiatan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Total Anggaran</th>
              <th scope="col" width="170px">Aksi</th>
            </tr>
          </thead>
          <tbody>
<?php
$bulan_sekarang = $bulan[$i];
$no = 1;
$cek_kegiatan = query("SELECT * FROM `pengeluaran` WHERE bulan = '$bulan_sekarang' ORDER BY tanggal ASC ");
while($data = mysqli_fetch_assoc($cek_kegiatan)){
?>
            <tr>
              <th rowspan="3" scope="row"><?= $no; ?></th>
              <td rowspan="3"><?= $data['nama']; ?></td>
              <td rowspan="3"><?= $data['keterangan']; ?></td>
              <td rowspan="3"><?= tgl_indo($data['tanggal']); ?></td>
              <td rowspan="3"><?= total_anggaran($data['id']); ?></td>
              <td><button type="button" class="btn btn-success tambah-nota" data-id="<?= $data['id'] ?>"><i class="fa fa-plus" aria-hidden="true"></i> Tambah nota</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit nota</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus nota</button></td>
            </tr>
<?php 
$no++;
}
?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php } ?>  
</div>

<div class="modal fade" id="modal-tambah-nota" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="content-tambah-nota">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary aksi-nota" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary aksi-nota" id="tambah-nota">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('.tambah-nota').click(function(){
      var id_kegiatan = $(this).attr('data-id');
      $('#modal-tambah-nota').modal('show');
      $.ajax({
        beforeSend : function(){ $('#content-tambah-nota').html('<center><img src="<?= $basis_url ?>images/loading.gif" alt=""></center>'); },
        url : 'anggaran/content-modal-tambah-nota.php',
        data : 'id-kegiatan=' + id_kegiatan,
        type : 'post',
        success : function(respon){
          $('#content-tambah-nota').html(respon);
        }
      })
    })

    $('#tambah-nota').click(function(){
      var id_kegiatan = $('#id-kegiatan').val();
      var nama_nota = $('#nota').val();
      var biaya = $('#biaya').val();
      var file_nota = $('#file-nota').prop('files')[0];
      
      var data = new FormData();
      data.append('upload-nota',true);
      data.append('id-kegiatan',id_kegiatan);
      data.append('nama-nota',nama_nota);
      data.append('biaya',biaya);
      data.append('file',file_nota);

      $.ajax({
        beforeSend : function(){ $('.aksi-nota').attr('disabled','disabled'); $('#tambah-nota').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> menyimpan data') },
        url : 'anggaran/proses.php',
        type : 'post',
        data : data,
        contentType : false,
        processData : false,
        success : function(respon){
          var pecah = respon.split('||');
          Swal.fire(
            pecah[0],
            pecah[1],
            pecah[2]
          )
          $('#modal-tambah-nota').modal('hide');
          setTimeout(() => {
            $('#tabel-pengeluaran').load('anggaran/data-anggaran.php');
          }, 1500);
        }
      })
    })
  })
</script>