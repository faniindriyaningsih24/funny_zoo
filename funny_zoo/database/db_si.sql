-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 10:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `kode_alamat` int(11) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`kode_alamat`, `nama_instansi`, `jalan`, `kota`, `telepon`) VALUES
(1, 'STIKOM Binaniaga Bogor', 'Jl. Mayor Oking Jayaatmaja No. 27', 'Kota Bogor', '(0251) 834-3980');

-- --------------------------------------------------------

--
-- Table structure for table `bergabung`
--

CREATE TABLE `bergabung` (
  `kd_bergabung` int(11) NOT NULL,
  `nama_bergabung` varchar(50) NOT NULL,
  `link_bergabung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bergabung`
--

INSERT INTO `bergabung` (`kd_bergabung`, `nama_bergabung`, `link_bergabung`) VALUES
(1, 'Keluarga STIKOM Binaniaga', 'https://id-id.facebook.com/keluarga.stikombinaniaga'),
(2, 'Website STIKOM Binaniaga', 'http://www.stikombinaniaga.ac.id/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `kd_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(55) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`kd_gambar`, `nama_gambar`, `keterangan`) VALUES
(1, 'kuliah3-full.jpg', 'Kegiatan Perkuliahan Mahasiswa STIKOM Binaniaga Bogor'),
(2, 'kuliah3.jpg', 'Kegiatan Perkuliahan'),
(3, 'kuliah2.jpg', 'Kegiatan Perkuliahan'),
(4, 'kuliah2-full.jpg', 'Kegiatan Perkuliahan STIKOM Binaniaga Bogor'),
(5, 'presentasi.jpg', 'Presentasi Mahasiswa'),
(6, 'presentasi-full.jpg', 'Kegiatan Presentasi Mahasiswa'),
(7, 'sidang1.jpg', 'Sidang Skripsi'),
(8, 'sidang1-full.jpg', 'Sidang Skripsi'),
(9, 'sidang3.jpg', 'Sidang'),
(10, 'sidang3-full.jpg', 'Kegiatan Sidang Skripsi'),
(11, 'workshop.jpg', 'Workshop'),
(12, 'workshop-full.jpg', 'Kegiatan Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vm`
--

CREATE TABLE `jenis_vm` (
  `kd_jvm` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_vm`
--

INSERT INTO `jenis_vm` (`kd_jvm`, `jenis`) VALUES
(1, 'Visi'),
(2, 'Misi');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `kd_status` int(11) NOT NULL,
  `status_vm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`kd_status`, `status_vm`) VALUES
(1, 'Publish'),
(2, 'Unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `kd_tentang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`kd_tentang`, `nama`, `jabatan`, `gambar`) VALUES
(1, 'DR. Ismulyana Djan, SE, MM', 'Ketua STIKOM Binaniaga Bogor', 'photo1.PNG'),
(2, 'Irmayansyah, M.Kom', 'Wakil Ketua Bidang Akademik', 'photo2.PNG'),
(3, 'Dra. Lina Herlina', 'Wakil Ketua Bidang Administrasi Umum dan Keuangan', 'photo3.PNG'),
(4, 'Ir. Hardi Djamhur', 'Pembantu Ketua 3', 'photo4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `nama`, `username`, `password`) VALUES
(1, 'Muqiit T. Kastrilia', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vm`
--

CREATE TABLE `vm` (
  `kd_vm` int(11) NOT NULL,
  `isi` text NOT NULL,
  `kd_jvm` int(11) NOT NULL,
  `kd_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vm`
--

INSERT INTO `vm` (`kd_vm`, `isi`, `kd_jvm`, `kd_status`) VALUES
(1, 'Tahun 2018 menjadi program studi pilihan masyarakat yang memenuhi standar kebutuhan di bidang Corporate Information System, E-business Management dan Database Development and Application', 1, 1),
(2, 'Melaksanakan pengajaran di bidang Sistem Informasi Korporasi (Corporate Information System/CoIS), Pengelolaan E-Business (E-Business Management/E-BM), dan Pengembangan dan Aplikasi Database (Database Development & Application/DBA).', 2, 1),
(3, 'Melaksanakan penelitian di bidang Sistem Informasi Korporasi (Corporate Information System/CoIS), Pengelolaan E-Business (E-Business Management/E-BM), dan Pengembangan dan Aplikasi Database (Database Development & Application/DBA).', 2, 1),
(4, 'Memberikan pelayanan kepada masyarakat di bidang Sistem Informasi Korporasi (Corporate Information System/CoIS), Pengelolaan E-Business (E-Business Management/E-BM), dan Pengembangan dan Aplikasi Database (Database Development & Application/DBA).', 2, 1),
(5, 'Menghasilkan lulusan yang memiliki keahlian di bidang Sistem Informasi Korporasi (Corporate Information System/CoIS), Pengelolaan E-Business (E-Business Management/E-BM), dan Pengembangan dan Aplikasi Database (Database Development & Application/DBA).', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`kode_alamat`);

--
-- Indexes for table `bergabung`
--
ALTER TABLE `bergabung`
  ADD PRIMARY KEY (`kd_bergabung`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`kd_gambar`);

--
-- Indexes for table `jenis_vm`
--
ALTER TABLE `jenis_vm`
  ADD PRIMARY KEY (`kd_jvm`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`kd_status`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`kd_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vm`
--
ALTER TABLE `vm`
  ADD PRIMARY KEY (`kd_vm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
