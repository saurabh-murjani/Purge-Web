-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 07:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `purgemanit`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Name` varchar(50) NOT NULL,
  `Heading` varchar(100) NOT NULL,
  `Content` text NOT NULL,
  `Image` varchar(70) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Name`, `Heading`, `Content`, `Image`, `Date`) VALUES
('ajkas', 'ad adjkas dkaks', 'ad adjkas dkaks', 'a扨楮慶⹪灧', '2015-12-31'),
('ad iau', 'klsdamklslk', 'klsdamklslk', 'images/abhinav.jpg', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `reach_us`
--

CREATE TABLE IF NOT EXISTS `reach_us` (
`ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reach_us`
--

INSERT INTO `reach_us` (`ID`, `Name`, `Email`, `Message`) VALUES
(12, 'sfsf', 'sfsfs', 'fsfsfdsfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `slp`
--

CREATE TABLE IF NOT EXISTS `slp` (
`ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Year` varchar(15) NOT NULL,
  `Contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reach_us`
--
ALTER TABLE `reach_us`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `slp`
--
ALTER TABLE `slp`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reach_us`
--
ALTER TABLE `reach_us`
MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slp`
--
ALTER TABLE `slp`
MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
