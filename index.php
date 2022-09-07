<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link href='css/mapbox-gl.css' rel='stylesheet' />
    <link href='css/css/font-awesome.css' rel='stylesheet'>


    <title>Desa Pinomontiga</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row-fluid pt-3">

      <!-- header -->
        <img src="images/beranda.jpg" alt="" class="img-fluid" width="100%" height="10%">

        <!-- navigasi -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
          <a class="navbar-brand" href="#" id="login">Desa Pinomontiga</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item parent-beranda">
                <a class="nav-link" href="#" data-url="beranda.php" data-parent="parent-beranda">Beranda</span></a>
              </li>
              <li class="nav-item parent-struktur-organisasi">
                <a class="nav-link" href="#" data-url="struktur-organisasi.php" data-parent="parent-struktur-organisasi">Struktur Organisasi</a>
              </li>
              <li class="nav-item parent-dana-desa">
                <a class="nav-link" href="#" data-url="dana-desa.php" data-parent="parent-dana-desa">Dana Desa</a>
              </li>
              <li class="nav-item parent-kegiatan">
                <a class="nav-link" href="#" data-url="kegiatan.php" data-parent="parent-kegiatan">Kegiatan</a>
              </li>
              <li class="nav-item parent-bumdes">
                <a class="nav-link" href="#" data-url="bumdes.php" data-parent="parent-bumdes">BUMDES</a>
              </li>
            </ul>
            
          </div>
        </nav>

        <!-- content -->
        <div class="card">
          <div class="card-body" id="content">
             
          </div>
        </div>

        <!-- footer -->
        <div class="card text-white bg-info mb-3">
          <div class="card-body" style="padding:10px">
            <p class="card-text text-center">Pinomontiga <?= date('Y'); ?></p>
          </div>
        </div>

      </div>
    </div>

<div class="modal fade" id="modal-login" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="staticBackdropLabel">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
          </div>
          <input type="number" class="form-control form-login" id="username" placeholder="Username">
        </div>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
          </div>
          <input type="password" class="form-control form-login" id="password" placeholder="Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary aksi-login" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info aksi-login login">Login</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="js/chart.js"></script>
    <script src="js/f83cbade83.js"></script>
    <script src="js/jquery.easy-ticker.js"></script>
    <script src="js/sweetalert2@11.js"></script>

    <script>
      $(document).ready(function(){

        $('.form-control').attr('autocomplete','off');

        $('.nav-item').removeClass('active');

        $('#login').click(function(e){
          e.preventDefault();
          $('#modal-login').modal('show');
        })

        $('.login').click(function(){
          var user = $('#username').val();
          var pass = $('#password').val();
          
          $.ajax({
            beforeSend : function(){ $('.form-login').attr('disabled','disabled'); $('.aksi-login').attr('disabled','disabled'); $('.login').html('<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i> Login...'); },
            url : 'proses.php',
            type : 'post',
            data : 'login=true&username=' + user + '&password=' + pass,
            success : function(respon){
              var pecah = respon.split('||');
              Swal.fire(
                pecah[0],
                pecah[1],
                pecah[2]
              )
              $('.form-login').removeAttr('disabled');
              $('.aksi-login').removeAttr('disabled');
              $('.login').html('Login');
              if(pecah[2] == 'success'){
                setTimeout(() => {
                  window.location.replace('admin/');
                }, 1500);
              }
            }
          })
        })

        var riwayat = getCookie('halaman');
        if(riwayat == ''){
          loadContent('beranda.php');
        }else{
          loadContent(riwayat);
        }

        var menu = getCookie('menu');
        if(menu == ''){
          $('.parent-beranda').addClass('active');
        }else{
          $('.'+menu).addClass('active');
        }

        $('.nav-link').click(function(){
          var url = $(this).attr('data-url');
          var parent = $(this).attr('data-parent');
          $('.nav-item').removeClass('active');
          $('.'+parent).addClass('active');
          loadContent(url);
        })

        function loadContent(url){
          $.ajax({
            beforeSend : loadingHalaman(),
            type : 'post',
            url : url,
            success : function(respon){
              $('#content').html(respon);
            }
          })
        }

        function loadingHalaman(){
          $('#content').html("");
          $('#content').append('<center><img src="images/loading.gif" alt="" class="img-fluid"></center>');
        }


        function getCookie(cname){
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for(var i=0; i<ca.length; i++) 
            {
            var c = ca[i].trim();
            if (c.indexOf(name)==0) return c.substring(name.length,c.length);
            }
          return "";
        }


      })
    </script>

    
  </body>
</html>