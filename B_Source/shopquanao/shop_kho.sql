-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2012 at 06:29 PM
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
-- Table structure for table `shop_kho`
--

CREATE TABLE IF NOT EXISTS `shop_kho` (
  `kho_id` int(10) NOT NULL AUTO_INCREMENT,
  `kho_name` varchar(45) NOT NULL,
  `kho_code` varchar(30) NOT NULL,
  PRIMARY KEY (`kho_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop_kho`
--

INSERT INTO `shop_kho` (`kho_id`, `kho_name`, `kho_code`) VALUES
(1, 'Kho A', 'K1'),
(2, 'Kho B', 'K2'),
(3, 'Kho C', 'K3'),
(4, 'Kho D', 'K4');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `shop_sanphamkho`
--

INSERT INTO `shop_sanphamkho` (`sanphamkho_id`, `kho_id`, `id`, `total`) VALUES
(1, 3, 1, 4),
(2, 2, 9, 5),
(3, 4, 3, 3),
(4, 1, 10, 6),
(5, 1, 3, 3),
(6, 1, 5, 2),
(7, 2, 1, 5),
(8, 3, 5, 2),
(9, 2, 11, 1);
