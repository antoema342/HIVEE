-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 07:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `Status`) VALUES
('AD0001', 'Admin', '1c079586e87b16e492af80e7679e7e9d', 'Angga Pratama', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `nama` varchar(30) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`nama`, `pesan`, `timestamps`) VALUES
('yuda', '12', '2018-04-19 17:00:00'),
('Pratama', '0', '2018-04-20 05:21:25'),
('Pratama', '0', '2018-04-20 05:21:31'),
('Pratama', '0', '2018-04-20 05:24:03'),
('Pratama', 'Kirim', '2018-04-20 05:25:14'),
('Pratama', 'asdasdasd', '2018-04-20 05:25:56'),
('Pratama', 'saasa', '2018-04-20 12:29:26'),
('Pratama', 'asa', '2018-04-20 10:29:58'),
('Pratama', 'asa', '2018-04-20 10:35:28'),
('Pratama', 'asa', '2018-04-20 10:35:32'),
('Pratama', 'asa', '2018-04-20 10:35:35'),
('Pratama', 'asa', '2018-04-20 10:38:13'),
('Pratama', 'asa', '2018-04-20 10:38:46'),
('Pratama', 'asa', '2018-04-20 10:39:26'),
('Pratama', 'asasa', '2018-04-20 10:39:31'),
('Pratama', 'asasa', '2018-04-20 10:43:11'),
('Pratama', 'asasa', '2018-04-20 10:44:32'),
('Pratama', 'asasa', '2018-04-20 10:45:22'),
('Pratama', 'asasa', '2018-04-20 10:45:46'),
('Pratama', 'asasa', '2018-04-20 10:46:24'),
('Pratama', 'asasa', '2018-04-20 10:47:28'),
('Pratama', '', '2018-04-20 10:47:30'),
('Pratama', '', '2018-04-20 10:47:31'),
('Pratama', '', '2018-04-20 10:47:32'),
('Pratama', '', '2018-04-20 10:47:33'),
('Pratama', '', '2018-04-20 10:47:34'),
('Pratama', '', '2018-04-20 10:47:35'),
('Pratama', '', '2018-04-20 10:47:36'),
('Pratama', '', '2018-04-20 10:47:36'),
('Pratama', '', '2018-04-20 10:47:37'),
('Pratama', '', '2018-04-20 10:47:38'),
('Pratama', '', '2018-04-20 10:47:39'),
('Pratama', '', '2018-04-20 10:47:40'),
('Pratama', '', '2018-04-20 10:47:41'),
('Pratama', '', '2018-04-20 10:48:28'),
('Pratama', 'sdsadasd', '2018-04-20 10:48:32'),
('Pratama', 'sadasd', '2018-04-20 10:48:37'),
('Pratama', 'test percobaan dicoba semoga maikn ramai makin sukses akin bahagia', '2018-04-20 10:49:49'),
('Pratama', 'kakakaka', '2018-04-20 10:51:16'),
('Pratama', 'www.youtube.com', '2018-04-20 10:51:46'),
('Pratama', 'asasasas', '2018-04-20 10:56:08'),
('Pratama', 'qwqwqw', '2018-04-20 10:56:15'),
('Pratama', 'sdsd', '2018-04-20 10:57:09'),
('Pratama', 'kaakakak', '2018-04-20 10:58:19'),
('Pratama', 'asas', '2018-04-20 10:59:38'),
('Pratama', 'asas', '2018-04-20 11:00:05'),
('Pratama', 'asas', '2018-04-20 11:02:39'),
('Pratama', 'asas', '2018-04-20 11:02:44'),
('Pratama', 'asas', '2018-04-20 11:02:48'),
('Pratama', 'asas', '2018-04-20 11:04:21'),
('Pratama', 'adad', '2018-04-20 11:04:24'),
('Pratama', '4reewrrrrrrrrrrrrrrrrrrrrrwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '2018-04-20 11:04:35'),
('Pratama', 'SsSsSsSSsSsssssssssssssssssssssssssssssssssssssssssssssssss', '2018-04-20 11:06:31'),
('Pratama', 'aaasasasasassasasasasa', '2018-04-20 11:07:04'),
('Pratama', 'SsSsSsSSsSsssssssssssssssssssssssssssssssssssssssssssssssss', '2018-04-20 11:07:16'),
('Pratama', 'reeret', '2018-05-07 01:25:17'),
('Pratama', 'reeret', '2018-05-07 01:25:17'),
('Pratama', '11111', '2018-05-07 01:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` varchar(7) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `deskripsi` text NOT NULL,
  `p_terakhir` enum('SD','SMP','SMA','D3','S1') NOT NULL,
  `nm_instansi` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tahun_lulus` date NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama`, `alamat`, `username`, `password`, `telp`, `email`, `foto`, `tgl_lahir`, `jk`, `deskripsi`, `p_terakhir`, `nm_instansi`, `jurusan`, `tahun_lulus`, `Status`) VALUES
('KN0001', 'Adul Adul', '', 'an', '1c079586e87b16e492af80e7679e7e9d', '0797987', 'antoema324@gmail.com', '', '0000-00-00', 'Pria', '', 'SD', '', '', '0000-00-00', 'Aktif'),
('KN0002', 'Rangga Cinta', '', 'Rangga03', '1c079586e87b16e492af80e7679e7e9d', '089632309715', 'Rangga@gmail.com', '', '0000-00-00', 'Pria', '', 'SD', '', '', '0000-00-00', 'Aktif'),
('KN0003', 'anto anto', '', 'tk', '1c079586e87b16e492af80e7679e7e9d', '087888089890', 'antoema3425@gmail.co', '', '0000-00-00', 'Pria', '', 'SD', '', '', '0000-00-00', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` varchar(7) NOT NULL,
  `id_perusahaan` varchar(7) NOT NULL,
  `id_kandidat` varchar(7) NOT NULL,
  `id_lowongan` varchar(7) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` enum('Menunggu','Review','Terima','Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` varchar(7) NOT NULL,
  `nama_lowongan` varchar(30) NOT NULL,
  `kategori` enum('Kitchen','Waiter','Event Staff','Cashier','Retail','Sales','Warehouse') NOT NULL,
  `tgl_post` date NOT NULL,
  `bataspendaftaran` date NOT NULL,
  `gaji` int(12) NOT NULL,
  `status_low` enum('Aktif','Non Aktif') NOT NULL,
  `id_perusahaan` varchar(7) NOT NULL,
  `id_syarat` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` varchar(7) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `nm_perusahaan` varchar(30) NOT NULL,
  `lamakerja` int(3) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kandidat` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `nama`, `rate`) VALUES
(0, 'Mobil', 34),
(1, 'Motor', 20),
(2, 'Sepeda', 12);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` varchar(7) NOT NULL,
  `nm_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(30) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Status` enum('Aktif','NonAktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nm_perusahaan`, `alamat_perusahaan`, `logo`, `deskripsi`, `username`, `password`, `telp`, `email`, `Status`) VALUES
('PT0001', 'PT.Sinarbaru Wijaya Perkasa', 'Jl.Hayam Wuruk', '', '', 'Anto', '1c079586e87b16e492af80e7679e7e9d', '0891234512133', 'antokarjeun@gmail.com', 'Aktif'),
('PT0002', 'PT.Minning', 'Jl.Gajah Mada', '', '', 'Anto123', '1c079586e87b16e492af80e7679e7e9d', '089632309715', 'antoema32@gmail.com', 'Aktif'),
('PT0003', '[removed]alert&#40;\"Hacked By ', '[removed]alert&#40;\"Hacked By ', '', '', 'aw', '1c079586e87b16e492af80e7679e7e9d', '80908078789789', 'antoema332@gmail.com', 'NonAktif'),
('PT0004', 'PT.Antam', 'Jl.Ketapang', '', '', 'Antam', '115f1808d2152bb1c749497c81cbc454', '08513123112312', 'help@ketapang.org', 'NonAktif'),
('PT0005', 'PT.PGN', 'Jl.Ketapang No 1', '', '', 'pgn', '2b608c13c6f9609098b1adfa68702023', '089098098098', 'info@pgn.com', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` varchar(7) NOT NULL,
  `nm_syarat` varchar(50) NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `nm_syarat`, `value`) VALUES
('1', 'SS', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_kandidat` (`id_kandidat`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_syarat` (`id_syarat`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_3` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_syarat`) REFERENCES `syarat` (`id_syarat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
