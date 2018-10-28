-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 02:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pes_boys_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` tinytext,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`) VALUES
(20, 'Biriyani', 'come get some!');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(5) NOT NULL,
  `review_content` text NOT NULL,
  `review_stu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_content`, `review_stu`) VALUES
(9, 'Decent Hostel. But The Fact That The Wi-fi Doesn\'t Work Is Sad.\r\n', 'Sree Hari K');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sta_name` varchar(100) NOT NULL,
  `sta_dob` varchar(20) NOT NULL,
  `sta_doj` varchar(20) NOT NULL,
  `sta_number` varchar(20) NOT NULL,
  `sta_email` varchar(100) NOT NULL,
  `sta_address` text NOT NULL,
  `can_ann` int(2) NOT NULL,
  `can_del` int(2) NOT NULL,
  `can_add` int(2) NOT NULL,
  `can_givep` int(2) NOT NULL,
  `sta_id` varchar(20) NOT NULL,
  `sta_passw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sta_name`, `sta_dob`, `sta_doj`, `sta_number`, `sta_email`, `sta_address`, `can_ann`, `can_del`, `can_add`, `can_givep`, `sta_id`, `sta_passw`) VALUES
('Abcd', '1975-11-04', '2011-11-23', '1233456789', 'a@b.com', 'dqwqe', 1, 1, 0, 0, 'BG1', 'abcd'),
('Mark', '1999-01-01', '1999-01-01', '0987654321', 'a.c@d.com', 'q', 1, 1, 0, 1, 'EMPLOYEE1', 'employee'),
('Abhishek', '1975-12-04', '2013-11-09', '9876543201', 'abc.def@gmail.com', 'right here in the hostel', 1, 1, 1, 1, 'WARDEN1', 'iamwarden');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `usn` varchar(20) NOT NULL,
  `passw` varchar(100) DEFAULT NULL,
  `stu_name` varchar(100) DEFAULT NULL,
  `stu_dob` varchar(20) DEFAULT NULL,
  `stu_email` varchar(100) DEFAULT NULL,
  `stu_number` varchar(20) DEFAULT NULL,
  `stu_address` text,
  `stu_course` varchar(15) DEFAULT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_email` varchar(100) DEFAULT NULL,
  `p_number` varchar(20) DEFAULT NULL,
  `p_address` text,
  `g_name` varchar(100) DEFAULT NULL,
  `g_email` varchar(100) DEFAULT NULL,
  `g_number` varchar(20) DEFAULT NULL,
  `g_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`usn`, `passw`, `stu_name`, `stu_dob`, `stu_email`, `stu_number`, `stu_address`, `stu_course`, `p_name`, `p_email`, `p_number`, `p_address`, `g_name`, `g_email`, `g_number`, `g_address`) VALUES
('01FBBGECSABE', '12345678', 'Aditya', '1998-03-05', 'abc@gmail.com', '9999999999', 'Abc,Xyz,Bangalore', 'BTECH-CSE', 'Anubis', 'xyz@yahoo.com', '8888888888', 'Abc,Xyz,Bangalore', 'Anubis', 'xyz@yahoo.com', '8888888888', 'Abc,Xyz,Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sta_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
