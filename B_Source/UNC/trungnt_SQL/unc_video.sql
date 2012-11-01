-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2012 at 12:34 PM
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
-- Table structure for table `unc_video`
--

CREATE TABLE IF NOT EXISTS `unc_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_alias` varchar(2000) NOT NULL,
  `video_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_active` int(1) DEFAULT NULL,
  `video_full_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `youtube_id` int(11) DEFAULT NULL,
  `user_upload` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `is_default` int(1) NOT NULL,
  `viewer_number` int(50) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `unc_video`
--

INSERT INTO `unc_video` (`video_id`, `video_title`, `video_alias`, `video_description`, `video_link`, `is_active`, `video_full_link`, `youtube_id`, `user_upload`, `category_id`, `is_default`, `viewer_number`) VALUES
(112, 'Wish you were here - Avril Lavigne', 'Wish-you-were-here---Avril-Lavigne', 'Wish you were here - Avril Lavigne', '2wBDSfoFuyI', 1, 'http://www.youtube.com/watch?v=2wBDSfoFuyI', 2, '', 0, 0, 0),
(113, 'Just the way you are - Matt Cardle', 'Just-the-way-you-are---Matt-Cardle', 'Just the way you are - Matt Cardle', '5QlxJezCDOY', 1, 'http://www.youtube.com/watch?v=5QlxJezCDOY', 2, '', 0, 0, 0),
(114, 'Nhạc không lời hay', 'Nhac-khong-loi-hay', 'Nhạc không lời hay', 'H8KWgXi5J8U', 1, 'http://www.youtube.com/watch?v=H8KWgXi5J8U', 2, '', 0, 0, 0),
(115, 'He''s a pirate', 'He''s-a-pirate', 'He''s a pirate', 'CKl8lididFI', 1, 'http://www.youtube.com/watch?v=CKl8lididFI', 2, '', 0, 0, 0),
(116, 'If I Open Up My Heart To You', 'If-I-Open-Up-My-Heart-To-You', 'If I Open Up My Heart To You', 'JT5Omg2feF4', 1, 'http://www.youtube.com/watch?v=JT5Omg2feF4', 2, '', 0, 0, 0),
(117, 'the voice', 'the-voice', 'the voice', 'LpdaSov8tss', 1, 'http://www.youtube.com/watch?v=LpdaSov8tss', 2, '', 0, 0, 0),
(118, 'A song for mama', 'A-song-for-mama', 'A song for mama', 'QbrJTH6BOiY', 0, 'http://www.youtube.com/watch?v=QbrJTH6BOiY', 2, '', 0, 1, 0),
(119, 'Without you - TBN', 'Without-you---TBN', 'Without you - TBN', 'pP1AzOKBPIw', 1, 'http://www.youtube.com/watch?v=pP1AzOKBPIw', 2, '', 0, 0, 0),
(120, 'Never change', 'Never-change', 'never change', '-wDcwDx6VBs', 1, 'http://www.youtube.com/watch?v=-wDcwDx6VBs', 2, '', 0, 0, 0),
(121, 'Khi con tim biết yêu', 'Khi-con-tim-biet-yeu', 'Khi con tim biết yêu', '111xMff7Ce8', 0, 'http://www.youtube.com/watch?v=111xMff7Ce8', 2, '', 0, 0, 0),
(122, 'if we hold on together', 'if-we-hold-on-together', 'if we hold on together', 'c00f1u-oNyg', 0, 'http://www.youtube.com/watch?v=c00f1u-oNyg', 2, '', 0, 0, 0),
(123, 'Swear it again', 'Swear-it-again', 'Swear it again', '3FSl_WDbbd4', 0, 'http://www.youtube.com/watch?v=3FSl_WDbbd4', 2, '', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
