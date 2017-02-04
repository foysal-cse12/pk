-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 12:31 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance_sheet`
--

CREATE TABLE `balance_sheet` (
  `id` bigint(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_month` int(3) NOT NULL,
  `entry_year` int(255) NOT NULL,
  `time` time NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `acnt_type` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance_sheet`
--

INSERT INTO `balance_sheet` (`id`, `entry_date`, `entry_month`, `entry_year`, `time`, `particulars`, `amount`, `acnt_type`, `place`) VALUES
(1, '2016-08-02', 8, 2016, '01:25:28', 'electroniocs', 2400, 'debit', 'Office'),
(2, '2016-08-10', 8, 2016, '01:34:26', 'water', 1200, 'debit', 'Office'),
(3, '2016-08-03', 8, 2016, '10:04:11', 'Food', 1250, 'credit', 'Office'),
(4, '2016-08-03', 8, 2016, '10:27:05', 'water', 1000, 'debit', 'Factory'),
(5, '2016-08-03', 8, 2016, '10:27:13', 'Food', 1200, 'credit', 'Factory'),
(6, '2016-08-03', 8, 2016, '01:51:36', 'Drinks', 5200, 'debit', 'Factory'),
(7, '2016-08-09', 8, 2016, '01:15:45', 'Foods', 2000, 'credit', 'Office'),
(8, '2016-08-10', 8, 2016, '03:35:32', 'water', 80, 'credit', 'Office'),
(9, '2016-08-10', 8, 2016, '03:35:54', 'SOda', 3243, 'credit', 'Office'),
(10, '2016-08-10', 8, 2016, '03:36:04', 'Mobile Bill', 3243, 'credit', 'Factory'),
(11, '2016-08-11', 8, 2016, '09:38:07', 'Electroniocs', 200, 'debit', 'Office'),
(12, '2016-08-11', 8, 2016, '11:04:05', 'Shamim Bro', 100, 'debit', 'Office'),
(13, '2016-08-16', 8, 2016, '02:07:48', 'Shamim Bro', 220.25, 'debit', 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `conveyance`
--

CREATE TABLE `conveyance` (
  `id` bigint(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_month` bigint(255) NOT NULL,
  `entry_year` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyance`
--

INSERT INTO `conveyance` (`id`, `entry_date`, `entry_month`, `entry_year`, `name`, `purpose`, `amount`) VALUES
(1, '2016-08-25', 8, 2016, 'Abdullah al foysal', 'Travel', 2000),
(3, '2016-05-15', 5, 2016, 'Tanvir ', 'Travel', 34),
(4, '2016-08-22', 8, 2016, 'TAnvir', 'Travel', 1200),
(5, '2016-11-23', 11, 2016, 'Rashid', 'Travel', 120.5);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `suppliar` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `unit_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_name`, `product_category`, `suppliar`, `quantity`, `unit_price`) VALUES
(1, '', 'TWILL TAPE', '', 10, 50),
(2, '', 'RIUND DROWSTING', '', 25, 50),
(3, '', 'SATIN TAPE', '', 50, 50),
(4, '', 'HANGERLOOF', '', 50, 50),
(5, '', 'NECKLESSLOOF', '', 50, 50),
(6, '', 'RUBBER THREAD', '', 50, 50),
(7, '', 'COTTON LACE', '', 50, 50),
(8, '', 'POLYESTER LACE', '', 50, 50),
(9, '', 'CARE LABEL', '', 50, 50),
(10, '', 'WOVEN LABEL', '', 50, 50),
(11, '', 'FLAMENT THREAD', '', 50, 50),
(12, '', 'SIZZING THREAD', '', 50, 50),
(13, '', 'POLYESTER THREAD', '', 50, 50),
(14, '', 'COTTON YARN: 10/1, 20/1, 26/1, 20/2, 30/2, 40/2', '', 50, 50),
(15, '', 'TASSEL', '', 50, 50),
(16, '', 'ELASTIC CORD', '', 50, 50),
(17, '', 'POLY', '', 70, 50),
(18, '', 'BUTTON', '', 50, 50),
(19, '', 'TISSUE PAPPER', '', 50, 50),
(21, '', 'ERRINGBONE TAPE', '', 50, 50),
(22, '', 'CANVAS TAPE', '', 50, 50),
(23, '', 'COTTON BELT', '', 50, 50),
(24, '', 'POLYESTER BELT', '', 50, 50),
(25, '', 'BASIC ELASTIC', '', 50, 50),
(26, '', 'WOVEN ELASTIC', '', 50, 50),
(27, '', 'AQUARD ELASTIC', '', 50, 50),
(28, '', 'DROWSTING', '', 50, 50),
(29, '', 'TUBE DROWSTING', '', 50, 50),
(34, '', 'shakil vi', '', 3, 10),
(35, '', 'Pias', '', 221.5, 20.2);

-- --------------------------------------------------------

--
-- Table structure for table `lc`
--

CREATE TABLE `lc` (
  `id` bigint(255) NOT NULL,
  `opening_bank` varchar(255) NOT NULL,
  `advising_bank` varchar(255) NOT NULL,
  `lc_type` varchar(255) NOT NULL,
  `lc_number` varchar(255) NOT NULL,
  `issue_month` int(255) NOT NULL,
  `issue_year` int(255) NOT NULL,
  `issue_date` date NOT NULL,
  `due_month` int(255) NOT NULL,
  `due_year` int(255) NOT NULL,
  `due_date` date NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `beneficiary_name` varchar(255) NOT NULL,
  `beneficiary_address` varchar(255) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lc`
--

INSERT INTO `lc` (`id`, `opening_bank`, `advising_bank`, `lc_type`, `lc_number`, `issue_month`, `issue_year`, `issue_date`, `due_month`, `due_year`, `due_date`, `applicant_name`, `applicant_address`, `beneficiary_name`, `beneficiary_address`, `amount`) VALUES
(2, 'Brac Bank', 'Janata Bank', '01', 'L3RE3856', 8, 2016, '2016-08-23', 12, 2016, '2016-12-22', 'Shakil Bro', 'Barishal', 'Shakil&Sons', 'Rajshahi', 2000),
(3, 'Jamuna Bank', 'Brac Bank', '02', 'xc588758', 10, 2016, '2016-10-25', 7, 2016, '2016-07-18', 'Asif', 'Dhaka', 'Azad', 'Khulna', 87);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` bigint(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_month` int(3) NOT NULL,
  `entry_time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL,
  `place` varchar(255) NOT NULL,
  `supply_date` date NOT NULL,
  `supply_month` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `entry_date`, `entry_month`, `entry_time`, `name`, `address`, `email`, `mobile`, `product`, `quantity`, `unit_price`, `total_price`, `place`, `supply_date`, `supply_month`) VALUES
(3, '2016-08-14', 8, '01:31:46', 'Tanvir&Sons', 'Dhaka', 'fff@gmail.com', '01478963254', 'TWILL TAPE', 30, 200, 6000, 'Factory', '2016-05-18', 5),
(5, '2016-08-14', 8, '01:51:09', 'Shakil&Sons', 'Rangpur', 'fff@gmail.com', '01478963254', 'TWILL TAPE', 10, 10, 100, 'Office', '2016-07-28', 7),
(6, '2016-08-14', 8, '02:11:06', 'Foysal&Sons', 'Khulna', 'fff@gmail.com', '01478963254', 'RIUND DROWSTING', 25, 10, 250, 'Factory', '2016-05-20', 5),
(7, '2016-08-14', 8, '03:04:42', 'Alok&Sons', 'Rajshahi', 'fff@gmail.com', '01478963254', 'Badhon vi', 45, 10, 450, 'Office', '2016-07-25', 7),
(9, '2016-08-16', 8, '02:06:54', 'Badho&sons.', 'Dhaka', 'fff@gmail.com', '01478963254', 'shakil vi', 5.5, 5.5, 30.25, 'Factory', '2016-07-27', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance_sheet`
--
ALTER TABLE `balance_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyance`
--
ALTER TABLE `conveyance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_category` (`product_category`);

--
-- Indexes for table `lc`
--
ALTER TABLE `lc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance_sheet`
--
ALTER TABLE `balance_sheet`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `conveyance`
--
ALTER TABLE `conveyance`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `lc`
--
ALTER TABLE `lc`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
