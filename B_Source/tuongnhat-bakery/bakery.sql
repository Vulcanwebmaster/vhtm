-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2012 at 12:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_product_ctg_relate`
--

CREATE TABLE IF NOT EXISTS `b_product_ctg_relate` (
  `id_product` int(11) NOT NULL,
  `id_catologies_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `n_b_contact`
--

CREATE TABLE IF NOT EXISTS `n_b_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `congty` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `makhachhang` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pho` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cauhoi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_b_employee_contact`
--

CREATE TABLE IF NOT EXISTS `n_b_employee_contact` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `positon` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberphone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `more` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_b_product`
--

CREATE TABLE IF NOT EXISTS `n_b_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name_vn` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name_en` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_units` int(11) NOT NULL,
  `product_cartons` int(11) NOT NULL,
  `product_sales_name_vn` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_sales_name_en` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_introductions_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `product_introductions_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `product_convection_oven_vn` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_convection_oven_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_rotary_oven_vn` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_rotary_oven_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_nutrient_content_vn` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_nutrient_content_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_new` int(11) DEFAULT NULL,
  `product_featured` int(11) DEFAULT NULL,
  `product_img` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_img_award` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_b_product`
--

INSERT INTO `n_b_product` (`product_id`, `category_id`, `product_name_vn`, `product_name_en`, `product_units`, `product_cartons`, `product_sales_name_vn`, `product_sales_name_en`, `product_introductions_vn`, `product_introductions_en`, `product_convection_oven_vn`, `product_convection_oven_en`, `product_rotary_oven_vn`, `product_rotary_oven_en`, `product_nutrient_content_vn`, `product_nutrient_content_en`, `product_new`, `product_featured`, `product_img`, `product_img_award`) VALUES
(1, 1, 'Lúa mì spenta cuộn 85g, một phần nướng', 'Crusty spelt wheat roll 85g, partly baked', 16000, 200, 'Lúa mì spenta nhỏ cuộn, vùng sâu, đông lạnh', 'Small spelt wheat roll, deep-frozen', 'Nướng trong lò nướng với quạt nóng và hơi nước ở 190 ° C trong khoảng. 8 phút. cho đến khi sản phẩm đạt được độ nâu mong muốn.', 'Bake in the pre-heated fan-assisted oven with steam at 190°C for approx. 8 min. until the product shows the desired amount of brownness.', '200 ° C Thời gian: khoảng. 10-12 phút', '200°C Baking time: approx. 10-12 minutes', '200 ° C Thời gian: khoảng. 8-10 phút', '220°C Baking time: approx. 8-10 minutes', 'Protein: 7,6 g Chất béo: 4,0 g Carbohydrates: 40,6 g Năng lượng: 995 kJ (238 kcal)', 'Protein: 7,6 g Fat: 4,0 g Carbohydrates: 40,6 g Energy value: 995 kJ (238 kcal)', 1, NULL, 'assets/bakery/images/0394_dinkelcrusty-1.jpg', NULL),
(2, 1, 'Spelt 400g bánh mì, một phần nung', 'Spelt bread 400g, partly-baked', 800, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'assets/bakery/images/0500_dinkelbrot-3_kopie.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `n_b_product_category`
--

CREATE TABLE IF NOT EXISTS `n_b_product_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name_vn` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_name_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `catogories_decription_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `catogories_decription_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `category_image` varchar(2000) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_b_product_category`
--

INSERT INTO `n_b_product_category` (`category_id`, `category_name_vn`, `category_name_en`, `catogories_decription_vn`, `catogories_decription_en`, `category_image`) VALUES
(1, 'Nguyên liệu lúa mỳ và các sản phẩm hữu cơ', 'Spelt wheat and organic products', 'Nhu cầu cho các sản phẩm bánh cao chất lượng và thực phẩm hữu cơ đang gia tăng nhanh chóng. Spelt lúa mì, inparticular, iscurrently undergoinga phục hưng. Hạt này là lành mạnh và tăng cường mức độ hạnh phúc, bởi vì nó rất giàu các axit amin thúc đẩy việc sản xuất hormone trong cơ thể làm tăng cảm giác hạnh phúc. Ngoài ra, nó là một sức mạnh hạt thực vì nó có chứa một hỗn hợp lý tưởng của khoáng chất, vitamin, carbohydrate và chất béo cũng như chất xơ và lúa mì proteins.Spelt là một thực phẩm hoàn hảo cho những người có neurodermatitis, dị ứng hoặc bệnh tiểu đường và tất nhiên cho tất cả mọi người ý thức về sức khỏe.\r\n\r\nVới lĩnh vực này của thị trường trong tâm trí chúng tôi đã phát triển ổ bánh lúa mạch đen cao chất lượng hữu cơ hỗn hợp và một loạt các đánh vần mộc mạc lúa mì products.The cộc cằn hình tam giác có lúa mì spenta, lúa mì spenta cuộn 85g cộc cằn và lúa mì spenta crusty baguette 250g tay sản xuất và nhiều thành phần dinh dưỡng của họ là mang lại lợi ích cho sức khỏe.', 'The demand for high-quality bakery products and organic food is increasing rapidly. Spelt wheat, inparticular, iscurrently undergoinga renaissance. This grain is healthy and boosts levels of well-being, because it is rich in amino acids that promote the production of hormones in the body that increase feelings of happiness. In addition, it is a real power-grain as it contains an ideal mixture of minerals, vitamins, carbohydrates and fats as well as dietary fibre and proteins.Spelt wheat is a perfect food for people with allergies,  neurodermatitis or diabetes and of course for all health-conscious people.\r\n\r\nWith this sector of the market in mind we have developed a high-quality organic mixed rye loaf and a range of rustic spelt wheat products.The crusty triangular spelt wheat roll, the 85g crusty spelt wheat roll and the 250g crusty spelt wheat baguette are hand-produced and their many nutritious ingredients are beneficial to health.', 'assets\\bakery\\images\\dinkel.jpg'),
(2, 'Bánh mỳ que & Bánh mỳ ổ', 'Rolls, baguettes & loaves', 'Cuộn tươi ngon từ lò với một lớp vỏ bóng tốt, và bánh mì que sắc nét với một bên trong mềm chỉ đơn giản là delicious.We có nhiều lựa chọn các ổ bánh mì và bánh - khám phá ra nhiều sản phẩm đa dạng của chúng tôi.', 'Tasty rolls fresh from the oven with a fine, glossy crust and crisp baguettes with a soft inside are simply delicious.We have a wide selection of loaves and rolls – discover our varied product range.', 'assets\\bakery\\images\\teiglinge.jpg'),
(3, 'Bánh Địa Trung Hải', 'Mediterranean-style bakery products', 'Sun, tiếng gầm của sóng và mùi tươi nướng bánh mì que với ô liu từ lò đá này là tinh khiết kỳ nghỉ mood.With bánh mì ciabatta theo phong cách Địa Trung Hải của chúng tôi, sắc nét "Rustiguette" bánh mì từ lò đá hoặc tỏi tự nhiênbánh mì từ lò đá, bạn sẽ được thưởng thức kỳ nghỉ atmosphere.Rhombus shapedor đồng bằng hạt đa dạng cuộn, cuộn đôi với cà chua và bánh mì tròn phổ biến ở Paris ra khỏi phạm vi sản phẩm.', 'Sun, the roar of the surf and the smell of freshly-baked baguettes with olives from the stone oven - this is pure holiday mood.With our Mediterranean-style ciabatta bread, the crisp “Rustiguette” baguette from the stone oven or the wild garlic baguette from the stone oven, you will simply taste the holiday atmosphere.Rhombus-shapedor plain multi-grain rolls, the double roll with tomatoes and the popular big Parisian baguette round off the product range. ', 'assets/bakery/images/mediterranes.jpg'),
(4, 'Bánh ngọt', 'Lye pastry', NULL, NULL, 'assets\\bakery\\images\\laugengebaeck.jpg'),
(5, 'Món khai vị', 'Savoury delicacies', NULL, NULL, 'assets/bakery/images/herzhaftes.jpg'),
(6, 'Bánh sừng bò', 'Croissants', NULL, NULL, 'assets\\bakery\\images\\croissants.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `n_b_product_non_food`
--

CREATE TABLE IF NOT EXISTS `n_b_product_non_food` (
  `product_nf_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_nf_name_vn` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_nf_name_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_nf_detail_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `product_nf_detail_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`product_nf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_b_product_non_food_category`
--

CREATE TABLE IF NOT EXISTS `n_b_product_non_food_category` (
  `category_nf_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_nf_category_vn` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_nf_category_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_nf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_b_product_non_food_ctg_relate`
--

CREATE TABLE IF NOT EXISTS `n_b_product_non_food_ctg_relate` (
  `id_product_nf` int(11) NOT NULL,
  `id_catogories_product_nf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-08-22 11:51:38', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
