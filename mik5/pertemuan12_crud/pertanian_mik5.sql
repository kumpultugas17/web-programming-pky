-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 09:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertanian_mik5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_panen`
--

CREATE TABLE `tabel_panen` (
  `id` int(11) NOT NULL,
  `nama_tanaman` varchar(32) NOT NULL,
  `hasil_panen` int(11) NOT NULL,
  `lama_tanam` int(11) NOT NULL,
  `tanggal_panen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_panen`
--

INSERT INTO `tabel_panen` (`id`, `nama_tanaman`, `hasil_panen`, `lama_tanam`, `tanggal_panen`) VALUES
(1459346526, 'Padi Skrip', 4021, 6, '2015-10-20'),
(1459347719, 'Cabe Rawit', 112, 7, '2016-08-02'),
(1634620814, 'bayam', 12, 1, '2021-10-19'),
(1634627287, 'cinta', 12, 12, '2021-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_panen`
--
ALTER TABLE `tabel_panen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_panen`
--
ALTER TABLE `tabel_panen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1634627288;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
