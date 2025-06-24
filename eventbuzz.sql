-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 02:36 PM
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
-- Database: `eventbuzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `username`, `phone`, `city`, `event_date`, `package_name`, `created_at`) VALUES
(1, 'mahnoornazar0@gmail.com', '123', 'karachi', '2025-01-25', '', '2025-01-16 14:58:06'),
(2, 'mahnoornazar0@gmail.com', '03164068060', 'karachi', '2025-01-24', '', '2025-01-16 15:00:17'),
(3, 'mahnoornazar0@gmail.com', '03164068060', 'lahore', '2025-02-08', '', '2025-01-16 15:04:19'),
(4, 'hamna', '123456789', 'faisalabad', '2025-01-24', '', '2025-01-16 15:08:10'),
(5, 'hamna', '123456789', 'faisalabad', '2025-01-24', '', '2025-01-16 15:09:34'),
(6, 'hamna', '123456789', 'faisalabad', '2025-01-24', '', '2025-01-16 15:09:38'),
(7, 'mahnoornazar0@gmail.com', '123', 'multan', '2025-02-01', 'Unknown Package', '2025-01-16 15:11:55'),
(8, '2022-ag-8054', '03164068060', 'multan', '2025-02-06', 'Unknown Package', '2025-01-16 15:17:03'),
(9, '2022-ag-8054', '03164068060', 'multan', '2025-02-06', 'Unknown Package', '2025-01-16 15:19:14'),
(10, '2022-ag-8054', '03164068060', 'sheikhupura', '2025-02-06', 'Unknown Package', '2025-01-16 15:19:21'),
(11, '8054', '03164068060', 'sheikhupura', '2025-02-06', 'Unknown Package', '2025-01-16 15:20:11'),
(12, '805434', '03164068060', 'sheikhupura', '2025-02-06', 'Unknown Package', '2025-01-16 15:21:09'),
(13, '1234567', '03164068060', 'sheikhupura', '2025-02-06', 'Unknown Package', '2025-01-16 15:25:00'),
(14, ' mahnoor', '03164068060', 'lahore', '2025-01-22', 'Unknown Package', '2025-01-16 15:28:47'),
(15, 'hamna', '123', 'faisalabad', '2025-01-16', '', '2025-01-16 15:37:48'),
(16, 'hamna', '123', 'faisalabad', '2025-01-16', 'Official Dinners', '2025-01-16 15:38:14'),
(17, 'Hmana Nazar', '03164068060', 'multan', '2025-02-08', 'Official Dinners', '2025-01-16 15:48:34'),
(18, ' mahnoor', '090078691', 'faisalabad', '2025-01-23', 'Official Dinners', '2025-01-16 15:55:23'),
(19, 'mahnoornazar0@gmail.com', '03164068060', 'karachi', '2025-02-07', 'Official Dinners', '2025-01-16 15:58:20'),
(20, 'jaweria ', '876543', 'faisalabad', '2025-02-06', 'Birthday Package', '2025-01-16 16:05:54'),
(21, 'mamoona', '45678', 'faisalabad', '2025-03-14', 'Wedding Package', '2025-01-16 16:08:00'),
(22, '2022-ag-8054', '123', 'karachi', '2025-01-31', 'Wedding Package', '2025-01-16 17:02:26'),
(23, 'mahnoornazar0@gmail.com', '03164068060', 'karachi', '2025-01-17', 'Wedding Package', '2025-01-17 03:15:58'),
(24, '2022-ag-8054', '123', 'faisalabad', '2025-02-07', 'Graduation Party', '2025-01-17 03:27:44'),
(25, 'mahnoornazar0@gmail.com', '123', 'lahore', '2025-01-17', '', '2025-01-17 03:30:16'),
(26, 'mahnoornazar0@gmail.com', '123', 'lahore', '2025-01-17', '', '2025-01-17 03:30:46'),
(27, 'mahnoornazar0@gmail.com', '123', 'lahore', '2025-01-17', '', '2025-01-17 03:31:25'),
(28, 'mahnoornazar0@gmail.com', '123', 'lahore', '2025-01-17', '', '2025-01-17 03:32:08'),
(29, 'mahnoornazar0@gmail.com', '03164068060', 'karachi', '2025-02-08', 'Official Dinners', '2025-01-17 03:35:11'),
(30, 'mahnoornazar0@gmail.com', '123', 'faisalabad', '2025-01-24', 'Official Dinners', '2025-01-17 03:37:04'),
(31, '2022-ag-8054', '123', 'multan', '2025-01-24', 'Birthday Package', '2025-01-17 03:39:57'),
(32, '2022-ag-8054', '123', 'multan', '2025-01-24', 'Birthday Package', '2025-01-17 03:40:43'),
(33, '2022-ag-8054', '123', 'multan', '2025-01-24', 'Birthday Package', '2025-01-17 03:41:56'),
(34, '2022-ag-8054', '123', 'multan', '2025-01-24', 'Birthday Package', '2025-01-17 03:43:45'),
(35, ' mahnoor', '45678', 'faisalabad', '2025-01-17', 'Birthday Package', '2025-01-17 03:49:18'),
(36, 'mahnoornazar0@gmail.com', '123', 'karachi', '2025-02-01', 'Graduation Party', '2025-01-17 06:06:23'),
(37, 'hamna', '03164068060', 'faisalabad', '2025-02-01', 'Birthday Package', '2025-01-17 07:23:51'),
(38, 'a.m', '09876543', 'lahore', '2025-01-23', 'Graduation Party', '2025-01-17 13:48:54'),
(39, 'MEERAB NAZAR', '0313 4410225', 'lahore', '2025-02-07', 'Graduation Party', '2025-01-25 16:49:30'),
(40, 'Hamna Nazar', '03164068060', 'sheikhupura', '2025-02-06', 'Official Dinners', '2025-02-05 15:59:28'),
(41, '2022-ag-8054', '03164068060', 'faisalabad', '2025-03-14', 'Birthday Package', '2025-03-08 17:07:42'),
(42, 'MEERAB NAZAR', '123327652', 'lahore', '2025-04-01', 'Official Dinners', '2025-03-16 15:27:01'),
(43, 'hamna', '03164068060', 'faisalabad', '2025-06-07', 'Official Dinners', '2025-05-03 12:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'math', 'hi'),
(2, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'math', 'ok'),
(3, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', ''),
(4, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'good'),
(5, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'good'),
(6, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'math', 'h'),
(7, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'weldone'),
(8, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'weldone'),
(9, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'hi'),
(10, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'j', 'good'),
(11, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'math', 'n'),
(12, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'new', 'shabaash'),
(13, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'good '),
(14, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'new', 'kkkkkkkkkk'),
(15, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'all good'),
(16, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'GOOD'),
(17, 'saba fatima', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'good work'),
(18, 'meerab', 'mahnoornazar0@gmail.com', '03164068060', 'feedback', 'good ok h'),
(19, 'MEERAB ', 'MEERAB7@gmail.com', '0313 4410225', 'feedback', 'I booked the graduation party event, that was very amazing. THANK YOU eventbuzz.'),
(20, 'Hamna Nazar', 'mahnoornazar7@gmail.com', '03164068060', 'Feedback', 'everything is good.'),
(21, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'hi how r u?'),
(22, 'Meerab Nazar', 'merab@gmail.com', '1234567', 'Feedback', 'Dinner was so good'),
(23, 'MAHNOOR NAZAR', 'mahnoornazar7@gmail.com', '03164068060', 'feedback', 'event is great\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
