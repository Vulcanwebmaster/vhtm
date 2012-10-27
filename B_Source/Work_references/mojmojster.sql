-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2012 at 12:46 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mojmojster`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Dimnikarstvo'),
(2, 'Brusilstvo'),
(3, 'Gozdarstvo'),
(4, 'Ključavničarstvo'),
(5, 'Manjša hišna popravila in montažerstvo'),
(6, 'Obdelava površin'),
(7, 'Prodaja'),
(8, 'Projektiranje'),
(9, 'Restavratorstvo'),
(10, 'Transport in gradbena mehanizacija'),
(11, 'Varovanje');

-- --------------------------------------------------------

--
-- Table structure for table `craftsmen`
--

CREATE TABLE IF NOT EXISTS `craftsmen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profileviews` int(11) NOT NULL,
  `last_visit` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `work_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL,
  `more_about` text COLLATE utf8_unicode_ci NOT NULL,
  `basic_about` text COLLATE utf8_unicode_ci NOT NULL,
  `map_location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `web_pages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bg_file_id` int(11) NOT NULL,
  `logo_file_id` int(11) NOT NULL,
  `certificates` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=254 ;

--
-- Dumping data for table `craftsmen`
--

INSERT INTO `craftsmen` (`id`, `profileviews`, `last_visit`, `name`, `work_type`, `email`, `phone`, `vision`, `more_about`, `basic_about`, `map_location`, `web_pages`, `address`, `bg_file_id`, `logo_file_id`, `certificates`) VALUES
(1, 0, 0, 'manh nguyen tien', '', '', '', '', '', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `craftsmencategories`
--

CREATE TABLE IF NOT EXISTS `craftsmencategories` (
  `craftsman_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `craftsmencategories`
--

INSERT INTO `craftsmencategories` (`craftsman_id`, `category_id`) VALUES
(1, 1),
(1, 4),
(1, 2),
(1, 3),
(1, 7),
(1, 8),
(1, 9),
(1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `craftsman_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=247 ;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filetype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filetype`, `type`, `filename`) VALUES
(44, 'image/jpeg', 'file', 'wallpaper-4353.jpg'),
(45, 'image/jpeg', 'file', 'beautiful_lake_wallpaper_146f9.jpg'),
(42, 'image/jpeg', 'file', 'Koala.jpg'),
(43, 'image/jpeg', 'file', 'Desert.jpg'),
(30, 'jpeg', '', 'f3.jpg'),
(46, 'image/jpeg', 'file', 'Picture 481.jpg'),
(31, 'jpeg', '', 'f4.jpg'),
(32, 'jpeg', '', 'f5.jpg'),
(41, 'image/jpeg', 'file', 'Jellyfish.jpg'),
(33, 'jpeg', '', 'f6.jpeg'),
(34, 'jpeg', '', 'f7.jpg'),
(39, 'image/jpeg', 'file', 'Penguins.jpg'),
(35, 'jpeg', '', 'f8.jpg'),
(38, 'image/jpeg', 'file', 'Lighthouse.jpg'),
(36, 'jpeg', '', 'f9.jpg'),
(51, 'image/jpeg', 'file', 'Best-top-desktop-green-grass-wallpapers-hd-grass-wallpaper-pictures-photos-16.jpg'),
(48, 'image/jpeg', 'file', 'Picture 385.jpg'),
(49, 'image/jpeg', 'file', 'wallpaper-4353.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` bigint(20) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `what` text COLLATE utf8_unicode_ci NOT NULL,
  `deadline_start` bigint(20) NOT NULL,
  `deadline_finish` bigint(20) NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=148 ;

-- --------------------------------------------------------

--
-- Table structure for table `inquiriesfiles`
--

CREATE TABLE IF NOT EXISTS `inquiriesfiles` (
  `inquiry_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `craftsman_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=158 ;

-- --------------------------------------------------------

--
-- Table structure for table `portalcomments`
--

CREATE TABLE IF NOT EXISTS `portalcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=172 ;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE IF NOT EXISTS `productcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `craftsman_id` int(11) NOT NULL,
  `category_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=240 ;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `craftsman_id`, `category_title`) VALUES
(235, 1, '2'),
(236, 1, 'manh'),
(237, 1, 'manh'),
(238, 1, 'Natural pictures'),
(239, 1, 'my images');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_timestamp` bigint(20) NOT NULL,
  `answer_timestamp` bigint(20) NOT NULL,
  `craftsman_id` int(11) NOT NULL,
  `asking` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answering_id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=229 ;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `rated_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=577 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `type`, `rating`, `rated_id`) VALUES
(568, 'price', 3, 251),
(569, 'speed', 4, 251),
(570, 'quali', 2, 251),
(571, 'speed', 3, 252),
(572, 'quali', 1, 252),
(573, 'price', 0, 252),
(574, 'speed', 5, 248),
(575, 'quali', 2, 248),
(576, 'price', 0, 248);

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` bigint(20) NOT NULL,
  `file_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `craftsman_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=259 ;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `timestamp`, `file_id`, `title`, `text`, `comment`, `comment_author`, `craftsman_id`, `category_id`) VALUES
(250, 0, 43, 'title7', '', '', '', 1, 235),
(237, 2000, 30, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 235),
(238, 2000, 31, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 236),
(239, 2000, 32, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 236),
(240, 2000, 33, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 237),
(241, 2000, 34, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 237),
(242, 2000, 35, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 235),
(243, 2000, 36, 'tieude1', 'ádasdasdasd', 'ádasdasd', 'manh', 1, 236),
(249, 0, 42, 'title6', '', '', '', 1, 237),
(258, 0, 51, 'abc', '', '', '', 1, -1),
(246, 0, 39, 'title3', '', '', '', 1, -1),
(248, 0, 41, 'title5', '', '', '', 1, -1),
(251, 0, 44, 'title9', '', '', '', 1, -1),
(252, 0, 45, 'titel11', '', '', '', 1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `entity_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sentinquiries`
--

CREATE TABLE IF NOT EXISTS `sentinquiries` (
  `inquiry_id` int(11) NOT NULL,
  `craftsman_id` int(11) NOT NULL,
  `checked` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `connected_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `connected_id`) VALUES
(1, 'username', 'password', 'craftsman', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
