-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 19.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wjgarage`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_klien`
--

CREATE TABLE `daftar_klien` (
  `id_klien` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `testimoni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_klien`
--

INSERT INTO `daftar_klien` (`id_klien`, `nama`, `testimoni`) VALUES
(1, 'Ibnu ', 'sangat rekomendasi'),
(2, 'bagus', 'Pelayanan Mantap'),
(6, 'Diana', 'bintang 5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_klien`
--
ALTER TABLE `daftar_klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_klien`
--
ALTER TABLE `daftar_klien`
  MODIFY `id_klien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
