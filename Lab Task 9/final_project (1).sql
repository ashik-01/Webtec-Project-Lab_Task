-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 09:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `username`, `password`, `Name`, `Designation`) VALUES
(1, 'tza12', '12345', 'Tanzima Zahir Aurthy', 'accounts'),
(2, 'wal10', '54321', 'Walid hossain', 'payment');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empno`, `Name`, `Email`, `Address`, `Phone`, `Salary`, `Position`, `Gender`, `DOB`, `Pass`) VALUES
(7, 'test', 't@gmail.com', 'tuv', 114477, 1000, 'guard', 'Male', '2021-04-21', '445566@');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `name` varchar(50) NOT NULL,
  `AccNo` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `purpose` text NOT NULL,
  `ammount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`name`, `AccNo`, `type`, `purpose`, `ammount`) VALUES
('Faiaz Ben Reza', 3, 'Home', 'I need to buy a house ', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `upass`, `ucat`) VALUES
('anik', '1234', 'admin'),
('anikhr', '12345', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Code` int(10) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Pprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Code`, `Pname`, `Pprice`) VALUES
(101, 'Black T-shirt', 90000),
(102, 'White T-shirt', 80000),
(103, 'Pant', 85000);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `PN` int(15) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Size` char(5) NOT NULL,
  `Piece` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PN` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dob` date NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Address`, `PN`, `Gender`, `Dob`, `Password`) VALUES
(2, 'Fuad', 'fuad420@gmail.com', 'Dhaka', 1875294019, 'male', '1000-01-01', 11223344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empno`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
