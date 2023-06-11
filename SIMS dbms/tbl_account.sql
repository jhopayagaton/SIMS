-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:29 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`accntid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
