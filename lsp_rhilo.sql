-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 02:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_rhilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `no_surat`, `kategori`, `judul`, `dokumen`, `created_at`, `updated_at`) VALUES
(5, 'A002', 'Pemberitahuan', 'Jadwal Pembekalan TOEIC 2022', '73276-2022-10-12-12-26-00.pdf', '2022-10-12 05:26:00', '2022-10-12 05:26:00'),
(6, 'A003', 'Pengumuman', 'Syarat SKLA', '46921-2022-10-12-12-27-12.pdf', '2022-10-12 05:27:12', '2022-10-12 05:27:12'),
(7, 'A004', 'Nota Dinas', 'Link Aja', '92164-2022-10-12-12-27-49.pdf', '2022-10-12 05:27:49', '2022-10-12 05:27:49'),
(8, 'A005', 'Pemberitahuan', 'KRS Rhilo', '23700-2022-10-12-12-42-42.pdf', '2022-10-12 05:42:42', '2022-10-12 05:42:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
