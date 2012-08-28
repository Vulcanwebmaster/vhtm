-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2011 at 08:31 PM
-- Server version: 5.0.92
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web1244_hrumos`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL auto_increment,
  `id_account` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `name` varchar(32) character set latin1 NOT NULL,
  `amount` int(11) NOT NULL,
  `id_currency` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `vdate1` date NOT NULL,
  `vdate2` date NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `id_account`, `id_client`, `name`, `amount`, `id_currency`, `credit`, `debit`, `vdate1`, `vdate2`, `created_at`) VALUES
(1, 1, 1, 'Account_name1', 122, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-02-24 00:00:00'),
(2, 2, 1, 'Account_name2', 321, 2, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(3, 1, 1, 'Account_name1', 123, 1, 0, 0, '2010-02-26', '2010-02-24', '2010-02-27 17:38:53'),
(4, 2, 1, 'Account_name2', 333, 2, 0, 0, '0000-00-00', '0000-00-00', '2010-02-28 14:50:01'),
(23, 3, 1, 'helo', 11, 3, 7, 5, '0000-00-00', '0000-00-00', '2010-03-12 17:21:46'),
(24, 2, 1, 'Account_name2', 3331, 2, 0, 0, '0000-00-00', '0000-00-00', '2010-03-12 17:21:56'),
(25, 1, 1, 'Account_name1', 122, 1, 5, 0, '2010-02-24', '2010-02-25', '2010-03-12 17:56:29'),
(26, 1, 1, 'Account_name1', 125, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-03-12 17:57:29'),
(27, 2, 1, 'Account_name2', 33314, 2, 1, 1, '0000-00-00', '0000-00-00', '2010-03-12 18:01:17'),
(28, 1, 1, 'Account_name1', 125, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-03-13 10:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(32) character set latin1 NOT NULL,
  `abbreviation` varchar(32) character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `abbreviation`) VALUES
(1, 'US-DOLLAR', 'USD'),
(2, 'EURO', 'EUR'),
(3, 'POUND', 'GBP'),
(4, 'YEN', 'JPY');

-- --------------------------------------------------------

--
-- Table structure for table `custodian`
--

CREATE TABLE IF NOT EXISTS `custodian` (
  `id` int(11) NOT NULL auto_increment,
  `custodian` varchar(100) NOT NULL,
  `postal_address_a` varchar(100) NOT NULL,
  `postal_address_b` varchar(100) NOT NULL,
  `zip_city` varchar(100) NOT NULL,
  `key_contact_person_a_cu` varchar(100) NOT NULL,
  `email_address_a` varchar(100) NOT NULL,
  `key_contact_person_b` varchar(100) NOT NULL,
  `email_address_b` varchar(100) NOT NULL,
  `phone_number_cu` varchar(50) NOT NULL,
  `fax_number` varchar(50) NOT NULL,
  `settlement_details_a` varchar(200) NOT NULL,
  `settlement_details_b` varchar(200) NOT NULL,
  `settlement_details_c` varchar(200) NOT NULL,
  `account_number_cu` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `custodian`
--

INSERT INTO `custodian` (`id`, `custodian`, `postal_address_a`, `postal_address_b`, `zip_city`, `key_contact_person_a_cu`, `email_address_a`, `key_contact_person_b`, `email_address_b`, `phone_number_cu`, `fax_number`, `settlement_details_a`, `settlement_details_b`, `settlement_details_c`, `account_number_cu`) VALUES
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1', '2', '3', '', '', '', '', '', '', '', '', '', '', ''),
(4, '1', '2', '3', '', '', '', '', '', '', '', '', '', '', ''),
(5, '1', '2', '3', '', '', '', '', '', '', '', '', '', '', ''),
(6, '1', '2', '3', '', '', '', '', '', '', '', '', '', '', ''),
(7, '77771', '777772', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '77771', '777772', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '1', '1', '1', '1', '1', '1', '1', '1', '1', 's', 'v', 's', 's', 's'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '3', '', '12', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `custody_ac`
--

CREATE TABLE IF NOT EXISTS `custody_ac` (
  `id` int(11) NOT NULL auto_increment,
  `id_client` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `custody_ac`
--

INSERT INTO `custody_ac` (`id`, `id_client`, `name`) VALUES
(1, 1, '123.456-REGULAR'),
(2, 1, '123.456-US-PERS.'),
(3, 1, '123.456-RESTRICT'),
(8, 2, '12122'),
(7, 2, 'ddd'),
(9, 4, 'aa'),
(10, 4, 'custod'),
(11, 3, 'c1'),
(12, 6, 'acc'),
(13, 3, 'ggjh');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `id` int(11) NOT NULL auto_increment,
  `ISIN` varchar(50) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `fund_name` text NOT NULL,
  `fund_company` text NOT NULL,
  `fund_category` tinytext NOT NULL,
  `fund_status` tinytext NOT NULL,
  `domicile` tinytext NOT NULL,
  `nav_value` float NOT NULL,
  `nav_date` date NOT NULL,
  `fund_strategy` text NOT NULL,
  `primary_strategy` text NOT NULL,
  `secondary_strategy` text NOT NULL,
  `investment_objectives_a` text NOT NULL,
  `investment_objectives_b` text NOT NULL,
  `investment_objectives_c` text NOT NULL,
  `unique_feature_a` text NOT NULL,
  `unique_feature_b` text NOT NULL,
  `inception_date` date NOT NULL,
  `current_assets` decimal(10,0) NOT NULL,
  `benchmark` varchar(20) NOT NULL,
  `risk_appetite` tinytext NOT NULL,
  `geographical_exposure` text NOT NULL,
  `last_audit` date NOT NULL,
  `add_info_a` text NOT NULL,
  `add_info_b` text NOT NULL,
  `transfer_agent_id` int(11) NOT NULL,
  `custodian_id` int(11) NOT NULL,
  `fund_advisor_id` int(11) NOT NULL,
  `fund_auditor_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `unique_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `ISIN`, `currency`, `fund_name`, `fund_company`, `fund_category`, `fund_status`, `domicile`, `nav_value`, `nav_date`, `fund_strategy`, `primary_strategy`, `secondary_strategy`, `investment_objectives_a`, `investment_objectives_b`, `investment_objectives_c`, `unique_feature_a`, `unique_feature_b`, `inception_date`, `current_assets`, `benchmark`, `risk_appetite`, `geographical_exposure`, `last_audit`, `add_info_a`, `add_info_b`, `transfer_agent_id`, `custodian_id`, `fund_advisor_id`, `fund_auditor_id`, `created_at`, `unique_id`) VALUES
(1, 'FI.000''880''701''1', 'EUR', '3C EDGE HEDGE FUND G', 'SAMPO FUND MANAGEMENT LTD', 'HEDGE FUND', '', 'FINLAND', 141.077, '2009-09-08', '', '', '', 'TO EXCEED RISK-FREE FIXED INCOME RETURNS', 'IN ALL MARKET CONDITIONS', '', '', '', '2003-12-15', 0, '', '', 'FINLAND AND THE OTHER NORDIC COUNTRIES', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(2, 'FI0008807011', 'EUR', '3C EDGE HEDGE FUND G', 'SAMPO FUND MANAGEMENT LTD', 'HEDGE FUND', '', 'FINLAND', 141.077, '2009-09-08', '', '', '', 'TO EXCEED RISK-FREE FIXED INCOME RETURNS', 'IN ALL MARKET CONDITIONS', '', '', '', '2003-12-15', 0, '', '', 'FINLAND AND THE OTHER NORDIC COUNTRIES', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 2),
(37, 'xxx', '4', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 34, 34, 32, 34, '2010-03-13 11:21:40', 3),
(5, '1111111', '1111112', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 8, 8, 6, 8, '0000-00-00 00:00:00', 5),
(6, '9999', '9999', '9999', '9999', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 9, 9, 7, 9, '0000-00-00 00:00:00', 6),
(7, '777 isin', '1', '777 fund', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 10, 10, 8, 10, '0000-00-00 00:00:00', 7),
(8, '1212', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 11, 11, 9, 11, '0000-00-00 00:00:00', 8),
(9, '11', '21', '1', '1', '1', '1', '1', 1, '2010-03-18', '1', '1', '1', '2', '2', '2', '3', '3', '0000-00-00', 4, '4', '5', '6', '2010-03-12', '7', '8', 12, 12, 10, 12, '2010-03-12 00:00:00', 9),
(10, 'hail', '4', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 14, 14, 12, 14, '2010-03-11 11:21:18', 10),
(11, '222', '3', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 16, 16, 14, 16, '2010-03-11 14:05:35', 1),
(12, '333', '1', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 17, 17, 15, 17, '2010-03-11 14:06:00', 1),
(13, '55', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 25, 25, 23, 25, '2010-03-11 14:29:35', 1),
(14, '55', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 28, 28, 26, 28, '2010-03-11 14:32:02', 11),
(35, 'hail', '4', 'xxx', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 14, 14, 12, 14, '2010-03-13 11:02:15', 10),
(38, 'xxx1', '4', '1', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 34, 34, 32, 34, '2010-03-13 11:21:49', 3),
(33, 'AI.G39''451''102''3', '3', 'LEOS SMALL PEARLS FUND', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 4),
(17, 'ddd5555', '2', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 31, 31, 29, 31, '2010-03-11 14:38:58', 12),
(18, 'ddd5555', '2', '1', '2', '3', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 31, 31, 29, 31, '2010-03-11 14:40:02', 12),
(19, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 31, 31, 29, 31, '2010-03-11 14:42:12', 12),
(20, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '1234-00-00', 0, '', '', '', '0000-00-00', '', '', 31, 31, 29, 31, '2010-03-11 14:42:20', 12),
(21, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '1234-12-00', 0, '', '', '', '0000-00-00', '', '', 31, 31, 29, 31, '2010-03-11 14:42:32', 12),
(22, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '1234-12-00', 0, '', '', '', '0000-00-00', '', '', 0, 31, 29, 31, '2010-03-11 14:42:53', 12),
(23, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '1234-12-00', 0, '', '', '', '0000-00-00', '', '', 0, 31, 29, 31, '2010-03-11 14:43:02', 12),
(24, 'ddd5555', '2', '1', '2', '3', '5', '6', 7, '0000-00-00', '', '', '', '', '', '', '', '', '1234-12-00', 0, '', '', '', '0000-00-00', '', '', 0, 0, 0, 1, '2010-03-11 14:43:18', 12),
(39, 'xxx12', '4', '12', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 34, 34, 32, 34, '2010-03-13 11:21:56', 3),
(40, 'xxx12', '4', '12', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 22, 16, 32, 1, '2010-03-14 12:39:24', 3),
(41, 'hail2', '4', 'xxx', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 14, 14, 12, 14, '2010-03-14 12:40:01', 10);

-- --------------------------------------------------------

--
-- Table structure for table `fund_advisor`
--

CREATE TABLE IF NOT EXISTS `fund_advisor` (
  `id` int(11) NOT NULL auto_increment,
  `fund_advisor` varchar(100) NOT NULL,
  `postal_address_adv` varchar(100) NOT NULL,
  `postal_address_adv_I` varchar(100) NOT NULL,
  `phone_number_adv` varchar(20) NOT NULL,
  `email_address_adv` varchar(20) NOT NULL,
  `fax_number_adv` varchar(20) NOT NULL,
  `additional_information_adv` varchar(500) NOT NULL,
  `zip_city_adv` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `fund_advisor`
--

INSERT INTO `fund_advisor` (`id`, `fund_advisor`, `postal_address_adv`, `postal_address_adv_I`, `phone_number_adv`, `email_address_adv`, `fax_number_adv`, `additional_information_adv`, `zip_city_adv`) VALUES
(30, '', '', '', '', '', '', '', ''),
(3, '4', '5', '6', '', '', '', '', ''),
(4, '4', '', '', '', '', '', '', ''),
(5, '88881', '88882', '', '', '', '', '', ''),
(6, '88881', '88882', '', '', '', '', '', ''),
(7, '1', '1', '1', '1', '1', '1', '1', '1'),
(8, '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fund_auditor`
--

CREATE TABLE IF NOT EXISTS `fund_auditor` (
  `id` int(11) NOT NULL auto_increment,
  `fund_auditor` varchar(100) NOT NULL,
  `postal_address_fau` varchar(100) NOT NULL,
  `postal_address_fau_I` varchar(100) NOT NULL,
  `phone_number_fau` varchar(20) NOT NULL,
  `email_address_fau` varchar(20) NOT NULL,
  `fax_number_fau` varchar(20) NOT NULL,
  `additional_information_fau` varchar(500) NOT NULL,
  `zip_city_fau` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `fund_auditor`
--

INSERT INTO `fund_auditor` (`id`, `fund_auditor`, `postal_address_fau`, `postal_address_fau_I`, `phone_number_fau`, `email_address_fau`, `fax_number_fau`, `additional_information_fau`, `zip_city_fau`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', ''),
(34, '', '', '', '', '', '', '', ''),
(3, '7', '8', '9', '`', 'email_address_fau', '`', '', ''),
(32, '', '', '', '', '', '', '', ''),
(5, '7', '8', '9', '`', 'email_address_fau', '`', '', ''),
(6, '3', '3', '3', '55', '44', '55', '44', '44'),
(7, '9991', '9992', '', '', '', '', '', ''),
(8, '9991', '9992', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `investment_details`
--

CREATE TABLE IF NOT EXISTS `investment_details` (
  `id` int(11) NOT NULL auto_increment,
  `initial_minimum_investment` decimal(10,0) NOT NULL,
  `minimum_investment` decimal(10,0) NOT NULL,
  `minimum_units_investment` decimal(10,0) NOT NULL,
  `lockup_period` text NOT NULL,
  `notice_period_i` text NOT NULL,
  `trading_frequency_i` text NOT NULL,
  `trading_date_i` datetime NOT NULL,
  `cut_off_time` tinytext NOT NULL,
  `settlement_cycle_i` varchar(50) NOT NULL,
  `administration_fee` decimal(10,0) NOT NULL,
  `accepted_investor_types` varchar(100) NOT NULL,
  `performance_since_start` decimal(10,0) NOT NULL,
  `performance_ytd` decimal(10,0) NOT NULL,
  `high_water_mark` tinytext NOT NULL,
  `hurdle_rate` float NOT NULL,
  `add_info_a` text NOT NULL,
  `add_info_b` text NOT NULL,
  `funds_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `investment_details`
--

INSERT INTO `investment_details` (`id`, `initial_minimum_investment`, `minimum_investment`, `minimum_units_investment`, `lockup_period`, `notice_period_i`, `trading_frequency_i`, `trading_date_i`, `cut_off_time`, `settlement_cycle_i`, `administration_fee`, `accepted_investor_types`, `performance_since_start`, `performance_ytd`, `high_water_mark`, `hurdle_rate`, `add_info_a`, `add_info_b`, `funds_id`) VALUES
(1, 50000, 0, 0, '', '0', '', '0000-00-00 00:00:00', '', '', 0, 'EXPERIENCED INVESTORS', 0, 0, '', 0, '', '', 1),
(2, 1, 1, 1, '1', '1', '1', '2010-03-18 00:00:00', '1', '1', 1, '1', 1, 1, '1', 1, '1', '1', 1),
(3, 222221, 2222212, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 4),
(4, 222221, 2222212, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 5),
(5, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 6),
(6, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 7),
(7, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 8),
(8, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 9),
(9, 2, 2, 2, '2', '2', '2', '2010-03-19 00:00:00', '2', '2', 2, '2', 2, 2, '2', 2, '2', '2', 12),
(10, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 11),
(11, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 12),
(12, 2, 2, 2, '2', '2', '2', '2010-03-26 14:15:02', '', '2', 2, '2', 2, 2, '2', 2, '2', '2', 2),
(13, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 13),
(14, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 14),
(15, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 24),
(16, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 26),
(17, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 27),
(18, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 28),
(19, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 29),
(20, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 30),
(21, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 31),
(22, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 32),
(23, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 36),
(24, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 40);

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE IF NOT EXISTS `isin` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(32) character set latin1 NOT NULL,
  `name` varchar(128) character set latin1 NOT NULL,
  `id_currency` int(11) NOT NULL,
  `limit1` int(11) NOT NULL default '0',
  `limit2` int(11) NOT NULL default '0',
  `limit3` int(11) NOT NULL default '0',
  `name_fund` varchar(64) character set latin1 NOT NULL,
  `nav` varchar(64) character set latin1 NOT NULL,
  `date_nav` date NOT NULL,
  `unique_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `isin`
--

INSERT INTO `isin` (`id`, `code`, `name`, `id_currency`, `limit1`, `limit2`, `limit3`, `name_fund`, `nav`, `date_nav`, `unique_id`) VALUES
(1, 'AI.G39''451''102''3', 'LEOS SMALL PEARLS FUND', 3, 0, 0, 0, 'name_fund1', 'nav1', '2009-12-01', 4),
(2, 'LU.018''712''253''5', 'FIDELITY FUNDS - AMERICAN DIVERSIFIED FUND', 4, 0, 0, 0, 'name_fund2', 'nav2', '2009-12-02', 5),
(3, 'LU.006''945''031''9', 'FIDELITY FUNDS - EURO STOXX 50 TM FUND', 4, 0, 0, 0, 'name_fund3', 'nav3', '2009-12-03', 6),
(4, 'LU.013''358''664''3', 'PIONEER FUNDS - U.S. SMALL COMPANIES FUND', 4, 0, 0, 0, 'name_fund4', 'nav4', '2009-12-04', 7),
(5, 'IE.00B''04Z''Q68''0', 'GAM STAR - INTERNATIONAL EQUITY FUND', 1, 0, 0, 0, 'name_fund5', 'nav5', '2009-12-05', 9),
(19, 'ddddd', '', 4, 0, 0, 0, '', '', '0000-00-00', 13),
(10, '11', '1', 21, 1, 1, 1, '1', '1', '2010-03-25', 2),
(18, '2222', '', 2, 0, 0, 0, '', '', '0000-00-00', 13),
(17, 'newnis', '', 4, 0, 0, 0, '', '0', '0000-00-00', 13),
(16, 'ddd5555', '1', 2, 0, 0, 0, '', '7', '0000-00-00', 12),
(20, '1', '', 4, 0, 0, 0, '', '', '0000-00-00', 13),
(21, 'xxx12', '12', 4, 0, 0, 0, '', '0', '0000-00-00', 3),
(22, 'xxx', '', 3, 0, 0, 0, '', '', '0000-00-00', 3),
(23, 'sdad', '', 1, 0, 0, 0, '', '', '0000-00-00', 3),
(24, '2', '3', 1, 0, 0, 0, '', '', '0000-00-00', 3),
(25, 'xxx', '', 4, 0, 0, 0, '', '', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `redemption_details`
--

CREATE TABLE IF NOT EXISTS `redemption_details` (
  `id` int(11) NOT NULL auto_increment,
  `funds_id` int(11) NOT NULL,
  `minimum_amount` double NOT NULL,
  `notice_period` varchar(20) NOT NULL,
  `trading_date` datetime NOT NULL,
  `settlement_cycle` varchar(50) NOT NULL,
  `minimum_units` tinyint(4) NOT NULL,
  `trading_frequency` varchar(50) NOT NULL,
  `cut_of_tiime` datetime NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `redemption_details`
--

INSERT INTO `redemption_details` (`id`, `funds_id`, `minimum_amount`, `notice_period`, `trading_date`, `settlement_cycle`, `minimum_units`, `trading_frequency`, `cut_of_tiime`, `additional_information`) VALUES
(1, 0, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(2, 4, 4444441, '', '0000-00-00 00:00:00', '', 127, '', '0000-00-00 00:00:00', ''),
(3, 5, 4444441, '', '0000-00-00 00:00:00', '', 127, '', '0000-00-00 00:00:00', ''),
(4, 6, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(5, 7, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(6, 8, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(7, 9, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(8, 11, 1, '1', '2010-03-26 00:00:00', '1', 1, '1', '2010-03-18 00:00:00', '1'),
(9, 11, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(10, 12, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(11, 13, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(12, 14, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(13, 24, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', '9'),
(14, 26, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', '9'),
(15, 27, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(16, 28, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(17, 29, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(18, 30, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(19, 31, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(20, 32, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(21, 36, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', ''),
(22, 40, 0, '', '0000-00-00 00:00:00', '', 0, '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `redemption_fees`
--

CREATE TABLE IF NOT EXISTS `redemption_fees` (
  `id` int(11) NOT NULL auto_increment,
  `redemption_details_id` int(11) NOT NULL,
  `minimum_back_end_fee` double NOT NULL,
  `early_withdrawal_fee` double NOT NULL,
  `maximum_back_end_fee` double NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `redemption_fees`
--

INSERT INTO `redemption_fees` (`id`, `redemption_details_id`, `minimum_back_end_fee`, `early_withdrawal_fee`, `maximum_back_end_fee`, `additional_information`) VALUES
(1, 0, 0, 0, 0, ''),
(2, 2, 555551, 0, 555552, ''),
(3, 3, 555551, 0, 555552, ''),
(4, 4, 0, 0, 0, ''),
(5, 5, 0, 0, 0, ''),
(6, 6, 0, 0, 0, ''),
(7, 7, 0, 0, 0, ''),
(8, 8, 0, 0, 0, ''),
(9, 9, 1, 1, 1, '1'),
(10, 10, 0, 0, 0, ''),
(11, 11, 0, 0, 0, ''),
(12, 12, 0, 0, 0, ''),
(13, 13, 0, 0, 0, ''),
(14, 14, 0, 0, 0, ''),
(15, 15, 0, 0, 0, ''),
(16, 16, 0, 0, 0, ''),
(17, 17, 0, 0, 0, ''),
(18, 18, 0, 0, 0, ''),
(19, 19, 0, 0, 0, ''),
(20, 20, 0, 0, 0, ''),
(21, 21, 0, 0, 0, ''),
(22, 22, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `id` int(11) NOT NULL auto_increment,
  `id_client` int(11) NOT NULL,
  `id_isin` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_custody` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `id_client`, `id_isin`, `quantity`, `id_custody`, `created_at`) VALUES
(1, 6, 7, 5, 12, '2010-03-14 12:26:32'),
(2, 6, 7, 7, 12, '2010-03-14 12:26:50'),
(3, 6, 7, 88, 12, '2010-03-14 12:27:19'),
(4, 6, 7, 1, 12, '2010-03-14 12:37:23'),
(5, 6, 33, 4, 12, '2010-03-14 12:37:41'),
(6, 6, 24, 2, 12, '2010-03-14 12:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_fee`
--

CREATE TABLE IF NOT EXISTS `subscription_fee` (
  `id` int(11) NOT NULL auto_increment,
  `funds_id` int(11) NOT NULL,
  `minimum_front_end_fee` double NOT NULL,
  `maximum_front_end_fee` double NOT NULL,
  `management_fee` double NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `subscription_fee`
--

INSERT INTO `subscription_fee` (`id`, `funds_id`, `minimum_front_end_fee`, `maximum_front_end_fee`, `management_fee`, `additional_information`) VALUES
(1, 1, 2, 3, 4, '5'),
(2, 0, 0, 0, 0, ''),
(3, 4, 333331, 333333, 0, ''),
(4, 5, 333331, 333333, 0, ''),
(5, 1, 2, 2, 3, '3'),
(6, 7, 0, 0, 0, ''),
(7, 8, 0, 0, 0, ''),
(8, 9, 0, 0, 0, ''),
(9, 41, 0, 0, 0, ''),
(10, 11, 0, 0, 0, ''),
(11, 12, 0, 0, 0, ''),
(12, 13, 0, 0, 0, ''),
(13, 14, 0, 0, 0, ''),
(14, 24, 0, 0, 0, '9'),
(15, 26, 0, 0, 0, '9'),
(16, 27, 0, 0, 0, ''),
(17, 28, 0, 0, 0, ''),
(18, 29, 0, 0, 0, ''),
(19, 30, 0, 0, 0, ''),
(20, 31, 0, 0, 0, ''),
(21, 32, 0, 0, 0, ''),
(22, 36, 0, 0, 0, ''),
(23, 40, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL auto_increment,
  `id_client` int(11) NOT NULL,
  `id_isin1` int(11) NOT NULL,
  `amount1` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `types` enum('sell','purchase','switch') character set latin1 NOT NULL,
  `status` enum('pending','completed','cancelled') character set latin1 NOT NULL,
  `comment_user` varchar(1024) character set latin1 NOT NULL,
  `comment_admin` varchar(1024) character set latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_client`, `id_isin1`, `amount1`, `id_account`, `types`, `status`, `comment_user`, `comment_admin`, `created_at`) VALUES
(1, 1, 35, 4, 1, 'purchase', 'pending', '', '', '0000-00-00 00:00:00'),
(2, 1, 33, 5, 1, 'sell', 'pending', '', '', '0000-00-00 00:00:00'),
(3, 1, 7, 5, 2, 'sell', 'cancelled', '', '', '2010-03-14 12:23:36'),
(4, 1, 33, 6, 1, 'purchase', 'completed', '', '', '2010-03-14 12:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE IF NOT EXISTS `transfers` (
  `id` int(11) NOT NULL auto_increment,
  `id_client` int(11) NOT NULL,
  `id_isin` int(11) NOT NULL,
  `fund_name` varchar(256) character set latin1 NOT NULL,
  `amount` int(11) NOT NULL,
  `id_custody1` varchar(256) character set latin1 NOT NULL,
  `trade_date` date NOT NULL,
  `settlement_date` date NOT NULL,
  `partner` varchar(256) character set latin1 NOT NULL,
  `custodian` varchar(256) character set latin1 NOT NULL,
  `custody2` varchar(256) character set latin1 NOT NULL,
  `transfer_agent` varchar(256) character set latin1 NOT NULL,
  `custody3` varchar(256) character set latin1 NOT NULL,
  `comment` varchar(10000) character set latin1 NOT NULL,
  `bic1` varchar(256) character set latin1 NOT NULL,
  `bic2` varchar(256) character set latin1 NOT NULL,
  `bic3` varchar(256) character set latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `types` enum('purchase','sell') character set latin1 NOT NULL,
  `status` enum('pending','completed','cancelled') character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `id_client`, `id_isin`, `fund_name`, `amount`, `id_custody1`, `trade_date`, `settlement_date`, `partner`, `custodian`, `custody2`, `transfer_agent`, `custody3`, `comment`, `bic1`, `bic2`, `bic3`, `created_at`, `types`, `status`) VALUES
(1, 1, 7, '777 fund', 1, '1', '1212-12-12', '1212-12-12', '3', '4', '1', '', '1', '', '', '', '', '2010-03-14 12:23:59', 'purchase', 'completed'),
(2, 1, 35, '777 fund', 1, '1', '1212-12-03', '1212-12-12', '3', '4', '1', '', '1', '', '', '', '', '2010-03-14 12:24:16', 'purchase', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_agent`
--

CREATE TABLE IF NOT EXISTS `transfer_agent` (
  `id` int(11) NOT NULL auto_increment,
  `transfer_agent` varchar(50) NOT NULL,
  `postal_address` varchar(100) NOT NULL,
  `postal_address_I` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `account_number` varchar(30) NOT NULL,
  `key_contact_persons` varchar(200) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `additional_information` varchar(50) NOT NULL,
  `zip` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `transfer_agent`
--

INSERT INTO `transfer_agent` (`id`, `transfer_agent`, `postal_address`, `postal_address_I`, `phone_number`, `account_number`, `key_contact_persons`, `email_address`, `fax_no`, `additional_information`, `zip`) VALUES
(33, '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', ''),
(3, '10', '11', '12', '', '', '', '', '', '', ''),
(4, '10', '11', '12', '', '', '', '', '', '', ''),
(5, '10', '11', '12', '', '', '', '', '', '', ''),
(6, '10', '11', '12', '', '', '', '', '', '', ''),
(7, '666611', '666621', '1', '1', '2', '2', '3', '3', '4', '5'),
(8, '66661', '66662', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '', ''),
(14, 'sasa', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', ''),
(22, '1', '2', '3', '', '', '', '', '', '', '141'),
(23, '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`) VALUES
(1, '1', '2', 'client email', 'client name'),
(3, 'aaasdas', 'aaasdas', 'aaasdas', 'aaasdas'),
(4, '22', '44', '33', '55'),
(5, '44112', '661', '551', '7722'),
(6, 'user', 'pass', '55', '77'),
(8, '333', '333', '333', '333');
