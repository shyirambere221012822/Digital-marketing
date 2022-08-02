-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 01:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalmarketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Names` varchar(200) NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Comments` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Names`, `PhoneNo`, `Comments`) VALUES
(1, 'mahoro', 5448596, 'comments'),
(2, 'mahoro', 5448596, 'comments'),
(3, 'mucyo', 23424, 'comments'),
(4, 'mucyo', 23424, 'comments'),
(5, 'shyaka', 7343, 'comments'),
(6, 'shyaka', 7343, 'comments'),
(7, 'shyaka', 7343, 'comments');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `price` int(15) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `productType` varchar(25) NOT NULL,
  `userType` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `productName`, `price`, `Country`, `productType`, `userType`) VALUES
(1, 'vanz', 17000, 'niger', 'SHOES', 'p'),
(2, 'laptop', 450000, 'rwanda', 'electronic tools', 'p'),
(3, 'laptop', 450000, 'rwanda', 'electronic tools', 'p'),
(4, 'house1', 24500000, 'tanzania', 'house', 'p'),
(5, 'vest1997', 100000, 'drc', 'clothes', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `User_id` int(11) NOT NULL,
  `Names` varchar(25) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Birthday` date NOT NULL,
  `Sector` varchar(25) NOT NULL,
  `GENDER` char(5) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `RetypedPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`User_id`, `Names`, `UserName`, `Country`, `PhoneNo`, `Birthday`, `Sector`, `GENDER`, `Password`, `RetypedPassword`) VALUES
(1, 'hdffdjfd', 'afujgg', 'fdjdgjgfj', 3445757, '2022-07-20', 'hdfggf', 'm', '1212', '1212'),
(2, 'aejtgrkj', 'sfkrsdfk', 'tskjggsdf', 54547, '2022-07-09', 'fdfgj', 'm', '78685', '685868'),
(3, 'kagabo', 'isaac', 'madaga', 3464786, '2022-08-17', 'ngoma', 'm', '1212', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
