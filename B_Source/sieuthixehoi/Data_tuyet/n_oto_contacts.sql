-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 10:18 AM
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
-- Table structure for table `n_oto_contacts`
--

CREATE TABLE IF NOT EXISTS `n_oto_contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentv` varchar(132) COLLATE utf8_unicode_ci NOT NULL,
  `contente` varchar(132) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_oto_contacts`
--

INSERT INTO `n_oto_contacts` (`id`, `contentv`, `contente`) VALUES
(1, '<p>\r\n	fwefwefewf</p>', '0'),
(2, 'sdfsdfsdf', 'sdfsdfsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
