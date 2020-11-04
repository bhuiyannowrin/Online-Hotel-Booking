-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `address`, `type`) VALUES
(15, 'Kibria', 193701256, 'Lamabazar', 'Double-1 room'),
(16, 'Nowrin', 2147483647, 'Subidbazar,Sylhet', 'Single-1 room');

-- --------------------------------------------------------

--
-- Table structure for table `bookingconfirm`
--

CREATE TABLE `bookingconfirm` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingconfirm`
--

INSERT INTO `bookingconfirm` (`id`, `name`, `phone`, `address`, `type`) VALUES
(8, 'Nusrat Bhuiyan Nowrin', 1752020340, 'Subidbazar,Sylhet', 'Single'),
(9, 'Tania', 1531968056, 'Upashahor', 'Double'),
(10, 'Tarin', 1752020340, 'Subidbazar,Sylhet', 'Double'),
(11, 'Tarin', 1752020340, 'Subidbazar,Sylhet', 'Triple'),
(13, 'Mahfuja', 1752020340, 'Shibgonj', 'Single-1 room'),
(14, 'Jafrul', 1675012431, 'sylhet', 'Triple-1 room');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `email`, `phone`, `message`) VALUES
(1, 'Mahfuja', 'Shibgonj', 'ms@mail.com', '0193701256', 'How can I contact with you?');

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`id`, `name`, `address`, `email`, `phone`, `message`) VALUES
(1, 'Tania', 'Subidbazar,Sylhet', 'nusratbhuiya', '1752020340', 'this is a test message'),
(2, 'Tarin', 'Subidbazar,Sylhet', 'tarin@neub.e', '52020340', 'I want to book a room. Please tell me some details.'),
(3, 'Abid', 'Dhaka', 'abid@abid.com', '019752020340', 'Is there any available room for booking'),
(4, 'Tahjib', 'Rajshahi', 'tt@mail.com', '0193701256', 'Room-501 please send someone');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(26, 'nowrin', '1234'),
(27, 'nowrin', '1234'),
(28, 'nowrin', '123467890');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(12) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `email`, `phone`, `username`, `password`) VALUES
(1, 'nusrat nowrin', 'nowrin12@gmail.com', 123456, 'nowrin', 12345),
(2, 'Tania  Tun Jannat', 'jannat@gmail.com', 52020340, 'tania', 12345),
(4, 'Tania Tun', 'jannat@gmail.com', 1752020340, 'taniatun', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingconfirm`
--
ALTER TABLE `bookingconfirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact1`
--
ALTER TABLE `contact1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bookingconfirm`
--
ALTER TABLE `bookingconfirm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact1`
--
ALTER TABLE `contact1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
