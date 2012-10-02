-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2012 at 07:57 PM
-- Server version: 5.0.95
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web1244_gajendra`
--

-- --------------------------------------------------------

--
-- Table structure for table `fund_database`
--

CREATE TABLE IF NOT EXISTS `fund_database` (
  `isin` varchar(16) NOT NULL,
  `currency` text NOT NULL,
  `fund_name` text NOT NULL,
  `fund_company` text NOT NULL,
  `fund_category` text NOT NULL,
  `fund_status` text NOT NULL,
  `domicile` text NOT NULL,
  `net_asset_value` decimal(9,3) NOT NULL,
  `nav_date` date NOT NULL,
  `performance_start` decimal(5,2) NOT NULL,
  `performance_ytd` decimal(5,2) NOT NULL,
  `fund_strategy` text NOT NULL,
  `primary_strategy` text NOT NULL,
  `secondary_strategy` text NOT NULL,
  `investment_objectives` text NOT NULL,
  `unique_feature` text NOT NULL,
  `inception_date` date NOT NULL,
  `current_assets` varchar(11) NOT NULL,
  `benchmark` varchar(11) NOT NULL,
  `risk_appetite` text NOT NULL,
  `geographical_exposure` text NOT NULL,
  `last_audit` date NOT NULL,
  `add_info` text NOT NULL,
  `initial_min_investment` int(12) NOT NULL,
  `min_investment` int(12) NOT NULL,
  `min_units_investment` int(12) NOT NULL,
  `lockup_period_sub` varchar(25) NOT NULL,
  `trade_frequency_sub` text NOT NULL,
  `notice_period_sub` varchar(25) NOT NULL,
  `trade_date_sub` varchar(25) NOT NULL,
  `cutoff_time_sub` time NOT NULL,
  `settlement_cycle_sub` text NOT NULL,
  `add_info_1` text NOT NULL,
  `min_frontend_fee` varchar(25) NOT NULL,
  `max_frontend_fee` varchar(25) NOT NULL,
  `add_info_2` text NOT NULL,
  `min_amount_red` int(12) NOT NULL,
  `min_units_red` int(12) NOT NULL,
  `trade_frequency_red` text NOT NULL,
  `notice_period_red` varchar(25) NOT NULL,
  `trade_date_red` varchar(25) NOT NULL,
  `cutoff_time_red` time NOT NULL,
  `settlement_cycle_red` text NOT NULL,
  `add_info_3` text NOT NULL,
  `min_backend_fee` varchar(25) NOT NULL,
  `max_backend_fee` varchar(25) NOT NULL,
  `early_withdrawal_fee` varchar(25) NOT NULL,
  `add_info_4` text NOT NULL,
  `management_fee` varchar(25) NOT NULL,
  `performance_fee` varchar(25) NOT NULL,
  `add_info_5` text NOT NULL,
  `accepted_investor_types` text NOT NULL,
  `high_water_mark` varchar(25) NOT NULL,
  `hurdle_rate` varchar(25) NOT NULL,
  `custodian_name` text NOT NULL,
  `postal_address_c1` varchar(50) NOT NULL,
  `postal_address_c2` varchar(50) NOT NULL,
  `postal_address_c3` varchar(50) NOT NULL,
  `postal_address_c4` varchar(50) NOT NULL,
  `key_contact_c` text NOT NULL,
  `email_c` varchar(50) NOT NULL,
  `phone_c` varchar(25) NOT NULL,
  `fax_c` varchar(25) NOT NULL,
  `transfer_agent_name` text NOT NULL,
  `postal_address_ta1` varchar(50) NOT NULL,
  `postal_address_ta2` varchar(50) NOT NULL,
  `postal_address_ta3` varchar(50) NOT NULL,
  `postal_address_ta4` varchar(50) NOT NULL,
  `key_contact_ta` text NOT NULL,
  `email_ta` varchar(50) NOT NULL,
  `phone_ta` varchar(25) NOT NULL,
  `fax_ta` varchar(25) NOT NULL,
  `fund_advisor_name` text NOT NULL,
  `postal_address_adv1` varchar(50) NOT NULL,
  `postal_address_adv2` varchar(50) NOT NULL,
  `postal_address_adv3` varchar(50) NOT NULL,
  `postal_address_adv4` varchar(50) NOT NULL,
  `key_contact_adv` text NOT NULL,
  `email_adv` varchar(50) NOT NULL,
  `phone_adv` varchar(25) NOT NULL,
  `fax_adv` varchar(25) NOT NULL,
  `fund_auditor_name` text NOT NULL,
  `postal_address_aud1` varchar(50) NOT NULL,
  `postal_address_aud2` varchar(50) NOT NULL,
  `postal_address_aud3` varchar(50) NOT NULL,
  `postal_address_aud4` varchar(50) NOT NULL,
  `key_contact_aud` text NOT NULL,
  `email_aud` varchar(50) NOT NULL,
  `phone_aud` varchar(25) NOT NULL,
  `fax_aud` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
