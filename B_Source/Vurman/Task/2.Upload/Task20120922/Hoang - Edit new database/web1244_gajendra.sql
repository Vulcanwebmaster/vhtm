-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2012 at 02:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vurman2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_account` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET latin1 NOT NULL,
  `amount` int(11) NOT NULL,
  `id_currency` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `vdate1` date NOT NULL,
  `vdate2` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `id_account`, `id_client`, `name`, `amount`, `id_currency`, `credit`, `debit`, `vdate1`, `vdate2`, `created_at`) VALUES
(1, 1, 1, 'Account_name1', 122, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-02-24 07:00:00'),
(2, 2, 1, 'Account_name2', 321, 2, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00 00:00:00'),
(3, 1, 1, 'Account_name1', 123, 1, 0, 0, '2010-02-26', '2010-02-24', '2010-02-28 00:38:53'),
(4, 2, 1, 'Account_name2', 333, 2, 0, 0, '0000-00-00', '0000-00-00', '2010-02-28 21:50:01'),
(23, 3, 1, 'helo', 11, 3, 7, 5, '0000-00-00', '0000-00-00', '2010-03-13 00:21:46'),
(24, 2, 1, 'Account_name2', 3331, 2, 0, 0, '0000-00-00', '0000-00-00', '2010-03-13 00:21:56'),
(25, 1, 1, 'Account_name1', 122, 1, 5, 0, '2010-02-24', '2010-02-25', '2010-03-13 00:56:29'),
(26, 1, 1, 'Account_name1', 125, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-03-13 00:57:29'),
(27, 2, 1, 'Account_name2', 33314, 2, 1, 1, '0000-00-00', '0000-00-00', '2010-03-13 01:01:17'),
(28, 1, 1, 'Account_name1', 125, 1, 0, 0, '2010-02-24', '2010-02-25', '2010-03-13 17:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_calendar`
--

CREATE TABLE IF NOT EXISTS `appointment_calendar` (
  `appointmentid` int(11) NOT NULL DEFAULT '0',
  `appointmentby` int(11) DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `isapprove` int(11) DEFAULT NULL,
  `approveby` int(11) DEFAULT NULL,
  `approvedttime` datetime DEFAULT NULL,
  `entrydatetime` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`appointmentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_calendar`
--

INSERT INTO `appointment_calendar` (`appointmentid`, `appointmentby`, `fromdate`, `todate`, `description`, `isapprove`, `approveby`, `approvedttime`, `entrydatetime`) VALUES
(1, 10, '2011-10-03', '2011-10-05', '', NULL, NULL, NULL, '2011-10-30 19:27:01'),
(2, 10, '2011-10-03', '2011-10-05', 'Fund Settlement', NULL, NULL, NULL, '2011-10-30 19:27:19'),
(3, 10, '2011-12-15', '2011-12-15', 'test job', 1, 10, '2011-11-01 11:06:02', '2011-11-01 11:05:26'),
(4, 10, '2011-12-16', '2011-12-16', 'test job on 16', 1, 10, '2011-11-01 11:05:59', '2011-11-01 11:05:34'),
(5, 10, '2011-12-23', '2011-12-23', 'a', 1, 11, '2011-11-02 09:56:49', '2011-11-02 09:56:46'),
(9, 1, '2011-11-07', '2011-11-07', 'trial job', NULL, NULL, NULL, '2011-11-02 09:58:11'),
(7, 10, '2011-11-04', '2011-11-04', 'Fund Settlement', NULL, NULL, NULL, '2011-11-01 20:40:05'),
(8, 10, '2011-11-04', '2011-11-04', 'Fund Settlement', NULL, NULL, NULL, '2011-11-01 20:40:18'),
(10, 1, '2011-11-08', '2011-11-08', 'a', NULL, NULL, NULL, '2011-11-02 09:58:14'),
(12, 1, '2011-11-16', '2011-11-16', '123', NULL, NULL, NULL, '2011-11-02 09:59:20'),
(13, 1, '2011-11-17', '2011-11-17', '150\r\n', NULL, NULL, NULL, '2011-11-02 09:59:30'),
(15, 1, '2011-11-23', '2011-11-23', 'a', NULL, NULL, NULL, '2011-11-02 10:00:14'),
(16, 1, '2011-11-23', '2011-11-23', 'a', NULL, NULL, NULL, '2011-11-02 10:00:15'),
(18, 1, '2011-11-28', '2011-11-28', 'on 28th and now this one from admin', 1, 11, '2011-11-04 10:04:05', '2011-11-04 10:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(18) CHARACTER SET latin1 NOT NULL,
  `abbreviation` varchar(3) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `abbreviation`) VALUES
(1, 'US DOLLAR', 'USD'),
(2, 'EURO', 'EUR'),
(3, 'POUND STERLING', 'GBP'),
(4, 'JAPANESE YEN', 'JPY'),
(5, 'SWISS FRANC', 'CHF'),
(6, 'SWEDISH CROWN', 'SEK'),
(7, 'NORWEGIAN CROWN', 'NOK');

-- --------------------------------------------------------

--
-- Table structure for table `custodian`
--

CREATE TABLE IF NOT EXISTS `custodian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpid` int(11) NOT NULL DEFAULT '0',
  `counterparty` varchar(100) NOT NULL,
  `biccp` varchar(11) DEFAULT NULL,
  `custid` int(11) NOT NULL DEFAULT '0',
  `custodian` varchar(32) DEFAULT NULL,
  `biccust` varchar(11) DEFAULT NULL,
  `cpacwithcust` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `custodian`
--

INSERT INTO `custodian` (`id`, `cpid`, `counterparty`, `biccp`, `custid`, `custodian`, `biccust`, `cpacwithcust`) VALUES
(14, 1, 'REICHMUTH & CO.', 'REICCH22XXX', 100, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900'),
(15, 2, 'UBS AG', 'UBSWCHZH80A', 200, 'UBS AG', 'UBSWCHZH80A', '230-12786.S1'),
(16, 3, 'ADLER & CO. AG', 'ADCOCHZZXXX', 300, 'SIX SIS AG', 'INSECHZZXXX', '20.123.456');

-- --------------------------------------------------------

--
-- Table structure for table `custody_ac`
--

CREATE TABLE IF NOT EXISTS `custody_ac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `custody_ac`
--

INSERT INTO `custody_ac` (`id`, `id_client`, `name`) VALUES
(1, 1, 'S1 REGULAR'),
(2, 1, 'S2 RESTRICTED'),
(3, 1, 'S3 U.S. PERSON');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `ISIN`, `currency`, `fund_name`, `fund_company`, `fund_category`, `fund_status`, `domicile`, `nav_value`, `nav_date`, `fund_strategy`, `primary_strategy`, `secondary_strategy`, `investment_objectives_a`, `investment_objectives_b`, `investment_objectives_c`, `unique_feature_a`, `unique_feature_b`, `inception_date`, `current_assets`, `benchmark`, `risk_appetite`, `geographical_exposure`, `last_audit`, `add_info_a`, `add_info_b`, `transfer_agent_id`, `custodian_id`, `fund_advisor_id`, `fund_auditor_id`, `created_at`, `unique_id`) VALUES
(1, 'IE.003''077''186''3', 'USD', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 'BANK HAPOALIM (SCHWEIZ) AG', 'OTHER FUND', '', 'IRLAND', 141.98, '2011-08-02', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 1),
(2, 'FI0008807011', 'EUR', '3C EDGE HEDGE FUND G', 'SAMPO FUND MANAGEMENT LTD', 'HEDGE FUND', '', 'FINLAND', 141.077, '2009-09-08', '', '', '', 'TO EXCEED RISK-FREE FIXED INCOME RETURNS', 'IN ALL MARKET CONDITIONS', '', '', '', '2003-12-15', 0, '', '', 'FINLAND AND THE OTHER NORDIC COUNTRIES', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 2),
(33, 'AI.G39''451''102''3', '3', 'LEOS SMALL PEARLS FUND', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', 0, '', '', '', '0000-00-00', '', '', 0, 0, 0, 0, '0000-00-00 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `fund_advisor`
--

CREATE TABLE IF NOT EXISTS `fund_advisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fund_advisor` varchar(100) NOT NULL,
  `postal_address_adv` varchar(100) NOT NULL,
  `postal_address_adv_I` varchar(100) NOT NULL,
  `phone_number_adv` varchar(20) NOT NULL,
  `email_address_adv` varchar(20) NOT NULL,
  `fax_number_adv` varchar(20) NOT NULL,
  `additional_information_adv` varchar(500) NOT NULL,
  `zip_city_adv` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

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
(11, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fund_auditor`
--

CREATE TABLE IF NOT EXISTS `fund_auditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fund_auditor` varchar(100) NOT NULL,
  `postal_address_fau` varchar(100) NOT NULL,
  `postal_address_fau_I` varchar(100) NOT NULL,
  `phone_number_fau` varchar(20) NOT NULL,
  `email_address_fau` varchar(20) NOT NULL,
  `fax_number_fau` varchar(20) NOT NULL,
  `additional_information_fau` varchar(500) NOT NULL,
  `zip_city_fau` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

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
(22, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fund_portfolio`
--

CREATE TABLE IF NOT EXISTS `fund_portfolio` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_isin` varchar(256) DEFAULT NULL,
  `fund_name` varchar(256) CHARACTER SET latin1 NOT NULL,
  `currency` int(11) DEFAULT NULL,
  `custody_ac` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `credit_date` datetime DEFAULT NULL,
  `credit_ref` varchar(256) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `debit_date` datetime DEFAULT NULL,
  `debit_ref` varchar(256) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Client` (`id_client`),
  KEY `FK_Currency` (`currency`),
  KEY `FK_ISIN` (`id_isin`),
  KEY `FK_CustodyAC` (`custody_ac`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `fund_portfolio`
--

INSERT INTO `fund_portfolio` (`id`, `id_client`, `id_isin`, `fund_name`, `currency`, `custody_ac`, `credit`, `credit_date`, `credit_ref`, `debit`, `debit_date`, `debit_ref`, `created_by`, `created_date`) VALUES
(1, 1, '0', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 1, 100, '2012-01-13 00:00:00', 'dd', NULL, NULL, '', 11, '2012-01-13 18:36:52'),
(2, 1, '0', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 0, 10, '2012-01-13 00:00:00', 'jv', NULL, NULL, '', 11, '2012-01-13 20:50:35'),
(3, 1, '0', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 1, 10, '2012-01-18 00:00:00', 'jv', NULL, NULL, '', 11, '2012-01-18 13:23:45'),
(4, 1, 'IE.003''095''757''9', 'POALIM ASSET GLOBAL MULTI-MANAGER 50 USD', 1, 1, 10, '2012-01-20 00:00:00', 'jv', NULL, NULL, '', 11, '2012-01-21 12:23:55'),
(5, 1, 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 1, 10, '2012-01-21 00:00:00', 'jv', NULL, NULL, '', 11, '2012-01-21 23:38:24'),
(6, 1, 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 2, NULL, NULL, '', 20, '2012-01-21 00:00:00', 'jv', 11, '2012-01-21 23:46:14'),
(7, 1, 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 1, NULL, NULL, '', 10, '2012-01-22 00:00:00', 'jv', 11, '2012-01-22 10:02:09'),
(8, 1, 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 1, 100, '2012-02-01 00:00:00', 'rej', NULL, NULL, '', 11, '2012-02-01 16:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `instruction_settlement`
--

CREATE TABLE IF NOT EXISTS `instruction_settlement` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `seller_id` int(2) NOT NULL,
  `name` text NOT NULL,
  `bic` varchar(11) NOT NULL,
  `custodianid` int(3) NOT NULL,
  `custodian` text NOT NULL,
  `biccustodian` varchar(11) NOT NULL,
  `acwithcust` varchar(11) NOT NULL,
  `transferagent` text NOT NULL,
  `bicta` varchar(11) NOT NULL,
  `acwithta` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `instruction_settlement`
--

INSERT INTO `instruction_settlement` (`id`, `seller_id`, `name`, `bic`, `custodianid`, `custodian`, `biccustodian`, `acwithcust`, `transferagent`, `bicta`, `acwithta`) VALUES
(1, 2, 'BANK XYZ', 'BXYZ1234XXX', 20, 'CUSTODIAN XYZ', 'CXYZ1234XXX', '10-1234-05', 'TRANSFER AGENT XYZ', 'TAXYZ123XXX', '1881');

-- --------------------------------------------------------

--
-- Table structure for table `investment_details`
--

CREATE TABLE IF NOT EXISTS `investment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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
(24, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 40),
(25, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 42),
(26, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 43),
(27, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '', '', 0, '', 0, 0, '', 0, '', '', 44);

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE IF NOT EXISTS `isin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(16) CHARACTER SET latin1 NOT NULL,
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `id_currency` int(3) NOT NULL,
  `name_fund` varchar(128) CHARACTER SET latin1 NOT NULL,
  `nav` float NOT NULL,
  `date_nav` date NOT NULL,
  `unique_id` varchar(15) NOT NULL,
  `transferagent` varchar(50) DEFAULT NULL,
  `bicta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=311 ;

--
-- Dumping data for table `isin`
--

INSERT INTO `isin` (`id`, `code`, `name`, `id_currency`, `name_fund`, `nav`, `date_nav`, `unique_id`, `transferagent`, `bicta`) VALUES
(1, 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 141.98, '2011-08-02', 'OTHER FUND', 'TA ABC', 'TAABC456XXX'),
(3, 'IE.003''095''757''9', 'POALIM ASSET GLOBAL MULTI-MANAGER 50 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 50 USD', 146.89, '2011-08-02', 'OTHER FUND', 'REICHMUTH', 'REICCH22XXX'),
(5, 'IE.003''095''809''8', 'POALIM ASSET GLOBAL MULTI-MANAGER 70 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 70 USD', 146.05, '2011-08-02', 'OTHER FUND', NULL, NULL),
(7, 'IE.003''095''779''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 90 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 90 USD', 143.52, '2011-08-02', 'OTHER FUND', NULL, NULL),
(9, 'CH.011''763''337''7', 'ARVERNUS CAPITAL (CH) EUROPE EVENT DRIVEN FUND', 2, 'ARVERNUS CAPITAL (CH) EUROPE EVENT DRIVEN FUND', 100.31, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(11, 'LU.019''071''103''5', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 131.91, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(13, 'LU.017''339''508''7', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 157.13, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(15, 'LU.017''339''605''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 150.46, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(17, 'LU.017''339''613''5', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 148.48, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(19, 'LU.019''071''111''8', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 129.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(21, 'LU.017''339''524''4', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 155.08, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(23, 'LU.027''685''030''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 101.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(25, 'LU.027''684''785''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 105.42, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(27, 'LU.027''684''947''7', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 108.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(29, 'LU.027''684''815''6', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 104.59, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(31, 'LU.027''685''072''3', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 100.22, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(33, 'LU.016''785''709''2', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 161.33, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(35, 'LU.016''785''784''5', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 170.73, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(37, 'LU.016''785''849''6', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 168.31, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(39, 'LU.016''785''768''8', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 158.81, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(41, 'LU.012''976''330''5', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - A', 198.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(43, 'LU.012''976''348''7', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - B', 194.57, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(45, 'LU.032''058''124''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (CHF) - G', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (CHF) - G', 104.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(47, 'LU.012''976''305''7', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - A', 186.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(49, 'LU.012''976''321''4', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - B', 182.91, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(51, 'LU.033''208''774''0', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (GBP) - G', 3, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (GBP) - G', 107.28, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(53, 'LU.014''591''869''3', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 136.61, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(55, 'LU.014''591''974''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 142.81, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(57, 'LU.014''591''915''4', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 134.15, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(59, 'LU.014''592''148''1', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 140.28, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(61, 'LU.030''166''574''0', '3A ASIA FUND (CHF) CLS. B', 5, '3A ASIA FUND (CHF) CLS. B', 830.45, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(63, 'LU.030''166''477''6', '3A ASIA FUND (EUR) CLS. B', 2, '3A ASIA FUND (EUR) CLS. B', 914.98, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(65, 'LU.030''166''272''1', '3A ASIA FUND (USD) CLS. B', 1, '3A ASIA FUND (USD) CLS. B', 928.3, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(67, 'CH.001''622''795''8', 'BCV DEFENSIVE FUND (CHF) A', 5, 'BCV DEFENSIVE FUND (CHF) A', 823.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(69, 'CH.003''565''150''1', 'BCV DEFENSIVE FUND (CHF) B', 5, 'BCV DEFENSIVE FUND (CHF) B', 769.8, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(71, 'CH.003''565''154''3', 'BCV DEFENSIVE FUND (CHF) C', 5, 'BCV DEFENSIVE FUND (CHF) C', 778.53, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(73, 'CH.003''565''166''7', 'BCV DEFENSIVE FUND (EUR) A', 2, 'BCV DEFENSIVE FUND (EUR) A', 780.07, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(75, 'CH.003''565''171''7', 'BCV DEFENSIVE FUND (EUR) B', 2, 'BCV DEFENSIVE FUND (EUR) B', 796.22, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(77, 'CH.003''565''190''7', 'BCV DEFENSIVE FUND (USD) A', 1, 'BCV DEFENSIVE FUND (USD) A', 784.53, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(79, 'CH.003''565''198''0', 'BCV DEFENSIVE FUND (USD) B', 1, 'BCV DEFENSIVE FUND (USD) B', 802.63, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(81, 'CH.001''622''773''5', 'BCV DIRECTIONAL FUND (CHF) A', 5, 'BCV DIRECTIONAL FUND (CHF) A', 1052.8, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(83, 'CH.003''571''993''6', 'BCV DIRECTIONAL FUND (CHF) B', 5, 'BCV DIRECTIONAL FUND (CHF) B', 851.85, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(85, 'CH.003''571''999''3', 'BCV DIRECTIONAL FUND (CHF) C', 5, 'BCV DIRECTIONAL FUND (CHF) C', 889.93, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(87, 'CH.003''572''004''1', 'BCV DIRECTIONAL FUND (EUR) A', 2, 'BCV DIRECTIONAL FUND (EUR) A', 902.54, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(89, 'CH.003''572''106''4', 'BCV DIRECTIONAL FUND (EUR) B', 2, 'BCV DIRECTIONAL FUND (EUR) B', 961.47, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(91, 'CH.003''572''262''5', 'BCV DIRECTIONAL FUND (USD) A', 1, 'BCV DIRECTIONAL FUND (USD) A', 890.87, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(93, 'CH.003''572''364''9', 'BCV DIRECTIONAL FUND (USD) B', 1, 'BCV DIRECTIONAL FUND (USD) B', 885.67, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(95, 'CH.001''822''039''9', 'BLUE SPRING', 5, 'BLUE SPRING', 152.05, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(97, 'IE.000''151''618''0', 'STAR MM FUNDS PLC - CIRAN EMERGING MARKETS FUND', 1, 'STAR MM FUNDS PLC - CIRAN EMERGING MARKETS FUND', 256.38, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(99, 'IE.000''841''328''2', 'STAR MM FUNDS PLC - CIRCLE A FUND', 1, 'STAR MM FUNDS PLC - CIRCLE A FUND', 207.62, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(101, 'IE.000''841''801''8', 'STAR MM FUNDS PLC - CIRCLE E FUND', 5, 'STAR MM FUNDS PLC - CIRCLE E FUND', 379.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(103, 'IE.000''841''317''5', 'STAR MM FUNDS PLC - MULTI MONDIAL FUND', 5, 'STAR MM FUNDS PLC - MULTI MONDIAL FUND', 154.12, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(104, 'IE0008413175', 'STAR MM FUNDS PLC - MULTI MONDIAL FUND', 5, 'STAR MM FUNDS PLC - MULTI MONDIAL FUND', 154.12, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(102, 'IE0008418018', 'STAR MM FUNDS PLC - CIRCLE E FUND', 5, 'STAR MM FUNDS PLC - CIRCLE E FUND', 379.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(2, 'IE0030771863', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 141.98, '2011-08-02', 'OTHER FUND', NULL, NULL),
(4, 'IE0030957579', 'POALIM ASSET GLOBAL MULTI-MANAGER 50 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 50 USD', 146.89, '2011-08-02', 'OTHER FUND', NULL, NULL),
(6, 'IE0030958098', 'POALIM ASSET GLOBAL MULTI-MANAGER 70 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 70 USD', 146.05, '2011-08-02', 'OTHER FUND', NULL, NULL),
(8, 'IE0030957793', 'POALIM ASSET GLOBAL MULTI-MANAGER 90 USD', 1, 'POALIM ASSET GLOBAL MULTI-MANAGER 90 USD', 143.52, '2011-08-02', 'OTHER FUND', NULL, NULL),
(12, 'LU0190711035', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 131.91, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(10, 'CH0117633377', 'ARVERNUS CAPITAL (CH) EUROPE EVENT DRIVEN FUND', 2, 'ARVERNUS CAPITAL (CH) EUROPE EVENT DRIVEN FUND', 100.31, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(14, 'LU0173395087', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 157.13, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(16, 'LU0173396051', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - A', 150.46, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(18, 'LU0173396135', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 148.48, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(20, 'LU0190711118', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 129.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(22, 'LU0173395244', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA DIVERSIFIED - B', 155.08, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(24, 'LU0276850301', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 101.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(26, 'LU0276847851', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 105.42, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(28, 'LU0276849477', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - A', 108.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(30, 'LU0276848156', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 104.59, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(32, 'LU0276850723', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA EUROPA - B', 100.22, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(34, 'LU0167857092', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 161.33, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(36, 'LU0167857845', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - A', 170.73, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(38, 'LU0167858496', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 168.31, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(40, 'LU0167857688', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA TRADERS - B', 158.81, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(42, 'LU0129763305', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - A', 198.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(44, 'LU0129763487', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED ($) - B', 194.57, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(46, 'LU0320581241', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (CHF) - G', 5, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (CHF) - G', 104.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(48, 'LU0129763057', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - A', 186.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(50, 'LU0129763214', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (EUR) - B', 182.91, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(52, 'LU0332087740', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (GBP) - G', 3, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA UNCORRELATED (GBP) - G', 107.28, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(54, 'LU0145918693', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 136.61, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(56, 'LU0145919741', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - A', 142.81, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(58, 'LU0145919154', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 2, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 134.15, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(60, 'LU0145921481', 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 1, 'EDMOND DE ROTHSCHILD PRIFUND - ALPHA VOLATILITY - B', 140.28, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(62, 'LU0301665740', '3A ASIA FUND (CHF) CLS. B', 5, '3A ASIA FUND (CHF) CLS. B', 830.45, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(64, 'LU0301664776', '3A ASIA FUND (EUR) CLS. B', 2, '3A ASIA FUND (EUR) CLS. B', 914.98, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(66, 'LU0301662721', '3A ASIA FUND (USD) CLS. B', 1, '3A ASIA FUND (USD) CLS. B', 928.3, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(68, 'CH0016227958', 'BCV DEFENSIVE FUND (CHF) A', 5, 'BCV DEFENSIVE FUND (CHF) A', 823.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(70, 'CH0035651501', 'BCV DEFENSIVE FUND (CHF) B', 5, 'BCV DEFENSIVE FUND (CHF) B', 769.8, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(72, 'CH0035651543', 'BCV DEFENSIVE FUND (CHF) C', 5, 'BCV DEFENSIVE FUND (CHF) C', 778.53, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(74, 'CH0035651667', 'BCV DEFENSIVE FUND (EUR) A', 2, 'BCV DEFENSIVE FUND (EUR) A', 780.07, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(76, 'CH0035651717', 'BCV DEFENSIVE FUND (EUR) B', 2, 'BCV DEFENSIVE FUND (EUR) B', 796.22, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(78, 'CH0035651907', 'BCV DEFENSIVE FUND (USD) A', 1, 'BCV DEFENSIVE FUND (USD) A', 784.53, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(80, 'CH0035651980', 'BCV DEFENSIVE FUND (USD) B', 1, 'BCV DEFENSIVE FUND (USD) B', 802.63, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(82, 'CH0016227735', 'BCV DIRECTIONAL FUND (CHF) A', 5, 'BCV DIRECTIONAL FUND (CHF) A', 1052.8, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(84, 'CH0035719936', 'BCV DIRECTIONAL FUND (CHF) B', 5, 'BCV DIRECTIONAL FUND (CHF) B', 851.85, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(86, 'CH0035719993', 'BCV DIRECTIONAL FUND (CHF) C', 5, 'BCV DIRECTIONAL FUND (CHF) C', 889.93, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(88, 'CH0035720041', 'BCV DIRECTIONAL FUND (EUR) A', 2, 'BCV DIRECTIONAL FUND (EUR) A', 902.54, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(90, 'CH0035721064', 'BCV DIRECTIONAL FUND (EUR) B', 2, 'BCV DIRECTIONAL FUND (EUR) B', 961.47, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(92, 'CH0035722625', 'BCV DIRECTIONAL FUND (USD) A', 1, 'BCV DIRECTIONAL FUND (USD) A', 890.87, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(94, 'CH0035723649', 'BCV DIRECTIONAL FUND (USD) B', 1, 'BCV DIRECTIONAL FUND (USD) B', 885.67, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(96, 'CH0018220399', 'BLUE SPRING', 5, 'BLUE SPRING', 152.05, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(98, 'IE0001516180', 'STAR MM FUNDS PLC - CIRAN EMERGING MARKETS FUND', 1, 'STAR MM FUNDS PLC - CIRAN EMERGING MARKETS FUND', 256.38, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(100, 'IE0008413282', 'STAR MM FUNDS PLC - CIRCLE A FUND', 1, 'STAR MM FUNDS PLC - CIRCLE A FUND', 207.62, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(105, 'LU.034''840''431''9', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND B USD', 1, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND B USD', 87.75, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(106, 'LU0348404319', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND B USD', 1, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND B USD', 87.75, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(107, 'LU.034''840''474''9', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H CHF', 5, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H CHF', 81.8, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(108, 'LU0348404749', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H CHF', 5, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H CHF', 81.8, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(109, 'LU.034''840''466''5', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H EUR', 2, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H EUR', 83.94, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(110, 'LU0348404665', 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H EUR', 2, 'CLARIDEN LEU (LUX) COMMODITY INSTRUMENTS FUND H EUR', 83.94, '2011-08-04', 'HEDGE FUND', NULL, NULL),
(111, 'LU.053''130''852''5', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND B USD', 1, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND B USD', 98.39, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(112, 'LU0531308525', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND B USD', 1, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND B USD', 98.39, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(113, 'LU.053''130''933''3', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH CHF', 5, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH CHF', 98.07, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(114, 'LU0531309333', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH CHF', 5, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH CHF', 98.07, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(115, 'LU.053''130''925''9', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH EUR', 2, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH EUR', 98.86, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(116, 'LU0531309259', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH EUR', 2, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND DH EUR', 98.86, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(117, 'LU.053''130''887''1', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND D USD', 1, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND D USD', 98.83, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(118, 'LU0531308871', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND D USD', 1, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND D USD', 98.83, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(119, 'LU.053''130''917''6', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H CHF', 5, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H CHF', 97.65, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(120, 'LU0531309176', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H CHF', 5, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H CHF', 97.65, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(121, 'LU.053''130''909''3', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H EUR', 2, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H EUR', 96.87, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(122, 'LU0531309093', 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H EUR', 2, 'CLARIDEN LEU (LUX) LIQUID ALTERNATIVES FUND H EUR', 96.87, '2011-07-29', 'HEDGE FUND', NULL, NULL),
(123, 'CH.002''069''172''8', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (EUR) A-CLASS', 2, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (EUR) A-CLASS', 116.94, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(124, 'CH0020691728', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (EUR) A-CLASS', 2, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (EUR) A-CLASS', 116.94, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(125, 'CH.002''069''171''0', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) A-CLASS', 1, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) A-CLASS', 124.7, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(126, 'CH0020691710', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) A-CLASS', 1, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) A-CLASS', 124.7, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(127, 'CH.010''446''454''7', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) D-CLASS', 1, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) D-CLASS', 99.25, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(128, 'CH0104464547', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) D-CLASS', 1, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) D-CLASS', 99.25, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(129, 'CH.010''527''697''3', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF A', 5, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF A', 95.11, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(130, 'CH0105276973', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF A', 5, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF A', 95.11, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(131, 'CH.010''446''645''0', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF D', 5, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF D', 97.74, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(132, 'CH0104466450', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF D', 5, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H CHF D', 97.74, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(133, 'CH.010''446''555''1', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H EUR D', 2, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H EUR D', 98.4, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(134, 'CH0104465551', 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H EUR D', 2, 'SAAF I (CH) DIVERSIFIED ALPHA FUND (USD) H EUR D', 98.4, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(135, 'CH.003''505''292''4', 'SAAF I (CH) LATIN AMERICA FUND (EUR) A-CLASS', 2, 'SAAF I (CH) LATIN AMERICA FUND (EUR) A-CLASS', 114.76, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(136, 'CH0035052924', 'SAAF I (CH) LATIN AMERICA FUND (EUR) A-CLASS', 2, 'SAAF I (CH) LATIN AMERICA FUND (EUR) A-CLASS', 114.76, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(137, 'CH.003''505''290''8', 'SAAF I (CH) LATIN AMERICA FUND (USD) A-CLASS', 1, 'SAAF I (CH) LATIN AMERICA FUND (USD) A-CLASS', 119.92, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(138, 'CH0035052908', 'SAAF I (CH) LATIN AMERICA FUND (USD) A-CLASS', 1, 'SAAF I (CH) LATIN AMERICA FUND (USD) A-CLASS', 119.92, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(139, 'CH.010''446''733''4', 'SAAF I (CH) LATIN AMERICA FUND (USD) IA-CLASS', 1, 'SAAF I (CH) LATIN AMERICA FUND (USD) IA-CLASS', 106.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(140, 'CH0104467334', 'SAAF I (CH) LATIN AMERICA FUND (USD) IA-CLASS', 1, 'SAAF I (CH) LATIN AMERICA FUND (USD) IA-CLASS', 106.09, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(141, 'CH.002''009''898''1', 'SAAF II (CH) GLOBAL FUND CHF-CLASS', 5, 'SAAF II (CH) GLOBAL FUND CHF-CLASS', 90.46, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(142, 'CH0020098981', 'SAAF II (CH) GLOBAL FUND CHF-CLASS', 5, 'SAAF II (CH) GLOBAL FUND CHF-CLASS', 90.46, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(143, 'CH.002''005''644''3', 'SAAF II (CH) GLOBAL FUND EUR-CLASS', 2, 'SAAF II (CH) GLOBAL FUND EUR-CLASS', 97.16, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(144, 'CH0020056443', 'SAAF II (CH) GLOBAL FUND EUR-CLASS', 2, 'SAAF II (CH) GLOBAL FUND EUR-CLASS', 97.16, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(145, 'CH.000''795''536''9', 'SAAF II (CH) GLOBAL FUND USD-CLASS', 1, 'SAAF II (CH) GLOBAL FUND USD-CLASS', 151.6, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(146, 'CH0007955369', 'SAAF II (CH) GLOBAL FUND USD-CLASS', 1, 'SAAF II (CH) GLOBAL FUND USD-CLASS', 151.6, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(147, 'CH.001''649''623''1', 'SAAF II (CH) LONG SHORT EQUITY FUND CHF-CLASS', 5, 'SAAF II (CH) LONG SHORT EQUITY FUND CHF-CLASS', 95.36, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(148, 'CH0016496231', 'SAAF II (CH) LONG SHORT EQUITY FUND CHF-CLASS', 5, 'SAAF II (CH) LONG SHORT EQUITY FUND CHF-CLASS', 95.36, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(149, 'CH.001''649''624''9', 'SAAF II (CH) LONG SHORT EQUITY FUND EUR-CLASS', 2, 'SAAF II (CH) LONG SHORT EQUITY FUND EUR-CLASS', 102.01, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(150, 'CH0016496249', 'SAAF II (CH) LONG SHORT EQUITY FUND EUR-CLASS', 2, 'SAAF II (CH) LONG SHORT EQUITY FUND EUR-CLASS', 102.01, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(151, 'CH.001''649''625''6', 'SAAF II (CH) LONG SHORT EQUITY FUND USD-CLASS', 1, 'SAAF II (CH) LONG SHORT EQUITY FUND USD-CLASS', 109.95, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(152, 'CH0016496256', 'SAAF II (CH) LONG SHORT EQUITY FUND USD-CLASS', 1, 'SAAF II (CH) LONG SHORT EQUITY FUND USD-CLASS', 109.95, '2010-11-30', 'HEDGE FUND', NULL, NULL),
(153, 'LU.017''310''976''9', 'CSPST (LUX) EVENT DRIVEN B', 1, 'CSPST (LUX) EVENT DRIVEN B', 1370.32, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(154, 'LU0173109769', 'CSPST (LUX) EVENT DRIVEN B', 1, 'CSPST (LUX) EVENT DRIVEN B', 1370.32, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(155, 'LU.017''309''668''5', 'CSPST (LUX) EVENT DRIVEN R EUR', 2, 'CSPST (LUX) EVENT DRIVEN R EUR', 1054.36, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(156, 'LU0173096685', 'CSPST (LUX) EVENT DRIVEN R EUR', 2, 'CSPST (LUX) EVENT DRIVEN R EUR', 1054.36, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(157, 'LU.009''638''296''4', 'CSPST (LUX) GLOBAL EQ LONG/SHORT B', 1, 'CSPST (LUX) GLOBAL EQ LONG/SHORT B', 1802.03, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(158, 'LU0096382964', 'CSPST (LUX) GLOBAL EQ LONG/SHORT B', 1, 'CSPST (LUX) GLOBAL EQ LONG/SHORT B', 1802.03, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(159, 'LU.017''309''102''5', 'CSPST (LUX) GLOBAL EQ LONG/SHORT R CHF', 5, 'CSPST (LUX) GLOBAL EQ LONG/SHORT R CHF', 829.94, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(160, 'LU0173091025', 'CSPST (LUX) GLOBAL EQ LONG/SHORT R CHF', 5, 'CSPST (LUX) GLOBAL EQ LONG/SHORT R CHF', 829.94, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(161, 'LU.017''309''340''1', 'CSPST (LUX) GLOBAL EQ LONG/SHORT R EUR', 2, 'CSPST (LUX) GLOBAL EQ LONG/SHORT R EUR', 952.11, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(162, 'LU0173093401', 'CSPST (LUX) GLOBAL EQ LONG/SHORT R EUR', 2, 'CSPST (LUX) GLOBAL EQ LONG/SHORT R EUR', 952.11, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(163, 'LU.017''310''925''6', 'CSPST (LUX) MULTI STRATEGY B', 1, 'CSPST (LUX) MULTI STRATEGY B', 1303, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(164, 'LU0173109256', 'CSPST (LUX) MULTI STRATEGY B', 1, 'CSPST (LUX) MULTI STRATEGY B', 1303, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(165, 'LU.017''310''941''3', 'CSPST (LUX) MULTI STRATEGY I', 1, 'CSPST (LUX) MULTI STRATEGY I', 1263.43, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(166, 'LU0173109413', 'CSPST (LUX) MULTI STRATEGY I', 1, 'CSPST (LUX) MULTI STRATEGY I', 1263.43, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(167, 'LU.017''309''200''7', 'CSPST (LUX) MULTI STRATEGY R CHF', 5, 'CSPST (LUX) MULTI STRATEGY R CHF', 1093.17, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(168, 'LU0173092007', 'CSPST (LUX) MULTI STRATEGY R CHF', 5, 'CSPST (LUX) MULTI STRATEGY R CHF', 1093.17, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(169, 'LU.017''309''501''8', 'CSPST (LUX) MULTI STRATEGY R EUR', 2, 'CSPST (LUX) MULTI STRATEGY R EUR', 1193.92, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(170, 'LU0173095018', 'CSPST (LUX) MULTI STRATEGY R EUR', 2, 'CSPST (LUX) MULTI STRATEGY R EUR', 1193.92, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(171, 'LU.017''310''160''0', 'CSPST (LUX) MULTI STRATEGY R GBP', 3, 'CSPST (LUX) MULTI STRATEGY R GBP', 1113.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(172, 'LU0173101600', 'CSPST (LUX) MULTI STRATEGY R GBP', 3, 'CSPST (LUX) MULTI STRATEGY R GBP', 1113.51, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(173, 'LU.029''427''755''2', 'CSPST (LUX) MULTI STRATEGY S CHF', 5, 'CSPST (LUX) MULTI STRATEGY S CHF', 967.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(174, 'LU0294277552', 'CSPST (LUX) MULTI STRATEGY S CHF', 5, 'CSPST (LUX) MULTI STRATEGY S CHF', 967.29, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(175, 'LU.029''427''763''6', 'CSPST (LUX) MULTI STRATEGY S EUR', 2, 'CSPST (LUX) MULTI STRATEGY S EUR', 1047.01, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(176, 'LU0294277636', 'CSPST (LUX) MULTI STRATEGY S EUR', 2, 'CSPST (LUX) MULTI STRATEGY S EUR', 1047.01, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(177, 'LU.029''427''798''2', 'CSPST (LUX) MULTI STRATEGY S GBP', 3, 'CSPST (LUX) MULTI STRATEGY S GBP', 1064.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(178, 'LU0294277982', 'CSPST (LUX) MULTI STRATEGY S GBP', 3, 'CSPST (LUX) MULTI STRATEGY S GBP', 1064.99, '2011-06-30', 'HEDGE FUND', NULL, NULL),
(179, 'LU.033''380''461''4', 'CS SICAV ONE (LUX) GTAA 10% B', 2, 'CS SICAV ONE (LUX) GTAA 10% B', 102.06, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(180, 'LU0333804614', 'CS SICAV ONE (LUX) GTAA 10% B', 2, 'CS SICAV ONE (LUX) GTAA 10% B', 102.06, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(181, 'LU.033''380''518''1', 'CS SICAV ONE (LUX) GTAA 10% R CHF', 5, 'CS SICAV ONE (LUX) GTAA 10% R CHF', 98.48, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(182, 'LU0333805181', 'CS SICAV ONE (LUX) GTAA 10% R CHF', 5, 'CS SICAV ONE (LUX) GTAA 10% R CHF', 98.48, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(183, 'LU.033''380''526''4', 'CS SICAV ONE (LUX) GTAA 10% R GBP', 3, 'CS SICAV ONE (LUX) GTAA 10% R GBP', 102.9, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(184, 'LU0333805264', 'CS SICAV ONE (LUX) GTAA 10% R GBP', 3, 'CS SICAV ONE (LUX) GTAA 10% R GBP', 102.9, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(185, 'LU.033''380''534''8', 'CS SICAV ONE (LUX) GTAA 10% R USD', 1, 'CS SICAV ONE (LUX) GTAA 10% R USD', 100.26, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(186, 'LU0333805348', 'CS SICAV ONE (LUX) GTAA 10% R USD', 1, 'CS SICAV ONE (LUX) GTAA 10% R USD', 100.26, '2011-06-01', 'HEDGE FUND', NULL, NULL),
(187, 'LU.052''528''569''7', 'CS SICAV ONE (LUX) SMALL AND MID CAP ALPHA LONG/SHORT B', 2, 'CS SICAV ONE (LUX) SMALL AND MID CAP ALPHA LONG/SHORT B', 101.04, '2011-08-11', 'HEDGE FUND', NULL, NULL),
(188, 'LU0525285697', 'CS SICAV ONE (LUX) SMALL AND MID CAP ALPHA LONG/SHORT B', 2, 'CS SICAV ONE (LUX) SMALL AND MID CAP ALPHA LONG/SHORT B', 101.04, '2011-08-11', 'HEDGE FUND', NULL, NULL),
(189, 'LU.033''732''228''2', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX B', 1, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX B', 87.65, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(190, 'LU0337322282', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX B', 1, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX B', 87.65, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(191, 'LU.033''732''244''9', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX I', 1, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX I', 1009.28, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(192, 'LU0337322449', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX I', 1, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX I', 1009.28, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(193, 'LU.033''732''252''2', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R CHF', 5, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R CHF', 85.39, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(194, 'LU0337322522', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R CHF', 5, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R CHF', 85.39, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(195, 'LU.033''732''287''8', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R EUR', 2, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R EUR', 87.84, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(196, 'LU0337322878', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R EUR', 2, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX R EUR', 87.84, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(197, 'LU.033''732''325''6', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX S EUR', 2, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX S EUR', 894.6, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(198, 'LU0337323256', 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX S EUR', 2, 'CS SOLUTIONS (LUX) DOW JONES CREDIT SUISSE ALL HEDGE INDEX S EUR', 894.6, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(199, 'LU.052''219''302''7', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY B EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY B EUR', 100.29, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(200, 'LU0522193027', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY B EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY B EUR', 100.29, '2011-08-17', 'HEDGE FUND', NULL, NULL),
(201, 'LU.052''219''353''0', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY F EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY F EUR', 1007.7, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(202, 'LU0522193530', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY F EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY F EUR', 1007.7, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(203, 'LU.052''219''361''3', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY I EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY I EUR', 1006.86, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(204, 'LU0522193613', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY I EUR', 2, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY I EUR', 1006.86, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(205, 'LU.052''219''400''9', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R CHF', 98.88, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(206, 'LU0522194009', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R CHF', 98.88, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(207, 'LU.062''751''509''0', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R GBP', 3, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R GBP', 97.66, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(208, 'LU0627515090', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R GBP', 3, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R GBP', 97.66, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(209, 'LU.052''219''370''4', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R USD', 99.79, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(210, 'LU0522193704', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY R USD', 99.79, '2011-08-24', 'HEDGE FUND', NULL, NULL),
(211, 'LU.052''219''434''8', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S CHF', 995.83, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(212, 'LU0522194348', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S CHF', 995.83, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(213, 'LU.052''219''442''1', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S USD', 990.83, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(214, 'LU0522194421', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY S USD', 990.83, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(215, 'LU.056''606''190''8', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T CHF', 996.5, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(216, 'LU0566061908', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T CHF', 5, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T CHF', 996.5, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(217, 'LU.056''606''351''6', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T USD', 992.08, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(218, 'LU0566063516', 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T USD', 1, 'CS SOLUTIONS (LUX) PRIMA MULTI-STRATEGY T USD', 992.08, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(219, 'LU.018''018''977''0', 'RESPONSABILITY GLOBAL MICROFINANCE FUND B', 1, 'RESPONSABILITY GLOBAL MICROFINANCE FUND B', 134.34, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(220, 'LU0180189770', 'RESPONSABILITY GLOBAL MICROFINANCE FUND B', 1, 'RESPONSABILITY GLOBAL MICROFINANCE FUND B', 134.34, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(221, 'LU.018''019''060''4', 'RESPONSABILITY GLOBAL MICROFINANCE FUND H CHF', 5, 'RESPONSABILITY GLOBAL MICROFINANCE FUND H CHF', 115.95, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(222, 'LU0180190604', 'RESPONSABILITY GLOBAL MICROFINANCE FUND H CHF', 5, 'RESPONSABILITY GLOBAL MICROFINANCE FUND H CHF', 115.95, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(223, 'LU.018''019''027''3', 'RESPONSABILITY GLOBAL MICROFINANCE FUND H EUR', 2, 'RESPONSABILITY GLOBAL MICROFINANCE FUND H EUR', 126.01, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(224, 'LU0180190273', 'RESPONSABILITY GLOBAL MICROFINANCE FUND H EUR', 2, 'RESPONSABILITY GLOBAL MICROFINANCE FUND H EUR', 126.01, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(225, 'LU.054''771''444''3', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 6, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 1102.59, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(226, 'LU0547714443', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 6, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 1102.59, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(227, 'LU.054''771''428''6', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 2, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 108.59, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(228, 'LU0547714286', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 2, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 108.59, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(229, 'LU.054''771''436''9', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 7, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 1087.76, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(230, 'LU0547714369', 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 7, 'CARLSON FUND - DNB NOR ECO ABSOLUTE RETURN A', 1087.76, '2011-09-08', 'HEDGE FUND', NULL, NULL),
(231, 'LU.054''771''479''9', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 7, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 1051.77, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(232, 'LU0547714799', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 7, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 1051.77, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(233, 'LU.054''771''487''2', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 6, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 1046.6, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(234, 'LU0547714872', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 6, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 1046.6, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(235, 'LU.054''771''452''6', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 2, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 104.99, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(236, 'LU0547714526', 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 2, 'CARLSON FUND - DNB NOR TMT ABSOLUTE RETURN A', 104.99, '2011-09-07', 'HEDGE FUND', NULL, NULL),
(237, 'LU.023''255''782''6', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND CHF A', 5, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND CHF A', 1462.19, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(238, 'LU0232557826', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND CHF A', 5, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND CHF A', 1462.19, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(239, 'LU.023''255''871''7', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND EUR B', 2, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND EUR B', 1568.3, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(240, 'LU0232558717', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND EUR B', 2, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND EUR B', 1568.3, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(241, 'LU.023''255''979''8', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD C', 1, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD C', 1573.17, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(242, 'LU0232559798', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD C', 1, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD C', 1573.17, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(243, 'LU.023''256''045''7', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD D', 1, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD D', 1628.48, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(244, 'LU0232560457', 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD D', 1, 'EUROPEAN SICAV ALLIANCE GLOBAL FUTURES FUND USD D', 1628.48, '2011-09-05', 'HEDGE FUND', NULL, NULL),
(245, 'GB.000''388''706''3', 'THE STAFFORD GLOBAL EQUITY FUND', 2, 'THE STAFFORD GLOBAL EQUITY FUND', 121.51, '2011-07-31', 'HEDGE FUND', NULL, NULL),
(246, 'GB0003887063', 'THE STAFFORD GLOBAL EQUITY FUND', 2, 'THE STAFFORD GLOBAL EQUITY FUND', 121.51, '2011-07-31', 'HEDGE FUND', NULL, NULL),
(247, 'CH.002''109''858''4', 'AIG DIVERSIFIED STRATEGIES FUND II (EVENT DRIVEN) I', 1, 'AIG DIVERSIFIED STRATEGIES FUND II (EVENT DRIVEN) I', 1199.45, '2011-01-31', 'HEDGE FUND', NULL, NULL),
(248, 'CH0021098584', 'AIG DIVERSIFIED STRATEGIES FUND II (EVENT DRIVEN) I', 1, 'AIG DIVERSIFIED STRATEGIES FUND II (EVENT DRIVEN) I', 1199.45, '2011-01-31', 'HEDGE FUND', NULL, NULL),
(249, 'CH.002''109''829''5', 'AIG DIVERSIFIED STRATEGIES FUND II (LONG/SHORT EQUITY) I', 1, 'AIG DIVERSIFIED STRATEGIES FUND II (LONG/SHORT EQUITY) I', 1136.54, '2011-01-31', 'HEDGE FUND', NULL, NULL),
(250, 'CH0021098295', 'AIG DIVERSIFIED STRATEGIES FUND II (LONG/SHORT EQUITY) I', 1, 'AIG DIVERSIFIED STRATEGIES FUND II (LONG/SHORT EQUITY) I', 1136.54, '2011-01-31', 'HEDGE FUND', NULL, NULL),
(251, 'CH.001''957''253''3', 'FALCON CAT BOND FUND CHF A', 5, 'FALCON CAT BOND FUND CHF A', 107.66, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(252, 'CH0019572533', 'FALCON CAT BOND FUND CHF A', 5, 'FALCON CAT BOND FUND CHF A', 107.66, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(253, 'CH.001''957''254''1', 'FALCON CAT BOND FUND CHF I', 5, 'FALCON CAT BOND FUND CHF I', 10993.9, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(254, 'CH0019572541', 'FALCON CAT BOND FUND CHF I', 5, 'FALCON CAT BOND FUND CHF I', 10993.9, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(255, 'CH.001''957''256''6', 'FALCON CAT BOND FUND EUR A', 2, 'FALCON CAT BOND FUND EUR A', 118.96, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(256, 'CH0019572566', 'FALCON CAT BOND FUND EUR A', 2, 'FALCON CAT BOND FUND EUR A', 118.96, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(257, 'CH.001''957''258''2', 'FALCON CAT BOND FUND USD A', 1, 'FALCON CAT BOND FUND USD A', 122.97, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(258, 'CH0019572582', 'FALCON CAT BOND FUND USD A', 1, 'FALCON CAT BOND FUND USD A', 122.97, '2011-08-31', 'HEDGE FUND', NULL, NULL),
(259, 'CH.001''273''775''2', 'GAM GLOBAL MULTI-ALPHA CHF Cl', 5, 'GAM GLOBAL MULTI-ALPHA CHF Cl', 109.55, '2011-09-12', 'HEDGE FUND', NULL, NULL),
(260, 'CH0012737752', 'GAM GLOBAL MULTI-ALPHA CHF Cl', 5, 'GAM GLOBAL MULTI-ALPHA CHF Cl', 109.55, '2011-09-12', 'HEDGE FUND', NULL, NULL),
(261, 'CH.001''273''776''0', 'GAM GLOBAL MULTI-ALPHA EUR Cl', 2, 'GAM GLOBAL MULTI-ALPHA EUR Cl', 125.19, '2011-09-12', 'HEDGE FUND', NULL, NULL),
(262, 'CH0012737760', 'GAM GLOBAL MULTI-ALPHA EUR Cl', 2, 'GAM GLOBAL MULTI-ALPHA EUR Cl', 125.19, '2011-09-12', 'HEDGE FUND', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `redemption_details`
--

CREATE TABLE IF NOT EXISTS `redemption_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funds_id` int(11) NOT NULL,
  `minimum_amount` double NOT NULL,
  `notice_period` varchar(20) NOT NULL,
  `trading_date` date NOT NULL,
  `settlement_cycle` varchar(50) NOT NULL,
  `minimum_units` tinyint(4) NOT NULL,
  `trading_frequency` varchar(50) NOT NULL,
  `cut_of_tiime` datetime NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `redemption_details`
--

INSERT INTO `redemption_details` (`id`, `funds_id`, `minimum_amount`, `notice_period`, `trading_date`, `settlement_cycle`, `minimum_units`, `trading_frequency`, `cut_of_tiime`, `additional_information`) VALUES
(1, 0, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(2, 4, 4444441, '', '0000-00-00', '', 127, '', '0000-00-00 00:00:00', ''),
(3, 5, 4444441, '', '0000-00-00', '', 127, '', '0000-00-00 00:00:00', ''),
(4, 6, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(5, 7, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(6, 8, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(7, 9, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(8, 11, 1, '1', '2010-03-26', '1', 1, '1', '2010-03-18 00:00:00', '1'),
(9, 11, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(10, 12, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(11, 13, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(12, 14, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(13, 24, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', '9'),
(14, 26, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', '9'),
(15, 27, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(16, 28, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(17, 29, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(18, 30, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(19, 31, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(20, 32, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(21, 36, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(22, 40, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(23, 42, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(24, 43, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', ''),
(25, 44, 0, '', '0000-00-00', '', 0, '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `redemption_fees`
--

CREATE TABLE IF NOT EXISTS `redemption_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `redemption_details_id` int(11) NOT NULL,
  `minimum_back_end_fee` double NOT NULL,
  `early_withdrawal_fee` double NOT NULL,
  `maximum_back_end_fee` double NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(22, 22, 0, 0, 0, ''),
(23, 23, 0, 0, 0, ''),
(24, 24, 0, 0, 0, ''),
(25, 25, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_isin` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_custody` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

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
-- Table structure for table `settlement_instruction`
--

CREATE TABLE IF NOT EXISTS `settlement_instruction` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `reference` varchar(11) NOT NULL,
  `client_name` text NOT NULL,
  `isin` varchar(16) NOT NULL,
  `currency` text NOT NULL,
  `fund_name` text NOT NULL,
  `unknown_isin` varchar(16) NOT NULL,
  `quantity` decimal(8,3) NOT NULL,
  `custody_ac` varchar(25) NOT NULL,
  `trade_date` date NOT NULL,
  `value_date` date NOT NULL,
  `counterparty_id` int(3) NOT NULL,
  `counterparty_name` text NOT NULL,
  `bic_counterparty` varchar(11) NOT NULL,
  `custodian_id` int(3) NOT NULL,
  `custodian_name` text NOT NULL,
  `bic_custodian` varchar(11) NOT NULL,
  `counterparty_ac_custodian` varchar(25) NOT NULL,
  `transfer_agent_name` text NOT NULL,
  `bic_transfer_agent` varchar(11) NOT NULL,
  `custodian_ac_transfer_agent` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` enum('pending','cancelled','settled') NOT NULL,
  `types` enum('to receive','to deliver') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settlement_instruction`
--

INSERT INTO `settlement_instruction` (`id`, `client_id`, `reference`, `client_name`, `isin`, `currency`, `fund_name`, `unknown_isin`, `quantity`, `custody_ac`, `trade_date`, `value_date`, `counterparty_id`, `counterparty_name`, `bic_counterparty`, `custodian_id`, `custodian_name`, `bic_custodian`, `counterparty_ac_custodian`, `transfer_agent_name`, `bic_transfer_agent`, `custodian_ac_transfer_agent`, `created_at`, `status`, `types`) VALUES
(13, 1, 'Vuj', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 'USD1', 100.000, '3', '2012-09-22', '2012-09-22', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '0', '2012-09-22 04:45:58', 'settled', 'to receive'),
(2, 1, 'vuj', 'November ADLER & CO. AG', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '3', 200.000, '2', '2012-09-19', '2012-09-19', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '1881', '2012-09-19 04:35:39', '', 'to receive'),
(3, 1, 'vuj', 'November ADLER & CO. AG', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '10', 1000.000, '1', '2012-09-19', '2012-09-19', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '2012', '2012-09-19 04:57:25', 'settled', 'to receive'),
(4, 1, 'vuj', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1000.000, '1', '2012-09-19', '2012-09-19', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '2012', '2012-09-19 05:07:23', 'pending', 'to receive'),
(5, 1, 'vuj', 'November ADLER & CO. AG', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 20000.000, '2', '2012-09-19', '2012-09-19', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '201212', '2012-09-19 05:46:47', 'settled', 'to deliver'),
(6, 1, 'vuj', 'November ADLER & CO. AG', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '2000', 10000.000, '1', '2012-09-19', '2012-09-20', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '3000', '2012-09-19 05:48:49', 'cancelled', 'to receive'),
(8, 1, '1', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 3100.000, '2', '2012-09-19', '2012-09-19', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '16', '2012-09-19 06:06:38', 'pending', 'to receive'),
(9, 1, 'hoangtest', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 10.000, '2', '2012-09-20', '2012-09-20', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '0', '2012-09-20 03:38:33', 'pending', 'to deliver'),
(10, 1, 'hoang', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', 'TLU', 1000.000, '2', '2012-09-21', '2012-09-21', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '', '2012-09-20 23:38:54', 'cancelled', 'to receive'),
(11, 1, 'hoang', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 200.000, '2', '2012-09-20', '2012-09-20', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '0', '2012-09-20 23:41:51', 'settled', 'to deliver'),
(12, 1, 'hoang1', '', 'IE.003''077''186''3', '1', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1000.000, '2', '2012-09-22', '2012-09-22', 2, 'UBS AG', 'UBSWCHZH80A', 11, 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '13', '2012-09-20 23:44:54', 'cancelled', 'to deliver');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_fee`
--

CREATE TABLE IF NOT EXISTS `subscription_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funds_id` int(11) NOT NULL,
  `minimum_front_end_fee` double NOT NULL,
  `maximum_front_end_fee` double NOT NULL,
  `management_fee` double NOT NULL,
  `additional_information` varchar(500) NOT NULL,
  `performance_fee` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subscription_fee`
--

INSERT INTO `subscription_fee` (`id`, `funds_id`, `minimum_front_end_fee`, `maximum_front_end_fee`, `management_fee`, `additional_information`, `performance_fee`) VALUES
(1, 1, 2, 3, 4, '5', NULL),
(2, 0, 0, 0, 0, '', NULL),
(3, 4, 333331, 333333, 0, '', NULL),
(4, 5, 333331, 333333, 0, '', NULL),
(5, 1, 2, 2, 3, '3', NULL),
(6, 7, 0, 0, 0, '', NULL),
(7, 8, 0, 0, 0, '', NULL),
(8, 9, 0, 0, 0, '', NULL),
(9, 41, 0, 0, 0, '', NULL),
(10, 11, 0, 0, 0, '', NULL),
(11, 12, 0, 0, 0, '', NULL),
(12, 13, 0, 0, 0, '', NULL),
(13, 14, 0, 0, 0, '', NULL),
(14, 24, 0, 0, 0, '9', NULL),
(15, 26, 0, 0, 0, '9', NULL),
(16, 27, 0, 0, 0, '', NULL),
(17, 28, 0, 0, 0, '', NULL),
(18, 29, 0, 0, 0, '', NULL),
(19, 30, 0, 0, 0, '', NULL),
(20, 31, 0, 0, 0, '', NULL),
(21, 32, 0, 0, 0, '', NULL),
(22, 36, 0, 0, 0, '', NULL),
(23, 40, 0, 0, 0, '', NULL),
(24, 42, 0, 0, 0, '', NULL),
(25, 43, 0, 0, 0, '', NULL),
(26, 44, 0, 0, 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trading`
--

CREATE TABLE IF NOT EXISTS `trading` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `client_reference` varchar(256) DEFAULT NULL,
  `id_isin` varchar(100) DEFAULT NULL,
  `fund_name` varchar(256) CHARACTER SET latin1 NOT NULL,
  `isin_reference` varchar(256) DEFAULT NULL,
  `currency` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `custody_ac` int(11) DEFAULT NULL,
  `remarks_vfs` varchar(256) DEFAULT NULL,
  `trade_remarks` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `types` enum('purchase','sell') CHARACTER SET latin1 NOT NULL,
  `status` enum('pending','completed','cancelled','settled') DEFAULT NULL,
  `settled_by` int(11) DEFAULT NULL,
  `settled_date` date DEFAULT NULL,
  `trade_date` date DEFAULT NULL,
  `settlement_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Client` (`id_client`),
  KEY `FK_Currency` (`currency`),
  KEY `FK_ISIN` (`id_isin`),
  KEY `FK_CustodyAC` (`custody_ac`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `trading`
--

INSERT INTO `trading` (`id`, `id_client`, `client_reference`, `id_isin`, `fund_name`, `isin_reference`, `currency`, `amount`, `custody_ac`, `remarks_vfs`, `trade_remarks`, `created_at`, `types`, `status`, `settled_by`, `settled_date`, `trade_date`, `settlement_date`) VALUES
(1, 1, 'Ref', '1', 'LEOS SMALL PEARLS FUND', '', 3, 100, 1, 'VFS 1', 'Trade 1', '2011-07-27 07:23:24', 'purchase', 'settled', 1, '2011-07-28', NULL, NULL),
(2, 1, 'jv', '1', 'LEOS SMALL PEARLS FUND', '', 3, 100, 1, '', '', '2011-07-27 09:14:12', 'purchase', 'cancelled', 6, '2012-03-01', NULL, NULL),
(3, 1, 'jv', '1', 'LEOS SMALL PEARLS FUND', '', 3, 100, 1, 'none', 'no commission', '2011-07-28 15:54:11', 'purchase', 'settled', 6, '2012-03-01', NULL, NULL),
(4, 1, 'jv', '2', 'FIDELITY FUNDS - AMERICAN DIVERSIFIED FUND', '', 4, 1000, 2, '-', 'only 2 % commission', '2011-07-28 15:59:25', 'sell', 'pending', NULL, NULL, NULL, NULL),
(5, 1, 'jv', '5', 'GAM STAR - INTERNATIONAL EQUITY FUND', '', 1, 10, 3, 'call me upon execution', 'full commission', '2011-07-28 16:06:15', 'sell', 'pending', NULL, NULL, NULL, NULL),
(6, 1, 'jv', '0', 'Poalim Asset Global Multi-Manager 20 USD', 'IE0030771863', 1, 100, 1, 'new isin', 'zero commission', '2011-07-28 16:06:15', 'purchase', 'pending', NULL, NULL, NULL, NULL),
(7, 1, 'abc', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 2, 'qq', 'ww', '2012-05-05 10:55:32', 'purchase', 'pending', NULL, NULL, '2012-05-01', '2012-05-05'),
(8, 1, 'abc', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, 'qq', 'ww', '2012-05-05 10:57:00', 'sell', 'pending', NULL, NULL, '2012-05-02', '2012-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_isin1` int(11) NOT NULL,
  `amount1` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `types` enum('sell','purchase','switch') CHARACTER SET latin1 NOT NULL,
  `status` enum('pending','completed','cancelled') CHARACTER SET latin1 NOT NULL,
  `comment_user` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `comment_admin` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_isin` int(11) NOT NULL,
  `fund_name` varchar(256) CHARACTER SET latin1 NOT NULL,
  `amount` int(11) NOT NULL,
  `id_custody1` varchar(256) CHARACTER SET latin1 NOT NULL,
  `trade_date` date NOT NULL,
  `settlement_date` date NOT NULL,
  `partner` varchar(256) CHARACTER SET latin1 NOT NULL,
  `custodian` varchar(256) CHARACTER SET latin1 NOT NULL,
  `custody2` varchar(256) CHARACTER SET latin1 NOT NULL,
  `transfer_agent` varchar(256) CHARACTER SET latin1 NOT NULL,
  `custody3` varchar(256) CHARACTER SET latin1 NOT NULL,
  `comment` varchar(10000) CHARACTER SET latin1 NOT NULL,
  `bic1` varchar(256) CHARACTER SET latin1 NOT NULL,
  `bic2` varchar(256) CHARACTER SET latin1 NOT NULL,
  `bic3` varchar(256) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `types` enum('purchase','sell') CHARACTER SET latin1 NOT NULL,
  `status` enum('pending','completed','cancelled') CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `transfers_new`
--

CREATE TABLE IF NOT EXISTS `transfers_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `client_reference` varchar(11) DEFAULT NULL,
  `id_isin` varchar(100) DEFAULT NULL,
  `fund_name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `isin_reference` varchar(64) DEFAULT NULL,
  `currency` int(3) DEFAULT NULL,
  `amount` int(13) NOT NULL,
  `custody_ac` int(11) DEFAULT NULL,
  `trade_date` date NOT NULL,
  `settlement_date` date NOT NULL,
  `sellerid` varchar(50) DEFAULT NULL,
  `seller` varchar(32) DEFAULT NULL,
  `bic_seller` varchar(11) DEFAULT NULL,
  `custodianid` varchar(50) DEFAULT NULL,
  `custodian` varchar(32) DEFAULT NULL,
  `bic_custodian` varchar(11) DEFAULT NULL,
  `seller_ac_cust` varchar(12) DEFAULT NULL,
  `transfer_agent` varchar(32) CHARACTER SET latin1 NOT NULL,
  `bic_ta` varchar(11) DEFAULT NULL,
  `cust_ac_ta` varchar(12) DEFAULT NULL,
  `comment` varchar(256) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `types` enum('incoming','outgoing') DEFAULT NULL,
  `status` enum('pending','completed','cancelled','settled') DEFAULT NULL,
  `transaction_type` enum('receive','deliver') DEFAULT NULL,
  `settled_by` int(11) DEFAULT NULL,
  `settled_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Client` (`id_client`),
  KEY `FK_Currency` (`currency`),
  KEY `FK_ISIN` (`id_isin`),
  KEY `FK_CustodyAC` (`custody_ac`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `transfers_new`
--

INSERT INTO `transfers_new` (`id`, `id_client`, `client_reference`, `id_isin`, `fund_name`, `isin_reference`, `currency`, `amount`, `custody_ac`, `trade_date`, `settlement_date`, `sellerid`, `seller`, `bic_seller`, `custodianid`, `custodian`, `bic_custodian`, `seller_ac_cust`, `transfer_agent`, `bic_ta`, `cust_ac_ta`, `comment`, `created_at`, `types`, `status`, `transaction_type`, `settled_by`, `settled_date`) VALUES
(11, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'incoming', 'settled', 'receive', 6, '2012-09-20 22:23:40'),
(10, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-17', '2012-05-22', '2', 'BANK XYZ', 'BXYZ1234XXX', '11', 'CUSTODIAN ABC', 'CABC0987XXX', '20.123.456', 'TA ABC', 'TAABC456XXX', '1881', '', '2012-05-17 13:58:06', 'incoming', 'settled', 'receive', 6, '2012-09-20 22:59:22'),
(17, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'outgoing', 'pending', 'deliver', NULL, NULL),
(18, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'incoming', 'settled', 'receive', NULL, NULL),
(19, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'outgoing', 'settled', 'deliver', NULL, NULL),
(20, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'incoming', 'cancelled', 'receive', NULL, NULL),
(21, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 1, '2012-05-29', '2012-06-01', '', 'BANK XYZ', '', '', 'custodian xyz', '', '', '', '', '', '', '2012-05-29 21:35:23', 'outgoing', 'cancelled', 'deliver', NULL, NULL),
(22, 1, '2', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 1, 3, '2012-09-13', '2012-09-21', '1', 'REICHMUTH & CO.', 'REICCH22XXX', '100', 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '', '', '2012-09-12 20:46:21', 'incoming', 'settled', 'receive', 6, '2012-09-16 21:37:45'),
(23, 1, '2', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 1, 2, '2012-09-13', '2012-10-21', '2', 'UBS AG', 'UBSWCHZH80A', '100', 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610900', 'TA ABC', 'TAABC456XXX', '', '', '2012-09-12 20:50:06', 'outgoing', 'settled', 'deliver', 6, '2012-09-21 03:22:11'),
(24, 1, 'vuj', 'IE.003''077''186''3', 'POALIM ASSET GLOBAL MULTI-MANAGER 20 USD', '', 1, 100, 2, '2012-09-17', '2012-09-20', '3', 'ADLER & CO. AG', 'ADCOCHZZXXX', '100', 'REICHMUTH & CO.', 'REICCH22XXX', 'R49610902', 'TA ABC', 'TAABC456XXX', '12', '', '2012-09-17 17:12:44', 'incoming', 'cancelled', 'receive', 6, '2012-09-20 23:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_agent`
--

CREATE TABLE IF NOT EXISTS `transfer_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
(31, '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `officephone` varchar(15) DEFAULT NULL,
  `client_name` varchar(256) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  `clientid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `loginid`, `password`, `email`, `officephone`, `client_name`, `phone`, `firstname`, `lastname`, `department`, `role`, `active`, `clientid`) VALUES
(1, 'hoangdx2212', 'hoangtrang12', 'hoangdx12@gmail.com', '', 'Hoang Do Xuan', '', 'November', 'ADLER ', 'SETTLEMENT', 'user', '0', 1),
(2, '2', '1', '', '', '', '', '', 'BAGEFI AG', 'SETTLEMENT', 'user', '0', 1),
(3, '3', '4', 'a', '0', '0', '0', 'GEIGERPBXXX', 'GEIGER & CO. PRIVATBANK AG', NULL, 'user', '1', 0),
(4, '4', '3', 'a', '0', '0', '0', 'BHSCHAEFXXX', 'BANKHAUS SCHAEFER', NULL, 'user', '1', 0),
(5, 'sascha', 'handle', 'a', '0', '0', '0', 'HANDLEPBXXX', 'HANDLE & PARTNERS PRIVATE BANK', NULL, 'user', '1', 0),
(6, 'jan', '123456', 'spicemaster@gmx.ch', '0', '0', '0', '0', 'Jan', NULL, 'admin', '1', 0),
(11, 'reja', '123456', 'bachchu_ju@yahoo.com', '0', '0', '0', 'ARDD', 'A.Reja', NULL, 'admin', '1', 0),
(12, 'hiepnv', 'hiepga223', 'hiepnv.69@gmail.com', '098', '392', '169', 'Van', 'Hiep', 'FPT', 'admin', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
