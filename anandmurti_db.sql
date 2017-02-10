-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 07:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
(1, 'dnyanesh', 'Dnyanesh Mali', 'dnyanesh.mali@softinfology.com', 'e6e061838856bf47e1de730719fb2609', '9689483519', 'superadmin', '2017-01-30 00:00:00'),
(2, 'santosh', 'Santosh B', 'santoshbhosale123@gmail.com', 'e6e061838856bf47e1de730719fb2609', '1234567890', 'aquaadmin', '2017-02-02 12:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aqua_customers`
--

CREATE TABLE `tbl_aqua_customers` (
  `acustomer_id` int(11) NOT NULL,
  `acustomer_name` varchar(100) NOT NULL,
  `acustomer_email` varchar(150) NOT NULL,
  `acustomer_number` varchar(50) NOT NULL,
  `acustomer_address` varchar(255) NOT NULL,
  `acustomer_type` varchar(100) NOT NULL,
  `acustomer_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_customers`
--

INSERT INTO `tbl_aqua_customers` (`acustomer_id`, `acustomer_name`, `acustomer_email`, `acustomer_number`, `acustomer_address`, `acustomer_type`, `acustomer_date`) VALUES
(1, 'c1', 'c1@gmai.com', '234234242234', 'Pune', 'temporary', '2017-02-08 11:34:29'),
(3, 'Test Customer2', 'sdf@sdfdsf.fghfhgsdfsdf', '452424234234', 'Pune', 'temporary', '2017-02-10 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aqua_orders`
--

CREATE TABLE `tbl_aqua_orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_jar_type` varchar(50) NOT NULL,
  `order_quantity` varchar(50) NOT NULL,
  `order_price` int(10) NOT NULL,
  `order_delivery_address` varchar(100) NOT NULL,
  `order_delivery_date` datetime NOT NULL,
  `order_delivery_time` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_reminder` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_orders`
--

INSERT INTO `tbl_aqua_orders` (`order_id`, `customer_name`, `order_jar_type`, `order_quantity`, `order_price`, `order_delivery_address`, `order_delivery_date`, `order_delivery_time`, `vehicle_name`, `order_status`, `order_reminder`, `order_date`) VALUES
(2, 'Test Customer2', '1', '3', 456, 'Osmanabad', '0000-00-00 00:00:00', '03:30', '2', '1', '0', '2017-02-08 12:09:37'),
(3, 'Test Customer', '1', '4', 200, 'Osmanabad', '0000-00-00 00:00:00', '04:20', '1', '0', '1', '2017-02-09 06:56:32'),
(4, 'Test Customer22', '1', '3', 300, 'pune', '0000-00-00 00:00:00', '03:34', '1', '0', '', '2017-02-10 07:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_avehicle_details`
--

CREATE TABLE `tbl_avehicle_details` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_owner_name` varchar(100) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL,
  `vehicle_date` datetime NOT NULL,
  `vehicle_contact_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_avehicle_details`
--

INSERT INTO `tbl_avehicle_details` (`vehicle_id`, `vehicle_owner_name`, `vehicle_number`, `vehicle_date`, `vehicle_contact_number`) VALUES
(2, 'test2', '323424', '2017-02-08 10:28:25', 2147483647),
(3, 'HMT', '234234', '2017-02-08 10:29:58', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gogas_customers`
--

CREATE TABLE `tbl_gogas_customers` (
  `gcustomer_id` int(11) NOT NULL,
  `gcustomer_name` varchar(100) NOT NULL,
  `gcustomer_email` varchar(150) NOT NULL,
  `gcustomer_number` varchar(50) NOT NULL,
  `gcustomer_dob` varchar(50) NOT NULL,
  `gcustomer_state` varchar(50) NOT NULL,
  `gcustomer_city` varchar(50) NOT NULL,
  `gcustomer_pincode` int(10) NOT NULL,
  `gcustomer_landmark` varchar(200) NOT NULL,
  `gcustomer_proof` varchar(200) NOT NULL,
  `gcustomer_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jar_details`
--

CREATE TABLE `tbl_jar_details` (
  `jar_id` int(11) NOT NULL,
  `jar_type` varchar(50) NOT NULL,
  `jar_price` int(10) NOT NULL,
  `jar_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jar_details`
--

INSERT INTO `tbl_jar_details` (`jar_id`, `jar_type`, `jar_price`, `jar_date`) VALUES
(1, 'normal-jar', 100, '2017-02-08 08:09:15'),
(3, 'only-water', 222, '2017-02-08 08:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_connection`
--

CREATE TABLE `tbl_new_connection` (
  `connection_id` int(11) NOT NULL,
  `connection_cylinder_deposit` varchar(50) NOT NULL,
  `connection_depreciation` varchar(50) NOT NULL,
  `connection_hotplate` varchar(50) NOT NULL,
  `connection_passbook` varchar(50) NOT NULL,
  `connection_stamp` varchar(50) NOT NULL,
  `connection_tube` varchar(50) NOT NULL,
  `connection_lighter` varchar(50) NOT NULL,
  `connection_other` varchar(100) NOT NULL,
  `connection_date` datetime NOT NULL,
  `gcustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refil_details`
--

CREATE TABLE `tbl_refil_details` (
  `refil_id` int(11) NOT NULL,
  `refil_type` varchar(50) NOT NULL,
  `refil_payment_details` varchar(100) NOT NULL,
  `refil_amount` int(10) NOT NULL,
  `refil_date` datetime NOT NULL,
  `connection_id` int(11) NOT NULL,
  `gcustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_aqua_customers`
--
ALTER TABLE `tbl_aqua_customers`
  ADD PRIMARY KEY (`acustomer_id`);

--
-- Indexes for table `tbl_aqua_orders`
--
ALTER TABLE `tbl_aqua_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_avehicle_details`
--
ALTER TABLE `tbl_avehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  ADD PRIMARY KEY (`gcustomer_id`),
  ADD UNIQUE KEY `gcustomer_email` (`gcustomer_email`),
  ADD UNIQUE KEY `gcustomer_number` (`gcustomer_number`);

--
-- Indexes for table `tbl_jar_details`
--
ALTER TABLE `tbl_jar_details`
  ADD PRIMARY KEY (`jar_id`);

--
-- Indexes for table `tbl_new_connection`
--
ALTER TABLE `tbl_new_connection`
  ADD PRIMARY KEY (`connection_id`),
  ADD KEY `gcustomer_id` (`gcustomer_id`);

--
-- Indexes for table `tbl_refil_details`
--
ALTER TABLE `tbl_refil_details`
  ADD PRIMARY KEY (`refil_id`),
  ADD KEY `connection_id` (`connection_id`,`gcustomer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_aqua_customers`
--
ALTER TABLE `tbl_aqua_customers`
  MODIFY `acustomer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aqua_orders`
--
ALTER TABLE `tbl_aqua_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_avehicle_details`
--
ALTER TABLE `tbl_avehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  MODIFY `gcustomer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jar_details`
--
ALTER TABLE `tbl_jar_details`
  MODIFY `jar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_new_connection`
--
ALTER TABLE `tbl_new_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_refil_details`
--
ALTER TABLE `tbl_refil_details`
  MODIFY `refil_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
