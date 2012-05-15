-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2012 at 09:02 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopquanao`
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

--
-- Dumping data for table `be_acl_actions`
--


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

--
-- Dumping data for table `be_acl_permission_actions`
--


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
(2, 58, 77, 'Control Panel', NULL),
(3, 59, 76, 'System', NULL),
(4, 70, 71, 'Members', NULL),
(5, 60, 69, 'Access Control', NULL),
(6, 72, 73, 'Settings', NULL),
(7, 74, 75, 'Utilities', NULL),
(8, 67, 68, 'Permissions', NULL),
(9, 65, 66, 'Groups', NULL),
(10, 63, 64, 'Resources', NULL),
(11, 61, 62, 'Actions', NULL),
(12, 26, 57, 'General', 0),
(13, 55, 56, 'Calendar', 0),
(14, 53, 54, 'Category', 0),
(15, 51, 52, 'Customers', 0),
(16, 49, 50, 'Menus', 0),
(17, 47, 48, 'Messages', 0),
(18, 45, 46, 'Orders', 0),
(19, 43, 44, 'Pages', 0),
(20, 41, 42, 'Products', 0),
(21, 39, 40, 'Subscribers', 0),
(22, 37, 38, 'Admins', 0),
(23, 35, 36, 'Filemanager', 0),
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
(37, 33, 34, 'Multi languages', 0),
(38, 31, 32, 'Slideshow', 0),
(39, 29, 30, 'Playroom', 0),
(40, 27, 28, 'Kho', 0);

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
('admin_email', 'admin@gmail.com'),
('webshop_slideshow', 'coinslider'),
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
('dashboard_rss', 'http://www.digg.com/rss/indexdig.xml'),
('dashboard_rss_count', '10'),
('company_name', ''),
('company_address', ''),
('frontend_multi_language', '1'),
('company_post', '123-4567'),
('company_city', 'Kobe'),
('company_country', 'Japan'),
('company_organization_number', '992591412'),
('company_telephone', '+ 81 1122 3344'),
('company_mobile', ''),
('company_other_one', 'The contents of website are the copyright of Kaimonokago © 2012. All rights reserved.  Web: Okada Design AS'),
('company_other_two', ''),
('category_menu_id', '16, 22'),
('lilly_fairies_submenu_id', '1'),
('parentid_other_illust', '27'),
('quicksand_colorbox_cat_id', '11'),
('sharethis_pub_key', ''),
('sharethis_direction', 'vertical'),
('sharethis_services', 'facebook, twitter, yahoo, email, sharethis, plusone'),
('sharethis_size', 'large'),
('other_work_main', ''),
('customer_registration', '0'),
('twittername', ''),
('twittercount', '10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `be_users`
--

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-05-15 18:23:16', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
(2, 'an', 'a97b4c3de192c200fdc31eac8ca2cf57639da998', 'anan@gmail.com', 1, 1, 'qFLDP9DBM3oERI1uT3cAJ5cBADidq28N', '2012-05-05 18:48:45', '2012-05-05 18:45:43', '2012-05-05 18:48:28');

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
(2, '', '', '', '', '', '', 0),
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
('6fecb2899491f7aa077181309a2ba08c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19', 1337108411, 'a:11:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-05-15 18:10:24";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}'),
('d608fe9bac9e81487a08d1d316e505ca', '127.0.0.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; BTRS122332; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3072', 1337101967, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `omc_category`
--

INSERT INTO `omc_category` (`id`, `name`, `metadesc`, `metakeyword`, `shortdesc`, `longdesc`, `status`, `order`, `parentid`, `lang_id`, `table_id`) VALUES
(1, 'English category', '', '', '', '', 'active', NULL, 0, 0, 1),
(2, 'Books', '', '', '', '', 'active', 40, 1, 0, 2),
(7, 'Meditation', 'Meditation in English', '', '', '', 'active', 30, 1, 0, 7),
(9, 'Mountain', '', '', '', '', 'active', 10, 1, 0, 9),
(11, 'River', '', '', '', '', 'active', 25, 1, 0, 11),
(17, 'Angels', 'Angels in english', '', '', '', 'active', 35, 1, 0, 17),
(20, 'Magic', 'Magic desc.', '', '', '', 'active', 55, 1, 0, 20),
(23, 'Ocean', 'Ocean desc', '', '', '', 'active', 70, 1, 0, 23),
(25, 'Quần', '', '', '', 'các loại quần áo', 'active', 0, 0, 0, 25),
(26, 'Áo', '', '', '', '', 'active', 0, 0, 0, 26),
(27, 'Phụ kiện', '', '', '', '', 'active', 0, 0, 0, 27),
(28, 'sdfsdf', '', '', '', '', 'active', 0, 0, 0, 28),
(29, 'hoho', '', '', '', '', 'active', 0, 0, 0, 29),
(30, 'dsfsdf', '', '', '', '', 'active', 0, 0, 0, 30),
(31, '3qwrwe', '', '', '', '', 'active', 0, 0, 0, 31),
(32, 'sdgdfg', '', '', '', '', 'active', NULL, 0, 0, 32);

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

--
-- Dumping data for table `omc_colors`
--


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
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `omc_customer`
--

INSERT INTO `omc_customer` (`customer_id`, `password`, `customer_first_name`, `customer_last_name`, `phone_number`, `email`, `address`, `city`, `post_code`) VALUES
(1, '1234', 'aaa', 'cccc', 111111111, 'anan@gmail.com', 'cdcc', 'cccc', 0),
(2, '', 'aaa', 'cccc', 111111111, 'cccc@cccc.com', 'cdcc', 'cccc', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `omc_email`
--

INSERT INTO `omc_email` (`id`, `subject`, `msg`, `msg2`, `msg3`, `msg4`, `sendto`, `date`) VALUES
(7, 'testing email', '<p>testing email here.</p>', '', '', '', '1_admin@gmail.com', '2012-03-09 22:08:56'),
(9, 'sending blue', '<p>hahah</p>', '', '', '', '1_admin@gmail.com', '2012-03-10 08:43:21'),
(10, 'sendig agagi ', '<p>haha djh asdjfh</p>', '', '', '', '1_admin@gmail.com', '2012-03-10 08:44:19'),
(11, 'test', '<p>test</p>', '', '', '', '1_admin@gmail.com,3_test@gmail.com', '2012-03-16 21:21:29');

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
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `omc_languages`
--

INSERT INTO `omc_languages` (`id`, `langname`, `status`) VALUES
(1, 'japanese', 'active');

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
(6, 'ネットショップ', '', 'active', 5, 10, 1, 6, 2),
(8, 'Contact', '', 'active', 1, 30, 0, 7, 0),
(9, 'お問い合わせ', '', 'active', 5, 30, 1, 8, 8),
(10, 'About Us', '', 'active', 1, 40, 0, 3, 0),
(11, 'セシリアについて', '', 'active', 5, 40, 1, 4, 10),
(12, 'Service', '', 'active', 1, 60, 0, 17, 0),
(14, 'サービス', '', 'active', 5, 60, 1, 18, 12),
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

--
-- Dumping data for table `omc_messages`
--


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
(1, 1, 2.00, '2012-05-08 12:56:16', '2012-05-13 22:47:28', '2012-05-13 22:47:22'),
(2, 2, 11602.00, '2012-05-15 22:48:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `omc_order_item`
--

INSERT INTO `omc_order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 2, 59, 4, 1234.00),
(2, 2, 2, 1, 5555.00),
(3, 2, 1, 1, 1111.00);

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
(4, 'セシリアについて', '', '', '', '', 'about', '<p>セシリアは</p>\n<p>Tempor! <a href="http://bbc.com">Parturient ac</a> sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 1),
(6, 'ホーム', '', '', '', '', 'welcome', '<p>Forsiden p&aring; norsk</p>', 'active', 1),
(7, 'Contact', '', '', '', '', 'contact_us', '', 'active', 0),
(8, 'お問い合わせ', '', '', '', '', 'contact_us', '<p>Kontakt oss</p>', 'active', 1),
(17, 'Service', '', '', '', '', 'service', '<p>service content</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(18, 'サービス', '', '', '', '', 'service', '<p>サービス</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 1),
(20, 'Shopping guide', '', '', '', '', 'guide', '<p>Shopping guide content.</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.<br /><br /></p>', 'active', 0),
(21, 'ショッピングガイド', '', '', '', '', 'guide', '<p>ショッピングガイド</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', 'active', 1),
(22, 'About shop', '', '', '', '', 'about_shop', '<p>Content for About shop.</p>', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `omc_products`
--

CREATE TABLE IF NOT EXISTS `omc_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` int(1) NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weblink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_order` int(11) unsigned DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `featured` enum('none','front','webshop') COLLATE utf8_unicode_ci NOT NULL,
  `other_feature` enum('none','most sold','new product') COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `lang_id` int(2) unsigned NOT NULL,
  `table_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `omc_products`
--

INSERT INTO `omc_products` (`id`, `code`, `name`, `public`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `weblink`, `product_order`, `status`, `category_id`, `featured`, `other_feature`, `price`, `lang_id`, `table_id`) VALUES
(1, 'A1', 'Áo phông 1', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 0, 'active', 2, 'none', 'new product', 1111, 0, 0),
(2, 'A2', 'Áo phông 2', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 0, 'active', 2, 'none', 'new product', 5555, 0, 0),
(3, 'A3', 'Áo phông 3', 0, 'áo ', 'Các loại áo dài', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '0', 5, 'active', 25, 'front', 'new product', 333, 0, 0),
(4, 'A4', 'Áo phông 4', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 0, 'active', 25, 'none', 'new product', 4444, 0, 0),
(5, 'A5', 'Áo phông 5', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/kidsbrownface_lg.jpg" alt="" width="350" height="360" /></p>', '0', 0, 'active', 25, 'none', 'new product', 5555, 0, 0),
(6, 'A6', 'Áo phông 6', 0, '', '', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '0', 0, 'active', 25, 'none', 'new product', 6666, 0, 0),
(7, 'A7', 'Áo phông 7', 0, '', '', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '0', 0, 'active', 25, 'none', 'new product', 7777, 0, 0),
(8, 'A8', 'Áo phông 8', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 8, 'active', 26, '', 'new product', 8888, 0, 0),
(9, 'A9', 'Áo phông 9', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 9, 'active', 26, '', 'new product', 9999, 0, 0),
(10, 'A10', 'Áo phông 10', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 9, 'active', 26, '', 'new product', 1200, 0, 0),
(11, 'A11', 'Áo phông 11', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 9, 'active', 26, 'front', 'new product', 50, 0, 0),
(12, 'A12', 'Áo phông 12', 0, '', '', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '0', 9, 'active', 26, '', 'new product', 230, 0, 0),
(13, 'A13', 'Áo phông 13', 0, '', '', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '0', 8, 'active', 26, 'front', 'new product', 50, 0, 0),
(14, 'A14', 'Áo phông 14', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 7, 'active', 26, 'webshop', 'new product', 220, 0, 0),
(15, 'A15', 'Áo phông 15', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 7, 'active', 26, 'front', 'new product', 0, 0, 0),
(16, 'A16', 'Áo phông 16', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 7, 'active', 26, 'webshop', 'new product', 123, 0, 0),
(17, 'A17', 'Áo phông 17', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 8, 'active', 0, 'webshop', 'new product', 46346, 0, 0),
(20, 'A20', 'Áo phông 20', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 7, 'active', 27, 'front', 'new product', 1111, 0, 0),
(21, 'A21', 'Áo phông 21', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 6, 'active', 27, 'webshop', 'new product', 2222, 0, 0),
(22, 'A22', 'Áo phông 22', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 6, 'active', 27, '', 'new product', 222, 0, 0),
(45, 'B1', 'Sách xịn', 0, '11', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 11, 'active', 26, 'none', 'new product', 111, 0, 45),
(48, 'A3', 'Blue angels', 0, '', '', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '0', 26, 'active', 9, 'none', 'new product', 1200, 0, 48),
(49, 'A4', 'Meditation', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 0, 'active', 26, 'none', 'new product', 0, 0, 49),
(50, 'A5', 'Meditation', 0, '', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 0, 'active', 26, 'none', 'new product', 0, 0, 50),
(54, 'A9', 'Áo dài', 0, 'aaaaaâ', '', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '<p><img src="../../../../assets/images/sexy-and-i-know-it-kids-shirts.png" alt="" width="378" height="378" /></p>', '0', 1, 'active', 26, 'none', 'new product', 13454, 0, 54),
(55, 'A10', 'Sách văn', 0, 'văn', '', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '0', 12, 'active', 26, 'none', 'new product', 8765, 0, 55),
(59, 'A17', 'Sách sử', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 21, 'active', 26, 'none', 'new product', 1234, 0, 59),
(60, 'dfgdfgdf', 'dfgdfgfd', 0, '', '', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '<p><img src="../../../../assets/images/Superman_symbol.jpg" alt="" width="550" height="600" /></p>', '0', 0, 'active', 26, 'none', 'new product', 0, 0, 60),
(61, 'xcvv', 'sdfsdf', 0, '', '', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '<p><img src="../../../../assets/images/untitled-6.png" alt="" width="168" height="185" /></p>', '0', 0, 'active', 25, 'front', 'new product', 0, 0, 61),
(62, 'ghfgh', 'efsdf', 0, '', '', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '<p><img src="../../../../assets/images/flash-logo-t-shirt.jpg" alt="" width="500" height="400" /></p>', '0', 0, 'active', 25, 'webshop', 'new product', 0, 0, 62),
(63, 'a123', 'a', 0, '', '', '', '', '0', 0, 'active', 25, 'none', 'new product', 0, 0, 63),
(64, 'a1234', 'aa', 0, '', '', '', '', '0', 0, 'active', 25, 'none', 'new product', 0, 0, 64),
(65, 'a12345', 'aaa', 0, '', '', '', '', '0', 0, 'active', 25, 'none', 'none', 0, 0, 65);

-- --------------------------------------------------------

--
-- Table structure for table `omc_product_colors`
--

CREATE TABLE IF NOT EXISTS `omc_product_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `omc_product_colors`
--


-- --------------------------------------------------------

--
-- Table structure for table `omc_product_sizes`
--

CREATE TABLE IF NOT EXISTS `omc_product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `omc_product_sizes`
--


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

--
-- Dumping data for table `omc_sizes`
--


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `omc_slideshow`
--

INSERT INTO `omc_slideshow` (`id`, `name`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `slide_order`, `status`, `featured`) VALUES
(1, 'big_tree.jpg', '<p>slide 1</p>', '', '', '<p><img src="../../../../assets/images/frontpage/big_tree.jpg" alt="" width="516" height="200" /></p>', 10, 'active', 'none'),
(2, 'build.jpg', '<p>slide2 desc</p>', '', '', '<p><img src="../../../../assets/images/frontpage/build.jpg" alt="" width="516" height="200" /></p>', 20, 'active', 'none'),
(6, 'station.jpg', '', '', '', '<p><img src="../../../../assets/images/frontpage/station.jpg" alt="" width="516" height="200" /></p>', 30, 'active', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `omc_subscribers`
--

CREATE TABLE IF NOT EXISTS `omc_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `omc_subscribers`
--

INSERT INTO `omc_subscribers` (`id`, `name`, `email`) VALUES
(1, 'shin', 'admin@gmail.com'),
(3, 'sokada', 'test1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shop_contact_us`
--

CREATE TABLE IF NOT EXISTS `shop_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shop_contact_us`
--


-- --------------------------------------------------------

--
-- Table structure for table `shop_kho`
--

CREATE TABLE IF NOT EXISTS `shop_kho` (
  `kho_id` int(10) NOT NULL AUTO_INCREMENT,
  `kho_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `kho_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`kho_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shop_kho`
--

INSERT INTO `shop_kho` (`kho_id`, `kho_name`, `kho_code`) VALUES
(2, 'Kho B', 'K2'),
(3, 'Kho C', 'K3'),
(4, 'Kho E', 'K5'),
(5, 'Kho D', 'K4'),
(6, 'sdf', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `shop_sanphamkho`
--

CREATE TABLE IF NOT EXISTS `shop_sanphamkho` (
  `sanphamkho_id` int(10) NOT NULL AUTO_INCREMENT,
  `kho_id` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`sanphamkho_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `shop_sanphamkho`
--

INSERT INTO `shop_sanphamkho` (`sanphamkho_id`, `kho_id`, `id`, `total`) VALUES
(25, 1, 45, 2),
(26, 2, 45, 0),
(27, 3, 45, 4),
(28, 1, 46, 2),
(29, 2, 46, 0),
(30, 3, 46, 4),
(31, 1, 47, 4),
(32, 2, 47, 0),
(33, 3, 47, 0),
(34, 1, 48, 0),
(35, 2, 48, 3),
(36, 3, 48, 0),
(37, 1, 49, 0),
(38, 2, 49, 0),
(39, 3, 49, 5),
(40, 1, 50, 0),
(41, 2, 50, 0),
(42, 3, 50, 0),
(43, 1, 51, 0),
(44, 2, 51, 3),
(45, 3, 51, 0),
(46, 1, 52, 2),
(47, 2, 52, 2),
(48, 3, 52, 0),
(49, 1, 53, 2),
(50, 2, 53, 3),
(51, 3, 53, 0),
(52, 1, 54, 2),
(53, 2, 54, 4),
(54, 3, 54, 0),
(55, 1, 55, 0),
(56, 2, 55, 2),
(57, 3, 55, 4),
(58, 1, 56, 3),
(59, 2, 56, 2),
(60, 3, 56, 0),
(61, 1, 57, 3),
(62, 2, 57, 1),
(63, 3, 57, 0),
(64, 1, 58, 0),
(65, 2, 58, 0),
(66, 3, 58, 0),
(67, 1, 59, 0),
(68, 2, 59, 2),
(69, 3, 59, 0),
(70, 1, 60, 0),
(71, 2, 60, 0),
(72, 3, 60, 0),
(73, 1, 61, 0),
(74, 2, 61, 0),
(75, 3, 61, 0),
(76, 1, 62, 1),
(77, 2, 62, 0),
(78, 3, 62, 0),
(79, 1, 63, 0),
(80, 2, 63, 0),
(81, 3, 63, 0),
(82, 1, 64, 0),
(83, 2, 64, 0),
(84, 3, 64, 0),
(85, 1, 65, 0),
(86, 2, 65, 0),
(87, 3, 65, 0),
(88, 1, 1, 0),
(89, 2, 1, 0),
(90, 3, 1, 0),
(91, 1, 2, 0),
(92, 2, 2, 0),
(93, 3, 2, 0),
(94, 1, 4, 0),
(95, 2, 4, 0),
(96, 3, 4, 0),
(97, 1, 5, 0),
(98, 2, 5, 0),
(99, 3, 5, 0),
(100, 1, 6, 0),
(101, 2, 6, 0),
(102, 3, 6, 0),
(103, 1, 7, 0),
(104, 2, 7, 0),
(105, 3, 7, 0);

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

--
-- Dumping data for table `shoutbox`
--


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
