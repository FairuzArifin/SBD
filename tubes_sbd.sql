-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< Updated upstream
-- Generation Time: May 26, 2022 at 06:56 PM
=======
-- Generation Time: May 26, 2022 at 05:43 PM
>>>>>>> Stashed changes
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

--
-- Dumping data for table `bid_ongoing`
--

INSERT INTO `bid_ongoing` (`bid_id`, `user_id`, `nft_id`, `bid_ongoing`, `bid_time`) VALUES
(1, 2101, 3101, 2.0000000000, '2022-05-26 15:21:20'),
(2, 2101, 3101, 3.0000000000, '2022-05-26 15:22:27'),
(4, 2101, 3101, 4.0000000000, '2022-05-26 15:50:15'),
(5, 2101, 3101, 4.0000000000, '2022-05-26 15:50:32'),
(6, 2101, 3101, 3.0000000000, '2022-05-26 15:51:01'),
(7, 2101, 3101, 3.0000000000, '2022-05-26 16:02:48'),
(8, 2101, 3101, 5.0000000000, '2022-05-26 16:05:04'),
(9, 2101, 3101, 12.0000000000, '2022-05-26 16:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `user_id` int(11) NOT NULL,
  `nft_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `suka` int(11) NOT NULL,
  `status_nft` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `wallet_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

<<<<<<< Updated upstream
INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `wallet_id`, `name`, `about`, `date_of_birth`, `age`, `country`, `address`) VALUES
(2101, 'erli123', 'erligurning5@gmail.com', 'rahasia123', 1, 'erli', 'alam', '2003-07-31', 18, 'indonesia', 'medan selayang'),
(2102, 'felicia123', 'nelvinafelicia@gmail.com', 'rahasia123', 2, 'felicia', 'gunung', '2003-05-16', 19, 'indonesia', 'medan selayang'),
(2104, 'asdasda', 'test@gmail.com', '$2y$10$kk9iX.IQ5Czhu', NULL, 'asdasd', '', '0000-00-00', 0, '', '');
=======
INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `wallet_id`, `name`) VALUES
(2101, 'erli123', 'erligurning5@gmail.com', 'rahasia123', 1, 'erli'),
(2102, 'felicia123', 'nelvinafelicia@gmail.com', 'rahasia123', 2, 'felicia'),
(2103, 'ruzz', 'yuuarifin@gmail.com', 'rahasia123', 3, 'Fairuz');
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
(1, 100.1000000000),
(2, 200.1000000000),
(3, 3.0000000000);
=======
(1, 162.4100000000),
(2, 262.4100000000),
(3, 74.3550000000);
>>>>>>> Stashed changes

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
  ADD PRIMARY KEY (`user_id`),
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
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2105;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
<<<<<<< Updated upstream
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> Stashed changes

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
  ADD CONSTRAINT `wallet_id` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`) ON UPDATE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`wallet_id`) REFERENCES `user` (`wallet_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
