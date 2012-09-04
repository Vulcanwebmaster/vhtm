-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 05:06 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat_duhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_tn_lienhe` (
  `id` int(11) DEFAULT NULL,
  `ten` text COLLATE utf8_unicode_ci,
  `diachi` text COLLATE utf8_unicode_ci,
  `telephone` text COLLATE utf8_unicode_ci,
  `mobile` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_tn_lienhe`
--

INSERT INTO `n_tn_lienhe` (`id`, `ten`, `diachi`, `telephone`, `mobile`, `fax`, `email`, `website`) VALUES
(1, 'Kensington College of Business', '34 Hồng Phúc, Quận Ba Đình Hà Nội, Vietnam', '(+844) 85868119', '(+84) 0983721368', '(+844) 38284948', 'Lien@kensingtoncoll.ac.uk', 'www.kensingtoncoll.ac.uk/vietnam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
