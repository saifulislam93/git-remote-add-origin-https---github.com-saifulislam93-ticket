-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 09:55 AM
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
-- Database: `khs`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `Customer_name` varchar(255) NOT NULL,
  `Contact_no` int(11) NOT NULL,
  `Ship_id` int(11) DEFAULT NULL,
  `Fare` int(11) NOT NULL,
  `Journey_date` date NOT NULL,
  `Journey_time` int(11) NOT NULL,
  `From_location` time NOT NULL,
  `To_location` time NOT NULL,
  `No_of_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auth`
--

CREATE TABLE `tbl_auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1 admin, 2 user',
  `forget_key` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 deleted,1 active, 2 inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_auth`
--

INSERT INTO `tbl_auth` (`id`, `name`, `contact`, `email`, `image`, `password`, `role`, `forget_key`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `last_login`, `login_ip`) VALUES
(1, 'jamal Uddin', '01687295469', 'shariful0606@gmail.com', NULL, 'a083e3e5c9f5489e1e06394fb6573e157c97804a', 1, '', 1, '2021-10-25 07:16:07', '2021-10-25 07:16:07', 1, 1, '2021-10-27 04:47:25', '::1'),
(3, 'Kamal Uddin', '015454521454', 'kamal@gmail.com', 'Kamal_Uddin1635228142.jpg', '10470c3b4b1fed12c3baac014be15fac67c6e815', 1, NULL, 1, '2021-10-26 06:02:22', '2021-10-26 06:02:22', 1, 1, '2021-10-26 06:02:37', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner`
--

CREATE TABLE `tbl_house_owner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `alt_contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `per_add` text DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0 deleted , 1 active, 2 inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner_flat`
--

CREATE TABLE `tbl_house_owner_flat` (
  `id` int(11) NOT NULL,
  `house_owner_id` int(11) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 deleted1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner_payment`
--

CREATE TABLE `tbl_house_owner_payment` (
  `id` int(11) NOT NULL,
  `house_owner_id` int(11) NOT NULL,
  `pay_amount` decimal(8,2) NOT NULL,
  `actual_amount` decimal(8,2) NOT NULL,
  `pdate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 2 hit account',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `contact_no` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `journey_date` date NOT NULL,
  `journey_time` time NOT NULL,
  `from_location` time NOT NULL,
  `to_location` time NOT NULL,
  `no_of_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slogan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ship`
--

CREATE TABLE `tbl_ship` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `ctg_start` time DEFAULT NULL,
  `sandwip_start` time DEFAULT NULL,
  `fare` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ship`
--

INSERT INTO `tbl_ship` (`id`, `type`, `name`, `capacity`, `ctg_start`, `sandwip_start`, `fare`, `status`) VALUES
(1, 'speedboat', 'MV k', 200, '09:00:00', '14:00:00', 120, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_house_owner`
--
ALTER TABLE `tbl_house_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_house_owner_flat`
--
ALTER TABLE `tbl_house_owner_flat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_owner_id` (`house_owner_id`);

--
-- Indexes for table `tbl_house_owner_payment`
--
ALTER TABLE `tbl_house_owner_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_owner_id` (`house_owner_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ship`
--
ALTER TABLE `tbl_ship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_house_owner`
--
ALTER TABLE `tbl_house_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_house_owner_flat`
--
ALTER TABLE `tbl_house_owner_flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_house_owner_payment`
--
ALTER TABLE `tbl_house_owner_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ship`
--
ALTER TABLE `tbl_ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_house_owner_flat`
--
ALTER TABLE `tbl_house_owner_flat`
  ADD CONSTRAINT `tbl_house_owner_flat_ibfk_1` FOREIGN KEY (`house_owner_id`) REFERENCES `tbl_house_owner` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
