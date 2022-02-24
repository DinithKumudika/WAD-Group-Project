-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 11:55 AM
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
-- Database: `hireme_lk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `username`, `password`, `role`) VALUES
(1, 'hiremelk', 'hiremelk123', 'superadmin'),
(2, 'DinithK', 'dinith1218', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_reg`
--

CREATE TABLE `applicant_reg` (
  `applicant_ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant_reg`
--

INSERT INTO `applicant_reg` (`applicant_ID`, `first_name`, `last_name`, `email`, `phone_no`, `username`, `password`, `verification_code`, `is_active`) VALUES
(1, 'university', 'colombo', 'ucsc@gmail.com', 712345678, 'ucsc', 'ucsc', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

CREATE TABLE `emp_reg` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`emp_id`, `first_name`, `last_name`, `email`, `phone_no`, `company`, `username`, `password`, `verification_code`, `is_active`) VALUES
(1, 'university', 'colombo', 'ucsc@gmail.com', 712345678, 'university of colombo', 'ucsc', 'ucsc', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `job_title`, `position`, `company`, `salary`, `category`, `description`) VALUES
(1, 'Post of Assistant Accountant', 'Assistant Accountant', 'Tea Tang (Pvt) Ltd', 'Rs.85,000', 'Financial', 'We are looking for a dynamic, self-motivated and resourceful individual to fill the above vacany in our finance department. \n  The ideal candidate should possess the following prerequisites\n- Completed business level 1 and 2 of ICA-SL. A degree from a recognized university will be an \n  added advantage.\n- 3-5 years of working experience. \n- A good command of the english language.\n- Good interpersonal skills'),
(2, 'Call Center Executive', 'Call Center Executive', 'Pansy Holdings (Pvt) Ltd', 'Rs.45,000', 'Retail and customer Services', 'About the role\r\nWe are looking for a full time customer Care executive for a Pansy.lk Located in Rajagiriya\r\n\r\nAge - 18-28\r\n\r\nOnly Female\r\n\r\nGCE Passed\r\n\r\nSinhala / Tamil languages required\r\n\r\n English language will be advantage\r\n\r\nAttractive Salary &amp; Commission\r\n\r\nApllication Deadline : 2022/04/07'),
(3, 'Marketing Executive - Full Time', 'Marketing Executive', 'WWS Roofing Products (Pvt) Ltd', 'Rs.75,000', 'Administration,business and management', 'We are a Group Of Company which consists of one of the leading manufacturing company in Roofing Products Industry &amp; with leading Construction Company from Steel &amp; Civil construction field. So we are looking for a young energetic female candidate to fulfil the above job vacancies in our Company.\r\n\r\n•	Gender -  Female\r\n\r\n•	Age – Below 25 years\r\n\r\n•	Should pass GCE A Levels\r\n\r\n•	Should have a keen knowledge from MS Word &amp; Excel\r\n\r\n•	1-2 years’ experience from Manufacturing &amp; Construction related company will be an added advantage.\r\n\r\n•	FRESHERS With good Understanding also welcomed.\r\n\r\n•	Salary Negotiable\r\n\r\n•	Applicants from Biyagama Area &amp; Boarding freshers’s also welcomed.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `applicant_reg`
--
ALTER TABLE `applicant_reg`
  ADD PRIMARY KEY (`applicant_ID`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `applicant_ID` (`applicant_ID`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `emp_reg`
--
ALTER TABLE `emp_reg`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_reg`
--
ALTER TABLE `applicant_reg`
  MODIFY `applicant_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_reg`
--
ALTER TABLE `emp_reg`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicant_reg` (`applicant_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`vacancy_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
