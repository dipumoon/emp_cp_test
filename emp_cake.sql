-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` bigint(20) NOT NULL,
  `EmployeeName` varchar(150) NOT NULL,
  `Address` text DEFAULT NULL,
  `EmailAddress` varchar(150) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `EmployeeImage` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `EmployeeName`, `Address`, `EmailAddress`, `Phone`, `DOB`, `EmployeeImage`) VALUES
(1, 'Dipika Moon', 'Rahatani Pune', 'dipu.moon@gmail.com', '9890238587', '2000-05-24', 'black_wallpaper.jpg'),
(3, 'Vinika Moon', '', 'mvini@gmail.com', '9890238587', '2020-09-15', 'black-iron-man-wallpaper.jpg'),
(4, 'Rita', '', 'r@gmail.com', '9890238587', '1987-05-24', 'black-iron-man-wallpaper.jpg'),
(5, 'Pankaj', '', 'pankaj@gmail.com', '9890238587', '1987-05-24', 'black-iron-man-wallpaper.jpg'),
(6, 'Dipika Shahare', '', 'dipu.shahare@gmail.com', '9890238587', '1987-05-24', 'black-iron-man-wallpaper.jpg'),
(7, 'Rahul', '', 'rahul@gmail.com', '9890238587', '2020-09-15', 'black-iron-man-wallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
