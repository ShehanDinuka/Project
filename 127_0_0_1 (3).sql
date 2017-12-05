-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 02:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `reg_no` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `images` longblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('100', 'vjgfyt', 'tdtrs', 8, '2015-10-12', 'dyr', '6546', '', '', '', ''),
('12', 'sad', 'ada', 55, '2015-10-12', 'ssscc', '719391247', 'sssssab@shcvja.com', 'kgis', 'fsf', 'sf'),
('123', 's', 'd', 2, '2015-10-12', 'sf\r\nddh\r\nhkh', '55557', '', '', '', ''),
('14243', 'ShehaN', 'DinukA', 24, '1994-10-14', '7 A\r\nQuarry Road\r\nNeelammahara\r\nBoralesgamuwa', '071 9391246', 'shehan@gmail.comm', 'Cricket Champion', 'Volunteering', '$1000'),
('15243', 'Ravi', 'lak', 18, '1997-09-02', 'nfnfndn', '25255', '', '', '', ''),
('16243', 'Ravi', 'lak', 18, '1997-09-02', 'hfkvsfgosf\r\nsiahphaf\r\nlifgsigfpi\r\ns', '373', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `reg_no` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `accepted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`reg_no`, `fname`, `lname`, `password`, `accepted`) VALUES
(15243, 'Ravi', 'lak', '15243', 1),
(125, 'wha', 'sup', 'fd', 0),
(14243, 'Shehan', 'Dinuka', '15243', 0);

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
