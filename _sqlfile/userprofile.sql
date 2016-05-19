-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2016 at 02:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` text NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_country` varchar(255) DEFAULT NULL,
  `user_ufid` int(11) DEFAULT NULL,
  `user_currentaddress` varchar(255) DEFAULT NULL,
  `user_currentcountry` varchar(255) DEFAULT NULL,
  `user_veteran` varchar(255) DEFAULT NULL,
  `user_phno` varchar(255) DEFAULT NULL,
  `user_permanentaddress` varchar(255) DEFAULT NULL,
  `user_permanentcountry` varchar(255) DEFAULT NULL,
  `user_disability` varchar(255) DEFAULT NULL,
  `user_visa` varchar(255) DEFAULT NULL,
  `user_resume` text,
  `user_coverletter` text,
  `p1` int(11) NOT NULL DEFAULT '0',
  `p2` int(11) NOT NULL DEFAULT '0',
  `p3` int(11) NOT NULL DEFAULT '0',
  `p4` int(11) NOT NULL DEFAULT '0',
  `p5` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`),
  UNIQUE KEY `user_ufid` (`user_ufid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1489 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_name`, `user_username`, `user_gender`, `user_address`, `user_country`, `user_ufid`, `user_currentaddress`, `user_currentcountry`, `user_veteran`, `user_phno`, `user_permanentaddress`, `user_permanentcountry`, `user_disability`, `user_visa`, `user_resume`, `user_coverletter`, `p1`, `p2`, `p3`, `p4`, `p5`) VALUES
(1487, 'kedar@fghjk.com', 'fghjkl', 'kedar', 'fghjkl', '', NULL, NULL, 45678, '', 'US', 'no', '', '', 'US', 'no', 'F1', NULL, NULL, 1, 0, 0, 0, 0),
(1488, 'Kedar.amrolkar@gmail.com', 'ghjkljhgf', 'kedar Amrolkar', 'KedarAmrolkar', NULL, NULL, NULL, 18418332, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;