-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 10:10 AM
-- Server version: 10.6.4-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project_Used_Cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `Enquiries`
--

CREATE TABLE `Enquiries` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `messages` varchar(300) NOT NULL,
  `car_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `MobileNo.` varchar(50) NOT NULL,
  `sellerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Listing`
--

CREATE TABLE `Listing` (
  `list_id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Fuel` varchar(100) NOT NULL,
  `Color` varchar(150) NOT NULL,
  `RegNo` varchar(50) NOT NULL,
  `Insurance` date NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sellcar`
--

CREATE TABLE `sellcar` (
  `car_id` int(20) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Postal_code` int(10) NOT NULL,
  `Manu_year` date NOT NULL,
  `Brand` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Kmsdriven` varchar(50) NOT NULL,
  `No_ofown` int(10) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobileno` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User_Info`
--

CREATE TABLE `User_Info` (
  `user_id` int(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `MobileNo.` varchar(100) NOT NULL,
  `PhoneNo.` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Street_Address` varchar(250) NOT NULL,
  `PostalCode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Enquiries`
--
ALTER TABLE `Enquiries`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `Listing`
--
ALTER TABLE `Listing`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `Listing_ibfk_2` (`car_id`);

--
-- Indexes for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `User_Info`
--
ALTER TABLE `User_Info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Enquiries`
--
ALTER TABLE `Enquiries`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `Listing`
--
ALTER TABLE `Listing`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sellcar`
--
ALTER TABLE `sellcar`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `User_Info`
--
ALTER TABLE `User_Info`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Enquiries`
--
ALTER TABLE `Enquiries`
  ADD CONSTRAINT `Enquiries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User_Info` (`user_id`),
  ADD CONSTRAINT `Enquiries_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `sellcar` (`car_id`);

--
-- Constraints for table `Listing`
--
ALTER TABLE `Listing`
  ADD CONSTRAINT `Listing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User_Info` (`user_id`),
  ADD CONSTRAINT `Listing_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `sellcar` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sellcar`
--
ALTER TABLE `sellcar`
  ADD CONSTRAINT `sellcar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User_Info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
