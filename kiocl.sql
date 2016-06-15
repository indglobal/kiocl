-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 01:25 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiocl`
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
  `corrigendum_due_date` varchar(500) NOT NULL,
  `corrigendum_due_time` varchar(500) NOT NULL,
  `corrigendum_status` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`corrigendum_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `corrigendum`
--

INSERT INTO `corrigendum` (`corrigendum_id`, `tender_id`, `corrigendum_code`, `tendor_code`, `tender_name`, `tender_path`, `units_id`, `deparments_id`, `username`, `corrigendum_date`, `corrigendum_due_date`, `corrigendum_due_time`, `corrigendum_status`, `date`, `time`) VALUES
(5, '21', 'ASHSHSH/232/1928', 'Testing/12345/189a', 'Testor', 'assets_admin/dist/img/corrigendum/SECL WAN TENDER (5).pdf', '4', '3 ', 'bang_user', '2015-10-30', '20015-10-30', '20016-11-23', '1', '2015-10-07', '15:07:50'),
(6, '17', 'crp/isit/corri-1', 'crp/ISIT/AMC-1', 'Mobile Application EoI', 'assets_admin/dist/img/corrigendum/SECL WAN TENDER (5).pdf', '4', '3 ', 'bang_user', '2015-09-15', '2015-09-10', '5:00am', '0', '2015-10-07', '15:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `departments_id` int(11) NOT NULL AUTO_INCREMENT,
  `departments_name` varchar(500) NOT NULL,
  `unit_id` varchar(500) NOT NULL,
  PRIMARY KEY (`departments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departments_id`, `departments_name`, `unit_id`) VALUES
(1, 'abc', '1'),
(3, 'HR  ', '4'),
(4, 'MM', '4'),
(5, 'PR', '4'),
(6, 'MKTG', '6'),
(7, 'IS & IT', '6'),
(8, 'Plant', '4'),
(9, 'Bengaluru', '5'),
(10, 'Bengaluru', '13'),
(11, 'Kolkata', '13'),
(12, 'Chennai', '13'),
(13, 'Hyderabad', '13'),
(14, 'Kochi', '13'),
(15, 'Mumbai', '13'),
(16, 'Bhubaneswar', '13'),
(17, 'Lucknow', '13'),
(18, 'Delhi', '13'),
(19, 'Plant', '12'),
(20, 'VSAT', '12'),
(21, 'IS&IT', '7'),
(22, 'test', '14'),
(23, 'B.C. Office', '8'),
(24, 'NOC', '4');

-- --------------------------------------------------------

--
-- Table structure for table `example_1`
--

CREATE TABLE IF NOT EXISTS `example_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `example_1`
--

INSERT INTO `example_1` (`id`, `url`) VALUES
(172, 'c360-9.jpg'),
(176, 'b7b8-18.jpg'),
(177, '3fd6-21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `example_2`
--

CREATE TABLE IF NOT EXISTS `example_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `example_2`
--

INSERT INTO `example_2` (`id`, `url`, `priority`) VALUES
(172, 'eb4f-51.jpg', 3),
(173, 'ac84-52.jpg', 1),
(182, '4b3fe-kle-engg-college.jpg', 4),
(183, '170de-kle-engg-college.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `example_3`
--

CREATE TABLE IF NOT EXISTS `example_3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `example_3`
--

INSERT INTO `example_3` (`id`, `url`, `category_id`, `priority`) VALUES
(172, 'a48d-88.jpg', 22, 4),
(173, '5e32-89.jpg', 22, 1),
(174, '7628-90.jpg', 22, 2),
(180, 'd1614-kle-engg-college.jpg', 22, 3);

-- --------------------------------------------------------

--
-- Table structure for table `example_4`
--

CREATE TABLE IF NOT EXISTS `example_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=200 ;

--
-- Dumping data for table `example_4`
--

INSERT INTO `example_4` (`id`, `title`, `url`, `priority`) VALUES
(193, '', 'd46f7-1.png', 8),
(194, 'dsadadsadsadasdaddasdasdsdsad\n', 'e6858-1click_Homepage.jpg', 2),
(195, 'hdwdklah\n', 'e1572-2.png', 1),
(196, '', 'e95f1-Event-detailed-first-page-01.jpg', 3),
(197, '', '59987-Event-detailed-page-01.jpg', 7),
(198, '', 'b2335-Events-profile-backend-04.jpg', 5),
(189, 'fsdfdsf', '6ca42-w5vwo7jc4hg3w1ox1fov.jpeg', 6),
(190, 'fsdfsf', '78250-vyi1ipjjzcv4ijzych0e.jpeg', 4);

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
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  `status` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`, `status`, `priority`, `created_date`, `modified_date`) VALUES
(1, 'Cat1', 1, 2, '2016-06-01 16:07:27', '2016-06-01 16:07:27'),
(2, 'cat2', 2, 3, '2016-06-01 16:07:27', '2016-06-01 16:07:27'),
(3, 'cat3', 1, 4, '2016-06-01 16:11:21', '2016-06-01 16:11:21'),
(4, 'cat4', 1, 5, '2016-06-01 16:11:21', '2016-06-01 16:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gal_type`
--

CREATE TABLE IF NOT EXISTS `tbl_gal_type` (
  `gal_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `gal_name` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`gal_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gal_type`
--

INSERT INTO `tbl_gal_type` (`gal_type_id`, `gal_name`, `status`) VALUES
(1, 'trtrrt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategories` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_name` text NOT NULL,
  `priority` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcat_id`, `cat_id`, `subcat_name`, `priority`, `status`) VALUES
(1, 4, 'sssss', '3', 0),
(2, 5, 'sSAS', '4', 0),
(3, 4, 'tyryrt', '2', 0),
(4, 5, 'dsad', '6', 0),
(5, 5, 'sdsad', '7', 0),
(6, 11, 'xxxxxxxxxxxxxxxxxxxxxxx', '1', 0),
(7, 17, 'asdad', '5', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tender_id`, `tendor_code`, `tender_name`, `tender_path`, `tender_date`, `tender_due_date`, `tender_due_time`, `tendor_opening_date`, `tendor_opening_time`, `tendor_cancelled`, `tendor_record_date`, `tender_time`, `units_id`, `deparments_id`, `username`, `corrigendum_added`) VALUES
(14, 'CRP/ISIT/AMC', 'AMC for Computer Peripherals', 'assets_admin/dist/img/tendor/eoi_SELECTION OF SYSTEM INTEGRATOR_06-05-2015.pdf', '1/9/2015', '2015-09-30', '5:30 PM', '2015-09-30', '11:00 AM', 'false', '2015-09-01', '11:38:56', '6', '7', 'isit', '0'),
(21, 'Testing/12345/189a', 'Testor', 'assets_admin/dist/img/tendor/SECL WAN TENDER (5).pdf', '2015-10-30', '2015-11-08', '23am', '2015-11-09', '3:00 PM', 'false', '2015-10-06', '11:16:17', '4', '3 ', 'bang_user', '1'),
(17, 'crp/ISIT/AMC-1', 'Mobile Application EoI', 'assets_admin/dist/img/tendor/EOI Mobile Application.pdf', '2015-09-15', '2015-09-15', '5:00PM', '2015-09-15', '11:00 AM', 'false', '2015-09-15', '10:41:56', '4', '3 ', 'bang_user', '1'),
(18, 'CORP/MKTG/IS&IT/SECL/WAN', 'Setting up of wan connectivity', 'assets_admin/dist/img/tendor/EOI format -secl.doc', '2015-09-07', '2015-10-07', '12:30 PM', '2015-10-08', '3:00PM', 'false', '2015-10-01', '11:31:06', '4', '3 ', 'bang_user', '0'),
(19, 'NSU 5I 02 G', 'Supply of HP Printer', 'assets_admin/dist/img/tendor/Enquiry for supply of HP Printer_NSU 5I 02 G.pdf', '30/09/2015', '13/10/2015', '16:00', '13/10/2015', '15:00', 'false', '2015-10-05', '14:55:06', '4', '24', 'support_noc@itiltd.co.in', '0'),
(20, 'NSU 5I 02 G', 'Supply of HP Printer', 'assets_admin/dist/img/tendor/Enquiry for supply of HP Printer_NSU 5I 02 G.pdf', '30/09/2015', '13/10/2015', '16:00', '13/10/2015', '15:00', 'false', '2015-10-05', '14:55:41', '4', '24', 'support_noc@itiltd.co.in', '0'),
(22, 'CM-IT/ITIROLKO/EOI No 9/2015 dt 6th October 2015', 'Supply and Instalation of 30 KVA 3 Phase Solar Power System ', 'assets_admin/dist/img/tendor/EOI Notification.doc', '6th  October 2015', '16th  October 2015', '12.30 PM', '16th  October 2015', '1.00 PM', 'false', '2015-10-06', '17:32:31', '13', '18', 'sanjayjainsanjay@yahoo.com', '0'),
(23, 'ELW18J970RL', 'MASTER BATCH COLOUR (06 Type) AND SILICON POLYMER.', 'assets_admin/dist/img/tendor/Enq_ELW18J970RL.pdf', '29/09/2015', '2015-10-03', '15 PM', '2015-10-05', '15 PM', 'false', '2015-10-08', '12:50:51', '12', '19', 'iti_rbl@itiltd.co.in', '0'),
(24, 'dfv', 'zdfvdfv', 'assets_admin/dist/img/tendor/tender ITI Web site - Copy.pdf', 'sdfcsdf', '2015-10-30', 'awedwe', '2015-10-14', '34', 'false', '2015-10-09', '11:01:49', '4', '3 ', 'bang_user', '0');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `units_id` int(11) NOT NULL AUTO_INCREMENT,
  `units_name` varchar(500) NOT NULL,
  PRIMARY KEY (`units_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`units_id`, `units_name`) VALUES
(5, 'N S Unit'),
(4, 'Bengaluru'),
(17, 'test'),
(7, 'Corporate'),
(8, 'Delhi'),
(9, 'Naini'),
(10, 'Mankapur'),
(11, 'Palakkad'),
(12, 'RaeBareli'),
(13, 'Regional Offices');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `units_id`, `deparments_id`, `username`, `password`, `last_login`) VALUES
(1, '4', '3 ', 'bang_user', '12345', '2016-06-06'),
(3, '6', '7', 'isit', 'isit', '2015-09-14'),
(4, 'Select Unit', 'Select Departments', 'vsat_rbl@itiltd.co.in', 'vsat_rbl123', '0000-00-00'),
(5, '12', 'Select Departments', 'vsat_rbl@itiltd.co.in', 'vsat_rbl123', '0000-00-00'),
(7, '12', '19', 'iti_rbl@itiltd.co.in', 'iti_rbl123', '2015-10-08'),
(8, '13', '18', 'aohr_rodelhi@yahoo.co.in', 'aohr_rodelhi321', '0000-00-00'),
(9, '8', '23', 'skumar_bcdel@itiltd.co.in', 'skumar_bcdel456', '0000-00-00'),
(10, '4', '24', 'support_noc@itiltd.co.in', 'support_noc678', '2015-10-05'),
(12, '13', '11', 'mm_rok@itiltd.co.in', 'mm_rok876', '2015-10-06'),
(13, '9', '25', 'tenders_nni@itiltd.co.in', 'tenders_nni901', '0000-00-00'),
(14, '10', '26', 'iti_mkp@itiltd.co.in', 'iti_mkp876', '0000-00-00'),
(15, '10', '26', 'netmanager_mkp@itiltd.co.in', 'netmanager_mkp274', '0000-00-00'),
(16, '13', '15', 'tenders_rom@itiltd.co.in', 'tenders_rom908', '0000-00-00'),
(17, '13', '17', 'cmmarketing.rolko@gmail.com', 'cmmarketing.rolko549', '0000-00-00'),
(18, '13', '16', 'itirobbsr@rediffmail.com', 'itirobbsr821', '0000-00-00'),
(19, '13', '10', 'udaya_crp@itiltd.co.in', 'udaya_crp786', '0000-00-00'),
(20, '13', '17', 'sanjayjainsanjay@yahoo.com', 'sanjayjainsanjay888', '2015-10-06'),
(21, '13', '12', 'purchase.itichennai@rediffmail.com', 'purchase.itichennai555', '0000-00-00'),
(22, '4', '8', 'shivashankaran_bgp@itiltd.co.in', 'shivashankaran_bgp501', '0000-00-00'),
(23, '9', '25', 'emessr@gmail.com', 'emessr89933', '0000-00-00'),
(25, '17', '28', 'test', '1234', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
