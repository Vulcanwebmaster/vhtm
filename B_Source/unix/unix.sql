-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 01:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unix`
--

-- --------------------------------------------------------

--
-- Table structure for table `unix_sach`
--

CREATE TABLE IF NOT EXISTS `unix_sach` (
  `sach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaisach_id` int(11) NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(1, 'Học làm giàu', 'Sách dạy làm giàu', 1, 'Ho Minh Hoa'),
(2, 'Kenh14', 'Mương la liếm cho các bạn trẻ năng động', 3, 'Mương 14 ABCDEF'),
(3, 'Như đã dấu yêu', 'Trong đôi mắt anh, em là tất cả :)))) Updated', 1, 'Ai mà biết'),
(5, 'OOps I did it', 'Nghiện', 4, '=)))))');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
