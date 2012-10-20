-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2012 at 05:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usergroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `membergroupids` char(250) NOT NULL DEFAULT '',
  `displaygroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `passworddate` date NOT NULL DEFAULT '0000-00-00',
  `email` char(100) NOT NULL DEFAULT '',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `parentemail` char(50) NOT NULL DEFAULT '',
  `homepage` char(100) NOT NULL DEFAULT '',
  `icq` char(20) NOT NULL DEFAULT '',
  `aim` char(20) NOT NULL DEFAULT '',
  `yahoo` char(32) NOT NULL DEFAULT '',
  `msn` char(100) NOT NULL DEFAULT '',
  `skype` char(32) NOT NULL DEFAULT '',
  `showvbcode` smallint(5) unsigned NOT NULL DEFAULT '0',
  `showbirthday` smallint(5) unsigned NOT NULL DEFAULT '2',
  `usertitle` char(250) NOT NULL DEFAULT '',
  `customtitle` smallint(6) NOT NULL DEFAULT '0',
  `joindate` int(10) unsigned NOT NULL DEFAULT '0',
  `daysprune` smallint(6) NOT NULL DEFAULT '0',
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `lastactivity` int(10) unsigned NOT NULL DEFAULT '0',
  `lastpost` int(10) unsigned NOT NULL DEFAULT '0',
  `lastpostid` int(10) unsigned NOT NULL DEFAULT '0',
  `posts` int(10) unsigned NOT NULL DEFAULT '0',
  `reputation` int(11) NOT NULL DEFAULT '10',
  `reputationlevelid` int(10) unsigned NOT NULL DEFAULT '1',
  `timezoneoffset` char(4) NOT NULL DEFAULT '',
  `pmpopup` smallint(6) NOT NULL DEFAULT '0',
  `avatarid` smallint(6) NOT NULL DEFAULT '0',
  `avatarrevision` int(10) unsigned NOT NULL DEFAULT '0',
  `profilepicrevision` int(10) unsigned NOT NULL DEFAULT '0',
  `sigpicrevision` int(10) unsigned NOT NULL DEFAULT '0',
  `options` int(10) unsigned NOT NULL DEFAULT '33570831',
  `birthday` char(10) NOT NULL DEFAULT '',
  `birthday_search` date NOT NULL DEFAULT '0000-00-00',
  `maxposts` smallint(6) NOT NULL DEFAULT '-1',
  `startofweek` smallint(6) NOT NULL DEFAULT '1',
  `ipaddress` char(15) NOT NULL DEFAULT '',
  `referrerid` int(10) unsigned NOT NULL DEFAULT '0',
  `languageid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `emailstamp` int(10) unsigned NOT NULL DEFAULT '0',
  `threadedmode` smallint(5) unsigned NOT NULL DEFAULT '0',
  `autosubscribe` smallint(6) NOT NULL DEFAULT '-1',
  `pmtotal` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pmunread` smallint(5) unsigned NOT NULL DEFAULT '0',
  `salt` char(30) NOT NULL DEFAULT '',
  `ipoints` int(10) unsigned NOT NULL DEFAULT '0',
  `infractions` int(10) unsigned NOT NULL DEFAULT '0',
  `warnings` int(10) unsigned NOT NULL DEFAULT '0',
  `infractiongroupids` varchar(255) NOT NULL DEFAULT '',
  `infractiongroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adminoptions` int(10) unsigned NOT NULL DEFAULT '0',
  `profilevisits` int(10) unsigned NOT NULL DEFAULT '0',
  `friendcount` int(10) unsigned NOT NULL DEFAULT '0',
  `friendreqcount` int(10) unsigned NOT NULL DEFAULT '0',
  `vmunreadcount` int(10) unsigned NOT NULL DEFAULT '0',
  `vmmoderatedcount` int(10) unsigned NOT NULL DEFAULT '0',
  `socgroupinvitecount` int(10) unsigned NOT NULL DEFAULT '0',
  `socgroupreqcount` int(10) unsigned NOT NULL DEFAULT '0',
  `pcunreadcount` int(10) unsigned NOT NULL DEFAULT '0',
  `pcmoderatedcount` int(10) unsigned NOT NULL DEFAULT '0',
  `gmmoderatedcount` int(10) unsigned NOT NULL DEFAULT '0',
  `assetposthash` varchar(32) NOT NULL DEFAULT '',
  `fbuserid` varchar(255) NOT NULL DEFAULT '',
  `fbjoindate` int(10) unsigned NOT NULL DEFAULT '0',
  `fbname` varchar(255) NOT NULL DEFAULT '',
  `logintype` enum('vb','fb') NOT NULL DEFAULT 'vb',
  `fbaccesstoken` varchar(255) NOT NULL DEFAULT '',
  `fbprofilepicurl` varchar(100) NOT NULL DEFAULT '',
  `bloggroupreqcount` int(10) unsigned NOT NULL DEFAULT '0',
  `showblogcss` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`),
  KEY `usergroupid` (`usergroupid`),
  KEY `username` (`username`),
  KEY `birthday` (`birthday`,`showbirthday`),
  KEY `birthday_search` (`birthday_search`),
  KEY `referrerid` (`referrerid`),
  KEY `fbuserid` (`fbuserid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `usergroupid`, `membergroupids`, `displaygroupid`, `username`, `password`, `passworddate`, `email`, `styleid`, `parentemail`, `homepage`, `icq`, `aim`, `yahoo`, `msn`, `skype`, `showvbcode`, `showbirthday`, `usertitle`, `customtitle`, `joindate`, `daysprune`, `lastvisit`, `lastactivity`, `lastpost`, `lastpostid`, `posts`, `reputation`, `reputationlevelid`, `timezoneoffset`, `pmpopup`, `avatarid`, `avatarrevision`, `profilepicrevision`, `sigpicrevision`, `options`, `birthday`, `birthday_search`, `maxposts`, `startofweek`, `ipaddress`, `referrerid`, `languageid`, `emailstamp`, `threadedmode`, `autosubscribe`, `pmtotal`, `pmunread`, `salt`, `ipoints`, `infractions`, `warnings`, `infractiongroupids`, `infractiongroupid`, `adminoptions`, `profilevisits`, `friendcount`, `friendreqcount`, `vmunreadcount`, `vmmoderatedcount`, `socgroupinvitecount`, `socgroupreqcount`, `pcunreadcount`, `pcmoderatedcount`, `gmmoderatedcount`, `assetposthash`, `fbuserid`, `fbjoindate`, `fbname`, `logintype`, `fbaccesstoken`, `fbprofilepicurl`, `bloggroupreqcount`, `showblogcss`) VALUES
(1, 6, '', 0, 'tiennd', '28579cb562b2ab94c2ee89c2246bec83', '2012-10-17', 'tiendn1010@gmail.com', 0, '', '', '', '', '', '', '', 2, 2, 'Administrator', 0, 1350462001, 0, 1350472117, 1350550026, 1350464067, 0, 1, 10, 1, '', 0, 0, 0, 0, 0, 11552855, '', '0000-00-00', -1, 1, '', 0, 0, 0, 0, -1, 0, 0, '/M9Xv<nC.TT$gz5ZmVj1|xEqWt98zv', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 'vb', '', '', 0, 1),
(2, 2, '', 0, 'tiendqnh', '33df361df6973b24611a632fef36fc3d', '2012-10-17', 'tiendqnh@yahoo.com.vn', 0, '', '', '', '', '', '', '', 1, 0, 'Junior Member', 0, 1350463938, 0, 1350463974, 1350464109, 1350464109, 2, 1, 10, 5, '7', 0, 0, 0, 0, 0, 45108311, '', '0000-00-00', -1, -1, '', 0, 1, 0, 0, -1, 0, 0, '''Yyfu5C>tPn7-a-M6M_O:(78p746&/', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', 'vb', '', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
