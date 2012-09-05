-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2012 at 06:04 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuongnhat_thoitrang`
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
-- Table structure for table `n_tn_policy`
--

CREATE TABLE IF NOT EXISTS `n_tn_policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(15000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `n_tn_policy`
--

INSERT INTO `n_tn_policy` (`id`, `content`) VALUES
(1, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" width="900">\r\n				Welcome to our web site (&quot;store.valentino.com&quot;). These General Terms and Conditions of Use govern the access to and use of store.valentino.com. The access to and use of this web site as well as the purchase of products on store.valentino.com are based on the assumption that these General Terms and Conditions of Use have been read, understood and accepted by you. This website is managed and maintained by Yoox S.p.A. (&quot;Provider&quot;), with registered office in Italy at Via Nannetti 1, 40069, Zola Predosa (Bologna), business register number, tax code and VAT number 02050461207, fully paid share capital of EUR 570.544,00. Request for further information can be made through our Customer Care or sent to the address: <a href="mailto:info@store.valentino.com">info@store.valentino.com</a>. If you need any assistance, go to the <a href="http://store.valentino.com/cms/help/home.asp">Customer Care area</a>, where you will find information on orders, shipping, refunds and returning products purchased on store.valentino.com, a registration form, tips and other general information on the services provided by store.valentino.com. Remember that you can always contact the Provider by e-mail at <a href="mailto:info@store.valentino.com">info@store.valentino.com</a>.<br />\r\n				<br />\r\n				For any other legal information, go to the sections: <a href="http://store.valentino.com/cms/legal/saleterms.asp">General Terms and Conditions of Sale</a>, <a href="http://store.valentino.com/cms/legal/returnpolicy.asp">Return Policy</a> and <a href="http://store.valentino.com/cms/legal/privacypolicy.asp">Privacy Policy</a> of store.valentino.com. The Provider may amend or simply update all or part of these General Terms and Conditions of Use. Any amendment or update of the General Terms and Conditions of Use shall be posted for our users on the Home Page of store.valentino.com as soon as such amendments or updates have been made and shall be binding as soon as they are published on the web site in this section. Therefore, you should regularly access this section on the web site in order to check the publication of the most recent and updated General Terms and Conditions of Use of store.valentino.com. If you do not agree to all or part of the store.valentino.com&rsquo;s General Terms and Conditions of Use, please do not use our web site.<br />\r\n				<br />\r\n				The access to and use of store.valentino.com, including display of web pages, communication with Provider, downloading product information and making purchases on the web site, are carried out by our users exclusively for personal purposes, which should in no way be connected to any trade, business or professional activity. Remember that you will be liable for your use of store.valentino.com and its contents. The Provider shall not be considered liable for any use of the web site and its contents made by its users that is not compliant with the laws and regulations in force, without prejudice to Provider&#39;s liability for intentional torts and gross negligence.<br />\r\n				<br />\r\n				In particular, you will be liable for communicating information or data which is not correct, false or concerning third parties (in the event such third parties have not given their consent) as well as for any improper use of such data or information.<br />\r\n				<br />\r\n				<br />\r\n				<b>1. Privacy Policy</b><br />\r\n				We recommend that you read the <a href="http://store.valentino.com/cms/legal/privacypolicy.asp">Privacy Policy</a> which also applies in the event that users access to store.valentino.com and use the relevant services without making purchases. The Privacy Policy will help you understand how and for what purposes store.valentino.com collects and uses your personal data.<br />\r\n				<br />\r\n				<br />\r\n				<b>2. Intellectual Property Rights</b><br />\r\n				All content included on this Site, such as works, images, pictures, dialogues, music, sounds, videos, documents, drawings, figures, logos, menus, web pages, graphics, colours, schemes, tools, fonts, designs, diagrams, layouts, methods, processes, functions and software (collectively, &ldquo;Content&rdquo;), is the property of VALENTINO or Provider and is protected by national and international copyright and other intellectual property laws. You may not reproduce, publish, distribute, display, modify, create derivative work from, or exploit in any way, in whole or in part, the Content without the prior express written consent of VALENTINO and Provider as the case may be.<br />\r\n				VALENTINO and/or Provider shall have the exclusive right to authorize or prohibit in their sole discretion any reproduction, publication, distribution, display, modification, creation of derivative work from, or exploitation in any way of, in whole or in part, the Content. VALENTINO and/or Provider shall have the right, at any time, to claim the authorship of any Content posted on this Site and to object to any use, distortion or other modification of such Content.<br />\r\n				Any reproduction, publication, distribution, display, modification, creation of derivative work from, or exploitation in any way of, the Content expressly authorized in writing by VALENTINO and Provider shall be carried out by you for lawful purposes only and in compliance with all applicable laws.<br />\r\n				<br />\r\n				<br />\r\n				<b>3. Links to Other Web Sites</b><br />\r\n				store.valentino.com may contain links to other web sites which are in no way connected to store.valentino.com or the Provider. The Provider does not control or monitor such third party web sites or their contents. The Provider shall not be held liable for the contents of such sites and/or for the rules adopted by them in respect of, but not limited to, your privacy and the processing of your personal data when you are visiting those web sites. Please, pay attention when you access these web sites through the links provided on store.valentino.com and carefully read their terms and conditions of use and their privacy policies. Our General Terms and Conditions of Use and Privacy Policy do not apply to the web sites of third parties. store.valentino.com provides links to other web sites exclusively to help its users in searching and surfing the Internet and to allow links to web sites on the Internet. When the Provider provides links to other web sites, the Provider does not recommend that to its users access these web sites and it does not provide any guarantees to their web content or to services and products supplied and sold by these web sites to Internet users.<br />\r\n				<br />\r\n				<br />\r\n				<b>4. Links to store.valentino.com</b><br />\r\n				Please, contact the Provider at the following e-mail address: <a href="mailto:info@store.valentino.com">info@store.valentino.com</a>. if you are interested in linking the Home page of store.valentino.com and other web pages which can be publicly accessible. You are requested to contact the Provider for requesting our consent to linking store.valentino.com. The Provider grants links to store.valentino.com free of charge and on a non-exclusive basis. The Provider is entitled to object to certain links to its web site in the event that the applicant who intends to activate links to store.valentino.com has, in the past, adopted unfair commercial or business practices which are not generally adopted or accepted by the market operators, or has made unfair competition activities vis-&agrave;-vis the Provider or the latter&#39;s suppliers, or when the Provider fears that such practices or such activities might be adopted by the applicant in the future. In any event, it is forbidden to post deep links (such as deep frames) to store.valentino.com or to use unauthorised meta-tags without the Provider consent.<br />\r\n				<br />\r\n				<br />\r\n				<b>5. Disclaimers on Content</b><br />\r\n				The Provider does not warrant that the contents of the web site are appropriate or lawful in other Countries outside Italy. However, in the event that such contents are deemed to be unlawful or illegal in some of these Countries, please do not access this web site and, where you nonetheless choose to access it, we hereby inform you your use of the services provided by store.valentino.com shall be your exclusive and personal responsibility. The Provider has also adopted measures to ensure that the content of store.valentino.com is accurate and does not contain any incorrect or out-of-date information. However, the Provider cannot be held liable for the accuracy and completeness of the content, except for its liability for tort and gross negligence and as otherwise provided for by the law.<br />\r\n				Moreover, the Provider cannot guarantee that the web site will operate continuously, without any interruptions and errors due to the connection to the Internet. In the event of any problem in using our web site please contact our Customer Care by visting our <a href="http://store.valentino.com/cms/help/home.asp">Customer Care area</a> or write to the following e-mail address: <a href="mailto:info@store.valentino.com">info@store.valentino.com</a>. A Provider representative will be at your disposal to assist and help you to restore your access to the web site, as far as possible. At the same time, please contact your Internet services provider or check that each device for Internet connection and access to web content is correctly activated, including your Internet browser. The dynamic nature of the Internet and web content may not allow store.valentino.com to operate without any suspensions, interruptions or discontinuity due to updating the web site. The Provider has adopted adequate technical and organisational security measures to protect services on store.valentino.com, integrity of data and electronic communications in order to prevent unauthorised use of or access to data, as well as to prevent risks of dissemination, destruction and loss of data and confidential/non confidential information regarding users of store.valentino.com, and to avoid unauthorised or unlawful access to such data and information.<br />\r\n				<br />\r\n				<br />\r\n				<b>6. Our Business Policy</b><br />\r\n				The Provider has adopted a business policy; its mission consists of selling products through its services and its web site to &quot;consumer&quot; only. &quot;Consumer&quot; shall mean any natural person who is acting on store.valentino.com for purposes which are outside his or her trade, business or professional activity (if any). If you are not a consumer, please do not use our services for purchasing products on store.valentino.com. The Provider shall be entitled to object to the processing of purchase orders from persons other than consumers and to any other purchase order which does not comply with the General Terms and Conditions of Sale and these General Terms and Conditions of Use.<br />\r\n				<br />\r\n				<br />\r\n				<b>7. Governing Law</b><br />\r\n				These General Terms and Conditions of Use are governed by Italian law.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(2, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" width="900">\r\n				The following General Terms and Conditions of Sale govern the offer and sale of products on our web site (&quot;store.valentino.com &quot;). The products purchased on store.valentino.com are directly sold by YOOX S.p.A. (&quot;YOOX&quot;), with registered office in Italy at Via Nannetti 1, 40069, Zola Predosa (Bologna), business register number, tax code and VAT number 02050461207, fully paid share capital of EUR 570.544,00 (hereinafter referred to as &quot;the Vendor&quot; or &quot;We&quot; or &quot;Us&quot;). Requests for information should be made through our Customer Care: <a href="http://store.valentino.com/cms/help/contactform.asp">click here</a> to contact Customer Care. For additional legal information go to the <a href="http://store.valentino.com/cms/help/contactform.asp">Customer Care</a> area. There you can find information on orders, shipments, refunds and returning products purchased on store.valentino.com. Remember you can also contact us by e-mail at the following e-mail address: <a href="mailto:info@store.valentino.com">info@store.valentino.com</a>. For any other legal information, go to the sections: <a href="http://store.valentino.com/cms/legal/useterms.asp">General Terms and Conditions of Use</a>, <a href="http://store.valentino.com/cms/legal/privacypolicy.asp">Privacy Policy</a> and <a href="http://store.valentino.com/cms/legal/returnpolicy.asp">Return Policy</a>.<br />\r\n				<br />\r\n				<br />\r\n				<b>1.</b> <b>Our Business Policy</b><br />\r\n				1.1<br />\r\n				The Vendor offers products for sale on store.valentino.com and its e-commerce business services are available exclusively to its end users, i.e. the &quot;Consumers&quot;.<br />\r\n				<br />\r\n				1.2<br />\r\n				&quot;Consumer&quot; shall mean any individual who is acting for purposes which are outside his or her trade, business or profession. If you are not a Consumer, please do not buy any products on store.valentino.com.<br />\r\n				<br />\r\n				1.3<br />\r\n				The Vendor reserves the right not to process orders received from users who are not &quot;Consumers&quot; and any other order which does not comply with the Vendor&#39;s business policy.<br />\r\n				<br />\r\n				1.4<br />\r\n				These General Terms and Conditions of Sale exclusively regulate the offer, transmission and acceptance of purchase orders relating to products on store.valentino.com between the users of store.valentino.com and YOOX.<br />\r\n				<br />\r\n				1.5<br />\r\n				The General Terms and Conditions of Sale do not regulate the supply of services or the sale of products performed by third parties that are on store.valentino.com through links, banners or other hypertext links. Before sending orders and purchasing products and services from those third parties, we recommend that you verify the third party&#39;s terms and conditions, since the Vendor shall under no circumstances be deemed liable for the supply of services provided by third parties or for the execution of e-commerce transactions between the users of store.valentino.com and third parties.<br />\r\n				<br />\r\n				<br />\r\n				<b>2. </b><b>How to Execute a Contract with the Vendor</b><br />\r\n				2.1<br />\r\n				In order to place an order for the purchase of one or more products on store.valentino.com, you must fill out the online order form and send it electronically to the Vendor, following the relevant instructions.<br />\r\n				<br />\r\n				2.2<br />\r\n				The order form contains a summary of these General Terms and Conditions of Sale, information on the main characteristics of each product ordered and corresponding unit price (including all applicable fees and taxes), the type of payment that you may use in order to purchase each product, shipping terms for the purchased products, shipping and delivery costs and the terms and conditions for returning purchased products.<br />\r\n				<br />\r\n				2.3<br />\r\n				An order shall be deemed to have been submitted when the Vendor receives your order form electronically and the order&#39;s information has been verified as correct.<br />\r\n				<br />\r\n				2.4<br />\r\n				Before submitting your order form for the purchase of products, you will be asked to carefully read the General Terms and Conditions of Sale, to print a copy using the print option and to save or reproduce a copy thereof for your own personal use.<br />\r\n				<br />\r\n				2.5<br />\r\n				The order form will be filed in our data base for the time required to process your order and as provided by law. You may access your order form by clicking on the section called Order Status.<br />\r\n				<br />\r\n				2.6<br />\r\n				Before submitting the order form, you will be asked to identify and correct possible input errors.<br />\r\n				<br />\r\n				2.7<br />\r\n				English is the language used for executing contracts with Vendor.<br />\r\n				<br />\r\n				2.8<br />\r\n				After your order form has been submitted, the Vendor will process your order.<br />\r\n				<br />\r\n				2.9<br />\r\n				The Vendor may not process purchases when there are not sufficient guarantees of solvency, when orders are incomplete or incorrect, or the products are no longer available. In the above cases, we shall inform you by e-mail that the contract has not been executed and that the Vendor has not carried out your purchase order specifying the reasons thereof. If the products displayed on store.valentino.com are no longer available at the time of your last access and once the Vendor has received your order form, the Vendor shall inform you of the unavailability of the ordered products within thirty (30) days from the day after Vendor received your order. If the order form has been sent and the price has been paid for items that are no longer available, the Vendor will refund the amount paid for those items.<br />\r\n				<br />\r\n				2.10<br />\r\n				By submitting an order form to and making a contract with the Vendor, you unconditionally accept and undertake to observe the provisions of these General Terms and Conditions of Sale. Should you not agree with certain provisions of these General Terms and Conditions of Sale, please do not submit your order form for the purchase of products on store.valentino.com.<br />\r\n				<br />\r\n				2.11<br />\r\n				By submitting an order form, you agree and accept these General Terms and Conditions of Sale as well as further conditions contained on store.valentino.com, even through links, including the <a href="http://store.valentino.com/cms/legal/useterms.asp">General Terms and Conditions of Use</a> and <a href="http://store.valentino.com/cms/legal/privacypolicy.asp">Privacy Policy</a>.<br />\r\n				<br />\r\n				2.12<br />\r\n				Upon submission of an order form, the Vendor shall send you a purchase order receipt e-mail, containing a summary of the information related to the order form (General Terms and Conditions of Sale, the products&#39; main characteristics, detailed information on the price, terms of payment, return policy and shipping costs).<br />\r\n				<br />\r\n				<br />\r\n				<b>3. </b><b>Guarantees and Product Price Indication</b><br />\r\n				3.1<br />\r\n				On store.valentino.com, we only offer products marked with theVALENTINO trademark. These products are purchased by us directly from the fashion house and/or the manufacturer authorized by the fashion house.<br />\r\n				<br />\r\n				3.2<br />\r\n				The Vendor does not sell second-hand products, flawed products or products of lower quality than the corresponding market standards.<br />\r\n				<br />\r\n				3.3<br />\r\n				The main characteristics of products are shown on store.valentino.com on each product page. The products offered for sale on store.valentino.com may not exactly correspond to the real garments in terms of image and colours due to the Internet browser or monitor used.<br />\r\n				<br />\r\n				3.4<br />\r\n				Prices are subject to change. Check the final price of sale before sending the relevant order form.<br />\r\n				<br />\r\n				3.5<br />\r\n				Purchase orders from Countries not included among those displayed on the splash page cannot be accepted by the Vendor.<br />\r\n				<br />\r\n				3.6<br />\r\n				All Products come with an identification tag attached with a disposable seal. Do not remove the tag or seal from the purchased products should you wish to return the purchased product.<br />\r\n				<br />\r\n				3.7<br />\r\n				Should you decide to exercise your right to return purchased products, the Vendor has the right to not accept returned products that are returned without the corresponding tag or seal or that have been altered from their original status or damaged.<br />\r\n				<br />\r\n				<br />\r\n				<b>4. </b><b>Customs and Duties </b><br />\r\n				4.1<br />\r\n				Upon arrival in your Country the contents of your order may be subject to Customs fees (taxes, duties, processing fees, brokerage fees, etc.), which are responsibility of the customer receiving the order. These fees are not under the Vendor&#39;s control. For this reason we recommend you verify with your local Customs office before you place an order. The Vendor is unable to estimate customs fees, taxes, duties, etc. so please contact your local authorities or Customs office for detailed information.<br />\r\n				<br />\r\n				4.2<br />\r\n				Both the item prices as well as the shipping charges you pay to We do NOT include Customs fees, import taxes, brokerage fees, or duties.<br />\r\n				<br />\r\n				4.3<br />\r\n				Should you refuse your order at the time of arrival or should you refuse to pay the Customs fees when your order arrives, the shipment will be returned to the Vendor and we will be charged the Customs fees plus return shipping costs. If you receive your order and accept to pay the Customs fees upon delivery, the Vendor will not issue refunds for the same in case of return of the purchased products.<br />\r\n				<br />\r\n				4.4<br />\r\n				Customs processing may delay the delivery of your order. Should you experience such delays please check with your local Customs offices. The invoice for the Customs fees could arrive weeks after you receive your order, separately from the same.<br />\r\n				<br />\r\n				<br />\r\n				<b>5.</b> <b>Payments</b><br />\r\n				5.1<br />\r\n				Payment of the product prices and relevant shipping costs must be made by using one of the procedures indicated on the order form.<br />\r\n				<br />\r\n				5.2<br />\r\n				In case of payment by Credit/Debit Card, all details (for example, card number or expiration date) will be sent by encrypted protocol to Banca Sella or other banks which provide remote electronic payment services, without third parties having any access thereto whatsoever. Such details will not be used by the Vendor except for performing the procedure relevant to your purchase or issuing refunds in the case of returns in compliance with the exercise of your return right or for reporting cases of fraud to the police. The price for the purchase of products and the corresponding shipping costs, as indicated in the order form, will be charged to your current account only when the purchased products are actually shipped.<br />\r\n				<br />\r\n				<br />\r\n				<b>6.</b> <b>Shipping and Delivery of the Products </b><br />\r\n				For specific product shipping and delivery procedures see the <a href="http://store.valentino.com/cms/help/contactform.asp">Customer Care</a> area. Please read these sections carefully. The information provided in these sections forms an integral part of these General Terms and Conditions of Sale and, consequently, shall be deemed to be fully read and accepted by you at the time your order form is sent.<br />\r\n				<br />\r\n				<br />\r\n				<b>7.</b> <b>Customer Care</b><br />\r\n				Please contact our Customer Care for further information: <a href="http://store.valentino.com/cms/help/contactform.asp">click here</a> to contact Customer Care.<br />\r\n				<br />\r\n				<b>8.</b> <b>Returns </b><br />\r\n				8.1<br />\r\n				<br />\r\n				You may return products purchased from Us, without any penalty and without specifying the reason, within ten (10) days from receiving the products purchased on store.valentino.com.<br />\r\n				<br />\r\n				8.2<br />\r\n				To return products it is necessary to complete the online <a href="http://store.valentino.com/cms/help/return.asp">Return Form</a> within 10 days from receiving the order.<br />\r\n				<br />\r\n				8.3<br />\r\n				The Vendor must receive the returned products within thirty (30) days from the date on which products were received by you.<br />\r\n				<br />\r\n				8.4<br />\r\n				You can ship your returns to the Vendor with a shipping service of your choice and the return shipping will be at your own expense. Please verify that you have accurately completed and included with your parcel all the necessary documentation for Customs clearance. Customs authorities require that all such documentation be written in English so that it can be used both by the authorities of the country you are shipping from (for export) and the Italian authorities (for import). We recommend that you consult with local authorities and/or your selected shipping service to ensure that the documents are sufficient. The Vendor cannot be held responsible for parcels that are detained at Customs because of lacking or insufficient documentation. The Vendor therefore highly recommends that you choose a shipping service that permits you to trace the delivery at any time. Be sure that the type of shipping you choose guarantees the delivery of the parcel within the time frame of thirty (30) days from the date on which you received your order.<br />\r\n				<br />\r\n				8.5<br />\r\n				The return right - besides compliance with the terms and procedures described at par. 8.1, 8.2, 8.3 and 8.4 above - shall be deemed correctly exercised once the following conditions have been fully met:\r\n				<ul>\r\n					<li>\r\n						the online <a href="http://store.valentino.com/cms/help/return.asp">Return Form</a> must be correctly completed and submitted within ten (10) days from receipt of the order;</li>\r\n					<li>\r\n						the products must not have been used, worn, washed or damaged;</li>\r\n					<li>\r\n						the identification tag must still be attached to the products with the disposable seal;</li>\r\n					<li>\r\n						the products must be returned in their original packaging;</li>\r\n					<li>\r\n						the Vendor must receive the goods within thirty (30) days from the date in which you receive your order.</li>\r\n				</ul>\r\n				8.6<br />\r\n				If the return right is exercised in conformity with the provisions set forth in this section, We shall refund the amount paid for the returned products.<br />\r\n				<br />\r\n				8.7<br />\r\n				The Vendor shall refund the amount already paid for the purchase of products and the shipping costs of their delivery to you only if the products are returned for reasons that may be due to the Vendor, such as when the products do not have the promised essential characteristics, have manufacturing defects or they have been erroneously deliver'),
(3, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" width="900">\r\n				Our purpose is to guarantee your full satisfaction. If, for any reason whatsoever, you are not satisfied with your order, you may exercise your right to return purchased products within ten (10) days from the date on which you received them from store.valentino.com. Returned items must be shipped back to the Vendor within thirty (30) days from the date the package was delivered to you. The products may be returned by dispatching the package through a shipping agent of your choice. It is necessary to complete the <a href="http://store.valentino.com/cms/help/return.asp">Return Form</a> available on the web site in the <a href="http://store.valentino.com/cms/help/home.asp">Customer Care area</a>, in order for us to provide you with a Return Number. It is not possible to return an item in exchange for another.<br />\r\n				<br />\r\n				<br />\r\n				<b>Terms and Conditions of Return</b><br />\r\n				The right to return products shall be deemed correctly exercised once the following conditions have been fully met:\r\n				<ul>\r\n					<li>\r\n						the online <a href="http://store.valentino.com/cms/help/return.asp">Return Form</a> must be correctly completed and submitted to the Vendor within ten (10) days from the date of your receipt thereof;</li>\r\n					<li>\r\n						the products have not been used, worn, washed, modified or damaged;</li>\r\n					<li>\r\n						the identification tag is still attached to the products with the disposable seal;</li>\r\n					<li>\r\n						the products are returned in their original packaging;</li>\r\n					<li>\r\n						the Vendor must receive the goods within thirty (30) days from the date the package was delivered to you.</li>\r\n				</ul>\r\n				If you have fulfilled all requirements set forth above, the Vendor shall refund the entire price for the returned purchased products. Any duties, taxes and fees you have paid for the delivery of the purchased products shall not be refunded. You will be notified if the returned products cannot be accepted. In this case, you may choose to have the products delivered to you at no expense to the Vendor. If you refuse the above delivery, the Vendor reserves the right to retain the products and the amount paid for your purchase of the products.<br />\r\n				<br />\r\n				<br />\r\n				<b>Return Shipping</b><br />\r\n				You can ship your returns to the Vendor with a shipping service of your choice and the return shipping will be at your own expense. Please verify that you have accurately completed and included with your package all the necessary documentation for Customs clearance. Customs authorities require that all such documentation be written in English so that it can be used both by the authorities of the country you are shipping from (for export) and the Italian authorities (for import). We recommend that you consult with local authorities and/or your selected shipping service to ensure that the documentation is sufficient. The Vendor cannot be held responsible for parcels that are detained at Customs because of lacking or insufficient documentation. The Vendor therefore highly recommends that you choose a shipping service that permits you to trace it at any time. Be sure that the type of shipping you choose guarantees the delivery of the parcel within the time frame of 30 days from the date on which you received your order.<br />\r\n				<br />\r\n				<br />\r\n				<b>Refund Times and Procedures</b><br />\r\n				After the Vendor has received the returned products and checked that the products meet all requirements, you will receive an e-mail that the returned products have been accepted. Whatever the form of payment you used (Credit/Debit Card), the refund procedure will start within 30 days from when the Vendor was informed of your decision to exercise your right to return the purchased products and once the Vendor has checked that the return was carried out in compliance with the above conditions.<br />\r\n				The time period for refunding the amount you paid for purchasing the returned products depends on the payment type used:\r\n				<ul>\r\n					<li>\r\n						purchase by Credit/Debit Card: refund time will depend on the credit card company&rsquo;s policies. We would like to assure you, however, that the value date for the credit will coincide with the date of the original payment; therefore you will not lose bank interest; therefore you will not suffer any interest loss.</li>\r\n				</ul>\r\n				<br />\r\n				<b>Identification Tag</b><br />\r\n				All products sold by the Vendor include an identification tag with a disposable seal. Please try on the products without removing the tag and seal. Returned products without the tag or seal will not be accepted.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(4, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" width="900">\r\n				Welcome to our web site (&quot;store.valentino.com&quot;). Please read our Privacy Policy carefully. This Privacy Policy applies when you visit or surf our web site without purchasing any product, when you register with store.valentino.com, and when you use our services for purchasing products. If you haven&#39;t already done so, please also read the <a href="http://store.valentino.com/cms/legal/useterms.asp">General Terms and Condition of Use</a> of store.valentino.com, which contain information on privacy as well as on the security systems used by the web site. store.valentino.com is managed by YOOX S.p.A. (&quot;YOOX&quot;) with registered office in Via Nannetti, 1 - 40069, Zola Predosa (Bologna), Italy. YOOX controls the use of store.valentino.com users&#39; personal data together with VALENTINO S.p.A., whose registered address is in Via Turati, 16/18, Milano, Italy, Tax Code (jointly referred to as &quot;YOOX and VALENTINO&quot;).<br />\r\n				<br />\r\n				<br />\r\n				<b>1. Our Policy</b><br />\r\n				Everyone has the right to protection of his/her personal data. YOOX and VALENTINO respect its users&#39; right to be informed regarding the collection of and other operations involving their personal data. In using data that may directly or indirectly identify you personally, we will apply a principle of strict necessity. For this reason, we have designed store.valentino.com in such a way that the use of your personal data will be kept to a minimum and will not exceed the purposes for which your personal data was collected and/or processed; we do not process your personal data when we can provide you with services through the use of anonymous data (such as marketing research made for improving our services) or by other means which allow YOOX and VALENTINO to identify you, apart from when it is strictly necessary or upon request by competent public authorities or the police (for example, in case of traffic data or your IP address).<br />\r\n				YOOX and VALENTINO determine the purposes and means for processing your personal data, including security measures, as YOOX and VALENTINO control store.valentino.com users&#39; personal data.<br />\r\n				This Privacy Policy provides you with all information needed to understand how we collect data which may identify store.valentino.com&#39;s users. For further information on our Privacy Policy, please contact us at <a href="mailto:privacy@store.valentino.com">privacy@store.valentino.com</a>, or at YOOX S.p.A., Via Nannetti, 1 - 40069, Zola Predosa (Bologna), Italy or VALENTINO at its registered office indicated above.<br />\r\n				<br />\r\n				<br />\r\n				<b>2. Who Processes Your Personal Data</b><br />\r\n				YOOX and VALENTINO control the use of store.valentino.com users&#39; personal data; YOOX and VALENTINO autonomously determine the purposes and means of processing personal data and the instruments used, including those for security measures. Due to organisational and operational purposes only, we have appointed certain entities that will also process personal data belonging to store.valentino.com&#39;s users for purposes strictly connected to the performance of services on store.valentino.com, including the sale of products.<br />\r\n				The above mentioned processors have been chosen by YOOX and VALENTINO because of their experience in processing personal data and they provide sufficient guarantees regarding compliance with data processing laws (including the technical security measures governing the processing to be carried out). In processing the personal data of store.valentino.com&#39;s users, the processors shall act only on instructions from YOOX and VALENTINO. We regularly check that our processors comply with our instructions and that they continue to provide sufficient guarantees regarding their full compliance with the provisions on personal data processing.<br />\r\n				Some of the processors of your personal data are:\r\n				<ul>\r\n					<li>\r\n						<a href="http://www.ups.com/" target="_blank">United Parcel Service</a>, for for purposes related to shipping, delivering and returning products purchased on store.valentino.com;</li>\r\n					<li>\r\n						BT Italia S.p.A., for purposes related to the housing of YOOX servers;</li>\r\n					<li>\r\n						Prestige International UK ltd, for for purposes connected to providing call centre and Customer Care services to store.valentino.com&#39;s users.</li>\r\n				</ul>\r\n				Aside from the companies appointed for personal data processing, your information will be made available also to third parties, autonomous controllers, for purposes related to supplying services requested by user (for example, for purchase transactions). For more information on the matter, see section 5 (To Whom Your Personal Data Will Be Disclosed).<br />\r\n				<br />\r\n				Please contact our Customer Care or send us an e-mail at <a href="mailto:privacy@store.valentino.com">privacy@store.valentino.com</a> if you would like to receive a full list of our data processors.<br />\r\n				<br />\r\n				<br />\r\n				<b>3. How We Use Personal Data and for What Purposes</b><br />\r\n				Your personal data is collected and processed by YOOX and VALENTINO for purposes which are strictly connected to the use of the web site, its services and to the purchase of products on the web site. However, your personal data may also be used for other processing operations within the limits of such purposes.<br />\r\n				In particular, your personal data shall be processed for the following purposes:\r\n				<ul>\r\n					<li>\r\n						when you register with our website we collect your personal data (for example, your personal details, password, e-mail address, gender) through the registration form (My Account) in order to provide you with services in store.valentino.com&rsquo;s reserved access areas and to send you our Newsletter, when specifically requested;</li>\r\n					<li>\r\n						when you require assistance from our Customer Care, we collect your personal data (for example, your name and surnames, e-mail address and password) for purposes strictly necessary to providing you with Customer Care services related to store.valentino.com services and to the purchase of products on store.valentino.com;</li>\r\n					<li>\r\n						when you execute purchasing procedures for products sold on store.valentino.com, we collect your personal data (such as personal details, e-mail address, address, Credit Card numbers, bank code, tax code and telephone number) on your order form only for the purpose of selling the products ordered by you;</li>\r\n					<li>\r\n						when you require technical assistance, we collect your personal data in order to provide you with information on net-surfing, browser compatibility and viewing or loading store.valentino.com web pages ;</li>\r\n					<li>\r\n						when creating a Wish List, we process your personal data in order to customise our services for the purchase of products on store.valentino.com.</li>\r\n				</ul>\r\n				<br />\r\n				Your personal data is mostly processed by electronic means and in some circumstances by paper-based means, such as when the processing of your personal data is required for preventing fraud on store.valentino.com. Your personal data shall be stored in a way which allows YOOX and VALENTINO to identify you for the period necessary for the purposes which the data was collected for and subsequently processed and, in any case, in accordance with applicable law. Please report any modification of your personal data to <a href="mailto:privacy@store.valentino.com">privacy@store.valentino.com</a> in order to ensure that your personal information is always accurate and up-to-date, relevant and complete.<br />\r\n				Your personal data shall not be disclosed to third parties for purposes which are not permitted by law or without your explicit consent.<br />\r\n				Your personal data may only be disclosed to third parties when it is necessary for processing an order. For example, your personal data is disclosed to Banca Sella S.p.A. for the performance of electronic distance payment services using Credit/Debit Card when you purchase a product on store.valentino.com. Moreover, your data may be disclosed to the police or to judicial authorities, according to law and upon a formal request by such entities, for example in the event YOOX and VALENTINO need to prevent fraud on store.valentino.com (anti-fraud services).<br />\r\n				Data processors will also have access to your personal data as stated in section 2 for the specific purposes stated therein. In all the above circumstances, your consent for data processing is not required. Your personal data will not be transferred abroad to non-EU countries that do not ensure an adequate level of protection of individuals. Should this be necessary in order to supply services or to execute a contract for the purchase of products, your personal data shall be transferred to such non-EU countries only after the execution of specific contracts between YOOX, VALENTINO, and such entities in accordance with applicable law and regulations.<br />\r\n				We wish to inform you that YOOX and VALENTINO shall process its users&#39; personal data for purposes that are strictly connected to the supply of services on store.valentino.com, execution of contracts related to the sale and purchase of products on store.valentino.com and, after receiving your consent, to send you information on new commercial initiatives which are strictly connected to the web site&#39;s activities and services.<br />\r\n				YOOX and VALENTINO shall process your personal data for direct marketing purposes, including by e-mail, only after receiving your consent. YOOX and VALENTINO may have access to third parties&#39; personal data which was directly disclosed by their users, for example when a user bought a product to be sent to a friend, when the user paying for the product is different from the recipient of the product, or when a user wishes to recommend to a friend a service of store.valentino.com or the sale of a particular product.<br />\r\n				In all of the above cases, please make sure you receive the consent of such individuals before disclosing their personal data to YOOX and VALENTINO and make sure you inform them about this Privacy Policy; you will be the only person liable in connection with the disclosure of information and data regarding such third parties if they have not provided you with their express consent for it and for any improper and unlawful use of that information. In any event, YOOX shall fulfil any obligation to inform third parties required by law and, when necessary, shall request their express consent upon registering in its archives the personal information of the user indicated.<br />\r\n				<br />\r\n				<br />\r\n				<b>4. What Happens if You Do Not Disclose Your Personal Data to YOOX and VALENTINO</b><br />\r\n				Granting your personal data to YOOX and VALENTINO (in particular, your personal details, your e-mail address, your address, your Credit/Debit Card numbers and bank code and your telephone number) is necessary for processing your order for the purchase of products on store.valentino.com, supplying other services provided on the web site upon your request, or when your personal information is needed to fulfil obligations required by law or regulations.<br />\r\n				The refusal to provide YOOX and VALENTINO with some of your personal data necessary for performing the above purposes may consequently prevent YOOX and VALENTINO from processing your order for the purchase of products sold on store.valentino.com or from supplying other services provided on store.valentino.com, such as Customer Care services, sending the Newsletter, using the Wish List or fulfilling obligations required by law and other regulations. Therefore, failing to provide data may constitute, in some cases, a legitimate and justified reason for not processing your order for the purchase of products sold on store.valentino.com or not providing store.valentino.com&rsquo;s services.<br />\r\n				Disclosure of further personal data to YOOX and VALENTINO other than that required for fulfilling legal or contractual obligations or for providing the services requested, is, on the contrary, optional and does not have any effect on the use of the web site and of its services or on the purchase of products on store.valentino.com (for example, if we ask you the name of your favourite designer).<br />\r\n				In some circumstances and if required, from time to time we will duly inform you if the personal data you are disclosing to YOOX and iVALENTINO s compulsory or optional. We will point out to you whether the disclosure of your data is compulsory or optional by marking with an appropriate symbol (*) the information that is compulsory or data needed for providing the required services on store.valentino.com and for the purchase of products on store.valentino.com. Failing to provide optional personal data will not imply any obligation or disadvantage to our users.<br />\r\n				<br />\r\n				<br />\r\n				<b>5. To Whom Your Personal Data Will Be Disclosed</b><br />\r\n				Personal data will be disclosed to third party companies that provide, on behalf of YOOX and VALENTINO, specific services as data processors or to other recipients of personal data collected by YOOX and VALENTINO that autonomously process your personal data only for the performance of a contract for purchasing products on store.valentino.com (for example, Banca Sella S.p.A.) and only when such purpose does not exceed the purposes for which your personal data was collected and subsequently processed and, in any case, according to applicable laws and regulations.<br />\r\n				Personal data will not be disclosed to third parties or disseminated or transferred without informing our users of such disclosure/dissemination/transfer, without their consent and, in any case, in accordance with the law.<br />\r\n				<br />\r\n				<br />\r\n				<b>6. How We Collect Your Data on store.valentino.com</b><br />\r\n				When you are using store.valentino.com, some personal data might be collected automatically (through &quot;cookies&quot;), for example, when we automatically collect users&#39; IP addresses and other information regarding the users&#39; data traffic or the users&#39; preferences in the choice of services provided on this web site and of the products purchased through the provided services. This information and data are collected directly and automatically by the web site as part of its operational functions. This information and data are then processed in a collective and anonymous way for commercial purposes in order to optimize the services provided on store.valentino.com for the needs and preferences of the web site&#39;s users.<br />\r\n				In other circumstances, YOOX and VALENTINO directly collect personal data and information from its users when they register online with store.valentino.com or when th</td>'),
(5, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" width="900">\r\n				<b>Information &ndash; legislative decree 196/2003 (user registration)</b><br />\r\n				<br />\r\n				The personal information controlled by YOOX S.p.A., Via Nannetti 1, Zola Predosa (BO) (hereafter &ldquo;YOOX&rdquo;), will be collected mostly by electronic means and for the purposes of finalising registration, allowing you to use the reserved access services offered on the site (for example, processing your orders and other steps necessary to it, including operations for administrative and fiscal obligations, sending newsletters, when requested) and improving the service offered.<br />\r\n				YOOX S.p.A. is the controller of the information processing together with VALENTINO S.p.A., Via Turati, 16/18, Milano, Italy, (hereafter &ldquo;VALENTINO&rdquo;). YOOX and VALENTINO may use your information also for sending you advertising e-mails regarding their products and services similar to those already acquired unless you do not accept this use by exercising your right to do so in the manner set out elsewhere (art. 130, paragraph 4, legislative decree 196/2003). In addition, upon consent the information may be processed for sending promotional material regarding products and services that are different from those already acquired and for marketing activities or opinion polls.<br />\r\n				Upon consent, YOOX and VALENTINO may perform profiling analysis of your buying habits in order to send you proposals tailored to your interests. Some of the processors of your personal data are:<br />\r\n				<ul>\r\n					<li>\r\n						<a href="http://www.ups.com/" target="_blank">United Parcel Service</a>, for purposes related to shipping, delivering and returning products purchased on store.valentino.com;</li>\r\n					<li>\r\n						BT Italia S.p.A., for purposes related to the maintenance of YOOX servers;</li>\r\n					<li>\r\n						Prestige International UK ltd, for purposes connected to providing call centre and Customer Care services to store.valentino.com&#39;s users.</li>\r\n				</ul>\r\n				The parties appointed that will process information for the above mentioned purposes are the staff involved in processing orders, administration, customer care, marketing (when consent is given), information systems and web site management, and providing services reserved to registered users.<br />\r\n				<br />\r\n				In accordance with art. 7 of legislative decree 196/2003, all corresponding rights may be exercised including consulting, changing, deleting the information or opposing its processing for sending advertising material or commercial communications or opinion polls, by writing to YOOX at the above indicated address or by e-mail at <a href="mailto:privacy@store.valentino.com">privacy@store.valentino.com</a>. You can also use the same means for requesting a complete and up-to-date list of the data processors.<br />\r\n				<br />\r\n				Consult our <a href="http://store.valentino.com/cms/legal/privacypolicy.asp">Privacy Policy</a> for more information.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `n_t_danhmuc`
--

CREATE TABLE IF NOT EXISTS `n_t_danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menu` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `n_t_danhmuc`
--

INSERT INTO `n_t_danhmuc` (`id`, `ten`, `menu`) VALUES
(1, 'Áo gió và áo khoác', 'sản phẩm'),
(2, 'Áo phông', 'sản phẩm'),
(3, 'Quần', 'sản phẩm'),
(4, 'Váy', 'sản phẩm'),
(5, 'Đầm', 'sản phẩm'),
(6, 'Hàng thêu', 'sản phẩm'),
(7, 'Túi xách', 'phụ kiện'),
(8, 'Giày dép', 'phụ kiện'),
(9, 'Phụ kiện khác', 'phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `n_t_hotro`
--

CREATE TABLE IF NOT EXISTS `n_t_hotro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `n_t_sanpham`
--

CREATE TABLE IF NOT EXISTS `n_t_sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `hinhanh` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhchitiet1` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhchitiet2` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhchitiet3` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhchitiet4` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giakhuyenmai` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(1) NOT NULL DEFAULT '0',
  `moi` int(1) NOT NULL DEFAULT '1',
  `xem` int(11) NOT NULL DEFAULT '0',
  `ban` int(11) NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_t_sanpham`
--

INSERT INTO `n_t_sanpham` (`id`, `ten`, `danhmuc_id`, `hinhanh`, `hinhchitiet1`, `hinhchitiet2`, `hinhchitiet3`, `hinhchitiet4`, `mota`, `chitiet`, `gia`, `giakhuyenmai`, `noibat`, `moi`, `xem`, `ban`, `soluong`) VALUES
(2, 'Túi xách tay hai ngăn', 7, '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45165740GT_16_f.jpg" style="width: 245px; height: 310px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45165740GT_16_f.jpg" style="width: 245px; height: 310px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45165740GT_12_e.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45165740GT_12_r.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45165740GT_16_f.jpg" style="width: 245px; height: 310px; " /></p>\r\n', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Plain weave</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Magnetic closure</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Internal pockets</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Bow detailing</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Logo</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Coated fabric</span></p>\r\n', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">50% Polyester, 20% Polyurethane, 30% Viscose</span></p>\r\n', '930,00', '651,00', 0, 1, 68, 0, 20),
(3, 'WALLET', 7, '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_d.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_e.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_F.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_d.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/45177754UX_12_r.jpg" style="width: 387px; height: 490px; " /></p>\r\n', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Solid colour</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Magnetic closure</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Internal zip pocket</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Double handle</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Metallic inserted details</span><br style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; " />\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Logo</span></p>\r\n', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 11px; ">Leather</span></p>\r\n', '2.030,00', '', 0, 1, 21, 0, 30),
(4, 'SHOULDER BAGS', 7, '<p>\r\n	<img alt="" src="/ckfinder/userfiles/images/46208016QH_17_f.jpg" style="width: 306px; height: 390px; " /></p>\r\n', '', '', '', '', '', '', '625,00', '', 0, 0, 2, 0, 25);

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
(1, 'admin', '0993abd18b04dce02cafde93878540f109592da5', 'admin@gmail.com', 1, 2, NULL, '2012-09-05 06:00:06', '2012-02-22 13:46:09', '2012-03-17 21:56:17'),
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
