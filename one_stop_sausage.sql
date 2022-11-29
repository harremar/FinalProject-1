-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:29 PM
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
  `total_price` varchar(64) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_lines`, `total_price`, `order_date`) VALUES
(1, 3, 3, '5.70', '2022-11-10'),
(2, 3, 3, '5.70', '2022-11-18'),
(3, 2, 1, '1.45', '2022-11-18'),
(4, 1, 1, '1.45', '2022-11-19'),
(5, 5, 2, '11.60', '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `orders_line_items`
--

CREATE TABLE `orders_line_items` (
  `orderline_id` int(255) NOT NULL,
  `order_id` int(6) NOT NULL,
  `sausage_id` int(6) NOT NULL,
  `number_ordered` int(255) NOT NULL,
  `line_price` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_line_items`
--

INSERT INTO `orders_line_items` (`orderline_id`, `order_id`, `sausage_id`, `number_ordered`, `line_price`) VALUES
(1, 1, 1, 10, '1.90'),
(2, 1, 2, 10, '1.90'),
(3, 1, 5, 10, '2.90'),
(4, 2, 1, 10, '1.90'),
(5, 2, 2, 10, '1.90'),
(6, 2, 5, 10, '2.90'),
(7, 3, 3, 5, '1.45'),
(8, 4, 5, 5, '1.45'),
(9, 5, 3, 20, '5.80'),
(10, 5, 4, 20, '5.80');

-- --------------------------------------------------------

--
-- Table structure for table `sausage`
--

CREATE TABLE `sausage` (
  `sausage_id` int(6) NOT NULL,
  `sausage_name` varchar(64) NOT NULL,
  `price` varchar(32) NOT NULL,
  `stock_quantity` int(6) NOT NULL,
  `sausage_description` longtext NOT NULL,
  `sausage_heat` int(2) NOT NULL,
  `image_filepath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sausage`
--

INSERT INTO `sausage` (`sausage_id`, `sausage_name`, `price`, `stock_quantity`, `sausage_description`, `sausage_heat`, `image_filepath`) VALUES
(1, 'Original Beef Hot Dog', '0.19', 999, 'Your general hot dog composed of simple spices and beef products.', 1, '/www/images/BeefHotDog.jpg'),
(2, 'Original Pork Hot Dog', '0.19', 999, 'Your general hot dog composed of simple spices and pork products.', 1, '/www/images/PorkHotDog.jpg'),
(3, 'Andouille', '0.29', 999, 'A sausage whose recipe hails from France. This particular kind utilizes pork products in a course grind, onions, and a series of spices that give it a moderate heat.', 3, '/www/images/AndouilleSausage.jpeg'),
(4, 'Pork Bratwurst', '0.29', 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground pork and seasoning to give it a mild heat.', 1, '/www/images/PorkBratwurst.jpg'),
(5, 'Beef Bratwurst', '0.29', 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground beef and  seasoning to give it a mild heat.', 1, '/www/images/BeefBratwurst.jpg'),
(6, 'Spanish Chorizo', '0.29', 999, 'A pork sausage that utilizes a mix of herbs and spices which prominently features garlic, paprika, and white wine. While it is not known to be as hot as its Mexican counterpart, it is relatively spicy. Unlike its Mexican counterpart, this sausage does not need to be cooked before eating.', 3, '/www/images/SpanishChorizo.jpg'),
(7, 'Italian Sausage', '0.24', 999, 'Italian sausages normally feature a wide array of flavors, but tend towards the sweet and hot. The spice mix features a sweet basil as well as anise and fennel to achieve this mixture. These sausages feature a pork meat base.', 4, '/www/images/ItalianSausage.jpg'),
(8, 'Mexican Chorizo', '0.29', 999, 'This pork sausage is quite hot, but it doesn\'t only sport heat. It uses a mix of spices, herbs, vinegar, and different types of chili peppers to achieve its flavor profile. Unlike it\'s Spanish counterpart, this sausage must be cooked before eating.', 4, '/www/images/MexicanChorizo.jpg'),
(9, 'Longaniza', '0.29', 999, 'This pork sausage comes from the Argentina area of South America and has a sweet and salty flavor profile. The main ingredient causing this flavoring is the use of ground anise seeds along with a blend of herbs and spices. This sausage is also unusually long compared to many other types of sausages.', 2, '/www/images/Longaniza.jpg'),
(10, 'Sai Ua', '0.24', 999, 'This pork sausage comes from Thailand and is another long sausage. The middle of the line heat and unique taste of this sausage comes from the use of red curry paste in its blend of spices and herbs.', 2, '/www/images/SaiUa.jpg'),
(11, 'Lucban Longganisa', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa uses a large amount of garlic in its spice and herb blend to achieve its flavor.', 2, '/www/images/LucbanLongganissa.jpg'),
(12, 'Guagua Longganisa', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa ends up being salty enough that some people describe it as almost sour!', 2, '/www/images/GuaguaLongganissa.jpg'),
(13, 'Longganisa Hamonado', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa is much sweeter than the other varieties!', 2, '/www/images/HamonadoLongganissa.jpg'),
(14, 'Laulau', '0.29', 999, 'This sausage comes from the islands of Hawaii and features both pork and fish. Unlike other sausages, this one features a wrapping made of Taro leaves that adds to its flavor!', 2, '/www/images/Laulau.jpg');

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
  MODIFY `sausage_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
