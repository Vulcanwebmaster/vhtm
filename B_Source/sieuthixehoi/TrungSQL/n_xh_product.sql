-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 10:47 AM
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
-- Table structure for table `n_xh_product`
--

CREATE TABLE IF NOT EXISTS `n_xh_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `n_xh_product`
--

INSERT INTO `n_xh_product` (`id`, `namev`, `alias`, `category_id`, `price`, `image`, `hangsx`, `mota`) VALUES
(13, 'CHEVROLET - SPARK LS 1.0 MT', 'CHEVROLET---SPARK-LS-1.0-MT', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/spark-lt-1-2-mt-2011-123456.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'CHEVROLET ', '<p>\r\n	<br />\r\n	<span style="font-family: Times New Roman;"><span style="font-size: medium;">Chevrolet Spark 2011 c&oacute; nhiều đường n&eacute;t mềm mại hơn d&ugrave; về cơ bản ngoại thất xe kh&ocirc;ng thay đổi nhiều. Phần đầu xe được l&agrave;m mới cho hợp vớ<span style="color: black;">i logo C</span>hevrolet.</span></span><span style="font-family: Times New Roman;"><span style="font-size: medium;"> Nội thất xe kh&aacute; ấn tượng với thiết kế hiện đại v&agrave; thể thao. Mẫu xe n&agrave;y d&agrave;i 3.640 mm v&agrave; c&oacute; chiều d&agrave;i cơ sở 2.375 mm. D&ugrave; l&agrave; một mẫu xe cỡ nhỏ nhưng cabin của Spark đủ sức chứa 5 h&agrave;nh kh&aacute;ch.</span></span></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
