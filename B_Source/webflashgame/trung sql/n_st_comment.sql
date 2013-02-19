-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 10:55 AM
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
-- Table structure for table `n_st_comment`
--

CREATE TABLE IF NOT EXISTS `n_st_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_name` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_id` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `n_st_comment`
--

INSERT INTO `n_st_comment` (`id`, `comment_name`, `comment_content`, `news_id`) VALUES
(1, 'hehe', 'aaaaaaaaaaaaaaa', '1'),
(3, 'trung', 'bai nay hay!!!', '2'),
(4, 'eeeee', 'eeeeeeeeee', ''),
(5, 'aaaaa', 'dddd', ''),
(6, 'a', 'a', ''),
(7, 's', 's', ''),
(8, 'trungoc', 'trungpro', ''),
(9, 'trungoc', 'trungoc', ''),
(10, 'thuhang', 'thuhang', '2'),
(11, 'Name', 'Comment', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
