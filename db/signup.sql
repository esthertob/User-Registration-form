-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 08:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `email`) VALUES
(1, 'T', '$2y$10$sSQZ7BHc5/ozS59.i0B2LeMOwJPCaEiA/SqQxhkly5jz99p.oKBSi', 'esr@gmail.com'),
(2, 'tobystar', '$2y$10$8sQa2pzLeogbqF.PzYlttuVdYC59hwqlYsqLAwgIhB3F1ZG0HD7RS', 'esthertoby99@gmail.com'),
(3, 'exceltoby', '$2y$10$URFTiLS1icYHZEUmzvEDfePTE0rbgNztcB.WWB3L/E0HYifXJmNU6', 'qwe@gmail.com'),
(4, 'we', '$2y$10$s34y/Zqf2Wmi0W89cnP6sOUTvh3xUi1JyvPynNqS4VyGyeYbQCWYW', 'qwd@gmail.com'),
(5, 'Gold', '$2y$10$CELNQ0tuP5X9RMx4lg8JGu0l0dUiCRNgoM9rs/JGpnUZ4b02TnxGu', 'Gold@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
