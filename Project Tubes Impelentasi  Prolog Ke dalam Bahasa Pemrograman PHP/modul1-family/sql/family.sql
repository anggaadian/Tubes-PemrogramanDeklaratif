-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 03:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `ID` bigint(20) NOT NULL,
  `PARENT_ID` int(11) DEFAULT NULL,
  `NAMA` varchar(255) DEFAULT NULL,
  `JK` tinyint(4) NOT NULL,
  `ANAK_KE` int(11) DEFAULT NULL,
  `KOTA_LAHIR` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`ID`, `PARENT_ID`, `NAMA`, `JK`, `ANAK_KE`, `KOTA_LAHIR`) VALUES
(1, 15, 'Kasrin Putro Wohono', 1, 2, 'Papua'),
(3, 16, 'Anak Angling Darmo', 1, 2, 'Australia'),
(4, 20, 'Anak Sinto', 0, 2, 'Italy'),
(5, 15, 'Asyanti Maemunah', 0, 2, 'Papua'),
(6, 15, 'Heru Wibowo', 1, 3, 'Koto Panjang'),
(7, 16, 'Anak Angling Darmo 2', 0, 2, 'Florida'),
(8, 19, 'Anak Sinto 2', 1, 2, 'Sindreas'),
(9, 19, 'Anak Sinto 3', 1, 3, ''),
(10, 15, 'Putrian Putri', 0, 3, 'Samarinda'),
(11, 24, 'Anak Widia', 1, 1, 'Pekanbaru');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `ID` bigint(20) NOT NULL,
  `PARENT` int(11) DEFAULT NULL,
  `KK` varchar(255) DEFAULT NULL,
  `ISTRI` varchar(255) DEFAULT NULL,
  `AYAH_SUAMI` varchar(255) DEFAULT NULL,
  `IBU_SUAMI` varchar(255) DEFAULT NULL,
  `AYAH_ISTRI` varchar(255) DEFAULT NULL,
  `IBU_ISTRI` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`ID`, `PARENT`, `KK`, `ISTRI`, `AYAH_SUAMI`, `IBU_SUAMI`, `AYAH_ISTRI`, `IBU_ISTRI`) VALUES
(25, 15, 'Ruris', '', '', '', '', ''),
(24, 23, 'Pizaini', 'Widia Fuji Hastuti', '', '', '', ''),
(23, 22, 'Gilang Abdal Basith', 'Kikuk', '', '', '', ''),
(22, 20, 'Next Generation', '', '', '', '', ''),
(20, 19, 'Keluarga Anak Sinto', '', '', '', '', ''),
(16, 15, 'Angling Darmo', '', '', '', '', ''),
(19, 16, 'Sinto', '', '', '', '', ''),
(15, 0, 'Prof. DR. Baharuddin, M. Sc', 'Kurnia Maulani', 'Gustoro', 'Nur Faiza', 'Ehsan Pramono', 'Septina Rusli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
