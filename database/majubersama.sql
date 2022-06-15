-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2022 pada 08.36
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majubersama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(300) NOT NULL,
  `email_admin` varchar(300) NOT NULL,
  `password_admin` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(11) NOT NULL,
  `judul_beasiswa` varchar(300) DEFAULT NULL,
  `kategori_pendaftar` varchar(300) DEFAULT NULL,
  `deskripsi_beasiswa` varchar(1000) DEFAULT NULL,
  `gambar_beasiswa` blob DEFAULT NULL,
  `tanggal_beasiswa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL,
  `judul_lomba` varchar(200) NOT NULL,
  `kategori_pendaftar` varchar(300) NOT NULL,
  `deskripsi_lomba` varchar(1000) NOT NULL,
  `biaya_lomba` int(11) NOT NULL,
  `gambar_lomba` blob NOT NULL,
  `tanggal_lomba` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `rekapan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `rekapan` (
`judul_beasiswa` varchar(300)
,`tanggal_beasiswa` date
,`judul_lomba` varchar(200)
,`tanggal_lomba` date
);

-- --------------------------------------------------------

--
-- Struktur untuk view `rekapan`
--
DROP TABLE IF EXISTS `rekapan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rekapan`  AS SELECT `beasiswa`.`judul_beasiswa` AS `judul_beasiswa`, `beasiswa`.`tanggal_beasiswa` AS `tanggal_beasiswa`, `lomba`.`judul_lomba` AS `judul_lomba`, `lomba`.`tanggal_lomba` AS `tanggal_lomba` FROM (`beasiswa` left join `lomba` on(`beasiswa`.`id_beasiswa` = `lomba`.`id_lomba`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indeks untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
