-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 07:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`) VALUES
(1, 'Admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `name`, `specialty`, `degree`, `address`, `phone`) VALUES
(1, 'Dr. Md. Azizul Haque (Azad)', 'Medicine\r\n', 'MBBS,MRCP (UK), FCPS(Medicine)', 'Micropath, Laxmipur, Rajshahi', '01724550544'),
(2, 'Dr. Zahirul Haque', 'Medicine', 'MBBS(DMC),FCPS(Medicine)', 'The Pathology, Laxmipur, Rajshahi', '01721772123'),
(3, 'Prof. Dr. ARM Saifuddin Ekram', 'Medicine', 'FCPS (Medicine),FACP, Ph.D(USA)', 'The Pathology, Laxmipur, Rajshahi', '01721772123'),
(4, 'Dr. Laila Shamima Sharmin', 'Pediatric', 'FCPS (Child/Pediatrics)', 'Micropath, Laxmipur, Rajshahi', '01724550544'),
(5, 'Dr. Md. Belal Hossain', 'Pediatric', 'MBBS (Dhaka), DCH (Dhaka), FCPS (Child/Pediatrics)', 'Rajshahi Medical College Hospital', '01721774975'),
(6, 'Dr. Md. Belal Uddin', 'Pediatric', 'FCPS (Child/Pediatrics)', 'Medipath, Laxmipur, Rajshahi', '01721775346'),
(7, 'Dr. A.K.M. Golam Kibria', 'Surgery', 'MBBS, FCPS (Surgery)', 'Islami Bank Medical College Hospital, Rajshahi', '01721771146'),
(8, 'Dr. Mahibul Hasan', 'Surgery', 'MBBS, FCPS (Surgery)', 'Micropath, Laxmipur, Rajshahi', '01721771724'),
(9, 'Dr. Md. Abu Bakar Siddique', 'Surgery', 'MBBS, FCPS (Surgery)', 'Islami Bank Medical College Hospital, Rajshahi', '01721774975'),
(10, 'Dr. Md. Habibullah Sarkar', 'Surgery', 'MBBS, FCPS (Surgery)', 'Micropath, Laxmipur, Rajshahi', '01721771724'),
(11, 'Dr. Md. Samsuzzaman (Bablu)', 'Neurosurgery', 'MBBS, MS (Neurosurgery) ', 'Zamzam Islamic Hospital, Rajshahi', '01721771146'),
(12, 'Dr. Md. Kafil Uddin', 'Neuromedicine', 'MCPS (Medicine), MD (Neurology)', 'Barindra Clinic, Laxmipur, Rajshahi ', '01721774337'),
(13, 'Dr. B. Zaman', 'Eye', 'MBBS, DO (DU)', 'Zamzam Islamic Hospital, Rajshahi', '01711192600'),
(14, 'Rahmand Sheikh', 'Eye', 'MBBS, DO, MICS', 'Mahanagar Clinic, Kazihata, Rajshahi', '01721775346'),
(15, 'Dr. Md Ansar Ali', 'Oral & Dental', 'BDS (Dhaka)', 'Rajshahi Medical College Hospital', '01721771147'),
(16, 'Dr. Md. Abdullah Al-Amin', 'Skin & Sex', 'MBBS (Dhaka), DDV (DU) ', 'Jilia Medicare, Laxmipur, Rajshahi', '01721773325'),
(17, 'Dr. Md. Asadur Rahman', 'ENT', 'MBBS, FCPS (ENT)', 'Rajshahi Medical College Hospital', '0721-64975 '),
(18, 'Dr. Md. Enamul Haque', 'ENT', 'MBBS, DLO', 'Islami Bank Hospital, Laxmipur, Rajshahi', '01792546982');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `sub_district` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `last_donation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` text NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `name`, `blood_group`, `sub_district`, `district`, `last_donation`, `email`, `number`, `user_id`) VALUES
(6, 'MD. Arnob Mustakim', 'O+', 'Savar', 'Dhaka', '18/11/2022', 'arnob@gmail.com', '01932648765', 3),
(7, 'Ahmmed Shahriar Shazan', 'B+', 'Rajshahi', 'Rajshahi', '23/09/2022', 'shazan@gmail.com', '01746147851', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`) VALUES
(3, 'Arnob Mustakim', 'arnob@gmail.com', '12345'),
(4, 'Shazan', 'shazan@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
