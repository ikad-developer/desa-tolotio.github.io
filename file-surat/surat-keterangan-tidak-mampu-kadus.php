<?php
function keterangan_tidak_mampu_kadus($no_surat, $kadus, $pemohon, $tgl_cetak, $dusun)
{
?>
<section class="sheet padding-20mm">
  <?php require 'cop-surat.php'; ?>
  <p class="text-center"><u><b>SURAT KETERANGAN</b></u></p>
  <p class="text-center">Nomor : <?= $no_surat; ?></p>
  <p style="margin-top:40px">Yang bertanda tangan dibawah ini Kepala Dusun <?= $dusun ?> menerangkan kepada :</p>
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
  <p style="text-align:justify; text-indent:40px; line-height:28px">Disampaikan Kepada Sekretaris Desa Tolotio bahwa
    masyarakat tersebut adalah benar-benar masyarakat kurang mampu dan diharapkan kepada bapak agar kiranya dapat
    dibuatkan <b><u><i>SURAT KETERANGAN TIDAK MAMPU </i></u></b></p>
  <p>Demikian surat Pengantar ini disampaikan agar kiranya dapat di realisasikan.</p>
  <table style="margin-left:285px; margin-top:50px">
    <tr>
      <td class="text-center">Tolotio, <?= tgl_indo($tgl_cetak); ?></td>
    </tr>
    <tr style="border-bottom: 1px solid ;">
      <td class="text-center"><b>KEPALA DUSUN <?= strtoupper($dusun); ?></b></td>
    </tr>
    <tr height="80px"></tr>
    <tr>
      <td colspan="3" style="padding-top: 25px;" class="text-center"><b><u><?= $kadus; ?></u></b></td>
    </tr>
  </table>
</section>
<?php
}
?>