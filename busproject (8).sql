-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 01:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busno` int(11) NOT NULL,
  `route` varchar(30) DEFAULT NULL,
  `stoppings` varchar(255) DEFAULT NULL,
  `avl_seat` int(11) DEFAULT 50,
  `alloted_seat` int(11) DEFAULT 0,
  `all_male_seat` int(11) DEFAULT 0,
  `all_female_seat` int(11) DEFAULT 0,
  `avl_male_seat` int(11) DEFAULT 0,
  `avl_female_seat` int(11) DEFAULT 0,
  `init_seat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busno`, `route`, `stoppings`, `avl_seat`, `alloted_seat`, `all_male_seat`, `all_female_seat`, `avl_male_seat`, `avl_female_seat`, `init_seat`) VALUES
(1, 'Vengamedu-Mkce', 'Vengamedu,Sp colcony,Vangapalayam,Vennaimalai,Naval Nagar,Manmangalam', 50, 0, 0, 0, 0, 0, 50),
(2, 'Puliyur-Mkce', 'V,S,Va,Vennaimalai,Na,Man', 50, 0, 0, 2, 0, 0, 50);

--
-- Triggers `bus`
--
DELIMITER $$
CREATE TRIGGER `bus_before_insert` BEFORE INSERT ON `bus` FOR EACH ROW BEGIN
  SET NEW.init_seat = NEW.avl_seat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manual`
--

CREATE TABLE `manual` (
  `busno` int(11) NOT NULL,
  `route` varchar(30) DEFAULT NULL,
  `stoppings` varchar(255) DEFAULT NULL,
  `avl_seat` int(11) DEFAULT 10,
  `alloted_seat` int(11) DEFAULT 0,
  `all_male_seat` int(11) DEFAULT 0,
  `all_female_seat` int(11) DEFAULT 0,
  `avl_male_seat` int(11) DEFAULT 0,
  `avl_female_seat` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manual`
--

INSERT INTO `manual` (`busno`, `route`, `stoppings`, `avl_seat`, `alloted_seat`, `all_male_seat`, `all_female_seat`, `avl_male_seat`, `avl_female_seat`) VALUES
(1, 'Vengamedu-Mkce', 'Vengamedu,Sp colcony,Vangapalayam,Vennaimalai,Naval Nagar,Manmangalam', 10, 0, 0, 0, 0, 0),
(2, 'Puliyur-Mkce', 'V,S,Va,Vennaimalai,Na,Man', 10, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` varchar(20) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `stopping` varchar(50) DEFAULT NULL,
  `seatno` int(11) DEFAULT NULL,
  `busno` int(11) DEFAULT NULL,
  `generated_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busno`);

--
-- Indexes for table `manual`
--
ALTER TABLE `manual`
  ADD PRIMARY KEY (`busno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131315;

--
-- AUTO_INCREMENT for table `manual`
--
ALTER TABLE `manual`
  MODIFY `busno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8977;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
