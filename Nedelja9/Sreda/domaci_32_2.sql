-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:36 PM
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
-- Database: `8917_Dusan_Kalejski`
--
CREATE DATABASE IF NOT EXISTS `8917_Dusan_Kalejski` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `8917_Dusan_Kalejski`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `Vreme_porudžbine` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Ukupna_cena` decimal(11,1) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `Adresa_isporuke` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id`, `Vreme_porudžbine`, `Ukupna_cena`, `id_user`, `Adresa_isporuke`) VALUES
(1, '2021-06-17 16:21:48', '70900.0', '12_ab', 'Cara Uroša 3, Beograd'),
(2, '2021-06-17 16:21:48', '44000.0', '23_ab', 'Bezimena bb, Čačak');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `bar_kod` varchar(17) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Cena` decimal(9,1) NOT NULL,
  `tip` enum('Patike','Trenerka','Pantalone','Rančevi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`bar_kod`, `Ime`, `Cena`, `tip`) VALUES
('12345', 'Convers', '5000.0', 'Patike'),
('23456', 'Farmerke', '3300.0', 'Pantalone'),
('34567', 'Adidas', '15000.0', 'Trenerka'),
('45678', 'Nike', '6400.0', 'Rančevi');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `bar_kod` varchar(17) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavke_korpe`
--

INSERT INTO `stavke_korpe` (`bar_kod`, `id_korpe`, `id`, `Kolicina`) VALUES
('12345', 2, 1, 4),
('12345', 1, 2, 5),
('45678', 1, 3, 1),
('45678', 1, 4, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`bar_kod`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bar_kod` (`bar_kod`),
  ADD KEY `id_korpe` (`id_korpe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`bar_kod`) REFERENCES `proizvodi` (`bar_kod`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
