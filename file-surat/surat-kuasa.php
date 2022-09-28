<?php
function surat_kuasa($pemohon, $pemohon2, $kades, $tgl_cetak, $alasan)
{
?>
<section class="sheet padding-20mm">
  <p class="text-center"><u><b>SURAT KUASA</b></u></p>
  <p style="margin-top:15px">Saya yang bertanda tangan dibawah ini :</p>
  <table style="margin-left:45px">
    <tr height="25px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= penduduk($pemohon)['nama']; ?></b></td>
    </tr>
    <tr height="25px">
      <td>Tempat / Tanggal Lahir</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon)['tempat-lahir'] . ' / ' . penduduk($pemohon)['tanggal-lahir']; ?></td>
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
      <td>NIK</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $pemohon; ?></td>
    </tr>
    <tr height="25px">
      <td colspan="3">Dalam hal ini disebut Pihak Pertama ( I )</td>
    </tr>
    <tr height="25px">
      <td>Nama</td>
      <td width="10px" class="text-center">:</td>
      <td><b><?= penduduk($pemohon2)['nama']; ?></b></td>
    </tr>
    <tr height="25px">
      <td>Tempat / Tanggal Lahir</td>
      <td width="10px" class="text-center">:</td>
      <td><?= penduduk($pemohon2)['tempat-lahir'] . ' / ' . penduduk($pemohon2)['tanggal-lahir']; ?></td>
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
      <td>NIK</td>
      <td width="10px" class="text-center">:</td>
      <td><?= $pemohon2; ?></td>
    </tr>
    <tr height="25px">
      <td colspan="3">Dalam hal ini disebut Pihak Kedua ( II )</td>
    </tr>
  </table>
  <p style="text-align:justify; text-indent:40px; margin-top:10px; margin-bottom:10px">Dengan ini Pihak Pertama ( I )
    memberikan kuasa kepada Pihak Kedua ( II ) untuk <?= $alasan ?>.</p>
  <table>
    <tr>
      <td width="321px"></td>
      <td class="text-center">Bonepantai, <?= tgl_indo($tgl_cetak); ?></td>
    </tr>
    <tr>
      <td class="text-center">Penerima Kuasa</td>
      <td class="text-center">Pemberi Kuasa</td>
    </tr>
    <tr height="80px"></tr>
    <tr>
      <td class="text-center" style="font-weight:bold; text-decoration:underline"><?= penduduk($pemohon2)['nama']; ?>
      </td>
      <td class="text-center" style="font-weight:bold; text-decoration:underline"><?= penduduk($pemohon)['nama']; ?>
      </td>
    </tr>
  </table>
  <p class="text-center" style="margin-top:35px">Mengetahui<br>Kepala Desa</p>
  <p class="text-center" style="margin-top:80px; font-weight:bold; text-decoration:underline"><?= $kades ?></p>
</section>
<?php
}
?>