-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 11.36
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
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(64) NOT NULL,
  `agama` varchar(64) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1234567, 'Nurfanis Rosman', 'Jl.Bima sakti', 'Perempuan', 'Islam', 'SMAn 1 Kilo'),
(358007424, 'Nurfanis rosman', 'jl,sariasih32,bandung', 'Perempuan', 'Islam', 'Sma n 1 parayangan'),
(358007425, 'dwi rizki', 'lombok', 'laki laki', 'islam', 'sman 1 bima'),
(358007426, 'nurfitrah', 'bima', 'perempuan', 'islam', 'sma n 1 dompu');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358007427;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
