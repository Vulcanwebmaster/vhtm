-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 03:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat-noithat`
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
-- Table structure for table `n_tn_accounts`
--

CREATE TABLE IF NOT EXISTS `n_tn_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `account_email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `account_phonenumber` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `account_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_password` text,
  `account_date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tn_accounts`
--

INSERT INTO `n_tn_accounts` (`account_id`, `account_fullname`, `account_address`, `account_email`, `account_phonenumber`, `account_username`, `account_password`, `account_date_create`) VALUES
(1, 'Nguyễn Đức Tiến', 'Hà Nội', 'tiendn1010@gmail.com', '0987384249', 'tiennd', 'tiennd', '2012-10-25 00:00:00'),
(2, 'nguyễn tiến mạnh', 'hà nội', 'tiendn1010@gmail.com', '0987384249', 'manhnt', 'trunngt', '2012-10-25 17:33:56'),
(3, 'nguyen duc tien', 'ha noi', 'tiendn1010@gmail.com', '0987384249', 'trungnt', 'trungnt', '2012-10-25 18:01:47'),
(4, 'nguyen duc tien', 'ha noi', 'tiendn1010@gmail.com', '0987384249', 'loannt', 'loannt', '2012-10-25 18:07:47'),
(5, 'nguyễn sơn tùng', 'vĩnh phúc', 'tungns@niw.com.vn', '0987384249', 'tungns', 'tungns', '2012-10-25 18:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_categories`
--

CREATE TABLE IF NOT EXISTS `n_tn_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name_v` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `category_name_e` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent_id` int(11) DEFAULT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `n_tn_categories`
--

INSERT INTO `n_tn_categories` (`category_id`, `category_name_v`, `category_name_e`, `category_parent_id`, `alias`) VALUES
(1, 'Phòng ngủ', '0', 0, 'Phong-ngu'),
(2, 'Phòng tắm', '0', 0, 'Phong-tam'),
(3, 'Bộ đồ ăn', '0', 0, 'Bo-do-an'),
(4, 'Phòng khách', '0', 0, 'Phong-khach'),
(6, 'Khăn tắm', '0', 2, 'Khan-tam'),
(8, 'Gối', '0', 1, 'Goi'),
(9, 'Trang trí', '0', 0, 'Trang-tri'),
(10, 'Ý tưởng quà tặng', '0', 0, 'Ý-tuong-qua-tang'),
(11, 'Bộ đồ giường', '0', 1, 'Bo-do-giuong'),
(12, 'Chăn bông', '0', 1, 'Chan-bong');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_contacts`
--

CREATE TABLE IF NOT EXISTS `n_tn_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_email` text,
  `category_id` int(11) DEFAULT NULL,
  `contact_subject` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `contact_message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `contact_date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_tn_contacts`
--

INSERT INTO `n_tn_contacts` (`contact_id`, `contact_name`, `contact_email`, `category_id`, `contact_subject`, `contact_message`, `contact_date_create`) VALUES
(1, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', 1, 'Tiêu đề 1', '<p>\r\n	Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1&nbsp;Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1Nội dung 1</p>\r\n', '2012-10-07 00:00:00'),
(7, '2', '2', 2, '2', '<p>\r\n	Nội dung của li&ecirc;n hệ 2</p>\r\n', '2012-10-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_info`
--

CREATE TABLE IF NOT EXISTS `n_tn_info` (
  `info_id` int(11) NOT NULL,
  `info_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `info_content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_tn_info`
--

INSERT INTO `n_tn_info` (`info_id`, `info_name`, `info_content`) VALUES
(1, 'facebook', 'http://facebook.com.vn'),
(2, 'twitter', 'http://twitter.com.vn'),
(3, 'movil', 'http://movil.com.vn'),
(4, 'telefono', 'TEL: 1-877-550-1107');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_products`
--

CREATE TABLE IF NOT EXISTS `n_tn_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name_v` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name_e` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image2` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_date_create` datetime DEFAULT NULL,
  `product_date_edit` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `is_new` int(1) DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhphan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `care` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_ma` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_tn_products`
--

INSERT INTO `n_tn_products` (`product_id`, `product_name_v`, `product_name_e`, `alias`, `product_price`, `product_image`, `product_image2`, `product_date_create`, `product_date_edit`, `category_id`, `is_new`, `mota`, `thanhphan`, `care`, `product_ma`, `size`) VALUES
(2, 'gối', '0', 'goi', '200.000', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_1_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '2012-10-08 00:00:00', '2012-11-22 00:00:00', 6, 1, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' Không giặt tẩy</br>\nKhông giặt tẩy</br>\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in '),
(3, 'Bộ gối đẹp', '0', 'bo-goi-dep', '500.000.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/0887000999_1_1_2.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '2012-10-23 15:14:31', '2012-11-22 00:00:00', 6, 1, 'Fiber cushion filling.', '35% POLYPROPYLENE', ' Không giặt tẩy\nKhông giặt tẩy\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in '),
(4, 'Giường nguyên bộ', '0', 'giuong-nguyen-bo', '25.000.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/0916000802_1_1_5.jpg" style="width: 1000px; height: 1000px;" /></p>\r\n', '', '2012-11-20 17:25:48', '2012-11-22 00:00:00', 11, 1, 'Fiber cushion filling.', '58% POLYESTER, 4% COTTON, 34% ACETATE, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(5, 'Chăn bông', '0', 'chan-bong', '500.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/100324_07_Chanbongthiennhien.JPG" style="width: 680px; height: 485px;" /></p>\r\n', '', '2012-11-20 17:32:30', '2012-11-22 00:00:00', 12, 0, 'Fiber cushion filling.', '90% POLYESTER, 4% COTTON, 34% ACETATE, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(6, 'gối hoa', '0', 'goi-hoa', '35.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5846000999_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:34:08', '2012-11-22 00:00:00', 8, 0, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(7, ' lõi gối', '0', 'loi-goi', '44.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/1826007307_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:34:52', '2012-11-22 00:00:00', 8, 1, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(8, 'Lõi gối hàn quốc', '0', 'loi-goi-han-quoc', '70.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/1826007307_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:35:37', NULL, 8, 1, 'Fiber cushion filling.', '58% POLYESTER, 70% COTTON,E, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(9, 'Gối caro', '0', 'goi-caro', '75.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5996000999_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:36:22', NULL, 0, 0, 'Fiber cushion filling.', '11% POLYPROPYLENE', ' Không giặt tẩy\nKhông giặt tẩy\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in ');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_user`
--

CREATE TABLE IF NOT EXISTS `n_tn_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` int(1) NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_tn_user`
--

INSERT INTO `n_tn_user` (`id`, `email`, `password`, `fullname`, `birthday`, `gender`, `address`, `phone`) VALUES
(1, 'mooncavalier110205@gmail.com', 'daquang', 'Nguyễn Tiến Mạnh', '1989-04-27', 0, 'Hà Nội', '841692253134'),
(3, 'manhnt@niw.com.vn', 'daquang', 'Manh Nguyen Tien', '0000-00-00', 0, '', '841692253134');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-11-22 15:22:32', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
