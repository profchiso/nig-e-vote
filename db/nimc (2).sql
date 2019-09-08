-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 07:17 AM
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
(1, 'okorie chinedu sunday', 'chinedu', 'chinedu1', '12');

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
  `vote_starts` varchar(50) NOT NULL DEFAULT '8',
  `vote_ends` varchar(50) NOT NULL DEFAULT '14',
  `otp` varchar(8) NOT NULL,
  `voting_state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `last_name`, `first_name`, `othernames`, `town_of_residence`, `country_of_residence`, `state_of_residence`, `lga_of_residence`, `address_of_residence`, `religion`, `country_of_origin`, `state_of_origin`, `lga_of_origin`, `gender`, `residence_status`, `NIN`, `marital_status`, `phone_number`, `email`, `VIN`, `password`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `QRcode`, `date_of_validation`, `voted`, `vote_starts`, `vote_ends`, `otp`, `voting_state`) VALUES
(5, 'okorie', 'chinedu', 'sunday', 'Ikorodu', 'Nigeria', 'lagos', 'ikorodu', '121 Agric lagos', 'Male', 'Nigeria', 'Ebonyi', 'Ohaozara', 'Male', 'Male', '36009397', 'Male', '08036009397', 'okoriechinedusunday@gmail.com', '36009397', 'chinedu', '1994', '10', '10', 'okoriechinedusunady@gmail.com.png', '18/06/19', 0, '16:00', '10:00', '', 'imo'),
(6, 'Edebor', 'grace', 'osas', 'Benin', 'Nigeria', 'Edo', 'Egor', '200 Uselu Lagos rd', 'Female', 'Nigeria', 'Edo', 'Egor', 'Male', 'Male', '222333444', 'Male', '293323390', 'chinedusundayokorie@gmail.com', '12345', '12345', '2008', '10', '10', 'chinedusundayokorie@gmail.com.png', '18/06/19', 1, '16:00', '10:00', '', 'imo'),
(7, 'Ben', 'Akono', 'Abey', 'Uyo', 'Nigeria', 'Akwaibom', 'Uyo', 'Abak road', 'Male', 'Nigeria', 'Cross-river', 'ogoja', 'Male', '', '2020202', 'Female', '08036009397', 'chisonwaguy@yahoo.com', '12345', 'chiso', '1996', '10', '10', 'chisonwaguy@yahoo.com.png', '18/06/19', 1, '16:00', '10:00', '', 'imo'),
(8, 'oko', 'oko', 'g', 'g', 'g', 'g', 'e', 'e', 'Female', 'e', 'e', 'e', 'Male', 'Male', '444', 'Female', '08036009397', 'oko@gmail.com', '1234', '', '1990', '10', '24', 'oko@gmail.com.png', '', 0, '16:00', '10:00', '59097', 'imo'),
(9, 'okorie', 'chinedu', 'sunady', 'lagos', 'nigeria', 'lagos', 'ikorodu', 'agric', 'Male', 'nigeria', 'ebonyi', 'ohaozara', 'Male', 'Male', '21234', 'Male', '08036009397', 'chisonwaguy@gmail.com', '', '', '1994', '10', '10', 'chisonwaguy@gmail.com.png', '', 0, '16:00', '10:00', '25174', 'imo'),
(10, 'ben', 'ben', 'ben', 'oooo', 'jsjsj', 'sjjjsjs', 'jsjsjsj', 'sooos', 'Female', 'jsjjsjs', 'hshsh', 'hhshsh', 'Male', 'Female', '8484884', 'Female', '9499494', 'oko@gmail.com', '12345', '', '2010', '10', '10', 'oko@gmail.com.png', '', 0, '16:00', '10:00', '59685', 'imo'),
(11, 'chinedu', 'chinedu', '', 'lagos', 'nigeria', 'lagos', 'ikorodu', 'mainlan', 'Male', 'nigeria', 'ebonyi', 'ohaozra', 'Male', 'Female', '1233144', 'Female', '99000', 'oo@g.co', '90H5B05042408703429', '12345', '1900', '10', '10', 'oo@g.co.png', '', 0, '16:00', '10:00', '79916', 'imo');

-- --------------------------------------------------------

--
-- Table structure for table `pvc`
--

CREATE TABLE `pvc` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Date_of_birth` varchar(50) NOT NULL,
  `Phone_number` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `LGA` varchar(50) NOT NULL,
  `VIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pvc`
--

INSERT INTO `pvc` (`id`, `Name`, `Gender`, `Date_of_birth`, `Phone_number`, `State`, `LGA`, `VIN`) VALUES
(1, 'Chukwudi Odii', 'Male', '25/09/1984', '08055085567', 'Edo', 'Etsako east', '90F5B05042408703424'),
(2, 'Kingsley Oboh', 'Male', '25/09/1986', '08057635491', 'Lagos', 'Ojo', '90A5B05042408703434'),
(3, 'Esther chitah', 'Female', '11/06/1984', '07055098743', 'Ebonyi ', 'Ohaozara', '90E5B05042408703426'),
(4, 'Ngozi Godswill', 'Female', '11/09/1975', '07031588360', 'Ebonyi ', 'Afikpo', '90G5B05042408703425'),
(5, 'Blessing Igboke', 'Female', '21/03/1989', '08067127781', 'Ebonyi ', 'Afikpo', '90H5B05042408703429');

-- --------------------------------------------------------

--
-- Table structure for table `senate`
--

CREATE TABLE `senate` (
  `senate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(233) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `othernames` varchar(100) NOT NULL,
  `town_of_residence` varchar(100) NOT NULL,
  `country_of_residence` varchar(100) NOT NULL,
  `state_of_residence` varchar(100) NOT NULL,
  `lga_of_residence` varchar(100) NOT NULL,
  `address_of_residence` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `country_of_origin` varchar(100) NOT NULL,
  `state_of_origin` varchar(100) NOT NULL,
  `lga_of_origin` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `residence_status` varchar(50) NOT NULL,
  `NIN` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `year_of_birth` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `month_of_birth` varchar(100) NOT NULL,
  `day_of_birth` varchar(100) NOT NULL,
  `QRcode` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `VIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `last_name`, `first_name`, `othernames`, `town_of_residence`, `country_of_residence`, `state_of_residence`, `lga_of_residence`, `address_of_residence`, `religion`, `country_of_origin`, `state_of_origin`, `lga_of_origin`, `gender`, `residence_status`, `NIN`, `marital_status`, `phone_number`, `year_of_birth`, `email`, `month_of_birth`, `day_of_birth`, `QRcode`, `otp`, `VIN`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'chisonwaguy@yahoo.com ', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'chisonwaguy@yahoo.com ', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'chisonwaguy@yahoo.com ', '', '', '', '', ''),
(6, 'okorie', 'chinedu', 'sunady', 'lagos', 'nigeria', 'lagos', 'ikorodu', 'agric', 'Male', 'nigeria', 'ebonyi', 'ohaozara', 'Male', 'Male', '21234', 'Male', '08036009397', '1994', 'chisonwaguy@gmail.com', '10', '10', 'chisonwaguy@gmail.com.png', '25174', ''),
(7, 'chinedu', 'chinedu', '', 'lagos', 'nigeria', 'lagos', 'ikorodu', 'mainlan', 'Male', 'nigeria', 'ebonyi', 'ohaozra', 'Male', 'Female', '1233144', 'Female', '99000', '1900', 'oo@g.co', '10', '10', 'oo@g.co.png', '79916', '90H5B05042408703429');

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
-- Indexes for table `pvc`
--
ALTER TABLE `pvc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pvc`
--
ALTER TABLE `pvc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(245) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
