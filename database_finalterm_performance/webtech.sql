-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 06:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`) VALUES
(2, 'arif', '456', 'arif@gmail.com', 'user'),
(3, 'ashik', '78', 'ashik@gmail.com', 'user'),
(4, 'alip', '90', 'alip@gmail.com', 'user'),
(7, 'atik', '345', 'atikfoysal001@gmail.com', 'user'),
(8, 'atik', '678', 'atikfoysal001@gmail.com', 'user'),
(11, 'atik', '678', 'atikfoysal001@gmail.com', 'user'),
(13, 'atik', '789', 'atikfoysal001@gmail.com', 'user'),
(14, 'arif', '987', 'atifshan7@gmail.com', 'user'),
(16, 'atik', '459', 'atikfoysal001@gmail.com', 'user'),
(17, 'atik', '876', 'atikfoysal001@gmail.com', 'user'),
(18, 'atik', '54', 'atikfoysal001@gmail.com', 'user'),
(21, 'atik', '543', 'atikfoysal001@gmail.com', 'user'),
(22, 'atik', '24', 'atikfoysal001@gmail.com', 'user'),
(23, 'atik', '5670', 'atikfoysal001@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
