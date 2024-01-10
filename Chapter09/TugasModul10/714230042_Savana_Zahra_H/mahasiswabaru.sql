-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswabaru`
--
CREATE DATABASE IF NOT EXISTS `mahasiswabaru` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mahasiswabaru`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiwabaru`
--

CREATE TABLE `mahasiwabaru` (
  `id` int(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiwabaru`
--

INSERT INTO `mahasiwabaru` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(123456, 'Lia', 'Jl. Mangga No.3, Mataram', 'perempuan', 'islam', 'SMPN 32 Ampenan'),
(234567, 'Siska Andriani', 'Jl.Pangeran No.18, Bandung', 'Perempuan', 'islam', 'SMKN 02 Bandung'),
(345678, 'Anto Susanto', 'Jl.Bawang Putih, No.12, Bogor', 'Laki-laki', 'Hindu', 'SMA 01 Bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiwabaru`
--
ALTER TABLE `mahasiwabaru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiwabaru`
--
ALTER TABLE `mahasiwabaru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345679;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
