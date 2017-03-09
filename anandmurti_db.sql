-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:53 AM
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
-- Table structure for table `gproducts_sale`
--

CREATE TABLE `gproducts_sale` (
  `sale_product_id` int(11) NOT NULL,
  `sale_product_quantity` int(10) NOT NULL,
  `sale_product_price` int(10) NOT NULL,
  `sale_total_price` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_product_date` datetime NOT NULL,
  `gcustomer_id` int(11) NOT NULL,
  `sale_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gproducts_sale`
--

INSERT INTO `gproducts_sale` (`sale_product_id`, `sale_product_quantity`, `sale_product_price`, `sale_total_price`, `product_id`, `sale_product_date`, `gcustomer_id`, `sale_activestatus`) VALUES
(1, 12, 10, 120, 1, '2017-02-16 06:57:30', 3, '1'),
(2, 3, 10, 30, 2, '2017-02-21 13:13:28', 2, '1'),
(3, 2, 20, 40, 4, '2017-03-02 10:41:30', 4, '1'),
(4, 3, 10, 30, 2, '2017-03-02 10:42:37', 2, '1'),
(5, 1, 35, 35, 6, '2017-03-08 11:28:47', 6, '1');

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
  `acustomer_date` datetime NOT NULL,
  `acustomer_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_customers`
--

INSERT INTO `tbl_aqua_customers` (`acustomer_id`, `acustomer_name`, `acustomer_email`, `acustomer_number`, `acustomer_address`, `acustomer_type`, `acustomer_date`, `acustomer_activestatus`) VALUES
(1, 'John', 'c1@gmai.com', '6777777777', 'Pune', 'temporary', '2017-02-08 11:34:29', '1'),
(4, 'Charly', 'charl@gmail.com', '3434344343', 'Pune', 'Regular', '2017-02-10 08:00:33', '1'),
(5, 'Rick', 'rick@gmail.com', '4545454555', 'Pune', 'temporary', '2017-02-21 12:42:26', '1'),
(6, 'Patrick', 'patrick@gmail.com', '5765656566', 'Shikrapur', 'Regular', '2017-02-21 12:43:36', '1'),
(7, 'pallavi', 'pallavi@gmauiljvkdjf', '7675757556', 'lnjkh', 'temporary', '2017-02-21 12:44:34', '1'),
(8, 'David', 'david@gmail.com', '5656565566', 'Osmanabad', 'Regular', '2017-03-08 12:22:07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aqua_invoice`
--

CREATE TABLE `tbl_aqua_invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_tax` int(10) NOT NULL,
  `invoice_amount` int(10) NOT NULL,
  `invoice_date` datetime NOT NULL,
  `invoice_status` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `acustomer_id` int(11) NOT NULL,
  `invoice_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_invoice`
--

INSERT INTO `tbl_aqua_invoice` (`invoice_id`, `invoice_tax`, `invoice_amount`, `invoice_date`, `invoice_status`, `order_id`, `acustomer_id`, `invoice_activestatus`) VALUES
(3, 10, 1210, '2017-02-28 07:32:35', 0, 14, 1, '1'),
(4, 0, 0, '2017-02-28 11:01:59', 0, 0, 5, '1'),
(5, 0, 0, '2017-02-28 11:06:50', 1, 0, 5, '1'),
(6, 0, 0, '2017-02-28 11:09:41', 1, 0, 6, '1'),
(7, 0, 0, '2017-02-28 11:13:00', 0, 0, 6, '1'),
(8, 0, 0, '2017-02-28 11:13:43', 1, 0, 7, '1'),
(9, 10, 1450, '2017-03-08 13:55:38', 0, 18, 8, '1');

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
  `acustomer_id` int(11) NOT NULL,
  `order_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aqua_orders`
--

INSERT INTO `tbl_aqua_orders` (`order_id`, `order_quantity`, `order_price`, `order_delivery_address`, `order_delivery_date`, `order_delivery_time`, `vehicle_name`, `order_status`, `order_reminder`, `order_date`, `jar_id`, `acustomer_id`, `order_activestatus`) VALUES
(2, '3', 100, 'Osmanabad', '2017-02-17', '03:30', 'HMT', '0', '0', '2017-02-08 12:09:37', 1, 1, '1'),
(3, '4', 100, 'Osmanabad', '2017-02-18', '04:20', 'HMT', '0', '0', '2017-02-09 06:56:32', 1, 4, '1'),
(5, '4', 100, 'Pune', '2017-02-06', '03:34', 'HMT', '1', '0', '2017-02-10 08:03:57', 1, 1, '1'),
(6, '2', 100, 'Pune', '2017-02-05', '03:34', 'HMT', '0', '1', '2017-02-10 08:05:39', 1, 4, '1'),
(7, '1', 100, 'Pune', '2017-02-02', '03:34', 'test2', '1', '1', '2017-02-10 08:48:44', 1, 1, '1'),
(8, '20', 20, 'Shikrapur', '2017-02-15T18:30:00.000Z', '1970-01-01T07:29:00.000Z', 'HMT', '0', '0', '2017-02-15 11:17:33', 3, 4, '1'),
(9, '10', 20, 'Solapur', '2017-02-14T18:30:00.000Z', '1970-01-01T08:32:00.000Z', 'HMT', '0', '0', '2017-02-17 10:12:28', 3, 0, '1'),
(10, '5', 20, 'Pune', '2017-02-08T18:30:00.000Z', '1970-01-01T08:31:00.000Z', 'HMT', '0', '0', '2017-02-17 10:18:06', 3, 0, '1'),
(11, '2', 20, 'Pune', '2017-02-13T18:30:00.000Z', '1970-01-01T08:33:00.000Z', 'test owner', '0', '0', '2017-02-17 10:19:36', 3, 0, '1'),
(12, '10', 20, 'Pune', '2017-10-28T18:30:00.000Z', '1970-01-01T18:28:00.000Z', 'test owner', '0', '0', '2017-02-17 10:48:50', 3, 0, '1'),
(13, '1', 20, 'Pune', '2017-02-23T18:30:00.000Z', '1970-01-01T08:31:00.000Z', 'HMT', '0', '0', '2017-02-17 10:53:08', 3, 4, '1'),
(14, '12', 100, 'Osmanabad', '2017-02-17T18:30:00.000Z', '1970-01-01T09:32:00.000Z', 'test owner', '0', '0', '0000-00-00 00:00:00', 1, 1, '1'),
(15, '12', 100, 'Pune', '2017-11-29T18:30:00.000Z', '1970-01-01T17:28:00.000Z', 'HMT', '0', '1', '2017-02-17 11:40:13', 1, 4, '1'),
(16, '8', 100, 'Pandharpur', '2017-12-29T18:30:00.000Z', '1970-01-01T18:28:00.000Z', 'HMT', '0', '0', '2017-02-17 11:42:59', 1, 1, '1'),
(17, '10', 20, 'Shikrapur', '2017-03-12T18:30:00.000Z', '1970-01-01T07:30:00.000Z', 'HMT', '0', '0', '2017-03-03 08:24:37', 3, 4, '1'),
(18, '12', 120, 'Shikrapur', '2017-03-14T18:30:00.000Z', '1970-01-01T09:31:00.000Z', 'HMT', '0', '0', '2017-03-08 13:46:03', 3, 8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_avehicle_details`
--

CREATE TABLE `tbl_avehicle_details` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_owner_name` varchar(100) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL,
  `vehicle_date` datetime NOT NULL,
  `vehicle_contact_number` int(15) NOT NULL,
  `vehicle_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_avehicle_details`
--

INSERT INTO `tbl_avehicle_details` (`vehicle_id`, `vehicle_owner_name`, `vehicle_number`, `vehicle_date`, `vehicle_contact_number`, `vehicle_activestatus`) VALUES
(2, 'test2', '323424', '2017-02-08 10:28:25', 2147483647, '1'),
(3, 'HMT', '234234', '2017-02-08 10:29:58', 2147483647, '1'),
(4, 'test owner', '2343232', '2017-02-11 11:12:22', 0, '1'),
(8, 'erewrewr', '454354', '2017-02-11 11:27:36', 0, '1'),
(10, 'Swapnil T', '56788', '2017-02-15 08:49:08', 2147483647, '1'),
(11, 'vehicle owner', 'mh-25', '2017-02-21 10:14:06', 1245637895, '1'),
(12, 'piago travller', '343434', '2017-03-09 05:57:20', 2147483647, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connection_invoice`
--

CREATE TABLE `tbl_connection_invoice` (
  `cinvoice_id` int(11) NOT NULL,
  `cinvoice_tax` int(10) NOT NULL,
  `cinvoice_amount` int(10) NOT NULL,
  `cinvoice_date` datetime NOT NULL,
  `cinvoice_status` int(10) NOT NULL,
  `connection_id` int(11) NOT NULL,
  `gcustomer_id` int(11) NOT NULL,
  `cinvoice_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_connection_invoice`
--

INSERT INTO `tbl_connection_invoice` (`cinvoice_id`, `cinvoice_tax`, `cinvoice_amount`, `cinvoice_date`, `cinvoice_status`, `connection_id`, `gcustomer_id`, `cinvoice_activestatus`) VALUES
(3, 0, 0, '2017-02-28 12:46:14', 1, 5, 1, '1'),
(4, 0, 0, '2017-03-01 07:07:46', 0, 8, 1, '1'),
(5, 10, 0, '2017-03-08 11:04:50', 0, 11, 6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expensives`
--

CREATE TABLE `tbl_expensives` (
  `expensive_id` int(11) NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `exp_desc` varchar(100) NOT NULL,
  `exp_amount` varchar(100) NOT NULL,
  `exp_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expensives`
--

INSERT INTO `tbl_expensives` (`expensive_id`, `person_name`, `exp_desc`, `exp_amount`, `exp_date`) VALUES
(1, 'sss', 'sss', '23', '2017-03-08 14:05:14');

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
  `vehicle_id` int(11) NOT NULL,
  `inwards_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gas_inwards`
--

INSERT INTO `tbl_gas_inwards` (`inwards_id`, `product_quantity`, `total_price`, `product_date`, `distributor_name`, `product_id`, `vehicle_id`, `inwards_activestatus`) VALUES
(2, 200, '200', '2017-02-16 06:25:13', 'A Distributor', 2, 2, '1'),
(10, 2, '20', '2017-02-21 10:59:36', 'ABC Distributor', 2, 2, '1'),
(11, 3, '900', '2017-02-21 11:21:11', 'XYZ Distributor', 1, 2, '1'),
(13, 0, '35', '2017-02-22 10:31:20', 'D Distributor', 6, 2, '1'),
(14, 30, '600', '2017-02-23 06:59:25', 'XYZ Distributor', 4, 2, '1'),
(15, 1, '10', '2017-02-24 10:30:29', 'ss', 2, 2, '1'),
(16, 1, '300', '2017-02-24 10:30:44', 's', 1, 2, '1'),
(17, 1, '20', '2017-02-24 10:31:04', 'hg', 4, 2, '1'),
(18, 75, '2625', '2017-02-24 12:37:16', 'YSD Distributor', 6, 3, '0'),
(19, 6, '1800', '2017-02-24 12:47:15', 'VPN Distributor', 1, 2, '1'),
(20, 1, '25', '2017-03-08 11:59:52', 'Test Distributor', 8, 5, '1'),
(21, 20, '500', '2017-03-08 12:02:16', 'ABC Distributor', 8, 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gogas_customers`
--

CREATE TABLE `tbl_gogas_customers` (
  `gcustomer_id` int(11) NOT NULL,
  `gcustomer_name` varchar(100) NOT NULL,
  `gcustomer_type` varchar(100) NOT NULL,
  `gcustomer_email` varchar(150) NOT NULL,
  `gcustomer_number` varchar(50) NOT NULL,
  `gcustomer_dob` varchar(50) NOT NULL,
  `gcustomer_state` varchar(50) NOT NULL,
  `gcustomer_city` varchar(50) NOT NULL,
  `gcustomer_pincode` int(10) NOT NULL,
  `gcustomer_landmark` varchar(200) NOT NULL,
  `gcustomer_proof` varchar(200) NOT NULL,
  `gcustomer_date` datetime NOT NULL,
  `gcustomer_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gogas_customers`
--

INSERT INTO `tbl_gogas_customers` (`gcustomer_id`, `gcustomer_name`, `gcustomer_type`, `gcustomer_email`, `gcustomer_number`, `gcustomer_dob`, `gcustomer_state`, `gcustomer_city`, `gcustomer_pincode`, `gcustomer_landmark`, `gcustomer_proof`, `gcustomer_date`, `gcustomer_activestatus`) VALUES
(1, 'Adam', '1', 'adam@gmail.com', '3434343434', '2017-02-06T18:30:00.000Z', 'Maharashtra', 'Osmanabad', 413501, 'Near Hospital', 'Id', '2017-02-10 09:16:58', '1'),
(2, 'Matt', '1', 'matt@gmail.com', '65665565656', '2017-02-12T18:30:00.000Z', 'Maharashtra', 'Osmanabad', 413501, 'Near Hospital', 'Pancard', '2017-02-10 09:25:20', '1'),
(3, 'dddd', '2', 'dnyanmali@gmail.co', '0000000000', '', 'dfdf', 'dsf', 999999, 'sdfsdfsdfdsfdsfsf', '', '2017-03-02 08:26:53', '0'),
(4, 'testuser', '2', 'testuser@gmail.com', '3453453453', '', 'MH', 'Pune', 454545, 'Near Hospital', '', '2017-03-02 08:48:08', '1'),
(5, 'shyren', '2', 'shyren@gmail.com', '3334343434', '', 'MH', 'Pune', 343434, 'New Hospital', '', '2017-03-08 08:13:50', '1'),
(6, 'smith', '2', 'smith@gmail.com', '4545454555', '', 'MH', 'Pune', 445454, 'Near Hospital', '', '2017-03-08 08:14:52', '1'),
(7, 'pitter', '2', 'pitter@gmail.com', '3454545455', '', 'MH', 'Pune', 565566, 'Near Hospital', '', '2017-03-08 08:17:57', '1');

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
  `product_date` datetime NOT NULL,
  `product_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gproducts`
--

INSERT INTO `tbl_gproducts` (`product_id`, `product_name`, `product_category`, `product_company`, `product_price`, `product_tax`, `product_date`, `product_activestatus`) VALUES
(1, 'p1', 'cooktop', 'test', '300', '10%', '2017-02-14 14:07:06', '0'),
(2, 'p2', 'cooktop', 'Surya', '10', '10%', '2017-02-16 06:24:10', '1'),
(4, 'p4', 'cylinder', 'gogas', '20', '2%', '2017-02-22 07:00:26', '1'),
(6, 'p5', 'lighter', 'star', '35', '5%', '2017-02-22 10:29:37', '1'),
(7, 'hotplate', 'cooktop', 'surya', '300', '10', '2017-03-03 06:57:22', '1'),
(8, 'p6', 'pipe', 'Star', '25', '10', '2017-03-08 07:06:26', '1');

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
  `gvehicle_contact_number` int(15) NOT NULL,
  `gvehicle_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gvehicle_details`
--

INSERT INTO `tbl_gvehicle_details` (`gvehicle_id`, `gvehicle_owner_name`, `gvehicle_number`, `gvehicle_date`, `gvehicle_contact_number`, `gvehicle_activestatus`) VALUES
(3, 'hfgh', 'hfghghgh', '2017-02-24 10:31:26', 2147483647, '0'),
(4, 'test owner2', 'mh-25 3433', '2017-02-24 12:51:31', 2147483647, '1'),
(5, 'hmt owner', '9192', '2017-03-08 07:49:15', 2147483647, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jar_details`
--

CREATE TABLE `tbl_jar_details` (
  `jar_id` int(11) NOT NULL,
  `jar_type` varchar(50) NOT NULL,
  `jar_price` int(10) NOT NULL,
  `jar_date` datetime NOT NULL,
  `jar_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jar_details`
--

INSERT INTO `tbl_jar_details` (`jar_id`, `jar_type`, `jar_price`, `jar_date`, `jar_activestatus`) VALUES
(1, 'normal-jar', 100, '2017-02-08 08:09:15', '1'),
(3, 'only-water', 20, '2017-02-08 08:47:05', '1'),
(4, 'cool-jar', 10, '2017-03-09 05:49:41', '1');

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
  `connection_tprice` int(10) NOT NULL,
  `connection_date` datetime NOT NULL,
  `gcustomer_id` int(11) NOT NULL,
  `connection_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_new_connection`
--

INSERT INTO `tbl_new_connection` (`connection_id`, `connection_type`, `connection_cylinder_deposit`, `connection_depreciation`, `connection_hotplate`, `connection_passbook`, `connection_stamp`, `connection_tube`, `connection_lighter`, `connection_other`, `connection_tprice`, `connection_date`, `gcustomer_id`, `connection_activestatus`) VALUES
(2, '3', '11', 'yes', 'No', 'No', '1', 'No', 'No', 'test2', 0, '2017-02-10 12:15:32', 1, '1'),
(3, '2', '45', 'test', 'Yes', 'Yes', 'tt', 'Yes', 'Yes', 'tttttt', 0, '2017-02-14 07:53:13', 2, '1'),
(4, '1', '34', 'depreciation', 'Yes', 'Yes', 'test', 'Yes', 'Yes', 'testtest', 0, '2017-02-14 11:10:11', 2, '1'),
(5, '3', '23', 'dpreciation', 'Yes', 'Yes', 'test', 'Yes', 'Yes', 'other', 0, '2017-02-14 11:14:08', 2, '1'),
(8, '3', '', '1', 'Yes', 'Yes', 'No', 'Yes', 'No', 'test', 1000, '2017-03-06 14:19:57', 4, '1'),
(9, '3', '100', '0', 'Yes', 'No', 'Yes', 'No', 'No', 'test11', 1000, '2017-03-07 05:38:17', 4, '0'),
(10, '2', '10', '0', 'Yes', 'No', 'Yes', 'No', 'Yes', 'testtesttesttest', 1000, '2017-03-08 10:07:12', 7, '1'),
(11, '3', '12', '0', 'Yes', 'Yes', 'No', 'No', 'Yes', 'trial', 1000, '2017-03-08 10:53:33', 6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refil_details`
--

CREATE TABLE `tbl_refil_details` (
  `refil_id` int(11) NOT NULL,
  `refil_cylinder_type` varchar(50) NOT NULL,
  `refil_payment_details` varchar(100) NOT NULL,
  `check_neft_id` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `refil_amount` int(10) NOT NULL,
  `refil_date` datetime NOT NULL,
  `gcustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refil_details`
--

INSERT INTO `tbl_refil_details` (`refil_id`, `refil_cylinder_type`, `refil_payment_details`, `check_neft_id`, `bank_name`, `ifsc_code`, `refil_amount`, `refil_date`, `gcustomer_id`) VALUES
(1, '', 'test', '', '', '', 300, '2017-02-14 13:07:38', 2),
(2, '', 'testtest', '', '', '', 300, '2017-02-14 13:09:40', 1),
(3, '', 'payment details', '', '', '', 400, '2017-02-14 13:22:49', 1),
(4, '2', 'test details', '', '', '', 600, '2017-02-14 13:24:25', 2),
(5, '2', '', '', '', '', 200, '2017-02-16 06:51:13', 2),
(6, '3', '21', '', '', '', 200, '2017-02-16 06:53:03', 1),
(7, '3', 'check', '', '', '', 9181, '2017-02-24 14:01:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_refil_invoice`
--

CREATE TABLE `tbl_refil_invoice` (
  `rinvoice_id` int(11) NOT NULL,
  `rinvoice_tax` int(10) NOT NULL,
  `rinvoice_amount` int(10) NOT NULL,
  `rinvoice_date` datetime NOT NULL,
  `rinvoice_status` int(10) NOT NULL,
  `refil_id` int(11) NOT NULL,
  `gcustomer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_refil_invoice`
--

INSERT INTO `tbl_refil_invoice` (`rinvoice_id`, `rinvoice_tax`, `rinvoice_amount`, `rinvoice_date`, `rinvoice_status`, `refil_id`, `gcustomer_id`) VALUES
(1, 0, 0, '2017-02-28 12:50:18', 1, 1, 2),
(2, 0, 0, '2017-02-28 12:50:18', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale_invoice`
--

CREATE TABLE `tbl_sale_invoice` (
  `sinvoice_id` int(11) NOT NULL,
  `sinvoice_tax` int(10) NOT NULL,
  `sinvoice_amount` int(10) NOT NULL,
  `sinvoice_date` datetime NOT NULL,
  `sinvoice_status` int(10) NOT NULL,
  `sale_product_id` int(11) NOT NULL,
  `gcustomer_id` int(11) NOT NULL,
  `sinvoice_activestatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sale_invoice`
--

INSERT INTO `tbl_sale_invoice` (`sinvoice_id`, `sinvoice_tax`, `sinvoice_amount`, `sinvoice_date`, `sinvoice_status`, `sale_product_id`, `gcustomer_id`, `sinvoice_activestatus`) VALUES
(2, 10, 50, '2017-03-06 06:27:41', 0, 3, 4, '1'),
(3, 50, 170, '2017-03-08 11:41:43', 0, 1, 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gproducts_sale`
--
ALTER TABLE `gproducts_sale`
  ADD PRIMARY KEY (`sale_product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `gcustomer_id` (`gcustomer_id`);

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
-- Indexes for table `tbl_aqua_invoice`
--
ALTER TABLE `tbl_aqua_invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `acustomer_id` (`acustomer_id`);

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
-- Indexes for table `tbl_connection_invoice`
--
ALTER TABLE `tbl_connection_invoice`
  ADD PRIMARY KEY (`cinvoice_id`),
  ADD KEY `gcustomer_id` (`gcustomer_id`),
  ADD KEY `connection_id` (`connection_id`);

--
-- Indexes for table `tbl_expensives`
--
ALTER TABLE `tbl_expensives`
  ADD PRIMARY KEY (`expensive_id`);

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
-- Indexes for table `tbl_refil_invoice`
--
ALTER TABLE `tbl_refil_invoice`
  ADD PRIMARY KEY (`rinvoice_id`),
  ADD KEY `refil_id` (`refil_id`),
  ADD KEY `gcustomer_id` (`gcustomer_id`);

--
-- Indexes for table `tbl_sale_invoice`
--
ALTER TABLE `tbl_sale_invoice`
  ADD PRIMARY KEY (`sinvoice_id`),
  ADD KEY `sale_product_id` (`sale_product_id`),
  ADD KEY `gcustomer_id` (`gcustomer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gproducts_sale`
--
ALTER TABLE `gproducts_sale`
  MODIFY `sale_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_aqua_customers`
--
ALTER TABLE `tbl_aqua_customers`
  MODIFY `acustomer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_aqua_invoice`
--
ALTER TABLE `tbl_aqua_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_aqua_orders`
--
ALTER TABLE `tbl_aqua_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_avehicle_details`
--
ALTER TABLE `tbl_avehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_connection_invoice`
--
ALTER TABLE `tbl_connection_invoice`
  MODIFY `cinvoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_expensives`
--
ALTER TABLE `tbl_expensives`
  MODIFY `expensive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gas_inwards`
--
ALTER TABLE `tbl_gas_inwards`
  MODIFY `inwards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_gogas_customers`
--
ALTER TABLE `tbl_gogas_customers`
  MODIFY `gcustomer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_gproducts`
--
ALTER TABLE `tbl_gproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_gproducts_trasaction`
--
ALTER TABLE `tbl_gproducts_trasaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gvehicle_details`
--
ALTER TABLE `tbl_gvehicle_details`
  MODIFY `gvehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_jar_details`
--
ALTER TABLE `tbl_jar_details`
  MODIFY `jar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_new_connection`
--
ALTER TABLE `tbl_new_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_refil_details`
--
ALTER TABLE `tbl_refil_details`
  MODIFY `refil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_refil_invoice`
--
ALTER TABLE `tbl_refil_invoice`
  MODIFY `rinvoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sale_invoice`
--
ALTER TABLE `tbl_sale_invoice`
  MODIFY `sinvoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
