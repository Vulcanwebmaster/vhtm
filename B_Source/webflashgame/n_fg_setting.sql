-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2013 at 08:41 AM
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
-- Table structure for table `n_fg_setting`
--

CREATE TABLE IF NOT EXISTS `n_fg_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phantramweb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top4` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top5` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top6` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top7` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top8` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top9` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `top10` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_gold` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `account_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `linkface` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_fg_setting`
--

INSERT INTO `n_fg_setting` (`id`, `phantramweb`, `top1`, `top2`, `top3`, `top4`, `top5`, `top6`, `top7`, `top8`, `top9`, `top10`, `user_gold`, `account_id`, `tour_id`, `linkface`) VALUES
(1, '10', '', '', '', '', '', '', '', '', '', '', '10', 0, 0, 'http://www.facebook.com/NiwVietNam'),
(2, '25', '5', '5', '5', '5', '5', '5', '5', '5', '', '5', '25', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
