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
-- Table structure for table `n_tn_hinhanh`
--

CREATE TABLE IF NOT EXISTS `n_tn_hinhanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci,
  `noidung` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_tn_hinhanh`
--

INSERT INTO `n_tn_hinhanh` (`id`, `tieude`, `noidung`) VALUES
(1, 'Lễ tốt nghiệp', '<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Le%20tot%20nghiep/graduation5.jpg" style="width: 1600px; height: 740px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n        <img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Le%20tot%20nghiep/graduation.jpg" style="width: 1600px; height: 880px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Le%20tot%20nghiep/graduation2011.jpg" style="width: 716px; height: 328px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Le%20tot%20nghiep/graduation20112.jpg" style="width: 678px; height: 408px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Le%20tot%20nghiep/dsc_0779.jpg" style="width: 1600px; height: 1053px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(2, 'Cơ sở', '<p>\r\n	<strong><u>Lớp học</u></strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Co%20so/graduation51.jpg" style="width: 1600px; height: 1015px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Co%20so/classroom1.jpg" style="width: 1600px; height: 902px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong><u>Phòng máy vi tính</u></strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Co%20so/complab2.jpg" style="width: 1341px; height: 1200px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Co%20so/comp1.jpg" style="width: 1296px; height: 968px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong><u>Thư viện</u></strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Co%20so/library1.jpg" style="width: 1600px; height: 629px; " /></p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(3, 'Văn Phòng KCB Tại Việt Nam', '<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Van%20phong%20KCB%20tai%20Viet%20nam/kcbvietnam1.jpg" style="width: 771px; height: 505px; " />\r\n</p>\r\n	<p>&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Van%20phong%20KCB%20tai%20Viet%20nam/kcbvietnam2.jpg" style="width: 632px; height: 482px; " />\r\n</p>\r\n	<p>&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Van%20phong%20KCB%20tai%20Viet%20nam/kcbvietnam3.jpg" style="width: 786px; height: 451px; " />\r\n</p>\r\n	<p>&nbsp;</p>\r\n<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Van%20phong%20KCB%20tai%20Viet%20nam/kcbvietnam4.jpg" style="width: 742px; height: 494px; " />\r\n</p>\r\n'),
(4, 'Principal''s Trip to Vietnam', '<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Principal''s%20Trip%20to%20Vietnam/kcb%20students%202.jpg" style="width: 1600px; height: 952px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Principal''s%20Trip%20to%20Vietnam/kcb%20students.jpg" style="width: 1600px; height: 928px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Principal''s%20Trip%20to%20Vietnam/university%20of%20commerce.jpg" style="width: 1600px; height: 1056px; " /></p>\r\n'),
(5, 'Sinh viên', '<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Sinh%20vien/scotland1.jpg" style="width: 1600px; height: 1195px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Sinh%20vien/sinh%20vien2.jpg" style="width: 1600px; height: 932px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Sinh%20vien/karaoke.jpg" style="width: 720px; height: 540px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Sinh%20vien/sinh%20vien1.jpg" style="width: 604px; height: 453px; " /></p>\r\n'),
(6, 'Giải Bóng Đá SVUK', '<p>\r\n	<img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk2012.jpg" style="width: 720px; height: 320px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk2012_2.jpg" style="width: 720px; height: 502px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk8.jpg" style="width: 604px; height: 402px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk%208_2.jpg" style="width: 604px; height: 402px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk%207.jpg" style="width: 604px; height: 453px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk%204.jpg" style="width: 604px; height: 453px; " /><img alt="" src="/tuongnhat-duhoc/assets/duhoc/avatar/images/Pictures/Giai%20bong%20da%20SVUK/svuk3_1.jpg" style="width: 1024px; height: 768px; " /></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
