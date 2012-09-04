-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 05:06 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat_duhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_loaikhoahoc`
--

CREATE TABLE IF NOT EXISTS `n_tn_loaikhoahoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiengviet` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tn_loaikhoahoc`
--

INSERT INTO `n_tn_loaikhoahoc` (`id`, `ten`, `tiengviet`) VALUES
(1, 'Đại học (Undergraduate Courses)', NULL),
(2, 'Sau đại học (Postgraduate Courses)', NULL),
(3, 'Nghiệp vụ (Professional Courses)', NULL),
(4, 'Bán thời gian (Parttime Courses)', NULL),
(5, 'Khóa học khác (Other Courses)', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
