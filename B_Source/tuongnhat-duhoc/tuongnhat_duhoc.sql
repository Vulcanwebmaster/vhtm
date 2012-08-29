-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2012 at 05:08 PM
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
-- Table structure for table `n_entry`
--

CREATE TABLE IF NOT EXISTS `n_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `short_content` text COLLATE utf8_unicode_ci,
  `main_content` text COLLATE utf8_unicode_ci,
  `create_on` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `avatar` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_entry`
--

INSERT INTO `n_entry` (`id`, `title`, `short_content`, `main_content`, `create_on`, `last_update`, `avatar`) VALUES
(5, 'Agave2', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Agave</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	abc</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', '2012-08-02 00:00:00', '2012-08-02 00:23:49', '/images/Agave.jpg'),
(6, 'Untitled', '<p>\r\n	Untitled</p>\r\n', '<p>\r\n	Untitled</p>\r\n', '2012-08-02 00:24:07', NULL, '/images/Untitled.jpg'),
(7, 'Grass_Blades', '<p>\r\n	Grass_Blades</p>\r\n', '<p>\r\n	Grass_Blades</p>\r\n', '2012-08-02 00:25:10', NULL, '/images/Grass_Blades.jpg');

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
-- Table structure for table `n_image`
--

CREATE TABLE IF NOT EXISTS `n_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `n_image`
--

INSERT INTO `n_image` (`id`, `name`, `link`) VALUES
(26, '68-dk-off_[320x200].jpg', '/images/68-dk-off_[320x200].jpg'),
(27, 'Untitled.jpg', '/images/Untitled.jpg'),
(28, 'Agave.jpg', '/images/Agave.jpg'),
(29, 'Grass_Blades.jpg', '/images/Grass_Blades.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `n_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_lienhe` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `parentid` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `titleE` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentE` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `attribute2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute1E` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attribute2E` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_lienhe`
--

INSERT INTO `n_lienhe` (`id`, `parentid`, `title`, `titleE`, `content`, `contentE`, `attribute1`, `attribute2`, `attribute1E`, `attribute2E`) VALUES
('column1', '', 'Tại sao là chúng tôi?', 'Why us?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. (VIE)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. (E)', '', NULL, NULL, NULL),
('column1-0', 'column1', 'Lorem ipsum1', 'Lorem ipsum1(E)', '#', '#', '', NULL, NULL, NULL),
('column1-1', 'column1', 'Lorem ipsum2', 'Lorem ipsum2(E)', '#', '#', '', NULL, NULL, NULL),
('column1-2', 'column1', 'Lorem ipsum', 'Lorem ipsum(E)', '#', '#', '', NULL, NULL, NULL),
('column1-3', 'column1', 'Consectetur elit', 'Consectetur elit (E)', '#', '#', '', NULL, NULL, NULL),
('column1-4', 'column1', 'Vivamus sed a', 'Vivamus sed a (E)', '#', '#', '', NULL, NULL, NULL),
('column1-5', 'column1', 'Ivamus hendrerit', 'Ivamus hendrerit (E)', '#', '#', '', NULL, NULL, NULL),
('column1-6', 'column1', 'Gravida viverra', 'Gravida viverra (E)', '#', '#', '', NULL, NULL, NULL),
('column1-7', 'column1', '', '', '', '', '', NULL, NULL, NULL),
('column1-8', 'column1', '', '', '', '', '', NULL, NULL, NULL),
('column1-9', 'column1', '', '', '', '', '', NULL, NULL, NULL),
('column2', '', 'Chúng tôi là ai?', 'Who are we?', '<p class=" extra-wrap"><strong class="clr-2">(VIE)Kensington College of Business (KCB)</strong> <br> là một trong những trường Cao Đẳng đầu tiên được phép đào tạo các khóa Đại Học ở Anh và năm 2007 trường đã vinh dự tổ chức kỷ niệm 25 năm kể từ ngày thành lập. </p> </div> <p><strong> KCB là trường duy nhất ở Anh được tham gia vào ba lĩnh vực giảng dạy:</strong><br>Dự Bị Đại Học, Đại Học và Cao Học, Đây là nơi cung cấp nguồn lao động dồi dào và tay nghề chuyên môn cho một số ngân hàng, các công ty và một số các tập đoàn lớn ở Anh cũng như nhiều nước trên thế giới. Trường cũng trang bị cho sinh viên bằng cấp tay nghề hàng đầu như (Chartered Professional bodies), Institute of Chartered Secretaries and Administrators  (ICSA) và Viện Tiếp Thị (Chartered Institute of Marketing - CIM). Một số các sáng kiến hợp tác với các cơ quan đã được độc quyền bởi KCB - độc quyền đào tạo các khóa học (Certificate in Company Secretarial Practice and Share Registration Practice – CCSP).<br>velit velit eu magna. (E)</p>', '<p class=" extra-wrap"><strong class="clr-2">(ENG)Kensington College of Business (KCB)</strong> <br> là một trong những trường Cao Đẳng đầu tiên được phép đào tạo các khóa Đại Học ở Anh và năm 2007 trường đã vinh dự tổ chức kỷ niệm 25 năm kể từ ngày thành lập. </p> </div> <p><strong> KCB là trường duy nhất ở Anh được tham gia vào ba lĩnh vực giảng dạy:</strong><br>Dự Bị Đại Học, Đại Học và Cao Học, Đây là nơi cung cấp nguồn lao động dồi dào và tay nghề chuyên môn cho một số ngân hàng, các công ty và một số các tập đoàn lớn ở Anh cũng như nhiều nước trên thế giới. Trường cũng trang bị cho sinh viên bằng cấp tay nghề hàng đầu như (Chartered Professional bodies), Institute of Chartered Secretaries and Administrators  (ICSA) và Viện Tiếp Thị (Chartered Institute of Marketing - CIM). Một số các sáng kiến hợp tác với các cơ quan đã được độc quyền bởi KCB - độc quyền đào tạo các khóa học (Certificate in Company Secretarial Practice and Share Registration Practice – CCSP).<br>velit velit eu magna. (E)</p>', '', NULL, NULL, NULL),
('column3', '', 'Nhận xét', 'Comments', '', '', '', NULL, NULL, NULL),
('column3-0', 'column3', '', '', 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet,  (Eng)', 'Tina Smith Vie', 'top manager', 'Tina Smith', 'top manager'),
('column3-1', 'column3', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed arcu dui, eu tincidunt sem vivamus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed arcu dui, eu tincidunt sem vivamus.', 'Tina Smith', 'top manager', 'Tina Smith', 'top manager'),
('column3-2', 'column3', '', '', 'Vivamus sed arcu dui, eu tincidunt sem vivamus. hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros.', 'Vivamus sed arcu dui, eu tincidunt sem vivamus. hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros.', 'John Green', 'director', 'John Green', 'director'),
('column3-3', 'column3', '', '', 'test1 12414', 'test1(E)', 'a  124', 'a1', 'a  124', 'a1(E)'),
('column3-4', 'column3', '', '', '', '', '', '', '', ''),
('hyperlink1', '', 'Xem', 'Click here', 'http://abc.com', 'http://abc.com', '', NULL, NULL, NULL),
('slogan', '', 'Chúng tôi cung cấp cho bạn những dịch vụ tốt nhất', 'We provide you best services', 'Làm hài lòng quý vị là phương châm hoạt động của chúng tôi. ', 'Pleasing customers is our motto. ', '', NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_lienhe`
--

CREATE TABLE IF NOT EXISTS `n_tn_lienhe` (
  `id` int(11) DEFAULT NULL,
  `ten` text COLLATE utf8_unicode_ci,
  `diachi` text COLLATE utf8_unicode_ci,
  `telephone` text COLLATE utf8_unicode_ci,
  `mobile` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_tn_lienhe`
--

INSERT INTO `n_tn_lienhe` (`id`, `ten`, `diachi`, `telephone`, `mobile`, `fax`, `email`, `website`) VALUES
(1, 'Kensington College of Business', '34 Hồng Phúc, Quận Ba Đình Hà Nội, Vietnam', '(+844) 85868119', '(+84) 0983721368', '(+844) 38284948', 'Lien@kensingtoncoll.ac.uk', 'www.kensingtoncoll.ac.uk/vietnam');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_loaikhoahoc`
--

CREATE TABLE IF NOT EXISTS `n_tn_loaikhoahoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tn_loaikhoahoc`
--

INSERT INTO `n_tn_loaikhoahoc` (`id`, `ten`) VALUES
(1, 'Đại học (Undergraduate Courses)'),
(2, 'Sau đại học (Postgraduate Courses)'),
(3, 'Nghiệp vụ (Professional Courses)'),
(4, 'Bán thời gian (Parttime Courses)'),
(5, 'Khóa học khác (Other Courses)');

-- --------------------------------------------------------

--
-- Table structure for table `n_tn_tiente`
--

CREATE TABLE IF NOT EXISTS `n_tn_tiente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_tn_tiente`
--

INSERT INTO `n_tn_tiente` (`id`, `ten`) VALUES
(1, 'VND'),
(2, '£'),
(3, '€'),
(4, '$');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `n_users`
--

INSERT INTO `n_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`) VALUES
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-08-29 05:38:19', '2012-02-22 13:46:09', '2012-03-17 21:56:17');

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
(14, '', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
