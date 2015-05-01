-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2015 at 08:21 PM
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
  `status` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `title`, `created`, `modified`, `count`, `status`, `location`, `description`) VALUES
(3, 3, 'Lan Cables', '2015-03-14 05:19:35', '2015-03-14 08:02:13', 233, '', '', 'Sexy cables'),
(5, 5, 'CPU 018', '2015-03-14 08:09:50', '2015-03-14 08:09:50', 1, '', '', 'not working\r\n'),
(8, 2, 'delta', '2015-03-14 14:38:52', '2015-03-14 14:38:52', 13, '', '', 'this is delta keyboard'),
(9, 2, 'Sexy keyboard', '2015-03-14 14:39:53', '2015-03-14 14:39:53', 12, '', '', 'this is sexy keyboard\r\n'),
(13, 8, 'cpu018', '2015-03-14 14:58:21', '2015-04-23 07:12:08', 123, 'Ok', 'Library', 'this is cpu '),
(19, 1, 'delta', '2015-03-16 17:33:14', '2015-03-16 17:33:14', 12, '', '', 'this is delta'),
(20, 1, 'hp', '2015-03-16 17:33:30', '2015-03-16 17:33:30', 23, '', '', 'this is hp mouse'),
(21, 8, 'cpu030', '2015-03-18 09:47:33', '2015-04-23 07:12:15', 1, 'Not Ok', 'Administration', 'working,, need to format'),
(28, 8, 'CPU001', '2015-04-21 17:40:52', '2015-04-23 07:12:26', 2, 'Ok', 'Computer Lab', 'dfsdf'),
(29, 8, 'CPU000', '2015-04-22 17:33:20', '2015-04-22 17:33:20', 1, 'Not used', 'Computer Lab', 'this is new cpu');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) NOT NULL,
  `message_to` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message_to`, `message`, `created`, `modified`) VALUES
(14, 6, '10', 'sss', '2015-04-22 20:10:55', '2015-04-22 20:10:55'),
(15, 6, 'Pravin rai', 'Hey prabin goruji', '2015-04-23 12:01:39', '2015-05-01 19:36:43'),
(16, 6, 'Nischal Aryal', 'Repair lan cables of lab', '2015-05-01 18:26:13', '2015-05-01 18:26:13'),
(17, 6, 'Pravin rai', 'Go to toilet', '2015-05-01 19:32:12', '2015-05-01 19:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(9) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `created`, `modified`) VALUES
(3, 'Admin', 'itAdmin', 'a6e4b4b90ec6552785b21dfc722200a3fde30594', 'admin', '2015-03-14 18:30:59', '2015-04-22 19:20:03'),
(6, 'Bipin Paudel', 'bipinpaudel', '605113857d5119af8bd26139853694598dad400b', 'admin', '2015-04-22 17:40:24', '2015-04-22 19:22:43'),
(10, 'Sagar Giri', 'sagargiri', 'a7b1e40a641905d2a9340b464b3b390648d69571', 'admin', '2015-04-22 18:51:45', '2015-04-22 19:20:29'),
(11, 'Prabin Rai', 'prabinrai', '12e3927ffdd0003bdea60ffde1356da4c58c11fa', 'admin', '2015-04-23 07:08:37', '2015-04-23 07:08:37');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
