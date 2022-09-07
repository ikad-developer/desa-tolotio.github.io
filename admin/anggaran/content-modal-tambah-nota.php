<?php
require 'functions.php';

if(isset($_POST['id-kegiatan'])){
  $id_kegiatan = $_POST['id-kegiatan'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `pengeluaran` WHERE id = '$id_kegiatan' "));
?>
  <table>
    <tr>
      <td class="gantung">Kegiatan</td>
      <td class="gantung text-center" width="10px">:</td>
      <td class="gantung"><?= $data['nama'] ?></td>
    </tr>
    <tr>
      <td class="gantung">Keterangan</td>
      <td class="gantung text-center" width="10px">:</td>
      <td class="gantung"><?= $data['keterangan']; ?></td>
    </tr>
    <tr>
      <td class="gantung">Biaya saat ini</td>
      <td class="gantung text-center" width="10px">:</td>
      <td class="gantung"><?= total_anggaran($data['id']); ?></td>
    </tr>
    <tr>
      <td class="gantung">Tanggal</td>
      <td class="gantung text-center" width="10px">:</td>
      <td class="gantung"><?= tgl_indo($data['tanggal']); ?></td>
    </tr>
  </table>
  <br>
  <input type="text" id="id-kegiatan" value="<?= $data['id']; ?>" style="display:none">
  <div class="form-group">
    <label for="nota">Keterangan nota</label>
    <textarea class="form-control" id="nota" rows="3" placeholder="Penyewaan tenda dan kursi"></textarea>
  </div>
  <div class="form-group">
    <label for="biaya">Total biaya</label>
    <input type="number" class="form-control" id="biaya" placeholder="2000000">
  </div>
  <div class="form-group">
    <label for="file-nota">Upload nota</label>
    <input type="file" class="form-control" id="file-nota">
    <small id="emailHelp" class="form-text text-muted">Upload nota jika ada</small>
  </div>
<?php
}