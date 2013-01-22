-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2013 at 03:47 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flash_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_fg_accounts`
--

CREATE TABLE IF NOT EXISTS `n_fg_accounts` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `authen_key` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `coin` int(11) NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_fg_accounts`
--

INSERT INTO `n_fg_accounts` (`id`, `username`, `password`, `email`, `gender`, `status`, `authen_key`, `coin`, `city`, `country`, `fullname`) VALUES
(1, 'tuyetyeuthuong', '123456', 'asdas', '', 1, 'xYcX53pL', 3, '', 'vietnam', ''),
(2, 'sdsds', 'sdsds', 'sdsd', '', 1, 'sdfghjkl', 0, '', '', ''),
(3, 'meme', '123', 'tuyetapt@gmail.com', '', 0, '', 0, '', '', ''),
(4, 'admin@gmail.com', 'admin', '', '', 0, '', 0, '', '', ''),
(5, 'admin@gmail.com', '1', 'sdsdsetapt@gmail.com', '', 0, '', 0, '', '', ''),
(6, 'trungoco7n', 'trunghang', 'trungnt20290@gmail.com', 'Male', 1, '1234Xyz', 100, 'Bắc Giang', 'Việt Nam', 'Nguyễn Thành Trung'),
(7, 'thuhango7n', 'trunghang', 'thuhango7n@gmail.com', '', 0, '', 0, '', '', ''),
(8, 'trungoc', 'trungoc', '0', '0', 0, '', 0, '0', '0', '0'),
(9, 'trung', 'trung', 'thuykt4k3@yahoo.com', '', 0, '', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
