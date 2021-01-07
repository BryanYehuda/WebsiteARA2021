-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 12:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ara`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctf`
--

CREATE TABLE `ctf` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `id2` varchar(50) NOT NULL,
  `gender2` int(11) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `nama3` varchar(50) NOT NULL,
  `id3` varchar(50) NOT NULL,
  `gender3` int(11) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) NOT NULL,
  `ktm3` varchar(255) NOT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) NOT NULL,
  `surat3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `id2` varchar(50) NOT NULL,
  `gender2` int(11) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `nama3` varchar(50) NOT NULL,
  `id3` varchar(50) NOT NULL,
  `gender3` int(11) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) NOT NULL,
  `ktm3` varchar(255) NOT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) NOT NULL,
  `surat3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `olimpiade`
--

CREATE TABLE `olimpiade` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `id2` varchar(50) NOT NULL,
  `gender2` int(11) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `nama3` varchar(50) NOT NULL,
  `id3` varchar(50) NOT NULL,
  `gender3` int(11) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) NOT NULL,
  `ktm3` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctf`
--
ALTER TABLE `ctf`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `olimpiade`
--
ALTER TABLE `olimpiade`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctf`
--
ALTER TABLE `ctf`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olimpiade`
--
ALTER TABLE `olimpiade`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
