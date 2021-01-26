-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: com-linweb231.srv.combell-ops.net:3306
-- Generation Time: Jan 26, 2021 at 06:49 PM
-- Server version: 5.7.31-34-log
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID281849_makerfaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `maker` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `naam`, `afbeelding`, `maker`) VALUES
(1, 'drijfband', 'assets/images/drijfband.png', 1),
(2, 'schroeven', 'assets/images/schroeven.png', 0),
(3, 'plakband', 'assets/images/plakband.png', 0),
(4, 'staven', 'assets/images/staven.png', 0),
(5, 'hendel', 'assets/images/hendel.png\r\n', 1),
(6, 'sleutel', 'assets/images/sleutel.png', 1),
(7, 'stuurbout', 'assets/images/stuurbout.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `postcode` varchar(512) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `nr` decimal(10,0) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `telefoon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
