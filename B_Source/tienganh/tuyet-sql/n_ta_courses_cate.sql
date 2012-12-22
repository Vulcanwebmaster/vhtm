-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2012 at 04:53 PM
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
-- Table structure for table `n_ta_courses_cate`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses_cate` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(123) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_ta_courses_cate`
--

INSERT INTO `n_ta_courses_cate` (`id`, `cate_name`, `alias`) VALUES
(1, 'Tieng anh cho mam non', 'tieng anh 1'),
(2, 'Tieng anh doi song', 'tieng anh 2'),
(4, 'Tieng anh cho tieu hoc', 'tieng anh 3'),
(5, 'Tiếng anh online', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
