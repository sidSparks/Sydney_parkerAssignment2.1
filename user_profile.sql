-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 04:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_profile`

CREATE DATABASE IF NOT EXISTS `user_profile` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user_profile`;
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `experience` varchar(15) DEFAULT NULL,
  `industry` varchar(150) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `AboutMe` varchar(150) DEFAULT NULL,
  `personalInfo` varchar(150) NOT NULL,
  `profesion` float DEFAULT NULL,
  `careerLevel` float DEFAULT NULL,
  `LevelofCommunication` float DEFAULT NULL,
  `OrganizationLevel` float DEFAULT NULL,
  `JobLevel` float DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `PhoneNumber` varchar(150) NOT NULL,
  `webSite` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `image`, `dob`, `gender`, `experience`, `industry`, `location`, `AboutMe`, `personalInfo`, `profesion`, `careerLevel`, `LevelofCommunication`, `OrganizationLevel`, `JobLevel`, `Address`, `PhoneNumber`, `webSite`) VALUES
(5, 'sydney', 'Parker', 'parkersydney@hotmail.com', 'sd', '0000-00-00', '', '', '', 'kingston', 'as', 'gdgd', NULL, NULL, NULL, 45, NULL, 'Gordon town road st Andrew', '8764248649', ''),
(6, 'sydney', 'Parker', 'parkersydney@hotmail.com', '', '0000-00-00', 'm', '', '', 'kingston', '', 'jhh', NULL, NULL, NULL, 98, NULL, 'Gordon town road st Andrew', '8764248649', ''),
(7, 'sher', 'Parker', 'parlker@gmail.com', 'uploads/profile/7003-nelson-mandela.jpg', '2016-12-16', '', '5-10 Years', '', '', '', 'ian', NULL, NULL, NULL, NULL, NULL, '7 Rose Wood Drive, Frazers Content', '8764248649', ''),
(8, 'sher', 'Parker', 'parlker@gmail.com', 'uploads/profile/60afrwo.jpg', '2016-12-16', '', '5-10 Years', '', '', '', 'ian', NULL, NULL, NULL, NULL, NULL, '7 Rose Wood Drive, Frazers Content', '8764248649', ''),
(9, 'sher', 'Parker', 'parlker@gmail.com', 'uploads/profile/52afrwo.jpg', '2016-12-16', '', '5-10 Years', '', '', '', 'ian', NULL, NULL, NULL, NULL, NULL, '7 Rose Wood Drive, Frazers Content', '8764248649', ''),
(10, 'sher', 'Parker', 'parlker@gmail.com', 'uploads/profile/21afrwo.jpg', '2016-12-16', '', '5-10 Years', '', '', '', 'ian', NULL, NULL, NULL, NULL, NULL, '7 Rose Wood Drive, Frazers Content', '8764248649', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
