-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2019 at 04:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loga_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q7_detail` varchar(255) DEFAULT NULL,
  `q8` varchar(255) NOT NULL,
  `q9_email` varchar(255) NOT NULL,
  `q9_telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'admin',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `pass`, `status`) VALUES
(1, 'sdiadmin', 'mis@Pass01', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
