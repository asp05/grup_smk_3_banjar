-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2019 pada 05.25
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
-- Struktur untuk view `v_absen`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_absen`  AS  select `tbl_detail_biosiswa`.`nis` AS `nis`,`tbl_detail_biosiswa`.`nama` AS `nama`,`tbl_detail_biosiswa`.`jk` AS `jk`,`tbl_kelas`.`kelas` AS `kelas`,`tbl_detail_biosiswa`.`photo_siswa` AS `photo_siswa`,`tbl_detail_biosiswa`.`qr_siswa` AS `qr_siswa`,`tbl_status`.`status` AS `status`,`tbl_tgl`.`tgl` AS `tgl` from (((`tbl_detail_biosiswa` join `tbl_kelas` on((`tbl_detail_biosiswa`.`id_kelas` = `tbl_kelas`.`id_kelas`))) join `tbl_status` on((`tbl_detail_biosiswa`.`id_status` = `tbl_status`.`id_status`))) join `tbl_tgl` on((`tbl_detail_biosiswa`.`id_tgl` = `tbl_tgl`.`id_tgl`))) ;

--
-- VIEW  `v_absen`
-- Data: Tidak ada
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
