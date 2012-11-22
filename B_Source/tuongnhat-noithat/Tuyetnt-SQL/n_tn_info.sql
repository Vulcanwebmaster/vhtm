-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 11:09 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat-noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_info`
--

CREATE TABLE IF NOT EXISTS `n_tn_info` (
  `info_id` int(11) NOT NULL,
  `info_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `info_content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_tn_info`
--

INSERT INTO `n_tn_info` (`info_id`, `info_name`, `info_content`) VALUES
(1, 'facebook', 'http://facebook.com.vn'),
(2, 'twitter', 'http://twitter.com.vn'),
(3, 'movil', 'http://movil.com.vn'),
(4, 'telefono', 'TEL: 1-877-550-1107');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
