-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 06:13 AM
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
(2, 'santosh', 'Santosh B', 'santoshbhosale123@gmail.com', 'e6e061838856bf47e1de730719fb2609', '1234567890', 'aquaadmin', '2017-02-02 12:30:23'),
(3, 'test', 'sdfsdfsf', 'sdfadfasdsdf@dsfsdf.com', 'tet', '424243443334', 'aquaadmin', '2017-02-03 08:27:36'),
(4, 'test2', 'sdfsdfsfdfdf', 'sdsfsdfdfadfasdsdf@dsfsdf.com', 'tet', '467657643334', 'gogasadmin', '2017-02-03 08:28:00');

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
-- Indexes for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  ADD PRIMARY KEY (`gcustomer_id`),
  ADD UNIQUE KEY `gcustomer_email` (`gcustomer_email`),
  ADD UNIQUE KEY `gcustomer_number` (`gcustomer_number`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_aqua_customers`
--
ALTER TABLE `tbl_aqua_customers`
  MODIFY `acustomer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  MODIFY `gcustomer_id` int(11) NOT NULL AUTO_INCREMENT;
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
