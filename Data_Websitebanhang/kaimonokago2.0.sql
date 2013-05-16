-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 04:20 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaimonokago2.0`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

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
(20, 39, 42, 'Products', 0),
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
(40, 58, 59, 'Phpinfo', 0),
(41, 40, 41, 'tuyet', 0);

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
('twittercount', '20');

-- --------------------------------------------------------

--
-- Table structure for table `be_resources`
--

CREATE TABLE IF NOT EXISTS `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

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
(40, 0),
(41, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `be_users`
--

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', 'ec3370d1542087b55fb0eb0a5490025fafe0c125', 'admin@niw.com.vn', 1, 2, NULL, '2012-12-31 07:23:17', '2012-02-22 13:46:09', '2012-07-14 02:39:18'),
(2, 'mooncavalier', '8b978868f72afbc7ae583ac9bebe5dee7c48379c', 'mooncavalier110205@gmail.com', 1, 2, 'hUFCkiIOh9BoLeimJA1ByRhLprmaKZCY', '2013-04-03 10:18:13', '2012-07-31 03:34:32', NULL),
(3, 'thoant', 'f971425e80ab676ba14671e0ff21deb9db66638f', 'thoanguyen133@gmail.com', 1, 2, NULL, '2012-09-18 03:39:50', '2012-08-06 02:30:41', '2012-08-18 04:05:49'),
(4, 'anhvh', 'f971425e80ab676ba14671e0ff21deb9db66638f', 'hoanganh24389@gmail.com', 1, 2, NULL, NULL, '2012-08-06 02:36:48', '2012-08-20 03:26:10');

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
(3, '', '', '', '', '', '', 0),
(4, '', '', '', '', '', '', 0),
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
('161868081f4c3e7cabfa8e8badb4d046', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1364976056, 'a:1:{s:9:"user_data";s:0:"";}'),
('26c7fa1e874c1d8f805496b65044dcac', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1364974040, ''),
('45473cd45476eaf66b93ff4d2663ccd9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1364977651, 'a:12:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:8:"username";s:12:"mooncavalier";s:5:"email";s:28:"mooncavalier110205@gmail.com";s:8:"password";s:40:"8b978868f72afbc7ae583ac9bebe5dee7c48379c";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-08-18 04:04:51";s:7:"created";s:19:"2012-07-31 03:34:32";s:8:"modified";N;s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}'),
('7578a018296688bfcec36e3f2ecd9b25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0', 1365480814, ''),
('9bd8c7e87db8a7a4f46107084b29385c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1365065861, ''),
('9d5ab0f22969355e092fb031b60a2cab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1364972611, ''),
('a8ea9fc57f400fbe6977a8d344f71d85', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1365120851, ''),
('daa7a1bb93489662927a5d55499dbd12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31', 1364975504, 'a:1:{s:9:"user_data";s:0:"";}');

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
-- Table structure for table `niw_template`
--

CREATE TABLE IF NOT EXISTS `niw_template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `url` varchar(2000) NOT NULL,
  `image` varchar(2000) NOT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `niw_template`
--

INSERT INTO `niw_template` (`template_id`, `name`, `url`, `image`) VALUES
(1, 'Adventure - Magenta', 'Adventure/Previews/magenta.jpg', 'thumb.php?tpl=Adventure&color=magenta.jpg'),
(2, 'Antiques - Brown', 'Antiques/Previews/brown.jpg', 'thumb.php?tpl=Antiques&color=brown.jpg'),
(3, 'ArtFraming - White', 'ArtFraming/Previews/white.jpg', 'thumb.php?tpl=ArtFraming&color=white.jpg'),
(4, 'Automotive - Black', 'ArtsCrafts/Previews/bright.jpg', 'thumb.php?tpl=ArtsCrafts&color=bright.jpg'),
(5, 'Automotive - Black', 'Automotive/Previews/black.jpg', 'thumb.php?tpl=Automotive&color=black.jpg'),
(6, 'Baby - Pastel', 'Baby/Previews/pastel.jpg', 'thumb.php?tpl=Baby&color=pastel.jpg'),
(7, 'Bargains - Red', 'Bargains/Previews/red.jpg', 'thumb.php?tpl=Bargains&color=red.jpg'),
(8, 'Beauty - Pink', 'Beauty/Previews/pink.jpg', 'thumb.php?tpl=Beauty&color=pink.jpg'),
(9, 'Beauty - Turquoise', 'Beauty/Previews/turquoise.jpg', 'thumb.php?tpl=Beauty&color=turquoise.jpg'),
(10, 'Benefits - Gray', 'Benefits/Previews/gray.jpg', 'thumb.php?tpl=Benefits&color=gray.jpg'),
(11, 'Blackstore - Black', 'Blackstore/Previews/black.jpg', 'thumb.php?tpl=Blackstore&color=black.jpg'),
(12, 'Bodybuilding - Orange', 'Bodybuilding/Previews/orange.jpg', 'thumb.php?tpl=Bodybuilding&color=orange.jpg'),
(13, 'Books - Cream', 'Books/Previews/cream.jpg', 'thumb.php?tpl=Books&color=cream.jpg'),
(14, 'Brownstore - Brown', 'Brownstore/Previews/brown.jpg', 'thumb.php?tpl=Brownstore&color=brown.jpg'),
(15, 'Cameras - Red', 'Cameras/Previews/red.jpg', 'thumb.php?tpl=Cameras&color=red.jpg'),
(16, 'CarAudio - Black', 'CarAudio/Previews/black.jpg', 'thumb.php?tpl=CarAudio&color=black.jpg'),
(17, 'CellPhones - Blue', 'CellPhones/Previews/blue.jpg', 'thumb.php?tpl=CellPhones&color=blue.jpg'),
(18, 'Chocolate - Brown', 'Chocolate/Previews/brown.jpg', 'thumb.php?tpl=Chocolate&color=brown.jpg'),
(19, 'CoffeeShop - Brown', 'CoffeeShop/Previews/brown.jpg', 'thumb.php?tpl=CoffeeShop&color=brown.jpg'),
(20, 'CognacShop - Brown', 'CognacShop/Previews/brown.jpg', 'thumb.php?tpl=CognacShop&color=brown.jpg'),
(21, 'Computers - Purple', 'Computers/Previews/purple.jpg', 'thumb.php?tpl=Computers&color=purple.jpg'),
(22, 'CorporateGifts - Yellow', 'CorporateGifts/Previews/yellow.jpg', 'thumb.php?tpl=CorporateGifts&color=yellow.jpg'),
(23, 'Cosmetics - Palegreen', 'Cosmetics/Previews/palegreen.jpg', 'thumb.php?tpl=Cosmetics&color=palegreen.jpg'),
(24, 'CosmeticStuff - Gray', 'CosmeticStuff/Previews/gray.jpg', 'thumb.php?tpl=CosmeticStuff&color=gray.jpg'),
(25, 'DarkShir - Blue', 'DarkShir/Previews/blue.jpg', 'thumb.php?tpl=DarkShir&color=blue.jpg'),
(26, 'Default - Blue', 'default/Previews/blue.jpg', 'thumb.php?tpl=default&color=blue.jpg'),
(27, 'DiamondRings - Blue', 'DiamondRings/Previews/blue.jpg', 'thumb.php?tpl=DiamondRings&color=blue.jpg'),
(28, 'Electronics - Magenta', 'Electronics/Previews/magenta.jpg', 'thumb.php?tpl=Electronics&color=magenta.jpg'),
(29, 'Entertainment - Red', 'Entertainment/Previews/red.jpg', 'thumb.php?tpl=Entertainment&color=red.jpg'),
(30, 'Fashion - Orange', 'Fashion/Previews/orange.jpg', 'thumb.php?tpl=Fashion&color=orange.jpg'),
(31, 'FashionJewellery - Purple', 'FashionJewellery/Previews/purple.jpg', 'thumb.php?tpl=FashionJewellery&color=purple.jpg'),
(32, 'Flowers - Green', 'Flowers/Previews/green.jpg', 'thumb.php?tpl=Flowers&color=green.jpg'),
(33, 'Food - Maroon', 'Food/Previews/maroon.jpg', 'thumb.php?tpl=Food&color=maroon.jpg'),
(34, 'Furniture - Ecru', 'Furniture/Previews/ecru.jpg', 'thumb.php?tpl=Furniture&color=ecru.jpg'),
(35, 'Gadgets - Yellow', 'Gadgets/Previews/yellow.jpg', 'thumb.php?tpl=Gadgets&color=yellow.jpg'),
(36, 'Garden - Green', 'Garden/Previews/green.jpg', 'thumb.php?tpl=Garden&color=green.jpg'),
(37, 'GardenFurniture - Green', 'GardenFurniture/Previews/green.jpg', 'thumb.php?tpl=GardenFurniture&color=green.jpg'),
(38, 'Gifts - Brown', 'Gifts/Previews/brown.jpg', 'thumb.php?tpl=Gifts&color=brown.jpg'),
(39, 'GiftsShop - Beige', 'GiftsShop/Previews/beige.jpg', 'thumb.php?tpl=GiftsShop&color=beige.jpg'),
(40, 'Handbags - Grey', 'Handbags/Previews/grey.jpg', 'thumb.php?tpl=Handbags&color=grey.jpg'),
(41, 'Health - Green', 'Health/Previews/green.jpg', 'thumb.php?tpl=Health&color=green.jpg'),
(42, 'Hobbies - Green', 'Hobbies/Previews/green.jpg', 'thumb.php?tpl=Hobbies&color=green.jpg'),
(43, 'Homewares - Brown', 'Homewares/Previews/brown.jpg', 'thumb.php?tpl=Homewares&color=brown.jpg'),
(44, 'Infinity - Red', 'Infinity/Previews/red.jpg', 'thumb.php?tpl=Infinity&color=red.jpg'),
(45, 'Jewellery - Black', 'Jewellery/Previews/black.jpg', 'thumb.php?tpl=Jewellery&color=black.jpg'),
(46, 'KidsClothing - Gray', 'KidsClothing/Previews/gray.jpg', 'thumb.php?tpl=KidsClothing&color=gray.jpg'),
(47, 'Kitchenware - Red', 'Kitchenware/Previews/red.jpg', 'thumb.php?tpl=Kitchenware&color=red.jpg'),
(48, 'Lingerie - Pink', 'Lingerie/Previews/pink.jpg', 'thumb.php?tpl=Lingerie&color=pink.jpg'),
(49, 'Luggage - Purple', 'Luggage/Previews/purple.jpg', 'thumb.php?tpl=Luggage&color=purple.jpg'),
(50, 'Magnificent - Blue', 'Magnificent/Previews/blue.jpg', 'thumb.php?tpl=Magnificent&color=blue.jpg'),
(51, 'MensClothes - Gray', 'MensClothes/Previews/gray.jpg', 'thumb.php?tpl=MensClothes&color=gray.jpg'),
(52, 'Military - Gray', 'Military/Previews/gray.jpg', 'thumb.php?tpl=Military&color=gray.jpg'),
(53, 'Moss - Green', 'Moss/Previews/green.jpg', 'thumb.php?tpl=Moss&color=green.jpg'),
(54, 'Mystore - Beige', 'Mystore/Previews/beige.jpg', 'thumb.php?tpl=Mystore&color=beige.jpg'),
(55, 'Mystore - Blue', 'Mystore/Previews/blue.jpg', 'thumb.php?tpl=Mystore&color=blue.jpg'),
(56, 'Mystore - Gray', 'Mystore/Previews/gray.jpg', 'thumb.php?tpl=Mystore&color=gray.jpg'),
(57, 'Mystore - Green', 'Mystore/Previews/green.jpg', 'thumb.php?tpl=Mystore&color=green.jpg'),
(58, 'Mystore - Pink', 'Mystore/Previews/pink.jpg', 'thumb.php?tpl=Mystore&color=pink.jpg'),
(59, 'NavyStore - Blue', 'NavyStore/Previews/blue.jpg', 'thumb.php?tpl=NavyStore&color=blue.jpg'),
(60, 'NearestStore - Blue', 'NearestStore/Previews/blue.jpg', 'thumb.php?tpl=NearestStore&color=blue.jpg'),
(61, 'NeonStore - Red', 'NeonStore/Previews/red.jpg', 'thumb.php?tpl=NeonStore&color=red.jpg'),
(62, 'Nightwear - Coolblue', 'Nightwear/Previews/coolblue.jpg', 'thumb.php?tpl=Nightwear&color=coolblue.jpg'),
(63, 'Office - Blue', 'Office/Previews/blue.jpg', 'thumb.php?tpl=Office&color=blue.jpg'),
(64, 'Orange - Orange', 'Orange/Previews/orange.jpg', 'thumb.php?tpl=Orange&color=orange.jpg'),
(65, 'Organic - Brown', 'Organic/Previews/brown.jpg', 'thumb.php?tpl=Organic&color=brown.jpg'),
(66, 'Organicfood - Green', 'Organicfood/Previews/green.jpg', 'thumb.php?tpl=Organicfood&color=green.jpg'),
(67, 'Perfume - Yellow', 'Perfume/Previews/yellow.jpg', 'thumb.php?tpl=Perfume&color=yellow.jpg'),
(68, 'Pets - Blue', 'Pets/Previews/blue.jpg', 'thumb.php?tpl=Pets&color=blue.jpg'),
(69, 'Purses - Gray', 'Purses/Previews/gray.jpg', 'thumb.php?tpl=Purses&color=gray.jpg'),
(70, 'Reserved - Beige', 'Reserved/Previews/beige.jpg', 'thumb.php?tpl=Reserved&color=beige.jpg'),
(71, 'Rubystore - Red', 'Rubystore/Previews/red.jpg', 'thumb.php?tpl=Rubystore&color=red.jpg'),
(72, 'Serenity - Blue', 'Serenity/Previews/blue.jpg', 'thumb.php?tpl=Serenity&color=blue.jpg'),
(73, 'Serenity - Blue', 'Serenity/Previews/blue.jpg', 'thumb.php?tpl=Serenity&color=blue.jpg'),
(74, 'Shoes - Brown', 'Shoes/Previews/brown.jpg', 'thumb.php?tpl=Shoes&color=brown.jpg'),
(75, 'SimplePurple - Purple', 'SimplePurple/Previews/purple.jpg', 'thumb.php?tpl=SimplePurple&color=purple.jpg'),
(76, 'SimpleStore - Blue', 'SimpleStore/Previews/blue.jpg', 'thumb.php?tpl=SimpleStore&color=blue.jpg'),
(77, 'SimpleStore - Gray', 'SimpleStore/Previews/gray.jpg', 'thumb.php?tpl=SimpleStore&color=gray.jpg'),
(78, 'SimpleStore - Green', 'SimpleStore/Previews/green.jpg', 'thumb.php?tpl=SimpleStore&color=green.jpg'),
(79, 'SimpleStore - Orange', 'SimpleStore/Previews/orange.jpg', 'thumb.php?tpl=SimpleStore&color=orange.jpg'),
(80, 'SkateSurf - Gray', 'SkateSurf/Previews/gray.jpg', 'thumb.php?tpl=SkateSurf&color=gray.jpg'),
(81, 'Skincare - Cream', 'Skincare/Previews/cream.jpg', 'thumb.php?tpl=Skincare&color=cream.jpg'),
(82, 'SmallAppliances - Grey', 'SmallAppliances/Previews/grey.jpg', 'thumb.php?tpl=SmallAppliances&color=grey.jpg'),
(83, 'SmartShop - Red', 'SmartShop/Previews/red.jpg', 'thumb.php?tpl=SmartShop&color=red.jpg'),
(84, 'Software - Blue', 'Software/Previews/blue.jpg', 'thumb.php?tpl=Software&color=blue.jpg'),
(85, 'Sport - Skyblue', 'Sport/Previews/skyblue.jpg', 'thumb.php?tpl=Sport&color=skyblue.jpg'),
(86, 'StoreSuite - Blue', 'StoreSuite/Previews/blue.jpg', 'thumb.php?tpl=StoreSuite&color=blue.jpg'),
(87, 'StoreSuite - Green', 'StoreSuite/Previews/green.jpg', 'thumb.php?tpl=StoreSuite&color=green.jpg'),
(88, 'StoreSuite - Pink', 'StoreSuite/Previews/pink.jpg', 'thumb.php?tpl=StoreSuite&color=pink.jpg'),
(89, 'StoreSuite - Red', 'StoreSuite/Previews/red.jpg', 'thumb.php?tpl=StoreSuite&color=red.jpg'),
(90, 'StyleLook - Gray', 'StyleLook/Previews/gray.jpg', 'thumb.php?tpl=StyleLook&color=gray.jpg'),
(91, 'Sunglasses - Ochre', 'Sunglasses/Previews/ochre.jpg', 'thumb.php?tpl=Sunglasses&color=ochre.jpg'),
(92, 'Toys - Blue', 'Toys/Previews/blue.jpg', 'thumb.php?tpl=Toys&color=blue.jpg'),
(93, 'Watches - Grey', 'Watches/Previews/grey.jpg', 'thumb.php?tpl=Watches&color=grey.jpg'),
(94, 'Whitegoods - White', 'Whitegoods/Previews/white.jpg', 'thumb.php?tpl=Whitegoods&color=white.jpg'),
(95, 'Wine - Red', 'Wine/Previews/red.jpg', 'thumb.php?tpl=Wine&color=red.jpg'),
(96, 'WomensShoes - Red', 'WomensShoes/Previews/red.jpg', 'thumb.php?tpl=WomensShoes&color=red.jpg');

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
-- Table structure for table `shopping_demo`
--

CREATE TABLE IF NOT EXISTS `shopping_demo` (
  `demo_id` int(11) NOT NULL AUTO_INCREMENT,
  `demo_name` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`demo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `shopping_demo`
--

INSERT INTO `shopping_demo` (`demo_id`, `demo_name`, `status`) VALUES
(1, 'shopping', 'disable'),
(2, 'shopping1', 'disable'),
(3, 'shopping2', 'disable'),
(4, 'shopping3', 'disable'),
(5, 'shopping4', 'disable'),
(6, 'shopping5', 'enable'),
(7, 'shopping6', 'enable'),
(8, 'shopping7', 'enable'),
(9, 'shopping8', 'enable'),
(10, 'shopping9', 'enable'),
(11, 'shopping10', 'enable'),
(12, 'shopping11', 'enable');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_fields`
--

CREATE TABLE IF NOT EXISTS `shopping_fields` (
  `linhvuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenlinhvuc` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `motalinhvuc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`linhvuc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shopping_fields`
--

INSERT INTO `shopping_fields` (`linhvuc_id`, `tenlinhvuc`, `motalinhvuc`) VALUES
(1, 'Máy tính - Công nghệ', NULL),
(2, 'Phụ kiện máy tính', NULL),
(3, 'Thời trang - Trang sức', NULL),
(4, 'Mỹ phẩm - Quà tặng', NULL),
(5, 'Máy móc - Thiết bị', NULL),
(6, 'Thực phẩm - Đồ uống', NULL),
(7, 'Nội thất - Văn phòng', NULL),
(8, 'Thủ công  - Mỹ nghệ', NULL),
(9, 'Sách/DVD/CD', NULL),
(10, 'Lĩnh vực khác', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_register`
--

CREATE TABLE IF NOT EXISTS `shopping_register` (
  `dangky_id` int(11) NOT NULL AUTO_INCREMENT,
  `ngaythang` date NOT NULL,
  `hoten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tencuahang` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_linhvuc` int(11) NOT NULL,
  `email` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `demo_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dangky_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `shopping_register`
--

INSERT INTO `shopping_register` (`dangky_id`, `ngaythang`, `hoten`, `tencuahang`, `id_linhvuc`, `email`, `matkhau`, `dienthoai`, `diachi`, `website`, `demo_id`, `admin_id`) VALUES
(43, '0000-00-00', 'nguyen hung', 'the anh', 1, 'tanhungonline@yahoo.com.vn', 'th882882', 933173268, 'bien hoa', 'dienmaygiare', 2, 0),
(44, '0000-00-00', 'Nguyễn Văn Ngọc', 'Thị Trường Địa Ốc', 10, 'vanngoc239@gmail.com', '0103142835', 932009078, '03 tran nhat duat', 'thitruongdiaoc', 5, 0),
(45, '0000-00-00', 'Ha Thu Trang', 'Thu Trang', 2, 'hathutrang@hotmail.com', 'hoangtrang12', 976816091, '125 Quan Nhan - Cau Giay - Ha Noi', 'thutrang', 6, 0),
(46, '0000-00-00', 'Võ Văn hoanh', 'Đất Nền Nhà Phố Biên Hoà', 10, 'hoanhdatxanh@gmail.com', 'phihoanh', 918155491, '11 lo C1 Long Bình Tân - biên Hòa - Đồng Nai', 'www.datxanhdongnai.vn', 8, 0),
(48, '0000-00-00', 'Cao Văn phụng', 'Công ty TNHH TM & XD Tân Việt', 10, 'tanvietviewhp335@gmail.com', 'hanhphucmongmanh', 313602408, 'Hải Phòng', 'http://tanvietview.net/', 4, 0),
(49, '0000-00-00', 'OOO', 'Trung Tâm Thương Mại OOO', 10, 'thugianchutchoi@gmail.com', 'dennisoh', 1685830284, '27/6 kp1, p, Bình trị đông a, q bình tân', 'trungtamthuongmaiOOO', 9, 0),
(50, '0000-00-00', 'tran ngoc tu', 'cua cuon gia hung', 10, 'tuhoa8888@gmail.com', '27111988', 986359662, '349 au co - tay ho - ha noi', 'test1.easyvn.com/cuacuongiahung', 10, 0),
(51, '0000-00-00', 'Lê Bật Xuân', 'Chăn ga gối đệm Hàn Quốc', 7, 'lebatxuan@gmail.com', 'dmtd', 904861212, 'Biên Giang - Hà Đông', 'changagoi.tk', 1, 0),
(52, '0000-00-00', 'Nguyen Khang', 'Nguyen Khang', 1, 'songque.tk@gmail.com', '1963860', 978263659, '307 Vĩnh Viễn', 'camera', 3, 0),
(53, '0000-00-00', 'nguyen huyen trang', 'van phong pham VPPGIATOT.COM', 10, 'vppgiatot@gmail.com', 'trang1234', 934683151, 'nguyen du / hai ba trung / ha noi', 'http://vppgiatot.com/gh-trang-chu.html', 7, 0),
(60, '2012-08-29', 'Táo xanh', 'Ford', 10, 'ninh_cp90@yahoo.com', 'capital9', 1683634458, 'Hoàng Mai, Thanh Trì, Hà Nội', 'Fordvn', 11, 0),
(61, '2012-08-29', 'Nguyen Huu Tri', 'Cafe1vn', 10, 'cafe1vn.tony@yahoo.com', 'tony1017', 932172524, '334/53 chu van an', 'cafe1vn.com', 12, 0),
(62, '2012-08-29', 'hồ văn vĩnh', 'công ty TNHH công nghiệp LIANG CHI', 5, 'vinh.land@yahoo.com', '01694959695', 909076884, '232 trường chinh.p.tân hưng thuận.q.12. tp.hcm', 'thapgiainhietcongnghiep.com', 1, 0),
(63, '2012-08-30', 'Đỗ Thị Giang', 'Mỹ Phẩm Á Đông', 4, 'hoaigiang1702@gmail.com', '0975075908', 975075908, 'Cầu Giấy, Hà Nội', 'myphamadong.com', 2, 0),
(71, '2012-09-05', 'Công ty TNHH MTV Nhiên Liêụ Củ Chi', 'biomasscuchi', 10, 'phucthinhhcm.info@gmail.com', 'phuc1982', 977608082, 'Củ Chi TPHCM. VN', 'biomasscuchi', 2, 0),
(72, '2012-09-05', 'Đào Văn Khoa', 'Honda Giải Phóng', 10, 'vkhoakt@gmail.com', '24081983', 935302888, 'Km9  - Hoàng Liệt - Hoàng Mai - Hà Nội', 'vietautopro.com', 3, 0),
(74, '2012-09-06', 'Lý Bích Ngọc', 'GIÁ RẺ VÔ DỊCH', 4, 'hoaigiang1702@gmail.com', '0975075908', 975075908, 'Cầu Giấy, Hà Nội', 'myphamadong.com', 1, 0),
(76, '2012-09-06', 'Đặng Văn Tuấn', 'songhieploi.com', 5, 'tuanbacgiang98@gmail.com', 'bacgiangvn', 977263114, 'hà đông', 'songhieploi.com', 3, 0),
(77, '2012-09-06', 'Trương Quốc Thông', 'gamemoinhat.net', 10, 'quocthonglawyer@gmail.com', 'quocthonglawyer@gmail.com', 936357579, '123 quốc lộ 13, hiệp binh chánh, thu đức', 'gamemoinhat.net', 4, 0),
(102, '2012-09-06', 'Trần Phúc', 'hyundaihaiphong.vn', 10, 'tranphuc83@gmail.com', 'anhyeube', 979717888, '742 Nguyễn Văn Linh - Lê Chân - Hải Phòng', '', 5, 0),
(103, '2012-09-06', 'Thanh Tuyền', 'TNHH GPKT Tân Long', 10, 'mnktanlong@gmail.com', 'chuotnuith', 982299314, '87 Thạch Lam, P. Hiệp Tân, Q. Tân Phú', '', 6, 0),
(107, '2012-09-09', 'Nguyễn văn Hậu', 'Namngu Hotel', 10, 'info@namnguhotel.com', 'namnguhn', 2147483647, '34 Nam Ngư - Hà Nội', '', 7, 0),
(108, '2012-09-13', 'Giả Hoàng Vũ', 'Hoàng Vũ', 10, 'hoangvudl@gmail.com', 'kvcom1234', 938877565, 'TDM- Bình Dương', '', 8, 0),
(109, '2012-09-13', 'Nguyen Phuong Dung', 'TOPUNDER SHOP ONLINE', 4, 'topundervn@gmail.com', 'senta123456', 989328181, '189 Hoang Hoa Tham', '', 9, 0),
(111, '2012-09-13', 'Đỗ Đăng Chi', 'thietbithinghiemxay', 5, 'dodangchi@gmail.com', 'SONGDELAMDAIGIA', 972810695, '161 đường Nguyễn Chánh, P.Hòa Khánh Bắc, Q.Liên Chiểu, TP.Đà Nẵng', '', 11, 0),
(112, '2012-09-14', 'nguyen hoai nhung', 'lucas', 4, 'hoainhung_0801@yahoo.com', '130800', 1234811977, '12 nguyen cong tru phuong 19 quan binh thanh', '', 10, 0),
(113, '2012-09-15', 'Dương', 'Trùng Dương', 2, 'duongnt12@gmail.com', 'hoangtrang12', 976816091, '250 Kim Giang - Đại Kim - Hoàng Mai - Hà Nội', '', 12, 0),
(114, '2012-09-18', 'Vương Hùng Khánh', 'CÔNG TY CỔ PHẦN THIẾT BỊ VIỄN THÔNG AE VIỆT NAM', 5, 'aetel@aetel.vn', 'aetel0905', 935381232, 'Số 16/131 Thái Hà, Đống Đa, Hà Nội', '', 1, 0),
(115, '2012-09-18', 'Huyền Thương', 'thuong.gtmart', 6, 'thuong.gtmart@gmail.com', 'giathinh', 1648818216, 'Số 44 ngõ 30 Tạ Quang Bửu', '', 2, 0),
(116, '2012-09-20', 'Lê Quốc Phong', 'HomeShop', 3, 'lqphong1987@gmail.com', 'quocphong', 909436505, 'TK25/20 Trần Hưng Đạo, Quận 1', '', 3, 0),
(117, '2012-09-20', 'Trình', 'Giấy dán tường PRO', 7, 'gunners.are.winners@gmail.com', 'bangtungvoanh', 1674553533, 'Hà Nội', '', 4, 0),
(118, '2012-09-23', 'Phan Thanh Tuấn', 'trungtran', 1, 'phantuanbkit@gmail.com', 'phanphan', 976240300, 'Hà nội', '', 5, 0),
(119, '2012-09-24', 'Mr Khánh', 'CÔNG TY CỔ PHẦN THIẾT BỊ VIỄN THÔNG AE VIỆT NAM', 10, 'aetel@aetel.vn', 'aetel@0905', 435381232, 'VPGD: Số 16/131 Thái Hà, Đống Đa, Hà Nội', '', 6, 0),
(120, '2012-09-26', 'Nguyen Van Khanh', 'laptop online', 1, 'khanhcclt030057@gmail.com', 'nguyenvankhanh', 932414201, 'da nang', '', 7, 0),
(121, '2012-09-26', 'trung', 'shops', 3, 'fatangel26@gmail.com', 'demthoigian', 123456789, '75 Nghi Tam', '', 8, 0),
(122, '2012-10-01', 'Mr Khánh', 'CÔNG TY CỔ PHẦN THIẾT BỊ VIỄN THÔNG AE VIỆT NAM', 10, 'aetel@aetel.vn', 'aetel0905', 435381232, 'Số 16/131 Thái Hà, Đống Đa, Hà Nội', '', 9, 0),
(123, '2012-10-02', 'nguyễn thành trung', 'web', 1, 'nguyenthanhtrung2212@yahoo.com', '22121990', 1664588251, 'ha noi', '', 10, 0),
(124, '2012-10-05', 'viet', 'shopviet', 1, 'webviet06@gmail.com', 'vietnamson', 988110813, 'Ha Noi', '', 11, 0),
(125, '2012-11-07', 'asd', 'asda', 1, 'johnnyphung123@gmail.com', '123456', 947007636, '324234', '', 12, 0),
(126, '2012-11-16', 'ngocson', 'gia tot sinh vien', 1, 'ngocson092@gmail.com', '123123', 972483044, '210 quoc lo 13,p26,qbt,tphcm', '', 1, 0),
(127, '2012-11-18', 'Nguyễn Kiều Hưng', 'Săn Đồ Hiệu Online', 3, 'chungkhoan888666@yahoo.com', 'abc123', 996698666, '23 Do Quang', '', 2, 0),
(128, '2012-12-11', 'Nguyen Minh Quan', 'chay', 6, 'minhquan43e@gmail.com', 'qqqqqq', 913320031, 'Tuong mai ha noi', '', 3, 0),
(129, '2013-01-04', 'asdf asdf', 'asdf', 3, '1@1.com', '123', 123, 'asdfdf', '', 4, 0),
(130, '2013-01-05', 'BÙI BÁ TRUNG', 'Hoa', 4, 'trungpro9084@gmail.com', 'toilatoi', 977750166, 'tổ 8 khu 10 bãi cháy, hạ long, quảng ninh', '', 5, 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
