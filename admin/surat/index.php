<?php
require 'functions.php';
$_SESSION['menu'] = 'surat';
?>

<ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab"
      aria-controls="home" aria-selected="true">Buat Surat</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#surat-keluar" type="button" role="tab"
      aria-controls="profile" aria-selected="false">Surat Keluar</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab"
      aria-controls="contact" aria-selected="false">Surat Masuk</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="dokumen-desa" data-toggle="tab" data-target="#data-dokumen-desa" type="button"
      role="tab" aria-controls="contact" aria-selected="false">Arsip Desa</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-lg-5">
        <div class="form-group">
          <select class="form-control" id="jenis-surat">
            <option>--Pilih Surat--</option>
            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
            <option value="Surat Keterangan Tidak Mampu Dari Kadus">Surat Keterangan Tidak Mampu Dari Kadus</option>
            <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
            <option value="Surat Keterangan Penghasilan Orang Tua">Surat Keterangan Penghasilan Orang Tua</option>
            <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
            <option value="Surat Kuasa">Surat Kuasa</option>
            <option value="Surat Keterangan Profil Kerja">Surat Keterangan Profil Kerja</option>
            <option value="Surat Keterangan Kelakuan Baik">Surat Keterangan Kelakuan Baik</option>
            <option value="Surat Keterangan Jual Beli Tanah">Surat Keterangan Jual Beli Tanah</option>
            <option value="Surat Rekomendasi">Surat Rekomendasi</option>
            <option value="Surat Keterangan Ahli Waris">Surat Keterangan Ahli Waris (*)</option>
            <option value="Surat Izin Keramaian Pesta">Surat Izin Keramaian Pesta (*)</option>
          </select>
        </div>
        <div id="komponen-surat"></div>
      </div>
      <div class="col-lg-7 mb-2" id="contoh-surat">

      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="surat-keluar" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row mt-2">
      <div class="col-auto">
        <button type="button" class="btn btn-primary" id="upload-surat-keluar">Tambah Surat Keluar</button>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <select class="form-control" id="jenis-surat-keluar">
          <option value="">--Tampilkan Semua Surat--</option>
          <?php
          $cek = query("SELECT * FROM `surat_keluar` GROUP BY tipe_surat ORDER BY tipe_surat ASC ");
          while ($data = mysqli_fetch_assoc($cek)) {
          ?>
          <option value="<?= $data['tipe_surat']; ?>"><?= ucwords($data['tipe_surat']); ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-2">
        <?php
        $isi = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        $label = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        $bln_skrang = date('m');
        $tahun_sekarang = date('Y');
        ?>
        <select class="form-control" id="bulan-surat">
          <?php
          for ($i = 0; $i < count($isi); $i++) {
            if ($isi[$i] == $bln_skrang) {
              $aktif = 'selected';
            } else {
              $aktif = '';
            }
          ?>
          <option value="<?= $isi[$i]; ?>" <?= $aktif; ?>><?= $label[$i]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2">
        <select class="form-control" id="tahun-surat">
          <?php
          for ($i = $tahun_sekarang; $i > $tahun_sekarang - 6; $i--) {
            if ($i == $tahun_sekarang) {
              $aktif = 'selected';
            } else {
              $aktif = '';
            }
          ?>
          <option value="<?= $i; ?>" <?= $aktif; ?>><?= $i; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div id="data-surat-keluar"></div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="row mt-2">
      <div class="col-auto">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-unggah-surat-masuk">Unggah
          Surat Masuk</button>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-2">
        <?php
        $isi = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        $label = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        $bln_skrang = date('m');
        $tahun_sekarang = date('Y');
        ?>
        <select class="form-control" id="bulan-surat-masuk">
          <?php
          for ($i = 0; $i < count($isi); $i++) {
            if ($isi[$i] == $bln_skrang) {
              $aktif = 'selected';
            } else {
              $aktif = '';
            }
          ?>
          <option value="<?= $isi[$i]; ?>" <?= $aktif; ?>><?= $label[$i]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2">
        <select class="form-control" id="tahun-surat-masuk">
          <?php
          for ($i = $tahun_sekarang; $i > $tahun_sekarang - 6; $i--) {
            if ($i == $tahun_sekarang) {
              $aktif = 'selected';
            } else {
              $aktif = '';
            }
          ?>
          <option value="<?= $i; ?>" <?= $aktif; ?>><?= $i; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div id="data-surat-masuk"></div>
  </div>
  <div class="tab-pane fade" id="data-dokumen-desa" role="tabpanel" aria-labelledby="contact-tab">
    <div class="row mt-2">
      <div class="col-auto">
        <button type="button" class="btn btn-primary" id="unggah-arsip-desa">Unggah File Baru</button>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="cari-arsip-desa" placeholder="Cari Dokumen...">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div id="data-arsip-desa" class="mt-2"></div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-unggah-surat-masuk" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Mengunggah Surat Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="nama-instansi">Instansi Pengirim</label>
          <input type="text" class="form-control" id="nama-instansi">
        </div>
        <div class="form-group">
          <label for="perihal">Perihal</label>
          <input type="text" class="form-control" id="perihal">
        </div>
        <div class="form-group">
          <label for="no-surat-masuk">Nomor Surat</label>
          <input type="text" class="form-control" id="no-surat-masuk">
        </div>
        <div class="form-group">
          <label for="tanggal-surat-masuk">Tanggal Masuk</label>
          <input type="date" class="form-control" id="tanggal-surat-masuk" value="<?= date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
          <label for="file-surat-masuk">File</label>
          <input type="file" class="form-control-file" id="file-surat-masuk">
          <small id="emailHelp" class="form-text text-muted">Ukuran File maksimal 2MB. Kompres filenya apabila sudah
            melewati 2MB <a href="https://www.ilovepdf.com/id/mengompres-pdf" target="_blank">Klik untuk
              mengkompres</a></small>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="unggah-surat-masuk">Unggah</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-unggah-arsip-desa" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Mengunggah Arsip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="nama-file">Nama File</label>
          <input type="text" class="form-control" id="nama-file">
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="file-desa">File</label>
          <input type="file" class="form-control-file" id="file-desa">
          <small id="emailHelp" class="form-text text-muted">Ukuran File maksimal 2MB.</small>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="unggah-arsip">Unggah</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-surat-keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Surat Keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="no-surat-keluar-manual">Nomor Surat</label>
          <input type="text" class="form-control" id="no-surat-keluar-manual">
        </div>
        <div class="form-group">
          <label for="keterangan-surat-keluar-manual">Keterangan Surat</label>
          <input type="text" class="form-control" id="keterangan-surat-keluar-manual">
          <div id="ket-surat"></div>
        </div>
        <div class="form-group">
          <label for="nama-pemohon">Nama Pemohon</label>
          <input type="text" class="form-control" id="nama-pemohon">
          <div id="hasil-pemohon"></div>
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal Cetak</label>
          <input type="date" class="form-control" id="tanggal" value="<?= date('Y-m-d') ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#tabel-surat-keluar').load('surat/tabel-riwayat-surat.php');
  // $('#surat-keluar').load('surat/tabel-surat-keluar.php');
  $('#profile-tab').click(function() {
    var tipe_surat = $('#jenis-surat-keluar').val();
    var bulan = $('#bulan-surat').val();
    var tahun = $('#tahun-surat').val();
    load_surat_keluar(tipe_surat, bulan, tahun);
  })

  $('#unggah-arsip-desa').click(function() {
    $('#modal-unggah-arsip-desa').modal('show');
  })

  $('#contact-tab').click(function() {
    var bulan = $('#bulan-surat-masuk').val();
    var tahun = $('#tahun-surat-masuk').val();
    load_surat_masuk(bulan, tahun);
  })

  $('#dokumen-desa').click(function() {
    var cari = '';
    arsip_desa(cari);
  })

  $('#cari-arsip-desa').keyup(function() {
    var cari = $(this).val();
    arsip_desa(cari);
  })

  $('#bulan-surat-masuk').change(function() {
    var bulan = $(this).val();
    var tahun = $('#tahun-surat-masuk').val();
    load_surat_masuk(bulan, tahun);
  })

  $('#tahun-surat-masuk').change(function() {
    var bulan = $('#bulan-surat-masuk').val();
    var tahun = $(this).val();
    load_surat_masuk(bulan, tahun);
  })

  $('#bulan-surat').change(function() {
    var tipe_surat = $('#jenis-surat-keluar').val();
    var bulan = $(this).val();
    var tahun = $('#tahun-surat').val();
    load_surat_keluar(tipe_surat, bulan, tahun);
  })

  $('#jenis-surat-keluar').change(function() {
    var tipe_surat = $(this).val();
    var bulan = $('#bulan-surat').val();
    var tahun = $('#tahun-surat').val();
    load_surat_keluar(tipe_surat, bulan, tahun);
  })


  $('#jenis-surat').change(function() {
    var surat = $(this).val();
    if (surat != '--Pilih Surat--') {
      $.ajax({
        beforeSend: function() {
          $('#jenis-surat').attr('disabled', 'disabled')
        },
        url: 'surat/komponen-ajax.php',
        data: 'kategori-surat=' + surat,
        type: 'post',
        success: function(respon) {
          $('#jenis-surat').removeAttr('disabled')
          $('#komponen-surat').html(respon);
          $('#contoh-surat').html(
            '<div class="embed-responsive embed-responsive-1by1"> <iframe class = "embed-responsive-item" src = "../file-surat/contoh/' +
            surat + '.pdf" allowfullscreen > < /iframe>');
        }
      })
    } else {
      $('#contoh-surat').html("");
      $('#komponen-surat').html("");
    }
  })

  $('#file-surat-masuk').change(function() {
    var file = $('#file-surat-masuk').prop('files')[0];
    if (file['size'] < 2500000) {
      $('#unggah-surat-masuk').removeAttr('disabled');
    } else {
      $('#unggah-surat-masuk').attr('disabled', 'disabled');
      Swal.fire(
        'Opps!!',
        'Ukuran file melebihi kapasitas standar. Ukuran File maksimal 2MB',
        'error'
      )
    }
  })

  $('#file-desa').change(function() {
    var file = $(this).prop('files')[0];
    if (file['size'] < 2500000) {
      $('#unggah-arsip').removeAttr('disabled');
    } else {
      $('#unggah-arsip').attr('disabled', 'disabled');
      Swal.fire(
        'Opps!!',
        'Ukuran file melebihi kapasitas standar. Ukuran File maksimal 2MB',
        'error'
      )
    }
  })

  $('.form-control').attr('autocomplete', 'off');

  $('#unggah-surat-masuk').click(function() {
    var data = new FormData();
    data.append('surat-masuk', true);
    data.append('instansi', $('#nama-instansi').val());
    data.append('perihal', $('#perihal').val());
    data.append('nomor', $('#no-surat-masuk').val());
    data.append('tanggal', $('#tanggal-surat-masuk').val());
    data.append('file', $('#file-surat-masuk').prop('files')[0]);

    $.ajax({
      beforeSend: function() {
        $('#unggah-surat-masuk').attr('disabled', 'disabled')
      },
      url: 'surat/proses.php',
      type: 'post',
      data: data,
      processData: false,
      contentType: false,
      success: function(respon) {
        var pecah = respon.split('|');
        $('#modal-unggah-surat-masuk').modal('hide');
        setTimeout(function() {
          var bulan = $('#bulan-surat-masuk').val();
          var tahun = $('#tahun-surat-masuk').val();
          load_surat_masuk(bulan, tahun);
          Swal.fire({
            position: 'center',
            icon: pecah[0],
            title: pecah[1],
            showConfirmButton: false,
            timer: 1500
          })
        }, 1000)
      }
    })
  })

  $('#unggah-arsip').click(function() {
    var data = new FormData();
    data.append('arsip-desa', true);
    data.append('nama-file', $('#nama-file').val());
    data.append('deskripsi', $('#deskripsi').val());
    data.append('file', $('#file-desa').prop('files')[0]);

    $.ajax({
      beforeSend: function() {
        $('#unggah-arsip').attr('disabled', 'disabled')
      },
      url: 'surat/proses.php',
      type: 'post',
      data: data,
      processData: false,
      contentType: false,
      success: function(respon) {
        var pecah = respon.split('|');
        $('#modal-unggah-arsip-desa').modal('hide');
        var cari = $('#cari-arsip-desa').val();
        arsip_desa(cari)
        setTimeout(function() {
          Swal.fire({
            position: 'center',
            icon: pecah[0],
            title: pecah[1],
            showConfirmButton: false,
            timer: 1500
          })
        }, 1000)
      }
    })
  })

  $('#upload-surat-keluar').click(function() {
    $('#modal-surat-keluar').modal('show');
  })

  $('#nama-pemohon').keyup(function() {
    var nama = $(this).val();
    cariIdentitas(nama, '#nama-pemohon', '#hasil-pemohon');
  })

  $('#keterangan-surat-keluar-manual').keyup(function() {
    var ket = $(this).val();

  })

  function cariIdentitas(nama, sumber, hasil) {

    if (nama.length > 1) {
      $.ajax({
        beforeSend: function() {
          $(hasil).html('<div class="d-flex align-items-center"> <strong > Mencari Data ' + nama +
            ' ... </strong> <div class = "spinner-border ml-auto spinner-border-sm" role = "status" aria - hidden = "true" > < /div> </div>'
          );
          $(sumber).attr('disabled', 'disabled');
        },
        url: 'surat/komponen-ajax.php',
        data: 'cari-identitas=' + nama + '&sumber=' + sumber + '&hasil=' + hasil,
        type: 'post',
        success: function(respon) {
          $(hasil).show();
          $(hasil).html(respon);
          $(sumber).removeAttr('disabled');
          $(sumber).focus();
        }
      })
    } else {
      $(hasil).html("")
    }
  }

  function load_surat_keluar(tipe_surat, bulan, tahun) {
    $.ajax({
      beforeSend: function() {
        $('#data-surat-keluar').html(
          '<center><img src="../images/loading.gif" class="img-fluid" alt=""></center>');
      },
      type: 'post',
      url: 'surat/tabel-surat-keluar.php',
      data: 'bulan=' + bulan + '&tipe-surat=' + tipe_surat + '&tahun=' + tahun,
      success: function(respon) {
        $('#data-surat-keluar').html(respon);
      }
    })
  }

  function load_surat_masuk(bulan, tahun) {
    $.ajax({
      beforeSend: function() {
        $('#data-surat-masuk').html(
          '<center><img src="../images/loading.gif" class="img-fluid" alt=""></center>');
      },
      type: 'post',
      url: 'surat/tabel-surat-masuk.php',
      data: 'bulan=' + bulan + '&surat-masuk=true&tahun=' + tahun,
      success: function(respon) {
        $('#data-surat-masuk').html(respon);
      }
    })
  }

  function arsip_desa(cari) {
    $.ajax({
      beforeSend: function() {
        $('#data-arsip-desa').html(
          '<center><img src="../images/loading.gif" class="img-fluid" alt="..."></center>')
      },
      type: 'post',
      data: 'cari-dokumen=' + cari,
      url: 'surat/tabel-arsip-desa.php',
      success: function(respon) {
        $('#data-arsip-desa').html(respon);
      }
    })
  }

})
</script>