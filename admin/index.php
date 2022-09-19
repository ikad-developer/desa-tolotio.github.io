<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin - Tolotio</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- Bootstrap CSS
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="shortcut icon" href="../images/logo pemerintah.png">
  <link rel="stylesheet" href="../css/style.css">
  <link href='../css/mapbox-gl.css' rel='stylesheet' />
  <link href='../css/css/font-awesome.css' rel='stylesheet'>
  <link href="../css/styles.css" rel="stylesheet" />
  <style>
    body {
      background: none;
    }

    .bg-primary {
      background-color: #1d1566 !important;
    }

    h2 {
      font-family: "times new roman";
      font-weight: bold;
    }

    .aktif {
      background-color: #0d6efd !important;
      font-weight: bold;
      font-size: 1rem !important;
    }
  </style>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="bg-primary" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom bg-primary text-light text-center">Desa Tolotio</div>
      <center><img src="../images/logo pemerintah.png" class="img-fluid mt-2" width="90px"></center>
      <hr style="color :#fff; height:2px">
      <div class="list-group list-group-flush">
        <a class="list-group-item bg-primary menu text-white bg-primary text-white list-group-item-action list-group-item-light p-3" data-url="beranda/index.php" id="beranda"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a>
        <a class="list-group-item bg-primary menu text-white list-group-item-action list-group-item-light p-3" href="#" id="data-penduduk" data-url="data-penduduk/index.php"><i class="fa fa-users" aria-hidden="true"></i> Data Penduduk</a>
        <a class="list-group-item bg-primary menu text-white list-group-item-action list-group-item-light p-3" href="#" id="surat" data-url="surat/index.php"><i class="fa fa-file" aria-hidden="true"></i> Surat</a>
        <a class="list-group-item bg-primary menu text-white list-group-item-action list-group-item-light p-3" href="#" id="anggaran" data-url="anggaran/index.php"><i class="fa fa-money" aria-hidden="true"></i> Anggaran</a>
        <a class="list-group-item bg-primary text-white list-group-item-action list-group-item-light p-3" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        <!-- <a class="list-group-item bg-primary text-white list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
      <a class="list-group-item bg-primary text-white list-group-item-action list-group-item-light p-3" href="#!">Events</a>
      <a class="list-group-item bg-primary text-white list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
      <a class="list-group-item bg-primary text-white list-group-item-action list-group-item-light p-3" href="#!">Status</a> -->
      </div>
    </div>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid p-0">
          <button class="btn btn-primary" id="sidebarToggle"><i class="fa fa-th-list" aria-hidden="true"></i> Menu</button>
          <label>Hi, <b><?= ucwords($_SESSION['nama']); ?></b></label>
        </div>
      </nav>
      <!-- Page content-->
      <div class="container-fluid" id="content"></div>

    </div>
    <script src="../js/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@master/dist/latest/bootstrap-autocomplete.min.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/f83cbade83.js"></script>
    <script src="../js/jquery.easy-ticker.js"></script>
    <script src="../js/sweetalert2@11.js"></script>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    <script>
      $(document).ready(function() {
        var menu = "<?= $_SESSION['menu']; ?>";
        if (menu == '') {
          menu = 'beranda';
          var url = $('#' + menu).attr('data-url');
          load_halaman(url, menu);
        } else {
          $('#' + menu).addClass('aktif');
          var url = $('#' + menu).attr('data-url');
          load_halaman(url, menu);
        }

        $('.form-control').attr('autocomplete', 'off');


        $('.menu').click(function() {
          $('.menu').removeClass('aktif');
          $(this).addClass('aktif');
          var url = $(this).attr('data-url');
          var id = $(this).attr('id');
          load_halaman(url, id);
        })

        function load_halaman(url, menu) {
          $.ajax({
            beforeSend: function() {
              $('#content').html('<center><img src="../images/loading.gif" alt="" width="150px" class="img-fluid mt-5"></center>')
            },
            url: url,
            success: function(respon) {
              $('.menu').removeClass('aktif');
              $('#content').html(respon);
              $('#' + menu).addClass('aktif');
            }
          })
        }
      })
    </script>
</body>

</html>