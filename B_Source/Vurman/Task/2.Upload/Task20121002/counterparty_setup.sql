-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2012 at 07:58 PM
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
-- Table structure for table `counterparty_setup`
--

CREATE TABLE IF NOT EXISTS `counterparty_setup` (
  `id` int(11) NOT NULL,
  `counterparty_id` int(11) NOT NULL,
  `counterparty_name` text NOT NULL,
  `bic_counterparty` varchar(11) NOT NULL,
  `custodian_id` int(11) NOT NULL,
  `custodian_name` text NOT NULL,
  `bic_custodian` varchar(11) NOT NULL,
  `counterparty_ac_custodian` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
