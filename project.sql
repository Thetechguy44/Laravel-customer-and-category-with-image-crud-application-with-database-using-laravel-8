-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 04:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Description`, `Picture`, `Active`, `created_at`, `updated_at`) VALUES
(2, 'New logo', 'New logo designed by me', '1685103959.png', 1, '2023-05-16 09:45:21', '2023-05-26 11:26:00'),
(3, 'QR code', 'My Whats-app QR scan code', '1684234896.png', 1, '2023-05-16 10:01:36', '2023-05-16 10:01:36'),
(4, 'Logo4', 'Logo designed by gana', '1684495011.png', 0, '2023-05-19 10:16:51', '2023-05-19 10:16:51'),
(5, 'Picture', 'Cover page design', '1684776321.png', 0, '2023-05-22 16:25:22', '2023-05-22 16:25:22'),
(6, 'Logo', 'My anime blog site logo', '1685087197.png', 1, '2023-05-26 06:46:37', '2023-05-26 06:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `State` varchar(30) DEFAULT NULL,
  `PostalCode` int(6) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(191) DEFAULT NULL,
  `BillingAddress` varchar(255) DEFAULT NULL,
  `BillingCity` varchar(30) DEFAULT NULL,
  `BillingCountry` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`, `Phone`, `Email`, `Password`, `BillingAddress`, `BillingCity`, `BillingCountry`, `created_at`, `updated_at`) VALUES
(5, 'Yahaya', 'Gana', NULL, NULL, NULL, NULL, NULL, NULL, '8149801665', 'Yahayagana@gmail.com', NULL, NULL, NULL, NULL, '2023-05-10 22:13:46', '2023-06-26 23:22:03'),
(6, 'Mahira', 'Gana', NULL, NULL, NULL, NULL, NULL, NULL, '9156317465', 'Mahira@gmail.com', NULL, NULL, NULL, NULL, '2023-05-10 22:14:33', '2023-05-10 22:14:33'),
(7, 'Abdullahi', 'Bello', NULL, NULL, NULL, NULL, NULL, NULL, '8159256588', 'abdullahib@gmail.com', NULL, NULL, NULL, NULL, '2023-05-12 21:53:26', '2023-05-12 22:02:46'),
(9, 'Mustapha', 'Walid', NULL, NULL, NULL, NULL, NULL, NULL, '7081776549', 'Musty@gmail.com', NULL, NULL, NULL, NULL, '2023-05-13 12:40:46', '2023-05-13 12:40:46'),
(10, 'Musa', 'Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, '2345678944', 'musasarki@gmail.com', NULL, NULL, NULL, NULL, '2023-05-13 12:43:15', '2023-05-13 12:46:25'),
(13, 'Faiza', 'Mohammed', NULL, NULL, NULL, NULL, NULL, NULL, '9148599049', 'faizam@gmail.com', NULL, NULL, NULL, NULL, '2023-05-16 15:14:57', '2023-05-18 21:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
