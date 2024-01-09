-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 06.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswabaru`
--

CREATE TABLE `mahasiswabaru` (
  `id` int(10) NOT NULL,
  `Nama` varchar(64) NOT NULL,
  `Alamat` varchar(64) NOT NULL,
  `Jenis Kelamin` varchar(64) NOT NULL,
  `Agama` varchar(64) NOT NULL,
  `Sekolah Asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`id`, `Nama`, `Alamat`, `Jenis Kelamin`, `Agama`, `Sekolah Asal`) VALUES
(436890742, 'Ijah Usman', 'jl.sarijadi 14,bandung', 'perempuan', 'khatolik', 'Sma parayangan'),
(687292687, 'Nurfanis Rosman', 'jalan cinta sejati 09,bima', 'Perempuan', 'Islam', 'Sma 1 bima'),
(714230039, 'Indah diva', 'Jl.Kenangan No,13. Medan', 'Perempuan', 'Kristen', 'SMA Matauli');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswabaru`
--
ALTER TABLE `mahasiswabaru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714230040;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
