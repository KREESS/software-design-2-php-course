-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 05:03 PM
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
-- Database: `komputer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `brand`, `model`, `processor`, `ram`) VALUES
(5, 'Dell', 'Inspiron 15', 'Intel Core i5', 8),
(6, 'Dell', 'Inspiron 15', 'Intel Core i5', 8),
(7, 'Asus', 'VivoBook', 'Ryzen 9', 8),
(8, 'Asus', 'VivoBook', 'Ryzen 9', 8),
(10, 'Asus', 'VivoBook', 'Ryzen 9', 10),
(11, 'Asus', 'Zenbook', 'Intel i7', 16),
(12, 'Dell', 'Inspiron', 'AMD Ryzen 5', 8),
(13, 'HP', 'Pavilion', 'Intel i5', 12),
(15, 'HP', 'Pavilion', 'Intel Core i9', 64),
(16, 'Asus', 'Zenbook', 'AMD Ryzen 9', 32),
(17, 'Asus', 'Zenbook', 'AMD Ryzen 9', 32),
(18, 'Asus', 'Zenbook', 'AMD Ryzen 9', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
