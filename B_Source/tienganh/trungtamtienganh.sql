-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2013 at 09:30 AM
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
  `tene` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_doitac`
--

INSERT INTO `n_doitac` (`id`, `ten`, `tene`) VALUES
(1, 'Trường mầm non A', 'English Trườn'),
(2, 'Trường mầm non B', 'English Trường B'),
(3, 'Trường mầm non C', 'English Trường C');

-- --------------------------------------------------------

--
-- Table structure for table `n_email`
--

CREATE TABLE IF NOT EXISTS `n_email` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `e_mail` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `n_email`
--

INSERT INTO `n_email` (`id`, `e_mail`) VALUES
(5, 'tuyet@gmail.com'),
(6, 'sds@yahoo.com'),
(7, 'tuyet@yahoo.com'),
(11, 'trungnt20290@gmail.com'),
(12, 'trungoco7n@gmail.com'),
(13, 'damchienthang@gmail.com'),
(14, 'trungnt20290@gmail.com'),
(15, 'tuyetapt@gmail.com'),
(18, 'trungoco7n@gmail.com'),
(19, 'trungnt20290@gmail.com'),
(20, 'ac@gmail.com');

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
-- Table structure for table `n_quangcao`
--

CREATE TABLE IF NOT EXISTS `n_quangcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh1` text COLLATE utf8_unicode_ci NOT NULL,
  `link1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `link2` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_quangcao`
--

INSERT INTO `n_quangcao` (`id`, `anh1`, `link1`, `anh2`, `link2`) VALUES
(1, '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/sun_photography_Michael_Dawes_.jpg" style="width: 523px; height: 700px;" /></p>', 'http://www.jenny.edu.vn/', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/sun_photography_Michael_Dawes_.jpg" style="width: 1600px; height: 1081px;" /></p>\r\n', 'http://jenny.edu.vn/tintuc');

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
(1, '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(1).gif" style="width: 284px; height: 119px;" /></p>', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_155.gif" style="width: 284px; height: 119px;" /></p>\n', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 950px; height: 400px;" /></p>\n', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide31.jpg" style="width: 950px; height: 400px;" /></p>\n', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(2).gif" style="width: 284px; height: 119px;" /></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_about_us`
--

CREATE TABLE IF NOT EXISTS `n_ta_about_us` (
  `about_id` int(12) NOT NULL AUTO_INCREMENT,
  `about_content` text COLLATE utf8_unicode_ci NOT NULL,
  `about_contente` text COLLATE utf8_unicode_ci NOT NULL,
  `about_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_about_us`
--

INSERT INTO `n_ta_about_us` (`about_id`, `about_content`, `about_contente`, `about_category`) VALUES
(1, '<p>\r\n	&nbsp;</p>\r\n<h1 style="color: black; font-size: small; font-family: Arial; border-bottom-width: 0px; padding: 0px;">\r\n	<b>Được thành lập từ năm 2008, Trung tâm Anh ngữ GLN là một trong những đơn vị dẫn đầu trong việc thiết kế các khóa&nbsp;<a href="http://gln.edu.vn/" style="color: black; text-decoration: initial;">học tiếng anh</a>&nbsp;theo mô hình lớp học ưu việt. Các khóa học được thiết kế phù hợp với nhu cầu học tập nhằm mang lại hiệu quả cao nhất &amp; nhanh nhất cho người học.</b></h1>\r\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: center;">\r\n	<img alt="Mô hình học tiếng anh tại trung tâm tiếng anh GLN" height="253" src="http://gln.edu.vn/img/userfiles/images/Mo%20hinh%20hoc(2).png" width="400" /></div>\r\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\r\n	<img alt="" height="0" src="http://gln.edu.vn/img/userfiles/images/Giaovien/mohinhhoc1.jpg" width="0" /></div>\r\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\r\n	Qua nhiều năm giảng dạy Anh văn cho học viên tại các nước như Trung Quốc, Nhật Bản, Hàn Quốc, Đài Loan, Thái Lan, Indonesia, Việt Nam&hellip;, các giáo viên tại Trung tâm Anh ngữ GLN nghiệm ra rằng, với mô hình học tập ít người, học viên sẽ dễ dàng có sự tiếp cận trực tiếp giữa thầy và trò, giúp học viên học tập được hiệu quả nhất. Chính bởi vậy, GLN đã thiết kế một mô hình lớp học rất ưu việt: lớp 1 thầy 1 trò, lớp 1 thầy 4 trò, 1 thầy 6 trò, 1 thầy 8 trò &amp; 1 thầy 10 trò. Ở mỗi một lớp học, học viên sẽ được rèn luyện những kỹ năng cơ bản và cần thiết nhất để phát huy tối đa khả năng học và sử dụng&nbsp;<a href="http://gln.edu.vn/article_d/c39-217/hoc-tieng-anh-tong-quat-hieu-qua-tai-ha-noi" style="color: black; font-weight: bold; font-size: small; font-family: Arial; text-decoration: initial;">tiếng Anh</a>&nbsp;của mình.</div>\r\n<p>\r\n	&nbsp;</p>\r\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: center;">\r\n	&nbsp;<img alt="Giảng viên tại trung tâm tiếng anh GLN" height="344" src="http://gln.edu.vn/img/userfiles/images/giang-vien-tai-trung-tam-tieng-anh.jpg" width="250" /></div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\r\n	<span style="font-size: small;"><span style="font-family: Arial;">Bà Bùi Thị Lệ Hằng, Đại diện GLN cho biết: &ldquo;Với phương châm lấy người học làm trung tâm, các khóa học tiếng anh,&nbsp;<a href="http://gln.edu.vn/article_d/c36-138/luyen-thi-ielts-hieu-qua-tai-ha-noi" style="color: black; font-weight: bold; text-decoration: initial;">luyện thi ielts</a>&nbsp;tại GLN đều được thiết kế một cách kỹ lưỡng nhằm đáp ứng những nhu cầu thực tế của học viên. Bên cạnh đó, 100% giáo viên của GLN là những giáo viên Anh Văn nhiều năm kinh nghiệm đến từ các nước: Anh, Mỹ, Úc, Philipin ... Bởi vậy, những khóa học tại GLN sẽ mang lại cho bạn kiến thức, kinh nghiệm và những kỹ năng cần thiết nhất để nâng cao trình độ&nbsp;<a href="http://gln.edu.vn/article_d/c37-137/hoc-tieng-anh-nghe-noi-giao-tiep-tai-ha-noi" style="color: black; font-weight: bold; text-decoration: initial;">tiếng Anh</a>&nbsp;của mình&rdquo;.<br />\r\n	<br />\r\n	GLN hiện đang là một trong những đơn vị giảng dạy Anh văn có uy tín nhất tại Hà Nội. Bên cạnh đội ngũ giáo viên có chuyên môn cao và giàu kinh nghiệm, GLN còn cung cấp cho học viên một cơ sở học tập hiện đại và nguồn tài liệu học tập cập nhật nhất.</span></span></div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\r\n	<img alt="học tiếng anh tại trung tâm tiếng anh GLN" height="266" src="http://gln.edu.vn/img/userfiles/images/hoc-tieng-anh-tong-quat.jpg" width="400" /></div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">\r\n	<span style="font-size: small;"><span style="font-family: Arial;">Ngoài ra, đội ngũ ngũ tư vấn viên chuyên nghiệp, có kinh nghiệm sẽ tư vấn cho các bạn chương trình học, khoá học phù hợp với nhu cầu &amp; mục tiêu riêng của từng cá nhân.</span></span></div>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align="center" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">\r\n	<img alt="Đội ngũ nhân viên tại trung tâm tiếng anh GLN" height="271" src="http://gln.edu.vn/img/userfiles/images/doi-ngu-nhan-vien-tai-trung-tam-tieng-anh-gln.jpg" width="400" /></div>\r\n<p>\r\n	<br />\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: small;"><span style="font-family: Arial;">Hiện nay, GLN đang có hai trung tâm giảng dạy tại Hà Nội là GLN P. Trung Hòa &amp; GLN P. Bách Khoa. Sắp tới GLN tiếp tục triển khai mô hình này đến nhiều khu vực trên địa bàn Hà Nội &amp; Tp. HCM.&nbsp;</span></span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<h2 style="font-size: small; border-bottom-width: 0px; padding: 0px; margin: 5px 0px 10px;">\r\n	<span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial;"><b>Để biết thêm thông tin chi tiết về các&nbsp;<a href="http://gln.edu.vn/articles/c172/khai-giang-khoa-hoc-moi" style="color: black; text-decoration: initial;">khóa học tiếng anh</a>&nbsp;tại GLN, các bạn có thể liên hệ trực tiếp tại địa chỉ:</b></span></span></h2>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>', '<p>\r\n	<span id="result_box" lang="en"><span>Proposed</span> <span class="hps">this</span> <span class="hps">url</span> <span class="hps">on</span> <span class="hps">Google</span><br />\r\n	<span class="alt-edited">Pictures</span> <span class="hps">center</span><br />\r\n	<span class="alt-edited">Pictures</span> <span class="hps">courses</span><br />\r\n	<span>Event Photos</span><br />\r\n	transfer <span class="hps">photos</span></span></p>\r\n', 'Sứ mệnh'),
(2, '<p>\r\n	sdsdssdasdsd</p>', '', 'Tầm nhìn'),
(5, 'sdsdssssssssssssssss', '', 'Giá trị cốt lõi'),
(6, '<p>\n	aaaaaaaaaaaaaaaaaaaaaaa &ecirc; heheh</p>', '', 'Văn hóa công ty');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_albums`
--

CREATE TABLE IF NOT EXISTS `n_ta_albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `album_namee` text COLLATE utf8_unicode_ci NOT NULL,
  `album_avatar` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_ta_albums`
--

INSERT INTO `n_ta_albums` (`album_id`, `album_name`, `album_namee`, `album_avatar`, `category_id`) VALUES
(1, 'Album số 1', 'Number Album 1', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/tieng_anh_tre_em3-df8ed.jpg" style="width: 1024px; height: 768px;" /></p>\r\n', 1),
(2, 'thư viện ảnh 2', 'bbbbbbbbb', '<p>\r\n	<img alt="enlightened" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/lightbulb.gif" title="enlightened" width="20" /></p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_category`
--

CREATE TABLE IF NOT EXISTS `n_ta_category` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `namee` text COLLATE utf8_unicode_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_courses`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses` (
  `courses_id` int(12) NOT NULL AUTO_INCREMENT,
  `courses_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `courses_namee` text COLLATE utf8_unicode_ci NOT NULL,
  `courses_contente` text COLLATE utf8_unicode_ci NOT NULL,
  `courses_category` int(123) NOT NULL,
  `courses_content` text COLLATE utf8_unicode_ci NOT NULL,
  `courses_date` date NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_ta_courses`
--

INSERT INTO `n_ta_courses` (`courses_id`, `courses_name`, `courses_namee`, `courses_contente`, `courses_category`, `courses_content`, `courses_date`, `alias`) VALUES
(1, 'tiếng anh cho trẻ em', '5English courses 5', 'English courses English courses 6', 2, '10 điều ly kỳ về nền văn minh Maya\nVăn minh Maya không chỉ nổi bật bởi hệ thống chữ viết cổ phát triển hoàn thiện, mà còn có nền nghệ thuật, kiến trúc và hệ thống thiên văn, toán học đáng kinh ngạc. Dù các nhà khảo cổ học luôn cố gắng khám phá, nhưng đến nay vẫn còn nhiều bí ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nhân loại. ', '2012-12-11', ''),
(2, 'tiếng anh cấp 1', 'English courses 4', 'fEnglish courses English courses 5', 4, '<p>\r\n	10 điều ly kỳ về nền văn minh Maya Văn minh Maya không chỉ nổi bật bởi hệ thống chữ viết cổ phát triển hoàn thiện, mà còn có nền nghệ thuật, kiến trúc và hệ thống thiên văn, toán học đáng kinh ngạc. Dù các nhà khảo cổ học luôn cố gắng khám phá, nhưng đến nay vẫn còn nhiều bí ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nhân loại.</p>\r\n', '2012-12-18', ''),
(3, 'khóa học tiếng anh cấp 3', 'English courses 2', 'English courses English courses 3', 1, '<p>\n	10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.</p>\n<p>\n	&nbsp;</p>\n<table cellspacing="0" class="tablesorter" style="width: 986px; margin: -5px 0px 0px; color: rgb(0, 0, 0); font-family: ''Helvetica Neue'', Helvetica, Arial, Verdana, sans-serif;">\n	<tbody>\n		<tr>\n			<td style="margin: 0px; padding: 15px 10px; border-bottom-color: rgb(204, 204, 204);">\n				<p>\n					10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.<br />\n					&nbsp;</p>\n				<p>\n					&nbsp;</p>\n				<table cellspacing="0" class="tablesorter" style="width: 986px; margin: -5px 0px 0px;">\n					<tbody>\n						<tr>\n							<td style="margin: 0px; padding: 15px 10px; border-bottom-color: rgb(204, 204, 204);">\n								10 điều ly kỳ về nền văn minh Maya Văn minh Maya kh&ocirc;ng chỉ nổi bật bởi hệ thống chữ viết cổ ph&aacute;t triển ho&agrave;n thiện, m&agrave; c&ograve;n c&oacute; nền nghệ thuật, kiến tr&uacute;c v&agrave; hệ thống thi&ecirc;n văn, to&aacute;n học đ&aacute;ng kinh ngạc. D&ugrave; c&aacute;c nh&agrave; khảo cổ học lu&ocirc;n cố gắng kh&aacute;m ph&aacute;, nhưng đến nay vẫn c&ograve;n nhiều b&iacute; ẩn xung quanh một trong những nền văn minh rực rỡ nhất của nh&acirc;n loại.<br />\n								&nbsp;</td>\n						</tr>\n					</tbody>\n				</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n', '2012-12-11', ''),
(4, 'adcc', 'English courses ', 'English courses  English courses 1', 1, '<p>\r\n	acc</p>\r\n', '2013-01-10', ''),
(5, 'sd', '3English courses ', 'English courses English courses 4', 1, '<p>\r\n	fffffffffffffff vsvf</p>\r\n', '2013-01-10', ''),
(6, 'bbbbbbbbbbbb', 'English âcvdê', '<p>\r\n	English courses English courses 2</p>\r\n', 6, '<p>\r\n	ccs</p>\r\n', '2013-01-10', ''),
(7, 'ác', 'ccccccccccccccccccccc', '<p>\r\n	d</p>\r\n', 2, '<p>\r\n	c</p>\r\n', '2013-01-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_courses_cate`
--

CREATE TABLE IF NOT EXISTS `n_ta_courses_cate` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `cate_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cate_namee` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_ta_courses_cate`
--

INSERT INTO `n_ta_courses_cate` (`id`, `cate_name`, `cate_namee`, `alias`) VALUES
(1, 'Tieng anh cho mam non 1', 'english Tieng anh cho m2', 'Tieng-anh-cho-mam-non-1'),
(2, 'Tieng anh doi song', 'english Tieng anh doi song4', 'tieng anh 2'),
(4, 'Tieng anh cho tieu hoc', 'english Tieng anh cho tieu hoc3', 'tieng anh 3'),
(6, 'Tiếng anh cấp tốc', 'english Tiếng anh cấp tốc1', 'Tieng-anh-cap-toc'),
(7, 'nản thật', 'ABA English', 'nan-that');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_dichvu`
--

CREATE TABLE IF NOT EXISTS `n_ta_dichvu` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tene` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_ta_dichvu`
--

INSERT INTO `n_ta_dichvu` (`id`, `ten`, `tene`) VALUES
(1, 'Tiếng anh cho mầm non', 'english mầm non'),
(2, 'Tiếng anh cho tiểu học', 'english tiểu học'),
(3, 'Tiếng anh cho sinh viên', 'english Sinh viên'),
(4, 'dịch vụ tuyệt vời', 'vip mới có cái này hehe');

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_image`
--

CREATE TABLE IF NOT EXISTS `n_ta_image` (
  `image_id` int(12) NOT NULL AUTO_INCREMENT,
  `image_album` int(11) NOT NULL,
  `image_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image_namee` text COLLATE utf8_unicode_ci NOT NULL,
  `image_file` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_ta_image`
--

INSERT INTO `n_ta_image` (`image_id`, `image_album`, `image_name`, `image_namee`, `image_file`) VALUES
(1, 1, 'dsfd', 'englis img1', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-thu-vien-anh_19.png" style="width: 443px; height: 357px;" /></p>\r\n'),
(2, 1, 'Ảnh mẫu số 1', 'englis img12', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide1.jpg" style="width: 1024px; height: 768px;" /></p>\r\n'),
(3, 1, 'hhe', 'englis img13', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/_20-11.jpg" style="width: 455px; height: 341px;" /></p>\r\n'),
(4, 2, 'ảnh 2 ê he hehehe', 'Images 23333333333333', '<p>\r\n	<img alt="mail" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/envelope.gif" title="mail" width="20" /></p>\r\n');

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
  `lecturers_contente` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_titlee` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_image` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturers_phone` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `link_vedio` text COLLATE utf8_unicode_ci NOT NULL,
  `vote` float NOT NULL,
  `vote_tb` float NOT NULL,
  PRIMARY KEY (`lecturers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `n_ta_lecturers`
--

INSERT INTO `n_ta_lecturers` (`lecturers_id`, `lecturers_category`, `lecturers_content`, `lecturers_contente`, `lecturers_titlee`, `alias`, `lecturers_title`, `lecturers_image`, `lecturers_phone`, `link_vedio`, `vote`, `vote_tb`) VALUES
(1, 'Trợ giảng', '<p>\r\n	<em>Chủ tịch HĐQT Học viện doanh nhân TED / Chuyên gia Internet Marketing tại Việt Nam / Global Manager tập đoàn quốc tế SkyQuestCom / ...</em></p>\r\n<p>\r\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;Chuyên gia Internet Marketing của học viện doanh nhân TED.</span></p>\r\n<p>\r\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chủ tịch HĐQT Học viện doanh nhân TED.</span></p>\r\n<p>\r\n	http://www.youtube.com/watch?v=v7y-ue9z5w0</p>\r\n', 'english connetnkdnc 1', 'english Title 1', 'ong-Mai-Quý-Luc', 'Ông Mai Quý Lực', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-giang-vien_21.png" style="width: 132px; height: 99px;" /></p>\r\n', '', 'http://www.youtube.com/watch?v=v7y-ue9z5w0', 6, 3.63333),
(2, 'Thầy giáo', '<p>\r\n	<em>Viện trưởng Học viện doanh nhân GED / Giảng viên Cao cấp của dự án SIYB &ndash; ILO + VCCI, INWENT</em></p>\r\n<p>\r\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Giảng viên cao cấp quốc tế ILO</span></p>\r\n<p>\r\n	http://www.youtube.com/watch?v=p4B-moezM5Q</p>\r\n', 'english connetnkdnc 2', 'english Title 12', 'GV.-Vu-Huu-Kien', 'GV. Vũ Hữu Kiên', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-giang-vien_34.png" style="width: 132px; height: 99px;" /></p>\r\n', '', 'http://www.youtube.com/watch?v=p4B-moezM5Q', 13, 1.23077),
(3, 'Thầy giáo', '<p>\n	<span style="font-size: small; font-family: arial, helvetica, sans-serif;">- Chuyên gia tư vấn thương hiệu<br />\n	-&nbsp;Trưởng bộ môn Quản trị thương hiệu &ndash; ĐH Thương Mại</span></p>\n<p>\n	http://www.youtube.com/watch?v=C-9zQ9I76C8</p>\n', 'english connetnkdnc 13', 'english Title 13', 'PGS-TS.-Nguyen-Quoc-Thinh', 'PGS TS. Nguyễn Quốc Thịnh', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-giang-vien_36.png" style="width: 132px; height: 99px;" /></p>\n', '', 'http://www.youtube.com/watch?v=C-9zQ9I76C8', 1, 1),
(4, 'Thầy giáo', '<p>\n	&nbsp;</p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chuyên gia Internet Marketing của học viện doanh nhân TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chủ tịch HĐQT Học viện doanh nhân TED.</span></p>\n<p>\n	<span style="font-family: arial, helvetica, sans-serif; font-size: small; ">- Chuyên gia t</span><span style="font-family: arial, helvetica, sans-serif; font-size: small; ">ư vấn các giải pháp email, mạng xã hội, diễn đàn và các công cụ marketing online ít tốn kém nhất cho Doanh nghiệp.</span></p>\n<p>\n	http://www.youtube.com/watch?v=_MZECQR-qNk</p>\n', 'english connetnkdnc 14', 'english Title 14', 'Ts.-Pham-Van-Pho', 'Ts. Phạm Văn Phổ', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-giang-vien_42.png" style="width: 110px; height: 85px;" /></p>\n', '', 'http://www.youtube.com/watch?v=_MZECQR-qNk', 0, 0),
(5, 'Cô giáo', '<p>\n	&nbsp;</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	a) Chỉ đạo công tác phát triển thị trường trong nước, công tác lao động tiền lương, tài chính, giá cả.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	b) Phụ trách ngành công nghiệp nhẹ, công tác văn phòng, quan hệ với các tổ chức tài chính quốc tế.</p>\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\n	http://www.youtube.com/watch?v=yqYBnVou4-M</p>\n', 'english connetnkdnc 15', 'english Title 15', 'Ho-Thi-Kim-Thoa', 'Hồ Thị Kim Thoa', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/thutruongthoa.JPG" style="width: 110px; height: 146px;" /></p>\n', '', 'http://www.youtube.com/watch?v=yqYBnVou4-M', 0, 0),
(6, 'Thầy giáo', '<p>\r\n	&nbsp;</p>\r\n<p align="justify" style="margin-top: 10px; margin-bottom: 10px">\r\n	a) Chỉ đạo tổng hợp công tác quản lý cạnh tranh, kiểm soát độc quyền, chống bán phá giá, chống trợ cấp và tự vệ, bảo vệ quyền lợi người tiêu dùng. Trưởng Đoàn đàm phán Chính phủ về hội nhập kinh tế thương mại quốc tế. hóa Việt Nam tại các nước SNG (trừ Liên Bang Nga, Belarus và Kazakhstan). </p>\r\n', 'english connetnkdnc 1english connetnkdnc 1english connetnkdnc 1english connetnkdnc 16', 'english Title 16', 'Tran-Quoc-Khanh', 'Trần Quốc Khánh', '<p>\r\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/TranQuocKhanh.gif" style="width: 90px; height: 122px;" /></p>\r\n', '', 'http://www.youtube.com/watch?v=EXjMVukZw7w', 0, 0),
(7, 'Thầy giáo', '<p>\r\n	nội dung việt nam</p>\r\n', '<p>\r\n	Englisgh heheh</p>\r\n', '', 'trungoc', 'trungoc', '<p>\r\n	<img alt="mail" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/envelope.gif" title="mail" width="20" /></p>\r\n', '', '0', 1, 5),
(8, 'Thầy giáo', '<p>\r\n	dvsvs</p>\r\n', '<p>\r\n	aaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '', 'GV.-Vu-Huu-Kien', 'GV. Vũ Hữu Kiên', '<p>\r\n	<img alt="no" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/thumbs_down.gif" title="no" width="20" /></p>\r\n', '', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_ta_news`
--

CREATE TABLE IF NOT EXISTS `n_ta_news` (
  `news_id` int(12) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_titlee` text COLLATE utf8_unicode_ci NOT NULL,
  `news_contente` text COLLATE utf8_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `news_post_date` date NOT NULL,
  `news_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_category` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `n_ta_news`
--

INSERT INTO `n_ta_news` (`news_id`, `news_title`, `news_titlee`, `news_contente`, `news_content`, `news_author`, `news_post_date`, `news_image`, `alias`, `news_category`) VALUES
(2, 'Tại sao cần phải cho trẻ học sớm từ 5 tuổi?', 'Englist title2', 'English  Content 13', '<p>\n	&nbsp;</p>\n<div>\n	<span style="COLOR: #ff0000"><strong>Ông Gavan Iacono - Tổng Giám đốc Language Link Việt Nam</strong></span></div>\n<div>\n	&nbsp;</div>\n<div>\n	<span style="COLOR: #000000">Thay mặt đoàn tư vấn và toàn thể giáo viên, nhân viên&nbsp;Language Link Việt Nam, xin được gửi đến quý độc giả báo điện tử <em>Dân trí</em> lời chào trân trọng nhất. Xin mời độc giả cùng theo dõi buổi tư vấn &ldquo;Chuẩn bị cho trẻ em 5 đến 7 tuổi học tiếng Anh thế nào?&rdquo;. </span></div>\n<p>\n	&nbsp;</p>\n<p>\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghiên cứu giáo dục trẻ thông minh sớm VSK </span></strong></p>\n<div>\n	Chào bạn,</div>\n<div>\n	&nbsp;</div>\n<div>\n	Lúc 5 tuổi&nbsp;là giai đoạn thần kinh não bộ của trẻ phát triển với tốc độ rất nhanh, tạo thuận lợi cho việc kích hoạt nhiều loại tiềm năng sớm của trẻ, trong đó có tiềm năng ngoại ngữ. Nhiều chuyên gia quốc tế gọi đây là &ldquo;thời kỳ vàng&rdquo; quyết định đỉnh cao của sự phát triển ngôn ngữ và ngoại ngữ cho trẻ sau này. Nhiều học sinh đạt giải cao về tiếng Anh, như Hoàng Hải Linh, &nbsp;Đỗ Nhật Nam,... đã bắt đầu được kích hoạt năng khiếu tiếng Anh từ giai đoạn này.</div>\n<p>\n	Việc kích hoạt sớm tiếng Anh sẽ giúp trẻ phát triển nhiều loại trí thông minh góp phần dẫn đến sự thành đạt trong tương lai: trẻ sẽ tư duy tích cực hơn khi biết thêm một cách diễn đạt mới khác với cách diễn đạt bằng tiếng mẹ đẻ, trẻ sẽ hiểu tiếng Việt rõ hơn, ngôn ngữ sẽ phong phú hơn, tương tác sẽ được mở rộng hơn, cảm xúc của trẻ sẽ cân bằng hơn nhờ sự bổ sung lẫn nhau giữa hai cách giao tiếp bằng tiếng Việt và tiếng Anh.</p>\n<p>\n	<strong><span style="COLOR: #ff0000">Ông Gavan Iacono - Tổng Giám đốc Language Link Việt Nam</span></strong></p>\n<p>\n	Tôi cung cấp thêm một kết luận khoa học của các giáo sư tại Đại học Washington (Mỹ) đã chứng minh rằng, trẻ học ngôn ngữ thứ hai sớm không những có khả năng phát âm chuẩn xác mà còn có khả năng tập trung chú ý tốt hơn, phát triển khả năng quan sát và phân tích, từ đó tư duy của trẻ cũng được phát triển.</p>\n<p>\n	Con người sinh ra với bản năng tự nhiên trong học ngôn ngữ và nhu cầu giao tiếp. Đầu tiên, chúng ta chỉ biết khóc. Nhưng cho đến khi lên bốn, chúng ta có thể giao tiếp với gia đình và bạn bè, một sự thay đổi đáng kinh ngạc từ việc không biết một ngôn ngữ nào trở thành thuần thục một ngôn ngữ khi 4 tuổi. Và bước tiến này được thấy ở tất cả chúng ta và ở mỗi đứa trẻ ta vẫn thấy thường ngày. Trẻ khám phá ngôn ngữ đó qua việc trò chuyện với người lớn và mắc các lỗi sai trong ngôn ngữ hay qua chơi đùa và trò chuyện với những bạn cùng tuổi.</p>\n<p>\n	Và điều kỳ diệu là trẻ nhỏ vẫn đang vận dụng những chiến lược học ngôn ngữ có tính bẩm sinh của riêng các em vào việc tiếp nhận tiếng mẹ đẻ và sẽ sớm nhận thấy rằng, các em cũng có thể áp dụng những chiến lược này vào việc học tiếng Anh. Vì một lý do nào đó, trí não con người bắt đầu thay đổi trước tuổi dậy thì và tuổi trưởng thành, mất đi khả năng dễ dàng tiếp thu một ngôn ngữ. Cuối cùng, trí não của đứa trẻ 8 tuổi sẽ trở thành trí não của một người lớn không có khả năng tiếp thu ngôn ngữ tự nhiên. Đó cũng là một trong những lý do mà phụ huynh cần cho trẻ học sớm từ 5 tuổi.</p>\n<div>\n	Nhưng tôi cũng lưu ý với các bậc phụ huynh là ngay từ nhỏ, nếu trẻ được tiếp xúc nhiều với các giáo viên bản ngữ hoặc môi trường tiếng Anh chuẩn, phát âm của cháu sẽ thực sự chuẩn xác. Đây là vấn đề rất quan trọng nếu như bố hoặc mẹ muốn con nói như người bản xứ, vì sau này khi các cháu lớn lên, tư duy ngôn ngữ đã được định hình rồi thì rất khó để có được accent chuẩn.</div>\n<div>\n	&nbsp;</div>\n<div>\n	<div align="center">\n		&nbsp;</div>\n	<div align="center">\n		&nbsp;</div>\n	<div align="center">\n		<div>\n			<div>\n				<img _fl="" align="middle" alt="Ông Gavan Iacono (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/mr-g-c7762.jpg" style="MARGIN: 5px" width="455" /></div>\n		</div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Ông Gavan Iacono (<em>bên trái</em>) - Tổng giám đốc điều hành Language Link Việt Nam đang trả lời thắc mắc của độc giả <em>Dân trí</em> trong buổi tư vấn.</span></div>\n</div>\n<p>\n	<em><span style="COLOR: #000080">Có cần cho bé học tiếng Anh trước khi vào trường quốc tế hay không? </span></em></p>\n<p>\n	<strong><span style="COLOR: #ff0000">Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghiên cứu giáo dục trẻ thông minh sớm VSK</span></strong></p>\n<div>\n	Nếu đó là trường tiểu học quốc tế thì cần cho trẻ làm quen hàng năm trước đó với tiếng Anh để tạo tiền đề cho trẻ có khả năng giao tiếp bằng tiếng Anh trong trường học. Nếu đó là trường mầm non quốc tế có dạy tiếng Anh thì cũng cần cho trẻ đến thêm một Trung tâm giảng dạy tiếng Anh khác ngoài hệ thống mầm non để kích hoạt tiềm năng tiếng Anh của trẻ với người bản xứ theo một phương pháp khác bổ sung cho phương pháp ở nhà trường. Những tiến bộ của trẻ ở Trung tâm tiếng Anh bên ngoài sẽ là thước đo chất lượng giáo dục toàn diện của nhà trường, trong đó có khía cạnh giáo dục sự tự tin, sự thích nghi của trẻ trước những môi trường khác, trước một nhóm bạn khác ngoài môi trường học đường quen thuộc. Ngoài ra đến Trung tâm, trẻ sẽ có cơ hội được gặp thêm các thầy giáo, bổ sung cho gương mặt các cô giáo ở các trường mầm non và tiểu học, giúp các bé trai tránh xu hướng bị &ldquo;nữ tính hoá&rdquo; trong giai đoạn phát triển rất nhạy cảm này.</div>\n<div>\n	&nbsp;</div>\n<div>\n	<div align="center">\n		<div>\n			<div>\n				<img _fl="" align="middle" alt="Tiến sĩ Nguyễn Minh Đức (" src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/ts-Duc-c7762.jpg" width="455" /></div>\n		</div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Tiến sĩ Nguyễn Minh Đức (<em>bên phải</em>) - Tiến sĩ Nguyễn Minh Đức - Viện trưởng Viện nghiên cứu giáo dục trẻ thông minh sớm VSK đang tư vấn cho độc giả <em>Dân trí</em></span>.</div>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/259918_112783518884457_1364082893_n.jpg" style="width: 332px; height: 500px;" /></p>\n', 'Tai-sao-can-phai-cho-tre-hoc-som-tu-5-tuoi?', 'Tiếng Anh mầm non'),
(3, 'Dạy tiếng Anh liên kết ở tiểu học: “Ép” theo kiểu tự nguyện', 'Englist title7', 'English  Content 18', '<p>\n	&nbsp;</p>\n<h2 class="fon33 mt1">\n	&nbsp; Chương trình đưa tiếng Anh vào trường tiểu học đã được triển khai từ năm 2008, đến nay đã có hơn 400 trường thí điểm và triển khai. Tuy nhiên, quá trình triển khai đã bộc lộ một số vấn đề bất cập, gây nghi ngại cho phụ huynh học sinh khi quyết định cho HS theo học.</h2>\n<div class="fon34 mt3 mr2 fon43">\n	<p>\n		Petrotimes đã có cuộc trao đổi với ông Phạm Xuân Tiến&nbsp;- Trưởng phòng Giáo dục tiểu học (Sở GD-ĐT Hà Nội) về vấn đề này.&nbsp;</p>\n	<p>\n		<em>PV:</em> <em>Thưa ông, qua khảo sát, có nhiều trường tiểu học trên địa bàn Hà Nội phối hợp với các công ty, trung tâm đưa tiếng Anh liên kết vào giảng dạy. Điều này có nằm ngoài sự chỉ đạo của Sở GD-ĐT Hà Nội hay không?</em></p>\n	<p>\n		<strong>Ông Phạm Xuân Tiến</strong>: Tôi khẳng định điều này không nằm ngoài sự chỉ đạo của Sở GD-ĐT và Bộ GD-ĐT cũng đã cho phép.</p>\n	<p>\n		<em>PV:</em> <em>Việc các trường được phép phối hợp với các công ty, trung tâm đưa chương trình liên kết tiếng Anh, Sở GD-ĐT có quy định gì không? Quy trình cấp phép cho các công ty, trung tâm và các chương trình được tiến hành ở những khâu nào, thưa ông?</em></p>\n	<p>\n		<strong>Ông Phạm Xuân Tiến</strong>: Đối với chương trình liên kết trong nhà trường, các công ty xây dựng đề án và trình bày với lãnh đạo Sở, Phòng giáo dục tiểu học và các bộ phận chuyên môn. Sau đó, Sở sẽ cho phép thí điểm ở 1 số trường. Trong quá trình thí điểm, tổ chức hội thảo với sự tham gia của lãnh đạo Sở, chuyên viên phòng Tiểu học, chuyên viên phụ trách tiếng Anh; về phía cơ sở có phòng GD-ĐT, hiệu trường, giáo viên tiếng Anh và đặc biệt, PHHS cũng tham gia vào buổi hội thảo này.</p>\n	<p>\n		Chúng tôi có dự giờ, kiểm tra trình độ học sinh ngay trong quá trình thí điểm. Sau khi kết thúc thí điểm, chúng tôi có tổ chức hội thảo đánh giá và xin ý kiến chỉ đạo của Bộ GD-ĐT đối với từng chương trình để cho phép triển khai. Các chương trình này thường được thí điểm trong vòng 1 năm.</p>\n	<div align="center">\n		<div>\n			<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt"><img _fl="" align="middle" alt="Ông Phạm Xuân Tiến - Trưởng phòng Giáo dục tiểu học (Sở GD-ĐT Hà Nội)." src="http://dantri4.vcmedia.vn/vtfPRccccccccccccodZ/Image/2012/11/ong-tien-5f3ac.jpg" style="MARGIN: 5px" width="360" /></span></div>\n	</div>\n	<div align="center">\n		<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Ông Phạm Xuân Tiến - Trưởng phòng Giáo dục tiểu học (Sở GD-ĐT Hà Nội).</span></div>\n	<p>\n		<em>PV:</em> <em>Thưa ông, hiện nay có bao nhiêu trung tâm, chương trình được cấp phép để đưa vào trường học? Sở GD-ĐT giám sát hiệu quả thực thi đến đâu?</em></p>\n	<p>\n		<strong>Ông Phạm Xuân Tiến</strong>: Hiện nay, có 6 chương trình cũng như trung tâm đã được cấp phép, gồm có Phonics (VPBox), Language Link, Victoria, Dynet, Washington và Bình Minh. Đối với những chương trình có giáo viên người nước ngoài giảng dạy, sẽ được Phòng Giáo dục có yếu tố nước ngoài thẩm định về mặt pháp lý.</p>\n	<p>\n		Sau khi Sở cấp phép, sẽ giao cho các phòng GD-ĐT, cho phép các đơn vị làm việc với các nhà trường, đi đến thỏa thuận hợp tác đưa chương trình tiếng Anh này vào dạy trong các nhà trường. Về phân cấp, các trường tiểu học trực thuộc các phòng GD-ĐT, do vậy, Sở giám sát việc giảng dạy thông qua báo cáo từ các phòng GD-ĐT tổ chức những đợt kiểm tra đột xuất và tổ chức tập huấn, hội thảo.</p>\n	<p>\n		Hiện chưa có trường ĐH nào có chuyên ngành đào tạo riêng cho giáo viên dạy tiếng Anh ở tiểu học, các giáo viên tiếng Anh hiện nay chưa được đào tạo chuyên sâu về tâm lý học sinh tiểu học. Vì thế, Sở đã tổ chức rất nhiều cuộc tập huấn cho đối tượng giáo viên này và tôi khẳng định đội ngũ giáo viên dạy tiếng Anh được tham gia nhiều đợt tập huấn nhất.</p>\n	<p>\n		Mỗi chương trình có ít nhất 2 đợt tập huấn cho giáo viên, kéo dài trong khoảng 2 ngày. Còn với chương trình theo đề án 2020 (Đề án dạy và học ngoại ngữ trong hệ thống giáo dục quốc dân giai đoạn 2008 - 2020 - PV) của Bộ GD-ĐT, mỗi đợt tập huấn kéo dài khoảng 3 tháng, trong đó có 2 tháng học tập trung và 1 tháng đào tạo từ xa.</p>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/63313_112783715551104_1625938110_n.jpg" style="width: 950px; height: 400px;" /></p>\n', 'Day-tieng-Anh-lien-ket-o-tieu-hoc:-“ep”-theo-kieu-tu-nguyen', 'Tiếng Anh tiểu học'),
(4, 'Vì sao sinh viên ra trường không nói được tiếng Anh?', 'Englist title', 'English  Content 1', '<p>\n	&nbsp;</p>\n<div class="atc_desc">\n	<span id="_ctl0_rContent_lbDesc">Xu thế đào tạo tiếng Anh hiện nay là &ldquo;giảng dạy tiếng Anh như một ngôn ngữ quốc tế&rdquo;,&nbsp; trong đó các biến thể khác nhau của tiếng Anh được giới thiệu trong chương trình học. VN cũng không nằm ngoài xu thế này, nhất là trong bối cảnh hội nhập như hiện nay.</span></div>\n<div class="atc_txt">\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody"><span style="font-weight: bold;">Không sử dụng được</span></span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Tình hình giảng dạy tiếng Anh trong các trường ĐH không chuyên ngữ ở VN có thể gói gọn ở một vài điểm như sau:</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ nhất, thời lượng đào tạo tiếng Anh không đủ để đào tạo 100% sinh viên của trường khi ra trường có trình độ mà các nhà tuyển dụng yêu cầu. Thực tế cho thấy cả giảng viên và sinh viên ở các trường này đều không có đủ thời gian để đào tạo và tiếp thu kiến thức một cách trọn vẹn.</span></p>\n	<div style="text-align: center;">\n		<div>\n			<div>\n				<p align="justify">\n					<span id="_ctl0_rContent_lbBody"><img align="" alt="" border="0" src="http://huc.edu.vn/userfiles/assets/huc.tiengAnh111.jpg" /></span></p>\n			</div>\n		</div>\n	</div>\n	<div style="text-align: center;">\n		<div style="color: rgb(105, 105, 105);">\n			<p align="justify">\n				<span id="_ctl0_rContent_lbBody"><span style="font-weight: bold;">Một lớp học tiếng Anh</span></span></p>\n		</div>\n	</div>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Số liệu khảo sát tại 18 trường ĐH VN cho thấy điểm bình quân sinh viên năm nhất dao động ở mức 220-245/990 điểm TOEIC, và với mức điểm này sinh viên cần khoảng 360 giờ đào tạo (480 tiết) để đạt được 450-500 điểm TOEIC - mức điểm mà rất nhiều doanh nghiệp đang coi là mức tối thiểu để họ chấp nhận hồ sơ. Tuy nhiên, theo số liệu khảo sát của Vụ Giáo dục ĐH, thường các trường chỉ có khoảng 225 tiết học tiếng Anh cho sinh viên.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ hai, trình độ của sinh viên không đồng đều và có sự khác biệt khá lớn về năng lực tiếng Anh giữa họ. Thường trong một lớp học sẽ bao gồm các trình độ từ sơ cấp (gồm những sinh viên học tiếng Anh lần đầu) đến trung cấp (những sinh viên đã học hệ đào tạo tiếng Anh chín năm). Những lớp học đa trình độ như vậy sẽ gây nhiều khó khăn cho giảng viên, khiến họ khó có thể quán xuyến hết tất cả sinh viên, từ đó gây trở ngại cho cả việc dạy và học.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Theo số liệu đánh giá 9.948 sinh viên năm nhất của 13 trường ĐH cho thấy điểm bình quân là 250 điểm TOEIC, tuy nhiên điểm số dao động từ 50-850 điểm. Như vậy sự chênh lệch ở trình độ đầu vào của sinh viên các trường rất lớn. Có những sinh viên gần như không biết tiếng Anh và có những bạn trình độ đã rất giỏi (cao cấp), ở trình độ 850 điểm TOEIC - mức chuẩn mà nếu Bộ GD-ĐT dùng làm chuẩn giáo viên giảng dạy tiếng Anh cũng đã rất tốt và không dễ đạt được. Như vậy nếu bắt những sinh viên này phải ngồi học tiếng Anh trong bốn năm ở trường là rất lãng phí và không hợp lý. Trong khi đó cần có giải pháp cho những sinh viên có trình độ mới bắt đầu học.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Thứ ba là đào tạo tiếng Anh ở các khối không chuyên thường có xu hướng tập trung quá nhiều vào tiếng Anh chuyên ngành chứ không phải là rèn luyện kỹ năng tiếng Anh. Do đó, cho dù họ có học các thuật ngữ hay các từ ngữ tiếng Anh chuyên ngành thì cũng khó có thể nâng cao các kỹ năng nghe, nói, đọc, viết tiếng Anh trong giao tiếp.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Rất nhiều trường tập trung nhiều vào xây dựng chương trình và thời gian đào tạo tiếng Anh chuyên ngành, trong khi đó năng lực sử dụng tiếng Anh (English proficiency) của sinh viên còn rất hạn chế và dẫn đến kết quả là sinh viên học nhưng không sử dụng được.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Số lượng trường triển khai áp dụng các chuẩn đánh giá quốc tế cho sinh viên ra trường như TOEFL và TOEIC còn hạn chế. (Số liệu năm 2008: có 14,4% số trường đã áp dụng chuẩn TOEIC). Trong khi đó rất nhiều doanh nghiệp và tổ chức đặt chuẩn ngoại ngữ theo TOEIC hoặc TOEFL làm tiêu chuẩn tuyển dụng. Điều này dẫn đến tình trạng: có khá nhiều sinh viên ra trường nộp hồ sơ xin việc khi được yêu cầu có chứng chỉ TOEIC mới đi thi để kịp có điểm nộp hồ sơ. Do thời hạn nộp hồ sơ ngắn nên các sinh viên này rất bị động trong việc chuẩn bị cho kỳ thi, về cả thời gian lẫn chuyên môn.</span></p>\n	<p align="justify">\n		<span id="_ctl0_rContent_lbBody">Cuối cùng, các sinh viên khối không chuyên ngữ học tiếng Anh nhưng khả năng sử dụng tiếng Anh trong các tình huống thực tế rất hạn chế và có thể nói rằng phần lớn không sử dụng được. Như vậy tình hình chung là khả năng sử dụng được tiếng Anh trong môi trường làm việc của sinh viên sau khi tốt nghiệp ĐH là rất hạn chế và không đáp ứng được yêu cầu của đại đa số các đơn vị sử dụng lao động.</span></p>\n</div>\n<p>\n	&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/trang-chu_152(2).gif" style="width: 275px; height: 183px;" /></p>\n', 'Vi-sao-sinh-vien-ra-truong-khong-noi-duoc-tieng-Anh?', 'Tiếng Anh cho sinh viên'),
(5, 'Học tiếng anh giao tiếp qua các tình huống', 'Englist title11', 'English  Content 12', '<p>\n	&nbsp;</p>\n<h4>\n	<strong>Học tiếng anh giao tiếp qua các tình huống làm việc hàng ngày là đặc trưng căn bản của chương trình Tiếng Anh Cho Người Đi Làm với các buổi học hứng thú, và khả năng ứng dụng cao cho công việc.</strong></h4>\n<p style="text-align: center;">\n	<img alt="aroma tieng anh cho nguoi di lam" class="aligncenter" height="420" src="http://aroma.vn/b/aroma-tieng-anh-cho-nguoi-di-lam.jpg" title="AROMA Tiếng Anh Cho Người Đi Làm" width="615" /></p>\n<p>\n	&lt;h2 left;\\&quot;=&quot;&quot;&gt;Người Đi Làm Học Tiếng Anh</p>\n<p>\n	<strong>Người Đi Làm học Tiếng Anh</strong> là đối tượng Học viên với nhiều điểm đặc thù, do đó cần có một chương trình riêng, và cách giảng dạy phù hợp</p>\n<p>\n	So với đối tượng Học sinh, Sinh viên thì Học viên là Người Đi Làm có nhu cầu rất riêng:</p>\n<p>\n	- Nội dung học đặc thù hướng tới và phục vụ cho công việc hàng ngày.</p>\n<p>\n	- Độ tuổi và tương ứng với nó là tâm lí, đặc điểm riêng trong cách học</p>\n<p>\n	- Là người có kinh nghiệm và vốn sống, nên cách thức dạy &ndash; học, giao tiếp trong lớp cũng khác.</p>\n<h2>\n	Tiếng Anh Giao Tiếp Cho Người Đi Làm</h2>\n<p style="text-align: justify;">\n	<span style="color: #ff9900;"><strong>aroma</strong></span> phát triển một chương trình học <strong>Tiếng Anh giao tiếp dành riêng cho Người Đi Làm</strong>, thiết kế phù hợp với đặc điểm và nhu cầu Học viên.</p>\n<p style="text-align: justify;">\n	<strong>- Nội dung học</strong>: giao tiếp Tiếng Anh thông qua các tình huống làm viêc điển hình hàng ngày. Bổ sung thêm phần luyện phát âm chuẩn, luyện viết và các hoạt động giao tiếp nhập vai thực tế.</p>\n<p style="text-align: justify;">\n	<strong>- Phương pháp dạy-học</strong>: lấy Học viên là trung tâm, tạo động lực và khuyến khích học viên rèn luyện phản xạ nghe nói &ndash; giao tiếp và sử dụng Tiếng Anh trong thực tế một cách tự nhiên.</p>\n<p style="text-align: justify;">\n	<strong>- Giáo viên</strong>: trình độ cao, có phương pháp giảng dạy tốt và tinh thần chia sẻ, nhiệt tình. Hơn nữa, Giáo viên cũng có kinh nghiệm làm việc thực tế trong môi trường chuyên nghiệp nên sẽ thấu hiểu nhu cầu và chia sẻ với Học viên dễ dàng.</p>\n<p style="text-align: justify;">\n	- <strong>Học viên</strong>: chỉ bao gồm người đi làm, không học lẫn với học sinh &ndash; sinh viên, mang lại một môi trường học đồng nhất, cởi mở.</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/slide4.jpg" style="width: 1600px; height: 1081px;" /></p>\n', 'Hoc-tieng-anh-giao-tiep-qua-cac-tinh-huong', 'Tiếng Anh cho sinh viên'),
(6, 'Dạy tiếng Anh thiếu nhi: 6 nguyên tắc vàng', '8', 'English  Content 19', '<p>\n	&nbsp;</p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Đề án &quot;Dạy và học ngoại ngữ&quot; trong hệ thống giáo dục quốc dân giai đoạn 2008-2020 đã được Thủ tướng Chính phủ phê duyệt năm 2008. Đặc biệt, trong đề án, dạy và học tiếng Anh có vị trí vô cùng quan trọng, nhất là việc dạy và học cho thiếu nhi. Có 6 nguyên tắc vàng trong dạy tiếng Anh cho thiếu nhi để việc dạy và học có hiệu quả</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Chơi hơn dạy. Chính xác phải nói đây là phương pháp &quot;Dạy mà không dạy&quot;, trong đó, giáo viên lên lớp không theo một giáo trình nhất định nào cả và tư tưởng chủ đạo không phải là dạy mà là tạo sân chơi đa dạng, nhiều màu sắc bằng tiếng Anh cho học sinh. Từ đó, hướng dẫn học sinh tự làm chủ sân chơi và từng bước tự bổ sung các hoạt động khác nhau.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Hoạt động, hình ảnh hơn lý thuyết. Hình ảnh, trò chơi, nhạc họa, diễn kịch... nói chung là các hoạt động nhằm giúp học sinh tham gia vào môi trường sử dụng tiếng Anh một cách tự nhiên, không gượng ép.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Các hoạt động đa dạng sẽ giúp học sinh từng bước hình thành phong cách riêng trong học tập. Phong cách riêng chính là nền tảng của chất lượng và hiệu quả học tập.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Học cụ hơn giáo trình. Việc bám theo một giáo trình nào đó sẽ hạn chế năng lực sáng tạo của cả thầy lẫn trò. Hơn nữa, để có thể đa dạng hóa các hoạt động trong lớp, việc tăng cường học cụ là điều cần thiết.</span></p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Cần chú ý những học cụ (kể cả bài hát, trò chơi, diễn kịch...) bình thường dễ kiếm để làm tăng hoạt động của học sinh, nhất là cần khuyến khích học sinh tìm kiếm thêm các học cụ làm phong phú hóa quá trình học tập.</span></p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/45030_124868074342668_104047202_n.jpg" style="width: 950px; height: 400px;" /></p>\n', 'Day-tieng-Anh-thieu-nhi:-6-nguyen-tac-vang', 'Tiếng Anh tiểu học'),
(7, '“Ép” trẻ mầm non học tiếng Anh: “Núp bóng” tự nguyện', 'Englist title3', 'English  Content 14', '<p>\n	&nbsp;</p>\n<div>\n	Hiện nay, không chỉ tại&nbsp;các thành phố lớn như TPHCM, Hà Nội mà ở các các tỉnh thành khác trong đó có Thanh Hóa, một số&nbsp;trường mầm non&nbsp;đưa Tiếng Anh vào dạy ở bậc Mầm non, nhưng mới chỉ là thí điểm, dạy ngoại khóa với hình thức tự nguyện. Đó là cách làm tự phát, nhưng chỉ trong thời gian ngắn đã xuất hiện nhiều dư luận trái chiều.</div>\n<div>\n	&nbsp;</div>\n<div>\n	Theo phản ánh của một số phụ huynh có con em đang theo học tại Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị xã Bỉm Sơn, Thanh Hóa&nbsp;thì trường này đã tự ý đưa môn Tiếng Anh vào chương trình giảng dạy bắt buộc đối với lớp mẫu giáo lớn 5 tuổi và thuê giáo viên ở ngoài về dạy. Trong các khoản thu thì tiền học Tiếng Anh cũng được đưa vào khoản thu bắt buộc. Học sinh (HS)&nbsp;nào cũng phải học, mức đóng 30.000đ/tháng/HS. Phụ huynh bức xúc nhưng không ai dám lên tiếng vì tâm lý &ldquo;muốn con hay chữ phải yêu lấy thầy&rdquo;. Hơn nữa đây là một trường tư thục nên việc cho con theo học tại đây đồng nghĩa với việc chấp nhận mọi thứ nhà trường đề ra.</div>\n<div>\n	<p>\n		Còn đối với trẻ mầm non học lớp 3 - 4 tuổi thì môn Tiếng Anh là tự nguyện, phụ huynh nào thích đăng ký cho con em mình theo học thì đăng ký. Ngoài ra, các môn aerobic, nhạc, vẽ là tự nguyện&hellip;</p>\n</div>\n<p>\n	&nbsp;</p>\n<div style="TEXT-ALIGN: center">\n	<img _fl="" align="middle" alt="Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị xã Bỉm Sơn, Thanh Hóa." src="http://dantri4.vcmedia.vn/OjRsnUq3VYRgf5mG4vC/Image/2012/09/DSCN4654-bf77d.JPG" style="MARGIN: 5px" width="450" /></div>\n<div style="TEXT-ALIGN: center">\n	<span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Trường Mầm non tư thục Ngọc Trạo, phường Ngọc Trạo, thị xã Bỉm Sơn, Thanh Hóa.</span></div>\n<p>\n	&nbsp;</p>\n<p>\n	Việc các cháu mẫu giáo còn đang tập làm quen đánh vần với bảng chữ cái Tiếng Việt khá vất vả, thì việc đưa chương trình Tiếng Anh vào trường mầm non liệu có hợp lý và mang lại hiệu quả hay không khi mà thời gian biểu của các cháu hầu như dày đặc?</p>\n<p>\n	Một phụ huynh chia sẻ: &ldquo;Các cháu đang còn tuổi ăn, tuổi chơi thế nhưng bắt con theo học nhiều thế này không biết có vào đầu các cháu được không? Tôi nghĩ khi Tiếng Việt còn chưa thạo thì làm sao mà học được Tiếng Anh&rdquo;.</p>\n<p>\n	Tại Trường Mầm non tư thục Ngọc Trạo, các cháu HS phải học cả tuần, buổi sáng học các môn theo quy định, buổi chiều lại phải học Tiếng Anh. Nếu như năm học 2011 - 2012, các cháu phải học môn Tiếng Anh chỉ có 6 buổi/tuần thì năm nay đã tăng lên 8 buổi/tuần. Cùng với đó là mức tiền học phí riêng cho môn này cũng có sự thay đổi từ 15.000đ/cháu/tháng lên 30.000đ/cháu/tháng.</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/DSCN4654-bf77d.JPG" style="width: 275px; height: 184px;" /></p>\n', '“ep”-tre-mam-non-hoc-tieng-Anh:-“Nup-bong”-tu-nguyen', 'Tiếng Anh mầm non'),
(8, 'THÍ ĐIỂM DẠY TIẾNG ANH BẬC MẦM NON', 'Englist title4', 'English  Content 15', '<p>\n	&nbsp;</p>\n<p style="text-align: justify;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Giảng dạy tự phát tiếng Anh ở bậc mầm non, nếu không có chương trình và giảng dạy một cách khoa học sẽ phản tác dụng.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Lấy lý do xuất phát từ nhu cầu của phụ huynh, nhiều trường mầm non (MN) tại TPHCM đã đưa môn tiếng Anh vào giảng dạy dưới các hình thức ngoại khóa và học năng khiếu.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Tuy nhiên, với hình thức giảng dạy tự phát (do các trường tự hợp đồng với các trung tâm ngoại ngữ) cùng với giáo trình và giáo viên (GV) chưa có chuẩn mực cụ thể, nhiều phụ huynh không biết việc học như vậy có hiệu quả, nhất là khi trẻ quá nhỏ.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent"><strong>Thí điểm 2 tháng rồi thôi</strong><br />\n	Tháng 10-2011, Sở GD-ĐT TPHCM đồng ý cho Công ty TNHH Dịch vụ giáo dục Poly (Hàn Quốc) đưa chương trình tiếng Anh vào giảng dạy thí điểm tại 4 trường MN, gồm: Trường MN TP, Trường MN Bé Ngoan (quận 1), Trường MN Tuổi Thơ 7 (quận 3) và Trường MN Vàng Anh (quận 5), trong đó mỗi trường chọn ngẫu nhiên 30 đến 40 trẻ chia làm 2 lớp gồm tiếng Anh lớp chồi và tiếng Anh lớp lá.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Đại diện phía Poly cho biết sau 2 tháng dạy thí điểm (cuối tháng 12-2011), dựa trên những đóng góp từ phía GV và hội đồng chuyên môn của các trường, họ sẽ đưa chương trình về chỉnh sửa cho phù hợp và nhân rộng ra nhiều trường tại TPHCM. Tuy nhiên, thực tế phía Poly chỉ thí điểm 2 tháng rồi thôi khiến nhiều phụ huynh hoang mang.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Chị H.M, phụ huynh có trẻ học tại một trường tổ chức dạy thí điểm, cho biết: &quot;Nghe giới thiệu về chương trình, tôi rất hào hứng vì có cơ hội để cháu làm quen với tiếng Anh nhưng băn khoăn không biết chương trình đã được thẩm định chưa và vì sao chỉ thí điểm 2 tháng rồi thôi luôn? Làm như vậy không khác gì mang trẻ làm thí nghiệm, thất bại rồi phủi tay. Hiện tôi chẳng biết phải cho trẻ học tiếp theo chương trình nào. Nếu học chương trình khác, liệu có mâu thuẫn với chương trình của Poly?&quot;.</span></p>\n<p style="text-align: center;">\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent"><img alt="" height="338" src="http://www.mamnon.com/ShowTopicSubImage.aspx?id=48519" width="450" /><br />\n	<em>Ở bậc mầm non, vui chơi là hoạt động chủ đạo. Trong ảnh: Một lớp học tại Trường Mầm non Tuổi Thơ 7 (quận 3 - TPHCM). Ảnh: TẤN THẠNH</em></span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Bà Nguyễn Thị Kim Dung, Trưởng Phòng Giáo dục MN, Sở GD-ĐT TPHCM, cho biết: &quot;Qua những buổi dự giờ, chúng tôi thấy chương trình của Poly là được, thật ra họ tôn trọng mình nên mới thông qua sở, nếu họ không thông qua mà tự hợp đồng với trường thì chúng tôi cũng đành chịu vì đây không phải là chương trình chính quy. Lâu nay, các chương trình được áp dụng ở mỗi trường khác nhau nên sở không kiểm soát hết&quot;.</span></p>\n<p style="text-align: justify;">\n	<br />\n	<span class="news_content" id="ctl00_ContentPlaceHolder1_lbContent">Từ trước, việc giảng dạy tiếng Anh tại các trường MN vẫn theo kiểu &quot;mạnh ai nấy làm&quot;. Bà Đặng Thị Ánh Mai, Hiệu trưởng Trường MN Măng Non 1 (quận 10), cho biết trường hợp đồng với CIC tổ chức dạy ngoại khóa, chủ yếu là để trẻ làm quen với mặt chữ, cách phát âm và các hoạt động vui chơi.</span></p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/eng-97526.jpg" style="width: 450px; height: 338px;" /></p>\n', 'THi-dIeM-DaY-TIeNG-ANH-BaC-MaM-NON', 'Tiếng Anh mầm non'),
(9, 'Tiếng Anh mầm non: Tự phát là dao hai lưỡi', 'Englist title5', 'English  Content 16', '<p>\n	&nbsp;</p>\n<p align="justify">\n	<b>Có nhu cầu thì mở lớp</b></p>\n<p align="justify">\n	Cô Hồ Thu Thảo, Hiệu phó Trường Mầm non 19-5, cho biết: Lúc đầu trường cũng được chọn để thử nghiệm chương trình của Poly nhưng sau đó không tham gia vì điều kiện của trường chưa cho phép. Hiện tại, trường ký hợp đồng với một trung tâm ngoại ngữ để dạy tiếng Anh cho các cháu lớp lá (năm tuổi). Tương tự, tại Trường Mầm non TP, cô Lại Thị Nguyên Nhung cho biết ngoài các lớp thử nghiệm với Poly, trường cũng ký hợp đồng với Trung tâm Anh ngữ dành cho trẻ em CEC với mức học phí 60.000 đồng/tháng, tuần học hai buổi. Đây là những chương trình phục vụ nhu cầu cho phụ huynh mong muốn con mình sớm tiếp cận tiếng Anh. Nội dung học cũng chỉ là phát âm, đọc những vật dụng gia đình, các bộ phận trên cơ thể và hát bằng tiếng Anh.</p>\n<p align="justify">\n	Còn tại Trường Mầm non Sơn Ca 12 (quận Phú Nhuận), cô Nguyễn Thị Anh Hồng, Hiệu trưởng nhà trường, cho biết: Trường cũng có ký hợp đồng với Trung tâm Anh ngữ Tân Văn (trụ sở ở quận Gò Vấp) dạy tiếng Anh cho các bé năm tuổi, học phí 40.000 đồng/tháng học một tuần hai buổi. Giáo trình Tiny Talk kèm theo giáo án của trung tâm biên soạn. &ldquo;Trường có dạy tiếng Anh kiểu này lâu rồi. Nhà trường chỉ phục vụ theo nhu cầu của phụ huynh chứ nói về tính hiệu quả của việc học tiếng Anh thì không đánh giá được&rdquo; - cô Hồng nói.</p>\n<p align="center">\n	<em><img _fl="" src="http://phapluattp.vcmedia.vn/Images/Uploaded/Share/2011/12/13/18682751299-chot.jpg" style="MARGIN: 5px" width="360" /></em></p>\n<p align="center">\n	<em>Cô Trương Tố Mai (phải) đang dạy trẻ lớp lá luyện phát âm tại Trường Mầm non Bé Ngoan (quận 1, TP.HCM). Ảnh: Q.VIỆT</em></p>\n<p align="justify">\n	<b>Chương trình tiếng Anh cho trẻ mầm non</b></p>\n<p align="justify">\n	Theo bà Lê Thị Liên Hoan, Phó phòng Giáo dục mầm non - Sở GD&amp;ĐT TP, <i>các trung tâm dạy ngoại ngữ &ldquo;xâm nhập&rdquo; vào trường mầm non là do nhu cầu của phụ huynh.</i> Tuy nhiên, họ không có nghiên cứu các chương trình tiếng Anh cho trẻ mầm non của Việt Nam mà chỉ áp đặt từ các chương trình nước ngoài. &ldquo;Phòng mầm non không đủ điều kiện làm nhưng chúng tôi không bỏ lơ, cũng kiểm tra so sánh nhiều chương trình khác nhau của các trung tâm và chưa ưng ý chương trình nào hết. Chúng tôi mong muốn có một chương trình tiếng Anh cho trẻ mầm non phù hợp, dạy các cháu phát âm chuẩn càng sớm càng tốt. Vì thế, trước mắt Sở GD&amp;ĐT TP thấy chương trình của trung tâm ngoại ngữ nào phù hợp thì cho áp dụng thử nghiệm. &ldquo;Sở dĩ chúng tôi chọn Poly vì chương trình tiếng Anh này phù hợp với đặc điểm tâm sinh lý trẻ châu Á, cụ thể là Hàn Quốc có những nét tương đồng với văn hóa Việt Nam&rdquo; - bà Liên Hoan nói.&nbsp;</p>\n', 'trungoc', '2012-12-25', '<p>\n	<img alt="" src="/trungtam-tienganh/assets/trungtam-tienganh/upload/images/18682751299-chot.jpg" style="width: 360px; height: 250px;" /></p>\n', 'Tieng-Anh-mam-non:-Tu-phat-la-dao-hai-luoi', 'Tiếng Anh mầm non'),
(10, '<h2>\r\n	<span style="color:#ff0000;"><strong>Tieng anh Mam non nước ngOài Ắ</strong></span></h2>', 'Englist title6', 'English  Content 17', '<p>\r\n	abkaj hehehe</p>\r\n', 'trungdepzdai', '2013-01-11', '<p>\r\n	<img alt="crying" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/cry_smile.gif" title="crying" width="20" /></p>\r\n', '\r\n	Tieng-anh-Mam-non-nuoc-ngOai-a', 'Tiếng Anh mầm non'),
(11, '<p>\r\n	haizvd</p>', '<p>\r\n	zoooooooooooooooooodv</p>\r\n', '<p>\r\n	eng bbbbbbbbbbbbbbbbccccccccc</p>\r\n', '<p>\r\n	aaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', 'a', '2013-01-18', '<p>\r\n	<img alt="surprise" height="20" src="http://localhost/trungtam-tienganh/assets/trungtam-tienganh/ckeditor/plugins/smiley/images/omg_smile.gif" title="surprise" width="20" /></p>\r\n', '\r\n	haizvd', 'Tiếng Anh mầm non');

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
  `vedio_titlee` text COLLATE utf8_unicode_ci NOT NULL,
  `link_vedio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vedio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_ta_vedio`
--

INSERT INTO `n_ta_vedio` (`vedio_id`, `vedio_title`, `vedio_titlee`, `link_vedio`) VALUES
(1, 'facebook', 'English title1', 'http://www.youtube.com/watch?v=YJlKHwWYJlQ'),
(3, 'tiếng anh tiểu học', 'English title12', 'http://www.youtube.com/watch?v=O8-ieArU4zs'),
(4, 'Tiếng Anh Cho Người Đi Làm', 'English title13', 'http://www.youtube.com/watch?v=alJ2bRyjsoE'),
(5, 'Học tiếng anh, phương pháp hay nhất', 'English title14', 'http://www.youtube.com/watch?v=6ZWC7wI4cWI'),
(6, 'than tuong', 'gottalenta', 'http://www.youtube.com/watch?v=2xBAKuq91hY');

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
(1, 'http://www.youtube.com/watch?v=YJlKHwWYJlQ');

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
(2, 'http://www.youtube.com/watch?v=mzj8AXG7NYA'),
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
('2012-12-28', 8),
('2012-12-29', 8),
('2012-12-30', 1),
('2013-01-01', 1),
('2013-01-02', 3),
('2013-01-03', 11),
('2013-01-04', 22),
('2013-01-05', 6),
('2013-01-07', 1),
('2013-01-10', 2),
('2013-01-11', 5),
('2013-01-14', 2),
('2013-01-15', 3),
('2013-01-16', 4),
('2013-01-18', 7),
('2013-01-19', 2),
('2013-01-21', 1),
('2013-01-23', 2),
('2013-01-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `n_ttlienhe`
--

CREATE TABLE IF NOT EXISTS `n_ttlienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `diachie` text COLLATE utf8_unicode_ci NOT NULL,
  `linkface` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `zingme` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_ttlienhe`
--

INSERT INTO `n_ttlienhe` (`id`, `diachi`, `sdt`, `email`, `website`, `diachie`, `linkface`, `twitter`, `zingme`) VALUES
(1, '<p>\r\n	<span style="color: rgb(76, 76, 76); font-family: Arial; font-size: 13px; line-height: 23px;">TRUNG TÂM TIẾNG ANH JENNIFER</span></p>\r\n<p style="margin: 0px; padding: 10px 0px 0px; color: rgb(76, 76, 76); font-family: Arial; font-size: 13px; line-height: 23px;">\r\n	Thos mas - Nguyễn Ngọc Vũ - Hà Nội</p>', '123456789', 'info@jennifer.com', 'www.jenny.edu.vn', '<p>\r\n	Office Institute JENNIFER Thos Mas - Nguyen Ngoc Vu - Ha Noi</p>\r\n', 'http://www.facebook.com/NiwVietNam', 'https://twitter.com/twitter', '<script>(function(d, s, id) { 							 							          var js, fjs = d.getElementsByTagName(s)[0]; 							 							           if (d.getElementById(id)) {return;} 							 							          js = d.createElement(s); js.id = id; 							 							          js.src = "http://static.me.zing.vn/sp/js/all-1.04.js#&appId=d713b962dbf19d2dea16124b293558d1&status=true"; 							 							          fjs.parentNode.insertBefore(js, fjs); 							 							           }(document, ''script'', ''zingme-jssdk'')); 							 </script>');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2013-01-24 06:39:47', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
