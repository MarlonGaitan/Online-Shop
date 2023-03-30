-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2023 at 01:10 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_tab`
--

DROP TABLE IF EXISTS `department_tab`;
CREATE TABLE IF NOT EXISTS `department_tab` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `department_code` varchar(20) NOT NULL,
  `department_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tab`
--

INSERT INTO `department_tab` (`sid`, `department_code`, `department_name`) VALUES
(1, 'TEC', 'Technology'),
(2, 'LIT', 'Literature');

-- --------------------------------------------------------

--
-- Table structure for table `product_tab`
--

DROP TABLE IF EXISTS `product_tab`;
CREATE TABLE IF NOT EXISTS `product_tab` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text,
  `rate` smallint(5) NOT NULL DEFAULT '0',
  `pic` varchar(20) NOT NULL,
  `department` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `dep_id` (`department`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tab`
--

INSERT INTO `product_tab` (`sid`, `product_name`, `price`, `description`, `rate`, `pic`, `department`) VALUES
(1, 'Computer', 100, 'Is a computer', 5, 'img/computer.jpg', 1),
(2, 'book', 50, 'Is a book', 4, 'img/book.jpg', 2),
(3, 'Intel I9 13900K', 600, 'Intel® Core™ i9-13900K Processor (36M Cache, up to 5.80 GHz)', 5, 'img/i9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_tab`
--

DROP TABLE IF EXISTS `users_tab`;
CREATE TABLE IF NOT EXISTS `users_tab` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(11) NOT NULL,
  `premium` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tab`
--

INSERT INTO `users_tab` (`sid`, `username`, `email`, `date_of_birth`, `password`, `premium`) VALUES
(1, 'Marlon', 'marlon@gmail.com', '2002-12-11', '123', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_tab`
--
ALTER TABLE `product_tab`
  ADD CONSTRAINT `dep_id` FOREIGN KEY (`department`) REFERENCES `department_tab` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
