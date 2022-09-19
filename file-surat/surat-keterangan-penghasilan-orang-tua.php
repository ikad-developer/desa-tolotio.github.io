<?php
function keterangan_penghasilan_orang_tua($no_surat, $pemohon, $ortu, $kades,  $tgl_cetak, $penghasilan, $alasan)
{
?>
  <section class="sheet padding-20mm">
    <?php require 'cop-surat.php'; ?>
    <p class="text-center"><u><b>SURAT KETERANGAN PENGHASILAN ORANG TUA</b></u></p>
    <p class="text-center" style="margin-top:10px; margin-bottom:10px">Nomor : <?= $no_surat; ?></p>
    <p style="margin-top:15px; text-indent:40px">Yang bertanda tangan dibawah ini Kepala Desa Tolotio Kecamatan Bonepantai Kabupaten Bone Bolango menerangkan Bahwa :</p>
    <table style="margin-left:45px">
      <tr height="25px">
        <td>Nama</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['nama']; ?></td>
      </tr>
      <tr height="25px">
        <td>T T L</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['tempat-lahir'] . ', ' . penduduk($ortu)['tanggal-lahir']; ?></td>
      </tr>
      <tr height="25px">
        <td>Jenis Kelamin</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['jenis-kelamin']; ?></td>
      </tr>
      <tr height="25px">
        <td>Agama</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['agama']; ?></td>
      </tr>
      <tr height="25px">
        <td>Pekerjaan</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['pekerjaan']; ?></td>
      </tr>
      <tr height="25px">
        <td>Status Perkawinan</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['status']; ?></td>
      </tr>
      <tr height="25px">
        <td>Alamat</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($ortu)['alamat']; ?></td>
      </tr>
      <tr height="25px">
        <td colspan="3">Adalah benar orang tua dari,</td>
      </tr>
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
    <p style="text-align:justify; text-indent:40px; margin-top:10px; margin-bottom:10px">Dengan ini menerangkan bahwa yang bersangkutan berpenghasilan rendah/minim berkisar kurang lebih <?= $penghasilan ?>,-/bulan.</p>
    <p style="text-align:justify; margin-top:10px; margin-bottom:10px">Surat keterangan ini diberikan Kepada saudara <b><?= strtoupper(penduduk($pemohon)['nama']); ?></b> <?= $alasan; ?></p>
    <p style="text-align:justify; margin-top:10px; margin-bottom:10px">Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.
    </p>
    <table>
      <tr>
        <td width="290px"></td>
        <td class="text-center">Gorontalo, <?= tgl_indo($tgl_cetak); ?></td>
      </tr>
      <tr>
        <td width="290px"></td>
        <td class="text-center">Kepala Desa Tolotio</td>
      </tr>
      <tr height="80px"></tr>
      <tr>
        <td></td>
        <td class="text-center"><?= $kades; ?></td>
      </tr>
    </table>
  </section>
<?php
}
?>