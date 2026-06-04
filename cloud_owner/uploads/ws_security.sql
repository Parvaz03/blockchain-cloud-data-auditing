-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2015 at 06:03 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ws_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `spty` varchar(200) NOT NULL,
  `d_name` varchar(200) NOT NULL,
  `d_contact` varchar(200) NOT NULL,
  `d_time` varchar(200) NOT NULL,
  `d_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `uname`, `spty`, `d_name`, `d_contact`, `d_time`, `d_address`) VALUES
(1, 'sanjai', '3f79ff1e21', '2175f51e3485', '4e2aad5460da5e6693e3', '462cbe183ac851', '4228b22e03aa3f'),
(2, 'rajiya', '3f79ff1e21', '257df3092680', '4e24a95a60dc5e6a9be4', '462cff01759c067297a173', '236ef70f3d91');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filepath` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `cdate` datetime NOT NULL,
  `encryptpath` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `doj` varchar(50) NOT NULL,
  `emp_photo` varchar(50) NOT NULL,
  `rdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `em_contact`
--

CREATE TABLE `em_contact` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `request_st` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `em_receiver`
--

CREATE TABLE `em_receiver` (
  `id` int(11) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `drafts` int(11) NOT NULL,
  `trash` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `attach_file` varchar(100) NOT NULL,
  `filesize` double NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_receiver`
--

INSERT INTO `em_receiver` (`id`, `receiver`, `sender`, `message`, `status`, `drafts`, `trash`, `month`, `year`, `attach_file`, `filesize`, `created_date`) VALUES
(1, 'raja', 'vijay', 'hai', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(2, 'raja', 'vijay', 'hai', 1, 1, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(3, 'raja', 'vijay', 'hello', 1, 0, 1, 10, 15, '', 0, '0000-00-00 00:00:00'),
(4, 'raja', 'vijay', 'hello', 1, 1, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(5, 'raja', 'vijay', 'good', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(6, 'revathi', 'durga', 'hai', 1, 0, 1, 10, 15, '', 0, '2015-10-10 11:29:08'),
(7, 'durga', 'revathi', 'hai', 1, 0, 0, 10, 15, '', 0, '2015-10-10 11:29:29'),
(8, 'revathi', 'revathi', 'hai', 1, 0, 0, 10, 15, 'F7_374.jpg|F7_502.jpg', 262087, '2015-10-10 11:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `em_register`
--

CREATE TABLE `em_register` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_register`
--

INSERT INTO `em_register` (`id`, `cname`, `name`, `gender`, `dob`, `contact`, `email`, `bank_name`, `acc_no`, `username`, `password`, `photo`, `question`, `answer`, `status`, `rdate`) VALUES
(1, 'sanjai', 'Raja', 'Male', '12-09-1990', 9519639871, '', '', '', 'raja', '123456', '1', 'what is you favourite place?', 'trichy', 1, '08-10-2015'),
(2, 'sanjai', 'vijay', 'Male', '12-09-1990', 8529637412, '', '', '', 'vijay', '123456', '1', 'what is your nick name?', 'vijay', 1, '09-10-2015'),
(3, 'rajiya', 'Durga', 'Female', '12-09-1990', 9519639871, '', '', '', 'durga', '123456', '1', 'what is your nick name?', 'durga', 1, '10-10-2015'),
(4, 'rajiya', 'Revathi', 'Female', '12-09-1990', 9876547895, '', '', '', 'revathi', '123456', '1', 'what is your nick name?', 'revathi', 1, '10-10-2015');

-- --------------------------------------------------------

--
-- Table structure for table `em_sender`
--

CREATE TABLE `em_sender` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `drafts` int(11) NOT NULL,
  `trash` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `attach_file` varchar(100) NOT NULL,
  `filesize` double NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_sender`
--

INSERT INTO `em_sender` (`id`, `sender`, `receiver`, `message`, `status`, `drafts`, `trash`, `month`, `year`, `attach_file`, `filesize`, `created_date`) VALUES
(1, 'vijay', 'raja', 'hai', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(2, 'vijay', 'raja', 'hello', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(4, 'vijay', 'raja', 'good', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(5, 'durga', 'revathi', 'hai', 1, 0, 0, 10, 15, '', 0, '0000-00-00 00:00:00'),
(6, 'revathi', 'durga', 'hai', 1, 0, 0, 10, 15, '', 0, '2015-10-10 11:29:28'),
(7, 'revathi', 'revathi', 'hai', 1, 0, 0, 10, 15, 'F7_374.jpg|F7_502.jpg', 262087, '2015-10-10 11:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('abdul', 'e10adc3949ba59abbe56e057f20f883e'),
('mani', 'e10adc3949ba59abbe56e057f20f883e'),
('raja', 'e10adc3949ba59abbe56e057f20f883e'),
('rajiya', 'd28c4fd60113305418db47cfeb47b2d4'),
('sanjai', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `d_name` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `rdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`id`, `uname`, `d_name`, `p_name`, `gender`, `disease`, `address`, `contact`, `rdate`) VALUES
(1, 'sanjai', '2175f51e3485', '247ded05', '3a7df209', '3f79ff1e21c82826d6b07d3a', '432fb22a12', '4e2aad5460da5e6693e3', '452db35c66c55b6293e2'),
(2, 'rajiya', '257df3092680', '257df4', '3a7df209', '3f79ff1e21c82826d6b07d3a', '236ef70f3d91', '4f24a9546cdc5c6495e9', '462cb35d65c55b6293e4');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL,
  `web_link` varchar(100) NOT NULL,
  `validity` int(11) NOT NULL,
  `start_date` varchar(15) NOT NULL default '-',
  `end_date` varchar(15) NOT NULL default '-',
  `eyear` int(11) NOT NULL default '0',
  `emonth` int(11) NOT NULL default '0',
  `eday` int(11) NOT NULL default '0',
  `no_days` int(11) NOT NULL default '0',
  `accno` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `status` int(11) NOT NULL default '0',
  `service_code` varchar(200) NOT NULL default '-',
  `service_key` varchar(100) NOT NULL default '-',
  `secret_key` varchar(30) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `uname`, `company`, `address`, `contact`, `email`, `sid`, `web_link`, `validity`, `start_date`, `end_date`, `eyear`, `emonth`, `eday`, `no_days`, `accno`, `bank`, `status`, `service_code`, `service_key`, `secret_key`, `rdate`) VALUES
(1, 'sanjai', 'BDS', 'gg', 9519639871, 'raja@gmail.com', 1, 'www.bds.com', 1, '08-10-2015', '08-12-2015', 2015, 12, 8, 61, '23568978', 'SBI', 3, 'http://localhost/cloudgenious/services/emp_service', 'sanjai192a08bf918f44cc', 'bd7923', ''),
(2, 'raja', 'ABC', 'Trichy', 9519639871, 'raja@gmail.com', 2, 'www.abc.com', 6, '', '', 2016, 5, 9, 0, '258369147', 'SBI', 0, 'http://localhost/cloudgenious/services/hospital', 'raja2ad63f5eec857aa7', '525894', '09-10-2015'),
(3, 'sanjai', 'SAS', 'Trichy', 8529637412, 'sanjeevi@oculusit.in', 3, 'www.abc.com', 12, '09-10-2015', '09-11-2016', 2016, 11, 9, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/email', 'sanjai3385c3935a7a3a9d', 'eca257', '09-10-2015'),
(4, 'sanjai', 'AR Travels', 'Trichy', 8529637412, 'sanjeevi@oculusit.in', 4, 'www.art.com', 12, '09-10-2015', '09-11-2016', 2016, 11, 9, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/tour', 'sanjai4b895065ea78dc2b', '0e7223', '09-10-2015'),
(5, 'raja', 'KP Travels', 'Trichy', 8529637412, 'sanjeevi@oculusit.in', 4, 'www.kp.com', 12, '10-10-2015', '10-11-2016', 2016, 11, 10, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/tour', 'raja51fed3046d2ca346', '421f9c', '10-10-2015'),
(7, 'rajiya', 'oculus', 'trichy', 9976570006, 'rajiya.n@oculusit.in', 1, 'www.abc.com', 12, '10-10-2015', '10-11-2016', 2016, 11, 10, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/emp_service', 'rajiya789defa97011a9c3', '2cc549', '10-10-2015'),
(8, 'rajiya', 'ABC', 'ddd', 9638527412, 'rajiya.n@oculusit.in', 2, 'www.bds.com', 12, '10-10-2015', '10-11-2016', 2016, 11, 10, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/hospital', 'rajiya87da83eba7593503', '9e56c5', '10-10-2015'),
(9, 'rajiya', 'SAS', 'Trichy', 9876547895, 'rajiya.n@oculusit.in', 3, 'www.abc.com', 12, '10-10-2015', '10-11-2016', 2016, 11, 10, 0, '23568978', 'SBI', 2, 'http://localhost/cloudgenious/services/email', 'rajiya98cdaa20d71b1db6', 'caa149', '10-10-2015');

-- --------------------------------------------------------

--
-- Table structure for table `service_links`
--

CREATE TABLE `service_links` (
  `id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service_links` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `dbname` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `space` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_links`
--

INSERT INTO `service_links` (`id`, `service`, `service_links`, `description`, `platform`, `dbname`, `language`, `space`, `price`) VALUES
(1, 'Employee Service', 'http://localhost/cloudgenious/services/emp_service', 'Employeee service for maintain the employee information in organization', 'Windows', 'MySQL', 'PHP', 10, 1500),
(2, 'Hospital Service', 'http://localhost/cloudgenious/services/hospital', 'Hospital service for maintain the doctor and patient information in hospital', 'Windows', 'MySQL', 'PHP', 10, 2000),
(3, 'Email Service', 'http://localhost/cloudgenious/services/email', 'Email service for organization', 'Windows', 'MySQL', 'PHP', 10, 2000),
(4, 'Tourism Service', 'http://localhost/cloudgenious/services/tour', 'Travels booking information maintained for administration', 'Windows', 'MySQL', 'PHP', 10, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tr_cus`
--

CREATE TABLE `tr_cus` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `tdate` varchar(15) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `cost` int(11) NOT NULL,
  `amount` double NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `bdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_cus`
--

INSERT INTO `tr_cus` (`id`, `uname`, `tid`, `name`, `address`, `contact`, `adult`, `child`, `tdate`, `rdate`, `cost`, `amount`, `month`, `year`, `bdate`) VALUES
(1, 'sanjai', 1, 'keerthana', 'Trichy', 9519639871, 2, 2, '12-10-2015', '15-10-2015', 200, 600, 0, 0, '09-10-2015'),
(2, 'raja', 2, 'Dinesh', 'Chennai', 8529637412, 2, 2, '12-10-2015', '15-10-2015', 100, 300, 0, 0, '10-10-2015');

-- --------------------------------------------------------

--
-- Table structure for table `tr_tour`
--

CREATE TABLE `tr_tour` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `tour` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_tour`
--

INSERT INTO `tr_tour` (`id`, `uname`, `tour`, `location`, `contact`) VALUES
(1, 'sanjai', 'Srirangam', 'Trichy', 8529637412),
(2, 'raja', 'Rockfort', 'Trichy', 9519639871);

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `rdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_file`
--

INSERT INTO `upload_file` (`id`, `uname`, `pid`, `filename`, `description`, `rdate`) VALUES
(1, 'sanjai', '', '3f2dee0425c61d2ad6', '1373fd', '452db35c66c55b6293e2');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `contact`, `username`, `password`) VALUES
(2, 'Raja', 'sanjeevi@oculusit.in', 9976570006, 'raja', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Rajiya', 'rajiya.n@oculusit.in', 9976570006, 'rajiya', 'd28c4fd60113305418db47cfeb47b2d4'),
(1, 'Sanjai', 'sanjai456@gmail.com', 56895656, 'sanjai', 'e10adc3949ba59abbe56e057f20f883e');
