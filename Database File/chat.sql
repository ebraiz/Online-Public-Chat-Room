-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2015 at 11:47 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `fname`, `lname`, `username`, `password`, `gender`, `age`, `institute`, `city`, `country`, `time`, `image`) VALUES
(3, 'Imran', ' Ali', 'imranali', 'dubai', 'Male', 19, 'Edwardes College', 'Peshawar', 'Pakistan', '2015-12-25 21:04:07', 'images/imran.jpg'),
(8, 'Muhammad Zuabir', '', 'zubair', 'singapore', 'Male', 24, 'UET', 'Newyork', 'USA', '2015-12-26 16:35:30', 'images/Jellyfish.jpg'),
(12, 'Saleem Akhtar', '', 'saleem', 'dubai', 'Male', 57, 'Karachi University', 'Peshawar', 'Pakistan', '2015-12-27 15:09:27', 'images/Desert.jpg'),
(14, 'Shoaib', 'Malik', 'shoaib', 'umair', 'Male', 21, 'UET', 'Karachi', 'Pakistan', '2015-12-27 17:32:00', 'images/Koala.jpg'),
(15, 'Yasir', 'Shah', 'yasirshah', 'karachio', 'Male', 21, 'IBA', 'Karachi', 'Pakistan', '2015-12-29 10:14:54', 'images/Tulips.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
