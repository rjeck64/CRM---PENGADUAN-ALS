-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 08:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `rasa_kopi` int(11) NOT NULL,
  `variasi_menu` int(11) NOT NULL,
  `keramahan_staf` int(11) NOT NULL,
  `kecepatan_layanan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `kenyamanan` int(11) NOT NULL,
  `kebersihan` int(11) NOT NULL,
  `kepuasan_keseluruhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `nama`, `usia`, `jenis_kelamin`, `rasa_kopi`, `variasi_menu`, `keramahan_staf`, `kecepatan_layanan`, `harga`, `kenyamanan`, `kebersihan`, `kepuasan_keseluruhan`) VALUES
(1, 'Reyhan', 21, 'Pria', 5, 3, 4, 2, 2, 4, 4, 4),
(2, 'Johan', 25, 'Pria', 3, 1, 2, 3, 2, 5, 2, 1),
(3, 'Rahma', 22, 'Wanita', 4, 1, 2, 5, 4, 4, 1, 1),
(4, 'Olivia', 22, 'Wanita', 1, 3, 5, 2, 3, 2, 5, 3),
(5, 'Rizki', 20, 'Pria', 1, 1, 5, 3, 4, 2, 2, 2),
(6, 'Shofi', 23, 'Wanita', 1, 4, 2, 5, 4, 1, 2, 1),
(7, 'Irvan', 28, 'Pria', 5, 3, 1, 3, 1, 5, 3, 3),
(8, 'michael', 35, 'Pria', 1, 1, 5, 3, 4, 2, 2, 2),
(9, 'Jihan', 23, 'Pria', 1, 2, 3, 5, 4, 4, 4, 2),
(10, 'Isabella', 27, 'Wanita', 2, 3, 5, 5, 3, 2, 3, 1),
(11, 'Reza', 21, 'Pria', 1, 4, 2, 3, 5, 1, 5, 4),
(12, 'Ilham', 26, 'Pria', 4, 4, 5, 5, 4, 3, 1, 3),
(13, 'Sherly', 22, 'Wanita', 2, 1, 3, 2, 2, 4, 3, 2),
(14, 'Tiara', 21, 'Wanita', 1, 5, 1, 2, 5, 4, 4, 1),
(15, 'Thoifa', 22, 'Wanita', 5, 2, 1, 3, 2, 5, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
