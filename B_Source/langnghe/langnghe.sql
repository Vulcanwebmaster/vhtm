-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2012 at 04:31 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `langnghe`
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
-- Table structure for table `n_dulich`
--

CREATE TABLE IF NOT EXISTS `n_dulich` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `nguon` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_dulich`
--

INSERT INTO `n_dulich` (`id`, `tieude`, `noidung`, `anh`, `nguon`) VALUES
(3, 'du lịch biển', '<p>\r\n	&aacute;dasdasds</p>\r\n', '<p>\r\n	sadsadsa</p>\r\n', 'sdsd'),
(4, 'ưeeeeeeeeeeeee', '<p>\r\n	ưeeeeeeeeeeeeeeee</p>\r\n', '<p>\r\n	222222222222</p>\r\n', '');

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
-- Table structure for table `n_gioithieu`
--

CREATE TABLE IF NOT EXISTS `n_gioithieu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `id_lienhe` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_gioithieu`
--

INSERT INTO `n_gioithieu` (`id`, `noidung`, `tieude`, `id_lienhe`) VALUES
(1, '<p>\r\n	<font color="#4f5155" face="normal Helvetica, Arial, sans-serif" size="2"><span style="line-height: 20px;">&acirc;dadada</span></font></p>', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_langnghe`
--

CREATE TABLE IF NOT EXISTS `n_langnghe` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ten_tinh` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_lienhe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_lienhe` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_lienhe`
--

INSERT INTO `n_lienhe` (`id`, `email`, `tieude`, `tel`, `diachi`, `website`, `fax`, `mobile`) VALUES
(5, 'thietke@travelco.vn', 'Thông tin liên hệ', '(84-4) 35735928', 'Quản lý website: 38b ngách 6/31/5 Đặng Văn Ngữ, Phương Liên, Đống Đa, Hà Nội', 'www.lang-nghe.com  ', '(84-4) 3573592', '098 4616793');

-- --------------------------------------------------------

--
-- Table structure for table `n_ln_ads`
--

CREATE TABLE IF NOT EXISTS `n_ln_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_banner` text NOT NULL,
  `ads_position` int(2) NOT NULL,
  `ads_name` varchar(100) NOT NULL DEFAULT '',
  `ads_link` varchar(200) NOT NULL DEFAULT '',
  `ads_start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ads_end_date` datetime NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ln_ads`
--

INSERT INTO `n_ln_ads` (`ads_id`, `ads_banner`, `ads_position`, `ads_name`, `ads_link`, `ads_start_date`, `ads_end_date`) VALUES
(1, '<p>\r\n	<img alt="" src="/langnghe/assets/langnghe/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', 0, '<p>	tuyêt</p>', '0', '2012-01-05 00:00:00', '2012-01-05 00:00:00'),
(2, '<p>\r\n	wwwwwwwwww</p>\r\n', 0, '<p>\r\n	wwwwwwwwwwwwww</p>', 'wwwwwwwwwww', '2012-12-05 00:00:00', '0000-00-00 00:00:00'),
(3, '<p>\r\n	aaaa</p>\r\n', 0, '<p>\r\n	aaaaaaaaaaaaa</p>', 'aaaaaaaaaaaaaaaaaaa', '2012-12-05 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `n_ln_category`
--

CREATE TABLE IF NOT EXISTS `n_ln_category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(1000) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `n_ln_category`
--

INSERT INTO `n_ln_category` (`category_id`, `category_name`, `alias`, `is_active`) VALUES
(6, 'em ga ha ha', 'em-ga-ha-ha', 0),
(12, 'Thi truong', 'Thi-truong', 0),
(17, 'Tuyet ga', 'Tuyet-ga', 1),
(18, 'chứng khoán', 'chung-khoan', 0),
(19, 'gaga', 'gaga', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_ln_news`
--

CREATE TABLE IF NOT EXISTS `n_ln_news` (
  `news_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `news_post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ln_news`
--

INSERT INTO `n_ln_news` (`news_id`, `news_title`, `alias`, `news_summary`, `news_content`, `news_author`, `news_post_date`) VALUES
(2, 'wwwwwww', 'tin tức mới nhất', '<p>\r\n	t&oacute;m tắt tin</p>\r\n', '<p>\r\n	tuyet tuyet</p>\r\n', 'tuyet', '2012-12-28 00:00:00'),
(3, 'tuyet', '', '<p>\r\n	tuyt summary</p>\r\n', '<p>\r\n	content</p>\r\n', 'tuyet', '2012-12-05 00:00:00'),
(4, 'aiti', '', '<p>\r\n	aiti</p>\r\n', '<p>\r\n	sddddd</p>\r\n', 'ssssss', '2012-06-05 00:00:00'),
(5, 'aaaaaaaaaaa', '', '<p>\r\n	ssssssssssss</p>\r\n', '<p>\r\n	ssssssssssss</p>\r\n', 'sssssssssssss', '2012-12-05 00:00:00'),
(6, 'aaaaaaaaaaa', '', '<p>\r\n	ssssssssssss</p>\r\n', '<p>\r\n	ssssssssssss</p>\r\n', 'sssssssssssss', '2012-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `n_ln_user`
--

CREATE TABLE IF NOT EXISTS `n_ln_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_fullname` varchar(100) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_address` varchar(200) NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `user_login_key` (`user_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ln_village`
--

CREATE TABLE IF NOT EXISTS `n_ln_village` (
  `village_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `village_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `village_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(5) NOT NULL,
  PRIMARY KEY (`village_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ln_village`
--

INSERT INTO `n_ln_village` (`village_id`, `village_name`, `alias`, `village_description`, `category_id`) VALUES
(1, 'làng gốm sứ1111', 'lang-gom-su1111', '<p>\r\n	l&agrave;ng gốm sứ nhiều loại rất đẹp v&agrave; đăc biệt</p>\r\n', 0),
(2, 'làng gốm sứ', 'lang-gom-su', '<p>\r\n	sđaaaaaaaaaaaaaaaaaa</p>\r\n', 0),
(3, 'làng gốm sứ hay hay', 'lang-gom-su-hay-hay', '<p>\r\n	sđaaaaaaaaaaaaaaaaaa</p>\r\n', 0);

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
-- Table structure for table `n_quangcao`
--

CREATE TABLE IF NOT EXISTS `n_quangcao` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  `anh` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_quangcao`
--

INSERT INTO `n_quangcao` (`id`, `tieude`, `noidung`, `ngaythang`, `anh`) VALUES
(1, 'Quảng cáo hoa', '<p>\r\n	hoa đẹp nh&agrave; minh ak</p>\r\n', '0000-00-00', '<p>\r\n	<img alt="" src="/langnghe/assets/langnghe/upload/images/_20-11.jpg" style="width: 581px; height: 330px;" /></p>\r\n'),
(2, 'quảng cáo người', '<p>\r\n	fđfdfdf</p>\r\n', '0000-00-00', '<p>\r\n	<img alt="" src="/langnghe/assets/langnghe/upload/images/Charice%20(1).jpg" style="width: 370px; height: 640px;" /></');

-- --------------------------------------------------------

--
-- Table structure for table `n_tintuc`
--

CREATE TABLE IF NOT EXISTS `n_tintuc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_tintuc`
--

INSERT INTO `n_tintuc` (`id`, `tieude`, `noidung`, `tacgia`, `anh`, `ngaythang`) VALUES
(2, 'lang nghe truyen thong', '<p>\r\n	sdsdsdf</p>\r\n', 'tuyết', '<p>\r\n	<img alt="" src="/langnghe/assets/langnghe/upload/images/_20-11.jpg" style="width: 581px; height: 330px;" /></p>\r\n', '2012-12-05'),
(4, 'gioi thieu', '<p>\r\n	dsfdsfdsfsd</p>\r\n', '0', '<p>\r\n	sdsd</p>\r\n', '0000-00-00'),
(5, '44444444', '<p>\r\n	444444444444</p>\r\n', '0', '0', '0000-00-00'),
(6, 'tin hàng ngày', '<p>\r\n	bản tin h&agrave;ng ng&agrave;y m&agrave;</p>\r\n', '0', '0', '0000-00-00');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-12-06 03:17:10', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
