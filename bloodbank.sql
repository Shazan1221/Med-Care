-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 07:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `Main ID` int(11) NOT NULL,
  `FName` text NOT NULL,
  `Password` text NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Address` text NOT NULL,
  `BloodGroup` text NOT NULL,
  `BloodRhFactor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`Main ID`, `FName`, `Password`, `Name`, `Email`, `Phone`, `Address`, `BloodGroup`, `BloodRhFactor`) VALUES
(60, 'Masum', 'Raya', 'Arnob', 'armonxfa=fas', 'asdfwadasfa', ' asfawfzxfa', 'AB', '-'),
(61, 'Masum', 'Raya', 'Arnobasdaw', 'asdasdwa', 'sdxzxascsa', ' wsdasfdasfda', 'A', '-'),
(62, 'Arnob', 'Jeba', 'sdfgefsdf', 'dfsdf', 'sdfs', ' fqsdazsdf', 'A', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`Main ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `Main ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
