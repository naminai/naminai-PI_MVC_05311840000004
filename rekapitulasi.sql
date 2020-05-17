-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 01:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `id` int(11) NOT NULL,
  `jenisDonasi` varchar(255) NOT NULL,
  `namaDonatur` varchar(255) NOT NULL,
  `bentukDonasi` varchar(255) NOT NULL,
  `jumlahDonasi` varchar(255) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id`, `jenisDonasi`, `namaDonatur`, `bentukDonasi`, `jumlahDonasi`, `time`) VALUES
(1, 'Uang', 'Donny', 'Uang', 'Rp.10.000', '2020-04-21'),
(2, 'Alat Kesehatan', 'Razil', 'Obat-obatan', '10', '2020-04-25'),
(3, 'Bahan Makanan', 'Rafli', 'Indomie', '10 bungkus', '2020-04-25'),
(4, 'Bahan Makanan', 'Boy Amar', 'Beras', '10 kg', '2020-04-25'),
(5, 'Alat Kesehatan', 'Fyodor', 'Masker', '10', '2020-05-15'),
(6, 'Alat Kesehatan', 'Effendy', 'Masker', '10', '2020-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
