-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2013 at 08:11 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minhchau2`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_groups`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_be_acl_groups`
--

INSERT INTO `n_be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 6, 'Member', NULL),
(2, 4, 5, 'Administrator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_permissions`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL DEFAULT '0',
  `aco_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `n_be_acl_permissions`
--

INSERT INTO `n_be_acl_permissions` (`id`, `aro_id`, `aco_id`, `allow`) VALUES
(1, 2, 1, 'Y'),
(3, 1, 24, 'Y'),
(4, 1, 27, 'N'),
(5, 1, 6, 'N'),
(6, 1, 3, 'N'),
(7, 1, 12, 'N'),
(8, 3, 24, 'Y'),
(9, 3, 12, 'N'),
(10, 3, 28, 'Y'),
(11, 3, 36, 'Y'),
(12, 3, 1, 'Y'),
(13, 3, 3, 'N'),
(14, 1, 32, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_permission_actions`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_permission_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `access_id` int(10) unsigned NOT NULL DEFAULT '0',
  `axo_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_id` (`access_id`),
  KEY `axo_id` (`axo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_resources`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `n_be_acl_resources`
--

INSERT INTO `n_be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 78, 'Site', NULL),
(2, 56, 77, 'Control Panel', NULL),
(3, 57, 76, 'System', NULL),
(4, 70, 71, 'Members', NULL),
(5, 60, 69, 'Access Control', NULL),
(6, 72, 73, 'Settings', NULL),
(7, 74, 75, 'Utilities', NULL),
(8, 67, 68, 'Permissions', NULL),
(9, 65, 66, 'Groups', NULL),
(10, 63, 64, 'Resources', NULL),
(11, 61, 62, 'Actions', NULL),
(12, 26, 55, 'General', 0),
(13, 53, 54, 'Calendar', 0),
(14, 51, 52, 'Category', 0),
(15, 49, 50, 'Customers', 0),
(16, 47, 48, 'Menus', 0),
(17, 45, 46, 'Messages', 0),
(18, 43, 44, 'Orders', 0),
(19, 41, 42, 'Pages', 0),
(20, 39, 40, 'Products', 0),
(21, 37, 38, 'Subscribers', 0),
(22, 35, 36, 'Admins', 0),
(23, 33, 34, 'Filemanager', 0),
(24, 18, 25, 'Customer Support', 0),
(25, 23, 24, 'Purchase Support', 0),
(26, 21, 22, 'Customer Record', 0),
(27, 19, 20, 'Customers Admin', 0),
(28, 12, 17, 'Project Panel', 0),
(29, 15, 16, 'Project Spec', 0),
(30, 13, 14, 'Project Home', 0),
(32, 9, 10, 'Customer booking', 0),
(33, 7, 8, 'Bookings', 0),
(34, 3, 4, 'Courses', 0),
(35, 5, 6, 'Trainers', 0),
(36, 2, 11, 'Fitness', 0),
(37, 31, 32, 'Multi languages', 0),
(38, 29, 30, 'Slideshow', 0),
(39, 27, 28, 'Playroom', 0),
(40, 58, 59, 'Phpinfo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_doitac`
--

CREATE TABLE IF NOT EXISTS `n_doitac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_doitac`
--

INSERT INTO `n_doitac` (`id`, `ten`, `logo`, `link`) VALUES
(1, 'bion nation', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/bionic3.png" style="width: 172px; height: 64px;" /></p>\r\n', 'http://hn.24h.com.vn/ca-nhac-mtv/thai-trinh-tai-hop-thi-sinh-the-voice-c73a498286.html'),
(2, 'edan', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/edan3.png" style="width: 172px; height: 64px;" /></p>\r\n', 'http://hn.24h.com.vn/phim/lo-video-ha-tang-duoc-chu-re-cau-hon-c74a497739.html'),
(3, 'hadeco', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/hadeco3.png" style="width: 172px; height: 64px;" /></p>\r\n', 'http://hn.24h.com.vn/'),
(4, 'mindray', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/mindray3.png" style="width: 172px; height: 64px;" /></p>\r\n', 'http://hn.24h.com.vn/tin-tuc-trong-ngay/thu-choi-xe-dap-co-nghin-do-c46a492923.html'),
(5, 'nopa', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/nopa3.png" style="width: 172px; height: 64px;" /></p>\r\n', 'http://hn.24h.com.vn/tin-tuc-trong-ngay/bat-thu-pham-trong-clip-cuop-o-cau-sai-gon-c46a496233.html');

-- --------------------------------------------------------

--
-- Table structure for table `n_example_contactus_info`
--

CREATE TABLE IF NOT EXISTS `n_example_contactus_info` (
  `slogan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_example_contactus_info`
--

INSERT INTO `n_example_contactus_info` (`slogan`, `address`, `phone`, `email`, `fax`, `website`) VALUES
('We are champion', 'TC5B Me Tri Thuong, Tu Liem, Ha Noi', '+8490xxxxxxxx', 'tungns@niw.com.vn', '', 'niw.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `n_example_contactus_message_info`
--

CREATE TABLE IF NOT EXISTS `n_example_contactus_message_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `yourmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `n_example_contactus_message_info`
--

INSERT INTO `n_example_contactus_message_info` (`id`, `name`, `email`, `subject`, `yourmessage`, `date`) VALUES
(17, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17'),
(18, 'Le Tien', 'lexuantien0311@gmail.com', 'Tesstttt', 'Hellooooo!', '2012-07-16 13:03:15'),
(19, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `n_hotro`
--

CREATE TABLE IF NOT EXISTS `n_hotro` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_hotro`
--

INSERT INTO `n_hotro` (`id`, `ten`, `sdt`, `yahoo`) VALUES
(1, 'Mr. Trung', ' 0916138183', 'support1@yahoo.com'),
(2, 'Mr. Bình', '0979345268', 'support2@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_about_us`
--

CREATE TABLE IF NOT EXISTS `n_mc_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentv` text COLLATE utf8_unicode_ci NOT NULL,
  `contente` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_mc_about_us`
--

INSERT INTO `n_mc_about_us` (`id`, `contentv`, `contente`) VALUES
(1, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">C&ocirc;ng ty thiết bị y tế Minh Ch&acirc;u</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">L&agrave; m&ocirc;̣t nh&agrave; nh&acirc;̣p kh&acirc;̉u chuy&ecirc;n nghi&ecirc;̣p, C&ocirc;ng ty Minh Ch&acirc;u ch&uacute;ng t&ocirc;i được ph&aacute;t triển theo hướng đa dạng ho&aacute; sản phẩm. Ch&uacute;ng t&ocirc;i nhắm tới đối tượng kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c c&ocirc;ng ty kinh doanh thiết bị y tế, c&aacute;c cơ sở y tế v&agrave; đặc biệt l&agrave; c&aacute;c ph&ograve;ng kh&aacute;m, bệnh viện tư nh&acirc;n. Ch&uacute;ng t&ocirc;i c&oacute; h&agrave;ng ng&agrave;n sản phẩm với đủ mọi chủng loại kh&aacute;c nhau, hầu như bao qu&aacute;t đầy đủ c&aacute;c nhu cầu về thiết bị v&agrave; dụng cụ y tế.</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">Hệ thống nh&agrave; sản xuất v&agrave; cung cấp sản phẩm tr&ecirc;n khắp thế giới như:</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y Doppler, Lưu huyết n&atilde;o v&agrave; Doppler của h&atilde;ng Hadeco- Nhật Bản</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y điện tim, điện n&atilde;o của h&atilde;ng Fukuda - Nhật Bản; h&atilde;ng Contec - Trung Quốc...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y si&ecirc;u &acirc;m của h&atilde;ng Mindray, Contec - Trung Quốc; h&atilde;ng Fukuda -Nhật Bản...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y X quang thường quy v&agrave; X quang tuyến v&uacute; của Trung Quốc, H&agrave;n Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y tạo oxy của h&atilde;ng Sequal&nbsp; Mỹ v&agrave; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y thở, m&aacute;y g&acirc;y m&ecirc; hồi sức của Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c m&aacute;y thuộc chuy&ecirc;n khoa mắt của h&atilde;ng Inami&nbsp; Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hệ thống nội soi Tai -&nbsp; Mũi - Họng; nội soi ti&ecirc;u ho&aacute;, ổ bụng của Nopa - Đức, Hawk, Smoif; Aohua (Trung Quốc) v&agrave; Riester (Đức)</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thiết bị ph&ograve;ng mổ của Gemmy - Đ&agrave;i Loan; Alsa - Italy</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dụng cụ phẫu thuật của Nopa - Đức; MRU -&nbsp;&nbsp;&nbsp; Pakistan</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&ocirc; h&igrave;nh giảng dạy: 3B Scientific - Đức; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c loại thiết bị Dược của Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thuốc rửa phim Mỹ</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">v&agrave; rất nhiều c&aacute;c mặt h&agrave;ng kh&aacute;c...&nbsp;</span></p>', '<p>\r\n	&nbsp;</p>\r\n<div>\r\n	Medical device companies Minh Chau</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Is a professional import, Minh Chau company we are developing towards diversification of products. We target audience is the trading company of medical equipment, medical facilities and special clinics, private hospitals. We have thousands of products to meet all types of different, almost fully cover the demand for medical devices and instruments.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	System manufacturers and supply products all over the world such as:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Doppler Machine, Save the blood brain and its Doppler Hadeco-Japan</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- ECG, its brain power Fukuda (Japan); company Contec - China ...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Its Ultrasound Mindray, Contec-China; firm Fukuda, Japan ...</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Routine X-ray and X-ray mammogram of China, South Korea</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Its oxygen generator Sequal U.S. and China</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Breathing apparatus, anesthesia recovery of Japan, China</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- The machinery of its eye specialist Inami Japan, China</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Endoscopic System Ear-Nose-Throat; gastrointestinal endoscopy, abdominal Nopa - German, Hawk, Smoif; Aohua (China) and Riester (Germany)</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Equipment operating room by Gemmy - Taiwan; Alsa - Italy</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Surgical Instruments Nopa - Germany; MRU - Pakistan</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- Models of teaching: 3B Scientific - Germany; China</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- The device type Chinese Medicine</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	- American film cleaners</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	and many other items ...</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_category`
--

CREATE TABLE IF NOT EXISTS `n_mc_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `namee` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `n_mc_category`
--

INSERT INTO `n_mc_category` (`id`, `namev`, `namee`, `alias`, `parent_id`) VALUES
(1, 'Chuẩn đoán hình ảnh', 'Diagnostic images', 'Chuan-doan-hinh-anh', 0),
(2, 'Máy siêu âm', 'Ultrasound', 'May-sieu-am', 1),
(3, 'Máy X-Quang', 'X-ray machines', 'May-X-Quang', 1),
(4, 'Phụ kiện', 'accessories', 'Phu-kien', 1),
(11, 'Gây mê hồi sức', 'Anesthesiology', 'Gay-me-hoi-suc', 0),
(12, 'Máy thở - Máy gây mê', 'Ventilators - Anesthesia Machine', 'May-tho---May-gay-me', 11),
(13, 'Máy sốc tim', 'Cardiogenic Shock', 'May-soc-tim', 11),
(14, 'Bộ hồi sức cấp cứu', 'The CPR', 'Bo-hoi-suc-cap-cuu', 11),
(15, 'Máy tạo oxi', 'Oxygen Generator', 'May-tao-oxi', 11),
(16, 'Khoa mắt', 'Ophthalmology', 'Khoa-mat', 0),
(17, 'Khoa sản nhi', 'Obstetrical Department', 'Khoa-san-nhi', 11),
(18, 'Khoa tiêu hóa', 'Gastroenterology', 'Khoa-tieu-hoa', 0),
(19, 'Khoa tai mũi họng', 'ENT', 'Khoa-tai-mui-hong', 0),
(20, 'Máy laser', 'Laser Machine', 'May-laser', 0),
(21, 'Khoa nha', 'Dentistry', 'Khoa-nha', 0),
(22, 'Thăm dò chức năng', 'Functional Probe', 'Tham-do-chuc-nang', 0),
(23, 'Thiết bị nội soi', 'Endoscopic Equipment', 'Thiet-bi-noi-soi', 0),
(24, 'Monitor', 'Monitor', 'Monitor', 0),
(25, 'Thiết bị phòng mổ', 'Operating Room Equipment', 'Thiet-bi-phong-mo', 0),
(26, 'Thiết bị phòng thí nghiệm', 'Laboratory Equipment', 'Thiet-bi-phong-thi-nghiem', 0),
(27, 'Thiết bị phục hồi chức năng', 'Rehabilitation Equipment', 'Thiet-bi-phuc-hoi-chuc-nang', 0),
(28, 'Thiết bị sản xuất dược', 'Pharmaceutical Production Equipment', 'Thiet-bi-san-xuat-duoc', 0),
(29, 'Thiết bị tiệt trùng', 'Sterilizer', 'Thiet-bi-tiet-trung', 0),
(30, 'Vật lý trị liệu', 'Physiotherapy', 'Vat-lý-tri-lieu', 0),
(31, 'Giường bệnh, xe đẩy, xe lăn', 'Hospital beds, Scooters, Wheelchairs', 'Giuong-benh,-xe-day,-xe-lan', 0),
(32, 'Mô hình y tế', 'Medical Model', 'Mo-hinh-y-te', 21),
(33, 'Các thiết bị khác nữa', 'Other Devices', 'Cac-thiet-bi-khac-nua', 0),
(34, 'Máy răng', 'Dental Machine', 'May-rang', 21),
(35, 'Hồi sức', 'Hoi suc', 'Hoi-suc', 11),
(36, 'danh mục hồi sức cấp cứu gấp', 'apaddv', 'danh-muc-hoi-suc-cap-cuu-gap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_contact_us`
--

CREATE TABLE IF NOT EXISTS `n_mc_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentv` text COLLATE utf8_unicode_ci NOT NULL,
  `contente` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_mc_contact_us`
--

INSERT INTO `n_mc_contact_us` (`id`, `contentv`, `contente`) VALUES
(1, '<p>\r\n	Copyright &copy; 2012 Bản quyền thuộc về C&Ocirc;NG TY TNHH THIẾT BỊ Y TẾ MINH CH&Acirc;U&nbsp;Designed by <a href="http://niw.com.vn/"> Niw.com.vn</a></p>', '<h4 style="text-transform:uppercase; margin-bottom:10px">\r\n	C&Ocirc;NG TY TNHH THIẾT BỊ Y TẾ MINH CH&Acirc;U</h4>\r\n<p class="lienhe-item">\r\n	<strong>Địa chỉ:</strong> T&ograve;a nh&agrave; CT5B - Mễ Tr&igrave; Thượng - Từ Li&ecirc;m - H&agrave; Nội.</p>\r\n<p class="lienhe-item">\r\n	<strong>Điện thoại:</strong> (+84) 85898964.</p>\r\n<p class="lienhe-item">\r\n	<strong>Email:</strong> support@niw.com.vn.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_list_contact`
--

CREATE TABLE IF NOT EXISTS `n_mc_list_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `company` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `phone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ordercode` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `rmacode` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_mc_list_contact`
--

INSERT INTO `n_mc_list_contact` (`id`, `name`, `email`, `company`, `phone`, `ordercode`, `rmacode`, `detail`) VALUES
(1, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', 'NIW', '0987384249', '001', '001', 'Nội dung chi tiết'),
(2, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', 'NIW', '0987384249', '001', '001', 'Nội dung chi tiết'),
(3, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', 'NIW', '0987384249', '001', '001', 'Nội dung'),
(4, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', 'NIW', '0987384249', '001', '001', 'Nội dung'),
(6, 'Trung', 'trungdepzdai@gmail.com', 'niw', '0123456789', '121', 'B46', 'có nhiều vấn đề cần giải quyết');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_order`
--

CREATE TABLE IF NOT EXISTS `n_mc_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_product`
--

CREATE TABLE IF NOT EXISTS `n_mc_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `namee` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `usesv` text COLLATE utf8_unicode_ci,
  `usese` text COLLATE utf8_unicode_ci NOT NULL,
  `technical_infov` text COLLATE utf8_unicode_ci,
  `technical_infoe` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `is_new` int(1) NOT NULL DEFAULT '1',
  `model` text COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` text COLLATE utf8_unicode_ci NOT NULL,
  `khohang` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `n_mc_product`
--

INSERT INTO `n_mc_product` (`id`, `namev`, `namee`, `alias`, `category_id`, `price`, `usesv`, `usese`, `technical_infov`, `technical_infoe`, `image`, `is_new`, `model`, `hangsx`, `baohanh`, `khohang`) VALUES
(4, 'Máy răng', 'dental machine', 'may-rang', 2, '1.500.000', '', '', '<table align="center" border="1" cellpadding="0" cellspacing="0" height="453" width="560">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Model</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">CK26-E</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">K&iacute;ch thước (mm)</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">365 x 450 x 115</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">D&ograve;ng điện</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">12A</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Điện &aacute;p</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">220V (160~260V)/1ph/ 50/60Hz</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&ocirc;ng suất điện ra tối đa</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">2600W</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Nấu</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">10 mức (1 ~ 10)</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">H&acirc;m n&oacute;ng</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">7 mức (H1 ~ H10)</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&agrave;i đặt thời gian</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Kh&ocirc;ng &aacute;p dụng</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&agrave;i đặt nhiệt độ</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Kh&ocirc;ng &aacute;p dụng</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Khối lượng</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">7kg</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Bảo h&agrave;nh</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">1 năm</span></span></span></p>\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	&nbsp;</p>\r\n<div>\r\n	No-load rotational speed for high-speed turbine 35x &ge; 10 4 / minutes</div>\r\n<div>\r\n	No-load rotational speed for low-speed turbine &ge; 18 x 10 4 / minutes</div>\r\n<div>\r\n	Intensity lighting 10000-15000Lx</div>\r\n<div>\r\n	Lamps reading &ge; 2000Lx video</div>\r\n<div>\r\n	Load bearing capacity of dental chair motor &ge; 1350N</div>\r\n<div>\r\n	Height of the seat:</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Max &ge; 800mm</div>\r\n<div>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Min &le; 550 mm</div>\r\n<div>\r\n	The inclination of the back 105-1700</div>\r\n<div>\r\n	Band pulled out of the top 120 mm</div>\r\n<div>\r\n	Seat angle relative to the horizontal: &ge; 120</div>\r\n<div>\r\n	Dimensions: 1<span style="font-family:arial,helvetica,sans-serif;">900 mm x 1200 mm x 2000 mm</span></div>\r\n<div>\r\n	<span style="font-family:arial,helvetica,sans-serif;">Power supply: 220V / 50Hz</span></div>\r\n<div>\r\n	<span style="font-family:arial,helvetica,sans-serif;">Motor: 24V</span></div>\r\n<div>\r\n	<span style="font-family:arial,helvetica,sans-serif;">Water pressure: 0.2MPa-0.4MPa</span></div>\r\n<div>\r\n	<span style="font-family:arial,helvetica,sans-serif;">Air Pressure: 0.5MPa-0.</span>8MPa</div>\r\n<div>\r\n	&nbsp;</div>\r\n', '<p>\r\n	<img alt="" src="/minhchau/assets/minhchau/upload/images/1.jpg" style="width: 583px; height: 500px; " /></p>\r\n', 1, '0', '0', '0', '0'),
(5, 'Tên sản phẩm', 'Product name', 'ten-san-pham-1', 33, '19 $', '<p>\r\n	Chức năng việt</p>\r\n', '<p>\r\n	Chức năng anh</p>\r\n', '<p>\r\n	Th&ocirc;ng tin kỹ thuật việt</p>\r\n', '<p>\r\n	Th&ocirc;ng tin kỹ thuật anh</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/1.jpg" style="width: 583px; height: 500px; " /></p>\r\n', 1, 'CK26-EM16', 'DIPO - KOREA6', '12 tháng', 'Còn hàng'),
(6, 'Tên sản phẩm', 'Product name', 'ten-san-pham', 33, '20 $', '<p>\r\n	Chức năng việt</p>\r\n', '<p>\r\n	Chức năng anh</p>\r\n', '<p>\r\n	Th&ocirc;ng số kỹ thuật tiếng việt</p>\r\n', '<p>\r\n	Th&ocirc;ng số kỹ thuật tiếng anh</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/medison9900.gif" style="width: 280px; height: 445px; " /></p>\r\n', 1, 'CK26-EM14', 'DIPO - KOREA4', '12 tháng', 'Còn hàng'),
(7, 'máy siêu âm 4D 2', 'may sieu am 4d', 'may-sieu-am-4d-2', 2, '16.000.000', '<p>\r\n	nhieeuf chức năng</p>\r\n', '<p>\r\n	very good</p>\r\n', '<p>\r\n	&nbsp;nhiều th&ocirc;ng tin</p>\r\n', '<p>\r\n	zzz</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/1.jpg" style="width: 583px; height: 500px;" /></p>\r\n', 1, 'CK26-EM13', 'DIPO - KOREA3', '12 tháng', 'Còn hàng'),
(8, 'Máy siêu âm 3D', 'Sieuam', 'may-sieu-am', 2, '400.000 VND', '<p>\r\n	- 2D Real-time/2D thời gian thực<br />\r\n	- Dual 2D real-time/ Hiển thị đồng thời 2D thời gian thực<br />\r\n	- 2D/M Mode<br />\r\n	- Doppler m&agrave;u<br />\r\n	- Doppler</p>\r\n', '<p>\r\n	- 2D Real-time/2D t<br />\r\n	- Dual 2D real-time/<br />\r\n	- 2D/M Mode<br />\r\n	- Doppler<br />\r\n	- Doppler</p>\r\n', '<p>\r\n	- 2D Real-time/2D thời gian thực<br />\r\n	- Dual 2D real-time/ Hiển thị đồng thời 2D thời gian thực<br />\r\n	- 2D/M Mode<br />\r\n	- Doppler m&agrave;u<br />\r\n	- Doppler</p>\r\n', '<p>\r\n	- 2D Real-time/2D thời gian thực<br />\r\n	- Dual 2D real-time/ Hiển thị đồng thời 2D thời gian thực<br />\r\n	- 2D/M Mode<br />\r\n	- Doppler m&agrave;u<br />\r\n	- Doppler</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/medison9900.gif" style="width: 280px; height: 445px;" /></p>\r\n', 1, 'CK26-EM1', 'DIPO - KOREA1', '12 tháng', 'Còn hàng'),
(9, 'máy phá', 'aaaaa', 'may-pha', 21, '1.000.000', '<p>\r\n	nhiều chức năng</p>\r\n', '<p>\r\n	nhiều lắm &yacute;</p>\r\n', '<p>\r\n	th&ocirc;ng tin kỹ thuật @@</p>\r\n', '<p>\r\n	aaaaaaaaaa</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/mindray3.png" style="width: 172px; height: 64px;" /></p>\r\n', 1, 'CK26-EM15', 'DIPO - KOREA', '12 tháng', 'Còn hàng'),
(10, 'Hồi sức cấp cứu', 'ai nau biet', 'Hoi-suc-cap-cuu', 2, '5.000.000', '<p>\r\n	&nbsp;Rất l&agrave; nhiều chức năng</p>\r\n', '<p>\r\n	no cn</p>\r\n', '<table align="center" border="1" cellpadding="0" cellspacing="0" height="453" style="color: rgb(34, 34, 34); font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; font-family: Tahoma, Geneva, sans-serif;" width="560">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Model</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">CK26-E</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">K&iacute;ch thước (mm)</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">365 x 450 x 115</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">D&ograve;ng điện</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">12A</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Điện &aacute;p</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">220V (160~260V)/1ph/ 50/60Hz</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&ocirc;ng suất điện ra tối đa</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">2600W</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Nấu</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">10 mức (1 ~ 10)</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">H&acirc;m n&oacute;ng</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">7 mức (H1 ~ H10)</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&agrave;i đặt thời gian</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Kh&ocirc;ng &aacute;p dụng</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">C&agrave;i đặt nhiệt độ</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Kh&ocirc;ng &aacute;p dụng</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Khối lượng</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">7kg</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">Bảo h&agrave;nh</span></span></span></p>\r\n			</td>\r\n			<td style="width: 227px;">\r\n				<p align="center" style="margin: 0px; padding: 0px; border: 0px; outline: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">\r\n					<span><span style="font-size: 14px;"><span style="font-family: ''times new roman'', times, serif;">1 năm</span></span></span></p>\r\n				<div>\r\n					&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/show_image_in_imgtag(6).jpg" style="width: 92px; height: 120px;" /></p>\r\n', 1, 'KT9M1-109', 'JAPAN', '1 năm', ' Hết hàng'),
(11, 'Hồi sức không cấp cứu', 'never cap cuu', 'Hoi-suc-khong-cap-cuu', 2, '2.000.000', '<p>\r\n	&nbsp;Qu&aacute; nhiều chức năng</p>\r\n', '<p>\r\n	&nbsp;Rất nhiều chức&nbsp; năng</p>\r\n', '<p>\r\n	&nbsp;Kỹ thuật si&ecirc;u ph&agrave;m</p>\r\n', '<p>\r\n	Si&ecirc;u kỹ thuật English</p>\r\n', '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/show_image_in_imgtag(6).jpg" style="width: 92px; height: 120px;" /></p>\r\n', 1, 'KT H3-M1', 'American', '24 tháng', 'Còn Hàng');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_services`
--

CREATE TABLE IF NOT EXISTS `n_mc_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentv` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `contente` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_mc_services`
--

INSERT INTO `n_mc_services` (`id`, `contentv`, `contente`) VALUES
(1, '<p>\r\n	Hiện tại, th&ocirc;ng tin về dịch vụ của c&ocirc;ng ty, ch&uacute;ng t&ocirc;i đang cập nhật dữ liệu, xin qu&yacute; kh&aacute;ch vui l&ograve;ng quay trở lại sau</p>', '<p>\r\n	Currently, information about the company&#39;s services, we are updating the data, would you please come back later</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_preferences`
--

CREATE TABLE IF NOT EXISTS `n_preferences` (
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `value` text CHARACTER SET latin1 NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n_preferences`
--

INSERT INTO `n_preferences` (`name`, `value`) VALUES
('default_user_group', '1'),
('smtp_host', ''),
('keep_error_logs_for', '30'),
('email_protocol', 'sendmail'),
('use_registration_captcha', '0'),
('page_debug', '0'),
('automated_from_name', 'admin@gmail.com'),
('allow_user_registration', '1'),
('use_login_captcha', '0'),
('site_name', 'Kaimonokago 2.0'),
('automated_from_email', 'admin@gmail.com'),
('account_activation_time', '7'),
('allow_user_profiles', '1'),
('activation_method', 'email'),
('autologin_period', '30'),
('min_password_length', '4'),
('smtp_user', ''),
('smtp_pass', ''),
('email_mailpath', '/usr/sbin/sendmail'),
('smtp_port', '25'),
('smtp_timeout', '5'),
('email_wordwrap', '1'),
('email_wrapchars', '76'),
('email_mailtype', 'text'),
('email_charset', 'utf-8'),
('bcc_batch_mode', '0'),
('bcc_batch_size', '200'),
('login_field', 'email'),
('main_module_name', 'welcome'),
('categories_parent_id', '1'),
('admin_email', ''),
('webshop_slideshow', 'jmpress'),
('slideshow_two', 'none'),
('playroom_parent_id', '10'),
('calendar', '1'),
('category', '1'),
('customers', '1'),
('filemanager', '1'),
('languages', '1'),
('menus', '1'),
('messages', '1'),
('orders', '1'),
('pages', '1'),
('products', '1'),
('slideshow', '1'),
('subscribers', '1'),
('multi_language', '0'),
('website_language', 'english'),
('security_method', 'question'),
('security_question', '3+5='),
('security_answer', '8'),
('ga_tracking', ''),
('ga_profile', ''),
('ga_email', ''),
('ga_password', ''),
('dashboard_rss', 'http://feeds.feedburner.com/nettuts-summary'),
('dashboard_rss_count', '5'),
('company_name', ''),
('company_address', ''),
('frontend_multi_language', '1'),
('company_post', '123-4567'),
('company_city', 'Kobe'),
('company_country', 'Japan'),
('company_organization_number', '992591412'),
('company_telephone', '+ 81 1122 3344'),
('company_mobile', ''),
('company_other_one', 'The contents of website are the copyright of Kaimonokago ? 2012. All rights reserved.  Web: Okada Design AS'),
('company_other_two', ''),
('category_menu_id', '16, 22'),
('lilly_fairies_submenu_id', '1'),
('parentid_other_illust', '27'),
('quicksand_colorbox_cat_id', '11'),
('sharethis_pub_key', ''),
('sharethis_direction', 'vertical'),
('sharethis_services', 'googleplus, facebook, twitter, yahoo, email, sharethis'),
('sharethis_size', 'large'),
('other_work_main', ''),
('customer_registration', '0'),
('twittername', ''),
('twittercount', '20'),
('gioithieu', '1'),
('camnhan', '1'),
('hoithao', '1'),
('khoahoc', '1'),
('loaisach', '1'),
('sach', '1'),
('thongtingioithieu', '1'),
('homepage', '1');

-- --------------------------------------------------------

--
-- Table structure for table `n_tintuc`
--

CREATE TABLE IF NOT EXISTS `n_tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude_v` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `tieude_e` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_v` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung_e` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  `tacgia` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_tintuc`
--

INSERT INTO `n_tintuc` (`id`, `anh`, `tieude_v`, `tieude_e`, `noidung_v`, `noidung_e`, `ngaythang`, `tacgia`) VALUES
(1, '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/vikhuan_anthrax.JPG" style="width: 480px; height: 270px;" /></p>\r\n', 'Loại virus biến thể có khả năng hủy diệt loài người', 'title english', '<div class="article-content">\r\n	<p>\r\n		<span style="font-size: 12pt;">&nbsp;&nbsp;<img src="/minhchau2/assets/minhchau2/upload/images/vikhuan_anthrax.JPG" style="display: inline; width: 297px; height: 221px;" /></span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Loại virus biến thể c&oacute; khả năng hủy diệt lo&agrave;i người</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Một loại virus c&uacute;m do con người tạo ra c&oacute; khả năng x&oacute;a sổ h&agrave;ng chục triệu người tr&ecirc;n h&agrave;nh tinh, nếu như n&oacute; c&oacute; thể tho&aacute;t khỏi m&ocirc;i trường ph&ograve;ng th&iacute; nghiệm</span><br />\r\n		&nbsp;</p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Theo <em>DailyMai</em>l, chủng virus n&agrave;y l&agrave; phi&ecirc;n bản c&uacute;m gia cầm H5N1 đ&atilde; được biến đổi gene, với khả năng l&acirc;y nhiễm kh&ocirc;ng giới hạn v&agrave; c&oacute; thể l&acirc;y truyền dễ d&agrave;ng tới h&agrave;ng triệu người c&ugrave;ng l&uacute;c.</span></p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<div>\r\n		<table cellpadding="0" cellspacing="0" class="image center" style="width: 400px; text-align: center;">\r\n			<tbody style="text-align: left;">\r\n				<tr style="text-align: left;">\r\n					<td style="text-align: left;">\r\n						<p>\r\n							<img src="/minhchau2/assets/minhchau2/upload/images/vit-co-van-dinh-6.jpg" style="display: inline; float: right;" /></p>\r\n					</td>\r\n				</tr>\r\n				<tr style="text-align: left;">\r\n					<td class="image_desc" style="text-align: left;">\r\n						<span style="font-size: 12pt;">Chủng virus H5N1 c&oacute; thể l&acirc;y nhiễm h&agrave;ng triệu người c&ugrave;ng l&uacute;c</span></td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n	</div>\r\n	<p>\r\n		<span style="font-size: 12pt;">Ngay lập tức, nghi&ecirc;n cứu của Trung t&acirc;m Y tế Erasmus &ndash; H&agrave; Lan đ&atilde; l&agrave;m dấy l&ecirc;n một cuộc tranh c&atilde;i dữ dội. C&aacute;c nh&agrave; khoa học bất đồng v&agrave; chia rẽ quan điểm một c&aacute;ch s&acirc;u sắc. Nhiều người tuy&ecirc;n bố, những th&iacute; nghiệm kiểu n&agrave;y lẽ ra kh&ocirc;ng bao giờ được ph&eacute;p diễn ra.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">T&iacute;nh tới thời điểm n&agrave;y, biến thể hiện tại của H5N1 chỉ mới cướp đi mạng sống của 500 người tr&ecirc;n to&agrave;n thế giới v&agrave; chưa đủ nghi&ecirc;m trọng để g&acirc;y ra một đại dịch to&agrave;n cầu. Tuy nhi&ecirc;n, phe phản đối sợ rằng loại virus biến đổi gene mới qu&aacute; nguy hiểm v&agrave; c&oacute; thể được sử dụng trong chiến tranh sinh học, nếu chẳng may ch&uacute;ng lọt v&agrave;o tay kẻ xấu.</span></p>\r\n	<span style="font-size: 12pt;">Trở lại với cuộc nghi&ecirc;n cứu, nh&agrave; vi khuẩn học Ron Fouchier của Trung t&acirc;m Erasmus đ&atilde; ph&aacute;t hiện ra rằng, 5 đột biến gene ở virus H5N1 l&agrave; đủ để chủng virus n&agrave;y c&oacute; thể ph&aacute;t t&aacute;n với tốc độ kinh ho&agrave;ng. </span>\r\n	<p>\r\n		<span style="font-size: 12pt;">Fouchier thừa nhận chủng virus mới l&agrave; &ldquo;một trong những virus nguy hiểm nhất m&agrave; con người c&oacute; thể tạo ra&rdquo;. Tuy vậy, &ocirc;ng vẫn muốn c&ocirc;ng bố c&ocirc;ng tr&igrave;nh của m&igrave;nh, bất chấp những nghi ngại rằng n&oacute; c&oacute; thể l&agrave;m lợi cho những kẻ khủng bố.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">B&ecirc;n cạnh nghi&ecirc;n cứu của Fouchier th&igrave; một c&ocirc;ng tr&igrave;nh tương tự do Đại học Wisconsin (Mỹ) v&agrave; Đại học Tokyo (Nhật) hợp t&aacute;c cũng về H5N1 cũng g&acirc;y ra tranh c&atilde;i tương tự.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Trung Hiếu tổng hợp</span></p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '<div class="article-content">\r\n	<p>\r\n		<span style="font-size: 12pt;">&nbsp;&nbsp;<img height="221" src="file:///C:/Users/Trung/Desktop/thietbiyte/images/20111128171507_anthrax.JPG" style="display: inline;" width="297" /></span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Loại virus biến thể c&oacute; khả năng hủy diệt lo&agrave;i người</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Một loại virus c&uacute;m do con người tạo ra c&oacute; khả năng x&oacute;a sổ h&agrave;ng chục triệu người tr&ecirc;n h&agrave;nh tinh, nếu như n&oacute; c&oacute; thể tho&aacute;t khỏi m&ocirc;i trường ph&ograve;ng th&iacute; nghiệm</span><br />\r\n		&nbsp;</p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Theo <em>DailyMai</em>l, chủng virus n&agrave;y l&agrave; phi&ecirc;n bản c&uacute;m gia cầm H5N1 đ&atilde; được biến đổi gene, với khả năng l&acirc;y nhiễm kh&ocirc;ng giới hạn v&agrave; c&oacute; thể l&acirc;y truyền dễ d&agrave;ng tới h&agrave;ng triệu người c&ugrave;ng l&uacute;c.</span></p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<div>\r\n		<table cellpadding="0" cellspacing="0" class="image center" style="width: 400px; text-align: center;">\r\n			<tbody style="text-align: left;">\r\n				<tr style="text-align: left;">\r\n					<td style="text-align: left;">\r\n						<p>\r\n							<img src="file:///C:/Users/Trung/Desktop/thietbiyte/images/20111128171507_anthrax.JPG" style="display: inline; float: right;" /></p>\r\n					</td>\r\n				</tr>\r\n				<tr style="text-align: left;">\r\n					<td class="image_desc" style="text-align: left;">\r\n						<span style="font-size: 12pt;">Chủng virus H5N1 c&oacute; thể l&acirc;y nhiễm h&agrave;ng triệu người c&ugrave;ng l&uacute;c</span></td>\r\n				</tr>\r\n			</tbody>\r\n		</table>\r\n	</div>\r\n	<p>\r\n		<span style="font-size: 12pt;">Ngay lập tức, nghi&ecirc;n cứu của Trung t&acirc;m Y tế Erasmus &ndash; H&agrave; Lan đ&atilde; l&agrave;m dấy l&ecirc;n một cuộc tranh c&atilde;i dữ dội. C&aacute;c nh&agrave; khoa học bất đồng v&agrave; chia rẽ quan điểm một c&aacute;ch s&acirc;u sắc. Nhiều người tuy&ecirc;n bố, những th&iacute; nghiệm kiểu n&agrave;y lẽ ra kh&ocirc;ng bao giờ được ph&eacute;p diễn ra.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">T&iacute;nh tới thời điểm n&agrave;y, biến thể hiện tại của H5N1 chỉ mới cướp đi mạng sống của 500 người tr&ecirc;n to&agrave;n thế giới v&agrave; chưa đủ nghi&ecirc;m trọng để g&acirc;y ra một đại dịch to&agrave;n cầu. Tuy nhi&ecirc;n, phe phản đối sợ rằng loại virus biến đổi gene mới qu&aacute; nguy hiểm v&agrave; c&oacute; thể được sử dụng trong chiến tranh sinh học, nếu chẳng may ch&uacute;ng lọt v&agrave;o tay kẻ xấu.</span></p>\r\n	<span style="font-size: 12pt;">Trở lại với cuộc nghi&ecirc;n cứu, nh&agrave; vi khuẩn học Ron Fouchier của Trung t&acirc;m Erasmus đ&atilde; ph&aacute;t hiện ra rằng, 5 đột biến gene ở virus H5N1 l&agrave; đủ để chủng virus n&agrave;y c&oacute; thể ph&aacute;t t&aacute;n với tốc độ kinh ho&agrave;ng. </span>\r\n	<p>\r\n		<span style="font-size: 12pt;">Fouchier thừa nhận chủng virus mới l&agrave; &ldquo;một trong những virus nguy hiểm nhất m&agrave; con người c&oacute; thể tạo ra&rdquo;. Tuy vậy, &ocirc;ng vẫn muốn c&ocirc;ng bố c&ocirc;ng tr&igrave;nh của m&igrave;nh, bất chấp những nghi ngại rằng n&oacute; c&oacute; thể l&agrave;m lợi cho những kẻ khủng bố.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">B&ecirc;n cạnh nghi&ecirc;n cứu của Fouchier th&igrave; một c&ocirc;ng tr&igrave;nh tương tự do Đại học Wisconsin (Mỹ) v&agrave; Đại học Tokyo (Nhật) hợp t&aacute;c cũng về H5N1 cũng g&acirc;y ra tranh c&atilde;i tương tự.</span></p>\r\n	<p>\r\n		<span style="font-size: 12pt;">Trung Hiếu tổng hợp</span></p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '2012-11-08', 'trungoc'),
(2, '<p>\r\n	<img alt="" src="/minhchau2/assets/minhchau2/upload/images/daubungtren301111_a0f38.jpg" style="width: 350px; height: 396px;" /></p>\r\n', '5 biểu hiện báo hiệu ung thư dạ dày', 'title english 2', '<div>\r\n	5 biểu hiện b&aacute;o hiệu ung thư dạ d&agrave;y</div>\r\n<div>\r\n	&nbsp;- Ung thư dạ d&agrave;y thời kỳ đầu đa phần kh&ocirc;ng c&oacute; biểu hiện g&igrave; hoặc chỉ c&oacute; những biểu hiện nhỏ. Khi c&aacute;c triệu chứng l&acirc;m s&agrave;ng biểu hiện ra th&igrave; bệnh đ&atilde; đến thời kỳ cuối. 5 triệu chứng sau đ&acirc;y gi&uacute;p ch&uacute;ng ta kh&ocirc;ng bỏ lỡ cơ hội chữa trị.</div>\r\n<p>\r\n	<img src="/minhchau2/assets/minhchau2/upload/images/daubungtren301111_a0f38.jpg" style="width: 204px; height: 306px;" /></p>\r\n', '<p>\r\n	no nd</p>\r\n<div>\r\n	5 biểu hiện b&aacute;o hiệu ung thư dạ d&agrave;y</div>\r\n<div>\r\n	&nbsp;- Ung thư dạ d&agrave;y thời kỳ đầu đa phần kh&ocirc;ng c&oacute; biểu hiện g&igrave; hoặc chỉ c&oacute; những biểu hiện nhỏ. Khi c&aacute;c triệu chứng l&acirc;m s&agrave;ng biểu hiện ra th&igrave; bệnh đ&atilde; đến thời kỳ cuối. 5 triệu chứng sau đ&acirc;y gi&uacute;p ch&uacute;ng ta kh&ocirc;ng bỏ lỡ cơ hội chữa trị.</div>\r\n<p>\r\n	<img src="/minhchau2/assets/minhchau2/upload/images/daubungtren301111_a0f38.jpg" style="width: 204px; height: 306px;" /></p>\r\n', '2012-11-14', 'thu hằng');

-- --------------------------------------------------------

--
-- Table structure for table `n_users`
--

CREATE TABLE IF NOT EXISTS `n_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(254) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group` int(10) unsigned DEFAULT NULL,
  `activation_key` varchar(32) DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `password` (`password`),
  KEY `group` (`group`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_users`
--

INSERT INTO `n_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2013-01-02 09:59:18', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
(2, 'letien', '0993abd18b04dce02cafde93878540f109592da5', 'lexuantien0311@gmail.com', 1, 2, NULL, '2012-07-23 07:58:53', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `n_user_profiles`
--

CREATE TABLE IF NOT EXISTS `n_user_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `web_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_code` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_user_profiles`
--

INSERT INTO `n_user_profiles` (`user_id`, `company_name`, `full_name`, `web_address`, `phone_number`, `address`, `city`, `post_code`) VALUES
(1, '', '', '', '', '', '', 0),
(2, '', '', '', '', '', '', 0),
(14, '', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
