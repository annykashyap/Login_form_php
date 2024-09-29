-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 07:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `fetching_image`
--

CREATE TABLE `fetching_image` (
  `img_src` varchar(500) NOT NULL,
  `Img_title` varchar(500) NOT NULL,
  `img_des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fetching_image`
--

INSERT INTO `fetching_image` (`img_src`, `Img_title`, `img_des`) VALUES
('image2.jpg', 'Beautiful saree', 'Some beautiful saree at very lowest prize that will grow your beauty and our indian rituals so don\'t be late for buying this'),
('image2.jpg', 'Beautiful saree', 'Some beautiful saree at very lowest prize that will grow your beauty and our indian rituals so don\'t be late for buying this'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `img_uploade`
--

CREATE TABLE `img_uploade` (
  `id` int(200) NOT NULL,
  `Images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtable`
--

CREATE TABLE `mtable` (
  `id` int(200) NOT NULL,
  `usename` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mtable`
--

INSERT INTO `mtable` (`id`, `usename`, `email`, `phone`, `password`, `image`) VALUES
(46, 'rishav', 'rishav@', '8989832992', 'rishavkjkj', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`) VALUES
(35, 'rahul', 'rahul123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_uploade`
--
ALTER TABLE `img_uploade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtable`
--
ALTER TABLE `mtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_uploade`
--
ALTER TABLE `img_uploade`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mtable`
--
ALTER TABLE `mtable`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
