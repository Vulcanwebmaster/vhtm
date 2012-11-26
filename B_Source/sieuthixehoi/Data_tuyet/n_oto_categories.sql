-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 05:09 PM
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
-- Table structure for table `n_oto_categories`
--

CREATE TABLE IF NOT EXISTS `n_oto_categories` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name_v` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_name_e` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent_id` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_oto_categories`
--

INSERT INTO `n_oto_categories` (`category_id`, `category_name_v`, `category_name_e`, `category_parent_id`, `alias`) VALUES
(1, 'hay hay', 'hay qua', 'cha co nhe1', 'sfsdfds'),
(2, 'hsfdfdf', 'sdfsdfdsf', '33', 'sfsdfd'),
(3, 'sdfsdf', 'dffffffffffffffffff', 'dddddddd', 'ddddddddddd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
