-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 03:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_funnyzoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `kd_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  `tgl_berita` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`kd_berita`, `judul_berita`, `isi_berita`, `foto_berita`, `tgl_berita`, `kd_status`) VALUES
(1, 'HARI ANAK NASIONAL 23 JULI 2017', '<p>Ribuan anak terdiri dari siswa SD, SMP, dan SMA dari seluruh penjuru Kota Bogor masuk ke Funny Zoo Bogor secara gratis mereka&nbsp;menghadiri puncak kegiatan Hari Anak Nasional (HAN) 2017 yang diselenggarakan di Funny Zoo Bogor, Minggu, 23 Juli 2017.</p>\r\n\r\n<p>Kemudian disediakan pula berbagai macam lomba anak-anak, menonton fauna show&nbsp;dan lain sebagainya, ada juga pertunjukan musik tradisional yang di bawakan oleh anak-anak siswa/siswi se-Kota Bogor.</p>\r\n\r\n<p>Selain itu, acara peringatan hari anak di Kota Bogor ini juga dihadiri oleh Walikota&nbsp;Bima Arya, Menteri Pemberdayaan Perempuan dan Perlindungan Anak, dan ada juga pemerhati anak Kak Seto.</p>\r\n', 'HAN.jpg', '2017-07-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `kd_fasilitas` int(11) NOT NULL,
  `judul_fasilitas` varchar(50) NOT NULL,
  `isi_fasilitas` text NOT NULL,
  `foto_fasilitas` varchar(50) NOT NULL,
  `tgl_fasilitas` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`kd_fasilitas`, `judul_fasilitas`, `isi_fasilitas`, `foto_fasilitas`, `tgl_fasilitas`, `kd_status`) VALUES
(1, 'RESTORAN ZOO', '<p>Reestoran yang berada di lantai satu merupakan fasilitas yang menyuguhkan pengalaman bersantap dengan cara yang berbeda. Jungle Fast Food hadir dengan konsep restoran berputar yang memperlihatkan kandang binatang yang dipisahkan dengan kaca transparan.</p>\r\n\r\n<p>Di area lainnya, susunan batu alam memenuhi sebagian dindingnya, dedaunan menutupi plafon dengan berbagai diorama hewan. Aneka boneka binatang serta kandang di restoran ini memberikan sensasi layaknya bersantap di tengah hutan.</p>\r\n', 'resto_zoo.jpg', '2017-07-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fauna`
--

CREATE TABLE `tbl_fauna` (
  `kd_fauna` int(11) NOT NULL,
  `judul_fauna` varchar(50) NOT NULL,
  `isi_fauna` text NOT NULL,
  `foto_fauna` varchar(50) NOT NULL,
  `tgl_fauna` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fauna`
--

INSERT INTO `tbl_fauna` (`kd_fauna`, `judul_fauna`, `isi_fauna`, `foto_fauna`, `tgl_fauna`, `kd_status`) VALUES
(1, 'GAJAH', '<p>MAMALIA : GAJAH</p>\r\n', 'Gajah.jpg', '2017-07-09', 1),
(2, 'BABI RUSA', '<p>MAMALIA : BABI RUSA</p>\r\n', 'baby-rusa-thumb.jpg', '2017-07-09', 1),
(3, 'BERUANG MADU', '<p>MAMALIA : BERUANG MADU</p>\r\n', 'beruang-madu-thumb.jpg', '2017-07-09', 1),
(4, 'GORILA', '<p>MAMALIA : GORILA</p>\r\n', 'Gorila-thumb.jpg', '2017-07-09', 1),
(5, 'HARIMAU PUTIH', '<p>MAMALIA : HARIMAU PUTIH</p>\r\n', 'harimau-putih-thumb.jpg', '2017-07-09', 1),
(6, 'HARIMAU SUMATERA', '<p>MAMALIA : HARIMAU SUMATERA</p>\r\n', 'harimau-sumatera-thumb.jpg', '2017-07-09', 1),
(7, 'RUSA SULAWESI', '<p>MAMALIA : RUSA SULAWESI</p>\r\n', 'rusa-sulawesi-thumb.jpg', '2017-07-09', 1),
(8, 'SINGA', '<p>MAMALIA : SINGA</p>\r\n', 'Singa-thumb.jpg', '2017-07-09', 1),
(9, 'BIAWAK HITAM', '<p>REPTIL : BIAWAK HITAM</p>\r\n', 'black_lizard_biawak_hitam.jpg', '2017-07-09', 1),
(10, 'BIAWAK BIRU', '<p>REPTIL : BIAWAK BIRU</p>\r\n', 'Blue-Tongue-Lizard.jpg', '2017-07-09', 1),
(11, 'BIAWAK HIJAU', '<p>REPTIL : BIAWAK HIJAU</p>\r\n', 'green-lizard-icon.jpg', '2017-07-09', 1),
(12, 'KING COBRA', '<p>REPTIL : KING COBRA</p>\r\n', 'king-cobra-icon.jpg', '2017-07-09', 1),
(13, 'KOMODO', '<p>REPTIL : KOMODO</p>\r\n', 'komodo-icon.jpg', '2017-07-09', 1),
(14, 'KURA-KURA PIPI MERAH', '<p>REPTIL : KURA-KURA PIPI MERAH</p>\r\n', 'kura-pipi-merah-thumb.jpg', '2017-07-09', 1),
(15, 'PHYTON ALBINO', '<p>REPTIL : PHYTON ALBINO</p>\r\n', 'Phyton-albino-icon1.jpg', '2017-07-09', 1),
(16, 'SANCA KEMBANG', '<p>REPTIL : SANCA KEMBANG</p>\r\n', 'sanca-kembang-thumb.jpg', '2017-07-09', 1),
(17, 'BEO', '<p>AVES : BEO</p>\r\n', 'beo-thumb.jpg', '2017-07-09', 1),
(18, 'ELANG ABU', '<p>AVES : ELANG ABU</p>\r\n', 'elang-abu-thumb1.jpg', '2017-07-09', 1),
(19, 'ELANG IRIAN', '<p>AVES : ELANG IRIAN</p>\r\n', 'elang-irian-thumb.jpg', '2017-07-09', 1),
(20, 'KASUARI GELAMBIR BIRU', '<p>AVES : KASUARI GELAMBIR BIRU</p>\r\n', 'kasuari_gelambir_tunggal.jpg', '2017-07-09', 1),
(21, 'MERAK BIRU', '<p>AVES : MERAK BIRU</p>\r\n', 'merak-thumb.jpg', '2017-07-09', 1),
(22, 'PELIKAN', '<p>AVES : PELIKAN</p>\r\n', 'pelikan-thumb.jpg', '2017-07-09', 1),
(23, 'ARAPAIMA', '<p>PISCES : ARAPAIMA</p>\r\n', 'arapaima.jpg', '2017-07-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flora`
--

CREATE TABLE `tbl_flora` (
  `kd_flora` int(11) NOT NULL,
  `judul_flora` varchar(50) NOT NULL,
  `isi_flora` text NOT NULL,
  `foto_flora` varchar(50) NOT NULL,
  `tgl_flora` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_flora`
--

INSERT INTO `tbl_flora` (`kd_flora`, `judul_flora`, `isi_flora`, `foto_flora`, `tgl_flora`, `kd_status`) VALUES
(3, 'BERINGIN', '<p>BERINGIN</p>\r\n', 'beringin_thumb.jpg', '2017-07-09', 1),
(4, 'KECAPI', '<p>KECAPI</p>\r\n', 'kecapi-thumb.jpg', '2017-07-09', 1),
(5, 'BUNI', '<p>BUNI</p>\r\n', 'Buni_thumb.jpg', '2017-07-09', 1),
(6, 'KEPEL', '<p>KEPEL</p>\r\n', 'kepel-thumb.jpg', '2017-07-09', 1),
(7, 'MANGGIS', '<p>MANGGIS</p>\r\n', 'manggis-thumb1.jpg', '2017-07-09', 1),
(8, 'MENTENG', '<p>MENTENG</p>\r\n', 'menteng-thumb.jpg', '2017-07-09', 1),
(9, 'SAWO', '<p>SAWO</p>\r\n', 'sawo-thumb.jpg', '2017-07-09', 1),
(10, 'KEMENYAN', '<p>KEMENYAN</p>\r\n', 'kemenyan.jpg', '2017-07-13', 1),
(11, 'KENANGA', '<p>KENANGA</p>\r\n', 'kenanga.jpg', '2017-07-13', 1),
(12, 'BUNGA BANGKAI', '<p>BUNGA BANGKAI</p>\r\n', 'Bungabangkai.jpg', '2017-07-13', 1),
(13, 'SAPU TANGAN', '<p>SAPU TANGAN</p>\r\n', 'saputangan.jpg', '2017-07-13', 1),
(15, 'BERINGIN', '<p>BERINGIN</p>\r\n', 'Bougenvil.jpg', '2017-07-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `kd_home` int(11) NOT NULL,
  `judul_home` varchar(50) NOT NULL,
  `foto_home1` varchar(50) NOT NULL,
  `foto_home2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ip`
--

CREATE TABLE `tbl_ip` (
  `kd_ip` int(11) NOT NULL,
  `judul_ip` varchar(50) NOT NULL,
  `isi_ip` text NOT NULL,
  `foto_ip` varchar(100) NOT NULL,
  `tgl_ip` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ip`
--

INSERT INTO `tbl_ip` (`kd_ip`, `judul_ip`, `isi_ip`, `foto_ip`, `tgl_ip`, `kd_status`) VALUES
(1, 'PETA dan PETUNJUK ARAH', '<p>Phone: (0251) 8322187</p>\r\n', 'peta.jpg', '2017-07-14', 1),
(3, 'PEMANDU WISATA', '<p>Funny Zoo Bogor&nbsp;menyediakan pemandu wisata bagi siswa TK, SD, SMP dan SMU.</p>\r\n\r\n<p>Pemandu akan berkeliling selama 1 &ndash; 2 jam mendampingi siswa sambil menerangkan satwa-satwa di Funny Zoo Bogor. Kegiatan siswa ditemani pemandu akan membuat kunjungan lebih terarah dan kental dengan nuansa belajar di alam. Pelayanan pemandu dilaksanakan pada hari Selasa &ndash; Jumat pukul 09.00 &ndash; 14.00 wib melalui&nbsp;</p>\r\n', 'Pemandu-Wisata.jpg', '2017-07-09', 1),
(4, 'PEMESANAN', '<p>Terdapat beberapa aula untuk pertemuan antara lain:<br />\r\nRuang auditorium, ruang informasi, pendopo, panggung, dan lain-lain.</p>\r\n\r\n<p>Untuk reservasi silahkan hubungi kontak berikut:</p>\r\n\r\n<p>Tel/Fax : (0251) 8322187<br />\r\nEmail : fzbogor@mail.go.id</p>\r\n', 'service.png', '2017-07-09', 1),
(5, 'JADWAL MAKAN SATWA', '<table border="0" cellpadding="0" cellspacing="10">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>2:30 PM &ndash; 2:45 PM</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Waktu makan siang Gajah Sumatera</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>3:00 PM &ndash; 3:15 PM</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Jadwal makan&nbsp;sore Gajah Sumatera</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>3:00 PM &ndash; 3:15 PM</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Jadwal makan sore Komodo</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table border="0" cellpadding="0" cellspacing="0">\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>12:00 PM &ndash; 12:30 PM</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Jadwal makan siang Gorilla</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'jadwal.jpg', '2017-07-11', 1),
(6, 'TIKET', '<p>BERLAKU TAHUN 2017</p>\r\n', 'tiket_baru.PNG', '2017-07-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `kd_promo` int(11) NOT NULL,
  `judul_promo` varchar(50) NOT NULL,
  `isi_promo` text NOT NULL,
  `foto_promo` varchar(100) NOT NULL,
  `tgl_promo` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`kd_promo`, `judul_promo`, `isi_promo`, `foto_promo`, `tgl_promo`, `kd_status`) VALUES
(1, 'PROMOSI LIBURAN LEBARAN & TAHUN AJARAN BARU', '<p>PROMOSI LIBURAN LEBARAN &amp; TAHUN AJARAN BARU</p>\r\n', 'PROMO.jpg', '2017-07-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarana`
--

CREATE TABLE `tbl_sarana` (
  `kd_sarana` int(11) NOT NULL,
  `judul_sarana` varchar(50) NOT NULL,
  `isi_sarana` text NOT NULL,
  `foto_sarana` varchar(50) NOT NULL,
  `tgl_sarana` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sarana`
--

INSERT INTO `tbl_sarana` (`kd_sarana`, `judul_sarana`, `isi_sarana`, `foto_sarana`, `tgl_sarana`, `kd_status`) VALUES
(1, 'KUDA TUNGGANG', '<p>Tidak seperti kuda pacu. Kuda di sini adalah kuda pony yang tidak terlalu besar. Anda akan didampingi perawat kuda untuk mengelilingi area taman satwa anak. Tiket naik kuda hanya Rp. 5000,- per orang untuk satu kali putaran.</p>\r\n', 'Elephant.jpg', '2017-07-12', 1),
(2, 'ONTA TUNGGANG', '<p>Tidak perlu pergi ke Arab Saudi atau ke Mesir untuk bisa merasakan nikmatnya naik Onta. Cukuplah di Taman Margasatwa Ragunan anda bisa menunggang Onta. Terbayang hamparan pasir yang luas saat anda mengendarai Onta punuk satu ini. Untuk harga tiket naik Onta Rp. 7.500,-</p>\r\n', 'ONTA.jpg', '2017-07-12', 1),
(3, 'PERAHU BEBEK', '<p>Taman perahu merupakan kolam besar, membentang dari utara ke selatan seluas 2.000 m2 , terdapat beberapa pulau di tengahnya. Pulau-pulau buatan ini menambah indahnya perjalanan anda mengelilingi dengan menggunakan perahu bebek. Untuk menikmati perahu bebek&nbsp;anda dikenakan tiket Rp. 15.000,-</p>\r\n', 'perahu.jpg', '2017-07-12', 1),
(4, 'SEPEDA', '<p>Dengan Harga Sepeda Tunggal Rp. 10.000,- / orang dan Sepeda Ganda Rp. 15.000, - / orang anda&nbsp;bisa berkeliling untuk menikmati suasana indahnya Funny Zoo Bogor sekaligus bisa menghemat waktu dibandingkan dengan berjalan kaki. Kelebihan lainnya adalah, pengunjung bisa menelusuri jalan-jalan yang tidak dilalui oleh mobil, sekaligus bisa bersantai sejenak di beberapa sudut Funny Zoo Bogor untuk menikmati suasana nyaman di sekitarnya.</p>\r\n', 'img-20131214-03973.jpg', '2017-07-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `kd_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`kd_status`, `status`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tk`
--

CREATE TABLE `tbl_tk` (
  `kd_tk` int(11) NOT NULL,
  `judul_tk` varchar(50) NOT NULL,
  `isi_tk` text NOT NULL,
  `foto_tk` varchar(100) NOT NULL,
  `tgl_tk` date NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tk`
--

INSERT INTO `tbl_tk` (`kd_tk`, `judul_tk`, `isi_tk`, `foto_tk`, `tgl_tk`, `kd_status`) VALUES
(2, 'SEJARAH SINGKAT', '<p>Funny Zoo Bogor merupakan salah satu objek wisata alam flora dan fauna di Kota Bogor, Jawa Barat, Indonesia.&nbsp;Funny Zoo Bogor terletak di pusat kota bogor.Funny Zoo Bogor ini pada awalnya dikenal dengan nama Derenten (dalam Bahasa sunda, dierentuin) yang artinya kebun binatang.Funny Zoo Bogor didirikan pada tahun 1930 oleh Bogor Zoological Park, yang dipelopori oleh Direktur Bank Dennis, Hoogland.Pengesahan pendirian Funny Zoo Bogor ini diwenangi oleh Gubernur Jenderal Hindia Belanda dan pengesahannya dituangkan pada keputusan 12 April 1933 No.32. Pada saat Jepang menguasai daerah ini, tempat wisata ini kurang terkelola, hingga pada tahun 1948, dilakukan rehabilitasi untuk mengembalikan fungsi tempat wisata ini.&nbsp;Pada tahun 1956, atas inisiatif dari Raden Ema Bratakusumah, Bogor Zoological Park dibubarkan dan berganti menjadi Funny Zoo Bogor pada tahun 1957.&nbsp;Kebun&nbsp;binatang ini menempati luas lahan 13,5 ha yang topografinya bergelombang dengan penggunaan 18,25% untuk areal perkandangan, 55,20% untuk pertamanan dan lesehan, 4,7% untuk taman ria dan kolam perahu, dan 2,4% untuk pengolahan sampah.&nbsp;Sisanya digunakan untuk bangunan kantor, museum, dan jalan.</p>\r\n', 'c1.jpg', '2017-07-09', 1),
(3, 'KONTAK KAMI', '<p><strong>FUNNY ZOO BOGOR</strong><br />\r\nJl. Ir. H. Juanda No. 13 Bogor Jawa Barat, Indonesia<br />\r\nTelepon (0251) 8311362 - 8336871<br />\r\ne-mail : fzbogor@mail.go.id<br />\r\nPhone: (0251) 8322184<br />\r\nFax. (0251) 8322184</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'kontak.jpg', '2017-07-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_user` varchar(100) NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kd_user`, `nama`, `username`, `password`, `foto_user`, `kd_status`) VALUES
(2, 'Fani', 'fans', '1234', 'Jellyfish.jpg', 1),
(3, 'Afika', 'kokorotomo', '1234', '2014-12-03 05.29.51.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`kd_berita`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`kd_fasilitas`);

--
-- Indexes for table `tbl_fauna`
--
ALTER TABLE `tbl_fauna`
  ADD PRIMARY KEY (`kd_fauna`);

--
-- Indexes for table `tbl_flora`
--
ALTER TABLE `tbl_flora`
  ADD PRIMARY KEY (`kd_flora`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`kd_home`);

--
-- Indexes for table `tbl_ip`
--
ALTER TABLE `tbl_ip`
  ADD PRIMARY KEY (`kd_ip`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`kd_promo`);

--
-- Indexes for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  ADD PRIMARY KEY (`kd_sarana`);

--
-- Indexes for table `tbl_tk`
--
ALTER TABLE `tbl_tk`
  ADD PRIMARY KEY (`kd_tk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `kd_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `kd_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fauna`
--
ALTER TABLE `tbl_fauna`
  MODIFY `kd_fauna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_flora`
--
ALTER TABLE `tbl_flora`
  MODIFY `kd_flora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `kd_home` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ip`
--
ALTER TABLE `tbl_ip`
  MODIFY `kd_ip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `kd_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sarana`
--
ALTER TABLE `tbl_sarana`
  MODIFY `kd_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_tk`
--
ALTER TABLE `tbl_tk`
  MODIFY `kd_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
