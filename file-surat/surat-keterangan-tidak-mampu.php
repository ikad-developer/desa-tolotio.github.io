<?php
function keterangan_tidak_mampu($no_surat, $kades, $pemohon, $tgl_cetak)
{
?>
<section class="sheet padding-20mm">
  <?php require 'cop-surat.php'; ?>
  <p class="text-center"><u><b>SURAT KETERANGAN TIDAK MAMPU (SKTM)</b></u></p>
  <p class="text-center">Nomor : <?= $no_surat; ?></p>
  <p style="margin-top:40px">Yang bertanda tangan dibawah ini Kepala Desa Tolotio Kecamatan Bonepantai Kabupaten Bone
    Bolango menerangkan kepada :</p>
  <table style="margin-left:45px">
    <tr height="25px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['nama']; ?></td>
    </tr>
    <tr height="25px">
      <td>T T L</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['tempat-lahir'] . ', ' . penduduk($pemohon)['tanggal-lahir']; ?></td>
    </tr>
    <tr height="25px">
      <td>Jenis Kelamin</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['jenis-kelamin']; ?></td>
    </tr>
    <tr height="25px">
      <td>Agama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['agama']; ?></td>
    </tr>
    <tr height="25px">
      <td>Pekerjaan</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['pekerjaan']; ?></td>
    </tr>
    <tr height="25px">
      <td>Alamat</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['alamat']; ?></td>
    </tr>
  </table>
  <p style="text-align:justify; text-indent:40px; line-height:28px">Bahwa yang bersangkutan adalah Penduduk Desa Tolotio
    Kecamatan Bonepantai Kabupaten Bone Bolango dan sesuai Pendataan benar-benar dari Keluarga yang Kurang Mampu.</p>
  <table style="margin-left:285px; margin-top:50px">
    <tr>
      <td width="140px">DIKELUARKAN DI</td>
      <td width="25px" class="text-center">:</td>
      <td>DESA TOLOTIO</td>
    </tr>
    <tr style="border-bottom: 1px solid ;">
      <td>PADA TANGGAL</td>
      <td class="text-center">:</td>
      <td><?= strtoupper(tgl_indo($tgl_cetak)); ?></td>
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