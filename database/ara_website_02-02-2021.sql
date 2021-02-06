-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2021 at 12:51 PM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u601190821_ara_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstrak_iot`
--

CREATE TABLE `abstrak_iot` (
  `id` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) DEFAULT NULL,
  `surat3` varchar(255) DEFAULT NULL,
  `ctf_timestamp` timestamp NULL DEFAULT current_timestamp()
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
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) DEFAULT NULL,
  `surat3` varchar(255) DEFAULT NULL,
  `iot_timestamp` timestamp NULL DEFAULT current_timestamp()
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
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `olim_timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id_otp` int(11) NOT NULL,
  `nama_otp` varchar(69) NOT NULL,
  `code_otp` varchar(6) NOT NULL,
  `req_otp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_otp` int(1) NOT NULL DEFAULT 1,
  `email` varchar(69) NOT NULL,
  `kategori_lomba` int(11) NOT NULL,
  `id_tim_otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(4) NOT NULL,
  `username_panitia` varchar(69) NOT NULL,
  `password_panitia` varchar(69) NOT NULL,
  `status_panitia` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `username_panitia`, `password_panitia`, `status_panitia`) VALUES
(1, 'superpanitia25', 'd44535d9822e1a9f0b66727cb0fe9035', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitia_log`
--

CREATE TABLE `panitia_log` (
  `log_p_id` int(16) NOT NULL,
  `log_panitia_id` int(4) NOT NULL,
  `log_panitia_access_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `log_panitia_accessor_name_panitia` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `bukti_share` varchar(255) NOT NULL,
  `bukti_zip` varchar(255) NOT NULL,
  `tim_timestamp` timestamp NULL DEFAULT current_timestamp(),
  `tim_status` int(11) NOT NULL DEFAULT 2,
  `pass` varchar(255) NOT NULL,
  `usernamelogin_tim` varchar(199) NOT NULL
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
  `bukti` text NOT NULL,
  `webinar_timestamp` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstrak_iot`
--
ALTER TABLE `abstrak_iot`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id_otp`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD UNIQUE KEY `username_panitia` (`username_panitia`);

--
-- Indexes for table `panitia_log`
--
ALTER TABLE `panitia_log`
  ADD PRIMARY KEY (`log_p_id`);

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
-- AUTO_INCREMENT for table `abstrak_iot`
--
ALTER TABLE `abstrak_iot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id_otp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia_log`
--
ALTER TABLE `panitia_log`
  MODIFY `log_p_id` int(16) NOT NULL AUTO_INCREMENT;

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
