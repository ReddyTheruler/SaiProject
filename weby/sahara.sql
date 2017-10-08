-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 04:15 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahara`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(100) NOT NULL,
  `accnum` varchar(30) NOT NULL,
  `accname` varchar(50) NOT NULL,
  `schten` varchar(30) NOT NULL,
  `accopn` date NOT NULL,
  `valmon` varchar(30) NOT NULL,
  `accmat` date NOT NULL,
  `memacnum` int(11) NOT NULL,
  `deno` varchar(30) NOT NULL,
  `accvill` varchar(100) NOT NULL,
  `agnam` varchar(60) NOT NULL,
  `agcode` varchar(60) NOT NULL,
  `accell` varchar(14) NOT NULL,
  `adhar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `accnum`, `accname`, `schten`, `accopn`, `valmon`, `accmat`, `memacnum`, `deno`, `accvill`, `agnam`, `agcode`, `accell`, `adhar`) VALUES
(42, '2308123', 'Kumar', '178', '2017-06-28', '1', '2017-07-29', 1232158, '354', 'gf', 'df', 'sdf', '8886231484', '4324234234234'),
(43, '2308123098132', 'Kumar', '178', '2017-06-25', '1', '2017-07-26', 1232158, '342', 'gd', 'gf', 'dfg', '8886231484', '4324234234234'),
(44, '2308123098132', 'Kumar', '12M', '2017-07-19', '1', '2017-08-19', 1232158, '342', 'MEdhcnal', 'Ravi', '582963', '8886231484', '4324234234234'),
(45, '2308123098132', 'dsa', 'asd', '0000-00-00', '1', '2017-09-18', 0, 'dfg', 'gdf', 'gd', 'gd', '234324234', 'gd'),
(46, '2308123098132', 'dsa', 'asd', '0000-00-00', '4', '0000-00-00', 0, 'dfg', 'gdf', 'gd', 'gd', '234324234', 'gd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('india', 'india');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
