-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2012 at 12:42 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unc`
--

-- --------------------------------------------------------

--
-- Table structure for table `unc_comment`
--

CREATE TABLE IF NOT EXISTS `unc_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `news_id` int(11) DEFAULT NULL,
  `reader_id` int(11) DEFAULT NULL,
  `reader_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment_time` datetime NOT NULL,
  `comment_name` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `like` int(11) NOT NULL,
  `vipham` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `unc_comment`
--

INSERT INTO `unc_comment` (`comment_id`, `comment_content`, `news_id`, `reader_id`, `reader_email`, `comment_time`, `comment_name`, `like`, `vipham`) VALUES
(33, '1', 1, 1, '', '2012-10-21 04:38:26', '', 0, 0),
(34, '2\r\n', 1, 2, '', '2012-10-21 04:39:27', '', 0, 0),
(35, '3', 1, 2, '', '2012-10-21 07:01:44', '', 0, 0),
(36, 'nguyen tien manh', 23, 2, '', '2012-10-21 11:43:40', '', 0, 0),
(37, 'cái gì đó', 3, 1, '', '2012-10-22 04:27:32', '', 0, 0),
(38, 'không hiểu lý do tại sao', 3, 1, '', '2012-10-22 04:28:42', '', 0, 0),
(39, 'nguy&aacute;&raquo;', 3, 1, '', '2012-10-22 04:40:11', '', 0, 0),
(40, 'bình luận 1\r\n', 9, 2, '', '2012-10-22 08:57:16', '', 0, 0),
(41, 'bình luận 2', 9, 2, '', '2012-10-22 08:58:13', '', 0, 0),
(42, 'bình luận 3', 9, 2, '', '2012-10-22 08:58:20', '', 0, 0),
(43, 'bình luận 4', 9, 1, '', '2012-10-22 08:58:36', '', 0, 0),
(44, 'bình luận 5', 9, 1, '', '2012-10-22 08:58:43', '', 0, 0),
(49, 'jaliusdfadsfdsf', 2, NULL, 'super@admin.com', '2012-11-03 02:03:02', 'Sieu nhan', 6, 4),
(50, 'jakjdsfadsf', 2, NULL, 'tien@hjaf.com', '2012-11-03 03:03:50', 'tien', 7, 2),
(51, 'Dù sao bạn vẫn còn may mắn là nhận được trợ cấp thất nghiệp. Mình chấm dứt HĐ được 2 tháng mà vẫn chưa nhận được sổ BH vì công ty chưa thanh toán tiền BH cho BHXH, thế nên mình không thể làm được trợ cấp thất nghiệp. 9-10 triệu thế là đi tong, ức chế lắm mà chả biết kêu ai. ', 2, NULL, 'jjj@gmail.com', '2012-11-04 09:52:27', 'PVCuong', 27, 2),
(52, 'Anh đi anh nhớ quê nhà, nhớ canh rau muống nhớ cà dầm tương!', 2, NULL, 'long@longba.com', '2012-11-04 04:16:47', 'Than Long', 8, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
