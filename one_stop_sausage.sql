-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_stop_sausage`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `order_lines` int(10) NOT NULL,
  `total_price` int(64) NOT NULL COMMENT 'Total price in cents',
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_lines`, `total_price`, `order_date`) VALUES
(1, 3, 3, 570, '2022-11-10'),
(2, 3, 3, 570, '2022-11-18'),
(3, 2, 1, 145, '2022-11-18'),
(4, 1, 1, 145, '2022-11-19'),
(5, 5, 2, 1160, '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `orders_line_items`
--

CREATE TABLE `orders_line_items` (
  `orderline_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `sausage_id` int(255) NOT NULL,
  `number_ordered` int(255) NOT NULL,
  `line_price` varchar(255) NOT NULL COMMENT 'Total price of the line in cents'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_line_items`
--

INSERT INTO `orders_line_items` (`orderline_id`, `order_id`, `sausage_id`, `number_ordered`, `line_price`) VALUES
(1, 1, 1, 10, '190'),
(2, 1, 2, 10, '190'),
(3, 1, 5, 10, '290'),
(4, 2, 1, 10, '190'),
(5, 2, 2, 10, '190'),
(6, 2, 5, 10, '290'),
(7, 3, 3, 5, '145'),
(8, 4, 5, 5, '145'),
(9, 5, 3, 20, '580'),
(10, 5, 4, 20, '580');

-- --------------------------------------------------------

--
-- Table structure for table `sausage`
--

CREATE TABLE `sausage` (
  `sausage_id` int(6) NOT NULL,
  `sausage_name` text NOT NULL,
  `price` int(32) NOT NULL COMMENT 'Price of a single item in cents',
  `stock_quantity` int(6) NOT NULL,
  `sausage_description` longtext NOT NULL,
  `sausage_heat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sausage`
--

INSERT INTO `sausage` (`sausage_id`, `sausage_name`, `price`, `stock_quantity`, `sausage_description`, `sausage_heat`) VALUES
(1, 'Original Beef Hot Dog', 19, 999, 'Your general hot dog composed of simple spices and beef products.', 1),
(2, 'Original Pork Hot Dog', 19, 999, 'Your general hot dog composed of simple spices and pork products.', 1),
(3, 'Andouille', 29, 999, 'A sausage whose recipe hails from France. This particular kind utilizes pork products in a course grind, onions, and a series of spices that give it a moderate heat.', 2),
(4, 'Pork Bratwurst', 29, 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground pork and seasoning to give it a mild heat.', 1),
(5, 'Beef Bratwurst', 29, 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground beef and  seasoning to give it a mild heat.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(6) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 0,
  `user_name` text NOT NULL,
  `user_username` text NOT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'Hashed password',
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(2) DEFAULT NULL,
  `country` text NOT NULL,
  `zipcode` int(10) NOT NULL,
  `card_number` varchar(20) DEFAULT NULL,
  `card_cvc` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `admin_status`, `user_name`, `user_username`, `user_password`, `address`, `city`, `state`, `country`, `zipcode`, `card_number`, `card_cvc`) VALUES
(1, 0, 'John Doe', 'jdoe26', 'Jdoeisacool1.', '55 Street Lane', 'Indianapolis', 'IN', 'United States of America', 46222, NULL, NULL),
(2, 0, 'Janey Rein', 'jrein89', 'Akl98j$u', '98 Rooftop Road', 'Indianapolis', 'IN', 'United States of America', 46590, NULL, NULL),
(3, 0, 'Donny\'s Dawgs', 'dondawgprocurement', 'ProcurementIsNecessary99!', '8090 Market Street', 'Indianapolis', 'OK', 'United States of America', 78901, '1111000011110000', 121),
(4, 1, 'Admin User Profile', 'AdminUser', 'AdminUseOnly', 'None', 'None', NULL, 'None', 0, NULL, NULL),
(5, 0, 'Bistro In Le Park', 'BistroInLePark', 'ReferencesAreFun?', '4444 Specifiso Park', 'Kaplan', 'LA', 'United States of America', 65020, '0000111100001111', 151);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_id` (`order_id`,`user_id`,`order_lines`);

--
-- Indexes for table `orders_line_items`
--
ALTER TABLE `orders_line_items`
  ADD PRIMARY KEY (`orderline_id`),
  ADD KEY `orderline_id` (`orderline_id`,`order_id`,`sausage_id`);

--
-- Indexes for table `sausage`
--
ALTER TABLE `sausage`
  ADD PRIMARY KEY (`sausage_id`),
  ADD KEY `sausage_id` (`sausage_id`),
  ADD KEY `sausage_heat` (`sausage_heat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`,`state`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_line_items`
--
ALTER TABLE `orders_line_items`
  MODIFY `orderline_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sausage`
--
ALTER TABLE `sausage`
  MODIFY `sausage_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
