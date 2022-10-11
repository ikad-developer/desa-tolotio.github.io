<?php
require 'functions.php';
$_SESSION['menu'] = 'organisasi';
?>
<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab"
      aria-controls="home" aria-selected="true">Informasi Pribadi</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab"
      aria-controls="contact" aria-selected="false">Organisasi Desa</button>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab"
      aria-controls="profile" aria-selected="false">Pengelolah Aplikasi</button>
  </li> -->
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
</div>

<script>
$(document).ready(function() {
  $('#home').load('organisasi/informasi-pribadi.php');
  $('#contact').load('organisasi/organisasi-desa.php');
  $('#contact-tab').click(function() {
    $('#contact').load('organisasi/organisasi-desa.php');
  })
})
</script>