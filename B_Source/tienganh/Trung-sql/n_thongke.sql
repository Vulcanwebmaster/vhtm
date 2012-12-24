-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2012 at 05:59 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trungtamtienganh`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_thongke`
--

CREATE TABLE IF NOT EXISTS `n_thongke` (
  `ngaythang` date NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_thongke`
--

INSERT INTO `n_thongke` (`ngaythang`, `soluong`) VALUES
('2012-10-12', 4),
('2012-10-13', 15),
('2012-10-19', 2),
('2012-10-20', 1),
('2012-10-27', 1),
('2012-10-29', 2),
('2012-10-30', 1),
('2012-11-02', 1),
('2012-11-07', 1),
('2012-11-09', 1),
('2012-11-10', 12),
('2012-11-11', 4),
('2012-11-12', 9),
('2012-11-14', 1),
('2012-11-15', 8),
('2012-11-16', 1),
('2012-11-17', 6),
('2012-11-18', 2),
('2012-11-19', 1),
('2012-11-20', 8),
('2012-11-21', 2),
('2012-11-23', 6),
('2012-11-24', 3),
('2012-11-26', 3),
('2012-11-27', 6),
('2012-11-28', 10),
('2012-11-29', 5),
('2012-11-30', 2),
('2012-12-01', 1),
('2012-12-04', 2),
('2012-12-21', 1),
('2012-12-22', 4),
('2012-12-24', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
