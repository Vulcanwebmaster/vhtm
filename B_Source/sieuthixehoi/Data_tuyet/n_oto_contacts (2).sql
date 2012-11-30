-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 05:27 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sieuthixehoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_oto_contacts`
--

CREATE TABLE IF NOT EXISTS `n_oto_contacts` (
  `contact_id` int(12) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(12) NOT NULL,
  `contact_subject` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_message` varchar(123) COLLATE utf8_unicode_ci NOT NULL,
  `contact_date_create` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_oto_contacts`
--

INSERT INTO `n_oto_contacts` (`contact_id`, `contact_name`, `contact_email`, `category_id`, `contact_subject`, `contact_message`, `contact_date_create`) VALUES
(3, 'tuyt', 'ha@gmail.com', 1, 'sdfsd', 'dsfsdfsd', '2012-11-14 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
