-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 12:44 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flash_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_fg_news`
--

CREATE TABLE IF NOT EXISTS `n_fg_news` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `create_date` date NOT NULL,
  `image` text NOT NULL,
  `namee` text NOT NULL,
  `contente` text NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `n_fg_news`
--

INSERT INTO `n_fg_news` (`id`, `name`, `content`, `create_date`, `image`, `namee`, `contente`, `author`) VALUES
(1, 'Belote bienvenue:en jeu tres amusant', 'Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2013-02-15', '<p>\n	<img alt="" src="/webflashgame/assets/flash_game/upload/images/mario_gif.gif" style="width: 1062px; height: 842px;" /></p>', 'Name english1', 'Content English 1 Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', ''),
(2, 'them cai moi thu xem', 'ko biet viet noi dung j ca', '2013-02-19', '<p>\r\n	<img alt="" src="/webflashgame/assets/flash_game/upload/images/mario_gif.gif" style="width: 1062px; height: 842px;" /></p>', 'Name english2', 'Content English 2222222 Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', ''),
(3, 'New 2', 'asdfjkl', '2013-02-20', '<p>\r\n	<img alt="" src="/webflashgame/assets/flash_game/upload/images/mario_gif.gif" style="width: 1062px; height: 842px;" /></p>', 'Name english3', 'Content English 3333 Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur dipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', ''),
(4, 'them cai cho ruc ro1', '<p>\r\n	ko co noi dung j ca</p>\r\n', '2013-02-19', '<p>\r\n	<img alt="surprise" height="20" src="http://localhost/webflashgame/assets/flash_game/ckeditor/plugins/smiley/images/omg_smile.gif" title="surprise" width="20" /></p>\r\n', 'add new cho no ruc ro', '<p>\r\n	co content @@</p>\r\n', 'trung');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
