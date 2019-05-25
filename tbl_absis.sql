-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2019 pada 04.22
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absis`
--

CREATE TABLE `tbl_absis` (
  `id_absis` int(11) NOT NULL,
  `nis` int(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tgl` int(11) NOT NULL,
  `status_kehadiran` enum('Hadir','Sakit','izin','Alfa','Bolos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_absis`
--

INSERT INTO `tbl_absis` (`id_absis`, `nis`, `id_kelas`, `id_tgl`, `status_kehadiran`) VALUES
(1, 11718317, 1, 1, 'Hadir'),
(3, 11718318, 1, 1, 'Hadir'),
(4, 11718319, 1, 1, 'Hadir'),
(5, 11718321, 1, 1, 'Hadir'),
(6, 11718322, 1, 1, 'Hadir'),
(7, 11718323, 1, 1, 'Hadir'),
(8, 11718324, 1, 1, 'Hadir'),
(9, 11718325, 1, 1, 'Hadir'),
(10, 11718326, 1, 1, 'Hadir'),
(11, 11718327, 1, 1, 'Hadir'),
(12, 11718329, 1, 1, 'Hadir'),
(13, 11718330, 1, 1, 'Hadir'),
(14, 11718331, 1, 1, 'Hadir'),
(15, 11718332, 1, 1, 'Hadir'),
(16, 11718333, 1, 1, 'Sakit'),
(17, 11718334, 1, 1, 'Hadir'),
(18, 11718335, 1, 1, 'Hadir'),
(19, 11718336, 1, 1, 'Hadir'),
(20, 11718337, 1, 1, 'Hadir'),
(21, 11718338, 1, 1, 'Hadir'),
(22, 11718339, 1, 1, 'Hadir'),
(23, 11718341, 1, 1, 'Hadir'),
(24, 11718342, 1, 1, 'Hadir'),
(25, 11718343, 1, 1, 'Hadir'),
(26, 11718344, 1, 1, 'Hadir'),
(27, 11718345, 1, 1, 'Hadir'),
(28, 11718346, 1, 1, 'Hadir'),
(29, 11718347, 1, 1, 'Hadir'),
(30, 11718348, 1, 1, 'Hadir'),
(31, 11718349, 1, 1, 'Hadir'),
(32, 11718351, 1, 1, 'Hadir'),
(33, 11718317, 1, 2, 'Bolos'),
(34, 11718318, 1, 2, 'Hadir'),
(36, 11718319, 1, 2, 'Alfa'),
(41, 11718321, 1, 2, 'Hadir'),
(42, 11718322, 1, 2, 'Hadir'),
(43, 11718323, 1, 2, 'Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absis`
--
ALTER TABLE `tbl_absis`
  ADD PRIMARY KEY (`id_absis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absis`
--
ALTER TABLE `tbl_absis`
  MODIFY `id_absis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
