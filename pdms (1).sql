-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 08:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdms`
--
CREATE DATABASE IF NOT EXISTS `pdms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pdms`;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `package` varchar(25) NOT NULL,
  `cgpa` double NOT NULL,
  `twelth_per` double NOT NULL,
  `tenth_per` double NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `package`, `cgpa`, `twelth_per`, `tenth_per`) VALUES
('1', 'BENZe', '5.5 lakh', 7, 60, 60),
('2', 'tcs', '2 lakh', 6, 60, 60),
('3', 'Algo', '5 lakh', 6, 60, 60);

-- --------------------------------------------------------

--
-- Table structure for table `reg_po`
--

CREATE TABLE IF NOT EXISTS `reg_po` (
  `pid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_po`
--

INSERT INTO `reg_po` (`pid`, `username`, `password`) VALUES
('1', 'prabhakar@manage', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reg_staff`
--

CREATE TABLE IF NOT EXISTS `reg_staff` (
  `staff_id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_staff`
--

INSERT INTO `reg_staff` (`staff_id`, `name`, `username`, `password`) VALUES
('1', 'bap', 'bap', '123'),
('456', 'sushant', 'ss', '123'),
('55', 'sajal', 'sajal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reg_stud`
--

CREATE TABLE IF NOT EXISTS `reg_stud` (
  `name` varchar(50) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`usn`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_stud`
--

INSERT INTO `reg_stud` (`name`, `usn`, `branch`, `username`, `password`) VALUES
('ashitosh pundlik gunjikar', '2kl16cs408', 'CE', 'ashu', '123'),
('maish', '2kl16cs421', 'EE', 'manish', '1232'),
('mansi', '2kl16cs421', 'CE', 'mansi', '123'),
('nidhi', '2kl16cs421', 'EC', 'nidhi', '123'),
('sajal', '2kl16cs421', 'CS', 'sajal', '1234'),
('shubhangi', '2kl16cs421', 'CS', 'shubhangi', '123'),
('sushant gunjikar', '2kl16cs421', 'CS', 'sushant', '123'),
('nusarat', '2kl16cs425', 'ME', 'nusarat', '123'),
('krishanji', '2kl16cs427', 'CS', 'krish', '123'),
('jyotsana', '2kl17cs421', 'EC', 'jytsana', '123'),
('supriya', '2kl17cs424', 'CS', 'supriya', '123'),
('gug', 'kkm', 'CE', 'h', '656');

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE IF NOT EXISTS `stud_details` (
  `name` varchar(100) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `10_per` varchar(50) NOT NULL,
  `12_per` varchar(50) NOT NULL,
  `be_1_per` varchar(50) NOT NULL,
  `be_2_per` varchar(50) NOT NULL,
  `be_3_per` varchar(50) NOT NULL,
  `be_4_per` varchar(50) NOT NULL,
  `be_5_per` varchar(50) NOT NULL,
  `be_6_per` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`name`, `usn`, `branch`, `email`, `phno`, `address`, `10_per`, `12_per`, `be_1_per`, `be_2_per`, `be_3_per`, `be_4_per`, `be_5_per`, `be_6_per`, `cgpa`, `percentage`) VALUES
('nidhi', '2kl16cs421', 'EC', 'nidhi@gmail.com', 7353659929, 'khanpur', '55', '5215', '5655', '53', '21', '6', '546', '5', '957.35', '545'),
('krishanji', '2kl16cs427', 'CS', 'krishanji@gmail.com', 8050685935, 'kadoli', '69', '15', '6.3', '5.3', '6.9', '5.3', '8.9', '8.6', '6.375', '50'),
('supriya', '2kl17cs424', 'CS', 'sp@gmail.com', 7353655666, 'bgm', '89', '89', '8.3', '7.2', '8', '7.6', '5.9', '8', '7.15', '70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
