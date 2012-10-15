-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 10:03 AM
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
-- Table structure for table `unc_comment`
--

CREATE TABLE IF NOT EXISTS `unc_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `news_id` int(11) DEFAULT NULL,
  `reader_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unc_comment`
--

INSERT INTO `unc_comment` (`comment_id`, `comment_content`, `news_id`, `reader_id`) VALUES
(1, 'bình luận', 19, 2),
(3, 'fàoywâfầ', 158, 1),
(4, 'flagfiahfpapfàgabf', 158, 2),
(5, 'f234293870ahừahìu', 159, 1),
(6, 'ừiayhfơàihàiàoihàoncvav', 159, 2),
(7, 'ddaay laf binhf luaanj', 157, 1),
(8, 'nguyenductien', 156, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
