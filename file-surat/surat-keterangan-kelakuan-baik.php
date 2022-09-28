<?php
function keterangan_profil_kerja($no_surat, $pemohon,  $kades,  $tgl_cetak)
{
?>
<style>
ol {
  font-weight: bold;
}

ol li {
  height: 25px;
}
</style>
<section class="sheet padding-20mm">
  <?php require 'cop-surat.php'; ?>
  <p class="text-center"><u><b>SURAT KETERANGAN KELAKUAN BAIK</b></u></p>
  <p class="text-center" style="margin-top:10px; margin-bottom:10px">Nomor : <?= $no_surat; ?></p>
  <p style="margin-top:15px; text-indent:40px">Yang bertanda tangan dibawah ini Kepala Desa Tolotio Kecamatan Bonepantai
    Kabupaten Bone Bolango menerangkan bahwa :</p>
  <table style="margin-left:45px">
    <tr height="25px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= penduduk($pemohon)['nama']; ?></b></td>
    </tr>
    <tr height="25px">
      <td>NIK</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $pemohon; ?></td>
    </tr>
    <tr height="25px">
      <td>Tempat/Tanggal Lahir</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['tempat-lahir'] . ', ' . penduduk($pemohon)['tanggal-lahir']; ?></td>
    </tr>
    <tr height="25px">
      <td>Jenis Kelamin</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['jenis-kelamin']; ?></td>
    </tr>
    <tr height="25px">
      <td>Pekerjaan</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['pekerjaan']; ?></td>
    </tr>
    <tr height="25px">
      <td>Agama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['agama']; ?></td>
    </tr>
    <tr height="25px">
      <td>Alamat</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['alamat']; ?></td>
    </tr>
  </table>
  <p style="text-align:justify; margin-top:10px; margin-bottom:10px">Yang bersangkutan tersebut diatas
    dinyatakan benar-benar : </p>
  <ol>
    <li>Berkelakuan Baik;</li>
    <li>Tidak pernah terlibat pada suatu gerakan yang dilarang di NKRI, seperti G/30.S/ PKI dan sejenisnya.</li>
  </ol>
  <p style="text-align:justify; margin-top:20px; margin-bottom:10px">Demikian Surat Keterangan ini di berikan kepada
    yang bersangkutan untuk digunakan seperlunya.</p>
  <table style="margin-left:285px; margin-top:50px">
    <tr>
      <td width="120px">Dikeluarkan</td>
      <td width="25px" class="text-center">:</td>
      <td>Di Desa Tolotio</td>
    </tr>
    <tr style="border-bottom: 1px solid ;">
      <td>Pada Tanggal</td>
      <td class="text-center">:</td>
      <td><?= tgl_indo($tgl_cetak); ?></td>
    </tr>
    <tr>
      <td colspan="3" style="padding-top: 25px;" class="text-center">KEPALA DESA TOLOTIO</td>
    </tr>
    <tr height="80px"></tr>
    <tr>
      <td colspan="3" style="padding-top: 25px;" class="text-center"><b><u><?= $kades; ?></u></b></td>
    </tr>
  </table>
</section>
<?php
}
?>