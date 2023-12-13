-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 16.15
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
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL COMMENT 'PRIMARY',
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'EFENDI SUGIANTORO', 'Ds. Sitimerto Kec. Pagu Kab.Kediri Prov. Jawa Timur', 'Laki-Laki', 'Islam', 'SLTA PKBM CERLANG'),
(2, 'EKO MULYANTOMO', 'Ds. Sitimerto Kec. Pagu Kab.Kediri Prov. Jawa Timur', 'Laki-Laki', 'Islam', 'SMAN 1 PAGU'),
(3, 'ERNAWTI', 'Ds. Sitimerto Kec. Pagu Kab.Kediri Prov. Jawa Timur', 'Perempuan', 'Islam', 'SMA PGRI '),
(4, 'EFENDI SUGIANTORO', 'Ds. Sitimerto Kec. Pagu Kab.Kediri Prov. Jawa Timur', 'Laki-Laki', 'Islam', 'SLTA PKBM CERLANG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PRIMARY', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
