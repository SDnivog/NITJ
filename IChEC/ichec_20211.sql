-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 07:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ichec_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstract_reg`
--

CREATE TABLE `abstract_reg` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `reg_id` text NOT NULL,
  `paper_title` text NOT NULL,
  `abstract` text NOT NULL,
  `keywords` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Govind suman', 'admin', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mobile` text NOT NULL,
  `designation` text NOT NULL,
  `organization` text NOT NULL,
  `address` text NOT NULL,
  `registration_id` text NOT NULL,
  `type` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'OFF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetime`, `title`, `fname`, `lname`, `email`, `mobile`, `designation`, `organization`, `address`, `registration_id`, `type`, `status`) VALUES
(11, '2021-02-07 07:21:29', 'Mr.', 'Govind', 'Suman', 'govindsuman118@gmail.com', '9983904397', 'Student', 'giftstore', 'MBH F-Block\r\nRoom No.  121', 'ICHECG1258', 'Indian Participant-I', 'OFF'),
(12, '2021-02-09 05:59:38', 'Prof.', 'Govind', 'Suman', 'bhagwan@gmail.com', '9983904397', 'Student', 'giftstore', 'MBH F-Block\r\nRoom No.  121', 'ICHECG4450', 'Indian Participant-I', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `txn_details`
--

CREATE TABLE `txn_details` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `reg_id` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_type` text NOT NULL,
  `txnno` text NOT NULL,
  `bon` varchar(100) NOT NULL,
  `amount` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ON'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txn_details`
--

INSERT INTO `txn_details` (`id`, `datetime`, `reg_id`, `email`, `reg_type`, `txnno`, `bon`, `amount`, `status`) VALUES
(7, '2021-02-07 07:22:38', 'ICHECG1258', 'govindsuman118@gmail.com', 'Indian Participant-I', 'SBIG24356787667', 'State of India', '12050', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE `visitor_count` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_count`
--

INSERT INTO `visitor_count` (`id`, `datetime`, `ip_address`) VALUES
(2, '2021-02-09 06:21:40', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstract_reg`
--
ALTER TABLE `abstract_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_details`
--
ALTER TABLE `txn_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstract_reg`
--
ALTER TABLE `abstract_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `txn_details`
--
ALTER TABLE `txn_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
