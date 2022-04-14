-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Sr no` int(255) NOT NULL,
  `Student_Id_No` int(10) NOT NULL,
  `College_Id_No` varchar(10) NOT NULL,
  `Name` text NOT NULL,
  `Login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Sr no`, `Student_Id_No`, `College_Id_No`, `Name`, `Login_time`) VALUES
(1, 12345, 'LGE2325', 'Demo Class', '2022-04-14 15:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Sno` int(4) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Address` text NOT NULL,
  `College_Id_No` text NOT NULL,
  `Student_Id_No` int(10) NOT NULL,
  `Roll_No` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Sno`, `Name`, `Email`, `Contact_no`, `Address`, `College_Id_No`, `Student_Id_No`, `Roll_No`) VALUES
(1, 'Test Test', 'this@gmail.com', 1234567890, 'Test address', 'AWGGA2SDFG', 12345, 10),
(2, 'Shubham Samal', 'samalshubham67@gmail.com', 2147483647, 'Pawnanagar , postoffice', 'DF2DSD3', 112233, 11),
(3, 'xyz', 'xyz@email.com', 2147483647, 'xyz-palace', 'D4RSQ', 552278, 25),
(4, 'xy', 'xy@gmail.com', 2147483647, 'jgiugjhbh', '567gg7', 996633, 22),
(5, 'ee', 'ee@gmail.com', 2147483647, 'dfgaterfdzn', 'gh5623', 446677, 4),
(6, 'aa', 'aa@gmail.com', 2147483647, 'ty th tyu rew yui', 'loiu789', 963852, 50),
(7, 'Shubham Samal', 'samalshubham67@gmail.com', 2147483647, 'Pawnanagar , postoffice', 'gh5623', 446677, 4),
(8, 'dd', 'dd@gmail.com', 2147483647, 'ggttse ', 'tyu678', 456987, 12),
(9, 'eee', 'eee@gmail.com', 2147483647, 'ert der tghy dews', 'er456', 4455667, 40),
(10, 'eee', 'eee@gmail.com', 2147483647, 'ert der tghy dews', 'er456', 4455667, 40),
(11, 'Shubham Samal', 'samalshubham67@gmail.com', 2147483647, 'Pawnanagar , postoffice', 'gh5623', 552278, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Sr no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Sr no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
