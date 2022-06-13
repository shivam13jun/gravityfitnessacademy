-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2022 at 04:30 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrlpwvmy_fatbefit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'samirabbasi', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `subject`) VALUES
(1, 'shivam', 'shivamshukla13jun@gmail.com', '1255444444', 'hdf', 'fhf'),
(2, 'shivam', 'shivamshukla13jun@gmail.com', '8459784241', 'ggg', 'info'),
(3, 'shivam', 'shivamshukla13jun@gmail.com', '8459784241', 'ggg', 'info'),
(4, 'shivam', 'shivamshukla13jun@gmail.com', '8459784241', 'ggg', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `link`) VALUES
(39, 'slide02.jpg', 'https://gravityfitnessacademy.in/cpt.php'),
(44, 'cpt-bg.jpg', 'https://gravityfitnessacademy.in/cpt.php'),
(46, 'functional-training.jpg', 'https://gravityfitnessacademy.in/kettle-bell.php');

-- --------------------------------------------------------

--
-- Table structure for table `job_placement`
--

CREATE TABLE `job_placement` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualification1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certification4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_placement`
--

INSERT INTO `job_placement` (`id`, `name`, `email`, `phone`, `city`, `state`, `country`, `qualification1`, `qualification2`, `certification1`, `certification2`, `certification3`, `certification4`, `experience`) VALUES
(1, 'hjj', 'shivam@email.co', '8459784241', 'hhh', 'indi', 'country', 'qualification1', 'qualification2', 'certification1', 'certification2', 'certification3', ' certification4', 'experience'),
(2, 'hjj', 'shivam@email.co', '8459784241', 'hhh', 'indi', 'country', 'qualification1', 'qualification2', 'certification1', 'certification2', 'certification3', ' certification4', 'experience'),
(3, 'shivam', 'shivamshukla13jun@gmail.com', '8459784241', 'asdasda', 'state', 'dasda', 'hsc', 'graduate', 'cpt', 'kettle', 'functional', 'nutrition', '5 Years'),
(4, 'ankit', 'shivamshukla13jun@gmail.com', '1255444444', 'nallasopara', 'ssss', 'dasda', 'hsc', 'graduate', 'cpt', 'kettle', 'functional', 'nutrition', '5 Years'),
(5, 'bhai', 'shivamshukla8151@gmail.com', '8459784241', 'asdasda', 'ssss', 'gg', 'hsc', 'graduate', 'cpt', 'kettle', 'functional', 'nutrition', '5 Years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_placement`
--
ALTER TABLE `job_placement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `job_placement`
--
ALTER TABLE `job_placement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
