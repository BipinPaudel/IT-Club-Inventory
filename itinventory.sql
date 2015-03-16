-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 03:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Mouses'),
(2, 'Keyboards'),
(3, 'LAN'),
(4, 'Cables'),
(8, 'CPU');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(10) unsigned NOT NULL,
  `category_id` int(10) NOT NULL,
  `title` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `count` int(12) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `title`, `created`, `modified`, `count`, `description`) VALUES
(3, 3, 'Lan Cables', '2015-03-14 05:19:35', '2015-03-14 08:02:13', 233, 'Sexy cables'),
(5, 5, 'CPU 018', '2015-03-14 08:09:50', '2015-03-14 08:09:50', 1, 'not working\r\n'),
(8, 2, 'delta', '2015-03-14 14:38:52', '2015-03-14 14:38:52', 13, 'this is delta keyboard'),
(9, 2, 'Sexy keyboard', '2015-03-14 14:39:53', '2015-03-14 14:39:53', 12, 'this is sexy keyboard\r\n'),
(13, 8, 'cpu018', '2015-03-14 14:58:21', '2015-03-14 14:58:21', 123, 'this is cpu '),
(17, 4, 'haha', '2015-03-14 15:29:13', '2015-03-14 15:29:13', 12, 'hsshs'),
(18, 4, 'asf', '2015-03-15 14:51:35', '2015-03-15 14:51:35', 12, 'adsf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(9) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `username`, `password`, `role`, `created`, `modified`) VALUES
(3, 'Bipin', 'Paudel', 'bpaudel', '80f530600dff01021b1ef4de35e3d571d8f4af1e', 'admin', '2015-03-14 18:30:59', '2015-03-15 04:05:48'),
(4, 'Hari', 'laal', 'harilaal', 'fc935592f35200654c825450bd698b7726900f40', 'user', '2015-03-15 14:23:03', '2015-03-15 14:23:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
