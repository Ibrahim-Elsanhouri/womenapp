-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 07:51 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womenapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('ibrahim', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `arrange`
--

CREATE TABLE `arrange` (
  `arrange_id` int(11) NOT NULL,
  `arrange_name` varchar(50) NOT NULL,
  `hi_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `arrange_order`
--

CREATE TABLE `arrange_order` (
  `arrange_id` int(11) NOT NULL,
  `aorder_id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `arrange_products`
--

CREATE TABLE `arrange_products` (
  `arrange_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asks`
--

CREATE TABLE `asks` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` varchar(250) NOT NULL,
  `ask_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `beauty`
--

CREATE TABLE `beauty` (
  `email` varchar(50) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `cos_id` int(11) NOT NULL,
  `cos_name` varchar(50) NOT NULL,
  `hi_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos_order`
--

CREATE TABLE `cos_order` (
  `corder_id` int(11) NOT NULL,
  `cos_id` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  `time` date NOT NULL,
  `products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos_products`
--

CREATE TABLE `cos_products` (
  `cos_id` int(11) NOT NULL,
  `cos_products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fit`
--

CREATE TABLE `fit` (
  `email` varchar(50) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hi`
--

CREATE TABLE `hi` (
  `hi_id` int(11) NOT NULL,
  `hi_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `hi_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_order`
--

CREATE TABLE `photo_order` (
  `photo_id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saloons`
--

CREATE TABLE `saloons` (
  `saloon_id` int(11) NOT NULL,
  `saloon_name` varchar(50) NOT NULL,
  `hi_id` int(11) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saloon_order`
--

CREATE TABLE `saloon_order` (
  `saloon_id` int(11) NOT NULL,
  `sorder_id` int(11) NOT NULL,
  `mobile` int(10) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `products` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saloon_products`
--

CREATE TABLE `saloon_products` (
  `saloon_id` int(11) NOT NULL,
  `saloon_products` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `arrange`
--
ALTER TABLE `arrange`
  ADD PRIMARY KEY (`arrange_id`),
  ADD KEY `hi_id` (`hi_id`);

--
-- Indexes for table `arrange_order`
--
ALTER TABLE `arrange_order`
  ADD PRIMARY KEY (`aorder_id`),
  ADD KEY `arrange_id` (`arrange_id`);

--
-- Indexes for table `arrange_products`
--
ALTER TABLE `arrange_products`
  ADD KEY `arrange_id` (`arrange_id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`cos_id`),
  ADD KEY `hi_id` (`hi_id`) USING BTREE;

--
-- Indexes for table `cos_order`
--
ALTER TABLE `cos_order`
  ADD PRIMARY KEY (`corder_id`),
  ADD KEY `cos_id` (`cos_id`);

--
-- Indexes for table `cos_products`
--
ALTER TABLE `cos_products`
  ADD KEY `cos_id` (`cos_id`);

--
-- Indexes for table `hi`
--
ALTER TABLE `hi`
  ADD PRIMARY KEY (`hi_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `hi_id` (`hi_id`);

--
-- Indexes for table `photo_order`
--
ALTER TABLE `photo_order`
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `saloons`
--
ALTER TABLE `saloons`
  ADD PRIMARY KEY (`saloon_id`);

--
-- Indexes for table `saloon_order`
--
ALTER TABLE `saloon_order`
  ADD PRIMARY KEY (`sorder_id`),
  ADD KEY `saloon_id` (`saloon_id`);

--
-- Indexes for table `saloon_products`
--
ALTER TABLE `saloon_products`
  ADD KEY `saloon_id` (`saloon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrange`
--
ALTER TABLE `arrange`
  MODIFY `arrange_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `arrange_order`
--
ALTER TABLE `arrange_order`
  MODIFY `aorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cos_order`
--
ALTER TABLE `cos_order`
  MODIFY `corder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hi`
--
ALTER TABLE `hi`
  MODIFY `hi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `saloons`
--
ALTER TABLE `saloons`
  MODIFY `saloon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `saloon_order`
--
ALTER TABLE `saloon_order`
  MODIFY `sorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arrange`
--
ALTER TABLE `arrange`
  ADD CONSTRAINT `arrange_ibfk_1` FOREIGN KEY (`hi_id`) REFERENCES `hi` (`hi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `arrange_order`
--
ALTER TABLE `arrange_order`
  ADD CONSTRAINT `arrange_order_ibfk_1` FOREIGN KEY (`arrange_id`) REFERENCES `arrange` (`arrange_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `arrange_products`
--
ALTER TABLE `arrange_products`
  ADD CONSTRAINT `arrange_products_ibfk_1` FOREIGN KEY (`arrange_id`) REFERENCES `arrange` (`arrange_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cos`
--
ALTER TABLE `cos`
  ADD CONSTRAINT `cos_ibfk_1` FOREIGN KEY (`hi_id`) REFERENCES `hi` (`hi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cos_order`
--
ALTER TABLE `cos_order`
  ADD CONSTRAINT `cos_order_ibfk_1` FOREIGN KEY (`cos_id`) REFERENCES `cos` (`cos_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cos_products`
--
ALTER TABLE `cos_products`
  ADD CONSTRAINT `cos_products_ibfk_1` FOREIGN KEY (`cos_id`) REFERENCES `cos` (`cos_id`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`hi_id`) REFERENCES `hi` (`hi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo_order`
--
ALTER TABLE `photo_order`
  ADD CONSTRAINT `photo_order_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saloon_order`
--
ALTER TABLE `saloon_order`
  ADD CONSTRAINT `saloon_order_ibfk_1` FOREIGN KEY (`saloon_id`) REFERENCES `saloons` (`saloon_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saloon_products`
--
ALTER TABLE `saloon_products`
  ADD CONSTRAINT `saloon_products_ibfk_1` FOREIGN KEY (`saloon_id`) REFERENCES `saloons` (`saloon_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
