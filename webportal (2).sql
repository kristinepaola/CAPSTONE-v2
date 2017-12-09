-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 08:06 AM
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
-- Table structure for table `occupation_event`
--

CREATE TABLE `occupation_event` (
  `occupation_id` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `organization_id` int(5) NOT NULL,
  `occupationName` text NOT NULL,
  `noVolunteers` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization_event`
--

CREATE TABLE `organization_event` (
  `event_id` int(5) NOT NULL,
  `organization_id` int(5) NOT NULL,
  `eventTitle` text NOT NULL,
  `eventDesc` text NOT NULL,
  `eventLocation` text NOT NULL,
  `eventStart` datetime NOT NULL,
  `eventEnd` datetime NOT NULL,
  `eventMatReq` text NOT NULL,
  `eventAgeReq` int(5) NOT NULL,
  `eventGenderReq` text NOT NULL,
  `eventTrainingAttend` text NOT NULL,
  `eventPartnerOrg` text NOT NULL,
  `eventImage` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization_registration`
--

CREATE TABLE `organization_registration` (
  `organization_id` int(5) NOT NULL,
  `orgName` text NOT NULL,
  `emailAdd` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `organization_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_registration`
--

CREATE TABLE `volunteer_registration` (
  `volunteer_id` int(5) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_registration`
--

INSERT INTO `volunteer_registration` (`volunteer_id`, `firstName`, `lastName`, `emailAdd`, `password`, `confirmPass`) VALUES
(2, 'daphne', 'comendador', 'daphnecomendador@gmail.com', 'daphne', 'daphne'),
(3, 'Ofelia', 'Gabisay', 'gabisayofelia@gmail.com', '1234', '1234'),
(4, 'Andrew', 'Flores', 'andrewflores@gmail.com', 'unggoy', 'unggoy'),
(5, 'Andrew', 'Flores', 'andrewflores@gmail.com', 'unggoy', 'unggoy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `occupation_event`
--
ALTER TABLE `occupation_event`
  ADD PRIMARY KEY (`occupation_id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD UNIQUE KEY `organization_id` (`organization_id`);

--
-- Indexes for table `organization_event`
--
ALTER TABLE `organization_event`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `organization_id` (`organization_id`);

--
-- Indexes for table `organization_registration`
--
ALTER TABLE `organization_registration`
  ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD UNIQUE KEY `organization_id` (`organization_id`);

--
-- Indexes for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `occupation_event`
--
ALTER TABLE `occupation_event`
  MODIFY `occupation_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organization_event`
--
ALTER TABLE `organization_event`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organization_registration`
--
ALTER TABLE `organization_registration`
  MODIFY `organization_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  MODIFY `volunteer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
