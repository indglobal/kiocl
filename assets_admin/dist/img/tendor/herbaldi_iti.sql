-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2015 at 02:27 AM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `herbaldi_iti`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contracts`
--

CREATE TABLE IF NOT EXISTS `Contracts` (
  `Contracts_id` int(11) NOT NULL AUTO_INCREMENT,
  `tendor_code` varchar(500) NOT NULL,
  `tendor_date` varchar(500) NOT NULL,
  `nature_work` varchar(500) NOT NULL,
  `mode_tendor_enquiry` varchar(500) NOT NULL,
  `date_of_publication` varchar(500) NOT NULL,
  `type_bidding` varchar(500) NOT NULL,
  `due_date_tendor` varchar(500) NOT NULL,
  `no_of_tendor` varchar(500) NOT NULL,
  `no_of_parties` varchar(500) NOT NULL,
  `name_of_parties` varchar(500) NOT NULL,
  `no_of_n_parties` varchar(500) NOT NULL,
  `name_of_n_parties` varchar(500) NOT NULL,
  `contracta_awared` varchar(500) NOT NULL,
  `contracts_no` varchar(500) NOT NULL,
  `contracts_date` varchar(500) NOT NULL,
  `name_of_contractor` varchar(500) NOT NULL,
  `value_of_contractor` varchar(500) NOT NULL,
  `schulde` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `departments_id` varchar(500) NOT NULL,
  `unit_id` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`Contracts_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `corrigendum`
--

CREATE TABLE IF NOT EXISTS `corrigendum` (
  `corrigendum_id` int(11) NOT NULL AUTO_INCREMENT,
  `tender_id` varchar(500) NOT NULL,
  `corrigendum_code` varchar(500) NOT NULL,
  `tendor_code` varchar(500) NOT NULL,
  `tender_name` varchar(500) NOT NULL,
  `tender_path` varchar(500) NOT NULL,
  `units_id` varchar(500) NOT NULL,
  `deparments_id` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `corrigendum_date` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`corrigendum_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `corrigendum`
--

INSERT INTO `corrigendum` (`corrigendum_id`, `tender_id`, `corrigendum_code`, `tendor_code`, `tender_name`, `tender_path`, `units_id`, `deparments_id`, `username`, `corrigendum_date`, `date`, `time`) VALUES
(1, '6', 'bfgfggdfdfg', 'sfadgfasd', 'asdfsdf', 'assets_admin/dist/img/corrigendum/Layout-v2.xlsx', '4', '3 ', 'bang_user', '2015-08-29', '2015-08-03', '06:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `departments_id` int(11) NOT NULL AUTO_INCREMENT,
  `departments_name` varchar(500) NOT NULL,
  `unit_id` varchar(500) NOT NULL,
  PRIMARY KEY (`departments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departments_id`, `departments_name`, `unit_id`) VALUES
(1, 'abc', '1'),
(3, 'HR  ', '4'),
(4, 'MM', '4'),
(5, 'PR', '4'),
(6, 'MKTG', '6'),
(7, 'IS & IT', '6');

-- --------------------------------------------------------

--
-- Table structure for table `regiter`
--

CREATE TABLE IF NOT EXISTS `regiter` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `regiter`
--

INSERT INTO `regiter` (`register_id`, `email_address`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `tender_id` int(11) NOT NULL AUTO_INCREMENT,
  `tendor_code` varchar(500) NOT NULL,
  `tender_name` varchar(500) NOT NULL,
  `tender_path` varchar(500) NOT NULL,
  `tender_date` varchar(500) NOT NULL,
  `tender_due_date` varchar(500) NOT NULL,
  `tender_due_time` varchar(500) NOT NULL,
  `tendor_opening_date` varchar(500) NOT NULL,
  `tendor_opening_time` varchar(500) NOT NULL,
  `tendor_cancelled` varchar(500) NOT NULL,
  `tendor_record_date` varchar(500) NOT NULL,
  `tender_time` varchar(500) NOT NULL,
  `units_id` varchar(500) NOT NULL,
  `deparments_id` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `corrigendum_added` varchar(500) NOT NULL,
  PRIMARY KEY (`tender_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tender_id`, `tendor_code`, `tender_name`, `tender_path`, `tender_date`, `tender_due_date`, `tender_due_time`, `tendor_opening_date`, `tendor_opening_time`, `tendor_cancelled`, `tendor_record_date`, `tender_time`, `units_id`, `deparments_id`, `username`, `corrigendum_added`) VALUES
(6, 'sfadgfasd', 'asdfsdf', 'assets_admin/dist/img/tendor/ISO 9001 logo.pdf', '2015-08-12', '2015-08-31', '', '2015-08-14', '', 'false', '2015-08-03', '02:29:42', '4', '3 ', 'bang_user', '1'),
(7, 'crp/ISIT/AMC', 'AMC for PCS', 'assets_admin/dist/img/tendor/Laptop details-28-04-2015.xls', '04/08/2015', '29/08/2015', '', '30/08/2015', '', 'false', '2015-08-04', '05:21:26', '4', '3 ', 'bang_user', '0'),
(8, 'CRP5F004/1', 'Enquiry for printing of annual report', 'assets_admin/dist/img/tendor/Enq_printing  of 65th annual report_04-07-2015.pdf', '26-06-2015', '31-07-2015', '17.00', '01-08-2015', '11.00', 'false', '2015-08-11', '02:04:41', '4', '3 ', 'bang_user', '0'),
(9, 'CRP5G001/1', 'Enquiry for erection of exhibition stall', 'assets_admin/dist/img/tendor/Enq_Stall at Exhibition_08-07-2015.pdf', '07-07-2015', '10-07-2015', '15.00', '10-07-2015', '14.30', 'false', '2015-08-11', '02:06:49', '4', '3 ', 'bang_user', '0'),
(10, 'Corp/Mktg/NMS/70(15-16)', 'EOI for Network Management System', 'assets_admin/dist/img/tendor/eoi_Network Management System_10-07-2015.pdf', '10-07-2015', '24-07-2015', '12.30', '24-07-2015', '13.00', 'false', '2015-08-11', '02:11:54', '4', '3 ', 'bang_user', '0'),
(11, 'ITI/CORP-BDC/CCTV', 'EOI for CCTV Surveillance systems', 'assets_admin/dist/img/tendor/eoi_CCTV surveillance_28-07-2015.pdf', '20-07-2015', '19-08-2015', '17.30', '20-08-2015', '110..', 'false', '2015-08-11', '02:13:46', '4', '3 ', 'bang_user', '0'),
(12, 'XN/Solar -Sys-Emp/EoI/2015-16', 'EOI for Photovoltaic Power Systems', 'assets_admin/dist/img/tendor/eoi_Solar Photovoltaic Power System_nni_25-07-2015.pdf', '25-07-2015', '12-08-2015', '16.30', '13-08-2015', '11.00', 'false', '2015-08-11', '02:30:08', '4', '3 ', 'bang_user', '0'),
(13, 'crp/ISIT/AMC', 'AMC for PCS', 'assets_admin/dist/img/tendor/Inventory details Crp-Mkgt-RO-NSU-GSM-BDC.xls', '04/08/2015', '29/08/2015', '5:00PM', '30/08/2015', '11:00AM', 'false', '2015-08-14', '05:33:24', '6', '7', 'isit', '0');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `units_id` int(11) NOT NULL AUTO_INCREMENT,
  `units_name` varchar(500) NOT NULL,
  PRIMARY KEY (`units_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`units_id`, `units_name`) VALUES
(5, 'N S Unit'),
(4, 'Bangalore'),
(6, 'Corporate Mktg'),
(7, 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `units_id` varchar(500) NOT NULL,
  `deparments_id` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `units_id`, `deparments_id`, `username`, `password`, `last_login`) VALUES
(1, '4', '3 ', 'bang_user', '12345', '2015-08-14'),
(3, '6', '7', 'isit', 'isit', '2015-08-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
