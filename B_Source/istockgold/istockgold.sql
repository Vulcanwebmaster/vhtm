-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2012 at 05:14 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `istockgold`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `be_acl_resources`
--

INSERT INTO `be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 76, 'Site', NULL),
(2, 56, 75, 'Control Panel', NULL),
(3, 57, 74, 'System', NULL),
(4, 68, 69, 'Members', NULL),
(5, 58, 67, 'Access Control', NULL),
(6, 70, 71, 'Settings', NULL),
(7, 72, 73, 'Utilities', NULL),
(8, 65, 66, 'Permissions', NULL),
(9, 63, 64, 'Groups', NULL),
(10, 61, 62, 'Resources', NULL),
(11, 59, 60, 'Actions', NULL),
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
(39, 27, 28, 'Playroom', 0);

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
('site_name', 'Istockgold'),
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
('twittercount', '10'),
('admin_home', '1'),
('exchange_orders', '1'),
('exchange_rates', '1'),
('currency', '1'),
('manage_members', '1'),
('site_currencies', '1'),
('site_settings', '1'),
('news', '1'),
('pages', '1'),
('update_profile', '1'),
('log_out', '1');

-- --------------------------------------------------------

--
-- Table structure for table `be_resources`
--

CREATE TABLE IF NOT EXISTS `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

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
(39, 0);

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-06-04 20:27:04', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

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
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(98, 1337684008, '0.0.0.0', 'JCIi9sfM'),
(97, 1337683964, '0.0.0.0', 'TB1SRsP3'),
(96, 1337683762, '0.0.0.0', 'p2rG54mT'),
(95, 1337683724, '0.0.0.0', 'd320fqLt'),
(94, 1337682919, '0.0.0.0', '9p5Hhrc6'),
(93, 1337682746, '0.0.0.0', '4u8X8Bae'),
(92, 1337682474, '0.0.0.0', 'BF2rp2fh'),
(91, 1337682454, '0.0.0.0', 'AWcqfvxw'),
(90, 1337682429, '0.0.0.0', 'BGJOUzTf'),
(89, 1337681844, '0.0.0.0', 'cuSwxfat'),
(88, 1337677350, '0.0.0.0', 'lHsb9ZLi'),
(87, 1337677293, '0.0.0.0', '7YFrcXgs'),
(86, 1336669579, '0.0.0.0', 'PkPOzU3Y'),
(85, 1336669579, '0.0.0.0', 'pXrqCEbp'),
(84, 1336669567, '0.0.0.0', 'qAPjWAoe'),
(83, 1336667904, '0.0.0.0', 'tqVRBwB8'),
(82, 1336667891, '0.0.0.0', 'JiVcG1sk'),
(81, 1336667651, '0.0.0.0', '1UrglNat'),
(80, 1336667337, '0.0.0.0', 'GfSUz2qk'),
(79, 1336666927, '0.0.0.0', '9l3aV4GG'),
(78, 1336666912, '0.0.0.0', '47juvjGY'),
(77, 1336666496, '0.0.0.0', 'go1SbgFa'),
(76, 1336666483, '0.0.0.0', 'l0OayWwv'),
(75, 1336664113, '0.0.0.0', '5dcnC3ZB'),
(74, 1336664098, '0.0.0.0', 'Hj1JdYRC'),
(99, 1337684213, '0.0.0.0', 'tFQKazqs'),
(100, 1337684798, '0.0.0.0', 'eONOClNu'),
(101, 1337684838, '0.0.0.0', 'E4ccJ3as'),
(102, 1337684915, '0.0.0.0', 'Q1nKuvMq'),
(103, 1337685093, '0.0.0.0', 'TY109CvF'),
(104, 1337686819, '0.0.0.0', '0ckH7qOJ'),
(105, 1337686828, '0.0.0.0', 'wT82hMf0'),
(106, 1337686838, '0.0.0.0', '2j6B3QG4'),
(107, 1337686850, '0.0.0.0', '9OA5DwlS'),
(108, 1337687386, '0.0.0.0', 'pNJHFL3M'),
(109, 1337742699, '0.0.0.0', 'zxC3yUKu'),
(110, 1337742857, '0.0.0.0', '2g9x2ZPs'),
(111, 1337750838, '0.0.0.0', 'WVVsrsGY'),
(112, 1337750936, '0.0.0.0', 'pHb8VfqH'),
(113, 1337751033, '0.0.0.0', 'truqJmbr'),
(114, 1337751048, '0.0.0.0', 'T3SuROug'),
(115, 1337751058, '0.0.0.0', 'o6hV4yuQ'),
(116, 1337751076, '0.0.0.0', 'yTz5GzIW'),
(117, 1337751146, '0.0.0.0', 'aHHX69Jd'),
(118, 1337751203, '0.0.0.0', 'yjtGD0nD'),
(119, 1337751227, '0.0.0.0', 'JtneeTgV');

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
('0895104f1717b9a0849266b7919aeda3', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5', 1338832137, ''),
('d7ff838363946a59d56dbbb346076b7f', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:12.0) Gecko/20100101 Firefox/12.0', 1338834783, 'a:11:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-06-02 19:31:56";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}');

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
-- Table structure for table `is_account_setting`
--

CREATE TABLE IF NOT EXISTS `is_account_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `display` varchar(100) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `is_account_setting`
--

INSERT INTO `is_account_setting` (`id`, `c_id`, `key`, `display`, `value`, `note`, `order`) VALUES
(1, 1, 'liberty.account', 'Liberty Account', 'U9450274', 'Use cappital characters sample: UXXXX', 1),
(2, 1, 'liberty.account.name', 'Account Name', 'Nguyen Son Tung', '', 2),
(3, 1, 'liberty.account.storename', 'Store Name', 'istock', 'This is the store name you must set up on Merchant tools > Create new store. [Auto Receive] create name,password and enable it. Select POST for all HTTP methods', 3),
(4, 2, 'western.receiver.firstname', 'Receiver''s First Name', 'Quyen', NULL, 1),
(5, 2, 'western.receiver.lastname', 'Receiver''s Last Name', 'Ngo', NULL, 2),
(6, 2, 'western.receiver.city', 'Reveiver''s City', 'Hanoi', NULL, 3),
(7, 2, 'western.receiver.country', 'Reveiver''s Country', 'Vietnam', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `is_admin`
--

CREATE TABLE IF NOT EXISTS `is_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_id` int(11) NOT NULL,
  `currency_account` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `is_contact_us`
--

CREATE TABLE IF NOT EXISTS `is_contact_us` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` text CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `phone` int(10) NOT NULL,
  `city` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `state` text CHARACTER SET utf8 NOT NULL,
  `zip_code` text CHARACTER SET utf8 NOT NULL,
  `country` text CHARACTER SET utf8 NOT NULL,
  `contents` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `is_contact_us`
--

INSERT INTO `is_contact_us` (`message_id`, `first_name`, `last_name`, `address`, `phone`, `city`, `email`, `state`, `zip_code`, `country`, `contents`) VALUES
(2, 'tung', 'nguyen', 'hanoi', 1292323, 'hanoi', 'tung_nguyenson89@yahoo.com', 'hanoi', '12345', 'vietnam', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `is_currency`
--

CREATE TABLE IF NOT EXISTS `is_currency` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) NOT NULL,
  `c_metal_name` varchar(20) NOT NULL,
  `code` varchar(3) NOT NULL,
  `logo_src` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `c_limit` int(11) DEFAULT NULL,
  `c_max_fee` int(11) DEFAULT NULL,
  `c_ex_min` int(11) DEFAULT NULL,
  `c_ex_max` int(11) DEFAULT NULL,
  `c_reserve` int(11) DEFAULT NULL,
  `is_show_src` tinyint(1) NOT NULL,
  `is_show_dst` tinyint(1) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `is_currency`
--

INSERT INTO `is_currency` (`c_id`, `c_name`, `c_metal_name`, `code`, `logo_src`, `status`, `c_limit`, `c_max_fee`, `c_ex_min`, `c_ex_max`, `c_reserve`, `is_show_src`, `is_show_dst`) VALUES
(1, 'Liberty Reserve', 'Usd', 'LR', 'Liberty Reserve.jpg', 1, 200, 3, 10, 5000, 3000, 1, 1),
(2, 'Western Union', 'Usd', 'WU', 'wu2.jpg', 1, 200, 5, 1, 4000, 3000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `is_mail`
--

CREATE TABLE IF NOT EXISTS `is_mail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `is_news`
--

CREATE TABLE IF NOT EXISTS `is_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `tag` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `is_news`
--

INSERT INTO `is_news` (`id`, `title`, `content`, `date`, `tag`) VALUES
(2, 'Telepay Service : Prices Go Down, Number of Operators Go Up', '<p>Content:</p>\r\n<p>Telepay Service : Prices Go Down, Number of Operators Go Up</p>', '2012-05-04', ''),
(3, 'The first online exchange for WMV is now open in Vietnam', '<p>Content:</p>\r\n<p>The first online exchange for WMV is now open in Vietnam</p>', '2012-06-03', 'WMV, Vietnam, exchange'),
(4, 'More top-up options available in Vietnam', '<p>&nbsp;</p>\r\n<div id="contentdiv">Introduction\r\n<p>http://msdn.microsoft.com/en-us/library/5dy88c2e.aspx. IT systems often consist of hundreds of Visual Studio projects. There is sometimes a need to make the same modifications across all these projects. With this project, projects may be checked-out and checked-in through Team Foundation, the OutputPath, and the strong key file may be set using absolute or relative paths, the&nbsp;<code>AssemblyFileVersion</code>&nbsp;may be set, and a search and replace may be performed across all project files. Through this project several .NET functionalities are demonstrated such as parallel processing with the<code>Parallel.For</code>&nbsp;statement, calling Team Foundation through the&nbsp;<code>Workspace</code>&nbsp;class, reading and writing XML files with<code>XmlDocument</code>, making Regular Expression replacements with the&nbsp;<code>Regex</code>&nbsp;class, displaying a grid with the<code>DataGridView</code>&nbsp;class, and signing a project with a strong key.</p>\r\n<h2>Visual Studio project files have the extension&nbsp;<em>vbproj</em>&nbsp;for Visual Basic projects, and&nbsp;<em>csproj</em>&nbsp;for C# projects. These files have two entries for each of the debug and release configuration for the&nbsp;<code>OutputPath</code>:</h2>\r\n</div>\r\n<div id="premain0" class="pre-action-link"><img id="preimg0" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse0">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">Project</span> <span class="code-attribute">ToolsVersion</span><span class="code-keyword">="</span><span class="code-keyword">4.0"</span> <span class="code-attribute">DefaultTargets</span><span class="code-keyword">="</span><span class="code-keyword">Build"</span> \r\n        <span class="code-attribute">xmlns</span><span class="code-keyword">="</span><span class="code-keyword">http://schemas.microsoft.com/developer/msbuild/2003"</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-leadattribute">PropertyGroup</span> <span class="code-attribute">Condition</span><span class="code-keyword">="</span><span class="code-keyword"> ''$(Configuration)|$(Platform)'' == ''Debug|x86'' "</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>bin\\Debug\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-leadattribute">PropertyGroup</span> <span class="code-attribute">Condition</span><span class="code-keyword">="</span><span class="code-keyword"> ''$(Configuration)|$(Platform)'' == ''Release|x86'' "</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>bin\\Debug\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Project</span><span class="code-keyword">In an IT system with hundreds of project files, there is a need to set the output path to the same folder in all projects. This output path may be absolute (for example,&nbsp;<em>C:\\ITSystem1\\Runtime</em>) or relative (for example,<em>..\\..\\Runtime</em>).</span></pre>\r\n<p>Project files contain references to other assemblies:</p>\r\n<div id="premain1" class="pre-action-link"><img id="preimg1" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse1">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">Project</span> <span class="code-attribute">ToolsVersion</span><span class="code-keyword">="</span><span class="code-keyword">4.0"</span> <span class="code-attribute">DefaultTargets</span><span class="code-keyword">="</span><span class="code-keyword">Build"</span> \r\n              <span class="code-attribute">xmlns</span><span class="code-keyword">="</span><span class="code-keyword">http://schemas.microsoft.com/developer/msbuild/2003"</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">Reference</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">Assembly1"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Name</span><span class="code-keyword">&gt;</span>Assembly1<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Name</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>C:\\ITSystem1\\Runtime\\Assembly1.dll<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Private</span><span class="code-keyword">&gt;</span>False<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Private</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Reference</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">Reference</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">Assembly2"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Name</span><span class="code-keyword">&gt;</span>Assembly2<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Name</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>C:\\ITSystem1\\Runtime\\Assembly2.dll<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Private</span><span class="code-keyword">&gt;</span>False<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Private</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Reference</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Project</span><span class="code-keyword">The paths in the element "<code>HintPath</code>" may also be absolute, or relative. Assemblies that are entered into the Global Assembly Cache (GAC) must be strong signed. In older projects, the key file was defined in the&nbsp;<em>AssemblyInfo.vb</em>&nbsp;and<em>AssemblyInfo.cs</em>, respectively:</span></pre>\r\n<div id="premain2" class="pre-action-link"><img id="preimg2" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse2">Copy Code</span></div>\r\n<pre id="pre2" lang="text">Visual Basic: \r\nC#: [assembly: AssemblyKeyFile&#40;"C:\\ITSystem1\\Runtime\\Key1.snk"&#41;]</pre>\r\n<p><img src="http://www.codeproject.com/KB/macros/378174/ProjManip2.jpg" alt="Project properties Signing tab" width="640" height="154" /></p>\r\n<p>The following entries are created in the project file:</p>\r\n<div id="premain3" class="pre-action-link"><img id="preimg3" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse3">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">Project</span> <span class="code-attribute">ToolsVersion</span><span class="code-keyword">="</span><span class="code-keyword">4.0"</span> <span class="code-attribute">xmlns</span><span class="code-keyword">="</span><span class="code-keyword">http://schemas.microsoft.com/developer/msbuild/2003"</span> <span class="code-attribute">DefaultTargets</span><span class="code-keyword">="</span><span class="code-keyword">Build"</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>..\\Runtime\\Key1.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>true<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">None</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">..\\Runtime\\Key1.snk"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>FTS.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">None</span><span class="code-keyword">&gt;</span>\r\n  <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Project</span><span class="code-keyword">Generally, relative paths should be used, so that the entire IT system may be relocated to another folder, and because different branches may exist for development, integration test, UAT test, and production.</span></pre>\r\n<p><em>AssemblyInfo</em>&nbsp;files have an entry for the file version:</p>\r\n<div id="premain4" class="pre-action-link"><img id="preimg4" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse4">Copy Code</span></div>\r\n<pre id="pre4" lang="text">Visual Basic: \r\nC#: [Assembly: AssemblyFileVersion("6.0.0.0")]</pre>\r\n<p>The Solution</p>\r\n<p>OutputPath, references, and key-file-path as relative paths. With<em>Tests.ProjManip</em>, these paths can be changed to absolute paths, and then the may be changed back to relative paths. You may unzip the source into any folder, for example,&nbsp;<em>D:\\ProjManip</em>.</p>\r\n<ol>\r\n<li><img src="http://www.codeproject.com/KB/macros/378174/ProjManip1.jpg" alt="Main form of Tests.ProjManip project" width="640" height="482" /></li>\r\n</ol>\r\n<ul>\r\n<li>In the textbox "Source folder", set the folder under which all the projects are situated, for example,<em>D:\\ProjManip</em>. If you use the button to choose the folder, all files under that folder with the extension defined in "File filter", for example,&nbsp;<em>*.vbproj</em>&nbsp;are loaded and displayed on the grid. If you just type in the textbox, choose the menu File/Reload to load the files to the grid. In the "File filter" you may also define&nbsp;<em>*.csproj</em>&nbsp;for C# projects or any files adhering to the MSBuild standard.</li>\r\n<li>Actions operate on the selected items in the grid. In the textbox "Threads" the number of parallel threads may be defined. Each action spawns the number of defined threads, and each thread processes a portion of the selected items. You may choose one of the following actions:</li>\r\n<li>If you want to manipulate project files, choose the menu Tools/Projects/Check out. This will check out all selected projects.</li>\r\n<li>If you want to set the&nbsp;<code>AssemblyFileVersion</code>&nbsp;value in the AssemblyInfo files, choose the menu Tools/AssemblyInfo/Set file version. A prompt appears, displaying the&nbsp;<code>AssemblyFileVersion</code>&nbsp;of the first selected AssemblyInfo, which may be changed.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>AssemblyFileVersion&nbsp;value is set in all AssemblyInfo files of the selected projects. For example:</p>\r\n<div id="premain5" class="pre-action-link"><img id="preimg5" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse5">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">Assembly:</span> <span class="code-attribute">AssemblyFileVersion("1.0.0.1")</span><span class="code-keyword">If you want to set the&nbsp;<code>OutputPath</code>&nbsp;in the project files, set the output path in the text box "Output folder", for example,&nbsp;<em>D:\\ProjManip\\Runtime</em>, and then choose the menu item Tools/Projects/Set output path.</span></pre>\r\n<ul>\r\n<ul>\r\n<li>If the checkbox "Use relative paths" is not checked, the&nbsp;<code>OutputPath</code>&nbsp;is set as is in the selected projects. For example, in&nbsp;<em>Tests.ClassLibrary1.vbproj</em>&nbsp;and&nbsp;<em>Tests.WindowsApplication1.vbproj</em>, the<code>OutputPath</code>&nbsp;and the references are set as absolute paths. The output for&nbsp;<em>Tests.ClassLibrary1.vbproj</em>:</li>\r\n</ul>\r\n</ul>\r\n<div id="premain6" class="pre-action-link"><img id="preimg6" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse6">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>D:\\ProjManip\\Runtime\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">Reference</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">Tests.ClassLibrary1"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>D:\\ProjManip\\Runtime\\Tests.ClassLibrary1.dll\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Reference</span><span class="code-keyword">If the checkbox "Use relative paths" is checked, the&nbsp;<code>OutputPath</code>&nbsp;and all references to other assemblies are changed to relative paths. Note that for the relative paths to become correct, the existing paths must be absolute. The output for&nbsp;<em>Tests.ClassLibrary1.vbproj</em>:</span></pre>\r\n<div id="premain7" class="pre-action-link"><img id="preimg7" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse7">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>..\\Runtime\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">Reference</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">Tests.ClassLibrary1"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>..\\Runtime\\Tests.ClassLibrary1.dll\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">HintPath</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Reference</span><span class="code-keyword">If you want to search and replace with Regular Expressions in all projects, choose the menu item<em>Tools/Projects/Search</em>&nbsp;and Replace. This will open a form with two text boxes for the search pattern and the replace string.</span></pre>\r\n<p>&nbsp;</p>\r\n<p>OutputPath&nbsp;will be changed from:</p>\r\n<div id="premain8" class="pre-action-link"><img id="preimg8" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse8">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>..\\Runtime\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">to:</span></pre>\r\n<div id="premain9" class="pre-action-link"><img id="preimg9" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse9">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">&gt;</span>..\\..\\Runtime\\<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">OutputPath</span><span class="code-keyword">If you want to set the strong key file in the project files, choose the menu item Tools/Add strong key to projects. This will search for a&nbsp;<em>*.snk</em>&nbsp;file in the folder defined by the textbox "Output folder". This file is then added as a link to the project, and the project is set to be signed by this key file. The key file entry in<code>AssemblyInfo</code>&nbsp;is deleted.&nbsp;<em>Tests.ClassLibrarary1.vbproj</em>&nbsp;will be as follows:</span></pre>\r\n<ul>\r\n<ul>\r\n<li>Use relative paths checked:</li>\r\n</ul>\r\n</ul>\r\n<div id="premain10" class="pre-action-link"><img id="preimg10" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse10">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>..\\Runtime\\Tests.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>true<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">None</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">..\\Runtime\\Tests.snk"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>Tests.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">None</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">Use relative paths not checked:</span></pre>\r\n<div id="premain11" class="pre-action-link"><img id="preimg11" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse11">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>D:\\ProjManip\\Runtime\\Tests.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">AssemblyOriginatorKeyFile</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>true<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">SignAssembly</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">PropertyGroup</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-leadattribute">None</span> <span class="code-attribute">Include</span><span class="code-keyword">="</span><span class="code-keyword">D:\\ProjManip\\Runtime\\Tests.snk"</span><span class="code-keyword">&gt;</span>\r\n      <span class="code-keyword">&lt;</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>Tests.snk<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">Link</span><span class="code-keyword">&gt;</span>\r\n    <span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">None</span><span class="code-keyword">&gt;</span>\r\n<span class="code-keyword">&lt;</span><span class="code-keyword">/</span><span class="code-leadattribute">ItemGroup</span><span class="code-keyword">The AssemblyInfo file will have no entry for the strong key file.</span></pre>\r\n<ul>\r\n<li>If you want to set the strong key file in the AssemblyInfo files, choose the menu item Tools/Add strong key to AssemblyInfo. This will search for a&nbsp;<em>*.snk</em>&nbsp;file in the folder defined by the textbox "Output folder". A line for the key file is added to the AssemblyInfo, and the information about the key file is deleted from the project file. The<em>Tests.ClassLibrary1\\My Project\\AssemblyInfo.vb</em>&nbsp;file will have the following entry:</li>\r\n</ul>\r\n<div id="premain12" class="pre-action-link"><img id="preimg12" src="http://www.codeproject.com/images/minus.gif" alt="" width="9" height="9" /><span id="precollapse12">Copy Code</span></div>\r\n<pre lang="xml"><span class="code-keyword">&lt;</span><span class="code-leadattribute">Assembly:</span> <span class="code-attribute">AssemblyKeyFile&#40;"D:\\ProjManip\\Runtime\\Tests.snk"&#41;</span><span class="code-keyword"><em>Tests.ClassLibrary1.vbproj</em>&nbsp;will have no information about the strong key file. The project<em>Tests.WindowsApplication1</em>&nbsp;will not be changed, because no entry about a strong key file exists either in the project or in the AssemblyInfo.</span></pre>\r\n<ul>\r\n<li>If you want to cancel your changes, choose Tools/Projects/Undo check out and Tools/AssemblyInfo/Undo check out, respectively.</li>\r\n<li>You may double click on a grid row to open a project. The development environment defined in the textbox "DevEnv" is used.</li>\r\n</ul>\r\n<h2>License</h2>\r\n<div id="LicenseTerms">This article, along with any associated source code and files, is licensed under&nbsp;<a href="http://www.codeproject.com/info/cpol10.aspx" rel="license">The Code Project Open License (CPOL)</a></div>\r\n<pre id="pre12" lang="xml"><span class="code-keyword">\r\n<br />   </span></pre>', '2012-06-03', 'Vietnam, top-up'),
(5, 'Top-up via FOXBOX temirals available now in Lithuania', '<p>Content:</p>\r\n<p>Top-up via FOXBOX temirals available now in Lithuania</p>', '2012-05-04', ''),
(6, 'WebMoney News: Cheap Chineese gadgets at wsdeal.com', '<p>Content:</p>\r\n<p>WebMoney News: Cheap Chineese gadgets at wsdeal.com</p>', '2012-06-03', 'Chinese, gadgets'),
(7, 'The second online exchange for WMV is now open in Vietnam', '<p>Content:</p>\r\n<p>The second online exchange for WMV is now open in Vietnam</p>', '2012-05-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `is_online_support`
--

CREATE TABLE IF NOT EXISTS `is_online_support` (
  `online_support_id` int(10) NOT NULL,
  `yahoo_nick1` varchar(45) NOT NULL,
  `yahoo_nick2` varchar(45) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  PRIMARY KEY (`online_support_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_online_support`
--

INSERT INTO `is_online_support` (`online_support_id`, `yahoo_nick1`, `yahoo_nick2`, `name`, `phone`) VALUES
(1, 'mr_superan', 'omega_wepon_0311', 'nguyễn vũ an', 98876554);

-- --------------------------------------------------------

--
-- Table structure for table `is_order`
--

CREATE TABLE IF NOT EXISTS `is_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_code` int(11) DEFAULT NULL,
  `c_src` varchar(3) CHARACTER SET utf8 NOT NULL,
  `c_dst` varchar(3) CHARACTER SET utf8 NOT NULL,
  `amount_src` int(11) NOT NULL,
  `amount_dst` int(11) NOT NULL,
  `account_dst` varchar(64) NOT NULL,
  `status_src` int(11) DEFAULT '1',
  `status_dst` int(11) DEFAULT '1',
  `date_src` datetime DEFAULT NULL,
  `date_dst` datetime DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `status_src` (`status_src`),
  KEY `status_dst` (`status_dst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `is_order`
--

INSERT INTO `is_order` (`order_id`, `order_code`, `c_src`, `c_dst`, `amount_src`, `amount_dst`, `account_dst`, `status_src`, `status_dst`, `date_src`, `date_dst`, `email`, `note`) VALUES
(1, 123, 'LR', 'WU', 1000, 66, '', 1, 1, '2012-04-22 02:48:49', '2012-04-22 02:48:49', 'anh.trinhtrung@gmail.com', NULL),
(2, 2408, 'WU', 'LR', 1000, 879, '212312', 1, 1, '2012-04-22 02:49:17', NULL, 'anh.trinhtrung@gmail.com', NULL),
(3, NULL, 'WU', 'LR', 1000, 879, '123123', 1, 1, '2012-04-22 02:56:05', NULL, '123123@gmail.com', NULL),
(4, NULL, 'WU', 'LR', 1000, 879, '434', 1, 1, '2012-04-22 02:58:12', NULL, '123123@gmail.com', NULL),
(5, NULL, 'WU', 'LR', 1000, 879, '434', 1, 1, '2012-04-22 02:59:00', NULL, '123123@gmail.com', NULL),
(6, NULL, 'WU', 'LR', 293, 258, '123123', 1, 1, '2012-04-22 02:59:42', NULL, '123123@gmail.com', NULL),
(7, NULL, 'LR', 'WU', 1000, 982, '', 1, 1, '2012-04-22 03:39:53', NULL, 'asd@foor.bar', NULL),
(8, NULL, 'LR', 'WU', 456, 448, '', 1, 1, '2012-04-22 20:52:09', NULL, 'anh.trinhtrung@gmail.com', NULL),
(9, NULL, 'LR', 'WU', 1000, 982, '', 1, 1, '2012-04-22 20:55:05', NULL, 'asd@foor.bar', NULL),
(10, NULL, 'WU', 'LR', 1000, 879, 'U787879', 1, 1, '2012-04-22 20:58:10', NULL, 'anh.trinhtrung@gmail.com', NULL),
(11, NULL, 'LR', 'WU', 1000, 982, '', 1, 1, '2012-04-24 13:37:20', NULL, 'tungns@niw.com.vn', NULL),
(12, NULL, 'LR', 'WU', 2000, 1964, '', 1, 1, '2012-04-24 15:09:57', NULL, 'tungns@gmail.com', NULL),
(13, NULL, 'WU', 'LR', 1000, 879, 'U4567', 1, 1, '2012-04-24 15:13:48', NULL, 'tungns@gmail.com', NULL),
(14, NULL, 'WU', 'LR', 1000, 879, 'U3', 1, 1, '2012-06-04 19:59:04', NULL, 'admin@gmail.com', NULL),
(15, NULL, 'LR', 'WU', 1000, 982, '', 1, 1, '2012-06-04 20:17:32', NULL, 'tung_nguyenson89@yahoo.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `is_order_status`
--

CREATE TABLE IF NOT EXISTS `is_order_status` (
  `id` int(11) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_order_status`
--

INSERT INTO `is_order_status` (`id`, `value`) VALUES
(1, 'OPEN'),
(2, 'RECEIVED'),
(3, 'COMPLETE'),
(4, 'MANUAL PROCESSING'),
(5, 'CANCELLED'),
(6, 'EXPIRED'),
(7, 'DECLINED'),
(8, 'REFUNED');

-- --------------------------------------------------------

--
-- Table structure for table `is_pages`
--

CREATE TABLE IF NOT EXISTS `is_pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `is_pages`
--

INSERT INTO `is_pages` (`id`, `title`, `content`, `date`) VALUES
(7, 'FAQ', '<p>\r\n<div class="FAQContent"><label class="FAQTitle">Q. How do I protect my account from being accessed by unauthorized users?</label>\r\n<p>Never give out your passwords</p>\r\n<p>Always access Liberty Reserve with a trusted computer, with an updated anti-virus software installed.</p>\r\n<p>Never click on a link in an email, even if it came from your friend.</p>\r\n<p>Send us an email if you suspect a fake email or a fake web site.</p>\r\n</div>\r\n<div class="FAQContent"><label class="FAQTitle">Q. Am I allowed to have multiple Liberty Reserve accounts?</label>\r\n<p>A. Yes. You may open as many Liberty Reserve account as you wish as long as each account has its own unique e-mail address.</p>\r\n<p>Q. Now that I opened my Liberty Reserve account, how do I put funds into it?</p>\r\n<p  justify;">A. You may receive  payments to your account from other users or you may fund your account  using the services of our global network of exchange providers that  would be happy to exchange your national currency into Liberty Reserve.  The exchange providers accept the following funding options: bank wires,  Western Union, Money Gram, local mailed postal money orders, local cash  deposits, credit cards and funds from other payment systems. Liberty  Reserve does not offer direct account funding or withdrawal options.</p>\r\n</div>\r\n<div class="FAQContent"><label class="FAQTitle">Q. How do I convert e-gold, e-Bullion, Pecunix or Webmoney to Liberty Reserve?</label>\r\n<p  justify;">A. Our exchange  providers are more than happy to exchange your funds stored in a  different payment system and put them into your Liberty Reserve account</p>\r\n</div>\r\n<div class="FAQContent"><label class="FAQTitle">Q. I have USD in my account and I need it to be converted to Euro. How do I go about this?</label>\r\n<p  justify;">A. Please note that  you can not exchange LR USD and LR EURO currencies inside of your  Liberty Reserve account. You need to purchase each currency separately  or exchange it through one of the independent exchange providers listed  under Buy/Sell LR link.</p>\r\n</div>\r\n<div class="FAQContent"><label class="FAQTitle">Q. Which is the fastest, the most trustworthy and the cheapest exchange provider?</label>\r\n<p  justify;">A. You can find a  list of established and professional exchange providers on the "Buy/Sell  LR" page. The order processing speed varies from exchanger to  exchanger. Usually most orders are completed within 24 or 48 hours.  Please contact each individual exchanger for more information regarding  their services and fees.</p>\r\n</div>\r\n<div class="FAQContent"><label class="FAQTitle">Q. What is an Exchange Provider?  How do I work with an Exchange Provider to fund my Liberty Reserve  account or withdraw funds from Liberty Reserve?</label>\r\n<p  justify;">A. An exchanger is a  person or company who, for a fee, exchanges cash, credit cards and a  variety of other items (i.e. other digital or electronic currencies)  into the type of currency requested by an individual or company.  Remember that each exchanger listed is an independently owned and  operated business. They each have their own sets of policies,  procedures, fees and funding methods to meet their market demand. They  are also located and serve various jurisdictions in various countries.  You should do your own due diligence to determine which exchanger will  best fit your needs relating to funding options.</p>\r\n</div>\r\n</p>', '2012-05-05'),
(8, 'Service Fees', '<table class="fees-table" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td colspan="3">\r\n<p class="fees-head1">Service Fees and Fee Comparison Chart</p>\r\n</td>\r\n</tr>\r\n<tr class="fees-row">\r\n<td class="fee-col1"><br /></td>\r\n<td class="fee-col2">\r\n<p class="fees-head2">Receiving</p>\r\n</td>\r\n<td>\r\n<p class="fees-head2">Sending</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="fee-col1">\r\n<p class="fees-content-cell"  3px;">Transfers</p>\r\n</td>\r\n<td class="fee-col2">\r\n<p class="fees-content-cell"  3px; padding-left: 20px;">(min $0.01, max $2.99)</p>\r\n</td>\r\n<td>\r\n<p>$0.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="fee-col1"><br /></td>\r\n<td class="fee-col2"><label>1%</label></td>\r\n</tr>\r\n<tr  5px;">\r\n<td class="fee-col1"><br /></td>\r\n<td class="fee-col2">\r\n<p class="fees-content-cell"  20px;">(min &euro;0.01, max &euro;2.99)</p>\r\n</td>\r\n<td>\r\n<p>&euro;0.00</p>\r\n</td>\r\n</tr>\r\n<tr class="fees-row">\r\n<td class="fee-col1"  40px;">Optional Privacy</td>\r\n<td class="fee-col2"  40px;">\r\n<p>_</p>\r\n</td>\r\n<td  40px;">\r\n<p class="green">yes</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="fee-col1">\r\n<p>Monthly Fee</p>\r\n</td>\r\n<td class="fee-col2">\r\n<p>$0.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><br /></td>\r\n<td class="fee-col2">\r\n<p>&euro;0.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="fee-col1">\r\n<p>Account Opening Fee</p>\r\n</td>\r\n<td class="fee-col2">\r\n<p>$0.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="fee-col1"><br /></td>\r\n<td class="fee-col2">\r\n<p>&euro;0.00</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class="fees-table" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td colspan="5">\r\n<p class="fees-head1">Fee Comparison Chart</p>\r\n</td>\r\n</tr>\r\n<tr class="fees-row"  bold;">\r\n<td><br /></td>\r\n<td>\r\n<p class="green">Liberty Reserve</p>\r\n</td>\r\n<td>\r\n<p class="red">PayPal</p>\r\n</td>\r\n<td>\r\n<p>MoneyBookers</p>\r\n</td>\r\n<td>\r\n<p>Neteller</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Location</p>\r\n</td>\r\n<td>\r\n<p class="green">Costa Rica</p>\r\n</td>\r\n<td>\r\n<p class="red">USA*</p>\r\n</td>\r\n<td>\r\n<p>UK</p>\r\n</td>\r\n<td>\r\n<p>UK</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Balances flactuate with the proce of gold</p>\r\n</td>\r\n<td>\r\n<p class="green">No</p>\r\n</td>\r\n<td>\r\n<p class="green">No</p>\r\n</td>\r\n<td>\r\n<p class="green">No</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Transaction Fee</p>\r\n</td>\r\n<td>\r\n<p class="green">1%</p>\r\n</td>\r\n<td>\r\n<p class="red">2.4%-3.4% + $0.30</p>\r\n</td>\r\n<td>\r\n<p class="red">1.9%-7.9% + 0.29 &euro;</p>\r\n</td>\r\n<td>\r\n<p class="red">3.5%</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Minimum Fee</p>\r\n</td>\r\n<td>\r\n<p class="green">$0.01</p>\r\n</td>\r\n<td>\r\n<p class="red">$0.30</p>\r\n</td>\r\n<td>\r\n<p class="red">0.29 &euro;</p>\r\n</td>\r\n<td>\r\n<p class="red">$1.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Maximum Fee</p>\r\n</td>\r\n<td>\r\n<p class="green">$2.99</p>\r\n</td>\r\n<td>\r\n<p class="red">$1000+</p>\r\n</td>\r\n<td>\r\n<p class="red">$1000+</p>\r\n</td>\r\n<td>\r\n<p class="red">$10.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Monthly Fee</p>\r\n</td>\r\n<td>\r\n<p class="green">$0.00</p>\r\n</td>\r\n<td>\r\n<p class="green">$0.00</p>\r\n</td>\r\n<td>\r\n<p class="green">$0.00</p>\r\n</td>\r\n<td>\r\n<p class="green">$0.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Optional Privacy Fee</p>\r\n</td>\r\n<td>\r\n<p class="green">Yes</p>\r\n</td>\r\n<td>\r\n<p>Not Offered</p>\r\n</td>\r\n<td>\r\n<p>Not Offered</p>\r\n</td>\r\n<td>\r\n<p>Not Offered</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cost of a $100 Transfer</p>\r\n</td>\r\n<td>\r\n<p class="green">$1.00</p>\r\n</td>\r\n<td>\r\n<p class="red">$3.70</p>\r\n</td>\r\n<td>\r\n<p class="red">$8.27</p>\r\n</td>\r\n<td>\r\n<p class="red">$3.50</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cost of a $1000 Transfer</p>\r\n</td>\r\n<td>\r\n<p class="green">$2.99</p>\r\n</td>\r\n<td>\r\n<p class="red">$34.30</p>\r\n</td>\r\n<td>\r\n<p class="red">$79.37</p>\r\n</td>\r\n<td>\r\n<p class="red">$10.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Cost of a $10,000 Transfer</p>\r\n</td>\r\n<td>\r\n<p class="green">$2.99</p>\r\n</td>\r\n<td>\r\n<p class="red">$340.30</p>\r\n</td>\r\n<td>\r\n<p class="red">$790.37</p>\r\n</td>\r\n<td>\r\n<p class="red">$10.00</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Notes</p>\r\n</td>\r\n<td>\r\n<p class="green">No chargebacks</p>\r\n</td>\r\n<td>\r\n<p class="red">Chargebacks</p>\r\n</td>\r\n<td>\r\n<p class="red">Chargebacks</p>\r\n</td>\r\n<td>\r\n<p class="red">Chargebacks</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td colspan="5">\r\n<p  20px;">* &mdash; Administration and bank accounts are under US jurisdiction (e-gold, AlertPay, PayPal).</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2012-05-05'),
(9, 'Exchangers', '<p>In order to add or remove funds from your LR account you should use one  of the independent exchange providers from the list below. Please note  that businesses listed on this page are independent and in no way  related to Liberty Reserve, and Liberty Reserve does not guarantee any  outcome that you may experience with these companies.\r\n<p>The benefits of having independent exchange companies are</p>\r\n<ul>\r\n<li>you can find an exchanger that speaks your language! </li>\r\n<li>you can use an exchanger that is in your city or in your country! </li>\r\n<li>you  can always find an exchanger with the funding method you prefer (bank  wires, credit cards, Western Union, mailed in money orders and checks,  local cash deposits, ...) </li>\r\n<li>competition always results in a better service and lower fees! </li>\r\n</ul>\r\n<p><em>Please use <a href="http://www.bsrates.com">BSrates.com</a> to check for the best available rates today from the most reputable exchangers.</em></p>\r\n</p>', '2012-05-03'),
(10, 'Merchants', '<p>\r\n<p>The businesses listed on these pages are independent and in no way  related to Liberty Reserve, and Liberty Reserve does not guarantee any  outcome that you may experience  with these merchants.</p>\r\n</p>', '2012-05-03'),
(11, 'Download', '', '2012-05-03'),
(12, 'Consummer Alert', '', '2012-05-03'),
(13, 'Our Accounts', '<table border="0" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td align="left">Our E-currency accounts</td>\r\n</tr>\r\n<tr height="1" bgcolor="#c0c0c0">\r\n<td><br /></td>\r\n</tr>\r\n<tr>\r\n<td align="left">\r\n<table border="0" cellspacing="0" cellpadding="4" align="left">\r\n<tbody>\r\n<tr>\r\n<td align="left">\r\n<table border="0" cellspacing="0" cellpadding="0" align="left">\r\n<tbody>\r\n<tr valign="top">\r\n<td><span  #000000;">E-currency: </span></td>\r\n<td class="bluetext">Liberty Reserve</td>\r\n</tr>\r\n<tr valign="top">\r\n<td><span  #000000;">Account id: </span></td>\r\n<td class="bluetext">U3440308</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left">\r\n<table border="0" cellspacing="0" cellpadding="0" align="left">\r\n<tbody>\r\n<tr valign="top">\r\n<td><span  #000000;">E-currency: </span></td>\r\n<td class="bluetext">Western Union</td>\r\n</tr>\r\n<tr valign="top">\r\n<td><span  #000000;">Account id: </span></td>\r\n<td class="bluetext"><br /></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"><br /></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n<tr>\r\n<td align="left"></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2012-05-03'),
(14, 'Our Company', '<div>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>\r\n</div>\r\n<div><span  #ff0000;"><strong><label>location</label></strong></span></div>\r\n<div><strong><br /></strong></div>', '2012-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `is_rate`
--

CREATE TABLE IF NOT EXISTS `is_rate` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id_src` int(11) NOT NULL,
  `c_id_dst` int(11) NOT NULL,
  `rate_dst` float NOT NULL,
  PRIMARY KEY (`rate_id`),
  KEY `c_id_src` (`c_id_src`),
  KEY `c_id_dst` (`c_id_dst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `is_rate`
--

INSERT INTO `is_rate` (`rate_id`, `c_id_src`, `c_id_dst`, `rate_dst`) VALUES
(1, 1, 2, 0.982),
(2, 2, 1, 0.879);

-- --------------------------------------------------------

--
-- Table structure for table `is_reviews`
--

CREATE TABLE IF NOT EXISTS `is_reviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `title` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `date` date NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `is_reviews`
--

INSERT INTO `is_reviews` (`id`, `name`, `location`, `email`, `phone_number`, `title`, `comment`, `rating`, `date`, `order_id`) VALUES
(1, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(2, 'lê xuân tiến', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(3, 'nguyễn sơn tùng', 'UK', 'tungns@gmail.com', 9877667, 'Extracts from BBC interview', 'Chinese officials on Wednesday accused the US of interference in China''s domestic affairs and demanded an apology for housing Mr Chen at the US embassy.\r\n\r\nState media have been largely quiet on the issue but a commentary in the state-run Global Times said progress in human rights ''''cannot be realised in one night through a political decision, nor can it be donated by outsiders''''.', 4, '2012-05-23', 2),
(4, 'nguyễn sơn tùng', 'UK', 'tungns@gmail.com', 9877667, 'Extracts from BBC interview', 'Chinese officials on Wednesday accused the US of interference in China''s domestic affairs and demanded an apology for housing Mr Chen at the US embassy.\r\n\r\nState media have been largely quiet on the issue but a commentary in the state-run Global Times said progress in human rights ''''cannot be realised in one night through a political decision, nor can it be donated by outsiders''''.', 4, '2012-05-23', 2),
(5, 'lê xuân tiến', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(6, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(7, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(8, 'tienlx', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(9, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `is_site_settings`
--

CREATE TABLE IF NOT EXISTS `is_site_settings` (
  `site_settings_id` int(30) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_url` varchar(45) NOT NULL,
  `site_secure` varchar(45) NOT NULL,
  `friendly_url` int(2) NOT NULL,
  `temporary` int(2) NOT NULL,
  PRIMARY KEY (`site_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `is_user`
--

CREATE TABLE IF NOT EXISTS `is_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `country` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(13, '山', 'Fjell p&aring; Norsk', '', '', '', 'active', 10, 5, 1, 9),
(14, 'Elv', 'elv', '', '', '', 'active', 25, 5, 1, 11),
(15, '瞑想', '瞑想', '', '', '', 'active', 30, 5, 1, 7),
(16, 'Alver', 'Alver', '', '', '', 'active', 40, 5, 1, 2),
(17, 'Angels', 'Angels in english', '', '', '', 'active', 35, 1, 0, 17),
(19, '天使', 'Engler', '', '', '', 'active', 35, 5, 1, 17),
(20, 'Magic', 'Magic desc.', '', '', '', 'active', 55, 1, 0, 20),
(23, 'Ocean', 'Ocean desc', '', '', '', 'active', 70, 1, 0, 23),
(24, 'マジック', '', '<p>Content</p>', '', '', 'active', NULL, 5, 1, 20);

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
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `omc_products`
--

INSERT INTO `omc_products` (`id`, `name`, `public`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `product_order`, `class`, `grouping`, `status`, `category_id`, `featured`, `other_feature`, `price`, `lang_id`, `table_id`) VALUES
(1, 'Fairy', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim.</p>\n<p>Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 2, 'webshop', 'most sold', 200.00, 0, 1),
(2, '妖精', 1, '', '<p>妖精</p>\n<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing? Natoque?</p>\n<p>Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim. Dis odio enim nec.</p>\n<p>Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 16, 'webshop', 'most sold', 40.00, 1, 1),
(3, 'Meditation', 1, 'meditation ', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 7, 'webshop', 'most sold', 400.00, 0, 3),
(4, '瞑想', 1, '<p>medtation en</p>', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 15, 'webshop', 'most sold', 700.00, 1, 3),
(5, 'Kawa', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>\n<p>Natoque? Aliquet ut, platea lacus in! Tempor hac placerat magna massa dignissim egestas turpis nec sed! Elementum in. Etiam magnis dictumst? Pulvinar mid facilisis mid enim.</p>\n<p>Dis odio enim nec. Odio in vel? Parturient vel eros! In, etiam etiam vel, pulvinar tortor, diam etiam tristique urna, porttitor habitasse, tincidunt aliquet tristique in tristique nunc mid in, rhoncus ac lacus placerat, nec urna in dis, urna et rhoncus lectus? Rhoncus nisi auctor arcu scelerisque, nec ut scelerisque.</p>', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_12.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_12.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 11, 'webshop', 'new product', 30.00, 0, 5),
(8, '川', 1, '', '', '<p><img src="../../../../assets/images/cd/thumbnails/114x207_12.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/cd/242x440_12.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 14, 'webshop', 'most sold', 340.00, 1, 5),
(9, 'Blue angels', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 17, 'webshop', 'most sold', 0.00, 0, 9),
(10, '青い妖精', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_6.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_6.jpg" alt="" width="242" height="440" /></p>', 0, '', '', 'active', 19, 'webshop', 'most sold', 340.00, 1, 9),
(11, 'Hello everyone', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_13.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_13.jpg" alt="" width="242" height="440" /></p>', 50, '', '', 'active', 7, 'webshop', 'most sold', 40.00, 0, 11),
(12, 'Hi på deg', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet, adipiscing?</p>', '<p><img src="../../../assets/images/books/thumbnails/114x207_13.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/books/242x440_13.jpg" alt="" width="242" height="440" /></p>', 50, '', '', 'active', 15, 'webshop', 'most sold', 340.00, 1, 11),
(13, 'Mt Fuji', 1, '', '', '<p><img src="../../../../assets/images/books/thumbnails/114x207_14.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_14.jpg" alt="" width="242" height="440" /></p>', 60, '', '', 'active', 9, 'webshop', 'none', 50.00, 0, 13),
(14, 'Mt Fuji', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing.</p>', '<p><img src="../../../../assets/images/books/thumbnails/114x207_14.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../../assets/images/books/242x440_14.jpg" alt="" width="242" height="440" /></p>', 60, '', '', 'active', 13, 'webshop', 'none', 230.00, 1, 13),
(15, 'Go Harry', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet,</p>', '<p><img src="../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 80, '', '', 'active', 20, 'webshop', 'most sold', 50.00, 0, 15),
(16, 'Gå Harry', 1, '', '<p>Tempor! Parturient ac sit! Aliquam dapibus, ut eros sit ac augue eu pulvinar adipiscing vel scelerisque, magnis aliquet dis diam sociis! Proin sit facilisis et et, integer, in, diam integer sit ridiculus dapibus rhoncus odio ultricies platea magnis tincidunt nec urna adipiscing, aliquet,</p>', '<p><img src="../../../assets/images/cd/thumbnails/114x207_11.jpg" alt="" width="114" height="207" /></p>', '<p><img src="../../../assets/images/cd/242x440_11.jpg" alt="" width="242" height="440" /></p>', 80, '', '', 'active', 7, 'webshop', 'most sold', 220.00, 1, 15),
(17, 'Amazon river', 1, '', '<p>Long desc</p>', '', '', 70, '', '', 'active', 11, 'none', 'none', 0.00, 0, 17);

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

--
-- Constraints for table `is_account_setting`
--
ALTER TABLE `is_account_setting`
  ADD CONSTRAINT `is_account_setting_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `is_currency` (`c_id`);

--
-- Constraints for table `is_admin`
--
ALTER TABLE `is_admin`
  ADD CONSTRAINT `is_admin_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `is_currency` (`c_id`);

--
-- Constraints for table `is_order`
--
ALTER TABLE `is_order`
  ADD CONSTRAINT `is_order_ibfk_1` FOREIGN KEY (`status_src`) REFERENCES `is_order_status` (`id`),
  ADD CONSTRAINT `is_order_ibfk_2` FOREIGN KEY (`status_dst`) REFERENCES `is_order_status` (`id`);

--
-- Constraints for table `is_rate`
--
ALTER TABLE `is_rate`
  ADD CONSTRAINT `is_rate_ibfk_1` FOREIGN KEY (`c_id_src`) REFERENCES `is_currency` (`c_id`),
  ADD CONSTRAINT `is_rate_ibfk_2` FOREIGN KEY (`c_id_dst`) REFERENCES `is_currency` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
