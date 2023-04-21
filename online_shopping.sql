-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2023 at 08:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopproject_db`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tab`
--

INSERT INTO `cart_tab` (`sid`, `product_name`, `user_name`, `num_of_products`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 2, 1),
(4, 1, 2, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tab`
--

INSERT INTO `department_tab` (`sid`, `department_code`, `department_name`) VALUES
(1, 'TEC', 'Technology'),
(2, 'LIT', 'Literature'),
(3, 'CLTH', 'Clothing'),
(4, 'OUT', 'Outdoors'),
(5, 'SPRT', 'Sports'),
(6, 'PET', 'PetSupplies');

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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tab`
--

INSERT INTO `product_tab` (`sid`, `product_name`, `price`, `description`, `rate`, `pic`, `department`, `offer`) VALUES
(1, 'Computer', 100, 'Is a computer', 5, 'img/computer.jpg', 1, NULL),
(2, 'book', 50, 'Is a book', 4, 'img/book.jpg', 2, NULL),
(3, 'Intel I9 13900K', 600, 'Intel® Core™ i9-13900K Processor (36M Cache, up to 5.80 GHz)', 5, 'img/i9.jpg', 1, NULL),
(4, 'Video Camera', 399, 'Canon - EOS Rebel T7 DSLR Video Camera with 18-55mm Lens - Black', 5, 'img/VideoCamera.jpg', 1, NULL),
(5, 'Roomba', 299, 'iRobot - Roomba i3 EVO (3150) Wi-Fi Connected Robot Vacuum - Neutral', 4, 'img/Roomba.jpg', 1, NULL),
(6, 'TV', 1558, 'Samsung - 55” Class S95B OLED 4K Smart Tizen TV', 5, 'img/TV.jpg', 1, NULL),
(7, 'iPad', 449, 'Apple - 10.9-Inch iPad (Latest Model) with Wi-Fi - 64GB - Blue', 5, 'img/iPad.jpg', 1, NULL),
(8, 'Galaxy S23', 799, 'Samsung - Galaxy S23 128GB - Lavender (Verizon)', 4, 'img/Galaxy.jpg', 1, NULL),
(9, 'Headphones ', 399, 'Sony - WH-1000XM5 Wireless Noise-Canceling Over-the-Ear Headphones - Black', 5, 'img/Headphones.jpg', 1, NULL),
(10, 'Google Home', 49, 'Nest Mini (2nd Generation) with Google Assistant - Chalk', 5, 'img/googleHome.jpg', 1, NULL),
(11, 'Fitbit ', 129, 'Fitbit - Luxe Fitness & Wellness Tracker - Graphite', 4, 'img/fitbit.jpg', 1, NULL),
(12, 'Solito: A Memoir', 23, 'New York Times Bestseller • Read With Jenna Book Club Pick as seen on Today • Winner of the Los Angeles Times Christopher Isherwood Prize for Autobiography • Winner of the American Library Association Alex Award\r\n\r\nA young poet tells the inspiring story of his migration from El Salvador to the United States at the age of nine in this “gripping memoir” (NPR) of bravery, hope, and finding family.  ', 5, 'img/solito.jpg', 2, NULL),
(13, 'Fairy Tale', 16, 'Legendary storyteller Stephen King goes into the deepest well of his imagination in this spellbinding novel about a seventeen-year-old boy who inherits the keys to a parallel world where good and evil are at war, and the stakes could not be higher—for that world or ours.', 5, 'img/fairyTale.jpg', 2, NULL),
(14, 'Horse', 21, 'A discarded painting in a junk pile, a skeleton in an attic, and the greatest racehorse in American history: from these strands, a Pulitzer Prize winner braids a sweeping story of spirit, obsession, and injustice across American history', 5, 'img/horse.jpg', 2, NULL),
(15, 'Carrie Soto Is Back', 17, '“Gorgeous. The kind of sharp, smart, potent book you have to set aside every few pages just to catch your breath. I’ll take a piece of Carrie Soto forward with me in life and be a little better for it.”—Emily Henry, author of Book Lovers and Beach Read', 4, 'img/CarrieSoto.jpg', 2, NULL),
(16, 'Demon Copperhead', 19, 'From the acclaimed author of The Poisonwood Bible and The Bean Trees, a brilliant novel that enthralls, compels, and captures the heart as it evokes a young hero’s unforgettable journey to maturity', 5, 'img/Demon.jpg', 2, NULL),
(17, 'Our Missing Hearts', 15, '“Thought-provoking, heart-wrenching . . . I was so invested in the future of this mother and son, and I can’t wait to hear what you think of this deeply suspenseful story!” —Reese Witherspoon', 4, 'img/Missing.jpg', 2, NULL),
(18, 'The Escape Artist', 26, '\"A brilliant and heart-wrenching book, with universal and timely lessons about the power of information—and misinformation. Is it possible to stop mass murder by telling the truth?\" — Yuval Noah Harari, bestselling author of Sapiens: A Brief History of Humankind and Homo Deus: A Brief History of Tomorrow', 5, 'img/Escape.jpg', 2, NULL),
(19, 'City on Fire', 14, 'Two criminal empires together control all of New England.\r\n\r\nUntil a beautiful woman comes between the Irish and the Italians, launching a war that will see them kill each other, destroy an alliance, and set a city on fire.', 4, 'img/city.jpg', 2, NULL),
(20, 'Lessons in Chemistry', 17, 'Chemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing as an average woman. But it’s the early 1960s and her all-male team at Hastings Research Institute takes a very unscientific view of equality. Except for one: Calvin Evans; the lonely, brilliant, Nobel–prize nominated grudge-holder who falls in love with—of all things—her mind. True chemistry results. ', 5, 'img/lessons.jpg', 2, NULL),
(21, 'Crew T-Shirt', 24, 'True Classic Tees Premium Men\'s T-Shirts - Classic Crew T-Shirt, Premium Fitted Men\'s Shirts', 4, 'img/CrewShirt.jpg', 3, NULL),
(22, 'Tank Top', 19, 'adidas Men\'s Heathered Tank Top', 5, 'tanktop.jpg', 3, NULL),
(23, 'Jacket', 99, 'Columbia Men\'s White Out II Insulated Omni Heat Hooded Jacket', 5, 'img/columbia.jpg', 3, NULL),
(24, 'Windbreaker', 59, 'Funny Guy Mugs 80s & 90s Retro Windbreaker', 5, 'img/windbreaker.jpg', 3, NULL),
(25, 'Hoodie', 29, 'Gesean Men\'s Novelty Color Block Pullover Fleece Hoodie Long Sleeve Casual Sweatshirt with Pocket', 5, 'img/hoodie.jpg', 3, NULL),
(26, 'Nightgown', 37, 'Men’s Open Back Adaptive Flannel Nightgown for Seniors - Back Snap Nightgowns with Dome Closure', 5, 'img/gown.jpg', 3, NULL),
(28, 'Pajama Short', 24, 'Hanes mens Men\'s 2-pack Woven Pajama Short', 5, 'img/PJShorts.jpg', 3, NULL),
(29, 'Hunt Pant', 51, 'Mossy Oak Men\'s Cotton Mill 2.0 Hunt Pant', 5, 'img/huntpant.jpg', 3, NULL),
(30, 'Dress Pants', 29, 'JE&NS Men\'s Stretch Slim Fit Flat-Front Casual Skinny Chinos Plaid Dress Pants', 4, 'img/dresspant.jpg', 3, NULL),
(31, 'Cardigan', 10, 'Irish Aran Knitwear 100% Irish Merino Wool Men\'s Shawl Neck Cardigan Sweater with Pockets | Made in Ireland', 4, 'img/cardigan.jpg', 3, NULL),
(32, 'Tent', 59, 'Magellan Outdoors Tellico 3 Person Dome Tent', 4, 'img/tent.webp', 4, NULL),
(33, 'Sleeping Bag', 9, 'Magellan Outdoors Rectangle Sleeping Bag', 5, 'img/sleepingbag.webp', 4, NULL),
(34, 'Airbed', 9, 'Twin-Size Plush Top Airbed', 4, 'img/airbed.webp', 4, NULL),
(35, 'Lawn Chair', 5, 'Academy Sports + Outdoors Logo Armchair', 4, 'img/chair.webp', 4, NULL),
(36, 'Canopy', 49, 'Easy Shade 10 ft x 10 ft Slant Leg Canopy', 4, 'img/canopy.jfif', 4, NULL),
(37, 'Hammock', 34, 'Magellan Outdoors Lightweight Solid Double Hammock', 4, 'img/hammock.webp', 4, NULL),
(38, 'Lantern', 12, 'WeatherRite Pop Up LED Lantern', 5, 'img/Lantern.webp', 4, NULL),
(39, 'Headlamp', 19, 'Black Diamond Astro 300 Headlamp', 5, 'img/headlamp.webp', 4, NULL),
(40, 'Cooler', 24, 'Igloo Profile 50 Cooler', 5, 'img/cooler.webp', 4, NULL),
(41, 'Stove', 149, 'Camp Chef Explorer 2-Burner Propane Stove', 5, 'img/stove.webp', 4, NULL),
(42, 'Baseball Bat', 449, 'DeMarini CF BBCOR Baseball Bat (-3) 2022 - Black/Gold', 4, 'img/bat.webp', 5, NULL),
(43, 'Batting Gloves', 24, 'Mizuno Youth MVP Baseball Batting Gloves', 5, 'img/gloves.webp', 5, NULL),
(44, 'Baseball Helmet', 69, 'EvoShield XVT 2.0 Matte RHH Baseball Batting Helmet', 0, 'img/helmet.webp', 5, NULL),
(45, 'Pitching Machine', 649, 'Trend Sports Heater Baseball/Softball Combo Pitching Machine w/ Feeder', 0, 'img/pitcher.webp', 5, NULL),
(46, 'Soccer Ball', 34, 'Wilson NCAA Stivale Soccer Ball - Optic Green', 4, 'img/soccerball.webp', 5, NULL),
(47, 'Goal', 89, 'Franklin Blackhawks Portable Soccer Goal', 0, 'img/goal.webp', 5, NULL),
(48, 'Basketball', 99, 'Wilson NCAA Evo NXT Game Basketball 29.5', 5, 'img/basketball.webp', 5, NULL),
(49, 'Basketball Hoop', 12, 'Wilson NBA Authentic Performance Basketball Net', 5, 'img/hoopwebp', 5, NULL),
(50, 'Volleyball', 40, 'Tachikara Volley-Lite Volleyball', 5, 'img/volleyball.webp', 5, NULL),
(51, 'Football', 149, 'Wilson GST Prime Official Football', 0, 'img/football.webp', 5, NULL),
(52, 'Dog Bed', 39, 'Top Paw® Cuddler Dog Bed', 4, 'img/dogbed.jfif', 6, NULL),
(53, 'Dog Bowl', 6, 'Top Paw® Stainless Steel Patina Dog Bowl', 5, 'img/dogbowl.jfif', 6, NULL),
(54, 'Dog Harness', 27, 'Sassy Woof Social Butterfly Dog Harness', 5, 'img/harness.jfif', 6, NULL),
(55, 'Dog Collar', 16, 'Arcadia Trail™ Paracord Rope Dog Collar', 5, 'img/dogcollar.jfif', 6, NULL),
(56, 'Dog Leash', 14, 'Top Paw® Nylon Dog Leash: 6-ft long', 4, 'img/dogleash.jfif', 6, NULL),
(57, 'Cat bed', 24, 'Whisker City® Grey Rose Stitch Cuddler Cat Bed', 5, 'img/catbed.jfif', 6, NULL),
(58, 'Cat Tree', 109, 'Whisker City® 37-in Faux Fur Cylinder Posh Pad Cat Tree', 5, 'img/cattree.jfif', 6, NULL),
(59, 'Cat Hut', 39, 'Whisker City® Narwhal Elevated Cat Hut', 5, 'img/cathut.jfif', 6, NULL),
(60, 'Cat Collar', 9, 'Whisker City® Green Plaid Easy Release Kitten & Cat Collar', 4, 'img/catcollar.jfif', 6, NULL),
(61, 'Cat Carrier', 39, 'Whisker City® 2-Door Pet Carrier', 4, 'img/catcarrier.jfif', 6, NULL);

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
