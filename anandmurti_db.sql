-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 02:01 PM
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
-- Table structure for table `gproducts_sale`
--

CREATE TABLE `gproducts_sale` (
  `sale_product_id` int(11) NOT NULL,
  `sale_product_quantity` int(10) NOT NULL,
  `sale_product_price` int(10) NOT NULL,
  `sale_total_price` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_product_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gproducts_sale`
--

INSERT INTO `gproducts_sale` (`sale_product_id`, `sale_product_quantity`, `sale_product_price`, `sale_total_price`, `product_id`, `sale_product_date`) VALUES
(1, 12, 10, 120, 1, '2017-02-16 06:57:30'),
(2, 3, 10, 30, 2, '2017-02-21 13:13:28');

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
(3, 'pallavi', 'Pallavi G', 'p@gmail.com', 'e6e061838856bf47e1de730719fb2609', '9999999999', 'gasadmin', '2017-02-13 10:53:45');

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
(1, 'John', 'c1@gmai.com', '6777777777', 'Pune', 'temporary', '2017-02-08 11:34:29'),
(4, 'Charly', 'charl@gmail.com', '3434344343', 'Pune', 'Regular', '2017-02-10 08:00:33'),
(5, 'Rick', 'rick@gmail.com', '4545454555', 'Pune', 'temporary', '2017-02-21 12:42:26'),
(6, 'Patrick', 'patrick@gmail.com', '5765656566', 'Shikrapur', 'Regular', '2017-02-21 12:43:36'),
(7, 'pallavi', 'pallavi@gmauiljvkdjf', '7675757556', 'lnjkh', 'temporary', '2017-02-21 12:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aqua_orders`
--

CREATE TABLE `tbl_aqua_orders` (
  `order_id` int(11) NOT NULL,
  `order_quantity` varchar(50) NOT NULL,
  `order_price` int(10) NOT NULL,
  `order_delivery_address` varchar(100) NOT NULL,
  `order_delivery_date` varchar(100) NOT NULL,
  `order_delivery_time` varchar(50) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_reminder` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `jar_id` int(11) NOT NULL,
  `acustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_orders`
--

INSERT INTO `tbl_aqua_orders` (`order_id`, `order_quantity`, `order_price`, `order_delivery_address`, `order_delivery_date`, `order_delivery_time`, `vehicle_name`, `order_status`, `order_reminder`, `order_date`, `jar_id`, `acustomer_id`) VALUES
(2, '3', 100, 'Osmanabad', '2017-02-17', '03:30', 'HMT', '1', '0', '2017-02-08 12:09:37', 1, 1),
(3, '4', 100, 'Osmanabad', '2017-02-18', '04:20', 'HMT', '0', '1', '2017-02-09 06:56:32', 1, 4),
(5, '4', 100, 'Pune', '2017-02-06', '03:34', 'HMT', '1', '1', '2017-02-10 08:03:57', 1, 1),
(6, '2', 100, 'Pune', '2017-02-05', '03:34', 'HMT', '0', '1', '2017-02-10 08:05:39', 1, 4),
(7, '1', 100, 'Pune', '2017-02-02', '03:34', 'test2', '1', '1', '2017-02-10 08:48:44', 1, 1),
(8, '20', 20, 'Shikrapur', '2017-02-15T18:30:00.000Z', '1970-01-01T07:29:00.000Z', 'HMT', '0', '0', '2017-02-15 11:17:33', 3, 4),
(9, '10', 20, 'Solapur', '2017-02-14T18:30:00.000Z', '1970-01-01T08:32:00.000Z', 'HMT', '0', '0', '2017-02-17 10:12:28', 3, 0),
(10, '5', 20, 'Pune', '2017-02-08T18:30:00.000Z', '1970-01-01T08:31:00.000Z', 'HMT', '0', '0', '2017-02-17 10:18:06', 3, 0),
(11, '2', 20, 'Pune', '2017-02-13T18:30:00.000Z', '1970-01-01T08:33:00.000Z', 'test owner', '0', '0', '2017-02-17 10:19:36', 3, 0),
(12, '10', 20, 'Pune', '2017-10-28T18:30:00.000Z', '1970-01-01T18:28:00.000Z', 'test owner', '0', '0', '2017-02-17 10:48:50', 3, 0),
(13, '1', 20, 'Pune', '2017-02-23T18:30:00.000Z', '1970-01-01T08:31:00.000Z', 'HMT', '0', '0', '2017-02-17 10:53:08', 3, 4),
(14, '12', 100, 'Osmanabad', '2017-02-17T18:30:00.000Z', '1970-01-01T09:32:00.000Z', 'test owner', '0', '0', '0000-00-00 00:00:00', 1, 1),
(15, '12', 100, 'Pune', '2017-11-29T18:30:00.000Z', '1970-01-01T17:28:00.000Z', 'HMT', '0', '0', '2017-02-17 11:40:13', 1, 4),
(16, '8', 100, 'Pandharpur', '2017-12-29T18:30:00.000Z', '1970-01-01T18:28:00.000Z', 'HMT', '0', '0', '2017-02-17 11:42:59', 1, 1);

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
(3, 'HMT', '234234', '2017-02-08 10:29:58', 2147483647),
(4, 'test owner', '2343232', '2017-02-11 11:12:22', 0),
(6, 'sdfsf', '342342', '2017-02-11 11:16:06', 2147483647),
(7, 'fgh', '453454', '2017-02-11 11:16:51', 0),
(8, 'erewrewr', '454354', '2017-02-11 11:27:36', 0),
(9, 'fgdfg', '45345', '2017-02-11 11:29:59', 2147483647),
(10, 'Swapnil T', '56788', '2017-02-15 08:49:08', 2147483647),
(11, 'vehicle owner', 'mh-25', '2017-02-21 10:14:06', 1245637895);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gas_inwards`
--

CREATE TABLE `tbl_gas_inwards` (
  `inwards_id` int(11) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `product_date` datetime NOT NULL,
  `distributor_name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gas_inwards`
--

INSERT INTO `tbl_gas_inwards` (`inwards_id`, `product_quantity`, `total_price`, `product_date`, `distributor_name`, `product_id`, `vehicle_id`) VALUES
(1, 10, '100', '2017-02-15 12:37:57', 'Test Distributor', 1, 2),
(2, 200, '200', '2017-02-16 06:25:13', 'A Distributor', 2, 2),
(10, 2, '20', '2017-02-21 10:59:36', 'ABC Distributor', 2, 2),
(11, 3, '900', '2017-02-21 11:21:11', 'XYZ Distributor', 1, 2),
(12, 30, '1500', '2017-02-22 06:51:32', 'ABC Distributor', 3, 2),
(13, 0, '35', '2017-02-22 10:31:20', 'D Distributor', 6, 2),
(14, 30, '600', '2017-02-23 06:59:25', 'XYZ Distributor', 4, 2),
(15, 1, '10', '2017-02-24 10:30:29', 'ss', 2, 2),
(16, 1, '300', '2017-02-24 10:30:44', 's', 1, 2),
(17, 1, '20', '2017-02-24 10:31:04', 'hg', 4, 2),
(18, 75, '2625', '2017-02-24 12:37:16', 'YSD Distributor', 6, 3),
(19, 6, '1800', '2017-02-24 12:47:15', 'VPN Distributor', 1, 2);

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

--
-- Dumping data for table `tbl_gogas_customers`
--

INSERT INTO `tbl_gogas_customers` (`gcustomer_id`, `gcustomer_name`, `gcustomer_email`, `gcustomer_number`, `gcustomer_dob`, `gcustomer_state`, `gcustomer_city`, `gcustomer_pincode`, `gcustomer_landmark`, `gcustomer_proof`, `gcustomer_date`) VALUES
(1, 'Adam', 'adam@gmail.com', '3434343434', '2017-02-06T18:30:00.000Z', 'Maharashtra', 'Osmanabad', 413501, 'Near Hospital', 'Id', '2017-02-10 09:16:58'),
(2, 'Matt', 'matt@gmail.com', '65665565656', '2017-02-12T18:30:00.000Z', 'Maharashtra', 'Osmanabad', 413501, 'Near Hospital', 'Pancard', '2017-02-10 09:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gproducts`
--

CREATE TABLE `tbl_gproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_company` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_tax` varchar(100) NOT NULL,
  `product_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gproducts`
--

INSERT INTO `tbl_gproducts` (`product_id`, `product_name`, `product_category`, `product_company`, `product_price`, `product_tax`, `product_date`) VALUES
(1, 'p1', 'cooktop', 'test', '300', '10%', '2017-02-14 14:07:06'),
(2, 'p2', 'cooktop', 'Surya', '10', '10%', '2017-02-16 06:24:10'),
(4, 'p4', 'cylinder', 'gogas', '20', '2%', '2017-02-22 07:00:26'),
(6, 'p5', 'lighter', 'star', '35', '5%', '2017-02-22 10:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gproducts_trasaction`
--

CREATE TABLE `tbl_gproducts_trasaction` (
  `transaction_id` int(11) NOT NULL,
  `tproduct_quantity` int(10) NOT NULL,
  `inwards_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gvehicle_details`
--

CREATE TABLE `tbl_gvehicle_details` (
  `gvehicle_id` int(11) NOT NULL,
  `gvehicle_owner_name` varchar(100) NOT NULL,
  `gvehicle_number` varchar(50) NOT NULL,
  `gvehicle_date` datetime NOT NULL,
  `gvehicle_contact_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gvehicle_details`
--

INSERT INTO `tbl_gvehicle_details` (`gvehicle_id`, `gvehicle_owner_name`, `gvehicle_number`, `gvehicle_date`, `gvehicle_contact_number`) VALUES
(2, 'v2', '56565', '2017-02-15 11:55:53', 2147483647),
(3, 'hfgh', 'hfghghgh', '2017-02-24 10:31:26', 2147483647),
(4, 'test owner2', 'mh-25 3433', '2017-02-24 12:51:31', 2147483647);

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
(3, 'only-water', 20, '2017-02-08 08:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_connection`
--

CREATE TABLE `tbl_new_connection` (
  `connection_id` int(11) NOT NULL,
  `connection_type` varchar(50) NOT NULL,
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

--
-- Dumping data for table `tbl_new_connection`
--

INSERT INTO `tbl_new_connection` (`connection_id`, `connection_type`, `connection_cylinder_deposit`, `connection_depreciation`, `connection_hotplate`, `connection_passbook`, `connection_stamp`, `connection_tube`, `connection_lighter`, `connection_other`, `connection_date`, `gcustomer_id`) VALUES
(2, '3', '11', 'yes', 'No', 'No', '1', 'No', 'No', 'test2', '2017-02-10 12:15:32', 1),
(3, '2', '45', 'test', 'Yes', 'Yes', 'tt', 'Yes', 'Yes', 'tttttt', '2017-02-14 07:53:13', 2),
(4, '1', '34', 'depreciation', 'Yes', 'Yes', 'test', 'Yes', 'Yes', 'testtest', '2017-02-14 11:10:11', 2),
(5, '3', '23', 'dpreciation', 'Yes', 'Yes', 'test', 'Yes', 'Yes', 'other', '2017-02-14 11:14:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refil_details`
--

CREATE TABLE `tbl_refil_details` (
  `refil_id` int(11) NOT NULL,
  `refil_cylinder_type` varchar(50) NOT NULL,
  `refil_payment_details` varchar(100) NOT NULL,
  `refil_amount` int(10) NOT NULL,
  `refil_date` datetime NOT NULL,
  `gcustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refil_details`
--

INSERT INTO `tbl_refil_details` (`refil_id`, `refil_cylinder_type`, `refil_payment_details`, `refil_amount`, `refil_date`, `gcustomer_id`) VALUES
(1, '', 'test', 300, '2017-02-14 13:07:38', 0),
(2, '', 'testtest', 300, '2017-02-14 13:09:40', 0),
(3, '', 'payment details', 400, '2017-02-14 13:22:49', 0),
(4, '2', 'test details', 600, '2017-02-14 13:24:25', 2),
(5, '2', '', 200, '2017-02-16 06:51:13', 2),
(6, '3', '21', 200, '2017-02-16 06:53:03', 1),
(7, '3', 'check', 9181, '2017-02-24 14:01:03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gproducts_sale`
--
ALTER TABLE `gproducts_sale`
  ADD PRIMARY KEY (`sale_product_id`),
  ADD KEY `product_id` (`product_id`);

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
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `acustomer_id` (`acustomer_id`),
  ADD KEY `jar_id` (`jar_id`);

--
-- Indexes for table `tbl_avehicle_details`
--
ALTER TABLE `tbl_avehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `tbl_gas_inwards`
--
ALTER TABLE `tbl_gas_inwards`
  ADD PRIMARY KEY (`inwards_id`);

--
-- Indexes for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  ADD PRIMARY KEY (`gcustomer_id`),
  ADD UNIQUE KEY `gcustomer_email` (`gcustomer_email`),
  ADD UNIQUE KEY `gcustomer_number` (`gcustomer_number`);

--
-- Indexes for table `tbl_gproducts`
--
ALTER TABLE `tbl_gproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_gproducts_trasaction`
--
ALTER TABLE `tbl_gproducts_trasaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `inwards_id` (`inwards_id`);

--
-- Indexes for table `tbl_gvehicle_details`
--
ALTER TABLE `tbl_gvehicle_details`
  ADD PRIMARY KEY (`gvehicle_id`);

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
  ADD KEY `connection_id` (`gcustomer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gproducts_sale`
--
ALTER TABLE `gproducts_sale`
  MODIFY `sale_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aqua_customers`
--
ALTER TABLE `tbl_aqua_customers`
  MODIFY `acustomer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_aqua_orders`
--
ALTER TABLE `tbl_aqua_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_avehicle_details`
--
ALTER TABLE `tbl_avehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_gas_inwards`
--
ALTER TABLE `tbl_gas_inwards`
  MODIFY `inwards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  MODIFY `gcustomer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_gproducts`
--
ALTER TABLE `tbl_gproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_gproducts_trasaction`
--
ALTER TABLE `tbl_gproducts_trasaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gvehicle_details`
--
ALTER TABLE `tbl_gvehicle_details`
  MODIFY `gvehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jar_details`
--
ALTER TABLE `tbl_jar_details`
  MODIFY `jar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_new_connection`
--
ALTER TABLE `tbl_new_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_refil_details`
--
ALTER TABLE `tbl_refil_details`
  MODIFY `refil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
