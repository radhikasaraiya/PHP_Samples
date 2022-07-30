-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 07:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bscit6`
--

-- --------------------------------------------------------

--
-- Table structure for table `depttb`
--

CREATE TABLE `depttb` (
  `id` int(5) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depttb`
--

INSERT INTO `depttb` (`id`, `dname`) VALUES
(1, 'sales'),
(2, 'accts'),
(3, 'purchase'),
(4, 'testig');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` int(5) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `salary` int(7) NOT NULL,
  `desgn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `ename`, `salary`, `desgn`) VALUES
(3, 'Prakash', 89000, 'TL'),
(6, 'aaa', 50000, 'manager'),
(7, 'dsfds', 12000, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `upload_pic` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `name`, `city`, `shift`, `gender`, `salary`, `upload_pic`, `dept_id`) VALUES
(2, 'sdf', 'abad', 'day', 'female', 343, './upload/150px-Flag_of_the_United_States.svg.jpg', 4),
(3, 'aa', 'Ahemdabad', 'night', 'male', 324, './upload/150px-Flag_of_Germany.svg.jpg', 3),
(4, 'vv11', 'Mumbai', 'Day,Night', 'female', 32, './upload/150px-Flag_of_the_United_States.svg.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `rno` int(5) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sem` int(5) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`rno`, `sname`, `sem`, `course`) VALUES
(1, 'miral', 3, 'java'),
(2, 'jiya', 3, 'vb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depttb`
--
ALTER TABLE `depttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depttb`
--
ALTER TABLE `depttb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `rno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
