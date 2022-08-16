-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 08:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) UNSIGNED NOT NULL,
  `flight_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` int(10) UNSIGNED NOT NULL,
  `seat_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canceled` int(5) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `schedule_id`, `flight_id`, `total_amount`, `seat_num`, `canceled`, `date`, `class`) VALUES
(10, 4, 5, 2, 1180, '2-1660478953', 1, '2022-08-16', '1'),
(11, 4, 8, 1, 9440, '1-1660486426', 1, '2022-09-03', '1'),
(12, 4, 4, 3, 236, '3-1660487487', 0, '2022-08-25', '1'),
(13, 4, 21, 6, 3481, '6-1660487552', 0, '2022-08-27', '1'),
(14, 5, 10, 3, 9440, '3-1660495915', 0, '2022-08-17', '2'),
(15, 4, 14, 4, 7670, '4-1660496104', 0, '2022-08-25', '2'),
(16, 6, 15, 1, 17818, '1-1660499477', 0, '2022-09-01', '3'),
(17, 6, 15, 1, 17818, '1-1660499656', 0, '2022-09-01', '3'),
(18, 4, 18, 6, 8496, '6-1660502598', 0, '2022-08-26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(6, 'Chennai'),
(7, 'Bangalore'),
(9, 'Mumbai'),
(10, 'United States'),
(11, 'London'),
(12, 'Srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `mobile`, `email`, `message`) VALUES
(14, 'Aravindh', '7890342516', 'aravindh@gmail.com', 'nice website <3');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `name`, `icon`) VALUES
(1, 'Air Asia', 'icon/airasia.png'),
(2, 'Air India', 'icon/airindia.png'),
(3, 'Go Air', 'icon/goair.png'),
(4, 'IndiGo', 'icon/indigo.png'),
(6, 'SpiceJet', 'icon/spicejet.png');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_city_id` bigint(20) UNSIGNED NOT NULL,
  `to_city_id` bigint(20) UNSIGNED NOT NULL,
  `flight` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `price` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `from_city_id`, `to_city_id`, `flight`, `date`, `departure`, `arrival`, `price`) VALUES
(1, 6, 7, 1, '2022-08-01', '06:36:52', '21:36:52', 5000),
(3, 6, 9, 2, NULL, '10:00:00', '12:00:00', 100),
(4, 7, 9, 3, NULL, '02:00:00', '02:30:00', 200),
(5, 6, 7, 2, NULL, '11:00:00', '22:00:00', 500),
(7, 9, 6, 6, NULL, '10:30:00', '17:55:00', 500),
(8, 6, 10, 1, NULL, '19:57:00', '06:00:00', 8000),
(9, 7, 11, 4, NULL, '21:03:00', '07:59:00', 7350),
(10, 10, 12, 3, NULL, '12:46:00', '02:04:00', 8000),
(11, 6, 12, 2, NULL, '18:06:00', '00:10:00', 2500),
(12, 6, 11, 6, NULL, '19:10:00', '10:10:00', 8370),
(13, 9, 7, 2, NULL, '18:10:00', '22:12:00', 1900),
(14, 9, 10, 4, NULL, '07:15:00', '01:45:00', 6500),
(15, 9, 11, 1, NULL, '05:30:00', '00:15:00', 7550),
(16, 9, 12, 3, NULL, '15:30:00', '21:15:00', 4000),
(17, 7, 6, 6, NULL, '06:31:00', '10:17:00', 2750),
(18, 7, 10, 6, NULL, '08:10:00', '01:30:00', 7200),
(19, 7, 12, 2, NULL, '09:15:00', '15:20:00', 3500),
(20, 10, 6, 1, NULL, '00:32:00', '13:40:00', 8230),
(21, 12, 9, 6, NULL, '09:15:00', '03:17:00', 2950),
(22, 6, 9, 3, NULL, '13:26:00', '17:49:00', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `state`, `country`, `mobile`, `email`, `password`) VALUES
(4, 'Anirudh', 'S', 'OMR', 'Chennai', 'Tamilnadu', 'India', '7890123456', 'anirudh@gmail.com', '12345'),
(5, 'Shreyas', 'S', 'OMR', 'Chennai', 'Tamilnadu', 'India', '7010902920', 'shreyas@gmail.com', '12345'),
(6, 'Aravindh', 'R', 'Nanganallur', 'Chennai', 'Tamilnadu', 'India', '7890342516', 'aravindh@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight_id` (`flight_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight` (`flight`),
  ADD KEY `from_city_id` (`from_city_id`),
  ADD KEY `to_city_id` (`to_city_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`flight`) REFERENCES `flights` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`from_city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_3` FOREIGN KEY (`to_city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
