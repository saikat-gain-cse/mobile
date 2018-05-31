-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 08:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `last`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `name`, `price`, `details`, `img`) VALUES
(1, 'dfgdfg', 'dfgdfgdf', 'dfgdfg', 'sun.png'),
(2, 'sdfsdf', 'sdfsdf', 'sdfsdfsd', 'sun.png'),
(3, 'Nokia 3', '$300', 'sdsdfsdfsdfs sdfdsf sdfsdf', 'sun.png'),
(4, 'Sumsu', '3445', 'sdfsdf', 'sun.png'),
(5, 'Newly', '4234', '3423zs zdfsdf', 'sun.png'),
(6, 'Black barry', '$2000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ru', 'iphonex.png'),
(7, 'walton', '$200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ru', 'dualphone.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab`
--
ALTER TABLE `tab`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
