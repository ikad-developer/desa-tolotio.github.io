<?php
function keterangan_harga_tanah($no_surat, $kades, $pemohon, $tgl_cetak, $no_sertifikat, $luas_tanah, $lokasi, $harga)
{
?>
  <section class="sheet padding-20mm">
    <?php require 'cop-surat.php'; ?>
    <p class="text-center"><u><b>SURAT KETERANGAN HARGA TANAH</b></u></p>
    <p class="text-center">Nomor : <?= $no_surat; ?></p>
    <p style="margin-top:20px; line-height:23px">Yang bertanda tangan dibawah ini Kepala Desa Tolotio Kecamatan Bonepantai Kabupaten Bone Bolango menerangkan kepada :</p>
    <table style="margin-left:45px">
      <tr height="25px">
        <td>Nama</td>
        <td width="10px" class="text-center">:</td>
        <td><b><?= strtoupper(penduduk($pemohon)['nama']); ?></b></td>
      </tr>
      <tr height="25px">
        <td>NIK</td>
        <td width="10px" class="text-center">:</td>
        <td><?= $pemohon ?></td>
      </tr>
      <tr height="25px">
        <td>Tempat tanggal lahir</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($pemohon)['tempat-lahir'] . ', ' . penduduk($pemohon)['tanggal-lahir']; ?></td>
      </tr>
      <tr height="25px">
        <td>Jenis Kelamin</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($pemohon)['jenis-kelamin']; ?></td>
      </tr>
      <tr height="25px">
        <td>Status</td>
        <td width="10px" class="text-center">:</td>
        <td><?= penduduk($pemohon)['status']; ?></td>
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
    <p style="text-align:justify; text-indent:40px; line-height:23px; margin-bottom:8px">Adalah benar penduduk Desa Tolotio Kecamatan Bonepantai Kabupaten Bone Bolango, yang memiliki tanah yang berlokasi di <?= $lokasi; ?> & dengan bukti sertifikat tanah : Nomor <?= '<b>' . $no_sertifikat . '</b> Luas <b>' . $luas_tanah . '</b>'; ?> M²</p>
    <p style="margin-top:8px; margin-bottom:8px">Adapun taksiran harga pasar saat ini :</p>
    <p style="margin-top:8px; margin-bottom:8px; padding-left:165px">Tanah : <b><?= $harga; ?>/M²</b></p>
    <p style="text-align:justify; text-indent:40px; line-height:23px">Demikian Surat Keterangan ini di buat dengan benar untuk dipergunakan seperlunya.</p>
    <table>
      <tr style="font-weight:bold">
        <td width="250px"></td>
        <td width="150px">DIKELUARKAN DI</td>
        <td width="25px" class="text-center">:</td>
        <td>DESA TOLOTIO</td>
      </tr>
      <tr style="font-weight:bold">
        <td></td>
        <td>PADA TANGGAL</td>
        <td class="text-center">:</td>
        <td><?= strtoupper(tgl_indo($tgl_cetak)); ?></td>
      </tr>
      <tr height="20px"></tr>
      <tr>
        <td>PEMOHON</td>
        <td colspan="3" class="text-center">KEPALA DESA TOLOTIO</td>
      </tr>
      <tr height="80px"></tr>
      <tr>
        <td><b><u><?= strtoupper(penduduk($pemohon)['nama']) ?></u></b></td>
        <td colspan="3" class="text-center"><b><u><?= $kades; ?></u></b></td>
      </tr>
    </table>
  </section>
<?php
}
?>