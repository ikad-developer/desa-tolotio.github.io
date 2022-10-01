<?php
function surat_jual_beli_tanah($no_surat, $pemohon, $pemohon2, $kades, $tgl_cetak, $lokasi, $ukuran, $harga, $utara, $selatan, $timur, $barat, $saksi1, $saksi2)
{
?>
<style>
table td {
  text-align: justify;
  vertical-align: top;
}
</style>
<section class="sheet padding-20mm">
  <?php require 'cop-surat.php' ?>
  <p class="text-center" style="margin-bottom: 0px;"><u><b>SURAT KETERANGAN JUAL BELI</b></u></p>
  <p class="text-center" style="margin-bottom: 0; margin-top:0;">Nomor : <?= $no_surat; ?></p>
  <p style="margin-top:15px; margin-bottom:5px">Yang bertanda tangan dibawah ini :</p>
  <table class="gantung" style="margin-left:25px">
    <tr height="25px">
      <td>Nama Lengkap</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= penduduk($pemohon)['nama']; ?></b></td>
    </tr>
    <tr height="25px">
      <td>Umur</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['umur']; ?></td>
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
    <tr height="25px">
      <td colspan="3"><i><b>Di sebut Pihak I ( Kesatu )</b></i></td>
    </tr>
    <tr height="25px">
      <td colspan="3">Selanjutnya,</td>
    </tr>
    <tr height="25px">
      <td>Nama Lengkap</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= penduduk($pemohon2)['nama']; ?></b></td>
    </tr>
    <tr height="25px">
      <td>Umur</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon2)['umur']; ?></td>
    </tr>
    <tr height="25px">
      <td>Agama</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon2)['agama']; ?></td>
    </tr>
    <tr height="25px">
      <td>Pekerjaan</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon2)['pekerjaan']; ?></td>
    </tr>
    <tr height="25px">
      <td>Alamat</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon2)['alamat']; ?></td>
    </tr>
    <tr height="25px">
      <td colspan="3">Dalam hal ini disebut Pihak Kedua ( II )</td>
    </tr>
  </table>
  <p style="text-align:justify; text-indent:40px; margin-top:10px; margin-bottom:10px">Dengan ini saya <b>Pihak
      KESATU</b> Sebagai Pemilik dari sebidang tanah dan selanjutnya tanah tersebut telah saya jual kepada <b>pihak
      KEDUA</b>
    dengan kesepakatan dan ketentuan sebagai berikut :</p>
  <table style="margin-left: 30px;">
    <tr>
      <td>Lokasi</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $lokasi; ?></td>
    </tr>
    <tr>
      <td style="vertical-align: middle;">Ukuran</td>
      <td style="vertical-align: middle;" width="10px" class="text-center">:</td>
      <td style="vertical-align: middle;"><?= $ukuran; ?> M<sup>2</sup></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $harga; ?></td>
    </tr>
  </table>
  <p style="margin-top: 8px; margin-bottom:8px;">Dengan Batas-Batas</p>
  <table style="margin-left: 30px;">
    <tr>
      <td><i class="fa fa-circle" aria-hidden="true"></i> Sebelah Utara</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $utara; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-circle" aria-hidden="true"></i> Sebelah Selatan</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $selatan; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-circle" aria-hidden="true"></i> Sebelah Timur</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $timur; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-circle" aria-hidden="true"></i> Sebelah Barat</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $barat; ?></td>
    </tr>
  </table>
  <p style="text-align:justify; text-indent:40px; margin-top:10px; margin-bottom:10px">Demikian surat keterangan ini
    kami buat dengan benar,serta di tanda tangani oleh kami kedua belah pihak dihapan saksi dan Pemerintah Desa
    Tolotio,Dan apabila di kemudian hari ada kekeliruan maupun gugatan/tuntutan dari pihak-pihak lain saya akan
    pertanggung jawabkan sesuai prosedur hukum yang berlaku.</p>
</section>
<section class="sheet padding-20mm">
  <table style="margin-left: 350px;">
    <tr>
      <td>Dikeluarkan</td>
      <td width="25px" class="text-center">:</td>
      <td>Di Desa Tolotio,</td>
    </tr>
    <tr>
      <td>Pada Tanggal</td>
      <td width="25px" class="text-center">:</td>
      <td><?= tgl_indo($tgl_cetak); ?></td>
    </tr>
  </table>
  <table style="margin-top: 30px;">
    <tr>
      <td width="321px" class="text-center"><b>Pihak II KEDUA</b></td>
      <td class="text-center"><b>Pihak I PERTAMA</b></td>
    </tr>
    <tr height="80px"></tr>
    <tr>
      <td class="text-center" style="font-weight:bold;">(<?= penduduk($pemohon2)['nama']; ?>)
      </td>
      <td class="text-center" style="font-weight:bold;">(<?= penduduk($pemohon)['nama']; ?>)
      </td>
    </tr>
  </table>
  <p>Saksi-Saksi:</p>
  <table style="margin-left: 35px;">
    <tr height="50px">
      <td style="font-weight:bold; min-width:321px">1. <?= $saksi1; ?></td>
      <td style="font-weight:bold">1.</td>
    </tr>
    <tr height="50px">
      <td style="font-weight:bold">2. <?= $saksi2; ?></td>
      <td style="font-weight:bold">2.</td>
    </tr>
  </table>
  <p class="text-center" style="margin-top:35px">Mengetahui<br>KEPALA DESA TOLOTIO</p>
  <p class="text-center" style="margin-top:80px; font-weight:bold; text-decoration:underline"><?= $kades ?></p>
</section>
<?php
}
?>