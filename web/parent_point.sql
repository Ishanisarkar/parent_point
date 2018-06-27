-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 11:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parent_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_address` mediumtext NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_quanity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` int(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_description` longtext NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `product_name`, `product_category`, `product_description`, `image`, `price`) VALUES
(1, 'q', 'Girls', 'qq', 'C:\\xampp\\htdocs\\parents_point\\web\\admin./imgs/', 2),
(2, 'w', 'Girls', 'qa', 'C:\\xampp\\htdocs\\parents_point\\web\\adminimgs/', 20),
(456789, 'rfdeenhy', 'Girls', 'wsedrftgyh', 'C:\\xampp\\htdocs\\parents_point\\web\\admin\\imgs', 456789);

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_description` longtext NOT NULL,
  `image` varchar(5000) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `product_name`, `product_category`, `product_description`, `image`, `price`) VALUES
(21, '23wse', 'Pensnpencil', 'dswer', 'C:\\xampp\\htdocs\\parents_point\\web\\admin\\imgs', 34),
(23, 'ws', 'Notebooks', 'qa', 'C:\\xampp\\htdocs\\parents_point\\web\\admin\\imgs', 34);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Sarkar Ishani', 'i@gmail.com', '099b3b060154898840f0'),
('Ishani SARKAR', 'is@gmail.com', '7694f4a66316e53c8cdd'),
('', 'ishani', 'ishu'),
('Ishani SARKAR', 'ishani.srkr22@gmail.com', '099b3b060154898840f0'),
('qqq', 'w@gmail.com', 'w');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
