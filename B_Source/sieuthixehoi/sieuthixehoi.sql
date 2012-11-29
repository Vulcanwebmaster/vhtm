-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2012 at 10:44 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sieuthixehoi`
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
-- Table structure for table `n_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_lienhe`
--

INSERT INTO `n_lienhe` (`id`, `hoten`, `email`, `dienthoai`, `tieude`, `noidung`, `ngaythang`) VALUES
(4, 'trung', 'trungnt@gmail.com', '0123456789', 'tiêu đề liên hệ', 'trang này đẹp', '2012-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_about_us`
--

CREATE TABLE IF NOT EXISTS `n_oto_about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentv` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contente` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_oto_about_us`
--

INSERT INTO `n_oto_about_us` (`id`, `contentv`, `contente`) VALUES
(1, '<p>\r\n	tểtrterttrttttttttttttt</p>', '0'),
(2, 'Ô to giá rẻ', 'Đang khuyến mãi');

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_categories`
--

CREATE TABLE IF NOT EXISTS `n_oto_categories` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name_v` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_name_e` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent_id` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_oto_categories`
--

INSERT INTO `n_oto_categories` (`category_id`, `category_name_v`, `category_name_e`, `category_parent_id`, `alias`) VALUES
(1, 'hay hay', 'hay qua', 'cha co nhe1', 'sfsdfds'),
(2, 'hsfdfdf', 'sdfsdfdsf', '33', 'sfsdfd'),
(3, 'sdfsdf', 'dffffffffffffffffff', 'dddddddd', 'ddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_contacts`
--

CREATE TABLE IF NOT EXISTS `n_oto_contacts` (
  `contact_id` int(12) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(12) NOT NULL,
  `contact_subject` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_date_create` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_oto_contacts`
--

INSERT INTO `n_oto_contacts` (`contact_id`, `contact_name`, `contact_email`, `category_id`, `contact_subject`, `contact_message`, `contact_date_create`) VALUES
(3, 'tuyt', 'ha@gmail.com', 1, 'sdfsd', 'dsfsdfsd', '2012-11-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_list_contact`
--

CREATE TABLE IF NOT EXISTS `n_oto_list_contact` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `ordercode` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `rmacode` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
-- Table structure for table `n_tuvansanpham`
--

CREATE TABLE IF NOT EXISTS `n_tuvansanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_menu_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tuvansanpham`
--

INSERT INTO `n_tuvansanpham` (`id`, `sub_menu_title`, `title`, `content`) VALUES
(1, 'TƯ VẤN MUA XE', 'Hyundai Eon: Nếu bạn chỉ cần che nắng che mưa á a', '<p>\r\n	Hyundai Eon: Nếu bạn chỉ cần &quot;che nắng, che mưa&quot; Mục ti&ecirc;u l&agrave; kh&aacute;ch h&agrave;ng cần một chiếc xe nhỏ, thuận tiện để di chuyển trong phố với c&aacute;c chức năng đơn giản v&agrave; tiết kiệm nhi&ecirc;n liệu. Hyundai Eon l&agrave; chiếc xe như vậy? Ch&uacute;ng ta từng biết đến những mẫu xe nhỏ gọn được tạo ra với mục đ&iacute;ch tiện lợi để di chuyển trong nội th&agrave;nh v&agrave; ở Việt Nam c&oacute; kh&ocirc;ng &iacute;t những ứng cử vi&ecirc;n s&aacute;ng gi&aacute;, c&oacute; doanh số b&aacute;n h&agrave;ng cao như Chevrolet Spark (trước kia l&agrave; Daewoo Matiz), Kia với New Morning hay Huyndai c&oacute; i10 v&agrave; i20. Thế nhưng c&ograve;n một ph&acirc;n cấp xe nhỏ hơn m&agrave; vốn mới chỉ c&oacute; c&aacute;c h&atilde;ng xe đến từ Trung Quốc tấn c&ocirc;ng đến những người c&oacute; thu nhập thấp, c&oacute; cơ hội tiếp cận với &ocirc; t&ocirc; như Chery đang được li&ecirc;n doanh &ocirc; t&ocirc; H&ograve;a B&igrave;nh ph&acirc;n phối c&oacute; gi&aacute; b&aacute;n khoảng 200 triệu đồng, BYD F0 với kiểu d&aacute;ng kh&ocirc;ng kh&aacute;c g&igrave; Toyota Aygo c&oacute; mức gi&aacute; khoảng 250 triệu đồng.</p>\r\n'),
(5, 'Tư vấn mua xe', 'Với ngân sách chưa tới 400', '<p>\r\n	<span style="font-size: medium;"><span style="font-family: times new roman;"><strong>(VTC News) - Với ng&acirc;n s&aacute;ch chưa tới 400 triệu đồng v&agrave; mong muốn t&igrave;m một chiếc xe tiết kiệm nhi&ecirc;n liệu, người ti&ecirc;u d&ugrave;ng Việt sẽ chọn g&igrave; trong bộ ba xe nhỏ đến từ H&agrave;n Quốc Kia Morning, Chevrolet Spark v&agrave; mẫu xe sắp ra mắt Hyundai Eon.</strong></span></span></p>\r\n');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-11-29 01:09:08', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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

-- --------------------------------------------------------

--
-- Table structure for table `n_xh_category`
--

CREATE TABLE IF NOT EXISTS `n_xh_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `n_xh_category`
--

INSERT INTO `n_xh_category` (`id`, `namev`, `alias`, `parent_id`) VALUES
(37, 'Chevrolet', 'Chevrolet', 0),
(42, 'Lexus', 'Lexus', 0),
(43, 'Lexus OT5-B2', 'Lexus-OT5-B2', 42);

-- --------------------------------------------------------

--
-- Table structure for table `n_xh_product`
--

CREATE TABLE IF NOT EXISTS `n_xh_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `n_xh_product`
--

INSERT INTO `n_xh_product` (`id`, `namev`, `alias`, `category_id`, `price`, `image`, `hangsx`, `mota`) VALUES
(13, 'CHEVROLET - SPARK LS 1.0 MT', 'CHEVROLET---SPARK-LS-1.0-MT', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/spark-lt-1-2-mt-2011-123456.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'CHEVROLET ', '<p>\r\n	<br />\r\n	<span style="font-family: Times New Roman;"><span style="font-size: medium;">Chevrolet Spark 2011 c&oacute; nhiều đường n&eacute;t mềm mại hơn d&ugrave; về cơ bản ngoại thất xe kh&ocirc;ng thay đổi nhiều. Phần đầu xe được l&agrave;m mới cho hợp vớ<span style="color: black;">i logo C</span>hevrolet.</span></span><span style="font-family: Times New Roman;"><span style="font-size: medium;"> Nội thất xe kh&aacute; ấn tượng với thiết kế hiện đại v&agrave; thể thao. Mẫu xe n&agrave;y d&agrave;i 3.640 mm v&agrave; c&oacute; chiều d&agrave;i cơ sở 2.375 mm. D&ugrave; l&agrave; một mẫu xe cỡ nhỏ nhưng cabin của Spark đủ sức chứa 5 h&agrave;nh kh&aacute;ch.</span></span></p>\r\n'),
(14, 'concept LF-Gh hybrid', 'concept-LF-Gh-hybrid', 43, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/lexus222.jpg" style="width: 550px; height: 367px;" /></p>\r\n', 'American', '<div style="margin: 0px; padding: 0px; outline-style: none">\r\n	Theo nguồn tin từ<span class="Apple-converted-space">&nbsp;</span><span style="margin: 0px; padding: 0px; outline-style: none; font-style: italic">Detroit News</span>, h&atilde;ng Lexus dự kiến sẽ mất thị phần trong năm 2011 do t&igrave;nh trạng thiếu linh phụ kiện sản xuất tại Nhật Bản như một phần hậu quả sau vụ động đất v&agrave; s&oacute;ng thần h&ocirc;m 11/3. &ldquo;Trong suốt 11 năm qua, ch&uacute;ng t&ocirc;i đ&atilde; khẳng định với mọi người vị tr&iacute; số 1 kh&ocirc;ng phải l&agrave; mục ti&ecirc;u m&agrave; ch&uacute;ng t&ocirc;i hướng tới&rdquo;, &ocirc;ng Mark Templin, tổng gi&aacute;m đốc nh&atilde;n hiệu Lexus, khẳng định với ph&oacute;ng vi&ecirc;n<span class="Apple-converted-space">&nbsp;</span><span style="margin: 0px; padding: 0px; outline-style: none; font-style: italic">Detroit News</span><span class="Apple-converted-space">&nbsp;</span>sau sự kiện ra mắt bản concept LF-Gh hybrid. &ldquo;Đ&oacute; kh&ocirc;ng phải l&agrave; kế hoạch m&agrave; ch&uacute;ng t&ocirc;i vạch ra. Ch&uacute;ng t&ocirc;i chỉ muốn tập trung v&agrave;o chất lượng sản phẩm m&agrave; th&ocirc;i&rdquo;.</div>\r\n'),
(16, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/lexus222.jpg" style="width: 550px; height: 367px;" /></p>\r\n', 'JAPAN', '<p>\r\n	hehehe</p>\r\n'),
(17, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/lexus222.jpg" style="width: 550px; height: 367px;" /></p>\r\n', 'JAPAN', '<p>\r\n	hehehe</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
