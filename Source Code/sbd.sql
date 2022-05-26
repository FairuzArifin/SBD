-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2022 pada 09.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bid`
--

CREATE TABLE `bid` (
  `nft_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `start_bid_price` double(30,10) UNSIGNED NOT NULL,
  `auction_start` datetime NOT NULL,
  `auction_end` datetime NOT NULL,
  `buy_now` double(30,10) UNSIGNED NOT NULL,
  `status_bid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bid_ongoing`
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
-- Struktur dari tabel `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `user_id` int(11) DEFAULT NULL,
  `nft_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nft`
--

CREATE TABLE `nft` (
  `nft_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `category` varchar(20) NOT NULL,
  `suka` int(11) NOT NULL,
  `status_nft` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `wallet_id`, `name`, `about`, `date_of_birth`, `age`, `country`, `address`) VALUES
(2101, 'erli123', 'erligurning5@gmail.com', 'rahasia123', 1, 'erli', 'alam', '2003-07-31', 18, 'indonesia', 'medan selayang'),
(2102, 'felicia123', 'nelvinafelicia@gmail.com', 'rahasia123', 2, 'felicia', 'gunung', '2003-05-16', 19, 'indonesia', 'medan selayang'),
(2103, 'ruzz', 'yuuarifin@gmail.com', 'rahasia123', 3, 'Fairuz', '', '0000-00-00', 0, '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `fund_eth` double(30,10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `fund_eth`) VALUES
(1, 100.1000000000),
(2, 200.1000000000),
(3, 3.0000000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bid`
--
ALTER TABLE `bid`
  ADD KEY `user_seller` (`seller_id`),
  ADD KEY `user_buyer` (`buyer_id`),
  ADD KEY `fk_nft_id` (`nft_id`);

--
-- Indeks untuk tabel `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_fk_nft_id` (`nft_id`);

--
-- Indeks untuk tabel `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `nft_id` (`nft_id`);

--
-- Indeks untuk tabel `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nft_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD KEY `wallet_id` (`wallet_id`);

--
-- Indeks untuk tabel `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2104;

--
-- AUTO_INCREMENT untuk tabel `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `fk_nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`);

--
-- Ketidakleluasaan untuk tabel `bid_ongoing`
--
ALTER TABLE `bid_ongoing`
  ADD CONSTRAINT `fk_fk_nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD CONSTRAINT `nft_id` FOREIGN KEY (`nft_id`) REFERENCES `nft` (`nft_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `wallet_id` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`wallet_id`) REFERENCES `user` (`wallet_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
