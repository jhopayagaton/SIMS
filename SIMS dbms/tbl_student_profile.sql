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
-- Table structure for table `tbl_student_profile`
--

CREATE TABLE `tbl_student_profile` (
  `profileid` int(11) NOT NULL,
  `accntid` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_profile`
--

INSERT INTO `tbl_student_profile` (`profileid`, `accntid`, `sid`, `courseid`) VALUES
(660836550, '1043944029', 10310174, 4),
(1344268966, '19701576', 10310173, 2),
(1422428546, '1227375778', 10310175, 1),
(1626501645, '1477279988', 10310176, 2),
(1779095634, '2020563189', 10310177, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_profile`
--
ALTER TABLE `tbl_student_profile`
  ADD PRIMARY KEY (`profileid`) USING BTREE,
  ADD KEY `tbl_student_profile_ibfk_1` (`accntid`),
  ADD KEY `tbl_student_profile_ibfk_2` (`sid`),
  ADD KEY `tbl_student_profile_ibfk3` (`courseid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
