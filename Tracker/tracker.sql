-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2016 at 08:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `date` varchar(40) NOT NULL,
  `bill` int(30) NOT NULL AUTO_INCREMENT,
  `client` int(30) NOT NULL,
  `clientname` varchar(30) NOT NULL,
  `nassignment` int(30) NOT NULL,
  `assignment` varchar(30) NOT NULL,
  `detail` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `month` varchar(40) NOT NULL,
  PRIMARY KEY (`bill`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`date`, `bill`, `client`, `clientname`, `nassignment`, `assignment`, `detail`, `amount`, `service`, `month`) VALUES
('2016-12-01', 1, 1, 'abcxyz', 1, '1', 'efwgw', '400', '2', 'December');

-- --------------------------------------------------------

--
-- Table structure for table `indexing`
--

CREATE TABLE IF NOT EXISTS `indexing` (
  `file` int(30) NOT NULL AUTO_INCREMENT,
  `gp` varchar(30) NOT NULL,
  `nm` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `address` varchar(400) NOT NULL,
  `aadhaar` varchar(40) NOT NULL,
  `pan` varchar(40) NOT NULL,
  `passport` varchar(40) NOT NULL,
  `gst` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `stat` varchar(40) NOT NULL,
  `audit` varchar(40) NOT NULL,
  `advance` varchar(40) NOT NULL,
  `tds` varchar(40) NOT NULL,
  `gsta` varchar(40) NOT NULL,
  `contact1` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact2` varchar(40) NOT NULL,
  `mobile2` varchar(40) NOT NULL,
  `email2` varchar(40) NOT NULL,
  `month` varchar(30) NOT NULL,
  PRIMARY KEY (`file`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `indexing`
--

INSERT INTO `indexing` (`file`, `gp`, `nm`, `father`, `address`, `aadhaar`, `pan`, `passport`, `gst`, `dob`, `stat`, `audit`, `advance`, `tds`, `gsta`, `contact1`, `mobile`, `email`, `contact2`, `mobile2`, `email2`, `month`) VALUES
(1, 'gtrgr', 'gtrhgr', 'frege', 'fregeg', '123456789012', 'ascrf1234e', 'bgbrb', 'gtgr', '2016-12-05', 'LLP', 'Yes', 'Yes', 'No', 'Yes', 'gfgbrbhtr', '9479063708', 'pksks34@gmail.com', '', '', '', ''),
(2, 'Agr', 'Prashant kumar singh', 'htjtyjt', 'Ram kumar tiwari\r\nkududand ganj,behind dikshit narsing home', '123456789012', 'aaaaa1234f', 'hythjt', '23', '2016-12-08', 'LLP', 'Yes', 'No', 'Yes', 'No', '7724567890', '9479063708', 'abcde@gmail.com', '9479063708', '9479063708', '', 'December');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `date` varchar(40) NOT NULL,
  `nm` varchar(40) NOT NULL,
  `file` int(30) NOT NULL,
  `bill` int(11) NOT NULL,
  `receipt` int(30) NOT NULL AUTO_INCREMENT,
  `mode` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `tds` varchar(30) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `receiptd` date NOT NULL,
  `chequen` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `clearing` date NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `month` varchar(40) NOT NULL,
  PRIMARY KEY (`receipt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`date`, `nm`, `file`, `bill`, `receipt`, `mode`, `amount`, `tds`, `discount`, `receiptd`, `chequen`, `bank`, `clearing`, `remarks`, `month`) VALUES
('2016-12-07', 'abcxyz', 1, 2, 1, 'Cheque', '300', '3', '2', '2016-12-01', '2344567', 'sbi', '2016-12-27', 'regrbgfbhg', 'December');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `file` int(30) NOT NULL,
  `nm` varchar(30) NOT NULL,
  `pan` varchar(30) NOT NULL,
  `assignment` int(30) NOT NULL AUTO_INCREMENT,
  `assignmentd` varchar(30) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `bilable` varchar(30) NOT NULL,
  `assignedto` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pending` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `biling` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  PRIMARY KEY (`assignment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`file`, `nm`, `pan`, `assignment`, `assignmentd`, `deadline`, `bilable`, `assignedto`, `status`, `pending`, `remarks`, `biling`, `month`) VALUES
(1, 'abcxyz', 'abcde1234z', 1, 'gyuguyfdy', '2016-12-05', 'yes', 'staff1', 'Pending', 'firm', 'dyti', 'yes', 'December');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
