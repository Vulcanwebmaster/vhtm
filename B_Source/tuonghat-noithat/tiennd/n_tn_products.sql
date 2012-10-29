-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2012 at 01:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhatp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_products`
--

CREATE TABLE IF NOT EXISTS `n_tn_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` varchar(30) DEFAULT NULL,
  `product_image` text,
  `product_date_create` datetime DEFAULT NULL,
  `product_date_edit` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_tn_products`
--

INSERT INTO `n_tn_products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_date_create`, `product_date_edit`, `category_id`) VALUES
(2, '2', '2', '<p>\r\n	100111</p>\r\n', '2012-10-08 00:00:00', '2012-10-23 18:18:31', 4),
(3, 'ten san pham', 'gia', '<p>\r\n	<img alt="" src="/tuongnhatp2/assets/tuongnhatp2/images/images/Untitled.jpg" style="width: 502px; height: 517px; " /></p>\r\n', '2012-10-23 15:14:31', '2012-10-23 18:18:26', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
