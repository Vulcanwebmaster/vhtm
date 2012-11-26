-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 06:53 PM
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
-- Table structure for table `n_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaythang` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_lienhe`
--

INSERT INTO `n_lienhe` (`id`, `hoten`, `email`, `dienthoai`, `tieude`, `noidung`, `ngaythang`) VALUES
(3, 'Tuyết', 'tuyet123@gmail.com', '0123456789', 'Hơi bị đẹp nhá', 'hihi', '2012-11-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
