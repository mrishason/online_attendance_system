-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 10:56 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpsc_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `RegNo` varchar(25) NOT NULL,
  `course` varchar(10) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `academic_year` varchar(12) NOT NULL,
  `week` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `attend` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `RegNo`, `course`, `subcode`, `academic_year`, `week`, `date`, `attend`) VALUES
(1, 'DIT 01/17/T.01', 'DIT4', 'ITT 06201', '2018/2019', '3rd', '2018-10-16', 'P'),
(2, 'DIT 01/17/T.05', 'DIT4', 'ITT 06201', '2018/2019', '3rd', '2018-10-16', 'P'),
(3, 'DIT 01/17/T.02', 'DIT4', 'ITT 06201', '2018/2019', '3rd', '2018-10-16', 'A'),
(4, 'BTCIT 07/15/T.03', 'BTCIT 1', 'ITT 04101', '2018/2019', '3rd', '2018-10-16', 'P'),
(5, 'DIT 01/17/T.05', 'DIT4', 'ITT 06202', '2018/2019', '2nd', '2018-10-12', 'P'),
(6, 'T/UDOM/2018/34525', 'DIT4', 'ITT 06202', '2018/2019', '2nd w', '2018-11-09', 'P'),
(7, 'T/UDOM/2018/34525', 'DIT4', 'ITT 06203', '2018/2019', '1st w', '2018-11-09', 'P'),
(8, 'T/UDOM/2018/34525', 'DIT4', 'ITT 06202', '2018/2019', '2nd w', '2018-11-09', 'P'),
(9, 'T/UDOM/2018/34527', 'DIT4', 'ITT 06203', '2018/2019', '3rd w', '2018-11-15', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'BTCIT 1'),
(2, 'BTCIT2'),
(3, 'DIT1'),
(4, 'DIT2'),
(5, 'DIT3'),
(6, 'DIT4');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `RegNo` varchar(25) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `course` varchar(10) NOT NULL,
  `academic_year` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`RegNo`, `Name`, `course`, `academic_year`) VALUES
('BTCIT 07/15/T.03', 'IBRAHIM MRISHA', 'BTCIT1', '2018/2019'),
('DIT 01/16/T.03', 'LIMBU ISACK', 'DIT 4', '2018/2019'),
('DIT 01/17/T.01', 'DYNES DAMAS', 'DIT4', '2018/2019'),
('DIT 01/17/T.02', 'RAMADHANI MAMBA', 'DIT4', '2018/2019'),
('DIT 01/17/T.05', 'VIDALOYCE A.RWEYEMAMU', 'DIT4', '2018/2019'),
('T/UDOM/2018/34525', 'FRANCIS CHEKA', 'BSTC', '2018/2019'),
('T/UDOM/2018/34527', 'CASIAN ', 'DIT4', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subcode` varchar(25) NOT NULL,
  `subname` varchar(40) NOT NULL,
  `teacher_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subcode`, `subname`, `teacher_name`) VALUES
('ITT 04101', 'Computer Application', 'Zena Juma'),
('ITT 06201', 'Multi-user Relational Database', 'emanuel laxford'),
('ITT 06202', 'Information system development', 'Alexander Benedicto'),
('ITT 06203', 'ICT for Development', 'Amina Hafidhi');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `Name`, `gender`, `email`, `phone`) VALUES
(1, 'Emmanuel Laxford', 'Male', 'laxford@gmail.com', '0753917919'),
(2, 'Michael john', 'Male', 'johnmichael@gmail.com', '0764735893'),
(3, 'Hamis Mashaka', 'Male', 'mashaka@gmail.com', '0683014819'),
(4, 'Amina Hafidhi', 'Female', 'ahafidh@yahoo.com', '0742931330'),
(5, 'Alexander Benedicto', 'Male', 'abtideso@gmail.com', '0755721339'),
(6, 'Dunkan Oyuke', 'Male', 'oyuke@gmail.com', '0784535383'),
(7, 'Zena Juma', 'Female', 'zena@yahoo.com', '0753917917');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'michael', 'tpsctbr18', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`RegNo`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
