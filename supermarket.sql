-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2023 at 07:43 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_office`
--

DROP TABLE IF EXISTS `branch_office`;
CREATE TABLE IF NOT EXISTS `branch_office` (
  `branch_number` int NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `manager_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`branch_number`),
  KEY `manager_name` (`manager_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`branch_number`, `address`, `telephone_number`, `manager_name`) VALUES
(1, '1, Divine Favour Street', '+2348060788526', 'Akinsanya Adeyinka');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

DROP TABLE IF EXISTS `emergency_contact`;
CREATE TABLE IF NOT EXISTS `emergency_contact` (
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `branch_number` int NOT NULL,
  PRIMARY KEY (`branch_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`name`, `address`, `telephone_number`, `branch_number`) VALUES
('Akinsanya Aishat Omolade', '1, Rocky Progressive Close', '+2348038351485', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `manager_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`manager_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_name`, `address`, `telephone_number`) VALUES
('Adebayo Philip', '3, Akin Adesola Street, Victoria Island', '+2349025105098'),
('Akinsanya Adeyinka', '1, Rocky Progressive Close, Alogi', '+2348060788526');

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

DROP TABLE IF EXISTS `next_of_kin`;
CREATE TABLE IF NOT EXISTS `next_of_kin` (
  `name` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `staff_number` int NOT NULL,
  PRIMARY KEY (`staff_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_personnel`
--

DROP TABLE IF EXISTS `sales_personnel`;
CREATE TABLE IF NOT EXISTS `sales_personnel` (
  `staff_number` int NOT NULL,
  `sales_area` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staff_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

DROP TABLE IF EXISTS `secretary`;
CREATE TABLE IF NOT EXISTS `secretary` (
  `staff_number` int NOT NULL,
  `typing_speed` int DEFAULT NULL,
  PRIMARY KEY (`staff_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_number` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `sex` enum('male','female') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `position` enum('manager','secretary','sales_personnel','staff') DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `branch_number` int DEFAULT NULL,
  PRIMARY KEY (`staff_number`),
  KEY `branch_number` (`branch_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_office`
--
ALTER TABLE `branch_office`
  ADD CONSTRAINT `branch_office_ibfk_1` FOREIGN KEY (`manager_name`) REFERENCES `manager` (`manager_name`);

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `emergency_contact_ibfk_1` FOREIGN KEY (`branch_number`) REFERENCES `branch_office` (`branch_number`);

--
-- Constraints for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD CONSTRAINT `next_of_kin_ibfk_1` FOREIGN KEY (`staff_number`) REFERENCES `staff` (`staff_number`);

--
-- Constraints for table `sales_personnel`
--
ALTER TABLE `sales_personnel`
  ADD CONSTRAINT `sales_personnel_ibfk_1` FOREIGN KEY (`staff_number`) REFERENCES `staff` (`staff_number`);

--
-- Constraints for table `secretary`
--
ALTER TABLE `secretary`
  ADD CONSTRAINT `secretary_ibfk_1` FOREIGN KEY (`staff_number`) REFERENCES `staff` (`staff_number`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`branch_number`) REFERENCES `branch_office` (`branch_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
