-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2026 at 01:34 AM
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
-- Database: `kumahasayah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelsayah`
--

CREATE TABLE `tabelsayah` (
  `id` int NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabelsayah`
--

INSERT INTO `tabelsayah` (`id`, `nama_siswa`, `keterangan`, `tanggal`) VALUES
(5, 'Pramudya Wira Andhara', 'Hadir', '2026-05-08'),
(6, 'Midza Prada Al-Ghifary', 'Hadir', '2026-05-08'),
(8, 'GANI HENGKER', 'Hadir', '2026-05-11'),
(9, 'MAMAT  LADY COMPANION ', 'Hadir', '2026-05-11'),
(14, 'Pramudya Wira Andhara', 'Hadir', '2026-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelsayah`
--
ALTER TABLE `tabelsayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelsayah`
--
ALTER TABLE `tabelsayah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
