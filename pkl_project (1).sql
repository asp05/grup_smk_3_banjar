-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2019 pada 17.15
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
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username_admin`, `email`, `password_admin`) VALUES
(1, 'Super Admin', 'admin.smk3@admin.com', 'admin'),
(2, 'ariaryansyah', 'ari.smk3@gmail.com', 'smk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_biosiswa`
--

CREATE TABLE `tbl_detail_biosiswa` (
  `nis` int(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `ttl` date NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `photo_siswa` text NOT NULL,
  `qr_siswa` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_biosiswa`
--

INSERT INTO `tbl_detail_biosiswa` (`nis`, `nama`, `jk`, `ttl`, `kelas`, `photo_siswa`, `qr_siswa`, `alamat`) VALUES
(11718317, 'Aenatul Hasanah', 'perempuan', '2001-04-12', 'XI RPL 1', '1.jpg', '', 'Banjar'),
(11718318, 'Ali Musthofa', 'laki-laki', '2002-09-09', 'XI RPL 1', '2.jpg', '', 'Ciamis'),
(11718319, 'Andi Sugara Putra', 'laki-laki', '2003-05-10', 'XI RPL 1', '3.jpg', '', 'Banjar'),
(11718321, 'Ari Aryansyah', 'laki-laki', '2001-07-08', 'XI RPL 1', '.4jpg', '', 'Banjar'),
(11718322, 'Bagus Adi Saputra', 'laki-laki', '2001-12-06', 'XI RPL 1', '5.jpg', '', 'Banjar'),
(11718323, 'Diana Dwi Indriani', 'perempuan', '2001-07-29', 'XI RPL 1', '6.jpg', '', 'Banjar'),
(11718324, 'Eka Sri Yulianti', 'perempuan', '2001-08-07', 'XI RPL 1', '7.jpg', '', 'Banjar'),
(11718325, 'Fajar Fitriadi', 'laki-laki', '2001-05-04', 'XI RPL 1', '8.jpg', '', 'Banjar'),
(11718326, 'Fitriah', 'perempuan', '2002-02-07', 'XI RPL 1', '9.jpg', '', 'Banjar'),
(11718327, 'Gita Nurjanah', 'perempuan', '2002-03-21', 'XI RPL 1', '10.jpg', '', 'Banjar'),
(11718329, 'Lia Kartika', 'perempuan', '2002-04-23', 'XI RPL 1', '11.jpg', '', 'Banjar'),
(11718330, 'Mawar Vina', 'perempuan', '2001-12-22', 'XI RPL 1', '12.jpg', '', 'Banjar'),
(11718331, 'Mila Triani', 'perempuan', '2001-07-24', 'XI RPL 1', '13.jpg', '', 'Banjar'),
(11718332, 'Muhamad Juhrufsurur', 'laki-laki', '2002-06-25', 'XI RPL 1', '14.jpg', '', 'Banjar'),
(11718333, 'Muhamad Rizki P', 'laki-laki', '2001-02-26', 'XI RPL 1', '15.jpg', '', 'Banjar'),
(11718334, 'Mutia Rikban', 'perempuan', '2002-01-30', 'XI RPL 1', '16.jpg', '', 'Banjar'),
(11718335, 'Nova Sabaniah', 'perempuan', '2002-10-31', 'XI RPL 1', '17.jpg', '', 'Banjar'),
(11718336, 'Nurshinta Dwi F', 'perempuan', '2002-09-14', 'XI RPL 1', '18.jpg', '', 'Cilacap'),
(11718337, 'Nurjanah', 'perempuan', '2002-06-01', 'XI RPL 1', '19.jpg', '', 'Ciamis'),
(11718338, 'Nurul Fadilah', 'perempuan', '2002-03-02', 'XI RPL 1', '20.jpg', '', 'Banjar'),
(11718339, 'Putri Nurhasanah', 'perempuan', '2002-02-03', 'XI RPL 1', '21.jpg', '', 'Banjar'),
(11718341, 'Rino Pamuji', 'laki-laki', '2002-01-04', 'XI RPL 1', '22.jpg', '', 'Ciamis'),
(11718342, 'Rizal Aimar M', 'laki-laki', '2002-04-07', 'XI RPL 1', '23.jpg', '', 'Banjar'),
(11718343, 'Robi Dede W', 'laki-laki', '2002-11-05', 'XI RPL 1', '24.jpg', '', 'Ciamis'),
(11718344, 'Sabana Nur Rizki H', 'laki-laki', '2001-10-09', 'XI RPL 1', '25.jpg', '', 'Banjar'),
(11718345, 'Sinta Indriani', 'perempuan', '2002-07-11', 'XI RPL 1', '26.jpg', '', 'Banjar'),
(11718346, 'Sri Wahyuningsih', 'perempuan', '2001-05-19', 'XI RPL 1', '27.jpg', '', 'Banjar'),
(11718347, 'Tia Nurwidya', 'perempuan', '2002-03-13', 'XI RPL 1', '28.jpg', '', 'Banjar'),
(11718348, 'Titin Supriatin', 'perempuan', '2002-08-20', 'XI RPL 1', '29.jpg', '', 'Cilacap'),
(11718349, 'Ulfiah', 'perempuan', '2001-11-10', 'XI RPL 1', '30.jpg', '', 'Cilacap'),
(11718351, 'Yoga Pangestu P', 'laki-laki', '2001-12-18', 'XI RPL 1', '31.jpg', '', 'Cilacap');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_biosiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_biosiswa` (
`nis` int(50)
,`nama` varchar(20)
,`jk` enum('laki-laki','perempuan')
,`kelas` varchar(20)
,`photo_siswa` text
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_biosiswa`
--
DROP TABLE IF EXISTS `v_biosiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_biosiswa`  AS  select `tbl_detail_biosiswa`.`nis` AS `nis`,`tbl_detail_biosiswa`.`nama` AS `nama`,`tbl_detail_biosiswa`.`jk` AS `jk`,`tbl_detail_biosiswa`.`kelas` AS `kelas`,`tbl_detail_biosiswa`.`photo_siswa` AS `photo_siswa` from `tbl_detail_biosiswa` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_detail_biosiswa`
--
ALTER TABLE `tbl_detail_biosiswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
