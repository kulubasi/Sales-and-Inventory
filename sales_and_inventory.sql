-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 10:54 AM
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
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `descri` varchar(250) NOT NULL,
  `amt` int(50) NOT NULL,
  `ct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `item`, `descri`, `amt`, `ct`) VALUES
(6, 'computer', 'repaired 3computers', 70000, '02/08/2022 05:57:18pm'),
(7, 'Fuel', 'Paid for boda fuel', 10000, '03/08/2022 09:56:50am'),
(8, 'Fuel', 'Generator fuel ', 43000, '03/08/2022 10:48:29am'),
(9, 'Epson Printer Ink', '2 jets', 5000, '03/08/2022 11:50:23am'),
(10, 'Socket repair', 'Charging socket repair + new socket', 13000, '03.08.2022 11:53:31am');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(4) NOT NULL,
  `items` varchar(25) NOT NULL,
  `Descript` varchar(255) DEFAULT NULL,
  `Amount` int(10) NOT NULL,
  `ct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `items`, `Descript`, `Amount`, `ct`) VALUES
(7, 'Pens', 'sold  50 pens', 5000, '02/08/2022 05:53:31pm'),
(9, 'Envelopes', 'Sold 2 envelopes', 1000, '03/08/2022 09:55:50am'),
(10, 'Camera Film', 'new films', 5600, '03.08.2022 11:44:59am'),
(11, 'Epson Printer Ink', '2 bottles', 45000, '03.08.2022 11:46:01am'),
(12, 'Box Files', 'new files black', 45000, '03/08/2022 11:47:32am'),
(13, 'paper', 'new paper', 50, '03.08.2022 13:25:56pm'),
(14, 'Envelopes', '3', 1500, '03.08.2022 13:26:16pm'),
(15, 'Books', 'new text books', 30000, '03.08.2022 13:26:37pm'),
(16, 'Keyboard ', '2', 35000, '03.08.2022 13:27:18pm'),
(17, 'Pens', '1 dozen', 35000, '03.08.2022 13:27:34pm'),
(18, 'Camera Film', '2 rolls', 23000, '03.08.2022 13:28:18pm');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descri` varchar(50) NOT NULL,
  `qtty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `descri`, `qtty`) VALUES
(1, 'paper', 'A4', 3),
(2, 'Pens', 'Bic', 45),
(3, 'Camera Film', 'Roller Film', 2),
(4, 'Epson Printer Ink', '5 bottles of blue green and yellow', 5),
(5, 'Envelopes', 'Small', 50),
(7, 'Box Files', 'Black green and red files', 3),
(8, 'Books', 'A3', 50),
(9, 'Keyboard ', 'Keyboard for dell laptop', 5);

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
(17, 'davie@gmail.com', 'david', 'kagimu', 'davie', '07654637211', 'davie22', 'Stock manager'),
(19, 'manager@ictspecialistsug.com', 'manager', 'ict', 'manager', '0786564345', 'manager22', 'Manager'),
(22, 'mark@gmail.com', 'mark', 'aine', 'mark', '0786432312', 'mark22', 'Stock Manager'),
(23, 'ainembabazipraise48@gmail.com', 'praise', 'aine', 'aine', '0786452314', 'aine22', 'Desk officer'),
(24, 'mawarichard45@gmail.com', 'Mawa', 'Richard', 'mawarich', '+256787034826', 'mawa22', 'Admin'),
(28, 'didas@gmail.com', 'didas', 'John', 'didas22', '076543324234', 'didas22', 'Stock Manager'),
(29, 'didas@gmail.com', 'john', 'didas', 'didas22', '0765453632', 'didas22', 'Desk officer'),
(30, 'didas@gmail.com', 'john', 'didas', 'didas22', '0765453632', 'ffrrrrrr', 'Desk officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
