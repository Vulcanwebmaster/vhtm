-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2013 at 08:15 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

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
(1, 1200, 1110, 'trung', '1 kieu nao do :D:D', 'trungoco7n@gmail.com', '01656085604', 'i done no', 'kha dai day nhi', 'oi troi dat oi', 'no van de', '1 trang web nao do', 'dia chi 1', 1, 1, 'hehe'),
(2, 3210, 1235, 'manh', 'kieu moi', 'manh@gmail.com', '0123456789', 'no vision', 'cai j cha dc', 'mot ngay nao do', 'map hero', 'web disigner', 'o dau cha dc', 2, 2, 'hohohooooooooooooo');

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
(2, 11),
(2, 2),
(1, 3),
(2, 3),
(1, 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filetype`, `type`, `filename`) VALUES
(1, '.jpeg', 'image', 'f1.jpeg'),
(2, '.jpg', 'image', 'f2.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=190 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=568 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=235 ;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `timestamp`, `file_id`, `title`, `text`, `comment`, `comment_author`, `craftsman_id`, `category_id`) VALUES
(1, 1709, 2, '1 Tieu de gay soc!!', 'Day la text 1', 'Day la Comment1', 'trung', 1, -1),
(2, 456, 1, 'no title', 'no text', 'nocm3', 'nocm4', 1, -1),
(3, 789, 2, 'test title: 3', 'text 3', 'comment 1', 'tg comment', 1, -1),
(4, 101, 2, 'tieude4', 'text 4', 'comment 4', 'tg comment 4', 1, 11),
(5, 354, 1, 'cai nay test', 'hihi', 'hehe', 'hoho', 1, 1),
(6, 2, 2, '2', '2', '2', '2', 2, 2);

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
