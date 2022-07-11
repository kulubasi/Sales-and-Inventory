-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_and_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `username`, `tel`, `pswd`, `usertype`) VALUES
(3, 'judei@gmail.com', 'laban', 'kulubasi', 'maximum', '0786508231', 'lloppl', 'Employer'),
(4, 'em@gmail.com', 'emperor', 'haile', 'selasi', '0786199019', 'saile222', 'Desk officer'),
(5, 'mayor@2022', 'mayur', 'ict', 'mayurict', '0789786789', '12345', 'Manager'),
(6, 'finish@gmail.com', 'finisher', 'nsubuga', 'finisher22', '0786545654', 'finisher22', 'Store keeper'),
(7, 'ooooo@gmail.com', 'oooo', 'oooo', 'oooo', '000000000000000', 'oooooooooooo', 'Admin'),
(8, '000000000@gmail.com', 'jjj', 'jjjjjjjjjj', 'jjjjjjj', '0789786000', 'jjjjjjj', 'Admin'),
(9, 'judei@gmail.com', 'jude', 'max', 'finisher22', '0786549099', 'lolo00', 'Store keeper'),
(10, 'judei@gmail.com', 'jude', 'kulubasi', 'maximum', '0786545654', 'lll', 'Desk officer'),
(11, 'judei@gmail.com', 'emperor', 'max', 'emperor', '999999999999999', '9999999999999', 'Manager'),
(12, 'zoo@gmail.com', 'zoena', 'zuli', 'zuta', '098998987899', 'zulita', 'Store keeper'),
(13, 'labankulubasi@gmail.com', 'jude', 'max', 'maximum', '0000000000000', '000000000000', 'Admin'),
(14, 'zulu@gmail.com', 'zulu', 'tams', 'zulia', '0765654345', 'zulio', 'Manager'),
(15, 'zulu@gmail.com', 'zulu', 'tams', 'zulia', '0765654345', 'ssss', 'Manager'),
(16, 'labankulubasi@gmail.com', 'laban', 'kulubasi', 'kulubasi', '0786508231', 'kulubasi22', 'Store keeper'),
(17, 'davie@gmail.com', 'david', 'kagimu', 'davie', '07654637211', 'davie22', 'Store keeper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
