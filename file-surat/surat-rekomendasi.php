<?php
function rekomendasi($no_surat, $kades, $pemohon, $tgl_cetak)
{
?>
<section class="sheet padding-20mm">
  <?php require 'cop-surat.php'; ?>
  <p class="text-center" style="margin-bottom: 8px;"><u><b>REKOMENDASI</b></u></p>
  <p class="text-center" style="margin:8px">Nomor : <?= $no_surat; ?></p>
  <p style="margin-top:25px">Yang bertandatangan dibawah ini :</p>
  <table style="margin-left:45px">
    <tr height="15px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= $kades ?></b></td>
    </tr>
    <tr height="15px">
      <td>Umur</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= $kades ?></b></td>
    </tr>
    <tr height="15px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['nama']; ?></td>
    </tr>
    <tr height="15px">
      <td>NIK</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $pemohon ?></td>
    </tr>
    <tr height="15px">
      <td>Tempat tanggal lahir</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['tempat-lahir'] . ', ' . penduduk($pemohon)['tanggal-lahir']; ?></td>
    </tr>
    <tr height="15px">
      <td>Jenis Kelamin</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['jenis-kelamin']; ?></td>
    </tr>
    <tr height="15px">
      <td>Pekerjaan</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['pekerjaan']; ?></td>
    </tr>
    <tr height="15px">
      <td>Agama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['agama']; ?></td>
    </tr>
    <tr height="15px">
      <td>Alamat</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['alamat']; ?></td>
    </tr>
  </table>
  <p style="text-align:justify; text-indent:40px; line-height:28px">Bahwa yang bersangkutan benar-benar tinggal dan
    berdomisili di Desa Tolotio Kecamatan Bonepantai Kabupaten Bone Bolango Provinsi Gorontalo</p>
  <p style="text-align:justify; text-indent:40px; line-height:28px">Demikian surat keterangan ini diberikan kepada yang
    bersangkutan untuk digunakan seperlunya</p>
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