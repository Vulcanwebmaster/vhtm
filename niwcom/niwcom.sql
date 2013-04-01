-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 11:01 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `niwcom`
--

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
-- Table structure for table `n_dichvu`
--

CREATE TABLE IF NOT EXISTS `n_dichvu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `tieudee` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `noidunge` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_dichvu`
--

INSERT INTO `n_dichvu` (`id`, `tieude`, `tieudee`, `noidung`, `noidunge`, `alias`) VALUES
(1, 'Thiết kế website', 'Web design', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Bạn muốn ph&aacute;t triển cửa h&agrave;ng hay c&ocirc;ng ty một c&aacute;ch chuy&ecirc;n nghiệp v&agrave; hiệu quả? Bạn muốn mọi người biết đến website của m&igrave;nh? H&atilde;y li&ecirc;n hệ ch&uacute;ng t&ocirc;i!</p>\r\n<p>\r\n	NIW tự tin đem đến cho kh&aacute;ch h&agrave;ng:</p>\r\n<p>\r\n	C&aacute;c thiết kế website hiện đại v&agrave; đầy ấn tượng Cung cấp giải ph&aacute;p ho&agrave;n hảo cho việc quảng b&aacute; thương hiệu tr&ecirc;n Internet</p>\r\n<p>\r\n	Dịch vụ tư vấn v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng 24/7.</p>\r\n', '<p>\r\n	Do you want to make your website become the professional website? Please contact us. Our service and customer care 24/7.</p>\r\n', 'Thiet-ke-website');

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
  `id` int(11) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `tieudee` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `noidunge` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_gioithieu`
--

INSERT INTO `n_gioithieu` (`id`, `tieude`, `tieudee`, `noidung`, `noidunge`) VALUES
(1, 'Lời giới thiệu', 'Introduction', '<p>\r\n	&nbsp;</p>\r\n<div>\r\n	<p class="content" id="content1" style="text-align: justify; text-indent: 1cm; margin-bottom: 10px;">\r\n		K&iacute;nh gửi qu&yacute; kh&aacute;ch h&agrave;ng. Trước hết ch&uacute;c qu&yacute; kh&aacute;ch h&agrave;ng lu&ocirc;n đạt được những thắng lợi v&agrave; ph&aacute;t triển bền vững. Ch&uacute;ng t&ocirc;i rất lấy l&agrave;m vinh dự khi ch&uacute;ng t&ocirc;i, c&ocirc;ng ty TNHH C&ocirc;ng nghệ NIW được đồng h&agrave;nh c&ugrave;ng qu&yacute; kh&aacute;ch h&agrave;ng suốt trong thời gian qua. NIW với một đội ngũ kỹ sư trẻ, t&agrave;i năng, quy tr&igrave;nh quản l&yacute; chất lượng quy chuẩn b&ecirc;n cạnh những dịch vụ lu&ocirc;n hướng tới kh&aacute;ch h&agrave;ng. NIW ch&uacute;ng tối tự h&agrave;o cung cấp đến kh&aacute;ch h&agrave;ng những sản phẩm chất lượng: Thiết kế xấy dựng website chuy&ecirc;n nghiệp, thực hiện ph&aacute;t triển phần mềm ứng dụng như phần mềm kế to&aacute;n, ERP, phần mềm nhận dạng... Trong thời gian tới, NIW cam kết với c&aacute;c qu&yacute; kh&aacute;ch h&agrave;ng tiếp tục n&acirc;ng cao cải tiến năng lực l&agrave;m việc để phục vụ tốt hơn qu&yacute; kh&aacute;ch h&agrave;ng. NIW lu&ocirc;n mong muốn nhận được sự hợp t&aacute;c từ qu&yacute; kh&aacute;ch h&agrave;ng cũng như c&aacute;c đối t&aacute;c, ch&uacute;ng t&ocirc;i lu&ocirc;n sẵn s&agrave;ng cung cấp dịch vụ khi qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu. Với kh&aacute;t vọng hợp t&aacute;c v&agrave; th&agrave;nh c&ocirc;ng. BGĐ C&ocirc;ng ty TNHH C&ocirc;ng nghệ NIW &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>', '<p>\r\n	NIW is a new Viet Nam company in the information technology. NIW has the young strength, good experiences engineers, ambition of innovation and the development. We develop softwares, websites and mobie applications with the wolrd class quality. NIW want to thanks all customers, who believed and used our services. With best regards, NIW boards of directors.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_metatag`
--

CREATE TABLE IF NOT EXISTS `n_metatag` (
  `id` int(11) NOT NULL,
  `meta_home` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_tintuc` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_dichvu` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_lienhe` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_metatag`
--

INSERT INTO `n_metatag` (`id`, `meta_home`, `meta_tintuc`, `meta_gioithieu`, `meta_dichvu`, `meta_sanpham`, `meta_lienhe`) VALUES
(1, 'niw, trang chu,', 'tin tuc', 'gioi thieu, niw, giai phap phan mem', 'dich vu, hay, niw, phan mem', 'san pham', 'lien he, cong ty niw, phan mem');

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
  `tensp` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_sanpham`
--

INSERT INTO `n_sanpham` (`id`, `tensp`, `hinhanh`, `link`, `alias`) VALUES
(1, 'Unix', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/unix.png" style="width: 243px; height: 132px;" /></p>\r\n', 'http://unix.vn/', 'Unix'),
(2, 'Website bán hàng', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/websitebanhang.jpg" style="width: 1366px; height: 768px;" /></p>\r\n', 'http://websitebanhang.net/', 'Website-ban-hang'),
(3, 'Thuê nhà xưởng', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/thuenhaxuong.jpg" style="width: 1366px; height: 768px;" /></p>\r\n', 'http://thuenhaxuong.net/', 'Thue-nha-xuong'),
(4, 'Tường nhật', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/tuongnhat.jpg" style="width: 1350px; height: 640px;" /></p>\r\n', 'http://tuongnhat.vn/', 'Tuong-nhat'),
(5, 'Evishop', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/evishop.jpg" style="width: 1350px; height: 622px;" /></p>\r\n', 'http://evishop.vn/', 'Evishop');

-- --------------------------------------------------------

--
-- Table structure for table `n_slide`
--

CREATE TABLE IF NOT EXISTS `n_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anh1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh2` text COLLATE utf8_unicode_ci NOT NULL,
  `anh3` text COLLATE utf8_unicode_ci NOT NULL,
  `anh4` text COLLATE utf8_unicode_ci NOT NULL,
  `anh5` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_slide`
--

INSERT INTO `n_slide` (`id`, `anh1`, `anh2`, `anh3`, `anh4`, `anh5`) VALUES
(1, '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/imageSlider.jpg" style="width: 940px; height: 440px;" /></p>', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/slide1.jpg" style="width: 940px; height: 440px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/slide2.jpg" style="width: 940px; height: 440px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/slide3.jpg" style="width: 940px; height: 440px;" /></p>\r\n', '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/slide4.jpg" style="width: 940px; height: 440px;" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_tintuc`
--

CREATE TABLE IF NOT EXISTS `n_tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `tieudee` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `noidunge` text COLLATE utf8_unicode_ci NOT NULL,
  `duyet` int(11) NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `urlGoc` text COLLATE utf8_unicode_ci NOT NULL,
  `source` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay` datetime NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `n_tintuc`
--

INSERT INTO `n_tintuc` (`id`, `tieude`, `tieudee`, `noidung`, `noidunge`, `duyet`, `hinhanh`, `urlGoc`, `source`, `ngay`, `alias`) VALUES
(1, 'tin tức 123', 'new 1', '<p>\r\n	ko c&oacute; j</p>\r\n', '<p>\r\n	uh h&aacute;</p>\r\n', 1, '<p>\r\n	<img alt="" src="/niwcom/assets/niw/upload/images/iPad29d_108a2.jpg" style="width: 450px; height: 337px;" /></p>\r\n', '', '', '0000-00-00 00:00:00', 'tin-tuc-123'),
(20, 'Quảng cáo trên di động tại Việt Nam: Thị trường tiềm năng', '', '<div>\r\n	<strong>Lợi thế từ smartphone</strong></div>\r\n<div>\r\n	<br />\r\n	Theo thống k&ecirc; mới nhất của h&atilde;ng nghi&ecirc;n cứu thị trường Flurry (Mỹ), Việt Nam xếp thứ 2 thế giới về tốc độ tăng trưởng điện thoại di động th&ocirc;ng minh (smartphone) v&agrave; m&aacute;y t&iacute;nh bảng (tablet). Mức tăng trưởng đạt 266% từ th&aacute;ng 01/2012 &ndash; 01/2013.</div>\r\n<div>\r\n	<br />\r\n	Trong khi đ&oacute;, c&ocirc;ng bố của c&ocirc;ng ty Nielsen cũng cho thấy, trong số người sử dụng smartphone tại Việt Nam, c&oacute; hơn 60% người thường xuy&ecirc;n truy cập Internet qua điện thoại. Với những người được hỏi, c&oacute; tới 42% trả lời sẽ thay thế điện thoại di động thường bằng điện thoại di động th&ocirc;ng minh trong v&ograve;ng 6 th&aacute;ng tới.</div>\r\n<div>\r\n	<br />\r\n	Theo nghi&ecirc;n cứu mới nhất của Admicro (đơn vị trực thuộc VC Corp, ti&ecirc;n phong cung cấp quảng c&aacute;o tr&ecirc;n di động tại Việt Nam), tổng ng&acirc;n s&aacute;ch m&agrave; doanh nghiệp to&agrave;n quốc đổ v&agrave;o thị trường Mobile Ads hiện tăng 150% mỗi th&aacute;ng v&agrave; hứa hẹn tiếp tục tăng mạnh hơn ở thời gian tới. Nghi&ecirc;n cứu n&agrave;y cũng đưa ra chi tiết: nam giới c&oacute; niềm đam m&ecirc; c&ocirc;ng nghệ m&atilde;nh liệt hơn n&ecirc;n truy cập Internet qua di động với tỉ lệ &aacute;p đảo (68%) so với nữ giới (32%). Trong đ&oacute;, nh&oacute;m tuổi từ 25 - 34 c&oacute; số lượng người truy cập Internet qua di động nhiều nhất, chiếm gần 39%. B&aacute;o c&aacute;o c&ograve;n chỉ ra khung giờ m&agrave; người d&ugrave;ng sử dụng Mobile Internet nhiều nhất l&agrave; từ 11h &ndash; 13h v&agrave; 19h &ndash; 22h mỗi ng&agrave;y.</div>\r\n<p align="center">\r\n	<img _fl="" align="center" alt="Quảng cáo trên di động tại Việt Nam: Thị trường tiềm năng" src="http://dantri4.vcmedia.vn/lsvaPE0d7foDdfJ7sLS/Image/2013/03/Bai-1_Anh-1_bieu-do-Admicro-c2ac6.jpg" style="MARGIN: 5px" width="400" /></p>\r\n<div>\r\n	Những con số ph&aacute;t triển kể tr&ecirc;n ch&iacute;nh l&agrave; t&iacute;n hiệu &ldquo;bật đ&egrave;n xanh&rdquo; để doanh nghiệp tận dụng quảng c&aacute;o tr&ecirc;n di động như l&agrave; một k&ecirc;nh mới, đưa sản phẩm, dịch vụ đến gần hơn với kh&aacute;ch h&agrave;ng.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<strong>Hiệu quả thực</strong></div>\r\n<div>\r\n	<br />\r\n	Quảng c&aacute;o tr&ecirc;n di động dễ k&iacute;ch th&iacute;ch người ti&ecirc;u d&ugrave;ng thực hiện h&agrave;nh động mục ti&ecirc;u như mua h&agrave;ng, đăng k&yacute; t&agrave;i khoản, download phần mềm - ứng dụng,... Ngay khi chứng kiến banner hiển thị tại wapsite, mạng x&atilde; hội,... kh&aacute;ch h&agrave;ng c&oacute; thể dễ d&agrave;ng tra từ kh&oacute;a t&igrave;m hiểu sản phẩm, t&igrave;m ra địa chỉ gần nhất b&aacute;n sản phẩm đ&oacute;, gọi điện đặt h&agrave;ng, lưu sự kiện - chương tr&igrave;nh khuyến m&atilde;i v&agrave;o lịch nhắc nhở hay tải &ndash; c&agrave;i đặt game v&agrave; ứng dụng ngay tức th&igrave;,... Điều n&agrave;y thuận tiện hơn so với khi họ nh&igrave;n thấy quảng c&aacute;o tr&ecirc;n c&aacute;c phương tiện kh&aacute;c như b&aacute;o giấy, truyền h&igrave;nh, ph&aacute;t thanh hay quảng c&aacute;o ngo&agrave;i trời.</div>\r\n', '', 1, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/quang-cao-tren-di-dong-tai-viet-nam-thi-truong-tiem-nang-708826.htm', 'http://dantri.com.vn/', '2013-03-19 16:04:09', 'Quang-cao-tren-di-dong-tai-Viet-Nam:-Thi-truong-tiem-nang'),
(27, '“Galaxy S 4 trình làng” là sự kiện công nghệ nổi bật nhất tuần qua', '', '<div align="center">\r\n	<div>\r\n		<img _fl="" align="middle" alt="“Galaxy S 4 trình làng” là sự kiện công nghệ nổi bật nhất tuần qua" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Tech-in-week-GS4-1-f1e5d.jpg" style="MARGIN: 5px" width="450" /></div>\r\n</div>\r\n<p>\r\n	Sau một thời gian d&agrave;i chờ đợi v&agrave; nhiều th&ocirc;ng tin đồn đo&aacute;n, chiếc smartphone được tr&ocirc;ng đợi nhất năm nay của Samsung - <a href="http://dantri.com.vn/suc-manh-so/galaxy-s-4-ra-mat-voi-cau-hinh-manh-nhat-tu-truoc-den-nay-707245.htm"><b>Galaxy S 4</b></a>, cũng đ&atilde; ch&iacute;nh thức được tr&igrave;nh l&agrave;ng tại sự kiện đặc biệt diễn ra ở New York v&agrave;o s&aacute;ng ng&agrave;y 15/3 (theo giờ Việt Nam).<br />\r\n	<br />\r\n	Mặc d&ugrave; kh&ocirc;ng c&oacute; nhiều th&ocirc;ng tin bị r&ograve; rỉ như iPhone 5 trước đ&acirc;y, tuy nhi&ecirc;n cấu h&igrave;nh v&agrave; thiết kế của Galaxy S 4 cũng đ&atilde; bị lộ &iacute;t ng&agrave;y trước khi sự kiện ch&iacute;nh thức diễn ra.<br />\r\n	<br />\r\n	Galaxy S 4 được trang bị m&agrave;n h&igrave;nh rộng 4,99-inch với độ ph&acirc;n giải Full HD 1080p (1920x1080), bao gồm 2 phi&ecirc;n bản sử dụng vi xử l&yacute; kh&aacute;c nhau, một phi&ecirc;n bản d&ugrave;ng vi xử l&yacute; Exynos 5 Octa 8 l&otilde;i của Samsung, tốc độ 1.8GHz hoặc vi xử l&yacute; Snapdragon S4 Pro l&otilde;i tứ của Qualcomm, tốc độ 1.9GHz (sự kh&aacute;c biệt t&ugrave;y v&agrave;o từng thị trường).<br />\r\n	<br />\r\n	K&egrave;m với đ&oacute; l&agrave; 2GB bộ nhớ RAM, ổ cứng lưu trữ 16/32/64GB, hỗ trợ t&iacute;nh năng mở rộng th&ocirc;ng qua khe cắm thẻ nhớ ngo&agrave;i. Galaxy S 4 sử dụng thỏi pin c&oacute; dung lượng 2.600mAh. Mặt sau của m&aacute;y l&agrave; camera 13 megapixel. M&aacute;y hoạt động tr&ecirc;n nền tảng Android 4.2 Jelly Bean.<br />\r\n	<br />\r\n	Galaxy S 4 l&agrave; chiếc smartphone c&oacute; cấu h&igrave;nh mạnh mẽ nhất từ trước đến nay của Samsung.<br />\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<div>\r\n		<img _fl="" align="middle" alt="Chỉ một ngày sau màn ra mắt ấn tượng của Galaxy S 4, Samsung đã có sự thay đổi nhân sự khi bất ngờ" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Tech-in-week-GS4-2-f1e5d.jpg" style="MARGIN: 5px" width="450" /></div>\r\n</div>\r\n<p>\r\n	Chỉ một ng&agrave;y sau m&agrave;n ra mắt ấn tượng của Galaxy S 4, Samsung đ&atilde; c&oacute; sự thay đổi nh&acirc;n sự khi bất ngờ <a href="http://dantri.com.vn/suc-manh-so/sau-man-ra-mat-galaxy-s4-samsung-bo-nhiem-2-ceo-moi-707696.htm"><b>bổ sung th&ecirc;m 2 người mới v&agrave;o vị tr&iacute; CEO</b></a> của c&ocirc;ng ty, n&acirc;ng tổng số CEO tại Samsung l&ecirc;n đến con số 3.<br />\r\n	<br />\r\n	Hai nh&acirc;n vật mới được bổ nhiệm v&agrave;o vị tr&iacute; CEO của h&atilde;ng bao gồm Boo-keun Yoon, Chủ tịch bộ phận kinh doanh Tivi v&agrave; JK Shin, chủ tịch bộ phận Viễn th&ocirc;ng di động của Samsung. Dưới sự l&atilde;nh đạo của 2 nh&acirc;n vật n&agrave;y, cả 2 bộ phận Tivi v&agrave; Di động của Samsung đ&atilde; đạt được những bước tiến vững chắc v&agrave; vươn l&ecirc;n dẫn đầu tr&ecirc;n thị trường.<br />\r\n	<br />\r\n	Sau khi trở th&agrave;nh CEO của Samsung, cả Boo-keun Yoon v&agrave; JK Shin vẫn sẽ tiếp tục l&atilde;nh đạo 2 bộ phận của m&igrave;nh đảm nhiệm như trước đ&acirc;y.<br />\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<div>\r\n		<img _fl="" align="middle" alt="Chỉ một ngày sau màn ra mắt ấn tượng của Galaxy S 4, Samsung đã có sự thay đổi nhân sự khi bất ngờ" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Tech-in-week-GS4-3-f1e5d.jpg" style="MARGIN: 5px" width="450" /></div>\r\n</div>\r\n<p>\r\n	Mặc d&ugrave; c&oacute; số lượng người d&ugrave;ng Internet rất &iacute;t v&agrave; chỉ giới hạn với những nh&oacute;m người được tuyển chọn, tuy nhi&ecirc;n Internet tại Bắc Triều Ti&ecirc;n trong tuần qua đ&atilde; <a href="http://dantri.com.vn/suc-manh-so/my-han-quoc-hay-trung-quoc-dung-sau-vu-tin-tac-tan-cong-trieu-tien-708439.htm"><b>trở th&agrave;nh mục ti&ecirc;u của hacker</b></a>, khiến truy cập Internet tại B&igrave;nh Nhưỡng bị gi&aacute;n đoạn trong 2 ng&agrave;y thứ 4 v&agrave; thứ 5 tuần qua.<br />\r\n	<br />\r\n	Ngay lập tức, Ch&iacute;nh phủ Bắc Triều Ti&ecirc;n đ&atilde; l&ecirc;n tiếng c&aacute;o buộc H&agrave;n Quốc v&agrave; Mỹ đứng sau cuộc tấn c&ocirc;ng n&agrave;y, tuy nhi&ecirc;n H&agrave;n Quốc đ&atilde; l&ecirc;n tiếng phủ nhận, trong khi qu&acirc;n đội Mỹ từ chối b&igrave;nh luận về vụ việc.<br />\r\n	<br />\r\n	Đ&acirc;y chỉ l&agrave; lời c&aacute;o buộc đơn phương từ ph&iacute;a Bắc Triều Ti&ecirc;n bởi lẽ theo c&aacute;c chuy&ecirc;n gia bảo mật, việc x&aacute;c định nguồn gốc những cuộc tấn c&ocirc;ng của tin tặc phải mất kh&aacute; nhiều thời gian mới c&oacute; thể kết luận được.<br />\r\n	<br />\r\n	Trong khi đ&oacute;, theo Lim Jong-in, Hiệu trưởng của Trường đại học An to&agrave;n th&ocirc;ng tin ở Seoul (H&agrave;n Quốc) lại cho rằng c&aacute;c hacker của Trung Quốc nhiều khả năng l&agrave; thủ phạm trong cuộc tấn c&ocirc;ng mới đ&acirc;y nhằm v&agrave;o Triều Ti&ecirc;n, nhất l&agrave; khi trong bối cảnh ch&iacute;nh phủ Trung Quốc cũng đang b&agrave;y tỏ sự kh&ocirc;ng h&agrave;i l&ograve;ng với những động th&aacute;i gần đ&acirc;y của Triều Ti&ecirc;n, c&ograve;n người d&acirc;n Trung Quốc cũng cho thấy sự phản đối với ch&iacute;nh phủ nước n&agrave;y.<br />\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<div>\r\n		<img _fl="" align="middle" alt="Chỉ một ngày sau màn ra mắt ấn tượng của Galaxy S 4, Samsung đã có sự thay đổi nhân sự khi bất ngờ" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Tech-in-week-GS4-4-f1e5d.jpg" style="MARGIN: 5px" width="450" /></div>\r\n</div>\r\n<p>\r\n	Tuần qua giới c&ocirc;ng nghệ đ&atilde; chứng kiến một quyết định kh&aacute; bất ngờ khi Andy Rubin, L&atilde;nh đạo bộ phận Android của Google v&agrave; cũng l&agrave; &ldquo;cha đẻ&rdquo; của nền tảng di động n&agrave;y đ&atilde; quyết định <a href="http://dantri.com.vn/suc-manh-so/cha-de-bat-ngo-tu-nhiem-tuong-lai-cua-android-bi-dat-dau-hoi-706916.htm"><b>r&uacute;t lui khỏi vị tr&iacute; hiện tại</b></a>.<br />\r\n	<br />\r\n	Đ&acirc;y được xem l&agrave; một quyết định kh&aacute; bất ngờ, nhất l&agrave; khi Android vẫn đang đạt được những th&agrave;nh c&ocirc;ng lớn tr&ecirc;n thị trường di động. Được biết Rubin vẫn sẽ tiếp tục l&agrave;m việc tại Google nhưng chưa r&otilde; sẽ đảm nhiệm vị tr&iacute; n&agrave;o.<br />\r\n	<br />\r\n	Người thay thế Andy Rubin l&agrave; Sundar Pichai, hiện l&agrave; Ph&oacute; chủ tịch phụ tr&aacute;ch bộ phận Chrome, Google Apps. Giới c&ocirc;ng nghệ v&agrave; nhiều người ho&agrave;i nghi rằng động th&aacute;i của Google l&agrave; để nhằm kết hợp Android v&agrave; Chrome OS trở th&agrave;nh một nền tảng thống nhất. Điều n&agrave;y chắc hẳn sẽ l&agrave;m ảnh hưởng kh&ocirc;ng nhỏ đến tương lai của nền tảng di động n&agrave;y.<br />\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="334" id="PlayerAS78a5c8a4550a4ef096d06e71e6ccb662" width="425"><param name="_cx" value="11244" /><param name="_cy" value="8837" /><param name="FlashVars" value="" /><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=78a5c8a4550a4ef096d06e71e6ccb662&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Google-shoe-f11f1.jpg" /><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=78a5c8a4550a4ef096d06e71e6ccb662&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Google-shoe-f11f1.jpg" /><param name="WMode" value="Transparent" /><param name="Play" value="-1" /><param name="Loop" value="-1" /><param name="Quality" value="High" /><param name="SAlign" value="LT" /><param name="Menu" value="-1" /><param name="Base" value="" /><param name="AllowScriptAccess" value="always" /><param name="Scale" value="NoScale" /><param name="DeviceFont" value="0" /><param name="EmbedMovie" value="0" /><param name="BGColor" value="425166" /><param name="SWRemote" value="" /><param name="MovieData" value="" /><param name="SeamlessTabbing" value="1" /><param name="Profile" value="0" /><param name="ProfileAddress" value="" /><param name="ProfilePort" value="0" /><param name="AllowNetworking" value="all" /><param name="AllowFullScreen" value="true" /><param name="AllowFullScreenInteractive" value="" /><param name="IsDependent" value="0" /><embed allowfullscreen="true" allowscriptaccess="always" bgcolor="#425166" flashvars="" height="334" id="78a5c8a4550a4ef096d06e71e6ccb662" name="78a5c8a4550a4ef096d06e71e6ccb662" quality="high" src="http://cache.hosting.vcmedia.vn/?key=78a5c8a4550a4ef096d06e71e6ccb662&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Google-shoe-f11f1.jpg" style="" type="application/x-shockwave-flash" width="425" wmode="transparent"></embed></object></div>\r\n<p>\r\n	<br />\r\n	Một th&ocirc;ng tin kh&aacute;c li&ecirc;n quan đến Google. Trong tuần qua tại Hội nghị về Truyền th&ocirc;ng v&agrave; &Acirc;m nhạc SWSX diễn ra ở Austin (bang Texas, Mỹ), Google đ&atilde; cho ra mắt sản phẩm nguy&ecirc;n mẫu về&hellip; <a href="http://dantri.com.vn/suc-manh-so/google-ap-u-y-tuong-doc-ve-giay-thong-minh-705628.htm"><b>gi&agrave;y th&ocirc;ng minh</b></a>.<br />\r\n	<br />\r\n	Chiếc gi&agrave;y th&ocirc;ng minh theo &yacute; tưởng của Google c&oacute; khả năng kết nối với smartphone của người d&ugrave;ng (chạy nền tảng Android) th&ocirc;ng qua Bluetooth v&agrave; gửi c&aacute;c th&ocirc;ng điệp d&iacute; dỏm đến cho người mang hay bạn b&egrave; của họ. Tuy nhi&ecirc;n, hiện chưa r&otilde; t&aacute;c dụng thực sự của sản phẩm độc đ&aacute;o n&agrave;y l&agrave; g&igrave;.<br />\r\n	<br />\r\n	Sau k&iacute;nh th&ocirc;ng minh v&agrave; giờ đ&acirc;y l&agrave; gi&agrave;y th&ocirc;ng minh, c&oacute; vẻ như Google đang dần chuyển sang lĩnh vực mới gi&agrave;u tiềm năng hơn so với thị trường di động hiện nay: thiết bị th&ocirc;ng minh c&oacute; thể mang l&ecirc;n người.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align="center">\r\n	<div>\r\n		<img _fl="" align="middle" alt="Tuần qua, Sony Việt Nam đã chính thức công bố" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Tech-in-week-GS4-6-f1e5d.jpg" style="MARGIN: 5px" width="450" /></div>\r\n</div>\r\n<p>\r\n	Tuần qua, Sony Việt Nam đ&atilde; ch&iacute;nh thức c&ocirc;ng bố <a href="http://dantri.com.vn/suc-manh-so/xperia-z-chinh-hang-co-gia-165-trieu-dong-tai-viet-nam-706966.htm"><b>gi&aacute; b&aacute;n của Xperia Z</b></a>, chiếc smartphone &ldquo;hot&rdquo; nhất hiện nay của Sony, tại thị trường Việt Nam.<br />\r\n	<br />\r\n	Theo đ&oacute;, chiếc smartphone c&oacute; thiết kế đẹp mắt v&agrave; cấu h&igrave;nh mạnh mẽ n&agrave;y sẽ được b&aacute;n ra với mức gi&aacute; 16,5 triệu đồng, một mức gi&aacute; &ldquo;ch&aacute;t&rdquo; với một chiếc smartphone. Tuy nhi&ecirc;n, với những g&igrave; m&agrave; Xperia thể hiện cũng như sự đ&aacute;nh gi&aacute; cao của giới c&ocirc;ng nghệ, hẳn c&oacute; l&yacute; do để nhiều người lựa chọn chiếc smartphone n&agrave;y bất chấp mức gi&aacute; cao của n&oacute;.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div align="right">\r\n	<b>T.Thủy</b></div>\r\n<p>\r\n	<input id="hidNextUsing" type="hidden" value="/c119s119/cong-nghe/trang-1.htm" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<div class="news-tag">\r\n	<div class="news-tag-list">\r\n		<span class="news-tagname">Xem th&ecirc;m :</span><span class="news-tags-item"><a href="/samsung.tag">Samsung</a>, <a href="/google.tag">Google</a>, <a href="/galaxy.tag">Galaxy</a>, <a href="/android.tag">Android</a>, <a href="/xperia.tag">Xperia</a>, <a href="/internet.tag">Internet</a>, <a href="/bac-trieu-tien.tag">Bắc Triều Ti&ecirc;n</a>, <a href="/han-quoc.tag">H&agrave;n Quốc</a>, <a href="/my.tag">Mỹ</a>, <a href="/trung-quoc.tag">Trung Quốc</a></span></div>\r\n</div>\r\n', '', 1, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/galaxy-s-4-trinh-lang-la-su-kien-cong-nghe-noi-bat-nhat-tuan-qua-708931.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:24', '“Galaxy-S-4-trinh-lang”-la-su-kien-cong-nghe-noi-bat-nhat-tuan-qua'),
(28, '\r\n Galaxy S 4, Galaxy Note II chuẩn bị lên đời Android 5.0', '', '\r\n Theo trang công nghệ <i>SamMobile </i>dẫn lời một nguồn tin giấu tên từ Samsung tiết lộ thì hãng công nghệ Hàn Quốc đã lên sẵn danh sách những sản phẩm sẽ được nâng cấp lên nền tảng Android 5.0 đầu tiên, ngay sau khi Google giới thiệu phiên bản mới nhất này.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" alt="Không quá bất ngờ khi Galaxy S 4 sẽ sớm được nâng cấp lên Android 5.0" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Android-5-Samsung-1-7467b.jpg" width=450 _fl=""></div><span style="FONT-SIZE: 10pt">Không quá bất ngờ khi Galaxy S 4 sẽ sớm được nâng cấp lên Android 5.0</span><br></span></div><br>Cụ thể, Samsung sẽ chỉ dự kiến cho phép 5 sản phẩm của mình nâng cấp phiên bản Android mới, bao gồm Galaxy S III, Galaxy S 4, Galaxy Note II, Galaxy Note 8.0 và Galaxy Note 10.1. Dĩ nhiên, không quá ngạc nhiên khi Galaxy S III, chiếc smartphone bán chạy nhất của Samsung và Galaxy S 4, chiếc smartphone mới nhất của hãng, có mặt trong danh sách này.<br><br>Bên cạnh đó, nguồn tin của <i>SamMobile </i>cũng cho biết loạt sản phẩm của Samsung sẽ “kết thúc vòng đời” với phiên bản tối đa Android 4.2 Jelly Bean và sẽ không được nâng cấp lên Android 5.0 mới nhất, bao gồm Galaxy S II, Galaxy S II Plus, Galaxy Grand (bao gồm cả phiên bản 2 SIM DUOS), Galaxy Ace 2, Galaxy S III mini, Galaxy Beam, Galaxy Express, Galaxy S Advance, Galaxy Premier, Galaxy Note, Galaxy Y (Bao gồm cả phiên bản 2 SIM DUOS), Galaxy Game và Galaxy X Cover 2.<br><br>Đây phần lớn là những phiên bản cũ của Samsung, với cấu hình không quá mạnh nên việc Samsung bỏ qua không nâng cấp những sản phẩm này lên phiên bản Android mới nhất là điều dễ hiểu.<br><br>Ngoài ra, nguồn tin này cũng cho biết thêm Samsung sẽ có những gói nâng cấp có giá trị dành cho những thiết bị chạy Android tầm trung được ra mắt trong thời gian từ 2012 đến 2013. <br><br>Hiện vẫn chưa có bất kỳ thông tin nào về sự tồn tại và xuất hiện của phiên bản Android 5.0, ngoại trừ nhiều tin đồn cho rằng phiên bản Android 5.0 này sẽ có tên mã Key Lime Pie và dự kiến sẽ được Google trình làng tại Hội nghị Google I/O diễn ra vào tháng 5 tới đây.<br><br>\r\n<div align=right><b>T.Thủy</b><br>Theo <i>SamMobile</i></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/android.tag'' >Android</a>, <a href=''/galaxy-note.tag'' >Galaxy Note</a>, <a href=''/samsung.tag'' >Samsung</a>, <a href=''/google.tag'' >Google</a>, <a href=''/elly-bean.tag'' >Jelly Bean</a>, <a href=''/internet.tag'' >Internet</a>, <a href=''/han-quoc.tag'' >Hàn Quốc</a>, <a href=''/key-lime-pie.tag'' >Key Lime Pie</a>, <a href=''/danh-sach.tag'' >danh sách</a>, <a href=''/nguon-tin.tag'' >nguồn tin</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/galaxy-s-4-galaxy-note-ii-chuan-bi-len-doi-android-50-708856.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:24', ''),
(29, '\r\n Zalo: Từ giấc mơ lãng mạn đến ngôi vị số 1', '', '\r\n <div>Đầu năm 2012, khi quyết định tự làm một ứng dụng nhắn tin miễn phí thuần Việt trên di động mà không phát hành sản phẩm của nước ngoài, nhóm phát triển Zing bị coi là “những chàng Đông Ki Sốt”. Không có nhiều người tin rằng, một sản phẩm Việt Nam có cái tên Zalo lại có thể cạnh tranh và chiến thắng những người khổng lồ, đã có tiếng tăm trong lĩnh vực này trên toàn thế giới như Viber, Wechat, Line, Kakao Talk, hay WhatsApp…</div>\r\n<div align=center><span style="FONT-FAMILY: Tahoma"><img style="MARGIN: 5px" alt="Đội ngũ Zalo những ngày đầu tiên." align=center src="http://dantri4.vcmedia.vn/IQ5RMXuLUXlq12iZhwxn/Image/2013/03/Doi-ngu-Zalo-da-chinh-946e2.jpg" width=450 _fl=""></span></div>\r\n<div align=center><span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Đội ngũ Zalo những ngày đầu tiên.</span></div>\r\n<div>&nbsp;</div>\r\n<div>Tháng 12/2011, nhóm phát triển Zalo khởi động và dự kiến ra sản phẩm sau 6 tháng. Trong khi Zalo chưa ra đời, tháng 4/2012, Wechat đã đổ bộ vào Việt Nam với những chiến dịch quảng bá ồ ạt, đạt gần 1 triệu người dùng trong gần 3 tháng và thống trị thị trường ứng dụng nhắn tin miễn phí trên di động. </div>\r\n<p>Dù team Zalo làm việc một cách “điên cuồng”, tháng 8/2012, sản phẩm thử nghiệm đầu tiên mới ra mắt. Thế nhưng, ứng dụng nhắn tin miễn phí thuần Việt này không có một sự khởi đầu suôn sẻ. Những điều tưởng chừng như thế mạnh của sản phẩm như dùng Zing ID để đăng nhập hay sử dụng chung nền tảng chat của mạng xã hội Zing Me, lại là những cản trở, giới hạn khi tiếp cận nhóm khách hàng trên di động. </p>\r\n<p>Team làm Zalo đứng trước những thách thức khủng khiếp. Họ bị vây quanh bởi sự hoài nghi ngày càng lớn với suy nghĩ: “Sản phẩm công nghệ cao của người Việt thì sức mấy mà đấu với những người khổng lồ của thế giới!”.</p>\r\n<p>Ba tháng sau (11/2012), phiên bản chính thức của Zalo mới ra mắt với những thay đổi rất lớn so với ban đầu, chậm so với kế hoạch 6 tháng và chậm so với Wechat tới 8 tháng. Lúc đó, ngay cả những người lạc quan nhất cũng nghi ngờ về khả năng thành công của ứng dụng này bởi “ông kẹ” Wechat đang thống lĩnh thị trường và có một khoảng cách cực lớn so với “lính mới” Zalo.</p>\r\n<p>Thế nhưng, chỉ sau hơn 1 tháng, điều khó tin đã xảy ra. Trên bảng xếp hạng App Store Việt Nam, Zalo thực hiện một cú nhảy vọt ngoạn mục lên vị trí số 1 vào 8/1/2013 – vượt qua Wechat và liên tục giữ “ngôi vương” tại đây cho tới nay. </p>\r\n<div>Một ứng dụng Việt, mới ra đời lại chinh phục vị trí số 1 tại App Store – “chiến trường” khốc liệt nhất, được đánh giá bởi các khách hàng iOS là một minh chứng hiển nhiên cho chất lượng sản phẩm. Đây cũng là điều bất ngờ với rất nhiều chuyên gia về công nghệ.</div>\r\n<div align=center><img alt="Cơn sốt Zalo trong giới trẻ" align=center src="http://dantri4.vcmedia.vn/IQ5RMXuLUXlq12iZhwxn/Image/2013/03/con-sot-ZaloIMG_0602-946e2.jpg" width=450 _fl=""></div>\r\n<div align=center><span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Cơn sốt Zalo trong giới trẻ</span></div>\r\n<p>Cuối tháng 1/2013, thị trường càng sôi động hơn khi hai ứng dụng từ Nhật, Hàn Quốc là Line và Kakao Talk đổ tiền ào ạt, tiến hành các hoạt động marketing rầm rộ. Tuy nhiên, ứng dụng nhắn tin miễn phí thuần Việt&nbsp; Zalo vẫn được người dùng trong nước ưu ái nhiều nhất và có tốc độ tăng trưởng chóng mặt, vươn lên vị trí số 1 với khoảng 1 triệu người dùng vào cuối tháng 2/2013. Cũng trong tháng 2/2013, trang công nghệ Techniasia chọn Zalo nằm trong danh sách những ứng dụng công nghệ trên di động sáng tạo nhất châu Á.</p>\r\n<p>Trên thực tế, khẩu hiệu trên mà team Zalo với hơn 80 người đều tâm niệm bắt nguồn từ việc toàn bộ nhóm đều coi đây là sản phẩm chiến lược mà nếu thất bại họ sẽ không có đường lùi.</p>\r\n<p>Đến nay, sản phẩm nhắn tin miễn phí thuần Việt đang tạo ra một “làn sóng mới”. Nó hấp dẫn người dùng không chỉ bởi miễn phí mà còn ở phương thức liên lạc mới mẻ mà trước đây họ chưa có: nhắn tin bằng giọng nói (dùng được cả với mạng 2G và 2,5G – điều mà các ứng dụng nước ngoài chưa làm được) và vẽ hình biểu cảm trong khi trao đổi.</p>\r\n<p>Những chàng trai Zalo sẽ đem đến điều bất ngờ gì tiếp theo sau những cơn sốt của giới trẻ và sự thích thú đặc biệt của cả người già? Thời gian sẽ cho câu trả lời với câu chuyện cổ <a name=_GoBack></a>tích công nghệ Việt thời hiện đại.</p>\r\n<p align=right><b>HL</b></p><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/viet-nam.tag'' >Việt Nam</a>, <a href=''/han-quoc.tag'' >Hàn Quốc</a>, <a href=''/app-store.tag'' >App Store</a>, <a href=''/ios.tag'' >Ios</a>, <a href=''/zing-me.tag'' >Zing Me</a>, <a href=''/nhat.tag'' >Nhật</a>, <a href=''/mien-phi.tag'' >miễn phí</a>, <a href=''/thi-truong.tag'' >thị trường</a>, <a href=''/nhan-tin.tag'' >nhắn tin</a>, <a href=''/nuoc-ngoai.tag'' >nước ngoài</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/zalo-tu-giac-mo-lang-man-den-ngoi-vi-so-1-708862.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:24', ''),
(30, '\r\n CEO BlackBerry chê iPhone… lỗi thời', '', '\r\n Trong bài trả lời phỏng vấn với tờ báo Financial Review của Úc, Thorsten Heins, CEO của hãng điện thoại Canada BlackBerry (tên mới của RIM) đã có những chia sẻ về ngành công nghiệp smartphone, các đối thủ cạnh tranh và những kế hoạch của BlackBerry trong tương lai.<br><br>Và đặc biệt, Heins đã có những nhận xét có phần gây sốc về Apple, một trong những lý do chính gây ra sự khó khăn hiện tại của BlackBerry trên thị trường smartphone ngày nay.<br><br>“Apple đã làm được một việc thần kỳ khi mang các thiết bị cảm ứng đến với thị trường… Họ đã làm được điều thần kỳ với giao diện người dùng. Họ là một biểu tượng của thiết kế”, Heins nhận xét về Apple.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" alt="CEO BlackBerry cho rằng iPhone đã lỗi thời vì Apple ngại thay đổi?" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/BB-iPhone-1-9a120.jpg" width=450 _fl=""></div><span style="FONT-SIZE: 10pt">CEO BlackBerry cho rằng iPhone đã lỗi thời vì Apple ngại thay đổi?</span><br></span></div><br>“Đó là lý do tại sao họ đã rất thành công, chúng tôi phải thừa nhận và tôn trọng điều này. Tuy nhiên, tôi đoán rằng lịch sử sẽ được lặp lại… tốc độ đổi mới của ngành công nghiệp smartphone diễn ra rất nhanh chóng và nếu bạn không đổi mới cùng với tốc độ đó, bạn sẽ bị nhanh chóng thay thế. Với tất cả sự tôn trọng, tôi phải thừa nhận rằng giao diện trên iPhone đã có tuổi đời hơn 5 năm và nó đã trở nên lỗi thời”.<br><br>Dĩ nhiên, Heins hoàn toàn có cơ sở với nhận xét này. <br><br>Mặc dù Apple liên tục nâng cấp phiên bản và thêm vào nhiều tính năng mới cho nền tảng di động iOS trong suốt thời gian qua, trên thực tế, giao diện và cách thức hoạt động của iOS đã không hề có sự thay đổi nào kể từ khi nó xuất hiện trên phiên bản iPhone đầu tiên ra mắt năm 2007.<br><br>Có vẻ như với Apple, giao diện và cách thức hoạt động của iOS đã trở nên quá hoàn hảo và quen thuộc với người dùng nên Apple không muốn mạo hiểm thay đổi, bởi lẽ điều này có thể vô hình khiến Apple mất đi những người dùng vốn đã quen thuộc và yêu thích với iOS hiện tại. Trong khi đó, một giám đốc của Apple mới đây đã lên tiếng chế nhạo chiếc smartphone Galaxy S4 mới được ra mắt gần đây của Samsung thiếu đi sự đổi mới.<br><br>Về phần mình, Heins hy vọng nền tảng BlackBerry 10 sẽ tìm được chỗ đứng sau khi được ra mắt thị trường Mỹ. Chiếc smartphone Z10 sẽ được bán tại Mỹ vào 22/3 tới đây thông qua nhà mạng AT&amp;T và ngày 28/3 thông qua nhà mạng Herizon.<br><br>Heins cũng không quên “khoe” việc kho ứng dụng của BlackBerry 10 đã đạt mốc 100 ngàn ứng dụng (kho ứng dụng này có 70.000 ứng dụng khi lần đầu ra mắt vào đầu tháng 2 vừa qua). <br><br>Mặc dù nhiều ứng dụng “hot” trên 2 nền tảng Android và iOS vẫn còn thiếu trên BlackBerry 10 (chẳng hạn như Instagram), Heins cho biết công ty vẫn đang tiếp tục đàm phán với các nhà phát triển để sớm đưa những ứng dụng này lên nền tảng của mình.<br><br>Heins cũng cho biết smartphone là thị trường quan trọng trước mắt của BlackBerry, do vậy hãng công nghệ này sẽ chỉ tập trung vào phân khúc này trước khi nghĩ đến phân khúc máy tính bảng.<br><br>“Nếu làm một điều gì đó về máy tính bảng, tôi muốn nó phải thực sự đáng kể và có ý nghĩa”, Heins chia sẻ. “Nói một cách thẳng thắn, nó cần phải có lợi nhuận tốt”.<br><br>Chiếc máy tính bảng Blackberry PlayBook của BlackBerry trước đây được xem là một “thảm họa”. BlackBerry đã buộc phải giảm giá bán của chiếc máy tính bảng này xuống còn 40% so với mức giá ban đầu để có thể đẩy đi lượng hàng tồn kho. <br><br>Hiện nền tảng di động BlackBerry 10 được xem là “phao cứu sinh” để giúp BlackBerry có thể vượt qua những khó khăn hiện tại, và chiếc smartphone BlackBerry Z10 đang dần giúp BlackBerry đạt được những thành công bước đầu.<br><br>\r\n<div align=right><b>T.Thủy</b><br>Theo <i>IW </i><br></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/blackberry.tag'' >BlackBerry</a>, <a href=''/apple.tag'' >Apple</a>, <a href=''/iphone.tag'' >Iphone</a>, <a href=''/ios.tag'' >Ios</a>, <a href=''/my.tag'' >Mỹ</a>, <a href=''/thay-doi.tag'' >thay đổi</a>, <a href=''/android.tag'' >Android</a>, <a href=''/galaxy.tag'' >Galaxy</a>, <a href=''/instagram.tag'' >Instagram</a>, <a href=''/samsung.tag'' >Samsung</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/ceo-blackberry-che-iphone-loi-thoi-708804.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:25', ''),
(31, '\r\n Windows Phone 7.8 và Windows Phone 8 sẽ “hết đời” từ năm 2014', '', '\r\n <div style="MARGIN: 0in 0in 0pt" class=MsoNormal align=center><img src="http://dantri4.vcmedia.vn/2ZQdZNVEKFCFuBcccccc/Image/2013/03/WP-83e33.jpg" alt="Windows Phone 7.8 và Windows Phone 8 sẽ “hết đời” từ năm 2014"><br><br></div>\r\n<div style="MARGIN: 0in 0in 0pt" class=MsoNormal>Microsoft vừa công bố thời điểm chấm dứt hỗ trợ 2 hệ điều hành di động của mình trên trang web hỗ trợ khách hàng, với Windows Phone 7.8 là ngày 9/9/2014, trước đó 2 tháng, Windows Phone 8 sẽ bị ngừng hỗ trợ từ ngày 8/7/2014.<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></div>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal><o:p>&nbsp;</o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal>Sự chênh lệch thời gian này xuất phát từ thời điểm phát hành của 2 hệ điều hành. Microsoft cho biết vòng đời của sản phẩm sẽ kéo dài 18 tháng. Windows Phone 8 đã được tung ra vào ngày 14/12/2012 trong khi 2 tháng sau, ngày 9/2/2013 Windows Phone 7.8 mới xuất hiện.<o:p></o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal><o:p>&nbsp;</o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal>Windows Phone 8 là phiên bản hệ điều hành di động mới nhất, tiên tiến nhất hiện nay của Microsoft, Windows Phone 7.8 lại là bản nâng cấp mà hãng dành cho chủ sở hữu thiết bị chạy Windows Phone 7 chưa sẵn sàng mua một thiết bị mới cài sẵn Windows Phone 8, do đó, Windows Phone 7.8 chưa mang hết những ưu điểm nổi trội cũng như tính năng mà Microsoft muốn có trên phiên bản hệ điều hành dành cho thiết bị cầm tay.<o:p></o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal><o:p>&nbsp;</o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal>Việc Microsoft ấn định thời gian ngưng hỗ trợ Windows Phone 8 và Windows Phone 7.8 cũng không có gì đáng ngạc nhiên. Các đối thủ khác điều luôn gấp rút tung ra phiên bản mới với nhiều cải tiến vượt trội nhằm gia tăng khả năng cạnh tranh trên thị trường hệ điều hành di động. Apple là một ví dụ, iOS có phiên bản mới mỗi năm, và khi hầu hết người dùng đã nâng cấp lên phiên bản mới thì việc cập nhật cho các phiên bản cũ không còn nhiều ý nghĩa.<o:p></o:p></p>\r\n<p style="MARGIN: 0in 0in 0pt" class=MsoNormal><o:p>&nbsp;</o:p></p>\r\n<div style="MARGIN: 0in 0in 0pt" class=MsoNormal>Việc công bố thời điểm kết thúc hỗ trợ các phiên bản Windows Phone hiện tại cũng đồng nghĩa với tín hiệu cho thấy Microsoft đang tích cực chuẩn bị ra mắt hệ điều hành mới hơn, tiên tiến hơn trong tương lai gần.</div>\r\n<div style="MARGIN: 0in 0in 0pt" class=MsoNormal>&nbsp;</div>\r\n<div style="MARGIN: 0in 0in 0pt" class=MsoNormal align=right><strong>Vinh Anh<o:p></o:p></strong></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/windows-phone.tag'' >Windows Phone</a>, <a href=''/microsoft.tag'' >Microsoft</a>, <a href=''/nen-tang.tag'' >nền tảng</a>, <a href=''/ios.tag'' >Ios</a>, <a href=''/thiet-bi.tag'' >thiết bị</a>, <a href=''/keo-dai.tag'' >kéo dài</a>, <a href=''/ho-tro.tag'' >hỗ trợ</a>, <a href=''/phan-mem.tag'' >phần mềm</a>, <a href=''/di-dong.tag'' >di động</a>, <a href=''/he-dieu-hanh.tag'' >hệ điều hành</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/windows-phone-78-va-windows-phone-8-se-het-doi-tu-nam-2014-708792.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:25', '');
INSERT INTO `n_tintuc` (`id`, `tieude`, `tieudee`, `noidung`, `noidunge`, `duyet`, `hinhanh`, `urlGoc`, `source`, `ngay`, `alias`) VALUES
(32, '\r\n Sony ra mắt bộ đôi smartphone tầm trung cấu hình mạnh mẽ', '', '\r\n Trong 2 chiếc smartphone mới vừa được Sony trình làng, Xperia SP là phiên bản lớn hơn và cao cấp hơn, được trang bị màn hình rộng 4,6-inch độ phân giải HD (1280x720) sử dụng công nghệ Mobile Bravia Engine 2 độc quyền của Sony, cho chất lượng hình ảnh sáng hơn và góc nhìn rộng hơn.<br><br>Cấu hình bên trong của máy là vi xử lý Qualcomm Snapdragon S4 Pro lõi kép tốc độ 1.7GHz kèm vi xử lý đồ họa Adreno 320. Máy có 1GB bộ nhớ RAM kèm 8GB ổ cứng lưu trữ, hỗ trợ mở rộng thông qua thẻ nhớ ngoài.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" alt="Xperia SP là chiếc smartphone tầm trung nhưng có cấu hình mạnh mẽ" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-1-042c3.jpg" width=450 _fl=""></div><span style="FONT-SIZE: 10pt">Xperia SP là chiếc smartphone tầm trung nhưng có cấu hình mạnh mẽ</span><br></span></div><br>Mặt sau của Xperia SP là camera 8 megapixel hỗ trợ quay video Full HD 1080p và chế độ quay video HDR. Sony cũng đã trang bị cảm biến camera Exmos RS cho chiếc smartphone mới của mình mà hãng công nghệ Nhật Bản khẳng định sẽ mang lại hình ảnh rõ nét và chất lượng màu sắc hoàn hảo hơn.<br><br>Giống một số phiên bản Xperia ra mắt trước đây, phía dưới của Xperia SP (cả mặt trước và sau) cũng được trang bị một dải đèn nhỏ để có thể thay đổi màu sắc tùy theo điều kiện nhất định, chẳng hạn người dùng có thể thiết lập để thay đổi màu sắc cảnh báo về những cuộc gọi nhỡ hay tin nhắn đến…<br><br>Xperia SP sử dụng thỏi pin có dung lượng 2.370mAh, hỗ trợ kết nối Wifi, Bluetooth, NFC, 4G LTE… và hoạt động trên nền tảng Android 4.1 Jelly Bean.<br><br>Sản phẩm có giá bán khoảng 543USD tại thị trường châu Âu, tuy nhiên Sony chưa công bố thời điểm xuất hiện của máy.<br><br><i>Một vài hình ảnh chính thức của Xperia SP:</i><br><br>\r\n<div align=center>\r\n<div><img style="MARGIN: 5px" alt="Video giới thiệu về Xperia SP:" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-2-042c3.jpg" width=350 _fl=""></div>\r\n<div><img style="MARGIN: 5px" alt="Video giới thiệu về Xperia SP:" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-3-042c3.jpg" width=350 _fl=""></div>\r\n<div><img style="MARGIN: 5px" alt="Video giới thiệu về Xperia SP:" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-4-042c3.jpg" width=343 _fl=""></div>\r\n<div><img style="MARGIN: 5px" alt="Video giới thiệu về Xperia SP:" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-5-042c3.jpg" width=450 _fl=""></div><br></div><i>Video giới thiệu về Xperia SP:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS4485e6515959474dab9c34383219073b classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=4485e6515959474dab9c34383219073b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-d5d45.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=4485e6515959474dab9c34383219073b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-d5d45.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true"><param name="AllowFullScreenInteractive" value=""><param name="IsDependent" value="0">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="4485e6515959474dab9c34383219073b" id="4485e6515959474dab9c34383219073b" style="" src="http://cache.hosting.vcmedia.vn/?key=4485e6515959474dab9c34383219073b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-d5d45.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br><i>Video trải nghiệm thực tế Xperia SP:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS0e7a6df717304b388077f3ea6215e099 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=0e7a6df717304b388077f3ea6215e099&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-handson-4c79a.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=0e7a6df717304b388077f3ea6215e099&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-handson-4c79a.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true"><param name="AllowFullScreenInteractive" value=""><param name="IsDependent" value="0">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="0e7a6df717304b388077f3ea6215e099" id="0e7a6df717304b388077f3ea6215e099" style="" src="http://cache.hosting.vcmedia.vn/?key=0e7a6df717304b388077f3ea6215e099&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-SP-handson-4c79a.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br>Ra mắt cùng với Xperia SP là phiên bản nhỏ hơn có tên gọi Xperia L, cũng hoạt động trên nền tảng Android 4.1 Jelly Bean.<br><br>Xperia L có màn hình rộng 4,3-inch nhưng chỉ có độ phân giải 854x480. Máy sử dụng vi xử lý lõi kép tốc độ 1GHz. Cũng như Xperia SP, Sony cũng trang bị cảm biến camera Exmos RS cho Xperia L. Chiếc smartphone này có camera 8 megapixel nhưng&nbsp; chỉ hỗ trợ quay video HD 720p. Sản phẩm chỉ hỗ trợ kết nối tối đa 3G.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" alt="Xperia L có cấu hình thấp hơn nhưng được trang bị nhiều tính năng quan trọng" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-SP-6-042c3.jpg" width=450 _fl=""></div><span style="FONT-SIZE: 10pt">Xperia L có cấu hình thấp hơn nhưng được trang bị nhiều tính năng quan trọng</span><br></span></div><br>Mặc dù là phiên bản giá rẻ và có cấu hình thấp hơn tuy nhiên Xperia L cũng được trang bị nhiều tính năng tương tự phiên bản Xperia SP, như tính năng “Stamina” cho phép tối ưu hệ thống để kéo dài thời lượng pin hay tính năng một chạm cho phép chia sẻ nội dung trên màn hình smartphone lên smartTV để trình chiếu video hay hình ảnh thông qua kết nối NFC…<br><br>Mức giá bán của Xperia L chưa được công bố, tuy nhiên chắc hẳn rằng mức giá này sẽ thấp hơn so với mức giá của Xperia SP do có cấu hình thấp hơn.<br><br><i>Video giới thiệu về Xperia L:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS62d056ab97ae4138ba35f2497a1086e7 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=62d056ab97ae4138ba35f2497a1086e7&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-307b8.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=62d056ab97ae4138ba35f2497a1086e7&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-307b8.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true"><param name="AllowFullScreenInteractive" value=""><param name="IsDependent" value="0">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="62d056ab97ae4138ba35f2497a1086e7" id="62d056ab97ae4138ba35f2497a1086e7" style="" src="http://cache.hosting.vcmedia.vn/?key=62d056ab97ae4138ba35f2497a1086e7&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-307b8.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br><i>Video trải nghiệm thực tế Xperia L:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerASb7f9678fdeeb4d16a4c08d5077a7b724 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=b7f9678fdeeb4d16a4c08d5077a7b724&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-hands-on-6a020.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=b7f9678fdeeb4d16a4c08d5077a7b724&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-hands-on-6a020.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true"><param name="AllowFullScreenInteractive" value=""><param name="IsDependent" value="0">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="b7f9678fdeeb4d16a4c08d5077a7b724" id="b7f9678fdeeb4d16a4c08d5077a7b724" style="" src="http://cache.hosting.vcmedia.vn/?key=b7f9678fdeeb4d16a4c08d5077a7b724&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-L-hands-on-6a020.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br>\r\n<div align=right><b>T.Thủy</b><br></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/xperia.tag'' >Xperia</a>, <a href=''/sony.tag'' >Sony</a>, <a href=''/elly-bean.tag'' >Jelly Bean</a>, <a href=''/android.tag'' >Android</a>, <a href=''/pro.tag'' >Pro</a>, <a href=''/san-pham.tag'' >Sản phẩm</a>, <a href=''/video.tag'' >Video</a>, <a href=''/nhat-ban.tag'' >Nhật Bản</a>, <a href=''/wifi.tag'' >Wifi</a>, <a href=''/bluetooth.tag'' >Bluetooth</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/sony-ra-mat-bo-doi-smartphone-tam-trung-cau-hinh-manh-me-708700.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:25', ''),
(33, '\r\n Đến lượt Nokia “đá đểu” Samsung và Galaxy S4', '', '\r\n Không lâu sau khi Samsung trình làng chiếc smartphone mạnh mẽ nhất của mình - Galaxy S 4 tại sự kiện đặc biệt vào sáng 15/3 vừa qua (theo giờ Việt Nam), Nokia đã lập tức lên tiếng chế giễu Samsung và chiếc smartphone mới của hãng công nghệ Hàn Quốc. <br><br>Theo đó, Nokia đã cho đăng tải lên trang Twitter chính thức của hãng một hình ảnh trong đó cho thấy một sinh viên đang cố gắng sao chép bài của một sinh viên khác trong khi đang làm bài thi. Trên tấm bảng phía sau 2 sinh viên còn xuất hiện nội dung cho biết môn thi mà họ đang thực hiện là “Tập trung vào sự đổi mới của người dùng”, chính là thông điệp mà Samsung đưa ra để quảng bá về chiếc smartphone Galaxy S4 của mình. <br><br>Kèm theo hình ảnh này là thông điệp “Hãy đoán ai là ai”.<br><br><div align="center"><div><img _fl="" style="margin: 5px;" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Nokia-Samsung-1-ab548.jpg" align="middle" width="450" alt="Hình ảnh đá đểu Samsung trên trang Twitter của Nokia"></div><span style="font-family: Tahoma; font-size: 10pt;">Hình ảnh "đá đểu" Samsung trên trang Twitter của Nokia</span><br></div><br>Dĩ nhiên, Nokia không nêu đích danh Samsung trong đoạn nội dung mình đăng tải, tuy nhiên giới công nghệ lẫn những ai tinh ý cũng có thể dễ dàng đoán ra hàm ý mà Nokia muốn gửi đi trong hình ảnh này là gì. Chắc hẳn rằng Nokia đang muốn ám chỉ rằng Samsung chỉ đang sao chép Nokia trong việc cải thiện rải nghiệm của người dùng<br><br>Chưa dừng lại ở đó, Nokia lại tiếp tục cho đăng tải một hình ảnh khác lên trang Twitter của mình, trong đó xuất hiện chiếc smartphone Lumia của hãng, với màn hình hiển thị nội dung có tiêu đề “Sự đổi mới và sự sao chép”, trong đó Nokia đã liệt kê ra các mục đồng thời đánh dấu vào 2 mục mà hãng điện thoại Phần Lan cho rằng Samsung đã sao chép của mình, đó là tính năng sạc không dây và màn hình cảm ứng có thể sử dụng khi mang găng tay (2 tính năng này đều được Samsung trang bị cho Galaxy S4 của hãng).<br><br><div align="center"><div><img _fl="" style="margin: 5px;" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Nokia-Samsung-2-ab548.jpg" align="middle" width="450" alt="Nokia ám chỉ Samsung sao chép các tính năng của hãng, nhưng không thể sao chép hết"></div><span style="font-family: Tahoma; font-size: 10pt;">Nokia ám chỉ Samsung sao chép các tính năng của hãng, nhưng không thể sao chép hết</span><br></div><br>Dĩ nhiên, trong danh mục này Nokia cũng không quên liệt kê ra những tính năng vượt trội của Lumia 920 mà Galaxy S4 không có được, như camera công nghệ PureView, dịch vụ âm nhạc miễn phí Nokia Music, tính năng City Lens hay phong cách thiết kế của Lumia 920 vượt trội hơn so với Galaxy S 4.<br><br>Trước Nokia, LG và HTC đã đồng loạt có những màn “chơi đểu” Samsung ngay trước giờ sự kiện ra mắt Galaxy S 4 diễn ra. Đầu tiên là việc LG thuê một bảng quảng cáo to hơn và đẹp hơn, ngay phía trên bảng quảng cáo của Samsung về sự kiện ra mắt Galaxy S4 trên Quảng trường Thời đại. <br><br>Sau đó đến lượt HTC xuất hiện trước cửa địa điểm tổ chức sự kiện của Samsung để phát thức ăn và nước uống miễn phí cho những người đến dự sự kiện, dĩ nhiên không quên kèm theo những hình ảnh quảng cáo cho chiếc smartphone HTC One vừa được trình làng gần đây.<br><br>Có vẻ như sự “bùng nổ” của Samsung trên thị trường smartphone đang khiến các đối thủ cảm thấy “nóng mặt”. Hàng loạt hãng công nghệ đã đồng thời “ném đá” Samsung cùng với chiếc smartphone Galaxy S4 mới nhất vừa được trình làng. Đặc biệt, Nokia là hãng có vẻ như cho thấy sự “thù địch” nhất đối với Samsung. Mới đây hãng điện thoại Phần Lan cũng đã lên tiếng ủng hộ Apple trong cuộc chiến pháp lý giữa “quả táo” với Samsung tại Mỹ.<br><br><b>Nokia “khoe” chức năng camera thiếu sáng của Lumia 920 vượt trội so với Galaxy S III</b><br><br>Trong một động thái liên quan khác, Nokia mới đây đã tung ra một đoạn video trong đó có sự so sánh về khả năng quay video và chụp ảnh của Lumia 920 với Galaxy S III của Samsung. <br><br>Trong đoạn clip, Nokia đã cho thấy khả năng vượt trội của công nghệ PureView trên camera của Lumia 920 khi có thể chụp được cả số điện thoại của cô gái ở điều kiện thiếu sáng, trong khi đó với camera của Galaxy S III chỉ là một hình ảnh tăm tối.<br><br>Tuy nhiên, Nokia lại mới chỉ so sánh Lumia 920 với Galaxy S III, chiếc smartphone thế hệ cũ của Samsung, chứ chưa thể có cơ hội để so sánh với Galaxy S 4 thế hệ mới nhất. Có lẽ khi Galaxy S 4 chính thức xuất hiện trên thị trường, Nokia sẽ lại có một cách thức mới để “đá đểu” đối thủ của mình.<br><br><div align="center"><object id="PlayerAS0b3f827e03024b76b0b32070e76f669e" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="334" width="425"><param name="movie" value="http://cache.hosting.vcmedia.vn/?key=0b3f827e03024b76b0b32070e76f669e&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Lumia920-GalaxySIII-0ceeb.jpg"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><param value="#425166" name="bgcolor"><param name="wmode" value="transparent"><embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="0b3f827e03024b76b0b32070e76f669e" id="0b3f827e03024b76b0b32070e76f669e" style="" src="http://cache.hosting.vcmedia.vn/?key=0b3f827e03024b76b0b32070e76f669e&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Lumia920-GalaxySIII-0ceeb.jpg" type="application/x-shockwave-flash" height="334" width="425"></object><br></div><br><div align="right"><b>Phạm Thế Quang Huy</b><br></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/samsung.tag'' >Samsung</a>, <a href=''/nokia.tag'' >Nokia</a>, <a href=''/galaxy-s-iii.tag'' >Galaxy S III</a>, <a href=''/lumia.tag'' >Lumia</a>, <a href=''/twitter.tag'' >Twitter</a>, <a href=''/phan-lan.tag'' >Phần Lan</a>, <a href=''/han-quoc.tag'' >Hàn Quốc</a>, <a href=''/apple.tag'' >Apple</a>, <a href=''/quang-truong-thoi-dai.tag'' >Quảng trường Thời đại</a>, <a href=''/viet-nam.tag'' >Việt Nam</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/den-luot-nokia-da-deu-samsung-va-galaxy-s4-708688.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:26', ''),
(34, '\r\n Độc đáo cỗ máy… gấp máy bay giấy được ráp từ LEGO', '', '\r\n Trò chơi lắp ráp LEGO là một trong những trò chơi dành cho trẻ em phổ biến nhất thế giới. Tuy nhiên nhờ vào những mảnh ghép của trò chơi dành cho trẻ em này, không ít những sản phẩm độc đáo mang tính công nghệ cao được ra đời và hoàn thiện.<br><br>Mới đây, một người Thụy Điển có nick name Hknssn đã cho đăng tải một đoạn video về một cỗ máy hoàn chỉnh được lắp ráp hoàn toàn bằng LEGO, với chức năng duy nhất đó là xếp một chiếc máy bay giấy. Mọi quá trình của cỗ máy đều được thực hiện một cách tự động, từ quá trình nạp giấy, gấp các mép giấy để hình thành chiếc máy bay và thậm chí là chức năng phóng chiếc máy bay ra khỏi cỗ máy.<br><br>Hknssn cho biết cỗ máy của mình có thể phóng máy bay đi với quãng đường chỉ xa khoảng 3 mét, tuy nhiên trong tương lai, tác giả này dự định sẽ nâng cấp cỗ máy để có thể phóng máy bay giấy đi xa với quãng đường lên đến 10 mét.<br><br>Nhiều người sau khi xem đoạn clip trên Youtube đã phải thán phục tài năng của Hknssn, cả về ý tưởng lẫn cách thức hoạt động của cỗ máy đặc biệt này.<br><br><i>Video về cỗ máy gấp máy bay giấy làm từ LEGO:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS710b67f327aa4b5198686a5e704f03ac classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=710b67f327aa4b5198686a5e704f03ac&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/LEGO-paperplane-39728.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=710b67f327aa4b5198686a5e704f03ac&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/LEGO-paperplane-39728.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="710b67f327aa4b5198686a5e704f03ac" id="710b67f327aa4b5198686a5e704f03ac" style="" src="http://cache.hosting.vcmedia.vn/?key=710b67f327aa4b5198686a5e704f03ac&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/LEGO-paperplane-39728.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br>Trước đây, <i>Dân trí</i> cũng đã từng giới thiệu <a href="http://dantri.com.vn/suc-manh-so/co-may-dac-biet-lap-rap-bang-lego-khien-cu-dan-mang-than-phuc-644879.htm"><b>cỗ máy đặc biệt </b></a>được lắp ráp hoàn toàn bằng LEGO bởi một sinh viên người Nhật có tên gọi Akiyuki. Đoạn clip được đăng tải lên Youtube của Akiyuki cũng đã khiến các cư dân mạnh phải “ngã mũ thán phục” về mức độ tinh vi và hoàn hảo của cỗ máy mà chàng sinh viên này tạo ra.<br><br>Về mức độ chi tiết, cỗ máy của Akiyuki cao hơn nhiều so với cỗ máy của Hknssn, tuy nhiên về chức năng thực tế, cỗ máy của Hknssn lại có chức năng hữu ích hơn.<br><br><i>Xem video hoạt động cỗ máy đặc biệt của Akiyuki:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS85f0f08841ee4568afcbd48a0c24c4a8 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=85f0f08841ee4568afcbd48a0c24c4a8&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2012/09/LEGO-machine-5eea5.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=85f0f08841ee4568afcbd48a0c24c4a8&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2012/09/LEGO-machine-5eea5.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="85f0f08841ee4568afcbd48a0c24c4a8" id="85f0f08841ee4568afcbd48a0c24c4a8" style="" src="http://cache.hosting.vcmedia.vn/?key=85f0f08841ee4568afcbd48a0c24c4a8&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2012/09/LEGO-machine-5eea5.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br>\r\n<div align=right><b>Phạm Thế Quang Huy</b></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/youtube.tag'' >Youtube</a>, <a href=''/thuy-dien.tag'' >Thụy Điển</a>, <a href=''/nhat.tag'' >Nhật</a>, <a href=''/video.tag'' >Video</a>, <a href=''/tre-em.tag'' >trẻ em</a>, <a href=''/tro-choi.tag'' >trò chơi</a>, <a href=''/dac-biet.tag'' >đặc biệt</a>, <a href=''/chuc-nang.tag'' >chức năng</a>, <a href=''/co-may.tag'' >cỗ máy</a>, <a href=''/may-bay.tag'' >máy bay</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/doc-dao-co-may-gap-may-bay-giay-duoc-rap-tu-lego-708603.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:26', ''),
(35, '\r\n Điện thoại thương hiệu Việt lõi tứ đầu tiên bán ra thị trường', '', '\r\n FPT IV là chiếc điện thoại thương hiệu Việt đầu tiên sử dụng chip lõi tứ thế hệ mới của Qualcomm. Máy sử dụng màn hình 4,5 inch, độ phân giải qHD, RAM 1GB và 4GB ROM. Smartphone mới của FPT chạy trên hệ điều hành Android 4.1 Jelly Bean và hướng tới thị trường tầm trung.<br><br><div align="center"><span style="font-family: Tahoma;"><div><img _fl="" style="margin: 5px;" src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/FPTIV-8b6c9.jpg" align="middle" width="450" alt="FPT IV là chiếc smartphone thương hiệu Việt đầu tiên trang bị chip lõi tứ"></div><span style="font-size: 10pt;">FPT IV là chiếc smartphone thương hiệu Việt đầu tiên trang bị chip lõi tứ </span><br></span></div><br>Theo ông Lê Hoàng Hải - Phó TGĐ công ty sản phẩm công nghệ FPT, smartphone sẽ là phân khúc mà công ty này sẽ tập trung đầu tư mạnh trong thời gian tới. Dự kiến FPT sẽ tiếp tục tung ra thị trường 6 mẫu điện thoại smartphone thuộc dòng trung cấp trong năm nay.<br><br>Trả lời trước báo giới, đại diện FPT cũng cho biết cũng giống như các mẫu điện thoại trước đây của hãng, chiếc điện thoại FPT IV là sản phẩm gia công và lắp ráp tại Trung Quốc. Hiện tại công ty này chưa có kế hoạch xây dựng nhà máy lắp ráp tại Việt Nam bởi theo ông Hải, đây là một kế hoạch dài hơn và FPT phải đánh giá nhu cầu của thị trường thật cẩn thận trước khi đưa ra quyết định. “Nhu cầu của thị trường đối với smartphone chưa đủ lớn để FPT đầu tư xây dựng nhà máy”, ông Hải nhấn mạnh.<br><br>Về việc khả năng cạnh tranh trên thị trường smartphone vốn không ít sản phẩm có giá bán từ 4-5 triệu đồng, đại diện FPT cho biết công ty sẽ sử dụng các dịch vụ gia tăng như là một lợi thế cạnh tranh với các thương hiệu khác trên thị trường. Theo ông Hải, FPT IV được cài sẵn các dịch vụ, như Fstore, Nhạc số, Bản đồ, Youtube, bàn phím tiếng Việt do chính FPT phát triển…<br><br>Trong khi đó, chia sẻ với <i>Dân trí </i>bên lề sự kiện ra mắt điện thoại FPT IV, ông Thiều Phương Nam, Tổng Giám Đốc Qualcomm khu vực Việt Nam, Lào, Campuchia cho biết nhu cầu di động thông minh tại Việt Nam và các thị trường đang phát triển trong năm qua đã tăng trưởng lên tới 400%. Trong đó trên 60% người dùng sử dụng smartphone đang sử dụng điện thoại giá rẻ dưới 200 USD, và 50% trong số này đang sử dụng smartphone giá dưới 100 USD. <br><br>Đại diện hãng sản xuất chip lớn nhất thế giới này tiết lộ hãng sẽ bắt tay cùng các nhà sản xuất tại Việt Nam để đưa ra thị trường smartphone dưới 50 USD. “Tuy nhiên, kế hoạch đưa smartphone giá siêu rẻ ra thị trường sẽ cần thời gian mới thực hiện được”, ông Nam nhấn mạnh.<br>&nbsp;<br><div align="right"><b>Khôi Linh</b><br></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/viet-nam.tag'' >Việt Nam</a>, <a href=''/chip.tag'' >chip</a>, <a href=''/lao.tag'' >Lào</a>, <a href=''/trung-quoc.tag'' >Trung Quốc</a>, <a href=''/youtube.tag'' >Youtube</a>, <a href=''/ban-do.tag'' >Bản đồ</a>, <a href=''/campuchia.tag'' >Campuchia</a>, <a href=''/android.tag'' >Android</a>, <a href=''/smartphone.tag'' >smartphone</a>, <a href=''/elly-bean.tag'' >Jelly Bean</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/dien-thoai-thuong-hieu-viet-loi-tu-dau-tien-ban-ra-thi-truong-708617.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:26', ''),
(36, '\r\n Apple đáp trả Galaxy S4 với chiến dịch quảng cáo mới', '', '\r\n "Điều gì đã khiến iPhone không giống bất kì sản phẩm nào khác?", Apple đã đưa ra câu hỏi này và trả lời bằng việc liệt kê hàng loạt các đặc tính nổi trội của iPhone cũng như thành công của sản phẩm này trên thị trường.<br><br>Điều đầu tiên mà hãng nhấn mạnh chính là việc smartphone này làm hài lòng lượng lớn khách hàng nhờ vào hiệu suất hoạt động, thiết kế, tính năng và đặc tính dễ sử dụng. iPhone đã 8 lần liên tiếp đạt giải thưởng hài lòng khách hàng của JD Power and Associates.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/iPhone-ads-0788d.jpg" width=450 _fl="" alt="Apple đã có lời đáp trả Samsung trong quảng cáo mới nhất của mình"></div><span style="FONT-SIZE: 10pt">Apple đã có lời đáp trả Samsung trong quảng cáo mới nhất của mình</span><br></span></div><br>Quảng cáo của Apple cũng cho rằng iPhone được thiết kế với nguyên liệu chắc chắn, chế tạo tỉ mỉ, tinh tế. Nếu như "kình địch" dòng Galaxy S được cấu tạo với vỏ nhựa thì iPhone lại có vỏ nhôm cho cảm giác bền, đẹp hơn.<br><br>Màn hình Retina là một ưu điểm khác của iPhone, mặc dù nếu so với phiên bản Galaxy S4 thì Retina có mật độ điểm ảnh thấp hơn nhưng vẫn vượt trội hơn các phiên bản Galaxy S trước đây.<br><br>Máy ảnh của iPhone rõ ràng không có "số chấm" cao nhất, nhưng lại là loại camera được chụp nhiều nhất trên thế giới, theo thống kê của trang chia sẻ hình ảnh Flick trứ danh. Vượt qua tất cả các smartphone có khả năng chụp ảnh tốt hay các máy chụp ảnh chuyên nghiệp khác, iPhone 4S, iPhone 4 và iPhone 5 lần lượt chiếm 3 vị trí dẫn đầu về số lượng ảnh đã chụp và tải lên dịch vụ chia sẻ ảnh của Yahoo!. Số chấm của camera trên smartphone chưa chắc quyết định chất lượng ảnh chụp cũng như khả năng làm hài lòng người dùng về khả năng chụp ảnh, vì vậy Galaxy S4 mang camera 13 Megapixel chưa phải là một đảm bảo cho sự thành công.<br><br>Một điểm nhấn khác của iPhone chính là iOS và hệ sinh thái đồ sộ do Apple gây dựng. Với hơn 800.000 ứng dụng trên App Store, mọi tính năng phần mềm đều có thể có trên smartphone này, đặc biệt là những tính năng độc quyền tạo nên tên tuổi riêng như Siri, iCloud...<br><br>Những đặc điểm khác cũng được Apple nhấn mạnh trong trang quảng cáo mới gồm tuổi thọ pin, sức mạnh và mức độ tiện lợi của vi xử lý A6, tốc độ của LTE, dịch vụ chăm sóc khác hàng.<br><br>Với việc Galaxy S4 ra mắt mà không có đặc điểm nổi trội nào cũng như nhận được phản hồi thiếu tích cực từ thị trường, dường như Apple muốn nắm lấy cơ hội này để lấy lại hình ảnh iPhone đang ngày càng bị "binh đoàn" Android lấn lướt.<br><br>\r\n<div align=right><b>Vinh Anh</b></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/iphone.tag'' >Iphone</a>, <a href=''/galaxy.tag'' >Galaxy</a>, <a href=''/apple.tag'' >Apple</a>, <a href=''/retina.tag'' >Retina</a>, <a href=''/samsung.tag'' >Samsung</a>, <a href=''/siri.tag'' >Siri</a>, <a href=''/pin.tag'' >pin</a>, <a href=''/megapixel.tag'' >Megapixel</a>, <a href=''/ios.tag'' >Ios</a>, <a href=''/quang-cao.tag'' >Quảng cáo</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/apple-dap-tra-galaxy-s4-voi-chien-dich-quang-cao-moi-708588.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:26', ''),
(37, '\r\n Xperia Z vẫn “sống tốt” sau khi ngâm vào… nồi lẩu đang sôi', '', '\r\n Xperia Z được Sony trình làng hồi cuối tháng 2 vừa qua tại Hội nghị MWC diễn ra ở Barcelona (Tây Ban Nha) và kể từ đó chiếc smartphone này đã nhanh chóng trở thành “ngôi sao” trên thị trường smartphone nhờ hàng loạt các ưu điểm. Bên cạnh ưu điểm về thiết kế nam tính, cấu hình mạnh mẽ, Xperia Z còn được trang bị tính năng chống nước và chống bám bụi. <br><br>Mới đây, để kiểm nghiệm khả năng chịu đựng của Xperia Z, một người dùng tại Trung Quốc đã có màn thử nghiệm “thót tim” khi nhúng chiếc smartphone này vào… nồi lẩu đang sôi.<br><br>Kết quả cuối cùng khiến không ít người cảm thấy kinh ngạc khi chiếc smartphone Xperia Z này vẫn có thể hoạt động bình thường và không hề có dấu hiệu bị ảnh hưởng hay hư hại sau khi được vớt ra khỏi nồi lẩu nóng.<br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma">\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-1-5bf32.jpg" width=450 _fl="" alt="Xperia Z đã trở thành… nguyên liệu chế biến món lẩu"></div><span style="FONT-SIZE: 10pt">Xperia Z đã trở thành… nguyên liệu chế biến món lẩu</span><br></span></div><br>Dĩ nhiên, chẳng ai bất cẩn đến nối để một chiếc smartphone rơi vào nồi lẩu đang sôi, tuy nhiên mọi chuyện đều có thể xảy ra, nhất là những tai nạn bất ngờ không định trước. Và nếu đang sở hữu một chiếc smartphone Xperia Z, người dùng vẫn có thể phần nào cảm thấy an tâm nếu chẳng may đánh rơi chiếc smartphone của mình vào nồi lẩu đang sôi hay vào nước nóng.<br><br><i>Video ngâm Xperia Z vào nồi lẩu đang sôi:</i><br><br>\r\n<div align=center>\r\n<object id=PlayerAS75df0519d4d242769b1e95d88b68173b classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000 width=425 height=334><param name="_cx" value="11244"><param name="_cy" value="8837"><param name="FlashVars" value=""><param name="Movie" value="http://cache.hosting.vcmedia.vn/?key=75df0519d4d242769b1e95d88b68173b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-Z-hotpot-8da0b.jpg"><param name="Src" value="http://cache.hosting.vcmedia.vn/?key=75df0519d4d242769b1e95d88b68173b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-Z-hotpot-8da0b.jpg"><param name="WMode" value="Transparent"><param name="Play" value="-1"><param name="Loop" value="-1"><param name="Quality" value="High"><param name="SAlign" value="LT"><param name="Menu" value="-1"><param name="Base" value=""><param name="AllowScriptAccess" value="always"><param name="Scale" value="NoScale"><param name="DeviceFont" value="0"><param name="EmbedMovie" value="0"><param name="BGColor" value="425166"><param name="SWRemote" value=""><param name="MovieData" value=""><param name="SeamlessTabbing" value="1"><param name="Profile" value="0"><param name="ProfileAddress" value=""><param name="ProfilePort" value="0"><param name="AllowNetworking" value="all"><param name="AllowFullScreen" value="true"><param name="AllowFullScreenInteractive" value=""><param name="IsDependent" value="0">\r\n<embed wmode="transparent" quality="high" bgcolor="#425166" flashvars="" allowfullscreen="true" allowscriptaccess="always" name="75df0519d4d242769b1e95d88b68173b" id="75df0519d4d242769b1e95d88b68173b" style="" src="http://cache.hosting.vcmedia.vn/?key=75df0519d4d242769b1e95d88b68173b&amp;pname=mediaplayer.swf&amp;img=http://video-thumbs.vcmedia.vn/dantri/tI0YUx18mEaF5kMsGHJxA/2013/03/Xperia-Z-hotpot-8da0b.jpg" type="application/x-shockwave-flash" height="334" width="425"></OBJECT><br></div><br><b>Người mẫu bikini “nóng bỏng” vừa tắm vừa dùng Xperia Z</b><br><br>Trong một động thái khác liên quan đến chiếc smartphone của Sony, mới đây hãng viễn thông T-Mobile đã có màn quảng cáo ấn tượng cho Xperia Z, phiên bản do mình phân phối. <br><br>Theo đó, trong màn quảng cáo diễn ra ở thủ đô Praha (Séc), T-Mobile đã trưng bày một phòng tắm trong suốt, trong đó là sự xuất hiện của 2 người mẫu vừa tắm vừa sử dụng chiếc điện thoại Xperia Z. Màn quảng cáo này nhằm mục đích nói lên khả năng bền bỉ của chiếc smartphone này, mà người dùng có thể an tâm sử dụng ngay cả trong nhà tắm.<br><br><i>Một vài hình ảnh về màn quảng cáo ấn tượng của T-Mobile:</i><br><br>\r\n<div align=center><span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-2-5bf32.jpg" width=450 _fl="" alt="Rất đông người đến xem màn quảng cáo ấn tượng của T-Mobile"></div>Rất đông người đến xem màn quảng cáo ấn tượng của T-Mobile<br><br>\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-3-5bf32.jpg" width=450 _fl="" alt="Người mẫu xuất hiện trong bộ bikini hồng với Xperia Z trên tay"></div>Người mẫu xuất hiện trong bộ bikini hồng với Xperia Z trên tay<br><br>\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-4-5bf32.jpg" width=350 _fl="" alt="Chứng minh khả năng chịu nước của chiếc smartphone"></div>Chứng minh khả năng chịu nước của chiếc smartphone<br><br>\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-5-5bf32.jpg" width=450 _fl="" alt="Ngoài người mẫu nữ còn có sự xuất hiện của người mẫu nam"></div>\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-6-5bf32.jpg" width=450 _fl="" alt="Ngoài người mẫu nữ còn có sự xuất hiện của người mẫu nam"></div>\r\n<div><img style="MARGIN: 5px" align=middle src="http://dantri4.vcmedia.vn/tI0YUx18mEaF5kMsGHJ/Image/2013/03/Xperia-Z-hotpot-7-5bf32.jpg" width=450 _fl="" alt="Ngoài người mẫu nữ còn có sự xuất hiện của người mẫu nam"></div>Ngoài người mẫu nữ còn có sự xuất hiện của người mẫu nam<br></span></div><br>\r\n<div align=right><b>Phạm Thế Quang Huy</b><br></div><input type=''hidden'' value=''/c119s119/cong-nghe/trang-1.htm'' id=''hidNextUsing''/>\r\n <div class="news-tag"><div class="news-tag-list"><span class="news-tagname">Xem thêm :</span><span class="news-tags-item"><a href=''/xperia.tag'' >Xperia</a>, <a href=''/tmobile.tag'' >T-Mobile</a>, <a href=''/sony.tag'' >Sony</a>, <a href=''/tay-ban-nha.tag'' >Tây Ban Nha</a>, <a href=''/barcelona.tag'' >Barcelona</a>, <a href=''/trung-quoc.tag'' >Trung Quốc</a>, <a href=''/video.tag'' >Video</a>, <a href=''/nguoi-mau.tag'' >Người mẫu</a>, <a href=''/quang-cao.tag'' >Quảng cáo</a>, <a href=''/chong-nuoc.tag'' >chống nước</a></span></div></div>\r\n', '', 0, '', 'http://dantri.com.vn/suc-manh-so.htm/suc-manh-so/xperia-z-van-song-tot-sau-khi-ngam-vao-noi-lau-dang-soi-708454.htm', 'http://dantri.com.vn/', '2013-03-19 16:42:26', '');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2013-03-15 08:18:21', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
