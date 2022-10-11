<?php
require '../../config.php';
if (isset($_POST['surat-masuk'])) {
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $sortir_awal = $tahun . '-' . $bulan . '-01';
  $sortir_akhir = $tahun . '-' . $bulan . '-31';
  $cek = query("SELECT * FROM `surat_masuk` WHERE tanggal >= '$sortir_awal' AND tanggal <= '$sortir_akhir' ORDER BY tanggal,id DESC");
  if (mysqli_num_rows($cek) > 0) {
?>
<table class="table table-bordered mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengirim / Instansi</th>
      <th scope="col">Perihal</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($cek)) {
        ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $data['instansi']; ?></td>
      <td><?= $data['perihal']; ?></td>
      <td><?= tgl_indo($data['tanggal']); ?></td>
      <td>
        <a class="btn btn-primary btn-sm" href="<?= $data['file']; ?>" target="_blank" role="button">Lihat</a>
        <button type="button" class="btn btn-danger btn-sm hapus" data-id="<?= $data['id']; ?>"
          data-perihal="<?= $data['perihal']; ?>" data-pengirim="<?= $data['instansi']; ?>">Hapus</button>
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
<div class="alert alert-primary mt-2" role="alert">
  Tidak Ada Data
</div>
<?php
  }
}
?>

<script>
$(document).ready(function() {

  $('.hapus').click(function() {
    var id = $(this).attr('data-id');
    var pengirim = $(this).attr('data-pengirim');
    var perihal = $(this).attr('data-perihal');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Anda akan menghapus surat " + perihal + " yang dikirim oleh " + pengirim + "?",
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
          data: 'hapus-surat-masuk=' + id,
          url: 'surat/proses.php',
          success: function(respon) {
            var pecah = respon.split('||');
            Swal.fire(
              pecah[0],
              pecah[1],
              pecah[2]
            )
            load_surat_masuk();
          }
        })
      }
    })
  })

  function load_surat_masuk() {
    var bulan = $('#bulan-surat-masuk').val();
    var tahun = $('#tahun-surat-masuk').val();
    $.ajax({
      beforeSend: function() {
        $('#data-surat-masuk').html(
          '<center><img src="../images/loading.gif" class="img-fluid" alt=""></center>');
      },
      type: 'post',
      url: 'surat/tabel-surat-masuk.php',
      data: 'bulan=' + bulan + '&surat-masuk=true&tahun=' + tahun,
      success: function(respon) {
        $('#data-surat-masuk').html(respon);
      }
    })
  }

})
</script>