-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2012 at 04:43 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_doitac`
--

CREATE TABLE IF NOT EXISTS `n_tn_doitac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `hinhanh` text COLLATE utf8_unicode_ci,
  `loaidoitac` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `n_tn_doitac`
--

INSERT INTO `n_tn_doitac` (`id`, `ten`, `website`, `diachi`, `dienthoai`, `fax`, `email`, `hinhanh`, `loaidoitac`) VALUES
(1, 'Microsoft Việt Nam', 'http://microsoft.com/vietnam', 'Tầng 16, Tòa nhà Capital Tower  109 Trần Hưng Đạo, Hà Nội, Việt Na', '+844-926-300', '+844-826-1222-222', 'msviet@microsoft.com', '<p>\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/se-khong-co-dien-thoai-di-dong-cua-microsoft_1.jpg" style="width: 360px; height: 288px; " /></p>\n', 'Thương mại bakery'),
(2, 'Apple', 'http://www.niw.com.vn/', 'Hà nội', '0987384249', '123456789', 'tiendn1010@gmail.com', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/Apple-icon.png" style="width: 512px; height: 512px; " /></p>\r\n', 'Du học'),
(3, 'Dell', 'http://www.niw.com.vn/', 'Hà nội', '0987384249', '0987654321', 'tiendn1010@gmail.com', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/aPqC1325645125_1312619479_Logo_Dell.jpg" style="width: 1024px; height: 768px; " /></p>\r\n', 'Du học'),
(4, 'Acer', 'http://www.niw.com.vn/', 'Hà nội', '0987384249', '', 'tiendn1010@gmail.com', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/acer.gif" style="width: 350px; height: 350px; " /></p>\r\n', 'Thương mại bakery'),
(5, 'Asus', 'http://www.niw.com.vn/', 'Hà nội', '0987384249', '', 'tiendn1010@gmail.com', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/asus_logo.jpg" style="width: 400px; height: 320px; " /></p>\r\n', 'Thương mại thời trang'),
(9, 'Công ty cổ phần Unix', 'http://www.niw.com.vn/', 'Tòa nhà CT5B - Mễ Trì Thượng - Từ Liêm - Hà Nội', '(+84) 85898964', '', 'support@niw.com.vn', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/Unix.png" style="width: 150px; height: 65px; " /></p>\r\n', 'Thương mại thời trang'),
(10, 'NIW', 'http://niw.com.vn/', ' Flemington Tower, 182 Lê Đại Hành, Phường 15, Quận 11, Thành phố Hồ Chí Minh', '1900 561 558', ' (84 8)3832 8425', 'ZingNews@vng.com.vn', '<p>\r\n	<img alt="" src="/tuongnhat/assets/tuongnhat/avatar/images/Partners/NIW.png" style="width: 120px; height: 92px; " /></p>\r\n', 'Thương mại bakery');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
