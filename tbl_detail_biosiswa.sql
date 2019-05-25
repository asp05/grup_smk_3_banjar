-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2019 pada 04.25
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
-- Struktur dari tabel `tbl_detail_biosiswa`
--

CREATE TABLE `tbl_detail_biosiswa` (
  `nis` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat_ttl` text NOT NULL,
  `ttl` date NOT NULL,
  `id_kelas` varchar(100) NOT NULL,
  `photo_siswa` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `qr_siswa` varchar(200) NOT NULL DEFAULT 'default_qr.jpg',
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_biosiswa`
--

INSERT INTO `tbl_detail_biosiswa` (`nis`, `nama`, `jk`, `tempat_ttl`, `ttl`, `id_kelas`, `photo_siswa`, `qr_siswa`, `alamat`) VALUES
('11718317', 'Aenatul Hasanah', 'perempuan', 'Banjar', '2001-04-01', '1', '1.jpg', 'default_qr.jpg', 'Banjar'),
('11718318', 'Ali Musthofa', 'laki-laki', 'Banjar', '2019-05-04', '1', '2.jpg', 'default_qr.jpg', 'Ciamis'),
('11718319', 'Andi Sugara Putra', 'laki-laki', 'Banjar', '2019-05-15', '1', '3.jpg', 'default_qr.jpg', 'Banjar'),
('11718321', 'Ari Aryansyah', 'laki-laki', 'Banjar', '2019-05-02', '1', '4.jpg', 'default_qr.jpg', 'Banjar'),
('11718322', 'Bagus Adi Saputra', 'laki-laki', 'Banjar', '2019-05-16', '1', '5.jpg', 'default_qr.jpg', 'Banjar'),
('11718323', 'Diana Dwi Indriani', 'perempuan', 'Banjar', '2019-05-15', '1', '6.jpg', 'default_qr.jpg', 'Banjar'),
('11718324', 'Eka Sri Yulianti', 'perempuan', 'Banjar', '2019-05-01', '1', '7.jpg', 'default_qr.jpg', 'Banjar'),
('11718325', 'Fajar Fitriadi', 'laki-laki', 'Banjar', '2019-05-05', '1', '8.jpg', 'default_qr.jpg', 'Banjar'),
('11718326', 'Fitriah', 'perempuan', 'Banjar', '2019-05-09', '1', '9.jpg', 'default_qr.jpg', 'Banjar'),
('11718327', 'Gita Nurjanah', 'perempuan', 'Banjar', '2019-05-05', '1', '10.jpg', 'default_qr.jpg', 'Banjar'),
('11718329', 'Lia Kartika', 'perempuan', 'Banjar', '2019-05-06', '1', '11.jpg', 'default_qr.jpg', 'Banjar'),
('11718330', 'Mawar Vina', 'perempuan', 'Banjar', '2019-05-14', '1', '12.jpg', 'default_qr.jpg', 'Banjar'),
('11718331', 'Mila Triani', 'perempuan', 'Banjar', '2019-05-03', '1', '13.jpg', 'default_qr.jpg', 'Banjar'),
('11718332', 'Muhamad Juhrufsurur', 'laki-laki', 'Banjar', '2019-05-04', '1', '14.jpg', 'default_qr.jpg', 'Banjar'),
('11718333', 'Muhamad Rizki P', 'laki-laki', 'Banjar', '2019-05-03', '1', '15.jpg', 'default_qr.jpg', 'Banjar'),
('11718334', 'Mutia Rikban', 'perempuan', 'Banjar', '2019-05-02', '1', '16.jpg', 'default_qr.jpg', 'Banjar'),
('11718335', 'Nova Sabaniah', 'perempuan', 'Banjar', '2019-05-01', '1', '17.jpg', 'default_qr.jpg', 'Banjar'),
('11718336', 'Nurshinta Dwi F', 'perempuan', 'Banjar', '2019-05-05', '1', '18.jpg', 'default_qr.jpg', 'Cilacap'),
('11718337', 'Nurjanah', 'perempuan', 'Banjar', '2019-05-04', '1', '19.jpg', 'default_qr.jpg', 'Ciamis'),
('11718338', 'Nurul Fadilah', 'perempuan', 'Banjar', '2019-05-01', '1', '20.jpg', 'default_qr.jpg', 'Banjar'),
('11718339', 'Putri Nurhasanah', 'perempuan', 'Banjar', '2019-05-03', '1', '21.jpg', 'default_qr.jpg', 'Banjar'),
('11718341', 'Rino Pamuji', 'laki-laki', 'Banjar', '2019-05-02', '1', '22.jpg', 'default_qr.jpg', 'Ciamis'),
('11718342', 'Rizal Aimar M', 'laki-laki', 'Banjar', '2019-05-08', '1', '23.jpg', 'default_qr.jpg', 'Banjar'),
('11718343', 'Robi Dede W', 'laki-laki', 'Banjar', '0000-00-00', '1', '24.jpg', 'default_qr.jpg', 'Ciamis'),
('11718344', 'Sabana Nur Rizki H', 'laki-laki', 'Banjar', '0000-00-00', '1', '25.jpg', 'default_qr.jpg', 'Banjar'),
('11718345', 'Sinta Indriani', 'perempuan', 'Banjar', '0000-00-00', '1', '26.jpg', 'default_qr.jpg', 'Banjar'),
('11718346', 'Sri Wahyuningsih', 'perempuan', 'Banjar', '0000-00-00', '1', '27.jpg', 'default_qr.jpg', 'Banjar'),
('11718347', 'Tia Nurwidya', 'perempuan', 'Banjar', '0000-00-00', '1', '28.jpg', 'default_qr.jpg', 'Banjar'),
('11718348', 'Titin Supriatin', 'perempuan', 'Banjar', '0000-00-00', '1', '29.jpg', 'default_qr.jpg', 'Cilacap'),
('11718349', 'Ulfiah', 'perempuan', 'Banjar', '0000-00-00', '1', '30.jpg', 'default_qr.jpg', 'Cilacap'),
('11718351', 'Yoga Pangestu P', 'laki-laki', 'Banjar', '0000-00-00', '1', '31.jpg', 'default_qr.jpg', 'Cilacap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_biosiswa`
--
ALTER TABLE `tbl_detail_biosiswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
