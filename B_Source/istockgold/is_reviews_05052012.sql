-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2012 at 11:21 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `istockgold`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_reviews`
--

CREATE TABLE IF NOT EXISTS `is_reviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `title` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `date` date NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `is_reviews`
--

INSERT INTO `is_reviews` (`id`, `name`, `location`, `email`, `phone_number`, `title`, `comment`, `rating`, `date`, `order_id`) VALUES
(1, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(2, 'lê xuân tiến', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(3, 'nguyễn sơn tùng', 'UK', 'tungns@gmail.com', 9877667, 'Extracts from BBC interview', 'Chinese officials on Wednesday accused the US of interference in China''s domestic affairs and demanded an apology for housing Mr Chen at the US embassy.\r\n\r\nState media have been largely quiet on the issue but a commentary in the state-run Global Times said progress in human rights ''''cannot be realised in one night through a political decision, nor can it be donated by outsiders''''.', 4, '2012-05-23', 2),
(4, 'nguyễn sơn tùng', 'UK', 'tungns@gmail.com', 9877667, 'Extracts from BBC interview', 'Chinese officials on Wednesday accused the US of interference in China''s domestic affairs and demanded an apology for housing Mr Chen at the US embassy.\r\n\r\nState media have been largely quiet on the issue but a commentary in the state-run Global Times said progress in human rights ''''cannot be realised in one night through a political decision, nor can it be donated by outsiders''''.', 4, '2012-05-23', 2),
(5, 'lê xuân tiến', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(6, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(7, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1),
(8, 'tienlx', 'vietnam', 'eesvietnamtien@gmai.com', 98976654, 'Dark day', 'He said villagers who had helped him were "receiving retribution".\r\n\r\nMr Chen told Rep Chris Smith, who was chairing the hearing at the Congressional commission on China: "I want to meet with Secretary Clinton. I hope I can get more help from her."', 4, '2012-05-22', 3),
(9, 'nguyễn vũ an', 'Vietnam', 'annvttmk52@gmai.com', 98876554, 'Don''t judge a book by its cover', 'Mr Chen said he feared for the safety of his family and wanted to meet visiting US Secretary of State Hillary Clinton face-to-face.\r\n\r\nThe activist is in a Beijing hospital sealed off by Chinese police.\r\n\r\nThe Chinese foreign ministry, in a statement, said Mr Chen could apply to study abroad if he wanted.', 5, '2012-05-04', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
