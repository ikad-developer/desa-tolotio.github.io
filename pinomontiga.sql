-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2021 pada 14.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinomontiga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kadus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `no_kk` varchar(250) NOT NULL,
  `kepala_kk` varchar(250) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`no_kk`, `kepala_kk`, `ket`) VALUES
('1635820128', '1111122121222222', ''),
('1635820133', '3515185701050001', ''),
('1635820138', '5311014903060004', ''),
('1635820142', '7109015703040001', ''),
('1635820146', '7171015701060002', ''),
('1635820150', '7171055804060001', ''),
('1635820155', '7174041504050002', ''),
('1635820159', '7201070410040001', ''),
('1635820163', '7208044407050002', ''),
('1635820168', '7210146102050001', ''),
('1635820172', '7501011105050003', ''),
('1635820176', '7501021909050001', ''),
('1635820180', '7501024110040001', ''),
('1635820185', '7501024412050002', ''),
('1635820189', '7501024709050001', ''),
('1635820194', '7501025208050003', ''),
('1635820198', '7501026404060001', ''),
('1635820203', '7501026812040001', ''),
('1635820207', '7501057103040001', ''),
('1635820212', '7501100609040002', ''),
('1635820217', '7501106812030003', ''),
('1635820223', '7501122409020001', ''),
('1635820230', '7501160307040001', ''),
('1635820235', '7501182801060001', ''),
('1635820240', '7501204503050001', ''),
('1635820245', '7501224302050001', ''),
('1635820249', '7502015212040001', ''),
('1635820254', '7503025807050001', ''),
('1635820258', '7503052407040001', ''),
('1635820263', '7503066009040001', ''),
('1635820267', '7503112401080083', ''),
('1635820272', '7503152302050001', ''),
('1635820276', '7503154508050001', ''),
('1635820281', '7503155203050002', ''),
('1635820286', '7503155403050001', ''),
('1635820291', '7503156404050001', ''),
('1635820296', '7503156807050001', ''),
('1635820301', '7504025704050001', ''),
('1635820306', '7505024712040002', ''),
('1635820311', '7505044810040001', ''),
('1635820316', '7571011309040001', ''),
('1635820321', '7571017103060001', ''),
('1635820326', '7571020611050001', ''),
('1635820333', '7571022304060002', ''),
('1635820339', '7571023101050001', ''),
('1635820344', '7571024703050001', ''),
('1635820348', '7571024809050004', ''),
('1635820353', '7571025201060001', ''),
('1635820360', '7571025809050000', ''),
('1635820364', '7571030504040002', ''),
('1635820369', '7571030902050002', ''),
('1635820373', '7571031406050001', ''),
('1635820378', '7571032101060002', ''),
('1635820383', '7571032212040003', ''),
('1635820387', '7571032602050001', ''),
('1635820392', '7571032806050001', ''),
('1635820397', '7571034106040000', ''),
('1635820402', '7571034307050001', ''),
('1635820407', '7571034603040001', ''),
('1635820412', '7571034709040001', ''),
('1635820417', '7571035105050001', ''),
('1635820421', '7571035210050002', ''),
('1635820426', '7571035312050001', ''),
('1635820431', '7571035609040001', ''),
('1635820436', '7571035711050002', ''),
('1635820442', '7571035907040001', ''),
('1635820446', '7571036202050001', ''),
('1635820452', '7571036503040002', ''),
('1635820457', '7571036610050003', ''),
('1635820462', '7571036910050003', ''),
('1635820468', '7571037112030004', ''),
('1635820472', '7571040307050002', ''),
('1635820477', '7571040811050001', ''),
('1635820482', '7571044103050002', ''),
('1635820486', '7571044505050001', ''),
('1635820491', '7571044907040001', ''),
('1635820496', '7571045909040001', ''),
('1635820501', '7571046105050002', ''),
('1635820507', '7571046404050001', ''),
('1635820512', '7571050109030002', ''),
('1635820518', '7571051310030003', ''),
('1635820523', '7571053107050002', ''),
('1635820527', '7571054510040001', ''),
('1635820533', '7571055305050002', ''),
('1635820538', '7571055709050003', ''),
('1635820544', '7571056310050001', ''),
('1635820549', '7571056908050001', ''),
('1635820554', '7571060307050002', ''),
('1635820559', '7571060907050001', ''),
('1635820564', '7571061402050002', ''),
('1635820570', '7571062002050001', ''),
('1635820577', '7571062503050002', ''),
('1635820582', '7571064102060001', ''),
('1635820588', '7571064907050001', ''),
('1635820593', '7571065107050001', ''),
('1635820598', '7571065408040001', ''),
('1635820604', '7571065806050002', ''),
('1635820609', '7571066408050001', ''),
('1635820613', '7571066602050001', ''),
('1635820618', '7571070212040001', ''),
('1635820624', '7571074411040001', ''),
('1635820629', '7571075312050001', ''),
('1635820634', '7571084205050001', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id`, `id_kegiatan`, `keterangan`, `biaya`, `bukti`) VALUES
(2, 2, 'Sewa gedung', 5000000, 'http://localhost/pinomontiga/admin/file/1636291088_Kuitansi Tamboo ok.docx'),
(3, 2, 'transport dari kantor desa ke gudung (PP)', 620000, ''),
(4, 1, 'pembelian material bangunan', 12000000, ''),
(5, 1, 'tambah seng 3 lembar', 150000, ''),
(6, 5, 'biaya konsumsi 120 paket', 630000, 'http://localhost/pinomontiga/admin/file/1636291706_Kuitansi Tamboo ok.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(50) NOT NULL,
  `no_kk` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`) VALUES
('1111122121222222', '1635820128', 'MOHAMMAD AL - BANNY', '', 'Laki - laki', 'Gorontalo', '2004-12-16', ''),
('1234567890123456', '1635820128', 'PUTRA PRATAMA PAMBI', '', 'Laki - laki', 'GORONTALO', '2005-12-05', ''),
('1810015408040003', '1635820128', 'Aulia Zharifah Azzahra', '', 'Perempuan', 'Pringkumpul', '2004-08-14', ''),
('2221212112211111', '1635820128', 'Mohamad Aryaditya Ahmad', '', 'Laki - laki', 'Gorontalo', '2005-06-02', ''),
('3515185701050001', '1635820133', 'Adisti Nabiila Amaliya Damayanti', '', 'Perempuan', 'Sidoarjo', '2005-01-17', ''),
('3578261307050001', '1635820133', 'Roy Eirlando Pratama Valensyah', '', 'Laki - laki', 'Surabaya', '2005-07-13', ''),
('4441221111111111', '1635820133', 'Zanjabil Muslim Talib', '', 'Laki - laki', 'Gorontalo', '2005-06-11', ''),
('5204181611040001', '1635820133', 'NANANG ARDIANSYAH ADE PUTRA', '', 'Laki - laki', 'SUMBAWA', '2004-11-16', ''),
('5311014903060004', '1635820138', 'AISYAH LOVAYUDINA RETANG', '', 'Perempuan', 'GORONTALO', '2006-03-09', ''),
('6471026212050005', '1635820138', 'NATALIA ISABEL WANTAH', '', 'Perempuan', 'GORONTALO', '2005-12-22', ''),
('7101096608050001', '1635820138', 'CINDRAWATI MOKOAGOW', '', 'Perempuan', 'TORAUT', '2005-08-26', ''),
('7101111611040301', '1635820138', 'Dicky Maulana', '', 'Laki - laki', 'Tapadaka Utara', '2004-11-16', ''),
('7109015703040001', '1635820142', 'Merlin Tahir', '', 'Perempuan', 'Gorontalo', '2004-03-17', ''),
('7111015106050002', '1635820142', 'Nur Elsa Abas', '', 'Perempuan', 'Pangia', '2005-06-11', ''),
('7111022102050001', '1635820142', 'Nuralia Tane', '', 'Perempuan', 'Manggadaa', '2005-02-21', ''),
('7111024401050001', '1635820142', 'Fat Muliana Biadi', '', 'Perempuan', 'Momalia', '2005-01-04', ''),
('7171015701060002', '1635820146', 'ARLITA ABDUL', '', 'Perempuan', 'GORONTALO', '2006-01-17', ''),
('7171022801050001', '1635820146', 'Abdurahman Faudsan Miolo', '', 'Laki - laki', 'Manado', '2005-01-28', ''),
('7171025305050002', '1635820146', 'Sulastrid Gobel', '', 'Perempuan', 'Manado', '2005-04-13', ''),
('7171036710030008', '1635820146', 'FITRAWATI SALEH', '', 'Perempuan', 'MANADO', '2003-10-27', ''),
('7171055804060001', '1635820150', 'Putri Nadila Salsadila Nento', '', 'Perempuan', 'Manado', '2006-04-18', ''),
('7171056504050003', '1635820150', 'DIVA EVRIL SYARARA HASAN', '', 'Perempuan', 'MANADO', '2005-04-25', ''),
('7172063112040004', '1635820150', 'Mohamad Firmansyah Adam', '', 'Laki - laki', 'Gorontalo', '2004-12-31', ''),
('7172076409050001', '1635820150', 'NUR AFNI HASAN', '', 'Perempuan', 'BITUNG', '2005-09-24', ''),
('7174041504050002', '1635820155', 'BIMA SAKTI SALAM', '', 'Laki - laki', 'KAB.GORONTALO', '2005-04-15', ''),
('7174042108030001', '1635820155', 'RAJAB RAHMATULLAH G. HASAN', '', 'Laki - laki', 'GOGAGOMAN', '2003-08-21', ''),
('7201012005050001', '1635820155', 'MOH. SYAHPUTRA AULIAN TANSA', '', 'Laki - laki', 'LUWUK', '2005-05-20', ''),
('7201024408050002', '1635820155', 'Sulistiani Mekar Ali', '', 'Perempuan', 'Gorontalo', '2005-08-04', ''),
('7201070410040001', '1635820159', 'Jalia Habu', '', 'Perempuan', 'Gorontalo', '2004-01-04', ''),
('7205064711050001', '1635820159', 'MULIANA KARIM', '', 'Perempuan', 'GORONTALO', '2005-11-07', ''),
('7206093108040001', '1635820159', 'Arif Usman Hunowu', '', 'Laki - laki', 'Limbo Makmur', '2004-08-31', ''),
('7207026402050001', '1635820159', 'Rahdila Febriyanti', '', 'Perempuan', 'Lambako', '2005-02-24', ''),
('7208044407050002', '1635820163', 'Julianty Kamba', '', 'Perempuan', 'Gorontalo', '2005-07-04', ''),
('7208045103030001', '1635820163', 'NURLELA USMAN', '', 'Perempuan', 'Gorontalo', '2003-03-11', ''),
('7209025306040001', '1635820163', 'Helmiati R. Hadi', '', 'Perempuan', 'Baulu', '2004-06-13', ''),
('7209031004080749', '1635820163', 'Nilam M. Boki', '', 'Perempuan', 'Kolami', '2003-09-04', ''),
('7210146102050001', '1635820168', 'MARSHANDA FEBRIANTI MAKU', '', 'Perempuan', 'GORONTALO', '2005-02-21', ''),
('7315065002050002', '1635820168', 'Haryanti', '', 'Perempuan', 'Bungi', '2005-02-10', ''),
('7371111706050004', '1635820168', 'MUHAMMAD RAHYAN NOORFAUZAN', '', 'Laki - laki', 'Makassar', '2005-06-17', ''),
('7500000123456789', '1635820168', 'Anindita Aurellia Anastasya', '', 'Perempuan', 'Gorontalo', '2005-08-22', ''),
('7501011105050003', '1635820172', 'GALANG KHAIRI IMAWAN TOLINGGI', '', 'Laki - laki', 'GORONTALO', '2005-05-11', ''),
('7501015706050001', '1635820172', 'Dhea Ananda Timbuli', '', 'Perempuan', 'Kab. Gorontalo', '2005-06-17', ''),
('7501020911050002', '1635820172', 'MUH. AIDIL HARYANTO NOE', '', 'Laki - laki', 'BONE', '2005-11-09', ''),
('7501021102050002', '1635820172', 'Tirto Febrian Usuli', '', 'Laki - laki', 'Gorontalo', '2005-02-11', ''),
('7501021909050001', '1635820176', 'Mohamad Ariel Olii', '', 'Laki - laki', 'Kab. Gorontalo', '2005-09-19', ''),
('7501022006050002', '1635820176', 'MOHAMAD RIFALDI AWUMBAS', '', 'Laki - laki', 'GORONTALO', '2005-06-20', ''),
('7501022104050001', '1635820176', 'Aprilia Nakuu', '', 'Perempuan', 'Gorontalo', '2005-04-11', ''),
('7501024103050001', '1635820176', 'Trilivia Tahir', '', 'Perempuan', 'Gorontalo', '2005-03-01', ''),
('7501024110040001', '1635820180', 'SRI INAYATUL ZIL IZATY SAPUTRA', '', 'Perempuan', 'GORONTALO', '2004-10-01', ''),
('7501024205050001', '1635820180', 'Alvira Harton Pido', '', 'Perempuan', 'Kab. Gorontalo', '2005-05-02', ''),
('7501024306040001', '1635820180', 'Nadela Suleman', '', 'Perempuan', 'Kab. Gorontalo', '2004-06-03', ''),
('7501024406040002', '1635820180', 'Riskawati Liputo', '', 'Perempuan', 'Gorontalo', '2004-05-04', ''),
('7501024412050002', '1635820185', 'Nadia Puspita Djafar', '', 'Perempuan', 'Kab. Gorontalo', '2005-12-04', ''),
('7501024505040001', '1635820185', 'Yulin Abdullah Husain', '', 'Perempuan', 'Gorontalo', '2004-05-05', ''),
('7501024511030001', '1635820185', 'PUTRI RAHIM', '', 'Perempuan', 'GORONTALO', '2003-11-05', ''),
('7501024607050001', '1635820185', 'ZULIYANA LAGARUSU', '', 'Perempuan', 'GORONTALO', '2005-07-06', ''),
('7501024709050001', '1635820189', 'DHEA PUTRI KARIM', '', 'Perempuan', 'GORONTALO', '2005-09-07', ''),
('7501024812050002', '1635820189', 'Siti Nurain Maunti', '', 'Perempuan', 'Gorontalo', '2005-12-08', ''),
('7501025101030002', '1635820189', 'Aisa Mohi', '', 'Perempuan', 'Gorontalo', '2003-01-11', ''),
('7501025106040001', '1635820189', 'VENTY ARIYANTO', '', 'Perempuan', 'KAB. GORONTALO', '2004-06-11', ''),
('7501025208050003', '1635820194', 'Nur Aulia Komendangi', '', 'Perempuan', 'Kab. Gorontalo', '2005-08-12', ''),
('7501025802050002', '1635820194', 'TRESYA PAKUNA', '', 'Perempuan', 'KAB. GORONTALO', '2005-02-18', ''),
('7501026302030001', '1635820194', 'MASITA IBRAHIM', '', 'Perempuan', 'KAB. GORONTALO', '2003-02-23', ''),
('7501026311040002', '1635820194', 'Sri Devi Abas', '', 'Perempuan', 'Gorontalo', '2004-11-21', ''),
('7501026404060001', '1635820198', 'Ayudya Poetri Anggraini', '', 'Perempuan', 'Gorontalo', '2006-04-24', ''),
('7501026610040001', '1635820198', 'NUR SHELLA RAMADHANI ADAM', '', 'Perempuan', 'GORONTALO', '2004-10-26', ''),
('7501026708050001', '1635820198', 'Alya Miolo', '', 'Perempuan', 'Gorontalo', '2005-08-27', ''),
('7501026808050003', '1635820198', 'Siti Fentiyawati R. Padjili', '', 'Perempuan', 'Kab Gorontalo', '2005-08-28', ''),
('7501026812040001', '1635820203', 'Siti Mutmainna Erni Tadulo', '', 'Perempuan', 'Telaga', '2004-12-28', ''),
('7501035706040001', '1635820203', 'Mutia R. Kuno', '', 'Perempuan', 'Kab.Gorontalo', '2004-06-17', ''),
('7501055601060001', '1635820203', 'ALIYA PUTRI G HANAPI', '', 'Perempuan', 'KAB. GORONTALO', '2006-01-16', ''),
('7501055603050001', '1635820203', 'RAHAYU A. KASIM', '', 'Perempuan', 'Kota Gorontalo', '2005-03-16', ''),
('7501057103040001', '1635820207', 'Ein Abdul Rahman', '', 'Perempuan', 'Gorontalo', '2004-03-31', ''),
('7501070210040001', '1635820207', 'Rahmat Detuage', '', 'Laki - laki', 'Telaga', '2004-10-02', ''),
('7501094808050001', '1635820207', 'Sri Marsanda Intan Pratiwi Rahman', '', 'Perempuan', 'Kab. Gorontalo', '2005-08-08', ''),
('7501097010050001', '1635820207', 'Fitrayani Hasan', '', 'Perempuan', 'Kab  Gorontalo', '2005-10-30', ''),
('7501100609040002', '1635820212', 'Haikal Basalama', '', 'Laki - laki', 'Kab.Gorontalo', '2004-09-06', ''),
('7501103112040001', '1635820212', 'Ilham Febrian Adam', '', 'Laki - laki', 'Kab. Gorontalo', '2004-12-31', ''),
('7501106506040001', '1635820212', 'Sri Widya I. Yantiko', '', 'Perempuan', 'Gorontalo', '2004-06-25', ''),
('7501106705050001', '1635820212', 'Nanda Chiara Chatlina Karim', '', 'Perempuan', 'Gorontalo', '2005-05-17', ''),
('7501106812030003', '1635820217', 'DWI YANTI DAUD', '', 'Perempuan', 'GORONTALO', '2003-12-28', ''),
('7501107005050001', '1635820217', 'SRI ZEIN AHMAD', '', 'Perempuan', 'PANTUNGO', '2005-05-30', ''),
('7501110806050001', '1635820217', 'Sigit Igirisa', '', 'Laki - laki', 'Gorontalo', '2005-06-08', ''),
('7501118210040001', '1635820217', 'Elan N. Jibu', '', 'Perempuan', 'Kab Gorontalo', '2004-10-24', ''),
('7501122409020001', '1635820223', 'Lewis Malanua', '', 'Laki - laki', 'Gorontalo', '2002-09-24', ''),
('7501134910050001', '1635820223', 'Elsa Pakaya', '', 'Perempuan', 'Kabupaten Gorontalo', '2005-10-09', ''),
('7501136007050002', '1635820223', 'DIAN NURKHOLIFAH', '', 'Perempuan', 'KAB. GORONTALO', '2005-07-20', ''),
('7501136309050001', '1635820223', 'Hersil Diyawanti Aswad', '', 'Perempuan', 'Tolangohula', '2005-09-23', ''),
('7501160307040001', '1635820230', 'Rivaldo Harun', '', 'Laki - laki', 'Kab. Gorontalo', '2004-07-03', ''),
('7501164808040001', '1635820230', 'PUTRI AGUTIYA DJAFAR', '', 'Perempuan', 'KAB. GORONTALO', '2004-08-08', ''),
('7501180410030001', '1635820230', 'Vikran Pakaya', '', 'Laki - laki', 'Manado', '2003-10-09', ''),
('7501182412040001', '1635820230', 'Mohamad Cahya Harun', '', 'Laki - laki', 'Gorontalo', '2004-12-24', ''),
('7501182801060001', '1635820235', 'Ahmad Muhazzir Hasan', '', 'Laki - laki', 'Gorontalo', '2006-01-28', ''),
('7501185606050001', '1635820235', 'NURMALA R. ADJUNU', '', 'Perempuan', 'GORONTALO', '2005-06-16', ''),
('7501186301050001', '1635820235', 'ZALIATUN JANNAH ASWIN', '', 'Perempuan', 'KAB. GORONTALO', '2005-01-23', ''),
('7501191112040001', '1635820235', 'Ar-razzaq Nurkamiden', '', 'Laki - laki', 'Manado', '2004-12-11', ''),
('7501204503050001', '1635820240', 'NADIA Y. MANTOLONGI', '', 'Perempuan', 'LULUO', '2005-03-05', ''),
('7501212905050001', '1635820240', 'Mohamat Aditiya Putra Tui', '', 'Laki - laki', 'Kab. Gorontalo', '2005-05-29', ''),
('7501220808050002', '1635820240', 'Wahyu Aryadi Kaune', '', 'Laki - laki', 'Kelurahan Biyonga', '2005-08-08', ''),
('7501224106050002', '1635820240', 'FITRIYA AL- AMANAH HUNOWU', '', 'Perempuan', 'GORONTALO', '2005-06-01', ''),
('7501224302050001', '1635820245', 'SARINTAN IBRAHIM', '', 'Perempuan', 'GORONTALO', '2005-02-03', ''),
('7501225408050001', '1635820245', 'Melani Hapsa Damalu', '', 'Perempuan', 'Kab. Gorontalo', '2005-08-14', ''),
('7501225809030001', '1635820245', 'Putri Septiyanti T.H. Hano', '', 'Perempuan', 'Kab. Gorontalo', '2003-09-18', ''),
('7501226004060001', '1635820245', 'Alya Apriliyah Adam', '', 'Perempuan', 'Kab. Gorontalo', '2006-04-20', ''),
('7502015212040001', '1635820249', 'Marsya Napu', '', 'Perempuan', 'PAGUYAMAN', '2004-12-12', ''),
('7503017110060001', '1635820249', 'FITRA RAMADHANI H. BAHAR', '', 'Perempuan', 'GORONTALO', '2006-10-31', ''),
('7503022701030001', '1635820249', 'MOHAMMAD FAZRIYANTO ARSAD', '', 'Laki - laki', 'Gorontalo', '2003-01-27', ''),
('7503023003050001', '1635820249', 'Mohamad Fazran Usman', '', 'Laki - laki', 'Bone Bolango', '2005-03-30', ''),
('7503025807050001', '1635820254', 'Siti Miya Saleh', '', 'Perempuan', 'Kabila', '2005-07-18', ''),
('7503034507040001', '1635820254', 'Amelia Hilipito', '', 'Perempuan', 'Suwawa', '2004-07-12', ''),
('7503035804050001', '1635820254', 'Aprilia Rahman', '', 'Perempuan', 'Suwawa', '2005-04-18', ''),
('7503051409040001', '1635820254', 'Mohamad Gito Wahidji', '', 'Laki - laki', 'Gorontalo', '2004-09-14', ''),
('7503052407040001', '1635820258', 'HERMAWANTO JUSUF', '', 'Laki - laki', 'Gorontalo', '2004-07-24', ''),
('7503055105030001', '1635820258', 'Elvin Abdullah', '', 'Laki - laki', 'Gorontalo', '2003-05-11', ''),
('7503055708050001', '1635820258', 'REISKA SUGA', '', 'Perempuan', 'GORONTALO', '2005-08-17', ''),
('7503063112040001', '1635820258', 'Mulya Abdurahman', '', 'Laki - laki', 'Gorontalo', '2004-12-31', ''),
('7503066009040001', '1635820263', 'Nur Fadhilah Utiarahman', '', 'Perempuan', 'Gorontalo', '2004-09-20', ''),
('7503074904050001', '1635820263', 'AINI NUR ASYIAH PHIOLA', '', 'Perempuan', 'Gorontalo', '2005-04-09', ''),
('7503105008040001', '1635820263', 'LALINA LAKORO', '', 'Perempuan', 'TALUDAA', '2004-08-10', ''),
('7503105108050001', '1635820263', 'Atikah Kumis', '', 'Perempuan', 'Gorontalo', '2005-08-11', ''),
('7503112401080083', '1635820267', 'SITI MULIYANI HULUKATI', '', 'Perempuan', 'Suwawa', '2005-01-25', ''),
('7503117011040001', '1635820267', 'YULIFIA ABAS', '', 'Perempuan', 'TULABOLO', '2004-11-30', ''),
('7503121105050001', '1635820267', 'MOHAMAD TOMELO', '', 'Laki - laki', 'Suwawa', '2005-05-11', ''),
('7503151205040001', '1635820267', 'MOHAMAD FAJRI ADITYA RAHIM', '', 'Laki - laki', 'GORONTALO', '2004-05-12', ''),
('7503152302050001', '1635820272', 'WANDRI RADJULANI', '', 'Laki - laki', 'GORONTALO', '2005-02-23', ''),
('7503153001050001', '1635820272', 'Januar Moh Al-Fath Laleno', '', 'Laki - laki', 'Gorontalo', '2005-01-30', ''),
('7503153005040001', '1635820272', 'SALMAN AL FARISMAN', '', 'Laki - laki', 'GORONTALO', '2004-05-30', ''),
('7503154505050001', '1635820272', 'Fira Anastasia Kaili', '', 'Perempuan', 'Amurang', '2005-05-05', ''),
('7503154508050001', '1635820276', 'MASAYU LATIEF', '', 'Perempuan', 'Gorontalo', '2005-08-05', ''),
('7503154801050001', '1635820276', 'FIDYA P. MANGGOPA', '', 'Perempuan', 'GORONTALO', '2005-01-08', ''),
('7503154808050001', '1635820276', 'SRI ANGGRIANI S. DETU', '', 'Perempuan', 'Gorontalo', '2005-08-08', ''),
('7503154908050001', '1635820276', 'Magfirah El Walidaini', '', 'Perempuan', 'Gorontalo', '2005-08-09', ''),
('7503155203050002', '1635820281', 'INDRI ADAM', '', 'Perempuan', 'GORONTALO', '2005-03-12', ''),
('7503155211030001', '1635820281', 'NOVALIA IYONA', '', 'Perempuan', 'GORONTALO', '2003-11-12', ''),
('7503155211040001', '1635820281', 'ROSALINDA ALI', '', 'Perempuan', 'GORONTALO', '2004-11-12', ''),
('7503155311040001', '1635820281', 'RAMLAWATI IBRAHIM', '', 'Perempuan', 'Gorontalo', '2004-10-10', ''),
('7503155403050001', '1635820286', 'FADILA SOMAN', '', 'Perempuan', 'GORONTALO', '2005-03-14', ''),
('7503155405050001', '1635820286', 'RAHMAWATY ISHAK', '', 'Perempuan', 'GORONTALO', '2005-05-14', ''),
('7503155508040001', '1635820286', 'Agustina Husin', '', 'Perempuan', 'Gorontalo', '2004-07-15', ''),
('7503155906050001', '1635820286', 'REVALINA ZULAIHA PANIGORO', '', 'Perempuan', 'GORONTALO', '2005-07-19', ''),
('7503156404050001', '1635820291', 'ASRIKAWATI ARRILIA MUSA', '', 'Perempuan', 'GORONTALO', '2005-04-23', ''),
('7503156607060001', '1635820291', 'ANASTASYA KATILI', '', 'Perempuan', 'GORONTALO', '2006-07-26', ''),
('7503156610040001', '1635820291', 'Rahmatia Datau', '', 'Perempuan', 'Gorontalo', '2004-10-26', ''),
('7503156803060001', '1635820291', 'NUR ARMIN YUSUF', '', 'Perempuan', 'Gorontalo', '2006-03-28', ''),
('7503156807050001', '1635820296', 'KARSUM DAVID', '', 'Perempuan', 'GORONTALO', '2005-07-28', ''),
('7503160701060001', '1635820296', 'Faiz Fulvian Saleh', '', 'Laki - laki', 'GORONTALO', '2006-01-07', ''),
('7503165603050001', '1635820296', 'ALSYA ALIFYA AHMAD', '', 'Perempuan', 'GORONTALO', '2005-03-16', ''),
('7503165801050001', '1635820296', 'HIJRIYANTI MUSTAPA', '', 'Perempuan', 'GORONTALO', '2005-01-18', ''),
('7504025704050001', '1635820301', 'APRILA MONOARFA', '', 'Perempuan', 'WONGGARASI BARAT', '2005-04-17', ''),
('7504052208040001', '1635820301', 'Mohamad Dwi Andika Agustian Idrus', '', 'Laki - laki', 'Siduan', '2004-08-22', ''),
('7504054503050001', '1635820301', 'Ridiyani Botutihe', '', 'Perempuan', 'Gorontalo', '2005-03-05', ''),
('7504104611040001', '1635820301', 'FITRA RAMADANI MALENGGA', '', 'Perempuan', 'MARISA', '2004-11-06', ''),
('7505024712040002', '1635820306', 'DEBI IMRAN', '', 'Perempuan', 'MOLANTADU', '2004-12-07', ''),
('7505040903050001', '1635820306', 'ABD. RASID PIANUS', '', 'Laki - laki', 'BULOILA', '2005-03-09', ''),
('7505042312040002', '1635820306', 'SELA SULEMAN', '', 'Perempuan', 'BULOILA', '2004-12-23', ''),
('7505044511050001', '1635820306', 'RELITA KAMASI', '', 'Perempuan', 'BULOILA', '2005-11-05', ''),
('7505044810040001', '1635820311', 'FITRIYANA MATALAUNI', '', 'Perempuan', 'KIKIA', '2004-10-08', ''),
('7505045906040001', '1635820311', 'SINTIA SULEMAN', '', 'Perempuan', 'GORONTALO', '2004-06-09', ''),
('7505046406050002', '1635820311', 'RISTI FADILLAH LAHAKIM', '', 'Perempuan', 'BULOILA', '2005-06-24', ''),
('7571010911040003', '1635820311', 'Ilham Bungi', '', 'Laki - laki', 'Gorontalo', '2004-11-09', ''),
('7571011309040001', '1635820316', 'Rifaldi Hidayat Ahmad', '', 'Laki - laki', 'Luwuk', '2004-09-13', ''),
('7571014711040002', '1635820316', 'RISTIYANI AHMAD', '', 'Perempuan', 'GORONTALO', '2004-11-07', ''),
('7571014910030001', '1635820316', 'PENISA ABDUL', '', 'Perempuan', 'GORONTALO', '2003-10-09', ''),
('7571016607050001', '1635820316', 'AMANDA ILANUNU', '', 'Perempuan', 'GORONTALO', '2005-07-26', ''),
('7571017103060001', '1635820321', 'Rahmatia Putri Isa Ibrahim', '', 'Perempuan', 'Gorontalo', '2006-03-31', ''),
('7571020201040002', '1635820321', 'Arjan Gubali', '', 'Laki - laki', 'Gorontalo', '2004-01-02', ''),
('7571020504050003', '1635820321', 'Adrian Nuruji', '', 'Laki - laki', 'Gorontalo', '2005-04-05', ''),
('7571020507050001', '1635820321', 'Fadlan Mohamad', '', 'Laki - laki', 'Gorontalo', '2005-07-05', ''),
('7571020611050001', '1635820326', 'Moh. Ali Habid', '', 'Laki - laki', 'Gorontalo', '2005-11-06', ''),
('7571021203050002', '1635820326', 'Ervan Hasan', '', 'Laki - laki', 'Gorontalo', '2005-03-12', ''),
('7571021905050001', '1635820326', 'Andika Askar Pomalingo', '', 'Laki - laki', 'Gorontalo', '2005-05-19', ''),
('7571022210030001', '1635820326', 'Mohamad Zamaludin Monoarfa', '', 'Laki - laki', 'Gorontalo', '2003-08-24', ''),
('7571022304060002', '1635820333', 'Alfaedo Zieskind Monoarfa', '', 'Laki - laki', 'Gorontalo', '2005-04-23', ''),
('7571022307050001', '1635820333', 'ZULFIKRI MALOHO', '', 'Laki - laki', 'GORONTALO', '2005-07-23', ''),
('7571022308050001', '1635820333', 'Dihyat Khairul Rizal Umar', '', 'Laki - laki', 'Gorontalo', '2005-08-23', ''),
('7571022906040004', '1635820333', 'Ahmad Karim', '', 'Laki - laki', 'Gorontalo', '2004-06-29', ''),
('7571023101050001', '1635820339', 'Aditya Saegaert', '', 'Laki - laki', 'Gorontalo', '2005-01-31', ''),
('7571024412050004', '1635820339', 'Dian Rahmalia Thalib', '', 'Perempuan', 'Gorontalo', '2005-12-04', ''),
('7571024609050001', '1635820339', 'Sintiya Ibrahim', '', 'Perempuan', 'Gorontalo', '2005-09-06', ''),
('7571024702060003', '1635820339', 'Felista Mohamad', '', 'Perempuan', 'Gorontalo', '2006-02-07', ''),
('7571024703050001', '1635820344', 'ANISA DOMILI', '', 'Perempuan', 'GORONTALO', '2005-03-07', ''),
('7571024705040003', '1635820344', 'Reazytha Yusuf', '', 'Perempuan', 'Gorontalo', '2004-05-07', ''),
('7571024805050001', '1635820344', 'Iren Niana Helingo', '', 'Perempuan', 'Gorontalo', '2005-05-08', ''),
('7571024807030001', '1635820344', 'Ana Mariana Gias', '', 'Perempuan', 'Gorontalo', '2003-07-08', ''),
('7571024809050004', '1635820348', 'DWI ANANDA PUTRI MAKANGIRAS', '', 'Perempuan', 'GORONTALO', '2005-09-08', ''),
('7571024811040001', '1635820348', 'Fitriyani R. Supu', '', 'Perempuan', 'Gorontalo', '2004-11-08', ''),
('7571024906050003', '1635820348', 'Juniar Usman', '', 'Perempuan', 'Gorontalo', '2005-06-09', ''),
('7571025110050001', '1635820348', 'SAHWA RAMADANI B. LANTI', '', 'Perempuan', 'GORONTALO', '2005-10-11', ''),
('7571025201060001', '1635820353', 'Miranda Putri Sadjiman', '', 'Perempuan', 'Gorontalo', '2006-01-12', ''),
('7571025607050003', '1635820353', 'Nur Fadillah Oktafiana Abdul', '', 'Perempuan', 'Gorontalo', '2005-07-16', ''),
('7571025705050001', '1635820353', 'FIDYA AMALIA PRATIWI GUSASI', '', 'Perempuan', 'GORONTALO', '2005-05-17', ''),
('7571025707040003', '1635820353', 'Salsa', '', 'Perempuan', 'Gorontalo', '2004-07-17', ''),
('7571025809050000', '1635820360', 'NABILA NURSIFA BAGTAYAN', '', 'Perempuan', 'GORONTALO', '2005-09-18', ''),
('7571026411040001', '1635820360', 'SITI NURFITRI ABDULLAH', '', 'Perempuan', 'GORONTALO', '2004-11-24', ''),
('7571026801050005', '1635820360', 'Adinda Ryzka Alifya Timbola', '', 'Perempuan', 'Gorontalo', '2005-01-28', ''),
('7571030401060001', '1635820360', 'MOHAMAD RIFKI PODUNGGE', '', 'Laki - laki', 'GORONTALO', '2006-01-04', ''),
('7571030504040002', '1635820364', 'Mohamad Safril Buheli', '', 'Laki - laki', 'Gorontalo', '2004-04-05', ''),
('7571030504050001', '1635820364', 'HARLAN M. NONU', '', 'Laki - laki', 'GORONTALO', '2005-04-05', ''),
('7571030511050001', '1635820364', 'Awalludin Anwar Liputo', '', 'Laki - laki', 'Gorontalo', '2005-11-05', ''),
('7571030711040001', '1635820364', 'NOVALDY RAMADHAN SUAIBA', '', 'Laki - laki', 'GORONTALO', '2004-11-07', ''),
('7571030902050002', '1635820369', 'RIVALDO MOHAMAD', '', 'Laki - laki', 'GORONTALO', '2005-02-09', ''),
('7571031006050001', '1635820369', 'Farhan Beu', '', 'Laki - laki', 'Gorontalo', '2005-06-10', ''),
('7571031204050001', '1635820369', 'Ayub Anwar', '', 'Laki - laki', 'Gorontalo', '2005-04-12', ''),
('7571031311020001', '1635820369', 'RAMDAM YAHYA', '', 'Laki - laki', 'Gorontalo', '2002-11-13', ''),
('7571031406050001', '1635820373', 'ADRIAN S. KUNE', '', 'Laki - laki', 'GORONTALO', '2004-07-14', ''),
('7571031509050002', '1635820373', 'SULTAN HASAN', '', 'Laki - laki', 'GORONTALO', '2005-09-15', ''),
('7571031710040001', '1635820373', 'Ananda Rifki Talani', '', 'Laki - laki', 'Gorontalo', '2004-10-17', ''),
('7571031812050001', '1635820373', 'ISMAIL DATAU', '', 'Laki - laki', 'GORONTALO', '2005-12-18', ''),
('7571032101060002', '1635820378', 'MOHAMMAD RASYA ALFAREL LAHAMUTU', '', 'Laki - laki', 'Gorontalo', '2006-01-21', ''),
('7571032110010002', '1635820378', 'RAMAYANTO MOHAMAD', '', 'Laki - laki', 'GORONTALO', '2001-10-21', ''),
('7571032202050002', '1635820378', 'Indri Abas', '', 'Perempuan', 'Gorontalo', '2005-02-22', ''),
('7571032204030001', '1635820378', 'Moh. Raffi Mohi', '', 'Laki - laki', 'Gorontalo', '2003-04-22', ''),
('7571032212040003', '1635820383', 'MOHAMAD AGUNG M.TUI', '', 'Laki - laki', 'GORONTALO', '2004-12-22', ''),
('7571032305040001', '1635820383', 'IBRAHIM PARIDU', '', 'Laki - laki', 'GORONTALO', '2004-05-23', ''),
('7571032405050002', '1635820383', 'INDRA HUSAIN', '', 'Laki - laki', 'Gorontalo', '2005-05-24', ''),
('7571032505050001', '1635820383', 'RONAL HUSAIN', '', 'Laki - laki', 'GORONTALO', '2005-05-23', ''),
('7571032602050001', '1635820387', 'SIGIT PEBRIYANTO PADJILI', '', 'Laki - laki', 'GORONTALO', '2005-02-26', ''),
('7571032705050002', '1635820387', 'RAHIM ABDUL KARIM', '', 'Laki - laki', 'GORONTALO', '2005-05-27', ''),
('7571032801050002', '1635820387', 'Rahmad Beu', '', 'Laki - laki', 'Gorontalo', '2005-01-30', ''),
('7571032804060001', '1635820387', 'Eka Putra Mohamad', '', 'Laki - laki', 'Gorontalo', '2006-04-28', ''),
('7571032806050001', '1635820392', 'AGUNG DARMAWAN ABAS', '', 'Laki - laki', 'GORONTALO', '2005-06-28', ''),
('7571033004050002', '1635820392', 'PRASETYO KUENGO', '', 'Laki - laki', 'Gorontalo', '2005-04-30', ''),
('7571033010040001', '1635820392', 'Vagil Ramadhan Putra Ishak', '', 'Laki - laki', 'Gorontalo', '2004-10-30', ''),
('7571033112040002', '1635820392', 'ABD. RAHMAN ANTU', '', 'Laki - laki', 'GORONTALO', '2004-12-31', ''),
('7571034106040000', '1635820397', 'NUR RAHMAWAN SULEMAN', '', 'Laki - laki', 'GORONTALO', '2004-06-01', ''),
('7571034107030009', '1635820397', 'Aprilia Datau', '', 'Perempuan', 'Gorontalo', '2005-04-03', ''),
('7571034205050004', '1635820397', 'Melinda Thalib', '', 'Perempuan', 'Gorontalo', '2006-05-02', ''),
('7571034207030003', '1635820397', 'PUTRI MOHAMAD', '', 'Perempuan', 'GORONTALO', '2003-07-02', ''),
('7571034307050001', '1635820402', 'Citra Dewi Ainun Makjun', '', 'Perempuan', 'Gorontalo', '2005-07-03', ''),
('7571034401050001', '1635820402', 'ALYA AH LAGARUSU', '', 'Perempuan', 'GORONTALO', '2005-01-04', ''),
('7571034505050001', '1635820402', 'Nayla Putri Abdullah', '', 'Perempuan', 'Gorontalo', '2005-05-05', ''),
('7571034506050001', '1635820402', 'Yunita Lantu', '', 'Perempuan', 'Gorontalo', '2005-06-05', ''),
('7571034603040001', '1635820407', 'TIYANSI A. MALOTO', '', 'Perempuan', 'Gorontalo', '2004-11-14', ''),
('7571034605050001', '1635820407', 'Revalina Is. Hiola', '', 'Perempuan', 'Gorontalo', '2005-05-06', ''),
('7571034702050001', '1635820407', 'Intan Febrianti Dumbela', '', 'Perempuan', 'Gorontalo', '2005-02-07', ''),
('7571034708050002', '1635820407', 'SITI RIANTI ISA', '', 'Perempuan', 'MANADO', '2005-08-07', ''),
('7571034709040001', '1635820412', 'Marcha Dwi Firgita Igirisa', '', 'Perempuan', 'Gorontalo', '2004-09-07', ''),
('7571034712050001', '1635820412', 'ANANDA ZALWA EKAPUTRI LAMADAU', '', 'Perempuan', 'Gorontalo', '2005-12-07', ''),
('7571035001050001', '1635820412', 'Fajriani Bague', '', 'Perempuan', 'Gorontalo', '2005-01-10', ''),
('7571035009050002', '1635820412', 'FARADILA. SYAHRIA. KADIR', '', 'Perempuan', 'GORONTALO', '2005-09-10', ''),
('7571035105050001', '1635820417', 'Amelia Mooduto', '', 'Perempuan', 'Gorontalo', '2005-05-11', ''),
('7571035110040001', '1635820417', 'Dinda Patilima', '', 'Perempuan', 'Gorontalo', '2004-10-11', ''),
('7571035203040003', '1635820417', 'MELDIANA HASAN', '', 'Perempuan', 'Gorontalo', '2004-03-12', ''),
('7571035210030003', '1635820417', 'Muliana Eka Putri Abas', '', 'Perempuan', 'Gorontalo', '2003-10-12', ''),
('7571035210050002', '1635820421', 'Sri Rahmawati Ngabito', '', 'Perempuan', 'Gorontalo', '2005-10-12', ''),
('7571035211050001', '1635820421', 'Balgis Alhabsi', '', 'Perempuan', 'Gorontalo', '2005-11-12', ''),
('7571035302050001', '1635820421', 'REVALINA ROMAN', '', 'Perempuan', 'GORONTALO', '2005-02-13', ''),
('7571035306050003', '1635820421', 'Fadlia Zulkarnain', '', 'Perempuan', 'Gorontalo', '2005-06-13', ''),
('7571035312050001', '1635820426', 'Siti Pratiwi Saleh', '', 'Perempuan', 'Gorontalo', '2005-12-13', ''),
('7571035407040003', '1635820426', 'YULIANTI DJURA', '', 'Perempuan', 'GORONTALO', '2005-07-14', ''),
('7571035410050001', '1635820426', 'Nur Alicia Putri Daud', '', 'Perempuan', 'Gorontalo', '2005-10-14', ''),
('7571035603050001', '1635820426', 'NUR FADILA ISA', '', 'Perempuan', 'GORONTALO', '2005-09-16', ''),
('7571035609040001', '1635820431', 'Intan Fatricia Hamzah', '', 'Perempuan', 'Gorontalo', '2004-09-16', ''),
('7571035610040001', '1635820431', 'RINDI MULIADI', '', 'Perempuan', 'Sulawesi Selatan', '2004-10-16', ''),
('7571035611040002', '1635820431', 'FITRI ARRAINI IBRAHIM', '', 'Perempuan', 'GORONTALO', '2004-11-16', ''),
('7571035705050004', '1635820431', 'JELDA FATRICIA HULOPI', '', 'Perempuan', 'Gorontalo', '2005-05-17', ''),
('7571035711050002', '1635820436', 'SRI NABILA PUTRI ABDJUL', '', 'Perempuan', 'GORONTALO', '2005-11-17', ''),
('7571035901050001', '1635820436', 'Sitti Nur Jannah Jalaha', '', 'Perempuan', 'Gorontalo', '2005-01-19', ''),
('7571035905050001', '1635820436', 'Candra Abdullah', '', 'Perempuan', 'Gorontalo', '2005-05-19', ''),
('7571035905050002', '1635820436', 'RIRIN DWIARYANTI HUKO', '', 'Perempuan', 'GORONTALO', '2005-05-19', ''),
('7571035907040001', '1635820442', 'Yunita Rajak', '', 'Perempuan', 'Gorontalo', '2004-07-19', ''),
('7571035907050001', '1635820442', 'MUTHIA PUTRI ISHAK', '', 'Perempuan', 'GORONTALO', '2005-07-19', ''),
('7571036012050001', '1635820442', 'DESWITA PAKAYA', '', 'Perempuan', 'GORONTALO', '2005-12-20', ''),
('757103611040001', '1635820442', 'FITRA ARRIANA IBRAHIM', '', 'Perempuan', 'Gorontalo', '2003-11-16', ''),
('7571036202050001', '1635820446', 'Revalina Yusuf', '', 'Perempuan', 'Gorontalo', '2005-02-22', ''),
('7571036207050001', '1635820446', 'Siti Nur Annisa R. Ishak', '', 'Perempuan', 'Gorontalo', '2005-07-22', ''),
('7571036409030000', '1635820446', 'ISRAWATI UTI', '', 'Perempuan', 'GORONTALO', '2003-09-24', ''),
('7571036412050003', '1635820446', 'ROSMIANA ABDJUL', '', 'Perempuan', 'Gorontalo', '2005-12-24', ''),
('7571036503040002', '1635820452', 'NATASYA ALI', '', 'Perempuan', 'GORONTALO', '2005-03-25', ''),
('7571036511040003', '1635820452', 'Rini Kadir', '', 'Perempuan', 'Gorontalo', '2006-11-25', ''),
('7571036604040003', '1635820452', 'Nurdiana Batute', '', 'Perempuan', 'Gorontalo', '2004-04-26', ''),
('7571036604050001', '1635820452', 'Indriany Dewi Lestari', '', 'Perempuan', 'Gorontalo', '2005-04-26', ''),
('7571036610050003', '1635820457', 'Rahmah Fauzia Djailani', '', 'Perempuan', 'Gorontalo', '2005-10-26', ''),
('7571036703050002', '1635820457', 'MARSYANDA DELVIANI LABORO', '', 'Perempuan', 'GORONTALO', '2005-03-27', ''),
('7571036704050001', '1635820457', 'Aprianty Ismail', '', 'Perempuan', 'Gorontalo', '2005-04-27', ''),
('7571036804050001', '1635820457', 'Shinta Goi', '', 'Perempuan', 'Gorontali', '2005-04-28', ''),
('7571036910050003', '1635820462', 'NURBAITI DAHLAN', '', 'Perempuan', 'PAGIMANA', '2005-10-29', ''),
('7571037004050002', '1635820462', 'ADELIA NTUU', '', 'Perempuan', 'GORONTALO', '2005-04-30', ''),
('7571037110050001', '1635820462', 'NUR LAILA MALAISE', '', 'Perempuan', 'Gorontalo', '2005-10-31', ''),
('7571037110050004', '1635820462', 'Vitra Ramadani Saeng', '', 'Perempuan', 'Gorontalo', '2005-10-31', ''),
('7571037112030004', '1635820468', 'FARHANIA YUSUF', '', 'Perempuan', 'GORONTALO', '2003-12-30', ''),
('7571037112040001', '1635820468', 'Siti Nur Muzdalifah Adam', '', 'Perempuan', 'Gorontalo', '2004-12-31', ''),
('7571040107020004', '1635820468', 'Wawan Lantu', '', 'Laki - laki', 'Gorontalo', '2002-02-05', ''),
('7571040203040002', '1635820468', 'IBRAHIM A. TOMAILI', '', 'Laki - laki', 'GORONTALO', '2004-03-02', ''),
('7571040307050002', '1635820472', 'Abd. Djalil Husa', '', 'Laki - laki', 'Gorontalo', '2005-07-03', ''),
('7571040409030002', '1635820472', 'Abdul Rahman Djaini', '', 'Laki - laki', 'Gorontalo', '2003-09-04', ''),
('7571040412040001', '1635820472', 'Abd Radjak Lasoma', '', 'Laki - laki', 'Gorontalo', '2004-12-04', ''),
('7571040810040002', '1635820472', 'ZAINUDIN YUSUF', '', 'Laki - laki', 'GORONTALO', '2004-10-08', ''),
('7571040811050001', '1635820477', 'Ismail Igirisa', '', 'Laki - laki', 'Gorontalo', '2005-11-08', ''),
('7571040908020001', '1635820477', 'Gunawan Biahimo', '', 'Laki - laki', 'GORONTALO', '2002-08-09', ''),
('7571040908050002', '1635820477', 'CANDRA KURNIAWAN RIZKY AHMAD', '', 'Laki - laki', 'GORONTALO', '2005-08-09', ''),
('7571041702040002', '1635820477', 'Ridho Febriansyah Ali', '', 'Laki - laki', 'Gorontalo', '2004-02-17', ''),
('7571044103050002', '1635820482', 'NAZWA PUTRI AULIA IRVAN', '', 'Perempuan', 'Gorontalo', '2005-03-01', ''),
('7571044107050002', '1635820482', 'NURAIN ALI', '', 'Perempuan', 'GORONTALO', '2005-03-13', ''),
('7571044212050001', '1635820482', 'Andini Pratiwi Huko', '', 'Perempuan', 'Gorontalo', '2005-12-02', ''),
('7571044412040003', '1635820482', 'DEBRIYANTI MAHMUD', '', 'Perempuan', 'GORONTALO', '2004-12-04', ''),
('7571044505050001', '1635820486', 'SITI NURHALIZA DJIBRAN', '', 'Perempuan', 'GORONTALO', '2005-05-05', ''),
('7571044705050003', '1635820486', 'Meysin F. Rahman', '', 'Perempuan', 'Gorontalo', '2005-05-07', ''),
('7571044803050003', '1635820486', 'ALSINDI UMAR', '', 'Perempuan', 'GORONTALO', '2005-03-08', ''),
('7571044906050001', '1635820486', 'Nurfadila B. Mukdin', '', 'Perempuan', 'Gorontalo', '2005-06-09', ''),
('7571044907040001', '1635820491', 'Sarintan Radjiku', '', 'Perempuan', 'Gorontalo', '2004-07-09', ''),
('7571045203960001', '1635820491', 'ISNAENI NAJWA HIDAYATY WARSONO', '', 'Perempuan', 'GORONTALO', '2005-09-03', ''),
('7571045302050003', '1635820491', 'Fitriyanti Mustapa', '', 'Perempuan', 'Gorontalo', '2005-02-13', ''),
('7571045803030004', '1635820491', 'Mawar Anggreyani Abdullah', '', 'Perempuan', 'Gorontalo', '2003-03-17', ''),
('7571045909040001', '1635820496', 'Muriska Usman', '', 'Perempuan', 'Gorontalo', '2004-09-19', ''),
('7571045910050001', '1635820496', 'ALICIA ABDJUL', '', 'Perempuan', 'GORONTALO', '2005-10-19', ''),
('7571046001050001', '1635820496', 'Sri Jihan Hunawa', '', 'Perempuan', 'Gorontalo', '2005-01-20', ''),
('7571046104050001', '1635820496', 'RIFKA APRIANI NONTO', '', 'Perempuan', 'Gorontalo', '2005-04-21', ''),
('7571046105050002', '1635820501', 'ELSA ANGGRAINI WAHAB', '', 'Perempuan', 'GORONTALO', '2005-05-21', ''),
('7571046107030001', '1635820501', 'HAIRUL ANISA DATAU', '', 'Laki - laki', 'Gorontalo', '2003-07-21', ''),
('7571046306050001', '1635820501', 'DEA PUSPITA ABAS', '', 'Perempuan', 'GORONTALO', '2005-06-23', ''),
('7571046401050001', '1635820501', 'Celsi Olivia Mohamad', '', 'Perempuan', 'Gorontalo', '2005-01-24', ''),
('7571046404050001', '1635820507', 'Villa Aprillia A. Ibrahim', '', 'Perempuan', 'Gorontalo', '2005-04-24', ''),
('7571046406050001', '1635820507', 'Nurmufliha Abdullah', '', 'Perempuan', 'Gorontalo', '2005-06-24', ''),
('7571046511050001', '1635820507', 'SITI NOVALINDA IDRIS', '', 'Perempuan', 'GORONTALO', '2005-11-25', ''),
('7571046809050001', '1635820507', 'ANISA DWI SEPTIANIE WIRONO', '', 'Perempuan', 'GORONTALO', '2005-09-28', ''),
('7571050109030002', '1635820512', 'Galang Rambu Anarki Samaun', '', 'Laki - laki', 'Gorontalo', '2003-09-01', ''),
('7571050208050001', '1635820512', 'Andri Hasan', '', 'Laki - laki', 'Gorontalo', '2005-08-02', ''),
('7571050605040001', '1635820512', 'Gufran Djalali', '', 'Laki - laki', 'Gorontalo', '2004-05-06', ''),
('7571050608050001', '1635820512', 'Mohamad Ridwan Daud', '', 'Laki - laki', 'Gorontalo', '2005-08-06', ''),
('7571051310030003', '1635820518', 'Mohamad Rizki Suleman', '', 'Laki - laki', 'Gorontalo', '2003-10-13', ''),
('7571052011040003', '1635820518', 'NOVAL EKA PUTRA ARIFIN', '', 'Laki - laki', 'GORONTALO', '2004-11-20', ''),
('7571052406050003', '1635820518', 'Muhamad Arif Sono', '', 'Laki - laki', 'Gorontalo', '2005-06-22', ''),
('7571052411050002', '1635820518', 'Rifaldo Alionga', '', 'Laki - laki', 'Gorontalo', '2004-11-24', ''),
('7571053107050002', '1635820523', 'HERDI GURDAM', '', 'Laki - laki', 'Gorontalo', '2005-07-31', ''),
('7571054101060002', '1635820523', 'Elfira Tanango', '', 'Perempuan', 'Gorontalo', '2006-01-01', ''),
('7571054204050004', '1635820523', 'Rahmatia Latif', '', 'Perempuan', 'Gorontalo', '2005-04-02', ''),
('7571054505030003', '1635820523', 'SASMITA AMRAIN', '', 'Perempuan', 'Gorontalo', '2003-05-05', ''),
('7571054510040001', '1635820527', 'ZIHAN KALATI', '', 'Perempuan', 'GORONTALO', '2004-10-05', ''),
('7571054711050003', '1635820527', 'Ririn Fitria Rauf', '', 'Perempuan', 'Gorontalo', '2005-11-07', ''),
('7571054905050001', '1635820527', 'Nur Azizah Fika Putri Djalil', '', 'Perempuan', 'Gorontalo', '2005-05-09', ''),
('7571055211040001', '1635820527', 'Dwi Fitriyani Asiku', '', 'Perempuan', 'Gorontalo', '2004-11-12', ''),
('7571055305050002', '1635820533', 'Merlinda Putri Mamiyasa', '', 'Perempuan', 'Gorontalo', '2005-05-13', ''),
('7571055411050001', '1635820533', 'Ayu Daiko', '', 'Perempuan', 'Gorontalo', '2005-11-14', ''),
('7571055506050004', '1635820533', 'NOVITA YUNIARTI NASARU', '', 'Perempuan', 'GORONTALO', '2005-06-15', ''),
('7571055703060001', '1635820533', 'Najwa Nurfadhila Lawani', '', 'Perempuan', 'Gorontalo', '2006-03-17', ''),
('7571055709050003', '1635820538', 'SABRIANA SEFTIYANI ISHAK', '', 'Perempuan', 'GORONTALO', '2005-09-17', ''),
('7571055905050002', '1635820538', 'Siti Fadila Umar', '', 'Perempuan', 'Gorontalo', '2005-05-19', ''),
('7571055909060002', '1635820538', 'Fauzia Nusura', '', 'Perempuan', 'Gorontalo', '2006-09-19', ''),
('7571056306050003', '1635820538', 'Adellia P. Abd. Rahim', '', 'Perempuan', 'Gorontalo', '2005-06-23', ''),
('7571056310050001', '1635820544', 'NABILA R. HEMUTO', '', 'Perempuan', 'Gorontalo', '2005-10-23', ''),
('7571056509050001', '1635820544', 'Nurain Pratiwi Mahmud', '', 'Perempuan', 'Gorontalo', '2005-09-25', ''),
('7571056603050002', '1635820544', 'Nazwa Nusi', '', 'Perempuan', 'Gorontalo', '2005-03-26', ''),
('7571056605050001', '1635820544', 'Khairunnisa Abd. Latif', '', 'Perempuan', 'Gorontalo', '2005-05-26', ''),
('7571056908050001', '1635820549', 'Salsa Maharani Thaib', '', 'Perempuan', 'Gorontalo', '2005-08-29', ''),
('7571057101060001', '1635820549', 'Amelia Hadji', '', 'Perempuan', 'Gorontalo', '2006-01-31', ''),
('7571057103050001', '1635820549', 'ANABELIA RIZKIYANTI LAIYA', '', 'Perempuan', 'Gorontalo', '2005-03-31', ''),
('7571060104050002', '1635820549', 'Devira Dwi Aprillia Abdullah', '', 'Perempuan', 'Gorontalo', '2005-04-01', ''),
('7571060307050002', '1635820554', 'Prabu Satya Buge', '', 'Laki - laki', 'Gorontalo', '2005-07-03', ''),
('7571060309050001', '1635820554', 'Faizul Anwar Taliki', '', 'Laki - laki', 'Gorontalo', '2005-09-03', ''),
('7571060405690001', '1635820554', 'ATIKA BUMBAY', '', 'Perempuan', 'GORONTALO', '2006-11-30', ''),
('7571060806050001', '1635820554', 'Rizki Ahmad R. Sabune', '', 'Laki - laki', 'Gorontalo', '2005-06-08', ''),
('7571060907050001', '1635820559', 'YUSRIANTO ISMAIL', '', 'Laki - laki', 'GORONTALO', '2005-07-09', ''),
('7571060907050002', '1635820559', 'Rio I. Kadir', '', 'Laki - laki', 'Gorontalo', '2005-07-09', ''),
('7571061102040003', '1635820559', 'Arya Saputra Halid', '', 'Laki - laki', 'Gorontalo', '2004-02-11', ''),
('7571061201040002', '1635820559', 'Moh. Fadel Kartam', '', 'Laki - laki', 'Gorontalo', '2004-01-12', ''),
('7571061402050002', '1635820564', 'Rival Usman', '', 'Laki - laki', 'Gorontalo', '2005-02-14', ''),
('7571061611040002', '1635820564', 'Almahdi A. Palaloi', '', 'Laki - laki', 'Gorontalo', '2004-11-16', ''),
('7571061811050003', '1635820564', 'Moh. Fikri Anwar', '', 'Laki - laki', 'Gorontalo', '2004-11-12', ''),
('7571061909040001', '1635820564', 'MAHYUDIN PODUNGGE', '', 'Laki - laki', 'GORONTALO', '2004-09-19', ''),
('7571062002050001', '1635820570', 'RAHMAT MUHARAM', '', 'Laki - laki', 'GORONTALO', '2005-02-20', ''),
('7571062310030001', '1635820570', 'ISKANDAR TAHIR', '', 'Laki - laki', 'GORONTALO', '2003-10-23', ''),
('7571062312040001', '1635820570', 'Ahmad Aditya R. Latif', '', 'Laki - laki', 'Gorontalo', '2004-12-23', ''),
('7571062404050002', '1635820570', 'Mohammad Ichsan Kamali', '', 'Laki - laki', 'Gorontalo', '2005-04-24', ''),
('7571062503050002', '1635820577', 'ABDUL RAHMAN HASAN', '', 'Laki - laki', 'GORONTALO', '2005-03-25', ''),
('7571062901060001', '1635820577', 'Ridho Akbar Dalanggo', '', 'Laki - laki', 'Gorontalo', '2006-01-29', ''),
('7571063107050001', '1635820577', 'Muhammad Rizki Amrullah Putra Tuliabu', '', 'Laki - laki', 'Gorontalo', '2005-07-30', ''),
('7571064102030001', '1635820577', 'Irma Abdullah', '', 'Perempuan', 'Gorontalo', '2003-02-01', ''),
('7571064102060001', '1635820582', 'Nadia Ainu Rahmi Abdullah', '', 'Perempuan', 'Manado', '2006-02-01', ''),
('7571064108050001', '1635820582', 'SAFIA ADAM', '', 'Perempuan', 'GORONTALO', '2005-08-01', ''),
('7571064205050002', '1635820582', 'Ananda S Gionte', '', 'Perempuan', 'Gorontalo', '2005-05-02', ''),
('7571064408040001', '1635820582', 'Yananda Adam', '', 'Perempuan', 'Gorontalo', '2004-08-04', ''),
('7571064907050001', '1635820588', 'Fitra Siti Ansalni Ibrahim', '', 'Perempuan', 'Gorontalo', '2005-07-09', ''),
('7571065006060001', '1635820588', 'NAFILAH MALABAR', '', 'Perempuan', 'GORONTALO', '2005-06-10', ''),
('7571065102050001', '1635820588', 'Filzah Ishak', '', 'Perempuan', 'Gorontalo', '2005-02-11', ''),
('7571065104050001', '1635820588', 'Sitti Nurlian Podungge', '', 'Perempuan', 'Gorontalo', '2005-04-11', ''),
('7571065107050001', '1635820593', 'Bilqis Juliani Matulu', '', 'Perempuan', 'Gorontalo', '2005-07-11', ''),
('7571065109050001', '1635820593', 'SITI RAHMAWATI PADJA', '', 'Perempuan', 'GORONTALO', '2005-09-11', ''),
('7571065202050001', '1635820593', 'SAVIRA HUSAIN', '', 'Perempuan', 'GORONTALO', '2005-02-12', ''),
('7571065403060001', '1635820593', 'Miranda Amelia Harun', '', 'Perempuan', 'Gorontalo', '2006-03-14', ''),
('7571065408040001', '1635820598', 'Ingka Agustin', '', 'Perempuan', 'Gorontalo', '2004-08-14', ''),
('7571065512830004', '1635820598', 'Syawal Fitrah. R. Mohamad', '', 'Laki - laki', 'Gorontalo', '2005-11-03', ''),
('7571065611040002', '1635820598', 'Gedis Novelia K. Abdullah', '', 'Perempuan', 'Gorontalo', '2004-11-16', ''),
('7571065701050001', '1635820598', 'SAGITA NESTAVIA MAKU', '', 'Perempuan', 'GORONTALO', '2005-01-17', ''),
('7571065806050002', '1635820604', 'Mariyati Abas', '', 'Perempuan', 'Gorontalo', '2005-06-18', ''),
('7571065808050001', '1635820604', 'Sri Anggraini Bahsowan', '', 'Perempuan', 'Gorontalo', '2005-08-18', ''),
('7571066312040001', '1635820604', 'LIDYAWATI BASINUNG', '', 'Perempuan', 'GORONTALO', '2004-12-23', ''),
('7571066402050001', '1635820604', 'Dina Apriliani Ali', '', 'Perempuan', 'Gorontalo', '2005-04-24', ''),
('7571066408050001', '1635820609', 'Fatmah Y. Lapasau', '', 'Perempuan', 'Gorontalo', '2005-08-24', ''),
('7571066501050005', '1635820609', 'Nurhayati Yasin', '', 'Perempuan', 'Gorontalo', '2005-01-25', ''),
('7571066504050001', '1635820609', 'Nirmala Sela S. Yasin', '', 'Perempuan', 'Gorontalo', '2005-04-25', ''),
('7571066504060001', '1635820609', 'Anatasya Goi', '', 'Perempuan', 'Gorontalo', '2006-04-25', ''),
('7571066602050001', '1635820613', 'Alysya Alfadila Ano', '', 'Perempuan', 'Gorontalo', '2005-02-26', ''),
('7571066610050002', '1635820613', 'Dwi Amelia Putri R. Tulie', '', 'Perempuan', 'Gorontalo', '2005-10-26', ''),
('7571066707050001', '1635820613', 'Riskawati Rahim', '', 'Perempuan', 'Gorontalo', '2005-07-27', ''),
('7571066711050002', '1635820613', 'Sri Novita K. Baderan', '', 'Perempuan', 'Gorontalo', '2005-11-27', ''),
('7571070212040001', '1635820618', 'RIZKI TUMBINGO', '', 'Laki - laki', 'GORONTALO', '2004-12-02', ''),
('7571071006050001', '1635820618', 'ISMAIL PAUDI', '', 'Laki - laki', 'GORONTALO', '2005-06-10', ''),
('7571072105060001', '1635820618', 'DANIAL NANI', '', 'Laki - laki', 'GORONTALO', '2006-05-21', ''),
('7571074403050001', '1635820618', 'Sri Nurain Helingo', '', 'Perempuan', 'Gorontalo', '2005-03-04', ''),
('7571074411040001', '1635820624', 'Salsa Shabila Mbuinga', '', 'Perempuan', 'Gorontalo', '2004-11-04', ''),
('7571074609050001', '1635820624', 'Nazwa Ahmad', '', 'Perempuan', 'Gorontalo', '2005-09-06', ''),
('7571074705050001', '1635820624', 'Rivana Vriski', '', 'Perempuan', 'Gorontalo', '2005-05-07', ''),
('7571074812050001', '1635820624', 'SINDI SUKMAWATI A. HABI', '', 'Perempuan', 'GORONTALO', '2005-12-08', ''),
('7571075312050001', '1635820629', 'Putri Regina Makmur', '', 'Perempuan', 'Gorontalo', '2005-12-13', ''),
('7571075312050002', '1635820629', 'Nurinda Yahya', '', 'Perempuan', 'Gorontalo', '2005-12-13', ''),
('7571076306050001', '1635820629', 'Siti Rahmawati', '', 'Perempuan', 'Palu', '2005-08-25', ''),
('7571082201050001', '1635820629', 'Tasrit Rivai', '', 'Laki - laki', 'Gorontalo', '2005-01-22', ''),
('7571084205050001', '1635820634', 'SITRIA KIWOL', '', 'Perempuan', 'GORONTALO', '2005-05-01', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `nama`, `tanggal`, `bulan`, `tahun`, `keterangan`) VALUES
(1, 'Pembangunan BUMDES depot air isi ulang', '2021-03-10', 'Maret', 2021, 'Lokasi depot air ada di dusun sabuwa, depan rumahnya ka pulu'),
(2, 'Rapat agenda awal tahun', '2021-01-20', 'Januari', 2021, 'Ballrom sumberia yang dihadiri langsung oleh camat'),
(3, 'Pelaksanaan pasar murah', '2021-07-09', 'Juli', 2021, 'Upaya pemerintah dalam membantu masyarakat yang memasuki bulan ramadhan'),
(4, 'Melakukan vaksinasi dengan pemberian sembako', '2021-07-22', 'Juli', 2021, 'Pelaksanaan vaksin di dua titik. dibalai desa dan puskesmas'),
(5, 'imunisasi rutin', '2021-02-23', 'Februari', 2021, 'biaya pemenuhan gizi ibu dan bayi'),
(6, 'Biaya perjalanan dinas ayahanda dan bendahara', '2021-05-25', 'Mei', 2021, 'pergi selama 1 minggu ke jakarta untuk observasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian`
--

CREATE TABLE `rincian` (
  `id` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `biaya` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `pembuat` varchar(250) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_surat`, `keterangan`, `penerima`, `pembuat`, `tanggal`) VALUES
(2, 'B.15/PNTG/XI/2021', 'Surat Keterangan Kurang Mampu', '7571060806050001', '10041993', 1636236852),
(3, '12/XI/2021', 'Surat Keterangan Kurang Mampu', '7571066610050002', '10041993', 1636240482),
(4, '13/XI/2021', 'Surat Keterangan Kurang Mampu', '7571022307050001', '10041993', 1636242374),
(5, '14/XI/2021', 'Surat Keterangan Kurang Mampu', '7501103112040001', '10041993', 1636248393);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `gambar`, `ket`, `status`) VALUES
(1, 'Abd, Rahman Hulopi', '', '', '', 'kades'),
(10041993, 'Ridwan Kadir', '2df74d415ee7815d9b95b8d3d769d172', '', 'MTIz', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rincian`
--
ALTER TABLE `rincian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
