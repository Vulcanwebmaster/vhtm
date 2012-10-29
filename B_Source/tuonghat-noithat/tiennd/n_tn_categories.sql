-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 01:23 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhatp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_categories`
--

CREATE TABLE IF NOT EXISTS `n_tn_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_tn_categories`
--

INSERT INTO `n_tn_categories` (`category_id`, `category_name`, `category_parent_id`) VALUES
(1, 'Danh mục 1', 0),
(2, 'Danh mục 2', 0),
(3, 'Danh mục 3', 0),
(4, 'Danh mục 4', 0),
(6, 'Danh mục con 1', 2),
(8, 'Danh mục 6', 1),
(9, 'Danh mục 7', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
