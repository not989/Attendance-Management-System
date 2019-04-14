-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 08:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db200`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `reg` int(15) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `count` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`reg`, `coursename`, `count`) VALUES
(2014331001, 'CSE-150', 3),
(2014331001, 'CSE-250', 1),
(2014331002, 'CSE-150', 3),
(2014331002, 'CSE-250', 1),
(2014331020, 'CSE-150', 1),
(2014331020, 'CSE-250', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `coursename` varchar(20) NOT NULL,
  `teachername` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `totalclass` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`coursename`, `teachername`, `semester`, `totalclass`) VALUES
('CSE-150', '', 2, 3),
('CSE-250', '', 2, 1),
('CSE-350', '', 3, 0),
('CSE-450', '', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `name` varchar(20) NOT NULL,
  `reg` int(10) NOT NULL,
  `semester` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`name`, `reg`, `semester`, `email`, `mobile`) VALUES
('', 2014331001, 2, '', 0),
('', 2014331002, 2, '', 0),
('', 2014331003, 3, '', 0),
('', 2014331004, 3, '', 0),
('aww', 2014331020, 2, 'neamulahasan@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `teachername` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`teachername`, `email`, `post`, `mobile`, `password`) VALUES
('edfgs', 'neamul11@gmail.com', 'Professor', 3111, '46717');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `reg` (`reg`,`coursename`),
  ADD KEY `coursename` (`coursename`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
