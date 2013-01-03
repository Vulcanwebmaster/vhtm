-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2012 at 08:16 AM
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
-- Table structure for table `n_ta_vedio_home`
--

CREATE TABLE IF NOT EXISTS `n_ta_vedio_home` (
  `vedio_id` int(12) NOT NULL AUTO_INCREMENT,
  `link_vedio` text NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_vedio_home`
--

INSERT INTO `n_ta_vedio_home` (`vedio_id`, `link_vedio`) VALUES
(1, 'http://www.youtube.com/embed/ZnOAK04tJhc'),
(2, 'http://www.youtube.com/embed/ognsGWAkvU8'),
(3, 'http://www.youtube.com/embed/Xdv83MFJd7U'),
(5, 'http://www.youtube.com/embed/ulOb9gIGGd0'),
(6, 'http://www.youtube.com/embed/ZnOAK04tJhc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
