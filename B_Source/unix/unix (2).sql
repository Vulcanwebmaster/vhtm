-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2012 at 06:45 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unix`
--

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_actions`
--

CREATE TABLE IF NOT EXISTS `be_acl_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_groups`
--

CREATE TABLE IF NOT EXISTS `be_acl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `be_acl_groups`
--

INSERT INTO `be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 6, 'Member', NULL),
(2, 4, 5, 'Administrator', NULL),
(3, 2, 3, 'demoadmin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `be_acl_permissions`
--

CREATE TABLE IF NOT EXISTS `be_acl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL DEFAULT '0',
  `aco_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `be_acl_permissions`
--

INSERT INTO `be_acl_permissions` (`id`, `aro_id`, `aco_id`, `allow`) VALUES
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
-- Table structure for table `be_acl_permission_actions`
--

CREATE TABLE IF NOT EXISTS `be_acl_permission_actions` (
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
-- Table structure for table `be_acl_resources`
--

CREATE TABLE IF NOT EXISTS `be_acl_resources` (
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
-- Dumping data for table `be_acl_resources`
--

INSERT INTO `be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
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
-- Table structure for table `be_groups`
--

CREATE TABLE IF NOT EXISTS `be_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `be_groups`
--

INSERT INTO `be_groups` (`id`, `locked`, `disabled`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `be_preferences`
--

CREATE TABLE IF NOT EXISTS `be_preferences` (
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `value` text CHARACTER SET latin1 NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `be_preferences`
--

INSERT INTO `be_preferences` (`name`, `value`) VALUES
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
-- Table structure for table `be_resources`
--

CREATE TABLE IF NOT EXISTS `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `be_resources`
--

INSERT INTO `be_resources` (`id`, `locked`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `be_users`
--

CREATE TABLE IF NOT EXISTS `be_users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `be_users`
--

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'unixcompany', 'dc033ec86b0607f5d90ff8715a118a99312c502f', 'ducpv00349@gmail.com', 1, 2, NULL, '2012-08-31 06:43:29', '2012-02-22 13:46:09', '2012-08-07 14:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `be_user_profiles`
--

CREATE TABLE IF NOT EXISTS `be_user_profiles` (
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
-- Dumping data for table `be_user_profiles`
--

INSERT INTO `be_user_profiles` (`user_id`, `company_name`, `full_name`, `web_address`, `phone_number`, `address`, `city`, `post_code`) VALUES
(1, '', '', '', '', '', '', 0),
(14, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('58b9645cb401ebf6938ae2b0393b8cbc', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11', 1346382881, 'a:3:{s:9:"user_data";s:0:"";s:6:"status";s:96:"a:1:{s:7:"warning";a:1:{i:0;s:58:"The page you tried to access requires you to be logged in.";}}";s:24:"flash:new:requested_page";s:19:"diemthi/admin/index";}'),
('9d13c5ee12dfca4c8b90cba01bc85ded', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11', 1346388072, 'a:11:{s:2:"id";s:1:"1";s:8:"username";s:11:"unixcompany";s:5:"email";s:20:"ducpv00349@gmail.com";s:8:"password";s:40:"dc033ec86b0607f5d90ff8715a118a99312c502f";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-08-31 06:42:41";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-08-07 14:57:58";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}');

-- --------------------------------------------------------

--
-- Table structure for table `eventcal`
--

CREATE TABLE IF NOT EXISTS `eventcal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL DEFAULT 'anonimous',
  `user_id` int(25) NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTitle` varchar(100) DEFAULT NULL,
  `eventContent` text,
  `privacy` enum('public','private') NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `eventcal`
--

INSERT INTO `eventcal` (`id`, `user`, `user_id`, `eventDate`, `eventTitle`, `eventContent`, `privacy`) VALUES
(2, 'shinokada', 8, '2011-05-17', '17th May', 'Hurray', 'public'),
(8, 'shinokada', 8, '2011-05-18', 'test', 'test', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `omc_category`
--

CREATE TABLE IF NOT EXISTS `omc_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metadesc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `metakeyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) unsigned DEFAULT NULL,
  `parentid` int(11) unsigned NOT NULL,
  `lang_id` int(2) unsigned NOT NULL,
  `table_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `omc_category`
--

INSERT INTO `omc_category` (`id`, `name`, `metadesc`, `metakeyword`, `shortdesc`, `longdesc`, `status`, `order`, `parentid`, `lang_id`, `table_id`) VALUES
(1, 'English category', '', '', '', '', 'active', NULL, 0, 0, 1),
(2, 'Books', '', '', '', '', 'active', 40, 1, 0, 2),
(5, 'Japanese category', '', '', '', '', 'active', NULL, 0, 1, 1),
(7, 'Meditation', 'Meditation in English', '', '', '', 'active', 30, 1, 0, 7),
(9, 'Mountain', '', '', '', '', 'active', 10, 1, 0, 9),
(11, 'River', '', '', '', '', 'active', 25, 1, 0, 11),
(13, '?', 'Fjell p&aring; Norsk', '', '', '', 'active', 10, 5, 1, 9),
(14, 'Elv', 'elv', '', '', '', 'active', 25, 5, 1, 11),
(15, '??', '??', '', '', '', 'active', 30, 5, 1, 7),
(16, 'Alver', 'Alver', '', '', '', 'active', 40, 5, 1, 2),
(17, 'Angels', 'Angels in english', '', '', '', 'active', 35, 1, 0, 17),
(19, '??', 'Engler', '', '', '', 'active', 35, 5, 1, 17),
(20, 'Magic', 'Magic desc.', '', '', '', 'active', 55, 1, 0, 20),
(23, 'Ocean', 'Ocean desc', '', '', '', 'active', 70, 1, 0, 23),
(24, '????', '', '<p>Content</p>', '', '', 'active', NULL, 5, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `omc_colors`
--

CREATE TABLE IF NOT EXISTS `omc_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `omc_customer`
--

CREATE TABLE IF NOT EXISTS `omc_customer` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(10) unsigned NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_code` int(10) unsigned NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `omc_customer`
--

INSERT INTO `omc_customer` (`customer_id`, `password`, `customer_first_name`, `customer_last_name`, `phone_number`, `email`, `address`, `city`, `post_code`, `country`) VALUES
(1, 'da39a3ee5e6b4b0d', 'test123', '', 0, 'test@gmail.com', '', '', 0, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `omc_email`
--

CREATE TABLE IF NOT EXISTS `omc_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `msg` text COLLATE utf8_unicode_ci NOT NULL,
  `msg2` text COLLATE utf8_unicode_ci NOT NULL,
  `msg3` text COLLATE utf8_unicode_ci NOT NULL,
  `msg4` text COLLATE utf8_unicode_ci NOT NULL,
  `sendto` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `omc_emailtemplate`
--

CREATE TABLE IF NOT EXISTS `omc_emailtemplate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `default` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `omc_emailtemplate`
--

INSERT INTO `omc_emailtemplate` (`id`, `name`, `default`) VALUES
(1, 'default', 1),
(2, 'bluenote', 0),
(5, 'greenbear', 0),
(7, 'redhat', 0),
(9, 'redrose', 0);

-- --------------------------------------------------------

--
-- Table structure for table `omc_languages`
--

CREATE TABLE IF NOT EXISTS `omc_languages` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `langname` text COLLATE utf8_unicode_ci NOT NULL,
  `short_lang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `omc_languages`
--

INSERT INTO `omc_languages` (`id`, `langname`, `short_lang`, `status`) VALUES
(1, 'japanese', 'jp', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `omc_menus`
--

CREATE TABLE IF NOT EXISTS `omc_menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `parentid` int(11) unsigned NOT NULL,
  `order` int(11) unsigned DEFAULT NULL,
  `lang_id` int(2) unsigned NOT NULL,
  `page_uri_id` int(11) unsigned NOT NULL,
  `menu_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `omc_menus`
--

INSERT INTO `omc_menus` (`id`, `name`, `shortdesc`, `status`, `parentid`, `order`, `lang_id`, `page_uri_id`, `menu_id`) VALUES
(1, 'English menu', '', 'active', 0, 0, 0, 0, 0),
(2, 'Home', '', 'active', 1, 10, 0, 1, 0),
(5, 'Japanese menu', '', 'active', 0, 0, 1, 0, 1),
(6, '???????', '', 'active', 5, 10, 1, 6, 2),
(8, 'Contact', '', 'active', 1, 30, 0, 7, 0),
(9, '??????', '', 'active', 5, 30, 1, 8, 8),
(10, 'About Us', '', 'active', 1, 40, 0, 3, 0),
(11, '????????', '', 'active', 5, 40, 1, 4, 10),
(12, 'Service', '', 'active', 1, 60, 0, 17, 0),
(14, '????', '', 'active', 5, 60, 1, 18, 12),
(15, 'About shop', '', 'active', 10, 10, 0, 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `omc_messages`
--

CREATE TABLE IF NOT EXISTS `omc_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `omc_order`
--

CREATE TABLE IF NOT EXISTS `omc_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `payment_date` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `omc_order`
--

INSERT INTO `omc_order` (`order_id`, `customer_id`, `total`, `order_date`, `delivery_date`, `payment_date`) VALUES
(1, 1, 800.00, '2012-04-10 13:30:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 300.00, '2012-04-10 21:01:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `omc_order_item`
--

CREATE TABLE IF NOT EXISTS `omc_order_item` (
  `order_item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `omc_order_item`
--

INSERT INTO `omc_order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 3, 2, 400.00),
(2, 2, 5, 10, 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `omc_pages`
--

CREATE TABLE IF NOT EXISTS `omc_pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `metakeyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `metadesc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `lang_id` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `omc_pages`
--

INSERT INTO `omc_pages` (`id`, `name`, `metakeyword`, `metadesc`, `keywords`, `description`, `path`, `content`, `status`, `lang_id`) VALUES
(1, 'Home', '', '', '', '', 'welcome', '<p>Content for home page. Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(3, 'About', '', '', '', '', 'about', '<p>About us.</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(4, '????????', '', '', '', '', 'about', '<p>?????</p>\n<p>Tempor! <a href="http://bbc.com">Parturient ac</a> sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 1),
(6, '???', '', '', '', '', 'welcome', '<p>Forsiden p&aring; norsk</p>', 'active', 1),
(7, 'Contact', '', '', '', '', 'contact_us', '', 'active', 0),
(8, '??????', '', '', '', '', 'contact_us', '<p>Kontakt oss</p>', 'active', 1),
(17, 'Service', '', '', '', '', 'service', '<p>service content</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(18, '????', '', '', '', '', 'service', '<p>????</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 1),
(20, 'Shopping guide', '', '', '', '', 'guide', '<p>Shopping guide content.</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(21, '?????????', '', '', '', '', 'guide', '<p>?????????</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', 'active', 1),
(22, 'About shop', '', '', '', '', 'about_shop', '<p>Content for About shop.</p>', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `omc_products`
--

CREATE TABLE IF NOT EXISTS `omc_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` int(1) NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_order` int(11) unsigned DEFAULT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grouping` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `featured` enum('none','front','webshop') COLLATE utf8_unicode_ci NOT NULL,
  `other_feature` enum('none','most sold','new product') COLLATE utf8_unicode_ci NOT NULL,
  `price` float(7,2) NOT NULL,
  `lang_id` int(2) unsigned NOT NULL,
  `table_id` int(11) unsigned NOT NULL,
  `weblink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `omc_products`
--

INSERT INTO `omc_products` (`id`, `name`, `public`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `product_order`, `class`, `grouping`, `status`, `category_id`, `featured`, `other_feature`, `price`, `lang_id`, `table_id`, `weblink`) VALUES
(1, 'Fairy', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim.</p>\n<p>Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 2, 'webshop', 'most sold', 200.00, 0, 1, NULL),
(2, '??', 1, '', '<p>??</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec.</p>\n<p>Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 16, 'webshop', 'most sold', 40.00, 1, 1, NULL),
(3, 'Meditation', 1, 'meditation ', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 7, 'webshop', 'most sold', 400.00, 0, 3, NULL),
(4, '??', 1, '<p>medtation en</p>', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 15, 'webshop', 'most sold', 700.00, 1, 3, NULL),
(5, 'Kawa', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim.</p>\n<p>Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_12.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_12.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 11, 'webshop', 'new product', 30.00, 0, 5, NULL),
(8, '?', 1, '', '', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_12.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_12.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 14, 'webshop', 'most sold', 340.00, 1, 5, NULL),
(9, 'Blue angels', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 17, 'webshop', 'most sold', 0.00, 0, 9, NULL),
(10, '????', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 19, 'webshop', 'most sold', 340.00, 1, 9, NULL),
(11, 'Hello everyone', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_13.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_13.jpg" alt="" width="242" height="440" /></p>', 50, '', '', 'active', 7, 'webshop', 'most sold', 40.00, 0, 11, NULL),
(12, 'Hi p', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_13.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_13.jpg" alt="" width="242" height="440" /></p>', 50, '', '', 'active', 15, 'webshop', 'most sold', 340.00, 1, 11, NULL),
(13, 'Mt Fuji', 1, '', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_14.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_14.jpg" alt="" width="242" height="440" /></p>', 60, '', '', 'active', 9, 'webshop', 'none', 50.00, 0, 13, NULL),
(14, 'Mt Fuji', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing.</p>', '<p><img src="../../../../assets/images/books/thumbnails/114x207_14.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_14.jpg" alt="" width="242" height="440" /></p>', 60, '', '', 'active', 13, 'webshop', 'none', 230.00, 1, 13, NULL),
(15, 'Go Harry', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet,</p>', '<p><img src="../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 80, '', '', 'active', 20, 'webshop', 'most sold', 50.00, 0, 15, NULL),
(16, 'G', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet,</p>', '<p><img src="../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 80, '', '', 'active', 7, 'webshop', 'most sold', 220.00, 1, 15, NULL),
(17, 'Amazon river', 1, '', '<p>Long desc</p>', '', '', 70, '', '', 'active', 11, 'none', 'none', 0.00, 0, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `omc_product_colors`
--

CREATE TABLE IF NOT EXISTS `omc_product_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `omc_product_sizes`
--

CREATE TABLE IF NOT EXISTS `omc_product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `omc_sizes`
--

CREATE TABLE IF NOT EXISTS `omc_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `omc_slideshow`
--

CREATE TABLE IF NOT EXISTS `omc_slideshow` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_order` int(11) unsigned DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `featured` enum('none','front','webshop') COLLATE utf8_unicode_ci NOT NULL,
  `readmorelink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `omc_slideshow`
--

INSERT INTO `omc_slideshow` (`id`, `name`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `slide_order`, `status`, `featured`, `readmorelink`) VALUES
(1, 'big_tree.jpg', 'slide 1', '', '', '<p><img src="../../../../assets/images/frontpage/big_tree.jpg" alt="" width="516" height="200" /></p>', 1, 'inactive', 'none', ''),
(2, 'build.jpg', 'slide2 desc', '', '', '<p><img src="../../../../assets/images/frontpage/build.jpg" alt="" width="516" height="200" /></p>', 2, 'inactive', 'none', ''),
(6, 'station.jpg', '', '', '', '<p><img src="../../../../assets/images/frontpage/station.jpg" alt="" width="516" height="200" /></p>', 3, 'inactive', 'none', ''),
(7, 'jmpress1', 'Just when I thought', 'From fairest creatures we desire increase, tha\n', '', '<p><img src="../../../assets/images/frontpage/1.png" alt="" width="360" height="360" /></p>', 1, 'active', 'none', 'index.php/welcome/product/5'),
(8, 'jmpress2', 'Holy cannoli!', 'But as the riper should by time decease, ', '', '<p><img src="../../../assets/images/frontpage/2.png" alt="" width="360" height="360" /></p>', 2, 'active', 'none', 'index.php/welcome/product/3'),
(9, 'jmpress3', 'No time to waste', 'But as the riper should by time decease, his tender heir might bear his memory', '', '<p><img src="../../../assets/images/frontpage/3.png" alt="" width="360" height="360" /></p>', 3, 'active', 'none', 'index.php/welcome/product/15'),
(10, 'jmpress4', 'Supercool!', 'Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel', '', '<p><img src="../../../assets/images/frontpage/4.png" alt="" width="360" height="360" /></p>', 4, 'active', 'none', 'index.php/welcome/product/5'),
(11, 'jmpress5', 'Did you know that...', 'Thou that art now the world''s fresh ornament and only herald to the gaudy spring', '', '<p><img src="../../../assets/images/frontpage/5.png" alt="" width="360" height="360" /></p>', 5, 'active', 'none', 'index.php/welcome/product/3');

-- --------------------------------------------------------

--
-- Table structure for table `omc_subscribers`
--

CREATE TABLE IF NOT EXISTS `omc_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `omc_subscribers`
--

INSERT INTO `omc_subscribers` (`id`, `name`, `email`) VALUES
(5, 'John', 'john@gmail.com'),
(6, 'test1234', 'test1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'anonimous',
  `user_id` int(25) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` enum('to do','completed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'to do',
  `privacy` enum('public','private') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unix_camnhan`
--

CREATE TABLE IF NOT EXISTS `unix_camnhan` (
  `camnhan_id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `nguoidang` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`camnhan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `unix_camnhan`
--

INSERT INTO `unix_camnhan` (`camnhan_id`, `noidung`, `ngaythang`, `nguoidang`) VALUES
(16, '<p class="MsoNormal"><em><span lang="EN-US">&ldquo;.. Xin ch&agrave;o c&aacute;c bạn, t&ecirc;n t&ocirc;i l&agrave; Nguyễn Nga Nhi, học sinh lớp 5 trường tiểu học Kim Li&ecirc;n. Hiện nay t&ocirc;i l&agrave; học sinh trường H&agrave; Nội Amsterdam với điểm đầu v&agrave;o l&agrave; thủ khoa m&ocirc;n To&aacute;n. Để c&oacute; kết quả như ng&agrave;y h&ocirc;m nay, con xin được gửi cảm ơn thầy Điệp, trung t&acirc;m UNIX. Trước khi tham gia kh&oacute;a học n&agrave;y, m&ocirc;n To&aacute;n của con rất tốt, con rất tự tin, đ&oacute; l&agrave; sở trường của m&igrave;nh. Nhưng khi gặp c&aacute;c b&agrave;i to&aacute;n kh&oacute;, mới, lạ, con trở n&ecirc;n hoang mang, mất b&igrave;nh tĩnh, l&uacute;ng t&uacute;ng dẫn tới kh&ocirc;ng đạt kết quả cao. Tuy nhi&ecirc;n, nhờ những b&agrave;i giảng th&uacute; vị, kh&oacute; v&agrave; mới lạ của thầy, con đ&atilde; tự t&igrave;m t&ograve;i trong gi&aacute; s&aacute;ch m&agrave; kh&ocirc;ng cần hỏi bố mẹ. Thầy c&ograve;n c&oacute; những buổi r&egrave;n luyện t&acirc;m l&yacute; bổ &iacute;ch, vui vẻ gi&uacute;p ch&uacute;ng con c&oacute; t&acirc;m l&yacute; vững hơn để con <strong>đạt thủ khoa 15/15 điểm m&ocirc;n To&aacute;n</strong> như ng&agrave;y h&ocirc;m nay. Ngo&agrave;i ra, trung t&acirc;m UNIX c&ograve;n c&oacute; cơ sở vật chất rất tốt. Con rất mong l&ecirc;n cấp 2 sẽ được tiếp tục theo học thầy Điệp, được học những b&agrave;i giảng th&uacute; vị bổ &iacute;ch v&agrave; vui vẻ của thầy...&rdquo;</span></em><span lang="EN-US"> <strong>&ndash; Nguyễn Nga Nhi &ndash; thủ khoa m&ocirc;n To&aacute;n trường HN Amsterdam 2012, thủ khoa điểm tối đa 21/21 To&aacute;n Tiếng Việt trường Marie Curie 2012.</strong></span></p>', '2012-06-24', ''),
(17, '<p><em>&ldquo;&hellip;Trước khi tham gia chương tr&igrave;nh &ldquo;Bứt ph&aacute; trong kỳ thi m&ocirc;n to&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo; của thầy Phan Quang Điệp, t&ocirc;i v&agrave; con trai cũng kh&ocirc;ng c&oacute; &yacute; định thi v&agrave;o trường Ams. L&uacute;c đ&oacute;, v&agrave;o th&aacute;ng 5 ch&aacute;u l&agrave;m b&agrave;i thi thử m&ocirc;n to&aacute;n chỉ đạt từ&nbsp;&nbsp;2/15&nbsp;&nbsp;đến 4 / 15 điểm, ch&aacute;u cũng kh&ocirc;ng th&iacute;ch học m&ocirc;n to&aacute;n. Nhưng sau khi tham dự chương tr&igrave;nh n&agrave;y cả hai mẹ con đ&atilde; thực sự thay đổi v&agrave; quyết t&acirc;m thi v&agrave;o trường Amsterdam. V&agrave; thật tuyệt vời thầy Điệp đ&atilde; truyền cảm hứng học tập c&oacute; những phương ph&aacute;p giảng dạy tuyệt vời gi&uacute;p con trai t&ocirc;i đạt 10/15 điểm to&aacute;n sau v&agrave;i buổi huấn luyện trước ng&agrave;y thi. Thật sự gia đ&igrave;nh t&ocirc;i rất biết ơn thầy về những b&agrave;i giảng tuyệt vời m&agrave; thầy đ&atilde; d&agrave;nh cho con t&ocirc;i&hellip;. &rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em><strong>Chị Lan Anh-PHHS ch&aacute;u Đ&agrave;o Ph&uacute;c Th&agrave;nh-tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Amsterdam 2010</strong></p>', '2012-06-25', ''),
(18, '<p><em>&ldquo;&hellip;T&ecirc;n t&ocirc;i l&agrave; L&ecirc; Qu&yacute; Dương, t&ocirc;i c&oacute; ước mơ thi đỗ v&agrave;o trường H&agrave; Nội Amsterdam.Trước khi tham gia chương tr&igrave;nh n&agrave;y điểm thi thử của t&ocirc;i chỉ được từ 5-6 điểm. Nhưng sau khi học c&aacute;c phương ph&aacute;p, chiến thuật v&agrave; thủ thuật l&agrave;m b&agrave;i nhanh m&agrave; thầy Điệp hướng dẫn điểm số của t&ocirc;i đ&oacute; n&acirc;ng l&ecirc;n 11-12 điểm.V&agrave; thật tuyệt vời ước mơ của t&ocirc;i đ&oacute; th&agrave;nh sự thật.Hẹn gặp lại cỏc bạn tại trường H&agrave; Nội Amsterdam...&rdquo;</em> <strong>L&ecirc; Qu&yacute; Dương-HS trường tiểu học Th&aacute;i Thịnh- tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Ams 2011.&nbsp;</strong></p>', '2012-06-26', ''),
(19, '<p><em>"..Trước khi tham gia kh&oacute;a học, con rất sợ học to&aacute;n. Mỗi lần đi học, con đều cảm thấy rất ch&aacute;n nản v&agrave; kh&ocirc;ng hề c&oacute; hứng th&uacute; với m&ocirc;n to&aacute;n. Con rất sợ l&agrave;m những b&agrave;i to&aacute;n kh&oacute; v&agrave; những k&igrave; thi thử. Trong kh&oacute;a học, con đ&atilde; học tập rất nhiều điều bổ &iacute;ch từ thầy Điệp v&agrave; bạn b&egrave;. Thầy đ&atilde; đem lại những b&agrave;i giảng bổ &iacute;ch. Lời giảng thầy đ&atilde; khắc s&acirc;u v&agrave;o t&acirc;m tr&iacute; con một c&aacute;ch dễ d&agrave;ng. V&agrave; th&uacute; vị hơn l&agrave; thầy lu&ocirc;n l&agrave;m cho ch&uacute;ng con cười, tạo cho ch&uacute;ng con cảm hứng khi học. Unix đ&atilde; đem lại cho học vi&ecirc;n cảm hứng học qua những giờ học rộn r&atilde; tiếng cười, l&ograve;ng nhiệt th&agrave;nh của c&aacute;c thầy c&ocirc; trong trung t&acirc;m ch&uacute;ng con cảm nhận rất r&otilde;. Nếu ai c&oacute; ai hỏi "Con th&iacute;ch học ở trung t&acirc;m n&agrave;o nhất", c&acirc;u trả lời sẽ m&atilde;i m&atilde;i l&agrave; Unix. Con cảm thấy m&igrave;nh đ&atilde; th&iacute;ch học to&aacute;n. Trước đ&acirc;y, điểm số của con chỉ đạt 5,6đ nhưng sau khi tham gia kh&oacute;a học n&agrave;y, điểm của con được n&acirc;ng l&ecirc;n đến 10,5 hay 11đ. Trước ti&ecirc;n con muốn n&oacute;i một điều "Con cảm ơn thầy Điệp rất nhiều!". Con sẽ m&atilde;i kh&ocirc;ng bao giờ qu&ecirc;n người thầy vui t&iacute;nh, dễ mến v&agrave; lu&ocirc;n y&ecirc;u qu&yacute; học tr&ograve; của m&igrave;nh&hellip;</em>" <strong>Nguyễn Minh H&agrave; &ndash; Lớp 5C Tiểu học Nam Th&agrave;nh C&ocirc;ng tr&uacute;ng tuyển kỳ thi Ams năm 2012</strong></p>', '2012-06-22', ''),
(21, '<p class="MsoNormal"><em><span lang="EN-US">&ldquo;..T&ecirc;n t&ocirc;i l&agrave; Đo&agrave;n Tuấn hưng, học sinh lớp 5D tiểu học Kim Li&ecirc;n, b&acirc;y giờ t&ocirc;i rất vui l&agrave; học sinh trường Amsterdam. Trước khi học kh&oacute;a học n&agrave;y, điểm to&aacute;n thi thử của t&ocirc;i được từ 5-6 điểm, nhưng sau kh&oacute;a học n&agrave;y, t&ocirc;i đ&atilde; tăng được điểm to&aacute;n r&otilde; rệt, t&ocirc;i rất biết ơn thầy Điệp, người thầy đ&atilde; gi&uacute;p t&ocirc;i đỗ v&agrave;o trường H&agrave; Nội Amsterdam. Được học thầy, t&ocirc;i đ&atilde; củng cố được kiến thức rất lớn, những điều thầy dạy lu&ocirc;n c&oacute; trong đề thi v&agrave;o trường Ams, lớp học s&ocirc;i nổi ở UNIX v&agrave; tr&agrave;n đầy tiếng cười đ&atilde; gi&uacute;p t&ocirc;i tiếp thu tốt hơn, v&agrave; y&ecirc;u th&iacute;ch học To&aacute;n hơn. T&ocirc;i rất cảm ơn thầy Điệp v&agrave; trung t&acirc;m UNIX, t&ocirc;i rất mong muốn được tiếp tục theo học thầy Điệp...&rdquo;</span></em><span lang="EN-US"> <strong>&ndash; Đo&agrave;n Tuấn Hưng &ndash; tr&uacute;ng tuyển kỳ thi cấp 2 H&agrave; Nội Amsterdam 2012.</strong></span></p>', '2012-06-23', ''),
(22, '<p class="MsoNormal"><em>&ldquo;...Con l&agrave; Nguyễn Lan Chi, học sinh trường H&agrave; Nội Amsterdam. </em><em><span lang="EN-US">Trước đ&acirc;y, việc học của con rất b&igrave;nh thường, nhưng sau khi học kh&oacute;a học &ldquo;Bứt ph&aacute; m&ocirc;n To&aacute;n trường H&agrave; Nội Amsterdam&rdquo; của thầy Điệp, con đ&atilde; tiến bộ hơn v&agrave; tăng được điểm số của m&igrave;nh. Trong kh&oacute;a học n&agrave;y, con th&iacute;ch nhất l&agrave; c&aacute;c b&agrave;i giảng bổ &iacute;ch v&agrave; những c&acirc;u chuyện cười vui vẻ của thầy. Thầy lu&ocirc;n đem lại tiếng cười sảng kho&aacute;i v&agrave; sự vui vẻ trong học tập cho học sinh. Con đ&atilde; tiến bộ rất nhiều v&agrave; giải được nhiều b&agrave;i to&aacute;n kh&oacute; hơn. Điểm To&aacute;n Ams của con được 10,5 điểm. Con rất cảm ơn thầy v&agrave; mong muốn tiếp tục được theo học thầy...&rdquo;</span></em><span lang="EN-US"> <strong>&ndash; Nguyễn Lan Chi, lớp 5C tiểu học T&ocirc; Ho&agrave;ng, tr&uacute;ng tuyển kỳ thi cấp 2 H&agrave; Nội Amsterdam 2012.</strong></span></p>', '2012-06-23', ''),
(23, '<p><em><span lang="EN-US">"..Trước khi học kh&oacute;a học n&agrave;y, con học to&aacute;n rất b&igrave;nh thường. Nhưng nhờ kh&oacute;a học n&agrave;y, con đ&atilde; đạt được ước mơ trở th&agrave;nh học sinh trường H&agrave; Nội Amsterdam. B&acirc;y giờ, con rất y&ecirc;u th&iacute;ch học m&ocirc;n To&aacute;n. Thầy Điệp rất vui t&iacute;nh, gần gũi với học sinh, con rất th&iacute;ch được nghe thầy kể chuyện cười để c&aacute;c con học tiếp thu tốt hơn. Con rất mong muốn được học tiếp ở UNIX. Con cảm ơn thầy Điệp v&agrave; c&aacute;c thầy c&ocirc; ở trung t&acirc;m UNIX rất nhiều...&rdquo;<span>&nbsp; </span></span></em><strong><span lang="EN-US">&ndash; Đặng Ho&agrave;ng Anh, lớp 5A tiểu học Khương Thượng, tr&uacute;ng tuyển kỳ thi cấp 2 H&agrave; Nội Amsterdam 2012.</span></strong></p>', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `unix_contact`
--

CREATE TABLE IF NOT EXISTS `unix_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_contact`
--

INSERT INTO `unix_contact` (`id`, `ten`, `diachi`, `dienthoai`, `email`, `website`) VALUES
(1, 'Công ty cổ phần Unix', 'Phòng 703A (Tháp A), Hà Thành Plaza 102 Thái Thịnh, Đống Đa, Hà Nội', '(04)-6276 4637. Hotline: 0983 768 342', 'unix.group.vn@gmail.com', ' www.unix.vn');

-- --------------------------------------------------------

--
-- Table structure for table `unix_dangky`
--

CREATE TABLE IF NOT EXISTS `unix_dangky` (
  `dangky_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `truong` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phuhuynh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`dangky_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `unix_dangky`
--

INSERT INTO `unix_dangky` (`dangky_id`, `hoten`, `truong`, `lop`, `phuhuynh`, `dienthoai`, `ngaythang`, `ten`) VALUES
(1, 'Phạm Lê Minh', 'Thành Công B', '4', 'Lê Hồng Mỹ', '0912571351', NULL, NULL),
(2, 'Phạm Lê Minh', 'Thành Công B', '4', 'Lê Hồng Mỹ', '0912571351', NULL, NULL),
(3, 'Võ Duy Nhật', 'Kim Đồng', '5', 'Văn Ngọc Ánh', '0903217575', NULL, NULL),
(4, 'Võ Duy Nhật', 'Kim Đồng', '5', 'Văn Ngọc Ánh', '0903217575', NULL, NULL),
(5, 'Nguyen Khai', 'Tiểu học Mỹ Đình', '3A2', 'Vu Giang', '0988988808', NULL, NULL),
(6, 'Nguyen Khai', 'Tiểu học Mỹ Đình', '3A2', 'Vu Giang', '0988988808', NULL, NULL),
(7, 'Hảo minh', 'Định công', '5D', 'Bình', '0974505002', NULL, NULL),
(8, 'thanh trung', 'thai thinh', '5e', 'le thanh binh', '0915923043', NULL, NULL),
(9, 'thanh trung', 'thai thinh', '5e', 'le thanh binh', '0915923043', NULL, NULL),
(30, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 1'),
(31, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 1'),
(32, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(33, 'Nguyễn Đức Tiến', '', '', '', '0987384249', '2012-08-29', 'Lịch 1'),
(34, 'Nguyễn Đức Tiến', '', '', '', '0987384249', '2012-08-29', 'Lịch 1'),
(35, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 1'),
(36, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(37, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(38, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(39, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(40, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(41, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(42, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(43, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(44, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(45, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(46, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(47, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(48, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(49, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(50, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(51, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(52, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5'),
(53, 'Nguyễn Đức Tiến', 'HaUI', 'KHMT2K3', 'Nguyễn Đức Tiến', '0987384249', '2012-08-29', 'Lịch 5');

-- --------------------------------------------------------

--
-- Table structure for table `unix_danhmuc`
--

CREATE TABLE IF NOT EXISTS `unix_danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_danhmuc`
--

INSERT INTO `unix_danhmuc` (`id`, `ten`) VALUES
(1, 'Hội thảo khác'),
(2, 'Khóa học'),
(3, 'Thư viện'),
(4, 'Danh mục khác'),
(5, 'Danh mục nữa');

-- --------------------------------------------------------

--
-- Table structure for table `unix_diemthi`
--

CREATE TABLE IF NOT EXISTS `unix_diemthi` (
  `stt` int(11) DEFAULT NULL,
  `hocsinh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phuhuynh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lop` text COLLATE utf8_unicode_ci,
  `diemthi` text COLLATE utf8_unicode_ci,
  `dotthi` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_diemthi`
--

INSERT INTO `unix_diemthi` (`stt`, `hocsinh`, `phuhuynh`, `lop`, `diemthi`, `dotthi`) VALUES
(1, 'Nguyễn Thu Trang', 'Nguyễn Thị Hoài Thu', '5B5', '0', 'Điểm test lần 2 khóa tháng 7'),
(2, 'Bùi Thế Vũ', 'Trần Thị Viện', '5B5', '1', 'Điểm test lần 2 khóa tháng 7'),
(3, 'Tạ Minh Nguyệt ', 'Kim Thị Thu Hằng ', '5B5', '1', 'Điểm test lần 2 khóa tháng 7'),
(4, 'Trần Aneta Trang', 'Trần Thu Hương', '5B5', '1', 'Điểm test lần 2 khóa tháng 7'),
(5, 'Hoàng Ngọc Minh', 'Hoàng Kim Sơn', '5B5', '1', 'Điểm test lần 2 khóa tháng 7'),
(6, 'Nguyễn Thùy Dương', 'Nguyễn Thúy Hằng', '5B5', '2', 'Điểm test lần 2 khóa tháng 7'),
(7, 'Nguyễn Phương Anh', 'Nguyễn Thị Thanh', '5B5', '2', 'Điểm test lần 2 khóa tháng 7'),
(8, 'Nguyễn Minh Hiếu', 'Nguyễn Hoàng Minh', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(9, 'Đỗ Tuấn Quang', 'Thái Thị Hoàng Oanh', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(10, 'Nguyễn Khánh Tùng', 'Dương Thị Thúy Hà', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(11, 'Hoàng Anh Đức', 'Lê Hải Vân', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(12, 'Nguyễn Hoàng Sơn ', 'Cao Thị Thanh Tú', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(13, 'Nguyễn Đức Mạnh', 'Đào Hải Yến', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(14, 'Vũ Hải Phong', 'Vũ Minh Thìn', '5B5', '3', 'Điểm test lần 2 khóa tháng 7'),
(15, 'Cao Lê Vân Ly', 'Lê Thu Minh', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(16, 'Đoàn Hồng Vân', 'Lê Thanh Nhung', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(17, 'Thân Việt Hoàng', 'Trần Mai Hoa', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(18, 'Trịnh Đức Phú', 'Trịnh Ngọc Thành', '', '', 'Điểm test lần 2 khóa tháng 7'),
(19, 'Lưu Trà My', 'Nguyễn Thị Vân Anh', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(20, 'Nguyễn Đức Hoàng ', 'Lương Xuân Cúc ', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(21, 'Dương Anh Đức', 'Phạm Hải Yến', '', '', 'Điểm test lần 2 khóa tháng 7'),
(22, 'Nguyễn Nhật Hà', 'Nguyễn Quang Hào', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(23, 'Nguyễn Mai Linh', 'Nguyễn Thị Dương', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(24, 'Trần Đức Mạnh', 'Trần Quang Minh', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(25, 'Nguyễn Việt Mỹ', 'Nguyễn Việt Anh', '5A5', '4', 'Điểm test lần 2 khóa tháng 7'),
(26, 'Nghiêm Thu Diệp', 'Trần Thúy Lan', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(27, 'Dương Yến Chi', 'Cao Thị Thu Hằng', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(28, 'Nguyễn Đức Anh ', 'Lê Lan Hương', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(29, 'Đinh Hương Giang', 'Nguyễn Thị Lan Hương', '', '', 'Điểm test lần 2 khóa tháng 7'),
(30, 'Nguyễn Minh Phúc', 'Nguyễn Thị Vân', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(31, 'Nguyễn Hà Lan Anh', 'Nguyễn Văn Thắng', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(32, 'Nguyễn Thúy Nhi', 'Nguyễn Thị Thu Phương', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(33, 'Đỗ Đức Tâm', 'Phạm Thị Loan', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(34, 'Nguyễn Thị Hải Dương', 'Nguyễn Hải Bình', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(35, 'Nguyễn Xuân Anh', 'Bạch Thị Thu Hường', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(36, 'Nguyễn Duy Khánh', 'Lê Mai Hương', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(37, 'Võ Thùy Trang', 'Nguyễn Thanh Thủy', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(38, 'Trần Đức Thắng', 'Lại Thị Hà', '5A5', '5', 'Điểm test lần 2 khóa tháng 7'),
(39, 'Bùi Thị Linh Trang', 'Phạm Thị Tuyết Dung', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(40, 'Đỗ Minh Ánh', 'Nguyễn Thị Minh Phượng', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(41, 'Đặng Vũ Bá ', 'Bùi Thị Hương ', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(42, 'Lương Quang Thắng', 'Lê Hải Thanh', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(43, 'Phạm Nguyễn Ngân Hà', 'Nguyễn Mai Chi', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(44, 'Mai Kim Kh', 'Mai Viết Dung', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(45, 'Nguyễn Diệu Linh', 'Lưu Thu Hoài', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(46, 'Đồng Tuyết Anh ', 'Đồng Quốc Hùng ', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(47, 'Ngô Nam Khánh', 'Ngô Đăng Thịnh', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(48, 'Nguyễn Nhật Hoàng', 'Mai Thị Hồng Nguyên', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(49, 'Phạm Nhật Quang', 'Hoàng Thị Tâm Chính', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(50, 'Nguyễn Phương Uyên', 'Nguyễn Phương Đông', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(51, 'Nguyễn Quý Hiển', 'Nguyễn Thị Tuyết Lan', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(52, 'Trịnh Ngọc Anh', 'Nguyễn Thanh Huyền', '5B4', '6', 'Điểm test lần 2 khóa tháng 7'),
(53, 'Cao Thế Phong', 'Cao Thế Long', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(54, 'Đào Lê Khôi Nguyên', 'Lê Thị Minh Hoa', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(55, 'Ngô Minh Anh', 'Nguyễn Anh Thư', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(56, 'Nguyễn Bá Công', 'Vũ Diễm Hằng', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(57, 'Lê Anh Cường', 'Lê Thị Huệ', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(58, 'Nguyễn Hồng Sâm', 'Nguyễn Hồng Dưỡng', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(59, 'Nguyễn Bá Khôi', 'Nguyễn Bá Trịnh', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(60, 'Lâm Hải Long', 'Nguyễn Thị Đoan Trang', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(61, 'Nguyễn Minh Hùng', 'Nguyễn Minh Đức', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(62, 'Nguyễn Phan Anh', 'Phan Thị Phương', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(63, 'Vũ Linh Chi', 'Dương Mai Linh', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(64, 'Vũ Thảo Nhi ', 'Vũ việt Đức ', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(65, 'Trương Hương Giang', 'Nguyễn Thị Vân', '5A4', '7', 'Điểm test lần 2 khóa tháng 7'),
(66, 'Lê Nguyên Khánh', 'Lê Văn Trịnh', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(67, 'Đoàn Khánh Linh', 'Đoãn Nhữ Minh ', '', '', 'Điểm test lần 2 khóa tháng 7'),
(68, 'Nguyễn Ánh Ngọc', 'Nguyễn Thị Thanh Thủy', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(69, 'Đào Quốc Thành', 'Đào Ngọc Lâm', '', '', 'Điểm test lần 2 khóa tháng 7'),
(70, 'Hà Trung Hiếu', 'Hà Thị Hồng Nga', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(71, 'Đặng Minh Thư', 'Chương Thúy Quỳnh', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(72, 'Lê Bùi Khánh Linh ', 'Bùi Thị Hồng Việt ', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(73, 'Nguyễn Minh Ngọc', 'Phạm Thị Thu Nga', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(74, 'Nguyễn Minh Hùng', 'Thái Thị Cẩm Chi', '5B3', '8', 'Điểm test lần 2 khóa tháng 7'),
(75, 'Đặng Nam Khánh', 'Đặng Nhật Tân', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(76, 'Chu Minh Nga', 'Trần Song Hoa', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(77, 'Phạm Thùy Dương', 'Nguyễn Thị Thúy Hằng', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(78, 'Đỗ Hương Giang', 'Đỗ Văn Quang', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(79, 'Dương Duy Anh', 'Nguyễn Phương Anh', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(80, 'Hà Linh Chi', 'Phạm Thị Hà Giang', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(81, 'Hoàng Bảo Hưng', 'Đinh Thị Hoa', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(82, 'Hồ Anh Vũ', 'Nguyễn Thanh Nga', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(83, 'Hoàng Vân Linh', 'Hoàng Thanh Vân', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(84, 'Nguyễn Công Minh', 'Nguyễn Công Thái', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(85, 'Lã Phan Anh', 'Vũ Thị Hòa', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(86, 'Đoàn Mỹ Linh ', 'Đoãn Nhữ Minh ', '', '', 'Điểm test lần 2 khóa tháng 7'),
(87, 'Vũ Lê Phương Uyên', 'Vũ Anh Việt', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(88, 'Nguyễn Thành Trung', 'Nguyễn Thị Hồng Sâm', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(89, 'Trịnh Gia Linh', 'Trịnh Quang Thanh', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(90, 'Nguyễn Tùng Sơn', 'Nguyễn Thế Trung/Lê Thị Dinh', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(91, 'Phạm Đức Anh', 'Bùi Thúy Hương', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(92, 'Lê Thanh Hiền', 'Lê Kim Thanh', '', '', 'Điểm test lần 2 khóa tháng 7'),
(93, 'Bùi Duy Minh', 'Bùi Mai Phương', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(94, 'Vũ Bình Sơn', 'Trương Thị Việt Hà', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(95, 'Đỗ Đình Long', 'Nguyễn Thị Nga', '', '', 'Điểm test lần 2 khóa tháng 7'),
(96, 'Trần Nguyễn Hoàng Lan', 'Trần Thanh Long', '5A3', '9', 'Điểm test lần 2 khóa tháng 7'),
(97, 'Bùi Thị Vân Hà', 'Đàm Thị Thanh Vân', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(98, 'Nguyễn Trung Hiếu', 'Nguyễn Việt Dũng', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(99, 'Nguyễn Cao Thành', 'Cao Thị Phương Lan', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(100, 'Khúc Thị Khánh Huyền', 'Lại Thị Bích Hồng', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(101, 'Nguyễn Quang Trung ', 'Nguyễn Quang Vinh ', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(102, 'Vũ Quốc Đạt', 'Nguyễn Khánh Kiều Trang', '5A3', '10', 'Điểm test lần 2 khóa tháng 7'),
(103, 'Nguyễn Đức Bình', 'Nguyễn Đăng Sáu', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(104, 'Lê Hoàng Minh', 'Phạm Mai Hương', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(105, 'Lương Hiền Nga', 'Nguyễn Thị Kim Oanh', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(106, 'Lê Thái Dương', 'Lê Xuân Hùng', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(107, 'Mai Thu Huyền', 'Đào Thị Thu Hằng', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(108, 'Nguyễn Việt Trung', 'Nguyễn Xuân Ngọc', '5B2', '11', 'Điểm test lần 2 khóa tháng 7'),
(109, 'Lê Thành Vinh', 'Lương Thu Hằng', '5B2', '12', 'Điểm test lần 2 khóa tháng 7'),
(110, 'Nguyễn Đăng Thành', 'Nguyễn Đăng Khoa', '5B2', '12', 'Điểm test lần 2 khóa tháng 7'),
(111, 'Phạm Văn Khánh', 'Nguyễn Thị Thu Phương', '5B2', '12', 'Điểm test lần 2 khóa tháng 7'),
(112, 'Lê Ngọc Phương Nhi', 'Trương Thị Ngọc Trang', '5B2', '14', 'Điểm test lần 2 khóa tháng 7'),
(113, 'Ngô Thái Hoàng Anh', 'Hoàng Thị Hòa', '5B2', '14', 'Điểm test lần 2 khóa tháng 7'),
(114, 'Hoàng Nghĩa Hiếu', 'Nghiêm Thị Liên', '5B2', '15', 'Điểm test lần 2 khóa tháng 7'),
(115, 'Vũ Phương Nhung', 'Nguyễn Thị Bích Thủy', '5B2', '15', 'Điểm test lần 2 khóa tháng 7'),
(116, 'Phạm Việt Anh ', 'Nguyễn Thị Ngọc Thủy', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(117, 'Lê Yến Vy', 'Đỗ Thu Hiền', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(118, 'Nguyễn Minh Hà Anh', 'Nguyễn Thu Hằng', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(119, 'Nguyễn Vũ Đức Trọng', 'Nguyễn Xuân Thành', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(120, 'Trần Đức Anh', 'Trần Kim Thủy', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(121, 'Nguyễn Minh An', 'Nguyễn Minh Tuấn', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(122, 'Vũ Trang Anh', 'Vũ Yên/Lê Thị Minh', '5B5', '1,5', 'Điểm test lần 2 khóa tháng 7'),
(123, 'Nguyễn Trang Linh', 'Nguyễn Duy Phương', '5B2', '10,5', 'Điểm test lần 2 khóa tháng 7'),
(124, 'Nghiêm Xuân Sơn', 'Nghiêm Quyết Thắng', '', '', 'Điểm test lần 2 khóa tháng 7'),
(125, 'Phạm Thị Hằng', 'Phạm Thế Hưng', '5B2', '10,5', 'Điểm test lần 2 khóa tháng 7'),
(126, 'Trần Hải Anh', 'Nguyễn Thị Ánh Tuyết', '5B2', '10,5', 'Điểm test lần 2 khóa tháng 7'),
(127, 'Vũ Nhật Anh ', 'Vũ Thanh Hoa', '5B2', '10,5', 'Điểm test lần 2 khóa tháng 7'),
(128, 'Đinh Viết Quang', 'Nguyễn Thị Kim Ngọc', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(129, 'Khổng Minh Ngọc', 'Nguyễn Thị Hoài ', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(130, 'Nguyễn Huy Quang', 'Nguyễn Huy Trung', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(131, 'Lê Minh Đức', 'Lê Văn Thắng', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(132, 'Nguyễn Thế Phúc Kháng', 'Thẩm Kim Hoàn', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(133, 'Nguyễn Thị Mai Sương', 'Phạm Thị Lệ Hoa', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(134, 'Nguyễn Tuấn Minh', 'Nguyễn Bá Hùng', '5B2', '11,5', 'Điểm test lần 2 khóa tháng 7'),
(135, 'Hoàng Nguyễn Minh Trang', 'Nguyễn Thị Hoa', '5B2', '12,5', 'Điểm test lần 2 khóa tháng 7'),
(136, 'Nguyễn Văn Duy Anh', 'Phạm Châu Anh', '5B2', '12,5', 'Điểm test lần 2 khóa tháng 7'),
(137, 'Đỗ Nam Thắng', 'Nguyễn Thị Thu Hà', '5B2', '13,5', 'Điểm test lần 2 khóa tháng 7'),
(138, 'Nguyễn Đức Nghĩa', 'Nguyễn Bá Khương', '5B2', '13,5', 'Điểm test lần 2 khóa tháng 7'),
(139, 'Nguyễn Văn Kiên', 'Nguyễn Văn Tuyến', '5B5', '2,5', 'Điểm test lần 2 khóa tháng 7'),
(140, 'Phạm Quỳnh Hương', 'Phạm Xuân Hải', '5B5', '2,5', 'Điểm test lần 2 khóa tháng 7'),
(141, 'Phạm Khánh Huyền', 'Nguyễn Thị Việt Hà', '', '', 'Điểm test lần 2 khóa tháng 7'),
(142, 'Phạm Tuấn Vũ', 'Nguyễn Thu Huyền', '5B5', '2,5', 'Điểm test lần 2 khóa tháng 7'),
(143, 'Đỗ Quốc Trung', 'Đỗ Hùng Kiên', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(144, 'Nguyễn Hải Đăng', 'Nguyễn Vũ Trường Giang', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(145, 'Nguyễn Hữu Lực', 'Nguyễn Thúy Nga', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(146, 'Nguyễn Minh Anh', 'Nguyễn văn Cương', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(147, 'Dương Xuân Quang', 'Trần Thị Xuân', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(148, 'Nguyễn Phương Anh', 'Lê Thị Thanh Huyền ', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(149, 'Nguyễn Phan Bách', 'Phan Thị Hiền Lương', '5B5', '3,5', 'Điểm test lần 2 khóa tháng 7'),
(150, 'Đặng Tuấn Hiệp', 'Đặng Ngọc Quý', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(151, 'Đào Hồng Ngọc', 'Dương Mai Hoa', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(152, 'Trần Lâm Chi', 'Phạm Thu Hà', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(153, 'Nguyễn Hà Trinh', 'Nguyễn Thị Phương', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(154, 'Nguyễn Phương Anh', 'Nguyễn Văn Hưởng', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(155, 'Nguyễn Duy Khánh', 'Nguyễn Thanh Hồng', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(156, 'Nguyễn Minh Phúc', 'Hoàng Lan Anh', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(157, 'Trần Ngọc Cường', 'Ngô Thị Hương', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(158, 'Nguyễn Xuân Duy Anh', 'Tạ Ngọc Anh', '5A5', '4,5', 'Điểm test lần 2 khóa tháng 7'),
(159, 'Đặng Trần Văn Nguyên', 'Trần Đỗ Hải Yến', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(160, 'Đỗ Diệu Minh', 'Vũ Thị Thu Thủy', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(161, 'Đặng Trần Cường', 'Đặng Trần Chính', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(162, 'Đỗ Thị Thanh Vân', 'Nguyễn Thị Kim Hoa', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(163, 'Vũ Thúy Quỳnh', 'Vũ Thị Hương', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(164, 'Hà Trần Khánh Linh', 'Hà Ngọc Dũng', '', '', 'Điểm test lần 2 khóa tháng 7'),
(165, 'Trần Ánh Phương', 'Trần Nguyệt Ánh', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(166, 'Nguyễn Hữu Trung Kiên', 'Nguyễn Thanh Hoa', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(167, 'Đỗ Hoàng Dương ', 'Đỗ Hùng Mạnh', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(168, 'Đỗ Thùy Trang', 'Vũ Thị Khánh', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(169, 'Nguyễn Hà Chi', 'Nguyễn Thị Thu Hiền', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(170, 'Trần Minh Anh', 'Tôn Nữ Lan Phương', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(171, 'Tôn Thất Vương Anh', 'Phạm Thị Hà', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(172, 'Nguyễn Thị Vân Đan', 'Lê Thị Ngân', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(173, 'Phùng Thùy Trang', 'Nguyễn Thị Lan', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(174, 'Trần Thảo Vi', 'Lê Thị Thanh Hương', '', '', 'Điểm test lần 2 khóa tháng 7'),
(175, 'Nguyễn Tiến Trường', 'Nguyễn Thị Xuân', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(176, 'Vũ Đặng Anh Quân', 'Vũ Anh Phong', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(177, 'Trần Phương Lam', 'Trịnh Mai Ly', '5B4', '5,5', 'Điểm test lần 2 khóa tháng 7'),
(178, 'Phạm Hồng Phúc', 'Phạm Hồng Minh', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(179, 'Lê Phan Anh Thư', 'Trịnh Phan Liên', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(180, 'Đoàn Ngọc Minh', 'Vương Thị Hồng', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(181, 'Đỗ Trung Nghĩa', 'Đỗ Quang Minh', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(182, 'Hoàng Diệu Linh', 'Hoàng Thị Hoài Yến', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(183, 'Lương Hồng Dương', 'Nguyễn Thúy Hằng', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(184, 'Nguyễn Quang Minh', 'Hà Sơn Bình', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(185, 'Lê Thùy Hương', 'Kiều Thanh Hải', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(186, 'Phan Nguyễn Phương Nhi', 'Nguyễn Thị Minh Phương', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(187, 'Nguyễn Quang Phúc Thành', 'Bùi Thu Thủy', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(188, 'Trần Hải Bình', 'Kiều Thị Miên', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(189, 'Nguyễn Việt Hưng', 'Đặng Thị Lành', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(190, 'Trần Hải Hà', 'Trần Đăng', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(191, 'Nguyễn Lâm Khoa', 'Nguyễn Tiến Bình', '5A4', '6,5', 'Điểm test lần 2 khóa tháng 7'),
(192, 'Cao Phương Quỳnh', 'Cao Thành Phương', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(193, 'Đặng Xuân Nguyên', 'Nguyễn Thị Hồng', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(194, 'Đỗ Khôi Nguyên', 'Hoàng Thị Ngọc Thủy', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(195, 'Đinh Huệ Linh', 'Lê Ngọc Huệ', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(196, 'Đỗ Hà Chi', 'Nguyễn Thị Việt Hà', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(197, 'Hoàng Trung Hiếu', 'Hoàng Xuân Sơn', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(198, 'Đỗ Huy Anh', 'Hàn Ngọc Lan', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(199, 'Trần Thu Ngân', 'Trần Mai Liên', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(200, 'Phạm Thùy Linh ', 'Nguyễn Thị Ngọc Lan ', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(201, 'Phan Trần Minh Ngọc', 'Phan Thành Dương', '', '', 'Điểm test lần 2 khóa tháng 7'),
(202, 'Nguyễn Bảo Trang', 'Bùi Thu Hằng', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(203, 'Nguyễn Tú Minh', 'Phạm Hồng Hoa', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(204, 'Nguyễn Tài Phúc', 'Phạm Thị Thúy Lan', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(205, 'Trần Minh Tùng', 'Nguyễn Thị Hằng', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(206, 'Trần Hoàng Anh Quân', 'Trần Hoàng Anh', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(207, 'Vũ Đức Kiên', 'Vũ Trí Thành', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(208, 'Nguyễn Tường Vy', 'Đỗ Thị Hoài Thu', '5B3', '7,5', 'Điểm test lần 2 khóa tháng 7'),
(209, 'Nguyễn Duy Uyên', 'Nguyễn Thị Thu Hương', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(210, 'Lê Thái Chí', 'Nguyễn Phương Anh', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(211, 'Phạm Vũ Minh Đức', 'Vũ Thị Yến', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(212, 'Nguyễn Phương Mai', 'Bùi Thị Mai Hương', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(213, 'Trịnh Nam Phong', 'Dương Thị Hạnh Phúc', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(214, 'Trần Nguyễn Vân Tiên', 'Nguyễn Thị Thanh Thủy', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(215, 'Nguyễn Văn Hảo Minh', 'Nguyễn Huy Bình', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(216, 'Vũ Thị Mai Phương', 'Nguyễn Thanh Tú', '5B3', '8,5', 'Điểm test lần 2 khóa tháng 7'),
(217, 'Nguyễn Tuấn Khanh', 'Trần Thị Hương', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(218, 'Đoàn Nguyễn Hoàng Long', 'Nguyễn Thu Hương', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(219, 'Đỗ Xuân Nghĩa ', 'Phan Thị Hải Nam ', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(220, 'Ngô Quang Phúc', 'Nguyễn Thị Ánh Nguyệt', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(221, 'Nguyễn Diệu Linh', 'Nguyễn Thị Thanh Thủy', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(222, 'Phạm Ngọc Bách', 'Vũ Thị Hồng Hải', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(223, 'Nguyễn Trung Kiên', 'Nguyễn Thị Hiền', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7'),
(224, 'Trần Đức Toàn', 'Hà Mỹ Hạnh', '5A3', '9,5', 'Điểm test lần 2 khóa tháng 7');

-- --------------------------------------------------------

--
-- Table structure for table `unix_dotthi`
--

CREATE TABLE IF NOT EXISTS `unix_dotthi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dotthi` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unix_dotthi`
--

INSERT INTO `unix_dotthi` (`id`, `dotthi`) VALUES
(11, 'Điểm test lần 2 khóa tháng 7');

-- --------------------------------------------------------

--
-- Table structure for table `unix_gioithieu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu` (
  `gioithieu_id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gioithieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_gioithieu`
--

INSERT INTO `unix_gioithieu` (`gioithieu_id`, `noidung`) VALUES
(1, '<ol>\n	<li><strong>1. Giới thiệu công ty Unix:</strong></li>\n<ul>\n	<li>Công ty cổ phần Unix được thành lập bởi các doanh nhân và chuyên gia đào tạo nhiều kinh nghiệm đến từ nhiều đơn vị giáo dục khác nhau. Chúng tôi muốn tạo nên một cái tên mới với mục tiêu giúp cho khách hàng được tiếp cận với những chương trình đào tạo chất lượng nhất.</li>\n</ul>\n	<li><strong>2. Khi tham gia các khóa học do công ty Unix tổ chức học viên sẽ được:</strong></li>\n<ul>\n	<li>- Đào tạo và huấn luyện theo những phương pháp đào tạo mới nhất và đang được áp dụng hiệu quả trên thế giới.</li>\n	<li>- Khơi nguồn cảm hứng và có những nguồn động lực mạnh mẽ khi tham gia khóa học.</li>\n	<li>- Được đào tạo và huấn luyện bởi những giảng viên, chuyên gia đào tạo tốt nhất.</li>\n	<li>- Luôn tạo nên những hiệu quả vượt trội sau khi tham gia chương trình.</li>\n</ul>\n	<li><strong>3. Diễn giả, chuyên gia đào tạo:</strong></li>\n<ul>\n	<li>- Những giáo viên, diễn giả, chuyên gia đào tạo được công ty Unix mời tham gia giảng dạy luôn là những người không chỉ có chuyên môn vững vàng , dày dạn kinh nghiệm mà điều quan trọng nhất là họ phải là người tạo ra hiệu quả cao nhất trong học viên. Chính vì lẽ đó các diễn giả, chuyên gia đào tạo của công ty Unix luôn thường xuyên tham gia các chương trình đào tạo của các chuyên gia, diễn giả hàng đầu trên thế giới, để không ngừng cập nhật những phương pháp đào tạo tốt nhất , nâng cao kỹ năng giảng dạy và kiến thức chuyên môn.</li>\n</ul>\n	<li><strong>4. Sứ mệnh của Unix education:</strong></li>\n<ul>\n	<li>- Unix education ra đời với một sứ mệnh là giúp cho mọi người được tiếp cận với những chương trình đào tạo tốt nhất.</li>\n</ul>\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `unix_gioithieu_submenu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `unix_gioithieu_submenu`
--

INSERT INTO `unix_gioithieu_submenu` (`submenu_id`, `ten`, `noidung`) VALUES
(1, 'Tầm nhìn', 'Đây là trang tầm nhìn'),
(2, 'Sứ mệnh', 'Đây là trang Sứ mệnh'),
(3, 'Đội ngũ giảng dạy', '<p><a><strong>Giảng vi&ecirc;n: Thầy Phan Quang Điệp</strong></a>:</p>\r\n<p>Hiện tại thầy được c&ocirc;ng nhận giảng vi&ecirc;n quốc tế của tập đo&agrave;n gi&aacute;o dục  Skyquestcom Singapore, gi&aacute;o vi&ecirc;n chuy&ecirc;n luyện thi Olympic To&aacute;n Ch&acirc;u &Aacute;  Th&aacute;i B&igrave;nh Dương , chuy&ecirc;n gia đ&agrave;o tạo trong lĩnh vực ph&aacute;t triển con  người, một người thầy truyền cảm hứng tuyệt vời cho c&aacute;c em học sinh.</p>\r\n<ul>\r\n<li>L&agrave; gi&aacute;o vi&ecirc;n chuy&ecirc;n luyện thi m&ocirc;n to&aacute;n trường Amsterdam  uy t&iacute;n tại H&agrave; Nội với những b&agrave;i giảng:&ldquo; Bứt ph&aacute; trong k&igrave; thi To&aacute;n trường  Ams&rdquo;, &ldquo; Giải to&aacute;n si&ecirc;u tốc bằng m&aacute;y t&iacute;nh bỏ t&uacute;i&rdquo;, &ldquo; Chiến thuật v&agrave; thủ  thuật trong kỳ thi m&ocirc;n to&aacute;n trường Ams&rdquo;,&hellip;</li>\r\n</ul>\r\n<ul>\r\n<li>Rất nhiều học sinh của thầy đ&atilde; đạt được những th&agrave;nh t&iacute;ch  cao trong c&aacute;c cuộc thi quốc tế v&agrave; gi&agrave;nh nhiều học bổng tại c&aacute;c trường  danh tiếng tại Mỹ, Singapore, H&agrave;n Quốc,&nbsp;<strong>thi đỗ th&agrave;nh t&iacute;ch cao v&agrave;o trường H&agrave; Nội Amsterdam&hellip;</strong></li>\r\n<strong><br /></strong>\r\n<li>Thầy đ&atilde; từng c&oacute; những buổi hội thảo chuy&ecirc;n đề chất lượng  tại Bộ Văn H&oacute;a Thể Thao v&agrave; Du Lịch,&nbsp; viện Dinh Dưỡng Quốc Gia,&nbsp; Tập  đo&agrave;n&nbsp; Gi&aacute;o dục Skyquestcom Singapore, Felix Group v&agrave; nhiều doanh nghiệp,  trường học, trung t&acirc;m đ&agrave;o tạo v v&hellip;</li>\r\n</ul>\r\n<h6><em>Th&ocirc;ng tin tham khảo xem tại</em>: <a href="http://www.youtube.com/watch?v=I92V_KtbIsk&list=PL30753C016F010232&index=3&feature=plpp_video">http://www.youtube.com/watchv=I92V_KtbIsk&amp;list=PL30753C016F010232&amp;index=3&amp;feature=plpp_video</a></h6>');

-- --------------------------------------------------------

--
-- Table structure for table `unix_hoidap`
--

CREATE TABLE IF NOT EXISTS `unix_hoidap` (
  `ngaytraloi` datetime DEFAULT NULL,
  `id_hoidap` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodt` text COLLATE utf8_unicode_ci,
  `noidung` text COLLATE utf8_unicode_ci,
  `traloi` text COLLATE utf8_unicode_ci,
  `ngaygui` datetime DEFAULT NULL,
  `luotxem` int(11) DEFAULT NULL,
  `luottraloi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hoidap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `unix_hoidap`
--

INSERT INTO `unix_hoidap` (`ngaytraloi`, `id_hoidap`, `ten`, `sodt`, `noidung`, `traloi`, `ngaygui`, `luotxem`, `luottraloi`) VALUES
('2012-08-28 17:58:08', 7, 'Nguyễn Đức Tiến', '0987654321', '<p>T&ocirc;i l&agrave; Nguyễn Đức Tiến, t&ocirc;i c&oacute; một thằng ch&aacute;u &nbsp;t&ecirc;n l&agrave; Nguyễn Tiến Mạnh, ch&aacute;u đang học lớp 3, hiện tại ch&aacute;u học rất dốt....</p>', '<p>Dốt nhưng m&agrave; ngoan l&agrave; ok ! Ha ha ha !</p>', '2012-08-19 17:21:56', 18, 4),
('2012-08-27 13:55:07', 8, 'Nguyễn Đức Tiến', '0987384249', '<p>text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;</p>', '<p>trả lời tại đ&acirc;y</p>', '2012-08-19 17:22:16', 21, 5),
('2012-08-27 13:55:34', 9, 'Nguyễn Đức Tiến', '0987384249', '<p>text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;text-indent text-indent&nbsp;</p>', '', '2012-08-19 17:44:41', 12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `unix_hoithao`
--

CREATE TABLE IF NOT EXISTS `unix_hoithao` (
  `hoithao_id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL,
  `phanhoi` bit(1) DEFAULT NULL,
  `anhdaidien` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`hoithao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unix_hoithao`
--

INSERT INTO `unix_hoithao` (`hoithao_id`, `tieude`, `noidung`, `thoigian`, `phanhoi`, `anhdaidien`) VALUES
(11, 'Chinh phục môn Toán trường HN Ams', '<p class="MsoListParagraph"><strong><span  #00ff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="EN-US">L&agrave;m thế n&agrave;o để tăng từ 1 đến 2 điểm ngay l&acirc;̣p tức bằng ch&iacute;nh khả năng học của m&igrave;nh?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span  #00ff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="EN-US">L&agrave;m thế n&agrave;o để đạt tr&ecirc;n 12/15 điểm chỉ trong 15 đến 20 ph&uacute;t l&agrave;m b&agrave;i?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span  #00ff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="EN-US">L&agrave;m thế n&agrave;o để c&oacute; được phong độ l&agrave;m b&agrave;i tốt nhất trước khi thi?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span  #00ff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="EN-US">Tại sao nhiều học sinh c&oacute; sức học tốt nhưng vẫn kh&ocirc;ng c&oacute; được kết quả như mong muốn?</span></span></strong></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span  #00ff00;"> K&igrave; thi v&agrave;o c&acirc;́p 2 trường H&agrave; N&ocirc;̣i Amsterdam được coi l&agrave; như l&agrave; m&ocirc;̣t trong những kỳ thi kh&oacute; nh&acirc;́t đ&ocirc;́i với c&aacute;c học sinh ti&ecirc;̉u học. Kỳ thi n&agrave;y kh&ocirc;ng chỉ l&agrave; m&ocirc;̣t cu&ocirc;̣c tuy&ecirc;̉n chọn, n&oacute; c&ograve;n l&agrave; cơ h&ocirc;̣i đ&ecirc;̉ c&aacute;c em học sinh ph&acirc;́n đ&acirc;́u n&ocirc;̃ lực v&agrave; n&acirc;ng cao khả năng học t&acirc;̣p của m&igrave;nh.</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span  #00ff00;">Đặc biệt m&ocirc;n To&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam ho&agrave;n to&agrave;n kh&aacute;c với những kỳ thi v&agrave; những b&agrave;i kiểm tra th&ocirc;ng thường. Để l&agrave;m tốt b&agrave;i thi c&aacute;c em học sinh cần phải c&oacute; những kỹ năng, chiến thuật l&agrave;m b&agrave;i, những phương ph&aacute;p đặc biệt d&agrave;nh ri&ecirc;ng cho kỳ thi n&agrave;y. V&acirc;̣y phải &ocirc;n thi v&agrave; chu&acirc;̉n bị cho kỳ thi n&agrave;y như th&ecirc;́ n&agrave;o?</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span  #00ff00;">Chương tr&igrave;nh &ldquo;Chinh phục m&ocirc;n To&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo; sẽ gi&uacute;p c&aacute;c em học sinh:</span></span></p>\r\n<p class="MsoListParagraph"><a name="_GoBack"><span  #00ff00;"><strong><span lang="EN-US">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">C&oacute; những động lực th&uacute;c đẩy mạnh mẽ v&agrave; tr&agrave;n đầy quyết t&acirc;m cho kỳ thi.</span></strong></span></a></p>\r\n<p class="MsoListParagraph"><span  #00ff00;"><strong><span lang="EN-US">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Sở hữu những chiến thuật l&agrave;m b&agrave;i ri&ecirc;ng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</span></strong></span></p>\r\n<p class="MsoListParagraph"><span  #00ff00;"><strong><span lang="EN-US">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">C&oacute; c&aacute;c phương ph&aacute;p &ocirc;n t&acirc;̣p đ&ecirc;̉ đạt k&ecirc;́t quả t&ocirc;́t nh&acirc;́t trong k&igrave; thi</span></strong></span></p>\r\n<p class="MsoListParagraph"><span  #00ff00;"><strong><span lang="EN-US">4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Kh&aacute;m ph&aacute; những phương ph&aacute;p đ&ecirc;̉ đạt tr&ecirc;n 12/15 đi&ecirc;̉m to&aacute;n chỉ trong 15-20 ph&uacute;t l&agrave;m b&agrave;i.</span></strong></span></p>\r\n<p><strong><span lang="EN-US"><span  #00ff00;"><br /></span></span></strong></p>\r\n<p><strong><span lang="EN-US"><span  #00ff00;">Diễn giả: Th&acirc;̀y Phan Quang Đi&ecirc;̣p</span></span></strong></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span  #00ff00;">&nbsp; &nbsp; &nbsp; &nbsp;Hiện tại th&acirc;̀y được c&ocirc;ng nh&acirc;̣n giảng vi&ecirc;n qu&ocirc;́c t&ecirc;́ của t&acirc;̣p đo&agrave;n gi&aacute;o dục Skyquestcom Singapore, gi&aacute;o vi&ecirc;n chuy&ecirc;n luy&ecirc;̣n thi Olympic To&aacute;n Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương , chuy&ecirc;n gia đ&agrave;o tạo trong lĩnh vực ph&aacute;t triển con người, một người thầy truyền cảm hứng tuy&ecirc;̣t vời cho c&aacute;c em học sinh.</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span  #00ff00;"> L&agrave; gi&aacute;o vi&ecirc;n chuy&ecirc;n luy&ecirc;̣n thi m&ocirc;n to&aacute;n trường Amsterdam uy t&iacute;n tại H&agrave; N&ocirc;̣i với những b&agrave;i giảng:&ldquo; Bứt ph&aacute; trong k&igrave; thi To&aacute;n trường Ams&rdquo;, &ldquo; Giải to&aacute;n si&ecirc;u t&ocirc;́c bằng m&aacute;y t&iacute;nh bỏ t&uacute;i&rdquo;, &ldquo; Chi&ecirc;́n thu&acirc;̣t v&agrave; thủ thu&acirc;̣t trong kỳ thi m&ocirc;n to&aacute;n trường Ams&rdquo;,&hellip;</span></span></p>\r\n<p class="MsoListParagraph"><span  #00ff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp;</span><span lang="EN-US">R&acirc;́t nhi&ecirc;̀u học sinh của th&acirc;̀y đ&atilde; đạt được những th&agrave;nh t&iacute;ch cao trong c&aacute;c cu&ocirc;̣c thi qu&ocirc;́c t&ecirc;́ v&agrave; gi&agrave;nh nhi&ecirc;̀u học b&ocirc;̉ng tại c&aacute;c trường danh ti&ecirc;́ng tại Mỹ, Singapore, H&agrave;n Qu&ocirc;́c, <strong>thi đ&ocirc;̃ th&agrave;nh t&iacute;ch cao v&agrave;o trường H&agrave; N&ocirc;̣i Amsterdam&hellip;</strong></span></span></p>\r\n<p class="MsoListParagraph"><span  #00ff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp;</span><span lang="EN-US">Th&acirc;̀y đ&atilde; từng c&oacute; những buổi hội thảo chuy&ecirc;n đề chất lượng tại Bộ Văn H&oacute;a Thể Thao v&agrave; Du Lịch,&nbsp; viện Dinh Dưỡng Quốc Gia,&nbsp; T&acirc;̣p đo&agrave;n&nbsp; Gi&aacute;o dục Skyquestcom Singapore, Felix Group v&agrave; nhiều doanh nghiệp, trường học, trung t&acirc;m đ&agrave;o tạo v v&hellip;</span><strong><span lang="EN-US">&nbsp;</span></strong></span></p>\r\n<p class="MsoNormal"><span  #00ff00;"><strong><span lang="EN-US">Cảm nh&acirc;̣n của&nbsp; phụ huynh v&agrave; học sinh đ&atilde; từng tham gia chương tr&igrave;nh</span></strong><span lang="EN-US">:</span></span></p>\r\n<p class="MsoNormal"><span  #00ff00;"><em><span lang="EN-US">&ldquo;&hellip;Trước khi tham gia chương tr&igrave;nh &ldquo;</span></em><em><span lang="EN-US">Bứt ph&aacute; trong k&igrave; thi m&ocirc;n to&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo; của th&acirc;̀y Phan Quang Đi&ecirc;̣p, t&ocirc;i v&agrave; con trai cũng kh&ocirc;ng c&oacute; &yacute; định thi v&agrave;o trường Ams. L&uacute;c đ&oacute;, v&agrave;o th&aacute;ng 5 ch&aacute;u l&agrave;m b&agrave;i thi thử m&ocirc;n to&aacute;n chỉ đạt từ&nbsp; 2/15&nbsp; đ&ecirc;́n 4 / 15 đi&ecirc;̉m, ch&aacute;u cũng kh&ocirc;ng th&iacute;ch học m&ocirc;n to&aacute;n. Nhưng sau khi tham dự chương tr&igrave;nh n&agrave;y cả hai mẹ con đ&atilde; thực sự thay đ&ocirc;̉i v&agrave; quy&ecirc;́t t&acirc;m thi v&agrave;o trường Amsterdam. V&agrave; th&acirc;̣t tuy&ecirc;̣t vời th&acirc;̀y Đi&ecirc;̣p đ&atilde; truyền cảm hứng học tập c&oacute; những phương ph&aacute;p giảng dạy tuyệt vời gi&uacute;p con trai t&ocirc;i đạt 10/15 đi&ecirc;̉m to&aacute;n sau v&agrave;i bu&ocirc;̉i hu&acirc;́n luy&ecirc;̣n trước ng&agrave;y thi. Th&acirc;̣t sự gia đ&igrave;nh t&ocirc;i r&acirc;́t bi&ecirc;́t ơn th&acirc;̀y v&ecirc;̀ những b&agrave;i giảng tuy&ecirc;̣t vời m&agrave; th&acirc;̀y đ&atilde; d&agrave;nh cho con t&ocirc;i&hellip;. &rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></em></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span  #00ff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chị Lan Anh-PHHS ch&aacute;u Đ&agrave;o Ph&uacute;c Th&agrave;nh</span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span  #00ff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tr&uacute;ng tuyển k&igrave; th&igrave; tuyển sinh lớp 6 H&agrave; N&ocirc;̣i Amsterdam 2010</span></span></p>\r\n<p class="MsoNormal"><em><span lang="EN-US"><span  #00ff00;">***</span></span></em></p>\r\n<p class="MsoNormal"><em><span lang="EN-US"><span  #00ff00;">&ldquo;&hellip;T&ocirc;i t&ecirc;n l&agrave; L&ecirc; Qu&yacute; Dương, t&ocirc;i c&oacute; ước mơ thi đỗ v&agrave;o trường H&agrave; Nội Amsterdam.Trước khi tham gia chương tr&igrave;nh n&agrave;y điểm thi thử của t&ocirc;i chỉ được từ 5-6 điểm. Nhưng sau khi học c&aacute;c phương ph&aacute;p, chiến thuật v&agrave; thủ thuật l&agrave;m b&agrave;i nhanh m&agrave; thầy Điệp hướng dẫn điểm số của t&ocirc;i đ&atilde; n&acirc;ng l&ecirc;n 11-12 điểm.V&agrave; thật tuyệt vời ước mơ của t&ocirc;i đ&atilde; th&agrave;nh sự thật.Hẹn gặp lại c&aacute;c bạn tại trường H&agrave; Nội Amsterdam...&rdquo;</span></span></em></p>\r\n<p class="MsoNormal"><span  #00ff00;"><em><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></em><span lang="EN-US">L&ecirc; Qu&yacute; Dương-HS trường tiểu học Th&aacute;i Thịnh&nbsp;</span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span  #00ff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Ams 2011.&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>\r\n<p class="MsoNormal"><strong><em><span lang="EN-US"><span  #00ff00;">***</span></span></em></strong></p>\r\n<p class="MsoNormal"><span  #00ff00;"><strong><em><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></em></strong><strong><em><span lang="EN-US">&nbsp;</span></em></strong><em><span lang="EN-US">Ph&iacute; tham dự chương tr&igrave;nh l&agrave; 300.000 vnđ. Ban tổ chức t&agrave;i trợ miễn ph&iacute; cho 30 người đăng k&yacute; đầu ti&ecirc;n. Để đăng k&yacute; tham dự chương tr&igrave;nh qu&yacute; PHHS vui l&ograve;ng gọi theo <strong>hotline: (04)62764637</strong></span></em></span></p>\r\n<p class="MsoNormal"><span  #00ff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Thời gian: _</strong></span><strong>S&aacute;ng 8h45-10h45, CN ng&agrave;y 12/08/2012</strong></span></p>\r\n<p class="MsoNormal"><span  #00ff00;"><span lang="EN-US"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _</strong></span><strong>Chiều 15h-17h, CN ng&agrave;y 12/08/2012</strong></span></p>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span  #00ff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Địa chỉ: &nbsp;Hội trường tầng 2 - t&ograve;a nh&agrave; 137 Nguyễn Ngọc Vũ- Q.Cầu Giấy. (S&agrave;n giao dịch bất động sản)</span></span></strong><strong><span lang="EN-US"> </span></strong></p>', '2012-08-09', '1', '../../assets/images/diem-thi10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unix_hoithao_default`
--

CREATE TABLE IF NOT EXISTS `unix_hoithao_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `ngaydang` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_hoithao_default`
--

INSERT INTO `unix_hoithao_default` (`id`, `tieude`, `noidung`, `ngaydang`) VALUES
(1, 'Chinh phục môn Toán trường HN Ams', '<p><strong><span style="background-color: #ffff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-US">L&agrave;m thế n&agrave;o để tăng từ 1 đến 2 điểm ngay l&acirc;̣p tức bằng ch&iacute;nh khả năng học của m&igrave;nh?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span style="background-color: #ffff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-US">L&agrave;m thế n&agrave;o để đạt tr&ecirc;n 12/15 điểm chỉ trong 15 đến 20 ph&uacute;t l&agrave;m b&agrave;i?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span style="background-color: #ffff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-US">L&agrave;m thế n&agrave;o để c&oacute; được phong độ l&agrave;m b&agrave;i tốt nhất trước khi thi?</span></span></strong></p>\r\n<p class="MsoListParagraph"><strong><span style="background-color: #ffff00;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-US">Tại sao nhiều học sinh c&oacute; sức học tốt nhưng vẫn kh&ocirc;ng c&oacute; được kết quả như mong muốn?</span></span></strong></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span style="background-color: #ffff00;">K&igrave; thi v&agrave;o c&acirc;́p 2 trường H&agrave; N&ocirc;̣i Amsterdam được coi l&agrave; như l&agrave; m&ocirc;̣t trong những kỳ thi kh&oacute; nh&acirc;́t đ&ocirc;́i với c&aacute;c học sinh ti&ecirc;̉u học. Kỳ thi n&agrave;y kh&ocirc;ng chỉ l&agrave; m&ocirc;̣t cu&ocirc;̣c tuy&ecirc;̉n chọn, n&oacute; c&ograve;n l&agrave; cơ h&ocirc;̣i đ&ecirc;̉ c&aacute;c em học sinh ph&acirc;́n đ&acirc;́u n&ocirc;̃ lực v&agrave; n&acirc;ng cao khả năng học t&acirc;̣p của m&igrave;nh.</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span style="background-color: #ffff00;">Đặc biệt m&ocirc;n To&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam ho&agrave;n to&agrave;n kh&aacute;c với những kỳ thi v&agrave; những b&agrave;i kiểm tra th&ocirc;ng thường. Để l&agrave;m tốt b&agrave;i thi c&aacute;c em học sinh cần phải c&oacute; những kỹ năng, chiến thuật l&agrave;m b&agrave;i, những phương ph&aacute;p đặc biệt d&agrave;nh ri&ecirc;ng cho kỳ thi n&agrave;y. V&acirc;̣y phải &ocirc;n thi v&agrave; chu&acirc;̉n bị cho kỳ thi n&agrave;y như th&ecirc;́ n&agrave;o?</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span style="background-color: #ffff00;">Chương tr&igrave;nh &ldquo;Chinh phục m&ocirc;n To&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo; sẽ gi&uacute;p c&aacute;c em học sinh:</span></span></p>\r\n<p class="MsoListParagraph"><a name="_GoBack"><span style="background-color: #ffff00;"><strong><span lang="EN-US">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">C&oacute; những động lực th&uacute;c đẩy mạnh mẽ v&agrave; tr&agrave;n đầy quyết t&acirc;m cho kỳ thi.</span></strong></span></a></p>\r\n<p class="MsoListParagraph"><span style="background-color: #ffff00;"><strong><span lang="EN-US">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Sở hữu những chiến thuật l&agrave;m b&agrave;i ri&ecirc;ng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</span></strong></span></p>\r\n<p class="MsoListParagraph"><span style="background-color: #ffff00;"><strong><span lang="EN-US">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">C&oacute; c&aacute;c phương ph&aacute;p &ocirc;n t&acirc;̣p đ&ecirc;̉ đạt k&ecirc;́t quả t&ocirc;́t nh&acirc;́t trong k&igrave; thi</span></strong></span></p>\r\n<p class="MsoListParagraph"><span style="background-color: #ffff00;"><strong><span lang="EN-US">4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Kh&aacute;m ph&aacute; những phương ph&aacute;p đ&ecirc;̉ đạt tr&ecirc;n 12/15 đi&ecirc;̉m to&aacute;n chỉ trong 15-20 ph&uacute;t l&agrave;m b&agrave;i.</span></strong></span></p>\r\n<p><strong><span lang="EN-US"><span style="background-color: #ffff00;"><br /></span></span></strong></p>\r\n<p><strong><span lang="EN-US"><span style="background-color: #ffff00;">Diễn giả: Th&acirc;̀y Phan Quang Đi&ecirc;̣p</span></span></strong></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #ffff00;">&nbsp; &nbsp; &nbsp; &nbsp;Hiện tại th&acirc;̀y được c&ocirc;ng nh&acirc;̣n giảng vi&ecirc;n qu&ocirc;́c t&ecirc;́ của t&acirc;̣p đo&agrave;n gi&aacute;o dục Skyquestcom Singapore, gi&aacute;o vi&ecirc;n chuy&ecirc;n luy&ecirc;̣n thi Olympic To&aacute;n Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương , chuy&ecirc;n gia đ&agrave;o tạo trong lĩnh vực ph&aacute;t triển con người, một người thầy truyền cảm hứng tuy&ecirc;̣t vời cho c&aacute;c em học sinh.</span></span></p>\r\n<p class="MsoListParagraph"><span lang="EN-US"><span style="background-color: #ffff00;">L&agrave; gi&aacute;o vi&ecirc;n chuy&ecirc;n luy&ecirc;̣n thi m&ocirc;n to&aacute;n trường Amsterdam uy t&iacute;n tại H&agrave; N&ocirc;̣i với những b&agrave;i giảng:&ldquo; Bứt ph&aacute; trong k&igrave; thi To&aacute;n trường Ams&rdquo;, &ldquo; Giải to&aacute;n si&ecirc;u t&ocirc;́c bằng m&aacute;y t&iacute;nh bỏ t&uacute;i&rdquo;, &ldquo; Chi&ecirc;́n thu&acirc;̣t v&agrave; thủ thu&acirc;̣t trong kỳ thi m&ocirc;n to&aacute;n trường Ams&rdquo;,&hellip;</span></span></p>\r\n<p class="MsoListParagraph"><span style="background-color: #ffff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp;</span><span lang="EN-US">R&acirc;́t nhi&ecirc;̀u học sinh của th&acirc;̀y đ&atilde; đạt được những th&agrave;nh t&iacute;ch cao trong c&aacute;c cu&ocirc;̣c thi qu&ocirc;́c t&ecirc;́ v&agrave; gi&agrave;nh nhi&ecirc;̀u học b&ocirc;̉ng tại c&aacute;c trường danh ti&ecirc;́ng tại Mỹ, Singapore, H&agrave;n Qu&ocirc;́c,&nbsp;<strong>thi đ&ocirc;̃ th&agrave;nh t&iacute;ch cao v&agrave;o trường H&agrave; N&ocirc;̣i Amsterdam&hellip;</strong></span></span></p>\r\n<p class="MsoListParagraph"><span style="background-color: #ffff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp;</span><span lang="EN-US">Th&acirc;̀y đ&atilde; từng c&oacute; những buổi hội thảo chuy&ecirc;n đề chất lượng tại Bộ Văn H&oacute;a Thể Thao v&agrave; Du Lịch,&nbsp; viện Dinh Dưỡng Quốc Gia,&nbsp; T&acirc;̣p đo&agrave;n&nbsp; Gi&aacute;o dục Skyquestcom Singapore, Felix Group v&agrave; nhiều doanh nghiệp, trường học, trung t&acirc;m đ&agrave;o tạo v v&hellip;</span><strong><span lang="EN-US">&nbsp;</span></strong></span></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><strong><span lang="EN-US">Cảm nh&acirc;̣n của&nbsp; phụ huynh v&agrave; học sinh đ&atilde; từng tham gia chương tr&igrave;nh</span></strong><span lang="EN-US">:</span></span></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><em><span lang="EN-US">&ldquo;&hellip;Trước khi tham gia chương tr&igrave;nh &ldquo;</span></em><em><span lang="EN-US">Bứt ph&aacute; trong k&igrave; thi m&ocirc;n to&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo; của th&acirc;̀y Phan Quang Đi&ecirc;̣p, t&ocirc;i v&agrave; con trai cũng kh&ocirc;ng c&oacute; &yacute; định thi v&agrave;o trường Ams. L&uacute;c đ&oacute;, v&agrave;o th&aacute;ng 5 ch&aacute;u l&agrave;m b&agrave;i thi thử m&ocirc;n to&aacute;n chỉ đạt từ&nbsp; 2/15&nbsp; đ&ecirc;́n 4 / 15 đi&ecirc;̉m, ch&aacute;u cũng kh&ocirc;ng th&iacute;ch học m&ocirc;n to&aacute;n. Nhưng sau khi tham dự chương tr&igrave;nh n&agrave;y cả hai mẹ con đ&atilde; thực sự thay đ&ocirc;̉i v&agrave; quy&ecirc;́t t&acirc;m thi v&agrave;o trường Amsterdam. V&agrave; th&acirc;̣t tuy&ecirc;̣t vời th&acirc;̀y Đi&ecirc;̣p đ&atilde; truyền cảm hứng học tập c&oacute; những phương ph&aacute;p giảng dạy tuyệt vời gi&uacute;p con trai t&ocirc;i đạt 10/15 đi&ecirc;̉m to&aacute;n sau v&agrave;i bu&ocirc;̉i hu&acirc;́n luy&ecirc;̣n trước ng&agrave;y thi. Th&acirc;̣t sự gia đ&igrave;nh t&ocirc;i r&acirc;́t bi&ecirc;́t ơn th&acirc;̀y v&ecirc;̀ những b&agrave;i giảng tuy&ecirc;̣t vời m&agrave; th&acirc;̀y đ&atilde; d&agrave;nh cho con t&ocirc;i&hellip;. &rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></em></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #ffff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chị Lan Anh-PHHS ch&aacute;u Đ&agrave;o Ph&uacute;c Th&agrave;nh</span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #ffff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tr&uacute;ng tuyển k&igrave; th&igrave; tuyển sinh lớp 6 H&agrave; N&ocirc;̣i Amsterdam 2010</span></span></p>\r\n<p class="MsoNormal"><em><span lang="EN-US"><span style="background-color: #ffff00;">***</span></span></em></p>\r\n<p class="MsoNormal"><em><span lang="EN-US"><span style="background-color: #ffff00;">&ldquo;&hellip;T&ocirc;i t&ecirc;n l&agrave; L&ecirc; Qu&yacute; Dương, t&ocirc;i c&oacute; ước mơ thi đỗ v&agrave;o trường H&agrave; Nội Amsterdam.Trước khi tham gia chương tr&igrave;nh n&agrave;y điểm thi thử của t&ocirc;i chỉ được từ 5-6 điểm. Nhưng sau khi học c&aacute;c phương ph&aacute;p, chiến thuật v&agrave; thủ thuật l&agrave;m b&agrave;i nhanh m&agrave; thầy Điệp hướng dẫn điểm số của t&ocirc;i đ&atilde; n&acirc;ng l&ecirc;n 11-12 điểm.V&agrave; thật tuyệt vời ước mơ của t&ocirc;i đ&atilde; th&agrave;nh sự thật.Hẹn gặp lại c&aacute;c bạn tại trường H&agrave; Nội Amsterdam...&rdquo;</span></span></em></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><em><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></em><span lang="EN-US">L&ecirc; Qu&yacute; Dương-HS trường tiểu học Th&aacute;i Thịnh&nbsp;</span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #ffff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Ams 2011.&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>\r\n<p class="MsoNormal"><strong><em><span lang="EN-US"><span style="background-color: #ffff00;">***</span></span></em></strong></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><strong><em><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></em></strong><strong><em><span lang="EN-US">&nbsp;</span></em></strong><em><span lang="EN-US">Ph&iacute; tham dự chương tr&igrave;nh l&agrave; 300.000 vnđ. Ban tổ chức t&agrave;i trợ miễn ph&iacute; cho 30 người đăng k&yacute; đầu ti&ecirc;n. Để đăng k&yacute; tham dự chương tr&igrave;nh qu&yacute; PHHS vui l&ograve;ng gọi theo&nbsp;<strong>hotline: (04)62764637</strong></span></em></span></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><span lang="EN-US">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>Thời gian: _</strong></span><strong>S&aacute;ng 8h45-10h45, CN ng&agrave;y 12/08/2012</strong></span></p>\r\n<p class="MsoNormal"><span style="background-color: #ffff00;"><span lang="EN-US"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _</strong></span><strong>Chiều 15h-17h, CN ng&agrave;y 12/08/2012</strong></span></p>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span style="background-color: #ffff00;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Địa chỉ: &nbsp;Hội trường tầng 2 - t&ograve;a nh&agrave; 137 Nguyễn Ngọc Vũ- Q.Cầu Giấy. (S&agrave;n giao dịch bất động sản)</span></span></strong></p>\r\n<p>&nbsp;</p>', '2012-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `unix_homepage`
--

CREATE TABLE IF NOT EXISTS `unix_homepage` (
  `muc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmuc` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dulieu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`muc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unix_homepage`
--

INSERT INTO `unix_homepage` (`muc_id`, `tenmuc`, `dulieu`) VALUES
(1, 'Khóa học', '<p>Chương tr&igrave;nh đ&agrave;o tạo tại UNIX lu&ocirc;n được cập nhật nhằm cung cấp những kiến thức mới nhất với mục ti&ecirc;u hỗ trợ tối đa về kiến thức d&agrave;nh cho học vi&ecirc;n tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo tại UNIX.</p>'),
(2, 'Phương pháp đào tạo', '<p>C&ocirc;ng ty Cổ phần UNIX cung cấp c&aacute;c chương tr&igrave;nh ph&aacute;t triển c&aacute; nh&acirc;n h&agrave;ng đầu cho c&aacute;c em học sinh tr&ecirc;n c&aacute;c lĩnh vực: Học thuật (To&aacute;n, Văn), Ph&aacute;t triển c&aacute; nh&acirc;n ..Với đội ngũ giảng vi&ecirc;n đ&agrave;o tạo li&ecirc;n tục được cử đi học c&aacute;c kh&oacute;a học h&agrave;ng đầu trong v&agrave; ngo&agrave;i nước, ch&uacute;ng t&ocirc;i lu&ocirc;n đảm bảo rằng c&aacute;c học sinh tham gia c&aacute;c kh&oacute;a đ&agrave;o tạo b&ecirc;n UNIX sẽ được tiếp cận với những phương ph&aacute;p đ&agrave;o tạo mới nhất v&agrave; li&ecirc;n tục được cải tiến.</p>\r\n<p class="MsoNormal"><span lang="EN-US">Chương tr&igrave;nh :"Bứt ph&aacute; m&ocirc;n To&aacute;n trường H&agrave; Nội Ams" đ&atilde; được thiết kế c&ocirc;ng phu v&agrave; với sự phối hợp của c&aacute;c gi&aacute;o vi&ecirc;n , chuy&ecirc;n gia huấn luyện, c&aacute;c em sẽ:</span></p>\r\n<p class="MsoListParagraphCxSpFirst"><strong><span lang="EN-US">Sở hữu c&aacute;c chiến thuật l&agrave;m b&agrave;i hiệu quả để n&acirc;ng tối đa điểm số của m&igrave;nh.</span></strong></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Hi&ecirc;̉u r&otilde; phương ph&aacute;p giải của hơn 75 dạng to&aacute;n của hơn 10 chuy&ecirc;n đ&ecirc;̀ thường xuy&ecirc;n xu&acirc;́t hi&ecirc;̣n trong kỳ thi.</span></strong></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">V&acirc;̣n dụng những phương ph&aacute;p giải to&aacute;n đặc bi&ecirc;̣t t&igrave;m đ&aacute;p s&ocirc;́ đ&uacute;ng cho c&aacute;c b&agrave;i to&aacute;n chỉ trong thời gian 15-30 gi&acirc;y.</span></strong></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Ho&agrave;n thi&ecirc;̣n từng kỹ năng xử l&yacute; c&aacute;c b&agrave;i to&aacute;n.</span></strong></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Quy&ecirc;́t t&acirc;m n&ocirc;̃ lực cho kỳ thi m&ocirc;̣t c&aacute;ch tự gi&aacute;c v&agrave; say m&ecirc;.</span></strong></p>\r\n<p class="MsoListParagraphCxSpLast"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">C&oacute; thể thi v&agrave;o bất kỳ một trường cấp 2 n&agrave;o tại H&agrave; Nội với kiến thức được học.</span></strong></p>\r\n<p>&nbsp;</p>'),
(3, 'Sự kiện', '<p>C&aacute;c chương tr&igrave;nh sự kiện tại UNIX li&ecirc;n tục cập nhật. Với đội ngũ giảng vi&ecirc;n, chuy&ecirc;n gia đ&agrave;o tạo gi&agrave;u kinh nghiệm trong v&agrave; ngo&agrave;i nước, mục ti&ecirc;u lớn nhất của ch&uacute;ng t&ocirc;i l&agrave; đem lại cho qu&yacute; kh&aacute;ch mời tham dự sự h&agrave;i l&ograve;ng tr&ecirc;n cả mức mong đợi.</p>'),
(4, 'slide', 'http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0596.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0596.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0601.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0601.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0616.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0616.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/1123MaxWidth640MaxHeight480.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/1123MaxWidth640MaxHeight480.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/7.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/7.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0341.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0341.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0364MaxWidth1024MaxHeight768.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0364MaxWidth1024MaxHeight768.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0350.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0350.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/33MaxWidth640MaxHeight480.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/33MaxWidth640MaxHeight480.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0770.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0770.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0704.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0704.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0719.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0719.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/IMG_3318MaxWidth640MaxHeight480.jpg*http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/IMG_3318MaxWidth640MaxHeight480.jpg'),
(5, 'images', 'http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0596.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0601.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0616.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/1123MaxWidth640MaxHeight480.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/7.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0341.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0364MaxWidth1024MaxHeight768.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0350.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/33MaxWidth640MaxHeight480.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0770.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0704.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/DSC_0719.jpg,http://i1168.photobucket.com/albums/r484/manhtienunix/Slide anh-trang chu/IMG_3318MaxWidth640MaxHeight480.jpg'),
(6, 'video', 'http://www.youtube.com/watch?v=mlUMDpcg9Kg'),
(7, 'Chúng tôi là ai', '<p>C&ocirc;ng ty cổ phần Unix, l&agrave; một trong những c&ocirc;ng ty cung cấp c&aacute;c chương tr&igrave;nh đ&agrave;o tạo chất lượng cao h&agrave;ng đầu Việt Nam. Unix mang đến những c&ocirc;ng nghệ đ&agrave;o tạo ti&ecirc;n tiến v&agrave; c&aacute;c chương tr&igrave;nh ph&aacute;t triển c&aacute; nh&acirc;n h&agrave;ng đầu tr&ecirc;n thế giới.</p>'),
(8, 'Chúng tôi làm gì', '<p>C&aacute;c kh&oacute;a học kỹ năng thay đổi tư duy v&agrave; c&aacute;ch nghĩ, ch&uacute;ng t&ocirc;i mang lại những trải nghiệm ho&agrave;n to&agrave;n kh&aacute;c biệt. M&ocirc;i trường l&agrave;m việc năng động, chuy&ecirc;n nghiệp Unix lu&ocirc;n ch&agrave;o đ&oacute;n những con người c&oacute; năng lực tham gia đồng h&agrave;nh c&ugrave;ng ch&uacute;ng t&ocirc;i</p>');

-- --------------------------------------------------------

--
-- Table structure for table `unix_item`
--

CREATE TABLE IF NOT EXISTS `unix_item` (
  `ten` text COLLATE utf8_unicode_ci,
  `tieude` text COLLATE utf8_unicode_ci,
  `noidung` text COLLATE utf8_unicode_ci,
  `ngaydang` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unix_khoahoc`
--

CREATE TABLE IF NOT EXISTS `unix_khoahoc` (
  `khoahoc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batdau` date DEFAULT NULL,
  `ketthuc` date DEFAULT NULL,
  `hocphi` int(11) DEFAULT NULL,
  `anhdaidien` varchar(2000) DEFAULT NULL,
  `thoigian` date NOT NULL,
  `loaikhoahoc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`khoahoc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `unix_khoahoc`
--

INSERT INTO `unix_khoahoc` (`khoahoc_id`, `tieude`, `mota`, `batdau`, `ketthuc`, `hocphi`, `anhdaidien`, `thoigian`, `loaikhoahoc_id`) VALUES
(4, 'Khóa học :"Chinh phục môn Toán trường Hà Nội Amsterdam"', '<p class="MsoNormal"><span lang="EN-US"> Chương tr&igrave;nh n&agrave;y l&agrave; một chương tr&igrave;nh bao gồm chu&ocirc;̃i c&aacute;c b&agrave;i giảng v&agrave; c&aacute;c hội thảo c&oacute; một kh&ocirc;ng hai tại H&agrave; Nội. Kh&ocirc;ng c&oacute; một chương tr&igrave;nh đ&agrave;o tạo&nbsp; n&agrave;o giống như thế ở bất cứ đ&acirc;u. H&atilde;y chuẩn bị cho h&agrave;nh tr&igrave;nh th&uacute; vị nhất để chinh phục m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam.</span></p>\n<p class="MsoNormal"><span lang="EN-US"> Trong kh&oacute;a học n&agrave;y, c&aacute;c em học sinh sẽ tạo ra những bứt ph&aacute; ngay lập tức trong việc học to&aacute;n v&agrave; n&acirc;ng điểm số của m&igrave;nh l&ecirc;n mức tối đa.Bằng chương tr&igrave;nh đ&atilde; được thiết kế c&ocirc;ng phu v&agrave; với sự phối hợp của c&aacute;c gi&aacute;o vi&ecirc;n , chuy&ecirc;n gia huấn luyện, c&aacute;c em sẽ: </span></p>\n<p class="MsoListParagraphCxSpFirst"><strong><span lang="EN-US"><span  #ff0000;">. &nbsp; &nbsp;Sở hữu c&aacute;c chiến thuật l&agrave;m b&agrave;i hiệu quả để n&acirc;ng tối đa điểm số của m&igrave;nh.</span></span></strong></p>\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Hi&ecirc;̉u r&otilde; phương ph&aacute;p giải của hơn 75 dạng to&aacute;n của hơn 10 chuy&ecirc;n đ&ecirc;̀ thường xuy&ecirc;n xu&acirc;́t hi&ecirc;̣n trong kỳ thi.</span></strong></p>\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">V&acirc;̣n dụng những phương ph&aacute;p giải to&aacute;n đặc bi&ecirc;̣t t&igrave;m đ&aacute;p s&ocirc;́ đ&uacute;ng cho c&aacute;c b&agrave;i to&aacute;n chỉ trong thời gian 15-30 gi&acirc;y.</span></strong></p>\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Ho&agrave;n thi&ecirc;̣n từng kỹ năng xử l&yacute; c&aacute;c b&agrave;i to&aacute;n.</span></strong></p>\n<p class="MsoListParagraphCxSpMiddle"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Quy&ecirc;́t t&acirc;m n&ocirc;̃ lực cho kỳ thi m&ocirc;̣t c&aacute;ch tự gi&aacute;c v&agrave; say m&ecirc;.</span></strong></p>\n<p class="MsoListParagraphCxSpLast"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">C&aacute;c em ho&agrave;n to&agrave;n c&oacute; thể vận dụng những g&igrave; đ&atilde; học để tham gia thi tuyển v&agrave;o bất kỳ trường cấp 2 n&agrave;o.</span></strong></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khi tham dự chương tr&igrave;nh &ldquo;Bứt ph&aacute; m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo;, c&aacute;c em sẽ được đ&agrave;o tạo, hu&acirc;́n luy&ecirc;̣n v&agrave; truy&ecirc;̀n đ&ocirc;̣ng lực bởi những phương ph&aacute;p đ&agrave;o tạo mới nh&acirc;́t đang được &aacute;p dụng th&agrave;nh c&ocirc;ng tr&ecirc;n th&ecirc;́ giới. Qu&aacute; tr&igrave;nh huấn luyện li&ecirc;n tục sẽ gi&uacute;p c&aacute;c em lu&ocirc;n tr&agrave;n đầy quyết t&acirc;m để đạt được kết quả cao nhất của m&igrave;nh. </span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; H&agrave;ng trăm học sinh sau kh&oacute;a học n&agrave;y đ&atilde; trở n&ecirc;n tự tin, tập trung, quyết t&acirc;m trong qu&aacute; tr&igrave;nh học. Bằng c&aacute;ch thực hiện theo c&aacute;c hướng dẫn chi tiết v&agrave; cụ thể c&aacute;c em sẽ từng bước loại bỏ những suy nghĩ sai lầm, v&agrave; th&oacute;i quen lười biếng thiếu quyết t&acirc;m của m&igrave;nh. Từng bước v&acirc;̣n dụng những phương ph&aacute;p v&agrave; kỹ năng l&agrave;m b&agrave;i đ&atilde; học, c&aacute;c em sẽ chinh phục c&aacute;c b&agrave;i thi m&ocirc;̣t c&aacute;ch tự tin.</span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;<em> &ldquo;&hellip;Trước khi tham gia chương tr&igrave;nh &ldquo;Bứt ph&aacute; trong k&igrave; thi m&ocirc;n to&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam &rdquo;, t&ocirc;i v&agrave; con trai cũng kh&ocirc;ng c&oacute; &yacute; định thi v&agrave;o trường Ams. L&uacute;c đ&oacute;, v&agrave;o th&aacute;ng 5 ch&aacute;u l&agrave;m b&agrave;i thi thử m&ocirc;n to&aacute;n chỉ đạt từ&nbsp; 2/15&nbsp; đ&ecirc;́n 4 / 15 đi&ecirc;̉m. Nhưng sau khi tham dự chương tr&igrave;nh n&agrave;y cả hai mẹ con đ&atilde; thực sự thay đ&ocirc;̉i v&agrave; quy&ecirc;́t t&acirc;m thi v&agrave;o trường Amsterdam. V&agrave; th&acirc;̣t tuy&ecirc;̣t vời th&acirc;̀y Đi&ecirc;̣p đ&atilde; gi&uacute;p con trai t&ocirc;i đạt 10/15 đi&ecirc;̉m to&aacute;n sau v&agrave;i bu&ocirc;̉i hu&acirc;́n luy&ecirc;̣n trước ng&agrave;y thi.V&agrave; khi học lớp 6 trường H&agrave; N&ocirc;̣i Amsterdam ch&aacute;u đ&atilde; đạt HCB Olympic to&aacute;n ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương. &rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em></span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;Chị Lan Anh-PHHS ch&aacute;u Đ&agrave;o Ph&uacute;c Th&agrave;nh k&igrave; th&igrave; tuyển sinh lớp 6 H&agrave; N&ocirc;̣i Amsterdam 2010, HCB Olympic to&aacute;n ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương 2011.</span></p>\n<p class="MsoNormal"><em><span lang="EN-US">&ldquo;&hellip;T&ocirc;i t&ecirc;n l&agrave; L&ecirc; Qu&yacute; Dương, t&ocirc;i c&oacute; ước mơ thi đỗ v&agrave;o trường H&agrave; Nội Amsterdam.Trước khi tham gia chương tr&igrave;nh n&agrave;y điểm thi thử của t&ocirc;i chỉ được từ 5-6 điểm. Nhưng sau khi học c&aacute;c phương ph&aacute;p, chiến thuật v&agrave; thủ thuật l&agrave;m b&agrave;i nhanh m&agrave; thầy Điệp hướng dẫn điểm số của t&ocirc;i đ&atilde; n&acirc;ng l&ecirc;n 11-12 điểm.V&agrave; thật tuyệt vời ước mơ của t&ocirc;i đ&atilde; th&agrave;nh sự thật.Hẹn gặp lại c&aacute;c bạn tại trường H&agrave; Nội Amsterdam...&rdquo;</span></em></p>\n<p class="MsoNormal"><em><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span></em><span lang="EN-US">L&ecirc; Qu&yacute; Dương-HS trường tiểu học Th&aacute;i Thịnh- tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Ams 2011</span></p>\n<div class="MsoNormal"><span lang="EN-US"> \n<hr width="100%" size="2" />\n</span></div>\n<h4><strong><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c chu&ocirc;̃i b&agrave;i giảng trong chương tr&igrave;nh:&rdquo;Bứt ph&aacute; m&ocirc;n to&aacute;n thi v&agrave;o trường H&agrave; N&ocirc;̣i Amsterdam&rdquo;</span></strong></h4>\n<p class="MsoNormal"><strong><span lang="EN-US">C&aacute;c<strong> b&agrave;i giảng v&ecirc;̀ c&aacute;c chuy&ecirc;n đề chủ điểm trong k&igrave; thi</strong></span></strong></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B&ecirc;n cạnh tất cả những chiến thuật, kĩ năng v&agrave; thủ thuật l&agrave;m b&agrave;i, phần kh&ocirc;ng thể thiếu đ&oacute; l&agrave; nắm vững phương ph&aacute;p giải những dạng b&agrave;i quan trọng nhất trong c&aacute;c chuy&ecirc;n đề ch&iacute;nh của k&igrave; thi. H&acirc;̀u h&ecirc;́t c&aacute;c em học sinh gặp kh&oacute; khăn trong vi&ecirc;̣c giải b&agrave;i l&agrave; bởi c&aacute;c em kh&ocirc;ng thực sự nắm r&otilde; phương ph&aacute;p đ&ecirc;̉ c&oacute; th&ecirc;̉ nghĩ ra được lời giải. Trong kh&oacute;a học n&agrave;y, c&aacute;c em sẽ được hướng d&acirc;̃n m&ocirc;̣t c&aacute;ch chi ti&ecirc;́t v&agrave; v&acirc;̣n dụng c&aacute;c kỹ năng giải to&aacute;n trong từng b&agrave;i t&acirc;̣p. &ocirc;n tập lại những kiến thức, dạng to&aacute;n quan trọng nhất trong k&igrave; thi m&ocirc;n to&aacute;n cấp 2 H&agrave; Nội Amsterdam.</span></p>\n<p class="MsoNormal"><strong><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a học sẽ gi&uacute;p c&aacute;c em:</span></strong></p>\n<p class="MsoListParagraphCxSpFirst"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Nắm vững c&aacute;ch giải của những dạng b&agrave;i quan trọng nhất của k&igrave; thi.</span></strong><span lang="EN-US">&nbsp;</span></p>\n<p class="MsoListParagraphCxSpMiddle"><strong><span lang="EN-US">&middot;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Ho&agrave;n thi&ecirc;̣n c&aacute;c kỹ năng v&agrave; quy tr&igrave;nh giải m&ocirc;̣t b&agrave;i to&aacute;n.</span></strong><strong></strong></p>\n<p class="MsoListParagraphCxSpLast"><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Phương ph&aacute;p r&uacute;t ngắn lời giải đến mức tối đa trong nh&aacute;p để t&igrave;m ra đ&aacute;p số nhanh nhất </span></strong></p>\n<h4><span lang="EN-US">----------------------------------------------------------------------------</span></h4>\n<h4><strong><span lang="EN-US">C&aacute;c b&agrave;i giảng &ldquo;kh&aacute;m những kỹ thu&acirc;̣t giải to&aacute;n si&ecirc;u t&ocirc;́c&rdquo; </span></strong></h4>\n<p><span lang="EN-US">T&igrave;m ra đ&aacute;p số nhanh ch&oacute;ng l&agrave; một trong những lợi thế lớn nhất trong k&igrave; thi n&agrave;y. Tuy nhi&ecirc;n việc c&aacute;c em thiếu một v&agrave;i kỹ thuật v&agrave; kỹ năng quan trọng, n&oacute; sẽ l&agrave; một trở ngại lớn l&agrave;m cho c&aacute;c em mất qu&aacute; nhiều thời gian để giải c&aacute;c b&agrave;i to&aacute;n v&agrave; dẫn đến kết quả kh&ocirc;ng mong muốn.</span></p>\n<p><span lang="EN-US">Kh&ocirc;ng phải tự nhi&ecirc;n m&agrave; c&aacute;c b&agrave;i to&aacute;n trong k&igrave; thi được y&ecirc;u cầu giải c&aacute;c b&agrave;i to&aacute;n trong một khoảng thời gian rất ngắn. V&agrave; c&oacute; những bạn học sinh dễ d&agrave;ng ho&agrave;n th&agrave;nh đề thi chỉ trong kh&ocirc;ng qu&aacute; 20 ph&uacute;t. L&iacute; do l&agrave; bởi v&igrave; c&oacute; nhiều b&agrave;i to&aacute;n trong đề thi ho&agrave;n to&agrave;n c&oacute; những c&aacute;ch để t&igrave;m ra đ&aacute;p số ngay lập tức m&agrave; kh&ocirc;ng cần phải t&ocirc;́n nhi&ecirc;̀u thời gian giải b&agrave;i.&nbsp; C&aacute;c phương ph&aacute;p n&agrave;y thực sự gi&uacute;p c&aacute;c em học sinh c&oacute; m&ocirc;̣t lợi th&ecirc;́ r&acirc;́t lớn khi phải đ&ocirc;́i mặt với m&ocirc;̣t s&ocirc;́ b&agrave;i to&aacute;n kh&oacute; v&agrave; phức tạp, trong khi c&aacute;c học sinh kh&aacute;c phải m&acirc;́t r&acirc;́t nhi&ecirc;̀u thời gian m&agrave; v&acirc;̃n r&acirc;́t kh&oacute; c&oacute; th&ecirc;̉ t&igrave;m ra đ&aacute;p s&ocirc;́ đ&uacute;ng.</span></p>\n<p><span lang="EN-US">C&aacute;c em sẽ được hướng dẫn chi tiết c&aacute;ch nhận biết c&aacute;c b&agrave;i to&aacute;n đ&oacute;, luyện tập với ch&iacute;nh c&aacute;c b&agrave;i thi của c&aacute;c năm trước v&agrave; &aacute;p dụng ngay lập tức cho c&aacute;c b&agrave;i thi sắp tới. </span></p>\n<p><strong><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dưới đ&acirc;y chỉ l&agrave; một phần trong số những g&igrave; c&aacute;c em sẽ được học:</span></strong></p>\n<p><strong><span lang="EN-US">&bull; Hiểu r&otilde; được gần 10 thủ thuật giải to&aacute;n nhanh cho c&aacute;c b&agrave;i to&aacute;n h&igrave;nh học v&agrave; 10 thủ thuật điển h&igrave;nh cho c&aacute;c b&agrave;i to&aacute;n số học.</span></strong></p>\n<p><strong><span lang="EN-US">&bull; Nhận dạng c&aacute;c b&agrave;i c&oacute; thể &aacute;p dụng c&aacute;c kỹ thuật tương ứng</span></strong></p>\n<p><strong><span lang="EN-US">&bull; &Aacute;p dụng c&aacute;c kỹ thuật giải b&agrave;i đặc bi&ecirc;̣t đ&atilde; học để t&igrave;m đ&aacute;p số trong v&ograve;ng kh&ocirc;ng qu&aacute; 20 gi&acirc;y.</span></strong></p>\n<h4><span lang="EN-US">----------------------------------------------------------------------------</span></h4>\n<h4><strong><span lang="EN-US">C&aacute;c b&agrave;i giảng : chiến thuật l&agrave;m b&agrave;i thi m&ocirc;n to&aacute;n cấp 2 H&agrave; Nội Amsterdam</span></strong></h4>\n<p class="MsoListParagraphCxSpFirst"><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mọi cuộc thi đều c&oacute; những phương ph&aacute;p v&agrave; b&iacute; quyết ri&ecirc;ng của n&oacute;. Đặc biệt m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam ho&agrave;n to&agrave;n kh&aacute;c với những k&igrave; thi v&agrave; những b&agrave;i kiểm tra th&ocirc;ng thường. Đ&oacute; cũng l&agrave; l&iacute; do m&agrave; tại sao nhi&ecirc;̀u học sinh học r&acirc;́t t&ocirc;́t v&agrave; đạt đi&ecirc;̉m s&ocirc;́ r&acirc;́t cao tr&ecirc;n trường lớp nhưng kh&ocirc;ng th&ecirc;̉ vượt qua được k&igrave; thi n&agrave;y. Cũng c&oacute; r&acirc;́t nhi&ecirc;̀u học sinh c&oacute; khả năng l&agrave;m c&aacute;c b&agrave;i to&aacute;n n&acirc;ng cao t&ocirc;́t nhưng kh&ocirc;ng th&ecirc;̉ ho&agrave;n th&agrave;nh kịp b&agrave;i thi của m&igrave;nh. Đ&aacute;ng ti&ecirc;́c hơn l&agrave; c&oacute; những em học sinh r&acirc;́t xu&acirc;́t sắc nhưng khi đi thi v&acirc;̃n kh&ocirc;ng th&ecirc;̉ l&agrave;m b&agrave;i đ&uacute;ng với sức của m&igrave;nh. </span></p>\n<p class="MsoListParagraphCxSpLast"><span lang="EN-US">Ch&iacute;nh v&igrave; vậy để l&agrave;m tốt b&agrave;i thi c&aacute;c em học sinh cần phải c&oacute; những sự chu&acirc;̉n bị, kỹ năng, chiến thuật l&agrave;m b&agrave;i ho&agrave;n to&agrave;n kh&aacute;c với những k&igrave; thi th&ocirc;ng thường.</span></p>\n<p><strong><span lang="EN-US">C&aacute;c em sẽ :</span></strong></p>\n<p><strong><span lang="EN-US">&middot;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Quản l&yacute; c&aacute;c c&acirc;u hỏi v&agrave; thời gian một c&aacute;ch hợp l&yacute;.</span></strong></p>\n<p><span lang="EN-US">&middot;&nbsp;&nbsp; </span><strong><span lang="EN-US">Sử dụng nh&aacute;p hi&ecirc;̣u quả để tối ưu thời gian l&agrave;m b&agrave;i.</span></strong><strong></strong></p>\n<p><strong><span lang="EN-US">&middot;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Giữ vững t&acirc;m l&yacute; trong khi thi.</span></strong></p>\n<p><strong><span lang="EN-US">&middot;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">Thực hi&ecirc;̣n phương ph&aacute;p &ocirc;n t&acirc;̣p đặc bi&ecirc;̣t đ&ecirc;̉ đạt được phong đ&ocirc;̣ t&ocirc;́t nh&acirc;́t trong ng&agrave;y thi.</span></strong></p>\n<p><strong><span lang="EN-US">&middot;&nbsp;&nbsp; </span></strong><strong><span lang="EN-US">V&acirc;̣n dụng ngay l&acirc;̣p tức c&aacute;c chi&ecirc;́n thu&acirc;̣t đ&ecirc;̉ l&agrave;m b&agrave;i thi để n&acirc;ng cao điểm số một c&aacute;ch tối đa</span></strong></p>\n<h4><span lang="EN-US">&nbsp;</span></h4>\n<h4><span lang="EN-US">--------------------------------------------------------------------------------</span></h4>\n<h3><strong><span lang="EN-US">C&aacute;c b&agrave;i giảng giải to&aacute;n bằng m&aacute;y t&iacute;nh bỏ t&uacute;i</span></strong></h3>\n<p><em><span lang="EN-US">L&agrave;m thế n&agrave;o để giải quyết c&aacute;c b&agrave;i to&aacute;n phức tạp bằng m&aacute;y t&iacute;nh bỏ t&uacute;i.</span></em></p>\n<p class="MsoNormal"><span lang="EN-US">Chương tr&igrave;nh th&uacute; vị v&agrave; hiệu quả n&agrave;y được thiết kế nhằm dạy cho em những kỹ năng&nbsp; t&igrave;m ra đ&aacute;p số cho c&aacute;c b&agrave;i to&aacute;n phức tạp bằng m&aacute;y t&iacute;nh bỏ t&uacute;i m&agrave; th&ocirc;ng thường c&aacute;c em kh&ocirc;ng thể giải được hoặc phải tốn rất nhiều thời gian. Trong khi hầu hết c&aacute;c th&iacute; sinh kh&aacute;c phải b&oacute; tay v&agrave; l&atilde;ng ph&iacute; nhiều thời gian v&ocirc; &iacute;ch, c&aacute;c em sẽ biết c&aacute;ch &ldquo; t&igrave;m ra &rdquo; đ&aacute;p số ch&iacute;nh x&aacute;c của c&aacute;c b&agrave;i to&aacute;n bằng chiếc m&aacute;y t&iacute;nh của m&igrave;nh với thời gian rất ngắn.</span></p>\n<p class="MsoNormal"><strong><span lang="EN-US">Kh&oacute;a học sẽ gi&uacute;p c&aacute;c em:</span></strong></p>\n<p class="MsoNormal"><strong><span lang="EN-US">&nbsp;&bull; C&oacute; khả năng nhận biết c&aacute;c b&agrave;i to&aacute;n c&oacute; thể sử dụng m&aacute;y t&iacute;nh để d&ograve; t&igrave;m đ&aacute;p số.</span></strong></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;<strong>&bull; C&aacute;c thao t&aacute;c từng bước tr&ecirc;n m&aacute;y t&iacute;nh để t&igrave;m ra đ&aacute;p số ch&iacute;nh x&aacute;c m&agrave; chỉ mất kh&ocirc;ng qu&aacute; nửa thời gian giải b&agrave;i th&ocirc;ng thường.</strong>&nbsp;</span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;<strong>&bull; Kiếm ngay 1-3 điểm chỉ với chiếc m&aacute;y t&iacute;nh của m&igrave;nh.</strong></span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;<strong>&bull; V&agrave; nhiều hơn nữa!</strong></span></p>\n<p class="MsoNormal"><span lang="EN-US">&nbsp;Tất cả sẽ được học th&ocirc;ng qua hướng dẫn chi tiết cụ thể v&agrave; chi ti&ecirc;́t. C&aacute;c em sẽ được ứng dụng ngay với những b&agrave;i to&aacute;n trong c&aacute;c k&igrave; thi v&agrave;o trường H&agrave; Nội Amsterdam. Sử dụng những phương ph&aacute;p đ&atilde; được học trong kho&aacute; học &ldquo;giải to&aacute;n nhanh bằng m&aacute;y t&iacute;nh bỏ t&uacute;i&rdquo;&nbsp; , c&aacute;c em sẽ th&ocirc;i kh&ocirc;ng phải l&atilde;ng ph&iacute; thời gian với những c&aacute;ch giải mang lại &iacute;t hiệu quả với nhiều b&agrave;i to&aacute;n phức tạp.</span></p>', '0000-00-00', '0000-00-00', 0, '../assets/images/DSC_0724.JPG', '2012-07-05', 6);

-- --------------------------------------------------------

--
-- Table structure for table `unix_khoahoc_default`
--

CREATE TABLE IF NOT EXISTS `unix_khoahoc_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `ngaydang` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_khoahoc_default`
--

INSERT INTO `unix_khoahoc_default` (`id`, `tieude`, `noidung`, `ngaydang`) VALUES
(1, 'Khóa học :"Chinh phục môn Toán trường Hà Nội Amsterdam"', '<p><span style="background-color: #ffff99;">Chương tr&igrave;nh n&agrave;y l&agrave; một chương tr&igrave;nh bao gồm chu&ocirc;̃i c&aacute;c b&agrave;i giảng v&agrave; c&aacute;c hội thảo c&oacute; một kh&ocirc;ng hai tại H&agrave; Nội. Kh&ocirc;ng c&oacute; một chương tr&igrave;nh đ&agrave;o tạo&nbsp; n&agrave;o giống như thế ở bất cứ đ&acirc;u. H&atilde;y chuẩn bị cho h&agrave;nh tr&igrave;nh th&uacute; vị nhất để chinh phục m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam.</span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">Trong kh&oacute;a học n&agrave;y, c&aacute;c em học sinh sẽ tạo ra những bứt ph&aacute; ngay lập tức trong việc học to&aacute;n v&agrave; n&acirc;ng điểm số của m&igrave;nh l&ecirc;n mức tối đa.Bằng chương tr&igrave;nh đ&atilde; được thiết kế c&ocirc;ng phu v&agrave; với sự phối hợp của c&aacute;c gi&aacute;o vi&ecirc;n , chuy&ecirc;n gia huấn luyện, c&aacute;c em sẽ:</span></span></span></p>\r\n<p class="MsoListParagraphCxSpFirst"><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">. &nbsp; &nbsp;Sở hữu c&aacute;c chiến thuật l&agrave;m b&agrave;i hiệu quả để n&acirc;ng tối đa điểm số của m&igrave;nh.</span></span></span></strong></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Hi&ecirc;̉u r&otilde; phương ph&aacute;p giải của hơn 75 dạng to&aacute;n của hơn 10 chuy&ecirc;n đ&ecirc;̀ thường xuy&ecirc;n xu&acirc;́t hi&ecirc;̣n trong kỳ thi.</span></strong></span></span></span></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">V&acirc;̣n dụng những phương ph&aacute;p giải to&aacute;n đặc bi&ecirc;̣t t&igrave;m đ&aacute;p s&ocirc;́ đ&uacute;ng cho c&aacute;c b&agrave;i to&aacute;n chỉ trong thời gian 15-30 gi&acirc;y.</span></strong></span></span></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Ho&agrave;n thi&ecirc;̣n từng kỹ năng xử l&yacute; c&aacute;c b&agrave;i to&aacute;n.</span></strong></span></span></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Quy&ecirc;́t t&acirc;m n&ocirc;̃ lực cho kỳ thi m&ocirc;̣t c&aacute;ch tự gi&aacute;c v&agrave; say m&ecirc;.</span></strong></span></p>\r\n<p class="MsoListParagraphCxSpLast"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">C&aacute;c em ho&agrave;n to&agrave;n c&oacute; thể vận dụng những g&igrave; đ&atilde; học để tham gia thi tuyển v&agrave;o bất kỳ trường cấp 2 n&agrave;o.</span></strong></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khi tham dự chương tr&igrave;nh &ldquo;Bứt ph&aacute; m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam&rdquo;, c&aacute;c em sẽ được đ&agrave;o tạo, hu&acirc;́n luy&ecirc;̣n v&agrave; truy&ecirc;̀n đ&ocirc;̣ng lực bởi những phương ph&aacute;p đ&agrave;o tạo mới nh&acirc;́t đang được &aacute;p dụng th&agrave;nh c&ocirc;ng tr&ecirc;n th&ecirc;́ giới. Qu&aacute; tr&igrave;nh huấn luyện li&ecirc;n tục sẽ gi&uacute;p c&aacute;c em lu&ocirc;n tr&agrave;n đầy quyết t&acirc;m để đạt được kết quả cao nhất của m&igrave;nh.</span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; H&agrave;ng trăm học sinh sau kh&oacute;a học n&agrave;y đ&atilde; trở n&ecirc;n tự tin, tập trung, quyết t&acirc;m trong qu&aacute; tr&igrave;nh học. Bằng c&aacute;ch thực hiện theo c&aacute;c hướng dẫn chi tiết v&agrave; cụ thể c&aacute;c em sẽ từng bước loại bỏ những suy nghĩ sai lầm, v&agrave; th&oacute;i quen lười biếng thiếu quyết t&acirc;m của m&igrave;nh. Từng bước v&acirc;̣n dụng những phương ph&aacute;p v&agrave; kỹ năng l&agrave;m b&agrave;i đ&atilde; học, c&aacute;c em sẽ chinh phục c&aacute;c b&agrave;i thi m&ocirc;̣t c&aacute;ch tự tin.</span></span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;<em>&nbsp;&ldquo;&hellip;Trước khi tham gia chương tr&igrave;nh &ldquo;Bứt ph&aacute; trong k&igrave; thi m&ocirc;n to&aacute;n v&agrave;o cấp 2 H&agrave; Nội Amsterdam &rdquo;, t&ocirc;i v&agrave; con trai cũng kh&ocirc;ng c&oacute; &yacute; định thi v&agrave;o trường Ams. L&uacute;c đ&oacute;, v&agrave;o th&aacute;ng 5 ch&aacute;u l&agrave;m b&agrave;i thi thử m&ocirc;n to&aacute;n chỉ đạt từ&nbsp; 2/15&nbsp; đ&ecirc;́n 4 / 15 đi&ecirc;̉m. Nhưng sau khi tham dự chương tr&igrave;nh n&agrave;y cả hai mẹ con đ&atilde; thực sự thay đ&ocirc;̉i v&agrave; quy&ecirc;́t t&acirc;m thi v&agrave;o trường Amsterdam. V&agrave; th&acirc;̣t tuy&ecirc;̣t vời th&acirc;̀y Đi&ecirc;̣p đ&atilde; gi&uacute;p con trai t&ocirc;i đạt 10/15 đi&ecirc;̉m to&aacute;n sau v&agrave;i bu&ocirc;̉i hu&acirc;́n luy&ecirc;̣n trước ng&agrave;y thi.V&agrave; khi học lớp 6 trường H&agrave; N&ocirc;̣i Amsterdam ch&aacute;u đ&atilde; đạt HCB Olympic to&aacute;n ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương. &rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;Chị Lan Anh-PHHS ch&aacute;u Đ&agrave;o Ph&uacute;c Th&agrave;nh k&igrave; th&igrave; tuyển sinh lớp 6 H&agrave; N&ocirc;̣i Amsterdam 2010, HCB Olympic to&aacute;n ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương 2011.</span></span></span></p>\r\n<p class="MsoNormal"><em><span lang="EN-US"><span style="background-color: #ffff99;">&ldquo;&hellip;T&ocirc;i t&ecirc;n l&agrave; L&ecirc; Qu&yacute; Dương, t&ocirc;i c&oacute; ước mơ thi đỗ v&agrave;o trường H&agrave; Nội Amsterdam.Trước khi tham gia chương tr&igrave;nh n&agrave;y điểm thi thử của t&ocirc;i chỉ được từ 5-6 điểm. Nhưng sau khi học c&aacute;c phương ph&aacute;p, chiến thuật v&agrave; thủ thuật l&agrave;m b&agrave;i nhanh m&agrave; thầy Điệp hướng dẫn điểm số của t&ocirc;i đ&atilde; n&acirc;ng l&ecirc;n 11-12 điểm.V&agrave; thật tuyệt vời ước mơ của t&ocirc;i đ&atilde; th&agrave;nh sự thật.Hẹn gặp lại c&aacute;c bạn tại trường H&agrave; Nội Amsterdam...&rdquo;</span></span></em></p>\r\n<p class="MsoNormal"><span style="color: #000000;"><span style="background-color: #ffff99;"><em><span lang="EN-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span></em><span lang="EN-US">L&ecirc; Qu&yacute; Dương-HS trường tiểu học Th&aacute;i Thịnh- tr&uacute;ng tuyển kỳ thi tuyển sinh lớp 6 H&agrave; Nội Ams 2011</span></span></span></p>\r\n<div class="MsoNormal" style="color: #333333; font-family: Tahoma; line-height: 19px; text-align: justify;">\r\n<hr width="100%" size="2" />\r\n</div>\r\n<h4><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c chu&ocirc;̃i b&agrave;i giảng trong chương tr&igrave;nh:&rdquo;Bứt ph&aacute; m&ocirc;n to&aacute;n thi v&agrave;o trường H&agrave; N&ocirc;̣i Amsterdam&rdquo;</span></span></span></strong></h4>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span style="background-color: #ffff99;">C&aacute;c<strong>&nbsp;b&agrave;i giảng v&ecirc;̀ c&aacute;c chuy&ecirc;n đề chủ điểm trong k&igrave; thi</strong></span></span></strong></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B&ecirc;n cạnh tất cả những chiến thuật, kĩ năng v&agrave; thủ thuật l&agrave;m b&agrave;i, phần kh&ocirc;ng thể thiếu đ&oacute; l&agrave; nắm vững phương ph&aacute;p giải những dạng b&agrave;i quan trọng nhất trong c&aacute;c chuy&ecirc;n đề ch&iacute;nh của k&igrave; thi. H&acirc;̀u h&ecirc;́t c&aacute;c em học sinh gặp kh&oacute; khăn trong vi&ecirc;̣c giải b&agrave;i l&agrave; bởi c&aacute;c em kh&ocirc;ng thực sự nắm r&otilde; phương ph&aacute;p đ&ecirc;̉ c&oacute; th&ecirc;̉ nghĩ ra được lời giải. Trong kh&oacute;a học n&agrave;y, c&aacute;c em sẽ được hướng d&acirc;̃n m&ocirc;̣t c&aacute;ch chi ti&ecirc;́t v&agrave; v&acirc;̣n dụng c&aacute;c kỹ năng giải to&aacute;n trong từng b&agrave;i t&acirc;̣p. &ocirc;n tập lại những kiến thức, dạng to&aacute;n quan trọng nhất trong k&igrave; thi m&ocirc;n to&aacute;n cấp 2 H&agrave; Nội Amsterdam.</span></span></span></p>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a học sẽ gi&uacute;p c&aacute;c em:</span></span></span></strong></p>\r\n<p class="MsoListParagraphCxSpFirst"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Nắm vững c&aacute;ch giải của những dạng b&agrave;i quan trọng nhất của k&igrave; thi.</span></strong><span lang="EN-US">&nbsp;</span></span></span></span></p>\r\n<p class="MsoListParagraphCxSpMiddle"><span style="color: #000000;"><span style="background-color: #ffff99;"><strong><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Ho&agrave;n thi&ecirc;̣n c&aacute;c kỹ năng v&agrave; quy tr&igrave;nh giải m&ocirc;̣t b&agrave;i to&aacute;n.</span></strong></span></span></p>\r\n<p class="MsoListParagraphCxSpLast"><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Phương ph&aacute;p r&uacute;t ngắn lời giải đến mức tối đa trong nh&aacute;p để t&igrave;m ra đ&aacute;p số nhanh nhất</span></strong></span></span></p>\r\n<h4><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">----------------------------------------------------------------------------</span></span></span></h4>\r\n<h4><strong><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">C&aacute;c b&agrave;i giảng &ldquo;kh&aacute;m những kỹ thu&acirc;̣t giải to&aacute;n si&ecirc;u t&ocirc;́c&rdquo;</span></span></span></span></strong></h4>\r\n<p><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">T&igrave;m ra đ&aacute;p số nhanh ch&oacute;ng l&agrave; một trong những lợi thế lớn nhất trong k&igrave; thi n&agrave;y. Tuy nhi&ecirc;n việc c&aacute;c em thiếu một v&agrave;i kỹ thuật v&agrave; kỹ năng quan trọng, n&oacute; sẽ l&agrave; một trở ngại lớn l&agrave;m cho c&aacute;c em mất qu&aacute; nhiều thời gian để giải c&aacute;c b&agrave;i to&aacute;n v&agrave; dẫn đến kết quả kh&ocirc;ng mong muốn.</span></span></span></p>\r\n<p><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">Kh&ocirc;ng phải tự nhi&ecirc;n m&agrave; c&aacute;c b&agrave;i to&aacute;n trong k&igrave; thi được y&ecirc;u cầu giải c&aacute;c b&agrave;i to&aacute;n trong một khoảng thời gian rất ngắn. V&agrave; c&oacute; những bạn học sinh dễ d&agrave;ng ho&agrave;n th&agrave;nh đề thi chỉ trong kh&ocirc;ng qu&aacute; 20 ph&uacute;t. L&iacute; do l&agrave; bởi v&igrave; c&oacute; nhiều b&agrave;i to&aacute;n trong đề thi ho&agrave;n to&agrave;n c&oacute; những c&aacute;ch để t&igrave;m ra đ&aacute;p số ngay lập tức m&agrave; kh&ocirc;ng cần phải t&ocirc;́n nhi&ecirc;̀u thời gian giải b&agrave;i.&nbsp; C&aacute;c phương ph&aacute;p n&agrave;y thực sự gi&uacute;p c&aacute;c em học sinh c&oacute; m&ocirc;̣t lợi th&ecirc;́ r&acirc;́t lớn khi phải đ&ocirc;́i mặt với m&ocirc;̣t s&ocirc;́ b&agrave;i to&aacute;n kh&oacute; v&agrave; phức tạp, trong khi c&aacute;c học sinh kh&aacute;c phải m&acirc;́t r&acirc;́t nhi&ecirc;̀u thời gian m&agrave; v&acirc;̃n r&acirc;́t kh&oacute; c&oacute; th&ecirc;̉ t&igrave;m ra đ&aacute;p s&ocirc;́ đ&uacute;ng.</span></span></span></p>\r\n<p><span lang="EN-US"><span style="background-color: #ffff99;">C&aacute;c em sẽ được hướng dẫn chi tiết c&aacute;ch nhận biết c&aacute;c b&agrave;i to&aacute;n đ&oacute;, luyện tập với ch&iacute;nh c&aacute;c b&agrave;i thi của c&aacute;c năm trước v&agrave; &aacute;p dụng ngay lập tức cho c&aacute;c b&agrave;i thi sắp tới.</span></span></p>\r\n<p><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dưới đ&acirc;y chỉ l&agrave; một phần trong số những g&igrave; c&aacute;c em sẽ được học:</span></span></span></strong></p>\r\n<p><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&bull; Hiểu r&otilde; được gần 10 thủ thuật giải to&aacute;n nhanh cho c&aacute;c b&agrave;i to&aacute;n h&igrave;nh học v&agrave; 10 thủ thuật điển h&igrave;nh cho c&aacute;c b&agrave;i to&aacute;n số học.</span></span></span></strong></p>\r\n<p><strong><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">&bull; Nhận dạng c&aacute;c b&agrave;i c&oacute; thể &aacute;p dụng c&aacute;c kỹ thuật tương ứng</span></span></span></span></strong></p>\r\n<p><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&bull; &Aacute;p dụng c&aacute;c kỹ thuật giải b&agrave;i đặc bi&ecirc;̣t đ&atilde; học để t&igrave;m đ&aacute;p số trong v&ograve;ng kh&ocirc;ng qu&aacute; 20 gi&acirc;y.</span></span></span></strong></p>\r\n<h4><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">----------------------------------------------------------------------------</span></span></span></span></h4>\r\n<h4 style="color: #333333; font-family: Tahoma; font-size: 12px; line-height: 19px; text-align: justify;"><strong><span lang="EN-US"><span style="background-color: #ffff99;">C&aacute;c b&agrave;i giảng : chiến thuật l&agrave;m b&agrave;i thi m&ocirc;n to&aacute;n cấp 2 H&agrave; Nội Amsterdam</span></span></strong></h4>\r\n<p class="MsoListParagraphCxSpFirst"><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mọi cuộc thi đều c&oacute; những phương ph&aacute;p v&agrave; b&iacute; quyết ri&ecirc;ng của n&oacute;. Đặc biệt m&ocirc;n to&aacute;n thi v&agrave;o cấp 2 H&agrave; Nội Amsterdam ho&agrave;n to&agrave;n kh&aacute;c với những k&igrave; thi v&agrave; những b&agrave;i kiểm tra th&ocirc;ng thường. Đ&oacute; cũng l&agrave; l&iacute; do m&agrave; tại sao nhi&ecirc;̀u học sinh học r&acirc;́t t&ocirc;́t v&agrave; đạt đi&ecirc;̉m s&ocirc;́ r&acirc;́t cao tr&ecirc;n trường lớp nhưng kh&ocirc;ng th&ecirc;̉ vượt qua được k&igrave; thi n&agrave;y. Cũng c&oacute; r&acirc;́t nhi&ecirc;̀u học sinh c&oacute; khả năng l&agrave;m c&aacute;c b&agrave;i to&aacute;n n&acirc;ng cao t&ocirc;́t nhưng kh&ocirc;ng th&ecirc;̉ ho&agrave;n th&agrave;nh kịp b&agrave;i thi của m&igrave;nh. Đ&aacute;ng ti&ecirc;́c hơn l&agrave; c&oacute; những em học sinh r&acirc;́t xu&acirc;́t sắc nhưng khi đi thi v&acirc;̃n kh&ocirc;ng th&ecirc;̉ l&agrave;m b&agrave;i đ&uacute;ng với sức của m&igrave;nh.</span></span></span></span></p>\r\n<p class="MsoListParagraphCxSpLast"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">Ch&iacute;nh v&igrave; vậy để l&agrave;m tốt b&agrave;i thi c&aacute;c em học sinh cần phải c&oacute; những sự chu&acirc;̉n bị, kỹ năng, chiến thuật l&agrave;m b&agrave;i ho&agrave;n to&agrave;n kh&aacute;c với những k&igrave; thi th&ocirc;ng thường.</span></span></span></p>\r\n<p><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">C&aacute;c em sẽ :</span></span></span></strong></p>\r\n<p><span style="background-color: #ffff99;"><strong><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Quản l&yacute; c&aacute;c c&acirc;u hỏi v&agrave; thời gian một c&aacute;ch hợp l&yacute;.</span></strong></span></p>\r\n<p><span style="color: #000000;"><span style="background-color: #ffff99;"><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span><strong><span lang="EN-US">Sử dụng nh&aacute;p hi&ecirc;̣u quả để tối ưu thời gian l&agrave;m b&agrave;i.</span></strong></span></span></p>\r\n<p><span style="color: #000000;"><span style="background-color: #ffff99;"><strong><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Giữ vững t&acirc;m l&yacute; trong khi thi.</span></strong></span></span></p>\r\n<p><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;"><strong><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">Thực hi&ecirc;̣n phương ph&aacute;p &ocirc;n t&acirc;̣p đặc bi&ecirc;̣t đ&ecirc;̉ đạt được phong đ&ocirc;̣ t&ocirc;́t nh&acirc;́t trong ng&agrave;y thi.</span></strong></span></span></span></p>\r\n<p><span style="color: #000000;"><span style="background-color: #ffff99;"><strong><span lang="EN-US">&middot;&nbsp;&nbsp;&nbsp;</span></strong><strong><span lang="EN-US">V&acirc;̣n dụng ngay l&acirc;̣p tức c&aacute;c chi&ecirc;́n thu&acirc;̣t đ&ecirc;̉ l&agrave;m b&agrave;i thi để n&acirc;ng cao điểm số một c&aacute;ch tối đa</span></strong></span></span></p>\r\n<h4><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;</span></span></span></span></h4>\r\n<h4 style="color: #333333; font-family: Tahoma; font-size: 12px; line-height: 19px; text-align: justify;"><span lang="EN-US"><span style="background-color: #ffff99;">--------------------------------------------------------------------------------</span></span></h4>\r\n<h3 style="color: #333333; font-family: Tahoma; text-align: justify;"><strong><span lang="EN-US"><span style="background-color: #ffff99;">C&aacute;c b&agrave;i giảng giải to&aacute;n bằng m&aacute;y t&iacute;nh bỏ t&uacute;i</span></span></strong></h3>\r\n<p><em><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">L&agrave;m thế n&agrave;o để giải quyết c&aacute;c b&agrave;i to&aacute;n phức tạp bằng m&aacute;y t&iacute;nh bỏ t&uacute;i.</span></span></span></span></em></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">Chương tr&igrave;nh th&uacute; vị v&agrave; hiệu quả n&agrave;y được thiết kế nhằm dạy cho em những kỹ năng&nbsp; t&igrave;m ra đ&aacute;p số cho c&aacute;c b&agrave;i to&aacute;n phức tạp bằng m&aacute;y t&iacute;nh bỏ t&uacute;i m&agrave; th&ocirc;ng thường c&aacute;c em kh&ocirc;ng thể giải được hoặc phải tốn rất nhiều thời gian. Trong khi hầu hết c&aacute;c th&iacute; sinh kh&aacute;c phải b&oacute; tay v&agrave; l&atilde;ng ph&iacute; nhiều thời gian v&ocirc; &iacute;ch, c&aacute;c em sẽ biết c&aacute;ch &ldquo; t&igrave;m ra &rdquo; đ&aacute;p số ch&iacute;nh x&aacute;c của c&aacute;c b&agrave;i to&aacute;n bằng chiếc m&aacute;y t&iacute;nh của m&igrave;nh với thời gian rất ngắn.</span></span></span></p>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">Kh&oacute;a học sẽ gi&uacute;p c&aacute;c em:</span></span></span></strong></p>\r\n<p class="MsoNormal"><strong><span lang="EN-US"><span style="background-color: #ffff99;">&nbsp;&bull; C&oacute; khả năng nhận biết c&aacute;c b&agrave;i to&aacute;n c&oacute; thể sử dụng m&aacute;y t&iacute;nh để d&ograve; t&igrave;m đ&aacute;p số.</span></span></strong></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;<strong>&bull; C&aacute;c thao t&aacute;c từng bước tr&ecirc;n m&aacute;y t&iacute;nh để t&igrave;m ra đ&aacute;p số ch&iacute;nh x&aacute;c m&agrave; chỉ mất kh&ocirc;ng qu&aacute; nửa thời gian giải b&agrave;i th&ocirc;ng thường.</strong>&nbsp;</span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;<strong>&bull; Kiếm ngay 1-3 điểm chỉ với chiếc m&aacute;y t&iacute;nh của m&igrave;nh.</strong></span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="background-color: #00ff00;"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;<strong>&bull; V&agrave; nhiều hơn nữa!</strong></span></span></span></span></p>\r\n<p class="MsoNormal"><span lang="EN-US"><span style="color: #000000;"><span style="background-color: #ffff99;">&nbsp;Tất cả sẽ được học th&ocirc;ng qua hướng dẫn chi tiết cụ thể v&agrave; chi ti&ecirc;́t. C&aacute;c em sẽ được ứng dụng ngay với những b&agrave;i to&aacute;n trong c&aacute;c k&igrave; thi v&agrave;o trường H&agrave; Nội Amsterdam. Sử dụng những phương ph&aacute;p đ&atilde; được học trong kho&aacute; học &ldquo;giải to&aacute;n nhanh bằng m&aacute;y t&iacute;nh bỏ t&uacute;i&rdquo;&nbsp; , c&aacute;c em sẽ th&ocirc;i kh&ocirc;ng phải l&atilde;ng ph&iacute; thời gian với những c&aacute;ch giải mang lại &iacute;t hiệu quả với nhiều b&agrave;i to&aacute;n phức tạp.</span></span></span></p>\r\n<p>&nbsp;</p>', '2012-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `unix_lichhoc`
--

CREATE TABLE IF NOT EXISTS `unix_lichhoc` (
  `khoa` text COLLATE utf8_unicode_ci,
  `thoigian` text COLLATE utf8_unicode_ci,
  `diadiem` text COLLATE utf8_unicode_ci,
  `giangvien` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_lichhoc`
--

INSERT INTO `unix_lichhoc` (`khoa`, `thoigian`, `diadiem`, `giangvien`) VALUES
('Khóa học 1', 'Thời gian 1', 'Địa điểm 1', 'Giảng viên 1'),
('Khóa học 2', 'Thời gian 2', 'Địa điểm 2', 'Giảng viên 2'),
('Khóa học 3', 'Thời gian 3', 'Địa điểm 3', 'Giảng viên 3'),
('Khóa học 4', 'Thời gian 4', 'Địa điểm 4', 'Giảng viên 4'),
('Khóa học 5', 'Thời gian 5', 'Địa điểm 5', 'Giảng viên 5');

-- --------------------------------------------------------

--
-- Table structure for table `unix_lichhoithao`
--

CREATE TABLE IF NOT EXISTS `unix_lichhoithao` (
  `sukien` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoigian` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diadiem` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donvitochuc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_lichhoithao`
--

INSERT INTO `unix_lichhoithao` (`sukien`, `thoigian`, `diadiem`, `donvitochuc`, `tinhtrang`) VALUES
('Sự kiện 1', 'Thời gian 1', 'Địa điểm 1', 'Đơn vị 1', NULL),
('Sự kiện 2', 'Thời gian 2', 'Địa điểm 2', 'Đơn vị 2', NULL),
('Sự kiện 3', 'Thời gian 3', 'Địa điểm 3', 'Đơn vị 3', NULL),
('Sự kiện 4', 'Thời gian 4', 'Địa điểm 4', 'Đơn vị 4', NULL),
('Sự kiện 5', 'Thời gian 5', 'Địa điểm 5', 'Đơn vị 5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unix_lichtest`
--

CREATE TABLE IF NOT EXISTS `unix_lichtest` (
  `ten` text COLLATE utf8_unicode_ci,
  `thoigian` text COLLATE utf8_unicode_ci,
  `diadiem` text COLLATE utf8_unicode_ci,
  `donvitochuc` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_lichtest`
--

INSERT INTO `unix_lichtest` (`ten`, `thoigian`, `diadiem`, `donvitochuc`) VALUES
('Lịch 1', 'Thời gian 1', 'Địa điểm 1', 'Đơn vị 1'),
('Lịch 2', 'Thời gian 2', 'Địa điểm 2', 'Đơn vị 2'),
('Lịch 3', 'Thời gian 3', 'Địa điểm 3', 'Đơn vị 3'),
('Lịch 4', 'Thời gian 4', 'Địa điểm 4', 'Đơn vị 4'),
('Lịch 5', 'Thời gian 5', 'Địa điểm 5', 'Đơn vị 5');

-- --------------------------------------------------------

--
-- Table structure for table `unix_lienhe`
--

CREATE TABLE IF NOT EXISTS `unix_lienhe` (
  `lienhe_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  PRIMARY KEY (`lienhe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unix_lienhe`
--

INSERT INTO `unix_lienhe` (`lienhe_id`, `hoten`, `email`, `dienthoai`, `tieude`, `noidung`, `ngaythang`) VALUES
(6, 'Mai Thi Tuyet Thanh', 'Nhattuviet@yahoo.com', '', 'Dang ky khoa hoc lop 4', 'Chao quy vi! Toi co con trai nam nay hoc lop 4, chau va Gia dinh co nguyen vong duoc theo hoc o trung tam de luyen thi vao 6 truong ams. Nho trung tam xap xep cho chau theo hoc.', '0000-00-00'),
(7, '?? Th? Th?o', 'thaohvq@gmail.com', '0973472033', 'Liên h?', 'Kính g?i các anh các ch? trong công ty c? ph?n UNIX. Em có xem các thông tin tuy?n d?ng và bi?t r?ng công ty mình ?ang có nhu c?u tuy?n d?ng vào v? trí Gi?ng viên k? n?ng m?m. Em ?ã n?p h? s? c?ng khá lâu tuy nhiên l?i không nh?n ???c ph?n h?i c?a quý công ty. em r?t mong s? nh?n ???c ph?n h?i s?m nh?t t? bên công ty mình.Em xin chân thành c?m ?n...!\n', '0000-00-00'),
(8, '??ng Th? Mai Trang', 'maitrang.acca@gmail.com', '0912122454', '??ng ký tham d? h?i th?o', 'H?i th?o: "Chinh ph?c môn Toán thi vào c?p 2 Hà N?i Amsterdam" dành cho h?c sinh l?p 4', '0000-00-00'),
(9, '??ng Th? Mai Trang', 'maitrang.acca@gmail.com', '0912122454', 'H?i thông tin', 'Tôi mu?n h?i thông tin v? l?p h?c cho bé sinh n?m 2003, n?m nay vào h?c l?p 4. R?t mong nh?n ???c thông tin v? các khóa h?c phù h?p cho cháu trong th?i gian t?i. Trân tr?ng c?m ?n!', '0000-00-00'),
(10, 'Nguyễn Thị Loan', 'nguyenloan1002@yahoo.com', '0989577868', 'Lớp học cho con', 'Tôi có con năm nay vào lớp 4. Tôi có nguyện vọng cho cháu thi vào cấp 2 Trường Hà nội- Amsterdam. Vậy Quý Công ty xin vui lòng cho tôi hỏi có lớp nào cho cháu theo học không ạ? Giảng viên nào phụ trách giảng dạy lớp đó ạ? ...\nTôi xin quý Công ty vui lòng cho tôi biết một số thông tin cơ bản.\nTrân trọng.', '0000-00-00'),
(11, 'Nguyễn Đức Tiến', 'tiendn1010@gmail.com', '0987384249', 'Liên hệ', 'Các chương trình sự kiện tại UNIX liên tục cập nhật. Với đội ngũ giảng viên, chuyên gia đào tạo giàu kinh nghiệm trong và ngoài nước, mục tiêu lớn nhất của chúng tôi là đem lại cho quý khách mời tham dự sự hài lòng trên cả mức mong đợi.', '2012-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `unix_loaikhoahoc`
--

CREATE TABLE IF NOT EXISTS `unix_loaikhoahoc` (
  `loaikhoahoc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loaikhoahoc_id`,`tenloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `unix_loaikhoahoc`
--

INSERT INTO `unix_loaikhoahoc` (`loaikhoahoc_id`, `tenloai`) VALUES
(6, 'Trẻ em'),
(7, 'Người lớn');

-- --------------------------------------------------------

--
-- Table structure for table `unix_loaisach`
--

CREATE TABLE IF NOT EXISTS `unix_loaisach` (
  `loaisach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`loaisach_id`,`tenloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `unix_loaisach`
--

INSERT INTO `unix_loaisach` (`loaisach_id`, `tenloai`, `mota`) VALUES
(1, 'Clip', 'Các video clip'),
(3, 'Ảnh', 'Tranh ảnh Unix'),
(4, 'Sách', 'Tài liệu sách');

-- --------------------------------------------------------

--
-- Table structure for table `unix_media`
--

CREATE TABLE IF NOT EXISTS `unix_media` (
  `stt` int(11) NOT NULL DEFAULT '0',
  `song` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `singer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `musician` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categories` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`stt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_media`
--

INSERT INTO `unix_media` (`stt`, `song`, `singer`, `musician`, `categories`, `album`, `url`) VALUES
(1, '1 2 3 chia đôi lối về', 'Quang Hà', 'Bảo Chinh', 'Nhạc Trẻ', 'Album Miss you', '1-2-3-chia-doi-loi-ve'),
(2, '1 2 3 ngôi sao', 'Sỹ Luân', 'Sỹ Luân', 'Nhạc Trẻ', 'Album 1 2 3 ngôi sao', '1-2-3-ngoi-sao'),
(3, '1000 lý do anh đặt ra ', 'Sơn ca', 'Vũ Quốc Bình', 'Nhạc Trẻ', 'Album 1 2 3 ngôi sao', '1000-ly-do-anh-dat-ra'),
(4, 'A time for us ', 'Ngân Khánh - Ngô Kiến Huy', 'LV Phạm Duy', 'Nhạc Hot', 'Album 1 2 3 ngôi sao', 'A-time-for-us');

-- --------------------------------------------------------

--
-- Table structure for table `unix_ngaythi`
--

CREATE TABLE IF NOT EXISTS `unix_ngaythi` (
  `ngaythi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unix_ngaythi`
--

INSERT INTO `unix_ngaythi` (`ngaythi`) VALUES
('1'),
('2'),
('3'),
('4'),
('5'),
('6'),
('21/08/2012'),
('09/09/1990');

-- --------------------------------------------------------

--
-- Table structure for table `unix_sach`
--

CREATE TABLE IF NOT EXISTS `unix_sach` (
  `sach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaisach_id` int(11) NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhdaidien` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`sach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`, `anhdaidien`) VALUES
(25, 'Quà tặng cuộc sống- Học cách lắng nghe', '<p>http://www.youtube.com/watch?v=5lx4_FSjISk</p>', 1, '', '../assets/images/hoc cach lang nghe.jpg'),
(26, 'Quà tặng cuộc sống: Điều gì đến sẽ đến', '<p>http://www.youtube.com/watch?v=faTnhKHBihc</p>', 1, '', '../../assets/images/dieu gi den se den.jpg'),
(27, '14 cách kiểm soát việc xem tivi của trẻ', '<p><em><strong>Ai cũng biết rằng, TV v&agrave; internet l&agrave; hai nguồn t&agrave;i nguy&ecirc;n quan trọng trong việc gi&aacute;o dục v&agrave; giải tr&iacute; cho trẻ nhưng nếu d&agrave;nh thời gian qu&aacute; nhiều v&agrave;o n&oacute; th&igrave; trẻ sẽ gặp những t&aacute;c động ti&ecirc;u cực.</strong></em></p>\n<p>C&aacute;c chuy&ecirc;n gia nghi&ecirc;n cứu cho rằng, kh&ocirc;ng n&ecirc;n cho trẻ dưới 2 tuổi xem TV. Đối với trẻ hơn 2 tuổi chỉ cho xem khoảng từ 1-2 giờ/ng&agrave;y.  Đ&oacute; l&agrave; l&iacute; do v&igrave; sao m&agrave; ch&uacute;ng ta cần kiểm so&aacute;t thời gian xem TV, chơi game v&agrave; truy cập mạng của trẻ. Một số gợi &yacute; dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c mẹ kiểm so&aacute;t dễ d&agrave;ng:</p>\n<p><strong>1. Hạn chế thời gian xem TV</strong> Để b&eacute; kh&ocirc;ng suốt ng&agrave;y ngồi b&ecirc;n m&agrave;n h&igrave;nh TV, bạn n&ecirc;n d&agrave;nh thời gian chơi với con qua c&aacute;c tr&ograve; chơi như đọc s&aacute;ch, l&agrave;m to&aacute;n đố tr&ecirc;n tạp ch&iacute;, xếp h&igrave;nh, diễn kịch, chơi c&aacute;c tr&ograve; chơi d&acirc;n gian&hellip; Những hoạt động n&agrave;y sẽ k&eacute;o ngắn thời gian ngồi b&ecirc;n m&agrave;n h&igrave;nh của b&eacute; v&agrave; gi&uacute;p b&eacute; hoạt động thể chất tốt hơn  <strong><br /></strong></p>\n<p><strong>2. Kh&ocirc;ng được để TV trong ph&ograve;ng ngủ của trẻ</strong> Hầu như c&aacute;c b&agrave; mẹ sai lầm khi đặt TV v&agrave; m&aacute;y vi t&iacute;nh trong ph&ograve;ng ngủ của con. TV sẽ l&agrave;m x&aacute;o trộn giờ ngủ của trẻ.</p>\n<p><strong>3. Tắt TV trong khi ăn</strong> Xem TV trong thời gian ăn l&agrave; một sai lầm lớn của c&aacute;c gia đ&igrave;nh ở Việt Nam. Vừa ăn vừa xem TV sẽ rất hại cho đường ti&ecirc;u h&oacute;a lại kh&ocirc;ng c&oacute; thời gian để c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh b&agrave;n luận, tr&ograve; chuyện với nhau.</p>\n<p><strong>4. Kh&ocirc;ng cho trẻ xem TV khi đang l&agrave;m b&agrave;i tập về nh&agrave;</strong> Xem TV khiến trẻ kh&ocirc;ng tập trung được v&agrave;o b&agrave;i tập v&agrave; v&igrave; thế chất lượng l&agrave;m b&agrave;i cũng sẽ giảm.  &nbsp;</p>\n<div><img src="http://www.upload.sao.vn/2010/thuy/thang8/07/xemtivi.jpg" border="0" alt="14 cách kiểm soát việc xem TV của trẻ" width="450" height="300" /></div>\n&nbsp;\n<div><span><em>H&atilde;y d&agrave;nh thời xem TV c&ugrave;ng c&aacute;c con</em></span></div>\n<p><strong>5. Khiến việc xem TV l&agrave; một việc m&agrave; trẻ cần để đạt tới chứ kh&ocirc;ng phải l&agrave; một quyền lợi</strong> Chỉ cho trẻ xem sau khi đ&atilde; ho&agrave;n th&agrave;nh b&agrave;i tập về nh&agrave; hoặc l&agrave;m xong việc nh&agrave;. Đặc biệt, n&ecirc;n cho trẻ tự chọn thời gian xem TV, chương tr&igrave;nh trẻ y&ecirc;u th&iacute;ch nhưng vẫn nằm trong gợi &yacute; của bạn.</p>\n<p><strong>6. Cuối tuần đi chơi chứ kh&ocirc;ng ở nh&agrave; xem TV</strong> Bạn h&atilde;y tạo nhiều hoạt động gi&uacute;p trẻ linh hoạt v&agrave; r&egrave;n luyện được thể lực như d&atilde; ngoại, đi thư viện, thăm bảo t&agrave;ng, đọc s&aacute;ch, đ&aacute; b&oacute;ng, đ&aacute; cầu, chơi cầu l&ocirc;ng&hellip;</p>\n<p><strong>7. Bạn cũng n&ecirc;n hạn chế thời gian xem TV</strong> Trẻ sẽ tự hỏi rằng, tại sao bố mẹ xem được m&agrave; m&igrave;nh kh&ocirc;ng được xem? Nếu bạn cũng cứ suốt ng&agrave;y ngồi b&ecirc;n chiếc TV th&igrave; đừng hi vọng c&oacute; thể kiểm so&aacute;t được trẻ.  <strong><br /></strong></p>\n<p><strong>8. Theo d&otilde;i lịch chiếu TV v&agrave; c&aacute;c chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> C&aacute;c chương tr&igrave;nh chiếu tr&ecirc;n TV d&agrave;nh cho nhiều người thuộc nhiều độ tuổi. Ch&iacute;nh v&igrave; thế m&agrave; cần phải lựa chọn những chương tr&igrave;nh ph&ugrave; hợp với độ tuổi của trẻ. Nếu nh&agrave; bạn c&oacute; con nhỏ, kh&ocirc;ng n&ecirc;n đăng k&iacute; những k&ecirc;nh truyền h&igrave;nh chỉ d&agrave;nh cho người lớn (phim n&oacute;ng, cảnh bạo lực, h&agrave;nh động&hellip;).  <strong><br /></strong></p>\n<p><strong>9. Xem x&eacute;t chất lượng c&aacute;c chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> Kh&ocirc;ng phải chương tr&igrave;nh truyền h&igrave;nh n&agrave;o cũng bổ &iacute;ch với trẻ, c&oacute; những chương tr&igrave;nh kh&ocirc;ng mang lại &iacute;ch lợi gi&aacute;o dục hoặc c&oacute; những chương tr&igrave;nh qu&aacute; kh&oacute; với tr&igrave;nh độ nhận thức của trẻ. Bạn n&ecirc;n xem trước (nếu c&oacute; điều kiện) hoặc theo d&otilde;i chất lượng của c&aacute;c chương tr&igrave;nh đ&oacute; tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin để c&oacute; được lựa chọn đ&uacute;ng đắn.  &nbsp;</p>\n<div><img src="http://www.tapchigiadinh.vn/images/stories/giadinh/0807/anh_goc/xemtivi1.jpg" border="0" alt="14 cách kiểm soát việc xem TV của trẻ" width="460" height="310" /></div>\n&nbsp;\n<div><span><em>Bạn cần chọn lựa chương tr&igrave;nh th&iacute;ch hợp đối với trẻ</em></span></div>\n<p><strong>10. Theo d&otilde;i lượng rating của chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> Th&ocirc;ng thường, lượng rating đ&aacute;nh gi&aacute; chất lượng của một chương tr&igrave;nh cũng l&agrave; c&aacute;ch để bạn biết xu hướng về sở th&iacute;ch, tr&agrave;o lưu của trẻ b&acirc;y giờ.&nbsp;</p>\n<p><strong>11. C&ugrave;ng xem với trẻ</strong> Nếu bạn kh&ocirc;ng thể ngồi cả 30 ph&uacute;t để xem hết chương tr&igrave;nh c&ugrave;ng với trẻ th&igrave; bạn cũng n&ecirc;n xem &iacute;t nhất l&agrave; 5 ph&uacute;t c&ugrave;ng trẻ. Đ&acirc;y l&agrave; cơ hội để bạn hiểu được những niềm đam m&ecirc;, th&iacute;ch th&uacute; của con.&nbsp;</p>\n<p><strong>12. N&oacute;i chuyện với trẻ về những g&igrave; trẻ nh&igrave;n thấy tr&ecirc;n TV v&agrave; chia sẻ kinh nghiệm của bản th&acirc;n</strong> Nếu bỗng dưng trẻ gặp những t&igrave;nh huống kh&aacute; l&agrave; tế nhị như sex, t&igrave;nh y&ecirc;u, nghiện ngập, uống rượu, h&uacute;t thuốc, c&aacute;c c&aacute;ch cư xử kh&aacute;c lạ&hellip; tr&ecirc;n TV v&agrave; hỏi bạn về điều đ&oacute; th&igrave; bạn cũng kh&ocirc;ng n&ecirc;n l&uacute;ng t&uacute;ng, tắt ngay TV m&agrave; h&atilde;y d&ugrave;ng ch&iacute;nh TV để giải th&iacute;ch cho trẻ. Tuy nhi&ecirc;n, kh&ocirc;ng n&ecirc;n &uacute;p mở m&agrave; n&ecirc;n n&oacute;i thẳng về vấn đề.  <strong><br /></strong></p>\n<p><strong>13. T&igrave;m sự ủng hộ từ những người kh&aacute;c</strong> Nh&agrave; bạn đ&atilde; c&oacute; &ldquo;ch&iacute;nh s&aacute;ch&rdquo; xem TV với trẻ như vậy th&igrave; n&ecirc;n n&oacute;i điều đ&oacute; với c&aacute;c bậc cha mẹ kh&aacute;c, với gi&aacute;o vi&ecirc;n để họ c&oacute; thể ủng hộ bạn.  <strong><br /></strong></p>\n<p><strong>14. Cung cấp nhiều lựa chọn vui chơi cho b&eacute; hơn l&agrave; chiếc TV</strong> Nếu trẻ kh&ocirc;ng muốn tắt TV đi để l&agrave;m việc kh&aacute;c, bạn h&atilde;y gợi &yacute; cho trẻ những hoạt động th&uacute; vị hơn như đi ra ngo&agrave;i chơi chẳng hạn. Nếu trẻ kh&ocirc;ng đồng &yacute;, bạn h&atilde;y ki&ecirc;n nhẫn một ch&uacute;t, dần dần sẽ thuyết phục được trẻ.  &nbsp;</p>', 4, '', '../assets/images/han-che-xem-tv3_1.jpg'),
(29, 'Quà tặng cuộc sống: Đóa hoa tình yêu', '<p>http://www.youtube.com/watch?v=r7mWb_bkJdY</p>', 1, '', '../../assets/images/Qua tang cuoc song- Doa_Hoa_Tinh_yeu.jpg'),
(30, 'Quà tặng cuộc sống: Một câu nói dịu dàng', '<p>http://www.youtube.com/watch?v=cLa7zlPKB3w</p>', 1, '', '../../assets/images/0.jpg'),
(31, 'Quà tặng cuộc sống: Sự chia sẻ bình dị', '<p>http://www.youtube.com/watch?v=4mE-JPsFq8M</p>', 1, '', '../../assets/images/se chia binh di.jpg'),
(32, 'Quà tặng cuộc sống: Khi Thượng đế tạo ra người Cha', '<p>http://www.youtube.com/watch?v=awPsNT533fk</p>', 1, '', '../../assets/images/1310283664_thuongdetaoraconnguoia.jpg'),
(33, 'Quà tặng cuộc sống: Lời nhắn gửi muộn màng', '<p>http://www.youtube.com/watch?v=8s7YRvmMVbE</p>', 1, '', '../../assets/images/co giao.jpg'),
(34, 'Chọn trường tiểu học cho con', '<p class="MsoNormal"><strong><span>V&agrave;o thời điểm n&agrave;y c&aacute;c bậc phụ huynh c&oacute; con chuẩn bị v&agrave;o lớp 1 thật sự bối rối trước c&aacute;c loại h&igrave;nh trường tiểu học kh&aacute;c nhau. Việc x&aacute;c định ch&iacute;nh x&aacute;c những g&igrave; bạn cần ở một trường tiểu học thật kh&ocirc;ng hề đơn giản. Trong t&acirc;m tr&iacute; m&igrave;nh, bạn c&oacute; thể vẽ l&ecirc;n bức tranh một ng&ocirc;i trường l&yacute; tưởng đầy m&agrave;u sắc, tuy nhi&ecirc;n bạn cần quan t&acirc;m đến nhu cầu của con m&igrave;nh, những mục ti&ecirc;u của gia đ&igrave;nh v&agrave; c&aacute;c yếu tố thực tế kh&aacute;c nữa.</span></strong><span> Sau đ&acirc;y l&agrave; một v&agrave;i hướng dẫn để bạn chuẩn bị quyết định chọn trường cho con :</span></p>\n<p class="MsoNormal"><span><a href="http://vnexpress.net/Files/Subject/3b/bd/63/1f/hoc1.jpg"><span><span><img src="http://unix.vn/../http://unix.vn/assets/images/hoc1.jpg" alt="" width="450" height="319" /></span></span></a></span></p>\n<p class="MsoNormal"><span>Ảnh: cung cấp bởi Pacific Primary and High School.</span></p>\n<p class="MsoNormal"><strong><span>Bước 1 : X&aacute;c định c&aacute;c ti&ecirc;u ch&iacute; chọn trường :</span></strong> <span><br /></span></p>\n<p class="MsoNormal"><span>1. Nhu cầu      của con bạn :</span></p>\n<ol type="1"> </ol>\n<p class="MsoNormal"><span>- B&eacute; cần c&oacute; một đời sống học tập vui tươi v&agrave; phong ph&uacute; ? - B&eacute; ph&ugrave; hợp với lớp đ&ocirc;ng học sinh hay &iacute;t học sinh ? - B&eacute; cần được chăm s&oacute;c kỹ hơn hay c&oacute; thể tự chăm s&oacute;c bản th&acirc;n ? - B&eacute; c&oacute; chịu được &aacute;p lực học nhiều chương tr&igrave;nh, nhiều nơi (đi học th&ecirc;m văn ho&aacute; v&agrave; năng khiếu ngo&agrave;i giờ học&hellip;) ? - B&eacute; c&oacute; muốn học c&ugrave;ng trường với anh/chị/em của m&igrave;nh kh&ocirc;ng ?</span><span><br /></span></p>\n<p class="MsoNormal"><span>2. C&aacute;c mục      ti&ecirc;u của gia đ&igrave;nh :</span></p>\n<ol type="1"> </ol>\n<p class="MsoNormal"><span>- Bạn muốn con m&igrave;nh được ph&aacute;t triển to&agrave;n diện hay th&agrave;nh t&iacute;ch học tập l&agrave; quan trọng hơn ? - Bạn muốn con học chương tr&igrave;nh gi&aacute;o dục theo c&aacute;ch truyền thống hay một m&ocirc;i trường năng động v&agrave; s&aacute;ng tạo hơn ? - Bạn muốn c&oacute; sự kết hợp chặt chẽ giữa gia đ&igrave;nh v&agrave; nh&agrave; trường v&agrave; được đ&oacute;ng g&oacute;p c&aacute;c &yacute; kiến cho nh&agrave; trường ? - Bạn c&oacute; sẵn s&agrave;ng hợp t&aacute;c với nh&agrave; trường trong qu&aacute; tr&igrave;nh gi&aacute;o dục hay muốn giao hết cho nh&agrave; trường ? (cần lưu &yacute; rằng sự tham gia của phụ huynh trong qu&aacute; tr&igrave;nh gi&aacute;o dục l&agrave; v&ocirc; c&ugrave;ng quan trọng, nếu bạn đang c&oacute; suy nghĩ sẽ giao hết cho trường th&igrave; n&ecirc;n thay đổi nh&eacute;).</span> <span><br /></span></p>\n<p class="MsoNormal"><span>3. C&aacute;c yếu      tố thực tế :</span></p>\n<ol type="1"> </ol>\n<p class="MsoNormal"><span>- Bạn c&oacute; muốn con học gần nh&agrave; ? - Bạn c&oacute; nhiều thời gian v&agrave; chấp nhận rủi ro cho việc đưa đ&oacute;n b&eacute; đi học, học th&ecirc;m, sinh hoạt ngo&agrave;i giờ&hellip; ? - Bạn muốn con c&oacute; chương tr&igrave;nh học tập phong ph&uacute; cả về nghệ thuật, thể thao, ngoại kho&aacute;, ph&aacute;t triển to&agrave;n diện c&aacute;c kỹ năng &hellip;tại trường ? - Bạn c&oacute; chuẩn bị đủ ng&acirc;n s&aacute;ch gia đ&igrave;nh để con học hết chương tr&igrave;nh phổ th&ocirc;ng ?</span></p>\n<p class="MsoNormal"><strong><span>Bước 2 : T&igrave;m hiểu c&aacute;c trường v&agrave; so s&aacute;nh c&aacute;c ti&ecirc;u ch&iacute; :</span></strong><span> Hện nay th&ocirc;ng tin về c&aacute;c trường rất nhiều. Bạn cần tỉnh t&aacute;o so s&aacute;nh c&aacute;c th&ocirc;ng tin n&agrave;y với ti&ecirc;u ch&iacute; lựa chọn của gia đ&igrave;nh. Một nguồn đ&aacute;ng tin cậy ch&iacute;nh l&agrave; c&aacute;c phụ huynh đang cho con theo học tại trường bạn muốn t&igrave;m hiểu. Khi đ&atilde; c&oacute; đủ th&ocirc;ng tin bạn h&atilde;y c&acirc;n nhắc con m&igrave;nh c&oacute; ph&ugrave; hợp với ti&ecirc;u ch&iacute; tuyển sinh của trường kh&ocirc;ng v&agrave; l&ecirc;n kế hoạch tham quan trực tiếp. N&ecirc;n để con bạn c&ugrave;ng đến thăm trường v&agrave; cho b&eacute; c&ugrave;ng quyết định chọn trường. </span></p>\n<p class="MsoNormal"><strong><span>Bước 3 : Tham quan trường</span></strong> <span><br /></span></p>\n<p class="MsoNormal"><span>1. Chương      tr&igrave;nh gi&aacute;o dục :</span></p>\n<ol type="1"> </ol>\n<p class="MsoNormal"><span>- Trường c&oacute; mục ti&ecirc;u gi&aacute;o dục cụ thể v&agrave; chương tr&igrave;nh gi&aacute;o dục c&oacute; đạt được c&aacute;c mục ti&ecirc;u đề ra kh&ocirc;ng ? - Thời kho&aacute; biểu c&oacute; được sắp xếp khoa học kh&ocirc;ng ? C&oacute; c&acirc;n bằng giữa c&aacute;c hoạt động gi&aacute;o dục kh&ocirc;ng ? - Số tiết học c&aacute;c m&ocirc;n c&oacute; đảm bảo để con bạn kh&ocirc;ng phải đi học th&ecirc;m kh&ocirc;ng ? - C&aacute;c chương tr&igrave;nh thể thao, ngoại kho&aacute; được tổ chức thế n&agrave;o ? Phụ huynh c&oacute; phải đ&oacute;ng th&ecirc;m ph&iacute; kh&ocirc;ng ? - C&oacute; c&aacute;c lớp năng khiếu mỹ thuật, &acirc;m nhạc, c&ocirc;ng nghệ &hellip;kh&ocirc;ng ? Phụ huynh c&oacute; phải đ&oacute;ng th&ecirc;m học ph&iacute; kh&ocirc;ng ? - Trường c&oacute; c&aacute;c c&acirc;u lạc bộ, c&aacute;c sinh hoạt cộng đồng, c&aacute;c cuộc thi t&agrave;i kh&ocirc;ng ?</span> <span><br /></span></p>\n<p class="MsoNormal"><span>2. Ban gi&aacute;m      hiệu, gi&aacute;o vi&ecirc;n v&agrave; học sinh :</span></p>\n<ol type="1"> </ol>\n<p class="MsoNormal"><span>- Ban gi&aacute;m hiệu c&oacute; sẵn s&agrave;ng gặp phụ huynh kh&ocirc;ng ? - Nếu l&agrave; trường song ngữ, Ban Gi&aacute;m hiệu c&oacute; sử dụng được ng&ocirc;n ngữ thứ 2 kh&ocirc;ng ? - Bạn c&oacute; được trao đổi với BGH về quan điểm gi&aacute;o dục của nh&agrave; trường v&agrave; gia đ&igrave;nh bạn kh&ocirc;ng ? - Bạn c&oacute; thống nhất với quan điểm gi&aacute;o dục của nh&agrave; trường kh&ocirc;ng ? - Trường c&oacute; nhiều cơ sở kh&ocirc;ng ? BGH quản l&yacute; c&aacute;c cơ sở như thế n&agrave;o ? -&nbsp; H&atilde;y quan s&aacute;t :</span></p>\n<ul>\n<li class="MsoNormal"><span>C&aacute;c lớp      học c&oacute; vui tươi năng động kh&ocirc;ng ?</span></li>\n<li class="MsoNormal"><span>C&aacute;c      thầy c&ocirc; c&oacute; nhiệt t&igrave;nh v&agrave; th&acirc;n thiện với học sinh kh&ocirc;ng ?</span></li>\n<li class="MsoNormal"><span>Lớp c&aacute;c      gi&aacute;o vi&ecirc;n nước ngo&agrave;i (nếu c&oacute;) c&oacute; cần phải trợ giảng kh&ocirc;ng ?</span></li>\n<li class="MsoNormal"><span>Trường      c&oacute; chọn lọc học sinh kh&ocirc;ng ?</span></li>\n<li class="MsoNormal"><span>Phong      c&aacute;ch học sinh c&oacute; ph&ugrave; hợp với mong muốn của gia đ&igrave;nh bạn kh&ocirc;ng ?</span></li>\n</ul>\n<p><span>3. Cơ sở      vật chất :</span></p>\n<p class="MsoNormal"><span>- M&ocirc;i trường c&oacute; an to&agrave;n, vệ sinh v&agrave; c&oacute; kiểm so&aacute;t kh&ocirc;ng ? - Diện t&iacute;ch sử dụng của trường t&iacute;nh cho mỗi học sinh l&agrave; bao nhi&ecirc;u ? - Thiết kế x&acirc;y dựng, &aacute;nh s&aacute;ng, &acirc;m thanh, m&agrave;u sắc c&oacute; ph&ugrave; hợp kh&ocirc;ng ? - Trường c&oacute; đủ c&aacute;c ph&ograve;ng chức năng (thư viện, ph&ograve;ng th&iacute; nghiệm, ph&ograve;ng thể dục thể thao&hellip;..)&nbsp; với trang thiết bị hiện đại v&agrave; ph&ugrave; hợp kh&ocirc;ng ? - Thư viện trường c&oacute; nguồn s&aacute;ch v&agrave; t&agrave;i liệu phong ph&uacute; kh&ocirc;ng ? Thư viện c&oacute; phải l&agrave; nơi học sinh y&ecirc;u th&iacute;ch kh&ocirc;ng ? (th&oacute;i quen đọc s&aacute;ch c&oacute; được duy tr&igrave; kh&ocirc;ng?) - Trường c&oacute; bếp ăn kh&ocirc;ng ? Thức ăn c&oacute; ngon, n&oacute;ng v&agrave; an to&agrave;n kh&ocirc;ng ? - Ph&ograve;ng vệ sinh c&oacute; sạch v&agrave; kh&ocirc; kh&ocirc;ng ? C&oacute; vệ sinh thường xuy&ecirc;n kh&ocirc;ng ? C&oacute; lạm dụng ho&aacute; chất tẩy rửa kh&ocirc;ng ? - Địa điểm n&agrave;y trường thu&ecirc; hay x&acirc;y dựng để hoạt động l&acirc;u d&agrave;i ? Sắp tới trường c&oacute; chuyển đi đ&acirc;u kh&ocirc;ng ? Khi đ&atilde; quyết định chọn trường, bạn h&atilde;y đồng h&agrave;nh c&ugrave;ng nh&agrave; trường trong qu&aacute; tr&igrave;nh ph&aacute;t triển con m&igrave;nh, h&atilde;y lu&ocirc;n chủ động đ&oacute;ng g&oacute;p &yacute; kiến x&acirc;y dựng trường v&agrave; phối hợp c&ugrave;ng gi&aacute;o vi&ecirc;n khi cần thiết. Nếu được như vậy chắc chắn con bạn sẽ c&oacute; một m&ocirc;i trường học tập hạnh ph&uacute;c để ph&aacute;t triển to&agrave;n diện.</span></p>\n<p class="MsoNormal"><strong><span>Nguồn:</span></strong><span> <em>Th&ocirc;ng tin được cung cấp bởi Pacific Primary and High School.</em></span></p>\n<p class="MsoNormal">&nbsp;</p>', 4, '', '../assets/images/di hoc.jpg'),
(35, 'Chế độ dinh dưỡng giúp trẻ phát triển chiều cao', '<div>\n<p><strong>Chế độ ăn gi&uacute;p trẻ ph&aacute;t triển chiều cao</strong></p>\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="left">\n<tbody>\n<tr>\n<td><img src="http://vnexpress.net/Files/Subject/3B/9D/58/14/04081908.jpg" border="1" alt="" width="150" height="120" /></td>\n</tr>\n<tr>\n<td>Sữa l&agrave; thực phẩm l&yacute; tưởng cho trẻ.</td>\n</tr>\n</tbody>\n</table>\n<p>Một b&eacute; khỏe mạnh sinh ra d&agrave;i hơn 50 cm, đ&acirc;y l&agrave; một khởi đầu tốt để ph&aacute;t triển. Trong 2 năm đầu đời, b&eacute; tăng trưởng về chiều cao rất nhanh, th&ecirc;m khoảng 25 cm. Trẻ cao hay thấp l&agrave; do di truyền, nhưng chế độ ăn cũng c&oacute; thể l&agrave;m thay đổi đ&aacute;ng kể.</p>\n<p>Để đầu tư chiều cao cho trẻ, kh&ocirc;ng những cần t&aacute;c động v&agrave;o giai đoạn b&eacute; đ&atilde; ra đời m&agrave; phải chuẩn bị ngay từ khi người phụ nữ sắp mang thai, thậm ch&iacute; từ khi b&eacute; g&aacute;i chưa đến tuổi dậy th&igrave;. Khi mang thai, b&agrave; mẹ cần ăn uống đủ chất, đa dạng c&aacute;c loại thực phẩm, kh&ocirc;ng ki&ecirc;ng khem để đảm bảo tăng c&acirc;n đủ 10-12 kg trong 9 th&aacute;ng.</p>\n<p>Tr&ograve;n 1 năm tuổi, trung b&igrave;nh b&eacute; trai cao khoảng 76 cm, c&ograve;n b&eacute; g&aacute;i khoảng 75 cm. Khi được 2 tuổi, b&eacute; sẽ cao khoảng 85 cm. Người ta ước t&iacute;nh tầm v&oacute;c của người trưởng th&agrave;nh sẽ 2 lần chiều cao l&uacute;c 2 tuổi. V&agrave; giai đoạn cuối c&ugrave;ng để cải thiện tầm v&oacute;c l&agrave; tuổi dậy th&igrave;: b&eacute; g&aacute;i 10-16 tuổi, b&eacute; trai 12-18 tuổi. Ở giai đoạn n&agrave;y, b&eacute; sẽ tăng 8-10 cm/năm.</p>\n<p>Trong giai đoạn trẻ c&ograve;n c&oacute; thể tăng chiều cao, cần c&oacute; một chế độ dinh dưỡng hợp l&yacute;. Năng lượng cung cấp phải đủ, ph&ugrave; hợp với lứa tuổi, kh&ocirc;ng qu&aacute; dư v&igrave; dễ dẫn tới b&eacute;o ph&igrave;, cũng kh&ocirc;ng qu&aacute; &iacute;t v&igrave; dễ đưa đến suy dinh dưỡng. Bữa ăn của trẻ bao giờ cũng phải đầy đủ 4 nh&oacute;m: đạm - bột - b&eacute;o - rau. Chất đạm n&ecirc;n chiếm khoảng 10-15% tổng năng lượng n&oacute;i chung, tinh bột chiếm 60-65% v&agrave; chất b&eacute;o 10%. N&ecirc;n cho trẻ ăn đa dạng kh&ocirc;ng ki&ecirc;ng khem, kh&ocirc;ng ăn uống thi&ecirc;n lệch.</p>\n<p>Vitamin v&agrave; kho&aacute;ng chất cũng c&oacute; vai tr&ograve; hết sức quan trọng trong việc ph&aacute;t triển chiều cao của trẻ. Canxi c&oacute; nhiều trong sữa, cua, ốc, t&ocirc;m, t&eacute;p, đậu n&agrave;nh v&agrave; c&aacute;c loại rau. Trong đ&oacute;, sữa l&agrave; quan trọng nhất. Canxi trong sữa dễ hấp thu do c&oacute; vitamin D v&agrave; phospho với tỷ lệ hợp l&yacute;. Ngo&agrave;i ra, sữa c&ograve;n cung cấp nhiều vitamin, kho&aacute;ng chất v&agrave; nguồn đạm c&oacute; gi&aacute; trị sinh học cao, chứa đủ c&aacute;c acid amin thiết yếu. Để canxi được hấp thu tốt hơn, da cần tiếp x&uacute;c trực tiếp với &aacute;nh nắng để tổng hợp vitamin D. V&igrave; vậy, n&ecirc;n d&agrave;nh cho con bạn 20 ph&uacute;t tắm nắng mỗi ng&agrave;y.  Vitamin A vừa gi&uacute;p ph&ograve;ng chống kh&ocirc; mắt, tăng sức đề kh&aacute;ng chống nhiễm tr&ugrave;ng, vừa g&oacute;p phần trong việc ph&aacute;t triển chiều cao. C&aacute;c thức ăn gi&agrave;u vitamin A l&agrave; sữa, trứng, c&aacute;, gan, thịt...  Sắt, kẽm cũng c&oacute; vai tr&ograve; quan trọng đối với sự ph&aacute;t triển chiều cao. Sắt c&oacute; nhiều trong thức ăn động vật như gan, huyết, thịt, c&aacute;... v&agrave; c&aacute;c loại đậu đỗ, rau dền. Kẽm c&oacute; trong con h&agrave;u, gan heo, thịt b&ograve;, sữa, l&ograve;ng đỏ trứng, sữa đậu n&agrave;nh...  Ngo&agrave;i chế độ dinh dưỡng hợp l&yacute;, cần khuyến kh&iacute;ch trẻ c&oacute; lối sống năng động, tập thể dục thể thao thường xuy&ecirc;n. Ngủ đủ, ngủ s&acirc;u cũng l&agrave;m ho&oacute;c m&ocirc;n tăng trưởng tiết ra nhiều, k&iacute;ch th&iacute;ch xương d&agrave;i hơn.</p>\n<p><strong>C&aacute;ch đo chiều cao cho trẻ</strong></p>\n<p>Đối với trẻ dưới 24 th&aacute;ng, để trẻ nằm ngửa tr&ecirc;n một thước đo gỗ, đầu chạm s&aacute;t một cạnh của thước đo. Một người giữ đầu trẻ thẳng, mắt nh&igrave;n l&ecirc;n trần nh&agrave;, một người giữ 2 đầu gối trẻ thẳng v&agrave; đưa mảnh gỗ &aacute;p s&aacute;t 2 g&oacute;t b&agrave;n ch&acirc;n, b&agrave;n ch&acirc;n thẳng đứng. Đọc kết quả v&agrave; ghi số cm.</p>\n<p>Đối với trẻ tr&ecirc;n 24 th&aacute;ng, để trẻ đi ch&acirc;n kh&ocirc;ng, đứng thẳng, quay lưng v&agrave;o tường; đầu, hai vai, m&ocirc;ng, bắp ch&acirc;n, g&oacute;t ch&acirc;n &aacute;p s&aacute;t tường. Mắt nh&igrave;n thẳng ra ph&iacute;a trước, 2 tay xu&ocirc;i theo th&acirc;n m&igrave;nh. D&ugrave;ng bảng gỗ &aacute;p s&aacute;t đỉnh đầu, vu&ocirc;ng g&oacute;c với thước đo. Chiều cao đứng v&agrave; nằm c&oacute; thể ch&ecirc;nh nhau 1-2 cm.  C&aacute;ch t&iacute;nh chiều cao đơn giản cho trẻ 2 -12 tuổi: Chiều cao (cm) = tuổi (năm) x 6 + 77.</p>\n<p>(Theo <em>Sức Khỏe &amp; Đời Sống</em>)</p>\n</div>', 4, '', '../assets/images/so-sanh-chieu-cao_1.jpg');
INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`, `anhdaidien`) VALUES
(36, 'Phương Pháp Dạy Con Khi Mang Thai', '<p><img class="aligncenter" src="http://tinhkhongphapngu.net/images/stories/PPdaycon1.jpg" alt="" /> Kinh văn, quyển&nbsp;ch&uacute; giải, trang 56:<strong>&ldquo;Phục thứ Phổ Quảng, nhược vị lai thế trung, Di&ecirc;m Ph&ugrave; Đề nội, S&aacute;t Lợi B&agrave; la m&ocirc;n, trưởng giả cư sĩ, nhất thiết nh&acirc;n đẳng.</strong><strong>Cập dị t&aacute;nh chủng tộc, hữu t&acirc;n sản giả, hoặc nam hoặc nữ, thất nhật chi trung, tảo dữ độc tụng, thử bất tư ngh&igrave; kinh điển.</strong><strong>C&aacute;nh vi niệm Bồ T&aacute;t danh, khả m&atilde;n vạn thi&ecirc;n</strong><strong>biến</strong><strong>, thị t&acirc;n sanh tử, hoặc nam hoặc nữ, t&uacute;c hữu ương b&aacute;o, tiện đắc giải tho&aacute;t. An lạc dị dưỡng, thọ mạng tăng trưởng, nhược thị thừa ph&uacute;c sanh giả, chuyển tăng an lạc, cập dữ thọ mạng.&rdquo;</strong></p>\n<div>&nbsp;<strong><em>Nguy&ecirc;n l&yacute;&nbsp;thai sanh</em></strong>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đoạn kinh tr&ecirc;n n&oacute;i về l&uacute;c sinh nở, cần phải tu phước như thế n&agrave;o? Y học hiện đại ph&aacute;t triển hơn xưa rất nhiều, việc&nbsp;sinh nở cũng an to&agrave;n y&ecirc;n t&acirc;m hơn ng&agrave;y xưa. Thời xưa, đặc biệt ở n&ocirc;ng th&ocirc;n, những khu vực lạc hậu k&eacute;m ph&aacute;t triển, việc sinh nở thực sự li&ecirc;n quan đến mạng sống con người, cho n&ecirc;n đức Phật đặc biệt quan t&acirc;m nhắc nhở, dạy ch&uacute;ng ta phải tu học thế n&agrave;o, l&agrave;m sao để đảm bảo b&igrave;nh y&ecirc;n cho cả mẹ lẫn con.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trong kinh, đức Phật dạy: Quan hệ gia đ&igrave;nh v&ocirc; c&ugrave;ng mật thiết, chắc chắn phải c&oacute; nh&acirc;n duy&ecirc;n s&acirc;u sắc. Kh&ocirc;ng phải tụ chung một c&aacute;ch ngẫu nhi&ecirc;n. Đức Phật đ&atilde; ph&acirc;n chia nh&acirc;n duy&ecirc;n phức tạp đ&oacute; th&agrave;nh bốn loại, đ&oacute; l&agrave;: B&aacute;o &acirc;n, b&aacute;o o&aacute;n, đ&ograve;i nợ, trả nợ, v&igrave; thế m&agrave; quy tụ th&agrave;nh người một gia đ&igrave;nh. Cha con, anh chị em, kh&ocirc;ng thể t&aacute;ch rời quan hệ n&agrave;y.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngạn ngữ&nbsp;thường n&oacute;i: &ldquo;<em>Kh&ocirc;ng phải oan gia kh&ocirc;ng chung nh&agrave;</em>&rdquo;, c&acirc;u n&oacute;i n&agrave;y rất c&oacute; l&yacute;. Tuy nhi&ecirc;n sau khi gi&aacute;c ngộ, người&nbsp;cả nh&agrave; liền trở th&agrave;nh quyến thuộc ph&aacute;p lữ, thật kh&ocirc;ng g&igrave; th&ugrave; thắng hơn. C&ograve;n kh&ocirc;ng gi&aacute;c ngộ, th&igrave; gia đ&igrave;nh sẽ li&ecirc;n tiếp xảy ra &acirc;n o&aacute;n xen kẽ b&aacute;o ứng lẫn nhau. Cả nh&agrave; chịu khổ sở kh&ocirc;ng n&oacute;i ra được. D&ugrave; sao, trả ơn th&igrave; hiếm, b&aacute;o o&aacute;n th&igrave; nhiều; trả nợ th&igrave; &iacute;t, đ&ograve;i nợ th&igrave; nhiều. Cho n&ecirc;n cả&nbsp;đời l&agrave;m người tr&ecirc;n thế gian, thường xuy&ecirc;n thấy kh&ocirc;ng h&agrave;i l&ograve;ng như &yacute;.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quả&nbsp; b&aacute;o lu&ocirc;n b&igrave;nh đẳng, bất kể&nbsp;sang h&egrave;n gi&agrave;u ngh&egrave;o. Kinh đ&atilde; v&iacute; dụ, S&aacute;t lợi&nbsp;l&agrave; ho&agrave;ng tộc của Ấn Độ xưa; B&agrave; la m&ocirc;n cũng l&agrave; giai cấp t&ocirc;n gi&aacute;o c&oacute; địa vị cao&nbsp;trong x&atilde; hội bấy giờ; trưởng giả cư sĩ l&agrave; người c&oacute; nhiều phước b&aacute;u; tiếp theo l&agrave; tất cả mọi người v&agrave; c&aacute;c họ tộc kh&aacute;c. Phạm vi bao gồm rất rộng, trong đ&oacute; c&oacute; đầy đủ bốn giai cấp tr&ecirc;n.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Người &Aacute; đ&ocirc;ng thường n&oacute;i &ldquo;<em>Ph&uacute; qu&yacute; bần tiện, bất kể th&acirc;n phận thế n&agrave;o, kh&ocirc;ng luận địa vị ra sao, việc sinh nở cũng kh&ocirc;ng thể tr&aacute;nh khỏi</em>&rdquo;. Hơn nữa, đau đớn trong sinh nở l&agrave; ho&agrave;n to&agrave;n b&igrave;nh đẳng. Người gi&agrave;u được chăm s&oacute;c c&oacute; phần đầy đủ hơn, người ngh&egrave;o kh&oacute; được chăm s&oacute;c k&eacute;m hơn. N&oacute;i cho c&ugrave;ng, đau đớn&nbsp;kh&ocirc;ng thể n&agrave;o tr&aacute;nh được.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>Phương ph&aacute;p dạy bảo thai nhi</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phật gi&aacute;o&nbsp;hướng dẫn ch&uacute;ng ta&nbsp;phương ph&aacute;p, trong v&ograve;ng bảy ng&agrave;y, sớm đọc tụng bộ kinh bất khả tư ngh&igrave; n&agrave;y. Tốt nhất l&agrave; đọc sớm. Khi biết c&oacute; thai liền n&ecirc;n đọc, mỗi ng&agrave;y đọc tụng một bộ kinh Địa Tạng Bồ T&aacute;t Bổn Nguyện, hoặc niệm ngh&igrave;n c&acirc;u danh hiệu Bồ T&aacute;t Địa Tạng. Cần phải d&ugrave;ng t&acirc;m ch&acirc;n th&agrave;nh cung k&iacute;nh để tụng niệm th&igrave; phước b&aacute;u sẽ v&ocirc; c&ugrave;ng to&nbsp;lớn.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cho d&ugrave;&nbsp;đứa b&eacute;&nbsp;trong thai đến gia đ&igrave;nh để b&aacute;o o&aacute;n, l&agrave; oan gia tr&aacute;i chủ, nhưng v&igrave; ch&uacute;ng ta chăm s&oacute;c đứa b&eacute; như thế th&igrave; oan kết cũng sẽ được h&oacute;a giải. Do ch&uacute;ng ta&nbsp;c&oacute; &acirc;n với n&oacute; th&igrave; n&oacute; kh&ocirc;ng c&ograve;n b&aacute;o o&aacute;n nữa m&agrave; chuyển th&agrave;nh b&aacute;o &acirc;n.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chuyển biến phải&nbsp;ngay từ thời gian đầu. Kinh nhấn mạnh, chậm nhất cũng phải v&agrave;o bảy ng&agrave;y trước khi sinh. Đương nhi&ecirc;n c&agrave;ng sớm c&agrave;ng tốt. Khi ch&uacute;ng ta hiểu được đạo l&yacute; n&agrave;y, biết được phương ph&aacute;p n&agrave;y, tốt nhất đọc tụng ngay khi biết m&igrave;nh c&oacute; thai, y theo phương ph&aacute;p m&agrave; tu h&agrave;nh.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đối với người l&agrave;m mẹ, cần t&acirc;m b&igrave;nh kh&iacute; h&ograve;a, ch&acirc;n th&agrave;nh, cung k&iacute;nh, thanh tịnh, b&igrave;nh đẳng, v&igrave; khởi t&acirc;m động niệm sẽ ảnh hưởng đến thai nhi. Điều n&agrave;y, nếu n&oacute;i theo l&yacute; luận khoa học hiện đại th&igrave; c&agrave;ng dễ hiểu hơn. Đ&acirc;y thuộc về hiện tượng vận động của s&oacute;ng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>Sơ&nbsp; luận sự&nbsp;vận h&agrave;nh của s&oacute;ng</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phật ph&aacute;p n&oacute;i, cũng như thế giới T&acirc;y Phương Cực Lạc, tất cả ph&aacute;p đều ph&aacute;t ra &aacute;nh s&aacute;ng, kh&ocirc;ng những con người c&oacute; thể ph&oacute;ng quang m&agrave; vạn vật cũng ph&oacute;ng quang. Cực Lạc thế giới &aacute;nh s&aacute;ng soi khắp, &aacute;nh s&aacute;ng thế giới ch&uacute;ng ta cũng ph&oacute;ng quang rọi khắp. Giả sử tất cả mọi người tr&ecirc;n thế gian kh&ocirc;ng c&oacute; &aacute;nh s&aacute;ng soi khắp, vạn vật kh&ocirc;ng&nbsp;như Cực Lạc Thế Giới được &aacute;nh s&aacute;ng chiếu khắp như thế, th&igrave; &ldquo;<em>Nhất ch&acirc;n ph&aacute;p giới</em>&rdquo; trở th&agrave;nh m&acirc;u thuẫn. L&agrave;m g&igrave; c&oacute; chuyện nơi n&agrave;y đặc biệt s&aacute;ng hơn, c&ograve;n nơi kh&aacute;c lại kh&ocirc;ng c&oacute; &aacute;nh s&aacute;ng, như vậy l&agrave;m sao giải th&iacute;ch cho th&ocirc;ng suốt? &ldquo;<em>Nhất ch&acirc;n ph&aacute;p giới</em>&rdquo; l&agrave; bao gồm cả ph&aacute;p giới của ch&uacute;ng ta, kh&ocirc;ng c&oacute; đạo l&yacute; rời khỏi ph&aacute;p giới n&agrave;y.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đọc đoạn kinh, ch&uacute;ng ta phải hiểu rằng, nơi c&oacute; &aacute;nh s&aacute;ng soi khắp th&igrave; mỗi người đều c&oacute; thể cảm nhận được. Nơi ch&uacute;ng ta cũng c&oacute; &aacute;nh s&aacute;ng soi khắp nhưng chỉ v&igrave; ch&uacute;ng ta kh&ocirc;ng c&oacute; cảm gi&aacute;c m&agrave; th&ocirc;i. Tại sao ch&uacute;ng ta kh&ocirc;ng c&oacute; cảm gi&aacute;c? V&igrave; t&acirc;m kh&ocirc;ng thanh tịnh, t&acirc;m qu&aacute; loạn, vọng niệm qu&aacute; nhiều n&ecirc;n kh&ocirc;ng thể cảm nhận được cảnh giới như thế. Thế gian n&agrave;y c&ugrave;ng&nbsp;Cực Lạc thế giới v&agrave; Hoa Tạng thế giới kh&ocirc;ng hề kh&aacute;c biệt. N&oacute;i theo vật l&yacute; học hiện đại c&agrave;ng dễ l&yacute; giải hơn. &Aacute;nh s&aacute;ng l&agrave; hiện tượng hoạt động của s&oacute;ng, chỉ cần c&oacute; hoạt động l&agrave; c&oacute; s&oacute;ng. Khoa học hiện tại gọi l&agrave; s&oacute;ng, nh&agrave;&nbsp;Phật gọi l&agrave; &aacute;nh s&aacute;ng. Cho n&ecirc;n &aacute;nh s&aacute;ng ch&iacute;nh l&agrave; s&oacute;ng, bao gồm tất cả vật chất. Vật chất đ&atilde; h&igrave;nh th&agrave;nh như thế n&agrave;o? Ph&acirc;n t&iacute;ch đến tận c&ugrave;ng, vật chất l&agrave; nguy&ecirc;n tử proton, neutron. Những hạt cơ bản như thế đều lu&ocirc;n chuyển động. Đức Phật kh&ocirc;ng cần c&oacute; những thiết bị khoa học hiện đại, ng&agrave;i vẫn nh&igrave;n thấy r&otilde; r&agrave;ng hiện tượng s&oacute;ng v&agrave; hạt m&agrave; những thiết bị ti&ecirc;n tiến nhất hiện nay chưa thể quan s&aacute;t được. Ng&agrave;i thuyết giảng một c&aacute;ch uyển chuyển tường tận, n&oacute;i ra thực tướng của sự vật, nhưng ch&uacute;ng ta phần lớn kh&ocirc;ng tin, kh&ocirc;ng chấp nhận, d&ugrave; c&aacute;ch n&oacute;i của đức Phật rất vi diệu, s&acirc;u sắc, gọi l&agrave; thiện xảo, l&agrave; phương tiện&nbsp;kh&eacute;o l&eacute;o.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khi đức Phật n&oacute;i về hiện tượng vật chất đ&atilde; n&oacute;i r&otilde; bốn nguy&ecirc;n tắc &ldquo;<em>Đất nước gi&oacute; lửa</em>&rdquo;. Đất nước gi&oacute; lửa l&agrave; vật chất căn bản, l&agrave; hạt cơ bản m&agrave; khoa học hiện nay đang n&oacute;i. Đất l&agrave; tướng trạng của vật chất, c&aacute;i con người c&oacute; thể nh&igrave;n thấy. Đất đại diện cho vật thể. Mắt trần ch&uacute;ng ta kh&ocirc;ng thể nh&igrave;n thấy hạt. Dưới k&iacute;nh hiển vi c&oacute; độ ph&acirc;n giải cao liền nh&igrave;n thấy được tướng trạng của hạt n&agrave;y. Đức Phật kh&ocirc;ng cần thiết bị g&igrave; cả, mắt của ng&agrave;i &ldquo;<em>Ngũ nh&atilde;n vi&ecirc;n minh</em>&rdquo;, nhạy b&eacute;n hơn ch&uacute;ng ta rất nhiều, c&oacute; thể thấy thứ m&agrave; ph&agrave;m phu ch&uacute;ng ta kh&ocirc;ng thể nh&igrave;n thấy.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thế&nbsp; th&igrave;&nbsp;vật chất cơ&nbsp;bản&nbsp;được cấu th&agrave;nh như thế n&agrave;o? Lu&ocirc;n mang nguồn điện, cho n&ecirc;n, lửa, hỏa đại, ch&iacute;nh l&agrave; điện dương; nước, thủy đại l&agrave; điện &acirc;m, ng&ocirc;n ngữ ch&uacute;ng ta d&ugrave;ng hiện nay l&agrave; nhiệt độ v&agrave; ẩm độ. C&ograve;n gi&oacute; l&agrave; trạng th&aacute;i hoạt động, kh&ocirc;ng đứng y&ecirc;n. Vật chất cơ bản l&agrave; hết thảy&nbsp;hiện tượng của tất cả vật chất, bao gồm tổ chức tế b&agrave;o trong con người. Như vậy thử nghĩ xem, l&agrave;m g&igrave; c&oacute; hiện tượng đứng y&ecirc;n. Hạt cơ bản lu&ocirc;n lu&ocirc;n hoạt động, động sinh ra s&oacute;ng. L&yacute; thuyết v&agrave; thực tế đều chứng minh năng lượng của s&oacute;ng lan rộng tận hư kh&ocirc;ng biến ph&aacute;p giới. Trời đất vạn vật, ch&uacute;ng sanh đ&ocirc;ng như thế, khởi t&acirc;m động niệm, th&igrave; s&oacute;ng đ&oacute; c&agrave;ng hiển thị r&otilde; r&agrave;ng, phạm vị ảnh hưởng c&agrave;ng rộng hơn, trong khi s&oacute;ng của vật chất c&ograve;n tương đối nhỏ hẹp. Hiểu được điều n&agrave;y, ch&uacute;ng ta liền nhận ra trong kh&ocirc;ng gian cuộc sống của ch&uacute;ng ta, s&oacute;ng hoạt động phức tạp dường n&agrave;o.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh Phật dạy, với thiện niệm, thiện t&acirc;m, s&oacute;ng ph&aacute;t ra ổn định nhẹ nh&agrave;ng, sau khi&nbsp;tiếp x&uacute;c được với s&oacute;ng n&agrave;y, con người sanh t&acirc;m hoan hỷ, c&oacute; cảm gi&aacute;c dịu d&agrave;ng thoải m&aacute;i. C&ograve;n khởi &aacute;c niệm, &aacute;c t&acirc;m, s&oacute;ng động rất m&atilde;nh liệt,ph&aacute;t ra giao động mạnh, tiếp x&uacute;c với s&oacute;ng n&agrave;y sẽ thấy kh&oacute; chịu cả người. Ng&agrave;y nay, hiện tượng như thế gọi l&agrave; từ trường. Người luyện kh&iacute; c&ocirc;ng ở Trung Quốc cũng c&ugrave;ng một trạng th&aacute;i như thế, cho n&ecirc;n gọi l&agrave; &ldquo;<em>kh&iacute;</em>&rdquo; cũng được. Phật ph&aacute;p gọi l&agrave; &aacute;nh s&aacute;ng, s&oacute;ng&nbsp;động, từ trường, c&ugrave;ng một trạng th&aacute;i.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do đ&acirc;y c&oacute; thể&nbsp;biết, khi thần thức đến đầu thai, n&oacute;&nbsp;c&oacute; &yacute; niệm, c&oacute; s&oacute;ng, cho n&ecirc;n khởi t&acirc;m động niệm v&agrave; h&agrave;nh động của người mẹ đều ảnh hưởng&nbsp;đến thai. Ng&agrave;y xưa, Trung Quốc lu&ocirc;n ch&uacute; &yacute; đến thai gi&aacute;o. Thai gi&aacute;o trong s&aacute;ch cổ ghi lại một số nguy&ecirc;n l&yacute;, nhưng n&oacute;i kh&ocirc;ng tường tận chi tiết, kh&ocirc;ng được thấu đ&aacute;o, đọc xong c&ograve;n nửa tin nửa ngờ, kh&ocirc;ng thấy được t&iacute;nh nghi&ecirc;m trọng của ảnh hưởng n&agrave;y, v&agrave; cũng kh&oacute; hiểu.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H&ocirc;m nay ch&uacute;ng ta hiểu r&otilde; ch&acirc;n tướng sự thật về s&oacute;ng, th&igrave; sẽ biết được mỗi khởi t&acirc;m động niệm đều ảnh hưởng đến thai nhi rất nhiều. N&ecirc;n trong thời gian người mẹ mang thai, nếu khởi t&acirc;m động niệm thiện, thanh tịnh th&igrave; thai nhi sẽ nhận được rất nhiều lợi lạc.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Người n&agrave;o cũng mong muốn con c&aacute;i&nbsp;m&igrave;nh ngoan giỏi,&nbsp;l&agrave; con thảo ch&aacute;u hiền. Vậy l&agrave;m thế n&agrave;o dạy ch&uacute;ng? Ngay trong l&uacute;c mang thai, ch&iacute;nh bản th&acirc;n ch&uacute;ng ta phải thực h&agrave;nh tận&nbsp;hiếu thảo, s&oacute;ng hiếu thảo đ&oacute; sẽ ảnh hưởng đến thai nhi. Ch&uacute;ng ta tu thanh tịnh, tu phước, như vậy mới thật sự gieo cho thai nhi hạt giống tốt về sau. Đạo l&yacute; n&agrave;y c&oacute; thật, kh&ocirc;ng c&oacute; g&igrave; m&ecirc; t&iacute;n cả.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>V&igrave;</em></strong><strong><em>&nbsp;</em></strong><strong><em>sao đức Phật khuy&ecirc;n ch&uacute;ng ta đọc bộ kinh Địa Tạng Bồ T&aacute;t Bổn Nguyện?</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V&igrave;&nbsp; bộ&nbsp;kinh n&agrave;y l&agrave;&nbsp;hiếu kinh, tinh thần của&nbsp;bộ kinh c&oacute; thể t&oacute;m lược th&agrave;nh bốn chữ &ldquo;<em>Hiếu th&acirc;n t&ocirc;n sư</em>&rdquo;. &ldquo;<em>Hiếu th&acirc;n t&ocirc;n sư</em>&rdquo;&nbsp;l&agrave; cương lĩnh dạy học của thế xuất thế gian, cũng l&agrave; căn bản nền tảng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng ta tu học Phật ph&aacute;p&nbsp;Đại thừa bắt&nbsp;đầu từ&nbsp; đ&acirc;u? Ch&iacute;nh từ&nbsp;Bồ&nbsp;T&aacute;t Địa Tạng. Địa l&agrave; t&acirc;m địa, tạng l&agrave; bảo t&agrave;ng. Bảo t&agrave;ng qu&yacute; gi&aacute; trong t&acirc;m địa l&agrave; tr&iacute; tuệ v&ocirc; lượng, phước đức v&ocirc; lượng v&agrave; khả năng&nbsp;v&ocirc; lượng. Bảo t&agrave;ng&nbsp;hạt ch&acirc;u vốn c&oacute; trong tự t&aacute;nh của ch&uacute;ng ta, v&igrave; thế m&agrave; gọi l&agrave; Địa Tạng. Bảo t&agrave;ng ch&ocirc;n dưới l&ograve;ng đất, cũng như v&agrave;ng bạc, kho&aacute;ng sản, nếu kh&ocirc;ng biết khai th&aacute;c th&igrave; vẫn nằm s&acirc;u dưới đất, tuy c&oacute; nhưng kh&ocirc;ng thể hưởng d&ugrave;ng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng ta cần phải biết khai th&aacute;c bảo t&agrave;ng trong tự t&aacute;nh, bằng c&aacute;ch d&ugrave;ng đến t&aacute;nh&nbsp;đức,&nbsp;tức l&agrave; lấy đức t&iacute;nh l&agrave;m c&ocirc;ng cụ tương ứng với bảo t&agrave;ng th&igrave; mới khai th&aacute;c được. Th&ugrave; thắng nhất trong t&aacute;nh&nbsp;đức ch&iacute;nh l&agrave; hiếu v&agrave; k&iacute;nh. Cho n&ecirc;n khi tu học Phật ph&aacute;p Đại thừa, phải bắt đầu từ Bồ t&aacute;t Địa Tạng. Học hiếu đạo trước, trong hiếu x&acirc;y dựng sư đạo. Phật ph&aacute;p l&agrave; sư đạo được x&acirc;y dựng tr&ecirc;n nền tảng hiếu đạo.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Những năm trước đ&acirc;y, t&ocirc;i gặp một số ph&aacute;p sư đến hoằng ph&aacute;p tại Hoa Kỳ. Khi tiễn họ, t&ocirc;i đ&atilde; khuy&ecirc;n họ đến Hoa kỳ đừng x&acirc;y ch&ugrave;a chiền trước, m&agrave; h&atilde;y x&acirc;y dựng từ đường, xiển dương hiếu đạo. V&igrave; sao? V&igrave; nếu kh&ocirc;ng c&oacute; hiếu đạo th&igrave; Phật ph&aacute;p kh&ocirc;ng thể b&aacute;m rễ, đạo tr&agrave;ng của Phật gi&aacute;o kh&ocirc;ng thể mạnh được.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>Lấy hiếu&nbsp;đạo l&agrave;m nền tảng gi&aacute;o dục</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phật ph&aacute;p l&agrave;&nbsp;sư&nbsp;đạo, cho n&ecirc;n x&acirc;y dựng từ đường tốt hơn. Từ đường để hoằng dương Phật ph&aacute;p, c&oacute; hiệu quả lớn hơn x&acirc;y dựng tự viện. Nh&igrave;n v&agrave;o h&igrave;nh ảnh ch&ugrave;a chiền, người ta biết ngay l&agrave; Phật gi&aacute;o, người kh&ocirc;ng tin Phật nhất định kh&ocirc;ng v&agrave;o, duy&ecirc;n n&agrave;y liền bị cắt đứt. Nhưng nếu x&acirc;y dựng từ đường, h&agrave;ng năm c&uacute;ng giỗ, người Trung Quốc bất kể theo t&ocirc;n gi&aacute;o n&agrave;o vẫn kh&ocirc;ng thể qu&ecirc;n tổ ti&ecirc;n. Khi họ đến tham gia giỗ tổ, ch&uacute;ng ta c&oacute; thể giảng th&ecirc;m về Phật ph&aacute;p, c&oacute; thể giảng phương thức dạy học truyền thống Trung Quốc, dần dần cảm h&oacute;a đại ch&uacute;ng đến dự. Cho n&ecirc;n lấy từ đường l&agrave;m đạo tr&agrave;ng lợi lạc hơn ch&ugrave;a chiền tự viện rất nhiều.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rất tiếc c&aacute;c vị ph&aacute;p sư đ&oacute; kh&ocirc;ng tiếp nhận kiến nghị của t&ocirc;i. Cho n&ecirc;n tại Hoa Kỳ, người Nhật, người Trung Quốc đ&atilde; x&acirc;y rất nhiều đạo tr&agrave;ng, chủ yếu cũng chỉ độ cho người Trung Quốc. Thực tế người nước ngo&agrave;i tại địa phương rất &iacute;t v&agrave; hiếm khi v&agrave;o, nguy&ecirc;n nh&acirc;n cũng v&igrave; họ kh&ocirc;ng tin Phật. L&agrave;m như vậy l&agrave; ch&uacute;ng ta đ&atilde; đảo ngược ngọn nguồn. Đến nay, tuy đ&atilde; trải qua thời gian hơn một trăm năm, nhưng tại Hoa kỳ, Phật gi&aacute;o truyền v&agrave;o cũng chưa b&aacute;m rễ được, chưa hoằng ph&aacute;p thật hiệu quả, rất nhiều người chưa biết đến Phật ph&aacute;p.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khi t&ocirc;i giảng kinh hoằng ph&aacute;p tại Hoa kỳ, nhắc nhở mọi người rằng ch&uacute;ng ta chưa đủ phước b&aacute;u, lực lượng c&ograve;n mỏng manh, t&ocirc;i đề nghị hiện đại h&oacute;a v&agrave; bản địa h&oacute;a Phật gi&aacute;o. Khi x&acirc;y dựng đạo tr&agrave;ng tại Hoa Kỳ, h&igrave;nh thức của đạo tr&agrave;ng nhất định phải theo h&igrave;nh thức của Hoa Kỳ. Kh&ocirc;ng n&ecirc;n bưng nguy&ecirc;n xi h&igrave;nh thức cung điện kiểu Trung Quốc đến, người Mỹ nh&igrave;n thấy biết ngay l&agrave; h&agrave;ng ngoại, văn h&oacute;a ngoại lai, liền sinh t&acirc;m b&agrave;i x&iacute;ch, v&agrave; kh&ocirc;ng th&iacute;ch đi v&agrave;o. X&acirc;y dựng đạo tr&agrave;ng tại Hoa Kỳ, n&ecirc;n x&acirc;y dựng theo h&igrave;nh thức như t&ograve;a Bạch ốc, hay kiểu Quốc hội..., người Mỹ cảm nhận như cảm nhận văn h&oacute;a m&igrave;nh, họ sẽ bị thu h&uacute;t v&agrave;o.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&ograve;n h&igrave;nh tướng Phật Bồ T&aacute;t trong đạo tr&agrave;ng th&igrave; tạc khắc theo h&igrave;nh d&aacute;ng người Mỹ. Như thế mới c&oacute; thể độ được người nước họ. Hai ngh&igrave;n năm trước đ&acirc;y, Phật ph&aacute;p truyền v&agrave;o Trung Quốc, những vị cao tăng Ấn Độ đ&atilde; rất th&ocirc;ng minh khi dựng tượng Phật Bồ T&aacute;t theo h&igrave;nh d&aacute;ng người Trung Quốc, x&acirc;y đạo tr&agrave;ng cũng theo h&igrave;nh thức của Trung Quốc.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Người Trung Quốc rất t&ocirc;n k&iacute;nh ho&agrave;ng đế v&agrave; nơi ở của ho&agrave;ng đế. L&uacute;c đ&oacute; c&aacute;c vị cao tăng Ấn Độ đ&atilde; x&acirc;y dựng đạo tr&agrave;ng theo h&igrave;nh thức cung đ&igrave;nh, b&aacute; t&aacute;nh nh&igrave;n thấy đều rất hoan hỷ. Mấy ai c&oacute; phước duy&ecirc;n được v&agrave;o tham quan ho&agrave;ng cung một lần trong đời. Thế n&ecirc;n ch&ugrave;a chiền tự viện được x&acirc;y dựng cũng kh&ocirc;ng kh&aacute;c ho&agrave;ng cung bao nhi&ecirc;u, cho n&ecirc;n d&acirc;n ch&uacute;ng nhất định v&agrave;o thăm. Đ&oacute; l&agrave; trang thiết bị phần cứng. C&ograve;n nội dung b&ecirc;n trong phải bắt đầu từ &ldquo;<em>hiếu k&iacute;nh</em>&rdquo;.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phật gi&aacute;o truyền v&agrave;o Trung Quốc, tại sao được triều&nbsp;đ&igrave;nh hoan ngh&ecirc;nh nồng nhiệt như&nbsp;thế? Ch&iacute;nh v&igrave; nội dung dạy học. Phần l&yacute; lẽ căn bản nhất ho&agrave;n to&agrave;n ph&ugrave; hợp với l&yacute; lẽ của th&aacute;nh hiền Trung Quốc xưa. C&aacute;ch dạy của nh&agrave; Nho cũng x&acirc;y dựng tr&ecirc;n nền tảng hiếu đạo. Phật ph&aacute;p tương tự, thậm ch&iacute; Phật ph&aacute;p c&ograve;n n&oacute;i r&otilde; hơn, chi tiết hơn Nho gi&aacute;o. Do đ&oacute; Phật ph&aacute;p truyền v&agrave;o Trung Quốc liền được triều đ&igrave;nh hoan ngh&ecirc;nh ủng hộ, th&agrave;nh c&ocirc;ng ngay thời điểm đ&oacute;. Đối với x&atilde; hội, quốc gia, nh&acirc;n d&acirc;n, thực sự đ&atilde; mang lại lợi &iacute;ch v&agrave; an lạc, tuyệt nhi&ecirc;n kh&ocirc;ng phải l&agrave; m&ecirc; t&iacute;n.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đối tượng tu học Phật ph&aacute;p từ lịch sử Trung Quốc đều l&agrave; giai cấp sĩ đại phu. Thời kỳ đ&oacute;, giai cấp sĩ phu tương đương th&agrave;nh phần tri thức ng&agrave;y nay. Họ kh&ocirc;ng phải l&agrave; người b&igrave;nh thường m&agrave; l&agrave; những người thật sự c&oacute; học vấn, c&oacute; đạo đức. Họ tu học, tiếp nhận Phật ph&aacute;p, t&iacute;n ngưỡng Phật Ph&aacute;p rồi y gi&aacute;o phụng h&agrave;nh, v&igrave; thế đạt hiệu quả trong việc thay đổi phong tục tập qu&aacute;n, dẫn dắt tầng lớp b&igrave;nh d&acirc;n học v&agrave; h&agrave;nh theo tập qu&aacute;n lương thiện.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&ograve;n&nbsp; hiện nay, ch&ugrave;a chiền tự viện đ&atilde; biến chất, kh&ocirc;ng c&ograve;n dạy học. Ng&agrave;y xưa tự viện l&agrave; nh&agrave; trường, l&agrave; m&ocirc;i trường dạy học, b&acirc;y giờ tự viện trở th&agrave;nh m&ocirc;i trường si&ecirc;u độ vong linh. Ho&agrave;n to&agrave;n thay đổi, biến chất qu&aacute; nặng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>Nh&igrave;n nhận về&nbsp;Phật sự&nbsp;cầu si&ecirc;u trong nh&agrave; Phật</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thực ra việc cầu si&ecirc;u cho vong linh vốn kh&ocirc;ng c&oacute; trong Phật gi&aacute;o. Vậy tại sao diễn biến th&agrave;nh hiện tượng như thế n&agrave;y?</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thời gian khi t&ocirc;i bắt&nbsp;đầu học Phật, gần gũi ph&aacute;p sư Đạo An, l&uacute;c đ&oacute; ch&uacute;ng t&ocirc;i c&ugrave;ng nhau tổ chức lớp nghi&ecirc;n cứu Phật học cho đại học. T&ocirc;i đ&atilde; thỉnh gi&aacute;o ph&aacute;p sư Đạo An. Ng&agrave;i từ bi dạy. Ng&agrave;i n&oacute;i duy&ecirc;n khởi vấn đề n&agrave;y c&oacute; thể bắt đầu từ năm Khai Nguy&ecirc;n nh&agrave; Đường, tức thời đại của Đường Minh Ho&agrave;ng. Cuối đời, Đường Minh Ho&agrave;ng v&igrave; sủng &aacute;i Dương qu&yacute; phi n&ecirc;n đ&atilde; bị triều đ&igrave;nh l&ecirc;n &aacute;n, dẫn đến An Lộc Sơn tạo phản, cơ hồ mất nước. Rất may c&oacute; tể tướng Qu&aacute;ch Tử Nghi dẹp y&ecirc;n cuộc động loạn, nhưng qu&acirc;n d&acirc;n chết rất nhiều. Sau khi dẹp y&ecirc;n cuộc động loạn, triều đ&igrave;nh tại mỗi chiến trường đều cho x&acirc;y dựng một ng&ocirc;i ch&ugrave;a gọi l&agrave; Khai Nguy&ecirc;n tự. Ch&ugrave;a Khai Nguy&ecirc;n xuất hiện như thế. Mục đ&iacute;ch để truy niệm qu&acirc;n d&acirc;n tử nạn, ch&ugrave;a đ&atilde; thỉnh mời c&aacute;c ph&aacute;p sư tụng kinh si&ecirc;u độ, gọi l&agrave; ph&aacute;p hội truy điệu.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triều&nbsp; đ&igrave;nh quốc gia khởi xướng truy điệu vong hồn người tử&nbsp; nạn, từ đ&oacute; d&acirc;n gian bắt chước, cứ trong d&acirc;n ch&uacute;ng c&oacute; người qua đời đều thỉnh mời ph&aacute;p sư l&agrave;m Phật sự cầu si&ecirc;u. Việc cầu si&ecirc;u thời đ&oacute; chỉ l&agrave; việc phụ thuộc, c&ograve;n việc ch&iacute;nh yếu trong đạo tr&agrave;ng vẫn l&agrave; thuyết ph&aacute;p giảng kinh, hướng dẫn đại ch&uacute;ng tu h&agrave;nh. Tuy nhi&ecirc;n việc phụ n&agrave;y b&acirc;y giờ đ&atilde; biến th&agrave;nh việc ch&iacute;nh thức của ch&ugrave;a chiền, c&ograve;n việc ch&iacute;nh thức th&igrave; lại biến mất, kh&ocirc;ng thấy nữa. Nghề tay tr&aacute;i biến th&agrave;nh nghề ch&iacute;nh, đ&uacute;ng l&agrave; đi&ecirc;n đảo. Đ&oacute; l&agrave; l&yacute; do h&igrave;nh th&agrave;nh xu hướng m&ecirc; t&iacute;n. Sự thực của việc thay đổi diễn biến, ch&uacute;ng ta cần phải hiểu.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L&yacute; luận, phương ph&aacute;p, nguy&ecirc;n l&yacute; v&agrave; nguy&ecirc;n tắc cầu si&ecirc;u đều c&oacute; viết tr&ecirc;n kinh Địa Tạng Bồ T&aacute;t Bổn Nguyện. Người cầu si&ecirc;u l&agrave;m sao c&oacute; thể ch&acirc;n thật cầu si&ecirc;u được cho vong linh si&ecirc;u tho&aacute;t khỏi c&aacute;c c&otilde;i &aacute;c, sinh l&ecirc;n c&otilde;i trời, hưởng thụ phước b&aacute;u. Kinh n&oacute;i rất r&otilde; r&agrave;ng. Bản th&acirc;n người cầu si&ecirc;u cần phải chứng quả. Nếu bản th&acirc;n kh&ocirc;ng n&acirc;ng cao được cảnh giới của m&igrave;nh, kh&ocirc;ng thể chứng quả th&igrave; lợi lạc vong linh nhận được cũng rất giới hạn.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>B&agrave;i học hiếu&nbsp;đạo trong kinh Địa Tạng</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh đưa ra v&iacute; dụ, nữ Quang Mục l&agrave; một c&ocirc; g&aacute;i c&oacute; hiếu, biết mẹ m&igrave;nh trong l&uacute;c sinh thời tạo nhiều &aacute;c nghiệp, c&ocirc; hiểu Phật ph&aacute;p, &aacute;p dụng lời Phật dạy. Những nghiệp mẹ c&ocirc; đ&atilde; tạo trong đời, nhất định phải đọa địa ngục, địa ngục dễ v&agrave;o nhưng thật kh&oacute; ra. C&ocirc; muốn cứu mẹ n&ecirc;n đến cầu Phật. Đức Phật dạy c&ocirc; d&ugrave;ng phương ph&aacute;p niệm Phật. Ngo&agrave;i ra kh&ocirc;ng c&ograve;n c&aacute;ch n&agrave;o kh&aacute;c.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B&agrave;&nbsp; la m&ocirc;n nữ d&ugrave;ng phương ph&aacute;p niệm Phật, Quang Mục nữ cũng d&ugrave;ng phương ph&aacute;p niệm Phật. Ba la m&ocirc;n nữ chỉ l&agrave; ph&agrave;m phu nhưng v&igrave; muốn cứu mẹ n&ecirc;n trong một ng&agrave;y một đ&ecirc;m, tinh tiến niệm Phật rất th&agrave;nh khẩn, đ&uacute;ng ph&aacute;p, đạt nhất t&acirc;m bất loạn, liền chứng quả. L&uacute;c ở trong thiền định, c&ocirc; đến địa ngục, quỷ vương trong địa ngục nh&igrave;n thấy liền chấp tay gọi c&ocirc; l&agrave; Bồ t&aacute;t. Ch&uacute;ng ta thấy, từ ph&agrave;m phu, tu h&agrave;nh một ng&agrave;y một đ&ecirc;m đ&atilde; si&ecirc;u ph&agrave;m nhập th&aacute;nh.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quỷ&nbsp; vương ch&agrave;o: &ldquo;<em>Bạch Bồ t&aacute;t, ng&agrave;i đến đ&acirc;y c&oacute; việc g&igrave;?</em>&rdquo;. C&ocirc; hỏi: &ldquo;<em>Đ&acirc;y l&agrave; nơi n&agrave;o?</em>&rdquo; Quỷ vương trả lời địa ngục. Người v&agrave;o địa ngục chỉ c&oacute; hai đối tượng, một l&agrave; theo nghiệp lực, đến chịu nghiệp b&aacute;o; hai l&agrave; bồ t&aacute;t đến theo nguyện lực. Ngo&agrave;i hai đối tượng n&agrave;y kh&ocirc;ng ai c&oacute; thể đến được địa ngục. Sau đ&oacute; c&ocirc; hỏi quỷ vương về tung t&iacute;ch mẹ m&igrave;nh. Quỷ vương cho biết, mẹ của c&ocirc; ba ng&agrave;y trước đ&atilde; sanh về c&otilde;i trời Đao Lợi. Kh&ocirc;ng những mẹ c&ocirc; m&agrave; những người chịu tội chung với mẹ c&ocirc; cũng đều được sanh về c&otilde;i trời Đao Lợi. Họ nghe n&oacute;i, b&agrave; c&oacute; người con g&aacute;i hiếu thảo tu phước cho b&agrave;, c&uacute;ng dường đức Gi&aacute;c Hoa Định Tự Tại Vương Như Lai. Nhờ phước b&aacute;u n&agrave;y, b&agrave; ta được v&atilde;ng sanh.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nếu kh&ocirc;ng phải&nbsp;v&igrave; người mẹ tạo tội nghiệp đọa địa ngục th&igrave; nữ Quang Mục cả đời kh&ocirc;ng thể đạt được cảnh giới như thế, v&igrave; ng&agrave;y thường niệm Phật hay t&aacute;n loạn, l&agrave;m sao c&oacute; thể đạt được nhất t&acirc;m. Với mong muốn cứu mẹ, c&ocirc; đ&atilde; cố hết sức trong một ng&agrave;y đ&ecirc;m thay đổi hẳn cảnh giới của m&igrave;nh. Nữ Quang Mục c&oacute; thể chuyển ph&agrave;m th&agrave;nh th&aacute;nh do trợ duy&ecirc;n của mẹ. Người mẹ được v&atilde;ng sanh cũng v&igrave; l&yacute; lẽ n&agrave;y. Một m&igrave;nh nữ Quang Mục chỉ cầu si&ecirc;u qua h&igrave;nh thức sẽ kh&ocirc;ng c&oacute; hiệu quả. Ch&iacute;nh m&igrave;nh kh&ocirc;ng c&oacute; phước b&aacute;u th&igrave; người được cầu si&ecirc;u cũng kh&ocirc;ng nhận lợi &iacute;ch g&igrave;.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>C&ocirc;ng phu tu tập trước ti&ecirc;n&nbsp;ở&nbsp; ch&iacute;nh m&igrave;nh</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph&aacute;p giới&nbsp;ở&nbsp;đường &aacute;c, v&agrave;&nbsp;ph&aacute;p giới&nbsp;ở&nbsp; c&otilde;i người ch&uacute;ng ta kh&ocirc;ng kh&aacute;c nhau. Cũng như trong một gia đ&igrave;nh, đứa con được gi&aacute;o dục đ&agrave;ng ho&agrave;ng, ra x&atilde; hội, đều được mọi người k&iacute;nh trọng, l&agrave;m đến tổng thống, bộ trưởng, cha mẹ đi đến đ&acirc;u cũng nhận được sự t&ocirc;n k&iacute;nh của người kh&aacute;c. C&ograve;n bản th&acirc;n m&igrave;nh kh&ocirc;ng th&agrave;nh tựu, cha mẹ ch&uacute;ng ta l&agrave;m sao được quỷ thần cung k&iacute;nh.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh n&oacute;i vấn đề cầu si&ecirc;u, bảy phần c&ocirc;ng đức th&igrave; ch&iacute;nh m&igrave;nh được s&aacute;u phần. Người được cầu si&ecirc;u chỉ nhận một phần. Bản th&acirc;n niệm Phật một ng&agrave;y một đ&ecirc;m đạt đến nhất t&acirc;m bất loạn, c&ocirc;ng đức của bản th&acirc;n l&agrave; ch&iacute;nh, người mẹ chỉ hưởng một phần, được một &iacute;t phước, sanh về c&otilde;i trời Đao Lợi. V&igrave; vậy nếu bản th&acirc;n kh&ocirc;ng thể th&agrave;nh tựu, người th&acirc;n sẽ kh&ocirc;ng c&oacute; được phước b&aacute;u như thế.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Những lễ&nbsp;c&uacute;ng bố&nbsp;th&iacute;&nbsp;b&igrave;nh thường chỉ&nbsp;l&agrave;&nbsp; mời họ&nbsp;đến ăn cơm, như c&uacute;ng di&ecirc;m khẩu m&ocirc;ng sơn. Một bữa ăn no chỉ qua được cơn đ&oacute;i nhất thời chứ kh&ocirc;ng thể gi&uacute;p họ tho&aacute;t khỏi c&aacute;c đường &aacute;c. Ch&acirc;n thật muốn tho&aacute;t khỏi đường &aacute;c, th&igrave; trong Phật sự cầu si&ecirc;u độ n&agrave;y, những vị ph&aacute;p sư l&agrave;m lễ cầu si&ecirc;u phải t&ugrave;y văn nhập qu&aacute;n. Sau khi ho&agrave;n tất kh&oacute;a lễ cầu si&ecirc;u, bản th&acirc;n ph&aacute;p sư phải thật sự trở th&agrave;nh Bồ t&aacute;t, cảnh giới của ph&aacute;p sư được n&acirc;ng cao ngay th&igrave; hiệu quả cầu si&ecirc;u sẽ v&ocirc; c&ugrave;ng lớn, vong linh si&ecirc;u độ chắc chắn được sanh c&otilde;i trời. C&aacute;c vị ph&aacute;p sư phải tụng niệm nghi&ecirc;m t&uacute;c, tu tr&igrave; bằng t&acirc;m thanh tịnh, b&igrave;nh đẳng. Ch&iacute;nh ph&aacute;p sư phải đạt si&ecirc;u ph&agrave;m nhập th&aacute;nh, từ ph&agrave;m phu thăng tiến đến Bồ t&aacute;t. C&ograve;n sau khi ho&agrave;n tất Phật sự, vẫn c&ograve;n l&agrave; ph&agrave;m phu sẽ kh&ocirc;ng c&oacute; th&agrave;nh tựu cho vong linh. Ch&uacute;ng ta cần hiểu thấu vấn đề n&agrave;y.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do đ&oacute; khi c&oacute; Phật sự cầu si&ecirc;u, h&agrave;nh giả phải nghi&ecirc;m t&uacute;c. Niệm tụng kinh văn, xưng t&aacute;n những b&agrave;i kệ, nhất định phải khế nhập v&agrave;o cảnh giới đ&oacute;. Sau khi nhập v&agrave;o cảnh giới th&igrave; kh&ocirc;ng được thối chuyển, c&oacute; như vậy c&ocirc;ng đức mới v&ocirc; lượng v&ocirc; bi&ecirc;n. Người nhận phước b&aacute;u sẽ kh&ocirc;ng thể n&agrave;o đếm được. Kh&ocirc;ng n&ecirc;n l&agrave;m qua loa tắc tr&aacute;ch cho xong chuyện. Cầu si&ecirc;u kh&ocirc;ng thể cho gi&aacute;, n&oacute;i th&aacute;ch. Đ&oacute; l&agrave; c&aacute;ch l&agrave;m ăn mua b&aacute;n, kh&ocirc;ng c&ograve;n g&igrave; gọi l&agrave; c&ocirc;ng đức nữa. Chạy theo h&igrave;nh thức như thế ho&agrave;n to&agrave;n sai.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cầu si&ecirc;u kh&ocirc;ng những si&ecirc;u độ cho vong hồn m&agrave; c&ograve;n si&ecirc;u độ cho cả ch&iacute;nh m&igrave;nh. Khi ch&iacute;nh m&igrave;nh được si&ecirc;u th&igrave; vong linh cũng theo m&igrave;nh m&agrave; si&ecirc;u độ. Bản th&acirc;n chưa c&oacute; c&aacute;ch si&ecirc;u độ ch&iacute;nh m&igrave;nh th&igrave; chắc chắn kh&ocirc;ng thể si&ecirc;u độ được vong linh. Đ&acirc;y ch&iacute;nh l&agrave; điều kinh Phật thường n&oacute;i. Ch&uacute;ng t&ocirc;i thường xuy&ecirc;n đọc lại kinh, nữ Quang Mục thật sự độ được bản th&acirc;n, B&agrave; la m&ocirc;n nữ cũng độ được bản th&acirc;n. Sau khi bản th&acirc;n được độ mới c&oacute; thể độ được người kh&aacute;c. Những vong linh nhờ v&agrave;o phước đức của người si&ecirc;u độ m&agrave; v&atilde;ng sanh. Nhưng v&atilde;ng sanh cao nhất trong trường hợp n&agrave;y cũng chỉ đến c&otilde;i trời Đao Lợi. Muốn cao hơn c&otilde;i trời Đao Lợi, nhất định phải nhờ c&ocirc;ng phu tu h&agrave;nh của ch&iacute;nh m&igrave;nh, người kh&aacute;c kh&ocirc;ng thể gi&uacute;p được.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ở Trung Quốc trước đ&acirc;y, lễ cầu si&ecirc;u quy m&ocirc; lớn nhất l&agrave; khi Lương Vũ Đế si&ecirc;u độ ho&agrave;ng hậu của m&igrave;nh. Người chủ tr&igrave; ph&aacute;p hội cầu si&ecirc;u l&agrave; ph&aacute;p sư Bảo Ch&iacute;, một cao tăng đương thời. Sau n&agrave;y ch&uacute;ng ta biết, ph&aacute;p sư Bảo Ch&iacute; l&agrave; h&oacute;a th&acirc;n của Bồ t&aacute;t Quan Thế &Acirc;m. Đ&iacute;ch th&acirc;n Bồ t&aacute;t Quan Thế &Acirc;m chủ tr&igrave; ph&aacute;p hội cầu si&ecirc;u, sau n&agrave;y lưu truyền lại quyển Lương Ho&agrave;ng S&aacute;m.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Như&nbsp; vậy, Bồ T&aacute;t Quan Thế &Acirc;m chủ tr&igrave; ph&aacute;p hội si&ecirc;u độ ho&agrave;ng hậu của Lương V&otilde; Đế nhưng ho&agrave;ng hậu cũng chỉ sanh đến c&otilde;i trời Đao Lợi. Giả sử chư Phật Như Lai chủ tr&igrave; cũng như thế th&ocirc;i. Vong linh dựa v&agrave;o phước b&aacute;u tha lực của người kh&aacute;c chỉ c&oacute; thể đạt được cảnh giới nhất định. Muốn c&oacute; cảnh giới cao hơn phải dựa v&agrave;o tu h&agrave;nh của m&igrave;nh. Ch&iacute;nh m&igrave;nh kh&ocirc;ng c&ocirc;ng phu tu tập th&igrave; kh&ocirc;ng xong. V&igrave; thế khi tu h&agrave;nh, ch&uacute;ng ta phải ch&acirc;n thật chuyển biến được cảnh giới, thật sự c&oacute; kết quả th&igrave; Phật sự cầu si&ecirc;u n&agrave;y c&oacute; thể kh&ocirc;ng cần h&igrave;nh thức g&igrave; cả.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trong hồi k&yacute;&nbsp;Ảnh Trần, l&atilde;o ph&aacute;p sư Đ&agrave;m Hư n&oacute;i, năm xưa ng&agrave;i ở c&ugrave;ng v&agrave;i người bạn, chuy&ecirc;n nghi&ecirc;n cứu kinh Lăng Nghi&ecirc;m, &ldquo;<em>t&aacute;m năm song cửa học Lăng Nghi&ecirc;m</em>&rdquo;. L&uacute;c đ&oacute; ng&agrave;i đang l&agrave; cư sĩ, mỗi ng&agrave;y c&ograve;n phải l&agrave;m việc, b&ocirc;n ba v&igrave; cuộc sống n&ecirc;n kh&ocirc;ng thể ho&agrave;n to&agrave;n chuy&ecirc;n t&acirc;m. Nhưng thời gian t&aacute;m năm chỉ đọc một bộ kinh, &iacute;t nhiều cũng chứng tỏ ng&agrave;i c&oacute; định lực. Nếu trong t&aacute;m năm đọc h&agrave;ng chục bộ kinh sẽ kh&ocirc;ng hiệu quả. T&aacute;m năm r&ograve;ng tham cứu, t&acirc;m định tr&ecirc;n một bộ kinh, oan gia tr&aacute;i chủ của ng&agrave;i đ&atilde; đến nhờ ng&agrave;i si&ecirc;u độ. Khi nh&igrave;n thấy những vong hồn đến, ng&agrave;i sợ h&atilde;i, e rằng những vong hồn ấy đến g&acirc;y phiền phức. Nhưng oan gia tr&aacute;i chủ bước tới quỳ dưới ch&acirc;n ng&agrave;i, cầu ng&agrave;i si&ecirc;u độ, t&acirc;m của ng&agrave;i liền an ngay v&igrave; biết họ kh&ocirc;ng phải đến g&acirc;y phiền phức. Họ n&oacute;i chỉ cần ng&agrave;i đồng &yacute; l&agrave; c&oacute; thể si&ecirc;u được. Ng&agrave;i liền gật đầu đồng &yacute;, lập tức những vong hồn đ&aacute;p tr&ecirc;n đầu gối v&agrave; vai ng&agrave;i để v&atilde;ng sanh. Ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; nghi thức g&igrave; cả.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khi bản th&acirc;n đạt được cảnh giới n&agrave;y, c&oacute; c&ocirc;ng phu vi&ecirc;n m&atilde;n, vong linh liền nương nhờ phước b&aacute;u của ch&uacute;ng ta. Chỉ cần ch&uacute;ng ta đồng &yacute; l&agrave; được. Cho n&ecirc;n cần phải nhớ, si&ecirc;u độ vong linh ho&agrave;n to&agrave;n dựa v&agrave;o đức hạnh v&agrave; c&ocirc;ng phu tu h&agrave;nh của ch&iacute;nh m&igrave;nh.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng ta hiểu r&otilde; l&yacute; lẽ n&agrave;y, hiểu thấu cảm ứng của t&acirc;m điện th&igrave; ch&iacute;nh từ những tư tưởng, khởi t&acirc;m động niệm thiện ph&aacute;t ra s&oacute;ng thuần thiện. Lực của s&oacute;ng mạnh c&oacute; thể l&agrave;m cho tất cả ch&uacute;ng sanh tr&ecirc;n thế gian bao gồm quỷ thần, những s&oacute;ng ph&aacute;t ra &aacute;c niệm bị s&oacute;ng thiện bao phủ v&agrave; triệt ti&ecirc;u. Hiệu quả rất th&ugrave; thắng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N&oacute;i về sinh nở, niệm bộ kinh n&agrave;y c&oacute; nhiều lợi lạc. Khi niệm những điều n&ecirc;u trong kinh điển như l&yacute; luận, phương ph&aacute;p, cảnh giới đều hiểu thấu, h&agrave;nh giả c&agrave;ng c&oacute; lực th&ugrave; thắng hơn. V&igrave; đ&atilde; hiểu thấu th&igrave; đọc tụng c&oacute; thể t&ugrave;y văn nhập qu&aacute;n. Cảnh giới b&igrave;nh thường của ch&uacute;ng ta kh&oacute; chuyển, tối thiểu trong khi đọc tụng, cảnh giới đ&oacute; c&oacute; thể biến chuyển một v&agrave;i phần. Hiệu quả n&agrave;y đều hiện r&otilde; trong hoạt động của s&oacute;ng. Hiểu s&acirc;u sắc, biết y gi&aacute;o phụng h&agrave;nh th&igrave; lực đ&oacute; c&agrave;ng kh&ocirc;ng thể nghĩ b&agrave;n.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>&ldquo;Thị t&acirc;n sanh tử&rdquo;</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đứa b&eacute; mới ch&agrave;o đời, d&ugrave; trai hay g&aacute;i, nếu c&oacute; &aacute;c b&aacute;o đều c&oacute; thể được giải trừ. Đời qu&aacute; khứ đ&atilde; g&acirc;y tội nghiệp th&igrave; đời n&agrave;y phải đến chịu quả b&aacute;o. V&igrave; vậy thời điểm mang thai b&eacute; l&agrave; l&uacute;c nghiệp chướng rất dễ ti&ecirc;u trừ. C&ograve;n khi em b&eacute; lớn l&ecirc;n, s&aacute;ng tối suốt ng&agrave;y suy nghĩ lung tung, l&uacute;c đ&oacute; ch&uacute;ng ta muốn ti&ecirc;u trừ nghiệp chướng cho con cũng kh&oacute; l&ograve;ng gi&uacute;p được. L&uacute;c mang thai, b&eacute; ho&agrave;n to&agrave;n nghe lời, ti&ecirc;u trừ nghiệp chướng n&ecirc;n thực hiện ngay trong thời gian n&agrave;y.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thai gi&aacute;o c&aacute;c th&aacute;nh hiền xưa đ&atilde; n&oacute;i tương tự như vậy. Thai gi&aacute;o trong Phật ph&aacute;p cũng thế.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>&ldquo;An lạc dị dưỡng, thọ mạng tăng trưởng&rdquo;</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nghiệp chướng đứa b&eacute; được ti&ecirc;u trừ, tai nạn cũng được ti&ecirc;u trừ, n&oacute; trở n&ecirc;n dễ nu&ocirc;i, thọ mạng được tăng trưởng. Nếu đứa b&eacute; n&agrave;y do thừa phước m&agrave; sanh, th&igrave; phước b&aacute;u ch&uacute;ng ta tu trong đời qu&aacute; khứ, nay được đứa b&eacute; đến b&aacute;o ơn cha mẹ, tạo ơn đức với cha mẹ, như vậy bản th&acirc;n b&eacute; cũng tu phước.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>&ldquo;Chuyển tăng an lạc, cập dữ thọ mạng&rdquo;</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng ta dạy dỗ, gi&uacute;p đỡ b&eacute;, phước b&aacute;u của b&eacute; c&agrave;ng nhiều hơn, thọ mạng c&agrave;ng d&agrave;i hơn. Trong ch&uacute; giải cũng giải th&iacute;ch rất ho&agrave;n hảo vấn đề n&agrave;y.</p>\n<p>Xem tiếp kinh văn, quyển trung, trang 59</p>\n<p><strong>&ldquo;Phục thứ Phổ Quảng, nhược vị lai thế ch&uacute;ng sanh, ư nguyệt nhất nhật, b&aacute;t nhật, thập tứ nhật, thập ngũ nhật, thập b&aacute;t nhật, nhị thập tam, nhị thập tứ, nhị thập b&aacute;t, nhị&nbsp;thập cửu, n&atilde;i ch&iacute; tam thập nhật, thi chư nhật đẳng, ch&uacute;ng tội kết tập, định kỳ khinh trọng.&rdquo;</strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đề mục đ&atilde; n&oacute;i &ldquo;<em>trai tụng cảm b&aacute;o</em>&rdquo;. Kinh n&agrave;y n&oacute;i về mười ng&agrave;y chay, cũng c&oacute; kinh n&oacute;i s&aacute;u ng&agrave;y chay, những ng&agrave;y n&agrave;y đều t&iacute;nh tr&ecirc;n lịch &acirc;m. Ng&agrave;y nay, &iacute;t người c&ograve;n d&ugrave;ng lịch &acirc;m. C&aacute;c x&atilde; hội tr&ecirc;n thế giới hiện nay đều th&ocirc;ng dụng lịch dương. Phật n&oacute;i, trong những ng&agrave;y n&agrave;y, một số quỷ thần ở trời đất tuần tra tr&ecirc;n thế gian. Mỗi một khởi t&acirc;m động niệm, lời n&oacute;i việc l&agrave;m của ch&uacute;ng sanh, thiện hay &aacute;c, quỷ thần đều ghi lại, đều điều tra xem x&eacute;t, thu thập chứng cứ x&aacute;c định nặng nhẹ. Đến l&uacute;c l&acirc;m chung, người kh&ocirc;ng c&oacute; phước đức l&uacute;c n&agrave;y sẽ đến gặp Di&ecirc;m La Vương, lấy hồ sơ đối chiếu để x&aacute;c định quả b&aacute;o nặng nhẹ. Việc như thế, rốt cuộc l&agrave; c&oacute; thực hay chỉ l&agrave; m&ecirc; t&iacute;n?</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&oacute; thật. Thế gian ch&uacute;ng ta cũng vậy. H&agrave;ng ng&agrave;y cảnh s&aacute;t tuần tra, gặp người phạm tội, liền điều tra, thu thập chứng cứ phạm tội, sau đ&oacute; mới x&eacute;t xử. Sau khi x&aacute;c định tội trạng, phải t&igrave;m chứng cứ. C&ocirc;ng việc kh&aacute; kh&oacute; khăn, kh&ocirc;ng dễ d&agrave;ng. Quỷ thần cũng vậy, đến t&igrave;m kiếm chứng cứ, ch&uacute;ng ta kh&ocirc;ng c&oacute; c&aacute;ch n&agrave;o che giấu, lừa được người ph&agrave;m nhưng kh&ocirc;ng thể lừa gạt quỷ thần. Ch&uacute;ng ta ứng dụng khoa học để ph&aacute; &aacute;n, x&eacute;t độ th&agrave;nh thật, nhưng kh&ocirc;ng biết quỷ thần kh&ocirc;ng cần d&ugrave;ng những thiết bị khoa học kỹ thuật n&agrave;y m&agrave; lại trực tiếp từ t&iacute;n hiệu l&agrave;n s&oacute;ng ph&aacute;t ra của con người để kết &aacute;n. Khởi t&acirc;m động niệm, quỷ thần đều biết. Người xưa từng n&oacute;i, &ldquo;<em>ba thước tr&ecirc;n cao c&oacute; thần minh</em>&rdquo;, con người chỉ c&oacute; thể lừa m&igrave;nh dối người nhưng kh&ocirc;ng lừa được quỷ thần.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh V&ocirc;&nbsp;Lượng Thọ&nbsp;đ&atilde; dạy, số&nbsp;ch&uacute;ng sanh ở&nbsp; thế giới Cực Lạc T&acirc;y phương qu&aacute; nhiều, kh&ocirc;ng thể t&iacute;nh đếm được. Những người v&atilde;ng sanh thế giới Cực Lạc T&acirc;y Phương đều đến từ thế giới mười phương chư Phật, đều tu ph&aacute;p m&ocirc;n niệm Phật m&agrave; v&atilde;ng sanh. Kh&ocirc;ng chỉ c&oacute; thế giới ch&uacute;ng ta, mười phương tất cả thế giới chư Phật mỗi ng&agrave;y v&atilde;ng sanh đến đ&oacute;, kh&ocirc;ng biết bao nhiều m&agrave; kể. Đến thế giới Cực Lạc Phương T&acirc;y, đạo lực thần th&ocirc;ng của họ hầu như kh&ocirc;ng kh&aacute;c xa đức Phật A Di Đ&agrave;. Những người đ&oacute; c&oacute; thi&ecirc;n nh&atilde;n, thi&ecirc;n nhĩ rất lợi hại. Tận hư kh&ocirc;ng biến ph&aacute;p giới họ đều nh&igrave;n thấy. Khởi t&acirc;m động niệm của tất cả ch&uacute;ng sanh, họ đều biết cả v&igrave; đạt tha t&acirc;m th&ocirc;ng. Thần th&ocirc;ng của quỷ thần c&ograve;n giới hạn so với khả năng của A La H&aacute;n ở T&acirc;y Phương. Khả năng của A La H&aacute;n c&oacute; thể biết được năm trăm kiếp của một con người, cụ thể t&igrave;nh trạng từng đời từng kiếp. Trong khi đ&oacute; quỷ thần chỉ biết được những việc l&agrave;m của ch&uacute;ng ta gần đ&acirc;y khoảng v&agrave;i th&aacute;ng.</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ch&uacute;ng ta muốn v&atilde;ng sanh thế giới Cực Lạc T&acirc;y phương, nếu &yacute; niệm kh&ocirc;ng l&agrave;nh, h&agrave;nh vi kh&ocirc;ng thiện th&igrave; d&ugrave; suốt ng&agrave;y niệm A Di Đ&agrave; Phật, mười vạn biến, kh&ocirc;ng bao giờ gi&aacute;n đoạn vẫn kh&ocirc;ng thể v&atilde;ng sanh.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<div><strong>Ph&aacute;p sư: HT. TỊNH KH&Ocirc;NG giảng Tr&iacute;ch lục từ Kinh Địa Tạng Bồ T&aacute;t Bổn Nguyện</strong></div>\n<p>&nbsp;&nbsp;&nbsp;<strong>Bi&ecirc;n dịch: Nhạo Minh cư sĩ</strong></p>\n<p>&nbsp;&nbsp;&nbsp;<strong>Bi&ecirc;n tập: PT. Gi&aacute;c Minh Duy&ecirc;n</strong></p>\n<div>&nbsp;&nbsp;&nbsp;<strong>Giảng tại&nbsp;Tịnh t&ocirc;ng Học hội Singapore, th&aacute;ng 05 - 1998</strong></div>\n</div>', 4, '', '../assets/images/daycontuthuatrongthai22.jpg');
INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`, `anhdaidien`) VALUES
(38, 'Những điều không nên nói với con', '<p>1. &ldquo;Nếu con kh&ocirc;ng dừng lại, mẹ sẽ để con lại một m&igrave;nh"  Đ&agrave;nh rằng cha mẹ n&oacute;i ra điều n&agrave;y kh&ocirc;ng nhằm đe dọa trẻ m&agrave; chỉ muốn trẻ h&agrave;nh động theo &yacute; m&igrave;nh.  Tuy nhi&ecirc;n, c&acirc;u n&oacute;i c&oacute; thể l&agrave;m trẻ sợ v&agrave; nghĩ rằng cha mẹ kh&ocirc;ng y&ecirc;u m&igrave;nh. Thay v&igrave; c&aacute;ch n&oacute;i tr&ecirc;n, cha mẹ c&oacute; thể chọn th&aacute;i độ nhẹ nh&agrave;ng hơn: &ldquo;Mẹ đang rất vội. Mẹ cho con chơi nốt lần n&agrave;y nữa. Sau đ&oacute; ch&uacute;ng ta phải về. Nếu con kh&ocirc;ng nghe lời, lần sau mẹ kh&ocirc;ng cho con đến đ&acirc;y nữa&rdquo;.</p>\n<p>2. &ldquo;Mẹ cảm thấy xấu hổ v&igrave; con&rdquo;  Cha mẹ n&oacute;i c&acirc;u n&agrave;y v&igrave; muốn tạo ra một t&acirc;m trạng ăn năn, hối hận ở trẻ với niềm tin rằng: &ldquo;Nếu cảm thấy xấu hổ v&agrave; c&oacute; cảm gi&aacute;c tội lỗi, trẻ sẽ thay đổi h&agrave;nh vi&rdquo;.  Tuy nhi&ecirc;n, cha mẹ lặp đi lặp lại c&acirc;u n&oacute;i n&agrave;y sẽ khiến trẻ tự ti v&igrave; m&igrave;nh l&agrave;m c&aacute;i g&igrave; cũng sai, cũng để cha mẹ phiền l&ograve;ng. Trẻ kh&ocirc;ng c&ograve;n tin v&agrave;o năng lực bản th&acirc;n trước khi l&agrave;m bất cứ việc g&igrave;. Nếu cha mẹ kh&ocirc;ng muốn con dần mất tự tin, đừng n&ecirc;n d&ugrave;ng c&acirc;u n&oacute;i tr&ecirc;n.</p>\n<p>3. &ldquo;Mẹ kh&ocirc;ng muốn c&oacute; con&rdquo;  &ldquo;Mẹ ước kh&ocirc;ng bao giờ c&oacute; con&rdquo;, &ldquo;Nếu được l&agrave;m lại một lần nữa, mẹ sẽ kh&ocirc;ng bao giờ sinh con ra&rdquo; l&agrave; những c&aacute;ch n&oacute;i nặng nề nhất đối với những đứa trẻ - bất kể bạn n&oacute;i với ch&uacute;ng bằng th&aacute;i độ n&agrave;o, giọng n&oacute;i n&agrave;o.  Lời n&oacute;i của bạn c&oacute; thể l&agrave;m tổn thương t&acirc;m hồn ng&acirc;y thơ của trẻ một c&aacute;ch nghi&ecirc;m trọng. Ch&uacute;ng sẽ kh&ocirc;ng hiểu rằng bạn bực tức n&ecirc;n mới n&oacute;i thế, ch&uacute;ng sẽ cho rằng bạn kh&ocirc;ng hề y&ecirc;u ch&uacute;ng, c&oacute; ch&uacute;ng l&agrave; ngo&agrave;i mong muốn của bạn. Điều đ&oacute; kh&ocirc;ng chỉ l&agrave;m cho bạn v&agrave; con ng&agrave;y c&agrave;ng xa nhau m&agrave; c&ograve;n khiến con lu&ocirc;n tự ti, kh&ocirc;ng &yacute; thức được gi&aacute; trị của m&igrave;nh khi được sinh ra tr&ecirc;n đời.</p>\n<p>4. &ldquo;Cha mẹ ly h&ocirc;n v&igrave; con đấy!&rdquo;  Kh&ocirc;ng bao giờ con c&aacute;i lại l&agrave; l&yacute; do để cha mẹ chia tay. Đừng dồn g&aacute;nh nặng t&acirc;m l&yacute; l&ecirc;n con. Cha mẹ chia tay đ&atilde; l&agrave; một nỗi buồn, nỗi mất m&aacute;t con c&aacute;i phải g&aacute;nh chịu. Khi con y&ecirc;u cầu bạn giải th&iacute;ch cho ch&uacute;ng l&yacute; do v&igrave; sao cha mẹ chia tay, nếu con chưa đủ lớn đến hiểu được l&yacute; do, h&atilde;y nợ ch&uacute;ng một lời giải th&iacute;ch. Đừng v&igrave; trả lời cho xong m&agrave; n&oacute;i rằng &ldquo;con l&agrave; l&yacute; do khiến cha mẹ chia tay&rdquo;. Bởi như thế, con bạn sẽ lu&ocirc;n ăn năn, hối lỗi: &ldquo;Nếu m&igrave;nh kh&aacute;c đi, nếu m&igrave;nh ngoan hơn, cha mẹ đ&atilde; kh&ocirc;ng chia tay&rdquo;. Cảm gi&aacute;c tội lỗi l&agrave;m gia đ&igrave;nh ly t&aacute;n sẽ l&agrave; một vết thương trẻ mang theo suốt đời.</p>\n<p>5. &ldquo;Để mẹ l&agrave;m cho&rdquo;  C&oacute; đ&ocirc;i khi &ldquo;để đ&oacute; mẹ l&agrave;m cho&rdquo;, &ldquo;c&aacute;i đ&oacute; con kh&ocirc;ng l&agrave;m được đ&acirc;u&rdquo; l&agrave; c&acirc;u cửa miệng của cha mẹ. Những c&acirc;u n&oacute;i n&agrave;y kh&ocirc;ng thể khuyến kh&iacute;ch con t&iacute;nh tự lập. L&acirc;u dần th&agrave;nh th&oacute;i quen, trẻ sẽ ỷ lại v&agrave;o người kh&aacute;c, tự ti về bản th&acirc;n m&igrave;nh. Bạn c&oacute; thể l&agrave;m hộ con 1-2 lần, nhưng nếu sang lần thứ 3 th&igrave; bạn đ&atilde; h&igrave;nh th&agrave;nh cho đứa trẻ một th&oacute;i quen nhờ cậy người kh&aacute;c rồi đấy.</p>\n<p>6. &ldquo;L&yacute; do ư? Đơn giản v&igrave; mẹ n&oacute;i như thế!&rdquo;  C&acirc;u n&oacute;i tr&ecirc;n với một th&ocirc;ng điệp ngầm nhưng ho&agrave;n to&agrave;n r&otilde; rằng: &ldquo;Mẹ l&agrave; người c&oacute; quyền ra lệnh, c&ograve;n con c&oacute; nghĩa vụ phải nghe theo&rdquo;.  Ra lệnh kiểu như vậy, bạn chỉ bắt trẻ phục t&ugrave;ng một c&aacute;ch miễn cưỡng chứ kh&ocirc;ng t&acirc;m phục khẩu phục. Trẻ sẽ cảm thấy thiếu c&ocirc;ng bằng, thấy cha mẹ qu&aacute; độc đo&aacute;n v&agrave; kh&ocirc;ng t&ocirc;n trọng con.</p>\n<p><em>Nguồn: <a href="http://megafun.vn/cuoc-song/quan-he/gia-dinh/201005/Nhung-dieu-khong-nen-noi-voi-con-75351/">http://megafun.vn/cuoc-song/quan-he/gia-dinh/201005/Nhung-dieu-khong-nen-noi-voi-con-75351/</a></em></p>', 4, '', '../assets/images/day-con.jpg'),
(39, '"Đo" khả năng thành tài của con bạn', '&nbsp;\r\n<div>\r\n<div align="right">\r\n<table width="1" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="60"></td>\r\n<td></td>\r\n<td></td>\r\n<td></td>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\nNgày nay, các chuyên gia tâm lý và giáo dục cho rằng, ngoài thành tích học tập ở nhà trường, để thành công trong cuộc đời sau này, trẻ còn phải là con người lạc quan, tự tin và đó cũng là một trong những mục tiêu hàng đầu của giáo dục gia đình.\r\n\r\nĐánh giá "chỉ số cảm xúc" (emotional quotien, hay EQ) của trẻ đang được sử dụng nhiều và được coi là chỉ số báo hiệu đáng tin cậy nhất cho sự thành công trong tương lai của trẻ. Những chỉ số này dự báo trẻ có những phẩm chất để tự hoàn thiện và ý chí phấn đấu để đạt được những mục tiêu trong đời hay không.\r\n\r\nTác giả của phương pháp trắc nghiệm cảm xúc này là Daniel Goleman với tác phẩm có tên là "Thông tuệ về cảm xúc: Tại sao lại có ý nghĩa hơn chỉ số thông minh" đã chứng minh rằng "những trẻ biết đánh giá bản thân, hiểu tâm lý của những người xung quanh, biết thích nghi với hoàn cảnh, linh hoạt, tự tin là những trẻ dễ thành đạt".\r\n\r\n<img src="http://www.eva.vn/upload/3-2011/images/2011-09-19/1316395038-day-con-thanh-tai.jpg" alt="''Đo'' khả năng thành tài của con bạn - 1" width="425" height="283" />\r\n<span><em>Ngoài khả năng học tập, trẻ cần nhiều tiêu chí để thành công. (Ảnh minh họa).</em></span>\r\n\r\nChỉ số cảm xúc càng cao thì trẻ càng được trang bị tốt hơn để ứng phó với những trạng thái tâm lý của mình, những lựa chọn khó khăn trong đời sống hay trong học tập và sau này với những hoàn cảnh không thuận lợi trong công việc.\r\n\r\nTại sao lại như vậy? Vì hiểu biết khoa học còn dễ dạy hơn kỹ năng làm người. Những trẻ có chỉ số cảm xúc cao, biết ứng xử tốt hơn trong các mối quan hệ ở nhà trường và xã hội, do đó thành công hơn. Như vậy là dạy cho trẻ biết xử lý một cách có kết quả những cảm xúc của chính mình và của những người khác đem lại cho trẻ một phương tiện cần thiết để phát triển và làm phong phú thêm trong cuộc đời hoạt động của chúng sau này.\r\n\r\nTiến sĩ Maurice Elias, đồng tác giả của tác phẩm "Thông tuệ về cảm xúc của các bậc cha mẹ: Làm thế nào để xây dựng ý thức kỷ luật với bản thân, ý thức trách nhiệm, kỹ năng xã hội cho trẻ?" đã đưa ra một bộ câu hỏi trắc nghiệm đơn giản có thể giúp đánh giá chỉ số cảm xúc của trẻ và của chính cha mẹ.\r\n\r\n<strong>Bạn hãy trả lời những câu hỏi sau đây và cho điểm:</strong>\r\n\r\nĐiểm 1: Hiếm hoặc không đúng.\r\n\r\nĐiểm 2: Đôi khi hoặc gần đúng.\r\n\r\nĐiểm 3: Thường xảy ra hoặc hoàn toàn đúng.\r\n\r\n<strong>Những câu hỏi dành cho trẻ:</strong>\r\n\r\n<em>- </em>Trẻ có dễ dàng nói về cảm xúc của mình không?\r\n\r\n- Trẻ có biết nhiều từ để mô tả cảm xúc của mình?\r\n\r\n- Trẻ có khả năng thông cảm với người khác không?\r\n\r\n- Trẻ có thái độ lạc quan không?\r\n\r\n<img src="http://www.eva.vn/upload/3-2011/images/2011-09-19/1316395038-phat-trien-iq-cho-tre.jpg" alt="''Đo'' khả năng thành tài của con bạn - 2" width="425" height="352" />\r\n<span><em>Trẻ nhanh nhẹn, lạc quan thì khả năng thành công cao hơn. (Ảnh minh họa).</em></span>\r\n\r\n- Trẻ có kiên nhẫn chờ đợi một người nào đó mà trẻ đang cần gặp không?\r\n\r\n- Trẻ có mục tiêu phù hợp với lứa tuổi và một vài ý nghĩ để đạt được những mục tiêu đó không?\r\n\r\n- Trẻ có biết giải quyết khó khăn một cách độc lập không?\r\n\r\n- Trẻ có chăm chú nghe không?\r\n\r\n- Trẻ có biết đang cần gì và biết yêu cầu như thế nào không?\r\n\r\n- Trẻ có biết sống hoà hợp trong nhóm bạn cùng lứa không?\r\n\r\n<strong>Những câu hỏi cho cha mẹ:</strong>\r\n\r\n- Bạn có cảm xúc như thế nào trong phần lớn thời gian của bạn không (vui, buồn, chán nản, hận thù, đố kỵ...)?\r\n\r\n- Bạn có thử hiểu quan điểm của người khác ngay cả khi đang tranh luận không?\r\n\r\n- Bạn có cách nhìn lạc quan và tin tưởng vào cuộc đời không?\r\n\r\n- Bạn có thường xuyên chia sẻ cảm xúc của mình với người khác không?\r\n\r\n- Bạn có kiểm soát được tính khí của bạn ngay cả khi căng thẳng không?\r\n\r\n- Bạn có mục tiêu và kế hoạch để hoàn thành những mục tiêu đó không?\r\n\r\n- Bạn có biết chăm chú nghe như thế nào và nhắc lại được những điều vừa nói không?\r\n\r\n- Bạn có cân nhắc mọi khả năng trước khi đi đến quyết định không?\r\n\r\n- Bạn có biết cần phải suy nghĩ về những nhu cầu của mình như thế nào và thực hiện những nhu cầu đó không?\r\n\r\n- Bạn có thời gian để vui đùa với những người bạn yêu mến không?\r\n\r\n<strong>Cộng điểm: Tổng số điểm có thể áp dụng cho cả bạn và con bạn.</strong>\r\n\r\n<em>25 điểm trở lên: </em>Chỉ số cảm xúc thuộc loại ưu. Thông tuệ cảm xúc như vậy làm tươi sáng cuộc sống của bản thân và của cả những người xung quanh. Hãy cố gắng duy trì lối sống đó.\r\n\r\n<em>16 - 24:</em> Cũng tốt nhưng đừng dừng lại và thỏa mãn, hãy cố gắng để hoàn thiện mình.\r\n\r\n<em>10 - 15:</em> Đáng phàn nàn, cần rèn luyện để nâng cao chỉ số cảm xúc của mình.\r\n<p style="text-align: right">Nguồn: <a href="http://www.eva.vn/lam-me/do-kha-nang-thanh-tai-cua-con-ban-c10a75641.html">http://www.eva.vn/lam-me/do-kha-nang-thanh-tai-cua-con-ban-c10a75641.html</a></p>\r\n\r\n</div>', 0, NULL, NULL),
(40, '"Dẫn lối" thành công khi nuôi dạy con', '<p><strong>5 b&iacute; k&iacute;p dưới đ&acirc;y sẽ gi&uacute;p bạn giảm căng thẳng v&agrave; nh&agrave;n hạ hơn khi l&agrave;m cha mẹ.</strong> Khi thấy những đứa trẻ hoạt b&aacute;t nhưng cũng rất ngoan ngo&atilde;n v&agrave; lễ ph&eacute;p, bạn c&oacute; bao giờ tự hỏi bố mẹ ch&uacute;ng đ&atilde; nu&ocirc;i dưỡng ch&uacute;ng như thế n&agrave;o chưa?  L&agrave;m cha mẹ, kh&oacute; tr&aacute;nh khỏi những &aacute;p lực v&agrave; m&acirc;u thuẫn trong khi nu&ocirc;i dạy con.</p>\n<p>5 <strong>b&iacute; quyết nu&ocirc;i dạy con</strong> dưới đ&acirc;y sẽ gi&uacute;p bạn giảm phần n&agrave;o đ&oacute; căng thẳng v&agrave; nh&agrave;n hạ hơn khi l&agrave;m cha mẹ.  <strong><br /></strong></p>\n<p><strong>1. &nbsp; Sự nhất qu&aacute;n</strong> Dạy trẻ tối kỵ việc &lsquo;n&oacute;i một đằng, l&agrave;m một nẻo&rsquo;. V&igrave; vậy, khi đ&atilde; hứa điều g&igrave; đ&oacute; với con trẻ, cha mẹ cần cố gắng thực hiện đ&uacute;ng. Li&ecirc;n tục ra &lsquo;luật&rsquo; mới sẽ khiến trẻ rối tr&iacute; v&agrave; kh&ocirc;ng hiểu được ch&iacute;nh x&aacute;c việc m&igrave;nh cần l&agrave;m v&agrave; n&ecirc;n l&agrave;m l&agrave; g&igrave;. Cần gi&uacute;p trẻ hiểu những nguy&ecirc;n tắc cơ bản trong gia đ&igrave;nh m&agrave; ch&uacute;ng phải tu&acirc;n theo. V&agrave; người lớn trong gia đ&igrave;nh kh&ocirc;ng được &lsquo;trống đ&aacute;nh xu&ocirc;i, k&egrave;n thổi ngược&rsquo; để tr&aacute;nh việc trẻ c&oacute; thể bị nhầm lẫn với những th&ocirc;ng điệp kh&aacute;c nhau.  <img src="http://www.eva.vn/upload/1-2012/images/2012-02-13/1329122658-biquyetnuoidaycon5.jpg" alt="''Dẫn lối'' thành công khi nuôi dạy con - 1" /></p>\n<p><span><em>Khi phạt trẻ, cha mẹ cần c&oacute; sự nghi&ecirc;m t&uacute;c. (Ảnh minh họa).</em></span></p>\n<p><strong>2.&nbsp;&nbsp;&nbsp; Th&oacute;i quen</strong> C&oacute; c&acirc;u &lsquo;th&oacute;i quen n&oacute;i l&ecirc;n nh&acirc;n c&aacute;ch&rsquo;, muốn con ngoan th&igrave; cha mẹ cần uốn nắn c&agrave;ng sớm c&agrave;ng tốt. Th&oacute;i quen tốt như: ngủ đ&uacute;ng v&agrave; đủ giấc, ăn đ&uacute;ng giờ, hạn chế ăn vặt... sẽ gi&uacute;p trẻ c&oacute; sức khỏe ổn định, c&oacute; thời gian học tập v&agrave; vui chơi hợp l&yacute;. Đồng thời, cha mẹ cũng kh&ocirc;ng phải cuống cuồng, căng thẳng v&igrave; lo cho con.</p>\n<p><strong>3.&nbsp;&nbsp;&nbsp; Ranh giới</strong> &lsquo;Ra luật&rsquo; với trẻ ch&iacute;nh l&agrave; ch&igrave;a kh&oacute;a th&agrave;nh c&ocirc;ng trong việc nu&ocirc;i dạy trẻ th&agrave;nh t&agrave;i. H&atilde;y đưa ra những ranh giới r&otilde; r&agrave;ng để chứng tỏ quyền hạn của người lớn với trẻ v&agrave; để cho trẻ hiểu rằng nơi n&agrave;o, l&uacute;c n&agrave;o l&agrave; cần phải l&agrave;m việc g&igrave;. Nếu muốn con trẻ khi lớn l&ecirc;n sống kh&ocirc;ng dựa dẫm, biết tự lập th&igrave; đừng tạo ra cho trẻ qu&aacute; nhiều chọn lựa khiến trẻ &lsquo;k&eacute;n c&aacute;, chọn canh&rsquo; v&agrave; kh&ocirc;ng dứt kho&aacute;t.  <img src="http://www.eva.vn/upload/1-2012/images/2012-02-13/1329122658-biquyetnuoidaycon4.jpg" alt="''Dẫn lối'' thành công khi nuôi dạy con - 2" width="500" height="334" /> <span><em><br /></em></span></p>\n<p><span><em>H&atilde;y gi&uacute;p trẻ hiểu rằng c&oacute; những giới hạn, trẻ buộc phải tu&acirc;n theo. (Ảnh minh họa).</em></span></p>\n<p><strong>4.&nbsp;&nbsp;&nbsp; Sự kiềm chế</strong> Biết tiết chế cơn giận, b&igrave;nh tĩnh kiểm so&aacute;t mọi việc v&agrave; kh&ocirc;ng đối xử ''độc t&agrave;i'' với con... l&agrave; những điều m&agrave; nhiều bậc phụ huynh đ&atilde; biết nhưng để l&agrave;m được lại kh&ocirc;ng dễ. Khi sắp nổi ''s&acirc;n si'' với con, bạn c&oacute; thể nhắm mắt lại v&agrave; h&iacute;t thở thật s&acirc;u, hoặc đếm ngược từ 10, hoặc lảng sang chuyện kh&aacute;c... H&atilde;y nhớ, đừng l&agrave;m lớn chuyện với những g&igrave; kh&ocirc;ng thay đổi ngay được.  Ngo&agrave;i ra, ngay cả khi khen thưởng trẻ cũng cần phải kiềm chế, v&igrave; khen thưởng sẽ mất đi t&aacute;c dụng nếu trẻ đ&atilde; nghe nh&agrave;m tai v&agrave; cũng kh&oacute; để trẻ tin rằng cha mẹ thực l&ograve;ng khen ngợi ch&uacute;ng. <strong><br /></strong></p>\n<p><strong>5.&nbsp;&nbsp;&nbsp; Thư gi&atilde;n</strong> D&agrave;nh thời gian gần gũi, c&ugrave;ng chơi với con gi&uacute;p t&igrave;nh mẫu tử/phụ tử th&ecirc;m gắn kết hơn. Những lời n&oacute;i nựng nịu, &acirc;u yếm hay những c&aacute;i thơm v&agrave;o m&aacute;... l&agrave; ''thần dược'' đối với sự ph&aacute;t triển tinh thần của trẻ nhỏ. H&atilde;y tiếp cận từng giai đoạn ph&aacute;t triển của trẻ (v&iacute; dụ như tập ngồi b&ocirc;) với một th&aacute;i độ cởi mở v&agrave; dễ chịu, bởi v&igrave; nếu bạn lu&ocirc;n căng thẳng, trẻ sẽ nhận ra ngay.  Kh&ocirc;ng k&eacute;m phần quan trọng, thỉnh thoảng phải tự cho m&igrave;nh những gi&acirc;y ph&uacute;t xả hơi, nghỉ ngơi giải tr&iacute; với vợ/chồng m&agrave; kh&ocirc;ng mang theo con - sự nghỉ ngơi n&agrave;y sẽ đem lại nhiều thay đổi t&iacute;ch cực kh&ocirc;ng ngờ đấy !</p>\n<p><em>Nguồn:<a href="http://eva.vn"> www.eva.vn</a></em></p>', 4, '', '../assets/images/1271644272-iza103014.jpg'),
(41, 'Giúp trẻ phát triển chiều cao tối ưu', '<div>Nhằm gi&uacute;p trẻ c&oacute; một chiều cao c&acirc;n đối v&agrave; một thể lực dẻo dai, phụ huynh cần lưu &yacute; <strong>những yếu tố ảnh hưởng trực tiếp</strong> tr&ecirc;n sự ph&aacute;t triển chiều cao của con trẻ để c&oacute; những hỗ trợ t&iacute;ch cực. <em> <strong><br /><br /><span>Những yếu tố ảnh hưởng</span></strong><span>:</span></em><br /><strong>1. Dinh dưỡng</strong>: đ&acirc;y l&agrave; yếu tố g&oacute;p phần đến 31% sự ph&aacute;t triển chiều cao của trẻ. Để gi&uacute;p trẻ c&oacute; được chiều cao tối ưu cần c&oacute; sự c&acirc;n đối về chế độ dinh dưỡng sao cho hợp l&yacute; nhất để trẻ c&oacute; thể c&oacute; một sức khỏe dẻo dai, một th&acirc;n h&igrave;nh l&yacute; tưởng v&agrave; sức đề kh&aacute;ng tốt. Một chế độ dinh dưỡng khoa học cần c&oacute; sự g&oacute;p mặt của tinh bột, chất b&eacute;o, chất đạm, c&aacute;c vitamin, nhất l&agrave; vitamin C, kho&aacute;ng chất v&agrave; c&aacute;c chất xơ từ ch&iacute;nh nguồn rau xanh v&agrave; tr&aacute;i c&acirc;y tươi. <br />&nbsp;&nbsp; Đặc biệt, trong đ&oacute; chất đạm (protein) tham gia v&agrave;o việc h&igrave;nh th&agrave;nh c&aacute;c tế b&agrave;o, tăng cường hệ thống miễn dịch, canxi tạo độ chắc khỏe cho xương v&agrave; răng, vitamin D gi&uacute;p chuyển h&oacute;a hiệu quả canxi v&agrave; phốt pho trong cơ thể.  &nbsp;    \n<table cellspacing="5" cellpadding="0" align="center">\n<tbody>\n<tr>\n<td>\n<div>\n<div><img src="http://img.suckhoedoisong.vn/Images/Uploaded/Share/2011/05/27/d18giup-tre-phat-trien-chieu-cao-toi-uu.jpg" alt="" width="400" /></div>\n</div>\n<div>&nbsp;Dinh dưỡng l&agrave; yếu tố g&oacute;p 31% sự ph&aacute;t triển chiều cao của trẻ</div>\n</td>\n</tr>\n</tbody>\n</table>\n<strong>2. Di truyền</strong>: g&oacute;p phần quyết định chiều cao tương lai của trẻ tới 23%. Nghi&ecirc;n cứu cho thấy, bố mẹ c&oacute; chiều cao l&yacute; tưởng th&igrave; con c&aacute;i sinh ra c&oacute; chiều cao rất khả quan. Cụ thể nếu bố mẹ cao, chiều cao của con c&aacute;i sẽ theo tỷ lệ 3:1(cơ hội cao l&agrave; 3, thấp l&agrave; 1). Tuy nhi&ecirc;n nếu bố mẹ c&oacute; chiều cao khi&ecirc;m tốn, đừng qu&aacute; lo lắng về chiều cao của trẻ v&igrave; ngo&agrave;i yếu tố di truyền, yếu tố dinh dưỡng v&agrave; m&ocirc;i trường sống cũng c&oacute; một t&aacute;c động rất lớn l&ecirc;n sự ph&aacute;t triển chiều cao của trẻ.<br />&nbsp;<strong>3.</strong> <strong>Vận động thể lực v&agrave; giấc ngủ:</strong> quyết định sự tăng trưởng chiều cao khoảng 20%. Ngay cả khi trẻ c&ograve;n nhỏ, cần r&egrave;n cho trẻ th&oacute;i quen luyện tập một c&aacute;ch đều đặn để c&oacute; thể đảm bảo cho cơ v&agrave; xương ph&aacute;t triển một c&aacute;ch tối đa. C&oacute; rất nhiều h&igrave;nh thức luyện tập, phụ huynh v&agrave; trẻ h&atilde;y c&ugrave;ng chọn ra một m&ocirc;n thể thao ưa th&iacute;ch v&agrave; hợp với sức của trẻ nhất như bơi lội, đ&aacute; b&oacute;ng, khi&ecirc;u vũ, đạp xe đạp...  <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ngủ đủ v&agrave; đ&uacute;ng giờ quy định để tối ưu h&oacute;a chiều cao cho trẻ. Cần quan t&acirc;m đến qu&aacute; tr&igrave;nh h&igrave;nh th&agrave;nh của một loại hormone c&oacute; t&ecirc;n l&agrave; somatotropin. Hormone n&agrave;y nắm giữ vai tr&ograve; quan trọng trong việc tạo n&ecirc;n c&aacute;c tế b&agrave;o sụn (c&aacute;c tế b&agrave;o sụn n&agrave;y tham gia t&iacute;ch cực v&agrave;o việc tăng chiều d&agrave;i của c&aacute;c xương như xương tay, xương ch&acirc;n&hellip;). B&ecirc;n cạnh đ&oacute; somatotropin cũng k&iacute;ch th&iacute;ch cơ thể sản sinh th&ecirc;m một loại hormone c&oacute; t&ecirc;n gọi l&agrave; somatomedin. Hormon n&agrave;y gi&uacute;p tăng trưởng chiều cao khoảng một giờ ngay sau khi trẻ bắt đầu giấc ngủ. Đ&acirc;y l&agrave; l&yacute; do tại sao trẻ em n&ecirc;n ngủ đều đặn v&agrave; đ&uacute;ng giờ quy định. <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Ba giai đoạn quan trọng trong việc ph&aacute;t triển chiều cao của trẻ</strong> c&oacute; 3 giai đoạn quan trọng đ&oacute; l&agrave;: <br /><em><strong>- Giai đoạn trong b&agrave;o thai:</strong></em> trong thời gian mang thai, nếu người mẹ c&oacute; chế độ dinh dưỡng tốt, người mẹ tăng c&acirc;n từ 10 - 15kg th&igrave; trẻ sinh ra sẽ đạt chiều cao l&agrave; 50cm v&agrave; nặng từ 3kg trở l&ecirc;n. <br /> <em><strong>- Giai đoạn sơ sinh đến 3 tuổi:</strong></em> 12 th&aacute;ng đầu trẻ tăng 25cm; 2 năm tiếp theo mỗi năm trẻ cao th&ecirc;m 10cm nếu được nu&ocirc;i dưỡng tốt. <br /> <em><strong>- Giai đoạn dậy th&igrave;: </strong></em>b&igrave;nh thường b&eacute; g&aacute;i từ 10 - 16 tuổi v&agrave; b&eacute; trai từ 12 &ndash; 18 tuổi. Trong giai đoạn n&agrave;y, c&oacute; 1 - 2 năm chiều cao trẻ tăng vọt từ 8 - 12cm mỗi năm nếu được nu&ocirc;i dưỡng tốt. Thực tế kh&ocirc;ng thể biết ch&iacute;nh x&aacute;c năm đ&oacute; l&agrave; năm n&agrave;o, n&ecirc;n vẫn phải đảm bảo dinh dưỡng tốt cho trẻ trong suốt thời gian n&agrave;y. <br />&nbsp;&nbsp;&nbsp;&nbsp; Sau thời kỳ dậy th&igrave;, cơ thể trẻ cũng tăng chiều cao nhưng với tốc độ rất chậm rồi ngưng hẳn ở khoảng độ tuổi 22 đối với nữ v&agrave; 25 tuổi đối với nam. Người ta thường ước t&iacute;nh chiều cao của trẻ khi trưởng th&agrave;nh sẽ gấp đ&ocirc;i chiều cao l&uacute;c 2 tuổi (chẳng hạn l&uacute;c 2 tuổi trẻ cao 82cm, khi lớn sẽ cao 164cm). Hoặc chiều cao l&uacute;c trưởng th&agrave;nh bằng chiều cao l&uacute;c 10 tuổi nh&acirc;n với 1,25 (v&iacute; dụ khi 10 tuổi trẻ cao 140cm th&igrave; l&uacute;c trưởng th&agrave;nh sẽ cao 175cm). <br /><br />&nbsp;&nbsp;&nbsp;&nbsp; <em><strong>Dấu hiệu gợi &yacute; con trẻ của bạn đang c&oacute; vấn đề về ph&aacute;t chiều cao:</strong></em> <br />- Trong một năm chiều cao của trẻ ph&aacute;t triển kh&ocirc;ng qu&aacute; 4cm. <br /> - Chiều cao hiện tại của trẻ thấp hơn khoảng 10cm so với chiều cao trung b&igrave;nh của c&aacute;c bạn c&ugrave;ng trang lứa. Khi trẻ mắc phải một trong c&aacute;c vấn đề n&agrave;y, tốt nhất bạn n&ecirc;n nhờ sự hỗ trợ v&agrave; tư vấn của b&aacute;c sĩ chuy&ecirc;n khoa.\n<p>ThS.BS. ĐINH THẠC</p>\n<p><em>Nguồn: <a href="http://suckhoedoisong.vn">www.suckhoedoisong.vn</a></em></p>\n</div>', 4, '', '../assets/images/images646803_CB112830.jpg'),
(42, 'Video về trường Ams', '<p><strong>20 năm trường Ams:</strong> http://www.youtube.com/watch?v=g78aUqko-vQ  &nbsp;</p>\n<p><strong>Amsers dancing:</strong> http://www.youtube.com/watch?v=9oRT-2E2plM  &nbsp;</p>\n<p><strong>Giới thiệu trường Ams:</strong> http://www.youtube.com/watch?v=5XDkB0QRMwc</p>', 1, '', '../../assets/images/images.jpg'),
(45, 'Chương trình :"Bứt phá môn Toán trường Hà Nội Ams" ngày 25.3', '<p><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/41.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/1ipgbmp1.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/1ipgbmp4254.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/22.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/137.jpg" alt="" width="720" height="576" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/237.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/189.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/99.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/124.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/89.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/45.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/37.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/31.jpg" alt="" width="720" height="576" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/33.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/29.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/163.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/205.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/197.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/180.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/133.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 25 thang 3/132.jpg" alt="" /></p>', 3, 'Unix JSC', '../assets/images/6 [Max Width 640 Max Height 480].jpg'),
(46, 'Chương trình :"Quà tặng đặc biệt cho kỳ thi trường Hà Nội Amsterdam"', '<p><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0169.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0174.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0178.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0192.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0193.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0211.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0235.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0244.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0260.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0267.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0273.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0282.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0296.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0304.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0318.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0336.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0342.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0350.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0365.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0368.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0377.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0418.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0456.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0457.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0467.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0469.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0474.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0478.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0496.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0505.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0510.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0508.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0518.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0522.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0525.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0529.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0531.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0535.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0545.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0553.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0556.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0572.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0582.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0593.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0596.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0601.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0614.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0616.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0622.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0631.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0634.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0640.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0644.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0648.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0656.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0658.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0665.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0667.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0672.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0680.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0682.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0684.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0687.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0689.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0691.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0695.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0699.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0706.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0702.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0705.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0715.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0726.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0755.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0769.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0775.jpg" alt="" /><img src="http://i1168.photobucket.com/albums/r484/manhtienunix/Hoi thao ngay 20 thang 5/Hoi thao ngay 10 thang 6/DSC_0778.jpg" alt="" /></p>', 3, 'Unix JSC', '../assets/images/DSC_0721.JPG'),
(50, 'Clip chia tay cực "độc" của 300 học sinh lớp 12 trường Ams ', '<p><a href="http://www.youtube.com/watch?v=1uWcpU2x9As">http://www.youtube.com/watch?v=1uWcpU2x9As</a></p>', 1, '', '../assets/images/ams_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unix_sukien`
--

CREATE TABLE IF NOT EXISTS `unix_sukien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `thoigian` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diadiem` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `unix_sukien`
--

INSERT INTO `unix_sukien` (`id`, `tieude`, `mota`, `thoigian`, `diadiem`) VALUES
(1, 'Tiêu đề', 'Mô tả', 'Thời gian', 'Địa điểm'),
(2, 'Thắp sáng ước mơ doanh nhân', '<p>Hội thảo thắp s&aacute;ng ước mơ doanh nh&acirc;n,Hội trường c&aacute;n bộ phụ nữ, 68 Nguyễn Ch&iacute; Thanh, H&agrave; Nội</p>', '19/06/2012', 'Hội trường cán bộ phụ nữ, 68 Nguyễn Chí Thanh, Hà Nội'),
(3, 'Khóa học :"Chinh phục môn Toán trường Hà Nội Amste', '<p>Kh&oacute;a học :"Chinh phục m&ocirc;n To&aacute;n trường H&agrave; Nội Amsterdam"</p>', '20/08/2012', 'Hội trường cán bộ phụ nữ, 68 Nguyễn Chí Thanh, Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `unix_tieude_trangchu`
--

CREATE TABLE IF NOT EXISTS `unix_tieude_trangchu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `khoahoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ppdaotao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sukien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chungtoilaai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chungtoilamgi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_tieude_trangchu`
--

INSERT INTO `unix_tieude_trangchu` (`id`, `khoahoc`, `ppdaotao`, `sukien`, `chungtoilaai`, `chungtoilamgi`) VALUES
(1, 'CÁC KHÓA HỌC', 'PHƯƠNG PHÁP ĐÀO TẠO', 'SỰ KIỆN', 'CHÚNG TÔI LÀ AI', 'CHÚNG TÔI LÀM GÌ');

-- --------------------------------------------------------

--
-- Table structure for table `unix_tintuc`
--

CREATE TABLE IF NOT EXISTS `unix_tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(2000) NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anhdaidien` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  PRIMARY KEY (`tintuc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_tintuc`
--

INSERT INTO `unix_tintuc` (`tintuc_id`, `tieude`, `alias`, `noidung`, `anhdaidien`, `ngaythang`) VALUES
(1, '14 cách kiểm soát việc xem tivi của trẻ', '14-cach-kiem-soat-viec-xem-tivi-cua-tre', '<p><strong>Ai cũng biết rằng, TV v&agrave; internet l&agrave; hai nguồn t&agrave;i  nguy&ecirc;n quan trọng trong việc gi&aacute;o dục v&agrave; giải tr&iacute; cho trẻ nhưng nếu d&agrave;nh  thời gian qu&aacute; nhiều v&agrave;o n&oacute; th&igrave; trẻ sẽ gặp những t&aacute;c động ti&ecirc;u cực.</strong></em></p>\n<p>C&aacute;c chuy&ecirc;n gia nghi&ecirc;n cứu cho rằng, kh&ocirc;ng n&ecirc;n cho trẻ dưới 2  tuổi xem TV. Đối với trẻ hơn 2 tuổi chỉ cho xem khoảng từ 1-2 giờ/ng&agrave;y.   Đ&oacute; l&agrave; l&iacute; do v&igrave; sao m&agrave; ch&uacute;ng ta cần kiểm so&aacute;t thời gian xem TV, chơi  game v&agrave; truy cập mạng của trẻ. Một số gợi &yacute; dưới đ&acirc;y sẽ gi&uacute;p c&aacute;c mẹ kiểm  so&aacute;t dễ d&agrave;ng:</p>\n<p><strong>1. Hạn chế thời gian xem TV</strong> Để b&eacute; kh&ocirc;ng suốt ng&agrave;y  ngồi b&ecirc;n m&agrave;n h&igrave;nh TV, bạn n&ecirc;n d&agrave;nh thời gian chơi với con qua c&aacute;c tr&ograve;  chơi như đọc s&aacute;ch, l&agrave;m to&aacute;n đố tr&ecirc;n tạp ch&iacute;, xếp h&igrave;nh, diễn kịch, chơi  c&aacute;c tr&ograve; chơi d&acirc;n gian&hellip; Những hoạt động n&agrave;y sẽ k&eacute;o ngắn thời gian ngồi  b&ecirc;n m&agrave;n h&igrave;nh của b&eacute; v&agrave; gi&uacute;p b&eacute; hoạt động thể chất tốt hơn  <strong><br /></strong></p>\n<p><strong>2. Kh&ocirc;ng được để TV trong ph&ograve;ng ngủ của trẻ</strong> Hầu như c&aacute;c b&agrave; mẹ sai lầm khi đặt TV v&agrave; m&aacute;y vi t&iacute;nh trong ph&ograve;ng ngủ của con. TV sẽ l&agrave;m x&aacute;o trộn giờ ngủ của trẻ.</p>\n<p><strong>3. Tắt TV trong khi ăn</strong> Xem TV trong thời gian ăn l&agrave;  một sai lầm lớn của c&aacute;c gia đ&igrave;nh ở Việt Nam. Vừa ăn vừa xem TV sẽ rất  hại cho đường ti&ecirc;u h&oacute;a lại kh&ocirc;ng c&oacute; thời gian để c&aacute;c th&agrave;nh vi&ecirc;n trong  gia đ&igrave;nh b&agrave;n luận, tr&ograve; chuyện với nhau.</p>\n<p><strong>4. Kh&ocirc;ng cho trẻ xem TV khi đang l&agrave;m b&agrave;i tập về nh&agrave;</strong> Xem TV khiến trẻ kh&ocirc;ng tập trung được v&agrave;o b&agrave;i tập v&agrave; v&igrave; thế chất lượng l&agrave;m b&agrave;i cũng sẽ giảm.  &nbsp;</p>\n<div><img src="http://www.upload.sao.vn/2010/thuy/thang8/07/xemtivi.jpg" border="0" alt="14 cách kiểm soát việc xem TV của trẻ" width="450" height="300" /></div>\n&nbsp;\n<div><span><em>H&atilde;y d&agrave;nh thời xem TV c&ugrave;ng c&aacute;c con</em></span></div>\n<p><strong>5. Khiến việc xem TV l&agrave; một việc m&agrave; trẻ cần để đạt tới chứ kh&ocirc;ng phải l&agrave; một quyền lợi</strong> Chỉ cho trẻ xem sau khi đ&atilde; ho&agrave;n th&agrave;nh b&agrave;i tập về nh&agrave; hoặc l&agrave;m xong việc  nh&agrave;. Đặc biệt, n&ecirc;n cho trẻ tự chọn thời gian xem TV, chương tr&igrave;nh trẻ  y&ecirc;u th&iacute;ch nhưng vẫn nằm trong gợi &yacute; của bạn.</p>\n<p><strong>6. Cuối tuần đi chơi chứ kh&ocirc;ng ở nh&agrave; xem TV</strong> Bạn h&atilde;y  tạo nhiều hoạt động gi&uacute;p trẻ linh hoạt v&agrave; r&egrave;n luyện được thể lực như d&atilde;  ngoại, đi thư viện, thăm bảo t&agrave;ng, đọc s&aacute;ch, đ&aacute; b&oacute;ng, đ&aacute; cầu, chơi cầu  l&ocirc;ng&hellip;</p>\n<p><strong>7. Bạn cũng n&ecirc;n hạn chế thời gian xem TV</strong> Trẻ sẽ tự  hỏi rằng, tại sao bố mẹ xem được m&agrave; m&igrave;nh kh&ocirc;ng được xem? Nếu bạn cũng cứ  suốt ng&agrave;y ngồi b&ecirc;n chiếc TV th&igrave; đừng hi vọng c&oacute; thể kiểm so&aacute;t được trẻ.   <strong><br /></strong></p>\n<p><strong>8. Theo d&otilde;i lịch chiếu TV v&agrave; c&aacute;c chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> C&aacute;c chương tr&igrave;nh chiếu tr&ecirc;n TV d&agrave;nh cho nhiều người thuộc nhiều độ  tuổi. Ch&iacute;nh v&igrave; thế m&agrave; cần phải lựa chọn những chương tr&igrave;nh ph&ugrave; hợp với  độ tuổi của trẻ. Nếu nh&agrave; bạn c&oacute; con nhỏ, kh&ocirc;ng n&ecirc;n đăng k&iacute; những k&ecirc;nh  truyền h&igrave;nh chỉ d&agrave;nh cho người lớn (phim n&oacute;ng, cảnh bạo lực, h&agrave;nh  động&hellip;).  <strong><br /></strong></p>\n<p><strong>9. Xem x&eacute;t chất lượng c&aacute;c chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> Kh&ocirc;ng phải chương tr&igrave;nh truyền h&igrave;nh n&agrave;o cũng bổ &iacute;ch với trẻ, c&oacute; những  chương tr&igrave;nh kh&ocirc;ng mang lại &iacute;ch lợi gi&aacute;o dục hoặc c&oacute; những chương tr&igrave;nh  qu&aacute; kh&oacute; với tr&igrave;nh độ nhận thức của trẻ. Bạn n&ecirc;n xem trước (nếu c&oacute; điều  kiện) hoặc theo d&otilde;i chất lượng của c&aacute;c chương tr&igrave;nh đ&oacute; tr&ecirc;n c&aacute;c phương  tiện th&ocirc;ng tin để c&oacute; được lựa chọn đ&uacute;ng đắn.  &nbsp;</p>\n<div><img src="http://www.tapchigiadinh.vn/images/stories/giadinh/0807/anh_goc/xemtivi1.jpg" border="0" alt="14 cách kiểm soát việc xem TV của trẻ" width="460" height="310" /></div>\n&nbsp;\n<div><span><em>Bạn cần chọn lựa chương tr&igrave;nh th&iacute;ch hợp đối với trẻ</em></span></div>\n<p><strong>10. Theo d&otilde;i lượng rating của chương tr&igrave;nh d&agrave;nh cho trẻ nhỏ</strong> Th&ocirc;ng thường, lượng rating đ&aacute;nh gi&aacute; chất lượng của một chương tr&igrave;nh  cũng l&agrave; c&aacute;ch để bạn biết xu hướng về sở th&iacute;ch, tr&agrave;o lưu của trẻ b&acirc;y  giờ.&nbsp;</p>\n<p><strong>11. C&ugrave;ng xem với trẻ</strong> Nếu bạn kh&ocirc;ng thể ngồi cả 30  ph&uacute;t để xem hết chương tr&igrave;nh c&ugrave;ng với trẻ th&igrave; bạn cũng n&ecirc;n xem &iacute;t nhất  l&agrave; 5 ph&uacute;t c&ugrave;ng trẻ. Đ&acirc;y l&agrave; cơ hội để bạn hiểu được những niềm đam m&ecirc;,  th&iacute;ch th&uacute; của con.&nbsp;</p>\n<p><strong>12. N&oacute;i chuyện với trẻ về những g&igrave; trẻ nh&igrave;n thấy tr&ecirc;n TV v&agrave; chia sẻ kinh nghiệm của bản th&acirc;n</strong> Nếu bỗng dưng trẻ gặp những t&igrave;nh huống kh&aacute; l&agrave; tế nhị như sex, t&igrave;nh y&ecirc;u,  nghiện ngập, uống rượu, h&uacute;t thuốc, c&aacute;c c&aacute;ch cư xử kh&aacute;c lạ&hellip; tr&ecirc;n TV v&agrave;  hỏi bạn về điều đ&oacute; th&igrave; bạn cũng kh&ocirc;ng n&ecirc;n l&uacute;ng t&uacute;ng, tắt ngay TV m&agrave; h&atilde;y  d&ugrave;ng ch&iacute;nh TV để giải th&iacute;ch cho trẻ. Tuy nhi&ecirc;n, kh&ocirc;ng n&ecirc;n &uacute;p mở m&agrave; n&ecirc;n  n&oacute;i thẳng về vấn đề.  <strong><br /></strong></p>\n<p><strong>13. T&igrave;m sự ủng hộ từ những người kh&aacute;c</strong> Nh&agrave; bạn đ&atilde; c&oacute;  &ldquo;ch&iacute;nh s&aacute;ch&rdquo; xem TV với trẻ như vậy th&igrave; n&ecirc;n n&oacute;i điều đ&oacute; với c&aacute;c bậc cha  mẹ kh&aacute;c, với gi&aacute;o vi&ecirc;n để họ c&oacute; thể ủng hộ bạn.  <strong><br /></strong></p>\n<p><strong>14. Cung cấp nhiều lựa chọn vui chơi cho b&eacute; hơn l&agrave; chiếc TV</strong> Nếu trẻ kh&ocirc;ng muốn tắt TV đi để l&agrave;m việc kh&aacute;c, bạn h&atilde;y gợi &yacute; cho trẻ  những hoạt động th&uacute; vị hơn như đi ra ngo&agrave;i chơi chẳng hạn. Nếu trẻ kh&ocirc;ng  đồng &yacute;, bạn h&atilde;y ki&ecirc;n nhẫn một ch&uacute;t, dần dần sẽ thuyết phục được trẻ.&nbsp;</p>', '../../assets/images/han-che-xem-tv3.jpg', '2012-07-20'),
(3, 'Nữ sinh trường Ams được nhận vào đại học Harvard', 'Nu-sinh-truong-ams-duoc-nhan-vao-harvard', '<p>Khi c&aacute;c th&iacute; sinh vừa trải qua kỳ <a href="http://www.24h.com.vn/tuyen-sinh-2012-c216e2095.html"><strong>tuyển sinh đại học 2012</strong></a> đang sốt sắng chờ điểm th&igrave; một số bạn trẻ lại h&aacute;o hức chuẩn bị tư trang  sang Mỹ du học. Đ&acirc;y l&agrave; cơ hội lớn gi&uacute;p họ được giao lưu văn h&oacute;a, học  hỏi kiến thức v&agrave; kinh nghiệm để trở về x&acirc;y dựng qu&ecirc; hương, đất nước.</p>\n<p>Sau đ&acirc;y, ch&uacute;ng t&ocirc;i giới thiệu 4 gương mặt trẻ của học sinh H&agrave; Nội đ&atilde;  xuất sắc nhận được học bổng của c&aacute;c trường đại học danh tiếng ở Mỹ.</p>\n<p><strong>Ho&agrave;ng Quy&ecirc;n: Nữ sinh trường Ams được nhận v&agrave;o trường Harvard</strong></p>\n<p>Trở về Việt Nam sau một năm học tập tại trường Latin của Chicago c&ugrave;ng  th&agrave;nh t&iacute;ch học tập xuất sắc v&agrave; những hoạt động ngoại kh&oacute;a th&uacute; vị, Ho&agrave;ng  Quy&ecirc;n đ&atilde; thuyết phục được ban tuyển sinh của 6 trường Đại học h&agrave;ng đầu  nước Mỹ.</p>\n<p>Ho&agrave;ng Quy&ecirc;n chia sẻ: &ldquo;<em>Em nộp hồ sơ v&agrave;o 6 trường đại học ở Mỹ th&igrave;  đều được 6 trường nhận. Tuy nhi&ecirc;n, em đ&atilde; rất ph&acirc;n v&acirc;n khi lựa chọn giữa  trường Đại học Harvard v&agrave; Stanford&rdquo;.</em> Sau khi tham khảo &yacute; kiến của c&aacute;c anh chị đi trước th&igrave; Ho&agrave;ng Quy&ecirc;n quyết định lựa chọn Stanford bởi, "<span  italic;">ở đấy</span><em> thời tiết ấm &aacute;p, &ocirc;n h&ograve;a, dễ chịu hơn. Hơn nữa, sinh vi&ecirc;n Stanford cũng năng động, nhiệt t&igrave;nh hơn sinh vi&ecirc;n </em><em>Harvard</em><em> n&ecirc;n khi được học tập ở m&ocirc;i trường năng động, sinh vi&ecirc;n nhiệt t&igrave;nh như vậy th&igrave; em sẽ học hỏi được nhiều điều bổ &iacute;ch hơn".</em></p>\n<p><em> </em>C&ograve;n Đại học Harvard, d&ugrave; n&oacute; đ&atilde; từng l&agrave; ước mơ của Quy&ecirc;n nhưng c&ocirc; g&aacute;i n&agrave;y vẫn phải từ chối n&oacute; bởi, "<em>Ở  Cambridge th&igrave; thời tiết lạnh v&agrave; rất khắc nghiệt, n&oacute; sẽ rất ảnh hưởng  rất lớn tới sức khỏe của em. Hơn nữa, những bạn v&agrave;o trường Harvard th&igrave;  họ lu&ocirc;n lu&ocirc;n l&agrave; số một, v&igrave; thế n&ecirc;n sẽ rất kh&oacute; để học hỏi mọi người, cũng  như kh&oacute; khăn để h&ograve;a đồng trong một m&ocirc;i trường to&agrave;n người cứng nhắc như  vậy. Ch&iacute;nh v&igrave; lẽ đ&oacute; n&ecirc;n em đ&atilde; quy&ecirc;t định chọn Stanford để học tập v&agrave;  trải nghiệm những điều mới mẻ c&ugrave;ng những bạn trẻ năng động nơi đ&acirc;y".</em></p>\n<p  center;"><img class="news-image" src="http://img-hn.24hstatic.com:8008/upload/news/2012-07-16/1342436084-du-hoc-sinh-9.jpg" alt="Nữ sinh trường Ams được nhận vào ĐH Harvard, Bạn trẻ - Cuộc sống, nu sinh truong ams, dai hoc  Harvard, du hoc my, nhac dong que my, ban tre, gioi tre, bao, 8x - 9x. du hoc sinh viet nam, tin tuc 24h" width="500" height="591" /></p>\n<p>Ho&agrave;ng Quy&ecirc;n chia sẻ th&ecirc;m: <em>&ldquo;C&oacute; nhiều bạn nộp hồ sơ v&agrave;o c&aacute;c trường  đại học danh tiếng ở Mỹ với điểm số cao ngất ngưởng. Tuy nhi&ecirc;n, c&aacute;c bạn  đ&oacute; vẫn kh&ocirc;ng được nhận v&igrave; họ chỉ biết học v&agrave; học, kh&ocirc;ng am hiểu văn h&oacute;a  của c&aacute;c nước, kh&ocirc;ng tham gia nhiều hoạt động hay kh&ocirc;ng h&ograve;a đồng trong  tập thể. Đấy cũng ch&iacute;nh l&agrave; những điểm yếu khiến c&aacute;c bạn kh&ocirc;ng thể ghi  danh v&agrave;o c&aacute;c trường đại học m&igrave;nh mong muốn&rdquo;.</em></p>\n<p>Trong buổi họp b&aacute;o, Ho&agrave;ng Quy&ecirc;n cũng đ&atilde; đưa ra những lời khuy&ecirc;n hữu  &iacute;ch cho c&aacute;c bạn trẻ. Thứ nhất l&agrave; n&ecirc;n chuẩn bị hồ sơ c&agrave;ng sớm c&agrave;ng tốt;  Thứ hai l&agrave; phải kiểm tra xem những b&agrave;i thi chuẩn h&oacute;a n&agrave;o phải thi để &ocirc;n  luyện cho tốt; Thứ ba l&agrave; cần trung thực, s&aacute;ng tạo trong c&aacute;ch viết hồ sơ.  V&agrave; điều quan trọng kh&ocirc;ng k&eacute;m l&agrave; phải năng nổ tham gia c&aacute;c hoạt động  ngoại kh&oacute;a, h&ograve;a đồng với mọi người. Đ&oacute; l&agrave; những yếu tố quan trọng nhất  gi&uacute;p Ho&agrave;ng Quy&ecirc;n được nhận v&agrave;o 6 trường Đại học danh tiếng tại Mỹ.</p>\n<p><strong>Phụng Ho&agrave;ng: Du học Mỹ v&igrave; h&acirc;m mộ những ban nhạc đồng qu&ecirc;<br /> </strong></p>\n<p>L&yacute; Phụng Ho&agrave;ng, học sinh trường PTTH chuy&ecirc;n H&agrave; Nội &ndash; Amsterdam chuẩn  bị nhập học tại trường Đại học danh tiếng Vanderbilt (bang Tennessee &ndash;  Mỹ).</p>\n<p>Kể từ khi c&ograve;n ngồi tr&ecirc;n ghế nh&agrave; trường, ch&agrave;ng trai say m&ecirc; khoa học  n&agrave;y đ&atilde; c&oacute; ước mơ được đi du học. Ng&agrave;y ấy, Ho&agrave;ng đ&atilde; tin rằng, nước &Uacute;c sẽ  l&agrave; điểm đến của m&igrave;nh sau những năm th&aacute;ng học tập tại trường phổ th&ocirc;ng.  Tuy nhi&ecirc;n, sau khi nhận được những chia sẻ v&agrave; gi&uacute;p đỡ của c&aacute;c anh chị đi  trước, Ho&agrave;ng đ&atilde; quyết t&acirc;m nộp hồ sơ v&agrave;o c&aacute;c trường Đại học ở Mỹ.</p>\n<p  center;"><img class="news-image" src="http://img-hn.24hstatic.com:8008/upload/news/2012-07-16/1342436106-du-hoc-sinh-4.jpg" alt="Nữ sinh trường Ams được nhận vào ĐH Harvard, Bạn trẻ - Cuộc sống, nu sinh truong ams, dai hoc  Harvard, du hoc my, nhac dong que my, ban tre, gioi tre, bao, 8x - 9x. du hoc sinh viet nam, tin tuc 24h" width="500" height="382" /></p>\n<p>Ho&agrave;ng đ&atilde; từng ba năm liền tham gia trại h&egrave; khoa học ở c&aacute;c nước H&agrave;n  Quốc, Nhật, Đ&agrave;i Loan v&agrave; Ho&agrave;ng đều đạt được những giải thưởng cao. Ch&agrave;ng  trai chuy&ecirc;n To&aacute;n n&agrave;y cũng đ&atilde; từng tham gia đề t&agrave;i nghi&ecirc;n cứu khoa học  trong v&ograve;ng 6 th&aacute;ng với một vị gi&aacute;o sư người Mỹ, người thầy đ&atilde; gi&uacute;p đỡ  Ho&agrave;ng rất nhiều trong qu&aacute; tr&igrave;nh nộp hồ sơ v&agrave;o c&aacute;c trường đại học sau  n&agrave;y.</p>\n<p>Nộp hồ sơ v&agrave;o 16 trường đại học ở Mỹ v&agrave; được nhận v&agrave;o 8 trường nhưng  Ho&agrave;ng quyết định chọn đại học Vanderbilt l&agrave; điểm dừng ch&acirc;n của m&igrave;nh.  Ho&agrave;ng chia sẻ: <em>&ldquo;Em chọn Vanderbilt v&igrave; m&ocirc;i trường học tập ở đ&acirc;y gi&uacute;p  sinh vi&ecirc;n năng động v&agrave; s&aacute;ng tạo hơn. Kh&ocirc;ng những thế, em cũng nhận được  rất nhiều trợ cấp t&agrave;i ch&iacute;nh của trường v&agrave; trong suốt 4 năm theo học, em  sẽ kh&ocirc;ng phải mất học ph&iacute; m&agrave; sẽ c&ograve;n nhận được rất nhiều học bổng. V&agrave; một  điều cũng rất quan trọng nữa l&agrave; em rất h&acirc;m mộ những ban nhạc đồng qu&ecirc; ở  Mỹ&hellip;. v&igrave; thế n&ecirc;n khi học tập ở Vanderbilt, em sẽ c&oacute; cơ hội để t&igrave;m hiểu  th&ecirc;m về loại nhạc đồng qu&ecirc;, cũng như mong muốn sẽ gặp được những thần  tượng của m&igrave;nh ở đất nước Mỹ văn minh n&agrave;y&rdquo;.</em></p>\n<p>Ho&agrave;ng cũng cho biết th&ecirc;m về &yacute; định của m&igrave;nh khi đi du học: &ldquo;<em>Học  tập ở một đất nước gi&agrave;u c&oacute;, văn minh, với nền văn h&oacute;a mở sẽ gi&uacute;p em được  ho&agrave;n thiện bản th&acirc;n m&igrave;nh hơn. Hơn nữa, ở Mỹ cũng c&oacute; rất nhiều c&ocirc;ng ty  lớn, ch&iacute;nh s&aacute;ch thu h&uacute;t nh&acirc;n t&agrave;i lớn n&ecirc;n đ&acirc;y cũng l&agrave; cơ hội để em được  cọ x&aacute;t v&agrave; thử sức m&igrave;nh. Em tin rằng, với những kinh nghiệm học tập v&agrave;  l&agrave;m việc ở đất nước bạn sẽ gi&uacute;p em th&agrave;nh c&ocirc;ng hơn khi quay trở về Việt  nam lập nghiệp&rdquo;.</em></p>\n<p><strong>Tr&acirc;m Anh:&nbsp;T&igrave;m ng&agrave;nh học hợp với sở th&iacute;ch c&aacute; nh&acirc;n</strong><br /> <br /> Nguyễn Tr&acirc;m Anh từng l&agrave; học sinh lớp chuy&ecirc;n Anh, trường PTTH Chuy&ecirc;n  Ngoại ngữ, Đại học H&agrave; Nội. Kết thức năm học lớp 11, Tr&acirc;m Anh nhận được  học bổng của trường thế giới li&ecirc;n kết UWC v&agrave; theo học hai năm phổ th&ocirc;ng  tại Canada.</p>\n<p>&ldquo;<em>Em đ&atilde; được trải nghiệm rất nhiều nền văn h&oacute;a kh&aacute;c nhau của bạn  b&egrave; đến từ hơn 100 quốc gia tr&ecirc;n thế giới. Em c&oacute; cơ hội học hỏi được  những n&eacute;t văn h&oacute;a rất ri&ecirc;ng từ Đạo Hồi, văn h&oacute;a Phương T&acirc;y, Phương Đ&ocirc;ng.  Ngo&agrave;i ra, em cũng tự h&agrave;o khi mang nền văn h&oacute;a đa dạng của Việt Nam đến  với bạn b&egrave; năm ch&acirc;u&rdquo;. </em>&ndash; Tr&acirc;m Anh chia sẻ về hai năm học tập ở nước bạn.</p>\n<p  center;"><img class="news-image" src="http://img-hn.24hstatic.com:8008/upload/news/2012-07-16/1342436137-du-hoc-sinh-2.jpg" alt="Nữ sinh trường Ams được nhận vào ĐH Harvard, Bạn trẻ - Cuộc sống, nu sinh truong ams, dai hoc  Harvard, du hoc my, nhac dong que my, ban tre, gioi tre, bao, 8x - 9x. du hoc sinh viet nam, tin tuc 24h" width="500" height="505" /></p>\n<p  justify;">B&acirc;y giờ, Tr&acirc;m Anh đ&atilde; chuẩn bị xong mọi  thứ để nhập trường Đại học Princeton (Mỹ). Với niềm đam m&ecirc; kinh tế ch&iacute;nh  trị v&agrave; quan hệ quốc tế, Tr&acirc;m Anh mong muốn sẽ t&igrave;m được ng&agrave;nh học ph&ugrave;  hợp cho m&igrave;nh tại Princeton, nơi c&ocirc; g&aacute;i n&agrave;y tin tưởng sẽ l&agrave; ng&ocirc;i nh&agrave; thứ  hai của m&igrave;nh trong v&ograve;ng bốn năm tới.</p>\n<p  justify;">Tr&acirc;m Anh chia sẻ về sự lựa chọn của m&igrave;nh: <em>&ldquo;Princeton  l&agrave; sự lựa chọn số một của em bởi đ&acirc;y l&agrave; một m&ocirc;i trường học tập năng  động, sinh vi&ecirc;n được thực h&agrave;nh nhiều v&agrave; kh&ocirc;ng &eacute;p buộc học c&aacute;c m&ocirc;n m&igrave;nh  kh&ocirc;ng th&iacute;ch. Hơn nữa, đ&acirc;y l&agrave; m&ocirc;i trường rất dễ h&ograve;a nhập n&ecirc;n em tin, m&igrave;nh  sẽ học hỏi được rất nhiều điều từ c&aacute;c bạn đến từ c&aacute;c nước tr&ecirc;n thế  giới. Ngo&agrave;i ra, trường cũng c&oacute; những t&agrave;i trợ t&agrave;i ch&iacute;nh rất h&agrave;o ph&oacute;ng  khiến em kh&ocirc;ng thể thờ ơ trước một m&ocirc;i trường học tập tốt như thế n&agrave;y&rdquo;.</em></p>\n<p><strong>Hồng Li&ecirc;n: Muốn trải nghiệm cuộc sống th&uacute; vị</strong></p>\n<p>Trần L&ecirc; Hồng Li&ecirc;n, học sinh trường PTTH Chu Văn An, H&agrave; Nội chuẩn bị  nhập học Đại học danh Yale, trường đại học danh tiếng thuộc bang  Connecticut, Mỹ.</p>\n<p>Hồng Li&ecirc;n từng sống v&agrave; học tập một thời gian kh&aacute; d&agrave;i ở Thủy Điển v&agrave;  c&ocirc; g&aacute;i nhỏ nhắn n&agrave;y cũng đ&atilde; đạt được th&agrave;nh t&iacute;ch học tập xuất sắc trong  thời gian ở đ&acirc;y.</p>\n<p>Ngo&agrave;i học giỏi To&aacute;n, Li&ecirc;n cũng l&agrave; một tay chơi đ&agrave;n piano rất cừ kh&ocirc;i.  Hồng Li&ecirc;n từng theo học piano một thời gian kh&aacute; d&agrave;i tại Nhạc viện H&agrave;  Nội v&agrave; Nhạc viện Ho&agrave;ng gia Thụy Điển.</p>\n<p  center;"><img class="news-image" src="http://img-hn.24hstatic.com:8008/upload/news/2012-07-16/1342436153-du-hoc-sinh-1.jpg" alt="Nữ sinh trường Ams được nhận vào ĐH Harvard, Bạn trẻ - Cuộc sống, nu sinh truong ams, dai hoc  Harvard, du hoc my, nhac dong que my, ban tre, gioi tre, bao, 8x - 9x. du hoc sinh viet nam, tin tuc 24h" width="500" height="335" /></p>\n<p  justify;">Hồng Li&ecirc;n nộp v&agrave;o 16 trường Đại học ở Mỹ th&igrave; được nhận v&agrave;o 9 trường nhưng ngay từ đầu, Li&ecirc;n đ&atilde; quyết định chon đại học Yale v&igrave;: <em>&ldquo;Đ&acirc;y  kh&ocirc;ng những l&agrave; trường c&oacute; nhiều học bổng nhất m&agrave; b&ecirc;n cạnh đ&oacute;, sinh vi&ecirc;n  của trường c&ograve;n được trải nghiệm những nền văn h&oacute;a đặc sắc, những điều  th&uacute; vị ở đất nước xinh đẹp n&agrave;y. Mỗi sinh vi&ecirc;n ở đ&acirc;y sẽ được gửi trong  một gia đ&igrave;nh v&agrave; ch&uacute;ng em sẽ được họ đối xử như một th&agrave;nh vi&ecirc;n ch&iacute;nh thức  trong gia đ&igrave;nh đ&oacute;. C&ugrave;ng ăn uống, c&ugrave;ng tr&ograve; chuyện với mọi người, c&ugrave;ng đi  du lịch khắp nơi sẽ gi&uacute;p em học tiếng tốt hơn v&agrave; h&ograve;a nhập dễ d&agrave;ng hơn&rdquo;.</em></p>\n<p  justify;"><strong><em>Y&ecirc;u th&iacute;ch + đam m&ecirc; = th&agrave;nh c&ocirc;ng</em></strong></p>\n<p  justify;">Chia sẻ về kinh nghiệm nộp hồ sơ v&agrave;o c&aacute;c  trường đại học danh tiếng đều được nhận v&agrave; gi&agrave;nh được những học bổng  rất lớn, Hồng Li&ecirc;n cho biết:&nbsp;<em>"Nếu bạn thật sự y&ecirc;u th&iacute;ch một trường  n&agrave;o đ&oacute; th&igrave; đừng ngần ngại nộp hồ sơ. Khi đ&atilde; y&ecirc;u n&oacute; th&igrave; chắc hẳn bạn sẽ  thấy n&oacute; ph&ugrave; hợp với m&igrave;nh. Đấy l&agrave; điều quan trọng nhất đưa m&igrave;nh tới th&agrave;nh  c&ocirc;ng".</em></p>\n<p  justify;">C&ograve;n Tr&acirc;m Anh, t&acirc;n sinh vi&ecirc;n Đại học Princeton chia sẻ:&nbsp;<em>"Trong  bộ hồ sơ, c&aacute;c bạn n&ecirc;n thể hiện được sự nhiệt huyết, đam m&ecirc; của m&igrave;nh ở  m&ocirc;i trường m&igrave;nh muốn học. Hơn nữa, kh&ocirc;ng n&ecirc;n sợ th&aacute;i qu&aacute; về cuộc thi  tuyển n&agrave;y, cứ nghĩ đ&oacute; như một b&agrave;i kiểm tra b&igrave;nh thường. V&agrave; điều quan  trọng nhất l&agrave; phải hiểu được bản th&acirc;n m&igrave;nh, muốn g&igrave;, cần g&igrave; ở ng&ocirc;i  trường m&igrave;nh ứng tuyển đ&oacute;</em>".</p>\n<p  justify;">Ho&agrave;ng Quy&ecirc;n, Phụng Ho&agrave;ng, Tr&acirc;m Anh v&agrave;  Hồng Li&ecirc;n mỗi người đều c&oacute; một lựa chọn ri&ecirc;ng nhưng ở trong bốn ch&agrave;ng  trai, c&ocirc; g&aacute;i trẻ n&agrave;y vẫn lu&ocirc;n h&aacute;o hức mong chờ ng&agrave;y m&igrave;nh được đến với  c&aacute;c trường đại học danh tiếng của nước Mỹ, được kh&aacute;m ph&aacute; c&aacute;c nền văn h&oacute;a  đặc trưng của c&aacute;c d&acirc;n tộc tr&ecirc;n thế giới, được trau dồi kiến thức, học  hỏi kinh nghiệm ở đất nước bạn&hellip; Nhưng mục đ&iacute;ch cuối c&ugrave;ng của họ vẫn l&agrave;  được về nước, được cống hiến hết sức m&igrave;nh cho tổ quốc, mong muốn sẽ g&oacute;p  ch&uacute;t sức nhỏ x&acirc;y dựng đất nước ng&agrave;y c&agrave;ng gi&agrave;u mạnh hơn.</p>', '../assets/images/120616162236-992-217.jpg', '0000-00-00'),
(4, 'Học sinh trung tâm UNIX: Nguyễn Nga Nhi: Thủ khoa 11 tuổi và bài văn điểm 10', 'thu-khoa-11-tuoi-va-bai-van-10-diem', '<p class="pBody"><span class="pHead">Ng&agrave;y 21-6, thầy Nguyễn Xu&acirc;n Khang -  Hiệu trưởng Trường THCS Marie Curie H&agrave; Nội cho biết, kỳ thi tuyển sinh  năm 2012 nh&agrave; trường bất ngờ với một học sinh khi em đạt điểm tuyệt đối  hai m&ocirc;n Văn (10 điểm) v&agrave; To&aacute;n (11 điểm). </span></p>\n<p class="pBody"><span class="pBody">Theo thầy Khang, lịch sử mấy năm tuyển sinh gần đ&acirc;y chưa c&oacute; em n&agrave;o xuất sắc như vậy.</span></p>\n<p class="pBody">&nbsp;</p>\n<table width="488px" align="center">\n<tbody>\n<tr>\n<td>\n<p class="pBody">TRƯỜNG MARIE CURIE &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;                              H&agrave; Nội, ng&agrave;y 17 th&aacute;ng 6 năm 2012</p>\n<p class="pBody">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;                            ĐỀ THI TUYỂN SINH LỚP 6 NĂM HỌC 2012-2013<br /> <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                                                  M&Ocirc;N TIẾNG VIỆT<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                              Thời gian l&agrave;m b&agrave;i 90 ph&uacute;t</p>\n<p class="pBody">C&acirc;u 1 (2 điểm):<br /> &nbsp;&nbsp;&nbsp;         a) T&igrave;m 6 từ c&oacute; tiếng &ldquo;mới&rdquo; sao cho được nhiều kiểu cấu tạo từ nhất.<br /> &nbsp;&nbsp;&nbsp;         b) Chỉ ra sự kh&aacute;c nhau về nghĩa của hai từ &ldquo;mới  tinh&rdquo; v&agrave; &ldquo;mới mẻ&rdquo; v&agrave; cho v&iacute; dụ để l&agrave;m r&otilde; sự kh&aacute;c nhau n&agrave;y.</p>\n<p class="pBody">C&acirc;u 2 (1 điểm): <br /> &nbsp;&nbsp;&nbsp;         V&igrave; sao hai c&acirc;u sau thuộc hai kiểu c&acirc;u kh&aacute;c nhau về cấu tạo?<br /> &nbsp;&nbsp;&nbsp;          - S&oacute;ng vỗ nhẹ v&agrave;o bờ c&aacute;t, tung bọt trắng x&oacute;a.<br /> &nbsp;&nbsp;&nbsp;          - S&oacute;ng vỗ nhẹ v&agrave;o bờ c&aacute;t, bọt tung trắng x&oacute;a.</p>\n<p class="pBody">C&acirc;u 3 (2 điểm): <br /> &nbsp;&nbsp;&nbsp;         Trong những trường hợp n&agrave;o dưới đ&acirc;y, c&acirc;u &ldquo;Lan  mời Huệ v&agrave;o nh&agrave; chơi.&rdquo; l&agrave; c&acirc;u kể? Trong những trường hợp n&agrave;o, n&oacute; l&agrave; c&acirc;u  khiến? V&igrave; sao?<br /> &nbsp;&nbsp;&nbsp;          a) Lan n&oacute;i với Huệ.<br /> &nbsp;&nbsp;&nbsp;          b) Lan n&oacute;i với Hồng.<br /> &nbsp;&nbsp;&nbsp;          c) Hồng n&oacute;i với Huệ.<br /> &nbsp;&nbsp;&nbsp;          d) Hồng n&oacute;i với Lan.</p>\n<p class="pBody">C&acirc;u 4 (2 điểm): <br /> &nbsp;&nbsp;&nbsp;          &ldquo;Đ&agrave;n chim chớp c&aacute;nh v&agrave;ng khoe sắc với nắng rực  rỡ, v&agrave; tiếng chim lại như những chuỗi v&agrave;ng lọc nắng bay đến với H&agrave;. Chốc  sau đ&agrave;n chim chao c&aacute;nh bay đi, nhưng tiếng h&oacute;t như đọng m&atilde;i giữa bầu  trời ngo&agrave;i cửa sổ.&rdquo;<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em> (Bầu trời ngo&agrave;i cửa sổ - Nguyễn Quỳnh)</em></p>\n<p class="pBody">&nbsp;&nbsp;&nbsp;          Nếu thay từ &ldquo;đọng&rdquo; trong c&acirc;u  thứ hai bằng một trong c&aacute;c từ &ldquo;c&ograve;n&rdquo;, &ldquo;vang&rdquo;, &ldquo;ng&acirc;n&rdquo; th&igrave; c&acirc;u văn sẽ kh&ocirc;ng  hay bằng. V&igrave; sao?</p>\n<p class="pBody">C&acirc;u 5 (3 điểm): <br /> &nbsp;&nbsp;&nbsp;         Em đ&atilde; từng được ngắm th&agrave;nh phố v&agrave;o một thời điểm  n&agrave;o đ&oacute; trong ng&agrave;y: buổi s&aacute;ng sớm khi những giọt sương long lanh c&ograve;n  biếng lười nằm nghi&ecirc;ng tr&ecirc;n phiến l&aacute; , buổi trưa khi tiếng ve r&acirc;m ran  gọi h&egrave; sau t&aacute;n c&acirc;y phượng vĩ, buổi tối khi th&agrave;nh phố ch&igrave;m trong mu&ocirc;n  ng&agrave;n &aacute;nh điện lung linh. H&atilde;y chọn một thời điểm trong ng&agrave;y v&agrave; mi&ecirc;u tả  lại quang cảnh th&agrave;nh phố khi ấy.</p>\n<p class="pBody">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p class="pBody">&nbsp;</p>\n<p class="pBody"><span class="pBody">Em l&agrave; Nguyễn Nga Nhi (SBD 711) - HS Trường Tiểu học Kim Li&ecirc;n. Dưới đ&acirc;y l&agrave; b&agrave;i thi đạt điểm tuyệt đối của em. </span></p>\n<p class="pBody"><span class="pInterTitle">B&agrave;i l&agrave;m</span></p>\n<p class="pBody"><span class="pBody"><strong>C&acirc;u 1 (2 điểm)</strong><br /> </span></p>\n<p class="pBody"><span class="pBody">a) 6 từ c&oacute; tiếng &ldquo;mới&rdquo; với nhiều kiểu cấu tạo từ nhất l&agrave;:<br /> - mới (từ đơn)<br /> - mới lạ (từ gh&eacute;p tổng hợp)<br /> - mới toanh (từ gh&eacute;p ph&acirc;n loại)<br /> - mơi mới (từ l&aacute;y &acirc;m v&agrave; vần)<br /> - mới mẻ (từ l&aacute;y &acirc;m đầu)<br /> - mới tinh (từ gh&eacute;p ph&acirc;n loại)<br /> b) &ldquo;Mới tinh&rdquo; c&oacute; nghĩa l&agrave; &ldquo;c&ograve;n nguy&ecirc;n vẹn, đẹp đẽ, sạch sẽ như l&uacute;c đầu&rdquo;,  c&ograve;n &ldquo;mới mẻ&rdquo; c&oacute; nghĩa l&agrave; kh&aacute;c lạ, l&iacute; th&uacute; hơn sự việc b&igrave;nh thường&rdquo;<br /> V&iacute; dụ:<br /> - C&aacute;i &aacute;o mới tinh (kh&ocirc;ng thể n&oacute;i &ldquo;c&aacute;i &aacute;o mới mẻ&rdquo;)<br /> - Một suy nghĩ mới mẻ (kh&ocirc;ng thể n&oacute;i &ldquo;một suy nghĩ mới tinh&rdquo;)</span></p>\n<p class="pBody"><span class="pBody"><strong>C&acirc;u 2 (1 điểm)</strong><br /> </span></p>\n<p class="pBody"><span class="pBody">- S&oacute;ng vỗ nhẹ v&agrave;o bờ c&aacute;t, tung bọt trắng x&oacute;a.<br /> - S&oacute;ng vỗ nhẹ v&agrave;o bờ c&aacute;t, bọt tung trắng x&oacute;a.<br /> Ở c&acirc;u thứ nhất, v&igrave; sau dấu phẩy đặt chữ &ldquo;tung&rdquo; đầu ti&ecirc;n n&ecirc;n &ldquo;tung&rdquo; trở  th&agrave;nh vị ngữ ch&iacute;nh cho chủ ngữ &ldquo;s&oacute;ng&rdquo;, &ldquo;bọt trắng x&oacute;a&rdquo; trở th&agrave;nh vật bị  t&aacute;c động, l&agrave;m bổ ngữ cho vị ngữ &ldquo;tung&rdquo; n&ecirc;n c&acirc;u đ&oacute; l&agrave; c&acirc;u đơn nhiều vị  ngữ. Ở c&acirc;u thứ hai, đặt sau dấu phẩy chữ &ldquo;bọt&rdquo; trước chữ &ldquo;tung&rdquo; khiến  &ldquo;bọt&rdquo; trở th&agrave;nh chủ ngữ, &ldquo;tung&rdquo; l&agrave;m vị ngữ cho &ldquo;bọt&rdquo;, kết hợp với cụm  chủ vị thứ nhất (s&oacute;ng vỗ nhẹ v&agrave;o bờ c&aacute;t) tạo th&agrave;nh c&acirc;u gh&eacute;p. Ch&iacute;nh v&igrave; vị  tr&iacute; của từ &ldquo;bọt&rdquo; trong c&acirc;u kh&aacute;c n&ecirc;n chức vụ của n&oacute; cũng kh&aacute;c nhau v&agrave;  tạo th&agrave;nh hai c&acirc;u thuộc hai kiểu c&acirc;u kh&aacute;c nhau về cấu tạo.</span></p>\n<p class="pBody"><span class="pBody"><strong>C&acirc;u 3 (2 điểm)</strong><br /> </span></p>\n<p class="pBody"><span class="pBody">&ldquo;Lan mời Huệ v&agrave;o nh&agrave; chơi&rdquo;<br /> a) Khi đ&oacute; l&agrave; lời Lan n&oacute;i với Huệ, c&acirc;u tr&ecirc;n l&agrave; c&acirc;u khiến v&igrave; mục đ&iacute;ch của  người n&oacute;i (Lan) l&agrave; y&ecirc;u cầu, đề nghị bạn l&agrave;m một việc (v&agrave;o nh&agrave; chơi).<br /> b) Khi đ&oacute; lời Lan n&oacute;i với Hồng, c&acirc;u tr&ecirc;n l&agrave; c&acirc;u kể v&igrave; mục đ&iacute;ch của người  n&oacute;i l&agrave; thuật lại một sự việc cho người nghe (mời Huệ v&agrave;o nh&agrave; chơi).<br /> c) Khi đ&oacute; l&agrave; lời Hồng n&oacute;i với Huệ, c&acirc;u tr&ecirc;n l&agrave; c&acirc;u kể v&igrave; mục đ&iacute;ch của  người n&oacute;i l&agrave; thuật lại một sự việc cho người nghe (lời mời của Lan).<br /> d) Khi đ&oacute; l&agrave; lời Hồng n&oacute;i với Lan, c&acirc;u tr&ecirc;n l&agrave; c&acirc;u khiến v&igrave; mục đ&iacute;ch của  người n&oacute;i l&agrave; y&ecirc;u cầu, đề nghị người nghe l&agrave;m một việc (y&ecirc;u cầu Lan mời  Huệ v&agrave;o nh&agrave; chơi).</span></p>\n<p class="pBody">&nbsp;</p>\n<table border="0" cellspacing="3" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td align="center"><img src="http://www.tienphong.vn/ImageHandler.ashx?ThumbnailID=198211&Width=450" alt="" /></td>\n</tr>\n</tbody>\n</table>\n<table border="0" cellspacing="3" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td align="center"><img src="http://www.tienphong.vn/ImageHandler.ashx?ThumbnailID=198212&Width=450" alt="" /></td>\n</tr>\n</tbody>\n</table>\n<table border="0" cellspacing="3" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td align="center"><img src="http://www.tienphong.vn/ImageHandler.ashx?ThumbnailID=198213&Width=450" alt="Toàn văn bài làm đạt điểm tuyệt đối của Nguyễn Nga Nhi " /></td>\n</tr>\n<tr>\n<td class="pBody">To&agrave;n văn b&agrave;i l&agrave;m đạt điểm tuyệt đối của Nguyễn Nga Nhi .</td>\n</tr>\n</tbody>\n</table>\n<p><span class="pBody"><strong></strong></span></p>\n<p class="pBody"><span class="pBody"><strong>C&acirc;u 4 (2 điểm)</strong><br /> </span></p>\n<p class="pBody"><span class="pBody">&ldquo;Đ&agrave;n chim chớp c&aacute;nh v&agrave;ng khoe sắc  với nắng rực rỡ v&agrave; tiếng chim lại như những chuỗi v&agrave;ng lọc nắng bay đến  với H&agrave;. Chốc sau đ&agrave;n chim chạo c&aacute;nh bay đi, nhưng tiếng h&oacute;t như đọng m&atilde;i  giữa bầu trời ngo&agrave;i cửa sổ.&rdquo;<br /> <em>(Bầu trời ngo&agrave;i cửa sổ - Nguyễn Quỳnh)</em></span></p>\n<p class="pBody"><span class="pBody">Nếu thay từ &ldquo;đọng&rdquo; ở c&acirc;u thứ hai  bằng từ &ldquo;c&ograve;n&rdquo;, &ldquo;vang&rdquo; hay &ldquo;ng&acirc;n&rdquo; đều kh&ocirc;ng thể hay bằng v&igrave; tuy đều diễn  tả rằng vẫn c&ograve;n lại tiếng chim nhưng mỗi từ lại c&oacute; một sắc th&aacute;i kh&aacute;c  nhau. Nếu sử dụng từ &ldquo;c&ograve;n&rdquo;, c&acirc;u văn chỉ đ&uacute;ng m&agrave; kh&ocirc;ng c&oacute; hồn, kh&ocirc;ng c&oacute;  cảm x&uacute;c của H&agrave; với tiếng chim. &ldquo;Ng&acirc;n&rdquo; v&agrave; &ldquo;vang&rdquo; tạo cho c&acirc;u văn th&ecirc;m cảm  x&uacute;c lắng ch&igrave;m lại, chỉ đến rồi lại vụt đi. Chỉ ri&ecirc;ng từ &ldquo;đọng&rdquo; l&agrave; thể  hiện rất r&otilde; c&aacute;i &acirc;m thanh đang lưu lại giữa bầu trời, lắng lại giữa  khoảng kh&ocirc;ng v&agrave; h&igrave;nh như lắng cả v&agrave;o l&ograve;ng của H&agrave;. Đặc biệt, từ &ldquo;đọng&rdquo; đ&atilde;  tạo n&ecirc;n một ph&eacute;p ẩn dụ chuyển đổi cảm gi&aacute;c rất mới mẻ: &ldquo;đọng&rdquo; gợi cho  ta nghĩ đến một thứ chất lỏng, vậy m&agrave; giờ lại được lấy để mi&ecirc;u tả &acirc;m  thanh, khiến ta cảm gi&aacute;c &acirc;m thanh đ&oacute; như những giọt nước m&aacute;t l&agrave;nh, thấm  đẫm v&agrave;o bầu trời, thấm đẫm v&agrave;o t&acirc;m tr&iacute;, v&agrave;o cảm x&uacute;c của H&agrave;, của t&aacute;c giả.  Từ &ldquo;đọng&rdquo; đ&atilde; tạo cho c&acirc;u văn c&aacute;i hồn rất mới, rất hay, rất sống động m&agrave;  c&aacute;c từ ngữ kh&aacute;c kh&ocirc;ng sao thể hiện hết được.</span></p>\n<p class="pBody"><strong><span class="pBody">C&acirc;u 5 (3 điểm)</span></strong></p>\n<p class="pBody"><span class="pBody">Nếu hỏi ai rằng: &ldquo;Bạn th&iacute;ch thời  điểm n&agrave;o nhất trong ng&agrave;y?&rdquo; th&igrave; kh&oacute; ai đo&aacute;n được c&acirc;u trả lời sẽ ra sao.  Buổi s&aacute;ng, buổi trưa hay buổi tối? Nhưng nếu hỏi t&ocirc;i đ&acirc;y, c&acirc;u trả lời sẽ  l&agrave;: buổi tối.</span></p>\n<p class="pBody"><span class="pBody">Giữa những ng&agrave;y h&egrave; oi ả thế n&agrave;y,  c&ograve;n g&igrave; tuyệt hơn l&agrave; một buổi tối gi&oacute; lộng. Kh&ocirc;ng cần phải chờ l&acirc;u, chỉ  cần nh&igrave;n thấy &aacute;nh mặt trời đỏ ối buổi ho&agrave;ng h&ocirc;n sắp tắt, những cơn gi&oacute;  đ&atilde; lộng h&agrave;nh khắp phố phường, tr&agrave;n v&agrave;o những căn nh&agrave; mở cửa. Mặt trời đ&atilde;  thiếp đi ở nơi đ&acirc;u xa lắm, vậy m&agrave; một mảng trời ph&iacute;a t&acirc;y vẫn c&ograve;n vương  vất những sợi tơ đỏ của &aacute;nh chiều t&agrave;. Những &aacute;nh đ&egrave;n điện s&aacute;ng rực dần  thay thế cho mặt trời. Những đại lộ rộng th&ecirc;nh thang như r&aacute;t v&agrave;ng &aacute;nh  s&aacute;ng đ&egrave;n điện, đ&ocirc;ng nghịt người xe. Giờ tan tầm ai cũng vội v&atilde;, hối hả  trở về nh&agrave;. Tiếng c&ograve;i xe, tiếng n&oacute;i, tiếng cười tạo n&ecirc;n một bản h&ograve;a tấu  của đ&ocirc; thị phồn hoa. B&ecirc;n c&aacute;i ồn &atilde; thường nhật ấy, t&ocirc;i lại y&ecirc;u hơn cả  khung cảnh quanh hồ gần nh&agrave; t&ocirc;i. M&agrave;n đ&ecirc;m u tối đắp chiếc chăn dạ đen cho  mặt hồ phẳng lặng. Những chị liễu vẫn nghi&ecirc;ng m&igrave;nh b&ecirc;n hồ nước trong  xanh, chải chuốt m&aacute;i t&oacute;c d&agrave;i của m&igrave;nh như một c&ocirc; thiếu nữ. H&agrave;ng bằng  lăng t&iacute;m biếc cũng thiếp đi, mặc cho c&oacute; tiếng n&oacute;i, tiếng cười của người  qua lại. Gi&oacute; khẽ len qua những v&ograve;m c&acirc;y, cất cao tiếng h&aacute;t vi vu vi vu  như lời ru nồng n&agrave;n tha thiết của người mẹ đưa đ&agrave;n chim b&eacute; nhỏ v&agrave;o giấc  mơ hồng. Những ch&uacute; chim non thu đầu v&agrave;o l&ocirc;ng v&agrave;o c&aacute;nh, cố che đi &aacute;nh đ&egrave;n  điện đang tr&agrave;n lan khắp mu&ocirc;n nơi. Giọt sương n&agrave;o vừa mới kết tinh lại  tr&ecirc;n chiếc l&aacute; xanh, v&ocirc; t&igrave;nh rớt tr&uacute;ng ch&uacute; chim non l&agrave;m tiếng h&oacute;t l&iacute;u r&iacute;u  giật m&igrave;nh vang l&ecirc;n, rồi lại mệt mỏi thiếp đi sau một ng&agrave;y m&uacute;a ca bay  nhảy. Khung cảnh thanh b&igrave;nh đứng b&ecirc;n vẻ s&ocirc;i động của đ&ocirc; thị mới đẹp đẽ  l&agrave;m sao!</span></p>\n<p class="pBody"><span class="pBody">N&oacute;i đến đ&ecirc;m l&agrave; n&oacute;i đến trăng sao,  vậy m&agrave; buổi tối tr&ecirc;n Thủ đ&ocirc; th&acirc;n y&ecirc;u lại &iacute;t ai nhớ rằng c&oacute; một con  thuyền nhỏ đang tr&ocirc;i giữa d&ograve;ng Ng&acirc;n H&agrave; vắt ngang bầu trời. Trong &aacute;nh  điện lung linh d&aacute;t v&agrave;ng d&aacute;t bạc cho con đường, hiếm ai nhận ra d&ograve;ng  trăng đang h&ograve;a v&agrave;o &aacute;nh s&aacute;ng rực rỡ ấy. Trăng chỉ d&agrave;nh cho c&aacute;c b&agrave;, c&aacute;c  &ocirc;ng, cho đ&aacute;m trẻ thơ đang m&uacute;a h&aacute;t đ&oacute;n chị Hằng m&agrave; kh&ocirc;ng sao quen được  với sự tất bật của người th&agrave;nh thị. Trăng e ấp sao những m&aacute;i nh&agrave; cao, in  b&oacute;ng tr&ecirc;n mặt hồ như để ai d&agrave;nh t&igrave;nh cảm cho trăng đều c&oacute; thể tr&ocirc;ng  thấy. Trăng kh&ocirc;ng l&agrave;m lung linh th&ecirc;m cho cảnh vật ở phố phường như trăng  l&agrave;m cho t&ocirc;i v&agrave; cho đ&aacute;m trẻ trong khu như thấy được sự &ecirc;m ả, hiền dịu  giữa chốn phồn hoa.</span></p>\n<p class="pBody"><span class="pBody">Kh&ocirc;ng qu&aacute; ồn &atilde; m&agrave; cũng chẳng qu&aacute;  tĩnh mịch, vừa s&ocirc;i động lại thật &ecirc;m ả, thanh b&igrave;nh, đ&oacute; ch&iacute;nh l&agrave; buổi tối  tr&ecirc;n thủ đ&ocirc; H&agrave; Nội th&acirc;n y&ecirc;u.</span></p>\n<p class="pBody"><em>(Nguồn: Trường THCS Marie Curie H&agrave; Nội)</em></p>\n<p class="pBody">&nbsp;</p>\n<p class="pBody">Theo thầy Nguyễn Xu&acirc;n Khang, đề thi tuyển  sinh v&agrave;o lớp 6 năm nay kh&oacute; hơn năm 2011 n&ecirc;n điểm chuẩn l&agrave; 13, thấp hơn  năm 2011 l&agrave; 2 điểm (15 điểm). Năm nay c&oacute; 1.700 th&iacute; sinh dự thi, nhưng  trường tuyển mới 250.</p>', '../../assets/images/DSC_0729.JPG', '2012-06-25');
INSERT INTO `unix_tintuc` (`tintuc_id`, `tieude`, `alias`, `noidung`, `anhdaidien`, `ngaythang`) VALUES
(5, 'Ngang nhiên rao 200 triệu đồng/suất đỗ ĐH Thương mại', 'ngang-nhien-rao-200-trieu-dong-suat-do-DH-Thuong-mai', '<p>Những ng&agrave;y qua, nhiều th&iacute; sinh thi rớt đại học đổ x&ocirc; t&igrave;m kiếm c&aacute;c suất tr&uacute;ng tuyển tại c&aacute;c trường đại học với mức gi&aacute; rất đa dạng, từ 20 -50 triệu, thậm ch&iacute; c&ograve;n h&eacute;t tới 200 triệu nếu muốn chạy v&agrave;o ĐH&nbsp;Thương mại.</p>\r\n<p class="pBody">Th&iacute; sinh Trần Văn Lợi, vừa thi rớt đại học, ngụ tại Đăk Lăk, cho biết: &ldquo;Bạn b&egrave; em đang kể cho nhau th&ocirc;ng tin tại TP.HCM c&oacute; nhiều th&iacute; sinh tr&uacute;ng tuyển hai trường đại học đang rao b&aacute;n bớt một suất. Theo đ&oacute;, để &ldquo;săn&rdquo; được một suất kh&ocirc;ng phải dễ, v&igrave; c&oacute; qu&aacute; nhiều người đổ x&ocirc; t&igrave;m kiếm. Hiện, em đang nhờ một số người b&agrave; con ở đ&oacute; hỏi mua nhưng vẫn chưa được&hellip;&rdquo;.</p>\r\n<table border="0" cellspacing="1" cellpadding="1" width="200" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img class="oImage" src="http://media.tinmoi.vn//2012/08/23/17_48_1345716400_82_nguoiduatin-anh3.jpg" border="0" alt="" width="450" height="292" align="Middle" /></td>\r\n</tr>\r\n<tr>\r\n<td class="pCaption">H&agrave;ng ng&agrave;n th&iacute; sinh thi rớt đại học rất muốn một cơ hội v&agrave;o giảng đường. Ảnh minh họa</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="pSubTitle">Đổ x&ocirc; đi mua... suất v&agrave;o đại học</p>\r\n<p class="pBody">Những ng&agrave;y qua, th&ocirc;ng tin c&oacute; người rao b&aacute;n c&aacute;c suất tr&uacute;ng tuyển đại học xuất hiện tại c&aacute;c trường ở TP.HCM như ĐH Khoa học Tự nhi&ecirc;n, ĐH Mở, ĐH Luật&hellip; khi th&iacute; sinh đến đ&acirc;y hỏi thủ tục nộp hồ sơ x&eacute;t tuyển nguyện vọng 2.</p>\r\n<p class="pBody">Ng&agrave;y 16/8, tại ĐH Luật TP.HCM, một số th&iacute; sinh đến hỏi thủ tục x&eacute;t tuyển nguyện vọng cho biết, c&oacute; một số thanh ni&ecirc;n đến gặp trực tiếp mời ch&agrave;o kiểu: &ldquo;Anh đang l&agrave;m đầu mối trung gian b&aacute;n c&aacute;c suất tr&uacute;ng tuyển v&agrave;o c&aacute;c trường đại học lớn tại TP.HCM do c&aacute;c th&iacute; sinh tr&uacute;ng tuyển hai trường đại học b&aacute;n lại. Bạn th&iacute; sinh n&agrave;o c&oacute; nhu cầu cần chuẩn bị số tiền 30 triệu đồng mới c&oacute; cơ hội mua được một suất, mọi thủ tục chuyển t&ecirc;n trong phiếu tr&uacute;ng tuyển, hồ sơ nhập học do b&ecirc;n b&aacute;n thực hiện&rdquo;.</p>\r\n<p class="pBody">Anh Phạm Thanh Ch&acirc;u, anh trai th&iacute; sinh Phạm Thanh Bảo (ngụ quận B&igrave;nh T&acirc;n), người được cho l&agrave; đ&atilde; mua được một suất cho em trai m&igrave;nh đ&atilde; c&oacute; những chia sẻ xung quanh vấn đề n&agrave;y.</p>\r\n<p class="pBody">Anh Phạm Thanh Ch&acirc;u cho biết, anh đang trong thời gian li&ecirc;n hệ chứ chưa thực sự mua. Nguy&ecirc;n nh&acirc;n do người b&aacute;n đưa nhiều th&ocirc;ng tin qu&aacute; mơ hồ, anh Ch&acirc;u y&ecirc;u cầu c&aacute;c giấy tờ li&ecirc;n quan đến suất tr&uacute;ng tuyển đại học m&igrave;nh muốn mua nhưng người b&aacute;n kh&ocirc;ng đ&aacute;p ứng được n&ecirc;n anh phải chờ ho&agrave;n th&agrave;nh c&aacute;c giấy tờ rồi mới quyết định.</p>\r\n<p class="pBody">Theo anh Ch&acirc;u, đường d&acirc;y anh li&ecirc;n hệ mua suất tr&uacute;ng tuyển th&ocirc;ng qua một người bạn giới thiệu, đường d&acirc;y n&agrave;y đ&atilde; b&aacute;n hơn 30 suất tr&uacute;ng tuyển v&agrave; hơn 100 th&iacute; sinh thi rớt đại học đang chờ c&aacute;c suất tr&uacute;ng tuyển mới để mua.</p>\r\n<p class="pBody">Thực tế những ng&agrave;y qua, hoạt động rao b&aacute;n c&aacute;c suất tr&uacute;ng tuyển đại học tuy diễn ra lặng lẽ nhưng hết sức nhộn nhịp. Xung quanh c&aacute;c trường đại học lu&ocirc;n tập trung một số &ldquo;c&ograve; m&ocirc;i giới&rdquo; t&uacute;c trực, thấy th&iacute; sinh xuất hiện l&agrave; mời ch&agrave;o ngay.</p>\r\n<p class="pBody">Một th&iacute; sinh giấu t&ecirc;n đến trường ĐH KHXH&amp;NV; TP.HCM, tiết lộ: &ldquo;S&aacute;ng nay, em vừa được một người t&ecirc;n Ph&uacute;c mời mua c&aacute;c suất tr&uacute;ng tuyển đại học. Nghe người n&agrave;y giới thiệu, em thấy c&aacute;c suất tr&uacute;ng tuyển người n&agrave;y b&aacute;n rất chắc chắn nhưng do chưa biết c&oacute; ai mua chưa n&ecirc;n vẫn c&ograve;n đang lưỡng lự, suy nghĩ về lời đề nghị tr&ecirc;n&rdquo;.</p>\r\n<p class="pBody">Lần theo nhiều th&ocirc;ng tin do c&aacute;c th&iacute; sinh cung cấp, được biết c&oacute; một c&ocirc; g&aacute;i t&ecirc;n Ph&uacute;c, thường giới thiệu l&agrave; sinh vi&ecirc;n Trường ĐH Mở TP.HCM, hiện đang rao b&aacute;n nhiều suất tr&uacute;ng tuyển đại học.</p>\r\n<p class="pBody">Tại qu&aacute;n c&agrave; ph&ecirc; tr&ecirc;n đường Ho&agrave;ng Văn Thụ (quận Ph&uacute; Nhuận), c&ocirc; g&aacute;i trẻ, mới ngo&agrave;i 22 tuổi xuất hiện. Khi được đề cập muốn mua một suất tr&uacute;ng tuyển v&agrave;o Trường ĐH Kinh tế TP.HCM, Ph&uacute;c n&oacute;i ỡm ờ: &ldquo;Trường ĐH Kinh tế TP.HCM l&agrave; trường kh&oacute; xơi, anh phải chi nhiều th&igrave; ch&uacute;ng t&ocirc;i mới lo được. Hiện, t&ocirc;i đang c&oacute; hai suất tr&uacute;ng tuyển v&agrave;o trường n&agrave;y, ng&agrave;nh học xịn, anh phải chi 60 triệu th&igrave; ch&uacute;ng t&ocirc;i mới thực hiện mua b&aacute;n&rdquo;.</p>\r\n<p class="pBody">Khẳng định về c&aacute;c suất tr&uacute;ng tuyển đại học của m&igrave;nh b&aacute;n kh&ocirc;ng phải giả mạo, Ph&uacute;c cho biết đ&atilde; b&aacute;n nhiều suất tr&uacute;ng tuyển cho c&aacute;c th&iacute; sinh tại TP.HCM v&agrave; c&aacute;c tỉnh l&acirc;n cận. Thậm ch&iacute;, c&oacute; th&iacute; sinh sợ mất cơ hội đ&atilde; đặt cọc tiền trước để ch&uacute;ng t&ocirc;i li&ecirc;n hệ t&igrave;m một suất tr&uacute;ng tuyển đại học ph&ugrave; hợp.</p>\r\n<p class="pBody">"Nếu cần kiểm chứng, anh c&oacute; thể đến khu vực l&agrave;ng Đại học Quốc gia TP.HCM (quận Thủ Đức) hỏi một số th&iacute; sinh tại đ&acirc;y sẽ r&otilde; lời n&oacute;i của ch&uacute;ng t&ocirc;i" - Ph&uacute;c n&oacute;i.</p>\r\n<p class="pSubTitle">Trường n&agrave;o cũng c&oacute; &ldquo;suất&rdquo;</p>\r\n<p class="pBody">Chưa bao giờ, những quảng c&aacute;o &ldquo;chạy tr&uacute;ng tuyển&rdquo; v&agrave;o đại học, cao đẳng lại được đăng tr&agrave;n lan, c&ocirc;ng khai v&agrave; lộ liễu như thế tr&ecirc;n mạng. Thậm ch&iacute;, trường n&agrave;o cũng c&oacute; thể chạy với nhiều gi&aacute; kh&aacute;c nhau. Chỉ cần g&otilde; những từ kh&oacute;a đơn giản: &ldquo;chạy đại học, cao đẳng&rdquo; bằng c&ocirc;ng cụ t&igrave;m kiếm Google, một loạt kết quả sẽ hiện l&ecirc;n tr&ecirc;n m&agrave;n h&igrave;nh. V&ocirc; số những th&ocirc;ng tin về đường đi, nước bước, c&aacute;ch thức, điều kiện v&agrave; thậm ch&iacute; gi&aacute; cả của từng lượt &ldquo;chạy&rdquo; sẽ hiện ra.</p>\r\n<p class="pBody">Ngay từ khi Bộ GD&amp;ĐT chưa c&ocirc;ng bố điểm s&agrave;n cho từng khối, c&aacute;c dịch vụ &ldquo;chạy tr&uacute;ng tuyển&rdquo; n&agrave;y đ&atilde; rất s&ocirc;i động tr&ecirc;n mạng. Với ti&ecirc;u đề rất &ldquo;hot&rdquo;: &ldquo;Chạy đại học cao đẳng ch&iacute;nh quy ai đi học n&agrave;o&rdquo;, một người với nickname Dutry Han&hellip;, số điện thoại: 0984887xxx kh&ocirc;ng ngại ng&ugrave;ng đăng tin tr&ecirc;n mạng. Theo lời quảng c&aacute;o của Dutry Han.., c&aacute;c th&iacute; sinh c&oacute; tổng điểm 3 m&ocirc;n &ldquo;dưới điểm s&agrave;n 1,5 điểm v&agrave; kh&ocirc;ng c&oacute; m&ocirc;n n&agrave;o dưới 0 điểm&rdquo; đều đủ điều kiện để tham gia &ldquo;chạy v&agrave;o đại học&rdquo;.</p>\r\n<p class="pBody">Danh s&aacute;ch c&aacute;c trường đại học m&agrave; Kens liệt k&ecirc; ra tr&ecirc;n diễn đ&agrave;n n&agrave;y mới thật đ&aacute;ng ngờ. Bởi trong đ&oacute; c&oacute; rất nhiều trường được xếp v&agrave;o top tr&ecirc;n, điểm chuẩn rất cao như: ĐH Sư Phạm TP.HCM, ĐH S&agrave;i G&ograve;n&hellip; hoặc c&oacute; thể &ldquo;chạy&rdquo; v&agrave;o những trường như ĐH Quy Nhơn, ĐH Đ&agrave; Lạt,&hellip;</p>\r\n<p class="pBody">Một t&agrave;i khoản mạng cũng đưa ra lời quảng c&aacute;o kh&aacute; ấn tượng: &ldquo;Nhận chạy tr&uacute;ng tuyển đại học, cao đẳng tất cả c&aacute;c trường&hellip; li&ecirc;n hệ: 0903452xxx. Mọi thắc mắc li&ecirc;n hệ qua số điện thoại tr&ecirc;n từ 7h đến 20h hằng ng&agrave;y&rdquo;.</p>\r\n<p class="pBody">Li&ecirc;n hệ với số diện thoại vừa t&igrave;m được, chủ nh&acirc;n thu&ecirc; bao n&agrave;y khẳng định chắc nịch rằng, chỉ cần tổng 3 m&ocirc;n từ điểm s&agrave;n trở l&ecirc;n đều c&oacute; thể chạy tr&uacute;ng tuyển v&agrave;o tất cả c&aacute;c trường&nbsp; đại học, cao đẳng trong cả nước. Gi&aacute; cả t&ugrave;y thuộc v&agrave;o trường &ldquo;tốp&rdquo; tr&ecirc;n hay &ldquo;tốp&rdquo; dưới, nhưng gi&aacute; giao động từ 40-70 triệu đồng.</p>\r\n<p class="pBody">Lướt qua một v&agrave;i trang mạng, dừng trước số điện thoại 09874xxx, đầu d&acirc;y b&ecirc;n kia một giọng nữ trung ni&ecirc;n, t&ecirc;n Th&ugrave;y.</p>\r\n<p class="pBody">Lấy l&iacute; do c&oacute; thằng em thi đại học nhưng lo lực học hơi đuối n&ecirc;n gia đ&igrave;nh muốn t&igrave;m một suất ăn chắc v&agrave;o ĐH Kinh tế TP.HCM, thấy Th&ugrave;y quảng c&aacute;o c&oacute; t&agrave;i &ldquo;xuất quỷ nhập thần&rdquo;, th&iacute;ch trường n&agrave;o, v&agrave;o trường đấy, miễn l&agrave; c&oacute;&hellip; tiền, gia đ&igrave;nh tr&ocirc;ng cậy v&agrave;o c&ocirc;.</p>\r\n<p class="pBody">Th&ugrave;y nghe b&ugrave;i tai, kể một loạt c&aacute;c trường đại học c&oacute; thể lo được, đừng n&oacute;i l&agrave; Thương mại, m&agrave; Ngoại thương cứ &ldquo;bơm&rdquo; (tiền) nhiều l&agrave; v&agrave;o được hết. Cuối c&ugrave;ng, Th&ugrave;y &ldquo;chốt&rdquo; gi&aacute; v&agrave;o trường ĐH Thương mại 200 triệu đồng, cụ thể sẽ trao đổi sau.</p>\r\n<p class="pBody">Thấy đối phương c&oacute; vẻ c&ograve;n lưỡng lự v&igrave; c&ograve;n về b&agrave;n th&ecirc;m với gia đ&igrave;nh, T&acirc;m ngu&yacute;t m&ocirc;i n&oacute;i: &ldquo;Em cứ y&ecirc;n t&acirc;m đi, năm n&agrave;o chị chả lo cho v&agrave;i suất v&agrave;o, bọn chị c&oacute; &ldquo;d&acirc;y dợ&rdquo; đ&agrave;ng ho&agrave;ng, đảm bảo 100%&rdquo;.</p>\r\n<p class="pBody">Kh&ocirc;ng kh&iacute; chạy v&agrave;o cao đẳng ch&iacute;nh quy cũng như c&aacute;c trường đại học tại chức thời gian n&agrave;y cũng đang rất nhộn nhịp. Gi&aacute; chạy v&agrave;o tại chức th&igrave; rẻ hơn rất nhiều, chỉ từ 2 triệu trở l&ecirc;n l&agrave; đ&atilde; c&oacute; thể c&oacute; một chỗ ngồi tr&ecirc;n giảng đường đại học. Kh&ocirc;ng chỉ người b&aacute;n nhiệt t&igrave;nh quảng c&aacute;o m&agrave; những người đang c&oacute; nhu cầu cũng rất nhiều v&agrave; đa dạng. C&oacute; cầu th&igrave; ắt c&oacute; cung, c&acirc;u chuyện chạy trường, xin học b&acirc;y giờ kh&ocirc;ng cần phải tế nhị, k&iacute;n đ&aacute;o m&agrave; coi như chuyện đương nhi&ecirc;n.</p>\r\n<p>Nguồn :&nbsp;<a href="http://www.tinmoi.vn/">http://www.tinmoi.vn</a></p>', '../', '2012-08-23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `be_acl_permissions`
--
ALTER TABLE `be_acl_permissions`
  ADD CONSTRAINT `be_acl_permissions_ibfk_1` FOREIGN KEY (`aro_id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permissions_ibfk_2` FOREIGN KEY (`aco_id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_acl_permission_actions`
--
ALTER TABLE `be_acl_permission_actions`
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `be_acl_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_2` FOREIGN KEY (`axo_id`) REFERENCES `be_acl_actions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_groups`
--
ALTER TABLE `be_groups`
  ADD CONSTRAINT `be_groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_resources`
--
ALTER TABLE `be_resources`
  ADD CONSTRAINT `be_resources_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `be_users`
--
ALTER TABLE `be_users`
  ADD CONSTRAINT `be_users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `be_acl_groups` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
