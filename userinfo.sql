-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 04:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `User_ID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `TelNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User_ID`, `FullName`, `UserName`, `Password`, `Email`, `DOB`, `TelNo`) VALUES
(0, 'Olympia Mack', 'buruc', 'Pa$$w0rd!', 'jomym@mailinator.com', '2004-07-20', 'Dolore et proident '),
(0, 'Keane Collins', 'dovurufoh', 'Pa$$w0rd!', 'fuqyxe@mailinator.com', '1976-01-28', 'Expedita debitis exc'),
(0, 'Halla Crane', 'gusetyj', 'Pa$$w0rd!', 'fogujane@mailinator.com', '1988-12-20', 'Exercitationem cupid'),
(0, 'Naida Guzman', 'jikuwejij', 'Pa$$w0rd!', 'zogujixa@mailinator.com', '1997-04-15', 'Tempora quaerat in s'),
(0, 'Chanda Welch', 'jycugeve', 'Pa$$w0rd!', 'fipe@mailinator.com', '2007-06-09', 'A occaecat animi vo'),
(0, 'Quinlan Keith', 'kezace', 'Pa$$w0rd!', 'rynebynih@mailinator.com', '2009-03-15', 'Atque facilis perspi'),
(0, 'Vernon Patrick', 'mudymonu', 'Pa$$w0rd!', 'tekety@mailinator.com', '1998-07-12', 'Ab quibusdam sed ut '),
(0, 'Ali Fleming', 'wyxut', 'Pa$$w0rd!', 'temaq@mailinator.com', '2016-08-13', 'Velit eligendi ratio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
