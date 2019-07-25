-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 04:03 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nimc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `Admin_name` varchar(100) NOT NULL,
  `Admin_username` varchar(100) NOT NULL,
  `Admin_pwd` varchar(100) NOT NULL,
  `Admin_rank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_name`, `Admin_username`, `Admin_pwd`, `Admin_rank`) VALUES
(1, 'okorie chinedu sunday', 'chinedu', 'chinedu', '12'),
(2, 'Admin', 'admin', 'admin', '10');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(254) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `state_of_origin` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `party_logo` varchar(100) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `fullname`, `gender`, `lga`, `state_of_origin`, `party`, `post`, `passport`, `party_logo`, `vote`) VALUES
(8, 'Okorie chinedu sunday', 'Male', 'Ohaozara', 'Ebonyi', 'PDP', 'Governors', 'PASSPORT.jpg', 'SIGNATURE.jpg', 0),
(9, 'OKO JUDE', 'Female', 'Onitsha', 'Anambra', 'APGA', 'President', 'BeautyPlus_20170409152428_fast.jpg', 'BeautyPlus_20170409152428_fast.jpg', 0),
(10, 'Atiku', 'Male', 'Adamawa north', 'Adamawa', 'PDP', 'President', 'BeautyPlus_20170409175506_fast.jpg', 'C360_2017-03-10-10-19-13_org.jpg', 0),
(11, 'okorie', 'Male', 'Isu', 'Ebonyi', 'APC', 'Governors', 'PASSPORT.jpg', 'PASSPORT.jpg', 0),
(12, 'man', 'Male', 'Abakaliki', 'Ebonyi', 'APC', 'Senate', 'PASSPORT.jpg', 'PASSPORT.jpg', 0),
(13, 'OKO', 'Male', 'Ikwo', 'Ebonyi', 'LP', 'Senate', 'SIGNATURE.jpg', 'SIGNATURE.jpg', 0),
(14, 'maria', 'Male', 'ohaozara', 'Ebonyi', 'PDP', 'HouseOfRep', 'SIGNATURE.jpg', 'SIGNATURE.jpg', 0),
(15, 'Ude', 'Male', 'Edda', 'Ebonyi', 'APC', 'HouseOfRep', 'ADM2o.jpg', 'ADM2o.jpg', 0),
(16, 'yea', 'Male', 'ohaukwu', 'Ebonyi', 'LP', 'HouseOfAss', 'PASSPORT.jpg', 'PASSPORT.jpg', 0),
(17, 'ham', 'Female', 'ohaukwu', 'Ebonyi', 'PDP', 'HouseOfAss', 'BeautyPlus_20170409152428_fast.jpg', 'BeautyPlus_20170409152428_fast.jpg', 0),
(18, 'VIN', 'Female', 'Egor', 'Edo', 'Accord', 'President', 'SIGNATURE.jpg', 'PASSPORT.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` int(254) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `town_of_residence` varchar(100) NOT NULL,
  `country_of_residence` varchar(50) NOT NULL,
  `state_of_residence` varchar(50) NOT NULL,
  `lga_of_residence` varchar(50) NOT NULL,
  `address_of_residence` varchar(100) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `country_of_origin` varchar(50) NOT NULL,
  `state_of_origin` varchar(50) NOT NULL,
  `lga_of_origin` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `residence_status` varchar(50) NOT NULL,
  `NIN` varchar(100) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `VIN` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `year_of_birth` varchar(20) NOT NULL,
  `month_of_birth` varchar(20) NOT NULL,
  `day_of_birth` varchar(20) NOT NULL,
  `QRcode` varchar(100) NOT NULL,
  `date_of_validation` varchar(50) NOT NULL,
  `voted` int(1) NOT NULL DEFAULT '0',
  `vote_starts` int(50) NOT NULL DEFAULT '8',
  `vote_ends` int(50) NOT NULL DEFAULT '14',
  `otp` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `last_name`, `first_name`, `othernames`, `town_of_residence`, `country_of_residence`, `state_of_residence`, `lga_of_residence`, `address_of_residence`, `religion`, `country_of_origin`, `state_of_origin`, `lga_of_origin`, `gender`, `residence_status`, `NIN`, `marital_status`, `phone_number`, `email`, `VIN`, `password`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `QRcode`, `date_of_validation`, `voted`, `vote_starts`, `vote_ends`, `otp`) VALUES
(5, 'okorie', 'chinedu', 'sunday', 'Ikorodu', 'Nigeria', 'lagos', 'ikorodu', '121 Agric lagos', 'Male', 'Nigeria', 'Ebonyi', 'Ohaozara', 'Male', 'Male', '36009397', 'Male', '08036009397', 'okoriechinedusunday@gmail.com', '36009397', 'chinedu', '1994', '10', '10', 'okoriechinedusunady@gmail.com.png', '18/06/19', 0, 2, 4, ''),
(6, 'Edebor', 'grace', 'osas', 'Benin', 'Nigeria', 'Edo', 'Egor', '200 Uselu Lagos rd', 'Female', 'Nigeria', 'Edo', 'Egor', 'Male', 'Male', '222333444', 'Male', '293323390', 'chinedusundayokorie@gmail.com', '12345', '12345', '2008', '10', '10', 'chinedusundayokorie@gmail.com.png', '18/06/19', 1, 2, 4, ''),
(7, 'Ben', 'Akono', 'Abey', 'Uyo', 'Nigeria', 'Akwaibom', 'Uyo', 'Abak road', 'Male', 'Nigeria', 'Cross-river', 'ogoja', 'Male', '', '2020202', 'Female', '08036009397', 'chisonwaguy@yahoo.com', '12345', 'chiso', '1996', '10', '10', 'chisonwaguy@yahoo.com.png', '18/06/19', 1, 2, 4, ''),
(8, 'oko', 'oko', 'g', 'g', 'g', 'g', 'e', 'e', 'Female', 'e', 'e', 'e', 'Male', 'Male', '444', 'Female', '5', 'oko@gmail.com', '1234', '', '10', '10', '24', 'oko@gmail.com.png', '', 1, 2, 4, '59097');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(245) NOT NULL,
  `president` varchar(100) NOT NULL,
  `senate` varchar(100) NOT NULL,
  `HouseOfRep` varchar(100) NOT NULL,
  `governors` varchar(100) NOT NULL,
  `HouseOfAss` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `president`, `senate`, `HouseOfRep`, `governors`, `HouseOfAss`) VALUES
(3, 'OKO JUDE', 'OKO', 'maria', '', 'ham'),
(4, 'VIN', 'man', 'Ude', '', 'yea'),
(5, 'OKO JUDE', 'man', 'maria', '', 'yea'),
(6, 'OKO JUDE', 'man', 'maria', 'Okorie chinedu sunda', 'yea'),
(7, 'OKO JUDE', 'man', 'maria', 'Okorie chinedu sunda', 'yea'),
(8, 'OKO JUDE', 'man', '', 'okorie', 'ham'),
(9, 'OKO JUDE', 'man', 'maria', 'Okorie chinedu sunda', 'yea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
