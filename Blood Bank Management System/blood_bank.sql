-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 07:03 AM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodGroup` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL DEFAULT 'Available',
  `mobileNumber` varchar(20) NOT NULL,
  `profilePicture` varchar(255) NOT NULL DEFAULT '../assets/images/avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `username`, `name`, `age`, `gender`, `bloodGroup`, `address`, `availability`, `mobileNumber`, `profilePicture`) VALUES
(1, 'donor1', 'Donor 1', 20, 'Male', 'A+', 'Green Road, Dhaka', 'Available', '0123456789', '../assets/images/avatar.jpg'),
(2, 'donor2', 'Donor 2', 44, 'Female', 'B-', 'Mymensingh', 'Available', '0115564889', '../assets/images/avatar.jpg'),
(3, 'donor3', 'Donor 3', 35, 'Male', 'AB+', 'Sylhet', 'Available', '0126586489', '../assets/images/avatar.jpg'),
(4, 'donor4', 'Donor 4', 26, 'Female', 'O+', 'Berlin, Germany', 'Not Available', '1416546477', '../assets/images/avatar.jpg'),
(5, 'donor5', 'Donor 5', 50, 'Male', 'A+', 'Berlin, Germany', 'Available', '465441884', '../assets/images/avatar.jpg'),
(6, 'donor6', 'Donor 6', 54, 'Female', 'A-', 'Chittagong', 'Available', '15415110', '../assets/images/avatar.jpg'),
(7, 'donor7', 'Donor 7', 19, 'Male', 'B+', 'Sylhet', 'Available', '0444541454', '../assets/images/avatar.jpg'),
(8, 'donor8', 'Donor 8', 44, 'Male', 'AB-', 'Rajshahi', 'Available', '04154544484', '../assets/images/avatar.jpg'),
(9, 'donor9', 'Donor 9', 28, 'Male', 'O-', 'Noakhali', 'Available', '181215151', '../assets/images/avatar.jpg'),
(10, 'donor10', 'Donor 10', 35, 'Male', 'O+', 'Mymensingh', 'Available', '0154848165', '../assets/images/avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(100) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `bloodGroup`, `quantity`) VALUES
(3, 'A+', 10),
(4, 'A-', 2),
(5, 'B+', 8),
(6, 'B-', 4),
(7, 'O+', 5),
(8, 'O-', 0),
(9, 'AB+', 6),
(10, 'AB-', 30);

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`id`, `bloodGroup`, `location`, `date`, `mobileNumber`, `comment`, `owner`) VALUES
(2, 'O+', 'Evercare Hospital, Dhaka', '2023-11-14', '1446448', 'I need urgent B+ plasma on 14 Nov, 2023 at Evercare Hospital in Dhaka.\r\nIf anyone is available, please contact me using the mobile number given below.\r\n\r\nThanks in advance.                                             ', 'test'),
(5, 'A+', 'Berlin', '2023-11-21', '131566561', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test'),
(8, 'B+', 'Mymensingh', '2023-11-15', '0544545514', 'Nulla nulla nisl, accumsan ornare purus at, dignissim finibus enim. Curabitur a neque dictum, maximus magna facilisis, mattis quam. Phasellus ligula erat, pulvinar in convallis ac, dictum vel orci. Aliquam fermentum nec lorem nec eleifend. Proin tincidunt efficitur ipsum, vel volutpat quam commodo a. Phasellus vitae rutrum libero.', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(512) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `profilePicture` varchar(255) NOT NULL DEFAULT '../assets/images/avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `address`, `email`, `mobileNumber`, `profilePicture`) VALUES
(19, 'test', '123', 'Test', 'Dhaka', 'test@example.com', '0123456789', '../assets/images/avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
