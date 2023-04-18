-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2023 at 02:26 PM
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
-- Table structure for table `cart_tab`
--

DROP TABLE IF EXISTS `cart_tab`;
CREATE TABLE IF NOT EXISTS `cart_tab` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `num_of_products` int(20) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `product_id` (`product_name`),
  KEY `user_id` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `offer` int(100) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  KEY `dep_id` (`department`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tab`
--

INSERT INTO `product_tab` (`sid`, `product_name`, `price`, `description`, `rate`, `pic`, `department`, `offer`) VALUES
(1, 'Computer', 100, 'Is a computer', 5, 'img/computer.jpg', 1, NULL),
(2, 'book', 50, 'Is a book', 4, 'img/book.jpg', 2, NULL),
(3, 'Intel I9 13900K', 600, 'Intel® Core™ i9-13900K Processor (36M Cache, up to 5.80 GHz)', 5, 'img/i9.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_tab`
--

DROP TABLE IF EXISTS `role_tab`;
CREATE TABLE IF NOT EXISTS `role_tab` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(10) NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_tab`
--

INSERT INTO `role_tab` (`sid`, `role`) VALUES
(2, 'admin'),
(3, 'customer');

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
  `role_id` int(11) DEFAULT '3',
  PRIMARY KEY (`sid`),
  KEY `role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tab`
--

INSERT INTO `users_tab` (`sid`, `username`, `email`, `date_of_birth`, `password`, `role_id`) VALUES
(1, 'Marlon', 'marlon@gmail.com', '2002-12-11', '123', 2),
(2, 'test', 'test@jbu.edu', '2023-04-06', '10101', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_tab`
--
ALTER TABLE `cart_tab`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_name`) REFERENCES `product_tab` (`sid`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_name`) REFERENCES `users_tab` (`sid`);

--
-- Constraints for table `product_tab`
--
ALTER TABLE `product_tab`
  ADD CONSTRAINT `dep_id` FOREIGN KEY (`department`) REFERENCES `department_tab` (`sid`);

--
-- Constraints for table `users_tab`
--
ALTER TABLE `users_tab`
  ADD CONSTRAINT `role` FOREIGN KEY (`role_id`) REFERENCES `role_tab` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
