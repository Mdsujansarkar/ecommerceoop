-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 01:51 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `password`) VALUES
(1, 'admin', 'ami@tomi.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'monika', 'monika@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `category_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `category_status`) VALUES
(1, 'valo ok', 'ki obstaha', 1),
(2, 'jama', 'valo ki&nbsp;', 0),
(3, 'man fashion', 't shart', 1),
(4, 'wo fed', 'shari kapore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `blod_group` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `dis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `blod_group`, `address`, `city`, `dis`) VALUES
(1, 'ami', 'tomi', 'sujan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123', '8', 'asdf sdf ', 'dhaka', 'chandpur'),
(2, 'sujan', 'sarkar', 'sujan@ami.com', '827ccb0eea8a706c4c34a16891f84e7b', '134', '4', 'afk af f', 'dhaka', 'birisal'),
(3, 'ke ', 'toi', 'sujan@test.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '1', 'asdfg', 'dhaka', 'borisal'),
(4, 'ke ', 'toi', 'sujan@test.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '1', 'asdfg', 'dhaka', 'borisal'),
(5, 'jon', 'dow', 'jon@dow.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456', '1', 'ami ki korbo', 'dhaka', 'chandpur'),
(6, 'tok', 'tak', 'tok@tak.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '1', 'hello ki obostha', 'dhaka', 'chandpur'),
(7, 'as', 'ghgh', 'sujan@ghj.com', '827ccb0eea8a706c4c34a16891f84e7b', '1234567', '1', 'ai', 'dhaka', 'chandpur'),
(8, 'ami', 'tomi', 'sujan@ghgkj.com', 'cc9c60decaa2b3aad25f9502262da1ec', '123456', '6', 'ami ki korbo', 'dhaka', 'borisal'),
(9, 'ad', 'ZD', 'ad@sf.com', '202cb962ac59075b964b07152d234b70', '123', '1', 'aswe', 'dhaka', 'borisal'),
(10, 'asd', 'asd', 'asd@aaaad.com', '7815696ecbf1c96e6894b779456d330e', '123', '7', 'asd asd', 'dhaka', 'chandpur'),
(11, 'aas', 'dfdf', 'qwe@xfxf.com', '81dc9bdb52d04dc20036dbd8313ed055', '123456', '2', 'aswert', 'dhaka', 'asdd'),
(12, 'sdfd', 'sfs', 'sujan@f.com', 'b53086d558f1127993271e8c504ded45', '12345', '2', 'asdf', 'dhaka', 'chandpur'),
(13, 'asd', 'asd', 'sujan@aaad.com', '7815696ecbf1c96e6894b779456d330e', '123', '1', 'aasdf', 'bori', 'chandpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `manufacturer_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `manufacturer_status`) VALUES
(1, 'bitm', 'valo', 1),
(2, 'bitm', 'valo ki', 0),
(4, 'hi ki koro', 'valo aso', 1),
(5, 'arong', 'arong kapore koi&nbsp;', 0),
(6, 'benarosi', 'sari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(25) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 6, 8, 1314.45, 'pending', '2018-04-04 07:42:44'),
(2, 6, 8, 1314.45, 'pending', '2018-04-04 07:44:37'),
(3, 6, 8, 1314.45, 'pending', '2018-04-04 07:44:44'),
(4, 6, 8, 1314.45, 'pending', '2018-04-04 07:45:57'),
(5, 6, 8, 1314.45, 'pending', '2018-04-04 07:47:07'),
(6, 6, 8, 1314.45, 'pending', '2018-04-04 07:50:30'),
(7, 6, 8, 1314.45, 'pending', '2018-04-04 07:50:36'),
(8, 6, 8, 1314.45, 'pending', '2018-04-04 07:55:53'),
(9, 6, 8, 1314.45, 'pending', '2018-04-04 07:59:13'),
(10, 6, 8, 1314.45, 'pending', '2018-04-04 07:59:20'),
(11, 6, 8, 1314.45, 'pending', '2018-04-04 08:00:28'),
(12, 0, 0, 0.00, 'pending', '2018-04-04 08:07:52'),
(13, 0, 0, 0.00, 'pending', '2018-04-04 08:09:19'),
(14, 0, 0, 0.00, 'pending', '2018-04-04 08:14:43'),
(15, 0, 0, 0.00, 'pending', '2018-04-04 08:17:09'),
(16, 0, 0, 0.00, 'pending', '2018-04-04 08:17:41'),
(17, 0, 0, 0.00, 'pending', '2018-04-04 08:17:51'),
(18, 0, 0, 0.00, 'pending', '2018-04-04 08:18:30'),
(19, 8, 10, 1314.45, 'pending', '2018-04-04 08:29:20'),
(20, 8, 10, 1314.45, 'pending', '2018-04-04 09:25:50'),
(21, 8, 10, 1314.45, 'pending', '2018-04-04 09:42:02'),
(22, 8, 10, 1314.45, 'pending', '2018-04-04 09:42:14'),
(23, 8, 10, 1314.45, 'pending', '2018-04-04 09:43:37'),
(24, 8, 10, 1314.45, 'pending', '2018-04-04 09:44:04'),
(25, 8, 10, 1314.45, 'pending', '2018-04-04 10:20:04'),
(26, 9, 11, 231.15, 'pending', '2018-04-04 10:24:36'),
(27, 10, 12, 644.00, 'pending', '2018-04-04 17:52:29'),
(28, 10, 12, 644.00, 'pending', '2018-04-04 17:53:33'),
(29, 11, 13, 77.05, 'pending', '2018-04-04 19:10:27'),
(30, 11, 13, 77.05, 'pending', '2018-04-04 19:11:45'),
(31, 12, 14, 517.50, 'pending', '2018-04-05 03:27:06'),
(32, 13, 15, 1932.00, 'pending', '2018-04-05 17:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, 30, 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(2, 31, 18, 'T shirt', 450.00, 1, '../asset/images/photo9.jpg'),
(3, 32, 17, 'kapore', 560.00, 3, '../asset/images/photo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 1, 'cash_ondelivery', 'panding', '2018-04-04 07:42:44'),
(32, 32, 'cash_ondelivery', 'panding', '2018-04-05 17:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `stock_amount` int(7) NOT NULL,
  `minimum_stock_amount` varchar(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_amount`, `minimum_stock_amount`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(1, 'ki', 1, 1, 23.00, 89, '43', 'ami', 'kli', '../asset/images/similar3.jpg', 1),
(14, 'asdf', 3, 6, 67.00, 23, '5', 'asdfvasdf&nbsp;<span style=\"font-size: 13.3333px;\">valo kapore&nbsp;</span><span style=\"font-size: 13.3333px;\">valo kapore&nbsp;</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span>', '<span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span><span style=\"font-size: 13.3333px;\">valo kapore</span>', '../images/similar2.jpg', 1),
(15, 'lkj', 3, 4, 67.00, 34, '23', 'yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;<span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj</span>', '<span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj v&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj&nbsp;</span><span style=\"font-size: 13.3333px;\">yuio poiu iop poiuy poiu poiu poiy poiu qwe dnj</span>', '../images/similar1.jpg', 1),
(16, 'room', 2, 1, 45888.00, 12, '2', 'ewty', 'dgfdgjghhj', '../images/similar2.jpg', 0),
(17, 'kapore', 3, 1, 560.00, 34, '23', 'good&nbsp;<span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">goodv</span>', '<span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">goodv</span>', '../asset/images/photo1.jpg', 1),
(18, 'T shirt', 2, 6, 450.00, 23, '4', 'good&nbsp;<span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good</span><div><span style=\"font-size: 13.3333px;\">&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span></div>', '<span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><div><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span><span style=\"font-size: 13.3333px;\">good&nbsp;</span></div>', '../asset/images/photo9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `dis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `email_address`, `phone_number`, `address`, `city`, `dis`) VALUES
(1, 'ke toi', 'sujan@test.com', '123456', 'asdfg', 'dhaka', 'borisal'),
(2, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(3, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(4, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(5, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(6, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(7, 'jondow', 'jon@dow.com', '123456', 'ami ki korbo', 'dhaka', 'chandpur'),
(8, 'toktak', 'tok@tak.com', '123456', 'hello ki obostha', 'dhaka', 'chandpur'),
(9, 'asghgh', 'sujan@ghj.com', '1234567', 'ai', 'dhaka', 'chandpur'),
(10, 'amitomi', 'sujan@ghgkj.com', '123456', 'ami ki korbo', 'dhaka', 'borisal'),
(11, 'adZD', 'ad@sf.com', '123', 'aswe', 'dhaka', 'borisal'),
(12, 'asdasd', 'asd@aaaad.com', '123', 'asd asd', 'dhaka', 'chandpur'),
(13, 'aasdfdf', 'qwe@xfxf.com', '123456', 'aswert', 'dhaka', 'asdd'),
(14, 'sdfdsfs', 'sujan@f.com', '12345', 'asdf', 'dhaka', 'chandpur'),
(15, 'asdasd', 'sujan@aaad.com', '123', 'aasdf', 'bori', 'chandpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_card`
--

CREATE TABLE `tbl_temp_card` (
  `temp_card_id` int(11) NOT NULL,
  `session_id` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_temp_card`
--

INSERT INTO `tbl_temp_card` (`temp_card_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, '', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(2, '', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(3, '', 1, 'ki', 23.00, 6, '../asset/images/similar3.jpg'),
(6, 'oitm4kkcq5no8hvt93s806mbde', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(7, 'hvbccpu18codpp4ei4jegig68l', 17, 'kapore', 560.00, 3, '../asset/images/photo1.jpg'),
(8, 'hvbccpu18codpp4ei4jegig68l', 15, 'lkj', 67.00, 3, '../images/similar1.jpg'),
(9, 'sdn4fmqldvdtc55bpdb15splbc', 17, 'kapore', 560.00, 3, '../asset/images/photo1.jpg'),
(10, 'sdn4fmqldvdtc55bpdb15splbc', 1, 'ki', 23.00, 1, '../asset/images/similar3.jpg'),
(11, 'm7cg8oilnlievu7jnc12ehh4tp', 14, 'asdf', 67.00, 1, '../images/similar2.jpg'),
(12, 'ftf322u8pcp39jtetc8b68iinb', 17, 'kapore', 560.00, 2, '../asset/images/photo1.jpg'),
(13, 'ftf322u8pcp39jtetc8b68iinb', 1, 'ki', 23.00, 1, '../asset/images/similar3.jpg'),
(14, 'ftf322u8pcp39jtetc8b68iinb', 1, 'ki', 23.00, 1, '../asset/images/similar3.jpg'),
(25, 'qpngehtsad0agodhqkt74ss897', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(26, 'qpngehtsad0agodhqkt74ss897', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(27, 'qpngehtsad0agodhqkt74ss897', 15, 'lkj', 67.00, 1, '../images/similar1.jpg'),
(28, 'lnltrdhl6aobl6vjn3f8hn7qm4', 17, 'kapore', 560.00, 1, '../asset/images/photo1.jpg'),
(29, '2okbbj1ooprv600ft7vko3t8kd', 17, 'kapore', 560.00, 4, '../asset/images/photo1.jpg'),
(30, '2okbbj1ooprv600ft7vko3t8kd', 17, 'kapore', 560.00, 1, '../asset/images/photo1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_temp_card`
--
ALTER TABLE `tbl_temp_card`
  ADD PRIMARY KEY (`temp_card_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_temp_card`
--
ALTER TABLE `tbl_temp_card`
  MODIFY `temp_card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
