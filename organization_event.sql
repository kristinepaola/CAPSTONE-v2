-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 03:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization_event`
--

CREATE TABLE `organization_event` (
  `event_id` int(5) NOT NULL,
  `eventTitle` text NOT NULL,
  `eventDesc` text NOT NULL,
  `eventLocation` text NOT NULL,
  `eventStart` datetime NOT NULL,
  `eventEnd` datetime NOT NULL,
  `eventMatReq` text NOT NULL,
  `eventAgeReq` int(5) NOT NULL,
  `eventGenderReq` text NOT NULL,
  `eventOccuptReq` text NOT NULL,
  `eventnVolunteer` int(5) NOT NULL,
  `eventTrainingAttend` text NOT NULL,
  `eventPartnerOrg` text NOT NULL,
  `eventImage` longblob NOT NULL,
  `organization_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization_event`
--
ALTER TABLE `organization_event`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `organization_id` (`organization_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization_event`
--
ALTER TABLE `organization_event`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
