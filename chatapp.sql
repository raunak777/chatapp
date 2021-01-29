-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2021 at 03:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_box`
--

CREATE TABLE `message_box` (
  `msg_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_box`
--

INSERT INTO `message_box` (`msg_id`, `sender_id`, `receiver_id`, `message`) VALUES
(1, 3, 4, 'Hello'),
(2, 4, 3, 'Hiii');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `user_name`, `user_mobile`, `user_email`, `user_password`) VALUES
(3, 'Raunak', '77777777777', 'raunakyadav@gmail.com', '$2y$10$6NdBZbUzXBp6ymCqVf5rO.5CbF9nD/OFdHeBv4BnJ3aM8F5VTBdzy'),
(4, 'Sumit', '5555555555', 'sumit@gmail.com', '$2y$10$W9jMTUsKnwiNjWkqA91DCeyYbvY/fIIyjBURhR42XAaMeltUx042y'),
(5, 'Gaurav', '666666666666', 'gaurav@gmail.com', '$2y$10$sfqUiMD29n4zqSMy5o3UEexEkMqZQ8XAbZNvd7UCure2PoO.9Pksy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_box`
--
ALTER TABLE `message_box`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_box`
--
ALTER TABLE `message_box`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
