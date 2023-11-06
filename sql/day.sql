-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 03.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `day`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID` int(8) NOT NULL,
  `PEMESAN` varchar(50) NOT NULL,
  `PRODI` varchar(50) NOT NULL,
  `RUANG LAB` varchar(50) NOT NULL,
  `HARI` varchar(10) NOT NULL,
  `TANGGAL PINJAM` date NOT NULL,
  `JAM MULAI` time(6) NOT NULL,
  `JAM SELESAI` time(6) NOT NULL,
  `KETERANGAN` varchar(225) NOT NULL,
  `PENANGGUNG JAWAB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`ID`, `PEMESAN`, `PRODI`, `RUANG LAB`, `HARI`, `TANGGAL PINJAM`, `JAM MULAI`, `JAM SELESAI`, `KETERANGAN`, `PENANGGUNG JAWAB`) VALUES
(21, '', 'Sistem Informasi', 'Lab 1', 'Senin', '0000-00-00', '07:30:00.000000', '10:50:00.000000', '', ''),
(22, '', 'Sistem Informasi', 'Lab 1', 'Selasa', '0000-00-00', '07:30:00.000000', '10:00:00.000000', '', ''),
(23, '', 'Sistem Informasi', 'Lab 1', 'Rabu', '0000-00-00', '07:30:00.000000', '11:40:00.000000', '', ''),
(25, '', 'Sistem Informasi', 'Lab 1', 'Kamis', '0000-00-00', '07:30:00.000000', '10:00:00.000000', '', ''),
(26, '', 'Teknik Elektro', 'lab 2', 'Selasa', '0000-00-00', '00:00:00.000000', '00:00:00.000000', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
