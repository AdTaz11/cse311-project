-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 11:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemployeedetails`
--

CREATE TABLE `addemployeedetails` (
  `EmployeeId` varchar(20) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `DateofBirth` int(20) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `PhoneNumber` int(20) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `JoiningDate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addemployeedetails`
--

INSERT INTO `addemployeedetails` (`EmployeeId`, `EmployeeName`, `DateofBirth`, `Salary`, `Address`, `PhoneNumber`, `Post`, `JoiningDate`) VALUES
('ff', 'ff', 0, 'ff', 'ffff', 0, 'ff', 0),
('jjj', 'jjj', 0, 'jjj', 'jjj', 0, 'jjj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `addinventorydetails`
--

CREATE TABLE `addinventorydetails` (
  `productid` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addinventorydetails`
--

INSERT INTO `addinventorydetails` (`productid`, `quantity`, `size`) VALUES
('uuu', 'uuuu', 'uuuu');

-- --------------------------------------------------------

--
-- Table structure for table `addrentdetails`
--

CREATE TABLE `addrentdetails` (
  `ReceiptNumber` varchar(20) NOT NULL,
  `ShopId` varchar(20) NOT NULL,
  `TenantName` varchar(20) NOT NULL,
  `RentAmount` varchar(20) NOT NULL,
  `RentPaidDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addrentdetails`
--

INSERT INTO `addrentdetails` (`ReceiptNumber`, `ShopId`, `TenantName`, `RentAmount`, `RentPaidDate`) VALUES
('ttt', 'ttt', 'ttt', 'ttt', 'ttt');

-- --------------------------------------------------------

--
-- Table structure for table `addshop`
--

CREATE TABLE `addshop` (
  `ShopId` varchar(20) NOT NULL,
  `FloorNumber` int(20) NOT NULL,
  `ShopNumber` varchar(20) NOT NULL,
  `RentPerMonth` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addshop`
--

INSERT INTO `addshop` (`ShopId`, `FloorNumber`, `ShopNumber`, `RentPerMonth`, `Status`) VALUES
('dd', 24, 'dd', 44, 'dd'),
('ff', 33, 'ff', 33, 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `addshopallocation`
--

CREATE TABLE `addshopallocation` (
  `ShopAllocationId` varchar(20) NOT NULL,
  `TenantId` varchar(20) NOT NULL,
  `ShopId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addshopallocation`
--

INSERT INTO `addshopallocation` (`ShopAllocationId`, `TenantId`, `ShopId`) VALUES
('fff', 'fff', 'fff'),
('humaira05', 'humaira fyza', '0000067');

-- --------------------------------------------------------

--
-- Table structure for table `addshopemployeedetails`
--

CREATE TABLE `addshopemployeedetails` (
  `EmployeeId` varchar(20) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `DateofBirth` varchar(20) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `JoiningDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addshopemployeedetails`
--

INSERT INTO `addshopemployeedetails` (`EmployeeId`, `EmployeeName`, `DateofBirth`, `Salary`, `Address`, `PhoneNumber`, `Post`, `JoiningDate`) VALUES
('adib07', 'adib', '101098', '20000', 'feni', '12345', 'seller', '101021'),
('ggg', 'ggg', 'gggg', 'ggg', 'ggg', 'ggg', 'ggg', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `addtenantdetails`
--

CREATE TABLE `addtenantdetails` (
  `TenantId` varchar(20) NOT NULL,
  `TenantName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `RentRate` varchar(20) NOT NULL,
  `FloorNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addtenantdetails`
--

INSERT INTO `addtenantdetails` (`TenantId`, `TenantName`, `Address`, `PhoneNumber`, `RentRate`, `FloorNumber`) VALUES
('bb', 'bbb', 'bb', 'bbbb', 'bbb', 'bbb'),
('hh', 'hhh', 'hh', 'hh', 'hhhhh', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `dateofbirth` int(20) NOT NULL,
  `pnumber` int(20) NOT NULL,
  `tdnumber` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `dateofbirth`, `pnumber`, `tdnumber`, `password`, `cpassword`) VALUES
('Saidur', 'Rahman', 'abcd@mail.com', 10101991, 2147483647, '123456789', '12345', '12345'),
('M.Mushfiqur', 'Rahman', 'musfiq@gmail.com', 12113, 12345, '12345', '12345', '12345'),
('Pial', 'Rahman', 'pialrahman922@gmail.', 1051994, 2147483647, '123456789', '123', '123'),
('polo', 'hasan', 'polohasan@mail.com', 10434, 123, '12345', '123', '123'),
('Tazwar', 'noor', 'tazwa@gmail.com', 11412, 1234, '122344', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addemployeedetails`
--
ALTER TABLE `addemployeedetails`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Indexes for table `addinventorydetails`
--
ALTER TABLE `addinventorydetails`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `addrentdetails`
--
ALTER TABLE `addrentdetails`
  ADD PRIMARY KEY (`ReceiptNumber`);

--
-- Indexes for table `addshop`
--
ALTER TABLE `addshop`
  ADD PRIMARY KEY (`ShopId`);

--
-- Indexes for table `addshopallocation`
--
ALTER TABLE `addshopallocation`
  ADD PRIMARY KEY (`ShopAllocationId`);

--
-- Indexes for table `addshopemployeedetails`
--
ALTER TABLE `addshopemployeedetails`
  ADD PRIMARY KEY (`EmployeeId`);

--
-- Indexes for table `addtenantdetails`
--
ALTER TABLE `addtenantdetails`
  ADD PRIMARY KEY (`TenantId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
