-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 06:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pan` varchar(50) NOT NULL,
  `user_contact` bigint(10) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_atm` int(12) NOT NULL,
  `user_pin` varchar(12) NOT NULL,
  `user_status` int(12) NOT NULL,
  `user_amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pan`, `user_contact`, `user_address`, `user_atm`, `user_pin`, `user_status`, `user_amount`) VALUES
(1, 'Rida', 'ridaa@gmail.com', 'abc1234de', 9457940460, 'Saharanpur', 123456, '123', 1, 500000),
(7, 'ankit', 'ankit@gmail.com', 'ANK123IT', 9000000099, 'dehradun', 4567890, '674', 0, 200000),
(10, 'nilofer', 'nilofer@gmail.com', 'NILO1234FER', 7453897807, 'SAHARANPUR', 74579800, '7457', 0, 399800),
(12, 'Raam Sharma', 'raam@gmail.com', 'RA1234AM', 9600000000, 'SAHARANPUR', 98989898, 'RAAM', 0, 85180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`,`user_pan`,`user_contact`,`user_atm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
