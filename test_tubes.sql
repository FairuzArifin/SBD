-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 12:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `nft_id` int(11) NOT NULL,
  `start_bid_price` double(30,10) UNSIGNED NOT NULL,
  `auction_start` datetime NOT NULL,
  `auction_end` datetime NOT NULL,
  `buy_now` double(30,10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`nft_id`, `start_bid_price`, `auction_start`, `auction_end`, `buy_now`) VALUES
(1, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(2, 0.0000000000, '2022-06-02 22:33:56', '2022-06-02 22:33:56', 0.0000000000),
(3, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(4, 0.0000000000, '2022-06-02 22:33:56', '2022-06-02 22:33:56', 0.0000000000),
(5, 0.0000000000, '2022-06-02 22:40:56', '2022-06-02 22:40:56', 0.0000000000),
(6, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(7, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(8, 1.0000000000, '2022-06-03 03:57:00', '2022-06-10 03:57:00', 50.0000000000),
(9, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(10, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(11, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(12, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(13, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(14, 0.0000000000, '2022-06-02 22:40:56', '2022-06-02 22:40:56', 0.0000000000),
(15, 0.0000000000, '2022-06-02 22:33:56', '2022-06-02 22:33:56', 0.0000000000),
(16, 0.0000000000, '2022-06-02 22:33:56', '2022-06-02 22:33:56', 0.0000000000),
(17, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(18, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(19, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(20, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000),
(21, 0.0000000000, '2022-06-02 22:41:19', '2022-06-02 22:41:19', 0.0000000000);

-- --------------------------------------------------------

--
-- Table structure for table `bid_ongoing`
--

CREATE TABLE `bid_ongoing` (
  `bid_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nft_id` int(11) DEFAULT NULL,
  `bid_ongoing` double(30,10) UNSIGNED NOT NULL,
  `bid_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `user_id` int(11) NOT NULL,
  `nft_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepemilikan`
--

INSERT INTO `kepemilikan` (`user_id`, `nft_id`) VALUES
(2104, 16),
(2104, 4),
(2104, 2),
(2104, 15),
(2101, 14),
(2101, 5),
(2101, 21),
(2101, 1),
(2102, 8),
(2102, 9),
(2102, 18),
(2102, 19),
(2103, 10),
(2103, 7),
(2103, 6),
(2103, 20),
(2104, 3),
(2101, 12),
(2102, 11),
(2103, 13),
(2104, 17);

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status_nft` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`nft_id`, `title`, `description`, `photo`, `category`, `status_nft`) VALUES
(1, 'Anya', 'Anyaaaaaaa', '31.jpg', 'Art', '1'),
(2, 'Anjing Ijo', 'Guk guk', '6.png', 'Art', '1'),
(3, 'Peri Ijo', 'Tralala', '5.png', 'Art', '1'),
(4, 'Anjing ganteng', 'GuK', '7.png', 'Art', '1'),
(5, 'Anjing Pesta', 'GuK guuuukk', '9.png', 'Collectibles', '1'),
(6, 'Orang mohak', 'swaggg', '11.png', 'Collectibles', '1'),
(7, 'Orang jenggot', 'hua hua', '12.png', 'Collectibles', '1'),
(8, 'Gorilla ganteng', 'uu aa', '3.png', 'Collectibles', '0'),
(9, 'Monyet bosen', 'hoammm', '32.png', 'Photography', '1'),
(10, 'Naga Mabok', 'Buzzzzz', '34.gif', 'Photography', '1'),
(11, 'Pinguin pesta', 'Buzzzzz', '23.png', 'Photography', '1'),
(12, 'Pinguin mohak', 'Buzzzzz', '24.png', 'Photography', '1'),
(13, 'Pinguin viking', 'Buzzzzz', '21.png', 'Photography', '1'),
(14, 'Anjing nyuri', 'GuK guuuukk', '30.png', 'Music', '1'),
(15, 'Anjing koboy', 'GuK guuuukk', '29.png', 'Music', '1'),
(16, 'Anjing covid', 'GuK guuuukk', '28.png', 'Music', '1'),
(17, 'Singa ngeroko', 'Haummm', '26.jpg', 'Sports', '1'),
(18, 'Monyet gaje', 'uuaa', '16.png', 'Sports', '1'),
(19, 'Monyet gaul', 'uuaa', '15.png', 'Sports', '1'),
(20, 'Orang mohak swag', 'swagssss', '13.png', 'Trading Cards', '1'),
(21, 'Anjing Sketing', 'swagssss', '4.png', 'Trading Cards', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `wallet_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `wallet_id`, `name`) VALUES
(2101, 'erli123', 'erligurning5@gmail.com', 'rahasia', 1, 'erli'),
(2102, 'felicia123', 'nelvinafelicia@gmail.com', 'rahasia123', 2, 'felicia'),
(2103, 'ruzz', 'yuuarifin@gmail.com', 'rahasia123', 3, 'Fairuz'),
(2104, 'aaa', 'adasd@gmail.com', 'a', NULL, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `user_id` int(11) NOT NULL,
  `fund_eth` double(30,10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`user_id`, `fund_eth`) VALUES
(2101, 210.0000000000),
(2102, 984.0000000000),
(2103, 74.3550000000),
(2104, 1163.0000000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`nft_id`),
  ADD KEY `fk_nft_id` (`nft_id`);

--
-- Indexes for table `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_fk_nft_id` (`nft_id`);

--
-- Indexes for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `nft_id` (`nft_id`);

--
-- Indexes for table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nft_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `wallet_id` (`wallet_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2105;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `fk_nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`);

--
-- Constraints for table `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  ADD CONSTRAINT `fk_fk_nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD CONSTRAINT `nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
