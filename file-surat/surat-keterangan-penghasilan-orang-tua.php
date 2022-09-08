<?php
function keterangan_miskin($no_surat, $kades, $nama, $jk, $ttl, $umur, $pekerjaan, $alamat, $tgl_cetak)
{
?>
  <section class="sheet padding-20mm">
    <?php require 'cop-surat.php'; ?>
    <p class="text-center"><u><b>SURAT KETERANGAN PENGHASILAN ORANG TUA</b></u></p>
    <p class="text-center">Nomor : <?= $no_surat; ?></p>
    <p style="margin-top:40px">Yang bertanda tangan dibawah ini Kepala Desa Tolotio Kecamatan Bonepantai Kabupaten Bone Bolango menerangkan Bahwa :</p>
    <table style="margin-left:45px">
      <tr height="35px">
        <td>Nama</td>
        <td width="10px" class="text-center">:</td>
        <td><?= $kades; ?></td>
      </tr>
      <tr height="35px">
        <td>T T L</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Jenis Kelamin</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Agama</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Pekerjaan</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Status Perkawinan</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Alamat</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td colspan="3">Adalah benar orang tua dari,</td>
      </tr>
      <tr height="35px">
        <td>Nama</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>T T L</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Jenis Kelamin</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Agama</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Pekerjaan</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
      <tr height="35px">
        <td>Alamat</td>
        <td width="10px" class="text-center">:</td>
        <td>Kepala Desa Pinomontiga</td>
      </tr>
    </table>
    <p style="text-align:justify; text-indent:40px; line-height:28px">Dengan ini menerangkan bahwa yang bersangkutan berpenghasilan rendah/minim berkisar kurang lebih Rp. 500.000,-/bulan.</p>
    <p style="text-align:justify; line-height:28px">Surat keterangan ini diberikan Kepada saudara CICI ARWANDA MALATIA Sebagai Persyaratan mendaftar Kuliah di Universitas Bina Taruna.</p>
    <p style="text-align:justify; line-height:28px">Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
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