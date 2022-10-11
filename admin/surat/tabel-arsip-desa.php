<?php
require 'functions.php';

if (isset($_POST['cari-dokumen'])) {
  $cari = $_POST['cari-dokumen'];
  if ($cari == '') {
    $cek_file = query("SELECT * FROM `arsip` ORDER BY id DESC ");
  } else {
    $cek_file = query("SELECT * FROM `arsip` WHERE nama LIKE '%$cari%' ORDER BY id DESC ");
  }
  if (mysqli_num_rows($cek_file) > 0) {
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Dokumen</th>
      <th scope="col">Deskripsi</th>
      <th scope="col" width="160px">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($cek_file)) {
        ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['deskripsi']; ?></td>
      <td>
        <a class="btn btn-primary btn-sm" href="<?= $data['file']; ?>" target="_blank" role="button">Lihat File</a>
        <button type="button" class="btn btn-danger btn-sm hapus" data-id="<?= $data['id']; ?>"
          data-nama="<?= $data['nama']; ?>">Hapus</button>
      </td>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>
<?php
  } else {
  ?>
<div class="alert alert-primary" role="alert">
  Dokumen desa tidak ditemukan
</div>
<?php
  }
}
?>
<script>
$(document).ready(function() {
  $('.hapus').click(function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Anda akan menghapus file " + nama + "?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          beforeSend: function() {
            $("[data-id='" + id + "']").attr('disabled', 'disabled');
          },
          type: 'post',
          data: 'hapus-dokumen-desa=' + id,
          url: 'surat/proses.php',
          success: function(respon) {
            var pecah = respon.split('||');
            Swal.fire(
              pecah[0],
              pecah[1],
              pecah[2]
            )
            arsip_desa();
          }
        })
      }
    })
  })

  function arsip_desa() {
    var cari = $('#cari-arsip-desa').val();
    $.ajax({
      beforeSend: function() {
        $('#data-arsip-desa').html(
          '<center><img src="../images/loading.gif" class="img-fluid" alt="..."></center>')
      },
      type: 'post',
      data: 'cari-dokumen=' + cari,
      url: 'surat/tabel-arsip-desa.php',
      success: function(respon) {
        $('#data-arsip-desa').html(respon);
      }
    })
  }

})
</script>