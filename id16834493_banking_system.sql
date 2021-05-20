-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2021 at 05:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16834493_banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sn` int(5) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sn`, `sender`, `receiver`, `amount`, `time`) VALUES
(1, 'Priya Painkra', '    ', 100, '2021-05-17 16:44:26'),
(2, 'Priya Painkra', '  Ranjan  ', 100, '2021-05-17 16:46:07'),
(3, 'Priya Painkra', '  Ranjan  ', 100, '2021-05-17 16:50:14'),
(4, 'Ranjan', 'Anwar', 100, '2021-05-17 18:53:15'),
(5, 'Ranjan', '  Anwar  ', 100, '2021-05-17 19:56:09'),
(6, 'Ranjan', '  Anwar  ', 100, '2021-05-17 19:59:04'),
(7, 'Ranjan', '  Anwar  ', 100, '2021-05-18 13:21:05'),
(8, 'Ranjan', '  Vaishnavi Khandey  ', 100, '2021-05-18 13:22:49'),
(9, '', 'Ranjan', 500, '2021-05-18 15:06:23'),
(10, 'Aanchal ', 'Ranjan', 500, '2021-05-18 15:08:15'),
(11, 'Aanchal ', 'Ranjan', 500, '2021-05-18 15:09:15'),
(12, 'Vaishnavi Khandey', 'Aanchal ', 100, '2021-05-18 15:11:01'),
(13, 'Ranjan', 'Anwar', 2000, '2021-05-19 05:12:54'),
(14, 'Anwar', 'Ranjan', 2000, '2021-05-19 05:13:08'),
(15, 'Ranjan', 'Anwar', 300, '2021-05-19 05:42:30'),
(16, 'Ranjan', 'Vaishnavi', 300, '2021-05-19 05:43:40'),
(17, 'Ranjan', 'Vaishnavi', 300, '2021-05-19 05:44:18'),
(18, 'Ranjan ', 'Vaishnavi Khandey ', 400, '2021-05-19 05:56:05'),
(19, 'Ranjan ', 'Vaishnavi Khandey ', 700, '2021-05-19 05:57:24'),
(20, 'Vaishnavi Khandey ', 'Priya Painkra ', 300, '2021-05-19 06:06:27'),
(21, 'Anwar ', 'Anwar ', 100, '2021-05-19 06:08:53'),
(22, 'Anwar ', 'Anwar ', 100, '2021-05-19 06:18:16'),
(23, 'Anwar ', 'Ranjan ', 100, '2021-05-19 06:18:41'),
(24, 'Anwar ', 'Priyanka Singh ', 100, '2021-05-19 06:19:44'),
(25, 'Anwar ', 'Priyanka Singh ', 300, '2021-05-19 06:20:50'),
(26, 'Anwar ', 'Harshad Mehta ', 500, '2021-05-19 06:23:59'),
(27, 'Anwar', 'Akash Ranjan', 500, '2021-05-19 06:25:43'),
(28, 'Ranjan', 'Anwar', 100, '2021-05-19 06:58:31'),
(29, 'David Mishra ', 'Aanchal  ', 1, '2021-05-19 07:28:12'),
(30, 'Aanchal ', 'Anwar', 70, '2021-05-19 13:20:26'),
(31, 'Anwar ', 'Ranjan ', 30, '2021-05-19 13:21:03'),
(32, 'Ranjan', 'Anwar', 30, '2021-05-19 15:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `name`, `email`, `amount`, `address`) VALUES
(1, 'Ranjan', 'ranjan@gmail.com', 0, 'Sitapur , Chhattisgarh'),
(2, 'Anwar', 'anwar@gmail.com', 270, 'Udaipur , Rajsthan'),
(3, 'Priyanka Singh', 'priyanka@gmail.com', 400, 'Ranchi, Jharkhand'),
(4, 'Akash Ranjan', 'akash@gmail.com', 500, 'Birbhum , West Bengal'),
(5, 'Priya Painkra', 'painkra_priya@gmail.com', 300, 'Surajpur , Chhattisgarh'),
(6, 'Harshad Mehta', 'harshad@gmail.com', 1500, 'Sitapur , Chhattisgarh'),
(7, 'David Mishra', 'mishra4david@gmail.com', 999, 'Kannauj, Uttar Pradesh'),
(8, 'Ravi Agrawal', 'ravi363@gmail.com', 1000, 'Lucknow, Uttar Pradesh'),
(9, 'Aanchal ', '58aanchal_@gmail.com', 31, 'ambikapur, Chhattisgarh'),
(10, 'Vaishnavi Khandey', 'vaishnavi@gmail.com', 1700, 'Mayurbhanj, Odissa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini_statement`
--
ALTER TABLE `mini_statement`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mini_statement`
--
ALTER TABLE `mini_statement`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
