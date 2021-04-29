-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 05:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `experince` varchar(120) NOT NULL,
  `height` varchar(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `profileImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `dob`, `email`, `phone`, `gender`, `type`, `state`, `county`, `zip`, `experince`, `height`, `username`, `password`, `about`, `profileImage`) VALUES
(16, 'TEST', 'TEST', '2021-04-28', 'ivy@gmail.com', 2541778, ' female', 'on', 'Kenya', 'elgeyo marakwet', '22222', 'expert', '4.5', 'test@gmail.com', ' kkkkkkk', 'I am a model', 'Model1.jpg'),
(17, 'James', 'James', '2021-04-28', 'ww@gmail.com', 4544555, ' male', 'on', 'Kenya', 'busia', '22222', 'intermediate', '4.5', 'test@gmail.com', ' 123456', 'I am a model', 'modelm1.png'),
(18, 'TEST', 'TEST', '2021-04-28', 'ivy@gmail.com', 4544555, ' female', 'on', 'Kenya', 'homa bay', '555', 'intermediate', '4.5', 'test@gmail.com', ' 123456', 'I am a model', 'model7.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
