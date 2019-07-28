-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 08:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prodoself`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `Admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `Admin_name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Admin_id`, `Admin_name`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE IF NOT EXISTS `cart_detail` (
  `cart_id` int(9) NOT NULL AUTO_INCREMENT,
  `Cust_id` int(9) DEFAULT NULL,
  `Product_id` int(9) DEFAULT NULL,
  `product_qty` int(20) DEFAULT NULL,
  `product_size` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`cart_id`, `Cust_id`, `Product_id`, `product_qty`, `product_size`) VALUES
(28, 8, 32, NULL, 'XL'),
(29, 8, 33, NULL, 'L'),
(30, 8, 36, NULL, ''),
(31, 8, 38, NULL, ''),
(32, 8, 37, NULL, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `Category_id` int(10) NOT NULL AUTO_INCREMENT,
  `Country` varchar(50) NOT NULL,
  `Currency` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`Category_id`, `Country`, `Currency`) VALUES
(2, 'India', 'Rupees'),
(3, 'Japan', 'Yan'),
(4, 'America', 'Doller');

-- --------------------------------------------------------

--
-- Table structure for table `coin_detail_table`
--

CREATE TABLE IF NOT EXISTS `coin_detail_table` (
  `Coin_id` int(10) NOT NULL AUTO_INCREMENT,
  `Emp_id` int(10) DEFAULT NULL,
  `Category_id` int(10) DEFAULT NULL,
  `Coin_image` longblob,
  `Coin_name` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Time_period` int(4) DEFAULT NULL,
  `Grade` varchar(5) DEFAULT NULL,
  `Rarity` double(2,1) DEFAULT NULL,
  `Coin_price` decimal(9,2) DEFAULT NULL,
  `Cust_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Coin_id`),
  KEY `Emp_id` (`Emp_id`),
  KEY `Category_id` (`Category_id`),
  KEY `Cust_id` (`Cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `coin_detail_table`
--

INSERT INTO `coin_detail_table` (`Coin_id`, `Emp_id`, `Category_id`, `Coin_image`, `Coin_name`, `Description`, `Time_period`, `Grade`, `Rarity`, `Coin_price`, `Cust_id`) VALUES
(13, NULL, NULL, 0x6661303165356635356631393936306163633863376165633664383964323538312e6a7067, 'asd', 'asdasdasd', NULL, NULL, NULL, '0.00', 8),
(15, 4, 2, 0x33313033313831323136353636383531312e6a7067, '1 Rupee coin', '1 rs coin very common', 1999, 'EF/XF', 9.8, '10.00', NULL),
(16, 4, 2, 0x33313033313831323230303633323537364e4f4d49534d4120534c4f42414b4941532e6a7067, '50 paisa', '50 paisa very common in last decade', 1998, 'VG', 6.7, '50.00', NULL),
(17, 4, 2, 0x3331303331383132323134373234313835732d6c323235202831292e6a7067, '25 paisa', 'very rare these days', 1985, 'F', 5.5, '100.00', NULL),
(18, 4, 2, 0x3331303331383132323235343138353233732d6c3232352e6a7067, '1 paisa', 'super rare 1 paisa coin', 1970, 'G', 3.2, '200.00', NULL),
(19, 4, 2, 0x3331303331383132323335373134353834312d6a6170616e6573652d79656e2d636f696e2d6f6276657273652d312e6a7067, '1 japanese yen', 'very rare coin', 1943, 'UNC', 5.6, '300.00', NULL),
(20, 4, 3, 0x33313033313831323235343738383131352d6a6170616e6573652d79656e2d636f696e2d726576657273652d312e6a7067, '5 yan', 'the coin is with hole which is very rare outside of japan', 1930, 'UNC', 6.2, '900.00', NULL),
(21, 4, 2, 0x333130333138313232363435313833363635302d6a6170616e6573652d79656e2d636f696e2d6f6276657273652d312e6a7067, '50 yan', 'another good piece of golden era', 1965, 'F', 7.5, '600.00', NULL),
(22, 4, 3, 0x33313033313831323237343038323233646f776e6c6f61642e6a7067, '500 yan', 'Very common coin in japan', 2005, 'VG', 9.9, '200.00', NULL),
(23, 4, 4, 0x33313033313831323239333332303333324672616e6b2d4368757263682d52697665722d4f662d4e6f2d52657475726e2d416d65726963612d7468652d42656175746966756c2d53696c7665722d42756c6c696f6e2d436f696e2d323530783235302e6a7067, '1 cent  frank', 'very rare coin in america', 1986, 'G', 5.5, '800.00', NULL),
(24, 4, 2, 0x3331303331383132333032353239313238696d61676573202831292e6a7067, '1 cent liberty', 'very common cent', 1999, 'VG', 9.8, '20.00', NULL),
(25, 4, 2, 0x33313033313831323332313134373035696d616765732e6a7067, '1 cent eagle', 'very rare piece of art only single digit of amount remains', 1809, 'F', 1.9, '200000.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `c_order_detail_table`
--

CREATE TABLE IF NOT EXISTS `c_order_detail_table` (
  `C_Order_id` int(10) NOT NULL AUTO_INCREMENT,
  `Coin_id` int(10) NOT NULL,
  `Cust_id` int(10) NOT NULL,
  `Coin_price` decimal(9,2) NOT NULL,
  `Order_date` date NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Tax` decimal(9,2) NOT NULL,
  `Total_bill` decimal(9,2) NOT NULL,
  PRIMARY KEY (`C_Order_id`),
  KEY `Product_id` (`Coin_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Product_id_2` (`Coin_id`),
  KEY `Cust_id_2` (`Cust_id`),
  KEY `Product_price` (`Coin_price`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `design_category_table`
--

CREATE TABLE IF NOT EXISTS `design_category_table` (
  `Category_id` int(10) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `design_category_table`
--

INSERT INTO `design_category_table` (`Category_id`, `Category_name`) VALUES
(4, 'Squre'),
(5, 'Triangle'),
(7, 'Circle');

-- --------------------------------------------------------

--
-- Table structure for table `design_detail_table`
--

CREATE TABLE IF NOT EXISTS `design_detail_table` (
  `Design_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Image` longblob NOT NULL,
  `Design_Name` varchar(50) NOT NULL,
  `Category_id` int(10) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Size` int(10) NOT NULL,
  `Design_cost` decimal(9,2) NOT NULL,
  `Cust_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Design_Id`),
  KEY `Category_id` (`Category_id`),
  KEY `Cust_id` (`Cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `design_detail_table`
--

INSERT INTO `design_detail_table` (`Design_Id`, `Image`, `Design_Name`, `Category_id`, `Description`, `Size`, `Design_cost`, `Cust_id`) VALUES
(9, 0x3231303231383039323833383633383132313535373939385f3133303532333931313031373330345f313131353538353338353138393933373135375f6e2e6a7067, 'as', 4, '  asdasd  ', 50, '50.00', NULL),
(10, 0x3232303231383037313432333236323638332e204e617275746f20616e64204d696e61746f2e6a7067, 'asd', 4, ' adsd ', 50, '50.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail_table`
--

CREATE TABLE IF NOT EXISTS `employee_detail_table` (
  `Emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `Emp_name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Date_of_joining` date NOT NULL,
  `Emp_salary` int(10) NOT NULL,
  PRIMARY KEY (`Emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_detail_table`
--

INSERT INTO `employee_detail_table` (`Emp_id`, `Emp_name`, `Designation`, `Date_of_joining`, `Emp_salary`) VALUES
(4, 'Hiren', 'Coin_expert', '2018-02-23', 20000),
(5, 'Niraj', 'Modarater', '2018-03-09', 15000),
(6, 'Vinod', 'Supervisor ', '2018-03-07', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_detail_table`
--

CREATE TABLE IF NOT EXISTS `feedback_detail_table` (
  `Feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `E-mail` varchar(50) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Feedback_date` date NOT NULL,
  PRIMARY KEY (`Feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail_table`
--

CREATE TABLE IF NOT EXISTS `payment_detail_table` (
  `Payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `Order_id` int(10) DEFAULT NULL,
  `C_Order_id` int(10) DEFAULT NULL,
  `Cust_id` int(10) NOT NULL,
  `Payment_date` date NOT NULL,
  `Cust_name` varchar(50) NOT NULL,
  `Payment_status` varchar(50) NOT NULL,
  `Total_bill` decimal(9,2) NOT NULL,
  PRIMARY KEY (`Payment_id`),
  KEY `Order_id` (`Order_id`),
  KEY `C_Order_id` (`C_Order_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Cust_name` (`Cust_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_table`
--

CREATE TABLE IF NOT EXISTS `product_detail_table` (
  `Product_id` int(10) NOT NULL AUTO_INCREMENT,
  `Category_id` int(10) DEFAULT NULL,
  `Image` text,
  `Product_name` varchar(50) DEFAULT NULL,
  `P_Description` text,
  `Product_price` decimal(9,2) DEFAULT NULL,
  `Cust_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `Category_id` (`Category_id`),
  KEY `Category_id_2` (`Category_id`),
  KEY `Category_id_3` (`Category_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Product_price` (`Product_price`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `product_detail_table`
--

INSERT INTO `product_detail_table` (`Product_id`, `Category_id`, `Image`, `Product_name`, `P_Description`, `Product_price`, `Cust_id`) VALUES
(31, 5, '300318043844115408858d628224cb5636e0914679530ab54levis.jpg', 'Elvis Tshirt', 'Fit And Comfortable\r\nCotton Made', '700.00', NULL),
(32, 6, '3003180443151664edc514c545b7a219b2521fab6d74b973jack-wolfskin-ladies-brand-t-shirt-ocean-wave-p42986-19107_image.jpg', 'JACK WOLFSKIN BRAND T WOMENS', ' ORGANIC COTTON SINGLE JERSEY HEATHER: light, soft texture, marled-effect fabric with organic cotton. ', '850.00', NULL),
(33, 5, '30031804430014083dd81cc72c22818d71ae04b68ee070465s-l300.jpg', 'Branded Cotton T Shirt', 'ORGANIC COTTON SINGLE JERSEY HEATHER: light, soft texture, marled-effect fabric with organic cotton.', '350.00', NULL),
(34, 6, '30031804442129881a3cbd6f7af0dbd7316915fab76f40438wholesale-women-vintage-jeans-jackets-short-tops-2016-spring-autumn-long-sleeve-denim-coat-vintage-ripped-for-women-clothing.jpg', 'Women Vintage Jeans Jackets', 'Women Vintage Jeans Jackets Short Tops 2016 Spring Autumn Long Sleeve Denim Coat Vintage Ripped For Women Clothing', '700.00', NULL),
(35, 6, '30031804451216638477c0595ea429702769741b835582f87rBVaI1hd6JmAD19YAAEq-ncw2dM734.jpg', 'Sexy Women Sheer Chiffon Long Shirt Dress', 'Women Sheer Chiffon Long Shirt Dress Chiffon Blouse Casual Long Sleeve Turn-down Collar Side Split Shirt Top Vestidos', '1200.00', NULL),
(36, 5, '30031805145619846cb41e7bb6c0733662a7c801809cde1152015-Best-selling-men-s-clothing-best (1).jpg', 'MENS SHIRTS BRANDS', 'fit and comfort', '550.00', NULL),
(37, 5, '30031805181416075f78485250a8c77739a9cf08a850951dm2.jpg', 'Full Sleeve Tshirt For Man', 'Easy and Comfort cotton tshirt', '350.00', NULL),
(38, 5, '3003180519043237202937e0644c74cc20fab3fbfa18250d8m4.jpg', 'Men stylish Tshirt round neck', 'Easy to wear and 100% cotton', '330.00', NULL),
(39, 5, '300318051953244778a04bbe2dea90656d82ba9db394b2274m5.jpg', 'Men jacket', 'party wear and formal wear\r\n100% comfort', '850.00', NULL),
(40, 5, '30031805205915378a78d1765c90561398f6ef8b14b7dc32cm6.jpg', 'men jacket tshirt', '100 % cotton made jacket form tshirt', '450.00', NULL),
(41, 5, '3003180522031635524f13632ef46e081bce8d7a7a9ff7dafm3.jpg', 'men pocket tshirt', '100% cotton \r\nfir and comfort', '500.00', NULL),
(42, 5, '3003180523583552d8dac1fe5ca2d09299e0e08b543774bem1.jpg', 'men printed tshirt', 'pure printed tshirt\r\n100% cotton', '350.00', NULL),
(43, 6, '30031805255322681b5c871d924d5ed891fa4228702e9a955g1.jpg', 'Woman Fashion Dress', 'Sexy Look and comfort fitting\r\n100% cotton', '700.00', NULL),
(44, 6, '3003180526411886bfb7e13e0d706a760bf92d90215ee289g2.jpg', 'Women Skirt', 'comfortable feeling', '550.00', NULL),
(45, 6, '30031805272430527b4a4cb9ace1c2103eaae03468fa84f38g3.jpg', 'Women Tranparent Top', 'Open Transparent Top 100 % cold', '800.00', NULL),
(46, 6, '300318052829102528bf4434924d51dff0f8cb1485695a672g4.jpg', 'Women Full Body Gown', 'Black cotton fully body cover dress', '850.00', NULL),
(47, 6, '300318052923259410f81ad564a61dfba1c4a03ee9d136222g5.jpg', 'Women Summer Dress', '100% pure Free Summer Dress comfortable ', '550.00', NULL),
(48, 6, '30031805301515210379edf39415a2095a209fecf453f8f55g6.jpg', 'Women Full Shirt Dress', 'Shirt Feature Dresscomfort', '500.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pro_category_table`
--

CREATE TABLE IF NOT EXISTS `pro_category_table` (
  `Category_id` int(10) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pro_category_table`
--

INSERT INTO `pro_category_table` (`Category_id`, `Category_name`) VALUES
(5, 'Man'),
(6, 'woman');

-- --------------------------------------------------------

--
-- Table structure for table `pro_order_detail_table`
--

CREATE TABLE IF NOT EXISTS `pro_order_detail_table` (
  `Order_id` int(10) NOT NULL AUTO_INCREMENT,
  `Product_id` int(10) DEFAULT NULL,
  `Design_Id` int(10) DEFAULT NULL,
  `Cust_id` int(10) DEFAULT NULL,
  `Product_price` decimal(9,2) DEFAULT NULL,
  `Design_cost` decimal(9,2) DEFAULT NULL,
  `Order_date` date DEFAULT NULL,
  `product_size` varchar(10) DEFAULT NULL,
  `Quantity` int(10) DEFAULT '1',
  `Tax` decimal(9,2) DEFAULT NULL,
  `Total_bill` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`Order_id`),
  KEY `Product_id` (`Product_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Product_id_2` (`Product_id`),
  KEY `Design_Id` (`Design_Id`),
  KEY `Cust_id_2` (`Cust_id`),
  KEY `Product_price` (`Product_price`),
  KEY `Design_cost` (`Design_cost`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pro_order_detail_table`
--

INSERT INTO `pro_order_detail_table` (`Order_id`, `Product_id`, `Design_Id`, `Cust_id`, `Product_price`, `Design_cost`, `Order_date`, `product_size`, `Quantity`, `Tax`, `Total_bill`) VALUES
(1, 32, NULL, 7, '850.00', NULL, '2018-03-30', 'xl', 1, '35.00', '850.00'),
(2, 35, NULL, 8, '1200.00', NULL, '2018-03-29', 'l', 1, '35.00', '1235.00'),
(3, 40, NULL, 7, '450.00', NULL, '2018-03-24', 'sm', 1, '35.00', '485.00'),
(4, 44, NULL, 7, '550.00', NULL, '2018-03-10', 'xl', 1, '35.00', '580.00'),
(5, 48, NULL, 7, '500.00', NULL, '2018-03-17', 'xxl', 1, '35.00', '535.00'),
(6, 46, NULL, 8, '850.00', NULL, '2018-03-24', 'l', 1, '35.00', '885.00');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE IF NOT EXISTS `registration_table` (
  `Cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Confirm_password` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Pincode` int(6) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `E-mail` varchar(50) DEFAULT NULL,
  `Phone_no` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`Cust_id`),
  UNIQUE KEY `Phone_no` (`Phone_no`),
  UNIQUE KEY `E-mail` (`E-mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`Cust_id`, `Firstname`, `Lastname`, `Password`, `Confirm_password`, `Address`, `City`, `State`, `Pincode`, `Country`, `Date_of_Birth`, `Gender`, `E-mail`, `Phone_no`) VALUES
(7, 'vinod', 'patel', '3592', '3592', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sanjivuzumaki@gmail.com', 9712804415),
(8, 'keyur', 'parmar', 'kp19', 'kp19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kp.19@gmail.com', 7359411075);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_detail_table`
--

CREATE TABLE IF NOT EXISTS `shipping_detail_table` (
  `Shipping_id` int(10) NOT NULL AUTO_INCREMENT,
  `Order_id` int(10) DEFAULT NULL,
  `C_Order_id` int(10) DEFAULT NULL,
  `Cust_id` int(10) NOT NULL,
  `Cust_name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  PRIMARY KEY (`Shipping_id`),
  KEY `Order_id` (`Order_id`),
  KEY `C_Order_id` (`C_Order_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Cust_name` (`Cust_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coin_detail_table`
--
ALTER TABLE `coin_detail_table`
  ADD CONSTRAINT `coin_detail_table_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `employee_detail_table` (`Emp_id`),
  ADD CONSTRAINT `coin_detail_table_ibfk_2` FOREIGN KEY (`Category_id`) REFERENCES `category_table` (`Category_id`),
  ADD CONSTRAINT `coin_detail_table_ibfk_3` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

--
-- Constraints for table `c_order_detail_table`
--
ALTER TABLE `c_order_detail_table`
  ADD CONSTRAINT `c_order_detail_table_ibfk_1` FOREIGN KEY (`Coin_id`) REFERENCES `coin_detail_table` (`Coin_id`),
  ADD CONSTRAINT `c_order_detail_table_ibfk_2` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

--
-- Constraints for table `design_detail_table`
--
ALTER TABLE `design_detail_table`
  ADD CONSTRAINT `design_detail_table_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `design_category_table` (`Category_id`),
  ADD CONSTRAINT `design_detail_table_ibfk_2` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

--
-- Constraints for table `payment_detail_table`
--
ALTER TABLE `payment_detail_table`
  ADD CONSTRAINT `payment_detail_table_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `pro_order_detail_table` (`Order_id`),
  ADD CONSTRAINT `payment_detail_table_ibfk_2` FOREIGN KEY (`C_Order_id`) REFERENCES `c_order_detail_table` (`C_Order_id`),
  ADD CONSTRAINT `payment_detail_table_ibfk_3` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

--
-- Constraints for table `product_detail_table`
--
ALTER TABLE `product_detail_table`
  ADD CONSTRAINT `product_detail_table_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `pro_category_table` (`Category_id`),
  ADD CONSTRAINT `product_detail_table_ibfk_2` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

--
-- Constraints for table `pro_order_detail_table`
--
ALTER TABLE `pro_order_detail_table`
  ADD CONSTRAINT `pro_order_detail_table_ibfk_1` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`),
  ADD CONSTRAINT `pro_order_detail_table_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product_detail_table` (`Product_id`),
  ADD CONSTRAINT `pro_order_detail_table_ibfk_3` FOREIGN KEY (`Design_Id`) REFERENCES `design_detail_table` (`Design_Id`);

--
-- Constraints for table `shipping_detail_table`
--
ALTER TABLE `shipping_detail_table`
  ADD CONSTRAINT `shipping_detail_table_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `pro_order_detail_table` (`Order_id`),
  ADD CONSTRAINT `shipping_detail_table_ibfk_2` FOREIGN KEY (`C_Order_id`) REFERENCES `c_order_detail_table` (`C_Order_id`),
  ADD CONSTRAINT `shipping_detail_table_ibfk_3` FOREIGN KEY (`Cust_id`) REFERENCES `registration_table` (`Cust_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
