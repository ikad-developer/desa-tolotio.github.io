<?php
setcookie('halaman','kegiatan.php');
setcookie('menu','parent-kegiatan');
$gambar = json_decode(file_get_contents("https://wallpaper-api-zhirrr.vercel.app/api/cyberspace"), true);
?>
<div class="row">

<?php
for($i=0; $i < 30; $i++){
?>
  <div class="col-3 mb-3">
    <div class="card">
      <img src="<?= $gambar['results'][$i]; ?>" class="card-img-top" alt="..." style="max-height:165px; overflow:auto">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <a href="#" class="btn btn-primary detail" data-id="<?= $i; ?>"><i class="fa fa-camera" aria-hidden="true"></i> Lihat Album</a>
      </div>
    </div>
  </div>
<?php } ?>

</div>

<script>
  $(document).ready(function(){

    $('.detail').click(function(e){
      e.preventDefault();
      var url = "detail-kegiatan.php";
      var data = $(this).attr('data-id');
      loadContent(url,data);
    })

    function loadContent(url,data){
      $.ajax({
        beforeSend : loadingHalaman(),
        type : 'post',
        url : url,
        data : 'id='+data,
        success : function(respon){
          $('#content').html(respon);
        }
      })
    }

    function loadingHalaman(){
      $('#content').html("");
      $('#content').append('<center><img src="images/loading.gif" alt="" class="img-fluid"></center>');
    }

  })
</script>