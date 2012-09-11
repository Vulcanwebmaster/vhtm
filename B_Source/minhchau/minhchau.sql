-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2012 at 11:20 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minhchau`
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
(1, '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">C&ocirc;ng ty thiết bị y tế Minh Ch&acirc;u</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">L&agrave; m&ocirc;̣t nh&agrave; nh&acirc;̣p kh&acirc;̉u chuy&ecirc;n nghi&ecirc;̣p, C&ocirc;ng ty Minh Ch&acirc;u ch&uacute;ng t&ocirc;i được ph&aacute;t triển theo hướng đa dạng ho&aacute; sản phẩm. Ch&uacute;ng t&ocirc;i nhắm tới đối tượng kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c c&ocirc;ng ty kinh doanh thiết bị y tế, c&aacute;c cơ sở y tế v&agrave; đặc biệt l&agrave; c&aacute;c ph&ograve;ng kh&aacute;m, bệnh viện tư nh&acirc;n. Ch&uacute;ng t&ocirc;i c&oacute; h&agrave;ng ng&agrave;n sản phẩm với đủ mọi chủng loại kh&aacute;c nhau, hầu như bao qu&aacute;t đầy đủ c&aacute;c nhu cầu về thiết bị v&agrave; dụng cụ y tế.</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">Hệ thống nh&agrave; sản xuất v&agrave; cung cấp sản phẩm tr&ecirc;n khắp thế giới như:</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y Doppler, Lưu huyết n&atilde;o v&agrave; Doppler của h&atilde;ng Hadeco- Nhật Bản</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y điện tim, điện n&atilde;o của h&atilde;ng Fukuda - Nhật Bản; h&atilde;ng Contec - Trung Quốc...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y si&ecirc;u &acirc;m của h&atilde;ng Mindray, Contec - Trung Quốc; h&atilde;ng Fukuda -Nhật Bản...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y X quang thường quy v&agrave; X quang tuyến v&uacute; của Trung Quốc, H&agrave;n Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y tạo oxy của h&atilde;ng Sequal&nbsp; Mỹ v&agrave; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y thở, m&aacute;y g&acirc;y m&ecirc; hồi sức của Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c m&aacute;y thuộc chuy&ecirc;n khoa mắt của h&atilde;ng Inami&nbsp; Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hệ thống nội soi Tai -&nbsp; Mũi - Họng; nội soi ti&ecirc;u ho&aacute;, ổ bụng của Nopa - Đức, Hawk, Smoif; Aohua (Trung Quốc) v&agrave; Riester (Đức)</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thiết bị ph&ograve;ng mổ của Gemmy - Đ&agrave;i Loan; Alsa - Italy</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dụng cụ phẫu thuật của Nopa - Đức; MRU -&nbsp;&nbsp;&nbsp; Pakistan</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&ocirc; h&igrave;nh giảng dạy: 3B Scientific - Đức; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c loại thiết bị Dược của Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thuốc rửa phim Mỹ</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: rgb(241, 241, 241); ">v&agrave; rất nhiều c&aacute;c mặt h&agrave;ng kh&aacute;c...&nbsp;</span></p>', '<p>\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">C&ocirc;ng ty thiết bị y tế Minh Ch&acirc;u</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">L&agrave; m&ocirc;̣t nh&agrave; nh&acirc;̣p kh&acirc;̉u chuy&ecirc;n nghi&ecirc;̣p, C&ocirc;ng ty Minh Ch&acirc;u ch&uacute;ng t&ocirc;i được ph&aacute;t triển theo hướng đa dạng ho&aacute; sản phẩm. Ch&uacute;ng t&ocirc;i nhắm tới đối tượng kh&aacute;ch h&agrave;ng l&agrave; c&aacute;c c&ocirc;ng ty kinh doanh thiết bị y tế, c&aacute;c cơ sở y tế v&agrave; đặc biệt l&agrave; c&aacute;c ph&ograve;ng kh&aacute;m, bệnh viện tư nh&acirc;n. Ch&uacute;ng t&ocirc;i c&oacute; h&agrave;ng ng&agrave;n sản phẩm với đủ mọi chủng loại kh&aacute;c nhau, hầu như bao qu&aacute;t đầy đủ c&aacute;c nhu cầu về thiết bị v&agrave; dụng cụ y tế.</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">Hệ thống nh&agrave; sản xuất v&agrave; cung cấp sản phẩm tr&ecirc;n khắp thế giới như:</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y Doppler, Lưu huyết n&atilde;o v&agrave; Doppler của h&atilde;ng Hadeco- Nhật Bản</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y điện tim, điện n&atilde;o của h&atilde;ng Fukuda - Nhật Bản; h&atilde;ng Contec - Trung Quốc...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y si&ecirc;u &acirc;m của h&atilde;ng Mindray, Contec - Trung Quốc; h&atilde;ng Fukuda -Nhật Bản...</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y X quang thường quy v&agrave; X quang tuyến v&uacute; của Trung Quốc, H&agrave;n Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y tạo oxy của h&atilde;ng Sequal&nbsp; Mỹ v&agrave; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&aacute;y thở, m&aacute;y g&acirc;y m&ecirc; hồi sức của Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c m&aacute;y thuộc chuy&ecirc;n khoa mắt của h&atilde;ng Inami&nbsp; Nhật Bản, Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hệ thống nội soi Tai -&nbsp; Mũi - Họng; nội soi ti&ecirc;u ho&aacute;, ổ bụng của Nopa - Đức, Hawk, Smoif; Aohua (Trung Quốc) v&agrave; Riester (Đức)</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thiết bị ph&ograve;ng mổ của Gemmy - Đ&agrave;i Loan; Alsa - Italy</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dụng cụ phẫu thuật của Nopa - Đức; MRU -&nbsp;&nbsp;&nbsp; Pakistan</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M&ocirc; h&igrave;nh giảng dạy: 3B Scientific - Đức; Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c loại thiết bị Dược của Trung Quốc</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thuốc rửa phim Mỹ</span><br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<br style="height: 1px; font-size: 1px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; background-color: rgb(241, 241, 241); " />\r\n	<span style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 18px; background-color: rgb(241, 241, 241); ">v&agrave; rất nhiều c&aacute;c mặt h&agrave;ng kh&aacute;c...&nbsp;</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_category`
--

CREATE TABLE IF NOT EXISTS `n_mc_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `namee` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_mc_category`
--

INSERT INTO `n_mc_category` (`id`, `namev`, `namee`, `parent_id`) VALUES
(1, 'Chuẩn đoán hình ảnh', '', 0),
(2, 'Máy siêu âm', '', 1),
(3, 'Máy X-Quang', '', 1),
(4, 'Phụ kiện', '', 1);

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
(1, '<p>\r\n	&nbsp;</p>\r\n<p style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 12px; ">\r\n	<span style="font-size: larger; "><small><span style="font-family: Arial; ">C&ocirc;ng ty cổ phần Thiết bị y tế Minh Ch&acirc;u l&agrave; đơn vị nhập khẩu, đại l&yacute; độc quyền v&agrave; đại l&yacute; ph&acirc;n phối c&aacute;c trang thiết bị y tế kỹ thuật cao, c&aacute;c sản phẩm y sinh học, dược phẩm chất lượng từ Mỹ, Ch&acirc;u &Acirc;u (Đức, Anh, Italia, T&acirc;y Ban Nha), Nhật Bản, H&agrave;n Quốc.</span></small></span></p>\r\n<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: larger; "><small><span style="font-family: Arial; ">C&ocirc;ng ty &nbsp;CP TBYT Minh Ch&acirc;u c&oacute; mạng lưới quan hệ rộng r&atilde;i với c&aacute;c đối t&aacute;c uy t&iacute;n nước ngo&agrave;i, với hệ thống tư vấn chiến lược x&acirc;y dựng v&agrave; ph&aacute;t triển chuy&ecirc;n nghiệp hỗ trợ bởi c&aacute;c b&aacute;c sĩ, chuy&ecirc;n gia đầu ng&agrave;nh trong v&agrave; ngo&agrave;i nước.<span class="apple-converted-space">&nbsp;</span></span></small></span></p>\r\n<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: larger; "><small><span style="font-family: Arial; ">Với đội ngũ c&aacute;n bộ năng động, c&oacute; tr&igrave;nh độ v&agrave; t&acirc;m huyết với nghề, ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ mong muốn đem những thiết bị y tế c&ocirc;ng nghệ cao tới Việt Nam m&agrave; c&ograve;n mong muốn x&acirc;y dựng một hệ thống c&aacute;c chương tr&igrave;nh đ&agrave;o tạo v&agrave; chế độ bảo h&agrave;nh, bảo tr&igrave; chuy&ecirc;n nghiệp với mục ti&ecirc;u khai th&aacute;c hiệu quả, đ&uacute;ng c&ocirc;ng suất v&agrave; chức năng c&aacute;c thiết bị hiện đại, ti&ecirc;n tiến n&agrave;y; đảm bảo ho&agrave;n th&agrave;nh tốt c&ocirc;ng t&aacute;c chăm s&oacute;c v&agrave; bảo vệ sức khỏe nh&acirc;n d&acirc;n.</span></small></span></p>\r\n<p>\r\n	<small style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; "><span style="font-size: larger; "><span style="font-family: Arial; ">Ch&uacute;ng t&ocirc;i tin tưởng v&agrave;o những bước đi đ&uacute;ng hướng v&agrave; vững chắc của m&igrave;nh tr&ecirc;n con đường ph&aacute;t triển trong ng&agrave;nh y tế v&agrave; mong muốn sẽ đ&oacute;ng g&oacute;p được cho x&atilde; hội nhiều gi&aacute; trị thiết thực v&agrave; hiệu quả.</span></span></small></p>', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p style="font-size: 12px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; ">\r\n	<span style="font-size: larger; "><small><span style="font-family: Arial; ">C&ocirc;ng ty cổ phần Thiết bị y tế Minh Ch&acirc;u l&agrave; đơn vị nhập khẩu, đại l&yacute; độc quyền v&agrave; đại l&yacute; ph&acirc;n phối c&aacute;c trang thiết bị y tế kỹ thuật cao, c&aacute;c sản phẩm y sinh học, dược phẩm chất lượng từ Mỹ, Ch&acirc;u &Acirc;u (Đức, Anh, Italia, T&acirc;y Ban Nha), Nhật Bản, H&agrave;n Quốc.</span></small></span></p>\r\n<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: larger; "><small><span style="font-family: Arial; ">C&ocirc;ng ty &nbsp;CP TBYT Minh Ch&acirc;u c&oacute; mạng lưới quan hệ rộng r&atilde;i với c&aacute;c đối t&aacute;c uy t&iacute;n nước ngo&agrave;i, với hệ thống tư vấn chiến lược x&acirc;y dựng v&agrave; ph&aacute;t triển chuy&ecirc;n nghiệp hỗ trợ bởi c&aacute;c b&aacute;c sĩ, chuy&ecirc;n gia đầu ng&agrave;nh trong v&agrave; ngo&agrave;i nước.<span class="apple-converted-space">&nbsp;</span></span></small></span></p>\r\n<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: larger; "><small><span style="font-family: Arial; ">Với đội ngũ c&aacute;n bộ năng động, c&oacute; tr&igrave;nh độ v&agrave; t&acirc;m huyết với nghề, ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ mong muốn đem những thiết bị y tế c&ocirc;ng nghệ cao tới Việt Nam m&agrave; c&ograve;n mong muốn x&acirc;y dựng một hệ thống c&aacute;c chương tr&igrave;nh đ&agrave;o tạo v&agrave; chế độ bảo h&agrave;nh, bảo tr&igrave; chuy&ecirc;n nghiệp với mục ti&ecirc;u khai th&aacute;c hiệu quả, đ&uacute;ng c&ocirc;ng suất v&agrave; chức năng c&aacute;c thiết bị hiện đại, ti&ecirc;n tiến n&agrave;y; đảm bảo ho&agrave;n th&agrave;nh tốt c&ocirc;ng t&aacute;c chăm s&oacute;c v&agrave; bảo vệ sức khỏe nh&acirc;n d&acirc;n.</span></small></span></p>\r\n<p>\r\n	<small style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; "><span style="font-size: larger; "><span style="font-family: Arial; ">Ch&uacute;ng t&ocirc;i tin tưởng v&agrave;o những bước đi đ&uacute;ng hướng v&agrave; vững chắc của m&igrave;nh tr&ecirc;n con đường ph&aacute;t triển trong ng&agrave;nh y tế v&agrave; mong muốn sẽ đ&oacute;ng g&oacute;p được cho x&atilde; hội nhiều gi&aacute; trị thiết thực v&agrave; hiệu quả.</span></span></small></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_mc_product`
--

CREATE TABLE IF NOT EXISTS `n_mc_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `namee` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `usesv` text COLLATE utf8_unicode_ci,
  `usese` text COLLATE utf8_unicode_ci NOT NULL,
  `technical_infov` text COLLATE utf8_unicode_ci,
  `technical_infoe` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_mc_product`
--

INSERT INTO `n_mc_product` (`id`, `namev`, `namee`, `category_id`, `usesv`, `usese`, `technical_infov`, `technical_infoe`, `image`) VALUES
(3, 'sdfsdf', 'sadasd', 1, '<p>\r\n	fsdf</p>\r\n', '<p>\r\n	sdfgd</p>\r\n', '<p>\r\n	gdfg</p>\r\n', '<p>\r\n	hj</p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_d.jpg" style="width: 387px; height: 490px; " /></p>\r\n');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-09-11 07:05:33', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
