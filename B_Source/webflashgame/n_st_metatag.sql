-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 09:31 AM
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
-- Table structure for table `n_st_metatag`
--

CREATE TABLE IF NOT EXISTS `n_st_metatag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_home` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_news` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_tourmanents` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_online` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_help` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_st_metatag`
--

INSERT INTO `n_st_metatag` (`id`, `meta_home`, `meta_news`, `meta_tourmanents`, `meta_online`, `meta_help`) VALUES
(1, 'Carresdas, game-online, game-belote', 'Carresdas, news-game', 'Carresdas, game-online, tourmanents-game, tourmanents-game-belote', 'Carresdas, game-online, tourmanents-game, tourmanents-game-belote', 'Carresdas, help-game, game-help, game-belote-online');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
