-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_handling`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Faculty_id` int(11) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`Name`, `Email`, `Faculty_id`, `Mobile`, `Password`, `Department`) VALUES
('Pankaj ', 'ppc@mitaoe.ac.in', 123, '8381019999', '', 'CS'),
('Yogesh', 'yogesh@gmail.com', 123, '8381019655', 'adfadsfadsf', 'CE'),
('Yogesh', 'yogesh@gmail.com', 123, '8381019655', 'afasdfda', 'CE'),
('1604931207722_assi_1_227.pdf', 'yogesh@gmail.com', 213213, '8381019655', 'afffaf', 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Yogesh gaikwad', 'yogesh@gmail.com', 'Regarding Website', 'afdsakfjasdlfjasd');

-- --------------------------------------------------------

--
-- Table structure for table `material_store`
--

CREATE TABLE `material_store` (
  `Subject_name` varchar(100) NOT NULL,
  `Unit` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Faculty_name` varchar(50) NOT NULL,
  `Department` varchar(5) NOT NULL,
  `Year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_store`
--

INSERT INTO `material_store` (`Subject_name`, `Unit`, `file_name`, `file_size`, `docname`, `Time`, `Faculty_name`, `Department`, `Year`) VALUES
('WT', 1, '1604907425826_bootstrap.bundle.js', '229201', 'asdf', '09/11/2020 08:37:05', 'Pankaj ', 'CS', 'TY'),
('AI', 1, '1604925166778_Assi_1_AI.pdf', '191582', 'Assignment_No_1.pdf', '09/11/2020 13:32:46', 'Pankaj ', 'CS', 'TY');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no` varchar(50) NOT NULL,
  `PRN` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Year` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Name`, `Email`, `Mobile_no`, `PRN`, `Password`, `Department`, `Year`) VALUES
('Yogesh gaikwad', 'yogesh@mail.com', '8381019655', '0220190153', 'yogesh12', 'ME', 'TY'),
('Yogesh gaikwad', 'yogesh@gmail.com', '8381019654', '0220190155', 'yogesh', 'CS', 'TY'),
('Gaurav Rathod', 'gorathod@mitaoe.ac.in', '8329247949', '0220190165', 'gaurav123', 'IT', 'TY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`PRN`),
  ADD UNIQUE KEY `Mobile_no` (`Mobile_no`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
