-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2012 at 08:47 PM
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
('homepage', '1'),
('dangky', '1');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-06-27 20:08:16', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

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
('fa1690b0b52560bc443e3178c76ee238', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5', 1340822795, 'a:11:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-06-27 20:08:05";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_camnhan`
--

INSERT INTO `unix_camnhan` (`camnhan_id`, `noidung`, `ngaythang`, `nguoidang`) VALUES
(1, 'Nằm trong số những sinh viên ưu tú tham gia buổi gặp gỡ này, "cô bé trà sữa" Chương Chiết Thiên chia sẻ: "Được học tại một trường tốt như Đại học Thanh Hoa: vừa tràn ngập không khí học tập, lại vừa giúp sinh viên theo đuổi mọi sở thích và đam mê, quả thực rất tuyệt vời." Căng-tin chính là nơi ăn uống mà chị ấy yêu thích nhất ở trường.\r\n', '2012-06-07', 'HoaHM'),
(2, 'Xuất hiện tại buổi giới thiệu về thông tin tuyển sinh năm học 2012 của trường Đại học Thanh Hoa, cô bé trà sữa Chương Chiết Thiên lại một lần nữa khiến cư dân mạng ngây ngất bởi vẻ xinh xắn, trong sáng và hồn nhiên.\r\n\r\nNgay sau khi kì thi tốt nghiệp cấp 3 ở Trung Quốc kết thúc, đại diện lãnh đạo trường Đại học Thanh Hoa cùng các sinh viên ưu tú đang theo học tại trường đã có buổi giới thiệu về thông tin tuyển sinh năm học 2012 của Đại học Thanh Hoa (1 trong những trường đại học hàng đầu ở Trung Quốc).\r\n\r\nNằm trong số những sinh viên ưu tú tham gia buổi gặp gỡ này, "cô bé trà sữa" Chương Chiết Thiên chia sẻ: "Được học tại một trường tốt như Đại học Thanh Hoa: vừa tràn ngập không khí học tập, lại vừa giúp sinh viên theo đuổi mọi sở thích và đam mê, quả thực rất tuyệt vời." Căng-tin chính là nơi ăn uống mà chị ấy yêu thích nhất ở trường.', '2012-06-14', 'Hoa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_dangky`
--

INSERT INTO `unix_dangky` (`dangky_id`, `hoten`, `truong`, `lop`, `phuhuynh`, `dienthoai`) VALUES
(1, 'Ho Minh Hoa', 'Đại Học FPT', 'SE0210', 'Private', '0979120018'),
(2, 'Ho Minh Hoa 2', 'Cali', 'MBA', 'Top secret', '0979120039');

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
(1, '<li><strong>1. Giới thiệu c&ocirc;ng ty Unix:</strong></li>\r\n<ul>\r\n<li>C&ocirc;ng ty cổ phần Unix được th&agrave;nh lập bởi c&aacute;c doanh nh&acirc;n v&agrave; chuy&ecirc;n gia đ&agrave;o tạo nhiều kinh nghiệm đến từ nhiều đơn vị gi&aacute;o dục kh&aacute;c nhau. Ch&uacute;ng t&ocirc;i muốn tạo n&ecirc;n một c&aacute;i t&ecirc;n mới với mục ti&ecirc;u gi&uacute;p cho kh&aacute;ch h&agrave;ng được tiếp cận với những chương tr&igrave;nh đ&agrave;o tạo chất lượng nhất.</li>\r\n</ul>\r\n<li><strong>2. Khi tham gia c&aacute;c kh&oacute;a học do c&ocirc;ng ty Unix tổ chức học vi&ecirc;n sẽ được:</strong></li>\r\n<ul>\r\n<li>- Đ&agrave;o tạo v&agrave; huấn luyện theo những phương ph&aacute;p đ&agrave;o tạo mới nhất v&agrave; đang được &aacute;p dụng hiệu quả tr&ecirc;n thế giới.</li>\r\n<li>- Khơi nguồn cảm hứng v&agrave; c&oacute; những nguồn động lực mạnh mẽ khi tham gia kh&oacute;a học.</li>\r\n<li>- Được đ&agrave;o tạo v&agrave; huấn luyện bởi những giảng vi&ecirc;n, chuy&ecirc;n gia đ&agrave;o tạo tốt nhất.</li>\r\n<li>- Lu&ocirc;n tạo n&ecirc;n những hiệu quả vượt trội sau khi tham gia chương tr&igrave;nh.</li>\r\n</ul>\r\n<li><strong>3. Diễn giả, chuy&ecirc;n gia đ&agrave;o tạo:</strong></li>\r\n<ul>\r\n<li>- Những gi&aacute;o vi&ecirc;n, diễn giả, chuy&ecirc;n gia đ&agrave;o tạo được c&ocirc;ng ty Unix mời tham gia giảng dạy lu&ocirc;n l&agrave; những người kh&ocirc;ng chỉ c&oacute; chuy&ecirc;n m&ocirc;n vững v&agrave;ng , d&agrave;y dạn kinh nghiệm m&agrave; điều quan trọng nhất l&agrave; họ phải l&agrave; người tạo ra hiệu quả cao nhất trong học vi&ecirc;n. Ch&iacute;nh v&igrave; lẽ đ&oacute; c&aacute;c diễn giả, chuy&ecirc;n gia đ&agrave;o tạo của c&ocirc;ng ty Unix lu&ocirc;n thường xuy&ecirc;n tham gia c&aacute;c chương tr&igrave;nh đ&agrave;o tạo của c&aacute;c chuy&ecirc;n gia, diễn giả h&agrave;ng đầu tr&ecirc;n thế giới, để kh&ocirc;ng ngừng cập nhật những phương ph&aacute;p đ&agrave;o tạo tốt nhất , n&acirc;ng cao kỹ năng giảng dạy v&agrave; kiến thức chuy&ecirc;n m&ocirc;n.</li>\r\n</ul>\r\n<li><strong>4. Sứ mệnh của Unix education:</strong></li>\r\n<ul>\r\n<li>- Unix education ra đời với một sứ mệnh l&agrave; gi&uacute;p cho mọi người được tiếp cận với những chương tr&igrave;nh đ&agrave;o tạo tốt nhất.</li>\r\n<li><img src="../../../../assets/images/image-test/Chrysanthemum.jpg" alt="" width="1024" height="768" /></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `unix_gioithieu_submenu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unix_gioithieu_submenu`
--

INSERT INTO `unix_gioithieu_submenu` (`submenu_id`, `ten`, `noidung`) VALUES
(1, 'Tầm nhìn', 'Đây là trang tầm nhìn'),
(2, 'Sứ mệnh', 'Đây là trang Sứ mệnh'),
(4, 'HoaHM', '<p>ABCDEF</p>\r\n<p><img src="../../../assets/images/cells.png" alt="" width="243" height="162" /></p>');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `unix_hoithao`
--

INSERT INTO `unix_hoithao` (`hoithao_id`, `tieude`, `noidung`, `thoigian`, `phanhoi`, `anhdaidien`) VALUES
(1, 'Hội thảo: “Chinh phục môn Toán thi vào cấp 2 Hà Nội Amsterdam” dành cho học sinh lớp 4', '', '2012-05-15', '1', 'asean_nhahang_monngon_hotel-150x150.jpg'),
(2, 'Hội thảo dành cho học sinh lớp 4', '', '2012-05-26', '1', '2.gif'),
(3, 'Hội thảo: ” Bứt phá môn Toán thi vào cấp 2 HN Amsterdam”', '', '2012-05-28', '1', '2.gif'),
(4, 'Hội thảo mới', '', '2012-06-12', '1', '');

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
(2, 'Phương pháp đào tạo', 'Hiện tại thầy Phan Quang Điệp được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic Toán Châu Á Thái Bình Dương ..'),
(3, 'Sự kiện', 'Hội thảo:”Bứt phá môn Toán thi vào cấp 2 Hà Nội Amsterdam” ..'),
(4, 'slide', 'assets/unix/images/khoahoc-slide.jpg,assets/unix/images/thuvien-slide.jpg'),
(5, 'images', 'assets/unix/images/slide-bottom/1.jpg,assets/unix/images/slide-bottom/2.jpg,assets/unix/images/slide-bottom/3.jpg,assets/unix/images/slide-bottom/4.jpg,assets/unix/images/slide-bottom/5.jpg'),
(6, 'video', 'http://www.youtube.com/watch?v=5FlQSQuv_mg'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unix_khoahoc`
--

INSERT INTO `unix_khoahoc` (`khoahoc_id`, `tieude`, `mota`, `batdau`, `ketthuc`, `hocphi`, `anhdaidien`, `thoigian`, `doituong`) VALUES
(1, 'Giúp trẻ phát triển chiều cao tối ưu', '', '2012-06-14', '2012-06-14', 1200, '2-150x150.jpg', '0000-00-00', 1),
(2, '“Dẫn lối” thành công khi nuôi dạy con', '', '2012-02-20', '2012-05-08', 1200, 'nuoi_day_con_tre-150x150.jpg', '0000-00-00', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_lienhe`
--

INSERT INTO `unix_lienhe` (`lienhe_id`, `hoten`, `email`, `tieude`, `noidung`) VALUES
(1, 'sdfsdf', 'sdfsdf@dfgdfg.com', 'sdfsdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `unix_loaisach`
--

CREATE TABLE IF NOT EXISTS `unix_loaisach` (
  `loaisach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`loaisach_id`,`tenloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_loaisach`
--

INSERT INTO `unix_loaisach` (`loaisach_id`, `tenloai`, `mota`) VALUES
(1, 'Sách tâm lý', 'Loại sách dành cho lứa tuổi thanh thiếu niên'),
(3, 'Tiểu Thuyết Lá Cải', 'Báo LÁ Cải & Mương 14'),
(4, 'Test 01', 'Test 01 - Demo test'),
(5, 'Just a moment', 'Những tác phẩm đặc biệt nhất mọi thời đại');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(1, 'Học làm giàu', 'Sách dạy làm giàu', 1, 'Ho Minh Hoa'),
(2, 'Kenh14', 'Mương la liếm cho các bạn trẻ năng động', 3, 'Mương 14 ABCDEF'),
(3, 'Như đã dấu yêu', 'Trong đôi mắt anh, em là tất cả :)))) Updated', 1, 'Ai mà biết');

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
