-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 04:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `phone` int(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`fname`, `lname`, `email`, `addr`, `phone`, `city`, `zip`, `amount`) VALUES
('Akshitha', 'Sriyanjith', 'akshithasriyanjith2000@gmail.com', 'aaaa', 713740291, '1111', '1111', '111'),
('Akshitha', 'Sriyanjith', 'akshithasriyanjith2000@gmail.com', 'aaaa', 713740291, '1111', '1111', '1111'),
('', '', '', '', 0, '', '', ''),
('', '', '', '', 0, '', '', ''),
('', '', '', '', 0, '', '', ''),
('', '', '', '', 0, '', '', ''),
('akila', 'tharinda', 'sriakshi024@gmail.com', 'walsmulla', 123546, 'walasmulla', '0456', '84'),
('abimon', 'lakshan', 'asd@gamil.com', 'colombo', 1145678912, 'colombo', '789', '1100'),
('Ravindi ', 'jayalath', 'ravindi1234@gmail.com', 'horana', 718567894, 'horana', '1789', '1500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
