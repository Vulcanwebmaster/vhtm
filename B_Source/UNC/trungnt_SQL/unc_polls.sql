-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2012 at 06:17 AM
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
-- Table structure for table `unc_polls`
--

CREATE TABLE IF NOT EXISTS `unc_polls` (
  `polls_id` int(11) NOT NULL AUTO_INCREMENT,
  `polls_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `polls_status` int(1) NOT NULL,
  `polls_vote` int(11) NOT NULL,
  PRIMARY KEY (`polls_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `unc_polls`
--

INSERT INTO `unc_polls` (`polls_id`, `polls_content`, `polls_status`, `polls_vote`) VALUES
(1, ' Bạn thấy trang web này thế nào?', 0, 0),
(2, 'Rất đẹp', 1, 0),
(3, 'đẹp', 1, 0),
(4, 'xấu', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
