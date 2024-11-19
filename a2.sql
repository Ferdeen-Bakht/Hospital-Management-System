-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2023 at 06:26 PM
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
-- Database: `a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `c_name` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `d_name` text NOT NULL,
  `d_email` text NOT NULL,
  `d_password` text NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d_password`) VALUES
(1, 'xzjkh', 'a@a', 'jadgh'),
(2, 'xzjkh', 'a@a', 'jadgh'),
(3, 'xzjkh', 'a@a', 'jadgh'),
(4, 'ajs', 'a@s', 'sldkjc'),
(5, 'ajs', 'a@s', 'sldkjc');

-- --------------------------------------------------------

--
-- Table structure for table `d_att`
--

DROP TABLE IF EXISTS `d_att`;
CREATE TABLE IF NOT EXISTS `d_att` (
  `d_att_id` int NOT NULL AUTO_INCREMENT,
  `att_name` text NOT NULL,
  `d_id` int NOT NULL,
  PRIMARY KEY (`d_att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `d_att`
--

INSERT INTO `d_att` (`d_att_id`, `att_name`, `d_id`) VALUES
(1, '', 0),
(2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_name` text NOT NULL,
  `p_email` text NOT NULL,
  `p_password` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_email`, `p_password`) VALUES
(1, 'gudu', 'lskjdac@a', 'xac'),
(2, 'junu', 'lskjdac@a', 'adkf'),
(3, 'lumu', 'lskjdac@a', 'sljd'),
(4, 'x,cm', 'aslfd@lafs', 'sldvk'),
(5, 'x,man', 'aslfd@lafs', 'dfg'),
(6, 'kartay', 'ladfh@kjwd', 'dlshg'),
(7, 'a', 'a@a', 'a'),
(8, 'a', 'a@a', 'a'),
(9, 'xx', 'x@x', 'x'),
(10, 'xx', 'x@x', 'x'),
(11, 'xx', 'x@x', 'x'),
(12, 'xx', 'x@x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `d_id` int NOT NULL,
  `s_date` date NOT NULL,
  `s_time` time NOT NULL,
  `s_name` text NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
