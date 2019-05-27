-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 06:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcrop`
--

CREATE TABLE `addcrop` (
  `state` varchar(50) NOT NULL,
  `crop` varchar(50) NOT NULL,
  `season` varchar(50) NOT NULL,
  `frommonth` varchar(50) NOT NULL,
  `fromtime` varchar(50) NOT NULL,
  `tomonth` varchar(50) NOT NULL,
  `totime` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcrop`
--

INSERT INTO `addcrop` (`state`, `crop`, `season`, `frommonth`, `fromtime`, `tomonth`, `totime`, `period`) VALUES
('Andhra_Pradesh', 'Blackgram/Urd', 'Kharif', 'June', 'Beg', 'July', 'Beg', 'Sowing'),
('Andhra_Pradesh', 'Blackgram/Urd', 'Kharif', 'June', 'Mid', 'July', 'Mid', 'Sowing'),
('Andhra_Pradesh', 'Blackgram/Urd', 'Kharif', 'June', 'Beg', 'December', 'End', 'Harvesting'),
('Andhra_Pradesh', 'Blackgram/Urd', 'Rabi', 'February', 'Mid', 'April', 'Mid', 'Harvesting'),
('Andhra_Pradesh', 'Chick Pea', 'Kharif', 'January', 'Beg', 'September', 'Mid', 'Sowing'),
('Andhra_Pradesh', 'Chick Pea', 'Rabi', 'November', 'Beg', 'February', 'Beg', 'Harvesting'),
('Andhra_Pradesh', 'Gram', 'Rabi', 'October', 'Beg', 'December', 'Beg', 'Sowing'),
('Andhra_Pradesh', 'Greengram', 'Kharif', 'July', 'Beg', 'October', 'Beg', 'Sowing'),
('Andhra_Pradesh', 'Horsegram', 'Kharif', 'August', 'Beg', 'January', 'Mid', 'Sowing'),
('Andhra_Pradesh', 'Maize', 'Kharif', 'August', 'End', 'October', 'Mid', 'Harvesting'),
('Andhra_Pradesh', 'Peas', 'Rabi', 'March', 'Beg', 'May', 'Beg', 'Harvesting'),
('West_Bengal', 'Pulses', 'Rabi', 'May', 'Mid', 'April', 'Mid', 'Harvesting'),
('Jammu_and_Kashmir', 'Wheat', 'Rabi', 'March', 'Mid', 'April', 'Beg', 'Harvesting');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `ID` int(10) NOT NULL,
  `COUNTER` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ID`, `COUNTER`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `userid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `farmadress` varchar(50) NOT NULL,
  `date` int(10) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`userid`, `username`, `password`, `email`, `state`, `address`, `farmadress`, `date`, `month`, `year`, `gender`, `aadhar`) VALUES
(1, 'dasds', 'dsaaaaaaa', 'dsa', 'Bihar', 'dsa', 'dsa', 0, '0', 0, 'female', ''),
(5, 'dasssssdad', 'adsssss', 'dasssssss2', 'Jammu and Kashmir', 'qweee', 'dsaaaa', 5, 'May', 1969, 'female', ''),
(12, 'abhi', 'p@55Word', 'abhishek.chakraborty171287@gmail.com', 'Karnataka', 'asd', 'sdaaaaaa', 15, 'August', 1972, 'female', '1234 5678 9101'),
(13, 'saddddddddddddddddd', '231@Pasword', 'abhishek.chakraborty94@yahoo.com', 'Bihar', 'ewqw', 'weqqqqq', 14, 'August', 1964, 'female', '1234 5678 9101'),
(15, 'abhishek', 'P@55word', 'abhishek.chakraborty9214@yahoo.com', 'Jammu and Kashmir', 'asdads dasj', '1507/13,govindpuri-kalkaji', 17, 'March', 1973, 'male', '1122 3333 4444');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierid`, `name`, `password`, `email`, `state`, `address`, `aadhar`, `mobile`) VALUES
(1, 'abhishek chak', 'P@55word', 'abhishek.chakraborty171287231@gmail.com', 'Karnataka', '231231-A,adsasd-ads,/dqwe', '2132 2312 3332', '9312332333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
