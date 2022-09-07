<?php
require 'config.php';
setcookie('halaman','detail-kegiatan.php');
setcookie('menu','parent-kegiatan');
if(isset($_POST['id'])){
  $gambar = json_decode(file_get_contents("https://wallpaper-api-zhirrr.vercel.app/api/islamic"), true);
?>
<div class="row">

  <div class="col-3" style="max-height:620px; overflow:auto">
<?php
for($i=0; $i < 15; $i++){
?>
    <div class="card mb-3">
    <img src="<?= $gambar['results'][$i]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
<?php } ?>
  </div>

  <div class="col-9" style="max-height:620px; overflow:auto">
    <div class="row">

<?php
$detail = json_decode(file_get_contents("https://wallpaper-api-zhirrr.vercel.app/api/cyberspace"), true);
for($u=0; $u<count($detail['results']); $u++){
?>
      <div class="col-4 mb-2">
        <img src="<?= $detail['results'][$u]; ?>" class="img-thumbnail" alt="...">
      </div>
<?php } ?>

    </div>
  </div>

</div>
<?php
}
?>