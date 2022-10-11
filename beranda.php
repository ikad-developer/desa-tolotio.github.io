<?php
require 'config.php';
setcookie('halaman', 'beranda.php');
setcookie('menu', 'parent-beranda');
?>
<div class="row">

  <div class="col-3">
    <div class="card">
      <h5 class="card-header">Luas Wilayah</h5>
      <div class="card-body panel-info">
        <center><img src="images/peta.png" alt="" height="145px" class="img-fluid"></center>
        <center>
          <h3>3.500 m<sup>2</sup></h3>
        </center>
      </div>
    </div>
  </div>

  <div class="col-3">
    <div class="card">
      <h5 class="card-header">Jumlah Dusun</h5>
      <div class="card-body panel-info">
        <center><img src="images/dusun.png" alt="" class="img-fluid">
          <h3>4 Dusun</h3>
        </center>
      </div>
    </div>
  </div>
  <?php
  $penduduk = query("SELECT * FROM `penduduk` WHERE catatan = 'asli' AND keterangan = 'Hidup' ")
  ?>
  <div class="col-3">
    <div class="card">
      <h5 class="card-header">Jumlah Penduduk</h5>
      <div class="card-body panel-info">
        <center><img src="images/penduduk2.png" alt="" class="img-fluid">
          <h3><?= mysqli_num_rows($penduduk); ?> Jiwa</h3>
        </center>
      </div>
    </div>
  </div>
  <?php
  $pengelolah = query("SELECT * FROM `organisasi` ");
  ?>
  <div class="col-3">
    <div class="card">
      <h5 class="card-header">Pengelolah Desa</h5>
      <div class="card-body panel-info" style="padding-top: 8px;">
        <img src="images/pengelolah-desa.png" alt="" class="img-fluid">
        <center>
          <h3><?= mysqli_num_rows($pengelolah); ?> Orang</h3>
        </center>
      </div>
    </div>
  </div>

</div>

<div class="row">

  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="sejarah">
      <h2>Tentang Tolotio</h2>
      <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maxime aliquam, qui
        fugit commodi, quisquam dolore reprehenderit veniam officiis eaque quae vero. Eaque eos pariatur deleniti!
        Exercitationem omnis sint possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam provident
        quibusdam aut, sit deleniti fugit ad praesentium beatae, voluptates libero alias? Culpa consequatur vel sed,
        doloribus iste dignissimos odit est? Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorem
        quaerat, fugit voluptate maxime accusamus voluptatem perferendis expedita repellat assumenda dignissimos, ipsum
        earum ut dolor, aliquam laudantium quisquam odit cupiditate. Lorem, ipsum dolor sit amet consectetur adipisicing
        elit. Quaerat nam explicabo maiores deleniti est voluptatibus impedit, odio reprehenderit quos ullam quam
        necessitatibus velit quibusdam veniam ratione tenetur voluptate molestias optio! Lorem ipsum dolor, sit amet
        consectetur adipisicing elit. Provident magni hic in! Nostrum aliquid doloremque dignissimos iure cum voluptas
        minus reiciendis officia quo nulla quas, quaerat ea, commodi quam incidunt? Lorem ipsum dolor sit amet
        consectetur, adipisicing elit. Ullam eos autem doloribus obcaecati nulla non amet quidem ipsam, nisi laboriosam
        odit, libero incidunt maxime perferendis saepe, esse optio quos? Enim. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Eligendi dolor suscipit aliquid nobis, voluptatem eum inventore necessitatibus rem expedita ex
        natus provident cum totam praesentium aspernatur obcaecati cupiditate maxime corrupti. </p>
    </div>
  </div>

</div>