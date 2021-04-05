-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 03:49 PM
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
-- Database: `scheduledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myscheduledb`
--

CREATE TABLE `myscheduledb` (
  `Subject_ID` int(10) UNSIGNED NOT NULL,
  `subjectn` char(20) NOT NULL,
  `SubjectDay` varchar(10) NOT NULL,
  `TimeStart` int(11) NOT NULL,
  `TimeEnd` int(11) NOT NULL,
  `ZoomMeetingURL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myscheduledb`
--

INSERT INTO `myscheduledb` (`Subject_ID`, `subjectn`, `SubjectDay`, `TimeStart`, `TimeEnd`, `ZoomMeetingURL`) VALUES
(1, 'Math', 'Monday', 1, 2, 'zoom.com/abscbn'),
(2, 'logic', 'Saturday', 5, 6, 'gmeet.com/testinglangto'),
(3, 'CEDD', 'thursday', 10, 11, 'gmeet.com/testingulit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `emailadd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `emailadd`) VALUES
(7, 'Irene', 'irene23', 'ai@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myscheduledb`
--
ALTER TABLE `myscheduledb`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myscheduledb`
--
ALTER TABLE `myscheduledb`
  MODIFY `Subject_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
