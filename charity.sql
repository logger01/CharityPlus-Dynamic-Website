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
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity_info`
--

CREATE TABLE `charity_info` (
  `id` int(11) NOT NULL,
  `charity_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `campaigns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity_info`
--

INSERT INTO `charity_info` (`id`, `charity_name`, `email`, `phone`, `country`, `campaigns`) VALUES
(1, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(2, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(3, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(4, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(5, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(6, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(7, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(8, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(9, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(10, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(11, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(12, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(13, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(14, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(15, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(16, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(17, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(18, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(19, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(20, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(21, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(22, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(23, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(24, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(25, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(26, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(27, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(28, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(29, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(30, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(31, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(32, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(33, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(34, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(35, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(36, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(37, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(38, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(39, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(40, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(41, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(42, 'charity_name', 'email', 'phone', 'country', 'campaigns'),
(43, 'charity_name', 'email', 'phone', 'country', 'campaigns');

-- --------------------------------------------------------

--
-- Table structure for table `create_campaign`
--

CREATE TABLE `create_campaign` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(255) NOT NULL,
  `select_category` varchar(255) NOT NULL,
  `hosted_by` varchar(255) NOT NULL,
  `campaign_description` varchar(255) NOT NULL,
  `campaign_video_link` varchar(255) NOT NULL,
  `end_date` date NOT NULL,
  `goal` varchar(255) NOT NULL,
  `preloaded_amount` int(11) NOT NULL,
  `close_campaign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_campaign`
--

INSERT INTO `create_campaign` (`id`, `campaign_name`, `select_category`, `hosted_by`, `campaign_description`, `campaign_video_link`, `end_date`, `goal`, `preloaded_amount`, `close_campaign`) VALUES
(1, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(2, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(3, 'South East', 'Food', 'asasasas', 'dg dd d df dfdf', 'http//uscampaign.com', '2019-02-27', '$60,000', 0, 'End date'),
(4, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(5, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(6, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(7, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(8, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(9, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(10, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(11, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(12, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(13, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(14, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(15, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(16, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(17, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(18, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(19, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(20, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(21, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(22, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(23, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(24, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(25, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(26, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(27, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(28, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(29, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(30, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(31, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(32, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(33, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(34, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(35, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(36, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(37, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(38, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(39, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(40, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(41, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(42, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(43, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign'),
(44, 'campaign_name', 'select_category', '', 'campaign_description', 'campaign_video_link', '0000-00-00', 'goal', 0, 'close_campaign');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(1, 'index.jpg', 'This is a test caption for the photo uploaded for the campaign!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity_info`
--
ALTER TABLE `charity_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_campaign`
--
ALTER TABLE `create_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `charity_info`
--
ALTER TABLE `charity_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `create_campaign`
--
ALTER TABLE `create_campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
