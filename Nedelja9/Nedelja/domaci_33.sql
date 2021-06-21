-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 06:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `8917_Dušan_Kalejski`
--
CREATE DATABASE IF NOT EXISTS `8917_Dušan_Kalejski` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `8917_Dušan_Kalejski`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(3) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '111', 3, '2200.00', '2021-06-17'),
(2, '444', 5, '3850.00', '2021-06-17'),
(3, '444', 1, '3850.00', '2021-06-17'),
(4, '333', 4, '1000.00', '2021-06-16'),
(5, '222', 2, '3000.00', '2021-06-16'),
(6, '333', 1, '3000.00', '2021-06-16'),
(7, '222', 3, '3000.00', '2021-05-01'),
(8, '111', 5, '2000.00', '2021-05-01'),
(9, '222', 2, '3000.00', '2021-05-01'),
(10, '111', 2, '2000.00', '2021-05-01'),
(11, '789', 20, '220.00', '2021-06-17'),
(12, '789', 40, '275.00', '2021-06-17'),
(13, '789', 10, '275.00', '2021-06-17'),
(15, '776', 30, '50.00', '2021-05-01'),
(16, '761', 50, '110.00', '2021-06-17'),
(17, '761', 40, '110.00', '2021-06-17'),
(18, '761', 10, '80.00', '2021-05-01'),
(19, '761', 20, '80.00', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('111', 'lopta', '2000.00'),
('222', 'bazen', '3000.00'),
('333', 'papuce', '1000.00'),
('444', 'dusek', '3500.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '50.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
