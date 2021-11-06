-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 08:21 AM
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
-- Database: `sauce`
--

-- --------------------------------------------------------

--
-- Table structure for table `sauce`
--

CREATE TABLE `sauce` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `instorage` int(11) NOT NULL,
  `refilldate` date NOT NULL,
  `type` varchar(45) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `hotlvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `sauce`
--

INSERT INTO `sauce` (`id`, `name`, `instorage`, `refilldate`, `type`, `hotlvl`) VALUES
(1, 'ketchup', 25, '2021-11-01', 'savanyú', 0),
(4, 'Majonéz', 65, '2021-06-22', 'sós', 0),
(6, 'Mustár', 56, '2021-10-26', 'sós', 1),
(7, 'Chili szósz', 12, '2021-09-16', 'savanyú', 4),
(8, 'Tartár', 89, '2021-11-05', 'sós', 0),
(9, 'ribizli', 45, '2021-10-14', 'édes', 0),
(10, 'édes savanyú', 128, '2021-11-01', 'savanyú', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sauce`
--
ALTER TABLE `sauce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
