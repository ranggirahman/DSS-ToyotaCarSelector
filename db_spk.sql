-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 17.24
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `nama`, `deskripsi`) VALUES
(0, 'Agya', 'Agya adalah'),
(1, 'Avanza', 'Avanza adalah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_eigen`
--

CREATE TABLE `tb_eigen` (
  `id` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_eigen`
--

INSERT INTO `tb_eigen` (`id`, `idk`, `ida`, `value`) VALUES
(1, 1, 0, 1),
(2, 1, 1, 4),
(3, 2, 0, 1),
(4, 2, 1, 2),
(5, 3, 0, 4),
(6, 3, 1, 3),
(7, 4, 0, 1),
(8, 4, 1, 2),
(9, 5, 0, 2),
(10, 5, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` text NOT NULL,
  `deskripsi` text NOT NULL,
  `eigen` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kriteria`, `deskripsi`, `eigen`) VALUES
(1, 'Kapasitas Kabin', 'Kapasitas kabin mempengaruhi jumlah penumpang dan muatan yang bisa diangkut.', 0.24426781551499),
(2, 'Kenyamanan terhadap Interior', 'Kenyaman dalam berkendara dinilai dari interior yang ditawarkan, seperti kursi penumpang yang empuk', 0.19645421225523),
(3, 'Harga yang ditawarkan', 'Harga dipengaruhi dari kecenderungan konsumen dalam memilih sesuatu yang murah untuk suatu spesifikasi produk', 0.39070314552595),
(4, 'Kemampuan Jarak Tempuh', 'Jarak tempuh dihitung dari ukuran tangki bensin dan kemampuan mesin terhadap jarak yang ditempuh', 0.064845753218731),
(5, 'Dukungan After Sales', 'After sales dinilai dari bentuk pelayanan yang dilakukan setelah terjadi transaksi pembelian kendaraan', 0.1037290734851);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matriks`
--

CREATE TABLE `tb_matriks` (
  `id` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matriks`
--

INSERT INTO `tb_matriks` (`id`, `x`, `y`, `value`) VALUES
(1, 0, 0, 1),
(2, 0, 1, 1.5),
(3, 0, 2, 0.33),
(4, 0, 3, 4),
(5, 0, 4, 3),
(6, 1, 0, 0.67),
(7, 1, 1, 1),
(8, 1, 2, 0.67),
(9, 1, 3, 3),
(10, 1, 4, 2),
(11, 2, 0, 3),
(12, 2, 1, 1.5),
(13, 2, 2, 1),
(14, 2, 3, 4),
(15, 2, 4, 3),
(16, 3, 0, 0.25),
(17, 3, 1, 0.33),
(18, 3, 2, 0.25),
(19, 3, 3, 1),
(20, 3, 4, 0.5),
(21, 4, 0, 0.33),
(22, 4, 1, 0.5),
(23, 4, 2, 0.33),
(24, 4, 3, 2),
(25, 4, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matriks2`
--

CREATE TABLE `tb_matriks2` (
  `id` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matriks2`
--

INSERT INTO `tb_matriks2` (`id`, `idk`, `x`, `y`, `value`) VALUES
(1, 1, 0, 0, 1),
(2, 1, 0, 1, 0.25),
(3, 1, 1, 0, 4),
(4, 1, 1, 1, 1),
(5, 2, 0, 0, 1),
(6, 2, 0, 1, 0.5),
(7, 2, 1, 0, 2),
(8, 2, 1, 1, 1),
(9, 3, 0, 0, 1),
(10, 3, 0, 1, 1.33),
(11, 3, 1, 0, 0.75),
(12, 3, 1, 1, 1),
(13, 4, 0, 0, 1),
(14, 4, 0, 1, 0.5),
(15, 4, 1, 0, 2),
(16, 4, 1, 1, 1),
(18, 5, 0, 0, 1),
(19, 5, 0, 1, 0.5),
(20, 5, 1, 1, 1),
(21, 5, 1, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_eigen`
--
ALTER TABLE `tb_eigen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_matriks`
--
ALTER TABLE `tb_matriks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_matriks2`
--
ALTER TABLE `tb_matriks2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_eigen`
--
ALTER TABLE `tb_eigen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_matriks`
--
ALTER TABLE `tb_matriks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tb_matriks2`
--
ALTER TABLE `tb_matriks2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
