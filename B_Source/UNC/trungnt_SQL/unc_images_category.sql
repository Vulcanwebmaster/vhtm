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
-- Table structure for table `unc_images_category`
--

CREATE TABLE IF NOT EXISTS `unc_images_category` (
  `image_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` int(1) NOT NULL,
  `category_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(300) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unc_images_category`
--

INSERT INTO `unc_images_category` (`image_id`, `category_id`, `is_active`, `category_name`, `alias`) VALUES
(0, 1, 1, 'Xã hội', 'Xa-hoi'),
(0, 2, 1, 'Thể thao', 'The-thao'),
(0, 3, 1, 'Hoang dại', 'Hoang-dai'),
(0, 4, 1, 'Thiên nhiên hoang dã', 'Thien-nhien-hoang-da'),
(0, 11, 1, 'Thiên nhiên', 'Thien-nhien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
