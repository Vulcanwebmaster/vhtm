-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2012 at 12:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leerobertsonx`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `n_be_acl_groups`
--

INSERT INTO `n_be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`) VALUES
(1, 1, 6, 'Member', NULL),
(2, 4, 5, 'Administrator', NULL),
(3, 2, 3, 'demoadmin', 0);

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
-- Table structure for table `n_lee_aboutus`
--

CREATE TABLE IF NOT EXISTS `n_lee_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `n_lee_aboutus`
--

INSERT INTO `n_lee_aboutus` (`id`, `title`, `content`, `date`) VALUES
(2, 'Our Approach', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n<p>Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed tetur suscipit nunc et rutrum.</p>', '2012-07-21 12:27:23'),
(3, 'Methodology', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum.</p>\r\n<p>Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed tetur suscipit nunc et rutrum.</p>', '2012-07-21 12:27:57'),
(5, 'Smart, Agile, Imaginative', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed tetur suscipit nunc et rutrum.', '2012-07-18 00:00:00'),
(10, 'We Love To Design - We Love To Be Creative!', '<p>LXL Web Design Company provides complete web design &amp; development service and solutions. Our main goal is not only to satisfy your requirement but rather to exceed your expectations. We have been designing and developing websites for over a decade and we are very proficient and skillful in these fields- we offer an inspiring design which further gives your company recognition and a stand-alone status. You can check out some of our solutions in the snapshots above.</p>', '2012-07-21 12:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_aboutus_slogan`
--

CREATE TABLE IF NOT EXISTS `n_lee_aboutus_slogan` (
  `slogan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_lee_aboutus_slogan`
--

INSERT INTO `n_lee_aboutus_slogan` (`slogan`) VALUES
('We are regarded as industry leaders in digital strategy and solutions, focused solely on delivering great user experiences.');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_application`
--

CREATE TABLE IF NOT EXISTS `n_lee_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) NOT NULL,
  `alias` varchar(2000) NOT NULL,
  `content` text NOT NULL,
  `shortcontent` text NOT NULL,
  `date` date NOT NULL,
  `order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_lee_application`
--

INSERT INTO `n_lee_application` (`id`, `title`, `alias`, `content`, `shortcontent`, `date`, `order`) VALUES
(1, 'Applications Services', 'Applications-Services', '<h3>Applications Development Services</h3>\r\n<p>With the path-breaking developments in the field of communications, outsourcing of business has become a viable as well as a highly profitable option. With high-speed communications allowing customers and vendors to communicate on a real-time basis, offshore Application Development has become practically equivalent to getting software developed in another location of the outsourcing organisation.</p>\r\n<h3>Outsource Application Development US</h3>\r\n<p>US has always been a leading provider of offshore development services. Choosing the right outsourcing vendor can provide various benefits to your organisation, such as:</p>\r\n<ul>\r\n<li>Large savings in cost</li>\r\n<li>Synergy across business processes</li>\r\n<li>Knowledge enhancement</li>\r\n<li>Operational flexibility</li>\r\n<li>Better quality of products and services</li>\r\n<li>Improved competitiveness</li>\r\n<li>Ability to focus on core business</li>\r\n</ul>\r\n<h3>Offshore Application Development Company US</h3>\r\n<p>NetProphets is an (USn company) established name in the field of offshore Application Development. NetProphets comprises of a team of seasoned software professionals dedicated to provide a reliable and cost-effective end-product. Our Application Development model is a result of various innovations and enhancements, and is engineered to deliver a product that not only fulfils clients&rsquo; requirements, but also adheres to global standards of software engineering.</p>\r\n<p>Though an USn company by origin, NetProphets has successfully adopted global IT standards and has established itself as a leading player in the offshore Application Development domain. Our client base comprises of the best known names in the global realm, who have derived substantial outsourcing gains through their association with NetProphets</p>\r\n<p>Our time-tested mechanisms for hiring and training ensure that our team of engineers is fully equipped to adapt to diverse work cultures and environments. Each offshore client that we service, results in a new valuable learning for us, thus enabling us to further enhance our expertise to deliver quality.</p>', 'With the path-breaking developments in the field of communications, outsourcing of business has become a viable as well as a highly profitable option. With high-speed communications allowing customers and vendors to communicate on a real-time basis, offshore Application Development has become practically equivalent to getting software developed in another location of the outsourcing organisation.\r\n', '2012-07-21', 2),
(2, 'Mobile Applications', 'Mobile-Applications', '<h3>Mobile Applications</h3>\r\n<p>Netprophets Mobile is a business division within Netprophets Cyberworks. Our mission is to build Value Added Services and Applications on all mobile platforms and devices.</p>\r\n<p>We serve US and International clients by integrating into our current line of internet applications services. Further, NP is also committed to build innovative product applications for the iPhone Blackberry and Android devices.</p>\r\n<p>The world of mobile app''s is poised for tremendous growth with opportunities in VAS and business applications to social media and taking advantage of this opportunity NP the mobile division at NP will target the following industries:</p>\r\n<ol>\r\n<li><strong>Media and entertainment:</strong> music, gaming, media, with an emphasis on IPTV and 3G solutions.</li>\r\n<li><strong>Business enterprise solutions:</strong> linked to Ecommerce and CRM</li>\r\n<li><strong>Telecom:</strong> VAS applications on a services basis.</li>\r\n</ol>', 'Netprophets Mobile is a business division within Netprophets Cyberworks. Our mission is to build Value Added Services and Applications on all mobile platforms and devices.', '2012-07-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_categories_help`
--

CREATE TABLE IF NOT EXISTS `n_lee_categories_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_lee_categories_help`
--

INSERT INTO `n_lee_categories_help` (`id`, `title`, `content`, `date`) VALUES
(1, 'Increse your sales!', '<p>We develop custom eCommerce websites and shopping carts. Our solutions can help you to keep your business up and running 24/7 and keep track of orders and inventory.</p>', '2012-07-22'),
(2, 'Web marketing strategy', '<p><span>A good marketing strategy will launch your business and help you to establish an online presence through which your business will generate revenue. The Internet has introduced innovation in the field of marketing - Internet marketing opens doors to new ways of advertising.</span></p>', '2012-07-23'),
(4, 'We can help you to...', '<p><span>We will develop custom website according to your specific needs. We will provide you with the best HTML and SEO solutions which will further position your website higher in the search engine directories</span></p>', '2012-07-22'),
(5, 'Help you position your brand...', '<p><span>Our Web design company is a leading company that provides innovative, cutting-edge solutions for companies/corporations/businesses/individuals. We provide custom made web development and design solutions and in that manner we enable you to convey your messages to your target audience expand your reach and generate revenue</span></p>', '2012-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_categories_outline`
--

CREATE TABLE IF NOT EXISTS `n_lee_categories_outline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_lee_categories_outline`
--

INSERT INTO `n_lee_categories_outline` (`id`, `image`) VALUES
(1, '<p><img src="../../../assets/js/uploaded/dell.png" alt="" width="591" height="602" /></p>'),
(2, '<p><img src="../../../assets/js/uploaded/toyota.png" alt="" width="947" height="899" /></p>'),
(3, '<p><img src="../../../assets/js/uploaded/Scripps.png" alt="" width="1030" height="294" /></p>'),
(4, '<p><img src="../../../assets/js/uploaded/AramarkLogoColor.png" alt="" width="1403" height="447" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_categories_whyus`
--

CREATE TABLE IF NOT EXISTS `n_lee_categories_whyus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `n_lee_categories_whyus`
--

INSERT INTO `n_lee_categories_whyus` (`id`, `title`, `detail`) VALUES
(1, '100% unique custom design', 'All our designs are 100% unique , custom and template free.'),
(2, 'Creative web 2.0 designs', 'we will bring you the latest web technologies that match your website.'),
(3, 'CONTENT MANAGEMENT SYSTEM', 'CMS enables website owners to arrange, edit, publish, delete their website content independently and without much technical knowledge. CMS is the best tool for increasing website activity thus providing a better user experience.'),
(4, 'ADMIN PANEL TRAINING', 'We will train you on the CMS admin panel, so you can easily use it.'),
(5, 'WE DON''T OUTSOURCE', ''),
(6, 'WORK DIRECTLY WITH YOUR TEAM', ''),
(7, 'SEARCH ENGINE OPTIMIZATIONS', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_contactus_info`
--

CREATE TABLE IF NOT EXISTS `n_lee_contactus_info` (
  `slogan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `n_lee_contactus_info`
--

INSERT INTO `n_lee_contactus_info` (`slogan`, `address`, `phone`, `email`, `fax`, `website`) VALUES
('We''d love to hear from you', 'Missouri, STL, 63109. USA', '(314) 570-3661', 'infot@leerobertsonx.', '+08 (123) 456-7890', 'companyname.com');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_contactus_message_info`
--

CREATE TABLE IF NOT EXISTS `n_lee_contactus_message_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `yourmessage` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `n_lee_contactus_message_info`
--

INSERT INTO `n_lee_contactus_message_info` (`id`, `name`, `email`, `subject`, `yourmessage`, `date`) VALUES
(17, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17'),
(18, 'Le Tien', 'lexuantien0311@gmail.com', 'Tesstttt', 'Hellooooo!', '2012-07-16 13:03:15'),
(19, 'Xuân Lê tiến', 'lexuantien0311@gmail.com', 'Ni hao', 'Ni hao!!!!', '2012-07-16 12:53:17'),
(20, 'Le Tien', 'lexuantien0311@gmail.com', 'Tesstttt', 'Hellooooo!', '2012-07-16 13:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_homepage_logo`
--

CREATE TABLE IF NOT EXISTS `n_lee_homepage_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `n_lee_homepage_logo`
--

INSERT INTO `n_lee_homepage_logo` (`id`, `title`, `logo`, `link`) VALUES
(2, 'Unix', '<p><img src="../../../assets/js/uploaded/portfolio-project-4th-1.jpg" alt="" width="220" height="140" /></p>', 'http://www.unix.com/'),
(3, 'Istockgold', '<p><img src="../../../assets/js/uploaded/portfolio-project-4th-2.jpg" alt="" width="220" height="140" /></p>', 'http://istockgold.com/istockgold/'),
(4, 'Monamimode', '<p><img src="../../../assets/js/uploaded/portfolio-project-4th-4.jpg" alt="" width="220" height="140" /></p>', 'http://monamimode.vn'),
(5, 'NIW', '<p><img src="../../../assets/js/uploaded/portfolio-project-4th-3.jpg" alt="" width="220" height="140" /></p>', 'http://niw.com.vn'),
(6, 'Testing!', '<p><img src="../../../assets/js/uploaded/portfolio-project-4th-4.jpg" alt="" width="220" height="140" /></p>', 'http://www.google.com.vn');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_homepage_slide`
--

CREATE TABLE IF NOT EXISTS `n_lee_homepage_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `descriptiontitle` text NOT NULL,
  `order` int(11) NOT NULL,
  `detailtitle` varchar(100) NOT NULL,
  `detaildescription` text NOT NULL,
  `linkimage` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_lee_homepage_slide`
--

INSERT INTO `n_lee_homepage_slide` (`id`, `title`, `descriptiontitle`, `order`, `detailtitle`, `detaildescription`, `linkimage`, `link`) VALUES
(1, 'SEO', 'Reach the top of Google', 1, 'SEO - Search engine optimization', 'Rich Internet Applications deliver an interface that is quicker and more responsive than classic applications.', '<p><img src="../../../assets/js/uploaded/slider-slide-1.jpg" alt="" width="940" height="380" /></p>', 'http://localhost/leerobertsonx/website/seo'),
(2, 'Design', 'Unique Web 2.0 Design', 2, 'Web Design', 'L.R.X will help you to make a strong impact on your partners and clients!', '<p><img src="../../../assets/js/uploaded/slider-slide-2.jpg" alt="" width="940" height="380" /></p>', 'http://localhost/leerobertsonx/website/webDesign'),
(3, 'Developement', '100% money back guarantee', 3, 'Web developement', 'Rich Internet Applications deliver an interface that is quicker and more responsive than classic applications.', '<p><img src="../../../assets/js/uploaded/slider-slide-4.jpg" alt="" width="940" height="380" /></p>', 'http://localhost/leerobertsonx/website/webDevelopement'),
(4, 'Money back', '100% money back guarantee', 4, '100% money back', 'We ensure that all clients are happy with our work. Should you for any reason not be completely satisfied with our work, and we cannot produce what you are seeking you can simply notify us and we will provide you with a refund less design fees.', '<p><img src="../../../assets/leerobertsonx/images/placeholders/slider-slide-3.jpg" alt="" width="448" height="798" /></p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_homepage_slogan`
--

CREATE TABLE IF NOT EXISTS `n_lee_homepage_slogan` (
  `slogan` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_lee_homepage_slogan`
--

INSERT INTO `n_lee_homepage_slogan` (`slogan`) VALUES
('We are a group of experienced designers and developers.\r\nWe set new standards in user experience & make future happen.');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_portfolio`
--

CREATE TABLE IF NOT EXISTS `n_lee_portfolio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `n_lee_portfolio`
--

INSERT INTO `n_lee_portfolio` (`id`, `title`, `name`, `type`, `url`, `image`, `date`) VALUES
(1, 'Altered', 'Altered - Something abstract', '1', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-20'),
(2, 'Snow Tower', 'Snow Tower - ', '1', 'assets/leerobertsonx/images/placeholders/portfolio-project-3rd-3.jpg', 'assets/leerobertsonx/images/placeholders/portfolio-project-3rd-3.jpg', '0000-00-00'),
(3, 'Shift', 'Shift - Abstract animation using Modo & After Effects.', '2', 'http://www.youtube.com/embed/kEogJacjLTE', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-21'),
(4, 'Trantor', 'Trantor - planet city', '1', 'assets/leerobertsonx/images/placeholders/portfolio-project-3rd-3.jpg', 'assets/leerobertsonx/images/placeholders/portfolio-project-3rd-3.jpg', '0000-00-00'),
(5, 'Not the end', 'Not the end - The beginning of the end.', '1', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', '2012-07-21'),
(6, 'Synergy', 'Synergy - The name says it all.', '1', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-21'),
(7, 'The Game', 'The Game - Canon 5D Canon 28mm f/2.8 Studio Shot.', '1', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', '2012-07-21'),
(8, 'Futurisk', 'Futurisk - ', '1', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', '2012-07-21'),
(9, 'Forrst App UI Design Mockups', 'Forrst Android App UI Design Mockups - UI design for a Forrst Android App concept.', '1', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-21'),
(10, 'Forbidden Words', 'Forbidden Words - ', '1', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', '2012-07-21'),
(11, 'Static Adventure', 'Static Adventure - ', '1', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', '2012-07-21'),
(12, 'Nothing endures but change', 'Nothing endures but change - ', '1', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', '2012-07-21'),
(13, 'The Travelers', 'The Travelers - ', '1', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-21'),
(14, 'Boombox', 'Boombox -', '1', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', 'assets/js/uploaded/portfolio-project-3rd-2.jpg', '2012-07-21'),
(15, 'Impossible is nothing', 'Impossible is nothing - ', '1', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', 'assets/js/uploaded/portfolio-project-3rd-3.jpg', '2012-07-21'),
(16, 'Deadly Kiss', 'Deadly Kiss - ', '1', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', 'assets/js/uploaded/portfolio-project-3rd-4.jpg', '2012-07-21'),
(17, 'Testing!', 'Test -', '1', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', 'assets/js/uploaded/portfolio-project-3rd-1.jpg', '2012-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_portfolio_categories`
--

CREATE TABLE IF NOT EXISTS `n_lee_portfolio_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_lee_portfolio_categories`
--

INSERT INTO `n_lee_portfolio_categories` (`id`, `name`, `date`) VALUES
(1, 'animation', '2012-07-21'),
(2, 'design', '0000-00-00'),
(3, 'illustration', '0000-00-00'),
(4, 'photography', '0000-00-00'),
(5, 'web', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_portfolio_relate_ctg_port`
--

CREATE TABLE IF NOT EXISTS `n_lee_portfolio_relate_ctg_port` (
  `portfolio_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_lee_portfolio_relate_ctg_port`
--

INSERT INTO `n_lee_portfolio_relate_ctg_port` (`portfolio_id`, `category_id`) VALUES
(1, 2),
(1, 3),
(2, 3),
(2, 4),
(4, 3),
(4, 5),
(4, 1),
(5, 1),
(5, 3),
(6, 3),
(6, 4),
(7, 4),
(8, 2),
(8, 3),
(9, 2),
(9, 5),
(10, 1),
(10, 2),
(10, 3),
(11, 2),
(11, 3),
(12, 3),
(12, 5),
(13, 1),
(13, 3),
(14, 1),
(14, 2),
(15, 3),
(15, 4),
(16, 4),
(16, 5),
(3, 1),
(3, 2),
(3, 3),
(17, 1),
(17, 3),
(17, 4);

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_portfolio_types`
--

CREATE TABLE IF NOT EXISTS `n_lee_portfolio_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_lee_portfolio_types`
--

INSERT INTO `n_lee_portfolio_types` (`id`, `name`) VALUES
(1, 'single-image'),
(2, 'iframe video');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_website`
--

CREATE TABLE IF NOT EXISTS `n_lee_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `n_lee_website`
--

INSERT INTO `n_lee_website` (`id`, `title`, `alias`, `content`, `category`, `date`) VALUES
(1, 'SEARCH ENGINE OPTIMIZATION FOR BETTER BUSINESS DEVELOPMENT!', 'seo-1', '<p>SEO-Search Engine Optimization is the skill of increasing a website''s visibility through a wisely planned keyword implementation strategy. SEO-Search Engine Optimization is a long -term marketing strategy that can help you to expand your market reach and build a trustworthy relationship with your clients/customers. SEO - Search Engine Optimization includes market research, keyword research and market analysis. Through these elements businesses are opting for the best marketing campaign through which they \r\ncan get wanted results. When it comes to building your brand the most important thing is to convey your message and promote your business and services in a positive manner. This can help you reach more potential customers/clients and generate leads. SEO - Search Engine Optimization is an integral part of any web development-however if poorly created and realized it can do more damage than good. It''s imperative to have a well developed SEO strategy because your website''s visibility depends on a good SEO implementation.</p> ', 2, '0000-00-00'),
(2, 'DOLSH WEB SEO SOLUTIONS....', 'seo-2', '<p>Dolsh will help you understand the benefits of SEO- Search Engine Optimization and web marketing in general. We are proficient in the field of SEO- Search Engine Optimization and we will develop a custom SEO campaign. Dolsh Web Design Company will do keyword research and phrases and find the best possible solution for your company/business/corporation/individual needs. We understand the importance of a smart implementation and usage of keywords - we will integrate the perfect SEO solution and in that way help you to represent your services/products to your target audience and accomplish recognition on a global level. Our company will develop tailor-made campaigna to fit your specific requirements and enable you to accomplish your business'' objectives. We will analyze and understand the position of your website and help you reach your company''s goals, will generate leads and revenue ultimately maximizing yout profit. Dolsh Web Design Company SEO solutions include:</p>\r\n<ul>\r\n<li>Improvement of your website visibility & position</li>\r\n<li>Retain the existing base & position</li>\r\n<li>Retain the existing cross-linking status</li>\r\n<li>Improve the internal page-linking</li>\r\n<li>Use the foundation of LSA-Latent Semantic Analysis which Google refers too</li>\r\n<li>Establish your social reference through a well planned process - help you build a strong positive reputation</li>\r\n<li>We do SEO consulting thus helping your administrators to handle small SEO tasks and routine maintenance</li>\r\n</ul>\r\n<p>Through all these steps Search Engine Optimization solutions -Dolsh Web Design Company can help you build a recognizable brand, get respectability and of course improve your website''s visibility. Our SEO -Search Engine Optimization solutions will most certainly increase your profit, improve your website''s traffic and in general help you to understand the market and through this understanding to determine your next business move. Dolsh Web Design SEO has solutions for your business.</p>', 2, '0000-00-00'),
(3, 'Small Business Design', 'small-business-design', '<h3>L.R.X will help you to make a strong impact on your partners and clients!</h3>\r\n<p>If you aim to launch your business in a wise manner then you should consider having a website. A well- designed professional website will help you to launch your business, reach new potential clients and most certainly help you to build your brand. A professional website will help you to improve you credibility and also to position your business among the competition.</p>\r\n<p>If your goal is to expand your reach onto new markets then you should definitely have a custom &ndash;made business website. This solution helps companies/businesses to build strong online presence and also to improve online/offline exposure while still reducing the costs of marketing. A professional website will also enable you to do business even if you&rsquo;re out of the office as it represents your company/business.</p>\r\n<p>This marketing vehicle will most certainly help you to land more business deals and reach your target audience even outside of your working hours. A professional website is fully capable of conveying your message while communicating with current/potential business partners or clients. A well-developed professional business website will most certainly help you to make a strong impact while providing you with an opportunity to take your business to the higher level.</p>\r\n<h3>HOW CAN WE HELP YOU?</h3>\r\n<p>Our company provides professional website solutions which will most certainly help you provide your end-users with necessary information and help them to get acquainted with your services/business. We provide innovative, advanced solutions which are focused on helping you to build your brand, attract target audience and further on generate revenue.</p>\r\n<p>We develop professional website design, e-marketing and technical consultation. We can help you to understand how can a professional website improve your business and launch it.</p>\r\n<p>We are focused on your business goals and we offer to analyze your business, competition and market in order to come up with the best professional design according to your specific needs. We can develop an effective design that is fully capable to further maximize your profit. Our approach is based on an in-depth understanding of:</p>\r\n<ul>\r\n<li>Your Business &amp; Goals</li>\r\n<li>Target Industry &amp; Market</li>\r\n<li>Current Business Trends</li>\r\n<li>Your Services and/or Products</li>\r\n<li>Your Website&rsquo;s Strategic Goals</li>\r\n<li>What you Aim to Accomplish with Your Website</li>\r\n</ul>\r\n<p>According to these elements we provide you with a custom-made professional website. We aim to understand every aspect of your business because only then we&rsquo;re completely able to provide you with a tool which can help you to accomplish your aims. We will help you to understand your prospects, position of your competition and even provide e-marketing consultation services. Our services include the following:</p>\r\n<ul>\r\n<li>Custom Brochure Website Design</li>\r\n<li>Custom eCommerce Website Design</li>\r\n<li>Custom Lead Generation Website Design</li>\r\n<li>Business to Business Websites (B2B)</li>\r\n<li>Business to Consumer Websites (B2C)</li>\r\n</ul>\r\n<p>Our innovative solutions are based on a thorough communication with our clients through the whole process and in that manner we&rsquo;re fully capable to produce tailored cutting-edge solutions.</p>', 1, '2012-07-21'),
(4, 'Flash Design', 'flash-design', '<h3>flash solutions- for a dynamic and interactive setting!</h3>\r\n<p>If your goal is to offer a better experience to your users and to provide a dynamic, interactive interface setting then you should look for flash development solutions. Flash is a powerful tool which helps to represent your business/company/firm/individual ventures in an interactive manner and provides an interesting layout for end-users.</p>\r\n<p>Flash provides an opportunity to implement flashy graphics and dynamic feel into a website which conveys your message and offers the target audience a unique experience. Flash action script can also be implemented in HTML based website and provide certain elements developed in Flash.</p>\r\n<p>This can be a handy solution if you are looking to get an eCommerce website which demands interactive elements in the design. Ultimately Flash can be highly manipulated and it can also draw additional attention to your website quickly.</p>\r\n<h3>L.R.X WEB DESIGN EXPERTISE...</h3>\r\n<p>We can develop fully Flash based websites and/or we can implement Flash elements in your website architecture and design. We design Flash based websites and implement advanced action script, thus providing you a tool capable to convey your message, reflect your services and conduct your business, even outside of working hours.</p>\r\n<p>Flash brings fresh concepts to the table and can provide animation, animated banners and other dynamic elements to your website. Flash based websites are not dependent on browsers and will appear in search engine rankings regardless.</p>\r\n<p>We develop Flash based websites according to your specific requirements and that way help you to reflect your services in the perfect manner. Dolsh Web Design Company designers &amp; flash developers can:</p>\r\n<ul>\r\n<li>Implement Flash elements with HTML content and that way allow site crawlers to render your HTML content and give you a higher search engine rankings</li>\r\n<li>Integrate Flash animations, Flash graphics, audio and visual elements in order to create an unique user''s experience</li>\r\n<li>We can create interactive Flash presentations</li>\r\n<li>We can create cutting-edge signs and displays</li>\r\n<li>We can create Flash based education materials</li>\r\n</ul>\r\n<p>Our team of Flash developers has a vast experience and an excellent set of skills. We can create and develop anything you need and we can transform your ideas into creative applications, intros, banners and fully Flash developed websites. Dolsh Web Design Flash based solutions are:</p>\r\n<ul>\r\n<li>Custom Flash Website Development</li>\r\n<li>Flash Animation Development</li>\r\n<li>Flash Animated Banners Development</li>\r\n<li>Flash Intros Development</li>\r\n</ul>\r\n<p>We offer other features too such as Flash embed into an HTML page and thus can give your page layout the dynamics and interactivity you need.</p>', 1, '2012-07-21'),
(5, 'HTML Design', 'html-design', '<h3>let us show you how html can work in your favor!</h3>\r\n<p>HTML based websites are the best marketing vehicle. If you aim to enhance your business and establish good communication with your clients then a custom websites should be your first option. The Internet has become a big market and offers many advertising options.</p>\r\n<p> In order to represent your business/services/products and manage your company properly it''s imperative to own a professional website. A professional website has numerous advantages from promotion, purchase, financial transaction to building a brand- a well designed marketing vessel can take your company far.</p>\r\n<p>HTML based websites are the best solutions simply because they have a blend of search engine friendly technology and creativity which all together can result in higher visibility, improved exposure and better client-company communication for your business. </p>\r\n<h3>L.R.X WEB DESIGN COMPANY OFFERS....</h3>\r\n<p>We have mastered HTML, CSS, JavaScript and other web development languages. We have a lot experience in design and website development- we provide forefront solutions for your business, company and/or corporation.</p>\r\n<p>We develop custom user-friendly, search-engine friendly HTML based websites which are validated and capable to expose you to a broader market. We offer HTML solutions which are optimized and will get high search engine rankings.</p>\r\n<p>We will help you understand the importance of keywords and organic SEO. We provide full web design & development services. We will empower you to take full advantage of your website and expand your business. The benefits of an HTML based website are great and some of these benefits are:</p>\r\n<h4>HTML IS DOMINANT ON THE WEB</h4>\r\n<p>HTML is dominating the World Wide Web. HTML is widely used markup language - this means that your HTML website will be running smoothly and have better browser compatibility. It can also be used to improve search engine rankings that can lead to the improvement of a website''s visibility.</p>\r\n<h4>HTML IS VERY CLEAN</h4>\r\n<p>HTML coding is very clean. This improves loading time of a website and also results in better online positioning and ranking.</p>\r\n<h4>HTML ALLOWS FOR OTHER PROGRAMS TO BE EMBEDDED</h4>\r\n<p>One of the most appealing benefits of HTML is that it can be combined with other scripting languages. This can be/ and is used to create more interesting, interactive, dynamic design and provides end-users a better experience.</p>\r\n<p>Dolsh Web Design develops professional, elegant, creative websites and can add value to your business. </p>', 1, '0000-00-00'),
(6, 'Rich Internet Applications', 'rich-internet-applications', '<h3>RICH INTERNET APPLICATIONS- FOR INTERACTIVE INTERFACES!</h3>\r\n\r\n<p>Rich Internet Applications deliver an interface that is quicker and more responsive than classic applications. RIAs provide end users with a better experience, and facilitates physical, audio and visual interaction. RIA helps improve a static nature of HTML based website and has transformed a static database to an interactive online experience. RIAs have web applications that have a functionality of desktop applications but they have improved functionality. RIAs allows the possibility of online/offline utilization and enables companies to increase productivity and implement a cutting-edge system of communications. RIAs are practical for businesses because they provide a high quality customer services and deliver a wide array of features and functions. Rich Internet Applications offer scalability and usability. They can be used for representing complex processes, for minimizing data transfers, and it manages data rendering etc... RIAs work toward simplifying the registration processes, data analysis, and online shopping.</p>\r\n<h3>DOLSH WEB DESIGN SET OF SKILLS....</h3>\r\n<p>Our team of developers is proficient in building custom rich internet applications. Our developers are working with different technological tools thus provide the perfect solutions for clients. We are ready to analyze your business and implement custom solutions that reflect your business''s vision and idea. Dolsh Web Design team''s set of skills includes. </p>\r\n<ul>\r\n<li>Adobe Flex</li>\r\n<li>Adobe Flash</li>\r\n<li>Ajax</li>\r\n<li>Flash Media Server </li>\r\n<li>Silver Light</li>\r\n<li>WPF </li>\r\n</ul>\r\n<h3>DOLSH WEB DESIGN COMPANY OFFERS CUSTOM RICH INTERNET APPLICATIONS...</h3>\r\n<p>Dolsh Web Design Company possess a lot of experience in building interactive Rich Internet Applications. We offer innovative RIA solutions for businesses,corporations and entertainment companies. We deliver custom RIA solutions and implement forefront applications in order to provide your end-users with a unique experience. Dolsh Web Design Company delivers RIA solutions for:</p>\r\n<ul>\r\n<li>Custom Dynamic Website development</li>\r\n<li>Custom Built RIA solutions</li>\r\n<li>Large scale RIA applications</li>\r\n<li>High-End RIA Solutions - low cost deployment</li>\r\n<li>Complete featured RIA applications</li>\r\n</ul>', 3, '0000-00-00'),
(7, 'Website Redesign', 'website-redesign', '<h3>DOLSH WEB DESIGN COMPANY OFFERS BOLD REDESIGN SOLUTIONS!</h3>\r\n<p>Website redesign will give your existing website a completely fresh look, style and feel. Redesigning a site is perfect for outdated websites which are in need of the latest web solutions. Website is a powerful tool which represents your business/corporation/firm or individual ventures and as such it should be created by the latest trends in design and development. It''s imperative, not only because of the esthetics but also because of the possible out-dated architecture of the website. If you have a website which has been on the web for a while then it probably needs the implementation of fresh SEO solutions in order to improve your website''s visibility. In order to have a website that is completely capable of meeting your marketing needs and achieving your business objective - redesign is a perfect solution. Redesign reduces your costs and yet provides a complete new architecture and design to your existing marketing carrier.</p>\r\n<h3>REDESIGN YOUR WEBSITE - BY THE LATEST STANDARDS...</h3>\r\n<p>Dolsh Web Design Company offers a full website redesign services. Our company provides innovative redesign solutions which will enable you to generate leads and improve your online presence. Our website redesign solutions will turn your out-dated website into a lead- generating marketing vehicle and empower you to achieve your professional goals and objectives. Our team will analyze your current business objectives, your existing website and transform them into a fully functional website. This way you will get a chance to strengthen your online position and brand. Our team of developers will also implement the latest SEO solutions and in that way rank you higher in search-engine directories and listings. We offer to help you enhance your business through smart website redesign and organic SEO strategies. Dolsh Web Design Company offers: </p>\r\n<ul>\r\n<li>Custom & Complete Web Redesign Services (maintenance and updates)</li>\r\n<li>Web Analysis</li>\r\n<li>Organic SEO  Solutions</li>\r\n<li>Existing Website & Content Analytics</li>\r\n<li>Improved Usability & Conversion </li>\r\n<li>In-Depth Research & Analysis</li>\r\n<li>Implementation of Custom Web Applications</li>\r\n</ul>\r\n<p>Website redesign can help to catapult your business forward and improve your website''s functionality. These are all important elements of your offline business and will most certainly help to improve your online exposure and offline exposure as well. Allow us to show how much a website redesign can influence your overall reputation -online as well as the offline.</p>', 3, '0000-00-00'),
(8, 'CMS Solutions', 'cms-solutions', '<h3>CMS -CONTENT MENAGEMENT SYSTEMS FOR A BETTER WEBSITE CONTENT UPDATE, MENAGEMENT AND EDITING!</h3>\r\n<p>A CMS or Content Management System is perfect if your goal is to change, update, delete and add content to your website independently. Content Management Systems enables you to manage your website easily and quickly. CMS allows updates or edits of your website content separately-meaning that you can change text without changing the design and vice versa. Content management systems are also practical because a person can make all the necessary changes without much technical knowledge or skills. This all together enables website owners to manipulate their content or change the design themselves if needed. CMS makes it simple to add new pages, blogs, articles, services, product and images to your website. CMS gives owners a better control of the website content and design without interference from a third party. This particular technique is especially handy if website owners need to make instant changes, add new products/features etc., this way they are capable of finalizing the update themselves.  Basic CMS features include:</p>\r\n<ul>\r\n<li>Database driven site capability</li>\r\n<li>Editable sections such as news, products, services etc...</li>\r\n<li>Topics sections can be edited/changed/added by authors</li>\r\n<li>Customizable layouts (left, center, right menu boxes)</li>\r\n<li>Browser upload of stored images</li>\r\n<li>Dynamic forums/votes booth for an immediate results</li>\r\n<li>Import of formatted documents ( text, graphics etc)</li>\r\n<li>Assignment of different roles/privileges to different users</li>\r\n<li>Alert notification systems for admin to be informed if any changes occurred to the existing content</li>\r\n<li>Version control which gives administrators a complete control of the menagement/document versions</li>\r\n<li>CMS is supported by a centralized archive where all content is stored.</li>\r\n<li>Robust editing systems- enables the complete control of the formatting and documents</li>\r\n</ul>\r\n<p>CMS has extensive features which allows for even better control of your website and for better manipulation of your content. Advanced CMS features include:</p>\r\n<ul>\r\n<li>Change of order of object</li>\r\n<li>Generator for news flash</li>\r\n<li>Author module for submission</li>\r\n<li>Implementation of the large amount of sections, departments, divisions, etc..</li>\r\n<li>Image storage and library</li>\r\n<li>Path finder</li>\r\n<li>News feed management</li>\r\n<li>Text editor</li>\r\n<li>Surveys</li>\r\n<li>Custom made page modules</li>\r\n<li>Easy Banner managment</li>\r\n</ul>\r\n<h3>DOLSH WEB DESIGN COMPANY CONTENT MANAGEMENT SERVICES..</h3>\r\n<p>A CMS allows you to keep track of your site''s content and allows you to make all the necessary changes to your content. The Dolsh Web Design Company can help you to understand how to utilize this tool and take full advantage of content management system. We will implement CMS software into your website and empower you to use CMS according to your needs. We can educate you about the benefits of a regular website update and enable you to provide a high quality customer service for your end-users. CMS -content management system can generate traffic and draw more attention from potential clients/customers. Our company provides a full CMS package and we can empower you to completely control your content, images, texts and that way arrange your website to your specific requirements. The Dolsh Web Design Company offers the following CMS features:</p>\r\n<ul>\r\n<li>Independence for creation of content</li>\r\n<li>Centralized editing tools which are easy accessible</li>\r\n<li>WYSIWYG editing</li>\r\n<li>Technical Independence</li>\r\n<li>Multi-Point Editing </li>\r\n<li>Media management </li>\r\n<li>Document archiving</li>\r\n<li>Document management</li>\r\n<li>Role Assignment</li>\r\n</ul>', 3, '0000-00-00'),
(9, 'Dynamic Websites', 'dynamic-websites', '<h3>DYNAMIC WEBSITES FOR BETTER ONLINE BUSINESS & TRANSACTIONS!</h3>\r\n<p>Dynamic websites are database driven websites. These types of websites are perfect for online banking and businesses. Dynamic websites are starting to take the lead over the classic static type of websites. A dynamic website has numerous benefits and advantages. A dynamic website offers features such as receiving or storing your services, content, member information, products, etc.... Dynamic database driven websites have a feature which can change their layout every time a page is opened and/or reloaded. They can also offer the end-users exactly what they need and what they are looking for -based on their personal likes and dislikes(for example based on the picture, text, section they are clicking). Database driven websites are focused on the implementation of content from databases and that''s how they are capable of changing the content and look of the website every time they are loaded. Dynamic website, as above mentioned -is perfect for online businesses and as such they can help you improve your customers service, change your content, send customized emails and much more. All these elements together will help you to promote your business, improve your website traffic and online-offline exposure. Dynamic websites are a perfect solution if your goal is to present a large amount of information, products and services. </p>\r\n<h3>DOLSH WEB DESIGN COMPANY WILL HELP YOU TO...</h3>\r\n<p>Our company will help you to understand the importance of a well developed dynamic website. We create database driven websites which are capable of handling complex tasks such as: receive, send and/or store products, add, edit, delete content, presenting and/or estimating sales information etc... Our web development team is highly proficient, and is striving for innovative concepts and bold solutions. We are here to help you to promote your business, increase your sales and generate revenue. Dolsh Web Dynamic website features are: </p>\r\n<ul>\r\n<li>Unlimited Product/Services Display</li>\r\n<li>Custom Shopping Carts/eCommerce Solutions</li>\r\n<li>Facility to Manage Content and Links </li>\r\n<li>Dynamic Flash Options & Solutions </li>\r\n<li>User-Friendly Development Solutions</li>\r\n</ul>\r\n<p>Our team of developers is proficient in side-server programming and they can develop and create anything that a client demands. Our set of skills includes:</p>\r\n<ul>\r\n<li>PHP</li>\r\n<li>ASP</li>\r\n<li>PERL</li>\r\n<li>Cold Fusion</li>\r\n<li>JSP</li>\r\n</ul>\r\n<p>We will develop a dynamic website according to your requirements and your company''s needs. We provide solutions which will give your prospective clients a unique feel and amplify your users'' experience. We can create dynamic websites that are highly functional and that can complete your transactions and collect valuable information.</p>', 3, '0000-00-00'),
(10, 'L.R.X WEB DESIGN COMPANY', 'lrx-dolsh-web-design-company', '<p>Web development includes several elements. Web development involves several stages and steps. In order to produce a good website a web developer has to be proficient in coding and markup but also has to be familiar with the organic SEO, search-engine algorithms and web marketing techniques. If your are opting for a professional website or maybe an individual one, you should know that search-engine friendly websites are the most important tool, and are playing a key role in your business and/or individual promotion. Search-engine friendly websites will position your company/business/corporation higher on search-engine listings and that way improve your online exposure and visibility. Web development is much more than just mere coding, it''s a set of skills that involves web analytics, keyword research and almost constant improvement and education.  Web developers should be able to produce a website that is capable to run-smoothly, without technical glitches- a website which has a clean coding and efficient architecture. Only then, will your website fulfill its purpose and bring in the wanted results. A professional team of web developers should also monitor the changes in algorithms in order to provide a healthy, organic SEO and that way ensures good search-engine rankings. Website development procedures are not over when a website is finished- as mentioned earlier- due to changes in the algorithm- website maintenance is a much needed feature. A professional team of web developers should be familiar with all these elements and only then are they fully equipped to provide you with complete web development service.</p>', 4, '0000-00-00'),
(11, 'L.R.X WEB DESIGN COMPANY OFFERS...', 'lrx-web-design-company-offers', '<p>Dolsh Web Design Company has a team of professional developers who are proficient in the fields of website development, rich internet application development, eCommerce solutions, social network and forum systems development. We have a vast experience and we have mastered every technique - we provide cutting-edge solutions. We strive for perfection and that''s why we are constantly improving with the evolution of technology. Dolsh Web Design Company features are:</p>\r\n<ul>\r\n<li>Dynamic Websites & Solutions</li>\r\n<li>Website Re-Design & Solutions</li>\r\n<li>CMS solutions</li>\r\n<li>e-Commerce Website Design</li>\r\n<li>Data Base Driven Web Development</li>\r\n<li>PHP Web Development</li>\r\n<li>RIA- custom rich internet applications</li>\r\n</ul>', 4, '0000-00-00'),
(12, 'SEO - SEARCH ENGINE OPTIMIZATION', 'seo', '<h3>SEARCH ENGINE OPTIMIZATION FOR BETTER BUSINESS DEVELOPMENT!</h3>\r\n<p>SEO-Search Engine Optimization is the skill of increasing a website''s visibility through a wisely planned keyword implementation strategy. SEO-Search Engine Optimization is a long -term marketing strategy that can help you to expand your market reach and build a trustworthy relationship with your clients/customers. SEO - Search Engine Optimization includes market research, keyword research and market analysis. Through these elements businesses are opting for the best marketing campaign through which they can get wanted results. When it comes to building your brand the most important thing is to convey your message and promote your business and services in a positive manner. This can help you reach more potential customers/clients and generate leads. SEO - Search Engine Optimization is an integral part of any web development-however if poorly created and realized it can do more damage than good. It''s imperative to have a well developed SEO strategy because your website''s visibility depends on a good SEO implementation. </p>\r\n<h3>L.R.X WEB SEO SOLUTIONS....</h3>\r\n<p>Dolsh will help you understand the benefits of SEO- Search Engine Optimization and web marketing in general. We are proficient in the field of SEO- Search Engine Optimization and we will develop a custom SEO campaign. Dolsh Web Design Company will do keyword research and phrases and find the best possible solution for your company/business/corporation/individual needs. We understand the importance of a smart implementation and usage of keywords - we will integrate the perfect SEO solution and in that way help you to represent your services/products to your target audience and accomplish recognition on a global level. Our company will develop tailor-made campaigna to fit your specific requirements and enable you to accomplish your business'' objectives. We will analyze and understand the position of your website and help you reach your company''s goals, will generate leads and revenue ultimately maximizing yout profit. Dolsh Web Design Company SEO solutions include:</p>\r\n<ul>\r\n<li>Improvement of your website visibility & position</li>\r\n<li>Retain the existing base & position</li>\r\n<li>Retain the existing cross-linking status</li>\r\n<li>Improve the internal page-linking</li>\r\n<li>Use the foundation of LSA-Latent Semantic Analysis which Google refers too</li>\r\n<li>Establish your social reference through a well planned process - help you build a strong positive reputation</li>\r\n<li>We do SEO consulting thus helping your administrators to handle small SEO tasks and routine maintenance</li>\r\n</ul>\r\n<p>Through all these steps Search Engine Optimization solutions -Dolsh Web Design Company can help you build a recognizable brand, get respectability and of course improve your website''s visibility. Our SEO -Search Engine Optimization solutions will most certainly increase your profit, improve your website''s traffic and in general help you to understand the market and through this understanding to determine your next business move. Dolsh Web Design SEO has solutions for your business.</p>', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `n_lee_website_categories`
--

CREATE TABLE IF NOT EXISTS `n_lee_website_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_lee_website_categories`
--

INSERT INTO `n_lee_website_categories` (`id`, `name`, `date`) VALUES
(1, 'Design', '2012-07-21'),
(2, 'SEO', '2012-07-18'),
(3, 'Web developement', '0000-00-00'),
(4, 'Another Articles', '0000-00-00');

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-07-23 12:02:21', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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