-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 08:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aapkasahara`
--

-- --------------------------------------------------------

--
-- Table structure for table `snrcitizen`
--

CREATE TABLE `snrcitizen` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snrcitizen`
--

INSERT INTO `snrcitizen` (`username`, `email`, `password`, `mobile`, `address`, `aadhar`, `dob`) VALUES
('Chirag', 'chirag@gmail.com', 'abcde', 0, '', 0, '0000-00-00'),
('vbds', 'vvsv', 'vd', 1665, 'vvs', 6161, '2021-03-31'),
('Akash', 'ak@gmail.com', 'abcd', 8888888888, 'borivili', 111111111111, '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `dob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`username`, `email`, `password`, `mobile`, `address`, `aadhar`, `dob`) VALUES
('abiveise', 'dsv', 'vfed', 12345, 'vsdv', 166, 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `snrcitizen`
--
ALTER TABLE `snrcitizen`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`aadhar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
