-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2019 at 07:12 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `s_id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `bod` varchar(30) NOT NULL,
  `p_add` varchar(50) NOT NULL,
  `city_state_zip` varchar(40) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alt_email` varchar(30) NOT NULL,
  `s_no` varchar(10) NOT NULL,
  `s_alt_no` varchar(10) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `col_city_state` varchar(20) NOT NULL,
  `col_zip` varchar(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `p_alt_no` varchar(10) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_alt_email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
