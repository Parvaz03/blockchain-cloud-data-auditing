-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2016 at 09:34 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `op_register`
--

CREATE TABLE `op_register` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `conno` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `sign` varchar(50) NOT NULL,
  `public_key` varchar(20) NOT NULL,
  `num_users` varchar(50) NOT NULL,
  `rdate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_register`
--

INSERT INTO `op_register` (`id`, `name`, `email`, `conno`, `city`, `sign`, `public_key`, `num_users`, `rdate`, `status`, `uname`, `pass`) VALUES
('1', 'Sanjai', 'sanjeevi@oculusit.in', '9638527412', 'Trichy', 'San41217', '8d9a0adb', '5', '18-01-2016', '1', 'sanjai', '123456'),
('2', 'Ganesh', 'sanjeevi@oculusit.in', '9638527412', 'Trichy', 'Gan41211', 'ab34a215', '5', '02-03-2016', '1', 'ganesh', '123456'),
('3', 'Suresh', 'suresh@gmail.com', '9638527412', 'Trichy', 'Sur41210', '8718dea0', '5', '02-03-2016', '1', 'suresh', '123456'),
('4', 'Priya', 'priya@gmail.com', '9638527412', 'Trichy', 'Pri41217', '0172d289', '5', '03-03-2016', '1', 'priya', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `op_request`
--

CREATE TABLE `op_request` (
  `id` bigint(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `fid` varchar(45) NOT NULL,
  `secret_key` varchar(50) NOT NULL,
  `status` varchar(45) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_request`
--

INSERT INTO `op_request` (`id`, `uname`, `owner`, `fid`, `secret_key`, `status`, `rdate`) VALUES
(1, 'siva', 'sanjai', '1', '', '1', '02-03-2016');

-- --------------------------------------------------------

--
-- Table structure for table `op_send_audit`
--

CREATE TABLE `op_send_audit` (
  `id` bigint(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `gid` varchar(15) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `hsign` varchar(50) NOT NULL,
  `key_block` varchar(50) NOT NULL,
  `rdate` varchar(52) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_send_audit`
--

INSERT INTO `op_send_audit` (`id`, `uname`, `gid`, `fid`, `fname`, `hsign`, `key_block`, `rdate`, `status`) VALUES
(1, 'sanjai', '', '1', 'ccdd.txt', 'San41217', 'c2f84773', '18-01-2016', '1');

-- --------------------------------------------------------

--
-- Table structure for table `op_user_files`
--

CREATE TABLE `op_user_files` (
  `id` bigint(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_content` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `file1` varchar(50) NOT NULL,
  `file2` varchar(50) NOT NULL,
  `file3` varchar(50) NOT NULL,
  `file4` varchar(50) NOT NULL,
  `key1` varchar(50) NOT NULL,
  `key2` varchar(5) NOT NULL,
  `key3` varchar(50) NOT NULL,
  `key4` varchar(50) NOT NULL,
  `modify_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file_st` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_user_files`
--

INSERT INTO `op_user_files` (`id`, `uname`, `file_type`, `file_content`, `upload_file`, `file1`, `file2`, `file3`, `file4`, `key1`, `key2`, `key3`, `key4`, `modify_time`, `status`, `file_st`) VALUES
(1, 'sanjai', 'text/plain', 'data', 'ccdd.txt', '', '', '', '', 'c2f84773', '24aa6', '7db2553b', '5fe2e195', '18-01-2016, 12:17:47', '2', '1'),
(2, 'priya', 'application/octet-stream', 'data', 'ad_agency.sql', '', '', '', '', 'd0a1ed0d', '1e054', 'af475ed6', '2ad34d8e', '03-03-2016, 09:23:10', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `op_user_reg`
--

CREATE TABLE `op_user_reg` (
  `id` bigint(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_user_reg`
--

INSERT INTO `op_user_reg` (`id`, `uname`, `contactno`, `name`, `email`, `owner`, `pass`, `rdate`, `status`) VALUES
(2, 'prasanth', 8344527770, 'Prasanth', 'sanjeevi@oculusit.in', 'sanjai', '123456', '03-03-2016', '1'),
(1, 'siva', 9638527412, 'Siva', 'sanjeevi@oculusit.in', 'ganesh', '123456', '02-03-2016', '1');
