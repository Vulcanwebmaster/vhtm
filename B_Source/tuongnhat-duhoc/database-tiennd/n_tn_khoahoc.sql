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
-- Table structure for table `n_tn_khoahoc`
--

CREATE TABLE IF NOT EXISTS `n_tn_khoahoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaikhoahoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `hocphi` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `n_tn_khoahoc`
--

INSERT INTO `n_tn_khoahoc` (`id`, `ten`, `loaikhoahoc`, `noidung`, `hocphi`) VALUES
(9, 'BA (Hons) Marketing - 2 năm', 'Đại học (Undergraduate Courses)', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 20px; text-align: justify; ">Sau đ&ecirc;m diễn n&agrave;y ở St. Louis,&nbsp;</span><a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="đan-trường" style="margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; font-size: 16px; color: rgb(0, 0, 0); text-decoration: none; font-family: ''Times New Roman'', Times, serif; line-height: 20px; text-align: justify; " title="Thảo luận cộng đồng">Đan Trường</a><span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 20px; text-align: justify; ">&nbsp;tiếp tục biểu diễn tại Quận Cam &ndash; nơi tập trung rất đ&ocirc;ng người Việt sinh sống &ndash; v&agrave;o ng&agrave;y 26/8. Sau đ&oacute;, anh l&ecirc;n đường sang Canada&nbsp;</span><a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="lưu-diễn" style="margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; font-size: 16px; color: rgb(0, 0, 0); text-decoration: none; font-family: ''Times New Roman'', Times, serif; line-height: 20px; text-align: justify; " title="Thảo luận cộng đồng">lưu diễn</a><span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 20px; text-align: justify; ">&nbsp;từ ng&agrave;y 31/8 &ndash; 2/9. Điểm dừng ch&acirc;n của anh Bo trong thời gian n&agrave;y l&agrave; c&aacute;c th&agrave;nh phố Vancouver, Edmonton v&agrave; Calgary.</span></p>\r\n', '10.000.000 VND'),
(12, 'BA - Marketing - 3 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(13, 'BA - Kế toán doanh nghiệp và tài chính - 2 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(14, 'BA (Hons) Quản trị kinh doanh - 3 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(15, ' BA (Hons) Quản lý thông tin - 2 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(16, 'BA (Hons)Quản lý thông tin - 3 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(17, 'BA - Kế toán doanh nghiệp và tài chính - 3 năm', 'Đại học (Undergraduate Courses)', '', '10.000.000 VND'),
(18, 'MBA - Quản lý bảo mật', 'Sau đại học (Postgraduate Courses)', '', '10.000.000 VND'),
(19, 'Tổng quát MBA', 'Sau đại học (Postgraduate Courses)', '', '10.000.000 VND');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
