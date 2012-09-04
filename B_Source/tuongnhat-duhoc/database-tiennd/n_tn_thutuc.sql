-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 05:06 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat_duhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_thutuc`
--

CREATE TABLE IF NOT EXISTS `n_tn_thutuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci,
  `vietnam` text COLLATE utf8_unicode_ci,
  `english` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_tn_thutuc`
--

INSERT INTO `n_tn_thutuc` (`id`, `tieude`, `vietnam`, `english`) VALUES
(1, 'tiêu đề', '<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">1. Hồ sơ c&ocirc;ng chứng kết quả học tập (<span style="font-size:14px;"><em>Bảng Điểm v&agrave; Bằng, một bản tiếng Anh &amp; một bạn tiếng việt</em></span>)&nbsp;</span></span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">2. Sơ yếu l&iacute; lịch (<span style="font-size:14px;"><em>một bản tiếng Anh &amp; một bản tiếng Việt</em></span>)</span></span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">3. Hộ chiếu</span></span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">4. L&agrave;m một b&agrave;i kiểm tra tiếng Anh của KCB &amp; phỏng vấn</span></span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">5. Điền mẫu đơn của KCB</span></span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="font-size:20px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#000000;">6. 2 Ảnh hộ chiếu</span></span></span></p>\r\n', '<p>\r\n	english1</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
