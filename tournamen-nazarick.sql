-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2026 at 10:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournament_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `gambar`, `status`) VALUES
(2, 'a7bfbff1c6f42efc305a2f9564178d69.png', 'Aktif'),
(4, 'fcf15d1308de8543d8651d21859f031f.png', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `bracket`
--

CREATE TABLE `bracket` (
  `id` int NOT NULL,
  `game` varchar(50) DEFAULT NULL,
  `round_match` varchar(50) DEFAULT NULL,
  `tim1` varchar(100) DEFAULT NULL,
  `tim2` varchar(100) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `winner` varchar(100) DEFAULT NULL,
  `status_match` enum('Menunggu','Selesai','Juara') DEFAULT 'Menunggu',
  `score1` int DEFAULT '0',
  `score2` int DEFAULT '0',
  `match_no` int DEFAULT '0',
  `next_match` int DEFAULT NULL,
  `bracket_level` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bracket`
--

INSERT INTO `bracket` (`id`, `game`, `round_match`, `tim1`, `tim2`, `jam_mulai`, `jam_selesai`, `winner`, `status_match`, `score1`, `score2`, `match_no`, `next_match`, `bracket_level`) VALUES
(474, 'Free Fire', 'Round 1', 'huanglong', 'lotf', NULL, NULL, NULL, 'Menunggu', 0, 0, 1, NULL, 1),
(475, 'PUBG Mobile', 'Round 1', 'navi', 'evos', NULL, NULL, NULL, 'Menunggu', 0, 0, 1, NULL, 1),
(476, 'Honor of Kings', 'Round 1', 'lotf', 'rrq', NULL, NULL, NULL, 'Menunggu', 0, 0, 1, NULL, 1),
(477, 'Mobile Legends', 'Round 1', 'lotf', 'evos', NULL, NULL, NULL, 'Menunggu', 0, 0, 1, NULL, 1),
(478, 'Mobile Legends', 'Round 1', 'navi', 'huanglong', NULL, NULL, NULL, 'Menunggu', 0, 0, 2, NULL, 1),
(479, 'Mobile Legends', 'Round 1', 'dsr', 'dsg', NULL, NULL, NULL, 'Menunggu', 0, 0, 3, NULL, 1),
(480, 'Mobile Legends', 'Round 1', 'burgenk', 'bbc', NULL, NULL, NULL, 'Menunggu', 0, 0, 4, NULL, 1),
(481, 'Mobile Legends', 'Round 2', '', '', NULL, NULL, NULL, 'Menunggu', 0, 0, 5, NULL, 2),
(482, 'Mobile Legends', 'Round 2', '', '', NULL, NULL, NULL, 'Menunggu', 0, 0, 6, NULL, 2),
(483, 'Mobile Legends', 'Round 3', '', '', NULL, NULL, NULL, 'Menunggu', 0, 0, 7, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bracket_round`
--

CREATE TABLE `bracket_round` (
  `id` int NOT NULL,
  `game` varchar(50) DEFAULT NULL,
  `round_name` varchar(100) DEFAULT NULL,
  `urutan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message` text,
  `image` varchar(255) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `image`, `is_read`, `created_at`) VALUES
(1, 2, 1, 'p', '', 1, '2026-06-21 05:18:23'),
(2, 1, 1, 'ws', '', 1, '2026-06-21 05:18:37'),
(3, 2, 1, 'p', '', 1, '2026-06-21 05:22:50'),
(4, 2, 1, 'halo min', '', 1, '2026-06-21 05:24:12'),
(5, 2, 1, 'info room', '', 1, '2026-06-21 09:51:32'),
(6, 2, 1, '', '894200d89035b02cac37cd9208008ca9.png', 1, '2026-06-21 14:30:27'),
(7, 2, 1, 'p', '', 1, '2026-06-21 14:55:01'),
(8, 2, 1, 'masih idup\n', '', 1, '2026-06-23 09:49:03'),
(9, 2, 1, 'p', '', 1, '2026-06-23 10:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id` int NOT NULL,
  `tim1` varchar(100) DEFAULT NULL,
  `tim2` varchar(100) DEFAULT NULL,
  `pemenang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int NOT NULL,
  `nama_tim` varchar(100) NOT NULL,
  `player1` varchar(100) NOT NULL,
  `player2` varchar(100) NOT NULL,
  `player3` varchar(100) NOT NULL,
  `player4` varchar(100) NOT NULL,
  `player5` varchar(100) NOT NULL,
  `cadangan1` varchar(100) DEFAULT NULL,
  `cadangan2` varchar(100) DEFAULT NULL,
  `game` varchar(50) NOT NULL,
  `status_bayar` enum('Belum Bayar','Sudah Bayar') DEFAULT 'Belum Bayar',
  `metode_bayar` enum('DANA','BRI') NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama_tim`, `player1`, `player2`, `player3`, `player4`, `player5`, `cadangan1`, `cadangan2`, `game`, `status_bayar`, `metode_bayar`, `tanggal_daftar`, `created_at`) VALUES
(2, 'huanglong', 'a', 'b', 'c', '4', 'e', 'f', '', 'ml', 'Sudah Bayar', 'BRI', '2026-06-21', '2026-06-23 09:33:42'),
(3, 'huanglong', 'a', 'b', 'c', 'd', 'e', 'f', '', 'ff', 'Sudah Bayar', 'DANA', '2026-06-21', '2026-06-23 09:33:42'),
(4, 'lotf', '1', '2', '3', '4', '5', '6', '', 'ff', 'Sudah Bayar', 'DANA', '2026-06-21', '2026-06-23 09:33:42'),
(5, 'navi', 'faker', 'ken', 'soji', 'mare', 'toki', 'liukang', '', 'pubg', 'Sudah Bayar', 'DANA', '2026-06-21', '2026-06-23 09:33:42'),
(6, 'evos', 'taz', 'murfy', 'dlar', 'clay', 'udin', 'udil', 'kairi', 'pubg', 'Sudah Bayar', 'DANA', '2026-06-21', '2026-06-23 09:33:42'),
(8, 'rrq', 'gondar', 'ibot', 'yb', 'tepe', 'yuka', '', '', 'hok', 'Sudah Bayar', 'DANA', '2026-06-22', '2026-06-23 09:33:42'),
(9, 'lotf', '1', '2', '3', '4', '5', '6', 'kairi', 'hok', 'Sudah Bayar', 'DANA', '2026-06-22', '2026-06-23 09:33:42'),
(10, 'lotf', 'a', 'b', '3', 'clay', 'toki', 'liukang', 'kairi', 'ml', 'Sudah Bayar', 'DANA', '2026-06-22', '2026-06-23 09:33:42'),
(11, 'evos', 'faker', 'murfy', 'yb', 'clay', 'toki', '', '', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(12, 'navi', 'faker', 'murfy', '3', 'd', 'toki', '', '', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(13, 'bbc', '1', '2', '3', '4', 'toki', 'f', 'kairi', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(14, 'dsg', 'q', 'w', 'a', 'sdfdz', 'sszf', '', '', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(15, 'dsr', 'qe', 'g', 'g', 'g', 'g', 'g', '', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(16, 'burgenk', 'f', 'f', 'f', 'f', 'f', '', '', 'ml', 'Sudah Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(17, 'sos', 'z', 'z', 'z', 'z', 'z', 'z', '', 'ml', 'Belum Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(18, 'cbmc', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'ml', 'Belum Bayar', 'DANA', '2026-06-23', '2026-06-23 09:33:42'),
(19, 'bbc', 'q', 'murfy', 'soji', 'clay', '5', '', '', 'ff', 'Belum Bayar', 'DANA', '2026-06-23', '2026-06-23 09:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int NOT NULL,
  `nama_tim` varchar(100) DEFAULT NULL,
  `game` varchar(100) DEFAULT NULL,
  `kapten` varchar(100) DEFAULT NULL,
  `status_bayar` enum('Belum Bayar','Sudah Bayar') DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `turnamen`
--

CREATE TABLE `turnamen` (
  `id` int NOT NULL,
  `nama_turnamen` varchar(100) DEFAULT NULL,
  `game` varchar(100) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `hadiah` varchar(100) DEFAULT NULL,
  `status` enum('Pendaftaran','Berlangsung','Selesai') DEFAULT NULL,
  `status_turnamen` enum('Tersedia','Tidak Tersedia') DEFAULT 'Tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `turnamen`
--

INSERT INTO `turnamen` (`id`, `nama_turnamen`, `game`, `tanggal_mulai`, `hadiah`, `status`, `status_turnamen`) VALUES
(1, 'MLBB Championship', 'Mobile Legends', '2026-06-12', 'Rp 500.000,00', 'Pendaftaran', 'Tidak Tersedia'),
(2, 'PUBG Battle Cup', 'PUBG', '2026-10-05', 'Rp 500.000,00', 'Berlangsung', 'Tidak Tersedia'),
(3, 'Free Fire Arena', 'Free Fire', '2026-08-17', 'Rp 2.000.000,00', 'Selesai', 'Tidak Tersedia'),
(4, 'HOK National Cup', 'HOK', '2026-12-24', 'Rp 7.000.000,00', 'Pendaftaran', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', '$2y$10$K1.pADE/e/Sc1yyXVPpAbulFU2ooDCw6LkLwrNwMlkgpRI78/nPZK', 'admin'),
(2, 'MARCHILO', 'marchilo123', '$2y$10$x2dTH.Fp75VAzPrOPWGmTOFVRDzurviuOu4awrCmbrYXarHgBF2ke', 'user'),
(3, 'Gondar', 'gondar123', '$2y$10$1d6u5C7ai/cK6S4a8oqAYeNw0oyf8aJi4/WxM1EraZm0OWKBNjuki', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bracket`
--
ALTER TABLE `bracket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bracket_round`
--
ALTER TABLE `bracket_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turnamen`
--
ALTER TABLE `turnamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bracket`
--
ALTER TABLE `bracket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;

--
-- AUTO_INCREMENT for table `bracket_round`
--
ALTER TABLE `bracket_round`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `turnamen`
--
ALTER TABLE `turnamen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
