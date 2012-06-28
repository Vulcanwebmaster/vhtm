-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 28 Juin 2012 à 17:30
-- Version du serveur: 5.1.61
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `unix_unix`
--

-- --------------------------------------------------------

--
-- Structure de la table `be_acl_actions`
--

CREATE TABLE IF NOT EXISTS `be_acl_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `be_acl_groups`
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
-- Contenu de la table `be_acl_groups`
--

INSERT INTO `be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 6, 'Member', NULL),
(2, 4, 5, 'Administrator', NULL),
(3, 2, 3, 'demoadmin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `be_acl_permissions`
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
-- Contenu de la table `be_acl_permissions`
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
-- Structure de la table `be_acl_permission_actions`
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
-- Structure de la table `be_acl_resources`
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
-- Contenu de la table `be_acl_resources`
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
-- Structure de la table `be_groups`
--

CREATE TABLE IF NOT EXISTS `be_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `be_groups`
--

INSERT INTO `be_groups` (`id`, `locked`, `disabled`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `be_preferences`
--

CREATE TABLE IF NOT EXISTS `be_preferences` (
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `value` text CHARACTER SET latin1 NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `be_preferences`
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
-- Structure de la table `be_resources`
--

CREATE TABLE IF NOT EXISTS `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `be_resources`
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
-- Structure de la table `be_users`
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
-- Contenu de la table `be_users`
--

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-06-28 16:23:52', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

-- --------------------------------------------------------

--
-- Structure de la table `be_user_profiles`
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
-- Contenu de la table `be_user_profiles`
--

INSERT INTO `be_user_profiles` (`user_id`, `company_name`, `full_name`, `web_address`, `phone_number`, `address`, `city`, `post_code`) VALUES
(1, '', '', '', '', '', '', 0),
(14, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
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
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('240081f4c0506527ff0dc405c83ae96f', '123.24.10.50', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.835.202 Safari/535.1', 1340875342, ''),
('3186209ea75aa6c288a0dc650a9d53d3', '113.190.240.121', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.43 Safari/536.11', 1340875358, ''),
('3cfaf2d5d4be2498ffb5949c5edbcb34', '123.24.148.69', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727)', 1340877917, ''),
('4a92db3b8e17b6d5842cc8a3abe70200', '113.190.240.121', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.43 Safari/536.11', 1340879327, 'a:11:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:5:"email";s:15:"admin@gmail.com";s:8:"password";s:40:"0993abd18b04dce02cafde93878540f109592da5";s:6:"active";s:1:"1";s:10:"last_visit";s:19:"2012-06-28 16:23:49";s:7:"created";s:19:"2012-02-22 13:46:09";s:8:"modified";s:19:"2012-03-17 21:56:17";s:5:"group";s:13:"Administrator";s:8:"group_id";s:1:"2";s:9:"post_code";s:1:"0";}'),
('52f6cf15182c322da08c53521379d8f8', '123.24.10.50', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.835.202 Safari/535.1', 1340875332, ''),
('653cdb8d8479194ac3f8f5cb2c37253e', '117.6.130.143', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB7.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET', 1340871886, ''),
('8c14f47a42f1d97ee934083f11beb548', '123.24.10.50', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.835.202 Safari/535.1', 1340875344, ''),
('96249dbad74448d1eecac0a44ad965f1', '113.160.55.30', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5', 1340876793, ''),
('ca251d5fdb29bab8eaf5cca7fafc5dcd', '117.6.132.220', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0.1', 1340869042, ''),
('f31f2fcd5b5781405ea387b9ca699223', '117.6.132.220', 'Mozilla/5.0 (Windows NT 6.1; rv:13.0) Gecko/20100101 Firefox/13.0.1', 1340868414, ''),
('fc8df6c9a9da0de6ab1692bf0524e633', '1.55.115.169', 'NokiaC3-00/5.0 (08.63) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 AppleWebKit/420+ (KHTML, like Gecko) Safari/4', 1340869289, '');

-- --------------------------------------------------------

--
-- Structure de la table `eventcal`
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
-- Contenu de la table `eventcal`
--

INSERT INTO `eventcal` (`id`, `user`, `user_id`, `eventDate`, `eventTitle`, `eventContent`, `privacy`) VALUES
(2, 'shinokada', 8, '2011-05-17', '17th May', 'Hurray', 'public'),
(8, 'shinokada', 8, '2011-05-18', 'test', 'test', 'public');

-- --------------------------------------------------------

--
-- Structure de la table `omc_category`
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
-- Contenu de la table `omc_category`
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
-- Structure de la table `omc_colors`
--

CREATE TABLE IF NOT EXISTS `omc_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `omc_customer`
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
-- Contenu de la table `omc_customer`
--

INSERT INTO `omc_customer` (`customer_id`, `password`, `customer_first_name`, `customer_last_name`, `phone_number`, `email`, `address`, `city`, `post_code`, `country`) VALUES
(1, 'da39a3ee5e6b4b0d', 'test123', '', 0, 'test@gmail.com', '', '', 0, 'Japan');

-- --------------------------------------------------------

--
-- Structure de la table `omc_email`
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
-- Structure de la table `omc_emailtemplate`
--

CREATE TABLE IF NOT EXISTS `omc_emailtemplate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `default` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `omc_emailtemplate`
--

INSERT INTO `omc_emailtemplate` (`id`, `name`, `default`) VALUES
(1, 'default', 1),
(2, 'bluenote', 0),
(5, 'greenbear', 0),
(7, 'redhat', 0),
(9, 'redrose', 0);

-- --------------------------------------------------------

--
-- Structure de la table `omc_languages`
--

CREATE TABLE IF NOT EXISTS `omc_languages` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `langname` text COLLATE utf8_unicode_ci NOT NULL,
  `short_lang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `omc_languages`
--

INSERT INTO `omc_languages` (`id`, `langname`, `short_lang`, `status`) VALUES
(1, 'japanese', 'jp', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `omc_menus`
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
-- Contenu de la table `omc_menus`
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
-- Structure de la table `omc_messages`
--

CREATE TABLE IF NOT EXISTS `omc_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `omc_order`
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
-- Contenu de la table `omc_order`
--

INSERT INTO `omc_order` (`order_id`, `customer_id`, `total`, `order_date`, `delivery_date`, `payment_date`) VALUES
(1, 1, 800.00, '2012-04-10 13:30:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 300.00, '2012-04-10 21:01:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `omc_order_item`
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
-- Contenu de la table `omc_order_item`
--

INSERT INTO `omc_order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 3, 2, 400.00),
(2, 2, 5, 10, 30.00);

-- --------------------------------------------------------

--
-- Structure de la table `omc_pages`
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
-- Contenu de la table `omc_pages`
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
-- Structure de la table `omc_products`
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
-- Contenu de la table `omc_products`
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
-- Structure de la table `omc_product_colors`
--

CREATE TABLE IF NOT EXISTS `omc_product_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `omc_product_sizes`
--

CREATE TABLE IF NOT EXISTS `omc_product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `omc_sizes`
--

CREATE TABLE IF NOT EXISTS `omc_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `omc_slideshow`
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
-- Contenu de la table `omc_slideshow`
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
-- Structure de la table `omc_subscribers`
--

CREATE TABLE IF NOT EXISTS `omc_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `omc_subscribers`
--

INSERT INTO `omc_subscribers` (`id`, `name`, `email`) VALUES
(5, 'John', 'john@gmail.com'),
(6, 'test1234', 'test1234@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `shoutbox`
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
-- Structure de la table `unix_camnhan`
--

CREATE TABLE IF NOT EXISTS `unix_camnhan` (
  `camnhan_id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date DEFAULT NULL,
  `nguoidang` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`camnhan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `unix_camnhan`
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
-- Structure de la table `unix_dangky`
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

-- --------------------------------------------------------

--
-- Structure de la table `unix_doituong`
--

CREATE TABLE IF NOT EXISTS `unix_doituong` (
  `doituong_id` int(11) NOT NULL AUTO_INCREMENT,
  `tendoituong` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`doituong_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `unix_doituong`
--

INSERT INTO `unix_doituong` (`doituong_id`, `tendoituong`, `mota`) VALUES
(1, 'Trẻ em', NULL),
(2, 'Người lớn', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `unix_gioithieu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu` (
  `gioithieu_id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gioithieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `unix_gioithieu`
--

INSERT INTO `unix_gioithieu` (`gioithieu_id`, `noidung`) VALUES
(1, '<ol>\r\n	<li><strong>1. Giới thiệu công ty Unix:</strong></li>\r\n<ul>\r\n	<li>Công ty cổ phần Unix được thành lập bởi các doanh nhân và chuyên gia đào tạo nhiều kinh nghiệm đến từ nhiều đơn vị giáo dục khác nhau. Chúng tôi muốn tạo nên một cái tên mới với mục tiêu giúp cho khách hàng được tiếp cận với những chương trình đào tạo chất lượng nhất.</li>\r\n</ul>\r\n	<li><strong>2. Khi tham gia các khóa học do công ty Unix tổ chức học viên sẽ được:</strong></li>\r\n<ul>\r\n	<li>- Đào tạo và huấn luyện theo những phương pháp đào tạo mới nhất và đang được áp dụng hiệu quả trên thế giới.</li>\r\n	<li>- Khơi nguồn cảm hứng và có những nguồn động lực mạnh mẽ khi tham gia khóa học.</li>\r\n	<li>- Được đào tạo và huấn luyện bởi những giảng viên, chuyên gia đào tạo tốt nhất.</li>\r\n	<li>- Luôn tạo nên những hiệu quả vượt trội sau khi tham gia chương trình.</li>\r\n</ul>\r\n	<li><strong>3. Diễn giả, chuyên gia đào tạo:</strong></li>\r\n<ul>\r\n	<li>- Những giáo viên, diễn giả, chuyên gia đào tạo được công ty Unix mời tham gia giảng dạy luôn là những người không chỉ có chuyên môn vững vàng , dày dạn kinh nghiệm mà điều quan trọng nhất là họ phải là người tạo ra hiệu quả cao nhất trong học viên. Chính vì lẽ đó các diễn giả, chuyên gia đào tạo của công ty Unix luôn thường xuyên tham gia các chương trình đào tạo của các chuyên gia, diễn giả hàng đầu trên thế giới, để không ngừng cập nhật những phương pháp đào tạo tốt nhất , nâng cao kỹ năng giảng dạy và kiến thức chuyên môn.</li>\r\n</ul>\r\n	<li><strong>4. Sứ mệnh của Unix education:</strong></li>\r\n<ul>\r\n	<li>- Unix education ra đời với một sứ mệnh là giúp cho mọi người được tiếp cận với những chương trình đào tạo tốt nhất.</li>\r\n</ul>\r\n</ol>');

-- --------------------------------------------------------

--
-- Structure de la table `unix_gioithieu_submenu`
--

CREATE TABLE IF NOT EXISTS `unix_gioithieu_submenu` (
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `unix_gioithieu_submenu`
--

INSERT INTO `unix_gioithieu_submenu` (`submenu_id`, `ten`, `noidung`) VALUES
(1, 'Tầm nhìn', 'Đây là trang tầm nhìn'),
(2, 'Sứ mệnh', 'Đây là trang Sứ mệnh');

-- --------------------------------------------------------

--
-- Structure de la table `unix_hoithao`
--

CREATE TABLE IF NOT EXISTS `unix_hoithao` (
  `hoithao_id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL,
  `phanhoi` bit(1) DEFAULT NULL,
  `anhdaidien` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`hoithao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `unix_hoithao`
--

INSERT INTO `unix_hoithao` (`hoithao_id`, `tieude`, `noidung`, `thoigian`, `phanhoi`, `anhdaidien`) VALUES
(6, 'Hội thảo: " Bứt phá môn Toán trường HN Amsterdam"', '<p align="center"><strong>Hội thảo: "Bứt phá môn Toán thi vào cấp 2 Hà Nội Amsterdam”</strong></p>\r\n\r\n<ul>\r\n	<li>Làm thế nào để tăng từ 1 đến 2 điểm ngay lập tức bằng chính khả năng học của mình?</li>\r\n	<li>Làm thế nào để đạt trên 12/15 điểm chỉ trong 15 đến 20 phút làm bài?</li>\r\n	<li>Làm thế nào để có được phong độ làm bài tốt nhất trước khi thi?</li>\r\n	<li>Tại sao nhiều học sinh có sức học tốt nhưng vẫn không có được kết quả như mong muốn?</li>\r\n	<li>Kì thi vào cấp 2 trường Hà Nội Amsterdam được coi là như là một trong những kỳ thi khó nhất đối với các học sinh tiểu học. Kỳ thi này không chỉ là một cuộc tuyển chọn, nó còn là cơ hội để các em học sinh phấn đấu nỗ lực và nâng cao khả năng học tập của mình.</li>\r\n</ul>\r\nĐặc biệt môn Toán thi vào cấp 2 Hà Nội Amsterdam hoàn toàn khác với những kỳ thi và những bài kiểm tra thông thường. Để làm tốt bài thi các em học sinh cần phải có những kỹ năng, chiến thuật làm bài, những phương pháp đặc biệt dành riêng cho kỳ thi này. Vậy phải ôn thi và chuẩn bị cho kỳ thi này như thế nào?\r\n\r\nChương trình “Bứt phá trong kỳ thi môn Toán vào cấp 2 Hà Nội Amsterdam” sẽ giúp các em học sinh:\r\n\r\n<strong>1)   </strong><strong>Có những động lực thúc đẩy mạnh mẽ và tràn đầy quyết tâm cho kỳ thi.</strong>\r\n\r\n<strong>2)   </strong><strong>Sở hữu những chiến thuật làm bài riêng biệt cho kỳ thi để ngay lập tức tăng từ 1 đến 2 điểm.</strong>\r\n\r\n<strong>3)   </strong><strong>Có các phương pháp ôn tập để đạt kết quả tốt nhất trong kì thi</strong>\r\n\r\n<strong>4)   </strong><strong>Khám phá những phương pháp để đạt trên 12/15 điểm toán chỉ trong 15-20 phút làm bài.</strong>\r\n\r\n<strong>                        Diễn giả: Thầy Phan Quang Điệp</strong>\r\n\r\nHiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic Toán Châu Á Thái Bình Dương , chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.\r\n<ul>\r\n	<li>Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“ Bứt phá trong kì thi Toán trường Ams”, “ Giải toán siêu tốc bằng máy tính bỏ túi”, “ Chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</li>\r\n	<li>Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và dành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, <strong>thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</strong></li>\r\n	<li>Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia,  Tập đoàn  Giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</li>\r\n</ul>\r\n<strong> </strong>\r\n\r\n<strong>Cảm nhận của  phụ huynh và học sinh đã từng tham gia chương trình</strong>:\r\n\r\n<em>“…Trước khi tham gia chương trình “</em><em>Bứt phá trong kì thi môn toán vào cấp 2 Hà Nội Amsterdam” của thầy Phan Quang Điệp, tôi và con trai cũng không có ý định thi vào trường Ams. Lúc đó, vào tháng 5 cháu làm bài thi thử môn toán chỉ đạt từ  2/15  đến 4 / 15 điểm, cháu cũng không thích học môn toán. Nhưng sau khi tham dự chương trình này cả hai mẹ con đã thực sự thay đổi và quyết tâm thi vào trường Amsterdam. Và thật tuyệt vời thầy Điệp đã truyền cảm hứng học tập có những phương pháp giảng dạy tuyệt vời giúp con trai tôi đạt 10/15 điểm toán sau vài buổi huấn luyện trước ngày thi. Thật sự gia đình tôi rất biết ơn thầy về những bài giảng tuyệt vời mà thầy đã dành cho con tôi…. ”               </em>\r\n\r\nChị Lan Anh-PHHS cháu Đào Phúc Thành-trúng tuyển kì thì tuyển sinh lớp 6 Hà Nội Amsterdam 2010\r\n\r\n<em>“…Tôi tên là Lê Quý Dương, tôi có ước mơ thi đỗ vào trường Hà Nội Amsterdam.Trước khi tham gia chương trình này điểm thi thử của tôi chỉ được từ 5-6 điểm. Nhưng sau khi học các phương pháp, chiến thuật và thủ thuật làm bài nhanh mà thầy Điệp hướng dẫn điểm số của tôi đã nâng lên 11-12 điểm.Và thật tuyệt vời ước mơ của tôi đã thành sự thật.Hẹn gặp lại các bạn tại trường Hà Nội Amsterdam...”</em>\r\n\r\n<em>              </em>Lê Quý Dương-HS trường tiểu học Thái Thịnh- trúng tuyển kỳ thi tuyển sinh lớp 6 Hà Nội Ams 2011.\r\n\r\n<strong><em>           Để có một buổi chia sẻ hiệu quả, kính mong các vị phụ huynh mang giấy bút đầy đủ và tham gia cùng các em</em></strong><em>!</em>\r\n\r\n<em>Phí tham dự chương trình là: 300 000 vnđ. <strong>Ban tổ chức tài trợ miễn phí cho 30 người đăng ký đầu </strong>tiên tham dự chương trình theo <strong>hotline: 0977402936</strong></em>\r\n\r\n<strong>Thời gian:   15h– 17h chủ nhật  ngày 04 tháng 03 năm 2012</strong>\r\n\r\n<strong>Địa chỉ :        Hội trường 1010 tòa nhà Ladeco -266 Đội Cấn, Ba Đình, Hà Nội</strong>', '2012-03-06', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `unix_homepage`
--

CREATE TABLE IF NOT EXISTS `unix_homepage` (
  `muc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmuc` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dulieu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`muc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `unix_homepage`
--

INSERT INTO `unix_homepage` (`muc_id`, `tenmuc`, `dulieu`) VALUES
(1, 'Các khóa học', 'Chương trình này là một chương trình bao gồm chuỗi các bài giảng và các hội thảo có một không hai tại Hà Nội. Không có một chương trình đào tạo nào giống như thế ở bất cứ đâu. ..'),
(2, 'Phương pháp đào tạo', '<a>Diễn giả Phan Quang Điệp</a>\r\n\r\nHiện tại thầy được công nhận giảng viên quốc tế của tập đoàn giáo dục Skyquestcom Singapore, giáo viên chuyên luyện thi Olympic Toán Châu Á Thái Bình Dương , chuyên gia đào tạo trong lĩnh vực phát triển con người, một người thầy truyền cảm hứng tuyệt vời cho các em học sinh.\r\n<ul>\r\n	<li>- Là giáo viên chuyên luyện thi môn toán trường Amsterdam uy tín tại Hà Nội với những bài giảng:“ Bứt phá trong kì thi Toán trường Ams”, “ Giải toán siêu tốc bằng máy tính bỏ túi”, “ Chiến thuật và thủ thuật trong kỳ thi môn toán trường Ams”,…</li>\r\n	<li>- Rất nhiều học sinh của thầy đã đạt được những thành tích cao trong các cuộc thi quốc tế và giành nhiều học bổng tại các trường danh tiếng tại Mỹ, Singapore, Hàn Quốc, <strong>thi đỗ thành tích cao vào trường Hà Nội Amsterdam…</strong></li>\r\n	<li>- Thầy đã từng có những buổi hội thảo chuyên đề chất lượng tại Bộ Văn Hóa Thể Thao và Du Lịch,  viện Dinh Dưỡng Quốc Gia,  Tập đoàn  Giáo dục Skyquestcom Singapore, Felix Group và nhiều doanh nghiệp, trường học, trung tâm đào tạo v v…</li>\r\n</ul>\r\n<em>Thông tin tham khảo xem tại</em>: <a title="Bứt phá môn Toán trường Hà Nội Amsterdam" href="http://www.unix.vn/hoi-thao-but-pha-mon-toan-truong-hn-amsterdam/">http://www.unix.vn/hoi-thao-but-pha-mon-toan-truong-hn-amsterdam/</a>'),
(3, 'Sự kiện', 'Hội thảo:”Bứt phá môn Toán thi vào cấp 2 Hà Nội Amsterdam” ..'),
(4, 'slide', 'assets/unix/images/khoahoc-slide.jpg,assets/unix/images/thuvien-slide.jpg'),
(5, 'images', 'assets/unix/images/slide-bottom/1.jpg,assets/unix/images/slide-bottom/2.jpg,assets/unix/images/slide-bottom/3.jpg,assets/unix/images/slide-bottom/4.jpg,assets/unix/images/slide-bottom/5.jpg'),
(6, 'video', 'httpv://www.youtube.com/watch?v=g78aUqko-vQ'),
(7, 'Chúng tôi là ai', 'Công ty cổ phần Unix, là một trong những công ty cung cấp các chương trình đào tạo chất lượng cao hàng đầu Việt Nam. Unix mang đến những công nghệ đào tạo tiên tiến và các chương trình phát triển cá nhân hàng đầu trên thế giới.'),
(8, 'Chúng tôi làm gì', 'Các khóa học kỹ năng thay đổi tư duy và cách nghĩ, chúng tôi mang lại những trải nghiệm hoàn toàn khác biệt. Môi trường làm việc năng động, chuyên nghiệp Unix luôn chào đón những con người có năng lực tham gia đồng hành cùng chúng tôi');

-- --------------------------------------------------------

--
-- Structure de la table `unix_khoahoc`
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
-- Contenu de la table `unix_khoahoc`
--

INSERT INTO `unix_khoahoc` (`khoahoc_id`, `tieude`, `mota`, `batdau`, `ketthuc`, `hocphi`, `anhdaidien`, `thoigian`, `doituong`) VALUES
(1, 'Giúp trẻ phát triển chiều cao tối ưu', '<p>Nhằm giúp trẻ có một chiều cao cân đối và một thể lực dẻo dai, phụ huynh cần lưu ý những yếu tố ảnh hưởng trực tiếp trên sự phát triển chiều cao của con trẻ để có những hỗ trợ tích cực.</p>\r\n<p>Những yếu tố ảnh hưởng</p>\r\n<p>Dinh dưỡng: đây là yếu tố góp phần đến 31% sự phát triển chiều cao của trẻ. Để giúp trẻ có được chiều cao tối ưu cần có sự cân đối về chế độ dinh dưỡng sao cho hợp lý nhất để trẻ có thể có một sức khỏe dẻo dai, một thân hình lý tưởng và sức đề kháng tốt. Một chế độ dinh dưỡng khoa học cần có sự góp mặt của tinh bột, chất béo, chất đạm, các vitamin, nhất là vitamin C, khoáng chất và các chất xơ từ chính nguồn rau xanh và trái cây tươi. Đặc biệt, trong đó chất đạm (protein) tham gia vào việc hình thành các tế bào, tăng cường hệ thống miễn dịch, canxi tạo độ chắc khỏe cho xương và răng, vitamin D giúp chuyển hóa hiệu quả canxi và phốt pho trong cơ thể.</p>\r\n<p>Di truyền: góp phần quyết định chiều cao tương lai của trẻ tới 23%. Nghiên cứu cho thấy, bố mẹ có chiều cao lý tưởng thì con cái sinh ra có chiều cao rất khả quan. Cụ thể nếu bố mẹ cao, chiều cao của con cái sẽ theo tỷ lệ 3:1(cơ hội cao là 3, thấp là 1). Tuy nhiên nếu bố mẹ có chiều cao khiêm tốn, đừng quá lo lắng về chiều cao của trẻ vì ngoài yếu tố di truyền, yếu tố dinh dưỡng và môi trường sống cũng có một tác động rất lớn lên sự phát triển chiều cao của trẻ.Vận động thể lực và giấc ngủ: quyết định sự tăng trưởng chiều cao khoảng 20%. Ngay cả khi trẻ còn nhỏ, cần rèn cho trẻ thói quen luyện tập một cách đều đặn để có thể đảm bảo cho cơ và xương phát triển một cách tối đa. Có rất nhiều hình thức luyện tập, phụ huynh và trẻ hãy cùng chọn ra một môn thể thao ưa thích và hợp với sức của trẻ nhất như bơi lội, đá bóng, khiêu vũ, đạp xe đạp…\r\nNgủ đủ và đúng giờ quy định để tối ưu hóa chiều cao cho trẻ. Cần quan tâm đến quá trình hình thành của một loại hormone có tên là somatotropin. Hormone này nắm giữ vai trò quan trọng trong việc tạo nên các tế bào sụn (các tế bào sụn này tham gia tích cực vào việc tăng chiều dài của các xương như xương tay, xương chân…). Bên cạnh đó somatotropin cũng kích thích cơ thể sản sinh thêm một loại hormone có tên gọi là somatomedin. Hormon này giúp tăng trưởng chiều cao khoảng một giờ ngay sau khi trẻ bắt đầu giấc ngủ. Đây là lý do tại sao trẻ em nên ngủ đều đặn và đúng giờ quy định.</p>\r\n<p>Ba giai đoạn quan trọng</p>\r\n<p>Trong việc phát triển chiều cao của trẻ có 3 giai đoạn quan trọng đó là:</p>\r\n<ul>\r\n<li>Giai đoạn trong bào thai: trong thời gian mang thai, nếu người mẹ có chế độ dinh dưỡng tốt, người mẹ tăng cân từ 10 – 15kg thì trẻ sinh ra sẽ đạt chiều cao là 50cm và nặng từ 3kg trở lên.</li>\r\n<li>Giai đoạn sơ sinh đến 3 tuổi: 12 tháng đầu trẻ tăng 25cm; 2 năm tiếp theo mỗi năm trẻ cao thêm 10cm nếu được nuôi dưỡng tốt.</li>\r\n<li>Giai đoạn dậy thì: bình thường bé gái từ 10 – 16 tuổi và bé trai từ 12 – 18 tuổi. Trong giai đoạn này, có 1 – 2 năm chiều cao trẻ tăng vọt từ 8 – 12cm mỗi năm nếu được nuôi dưỡng tốt. Thực tế không thể biết chính xác năm đó là năm nào, nên vẫn phải đảm bảo dinh dưỡng tốt cho trẻ trong suốt thời gian này. Sau thời kỳ dậy thì, cơ thể trẻ cũng tăng chiều cao nhưng với tốc độ rất chậm rồi ngưng hẳn ở khoảng độ tuổi 22 đối với nữ và 25 tuổi đối với nam. Người ta thường ước tính chiều cao của trẻ khi trưởng thành sẽ gấp đôi chiều cao lúc 2 tuổi (chẳng hạn lúc 2 tuổi trẻ cao 82cm, khi lớn sẽ cao 164cm). Hoặc chiều cao lúc trưởng thành bằng chiều cao lúc 10 tuổi nhân với 1,25 (ví dụ khi 10 tuổi trẻ cao 140cm thì lúc trưởng thành sẽ cao 175cm).</li>\r\n</ul>\r\n<p>Dấu hiệu gợi ý con trẻ của bạn đang có vấn đề về phát chiều cao:</p>\r\n<ul>\r\n<li>Trong một năm chiều cao của trẻ phát triển không quá 4cm.</li>\r\n<li>Chiều cao hiện tại của trẻ thấp hơn khoảng 10cm so với chiều cao trung bình của các bạn cùng trang lứa. Khi trẻ mắc phải một trong các vấn đề này, tốt nhất bạn nên nhờ sự hỗ trợ và tư vấn của bác sĩ chuyên khoa.</li>\r\n</ul>', NULL, NULL, NULL, '2-150x150.jpg', '2012-05-08', 1),
(2, '“Dẫn lối” thành công khi nuôi dạy con', '<h4>5 bí kíp dưới đây sẽ giúp bạn giảm căng thẳng và nhàn hạ hơn khi làm cha mẹ.</h4>\r\n<p>Khi thấy những đứa trẻ hoạt bát nhưng cũng rất ngoan ngoãn và lễ phép, bạn có bao giờ tự hỏi bố mẹ chúng đã nuôi dưỡng chúng như thế nào chưa?<br/>\r\nLàm cha mẹ, khó tránh khỏi những áp lực và mâu thuẫn trong khi nuôi dạy con. 5 bí quyết nuôi dạy con dưới đây sẽ giúp bạn giảm phần nào đó căng thẳng và nhàn hạ hơn khi làm cha mẹ.</p>\r\n<h4>1.     Sự nhất quán</h4>\r\n<p>Dạy trẻ tối kỵ việc ‘nói một đằng, làm một nẻo’. Vì vậy, khi đã hứa điều gì đó với con trẻ, cha mẹ cần cố gắng thực hiện đúng. Liên tục ra ‘luật’ mới sẽ khiến trẻ rối trí và không hiểu được chính xác việc mình cần làm và nên làm là gì. Cần giúp trẻ hiểu những nguyên tắc cơ bản trong gia đình mà chúng phải tuân theo. Và người lớn trong gia đình không được ‘trống đánh xuôi, kèn thổi ngược’ để tránh việc trẻ có thể bị nhầm lẫn với những thông điệp khác nhau.</p>\r\n<h4>2.    Thói quen</h4>\r\n<p>Có câu ‘thói quen nói lên nhân cách’, muốn con ngoan thì cha mẹ cần uốn nắn càng sớm càng tốt. Thói quen tốt như: ngủ đúng và đủ giấc, ăn đúng giờ, hạn chế ăn vặt… sẽ giúp trẻ có sức khỏe ổn định, có thời gian học tập và vui chơi hợp lý. Đồng thời, cha mẹ cũng không phải cuống cuồng, căng thẳng vì lo cho con.</p>\r\n<h4>3.    Ranh giới</h4>\r\n<p>‘Ra luật’ với trẻ chính là chìa khóa thành công trong việc nuôi dạy trẻ thành tài. Hãy đưa ra những ranh giới rõ ràng để chứng tỏ quyền hạn của người lớn với trẻ và để cho trẻ hiểu rằng nơi nào, lúc nào là cần phải làm việc gì. Nếu muốn con trẻ khi lớn lên sống không dựa dẫm, biết tự lập thì đừng tạo ra cho trẻ quá nhiều chọn lựa khiến trẻ ‘kén cá, chọn canh’ và không dứt khoát.</p>\r\n<h4>4.    Sự kiềm chế</h4>\r\n<p>Biết tiết chế cơn giận, bình tĩnh kiểm soát mọi việc và không đối xử ‘độc tài’ với con… là những điều mà nhiều bậc phụ huynh đã biết nhưng để làm được lại không dễ. Khi sắp nổi ‘sân si’ với con, bạn có thể nhắm mắt lại và hít thở thật sâu, hoặc đếm ngược từ 10, hoặc lảng sang chuyện khác… Hãy nhớ, đừng làm lớn chuyện với những gì không thay đổi ngay được.<br/>\r\nNgoài ra, ngay cả khi khen thưởng trẻ cũng cần phải kiềm chế, vì khen thưởng sẽ mất đi tác dụng nếu trẻ đã nghe nhàm tai và cũng khó để trẻ tin rằng cha mẹ thực lòng khen ngợi chúng.</p>\r\n<h4>5.    Thư giãn</h4>\r\n<p>Dành thời gian gần gũi, cùng chơi với con giúp tình mẫu tử/phụ tử thêm gắn kết hơn. Những lời nói nựng nịu, âu yếm hay những cái thơm vào má… là ‘thần dược’ đối với sự phát triển tinh thần của trẻ nhỏ. Hãy tiếp cận từng giai đoạn phát triển của trẻ (ví dụ như tập ngồi bô) với một thái độ cởi mở và dễ chịu, bởi vì nếu bạn luôn căng thẳng, trẻ sẽ nhận ra ngay.<br/>\r\nKhông kém phần quan trọng, thỉnh thoảng phải tự cho mình những giây phút xả hơi, nghỉ ngơi giải trí với vợ/chồng mà không mang theo con – sự nghỉ ngơi này sẽ đem lại nhiều thay đổi tích cực không ngờ đấy !</p>', NULL, NULL, NULL, 'nuoi_day_con_tre-150x150.jpg', '2012-05-17', 2);

-- --------------------------------------------------------

--
-- Structure de la table `unix_lienhe`
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
-- Contenu de la table `unix_lienhe`
--

INSERT INTO `unix_lienhe` (`lienhe_id`, `hoten`, `email`, `tieude`, `noidung`) VALUES
(1, 'sdfsdf', 'sdfsdf@dfgdfg.com', 'sdfsdf', 'sdf');

-- --------------------------------------------------------

--
-- Structure de la table `unix_loaisach`
--

CREATE TABLE IF NOT EXISTS `unix_loaisach` (
  `loaisach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`loaisach_id`,`tenloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `unix_loaisach`
--

INSERT INTO `unix_loaisach` (`loaisach_id`, `tenloai`, `mota`) VALUES
(1, 'Clip', 'Các video clip'),
(3, 'Ảnh', 'Tranh ảnh Unix'),
(4, 'Sách', 'Tài liệu sách');

-- --------------------------------------------------------

--
-- Structure de la table `unix_sach`
--

CREATE TABLE IF NOT EXISTS `unix_sach` (
  `sach_id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text,
  `loaisach_id` int(11) NOT NULL,
  `tacgia` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `unix_sach`
--

INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `noidung`, `loaisach_id`, `tacgia`) VALUES
(6, 'Videos về trường Hà Nội Amsterdam', '', '<strong>20 n?m tr??ng Ams:</strong>\r\n\r\nhttpv://www.youtube.com/watch?v=g78aUqko-vQ\r\n\r\n&nbsp;\r\n<div></div>\r\n<strong>Amsers dancing:</strong>\r\n\r\nhttpv://www.youtube.com/watch?v=9oRT-2E2plM\r\n\r\n&nbsp;\r\n<div></div>\r\n<strong>Gi?i thi?u tr??ng Ams:</strong>\r\n\r\nhttpv://www.youtube.com/watch?v=5XDkB0QRMwc', 1, ''),
(7, 'Quà tặng cuộc sống- Học cách lắng nghe', '', 'http://www.youtube.com/watch?v=5lx4_FSjISk', 1, ''),
(8, 'Quà tặng cuộc sống: Điều gì đến sẽ đến', '', 'httpv://www.youtube.com/watch?v=faTnhKHBihc', 1, ''),
(9, 'Video về khóa học', '', 'httpv://www.youtube.com/watch?v=hu0Gtgvskec\r\n\r\nKhóa h?c: " B?t phá môn Toán Tr??ng Hà N?i Amsterdam"\r\n\r\nThông tin chi ti?t quý PHHS xem t?i : <a href="http://www.unix.vn/chuong-trinh-but-pha-mon-toan-thi-vao-cap-2-ha-noi-amsterdam/">http://www.unix.vn/chuong-trinh-but-pha-mon-toan-thi-vao-cap-2-ha-noi-amsterdam/</a>', 1, ''),
(10, 'Quà tặng cuộc sống- Học cách lắng nghe', '', '<a href="http://www.youtube.com/watch?v=5lx4_FSjISk">Quà t?ng cu?c s?ng - " H?c cách l?ng nghe"</a>', 1, ''),
(11, 'Quà tặng cuộc sống: Đóa hoa tình yêu', '', 'httpv://www.youtube.com/watch?v=r7mWb_bkJdY', 1, ''),
(12, 'Quà tặng cuộc sống: Một câu nói dịu dàng', '', 'httpv://www.youtube.com/watch?v=cLa7zlPKB3w', 1, ''),
(13, 'Quà tặng cuộc sống: Khi Thượng đế tạo ra người Cha', '', '<a>Quà t?ng cu?c s?ng - " Khi Th??ng ?? t?o ra ng??i cha"</a>', 4, ''),
(14, 'Quà tặng cuộc sống: Sự chia sẻ bình dị', '', 'httpv://www.youtube.com/watch?v=4mE-JPsFq8M', 1, ''),
(15, 'Quà tặng cuộc sống: Cô giáo', '', 'httpv://www.youtube.com/watch?v=7eg-SUv7JTg', 1, ''),
(16, 'Lời nhắn gửi muộn màng', '', 'httpv://www.youtube.com/watch?v=8s7YRvmMVbE', 1, ''),
(17, 'Chọn trường tiểu học cho con', '', '<strong>Vào th?i ?i?m này các b?c ph? huynh có con chu?n b? vào l?p 1 th?t s? b?i r?i tr??c các lo?i hình tr??ng ti?u h?c khác nhau. Vi?c xác ??nh chính xác nh?ng gì b?n c?n ? m?t tr??ng ti?u h?c th?t không h? ??n gi?n. Trong tâm trí mình, b?n có th? v? lên b?c tranh m?t ngôi tr??ng lý t??ng ??y màu s?c, tuy nhiên b?n c?n quan tâm ??n nhu c?u c?a con mình, nh?ng m?c tiêu c?a gia ?ình và các y?u t? th?c t? khác n?a.</strong>\r\n\r\nSau ?ây là m?t vài h??ng d?n ?? b?n chu?n b? quy?t ??nh ch?n tr??ng cho con :\r\n<div><a href="http://www.unix.vn/?attachment_id=66742" rel="attachment wp-att-66742"><img src="http://www.webtretho.com/wttnews/wp-content/uploads/2012/04/DSC05498.jpg" alt="" width="500" height="300" /></a>?nh: cung c?p b?i Pacific Primary and High School.</div>\r\n<strong>B??c 1 : Xác ??nh các tiêu chí ch?n tr??ng :</strong>\r\n<ol start="1">\r\n <li>Nhu c?u c?a con b?n :</li>\r\n</ol>\r\n- Bé c?n có m?t ??i s?ng h?c t?p vui t??i và phong phú ?\r\n\r\n- Bé phù h?p v?i l?p ?ông h?c sinh hay ít h?c sinh ?\r\n\r\n- Bé c?n ???c ch?m sóc k? h?n hay có th? t? ch?m sóc b?n thân ?\r\n\r\n- Bé có ch?u ???c áp l?c h?c nhi?u ch??ng trình, nhi?u n?i (?i h?c thêm v?n hoá và n?ng khi?u ngoài gi? h?c…) ?\r\n\r\n- Bé có mu?n h?c cùng tr??ng v?i anh/ch?/em c?a mình không ?\r\n<ol start="2">\r\n <li>Các m?c tiêu c?a gia ?ình :</li>\r\n</ol>\r\n- B?n mu?n con mình ???c phát tri?n toàn di?n hay thành tích h?c t?p là quan tr?ng h?n ?\r\n\r\n- B?n mu?n con h?c ch??ng trình giáo d?c theo cách truy?n th?ng hay m?t môi tr??ng n?ng ??ng và sáng t?o h?n ?\r\n\r\n- B?n mu?n có s? k?t h?p ch?t ch? gi?a gia ?ình và nhà tr??ng và ???c ?óng góp các ý ki?n cho nhà tr??ng ?\r\n\r\n- B?n có s?n sàng h?p tác v?i nhà tr??ng trong quá trình giáo d?c hay mu?n giao h?t cho nhà tr??ng ? (c?n l?u ý r?ng s? tham gia c?a ph? huynh trong quá trình giáo d?c là vô cùng quan tr?ng, n?u b?n ?ang có suy ngh? s? giao h?t cho tr??ng thì nên thay ??i nhé).\r\n<ol start="3">\r\n <li>Các y?u t? th?c t? :</li>\r\n</ol>\r\n- B?n có mu?n con h?c g?n nhà ?\r\n\r\n- B?n có nhi?u th?i gian và ch?p nh?n r?i ro cho vi?c ??a ?ón bé ?i h?c, h?c thêm, sinh ho?t ngoài gi?… ?\r\n\r\n- B?n mu?n con có ch??ng trình h?c t?p phong phú c? v? ngh? thu?t, th? thao, ngo?i khoá, phát tri?n toàn di?n các k? n?ng …t?i tr??ng ?\r\n\r\n- B?n có chu?n b? ?? ngân sách gia ?ình ?? con h?c h?t ch??ng trình ph? thông ?\r\n\r\n<strong>B??c 2 : Tìm hi?u các tr??ng và so sánh các tiêu chí :</strong>\r\n\r\nH?n nay thông tin v? các tr??ng r?t nhi?u. B?n c?n t?nh táo so sánh các thông tin này v?i tiêu chí l?a ch?n c?a gia ?ình. M?t ngu?n ?áng tin c?y chính là các ph? huynh ?ang cho con theo h?c t?i tr??ng b?n mu?n tìm hi?u. Khi ?ã có ?? thông tin b?n hãy cân nh?c con mình có phù h?p v?i tiêu chí tuy?n sinh c?a tr??ng không và lên k? ho?ch tham quan tr?c ti?p. Nên ?? con b?n cùng ??n th?m tr??ng và cho bé cùng quy?t ??nh ch?n tr??ng.\r\n\r\n<strong>B??c 3 : Tham quan tr??ng</strong>\r\n<ol>\r\n <li>Ch??ng trình giáo d?c :</li>\r\n</ol>\r\n- Tr??ng có m?c tiêu giáo d?c c? th? và ch??ng trình giáo d?c có ??t ???c các m?c tiêu ?? ra không ?\r\n\r\n- Th?i khoá bi?u có ???c s?p x?p khoa h?c không ? Có cân b?ng gi?a các ho?t ??ng giáo d?c không ?\r\n\r\n- S? ti?t h?c các môn có ??m b?o ?? con b?n không ph?i ?i h?c thêm không ?\r\n\r\n- Các ch??ng trình th? thao, ngo?i khoá ???c t? ch?c th? nào ? Ph? huynh có ph?i ?óng thêm phí không ?\r\n\r\n- Có các l?p n?ng khi?u m? thu?t, âm nh?c, công ngh? …không ? Ph? huynh có ph?i ?óng thêm h?c phí không ?\r\n\r\n- Tr??ng có các câu l?c b?, các sinh ho?t c?ng ??ng, các cu?c thi tài không ?\r\n<ol>\r\n <li>Ban giám hi?u, giáo viên và h?c sinh :</li>\r\n</ol>\r\n- Ban giám hi?u có s?n sàng g?p ph? huynh không ?\r\n\r\n- N?u là tr??ng song ng?, Ban Giám hi?u có s? d?ng ???c ngôn ng? th? 2 không ?\r\n\r\n- B?n có ???c trao ??i v?i BGH v? quan ?i?m giáo d?c c?a nhà tr??ng và gia ?ình b?n không ?\r\n\r\n- B?n có th?ng nh?t v?i quan ?i?m giáo d?c c?a nhà tr??ng không ?\r\n\r\n- Tr??ng có nhi?u c? s? không ? BGH qu?n lý các c? s? nh? th? nào ?\r\n\r\n-  Hãy quan sát :\r\n<ul>\r\n <li>Các l?p h?c có vui t??i n?ng ??ng không ?</li>\r\n <li>Các th?y cô có nhi?t tình và thân thi?n v?i h?c sinh không ?</li>\r\n <li>L?p các giáo viên n??c ngoài (n?u có) có c?n ph?i tr? gi?ng không ?</li>\r\n <li>Tr??ng có ch?n l?c h?c sinh không ?</li>\r\n <li>Phong cách h?c sinh có phù h?p v?i mong mu?n c?a gia ?ình b?n không ?</li>\r\n</ul>\r\n<ol>\r\n <li>C? s? v?t ch?t :</li>\r\n</ol>\r\n- Môi tr??ng có an toàn, v? sinh và có ki?m soát không ?\r\n\r\n- Di?n tích s? d?ng c?a tr??ng tính cho m?i h?c sinh là bao nhiêu ?\r\n\r\n- Thi?t k? xây d?ng, ánh sáng, âm thanh, màu s?c có phù h?p không ?\r\n\r\n- Tr??ng có ?? các phòng ch?c n?ng (th? vi?n, phòng thí nghi?m, phòng th? d?c th? thao…..)  v?i trang thi?t b? hi?n ??i và phù h?p không ?\r\n\r\n- Th? vi?n tr??ng có ngu?n sách và tài li?u phong phú không ? Th? vi?n có ph?i là n?i h?c sinh yêu thích không ? (thói quen ??c sách có ???c duy trì không?)\r\n\r\n- Tr??ng có b?p ?n không ? Th?c ?n có ngon, nóng và an toàn không ?\r\n\r\n- Phòng v? sinh có s?ch và khô không ? Có v? sinh th??ng xuyên không ? Có l?m d?ng hoá ch?t t?y r?a không ?\r\n\r\n- ??a ?i?m này tr??ng thuê hay xây d?ng ?? ho?t ??ng lâu dài ? S?p t?i tr??ng có chuy?n ?i ?âu không ?\r\n\r\nKhi ?ã quy?t ??nh ch?n tr??ng, b?n hãy ??ng hành cùng nhà tr??ng trong quá trình phát tri?n con mình, hãy luôn ch? ??ng ?óng góp ý ki?n xây d?ng tr??ng và ph?i h?p cùng giáo viên khi c?n thi?t. N?u ???c nh? v?y ch?c ch?n con b?n s? có m?t môi tr??ng h?c t?p h?nh phúc ?? phát tri?n toàn di?n.\r\n<p align="right"><strong>Ngu?n:</strong> <em>Thông tin ???c cung c?p b?i Pacific Primary and High School.</em></p>', 4, ''),
(18, 'Chế độ dinh dưỡng giúp trẻ phát triển chiều cao', '', '<div>\r\n<p align="left"><strong>Ch? ?? ?n giúp tr? phát tri?n chi?u cao</strong></p>\r\n\r\n<table width="1" border="0" cellspacing="0" cellpadding="3" align="left">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://vnexpress.net/Files/Subject/3B/9D/58/14/04081908.jpg" alt="" width="150" height="120" border="1" /></td>\r\n</tr>\r\n<tr>\r\n<td>S?a là th?c ph?m lý t??ng cho tr?.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p align="left">M?t bé kh?e m?nh sinh ra dài h?n 50 cm, ?ây là m?t kh?i ??u t?t ?? phát tri?n. Trong 2 n?m ??u ??i, bé t?ng tr??ng v? chi?u cao r?t nhanh, thêm kho?ng 25 cm. Tr? cao hay th?p là do di truy?n, nh?ng ch? ?? ?n c?ng có th? làm thay ??i ?áng k?.</p>\r\n<p align="left">?? ??u t? chi?u cao cho tr?, không nh?ng c?n tác ??ng vào giai ?o?n bé ?ã ra ??i mà ph?i chu?n b? ngay t? khi ng??i ph? n? s?p mang thai, th?m chí t? khi bé gái ch?a ??n tu?i d?y thì. Khi mang thai, bà m? c?n ?n u?ng ?? ch?t, ?a d?ng các lo?i th?c ph?m, không kiêng khem ?? ??m b?o t?ng cân ?? 10-12 kg trong 9 tháng.</p>\r\n<p align="left">Tròn 1 n?m tu?i, trung bình bé trai cao kho?ng 76 cm, còn bé gái kho?ng 75 cm. Khi ???c 2 tu?i, bé s? cao kho?ng 85 cm. Ng??i ta ??c tính t?m vóc c?a ng??i tr??ng thành s? 2 l?n chi?u cao lúc 2 tu?i. Và giai ?o?n cu?i cùng ?? c?i thi?n t?m vóc là tu?i d?y thì: bé gái 10-16 tu?i, bé trai 12-18 tu?i. ? giai ?o?n này, bé s? t?ng 8-10 cm/n?m.</p>\r\n<p align="left">Trong giai ?o?n tr? còn có th? t?ng chi?u cao, c?n có m?t ch? ?? dinh d??ng h?p lý. N?ng l??ng cung c?p ph?i ??, phù h?p v?i l?a tu?i, không quá d? vì d? d?n t?i béo phì, c?ng không quá ít vì d? ??a ??n suy dinh d??ng. B?a ?n c?a tr? bao gi? c?ng ph?i ??y ?? 4 nhóm: ??m - b?t - béo - rau. Ch?t ??m nên chi?m kho?ng 10-15% t?ng n?ng l??ng nói chung, tinh b?t chi?m 60-65% và ch?t béo 10%. Nên cho tr? ?n ?a d?ng không kiêng khem, không ?n u?ng thiên l?ch.</p>\r\n<p align="left">Vitamin và khoáng ch?t c?ng có vai trò h?t s?c quan tr?ng trong vi?c phát tri?n chi?u cao c?a tr?. Canxi có nhi?u trong s?a, cua, ?c, tôm, tép, ??u nành và các lo?i rau. Trong ?ó, s?a là quan tr?ng nh?t. Canxi trong s?a d? h?p thu do có vitamin D và phospho v?i t? l? h?p lý. Ngoài ra, s?a còn cung c?p nhi?u vitamin, khoáng ch?t và ngu?n ??m có giá tr? sinh h?c cao, ch?a ?? các acid amin thi?t y?u.\r\n?? canxi ???c h?p thu t?t h?n, da c?n ti?p xúc tr?c ti?p v?i ánh n?ng ?? t?ng h?p vitamin D. Vì v?y, nên dành cho con b?n 20 phút t?m n?ng m?i ngày.\r\n\r\nVitamin A v?a giúp phòng ch?ng khô m?t, t?ng s?c ?? kháng ch?ng nhi?m trùng, v?a góp ph?n trong vi?c phát tri?n chi?u cao. Các th?c ?n giàu vitamin A là s?a, tr?ng, cá, gan, th?t...\r\n\r\nS?t, k?m c?ng có vai trò quan tr?ng ??i v?i s? phát tri?n chi?u cao. S?t có nhi?u trong th?c ?n ??ng v?t nh? gan, huy?t, th?t, cá... và các lo?i ??u ??, rau d?n. K?m có trong con hàu, gan heo, th?t bò, s?a, lòng ?? tr?ng, s?a ??u nành...\r\n\r\nNgoài ch? ?? dinh d??ng h?p lý, c?n khuy?n khích tr? có l?i s?ng n?ng ??ng, t?p th? d?c th? thao th??ng xuyên. Ng? ??, ng? sâu c?ng làm hoóc môn t?ng tr??ng ti?t ra nhi?u, kích thích x??ng dài h?n.</p>\r\n<p align="left">Cách ?o chi?u cao cho tr?</p>\r\n<p align="left">??i v?i tr? d??i 24 tháng, ?? tr? n?m ng?a trên m?t th??c ?o g?, ??u ch?m sát m?t c?nh c?a th??c ?o. M?t ng??i gi? ??u tr? th?ng, m?t nhìn lên tr?n nhà, m?t ng??i gi? 2 ??u g?i tr? th?ng và ??a m?nh g? áp sát 2 gót bàn chân, bàn chân th?ng ??ng. ??c k?t qu? và ghi s? cm.</p>\r\n<p align="left">??i v?i tr? trên 24 tháng, ?? tr? ?i chân không, ??ng th?ng, quay l?ng vào t??ng; ??u, hai vai, mông, b?p chân, gót chân áp sát t??ng. M?t nhìn th?ng ra phía tr??c, 2 tay xuôi theo thân mình. Dùng b?ng g? áp sát ??nh ??u, vuông góc v?i th??c ?o. Chi?u cao ??ng và n?m có th? chênh nhau 1-2 cm.\r\n\r\nCách tính chi?u cao ??n gi?n cho tr? 2 -12 tu?i: Chi?u cao (cm) = tu?i (n?m) x 6 + 77.</p>\r\n<p align="right">(Theo <em>S?c Kh?e &amp; ??i S?ng</em>)</p>\r\n\r\n</div>', 4, ''),
(19, 'Quà tặng cuộc sống: Đóa hoa tình yêu', '', 'http://www.youtube.com/watch?v=rjHVZewJ2WQ', 1, NULL),
(20, 'Phương Pháp Dạy Con Khi Mang Thai', '', '<img class="aligncenter" src="http://tinhkhongphapngu.net/images/stories/PPdaycon1.jpg" alt="" />\r\n\r\nKinh v?n, quy?n chú gi?i, trang 56:<strong>“Ph?c th? Ph? Qu?ng, nh??c v? lai th? trung, Diêm Phù ?? n?i, Sát L?i Bà la môn, tr??ng gi? c? s?, nh?t thi?t nhân ??ng.</strong><strong>C?p d? tánh ch?ng t?c, h?u tân s?n gi?, ho?c nam ho?c n?, th?t nh?t chi trung, t?o d? ??c t?ng, th? b?t t? nghì kinh ?i?n.</strong><strong>Cánh vi ni?m B? Tát danh, kh? mãn v?n thiên</strong><strong>bi?n</strong><strong>, th? tân sanh t?, ho?c nam ho?c n?, túc h?u ??ng báo, ti?n ??c gi?i thoát. An l?c d? d??ng, th? m?ng t?ng tr??ng, nh??c th? th?a phúc sanh gi?, chuy?n t?ng an l?c, c?p d? th? m?ng.”</strong>\r\n<div> <strong><em>Nguyên lý thai sanh</em></strong>\r\n<p align="justify">      ?o?n kinh trên nói v? lúc sinh n?, c?n ph?i tu ph??c nh? th? nào? Y h?c hi?n ??i phát tri?n h?n x?a r?t nhi?u, vi?c sinh n? c?ng an toàn yên tâm h?n ngày x?a. Th?i x?a, ??c bi?t ? nông thôn, nh?ng khu v?c l?c h?u kém phát tri?n, vi?c sinh n? th?c s? liên quan ??n m?ng s?ng con ng??i, cho nên ??c Ph?t ??c bi?t quan tâm nh?c nh?, d?y chúng ta ph?i tu h?c th? nào, làm sao ?? ??m b?o bình yên cho c? m? l?n con.</p>\r\n<p align="justify">      Trong kinh, ??c Ph?t d?y: Quan h? gia ?ình vô cùng m?t thi?t, ch?c ch?n ph?i có nhân duyên sâu s?c. Không ph?i t? chung m?t cách ng?u nhiên. ??c Ph?t ?ã phân chia nhân duyên ph?c t?p ?ó thành b?n lo?i, ?ó là: Báo ân, báo oán, ?òi n?, tr? n?, vì th? mà quy t? thành ng??i m?t gia ?ình. Cha con, anh ch? em, không th? tách r?i quan h? này.</p>\r\n<p align="justify">      Ng?n ng? th??ng nói: “<em>Không ph?i oan gia không chung nhà</em>”, câu nói này r?t có lý. Tuy nhiên sau khi giác ng?, ng??i c? nhà li?n tr? thành quy?n thu?c pháp l?, th?t không gì thù th?ng h?n. Còn không giác ng?, thì gia ?ình s? liên ti?p x?y ra ân oán xen k? báo ?ng l?n nhau. C? nhà ch?u kh? s? không nói ra ???c. Dù sao, tr? ?n thì hi?m, báo oán thì nhi?u; tr? n? thì ít, ?òi n? thì nhi?u. Cho nên c? ??i làm ng??i trên th? gian, th??ng xuyên th?y không hài lòng nh? ý.</p>\r\n<p align="justify">      Qu?  báo luôn bình ??ng, b?t k? sang hèn giàu nghèo. Kinh ?ã ví d?, Sát l?i là hoàng t?c c?a ?n ?? x?a; Bà la môn c?ng là giai c?p tôn giáo có ??a v? cao trong xã h?i b?y gi?; tr??ng gi? c? s? là ng??i có nhi?u ph??c báu; ti?p theo là t?t c? m?i ng??i và các h? t?c khác. Ph?m vi bao g?m r?t r?ng, trong ?ó có ??y ?? b?n giai c?p trên.</p>\r\n<p align="justify">      Ng??i Á ?ông th??ng nói “<em>Phú quý b?n ti?n, b?t k? thân ph?n th? nào, không lu?n ??a v? ra sao, vi?c sinh n? c?ng không th? tránh kh?i</em>”. H?n n?a, ?au ??n trong sinh n? là hoàn toàn bình ??ng. Ng??i giàu ???c ch?m sóc có ph?n ??y ?? h?n, ng??i nghèo khó ???c ch?m sóc kém h?n. Nói cho cùng, ?au ??n không th? nào tránh ???c.</p>\r\n<p align="justify">      <strong><em>Ph??ng pháp d?y b?o thai nhi</em></strong></p>\r\n<p align="justify">      Ph?t giáo h??ng d?n chúng ta ph??ng pháp, trong vòng b?y ngày, s?m ??c t?ng b? kinh b?t kh? t? nghì này. T?t nh?t là ??c s?m. Khi bi?t có thai li?n nên ??c, m?i ngày ??c t?ng m?t b? kinh ??a T?ng B? Tát B?n Nguy?n, ho?c ni?m nghìn câu danh hi?u B? Tát ??a T?ng. C?n ph?i dùng tâm chân thành cung kính ?? t?ng ni?m thì ph??c báu s? vô cùng to l?n.</p>\r\n<p align="justify">      Cho dù ??a bé trong thai ??n gia ?ình ?? báo oán, là oan gia trái ch?, nh?ng vì chúng ta ch?m sóc ??a bé nh? th? thì oan k?t c?ng s? ???c hóa gi?i. Do chúng ta có ân v?i nó thì nó không còn báo oán n?a mà chuy?n thành báo ân.</p>\r\n<p align="justify">      Chuy?n bi?n ph?i ngay t? th?i gian ??u. Kinh nh?n m?nh, ch?m nh?t c?ng ph?i vào b?y ngày tr??c khi sinh. ???ng nhiên càng s?m càng t?t. Khi chúng ta hi?u ???c ??o lý này, bi?t ???c ph??ng pháp này, t?t nh?t ??c t?ng ngay khi bi?t mình có thai, y theo ph??ng pháp mà tu hành.</p>\r\n<p align="justify">      ??i v?i ng??i làm m?, c?n tâm bình khí hòa, chân thành, cung kính, thanh t?nh, bình ??ng, vì kh?i tâm ??ng ni?m s? ?nh h??ng ??n thai nhi. ?i?u này, n?u nói theo lý lu?n khoa h?c hi?n ??i thì càng d? hi?u h?n. ?ây thu?c v? hi?n t??ng v?n ??ng c?a sóng.</p>\r\n<p align="justify">      <strong><em>S?  lu?n s? v?n hành c?a sóng</em></strong></p>\r\n<p align="justify">      Ph?t pháp nói, c?ng nh? th? gi?i Tây Ph??ng C?c L?c, t?t c? pháp ??u phát ra ánh sáng, không nh?ng con ng??i có th? phóng quang mà v?n v?t c?ng phóng quang. C?c L?c th? gi?i ánh sáng soi kh?p, ánh sáng th? gi?i chúng ta c?ng phóng quang r?i kh?p. Gi? s? t?t c? m?i ng??i trên th? gian không có ánh sáng soi kh?p, v?n v?t không nh? C?c L?c Th? Gi?i ???c ánh sáng chi?u kh?p nh? th?, thì “<em>Nh?t chân pháp gi?i</em>” tr? thành mâu thu?n. Làm gì có chuy?n n?i này ??c bi?t sáng h?n, còn n?i khác l?i không có ánh sáng, nh? v?y làm sao gi?i thích cho thông su?t? “<em>Nh?t chân pháp gi?i</em>” là bao g?m c? pháp gi?i c?a chúng ta, không có ??o lý r?i kh?i pháp gi?i này.</p>\r\n<p align="justify">      ??c ?o?n kinh, chúng ta ph?i hi?u r?ng, n?i có ánh sáng soi kh?p thì m?i ng??i ??u có th? c?m nh?n ???c. N?i chúng ta c?ng có ánh sáng soi kh?p nh?ng ch? vì chúng ta không có c?m giác mà thôi. T?i sao chúng ta không có c?m giác? Vì tâm không thanh t?nh, tâm quá lo?n, v?ng ni?m quá nhi?u nên không th? c?m nh?n ???c c?nh gi?i nh? th?. Th? gian này cùng C?c L?c th? gi?i và Hoa T?ng th? gi?i không h? khác bi?t. Nói theo v?t lý h?c hi?n ??i càng d? lý gi?i h?n. Ánh sáng là hi?n t??ng ho?t ??ng c?a sóng, ch? c?n có ho?t ??ng là có sóng. Khoa h?c hi?n t?i g?i là sóng, nhà Ph?t g?i là ánh sáng. Cho nên ánh sáng chính là sóng, bao g?m t?t c? v?t ch?t. V?t ch?t ?ã hình thành nh? th? nào? Phân tích ??n t?n cùng, v?t ch?t là nguyên t? proton, neutron. Nh?ng h?t c? b?n nh? th? ??u luôn chuy?n ??ng. ??c Ph?t không c?n có nh?ng thi?t b? khoa h?c hi?n ??i, ngài v?n nhìn th?y rõ ràng hi?n t??ng sóng và h?t mà nh?ng thi?t b? tiên ti?n nh?t hi?n nay ch?a th? quan sát ???c. Ngài thuy?t gi?ng m?t cách uy?n chuy?n t??ng t?n, nói ra th?c t??ng c?a s? v?t, nh?ng chúng ta ph?n l?n không tin, không ch?p nh?n, dù cách nói c?a ??c Ph?t r?t vi di?u, sâu s?c, g?i là thi?n x?o, là ph??ng ti?n khéo léo.</p>\r\n<p align="justify">      Khi ??c Ph?t nói v? hi?n t??ng v?t ch?t ?ã nói rõ b?n nguyên t?c “<em>??t n??c gió l?a</em>”. ??t n??c gió l?a là v?t ch?t c?n b?n, là h?t c? b?n mà khoa h?c hi?n nay ?ang nói. ??t là t??ng tr?ng c?a v?t ch?t, cái con ng??i có th? nhìn th?y. ??t ??i di?n cho v?t th?. M?t tr?n chúng ta không th? nhìn th?y h?t. D??i kính hi?n vi có ?? phân gi?i cao li?n nhìn th?y ???c t??ng tr?ng c?a h?t này. ??c Ph?t không c?n thi?t b? gì c?, m?t c?a ngài “<em>Ng? nhãn viên minh</em>”, nh?y bén h?n chúng ta r?t nhi?u, có th? th?y th? mà phàm phu chúng ta không th? nhìn th?y.</p>\r\n<p align="justify">      Th?  thì v?t ch?t c? b?n ???c c?u thành nh? th? nào? Luôn mang ngu?n ?i?n, cho nên, l?a, h?a ??i, chính là ?i?n d??ng; n??c, th?y ??i là ?i?n âm, ngôn ng? chúng ta dùng hi?n nay là nhi?t ?? và ?m ??. Còn gió là tr?ng thái ho?t ??ng, không ??ng yên. V?t ch?t c? b?n là h?t th?y hi?n t??ng c?a t?t c? v?t ch?t, bao g?m t? ch?c t? bào trong con ng??i. Nh? v?y th? ngh? xem, làm gì có hi?n t??ng ??ng yên. H?t c? b?n luôn luôn ho?t ??ng, ??ng sinh ra sóng. Lý thuy?t và th?c t? ??u ch?ng minh n?ng l??ng c?a sóng lan r?ng t?n h? không bi?n pháp gi?i. Tr?i ??t v?n v?t, chúng sanh ?ông nh? th?, kh?i tâm ??ng ni?m, thì sóng ?ó càng hi?n th? rõ ràng, ph?m v? ?nh h??ng càng r?ng h?n, trong khi sóng c?a v?t ch?t còn t??ng ??i nh? h?p. Hi?u ???c ?i?u này, chúng ta li?n nh?n ra trong không gian cu?c s?ng c?a chúng ta, sóng ho?t ??ng ph?c t?p d??ng nào.</p>\r\n<p align="justify">      Kinh Ph?t d?y, v?i thi?n ni?m, thi?n tâm, sóng phát ra ?n ??nh nh? nhàng, sau khi ti?p xúc ???c v?i sóng này, con ng??i sanh tâm hoan h?, có c?m giác d?u dàng tho?i mái. Còn kh?i ác ni?m, ác tâm, sóng ??ng r?t mãnh li?t,phát ra giao ??ng m?nh, ti?p xúc v?i sóng này s? th?y khó ch?u c? ng??i. Ngày nay, hi?n t??ng nh? th? g?i là t? tr??ng. Ng??i luy?n khí công ? Trung Qu?c c?ng cùng m?t tr?ng thái nh? th?, cho nên g?i là “<em>khí</em>” c?ng ???c. Ph?t pháp g?i là ánh sáng, sóng ??ng, t? tr??ng, cùng m?t tr?ng thái.</p>\r\n<p align="justify">      Do ?ây có th? bi?t, khi th?n th?c ??n ??u thai, nó có ý ni?m, có sóng, cho nên kh?i tâm ??ng ni?m và hành ??ng c?a ng??i m? ??u ?nh h??ng ??n thai. Ngày x?a, Trung Qu?c luôn chú ý ??n thai giáo. Thai giáo trong sách c? ghi l?i m?t s? nguyên lý, nh?ng nói không t??ng t?n chi ti?t, không ???c th?u ?áo, ??c xong còn n?a tin n?a ng?, không th?y ???c tính nghiêm tr?ng c?a ?nh h??ng này, và c?ng khó hi?u.</p>\r\n<p align="justify">      Hôm nay chúng ta hi?u rõ chân t??ng s? th?t v? sóng, thì s? bi?t ???c m?i kh?i tâm ??ng ni?m ??u ?nh h??ng ??n thai nhi r?t nhi?u. Nên trong th?i gian ng??i m? mang thai, n?u kh?i tâm ??ng ni?m thi?n, thanh t?nh thì thai nhi s? nh?n ???c r?t nhi?u l?i l?c.</p>\r\n<p align="justify">      Ng??i nào c?ng mong mu?n con cái mình ngoan gi?i, là con th?o cháu hi?n. V?y làm th? nào d?y chúng? Ngay trong lúc mang thai, chính b?n thân chúng ta ph?i th?c hành t?n hi?u th?o, sóng hi?u th?o ?ó s? ?nh h??ng ??n thai nhi. Chúng ta tu thanh t?nh, tu ph??c, nh? v?y m?i th?t s? gieo cho thai nhi h?t gi?ng t?t v? sau. ??o lý này có th?t, không có gì mê tín c?.</p>\r\n<p align="justify">      <strong><em>Vì</em></strong><strong><em> </em></strong><strong><em>sao ??c Ph?t khuyên chúng ta ??c b? kinh ??a T?ng B? Tát B?n Nguy?n?</em></strong></p>\r\n<p align="justify">      Vì  b? kinh này là hi?u kinh, tinh th?n c?a b? kinh có th? tóm l??c thành b?n ch? “<em>Hi?u thân tôn s?</em>”. “<em>Hi?u thân tôn s?</em>” là c??ng l?nh d?y h?c c?a th? xu?t th? gian, c?ng là c?n b?n n?n t?ng.</p>\r\n<p align="justify">      Chúng ta tu h?c Ph?t pháp ??i th?a b?t ??u t?  ?âu? Chính t? B? Tát ??a T?ng. ??a là tâm ??a, t?ng là b?o tàng. B?o tàng quý giá trong tâm ??a là trí tu? vô l??ng, ph??c ??c vô l??ng và kh? n?ng vô l??ng. B?o tàng h?t châu v?n có trong t? tánh c?a chúng ta, vì th? mà g?i là ??a T?ng. B?o tàng chôn d??i lòng ??t, c?ng nh? vàng b?c, khoáng s?n, n?u không bi?t khai thác thì v?n n?m sâu d??i ??t, tuy có nh?ng không th? h??ng dùng.</p>\r\n<p align="justify">      Chúng ta c?n ph?i bi?t khai thác b?o tàng trong t? tánh, b?ng cách dùng ??n tánh ??c, t?c là l?y ??c tính làm công c? t??ng ?ng v?i b?o tàng thì m?i khai thác ???c. Thù th?ng nh?t trong tánh ??c chính là hi?u và kính. Cho nên khi tu h?c Ph?t pháp ??i th?a, ph?i b?t ??u t? B? tát ??a T?ng. H?c hi?u ??o tr??c, trong hi?u xây d?ng s? ??o. Ph?t pháp là s? ??o ???c xây d?ng trên n?n t?ng hi?u ??o.</p>\r\n<p align="justify">      Nh?ng n?m tr??c ?ây, tôi g?p m?t s? pháp s? ??n ho?ng pháp t?i Hoa K?. Khi ti?n h?, tôi ?ã khuyên h? ??n Hoa k? ??ng xây chùa chi?n tr??c, mà hãy xây d?ng t? ???ng, xi?n d??ng hi?u ??o. Vì sao? Vì n?u không có hi?u ??o thì Ph?t pháp không th? bám r?, ??o tràng c?a Ph?t giáo không th? m?nh ???c.</p>\r\n<p align="justify">      <strong><em>L?y hi?u ??o làm n?n t?ng giáo d?c</em></strong></p>\r\n<p align="justify">      Ph?t pháp là s? ??o, cho nên xây d?ng t? ???ng t?t h?n. T? ???ng ?? ho?ng d??ng Ph?t pháp, có hi?u qu? l?n h?n xây d?ng t? vi?n. Nhìn vào hình ?nh chùa chi?n, ng??i ta bi?t ngay là Ph?t giáo, ng??i không tin Ph?t nh?t ??nh không vào, duyên này li?n b? c?t ??t. Nh?ng n?u xây d?ng t? ???ng, hàng n?m cúng gi?, ng??i Trung Qu?c b?t k? theo tôn giáo nào v?n không th? quên t? tiên. Khi h? ??n tham gia gi? t?, chúng ta có th? gi?ng thêm v? Ph?t pháp, có th? gi?ng ph??ng th?c d?y h?c truy?n th?ng Trung Qu?c, d?n d?n c?m hóa ??i chúng ??n d?. Cho nên l?y t? ???ng làm ??o tràng l?i l?c h?n chùa chi?n t? vi?n r?t nhi?u.</p>\r\n<p align="justify">      R?t ti?c các v? pháp s? ?ó không ti?p nh?n ki?n ngh? c?a tôi. Cho nên t?i Hoa K?, ng??i Nh?t, ng??i Trung Qu?c ?ã xây r?t nhi?u ??o tràng, ch? y?u c?ng ch? ?? cho ng??i Trung Qu?c. Th?c t? ng??i n??c ngoài t?i ??a ph??ng r?t ít và hi?m khi vào, nguyên nhân c?ng vì h? không tin Ph?t. Làm nh? v?y là chúng ta ?ã ??o ng??c ng?n ngu?n. ??n nay, tuy ?ã tr?i qua th?i gian h?n m?t tr?m n?m, nh?ng t?i Hoa k?, Ph?t giáo truy?n vào c?ng ch?a bám r? ???c, ch?a ho?ng pháp th?t hi?u qu?, r?t nhi?u ng??i ch?a bi?t ??n Ph?t pháp.</p>\r\n<p align="justify">      Khi tôi gi?ng kinh ho?ng pháp t?i Hoa k?, nh?c nh? m?i ng??i r?ng chúng ta ch?a ?? ph??c báu, l?c l??ng còn m?ng manh, tôi ?? ngh? hi?n ??i hóa và b?n ??a hóa Ph?t giáo. Khi xây d?ng ??o tràng t?i Hoa K?, hình th?c c?a ??o tràng nh?t ??nh ph?i theo hình th?c c?a Hoa K?. Không nên b?ng nguyên xi hình th?c cung ?i?n ki?u Trung Qu?c ??n, ng??i M? nhìn th?y bi?t ngay là hàng ngo?i, v?n hóa ngo?i lai, li?n sinh tâm bài xích, và không thích ?i vào. Xây d?ng ??o tràng t?i Hoa K?, nên xây d?ng theo hình th?c nh? tòa B?ch ?c, hay ki?u Qu?c h?i..., ng??i M? c?m nh?n nh? c?m nh?n v?n hóa mình, h? s? b? thu hút vào.</p>\r\n<p align="justify">      Còn hình t??ng Ph?t B? Tát trong ??o tràng thì t?c kh?c theo hình dáng ng??i M?. Nh? th? m?i có th? ?? ???c ng??i n??c h?. Hai nghìn n?m tr??c ?ây, Ph?t pháp truy?n vào Trung Qu?c, nh?ng v? cao t?ng ?n ?? ?ã r?t thông minh khi d?ng t??ng Ph?t B? Tát theo hình dáng ng??i Trung Qu?c, xây ??o tràng c?ng theo hình th?c c?a Trung Qu?c.</p>\r\n<p align="justify">      Ng??i Trung Qu?c r?t tôn kính hoàng ?? và n?i ? c?a hoàng ??. Lúc ?ó các v? cao t?ng ?n ?? ?ã xây d?ng ??o tràng theo hình th?c cung ?ình, bá tánh nhìn th?y ??u r?t hoan h?. M?y ai có ph??c duyên ???c vào tham quan hoàng cung m?t l?n trong ??i. Th? nên chùa chi?n t? vi?n ???c xây d?ng c?ng không khác hoàng cung bao nhiêu, cho nên dân chúng nh?t ??nh vào th?m. ?ó là trang thi?t b? ph?n c?ng. Còn n?i dung bên trong ph?i b?t ??u t? “<em>hi?u kính</em>”.</p>\r\n<p align="justify">      Ph?t giáo truy?n vào Trung Qu?c, t?i sao ???c tri?u ?ình hoan nghênh n?ng nhi?t nh? th?? Chính vì n?i dung d?y h?c. Ph?n lý l? c?n b?n nh?t hoàn toàn phù h?p v?i lý l? c?a thánh hi?n Trung Qu?c x?a. Cách d?y c?a nhà Nho c?ng xây d?ng trên n?n t?ng hi?u ??o. Ph?t pháp t??ng t?, th?m chí Ph?t pháp còn nói rõ h?n, chi ti?t h?n Nho giáo. Do ?ó Ph?t pháp truy?n vào Trung Qu?c li?n ???c tri?u ?ình hoan nghênh ?ng h?, thành công ngay th?i ?i?m ?ó. ??i v?i xã h?i, qu?c gia, nhân dân, th?c s? ?ã mang l?i l?i ích và an l?c, tuy?t nhiên không ph?i là mê tín.</p>\r\n<p align="justify">      ??i t??ng tu h?c Ph?t pháp t? l?ch s? Trung Qu?c ??u là giai c?p s? ??i phu. Th?i k? ?ó, giai c?p s? phu t??ng ???ng thành ph?n tri th?c ngày nay. H? không ph?i là ng??i bình th??ng mà là nh?ng ng??i th?t s? có h?c v?n, có ??o ??c. H? tu h?c, ti?p nh?n Ph?t pháp, tín ng??ng Ph?t Pháp r?i y giáo ph?ng hành, vì th? ??t hi?u qu? trong vi?c thay ??i phong t?c t?p quán, d?n d?t t?ng l?p bình dân h?c và hành theo t?p quán l??ng thi?n.</p>\r\n<p align="justify">      Còn  hi?n nay, chùa chi?n t? vi?n ?ã bi?n ch?t, không còn d?y h?c. Ngày x?a t? vi?n là nhà tr??ng, là môi tr??ng d?y h?c, bây gi? t? vi?n tr? thành môi tr??ng siêu ?? vong linh. Hoàn toàn thay ??i, bi?n ch?t quá n?ng.</p>\r\n<p align="justify">      <strong><em>Nhìn nh?n v? Ph?t s? c?u siêu trong nhà Ph?t</em></strong></p>\r\n<p align="justify">      Th?c ra vi?c c?u siêu cho vong linh v?n không có trong Ph?t giáo. V?y t?i sao di?n bi?n thành hi?n t??ng nh? th? này?</p>\r\n<p align="justify">      Th?i gian khi tôi b?t ??u h?c Ph?t, g?n g?i pháp s? ??o An, lúc ?ó chúng tôi cùng nhau t? ch?c l?p nghiên c?u Ph?t h?c cho ??i h?c. Tôi ?ã th?nh giáo pháp s? ??o An. Ngài t? bi d?y. Ngài nói duyên kh?i v?n ?? này có th? b?t ??u t? n?m Khai Nguyên nhà ???ng, t?c th?i ??i c?a ???ng Minh Hoàng. Cu?i ??i, ???ng Minh Hoàng vì s?ng ái D??ng quý phi nên ?ã b? tri?u ?ình lên án, d?n ??n An L?c S?n t?o ph?n, c? h? m?t n??c. R?t may có t? t??ng Quách T? Nghi d?p yên cu?c ??ng lo?n, nh?ng quân dân ch?t r?t nhi?u. Sau khi d?p yên cu?c ??ng lo?n, tri?u ?ình t?i m?i chi?n tr??ng ??u cho xây d?ng m?t ngôi chùa g?i là Khai Nguyên t?. Chùa Khai Nguyên xu?t hi?n nh? th?. M?c ?ích ?? truy ni?m quân dân t? n?n, chùa ?ã th?nh m?i các pháp s? t?ng kinh siêu ??, g?i là pháp h?i truy ?i?u.</p>\r\n<p align="justify">      Tri?u  ?ình qu?c gia kh?i x??ng truy ?i?u vong h?n ng??i t?  n?n, t? ?ó dân gian b?t ch??c, c? trong dân chúng có ng??i qua ??i ??u th?nh m?i pháp s? làm Ph?t s? c?u siêu. Vi?c c?u siêu th?i ?ó ch? là vi?c ph? thu?c, còn vi?c chính y?u trong ??o tràng v?n là thuy?t pháp gi?ng kinh, h??ng d?n ??i chúng tu hành. Tuy nhiên vi?c ph? này bây gi? ?ã bi?n thành vi?c chính th?c c?a chùa chi?n, còn vi?c chính th?c thì l?i bi?n m?t, không th?y n?a. Ngh? tay trái bi?n thành ngh? chính, ?úng là ?iên ??o. ?ó là lý do hình thành xu h??ng mê tín. S? th?c c?a vi?c thay ??i di?n bi?n, chúng ta c?n ph?i hi?u.</p>\r\n<p align="justify">      Lý lu?n, ph??ng pháp, nguyên lý và nguyên t?c c?u siêu ??u có vi?t trên kinh ??a T?ng B? Tát B?n Nguy?n. Ng??i c?u siêu làm sao có th? chân th?t c?u siêu ???c cho vong linh siêu thoát kh?i các cõi ác, sinh lên cõi tr?i, h??ng th? ph??c báu. Kinh nói r?t rõ ràng. B?n thân ng??i c?u siêu c?n ph?i ch?ng qu?. N?u b?n thân không nâng cao ???c c?nh gi?i c?a mình, không th? ch?ng qu? thì l?i l?c vong linh nh?n ???c c?ng r?t gi?i h?n.</p>\r\n<p align="justify">      <strong><em>Bài h?c hi?u ??o trong kinh ??a T?ng</em></strong></p>\r\n<p align="justify">      Kinh ??a ra ví d?, n? Quang M?c là m?t cô gái có hi?u, bi?t m? mình trong lúc sinh th?i t?o nhi?u ác nghi?p, cô hi?u Ph?t pháp, áp d?ng l?i Ph?t d?y. Nh?ng nghi?p m? cô ?ã t?o trong ??i, nh?t ??nh ph?i ??a ??a ng?c, ??a ng?c d? vào nh?ng th?t khó ra. Cô mu?n c?u m? nên ??n c?u Ph?t. ??c Ph?t d?y cô dùng ph??ng pháp ni?m Ph?t. Ngoài ra không còn cách nào khác.</p>\r\n<p align="justify">      Bà  la môn n? dùng ph??ng pháp ni?m Ph?t, Quang M?c n? c?ng dùng ph??ng pháp ni?m Ph?t. Ba la môn n? ch? là phàm phu nh?ng vì mu?n c?u m? nên trong m?t ngày m?t ?êm, tinh ti?n ni?m Ph?t r?t thành kh?n, ?úng pháp, ??t nh?t tâm b?t lo?n, li?n ch?ng qu?. Lúc ? trong thi?n ??nh, cô ??n ??a ng?c, qu? v??ng trong ??a ng?c nhìn th?y li?n ch?p tay g?i cô là B? tát. Chúng ta th?y, t? phàm phu, tu hành m?t ngày m?t ?êm ?ã siêu phàm nh?p thánh.</p>\r\n<p align="justify">      Qu?  v??ng chào: “<em>B?ch B? tát, ngài ??n ?ây có vi?c gì?</em>”. Cô h?i: “<em>?ây là n?i nào?</em>” Qu? v??ng tr? l?i ??a ng?c. Ng??i vào ??a ng?c ch? có hai ??i t??ng, m?t là theo nghi?p l?c, ??n ch?u nghi?p báo; hai là b? tát ??n theo nguy?n l?c. Ngoài hai ??i t??ng này không ai có th? ??n ???c ??a ng?c. Sau ?ó cô h?i qu? v??ng v? tung tích m? mình. Qu? v??ng cho bi?t, m? c?a cô ba ngày tr??c ?ã sanh v? cõi tr?i ?ao L?i. Không nh?ng m? cô mà nh?ng ng??i ch?u t?i chung v?i m? cô c?ng ??u ???c sanh v? cõi tr?i ?ao L?i. H? nghe nói, bà có ng??i con gái hi?u th?o tu ph??c cho bà, cúng d??ng ??c Giác Hoa ??nh T? T?i V??ng Nh? Lai. Nh? ph??c báu này, bà ta ???c vãng sanh.</p>\r\n<p align="justify">      N?u không ph?i vì ng??i m? t?o t?i nghi?p ??a ??a ng?c thì n? Quang M?c c? ??i không th? ??t ???c c?nh gi?i nh? th?, vì ngày th??ng ni?m Ph?t hay tán lo?n, làm sao có th? ??t ???c nh?t tâm. V?i mong mu?n c?u m?, cô ?ã c? h?t s?c trong m?t ngày ?êm thay ??i h?n c?nh gi?i c?a mình. N? Quang M?c có th? chuy?n phàm thành thánh do tr? duyên c?a m?. Ng??i m? ???c vãng sanh c?ng vì lý l? này. M?t mình n? Quang M?c ch? c?u siêu qua hình th?c s? không có hi?u qu?. Chính mình không có ph??c báu thì ng??i ???c c?u siêu c?ng không nh?n l?i ích gì.</p>\r\n<p align="justify">      <strong><em>Công phu tu t?p tr??c tiên ?  chính mình</em></strong></p>\r\n<p align="justify">      Pháp gi?i ? ???ng ác, và pháp gi?i ?  cõi ng??i chúng ta không khác nhau. C?ng nh? trong m?t gia ?ình, ??a con ???c giáo d?c ?àng hoàng, ra xã h?i, ??u ???c m?i ng??i kính tr?ng, làm ??n t?ng th?ng, b? tr??ng, cha m? ?i ??n ?âu c?ng nh?n ???c s? tôn kính c?a ng??i khác. Còn b?n thân mình không thành t?u, cha m? chúng ta làm sao ???c qu? th?n cung kính.</p>\r\n<p align="justify">      Kinh nói v?n ?? c?u siêu, b?y ph?n công ??c thì chính mình ???c sáu ph?n. Ng??i ???c c?u siêu ch? nh?n m?t ph?n. B?n thân ni?m Ph?t m?t ngày m?t ?êm ??t ??n nh?t tâm b?t lo?n, công ??c c?a b?n thân là chính, ng??i m? ch? h??ng m?t ph?n, ???c m?t ít ph??c, sanh v? cõi tr?i ?ao L?i. Vì v?y n?u b?n thân không th? thành t?u, ng??i thân s? không có ???c ph??c báu nh? th?.</p>\r\n<p align="justify">      Nh?ng l? cúng b? thí bình th??ng ch? là  m?i h? ??n ?n c?m, nh? cúng diêm kh?u mông s?n. M?t b?a ?n no ch? qua ???c c?n ?ói nh?t th?i ch? không th? giúp h? thoát kh?i các ???ng ác. Chân th?t mu?n thoát kh?i ???ng ác, thì trong Ph?t s? c?u siêu ?? này, nh?ng v? pháp s? làm l? c?u siêu ph?i tùy v?n nh?p quán. Sau khi hoàn t?t khóa l? c?u siêu, b?n thân pháp s? ph?i th?t s? tr? thành B? tát, c?nh gi?i c?a pháp s? ???c nâng cao ngay thì hi?u qu? c?u siêu s? vô cùng l?n, vong linh siêu ?? ch?c ch?n ???c sanh cõi tr?i. Các v? pháp s? ph?i t?ng ni?m nghiêm túc, tu trì b?ng tâm thanh t?nh, bình ??ng. Chính pháp s? ph?i ??t siêu phàm nh?p thánh, t? phàm phu th?ng ti?n ??n B? tát. Còn sau khi hoàn t?t Ph?t s?, v?n còn là phàm phu s? không có thành t?u cho vong linh. Chúng ta c?n hi?u th?u v?n ?? này.</p>\r\n<p align="justify">      Do ?ó khi có Ph?t s? c?u siêu, hành gi? ph?i nghiêm túc. Ni?m t?ng kinh v?n, x?ng tán nh?ng bài k?, nh?t ??nh ph?i kh? nh?p vào c?nh gi?i ?ó. Sau khi nh?p vào c?nh gi?i thì không ???c th?i chuy?n, có nh? v?y công ??c m?i vô l??ng vô biên. Ng??i nh?n ph??c báu s? không th? nào ??m ???c. Không nên làm qua loa t?c trách cho xong chuy?n. C?u siêu không th? cho giá, nói thách. ?ó là cách làm ?n mua bán, không còn gì g?i là công ??c n?a. Ch?y theo hình th?c nh? th? hoàn toàn sai.</p>\r\n<p align="justify">      C?u siêu không nh?ng siêu ?? cho vong h?n mà còn siêu ?? cho c? chính mình. Khi chính mình ???c siêu thì vong linh c?ng theo mình mà siêu ??. B?n thân ch?a có cách siêu ?? chính mình thì ch?c ch?n không th? siêu ?? ???c vong linh. ?ây chính là ?i?u kinh Ph?t th??ng nói. Chúng tôi th??ng xuyên ??c l?i kinh, n? Quang M?c th?t s? ?? ???c b?n thân, Bà la môn n? c?ng ?? ???c b?n thân. Sau khi b?n thân ???c ?? m?i có th? ?? ???c ng??i khác. Nh?ng vong linh nh? vào ph??c ??c c?a ng??i siêu ?? mà vãng sanh. Nh?ng vãng sanh cao nh?t trong tr??ng h?p này c?ng ch? ??n cõi tr?i ?ao L?i. Mu?n cao h?n cõi tr?i ?ao L?i, nh?t ??nh ph?i nh? công phu tu hành c?a chính mình, ng??i khác không th? giúp ???c.</p>\r\n<p align="justify">      ? Trung Qu?c tr??c ?ây, l? c?u siêu quy mô l?n nh?t là khi L??ng V? ?? siêu ?? hoàng h?u c?a mình. Ng??i ch? trì pháp h?i c?u siêu là pháp s? B?o Chí, m?t cao t?ng ???ng th?i. Sau này chúng ta bi?t, pháp s? B?o Chí là hóa thân c?a B? tát Quan Th? Âm. ?ích thân B? tát Quan Th? Âm ch? trì pháp h?i c?u siêu, sau này l?u truy?n l?i quy?n L??ng Hoàng Sám.</p>\r\n<p align="justify">      Nh?  v?y, B? Tát Quan Th? Âm ch? trì pháp h?i siêu ?? hoàng h?u c?a L??ng Võ ?? nh?ng hoàng h?u c?ng ch? sanh ??n cõi tr?i ?ao L?i. Gi? s? ch? Ph?t Nh? Lai ch? trì c?ng nh? th? thôi. Vong linh d?a vào ph??c báu tha l?c c?a ng??i khác ch? có th? ??t ???c c?nh gi?i nh?t ??nh. Mu?n có c?nh gi?i cao h?n ph?i d?a vào tu hành c?a mình. Chính mình không công phu tu t?p thì không xong. Vì th? khi tu hành, chúng ta ph?i chân th?t chuy?n bi?n ???c c?nh gi?i, th?t s? có k?t qu? thì Ph?t s? c?u siêu này có th? không c?n hình th?c gì c?.</p>\r\n<p align="justify">      Trong h?i ký ?nh Tr?n, lão pháp s? ?àm H? nói, n?m x?a ngài ? cùng vài ng??i b?n, chuyên nghiên c?u kinh L?ng Nghiêm, “<em>tám n?m song c?a h?c L?ng Nghiêm</em>”. Lúc ?ó ngài ?ang là c? s?, m?i ngày còn ph?i làm vi?c, bôn ba vì cu?c s?ng nên không th? hoàn toàn chuyên tâm. Nh?ng th?i gian tám n?m ch? ??c m?t b? kinh, ít nhi?u c?ng ch?ng t? ngài có ??nh l?c. N?u trong tám n?m ??c hàng ch?c b? kinh s? không hi?u qu?. Tám n?m ròng tham c?u, tâm ??nh trên m?t b? kinh, oan gia trái ch? c?a ngài ?ã ??n nh? ngài siêu ??. Khi nhìn th?y nh?ng vong h?n ??n, ngài s? hãi, e r?ng nh?ng vong h?n ?y ??n gây phi?n ph?c. Nh?ng oan gia trái ch? b??c t?i qu? d??i chân ngài, c?u ngài siêu ??, tâm c?a ngài li?n an ngay vì bi?t h? không ph?i ??n gây phi?n ph?c. H? nói ch? c?n ngài ??ng ý là có th? siêu ???c. Ngài li?n g?t ??u ??ng ý, l?p t?c nh?ng vong h?n ?áp trên ??u g?i và vai ngài ?? vãng sanh. Hoàn toàn không có nghi th?c gì c?.</p>\r\n<p align="justify">      Khi b?n thân ??t ???c c?nh gi?i này, có công phu viên mãn, vong linh li?n n??ng nh? ph??c báu c?a chúng ta. Ch? c?n chúng ta ??ng ý là ???c. Cho nên c?n ph?i nh?, siêu ?? vong linh hoàn toàn d?a vào ??c h?nh và công phu tu hành c?a chính mình.</p>\r\n<p align="justify">      Chúng ta hi?u rõ lý l? này, hi?u th?u c?m ?ng c?a tâm ?i?n thì chính t? nh?ng t? t??ng, kh?i tâm ??ng ni?m thi?n phát ra sóng thu?n thi?n. L?c c?a sóng m?nh có th? làm cho t?t c? chúng sanh trên th? gian bao g?m qu? th?n, nh?ng sóng phát ra ác ni?m b? sóng thi?n bao ph? và tri?t tiêu. Hi?u qu? r?t thù th?ng.</p>\r\n<p align="justify">      Nói v? sinh n?, ni?m b? kinh này có nhi?u l?i l?c. Khi ni?m nh?ng ?i?u nêu trong kinh ?i?n nh? lý lu?n, ph??ng pháp, c?nh gi?i ??u hi?u th?u, hành gi? càng có l?c thù th?ng h?n. Vì ?ã hi?u th?u thì ??c t?ng có th? tùy v?n nh?p quán. C?nh gi?i bình th??ng c?a chúng ta khó chuy?n, t?i thi?u trong khi ??c t?ng, c?nh gi?i ?ó có th? bi?n chuy?n m?t vài ph?n. Hi?u qu? này ??u hi?n rõ trong ho?t ??ng c?a sóng. Hi?u sâu s?c, bi?t y giáo ph?ng hành thì l?c ?ó càng không th? ngh? bàn.</p>\r\n<p align="justify">      <strong><em>“Th? tân sanh t?”</em></strong></p>\r\n<p align="justify">      ??a bé m?i chào ??i, dù trai hay gái, n?u có ác báo ??u có th? ???c gi?i tr?. ??i quá kh? ?ã gây t?i nghi?p thì ??i này ph?i ??n ch?u qu? báo. Vì v?y th?i ?i?m mang thai bé là lúc nghi?p ch??ng r?t d? tiêu tr?. Còn khi em bé l?n lên, sáng t?i su?t ngày suy ngh? lung tung, lúc ?ó chúng ta mu?n tiêu tr? nghi?p ch??ng cho con c?ng khó lòng giúp ???c. Lúc mang thai, bé hoàn toàn nghe l?i, tiêu tr? nghi?p ch??ng nên th?c hi?n ngay trong th?i gian này.</p>\r\n<p align="justify">      Thai giáo các thánh hi?n x?a ?ã nói t??ng t? nh? v?y. Thai giáo trong Ph?t pháp c?ng th?.</p>\r\n<p align="justify">      <strong><em>“An l?c d? d??ng, th? m?ng t?ng tr??ng”</em></strong></p>\r\n<p align="justify">      Nghi?p ch??ng ??a bé ???c tiêu tr?, tai n?n c?ng ???c tiêu tr?, nó tr? nên d? nuôi, th? m?ng ???c t?ng tr??ng. N?u ??a bé này do th?a ph??c mà sanh, thì ph??c báu chúng ta tu trong ??i quá kh?, nay ???c ??a bé ??n báo ?n cha m?, t?o ?n ??c v?i cha m?, nh? v?y b?n thân bé c?ng tu ph??c.</p>\r\n<p align="justify">      <strong><em>“Chuy?n t?ng an l?c, c?p d? th? m?ng”</em></strong></p>\r\n<p align="justify">      Chúng ta d?y d?, giúp ?? bé, ph??c báu c?a bé càng nhi?u h?n, th? m?ng càng dài h?n. Trong chú gi?i c?ng gi?i thích r?t hoàn h?o v?n ?? này.</p>\r\n<p align="justify">Xem ti?p kinh v?n, quy?n trung, trang 59</p>\r\n<p align="justify"><strong>“Ph?c th? Ph? Qu?ng, nh??c v? lai th? chúng sanh, ? nguy?t nh?t nh?t, bát nh?t, th?p t? nh?t, th?p ng? nh?t, th?p bát nh?t, nh? th?p tam, nh? th?p t?, nh? th?p bát, nh? th?p c?u, nãi chí tam th?p nh?t, thi ch? nh?t ??ng, chúng t?i k?t t?p, ??nh k? khinh tr?ng.”</strong></p>\r\n<p align="justify">      ?? m?c ?ã nói “<em>trai t?ng c?m báo</em>”. Kinh này nói v? m??i ngày chay, c?ng có kinh nói sáu ngày chay, nh?ng ngày này ??u tính trên l?ch âm. Ngày nay, ít ng??i còn dùng l?ch âm. Các xã h?i trên th? gi?i hi?n nay ??u thông d?ng l?ch d??ng. Ph?t nói, trong nh?ng ngày này, m?t s? qu? th?n ? tr?i ??t tu?n tra trên th? gian. M?i m?t kh?i tâm ??ng ni?m, l?i nói vi?c làm c?a chúng sanh, thi?n hay ác, qu? th?n ??u ghi l?i, ??u ?i?u tra xem xét, thu th?p ch?ng c? xác ??nh n?ng nh?. ??n lúc lâm chung, ng??i không có ph??c ??c lúc này s? ??n g?p Diêm La V??ng, l?y h? s? ??i chi?u ?? xác ??nh qu? báo n?ng nh?. Vi?c nh? th?, r?t cu?c là có th?c hay ch? là mê tín?</p>\r\n<p align="justify">      Có th?t. Th? gian chúng ta c?ng v?y. Hàng ngày c?nh sát tu?n tra, g?p ng??i ph?m t?i, li?n ?i?u tra, thu th?p ch?ng c? ph?m t?i, sau ?ó m?i xét x?. Sau khi xác ??nh t?i tr?ng, ph?i tìm ch?ng c?. Công vi?c khá khó kh?n, không d? dàng. Qu? th?n c?ng v?y, ??n tìm ki?m ch?ng c?, chúng ta không có cách nào che gi?u, l?a ???c ng??i phàm nh?ng không th? l?a g?t qu? th?n. Chúng ta ?ng d?ng khoa h?c ?? phá án, xét ?? thành th?t, nh?ng không bi?t qu? th?n không c?n dùng nh?ng thi?t b? khoa h?c k? thu?t này mà l?i tr?c ti?p t? tín hi?u làn sóng phát ra c?a con ng??i ?? k?t án. Kh?i tâm ??ng ni?m, qu? th?n ??u bi?t. Ng??i x?a t?ng nói, “<em>ba th??c trên cao có th?n minh</em>”, con ng??i ch? có th? l?a mình d?i ng??i nh?ng không l?a ???c qu? th?n.</p>\r\n<p align="justify">      Kinh Vô L??ng Th? ?ã d?y, s? chúng sanh ?  th? gi?i C?c L?c Tây ph??ng quá nhi?u, không th? tính ??m ???c. Nh?ng ng??i vãng sanh th? gi?i C?c L?c Tây Ph??ng ??u ??n t? th? gi?i m??i ph??ng ch? Ph?t, ??u tu pháp môn ni?m Ph?t mà vãng sanh. Không ch? có th? gi?i chúng ta, m??i ph??ng t?t c? th? gi?i ch? Ph?t m?i ngày vãng sanh ??n ?ó, không bi?t bao nhi?u mà k?. ??n th? gi?i C?c L?c Ph??ng Tây, ??o l?c th?n thông c?a h? h?u nh? không khác xa ??c Ph?t A Di ?à. Nh?ng ng??i ?ó có thiên nhãn, thiên nh? r?t l?i h?i. T?n h? không bi?n pháp gi?i h? ??u nhìn th?y. Kh?i tâm ??ng ni?m c?a t?t c? chúng sanh, h? ??u bi?t c? vì ??t tha tâm thông. Th?n thông c?a qu? th?n còn gi?i h?n so v?i kh? n?ng c?a A La Hán ? Tây Ph??ng. Kh? n?ng c?a A La Hán có th? bi?t ???c n?m tr?m ki?p c?a m?t con ng??i, c? th? tình tr?ng t?ng ??i t?ng ki?p. Trong khi ?ó qu? th?n ch? bi?t ???c nh?ng vi?c làm c?a chúng ta g?n ?ây kho?ng vài tháng.</p>\r\n<p align="justify">      Chúng ta mu?n vãng sanh th? gi?i C?c L?c Tây ph??ng, n?u ý ni?m không lành, hành vi không thi?n thì dù su?t ngày ni?m A Di ?à Ph?t, m??i v?n bi?n, không bao gi? gián ?o?n v?n không th? vãng sanh.</p>\r\n<p align="justify"></p>\r\n<p align="justify"></p>\r\n\r\n<div><strong>Pháp s?: HT. T?NH KHÔNG gi?ng\r\nTrích l?c t? Kinh ??a T?ng B? Tát B?n Nguy?n</strong></div>\r\n<p align="center">   <strong>Biên d?ch: Nh?o Minh c? s?</strong></p>\r\n<p align="center">   <strong>Biên t?p: PT. Giác Minh Duyên</strong></p>\r\n\r\n<div>   <strong>Gi?ng t?i T?nh tông H?c h?i Singapore, tháng 05 - 1998</strong></div>\r\n</div>', 4, NULL);
INSERT INTO `unix_sach` (`sach_id`, `tensach`, `mota`, `noidung`, `loaisach_id`, `tacgia`) VALUES
(21, 'Nuôi và dạy con đúng phương pháp nhất', '', '&nbsp;\r\n\r\nVi?c nuôi d?y tr? g?n ?ây ?ã tr? thành m?t ch? ?? r?t ph? bi?n b?i vì c?n thi?t ph?i làm rõ s? khác bi?t gi?a quá trình tr? ???c b? m? nuôi d??ng ? nhà và ???c giáo d?c ? tr??ng. M?i quan h? gi?a b? m? và tr? không gi?ng v?i m?i quan h? gi?a th?y và trò, vì v?y ph??ng pháp giáo d?c tr? ? nhà c?ng khác v?i ? tr??ng. ? tr??ng, th?y cô d?y cho tr? bi?t ??c, bi?t vi?t và d?y nh?ng ki?n th?c ph? thông, trái l?i khi ? nhà, b? m? s? d?y cho tr? nh?ng kinh nghi?m s?ng mà h? ?ã trãi nghi?m qua.\r\n<strong>VI?C NUÔI D?Y TR?</strong>\r\n\r\n&nbsp;\r\n\r\nNuôi d?y tr? là quá trình nuôi d??ng và giáo d?c tr? t? lúc còn bé ??n khi tr??ng thành.\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/bi-quyet-day-tre.jpg"><img class="alignnone size-medium wp-image-207" src="http://unix.vn/home/wp-content/uploads/2012/03/bi-quyet-day-tre-300x238.jpg" alt="" width="300" height="238" /></a>\r\n\r\nThu?t ng? “nuôi d?y tr?” b?t ngu?n t? ??ng t? “nuôi d?y”. Khi m?i ng??i nói “nuôi d?y tr?” ngh?a là làm tròn nhi?m v? c?a b?c làm b? làm m?. Nhìn chung, ph?n l?n h? ??u th?a nh?n r?ng trách nhi?m c?a h? t?o cho tr? các nhu c?u c? b?n c?n thi?t. ?ó chính là s? an toàn và phát tri?n c?a c? th?, tình c?m, trí não và tinh th?n.\r\n\r\n&nbsp;\r\n\r\n<strong>TRÁCH NHI?M C?A B? M? ??I V?I TR?</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/tap-the-thao2.jpg"><img class="alignnone size-medium wp-image-208" src="http://unix.vn/home/wp-content/uploads/2012/03/tap-the-thao2-300x194.jpg" alt="" width="300" height="194" /></a>\r\n\r\n<strong>A. Kh?e m?nh v? th? ch?t</strong>\r\n\r\n&nbsp;\r\n\r\nCh?m sóc tr? kh?e m?nh v? m?t th? ch?t t?c là ch?m sóc c? th? tr? ???c kh?e kho?n (ví d?: b?o v? tr? tr??c nguy hi?m, ch?m sóc s?c kh?e, các nhu c?u v? ?n, m?c, ch? ?) và cho tr? m?t cu?c s?ng lành m?nh.\r\n\r\n&nbsp;\r\n\r\n<strong>B. Phát tri?n th? ch?t</strong>\r\n\r\n&nbsp;\r\n\r\n- T?o ?i?u ki?n và cung c?p các ph??ng ti?n cho c? th? tr? phát tri?n kh?e m?nh b?ng vi?c t?p cho tr? ??n v?i th? thao. Bên c?nh ?ó, phát tri?n các thói quen t?t và h??ng tr? ch?i nh?ng trò ch?i có ích cho s?c kh?e.\r\n\r\n&nbsp;\r\n\r\n<strong>C. B?o v? trí não</strong>\r\n\r\n&nbsp;\r\n\r\nB?o v? trí não t?c là t?o ?i?u ki?n cho óc tr? phát tri?n. Tr? ch? có th? phát huy ???c kh? n?ng h?c t?p ch? khi ???c phát tri?n trong môi tr??ng an toàn, không b? la m?ng ho?c ?ánh ??p. Hãy ?? cho tr? th?y gia ?ình là n?i có không khí yên bình, công b?ng, không có ai b? l?n áp. T?o cho tr? m?t môi tr??ng s?ng “không có s? ?e d?a”, “không có lo âu” và nh?ng tr?n “??u võ m?m”.\r\n\r\n&nbsp;\r\n\r\n<strong>D. Phát tri?n trí não</strong>\r\n\r\n&nbsp;\r\n\r\nD?y cho tr? các qui lu?t t? nhiên và các chu?n m?c ??o ??c nh?:\r\n\r\n&nbsp;\r\n\r\n* Ch?i trò ch?i ?òi h?i tr? ph?i ??ng não và d?y tr? ??c, vi?t, làm các phép tính...\r\n\r\n&nbsp;\r\n\r\n* Nghi th?c và k? n?ng giao ti?p, cách c? x?, các chu?n m?c ??o ??c.\r\n\r\n&nbsp;\r\n\r\n* Quy t?c, cách hình thành lòng tin ? tr? và các phong t?c v?n hóa.\r\n\r\n&nbsp;\r\n\r\n<strong>E. B?o v? tinh th?n</strong>\r\n\r\n&nbsp;\r\n\r\nChe ch? tinh th?n t?c là b?o v? tinh th?n còn non y?u c?a tr?. Hãy cho tr? c?m nh?n ???c r?ng chúng ?ang s?ng trong m?t môi tr??ng êm ?m, ???c m?i ng??i quan tâm, th??ng yêu b?ng cách n?ng n?u, âu y?m, ôm ?p tr?, khuy?n khích và ??ng viên tinh th?n,…\r\n\r\n&nbsp;\r\n\r\n<strong>F. Phát tri?n c?m xúc</strong>\r\n\r\n&nbsp;\r\n\r\nT?o cho tr? có c? h?i th? hi?n s? yêu th??ng, quan tâm và giúp ?? m?i ng??i b?ng cách bi?t ch?m sóc ng??i khác, giúp ?? ông bà. Bày t? s? c?m thông và lòng tr?c ?n ??i v?i ng??i l?n, tr? nh?, nh?ng ng??i ?m ?au, b?nh t?t…\r\n\r\n&nbsp;\r\n\r\n<strong>CÁC KI?U M?U, PH??NG PHÁP, TRI?T LÝ, GIÁO D?C VÀ TH?C TI?N NUÔI D?Y TR? THEO KI?U TRUY?N TH?NG</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/day-kieu-truyen-thong.jpg"><img class="alignnone size-medium wp-image-210" src="http://unix.vn/home/wp-content/uploads/2012/03/day-kieu-truyen-thong-300x211.jpg" alt="" width="300" height="211" /></a>\r\n\r\n<em>“Mô hình lu?t giao thông”</em>\r\n\r\n&nbsp;\r\n\r\n?ây là ph??ng th?c mang tính h??ng d?n. B? m? d?y cho tr? bi?t cách c? x? nh? th? nào, t?c h? d?y tr? lu?t c? x? gi?ng nh? cách h? tuân th? lu?t giao thông. Nh?ng không ph?i t?t c? b?n tr? ??u l?ng nghe và hi?u nh?ng ?i?u b? m? chúng d?y b?o (ví d?: m?t ??a tr? ? ?? tu?i thi?u niên, b? m? ?ã b?o chúng c? nghìn l?n r?ng ?n c?p là ?i?u x?u nh?ng chúng v?n làm). Vi?c b? m? d?y tr? nh?ng ?i?u hay l? ph?i không ph?i là sai, nh?ng v?n ?? ? ?ây là h? xem vi?c giáo d?c tr? là m?t v?n ?? ??n gi?n, ch? áp d?ng ph??ng pháp thi?n c?n mà ch?a hoàn thành h?t nh?ng trách nhi?m khác c?a mình.\r\n\r\n&nbsp;\r\n\r\n<em>“Mô hình làm s?ch v??n”</em>\r\n\r\n&nbsp;\r\n\r\nB? m? th?a bi?t r?ng tính cách c?a tr? có m?t t?t c?ng có nh?ng m?t x?u nh?ng h? lúc nào c?ng mu?n lo?i b? nh?ng m?t x?u. V?n ?? t?n t?i trong ph??ng pháp giáo d?c này là b? m? ch? luôn ch? trích nh?ng l?i l?m c?a tr? h?n là ng?i khen m?i khi chúng ??t ???c thành tích gì t?t. ?ây là ph??ng pháp n?u áp d?ng c? ??i thì h? c?ng không th? g?t hái ???c thành công.\r\n\r\n&nbsp;\r\n\r\nTheo nhà tri?t h?c S.Soloveychik: “C? hai ph??ng pháp giáo d?c trên ??u r?t nguy hi?m. B?i vì n?u theo chi?u h??ng này, b? m? s? không ng?ng tranh cãi v?i tr?, t? ?ó d?n ??n m?i quan h? gi?a hai bên ngày càng x?u ?i và t?t c? nh?ng c? g?ng c?a h? trong vi?c giáo d?c tr? ??u tr? nên vô ngh?a. H?n n?a h? c?ng không bi?t t?i sao ?i?u ?ó l?i x?y ra?”\r\n\r\n&nbsp;\r\n\r\n<em>“Mô hình th??ng và ph?t”</em>\r\n\r\n&nbsp;\r\n\r\nPh??ng pháp d?y tr? này r?t ph? bi?n. D?a trên nguyên lý: b? m? s? ng?i khen ho?c th??ng cho tr? nh?ng ph?n quà n?u chúng làm t?t và ng??c l?i chúng s? b? ph?t ?òn, la m?ng ho?c khi?n trách. Ph??ng pháp này t??ng ??i d? và s? có hi?u qu? n?u ???c áp d?ng th??ng xuyên b?i vì trong ??u tr? s? hình thành t? t??ng v? s? công b?ng. Nh?ng khi th?c t? cu?c s?ng không gi?ng nh? cách tr? ???c giáo d?c thì s? làm chúng m?t ?i ni?m tin v? s? công b?ng. Theo nhà tri?t h?c S.Soloveychik: “ Ph??ng pháp này làm nguy h?i ??n t??ng lai c?a tr?. N?u m?t ng??i ???c giáo d?c theo ph??ng pháp này t? nh? ??n l?n, khi ??i m?t v?i nh?ng khó kh?n ho?c l?i l?m nghiêm tr?ng trong ??i nó s? t? ch? vào mình và h?i: T?i sao l?i là tôi?”.\r\n\r\n&nbsp;\r\n\r\n<strong>CÁC KI?U M?U, PH??NG PHÁP, TRI?T LÝ, GIÁO D?C VÀ TH?C TI?N NUÔI D?Y TR? THEO KI?U HI?N ??I</strong>\r\n\r\n<a href="http://unix.vn/home/wp-content/uploads/2012/03/tre-hoc1.jpg"><img class="alignnone size-medium wp-image-211" src="http://unix.vn/home/wp-content/uploads/2012/03/tre-hoc1-300x223.jpg" alt="" width="300" height="223" /></a>\r\n\r\nCác b?c b? m? th??ng áp d?ng mô hình “Th??ng &amp; Ph?t” ?? giáo d?c tr?, nh?ng hi?n nay theo các chuyên gia nghiên c?u quá trình phát tri?n ? tr? ??u cho r?ng giáo d?c này không ph?i là ph??ng pháp mang l?i hi?u qu? cao. ? m?t s? qu?c gia ?ã có lu?t nghiêm c?m vi?c s? d?ng các hình th?c nh? dùng roi ?ánh tr? m?i khi chúng ph?m l?i. Thay vào ?ó, h? s? áp d?ng m?t s? ph??ng pháp khác nh? ?? tr? có th?i gian t? suy ng?m, ki?m soát hành vi, cách c? x? c?a tr?…\r\n\r\n&nbsp;\r\n\r\n<strong>M?t s? ví d? v? mô hình giáo d?c tr? theo ph??ng pháp hi?n ??i:</strong>\r\n\r\n&nbsp;\r\n\r\n- Khuy?n khích s? tò mò c?a tr?: ?ây là mô hình gia ?ình mà tr? em ???c khuy?n khích khám phá môi tr??ng xung quanh cùng v?i s? theo dõi và h??ng d?n c?a b? m?.\r\n\r\n&nbsp;\r\n\r\n- Ng??i cha nghiêm kh?c: Mô hình này ??t n?ng v?n ?? k? lu?t nh? là ph??ng ti?n ?? t?n t?i và phát tri?n trong m?t th? gi?i kh?c nghi?t.\r\n\r\n&nbsp;\r\n\r\n- Giáo d?c theo cách m?m m?ng: Mô hình này ch? y?u là t?o m?i quan h? tình c?m g?n bó, tránh s? d?ng roi ?òn ??i v?i tr?. Tìm hi?u ?? bi?t thêm v? các nhu c?u tình c?m ? tr?.\r\n\r\n&nbsp;\r\n\r\n- Ch?m sóc tr? th?t c?n th?n: Nh?ng b?c b? m? áp d?ng ph??ng pháp này ??u nh?n th?y r?ng khen ng?i làm cho tr? b? lôi cu?n còn ?òn roi ch? có h?i thêm cho tr? mà thôi, và vì v?y mà h? tìm nh?ng cách th?c giáo d?c khác ?? có th? ??t ???c s? hòa h?p v?i tr?.\r\n\r\n&nbsp;\r\n\r\n- Tri?t lý “giáo d?c tr? dành cho t?t c? m?i ng??i”: D?a trên quan ?i?m ??o ??c, tri?t lý này cho r?ng vi?c nuôi d?y tr? là quá trình phân tích các ?i?u ki?n và ph??ng ti?n ?? nuôi d?y tr?. B? m? s? g?t hái ???c thành công trong quá trình này n?u nh? h? có tìm hi?u th? gi?i n?i tâm c?a tr? nh? tìm hi?u c?m nh?n, s? hi?u bi?t và tinh th?n c?a tr?. Ý ni?m trái tim ng? ý c?m nh?n ???c yêu th??ng và kh? n?ng giúp ?? m?i ng??i c?a tr?. Ý ni?m s? hi?u bi?t ng? ý ch? cách tr? c? x? và ý ni?m tinh th?n ng? ý khát v?ng ???c làm nh?ng ?i?u t?t, tránh nh?ng hành ??ng c? x? không ph?i phép và không l?n áp m?i ng??i. Y?u t? c?t lõi c?a tri?t lý này là ý ni?m v? t? ch?t, ý th?c v? giá tr? và s? công b?ng.\r\n\r\n<span style="font-family: Arial, sans-serif;font-size: xx-small">\r\n</span>', 4, NULL),
(22, 'Quà tặng cuộc sống: Điều gì đến sẽ đến', '', 'http://www.youtube.com/watch?v=sKCiOJRs12A', 1, NULL),
(23, 'Những điều không nên nói với con', '', '1. “N?u con không d?ng l?i, m? s? ?? con l?i m?t mình"\r\n\r\n?ành r?ng cha m? nói ra ?i?u này không nh?m ?e d?a tr? mà ch? mu?n tr? hành ??ng theo ý mình.\r\n\r\nTuy nhiên, câu nói có th? làm tr? s? và ngh? r?ng cha m? không yêu mình. Thay vì cách nói trên, cha m? có th? ch?n thái ?? nh? nhàng h?n: “M? ?ang r?t v?i. M? cho con ch?i n?t l?n này n?a. Sau ?ó chúng ta ph?i v?. N?u con không nghe l?i, l?n sau m? không cho con ??n ?ây n?a”.\r\n\r\n2. “M? c?m th?y x?u h? vì con”\r\n\r\nCha m? nói câu này vì mu?n t?o ra m?t tâm tr?ng ?n n?n, h?i h?n ? tr? v?i ni?m tin r?ng: “N?u c?m th?y x?u h? và có c?m giác t?i l?i, tr? s? thay ??i hành vi”.\r\n\r\nTuy nhiên, cha m? l?p ?i l?p l?i câu nói này s? khi?n tr? t? ti vì mình làm cái gì c?ng sai, c?ng ?? cha m? phi?n lòng. Tr? không còn tin vào n?ng l?c b?n thân tr??c khi làm b?t c? vi?c gì. N?u cha m? không mu?n con d?n m?t t? tin, ??ng nên dùng câu nói trên.\r\n<p align="center"></p>\r\n3. “M? không mu?n có con”\r\n\r\n“M? ??c không bao gi? có con”, “N?u ???c làm l?i m?t l?n n?a, m? s? không bao gi? sinh con ra” là nh?ng cách nói n?ng n? nh?t ??i v?i nh?ng ??a tr? - b?t k? b?n nói v?i chúng b?ng thái ?? nào, gi?ng nói nào.\r\n\r\nL?i nói c?a b?n có th? làm t?n th??ng tâm h?n ngây th? c?a tr? m?t cách nghiêm tr?ng. Chúng s? không hi?u r?ng b?n b?c t?c nên m?i nói th?, chúng s? cho r?ng b?n không h? yêu chúng, có chúng là ngoài mong mu?n c?a b?n. ?i?u ?ó không ch? làm cho b?n và con ngày càng xa nhau mà còn khi?n con luôn t? ti, không ý th?c ???c giá tr? c?a mình khi ???c sinh ra trên ??i.\r\n\r\n4. “Cha m? ly hôn vì con ??y!”\r\n\r\nKhông bao gi? con cái l?i là lý do ?? cha m? chia tay. ??ng d?n gánh n?ng tâm lý lên con. Cha m? chia tay ?ã là m?t n?i bu?n, n?i m?t mát con cái ph?i gánh ch?u. Khi con yêu c?u b?n gi?i thích cho chúng lý do vì sao cha m? chia tay, n?u con ch?a ?? l?n ??n hi?u ???c lý do, hãy n? chúng m?t l?i gi?i thích. ??ng vì tr? l?i cho xong mà nói r?ng “con là lý do khi?n cha m? chia tay”. B?i nh? th?, con b?n s? luôn ?n n?n, h?i l?i: “N?u mình khác ?i, n?u mình ngoan h?n, cha m? ?ã không chia tay”. C?m giác t?i l?i làm gia ?ình ly tán s? là m?t v?t th??ng tr? mang theo su?t ??i.\r\n\r\n5. “?? m? làm cho”\r\n\r\nCó ?ôi khi “?? ?ó m? làm cho”, “cái ?ó con không làm ???c ?âu” là câu c?a mi?ng c?a cha m?. Nh?ng câu nói này không th? khuy?n khích con tính t? l?p. Lâu d?n thành thói quen, tr? s? ? l?i vào ng??i khác, t? ti v? b?n thân mình. B?n có th? làm h? con 1-2 l?n, nh?ng n?u sang l?n th? 3 thì b?n ?ã hình thành cho ??a tr? m?t thói quen nh? c?y ng??i khác r?i ??y.\r\n\r\n6. “Lý do ?? ??n gi?n vì m? nói nh? th?!”\r\n\r\nCâu nói trên v?i m?t thông ?i?p ng?m nh?ng hoàn toàn rõ r?ng: “M? là ng??i có quy?n ra l?nh, còn con có ngh?a v? ph?i nghe theo”.\r\n\r\nRa l?nh ki?u nh? v?y, b?n ch? b?t tr? ph?c tùng m?t cách mi?n c??ng ch? không tâm ph?c kh?u ph?c. Tr? s? c?m th?y thi?u công b?ng, th?y cha m? quá ??c ?oán và không tôn tr?ng con.', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `be_acl_permissions`
--
ALTER TABLE `be_acl_permissions`
  ADD CONSTRAINT `be_acl_permissions_ibfk_1` FOREIGN KEY (`aro_id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permissions_ibfk_2` FOREIGN KEY (`aco_id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `be_acl_permission_actions`
--
ALTER TABLE `be_acl_permission_actions`
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `be_acl_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_acl_permission_actions_ibfk_2` FOREIGN KEY (`axo_id`) REFERENCES `be_acl_actions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `be_groups`
--
ALTER TABLE `be_groups`
  ADD CONSTRAINT `be_groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `be_resources`
--
ALTER TABLE `be_resources`
  ADD CONSTRAINT `be_resources_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `be_users`
--
ALTER TABLE `be_users`
  ADD CONSTRAINT `be_users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `be_acl_groups` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
