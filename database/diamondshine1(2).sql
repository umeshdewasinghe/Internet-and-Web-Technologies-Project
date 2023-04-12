-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220512.d0c37da63d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamondshine1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`) VALUES
(1, 'sdsd', 'sd', 'A_gihaa@gmail.com', '$2y$10$DmuskFjEteasibUf2f3EFOhd0/SJC7ARbK6gqpSTTOOsgYuAWbhui', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `address`, `email`, `password`, `gender`) VALUES
(1, 'ashan', 'Kuruppu', 'ragama', 'test@gmail.com', 'test1', ''),
(2, 'suddepa', 'Kuruppu', 'battuwatta', 'test2@gmail.com', '2JbS8wcBswrRs9S', ''),
(3, 'name', 'name2', 'sdsd', 'test3@gmail.com', '123', ''),
(8, 'GIhan', 'sudeepa', 'ragama', 'gihan@gmail.com', '$2y$10$N.tLvF4//QtBd2BcCOh5iel', ''),
(9, 'test', 'test', 'test', 'test5@gmail.com', '$2y$10$9.PghtmWe8GK22mhcA7d7ueujhw7DZqJKUsl6w8oAXUQnf97zIkJy', ''),
(10, 'c_GIHAN ', 'SUDEEPA', 'RAGANA', 'C_gihaa@gmail.com', '$2y$10$h.of45FzRHIEVxDEK4orAuTwxQGiPdszlUhpAF9Bk2zCUvTIkyXGW', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person`
--

CREATE TABLE `delivery_person` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `licence` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_person`
--

INSERT INTO `delivery_person` (`id`, `first_name`, `last_name`, `address`, `licence`, `email`, `password`, `gender`) VALUES
(1, 'del', 'gihna', 'sdsd', '123456', 'del2@gmail.com', '123', ''),
(2, 'D_Gihan', 'sudeepa', 'ragama', '12345', 'D_gihaa@gmail.com', '$2y$10$BZdhxWAt0RD6lWYfhYBKQOxLM0MwdEQFY2Esrv5i.7xviYlZxO/wq', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `des`) VALUES
(1, 'gihan', 'tesss\r\nssssss ssss\r\nsss sssssssss\r\nssss s1111\r\n1111');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `location` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `postalcode` int(11) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `DeliverFees` float NOT NULL,
  `Cus_id` int(11) NOT NULL,
  `del_id` int(11) NOT NULL,
  `confirm_status` varchar(10) DEFAULT NULL,
  `delivery_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `location`, `price`, `postalcode`, `Company`, `DeliverFees`, `Cus_id`, `del_id`, `confirm_status`, `delivery_status`) VALUES
(2, 'ragama', 1000, 0, '', 0, 10, 2, 'yes', 'done'),
(3, 'gampha', 2020, 0, '', 0, 10, 2, 'yes', 'done'),
(5, 'sd', 550, 122232, 'fast', 350, 10, 2, 'yes', 'no'),
(6, 'sadsa', 500, 12123, 'fast', 500, 2, 2, 'yes', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cus_id` (`Cus_id`),
  ADD KEY `del_id` (`del_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_person`
--
ALTER TABLE `delivery_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Cus_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



