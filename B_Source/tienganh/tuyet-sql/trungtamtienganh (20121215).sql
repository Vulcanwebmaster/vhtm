-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2012 at 04:49 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
(2, '<p>\r\n	sdsdssdasdsd</p>', 'Tầm nhìn'),
(5, 'sdsdssssssssssssssss', 'Văn hóa công ty'),
(6, '<p>\r\n	aaaaaaaaaaaaaaaaaaaaaaa</p>', 'Văn hóa công ty');

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
(1, 'Album số 1', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/Jellyfish.jpg" style="width: 1024px; height: 768px; " /></p>\r\n', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

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
  `courses_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(12) NOT NULL,
  `courses_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `courses_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `courses_date` datetime NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_ta_courses`
--

INSERT INTO `n_ta_courses` (`courses_id`, `courses_name`, `parent_id`, `courses_category`, `courses_content`, `courses_date`) VALUES
(1, 'tiếng anh cho trẻ em', 1, 'Một tuổi', 'zxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2012-12-11 00:00:00'),
(2, 'tiếng anh cấp 1', 1, '9 Tuổi', 'ádddddddd', '2012-12-18 00:00:00'),
(3, 'khóa học tiếng anh cấp 3', 3, 'cấp 3', 'sdffffffffffff', '2012-12-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_image`
--

CREATE TABLE IF NOT EXISTS `n_ta_image` (
  `image_id` int(12) NOT NULL AUTO_INCREMENT,
  `image_album` int(11) NOT NULL,
  `image_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `image_file` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_ta_image`
--

INSERT INTO `n_ta_image` (`image_id`, `image_album`, `image_name`, `image_file`) VALUES
(1, 0, 'dsfd', ''),
(2, 1, 'Ảnh mẫu số 1', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/Tulips.jpg" style="width: 1024px; height: 768px; " /></p>\r\n');

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
  `lecturers_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_title` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `lecturers_image` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lecturers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_ta_lecturers`
--

INSERT INTO `n_ta_lecturers` (`lecturers_id`, `lecturers_category`, `lecturers_content`, `alias`, `lecturers_title`, `create_date`, `lecturers_image`) VALUES
(1, 'Thầy giáo', '<p>\r\n	lecturers english new lecturers english new lecturers english new</p>', '', 'Giảng viên', '0000-00-00 00:00:00', ''),
(2, 'Cô giáo', '<p>\r\n	lecturers english old lecturers english old lecturers english old</p>', '', 'Giáo viên cấp cao', '0000-00-00 00:00:00', ''),
(3, 'Trợ giảng', '<p>\r\n	lecturers english finish lecturers english finish lecturers english finish</p>', '', 'Giáo viên hành chính', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_news`
--

CREATE TABLE IF NOT EXISTS `n_ta_news` (
  `news_id` int(12) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `news_post_date` date NOT NULL,
  `news_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `news_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_news`
--

INSERT INTO `n_ta_news` (`news_id`, `news_title`, `news_content`, `news_author`, `news_post_date`, `news_image`, `alias`, `news_category`) VALUES
(2, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', '<p>   nội dung nội dung nội dung nội dung nội dung nội dung tốt nh&eacute;</p>', 'ánh tuyết', '2012-12-10', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh mầm non'),
(3, 'tiếng anh nâng cao', '<p>\r\n	nọi dung tiếng anh cấp tốc</p>\r\n', 'tuyet ngo', '2012-12-10', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh tiểu học'),
(4, 'tin hàng ngày', '<p>\r\n	noi dung hay lắm m&agrave;</p>\r\n', 'hehe', '2012-12-10', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh cho sinh viên'),
(5, 'tin cô giáo', '<p>\r\n	sadasdas</p>\r\n', 'sda', '2012-12-11', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', 'Tiếng Anh cho người đi làm'),
(6, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', '<p>\r\n	tin trong nước,thời sự quốc tế</p>\r\n', 'minh minh', '2012-12-12', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 100px; height: 100px;" /></p>\r\n', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_ta_vedio`
--

INSERT INTO `n_ta_vedio` (`vedio_id`, `vedio_title`, `link_vedio`) VALUES
(1, 'facebook', 'facebook.com.vn'),
(2, 'facebook', 'facebook.com.vn');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-12-14 23:05:52', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
