-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 02:03 AM
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
(2, 'daphne', 'comendador', 'daphnecomendador@gmail.com', 'daphne', 'daphne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization_registration`
--
ALTER TABLE `organization_registration`
  ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization_registration`
--
ALTER TABLE `organization_registration`
  MODIFY `organization_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  MODIFY `volunteer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
