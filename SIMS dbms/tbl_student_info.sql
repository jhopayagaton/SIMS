-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_info`
--

CREATE TABLE `tbl_student_info` (
  `sid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `photo` blob DEFAULT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_info`
--

INSERT INTO `tbl_student_info` (`sid`, `fname`, `lname`, `emailadd`, `photo`, `mobile_no`, `date_of_birth`, `address`) VALUES
(10310173, 'Matt', 'Steffanina', 'mattsteffanina@gmail.com', 0x63666635626464376366326562613339376636303232643863396638323138302e6a7067, '09123456789', '1992-10-10', 'Virginia, United States'),
(10310174, 'Roberto', 'Suarez', 'OwgiRoberto@gmail.com', NULL, '09613374590', '0000-00-00', 'Parañaque City'),
(10310175, 'Tala', 'Soledad', 'madamTala@gmail.com', NULL, '09655801490', '1994-04-28', 'Bacoor, Cavite'),
(10310176, 'Vito', 'Alexander', 'vitoA@gmail.com', NULL, '09180334911', '1993-09-08', 'Olongapo, City'),
(10310177, 'Kazumi', 'Swift', 'kazumi@gmail.com', NULL, '09980421088', '1999-06-18', 'Mabalacat, Pampanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
