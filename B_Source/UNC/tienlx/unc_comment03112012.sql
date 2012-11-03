-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2012 at 11:52 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
  `reader_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment_time` datetime NOT NULL,
  `comment_name` varchar(2000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `unc_comment`
--

INSERT INTO `unc_comment` (`comment_id`, `comment_content`, `news_id`, `reader_id`, `reader_email`, `comment_time`, `comment_name`) VALUES
(33, '1', 1, 1, '', '2012-10-21 04:38:26', ''),
(34, '2\r\n', 1, 2, '', '2012-10-21 04:39:27', ''),
(35, '3', 1, 2, '', '2012-10-21 07:01:44', ''),
(36, 'nguyen tien manh', 23, 2, '', '2012-10-21 11:43:40', ''),
(37, 'cái gì đó', 3, 1, '', '2012-10-22 04:27:32', ''),
(38, 'không hiểu lý do tại sao', 3, 1, '', '2012-10-22 04:28:42', ''),
(39, 'nguy&aacute;&raquo;', 3, 1, '', '2012-10-22 04:40:11', ''),
(40, 'bình luận 1\r\n', 9, 2, '', '2012-10-22 08:57:16', ''),
(41, 'bình luận 2', 9, 2, '', '2012-10-22 08:58:13', ''),
(42, 'bình luận 3', 9, 2, '', '2012-10-22 08:58:20', ''),
(43, 'bình luận 4', 9, 1, '', '2012-10-22 08:58:36', ''),
(44, 'bình luận 5', 9, 1, '', '2012-10-22 08:58:43', ''),
(49, 'jaliusdfadsfdsf', 2, NULL, 'super@admin.com', '2012-11-03 02:03:02', 'Sieu nhan'),
(50, 'jakjdsfadsf', 2, NULL, 'tien@hjaf.com', '2012-11-03 03:03:50', 'tien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
