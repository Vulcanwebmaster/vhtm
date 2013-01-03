-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2013 at 08:06 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_lienhe`
--

INSERT INTO `n_lienhe` (`id`, `hoten`, `email`, `dienthoai`, `tieude`, `noidung`, `ngaythang`) VALUES
(4, 'trung', 'trungnt@gmail.com', '0123456789', 'tiêu đề liên hệ', 'trang này đẹp', '2012-11-28'),
(5, 'Nguyễn Thành Trung', 'trungnth@gmail.com', '0123456789', 'Liên hệ liên hệ liên hệaaaaa', 'acs', '2012-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_about_us`
--

CREATE TABLE IF NOT EXISTS `n_oto_about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `contentv` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_oto_about_us`
--

INSERT INTO `n_oto_about_us` (`id`, `contentv`, `title`) VALUES
(1, '<p>\r\n	<strong>Hyundai Ngọc Kh&aacute;nh cung cấp c&aacute;c dịch vụ:</strong><br />\r\n	- Cung cấp c&aacute;c loại xe Hyundai du lịch nhập khẩu nguy&ecirc;n chiếc.<br />\r\n	- Bảo h&agrave;nh, bảo dưỡng c&aacute;c xe &ocirc; t&ocirc; du lịch hiệu Hyundai theo ti&ecirc;u chuẩn to&agrave;n cầu của H&atilde;ng Hyundai.<br />\r\n	- Cung cấp c&aacute;c dịch vụ sửa chữa, thay thế phụ t&ugrave;ng xe Hyundai.<br />\r\n	- Cung cấp phụ t&ugrave;ng ch&iacute;nh hiệu Hyundai.</p>', 'Showroom Bán Xe Hyundai Uy Tín  hehe');

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
(1, '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Spack-van-docopy.png" style="width: 992px; height: 345px;" /></p>', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Cruze_black.jpg" style="width: 992px; height: 325px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/newlacetti.jpg" style="width: 949px; height: 365px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/5sao/assets/upload/images/slide4.jpg" style="width: 578px; height: 280px;" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_tuvansanpham`
--

CREATE TABLE IF NOT EXISTS `n_tuvansanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `sub_menu_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_tuvansanpham`
--

INSERT INTO `n_tuvansanpham` (`id`, `parent_id`, `sub_menu_title`, `title`, `content`) VALUES
(1, 1, 'Tư vấn mua xe', 'Hyundai Eon: Nếu bạn chỉ cần "che nắng, che mưa"', '<div class="title_news_details">\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;">Hyundai Eon: Nếu bạn chỉ cần &quot;che nắng, che mưa&quot;</span></span></div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;">Mục ti&ecirc;u l&agrave; kh&aacute;ch h&agrave;ng cần một chiếc xe nhỏ, thuận tiện để di chuyển trong phố với c&aacute;c chức năng đơn giản v&agrave; tiết kiệm nhi&ecirc;n liệu. Hyundai Eon l&agrave; chiếc xe như vậy?</span></span></div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	&nbsp;</div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;">Ch&uacute;ng ta từng biết đến những mẫu xe nhỏ gọn được tạo ra với mục đ&iacute;ch tiện lợi để di chuyển trong nội th&agrave;nh v&agrave; ở Việt Nam c&oacute; kh&ocirc;ng &iacute;t những ứng cử vi&ecirc;n s&aacute;ng gi&aacute;, c&oacute; doanh số b&aacute;n h&agrave;ng cao như Chevrolet Spark (trước kia l&agrave; Daewoo Matiz), Kia với New Morning hay Huyndai c&oacute; i10 v&agrave; i20. Thế nhưng c&ograve;n một ph&acirc;n cấp xe nhỏ hơn m&agrave; vốn mới chỉ c&oacute; c&aacute;c h&atilde;ng xe đến từ Trung Quốc tấn c&ocirc;ng đến những người c&oacute; thu nhập thấp, c&oacute; cơ hội tiếp cận với &ocirc; t&ocirc; như Chery đang được li&ecirc;n doanh &ocirc; t&ocirc; H&ograve;a B&igrave;nh ph&acirc;n phối c&oacute; gi&aacute; b&aacute;n khoảng 200 triệu đồng, BYD F0 với kiểu d&aacute;ng kh&ocirc;ng kh&aacute;c g&igrave; Toyota Aygo c&oacute; mức gi&aacute; khoảng 250 triệu đồng.</span></span></div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	&nbsp;</div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;"><img border="0" src="http://autopro1.vcmedia.vn/kkBBtYAj9E3OhV9Ioct7jf6WGlF36/Image/2012/Hyundai-Eon/HyundaiEon-16_49eaf.jpg" /></span></span></div>\r\n<div style="font-size: 12pt; color: #333333; font-family: Times New Roman;">\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;">Kh&ocirc;ng để lọt ph&acirc;n kh&uacute;c n&agrave;y, Hyundai cũng đ&atilde; tạo ra một mẫu xe ho&agrave;n to&agrave;n mới d&agrave;nh ri&ecirc;ng cho thị trường Ch&acirc;u &Aacute; với điểm giới thiệu đầu ti&ecirc;n l&agrave; Ấn Độ với gi&aacute; bản khoảng 5.515-7.595 USD. Nhưng sau khi được ra mắt tại Việt Nam v&agrave; nộp đầy đủ c&aacute;c khoản thuế nhập khẩu th&igrave; Hyundai Th&agrave;nh C&ocirc;ng đ&atilde; quyết định gi&aacute; b&aacute;n cho mẫu xe đơn giản n&agrave;y ở mức... 345 triệu đồng!</span></span></div>\r\n'),
(5, 1, 'Tư vấn nội thất', 'Chevrolet Spark vừa đủ cho nhu cầu giao thông đô thị.', '<p>\r\n	<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;">Mẫu Spark mới của Chevrolet d&agrave;i 3.640 mm, rộng 1.597 mm v&agrave; cao 1.522 mm. Thiết kế đu&ocirc;i cong kiểu thể thao, xe mang ảnh hưởng của xu hướng thiết kế mới trong ph&acirc;n kh&uacute;c mini v&agrave; chiếc xe được đ&aacute;nh gi&aacute; cao tại thị trường nước ngo&agrave;i như thị trường ch&acirc;u &Acirc;u, Indonesia, H&agrave;n Quốc... </span></span></span></p>\r\n<div class="cms_table">\r\n	<table align="center" border="0" class="cms_table" width="1">\r\n		<tbody>\r\n			<tr class="cms_table_tr" valign="top">\r\n				<td class="cms_table_td">\r\n					<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;"><img border="0" src="http://image.tin247.com/vnexpress/120323002701-715-126.jpg" /></span></span></span></td>\r\n			</tr>\r\n			<tr class="cms_table_tr" valign="top">\r\n				<td class="cms_table_Image">\r\n					<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;">Mẫu xe nhỏ của GM d&agrave;nh cho đ&ocirc; thị.</span></span></span></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</div>\r\n<p>\r\n	<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;">Chevrolet Spark mới thay đổi ho&agrave;n to&agrave;n so với những thế hệ trước, hướng tới giới trẻ v&agrave; kh&aacute; ngầu. C&oacute; nhiều tranh c&atilde;i xung quanh vẻ ngo&agrave;i khi một số cho rằng xe qu&aacute; dữ dằn. Nhưng số kh&aacute;c lại cảm nhận thấy sự ph&aacute; c&aacute;ch. M&acirc;m 14 inch. Tay nắm cửa sau ẩn đem lại cho Spark h&igrave;nh ảnh của chiếc xe ba cửa. Bảng điều khiển v&agrave; tấm ốp cửa tạo được thiết kế liền mạch. Bảng đồng hồ trung t&acirc;m lấy cảm hứng từ đồng hồ m&ocirc;t&ocirc; ph&acirc;n khối lớn, kiểu duy nhất tr&ecirc;n d&ograve;ng xe nhỏ hiện nay.</span></span></span></p>\r\n<div class="cms_table">\r\n	<table align="center" border="0" class="cms_table" width="1">\r\n		<tbody>\r\n			<tr class="cms_table_tr" valign="top">\r\n				<td class="cms_table_td">\r\n					<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;"><img border="0" src="http://image.tin247.com/vnexpress/120323002701-634-239.jpg" /></span></span></span></td>\r\n			</tr>\r\n			<tr class="cms_table_tr" valign="top">\r\n				<td class="cms_table_Image">\r\n					<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;">Khoang l&aacute;i Spark 1.2 LT.</span></span></span></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</div>\r\n<p>\r\n	<span style="color: #000000;"><span style="font-family: times new roman;"><span style="font-size: medium;">Ngồi v&agrave;o Spark, h&agrave;ng ghế trước kh&aacute; thoải m&aacute;i. Độ c&aacute;ch &acirc;m tr&ecirc;n một chiếc xe nhỏ như Spark l&agrave; kh&aacute; tốt, tuy chưa thể so với c&aacute;c d&ograve;ng xe cao cấp. Nếu chỉ đi tr&ecirc;n phố, tốc độ chậm th&igrave; tiếng ồn lọt v&agrave;o ca-bin rất nhỏ. Tay l&aacute;i đầm, chắc. Điều h&ograve;a lạnh s&acirc;u v&agrave; nhanh, ph&ugrave; hợp với thời tiết miền nam.</span></span></span><br />\r\n	<span style="font-family: times new roman;"><span style="font-size: medium;"><span style="color: #000000;">Spark sử dụng động cơ mới được ph&aacute;t triển cho d&ograve;ng mini Chevrolet, động cơ S-TEC II 4 xi-lanh, DOHC 16 van với dung t&iacute;ch 1.2 l&iacute;t, c&ocirc;ng suất 81,6 m&atilde; lực tại v&ograve;ng tua m&aacute;y 6.400 v&ograve;ng/ph&uacute;t, m&ocirc;-men xoắn cực đại 108 Nm tại v&ograve;ng tua m&aacute;y 4.800 v&ograve;ng/ph&uacute;t. Hộp số s&agrave;n 5 cấp. Động cơ đủ cho vận h&agrave;nh trong đ&ocirc; thị v&agrave; đường trường. K&iacute;ch </span><a href="http://www.vatgia.com/3450/thuoc-kep.html" target="_blank"><span style="color: #000000;"><strong>thước</strong></span></a><span style="color: #000000;"> nhỏ gọn rất linh hoạt khi cần quay đầu, l&ugrave;i trong ng&otilde; nhỏ hay phố đ&ocirc;ng.</span></span></span></p>\r\n'),
(6, 1, 'Đăng ký đăng kiểm', 'Chevrolet Spark và Hyundai Eon: Xe nào "chất" hơn?', '<p>\r\n	<strong>Chevrolet Spark v&agrave; Hyundai Eon đều l&agrave; những sản phẩm c&oacute; mức gi&aacute; cạnh tranh v&agrave; sở hữu những phẩm chất đ&aacute;ng qu&yacute; của d&ograve;ng xe nhỏ như tiết kiệm, dễ di chuyển trong phố. Nhưng khi đặt b&ecirc;n b&agrave;n c&acirc;n, vẫn c&oacute; thể ph&acirc;n biệt r&otilde; r&agrave;ng đ&acirc;u l&agrave; sản phẩm &ldquo;chất&rdquo; hơn.</strong><br />\r\n	<br />\r\n	<strong>Thiết kế</strong><br />\r\n	<br />\r\n	Về kiểu d&aacute;ng, cả Spark v&agrave; Eon đều sử dụng nhiều đường n&eacute;t sắc cạnh nhằm mang lại n&eacute;t c&aacute; t&iacute;nh cho xe v&agrave; tho&aacute;t khỏi kiểu thiết kế bầu bĩnh đ&atilde; k&eacute;o d&agrave;i nhiều thập kỷ trong d&ograve;ng xe nhỏ. C&aacute;c kỹ sư chế tạo Spark c&ograve;n muốn tạo n&eacute;t lạ cho Spark bằng c&aacute;ch bố tr&iacute; tay nắm cửa sau l&ecirc;n cao, nhưng ch&iacute;nh điều đ&oacute; lại bất tiện cho trẻ em sử dụng.<br />\r\n	&nbsp;</p>\r\n<p align="center">\r\n	<img border="0" src="http://i1163.photobucket.com/albums/q551/AutodailyTeam/Spark%20vs%20Eon/2.jpg" /></p>\r\n<p align="center">\r\n	<img border="0" src="http://i1163.photobucket.com/albums/q551/AutodailyTeam/Spark%20vs%20Eon/A0D_7804.jpg" /></p>\r\n<p>\r\n	<br />\r\n	Chevrolet Spark c&oacute; k&iacute;ch thước tổng thể d&agrave;i x rộng x cao tương ứng l&agrave; 3.640 x 1.597 x 1.522 mm v&agrave; chiều d&agrave;i cơ sở l&agrave; 2.375. Hyundai Eon c&oacute; k&iacute;ch thước d&agrave;i x rộng x cao tương ứng 3.495 x 1.550 x 1.500 mm, chiều d&agrave;i cơ sở 2.380 mm. Do c&oacute; k&iacute;ch thước nhỏ n&ecirc;n cả 2 xe đều tiện d&ugrave;ng khi đi trong phố đ&ocirc;ng đ&uacute;c.<br />\r\n	<br />\r\n	La-zăng (m&acirc;m xe) của Spark l&agrave; loại 14 inchs nhưng c&oacute; thiết kế chưa đẹp, trong khi đ&oacute; Eon sử dụng v&agrave;nh thường v&agrave; d&ugrave;ng chụp ngo&agrave;i tr&ocirc;ng rẻ tiền.<br />\r\n	<br />\r\n	<em><strong>Chevrolet Spark &ndash; Hyundai Eon: 1-1</strong></em><br />\r\n	<br />\r\n	<strong>Nội thất, tiện nghi</strong><br />\r\n	<br />\r\n	B&ecirc;n trong nội thất, cả 2 xe c&oacute; phong c&aacute;ch thiết kế tương đồng, từ thiết kế bảng điều khiển trung t&acirc;m đến chất liệu nhựa sử dụng đều c&oacute; chất lượng tốt so với trị gi&aacute; của chiếc xe.</p>\r\n'),
(7, 2, 'Nội thất xe đẹp', 'Cách chọn Màu Xe Hợp Mệnh', '<div class="postrow" style="text-align: justify;">\r\n	<div class="content">\r\n		<div id="post_message_3466">\r\n			<blockquote class="postcontent restore ">\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Từ ng&agrave;y c&oacute; c&aacute;c loại xe gắn m&aacute;y v&agrave; xe hơi xuất hiện, sau thời gian d&agrave;i nghi&ecirc;n cứu, họ thấy rằng ngũ h&agrave;nh nạp &acirc;m c&oacute; ảnh hưởng rất quan trọng trong việc chọn m&agrave;u xe cho người mua (thường l&aacute;i chiếc xe đ&oacute;). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">N&ecirc;n mua xe c&oacute; m&agrave;u tương sinh hay c&ugrave;ng h&agrave;nh, kỵ mua xe m&agrave;u tương khắc với mạng của chủ nh&acirc;n. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- Mua chiếc xe c&oacute; m&agrave;u tương sinh với mạng người chủ th&igrave; chiếc xe đ&oacute; thường đem lại lợi lộc, khi l&aacute;i xe sẽ thoải m&aacute;i trong l&ograve;ng, &iacute;t khi bị hư hỏng bất ngờ v&agrave; nếu rủi ro c&oacute; bị tai nạn th&igrave; thường bị nhẹ hơn m&agrave;u tương khắc. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- Mua chiếc xe c&oacute; m&agrave;u c&ugrave;ng h&agrave;nh với người chủ cũng tốt, n&oacute; &iacute;t khi g&acirc;y phiền phức nhưng cũng kh&ocirc;ng được lợi bằng m&agrave;u sinh nhập (c&ugrave;ng h&agrave;nh l&agrave; c&ugrave;ng m&agrave;u theo ngũ h&agrave;nh). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- Mua xe c&oacute; m&agrave;u tương khắc với mạng người chủ, thường l&agrave;m cho sức khỏe người chủ trở n&ecirc;n suy yếu, trong l&ograve;ng bực bội khi ngồi v&agrave;o tay l&aacute;i, bị buộc phải l&aacute;i đi l&agrave;m những việc m&agrave; trong l&ograve;ng kh&ocirc;ng muốn. Xe bị trục trặc thường xuy&ecirc;n, hao tốn tiền bạc để sửa chữa, bị cọ quẹt hay bị ph&aacute; ph&aacute;ch một c&aacute;ch v&ocirc; cớ, khi xảy ra tai nạn th&igrave; bị thương tật v&agrave; chiếc xe bị hư hại nặng nề c&oacute; khi phải vứt bỏ (right off). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong><span style="color: red;">Ngũ h&agrave;nh tương sinh </span></strong></span></span><br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>Mộc sinh Hỏa, Hỏa sinh Thổ, Thổ sinh Kim, Kim sinh Thủy, Thủysinh Mộc. </strong></em><br />\r\n				<br />\r\n				Tương sinh kh&ocirc;ng c&oacute; nghĩa l&agrave; h&agrave;nh n&agrave;y sinh ra h&agrave;nh kh&aacute;c, m&agrave; l&agrave; dưỡng nu&ocirc;i, trợ gi&uacute;p, l&agrave;m cho h&agrave;nh kia c&oacute; lợi. Th&iacute; dụ như: Thủy sinh Mộc, nước sẽ l&agrave;m cho c&acirc;y tươi tốt. Mộc sinh Hỏa, c&acirc;y kh&ocirc; dễ ch&aacute;y tạo n&ecirc;n lửa... </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>Sự tương sinh của ngũ h&agrave;nh c&oacute; hai trường hợp: </strong></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">*<strong> Sinh nhập</strong>: H&agrave;nh kh&aacute;c l&agrave;m lợi cho h&agrave;nh m&igrave;nh. M&igrave;nh được lợi. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">* <strong>Sinh xuất</strong>: H&agrave;nh m&igrave;nh l&agrave;m lợi cho h&agrave;nh kh&aacute;c. M&igrave;nh bị hại. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong><span style="color: green;">Mộc sinh Hỏa</span></strong></em>: Hỏa được sinh nhập (được lợi), Mộc bị sinh xuất (bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><span style="color: green;"><strong>Hỏa sinh Thổ</strong></span></em>: Thổ được sinh nhập (được lợi), Hỏa bị sinh xuất (bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: green;"><em><strong>Thổ sinh Kim</strong></em></span>: Kim được sinh nhập (được lợi), Thổ bị sinh xuất (bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong><span style="color: green;">Kim sinh Thủy</span></strong></em>: Thủy được sinh nhập (được lợi), Kim bị sinh xuất (bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: green;"><em><strong>Thủy sinh Mộc</strong></em></span>: Mộc được sinh nhập (được lợi), Thủy bị sinh xuất (bị hại). </span></span><br />\r\n				<br />\r\n				<br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: red;"><strong>Ngũ h&agrave;nh tương khắc </strong></span></span></span><br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>Mộc khắc Thổ, Thổ khắc Thủy, Thủy khắc Hỏa, Hỏa khắc Kim, Kim khắc Mộc. </strong></em><br />\r\n				<br />\r\n				Tương khắc c&oacute; nghĩa l&agrave; h&agrave;nh n&agrave;y l&agrave;m hao m&ograve;n, diệt dần hay khống chế h&agrave;nh kh&aacute;c. Th&iacute; dụ như: Mộc khắc Thổ, rễ c&acirc;y sẽ ăn hết ph&acirc;n của đất. Thổ khắc Thủy, đất sẽ ngăn chận l&agrave;m cho nước kh&ocirc;ng thể chảy qua được... </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>Sự tương khắc của ngũ h&agrave;nh cũng c&oacute; hai trường hợp: </strong></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">* <strong>Khắc nhập</strong>: H&agrave;nh kh&aacute;c g&acirc;y tổn hại hoặc kềm chế h&agrave;nh m&igrave;nh. M&igrave;nh bị hại. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">* <strong>Khắc xuất</strong>: H&agrave;nh m&igrave;nh kềm chế hay g&acirc;y tổn hại cho h&agrave;nh kh&aacute;c. M&igrave;nh kh&ocirc;ng bị hại. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: seagreen;"><em><strong>Mộc khắc Thổ</strong></em></span>: Thổ bị khắc nhập (bị hại), Mộc khắc xuất (kh&ocirc;ng bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: seagreen;"><strong><em>Thổ khắc Thủy</em></strong></span>: Thủy bị khắc nhập (bị hại), Thổ khắc xuất (kh&ocirc;ng bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: seagreen;"><em><strong>Thủy khắc Hỏa</strong></em></span>: Hỏa bị khắc nhập (bị hại), Thủy khắc xuất (kh&ocirc;ng bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: seagreen;"><em><strong>Hỏa khắc Kim</strong></em></span>: Kim bị khắc nhập (bị hại), Hỏa khắc xuất (kh&ocirc;ng bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: seagreen;"><em><strong>Kim khắc Mộ</strong></em></span>c: Mộc bị khắc nhập (bị hại), Kim khắc xuất (kh&ocirc;ng bị hại). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>T&oacute;m lại:</strong><em> Chỉ cần nhớ sinh nhập v&agrave; khắc xuất th&igrave; m&igrave;nh được lợi thế (chủ động), ngược lại sinh xuất v&agrave; khắc nhập th&igrave; m&igrave;nh bị hại (bị động). </em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>M&agrave;u sắc theo ngũ h&agrave;nh </strong></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- <em><strong>Mộc</strong></em>: M&agrave;u xanh l&aacute; c&acirc;y lợt hoặc đậm (green). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- <em><strong>Hỏa: </strong></em>M&agrave;u đỏ hay m&agrave;u huyết dụ (burgundy). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- <em><strong>Thổ:</strong></em> M&agrave;u v&agrave;ng lợt hay đậm hoặc m&agrave;u v&agrave;ng nhủ (gold). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- <em><strong>Kim:</strong></em> M&agrave;u trắng hay x&aacute;m lợt (gray hoặc silver). </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">- <em><strong>Thủy:</strong></em> M&agrave;u đen hay xanh da trời lợt hoặc đậm (blue). </span></span><br />\r\n				<br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><strong>Mạng theo ngũ h&agrave;nh nạp &acirc;m </strong></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Xin xem lại b&agrave;i viết về Ngũ h&agrave;nh Nạp &acirc;m. Nếu kh&ocirc;ng c&oacute; lưu giữ b&agrave;i n&agrave;y, xin xem bảng liệt k&ecirc; (ngắn gọn) dưới đ&acirc;y để biết m&igrave;nh thuộc mạng g&igrave; theo ngũ h&agrave;nh nạp &acirc;m: </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>* Mạng Kim, gồm c&oacute; c&aacute;c tuổi: </strong></em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Nh&acirc;m Th&acirc;n 1932 &amp; Qu&yacute; Dậu 1933; Canh Th&igrave;n 1940 &amp; T&acirc;n Tỵ 1941; Gi&aacute;p Ngọ 1954 &amp; Ất M&ugrave;i 1955; Nh&acirc;m Dần 1962 &amp; Qu&yacute; M&atilde;o 1963; Canh Tuất 1970 &amp; T&acirc;n Hợi 1971; Gi&aacute;p T&yacute; 1984 &amp; Ất Sửu 1985. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>* Mạng Hỏa gồm c&oacute; c&aacute;c tuổi: </strong></em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Gi&aacute;p Tuất 1934 &amp; Ất Hợi 1935; Mậu T&yacute;1948 &amp; Kỷ Sửu 1949; B&iacute;nh Th&acirc;n 1956 &amp; Đinh Dậu 1957; Gi&aacute;p Th&igrave;n 1964 &amp; Ất Tỵ 1965; Mậu Ngọ 1978 &amp; Kỷ M&ugrave;i 1979; B&iacute;nh Dần 1986 &amp; Đinh M&atilde;o 1987. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>* Mạng Thủy gồm c&oacute; c&aacute;c tuổi: </strong></em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">B&iacute;nh T&yacute; 1936 &amp; Đinh Sửu 1937; Gi&aacute;p Th&acirc;n 1944 &amp; Ất Dậu 1945; Nh&acirc;m Th&igrave;n 1952 &amp; Qu&yacute; Tỵ 1953; B&iacute;nh Ngọ 1966 &amp; Đinh M&ugrave;i 1967; Gi&aacute;p Dần 1974 &amp; Ất M&atilde;o 1975; Nh&acirc;m Tuất 1982 &amp; Qu&yacute; Hợi 1983. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>* Mạng Thổ gồm c&oacute; c&aacute;c tuổi: </strong></em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Mậu Dần 1938 &amp; Kỷ M&atilde;o 1939; B&iacute;nh Tuất 1946 &amp; Đinh Hợi 1947; Canh T&yacute; 1960 &amp; T&acirc;n Sửu 1961; Mậu Th&acirc;n 1968 &amp; Kỷ Dậu 1969; B&iacute;nh Th&igrave;n 1976 &amp; Đinh Tỵ 1977; Canh Ngọ 1990 &amp; T&acirc;n M&ugrave;i 1991. </span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><em><strong>* Mạng Mộc gồm c&oacute; c&aacute;c tuổi: </strong></em></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Nh&acirc;m Ngọ 1942 &amp; Qu&yacute; M&ugrave;i 1943; Canh Dần 1950 &amp; T&acirc;n M&atilde;o 1951; Mậu Tuất 1958 &amp; Kỷ Hợi 1959; Nh&acirc;m T&yacute;1972 &amp; Qu&yacute; Sửu 1973; Canh Th&acirc;n 1980 &amp; T&acirc;n Dậu 1981; Mậu Th&igrave;n 1988 &amp; Kỷ Tỵ 1989. </span></span><br />\r\n				<br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: blue;"><strong>C&aacute;ch chọn </strong></span></span></span><br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;">Nh&igrave;n v&agrave;o bảng liệt k&ecirc; c&aacute;c mạng, biết tuổi m&igrave;nh thuộc mạng g&igrave;, so với m&agrave;u của ngũ h&agrave;nh để lấy m&agrave;u sinh nhập cho mạng m&igrave;nh th&igrave; biết được m&igrave;nh hạp với m&agrave;u n&agrave;o, n&ecirc;n mua xe theo m&agrave;u đ&oacute;. Nếu kh&oacute; t&igrave;m m&agrave;u sinh nhập, chọn m&agrave;u c&ugrave;ng h&agrave;nh cũng tốt. </span></span><br />\r\n				<br />\r\n				<br />\r\n				<span style="font-family: Times New Roman;"><span style="font-size: medium;"><span style="color: blue;"><strong>(st)</strong></span></span></span></blockquote>\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(8, 2, '', 'Nội thất xe đẹp', '<h2 class="Lead">\r\n	Những mẫu xe c&oacute; t&ecirc;n trong danh s&aacute;ch gồm hatchback, sedan v&agrave; crossover. Số lượng xe sang chiếm chưa tới một nửa.</h2>\r\n<p class="Normal">\r\n	Tạp ch&iacute; <em>Ward&#39;s AutoWorld</em> c&ocirc;ng bố những mẫu xe chiến thắng theo thứ tự chữ c&aacute;i, trong đ&oacute; c&oacute; 4 xe sang, 3 xe hạng nhỏ gi&aacute; dưới 22.000 USD.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img alt="Hyundai Accent" border="1" height="329" src="http://vnexpress.net/Files/Subject/3b/bd/58/48/hyundai-accent.jpg" width="495" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Hyundai Accent 2012 - một trong 10 nội thất xe đẹp nhất.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	C&oacute; tất cả 40 xe được tạp ch&iacute; của Mỹ đưa v&agrave;o danh s&aacute;ch ứng vi&ecirc;n, từ đ&oacute; chọn ra những nội thất đẹp nhất, mới hoặc được n&acirc;ng cấp, dựa tr&ecirc;n c&aacute;c ti&ecirc;u ch&iacute; thiết kế, lắp đặt v&agrave; ho&agrave;n thiện, tiện nghi, c&ocirc;ng th&aacute;i học, an to&agrave;n, lựa chọn chất liệu, gi&aacute; trị tổng thể, thẩm mỹ v&agrave; giao diện người-m&aacute;y.</p>\r\n<p class="Normal">\r\n	D&ograve;ng xe hạng sang c&oacute; 13 mẫu l&agrave; ứng vi&ecirc;n, th&igrave; chỉ 4 chiếc lọt v&agrave;o danh s&aacute;ch chiến thắng. Mẫu xe lần đầu ti&ecirc;n được b&aacute;n ra tại Việt Nam, Mazda CX-5, cũng được vinh danh.</p>\r\n<h3 class="SubTitle">\r\n	Danh s&aacute;ch &quot;10 Best Interiors&quot; của Ward&#39;s AutoWorld (được sắp xếp lại theo gi&aacute; b&aacute;n tại thị trường Mỹ):</h3>\r\n<p class="Normal">\r\n	Hyundai Accent (15.925 USD)<br />\r\n	Chevrolet Sonic (18.745 USD)<br />\r\n	Dodge Dart (21.485 USD)<br />\r\n	Volkswagen Beetle (25.195 USD)<br />\r\n	Mazda CX-5 (30.415 USD)<br />\r\n	Hyundai Azera (36.875 USD)<br />\r\n	Chrysler 300 Luxury (44.855 USD)<br />\r\n	Range Rover Evoque (49.745 USD)<br />\r\n	Infiniti JX35 (54.800 USD)<br />\r\n	Audi A7 (67.430 USD)</p>\r\n'),
(9, 2, '', 'aaaaa', '<p>\r\n	aaaaaaaaaaa</p>\r\n');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-12-06 10:54:18', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `n_xh_category`
--

INSERT INTO `n_xh_category` (`id`, `namev`, `alias`, `parent_id`) VALUES
(37, 'Chevrolet', 'Chevrolet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_xh_product`
--

CREATE TABLE IF NOT EXISTS `n_xh_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `n_xh_product`
--

INSERT INTO `n_xh_product` (`id`, `namev`, `alias`, `price`, `image`, `hangsx`, `mota`) VALUES
(13, 'CHEVROLET - SPARK LS 1.0 MT', 'CHEVROLET---SPARK-LS-1.0-MT', '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/spark-lt-1-2-mt-2011-123456.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'Chevrolet', '<div class="mds-cmp-navigation03 nav_extended_1">\r\n	&nbsp;</div>\r\n<table border="0" cellpadding="0" cellspacing="0" height="944" style="border-collapse: collapse;" width="607">\r\n	<tbody>\r\n		<tr style="HEIGHT: 30pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; BORDER-TOP: windowtext 1pt solid; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 30pt; BACKGROUND-COLOR: #92d050; border-image: initial" width="51%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Th&ocirc;ng Số Cơ Bản</span></b></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; BORDER-TOP: windowtext 1pt solid; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 30pt; BACKGROUND-COLOR: #92d050" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">SPARK 1.0</span></b></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; BORDER-TOP: windowtext 1pt solid; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 30pt; BACKGROUND-COLOR: #92d050" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">SPARK 1.2</span></b></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 24.95pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 24.95pt" width="51%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Mi&ecirc;u tả</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 24.95pt; BACKGROUND-COLOR: #c4e59f" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">LS</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 24.95pt; BACKGROUND-COLOR: #c4e59f" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">LT</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 24.95pt; BACKGROUND-COLOR: #c4e59f" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">LS</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 24.95pt; BACKGROUND-COLOR: #c4e59f" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">LT</span></b></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td colspan="5" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 100%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="100%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1. Động cơ</span></b></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Loại động cơ</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1.0 DOHC MFI</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1.2 DOHC MFI</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Dung t&iacute;ch xy lanh (cc)</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">995</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1206</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">C&ocirc;ng suất tối đa (ps/rpm)</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">68/6.400</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">81,6/6.400</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">M&ocirc; men xoắn tối đa (N.m/rpm)</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">89/4.800</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">108/4.800</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Dung t&iacute;ch b&igrave;nh xăng (L)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: black 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">35</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Số chỗ ngồi</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">5</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td colspan="5" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 100%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="100%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">2. Truyền động</span></b></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Hộp số</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Số s&agrave;n 5 cấp</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Tốc độ tối đa (km/h)</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">154</span></p>\r\n			</td>\r\n			<td colspan="2" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 24.22%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="24%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">164</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; HEIGHT: 19.5pt" width="51%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">3. K&iacute;ch thước v&agrave; trọng lượng</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">D&agrave;i x Rộng x Cao (mm)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">3.640x1.597x1.522</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Chiều d&agrave;i cơ sở (mm)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">2.375</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Khoảng s&aacute;ng gầm (mm)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">160</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Vệt b&aacute;nh xe (mm)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1.410/1.417</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Trọng lượng kh&ocirc;ng tải (kg)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1 .000</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Trọng lượng to&agrave;n tải (kg)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">1.367</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">B&aacute;n k&iacute;nh v&ograve;ng quay tối thiểu (m)</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">5</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; HEIGHT: 19.5pt" width="51%">\r\n				<p>\r\n					<b><span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">4. La zăng v&agrave; lốp</span></b></p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-RIGHT-STYLE: none; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 12.2%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="12%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">La zăng</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">14&quot;</span></p>\r\n			</td>\r\n		</tr>\r\n		<tr style="HEIGHT: 19.5pt">\r\n			<td nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; BORDER-LEFT: windowtext 1pt solid; WIDTH: 51.58%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; HEIGHT: 19.5pt" width="51%">\r\n				<p style="TEXT-INDENT: 10pt">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">Lốp</span></p>\r\n			</td>\r\n			<td colspan="4" nowrap="nowrap" style="BORDER-RIGHT: windowtext 1pt solid; PADDING-RIGHT: 5.4pt; PADDING-LEFT: 5.4pt; PADDING-BOTTOM: 0in; WIDTH: 48.42%; BORDER-TOP-STYLE: none; PADDING-TOP: 0in; BORDER-BOTTOM: windowtext 1pt solid; BORDER-LEFT-STYLE: none; HEIGHT: 19.5pt" width="48%">\r\n				<p align="center" style="TEXT-ALIGN: center">\r\n					<span style="FONT-SIZE: 10pt; FONT-FAMILY: Verdana, sans-serif">155/70R14</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<br />\r\n	<span style="font-family: Times New Roman;"><span style="font-size: medium;">Chevrolet 343 Spark 2011 c&oacute; nhiều đường n&eacute;t mềm mại hơn d&ugrave; về cơ bản ngoại thất xe kh&ocirc;ng thay đổi nhiều. Phần đầu xe được l&agrave;m mới cho hợp vớ<span style="color: black;">i logo C</span>hevrolet.</span></span><span style="font-family: Times New Roman;"><span style="font-size: medium;"> Nội thất xe kh&aacute; ấn tượng với thiết kế hiện đại v&agrave; thể thao. Mẫu xe n&agrave;y d&agrave;i 3.640 mm v&agrave; c&oacute; chiều d&agrave;i cơ sở 2.375 mm. D&ugrave; l&agrave; một mẫu xe cỡ nhỏ nhưng cabin của Spark đủ sức chứa 5 h&agrave;nh kh&aacute;ch.</span></span></p>\r\n'),
(16, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Sparkvan1-1%20(1).jpg" style="width: 550px; height: 412px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	Lời Tựa Của T&aacute;c giả:</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Tại sao phải phơi đầu ra giữa trời nắng n&oacute;ng với những chiếc xe m&aacute;y ga đắt tiền như SH, trong khi đ&atilde; c&oacute; Matiz Van: trẻ trung, đẹp, ăn xăng như xe m&aacute;y, rẻ như xe m&aacute;y...thương hiệu mỹ...tham khảo đi c&aacute;c b&aacute;c</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Mong muốn của t&ocirc;i l&agrave;: th&agrave;nh lập 1 hội chơi Spark Van v&agrave; hi vọng n&oacute; cũng nổi tiếng như c&aacute;c hội Vespa, Fx...</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Mọi chiếc xe đắt tiền đều sẽ lỗi thời, chỉ c&oacute; những chiếc xe độc đ&aacute;o mới ko bao giờ hết mốt</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<br />\r\n	<br />\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;">Một c&aacute;ch tổng thể,&nbsp;</span></span><span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;"><span style="font-size: 14pt;">Matiz Van</span>&nbsp;tạo n&ecirc;n những n&eacute;t mới, thể thao v&agrave; năng động hơn hẳn so với Matiz cũ.&nbsp;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n'),
(17, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/lexus222.jpg" style="width: 550px; height: 367px;" /></p>\r\n', 'Chevrolet', '<p>    che2</p>'),
(18, 'Xe Chất lượng cao', 'Xe-Chat-luong-cao', '600.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/banerorlandogif%20(2).gif" style="width: 679px; height: 487px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">Renault Wind Gordini tại Việt Nam được trang bị động cơ 1.6 l&iacute;t, c&ocirc;ng suất cực đại 133 m&atilde; lực/6750 v&ograve;ng/ph&uacute;t, momen xoắn 160 Nm tại 4.400 v&ograve;ng/ph&uacute;t, nhờ đ&oacute; xe c&oacute; khả năng tăng tốc từ 0 &ndash; 96km/h trong khoảng 9,2 gi&acirc;y, sử dụng hộp số s&agrave;n 5 cấp. So với một chiếc xe cỡ nhỏ th&igrave; sức mạnh của xe kh&aacute; tốt.</span></p>\r\n'),
(19, 'Hyundai Xe Chất lượng cao Hyundai', 'Xe-Chat-luong-cao', '600000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/wind-2.jpg" style="width: 500px; height: 297px;" /></p>\r\n', 'Hyundai', '<p>HH21\n\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">Renault Wind Gordini tại Việt Nam được trang bị động cơ 1.6 l&iacute;t, c&ocirc;ng suất cực đại 133 m&atilde; lực/6750 v&ograve;ng/ph&uacute;t, momen xoắn 160 Nm tại 4.400 v&ograve;ng/ph&uacute;t, nhờ đ&oacute; xe c&oacute; khả năng tăng tốc từ 0 &ndash; 96km/h trong khoảng 9,2 gi&acirc;y, sử dụng hộp số s&agrave;n 5 cấp. So với một chiếc xe cỡ nhỏ th&igrave; sức mạnh của xe kh&aacute; tốt.</span></p>\n'),
(20, ' Hyundai xe đa dụng KIA Carens 2013 HyunHyundaidai', 'xe-da-dung-KIA-Carens-2013', '750.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Kia_carens.jpg" style="width: 480px; height: 339px;" /></p>\r\n', 'Hyundai', '<p>\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">HHHH2\nnhư Mazda h&eacute; lộ dần h&igrave;nh ảnh của Mazda6 ho&agrave;n to&agrave;n mới 2014 trước thềm triển l&atilde;m &ocirc; t&ocirc; Moscow, KIA đang tiết lộ từng phần h&igrave;nh ảnh của Carens mới trước khi giới thiệu đầy đủ mẫu xe mới tại triển l&atilde;m &ocirc; t&ocirc; Paris (diễn ra từ 29/9 tới 14/10/2012).</span></p>\n'),
(21, 'Mondeo 2.3 AT', 'Mondeo-2.3-AT', '480.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Spack-van-docopy.png" style="width: 200px; height: 100px;" /></p>\r\n', 'Hyundai', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 16px;">HYUNDAI EON 0.8 MT ( xe 5 chỗ, số s&agrave;n) GI&Aacute; THAM KHẢO: 345.000.000 VND Li&ecirc;n hệ: Mr. Mạnh: 0988.693.163</span></p>\r\n'),
(22, 'Hyundai Elantra 1.6 MT', 'Hyundai-Elantra-1.6-MT', '600.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/hyundai-eon-123.jpg" style="width: 692px; height: 412px;" /></p>\r\n', 'Hyundai', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Hyundai Eon hiện l&agrave; mẫu xe c&oacute; gi&aacute; b&aacute;n rẻ nhất của nh&agrave; sản xuất &ocirc; t&ocirc; H&agrave;n Quốc, được lắp r&aacute;p tại Ấn Độ v&agrave; thu h&uacute;t được sự quan t&acirc;m của nhiều thị trường đang ph&aacute;t triển như Việt Nam. Với sự c&oacute; mặt của Hyundai Eon, người ti&ecirc;u d&ugrave;ng Việt sẽ c&oacute; th&ecirc;m nhiều sự lựa chọn xe đ&ocirc; thị b&ecirc;n cạnh Chevrolet Spark, Hyundai i10, Kia Morning, BYD F0, ,&hellip;</span></p>\r\n'),
(23, 'Hyundai Elantra', 'Hyundai-Elantra', '480.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Xe-Ford-Mondeo-trang-1.jpg" style="width: 200px; height: 100px;" /></p>\r\n', 'Hyundai ', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Hyundai Eon hiện l&agrave; mẫu xe c&oacute; gi&aacute; b&aacute;n rẻ nhất của nh&agrave; sản xuất &ocirc; t&ocirc; H&agrave;n Quốc, được lắp r&aacute;p tại Ấn Độ v&agrave; thu h&uacute;t được sự quan t&acirc;m của nhiều thị trường đang ph&aacute;t triển như Việt Nam. Với sự c&oacute; mặt của Hyundai Eon, người ti&ecirc;u d&ugrave;ng Việt sẽ c&oacute; th&ecirc;m nhiều sự lựa chọn xe đ&ocirc; thị b&ecirc;n cạnh Chevrolet Spark, Hyundai i10, Kia Morning, BYD F0, ,&hellip;</span></p>\r\n'),
(24, 'Hyundai Veloster 1.6 AT', 'Hyundai-Veloster-1.6-AT', '840.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/wind-2.jpg" style="width: 500px; height: 297px;" /></p>\r\n', 'Hyundai ', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Giữa th&aacute;ng 6, Hyundai Th&agrave;nh C&ocirc;ng dự kiến tung ra chiếc Veloster c&oacute; thiết kế kh&aacute; đặc biệt nhờ trộn lẫn giữa d&ograve;ng coupe, sedan v&agrave; hatchback. Veloster lạ mắt bởi n&oacute; c&oacute; thiết kế chỉ c&oacute; một cửa b&ecirc;n t&agrave;i xế. B&ecirc;n phụ c&oacute; 2 cửa như b&igrave;nh thường. Ph&iacute;a sau c&oacute; th&ecirc;m cửa giống như d&ograve;ng hatchback. Nh&igrave;n ở mỗi g&oacute;c, mẫu xe n&agrave;y lại c&oacute; h&igrave;nh dạng kh&aacute;c nhau. Brandon Ramirez, Gi&aacute;m đốc sản phẩm của Hyundai giải th&iacute;ch: &quot;Ch&uacute;ng t&ocirc;i phỏng vấn rất nhiều người, đặc biệt l&agrave; kh&aacute;ch h&agrave;ng mua coupe compact. Nhu cầu của họ rất đa dạng. V&igrave; thế, Veloster l&agrave; một xe 4 chỗ với 3 cửa ch&iacute;nh&quot;.</span></p>\r\n'),
(25, 'CHEVROLET - VIVANT CDX 2.0 AT', 'CHEVROLET---VIVANT-CDX-2.0-AT', '700.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/vivant1.jpg" style="width: 550px; height: 366px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: center;">\r\n	<div style="text-align: justify;">\r\n		Vivant là dòng sản ph&acirc;̉m có c&ocirc;ng ngh&ecirc;̣ t&acirc;n ti&ecirc;́n, được trang bị h&ecirc;̣ th&ocirc;́ng ch&ocirc;́ng bó cứng phanh (ABS), túi khí cho lái xe. Xe Vivant đạt ti&ecirc;u chu&acirc;̉n ch&acirc;u &Acirc;u và Vi&ecirc;̣t Nam v&ecirc;̀ n&ocirc;̀ng đ&ocirc;̣ khí thải &ndash; đạt ti&ecirc;u chu&acirc;̉n khí thải Euro II.</div>\r\n</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 12pt;">Vivant được thi&ecirc;́t k&ecirc;́ sinh đ&ocirc;̣ng bởi hãng thi&ecirc;́ k&ecirc;́ n&ocirc;́i ti&ecirc;́ng Pininfarina đ&ecirc;́n từ nước Ý, mang đ&acirc;̣m phong cách NĂNG Đ&Ocirc;̣NG, SANG TRỌNG, TH&Ecirc;̉ THAO và TI&Ecirc;̣N NGHI, tạo cảm giác r&acirc;́t ri&ecirc;ng cho người ng&ocirc;̀i tr&ecirc;n xe</span></span></div>\r\n'),
(26, 'Chevrolet Lacetti 1.6 MT 2012', 'Chevrolet-Lacetti-1.6-MT-2012', '20.000 USD', '<p>\r\n	<span style="font-family:arial,helvetica,sans-serif;"><img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/chevrolet-lacetti-1.jpg" style="width: 592px; height: 417px;" /></span></p>\r\n', 'Chevrolet', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Du nhập v&agrave;o Việt Nam từ th&aacute;ng 4 năm 2004, Lacetti đ&atilde; đ&oacute;n nhận được sự quan t&acirc;m v&agrave; tin d&ugrave;ng của đ&ocirc;ng đảo kh&aacute;ch h&agrave;ng Việt Nam.&nbsp;</span><span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Lacetti l&agrave; sự kết hợp h&agrave;i h&ograve;a giữa kiểu d&aacute;ng hiện đại, c&ocirc;ng nghệ tối ưu v&agrave; nội thất tiện nghi ho&agrave;n hảo. Chắc chắn rằng New Lacetti sẽ đem đến cho bạn những niềm vui lớn tr&ecirc;n mọi h&agrave;nh tr&igrave;nh.</span></p>\r\n<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">An to&agrave;n tuyệt đối, nội thất rộng r&atilde;i nhất so với c&aacute;c xe c&ugrave;ng d&ograve;ng.</span><span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Động cơ v&agrave; hệ thống truyền động mới với t&iacute;nh năng ho&agrave;n hảo.&nbsp;Mặt calăng mới, tạo d&aacute;ng thể thao mạnh mẽ cho xe.&nbsp;Kiểu d&aacute;ng sang trọng với những đường n&eacute;t trang nh&atilde;, tinh tế.&nbsp;Tiện nghi ho&agrave;n hảo. Tất cả những yếu tố tr&ecirc;n đ&atilde; biến Lacetti trở th&agrave;nh sự lựa chọn số một của kh&aacute;ch h&agrave;ng với tầm xe khoảng tr&ecirc;n 20.000$</span></p>\r\n'),
(27, 'Daewoo - GENTRA', 'Daewoo---GENTRA', '', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/chevrolet-lacetti-2.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: 16px; line-height: 16px; text-align: justify;">Gentra khắc phục được những điểm yếu của d&ograve;ng xe hạng nhỏ. N&oacute; duy tr&igrave; được mức gi&aacute; cạnh tranh v&agrave; t&iacute;nh kinh tế nhi&ecirc;n liệu nhưng lại c&oacute; thiết kế hiện đại v&agrave; kiểu d&aacute;ng thể thao rất ấn tượng, nội thất rộng r&atilde;i c&ugrave;ng với những t&iacute;nh năng ti&ecirc;n tiến thường thấy ở những d&ograve;ng xe sang trọng. Với những ưu điểm đ&oacute;, Gentra được coi l&agrave; sự lựa chọn tối ưu về gi&aacute; trị sử dụng của d&ograve;ng xe hạng nhỏ.</span></p>\r\n<p>\r\n	<span style="color: rgb(64, 60, 58); line-height: 16px; text-align: justify; font-size: 12pt; font-family: ''Times New Roman'';">Với chiều d&agrave;i cơ sở l&agrave; 2.480 mm, v&agrave; chiều cao l&agrave; 1.505 mm, chiều rộng l&agrave; 1.710 mm, chiều d&agrave;i tổng l&agrave; 4.310 mm, Gentra c&oacute; một kh&ocirc;ng gian rộng lớn b&ecirc;n trong. Lưới tản nhiệt mạ cr&ocirc;m rộng kết hợp với đường g&acirc;n sắc, nổi chạy từ nắp ca b&ocirc; đến ba đờ sốc trước, cụm đ&egrave;n pha lớn thấu k&iacute;nh đa điểm, đ&egrave;n sương m&ugrave; tr&ograve;n tạo cho ph&iacute;a trước của Gentra vẻ đẹp thu h&uacute;t đặc biệt. V&ograve;m b&aacute;nh xe trước v&agrave; sau được dập nổi c&ugrave;ng với v&agrave;nh b&aacute;nh xe 15 inch tạo cho Gentra kiểu d&aacute;ng rất thể thao</span><span style="color: rgb(64, 60, 58); line-height: 16px; text-align: justify; font-size: 12pt; font-family: ''Times New Roman'';">&nbsp;chắc chắn.</span></p>\r\n<p style="margin: 15px 0px; padding: 0px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 16px;">\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;"><span style="font-size: 12pt;">Một số đặc điểm nổi bật kh&aacute;c của Gentra m&agrave; c&aacute;c d&ograve;ng xe c&ugrave;ng đẳng cấp kh&aacute;c kh&ocirc;ng c&oacute; bao gồm: tay nắm cửa mạ Cr&ocirc;m, gương chiếu hậu hai t&ocirc;ng m&agrave;u b&ecirc;n ngo&agrave;i, đ&egrave;n đu&ocirc;i được thiết kế dạng ống, v&agrave; nắp cốp sau được dập nổi kiểu Spoiler c&ugrave;ng với tay mở cốp sau d&agrave;i mạ cr&ocirc;m tạo ấn tượng nổi bật cho Gentra khi nh&igrave;n từ ph&iacute;a sau.</span></span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
