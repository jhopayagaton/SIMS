-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:21 AM
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
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `accntid` varchar(255) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `pssword` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`accntid`, `usrname`, `pssword`, `status`, `type`) VALUES
('1043944029', 'OwgiRobert@gmail.com', 'becb8ed53b0afee980f03de29215131537651023', '1', 'Student'),
('1227375778', 'madamTala@gmail.com', '062477f207590ea99d835bf8c946ecea581e85fc', '1', 'Student'),
('1477279988', 'vitoA@gmail.com', '54eb3d2c18a27e1e1ddf3b8d0759902ad9a6dbb3', '1', 'Student'),
('19701576', 'mattsteffanina@gmail.com', '44426c123fbe0b2d133f8683e95c67f246c71915', '1', 'Student'),
('2020563189', 'kazumi@gmail.com', 'ca06ddff1b4737172cfb8735678731eeb9b52e83', '1', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseid` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `course_code`, `course_desc`) VALUES
(1, 'BSCS', 'Bachelor of Science in Computer Science'),
(2, 'BSIT', 'Bachelor of Science in Information Technology'),
(3, 'BSOA', 'Bachelor of Science in Office Administration'),
(4, 'ACT', 'Associate in Computer Technology'),
(5, 'BLIS', 'Bachelor of Library and Information Science');

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
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`accntid`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tbl_student_info`
--
ALTER TABLE `tbl_student_info`
  ADD PRIMARY KEY (`sid`);

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
