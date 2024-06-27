-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 07:25 PM
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
-- Database: `crm - als`
--

-- --------------------------------------------------------

--
-- Table structure for table `kepuasan`
--

CREATE TABLE `kepuasan` (
  `id_kepuasan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `p1` tinyint(1) NOT NULL CHECK (`p1` between 1 and 5),
  `p2` tinyint(1) NOT NULL CHECK (`p2` between 1 and 5),
  `p3` tinyint(1) NOT NULL CHECK (`p3` between 1 and 5),
  `p4` tinyint(1) NOT NULL CHECK (`p4` between 1 and 5),
  `p5` tinyint(1) NOT NULL CHECK (`p5` between 1 and 5),
  `p6` tinyint(1) NOT NULL CHECK (`p6` between 1 and 5),
  `p7` tinyint(1) NOT NULL CHECK (`p7` between 1 and 5),
  `p8` tinyint(1) NOT NULL CHECK (`p8` between 1 and 5),
  `p9` tinyint(1) NOT NULL CHECK (`p9` between 1 and 5),
  `p10` tinyint(1) NOT NULL CHECK (`p10` between 1 and 5),
  `p11` tinyint(1) NOT NULL CHECK (`p11` between 1 and 5),
  `p12` tinyint(1) NOT NULL CHECK (`p12` between 1 and 5),
  `p13` varchar(255) NOT NULL,
  `p14` varchar(255) NOT NULL,
  `p15` varchar(255) NOT NULL,
  `tanggal_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepuasan`
--

INSERT INTO `kepuasan` (`id_kepuasan`, `nama`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `tanggal_submit`) VALUES
(1, 'John Doe', 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 'Komentar 1', 'Saran 1', 'Feedback 1', '2024-06-14'),
(2, 'Jane Smith', 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 'Komentar 2', 'Saran 2', 'Feedback 2', '2024-06-15'),
(3, 'Michael Johnson', 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 'Komentar 3', 'Saran 3', 'Feedback 3', '2024-06-16'),
(4, 'Emily Davis', 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 'Komentar 4', 'Saran 4', 'Feedback 4', '2024-06-17'),
(5, 'Christopher Brown', 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 'Komentar 5', 'Saran 5', 'Feedback 5', '2024-06-18'),
(6, 'Jessica Wilson', 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 'Komentar 6', 'Saran 6', 'Feedback 6', '2024-06-19'),
(7, 'David Martinez', 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 'Komentar 7', 'Saran 7', 'Feedback 7', '2024-06-20'),
(8, 'Sarah Lee', 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 'Komentar 8', 'Saran 8', 'Feedback 8', '2024-06-21'),
(9, 'Daniel White', 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 'Komentar 9', 'Saran 9', 'Feedback 9', '2024-06-22'),
(10, 'Laura Harris', 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 'Komentar 10', 'Saran 10', 'Feedback 10', '2024-06-23'),
(11, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(12, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(13, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(14, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(15, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(16, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(17, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(18, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(19, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(20, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(21, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00'),
(22, 'Reyhan', 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 'yihahahahahah', 'bbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccc', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `judul_laporan` varchar(255) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `plat_kendaraan` varchar(20) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `lampiran` longblob DEFAULT NULL,
  `anonim_rahasia` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `judul_laporan`, `isi_laporan`, `tanggal_kejadian`, `plat_kendaraan`, `asal`, `tujuan`, `jam_keberangkatan`, `tanggal_keberangkatan`, `lampiran`, `anonim_rahasia`) VALUES
(1, 'Laporan Kecelakaan di Jalan Raya', 'Terjadi kecelakaan beruntun di jalan raya pada pagi hari.', '2024-06-01', 'B1234XYZ', 'Jakarta', 'Bandung', '08:00:00', '2024-06-01', NULL, 0),
(2, 'Pengaduan Tentang Pelayanan Bus', 'Pelayanan bus sangat buruk, sopir tidak sopan dan bus sering terlambat.', '2024-06-05', 'D5678ABC', 'Surabaya', 'Malang', '10:00:00', '2024-06-05', NULL, 1),
(3, 'Laporan Kecelakaan di Jalan Raya', 'Terjadi kecelakaan beruntun di jalan raya pada pagi hari.', '2024-06-01', 'B1234XYZ', 'Jakarta', 'Bandung', '08:00:00', '2024-06-01', NULL, 0),
(4, 'Pengaduan Tentang Pelayanan Bus', 'Pelayanan bus sangat buruk, sopir tidak sopan dan bus sering terlambat.', '2024-06-05', 'D5678ABC', 'Surabaya', 'Malang', '10:00:00', '2024-06-05', NULL, 1),
(5, 'Laporan Kemacetan', 'Kemacetan parah terjadi di tol Cikampek.', '2024-06-03', 'B2345CDE', 'Bekasi', 'Cirebon', '06:00:00', '2024-06-03', NULL, 0),
(6, 'Keluhan Kondisi Jalan', 'Jalan rusak parah di daerah Depok.', '2024-06-07', 'F6789GHI', 'Depok', 'Bogor', '09:00:00', '2024-06-07', NULL, 1),
(7, 'Laporan Kerusakan Bus', 'Bus mengalami kerusakan mesin di tengah perjalanan.', '2024-06-02', 'H3456JKL', 'Tangerang', 'Serang', '11:00:00', '2024-06-02', NULL, 0),
(8, 'Pengaduan Sopir Ugal-ugalan', 'Sopir bus mengemudi dengan sangat ugal-ugalan.', '2024-06-04', 'K4567MNO', 'Medan', 'Padang', '13:00:00', '2024-06-04', NULL, 1),
(9, 'Laporan Tabrak Lari', 'Terjadi tabrak lari di jalan tol Jagorawi.', '2024-06-06', 'L5678PQR', 'Bogor', 'Jakarta', '14:00:00', '2024-06-06', NULL, 0),
(10, 'Keluhan Fasilitas Bus', 'Fasilitas dalam bus tidak memadai, AC rusak.', '2024-06-08', 'M6789STU', 'Bandung', 'Jakarta', '15:00:00', '2024-06-08', NULL, 1),
(11, 'Laporan Pencurian', 'Barang penumpang dicuri saat dalam perjalanan.', '2024-06-09', 'N7890VWX', 'Yogyakarta', 'Solo', '16:00:00', '2024-06-09', NULL, 0),
(12, 'Pengaduan Terhadap Penumpang', 'Penumpang lain mengganggu perjalanan dengan perilaku tidak menyenangkan.', '2024-06-10', 'O8901YZA', 'Makassar', 'Manado', '17:00:00', '2024-06-10', NULL, 1),
(13, 'Laporan Jalan Licin', 'Jalan menjadi sangat licin setelah hujan.', '2024-06-11', 'P9012BCD', 'Semarang', 'Jepara', '18:00:00', '2024-06-11', NULL, 0),
(14, 'Keluhan Terhadap Jadwal Bus', 'Bus sering tidak tepat waktu, jadwal keberangkatan tidak konsisten.', '2024-06-12', 'Q0123DEF', 'Palembang', 'Lampung', '19:00:00', '2024-06-12', NULL, 1),
(15, 'Laporan Kebersihan Bus', 'Kebersihan dalam bus sangat buruk, banyak sampah.', '2024-06-13', 'R1234GHI', 'Pontianak', 'Samarinda', '20:00:00', '2024-06-13', NULL, 0),
(16, 'Pengaduan Tiket Palsu', 'Penumpang menerima tiket palsu dari calo.', '2024-06-14', 'S2345JKL', 'Balikpapan', 'Banjarmasin', '21:00:00', '2024-06-14', NULL, 1),
(17, 'Laporan Lampu Jalan Mati', 'Lampu jalan mati, menyebabkan jalan gelap dan berbahaya.', '2024-06-15', 'T3456MNO', 'Denpasar', 'Gianyar', '22:00:00', '2024-06-15', NULL, 0),
(18, 'Keluhan Terhadap Tarif', 'Tarif bus tiba-tiba naik tanpa pemberitahuan.', '2024-06-16', 'U4567PQR', 'Bandar Lampung', 'Kalianda', '23:00:00', '2024-06-16', NULL, 1),
(19, 'Laporan Kecelakaan Ringan', 'Bus mengalami kecelakaan ringan di jalan tol.', '2024-06-17', 'V5678STU', 'Bogor', 'Cianjur', '07:00:00', '2024-06-17', NULL, 0),
(20, 'Pengaduan Ketersediaan Bus', 'Bus tidak cukup untuk menampung semua penumpang.', '2024-06-18', 'W6789XYZ', 'Sukabumi', 'Jakarta', '08:00:00', '2024-06-18', NULL, 1),
(21, 'Laporan Perilaku Kenek', 'Kenek bus berbicara kasar kepada penumpang.', '2024-06-19', 'X7890ABC', 'Jember', 'Banyuwangi', '09:00:00', '2024-06-19', NULL, 0),
(22, 'Keluhan Pendingin Udara', 'Pendingin udara di dalam bus tidak berfungsi dengan baik.', '2024-06-20', 'Y8901DEF', 'Padang', 'Bukittinggi', '10:00:00', '2024-06-20', NULL, 1),
(23, 'Laporan Jalan Berlubang', 'Banyak jalan berlubang yang membahayakan pengendara.', '2024-06-21', 'Z9012GHI', 'Manado', 'Bitung', '11:00:00', '2024-06-21', NULL, 0),
(24, 'Pengaduan Kebisingan', 'Bus terlalu bising karena mesin yang tidak terawat.', '2024-06-22', 'A1234JKL', 'Makassar', 'Parepare', '12:00:00', '2024-06-22', NULL, 1),
(25, 'Laporan Penyalahgunaan Alkohol', 'Sopir bus diduga mengonsumsi alkohol sebelum berkendara.', '2024-06-23', 'B2345MNO', 'Medan', 'Binjai', '13:00:00', '2024-06-23', NULL, 0),
(26, 'Keluhan Kapasitas Tempat Duduk', 'Jumlah tempat duduk tidak sesuai dengan jumlah penumpang.', '2024-06-24', 'C3456PQR', 'Ambon', 'Masohi', '14:00:00', '2024-06-24', NULL, 1),
(27, 'Laporan Kecurangan Tiket', 'Ada indikasi kecurangan dalam penjualan tiket bus.', '2024-06-25', 'D4567STU', 'Jayapura', 'Wamena', '15:00:00', '2024-06-25', NULL, 0),
(28, 'Pengaduan Kondisi Jalan', 'Kondisi jalan sangat buruk dan berbahaya untuk dilalui.', '2024-06-26', 'E5678VWX', 'Bandar Lampung', 'Metro', '16:00:00', '2024-06-26', NULL, 1),
(29, 'Laporan Pencurian di Terminal', 'Terjadi pencurian di terminal bus.', '2024-06-27', 'F6789YZA', 'Serang', 'Pandeglang', '17:00:00', '2024-06-27', NULL, 0),
(30, 'Keluhan Terhadap Operator Bus', 'Operator bus tidak memberikan informasi yang jelas mengenai rute.', '2024-06-28', 'G7890BCD', 'Bandung', 'Cimahi', '18:00:00', '2024-06-28', NULL, 1),
(31, 'Laporan Kebakaran', 'Terjadi kebakaran kecil di dalam bus.', '2024-06-29', 'H8901EFG', 'Cirebon', 'Indramayu', '19:00:00', '2024-06-29', NULL, 0),
(32, 'Pengaduan Terhadap Pembatalan Bus', 'Bus sering dibatalkan tanpa pemberitahuan.', '2024-06-30', 'I9012HIJ', 'Kediri', 'Blitar', '20:00:00', '2024-06-30', NULL, 1),
(33, 'Laporan Bus Tergelincir', 'Bus tergelincir di jalan licin karena hujan.', '2024-07-01', 'J1234KLM', 'Banyuwangi', 'Jember', '21:00:00', '2024-07-01', NULL, 0),
(34, 'Keluhan Terhadap Sopir Baru', 'Sopir baru tidak mengetahui rute dengan baik.', '2024-07-02', 'K2345NOP', 'Surabaya', 'Sidoarjo', '22:00:00', '2024-07-02', NULL, 1),
(35, 'Laporan Kecelakaan Berat', 'Kecelakaan berat terjadi di tol Cipularang.', '2024-07-03', 'L3456QRS', 'Bandung', 'Purwakarta', '23:00:00', '2024-07-03', NULL, 0),
(36, 'Pengaduan Kondisi AC', 'AC dalam bus tidak dingin dan membuat perjalanan tidak nyaman.', '2024-07-04', 'M4567TUV', 'Medan', 'Pematang Siantar', '07:00:00', '2024-07-04', NULL, 1),
(37, 'Laporan Penipuan', 'Penumpang tertipu oleh calo yang menawarkan tiket palsu.', '2024-07-05', 'N5678WXY', 'Semarang', 'Salatiga', '08:00:00', '2024-07-05', NULL, 0),
(38, 'Keluhan Terhadap Fasilitas Toilet', 'Toilet dalam bus sangat kotor dan tidak layak digunakan.', '2024-07-06', 'O6789ZAB', 'Mataram', 'Lombok', '09:00:00', '2024-07-06', NULL, 1),
(39, 'Laporan Kendaraan Mogok', 'Bus mogok di tengah jalan dan menyebabkan penumpang terlantar.', '2024-07-07', 'P7890CDE', 'Bengkulu', 'Curup', '10:00:00', '2024-07-07', NULL, 0),
(40, 'Pengaduan Terhadap Sistem Reservasi', 'Sistem reservasi online tidak berfungsi dengan baik.', '2024-07-08', 'Q8901FGH', 'Palu', 'Poso', '11:00:00', '2024-07-08', NULL, 1),
(41, 'Laporan Penumpang Menghilang', 'Penumpang menghilang setelah tiba di terminal.', '2024-07-09', 'R9012IJK', 'Gorontalo', 'Marisa', '12:00:00', '2024-07-09', NULL, 0),
(42, 'Keluhan Keamanan di Terminal', 'Keamanan di terminal bus sangat rendah dan rawan kejahatan.', '2024-07-10', 'S1234LMN', 'Tarakan', 'Nunukan', '13:00:00', '2024-07-10', NULL, 1),
(43, 'Laporan Penumpang Ilegal', 'Penumpang ilegal naik bus tanpa tiket.', '2024-07-11', 'T2345OPQ', 'Kupang', 'Atambua', '14:00:00', '2024-07-11', NULL, 0),
(44, 'Pengaduan Terhadap Tempat Duduk', 'Tempat duduk dalam bus sangat tidak nyaman dan sempit.', '2024-07-12', 'U3456RST', 'Batam', 'Tanjung Pinang', '15:00:00', '2024-07-12', NULL, 1),
(45, 'Laporan Perilaku Penumpang', 'Penumpang lain berperilaku kasar dan mengganggu.', '2024-07-13', 'V4567UVW', 'Bandung', 'Subang', '16:00:00', '2024-07-13', NULL, 0),
(46, 'Keluhan Terhadap Kecepatan Bus', 'Bus berjalan terlalu lambat dan sering berhenti.', '2024-07-14', 'W5678XYZ', 'Padang', 'Pariaman', '17:00:00', '2024-07-14', NULL, 1),
(47, 'Laporan Penumpang Tidak Tertib', 'Banyak penumpang yang tidak tertib dan membuat suasana dalam bus tidak nyaman.', '2024-07-15', 'X6789ABC', 'Palembang', 'Lahat', '18:00:00', '2024-07-15', NULL, 0),
(48, 'Pengaduan Terhadap Jarak Tempuh', 'Jarak tempuh terlalu jauh dan tidak ada pemberhentian yang memadai.', '2024-07-16', 'Y7890DEF', 'Manado', 'Tomohon', '19:00:00', '2024-07-16', NULL, 1),
(49, 'Laporan Sopir Tidak Mengerti Jalan', 'Sopir tidak mengetahui jalan dengan baik dan sering tersesat.', '2024-07-17', 'Z8901GHI', 'Banjarmasin', 'Martapura', '20:00:00', '2024-07-17', NULL, 0),
(50, 'Keluhan Terhadap Kondisi Ban', 'Ban bus terlihat gundul dan tidak aman.', '2024-07-18', 'A9012JKL', 'Tangerang', 'Cilegon', '21:00:00', '2024-07-18', NULL, 1),
(51, 'Laporan Tabrakan Kecil', 'Bus mengalami tabrakan kecil dengan kendaraan lain.', '2024-07-19', 'B0123MNO', 'Bekasi', 'Karawang', '22:00:00', '2024-07-19', NULL, 0),
(52, 'Pengaduan Penumpang Merokok', 'Ada penumpang yang merokok dalam bus dan membuat tidak nyaman.', '2024-07-20', 'C1234PQR', 'Kendari', 'Baubau', '23:00:00', '2024-07-20', NULL, 1),
(53, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbb', '2024-06-14', 'cccccccccccccccccccc', 'aaaaaaaaaaaaaa', 'acccccccccccccccccccccc', '02:12:00', '2024-06-20', '', 0),
(54, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-06-19', 'cccccccccccccccccccc', 'aaaaaaaaaaaaaa', 'acccccccccccccccccccccc', '01:14:00', '2024-06-20', '', 1),
(55, 'cccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddddd', '2024-06-21', 'cccccccccccccccccccc', 'aaaaaaaaaaaaaa', 'acccccccccccccccccccccc', '01:17:00', '2024-06-20', '', 1),
(56, 'acccccccccccccccccccccccccccccccccccccccccc', '', '2024-06-18', 'ad', 'ad', 'ad', '23:28:00', '2024-06-25', 0x75706c6f6164732f332e6a7067, 1),
(57, 'acccccccccccccccccccccccccccccccccccccccccc', '', '2024-06-18', 'ad', 'ad', 'ad', '23:28:00', '2024-06-25', 0x75706c6f6164732f332e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `judul_saran` varchar(255) NOT NULL,
  `isi_saran` text NOT NULL,
  `kategori_saran` varchar(100) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `anonim_rahasia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `judul_saran`, `isi_saran`, `kategori_saran`, `tanggal_pengajuan`, `lampiran`, `anonim_rahasia`) VALUES
(1, 'Perbaikan Jalan', 'Perlu ada perbaikan jalan di sekitar area kampus karena banyak lubang.', 'Infrastruktur', '2023-01-10', 'lampiran1.pdf', 1),
(2, 'Penambahan Fasilitas', 'Mohon ditambah fasilitas AC di ruang kelas agar lebih nyaman.', 'Fasilitas', '2023-02-15', 'lampiran2.jpg', 0),
(3, 'Keamanan Kampus', 'Diperlukan penjagaan keamanan di pintu masuk kampus.', 'Keamanan', '2023-03-20', NULL, 1),
(4, 'Kebersihan Kelas', 'Ruang kelas perlu dibersihkan lebih sering, terutama di akhir pekan.', 'Kebersihan', '2023-04-05', 'lampiran3.pdf', 0),
(5, 'Parkiran Sepeda', 'Tambahkan parkiran khusus sepeda di dekat gedung perkuliahan.', 'Fasilitas', '2023-05-18', NULL, 1),
(6, 'Wi-Fi Kampus', 'Sinyal Wi-Fi di beberapa area kampus sangat lemah, mohon ditingkatkan.', 'Teknologi', '2023-06-22', 'lampiran4.jpg', 0),
(7, 'Jam Operasional Perpustakaan', 'Perpanjang jam operasional perpustakaan hingga pukul 22:00.', 'Fasilitas', '2023-07-30', 'lampiran5.pdf', 1),
(8, 'Sistem Parkir', 'Perbaiki sistem parkir yang sering mengalami gangguan teknis.', 'Infrastruktur', '2023-08-14', NULL, 0),
(9, 'Kegiatan Ekstrakurikuler', 'Adakan lebih banyak kegiatan ekstrakurikuler untuk mahasiswa.', 'Kegiatan', '2023-09-10', 'lampiran6.pdf', 1),
(10, 'Pelayanan Kantin', 'Tingkatkan pelayanan di kantin kampus agar lebih cepat dan ramah.', 'Fasilitas', '2023-10-25', 'lampiran7.jpg', 0),
(11, 'ad', 'ad', 'Rahasia', '2024-06-15', 'uploads/1.png', 0);

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
-- Indexes for table `kepuasan`
--
ALTER TABLE `kepuasan`
  ADD PRIMARY KEY (`id_kepuasan`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kepuasan`
--
ALTER TABLE `kepuasan`
  MODIFY `id_kepuasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
