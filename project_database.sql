-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 10:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db`;
--
-- Database: `members`
--
CREATE DATABASE IF NOT EXISTS `members` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `members`;

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `MembershipID` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Address1` varchar(100) DEFAULT NULL,
  `Address2` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Fixed` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `NIC` varchar(20) DEFAULT NULL,
  `Occupation` varchar(20) DEFAULT NULL,
  `Civil_status` varchar(10) DEFAULT NULL,
  `Admission` varchar(10) DEFAULT NULL,
  `Begin` date DEFAULT NULL,
  `End` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`MembershipID`, `Firstname`, `Lastname`, `Address1`, `Address2`, `Mobile`, `Fixed`, `Email`, `Birthday`, `NIC`, `Occupation`, `Civil_status`, `Admission`, `Begin`, `End`) VALUES
('100', 'Erantha Yasith', 'Welikala', 'No.125,Meegahawatta,Diddeniya,Padukka', 'Akbhar Hostel,Kandy', '071-0402962', '011-2859930', 'eranthawelikala@gmail.com', '1995-03-08', '', '', NULL, NULL, NULL, NULL),
('123s', 's', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members_login_details`
--

CREATE TABLE `members_login_details` (
  `MembershipID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_login_details`
--

INSERT INTO `members_login_details` (`MembershipID`, `Password`) VALUES
('100', '100'),
('reg000', '0000'),
('sec000', '1111'),
('123s', '123');

-- --------------------------------------------------------

--
-- Table structure for table `signup_requests`
--

CREATE TABLE `signup_requests` (
  `MembershipID` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Accepted` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_requests`
--

INSERT INTO `signup_requests` (`MembershipID`, `Firstname`, `Lastname`, `Password`, `Accepted`) VALUES
('321', 's', 'd', '321', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`MembershipID`),
  ADD KEY `MembershipID` (`MembershipID`),
  ADD KEY `MembershipID_2` (`MembershipID`);

--
-- Indexes for table `members_login_details`
--
ALTER TABLE `members_login_details`
  ADD PRIMARY KEY (`MembershipID`);

--
-- Indexes for table `signup_requests`
--
ALTER TABLE `signup_requests`
  ADD PRIMARY KEY (`MembershipID`);
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `reg_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `access` enum('A','M','R','S') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`reg_no`, `password`, `access`) VALUES
('reg', 'reg', 'R'),
('14142', '14142', 'M'),
('14380', '14380', 'M'),
('14314', '14314', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `reg_no` varchar(20) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel_no` varchar(20) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `achs` varchar(1000) DEFAULT NULL,
  `services` varchar(1000) DEFAULT NULL,
  `donations` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`reg_no`, `fname`, `lname`, `age`, `dob`, `address`, `tel_no`, `email`, `achs`, `services`, `donations`) VALUES
('14142', 'Amila', 'Indika', 22, '1995-10-16', 'Ranwala\r\nKegalle', '0768658330', 'amila.indika@gmail.com', NULL, NULL, NULL),
('14314', 'Kushan', 'Senanayaka', 23, '1994-10-25', '"Senani"\r\nPathangigolla watta\r\nUdadigana\r\nKurunegala', '0711143529', 'ksenanayaka@gmail.com', NULL, NULL, NULL),
('14380', 'Erantha', 'Welikala', 22, '1995-03-08', 'No 125\r\nMeegahawatta\r\nDiddeniya\r\nPadukka', '0710402962', 'eranthawelikala@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `reg_no` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `accepted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `reg_no_UNIQUE` (`reg_no`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
