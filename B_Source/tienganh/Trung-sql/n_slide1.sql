-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2012 at 10:16 AM
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
-- Table structure for table `n_slide1`
--

CREATE TABLE IF NOT EXISTS `n_slide1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `anh3` text COLLATE utf8_unicode_ci NOT NULL,
  `anh4` text COLLATE utf8_unicode_ci NOT NULL,
  `anh5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_slide1`
--

INSERT INTO `n_slide1` (`id`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES
(1, '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(1).gif" style="width: 284px; height: 119px;" /></p>', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_155.gif" style="width: 284px; height: 119px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide31.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(2).gif" style="width: 284px; height: 119px;" /></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
