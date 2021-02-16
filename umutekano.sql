-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 08:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umutekano`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rayfi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `c_id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `idno` int(16) NOT NULL,
  `phone` int(10) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `t_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`c_id`, `names`, `username`, `password`, `idno`, `phone`, `sector`, `cell`, `village`, `t_date`) VALUES
(1, 'Mimi Ange', 'Mimi', '202cb962ac59075b964b07152d234b', 2147483647, 897655643, 'Kinonko', 'Bugufi', 'Mwufe', '2021-01-22 04:33:25'),
(2, 'Kizito regis', 'Regis', '202cb962ac59075b964b07152d234b', 2147483647, 787625622, 'Kirambo', 'Mweru', 'Burera', '2021-01-22 05:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `l_id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `idno` int(16) NOT NULL,
  `phone` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `t_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`l_id`, `names`, `idno`, `phone`, `title`, `email`, `username`, `password`, `status`, `t_date`) VALUES
(1, 'Rayfi', 2147483647, 787996250, 'Mudugudu', 'ipfundotvonline@gmail.com', 'rayfi', '202cb962ac59075b964b07152d234b70', '0', '2021-01-21 08:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `mtn`
--

CREATE TABLE `mtn` (
  `id` int(11) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `c_PIN` varchar(5) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtn`
--

INSERT INTO `mtn` (`id`, `c_id`, `c_PIN`, `amount`) VALUES
(1, '1', '11111', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `idno` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `year_pay` int(10) NOT NULL,
  `month_n` int(30) NOT NULL,
  `mtn_id` varchar(11) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `mtn`
--
ALTER TABLE `mtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtn`
--
ALTER TABLE `mtn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `idno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
