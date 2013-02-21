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
-- Table structure for table `n_fg_helps`
--

CREATE TABLE IF NOT EXISTS `n_fg_helps` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `titlefr` text COLLATE utf8_unicode_ci NOT NULL,
  `descriptionfr` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `n_fg_helps`
--

INSERT INTO `n_fg_helps` (`id`, `title`, `description`, `alias`, `titlefr`, `descriptionfr`) VALUES
(3, 'GameTwist for free?', '<p>\r\n	&nbsp;</p>\r\n<p style="margin: 10px 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; line-height: 16px;">\r\n	You can play all of the games on offer at GameTwist for free! You just have to sign up for an account - at no charge.</p>\r\n<p style="margin: 10px 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; line-height: 16px;">\r\n	If you would like to receive more Twists than your fellow gamers, as well as have the ability to download 10 free games on your mobile phone and organise your own tournaments, then we recommend you pick up a Gold subscription. Details can be found in the&nbsp;<a href="http://www.gametwist.fr/help/id_topic~137/id_article~208/FAQs/Gold-Abo.html" style="color: rgb(51, 153, 204);">Gold subscription</a>&nbsp;FAQ.</p>\r\n', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
