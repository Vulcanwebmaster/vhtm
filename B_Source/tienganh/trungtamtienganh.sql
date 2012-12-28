-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2012 at 11:34 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trungtamtienganh`
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
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_doitac`
--

INSERT INTO `n_doitac` (`id`, `ten`) VALUES
(1, 'Trường mầm non A'),
(2, 'Trường mầm non B'),
(3, 'Trường mầm non C');

-- --------------------------------------------------------

--
-- Table structure for table `n_email`
--

CREATE TABLE IF NOT EXISTS `n_email` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `e_mail` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `n_email`
--

INSERT INTO `n_email` (`id`, `e_mail`) VALUES
(5, 'tuyet@gmail.com'),
(7, 'tuyet@yahoo.com'),
(11, 'trungnt20290@gmail.com'),
(12, 'trungoco7n@gmail.com'),
(14, 'trungnt20290@gmail.com');

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
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ten` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(13) NOT NULL,
  `yahoo` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_hotro`
--

INSERT INTO `n_hotro` (`id`, `ten`, `sdt`, `yahoo`) VALUES
(1, 'Văn phòng học viện Jennifer', 0, 'mo_tuyet_tinh');

-- --------------------------------------------------------

--
-- Table structure for table `n_hotroonline`
--

CREATE TABLE IF NOT EXISTS `n_hotroonline` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_hotroonline`
--

INSERT INTO `n_hotroonline` (`id`, `name`, `sdt`, `yahoo`, `skype`) VALUES
(1, 'Miss.Yen', ' (+84)123 456', 'mo_tuyet_tinh@yahoo.com112200', 'tuyet.ngo'),
(2, 'Miss.Linh', ' (+84)123 456', 'bonghongbong.@yahoo.com', 'bonghongbong');

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
-- Table structure for table `n_slide`
--

CREATE TABLE IF NOT EXISTS `n_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `anh3` text COLLATE utf8_unicode_ci NOT NULL,
  `anh4` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_slide`
--

INSERT INTO `n_slide` (`id`, `anh1`, `anh2`, `anh3`, `anh4`) VALUES
(1, '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide1(2).jpg" style="width: 1600px; height: 1081px;" /></p>', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide2.jpg" style="width: 950px; height: 400px;" /></p>\n', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide31.jpg" style="width: 950px; height: 400px;" /></p>\n', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_slide1`
--

CREATE TABLE IF NOT EXISTS `n_slide1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `anh3` text COLLATE utf8_unicode_ci NOT NULL,
  `anh4` text COLLATE utf8_unicode_ci NOT NULL,
  `anh5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_slide1`
--

INSERT INTO `n_slide1` (`id`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES
(1, '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(1).gif" style="width: 284px; height: 119px;" /></p>', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_155.gif" style="width: 284px; height: 119px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide31.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(2).gif" style="width: 284px; height: 119px;" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_about_us`
--

CREATE TABLE IF NOT EXISTS `n_ta_about_us` (
  `about_id` int(12) NOT NULL AUTO_INCREMENT,
  `about_content` text COLLATE utf8_unicode_ci NOT NULL,
  `about_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_about_us`
--

INSERT INTO `n_ta_about_us` (`about_id`, `about_content`, `about_category`) VALUES
(1, '<p>\n	&nbsp;</p>\n<h1 style="color: black; font-size: small; font-family: Arial; border-bottom-width: 0px; padding: 0px;">\n	<b>Được th&agrave;nh lập từ năm 2008, Trung t&acirc;m Anh ngữ GLN l&agrave; một trong những đơn vị dẫn đầu trong việc thiết kế c&aacute;c kh&oacute;a&nbsp;<a href="http://gln.edu.vn/" style="color: black; text-decoration: initial;">học tiếng anh</a>&nbsp;theo m&ocirc; h&igrave;nh lớp học ưu việt. C&aacute;c kh&oacute;a học được thiết kế ph&ugrave; hợp với nhu cầu học tập nhằm mang lại hiệu quả cao nhất &amp; nhanh nhất cho người học.</b></h1>\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: center;">\n	<img alt="Mô hình học tiếng anh tại trung tâm tiếng anh GLN" height="253" src="http://gln.edu.vn/img/userfiles/images/Mo%20hinh%20hoc(2).png" width="400" /></div>\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\n	<img alt="" height="0" src="http://gln.edu.vn/img/userfiles/images/Giaovien/mohinhhoc1.jpg" width="0" /></div>\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\n	Qua nhiều năm giảng dạy Anh văn cho học vi&ecirc;n tại c&aacute;c nước như Trung Quốc, Nhật Bản, H&agrave;n Quốc, Đ&agrave;i Loan, Th&aacute;i Lan, Indonesia, Việt Nam&hellip;, c&aacute;c gi&aacute;o vi&ecirc;n tại Trung t&acirc;m Anh ngữ GLN nghiệm ra rằng, với m&ocirc; h&igrave;nh học tập &iacute;t người, học vi&ecirc;n sẽ dễ d&agrave;ng c&oacute; sự tiếp cận trực tiếp giữa thầy v&agrave; tr&ograve;, gi&uacute;p học vi&ecirc;n học tập được hiệu quả nhất. Ch&iacute;nh bởi vậy, GLN đ&atilde; thiết kế một m&ocirc; h&igrave;nh lớp học rất ưu việt: lớp 1 thầy 1 tr&ograve;, lớp 1 thầy 4 tr&ograve;, 1 thầy 6 tr&ograve;, 1 thầy 8 tr&ograve; &amp; 1 thầy 10 tr&ograve;. Ở mỗi một lớp học, học vi&ecirc;n sẽ được r&egrave;n luyện những kỹ năng cơ bản v&agrave; cần thiết nhất để ph&aacute;t huy tối đa khả năng học v&agrave; sử dụng&nbsp;<a href="http://gln.edu.vn/article_d/c39-217/hoc-tieng-anh-tong-quat-hieu-qua-tai-ha-noi" style="color: black; font-weight: bold; font-size: small; font-family: Arial; text-decoration: initial;">tiếng Anh</a>&nbsp;của m&igrave;nh.</div>\n<p>\n	&nbsp;</p>\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: center;">\n	&nbsp;<img alt="Giảng viên tại trung tâm tiếng anh GLN" height="344" src="http://gln.edu.vn/img/userfiles/images/giang-vien-tai-trung-tam-tieng-anh.jpg" width="250" /></div>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\n	<span style="font-size: small;"><span style="font-family: Arial;">B&agrave; B&ugrave;i Thị Lệ Hằng, Đại diện GLN cho biết: &ldquo;Với phương ch&acirc;m lấy người học l&agrave;m trung t&acirc;m, c&aacute;c kh&oacute;a học tiếng anh,&nbsp;<a href="http://gln.edu.vn/article_d/c36-138/luyen-thi-ielts-hieu-qua-tai-ha-noi" style="color: black; font-weight: bold; text-decoration: initial;">luyện thi ielts</a>&nbsp;tại GLN đều được thiết kế một c&aacute;ch kỹ lưỡng nhằm đ&aacute;p ứng những nhu cầu thực tế của học vi&ecirc;n. B&ecirc;n cạnh đ&oacute;, 100% gi&aacute;o vi&ecirc;n của GLN l&agrave; những gi&aacute;o vi&ecirc;n Anh Văn nhiều năm kinh nghiệm đến từ c&aacute;c nước: Anh, Mỹ, &Uacute;c, Philipin ... Bởi vậy, những kh&oacute;a học tại GLN sẽ mang lại cho bạn kiến thức, kinh nghiệm v&agrave; những kỹ năng cần thiết nhất để n&acirc;ng cao tr&igrave;nh độ&nbsp;<a href="http://gln.edu.vn/article_d/c37-137/hoc-tieng-anh-nghe-noi-giao-tiep-tai-ha-noi" style="color: black; font-weight: bold; text-decoration: initial;">tiếng Anh</a>&nbsp;của m&igrave;nh&rdquo;.<br />\n	<br />\n	GLN hiện đang l&agrave; một trong những đơn vị giảng dạy Anh văn c&oacute; uy t&iacute;n nhất tại H&agrave; Nội. B&ecirc;n cạnh đội ngũ gi&aacute;o vi&ecirc;n c&oacute; chuy&ecirc;n m&ocirc;n cao v&agrave; gi&agrave;u kinh nghiệm, GLN c&ograve;n cung cấp cho học vi&ecirc;n một cơ sở học tập hiện đại v&agrave; nguồn t&agrave;i liệu học tập cập nhật nhất.</span></span></div>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\n	<img alt="học tiếng anh tại trung tâm tiếng anh GLN" height="266" src="http://gln.edu.vn/img/userfiles/images/hoc-tieng-anh-tong-quat.jpg" width="400" /></div>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\n	<span style="font-size: small;"><span style="font-family: Arial;">Ngo&agrave;i ra, đội ngũ ngũ tư vấn vi&ecirc;n chuy&ecirc;n nghiệp, c&oacute; kinh nghiệm sẽ tư vấn cho c&aacute;c bạn chương tr&igrave;nh học, kho&aacute; học ph&ugrave; hợp với nhu cầu &amp; mục ti&ecirc;u ri&ecirc;ng của từng c&aacute; nh&acirc;n.</span></span></div>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\n	<img alt="Đội ngũ nhân viên tại trung tâm tiếng anh GLN" height="271" src="http://gln.edu.vn/img/userfiles/images/doi-ngu-nhan-vien-tai-trung-tam-tieng-anh-gln.jpg" width="400" /></div>\n<p>\n	<br />\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: small;"><span style="font-family: Arial;">Hiện nay, GLN đang c&oacute; hai trung t&acirc;m giảng dạy tại H&agrave; Nội l&agrave; GLN P. Trung H&ograve;a &amp; GLN P. B&aacute;ch Khoa. Sắp tới GLN tiếp tục triển khai m&ocirc; h&igrave;nh n&agrave;y đến nhiều khu vực tr&ecirc;n địa b&agrave;n H&agrave; Nội &amp; Tp. HCM.&nbsp;</span></span></p>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<h2 style="font-size: small; border-bottom-width: 0px; padding: 0px; margin: 5px 0px 10px;">\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial;"><b>Để biết th&ecirc;m th&ocirc;ng tin chi tiết về c&aacute;c&nbsp;<a href="http://gln.edu.vn/articles/c172/khai-giang-khoa-hoc-moi" style="color: black; text-decoration: initial;">kh&oacute;a học tiếng anh</a>&nbsp;tại GLN, c&aacute;c bạn c&oacute; thể li&ecirc;n hệ trực tiếp tại địa chỉ:</b></span></span></h2>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>', 'Sứ mệnh'),
(2, '<p>\r\n	sdsdssdasdsd</p>', 'Tầm nhìn'),
(5, 'sdsdssssssssssssssss', 'Giá trị cốt lõi'),
(6, '<p>\n	aaaaaaaaaaaaaaaaaaaaaaa &ecirc; heheh</p>', 'Văn hóa công ty');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_albums`
--

CREATE TABLE IF NOT EXISTS `n_ta_albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `album_avatar` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_ta_albums`
--

INSERT INTO `n_ta_albums` (`album_id`, `album_name`, `album_avatar`, `category_id`) VALUES
(1, 'Album số 1', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/18682751299-chot(1).jpg" style="width: 1024px; height: 768px;" /></p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_category`
--

CREATE TABLE IF NOT EXISTS `n_ta_category` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_contact_us`
--

CREATE TABLE IF NOT EXISTS `n_ta_contact_us` (
  `contact_id` int(12) NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `contact_phone` int(15) NOT NULL,
  `mesage_content` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `check` int(11) NOT NULL DEFAULT '0',
  `lecturers_category` int(12) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_courses`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses` (
  `courses_id` int(12) NOT NULL AUTO_INCREMENT,
  `courses_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `courses_category` int(123) NOT NULL,
  `courses_content` text COLLATE utf8_unicode_ci NOT NULL,
  `courses_date` date NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_ta_courses`
--

INSERT INTO `n_ta_courses` (`courses_id`, `courses_name`, `courses_category`, `courses_content`, `courses_date`, `alias`) VALUES
(1, 'tiếng anh cho trẻ em', 2, '10 điều ly kỳ về nền văn minh Maya\nVăn minh Maya không chỉ nổi bật bởi hệ thống chữ viết cổ phát triển hoàn thiện, mà còn có nền nghệ thuật, kiến trúc và hệ thống thiên văn, toán học đáng kinh ngạc. Dù các nhà khảo cổ học luôn cố gắng khám phá, nhưng đến nay vẫn còn nhiều bí ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nhân loại. ', '2012-12-11', ''),
(2, 'tiếng anh cấp 1', 4, '10 điều ly kỳ về nền văn minh Maya\nVăn minh Maya không chỉ nổi bật bởi hệ thống chữ viết cổ phát triển hoàn thiện, mà còn có nền nghệ thuật, kiến trúc và hệ thống thiên văn, toán học đáng kinh ngạc. Dù các nhà khảo cổ học luôn cố gắng khám phá, nhưng đến nay vẫn còn nhiều bí ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nhân loại. ', '2012-12-18', ''),
(3, 'khóa học tiếng anh cấp 3', 1, '<p>\n	10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.</p>\n<p>\n	&nbsp;</p>\n<table cellspacing="0" class="tablesorter" style="width: 986px; margin: -5px 0px 0px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, Verdana, sans-serif;">\n	<tbody>\n		<tr>\n			<td style="margin: 0px; padding: 15px 10px; border-bottom-color: rgb(204, 204, 204);">\n				<p>\n					10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.<br />\n					&nbsp;</p>\n				<p>\n					&nbsp;</p>\n				<table cellspacing="0" class="tablesorter" style="width: 986px; margin: -5px 0px 0px;">\n					<tbody>\n						<tr>\n							<td style="margin: 0px; padding: 15px 10px; border-bottom-color: rgb(204, 204, 204);">\n								10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.<br />\n								&nbsp;</td>\n						</tr>\n					</tbody>\n				</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n', '2012-12-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_courses_cate`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses_cate` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `cate_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_ta_courses_cate`
--

INSERT INTO `n_ta_courses_cate` (`id`, `cate_name`, `alias`) VALUES
(1, 'Tieng anh cho mam non 1', 'Tieng-anh-cho-mam-non-1'),
(2, 'Tieng anh doi song', 'tieng anh 2'),
(4, 'Tieng anh cho tieu hoc', 'tieng anh 3'),
(6, 'Tiếng anh cấp tốc', 'Tieng-anh-cap-toc');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_dichvu`
--

CREATE TABLE IF NOT EXISTS `n_ta_dichvu` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_ta_dichvu`
--

INSERT INTO `n_ta_dichvu` (`id`, `ten`) VALUES
(1, 'Tiếng anh cho mầm non'),
(2, 'Tiếng anh cho tiểu học'),
(3, 'Tiếng anh cho sinh viên');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_image`
--

CREATE TABLE IF NOT EXISTS `n_ta_image` (
  `image_id` int(12) NOT NULL AUTO_INCREMENT,
  `image_album` int(11) NOT NULL,
  `image_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image_file` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ta_image`
--

INSERT INTO `n_ta_image` (`image_id`, `image_album`, `image_name`, `image_file`) VALUES
(1, 1, 'dsfd', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-thu-vien_1-anh_17.png" style="width: 443px; height: 357px;" /></p>\n'),
(2, 1, 'Ảnh mẫu số 1', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/IMG_9539.jpg" style="width: 1024px; height: 768px;" /></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_info`
--

CREATE TABLE IF NOT EXISTS `n_ta_info` (
  `info_id` int(12) NOT NULL AUTO_INCREMENT,
  `info_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `info_content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ta_info`
--

INSERT INTO `n_ta_info` (`info_id`, `info_name`, `info_content`) VALUES
(3, 'wwwww', 'http://movil.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_lecturers`
--

CREATE TABLE IF NOT EXISTS `n_ta_lecturers` (
  `lecturers_id` int(12) NOT NULL AUTO_INCREMENT,
  `lecturers_category` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_content` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `lecturers_image` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_phone` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lecturers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_lecturers`
--

INSERT INTO `n_ta_lecturers` (`lecturers_id`, `lecturers_category`, `lecturers_content`, `alias`, `lecturers_title`, `create_date`, `lecturers_image`, `lecturers_phone`) VALUES
(1, 'Thầy giáo', '<p>\n	<em>Chủ tịch HĐQT Học viện doanh nh&acirc;n TED / Chuy&ecirc;n gia Internet Marketing tại Việt Nam / Global Manager tập đo&agrave;n quốc tế SkyQuestCom / ...</em></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;Chuy&ecirc;n gia Internet Marketing của học viện doanh nh&acirc;n TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chủ tịch HĐQT Học viện doanh nh&acirc;n TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chuy&ecirc;n gia t</span><span style="font-family: arial, helvetica, sans-serif; font-size: small; ">ư vấn c&aacute;c giải ph&aacute;p email, mạng x&atilde; hội, diễn đ&agrave;n v&agrave; c&aacute;c c&ocirc;ng cụ marketing online &iacute;t tốn k&eacute;m nhất cho Doanh nghiệp.</span></p>\n', 'ong-Mai-Quý-Luc', 'Ông Mai Quý Lực', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/avatar_2.png" style="width: 132px; height: 99px;" /></p>\n', ''),
(2, 'Thầy giáo', '<p>\n	<em>Viện trưởng Học viện doanh nh&acirc;n GED / Giảng vi&ecirc;n Cao cấp của dự &aacute;n SIYB &ndash; ILO + VCCI, INWENT</em></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Giảng vi&ecirc;n cao cấp quốc tế ILO</span></p>\n<p>\n	<span style="font-size: small; font-family: arial, helvetica, sans-serif;">- Giảng vi&ecirc;n cao cấp học viện doanh nh&acirc;n TED</span></p>\n', 'GV.-Vu-Huu-Kien', 'GV. Vũ Hữu Kiên', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/thumb_php.jpg" style="width: 132px; height: 99px;" /></p>\n', ''),
(3, 'Thầy giáo', '<p>\n	<span style="font-size: small; font-family: arial, helvetica, sans-serif;">- Chuy&ecirc;n gia tư vấn thương hiệu<br />\n	-&nbsp;Trưởng bộ m&ocirc;n Quản trị thương hiệu &ndash; ĐH Thương Mại</span></p>\n<p>\n	<em>Giảng vi&ecirc;n cao cấp Học viện Doanh nh&acirc;n GED / Chuy&ecirc;n gia tư vấn x&acirc;y dựng thương hiệu v&agrave; quản trị k&ecirc;nh ph&acirc;n phối...</em></p>\n', 'PGS-TS.-Nguyen-Quoc-Thinh', 'PGS TS. Nguyễn Quốc Thịnh', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/thumb1.jpg" style="width: 132px; height: 99px;" /></p>\n', ''),
(4, 'Thầy giáo', '<p>\n	&nbsp;</p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chuy&ecirc;n gia Internet Marketing của học viện doanh nh&acirc;n TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chủ tịch HĐQT Học viện doanh nh&acirc;n TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chuy&ecirc;n gia t</span><span style="font-family: arial, helvetica, sans-serif; font-size: small; ">ư vấn c&aacute;c giải ph&aacute;p email, mạng x&atilde; hội, diễn đ&agrave;n v&agrave; c&aacute;c c&ocirc;ng cụ marketing online &iacute;t tốn k&eacute;m nhất cho Doanh nghiệp.</span></p>\n<p>\n	<em>Viện trưởng Viện kinh doanh H&agrave; Nội thuộc Hội Khoa học Kinh tế VN / Ph&oacute; Chủ nhiệm thường trực C&acirc;u lạc bộ Gi&aacute;m đốc Trung ương...</em></p>\n', 'Ts.-Pham-Van-Pho', 'Ts. Phạm Văn Phổ', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/thumb2.jpg" style="width: 132px; height: 99px;" /></p>\n', ''),
(5, 'Cô giáo', '<p>\n	&nbsp;</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	a) Chỉ đạo c&ocirc;ng t&aacute;c ph&aacute;t triển thị trường trong nước, c&ocirc;ng t&aacute;c lao động tiền lương, t&agrave;i ch&iacute;nh, gi&aacute; cả.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	b) Phụ tr&aacute;ch ng&agrave;nh c&ocirc;ng nghiệp nhẹ, c&ocirc;ng t&aacute;c văn ph&ograve;ng, quan hệ với c&aacute;c tổ chức t&agrave;i ch&iacute;nh quốc tế.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	c) Thay mặt Bộ chỉ đạo ng&agrave;nh C&ocirc;ng Thương Thủ đ&ocirc; H&agrave; Nội v&agrave; c&aacute;c tỉnh, th&agrave;nh phố, gồm: Hải Ph&ograve;ng, Bắc Ninh, Hải Dương, Vĩnh Ph&uacute;c, Hưng Y&ecirc;n, Th&aacute;i B&igrave;nh, Nam Định, H&agrave; Nam, Ninh B&igrave;nh.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	d) Phụ tr&aacute;ch quan hệ song phương v&agrave; ph&aacute;t triển thị trường, c&aacute;c vấn đề li&ecirc;n quan đến xử l&yacute; tranh chấp thương mại v&agrave; chống b&aacute;n ph&aacute; gi&aacute;, chống trợ cấp ở nước ngo&agrave;i đối với h&agrave;ng h&oacute;a Việt Nam tại c&aacute;c nước Ch&acirc;u &Acirc;u (trừ Li&ecirc;n bang Nga v&agrave; c&aacute;c nước SNG);</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	đ) Trực tiếp chỉ đạo c&aacute;c đơn vị: Vụ C&ocirc;ng nghiệp nhẹ, Vụ Thị trường trong nước, Văn ph&ograve;ng Bộ, Vụ T&agrave;i ch&iacute;nh. Thay mặt Bộ, chỉ đạo thực hiện quản l&yacute; nh&agrave; nước đối với Tập đo&agrave;n Dệt may Việt Nam, Tổng c&ocirc;ng ty Giấy Việt Nam, c&aacute;c doanh nghiệp ng&agrave;nh nhựa, da gi&agrave;y, s&agrave;nh sứ thủy tinh c&ocirc;ng nghiệp.</p>\n', 'Ho-Thi-Kim-Thoa', 'Hồ Thị Kim Thoa', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/thutruongthoa.JPG" style="width: 110px; height: 146px;" /></p>\n', ''),
(6, 'Trợ giảng', '<p>\n	&nbsp;</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	a) Chỉ đạo tổng hợp c&ocirc;ng t&aacute;c quản l&yacute; cạnh tranh, kiểm so&aacute;t độc quyền, chống b&aacute;n ph&aacute; gi&aacute;, chống trợ cấp v&agrave; tự vệ, bảo vệ quyền lợi người ti&ecirc;u d&ugrave;ng. Trưởng Đo&agrave;n đ&agrave;m ph&aacute;n Ch&iacute;nh phủ về hội nhập kinh tế thương mại quốc tế.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	b) Phụ tr&aacute;ch quan hệ song phương với Tổ chức Thương mại thế giới (WTO). Phụ tr&aacute;ch quan hệ song phương v&agrave; ph&aacute;t triển thị trường, c&aacute;c vấn đề li&ecirc;n quan đến xử l&yacute; tranh chấp thương mại v&agrave; chống b&aacute;n ph&aacute; gi&aacute;, chống trợ cấp ở nước ngo&agrave;i đối với h&agrave;ng h&oacute;a Việt Nam tại c&aacute;c nước SNG (trừ Li&ecirc;n Bang Nga, Belarus v&agrave; Kazakhstan).</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	c) Trực tiếp chỉ đạo c&aacute;c đơn vị: Vụ Thị trường Ch&acirc;u &Acirc;u, Vụ Ch&iacute;nh s&aacute;ch thương mại đa bi&ecirc;n, Cục Quản l&yacute; cạnh tranh, Ban Thư k&yacute; Hội đồng cạnh tranh, Đại diện của Bộ C&ocirc;ng Thương (Ph&ograve;ng WTO) tại Ph&aacute;i đo&agrave;n đại diện thường trực nước Cộng h&ograve;a X&atilde; hội chủ nghĩa Việt Nam b&ecirc;n cạnh Li&ecirc;n hợp quốc, Tổ chức Thương mại thế giới v&agrave; c&aacute;c Tổ chức quốc tế kh&aacute;c tại Giơ-ne-vơ.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	d) Thay mặt Bộ, chỉ đạo ng&agrave;nh C&ocirc;ng Thương c&aacute;c tỉnh: Thanh H&oacute;a, Nghệ An, H&agrave; Tĩnh, Quảng B&igrave;nh, Quảng Trị, Thừa Thi&ecirc;n - Huế, Đ&agrave; Nẵng, Quảng Nam, Quảng Ng&atilde;i, B&igrave;nh Định, Ph&uacute; Y&ecirc;n, Kh&aacute;nh H&ograve;a.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	đ) Chủ tịch Hội đồng cạnh tranh.</p>\n', 'Tran-Quoc-Khanh', 'Trần Quốc Khánh', '0000-00-00 00:00:00', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/TranQuocKhanh.gif" style="width: 90px; height: 122px;" /></p>\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_news`
--

CREATE TABLE IF NOT EXISTS `n_ta_news` (
  `news_id` int(12) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `news_post_date` date NOT NULL,
  `news_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `n_ta_news`
--

INSERT INTO `n_ta_news` (`news_id`, `news_title`, `news_content`, `news_author`, `news_post_date`, `news_image`, `alias`, `news_category`) VALUES
(2, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', '<p>\n	&nbsp;</p>\n<div>\n	<span style="COLOR: #ff0000"><strong>&Ocirc;ng Gavan Iacono - Tổng Gi&aacute;m đốc Language Link Việt Nam</strong></span></div>\n<div>\n	&nbsp;</div>\n<div>\n	<span style="COLOR: #000000">Thay mặt đo&agrave;n tư vấn v&agrave; to&agrave;n thể gi&aacute;o vi&ecirc;n, nh&acirc;n vi&ecirc;n&nbsp;Language Link Việt Nam, xin được gửi đến qu&yacute; độc giả b&aacute;o điện tử <em>D&acirc;n tr&iacute;</em> lời ch&agrave;o tr&acirc;n trọng nhất. Xin mời độc giả c&ugrave;ng theo d&otilde;i buổi tư vấn &ldquo;Chuẩn bị cho trẻ em 5 đến 7 tuổi học tiếng Anh thế n&agrave;o?&rdquo;. </span></div>\n<p>\n	&nbsp;</p>\n<p>\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK </span></strong></p>\n<div>\n	Ch&agrave;o bạn,</div>\n<div>\n	&nbsp;</div>\n<div>\n	L&uacute;c 5 tuổi&nbsp;l&agrave; giai đoạn thần kinh n&atilde;o bộ của trẻ ph&aacute;t triển với tốc độ rất nhanh, tạo thuận lợi cho việc k&iacute;ch hoạt nhiều loại tiềm năng sớm của trẻ, trong đ&oacute; c&oacute; tiềm năng ngoại ngữ. Nhiều chuy&ecirc;n gia quốc tế gọi đ&acirc;y l&agrave; &ldquo;thời kỳ v&agrave;ng&rdquo; quyết định đỉnh cao của sự ph&aacute;t triển ng&ocirc;n ngữ v&agrave; ngoại ngữ cho trẻ sau n&agrave;y. Nhiều học sinh đạt giải cao về tiếng Anh, như Ho&agrave;ng Hải Linh, &nbsp;Đỗ Nhật Nam,... đ&atilde; bắt đầu được k&iacute;ch hoạt năng khiếu tiếng Anh từ giai đoạn n&agrave;y.</div>\n<p>\n	Việc k&iacute;ch hoạt sớm tiếng Anh sẽ gi&uacute;p trẻ ph&aacute;t triển nhiều loại tr&iacute; th&ocirc;ng minh g&oacute;p phần dẫn đến sự th&agrave;nh đạt trong tương lai: trẻ sẽ tư duy t&iacute;ch cực hơn khi biết th&ecirc;m một c&aacute;ch diễn đạt mới kh&aacute;c với c&aacute;ch diễn đạt bằng tiếng mẹ đẻ, trẻ sẽ hiểu tiếng Việt r&otilde; hơn, ng&ocirc;n ngữ sẽ phong ph&uacute; hơn, tương t&aacute;c sẽ được mở rộng hơn, cảm x&uacute;c của trẻ sẽ c&acirc;n bằng hơn nhờ sự bổ sung lẫn nhau giữa hai c&aacute;ch giao tiếp bằng tiếng Việt v&agrave; tiếng Anh.</p>\n<p>\n	<strong><span style="COLOR: #ff0000">&Ocirc;ng Gavan Iacono - Tổng Gi&aacute;m đốc Language Link Việt Nam</span></strong></p>\n<p>\n	T&ocirc;i cung cấp th&ecirc;m một kết luận khoa học của c&aacute;c gi&aacute;o sư tại Đại học Washington (Mỹ) đ&atilde; chứng minh rằng, trẻ học ng&ocirc;n ngữ thứ hai sớm kh&ocirc;ng những c&oacute; khả năng ph&aacute;t &acirc;m chuẩn x&aacute;c m&agrave; c&ograve;n c&oacute; khả năng tập trung ch&uacute; &yacute; tốt hơn, ph&aacute;t triển khả năng quan s&aacute;t v&agrave; ph&acirc;n t&iacute;ch, từ đ&oacute; tư duy của trẻ cũng được ph&aacute;t triển.</p>\n<p>\n	Con người sinh ra với bản năng tự nhi&ecirc;n trong học ng&ocirc;n ngữ v&agrave; nhu cầu giao tiếp. Đầu ti&ecirc;n, ch&uacute;ng ta chỉ biết kh&oacute;c. Nhưng cho đến khi l&ecirc;n bốn, ch&uacute;ng ta c&oacute; thể giao tiếp với gia đ&igrave;nh v&agrave; bạn b&egrave;, một sự thay đổi đ&aacute;ng kinh ngạc từ việc kh&ocirc;ng biết một ng&ocirc;n ngữ n&agrave;o trở th&agrave;nh thuần thục một ng&ocirc;n ngữ khi 4 tuổi. V&agrave; bước tiến n&agrave;y được thấy ở tất cả ch&uacute;ng ta v&agrave; ở mỗi đứa trẻ ta vẫn thấy thường ng&agrave;y. Trẻ kh&aacute;m ph&aacute; ng&ocirc;n ngữ đ&oacute; qua việc tr&ograve; chuyện với người lớn v&agrave; mắc c&aacute;c lỗi sai trong ng&ocirc;n ngữ hay qua chơi đ&ugrave;a v&agrave; tr&ograve; chuyện với những bạn c&ugrave;ng tuổi.</p>\n<p>\n	V&agrave; điều kỳ diệu l&agrave; trẻ nhỏ vẫn đang vận dụng những chiến lược học ng&ocirc;n ngữ c&oacute; t&iacute;nh bẩm sinh của ri&ecirc;ng c&aacute;c em v&agrave;o việc tiếp nhận tiếng mẹ đẻ v&agrave; sẽ sớm nhận thấy rằng, c&aacute;c em cũng c&oacute; thể &aacute;p dụng những chiến lược n&agrave;y v&agrave;o việc học tiếng Anh. V&igrave; một l&yacute; do n&agrave;o đ&oacute;, tr&iacute; n&atilde;o con người bắt đầu thay đổi trước tuổi dậy th&igrave; v&agrave; tuổi trưởng th&agrave;nh, mất đi khả năng dễ d&agrave;ng tiếp thu một ng&ocirc;n ngữ. Cuối c&ugrave;ng, tr&iacute; n&atilde;o của đứa trẻ 8 tuổi sẽ trở th&agrave;nh tr&iacute; n&atilde;o của một người lớn kh&ocirc;ng c&oacute; khả năng tiếp thu ng&ocirc;n ngữ tự nhi&ecirc;n. Đ&oacute; cũng l&agrave; một trong những l&yacute; do m&agrave; phụ huynh cần cho trẻ học sớm từ 5 tuổi.</p>\n<div>\n	Nhưng t&ocirc;i cũng lưu &yacute; với c&aacute;c bậc phụ huynh l&agrave; ngay từ nhỏ, nếu trẻ được tiếp x&uacute;c nhiều với c&aacute;c gi&aacute;o vi&ecirc;n bản ngữ hoặc m&ocirc;i trường tiếng Anh chuẩn, ph&aacute;t &acirc;m của ch&aacute;u sẽ thực sự chuẩn x&aacute;c. Đ&acirc;y l&agrave; vấn đề rất quan trọng nếu như bố hoặc mẹ muốn con n&oacute;i như người bản xứ, v&igrave; sau n&agrave;y khi c&aacute;c ch&aacute;u lớn l&ecirc;n, tư duy ng&ocirc;n ngữ đ&atilde; được định h&igrave;nh rồi th&igrave; rất kh&oacute; để c&oacute; được accent chuẩn.</div>\n<div>\n	&nbsp;</div>\n<div>\n	<div align="center">\n		&nbsp;</div>\n	<div align="center">\n		&nbsp;</div>\n	<div align="center">\n		<div>\n			<div>\n				<img _fl="" align="middle" alt="Ông Gavan Iacono (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/mr-g-c7762.jpg" style="MARGIN: 5px" width="455" /></div>\n		</div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">&Ocirc;ng Gavan Iacono (<em>b&ecirc;n tr&aacute;i</em>) - Tổng gi&aacute;m đốc điều h&agrave;nh Language Link Việt Nam đang trả lời thắc mắc của độc giả <em>D&acirc;n tr&iacute;</em> trong buổi tư vấn.</span></div>\n</div>\n<p>\n	<em><span style="COLOR: #000080">C&oacute; cần cho b&eacute; học tiếng Anh trước khi v&agrave;o trường quốc tế hay kh&ocirc;ng? </span></em></p>\n<p>\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK</span></strong></p>\n<div>\n	Nếu đ&oacute; l&agrave; trường tiểu học quốc tế th&igrave; cần cho trẻ l&agrave;m quen h&agrave;ng năm trước đ&oacute; với tiếng Anh để tạo tiền đề cho trẻ c&oacute; khả năng giao tiếp bằng tiếng Anh trong trường học. Nếu đ&oacute; l&agrave; trường mầm non quốc tế c&oacute; dạy tiếng Anh th&igrave; cũng cần cho trẻ đến th&ecirc;m một Trung t&acirc;m giảng dạy tiếng Anh kh&aacute;c ngo&agrave;i hệ thống mầm non để k&iacute;ch hoạt tiềm năng tiếng Anh của trẻ với người bản xứ theo một phương ph&aacute;p kh&aacute;c bổ sung cho phương ph&aacute;p ở nh&agrave; trường. Những tiến bộ của trẻ ở Trung t&acirc;m tiếng Anh b&ecirc;n ngo&agrave;i sẽ l&agrave; thước đo chất lượng gi&aacute;o dục to&agrave;n diện của nh&agrave; trường, trong đ&oacute; c&oacute; kh&iacute;a cạnh gi&aacute;o dục sự tự tin, sự th&iacute;ch nghi của trẻ trước những m&ocirc;i trường kh&aacute;c, trước một nh&oacute;m bạn kh&aacute;c ngo&agrave;i m&ocirc;i trường học đường quen thuộc. Ngo&agrave;i ra đến Trung t&acirc;m, trẻ sẽ c&oacute; cơ hội được gặp th&ecirc;m c&aacute;c thầy gi&aacute;o, bổ sung cho gương mặt c&aacute;c c&ocirc; gi&aacute;o ở c&aacute;c trường mầm non v&agrave; tiểu học, gi&uacute;p c&aacute;c b&eacute; trai tr&aacute;nh xu hướng bị &ldquo;nữ t&iacute;nh ho&aacute;&rdquo; trong giai đoạn ph&aacute;t triển rất nhạy cảm n&agrave;y.</div>\n<div>\n	&nbsp;</div>\n<div>\n	<div align="center">\n		<div>\n			<div>\n				<img _fl="" align="middle" alt="Tiến sĩ Nguyễn Minh Đức (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/ts-Duc-c7762.jpg" width="455" /></div>\n		</div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Tiến sĩ Nguyễn Minh Đức (<em>b&ecirc;n phải</em>) - Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK đang tư vấn cho độc giả <em>D&acirc;n tr&iacute;</em></span>.</div>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/tieng_anh_tre_em3-df8ed.jpg" style="width: 332px; height: 500px;" /></p>\n', 'Tai-sao-can-phai-cho-tre-hoc-som-tu-5-tuoi?', 'Tiếng Anh mầm non'),
(3, 'Dạy tiếng Anh liên kết ở tiểu học: “Ép” theo kiểu tự nguyện', '<p>\n	&nbsp;</p>\n<h2 class="fon33 mt1">\n	&nbsp; Chương tr&igrave;nh đưa tiếng Anh v&agrave;o trường tiểu học đ&atilde; được triển khai từ năm 2008, đến nay đ&atilde; c&oacute; hơn 400 trường th&iacute; điểm v&agrave; triển khai. Tuy nhi&ecirc;n, qu&aacute; tr&igrave;nh triển khai đ&atilde; bộc lộ một số vấn đề bất cập, g&acirc;y nghi ngại cho phụ huynh học sinh khi quyết định cho HS theo học.</h2>\n<div class="fon34 mt3 mr2 fon43">\n	<p>\n		Petrotimes đ&atilde; c&oacute; cuộc trao đổi với &ocirc;ng Phạm Xu&acirc;n Tiến&nbsp;- Trưởng ph&ograve;ng Gi&aacute;o dục tiểu học (Sở GD-ĐT H&agrave; Nội) về vấn đề n&agrave;y.&nbsp;</p>\n	<p>\n		<em>PV:</em> <em>Thưa &ocirc;ng, qua khảo s&aacute;t, c&oacute; nhiều trường tiểu học tr&ecirc;n địa b&agrave;n H&agrave; Nội phối hợp với c&aacute;c c&ocirc;ng ty, trung t&acirc;m đưa tiếng Anh li&ecirc;n kết v&agrave;o giảng dạy. Điều n&agrave;y c&oacute; nằm ngo&agrave;i sự chỉ đạo của Sở GD-ĐT H&agrave; Nội hay kh&ocirc;ng?</em></p>\n	<p>\n		<strong>&Ocirc;ng Phạm Xu&acirc;n Tiến</strong>: T&ocirc;i khẳng định điều n&agrave;y kh&ocirc;ng nằm ngo&agrave;i sự chỉ đạo của Sở GD-ĐT v&agrave; Bộ GD-ĐT cũng đ&atilde; cho ph&eacute;p.</p>\n	<p>\n		<em>PV:</em> <em>Việc c&aacute;c trường được ph&eacute;p phối hợp với c&aacute;c c&ocirc;ng ty, trung t&acirc;m đưa chương tr&igrave;nh li&ecirc;n kết tiếng Anh, Sở GD-ĐT c&oacute; quy định g&igrave; kh&ocirc;ng? Quy tr&igrave;nh cấp ph&eacute;p cho c&aacute;c c&ocirc;ng ty, trung t&acirc;m v&agrave; c&aacute;c chương tr&igrave;nh được tiến h&agrave;nh ở những kh&acirc;u n&agrave;o, thưa &ocirc;ng?</em></p>\n	<p>\n		<strong>&Ocirc;ng Phạm Xu&acirc;n Tiến</strong>: Đối với chương tr&igrave;nh li&ecirc;n kết trong nh&agrave; trường, c&aacute;c c&ocirc;ng ty x&acirc;y dựng đề &aacute;n v&agrave; tr&igrave;nh b&agrave;y với l&atilde;nh đạo Sở, Ph&ograve;ng gi&aacute;o dục tiểu học v&agrave; c&aacute;c bộ phận chuy&ecirc;n m&ocirc;n. Sau đ&oacute;, Sở sẽ cho ph&eacute;p th&iacute; điểm ở 1 số trường. Trong qu&aacute; tr&igrave;nh th&iacute; điểm, tổ chức hội thảo với sự tham gia của l&atilde;nh đạo Sở, chuy&ecirc;n vi&ecirc;n ph&ograve;ng Tiểu học, chuy&ecirc;n vi&ecirc;n phụ tr&aacute;ch tiếng Anh; về ph&iacute;a cơ sở c&oacute; ph&ograve;ng GD-ĐT, hiệu trường, gi&aacute;o vi&ecirc;n tiếng Anh v&agrave; đặc biệt, PHHS cũng tham gia v&agrave;o buổi hội thảo n&agrave;y.</p>\n	<p>\n		Ch&uacute;ng t&ocirc;i c&oacute; dự giờ, kiểm tra tr&igrave;nh độ học sinh ngay trong qu&aacute; tr&igrave;nh th&iacute; điểm. Sau khi kết th&uacute;c th&iacute; điểm, ch&uacute;ng t&ocirc;i c&oacute; tổ chức hội thảo đ&aacute;nh gi&aacute; v&agrave; xin &yacute; kiến chỉ đạo của Bộ GD-ĐT đối với từng chương tr&igrave;nh để cho ph&eacute;p triển khai. C&aacute;c chương tr&igrave;nh n&agrave;y thường được th&iacute; điểm trong v&ograve;ng 1 năm.</p>\n	<div align="center">\n		<div>\n			<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt"><img _fl="" align="middle" alt="Ông Phạm Xuân Tiến - Trưởng phòng Giáo dục tiểu học (Sở GD-ĐT Hà Nội)." src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/ong-tien-5f3ac.jpg" style="MARGIN: 5px" width="360" /></span></div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">&Ocirc;ng Phạm Xu&acirc;n Tiến - Trưởng ph&ograve;ng Gi&aacute;o dục tiểu học (Sở GD-ĐT H&agrave; Nội).</span></div>\n	<p>\n		<em>PV:</em> <em>Thưa &ocirc;ng, hiện nay c&oacute; bao nhi&ecirc;u trung t&acirc;m, chương tr&igrave;nh được cấp ph&eacute;p để đưa v&agrave;o trường học? Sở GD-ĐT gi&aacute;m s&aacute;t hiệu quả thực thi đến đ&acirc;u?</em></p>\n	<p>\n		<strong>&Ocirc;ng Phạm Xu&acirc;n Tiến</strong>: Hiện nay, c&oacute; 6 chương tr&igrave;nh cũng như trung t&acirc;m đ&atilde; được cấp ph&eacute;p, gồm c&oacute; Phonics (VPBox), Language Link, Victoria, Dynet, Washington v&agrave; B&igrave;nh Minh. Đối với những chương tr&igrave;nh c&oacute; gi&aacute;o vi&ecirc;n người nước ngo&agrave;i giảng dạy, sẽ được Ph&ograve;ng Gi&aacute;o dục c&oacute; yếu tố nước ngo&agrave;i thẩm định về mặt ph&aacute;p l&yacute;.</p>\n	<p>\n		Sau khi Sở cấp ph&eacute;p, sẽ giao cho c&aacute;c ph&ograve;ng GD-ĐT, cho ph&eacute;p c&aacute;c đơn vị l&agrave;m việc với c&aacute;c nh&agrave; trường, đi đến thỏa thuận hợp t&aacute;c đưa chương tr&igrave;nh tiếng Anh n&agrave;y v&agrave;o dạy trong c&aacute;c nh&agrave; trường. Về ph&acirc;n cấp, c&aacute;c trường tiểu học trực thuộc c&aacute;c ph&ograve;ng GD-ĐT, do vậy, Sở gi&aacute;m s&aacute;t việc giảng dạy th&ocirc;ng qua b&aacute;o c&aacute;o từ c&aacute;c ph&ograve;ng GD-ĐT tổ chức những đợt kiểm tra đột xuất v&agrave; tổ chức tập huấn, hội thảo.</p>\n	<p>\n		Hiện chưa c&oacute; trường ĐH n&agrave;o c&oacute; chuy&ecirc;n ng&agrave;nh đ&agrave;o tạo ri&ecirc;ng cho gi&aacute;o vi&ecirc;n dạy tiếng Anh ở tiểu học, c&aacute;c gi&aacute;o vi&ecirc;n tiếng Anh hiện nay chưa được đ&agrave;o tạo chuy&ecirc;n s&acirc;u về t&acirc;m l&yacute; học sinh tiểu học. V&igrave; thế, Sở đ&atilde; tổ chức rất nhiều cuộc tập huấn cho đối tượng gi&aacute;o vi&ecirc;n n&agrave;y v&agrave; t&ocirc;i khẳng định đội ngũ gi&aacute;o vi&ecirc;n dạy tiếng Anh được tham gia nhiều đợt tập huấn nhất.</p>\n	<p>\n		Mỗi chương tr&igrave;nh c&oacute; &iacute;t nhất 2 đợt tập huấn cho gi&aacute;o vi&ecirc;n, k&eacute;o d&agrave;i trong khoảng 2 ng&agrave;y. C&ograve;n với chương tr&igrave;nh theo đề &aacute;n 2020 (Đề &aacute;n dạy v&agrave; học ngoại ngữ trong hệ thống gi&aacute;o dục quốc d&acirc;n giai đoạn 2008 - 2020 - PV) của Bộ GD-ĐT, mỗi đợt tập huấn k&eacute;o d&agrave;i khoảng 3 th&aacute;ng, trong đ&oacute; c&oacute; 2 th&aacute;ng học tập trung v&agrave; 1 th&aacute;ng đ&agrave;o tạo từ xa.</p>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\n', 'Day-tieng-Anh-lien-ket-o-tieu-hoc:-“ep”-theo-kieu-tu-nguyen', 'Tiếng Anh tiểu học'),
(4, 'Vì sao sinh viên ra trường không nói được tiếng Anh?', '<p>\n	&nbsp;</p>\n<div class="atc_desc">\n	<span id="_ctl0_rContent_lbDesc">Xu thế đ&agrave;o tạo tiếng Anh hiện nay l&agrave; &ldquo;giảng dạy tiếng Anh như một ng&ocirc;n ngữ quốc tế&rdquo;,&nbsp; trong đ&oacute; c&aacute;c biến thể kh&aacute;c nhau của tiếng Anh được giới thiệu trong chương tr&igrave;nh học. VN cũng kh&ocirc;ng nằm ngo&agrave;i xu thế n&agrave;y, nhất l&agrave; trong bối cảnh hội nhập như hiện nay.</span></div>\n<div class="atc_txt">\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody"><span style="font-weight: bold;">Kh&ocirc;ng sử dụng được</span></span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">T&igrave;nh h&igrave;nh giảng dạy tiếng Anh trong c&aacute;c trường ĐH kh&ocirc;ng chuy&ecirc;n ngữ ở VN c&oacute; thể g&oacute;i gọn ở một v&agrave;i điểm như sau:</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ nhất, thời lượng đ&agrave;o tạo tiếng Anh kh&ocirc;ng đủ để đ&agrave;o tạo 100% sinh vi&ecirc;n của trường khi ra trường c&oacute; tr&igrave;nh độ m&agrave; c&aacute;c nh&agrave; tuyển dụng y&ecirc;u cầu. Thực tế cho thấy cả giảng vi&ecirc;n v&agrave; sinh vi&ecirc;n ở c&aacute;c trường n&agrave;y đều kh&ocirc;ng c&oacute; đủ thời gian để đ&agrave;o tạo v&agrave; tiếp thu kiến thức một c&aacute;ch trọn vẹn.</span></p>\n	<div style="text-align: center;">\n		<div>\n			<div>\n				<p align="justify">\n					<span id="_ctl0_rContent_lbBody"><img align="" alt="" border="0" src="http://huc.edu.vn/userfiles/assets/huc.tiengAnh111.jpg" /></span></p>\n			</div>\n		</div>\n	</div>\n	<div style="text-align: center;">\n		<div style="color: rgb(105, 105, 105);">\n			<p align="justify">\n				<span id="_ctl0_rContent_lbBody"><span style="font-weight: bold;">Một lớp học tiếng Anh</span></span></p>\n		</div>\n	</div>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Số liệu khảo s&aacute;t tại 18 trường ĐH VN cho thấy điểm b&igrave;nh qu&acirc;n sinh vi&ecirc;n năm nhất dao động ở mức 220-245/990 điểm TOEIC, v&agrave; với mức điểm n&agrave;y sinh vi&ecirc;n cần khoảng 360 giờ đ&agrave;o tạo (480 tiết) để đạt được 450-500 điểm TOEIC - mức điểm m&agrave; rất nhiều doanh nghiệp đang coi l&agrave; mức tối thiểu để họ chấp nhận hồ sơ. Tuy nhi&ecirc;n, theo số liệu khảo s&aacute;t của Vụ Gi&aacute;o dục ĐH, thường c&aacute;c trường chỉ c&oacute; khoảng 225 tiết học tiếng Anh cho sinh vi&ecirc;n.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ hai, tr&igrave;nh độ của sinh vi&ecirc;n kh&ocirc;ng đồng đều v&agrave; c&oacute; sự kh&aacute;c biệt kh&aacute; lớn về năng lực tiếng Anh giữa họ. Thường trong một lớp học sẽ bao gồm c&aacute;c tr&igrave;nh độ từ sơ cấp (gồm những sinh vi&ecirc;n học tiếng Anh lần đầu) đến trung cấp (những sinh vi&ecirc;n đ&atilde; học hệ đ&agrave;o tạo tiếng Anh ch&iacute;n năm). Những lớp học đa tr&igrave;nh độ như vậy sẽ g&acirc;y nhiều kh&oacute; khăn cho giảng vi&ecirc;n, khiến họ kh&oacute; c&oacute; thể qu&aacute;n xuyến hết tất cả sinh vi&ecirc;n, từ đ&oacute; g&acirc;y trở ngại cho cả việc dạy v&agrave; học.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Theo số liệu đ&aacute;nh gi&aacute; 9.948 sinh vi&ecirc;n năm nhất của 13 trường ĐH cho thấy điểm b&igrave;nh qu&acirc;n l&agrave; 250 điểm TOEIC, tuy nhi&ecirc;n điểm số dao động từ 50-850 điểm. Như vậy sự ch&ecirc;nh lệch ở tr&igrave;nh độ đầu v&agrave;o của sinh vi&ecirc;n c&aacute;c trường rất lớn. C&oacute; những sinh vi&ecirc;n gần như kh&ocirc;ng biết tiếng Anh v&agrave; c&oacute; những bạn tr&igrave;nh độ đ&atilde; rất giỏi (cao cấp), ở tr&igrave;nh độ 850 điểm TOEIC - mức chuẩn m&agrave; nếu Bộ GD-ĐT d&ugrave;ng l&agrave;m chuẩn gi&aacute;o vi&ecirc;n giảng dạy tiếng Anh cũng đ&atilde; rất tốt v&agrave; kh&ocirc;ng dễ đạt được. Như vậy nếu bắt những sinh vi&ecirc;n n&agrave;y phải ngồi học tiếng Anh trong bốn năm ở trường l&agrave; rất l&atilde;ng ph&iacute; v&agrave; kh&ocirc;ng hợp l&yacute;. Trong khi đ&oacute; cần c&oacute; giải ph&aacute;p cho những sinh vi&ecirc;n c&oacute; tr&igrave;nh độ mới bắt đầu học.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ ba l&agrave; đ&agrave;o tạo tiếng Anh ở c&aacute;c khối kh&ocirc;ng chuy&ecirc;n thường c&oacute; xu hướng tập trung qu&aacute; nhiều v&agrave;o tiếng Anh chuy&ecirc;n ng&agrave;nh chứ kh&ocirc;ng phải l&agrave; r&egrave;n luyện kỹ năng tiếng Anh. Do đ&oacute;, cho d&ugrave; họ c&oacute; học c&aacute;c thuật ngữ hay c&aacute;c từ ngữ tiếng Anh chuy&ecirc;n ng&agrave;nh th&igrave; cũng kh&oacute; c&oacute; thể n&acirc;ng cao c&aacute;c kỹ năng nghe, n&oacute;i, đọc, viết tiếng Anh trong giao tiếp.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Rất nhiều trường tập trung nhiều v&agrave;o x&acirc;y dựng chương tr&igrave;nh v&agrave; thời gian đ&agrave;o tạo tiếng Anh chuy&ecirc;n ng&agrave;nh, trong khi đ&oacute; năng lực sử dụng tiếng Anh (English proficiency) của sinh vi&ecirc;n c&ograve;n rất hạn chế v&agrave; dẫn đến kết quả l&agrave; sinh vi&ecirc;n học nhưng kh&ocirc;ng sử dụng được.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Số lượng trường triển khai &aacute;p dụng c&aacute;c chuẩn đ&aacute;nh gi&aacute; quốc tế cho sinh vi&ecirc;n ra trường như TOEFL v&agrave; TOEIC c&ograve;n hạn chế. (Số liệu năm 2008: c&oacute; 14,4% số trường đ&atilde; &aacute;p dụng chuẩn TOEIC). Trong khi đ&oacute; rất nhiều doanh nghiệp v&agrave; tổ chức đặt chuẩn ngoại ngữ theo TOEIC hoặc TOEFL l&agrave;m ti&ecirc;u chuẩn tuyển dụng. Điều n&agrave;y dẫn đến t&igrave;nh trạng: c&oacute; kh&aacute; nhiều sinh vi&ecirc;n ra trường nộp hồ sơ xin việc khi được y&ecirc;u cầu c&oacute; chứng chỉ TOEIC mới đi thi để kịp c&oacute; điểm nộp hồ sơ. Do thời hạn nộp hồ sơ ngắn n&ecirc;n c&aacute;c sinh vi&ecirc;n n&agrave;y rất bị động trong việc chuẩn bị cho kỳ thi, về cả thời gian lẫn chuy&ecirc;n m&ocirc;n.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Cuối c&ugrave;ng, c&aacute;c sinh vi&ecirc;n khối kh&ocirc;ng chuy&ecirc;n ngữ học tiếng Anh nhưng khả năng sử dụng tiếng Anh trong c&aacute;c t&igrave;nh huống thực tế rất hạn chế v&agrave; c&oacute; thể n&oacute;i rằng phần lớn kh&ocirc;ng sử dụng được. Như vậy t&igrave;nh h&igrave;nh chung l&agrave; khả năng sử dụng được tiếng Anh trong m&ocirc;i trường l&agrave;m việc của sinh vi&ecirc;n sau khi tốt nghiệp ĐH l&agrave; rất hạn chế v&agrave; kh&ocirc;ng đ&aacute;p ứng được y&ecirc;u cầu của đại đa số c&aacute;c đơn vị sử dụng lao động.</span></p>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/images.jpg" style="width: 275px; height: 183px;" /></p>\n', 'Vi-sao-sinh-vien-ra-truong-khong-noi-duoc-tieng-Anh?', 'Tiếng Anh cho sinh viên'),
(5, 'Học tiếng anh giao tiếp qua các tình huống', '<p>\n	&nbsp;</p>\n<h4>\n	<strong>Học tiếng anh giao tiếp qua c&aacute;c t&igrave;nh huống l&agrave;m việc h&agrave;ng ng&agrave;y l&agrave; đặc trưng căn bản của chương tr&igrave;nh Tiếng Anh Cho Người Đi L&agrave;m với c&aacute;c buổi học hứng th&uacute;, v&agrave; khả năng ứng dụng cao cho c&ocirc;ng việc.</strong></h4>\n<p style="text-align: center;">\n	<img alt="aroma tieng anh cho nguoi di lam" class="aligncenter" height="420" src="http://aroma.vn/b/aroma-tieng-anh-cho-nguoi-di-lam.jpg" title="AROMA Tiếng Anh Cho Người Đi Làm" width="615" /></p>\n<p>\n	&lt;h2 left;\\&quot;=&quot;&quot;&gt;Người Đi L&agrave;m Học Tiếng Anh</p>\n<p>\n	<strong>Người Đi L&agrave;m học Tiếng Anh</strong> l&agrave; đối tượng Học vi&ecirc;n với nhiều điểm đặc th&ugrave;, do đ&oacute; cần c&oacute; một chương tr&igrave;nh ri&ecirc;ng, v&agrave; c&aacute;ch giảng dạy ph&ugrave; hợp</p>\n<p>\n	So với đối tượng Học sinh, Sinh vi&ecirc;n th&igrave; Học vi&ecirc;n l&agrave; Người Đi L&agrave;m c&oacute; nhu cầu rất ri&ecirc;ng:</p>\n<p>\n	- Nội dung học đặc th&ugrave; hướng tới v&agrave; phục vụ cho c&ocirc;ng việc h&agrave;ng ng&agrave;y.</p>\n<p>\n	- Độ tuổi v&agrave; tương ứng với n&oacute; l&agrave; t&acirc;m l&iacute;, đặc điểm ri&ecirc;ng trong c&aacute;ch học</p>\n<p>\n	- L&agrave; người c&oacute; kinh nghiệm v&agrave; vốn sống, n&ecirc;n c&aacute;ch thức dạy &ndash; học, giao tiếp trong lớp cũng kh&aacute;c.</p>\n<h2>\n	Tiếng Anh Giao Tiếp Cho Người Đi L&agrave;m</h2>\n<p style="text-align: justify;">\n	<span style="color: #ff9900;"><strong>aroma</strong></span> ph&aacute;t triển một chương tr&igrave;nh học <strong>Tiếng Anh giao tiếp d&agrave;nh ri&ecirc;ng cho Người Đi L&agrave;m</strong>, thiết kế ph&ugrave; hợp với đặc điểm v&agrave; nhu cầu Học vi&ecirc;n.</p>\n<p style="text-align: justify;">\n	<strong>- Nội dung học</strong>: giao tiếp Tiếng Anh th&ocirc;ng qua c&aacute;c t&igrave;nh huống l&agrave;m vi&ecirc;c điển h&igrave;nh h&agrave;ng ng&agrave;y. Bổ sung th&ecirc;m phần luyện ph&aacute;t &acirc;m chuẩn, luyện viết v&agrave; c&aacute;c hoạt động giao tiếp nhập vai thực tế.</p>\n<p style="text-align: justify;">\n	<strong>- Phương ph&aacute;p dạy-học</strong>: lấy Học vi&ecirc;n l&agrave; trung t&acirc;m, tạo động lực v&agrave; khuyến kh&iacute;ch học vi&ecirc;n r&egrave;n luyện phản xạ nghe n&oacute;i &ndash; giao tiếp v&agrave; sử dụng Tiếng Anh trong thực tế một c&aacute;ch tự nhi&ecirc;n.</p>\n<p style="text-align: justify;">\n	<strong>- Gi&aacute;o vi&ecirc;n</strong>: tr&igrave;nh độ cao, c&oacute; phương ph&aacute;p giảng dạy tốt v&agrave; tinh thần chia sẻ, nhiệt t&igrave;nh. Hơn nữa, Gi&aacute;o vi&ecirc;n cũng c&oacute; kinh nghiệm l&agrave;m việc thực tế trong m&ocirc;i trường chuy&ecirc;n nghiệp n&ecirc;n sẽ thấu hiểu nhu cầu v&agrave; chia sẻ với Học vi&ecirc;n dễ d&agrave;ng.</p>\n<p style="text-align: justify;">\n	- <strong>Học vi&ecirc;n</strong>: chỉ bao gồm người đi l&agrave;m, kh&ocirc;ng học lẫn với học sinh &ndash; sinh vi&ecirc;n, mang lại một m&ocirc;i trường học đồng nhất, cởi mở.</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide1(1).jpg" style="width: 1600px; height: 1081px;" /></p>\n', 'Hoc-tieng-anh-giao-tiep-qua-cac-tinh-huong', 'Tiếng Anh cho người đi làm'),
(6, 'Dạy tiếng Anh thiếu nhi: 6 nguyên tắc vàng', '<p>\n	&nbsp;</p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Đề &aacute;n &quot;Dạy v&agrave; học ngoại ngữ&quot; trong hệ thống gi&aacute;o dục quốc d&acirc;n giai đoạn 2008-2020 đ&atilde; được Thủ tướng Ch&iacute;nh phủ ph&ecirc; duyệt năm 2008. Đặc biệt, trong đề &aacute;n, dạy v&agrave; học tiếng Anh c&oacute; vị tr&iacute; v&ocirc; c&ugrave;ng quan trọng, nhất l&agrave; việc dạy v&agrave; học cho thiếu nhi. C&oacute; 6 nguy&ecirc;n tắc v&agrave;ng trong dạy tiếng Anh cho thiếu nhi để việc dạy v&agrave; học c&oacute; hiệu quả</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Chơi hơn dạy. Ch&iacute;nh x&aacute;c phải n&oacute;i đ&acirc;y l&agrave; phương ph&aacute;p &quot;Dạy m&agrave; kh&ocirc;ng dạy&quot;, trong đ&oacute;, gi&aacute;o vi&ecirc;n l&ecirc;n lớp kh&ocirc;ng theo một gi&aacute;o tr&igrave;nh nhất định n&agrave;o cả v&agrave; tư tưởng chủ đạo kh&ocirc;ng phải l&agrave; dạy m&agrave; l&agrave; tạo s&acirc;n chơi đa dạng, nhiều m&agrave;u sắc bằng tiếng Anh cho học sinh. Từ đ&oacute;, hướng dẫn học sinh tự l&agrave;m chủ s&acirc;n chơi v&agrave; từng bước tự bổ sung c&aacute;c hoạt động kh&aacute;c nhau.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Hoạt động, h&igrave;nh ảnh hơn l&yacute; thuyết. H&igrave;nh ảnh, tr&ograve; chơi, nhạc họa, diễn kịch... n&oacute;i chung l&agrave; c&aacute;c hoạt động nhằm gi&uacute;p học sinh tham gia v&agrave;o m&ocirc;i trường sử dụng tiếng Anh một c&aacute;ch tự nhi&ecirc;n, kh&ocirc;ng gượng &eacute;p.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">C&aacute;c hoạt động đa dạng sẽ gi&uacute;p học sinh từng bước h&igrave;nh th&agrave;nh phong c&aacute;ch ri&ecirc;ng trong học tập. Phong c&aacute;ch ri&ecirc;ng ch&iacute;nh l&agrave; nền tảng của chất lượng v&agrave; hiệu quả học tập.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Học cụ hơn gi&aacute;o tr&igrave;nh. Việc b&aacute;m theo một gi&aacute;o tr&igrave;nh n&agrave;o đ&oacute; sẽ hạn chế năng lực s&aacute;ng tạo của cả thầy lẫn tr&ograve;. Hơn nữa, để c&oacute; thể đa dạng h&oacute;a c&aacute;c hoạt động trong lớp, việc tăng cường học cụ l&agrave; điều cần thiết.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Cần ch&uacute; &yacute; những học cụ (kể cả b&agrave;i h&aacute;t, tr&ograve; chơi, diễn kịch...) b&igrave;nh thường dễ kiếm để l&agrave;m tăng hoạt động của học sinh, nhất l&agrave; cần khuyến kh&iacute;ch học sinh t&igrave;m kiếm th&ecirc;m c&aacute;c học cụ l&agrave;m phong ph&uacute; h&oacute;a qu&aacute; tr&igrave;nh học tập.</span></p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide1.jpg" style="width: 950px; height: 400px;" /></p>\n', 'Day-tieng-Anh-thieu-nhi:-6-nguyen-tac-vang', 'Tiếng Anh mầm non'),
(7, '“Ép” trẻ mầm non học tiếng Anh: “Núp bóng” tự nguyện', '<p>\n	&nbsp;</p>\n<div>\n	Hiện nay, kh&ocirc;ng chỉ tại&nbsp;c&aacute;c th&agrave;nh phố lớn như TPHCM, H&agrave; Nội m&agrave; ở c&aacute;c c&aacute;c tỉnh th&agrave;nh kh&aacute;c trong đ&oacute; c&oacute; Thanh H&oacute;a, một số&nbsp;trường mầm non&nbsp;đưa Tiếng Anh v&agrave;o dạy ở bậc Mầm non, nhưng mới chỉ l&agrave; th&iacute; điểm, dạy ngoại kh&oacute;a với h&igrave;nh thức tự nguyện. Đ&oacute; l&agrave; c&aacute;ch l&agrave;m tự ph&aacute;t, nhưng chỉ trong thời gian ngắn đ&atilde; xuất hiện nhiều dư luận tr&aacute;i chiều.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Theo phản &aacute;nh của một số phụ huynh c&oacute; con em đang theo học tại Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị x&atilde; Bỉm Sơn, Thanh H&oacute;a&nbsp;th&igrave; trường n&agrave;y đ&atilde; tự &yacute; đưa m&ocirc;n Tiếng Anh v&agrave;o chương tr&igrave;nh giảng dạy bắt buộc đối với lớp mẫu gi&aacute;o lớn 5 tuổi v&agrave; thu&ecirc; gi&aacute;o vi&ecirc;n ở ngo&agrave;i về dạy. Trong c&aacute;c khoản thu th&igrave; tiền học Tiếng Anh cũng được đưa v&agrave;o khoản thu bắt buộc. Học sinh (HS)&nbsp;n&agrave;o cũng phải học, mức đ&oacute;ng 30.000đ/th&aacute;ng/HS. Phụ huynh bức x&uacute;c nhưng kh&ocirc;ng ai d&aacute;m l&ecirc;n tiếng v&igrave; t&acirc;m l&yacute; &ldquo;muốn con hay chữ phải y&ecirc;u lấy thầy&rdquo;. Hơn nữa đ&acirc;y l&agrave; một trường tư thục n&ecirc;n việc cho con theo học tại đ&acirc;y đồng nghĩa với việc chấp nhận mọi thứ nh&agrave; trường đề ra.</div>\n<div>\n	<p>\n		C&ograve;n đối với trẻ mầm non học lớp 3 - 4 tuổi th&igrave; m&ocirc;n Tiếng Anh l&agrave; tự nguyện, phụ huynh n&agrave;o th&iacute;ch đăng k&yacute; cho con em m&igrave;nh theo học th&igrave; đăng k&yacute;. Ngo&agrave;i ra, c&aacute;c m&ocirc;n aerobic, nhạc, vẽ l&agrave; tự nguyện&hellip;</p>\n</div>\n<p>\n	&nbsp;</p>\n<div style="TEXT-ALIGN: center">\n	<img _fl="" align="middle" alt="Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị xã Bỉm Sơn, Thanh Hóa." src="http://dantri4.vcmedia.vn/OjRsnUq3VYRgf5mG4vC/Image/2012/09/DSCN4654-bf77d.JPG" style="MARGIN: 5px" width="450" /></div>\n<div style="TEXT-ALIGN: center">\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị x&atilde; Bỉm Sơn, Thanh H&oacute;a.</span></div>\n<p>\n	&nbsp;</p>\n<p>\n	Việc c&aacute;c ch&aacute;u mẫu gi&aacute;o c&ograve;n đang tập l&agrave;m quen đ&aacute;nh vần với bảng chữ c&aacute;i Tiếng Việt kh&aacute; vất vả, th&igrave; việc đưa chương tr&igrave;nh Tiếng Anh v&agrave;o trường mầm non liệu c&oacute; hợp l&yacute; v&agrave; mang lại hiệu quả hay kh&ocirc;ng khi m&agrave; thời gian biểu của c&aacute;c ch&aacute;u hầu như d&agrave;y đặc?</p>\n<p>\n	Một phụ huynh chia sẻ: &ldquo;C&aacute;c ch&aacute;u đang c&ograve;n tuổi ăn, tuổi chơi thế nhưng bắt con theo học nhiều thế n&agrave;y kh&ocirc;ng biết c&oacute; v&agrave;o đầu c&aacute;c ch&aacute;u được kh&ocirc;ng? T&ocirc;i nghĩ khi Tiếng Việt c&ograve;n chưa thạo th&igrave; l&agrave;m sao m&agrave; học được Tiếng Anh&rdquo;.</p>\n<p>\n	Tại Trường Mầm non tư thục Ngọc Trạo, c&aacute;c ch&aacute;u HS phải học cả tuần, buổi s&aacute;ng học c&aacute;c m&ocirc;n theo quy định, buổi chiều lại phải học Tiếng Anh. Nếu như năm học 2011 - 2012, c&aacute;c ch&aacute;u phải học m&ocirc;n Tiếng Anh chỉ c&oacute; 6 buổi/tuần th&igrave; năm nay đ&atilde; tăng l&ecirc;n 8 buổi/tuần. C&ugrave;ng với đ&oacute; l&agrave; mức tiền học ph&iacute; ri&ecirc;ng cho m&ocirc;n n&agrave;y cũng c&oacute; sự thay đổi từ 15.000đ/ch&aacute;u/th&aacute;ng l&ecirc;n 30.000đ/ch&aacute;u/th&aacute;ng.</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/images123.jpg" style="width: 275px; height: 184px;" /></p>\n', '“ep”-tre-mam-non-hoc-tieng-Anh:-“Nup-bong”-tu-nguyen', 'Tiếng Anh mầm non'),
(8, 'THÍ ĐIỂM DẠY TIẾNG ANH BẬC MẦM NON', '<p>\n	&nbsp;</p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Giảng dạy tự ph&aacute;t tiếng Anh ở bậc mầm non, nếu kh&ocirc;ng c&oacute; chương tr&igrave;nh v&agrave; giảng dạy một c&aacute;ch khoa học sẽ phản t&aacute;c dụng.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Lấy l&yacute; do xuất ph&aacute;t từ nhu cầu của phụ huynh, nhiều trường mầm non (MN) tại TPHCM đ&atilde; đưa m&ocirc;n tiếng Anh v&agrave;o giảng dạy dưới c&aacute;c h&igrave;nh thức ngoại kh&oacute;a v&agrave; học năng khiếu.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Tuy nhi&ecirc;n, với h&igrave;nh thức giảng dạy tự ph&aacute;t (do c&aacute;c trường tự hợp đồng với c&aacute;c trung t&acirc;m ngoại ngữ) c&ugrave;ng với gi&aacute;o tr&igrave;nh v&agrave; gi&aacute;o vi&ecirc;n (GV) chưa c&oacute; chuẩn mực cụ thể, nhiều phụ huynh kh&ocirc;ng biết việc học như vậy c&oacute; hiệu quả, nhất l&agrave; khi trẻ qu&aacute; nhỏ.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent"><strong>Th&iacute; điểm 2 th&aacute;ng rồi th&ocirc;i</strong><br />\n	Th&aacute;ng 10-2011, Sở GD-ĐT TPHCM đồng &yacute; cho C&ocirc;ng ty TNHH Dịch vụ gi&aacute;o dục Poly (H&agrave;n Quốc) đưa chương tr&igrave;nh tiếng Anh v&agrave;o giảng dạy th&iacute; điểm tại 4 trường MN, gồm: Trường MN TP, Trường MN B&eacute; Ngoan (quận 1), Trường MN Tuổi Thơ 7 (quận 3) v&agrave; Trường MN V&agrave;ng Anh (quận 5), trong đ&oacute; mỗi trường chọn ngẫu nhi&ecirc;n 30 đến 40 trẻ chia l&agrave;m 2 lớp gồm tiếng Anh lớp chồi v&agrave; tiếng Anh lớp l&aacute;.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Đại diện ph&iacute;a Poly cho biết sau 2 th&aacute;ng dạy th&iacute; điểm (cuối th&aacute;ng 12-2011), dựa tr&ecirc;n những đ&oacute;ng g&oacute;p từ ph&iacute;a GV v&agrave; hội đồng chuy&ecirc;n m&ocirc;n của c&aacute;c trường, họ sẽ đưa chương tr&igrave;nh về chỉnh sửa cho ph&ugrave; hợp v&agrave; nh&acirc;n rộng ra nhiều trường tại TPHCM. Tuy nhi&ecirc;n, thực tế ph&iacute;a Poly chỉ th&iacute; điểm 2 th&aacute;ng rồi th&ocirc;i khiến nhiều phụ huynh hoang mang.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Chị H.M, phụ huynh c&oacute; trẻ học tại một trường tổ chức dạy th&iacute; điểm, cho biết: &quot;Nghe giới thiệu về chương tr&igrave;nh, t&ocirc;i rất h&agrave;o hứng v&igrave; c&oacute; cơ hội để ch&aacute;u l&agrave;m quen với tiếng Anh nhưng băn khoăn kh&ocirc;ng biết chương tr&igrave;nh đ&atilde; được thẩm định chưa v&agrave; v&igrave; sao chỉ th&iacute; điểm 2 th&aacute;ng rồi th&ocirc;i lu&ocirc;n? L&agrave;m như vậy kh&ocirc;ng kh&aacute;c g&igrave; mang trẻ l&agrave;m th&iacute; nghiệm, thất bại rồi phủi tay. Hiện t&ocirc;i chẳng biết phải cho trẻ học tiếp theo chương tr&igrave;nh n&agrave;o. Nếu học chương tr&igrave;nh kh&aacute;c, liệu c&oacute; m&acirc;u thuẫn với chương tr&igrave;nh của Poly?&quot;.</span></p>\n<p style="text-align: center;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent"><img alt="" height="338" src="http://www.mamnon.com/ShowTopicSubImage.aspx?id=48519" width="450" /><br />\n	<em>Ở bậc mầm non, vui chơi l&agrave; hoạt động chủ đạo. Trong ảnh: Một lớp học tại Trường Mầm non Tuổi Thơ 7 (quận 3 - TPHCM). Ảnh: TẤN THẠNH</em></span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">B&agrave; Nguyễn Thị Kim Dung, Trưởng Ph&ograve;ng Gi&aacute;o dục MN, Sở GD-ĐT TPHCM, cho biết: &quot;Qua những buổi dự giờ, ch&uacute;ng t&ocirc;i thấy chương tr&igrave;nh của Poly l&agrave; được, thật ra họ t&ocirc;n trọng m&igrave;nh n&ecirc;n mới th&ocirc;ng qua sở, nếu họ kh&ocirc;ng th&ocirc;ng qua m&agrave; tự hợp đồng với trường th&igrave; ch&uacute;ng t&ocirc;i cũng đ&agrave;nh chịu v&igrave; đ&acirc;y kh&ocirc;ng phải l&agrave; chương tr&igrave;nh ch&iacute;nh quy. L&acirc;u nay, c&aacute;c chương tr&igrave;nh được &aacute;p dụng ở mỗi trường kh&aacute;c nhau n&ecirc;n sở kh&ocirc;ng kiểm so&aacute;t hết&quot;.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Từ trước, việc giảng dạy tiếng Anh tại c&aacute;c trường MN vẫn theo kiểu &quot;mạnh ai nấy l&agrave;m&quot;. B&agrave; Đặng Thị &Aacute;nh Mai, Hiệu trưởng Trường MN Măng Non 1 (quận 10), cho biết trường hợp đồng với CIC tổ chức dạy ngoại kh&oacute;a, chủ yếu l&agrave; để trẻ l&agrave;m quen với mặt chữ, c&aacute;ch ph&aacute;t &acirc;m v&agrave; c&aacute;c hoạt động vui chơi.</span></p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/ShowTopicSubImage_aspx.jpg" style="width: 450px; height: 338px;" /></p>\n', 'THi-dIeM-DaY-TIeNG-ANH-BaC-MaM-NON', 'Tiếng Anh mầm non'),
(9, 'Tiếng Anh mầm non: Tự phát là dao hai lưỡi', '<p>\n	&nbsp;</p>\n<p align="justify">\n	<b>C&oacute; nhu cầu th&igrave; mở lớp</b></p>\n<p align="justify">\n	C&ocirc; Hồ Thu Thảo, Hiệu ph&oacute; Trường Mầm non 19-5, cho biết: L&uacute;c đầu trường cũng được chọn để thử nghiệm chương tr&igrave;nh của Poly nhưng sau đ&oacute; kh&ocirc;ng tham gia v&igrave; điều kiện của trường chưa cho ph&eacute;p. Hiện tại, trường k&yacute; hợp đồng với một trung t&acirc;m ngoại ngữ để dạy tiếng Anh cho c&aacute;c ch&aacute;u lớp l&aacute; (năm tuổi). Tương tự, tại Trường Mầm non TP, c&ocirc; Lại Thị Nguy&ecirc;n Nhung cho biết ngo&agrave;i c&aacute;c lớp thử nghiệm với Poly, trường cũng k&yacute; hợp đồng với Trung t&acirc;m Anh ngữ d&agrave;nh cho trẻ em CEC với mức học ph&iacute; 60.000 đồng/th&aacute;ng, tuần học hai buổi. Đ&acirc;y l&agrave; những chương tr&igrave;nh phục vụ nhu cầu cho phụ huynh mong muốn con m&igrave;nh sớm tiếp cận tiếng Anh. Nội dung học cũng chỉ l&agrave; ph&aacute;t &acirc;m, đọc những vật dụng gia đ&igrave;nh, c&aacute;c bộ phận tr&ecirc;n cơ thể v&agrave; h&aacute;t bằng tiếng Anh.</p>\n<p align="justify">\n	C&ograve;n tại Trường Mầm non Sơn Ca 12 (quận Ph&uacute; Nhuận), c&ocirc; Nguyễn Thị Anh Hồng, Hiệu trưởng nh&agrave; trường, cho biết: Trường cũng c&oacute; k&yacute; hợp đồng với Trung t&acirc;m Anh ngữ T&acirc;n Văn (trụ sở ở quận G&ograve; Vấp) dạy tiếng Anh cho c&aacute;c b&eacute; năm tuổi, học ph&iacute; 40.000 đồng/th&aacute;ng học một tuần hai buổi. Gi&aacute;o tr&igrave;nh Tiny Talk k&egrave;m theo gi&aacute;o &aacute;n của trung t&acirc;m bi&ecirc;n soạn. &ldquo;Trường c&oacute; dạy tiếng Anh kiểu n&agrave;y l&acirc;u rồi. Nh&agrave; trường chỉ phục vụ theo nhu cầu của phụ huynh chứ n&oacute;i về t&iacute;nh hiệu quả của việc học tiếng Anh th&igrave; kh&ocirc;ng đ&aacute;nh gi&aacute; được&rdquo; - c&ocirc; Hồng n&oacute;i.</p>\n<p align="center">\n	<em><img _fl="" src="http://phapluattp.vcmedia.vn/Images/Uploaded/Share/2011/12/13/18682751299-chot.jpg" style="MARGIN: 5px" width="360" /></em></p>\n<p align="center">\n	<em>C&ocirc; Trương Tố Mai (phải) đang dạy trẻ lớp l&aacute; luyện ph&aacute;t &acirc;m tại Trường Mầm non B&eacute; Ngoan (quận 1, TP.HCM). Ảnh: Q.VIỆT</em></p>\n<p align="justify">\n	<b>Chương tr&igrave;nh tiếng Anh cho trẻ mầm non</b></p>\n<p align="justify">\n	Theo b&agrave; L&ecirc; Thị Li&ecirc;n Hoan, Ph&oacute; ph&ograve;ng Gi&aacute;o dục mầm non - Sở GD&amp;ĐT TP, <i>c&aacute;c trung t&acirc;m dạy ngoại ngữ &ldquo;x&acirc;m nhập&rdquo; v&agrave;o trường mầm non l&agrave; do nhu cầu của phụ huynh.</i> Tuy nhi&ecirc;n, họ kh&ocirc;ng c&oacute; nghi&ecirc;n cứu c&aacute;c chương tr&igrave;nh tiếng Anh cho trẻ mầm non của Việt Nam m&agrave; chỉ &aacute;p đặt từ c&aacute;c chương tr&igrave;nh nước ngo&agrave;i. &ldquo;Ph&ograve;ng mầm non kh&ocirc;ng đủ điều kiện l&agrave;m nhưng ch&uacute;ng t&ocirc;i kh&ocirc;ng bỏ lơ, cũng kiểm tra so s&aacute;nh nhiều chương tr&igrave;nh kh&aacute;c nhau của c&aacute;c trung t&acirc;m v&agrave; chưa ưng &yacute; chương tr&igrave;nh n&agrave;o hết. Ch&uacute;ng t&ocirc;i mong muốn c&oacute; một chương tr&igrave;nh tiếng Anh cho trẻ mầm non ph&ugrave; hợp, dạy c&aacute;c ch&aacute;u ph&aacute;t &acirc;m chuẩn c&agrave;ng sớm c&agrave;ng tốt. V&igrave; thế, trước mắt Sở GD&amp;ĐT TP thấy chương tr&igrave;nh của trung t&acirc;m ngoại ngữ n&agrave;o ph&ugrave; hợp th&igrave; cho &aacute;p dụng thử nghiệm. &ldquo;Sở dĩ ch&uacute;ng t&ocirc;i chọn Poly v&igrave; chương tr&igrave;nh tiếng Anh n&agrave;y ph&ugrave; hợp với đặc điểm t&acirc;m sinh l&yacute; trẻ ch&acirc;u &Aacute;, cụ thể l&agrave; H&agrave;n Quốc c&oacute; những n&eacute;t tương đồng với văn h&oacute;a Việt Nam&rdquo; - b&agrave; Li&ecirc;n Hoan n&oacute;i.&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/18682751299-chot.jpg" style="width: 360px; height: 250px;" /></p>\n', 'Tieng-Anh-mam-non:-Tu-phat-la-dao-hai-luoi', 'Tiếng Anh mầm non');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_user`
--

CREATE TABLE IF NOT EXISTS `n_ta_user` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_vedio`
--

CREATE TABLE IF NOT EXISTS `n_ta_vedio` (
  `vedio_id` int(12) NOT NULL AUTO_INCREMENT,
  `vedio_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `link_vedio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_ta_vedio`
--

INSERT INTO `n_ta_vedio` (`vedio_id`, `vedio_title`, `link_vedio`) VALUES
(1, 'facebook', 'facebook.com.vn'),
(3, 'tiếng anh tiểu học', 'PeGLQsYVL4U'),
(4, 'Tiếng Anh Cho Người Đi Làm', 'roDdhfiWQJM'),
(5, 'Học tiếng anh, phương pháp hay nhất', 'r0UUXFFamNU');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_vedio_fanpage`
--

CREATE TABLE IF NOT EXISTS `n_ta_vedio_fanpage` (
  `vedio_id` int(12) NOT NULL AUTO_INCREMENT,
  `video_child` text NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_ta_vedio_fanpage`
--

INSERT INTO `n_ta_vedio_fanpage` (`vedio_id`, `video_child`) VALUES
(1, 'http://www.youtube.com/watch?v=AHKn0fjoT7o');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_vedio_home`
--

CREATE TABLE IF NOT EXISTS `n_ta_vedio_home` (
  `vedio_id` int(12) NOT NULL AUTO_INCREMENT,
  `link_vedio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_vedio_home`
--

INSERT INTO `n_ta_vedio_home` (`vedio_id`, `link_vedio`) VALUES
(1, 'http://www.youtube.com/watch?v=SuNig_HF7Qw'),
(2, 'http://www.youtube.com/watch?v=AG30eF5A3Ww&playnext=1&list=PL9C4CE140692EBE04'),
(3, 'http://www.youtube.com/watch?v=0YoT4ZOh-tI'),
(5, 'http://www.youtube.com/watch?v=EgT_us6AsDg'),
(6, 'http://www.youtube.com/watch?v=X9qq5yfh_C4');

-- --------------------------------------------------------

--
-- Table structure for table `n_thongke`
--

CREATE TABLE IF NOT EXISTS `n_thongke` (
  `ngaythang` date NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_thongke`
--

INSERT INTO `n_thongke` (`ngaythang`, `soluong`) VALUES
('2012-10-12', 4),
('2012-10-13', 15),
('2012-10-19', 2),
('2012-10-20', 1),
('2012-10-27', 1),
('2012-10-29', 2),
('2012-10-30', 1),
('2012-11-02', 1),
('2012-11-07', 1),
('2012-11-09', 1),
('2012-11-10', 12),
('2012-11-11', 4),
('2012-11-12', 9),
('2012-11-14', 1),
('2012-11-15', 8),
('2012-11-16', 1),
('2012-11-17', 6),
('2012-11-18', 2),
('2012-11-19', 1),
('2012-11-20', 8),
('2012-11-21', 2),
('2012-11-23', 6),
('2012-11-24', 3),
('2012-11-26', 3),
('2012-11-27', 6),
('2012-11-28', 10),
('2012-11-29', 5),
('2012-11-30', 2),
('2012-12-01', 1),
('2012-12-04', 2),
('2012-12-21', 1),
('2012-12-22', 4),
('2012-12-24', 2),
('2012-12-24', 2),
('2012-12-25', 9),
('2012-12-26', 12),
('2012-12-27', 25),
('2012-12-28', 3);

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-12-28 11:05:56', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
