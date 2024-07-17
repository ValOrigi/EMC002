-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 08:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cackle`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `user_id`, `item_id`, `quantity`) VALUES
(2, 2, 1, 1),
(3, 1, 6, 1),
(4, 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `itemname`, `type`, `description`, `price`, `quantity`, `img`) VALUES
(1, 'Beau\'s Room', 'bg', 'Beau\'s Room Background from Digital Deception', 120, 10, '../Images/Merchandise/Backgrounds/Beau Room.png'),
(2, 'Harper\'s Room', 'bg', 'Harper\'s Room Background from Digital Deception', 110, 15, '../Images/Merchandise/Backgrounds/Harper Room.png'),
(3, 'Jaiden\'s Room', 'bg', 'Jaiden\'s Room Background of Digital Deception', 150, 11, '../Images/Merchandise/Backgrounds/Jaiden Room.png'),
(4, 'Kirby\'s House', 'bg', 'Kirby\'s House Background from The Kirby Series', 150, 14, '../Images/Merchandise/Backgrounds/Kirby House.png'),
(5, 'Lady Rainicorn\'s House', 'bg', 'Lady Rainicorn\'s House Background from Adventure Time', 110, 10, '../Images/Merchandise/Backgrounds/Lady Rainicorn House.png'),
(6, 'Surprise!', 'landscape', 'Forrest CG of Digital Deception', 120, 120, '../Images/Merchandise/Landscapes/Forrest CG.png'),
(7, 'Guoba Offering', 'landscape', 'Guoba Print from Genshin Impact', 110, 15, '../Images/Merchandise/Landscapes/Guoba.png'),
(8, 'Deception', 'landscape', 'Opening CG from Digital Deception', 150, 11, '../Images/Merchandise/Landscapes/Opening CG.png'),
(9, 'Soul Harvest', 'landscape', 'Wortox Print from Don\'t Starve Together', 150, 14, '../Images/Merchandise/Landscapes/Wortox.png'),
(10, 'Mr. Piranha', 'portrait', 'Piranha Print from The Bad Guys', 120, 10, '../Images/Merchandise/Portraits/Mr Piranha.png'),
(11, 'Mr. Wolf', 'portrait', 'Wolf Print from The Bad Guys', 110, 15, '../Images/Merchandise/Portraits/Mr Wolf.png'),
(12, 'Together', 'portrait', 'Gregg and Angus from Night in the Woods', 150, 11, '../Images/Merchandise/Portraits/Gregg and Angus.png'),
(13, 'At Your Service', 'portrait', 'Geraldo Print from Bloons TD 6', 150, 14, '../Images/Merchandise/Portraits/Geraldo.png'),
(14, 'Dance With Me', 'portrait', 'Kichiboushi Print from Genshin Impact', 150, 14, '../Images/Merchandise/Portraits/Kichiboushi.png'),
(15, 'Dungeon Food!', 'portrait', 'Laios Print from Dungeon Meshi', 150, 14, '../Images/Merchandise/Portraits/Laios.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `email`, `password`, `description`) VALUES
(1, 'Valion', 'val@gmail.com', '$2y$10$QeqIr1sQWtMIqBnvM6RVV.1JAlvgkfacDKaepgfdkg3emw4VobGn.', 'Hi I\'m Val! <br>\r\nPh | 22 | @Val123456789 <br>\r\nI like to draw, plays games, sleep, eat...\r\n'),
(2, 'Cranes', 'cranes@gmail.com', '$2y$10$DQISThjCVsyXp/3rUNT6BuWI.GwetV1sd0HzCp9P9XlC7/BlTE/TG', 'No Bio Yet');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(255) NOT NULL,
  `emailReport` varchar(255) NOT NULL,
  `reportSubj` varchar(255) NOT NULL,
  `reportDesc` varchar(2500) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `emailReport`, `reportSubj`, `reportDesc`, `status`) VALUES
(1, 'val@gmail.com', 'Lost Cart Item', 'I lost my items in my cart', 'UNRESOLVED'),
(2, 'val@gmail.com', 'Another Lost Item', 'This keeps happening', 'UNRESOLVED'),
(3, 'val@gmail.com', 'Lost AGAIN', 'please help me....', 'UNRESOLVED'),
(4, 'val@gmail.com', 'Pls elp', 'plsplsplsplsplsplsplsplsplsplsplspls', 'UNRESOLVED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cart_ibfk_1` (`item_id`),
  ADD KEY `cart_ibfk_2` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `products` (`item_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `profile` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
