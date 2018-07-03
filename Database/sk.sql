-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 05:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_briohukum`
--

CREATE TABLE `tb_briohukum` (
  `sk_id_biro_hukum` int(11) NOT NULL,
  `sk_id_syarat` int(11) NOT NULL,
  `sk_tgl_proses` datetime NOT NULL,
  `catatan` text,
  `sk_final` varchar(500) DEFAULT NULL,
  `sk_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_briohukum`
--

INSERT INTO `tb_briohukum` (`sk_id_biro_hukum`, `sk_id_syarat`, `sk_tgl_proses`, `catatan`, `sk_final`, `sk_status`) VALUES
(28, 18, '1970-01-01 07:00:01', NULL, NULL, 'T'),
(29, 19, '2018-07-03 07:18:15', NULL, NULL, 'T'),
(30, 19, '2018-07-03 07:34:17', 'Perbaikan Pada BAB 1 \r\n                                          \r\n                                        ', NULL, 'P'),
(31, 20, '2018-07-03 08:00:22', NULL, NULL, 'T'),
(32, 20, '2018-07-03 08:02:21', 'Perbaikan Latar Belakang', '2.pdf', 'P'),
(33, 21, '2018-07-03 08:11:38', NULL, NULL, 'T'),
(34, 21, '2018-07-03 08:14:29', '   werwer wrerwerwe                                       \r\n                                        ', NULL, 'P'),
(35, 21, '2018-07-03 09:12:17', '                                          \r\n                                        ', NULL, 'Y'),
(36, 19, '2018-07-03 09:17:44', '                                          \r\n                                        ', NULL, 'Y'),
(37, 20, '2018-07-03 09:58:30', 'Anggrana  tidak relevan                                          \r\n                                        ', NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_syarat`
--

CREATE TABLE `tb_sk_syarat` (
  `sk_id_syarat` int(11) NOT NULL,
  `sk_judul` varchar(250) NOT NULL,
  `sk_nama_opd` varchar(250) NOT NULL,
  `sk_tgl_pengajuan` datetime NOT NULL,
  `sk_file_pendukung` varchar(250) NOT NULL,
  `sk_file_pendukung_2` varchar(500) NOT NULL,
  `sk_file_pendukung_3` varchar(500) NOT NULL,
  `sk_proses_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_syarat`
--

INSERT INTO `tb_sk_syarat` (`sk_id_syarat`, `sk_judul`, `sk_nama_opd`, `sk_tgl_pengajuan`, `sk_file_pendukung`, `sk_file_pendukung_2`, `sk_file_pendukung_3`, `sk_proses_status`) VALUES
(19, 'Pengajuan SK', 'diskominfotik', '2018-07-03 07:18:15', 'GlobalSign_Refund_Policy_v1.1.pdf', 'Pergub_No._5_Tahun_2015_Lampiran.pdf', 'Pergub_No._5_Tahun_2015_ttg_Jakwas.pdf', 'Y'),
(20, 'SK GUB', 'diskominfotik', '2018-07-03 08:00:22', '1.pdf', '2.pdf', '3.pdf', 'N'),
(21, 'SK SOP', 'diskominfotik', '2018-07-03 08:11:38', 'IMG_20180514_0003.pdf', '11.pdf', 'IMG_20180514_0002.pdf', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sk_user`
--

CREATE TABLE `tb_sk_user` (
  `sk_id_user` int(11) NOT NULL,
  `sk_nama_user` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sk_user`
--

INSERT INTO `tb_sk_user` (`sk_id_user`, `sk_nama_user`, `username`, `password`, `level`) VALUES
(1, '@adminportal', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Dinas Kominfotik', 'diskominfotik', '21232f297a57a5a743894a0e4a801fc3', 2),
(4, 'Biro Hukum', 'birohukum', '21232f297a57a5a743894a0e4a801fc3', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_briohukum`
--
ALTER TABLE `tb_briohukum`
  ADD PRIMARY KEY (`sk_id_biro_hukum`);

--
-- Indexes for table `tb_sk_syarat`
--
ALTER TABLE `tb_sk_syarat`
  ADD PRIMARY KEY (`sk_id_syarat`);

--
-- Indexes for table `tb_sk_user`
--
ALTER TABLE `tb_sk_user`
  ADD PRIMARY KEY (`sk_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_briohukum`
--
ALTER TABLE `tb_briohukum`
  MODIFY `sk_id_biro_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_sk_syarat`
--
ALTER TABLE `tb_sk_syarat`
  MODIFY `sk_id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_sk_user`
--
ALTER TABLE `tb_sk_user`
  MODIFY `sk_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
