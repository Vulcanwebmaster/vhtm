-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2012 at 06:57 AM
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
-- Table structure for table `n_tuvansanpham`
--

CREATE TABLE IF NOT EXISTS `n_tuvansanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_menu_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tuvansanpham`
--

INSERT INTO `n_tuvansanpham` (`id`, `sub_menu_title`, `title`, `content`) VALUES
(1, 'TƯ VẤN MUA XE', 'Hyundai Eon: Nếu bạn chỉ cần che nắng che mưa á a', '<p>\r\n	Hyundai Eon: Nếu bạn chỉ cần &quot;che nắng, che mưa&quot; Mục ti&ecirc;u l&agrave; kh&aacute;ch h&agrave;ng cần một chiếc xe nhỏ, thuận tiện để di chuyển trong phố với c&aacute;c chức năng đơn giản v&agrave; tiết kiệm nhi&ecirc;n liệu. Hyundai Eon l&agrave; chiếc xe như vậy? Ch&uacute;ng ta từng biết đến những mẫu xe nhỏ gọn được tạo ra với mục đ&iacute;ch tiện lợi để di chuyển trong nội th&agrave;nh v&agrave; ở Việt Nam c&oacute; kh&ocirc;ng &iacute;t những ứng cử vi&ecirc;n s&aacute;ng gi&aacute;, c&oacute; doanh số b&aacute;n h&agrave;ng cao như Chevrolet Spark (trước kia l&agrave; Daewoo Matiz), Kia với New Morning hay Huyndai c&oacute; i10 v&agrave; i20. Thế nhưng c&ograve;n một ph&acirc;n cấp xe nhỏ hơn m&agrave; vốn mới chỉ c&oacute; c&aacute;c h&atilde;ng xe đến từ Trung Quốc tấn c&ocirc;ng đến những người c&oacute; thu nhập thấp, c&oacute; cơ hội tiếp cận với &ocirc; t&ocirc; như Chery đang được li&ecirc;n doanh &ocirc; t&ocirc; H&ograve;a B&igrave;nh ph&acirc;n phối c&oacute; gi&aacute; b&aacute;n khoảng 200 triệu đồng, BYD F0 với kiểu d&aacute;ng kh&ocirc;ng kh&aacute;c g&igrave; Toyota Aygo c&oacute; mức gi&aacute; khoảng 250 triệu đồng.</p>\r\n'),
(5, 'Tư vấn mua xe', 'Với ngân sách chưa tới 400', '<p>\r\n	<span style="font-size: medium;"><span style="font-family: times new roman;"><strong>(VTC News) - Với ng&acirc;n s&aacute;ch chưa tới 400 triệu đồng v&agrave; mong muốn t&igrave;m một chiếc xe tiết kiệm nhi&ecirc;n liệu, người ti&ecirc;u d&ugrave;ng Việt sẽ chọn g&igrave; trong bộ ba xe nhỏ đến từ H&agrave;n Quốc Kia Morning, Chevrolet Spark v&agrave; mẫu xe sắp ra mắt Hyundai Eon.</strong></span></span></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
