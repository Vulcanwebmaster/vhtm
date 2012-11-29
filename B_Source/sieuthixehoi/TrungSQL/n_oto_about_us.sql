-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2012 at 08:31 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sieuthixehoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_about_us`
--

CREATE TABLE IF NOT EXISTS `n_oto_about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentv` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_oto_about_us`
--

INSERT INTO `n_oto_about_us` (`id`, `contentv`, `title`) VALUES
(1, '<p>\r\n	<strong>Hyundai Ngọc Kh&aacute;nh cung cấp c&aacute;c dịch vụ:</strong><br />\r\n	- Cung cấp c&aacute;c loại xe Hyundai du lịch nhập khẩu nguy&ecirc;n chiếc.<br />\r\n	- Bảo h&agrave;nh, bảo dưỡng c&aacute;c xe &ocirc; t&ocirc; du lịch hiệu Hyundai theo ti&ecirc;u chuẩn to&agrave;n cầu của H&atilde;ng Hyundai.<br />\r\n	- Cung cấp c&aacute;c dịch vụ sửa chữa, thay thế phụ t&ugrave;ng xe Hyundai.<br />\r\n	- Cung cấp phụ t&ugrave;ng ch&iacute;nh hiệu Hyundai.</p>', 'Showroom Bán Xe Hyundai Uy Tín  hehe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
