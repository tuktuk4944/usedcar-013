-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2019 at 09:15 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar-013`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `carType` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carType`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `postedDate`, `carpic`) VALUES
(1, 1, 'SUZUKI', 'SWIFT', 'แดง', 'ฆท8460', 'กรุงเทพฯ', '2012', 100000, 1, '2019-12-14 09:56:00', 'car1-1.jpg'),
(2, 1, 'HONDA', '1.5 V I-VTEC (ABS)', 'เทา', '6กน8964', 'กรุงเทพฯ', '2017', 529000, 1, '2019-12-14 09:56:00', 'car1-2.jpg'),
(3, 2, 'Chevrolet', 'Chevrolet colorado 2.8lt', 'เทา', 'ก1234', 'กทม.', '2013', 500000, 1, '2019-12-14 12:00:07', 'car21.jpg'),
(4, 3, 'HYUNDAI ', 'HYUNDAI GRAND STAREX 2.5 VIP', 'ดำ', 'น1555', 'นครปฐม', '2015', 900000, 1, '2019-12-14 12:08:32', 'car3-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'padrada_ttpp', '81dc9bdb52d04dc20036dbd8313ed055', 'tuk', 'ta', 'padrada.ttpp@gmail.com', 1),
(2, 'tookta123', '81dc9bdb52d04dc20036dbd8313ed055', 'padrada', 'promkijjanon', 'tookta_ttpp@hotmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
