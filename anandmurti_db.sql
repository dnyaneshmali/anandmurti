-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 02:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anandmurti_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_number` varchar(50) NOT NULL,
  `admin_role` varchar(50) NOT NULL,
  `admin_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_name`, `admin_email`, `admin_password`, `admin_number`, `admin_role`, `admin_date`) VALUES
(1, 'santosh', 'bhosale', 'santosh.bhosale123@gmail.com', '12345', '7777777777', 'aquaadmin', '2017-02-01 07:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_type` varchar(100) NOT NULL,
  `customer_role` varchar(50) NOT NULL,
  `customer_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_number`, `customer_address`, `customer_type`, `customer_role`, `customer_date`) VALUES
(7, '', '', '32423423234', 'sdfsdfsdf', 'Temporary', '', '2017-01-31 11:46:32'),
(12, 'sa123', 'ssss@gmail.com', '7777777777', 'pune', 'aquaadmin', 'Aqua', '2017-01-31 12:08:33'),
(13, 'santosh', 'santosssssh@gmail.com', '77777777777', 'pune', 'aquaadmin', '', '2017-01-31 12:11:09'),
(14, 'sawwqw', 'ssasa@gmail.com', '11124353454', 'dnsd', 'aquaadmin', 'Aqua', '2017-01-31 12:15:16'),
(16, 'santosjh', 'sasdas@gmail.com', '4684654654', 'pune', 'temporary', 'Aqua', '2017-01-31 12:47:39'),
(17, 'santosh', 'sa@gmail.com', '21212122112', 'qwq', 'Regular', 'Aqua', '2017-01-31 13:08:28'),
(20, 'sa', 'sa@ddd.ddd', '23233223123', 'd', 'temporary', 'Aqua', '2017-02-01 07:57:59'),
(21, 'sss', 'ss@gmail.com', '8234782222', 'sas', 'temporary', 'Aqua', '2017-02-01 08:00:03'),
(22, 'prashant', 'prashant@gmail.com', '23782371237', 'pune', 'temporary', 'Gogas', '2017-02-01 08:01:11'),
(25, 'ssss', 'ss22323@gmail.com', '1227862376', 'jksajkd', 'temporary', 'Gogas', '2017-02-01 08:12:06'),
(26, 'santosh', 'bhosale123@gmail.com', '7709326583', 'pune', 'temporary', 'Gogas', '2017-02-01 10:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_prize` varchar(100) NOT NULL,
  `Product_category` varchar(100) NOT NULL,
  `Product_company` varchar(100) NOT NULL,
  `product_tax` varchar(100) NOT NULL,
  `product_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_prize`, `Product_category`, `Product_company`, `product_tax`, `product_date`) VALUES
(3, 'sasasas', 'asasas', 'Regular', 'sasa', 'sasa', '2017-02-01 13:53:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`),
  ADD UNIQUE KEY `admin_email` (`admin_email`),
  ADD UNIQUE KEY `admin_number` (`admin_number`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_number` (`customer_number`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
