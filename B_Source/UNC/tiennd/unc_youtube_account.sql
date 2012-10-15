-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 10:06 AM
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
-- Table structure for table `unc_youtube_account`
--

CREATE TABLE IF NOT EXISTS `unc_youtube_account` (
  `youtube_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `youtube_username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `youtube_gallery` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_selected` tinyint(1) NOT NULL,
  PRIMARY KEY (`youtube_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unc_youtube_account`
--

INSERT INTO `unc_youtube_account` (`youtube_id`, `youtube_username`, `password`, `youtube_gallery`, `is_selected`) VALUES
(1, 'tiendn1010', 'Tiendnit2', 'tiendn1010', 0),
(2, 'unc.video', 'khongcopass', 'UNC811', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
