-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2012 at 01:44 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `isc_accountingref`
--

CREATE TABLE IF NOT EXISTS `isc_accountingref` (
  `accountingrefid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accountingrefmoduleid` varchar(100) NOT NULL DEFAULT '',
  `accountingrefexternalid` varchar(100) NOT NULL DEFAULT '',
  `accountingrefnodeid` int(10) unsigned NOT NULL DEFAULT '0',
  `accountingreftype` varchar(20) NOT NULL DEFAULT '',
  `accountingrefvalue` text,
  PRIMARY KEY (`accountingrefid`),
  KEY `i_accountingref_accountingrefmoduleid` (`accountingrefmoduleid`),
  KEY `i_accountingref_accountingrefexternalid` (`accountingrefexternalid`),
  KEY `i_accountingref_accountingrefnodeid` (`accountingrefnodeid`),
  KEY `i_accountingref_accountingreftype` (`accountingreftype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_administrator_log`
--

CREATE TABLE IF NOT EXISTS `isc_administrator_log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `loguserid` int(11) NOT NULL DEFAULT '0',
  `logip` varchar(30) NOT NULL DEFAULT '',
  `logdate` int(11) NOT NULL DEFAULT '0',
  `logtodo` varchar(100) NOT NULL DEFAULT '',
  `logdata` text,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `isc_administrator_log`
--

INSERT INTO `isc_administrator_log` (`logid`, `loguserid`, `logip`, `logdate`, `logtodo`, `logdata`) VALUES
(1, 1, '1', 1336374438, 'processLogin', 'a:1:{i:0;s:5:"valid";}'),
(2, 1, '1', 1336375189, 'changeTemplate', 'a:2:{i:0;s:12:"DiamondRings";i:1;s:4:"blue";}'),
(3, 1, '1', 1336375829, 'saveUpdatedSettings', 'a:0:{}'),
(4, 1, '1', 1336375915, 'changeTemplate', 'a:2:{i:0;s:7:"Flowers";i:1;s:5:"green";}'),
(5, 1, '1', 1336375918, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(6, 1, '1', 1336376020, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(7, 1, '1', 1336376406, 'saveUpdatedSettings', 'a:0:{}'),
(8, 1, '1', 1336376459, 'changeTemplate', 'a:2:{i:0;s:9:"Nightwear";i:1;s:8:"coolblue";}'),
(9, 1, '1', 1336376463, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(10, 1, '1', 1336376539, 'changeTemplate', 'a:2:{i:0;s:10:"StoreSuite";i:1;s:4:"blue";}'),
(11, 1, '1', 1336377361, 'saveUpdatedSettings', 'a:0:{}'),
(12, 1, '1', 1336377469, 'changeTemplate', 'a:2:{i:0;s:9:"Adventure";i:1;s:7:"magenta";}'),
(13, 1, '1', 1336377498, 'changeTemplate', 'a:2:{i:0;s:8:"Antiques";i:1;s:5:"brown";}'),
(14, 1, '1', 1336382133, 'createBanner2', 'a:2:{i:0;i:1;i:1;s:25:"Siêu phàm nhập thánh";}'),
(15, 1, '1', 1336382163, 'editBanner2', 'a:2:{i:0;i:1;i:1;s:25:"Siêu phàm nhập thánh";}'),
(16, 1, '1', 1336382210, 'editBanner2', 'a:2:{i:0;i:1;i:1;s:25:"Siêu phàm nhập thánh";}'),
(17, 1, '1', 1336382245, 'editBanner2', 'a:2:{i:0;i:1;i:1;s:25:"Siêu phàm nhập thánh";}'),
(18, 1, '1', 1336382285, 'changeTemplate', 'a:2:{i:0;s:10:"Brownstore";i:1;s:5:"brown";}'),
(19, 1, '1', 1336382315, 'changeTemplate', 'a:2:{i:0;s:11:"SimpleStore";i:1;s:4:"blue";}'),
(20, 1, '1', 1336382867, 'changeTemplate', 'a:2:{i:0;s:8:"Antiques";i:1;s:5:"brown";}'),
(21, 1, '1', 1336382884, 'changeTemplate', 'a:2:{i:0;s:4:"Baby";i:1;s:6:"pastel";}'),
(22, 1, '1', 1336383642, 'editBanner2', 'a:2:{i:0;i:1;i:1;s:25:"Siêu phàm nhập thánh";}'),
(23, 1, '1', 1336383679, 'deleteBanners', 'a:1:{i:0;i:1;}'),
(24, 1, '1', 1336386600, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(25, 1, '1', 1336388813, 'AjaxExport', 'a:0:{}'),
(26, 1, '1', 1336388837, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(27, 1, '1', 1336388869, 'editFile', 'a:1:{i:0;s:12:"default.html";}'),
(28, 1, '1', 1336388878, 'editFile', 'a:1:{i:0;s:17:"Styles/styles.css";}'),
(29, 1, '1', 1336476931, 'processLogin', 'a:1:{i:0;s:5:"valid";}');

-- --------------------------------------------------------

--
-- Table structure for table `isc_banners`
--

CREATE TABLE IF NOT EXISTS `isc_banners` (
  `bannerid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `content` longtext,
  `page` enum('home_page','category_page','brand_page','search_page') NOT NULL DEFAULT 'home_page',
  `catorbrandid` int(11) NOT NULL DEFAULT '0',
  `location` enum('top','bottom') NOT NULL DEFAULT 'top',
  `datecreated` int(11) NOT NULL DEFAULT '0',
  `datetype` enum('always','custom') NOT NULL DEFAULT 'always',
  `datefrom` int(11) NOT NULL DEFAULT '0',
  `dateto` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`bannerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_brands`
--

CREATE TABLE IF NOT EXISTS `isc_brands` (
  `brandid` int(11) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(255) NOT NULL DEFAULT '',
  `brandpagetitle` varchar(250) NOT NULL DEFAULT '',
  `brandmetakeywords` text,
  `brandmetadesc` text,
  `brandimagefile` varchar(255) NOT NULL DEFAULT '',
  `brandsearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`brandid`),
  UNIQUE KEY `u_brands_brandname` (`brandname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `isc_brands`
--

INSERT INTO `isc_brands` (`brandid`, `brandname`, `brandpagetitle`, `brandmetakeywords`, `brandmetadesc`, `brandimagefile`, `brandsearchkeywords`) VALUES
(1, 'Apple', '', '', '', '', ''),
(2, 'Microsoft', '', '', '', '', ''),
(3, 'Elgato', '', NULL, NULL, '', ''),
(4, 'Logitech', '', NULL, NULL, '', ''),
(5, 'Crumpler', '', NULL, NULL, '', ''),
(6, 'Higher Ground', '', NULL, NULL, '', ''),
(7, 'Speck', '', NULL, NULL, '', ''),
(8, 'booq', '', NULL, NULL, '', ''),
(9, 'Incase', '', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_brand_search`
--

CREATE TABLE IF NOT EXISTS `isc_brand_search` (
  `brandsearchid` int(11) NOT NULL AUTO_INCREMENT,
  `brandid` int(11) NOT NULL DEFAULT '0',
  `brandname` varchar(250) NOT NULL DEFAULT '',
  `brandpagetitle` varchar(250) NOT NULL DEFAULT '',
  `brandsearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`brandsearchid`),
  KEY `i_brand_search_brandid` (`brandid`),
  FULLTEXT KEY `brandname` (`brandname`,`brandpagetitle`,`brandsearchkeywords`),
  FULLTEXT KEY `brandname2` (`brandname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `isc_brand_search`
--

INSERT INTO `isc_brand_search` (`brandsearchid`, `brandid`, `brandname`, `brandpagetitle`, `brandsearchkeywords`) VALUES
(1, 1, 'Apple', '', ''),
(2, 2, 'Microsoft', '', ''),
(3, 3, 'Elgato', '', ''),
(4, 4, 'Logitech', '', ''),
(5, 5, 'Crumpler', '', ''),
(6, 6, 'Higher Ground', '', ''),
(7, 7, 'Speck', '', ''),
(8, 8, 'booq', '', ''),
(9, 9, 'Incase', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_brand_words`
--

CREATE TABLE IF NOT EXISTS `isc_brand_words` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL DEFAULT '',
  `brandid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wordid`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_categories`
--

CREATE TABLE IF NOT EXISTS `isc_categories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `catparentid` int(11) DEFAULT '0',
  `catname` varchar(50) NOT NULL DEFAULT '',
  `catdesc` text NOT NULL,
  `catviews` int(11) NOT NULL DEFAULT '0',
  `catsort` int(11) NOT NULL DEFAULT '0',
  `catpagetitle` varchar(250) NOT NULL DEFAULT '',
  `catmetakeywords` text,
  `catmetadesc` text,
  `catlayoutfile` varchar(50) NOT NULL DEFAULT '',
  `catparentlist` text,
  `catimagefile` varchar(255) NOT NULL DEFAULT '',
  `catvisible` tinyint(4) NOT NULL DEFAULT '1',
  `catsearchkeywords` varchar(255) NOT NULL DEFAULT '',
  `cat_enable_optimizer` tinyint(1) NOT NULL DEFAULT '0',
  `catnsetleft` int(11) unsigned NOT NULL DEFAULT '0',
  `catnsetright` int(11) unsigned NOT NULL DEFAULT '0',
  `cataltcategoriescache` text,
  PRIMARY KEY (`categoryid`),
  KEY `i_categoryid_catnsetleft_catnsetright` (`categoryid`,`catnsetleft`,`catnsetright`),
  KEY `i_catnsetleft` (`catnsetleft`),
  KEY `i_catparentid_catsort_catname` (`catparentid`,`catsort`,`catname`),
  KEY `i_catvisible_catsort_catname` (`catvisible`,`catsort`,`catname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `isc_categories`
--

INSERT INTO `isc_categories` (`categoryid`, `catparentid`, `catname`, `catdesc`, `catviews`, `catsort`, `catpagetitle`, `catmetakeywords`, `catmetadesc`, `catlayoutfile`, `catparentlist`, `catimagefile`, `catvisible`, `catsearchkeywords`, `cat_enable_optimizer`, `catnsetleft`, `catnsetright`, `cataltcategoriescache`) VALUES
(1, 0, 'Shop Mac', '', 0, 0, '', '', '', 'category.html', '1', '', 1, '', 0, 9, 18, NULL),
(2, 0, 'Shop iPhone', '', 0, 0, '', '', '', 'category.html', '2', '', 1, '', 0, 1, 4, NULL),
(3, 0, 'Shop iPod', '', 0, 0, '', '', '', 'category.html', '3', '', 1, '', 0, 5, 8, NULL),
(4, 1, 'Accessories', '', 0, 0, '', '', '', 'category.html', '1,4', '', 1, '', 0, 10, 11, NULL),
(5, 1, 'Notebook Cases', '', 0, 0, '', '', '', 'category.html', '1,5', '', 1, '', 0, 12, 13, NULL),
(6, 1, 'Video Devices', '', 0, 0, '', '', '', 'category.html', '1,6', '', 1, '', 0, 16, 17, NULL),
(7, 2, 'Accessories', '', 0, 0, '', '', '', 'category.html', '2,7', '', 1, '', 0, 2, 3, NULL),
(8, 3, 'Accessories', '', 0, 0, '', '', '', 'category.html', '3,8', '', 1, '', 0, 6, 7, NULL),
(9, 1, 'Software', '<br/>', 0, 0, '', '', '', 'category.html', '1,9', '', 1, '', 0, 14, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `isc_categoryassociations`
--

CREATE TABLE IF NOT EXISTS `isc_categoryassociations` (
  `associationid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT '0',
  `categoryid` int(11) DEFAULT '0',
  PRIMARY KEY (`associationid`),
  KEY `i_categoryassociations_prodcat` (`productid`,`categoryid`),
  KEY `i_categoryassociations_catprod` (`categoryid`,`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `isc_categoryassociations`
--

INSERT INTO `isc_categoryassociations` (`associationid`, `productid`, `categoryid`) VALUES
(86, 1, 3),
(87, 2, 3),
(83, 3, 3),
(81, 4, 3),
(80, 5, 1),
(79, 6, 1),
(78, 7, 1),
(77, 8, 6),
(76, 9, 6),
(75, 10, 9),
(74, 11, 9),
(73, 12, 9),
(72, 13, 9),
(71, 14, 4),
(70, 15, 4),
(69, 16, 4),
(89, 17, 4),
(68, 18, 5),
(67, 19, 5),
(66, 20, 5),
(65, 21, 5),
(63, 22, 7),
(64, 22, 8),
(59, 23, 7),
(60, 23, 8),
(58, 24, 8),
(57, 25, 8),
(56, 26, 7),
(55, 27, 7),
(54, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_category_search`
--

CREATE TABLE IF NOT EXISTS `isc_category_search` (
  `categorysearchid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL DEFAULT '0',
  `catname` varchar(250) NOT NULL DEFAULT '',
  `catdesc` text NOT NULL,
  `catsearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`categorysearchid`),
  KEY `i_category_search_categoryid` (`categoryid`),
  FULLTEXT KEY `catname` (`catname`,`catdesc`,`catsearchkeywords`),
  FULLTEXT KEY `catname2` (`catname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `isc_category_search`
--

INSERT INTO `isc_category_search` (`categorysearchid`, `categoryid`, `catname`, `catdesc`, `catsearchkeywords`) VALUES
(1, 1, 'Shop Mac', '', ''),
(2, 2, 'Shop iPhone', '', ''),
(3, 3, 'Shop iPod', '', ''),
(4, 4, 'Accessories', '', ''),
(5, 5, 'Notebook Cases', '', ''),
(6, 6, 'Video Devices', '', ''),
(7, 7, 'Accessories', '', ''),
(8, 8, 'Accessories', '', ''),
(9, 9, 'Software', '<br/>', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_category_words`
--

CREATE TABLE IF NOT EXISTS `isc_category_words` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL DEFAULT '',
  `categoryid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wordid`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_config`
--

CREATE TABLE IF NOT EXISTS `isc_config` (
  `database_version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isc_config`
--

INSERT INTO `isc_config` (`database_version`) VALUES
(6101);

-- --------------------------------------------------------

--
-- Table structure for table `isc_countries`
--

CREATE TABLE IF NOT EXISTS `isc_countries` (
  `countryid` int(11) NOT NULL AUTO_INCREMENT,
  `countrycouregid` int(11) DEFAULT NULL,
  `countryname` varchar(255) NOT NULL DEFAULT '',
  `countryiso2` char(2) NOT NULL DEFAULT '',
  `countryiso3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`countryid`),
  KEY `i_regions_countrycouregid` (`countrycouregid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `isc_countries`
--

INSERT INTO `isc_countries` (`countryid`, `countrycouregid`, `countryname`, `countryiso2`, `countryiso3`) VALUES
(1, NULL, 'Afghanistan', 'AF', 'AFG'),
(2, NULL, 'Albania', 'AL', 'ALB'),
(3, NULL, 'Algeria', 'DZ', 'DZA'),
(4, NULL, 'American Samoa', 'AS', 'ASM'),
(5, NULL, 'Andorra', 'AD', 'AND'),
(6, NULL, 'Angola', 'AO', 'AGO'),
(7, NULL, 'Anguilla', 'AI', 'AIA'),
(8, NULL, 'Antarctica', 'AQ', '\r'),
(9, NULL, 'Antigua and Barbuda', 'AG', 'ATG'),
(10, NULL, 'Argentina', 'AR', 'ARG'),
(11, NULL, 'Armenia', 'AM', 'ARM'),
(12, NULL, 'Aruba', 'AW', 'ABW'),
(13, NULL, 'Australia', 'AU', 'AUS'),
(14, 1, 'Austria', 'AT', 'AUT'),
(15, NULL, 'Azerbaijan', 'AZ', 'AZE'),
(16, NULL, 'Bahamas', 'BS', 'BHS'),
(17, NULL, 'Bahrain', 'BH', 'BHR'),
(18, NULL, 'Bangladesh', 'BD', 'BGD'),
(19, NULL, 'Barbados', 'BB', 'BRB'),
(20, NULL, 'Belarus', 'BY', 'BLR'),
(21, 1, 'Belgium', 'BE', 'BEL'),
(22, NULL, 'Belize', 'BZ', 'BLZ'),
(23, NULL, 'Benin', 'BJ', 'BEN'),
(24, NULL, 'Bermuda', 'BM', 'BMU'),
(25, NULL, 'Bhutan', 'BT', 'BTN'),
(26, NULL, 'Bolivia', 'BO', 'BOL'),
(27, NULL, 'Bosnia and Herzegovina', 'BA', 'BIH'),
(28, NULL, 'Botswana', 'BW', 'BWA'),
(29, NULL, 'Bouvet Island', 'BV', 'NUL'),
(30, NULL, 'Brazil', 'BR', 'BRA'),
(31, NULL, 'British Indian Ocean Territory', 'IO', 'NUL'),
(32, NULL, 'Brunei Darussalam', 'BN', 'BRN'),
(33, 1, 'Bulgaria', 'BG', 'BGR'),
(34, NULL, 'Burkina Faso', 'BF', 'BFA'),
(35, NULL, 'Burundi', 'BI', 'BDI'),
(36, NULL, 'Cambodia', 'KH', 'KHM'),
(37, NULL, 'Cameroon', 'CM', 'CMR'),
(38, NULL, 'Canada', 'CA', 'CAN'),
(39, NULL, 'Cape Verde', 'CV', 'CPV'),
(40, NULL, 'Cayman Islands', 'KY', 'CYM'),
(41, NULL, 'Central African Republic', 'CF', 'CAF'),
(42, NULL, 'Chad', 'TD', 'TCD'),
(43, NULL, 'Chile', 'CL', 'CHL'),
(44, NULL, 'China', 'CN', 'CHN'),
(45, NULL, 'Christmas Island', 'CX', 'NUL'),
(46, NULL, 'Cocos (Keeling) Islands', 'CC', 'NUL'),
(47, NULL, 'Colombia', 'CO', 'COL'),
(48, NULL, 'Comoros', 'KM', 'COM'),
(49, NULL, 'Congo', 'CG', 'COG'),
(50, NULL, 'Congo, the Democratic Republic of the', 'CD', 'COD'),
(51, NULL, 'Cook Islands', 'CK', 'COK'),
(52, NULL, 'Costa Rica', 'CR', 'CRI'),
(54, NULL, 'Croatia', 'HR', 'HRV'),
(55, NULL, 'Cuba', 'CU', 'CUB'),
(56, NULL, 'Cyprus', 'CY', 'CYP'),
(57, NULL, 'Czech Republic', 'CZ', 'CZE'),
(58, NULL, 'Denmark', 'DK', 'DNK'),
(59, NULL, 'Djibouti', 'DJ', 'DJI'),
(60, NULL, 'Dominica', 'DM', 'DMA'),
(61, NULL, 'Dominican Republic', 'DO', 'DOM'),
(62, NULL, 'Ecuador', 'EC', 'ECU'),
(63, NULL, 'Egypt', 'EG', 'EGY'),
(64, NULL, 'El Salvador', 'SV', 'SLV'),
(65, NULL, 'Equatorial Guinea', 'GQ', 'GNQ'),
(66, NULL, 'Eritrea', 'ER', 'ERI'),
(67, NULL, 'Estonia', 'EE', 'EST'),
(68, NULL, 'Ethiopia', 'ET', 'ETH'),
(69, NULL, 'Falkland Islands (Malvinas)', 'FK', 'FLK'),
(70, NULL, 'Faroe Islands', 'FO', 'FRO'),
(71, NULL, 'Fiji', 'FJ', 'FJI'),
(72, 1, 'Finland', 'FI', 'FIN'),
(73, 1, 'France', 'FR', 'FRA'),
(74, NULL, 'French Guiana', 'GF', 'GUF'),
(75, NULL, 'French Polynesia', 'PF', 'PYF'),
(76, NULL, 'French Southern Territories', 'TF', 'NUL'),
(77, NULL, 'Gabon', 'GA', 'GAB'),
(78, NULL, 'Gambia', 'GM', 'GMB'),
(79, NULL, 'Georgia', 'GE', 'GEO'),
(80, 1, 'Germany', 'DE', 'DEU'),
(81, NULL, 'Ghana', 'GH', 'GHA'),
(82, NULL, 'Gibraltar', 'GI', 'GIB'),
(83, 1, 'Greece', 'GR', 'GRC'),
(84, NULL, 'Greenland', 'GL', 'GRL'),
(85, NULL, 'Grenada', 'GD', 'GRD'),
(86, NULL, 'Guadeloupe', 'GP', 'GLP'),
(87, NULL, 'Guam', 'GU', 'GUM'),
(88, NULL, 'Guatemala', 'GT', 'GTM'),
(89, NULL, 'Guinea', 'GN', 'GIN'),
(90, NULL, 'Guinea-Bissau', 'GW', 'GNB'),
(91, NULL, 'Guyana', 'GY', 'GUY'),
(92, NULL, 'Haiti', 'HT', 'HTI'),
(93, NULL, 'Heard Island and Mcdonald Islands', 'HM', '\r'),
(94, NULL, 'Holy See (Vatican City State)', 'VA', 'VAT'),
(95, NULL, 'Honduras', 'HN', 'HND'),
(96, NULL, 'Hong Kong', 'HK', 'HKG'),
(97, NULL, 'Hungary', 'HU', 'HUN'),
(98, NULL, 'Iceland', 'IS', 'ISL'),
(99, NULL, 'India', 'IN', 'IND'),
(100, NULL, 'Indonesia', 'ID', 'IDN'),
(101, NULL, 'Iran, Islamic Republic of', 'IR', 'IRN'),
(102, NULL, 'Iraq', 'IQ', 'IRQ'),
(103, 1, 'Ireland', 'IE', 'IRL'),
(104, NULL, 'Israel', 'IL', 'ISR'),
(105, 1, 'Italy', 'IT', 'ITA'),
(106, NULL, 'Jamaica', 'JM', 'JAM'),
(107, NULL, 'Japan', 'JP', 'JPN'),
(108, NULL, 'Jordan', 'JO', 'JOR'),
(109, NULL, 'Kazakhstan', 'KZ', 'KAZ'),
(110, NULL, 'Kenya', 'KE', 'KEN'),
(111, NULL, 'Kiribati', 'KI', 'KIR'),
(113, NULL, 'Korea, Republic of', 'KR', 'KOR'),
(114, NULL, 'Kuwait', 'KW', 'KWT'),
(115, NULL, 'Kyrgyzstan', 'KG', 'KGZ'),
(117, NULL, 'Latvia', 'LV', 'LVA'),
(118, NULL, 'Lebanon', 'LB', 'LBN'),
(119, NULL, 'Lesotho', 'LS', 'LSO'),
(120, NULL, 'Liberia', 'LR', 'LBR'),
(121, NULL, 'Libyan Arab Jamahiriya', 'LY', 'LBY'),
(122, NULL, 'Liechtenstein', 'LI', 'LIE'),
(123, NULL, 'Lithuania', 'LT', 'LTU'),
(124, 1, 'Luxembourg', 'LU', 'LUX'),
(125, NULL, 'Macao', 'MO', 'MAC'),
(126, NULL, 'Macedonia, the Former Yugoslav Republic of', 'MK', 'MKD'),
(127, NULL, 'Madagascar', 'MG', 'MDG'),
(128, NULL, 'Malawi', 'MW', 'MWI'),
(129, NULL, 'Malaysia', 'MY', 'MYS'),
(130, NULL, 'Maldives', 'MV', 'MDV'),
(131, NULL, 'Mali', 'ML', 'MLI'),
(132, NULL, 'Malta', 'MT', 'MLT'),
(133, NULL, 'Marshall Islands', 'MH', 'MHL'),
(134, NULL, 'Martinique', 'MQ', 'MTQ'),
(135, NULL, 'Mauritania', 'MR', 'MRT'),
(136, NULL, 'Mauritius', 'MU', 'MUS'),
(137, NULL, 'Mayotte', 'YT', 'NUL'),
(138, NULL, 'Mexico', 'MX', 'MEX'),
(139, NULL, 'Micronesia, Federated States of', 'FM', 'FSM'),
(140, NULL, 'Moldova, Republic of', 'MD', 'MDA'),
(141, NULL, 'Monaco', 'MC', 'MCO'),
(142, NULL, 'Mongolia', 'MN', 'MNG'),
(143, NULL, 'Montserrat', 'MS', 'MSR'),
(144, NULL, 'Morocco', 'MA', 'MAR'),
(145, NULL, 'Mozambique', 'MZ', 'MOZ'),
(146, NULL, 'Myanmar', 'MM', 'MMR'),
(147, NULL, 'Namibia', 'NA', 'NAM'),
(148, NULL, 'Nauru', 'NR', 'NRU'),
(149, NULL, 'Nepal', 'NP', 'NPL'),
(150, 1, 'Netherlands', 'NL', 'NLD'),
(151, NULL, 'Netherlands Antilles', 'AN', 'ANT'),
(152, NULL, 'New Caledonia', 'NC', 'NCL'),
(153, NULL, 'New Zealand', 'NZ', 'NZL'),
(154, NULL, 'Nicaragua', 'NI', 'NIC'),
(155, NULL, 'Niger', 'NE', 'NER'),
(156, NULL, 'Nigeria', 'NG', 'NGA'),
(157, NULL, 'Niue', 'NU', 'NIU'),
(158, NULL, 'Norfolk Island', 'NF', 'NFK'),
(159, NULL, 'Northern Mariana Islands', 'MP', 'MNP'),
(160, NULL, 'Norway', 'NO', 'NOR'),
(161, NULL, 'Oman', 'OM', 'OMN'),
(162, NULL, 'Pakistan', 'PK', 'PAK'),
(163, NULL, 'Palau', 'PW', 'PLW'),
(164, NULL, 'Palestinian Territory, Occupied', 'PS', 'NUL'),
(165, NULL, 'Panama', 'PA', 'PAN'),
(166, NULL, 'Papua New Guinea', 'PG', 'PNG'),
(167, NULL, 'Paraguay', 'PY', 'PRY'),
(168, NULL, 'Peru', 'PE', 'PER'),
(169, NULL, 'Philippines', 'PH', 'PHL'),
(170, NULL, 'Pitcairn', 'PN', 'PCN'),
(171, NULL, 'Poland', 'PL', 'POL'),
(172, 1, 'Portugal', 'PT', 'PRT'),
(173, NULL, 'Puerto Rico', 'PR', 'PRI'),
(174, NULL, 'Qatar', 'QA', 'QAT'),
(175, NULL, 'Reunion', 'RE', 'REU'),
(176, NULL, 'Romania', 'RO', 'ROM'),
(177, NULL, 'Russian Federation', 'RU', 'RUS'),
(178, NULL, 'Rwanda', 'RW', 'RWA'),
(179, NULL, 'Saint Helena', 'SH', 'SHN'),
(180, NULL, 'Saint Kitts and Nevis', 'KN', 'KNA'),
(181, NULL, 'Saint Lucia', 'LC', 'LCA'),
(182, NULL, 'Saint Pierre and Miquelon', 'PM', 'SPM'),
(183, NULL, 'Saint Vincent and the Grenadines', 'VC', 'VCT'),
(184, NULL, 'Samoa', 'WS', 'WSM'),
(185, NULL, 'San Marino', 'SM', 'SMR'),
(186, NULL, 'Sao Tome and Principe', 'ST', 'STP'),
(187, NULL, 'Saudi Arabia', 'SA', 'SAU'),
(188, NULL, 'Senegal', 'SN', 'SEN'),
(189, NULL, 'Serbia', 'RS', 'SRB'),
(190, NULL, 'Seychelles', 'SC', 'SYC'),
(191, NULL, 'Sierra Leone', 'SL', 'SLE'),
(192, NULL, 'Singapore', 'SG', 'SGP'),
(193, NULL, 'Slovakia', 'SK', 'SVK'),
(194, NULL, 'Slovenia', 'SI', 'SVN'),
(195, NULL, 'Solomon Islands', 'SB', 'SLB'),
(196, NULL, 'Somalia', 'SO', 'SOM'),
(197, NULL, 'South Africa', 'ZA', 'ZAF'),
(198, NULL, 'South Georgia and the South Sandwich Islands', 'GS', 'NUL'),
(199, 1, 'Spain', 'ES', 'ESP'),
(200, NULL, 'Sri Lanka', 'LK', 'LKA'),
(201, NULL, 'Sudan', 'SD', 'SDN'),
(202, NULL, 'Suriname', 'SR', 'SUR'),
(203, NULL, 'Svalbard and Jan Mayen', 'SJ', 'SJM'),
(204, NULL, 'Swaziland', 'SZ', 'SWZ'),
(205, NULL, 'Sweden', 'SE', 'SWE'),
(206, NULL, 'Switzerland', 'CH', 'CHE'),
(207, NULL, 'Syrian Arab Republic', 'SY', 'SYR'),
(208, NULL, 'Taiwan', 'TW', 'TWN'),
(209, NULL, 'Tajikistan', 'TJ', 'TJK'),
(210, NULL, 'Tanzania, United Republic of', 'TZ', 'TZA'),
(211, NULL, 'Thailand', 'TH', 'THA'),
(212, NULL, 'Timor-Leste', 'TL', 'NUL'),
(213, NULL, 'Togo', 'TG', 'TGO'),
(214, NULL, 'Tokelau', 'TK', 'TKL'),
(215, NULL, 'Tonga', 'TO', 'TON'),
(216, NULL, 'Trinidad and Tobago', 'TT', 'TTO'),
(217, NULL, 'Tunisia', 'TN', 'TUN'),
(218, NULL, 'Turkey', 'TR', 'TUR'),
(219, NULL, 'Turkmenistan', 'TM', 'TKM'),
(220, NULL, 'Turks and Caicos Islands', 'TC', 'TCA'),
(221, NULL, 'Tuvalu', 'TV', 'TUV'),
(222, NULL, 'Uganda', 'UG', 'UGA'),
(223, NULL, 'Ukraine', 'UA', 'UKR'),
(224, NULL, 'United Arab Emirates', 'AE', 'ARE'),
(225, NULL, 'United Kingdom', 'GB', 'GBR'),
(226, NULL, 'United States', 'US', 'USA'),
(227, NULL, 'United States Minor Outlying Islands', 'UM', '\r'),
(228, NULL, 'Uruguay', 'UY', 'URY'),
(229, NULL, 'Uzbekistan', 'UZ', 'UZB'),
(230, NULL, 'Vanuatu', 'VU', 'VUT'),
(231, NULL, 'Venezuela', 'VE', 'VEN'),
(232, NULL, 'Viet Nam', 'VN', 'VNM'),
(233, NULL, 'Virgin Islands, British', 'VG', 'VGB'),
(234, NULL, 'Virgin Islands, U.S.', 'VI', 'VIR'),
(235, NULL, 'Wallis and Futuna', 'WF', 'WLF'),
(236, NULL, 'Western Sahara', 'EH', 'ESH'),
(237, NULL, 'Yemen', 'YE', 'YEM'),
(238, NULL, 'Zambia', 'ZM', 'ZMB'),
(239, NULL, 'Zimbabwe', 'ZW', 'ZWE'),
(240, NULL, 'Isle of Man', 'IM', 'IMN'),
(241, NULL, 'Jersey', 'JE', 'JEY'),
(242, NULL, 'Guernsey', 'GG', 'GGY'),
(243, NULL, 'Lao People''s Democratic Republic', 'LA', 'LAO'),
(244, NULL, 'Korea, Democratic People''s Republic of', 'KP', 'PRK'),
(245, NULL, 'Montenegro', 'ME', 'MNE');

-- --------------------------------------------------------

--
-- Table structure for table `isc_country_regions`
--

CREATE TABLE IF NOT EXISTS `isc_country_regions` (
  `couregid` int(11) NOT NULL AUTO_INCREMENT,
  `couregname` varchar(255) NOT NULL DEFAULT '',
  `couregiso2` char(2) NOT NULL DEFAULT '',
  `couregiso3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`couregid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_country_regions`
--

INSERT INTO `isc_country_regions` (`couregid`, `couregname`, `couregiso2`, `couregiso3`) VALUES
(1, 'European Union', 'EU', 'EUR');

-- --------------------------------------------------------

--
-- Table structure for table `isc_country_states`
--

CREATE TABLE IF NOT EXISTS `isc_country_states` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(255) NOT NULL DEFAULT '',
  `statecountry` int(11) NOT NULL DEFAULT '0',
  `stateabbrv` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`stateid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=400 ;

--
-- Dumping data for table `isc_country_states`
--

INSERT INTO `isc_country_states` (`stateid`, `statename`, `statecountry`, `stateabbrv`) VALUES
(1, 'Alabama', 226, 'AL'),
(2, 'Alaska', 226, 'AK'),
(3, 'American Samoa', 226, 'AS'),
(4, 'Arizona', 226, 'AZ'),
(5, 'Arkansas', 226, 'AR'),
(6, 'Armed Forces Africa', 226, 'AF'),
(7, 'Armed Forces Americas', 226, 'AA'),
(8, 'Armed Forces Canada', 226, 'AC'),
(9, 'Armed Forces Europe', 226, 'AE'),
(10, 'Armed Forces Middle East', 226, 'AM'),
(11, 'Armed Forces Pacific', 226, 'AP'),
(12, 'California', 226, 'CA'),
(13, 'Colorado', 226, 'CO'),
(14, 'Connecticut', 226, 'CT'),
(15, 'Delaware', 226, 'DE'),
(16, 'District of Columbia', 226, 'DC'),
(17, 'Federated States Of Micronesia', 226, 'FM'),
(18, 'Florida', 226, 'FL'),
(19, 'Georgia', 226, 'GA'),
(20, 'Guam', 226, 'GU'),
(21, 'Hawaii', 226, 'HI'),
(22, 'Idaho', 226, 'ID'),
(23, 'Illinois', 226, 'IL'),
(24, 'Indiana', 226, 'IN'),
(25, 'Iowa', 226, 'IA'),
(26, 'Kansas', 226, 'KS'),
(27, 'Kentucky', 226, 'KY'),
(28, 'Louisiana', 226, 'LA'),
(29, 'Maine', 226, 'ME'),
(30, 'Marshall Islands', 226, 'MH'),
(31, 'Maryland', 226, 'MD'),
(32, 'Massachusetts', 226, 'MA'),
(33, 'Michigan', 226, 'MI'),
(34, 'Minnesota', 226, 'MN'),
(35, 'Mississippi', 226, 'MS'),
(36, 'Missouri', 226, 'MO'),
(37, 'Montana', 226, 'MT'),
(38, 'Nebraska', 226, 'NE'),
(39, 'Nevada', 226, 'NV'),
(40, 'New Hampshire', 226, 'NH'),
(41, 'New Jersey', 226, 'NJ'),
(42, 'New Mexico', 226, 'NM'),
(43, 'New York', 226, 'NY'),
(44, 'North Carolina', 226, 'NC'),
(45, 'North Dakota', 226, 'ND'),
(46, 'Northern Mariana Islands', 226, 'MP'),
(47, 'Ohio', 226, 'OH'),
(48, 'Oklahoma', 226, 'OK'),
(49, 'Oregon', 226, 'OR'),
(50, 'Palau', 226, 'PW'),
(51, 'Pennsylvania', 226, 'PA'),
(52, 'Puerto Rico', 226, 'PR'),
(53, 'Rhode Island', 226, 'RI'),
(54, 'South Carolina', 226, 'SC'),
(55, 'South Dakota', 226, 'SD'),
(56, 'Tennessee', 226, 'TN'),
(57, 'Texas', 226, 'TX'),
(58, 'Utah', 226, 'UT'),
(59, 'Vermont', 226, 'VT'),
(60, 'Virgin Islands', 226, 'VI'),
(61, 'Virginia', 226, 'VA'),
(62, 'Washington', 226, 'WA'),
(63, 'West Virginia', 226, 'WV'),
(64, 'Wisconsin', 226, 'WI'),
(65, 'Wyoming', 226, 'WY'),
(66, 'Alberta', 38, 'AB'),
(67, 'British Columbia', 38, 'BC'),
(68, 'Manitoba', 38, 'MB'),
(69, 'Newfoundland', 38, 'NF'),
(70, 'New Brunswick', 38, 'NB'),
(71, 'Nova Scotia', 38, 'NS'),
(72, 'Northwest Territories', 38, 'NT'),
(73, 'Nunavut', 38, 'NU'),
(74, 'Ontario', 38, 'ON'),
(75, 'Prince Edward Island', 38, 'PE'),
(76, 'Quebec', 38, 'QC'),
(77, 'Saskatchewan', 38, 'SK'),
(78, 'Yukon Territory', 38, 'YT'),
(79, 'Niedersachsen', 80, 'NDS'),
(80, 'Baden-Württemberg', 80, 'BAW'),
(81, 'Bayern', 80, 'BAY'),
(82, 'Berlin', 80, 'BER'),
(83, 'Brandenburg', 80, 'BRG'),
(84, 'Bremen', 80, 'BRE'),
(85, 'Hamburg', 80, 'HAM'),
(86, 'Hessen', 80, 'HES'),
(87, 'Mecklenburg-Vorpommern', 80, 'MEC'),
(88, 'Nordrhein-Westfalen', 80, 'NRW'),
(89, 'Rheinland-Pfalz', 80, 'RHE'),
(90, 'Saarland', 80, 'SAR'),
(91, 'Sachsen', 80, 'SAS'),
(92, 'Sachsen-Anhalt', 80, 'SAC'),
(93, 'Schleswig-Holstein', 80, 'SCN'),
(94, 'Thüringen', 80, 'THE'),
(95, 'Wien', 14, 'WIE'),
(96, 'Niederösterreich', 14, 'NO'),
(97, 'Oberösterreich', 14, 'OO'),
(98, 'Salzburg', 14, 'SB'),
(99, 'Kärnten', 14, 'KN'),
(100, 'Steiermark', 14, 'ST'),
(101, 'Tirol', 14, 'TI'),
(102, 'Burgenland', 14, 'BL'),
(103, 'Voralberg', 14, 'VB'),
(104, 'Aargau', 206, 'AG'),
(105, 'Appenzell Innerrhoden', 206, 'AI'),
(106, 'Appenzell Ausserrhoden', 206, 'APP'),
(107, 'Bern', 206, 'BE'),
(108, 'Basel-Landschaft', 206, 'BLA'),
(109, 'Basel-Stadt', 206, 'BS'),
(110, 'Freiburg', 206, 'FR'),
(111, 'Genf', 206, 'GE'),
(112, 'Glarus', 206, 'GL'),
(113, 'Graubünden', 206, 'JUB'),
(114, 'Jura', 206, 'JU'),
(115, 'Luzern', 206, 'LU'),
(116, 'Neuenburg', 206, 'NEU'),
(117, 'Nidwalden', 206, 'NW'),
(118, 'Obwalden', 206, 'OW'),
(119, 'St. Gallen', 206, 'SG'),
(120, 'Schaffhausen', 206, 'SH'),
(121, 'Solothurn', 206, 'SO'),
(122, 'Schwyz', 206, 'SZ'),
(123, 'Thurgau', 206, 'TG'),
(124, 'Tessin', 206, 'TE'),
(125, 'Uri', 206, 'UR'),
(126, 'Waadt', 206, 'VD'),
(127, 'Wallis', 206, 'VS'),
(128, 'Zug', 206, 'ZG'),
(129, 'Zürich', 206, 'ZH'),
(130, 'A Coruña', 199, 'ACOR'),
(131, 'Alava', 199, 'ALAV'),
(132, 'Albacete', 199, 'ALBA'),
(133, 'Alicante', 199, 'ALIC'),
(134, 'Almeria', 199, 'ALME'),
(135, 'Asturias', 199, 'ASTU'),
(136, 'Avila', 199, 'AVIL'),
(137, 'Badajoz', 199, 'BADA'),
(138, 'Baleares', 199, 'BALE'),
(139, 'Barcelona', 199, 'BARC'),
(140, 'Burgos', 199, 'BURG'),
(141, 'Caceres', 199, 'CACE'),
(142, 'Cadiz', 199, 'CADI'),
(143, 'Cantabria', 199, 'CANT'),
(144, 'Castellon', 199, 'CAST'),
(145, 'Ceuta', 199, 'CEUT'),
(146, 'Ciudad Real', 199, 'CIUD'),
(147, 'Cordoba', 199, 'CORD'),
(148, 'Cuenca', 199, 'CUEN'),
(149, 'Girona', 199, 'GIRO'),
(150, 'Granada', 199, 'GRAN'),
(151, 'Guadalajara', 199, 'GUAD'),
(152, 'Guipuzcoa', 199, 'GUIP'),
(153, 'Huelva', 199, 'HUEL'),
(154, 'Huesca', 199, 'HUES'),
(155, 'Jaen', 199, 'JAEN'),
(156, 'La Rioja', 199, 'LAR'),
(157, 'Las Palmas', 199, 'LAS'),
(158, 'Leon', 199, 'LEON'),
(159, 'Lleida', 199, 'LLEI'),
(160, 'Lugo', 199, 'LUGO'),
(161, 'Madrid', 199, 'MADR'),
(162, 'Malaga', 199, 'MALA'),
(163, 'Melilla', 199, 'MELI'),
(164, 'Murcia', 199, 'MURC'),
(165, 'Navarra', 199, 'NAVA'),
(166, 'Ourense', 199, 'OURE'),
(167, 'Palencia', 199, 'PALE'),
(168, 'Pontevedra', 199, 'PONT'),
(169, 'Salamanca', 199, 'SALA'),
(170, 'Santa Cruz de Tenerife', 199, 'SANT'),
(171, 'Segovia', 199, 'SEGO'),
(172, 'Sevilla', 199, 'SEVI'),
(173, 'Soria', 199, 'SORI'),
(174, 'Tarragona', 199, 'TARR'),
(175, 'Teruel', 199, 'TERU'),
(176, 'Toledo', 199, 'TOLE'),
(177, 'Valencia', 199, 'VALE'),
(178, 'Valladolid', 199, 'VALL'),
(179, 'Vizcaya', 199, 'VIZC'),
(180, 'Zamora', 199, 'ZAMO'),
(181, 'Zaragoza', 199, 'ZARA'),
(182, 'Carlow', 103, 'CW'),
(183, 'Cavan', 103, 'CN'),
(184, 'Clare', 103, 'CE'),
(185, 'Cork', 103, 'C'),
(186, 'Donegal', 103, 'DL'),
(187, 'Dublin', 103, 'D'),
(188, 'Galway', 103, 'G'),
(189, 'Kerry', 103, 'KY'),
(190, 'Kildare', 103, 'KE'),
(191, 'Kilkenny', 103, 'KK'),
(192, 'Laois', 103, 'LS'),
(193, 'Leitrim', 103, 'LM'),
(194, 'Limerick', 103, 'LK'),
(195, 'Longford', 103, 'LD'),
(196, 'Louth', 103, 'LH'),
(197, 'Mayo', 103, 'MO'),
(198, 'Meath', 103, 'MH'),
(199, 'Monaghan', 103, 'MN'),
(200, 'Offaly', 103, 'OY'),
(201, 'Roscommon', 103, 'RN'),
(202, 'Sligo', 103, 'SO'),
(203, 'Tipperary', 103, 'TA'),
(204, 'Waterford', 103, 'WD'),
(205, 'Westmeath', 103, 'WH'),
(206, 'Wexford', 103, 'WX'),
(207, 'Wicklow', 103, 'WW'),
(208, 'Australian Capital Territory', 13, 'ACT'),
(209, 'New South Wales', 13, 'NSW'),
(210, 'Northern Territory', 13, 'NT'),
(211, 'Queensland', 13, 'QLD'),
(212, 'South Australia', 13, 'SA'),
(213, 'Tasmania', 13, 'TAS'),
(214, 'Victoria', 13, 'VIC'),
(215, 'Western Australia', 13, 'WA'),
(216, 'Johor', 129, 'JHR'),
(217, 'Kedah', 129, 'KDH'),
(218, 'Kelantan', 129, 'KTN'),
(219, 'Melaka', 129, 'MLK'),
(220, 'Negeri Sembilan', 129, 'NSN'),
(221, 'Pahang', 129, 'PHG'),
(222, 'Pulau Pinang', 129, 'PNG'),
(223, 'Perak', 129, 'PRK'),
(224, 'Perlis', 129, 'PLS'),
(225, 'Selangor', 129, 'SGR'),
(226, 'Terengganu', 129, 'TRG'),
(227, 'Sabah', 129, 'SBH'),
(228, 'Sarawak', 129, 'SRW'),
(229, 'Kuala Lumpur', 129, 'KUL'),
(230, 'Labuan', 129, 'LBN'),
(231, 'Putrajaya', 129, 'PJY'),
(232, 'Labuan', 129, 'JHR'),
(233, 'Eastern Cape', 197, 'EC'),
(234, 'Free State', 197, 'FS'),
(235, 'Gauteng', 197, 'GT'),
(236, 'KwaZulu-Natal', 197, 'NL'),
(237, 'Limpopo', 197, 'LP'),
(238, 'Mpumalanga', 197, 'MP'),
(239, 'Northern Cape', 197, 'NC'),
(240, 'North-West', 197, 'NW'),
(241, 'Western Cape', 197, 'WC'),
(242, 'Bali', 100, 'BA'),
(243, 'Bangka Belitung', 100, 'BB'),
(244, 'Banten', 100, 'BT'),
(245, 'Bengkulu', 100, 'BE'),
(246, 'Daista Aceh', 100, 'DA'),
(247, 'Jakarta', 100, 'JK'),
(248, 'Sumatera Utara', 100, 'SU'),
(249, 'Sumatera Barat', 100, 'SB'),
(250, 'Riau', 100, 'SI'),
(251, 'Jambi', 100, 'JA'),
(252, 'Sumatera Selatan', 100, 'SS'),
(253, 'Lampung', 100, 'LA'),
(254, 'Jawa Barat', 100, 'JB'),
(255, 'Jawa Tengah', 100, 'JT'),
(256, 'Daista Yogyakarta', 100, 'DY'),
(257, 'Jawa Timur', 100, 'JT'),
(258, 'Kalimantan Barat', 100, 'KB'),
(259, 'Kalimantan Tengah', 100, 'KT'),
(260, 'Kalimantan Timur', 100, 'KI'),
(261, 'Kalimantan Selatan', 100, 'KS'),
(262, 'Nusa Tenggara Barat', 100, 'NB'),
(263, 'Nusa Tenggara Timur', 100, 'NT'),
(264, 'Sulawesi Selatan', 100, 'SN'),
(265, 'Sulawesi Tengah', 100, 'ST'),
(266, 'Sulawesi Utara', 100, 'SA'),
(267, 'Sulawesi Tenggara', 100, 'SG'),
(268, 'Maluku', 100, 'MA'),
(269, 'Maluku Utara', 100, 'MU'),
(270, 'Irian Jaya Timur', 100, 'IJ'),
(271, 'Irian Jaya Tengah', 100, 'IT'),
(272, 'Irian Jawa Barat', 100, 'IB'),
(273, 'Gorontalo', 100, 'GO'),
(274, 'Bedfordshire', 225, ''),
(275, 'Berkshire', 225, ''),
(276, 'Buckinghamshire', 225, ''),
(277, 'Cambridgeshire', 225, ''),
(278, 'Cheshire', 225, ''),
(279, 'Cornwall', 225, ''),
(280, 'Cumberland', 225, ''),
(281, 'Cumbria', 225, ''),
(282, 'Derbyshire', 225, ''),
(283, 'Devon', 225, ''),
(284, 'Dorset', 225, ''),
(285, 'Durham', 225, ''),
(286, 'East Suffolk', 225, ''),
(287, 'East Sussex', 225, ''),
(288, 'Essex', 225, ''),
(289, 'Gloucestershire', 225, ''),
(290, 'Greater London', 225, ''),
(291, 'Greater Manchester', 225, ''),
(292, 'Hampshire', 225, ''),
(293, 'Herefordshire', 225, ''),
(294, 'Hertfordshire', 225, ''),
(295, 'Isle of Wight', 225, ''),
(296, 'Kent', 225, ''),
(297, 'Lancashire', 225, ''),
(298, 'Leicestershire', 225, ''),
(299, 'Lincolnshire', 225, ''),
(300, 'London', 225, ''),
(301, 'Merseyside', 225, ''),
(302, 'Middlesex', 225, ''),
(303, 'Norfolk', 225, ''),
(304, 'Northamptonshire', 225, ''),
(305, 'Northumberland', 225, ''),
(306, 'North Humberside', 225, ''),
(307, 'North Yorkshire', 225, ''),
(308, 'Nottinghamshire', 225, ''),
(309, 'Oxfordshire', 225, ''),
(310, 'Rutland', 225, ''),
(311, 'Shropshire', 225, ''),
(312, 'Somerset', 225, ''),
(313, 'South Humberside', 225, ''),
(314, 'South Yorkshire', 225, ''),
(315, 'Staffordshire', 225, ''),
(316, 'Suffolk', 225, ''),
(317, 'Surrey', 225, ''),
(318, 'Sussex', 225, ''),
(319, 'Tyne and Wear', 225, ''),
(320, 'Warwickshire', 225, ''),
(321, 'West Midlands', 225, ''),
(322, 'Westmorland', 225, ''),
(323, 'West Suffolk', 225, ''),
(324, 'West Sussex', 225, ''),
(325, 'West Yorkshire', 225, ''),
(326, 'Wiltshire', 225, ''),
(327, 'Worcestershire', 225, ''),
(328, 'Yorkshire', 225, ''),
(329, 'Yorkshire, East Riding', 225, ''),
(330, 'Yorkshire, North Riding', 225, ''),
(331, 'Yorkshire, West Riding', 225, ''),
(332, 'Antrim', 225, ''),
(333, 'Armagh', 225, ''),
(334, 'City of Belfast', 225, ''),
(335, 'Down', 225, ''),
(336, 'Fermanagh', 225, ''),
(337, 'Londonderry', 225, ''),
(338, 'City of Londonderry', 225, ''),
(339, 'Tyrone', 225, ''),
(340, 'City of Aberdeen', 225, ''),
(341, 'Aberdeenshire', 225, ''),
(342, 'Angus', 225, ''),
(343, 'Argyll', 225, ''),
(344, 'Ayrshire', 225, ''),
(345, 'Banffshire', 225, ''),
(346, 'Berwickshire', 225, ''),
(347, 'Bute', 225, ''),
(348, 'Caithness', 225, ''),
(349, 'Clackmannanshire', 225, ''),
(350, 'Cromartyshire', 225, ''),
(351, 'Dumfriesshire', 225, ''),
(352, 'Dunbartonshire', 225, ''),
(353, 'City of Dundee', 225, ''),
(354, 'East Lothian', 225, ''),
(355, 'City of Edinburgh', 225, ''),
(356, 'Fife', 225, ''),
(357, 'City of Glasgow', 225, ''),
(358, 'Inverness-shire', 225, ''),
(359, 'Kincardineshire', 225, ''),
(360, 'Kinross-shire', 225, ''),
(361, 'Kirkcudbrightshire', 225, ''),
(362, 'Lanarkshire', 225, ''),
(363, 'Midlothian', 225, ''),
(364, 'Moray', 225, ''),
(365, 'Nairnshire', 225, ''),
(366, 'Orkney', 225, ''),
(367, 'Peeblesshire', 225, ''),
(368, 'Perthshire', 225, ''),
(369, 'Renfrewshire', 225, ''),
(370, 'Ross and Cromarty', 225, ''),
(371, 'Ross-shire', 225, ''),
(372, 'Roxburghshire', 225, ''),
(373, 'Selkirkshire', 225, ''),
(374, 'Shetland', 225, ''),
(375, 'Stirlingshire', 225, ''),
(376, 'Sutherland', 225, ''),
(377, 'West Lothian', 225, ''),
(378, 'Wigtownshire', 225, ''),
(379, 'Anglesey', 225, ''),
(380, 'Brecknockshire', 225, ''),
(381, 'Caernarfonshire', 225, ''),
(382, 'Cardiganshire', 225, ''),
(383, 'Carmarthenshire', 225, ''),
(384, 'Clwyd', 225, ''),
(385, 'Denbighshire', 225, ''),
(386, 'Dyfed', 225, ''),
(387, 'Flintshire', 225, ''),
(388, 'Glamorgan', 225, ''),
(389, 'Gwent', 225, ''),
(390, 'Gwynedd', 225, ''),
(391, 'Merionethshire', 225, ''),
(392, 'Mid Glamorgan', 225, ''),
(393, 'Monmouthshire', 225, ''),
(394, 'Montgomeryshire', 225, ''),
(395, 'Pembrokeshire', 225, ''),
(396, 'Powys', 225, ''),
(397, 'Radnorshire', 225, ''),
(398, 'South Glamorgan', 225, ''),
(399, 'West Glamorgan', 225, '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_coupons`
--

CREATE TABLE IF NOT EXISTS `isc_coupons` (
  `couponid` int(11) NOT NULL AUTO_INCREMENT,
  `couponname` varchar(100) NOT NULL DEFAULT '',
  `coupontype` tinyint(4) NOT NULL DEFAULT '0',
  `couponamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `couponminpurchase` int(11) NOT NULL DEFAULT '0',
  `couponexpires` int(11) NOT NULL DEFAULT '0',
  `couponenabled` tinyint(4) NOT NULL DEFAULT '0',
  `couponcode` varchar(50) NOT NULL DEFAULT '',
  `couponappliesto` enum('categories','products') NOT NULL DEFAULT 'products',
  `couponnumuses` int(11) NOT NULL DEFAULT '0',
  `couponmaxuses` int(11) NOT NULL DEFAULT '0',
  `couponmaxusespercus` int(11) NOT NULL DEFAULT '0',
  `location_restricted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_method_restricted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`couponid`),
  UNIQUE KEY `u_coupons_couponcode` (`couponcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_coupon_locations`
--

CREATE TABLE IF NOT EXISTS `isc_coupon_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) DEFAULT NULL,
  `selected_type` varchar(10) DEFAULT NULL,
  `value_id` int(10) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_coupon_shipping_methods`
--

CREATE TABLE IF NOT EXISTS `isc_coupon_shipping_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) DEFAULT NULL,
  `module_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_coupon_usages`
--

CREATE TABLE IF NOT EXISTS `isc_coupon_usages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `numuses` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_coupon_values`
--

CREATE TABLE IF NOT EXISTS `isc_coupon_values` (
  `couponid` int(11) NOT NULL,
  `valueid` int(11) NOT NULL,
  PRIMARY KEY (`couponid`,`valueid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_currencies`
--

CREATE TABLE IF NOT EXISTS `isc_currencies` (
  `currencyid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `currencycountryid` int(11) unsigned DEFAULT NULL,
  `currencycouregid` int(11) unsigned DEFAULT NULL,
  `currencycode` char(3) NOT NULL DEFAULT '',
  `currencyconvertercode` varchar(255) DEFAULT NULL,
  `currencyname` varchar(255) NOT NULL DEFAULT '',
  `currencyexchangerate` decimal(20,10) NOT NULL DEFAULT '0.0000000000',
  `currencystring` varchar(20) NOT NULL DEFAULT '',
  `currencystringposition` char(5) NOT NULL DEFAULT '',
  `currencydecimalstring` char(1) NOT NULL DEFAULT '',
  `currencythousandstring` char(1) NOT NULL DEFAULT '',
  `currencydecimalplace` smallint(5) unsigned NOT NULL DEFAULT '2',
  `currencylastupdated` int(11) NOT NULL DEFAULT '0',
  `currencyisdefault` smallint(1) NOT NULL DEFAULT '0',
  `currencystatus` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`currencyid`),
  UNIQUE KEY `u_currencies_currencycode_currencycountryid_currencycouregid` (`currencycode`,`currencycountryid`,`currencycouregid`),
  KEY `i_countries_currencycountryid` (`currencycountryid`),
  KEY `i_countries_currencycouregid` (`currencycouregid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_currencies`
--

INSERT INTO `isc_currencies` (`currencyid`, `currencycountryid`, `currencycouregid`, `currencycode`, `currencyconvertercode`, `currencyname`, `currencyexchangerate`, `currencystring`, `currencystringposition`, `currencydecimalstring`, `currencythousandstring`, `currencydecimalplace`, `currencylastupdated`, `currencyisdefault`, `currencystatus`) VALUES
(1, 226, NULL, 'USD', NULL, 'Default Currency', 1.0000000000, '$', 'left', '.', ',', 2, 1336374389, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_customers`
--

CREATE TABLE IF NOT EXISTS `isc_customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `salt` varchar(16) NOT NULL DEFAULT '',
  `custpassword` varchar(50) NOT NULL DEFAULT '',
  `custconcompany` varchar(255) NOT NULL DEFAULT '',
  `custconfirstname` varchar(100) NOT NULL DEFAULT '',
  `custconlastname` varchar(100) NOT NULL DEFAULT '',
  `custconemail` varchar(250) NOT NULL DEFAULT '',
  `custconphone` varchar(50) NOT NULL DEFAULT '',
  `customertoken` varchar(250) NOT NULL DEFAULT '',
  `customerpasswordresettoken` varchar(32) NOT NULL DEFAULT '',
  `customerpasswordresetemail` varchar(255) NOT NULL DEFAULT '',
  `custdatejoined` int(11) NOT NULL DEFAULT '0',
  `custlastmodified` int(11) NOT NULL DEFAULT '0',
  `custimportpassword` varchar(100) NOT NULL DEFAULT '',
  `custstorecredit` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `custregipaddress` varchar(30) NOT NULL DEFAULT '',
  `custgroupid` int(11) NOT NULL DEFAULT '0',
  `custnotes` text,
  `custformsessionid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customerid`),
  KEY `i_customers_customertoken` (`customertoken`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_customers`
--

INSERT INTO `isc_customers` (`customerid`, `salt`, `custpassword`, `custconcompany`, `custconfirstname`, `custconlastname`, `custconemail`, `custconphone`, `customertoken`, `customerpasswordresettoken`, `customerpasswordresetemail`, `custdatejoined`, `custlastmodified`, `custimportpassword`, `custstorecredit`, `custregipaddress`, `custgroupid`, `custnotes`, `custformsessionid`) VALUES
(1, '4b1500ed379b59b9', '2199046457fdf6b1f36cfe92a1135f4e', '', 'Tien', 'Le', 'lexuantien0311@gmail.com', '0919891103', '446294fa7ac55a18100.33055671', '', '', 1336388693, 1336388693, '', 0.0000, '1', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_customer_credits`
--

CREATE TABLE IF NOT EXISTS `isc_customer_credits` (
  `custcreditid` int(10) NOT NULL AUTO_INCREMENT,
  `customerid` int(10) NOT NULL DEFAULT '0',
  `creditamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `credittype` enum('return','gift','adjustment') NOT NULL,
  `creditdate` int(10) NOT NULL DEFAULT '0',
  `creditrefid` int(10) NOT NULL DEFAULT '0',
  `credituserid` int(10) NOT NULL DEFAULT '0',
  `creditreason` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`custcreditid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_customer_groups`
--

CREATE TABLE IF NOT EXISTS `isc_customer_groups` (
  `customergroupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(255) NOT NULL,
  `discount` decimal(10,4) NOT NULL,
  `discountmethod` varchar(100) NOT NULL,
  `isdefault` tinyint(4) NOT NULL,
  `categoryaccesstype` enum('none','all','specific') NOT NULL,
  PRIMARY KEY (`customergroupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_customer_group_categories`
--

CREATE TABLE IF NOT EXISTS `isc_customer_group_categories` (
  `customergroupid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  PRIMARY KEY (`customergroupid`,`categoryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_customer_group_discounts`
--

CREATE TABLE IF NOT EXISTS `isc_customer_group_discounts` (
  `groupdiscountid` int(11) NOT NULL AUTO_INCREMENT,
  `customergroupid` int(11) NOT NULL,
  `discounttype` enum('CATEGORY','PRODUCT') NOT NULL,
  `catorprodid` int(11) NOT NULL,
  `discountpercent` decimal(10,4) NOT NULL,
  `appliesto` enum('CATEGORY_ONLY','CATEGORY_AND_SUBCATS','NOT_APPLICABLE') NOT NULL,
  `discountmethod` varchar(100) NOT NULL,
  PRIMARY KEY (`groupdiscountid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_custom_searches`
--

CREATE TABLE IF NOT EXISTS `isc_custom_searches` (
  `searchid` int(11) NOT NULL AUTO_INCREMENT,
  `searchtype` enum('orders','products','customers','returns','giftcertificates','shipments') NOT NULL DEFAULT 'orders',
  `searchname` varchar(255) NOT NULL DEFAULT '',
  `searchvars` longtext,
  `searchlabel` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`searchid`),
  KEY `i_custom_searches_label` (`searchlabel`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `isc_custom_searches`
--

INSERT INTO `isc_custom_searches` (`searchid`, `searchtype`, `searchname`, `searchvars`, `searchlabel`) VALUES
(1, 'orders', 'Incomplete Orders', 'viewName=Incomplete+Orders&orderStatus=0', 'incompleteorders'),
(2, 'orders', 'Orders from eBay', 'viewName=Orders from eBay&ebayOrderId=-1', 'ebayorders'),
(3, 'orders', 'Pre-Orders', 'viewName=Pre-Orders&preorders[]=1', 'preorders'),
(4, 'products', 'Last Import', 'viewName=Last+Import&lastImport=1', 'lastimportproducts'),
(5, 'orders', 'Deleted Orders', 'viewName=Deleted+Orders&searchDeletedOrders=only', 'deletedorders');

-- --------------------------------------------------------

--
-- Table structure for table `isc_discounts`
--

CREATE TABLE IF NOT EXISTS `isc_discounts` (
  `discountid` int(11) NOT NULL AUTO_INCREMENT,
  `discountname` varchar(100) NOT NULL,
  `discountruletype` varchar(100) NOT NULL,
  `discountmaxuses` int(11) NOT NULL DEFAULT '0',
  `discountcurrentuses` int(11) NOT NULL DEFAULT '0',
  `discountexpiry` int(11) NOT NULL DEFAULT '0',
  `discountenabled` tinyint(4) NOT NULL DEFAULT '0',
  `sortorder` int(9) NOT NULL,
  `halts` int(1) NOT NULL,
  `configdata` text NOT NULL,
  `free_shipping_message` text NOT NULL,
  `free_shipping_message_location` text NOT NULL,
  PRIMARY KEY (`discountid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_categories`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `parent_id` varchar(11) NOT NULL,
  `ebay_site_id` varchar(4) NOT NULL,
  `is_leaf` tinyint(1) unsigned NOT NULL,
  `lot_size_enabled` tinyint(1) unsigned NOT NULL,
  `best_offer_enabled` tinyint(1) unsigned NOT NULL,
  `reserve_price_allowed` tinyint(1) unsigned NOT NULL,
  `minimum_reserve_price` double(20,4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_id_2` (`category_id`,`ebay_site_id`),
  KEY `parent_id` (`parent_id`),
  KEY `ebay_site_id` (`ebay_site_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_items`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `ebay_item_id` varchar(19) DEFAULT NULL,
  `title` varchar(55) DEFAULT NULL,
  `start_time` varchar(28) NOT NULL,
  `end_time` varchar(28) NOT NULL,
  `datetime_listed` int(11) DEFAULT NULL,
  `listing_type` varchar(50) DEFAULT NULL,
  `listing_status` varchar(50) DEFAULT NULL,
  `current_price_currency` varchar(3) DEFAULT NULL,
  `current_price` decimal(20,4) DEFAULT NULL,
  `buyitnow_price_currency` varchar(3) DEFAULT NULL,
  `buyitnow_price` decimal(20,4) DEFAULT NULL,
  `site_id` int(5) DEFAULT NULL,
  `ebay_item_link` varchar(255) DEFAULT NULL,
  `quantity_remaining` int(5) DEFAULT NULL,
  `bid_count` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_item_fees`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_item_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` double(20,4) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_listing_prices`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_listing_prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ebay_listing_template_id` int(11) DEFAULT NULL,
  `selected_type` enum('CustomPrice','ProductPrice','PriceExtra','None') DEFAULT NULL,
  `price` decimal(20,4) DEFAULT NULL,
  `price_type` enum('Starting','Reserve','Buy') DEFAULT NULL,
  `calculate_operator` varchar(20) DEFAULT NULL,
  `calculate_option` varchar(50) DEFAULT NULL,
  `calculate_price` decimal(20,4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_listing_template`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_listing_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `enabled` tinyint(1) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `site_id` int(5) unsigned DEFAULT NULL,
  `is_private` tinyint(1) unsigned DEFAULT NULL,
  `quantities` smallint(4) unsigned DEFAULT NULL,
  `lot_size` mediumint(6) unsigned DEFAULT NULL,
  `listing_type` varchar(50) DEFAULT NULL,
  `is_default` tinyint(1) unsigned DEFAULT '0',
  `listing_duration` varchar(10) DEFAULT NULL,
  `primary_category_options` text NOT NULL,
  `primary_category_id` varchar(11) DEFAULT NULL,
  `secondary_category_id` varchar(11) DEFAULT NULL,
  `secondary_category_name` varchar(30) DEFAULT NULL,
  `store_category1_id` varchar(11) DEFAULT NULL,
  `store_category1_name` varchar(30) DEFAULT NULL,
  `store_category2_id` varchar(11) DEFAULT NULL,
  `store_category2_name` varchar(30) DEFAULT NULL,
  `accept_best_offer` tinyint(1) unsigned DEFAULT '0',
  `payment_method` text,
  `paypal_email` varchar(250) DEFAULT NULL,
  `payment_instruction` varchar(900) DEFAULT NULL,
  `item_country` varchar(3) DEFAULT NULL,
  `item_zip` varchar(20) DEFAULT NULL,
  `item_city` varchar(100) DEFAULT NULL,
  `use_prod_image` tinyint(1) unsigned DEFAULT NULL,
  `accept_return` tinyint(1) unsigned DEFAULT '0',
  `return_offer_as` varchar(100) DEFAULT NULL,
  `return_period` varchar(10) DEFAULT NULL,
  `return_cost_by` varchar(100) DEFAULT NULL,
  `return_policy_description` text,
  `use_domestic_shipping` tinyint(1) unsigned NOT NULL,
  `use_international_shipping` tinyint(1) unsigned DEFAULT NULL,
  `handling_time` tinyint(2) unsigned NOT NULL,
  `use_salestax` tinyint(1) unsigned DEFAULT NULL,
  `sales_tax_states` varchar(3) DEFAULT NULL,
  `salestax_percent` decimal(7,4) DEFAULT NULL,
  `salestax_inc_shipping` tinyint(1) unsigned DEFAULT NULL,
  `counter_style` varchar(100) DEFAULT NULL,
  `gallery_opt` varchar(100) DEFAULT NULL,
  `featured_gallery_duration` varchar(9) NOT NULL,
  `listing_opt` text,
  `date_added` int(11) unsigned DEFAULT NULL,
  `secondary_category_options` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_shipping`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ebay_listing_template_id` int(11) DEFAULT NULL,
  `area` enum('Domestic','International') DEFAULT NULL,
  `cost_type` enum('Flat','Calculated','Freight') DEFAULT NULL,
  `offer_pickup` tinyint(1) DEFAULT NULL,
  `pickup_cost` decimal(20,2) DEFAULT NULL,
  `is_free_shipping` tinyint(1) DEFAULT NULL,
  `handling_cost` decimal(20,2) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `get_it_fast` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_ebay_shipping_serv`
--

CREATE TABLE IF NOT EXISTS `isc_ebay_shipping_serv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ebay_shipping_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `cost` decimal(20,2) DEFAULT NULL,
  `additional_cost` decimal(20,2) DEFAULT NULL,
  `ship_to_locations` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_email_provider_lists`
--

CREATE TABLE IF NOT EXISTS `isc_email_provider_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provider` varchar(64) NOT NULL DEFAULT '',
  `provider_list_id` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `last_field_update` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_provider_provider_list_id` (`provider`,`provider_list_id`),
  KEY `idx_provider_name` (`provider`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_email_provider_list_fields`
--

CREATE TABLE IF NOT EXISTS `isc_email_provider_list_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_provider_list_id` int(10) unsigned NOT NULL DEFAULT '0',
  `provider_field_id` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(32) NOT NULL DEFAULT '',
  `size` varchar(32) NOT NULL DEFAULT '',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `settings` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email_provider_list_id_provider_field_id` (`email_provider_list_id`,`provider_field_id`),
  KEY `idx_email_provider_list_id_name` (`email_provider_list_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_email_rules`
--

CREATE TABLE IF NOT EXISTS `isc_email_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provider` varchar(64) NOT NULL DEFAULT '',
  `event` varchar(64) NOT NULL DEFAULT '',
  `action` smallint(5) unsigned NOT NULL DEFAULT '0',
  `provider_list_id` varchar(64) NOT NULL DEFAULT '',
  `field_map` text NOT NULL,
  `event_criteria` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_export_method_settings`
--

CREATE TABLE IF NOT EXISTS `isc_export_method_settings` (
  `exportmethodid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `methodname` varchar(15) NOT NULL,
  `exporttemplateid` int(11) unsigned NOT NULL,
  `variablename` varchar(31) NOT NULL,
  `variablevalue` varchar(31) NOT NULL,
  PRIMARY KEY (`exportmethodid`),
  KEY `methodname` (`methodname`,`exporttemplateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `isc_export_method_settings`
--

INSERT INTO `isc_export_method_settings` (`exportmethodid`, `methodname`, `exporttemplateid`, `variablename`, `variablevalue`) VALUES
(1, 'CSV', 1, 'FieldSeparator', ','),
(2, 'CSV', 1, 'FieldEnclosure', '"'),
(3, 'CSV', 1, 'IncludeHeader', '1'),
(4, 'CSV', 1, 'BlankLine', '0'),
(5, 'CSV', 1, 'SubItems', 'combine'),
(6, 'CSV', 1, 'SubItemSeparator', '|'),
(7, 'CSV', 1, 'LineEnding', 'Windows'),
(8, 'CSV', 2, 'FieldSeparator', ','),
(9, 'CSV', 2, 'FieldEnclosure', '"'),
(10, 'CSV', 2, 'IncludeHeader', '1'),
(11, 'CSV', 2, 'BlankLine', '1'),
(12, 'CSV', 2, 'SubItems', 'rows'),
(13, 'CSV', 2, 'SubItemSeparator', '|'),
(14, 'CSV', 2, 'LineEnding', 'Windows'),
(15, 'CSV', 3, 'FieldSeparator', ','),
(16, 'CSV', 3, 'FieldEnclosure', '"'),
(17, 'CSV', 3, 'IncludeHeader', '1'),
(18, 'CSV', 3, 'SubItems', 'rows'),
(19, 'CSV', 3, 'SubItemSeparator', '|'),
(20, 'CSV', 3, 'LineEnding', 'Windows'),
(21, 'CSV', 3, 'BlankLine', '0'),
(22, 'CSV', 4, 'FieldSeparator', ','),
(23, 'CSV', 4, 'FieldEnclosure', '"'),
(24, 'CSV', 4, 'IncludeHeader', '1'),
(25, 'CSV', 4, 'BlankLine', '0'),
(26, 'CSV', 4, 'SubItems', 'expand'),
(27, 'CSV', 4, 'SubItemSeparator', '|'),
(28, 'CSV', 4, 'LineEnding', 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `isc_export_templates`
--

CREATE TABLE IF NOT EXISTS `isc_export_templates` (
  `exporttemplateid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `exporttemplatename` varchar(100) NOT NULL,
  `myobassetaccount` varchar(20) NOT NULL,
  `myobincomeaccount` varchar(20) NOT NULL,
  `myobexpenseaccount` varchar(20) NOT NULL,
  `peachtreereceivableaccount` varchar(20) NOT NULL,
  `peachtreeglaccount` varchar(20) NOT NULL,
  `modifyforpeachtree` tinyint(1) unsigned NOT NULL,
  `dateformat` varchar(15) NOT NULL,
  `priceformat` varchar(15) NOT NULL,
  `boolformat` varchar(15) NOT NULL,
  `blankforfalse` tinyint(1) unsigned NOT NULL,
  `striphtml` tinyint(1) unsigned NOT NULL,
  `vendorid` int(11) unsigned NOT NULL,
  `usedtypes` varchar(63) NOT NULL,
  `builtin` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`exporttemplateid`),
  KEY `exporttemplatename` (`exporttemplatename`),
  KEY `vendorid` (`vendorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `isc_export_templates`
--

INSERT INTO `isc_export_templates` (`exporttemplateid`, `exporttemplatename`, `myobassetaccount`, `myobincomeaccount`, `myobexpenseaccount`, `peachtreereceivableaccount`, `peachtreeglaccount`, `modifyforpeachtree`, `dateformat`, `priceformat`, `boolformat`, `blankforfalse`, `striphtml`, `vendorid`, `usedtypes`, `builtin`) VALUES
(1, 'Default', '', '', '', '', '', 0, 'dmy-slash', 'number', 'yn', 0, 1, 0, 'customers,orders,products,salestax,redirects', 1),
(2, 'MYOB', '', '', '', '', '', 0, 'dmy-slash', 'number', 'yn', 1, 1, 0, 'customers,orders,products', 1),
(3, 'Peachtree Accounting', '', '', '', '', '', 1, 'dmy-slash', 'number', 'truefalse', 0, 1, 0, 'customers,orders,products,abandonorder', 1),
(4, 'Bulk Edit', '', '', '', '', '', 0, 'mdy-slash', 'number', 'yn', 0, 0, 0, 'customers,products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_export_template_fields`
--

CREATE TABLE IF NOT EXISTS `isc_export_template_fields` (
  `exporttemplatefieldid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `exporttemplateid` smallint(5) unsigned NOT NULL,
  `fieldid` varchar(31) NOT NULL,
  `fieldtype` varchar(31) NOT NULL,
  `fieldname` varchar(63) NOT NULL,
  `includeinexport` tinyint(1) unsigned NOT NULL,
  `sortorder` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`exporttemplatefieldid`),
  KEY `exporttemplateid` (`exporttemplateid`,`fieldtype`,`includeinexport`,`sortorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=626 ;

--
-- Dumping data for table `isc_export_template_fields`
--

INSERT INTO `isc_export_template_fields` (`exporttemplatefieldid`, `exporttemplateid`, `fieldid`, `fieldtype`, `fieldname`, `includeinexport`, `sortorder`) VALUES
(1, 1, 'customerID', 'customers', 'Customer ID', 1, 0),
(2, 1, 'customerName', 'customers', 'Customer Name', 0, 1),
(3, 1, 'customerFirstName', 'customers', 'First Name', 1, 2),
(4, 1, 'customerLastName', 'customers', 'Last Name', 1, 3),
(5, 1, 'customerCompany', 'customers', 'Company', 1, 4),
(6, 1, 'customerEmail', 'customers', 'Email', 1, 5),
(7, 1, 'customerPhone', 'customers', 'Phone', 1, 6),
(8, 1, 'customerNotes', 'customers', 'Notes', 1, 7),
(9, 1, 'customerCredit', 'customers', 'Store Credit', 1, 8),
(10, 1, 'customerGroup', 'customers', 'Customer Group', 1, 9),
(11, 1, 'customerDateJoined', 'customers', 'Date Joined', 1, 10),
(12, 1, 'customerAddresses', 'customers', 'Addresses', 1, 11),
(13, 1, 'addressName', 'customers', 'Address Name', 0, 12),
(14, 1, 'addressFirstName', 'customers', 'Address First Name', 1, 13),
(15, 1, 'addressLastName', 'customers', 'Address Last Name', 1, 14),
(16, 1, 'addressCompany', 'customers', 'Address Company', 1, 15),
(17, 1, 'addressLine1', 'customers', 'Address Line 1', 1, 16),
(18, 1, 'addressLine2', 'customers', 'Address Line 2', 1, 17),
(19, 1, 'addressSuburb', 'customers', 'City', 1, 18),
(20, 1, 'addressState', 'customers', 'State/Province', 0, 19),
(21, 1, 'addressStateAbbrv', 'customers', 'State', 1, 20),
(22, 1, 'addressPostcode', 'customers', 'Zip', 1, 21),
(23, 1, 'addressCountry', 'customers', 'Country', 1, 22),
(24, 1, 'addressBuilding', 'customers', 'Building Type', 0, 23),
(25, 1, 'addressPhone', 'customers', 'Address Phone', 1, 24),
(26, 1, 'addressFormFields', 'customers', 'Address Form Fields', 1, 25),
(27, 1, 'customerFormFields', 'customers', 'Form Fields', 1, 26),
(28, 1, 'orderID', 'orders', 'Order ID', 1, 0),
(29, 1, 'orderStatus', 'orders', 'Order Status', 1, 6),
(30, 1, 'orderDate', 'orders', 'Order Date', 1, 5),
(31, 1, 'orderSubtotalInc', 'orders', 'Subtotal (inc tax)', 1, 7),
(32, 1, 'orderSubtotalEx', 'orders', 'Subtotal (ex tax)', 1, 8),
(33, 1, 'orderTaxtotal', 'orders', 'Tax Total', 1, 9),
(34, 1, 'orderTaxRate', 'orders', 'Tax Rate', 1, 10),
(35, 1, 'orderTaxName', 'orders', 'Tax Name', 1, 11),
(36, 1, 'orderShipCostInc', 'orders', 'Shipping Cost (inc tax)', 1, 12),
(37, 1, 'orderShipCostEx', 'orders', 'Shipping Cost (ex tax)', 1, 13),
(38, 1, 'orderHandlingCostInc', 'orders', 'Handling Cost (inc tax)', 1, 15),
(39, 1, 'orderHandlingCostEx', 'orders', 'Handling Cost (ex tax)', 1, 16),
(40, 1, 'orderTotalAmountInc', 'orders', 'Order Total (inc tax)', 1, 17),
(41, 1, 'orderTotalAmountEx', 'orders', 'Order Total (ex tax)', 1, 18),
(42, 1, 'orderCustomerID', 'orders', 'Customer ID', 1, 1),
(43, 1, 'orderCustomerName', 'orders', 'Customer Name', 1, 2),
(44, 1, 'orderCustomerEmail', 'orders', 'Customer Email', 1, 3),
(45, 1, 'orderCustomerPhone', 'orders', 'Customer Phone', 1, 4),
(46, 1, 'orderShipMethod', 'orders', 'Ship Method', 1, 14),
(47, 1, 'orderPayMethod', 'orders', 'Payment Method', 1, 19),
(48, 1, 'orderTotalQty', 'orders', 'Total Quantity', 1, 20),
(49, 1, 'orderTotalShipped', 'orders', 'Total Shipped', 1, 21),
(50, 1, 'orderDateShipped', 'orders', 'Date Shipped', 1, 22),
(51, 1, 'orderCurrency', 'orders', 'Order Currency Code', 1, 23),
(52, 1, 'orderExchangeRate', 'orders', 'Exchange Rate', 1, 24),
(53, 1, 'orderNotes', 'orders', 'Order Notes', 1, 25),
(54, 1, 'orderCustMessage', 'orders', 'Customer Message', 1, 26),
(55, 1, 'billName', 'orders', 'Billing Name', 0, 27),
(56, 1, 'billFirstName', 'orders', 'Billing First Name', 1, 28),
(57, 1, 'billLastName', 'orders', 'Billing Last Name', 1, 29),
(58, 1, 'billCompany', 'orders', 'Billing Company', 1, 30),
(59, 1, 'billStreet1', 'orders', 'Billing Street 1', 1, 31),
(60, 1, 'billStreet2', 'orders', 'Billing Street 2', 1, 32),
(61, 1, 'billSuburb', 'orders', 'Billing Suburb', 1, 33),
(62, 1, 'billState', 'orders', 'Billing State', 0, 34),
(63, 1, 'billStateAbbrv', 'orders', 'Billing State', 1, 35),
(64, 1, 'billZip', 'orders', 'Billing Zip', 1, 36),
(65, 1, 'billCountry', 'orders', 'Billing Country', 1, 37),
(66, 1, 'billSSC', 'orders', 'Billing Suburb + State + Zip', 0, 38),
(67, 1, 'billPhone', 'orders', 'Billing Phone', 1, 39),
(68, 1, 'billEmail', 'orders', 'Billing Email', 1, 40),
(69, 1, 'billFormFields', 'orders', 'Billing Form Fields', 1, 41),
(70, 1, 'shipName', 'orders', 'Shipping Name', 0, 42),
(71, 1, 'shipFirstName', 'orders', 'Shipping First Name', 1, 43),
(72, 1, 'shipLastName', 'orders', 'Shipping Last Name', 1, 44),
(73, 1, 'shipCompany', 'orders', 'Shipping Company', 1, 45),
(74, 1, 'shipStreet1', 'orders', 'Shipping Street 1', 1, 46),
(75, 1, 'shipStreet2', 'orders', 'Shipping Street 2', 1, 47),
(76, 1, 'shipSuburb', 'orders', 'Shipping Suburb', 1, 48),
(77, 1, 'shipState', 'orders', 'Shipping State', 0, 49),
(78, 1, 'shipStateAbbrv', 'orders', 'Shipping State', 1, 50),
(79, 1, 'shipZip', 'orders', 'Shipping Zip', 1, 51),
(80, 1, 'shipCountry', 'orders', 'Shipping Country', 1, 52),
(81, 1, 'shipSSC', 'orders', 'Shipping Suburb + State + Zip', 0, 53),
(82, 1, 'shipPhone', 'orders', 'Shipping Phone', 1, 54),
(83, 1, 'shipEmail', 'orders', 'Shipping Email', 1, 55),
(84, 1, 'shipFormFields', 'orders', 'Shipping Form Fields', 1, 56),
(85, 1, 'orderProdDetails', 'orders', 'Product Details', 1, 57),
(86, 1, 'orderProdID', 'orders', 'Product ID', 1, 58),
(87, 1, 'orderProdQty', 'orders', 'Product Qty', 1, 59),
(88, 1, 'orderProdSKU', 'orders', 'Product SKU', 1, 60),
(89, 1, 'orderProdName', 'orders', 'Product Name', 1, 61),
(90, 1, 'orderProdWeight', 'orders', 'Product Weight', 1, 62),
(91, 1, 'orderProdVariationDetails', 'orders', 'Product Variation Details', 1, 63),
(92, 1, 'orderProdPrice', 'orders', 'Product Unit Price', 1, 64),
(93, 1, 'orderProdIndex', 'orders', 'Product Index', 0, 65),
(94, 1, 'orderProdTotalPrice', 'orders', 'Product Total Price', 1, 66),
(95, 1, 'orderGLAccount', 'orders', 'Peachtree General Ledger Account', 0, 67),
(96, 1, 'orderPTTaxType', 'orders', 'Peachtree Tax Type', 0, 68),
(97, 1, 'orderProductCount', 'orders', '# Unique Products in Order', 0, 69),
(98, 1, 'orderWeight', 'orders', 'Combined Product Weight', 1, 70),
(99, 1, 'orderTodaysDate', 'orders', 'Todays Date', 0, 71),
(100, 1, 'orderAccountsReceivable', 'orders', 'Peachtree Accounts Receivable Account', 0, 72),
(101, 1, 'productID', 'products', 'Product ID', 1, 0),
(102, 1, 'productType', 'products', 'Product Type', 1, 1),
(103, 1, 'productCode', 'products', 'Code', 1, 2),
(104, 1, 'productName', 'products', 'Name', 1, 3),
(105, 1, 'productBrand', 'products', 'Brand', 1, 4),
(106, 1, 'productBrandName', 'products', 'Brand + Name', 0, 5),
(107, 1, 'productDesc', 'products', 'Description', 1, 6),
(108, 1, 'productTaxable', 'products', 'Taxable Product', 1, 7),
(109, 1, 'productCostPrice', 'products', 'Cost Price', 1, 8),
(110, 1, 'productRetailPrice', 'products', 'Retail Price', 1, 9),
(111, 1, 'productSalePrice', 'products', 'Sale Price', 1, 10),
(112, 1, 'productCalculatedPrice', 'products', 'Calculated Price', 1, 11),
(113, 1, 'productShippingPrice', 'products', 'Fixed Shipping Price', 1, 12),
(114, 1, 'productFreeShipping', 'products', 'Free Shipping', 1, 13),
(115, 1, 'productWarranty', 'products', 'Warranty', 1, 14),
(116, 1, 'productWeight', 'products', 'Weight', 1, 15),
(117, 1, 'productWidth', 'products', 'Width', 1, 16),
(118, 1, 'productHeight', 'products', 'Height', 1, 17),
(119, 1, 'productDepth', 'products', 'Depth', 1, 18),
(120, 1, 'productPurchasable', 'products', 'Allow Purchases', 1, 19),
(121, 1, 'productVisible', 'products', 'Product Visible', 1, 20),
(122, 1, 'productNotVisible', 'products', 'Product Not Visible', 0, 21),
(123, 1, 'productAvailability', 'products', 'Product Availability', 1, 22),
(124, 1, 'productInventoried', 'products', 'Product Inventoried', 1, 23),
(125, 1, 'productStockLevel', 'products', 'Stock Level', 1, 24),
(126, 1, 'productLowStockLevel', 'products', 'Low Stock Level', 1, 25),
(127, 1, 'productDateAdded', 'products', 'Date Added', 1, 26),
(128, 1, 'productLastModified', 'products', 'Date Modified', 1, 27),
(129, 1, 'productCategories', 'products', 'Category Details', 1, 28),
(130, 1, 'productCategoryID', 'products', 'Category ID', 0, 29),
(131, 1, 'productCategoryName', 'products', 'Category Name', 1, 30),
(132, 1, 'productCategoryPath', 'products', 'Category Path', 1, 31),
(133, 1, 'productImages', 'products', 'Images', 1, 32),
(134, 1, 'productImageFile', 'products', 'Image File Name', 1, 33),
(135, 1, 'productImageURL', 'products', 'Image URL', 1, 34),
(136, 1, 'productPageTitle', 'products', 'Page Title', 1, 35),
(137, 1, 'productMetaKeywords', 'products', 'META Keywords', 1, 36),
(138, 1, 'productMetaDesc', 'products', 'META Description', 1, 37),
(139, 1, 'productVariations', 'products', 'Product Variations', 1, 38),
(140, 1, 'productVarDetails', 'products', 'Variation Details', 1, 39),
(141, 1, 'productVarSKU', 'products', 'SKU', 1, 40),
(142, 1, 'productVarPrice', 'products', 'Price', 1, 41),
(143, 1, 'productVarWeight', 'products', 'Weight', 1, 42),
(144, 1, 'productVarStockLevel', 'products', 'Stock Level', 1, 43),
(145, 1, 'productVarLowStockLevel', 'products', 'Low Stock Level', 1, 44),
(146, 1, 'productMYOBAsset', 'products', 'MYOB Asset Acct', 0, 45),
(147, 1, 'productMYOBIncome', 'products', 'MYOB Income Acct', 0, 46),
(148, 1, 'productMYOBExpense', 'products', 'MYOB Expense Acct', 0, 47),
(149, 1, 'productCondition', 'products', 'Product Condition', 1, 48),
(150, 1, 'salestaxDate', 'salestax', 'Period', 1, 0),
(151, 1, 'salestaxTaxName', 'salestax', 'Tax', 1, 1),
(152, 1, 'salestaxTaxRate', 'salestax', 'Rate', 1, 2),
(153, 1, 'salestaxNumOrders', 'salestax', 'Number of Orders', 1, 3),
(154, 1, 'salestaxTaxAmount', 'salestax', 'Tax Amount', 1, 4),
(155, 1, 'abandonorderOrderId', 'abandonorder', 'Order Id', 1, 0),
(156, 1, 'abandonorderCustomerName', 'abandonorder', 'Customer Name', 1, 1),
(157, 1, 'abandonorderCustomerEmail', 'abandonorder', 'Customer Email', 1, 2),
(158, 1, 'abandonorderCustomerPhone', 'abandonorder', 'Customer Phone', 1, 3),
(159, 1, 'abandonorderDate', 'abandonorder', 'Date', 1, 4),
(160, 1, 'abandonorderTotalOrderAmount', 'abandonorder', 'Total Order Amount', 1, 5),
(161, 1, 'redirectPath', 'redirects', 'Old Path', 1, 0),
(162, 1, 'redirectOldURL', 'redirects', 'Old URL', 1, 1),
(163, 1, 'redirectNewURL', 'redirects', 'New URL', 1, 2),
(164, 1, 'redirectAssocType', 'redirects', 'Associated Type', 1, 3),
(165, 1, 'redirectAssocId', 'redirects', 'Associated ID', 1, 4),
(166, 4, 'redirectNewURLOrAssocType', 'redirects', 'New URL or Associated Type', 0, 5),
(167, 2, 'customerID', 'customers', 'Card ID', 1, 2),
(168, 2, 'customerName', 'customers', 'Customer Name', 0, 19),
(169, 2, 'customerFirstName', 'customers', 'First Name', 1, 1),
(170, 2, 'customerLastName', 'customers', 'Co./Last Name', 1, 0),
(171, 2, 'customerCompany', 'customers', 'Company', 0, 20),
(172, 2, 'customerEmail', 'customers', 'Email', 0, 21),
(173, 2, 'customerPhone', 'customers', 'Phone', 0, 22),
(174, 2, 'customerNotes', 'customers', 'Notes', 1, 18),
(175, 2, 'customerCredit', 'customers', 'Store Credit', 0, 23),
(176, 2, 'customerGroup', 'customers', 'Customer Group', 0, 24),
(177, 2, 'customerDateJoined', 'customers', 'Date Joined', 0, 25),
(178, 2, 'customerAddresses', 'customers', 'Addresses', 1, 3),
(179, 2, 'addressName', 'customers', 'Address Contact Name', 1, 12),
(180, 2, 'addressFirstName', 'customers', 'Address First Name', 0, 13),
(181, 2, 'addressLastName', 'customers', 'Address Last Name', 0, 14),
(182, 2, 'addressCompany', 'customers', 'Address Company', 0, 15),
(183, 2, 'addressLine1', 'customers', 'Address Line 1', 1, 4),
(184, 2, 'addressLine2', 'customers', 'Address Line 2', 1, 5),
(185, 2, 'addressSuburb', 'customers', 'Address City', 1, 6),
(186, 2, 'addressState', 'customers', 'Address State', 1, 7),
(187, 2, 'addressStateAbbrv', 'customers', 'State Abbreviation', 0, 16),
(188, 2, 'addressPostcode', 'customers', 'Address Postcode', 1, 8),
(189, 2, 'addressCountry', 'customers', 'Address Country', 1, 9),
(190, 2, 'addressBuilding', 'customers', 'Building Type', 0, 17),
(191, 2, 'addressPhone', 'customers', 'Address Phone 1', 1, 10),
(192, 2, 'addressFormFields', 'customers', 'Address Form Fields', 0, 11),
(193, 2, 'customerFormFields', 'customers', 'Form Fields', 0, 26),
(194, 2, 'orderID', 'orders', 'Invoice #', 1, 7),
(195, 2, 'orderStatus', 'orders', 'Order Status', 0, 37),
(196, 2, 'orderDate', 'orders', 'Date', 1, 8),
(197, 2, 'orderSubtotalInc', 'orders', 'Total', 1, 20),
(198, 2, 'orderTaxtotal', 'orders', 'Tax Amount', 1, 25),
(199, 2, 'orderTaxRate', 'orders', 'Tax Rate', 0, 32),
(200, 2, 'orderTaxName', 'orders', 'Tax Code', 1, 24),
(201, 2, 'orderShipCostInc', 'orders', 'Inc-Tax Freight Amount', 1, 26),
(202, 2, 'orderHandlingCostInc', 'orders', 'Handling Cost', 0, 38),
(203, 2, 'orderTotalAmountInc', 'orders', 'Inc-Tax Total', 1, 21),
(204, 2, 'orderCustomerID', 'orders', 'Card ID', 1, 31),
(205, 2, 'orderShipMethod', 'orders', 'Ship Via', 1, 9),
(206, 2, 'orderPayMethod', 'orders', 'Payment Method', 1, 29),
(207, 2, 'orderTotalQty', 'orders', 'Total Quantity', 0, 39),
(208, 2, 'orderTotalShipped', 'orders', 'Total Shipped', 0, 40),
(209, 2, 'orderDateShipped', 'orders', 'Shipping Date', 1, 23),
(210, 2, 'orderCurrency', 'orders', 'Currency Code', 1, 27),
(211, 2, 'orderExchangeRate', 'orders', 'Exchange Rate', 1, 28),
(212, 2, 'orderNotes', 'orders', 'Comment', 1, 22),
(213, 2, 'orderCustMessage', 'orders', 'Payment Notes', 1, 30),
(214, 2, 'billName', 'orders', '', 0, 42),
(215, 2, 'billFirstName', 'orders', 'First Name', 0, 33),
(216, 2, 'billLastName', 'orders', 'Co./Last Name', 0, 34),
(217, 2, 'billCompany', 'orders', 'Billing Company', 0, 43),
(218, 2, 'billStreet1', 'orders', 'Address Line 1', 0, 44),
(219, 2, 'billStreet2', 'orders', 'Address Line 2', 0, 45),
(220, 2, 'billSuburb', 'orders', 'Billing Suburb', 0, 46),
(221, 2, 'billState', 'orders', 'Billing State', 0, 47),
(222, 2, 'billStateAbbrv', 'orders', 'Billing State Abbreviation', 0, 48),
(223, 2, 'billZip', 'orders', 'Billing Zip', 0, 49),
(224, 2, 'billCountry', 'orders', 'Billing Country', 0, 50),
(225, 2, 'billSSC', 'orders', '', 0, 35),
(226, 2, 'billPhone', 'orders', 'Billing Phone', 0, 51),
(227, 2, 'billEmail', 'orders', 'Billing Email', 0, 52),
(228, 2, 'billFormFields', 'orders', 'Billing Form Fields', 0, 63),
(229, 2, 'shipName', 'orders', 'Shipping Name', 0, 53),
(230, 2, 'shipFirstName', 'orders', 'First Name', 1, 1),
(231, 2, 'shipLastName', 'orders', 'Co./Last Name', 1, 0),
(232, 2, 'shipCompany', 'orders', 'Shipping Company', 0, 54),
(233, 2, 'shipStreet1', 'orders', 'Address Line 1', 1, 2),
(234, 2, 'shipStreet2', 'orders', 'Address Line 2', 1, 3),
(235, 2, 'shipSuburb', 'orders', 'Address Line 3', 0, 36),
(236, 2, 'shipState', 'orders', 'Shipping State', 0, 55),
(237, 2, 'shipStateAbbrv', 'orders', 'Shipping State Abbreviation', 0, 56),
(238, 2, 'shipZip', 'orders', 'Shipping Zip', 0, 57),
(239, 2, 'shipCountry', 'orders', 'Address Line 4', 1, 5),
(240, 2, 'shipSSC', 'orders', 'Address Line 3', 1, 4),
(241, 2, 'shipPhone', 'orders', 'Shipping Phone', 0, 58),
(242, 2, 'shipEmail', 'orders', 'Shipping Email', 0, 59),
(243, 2, 'shipFormFields', 'orders', 'Shipping Form Fields', 0, 64),
(244, 2, 'orderProdDetails', 'orders', 'Product Details', 1, 10),
(245, 2, 'orderProdID', 'orders', 'Item Number', 1, 11),
(246, 2, 'orderProdQty', 'orders', 'Quantity', 1, 12),
(247, 2, 'orderProdSKU', 'orders', 'Product SKU', 0, 15),
(248, 2, 'orderProdName', 'orders', 'Description', 1, 13),
(249, 2, 'orderProdPrice', 'orders', 'Inc-Tax Price', 1, 14),
(250, 2, 'orderProdIndex', 'orders', 'Product Index', 0, 16),
(251, 2, 'orderProdTotalPrice', 'orders', 'Product Total Price', 0, 18),
(252, 2, 'orderGLAccount', 'orders', 'G/L Account', 0, 17),
(253, 2, 'orderPTTaxType', 'orders', 'Peachtree Tax Type', 0, 19),
(254, 2, 'orderProductCount', 'orders', '# Unique Products in Order', 0, 60),
(255, 2, 'orderTodaysDate', 'orders', 'Todays Date', 0, 61),
(256, 2, 'orderAccountsReceivable', 'orders', 'Peachtree Accounts Receivable Account', 0, 62),
(257, 2, 'productID', 'products', 'Item Number', 1, 0),
(258, 2, 'productType', 'products', 'Product Type', 0, 12),
(259, 2, 'productCode', 'products', 'Code', 0, 14),
(260, 2, 'productName', 'products', 'Item Name', 1, 1),
(261, 2, 'productBrand', 'products', 'Brand', 0, 15),
(262, 2, 'productBrandName', 'products', '', 0, 13),
(263, 2, 'productDesc', 'products', 'Description', 1, 7),
(264, 2, 'productTaxable', 'products', 'Taxable Product', 0, 16),
(265, 2, 'productCostPrice', 'products', 'Standard Cost', 1, 11),
(266, 2, 'productRetailPrice', 'products', 'Retail Price', 0, 17),
(267, 2, 'productSalePrice', 'products', 'Sale Price', 0, 18),
(268, 2, 'productCalculatedPrice', 'products', 'Selling Price', 1, 9),
(269, 2, 'productShippingPrice', 'products', 'Fixed Shipping Price', 0, 19),
(270, 2, 'productFreeShipping', 'products', 'Free Shipping', 0, 20),
(271, 2, 'productWarranty', 'products', 'Warranty', 0, 21),
(272, 2, 'productWeight', 'products', 'Weight', 0, 22),
(273, 2, 'productWidth', 'products', 'Width', 0, 23),
(274, 2, 'productHeight', 'products', 'Height', 0, 24),
(275, 2, 'productDepth', 'products', 'Depth', 0, 25),
(276, 2, 'productPurchasable', 'products', 'Sell', 1, 2),
(277, 2, 'productVisible', 'products', 'Product Visible', 0, 26),
(278, 2, 'productNotVisible', 'products', 'Inactive Item', 1, 10),
(279, 2, 'productAvailability', 'products', 'Product Availability', 0, 27),
(280, 2, 'productInventoried', 'products', 'Inventory', 1, 3),
(281, 2, 'productStockLevel', 'products', 'Stock Level', 0, 28),
(282, 2, 'productLowStockLevel', 'products', 'Minimum Level', 1, 8),
(283, 2, 'productDateAdded', 'products', 'Date Added', 0, 29),
(284, 2, 'productLastModified', 'products', 'Date Modified', 0, 30),
(285, 2, 'productCategories', 'products', 'Category Details', 0, 31),
(286, 2, 'productCategoryID', 'products', 'Category ID', 0, 32),
(287, 2, 'productCategoryName', 'products', 'Category Name', 0, 33),
(288, 2, 'productCategoryPath', 'products', 'Category Path', 0, 34),
(289, 2, 'productPageTitle', 'products', 'Page Title', 0, 35),
(290, 2, 'productMetaKeywords', 'products', 'META Keywords', 0, 36),
(291, 2, 'productMetaDesc', 'products', 'META Description', 0, 37),
(292, 2, 'productVariations', 'products', 'Product Variations', 0, 38),
(293, 2, 'productVarDetails', 'products', 'Variation Details', 0, 39),
(294, 2, 'productVarSKU', 'products', 'SKU', 0, 40),
(295, 2, 'productVarPrice', 'products', 'Price', 0, 41),
(296, 2, 'productVarWeight', 'products', 'Weight', 0, 42),
(297, 2, 'productVarStockLevel', 'products', 'Stock Level', 0, 43),
(298, 2, 'productVarLowStockLevel', 'products', 'Low Stock Level', 0, 44),
(299, 2, 'productMYOBAsset', 'products', 'Asset Acct', 1, 4),
(300, 2, 'productMYOBIncome', 'products', 'Income Acct', 1, 5),
(301, 2, 'productMYOBExpense', 'products', 'Expense/COS Acct', 1, 6),
(302, 2, 'productCondition', 'products', 'Product Condition', 0, 45),
(303, 3, 'customerID', 'customers', 'Customer ID', 1, 0),
(304, 3, 'customerName', 'customers', 'Customer Name', 1, 1),
(305, 3, 'customerFirstName', 'customers', 'First Name', 0, 21),
(306, 3, 'customerLastName', 'customers', 'Last Name', 0, 22),
(307, 3, 'customerCompany', 'customers', 'Company', 0, 23),
(308, 3, 'customerEmail', 'customers', 'Customer E-mail', 1, 18),
(309, 3, 'customerPhone', 'customers', 'Telephone 1', 1, 17),
(310, 3, 'customerNotes', 'customers', 'Notes', 0, 24),
(311, 3, 'customerCredit', 'customers', 'Customer Balance', 1, 20),
(312, 3, 'customerGroup', 'customers', 'Customer Group', 0, 25),
(313, 3, 'customerDateJoined', 'customers', 'Customer Since Date', 1, 19),
(314, 3, 'customerAddresses', 'customers', 'Addresses', 1, 2),
(315, 3, 'addressName', 'customers', 'Ship to Name', 1, 3),
(316, 3, 'addressFirstName', 'customers', 'Address First Name', 0, 10),
(317, 3, 'addressLastName', 'customers', 'Address Last Name', 0, 11),
(318, 3, 'addressCompany', 'customers', 'Address Company', 0, 12),
(319, 3, 'addressLine1', 'customers', 'Ship to Address Line 1', 1, 4),
(320, 3, 'addressLine2', 'customers', 'Ship to Address Line 2', 1, 5),
(321, 3, 'addressSuburb', 'customers', 'Ship to City', 1, 6),
(322, 3, 'addressState', 'customers', 'Ship to State', 0, 13),
(323, 3, 'addressStateAbbrv', 'customers', 'Ship to State', 1, 7),
(324, 3, 'addressPostcode', 'customers', 'Ship to Zipcode', 1, 8),
(325, 3, 'addressCountry', 'customers', 'Ship to Country', 1, 9),
(326, 3, 'addressBuilding', 'customers', 'Building Type', 0, 14),
(327, 3, 'addressPhone', 'customers', 'Address Phone', 0, 15),
(328, 2, 'addressFormFields', 'customers', 'Address Form Fields', 0, 16),
(329, 2, 'customerFormFields', 'customers', 'Form Fields', 0, 26),
(330, 3, 'orderID', 'orders', 'Invoice/CM #', 1, 1),
(331, 3, 'orderStatus', 'orders', 'Order Status', 0, 27),
(332, 3, 'orderDate', 'orders', 'Date', 1, 2),
(333, 3, 'orderSubtotalInc', 'orders', 'Subtotal', 0, 28),
(334, 3, 'orderTaxtotal', 'orders', 'Tax Total', 0, 29),
(335, 3, 'orderTaxRate', 'orders', 'Tax Rate', 0, 30),
(336, 3, 'orderTaxName', 'orders', 'Sales Tax Agency', 0, 31),
(337, 3, 'orderShipCostInc', 'orders', 'Shipping Cost', 0, 33),
(338, 3, 'orderHandlingCostInc', 'orders', 'Handling Cost', 0, 34),
(339, 3, 'orderTotalAmountInc', 'orders', 'Order Total', 0, 35),
(340, 3, 'orderCustomerID', 'orders', 'Customer ID', 1, 0),
(341, 3, 'orderShipMethod', 'orders', 'Ship Via', 1, 10),
(342, 3, 'orderPayMethod', 'orders', 'Payment Method', 0, 36),
(343, 3, 'orderTotalQty', 'orders', 'Total Quantity', 0, 37),
(344, 3, 'orderTotalShipped', 'orders', 'Total Shipped', 0, 38),
(345, 3, 'orderDateShipped', 'orders', 'Ship Date', 1, 11),
(346, 3, 'orderCurrency', 'orders', 'Order Currency Code', 0, 40),
(347, 3, 'orderExchangeRate', 'orders', 'Exchange Rate', 0, 41),
(348, 3, 'orderNotes', 'orders', 'Internal Note', 1, 14),
(349, 3, 'orderCustMessage', 'orders', 'Invoice Note', 1, 13),
(350, 3, 'billName', 'orders', 'Billing Name', 0, 58),
(351, 3, 'billFirstName', 'orders', 'Billing First Name', 0, 42),
(352, 3, 'billLastName', 'orders', 'Billing Last Name', 0, 43),
(353, 3, 'billCompany', 'orders', 'Billing Company', 0, 44),
(354, 3, 'billStreet1', 'orders', 'Billing Street 1', 0, 45),
(355, 3, 'billStreet2', 'orders', 'Billing Street 2', 0, 46),
(356, 3, 'billSuburb', 'orders', 'Billing Suburb', 0, 47),
(357, 3, 'billState', 'orders', 'Billing State', 0, 48),
(358, 3, 'billStateAbbrv', 'orders', 'Billing State Abbreviation', 0, 59),
(359, 3, 'billZip', 'orders', 'Billing Zip', 0, 49),
(360, 3, 'billCountry', 'orders', 'Billing Country', 0, 50),
(361, 3, 'billSSC', 'orders', 'Billing Suburb + State + Zip', 0, 61),
(362, 3, 'billPhone', 'orders', 'Billing Phone', 0, 51),
(363, 3, 'billEmail', 'orders', 'Billing Email', 0, 52),
(364, 2, 'billFormFields', 'orders', 'Billing Form Fields', 0, 63),
(365, 3, 'shipName', 'orders', 'Ship to Name', 1, 3),
(366, 3, 'shipFirstName', 'orders', '', 0, 53),
(367, 3, 'shipLastName', 'orders', 'Shipping Last Name', 0, 54),
(368, 3, 'shipCompany', 'orders', 'Shipping Company', 0, 55),
(369, 3, 'shipStreet1', 'orders', 'Ship to Address-Line One', 1, 4),
(370, 3, 'shipStreet2', 'orders', 'Ship to Address-Line Two', 1, 5),
(371, 3, 'shipSuburb', 'orders', 'Ship to City', 1, 6),
(372, 3, 'shipState', 'orders', 'Ship to State', 1, 7),
(373, 3, 'shipStateAbbrv', 'orders', 'Shipping State Abbreviation', 0, 60),
(374, 3, 'shipZip', 'orders', 'Ship to Zipcode', 1, 8),
(375, 3, 'shipCountry', 'orders', 'Ship to Country', 1, 9),
(376, 3, 'shipSSC', 'orders', 'Shipping Suburb + State + Zip', 0, 62),
(377, 3, 'shipPhone', 'orders', 'Shipping Phone', 0, 56),
(378, 3, 'shipEmail', 'orders', 'Shipping Email', 0, 57),
(379, 3, 'shipFormFields', 'orders', 'Billing Form Fields', 0, 64),
(380, 3, 'orderProdDetails', 'orders', 'Product Details', 1, 16),
(381, 3, 'orderProdID', 'orders', 'Item ID', 1, 19),
(382, 3, 'orderProdQty', 'orders', 'Quantity', 1, 18),
(383, 3, 'orderProdSKU', 'orders', 'UPC/SKU', 1, 24),
(384, 3, 'orderProdName', 'orders', 'Description', 1, 20),
(385, 3, 'orderProdPrice', 'orders', 'Unit Price', 1, 22),
(386, 3, 'orderProdIndex', 'orders', 'Invoice/CM Distribution', 1, 17),
(387, 3, 'orderProdTotalPrice', 'orders', 'Amount', 1, 25),
(388, 3, 'orderGLAccount', 'orders', 'G/L Account', 1, 21),
(389, 3, 'orderPTTaxType', 'orders', 'Tax Type', 1, 23),
(390, 3, 'orderProductCount', 'orders', 'Number of Distributions', 1, 15),
(391, 3, 'orderTodaysDate', 'orders', 'Date Due', 0, 26),
(392, 3, 'orderAccountsReceivable', 'orders', 'Accounts Receivable Account', 1, 12),
(393, 3, 'productID', 'products', 'Item ID', 1, 0),
(394, 3, 'productType', 'products', 'Item Type', 1, 7),
(395, 3, 'productCode', 'products', 'UPC/SKU', 1, 6),
(396, 3, 'productName', 'products', 'Item Description', 1, 1),
(397, 3, 'productBrand', 'products', 'Brand', 0, 13),
(398, 3, 'productBrandName', 'products', 'Brand + Name', 0, 39),
(399, 3, 'productDesc', 'products', 'Description for Sales ', 1, 3),
(400, 3, 'productTaxable', 'products', 'Is Taxable', 1, 10),
(401, 3, 'productCostPrice', 'products', 'Last Unit Cost', 1, 5),
(402, 3, 'productRetailPrice', 'products', 'Retail Price', 0, 14),
(403, 3, 'productSalePrice', 'products', 'Sales Price 1', 0, 15),
(404, 3, 'productCalculatedPrice', 'products', 'Sales Price 1', 1, 4),
(405, 3, 'productShippingPrice', 'products', 'Fixed Shipping Price', 0, 16),
(406, 3, 'productFreeShipping', 'products', 'Free Shipping', 0, 17),
(407, 3, 'productWarranty', 'products', 'Warranty', 0, 18),
(408, 3, 'productWeight', 'products', 'Weight', 1, 8),
(409, 3, 'productWidth', 'products', 'Width', 0, 20),
(410, 3, 'productHeight', 'products', 'Height', 0, 21),
(411, 3, 'productDepth', 'products', 'Depth', 0, 22),
(412, 3, 'productPurchasable', 'products', 'Allow Purchases', 0, 40),
(413, 3, 'productVisible', 'products', 'Product Visible', 0, 12),
(414, 3, 'productNotVisible', 'products', 'Inactive', 1, 2),
(415, 3, 'productAvailability', 'products', 'Product Availability', 0, 23),
(416, 3, 'productInventoried', 'products', 'Product Inventoried', 0, 41),
(417, 3, 'productStockLevel', 'products', 'Quantity on Hand', 0, 19),
(418, 3, 'productLowStockLevel', 'products', 'Minimum Stock', 1, 9),
(419, 3, 'productDateAdded', 'products', 'Date Added', 0, 24),
(420, 3, 'productLastModified', 'products', 'Effective Date ', 1, 11),
(421, 3, 'productCategories', 'products', 'Category Details', 0, 25),
(422, 3, 'productCategoryID', 'products', 'Category ID', 0, 26),
(423, 3, 'productCategoryName', 'products', 'Category Name', 0, 27),
(424, 3, 'productCategoryPath', 'products', 'Category Path', 0, 28),
(425, 3, 'productPageTitle', 'products', 'Page Title', 0, 29),
(426, 3, 'productMetaKeywords', 'products', 'META Keywords', 0, 30),
(427, 3, 'productMetaDesc', 'products', 'META Description', 0, 31),
(428, 3, 'productVariations', 'products', 'Product Variations', 0, 32),
(429, 3, 'productVarDetails', 'products', 'Variation Details', 0, 33),
(430, 3, 'productVarSKU', 'products', 'SKU', 0, 34),
(431, 3, 'productVarPrice', 'products', 'Price', 0, 35),
(432, 3, 'productVarWeight', 'products', 'Weight', 0, 36),
(433, 3, 'productVarStockLevel', 'products', 'Stock Level', 0, 37),
(434, 3, 'productVarLowStockLevel', 'products', 'Low Stock Level', 0, 38),
(435, 3, 'productMYOBAsset', 'products', 'MYOB Asset Acct', 0, 42),
(436, 3, 'productMYOBIncome', 'products', 'MYOB Income Acct', 0, 43),
(437, 3, 'productMYOBExpense', 'products', 'MYOB Expense Acct', 0, 44),
(438, 3, 'productCondition', 'products', 'Product Condition', 0, 45),
(439, 4, 'abandonorderOrderId', 'abandonorder', 'Order ID', 1, 0),
(440, 4, 'abandonorderCustomerName', 'abandonorder', 'Customer Name', 1, 1),
(441, 4, 'abandonorderCustomerEmail', 'abandonorder', 'Customer Email', 1, 2),
(442, 4, 'abandonorderCustomerPhone', 'abandonorder', 'Customer Phone', 1, 3),
(443, 4, 'abandonorderDate', 'abandonorder', 'Date', 1, 4),
(444, 4, 'abandonorderTotalOrderAmount', 'abandonorder', 'Total Order Amount', 1, 5),
(445, 4, 'customerID', 'customers', 'Customer ID', 0, 0),
(446, 4, 'customerName', 'customers', 'Customer Name', 0, 1),
(447, 4, 'customerDateJoined', 'customers', 'Date Joined', 0, 10),
(448, 4, 'addressName', 'customers', 'Address Name', 0, 12),
(449, 4, 'addressStateAbbrv', 'customers', 'Address State Abbreviation', 0, 21),
(450, 4, 'addressBuilding', 'customers', 'Building Type', 0, 24),
(451, 4, 'customerEmail', 'customers', 'Email Address', 1, 2),
(452, 4, 'customerFirstName', 'customers', 'First Name', 1, 3),
(453, 4, 'customerLastName', 'customers', 'Last Name', 1, 4),
(454, 4, 'customerCompany', 'customers', 'Company', 1, 5),
(455, 4, 'customerPhone', 'customers', 'Phone', 1, 6),
(456, 4, 'customerNotes', 'customers', 'Notes', 1, 7),
(457, 4, 'customerCredit', 'customers', 'Store Credit', 1, 8),
(458, 4, 'customerGroup', 'customers', 'Customer Group', 1, 9),
(459, 4, 'customerAddresses', 'customers', 'Addresses', 1, 11),
(460, 4, 'addressID', 'customers', 'Address ID', 1, 13),
(461, 4, 'addressFirstName', 'customers', 'Address First Name', 1, 14),
(462, 4, 'addressLastName', 'customers', 'Address Last Name', 1, 15),
(463, 4, 'addressCompany', 'customers', 'Address Company', 1, 16),
(464, 4, 'addressLine1', 'customers', 'Address Line 1', 1, 17),
(465, 4, 'addressLine2', 'customers', 'Address Line 2', 1, 18),
(466, 4, 'addressSuburb', 'customers', 'Address City', 1, 19),
(467, 4, 'addressState', 'customers', 'Address State', 1, 20),
(468, 4, 'addressPostcode', 'customers', 'Address Zip', 1, 22),
(469, 4, 'addressCountry', 'customers', 'Address Country', 1, 23),
(470, 4, 'addressPhone', 'customers', 'Address Phone', 1, 25),
(471, 4, 'addressFormFields', 'customers', 'Address Form Fields', 1, 26),
(472, 4, 'customerFormFields', 'customers', 'Form Fields', 1, 27),
(473, 4, 'orderID', 'orders', 'Order ID', 1, 0),
(474, 4, 'orderStatus', 'orders', 'Order Status', 1, 1),
(475, 4, 'orderDate', 'orders', 'Order Date', 1, 2),
(476, 4, 'orderSubtotal', 'orders', 'Subtotal', 1, 3),
(477, 4, 'orderTaxtotal', 'orders', 'Tax Total', 1, 4),
(478, 4, 'orderTaxRate', 'orders', 'Tax Rate', 1, 5),
(479, 4, 'orderTaxName', 'orders', 'Tax Name', 1, 6),
(480, 4, 'orderShipCost', 'orders', 'Shipping Cost', 1, 8),
(481, 4, 'orderHandlingCost', 'orders', 'Handling Cost', 1, 9),
(482, 4, 'orderTotalAmount', 'orders', 'Order Total', 1, 10),
(483, 4, 'orderCustomerID', 'orders', 'Customer ID', 1, 11),
(484, 4, 'orderCustomerName', 'orders', 'Customer Name', 1, 12),
(485, 4, 'orderCustomerEmail', 'orders', 'Customer Email', 1, 13),
(486, 4, 'orderCustomerPhone', 'orders', 'Customer Phone', 1, 14),
(487, 4, 'orderShipMethod', 'orders', 'Ship Method', 1, 15),
(488, 4, 'orderPayMethod', 'orders', 'Payment Method', 1, 16),
(489, 4, 'orderTotalQty', 'orders', 'Total Quantity', 1, 17),
(490, 4, 'orderTotalShipped', 'orders', 'Total Shipped', 1, 18),
(491, 4, 'orderDateShipped', 'orders', 'Date Shipped', 1, 19),
(492, 4, 'orderCurrency', 'orders', 'Order Currency Code', 1, 21),
(493, 4, 'orderExchangeRate', 'orders', 'Exchange Rate', 1, 22),
(494, 4, 'orderNotes', 'orders', 'Order Notes', 1, 23),
(495, 4, 'orderCustMessage', 'orders', 'Customer Message', 1, 24),
(496, 4, 'billName', 'orders', 'Billing Name', 1, 25),
(497, 4, 'billFirstName', 'orders', 'Billing First Name', 1, 26),
(498, 4, 'billLastName', 'orders', 'Billing Last Name', 1, 27),
(499, 4, 'billCompany', 'orders', 'Billing Company', 1, 28),
(500, 4, 'billStreet1', 'orders', 'Billing Street 1', 1, 29),
(501, 4, 'billStreet2', 'orders', 'Billing Street 2', 1, 30),
(502, 4, 'billSuburb', 'orders', 'Billing Suburb', 1, 31),
(503, 4, 'billState', 'orders', 'Billing State', 1, 32),
(504, 4, 'billStateAbbrv', 'orders', 'Billing State Abbreviation', 1, 33),
(505, 4, 'billZip', 'orders', 'Billing Zip', 1, 34),
(506, 4, 'billCountry', 'orders', 'Billing Country', 1, 35),
(507, 4, 'billSSC', 'orders', 'Billing Suburb + State + Zip', 1, 36),
(508, 4, 'billPhone', 'orders', 'Billing Phone', 1, 37),
(509, 4, 'billEmail', 'orders', 'Billing Email', 1, 38),
(510, 4, 'billFormFields', 'orders', 'Billing Form Fields', 1, 39),
(511, 4, 'shipName', 'orders', 'Shipping Name', 1, 40),
(512, 4, 'shipFirstName', 'orders', 'Shipping First Name', 1, 41),
(513, 4, 'shipLastName', 'orders', 'Shipping Last Name', 1, 42),
(514, 4, 'shipCompany', 'orders', 'Shipping Company', 1, 43),
(515, 4, 'shipStreet1', 'orders', 'Shipping Street 1', 1, 44),
(516, 4, 'shipStreet2', 'orders', 'Shipping Street 2', 1, 45),
(517, 4, 'shipSuburb', 'orders', 'Shipping Suburb', 1, 46),
(518, 4, 'shipState', 'orders', 'Shipping State', 1, 47),
(519, 4, 'shipStateAbbrv', 'orders', 'Shipping State Abbreviation', 1, 48),
(520, 4, 'shipZip', 'orders', 'Shipping Zip', 1, 49),
(521, 4, 'shipCountry', 'orders', 'Shipping Country', 1, 50),
(522, 4, 'shipSSC', 'orders', 'Shipping Suburb + State + Zip', 1, 51),
(523, 4, 'shipPhone', 'orders', 'Shipping Phone', 1, 52),
(524, 4, 'shipEmail', 'orders', 'Shipping Email', 1, 53),
(525, 4, 'shipFormFields', 'orders', 'Shipping Form Fields', 1, 54),
(526, 4, 'orderProdDetails', 'orders', 'Product Details', 1, 55),
(527, 4, 'orderProdID', 'orders', 'Product ID', 1, 56),
(528, 4, 'orderProdQty', 'orders', 'Product Qty', 1, 57),
(529, 4, 'orderProdSKU', 'orders', 'Product SKU', 1, 58),
(530, 4, 'orderProdName', 'orders', 'Product Name', 1, 59),
(531, 4, 'orderProdVariationDetails', 'orders', 'Product Variation Details', 1, 60),
(532, 4, 'orderProdPrice', 'orders', 'Product Unit Price', 1, 61),
(533, 4, 'orderProdIndex', 'orders', 'Product Index', 1, 62),
(534, 4, 'orderProdWeight', 'orders', 'Product Weight', 1, 63),
(535, 4, 'orderProdTotalPrice', 'orders', 'Product Total Price', 1, 64),
(536, 4, 'orderGLAccount', 'orders', 'Peachtree General Ledger Account', 1, 65),
(537, 4, 'orderPTTaxType', 'orders', 'Peachtree Tax Type', 1, 66),
(538, 4, 'orderProductCount', 'orders', '# Unique Products in Order', 1, 67),
(539, 4, 'orderCombinedWeight', 'orders', 'Combined Product Weight', 1, 68),
(540, 4, 'orderTodaysDate', 'orders', 'Todays Date', 1, 69),
(541, 4, 'orderAccountsReceivable', 'orders', 'Peachtree Accounts Receivable Account', 1, 70),
(542, 4, 'productID', 'products', 'Product ID', 1, 0),
(543, 4, 'productName', 'products', 'Product Name', 1, 1),
(544, 4, 'productType', 'products', 'Product Type', 1, 2),
(545, 4, 'productCode', 'products', 'Product Code/SKU', 1, 3),
(546, 4, 'productBrand', 'products', 'Brand Name', 1, 4),
(547, 4, 'productBrandName', 'products', 'Brand + Name', 0, 5),
(548, 4, 'productDesc', 'products', 'Product Description', 1, 6),
(549, 4, 'productPrice', 'products', 'Price', 1, 7),
(550, 4, 'productCostPrice', 'products', 'Cost Price', 1, 8),
(551, 4, 'productRetailPrice', 'products', 'Retail Price', 1, 9),
(552, 4, 'productSalePrice', 'products', 'Sale Price', 1, 10),
(553, 4, 'productTaxable', 'products', 'Taxable Product?', 1, 11),
(554, 4, 'productCalculatedPrice', 'products', 'Calculated Price', 0, 12),
(555, 4, 'productShippingPrice', 'products', 'Fixed Shipping Cost', 1, 13),
(556, 4, 'productFreeShipping', 'products', 'Free Shipping', 1, 14),
(557, 4, 'productWarranty', 'products', 'Product Warranty', 1, 15),
(558, 4, 'productWeight', 'products', 'Product Weight', 1, 16),
(559, 4, 'productWidth', 'products', 'Product Width', 1, 17),
(560, 4, 'productHeight', 'products', 'Product Height', 1, 18),
(561, 4, 'productDepth', 'products', 'Product Depth', 1, 19),
(562, 4, 'productPurchasable', 'products', 'Allow Purchases?', 1, 20),
(563, 4, 'productVisible', 'products', 'Product Visible?', 1, 21),
(564, 4, 'productNotVisible', 'products', 'Product Not Visible', 0, 22),
(565, 4, 'productAvailability', 'products', 'Product Availability', 1, 23),
(566, 4, 'productTrackInventory', 'products', 'Track Inventory', 1, 24),
(567, 4, 'productInventoried', 'products', 'Product Inventoried', 0, 25),
(568, 4, 'productStockLevel', 'products', 'Current Stock Level', 1, 26),
(569, 4, 'productLowStockLevel', 'products', 'Low Stock Level', 1, 27),
(570, 4, 'productDateAdded', 'products', 'Date Added', 0, 28),
(571, 4, 'productLastModified', 'products', 'Date Modified', 0, 29),
(572, 4, 'productCategoryString', 'products', 'Category', 1, 30),
(573, 4, 'productFiles', 'products', 'Product Files', 1, 31),
(574, 4, 'productFileFileName', 'products', 'Product File', 1, 32),
(575, 4, 'productFilePath', 'products', 'Product File Path', 0, 33),
(576, 4, 'productFileDescription', 'products', 'Product File Description', 1, 34),
(577, 4, 'productFileMaxDownloads', 'products', 'Product File Max Downloads', 1, 35),
(578, 4, 'productFileTotalDownloads', 'products', 'Product File Total Downloads', 0, 36),
(579, 4, 'productFileDisabledAfter', 'products', 'Product File Expires After', 1, 37),
(580, 4, 'productCategories', 'products', 'Category Details', 0, 38),
(581, 4, 'productCategoryID', 'products', 'Category ID', 0, 39),
(582, 4, 'productCategoryName', 'products', 'Category Name', 0, 40),
(583, 4, 'productCategoryPath', 'products', 'Category Path', 0, 41),
(584, 4, 'productImages', 'products', 'Product Images', 1, 42),
(585, 4, 'productImageID', 'products', 'Product Image ID', 1, 43),
(586, 4, 'productImagePath', 'products', 'Product Image File', 1, 44),
(587, 4, 'productImageFile', 'products', 'Product Image File', 0, 45),
(588, 4, 'productImageURL', 'products', 'Product Image URL', 0, 46),
(589, 4, 'productImageDescription', 'products', 'Product Image Description', 1, 47),
(590, 4, 'productImageIsThumbnail', 'products', 'Product Image Is Thumbnail', 1, 48),
(591, 4, 'productImageIndex', 'products', 'Product Image Sort', 1, 49),
(592, 4, 'productSearchKeywords', 'products', 'Search Keywords', 1, 50),
(593, 4, 'productPageTitle', 'products', 'Page Title', 1, 51),
(594, 4, 'productMetaKeywords', 'products', 'Meta Keywords', 1, 52),
(595, 4, 'productMetaDesc', 'products', 'Meta Description', 1, 53),
(596, 4, 'productVariations', 'products', 'Product Variations', 0, 54),
(597, 4, 'productVarDetails', 'products', 'Variation Details', 0, 55),
(598, 4, 'productVarSKU', 'products', 'SKU', 0, 56),
(599, 4, 'productVarPrice', 'products', 'Price', 0, 57),
(600, 4, 'productVarWeight', 'products', 'Weight', 0, 58),
(601, 4, 'productVarStockLevel', 'products', 'Stock Level', 0, 59),
(602, 4, 'productVarLowStockLevel', 'products', 'Low Stock Level', 0, 60),
(603, 4, 'productMYOBAsset', 'products', 'MYOB Asset Acct', 1, 61),
(604, 4, 'productMYOBIncome', 'products', 'MYOB Income Acct', 1, 62),
(605, 4, 'productMYOBExpense', 'products', 'MYOB Expense Acct', 1, 63),
(606, 4, 'productCondition', 'products', 'Product Condition', 1, 64),
(607, 4, 'productShowCondition', 'products', 'Show Product Condition?', 1, 65),
(608, 4, 'productEventDateRequired', 'products', 'Event Date Required?', 1, 66),
(609, 4, 'productEventDateName', 'products', 'Event Date Name', 1, 67),
(610, 4, 'productEventDateLimited', 'products', 'Event Date Is Limited?', 1, 68),
(611, 4, 'productEventDateStartDate', 'products', 'Event Date Start Date', 1, 69),
(612, 4, 'productEventDateEndDate', 'products', 'Event Date End Date', 1, 70),
(613, 4, 'productSortOrder', 'products', 'Sort Order', 1, 71),
(614, 4, 'productUPC', 'products', 'Product UPC', 1, 72),
(615, 4, 'salestaxDate', 'salestax', 'Period', 1, 0),
(616, 4, 'salestaxTaxName', 'salestax', 'Tax', 1, 1),
(617, 4, 'salestaxTaxRate', 'salestax', 'Rate', 1, 2),
(618, 4, 'salestaxNumOrders', 'salestax', 'Number of Orders', 1, 3),
(619, 4, 'salestaxTaxAmount', 'salestax', 'Tax Amount', 1, 4),
(620, 4, 'redirectPath', 'redirects', 'Old Path', 0, 0),
(621, 4, 'redirectOldURL', 'redirects', 'Old URL', 1, 1),
(622, 4, 'redirectNewURL', 'redirects', 'New URL', 0, 2),
(623, 4, 'redirectAssocType', 'redirects', 'Associated Type', 0, 3),
(624, 4, 'redirectAssocId', 'redirects', 'Associated ID', 1, 5),
(625, 4, 'redirectNewURLOrAssocType', 'redirects', 'New URL', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `isc_formfields`
--

CREATE TABLE IF NOT EXISTS `isc_formfields` (
  `formfieldid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formfieldformid` int(10) unsigned NOT NULL DEFAULT '0',
  `formfieldtype` varchar(50) NOT NULL DEFAULT '',
  `formfieldlabel` varchar(255) NOT NULL DEFAULT '',
  `formfielddefaultval` varchar(255) NOT NULL DEFAULT '',
  `formfieldextrainfo` text,
  `formfieldisrequired` tinyint(1) NOT NULL DEFAULT '0',
  `formfieldisimmutable` tinyint(1) DEFAULT '0',
  `formfieldprivateid` varchar(255) NOT NULL DEFAULT '',
  `formfieldlastmodified` int(10) unsigned NOT NULL DEFAULT '0',
  `formfieldsort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`formfieldid`),
  KEY `i_formfields_formfieldformid` (`formfieldformid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `isc_formfields`
--

INSERT INTO `isc_formfields` (`formfieldid`, `formfieldformid`, `formfieldtype`, `formfieldlabel`, `formfielddefaultval`, `formfieldextrainfo`, `formfieldisrequired`, `formfieldisimmutable`, `formfieldprivateid`, `formfieldlastmodified`, `formfieldsort`) VALUES
(1, 1, 'singleline', 'Email Address', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'EmailAddress', 1336374362, 1),
(2, 1, 'password', 'Password', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'Password', 1336374362, 2),
(3, 1, 'password', 'Confirm Password', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'ConfirmPassword', 1336374362, 3),
(4, 2, 'singleline', 'First Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'FirstName', 1336374362, 1),
(5, 2, 'singleline', 'Last Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'LastName', 1336374362, 2),
(6, 2, 'singleline', 'Company Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 0, 2, 'CompanyName', 1336374362, 3),
(7, 2, 'singleline', 'Phone Number', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'Phone', 1336374362, 4),
(8, 2, 'singleline', 'Address Line 1', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'AddressLine1', 1336374362, 5),
(9, 2, 'singleline', 'Address Line 2', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 0, 2, 'AddressLine2', 1336374362, 6),
(10, 2, 'singleline', 'Suburb/City', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'City', 1336374362, 7),
(11, 2, 'singleselect', 'Country', '', 'a:4:{s:5:"class";s:8:"Field200";s:5:"style";s:0:"";s:12:"chooseprefix";s:16:"Choose a Country";s:7:"options";a:0:{}}', 1, 1, 'Country', 1336374362, 8),
(12, 2, 'selectortext', 'State/Province', '', 'a:6:{s:5:"class";s:8:"Field200";s:5:"style";s:0:"";s:12:"chooseprefix";s:14:"Choose a State";s:7:"options";a:0:{}s:4:"size";s:0:"";s:9:"maxlength";s:0:"";}', 1, 1, 'State', 1336374362, 9),
(13, 2, 'singleline', 'Zip/Postcode', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:15:"Textbox Field45";s:5:"style";s:11:"width:40px;";}', 1, 1, 'Zip', 1336374362, 10),
(14, 3, 'singleline', 'First Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'FirstName', 1336374362, 1),
(15, 3, 'singleline', 'Last Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'LastName', 1336374362, 2),
(16, 3, 'singleline', 'Company Name', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 0, 2, 'CompanyName', 1336374362, 3),
(17, 3, 'singleline', 'Phone Number', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'Phone', 1336374362, 4),
(18, 3, 'singleline', 'Address Line 1', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'AddressLine1', 1336374362, 5),
(19, 3, 'singleline', 'Address Line 2', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 0, 2, 'AddressLine2', 1336374362, 6),
(20, 3, 'singleline', 'Suburb/City', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:16:"Textbox Field200";s:5:"style";s:0:"";}', 1, 1, 'City', 1336374362, 7),
(21, 3, 'singleselect', 'Country', '', 'a:4:{s:5:"class";s:8:"Field200";s:5:"style";s:0:"";s:12:"chooseprefix";s:16:"Choose a Country";s:7:"options";a:0:{}}', 1, 1, 'Country', 1336374362, 8),
(22, 3, 'selectortext', 'State/Province', '', 'a:6:{s:5:"class";s:8:"Field200";s:5:"style";s:0:"";s:12:"chooseprefix";s:14:"Choose a State";s:7:"options";a:0:{}s:4:"size";s:0:"";s:9:"maxlength";s:0:"";}', 1, 1, 'State', 1336374362, 9),
(23, 3, 'singleline', 'Zip/Postcode', '', 'a:5:{s:12:"defaultvalue";s:0:"";s:4:"size";s:0:"";s:9:"maxlength";s:0:"";s:5:"class";s:15:"Textbox Field45";s:5:"style";s:11:"width:40px;";}', 1, 1, 'Zip', 1336374362, 10);

-- --------------------------------------------------------

--
-- Table structure for table `isc_formfieldsessions`
--

CREATE TABLE IF NOT EXISTS `isc_formfieldsessions` (
  `formfieldsessioniformsessionid` int(10) unsigned NOT NULL DEFAULT '0',
  `formfieldfieldid` int(10) unsigned NOT NULL DEFAULT '0',
  `formfieldformid` int(10) unsigned NOT NULL DEFAULT '0',
  `formfieldfieldtype` varchar(50) NOT NULL DEFAULT '',
  `formfieldfieldlabel` varchar(255) NOT NULL DEFAULT '',
  `formfieldfieldvalue` text,
  PRIMARY KEY (`formfieldsessioniformsessionid`,`formfieldfieldid`),
  KEY `i_formfieldsessions_formfieldsessioniformsessionid` (`formfieldsessioniformsessionid`),
  KEY `i_formfieldsessions_formfieldfieldid` (`formfieldfieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_forms`
--

CREATE TABLE IF NOT EXISTS `isc_forms` (
  `formid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`formid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `isc_forms`
--

INSERT INTO `isc_forms` (`formid`, `formname`) VALUES
(1, 'Account Details'),
(2, 'Billing Details'),
(3, 'Shipping Details');

-- --------------------------------------------------------

--
-- Table structure for table `isc_formsessions`
--

CREATE TABLE IF NOT EXISTS `isc_formsessions` (
  `formsessionid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `formsessiondate` int(10) unsigned NOT NULL DEFAULT '0',
  `formsessionformidx` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`formsessionid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_formsessions`
--

INSERT INTO `isc_formsessions` (`formsessionid`, `formsessiondate`, `formsessionformidx`) VALUES
(1, 1336388693, '1'),
(2, 1336388693, '2');

-- --------------------------------------------------------

--
-- Table structure for table `isc_gift_certificates`
--

CREATE TABLE IF NOT EXISTS `isc_gift_certificates` (
  `giftcertid` int(10) NOT NULL AUTO_INCREMENT,
  `giftcertcode` varchar(20) NOT NULL DEFAULT '',
  `giftcertto` varchar(100) NOT NULL DEFAULT '',
  `giftcerttoemail` varchar(100) NOT NULL DEFAULT '',
  `giftcertfrom` varchar(100) NOT NULL DEFAULT '',
  `giftcertfromemail` varchar(100) NOT NULL DEFAULT '',
  `giftcertcustid` int(10) NOT NULL DEFAULT '0',
  `giftcertamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `giftcertbalance` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `giftcertstatus` int(1) NOT NULL DEFAULT '0',
  `giftcerttemplate` varchar(50) NOT NULL DEFAULT '',
  `giftcertmessage` varchar(250) NOT NULL DEFAULT '',
  `giftcertpurchasedate` int(10) NOT NULL DEFAULT '0',
  `giftcertexpirydate` int(10) NOT NULL DEFAULT '0',
  `giftcertorderid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`giftcertid`),
  UNIQUE KEY `u_gift_certificates` (`giftcertcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_gift_certificate_history`
--

CREATE TABLE IF NOT EXISTS `isc_gift_certificate_history` (
  `historyid` int(10) NOT NULL AUTO_INCREMENT,
  `histgiftcertid` int(10) NOT NULL DEFAULT '0',
  `historderid` int(10) NOT NULL DEFAULT '0',
  `histcustomerid` int(10) NOT NULL DEFAULT '0',
  `histbalanceused` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `histbalanceremaining` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `historddate` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`historyid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_gift_wrapping`
--

CREATE TABLE IF NOT EXISTS `isc_gift_wrapping` (
  `wrapid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wrapname` varchar(100) NOT NULL DEFAULT '',
  `wrapprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapvisible` int(1) NOT NULL DEFAULT '0',
  `wrapallowcomments` int(1) NOT NULL DEFAULT '0',
  `wrappreview` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`wrapid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_keystore`
--

CREATE TABLE IF NOT EXISTS `isc_keystore` (
  `key` varchar(255) CHARACTER SET utf8 NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `isc_module_vars`
--

CREATE TABLE IF NOT EXISTS `isc_module_vars` (
  `variableid` int(11) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(100) NOT NULL DEFAULT '',
  `variablename` varchar(100) NOT NULL DEFAULT '',
  `variableval` text,
  PRIMARY KEY (`variableid`),
  KEY `modulename` (`modulename`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_module_vars`
--

INSERT INTO `isc_module_vars` (`variableid`, `modulename`, `variablename`, `variableval`) VALUES
(1, 'comments_builtincomments', 'is_setup', '1'),
(2, 'comments_builtincomments', 'commenttypes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `isc_news`
--

CREATE TABLE IF NOT EXISTS `isc_news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(250) NOT NULL DEFAULT '',
  `newscontent` longtext,
  `newsdate` int(11) NOT NULL DEFAULT '0',
  `newsvisible` tinyint(4) NOT NULL DEFAULT '0',
  `newssearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`newsid`),
  KEY `i_news_date_vis` (`newsdate`,`newsvisible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_news_search`
--

CREATE TABLE IF NOT EXISTS `isc_news_search` (
  `newssearchid` int(11) NOT NULL AUTO_INCREMENT,
  `newsid` int(11) NOT NULL DEFAULT '0',
  `newstitle` varchar(255) NOT NULL DEFAULT '',
  `newscontent` longtext NOT NULL,
  `newssearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`newssearchid`),
  KEY `i_news_search_newsid` (`newsid`),
  FULLTEXT KEY `newstitle` (`newstitle`,`newscontent`,`newssearchkeywords`),
  FULLTEXT KEY `newstitle2` (`newstitle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_news_words`
--

CREATE TABLE IF NOT EXISTS `isc_news_words` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL DEFAULT '',
  `newsid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wordid`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_optimizer_config`
--

CREATE TABLE IF NOT EXISTS `isc_optimizer_config` (
  `optimizer_id` int(11) NOT NULL AUTO_INCREMENT,
  `optimizer_type` varchar(255) NOT NULL,
  `optimizer_item_id` int(11) NOT NULL,
  `optimizer_config_date` int(11) NOT NULL,
  `optimizer_conversion_page` varchar(255) NOT NULL,
  `optimizer_conversion_url` varchar(255) NOT NULL,
  `optimizer_control_script` text NOT NULL,
  `optimizer_tracking_script` text NOT NULL,
  `optimizer_conversion_script` text NOT NULL,
  PRIMARY KEY (`optimizer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_orders`
--

CREATE TABLE IF NOT EXISTS `isc_orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `ordtoken` varchar(32) NOT NULL DEFAULT '0',
  `ordcustid` int(11) NOT NULL DEFAULT '0',
  `orddate` int(11) NOT NULL DEFAULT '0',
  `ordlastmodified` int(11) NOT NULL DEFAULT '0',
  `ebay_order_id` varchar(19) NOT NULL DEFAULT '0',
  `subtotal_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `subtotal_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `subtotal_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `base_shipping_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_cost_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_cost_tax_class_id` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `base_handling_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_tax_class_id` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `base_wrapping_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_tax_class_id` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordstatus` smallint(6) NOT NULL DEFAULT '0',
  `ordtotalqty` int(10) unsigned NOT NULL DEFAULT '0',
  `ordtotalshipped` int(10) unsigned NOT NULL DEFAULT '0',
  `orderpaymentmethod` varchar(100) NOT NULL DEFAULT '',
  `orderpaymentmodule` varchar(100) NOT NULL DEFAULT '',
  `ordpayproviderid` varchar(255) DEFAULT NULL,
  `ordpaymentstatus` varchar(100) NOT NULL DEFAULT '',
  `ordrefundedamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordbillfirstname` varchar(255) NOT NULL DEFAULT '',
  `ordbilllastname` varchar(255) NOT NULL DEFAULT '',
  `ordbillcompany` varchar(100) NOT NULL DEFAULT '',
  `ordbillstreet1` varchar(255) NOT NULL DEFAULT '',
  `ordbillstreet2` varchar(255) NOT NULL DEFAULT '',
  `ordbillsuburb` varchar(100) NOT NULL DEFAULT '',
  `ordbillstate` varchar(50) NOT NULL DEFAULT '',
  `ordbillzip` varchar(20) NOT NULL DEFAULT '',
  `ordbillcountry` varchar(50) NOT NULL DEFAULT '',
  `ordbillcountrycode` varchar(2) NOT NULL DEFAULT '',
  `ordbillcountryid` int(11) NOT NULL DEFAULT '0',
  `ordbillstateid` int(11) NOT NULL DEFAULT '0',
  `ordbillphone` varchar(50) NOT NULL DEFAULT '',
  `ordbillemail` varchar(250) NOT NULL DEFAULT '',
  `ordisdigital` tinyint(4) NOT NULL DEFAULT '0',
  `orddateshipped` int(11) NOT NULL DEFAULT '0',
  `ordstorecreditamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordgiftcertificateamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordinventoryupdated` int(1) NOT NULL DEFAULT '0',
  `ordonlygiftcerts` tinyint(4) NOT NULL DEFAULT '0',
  `extrainfo` text,
  `ordipaddress` varchar(30) NOT NULL DEFAULT '',
  `ordgeoipcountry` varchar(50) NOT NULL DEFAULT '',
  `ordgeoipcountrycode` varchar(2) NOT NULL DEFAULT '',
  `ordcurrencyid` int(11) unsigned NOT NULL DEFAULT '0',
  `orddefaultcurrencyid` int(11) unsigned NOT NULL DEFAULT '0',
  `ordcurrencyexchangerate` decimal(20,10) NOT NULL DEFAULT '0.0000000000',
  `ordnotes` text,
  `ordcustmessage` text,
  `ordvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `ordformsessionid` int(11) NOT NULL DEFAULT '0',
  `orddiscountamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_address_count` int(10) unsigned NOT NULL DEFAULT '1',
  `coupon_discount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`orderid`),
  KEY `i_orders_ordcustid` (`ordcustid`),
  KEY `ordstatus_deleted` (`ordstatus`,`deleted`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_addresses`
--

CREATE TABLE IF NOT EXISTS `isc_order_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `company` varchar(100) NOT NULL DEFAULT '',
  `address_1` varchar(255) NOT NULL DEFAULT '',
  `address_2` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `zip` varchar(20) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  `country_iso2` varchar(2) NOT NULL DEFAULT '',
  `country_id` int(10) unsigned NOT NULL DEFAULT '0',
  `state` varchar(100) NOT NULL DEFAULT '',
  `state_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(250) NOT NULL DEFAULT '',
  `form_session_id` int(10) unsigned NOT NULL DEFAULT '0',
  `total_items` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `form_session_id` (`form_session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_configurable_fields`
--

CREATE TABLE IF NOT EXISTS `isc_order_configurable_fields` (
  `orderfieldid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldid` int(11) NOT NULL DEFAULT '0',
  `orderid` int(11) NOT NULL DEFAULT '0',
  `ordprodid` int(11) NOT NULL DEFAULT '0',
  `productid` int(11) NOT NULL DEFAULT '0',
  `textcontents` text,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `filetype` varchar(255) NOT NULL DEFAULT '',
  `originalfilename` varchar(255) NOT NULL DEFAULT '',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fieldtype` varchar(255) NOT NULL DEFAULT '',
  `fieldselectoptions` text NOT NULL,
  PRIMARY KEY (`orderfieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_coupons`
--

CREATE TABLE IF NOT EXISTS `isc_order_coupons` (
  `ordcoupid` int(11) NOT NULL AUTO_INCREMENT,
  `ordcouporderid` int(11) NOT NULL DEFAULT '0',
  `ordcoupprodid` int(11) NOT NULL DEFAULT '0',
  `ordcouponid` int(11) NOT NULL DEFAULT '0',
  `ordcouponcode` varchar(50) NOT NULL DEFAULT '',
  `ordcouponamount` varchar(50) NOT NULL DEFAULT '',
  `ordcoupontype` tinyint(4) NOT NULL DEFAULT '0',
  `applied_discount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ordcoupid`),
  KEY `ordcouporderid` (`ordcouporderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_downloads`
--

CREATE TABLE IF NOT EXISTS `isc_order_downloads` (
  `orddownid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL DEFAULT '0',
  `downloadid` int(11) NOT NULL DEFAULT '0',
  `numdownloads` int(11) NOT NULL DEFAULT '0',
  `downloadexpires` int(10) unsigned NOT NULL DEFAULT '0',
  `maxdownloads` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`orddownid`),
  KEY `orderid` (`orderid`,`downloadid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_messages`
--

CREATE TABLE IF NOT EXISTS `isc_order_messages` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `messagefrom` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` longtext,
  `datestamp` int(11) NOT NULL DEFAULT '0',
  `messageorderid` int(11) NOT NULL DEFAULT '0',
  `messagestatus` enum('read','unread') NOT NULL DEFAULT 'read',
  `staffuserid` int(11) NOT NULL DEFAULT '0',
  `isflagged` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`messageid`),
  KEY `i_order_mesages_messageorderid` (`messageorderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_products`
--

CREATE TABLE IF NOT EXISTS `isc_order_products` (
  `orderprodid` int(11) NOT NULL AUTO_INCREMENT,
  `ordprodsku` varchar(250) NOT NULL DEFAULT '',
  `ordprodname` varchar(250) NOT NULL DEFAULT '',
  `ordprodtype` enum('physical','digital','giftcertificate') NOT NULL DEFAULT 'physical',
  `base_price` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `price_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `price_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `price_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `base_total` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `total_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordprodweight` double NOT NULL DEFAULT '0',
  `ordprodqty` smallint(6) NOT NULL DEFAULT '0',
  `orderorderid` int(11) NOT NULL DEFAULT '0',
  `ordprodid` int(11) NOT NULL DEFAULT '0',
  `base_cost_price` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `cost_price_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `cost_price_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `cost_price_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordprodrefunded` int(10) NOT NULL DEFAULT '0',
  `ordprodrefundamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordprodreturnid` int(10) NOT NULL DEFAULT '0',
  `ordprodoptions` text,
  `ordprodvariationid` int(11) NOT NULL DEFAULT '0',
  `ordprodwrapid` int(10) unsigned NOT NULL DEFAULT '0',
  `ordprodwrapname` varchar(100) NOT NULL DEFAULT '',
  `base_wrapping_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `wrapping_cost_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `ordprodwrapmessage` text,
  `ordprodqtyshipped` int(10) unsigned NOT NULL DEFAULT '0',
  `ordprodeventname` varchar(255) DEFAULT NULL,
  `ordprodeventdate` int(9) DEFAULT NULL,
  `ordprodfixedshippingcost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `order_address_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ebay_item_id` varchar(19) NOT NULL DEFAULT '',
  `applied_discounts` text,
  `ebay_transaction_id` varchar(19) NOT NULL DEFAULT '',
  PRIMARY KEY (`orderprodid`),
  KEY `i_order_products_orderid_prodid` (`orderorderid`,`ordprodid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_shipping`
--

CREATE TABLE IF NOT EXISTS `isc_order_shipping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_address_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `base_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `method` varchar(250) NOT NULL DEFAULT '',
  `module` varchar(100) NOT NULL DEFAULT '',
  `tax_class_id` int(10) unsigned NOT NULL DEFAULT '0',
  `base_handling_cost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_ex_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_inc_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_tax` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `handling_cost_tax_class_id` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `shipping_zone_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_zone_name` varchar(250) NOT NULL DEFAULT '',
  `total_shipped` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order_address_id` (`order_address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_status`
--

CREATE TABLE IF NOT EXISTS `isc_order_status` (
  `statusid` int(11) NOT NULL AUTO_INCREMENT,
  `statusdesc` varchar(100) NOT NULL DEFAULT '',
  `statusorder` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`statusid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `isc_order_status`
--

INSERT INTO `isc_order_status` (`statusid`, `statusdesc`, `statusorder`) VALUES
(1, 'Pending', 1),
(2, 'Shipped', 8),
(3, 'Partially Shipped', 6),
(4, 'Refunded', 11),
(5, 'Cancelled', 9),
(6, 'Declined', 10),
(7, 'Awaiting Payment', 2),
(8, 'Awaiting Pickup', 5),
(9, 'Awaiting Shipment', 4),
(10, 'Completed', 7),
(11, 'Awaiting Fulfillment', 3);

-- --------------------------------------------------------

--
-- Table structure for table `isc_order_taxes`
--

CREATE TABLE IF NOT EXISTS `isc_order_taxes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `order_address_id` int(10) unsigned NOT NULL,
  `tax_rate_id` int(11) unsigned NOT NULL,
  `tax_class_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `rate` decimal(20,4) NOT NULL,
  `priority` int(11) unsigned NOT NULL DEFAULT '0',
  `priority_amount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `line_amount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `order_address_id` (`order_address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_pages`
--

CREATE TABLE IF NOT EXISTS `isc_pages` (
  `pageid` int(11) NOT NULL AUTO_INCREMENT,
  `pagetitle` varchar(250) NOT NULL DEFAULT '',
  `pagemetatitle` varchar(250) NOT NULL DEFAULT '',
  `pagelink` varchar(250) NOT NULL DEFAULT '',
  `pagefeed` varchar(250) NOT NULL DEFAULT '',
  `pageemail` varchar(250) NOT NULL DEFAULT '',
  `pagecontent` longtext,
  `pagestatus` tinyint(4) NOT NULL DEFAULT '0',
  `pageparentid` int(11) NOT NULL DEFAULT '0',
  `pagesort` int(11) NOT NULL DEFAULT '0',
  `pagekeywords` text,
  `pagedesc` text,
  `pagetype` tinyint(4) NOT NULL DEFAULT '0',
  `pagecontactfields` varchar(100) NOT NULL,
  `pagemetakeywords` varchar(250) NOT NULL DEFAULT '',
  `pagemetadesc` varchar(250) NOT NULL DEFAULT '',
  `pageishomepage` tinyint(4) NOT NULL DEFAULT '0',
  `pagelayoutfile` varchar(50) NOT NULL DEFAULT '',
  `pageparentlist` text,
  `pagecustomersonly` tinyint(1) NOT NULL DEFAULT '0',
  `pagevendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `page_enable_optimizer` tinyint(1) NOT NULL DEFAULT '0',
  `pagensetleft` int(11) unsigned NOT NULL DEFAULT '0',
  `pagensetright` int(11) unsigned NOT NULL DEFAULT '0',
  `pagesearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pageid`),
  KEY `i_pageid_pagensetleft_pagensetright` (`pageid`,`pagensetleft`,`pagensetright`),
  KEY `i_pagensetleft` (`pagensetleft`),
  KEY `i_pageparentid_pagesort_pagetitle` (`pageparentid`,`pagesort`,`pagetitle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_pages`
--

INSERT INTO `isc_pages` (`pageid`, `pagetitle`, `pagemetatitle`, `pagelink`, `pagefeed`, `pageemail`, `pagecontent`, `pagestatus`, `pageparentid`, `pagesort`, `pagekeywords`, `pagedesc`, `pagetype`, `pagecontactfields`, `pagemetakeywords`, `pagemetadesc`, `pageishomepage`, `pagelayoutfile`, `pageparentlist`, `pagecustomersonly`, `pagevendorid`, `page_enable_optimizer`, `pagensetleft`, `pagensetright`, `pagesearchkeywords`) VALUES
(1, 'RSS Syndication', '', '', '', '', '%%Syndicate%%', 1, 0, 3, '', '', 0, '', '', '', 0, '', '0', 0, 0, 0, 3, 4, ''),
(2, 'Shipping & Returns', '', 'http://', 'http://', '', '<em>To edit this page simply login to the control panel, click the <strong style="font-weight: 400">Website Content</strong> tab and choose the </em> <strong style="font-weight: 400"><em>View Web Pages option. Click Edit next to the Shipping & Returns page and you can change this text. A sample returns policy is shown below which you can edit as needed.</em><em style="font-style: normal"><br/><br/></em></strong><em style="font-style: normal"><strong>Returns Policy</strong></em><strong style="font-weight: 400"></em></em><em style="font-style: normal"><br/><br/></em>You may return most new, unopened items within 30 days of delivery for a full refund. We''ll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).<br/><br/>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).<br/><br/>If you need to return an item, simply login to your account, view the order using the "Complete Orders" link under the My Account menu and click the Return Item(s) button. We''ll notify you via e-mail of your refund once we''ve received and processed the returned item.<br/><br/></strong><strong>Shipping</em></em></em></strong><strong style="font-weight: 400"><em style="font-style: normal"><br/><br/></em>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.<br/><br/>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.<br/><br/>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.<br/>', 1, 0, 2, '', '', 0, '', '', '', 0, 'page.html', '0', 0, 0, 0, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_page_search`
--

CREATE TABLE IF NOT EXISTS `isc_page_search` (
  `pagesearchid` int(11) NOT NULL AUTO_INCREMENT,
  `pageid` int(11) NOT NULL DEFAULT '0',
  `pagetitle` varchar(255) NOT NULL DEFAULT '',
  `pagecontent` longtext NOT NULL,
  `pagedesc` text NOT NULL,
  `pagesearchkeywords` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pagesearchid`),
  KEY `i_page_search_pageid` (`pageid`),
  FULLTEXT KEY `pagetitle` (`pagetitle`,`pagecontent`,`pagedesc`,`pagesearchkeywords`),
  FULLTEXT KEY `pagetitle2` (`pagetitle`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_page_search`
--

INSERT INTO `isc_page_search` (`pagesearchid`, `pageid`, `pagetitle`, `pagecontent`, `pagedesc`, `pagesearchkeywords`) VALUES
(1, 1, 'RSS Syndication', '%%Syndicate%%', '', ''),
(2, 2, 'Shipping & Returns', '<em>To edit this page simply login to the control panel, click the <strong style="font-weight: 400">Website Content</strong> tab and choose the </em> <strong style="font-weight: 400"><em>View Web Pages option. Click Edit next to the Shipping & Returns page and you can change this text. A sample returns policy is shown below which you can edit as needed.</em><em style="font-style: normal"><br/><br/></em></strong><em style="font-style: normal"><strong>Returns Policy</strong></em><strong style="font-weight: 400"></em></em><em style="font-style: normal"><br/><br/></em>You may return most new, unopened items within 30 days of delivery for a full refund. We''ll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).<br/><br/>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).<br/><br/>If you need to return an item, simply login to your account, view the order using the "Complete Orders" link under the My Account menu and click the Return Item(s) button. We''ll notify you via e-mail of your refund once we''ve received and processed the returned item.<br/><br/></strong><strong>Shipping</em></em></em></strong><strong style="font-weight: 400"><em style="font-style: normal"><br/><br/></em>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.<br/><br/>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.<br/><br/>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.<br/>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_page_words`
--

CREATE TABLE IF NOT EXISTS `isc_page_words` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL DEFAULT '',
  `pageid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wordid`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_permissions`
--

CREATE TABLE IF NOT EXISTS `isc_permissions` (
  `pk_permid` int(11) NOT NULL AUTO_INCREMENT,
  `permuserid` int(11) NOT NULL DEFAULT '0',
  `permpermissionid` mediumint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_permid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `isc_permissions`
--

INSERT INTO `isc_permissions` (`pk_permid`, `permuserid`, `permpermissionid`) VALUES
(1, 1, 101),
(2, 1, 103),
(3, 1, 104),
(4, 1, 105),
(5, 1, 106),
(6, 1, 155),
(7, 1, 102),
(8, 1, 133),
(9, 1, 134),
(10, 1, 135),
(11, 1, 107),
(12, 1, 108),
(13, 1, 109),
(14, 1, 110),
(15, 1, 111),
(16, 1, 112),
(17, 1, 113),
(18, 1, 114),
(19, 1, 136),
(20, 1, 166),
(21, 1, 189),
(22, 1, 190),
(23, 1, 115),
(24, 1, 116),
(25, 1, 117),
(26, 1, 118),
(27, 1, 119),
(28, 1, 156),
(29, 1, 120),
(30, 1, 137),
(31, 1, 138),
(32, 1, 139),
(33, 1, 140),
(34, 1, 123),
(35, 1, 141),
(36, 1, 142),
(37, 1, 143),
(38, 1, 123),
(39, 1, 141),
(40, 1, 142),
(41, 1, 143),
(42, 1, 124),
(43, 1, 125),
(44, 1, 126),
(45, 1, 127),
(46, 1, 128),
(47, 1, 129),
(48, 1, 130),
(49, 1, 131),
(50, 1, 132),
(51, 1, 144),
(52, 1, 145),
(53, 1, 146),
(54, 1, 147),
(55, 1, 148),
(56, 1, 149),
(57, 1, 150),
(58, 1, 151),
(59, 1, 152),
(60, 1, 153),
(61, 1, 154),
(62, 1, 157),
(63, 1, 160),
(64, 1, 161),
(65, 1, 162),
(66, 1, 163),
(67, 1, 164),
(68, 1, 165),
(69, 1, 175),
(70, 1, 167),
(71, 1, 168),
(72, 1, 169),
(73, 1, 170),
(74, 1, 171),
(75, 1, 172),
(76, 1, 173),
(77, 1, 174),
(78, 1, 176),
(79, 1, 177),
(80, 1, 178),
(81, 1, 179),
(82, 1, 180),
(83, 1, 181),
(84, 1, 182),
(85, 1, 183),
(86, 1, 184),
(87, 1, 185),
(88, 1, 186),
(89, 1, 187),
(90, 1, 188);

-- --------------------------------------------------------

--
-- Table structure for table `isc_picniktokens`
--

CREATE TABLE IF NOT EXISTS `isc_picniktokens` (
  `picniktokenid` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) NOT NULL,
  `imagetype` tinyint(3) unsigned NOT NULL,
  `imageid` varchar(255) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `sessionid` char(26) NOT NULL,
  PRIMARY KEY (`picniktokenid`),
  KEY `i_sessionid_imagetype_imageid` (`sessionid`,`imagetype`,`imageid`),
  KEY `i_picniktokenid_hash` (`picniktokenid`,`hash`),
  KEY `i_created` (`created`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_products`
--

CREATE TABLE IF NOT EXISTS `isc_products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `prodname` varchar(250) NOT NULL DEFAULT '',
  `prodtype` smallint(6) NOT NULL DEFAULT '0',
  `prodcode` varchar(250) NOT NULL DEFAULT '',
  `prodfile` varchar(250) NOT NULL DEFAULT '',
  `proddesc` longtext,
  `prodsearchkeywords` text,
  `prodavailability` varchar(250) NOT NULL DEFAULT '',
  `prodprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodcostprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodretailprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodsaleprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodcalculatedprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodsortorder` int(11) NOT NULL DEFAULT '0',
  `prodvisible` tinyint(4) NOT NULL DEFAULT '0',
  `prodfeatured` tinyint(4) NOT NULL DEFAULT '0',
  `prodvendorfeatured` tinyint(1) NOT NULL DEFAULT '0',
  `prodrelatedproducts` varchar(250) NOT NULL DEFAULT '',
  `prodcurrentinv` int(11) NOT NULL DEFAULT '0',
  `prodlowinv` int(11) NOT NULL DEFAULT '0',
  `prodoptionsrequired` tinyint(4) NOT NULL DEFAULT '0',
  `prodwarranty` text,
  `prodweight` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodwidth` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodheight` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `proddepth` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodfixedshippingcost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `prodfreeshipping` tinyint(4) NOT NULL DEFAULT '0',
  `prodinvtrack` tinyint(4) NOT NULL DEFAULT '0',
  `prodratingtotal` int(11) NOT NULL DEFAULT '0',
  `prodnumratings` int(11) NOT NULL DEFAULT '0',
  `prodnumsold` int(11) NOT NULL DEFAULT '0',
  `proddateadded` int(11) NOT NULL DEFAULT '0',
  `prodbrandid` int(11) NOT NULL DEFAULT '0',
  `prodnumviews` int(11) NOT NULL DEFAULT '0',
  `prodpagetitle` varchar(250) NOT NULL DEFAULT '',
  `prodmetakeywords` text,
  `prodmetadesc` text,
  `prodlayoutfile` varchar(50) NOT NULL DEFAULT '',
  `prodvariationid` int(11) NOT NULL DEFAULT '0',
  `prodallowpurchases` int(1) NOT NULL DEFAULT '1',
  `prodhideprice` int(1) NOT NULL DEFAULT '0',
  `prodcallforpricinglabel` varchar(200) NOT NULL DEFAULT '',
  `prodcatids` text NOT NULL,
  `prodlastmodified` int(10) unsigned NOT NULL DEFAULT '0',
  `prodvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `prodhastags` int(1) NOT NULL DEFAULT '0',
  `prodwrapoptions` text,
  `prodconfigfields` varchar(255) NOT NULL DEFAULT '',
  `prodeventdaterequired` tinyint(4) DEFAULT NULL,
  `prodeventdatefieldname` varchar(255) DEFAULT NULL,
  `prodeventdatelimited` tinyint(4) DEFAULT NULL,
  `prodeventdatelimitedtype` tinyint(4) DEFAULT NULL,
  `prodeventdatelimitedstartdate` int(9) DEFAULT NULL,
  `prodeventdatelimitedenddate` int(9) DEFAULT NULL,
  `prodmyobasset` varchar(20) NOT NULL DEFAULT '',
  `prodmyobincome` varchar(20) NOT NULL DEFAULT '',
  `prodmyobexpense` varchar(20) NOT NULL DEFAULT '',
  `prodpeachtreegl` varchar(20) NOT NULL DEFAULT '',
  `prodcondition` enum('New','Used','Refurbished') NOT NULL DEFAULT 'New',
  `prodshowcondition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `product_enable_optimizer` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prodpreorder` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prodreleasedate` int(11) NOT NULL DEFAULT '0',
  `prodreleasedateremove` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prodpreordermessage` varchar(250) NOT NULL DEFAULT '',
  `prodminqty` int(10) unsigned NOT NULL DEFAULT '0',
  `prodmaxqty` int(10) unsigned NOT NULL DEFAULT '0',
  `tax_class_id` int(10) unsigned NOT NULL DEFAULT '0',
  `opengraph_type` varchar(15) NOT NULL DEFAULT 'product',
  `opengraph_title` varchar(250) NOT NULL DEFAULT '',
  `opengraph_use_product_name` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `opengraph_description` text,
  `opengraph_use_meta_description` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `opengraph_use_image` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upc` varchar(32) DEFAULT '',
  `disable_google_checkout` int(1) NOT NULL DEFAULT '0',
  `last_import` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`productid`),
  UNIQUE KEY `u_products_prodname` (`prodname`),
  KEY `i_products_brand_vis` (`prodbrandid`,`prodvisible`),
  KEY `i_products_prodnumsold` (`prodnumsold`),
  KEY `i_products_feature_vis` (`prodfeatured`,`prodvisible`),
  KEY `i_products_rating_vis` (`prodvisible`,`prodratingtotal`),
  KEY `i_products_added_vis` (`prodvisible`,`proddateadded`),
  KEY `i_products_hideprice_vis` (`prodhideprice`,`prodvisible`),
  KEY `i_products_sortorder_vis` (`prodvisible`,`prodsortorder`,`prodname`),
  KEY `i_products_last_import` (`last_import`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `isc_products`
--

INSERT INTO `isc_products` (`productid`, `prodname`, `prodtype`, `prodcode`, `prodfile`, `proddesc`, `prodsearchkeywords`, `prodavailability`, `prodprice`, `prodcostprice`, `prodretailprice`, `prodsaleprice`, `prodcalculatedprice`, `prodsortorder`, `prodvisible`, `prodfeatured`, `prodvendorfeatured`, `prodrelatedproducts`, `prodcurrentinv`, `prodlowinv`, `prodoptionsrequired`, `prodwarranty`, `prodweight`, `prodwidth`, `prodheight`, `proddepth`, `prodfixedshippingcost`, `prodfreeshipping`, `prodinvtrack`, `prodratingtotal`, `prodnumratings`, `prodnumsold`, `proddateadded`, `prodbrandid`, `prodnumviews`, `prodpagetitle`, `prodmetakeywords`, `prodmetadesc`, `prodlayoutfile`, `prodvariationid`, `prodallowpurchases`, `prodhideprice`, `prodcallforpricinglabel`, `prodcatids`, `prodlastmodified`, `prodvendorid`, `prodhastags`, `prodwrapoptions`, `prodconfigfields`, `prodeventdaterequired`, `prodeventdatefieldname`, `prodeventdatelimited`, `prodeventdatelimitedtype`, `prodeventdatelimitedstartdate`, `prodeventdatelimitedenddate`, `prodmyobasset`, `prodmyobincome`, `prodmyobexpense`, `prodpeachtreegl`, `prodcondition`, `prodshowcondition`, `product_enable_optimizer`, `prodpreorder`, `prodreleasedate`, `prodreleasedateremove`, `prodpreordermessage`, `prodminqty`, `prodmaxqty`, `tax_class_id`, `opengraph_type`, `opengraph_title`, `opengraph_use_product_name`, `opengraph_description`, `opengraph_use_meta_description`, `opengraph_use_image`, `upc`, `disable_google_checkout`, `last_import`) VALUES
(1, 'iPod Shuffle', 1, '', '', '<div class="txt">The world&#8217;s smallest digital music player, the 1GB iPod shuffle lets you wear up to 500 songs on your sleeve. Or your lapel. Or your belt. Clip on iPod shuffle and wear it as a badge of musical devotion.<br/><span style="font-weight: bold;"><br/>Instant attachment.</span><br/>Clip on the world&#8217;s most wearable music player and take up to 500 songs with you anywhere. Choose from two capacities and five colors &#8212; including four new hues &#8212; to make your musical fashion statement.<br/><br/><span style="font-weight: bold;">Random meets rhythm.</span><br/>Mix up your music with a flip of the shuffle switch. Flip it again to play your handpicked playlists and albums in the order you synced them with iTunes.<br/><br/><span style="font-weight: bold;">Everything is easy.</span><br/>Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Store up to 500 songs</li><li>Stores data via USB flash drive</li><li>Skip-free audio playback</li><li>Up to 12 hours playtime when fully charged</li><li>Charging via included USB dock</li><li>Autofill from your entire music library for a fresh mix via iTunes software (via download)</li><li>Autofill from specific playlists via iTunes software</li><li>Play MP3, AAC and audiobooks</li><li>Thumb-friendly, circular control pad</li><li>Click the center button to play and pause. Click the outer buttons to move back, skip forward, and adjust volume</li><li>Built-in clip for your sleeve, your lapel, your coin pocket, your backpack</li><li>Flip the shuffle switch to mix up iPod shuffle''s contents</li></ul></div>', '', '', 49.0000, 0.0000, 0.0000, 0.0000, 49.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 2.0000, 1.6200, 1.0700, 0.4100, 0.0000, 0, 0, 0, 0, 1, 1231755759, 1, 7, '', '', '', 'product.html', 1, 1, 0, '', '3', 0, 1, 0, '0', '1', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(2, 'iPod Nano', 1, '', '', 'Colour isn''t the only brilliant new iPod Nano feature. For those about to rock, we give you nine amazing colours. But that&#8217;s only part of the story. Feel the curved, all-aluminum and glass design and you won&#8217;t want to put iPod nano down. The accelerometer comes to iPod nano. Give it a shake to shuffle your music. Turn it sideways to view Cover Flow. And play games designed with your moves in mind.<br/><br/><span style="font-weight: bold;">Meet a musical Genius.</span><br/>With just a few clicks, the new Genius feature finds the songs on your iPod nano that go great together and makes a Genius Playlist for you.<br/><br/><span style="font-weight: bold;">Rock and roll over.</span><br/>Thanks to the built-in accelerometer, you can rotate iPod nano to flip through album art with Cover Flow. Watch movies and TV shows in widescreen. And view photos in either portrait or landscape.<br/><br/><span style="font-weight: bold;">Shake to shuffle.</span><br/>Just give iPod nano a shake and it shuffles to a different song in your music library.<br/><br/><span style="font-weight: bold;">Curved ahead of the curve.</span><br/>iPod nano now comes in nine vibrant colors and a new curved aluminum and glass design. The crisp, bright picture makes watching movies and TV shows amazing.', '', '', 149.0000, 0.0000, 0.0000, 0.0000, 149.0000, 0, 1, 1, 0, '-1', 0, 0, 1, '', 3.0000, 1.5000, 3.6000, 0.2400, 0.0000, 0, 0, 0, 0, 2, 1231756138, 1, 9, '', '', '', 'product.html', 2, 1, 0, '', '3', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(3, 'iPod Classic', 1, '', '', 'With 120GB of storage, iPod classic can hold up to 30,000 songs, 150 hours of video, or 25,000 photos. That&#8217;s more than enough room for a day&#8217;s &#8212; or a lifetime&#8217;s &#8212; worth of entertainment. Available in quintessential silver or striking new black, iPod classic catches your eye with its sleek, all-metal enclosure composed of anodised aluminium and polished stainless steel.<br/><br/><span style="font-weight: bold;">Classic beauty.</span><br/>Beautiful, durable, and sleek, iPod classic features an anodized aluminum and polished stainless steel enclosure with rounded edges. Choose quintessential silver or striking new black.<br/><br/><span style="font-weight: bold;">A Genius in the house.</span><br/>With just a few clicks, the new Genius feature creates a playlist of tracks in your library that go great together.<br/><br/><span style="font-weight: bold;">Enjoy the view.</span><br/>With Cover Flow, you can browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.<br/><br/>', '', '', 249.0000, 0.0000, 0.0000, 0.0000, 249.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 2.0000, 2.4000, 4.1000, 0.4100, 0.0000, 0, 0, 0, 0, 3, 1231756862, 1, 2, '', '', '', 'product.html', 3, 1, 0, '', '3', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(4, 'iPod Touch', 1, '', '', 'With a stunningly thin, contoured stainless steel design, iPod touch feels even better in your hand. And the new volume buttons and built-in speaker give you more to love. Groundbreaking technologies built into iPod touch &#8212; such as the Multi-Touch display, accelerometer, and 3D graphics &#8212; immerse you in the action. The new Genius feature turns iPod touch into a highly intelligent, personal DJ. With a few taps, it creates a playlist by finding songs in your library that go great together.<br/><br/><span style="font-weight: bold;">Get your mobile game on.</span><br/>With a built-in speaker and groundbreaking technologies such as the Multi-Touch display, accelerometer, and 3D graphics, iPod touch puts an amazing gaming experience in the palm of your hand.<br/><br/><span style="font-weight: bold;">Rock ''n'' run with Nike+.</span><br/>iPod touch now includes built-in Nike + iPod support. Just slip the Nike + iPod Sensor (available separately) into your Nike+ shoe and start your run. The sensor communicates wirelessly with your iPod touch, tracking your time, distance, and calories burned. It even gives you voice feedback on your progress.<br/><br/><span style="font-weight: bold;">Meet a musical Genius.</span><br/>With just a few taps, the new Genius feature creates a playlist of tracks in your library that go great together.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>8GB, 16GB or 32GB flash drive with Nike + iPod support built in</li><li>Built in speaker</li><li>3.5-inch (diagonal) widescreen multi-touch display</li><li>Built-in 802.11b/g wireless networking</li><li>Up to 36 hours of audio playback or 6 hours of video playback</li></ul>', '', '', 229.0000, 0.0000, 0.0000, 0.0000, 229.0000, 0, 1, 0, 0, '6,22,23,24', 0, 0, 1, '', 2.0000, 2.4000, 4.1000, 0.3000, 0.0000, 0, 0, 0, 0, 4, 1231757201, 1, 2, '', '', '', 'product.html', 4, 1, 0, '', '3', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(5, 'MacBook', 1, '', '', 'Redesigned with a precision unibody enclosure crafted from a single block of aluminum, the MacBook is thinner and lighter than its predecessor as well as stronger and more durable. But Apple didn''t stop innovating with the body''s design. The MacBook also includes a new 13.3-inch, LED-backlit glass display (instead of an LCD panel) and a glass trackpad that doesn''t include a button (for larger tracking area) and features includes Apple''s Multi-Touch technology.<br/><br/><span style="font-weight: bold;">LED-backlit display.</span><br/>The ultrathin 1280-by-800-pixel LED-backlit display shows off your digital media perfectly. And it''s as easy on the environment as it is on the eyes: The gorgeous glass and aluminum enclosure is arsenic- and mercury-free, and LED technology makes it more power efficient.<br/><br/><span style="font-weight: bold;">Advanced NVIDIA integrated graphics.</span><br/>Experience the most powerful MacBook graphics ever. With a new NVIDIA GeForce 9400M processor, the new MacBook delivers up to 5x more graphics performance, so you can immerse yourself in lifelike 3D games.<br/><br/><span style="font-weight: bold;">Multi-Touch trackpad.</span><br/>Multi-Touch comes to MacBook. The smooth, spacious glass trackpad is designed to give you more room for your fingers &#8212; and more functionality with Multi-Touch gestures. And since the entire trackpad doubles as the button, you can comfortably click anywhere.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Strong aluminum unibody frame and 13.3-inch LED-backlit glass display</li><li>New glass trackpad with 40 percent more tracking area and supports more Multi-Touch gestures</li><li>2 GB RAM (4 GB max), DVD/CD SuperDrive</li><li>Integraed NVIDIA graphics (with 256 MB shared memory); Draft-N Wi-Fi; Bluetooth 2.1; Gigabit Ethernet; Mini DisplayPort video output</li><li>Preloaded with Mac OS X 10.5 Leopard operating system and iLife ''08 suite of applications</li></ul>', '', '', 1299.0000, 0.0000, 0.0000, 0.0000, 1299.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 4.5000, 12.7800, 0.9000, 8.9400, 0.0000, 0, 0, 0, 0, 5, 1231757800, 1, 5, '', '', '', 'product.html', 5, 1, 0, '', '1', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(6, 'MacBook Pro', 1, '', '', 'Redesigned with a precision unibody enclosure crafted from a single block of aluminum, the MacBook Pro is thinner and lighter than its predecessor as well as stronger and more durable. But Apple didn''t stop innovating with the body''s design. The MacBook Pro also includes a new 15-inch, LED-backlit glass display (instead of an LCD panel) and a glass trackpad that doesn''t include a button (for larger tracking area) and features includes Apple''s Multi-Touch technology.<br/><br/><span style="font-weight: bold;">LED-backlit widescreen display.</span><br/>Seamless glass and instant full screen brightness make your brilliant ideas flat-out spectacular. The 17-inch model goes further, offering a high-resolution display with a 60 percent greater color gamut.<br/><br/><span style="font-weight: bold;">Smooth glass Multi-Touch trackpad.</span><br/>Now the entire trackpad is also the button, so it''s clickable everywhere. And it offers even more Multi-Touch gestures and functionality.<br/><br/><span style="font-weight: bold;">High-performance NVIDIA graphics.</span><br/>MacBook Pro features two NVIDIA graphics processors &#8212; one discrete and one integrated &#8212; to help you get the most out of your applications.<br/><br/><span style="font-weight: bold;">Breakthrough battery performance.</span><br/>Get up to 8 hours of wireless productivity on a single charge with the revolutionary built-in battery on the new 17-inch MacBook Pro. Or stay productive for up to 5 hours with the 15-inch model.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Thin, strong aluminum unibody frame and 15-inch LED-backlit glass display</li><li>New glass trackpad with 40 percent more tracking area and supports more Multi-Touch gestures</li><li>2 GB DDR3 RAM (4 GB max), DVD/CD SuperDrive</li><li>Dual NVIDIA graphics (integrated and discrete); Draft-N Wi-Fi; Bluetooth 2.1; Gigabit Ethernet; Mini DisplayPort video output</li><li>Preloaded with Mac OS X 10.5 Leopard operating system and iLife ''08 suite of applications</li></ul>', '', '', 1999.0000, 0.0000, 0.0000, 0.0000, 1999.0000, 0, 1, 1, 0, '-1', 0, 0, 1, '', 1.0000, 14.3500, 0.9500, 9.8200, 0.0000, 0, 0, 0, 0, 6, 1231758196, 1, 5, '', '', '', 'product.html', 6, 1, 0, '', '1', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(7, 'MacBook Air', 1, '', '', 'With the MacBook Air, Apple has created the world''s thinnest laptop--measuring an unprecedented 0.16-inches at its thinnest point (and 0.76 inches thick overall). Apple brings its vaunted multi-touch technology, found on the iPhone, to its laptops with the MacBook Air, enabling you to pinch, swipe, or rotate to zoom in on text, advance through a photo album, or adjust an image via the oversized trackpad. And the MacBook Air embodies Apple''s continuing environmental progress with its aluminum enclosure, a material highly desired by recyclers; Apple''s first mercury-free LCD display with arsenic-free glass; and brominated flame retardant-free material for the majority of circuit boards as well as PVC-free internal cables.<br/><br/><span style="font-weight: bold;">Flat-out stunning</span><br/>From 0.16 to 0.76 inch thin and weighing only 3.0 pounds, MacBook Air sets new standards for ultraportable computing &#8212; without the usual ultraportable compromises.<br/><br/><span style="font-weight: bold;">Faster Intel mobile architecture</span><br/>With speeds up to 1.86GHz, the Intel Core 2 Duo processor in the new MacBook Air offers 50 percent more L2 cache, faster DDR3 memory, and a faster frontside bus than the previous model.<br/><br/><span style="font-weight: bold;">The genius of Multi-Touch</span><br/>The MacBook Air trackpad adopts many of the innovative Multi-Touch gestures of the Apple iPhone, so you can pinch, swipe, or rotate by simply moving your fingers.<br/><br/><span style="font-weight: bold;">Up to 4x more graphics performance</span><br/>With the NVIDIA GeForce 9400M integrated graphics, the new MacBook Air offers smooth video playback, a great ultraportable gaming experience, and support for the new 24-inch Apple LED Cinema Display as well as the 30-inch Apple Cinema HD Display.', '', '', 1799.0000, 0.0000, 0.0000, 0.0000, 1799.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 12.8000, 0.7600, 8.9400, 0.0000, 0, 0, 0, 0, 7, 1231758729, 1, 3, '', '', '', 'product.html', 7, 1, 0, '', '1', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(8, 'Elgato EyeTV DTT Deluxe', 1, '', '', 'EyeTV DTT Deluxe is an extraordinarily powerful miniature TV tuner that delivers digital terrestrial television (DVB-T, also known as DTT or Freeview) to your Mac. Exceptionally small and beautifully designed, EyeTV DTT Deluxe slips easily into the USB port of any Mac without blocking other devices. EyeTV DTT Deluxe comes with an EyeTV Remote and offers a variety of options for aerial reception. These options vary from a miniature telescopic aerial, a portable rod aerial with a tilt/swivel magnetic base and detachable suction cup, and an adapter to connect EyeTV DTT Deluxe to a rooftop aerial if necessary.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Receives digital TV (DVB-T, or Freeview)</li><li>Miniature USB stick; does not cover any other ports, even on a MacBook Air</li><li>Two types of aerial included plus unique IEC-MCX adapter cable</li><li>Comes with an EyeTV Remote</li></ul><br/><span style="font-weight: bold;">Superb Television Reception</span><br/>Despite its extraordinary size, EyeTV DTT Deluxe is a powerful TV tuner that delivers full-size, crystal-clear reception and uncompromising quality. In areas in which HDTV is broadcast, enjoy watching stunning 720p or 1080i HDTV (MPEG-2 as well as H.264/AVC) on your Mac.', '', '', 199.9500, 0.0000, 0.0000, 0.0000, 199.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 8, 1231759543, 3, 0, '', '', '', 'product.html', 0, 1, 0, '', '6', 0, 2, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(9, 'Elgato EyeTV 250 Plus Digital TV Recorder', 1, '', '', 'EyeTV 250 Plus is a hybrid TV tuner for the Mac with a powerful hardware encoder for higher-quality recordings and smaller- sized video files. EyeTV 250 Plus receives both free over-the-air HDTV as well as analog TV, and offers a complete solution for moving your video collection from VHS tape to DVD-Video. <br/><br/><span style="font-weight: bold;">Watch live TV on your Mac</span><br/>Pause the TV show while you get a snack, rewind and watch that great play again, or fast forward past the advertisements. Scale the TV window down so you can watch TV while you surf the web, or go "Full Screen" and channel surf from the couch using an EyeTV or Apple Remote. <br/><br/><span style="font-weight: bold;">Organize channels</span><br/>EyeTV provides detailed information about each television channel. Drag and drop the ones you watch most frequently into a "favorites" list, or go a step further and organize your sports, news, or movie channels into their own lists. <br/><br/><span style="font-weight: bold;">Record your favorite shows</span><br/>Hit the record button now or cruise through the Program Guide and pick the shows you want to record up to two weeks in advance. You can even set up recordings over the Internet while you''re away from home (tvtv/TitanTV/IceTV account required). Fans of radio programming, take note: EyeTV also enables you to record and edit DVB radio.<br/><br/><span style="font-weight: bold;">Features </span><br/>Watch TV on your Mac<br/>Rewind, fast forward, and pause live HDTV<br/>Browse EyeTV menus in Full Screen mode with an Apple Remote<br/>Record hours of your favorite TV shows directly on your hard drive and edit out unwanted content<br/>Find TV shows and schedule recordings using the built-in Program Guide from TitanTV (in the U.S.)<br/>Export clips and entire episodes to your video-capable iPod, Apple TV, and iPhone<br/>Store your collection on an external drive, or burn it to disc using Roxio Toast 8 Basic (included)<br/>Convert old videotapes to digital files using the VHS Assistant<br/>Enjoy progressive scan for excellent picture quality and Dolby Digital', '', '', 429.9500, 0.0000, 0.0000, 0.0000, 429.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 9, 1231759622, 3, 1, '', '', '', 'product.html', 0, 1, 0, '', '6', 0, 2, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(10, 'Office for Mac 2008 - Home and Student', 1, 'OFFICE08-H&S', '', 'Your presentation will make an impact. Your documents will be professional. Your analysis will be insightful. And Office 2008 will be there.<br/><br/>The latest version of the industry standard for productivity software on the Macintosh platform. Microsoft&reg; Office 2008 for Mac is more powerful and easier to use. Office 2008 combines Microsoft Word for Mac, Microsoft Power-Point&reg; for Mac, Microsoft Excel&reg; for Mac, Microsoft Entourage&reg; for Mac, and Microsoft Messenger for Mac and lets you easily create high-impact documents and seamlessly share your ideas with others, whether they are on the Mac or Windows&reg; platform.<br/><br/><span style="font-weight: bold;">Word 2008</span><br/>Powerful new tools, more than 100 designer templates, rich themes, and an intuitive user interface will help you make your ideas look as good as they are.<br/><br/><span style="font-weight: bold;">Excel 2008</span><br/>It''s a numbers game. With Excel 2008, analyze, share, and manage your data, and easily create persuasive charts and thought-provoking graphs for powerful results.<br/><br/><span style="font-weight: bold;">PowerPoint 2008</span><br/>Your presentation is a story that PowerPoint will illustrate exquisitely. Its compelling visuals and engaging layouts will inspire your audience''s imagination.<br/><br/><span style="font-weight: bold;">Entourage 2008</span><br/>Your emails will spark ideas, you''ll schedule meetings where creativity abounds. Entourage 2008, the hub of Office 2008, helps it to happen, one task at a time.', '', '', 229.0000, 0.0000, 0.0000, 0.0000, 229.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 10, 1231760319, 2, 0, '', '', '', 'product.html', 0, 1, 0, '', '9', 0, 4, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(11, 'Office 2008 for Mac - Special Media Edition', 1, '', '', 'Your presentation will make an impact. Your documents will be professional. Your analysis will be insightful. And Office 2008 will be there.<br/><br/>The latest version of the industry standard for productivity software on the Macintosh platform. Microsoft&reg; Office 2008 for Mac is more powerful and easier to use. Office 2008 combines Microsoft Word for Mac, Microsoft Power-Point&reg; for Mac, Microsoft Excel&reg; for Mac, Microsoft Entourage&reg; for Mac, and Microsoft Messenger for Mac and lets you easily create high-impact documents and seamlessly share your ideas with others, whether they are on the Mac or Windows&reg; platform.<br/><br/><span style="font-weight: bold;">Microsoft Expression Media</span><br/>Drag-and-drop digital asset management, batch conversion and tagging, even built-in archiving and backup capabilities help you manage more than 100,000 files and hundreds of format types across multiple storage devices.<br/><br/><span style="font-weight: bold;">Word 2008</span><br/>Powerful new tools, more than 100 designer templates, rich themes, and an intuitive user interface will help you make your ideas look as good as they are.<br/><br/><span style="font-weight: bold;">Excel 2008</span><br/>It''s a numbers game. With Excel 2008, analyze, share, and manage your data, and easily create persuasive charts and thought-provoking graphs for powerful results.<br/><br/><span style="font-weight: bold;">PowerPoint 2008</span><br/>Your presentation is a story that PowerPoint will illustrate exquisitely. Its compelling visuals and engaging layouts will inspire your audience''s imagination.<br/><br/><span style="font-weight: bold;">Entourage 2008</span><br/>Your emails will spark ideas, you''ll schedule meetings where creativity abounds. Entourage 2008, the hub of Office 2008, helps it to happen, one task at a time.', '', '', 499.9500, 0.0000, 0.0000, 0.0000, 499.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 4.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 11, 1231760577, 2, 1, '', '', '', 'product.html', 0, 1, 0, '', '9', 0, 4, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(12, 'iWork 09', 1, 'IWORK09', '', 'iWork, Apple''s productivity suite, is the easiest way to create great-looking documents, spreadsheets, and presentations. Writing and page layout are easy using Pages. Numbers gives you simple ways to make sense of your data. New cinematic animations, transitions, and effects in Keynote will keep your audience captivated. And iWork is compatible with Microsoft Office, so sharing your work is even easier.<br/><br/><span style="font-weight: bold;">Compatibility and Sharing</span><br/><ul><li>iWork ''09 makes it easy to exchange documents with anyone.</li><li>Open Microsoft Word, Excel, and PowerPoint files in iWork.</li><li>Save your iWork document as a Word, Excel, or PowerPoint file.</li><li>Email your document as an iWork, Office, or PDF file from within iWork.</li><li>Share your work on iWork.com, Apple''s new document-sharing service, now available as a Public Beta. (Apple ID and email account required to publish documents and use the publisher link.)</li></ul>', '', '', 79.0000, 0.0000, 0.0000, 0.0000, 79.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 12, 1231760717, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '9', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(13, 'iLife 09', 1, 'ILIFE09', '', 'Upgrade to iLife &#8217;09 and get the most out of the photos, movies, and music on your Mac with the latest versions of iPhoto, iMovie, GarageBand, iWeb, and iDVD. Organize and search your photos by faces and places. Make a movie in minutes or edit with precision. Learn to play piano and guitar or record your own music. Create a stunning website and publish it anywhere.', '', '', 79.0000, 0.0000, 0.0000, 0.0000, 79.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 4.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 13, 1231760828, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '9', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(14, 'Apple Mighty Mouse', 1, 'MIGHTYMOUSE', '', 'It''s the wired mouse that reinvents the wheel &mdash; the scroll wheel. Mighty Mouse features the amazing Scroll Ball that lets you move anywhere inside a document, literally without lifting a finger. And with touch-sensitive technology concealed under the seamless top shell, you can choose either the versatility of a four-button mouse or the simplicity of a single-button beauty.<br/><br/><span style="font-weight: bold;">Innovative Scroll Ball and button</span><br/>Perfectly positioned to roll smoothly under just one finger, Mighty Mouse''s Scroll Ball offers full 360-degree scrolling capability &#8212; up/down, left/right and diagonally. You can scroll long web pages, pan full-size images, maneuver around large spreadsheets, control a video timeline and more. And you can even click the Scroll Ball to access your favorite Tiger features such as Dashboard, Spotlight or Expos&eacute;.<br/><br/><span style="font-weight: bold;">Touch-sensitive top shell</span><br/>It looks and feels like a sleek one-button mouse, but Mighty Mouse''s smooth top shell hides a powerful secret: touch-sensitive technology under the shell detects which part of the mouse you''re clicking, so you can both left-click and right-click. And if you prefer the simplicity of a classic one-button mouse, Mighty Mouse is up to the task. Just use the Mac OS X system preference pane to configure it how you want.<br/><br style="font-weight: bold;"><span style="font-weight: bold;">Force-sensing side buttons</span><br/>When you give Mighty Mouse a squeeze, force-sensing side buttons can be configured to activate Mac OS X features such as Dashboard, Expos&eacute; or a whole host of other customizable features.', '', '', 69.0000, 0.0000, 0.0000, 0.0000, 69.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 14, 1231761029, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '4', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(15, 'Apple Wireless Mighty Mouse', 1, 'WIRELESS-MIGHTY', '', 'Now you can get the world-famous Mighty Mouse without the tail. With its Bluetooth technology, the wireless Mighty Mouse gives you complete freedom of movement with no cable clutter. It features the popular Scroll Ball that lets you move anywhere inside a document, without lifting a finger. And its laser tracking technology allows it to work on more surfaces with greater precision.<br/><br/><span style="font-weight: bold;">Bluetooth technology, ultimate portability</span><br/>With its secure, reliable Bluetooth technology, wireless Mighty Mouse goes wherever you do. Pair it with any Bluetooth-enabled Mac to work untethered and uncluttered at your desk or on the go, and it operates with either one or two AA batteries &#8212; no bulky dock required.<br/><br/><span style="font-weight: bold;">Laser tracking engine</span><br/>The wireless Mighty Mouse features a laser tracking engine that''s up to 20 times more sensitive to surface details than traditional optical technology. That means it can track with precision on more surfaces than ever &#8212; even smooth or polished surfaces &#8212; with no mouse pad required.<br/><br/><span style="font-weight: bold;">Innovative Scroll Ball and button</span><br/>Perfectly positioned to roll smoothly under just one finger, Mighty Mouse''s Scroll Ball offers full 360-degree scrolling capability &#8212; up/down, left/right and diagonally. You can scroll long web pages, pan full-size images, maneuver around large spreadsheets, control a video timeline and more. And you can even click the Scroll Ball to access your favorite Mac OS X features such as Dashboard, Spotlight or Expos&eacute;.<br/><br/><span style="font-weight: bold;">Touch-sensitive top shell</span><br/>It looks and feels like a sleek one-button mouse, but Mighty Mouse''s smooth top shell hides a powerful secret: touch-sensitive technology under the shell detects which part of the mouse you''re clicking, so you can both left-click and right-click. And if you prefer the simplicity of a classic one-button mouse, Mighty Mouse is up to the task. Just use the Mac OS X system preference pane to configure it how you want.<br/><br/><span style="font-weight: bold;">Force-sensing side buttons</span><br/>When you give Mighty Mouse a squeeze, force-sensing side buttons can be configured to activate Mac OS X features such as Dashboard, Expos&eacute; or a whole host of other customizable features.', '', '', 99.0000, 0.0000, 0.0000, 0.0000, 99.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 15, 1231761152, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '4', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(16, 'Logitech VX Nano Cordless Laser Mouse', 1, 'LOGITECH-NANO', '', 'Simplify life on the road with the Logitech VX Nano Cordless Laser Mouse. It''s always ready for use, thanks to one of the world''s smallest USB receivers. Plug it into your notebook''s USB port just once, then forget about it. No more broken or lost receivers and no more hassles.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Plug-and-forget nano-receiver that''s barely larger than a coin</li><li>Robust wireless connection with advanced 2.4 GHz cordless technology</li><li>Always ready, since you can leave the nano-receiver plugged into your notebook all the time</li><li>Stylish pouch to protect your mouse when it''s not in use</li><li>Longer battery life--up to 6 months of use (or longer with the convenient on/off switch)</li><li>Slim, ultra-portable mouse design that slips easily into your notebook bag</li><li>Storable receiver fits inside the mouse when you need to free up a USB port; shuts down when stored to save battery life</li><li>Hyper-fast scrolling with the nearly frictionless scroll wheel</li><li>Forward/backward buttons for effortless Internet navigation</li><li>Five programmable buttons for customized mouse controls</li><li>Smoother cursor control on virtually any surface</li></ul>', '', '', 69.9600, 0.0000, 0.0000, 0.0000, 69.9600, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 16, 1231761332, 4, 0, '', '', '', 'product.html', 0, 1, 0, '', '4', 0, 3, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(17, 'Apple Wireless Keyboard', 1, 'WIRELESS-KEYBOARD', '', 'The Apple Wireless Keyboard has been completely redesigned, inside and out. It features an elegant, ultra-thin anodized aluminum enclosure with low-profile keys that provide crisp, responsive feel. It also has function keys for one-touch access to a variety of Mac features such as screen brightness, volume, eject, play/pause, fast-forward and rewind, Expose, and Dashboard. Its compact design fits on your lap or on even the most crowded desk. And its Bluetooth wireless technology lets you use it just about anywhere within 30 feet of your Mac.<br/><br/>The keyboard automatically powers down when you''re not using it and turns on instantly as soon as you start typing. This intelligent power management means you''ll get up to nine months of battery life based on average usage patterns. It also has an on/off switch for when you''re away from your computer for a long time.', '', '', 79.0000, 0.0000, 0.0000, 0.0000, 79.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 4.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 17, 1231761543, 1, 1, '', '', '', 'product.html', 0, 1, 0, '', '4', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(18, 'Crumpler Considerable Embarrassment Bag', 1, 'CRUMPLER-EMB', '', 'With a roomy unpadded cargo compartment and a padded sleeve that accommodates MacBook or 15-inch MacBook Pro notebooks, the Crumpler Considerable Embarrassment gives you the best of both worlds.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Padded notebook compartment with six-pocket organizer</li><li>External zip pocket</li><li>Three internal front pockets</li><li>Adjustable shoulder strap with pad</li><li>Clip and velcro release flap</li><li>Fits 15-in. MacBook Pro and 13-in. MacBook models</li></ul>', '', '', 89.9500, 0.0000, 0.0000, 0.0000, 89.9500, 0, 1, 1, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 18, 1231761944, 5, 0, '', '', '', 'product.html', 0, 1, 0, '', '5', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(19, 'Higher Ground Shuttle for 13-inch Notebooks', 1, '', '', 'Small in size and big on protection, the Higher Ground Shuttle lets you use your notebook while it''s still in the case--for the ultimate in convenience. For the most in comfort, the Shuttle''s cooldeck provides non-slip riser pads that facilitate airflow so your lap and your computer stay cooler. <br/><br/>And if you''d like the freedom of carrying the Shuttle on your back, you can get the optional lightweight mesh backpack strap attachment--in addition to the single shoulder strap that''s included. <br/><br/><span style="font-weight: bold;">Features </span><br/><ul><li>Full-time protection since your notebook never has to leave its case</li><li>Cooldeck for computer heat dissipation</li><li>Single shoulder strap (backpack option available)</li><li>Convenient for use on your lap or desktop surface</li><li>Rigid frame and shock-absorbing foam padding throughout</li><li>Reinforcement at all stress points</li><li>Constructed of the finest expedition grade fabrics</li><li>Heavy waterproof coating on all fabrics</li><li>Shields your lap from excessive heat buildup</li></ul>', '', '', 39.9500, 0.0000, 0.0000, 0.0000, 39.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 19, 1231762065, 6, 0, '', '', '', 'product.html', 0, 1, 0, '', '5', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(20, 'Speck 13-inch SeeThru Satin Case', 1, 'SPEC-13-B', '', 'Give your aluminum MacBook a smooth yet easily gripped semi-translucent frosted finish that effortlessly slips in and out of your bag. The SeeThru Satin case also ensures access to all your important plugs and drives while protecting your precious investment.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Silky-smooth soft-touch hard shell protection</li><li>Protection from scrapes and scratches</li><li>Smooth yet grippy rubberized exterior texture</li><li>Ensures full range of motion for MacBook display</li><li>Full venting for safe heat disbursement</li><li>Access to all ports, battery check button, and CD/DVD drive</li><li>Easy installation and removal</li><li>Built-in rubberized feet for stability on flat surfaces</li><li>Soft cleaning cloth</li><li>Fits the aluminum 13-inch MacBook</li></ul>', '', '', 49.9500, 0.0000, 0.0000, 0.0000, 49.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 20, 1231762165, 7, 0, '', '', '', 'product.html', 0, 1, 0, '', '5', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(21, 'booq Mamba Saddle', 1, 'BOOQ-MAMBO', '', 'With its boldly-colored interior and elegant exterior, its zippered accessory pouch for small items, and its impeccable finish and convenient pocket layout, the Mamba Saddle is the ideal bag for your life and your life at work.<br/><br/>The Mamba Saddle also includes booq''s Terralinq service, which may help reunite you with your bag if it''s ever lost. To make this possible, each booq bag carries a unique item number on a metal label. When you register that number it creates a link with your identity. Then if your bag is reported as lost and found, Terralinq will attempt to contact you with its location and the finder''s contact information.', '', '', 124.9500, 0.0000, 0.0000, 0.0000, 124.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 21, 1231762274, 8, 1, '', '', '', 'product.html', 0, 1, 0, '', '5', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(22, 'Logitech Pure-Fi Anywhere Speakers', 1, 'PUREFI', '', 'The Pure-Fi Anywhere speaker system uses a unique combination of speaker drivers to deliver clear sound with maximum bass and minimal distortion. Its compact size and long battery life make it the ideal companion to your iPod or iPhone.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Advanced acoustics for exceptionally clear sound</li><li>Three-inch pressure drivers to maximize bass response</li><li>StereXL technology widens the stereo image dramatically</li><li>Ten-hour rechargeable battery for longer listening</li><li>Battery-level indicator eliminates surprises</li><li>Travel case to protect and store speakers.</li><li>iPhone or iPod charged whenever it''s docked</li><li>Wireless remote to control your iPod or iPhone and browse content</li></ul>', '', '', 129.9500, 0.0000, 0.0000, 0.0000, 129.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.6000, 13.2000, 3.6000, 1.5000, 0.0000, 0, 0, 0, 0, 22, 1231762483, 4, 0, '', '', '', 'product.html', 0, 1, 0, '', '7,8', 0, 3, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(23, 'Apple In-Ear Headphones with Remote and Mic', 1, 'APPLE-INEAR', '', 'Hear every detail of your music every time you tune in with the Apple In-Ear Headphones with Remote and Mic. They offer pro audio performance and impressive sound isolation, and convenient buttons let you adjust the volume and control music and video playback.<br/><br/><span style="font-weight: bold;">Rediscover your music.</span><br/>Put on the Apple In-Ear Headphones, select your favorite track, and hear musical details you never knew existed. It''s almost like you''re experiencing your music for the first time.<br/><br/><span style="font-weight: bold;">Technical Specifications</span><br/><ul><li>Frequency response: 5Hz to 21kHz</li><li>Impedance (at 100Hz): 23 ohms</li><li>Sensitivity (at 100Hz): 109 dB SPL/mW</li><li>Drivers: Custom two-way balanced armature (woofer and tweeter in each earpiece)</li></ul>', '', '', 79.0000, 0.0000, 0.0000, 0.0000, 79.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 2.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 23, 1231762609, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '7,8', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(24, 'Apple iPod Socks', 1, 'IPOD-SOCKS', '', 'So add a dash of color to your iPod with iPod Socks, the year''s coziest and most vibrant iPod accessory.<br/>It doesn''t matter which iPod model you have because iPod Socks fit all of them. And it doesn''t matter what your mood is because each iPod Socks package includes six bright colors so you can pick the one that feels best.<br/><br/>Forgive us if we''re stating the obvious, but here''s how it works: Just slide your iPod into the sock to keep it safe and warm. Slide it out to dock or change playlists. It''s as easy as... putting on a pair of socks.', '', '', 29.0000, 0.0000, 0.0000, 0.0000, 29.0000, 0, 1, 1, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 24, 1231762724, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '8', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(25, 'Incase Sports Armband for iPod Nano', 1, 'INCASE-NANO', '', 'Constructed out of lightweight, washable neoprene and reflective materials, the adjustable Incase Sports Armband is the functional and secure way to carry your iPod nano during your run or workout. The heavy-duty velcro adjustment provides for a universal fit while the clear cover allows convenient access to widescreen and touch controls.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Complete protection for iPod nano Form-fitting, washable neoprene construction Reflective material for enhanced visibility</li><li>Velcro adjustment for universal fit</li><li>Easy access to headphone jack, hold switch, and dock connector</li><li>Custom fit for iPod nano (4th. Gen.)</li></ul>', '', '', 29.9500, 0.0000, 0.0000, 0.0000, 29.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 25, 1231762873, 9, 0, '', '', '', 'product.html', 0, 1, 0, '', '8', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(26, 'Speck PixelSkin Case for iPhone 3G', 1, 'SPECK-IPHONE', '', 'Fun color and soft, tiled textures make the Speck PixelSkin case the ideal way to protect your iPhone 3G. This durable, rubberized case helps you keep your grip on your iPhone and fully protects against bumps and scrapes without adding bulk. Plus, PixelSkin layers on style and not frustration with complete access to all ports and controls while cased.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Soft matte-finish provides comfort and extra grip</li><li>Tiled textured surfaces enhance contrast and add character</li><li>Lightweight, durable design protects without adding bulk</li><li>Front raised ridges recess your screen to protect it when placed face down</li><li>Complete access to all ports, controls, and sensors while cased</li></ul>', '', '', 24.9500, 0.0000, 0.0000, 0.0000, 24.9500, 0, 1, 0, 0, '-1', 0, 0, 1, '', 2.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 26, 1231763092, 7, 1, '', '', '', 'product.html', 0, 1, 0, '', '7', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(27, 'Apple iPhone Bluetooth Headset', 1, 'APPLE-BLUE', '', 'Enjoy wireless convenience and crystal-clear audio when talking on your iPhone. The iPhone Bluetooth Headset features a single button that lets you make and receive phone calls simply and intuitively. And the innovative design is sure to turn a few heads.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Up to 5.5 hours of talk time; up to 72 hours of standby time*</li><li>Lightweight earpiece for a secure, comfortable fit in left or right ear</li><li>Convenient autopairing with iPhone</li><li>Stylish anodized aluminum casing</li></ul>', '', '', 99.0000, 0.0000, 0.0000, 0.0000, 99.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 1.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 27, 1231763168, 1, 1, '', '', '', 'product.html', 0, 1, 0, '', '7', 0, 0, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0),
(28, 'Mac Pro', 1, 'MAC-PRO', '', 'Boost your productivity with the Apple Mac Pro desktop PC - the fastest Mac Apple has ever made. Combining two of Intel''s new 64-bit, 45-nanometer Quad-Core Xeon 5400 processors running at 2.8 GHz, the Mac Pro is an unbelievably powerful workstation that can handle even the most intensive graphics rendering.<br/><br/><span style="font-weight: bold;">8 cores, standard.</span><br/>8-core processing was once reserved as a high-end option. Now it''s at the heart of the Mac Pro line. This incredible power stems from all-new Quad-Core Intel Xeon &#8220;Harpertown&#8221; processors, featuring speeds up to 3.2GHz and 12MB of L2 cache per processor.<br/><br/><span style="font-weight: bold;">Blazing fast, up to 2x performance.</span><br/>With its 8-core processing, advanced Xeon architecture, 1600MHz dual independent front-side buses, and 800MHz memory, the new Mac Pro delivers up to 2x greater application performance.2<br/><br/><span style="font-weight: bold;">Up to 4TB storage, RAID, and SAS.</span><br/>The cable-free, direct-attach hard drive bays make it easy to install up to 4TB of storage with Serial ATA 3Gb/s drives. For enhanced data protection, the optional Mac Pro RAID card delivers hardware RAID levels 0, 1, 5, and 0+1. Used with this card, 15,000-rpm SAS drives bring added performance to RAID configurations.<br/><br/><span style="font-weight: bold;">The new generation of graphics.</span><br/>All new, high-performance graphics cards from ATI and NVIDIA offer even greater performance for 3D and graphics- intensive applications. For more power, upgrade to a workstation-class card with up to 1.5GB of memory. All cards now support up to two 30-inch Apple Cinema HD displays.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Two 2.8 GHz quad-core Intel Xeon processors with dual-independent 1600 MHz front side buses</li><li>2 GB RAM expandable up to 32 GB, 320 GB hard drive, 16x Double-Layer SuperDrive</li><li>ATI Radeon HD 2600 XT 256MB (Two dual-link DVI)</li><li>Two FireWire 800 ports, two FireWire 400 ports, five USB 2.0 ports, and two USB 2.0 ports on keyboard</li><li>Mac OS X v10.5 Leopard (includes Time Machine, Quick Look, Spaces, Spotlight, Dashboard, Mail, iChat, Safari, Address Book, QuickTime, iCal, DVD Player, Photo Booth, Front Row, Xcode Developer Tools), iLife ''08 (includes iTunes, iPhoto, iMovie, iDVD, iWeb, and GarageBand)</li></ul>', '', '', 2799.0000, 0.0000, 0.0000, 0.0000, 2799.0000, 0, 1, 0, 0, '-1', 0, 0, 1, '', 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0, 0, 0, 0, 28, 1231812464, 1, 0, '', '', '', 'product.html', 0, 1, 0, '', '1', 0, 1, 0, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 'New', 0, 0, 0, 0, 0, '', 0, 0, 0, 'product', '', 1, NULL, 1, 1, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_comparisons`
--

CREATE TABLE IF NOT EXISTS `isc_product_comparisons` (
  `product_id` int(11) NOT NULL,
  `comparison_id` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`,`comparison_id`),
  KEY `i_product_comparisons_comparison_id` (`comparison_id`),
  KEY `i_product_comparisons_product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_configurable_fields`
--

CREATE TABLE IF NOT EXISTS `isc_product_configurable_fields` (
  `productfieldid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldprodid` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(255) NOT NULL DEFAULT '',
  `fieldtype` varchar(255) NOT NULL DEFAULT '',
  `fieldfiletype` varchar(255) NOT NULL DEFAULT '',
  `fieldfilesize` int(11) NOT NULL DEFAULT '0',
  `fieldselectoptions` text NOT NULL,
  `fieldrequired` tinyint(4) NOT NULL DEFAULT '0',
  `fieldsortorder` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`productfieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_product_configurable_fields`
--

INSERT INTO `isc_product_configurable_fields` (`productfieldid`, `fieldprodid`, `fieldname`, `fieldtype`, `fieldfiletype`, `fieldfilesize`, `fieldselectoptions`, `fieldrequired`, `fieldsortorder`) VALUES
(1, 1, 'Engraved Text', 'text', '', 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_customfields`
--

CREATE TABLE IF NOT EXISTS `isc_product_customfields` (
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldprodid` int(11) NOT NULL DEFAULT '0',
  `fieldname` varchar(250) NOT NULL DEFAULT '',
  `fieldvalue` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`fieldid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_discounts`
--

CREATE TABLE IF NOT EXISTS `isc_product_discounts` (
  `discountid` int(11) NOT NULL AUTO_INCREMENT,
  `discountprodid` int(11) NOT NULL DEFAULT '0',
  `discountquantitymin` int(11) NOT NULL DEFAULT '0',
  `discountquantitymax` int(11) NOT NULL DEFAULT '0',
  `discounttype` enum('price','percent','fixed') NOT NULL DEFAULT 'price',
  `discountamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`discountid`),
  KEY `i_product_discounts_discountprodid` (`discountprodid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_downloads`
--

CREATE TABLE IF NOT EXISTS `isc_product_downloads` (
  `downloadid` int(11) NOT NULL AUTO_INCREMENT,
  `prodhash` varchar(32) NOT NULL DEFAULT '',
  `productid` int(11) NOT NULL DEFAULT '0',
  `downfile` varchar(200) NOT NULL DEFAULT '',
  `downdateadded` int(11) NOT NULL DEFAULT '0',
  `downmaxdownloads` int(11) NOT NULL DEFAULT '0',
  `downexpiresafter` int(11) NOT NULL DEFAULT '0',
  `downfilesize` int(11) NOT NULL DEFAULT '0',
  `downname` varchar(200) NOT NULL DEFAULT '',
  `downdescription` text,
  PRIMARY KEY (`downloadid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_images`
--

CREATE TABLE IF NOT EXISTS `isc_product_images` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `imageprodid` int(11) NOT NULL DEFAULT '0',
  `imageprodhash` varchar(32) NOT NULL DEFAULT '',
  `imagefile` varchar(255) NOT NULL DEFAULT '',
  `imageisthumb` tinyint(4) NOT NULL DEFAULT '0',
  `imagesort` int(11) NOT NULL DEFAULT '0',
  `imagefiletiny` varchar(255) DEFAULT '',
  `imagefilethumb` varchar(255) DEFAULT '',
  `imagefilestd` varchar(255) DEFAULT '',
  `imagefilezoom` varchar(255) DEFAULT '',
  `imagedesc` longtext,
  `imagedateadded` int(11) DEFAULT '0',
  `imagefiletinysize` varchar(11) DEFAULT '',
  `imagefilethumbsize` varchar(11) DEFAULT '',
  `imagefilestdsize` varchar(11) DEFAULT '',
  `imagefilezoomsize` varchar(11) DEFAULT '',
  PRIMARY KEY (`imageid`),
  KEY `i_product_images_imageprodid` (`imageprodid`,`imageisthumb`),
  KEY `i_product_images_imageprodid_imagesort_imageprodhash` (`imageprodid`,`imagesort`,`imageprodhash`),
  KEY `i_product_images_imageid_imageprodid_imageprodhash` (`imageid`,`imageprodid`,`imageprodhash`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `isc_product_images`
--

INSERT INTO `isc_product_images` (`imageid`, `imageprodid`, `imageprodhash`, `imagefile`, `imageisthumb`, `imagesort`, `imagefiletiny`, `imagefilethumb`, `imagefilestd`, `imagefilezoom`, `imagedesc`, `imagedateadded`, `imagefiletinysize`, `imagefilethumbsize`, `imagefilestdsize`, `imagefilezoomsize`) VALUES
(5, 28, '', 'sample_images/picture_1__48492.png', 1, 0, 'i/045/picture_1__73994_tiny.png', 'i/022/picture_1__94539_thumb.png', 'j/395/picture_1__34605_std.png', 'z/088/picture_1__67070_zoom.png', '', 1256533712, '28x30', '112x120', '', '245x263'),
(6, 28, '', 'sample_images/overview_hero__21040.jpg', 0, 1, 'y/433/overview_hero__48265_tiny.jpg', 'l/888/overview_hero__24397_thumb.jpg', 'w/748/overview_hero__82107_std.jpg', 'q/188/overview_hero__55811_zoom.jpg', '', 1256533712, '', '61x120', '', '282x558'),
(7, 28, '', 'sample_images/overview_interior__26831.jpg', 0, 2, 'q/855/overview_interior__41901_tiny.jpg', 'g/697/overview_interior__29253_thumb.jpg', 'h/705/overview_interior__40381_std.jpg', 'x/346/overview_interior__80525_zoom.jpg', '', 1256533712, '', '120x119', '', '211x210'),
(10, 27, '', 'sample_images/bluetooth__14435.jpg', 1, 0, 'x/905/bluetooth__62033_tiny.jpg', 't/535/bluetooth__00175_thumb.jpg', 'm/126/bluetooth__97103_std.jpg', 'v/645/bluetooth__99580_zoom.jpg', '', 1256533712, '30x30', '120x120', '220x220', '326x326'),
(13, 26, '', 'sample_images/speckpi__55102.jpg', 1, 0, 'g/144/speckpi__94689_tiny.jpg', 'm/044/speckpi__20081_thumb.jpg', 'o/800/speckpi__30355_std.jpg', 'k/667/speckpi__95487_zoom.jpg', '', 1256533712, '30x30', '120x120', '220x220', '326x326'),
(16, 25, '', 'sample_images/incase__21230.jpg', 1, 0, 'l/011/incase__22134_tiny.jpg', 'v/609/incase__52543_thumb.jpg', 'c/336/incase__03210_std.jpg', 'b/522/incase__98324_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(19, 24, '', 'sample_images/ipodsocks__25675.jpg', 1, 0, 'q/261/ipodsocks__62424_tiny.jpg', 'i/288/ipodsocks__98774_thumb.jpg', 'c/905/ipodsocks__15411_std.jpg', 'v/311/ipodsocks__37400_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(22, 23, '', 'sample_images/earphones1__69201.jpg', 1, 0, 'e/095/earphones1__66657_tiny.jpg', 'r/942/earphones1__60911_thumb.jpg', 'c/360/earphones1__12093_std.jpg', 'k/523/earphones1__58290_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(23, 23, '', 'sample_images/earphones2__31595.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(29, 22, '', 'sample_images/logitechpure__15425.jpg', 1, 0, 'l/947/logitechpure__36218_tiny.jpg', 'j/174/logitechpure__88385_thumb.jpg', 'z/811/logitechpure__39764_std.jpg', 's/631/logitechpure__08640_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(32, 21, '', 'sample_images/booq__77711.jpg', 1, 0, 'w/304/booq__60781_tiny.jpg', 't/172/booq__85534_thumb.jpg', 't/632/booq__58486_std.jpg', 'r/235/booq__73754_zoom.jpg', '', 1256533712, '30x30', '120x120', '220x220', '326x326'),
(35, 20, '', 'sample_images/speck__64014.jpg', 1, 0, 'd/012/speck__78744_tiny.jpg', 'n/337/speck__17106_thumb.jpg', 'w/538/speck__56066_std.jpg', 'o/751/speck__25163_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(38, 19, '', 'sample_images/higher__70104.jpg', 1, 0, 'j/489/higher__23050_tiny.jpg', 'b/373/higher__93825_thumb.jpg', 'h/918/higher__66179_std.jpg', 'a/970/higher__27332_zoom.jpg', '', 1256533712, '30x30', '', '', ''),
(41, 18, '', 'sample_images/crumpler1__37065.jpg', 1, 0, 's/455/crumpler1__59160_tiny.jpg', 'n/017/crumpler1__56602_thumb.jpg', 'u/629/crumpler1__14641_std.jpg', 'j/126/crumpler1__31100_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(42, 18, '', 'sample_images/crumpler2__94136.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(45, 16, '', 'sample_images/loginano__12692.jpg', 1, 0, 'j/756/loginano__68944_tiny.jpg', 'o/800/loginano__55676_thumb.jpg', 'l/666/loginano__63229_std.jpg', 'd/426/loginano__94413_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(48, 15, '', 'sample_images/wirelessm__74223.jpg', 1, 0, 'h/675/wirelessm__84340_tiny.jpg', 'f/429/wirelessm__02801_thumb.jpg', 'q/332/wirelessm__27641_std.jpg', 't/539/wirelessm__35230_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(51, 14, '', 'sample_images/mighty__40520.jpg', 1, 0, 'k/046/mighty__06619_tiny.jpg', 'b/559/mighty__26304_thumb.jpg', 'z/901/mighty__48027_std.jpg', 'w/281/mighty__64444_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(54, 13, '', 'sample_images/ilife__42951.jpg', 1, 0, 'e/758/ilife__08697_tiny.jpg', 'g/523/ilife__63135_thumb.jpg', 'z/992/ilife__03378_std.jpg', 'q/070/ilife__75262_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(57, 12, '', 'sample_images/iwork__86080.jpg', 1, 0, 'i/196/iwork__22322_tiny.jpg', 'j/039/iwork__49951_thumb.jpg', 'p/111/iwork__27093_std.jpg', 'w/504/iwork__21019_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(60, 11, '', 'sample_images/office_media__14689.jpg', 1, 0, 'g/089/office_media__14375_tiny.jpg', 'm/249/office_media__86987_thumb.jpg', 'i/927/office_media__81904_std.jpg', 's/122/office_media__61441_zoom.jpg', '', 1256533712, '30x30', '120x120', '220x220', '326x326'),
(63, 10, '', 'sample_images/office_student__35938.jpg', 1, 0, 'u/355/office_student__66087_tiny.jpg', 'e/065/office_student__09971_thumb.jpg', 'c/617/office_student__86127_std.jpg', 'x/390/office_student__96016_zoom.jpg', '', 1256533712, '30x30', '120x120', '', ''),
(66, 9, '', 'sample_images/eye250__84327.jpg', 1, 0, 'i/076/eye250__18660_tiny.jpg', 'o/033/eye250__53085_thumb.jpg', 'k/531/eye250__15015_std.jpg', 'r/637/eye250__31290_zoom.jpg', '', 1256533712, '30x30', '120x120', '220x220', '326x326'),
(69, 8, '', 'sample_images/eyetvdtt__37033.jpg', 1, 0, 'l/952/eyetvdtt__00074_tiny.jpg', 'q/612/eyetvdtt__84545_thumb.jpg', 'u/946/eyetvdtt__26006_std.jpg', 'g/739/eyetvdtt__70195_zoom.jpg', '', 1256533712, '', '120x120', '', ''),
(72, 7, '', 'sample_images/mba1__75804.jpg', 1, 0, 'u/802/mba1__17371_tiny.jpg', 'x/603/mba1__71029_thumb.jpg', 'h/609/mba1__77479_std.jpg', 'u/581/mba1__35081_zoom.jpg', '', 1256533712, '', '120x65', '', ''),
(73, 7, '', 'sample_images/mba2__08931.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(74, 7, '', 'sample_images/mba3__58749.jpg', 0, 2, '', '', '', '', '', 1256533712, '', '', '', ''),
(77, 6, '', 'sample_images/mbp1__99760.jpg', 1, 0, 'z/018/mbp1__78639_tiny.jpg', 'j/992/mbp1__88791_thumb.jpg', 'i/963/mbp1__24178_std.jpg', 'g/321/mbp1__15639_zoom.jpg', '', 1256533712, '30x16', '120x65', '220x119', '299x162'),
(78, 6, '', 'sample_images/mbp2__50906.jpg', 0, 1, 'y/828/mbp2__40917_tiny.jpg', 'k/035/mbp2__47409_thumb.jpg', 'p/082/mbp2__40519_std.jpg', 'm/365/mbp2__63909_zoom.jpg', '', 1256533712, '30x23', '', '220x165', '720x540'),
(79, 6, '', 'sample_images/mbp3__81231.jpg', 0, 2, 'j/000/mbp3__74693_tiny.jpg', 'd/780/mbp3__59848_thumb.jpg', 'z/446/mbp3__86076_std.jpg', 'p/236/mbp3__79055_zoom.jpg', '', 1256533712, '30x23', '', '220x165', '720x540'),
(82, 5, '', 'sample_images/macbook__69047.jpg', 1, 0, 'w/920/macbook__64894_tiny.jpg', 't/407/macbook__43495_thumb.jpg', 'k/212/macbook__91352_std.jpg', 'g/377/macbook__94062_zoom.jpg', '', 1256533712, '', '120x74', '', ''),
(83, 5, '', 'sample_images/macbook2__34944.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(84, 5, '', 'sample_images/macbook3__62330.jpg', 0, 2, '', '', '', '', '', 1256533712, '', '', '', ''),
(87, 4, '', 'sample_images/touch1__19419.jpg', 1, 0, 'u/003/touch1__61273_tiny.jpg', 'j/204/touch1__01275_thumb.jpg', 'i/882/touch1__58240_std.jpg', 't/495/touch1__11121_zoom.jpg', '', 1256533712, '', '106x120', '', ''),
(88, 4, '', 'sample_images/touch2__02925.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(93, 3, '', 'sample_images/product_white_classic__81585.jpg', 1, 0, 'c/231/product_white_classic__68443_tiny.jpg', 'j/317/product_white_classic__08750_thumb.jpg', 'r/388/product_white_classic__85808_std.jpg', 'b/992/product_white_classic__01215_zoom.jpg', '', 1256533712, '', '66x120', '', ''),
(102, 1, '', 'sample_images/shuffle_silver__52909.jpg', 1, 0, 'e/508/shuffle_silver__62626_tiny.jpg', 'k/578/shuffle_silver__42932_thumb.jpg', 'e/796/shuffle_silver__75871_std.jpg', 'o/901/shuffle_silver__62488_zoom.jpg', '', 1256533712, '', '120x102', '', ''),
(103, 1, '', 'sample_images/shuffle2__44095.jpg', 0, 1, '', '', '', '', '', 1256533712, '', '', '', ''),
(104, 1, '', 'sample_images/shuffle3__06686.jpg', 0, 2, '', '', '', '', '', 1256533712, '', '', '', ''),
(107, 2, '', 'sample_images/nano_black__99806.jpg', 1, 0, 'y/841/nano_black__65790_tiny.jpg', 'z/310/nano_black__86258_thumb.jpg', 'x/826/nano_black__03490_std.jpg', 'q/019/nano_black__84199_zoom.jpg', '', 1256533712, '11x30', '42x120', '77x220', '93x265'),
(108, 2, '', 'sample_images/nano2__05699.jpg', 0, 1, 'g/222/nano2__71958_tiny.jpg', 'r/409/nano2__84996_thumb.jpg', 'r/773/nano2__35394_std.jpg', 'g/804/nano2__73421_zoom.jpg', '', 1256533712, '13x30', '', '95x220', '224x519'),
(109, 2, '', 'sample_images/nano3__36479.jpg', 0, 2, 'y/972/nano3__86819_tiny.jpg', 'd/816/nano3__44732_thumb.jpg', 'a/076/nano3__29245_std.jpg', 'g/454/nano3__52990_zoom.jpg', '', 1256533712, '30x23', '', '220x165', '298x224'),
(115, 17, '', 'sample_images/wireless_1_20070813new__42329.jpg', 1, 0, 'v/043/wireless_1_20070813new__87367_tiny.jpg', 'o/465/wireless_1_20070813new__94220_thumb.jpg', 'n/743/wireless_1_20070813new__03968_std.jpg', 'i/592/wireless_1_20070813new__83654_zoom.jpg', '', 1256533712, '30x19', '120x75', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_related_byviews`
--

CREATE TABLE IF NOT EXISTS `isc_product_related_byviews` (
  `prodida` int(10) unsigned NOT NULL,
  `prodidb` int(10) unsigned NOT NULL,
  `relevance` int(10) unsigned NOT NULL,
  `lastview` int(10) unsigned NOT NULL,
  PRIMARY KEY (`prodida`,`prodidb`),
  KEY `i_prodida_relevance` (`prodida`,`relevance`),
  KEY `i_prodidb` (`prodidb`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_search`
--

CREATE TABLE IF NOT EXISTS `isc_product_search` (
  `productsearchid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL DEFAULT '0',
  `prodname` varchar(250) NOT NULL DEFAULT '',
  `prodcode` varchar(250) NOT NULL DEFAULT '',
  `proddesc` longtext,
  `prodsearchkeywords` text,
  PRIMARY KEY (`productsearchid`),
  KEY `i_product_search_productid` (`productid`),
  KEY `i_product_search_prodcode` (`prodcode`),
  FULLTEXT KEY `prodname` (`prodname`,`prodcode`,`proddesc`,`prodsearchkeywords`),
  FULLTEXT KEY `prodname2` (`prodname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `isc_product_search`
--

INSERT INTO `isc_product_search` (`productsearchid`, `productid`, `prodname`, `prodcode`, `proddesc`, `prodsearchkeywords`) VALUES
(1, 1, 'iPod Shuffle', '', '<div class="txt">The world&#8217;s smallest digital music player, the 1GB iPod shuffle lets you wear up to 500 songs on your sleeve. Or your lapel. Or your belt. Clip on iPod shuffle and wear it as a badge of musical devotion.<br/><span style="font-weight: bold;"><br/>Instant attachment.</span><br/>Clip on the world&#8217;s most wearable music player and take up to 500 songs with you anywhere. Choose from two capacities and five colors &#8212; including four new hues &#8212; to make your musical fashion statement.<br/><br/><span style="font-weight: bold;">Random meets rhythm.</span><br/>Mix up your music with a flip of the shuffle switch. Flip it again to play your handpicked playlists and albums in the order you synced them with iTunes.<br/><br/><span style="font-weight: bold;">Everything is easy.</span><br/>Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Store up to 500 songs</li><li>Stores data via USB flash drive</li><li>Skip-free audio playback</li><li>Up to 12 hours playtime when fully charged</li><li>Charging via included USB dock</li><li>Autofill from your entire music library for a fresh mix via iTunes software (via download)</li><li>Autofill from specific playlists via iTunes software</li><li>Play MP3, AAC and audiobooks</li><li>Thumb-friendly, circular control pad</li><li>Click the center button to play and pause. Click the outer buttons to move back, skip forward, and adjust volume</li><li>Built-in clip for your sleeve, your lapel, your coin pocket, your backpack</li><li>Flip the shuffle switch to mix up iPod shuffle''s contents</li></ul></div>', ''),
(2, 2, 'iPod Nano', '', 'Colour isn''t the only brilliant new iPod Nano feature. For those about to rock, we give you nine amazing colours. But that&#8217;s only part of the story. Feel the curved, all-aluminum and glass design and you won&#8217;t want to put iPod nano down. The accelerometer comes to iPod nano. Give it a shake to shuffle your music. Turn it sideways to view Cover Flow. And play games designed with your moves in mind.<br/><br/><span style="font-weight: bold;">Meet a musical Genius.</span><br/>With just a few clicks, the new Genius feature finds the songs on your iPod nano that go great together and makes a Genius Playlist for you.<br/><br/><span style="font-weight: bold;">Rock and roll over.</span><br/>Thanks to the built-in accelerometer, you can rotate iPod nano to flip through album art with Cover Flow. Watch movies and TV shows in widescreen. And view photos in either portrait or landscape.<br/><br/><span style="font-weight: bold;">Shake to shuffle.</span><br/>Just give iPod nano a shake and it shuffles to a different song in your music library.<br/><br/><span style="font-weight: bold;">Curved ahead of the curve.</span><br/>iPod nano now comes in nine vibrant colors and a new curved aluminum and glass design. The crisp, bright picture makes watching movies and TV shows amazing.', ''),
(3, 3, 'iPod Classic', '', 'With 120GB of storage, iPod classic can hold up to 30,000 songs, 150 hours of video, or 25,000 photos. That&#8217;s more than enough room for a day&#8217;s &#8212; or a lifetime&#8217;s &#8212; worth of entertainment. Available in quintessential silver or striking new black, iPod classic catches your eye with its sleek, all-metal enclosure composed of anodised aluminium and polished stainless steel.<br/><br/><span style="font-weight: bold;">Classic beauty.</span><br/>Beautiful, durable, and sleek, iPod classic features an anodized aluminum and polished stainless steel enclosure with rounded edges. Choose quintessential silver or striking new black.<br/><br/><span style="font-weight: bold;">A Genius in the house.</span><br/>With just a few clicks, the new Genius feature creates a playlist of tracks in your library that go great together.<br/><br/><span style="font-weight: bold;">Enjoy the view.</span><br/>With Cover Flow, you can browse through your music collection by flipping through album art. Select an album to turn it over and see the track list.<br/><br/>', ''),
(4, 4, 'iPod Touch', '', 'With a stunningly thin, contoured stainless steel design, iPod touch feels even better in your hand. And the new volume buttons and built-in speaker give you more to love. Groundbreaking technologies built into iPod touch &#8212; such as the Multi-Touch display, accelerometer, and 3D graphics &#8212; immerse you in the action. The new Genius feature turns iPod touch into a highly intelligent, personal DJ. With a few taps, it creates a playlist by finding songs in your library that go great together.<br/><br/><span style="font-weight: bold;">Get your mobile game on.</span><br/>With a built-in speaker and groundbreaking technologies such as the Multi-Touch display, accelerometer, and 3D graphics, iPod touch puts an amazing gaming experience in the palm of your hand.<br/><br/><span style="font-weight: bold;">Rock ''n'' run with Nike+.</span><br/>iPod touch now includes built-in Nike + iPod support. Just slip the Nike + iPod Sensor (available separately) into your Nike+ shoe and start your run. The sensor communicates wirelessly with your iPod touch, tracking your time, distance, and calories burned. It even gives you voice feedback on your progress.<br/><br/><span style="font-weight: bold;">Meet a musical Genius.</span><br/>With just a few taps, the new Genius feature creates a playlist of tracks in your library that go great together.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>8GB, 16GB or 32GB flash drive with Nike + iPod support built in</li><li>Built in speaker</li><li>3.5-inch (diagonal) widescreen multi-touch display</li><li>Built-in 802.11b/g wireless networking</li><li>Up to 36 hours of audio playback or 6 hours of video playback</li></ul>', ''),
(5, 5, 'MacBook', '', 'Redesigned with a precision unibody enclosure crafted from a single block of aluminum, the MacBook is thinner and lighter than its predecessor as well as stronger and more durable. But Apple didn''t stop innovating with the body''s design. The MacBook also includes a new 13.3-inch, LED-backlit glass display (instead of an LCD panel) and a glass trackpad that doesn''t include a button (for larger tracking area) and features includes Apple''s Multi-Touch technology.<br/><br/><span style="font-weight: bold;">LED-backlit display.</span><br/>The ultrathin 1280-by-800-pixel LED-backlit display shows off your digital media perfectly. And it''s as easy on the environment as it is on the eyes: The gorgeous glass and aluminum enclosure is arsenic- and mercury-free, and LED technology makes it more power efficient.<br/><br/><span style="font-weight: bold;">Advanced NVIDIA integrated graphics.</span><br/>Experience the most powerful MacBook graphics ever. With a new NVIDIA GeForce 9400M processor, the new MacBook delivers up to 5x more graphics performance, so you can immerse yourself in lifelike 3D games.<br/><br/><span style="font-weight: bold;">Multi-Touch trackpad.</span><br/>Multi-Touch comes to MacBook. The smooth, spacious glass trackpad is designed to give you more room for your fingers &#8212; and more functionality with Multi-Touch gestures. And since the entire trackpad doubles as the button, you can comfortably click anywhere.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Strong aluminum unibody frame and 13.3-inch LED-backlit glass display</li><li>New glass trackpad with 40 percent more tracking area and supports more Multi-Touch gestures</li><li>2 GB RAM (4 GB max), DVD/CD SuperDrive</li><li>Integraed NVIDIA graphics (with 256 MB shared memory); Draft-N Wi-Fi; Bluetooth 2.1; Gigabit Ethernet; Mini DisplayPort video output</li><li>Preloaded with Mac OS X 10.5 Leopard operating system and iLife ''08 suite of applications</li></ul>', ''),
(6, 6, 'MacBook Pro', '', 'Redesigned with a precision unibody enclosure crafted from a single block of aluminum, the MacBook Pro is thinner and lighter than its predecessor as well as stronger and more durable. But Apple didn''t stop innovating with the body''s design. The MacBook Pro also includes a new 15-inch, LED-backlit glass display (instead of an LCD panel) and a glass trackpad that doesn''t include a button (for larger tracking area) and features includes Apple''s Multi-Touch technology.<br/><br/><span style="font-weight: bold;">LED-backlit widescreen display.</span><br/>Seamless glass and instant full screen brightness make your brilliant ideas flat-out spectacular. The 17-inch model goes further, offering a high-resolution display with a 60 percent greater color gamut.<br/><br/><span style="font-weight: bold;">Smooth glass Multi-Touch trackpad.</span><br/>Now the entire trackpad is also the button, so it''s clickable everywhere. And it offers even more Multi-Touch gestures and functionality.<br/><br/><span style="font-weight: bold;">High-performance NVIDIA graphics.</span><br/>MacBook Pro features two NVIDIA graphics processors &#8212; one discrete and one integrated &#8212; to help you get the most out of your applications.<br/><br/><span style="font-weight: bold;">Breakthrough battery performance.</span><br/>Get up to 8 hours of wireless productivity on a single charge with the revolutionary built-in battery on the new 17-inch MacBook Pro. Or stay productive for up to 5 hours with the 15-inch model.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Thin, strong aluminum unibody frame and 15-inch LED-backlit glass display</li><li>New glass trackpad with 40 percent more tracking area and supports more Multi-Touch gestures</li><li>2 GB DDR3 RAM (4 GB max), DVD/CD SuperDrive</li><li>Dual NVIDIA graphics (integrated and discrete); Draft-N Wi-Fi; Bluetooth 2.1; Gigabit Ethernet; Mini DisplayPort video output</li><li>Preloaded with Mac OS X 10.5 Leopard operating system and iLife ''08 suite of applications</li></ul>', ''),
(7, 7, 'MacBook Air', '', 'With the MacBook Air, Apple has created the world''s thinnest laptop--measuring an unprecedented 0.16-inches at its thinnest point (and 0.76 inches thick overall). Apple brings its vaunted multi-touch technology, found on the iPhone, to its laptops with the MacBook Air, enabling you to pinch, swipe, or rotate to zoom in on text, advance through a photo album, or adjust an image via the oversized trackpad. And the MacBook Air embodies Apple''s continuing environmental progress with its aluminum enclosure, a material highly desired by recyclers; Apple''s first mercury-free LCD display with arsenic-free glass; and brominated flame retardant-free material for the majority of circuit boards as well as PVC-free internal cables.<br/><br/><span style="font-weight: bold;">Flat-out stunning</span><br/>From 0.16 to 0.76 inch thin and weighing only 3.0 pounds, MacBook Air sets new standards for ultraportable computing &#8212; without the usual ultraportable compromises.<br/><br/><span style="font-weight: bold;">Faster Intel mobile architecture</span><br/>With speeds up to 1.86GHz, the Intel Core 2 Duo processor in the new MacBook Air offers 50 percent more L2 cache, faster DDR3 memory, and a faster frontside bus than the previous model.<br/><br/><span style="font-weight: bold;">The genius of Multi-Touch</span><br/>The MacBook Air trackpad adopts many of the innovative Multi-Touch gestures of the Apple iPhone, so you can pinch, swipe, or rotate by simply moving your fingers.<br/><br/><span style="font-weight: bold;">Up to 4x more graphics performance</span><br/>With the NVIDIA GeForce 9400M integrated graphics, the new MacBook Air offers smooth video playback, a great ultraportable gaming experience, and support for the new 24-inch Apple LED Cinema Display as well as the 30-inch Apple Cinema HD Display.', ''),
(8, 8, 'Elgato EyeTV DTT Deluxe', '', 'EyeTV DTT Deluxe is an extraordinarily powerful miniature TV tuner that delivers digital terrestrial television (DVB-T, also known as DTT or Freeview) to your Mac. Exceptionally small and beautifully designed, EyeTV DTT Deluxe slips easily into the USB port of any Mac without blocking other devices. EyeTV DTT Deluxe comes with an EyeTV Remote and offers a variety of options for aerial reception. These options vary from a miniature telescopic aerial, a portable rod aerial with a tilt/swivel magnetic base and detachable suction cup, and an adapter to connect EyeTV DTT Deluxe to a rooftop aerial if necessary.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Receives digital TV (DVB-T, or Freeview)</li><li>Miniature USB stick; does not cover any other ports, even on a MacBook Air</li><li>Two types of aerial included plus unique IEC-MCX adapter cable</li><li>Comes with an EyeTV Remote</li></ul><br/><span style="font-weight: bold;">Superb Television Reception</span><br/>Despite its extraordinary size, EyeTV DTT Deluxe is a powerful TV tuner that delivers full-size, crystal-clear reception and uncompromising quality. In areas in which HDTV is broadcast, enjoy watching stunning 720p or 1080i HDTV (MPEG-2 as well as H.264/AVC) on your Mac.', ''),
(9, 9, 'Elgato EyeTV 250 Plus Digital TV Recorder', '', 'EyeTV 250 Plus is a hybrid TV tuner for the Mac with a powerful hardware encoder for higher-quality recordings and smaller- sized video files. EyeTV 250 Plus receives both free over-the-air HDTV as well as analog TV, and offers a complete solution for moving your video collection from VHS tape to DVD-Video. <br/><br/><span style="font-weight: bold;">Watch live TV on your Mac</span><br/>Pause the TV show while you get a snack, rewind and watch that great play again, or fast forward past the advertisements. Scale the TV window down so you can watch TV while you surf the web, or go "Full Screen" and channel surf from the couch using an EyeTV or Apple Remote. <br/><br/><span style="font-weight: bold;">Organize channels</span><br/>EyeTV provides detailed information about each television channel. Drag and drop the ones you watch most frequently into a "favorites" list, or go a step further and organize your sports, news, or movie channels into their own lists. <br/><br/><span style="font-weight: bold;">Record your favorite shows</span><br/>Hit the record button now or cruise through the Program Guide and pick the shows you want to record up to two weeks in advance. You can even set up recordings over the Internet while you''re away from home (tvtv/TitanTV/IceTV account required). Fans of radio programming, take note: EyeTV also enables you to record and edit DVB radio.<br/><br/><span style="font-weight: bold;">Features </span><br/>Watch TV on your Mac<br/>Rewind, fast forward, and pause live HDTV<br/>Browse EyeTV menus in Full Screen mode with an Apple Remote<br/>Record hours of your favorite TV shows directly on your hard drive and edit out unwanted content<br/>Find TV shows and schedule recordings using the built-in Program Guide from TitanTV (in the U.S.)<br/>Export clips and entire episodes to your video-capable iPod, Apple TV, and iPhone<br/>Store your collection on an external drive, or burn it to disc using Roxio Toast 8 Basic (included)<br/>Convert old videotapes to digital files using the VHS Assistant<br/>Enjoy progressive scan for excellent picture quality and Dolby Digital', ''),
(10, 10, 'Office for Mac 2008 - Home and Student', 'OFFICE08-H&S', 'Your presentation will make an impact. Your documents will be professional. Your analysis will be insightful. And Office 2008 will be there.<br/><br/>The latest version of the industry standard for productivity software on the Macintosh platform. Microsoft&reg; Office 2008 for Mac is more powerful and easier to use. Office 2008 combines Microsoft Word for Mac, Microsoft Power-Point&reg; for Mac, Microsoft Excel&reg; for Mac, Microsoft Entourage&reg; for Mac, and Microsoft Messenger for Mac and lets you easily create high-impact documents and seamlessly share your ideas with others, whether they are on the Mac or Windows&reg; platform.<br/><br/><span style="font-weight: bold;">Word 2008</span><br/>Powerful new tools, more than 100 designer templates, rich themes, and an intuitive user interface will help you make your ideas look as good as they are.<br/><br/><span style="font-weight: bold;">Excel 2008</span><br/>It''s a numbers game. With Excel 2008, analyze, share, and manage your data, and easily create persuasive charts and thought-provoking graphs for powerful results.<br/><br/><span style="font-weight: bold;">PowerPoint 2008</span><br/>Your presentation is a story that PowerPoint will illustrate exquisitely. Its compelling visuals and engaging layouts will inspire your audience''s imagination.<br/><br/><span style="font-weight: bold;">Entourage 2008</span><br/>Your emails will spark ideas, you''ll schedule meetings where creativity abounds. Entourage 2008, the hub of Office 2008, helps it to happen, one task at a time.', ''),
(11, 11, 'Office 2008 for Mac - Special Media Edition', '', 'Your presentation will make an impact. Your documents will be professional. Your analysis will be insightful. And Office 2008 will be there.<br/><br/>The latest version of the industry standard for productivity software on the Macintosh platform. Microsoft&reg; Office 2008 for Mac is more powerful and easier to use. Office 2008 combines Microsoft Word for Mac, Microsoft Power-Point&reg; for Mac, Microsoft Excel&reg; for Mac, Microsoft Entourage&reg; for Mac, and Microsoft Messenger for Mac and lets you easily create high-impact documents and seamlessly share your ideas with others, whether they are on the Mac or Windows&reg; platform.<br/><br/><span style="font-weight: bold;">Microsoft Expression Media</span><br/>Drag-and-drop digital asset management, batch conversion and tagging, even built-in archiving and backup capabilities help you manage more than 100,000 files and hundreds of format types across multiple storage devices.<br/><br/><span style="font-weight: bold;">Word 2008</span><br/>Powerful new tools, more than 100 designer templates, rich themes, and an intuitive user interface will help you make your ideas look as good as they are.<br/><br/><span style="font-weight: bold;">Excel 2008</span><br/>It''s a numbers game. With Excel 2008, analyze, share, and manage your data, and easily create persuasive charts and thought-provoking graphs for powerful results.<br/><br/><span style="font-weight: bold;">PowerPoint 2008</span><br/>Your presentation is a story that PowerPoint will illustrate exquisitely. Its compelling visuals and engaging layouts will inspire your audience''s imagination.<br/><br/><span style="font-weight: bold;">Entourage 2008</span><br/>Your emails will spark ideas, you''ll schedule meetings where creativity abounds. Entourage 2008, the hub of Office 2008, helps it to happen, one task at a time.', ''),
(12, 12, 'iWork 09', 'IWORK09', 'iWork, Apple''s productivity suite, is the easiest way to create great-looking documents, spreadsheets, and presentations. Writing and page layout are easy using Pages. Numbers gives you simple ways to make sense of your data. New cinematic animations, transitions, and effects in Keynote will keep your audience captivated. And iWork is compatible with Microsoft Office, so sharing your work is even easier.<br/><br/><span style="font-weight: bold;">Compatibility and Sharing</span><br/><ul><li>iWork ''09 makes it easy to exchange documents with anyone.</li><li>Open Microsoft Word, Excel, and PowerPoint files in iWork.</li><li>Save your iWork document as a Word, Excel, or PowerPoint file.</li><li>Email your document as an iWork, Office, or PDF file from within iWork.</li><li>Share your work on iWork.com, Apple''s new document-sharing service, now available as a Public Beta. (Apple ID and email account required to publish documents and use the publisher link.)</li></ul>', ''),
(13, 13, 'iLife 09', 'ILIFE09', 'Upgrade to iLife &#8217;09 and get the most out of the photos, movies, and music on your Mac with the latest versions of iPhoto, iMovie, GarageBand, iWeb, and iDVD. Organize and search your photos by faces and places. Make a movie in minutes or edit with precision. Learn to play piano and guitar or record your own music. Create a stunning website and publish it anywhere.', ''),
(14, 14, 'Apple Mighty Mouse', 'MIGHTYMOUSE', 'It''s the wired mouse that reinvents the wheel  the scroll wheel. Mighty Mouse features the amazing Scroll Ball that lets you move anywhere inside a document, literally without lifting a finger. And with touch-sensitive technology concealed under the seamless top shell, you can choose either the versatility of a four-button mouse or the simplicity of a single-button beauty.<br/><br/><span style="font-weight: bold;">Innovative Scroll Ball and button</span><br/>Perfectly positioned to roll smoothly under just one finger, Mighty Mouse''s Scroll Ball offers full 360-degree scrolling capability &#8212; up/down, left/right and diagonally. You can scroll long web pages, pan full-size images, maneuver around large spreadsheets, control a video timeline and more. And you can even click the Scroll Ball to access your favorite Tiger features such as Dashboard, Spotlight or Expos&eacute;.<br/><br/><span style="font-weight: bold;">Touch-sensitive top shell</span><br/>It looks and feels like a sleek one-button mouse, but Mighty Mouse''s smooth top shell hides a powerful secret: touch-sensitive technology under the shell detects which part of the mouse you''re clicking, so you can both left-click and right-click. And if you prefer the simplicity of a classic one-button mouse, Mighty Mouse is up to the task. Just use the Mac OS X system preference pane to configure it how you want.<br/><br style="font-weight: bold;"><span style="font-weight: bold;">Force-sensing side buttons</span><br/>When you give Mighty Mouse a squeeze, force-sensing side buttons can be configured to activate Mac OS X features such as Dashboard, Expos&eacute; or a whole host of other customizable features.', ''),
(15, 15, 'Apple Wireless Mighty Mouse', 'WIRELESS-MIGHTY', 'Now you can get the world-famous Mighty Mouse without the tail. With its Bluetooth technology, the wireless Mighty Mouse gives you complete freedom of movement with no cable clutter. It features the popular Scroll Ball that lets you move anywhere inside a document, without lifting a finger. And its laser tracking technology allows it to work on more surfaces with greater precision.<br/><br/><span style="font-weight: bold;">Bluetooth technology, ultimate portability</span><br/>With its secure, reliable Bluetooth technology, wireless Mighty Mouse goes wherever you do. Pair it with any Bluetooth-enabled Mac to work untethered and uncluttered at your desk or on the go, and it operates with either one or two AA batteries &#8212; no bulky dock required.<br/><br/><span style="font-weight: bold;">Laser tracking engine</span><br/>The wireless Mighty Mouse features a laser tracking engine that''s up to 20 times more sensitive to surface details than traditional optical technology. That means it can track with precision on more surfaces than ever &#8212; even smooth or polished surfaces &#8212; with no mouse pad required.<br/><br/><span style="font-weight: bold;">Innovative Scroll Ball and button</span><br/>Perfectly positioned to roll smoothly under just one finger, Mighty Mouse''s Scroll Ball offers full 360-degree scrolling capability &#8212; up/down, left/right and diagonally. You can scroll long web pages, pan full-size images, maneuver around large spreadsheets, control a video timeline and more. And you can even click the Scroll Ball to access your favorite Mac OS X features such as Dashboard, Spotlight or Expos&eacute;.<br/><br/><span style="font-weight: bold;">Touch-sensitive top shell</span><br/>It looks and feels like a sleek one-button mouse, but Mighty Mouse''s smooth top shell hides a powerful secret: touch-sensitive technology under the shell detects which part of the mouse you''re clicking, so you can both left-click and right-click. And if you prefer the simplicity of a classic one-button mouse, Mighty Mouse is up to the task. Just use the Mac OS X system preference pane to configure it how you want.<br/><br/><span style="font-weight: bold;">Force-sensing side buttons</span><br/>When you give Mighty Mouse a squeeze, force-sensing side buttons can be configured to activate Mac OS X features such as Dashboard, Expos&eacute; or a whole host of other customizable features.', ''),
(16, 16, 'Logitech VX Nano Cordless Laser Mouse', 'LOGITECH-NANO', 'Simplify life on the road with the Logitech VX Nano Cordless Laser Mouse. It''s always ready for use, thanks to one of the world''s smallest USB receivers. Plug it into your notebook''s USB port just once, then forget about it. No more broken or lost receivers and no more hassles.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Plug-and-forget nano-receiver that''s barely larger than a coin</li><li>Robust wireless connection with advanced 2.4 GHz cordless technology</li><li>Always ready, since you can leave the nano-receiver plugged into your notebook all the time</li><li>Stylish pouch to protect your mouse when it''s not in use</li><li>Longer battery life--up to 6 months of use (or longer with the convenient on/off switch)</li><li>Slim, ultra-portable mouse design that slips easily into your notebook bag</li><li>Storable receiver fits inside the mouse when you need to free up a USB port; shuts down when stored to save battery life</li><li>Hyper-fast scrolling with the nearly frictionless scroll wheel</li><li>Forward/backward buttons for effortless Internet navigation</li><li>Five programmable buttons for customized mouse controls</li><li>Smoother cursor control on virtually any surface</li></ul>', ''),
(17, 17, 'Apple Wireless Keyboard', 'WIRELESS-KEYBOARD', 'The Apple Wireless Keyboard has been completely redesigned, inside and out. It features an elegant, ultra-thin anodized aluminum enclosure with low-profile keys that provide crisp, responsive feel. It also has function keys for one-touch access to a variety of Mac features such as screen brightness, volume, eject, play/pause, fast-forward and rewind, Expose, and Dashboard. Its compact design fits on your lap or on even the most crowded desk. And its Bluetooth wireless technology lets you use it just about anywhere within 30 feet of your Mac.<br/><br/>The keyboard automatically powers down when you''re not using it and turns on instantly as soon as you start typing. This intelligent power management means you''ll get up to nine months of battery life based on average usage patterns. It also has an on/off switch for when you''re away from your computer for a long time.', ''),
(18, 18, 'Crumpler Considerable Embarrassment Bag', 'CRUMPLER-EMB', 'With a roomy unpadded cargo compartment and a padded sleeve that accommodates MacBook or 15-inch MacBook Pro notebooks, the Crumpler Considerable Embarrassment gives you the best of both worlds.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Padded notebook compartment with six-pocket organizer</li><li>External zip pocket</li><li>Three internal front pockets</li><li>Adjustable shoulder strap with pad</li><li>Clip and velcro release flap</li><li>Fits 15-in. MacBook Pro and 13-in. MacBook models</li></ul>', ''),
(19, 19, 'Higher Ground Shuttle for 13-inch Notebooks', '', 'Small in size and big on protection, the Higher Ground Shuttle lets you use your notebook while it''s still in the case--for the ultimate in convenience. For the most in comfort, the Shuttle''s cooldeck provides non-slip riser pads that facilitate airflow so your lap and your computer stay cooler. <br/><br/>And if you''d like the freedom of carrying the Shuttle on your back, you can get the optional lightweight mesh backpack strap attachment--in addition to the single shoulder strap that''s included. <br/><br/><span style="font-weight: bold;">Features </span><br/><ul><li>Full-time protection since your notebook never has to leave its case</li><li>Cooldeck for computer heat dissipation</li><li>Single shoulder strap (backpack option available)</li><li>Convenient for use on your lap or desktop surface</li><li>Rigid frame and shock-absorbing foam padding throughout</li><li>Reinforcement at all stress points</li><li>Constructed of the finest expedition grade fabrics</li><li>Heavy waterproof coating on all fabrics</li><li>Shields your lap from excessive heat buildup</li></ul>', ''),
(20, 20, 'Speck 13-inch SeeThru Satin Case', 'SPEC-13-B', 'Give your aluminum MacBook a smooth yet easily gripped semi-translucent frosted finish that effortlessly slips in and out of your bag. The SeeThru Satin case also ensures access to all your important plugs and drives while protecting your precious investment.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Silky-smooth soft-touch hard shell protection</li><li>Protection from scrapes and scratches</li><li>Smooth yet grippy rubberized exterior texture</li><li>Ensures full range of motion for MacBook display</li><li>Full venting for safe heat disbursement</li><li>Access to all ports, battery check button, and CD/DVD drive</li><li>Easy installation and removal</li><li>Built-in rubberized feet for stability on flat surfaces</li><li>Soft cleaning cloth</li><li>Fits the aluminum 13-inch MacBook</li></ul>', ''),
(21, 21, 'booq Mamba Saddle', 'BOOQ-MAMBO', 'With its boldly-colored interior and elegant exterior, its zippered accessory pouch for small items, and its impeccable finish and convenient pocket layout, the Mamba Saddle is the ideal bag for your life and your life at work.<br/><br/>The Mamba Saddle also includes booq''s Terralinq service, which may help reunite you with your bag if it''s ever lost. To make this possible, each booq bag carries a unique item number on a metal label. When you register that number it creates a link with your identity. Then if your bag is reported as lost and found, Terralinq will attempt to contact you with its location and the finder''s contact information.', ''),
(22, 22, 'Logitech Pure-Fi Anywhere Speakers', 'PUREFI', 'The Pure-Fi Anywhere speaker system uses a unique combination of speaker drivers to deliver clear sound with maximum bass and minimal distortion. Its compact size and long battery life make it the ideal companion to your iPod or iPhone.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Advanced acoustics for exceptionally clear sound</li><li>Three-inch pressure drivers to maximize bass response</li><li>StereXL technology widens the stereo image dramatically</li><li>Ten-hour rechargeable battery for longer listening</li><li>Battery-level indicator eliminates surprises</li><li>Travel case to protect and store speakers.</li><li>iPhone or iPod charged whenever it''s docked</li><li>Wireless remote to control your iPod or iPhone and browse content</li></ul>', ''),
(23, 23, 'Apple In-Ear Headphones with Remote and Mic', 'APPLE-INEAR', 'Hear every detail of your music every time you tune in with the Apple In-Ear Headphones with Remote and Mic. They offer pro audio performance and impressive sound isolation, and convenient buttons let you adjust the volume and control music and video playback.<br/><br/><span style="font-weight: bold;">Rediscover your music.</span><br/>Put on the Apple In-Ear Headphones, select your favorite track, and hear musical details you never knew existed. It''s almost like you''re experiencing your music for the first time.<br/><br/><span style="font-weight: bold;">Technical Specifications</span><br/><ul><li>Frequency response: 5Hz to 21kHz</li><li>Impedance (at 100Hz): 23 ohms</li><li>Sensitivity (at 100Hz): 109 dB SPL/mW</li><li>Drivers: Custom two-way balanced armature (woofer and tweeter in each earpiece)</li></ul>', ''),
(24, 24, 'Apple iPod Socks', 'IPOD-SOCKS', 'So add a dash of color to your iPod with iPod Socks, the year''s coziest and most vibrant iPod accessory.<br/>It doesn''t matter which iPod model you have because iPod Socks fit all of them. And it doesn''t matter what your mood is because each iPod Socks package includes six bright colors so you can pick the one that feels best.<br/><br/>Forgive us if we''re stating the obvious, but here''s how it works: Just slide your iPod into the sock to keep it safe and warm. Slide it out to dock or change playlists. It''s as easy as... putting on a pair of socks.', ''),
(25, 25, 'Incase Sports Armband for iPod Nano', 'INCASE-NANO', 'Constructed out of lightweight, washable neoprene and reflective materials, the adjustable Incase Sports Armband is the functional and secure way to carry your iPod nano during your run or workout. The heavy-duty velcro adjustment provides for a universal fit while the clear cover allows convenient access to widescreen and touch controls.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Complete protection for iPod nano Form-fitting, washable neoprene construction Reflective material for enhanced visibility</li><li>Velcro adjustment for universal fit</li><li>Easy access to headphone jack, hold switch, and dock connector</li><li>Custom fit for iPod nano (4th. Gen.)</li></ul>', ''),
(26, 26, 'Speck PixelSkin Case for iPhone 3G', 'SPECK-IPHONE', 'Fun color and soft, tiled textures make the Speck PixelSkin case the ideal way to protect your iPhone 3G. This durable, rubberized case helps you keep your grip on your iPhone and fully protects against bumps and scrapes without adding bulk. Plus, PixelSkin layers on style and not frustration with complete access to all ports and controls while cased.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Soft matte-finish provides comfort and extra grip</li><li>Tiled textured surfaces enhance contrast and add character</li><li>Lightweight, durable design protects without adding bulk</li><li>Front raised ridges recess your screen to protect it when placed face down</li><li>Complete access to all ports, controls, and sensors while cased</li></ul>', ''),
(27, 27, 'Apple iPhone Bluetooth Headset', 'APPLE-BLUE', 'Enjoy wireless convenience and crystal-clear audio when talking on your iPhone. The iPhone Bluetooth Headset features a single button that lets you make and receive phone calls simply and intuitively. And the innovative design is sure to turn a few heads.<br/><br/><span style="font-weight: bold;">Features</span><br/><ul><li>Up to 5.5 hours of talk time; up to 72 hours of standby time*</li><li>Lightweight earpiece for a secure, comfortable fit in left or right ear</li><li>Convenient autopairing with iPhone</li><li>Stylish anodized aluminum casing</li></ul>', ''),
(28, 28, 'Mac Pro', 'MAC-PRO', 'Boost your productivity with the Apple Mac Pro desktop PC - the fastest Mac Apple has ever made. Combining two of Intel''s new 64-bit, 45-nanometer Quad-Core Xeon 5400 processors running at 2.8 GHz, the Mac Pro is an unbelievably powerful workstation that can handle even the most intensive graphics rendering.<br/><br/><span style="font-weight: bold;">8 cores, standard.</span><br/>8-core processing was once reserved as a high-end option. Now it''s at the heart of the Mac Pro line. This incredible power stems from all-new Quad-Core Intel Xeon &#8220;Harpertown&#8221; processors, featuring speeds up to 3.2GHz and 12MB of L2 cache per processor.<br/><br/><span style="font-weight: bold;">Blazing fast, up to 2x performance.</span><br/>With its 8-core processing, advanced Xeon architecture, 1600MHz dual independent front-side buses, and 800MHz memory, the new Mac Pro delivers up to 2x greater application performance.2<br/><br/><span style="font-weight: bold;">Up to 4TB storage, RAID, and SAS.</span><br/>The cable-free, direct-attach hard drive bays make it easy to install up to 4TB of storage with Serial ATA 3Gb/s drives. For enhanced data protection, the optional Mac Pro RAID card delivers hardware RAID levels 0, 1, 5, and 0+1. Used with this card, 15,000-rpm SAS drives bring added performance to RAID configurations.<br/><br/><span style="font-weight: bold;">The new generation of graphics.</span><br/>All new, high-performance graphics cards from ATI and NVIDIA offer even greater performance for 3D and graphics- intensive applications. For more power, upgrade to a workstation-class card with up to 1.5GB of memory. All cards now support up to two 30-inch Apple Cinema HD displays.<br/><br/><span style="font-weight: bold;">Technical Details</span><br/><ul><li>Two 2.8 GHz quad-core Intel Xeon processors with dual-independent 1600 MHz front side buses</li><li>2 GB RAM expandable up to 32 GB, 320 GB hard drive, 16x Double-Layer SuperDrive</li><li>ATI Radeon HD 2600 XT 256MB (Two dual-link DVI)</li><li>Two FireWire 800 ports, two FireWire 400 ports, five USB 2.0 ports, and two USB 2.0 ports on keyboard</li><li>Mac OS X v10.5 Leopard (includes Time Machine, Quick Look, Spaces, Spotlight, Dashboard, Mail, iChat, Safari, Address Book, QuickTime, iCal, DVD Player, Photo Booth, Front Row, Xcode Developer Tools), iLife ''08 (includes iTunes, iPhoto, iMovie, iDVD, iWeb, and GarageBand)</li></ul>', '');

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_tagassociations`
--

CREATE TABLE IF NOT EXISTS `isc_product_tagassociations` (
  `tagassocid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `productid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagassocid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_tags`
--

CREATE TABLE IF NOT EXISTS `isc_product_tags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` varchar(100) NOT NULL DEFAULT '',
  `tagfriendlyname` varchar(100) NOT NULL DEFAULT '',
  `tagcount` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_tax_pricing`
--

CREATE TABLE IF NOT EXISTS `isc_product_tax_pricing` (
  `price_reference` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `calculated_price` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `tax_zone_id` int(11) unsigned NOT NULL DEFAULT '0',
  `tax_class_id` int(11) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `price_reference` (`price_reference`,`tax_zone_id`,`tax_class_id`),
  KEY `tax_zone_id` (`tax_zone_id`),
  KEY `tax_class_id` (`tax_class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isc_product_tax_pricing`
--

INSERT INTO `isc_product_tax_pricing` (`price_reference`, `calculated_price`, `tax_zone_id`, `tax_class_id`) VALUES
(24.9500, 24.9500, 0, 0),
(24.9500, 24.9500, 1, 0),
(29.0000, 29.0000, 0, 0),
(29.0000, 29.0000, 1, 0),
(29.9500, 29.9500, 0, 0),
(29.9500, 29.9500, 1, 0),
(39.9500, 39.9500, 0, 0),
(39.9500, 39.9500, 1, 0),
(49.0000, 49.0000, 0, 0),
(49.0000, 49.0000, 1, 0),
(49.9500, 49.9500, 0, 0),
(49.9500, 49.9500, 1, 0),
(69.0000, 69.0000, 0, 0),
(69.0000, 69.0000, 1, 0),
(69.9600, 69.9600, 0, 0),
(69.9600, 69.9600, 1, 0),
(79.0000, 79.0000, 0, 0),
(79.0000, 79.0000, 1, 0),
(89.9500, 89.9500, 0, 0),
(89.9500, 89.9500, 1, 0),
(99.0000, 99.0000, 0, 0),
(99.0000, 99.0000, 1, 0),
(124.9500, 124.9500, 0, 0),
(124.9500, 124.9500, 1, 0),
(129.9500, 129.9500, 0, 0),
(129.9500, 129.9500, 1, 0),
(149.0000, 149.0000, 0, 0),
(149.0000, 149.0000, 1, 0),
(199.9500, 199.9500, 0, 0),
(199.9500, 199.9500, 1, 0),
(229.0000, 229.0000, 0, 0),
(229.0000, 229.0000, 1, 0),
(249.0000, 249.0000, 0, 0),
(249.0000, 249.0000, 1, 0),
(429.9500, 429.9500, 0, 0),
(429.9500, 429.9500, 1, 0),
(499.9500, 499.9500, 0, 0),
(499.9500, 499.9500, 1, 0),
(1299.0000, 1299.0000, 0, 0),
(1299.0000, 1299.0000, 1, 0),
(1799.0000, 1799.0000, 0, 0),
(1799.0000, 1799.0000, 1, 0),
(1999.0000, 1999.0000, 0, 0),
(1999.0000, 1999.0000, 1, 0),
(2799.0000, 2799.0000, 0, 0),
(2799.0000, 2799.0000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_variations`
--

CREATE TABLE IF NOT EXISTS `isc_product_variations` (
  `variationid` int(11) NOT NULL AUTO_INCREMENT,
  `vname` varchar(100) NOT NULL DEFAULT '',
  `vnumoptions` int(11) NOT NULL DEFAULT '0',
  `vvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`variationid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `isc_product_variations`
--

INSERT INTO `isc_product_variations` (`variationid`, `vname`, `vnumoptions`, `vvendorid`) VALUES
(1, 'iPod Shuffle Variations', 2, 0),
(2, 'iPod Nano Variations', 2, 0),
(3, 'iPod Classic Variations', 1, 0),
(4, 'iPod Touch Variations', 1, 0),
(5, 'MacBook Variations', 1, 0),
(6, 'MacBook Pro Variations', 1, 0),
(7, 'MacBook Air Variations', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_variation_combinations`
--

CREATE TABLE IF NOT EXISTS `isc_product_variation_combinations` (
  `combinationid` int(11) NOT NULL AUTO_INCREMENT,
  `vcproductid` int(11) NOT NULL DEFAULT '0',
  `vcproducthash` varchar(32) NOT NULL DEFAULT '',
  `vcvariationid` int(11) NOT NULL DEFAULT '0',
  `vcenabled` tinyint(4) NOT NULL DEFAULT '1',
  `vcoptionids` varchar(100) NOT NULL DEFAULT '',
  `vcsku` varchar(50) NOT NULL DEFAULT '',
  `vcpricediff` enum('','add','subtract','fixed') NOT NULL DEFAULT '',
  `vcprice` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `vcweightdiff` enum('','add','subtract','fixed') NOT NULL DEFAULT '',
  `vcweight` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `vcimage` varchar(100) NOT NULL DEFAULT '',
  `vcimagezoom` varchar(100) NOT NULL DEFAULT '',
  `vcimagestd` varchar(100) NOT NULL DEFAULT '',
  `vcimagethumb` varchar(100) NOT NULL DEFAULT '',
  `vcstock` int(11) NOT NULL DEFAULT '0',
  `vclowstock` int(11) NOT NULL DEFAULT '0',
  `vclastmodified` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`combinationid`),
  KEY `i_product_variation_combinations_vcvariationid` (`vcvariationid`),
  KEY `i_product_variation_combinations_vcproductid` (`vcproductid`),
  KEY `i_product_variation_combinations_vcproducthash` (`vcproducthash`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `isc_product_variation_combinations`
--

INSERT INTO `isc_product_variation_combinations` (`combinationid`, `vcproductid`, `vcproducthash`, `vcvariationid`, `vcenabled`, `vcoptionids`, `vcsku`, `vcpricediff`, `vcprice`, `vcweightdiff`, `vcweight`, `vcimage`, `vcimagezoom`, `vcimagestd`, `vcimagethumb`, `vcstock`, `vclowstock`, `vclastmodified`) VALUES
(1, 1, '', 1, 1, '1,6', 'SHUFFLE-S-1', '', 0.0000, '', 0.0000, 'sample_images/shuffle_silver__74741.jpg', 'sample_images/shuffle_silver__85082_zoom.jpg', 'sample_images/shuffle_silver__70361_std.jpg', 'sample_images/shuffle_silver__72954_thumb.jpg', 0, 0, 0),
(2, 1, '', 1, 1, '1,7', 'SHUFFLE-S-2', 'add', 20.0000, '', 0.0000, 'sample_images/shuffle_silver__56658.jpg', 'sample_images/shuffle_silver__77487_zoom.jpg', 'sample_images/shuffle_silver__00033_std.jpg', 'sample_images/shuffle_silver__28097_thumb.jpg', 0, 0, 0),
(3, 1, '', 1, 1, '2,6', 'SHUFFLE-B-1', '', 0.0000, '', 0.0000, 'sample_images/shuffle_blue__94685.jpg', 'sample_images/shuffle_blue__32881_zoom.jpg', 'sample_images/shuffle_blue__11956_std.jpg', 'sample_images/shuffle_blue__78248_thumb.jpg', 0, 0, 0),
(4, 1, '', 1, 1, '2,7', 'SHUFFLE-B-2', 'add', 20.0000, '', 0.0000, 'sample_images/shuffle_blue__89098.jpg', 'sample_images/shuffle_blue__89691_zoom.jpg', 'sample_images/shuffle_blue__43863_std.jpg', 'sample_images/shuffle_blue__03016_thumb.jpg', 0, 0, 0),
(5, 1, '', 1, 1, '3,6', 'SHUFFLE-G-1', '', 0.0000, '', 0.0000, 'sample_images/shuffle_green__69237.jpg', 'sample_images/shuffle_green__21351_zoom.jpg', 'sample_images/shuffle_green__60861_std.jpg', 'sample_images/shuffle_green__93976_thumb.jpg', 0, 0, 0),
(6, 1, '', 1, 1, '3,7', 'SHUFFLE-G-2', 'add', 20.0000, '', 0.0000, 'sample_images/shuffle_green__04378.jpg', 'sample_images/shuffle_green__90582_zoom.jpg', 'sample_images/shuffle_green__01264_std.jpg', 'sample_images/shuffle_green__36278_thumb.jpg', 0, 0, 0),
(7, 1, '', 1, 1, '4,6', 'SHUFFLE-R-1', '', 0.0000, '', 0.0000, 'sample_images/shuffle_productred__74239.jpg', 'sample_images/shuffle_productred__31189_zoom.jpg', 'sample_images/shuffle_productred__89531_std.jpg', 'sample_images/shuffle_productred__25646_thumb.jpg', 0, 0, 0),
(8, 1, '', 1, 1, '4,7', ' SHUFFLE-R-2', 'add', 20.0000, '', 0.0000, 'sample_images/shuffle_productred__79437.jpg', 'sample_images/shuffle_productred__90003_zoom.jpg', 'sample_images/shuffle_productred__39498_std.jpg', 'sample_images/shuffle_productred__99752_thumb.jpg', 0, 0, 0),
(9, 1, '', 1, 1, '5,6', 'SHUFFLE-P-1', '', 0.0000, '', 0.0000, 'sample_images/shuffle_pink__96905.jpg', 'sample_images/shuffle_pink__89924_zoom.jpg', 'sample_images/shuffle_pink__28481_std.jpg', 'sample_images/shuffle_pink__18596_thumb.jpg', 0, 0, 0),
(10, 1, '', 1, 1, '5,7', 'SHUFFLE-P-2', 'add', 20.0000, '', 0.0000, 'sample_images/shuffle_pink__52786.jpg', 'sample_images/shuffle_pink__41354_zoom.jpg', 'sample_images/shuffle_pink__20697_std.jpg', 'sample_images/shuffle_pink__73522_thumb.jpg', 0, 0, 0),
(11, 2, '', 2, 1, '8,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_silver__33543.jpg', 'sample_images/nano_silver__63198_zoom.jpg', 'sample_images/nano_silver__12656_std.jpg', 'sample_images/nano_silver__48592_thumb.jpg', 0, 0, 0),
(12, 2, '', 2, 1, '8,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_silver__44988.jpg', 'sample_images/nano_silver__66762_zoom.jpg', 'sample_images/nano_silver__28040_std.jpg', 'sample_images/nano_silver__05889_thumb.jpg', 0, 0, 0),
(13, 2, '', 2, 1, '9,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_black__77979.jpg', 'sample_images/nano_black__05987_zoom.jpg', 'sample_images/nano_black__01548_std.jpg', 'sample_images/nano_black__18134_thumb.jpg', 0, 0, 0),
(14, 2, '', 2, 1, '9,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_black__74870.jpg', 'sample_images/nano_black__29798_zoom.jpg', 'sample_images/nano_black__78995_std.jpg', 'sample_images/nano_black__66409_thumb.jpg', 0, 0, 0),
(15, 2, '', 2, 1, '10,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_purple__36746.jpg', 'sample_images/nano_purple__47289_zoom.jpg', 'sample_images/nano_purple__60580_std.jpg', 'sample_images/nano_purple__36392_thumb.jpg', 0, 0, 0),
(16, 2, '', 2, 1, '10,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_purple__49403.jpg', 'sample_images/nano_purple__52706_zoom.jpg', 'sample_images/nano_purple__32338_std.jpg', 'sample_images/nano_purple__45058_thumb.jpg', 0, 0, 0),
(17, 2, '', 2, 1, '11,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_blue__58247.jpg', 'sample_images/nano_blue__44839_zoom.jpg', 'sample_images/nano_blue__55922_std.jpg', 'sample_images/nano_blue__94038_thumb.jpg', 0, 0, 0),
(18, 2, '', 2, 1, '11,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_blue__04891.jpg', 'sample_images/nano_blue__47387_zoom.jpg', 'sample_images/nano_blue__61332_std.jpg', 'sample_images/nano_blue__31032_thumb.jpg', 0, 0, 0),
(19, 2, '', 2, 1, '12,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_green__69246.jpg', 'sample_images/nano_green__91034_zoom.jpg', 'sample_images/nano_green__96346_std.jpg', 'sample_images/nano_green__42145_thumb.jpg', 0, 0, 0),
(20, 2, '', 2, 1, '12,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_green__49024.jpg', 'sample_images/nano_green__37061_zoom.jpg', 'sample_images/nano_green__01237_std.jpg', 'sample_images/nano_green__34574_thumb.jpg', 0, 0, 0),
(21, 2, '', 2, 1, '13,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_yellow__39589.jpg', 'sample_images/nano_yellow__48645_zoom.jpg', 'sample_images/nano_yellow__31743_std.jpg', 'sample_images/nano_yellow__79269_thumb.jpg', 0, 0, 0),
(22, 2, '', 2, 1, '13,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_yellow__65890.jpg', 'sample_images/nano_yellow__21616_zoom.jpg', 'sample_images/nano_yellow__02456_std.jpg', 'sample_images/nano_yellow__94762_thumb.jpg', 0, 0, 0),
(23, 2, '', 2, 1, '14,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_orange__00980.jpg', 'sample_images/nano_orange__00990_zoom.jpg', 'sample_images/nano_orange__68757_std.jpg', 'sample_images/nano_orange__38962_thumb.jpg', 0, 0, 0),
(24, 2, '', 2, 1, '14,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_orange__76001.jpg', 'sample_images/nano_orange__57067_zoom.jpg', 'sample_images/nano_orange__76433_std.jpg', 'sample_images/nano_orange__47241_thumb.jpg', 0, 0, 0),
(25, 2, '', 2, 1, '15,16', '', '', 0.0000, '', 0.0000, 'sample_images/nano_pink__36738.jpg', 'sample_images/nano_pink__67702_zoom.jpg', 'sample_images/nano_pink__88232_std.jpg', 'sample_images/nano_pink__56079_thumb.jpg', 0, 0, 0),
(26, 2, '', 2, 1, '15,17', '', 'add', 50.0000, '', 0.0000, 'sample_images/nano_pink__02160.jpg', 'sample_images/nano_pink__56021_zoom.jpg', 'sample_images/nano_pink__33240_std.jpg', 'sample_images/nano_pink__24039_thumb.jpg', 0, 0, 0),
(27, 3, '', 3, 1, '18', '', '', 0.0000, '', 0.0000, 'sample_images/product_white_classic__60545.jpg', 'sample_images/product_white_classic__20088_zoom.jpg', 'sample_images/product_white_classic__95923_std.jpg', 'sample_images/product_white_classic__37366_thumb.jpg', 0, 0, 0),
(28, 3, '', 3, 1, '19', '', '', 0.0000, '', 0.0000, 'sample_images/product_black_classic__57135.jpg', 'sample_images/product_black_classic__74456_zoom.jpg', 'sample_images/product_black_classic__85396_std.jpg', 'sample_images/product_black_classic__85375_thumb.jpg', 0, 0, 0),
(29, 4, '', 4, 1, '20', '', 'fixed', 229.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(30, 4, '', 4, 1, '21', '', 'fixed', 299.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(31, 4, '', 4, 1, '22', '', 'fixed', 399.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(32, 5, '', 5, 1, '23', '', '', 0.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(33, 5, '', 5, 1, '24', '', 'fixed', 1599.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(34, 6, '', 6, 1, '25', '', '', 0.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(35, 6, '', 6, 1, '26', '', 'fixed', 2499.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(36, 6, '', 6, 1, '27', '', 'fixed', 2799.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(37, 7, '', 7, 1, '28', '', '', 0.0000, '', 0.0000, '', '', '', '', 0, 0, 0),
(38, 7, '', 7, 1, '29', '', 'fixed', 2499.0000, '', 0.0000, '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_variation_options`
--

CREATE TABLE IF NOT EXISTS `isc_product_variation_options` (
  `voptionid` int(11) NOT NULL AUTO_INCREMENT,
  `vovariationid` int(11) NOT NULL DEFAULT '0',
  `voname` varchar(255) NOT NULL DEFAULT '',
  `vovalue` text,
  `vooptionsort` int(11) NOT NULL DEFAULT '0',
  `vovaluesort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`voptionid`),
  KEY `i_product_variation_options_vovariationid` (`vovariationid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `isc_product_variation_options`
--

INSERT INTO `isc_product_variation_options` (`voptionid`, `vovariationid`, `voname`, `vovalue`, `vooptionsort`, `vovaluesort`) VALUES
(1, 1, 'Color', 'Silver', 1, 1),
(2, 1, 'Color', 'Blue', 1, 2),
(3, 1, 'Color', 'Green', 1, 3),
(4, 1, 'Color', 'Red', 1, 4),
(5, 1, 'Color', 'Pink', 1, 5),
(6, 1, 'Capacity', '1 GB (240 songs)', 2, 1),
(7, 1, 'Capacity', '2 GB (500 songs)', 2, 2),
(8, 2, 'Color', 'Silver', 1, 1),
(9, 2, 'Color', 'Black', 1, 2),
(10, 2, 'Color', 'Purple', 1, 3),
(11, 2, 'Color', 'Blue', 1, 4),
(12, 2, 'Color', 'Green', 1, 5),
(13, 2, 'Color', 'Yellow', 1, 6),
(14, 2, 'Color', 'Orange', 1, 7),
(15, 2, 'Color', 'Pink', 1, 8),
(16, 2, 'Capacity', '8 GB (2,000 songs)', 2, 1),
(17, 2, 'Capacity', '16 GB (4,000 songs)', 2, 2),
(18, 3, 'Color', 'Silver', 1, 1),
(19, 3, 'Color', 'Black', 1, 2),
(20, 4, 'Capacity', '8 GB (1,750 songs)', 1, 1),
(21, 4, 'Capacity', '16 GB (3,500 songs)', 1, 2),
(22, 4, 'Capacity', '32 GB (7,000 songs)', 1, 3),
(23, 5, 'Model', '2.0 Ghz, 160 GB hard drive', 1, 1),
(24, 5, 'Model', '2.4 Ghz, 250 GB hard drive', 1, 2),
(25, 6, 'Model', '15", 2.4 Ghz, 250 GB hard drive, 256 MB video', 1, 1),
(26, 6, 'Model', '15", 2.53 Ghz, 320 GB hard drive, 512 MB video', 1, 2),
(27, 6, 'Model', '17", 2.66 Ghz, 320 GB hard drive, 512 MB video', 1, 3),
(28, 7, 'Model', '1.6 Ghz, 120 GB SATA hard drive', 1, 1),
(29, 7, 'Model', '1.86 Ghz, 128 GB SSD hard drive', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_videos`
--

CREATE TABLE IF NOT EXISTS `isc_product_videos` (
  `video_id` varchar(25) NOT NULL,
  `video_product_id` int(11) unsigned NOT NULL,
  `video_sort_order` int(11) unsigned NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_description` text NOT NULL,
  `video_length` varchar(10) NOT NULL,
  PRIMARY KEY (`video_id`,`video_product_id`),
  KEY `video_product_id` (`video_product_id`,`video_sort_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_views`
--

CREATE TABLE IF NOT EXISTS `isc_product_views` (
  `session` char(32) NOT NULL,
  `product` int(10) unsigned NOT NULL,
  `lastview` int(10) unsigned NOT NULL,
  PRIMARY KEY (`session`,`product`),
  KEY `i_session_lastview` (`session`,`lastview`),
  KEY `i_product` (`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isc_product_views`
--

INSERT INTO `isc_product_views` (`session`, `product`, `lastview`) VALUES
('ur2uqvhetrop7q6chrfnnuq1p2', 6, 1336375861),
('ur2uqvhetrop7q6chrfnnuq1p2', 2, 1336376429),
('ur2uqvhetrop7q6chrfnnuq1p2', 26, 1336383783),
('ur2uqvhetrop7q6chrfnnuq1p2', 11, 1336383822),
('ur2uqvhetrop7q6chrfnnuq1p2', 27, 1336384826),
('ur2uqvhetrop7q6chrfnnuq1p2', 21, 1336386798),
('ur2uqvhetrop7q6chrfnnuq1p2', 9, 1336386995);

-- --------------------------------------------------------

--
-- Table structure for table `isc_product_words`
--

CREATE TABLE IF NOT EXISTS `isc_product_words` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL DEFAULT '',
  `productid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wordid`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=285 ;

--
-- Dumping data for table `isc_product_words`
--

INSERT INTO `isc_product_words` (`wordid`, `word`, `productid`) VALUES
(276, 'shuffle', 1),
(275, 'ipod', 1),
(278, 'nano', 2),
(277, 'ipod', 2),
(270, 'classic', 3),
(269, 'ipod', 3),
(266, 'touch', 4),
(265, 'ipod', 4),
(264, 'macbook', 5),
(263, 'pro', 6),
(262, 'macbook', 6),
(261, 'air', 7),
(260, 'macbook', 7),
(259, 'deluxe', 8),
(258, 'dtt', 8),
(257, 'eyetv', 8),
(256, 'elgato', 8),
(255, 'recorder', 9),
(254, 'digital', 9),
(253, 'plus', 9),
(252, '250', 9),
(251, 'eyetv', 9),
(250, 'elgato', 9),
(249, 'student', 10),
(248, 'and', 10),
(247, 'home', 10),
(246, '2008', 10),
(245, 'mac', 10),
(244, 'for', 10),
(243, 'office', 10),
(242, 'edition', 11),
(241, 'media', 11),
(240, 'special', 11),
(239, 'mac', 11),
(238, 'for', 11),
(237, '2008', 11),
(236, 'office', 11),
(235, 'iwork', 12),
(234, 'ilife', 13),
(233, 'mouse', 14),
(232, 'mighty', 14),
(231, 'apple', 14),
(229, 'mighty', 15),
(228, 'wireless', 15),
(227, 'apple', 15),
(225, 'laser', 16),
(224, 'cordless', 16),
(223, 'nano', 16),
(222, 'logitech', 16),
(283, 'wireless', 17),
(282, 'apple', 17),
(220, 'embarrassment', 18),
(219, 'considerable', 18),
(218, 'crumpler', 18),
(217, 'notebooks', 19),
(216, '13-inch', 19),
(215, 'for', 19),
(214, 'shuttle', 19),
(213, 'ground', 19),
(212, 'higher', 19),
(211, 'case', 20),
(210, 'satin', 20),
(209, 'seethru', 20),
(208, '13-inch', 20),
(207, 'speck', 20),
(206, 'saddle', 21),
(205, 'mamba', 21),
(204, 'booq', 21),
(203, 'speakers', 22),
(202, 'anywhere', 22),
(201, 'pure-fi', 22),
(200, 'logitech', 22),
(194, 'and', 23),
(193, 'remote', 23),
(192, 'with', 23),
(191, 'headphones', 23),
(190, 'in-ear', 23),
(189, 'apple', 23),
(188, 'socks', 24),
(187, 'ipod', 24),
(186, 'apple', 24),
(185, 'nano', 25),
(184, 'ipod', 25),
(183, 'for', 25),
(182, 'armband', 25),
(181, 'sports', 25),
(180, 'incase', 25),
(178, 'for', 26),
(177, 'case', 26),
(176, 'pixelskin', 26),
(175, 'speck', 26),
(173, 'bluetooth', 27),
(172, 'iphone', 27),
(171, 'apple', 27),
(170, 'pro', 28),
(169, 'mac', 28),
(174, 'headset', 27),
(179, 'iphone', 26),
(195, 'mic', 23),
(221, 'bag', 18),
(226, 'mouse', 16),
(230, 'mouse', 15),
(284, 'keyboard', 17);

-- --------------------------------------------------------

--
-- Table structure for table `isc_redirects`
--

CREATE TABLE IF NOT EXISTS `isc_redirects` (
  `redirectid` int(11) NOT NULL AUTO_INCREMENT,
  `redirectpath` varchar(255) NOT NULL,
  `redirectassocid` int(11) NOT NULL,
  `redirectassoctype` smallint(1) NOT NULL,
  `redirectmanual` varchar(255) NOT NULL,
  PRIMARY KEY (`redirectid`),
  KEY `redirectpath` (`redirectpath`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_returns`
--

CREATE TABLE IF NOT EXISTS `isc_returns` (
  `returnid` int(10) NOT NULL AUTO_INCREMENT,
  `retorderid` int(10) NOT NULL DEFAULT '0',
  `retcustomerid` int(10) NOT NULL DEFAULT '0',
  `retprodid` int(10) NOT NULL DEFAULT '0',
  `retprodvariationid` int(11) NOT NULL DEFAULT '0',
  `retprodoptions` text,
  `retprodname` varchar(200) NOT NULL DEFAULT '',
  `retprodcost` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `retprodqty` int(1) NOT NULL DEFAULT '1',
  `retstatus` int(1) NOT NULL DEFAULT '0',
  `retreason` varchar(200) NOT NULL DEFAULT '',
  `retaction` varchar(200) NOT NULL DEFAULT '',
  `retdaterequested` int(10) NOT NULL DEFAULT '0',
  `retcomment` text,
  `retuserid` int(10) NOT NULL DEFAULT '0',
  `retreceivedcredit` int(1) NOT NULL DEFAULT '0',
  `retordprodid` int(10) NOT NULL DEFAULT '0',
  `retstaffnotes` text,
  `retvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`returnid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_reviews`
--

CREATE TABLE IF NOT EXISTS `isc_reviews` (
  `reviewid` int(11) NOT NULL AUTO_INCREMENT,
  `revproductid` int(11) NOT NULL DEFAULT '0',
  `revfromname` varchar(100) NOT NULL DEFAULT '',
  `revdate` int(11) NOT NULL DEFAULT '0',
  `revrating` smallint(6) NOT NULL DEFAULT '0',
  `revtext` text,
  `revtitle` varchar(250) NOT NULL DEFAULT '',
  `revstatus` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reviewid`),
  KEY `i_reviews_revproductid` (`revproductid`),
  FULLTEXT KEY `ft_reviews_text_title_from` (`revtext`,`revtitle`,`revfromname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_searches`
--

CREATE TABLE IF NOT EXISTS `isc_searches` (
  `searchid` int(11) NOT NULL AUTO_INCREMENT,
  `searchtext` text,
  `numsearches` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  FULLTEXT KEY `searchtext` (`searchtext`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_searches_extended`
--

CREATE TABLE IF NOT EXISTS `isc_searches_extended` (
  `searchid` int(11) NOT NULL AUTO_INCREMENT,
  `searchtext` text,
  `numresults` int(11) NOT NULL DEFAULT '0',
  `searchdate` int(11) NOT NULL DEFAULT '0',
  `clickthru` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_search_corrections`
--

CREATE TABLE IF NOT EXISTS `isc_search_corrections` (
  `correctionid` int(11) NOT NULL AUTO_INCREMENT,
  `correctiontype` enum('correction','recommendation') NOT NULL DEFAULT 'correction',
  `correction` varchar(250) NOT NULL DEFAULT '',
  `numresults` int(11) NOT NULL DEFAULT '0',
  `oldsearchtext` varchar(250) NOT NULL DEFAULT '',
  `oldnumresults` int(11) NOT NULL DEFAULT '0',
  `correctdate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`correctionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_sessions`
--

CREATE TABLE IF NOT EXISTS `isc_sessions` (
  `sessionhash` varchar(32) NOT NULL DEFAULT '',
  `sessdata` longtext,
  `sesslastupdated` int(10) NOT NULL DEFAULT '0',
  UNIQUE KEY `sessionhash` (`sessionhash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isc_sessions`
--

INSERT INTO `isc_sessions` (`sessionhash`, `sessdata`, `sesslastupdated`) VALUES
('ur2uqvhetrop7q6chrfnnuq1p2', 'QUOTE|O:9:"ISC_QUOTE":17:{s:13:"\0*\0customerId";i:0;s:18:"\0*\0customerGroupId";N;s:12:"\0*\0discounts";a:0:{}s:12:"\0*\0addresses";a:2:{s:13:"4fa78e87cb8e0";O:26:"ISC_QUOTE_ADDRESS_SHIPPING":21:{s:17:"\0*\0shippingMethod";N;s:16:"\0*\0shippingCache";N;s:12:"\0*\0discounts";a:0:{}s:15:"\0*\0handlingCost";N;s:8:"\0*\0quote";r:1;s:7:"\0*\0type";s:8:"shipping";s:5:"\0*\0id";s:13:"4fa78e87cb8e0";s:12:"\0*\0firstName";N;s:11:"\0*\0lastName";N;s:10:"\0*\0company";N;s:8:"\0*\0phone";N;s:8:"\0*\0email";N;s:11:"\0*\0address1";N;s:11:"\0*\0address2";N;s:6:"\0*\0zip";N;s:7:"\0*\0city";N;s:8:"\0*\0state";a:3:{s:2:"id";i:0;s:4:"name";s:0:"";s:4:"iso2";s:0:"";}s:10:"\0*\0country";a:3:{s:2:"id";i:0;s:4:"name";s:0:"";s:4:"iso2";s:0:"";}s:15:"\0*\0customFields";a:0:{}s:14:"\0*\0saveAddress";N;s:20:"\0*\0customerAddressId";i:0;}s:13:"4fa78e87d13a9";O:17:"ISC_QUOTE_ADDRESS":18:{s:15:"\0*\0handlingCost";N;s:8:"\0*\0quote";r:1;s:7:"\0*\0type";s:7:"billing";s:5:"\0*\0id";s:13:"4fa78e87d13a9";s:12:"\0*\0firstName";N;s:11:"\0*\0lastName";N;s:10:"\0*\0company";N;s:8:"\0*\0phone";N;s:8:"\0*\0email";N;s:11:"\0*\0address1";N;s:11:"\0*\0address2";N;s:6:"\0*\0zip";N;s:7:"\0*\0city";N;s:8:"\0*\0state";a:3:{s:2:"id";i:0;s:4:"name";s:0:"";s:4:"iso2";s:0:"";}s:10:"\0*\0country";a:3:{s:2:"id";i:0;s:4:"name";s:0:"";s:4:"iso2";s:0:"";}s:15:"\0*\0customFields";a:0:{}s:14:"\0*\0saveAddress";N;s:20:"\0*\0customerAddressId";i:0;}}s:10:"\0*\0coupons";a:0:{}s:19:"\0*\0giftCertificates";a:0:{}s:8:"\0*\0items";a:0:{}s:18:"\0*\0isSplitShipping";b:0;s:18:"\0*\0hasFreeShipping";b:0;s:21:"\0*\0appliedStoreCredit";i:0;s:23:"\0*\0appliedDiscountRules";a:0:{}s:27:"\0*\0eligibleFreeShippingInfo";a:0:{}s:18:"\0*\0customerMessage";s:0:"";s:13:"\0*\0staffNotes";s:0:"";s:14:"\0*\0orderStatus";i:0;s:10:"\0*\0orderId";b:0;s:19:"\0*\0discountsEnabled";b:1;}RECENTLY_VIEWED_PRODUCTS|s:13:"26,11,27,21,9";LOGIN_REDIR|s:0:"";JustAddedProduct|s:0:"";captchaCode|s:8:"cHl4c3Z4";FROM_REG|i:1;', 1336477450);

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipments`
--

CREATE TABLE IF NOT EXISTS `isc_shipments` (
  `shipmentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipcustid` int(10) unsigned NOT NULL DEFAULT '0',
  `shipvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `shipdate` int(11) NOT NULL DEFAULT '0',
  `shiptrackno` varchar(50) NOT NULL DEFAULT '',
  `shipping_module` varchar(100) NOT NULL DEFAULT '',
  `shipmethod` varchar(100) NOT NULL DEFAULT '',
  `shiporderid` int(10) unsigned NOT NULL DEFAULT '0',
  `shiporderdate` int(11) NOT NULL DEFAULT '0',
  `shipcomments` text,
  `shipbillfirstname` varchar(255) NOT NULL DEFAULT '',
  `shipbilllastname` varchar(255) NOT NULL DEFAULT '',
  `shipbillcompany` varchar(100) NOT NULL DEFAULT '',
  `shipbillstreet1` varchar(255) NOT NULL DEFAULT '',
  `shipbillstreet2` varchar(255) NOT NULL DEFAULT '',
  `shipbillsuburb` varchar(100) NOT NULL DEFAULT '',
  `shipbillstate` varchar(50) NOT NULL DEFAULT '',
  `shipbillzip` varchar(20) NOT NULL DEFAULT '',
  `shipbillcountry` varchar(50) NOT NULL DEFAULT '',
  `shipbillcountrycode` varchar(2) NOT NULL DEFAULT '',
  `shipbillcountryid` int(11) NOT NULL DEFAULT '0',
  `shipbillstateid` int(11) NOT NULL DEFAULT '0',
  `shipbillphone` varchar(50) NOT NULL DEFAULT '',
  `shipbillemail` varchar(250) NOT NULL DEFAULT '',
  `shipshipfirstname` varchar(100) NOT NULL DEFAULT '',
  `shipshiplastname` varchar(100) NOT NULL DEFAULT '',
  `shipshipcompany` varchar(100) NOT NULL DEFAULT '',
  `shipshipstreet1` varchar(255) NOT NULL DEFAULT '',
  `shipshipstreet2` varchar(255) NOT NULL DEFAULT '',
  `shipshipsuburb` varchar(100) NOT NULL DEFAULT '',
  `shipshipstate` varchar(50) NOT NULL DEFAULT '',
  `shipshipzip` varchar(20) NOT NULL DEFAULT '',
  `shipshipcountry` varchar(50) NOT NULL DEFAULT '',
  `shipshipcountrycode` varchar(2) NOT NULL DEFAULT '',
  `shipshipcountryid` int(11) NOT NULL DEFAULT '0',
  `shipshipstateid` int(11) NOT NULL DEFAULT '0',
  `shipshipphone` varchar(50) NOT NULL DEFAULT '',
  `shipshipemail` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`shipmentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipment_items`
--

CREATE TABLE IF NOT EXISTS `isc_shipment_items` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipid` int(10) unsigned NOT NULL DEFAULT '0',
  `itemprodid` int(10) unsigned NOT NULL DEFAULT '0',
  `itemordprodid` int(10) unsigned NOT NULL DEFAULT '0',
  `itemprodsku` varchar(250) NOT NULL DEFAULT '',
  `itemprodname` varchar(250) NOT NULL DEFAULT '',
  `itemqty` int(10) unsigned NOT NULL DEFAULT '0',
  `itemprodoptions` text,
  `itemprodvariationid` int(10) unsigned NOT NULL DEFAULT '0',
  `itemprodeventname` varchar(255) DEFAULT NULL,
  `itemprodeventdate` int(9) DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipping_addresses`
--

CREATE TABLE IF NOT EXISTS `isc_shipping_addresses` (
  `shipid` int(11) NOT NULL AUTO_INCREMENT,
  `shipcustomerid` int(11) NOT NULL DEFAULT '0',
  `shipfirstname` varchar(255) NOT NULL DEFAULT '',
  `shiplastname` varchar(255) NOT NULL DEFAULT '',
  `shipcompany` varchar(255) NOT NULL DEFAULT '',
  `shipaddress1` text,
  `shipaddress2` text,
  `shipcity` varchar(100) NOT NULL DEFAULT '',
  `shipstate` varchar(100) NOT NULL DEFAULT '',
  `shipzip` varchar(30) NOT NULL DEFAULT '',
  `shipcountry` varchar(100) NOT NULL DEFAULT '',
  `shipphone` varchar(50) NOT NULL DEFAULT '',
  `shipstateid` int(11) NOT NULL DEFAULT '0',
  `shipcountryid` int(11) NOT NULL DEFAULT '0',
  `shipdestination` enum('residential','commercial') NOT NULL DEFAULT 'residential',
  `shiplastused` int(11) NOT NULL DEFAULT '0',
  `shipformsessionid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipid`),
  KEY `i_shipping_addresses_shipcustomerid` (`shipcustomerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_shipping_addresses`
--

INSERT INTO `isc_shipping_addresses` (`shipid`, `shipcustomerid`, `shipfirstname`, `shiplastname`, `shipcompany`, `shipaddress1`, `shipaddress2`, `shipcity`, `shipstate`, `shipzip`, `shipcountry`, `shipphone`, `shipstateid`, `shipcountryid`, `shipdestination`, `shiplastused`, `shipformsessionid`) VALUES
(1, 1, 'Tien', 'Le', '', 'Thuy Khue', '', 'Ha Noi', 'Ha Noi', '10000', 'Viet Nam', '0919891103', 0, 232, 'residential', 1336388693, 2);

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipping_methods`
--

CREATE TABLE IF NOT EXISTS `isc_shipping_methods` (
  `methodid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zoneid` int(10) unsigned NOT NULL DEFAULT '0',
  `methodname` varchar(150) NOT NULL DEFAULT '',
  `methodmodule` varchar(100) NOT NULL DEFAULT '',
  `methodhandlingfee` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `methodenabled` int(1) NOT NULL DEFAULT '1',
  `methodvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`methodid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_shipping_methods`
--

INSERT INTO `isc_shipping_methods` (`methodid`, `zoneid`, `methodname`, `methodmodule`, `methodhandlingfee`, `methodenabled`, `methodvendorid`) VALUES
(1, 1, 'Flat Rate Per Order', 'shipping_flatrate', 0.0000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipping_vars`
--

CREATE TABLE IF NOT EXISTS `isc_shipping_vars` (
  `variableid` int(11) NOT NULL AUTO_INCREMENT,
  `methodid` int(10) unsigned NOT NULL DEFAULT '0',
  `zoneid` int(10) unsigned NOT NULL DEFAULT '0',
  `modulename` varchar(100) NOT NULL DEFAULT '',
  `variablename` varchar(100) NOT NULL DEFAULT '',
  `variableval` text,
  `varvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`variableid`),
  KEY `modulename` (`modulename`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_shipping_vars`
--

INSERT INTO `isc_shipping_vars` (`variableid`, `methodid`, `zoneid`, `modulename`, `variablename`, `variableval`, `varvendorid`) VALUES
(1, 1, 1, 'shipping_flatrate', 'is_setup', '1', 0),
(2, 1, 1, 'shipping_flatrate', 'shippingcost', '20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipping_zones`
--

CREATE TABLE IF NOT EXISTS `isc_shipping_zones` (
  `zoneid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zonename` varchar(100) NOT NULL DEFAULT '',
  `zonetype` enum('country','state','zip') DEFAULT 'country',
  `zonefreeshipping` int(1) NOT NULL DEFAULT '0',
  `zonefreeshippingtotal` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `zonehandlingtype` enum('none','global','module') DEFAULT 'none',
  `zonehandlingfee` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `zonehandlingseparate` int(1) NOT NULL DEFAULT '1',
  `zoneenabled` int(1) NOT NULL DEFAULT '1',
  `zonevendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `zonedefault` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`zoneid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_shipping_zones`
--

INSERT INTO `isc_shipping_zones` (`zoneid`, `zonename`, `zonetype`, `zonefreeshipping`, `zonefreeshippingtotal`, `zonehandlingtype`, `zonehandlingfee`, `zonehandlingseparate`, `zoneenabled`, `zonevendorid`, `zonedefault`) VALUES
(1, 'Default Zone', 'country', 0, 0.0000, 'none', 0.0000, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_shipping_zone_locations`
--

CREATE TABLE IF NOT EXISTS `isc_shipping_zone_locations` (
  `locationid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zoneid` int(10) unsigned NOT NULL DEFAULT '0',
  `locationtype` enum('country','state','zip') DEFAULT 'country',
  `locationvalueid` int(10) unsigned NOT NULL DEFAULT '0',
  `locationvalue` varchar(100) NOT NULL DEFAULT '0',
  `locationcountryid` int(10) unsigned NOT NULL DEFAULT '0',
  `locationvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`locationid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_shopping_comparison_categories`
--

CREATE TABLE IF NOT EXISTS `isc_shopping_comparison_categories` (
  `id` int(11) NOT NULL,
  `shopping_comparison_id` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `num_children` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shopping_comparison_id`,`id`),
  KEY `i_shopping_comparison_categories_path` (`path`),
  KEY `i_shopping_comparison_categories_comparison_id` (`shopping_comparison_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_shopping_comparison_category_associations`
--

CREATE TABLE IF NOT EXISTS `isc_shopping_comparison_category_associations` (
  `category_id` int(11) NOT NULL,
  `shopping_comparison_id` varchar(255) NOT NULL,
  `shopping_comparison_category_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`shopping_comparison_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_shopping_comparison_taxonomies`
--

CREATE TABLE IF NOT EXISTS `isc_shopping_comparison_taxonomies` (
  `id` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `last_updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_subscribers`
--

CREATE TABLE IF NOT EXISTS `isc_subscribers` (
  `subscriberid` int(11) NOT NULL AUTO_INCREMENT,
  `subemail` varchar(250) NOT NULL DEFAULT '',
  `subfirstname` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`subscriberid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_system_log`
--

CREATE TABLE IF NOT EXISTS `isc_system_log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `logtype` enum('general','php','sql','shipping','payment','notification','emailintegration','ebay','shoppingcomparison') DEFAULT NULL,
  `logmodule` varchar(100) NOT NULL DEFAULT '',
  `logseverity` int(1) NOT NULL DEFAULT '4',
  `logsummary` varchar(250) NOT NULL DEFAULT '',
  `logmsg` longtext,
  `logdate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `isc_system_log`
--

INSERT INTO `isc_system_log` (`logid`, `logtype`, `logmodule`, `logseverity`, `logsummary`, `logmsg`, `logdate`) VALUES
(1, 'php', '', 3, 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened.', 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened. in C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php at 4265<br/>\n<table style="width: 100%; margin: 10px 0; border: 1px solid #aaa; border-collapse: collapse; border-bottom: 0;" cellspacing="0" cellpadding="0" border="0">\n<thead><tr>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">File</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Line</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Function</th>\n</tr></thead>\n<tbody>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">[PHP]</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">&nbsp;</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_LOG->HandlePHPErrors</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">4265</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">trigger_error</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.settings.accounting.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">40</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ParseLangFile</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.auth.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">693</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_SETTINGS_ACCOUNTING->HandleToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.engine.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">102</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_AUTH->HandleSTSToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\index.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">31</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_ENGINE->HandlePage</td>\n</tr>\n</tbody></table>\n', 1336377655),
(2, 'php', '', 3, 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened.', 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened. in C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php at 4265<br/>\n<table style="width: 100%; margin: 10px 0; border: 1px solid #aaa; border-collapse: collapse; border-bottom: 0;" cellspacing="0" cellpadding="0" border="0">\n<thead><tr>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">File</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Line</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Function</th>\n</tr></thead>\n<tbody>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">[PHP]</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">&nbsp;</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_LOG->HandlePHPErrors</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">4265</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">trigger_error</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.settings.accounting.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">40</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ParseLangFile</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.auth.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">693</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_SETTINGS_ACCOUNTING->HandleToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.engine.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">102</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_AUTH->HandleSTSToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\index.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">31</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_ENGINE->HandlePage</td>\n</tr>\n</tbody></table>\n', 1336377734),
(3, 'php', '', 3, 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened.', 'The language file C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2/modules/accounting/quickbooks/lang/vn/language.ini couldn''t be opened. in C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php at 4265<br/>\n<table style="width: 100%; margin: 10px 0; border: 1px solid #aaa; border-collapse: collapse; border-bottom: 0;" cellspacing="0" cellpadding="0" border="0">\n<thead><tr>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">File</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Line</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Function</th>\n</tr></thead>\n<tbody>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">[PHP]</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">&nbsp;</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_LOG->HandlePHPErrors</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\general.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">4265</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">trigger_error</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.settings.accounting.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">40</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ParseLangFile</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.auth.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">693</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_SETTINGS_ACCOUNTING->HandleToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\includes\\classes\\class.engine.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">102</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_AUTH->HandleSTSToDo</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\admin\\index.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">31</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_ADMIN_ENGINE->HandlePage</td>\n</tr>\n</tbody></table>\n', 1336377741),
(4, 'php', '', 3, 'mail() [<a href=''function.mail''>function.mail</a>]: Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set()', 'mail() [<a href=''function.mail''>function.mail</a>]: Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() in C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\email.php at 1457<br/>\n<table style="width: 100%; margin: 10px 0; border: 1px solid #aaa; border-collapse: collapse; border-bottom: 0;" cellspacing="0" cellpadding="0" border="0">\n<thead><tr>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">File</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Line</th>\n<th style="border-bottom: 1px solid #aaa; background: #ccc; padding: 4px; text-align: left; font-size: 11px;">Function</th>\n</tr></thead>\n<tbody>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">[PHP]</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">&nbsp;</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_LOG->HandlePHPErrors</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\email.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">1457</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">mail</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\email.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">1359</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">Email_API->_Send_Email</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\lib\\email.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">1301</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">Email_API->_Send_Recipient</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\includes\\classes\\class.customer.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">470</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">Email_API->Send</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\includes\\classes\\class.customer.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">371</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_CUSTOMER->CreateCustomerAccount</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\includes\\classes\\class.customer.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">31</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_CUSTOMER->CreateAccountStep2</td>\n</tr>\n<tr>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">C:\\xampp\\htdocs\\ISC_7.1.1_NULLED_With_templates_2\\login.php</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">5</td>\n<td style="font-size: 11px; padding: 4px; border-bottom: 1px solid #ccc;">ISC_CUSTOMER->HandlePage</td>\n</tr>\n</tbody></table>\n', 1336388694);

-- --------------------------------------------------------

--
-- Table structure for table `isc_tasks`
--

CREATE TABLE IF NOT EXISTS `isc_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(128) NOT NULL,
  `class` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `reservation` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `queue_reservation_time` (`queue`,`reservation`,`time`),
  KEY `reservation_time` (`reservation`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_task_status`
--

CREATE TABLE IF NOT EXISTS `isc_task_status` (
  `id` int(10) unsigned NOT NULL,
  `queue` varchar(128) NOT NULL,
  `class` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `begin` int(10) unsigned NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `message` text,
  `end` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `time` (`begin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_classes`
--

CREATE TABLE IF NOT EXISTS `isc_tax_classes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `isc_tax_classes`
--

INSERT INTO `isc_tax_classes` (`id`, `name`) VALUES
(1, 'Non-Taxable Products'),
(2, 'Shipping'),
(3, 'Gift Wrapping');

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_rates`
--

CREATE TABLE IF NOT EXISTS `isc_tax_rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `priority` int(11) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `default_rate` decimal(20,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_rate_class_rates`
--

CREATE TABLE IF NOT EXISTS `isc_tax_rate_class_rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_rate_id` int(11) unsigned NOT NULL,
  `tax_class_id` int(11) unsigned NOT NULL,
  `rate` decimal(20,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_zones`
--

CREATE TABLE IF NOT EXISTS `isc_tax_zones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` enum('country','state','zip') DEFAULT 'country',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_tax_zones`
--

INSERT INTO `isc_tax_zones` (`id`, `name`, `type`, `enabled`, `default`) VALUES
(1, 'Default Zone', 'country', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_zone_customer_groups`
--

CREATE TABLE IF NOT EXISTS `isc_tax_zone_customer_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` int(11) unsigned NOT NULL,
  `customer_group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_tax_zone_locations`
--

CREATE TABLE IF NOT EXISTS `isc_tax_zone_locations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` int(11) unsigned NOT NULL,
  `type` enum('country','state','zip') NOT NULL DEFAULT 'country',
  `value_id` int(11) unsigned DEFAULT '0',
  `value` varchar(200) DEFAULT '',
  `country_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `tax_zone_id` (`tax_zone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_transactions`
--

CREATE TABLE IF NOT EXISTS `isc_transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` int(10) unsigned DEFAULT NULL,
  `transactionid` varchar(160) DEFAULT NULL,
  `providerid` varchar(160) DEFAULT NULL,
  `amount` decimal(20,4) NOT NULL,
  `message` text NOT NULL,
  `status` int(10) unsigned DEFAULT '0',
  `transactiondate` int(11) NOT NULL,
  `extrainfo` text,
  PRIMARY KEY (`id`),
  KEY `i_order_transation` (`orderid`,`transactionid`),
  KEY `i_transaction_provider` (`transactionid`,`providerid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_unique_visitors`
--

CREATE TABLE IF NOT EXISTS `isc_unique_visitors` (
  `uniqueid` int(11) NOT NULL AUTO_INCREMENT,
  `datestamp` int(11) NOT NULL DEFAULT '0',
  `numuniques` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uniqueid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `isc_unique_visitors`
--

INSERT INTO `isc_unique_visitors` (`uniqueid`, `datestamp`, `numuniques`) VALUES
(1, 1336348800, 1),
(2, 1336410000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `isc_users`
--

CREATE TABLE IF NOT EXISTS `isc_users` (
  `pk_userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `userpass` varchar(50) NOT NULL DEFAULT '',
  `userfirstname` varchar(50) NOT NULL DEFAULT '',
  `userlastname` varchar(50) NOT NULL DEFAULT '',
  `userstatus` tinyint(1) NOT NULL DEFAULT '0',
  `useremail` varchar(250) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `usertoken` varchar(50) NOT NULL DEFAULT '',
  `userapi` tinyint(4) NOT NULL DEFAULT '0',
  `uservendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `userrole` varchar(20) NOT NULL DEFAULT 'custom',
  `salt` varchar(16) NOT NULL DEFAULT '',
  `updated` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `attempt_counter` smallint(2) NOT NULL DEFAULT '0',
  `attempt_lockout` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `isc_users`
--

INSERT INTO `isc_users` (`pk_userid`, `username`, `userpass`, `userfirstname`, `userlastname`, `userstatus`, `useremail`, `token`, `usertoken`, `userapi`, `uservendorid`, `userrole`, `salt`, `updated`, `last_login`, `attempt_counter`, `attempt_lockout`) VALUES
(1, 'admin', 'f2d10f069beda649fc4ad622435afae5', '', '', 1, 'lexuantien0311@gmail.com', '15KN96LT4Z71T8JU505FZ824', '4cc927fc21eaaf7a3008c7e32292008e', 0, 0, 'admin', 'dc1c53dd1cb6143e', 1336374389, 1336476931, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `isc_user_password_histories`
--

CREATE TABLE IF NOT EXISTS `isc_user_password_histories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `salt` varchar(16) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`updated`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_user_password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `isc_user_password_reset_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(32) NOT NULL DEFAULT '',
  `expiry` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `user_id` (`user_id`,`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_vendors`
--

CREATE TABLE IF NOT EXISTS `isc_vendors` (
  `vendorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vendorname` varchar(200) NOT NULL DEFAULT '',
  `vendorfriendlyname` varchar(100) NOT NULL DEFAULT '',
  `vendorphone` varchar(50) NOT NULL DEFAULT '',
  `vendorbio` text NOT NULL,
  `vendoraddress` varchar(200) NOT NULL DEFAULT '',
  `vendorcity` varchar(100) NOT NULL DEFAULT '',
  `vendorcountry` varchar(100) NOT NULL DEFAULT '',
  `vendorstate` varchar(100) NOT NULL DEFAULT '',
  `vendorzip` varchar(20) NOT NULL DEFAULT '',
  `vendornumsales` int(10) unsigned NOT NULL DEFAULT '0',
  `vendororderemail` varchar(200) NOT NULL DEFAULT '',
  `vendorshipping` int(1) NOT NULL DEFAULT '0',
  `vendoremail` varchar(200) NOT NULL DEFAULT '',
  `vendoraccesscats` text,
  `vendorlogo` varchar(200) NOT NULL DEFAULT '',
  `vendorphoto` varchar(200) NOT NULL DEFAULT '',
  `vendorprofitmargin` decimal(20,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`vendorid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `isc_vendors`
--

INSERT INTO `isc_vendors` (`vendorid`, `vendorname`, `vendorfriendlyname`, `vendorphone`, `vendorbio`, `vendoraddress`, `vendorcity`, `vendorcountry`, `vendorstate`, `vendorzip`, `vendornumsales`, `vendororderemail`, `vendorshipping`, `vendoremail`, `vendoraccesscats`, `vendorlogo`, `vendorphoto`, `vendorprofitmargin`) VALUES
(1, 'Apple Inc.', 'apple-inc', '1-800-MY-APPLE', 'Apple Inc., is an American multinational corporation which designs and manufactures consumer electronics and software products. The company''s best-known hardware products include Macintosh computers, iPod portable media players, and the iPhone. Apple software includes the Mac OS X operating system, the iTunes media browser, the iLife suite of multimedia and creativity software, and Final Cut Studio, a suite of professional audio- and film-industry software products. <br/><br/>Apple operates more than 250 retail stores in nine countries and an online store where hardware and software products are sold.<br/>', '1 Infinite Loop', 'Cupertino', 'United States', 'California', '95014', 0, '', 0, 'example@example.com', '', '', '', 0.0000),
(2, 'Elgato', 'elgato', '555-555-555', 'Elgato Systems is a hardware and software manufacturer that makes television viewing and recording products specifically for the Macintosh family of personal computers, including internationally acclaimed EyeTV software.<br/>', 'Example Address', 'Example City', 'United States', 'California', '90210', 0, '', 0, 'example@example.com', '', '', '', 0.0000),
(3, 'Logitech', 'logitech', '555-555-555', 'Logitech International S.A., headquartered in Romanel-sur-Morges, Switzerland, is the holding company for Logitech Group, a Chinese peripheral-device maker. Logitech makes peripheral devices for PCs, including keyboards, mice, game controllers and webcams. Logitech also makes home and PC speakers, headphones, wireless audio devices, as well as audio devices for MP3 players and mobile phones.<br/>', 'Example Address', 'Example City', 'United States', 'California', '90210', 0, '', 0, 'example@example.com', '', '', '', 10.0000),
(4, 'Microsoft', 'microsoft', '555-555-555', 'Microsoft Corporation is a multinational computer technology corporation that develops, manufactures, licenses, and supports a wide range of software products for computing devices. Headquartered in Redmond, Washington, USA, its best selling products are the Microsoft Windows operating system and the Microsoft Office suite of productivity software.<br/>', 'Example Address', 'Example City', 'United States', 'California', '90210', 0, '', 0, 'example@example.com', '', '', '', 0.0000);

-- --------------------------------------------------------

--
-- Table structure for table `isc_vendor_payments`
--

CREATE TABLE IF NOT EXISTS `isc_vendor_payments` (
  `paymentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paymentfrom` int(11) NOT NULL DEFAULT '0',
  `paymentto` int(11) NOT NULL DEFAULT '0',
  `paymentvendorid` int(10) unsigned NOT NULL DEFAULT '0',
  `paymentamount` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `paymentforwardbalance` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `paymentdate` int(11) NOT NULL DEFAULT '0',
  `paymentdeducted` int(1) NOT NULL DEFAULT '0',
  `paymentmethod` varchar(100) NOT NULL DEFAULT '',
  `paymentcomments` text,
  PRIMARY KEY (`paymentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_wishlists`
--

CREATE TABLE IF NOT EXISTS `isc_wishlists` (
  `wishlistid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `wishlistname` varchar(255) NOT NULL,
  `ispublic` tinyint(4) NOT NULL,
  `wishlisttoken` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`wishlistid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `isc_wishlist_items`
--

CREATE TABLE IF NOT EXISTS `isc_wishlist_items` (
  `wishlistitemid` int(11) NOT NULL AUTO_INCREMENT,
  `wishlistid` int(11) NOT NULL,
  `productid` int(11) NOT NULL DEFAULT '0',
  `variationid` int(11) DEFAULT NULL,
  PRIMARY KEY (`wishlistitemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
