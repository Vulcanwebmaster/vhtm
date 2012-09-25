-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2012 at 09:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unc`
--

-- --------------------------------------------------------

--
-- Table structure for table `unc_ads`
--

CREATE TABLE IF NOT EXISTS `unc_ads` (
  `ads_id` int(5) NOT NULL AUTO_INCREMENT,
  `ads_banner` varchar(500) NOT NULL DEFAULT '',
  `ads_position` varchar(60) NOT NULL DEFAULT '',
  `ads_name` varchar(100) NOT NULL DEFAULT '',
  `ads_link` varchar(200) NOT NULL DEFAULT '',
  `ads_start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ads_end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unc_category`
--

CREATE TABLE IF NOT EXISTS `unc_category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL DEFAULT '',
  `category_parent_id` int(5) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unc_manage_category`
--

CREATE TABLE IF NOT EXISTS `unc_manage_category` (
  `user_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unc_news`
--

CREATE TABLE IF NOT EXISTS `unc_news` (
  `news_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_summary` text NOT NULL,
  `news_content` longtext NOT NULL,
  `news_author` varchar(100) NOT NULL DEFAULT '',
  `news_post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_status` varchar(20) NOT NULL DEFAULT 'private',
  `category_id` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unc_user`
--

CREATE TABLE IF NOT EXISTS `unc_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_fullname` varchar(100) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_address` varchar(200) NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `role_id` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  KEY `user_login_key` (`user_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
