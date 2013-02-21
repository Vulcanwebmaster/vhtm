-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 08:22 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flash_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_fg_step`
--

CREATE TABLE IF NOT EXISTS `n_fg_step` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `b1` text NOT NULL,
  `b2` text NOT NULL,
  `b3` text NOT NULL,
  `b1fr` text NOT NULL,
  `b2fr` text NOT NULL,
  `b3fr` text NOT NULL,
  `footer` text NOT NULL,
  `footerfr` text NOT NULL,
  `footer2` text NOT NULL,
  `footerfr2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_fg_step`
--

INSERT INTO `n_fg_step` (`id`, `b1`, `b2`, `b3`, `b1fr`, `b2fr`, `b3fr`, `footer`, `footerfr`, `footer2`, `footerfr2`) VALUES
(1, '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna ut elaborate and aliqua</p>', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna ut elaborate and aliqua</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna ut elaborate and aliqua</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\r\n', '<p>\r\n	Subscribe to our newsletter to stay updated on the latest news</p>\r\n', '<p>\r\n	Abonnez-vous à notre newsleteret rester à jour sur les dernieres nouvelles</p>\r\n', '<p>\r\n	This page is available, however, but because occasionally circumstances occur in which toil and pain can procure him some great</p>\r\n', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial; background-color: rgb(89, 172, 195);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
