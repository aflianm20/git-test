-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2020 at 01:20 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_kry` int(11) NOT NULL,
  `nik_kry` varchar(30) NOT NULL,
  `nama_kry` varchar(25) NOT NULL,
  `gaji_kry` varchar(30) NOT NULL,
  `jenis_kry` varchar(30) NOT NULL,
  `alamat_kry` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_kry`, `nik_kry`, `nama_kry`, `gaji_kry`, `jenis_kry`, `alamat_kry`) VALUES
(7, '3173032004010002', 'AHMAD SAIFULOH', '200.000', 'PEREMPUAN', 'JL. MANGGA BESAR IV K NO.14 E');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(12) NOT NULL,
  `last_name` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `foto` varchar(5000) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `hak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `jabatan`, `alamat`, `deskripsi`, `foto`, `instagram`, `hak`) VALUES
(1, 'AFLIAN', 'MAHYARUDDIN', 'tuktukerz', '81dc9bdb52d04dc20036dbd8313ed055', 'aflianmahyaruddin@gmail.com', 'CEO Tuktukerz.co', 'JL.MANGGA BESAR IV K NO.14 E RT.008 RW.002 KEL.TAMANSARI KEC.TAMANSARI JAKARTA BARAT', 'Saya adalah orang yang terbiasa bersosialisasi, bertemu dengan berkerja sama dengan orang baru tidak menjadi masalah bagi saya. Selain itu saya dikenal sebagai seorang pendengar yang baik bukan hanya bagi rekan-rekan namun juga rekanan.', 'ian.jpeg', 'www.instagram.com/tuktukerz', 'admin'),
(2, 'YUGI', 'SUNDARA', 'yugisundara', '81dc9bdb52d04dc20036dbd8313ed055', 'yugisundara@gmail.com', 'CEO Yugisundaskuy.inc', 'JL. MANA AJA KE YANG PENTING ENAK TANGGERANG ', 'Hobi Kamu apa? hobi saya ngerjain orang ', 'yugi.jpeg', 'www.instagram.com/hello.yugi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_kry`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_kry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
