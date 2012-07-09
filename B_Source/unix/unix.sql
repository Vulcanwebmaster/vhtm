-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2012 at 10:00 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-07-07 06:35:06', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

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
('1b6429d9c745ae2db36f02f4b1925a48', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.47 Safari/536.11', 1341460803, 'a:12:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-07-04 12:50:52";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}'),
('57fa479deaa6cd83b82a0853c39f841b', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.47 Safari/536.11', 1341635706, 'a:12:{s:9:"user_data";s:0:"";s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-07-05 05:30:54";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unix_camnhan`
--

INSERT INTO `unix_camnhan` (`camnhan_id`, `noidung`, `ngaythang`, `nguoidang`) VALUES
(3, '<em>“…Trước khi tham gia chương trình “Bứt phá trong kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam” của thầy Phan Quang Điệp, tôi và con trai cũng không có ý định thi vào trường Ams. Lúc đó, vào tháng 5 cháu làm bài thi thử môn toán chỉ đạt từ  2/15  đến 4 / 15 điểm, cháu cũng không thích học môn toán. Nhưng sau khi tham dự chương trình này cả hai mẹ con đã thực sự thay đổi và quyết tâm thi vào trường Amsterdam. Và thật tuyệt vời thầy Điệp đã truyền cảm hứng học tập có những phương pháp giảng dạy tuyệt vời giúp con trai tôi đạt 10/15 điểm toán sau vài buổi huấn luyện trước ngày thi. Thật sự gia đình tôi rất biết ơn thầy về những bài giảng tuyệt vời mà thầy đã dành cho con tôi…. ”              </em>\r\n\r\n<strong>Chị Lan Anh-PHHS cháu Đào Phúc Thành-trúng tuyển kỡ thỡ tuyển sinh lớp 6 Hà Nội Amsterdam 2010</strong>', NULL, ''),
(4, '<em>“…Tên tôi là Lê Quý Dương, tôi có ước mơ thi đỗ vào trường Hà Nội Amsterdam.Trước khi tham gia chương trình này điểm thi thử của tôi chỉ được từ 5-6 điểm. Nhưng sau khi học các phương pháp, chiến thuật và thủ thuật làm bài nhanh mà thầy Điệp hướng dẫn điểm số của tôi đó nâng lên 11-12 điểm.Và thật tuyệt vời ước mơ của tôi đó thành sự thật.Hẹn gặp lại cỏc bạn tại trường Hà Nội Amsterdam...”</em>\r\n\r\n<strong>Lê Quý Dương-HS trường tiểu học Thái Thịnh- trúng tuyển kỳ thi tuyển sinh lớp 6 Hà Nội Ams 2011. </strong>', NULL, ''),
(5, '<em>“…Khóa học cho em những đột phá trong cách học cũng như nâng cao điểm số. Em đã học được rất nhiều thủ thuật làm bài hay, cách giải bài ngắn gọn từ thầy Điệp. Trong suốt khóa học, em  đã được biết cách làm bài bằng máy  tính chỉ trong vòng 5 – 15 giây rất mới lạ mà trước kia em chưa được học tại các trung tâm khác. Khóa học giúp em tự tin hơn trong ky thi vào trường trung học phổ thông chuyên HN – Amsterdam sắp tới. Em rất thích khóa học này!...”</em>\r\n\r\n<strong>Nguyễn Đỗ Mỹ Linh - </strong><strong>Lớp: 5D -</strong><strong>Trường: tiểu học Kim Liên</strong>\r\n', NULL, ''),
(6, '<em>“…Em rất muốn cảm ơn khóa học vì đã giúp em tiến bộ hơn rất nhiều so với trước đây. Thú vị nhất đó là “ Thi vào trường Ams thật là thú vị” mà trước đây đối với em điều đó gần như không thể. Khóa học đã dạy em cách để thành công mà không phải quá vất vả và mệt mỏi. So với những lần trước, lần này em rất tự tin khi thi vào trường Ams. Chắc chắn rằng với những kiến thức mà khóa học đã trang bị, chúng em sẽ vào được trường Ams – ngôi trường mơ ước của rất nhiều học trò. Và khi đã trở thành 1 học sinh trường Ams, em sẽ nhớ lại những bài học ở đây và coi đó là kho báu của riêng mình  và sẽ giữ gìn để truyền đạt cho các thế hệ sau. Em cảm ơn trung tâm rất nhiều....”</em>\r\n\r\n<strong> Đào Ngọc Tố Trân - </strong><strong>Lớp: 5C - </strong><strong>Trường tiểu học Văn Khê</strong>', NULL, ''),
(7, '<em>“…Trước khi tham gia chương trình này, em luôn nghĩ rằng kỳ thi vào Ams là rất khó. Và có nhiều đề thi năm trước em không làm được. Nhưng chương trình này đã giúp em biết thêm rất nhiều kỹ năng và kinh nghiệm làm bài. Trước đây em đã tham gia rất nhiều khóa học nhưng không hiệu quả nên em rất nản chí và không muốn thi vào Ams nữa. Nhưng sau khi tham gia khóa học này, em đã thay đổi cách suyb nghĩ và biết thêm rất nhiều chiến thuật mới. Đây là khóa học tuyệt vời nhất!....”</em>\r\n\r\n<strong>Phùng Thu Trà - </strong><strong>Lớp : 5 M - </strong><strong>Trường Kim Liên</strong>', NULL, ''),
(8, '<em>"...Trước khi tham gia chương trình này, thi Ams đối với em thật khó khăn, rất ngại ngùng khi nhắc về môn toán của Ams, bởi lúc đó khi làm thử bài thi số điểm của em rất thấp. Nhưng sau khóa học, em cảm thấy tự tin hơn rất nhiều về khả năng của mình, các bài thi cũng được điểm cao hơn so với trước.  Khóa học này thật bổ ích, thầy Điệp đã giúp chúng em có những thủ thuật để làm các dạng toán nhanh hơn, chính xác hơn. So với trung tâm văn hóa mà em đã được học thì quả thật chương trình này khác biệt hẳn. Thày giúp em quyết tâm hết sức để ôn tập cho kỳ thi Ams sắp tới. Em cảm ơn thầy và đã tạo cơ hội cho chúng em tham gia khóa học thật bổ ích này."</em>\r\n\r\n<strong>Nguyễn Thị Hà Phương - </strong><strong>Lớp: 5E  - </strong><strong>Trường Cát Linh</strong>', NULL, '');

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
  PRIMARY KEY (`dangky_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_dangky`
--

INSERT INTO `unix_dangky` (`dangky_id`, `hoten`, `truong`, `lop`, `phuhuynh`, `dienthoai`) VALUES
(1, 'nguyen tien manh', 'Haui', 'KHMT2k3', 'nvh', '01692253134');

-- --------------------------------------------------------

--
-- Table structure for table `unix_doituong`
--

CREATE TABLE IF NOT EXISTS `unix_doituong` (
  `doituong_id` int(11) NOT NULL AUTO_INCREMENT,
  `tendoituong` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`doituong_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_doituong`
--

INSERT INTO `unix_doituong` (`doituong_id`, `tendoituong`, `mota`) VALUES
(1, 'Trẻ em', NULL),
(2, 'Người lớn', NULL);

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
(1, '<ol>\r\n	<li><strong>1. Giới thiệu công ty Unix:</strong></li>\r\n<ul>\r\n	<li>Công ty cổ phần Unix được thành lập bởi các doanh nhân và chuyên gia đào tạo nhiều kinh nghiệm đến từ nhiều đơn vị giáo dục khác nhau. Chúng tôi muốn tạo nên một cái tên mới với mục tiêu giúp cho khách hàng được tiếp cận với những chương trình đào tạo chất lượng nhất.</li>\r\n</ul>\r\n	<li><strong>2. Khi tham gia các khóa học do công ty Unix tổ chức học viên sẽ được:</strong></li>\r\n<ul>\r\n	<li>- Đào tạo và huấn luyện theo những phương pháp đào tạo mới nhất và đang được áp dụng hiệu quả trên thế giới.</li>\r\n	<li>- Khơi nguồn cảm hứng và có những nguồn động lực mạnh mẽ khi tham gia khóa học.</li>\r\n	<li>- Được đào tạo và huấn luyện bởi những giảng viên, chuyên gia đào tạo tốt nhất.</li>\r\n	<li>- Luôn tạo nên những hiệu quả vượt trội sau khi tham gia chương trình.</li>\r\n</ul>\r\n	<li><strong>3. Diễn giả, chuyên gia đào tạo:</strong></li>\r\n<ul>\r\n	<li>- Những giáo viên, diễn giả, chuyên gia đào tạo được công ty Unix mời tham gia giảng dạy luôn là những người không chỉ có chuyên môn vững vàng , dày dạn kinh nghiệm mà điều quan trọng nhất là họ phải là người tạo ra hiệu quả cao nhất trong học viên. Chính vì lẽ đó các diễn giả, chuyên gia đào tạo của công ty Unix luôn thường xuyên tham gia các chương trình đào tạo của các chuyên gia, diễn giả hàng đầu trên thế giới, để không ngừng cập nhật những phương pháp đào tạo tốt nhất , nâng cao kỹ năng giảng dạy và kiến thức chuyên môn.</li>\r\n</ul>\r\n	<li><strong>4. Sứ mệnh của Unix education:</strong></li>\r\n<ul>\r\n	<li>- Unix education ra đời với một sứ mệnh là giúp cho mọi người được tiếp cận với những chương trình đào tạo tốt nhất.</li>\r\n</ul>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `unix_gioithieu_submenu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_gioithieu_submenu`
--

INSERT INTO `unix_gioithieu_submenu` (`submenu_id`, `ten`, `noidung`) VALUES
(1, 'Tầm nhìn', 'Đây là trang tầm nhìn'),
(2, 'Sứ mệnh', 'Đây là trang Sứ mệnh');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_hoithao`
--

INSERT INTO `unix_hoithao` (`hoithao_id`, `tieude`, `noidung`, `thoigian`, `phanhoi`, `anhdaidien`) VALUES
(1, 'a', '', '2012-07-04', '1', '../');

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
(1, 'Các khóa học', 'Chương trình này là một chương trình bao gồm chuỗi các bài giảng và các hội thảo có một không hai tại Hà Nội. Không có một chương trình đào tạo nào giống như thế ở bất cứ đâu. ..'),
(2, 'Phương pháp đào tạo', '<a>Diễn giả Phan Quang Điệp</a>\r\n\r\nHiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic Toán Châu Á Thái Bình Dương , chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.\r\n<ul>\r\n	<li>- Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“ Bứt phá trong kì thi Toán trường Ams”, “ Giải toán siêu tốc bằng máy tính bỏ túi”, “ Chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</li>\r\n	<li>- Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và giành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, <strong>thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</strong></li>\r\n	<li>- Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia,  Tập đoàn  Giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</li>\r\n</ul>\r\n<em>Thông tin tham khảo xem tại</em>: <a title="Bứt phá môn Toán trường Hà Nội Amsterdam" href="<?php echo base_url();?>index.php/hoithao/detail/6">Đây</a>'),
(3, 'Sự kiện', 'Hội thảo:”Bứt phá môn Toán thi vào cấp 2 Hà Nội Amsterdam” ..'),
(4, 'slide', 'assets/unix/images/khoahoc-slide.jpg,assets/unix/images/thuvien-slide.jpg'),
(5, 'images', 'assets/unix/images/slide-bottom/1.jpg,assets/unix/images/slide-bottom/2.jpg,assets/unix/images/slide-bottom/3.jpg,assets/unix/images/slide-bottom/4.jpg,assets/unix/images/slide-bottom/5.jpg'),
(6, 'video', 'http://www.youtube.com/watch?v=hu0Gtgvskec'),
(7, 'Chúng tôi là ai', 'Công ty cổ phần Unix, là một trong những công ty cung cấp các chương trình đào tạo chất lượng cao hàng đầu Việt Nam. Unix mang đến những công nghệ đào tạo tiên tiến và các chương trình phát triển cá nhân hàng đầu trên thế giới.'),
(8, 'Chúng tôi làm gì', 'Các khóa học kỹ năng thay đổi tư duy và cách nghĩ, chúng tôi mang lại những trải nghiệm hoàn toàn khác biệt. Môi trường làm việc năng động, chuyên nghiệp Unix luôn chào đón những con người có năng lực tham gia đồng hành cùng chúng tôi');

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
  `doituong` int(11) DEFAULT NULL,
  PRIMARY KEY (`khoahoc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unix_khoahoc`
--

INSERT INTO `unix_khoahoc` (`khoahoc_id`, `tieude`, `mota`, `batdau`, `ketthuc`, `hocphi`, `anhdaidien`, `thoigian`, `doituong`) VALUES
(2, '“Dẫn lối” thành công khi nuôi dạy con', '<h4>5 bí kíp dưới đây sẽ giúp bạn giảm căng thẳng và nhàn hạ hơn khi làm cha mẹ.</h4>\r\n<p>Khi thấy những đứa trẻ hoạt bát nhưng cũng rất ngoan ngoãn và lễ phép, bạn có bao giờ tự hỏi bố mẹ chúng đã nuôi dưỡng chúng như thế nào chưa?<br/>\r\nLàm cha mẹ, khó tránh khỏi những áp lực và mâu thuẫn trong khi nuôi dạy con. 5 bí quyết nuôi dạy con dưới đây sẽ giúp bạn giảm phần nào đó căng thẳng và nhàn hạ hơn khi làm cha mẹ.</p>\r\n<h4>1.     Sự nhất quán</h4>\r\n<p>Dạy trẻ tối kỵ việc ‘nói một đằng, làm một nẻo’. Vì vậy, khi đã hứa điều gì đó với con trẻ, cha mẹ cần cố gắng thực hiện đúng. Liên tục ra ‘luật’ mới sẽ khiến trẻ rối trí và không hiểu được chính xác việc mình cần làm và nên làm là gì. Cần giúp trẻ hiểu những nguyên tắc cơ bản trong gia đình mà chúng phải tuân theo. Và người lớn trong gia đình không được ‘trống đánh xuôi, kèn thổi ngược’ để tránh việc trẻ có thể bị nhầm lẫn với những thông điệp khác nhau.</p>\r\n<h4>2.    Thói quen</h4>\r\n<p>Có câu ‘thói quen nói lên nhân cách’, muốn con ngoan thì cha mẹ cần uốn nắn càng sớm càng tốt. Thói quen tốt như: ngủ đúng và đủ giấc, ăn đúng giờ, hạn chế ăn vặt… sẽ giúp trẻ có sức khỏe ổn định, có thời gian học tập và vui chơi hợp lý. Đồng thời, cha mẹ cũng không phải cuống cuồng, căng thẳng vì lo cho con.</p>\r\n<h4>3.    Ranh giới</h4>\r\n<p>‘Ra luật’ với trẻ chính là chìa khóa thành công trong việc nuôi dạy trẻ thành tài. Hãy đưa ra những ranh giới rõ ràng để chứng tỏ quyền hạn của người lớn với trẻ và để cho trẻ hiểu rằng nơi nào, lúc nào là cần phải làm việc gì. Nếu muốn con trẻ khi lớn lên sống không dựa dẫm, biết tự lập thì đừng tạo ra cho trẻ quá nhiều chọn lựa khiến trẻ ‘kén cá, chọn canh’ và không dứt khoát.</p>\r\n<h4>4.    Sự kiềm chế</h4>\r\n<p>Biết tiết chế cơn giận, bình tĩnh kiểm soát mọi việc và không đối xử ‘độc tài’ với con… là những điều mà nhiều bậc phụ huynh đã biết nhưng để làm được lại không dễ. Khi sắp nổi ‘sân si’ với con, bạn có thể nhắm mắt lại và hít thở thật sâu, hoặc đếm ngược từ 10, hoặc lảng sang chuyện khác… Hãy nhớ, đừng làm lớn chuyện với những gì không thay đổi ngay được.<br/>\r\nNgoài ra, ngay cả khi khen thưởng trẻ cũng cần phải kiềm chế, vì khen thưởng sẽ mất đi tác dụng nếu trẻ đã nghe nhàm tai và cũng khó để trẻ tin rằng cha mẹ thực lòng khen ngợi chúng.</p>\r\n<h4>5.    Thư giãn</h4>\r\n<p>Dành thời gian gần gũi, cùng chơi với con giúp tình mẫu tử/phụ tử thêm gắn kết hơn. Những lời nói nựng nịu, âu yếm hay những cái thơm vào má… là ‘thần dược’ đối với sự phát triển tinh thần của trẻ nhỏ. Hãy tiếp cận từng giai đoạn phát triển của trẻ (ví dụ như tập ngồi bô) với một thái độ cởi mở và dễ chịu, bởi vì nếu bạn luôn căng thẳng, trẻ sẽ nhận ra ngay.<br/>\r\nKhông kém phần quan trọng, thỉnh thoảng phải tự cho mình những giây phút xả hơi, nghỉ ngơi giải trí với vợ/chồng mà không mang theo con – sự nghỉ ngơi này sẽ đem lại nhiều thay đổi tích cực không ngờ đấy !</p>', NULL, NULL, NULL, 'nuoi_day_con_tre-150x150.jpg', '2012-05-17', 2),
(3, '"Đo" khả năng thành tài của con bạn', '<p>\r\n<p>&lt;div&gt;</p>\r\n<p>&lt;div align="right"&gt;</p>\r\n<p>&lt;table width="1" border="0" cellspacing="0" cellpadding="0"&gt;</p>\r\n<p>&lt;tbody&gt;</p>\r\n<p>&lt;tr&gt;</p>\r\n<p>&lt;td width="60"&gt;&lt;/td&gt;</p>\r\n<p>&lt;td&gt;&lt;/td&gt;</p>\r\n<p>&lt;td&gt;&lt;/td&gt;</p>\r\n<p>&lt;td&gt;&lt;/td&gt;</p>\r\n<p>&lt;td&gt;&lt;/td&gt;</p>\r\n<p>&lt;/tr&gt;</p>\r\n<p>&lt;/tbody&gt;</p>\r\n<p>&lt;/table&gt;</p>\r\n<p>&lt;/div&gt;</p>\r\n<p>NgṠnay, c⣠chuy뮠gia t㭠l? vࡧi⯠d?c cho r?ng, ngo᩠thᯨ t h?c t?p ? nhࡴr������, ', '0000-00-00', '0000-00-00', 0, '../../children.jpg', '0000-00-00', NULL),
(4, 'abc', '', '0000-00-00', '0000-00-00', 0, '../', '0000-00-00', NULL),
(5, 'a', '<p>a</p>', '0000-00-00', '0000-00-00', 0, '', '0000-00-00', NULL),
(6, 'a', '<p>d</p>', '0000-00-00', '0000-00-00', 0, '', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unix_lienhe`
--

CREATE TABLE IF NOT EXISTS `unix_lienhe` (
  `lienhe_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tieude` varchar(2000) NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`lienhe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `unix_sach`
--

CREATE TABLE IF NOT EXISTS `unix_sach` (
  `sach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaisach_id` int(11) NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(25, 'Quà tặng cuộc sống- Học cách lắng nghe', 'http://www.youtube.com/watch?v=5lx4_FSjISk', 1, NULL),
(26, 'Quà tặng cuộc sống: Điều gì đến sẽ đến', 'http://www.youtube.com/watch?v=faTnhKHBihc', 1, NULL),
(27, '14 cách kiểm soát việc xem tivi của trẻ', '<em><strong>Ai cũng biết rằng, TV và internet là hai nguồn tài nguyên quan trọng trong việc giáo dục và giải trí cho trẻ nhưng nếu dành thời gian quá nhiều vào nó thì trẻ sẽ gặp những tác động tiêu cực.</strong></em>\r\n\r\nCác chuyên gia nghiên cứu cho rằng, không nên cho trẻ dưới 2 tuổi xem TV. Đối với trẻ hơn 2 tuổi chỉ cho xem khoảng từ 1-2 giờ/ngày.\r\n\r\nĐó là lí do vì sao mà chúng ta cần kiểm soát thời gian xem TV, chơi game và truy cập mạng của trẻ. Một số gợi ý dưới đây sẽ giúp các mẹ kiểm soát dễ dàng:\r\n\r\n<strong>1. Hạn chế thời gian xem TV</strong>\r\nĐể bé không suốt ngày ngồi bên màn hình TV, bạn nên dành thời gian chơi với con qua các trò chơi như đọc sách, làm toán đố trên tạp chí, xếp hình, diễn kịch, chơi các trò chơi dân gian… Những hoạt động này sẽ kéo ngắn thời gian ngồi bên màn hình của bé và giúp bé hoạt động thể chất tốt hơn\r\n\r\n<strong>2. Không được để TV trong phòng ngủ của trẻ</strong>\r\nHầu như các bà mẹ sai lầm khi đặt TV và máy vi tính trong phòng ngủ của con. TV sẽ làm xáo trộn giờ ngủ của trẻ.\r\n\r\n<strong>3. Tắt TV trong khi ăn</strong>\r\nXem TV trong thời gian ăn là một sai lầm lớn của các gia đình ở Việt Nam. Vừa ăn vừa xem TV sẽ rất hại cho đường tiêu hóa lại không có thời gian để các thành viên trong gia đình bàn luận, trò chuyện với nhau.\r\n\r\n<strong>4. Không cho trẻ xem TV khi đang làm bài tập về nhà</strong>\r\nXem TV khiến trẻ không tập trung được vào bài tập và vì thế chất lượng làm bài cũng sẽ giảm.\r\n\r\n&nbsp;\r\n<div><img src="http://www.upload.sao.vn/2010/thuy/thang8/07/xemtivi.jpg" alt="14 cách kiểm soát việc xem TV của trẻ" width="450" height="300" border="0" /></div>\r\n&nbsp;\r\n<div align="center"><span style="color: #800080"><em>Hãy dành thời xem TV cùng các con</em></span></div>\r\n<strong>5. Khiến việc xem TV là một việc mà trẻ cần để đạt tới chứ không phải là một quyền lợi</strong>\r\nChỉ cho trẻ xem sau khi đã hoàn thành bài tập về nhà hoặc làm xong việc nhà. Đặc biệt, nên cho trẻ tự chọn thời gian xem TV, chương trình trẻ yêu thích nhưng vẫn nằm trong gợi ý của bạn.\r\n\r\n<strong>6. Cuối tuần đi chơi chứ không ở nhà xem TV</strong>\r\nBạn hãy tạo nhiều hoạt động giúp trẻ linh hoạt và rèn luyện được thể lực như dã ngoại, đi thư viện, thăm bảo tàng, đọc sách, đá bóng, đá cầu, chơi cầu lông…\r\n\r\n<strong>7. Bạn cũng nên hạn chế thời gian xem TV</strong>\r\nTrẻ sẽ tự hỏi rằng, tại sao bố mẹ xem được mà mình không được xem? Nếu bạn cũng cứ suốt ngày ngồi bên chiếc TV thì đừng hi vọng có thể kiểm soát được trẻ.\r\n\r\n<strong>8. Theo dõi lịch chiếu TV và các chương trình dành cho trẻ nhỏ</strong>\r\nCác chương trình chiếu trên TV dành cho nhiều người thuộc nhiều độ tuổi. Chính vì thế mà cần phải lựa chọn những chương trình phù hợp với độ tuổi của trẻ. Nếu nhà bạn có con nhỏ, không nên đăng kí những kênh truyền hình chỉ dành cho người lớn (phim nóng, cảnh bạo lực, hành động…).\r\n\r\n<strong>9. Xem xét chất lượng các chương trình dành cho trẻ nhỏ</strong>\r\nKhông phải chương trình truyền hình nào cũng bổ ích với trẻ, có những chương trình không mang lại ích lợi giáo dục hoặc có những chương trình quá khó với trình độ nhận thức của trẻ. Bạn nên xem trước (nếu có điều kiện) hoặc theo dõi chất lượng của các chương trình đó trên các phương tiện thông tin để có được lựa chọn đúng đắn.\r\n\r\n&nbsp;\r\n<div><img src="http://www.tapchigiadinh.vn/images/stories/giadinh/0807/anh_goc/xemtivi1.jpg" alt="14 cách kiểm soát việc xem TV của trẻ" width="460" height="310" border="0" /></div>\r\n&nbsp;\r\n<div align="center"><span style="color: #800080"><em>Bạn cần chọn lựa chương trình thích hợp đối với trẻ</em></span></div>\r\n<strong>10. Theo dõi lượng rating của chương trình dành cho trẻ nhỏ</strong>\r\nThông thường, lượng rating đánh giá chất lượng của một chương trình cũng là cách để bạn biết xu hướng về sở thích, trào lưu của trẻ bây giờ.\r\n<strong>\r\n11. Cùng xem với trẻ</strong>\r\nNếu bạn không thể ngồi cả 30 phút để xem hết chương trình cùng với trẻ thì bạn cũng nên xem ít nhất là 5 phút cùng trẻ. Đây là cơ hội để bạn hiểu được những niềm đam mê, thích thú của con.\r\n<strong>\r\n12. Nói chuyện với trẻ về những gì trẻ nhìn thấy trên TV và chia sẻ kinh nghiệm của bản thân</strong>\r\nNếu bỗng dưng trẻ gặp những tình huống khá là tế nhị như sex, tình yêu, nghiện ngập, uống rượu, hút thuốc, các cách cư xử khác lạ… trên TV và hỏi bạn về điều đó thì bạn cũng không nên lúng túng, tắt ngay TV mà hãy dùng chính TV để giải thích cho trẻ. Tuy nhiên, không nên úp mở mà nên nói thẳng về vấn đề.\r\n\r\n<strong>13. Tìm sự ủng hộ từ những người khác</strong>\r\nNhà bạn đã có “chính sách” xem TV với trẻ như vậy thì nên nói điều đó với các bậc cha mẹ khác, với giáo viên để họ có thể ủng hộ bạn.\r\n\r\n<strong>14. Cung cấp nhiều lựa chọn vui chơi cho bé hơn là chiếc TV</strong>\r\nNếu trẻ không muốn tắt TV đi để làm việc khác, bạn hãy gợi ý cho trẻ những hoạt động thú vị hơn như đi ra ngoài chơi chẳng hạn. Nếu trẻ không đồng ý, bạn hãy kiên nhẫn một chút, dần dần sẽ thuyết phục được trẻ.\r\n\r\n&nbsp;', 4, NULL),
(29, 'Quà tặng cuộc sống: Đóa hoa tình yêu', 'http://www.youtube.com/watch?v=r7mWb_bkJdY', 1, NULL),
(30, 'Quà tặng cuộc sống: Một câu nói dịu dàng', 'http://www.youtube.com/watch?v=cLa7zlPKB3w', 1, NULL),
(31, 'Quà tặng cuộc sống: Sự chia sẻ bình dị', 'http://www.youtube.com/watch?v=4mE-JPsFq8M', 1, NULL),
(32, 'Quà tặng cuộc sống: Khi Thượng đế tạo ra người Cha', 'http://www.youtube.com/watch?v=awPsNT533fk', 1, NULL),
(33, 'Lời nhắn gửi muộn màng', 'http://www.youtube.com/watch?v=8s7YRvmMVbE', 1, NULL),
(34, 'Chọn trường tiểu học cho con', '<strong>Vào thời điểm này các bậc phụ huynh có con chuẩn bị vào lớp 1 thật sự bối rối trước các loại hình trường tiểu học khác nhau. Việc xác định chính xác những gì bạn cần ở một trường tiểu học thật không hề đơn giản. Trong tâm trí mình, bạn có thể vẽ lên bức tranh một ngôi trường lý tưởng đầy màu sắc, tuy nhiên bạn cần quan tâm đến nhu cầu của con mình, những mục tiêu của gia đình và các yếu tố thực tế khác nữa.</strong>\r\n\r\nSau đây là một vài hướng dẫn để bạn chuẩn bị quyết định chọn trường cho con :\r\n<div><a href="http://www.unix.vn/?attachment_id=66742" rel="attachment wp-att-66742"><img src="http://www.webtretho.com/wttnews/wp-content/uploads/2012/04/DSC05498.jpg" alt="" width="500" height="300" /></a>Ảnh: cung cấp bởi Pacific Primary and High School.</div>\r\n<strong>Bước 1 : Xác định các tiêu chí chọn trường :</strong>\r\n<ol start="1">\r\n	<li>Nhu cầu của con bạn :</li>\r\n</ol>\r\n- Bé cần có một đời sống học tập vui tươi và phong phú ?\r\n\r\n- Bé phù hợp với lớp đông học sinh hay ít học sinh ?\r\n\r\n- Bé cần được chăm sóc kỹ hơn hay có thể tự chăm sóc bản thân ?\r\n\r\n- Bé có chịu được áp lực học nhiều chương trình, nhiều nơi (đi học thêm văn hoá và năng khiếu ngoài giờ học…) ?\r\n\r\n- Bé có muốn học cùng trường với anh/chị/em của mình không ?\r\n<ol start="2">\r\n	<li>Các mục tiêu của gia đình :</li>\r\n</ol>\r\n- Bạn muốn con mình được phát triển toàn diện hay thành tích học tập là quan trọng hơn ?\r\n\r\n- Bạn muốn con học chương trình giáo dục theo cách truyền thống hay một môi trường năng động và sáng tạo hơn ?\r\n\r\n- Bạn muốn có sự kết hợp chặt chẽ giữa gia đình và nhà trường và được đóng góp các ý kiến cho nhà trường ?\r\n\r\n- Bạn có sẵn sàng hợp tác với nhà trường trong quá trình giáo dục hay muốn giao hết cho nhà trường ? (cần lưu ý rằng sự tham gia của phụ huynh trong quá trình giáo dục là vô cùng quan trọng, nếu bạn đang có suy nghĩ sẽ giao hết cho trường thì nên thay đổi nhé).\r\n<ol start="3">\r\n	<li>Các yếu tố thực tế :</li>\r\n</ol>\r\n- Bạn có muốn con học gần nhà ?\r\n\r\n- Bạn có nhiều thời gian và chấp nhận rủi ro cho việc đưa đón bé đi học, học thêm, sinh hoạt ngoài giờ… ?\r\n\r\n- Bạn muốn con có chương trình học tập phong phú cả về nghệ thuật, thể thao, ngoại khoá, phát triển toàn diện các kỹ năng …tại trường ?\r\n\r\n- Bạn có chuẩn bị đủ ngân sách gia đình để con học hết chương trình phổ thông ?\r\n\r\n<strong>Bước 2 : Tìm hiểu các trường và so sánh các tiêu chí :</strong>\r\n\r\nHện nay thông tin về các trường rất nhiều. Bạn cần tỉnh táo so sánh các thông tin này với tiêu chí lựa chọn của gia đình. Một nguồn đáng tin cậy chính là các phụ huynh đang cho con theo học tại trường bạn muốn tìm hiểu. Khi đã có đủ thông tin bạn hãy cân nhắc con mình có phù hợp với tiêu chí tuyển sinh của trường không và lên kế hoạch tham quan trực tiếp. Nên để con bạn cùng đến thăm trường và cho bé cùng quyết định chọn trường.\r\n\r\n<strong>Bước 3 : Tham quan trường</strong>\r\n<ol>\r\n	<li>Chương trình giáo dục :</li>\r\n</ol>\r\n- Trường có mục tiêu giáo dục cụ thể và chương trình giáo dục có đạt được các mục tiêu đề ra không ?\r\n\r\n- Thời khoá biểu có được sắp xếp khoa học không ? Có cân bằng giữa các hoạt động giáo dục không ?\r\n\r\n- Số tiết học các môn có đảm bảo để con bạn không phải đi học thêm không ?\r\n\r\n- Các chương trình thể thao, ngoại khoá được tổ chức thế nào ? Phụ huynh có phải đóng thêm phí không ?\r\n\r\n- Có các lớp năng khiếu mỹ thuật, âm nhạc, công nghệ …không ? Phụ huynh có phải đóng thêm học phí không ?\r\n\r\n- Trường có các câu lạc bộ, các sinh hoạt cộng đồng, các cuộc thi tài không ?\r\n<ol>\r\n	<li>Ban giám hiệu, giáo viên và học sinh :</li>\r\n</ol>\r\n- Ban giám hiệu có sẵn sàng gặp phụ huynh không ?\r\n\r\n- Nếu là trường song ngữ, Ban Giám hiệu có sử dụng được ngôn ngữ thứ 2 không ?\r\n\r\n- Bạn có được trao đổi với BGH về quan điểm giáo dục của nhà trường và gia đình bạn không ?\r\n\r\n- Bạn có thống nhất với quan điểm giáo dục của nhà trường không ?\r\n\r\n- Trường có nhiều cơ sở không ? BGH quản lý các cơ sở như thế nào ?\r\n\r\n-  Hãy quan sát :\r\n<ul>\r\n	<li>Các lớp học có vui tươi năng động không ?</li>\r\n	<li>Các thầy cô có nhiệt tình và thân thiện với học sinh không ?</li>\r\n	<li>Lớp các giáo viên nước ngoài (nếu có) có cần phải trợ giảng không ?</li>\r\n	<li>Trường có chọn lọc học sinh không ?</li>\r\n	<li>Phong cách học sinh có phù hợp với mong muốn của gia đình bạn không ?</li>\r\n</ul>\r\n<ol>\r\n	<li>Cơ sở vật chất :</li>\r\n</ol>\r\n- Môi trường có an toàn, vệ sinh và có kiểm soát không ?\r\n\r\n- Diện tích sử dụng của trường tính cho mỗi học sinh là bao nhiêu ?\r\n\r\n- Thiết kế xây dựng, ánh sáng, âm thanh, màu sắc có phù hợp không ?\r\n\r\n- Trường có đủ các phòng chức năng (thư viện, phòng thí nghiệm, phòng thể dục thể thao…..)  với trang thiết bị hiện đại và phù hợp không ?\r\n\r\n- Thư viện trường có nguồn sách và tài liệu phong phú không ? Thư viện có phải là nơi học sinh yêu thích không ? (thói quen đọc sách có được duy trì không?)\r\n\r\n- Trường có bếp ăn không ? Thức ăn có ngon, nóng và an toàn không ?\r\n\r\n- Phòng vệ sinh có sạch và khô không ? Có vệ sinh thường xuyên không ? Có lạm dụng hoá chất tẩy rửa không ?\r\n\r\n- Địa điểm này trường thuê hay xây dựng để hoạt động lâu dài ? Sắp tới trường có chuyển đi đâu không ?\r\n\r\nKhi đã quyết định chọn trường, bạn hãy đồng hành cùng nhà trường trong quá trình phát triển con mình, hãy luôn chủ động đóng góp ý kiến xây dựng trường và phối hợp cùng giáo viên khi cần thiết. Nếu được như vậy chắc chắn con bạn sẽ có một môi trường học tập hạnh phúc để phát triển toàn diện.\r\n<p align="right"><strong>Nguồn:</strong> <em>Thông tin được cung cấp bởi Pacific Primary and High School.</em></p>', 4, NULL),
(35, 'Chế độ dinh dưỡng giúp trẻ phát triển chiều cao', '<div>\r\n<p align="left"><strong>Chế độ ăn giúp trẻ phát triển chiều cao</strong></p>\r\n\r\n<table width="1" border="0" cellspacing="0" cellpadding="3" align="left">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://vnexpress.net/Files/Subject/3B/9D/58/14/04081908.jpg" alt="" width="150" height="120" border="1" /></td>\r\n</tr>\r\n<tr>\r\n<td>Sữa là thực phẩm lý tưởng cho trẻ.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p align="left">Một bé khỏe mạnh sinh ra dài hơn 50 cm, đây là một khởi đầu tốt để phát triển. Trong 2 năm đầu đời, bé tăng trưởng về chiều cao rất nhanh, thêm khoảng 25 cm. Trẻ cao hay thấp là do di truyền, nhưng chế độ ăn cũng có thể làm thay đổi đáng kể.</p>\r\n<p align="left">Để đầu tư chiều cao cho trẻ, không những cần tác động vào giai đoạn bé đã ra đời mà phải chuẩn bị ngay từ khi người phụ nữ sắp mang thai, thậm chí từ khi bé gái chưa đến tuổi dậy thì. Khi mang thai, bà mẹ cần ăn uống đủ chất, đa dạng các loại thực phẩm, không kiêng khem để đảm bảo tăng cân đủ 10-12 kg trong 9 tháng.</p>\r\n<p align="left">Tròn 1 năm tuổi, trung bình bé trai cao khoảng 76 cm, còn bé gái khoảng 75 cm. Khi được 2 tuổi, bé sẽ cao khoảng 85 cm. Người ta ước tính tầm vóc của người trưởng thành sẽ 2 lần chiều cao lúc 2 tuổi. Và giai đoạn cuối cùng để cải thiện tầm vóc là tuổi dậy thì: bé gái 10-16 tuổi, bé trai 12-18 tuổi. Ở giai đoạn này, bé sẽ tăng 8-10 cm/năm.</p>\r\n<p align="left">Trong giai đoạn trẻ còn có thể tăng chiều cao, cần có một chế độ dinh dưỡng hợp lý. Năng lượng cung cấp phải đủ, phù hợp với lứa tuổi, không quá dư vì dễ dẫn tới béo phì, cũng không quá ít vì dễ đưa đến suy dinh dưỡng. Bữa ăn của trẻ bao giờ cũng phải đầy đủ 4 nhóm: đạm - bột - béo - rau. Chất đạm nên chiếm khoảng 10-15% tổng năng lượng nói chung, tinh bột chiếm 60-65% và chất béo 10%. Nên cho trẻ ăn đa dạng không kiêng khem, không ăn uống thiên lệch.</p>\r\n<p align="left">Vitamin và khoáng chất cũng có vai trò hết sức quan trọng trong việc phát triển chiều cao của trẻ. Canxi có nhiều trong sữa, cua, ốc, tôm, tép, đậu nành và các loại rau. Trong đó, sữa là quan trọng nhất. Canxi trong sữa dễ hấp thu do có vitamin D và phospho với tỷ lệ hợp lý. Ngoài ra, sữa còn cung cấp nhiều vitamin, khoáng chất và nguồn đạm có giá trị sinh học cao, chứa đủ các acid amin thiết yếu.\r\nĐể canxi được hấp thu tốt hơn, da cần tiếp xúc trực tiếp với ánh nắng để tổng hợp vitamin D. Vì vậy, nên dành cho con bạn 20 phút tắm nắng mỗi ngày.\r\n\r\nVitamin A vừa giúp phòng chống khô mắt, tăng sức đề kháng chống nhiễm trùng, vừa góp phần trong việc phát triển chiều cao. Các thức ăn giàu vitamin A là sữa, trứng, cá, gan, thịt...\r\n\r\nSắt, kẽm cũng có vai trò quan trọng đối với sự phát triển chiều cao. Sắt có nhiều trong thức ăn động vật như gan, huyết, thịt, cá... và các loại đậu đỗ, rau dền. Kẽm có trong con hàu, gan heo, thịt bò, sữa, lòng đỏ trứng, sữa đậu nành...\r\n\r\nNgoài chế độ dinh dưỡng hợp lý, cần khuyến khích trẻ có lối sống năng động, tập thể dục thể thao thường xuyên. Ngủ đủ, ngủ sâu cũng làm hoóc môn tăng trưởng tiết ra nhiều, kích thích xương dài hơn.</p>\r\n<p align="left">Cách đo chiều cao cho trẻ</p>\r\n<p align="left">Đối với trẻ dưới 24 tháng, để trẻ nằm ngửa trên một thước đo gỗ, đầu chạm sát một cạnh của thước đo. Một người giữ đầu trẻ thẳng, mắt nhìn lên trần nhà, một người giữ 2 đầu gối trẻ thẳng và đưa mảnh gỗ áp sát 2 gót bàn chân, bàn chân thẳng đứng. Đọc kết quả và ghi số cm.</p>\r\n<p align="left">Đối với trẻ trên 24 tháng, để trẻ đi chân không, đứng thẳng, quay lưng vào tường; đầu, hai vai, mông, bắp chân, gót chân áp sát tường. Mắt nhìn thẳng ra phía trước, 2 tay xuôi theo thân mình. Dùng bảng gỗ áp sát đỉnh đầu, vuông góc với thước đo. Chiều cao đứng và nằm có thể chênh nhau 1-2 cm.\r\n\r\nCách tính chiều cao đơn giản cho trẻ 2 -12 tuổi: Chiều cao (cm) = tuổi (năm) x 6 + 77.</p>\r\n<p align="right">(Theo <em>Sức Khỏe &amp; Đời Sống</em>)</p>\r\n\r\n</div>', 4, NULL);
INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(36, 'Phương Pháp Dạy Con Khi Mang Thai', '<img class="aligncenter" src="http://tinhkhongphapngu.net/images/stories/PPdaycon1.jpg" alt="" />\r\n\r\nKinh văn, quyển chú giải, trang 56:<strong>“Phục thứ Phổ Quảng, nhược vị lai thế trung, Diêm Phù Đề nội, Sát Lợi Bà la môn, trưởng giả cư sĩ, nhất thiết nhân đẳng.</strong><strong>Cập dị tánh chủng tộc, hữu tân sản giả, hoặc nam hoặc nữ, thất nhật chi trung, tảo dữ độc tụng, thử bất tư nghì kinh điển.</strong><strong>Cánh vi niệm Bồ Tát danh, khả mãn vạn thiên</strong><strong>biến</strong><strong>, thị tân sanh tử, hoặc nam hoặc nữ, túc hữu ương báo, tiện đắc giải thoát. An lạc dị dưỡng, thọ mạng tăng trưởng, nhược thị thừa phúc sanh giả, chuyển tăng an lạc, cập dữ thọ mạng.”</strong>\r\n<div> <strong><em>Nguyên lý thai sanh</em></strong>\r\n<p align="justify">      Đoạn kinh trên nói về lúc sinh nở, cần phải tu phước như thế nào? Y học hiện đại phát triển hơn xưa rất nhiều, việc sinh nở cũng an toàn yên tâm hơn ngày xưa. Thời xưa, đặc biệt ở nông thôn, những khu vực lạc hậu kém phát triển, việc sinh nở thực sự liên quan đến mạng sống con người, cho nên đức Phật đặc biệt quan tâm nhắc nhở, dạy chúng ta phải tu học thế nào, làm sao để đảm bảo bình yên cho cả mẹ lẫn con.</p>\r\n<p align="justify">      Trong kinh, đức Phật dạy: Quan hệ gia đình vô cùng mật thiết, chắc chắn phải có nhân duyên sâu sắc. Không phải tụ chung một cách ngẫu nhiên. Đức Phật đã phân chia nhân duyên phức tạp đó thành bốn loại, đó là: Báo ân, báo oán, đòi nợ, trả nợ, vì thế mà quy tụ thành người một gia đình. Cha con, anh chị em, không thể tách rời quan hệ này.</p>\r\n<p align="justify">      Ngạn ngữ thường nói: “<em>Không phải oan gia không chung nhà</em>”, câu nói này rất có lý. Tuy nhiên sau khi giác ngộ, người cả nhà liền trở thành quyến thuộc pháp lữ, thật không gì thù thắng hơn. Còn không giác ngộ, thì gia đình sẽ liên tiếp xảy ra ân oán xen kẽ báo ứng lẫn nhau. Cả nhà chịu khổ sở không nói ra được. Dù sao, trả ơn thì hiếm, báo oán thì nhiều; trả nợ thì ít, đòi nợ thì nhiều. Cho nên cả đời làm người trên thế gian, thường xuyên thấy không hài lòng như ý.</p>\r\n<p align="justify">      Quả  báo luôn bình đẳng, bất kể sang hèn giàu nghèo. Kinh đã ví dụ, Sát lợi là hoàng tộc của Ấn Độ xưa; Bà la môn cũng là giai cấp tôn giáo có địa vị cao trong xã hội bấy giờ; trưởng giả cư sĩ là người có nhiều phước báu; tiếp theo là tất cả mọi người và các họ tộc khác. Phạm vi bao gồm rất rộng, trong đó có đầy đủ bốn giai cấp trên.</p>\r\n<p align="justify">      Người Á đông thường nói “<em>Phú quý bần tiện, bất kể thân phận thế nào, không luận địa vị ra sao, việc sinh nở cũng không thể tránh khỏi</em>”. Hơn nữa, đau đớn trong sinh nở là hoàn toàn bình đẳng. Người giàu được chăm sóc có phần đầy đủ hơn, người nghèo khó được chăm sóc kém hơn. Nói cho cùng, đau đớn không thể nào tránh được.</p>\r\n<p align="justify">      <strong><em>Phương pháp dạy bảo thai nhi</em></strong></p>\r\n<p align="justify">      Phật giáo hướng dẫn chúng ta phương pháp, trong vòng bảy ngày, sớm đọc tụng bộ kinh bất khả tư nghì này. Tốt nhất là đọc sớm. Khi biết có thai liền nên đọc, mỗi ngày đọc tụng một bộ kinh Địa Tạng Bồ Tát Bổn Nguyện, hoặc niệm nghìn câu danh hiệu Bồ Tát Địa Tạng. Cần phải dùng tâm chân thành cung kính để tụng niệm thì phước báu sẽ vô cùng to lớn.</p>\r\n<p align="justify">      Cho dù đứa bé trong thai đến gia đình để báo oán, là oan gia trái chủ, nhưng vì chúng ta chăm sóc đứa bé như thế thì oan kết cũng sẽ được hóa giải. Do chúng ta có ân với nó thì nó không còn báo oán nữa mà chuyển thành báo ân.</p>\r\n<p align="justify">      Chuyển biến phải ngay từ thời gian đầu. Kinh nhấn mạnh, chậm nhất cũng phải vào bảy ngày trước khi sinh. Đương nhiên càng sớm càng tốt. Khi chúng ta hiểu được đạo lý này, biết được phương pháp này, tốt nhất đọc tụng ngay khi biết mình có thai, y theo phương pháp mà tu hành.</p>\r\n<p align="justify">      Đối với người làm mẹ, cần tâm bình khí hòa, chân thành, cung kính, thanh tịnh, bình đẳng, vì khởi tâm động niệm sẽ ảnh hưởng đến thai nhi. Điều này, nếu nói theo lý luận khoa học hiện đại thì càng dễ hiểu hơn. Đây thuộc về hiện tượng vận động của sóng.</p>\r\n<p align="justify">      <strong><em>Sơ  luận sự vận hành của sóng</em></strong></p>\r\n<p align="justify">      Phật pháp nói, cũng như thế giới Tây Phương Cực Lạc, tất cả pháp đều phát ra ánh sáng, không những con người có thể phóng quang mà vạn vật cũng phóng quang. Cực Lạc thế giới ánh sáng soi khắp, ánh sáng thế giới chúng ta cũng phóng quang rọi khắp. Giả sử tất cả mọi người trên thế gian không có ánh sáng soi khắp, vạn vật không như Cực Lạc Thế Giới được ánh sáng chiếu khắp như thế, thì “<em>Nhất chân pháp giới</em>” trở thành mâu thuẫn. Làm gì có chuyện nơi này đặc biệt sáng hơn, còn nơi khác lại không có ánh sáng, như vậy làm sao giải thích cho thông suốt? “<em>Nhất chân pháp giới</em>” là bao gồm cả pháp giới của chúng ta, không có đạo lý rời khỏi pháp giới này.</p>\r\n<p align="justify">      Đọc đoạn kinh, chúng ta phải hiểu rằng, nơi có ánh sáng soi khắp thì mỗi người đều có thể cảm nhận được. Nơi chúng ta cũng có ánh sáng soi khắp nhưng chỉ vì chúng ta không có cảm giác mà thôi. Tại sao chúng ta không có cảm giác? Vì tâm không thanh tịnh, tâm quá loạn, vọng niệm quá nhiều nên không thể cảm nhận được cảnh giới như thế. Thế gian này cùng Cực Lạc thế giới và Hoa Tạng thế giới không hề khác biệt. Nói theo vật lý học hiện đại càng dễ lý giải hơn. Ánh sáng là hiện tượng hoạt động của sóng, chỉ cần có hoạt động là có sóng. Khoa học hiện tại gọi là sóng, nhà Phật gọi là ánh sáng. Cho nên ánh sáng chính là sóng, bao gồm tất cả vật chất. Vật chất đã hình thành như thế nào? Phân tích đến tận cùng, vật chất là nguyên tử proton, neutron. Những hạt cơ bản như thế đều luôn chuyển động. Đức Phật không cần có những thiết bị khoa học hiện đại, ngài vẫn nhìn thấy rõ ràng hiện tượng sóng và hạt mà những thiết bị tiên tiến nhất hiện nay chưa thể quan sát được. Ngài thuyết giảng một cách uyển chuyển tường tận, nói ra thực tướng của sự vật, nhưng chúng ta phần lớn không tin, không chấp nhận, dù cách nói của đức Phật rất vi diệu, sâu sắc, gọi là thiện xảo, là phương tiện khéo léo.</p>\r\n<p align="justify">      Khi đức Phật nói về hiện tượng vật chất đã nói rõ bốn nguyên tắc “<em>Đất nước gió lửa</em>”. Đất nước gió lửa là vật chất căn bản, là hạt cơ bản mà khoa học hiện nay đang nói. Đất là tướng trạng của vật chất, cái con người có thể nhìn thấy. Đất đại diện cho vật thể. Mắt trần chúng ta không thể nhìn thấy hạt. Dưới kính hiển vi có độ phân giải cao liền nhìn thấy được tướng trạng của hạt này. Đức Phật không cần thiết bị gì cả, mắt của ngài “<em>Ngũ nhãn viên minh</em>”, nhạy bén hơn chúng ta rất nhiều, có thể thấy thứ mà phàm phu chúng ta không thể nhìn thấy.</p>\r\n<p align="justify">      Thế  thì vật chất cơ bản được cấu thành như thế nào? Luôn mang nguồn điện, cho nên, lửa, hỏa đại, chính là điện dương; nước, thủy đại là điện âm, ngôn ngữ chúng ta dùng hiện nay là nhiệt độ và ẩm độ. Còn gió là trạng thái hoạt động, không đứng yên. Vật chất cơ bản là hết thảy hiện tượng của tất cả vật chất, bao gồm tổ chức tế bào trong con người. Như vậy thử nghĩ xem, làm gì có hiện tượng đứng yên. Hạt cơ bản luôn luôn hoạt động, động sinh ra sóng. Lý thuyết và thực tế đều chứng minh năng lượng của sóng lan rộng tận hư không biến pháp giới. Trời đất vạn vật, chúng sanh đông như thế, khởi tâm động niệm, thì sóng đó càng hiển thị rõ ràng, phạm vị ảnh hưởng càng rộng hơn, trong khi sóng của vật chất còn tương đối nhỏ hẹp. Hiểu được điều này, chúng ta liền nhận ra trong không gian cuộc sống của chúng ta, sóng hoạt động phức tạp dường nào.</p>\r\n<p align="justify">      Kinh Phật dạy, với thiện niệm, thiện tâm, sóng phát ra ổn định nhẹ nhàng, sau khi tiếp xúc được với sóng này, con người sanh tâm hoan hỷ, có cảm giác dịu dàng thoải mái. Còn khởi ác niệm, ác tâm, sóng động rất mãnh liệt,phát ra giao động mạnh, tiếp xúc với sóng này sẽ thấy khó chịu cả người. Ngày nay, hiện tượng như thế gọi là từ trường. Người luyện khí công ở Trung Quốc cũng cùng một trạng thái như thế, cho nên gọi là “<em>khí</em>” cũng được. Phật pháp gọi là ánh sáng, sóng động, từ trường, cùng một trạng thái.</p>\r\n<p align="justify">      Do đây có thể biết, khi thần thức đến đầu thai, nó có ý niệm, có sóng, cho nên khởi tâm động niệm và hành động của người mẹ đều ảnh hưởng đến thai. Ngày xưa, Trung Quốc luôn chú ý đến thai giáo. Thai giáo trong sách cổ ghi lại một số nguyên lý, nhưng nói không tường tận chi tiết, không được thấu đáo, đọc xong còn nửa tin nửa ngờ, không thấy được tính nghiêm trọng của ảnh hưởng này, và cũng khó hiểu.</p>\r\n<p align="justify">      Hôm nay chúng ta hiểu rõ chân tướng sự thật về sóng, thì sẽ biết được mỗi khởi tâm động niệm đều ảnh hưởng đến thai nhi rất nhiều. Nên trong thời gian người mẹ mang thai, nếu khởi tâm động niệm thiện, thanh tịnh thì thai nhi sẽ nhận được rất nhiều lợi lạc.</p>\r\n<p align="justify">      Người nào cũng mong muốn con cái mình ngoan giỏi, là con thảo cháu hiền. Vậy làm thế nào dạy chúng? Ngay trong lúc mang thai, chính bản thân chúng ta phải thực hành tận hiếu thảo, sóng hiếu thảo đó sẽ ảnh hưởng đến thai nhi. Chúng ta tu thanh tịnh, tu phước, như vậy mới thật sự gieo cho thai nhi hạt giống tốt về sau. Đạo lý này có thật, không có gì mê tín cả.</p>\r\n<p align="justify">      <strong><em>Vì</em></strong><strong><em> </em></strong><strong><em>sao đức Phật khuyên chúng ta đọc bộ kinh Địa Tạng Bồ Tát Bổn Nguyện?</em></strong></p>\r\n<p align="justify">      Vì  bộ kinh này là hiếu kinh, tinh thần của bộ kinh có thể tóm lược thành bốn chữ “<em>Hiếu thân tôn sư</em>”. “<em>Hiếu thân tôn sư</em>” là cương lĩnh dạy học của thế xuất thế gian, cũng là căn bản nền tảng.</p>\r\n<p align="justify">      Chúng ta tu học Phật pháp Đại thừa bắt đầu từ  đâu? Chính từ Bồ Tát Địa Tạng. Địa là tâm địa, tạng là bảo tàng. Bảo tàng quý giá trong tâm địa là trí tuệ vô lượng, phước đức vô lượng và khả năng vô lượng. Bảo tàng hạt châu vốn có trong tự tánh của chúng ta, vì thế mà gọi là Địa Tạng. Bảo tàng chôn dưới lòng đất, cũng như vàng bạc, khoáng sản, nếu không biết khai thác thì vẫn nằm sâu dưới đất, tuy có nhưng không thể hưởng dùng.</p>\r\n<p align="justify">      Chúng ta cần phải biết khai thác bảo tàng trong tự tánh, bằng cách dùng đến tánh đức, tức là lấy đức tính làm công cụ tương ứng với bảo tàng thì mới khai thác được. Thù thắng nhất trong tánh đức chính là hiếu và kính. Cho nên khi tu học Phật pháp Đại thừa, phải bắt đầu từ Bồ tát Địa Tạng. Học hiếu đạo trước, trong hiếu xây dựng sư đạo. Phật pháp là sư đạo được xây dựng trên nền tảng hiếu đạo.</p>\r\n<p align="justify">      Những năm trước đây, tôi gặp một số pháp sư đến hoằng pháp tại Hoa Kỳ. Khi tiễn họ, tôi đã khuyên họ đến Hoa kỳ đừng xây chùa chiền trước, mà hãy xây dựng từ đường, xiển dương hiếu đạo. Vì sao? Vì nếu không có hiếu đạo thì Phật pháp không thể bám rễ, đạo tràng của Phật giáo không thể mạnh được.</p>\r\n<p align="justify">      <strong><em>Lấy hiếu đạo làm nền tảng giáo dục</em></strong></p>\r\n<p align="justify">      Phật pháp là sư đạo, cho nên xây dựng từ đường tốt hơn. Từ đường để hoằng dương Phật pháp, có hiệu quả lớn hơn xây dựng tự viện. Nhìn vào hình ảnh chùa chiền, người ta biết ngay là Phật giáo, người không tin Phật nhất định không vào, duyên này liền bị cắt đứt. Nhưng nếu xây dựng từ đường, hàng năm cúng giỗ, người Trung Quốc bất kể theo tôn giáo nào vẫn không thể quên tổ tiên. Khi họ đến tham gia giỗ tổ, chúng ta có thể giảng thêm về Phật pháp, có thể giảng phương thức dạy học truyền thống Trung Quốc, dần dần cảm hóa đại chúng đến dự. Cho nên lấy từ đường làm đạo tràng lợi lạc hơn chùa chiền tự viện rất nhiều.</p>\r\n<p align="justify">      Rất tiếc các vị pháp sư đó không tiếp nhận kiến nghị của tôi. Cho nên tại Hoa Kỳ, người Nhật, người Trung Quốc đã xây rất nhiều đạo tràng, chủ yếu cũng chỉ độ cho người Trung Quốc. Thực tế người nước ngoài tại địa phương rất ít và hiếm khi vào, nguyên nhân cũng vì họ không tin Phật. Làm như vậy là chúng ta đã đảo ngược ngọn nguồn. Đến nay, tuy đã trải qua thời gian hơn một trăm năm, nhưng tại Hoa kỳ, Phật giáo truyền vào cũng chưa bám rễ được, chưa hoằng pháp thật hiệu quả, rất nhiều người chưa biết đến Phật pháp.</p>\r\n<p align="justify">      Khi tôi giảng kinh hoằng pháp tại Hoa kỳ, nhắc nhở mọi người rằng chúng ta chưa đủ phước báu, lực lượng còn mỏng manh, tôi đề nghị hiện đại hóa và bản địa hóa Phật giáo. Khi xây dựng đạo tràng tại Hoa Kỳ, hình thức của đạo tràng nhất định phải theo hình thức của Hoa Kỳ. Không nên bưng nguyên xi hình thức cung điện kiểu Trung Quốc đến, người Mỹ nhìn thấy biết ngay là hàng ngoại, văn hóa ngoại lai, liền sinh tâm bài xích, và không thích đi vào. Xây dựng đạo tràng tại Hoa Kỳ, nên xây dựng theo hình thức như tòa Bạch ốc, hay kiểu Quốc hội..., người Mỹ cảm nhận như cảm nhận văn hóa mình, họ sẽ bị thu hút vào.</p>\r\n<p align="justify">      Còn hình tướng Phật Bồ Tát trong đạo tràng thì tạc khắc theo hình dáng người Mỹ. Như thế mới có thể độ được người nước họ. Hai nghìn năm trước đây, Phật pháp truyền vào Trung Quốc, những vị cao tăng Ấn Độ đã rất thông minh khi dựng tượng Phật Bồ Tát theo hình dáng người Trung Quốc, xây đạo tràng cũng theo hình thức của Trung Quốc.</p>\r\n<p align="justify">      Người Trung Quốc rất tôn kính hoàng đế và nơi ở của hoàng đế. Lúc đó các vị cao tăng Ấn Độ đã xây dựng đạo tràng theo hình thức cung đình, bá tánh nhìn thấy đều rất hoan hỷ. Mấy ai có phước duyên được vào tham quan hoàng cung một lần trong đời. Thế nên chùa chiền tự viện được xây dựng cũng không khác hoàng cung bao nhiêu, cho nên dân chúng nhất định vào thăm. Đó là trang thiết bị phần cứng. Còn nội dung bên trong phải bắt đầu từ “<em>hiếu kính</em>”.</p>\r\n<p align="justify">      Phật giáo truyền vào Trung Quốc, tại sao được triều đình hoan nghênh nồng nhiệt như thế? Chính vì nội dung dạy học. Phần lý lẽ căn bản nhất hoàn toàn phù hợp với lý lẽ của thánh hiền Trung Quốc xưa. Cách dạy của nhà Nho cũng xây dựng trên nền tảng hiếu đạo. Phật pháp tương tự, thậm chí Phật pháp còn nói rõ hơn, chi tiết hơn Nho giáo. Do đó Phật pháp truyền vào Trung Quốc liền được triều đình hoan nghênh ủng hộ, thành công ngay thời điểm đó. Đối với xã hội, quốc gia, nhân dân, thực sự đã mang lại lợi ích và an lạc, tuyệt nhiên không phải là mê tín.</p>\r\n<p align="justify">      Đối tượng tu học Phật pháp từ lịch sử Trung Quốc đều là giai cấp sĩ đại phu. Thời kỳ đó, giai cấp sĩ phu tương đương thành phần tri thức ngày nay. Họ không phải là người bình thường mà là những người thật sự có học vấn, có đạo đức. Họ tu học, tiếp nhận Phật pháp, tín ngưỡng Phật Pháp rồi y giáo phụng hành, vì thế đạt hiệu quả trong việc thay đổi phong tục tập quán, dẫn dắt tầng lớp bình dân học và hành theo tập quán lương thiện.</p>\r\n<p align="justify">      Còn  hiện nay, chùa chiền tự viện đã biến chất, không còn dạy học. Ngày xưa tự viện là nhà trường, là môi trường dạy học, bây giờ tự viện trở thành môi trường siêu độ vong linh. Hoàn toàn thay đổi, biến chất quá nặng.</p>\r\n<p align="justify">      <strong><em>Nhìn nhận về Phật sự cầu siêu trong nhà Phật</em></strong></p>\r\n<p align="justify">      Thực ra việc cầu siêu cho vong linh vốn không có trong Phật giáo. Vậy tại sao diễn biến thành hiện tượng như thế này?</p>\r\n<p align="justify">      Thời gian khi tôi bắt đầu học Phật, gần gũi pháp sư Đạo An, lúc đó chúng tôi cùng nhau tổ chức lớp nghiên cứu Phật học cho đại học. Tôi đã thỉnh giáo pháp sư Đạo An. Ngài từ bi dạy. Ngài nói duyên khởi vấn đề này có thể bắt đầu từ năm Khai Nguyên nhà Đường, tức thời đại của Đường Minh Hoàng. Cuối đời, Đường Minh Hoàng vì sủng ái Dương quý phi nên đã bị triều đình lên án, dẫn đến An Lộc Sơn tạo phản, cơ hồ mất nước. Rất may có tể tướng Quách Tử Nghi dẹp yên cuộc động loạn, nhưng quân dân chết rất nhiều. Sau khi dẹp yên cuộc động loạn, triều đình tại mỗi chiến trường đều cho xây dựng một ngôi chùa gọi là Khai Nguyên tự. Chùa Khai Nguyên xuất hiện như thế. Mục đích để truy niệm quân dân tử nạn, chùa đã thỉnh mời các pháp sư tụng kinh siêu độ, gọi là pháp hội truy điệu.</p>\r\n<p align="justify">      Triều  đình quốc gia khởi xướng truy điệu vong hồn người tử  nạn, từ đó dân gian bắt chước, cứ trong dân chúng có người qua đời đều thỉnh mời pháp sư làm Phật sự cầu siêu. Việc cầu siêu thời đó chỉ là việc phụ thuộc, còn việc chính yếu trong đạo tràng vẫn là thuyết pháp giảng kinh, hướng dẫn đại chúng tu hành. Tuy nhiên việc phụ này bây giờ đã biến thành việc chính thức của chùa chiền, còn việc chính thức thì lại biến mất, không thấy nữa. Nghề tay trái biến thành nghề chính, đúng là điên đảo. Đó là lý do hình thành xu hướng mê tín. Sự thực của việc thay đổi diễn biến, chúng ta cần phải hiểu.</p>\r\n<p align="justify">      Lý luận, phương pháp, nguyên lý và nguyên tắc cầu siêu đều có viết trên kinh Địa Tạng Bồ Tát Bổn Nguyện. Người cầu siêu làm sao có thể chân thật cầu siêu được cho vong linh siêu thoát khỏi các cõi ác, sinh lên cõi trời, hưởng thụ phước báu. Kinh nói rất rõ ràng. Bản thân người cầu siêu cần phải chứng quả. Nếu bản thân không nâng cao được cảnh giới của mình, không thể chứng quả thì lợi lạc vong linh nhận được cũng rất giới hạn.</p>\r\n<p align="justify">      <strong><em>Bài học hiếu đạo trong kinh Địa Tạng</em></strong></p>\r\n<p align="justify">      Kinh đưa ra ví dụ, nữ Quang Mục là một cô gái có hiếu, biết mẹ mình trong lúc sinh thời tạo nhiều ác nghiệp, cô hiểu Phật pháp, áp dụng lời Phật dạy. Những nghiệp mẹ cô đã tạo trong đời, nhất định phải đọa địa ngục, địa ngục dễ vào nhưng thật khó ra. Cô muốn cứu mẹ nên đến cầu Phật. Đức Phật dạy cô dùng phương pháp niệm Phật. Ngoài ra không còn cách nào khác.</p>\r\n<p align="justify">      Bà  la môn nữ dùng phương pháp niệm Phật, Quang Mục nữ cũng dùng phương pháp niệm Phật. Ba la môn nữ chỉ là phàm phu nhưng vì muốn cứu mẹ nên trong một ngày một đêm, tinh tiến niệm Phật rất thành khẩn, đúng pháp, đạt nhất tâm bất loạn, liền chứng quả. Lúc ở trong thiền định, cô đến địa ngục, quỷ vương trong địa ngục nhìn thấy liền chấp tay gọi cô là Bồ tát. Chúng ta thấy, từ phàm phu, tu hành một ngày một đêm đã siêu phàm nhập thánh.</p>\r\n<p align="justify">      Quỷ  vương chào: “<em>Bạch Bồ tát, ngài đến đây có việc gì?</em>”. Cô hỏi: “<em>Đây là nơi nào?</em>” Quỷ vương trả lời địa ngục. Người vào địa ngục chỉ có hai đối tượng, một là theo nghiệp lực, đến chịu nghiệp báo; hai là bồ tát đến theo nguyện lực. Ngoài hai đối tượng này không ai có thể đến được địa ngục. Sau đó cô hỏi quỷ vương về tung tích mẹ mình. Quỷ vương cho biết, mẹ của cô ba ngày trước đã sanh về cõi trời Đao Lợi. Không những mẹ cô mà những người chịu tội chung với mẹ cô cũng đều được sanh về cõi trời Đao Lợi. Họ nghe nói, bà có người con gái hiếu thảo tu phước cho bà, cúng dường đức Giác Hoa Định Tự Tại Vương Như Lai. Nhờ phước báu này, bà ta được vãng sanh.</p>\r\n<p align="justify">      Nếu không phải vì người mẹ tạo tội nghiệp đọa địa ngục thì nữ Quang Mục cả đời không thể đạt được cảnh giới như thế, vì ngày thường niệm Phật hay tán loạn, làm sao có thể đạt được nhất tâm. Với mong muốn cứu mẹ, cô đã cố hết sức trong một ngày đêm thay đổi hẳn cảnh giới của mình. Nữ Quang Mục có thể chuyển phàm thành thánh do trợ duyên của mẹ. Người mẹ được vãng sanh cũng vì lý lẽ này. Một mình nữ Quang Mục chỉ cầu siêu qua hình thức sẽ không có hiệu quả. Chính mình không có phước báu thì người được cầu siêu cũng không nhận lợi ích gì.</p>\r\n<p align="justify">      <strong><em>Công phu tu tập trước tiên ở  chính mình</em></strong></p>\r\n<p align="justify">      Pháp giới ở đường ác, và pháp giới ở  cõi người chúng ta không khác nhau. Cũng như trong một gia đình, đứa con được giáo dục đàng hoàng, ra xã hội, đều được mọi người kính trọng, làm đến tổng thống, bộ trưởng, cha mẹ đi đến đâu cũng nhận được sự tôn kính của người khác. Còn bản thân mình không thành tựu, cha mẹ chúng ta làm sao được quỷ thần cung kính.</p>\r\n<p align="justify">      Kinh nói vấn đề cầu siêu, bảy phần công đức thì chính mình được sáu phần. Người được cầu siêu chỉ nhận một phần. Bản thân niệm Phật một ngày một đêm đạt đến nhất tâm bất loạn, công đức của bản thân là chính, người mẹ chỉ hưởng một phần, được một ít phước, sanh về cõi trời Đao Lợi. Vì vậy nếu bản thân không thể thành tựu, người thân sẽ không có được phước báu như thế.</p>\r\n<p align="justify">      Những lễ cúng bố thí bình thường chỉ là  mời họ đến ăn cơm, như cúng diêm khẩu mông sơn. Một bữa ăn no chỉ qua được cơn đói nhất thời chứ không thể giúp họ thoát khỏi các đường ác. Chân thật muốn thoát khỏi đường ác, thì trong Phật sự cầu siêu độ này, những vị pháp sư làm lễ cầu siêu phải tùy văn nhập quán. Sau khi hoàn tất khóa lễ cầu siêu, bản thân pháp sư phải thật sự trở thành Bồ tát, cảnh giới của pháp sư được nâng cao ngay thì hiệu quả cầu siêu sẽ vô cùng lớn, vong linh siêu độ chắc chắn được sanh cõi trời. Các vị pháp sư phải tụng niệm nghiêm túc, tu trì bằng tâm thanh tịnh, bình đẳng. Chính pháp sư phải đạt siêu phàm nhập thánh, từ phàm phu thăng tiến đến Bồ tát. Còn sau khi hoàn tất Phật sự, vẫn còn là phàm phu sẽ không có thành tựu cho vong linh. Chúng ta cần hiểu thấu vấn đề này.</p>\r\n<p align="justify">      Do đó khi có Phật sự cầu siêu, hành giả phải nghiêm túc. Niệm tụng kinh văn, xưng tán những bài kệ, nhất định phải khế nhập vào cảnh giới đó. Sau khi nhập vào cảnh giới thì không được thối chuyển, có như vậy công đức mới vô lượng vô biên. Người nhận phước báu sẽ không thể nào đếm được. Không nên làm qua loa tắc trách cho xong chuyện. Cầu siêu không thể cho giá, nói thách. Đó là cách làm ăn mua bán, không còn gì gọi là công đức nữa. Chạy theo hình thức như thế hoàn toàn sai.</p>\r\n<p align="justify">      Cầu siêu không những siêu độ cho vong hồn mà còn siêu độ cho cả chính mình. Khi chính mình được siêu thì vong linh cũng theo mình mà siêu độ. Bản thân chưa có cách siêu độ chính mình thì chắc chắn không thể siêu độ được vong linh. Đây chính là điều kinh Phật thường nói. Chúng tôi thường xuyên đọc lại kinh, nữ Quang Mục thật sự độ được bản thân, Bà la môn nữ cũng độ được bản thân. Sau khi bản thân được độ mới có thể độ được người khác. Những vong linh nhờ vào phước đức của người siêu độ mà vãng sanh. Nhưng vãng sanh cao nhất trong trường hợp này cũng chỉ đến cõi trời Đao Lợi. Muốn cao hơn cõi trời Đao Lợi, nhất định phải nhờ công phu tu hành của chính mình, người khác không thể giúp được.</p>\r\n<p align="justify">      Ở Trung Quốc trước đây, lễ cầu siêu quy mô lớn nhất là khi Lương Vũ Đế siêu độ hoàng hậu của mình. Người chủ trì pháp hội cầu siêu là pháp sư Bảo Chí, một cao tăng đương thời. Sau này chúng ta biết, pháp sư Bảo Chí là hóa thân của Bồ tát Quan Thế Âm. Đích thân Bồ tát Quan Thế Âm chủ trì pháp hội cầu siêu, sau này lưu truyền lại quyển Lương Hoàng Sám.</p>\r\n<p align="justify">      Như  vậy, Bồ Tát Quan Thế Âm chủ trì pháp hội siêu độ hoàng hậu của Lương Võ Đế nhưng hoàng hậu cũng chỉ sanh đến cõi trời Đao Lợi. Giả sử chư Phật Như Lai chủ trì cũng như thế thôi. Vong linh dựa vào phước báu tha lực của người khác chỉ có thể đạt được cảnh giới nhất định. Muốn có cảnh giới cao hơn phải dựa vào tu hành của mình. Chính mình không công phu tu tập thì không xong. Vì thế khi tu hành, chúng ta phải chân thật chuyển biến được cảnh giới, thật sự có kết quả thì Phật sự cầu siêu này có thể không cần hình thức gì cả.</p>\r\n<p align="justify">      Trong hồi ký Ảnh Trần, lão pháp sư Đàm Hư nói, năm xưa ngài ở cùng vài người bạn, chuyên nghiên cứu kinh Lăng Nghiêm, “<em>tám năm song cửa học Lăng Nghiêm</em>”. Lúc đó ngài đang là cư sĩ, mỗi ngày còn phải làm việc, bôn ba vì cuộc sống nên không thể hoàn toàn chuyên tâm. Nhưng thời gian tám năm chỉ đọc một bộ kinh, ít nhiều cũng chứng tỏ ngài có định lực. Nếu trong tám năm đọc hàng chục bộ kinh sẽ không hiệu quả. Tám năm ròng tham cứu, tâm định trên một bộ kinh, oan gia trái chủ của ngài đã đến nhờ ngài siêu độ. Khi nhìn thấy những vong hồn đến, ngài sợ hãi, e rằng những vong hồn ấy đến gây phiền phức. Nhưng oan gia trái chủ bước tới quỳ dưới chân ngài, cầu ngài siêu độ, tâm của ngài liền an ngay vì biết họ không phải đến gây phiền phức. Họ nói chỉ cần ngài đồng ý là có thể siêu được. Ngài liền gật đầu đồng ý, lập tức những vong hồn đáp trên đầu gối và vai ngài để vãng sanh. Hoàn toàn không có nghi thức gì cả.</p>\r\n<p align="justify">      Khi bản thân đạt được cảnh giới này, có công phu viên mãn, vong linh liền nương nhờ phước báu của chúng ta. Chỉ cần chúng ta đồng ý là được. Cho nên cần phải nhớ, siêu độ vong linh hoàn toàn dựa vào đức hạnh và công phu tu hành của chính mình.</p>\r\n<p align="justify">      Chúng ta hiểu rõ lý lẽ này, hiểu thấu cảm ứng của tâm điện thì chính từ những tư tưởng, khởi tâm động niệm thiện phát ra sóng thuần thiện. Lực của sóng mạnh có thể làm cho tất cả chúng sanh trên thế gian bao gồm quỷ thần, những sóng phát ra ác niệm bị sóng thiện bao phủ và triệt tiêu. Hiệu quả rất thù thắng.</p>\r\n<p align="justify">      Nói về sinh nở, niệm bộ kinh này có nhiều lợi lạc. Khi niệm những điều nêu trong kinh điển như lý luận, phương pháp, cảnh giới đều hiểu thấu, hành giả càng có lực thù thắng hơn. Vì đã hiểu thấu thì đọc tụng có thể tùy văn nhập quán. Cảnh giới bình thường của chúng ta khó chuyển, tối thiểu trong khi đọc tụng, cảnh giới đó có thể biến chuyển một vài phần. Hiệu quả này đều hiện rõ trong hoạt động của sóng. Hiểu sâu sắc, biết y giáo phụng hành thì lực đó càng không thể nghĩ bàn.</p>\r\n<p align="justify">      <strong><em>“Thị tân sanh tử”</em></strong></p>\r\n<p align="justify">      Đứa bé mới chào đời, dù trai hay gái, nếu có ác báo đều có thể được giải trừ. Đời quá khứ đã gây tội nghiệp thì đời này phải đến chịu quả báo. Vì vậy thời điểm mang thai bé là lúc nghiệp chướng rất dễ tiêu trừ. Còn khi em bé lớn lên, sáng tối suốt ngày suy nghĩ lung tung, lúc đó chúng ta muốn tiêu trừ nghiệp chướng cho con cũng khó lòng giúp được. Lúc mang thai, bé hoàn toàn nghe lời, tiêu trừ nghiệp chướng nên thực hiện ngay trong thời gian này.</p>\r\n<p align="justify">      Thai giáo các thánh hiền xưa đã nói tương tự như vậy. Thai giáo trong Phật pháp cũng thế.</p>\r\n<p align="justify">      <strong><em>“An lạc dị dưỡng, thọ mạng tăng trưởng”</em></strong></p>\r\n<p align="justify">      Nghiệp chướng đứa bé được tiêu trừ, tai nạn cũng được tiêu trừ, nó trở nên dễ nuôi, thọ mạng được tăng trưởng. Nếu đứa bé này do thừa phước mà sanh, thì phước báu chúng ta tu trong đời quá khứ, nay được đứa bé đến báo ơn cha mẹ, tạo ơn đức với cha mẹ, như vậy bản thân bé cũng tu phước.</p>\r\n<p align="justify">      <strong><em>“Chuyển tăng an lạc, cập dữ thọ mạng”</em></strong></p>\r\n<p align="justify">      Chúng ta dạy dỗ, giúp đỡ bé, phước báu của bé càng nhiều hơn, thọ mạng càng dài hơn. Trong chú giải cũng giải thích rất hoàn hảo vấn đề này.</p>\r\n<p align="justify">Xem tiếp kinh văn, quyển trung, trang 59</p>\r\n<p align="justify"><strong>“Phục thứ Phổ Quảng, nhược vị lai thế chúng sanh, ư nguyệt nhất nhật, bát nhật, thập tứ nhật, thập ngũ nhật, thập bát nhật, nhị thập tam, nhị thập tứ, nhị thập bát, nhị thập cửu, nãi chí tam thập nhật, thi chư nhật đẳng, chúng tội kết tập, định kỳ khinh trọng.”</strong></p>\r\n<p align="justify">      Đề mục đã nói “<em>trai tụng cảm báo</em>”. Kinh này nói về mười ngày chay, cũng có kinh nói sáu ngày chay, những ngày này đều tính trên lịch âm. Ngày nay, ít người còn dùng lịch âm. Các xã hội trên thế giới hiện nay đều thông dụng lịch dương. Phật nói, trong những ngày này, một số quỷ thần ở trời đất tuần tra trên thế gian. Mỗi một khởi tâm động niệm, lời nói việc làm của chúng sanh, thiện hay ác, quỷ thần đều ghi lại, đều điều tra xem xét, thu thập chứng cứ xác định nặng nhẹ. Đến lúc lâm chung, người không có phước đức lúc này sẽ đến gặp Diêm La Vương, lấy hồ sơ đối chiếu để xác định quả báo nặng nhẹ. Việc như thế, rốt cuộc là có thực hay chỉ là mê tín?</p>\r\n<p align="justify">      Có thật. Thế gian chúng ta cũng vậy. Hàng ngày cảnh sát tuần tra, gặp người phạm tội, liền điều tra, thu thập chứng cứ phạm tội, sau đó mới xét xử. Sau khi xác định tội trạng, phải tìm chứng cứ. Công việc khá khó khăn, không dễ dàng. Quỷ thần cũng vậy, đến tìm kiếm chứng cứ, chúng ta không có cách nào che giấu, lừa được người phàm nhưng không thể lừa gạt quỷ thần. Chúng ta ứng dụng khoa học để phá án, xét độ thành thật, nhưng không biết quỷ thần không cần dùng những thiết bị khoa học kỹ thuật này mà lại trực tiếp từ tín hiệu làn sóng phát ra của con người để kết án. Khởi tâm động niệm, quỷ thần đều biết. Người xưa từng nói, “<em>ba thước trên cao có thần minh</em>”, con người chỉ có thể lừa mình dối người nhưng không lừa được quỷ thần.</p>\r\n<p align="justify">      Kinh Vô Lượng Thọ đã dạy, số chúng sanh ở  thế giới Cực Lạc Tây phương quá nhiều, không thể tính đếm được. Những người vãng sanh thế giới Cực Lạc Tây Phương đều đến từ thế giới mười phương chư Phật, đều tu pháp môn niệm Phật mà vãng sanh. Không chỉ có thế giới chúng ta, mười phương tất cả thế giới chư Phật mỗi ngày vãng sanh đến đó, không biết bao nhiều mà kể. Đến thế giới Cực Lạc Phương Tây, đạo lực thần thông của họ hầu như không khác xa đức Phật A Di Đà. Những người đó có thiên nhãn, thiên nhĩ rất lợi hại. Tận hư không biến pháp giới họ đều nhìn thấy. Khởi tâm động niệm của tất cả chúng sanh, họ đều biết cả vì đạt tha tâm thông. Thần thông của quỷ thần còn giới hạn so với khả năng của A La Hán ở Tây Phương. Khả năng của A La Hán có thể biết được năm trăm kiếp của một con người, cụ thể tình trạng từng đời từng kiếp. Trong khi đó quỷ thần chỉ biết được những việc làm của chúng ta gần đây khoảng vài tháng.</p>\r\n<p align="justify">      Chúng ta muốn vãng sanh thế giới Cực Lạc Tây phương, nếu ý niệm không lành, hành vi không thiện thì dù suốt ngày niệm A Di Đà Phật, mười vạn biến, không bao giờ gián đoạn vẫn không thể vãng sanh.</p>\r\n<p align="justify"></p>\r\n<p align="justify"></p>\r\n\r\n<div><strong>Pháp sư: HT. TỊNH KHÔNG giảng\r\nTrích lục từ Kinh Địa Tạng Bồ Tát Bổn Nguyện</strong></div>\r\n<p align="center">   <strong>Biên dịch: Nhạo Minh cư sĩ</strong></p>\r\n<p align="center">   <strong>Biên tập: PT. Giác Minh Duyên</strong></p>\r\n\r\n<div>   <strong>Giảng tại Tịnh tông Học hội Singapore, tháng 05 - 1998</strong></div>\r\n</div>', 4, NULL);
INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(37, 'Nuôi và dạy con đúng phương pháp nhất', '&nbsp;\r\n\r\nViệc nuôi dạy trẻ gần đây đã trở thành một chủ đề rất phổ biến bởi vì cần thiết phải làm rõ sự khác biệt giữa quá trình trẻ được bố mẹ nuôi dưỡng ở nhà và được giáo dục ở trường. Mối quan hệ giữa bố mẹ và trẻ không giống với mối quan hệ giữa thầy và trò, vì vậy phương pháp giáo dục trẻ ở nhà cũng khác với ở trường. Ở trường, thầy cô dạy cho trẻ biết đọc, biết viết và dạy những kiến thức phổ thông, trái lại khi ở nhà, bố mẹ sẽ dạy cho trẻ những kinh nghiệm sống mà họ đã trãi nghiệm qua.\r\n<strong>VIỆC NUÔI DẠY TRẺ</strong>\r\n\r\n&nbsp;\r\n\r\nNuôi dạy trẻ là quá trình nuôi dưỡng và giáo dục trẻ từ lúc còn bé đến khi trưởng thành.\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/bi-quyet-day-tre.jpg"><img class="alignnone size-medium wp-image-207" src="http://unix.vn/home/wp-content/uploads/2012/03/bi-quyet-day-tre-300x238.jpg" alt="" width="300" height="238" /></a>\r\n\r\nThuật ngữ “nuôi dạy trẻ” bắt nguồn từ động từ “nuôi dạy”. Khi mọi người nói “nuôi dạy trẻ” nghĩa là làm tròn nhiệm vụ của bậc làm bố làm mẹ. Nhìn chung, phần lớn họ đều thừa nhận rằng trách nhiệm của họ tạo cho trẻ các nhu cầu cơ bản cần thiết. Đó chính là sự an toàn và phát triển của cơ thể, tình cảm, trí não và tinh thần.\r\n\r\n&nbsp;\r\n\r\n<strong>TRÁCH NHIỆM CỦA BỐ MẸ ĐỐI VỚI TRẺ</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/tap-the-thao2.jpg"><img class="alignnone size-medium wp-image-208" src="http://unix.vn/home/wp-content/uploads/2012/03/tap-the-thao2-300x194.jpg" alt="" width="300" height="194" /></a>\r\n\r\n<strong>A. Khỏe mạnh về thể chất</strong>\r\n\r\n&nbsp;\r\n\r\nChăm sóc trẻ khỏe mạnh về mặt thể chất tức là chăm sóc cơ thể trẻ được khỏe khoắn (ví dụ: bảo vệ trẻ trước nguy hiểm, chăm sóc sức khỏe, các nhu cầu về ăn, mặc, chỗ ở) và cho trẻ một cuộc sống lành mạnh.\r\n\r\n&nbsp;\r\n\r\n<strong>B. Phát triển thể chất</strong>\r\n\r\n&nbsp;\r\n\r\n- Tạo điều kiện và cung cấp các phương tiện cho cơ thể trẻ phát triển khỏe mạnh bằng việc tập cho trẻ đến với thể thao. Bên cạnh đó, phát triển các thói quen tốt và hướng trẻ chơi những trò chơi có ích cho sức khỏe.\r\n\r\n&nbsp;\r\n\r\n<strong>C. Bảo vệ trí não</strong>\r\n\r\n&nbsp;\r\n\r\nBảo vệ trí não tức là tạo điều kiện cho óc trẻ phát triển. Trẻ chỉ có thể phát huy được khả năng học tập chỉ khi được phát triển trong môi trường an toàn, không bị la mắng hoặc đánh đập. Hãy để cho trẻ thấy gia đình là nơi có không khí yên bình, công bằng, không có ai bị lấn áp. Tạo cho trẻ một môi trường sống “không có sự đe dọa”, “không có lo âu” và những trận “đấu võ mồm”.\r\n\r\n&nbsp;\r\n\r\n<strong>D. Phát triển trí não</strong>\r\n\r\n&nbsp;\r\n\r\nDạy cho trẻ các qui luật tự nhiên và các chuẩn mực đạo đức như:\r\n\r\n&nbsp;\r\n\r\n* Chơi trò chơi đòi hỏi trẻ phải động não và dạy trẻ đọc, viết, làm các phép tính...\r\n\r\n&nbsp;\r\n\r\n* Nghi thức và kỹ năng giao tiếp, cách cư xử, các chuẩn mực đạo đức.\r\n\r\n&nbsp;\r\n\r\n* Quy tắc, cách hình thành lòng tin ở trẻ và các phong tục văn hóa.\r\n\r\n&nbsp;\r\n\r\n<strong>E. Bảo vệ tinh thần</strong>\r\n\r\n&nbsp;\r\n\r\nChe chở tinh thần tức là bảo vệ tinh thần còn non yếu của trẻ. Hãy cho trẻ cảm nhận được rằng chúng đang sống trong một môi trường êm ấm, được mọi người quan tâm, thương yêu bằng cách nựng nịu, âu yếm, ôm ấp trẻ, khuyến khích và động viên tinh thần,…\r\n\r\n&nbsp;\r\n\r\n<strong>F. Phát triển cảm xúc</strong>\r\n\r\n&nbsp;\r\n\r\nTạo cho trẻ có cơ hội thể hiện sự yêu thương, quan tâm và giúp đỡ mọi người bằng cách biết chăm sóc người khác, giúp đỡ ông bà. Bày tỏ sự cảm thông và lòng trắc ẩn đối với người lớn, trẻ nhỏ, những người ốm đau, bệnh tật…\r\n\r\n&nbsp;\r\n\r\n<strong>CÁC KIỂU MẪU, PHƯƠNG PHÁP, TRIẾT LÝ, GIÁO DỤC VÀ THỰC TIỄN NUÔI DẠY TRẺ THEO KIỂU TRUYỀN THỐNG</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/day-kieu-truyen-thong.jpg"><img class="alignnone size-medium wp-image-210" src="http://unix.vn/home/wp-content/uploads/2012/03/day-kieu-truyen-thong-300x211.jpg" alt="" width="300" height="211" /></a>\r\n\r\n<em>“Mô hình luật giao thông”</em>\r\n\r\n&nbsp;\r\n\r\nĐây là phương thức mang tính hướng dẫn. Bố mẹ dạy cho trẻ biết cách cư xử như thế nào, tức họ dạy trẻ luật cư xử giống như cách họ tuân thủ luật giao thông. Nhưng không phải tất cả bọn trẻ đều lắng nghe và hiểu những điều bố mẹ chúng dạy bảo (ví dụ: một đứa trẻ ở độ tuổi thiếu niên, bố mẹ đã bảo chúng cả nghìn lần rằng ăn cắp là điều xấu nhưng chúng vẫn làm). Việc bố mẹ dạy trẻ những điều hay lẽ phải không phải là sai, nhưng vấn đề ở đây là họ xem việc giáo dục trẻ là một vấn đề đơn giản, chỉ áp dụng phương pháp thiển cận mà chưa hoàn thành hết những trách nhiệm khác của mình.\r\n\r\n&nbsp;\r\n\r\n<em>“Mô hình làm sạch vườn”</em>\r\n\r\n&nbsp;\r\n\r\nBố mẹ thừa biết rằng tính cách của trẻ có mặt tốt cũng có những mặt xấu nhưng họ lúc nào cũng muốn loại bỏ những mặt xấu. Vấn đề tồn tại trong phương pháp giáo dục này là bố mẹ chỉ luôn chỉ trích những lỗi lầm của trẻ hơn là ngợi khen mỗi khi chúng đạt được thành tích gì tốt. Đây là phương pháp nếu áp dụng cả đời thì họ cũng không thể gặt hái được thành công.\r\n\r\n&nbsp;\r\n\r\nTheo nhà triết học S.Soloveychik: “Cả hai phương pháp giáo dục trên đều rất nguy hiểm. Bởi vì nếu theo chiều hướng này, bố mẹ sẽ không ngừng tranh cãi với trẻ, từ đó dẫn đến mối quan hệ giữa hai bên ngày càng xấu đi và tất cả những cố gắng của họ trong việc giáo dục trẻ đều trở nên vô nghĩa. Hơn nữa họ cũng không biết tại sao điều đó lại xảy ra?”\r\n\r\n&nbsp;\r\n\r\n<em>“Mô hình thưởng và phạt”</em>\r\n\r\n&nbsp;\r\n\r\nPhương pháp dạy trẻ này rất phổ biến. Dựa trên nguyên lý: bố mẹ sẽ ngợi khen hoặc thưởng cho trẻ những phần quà nếu chúng làm tốt và ngược lại chúng sẽ bị phạt đòn, la mắng hoặc khiển trách. Phương pháp này tương đối dễ và sẽ có hiệu quả nếu được áp dụng thường xuyên bởi vì trong đầu trẻ sẽ hình thành tư tưởng về sự công bằng. Nhưng khi thực tế cuộc sống không giống như cách trẻ được giáo dục thì sẽ làm chúng mất đi niềm tin về sự công bằng. Theo nhà triết học S.Soloveychik: “ Phương pháp này làm nguy hại đến tương lai của trẻ. Nếu một người được giáo dục theo phương pháp này từ nhỏ đến lớn, khi đối mặt với những khó khăn hoặc lỗi lầm nghiêm trọng trong đời nó sẽ tự chỉ vào mình và hỏi: Tại sao lại là tôi?”.\r\n\r\n&nbsp;\r\n\r\n<strong>CÁC KIỂU MẪU, PHƯƠNG PHÁP, TRIẾT LÝ, GIÁO DỤC VÀ THỰC TIỄN NUÔI DẠY TRẺ THEO KIỂU HIỆN ĐẠI</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/tre-hoc1.jpg"><img class="alignnone size-medium wp-image-211" src="http://unix.vn/home/wp-content/uploads/2012/03/tre-hoc1-300x223.jpg" alt="" width="300" height="223" /></a>\r\n\r\nCác bậc bố mẹ thường áp dụng mô hình “Thưởng &amp; Phạt” để giáo dục trẻ, nhưng hiện nay theo các chuyên gia nghiên cứu quá trình phát triển ở trẻ đều cho rằng giáo dục này không phải là phương pháp mang lại hiệu quả cao. Ở một số quốc gia đã có luật nghiêm cấm việc sử dụng các hình thức như dùng roi đánh trẻ mỗi khi chúng phạm lỗi. Thay vào đó, họ sẽ áp dụng một số phương pháp khác như để trẻ có thời gian tự suy ngẫm, kiểm soát hành vi, cách cư xử của trẻ…\r\n\r\n&nbsp;\r\n\r\n<strong>Một số ví dụ về mô hình giáo dục trẻ theo phương pháp hiện đại:</strong>\r\n\r\n&nbsp;\r\n\r\n- Khuyến khích sự tò mò của trẻ: Đây là mô hình gia đình mà trẻ em được khuyến khích khám phá môi trường xung quanh cùng với sự theo dõi và hướng dẫn của bố mẹ.\r\n\r\n&nbsp;\r\n\r\n- Người cha nghiêm khắc: Mô hình này đặt nặng vấn đề kỷ luật như là phương tiện để tồn tại và phát triển trong một thế giới khắc nghiệt.\r\n\r\n&nbsp;\r\n\r\n- Giáo dục theo cách mềm mỏng: Mô hình này chủ yếu là tạo mối quan hệ tình cảm gắn bó, tránh sử dụng roi đòn đối với trẻ. Tìm hiểu để biết thêm về các nhu cầu tình cảm ở trẻ.\r\n\r\n&nbsp;\r\n\r\n- Chăm sóc trẻ thật cẩn thận: Những bậc bố mẹ áp dụng phương pháp này đều nhận thấy rằng khen ngợi làm cho trẻ bị lôi cuốn còn đòn roi chỉ có hại thêm cho trẻ mà thôi, và vì vậy mà họ tìm những cách thức giáo dục khác để có thể đạt được sự hòa hợp với trẻ.\r\n\r\n&nbsp;\r\n\r\n- Triết lý “giáo dục trẻ dành cho tất cả mọi người”: Dựa trên quan điểm đạo đức, triết lý này cho rằng việc nuôi dạy trẻ là quá trình phân tích các điều kiện và phương tiện để nuôi dạy trẻ. Bố mẹ sẽ gặt hái được thành công trong quá trình này nếu như họ có tìm hiểu thế giới nội tâm của trẻ như tìm hiểu cảm nhận, sự hiểu biết và tinh thần của trẻ. Ý niệm trái tim ngụ ý cảm nhận được yêu thương và khả năng giúp đỡ mọi người của trẻ. Ý niệm sự hiểu biết ngụ ý chỉ cách trẻ cư xử và ý niệm tinh thần ngụ ý khát vọng được làm những điều tốt, tránh những hành động cư xử không phải phép và không lấn áp mọi người. Yếu tố cốt lõi của triết lý này là ý niệm về tư chất, ý thức về giá trị và sự công bằng.\r\n\r\n<span style="font-family: Arial, sans-serif;font-size: xx-small">\r\n</span>', 4, NULL),
(38, 'Những điều không nên nói với con', '1. “Nếu con không dừng lại, mẹ sẽ để con lại một mình"\r\n\r\nĐành rằng cha mẹ nói ra điều này không nhằm đe dọa trẻ mà chỉ muốn trẻ hành động theo ý mình.\r\n\r\nTuy nhiên, câu nói có thể làm trẻ sợ và nghĩ rằng cha mẹ không yêu mình. Thay vì cách nói trên, cha mẹ có thể chọn thái độ nhẹ nhàng hơn: “Mẹ đang rất vội. Mẹ cho con chơi nốt lần này nữa. Sau đó chúng ta phải về. Nếu con không nghe lời, lần sau mẹ không cho con đến đây nữa”.\r\n\r\n2. “Mẹ cảm thấy xấu hổ vì con”\r\n\r\nCha mẹ nói câu này vì muốn tạo ra một tâm trạng ăn năn, hối hận ở trẻ với niềm tin rằng: “Nếu cảm thấy xấu hổ và có cảm giác tội lỗi, trẻ sẽ thay đổi hành vi”.\r\n\r\nTuy nhiên, cha mẹ lặp đi lặp lại câu nói này sẽ khiến trẻ tự ti vì mình làm cái gì cũng sai, cũng để cha mẹ phiền lòng. Trẻ không còn tin vào năng lực bản thân trước khi làm bất cứ việc gì. Nếu cha mẹ không muốn con dần mất tự tin, đừng nên dùng câu nói trên.\r\n<p align="center"></p>\r\n3. “Mẹ không muốn có con”\r\n\r\n“Mẹ ước không bao giờ có con”, “Nếu được làm lại một lần nữa, mẹ sẽ không bao giờ sinh con ra” là những cách nói nặng nề nhất đối với những đứa trẻ - bất kể bạn nói với chúng bằng thái độ nào, giọng nói nào.\r\n\r\nLời nói của bạn có thể làm tổn thương tâm hồn ngây thơ của trẻ một cách nghiêm trọng. Chúng sẽ không hiểu rằng bạn bực tức nên mới nói thế, chúng sẽ cho rằng bạn không hề yêu chúng, có chúng là ngoài mong muốn của bạn. Điều đó không chỉ làm cho bạn và con ngày càng xa nhau mà còn khiến con luôn tự ti, không ý thức được giá trị của mình khi được sinh ra trên đời.\r\n\r\n4. “Cha mẹ ly hôn vì con đấy!”\r\n\r\nKhông bao giờ con cái lại là lý do để cha mẹ chia tay. Đừng dồn gánh nặng tâm lý lên con. Cha mẹ chia tay đã là một nỗi buồn, nỗi mất mát con cái phải gánh chịu. Khi con yêu cầu bạn giải thích cho chúng lý do vì sao cha mẹ chia tay, nếu con chưa đủ lớn đến hiểu được lý do, hãy nợ chúng một lời giải thích. Đừng vì trả lời cho xong mà nói rằng “con là lý do khiến cha mẹ chia tay”. Bởi như thế, con bạn sẽ luôn ăn năn, hối lỗi: “Nếu mình khác đi, nếu mình ngoan hơn, cha mẹ đã không chia tay”. Cảm giác tội lỗi làm gia đình ly tán sẽ là một vết thương trẻ mang theo suốt đời.\r\n\r\n5. “Để mẹ làm cho”\r\n\r\nCó đôi khi “để đó mẹ làm cho”, “cái đó con không làm được đâu” là câu cửa miệng của cha mẹ. Những câu nói này không thể khuyến khích con tính tự lập. Lâu dần thành thói quen, trẻ sẽ ỷ lại vào người khác, tự ti về bản thân mình. Bạn có thể làm hộ con 1-2 lần, nhưng nếu sang lần thứ 3 thì bạn đã hình thành cho đứa trẻ một thói quen nhờ cậy người khác rồi đấy.\r\n\r\n6. “Lý do ư? Đơn giản vì mẹ nói như thế!”\r\n\r\nCâu nói trên với một thông điệp ngầm nhưng hoàn toàn rõ rằng: “Mẹ là người có quyền ra lệnh, còn con có nghĩa vụ phải nghe theo”.\r\n\r\nRa lệnh kiểu như vậy, bạn chỉ bắt trẻ phục tùng một cách miễn cưỡng chứ không tâm phục khẩu phục. Trẻ sẽ cảm thấy thiếu công bằng, thấy cha mẹ quá độc đoán và không tôn trọng con.', 4, NULL),
(39, '"Đo" khả năng thành tài của con bạn', '&nbsp;\r\n<div>\r\n<div align="right">\r\n<table width="1" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="60"></td>\r\n<td></td>\r\n<td></td>\r\n<td></td>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\nNgày nay, các chuyên gia tâm lý và giáo dục cho rằng, ngoài thành tích học tập ở nhà trường, để thành công trong cuộc đời sau này, trẻ còn phải là con người lạc quan, tự tin và đó cũng là một trong những mục tiêu hàng đầu của giáo dục gia đình.\r\n\r\nĐánh giá "chỉ số cảm xúc" (emotional quotien, hay EQ) của trẻ đang được sử dụng nhiều và được coi là chỉ số báo hiệu đáng tin cậy nhất cho sự thành công trong tương lai của trẻ. Những chỉ số này dự báo trẻ có những phẩm chất để tự hoàn thiện và ý chí phấn đấu để đạt được những mục tiêu trong đời hay không.\r\n\r\nTác giả của phương pháp trắc nghiệm cảm xúc này là Daniel Goleman với tác phẩm có tên là "Thông tuệ về cảm xúc: Tại sao lại có ý nghĩa hơn chỉ số thông minh" đã chứng minh rằng "những trẻ biết đánh giá bản thân, hiểu tâm lý của những người xung quanh, biết thích nghi với hoàn cảnh, linh hoạt, tự tin là những trẻ dễ thành đạt".\r\n\r\n<img src="http://www.eva.vn/upload/3-2011/images/2011-09-19/1316395038-day-con-thanh-tai.jpg" alt="''Đo'' khả năng thành tài của con bạn - 1" width="425" height="283" />\r\n<span><em>Ngoài khả năng học tập, trẻ cần nhiều tiêu chí để thành công. (Ảnh minh họa).</em></span>\r\n\r\nChỉ số cảm xúc càng cao thì trẻ càng được trang bị tốt hơn để ứng phó với những trạng thái tâm lý của mình, những lựa chọn khó khăn trong đời sống hay trong học tập và sau này với những hoàn cảnh không thuận lợi trong công việc.\r\n\r\nTại sao lại như vậy? Vì hiểu biết khoa học còn dễ dạy hơn kỹ năng làm người. Những trẻ có chỉ số cảm xúc cao, biết ứng xử tốt hơn trong các mối quan hệ ở nhà trường và xã hội, do đó thành công hơn. Như vậy là dạy cho trẻ biết xử lý một cách có kết quả những cảm xúc của chính mình và của những người khác đem lại cho trẻ một phương tiện cần thiết để phát triển và làm phong phú thêm trong cuộc đời hoạt động của chúng sau này.\r\n\r\nTiến sĩ Maurice Elias, đồng tác giả của tác phẩm "Thông tuệ về cảm xúc của các bậc cha mẹ: Làm thế nào để xây dựng ý thức kỷ luật với bản thân, ý thức trách nhiệm, kỹ năng xã hội cho trẻ?" đã đưa ra một bộ câu hỏi trắc nghiệm đơn giản có thể giúp đánh giá chỉ số cảm xúc của trẻ và của chính cha mẹ.\r\n\r\n<strong>Bạn hãy trả lời những câu hỏi sau đây và cho điểm:</strong>\r\n\r\nĐiểm 1: Hiếm hoặc không đúng.\r\n\r\nĐiểm 2: Đôi khi hoặc gần đúng.\r\n\r\nĐiểm 3: Thường xảy ra hoặc hoàn toàn đúng.\r\n\r\n<strong>Những câu hỏi dành cho trẻ:</strong>\r\n\r\n<em>- </em>Trẻ có dễ dàng nói về cảm xúc của mình không?\r\n\r\n- Trẻ có biết nhiều từ để mô tả cảm xúc của mình?\r\n\r\n- Trẻ có khả năng thông cảm với người khác không?\r\n\r\n- Trẻ có thái độ lạc quan không?\r\n\r\n<img src="http://www.eva.vn/upload/3-2011/images/2011-09-19/1316395038-phat-trien-iq-cho-tre.jpg" alt="''Đo'' khả năng thành tài của con bạn - 2" width="425" height="352" />\r\n<span><em>Trẻ nhanh nhẹn, lạc quan thì khả năng thành công cao hơn. (Ảnh minh họa).</em></span>\r\n\r\n- Trẻ có kiên nhẫn chờ đợi một người nào đó mà trẻ đang cần gặp không?\r\n\r\n- Trẻ có mục tiêu phù hợp với lứa tuổi và một vài ý nghĩ để đạt được những mục tiêu đó không?\r\n\r\n- Trẻ có biết giải quyết khó khăn một cách độc lập không?\r\n\r\n- Trẻ có chăm chú nghe không?\r\n\r\n- Trẻ có biết đang cần gì và biết yêu cầu như thế nào không?\r\n\r\n- Trẻ có biết sống hoà hợp trong nhóm bạn cùng lứa không?\r\n\r\n<strong>Những câu hỏi cho cha mẹ:</strong>\r\n\r\n- Bạn có cảm xúc như thế nào trong phần lớn thời gian của bạn không (vui, buồn, chán nản, hận thù, đố kỵ...)?\r\n\r\n- Bạn có thử hiểu quan điểm của người khác ngay cả khi đang tranh luận không?\r\n\r\n- Bạn có cách nhìn lạc quan và tin tưởng vào cuộc đời không?\r\n\r\n- Bạn có thường xuyên chia sẻ cảm xúc của mình với người khác không?\r\n\r\n- Bạn có kiểm soát được tính khí của bạn ngay cả khi căng thẳng không?\r\n\r\n- Bạn có mục tiêu và kế hoạch để hoàn thành những mục tiêu đó không?\r\n\r\n- Bạn có biết chăm chú nghe như thế nào và nhắc lại được những điều vừa nói không?\r\n\r\n- Bạn có cân nhắc mọi khả năng trước khi đi đến quyết định không?\r\n\r\n- Bạn có biết cần phải suy nghĩ về những nhu cầu của mình như thế nào và thực hiện những nhu cầu đó không?\r\n\r\n- Bạn có thời gian để vui đùa với những người bạn yêu mến không?\r\n\r\n<strong>Cộng điểm: Tổng số điểm có thể áp dụng cho cả bạn và con bạn.</strong>\r\n\r\n<em>25 điểm trở lên: </em>Chỉ số cảm xúc thuộc loại ưu. Thông tuệ cảm xúc như vậy làm tươi sáng cuộc sống của bản thân và của cả những người xung quanh. Hãy cố gắng duy trì lối sống đó.\r\n\r\n<em>16 - 24:</em> Cũng tốt nhưng đừng dừng lại và thỏa mãn, hãy cố gắng để hoàn thiện mình.\r\n\r\n<em>10 - 15:</em> Đáng phàn nàn, cần rèn luyện để nâng cao chỉ số cảm xúc của mình.\r\n<p style="text-align: right">Nguồn: <a href="http://www.eva.vn/lam-me/do-kha-nang-thanh-tai-cua-con-ban-c10a75641.html">http://www.eva.vn/lam-me/do-kha-nang-thanh-tai-cua-con-ban-c10a75641.html</a></p>\r\n\r\n</div>', 4, NULL),
(40, '"Dẫn lối" thành công khi nuôi dạy con', '<strong>5 bí kíp dưới đây sẽ giúp bạn giảm căng thẳng và nhàn hạ hơn khi làm cha mẹ.</strong>\r\n\r\nKhi thấy những đứa trẻ hoạt bát nhưng cũng rất ngoan ngoãn và lễ phép, bạn có bao giờ tự hỏi bố mẹ chúng đã nuôi dưỡng chúng như thế nào chưa?\r\n\r\nLàm cha mẹ, khó tránh khỏi những áp lực và mâu thuẫn trong khi nuôi dạy con. 5 <strong>bí quyết nuôi dạy con</strong> dưới đây sẽ giúp bạn giảm phần nào đó căng thẳng và nhàn hạ hơn khi làm cha mẹ.\r\n\r\n<strong>1.     Sự nhất quán</strong>\r\n\r\nDạy trẻ tối kỵ việc ‘nói một đằng, làm một nẻo’. Vì vậy, khi đã hứa điều gì đó với con trẻ, cha mẹ cần cố gắng thực hiện đúng. Liên tục ra ‘luật’ mới sẽ khiến trẻ rối trí và không hiểu được chính xác việc mình cần làm và nên làm là gì. Cần giúp trẻ hiểu những nguyên tắc cơ bản trong gia đình mà chúng phải tuân theo. Và người lớn trong gia đình không được ‘trống đánh xuôi, kèn thổi ngược’ để tránh việc trẻ có thể bị nhầm lẫn với những thông điệp khác nhau.\r\n\r\n<img src="http://www.eva.vn/upload/1-2012/images/2012-02-13/1329122658-biquyetnuoidaycon5.jpg" alt="''Dẫn lối'' thành công khi nuôi dạy con - 1" />\r\n<span><em>Khi phạt trẻ, cha mẹ cần có sự nghiêm túc. (Ảnh minh họa).</em></span>\r\n\r\n<strong>2.    Thói quen</strong>\r\n\r\nCó câu ‘thói quen nói lên nhân cách’, muốn con ngoan thì cha mẹ cần uốn nắn càng sớm càng tốt. Thói quen tốt như: ngủ đúng và đủ giấc, ăn đúng giờ, hạn chế ăn vặt... sẽ giúp trẻ có sức khỏe ổn định, có thời gian học tập và vui chơi hợp lý. Đồng thời, cha mẹ cũng không phải cuống cuồng, căng thẳng vì lo cho con.\r\n\r\n<strong>3.    Ranh giới</strong>\r\n\r\n‘Ra luật’ với trẻ chính là chìa khóa thành công trong việc nuôi dạy trẻ thành tài. Hãy đưa ra những ranh giới rõ ràng để chứng tỏ quyền hạn của người lớn với trẻ và để cho trẻ hiểu rằng nơi nào, lúc nào là cần phải làm việc gì. Nếu muốn con trẻ khi lớn lên sống không dựa dẫm, biết tự lập thì đừng tạo ra cho trẻ quá nhiều chọn lựa khiến trẻ ‘kén cá, chọn canh’ và không dứt khoát.\r\n\r\n<img src="http://www.eva.vn/upload/1-2012/images/2012-02-13/1329122658-biquyetnuoidaycon4.jpg" alt="''Dẫn lối'' thành công khi nuôi dạy con - 2" width="500" height="334" />\r\n<span><em>Hãy giúp trẻ hiểu rằng có những giới hạn, trẻ buộc phải tuân theo. (Ảnh minh họa).</em></span>\r\n\r\n<strong>4.    Sự kiềm chế</strong>\r\n\r\nBiết tiết chế cơn giận, bình tĩnh kiểm soát mọi việc và không đối xử ''độc tài'' với con... là những điều mà nhiều bậc phụ huynh đã biết nhưng để làm được lại không dễ. Khi sắp nổi ''sân si'' với con, bạn có thể nhắm mắt lại và hít thở thật sâu, hoặc đếm ngược từ 10, hoặc lảng sang chuyện khác... Hãy nhớ, đừng làm lớn chuyện với những gì không thay đổi ngay được.\r\n\r\nNgoài ra, ngay cả khi khen thưởng trẻ cũng cần phải kiềm chế, vì khen thưởng sẽ mất đi tác dụng nếu trẻ đã nghe nhàm tai và cũng khó để trẻ tin rằng cha mẹ thực lòng khen ngợi chúng.\r\n<strong>5.    Thư giãn</strong>\r\n\r\nDành thời gian gần gũi, cùng chơi với con giúp tình mẫu tử/phụ tử thêm gắn kết hơn. Những lời nói nựng nịu, âu yếm hay những cái thơm vào má... là ''thần dược'' đối với sự phát triển tinh thần của trẻ nhỏ. Hãy tiếp cận từng giai đoạn phát triển của trẻ (ví dụ như tập ngồi bô) với một thái độ cởi mở và dễ chịu, bởi vì nếu bạn luôn căng thẳng, trẻ sẽ nhận ra ngay.\r\n\r\nKhông kém phần quan trọng, thỉnh thoảng phải tự cho mình những giây phút xả hơi, nghỉ ngơi giải trí với vợ/chồng mà không mang theo con - sự nghỉ ngơi này sẽ đem lại nhiều thay đổi tích cực không ngờ đấy !\r\n<p style="text-align: right"><em>Nguồn:<a href="http://eva.vn"> www.eva.vn</a></em></p>', 4, NULL),
(41, 'Giúp trẻ phát triển chiều cao tối ưu', '<div>\r\n\r\nNhằm giúp trẻ có một chiều cao cân đối và một thể lực dẻo dai, phụ huynh cần lưu ý những yếu tố ảnh hưởng trực tiếp trên sự phát triển chiều cao của con trẻ để có những hỗ trợ tích cực.\r\n\r\nNhững yếu tố ảnh hưởng\r\n\r\nDinh dưỡng: đây là yếu tố góp phần đến 31% sự phát triển chiều cao của trẻ. Để giúp trẻ có được chiều cao tối ưu cần có sự cân đối về chế độ dinh dưỡng sao cho hợp lý nhất để trẻ có thể có một sức khỏe dẻo dai, một thân hình lý tưởng và sức đề kháng tốt. Một chế độ dinh dưỡng khoa học cần có sự góp mặt của tinh bột, chất béo, chất đạm, các vitamin, nhất là vitamin C, khoáng chất và các chất xơ từ chính nguồn rau xanh và trái cây tươi. Đặc biệt, trong đó chất đạm (protein) tham gia vào việc hình thành các tế bào, tăng cường hệ thống miễn dịch, canxi tạo độ chắc khỏe cho xương và răng, vitamin D giúp chuyển hóa hiệu quả canxi và phốt pho trong cơ thể.\r\n\r\n&nbsp;\r\n<table cellspacing="5" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div>\r\n<div><img src="http://img.suckhoedoisong.vn/Images/Uploaded/Share/2011/05/27/d18giup-tre-phat-trien-chieu-cao-toi-uu.jpg" alt="" width="400" /></div>\r\n</div>\r\n<div> Dinh dưỡng là yếu tố góp 31% sự phát triển chiều cao của trẻ</div></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\nDi truyền: góp phần quyết định chiều cao tương lai của trẻ tới 23%. Nghiên cứu cho thấy, bố mẹ có chiều cao lý tưởng thì con cái sinh ra có chiều cao rất khả quan. Cụ thể nếu bố mẹ cao, chiều cao của con cái sẽ theo tỷ lệ 3:1(cơ hội cao là 3, thấp là 1). Tuy nhiên nếu bố mẹ có chiều cao khiêm tốn, đừng quá lo lắng về chiều cao của trẻ vì ngoài yếu tố di truyền, yếu tố dinh dưỡng và môi trường sống cũng có một tác động rất lớn lên sự phát triển chiều cao của trẻ.Vận động thể lực và giấc ngủ: quyết định sự tăng trưởng chiều cao khoảng 20%. Ngay cả khi trẻ còn nhỏ, cần rèn cho trẻ thói quen luyện tập một cách đều đặn để có thể đảm bảo cho cơ và xương phát triển một cách tối đa. Có rất nhiều hình thức luyện tập, phụ huynh và trẻ hãy cùng chọn ra một môn thể thao ưa thích và hợp với sức của trẻ nhất như bơi lội, đá bóng, khiêu vũ, đạp xe đạp...\r\n\r\nNgủ đủ và đúng giờ quy định để tối ưu hóa chiều cao cho trẻ. Cần quan tâm đến quá trình hình thành của một loại hormone có tên là somatotropin. Hormone này nắm giữ vai trò quan trọng trong việc tạo nên các tế bào sụn (các tế bào sụn này tham gia tích cực vào việc tăng chiều dài của các xương như xương tay, xương chân…). Bên cạnh đó somatotropin cũng kích thích cơ thể sản sinh thêm một loại hormone có tên gọi là somatomedin. Hormon này giúp tăng trưởng chiều cao khoảng một giờ ngay sau khi trẻ bắt đầu giấc ngủ. Đây là lý do tại sao trẻ em nên ngủ đều đặn và đúng giờ quy định.\r\n\r\nBa giai đoạn quan trọng\r\n\r\nTrong việc phát triển chiều cao của trẻ có 3 giai đoạn quan trọng đó là:\r\n\r\n- Giai đoạn trong bào thai: trong thời gian mang thai, nếu người mẹ có chế độ dinh dưỡng tốt, người mẹ tăng cân từ 10 - 15kg thì trẻ sinh ra sẽ đạt chiều cao là 50cm và nặng từ 3kg trở lên.\r\n\r\n- Giai đoạn sơ sinh đến 3 tuổi: 12 tháng đầu trẻ tăng 25cm; 2 năm tiếp theo mỗi năm trẻ cao thêm 10cm nếu được nuôi dưỡng tốt.\r\n\r\n- Giai đoạn dậy thì: bình thường bé gái từ 10 - 16 tuổi và bé trai từ 12 – 18 tuổi. Trong giai đoạn này, có 1 - 2 năm chiều cao trẻ tăng vọt từ 8 - 12cm mỗi năm nếu được nuôi dưỡng tốt. Thực tế không thể biết chính xác năm đó là năm nào, nên vẫn phải đảm bảo dinh dưỡng tốt cho trẻ trong suốt thời gian này. Sau thời kỳ dậy thì, cơ thể trẻ cũng tăng chiều cao nhưng với tốc độ rất chậm rồi ngưng hẳn ở khoảng độ tuổi 22 đối với nữ và 25 tuổi đối với nam. Người ta thường ước tính chiều cao của trẻ khi trưởng thành sẽ gấp đôi chiều cao lúc 2 tuổi (chẳng hạn lúc 2 tuổi trẻ cao 82cm, khi lớn sẽ cao 164cm). Hoặc chiều cao lúc trưởng thành bằng chiều cao lúc 10 tuổi nhân với 1,25 (ví dụ khi 10 tuổi trẻ cao 140cm thì lúc trưởng thành sẽ cao 175cm).\r\n\r\nDấu hiệu gợi ý con trẻ của bạn đang có vấn đề về phát chiều cao:\r\n\r\n- Trong một năm chiều cao của trẻ phát triển không quá 4cm.\r\n\r\n- Chiều cao hiện tại của trẻ thấp hơn khoảng 10cm so với chiều cao trung bình của các bạn cùng trang lứa. Khi trẻ mắc phải một trong các vấn đề này, tốt nhất bạn nên nhờ sự hỗ trợ và tư vấn của bác sĩ chuyên khoa.\r\n<p align="right">ThS.BS. ĐINH THẠC</p>\r\n<p align="right"><em>Nguồn: <a href="http://suckhoedoisong.vn">www.suckhoedoisong.vn</a></em></p>\r\n\r\n</div>', 4, NULL),
(42, 'Video về trường Ams', '<strong>20 năm trường Ams:</strong>\r\n\r\nhttp://www.youtube.com/watch?v=g78aUqko-vQ\r\n\r\n&nbsp;\r\n<div></div>\r\n<strong>Amsers dancing:</strong>\r\n\r\nhttp://www.youtube.com/watch?v=9oRT-2E2plM\r\n\r\n&nbsp;\r\n<div></div>\r\n<strong>Giới thiệu trường Ams:</strong>\r\n\r\nhttp://www.youtube.com/watch?v=5XDkB0QRMwc', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unix_tintuc`
--

CREATE TABLE IF NOT EXISTS `unix_tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(2000) NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  PRIMARY KEY (`tintuc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_tintuc`
--

INSERT INTO `unix_tintuc` (`tintuc_id`, `tieude`, `alias`, `noidung`, `ngaythang`) VALUES
(1, 'Đội tàu Trung Quốc tới Trường Sa', 'doi-tau-trung-quoc-toi-truong-sa', '<p>Tân Hoa Xã hôm qua đưa tin đội tàu hải giám khởi hành từ thành phố Tam Á, tỉnh Hải Nam hôm 26/6 đi vào Biển Đông. Các tàu này tới đảo Châu Viên (người Trung Quốc gọi là đảo Hoa Dương). Theo kế hoạch, nhóm tàu sẽ thực hiện hành trình 4.500 km trong chiến dịch tuần tra.</p>\r\n<p>Sự hiện diện của đội tàu hải giám Trung Quốc tại quần đảo Trường Sa diễn ra trong bối cảnh Tổng công ty dầu khí hải dương Trung Quốc (CNOOC) vừa ngang nhiên chào thầu quốc tế tại 9 lô dầu khí tại vùng đặc quyền kinh tế và thềm lục địa của Việt Nam, một hành động mà người phát ngôn Bộ Ngoại giao Việt Nam Lương Thanh Nghị khẳng định là “phi pháp và không có giá trị.”</p>', '2012-07-02'),
(2, 'Hoa Ưu Đàm Bà La khai nở lần thứ 2 tại Hải Phòng- Việt Nam', 'hoa-uu-dam-ba-la-khai-no-lan-thu-2-tai-hai-phong', '<p>Vào ngày 22 tháng 5 năm 2012, loài hoa Ưu Đàm Bà La trong Thần thoại đã được phát hiện khai nở  tại Quán Toan- Hải Phòng -Việt Nam; trong ngôi nhà một học viên môn tu luyện Pháp Luân Công (hay còn gọi là Pháp Luân Đại Pháp_là một môn tu luyện thuộc Phật Gia độc đáo mới xuất hiện từ năm 1992 _tu là tu sửa tâm tính dựa theo nguyên lý Chân-Thiện-Nhẫn và luyện là tập theo 5 bài công pháp đơn giản, dễ học). Trước đó, hoa Ưu Đàm Bà La được phát hiện khai nở trên chuông đồng tại Đền Tràng Kênh-Hải Phòng vào ngày 3 tháng 5 năm 2012. Theo truyền thuyết của Đức Phật Thích Ca Mâu Ni, hoa Ưu Đàm Bà La khai nở báo hiệu điềm lành Đức Chuyển Luân Thánh Vương đã hạ thế hồng Pháp độ nhân qua kiếp nạn, chư Thần  chư Phật trên thiên giới cũng hạ phàm để được nghe Pháp của ngài.</p>\r\n', '2012-07-02');

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
