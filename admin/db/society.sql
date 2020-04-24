-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 01:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_number` text NOT NULL,
  `status` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `mobile_number`, `status`, `created`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '7785985489', '1', '2020-04-21 09:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `adv_name` varchar(255) NOT NULL,
  `adv_image` text NOT NULL,
  `adv_mobile` varchar(10) NOT NULL,
  `adv_type` varchar(10) NOT NULL,
  `adv_starttime` date NOT NULL,
  `adv_endtime` date NOT NULL,
  `adv_position` varchar(55) NOT NULL,
  `adv_area` varchar(55) NOT NULL,
  `adv_url` varchar(55) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ad_page`
--

CREATE TABLE `ad_page` (
  `id` int(11) NOT NULL,
  `adname` varchar(255) NOT NULL,
  `selectpage` varchar(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `areasname` varchar(50) NOT NULL,
  `area_namehindi` text NOT NULL,
  `areas_icon` varchar(50) DEFAULT NULL,
  `area_details` varchar(100) DEFAULT NULL,
  `zipcode` int(6) NOT NULL,
  `areas_status` varchar(50) DEFAULT NULL,
  `area_flag` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `areasname`, `area_namehindi`, `areas_icon`, `area_details`, `zipcode`, `areas_status`, `area_flag`, `created`, `modified_at`) VALUES
(5, 'Ajmer', '', 'C:fakepathpp.jpg', 'hvhbbjmbmb', 3020222, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(6, 'kota', '', 'C:fakepathpp.jpg', 'hii', 302011, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(7, 'Bundi', '', '', 'namsate ', 302015, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(8, 'alwar', '', '', 'Hii Alwar', 302015, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(9, 'bharatpur', '', '', 'bhjjbhb', 302558, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(10, 'haryana', '', '', 'ghfghgf', 302012, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(12, 'Delhi', '', '', 'HII DELHI', 302154, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(13, 'Mumbai', '', '', 'hjhjkk', 302154, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(14, 'west bangal', '', NULL, NULL, 0, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(15, 'gujarat', '', NULL, NULL, 0, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(16, 'assam', '', NULL, NULL, 0, '1', NULL, '2020-04-14 08:49:02', '0000-00-00 00:00:00'),
(18, 'udaipur', '', 'Screenshot_29.png', 'detailsa ', 302015, '1', NULL, '2020-04-16 14:52:33', '0000-00-00 00:00:00'),
(19, '', '', '', '', 0, '1', NULL, '2020-04-16 14:53:22', '0000-00-00 00:00:00'),
(20, 'Pali', '', 'Screenshot_30.png', 'Details not available', 302058, '1', NULL, '2020-04-17 11:18:41', '0000-00-00 00:00:00'),
(21, 'demo', '', 'Screenshot_33.png', 'jhbj', 236555, '<br />\r\n<b>Notice</b>:  Undefined variable: status', NULL, '2020-04-17 13:33:16', '0000-00-00 00:00:00'),
(22, 'demo1', '', 'Screenshot_33.png', 'nkn', 15646, '2', NULL, '2020-04-17 13:54:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_icon` text NOT NULL,
  `blog_link` varchar(55) NOT NULL,
  `blog_writer` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_name`, `blog_icon`, `blog_link`, `blog_writer`, `status`, `created_at`) VALUES
(4, 'ambrane', 'pp.jpg', 'jkfjdfkn.com', 'bjjknj', '1', '2020-04-24 22:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `blood_doner`
--

CREATE TABLE `blood_doner` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `donor_bloodgroup` varchar(10) NOT NULL,
  `donor_dob` date NOT NULL,
  `donor_area` varchar(55) NOT NULL,
  `donor_mobile` varchar(10) NOT NULL,
  `donor_image` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` text NOT NULL,
  `event_details` varchar(255) NOT NULL,
  `event_place` varchar(11) NOT NULL,
  `event_showarea` varchar(11) NOT NULL,
  `event_startdate` date NOT NULL,
  `event_enddate` date NOT NULL,
  `status` int(1) NOT NULL,
  `created_by` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_image`, `event_details`, `event_place`, `event_showarea`, `event_startdate`, `event_enddate`, `status`, `created_by`, `created_at`) VALUES
(3, 'Disney Kidz', 'pp.jpg', 'Go and enjoy!', 'Rajasthan', 'Ajmer', '2020-04-25', '2020-04-27', 1, 'admin', '2020-04-24 22:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `more_pages`
--

CREATE TABLE `more_pages` (
  `id` int(11) NOT NULL,
  `pages_name` text NOT NULL,
  `status` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(55) NOT NULL,
  `page_icon` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `selectpage` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_icon`, `status`, `selectpage`, `created_at`) VALUES
(1, 'Ambrane', 'pp.jpg', '1', 'margaritha', '2020-04-24 22:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `sub_areas`
--

CREATE TABLE `sub_areas` (
  `id` int(11) NOT NULL,
  `area_id` varchar(50) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `sub_areasname` varchar(50) NOT NULL,
  `sub_area_namehindi` text NOT NULL,
  `zipcode` text DEFAULT NULL,
  `areas_icon` varchar(50) DEFAULT NULL,
  `area_details` varchar(100) DEFAULT NULL,
  `areas_status` varchar(50) DEFAULT NULL,
  `area_flag` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_areas`
--

INSERT INTO `sub_areas` (`id`, `area_id`, `area_name`, `sub_areasname`, `sub_area_namehindi`, `zipcode`, `areas_icon`, `area_details`, `areas_status`, `area_flag`, `created`) VALUES
(1, '1', 'Jaipur', 'JaipurCity', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(2, '3', 'Nagaur', 'Kuchaman City', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(3, '3', 'Nagaur', 'Parbatsar', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(4, '3', 'Nagaur', 'Jaswantgarh', '', '341304', NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(5, '3', 'Nagaur', 'Kasumbi', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(6, '4', 'Churu', 'Churu ', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(7, '4', 'Churu', 'Sujangarh', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(8, '4', 'Churu', 'Ratangarh', '', NULL, NULL, NULL, '1', NULL, '2020-04-14 09:04:42'),
(9, '', 'sanganer', '1', '', '302018', 'Screenshot_33.png', 'sanganer ', '1', NULL, '2020-04-17 07:55:20'),
(10, '', '1', 'mansrover', '', '302012', 'Screenshot_31.png', 'detailsa ', '1', NULL, '2020-04-17 08:01:09'),
(11, '', '<br />\r\n<b>Notice</b>:  Undefined index: area_name', 'gopalpura', '', '255455', 'Screenshot_32.png', 'jhbj', '1', NULL, '2020-04-17 08:05:09'),
(12, '', 'Jaipur', 'himmat nagar', '', '302150', 'Screenshot_34.png', 'details', '1', NULL, '2020-04-17 08:06:58'),
(13, 'Jaipur', '', 'bajaj nagar', '', '302589', 'Screenshot_32.png', 'jaipur', '1', NULL, '2020-04-17 08:14:22'),
(14, '1', '', 'goplapura', '', '302089', 'Screenshot_30.png', 'jaipur', '1', NULL, '2020-04-17 08:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_image` text DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `gotra_name` varchar(50) NOT NULL,
  `user_mobile` varchar(50) NOT NULL,
  `age` varchar(50) DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `user_areaid` varchar(100) DEFAULT NULL,
  `user_areaname` varchar(50) DEFAULT NULL,
  `user_subareaid` varchar(50) DEFAULT NULL,
  `user_subareaname` varchar(50) DEFAULT NULL,
  `zipcode` text NOT NULL,
  `address_current` text DEFAULT NULL,
  `address_fix` text DEFAULT NULL,
  `flag` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `user_image`, `father_name`, `gotra_name`, `user_mobile`, `age`, `gender`, `user_areaid`, `user_areaname`, `user_subareaid`, `user_subareaname`, `zipcode`, `address_current`, `address_fix`, `flag`, `status`, `created`) VALUES
(4, 'surya', NULL, 'abc', 'surya', '78859526', '20', 'M', NULL, 'gajatpura', NULL, 'jaipur', '302158', 'jaipur', 'jaipur', NULL, '2', '2020-04-18 13:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_page`
--
ALTER TABLE `ad_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_doner`
--
ALTER TABLE `blood_doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_pages`
--
ALTER TABLE `more_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_areas`
--
ALTER TABLE `sub_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad_page`
--
ALTER TABLE `ad_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_doner`
--
ALTER TABLE `blood_doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `more_pages`
--
ALTER TABLE `more_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_areas`
--
ALTER TABLE `sub_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
