-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `admin_id` int(11) NOT NULL,
  `firstname` text CHARACTER SET latin1 NOT NULL,
  `middlename` text CHARACTER SET latin1 NOT NULL,
  `lastname` text CHARACTER SET latin1 NOT NULL,
  `gender` text CHARACTER SET latin1 NOT NULL,
  `address` text CHARACTER SET latin1 NOT NULL,
  `birthmonth` text CHARACTER SET latin1 NOT NULL,
  `birthday` text CHARACTER SET latin1 NOT NULL,
  `birthyear` text CHARACTER SET latin1 NOT NULL,
  `mobilenumber` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`admin_id`, `firstname`, `middlename`, `lastname`, `gender`, `address`, `birthmonth`, `birthday`, `birthyear`, `mobilenumber`, `email`, `password`) VALUES
(23, 'girven', 'getigan', 'gabunada', 'male', 'lower kalunasan cebu city', '10', '08', '', '09429775472', 'sss@gmail.com', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE `cart_tb` (
  `cart_no` int(11) NOT NULL,
  `cproduct_id` int(11) NOT NULL,
  `cproductname` text NOT NULL,
  `cproductdesc` text NOT NULL,
  `cprice` text NOT NULL,
  `itemno` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `customer_id` int(11) NOT NULL,
  `cfirstname` text NOT NULL,
  `cmiddlename` text NOT NULL,
  `clastname` text NOT NULL,
  `cgender` text NOT NULL,
  `caddress` text NOT NULL,
  `cbirthmonth` text NOT NULL,
  `cbirthday` text NOT NULL,
  `cbirthyear` text NOT NULL,
  `cmobilenumber` text NOT NULL,
  `cemail` text NOT NULL,
  `cpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`customer_id`, `cfirstname`, `cmiddlename`, `clastname`, `cgender`, `caddress`, `cbirthmonth`, `cbirthday`, `cbirthyear`, `cmobilenumber`, `cemail`, `cpassword`) VALUES
(5, 'girven', 'getigan', 'gabunada', 'male', 'lower kalunasan  cebu city', '10', '08', '1995', '09429775472', 'girven@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `logo_tb`
--

CREATE TABLE `logo_tb` (
  `logo_id` int(11) NOT NULL,
  `webname` text NOT NULL,
  `webdesc` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `order_no` int(11) NOT NULL,
  `product_no` text NOT NULL,
  `productname` text NOT NULL,
  `productdesc` text NOT NULL,
  `price` text NOT NULL,
  `itemno` int(11) NOT NULL,
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` text NOT NULL,
  `contactno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `product_id` int(100) NOT NULL,
  `productname` text NOT NULL,
  `productdesc` text NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD PRIMARY KEY (`cart_no`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `logo_tb`
--
ALTER TABLE `logo_tb`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart_tb`
--
ALTER TABLE `cart_tb`
  MODIFY `cart_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logo_tb`
--
ALTER TABLE `logo_tb`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
