<?php
$koneksi = mysqli_connect("localhost","root","","Tamboo");

$basis_url = 'http://localhost/Tamboo/';

$pengacak = 'LATIPONGOPEE';

function query($query){
	global $koneksi;
	return mysqli_query($koneksi,$query);
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return "<b>" . $hari_ini . "</b>";
 
}

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function penduduk($nik){
	if($nik != ''){
		$data = mysqli_fetch_assoc(query("SELECT * FROM `penduduk` WHERE nik = '$nik' "));
		$data = [
			"nik" => $data['nik'],
			"nama" => $data['nama'], 
			"alamat" => $data['alamat'],
			"tempat-lahir" => $data['tempat_lahir'], 
			"tanggal-lahir" =>tgl_indo($data['tanggal_lahir']),
			"umur" => umur($data['tanggal_lahir']),
			"pekerjaan" => $data['pekerjaan'],
			"jenis-kelamin" => $data['jenis_kelamin']
		];
	}else{
		$data = [
			"nik" => '-',
			"nama" => '-', 
			"alamat" => '-',
			"tempat-lahir" => '-', 
			"tanggal-lahir" =>'-'
		];
	}
	return $data;
}

function keluarga($kk){
	$cari = query("SELECT * FROM `kartu_keluarga` WHERE no_kk = '$kk' ");
	if(mysqli_num_rows($cari)>0){
		$data = mysqli_fetch_assoc($cari);
		$penduduk = penduduk($data['kepala_kk']);
		$detail = [
			"kepala-kk" => $penduduk['nama'],
			"nik-kk" => $penduduk['nik']
		];
	}else{
		$data = mysqli_fetch_assoc($cari);
		$penduduk = penduduk($data['kepala_kk']);
		$detail = [
			"kepala-kk" => '-',
			"nik-kk" => '-'
		];
	}
	return $detail;
}

function umur($tgl_lahir){
	
	// ubah ke format Ke Date Time
	$lahir = new DateTime($tgl_lahir);
	$hari_ini = new DateTime();
		
	$diff = $hari_ini->diff($lahir);
		
	// Display
	
	return $diff->y;
}

function user($id){
	$cari = query("SELECT * FROM `user` WHERE id = '$id' ");
	if(mysqli_num_rows($cari)>0){
		$data = mysqli_fetch_assoc($cari);
		$result = ["nama" => $data['nama']];
		return $result;
	}
}

function total_anggaran($id_kegiatan){
	$cari = query("SELECT * FROM `nota` WHERE id_kegiatan = '$id_kegiatan' ");
	if(mysqli_num_rows($cari)>0){
		$biaya = 0;
		while($data = mysqli_fetch_assoc($cari)){
			$biaya = $biaya + $data['biaya'];
		}
		return rupiah($biaya);
	}else{
		return rupiah(0);
	}
}