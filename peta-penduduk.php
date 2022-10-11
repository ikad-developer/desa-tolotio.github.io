<?php
require 'config.php';
setcookie('halaman', 'peta-penduduk.php');
setcookie('menu', 'parent-peta-penduduk');
function jk_penduduk($jk)
{
  return mysqli_num_rows(query("SELECT * FROM `penduduk` WHERE jenis_kelamin = '$jk' AND catatan = 'asli' AND keterangan = 'Hidup' "));
}

function status_penduduk($status)
{
  return mysqli_num_rows(query("SELECT * FROM `penduduk` WHERE `status` = '$status' AND catatan = 'asli' AND keterangan = 'Hidup' "));
}

function denah_dusun($dusun)
{
  return mysqli_num_rows(query("SELECT * FROM `penduduk` WHERE `dusun` = '$dusun' AND catatan = 'asli' AND keterangan = 'Hidup' "));
}
?>
<div class="row">
  <div class="col-sm-12 col-lg-6">
    <div>
      <h4>Data Penduduk Berdasarkan Jenis Kelamin</h4>
      <canvas id="myChart" height="200px"></canvas>
    </div>
    <div class="mt-5">
      <h4>Data Penduduk Berdasarkan Dusun</h4>
      <canvas id="dusun" height="200px"></canvas>
    </div>
    <!-- <div class="card">
      <div class="card-header bg-info text-center text-white">
        Data Penduduk Berdasarkan Jenis Kelamin
      </div>
      <div class="card-body">
        <canvas id="myChart" height="200px"></canvas>
      </div>
    </div> -->
  </div>
  <div class="col-sm-12 col-lg-6">
    <h4>Data Penduduk Berdasarkan Status Perkawinan</h4>
    <canvas id="data-perkawinan" height="100px"></canvas>
    <!-- <div class="card">
      <div class="card-header bg-info text-center text-white">
        Data Penduduk Berdasarkan Status Perkawinan
      </div>
      <div class="card-body">
        <canvas id="data-perkawinan" height="100px"></canvas>
      </div>
    </div> -->
  </div>
</div>
<script>
$(document).ready(function() {

  // Data Penduduk berdasarkan jenis kelamin
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Perempuan', 'Laki-laki'],
      datasets: [{
        label: 'Total Data',
        data: [<?= jk_penduduk('Perempuan') ?>, <?= jk_penduduk('Laki-laki') ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // status perkawinan
  var perkawinan = $('#data-perkawinan');
  var data = new Chart(perkawinan, {
    type: 'pie',
    data: {
      labels: [
        'Belum Menikah',
        'Menikah',
        'Cerai Hidup',
        'Cerai Mati'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [<?= status_penduduk('Belum Kawin') ?>, <?= status_penduduk('Kawin') ?>,
          <?= status_penduduk('Cerai Hidup') ?>, <?= status_penduduk('Cerai Mati') ?>
        ],
        backgroundColor: [
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(255, 99, 132)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 5
      }]
    }
  })


  // status dusun
  var dusun = $('#dusun');
  var data = new Chart(dusun, {
    type: 'doughnut',
    data: {
      labels: [
        'Tamendao',
        'Tangalo',
        'Liawao',
        'Tolite',
        'Tidak Terdefinisi'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [<?= denah_dusun('Tamendao') ?>, <?= denah_dusun('Tangalo') ?>, <?= denah_dusun('Liawao') ?>,
          <?= denah_dusun('Tolite') ?>, <?= denah_dusun('') ?>
        ],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(25, 99, 132)',
          'rgb(201, 203, 207)'
        ],
        hoverOffset: 4
      }]
    }
  })

})
</script>