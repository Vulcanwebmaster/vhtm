-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2012 at 07:23 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `5sao`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_baohanh`
--

CREATE TABLE IF NOT EXISTS `n_baohanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung_v` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung_e` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_baohanh`
--

INSERT INTO `n_baohanh` (`id`, `noidung_v`, `noidung_e`) VALUES
(1, '<p>\r\n	<strong style="font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-size: 14px; "><span style="background-color:#ffffff;">CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH SỬA CHỮA THIẾT BỊ</span></strong><br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">11:02:00 |</span></font><span style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; "><span style="background-color:#ffffff;">&nbsp;</span></span><font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">(16/04/2012)</span></font><br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">Trong thời gian sử dụng thiết bị nếu gặp bất kỳ trục trặc kỹ thuật n&agrave;o q&uacute;y kh&aacute;ch h&agrave;ng c&oacute; thể li&ecirc;n lạc trực tiếp với C&ocirc;ng ty để được trợ gi&uacute;p.&nbsp;</span></font></p>\r\n<p>\r\n	<br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n		<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color:#ffffff;">I/ Những trường hợp phù hợp qui định bảo h&agrave;nh miễn ph&iacute; :</span></strong></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">Bảo h&agrave;nh sản phẩm l&agrave;: khắc phục những lỗi hỏng h&oacute;c, sự cố kỹ thuật xảy ra do lỗi của nh&agrave; sản xuất</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Sản phẩm c&ograve;n trong thời hạn bảo h&agrave;nh được t&iacute;nh kể từ ng&agrave;y giao h&agrave;ng hoặc được ghi tr&ecirc;n Phi&ecirc;́u Bảo hành</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- C&oacute; H&oacute;a đơn mua h&agrave;ng hoặc bi&ecirc;n bản b&agrave;n giao thiết bị của c&ocirc;ng ty.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">Sản ph&acirc;̉m bảo hành sẽ tu&acirc;n theo qui định bảo hành của nhà sản xuất đối với c&aacute;c sự cố về mặt kỹ thuật</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color:#ffffff;">II/ Những trường hợp kh&ocirc;ng được bảo h&agrave;nh:</span></strong></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Sản phẩm đ&atilde; qu&aacute; thời hạn bảo h&agrave;nh.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Những sản phẩm kh&ocirc;ng thể x&aacute;c định được nguồn gốc mua tại c&ocirc;ng ty th&igrave; C&ocirc;ng ty c&oacute; quyền từ chối bảo h&agrave;nh.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Mất h&oacute;a đơn hoặc bi&ecirc;n bản b&agrave;n giao.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Tem ni&ecirc;m phong bảo h&agrave;nh bị r&aacute;ch, vỡ, hoặc bị sửa đ&ocirc;̉i</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Sản phẩm bị hư hỏng do sử dụng kh&ocirc;ng đúng hướng d&acirc;̃n sử dụng</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Sản ph&acirc;̉m bị hư hỏng do t&aacute;c động cơ học l&agrave;m rơi, vỡ, va đập, trầy xước, m&oacute;p m&eacute;o, ẩm ướt, hoen rỉ, chảy nước</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Sản phẩm c&oacute; dấu hiệu hư hỏng do chuột bọ hoặc c&ocirc;n tr&ugrave;ng x&acirc;m nhập hoặc do hỏa hoạn, thi&ecirc;n tai g&acirc;y n&ecirc;n</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">- Tự &yacute; th&aacute;o dỡ, sửa chữa bởi c&aacute;c c&aacute; nh&acirc;n hoặc kỹ thuật vi&ecirc;n kh&ocirc;ng được sự ủy quyền của Năm Sao Việt</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">Những sản phẩm được mua tại Năm Sao Việt nhưng đ&atilde; qu&aacute; thời hạn bảo h&agrave;nh, Năm Sao Việt &nbsp;cung cấp dịch vụ sửa chửa t&iacute;nh ph&iacute; cho qu&iacute; kh&aacute;ch.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color:#ffffff;">III/ Li&ecirc;n hệ, thắc mắc, khiếu nại về vấn đề bảo h&agrave;nh, bảo tr&igrave;:</span></strong></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color:#ffffff;">Xin Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ:</span></strong></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><strong><span style="background-color:#ffffff;">Bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng &ndash; C&ocirc;ng ty CPTB Năm Sao Việt&nbsp;</span></strong><br />\r\n	<strong><span style="background-color:#ffffff;">Km21 &ndash; Đường 70 &ndash; Xu&acirc;n Phương &ndash; Từ Li&ecirc;m &ndash; H&agrave; Nội</span></strong></strong></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color:#ffffff;">Điện thoại: 043.7633594</span></strong></font></p>', '<p>\r\n	<strong style="font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-size: 14px; "><span style="background-color: rgb(255, 255, 255); ">CH&Iacute;NH S&Aacute;CH BẢO H&Agrave;NH SỬA CHỮA THIẾT BỊ</span></strong><br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">11:02:00 |</span></font><span style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; ">&nbsp;</span><font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">(16/04/2012)</span></font><br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">Trong thời gian sử dụng thiết bị nếu gặp bất kỳ trục trặc kỹ thuật n&agrave;o q&uacute;y kh&aacute;ch h&agrave;ng c&oacute; thể li&ecirc;n lạc trực tiếp với C&ocirc;ng ty để được trợ gi&uacute;p.&nbsp;</span></font></p>\r\n<p>\r\n	<br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n		<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n</p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color: rgb(255, 255, 255); ">I/ Những trường hợp phù hợp qui định bảo h&agrave;nh miễn ph&iacute; :</span></strong></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">Bảo h&agrave;nh sản phẩm l&agrave;: khắc phục những lỗi hỏng h&oacute;c, sự cố kỹ thuật xảy ra do lỗi của nh&agrave; sản xuất</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Sản phẩm c&ograve;n trong thời hạn bảo h&agrave;nh được t&iacute;nh kể từ ng&agrave;y giao h&agrave;ng hoặc được ghi tr&ecirc;n Phi&ecirc;́u Bảo hành</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- C&oacute; H&oacute;a đơn mua h&agrave;ng hoặc bi&ecirc;n bản b&agrave;n giao thiết bị của c&ocirc;ng ty.</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">Sản ph&acirc;̉m bảo hành sẽ tu&acirc;n theo qui định bảo hành của nhà sản xuất đối với c&aacute;c sự cố về mặt kỹ thuật</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color: rgb(255, 255, 255); ">II/ Những trường hợp kh&ocirc;ng được bảo h&agrave;nh:</span></strong></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Sản phẩm đ&atilde; qu&aacute; thời hạn bảo h&agrave;nh.</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Những sản phẩm kh&ocirc;ng thể x&aacute;c định được nguồn gốc mua tại c&ocirc;ng ty th&igrave; C&ocirc;ng ty c&oacute; quyền từ chối bảo h&agrave;nh.</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Mất h&oacute;a đơn hoặc bi&ecirc;n bản b&agrave;n giao.</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Tem ni&ecirc;m phong bảo h&agrave;nh bị r&aacute;ch, vỡ, hoặc bị sửa đ&ocirc;̉i</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Sản phẩm bị hư hỏng do sử dụng kh&ocirc;ng đúng hướng d&acirc;̃n sử dụng</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Sản ph&acirc;̉m bị hư hỏng do t&aacute;c động cơ học l&agrave;m rơi, vỡ, va đập, trầy xước, m&oacute;p m&eacute;o, ẩm ướt, hoen rỉ, chảy nước</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Sản phẩm c&oacute; dấu hiệu hư hỏng do chuột bọ hoặc c&ocirc;n tr&ugrave;ng x&acirc;m nhập hoặc do hỏa hoạn, thi&ecirc;n tai g&acirc;y n&ecirc;n</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">- Tự &yacute; th&aacute;o dỡ, sửa chữa bởi c&aacute;c c&aacute; nh&acirc;n hoặc kỹ thuật vi&ecirc;n kh&ocirc;ng được sự ủy quyền của Năm Sao Việt</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">Những sản phẩm được mua tại Năm Sao Việt nhưng đ&atilde; qu&aacute; thời hạn bảo h&agrave;nh, Năm Sao Việt &nbsp;cung cấp dịch vụ sửa chửa t&iacute;nh ph&iacute; cho qu&iacute; kh&aacute;ch.</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color: rgb(255, 255, 255); ">III/ Li&ecirc;n hệ, thắc mắc, khiếu nại về vấn đề bảo h&agrave;nh, bảo tr&igrave;:</span></strong></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color: rgb(255, 255, 255); ">&nbsp;</span></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color: rgb(255, 255, 255); ">Xin Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ:</span></strong></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><strong><span style="background-color: rgb(255, 255, 255); ">Bộ phận chăm s&oacute;c kh&aacute;ch h&agrave;ng &ndash; C&ocirc;ng ty CPTB Năm Sao Việt&nbsp;</span></strong><br />\r\n	<strong><span style="background-color: rgb(255, 255, 255); ">Km21 &ndash; Đường 70 &ndash; Xu&acirc;n Phương &ndash; Từ Li&ecirc;m &ndash; H&agrave; Nội</span></strong></strong></font></p>\r\n<p style="background-color: transparent; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><strong><span style="background-color: rgb(255, 255, 255); ">Điện thoại: 043.7633594</span></strong></font></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_groups`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_be_acl_groups`
--

INSERT INTO `n_be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 6, 'Member', NULL),
(2, 4, 5, 'Administrator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_permissions`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL DEFAULT '0',
  `aco_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `n_be_acl_permissions`
--

INSERT INTO `n_be_acl_permissions` (`id`, `aro_id`, `aco_id`, `allow`) VALUES
(1, 2, 1, 'Y'),
(3, 1, 24, 'Y'),
(4, 1, 27, 'N'),
(5, 1, 6, 'N'),
(6, 1, 3, 'N'),
(7, 1, 12, 'N'),
(8, 3, 24, 'Y'),
(9, 3, 12, 'N'),
(10, 3, 28, 'Y'),
(11, 3, 36, 'Y'),
(12, 3, 1, 'Y'),
(13, 3, 3, 'N'),
(14, 1, 32, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_permission_actions`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_permission_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `access_id` int(10) unsigned NOT NULL DEFAULT '0',
  `axo_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_id` (`access_id`),
  KEY `axo_id` (`axo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_be_acl_resources`
--

CREATE TABLE IF NOT EXISTS `n_be_acl_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `n_be_acl_resources`
--

INSERT INTO `n_be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 78, 'Site', NULL),
(2, 56, 77, 'Control Panel', NULL),
(3, 57, 76, 'System', NULL),
(4, 70, 71, 'Members', NULL),
(5, 60, 69, 'Access Control', NULL),
(6, 72, 73, 'Settings', NULL),
(7, 74, 75, 'Utilities', NULL),
(8, 67, 68, 'Permissions', NULL),
(9, 65, 66, 'Groups', NULL),
(10, 63, 64, 'Resources', NULL),
(11, 61, 62, 'Actions', NULL),
(12, 26, 55, 'General', 0),
(13, 53, 54, 'Calendar', 0),
(14, 51, 52, 'Category', 0),
(15, 49, 50, 'Customers', 0),
(16, 47, 48, 'Menus', 0),
(17, 45, 46, 'Messages', 0),
(18, 43, 44, 'Orders', 0),
(19, 41, 42, 'Pages', 0),
(20, 39, 40, 'Products', 0),
(21, 37, 38, 'Subscribers', 0),
(22, 35, 36, 'Admins', 0),
(23, 33, 34, 'Filemanager', 0),
(24, 18, 25, 'Customer Support', 0),
(25, 23, 24, 'Purchase Support', 0),
(26, 21, 22, 'Customer Record', 0),
(27, 19, 20, 'Customers Admin', 0),
(28, 12, 17, 'Project Panel', 0),
(29, 15, 16, 'Project Spec', 0),
(30, 13, 14, 'Project Home', 0),
(32, 9, 10, 'Customer booking', 0),
(33, 7, 8, 'Bookings', 0),
(34, 3, 4, 'Courses', 0),
(35, 5, 6, 'Trainers', 0),
(36, 2, 11, 'Fitness', 0),
(37, 31, 32, 'Multi languages', 0),
(38, 29, 30, 'Slideshow', 0),
(39, 27, 28, 'Playroom', 0),
(40, 58, 59, 'Phpinfo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `n_danhmuc`
--

CREATE TABLE IF NOT EXISTS `n_danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_v` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ten_e` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_danhmuc`
--

INSERT INTO `n_danhmuc` (`id`, `ten_v`, `ten_e`, `parent_id`) VALUES
(1, 'Thiết bị bếp chính', 'Main kitchen equipment', 0),
(2, 'Thiết bị chế biến', 'Processing equipment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `n_example_contactus_info`
--

CREATE TABLE IF NOT EXISTS `n_example_contactus_info` (
  `slogan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_example_contactus_info`
--

INSERT INTO `n_example_contactus_info` (`slogan`, `address`, `phone`, `email`, `fax`, `website`) VALUES
('We are champion', 'TC5B Me Tri Thuong, Tu Liem, Ha Noi', '+8490xxxxxxxx', 'tungns@niw.com.vn', '', 'niw.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `n_example_contactus_message_info`
--

CREATE TABLE IF NOT EXISTS `n_example_contactus_message_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `yourmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `n_example_contactus_message_info`
--

INSERT INTO `n_example_contactus_message_info` (`id`, `name`, `email`, `subject`, `yourmessage`, `date`) VALUES
(17, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17'),
(18, 'Le Tien', 'lexuantien0311@gmail.com', 'Tesstttt', 'Hellooooo!', '2012-07-16 13:03:15'),
(19, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `n_gioithieu`
--

CREATE TABLE IF NOT EXISTS `n_gioithieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude_v` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `tieude_e` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung_v` text COLLATE utf8_unicode_ci,
  `noidung_e` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_gioithieu`
--

INSERT INTO `n_gioithieu` (`id`, `tieude_v`, `tieude_e`, `noidung_v`, `noidung_e`) VALUES
(3, 'TẦM NHÌN & CHIẾN LƯỢC KINH DOANH', 'VISION & STRATEGY BUSINESS', '<p>\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">Ban l&atilde;nh đạo v&agrave; mỗi nh&acirc;n vi&ecirc;n của C&ocirc;ng ty Cổ Phần Thiết Bị Năm Sao Việt thấm nhuần c&aacute;c gi&aacute; trị, kim chỉ nam cho hoạt động kinh doanh của m&igrave;nh. C&aacute;c gi&aacute; trị cốt l&otilde;i v&agrave; kim chỉ nam đ&oacute; được đ&uacute;c kết như sau:&nbsp;</span></font></p>\r\n<p>\r\n	<br style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif; background-color: rgb(62, 62, 62); " />\r\n	<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; text-align: center; ">\r\n		<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/1%282%29%281%29.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 350px; height: 316px; " /></font></p>\r\n</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;</span><strong><span style="background-color:#ffffff;">Tầm nh&igrave;n:</span></strong><span style="background-color:#ffffff;">&nbsp;C&ocirc;ng ty Cổ Phần Thiết Bị Năm Sao Việt phấn đấu trở th&agrave;nh một trong những c&ocirc;ng ty h&agrave;ng đầu tại Việt Nam trong lĩnh vực&nbsp; Tư vấn -&nbsp; Thiết kế - Sản xuất - Cung cấp thiết bị nh&agrave; h&agrave;ng kh&aacute;ch sạn v&agrave; bếp ăn tập thể.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<br />\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;</span><strong><span style="background-color:#ffffff;">Sứ mệnh:&nbsp;</span></strong><span style="background-color:#ffffff;">Đem lại sự&nbsp; h&agrave;i l&ograve;ng cho tất cả c&aacute;c kh&aacute;ch h&agrave;ng m&agrave; c&ocirc;ng ty phục vụ bằng việc cung cấp c&aacute;c sản phẩm v&agrave; dịch vụ tốt nhất.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&nbsp;</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;</span><strong><span style="background-color:#ffffff;">Th&aacute;i độ đối với kh&aacute;ch h&agrave;ng:</span></strong><span style="background-color:#ffffff;">&nbsp;T&aacute;c phong chuy&ecirc;n nghiệp, trung thực, nhiệt t&igrave;nh v&agrave; tận tụy.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<br />\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;&nbsp;</span><strong><span style="background-color:#ffffff;">Văn h&oacute;a doanh nghiệp:</span></strong><span style="background-color:#ffffff;">&nbsp; Con người l&agrave; yếu tố quan trọng nhất, tinh thần đồng đội được đề cao, s&aacute;ng tạo, đổi mới, tự gi&aacute;c, kh&ocirc;ng ch&ugrave;n bước trước kh&oacute; khăn.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<br />\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;&nbsp;</span><strong><span style="background-color:#ffffff;">Triết l&yacute; kinh doanh:</span></strong><span style="background-color:#ffffff;">&nbsp; Lu&ocirc;n lắng nghe, t&igrave;m giải ph&aacute;p t&ocirc;t nhất để phục vụ kh&aacute;ch h&agrave;ng, m&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp,c&oacute; kỷ cương, minh bạch, khuyến kh&iacute;ch s&aacute;ng tạo, đề cao sự trung th&agrave;nh, c&oacute; tr&aacute;ch nhiệm với cộng đồng.</span></font></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; ">\r\n	<br />\r\n	<br />\r\n	<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); font-family: Tahoma, Geneva, sans-serif; text-align: justify; color: rgb(51, 51, 51); "><span style="background-color:#ffffff;">&bull;&nbsp;&nbsp; &nbsp;</span><strong><span style="background-color:#ffffff;">Th&aacute;i độ đối với đồng nghiệp:</span></strong><span style="background-color:#ffffff;">&nbsp;Đo&agrave;n kết, nhất tr&iacute;, hỗ trợ, thẳng thắng, t&ocirc;n trọng, học hỏi lẫn nhau c&ugrave;ng nhau tiến bộ.</span></font></p>\r\n', '<p>\r\n	&nbsp;</p>\r\n<div>\r\n	Management and each employee of Five Star Equipment Joint Stock Company Vietnam instill the values​​, the guideline for your business. The core values ​​and guiding are summarized as follows:</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Vision: Five Star Equipment Joint Stock Company Vietnam aims to become one of the leading companies in Vietnam in the field of Consulting - Design - Manufacturing - Supply restaurant and hotel kitchens collective.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Mission: Bringing satisfaction to all the customers that the company serves by providing the best products and services.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Attitudes customers: The professional, honest, enthusiastic and dedicated.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Corporate culture: Humans are the most important factors, the team spirit is high, creativity, innovation, self-discipline, not shrink before difficulties.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Business philosophy: Always listen to, to find the best solutions for customer service, professional work environment, orderly, transparent, encourage creativity, promote loyalty, are responsible for communities.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&bull; Attitudes towards colleagues: Solidarity, agreed, support, straight, respect, mutual learning progress together.</div>\r\n<div>\r\n	&nbsp;</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_preferences`
--

CREATE TABLE IF NOT EXISTS `n_preferences` (
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `value` text CHARACTER SET latin1 NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n_preferences`
--

INSERT INTO `n_preferences` (`name`, `value`) VALUES
('default_user_group', '1'),
('smtp_host', ''),
('keep_error_logs_for', '30'),
('email_protocol', 'sendmail'),
('use_registration_captcha', '0'),
('page_debug', '0'),
('automated_from_name', 'admin@gmail.com'),
('allow_user_registration', '1'),
('use_login_captcha', '0'),
('site_name', 'Kaimonokago 2.0'),
('automated_from_email', 'admin@gmail.com'),
('account_activation_time', '7'),
('allow_user_profiles', '1'),
('activation_method', 'email'),
('autologin_period', '30'),
('min_password_length', '4'),
('smtp_user', ''),
('smtp_pass', ''),
('email_mailpath', '/usr/sbin/sendmail'),
('smtp_port', '25'),
('smtp_timeout', '5'),
('email_wordwrap', '1'),
('email_wrapchars', '76'),
('email_mailtype', 'text'),
('email_charset', 'utf-8'),
('bcc_batch_mode', '0'),
('bcc_batch_size', '200'),
('login_field', 'email'),
('main_module_name', 'welcome'),
('categories_parent_id', '1'),
('admin_email', ''),
('webshop_slideshow', 'jmpress'),
('slideshow_two', 'none'),
('playroom_parent_id', '10'),
('calendar', '1'),
('category', '1'),
('customers', '1'),
('filemanager', '1'),
('languages', '1'),
('menus', '1'),
('messages', '1'),
('orders', '1'),
('pages', '1'),
('products', '1'),
('slideshow', '1'),
('subscribers', '1'),
('multi_language', '0'),
('website_language', 'english'),
('security_method', 'question'),
('security_question', '3+5='),
('security_answer', '8'),
('ga_tracking', ''),
('ga_profile', ''),
('ga_email', ''),
('ga_password', ''),
('dashboard_rss', 'http://feeds.feedburner.com/nettuts-summary'),
('dashboard_rss_count', '5'),
('company_name', ''),
('company_address', ''),
('frontend_multi_language', '1'),
('company_post', '123-4567'),
('company_city', 'Kobe'),
('company_country', 'Japan'),
('company_organization_number', '992591412'),
('company_telephone', '+ 81 1122 3344'),
('company_mobile', ''),
('company_other_one', 'The contents of website are the copyright of Kaimonokago ? 2012. All rights reserved.  Web: Okada Design AS'),
('company_other_two', ''),
('category_menu_id', '16, 22'),
('lilly_fairies_submenu_id', '1'),
('parentid_other_illust', '27'),
('quicksand_colorbox_cat_id', '11'),
('sharethis_pub_key', ''),
('sharethis_direction', 'vertical'),
('sharethis_services', 'googleplus, facebook, twitter, yahoo, email, sharethis'),
('sharethis_size', 'large'),
('other_work_main', ''),
('customer_registration', '0'),
('twittername', ''),
('twittercount', '20'),
('gioithieu', '1'),
('camnhan', '1'),
('hoithao', '1'),
('khoahoc', '1'),
('loaisach', '1'),
('sach', '1'),
('thongtingioithieu', '1'),
('homepage', '1');

-- --------------------------------------------------------

--
-- Table structure for table `n_sanpham`
--

CREATE TABLE IF NOT EXISTS `n_sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_v` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ten_e` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota_v` text COLLATE utf8_unicode_ci,
  `mota_e` text COLLATE utf8_unicode_ci,
  `chitiet_v` text COLLATE utf8_unicode_ci,
  `chitiet_e` text COLLATE utf8_unicode_ci,
  `hinhanh` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `moi` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_sanpham`
--

INSERT INTO `n_sanpham` (`id`, `ten_v`, `ten_e`, `mota_v`, `mota_e`, `chitiet_v`, `chitiet_e`, `hinhanh`, `danhmuc_id`, `moi`) VALUES
(6, 'ádasd', 'ádasd', '', '', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `n_tintuc`
--

CREATE TABLE IF NOT EXISTS `n_tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude_v` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `tieude_e` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_v` text COLLATE utf8_unicode_ci,
  `noidung_e` text COLLATE utf8_unicode_ci,
  `ngaythang` date NOT NULL,
  `tacgia` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_tintuc`
--

INSERT INTO `n_tintuc` (`id`, `tieude_v`, `tieude_e`, `noidung_v`, `noidung_e`, `ngaythang`, `tacgia`) VALUES
(1, 'Năm Sao Việt thi công công trình cầu đi bộ qua đường Phạm Ngọc Thạch – Lương Đình Của.', 'Sao Viet construction pedestrian bridge over Pham Ngoc Thach Luong Dinh.', '<p>\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><a href="http://5saoviet.com.vn/" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; text-decoration: none; ">C&ocirc;ng ty cổ phần Thiết bị Năm Sao Việt</a>&nbsp;đ&atilde; tham gia thi c&ocirc;ng C&ocirc;ng tr&igrave;nh Cầu đi bộ qua đường Phạm Ngọc Thạch &ndash; Lương Đỉnh Của. Đ&acirc;y l&agrave; một trong 15 c&ocirc;ng tr&igrave;nh cầu vượt ti&ecirc;u biểu m&agrave; UBND TP H&agrave; Nội đ&atilde; ph&ecirc; duyệt g&oacute;p phần giải quyết t&igrave;nh trạng &ugrave;n tắc giao th&ocirc;ng trong l&ograve;ng thủ đ&ocirc;.</span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">V&agrave; h&ocirc;m nay, ng&agrave;y 30-08, Năm Sao Việt đ&atilde; cơ bản ho&agrave;n th&agrave;nh c&ocirc;ng tr&igrave;nh &yacute; nghĩa n&agrave;y đ&uacute;ng dịp ch&agrave;o mừng Quốc Kh&aacute;nh 2-9.</span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">Sau đ&acirc;y l&agrave; một số h&igrave;nh ảnh được chụp tại c&ocirc;ng trường thi c&ocirc;ng.</span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/anh%201.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 540px; height: 405px; " /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/anh%202.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 540px; height: 405px; " /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/anh%203.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 540px; height: 405px; " /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/anh%204.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 540px; height: 405px; " /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<img alt="" src="http://5saoviet.com.vn/kcfinder/upload/images/anh%205.jpg" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; width: 540px; height: 405px; " /></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="font-size: 18px; "><span style="color: rgb(255, 0, 0); "><span style="font-family: ''times new roman'', times, serif; "><strong><em style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; font-weight: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&Ocirc;NG TY CỔ PHẦN THIẾT BỊ NĂM SAO VIỆT</em></strong></span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong><em style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; font-weight: normal; ">Cụm C&ocirc;ng Nghiệp Từ Li&ecirc;m, Km 21 - Đường 70 - Xu&acirc;n Phương - Từ Li&ecirc;m - H&agrave; Nội.</em></strong></span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>Tel: 043.7633.594&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fax: 043.7633.595</strong></span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>Email:&nbsp;</strong></span></span></span><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong><a href="mailto:info@inox5saoviet.vn" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; font-weight: normal; text-decoration: none; "><span style="color: rgb(0, 0, 205); ">info@inox5saoviet.vn</span></a></strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>Website:&nbsp;</strong></span></span></span><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong><a href="http://5saoviet.com.vn/" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; font-weight: normal; text-decoration: none; "><span style="color: rgb(0, 0, 255); ">http://5saoviet.com.vn</span></a><span style="color: rgb(0, 0, 205); ">&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;</span><a href="http://inox5saoviet.vn/" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: transparent; font-weight: normal; text-decoration: none; "><span style="color: rgb(0, 0, 205); ">http://inox5saoviet.vn</span></a></strong></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>Năm Sao Việt&nbsp;</strong>h&acirc;n hạnh giới thiệu c&aacute;c sản phẩm ch&iacute;nh của c&ocirc;ng ty:</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(255, 0, 0); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>1.&nbsp;C&aacute;c thiết bị bếp ch&iacute;nh:</strong>&nbsp;</span></span></span><span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Bếp &Aacute; - Bếp Hầm.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- L&ograve; nướng c&aacute;c loại.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Tủ cơm, tủ hấp.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Chậu rửa, gi&aacute; kệ.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Tủ sấy b&aacute;t đĩa.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Thiết bị xử l&yacute; m&ocirc;i trường nh&agrave; bếp.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Thang m&aacute;y&nbsp;chở h&agrave;ng.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- B&agrave;n ăn c&ocirc;ng nh&acirc;n.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(255, 0, 0); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; "><strong>2. C&aacute;c thiết bị chế biến v&agrave; bảo quản:</strong></span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- M&aacute;y th&aacute;i thịt.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- M&aacute;y xay thịt.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- M&aacute;y trộn bột.</span></span></span></p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-color: rgb(62, 62, 62); color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; text-align: justify; ">\r\n	<span style="color: rgb(0, 0, 205); "><span style="font-size: 14px; "><span style="font-family: ''times new roman'', times, serif; ">- Tủ đ&ocirc;ng, tủ m&aacute;t, b&agrave;n lạnh.</span></span></span></p>\r\n', '', '2012-10-08', 'tienmanh');

-- --------------------------------------------------------

--
-- Table structure for table `n_users`
--

CREATE TABLE IF NOT EXISTS `n_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(254) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group` int(10) unsigned DEFAULT NULL,
  `activation_key` varchar(32) DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `password` (`password`),
  KEY `group` (`group`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_users`
--

INSERT INTO `n_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-10-08 16:57:21', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
(2, 'letien', '0993abd18b04dce02cafde93878540f109592da5', 'lexuantien0311@gmail.com', 1, 2, NULL, '2012-07-23 07:58:53', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `n_user_profiles`
--

CREATE TABLE IF NOT EXISTS `n_user_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `web_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_code` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_user_profiles`
--

INSERT INTO `n_user_profiles` (`user_id`, `company_name`, `full_name`, `web_address`, `phone_number`, `address`, `city`, `post_code`) VALUES
(1, '', '', '', '', '', '', 0),
(2, '', '', '', '', '', '', 0),
(14, '', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
