-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2012 at 10:41 AM
-- Server version: 5.0.96
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
-- Table structure for table `trading_execution`
--

CREATE TABLE IF NOT EXISTS `trading_execution` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `reference` varchar(11) NOT NULL,
  `client_name` text NOT NULL,
  `isin` varchar(16) NOT NULL,
  `currency` text NOT NULL,
  `fund_name` text NOT NULL,
  `unknown_isin` varchar(16) NOT NULL,
  `quantity` decimal(8,3) NOT NULL,
  `custody_ac` varchar(25) NOT NULL,
  `trade_date` date NOT NULL,
  `value_date` date NOT NULL,
  `remarks_vurman` varchar(100) NOT NULL,
  `trade_remarks` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
