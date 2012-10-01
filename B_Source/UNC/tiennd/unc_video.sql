-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2012 at 12:25 PM
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
-- Table structure for table `unc_video`
--

CREATE TABLE IF NOT EXISTS `unc_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_active` int(1) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unc_video`
--

INSERT INTO `unc_video` (`video_id`, `video_title`, `video_description`, `video_link`, `is_active`) VALUES
(1, 'Slipping... - ABBA - tiennd', 'Slipping... - ABBA - tiennd', 's1wCQFg6G_A', 0),
(2, 'My Test Movie - tiennd', 'My Test Movie - tiennd', '4j6gHfVW1iE', 0),
(3, 'Love story - Taylor Swift - sub by nddong - tiennd', 'Love story - Taylor Swift - sub by nddong - tiennd', '4dOamjMM1dA', 0),
(4, 'Davichi - Love and war - tiennd', 'Davichi - Love and war - tiennd', 'l3fOleVmfMc', 0),
(6, 'Never change - unc', 'Never change - unc', 'faSr8xcnHQ0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
