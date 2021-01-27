-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2021 at 07:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `some`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `mail`, `password`) VALUES
(1, 'admin', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `co_id` int(30) NOT NULL,
  `course` varchar(40) NOT NULL,
  `fees` int(10) NOT NULL,
  `batch` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`co_id`, `course`, `fees`, `batch`, `name`, `c_name`, `mail`) VALUES
(4, 'jazz', 12312, 'Full Day', 'derek', 'asdfasf', 'vdev@g.com'),
(5, 'Jazz', 12000, 'Morning Batch', 'Akshay', 'Chopin', 'singh@g.com'),
(6, 'Classical', 20000, 'Afternoon Batch', 'deb', 'Chopin', 'kamala@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `par_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `r_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`par_id`, `name`, `gender`, `age`, `city`, `contact`, `r_d`) VALUES
(2, 'deb', 'female', 15, 'china', 123123123, '2121-01-16'),
(3, 'something', 'female', 10, 'Bangalore', 4112123123, '2121-01-15'),
(4, 'derek', 'male', 33, 'DC', 123123132, '2121-01-15'),
(5, 'Akshay', 'male', 13, 'delhi', 1231231, '2121-01-15'),
(6, 'Sita', 'female', 23, 'Kolkata', 9595955934, '2121-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `c_id` int(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `c_role` varchar(30) NOT NULL,
  `about` varchar(30) NOT NULL,
  `c_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`c_id`, `c_name`, `gender`, `age`, `contact`, `c_role`, `about`, `c_d`) VALUES
(3, 'Chopin', 'male', 40, 34564563, 'Piano Teacher', '4 years', '2121-01-16'),
(4, 'Nina Simone', 'female', 36, 778343434, 'Singer', '10 Years', '2121-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `mail`, `name`, `password`) VALUES
(6, 'singh@g.com', 'singh', 'pass'),
(7, 'kevin@g.com', 'kevin', 'kevin'),
(8, 'kamala@g.com', 'kamala', 'kamala'),
(9, 'vdev13579@gmail.com', 'vasu', 'pass'),
(10, 'v@g.com', 'sirvi', 'v');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`par_id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `co_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `par_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
