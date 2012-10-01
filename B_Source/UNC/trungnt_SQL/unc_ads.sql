-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2012 at 12:15 PM
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
-- Table structure for table `unc_ads`
--

CREATE TABLE IF NOT EXISTS `unc_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_banner` varchar(500) NOT NULL DEFAULT '',
  `ads_position` varchar(60) NOT NULL DEFAULT '',
  `ads_name` varchar(100) NOT NULL DEFAULT '',
  `ads_link` varchar(200) NOT NULL DEFAULT '',
  `ads_start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ads_end_date` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unc_ads`
--

INSERT INTO `unc_ads` (`ads_id`, `ads_banner`, `ads_position`, `ads_name`, `ads_link`, `ads_start_date`, `ads_end_date`, `category_id`) VALUES
(1, 'bieu ngu 1', 'chiu', 'ho', 'he', '2012-10-20 00:00:00', '2012-10-21 00:00:00', 1),
(4, 'hhhhhhhhhhh', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhhhh', '2012-09-20 00:00:00', '2012-10-11 00:00:00', 2),
(6, 's', 'b', 'vsvd', 'vdd', '2012-10-23 00:00:00', '2012-10-31 00:00:00', 1),
(7, 'a', 'g', 't', 'd', '2012-10-03 00:00:00', '2012-10-24 00:00:00', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
