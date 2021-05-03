-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_pekerjaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapekerja`
--

CREATE TABLE `datapekerja` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapekerja`
--

INSERT INTO `datapekerja` (`id`, `nama`, `umur`, `pekerjaan`, `alamat`) VALUES
(1, 'Nicholas Nivarel', 65, 'General Manager', 'Jln. Medan'),
(10, '', 0, '', ''),
(11, '', 0, '', ''),
(13, 'ordrick', 52, 'sales manager', 'Jln. gunting'),
(14, 'ordrick', 21, 'sales', 'Jln. Hamid'),
(15, '', 0, '', ''),
(16, 'ordrick', 52, 'sales manager', 'Jln. gunting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapekerja`
--
ALTER TABLE `datapekerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapekerja`
--
ALTER TABLE `datapekerja`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
