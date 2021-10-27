-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 11:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbc_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `lbc`
--

CREATE TABLE `lbc` (
  `lbc_id` int(11) NOT NULL,
  `valid` varchar(55) NOT NULL,
  `expdate` date NOT NULL,
  `surname` varchar(55) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `contactnumbers` bigint(55) NOT NULL,
  `presentaddress` varchar(150) NOT NULL,
  `dateofbirth` date NOT NULL,
  `sssgsistin` varchar(55) NOT NULL,
  `encash` date NOT NULL,
  `tracking` varchar(55) NOT NULL,
  `expamount` bigint(11) NOT NULL,
  `exactamount` bigint(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lbc`
--

INSERT INTO `lbc` (`lbc_id`, `valid`, `expdate`, `surname`, `firstname`, `middlename`, `contactnumbers`, `presentaddress`, `dateofbirth`, `sssgsistin`, `encash`, `tracking`, `expamount`, `exactamount`) VALUES
(71, '2345678', '0067-05-31', 'dfghj', 'dfghj', 'dfghjk', 3456789, 'dfghjk', '0067-05-31', '345678', '6654-05-20', '345678', 3456, 3456),
(73, 'qwerty23456', '2021-06-26', 'qwertyu', 'wertyu', 'wertyu', 345678, 'wertyu', '9198-09-08', '3456789', '0678-05-31', '3456789', 45678, 345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lbc`
--
ALTER TABLE `lbc`
  ADD PRIMARY KEY (`lbc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lbc`
--
ALTER TABLE `lbc`
  MODIFY `lbc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
