-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2012 at 07:57 PM
-- Server version: 5.0.95
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web1244_gajendra`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_setup`
--

CREATE TABLE IF NOT EXISTS `user_setup` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `login_id` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `gender` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `department` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `cell` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `active` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
