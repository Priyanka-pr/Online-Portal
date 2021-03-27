-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 05:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycontacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycontactlist`
--

CREATE TABLE `mycontactlist` (
  `Sno` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `yourself` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycontactlist`
--

INSERT INTO `mycontactlist` (`Sno`, `fname`, `lname`, `contact`, `email`, `dob`, `addres`, `gender`, `yourself`) VALUES
(4, 'Jiya', 'Verma', '8630037337', 'jiya@gmail.com', '2021-03-18', 'Dehradun', 'male', 'hgyfyghgghghgh'),
(5, 'Avik', 'Verma', '8356124544', 'avik0909@gmail.com', '2021-03-02', 'Dehradun', 'male', 'Hello'),
(6, 'Avik', 'Verma', '8356124544', 'avik0909@gmail.com', '2021-03-02', 'Dehradun', 'male', 'Hello'),
(7, 'Farhan', 'Akhtar', '8356124555', 'farhan56@gmail.com', '2021-02-28', 'Dehradun', 'male', 'Hello'),
(8, 'Karan', 'Rama', '', '', '', '', '', ''),
(9, 'Farhan', 'Rana', '9565612652', 'karan@gmail.com', '2021-03-12', 'Dehradun', 'male', 'Hello'),
(10, 'Farhan', 'Rana', '9565612652', 'karan@gmail.com', '2021-03-12', 'Dehradun', 'male', 'Hello'),
(11, 'Karan', 'Rana', '9565612652', 'karan@gmail.com', '2021-03-12', 'Dehradun', 'male', 'Hello'),
(12, 'rohan', 'rajput', '8356124544', 'farhan56@gmail.com', '2021-03-12', 'Dehradun', 'male', 'hgyfyghgghghgh'),
(13, 'rahul', 'farswan', '9565612652', 'farhan56@gmail.com', '2021-03-19', 'Dehradun', 'male', 'hgyfyghgghghgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycontactlist`
--
ALTER TABLE `mycontactlist`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycontactlist`
--
ALTER TABLE `mycontactlist`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
