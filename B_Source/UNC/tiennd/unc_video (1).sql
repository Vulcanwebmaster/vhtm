-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2012 at 01:01 PM
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
  `video_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `video_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_active` int(1) DEFAULT NULL,
  `video_full_link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `youtube_username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `user_upload` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `unc_video`
--

INSERT INTO `unc_video` (`video_id`, `video_title`, `video_description`, `video_link`, `is_active`, `video_full_link`, `youtube_username`, `password`, `user_upload`) VALUES
(26, 'Never change - niw', 'never change - niw', '-wDcwDx6VBs', 1, 'http://www.youtube.com/watch?v=-wDcwDx6VBs', 'unc.video', 'khongcopass', 'tiennd'),
(28, 'Without you - TBN - tiennd', 'Without you - TBN - tiennd', 'pP1AzOKBPIw', 1, 'http://www.youtube.com/watch?v=pP1AzOKBPIw', 'unc.video', 'khongcopass', ''),
(29, 'A song for mama', 'A song for mama', 'QbrJTH6BOiY', 1, 'http://www.youtube.com/watch?v=QbrJTH6BOiY', 'unc.video', 'khongcopass', ''),
(32, 'Davichi - Love and war - tiennd', 'Davichi - Love and war - tiennd', 'l3fOleVmfMc', 1, 'http://www.youtube.com/watch?v=l3fOleVmfMc', 'tiendn1010', 'Tiendnit2', ''),
(33, 'Slipping... - ABBA - tiennd', 'Slipping... - ABBA - tiennd', 's1wCQFg6G_A', 1, 'http://www.youtube.com/watch?v=s1wCQFg6G_A', 'tiendn1010', 'Tiendnit2', ''),
(34, 'My Test Movie - tiennd', 'My Test Movie - tiennd', '4j6gHfVW1iE', 1, 'http://www.youtube.com/watch?v=4j6gHfVW1iE', 'tiendn1010', 'Tiendnit2', ''),
(35, 'Love story - Taylor Swift - nddong - abc', 'Love story - Taylor Swift - nddong - abc', '4dOamjMM1dA', 1, 'http://www.youtube.com/watch?v=4dOamjMM1dA', 'tiendn1010', 'Tiendnit2', 'tiennd'),
(36, 'Beautiful', 'Beautiful', 'IcpfchJ0rzA', 1, 'http://www.youtube.com/watch?v=IcpfchJ0rzA', 'tiendn1010', 'Tiendnit2', ''),
(37, 'the voice', 'the voice', 'LpdaSov8tss', 1, 'http://www.youtube.com/watch?v=LpdaSov8tss', 'unc.video', 'khongcopass', ''),
(38, 'If I Open Up My Heart To You', 'If I Open Up My Heart To You', 'JT5Omg2feF4', 1, 'http://www.youtube.com/watch?v=JT5Omg2feF4', 'unc.video', 'khongcopass', ''),
(39, 'He''s a pirate', 'He''s a pirate', 'CKl8lididFI', 1, 'http://www.youtube.com/watch?v=CKl8lididFI', 'unc.video', 'khongcopass', 'tiennd'),
(40, 'Nhạc không lời hay', 'Nhạc không lời hay', 'H8KWgXi5J8U', 1, 'http://www.youtube.com/watch?v=H8KWgXi5J8U', 'unc.video', 'khongcopass', ''),
(41, 'Love and war - Davichi', 'Love and war - Davichi', '', 1, 'http://www.youtube.com/watch?v=lEMKl_cvPdI&feature=g-vrec', NULL, '', 'tiennd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
