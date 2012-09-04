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
-- Table structure for table `n_tn_gioithieu`
--

CREATE TABLE IF NOT EXISTS `n_tn_gioithieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci,
  `noidung` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_tn_gioithieu`
--

INSERT INTO `n_tn_gioithieu` (`id`, `tieude`, `noidung`) VALUES
(1, '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 22pt; line-height: 23pt; text-align: left; ">Đan Trường th&oacute;t tim v&igrave; m&aacute;y bay bị nghi khủng bố, ha ha ha</span></p>\r\n', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 15pt; text-align: justify; ">Theo đ&uacute;ng lịch tr&igrave;nh,&nbsp;</span><a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="đan-trường" style="font-family: ''Times New Roman'', Times, serif; font-size: 12.2pt; line-height: 15pt; text-align: justify; margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; " title="Thảo luận cộng đồng">Đan Trường</a><span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 15pt; text-align: justify; ">&nbsp;sẽ c&ugrave;ng quản l&yacute; của m&igrave;nh l&agrave; &ocirc;ng bầu&nbsp;</span><a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="hoàng-tuấn" style="font-family: ''Times New Roman'', Times, serif; font-size: 12.2pt; line-height: 15pt; text-align: justify; margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; " title="Thảo luận cộng đồng">Ho&agrave;ng Tuấn</a><span style="color: rgb(51, 51, 51); font-family: ''Times New Roman'', Times, serif; font-size: 16px; line-height: 15pt; text-align: justify; ">&nbsp;c&oacute; mặt tại Mỹ v&agrave;o ng&agrave;y 24/8. Ngay sau đ&oacute;, họ đ&aacute;p chuyến bay từ Los Angeles đi St.Louis để ng&agrave;y 25/8 c&oacute; mặt biểu diễn tại casino Harad St. Louis.</span></p>\r\n<p class="pBody" style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; color: rgb(51, 51, 51); line-height: 15pt; font-family: ''Times New Roman'', Times, serif; text-align: justify; ">\r\n	Tuy nhi&ecirc;n, khi&nbsp;<a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="đan-trường" style="margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; font-size: 12.2pt; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; background-position: initial initial; background-repeat: initial initial; " title="Thảo luận cộng đồng">Đan Trường</a>&nbsp;c&ugrave;ng &ocirc;ng bầu v&agrave; rất nhiều h&agrave;nh kh&aacute;ch kh&aacute;c đ&atilde; ổn định chỗ ngồi tr&ecirc;n chuyến bay SW 1310 của h&atilde;ng Southwest Airlines v&agrave; chờ m&aacute;y bay cất c&aacute;nh th&igrave; nhận được th&ocirc;ng b&aacute;o tạm thời kh&ocirc;ng thể bay v&igrave; l&yacute; do an ninh. Hơn 1 tiếng đồng hồ ngồi tr&ecirc;n m&aacute;y bay chờ đợi, cuối c&ugrave;ng anh Bo th&oacute;t tim khi nhận được th&ocirc;ng b&aacute;o l&agrave; chuyến bay tạm hủy do cơ quan an ninh Mỹ nghi c&oacute;<a class="zinglive_highlight" href="http://news.zing.vn/sao-viet/dan-truong-thot-tim-vi-may-bay-bi-nghi-khung-bo/a269926.html#" rel="khủng-bố" style="margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: dashed; border-bottom-color: rgb(177, 177, 177); outline: 0px; font-size: 12.2pt; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; background-position: initial initial; background-repeat: initial initial; " title="Thảo luận cộng đồng">khủng bố</a>&nbsp;sử dụng chất nổ.</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
