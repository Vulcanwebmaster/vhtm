-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2012 at 11:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `istockgold`
--

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
