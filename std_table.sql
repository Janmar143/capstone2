-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2019 at 02:14 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_table`
--

CREATE TABLE `std_table` (
  `std_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `prelim` varchar(255) NOT NULL,
  `midterm` varchar(255) NOT NULL,
  `finals` varchar(255) NOT NULL,
  `average` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_table`
--

INSERT INTO `std_table` (`std_id`, `fname`, `lname`, `address`, `age`, `gender`, `birthday`, `prelim`, `midterm`, `finals`, `average`) VALUES
(1, 'janmar', 'adolfo', 'pasig', '12', 'male', '2019-02-20', '88', '88', '88', '87'),
(2, 'aila', 'pacia', 'quezon', '12', 'female', '2019-02-19', '85', '92', '93', '90'),
(4, 'jonas', 'Samson', 'makati', '69', 'female', '1993-11-05', '88', '88', '88', '88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_table`
--
ALTER TABLE `std_table`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_table`
--
ALTER TABLE `std_table`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
