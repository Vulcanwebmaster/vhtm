-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2012 at 03:53 PM
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
-- Table structure for table `unc_video`
--

CREATE TABLE IF NOT EXISTS `unc_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_active` int(1) DEFAULT NULL,
  `video_full_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `youtube_id` int(11) DEFAULT NULL,
  `user_upload` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `unc_video`
--

INSERT INTO `unc_video` (`video_id`, `video_title`, `video_description`, `video_link`, `is_active`, `video_full_link`, `youtube_id`, `user_upload`, `category_id`) VALUES
(103, 'Wish you were here - Avril Lavigne', 'Wish you were here - Avril Lavigne', '2wBDSfoFuyI', 0, 'http://www.youtube.com/watch?v=2wBDSfoFuyI', 2, '', 0),
(104, 'Just the way you are - Matt Cardle', 'Just the way you are - Matt Cardle', '5QlxJezCDOY', 1, 'http://www.youtube.com/watch?v=5QlxJezCDOY', 2, '', 0),
(105, 'Nhạc không lời hay', 'Nhạc không lời hay', 'H8KWgXi5J8U', 1, 'http://www.youtube.com/watch?v=H8KWgXi5J8U', 2, '', 0),
(106, 'He''s a pirate', 'He''s a pirate', 'CKl8lididFI', 1, 'http://www.youtube.com/watch?v=CKl8lididFI', 2, '', 0),
(107, 'If I Open Up My Heart To You', 'If I Open Up My Heart To You', 'JT5Omg2feF4', 1, 'http://www.youtube.com/watch?v=JT5Omg2feF4', 2, '', 0),
(108, 'the voice', 'the voice', 'LpdaSov8tss', 1, 'http://www.youtube.com/watch?v=LpdaSov8tss', 2, '', 0),
(109, 'A song for mama', 'A song for mama', 'QbrJTH6BOiY', 1, 'http://www.youtube.com/watch?v=QbrJTH6BOiY', 2, '', 0),
(110, 'Without you - TBN', 'Without you - TBN', 'pP1AzOKBPIw', 1, 'http://www.youtube.com/watch?v=pP1AzOKBPIw', 2, '', 0),
(111, 'Never change', 'never change', '-wDcwDx6VBs', 1, 'http://www.youtube.com/watch?v=-wDcwDx6VBs', 2, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
