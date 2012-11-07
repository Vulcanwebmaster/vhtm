-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2012 at 10:49 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unc`
--

-- --------------------------------------------------------

--
-- Table structure for table `unc_images`
--

CREATE TABLE IF NOT EXISTS `unc_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image_date_create` datetime DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `category_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `unc_images`
--

INSERT INTO `unc_images` (`image_id`, `image_name`, `image_link`, `image_date_create`, `is_active`, `category_id`) VALUES
(16, 'ảnh 1', '<p><img src="/unc/userfiles/image/1%20(1).jpg" width="200" height="200" alt="" /></p>', '2012-10-31 05:15:41', 1, '1'),
(17, 'abc', '<p><img src="/unc/userfiles/image/Chrysanthemum.jpg" width="1024" height="768" alt="" />&nbsp;</p>', '2012-11-07 02:01:34', 1, '2'),
(18, 'anh 1', '<p><img width="116" height="108" src="/unc/userfiles/image/anh_xem_nhieu4.gif" alt="" /></p>', '2012-11-07 02:37:53', 1, '3'),
(19, 'anh 1', '<p><img width="120" height="300" src="/unc/userfiles/image/DOJI-120x300.gif" alt="" /></p>', '2012-11-07 02:38:43', 1, '4'),
(21, 'anh 2', '<p><img width="116" height="108" src="/unc/userfiles/image/3.gif" alt="" /></p>', '2012-11-07 02:52:38', 1, '11'),
(24, 'anh 1234', '\r\n<p>\r\n<img width="116" height="108" alt="" src="/unc/userfiles/image/5.gif">\r\n</p>\r\n', '2012-11-07 03:16:11', 0, '1'),
(25, 'hinhanh01', '<p><img width="116" height="108" src="/unc/userfiles/image/5.gif" alt="" /></p>', '2012-11-07 03:20:42', 1, '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
