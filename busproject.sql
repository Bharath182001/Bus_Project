-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 05:12 AM
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
(1, 'Vengamedu-Mkce', 'Vengamedu,Sp colcony,Vangapalayam,Vennaimalai,Naval Nagar,Manmangalam', 26, 24, 17, 7, 0, 0, 50),
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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_No` int(11) NOT NULL,
  `Dept_Name` varchar(255) DEFAULT NULL,
  `Total_Students` int(11) DEFAULT NULL,
  `First_Year` int(11) DEFAULT NULL,
  `Second_Year` int(11) DEFAULT NULL,
  `Third_Year` int(11) DEFAULT NULL,
  `Fourth_Year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_No`, `Dept_Name`, `Total_Students`, `First_Year`, `Second_Year`, `Third_Year`, `Fourth_Year`) VALUES
(1, 'MCA', NULL, NULL, NULL, NULL, NULL),
(2, 'MBA', NULL, NULL, NULL, NULL, NULL),
(3, 'ECE', NULL, NULL, NULL, NULL, NULL);

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
  `generated_date` datetime DEFAULT current_timestamp(),
  `studentImage` varchar(200) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `Branch` varchar(255) DEFAULT NULL,
  `Address` blob DEFAULT NULL,
  `Year` varchar(255) DEFAULT NULL,
  `Blood_group` varchar(255) DEFAULT NULL,
  `fatherMobileNumber` varchar(255) DEFAULT NULL,
  `MotherMobileNumber` varchar(255) DEFAULT NULL,
  `GuardianMobileNumber` varchar(255) DEFAULT NULL,
  `studentMobileNumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `grauation` varchar(4) DEFAULT NULL,
  `graduation` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `name`, `gender`, `stopping`, `seatno`, `busno`, `generated_date`, `studentImage`, `fatherName`, `dob`, `Branch`, `Address`, `Year`, `Blood_group`, `fatherMobileNumber`, `MotherMobileNumber`, `GuardianMobileNumber`, `studentMobileNumber`, `email`, `semester`, `grauation`, `graduation`) VALUES
('1', 'BJHGJHG', 'male', 'S', 26, 1, '2023-11-15 09:03:09', 'studentimages/65543bf502950_architecture.jpg', 'Kumar', '2001-12-11', 'MCA', 0x77716671776665776762, 'II', 'A', '06587687687', '06587687687', '06587687687', '09360436709', 'bharathmca18@gmail.com', '2', NULL, 'UG'),
('10', 'BJHGJHG', 'male', 'S', 28, 1, '2023-11-15 09:13:56', 'studentimages/65543e7c5c9d5_architecture.jpg', 'Kumar', '2001-11-18', 'MCA', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'II', 'A', '06587687687', '06587687687', '06587687687', '09360436709', 'bharathmca18@gmail.com', '4', NULL, 'PG'),
('2', 'BJHGJHG', 'female', 'Sp colcony', 1, 1, '2023-11-15 09:04:58', 'studentimages/65543c62835d0_R.jpeg', 'Kumar', '1111-11-11', '', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'II', 'A', '06587687687', '06587687687', '06587687687', '09360436708', 'bharathmca18@gmail.com', '3', NULL, 'UG'),
('3', 'BJHGJHG', 'female', 'Sp colcony', 2, 1, '2023-11-15 09:06:30', 'studentimages/65543cbe3a670_4691303_mysql_icon.png', 'Kumar', '1111-11-11', 'MBA', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d, 'I', 'A', '06587687687', '23456789', '06587687687', '09360436709', 'bharathmca18@gmail.com', '4', NULL, 'PG'),
('4', 'BJHGJHG', 'female', '', 3, 1, '2023-11-15 09:07:41', 'studentimages/65543d05a603a_Hachiman.jpeg', 'Kumar', '2001-12-11', '', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'I', 'A', '06587687687', '06587687687', '06587687687', '23456789', 'bharathmca18@gmail.com', '', NULL, 'UG'),
('5', 'BJHGJHG', 'female', '', 4, 1, '2023-11-15 09:08:05', 'studentimages/65543d1ddee3b_353838_code_html_web_icon.png', 'Kumar', '2001-12-11', '', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'I', 'A', '06587687687', '06587687687', '06587687687', '23456789', 'bharathmca18@gmail.com', '', NULL, 'UG'),
('6', 'BJHGJHG', 'female', '', 5, 1, '2023-11-15 09:08:21', 'studentimages/65543d2ddfd8a_353838_code_html_web_icon.png', 'Kumar', '2001-12-11', '', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'I', 'A', '06587687687', '06587687687', '06587687687', '23456789', 'bharathmca18@gmail.com', '', NULL, 'UG'),
('7', 'BJHGJHG', 'male', '', 27, 1, '2023-11-15 09:08:43', 'studentimages/65543d432c0c5_353838_code_html_web_icon.png', 'Kumar', '2001-12-11', '', 0x31392f3130372c50616e63686d6164657669204b61616c6970616c6179616d2c4b617275722d363339303034, 'I', 'A', '06587687687', '06587687687', '06587687687', '23456789', 'bharathmca18@gmail.com', '', NULL, 'UG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busno`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_No`);

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
