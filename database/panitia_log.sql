-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 10:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `panitia_log`
--

CREATE TABLE `panitia_log` (
  `log_p_id` int(16) NOT NULL,
  `log_panitia_id` int(4) NOT NULL,
  `log_panitia_access_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `log_panitia_accessor_name_panitia` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia_log`
--

INSERT INTO `panitia_log` (`log_p_id`, `log_panitia_id`, `log_panitia_access_time`, `log_panitia_accessor_name_panitia`) VALUES
(1, 1, '2021-01-15 11:22:18', 'Rafael');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panitia_log`
--
ALTER TABLE `panitia_log`
  ADD PRIMARY KEY (`log_p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panitia_log`
--
ALTER TABLE `panitia_log`
  MODIFY `log_p_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
