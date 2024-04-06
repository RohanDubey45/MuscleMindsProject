-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muscleminds`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `date`) VALUES
(1, 'rohan', 'dubeynrohan@gmail.com', '09867464545', 'good workouts here', '2024-02-07 05:29:48', '2024-02-07 06:02:13'),
(3, 'Dheeraj Pandey', 'dheerajpandeyDP@gmail.com', '8928257010', 'fklsflanmfkl', '2024-02-07 05:33:09', '2024-02-07 06:02:13'),
(7, 'Uzumaki Boruto', 'borutouzumaki_45@gmail.com', '08928257010', 'sfsm,fkwl', '2024-02-07 05:53:29', '2024-02-07 06:02:13'),
(8, 'rohan', 'dubeynrohan@gmail.com', '09867464545', 'can i take supplements like creatine', '2024-02-07 06:04:08', '2024-02-07 06:04:08'),
(9, 'kakashi', 'dubeynrohan@gmail.com', '9869583583', 'very good website', '2024-02-12 14:15:52', '2024-02-12 14:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback_type` varchar(50) NOT NULL,
  `feedback_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `full_name`, `email`, `feedback_type`, `feedback_message`, `created_at`) VALUES
(1, 'Uzumaki Boruto', 'borutouzumaki_45@gmail.com', 'positive', 'very best website i like it', '2024-02-06 05:24:52'),
(2, 'rohan', 'dubeynrohan@gmail.com', 'positive', 'very best website i like it good', '2024-02-06 05:27:45'),
(3, 'Uchiha_Sasuke', 'sasukeuchiha44@gmail.com', 'positive', 'best website i have ever visited', '2024-02-06 05:52:44'),
(4, 'Rohan dubey', 'dubeynrohan@gmail.com', 'positive', 'mbnbnmb', '2024-02-06 05:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password_hash`) VALUES
(1, 'dubeynrohan@gmail.com', '$2y$10$7k2pH2Lz8QGvM5rQjJRbQOTTc2fOo3Sy3id/.6w7LWzdasqRb0XIq'),
(4, 'rohan123@gmail.com', '$2y$10$tKXEfArBc/MeFx5jbbtlIeV9QhQmlyLcqq5/PIJIYQ0M4JvVIe30u'),
(5, 'om@gmail.com', '$2y$10$/ploA9SuzcVc2m./28L7wuz/8Mh8gt8PZGJLXqfoqU6giWryGbqGq'),
(6, 'rd4852642@gmail.com', '$2y$10$15iBjKm6fg0u54bgqw5jE..dumGSEvAAphIJdngKYqtLTh2yr1IHK'),
(7, 'riddhesh@gmail.com', '$2y$10$bl3Ky52WHTjMyIfw8yRCv.FSeMeUo7kF1BSwirSpelN9ItAi.9fJG'),
(8, 'sahil@gmail.com', '$2y$10$MdUxmip4XesgbcqN6kW3O.tuigWsd5Dxq7J61GvXEuXNZ.dU/4k66'),
(9, 'sahil45@gmail.com', '$2y$10$nMKnxsL3lkWysrJY6n03uuGhW97xLkaHjpabaqWbUEa6PYdX/i2ZO');

-- --------------------------------------------------------

--
-- Table structure for table `user_health_info`
--

CREATE TABLE `user_health_info` (
  `id` int(11) NOT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `water_intake` varchar(10) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_health_info`
--

INSERT INTO `user_health_info` (`id`, `weight`, `height`, `age`, `gender`, `water_intake`, `submission_date`, `name`) VALUES
(8, 54, 170, 20, 'male', '2L', '2024-02-07 06:19:42', 'rohan'),
(9, 65, 172, 20, 'male', '2L', '2024-02-07 06:20:42', 'Dheeraj Pandey'),
(10, 70, 160, 23, 'male', '2L', '2024-02-12 14:21:45', 'Raju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_health_info`
--
ALTER TABLE `user_health_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_health_info`
--
ALTER TABLE `user_health_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
