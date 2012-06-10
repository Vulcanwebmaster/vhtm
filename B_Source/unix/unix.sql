-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 12:36 PM
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
('sach', '1');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-06-08 20:51:23', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

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
('72882d287fb58a7e62e09ec927fb4510', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5', 1339322390, ''),
('ef821a2c19ef440d7ce49fd9def706a7', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5', 1339324112, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `unix_gioithieu`
--

INSERT INTO `unix_gioithieu` (`gioithieu_id`, `noidung`) VALUES
(1, '<li><strong>1. Giới thiệu công ty Unix:</strong></li>\r\n<ul>\r\n<li>Công ty cổ phần Unix được thành lập bởi các doanh nhân và chuyên gia đào tạo nhiều kinh nghiệm đến từ nhiều đơn vị giáo dục khác nhau. Chúng tôi muốn tạo nên một cái tên mới với mục tiêu giúp cho khách hàng được tiếp cận với những chương trình đào tạo chất lượng nhất.</li>\r\n</ul>\r\n<li><strong>2. Khi tham gia các khóa học do công ty Unix tổ chức học viên sẽ được:</strong></li>\r\n<ul>\r\n<li>- Đào tạo và huấn luyện theo những phương pháp đào tạo mới nhất và đang được áp dụng hiệu quả trên thế giới.</li>\r\n<li>- Khơi nguồn cảm hứng và có những nguồn động lực mạnh mẽ khi tham gia khóa học.</li>\r\n<li>- Được đào tạo và huấn luyện bởi những giảng viên, chuyên gia đào tạo tốt nhất.</li>\r\n<li>- Luôn tạo nên những hiệu quả vượt trội sau khi tham gia chương trình.</li>\r\n</ul>\r\n<li><strong>3. Diễn giả, chuyên gia đào tạo:</strong></li>\r\n<ul>\r\n<li>- Những giáo viên, diễn giả, chuyên gia đào tạo được công ty Unix mời tham gia giảng dạy luôn là những người không chỉ có chuyên môn vững vàng , dày dạn kinh nghiệm mà điều quan trọng nhất là họ phải là người tạo ra hiệu quả cao nhất trong học viên. Chính vì lẽ đó các diễn giả, chuyên gia đào tạo của công ty Unix luôn thường xuyên tham gia các chương trình đào tạo của các chuyên gia, diễn giả hàng đầu trên thế giới, để không ngừng cập nhật những phương pháp đào tạo tốt nhất , nâng cao kỹ năng giảng dạy và kiến thức chuyên môn.</li>\r\n</ul>\r\n<li><strong>4. Sứ mệnh của Unix education:</strong></li>\r\n<ul>\r\n<li>- Unix education ra đời với một sứ mệnh là giúp cho mọi người được tiếp cận với những chương trình đào tạo tốt nhất.</li>'),
(3, '<p> <b>Welcome to my world :D </b>That is very hard to understand</p>'),
(4, '<p>Hoa test <b>My World is very beautiful :D </b> <i>I love my world </i>That is very hard to understand</p>'),
(5, 'Test <b> Tin giới thiệu </b> \r\n</br>\r\n<u> Demo cho khách hàng </u>\r\n</br>\r\n<i> Dự kiến release vào thứ 2 ngày 28 tháng 5 </i>\r\n</br>\r\n<b><u>Vừa mới thêm vào </u></b>\r\n\r\n1234567'),
(6, '<u><b> Demo Unix cho khách hàng </b></u>\r\n</br>\r\n<i> Dự kiến release vào thứ 2 ngày 28 tháng 5 năm 2012 </i>\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `unix_hoithao`
--

INSERT INTO `unix_hoithao` (`hoithao_id`, `tieude`, `noidung`, `thoigian`, `phanhoi`, `anhdaidien`) VALUES
(1, 'Hội thảo: “Chinh phục môn Toán thi vào cấp 2 Hà Nội Amsterdam” dành cho học sinh lớp 4', '<p>Tham gia chương trình, các em sẽ nhận được:\r\nLàm thế nào để tăng từ 1 đến 2 điểm ngay lập tức bằng chính khả năng học của mình?\r\nLàm thế nào để đạt trên 12/15 điểm chỉ trong 15 đến 20 phút làm bài?\r\nLàm thế nào để có được phong độ làm bài tốt nhất trước khi thi?\r\nTại sao nhiều học sinh có sức học tốt nhưng vẫn không có được kết quả như mong muốn?\r\nKì thi vào cấp 2 trường Hà Nội Amsterdam được coi là như là một trong những kỳ thi khó nhất đối với các học sinh tiểu học. Kỳ thi này không chỉ là một cuộc tuyển chọn, nó còn là cơ hội để các em học sinh phấn đấu nỗ lực và nâng cao khả năng học tập của mình.\r\nĐặc biệt môn Toán thi vào cấp 2 Hà Nội Amsterdam hoàn toàn khác với những kỳ thi và những bài kiểm tra thông thường. Để làm tốt bài thi các em học sinh cần phải có những kỹ năng, chiến thuật làm bài, những phương pháp đặc biệt giành riêng cho kỳ thi này. Vậy phải ôn thi và chuẩn bị cho kỳ thi này như thế nào?</p>\r\n<p>Ngoài ra, Chương trình “Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam” sẽ giúp các em học sinh:</p>\r\n<ol>\r\n<li>Có những động lực thúc đẩy mạnh mẽ và tràn đầy quyết tâm cho kỳ thi.</li>\r\n<li>Sở hữu những chiến thuật làm bài riêng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</li>\r\n<li>Có các phương pháp ôn tập để đạt kết quả tốt nhất trong kì thi</li>\r\n<li> Có những thủ thuật giải toán siêu tốc để đạt trên 12/15 điểm toán chỉ trong 15-20 phút làm bài.</li>\r\n<ol>\r\n<p>Các em học sinh và các bậc phụ huynh sẽ được gặp gỡ, giao lưu và lắng nghe chia sẻ của thầy Phan Quang Điệp</p>\r\n<ul>\r\n<li> Hiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic toán Châu Á Thái Bình Dương, chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.</li>\r\n<li>Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam”,”giải toán siêu tốc bằng máy tính bỏ túi”,”chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</li>\r\n<li>Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và dành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</li>\r\n<li>Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia, tập đoàn giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</li>\r\n</ul>\r\n<p><strong>Cảm nhận của phụ huynh và học sinh đã từng tham gia chương trình:</strong></p>\r\n<p>“…Trước khi tham gia chương trình “Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam” của thầy Phan Quang Điệp, tôi và con trai cũng không có ý định thi vào trường Ams. Lúc đó, vào tháng 5 cháu làm bài thi thử môn toán chỉ đạt từ  2/15 đến 4/15 điểm, cháu cũng không thích học môn toán. Nhưng sau khi tham dự chương trình này cả hai mẹ con đã thực sự thay đổi và quyết tâm thi vào trường Amsterdam. Và thật tuyệt vời thầy Điệp đã truyền cảm hứng học tập có những phương pháp giảng dạy tuyệt vời giúp con trai tôi đạt 10/15 điểm toán sau vài buổi huấn luyện trước ngày thi. Thật sự gia đình tôi rất biết ơn thầy về những bài giảng tuyệt vời mà thầy đã dành cho con tôi…. ” </p>\r\n<p>Chị Lan Anh-PHHS cháu Đào Phúc Thành-trúng tuyển kì thì tuyển sinh lớp 6 Hà Nội Amsterdam 2010</p>\r\n<p>“…Tôi tên là Lê Quý Dương, tôi có ước mơ thi đỗ vào trường Hà Nội Amsterdam.Trước khi tham gia chương trình này điểm thi thử của tôi chỉ được từ 5-6 điểm. Nhưng sau khi học các phương pháp, chiến thuật và thủ thuật làm bài nhanh mà thầy Điệp hướng dẫn điểm số của tôi đã nâng lên 11-12 điểm. Và thật tuyệt vời ước mơ của tôi đã thành sự thật.Hẹn gặp lại các bạn tại trường Hà Nội Amsterdam…”</p>\r\n<p>Lê Quý Dương-HS trường tiểu học Thái Thịnh-trúng tuyển kỳ thi tuyển sinh lớp 6 Hà Nội Ams 2011.</p>\r\n<p><strong>Chương trình này nội dung chia sẻ giành cho cả phụ huynh và học sinh, vì vậy công ty rất mong các bậc phụ huynh tham gia cùng các con !</strong></p>\r\n<p>Thời gian: Hội thảo sáng: 8h30 – 10h30 CN ngày 20/05/2012</p>\r\n<p>Hội thảo chiều: 14h30-16h30 CN ngày 20/05/2012</p>\r\n<p>Địa chỉ:  Hội trường tầng 2, khách sạn Asean số 8 Chùa Bộc, Đống Đa, Hà Nội</p>\r\n<p><strong>PHHS đăng ký tham gia chương trình vui lòng gọi theo hotline: 0983 768 342.</strong></p>\r\n', '2012-05-15', '1', 'asean_nhahang_monngon_hotel-150x150.jpg'),
(2, 'Hội thảo dành cho học sinh lớp 4', '<p align="center"><strong><em>Công ty cổ phần Unix kính gửi các bậc phụ huynh và các em học sinh thư mời tham dự:</em></strong></p>\r\n<p align="center"><strong>Hội thảo:”Chinh phục môn toán thi vào cấp 2 Hà Nội Amsterdam”</strong></p>\r\n<p><em>     Tham gia chương trình, các em sẽ nhận được:</em></p>\r\n<ul>\r\n<li>Làm thế nào để tăng từ 1 đến 2 điểm ngay lập tức bằng chính khả năng học của mình?</li>\r\n<li>Làm thế nào để đạt trên 12/15 điểm chỉ trong 15 đến 20 phút làm bài?</li>\r\n<li>Làm thế nào để có được phong độ làm bài tốt nhất trước khi thi?</li>\r\n<li>Tại sao nhiều học sinh có sức học tốt nhưng vẫn không có được kết quả như mong muốn?</li>\r\n<li>Kì thi vào cấp 2 trường Hà Nội Amsterdam được coi là như là một trong những kỳ thi khó nhất đối với các học sinh tiểu học. Kỳ thi này không chỉ là một cuộc tuyển chọn, nó còn là cơ hội để các em học sinh phấn đấu nỗ lực và nâng cao khả năng học tập của mình.</li>\r\n</ul>\r\n<p>Đặc biệt môn Toán thi vào cấp 2 Hà Nội Amsterdam hoàn toàn khác với những kỳ thi và những bài kiểm tra thông thường. Để làm tốt bài thi các em học sinh cần phải có những kỹ năng, chiến thuật làm bài, những phương pháp đặc biệt giành riêng cho kỳ thi này. Vậy phải ôn thi và chuẩn bị cho kỳ thi này như thế nào?</p>\r\n<p>&nbsp;</p>\r\n<p><em>Ngoài ra, Chương trình “Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam” sẽ giúp các em học sinh:</em></p>\r\n<p><strong>1)    </strong><strong>Có những động lực thúc đẩy mạnh mẽ và tràn đầy quyết tâm cho kỳ thi.</strong></p>\r\n<p><strong>2)    </strong><strong>Sở hữu những chiến thuật làm bài riêng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</strong></p>\r\n<p><strong>3)    </strong><strong>Có các phương pháp ôn tập để đạt kết quả tốt nhất trong kì thi</strong></p>\r\n<p><strong>4)    </strong><strong>Có những thủ thuật giải toán siêu tốc để đạt trên 12/15 điểm toán chỉ trong 15-20 phút làm bài.</strong></p>\r\n<p><strong>            </strong></p>\r\n<p><em>        Các em học sinh và các bậc phụ huynh sẽ được gặp gỡ, giao lưu và lắng nghe chia sẻ của thầy</em><strong> Phan Quang Điệp.</strong></p>\r\n<p>-          Hiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic toán Châu Á Thái Bình Dương, chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.</p>\r\n<p>-          Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam”,”giải toán siêu tốc bằng máy tính bỏ túi”,”chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</p>\r\n<p>-          Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và dành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, <strong>thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</strong></p>\r\n<p>-          Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia, tập đoàn giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</p>\r\n<p><strong>        <em>Cảm nhận của phụ huynh và học sinh đã từng tham gia chương trình</em></strong><em>:</em></p>\r\n<p><em>“…Trước khi tham gia chương trình “</em>Chinh phục kỳ thi môn toán vào cấp 2 Hà Nội Amsterdam<em>” của thầy Phan Quang Điệp, tôi và con trai cũng không có ý định thi vào trường Ams. Lúc đó, vào tháng 5 cháu làm bài thi thử môn toán chỉ đạt từ  2/15 đến 4/15 điểm, cháu cũng không thích học môn toán. Nhưng sau khi tham dự chương trình này cả hai mẹ con đã thực sự thay đổi và quyết tâm thi vào trường Amsterdam. Và thật tuyệt vời thầy Điệp đã truyền cảm hứng học tập có những phương pháp giảng dạy tuyệt vời giúp con trai tôi đạt 10/15 điểm toán sau vài buổi huấn luyện trước ngày thi. Thật sự gia đình tôi rất biết ơn thầy về những bài giảng tuyệt vời mà thầy đã dành cho con tôi…. ”               </em></p>\r\n<p>Chị Lan Anh-PHHS cháu Đào Phúc Thành-trúng tuyển kì thì tuyển sinh lớp 6 Hà Nội Amsterdam 2010</p>\r\n<p><em>“…Tôi tên là Lê Quý Dương, tôi có ước mơ thi đỗ vào trường Hà Nội Amsterdam.Trước khi tham gia chương trình này điểm thi thử của tôi chỉ được từ 5-6 điểm. Nhưng sau khi học các phương pháp, chiến thuật và thủ thuật làm bài nhanh mà thầy Điệp hướng dẫn điểm số của tôi đã nâng lên 11-12 điểm. Và thật tuyệt vời ước mơ của tôi đã thành sự thật.Hẹn gặp lại các bạn tại trường Hà Nội Amsterdam&#8230;”</em></p>\r\n<p><em>              Lê Quý Dương-HS trường tiểu học Thái Thịnh-trúng tuyển kỳ thi tuyển sinh lớp 6 Hà Nội Ams 2011.     </em></p>\r\n<p><strong><em>          </em></strong></p>\r\n<p><strong><em>Chương trình này </em></strong><strong><em>n</em></strong><strong><em>ội dung chia sẻ giành cho cả phụ huynh và học sinh, vì vậy công ty rất mong các bậc phụ huynh tham gia cùng các con !</em></strong></p>\r\n<p>Thời gian: 14h45-17h Chu nhật ngày 27/5/2012 ( PHHS vui lòng tới trước 30&#8242;)</p>\r\n<p>Địa chỉ:  Tầng 2 tòa nhà 137 Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội</p>\r\n<p><strong><em>Ph</em></strong><strong><em>ụ huynh và các em học sinh nhận được thư mời này, sẽ được công ty Unix tài trợ tham dự chương trình hoàn toàn miễn phí. Thông tin chi tiết, vui lòng gọi hotline: 0983 768 342</em></strong><strong><em></em></strong></p>', '2012-05-26', '1', '2.gif'),
(3, 'Hội thảo: ” Bứt phá môn Toán thi vào cấp 2 HN Amsterdam”', '<ul>\r\n<li>Làm thế nào để tăng từ 1 đến 2 điểm ngay lập tức bằng chính khả năng học của mình?</li>\r\n<li>Làm thế nào để đạt trên 12/15 điểm chỉ trong 15 đến 20 phút làm bài?</li>\r\n<li>Làm thế nào để có được phong độ làm bài tốt nhất trước khi thi?</li>\r\n<li>Tại sao nhiều học sinh có sức học tốt nhưng vẫn không có được kết quả như mong muốn?</li>\r\n<li>Kì thi vào cấp 2 trường Hà Nội Amsterdam được coi là như là một trong những kỳ thi khó nhất đối với các học sinh tiểu học. Kỳ thi này không chỉ là một cuộc tuyển chọn, nó còn là cơ hội để các em học sinh phấn đấu nỗ lực và nâng cao khả năng học tập của mình.</li>\r\n</ul>\r\n<p>Đặc biệt môn Toán thi vào cấp 2 Hà Nội Amsterdam hoàn toàn khác với những kỳ thi và những bài kiểm tra thông thường. Để làm tốt bài thi các em học sinh cần phải có những kỹ năng, chiến thuật làm bài, những phương pháp đặc biệt dành riêng cho kỳ thi này. Vậy phải ôn thi và chuẩn bị cho kỳ thi này như thế nào?</p>\r\n<p>Chương trình “Bứt phá trong kỳ thi môn Toán vào cấp 2 Hà Nội Amsterdam” sẽ giúp các em học sinh:</p>\r\n<p><strong>1)         </strong><strong>Có những động lực thúc đẩy mạnh mẽ và tràn đầy quyết tâm cho kỳ thi.</strong></p>\r\n<p><strong>2)         </strong><strong>Sở hữu những chiến thuật làm bài riêng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</strong></p>\r\n<p><strong>3)         </strong><strong>Có các phương pháp ôn tập để đạt kết quả tốt nhất trong kì thi</strong></p>\r\n<p><strong>4)         </strong><strong>Khám phá những phương pháp để đạt trên 12/15 điểm toán chỉ trong 15-20 phút làm bài.</strong></p>\r\n<p><strong>                       Diễn giả: Thầy Phan Quang Điệp</strong></p>\r\n<p>Hiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic Toán Châu Á Thái Bình Dương , chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.</p>\r\n<ul>\r\n<li>Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“ Bứt phá trong kì thi Toán trường Ams”, “ Giải toán siêu tốc bằng máy tính bỏ túi”, “ Chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</li>\r\n<li>Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và giành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, <strong>thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</strong></li>\r\n<li>Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia,  Tập đoàn  Giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</li>\r\n</ul>\r\n<p><strong> </strong></p>\r\n<p><strong>Cảm nhận của  phụ huynh và học sinh đã từng tham gia chương trình</strong>:</p>\r\n<p><em>“…Trước khi tham gia chương trình “</em><em>Bứt phá trong kì thi môn toán vào cấp 2 Hà Nội Amsterdam” của thầy Phan Quang Điệp, tôi và con trai cũng không có ý định thi vào trường Ams. Lúc đó, vào tháng 5 cháu làm bài thi thử môn toán chỉ đạt từ  2/15  đến 4 / 15 điểm, cháu cũng không thích học môn toán. Nhưng sau khi tham dự chương trình này cả hai mẹ con đã thực sự thay đổi và quyết tâm thi vào trường Amsterdam. Và thật tuyệt vời thầy Điệp đã truyền cảm hứng học tập có những phương pháp giảng dạy tuyệt vời giúp con trai tôi đạt 10/15 điểm toán sau vài buổi huấn luyện trước ngày thi. Thật sự gia đình tôi rất biết ơn thầy về những bài giảng tuyệt vời mà thầy đã dành cho con tôi…. ”               </em></p>\r\n<p>Chị Lan Anh-PHHS cháu Đào Phúc Thành-trúng tuyển kì thì tuyển sinh lớp 6 Hà Nội Amsterdam 2010</p>\r\n<p><em>“…Tôi tên là Lê Quý Dương, tôi có ước mơ thi đỗ vào trường Hà Nội Amsterdam.Trước khi tham gia chương trình này điểm thi thử của tôi chỉ được từ 5-6 điểm. Nhưng sau khi học các phương pháp, chiến thuật và thủ thuật làm bài nhanh mà thầy Điệp hướng dẫn điểm số của tôi đã nâng lên 11-12 điểm.Và thật tuyệt vời ước mơ của tôi đã thành sự thật.Hẹn gặp lại các bạn tại trường Hà Nội Amsterdam&#8230;”</em></p>\r\n<p><em>              </em>Lê Quý Dương-HS trường tiểu học Thái Thịnh- trúng tuyển kỳ thi tuyển sinh lớp 6 Hà Nội Ams 2011.</p>\r\n<p><strong><em>          </em></strong><strong><em> </em></strong><em>Phí tham dự chương trình là 300.000 vnđ. Ban tổ chức tài trợ miễn phí cho 30 người đăng ký đầu tiên. Để đăng ký tham dự chương trình quý PHHS vui lòng gọi theo <strong>hotline: 0983 768 342</strong></em></p>', '2012-05-28', '1', '2.gif');

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
(6, 'video', '<iframe height="180" src="http://www.youtube.com/embed/7GHT-TSiZio" frameborder="0" allowfullscreen></iframe>'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unix_khoahoc`
--

INSERT INTO `unix_khoahoc` (`khoahoc_id`, `tieude`, `mota`, `batdau`, `ketthuc`, `hocphi`, `anhdaidien`, `thoigian`, `doituong`) VALUES
(1, 'Giúp trẻ phát triển chiều cao tối ưu', '<p>Nhằm giúp trẻ có một chiều cao cân đối và một thể lực dẻo dai, phụ huynh cần lưu ý những yếu tố ảnh hưởng trực tiếp trên sự phát triển chiều cao của con trẻ để có những hỗ trợ tích cực.</p>\r\n<p>Những yếu tố ảnh hưởng</p>\r\n<p>Dinh dưỡng: đây là yếu tố góp phần đến 31% sự phát triển chiều cao của trẻ. Để giúp trẻ có được chiều cao tối ưu cần có sự cân đối về chế độ dinh dưỡng sao cho hợp lý nhất để trẻ có thể có một sức khỏe dẻo dai, một thân hình lý tưởng và sức đề kháng tốt. Một chế độ dinh dưỡng khoa học cần có sự góp mặt của tinh bột, chất béo, chất đạm, các vitamin, nhất là vitamin C, khoáng chất và các chất xơ từ chính nguồn rau xanh và trái cây tươi. Đặc biệt, trong đó chất đạm (protein) tham gia vào việc hình thành các tế bào, tăng cường hệ thống miễn dịch, canxi tạo độ chắc khỏe cho xương và răng, vitamin D giúp chuyển hóa hiệu quả canxi và phốt pho trong cơ thể.</p>\r\n<p>Di truyền: góp phần quyết định chiều cao tương lai của trẻ tới 23%. Nghiên cứu cho thấy, bố mẹ có chiều cao lý tưởng thì con cái sinh ra có chiều cao rất khả quan. Cụ thể nếu bố mẹ cao, chiều cao của con cái sẽ theo tỷ lệ 3:1(cơ hội cao là 3, thấp là 1). Tuy nhiên nếu bố mẹ có chiều cao khiêm tốn, đừng quá lo lắng về chiều cao của trẻ vì ngoài yếu tố di truyền, yếu tố dinh dưỡng và môi trường sống cũng có một tác động rất lớn lên sự phát triển chiều cao của trẻ.Vận động thể lực và giấc ngủ: quyết định sự tăng trưởng chiều cao khoảng 20%. Ngay cả khi trẻ còn nhỏ, cần rèn cho trẻ thói quen luyện tập một cách đều đặn để có thể đảm bảo cho cơ và xương phát triển một cách tối đa. Có rất nhiều hình thức luyện tập, phụ huynh và trẻ hãy cùng chọn ra một môn thể thao ưa thích và hợp với sức của trẻ nhất như bơi lội, đá bóng, khiêu vũ, đạp xe đạp…\r\nNgủ đủ và đúng giờ quy định để tối ưu hóa chiều cao cho trẻ. Cần quan tâm đến quá trình hình thành của một loại hormone có tên là somatotropin. Hormone này nắm giữ vai trò quan trọng trong việc tạo nên các tế bào sụn (các tế bào sụn này tham gia tích cực vào việc tăng chiều dài của các xương như xương tay, xương chân…). Bên cạnh đó somatotropin cũng kích thích cơ thể sản sinh thêm một loại hormone có tên gọi là somatomedin. Hormon này giúp tăng trưởng chiều cao khoảng một giờ ngay sau khi trẻ bắt đầu giấc ngủ. Đây là lý do tại sao trẻ em nên ngủ đều đặn và đúng giờ quy định.</p>\r\n<p>Ba giai đoạn quan trọng</p>\r\n<p>Trong việc phát triển chiều cao của trẻ có 3 giai đoạn quan trọng đó là:</p>\r\n<ul>\r\n<li>Giai đoạn trong bào thai: trong thời gian mang thai, nếu người mẹ có chế độ dinh dưỡng tốt, người mẹ tăng cân từ 10 – 15kg thì trẻ sinh ra sẽ đạt chiều cao là 50cm và nặng từ 3kg trở lên.</li>\r\n<li>Giai đoạn sơ sinh đến 3 tuổi: 12 tháng đầu trẻ tăng 25cm; 2 năm tiếp theo mỗi năm trẻ cao thêm 10cm nếu được nuôi dưỡng tốt.</li>\r\n<li>Giai đoạn dậy thì: bình thường bé gái từ 10 – 16 tuổi và bé trai từ 12 – 18 tuổi. Trong giai đoạn này, có 1 – 2 năm chiều cao trẻ tăng vọt từ 8 – 12cm mỗi năm nếu được nuôi dưỡng tốt. Thực tế không thể biết chính xác năm đó là năm nào, nên vẫn phải đảm bảo dinh dưỡng tốt cho trẻ trong suốt thời gian này. Sau thời kỳ dậy thì, cơ thể trẻ cũng tăng chiều cao nhưng với tốc độ rất chậm rồi ngưng hẳn ở khoảng độ tuổi 22 đối với nữ và 25 tuổi đối với nam. Người ta thường ước tính chiều cao của trẻ khi trưởng thành sẽ gấp đôi chiều cao lúc 2 tuổi (chẳng hạn lúc 2 tuổi trẻ cao 82cm, khi lớn sẽ cao 164cm). Hoặc chiều cao lúc trưởng thành bằng chiều cao lúc 10 tuổi nhân với 1,25 (ví dụ khi 10 tuổi trẻ cao 140cm thì lúc trưởng thành sẽ cao 175cm).</li>\r\n</ul>\r\n<p>Dấu hiệu gợi ý con trẻ của bạn đang có vấn đề về phát chiều cao:</p>\r\n<ul>\r\n<li>Trong một năm chiều cao của trẻ phát triển không quá 4cm.</li>\r\n<li>Chiều cao hiện tại của trẻ thấp hơn khoảng 10cm so với chiều cao trung bình của các bạn cùng trang lứa. Khi trẻ mắc phải một trong các vấn đề này, tốt nhất bạn nên nhờ sự hỗ trợ và tư vấn của bác sĩ chuyên khoa.</li>\r\n</ul>', NULL, NULL, NULL, '2-150x150.jpg', '2012-05-08', 1),
(2, '“Dẫn lối” thành công khi nuôi dạy con', '<h4>5 bí kíp dưới đây sẽ giúp bạn giảm căng thẳng và nhàn hạ hơn khi làm cha mẹ.</h4>\r\n<p>Khi thấy những đứa trẻ hoạt bát nhưng cũng rất ngoan ngoãn và lễ phép, bạn có bao giờ tự hỏi bố mẹ chúng đã nuôi dưỡng chúng như thế nào chưa?<br/>\r\nLàm cha mẹ, khó tránh khỏi những áp lực và mâu thuẫn trong khi nuôi dạy con. 5 bí quyết nuôi dạy con dưới đây sẽ giúp bạn giảm phần nào đó căng thẳng và nhàn hạ hơn khi làm cha mẹ.</p>\r\n<h4>1.     Sự nhất quán</h4>\r\n<p>Dạy trẻ tối kỵ việc ‘nói một đằng, làm một nẻo’. Vì vậy, khi đã hứa điều gì đó với con trẻ, cha mẹ cần cố gắng thực hiện đúng. Liên tục ra ‘luật’ mới sẽ khiến trẻ rối trí và không hiểu được chính xác việc mình cần làm và nên làm là gì. Cần giúp trẻ hiểu những nguyên tắc cơ bản trong gia đình mà chúng phải tuân theo. Và người lớn trong gia đình không được ‘trống đánh xuôi, kèn thổi ngược’ để tránh việc trẻ có thể bị nhầm lẫn với những thông điệp khác nhau.</p>\r\n<h4>2.    Thói quen</h4>\r\n<p>Có câu ‘thói quen nói lên nhân cách’, muốn con ngoan thì cha mẹ cần uốn nắn càng sớm càng tốt. Thói quen tốt như: ngủ đúng và đủ giấc, ăn đúng giờ, hạn chế ăn vặt… sẽ giúp trẻ có sức khỏe ổn định, có thời gian học tập và vui chơi hợp lý. Đồng thời, cha mẹ cũng không phải cuống cuồng, căng thẳng vì lo cho con.</p>\r\n<h4>3.    Ranh giới</h4>\r\n<p>‘Ra luật’ với trẻ chính là chìa khóa thành công trong việc nuôi dạy trẻ thành tài. Hãy đưa ra những ranh giới rõ ràng để chứng tỏ quyền hạn của người lớn với trẻ và để cho trẻ hiểu rằng nơi nào, lúc nào là cần phải làm việc gì. Nếu muốn con trẻ khi lớn lên sống không dựa dẫm, biết tự lập thì đừng tạo ra cho trẻ quá nhiều chọn lựa khiến trẻ ‘kén cá, chọn canh’ và không dứt khoát.</p>\r\n<h4>4.    Sự kiềm chế</h4>\r\n<p>Biết tiết chế cơn giận, bình tĩnh kiểm soát mọi việc và không đối xử ‘độc tài’ với con… là những điều mà nhiều bậc phụ huynh đã biết nhưng để làm được lại không dễ. Khi sắp nổi ‘sân si’ với con, bạn có thể nhắm mắt lại và hít thở thật sâu, hoặc đếm ngược từ 10, hoặc lảng sang chuyện khác… Hãy nhớ, đừng làm lớn chuyện với những gì không thay đổi ngay được.<br/>\r\nNgoài ra, ngay cả khi khen thưởng trẻ cũng cần phải kiềm chế, vì khen thưởng sẽ mất đi tác dụng nếu trẻ đã nghe nhàm tai và cũng khó để trẻ tin rằng cha mẹ thực lòng khen ngợi chúng.</p>\r\n<h4>5.    Thư giãn</h4>\r\n<p>Dành thời gian gần gũi, cùng chơi với con giúp tình mẫu tử/phụ tử thêm gắn kết hơn. Những lời nói nựng nịu, âu yếm hay những cái thơm vào má… là ‘thần dược’ đối với sự phát triển tinh thần của trẻ nhỏ. Hãy tiếp cận từng giai đoạn phát triển của trẻ (ví dụ như tập ngồi bô) với một thái độ cởi mở và dễ chịu, bởi vì nếu bạn luôn căng thẳng, trẻ sẽ nhận ra ngay.<br/>\r\nKhông kém phần quan trọng, thỉnh thoảng phải tự cho mình những giây phút xả hơi, nghỉ ngơi giải trí với vợ/chồng mà không mang theo con – sự nghỉ ngơi này sẽ đem lại nhiều thay đổi tích cực không ngờ đấy !</p>', NULL, NULL, NULL, 'nuoi_day_con_tre-150x150.jpg', '2012-05-17', 2);

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
(1, 'Clip', 'Các video clip'),
(3, 'Ảnh', 'Các hình ảnh'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `loaisach_id`, `tacgia`) VALUES
(1, 'Học làm giàu', 'Sách dạy làm giàu', 1, 'Ho Minh Hoa'),
(2, 'Kenh14', 'Mương la liếm cho các bạn trẻ năng động', 3, 'Mương 14 ABCDEF'),
(3, 'Như đã dấu yêu', 'Trong đôi mắt anh, em là tất cả :)))) Updated', 1, 'Ai mà biết'),
(5, 'OOps I did it', 'Nghiện', 4, '=)))))');

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
