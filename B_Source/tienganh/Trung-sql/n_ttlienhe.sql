-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2013 at 07:53 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trungtamtienganh`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_ttlienhe`
--

CREATE TABLE IF NOT EXISTS `n_ttlienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `diachie` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_ttlienhe`
--

INSERT INTO `n_ttlienhe` (`id`, `diachi`, `sdt`, `email`, `website`, `diachie`) VALUES
(1, '<p>\r\n	<span style="color: rgb(76, 76, 76); font-family: Arial; font-size: 13px; line-height: 23px;">TRUNG TÂM TIẾNG ANH JENNIFER</span></p>\r\n<p style="margin: 0px; padding: 10px 0px 0px; color: rgb(76, 76, 76); font-family: Arial; font-size: 13px; line-height: 23px;">\r\n	Thos mas - Nguyễn Ngọc Vũ - Hà Nội</p>', '123456789', 'info@jennifer.com', 'www.jennifer.edu.vn', '<p>\r\n	Office Institute JENNIFER Thos Mas - Nguyen Ngoc Vu - Ha Noi</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
