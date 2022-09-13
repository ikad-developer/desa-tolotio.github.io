<?php
require 'functions.php';

if (isset($_POST['edit-penduduk'])) {
  $nik = $_POST['edit-penduduk'];
  $data = mysqli_fetch_assoc(query("SELECT * FROM `penduduk` WHERE nik = '$nik' "));
?>
  <div class="form-group">
    <label for="nik">NIK</label>
    <input type="number" class="form-control" id="nik" value="<?= $data['nik']; ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" value="<?= $data['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="tl">Tempat Lahir</label>
    <input type="text" class="form-control" id="tl" value="<?= $data['tempat_lahir']; ?>">
  </div>
  <div class="form-group">
    <label for="tgl">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl" value="<?= $data['tanggal_lahir']; ?>">
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select class="form-control" id="jk">
      <?php
      if ($data['jenis_kelamin'] == 'Laki-Laki') {
      ?>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      <?php
      } else {
      ?>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-Laki">Laki-Laki</option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Jl. Trans Sulawesi" value="<?= $data['alamat']; ?>">
  </div>
  <div class="form-group">
    <label for="rt-rw">RT/RW</label>
    <input type="text" class="form-control" id="rt-rw" placeholder="001/001" value="<?= $data['rtrw']; ?>">
  </div>
  <div class="form-group">
    <label for="desa">Kel/Desa</label>
    <input type="text" class="form-control" id="desa" value="<?= $data['desa']; ?>">
  </div>
  <div class="form-group">
    <label for="kecamatan">Kecamatan</label>
    <input type="text" class="form-control" id="kecamatan" value="<?= $data['kecamatan']; ?>">
  </div>
  <div class="form-group">
    <label for="agama">Agama</label>
    <select class="form-control" id="agama">
      <?php
      $isi = ["Islam", "Protestan", "Katolik", "Budha", "Hindu", "Konghucu"];
      $label = ["Islam", "Kristen Protestan", "Kristen Katolik", "Budha", "Hindu", "Konghucu"];
      for ($i = 0; $i < count($isi); $i++) {
        if ($isi[$i] == $data['agama']) {
          $status = 'selected';
        } else {
          $status = '';
        }
      ?>
        <option value="<?= $isi[$i]; ?>" <?= $status; ?>><?= $label[$i]; ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="status">Status Perkawinan</label>
    <select class="form-control" id="status">
      <?php
      $value = ["Belum Kawin", "Kawin", "Cerai"];
      for ($i = 0; $i < count($value); $i++) {
        if ($value[$i] == $data['status']) {
          $status = 'selected';
        } else {
          $status = '';
        }
      ?>
        <option value="<?= $value[$i] ?>" <?= $status ?>><?= $value[$i] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="pekerjaan">Pekerjaan</label>
    <input type="text" class="form-control" id="pekerjaan" value="<?= $data['pekerjaan']; ?>">
  </div>
<?php
}
