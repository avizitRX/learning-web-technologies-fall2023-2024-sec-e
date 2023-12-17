-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2023 at 11:09 PM
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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `quantity` int(255) NOT NULL,
  `mobileNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `bloodGroup`, `quantity`, `mobileNumber`) VALUES
(3, NULL, 'A+', 11, NULL),
(4, NULL, 'A-', 2, NULL),
(5, NULL, 'B+', 8, NULL),
(6, NULL, 'B-', 4, NULL),
(7, NULL, 'O+', 5, NULL),
(8, NULL, 'O-', 0, NULL),
(9, NULL, 'AB+', 6, NULL),
(10, NULL, 'AB-', 30, NULL),
(12, 'test', 'O+', 10, '112334165'),
(14, 'test', 'AB-', 60, '123456'),
(15, 'test', 'A+', 5, '123456'),
(16, 'Test', 'A+', 60, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `requestBlood`
--

CREATE TABLE `requestBlood` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestBlood`
--

INSERT INTO `requestBlood` (`id`, `bloodGroup`, `location`, `date`, `mobileNumber`, `comment`, `owner`) VALUES
(2, 'O+', 'Evercare Hospital, Dhaka', '2023-11-14', '1446448', 'I need urgent B+ plasma on 14 Nov, 2023 at Evercare Hospital in Dhaka.\r\nIf anyone is available, please contact me using the mobile number given below.\r\n\r\nThanks in advance.                                             ', 'test'),
(5, 'A+', 'Berlin', '2023-11-21', '131566561', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test'),
(8, 'B+', 'Mymensingh', '2023-11-15', '123456789', '                                                                                                                                                                Nulla nulla nisl, accumsan ornare purus at, dignissim finibus enim. Curabitur a neque dictum, maximus magna facilisis, mattis quam. Phasellus ligula erat, pulvinar in convallis ac, dictum vel orci. Aliquam fermentum nec lorem nec eleifend. Proin tincidunt efficitur ipsum, vel volutpat quam commodo a. Phasellus vitae rutrum libero.        ', 'test'),
(38, 'O+', 'Uttara, Dhaka', '2023-12-14', '4676184845', 'There is an urgent requirement of O+ Blood for daughter of Mr Sudhakar Gupta suffering from Dengue and admitted in Gupta Nursing Home near Paschim Vih', 'recipient');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bloodGroup` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `address` varchar(512) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `profilePicture` varchar(255) NOT NULL DEFAULT '../assets/images/avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `bloodGroup`, `role`, `age`, `gender`, `availability`, `address`, `email`, `mobileNumber`, `profilePicture`) VALUES
(28, 'recipient', '123', 'Recipient', 'A+', 'Recipient', NULL, NULL, NULL, 'Berlin, Germany', 'recipient@example.com', '1234567879', '../assets/images/avatar.jpg'),
(30, 'staff', '123', 'Staff', 'O-', 'Staff', NULL, NULL, NULL, 'Gazipur, Dhaka', 'staff@example.com', '1234567879', '../assets/images/avatar.jpg'),
(31, 'donor1', '123', 'Donor 1', 'A+', 'Donor', 25, 'Female', 'Available', 'Mirpur, Dhaka', 'donor1@example.com', '123456789', '../assets/images/avatar.jpg'),
(32, 'donor2', '123', 'Donor 2', 'A-', 'Donor', 38, 'Male', 'Not Available', 'Sadar, Sylhet', 'donor2@example.com', '987654321', '../assets/images/avatar.jpg'),
(33, 'donor3', '123', 'Donor 3', 'B+', 'Donor', 55, 'Male', 'Available', 'Chittagong', 'donor3@example.com', '546549845', '../assets/images/avatar.jpg'),
(34, 'donor4', '123', 'Donor 4', 'A+', 'Donor', 22, 'Female', 'Available', 'Berlin', 'donor4@example.com', '123456789', '../assets/images/avatar.jpg'),
(35, 'recipient2', '123', 'Recipient 2', 'O+', 'Recipient', NULL, NULL, NULL, 'Sadar, Mymensingh', 'recipient2@example.com', '0987654321', '../assets/images/avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestBlood`
--
ALTER TABLE `requestBlood`
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
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requestBlood`
--
ALTER TABLE `requestBlood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
