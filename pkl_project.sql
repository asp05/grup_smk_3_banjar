-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2019 pada 03.23
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
  `password_admin` varchar(255) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username_admin`, `email`, `password_admin`, `images`) VALUES
(1, 'Super Admin', 'admin.smk3@admin.com', 'admin', ''),
(2, 'ariaryansyah', 'ari.smk3@gmail.com', 'smk', ''),
(3, 'admin', 'admin@admin.com', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_biosiswa`
--

CREATE TABLE `tbl_detail_biosiswa` (
  `nis` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `tampat_ttl` text NOT NULL,
  `tll` date NOT NULL,
  `id_kelas` varchar(100) NOT NULL,
  `photo_siswa` text NOT NULL,
  `qr_siswa` varchar(200) NOT NULL DEFAULT 'default_qr.jpg',
  `alamat` text NOT NULL,
  `id_status` varchar(11) NOT NULL,
  `id_tgl` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_biosiswa`
--

INSERT INTO `tbl_detail_biosiswa` (`nis`, `nama`, `jk`, `tampat_ttl`, `tll`, `id_kelas`, `photo_siswa`, `qr_siswa`, `alamat`, `id_status`, `id_tgl`) VALUES
('11718317', 'Aenatul Hasanah', 'perempuan', 'Banjar', '2001-04-01', '1', '1.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718318', 'Ali Musthofa', 'laki-laki', 'Banjar', '2019-05-04', '1', '2.jpg', 'default_qr.jpg', 'Ciamis', '1', '1'),
('11718319', 'Andi Sugara Putra', 'laki-laki', 'Banjar', '2019-05-15', '1', '3.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718321', 'Ari Aryansyah', 'laki-laki', 'Banjar', '2019-05-02', '1', '.4jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718322', 'Bagus Adi Saputra', 'laki-laki', 'Banjar', '2019-05-16', '1', '5.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718323', 'Diana Dwi Indriani', 'perempuan', 'Banjar', '2019-05-15', '1', '6.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718324', 'Eka Sri Yulianti', 'perempuan', 'Banjar', '2019-05-01', '1', '7.jpg', 'default_qr.jpg', 'Banjar', '3', '1'),
('11718325', 'Fajar Fitriadi', 'laki-laki', 'Banjar', '2019-05-05', '1', '8.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718326', 'Fitriah', 'perempuan', 'Banjar', '2019-05-09', '1', '9.jpg', 'default_qr.jpg', 'Banjar', '2', '1'),
('11718327', 'Gita Nurjanah', 'perempuan', 'Banjar', '2019-05-05', '1', '10.jpg', 'default_qr.jpg', 'Banjar', '2', '1'),
('11718329', 'Lia Kartika', 'perempuan', 'Banjar', '2019-05-06', '1', '11.jpg', 'default_qr.jpg', 'Banjar', '3', '1'),
('11718330', 'Mawar Vina', 'perempuan', 'Banjar', '2019-05-14', '1', '12.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718331', 'Mila Triani', 'perempuan', 'Banjar', '2019-05-03', '1', '13.jpg', 'default_qr.jpg', 'Banjar', '2', '1'),
('11718332', 'Muhamad Juhrufsurur', 'laki-laki', 'Banjar', '2019-05-04', '1', '14.jpg', 'default_qr.jpg', 'Banjar', '3', '1'),
('11718333', 'Muhamad Rizki P', 'laki-laki', 'Banjar', '2019-05-03', '1', '15.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718334', 'Mutia Rikban', 'perempuan', 'Banjar', '2019-05-02', '1', '16.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718335', 'Nova Sabaniah', 'perempuan', 'Banjar', '2019-05-01', '1', '17.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718336', 'Nurshinta Dwi F', 'perempuan', 'Banjar', '2019-05-05', '1', '18.jpg', 'default_qr.jpg', 'Cilacap', '1', '1'),
('11718337', 'Nurjanah', 'perempuan', 'Banjar', '2019-05-04', '1', '19.jpg', 'default_qr.jpg', 'Ciamis', '5', '1'),
('11718338', 'Nurul Fadilah', 'perempuan', 'Banjar', '2019-05-01', '1', '20.jpg', 'default_qr.jpg', 'Banjar', '2', '1'),
('11718339', 'Putri Nurhasanah', 'perempuan', 'Banjar', '2019-05-03', '1', '21.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718341', 'Rino Pamuji', 'laki-laki', 'Banjar', '2019-05-02', '1', '22.jpg', 'default_qr.jpg', 'Ciamis', '1', '1'),
('11718342', 'Rizal Aimar M', 'laki-laki', 'Banjar', '2019-05-08', '1', '23.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718343', 'Robi Dede W', 'laki-laki', 'Banjar', '0000-00-00', '1', '24.jpg', 'default_qr.jpg', 'Ciamis', '1', '1'),
('11718344', 'Sabana Nur Rizki H', 'laki-laki', 'Banjar', '0000-00-00', '1', '25.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718345', 'Sinta Indriani', 'perempuan', 'Banjar', '0000-00-00', '1', '26.jpg', 'default_qr.jpg', 'Banjar', '5', '1'),
('11718346', 'Sri Wahyuningsih', 'perempuan', 'Banjar', '0000-00-00', '1', '27.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718347', 'Tia Nurwidya', 'perempuan', 'Banjar', '0000-00-00', '1', '28.jpg', 'default_qr.jpg', 'Banjar', '1', '1'),
('11718348', 'Titin Supriatin', 'perempuan', 'Banjar', '0000-00-00', '1', '29.jpg', 'default_qr.jpg', 'Cilacap', '1', '1'),
('11718349', 'Ulfiah', 'perempuan', 'Banjar', '0000-00-00', '1', '30.jpg', 'default_qr.jpg', 'Cilacap', '1', '1'),
('11718351', 'Yoga Pangestu P', 'laki-laki', 'Banjar', '0000-00-00', '1', '31.jpg', 'default_qr.jpg', 'Cilacap', '1', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_biosiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_biosiswa` (
`nis` varchar(50)
,`nama` varchar(200)
,`jk` enum('laki-laki','perempuan')
,`tampat_ttl` text
,`tll` date
,`kelas` enum('X RPL 1','XI RPL 1','XII RPL 1','')
,`photo_siswa` text
,`qr_siswa` varchar(200)
,`alamat` text
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_biosiswa`
--
DROP TABLE IF EXISTS `v_biosiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_biosiswa`  AS  select `tbl_detail_biosiswa`.`nis` AS `nis`,`tbl_detail_biosiswa`.`nama` AS `nama`,`tbl_detail_biosiswa`.`jk` AS `jk`,`tbl_detail_biosiswa`.`tampat_ttl` AS `tampat_ttl`,`tbl_detail_biosiswa`.`tll` AS `tll`,`tbl_kelas`.`kelas` AS `kelas`,`tbl_detail_biosiswa`.`photo_siswa` AS `photo_siswa`,`tbl_detail_biosiswa`.`qr_siswa` AS `qr_siswa`,`tbl_detail_biosiswa`.`alamat` AS `alamat` from (`tbl_detail_biosiswa` join `tbl_kelas` on((`tbl_detail_biosiswa`.`id_kelas` = `tbl_kelas`.`id_kelas`))) ;

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
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
