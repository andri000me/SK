-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 11:37 AM
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
-- Table structure for table `tb_sk_brio_hukum`
--

CREATE TABLE `tb_sk_brio_hukum` (
  `sk_id_biro_hukum` int(11) NOT NULL,
  `sk_id_syarat` int(11) NOT NULL,
  `sk_tgl_proses` datetime NOT NULL,
  `catatan` text NOT NULL,
  `sk_proses_status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sk_proses_status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Dinas Kominfotik', 'diskominfotik', '21232f297a57a5a743894a0e4a801fc3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sk_brio_hukum`
--
ALTER TABLE `tb_sk_brio_hukum`
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
-- AUTO_INCREMENT for table `tb_sk_brio_hukum`
--
ALTER TABLE `tb_sk_brio_hukum`
  MODIFY `sk_id_biro_hukum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sk_syarat`
--
ALTER TABLE `tb_sk_syarat`
  MODIFY `sk_id_syarat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sk_user`
--
ALTER TABLE `tb_sk_user`
  MODIFY `sk_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
