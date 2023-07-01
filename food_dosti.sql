-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 08:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_dosti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'food@gmail.com', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `business_address` varchar(300) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `access` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`id`, `name`, `email`, `mob`, `business_address`, `uname`, `pass`, `access`) VALUES
(1, 'Aishwarya gg', 'm@gmail.com', 89888888, '                             Latur                           ', 'm@gmail.com', 'mayuri', 'Yes'),
(2, 'Sonali', 'ak1@gmail.com', 666666661, '                                                                                       Pune    1                                                                             ', 'ak1@gmail.com', 'ak1', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `doner_type`
--

CREATE TABLE `doner_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner_type`
--

INSERT INTO `doner_type` (`id`, `name`) VALUES
(3, 'Mess'),
(4, 'Hotel'),
(5, 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `name`) VALUES
(1, 'orphan age'),
(4, 'drink'),
(5, 'mayuri'),
(7, 'fr');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob` bigint(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `name`, `email`, `mob`, `address`, `uname`, `pass`, `type_id`) VALUES
(1, 'Mayuri Bhosale', 'm@gmail.com', 666666666, 'Pune', 'My', 'my', 4),
(4, 'Poja', 'siddhi28pooja@gmail.', 9898998888, 'ddddddddd', '', '', 2),
(5, 'Akshata', 'gg@gmail.com', 45545454, '                         Latur                    ', 'ak1', 'ak1', 3),
(6, 'Sakshi Kk', 'sk@gmail.com', 6676767677, '                         Mumbai                   ', 'sakshi1', 'sakshi1', 3),
(7, 'Ash', 'ash@gmail.com', 676767, 'Nagpur', 'ash', 'ash', 4);

-- --------------------------------------------------------

--
-- Table structure for table `receiver_type`
--

CREATE TABLE `receiver_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver_type`
--

INSERT INTO `receiver_type` (`id`, `name`) VALUES
(2, 'Anath Ashram'),
(3, 'Mess'),
(4, 'Vrudh Ashram'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `sender_id` int(50) NOT NULL,
  `no_of_peoples` int(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `doner` int(11) NOT NULL,
  `req_done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `sender_id`, `no_of_peoples`, `date`, `status`, `doner`, `req_done`) VALUES
(1, 5, 100, '2021-03-30', 'accepted', 2, 0),
(2, 1, 800, '2021-03-30', 'accepted', 1, 0),
(4, 1, 12, '2021-05-23', 'accepted', 2, 0),
(6, 1, 50, '2021-05-25', 'accepted', 2, 1),
(7, 1, 100, '2021-05-25', 'accepted', 2, 0),
(8, 6, 200, '2021-05-26', 'accepted', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(199) NOT NULL,
  `mob` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mob`) VALUES
(3, 'vaishu', 'vaishu@gmail.com', 5567890099),
(5, 'diksha', 'diksha@gmail.com', 677890),
(7, 'Vaishnavi', 'v@gmail.com', 6666),
(8, 'sakshi', 'rr@gmail.com', 7894561230),
(10, 'pragati ', 'pragii@gmail.com', 1234567890),
(11, 'simran ', 'sim@gmail.com', 123698745);

-- --------------------------------------------------------

--
-- Table structure for table `stu_record`
--

CREATE TABLE `stu_record` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL
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
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner_type`
--
ALTER TABLE `doner_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver_type`
--
ALTER TABLE `receiver_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_record`
--
ALTER TABLE `stu_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doner_type`
--
ALTER TABLE `doner_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `receiver_type`
--
ALTER TABLE `receiver_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stu_record`
--
ALTER TABLE `stu_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
