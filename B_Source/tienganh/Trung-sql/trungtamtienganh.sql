-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 10:03 AM
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
(3, 'Trường mầm non C'),
(4, 'Trường mầm non C');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_hotro`
--

INSERT INTO `n_hotro` (`id`, `ten`, `sdt`, `yahoo`) VALUES
(1, 'Văn phòng học viện Jennifer', 0, 'mo_tuyet_tinh');

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
(1, '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide1.jpg" style="width: 950px; height: 400px;" /></p>', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide2.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide31.jpg" style="width: 950px; height: 400px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_about_us`
--

CREATE TABLE IF NOT EXISTS `n_ta_about_us` (
  `about_id` int(12) NOT NULL AUTO_INCREMENT,
  `about_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `about_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_about_us`
--

INSERT INTO `n_ta_about_us` (`about_id`, `about_content`, `about_category`) VALUES
(1, '<p>\r\n	&nbsp;tiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng anh cao cấp noi dung gioi thieutiếng a', 'Sứ mệnh'),
(2, '<p>\r\n	sdsdssdasdsd aaaa</p>', 'Tầm nhìn'),
(5, '<p>\r\n	sdsdsssssssssssssssscc</p>', 'Giá trị cốt lõi'),
(6, '<p>\r\n	aaaaaaaaaaaaaaaaaaaaaaa đ&acirc;y m&agrave; l&agrave; văn h&oacute;a &agrave;h Zzzsss</p>', 'Văn hóa công ty');

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
  `contact_title` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `contact_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` int(13) NOT NULL,
  `contact_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `check` int(11) NOT NULL DEFAULT '0',
  `lecturers_category` int(12) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_ta_contact_us`
--

INSERT INTO `n_ta_contact_us` (`contact_id`, `contact_email`, `contact_title`, `create_date`, `contact_address`, `contact_phone`, `contact_content`, `contact_name`, `check`, `lecturers_category`) VALUES
(1, 'tuyetapt@gmail.com', 'Tiếng anh cấp tốc', '2012-12-04', 'Hà Nội', 1234545, '', '', 0, 0),
(2, '2012-12-12', 'tiếng anh giao tiếp', '0000-00-00', '0', 3543, 'dsfsdfdsf', 'nam', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_courses`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses` (
  `courses_id` int(12) NOT NULL AUTO_INCREMENT,
  `courses_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(12) NOT NULL,
  `courses_category` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `courses_content` text COLLATE utf8_unicode_ci NOT NULL,
  `courses_date` date NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_ta_courses`
--

INSERT INTO `n_ta_courses` (`courses_id`, `courses_name`, `parent_id`, `courses_category`, `courses_content`, `courses_date`, `alias`) VALUES
(1, 'tiếng anh cho trẻ em', 1, 'Tiểu học', '<p>\r\n	zxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>\r\n', '2012-12-11', 'tieng-anh-cho-tre-em'),
(2, 'tiếng anh cấp 1', 1, 'Tiểu học', '<p>\r\n	&aacute;dddddddd</p>\r\n', '2012-12-18', 'tieng-anh-cap-1'),
(3, 'khóa học tiếng anh cấp 3', 3, 'Mầm non', '<p>\r\n	sdffffffffffff</p>\r\n', '2012-12-11', 'khoa-hoc-tieng-anh-cap-3'),
(4, 'zzzzzz', 0, 'Một tuổi', '', '2012-12-18', ''),
(5, 'abc xyz', 0, 'Một tuổi', '<p>\r\n	&nbsp;nếu l&agrave; chim ta sẽ l&agrave; lo&agrave;i bồ c&acirc;u trắng, nếu l&agrave; hoa ta sẽ l&agrave; một nh&aacute;nh hoa lan, l&aacute; l&agrave; la la l&aacute; l&agrave; l&agrave; l&aacute; la la...</p>\r\n', '2012-12-18', 'abc-xyz'),
(7, 'chán dần rồi aaa', 0, 'Mầm non', '<p>\r\n	oioo lala</p>\r\n', '2012-12-18', 'chan-dan-roi-aaa');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_image`
--

CREATE TABLE IF NOT EXISTS `n_ta_image` (
  `image_id` int(12) NOT NULL,
  `image_category` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image_album` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_ta_image`
--

INSERT INTO `n_ta_image` (`image_id`, `image_category`, `image_album`, `image_name`) VALUES
(0, '0', '<p>\r\n	sdfsdfdsfđfdfdf</p>\r\n', 'dsfd');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_info`
--

CREATE TABLE IF NOT EXISTS `n_ta_info` (
  `info_id` int(12) NOT NULL AUTO_INCREMENT,
  `info_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `info_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
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
  `lecturers_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_content` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `lecturers_image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lecturers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `n_ta_lecturers`
--

INSERT INTO `n_ta_lecturers` (`lecturers_id`, `lecturers_category`, `lecturers_content`, `alias`, `lecturers_title`, `create_date`, `lecturers_image`) VALUES
(1, 'Thầy giáo', '<p style="text-align: justify;">\r\n	<span style="font-family: Times New Roman,Times,serif;"><span style="font-size: 14px;">Trong kh&ocirc;ng kh&iacute; tưng bừng của buổi lễ mừng Hiến chương nh&agrave; gi&aacute;o s&aacute;ng 20/11/2012, tại Hội trường A106, TS L&ecirc; Văn Hưng nguy&ecirc;n trưởng khoa Luật Kinh tế đ&atilde; vinh dự đ&oacute;n nhận danh hiệu Nh&agrave; gi&aacute;o ưu t&uacute;. Một kết quả tất yếu cho những nỗ lực v&agrave; đ&oacute;ng g&oacute;p của thầy trong sự nghiệp dạy học.</span></span></p>\r\n<p style="text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="text-align: justify;">\r\n	<span style="font-family: Times New Roman,Times,serif;"><span style="font-size: 14px;">Từ l&uacute;c l&agrave; Ban Luật Kinh tế trong UEH, Thầy đ&atilde; t&acirc;m huyết, trăn trở để c&oacute; kết quả l&agrave; Khoa Luật Kinh tế được ra đời v&agrave;o năm 2001. Cho đến năm 2004, lần đầu ti&ecirc;n trường UEH được đ&agrave;o tạo cử nh&acirc;n Luật, chuyển m&igrave;nh th&agrave;nh một trường đa ng&agrave;nh. V&igrave; lẽ đ&oacute;, trong l&ograve;ng đồng nghiệp v&agrave; c&aacute;c giảng vi&ecirc;n trẻ, Thầy lu&ocirc;n l&agrave; một trụ cột vững chắc cho khoa Luật kinh tế từ những ng&agrave;y đầu th&agrave;nh lập.</span></span></p>\r\n', 'TS.-Le-Van-Hung', 'TS. Lê Văn Hưng', '0000-00-00 00:00:00', '<p>\r\n	<img alt="surprise" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/omg_smile.gif" title="surprise" width="20" /></p>\r\n'),
(2, 'Thầy giáo', '<p>\r\n	lecturers english old lecturers english old lecturers english old</p>\r\n', 'Giao-vien-cap-cao', 'Giáo viên cấp cao', '0000-00-00 00:00:00', '<p>\r\n	<img alt="blush" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/embaressed_smile.gif" title="blush" width="20" /></p>\r\n'),
(3, 'Thầy giáo', '<p>\r\n	lecturers english finish lecturers english finish lecturers english finish</p>\r\n', 'Giao-vien-hanh-chinh', 'Giáo viên hành chính', '0000-00-00 00:00:00', '<p>\r\n	<img alt="surprise" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/omg_smile.gif" title="surprise" width="20" /></p>\r\n'),
(4, 'Thầy giáo', '<p>\r\n	sdfghjkl</p>\r\n', 'Nguyen-j-do', 'Nguyễn j đó', '0000-00-00 00:00:00', '<p>\r\n	<img alt="enlightened" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/lightbulb.gif" title="enlightened" width="20" /></p>\r\n'),
(5, 'Thầy giáo', '<p>\r\n	ko c&oacute; j nổi bật</p>\r\n', 'abc-xyz', 'abc xyz', '0000-00-00 00:00:00', '<p>\r\n	<img alt="kiss" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/kiss.gif" title="kiss" width="20" /></p>\r\n'),
(6, 'Thầy giáo', '<p>\r\n	&nbsp;một nội dung mới</p>\r\n', 'abc-xyz-1-hay-hay-he-he-u', 'abc xyz 1 hay hay hê hê Ư', '0000-00-00 00:00:00', '<p>\r\n	<img alt="heart" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/heart.gif" title="heart" width="20" /></p>\r\n'),
(7, 'Thầy giáo', '<p>\r\n	hehehe</p>\r\n', 'aaaaad-sv-sfv-b', 'aaaaad sv sfv b', '0000-00-00 00:00:00', '<p>\r\n	<img alt="no" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/thumbs_down.gif" title="no" width="20" /></p>\r\n'),
(8, 'Thầy giáo', '<p>\r\n	how hơ</p>\r\n', 'o-o-a-a', 'ơ Ô a Ắ', '0000-00-00 00:00:00', '<p>\r\n	<img alt="blush" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/embaressed_smile.gif" title="blush" width="20" /></p>\r\n');

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
  `news_image` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `n_ta_news`
--

INSERT INTO `n_ta_news` (`news_id`, `news_title`, `news_content`, `news_author`, `news_post_date`, `news_image`, `alias`, `news_category`) VALUES
(2, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', '<div>\r\n	<span style="COLOR: #ff0000"><strong>&Ocirc;ng Gavan Iacono - Tổng Gi&aacute;m đốc Language Link Việt Nam</strong></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<span style="COLOR: #000000">Thay mặt đo&agrave;n tư vấn v&agrave; to&agrave;n thể gi&aacute;o vi&ecirc;n, nh&acirc;n vi&ecirc;n&nbsp;Language Link Việt Nam, xin được gửi đến qu&yacute; độc giả b&aacute;o điện tử <em>D&acirc;n tr&iacute;</em> lời ch&agrave;o tr&acirc;n trọng nhất. Xin mời độc giả c&ugrave;ng theo d&otilde;i buổi tư vấn &ldquo;Chuẩn bị cho trẻ em 5 đến 7 tuổi học tiếng Anh thế n&agrave;o?&rdquo;. </span></div>\r\n<p>\r\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK </span></strong></p>\r\n<div>\r\n	Ch&agrave;o bạn,</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	L&uacute;c 5 tuổi&nbsp;l&agrave; giai đoạn thần kinh n&atilde;o bộ của trẻ ph&aacute;t triển với tốc độ rất nhanh, tạo thuận lợi cho việc k&iacute;ch hoạt nhiều loại tiềm năng sớm của trẻ, trong đ&oacute; c&oacute; tiềm năng ngoại ngữ. Nhiều chuy&ecirc;n gia quốc tế gọi đ&acirc;y l&agrave; &ldquo;thời kỳ v&agrave;ng&rdquo; quyết định đỉnh cao của sự ph&aacute;t triển ng&ocirc;n ngữ v&agrave; ngoại ngữ cho trẻ sau n&agrave;y. Nhiều học sinh đạt giải cao về tiếng Anh, như Ho&agrave;ng Hải Linh, &nbsp;Đỗ Nhật Nam,... đ&atilde; bắt đầu được k&iacute;ch hoạt năng khiếu tiếng Anh từ giai đoạn n&agrave;y.</div>\r\n<p>\r\n	Việc k&iacute;ch hoạt sớm tiếng Anh sẽ gi&uacute;p trẻ ph&aacute;t triển nhiều loại tr&iacute; th&ocirc;ng minh g&oacute;p phần dẫn đến sự th&agrave;nh đạt trong tương lai: trẻ sẽ tư duy t&iacute;ch cực hơn khi biết th&ecirc;m một c&aacute;ch diễn đạt mới kh&aacute;c với c&aacute;ch diễn đạt bằng tiếng mẹ đẻ, trẻ sẽ hiểu tiếng Việt r&otilde; hơn, ng&ocirc;n ngữ sẽ phong ph&uacute; hơn, tương t&aacute;c sẽ được mở rộng hơn, cảm x&uacute;c của trẻ sẽ c&acirc;n bằng hơn nhờ sự bổ sung lẫn nhau giữa hai c&aacute;ch giao tiếp bằng tiếng Việt v&agrave; tiếng Anh.</p>\r\n<p>\r\n	<strong><span style="COLOR: #ff0000">&Ocirc;ng Gavan Iacono - Tổng Gi&aacute;m đốc Language Link Việt Nam</span></strong></p>\r\n<p>\r\n	T&ocirc;i cung cấp th&ecirc;m một kết luận khoa học của c&aacute;c gi&aacute;o sư tại Đại học Washington (Mỹ) đ&atilde; chứng minh rằng, trẻ học ng&ocirc;n ngữ thứ hai sớm kh&ocirc;ng những c&oacute; khả năng ph&aacute;t &acirc;m chuẩn x&aacute;c m&agrave; c&ograve;n c&oacute; khả năng tập trung ch&uacute; &yacute; tốt hơn, ph&aacute;t triển khả năng quan s&aacute;t v&agrave; ph&acirc;n t&iacute;ch, từ đ&oacute; tư duy của trẻ cũng được ph&aacute;t triển.</p>\r\n<p>\r\n	Con người sinh ra với bản năng tự nhi&ecirc;n trong học ng&ocirc;n ngữ v&agrave; nhu cầu giao tiếp. Đầu ti&ecirc;n, ch&uacute;ng ta chỉ biết kh&oacute;c. Nhưng cho đến khi l&ecirc;n bốn, ch&uacute;ng ta c&oacute; thể giao tiếp với gia đ&igrave;nh v&agrave; bạn b&egrave;, một sự thay đổi đ&aacute;ng kinh ngạc từ việc kh&ocirc;ng biết một ng&ocirc;n ngữ n&agrave;o trở th&agrave;nh thuần thục một ng&ocirc;n ngữ khi 4 tuổi. V&agrave; bước tiến n&agrave;y được thấy ở tất cả ch&uacute;ng ta v&agrave; ở mỗi đứa trẻ ta vẫn thấy thường ng&agrave;y. Trẻ kh&aacute;m ph&aacute; ng&ocirc;n ngữ đ&oacute; qua việc tr&ograve; chuyện với người lớn v&agrave; mắc c&aacute;c lỗi sai trong ng&ocirc;n ngữ hay qua chơi đ&ugrave;a v&agrave; tr&ograve; chuyện với những bạn c&ugrave;ng tuổi.</p>\r\n<p>\r\n	V&agrave; điều kỳ diệu l&agrave; trẻ nhỏ vẫn đang vận dụng những chiến lược học ng&ocirc;n ngữ c&oacute; t&iacute;nh bẩm sinh của ri&ecirc;ng c&aacute;c em v&agrave;o việc tiếp nhận tiếng mẹ đẻ v&agrave; sẽ sớm nhận thấy rằng, c&aacute;c em cũng c&oacute; thể &aacute;p dụng những chiến lược n&agrave;y v&agrave;o việc học tiếng Anh. V&igrave; một l&yacute; do n&agrave;o đ&oacute;, tr&iacute; n&atilde;o con người bắt đầu thay đổi trước tuổi dậy th&igrave; v&agrave; tuổi trưởng th&agrave;nh, mất đi khả năng dễ d&agrave;ng tiếp thu một ng&ocirc;n ngữ. Cuối c&ugrave;ng, tr&iacute; n&atilde;o của đứa trẻ 8 tuổi sẽ trở th&agrave;nh tr&iacute; n&atilde;o của một người lớn kh&ocirc;ng c&oacute; khả năng tiếp thu ng&ocirc;n ngữ tự nhi&ecirc;n. Đ&oacute; cũng l&agrave; một trong những l&yacute; do m&agrave; phụ huynh cần cho trẻ học sớm từ 5 tuổi.</p>\r\n<div>\r\n	Nhưng t&ocirc;i cũng lưu &yacute; với c&aacute;c bậc phụ huynh l&agrave; ngay từ nhỏ, nếu trẻ được tiếp x&uacute;c nhiều với c&aacute;c gi&aacute;o vi&ecirc;n bản ngữ hoặc m&ocirc;i trường tiếng Anh chuẩn, ph&aacute;t &acirc;m của ch&aacute;u sẽ thực sự chuẩn x&aacute;c. Đ&acirc;y l&agrave; vấn đề rất quan trọng nếu như bố hoặc mẹ muốn con n&oacute;i như người bản xứ, v&igrave; sau n&agrave;y khi c&aacute;c ch&aacute;u lớn l&ecirc;n, tư duy ng&ocirc;n ngữ đ&atilde; được định h&igrave;nh rồi th&igrave; rất kh&oacute; để c&oacute; được accent chuẩn.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<div align="center">\r\n		<div>\r\n			<div>\r\n				<img _fl="" align="middle" alt="Ông Gavan Iacono (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/mr-g-c7762.jpg" style="MARGIN: 5px" width="455" /></div>\r\n		</div>\r\n	</div>\r\n	<div align="center">\r\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">&Ocirc;ng Gavan Iacono (<em>b&ecirc;n tr&aacute;i</em>) - Tổng gi&aacute;m đốc điều h&agrave;nh Language Link Việt Nam đang trả lời thắc mắc của độc giả <em>D&acirc;n tr&iacute;</em> trong buổi tư vấn.</span></div>\r\n</div>\r\n<p>\r\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK</span></strong></p>\r\n<div>\r\n	Nếu đ&oacute; l&agrave; trường tiểu học quốc tế th&igrave; cần cho trẻ l&agrave;m quen h&agrave;ng năm trước đ&oacute; với tiếng Anh để tạo tiền đề cho trẻ c&oacute; khả năng giao tiếp bằng tiếng Anh trong trường học. Nếu đ&oacute; l&agrave; trường mầm non quốc tế c&oacute; dạy tiếng Anh th&igrave; cũng cần cho trẻ đến th&ecirc;m một Trung t&acirc;m giảng dạy tiếng Anh kh&aacute;c ngo&agrave;i hệ thống mầm non để k&iacute;ch hoạt tiềm năng tiếng Anh của trẻ với người bản xứ theo một phương ph&aacute;p kh&aacute;c bổ sung cho phương ph&aacute;p ở nh&agrave; trường. Những tiến bộ của trẻ ở Trung t&acirc;m tiếng Anh b&ecirc;n ngo&agrave;i sẽ l&agrave; thước đo chất lượng gi&aacute;o dục to&agrave;n diện của nh&agrave; trường, trong đ&oacute; c&oacute; kh&iacute;a cạnh gi&aacute;o dục sự tự tin, sự th&iacute;ch nghi của trẻ trước những m&ocirc;i trường kh&aacute;c, trước một nh&oacute;m bạn kh&aacute;c ngo&agrave;i m&ocirc;i trường học đường quen thuộc. Ngo&agrave;i ra đến Trung t&acirc;m, trẻ sẽ c&oacute; cơ hội được gặp th&ecirc;m c&aacute;c thầy gi&aacute;o, bổ sung cho gương mặt c&aacute;c c&ocirc; gi&aacute;o ở c&aacute;c trường mầm non v&agrave; tiểu học, gi&uacute;p c&aacute;c b&eacute; trai tr&aacute;nh xu hướng bị &ldquo;nữ t&iacute;nh ho&aacute;&rdquo; trong giai đoạn ph&aacute;t triển rất nhạy cảm n&agrave;y.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<div align="center">\r\n		<div>\r\n			<div>\r\n				<img _fl="" align="middle" alt="Tiến sĩ Nguyễn Minh Đức (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/ts-Duc-c7762.jpg" width="455" /></div>\r\n		</div>\r\n	</div>\r\n	<div align="center">\r\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Tiến sĩ Nguyễn Minh Đức (<em>b&ecirc;n phải</em>) - Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghi&ecirc;n cứu gi&aacute;o dục trẻ th&ocirc;ng minh sớm VSK đang tư vấn cho độc giả <em>D&acirc;n tr&iacute;</em></span>.</div>\r\n</div>\r\n<p>\r\n	<em><span style="COLOR: #000080">T&ocirc;i nghe n&oacute;i, trẻ con học Tiếng Anh th&igrave; gi&aacute;o vi&ecirc;n sẽ cho tổ chức tr&ograve; chơi suốt, m&agrave; lớp th&igrave; thường chỉ k&eacute;o d&agrave;i trong 2 giờ. Như thế c&aacute;c ch&aacute;u c&oacute; học được g&igrave; kh&ocirc;ng?</span></em></p>\r\n', 'trungoc', '2012-12-18', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/tieng_anh_tre_em3-df8ed.jpg" style="width: 332px; height: 500px;" /></p>\r\n', 'Tai-sao-can-phai-cho-tre-hoc-som-tu-5-tuoi?', 'Tiếng Anh mầm non'),
(3, 'tiếng anh nâng cao', '<p>\r\n	nọi dung tiếng anh cấp tốc</p>\r\n', 'tuyet ngo', '2012-12-10', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh tiểu học'),
(4, 'tin hàng ngày', '<p>\r\n	noi dung hay lắm m&agrave;</p>\r\n', 'hehe', '2012-12-10', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh cho sinh viên'),
(5, 'tin cô giáo', '<p>\r\n	sadasdas</p>\r\n', 'sda', '2012-12-11', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh cho người đi làm'),
(6, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', '<p>\r\n	tin trong nước,thời sự quốc tế</p>\r\n', 'minh minh', '2012-12-12', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', ''),
(7, '1 tiêu đề mới cần test', '<p>\r\n	aaaaaaaaaaaaaaaaaa tiếng anh d&agrave;nh cho mầm non</p>\r\n', 'trungoc', '2012-12-15', '<p>\n	<img alt="crying" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/cry_smile.gif" title="crying" width="20" /></p>\n', '', 'Tiếng Anh mầm non'),
(8, 'Anh yếu Em Ừm Ờ hẮ', '<p>\r\n	ko c&oacute; nội dung j nổi bật cả</p>\r\n', 'aa', '2012-12-18', '<p>\r\n	<img alt="heart" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/heart.gif" title="heart" width="20" /></p>\r\n', 'Anh-yeu-Em-um-o-ha', 'Tiếng Anh mầm non');

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
  `vedio_title` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `link_vedio` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ta_vedio`
--

INSERT INTO `n_ta_vedio` (`vedio_id`, `vedio_title`, `link_vedio`) VALUES
(3, 'Qua đêm nay', 'http://www.youtube.com/watch?v=Dj8GzBdu5o4');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-12-19 03:37:37', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
