-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 05.39
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `deskripsi`, `foto`, `kode`, `link`) VALUES
(14, 'Parfum Dobha ', '20.000', ' dsarg', '5f8d0d313711b.jpg', '', ''),
(15, 'Parfum Dobha ', '20.000', 's dgarg', '5f8d0d5e37b29.jpg', '', ''),
(16, 'Parfum Dobha ', '20.000', 'wvrwvf', '5f8d0d6e2de92.jpg', '', ''),
(17, 'Parfum Dobha ', '20.000', 'sdgbdtnryiui', '5f8d0d864282b.jpg', '', ''),
(18, 'Parfum Dobha ', '20.000', 'EVwrvwRVWVvSWV', '5f8d0e428420c.jpg', '', ''),
(19, 'Parfum Dobha ', '20.000', 'SCASD', '5f8d0eb484414.jpg', '', ''),
(20, 'Parfum Dobha ', '20.000', 'DA D ', '5f8d0ec6411ea.jpg', '', ''),
(22, 'ginjal', '500000', 'jvktyfyvhvhvkch', '5f8d957b75e88.jpg', '', ''),
(23, 'Parfum Dobha ', '500000', 'dzhstr', '5f9044d6d9185.jpg', 'k001', 'afdfSDVsv23546');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'upi', '$2y$10$36rC84/5i2z3o7j8AmtcVOukU7K5EqPBRmV0e5.LuW8RtxneOVxeS'),
(3, 'dede', '$2y$10$WLsF.5r5WGIiDFFGPedmpuDWsDEdrPWY5IJt1KNifXtEivYFqBf3u'),
(4, 'coki', '$2y$10$jFgswlK07Q5jixvoOu1WwuCWQihMNCLsOUdzwg2OvCkNA5MNTMPMS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
