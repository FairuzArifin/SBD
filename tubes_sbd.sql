-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:41 AM
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
-- Database: `tubes_sbd`
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
(3101, 2.0050000000, '2022-05-23 05:00:41', '2022-06-15 05:00:41', 2.0060000000);

-- --------------------------------------------------------

--
-- Table structure for table `bid_ongoing`
--

CREATE TABLE `bid_ongoing` (
  `bid_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nft_id` int(11) DEFAULT NULL,
  `bid_ongoing` double(30,10) UNSIGNED NOT NULL,
  `bid_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `user_id` int(11) NOT NULL,
  `nft_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepemilikan`
--

INSERT INTO `kepemilikan` (`user_id`, `nft_id`) VALUES
(2101, 3101),
(2102, 3102);

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` text DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `suka` int(11) NOT NULL,
  `status_nft` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`nft_id`, `title`, `description`, `photo`, `category`, `suka`, `status_nft`) VALUES
(3101, 'air terjun', 'air terjun yang berada dipulau samosir', '', 'alam', 3, NULL),
(3102, 'semangat', 'penyemangat di pagi hari', NULL, 'art', 1, NULL);

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
  `name` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(3) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `wallet_id`, `name`, `about`, `date_of_birth`, `age`, `country`, `address`) VALUES
(2101, 'erli123', 'erligurning5@gmail.com', 'rahasia123', 1, 'erli', 'alam', '2003-07-31', 18, 'indonesia', 'medan selayang'),
(2102, 'felicia123', 'nelvinafelicia@gmail.com', 'rahasia123', 2, 'felicia', 'gunung', '2003-05-16', 19, 'indonesia', 'medan selayang');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `fund_eth` double(30,10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `fund_eth`) VALUES
(1, 100.1000000000),
(2, 200.1000000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`nft_id`);

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
  ADD PRIMARY KEY (`user_id`),
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
  ADD KEY `wallet_id` (`wallet_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2104;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `wallet_id` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
