-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:29 PM
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
(1, 'Original Beef Hot Dog', '0.19', 999, 'Your general hot dog composed of simple spices and beef products.', 1, '/www/images/BeefHotDog'),
(2, 'Original Pork Hot Dog', '0.19', 999, 'Your general hot dog composed of simple spices and pork products.', 1, '/www/images/PorkHotDog'),
(3, 'Andouille', '0.29', 999, 'A sausage whose recipe hails from France. This particular kind utilizes pork products in a course grind, onions, and a series of spices that give it a moderate heat.', 3, '/www/images/AndouilleSausage'),
(4, 'Pork Bratwurst', '0.29', 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground pork and seasoning to give it a mild heat.', 1, '/www/images/PorkBratwurst'),
(5, 'Beef Bratwurst', '0.29', 999, 'A sausage whose recipe hails from Germany. This sausage uses finely ground beef and  seasoning to give it a mild heat.', 1, '/www/images/BeefBratwurst'),
(6, 'Spanish Chorizo', '0.29', 999, 'A pork sausage that utilizes a mix of herbs and spices which prominently features garlic, paprika, and white wine. While it is not known to be as hot as its Mexican counterpart, it is relatively spicy. Unlike its Mexican counterpart, this sausage does not need to be cooked before eating.', 3, '/www/images/SpanishChorizo'),
(7, 'Italian Sausage', '0.24', 999, 'Italian sausages normally feature a wide array of flavors, but tend towards the sweet and hot. The spice mix features a sweet basil as well as anise and fennel to achieve this mixture. These sausages feature a pork meat base.', 4, '/www/images/ItalianSausage'),
(8, 'Mexican Chorizo', '0.29', 999, 'This pork sausage is quite hot, but it doesn\'t only sport heat. It uses a mix of spices, herbs, vinegar, and different types of chili peppers to achieve its flavor profile. Unlike it\'s Spanish counterpart, this sausage must be cooked before eating.', 4, '/www/images/MexicanChorizo'),
(9, 'Longaniza', '0.29', 999, 'This pork sausage comes from the Argentina area of South America and has a sweet and salty flavor profile. The main ingredient causing this flavoring is the use of ground anise seeds along with a blend of herbs and spices. This sausage is also unusually long compared to many other types of sausages.', 2, '/www/images/Longaniza'),
(10, 'Sai Ua', '0.24', 999, 'This pork sausage comes from Thailand and is another long sausage. The middle of the line heat and unique taste of this sausage comes from the use of red curry paste in its blend of spices and herbs.', 2, '/www/images/SaiUa'),
(11, 'Lucban Longganisa', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa uses a large amount of garlic in its spice and herb blend to achieve its flavor.', 2, '/www/images/LucbanLongganissa'),
(12, 'Guagua Longganisa', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa ends up being salty enough that some people describe it as almost sour!', 2, '/www/images/GuaguaLongganissa'),
(13, 'Longganisa Hamonado', '0.29', 999, 'This sausage is another unusually long type of sausage, however it and its sibling varieties all hail from the Philippines. This version of the sausage contains pork, but it is common to find them made with beef, chicken, and even types of fish. This particular version of Longganisa is much sweeter than the other varieties!', 2, '/www/images/HamonadoLongganissa'),
(14, 'Laulau', '0.29', 999, 'This sausage comes from the islands of Hawaii and features both pork and fish. Unlike other sausages, this one features a wrapping made of Taro leaves that adds to its flavor!', 2, '/www/images/Laulau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sausage`
--
ALTER TABLE `sausage`
  ADD PRIMARY KEY (`sausage_id`),
  ADD KEY `sausage_id` (`sausage_id`),
  ADD KEY `sausage_heat` (`sausage_heat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sausage`
--
ALTER TABLE `sausage`
  MODIFY `sausage_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
