-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 02:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financepeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `json`
--

CREATE TABLE `json` (
  `empid` varchar(20) NOT NULL,
  `empname` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(100) NOT NULL,
  `streetaddress` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `postalcode` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `json`
--

INSERT INTO `json` (`empid`, `empname`, `gender`, `age`, `streetaddress`, `city`, `state`, `postalcode`, `designation`, `department`) VALUES
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance'),
('SJ011MS', 'Smith Jones', 'Male', 28, '7 24th Street', 'New York', 'NY', '10038', 'Deputy General', 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'suber', 'suber12345', '2021-11-26 17:19:03'),
(2, 'ridhima', '$2y$10$sjiZpgPu5WtaIkA895emLufty09dhW6CGpBY35/TG0xLg/eDJ3WbW', '2021-11-26 17:22:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
