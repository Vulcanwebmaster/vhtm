-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2012 at 11:42 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat-noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_products`
--

CREATE TABLE IF NOT EXISTS `n_tn_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `product_image2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_date_create` datetime DEFAULT NULL,
  `product_date_edit` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `is_new` int(1) DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhphan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `care` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_ma` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_tn_products`
--

INSERT INTO `n_tn_products` (`product_id`, `product_name`, `alias`, `product_price`, `product_image`, `product_image2`, `product_date_create`, `product_date_edit`, `category_id`, `is_new`, `mota`, `thanhphan`, `care`, `product_ma`, `size`) VALUES
(2, 'gối', 'goi', '200.000', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_1_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '2012-10-08 00:00:00', '2012-11-22 00:00:00', 6, 1, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' Không giặt tẩy</br>\nKhông giặt tẩy</br>\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in '),
(3, 'Bộ gối đẹp', 'bo-goi-dep', '500.000.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/0887000999_1_1_2.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '<p>\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5958000700_2_1_2.jpg" style="width: 1000px; height: 1000px;" /></p>\n', '2012-10-23 15:14:31', '2012-11-22 00:00:00', 6, 1, 'Fiber cushion filling.', '35% POLYPROPYLENE', ' Không giặt tẩy\nKhông giặt tẩy\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in '),
(4, 'Giường nguyên bộ', 'giuong-nguyen-bo', '25.000.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/0916000802_1_1_5.jpg" style="width: 1000px; height: 1000px;" /></p>\r\n', '', '2012-11-20 17:25:48', '2012-11-22 00:00:00', 11, 1, 'Fiber cushion filling.', '58% POLYESTER, 4% COTTON, 34% ACETATE, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(5, 'Chăn bông', 'chan-bong', '500.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/100324_07_Chanbongthiennhien.JPG" style="width: 680px; height: 485px;" /></p>\r\n', '', '2012-11-20 17:32:30', '2012-11-22 00:00:00', 12, 0, 'Fiber cushion filling.', '90% POLYESTER, 4% COTTON, 34% ACETATE, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(6, 'gối hoa', 'goi-hoa', '35.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/5846000999_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:34:08', '2012-11-22 00:00:00', 8, 0, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(7, ' lõi gối', 'loi-goi', '44.000', '<p>\r\n	<img alt="" src="/tuongnhat-noithat/assets/tuongnhatp2/images/images/1826007307_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:34:52', '2012-11-22 00:00:00', 8, 1, 'Fiber cushion filling.', '100% POLYPROPYLENE', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(8, 'Lõi gối hàn quốc', 'loi-goi-han-quoc', '70.000', '<p>\r\n	<img alt="" src="/tuongnhatp2/assets/tuongnhatp2/images/images/1826007307_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:35:37', NULL, 8, 1, 'Fiber cushion filling.', '58% POLYESTER, 70% COTTON,E, 4% NYLON', ' MACHINE WASH MAX 40ºC SHORT SPIN\nKhông giặt tẩy\nKhông giặt tẩy ', 'KT912-M1', '12 x 19,5 in '),
(9, 'Gối caro', 'goi-caro', '75.000', '<p>\r\n	<img alt="" src="/tuongnhatp2/assets/tuongnhatp2/images/images/5996000999_1_1_3.jpg" style="width: 350px; height: 350px;" /></p>\r\n', '', '2012-11-20 17:36:22', NULL, 0, 0, 'Fiber cushion filling.', '11% POLYPROPYLENE', ' Không giặt tẩy\nKhông giặt tẩy\nGiặt với PERCHLOROETHYLENE ', 'KT912-M1', '12 x 19,5 in ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
