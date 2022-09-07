<?php
function keterangan_miskin($no_surat,$kades,$nama,$jk,$ttl,$umur,$pekerjaan,$alamat,$tgl_cetak){
?>
<section class="sheet padding-20mm">
<?php require 'cop-surat.php'; ?>
<p class="text-center"><u><b>SURAT KETERANGAN KURANG MAMPU</b></u></p>
<p class="text-center">Nomor : <?= $no_surat; ?></p>
<p style="margin-top:40px">Yang bertanda tangan dibawah ini :</p>
<table style="margin-left:45px">
  <tr height="35px">
    <td>Nama</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $kades; ?></td>
  </tr>
  <tr height="35px"> 
    <td>Jabatan</td>
    <td width="10px" class="text-center">:</td>
    <td>Kepala Desa Pinomontiga</td>
  </tr>
</table>
<p style="margin-top:20px">Menerangkan kepada :</p>
<table style="margin-left:45px">
  <tr height="25px">
    <td>Nama</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $nama; ?></td>
  </tr>
  <tr height="25px">
    <td>Jenis Kelamin</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $jk; ?></td>
  </tr>
  <tr height="25px"> 
    <td>Tempat tanggal lahir</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $ttl; ?></td>
  </tr>
  <tr height="25px"> 
    <td>Umur</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $umur; ?></td>
  </tr>
  <tr height="25px"> 
    <td>Pekerjaan</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $pekerjaan; ?></td>
  </tr>
  <tr height="25px"> 
    <td>Alamat</td>
    <td width="10px" class="text-center">:</td>
    <td><?= $alamat; ?></td>
  </tr>
</table>
<p style="text-align:justify; text-indent:40px; line-height:28px">Bahwa yang bersangkutan diatas benar - benar penduduk Desa Pinomontiga, Kecamatan Bulawa, Kabupaten Bone Bolango, dan termasuk masyarakat kurang mampu / tidak mampu</p>
<p style="text-align:justify; text-indent:40px; line-height:28px">Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk digunakan seperlunya</p>
<table>
  <tr>
    <td width="290px"></td>
    <td class="text-center">Gorontalo, <?= $tgl_cetak; ?></td>
  </tr>
  <tr>
    <td width="290px"></td>
    <td class="text-center">Kepala Desa Pinomontiga</td>
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