-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 05:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projector`
--
CREATE DATABASE IF NOT EXISTS `projector` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projector`;

-- --------------------------------------------------------

--
-- Table structure for table `projector`
--

CREATE TABLE `projector` (
  `bookid` int(11) NOT NULL,
  `bookdate` date NOT NULL,
  `bookday` varchar(10) NOT NULL,
  `hour1` varchar(50) NOT NULL,
  `hour2` varchar(50) NOT NULL,
  `hour3` varchar(50) NOT NULL,
  `hour4` varchar(50) NOT NULL,
  `hour5` varchar(50) NOT NULL,
  `hour6` varchar(50) NOT NULL,
  `hour7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projector`
--

INSERT INTO `projector` (`bookid`, `bookdate`, `bookday`, `hour1`, `hour2`, `hour3`, `hour4`, `hour5`, `hour6`, `hour7`) VALUES
(1, '2016-10-12', '', '', '', '', '', '', '', ''),
(2, '2016-10-13', 'Thursday', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seminarhall`
--

CREATE TABLE `seminarhall` (
  `bookid` int(11) NOT NULL,
  `bookdate` date NOT NULL,
  `bookday` varchar(10) NOT NULL,
  `hour1` varchar(50) NOT NULL,
  `hour2` varchar(50) NOT NULL,
  `hour3` varchar(50) NOT NULL,
  `hour4` varchar(50) NOT NULL,
  `hour5` varchar(50) NOT NULL,
  `hour6` varchar(50) NOT NULL,
  `hour7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `staffid`, `created`) VALUES
(1, 'mat', '202cb962ac59075b964b07152d234b70', '123', '2016-09-26 17:40:23'),
(2, 'mathesh', '202cb962ac59075b964b07152d234b70', '9213', '2016-09-27 07:53:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projector`
--
ALTER TABLE `projector`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `seminarhall`
--
ALTER TABLE `seminarhall`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projector`
--
ALTER TABLE `projector`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seminarhall`
--
ALTER TABLE `seminarhall`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
