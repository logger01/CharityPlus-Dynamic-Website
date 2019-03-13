-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 09:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charityplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity_db`
--

CREATE TABLE `charity_db` (
  `id` int(11) NOT NULL,
  `charity_name` varchar(255) NOT NULL,
  `charity_registered_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `landline_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validation_code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity_db`
--

INSERT INTO `charity_db` (`id`, `charity_name`, `charity_registered_id`, `address`, `phone_no`, `landline_no`, `email`, `password`, `validation_code`, `active`) VALUES
(1, 'charity01', 'HardRock12', 'bangalore, 250069, karnataka, India.', '7894561235', '08012457896', 'php47@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '76db64fc0680b5bb4e9a86d03f4607e4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `create_volunteer`
--

CREATE TABLE `create_volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_volunteer`
--

INSERT INTO `create_volunteer` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `aadhar_no`, `pan`) VALUES
(1, 'Rajiv', 'Dorjee', 'hello1104@gmail.com', '1234567897', '1245789874568952', 'dfd22d4d1dd'),
(2, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(3, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(4, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(5, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(6, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(7, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(8, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(9, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(10, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(11, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(12, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan'),
(13, 'first_name', 'last_name', 'email', 'phone_no', 'aadhar_no', 'pan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validation_code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `validation_code`, `active`) VALUES
(1, 'yeshi', 'tenphel', '9980463638', 'tentibet59@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'a7c2a9f40fc7d920d7e15ae3a0abf8f0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validation_code` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `aadhar_no`, `pan`, `password`, `validation_code`, `active`) VALUES
(1, 'Prakash', 'Kumar', 'david6799@gmail.com', '1234567894', '1254789658745126', '124578kjh', 'e10adc3949ba59abbe56e057f20f883e', 'd1e2d95a499f944c55d5771092f44bb3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity_db`
--
ALTER TABLE `charity_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_volunteer`
--
ALTER TABLE `create_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity_db`
--
ALTER TABLE `charity_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_volunteer`
--
ALTER TABLE `create_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
