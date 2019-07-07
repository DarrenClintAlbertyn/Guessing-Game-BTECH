-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 08:50 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 5.6.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GameDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(50) NOT NULL,
  `word` varchar(50) NOT NULL,
  `hint` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `word`, `hint`, `question`) VALUES
(1, 'Dog', 'Woof Woof', 'An animal known as man\'s best friend?'),
(2, 'Cat', 'Meow Meow', 'This animal loves Purrying?'),
(3, 'Lion', 'Roar Roar', 'This animal is the king of the Jungle?'),
(4, 'Snake', 'Hisss hisss', 'This animal has no legs?'),
(5, 'Monkey', 'Eats Bananas', 'This animal swings in trees?'),
(6, 'Bear', 'Lives in the Woods', 'This animal hibernates yearly?'),
(7, 'Giraffe', 'Longest Neck', 'This animal has a long neck?'),
(8, 'Cheetah', 'fastest Animal in the world', 'This animal is the fastest animal in the world?');

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` int(50) NOT NULL,
  `word` varchar(50) NOT NULL,
  `hint` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `word`, `hint`, `question`) VALUES
(1, 'Europe', 'England belongs to this continent', 'The sixth largest continent?'),
(2, 'Africa', 'Nigeria belongs to this continent', 'The second Largest continent?'),
(3, 'Asia', 'Japan belongs to this continent', 'The Biggest continent?'),
(4, 'South America', 'Brazil belongs to this continent', 'The fourth largest continent?'),
(5, 'North America', 'Canada belongs to this continent', 'The third largest continent?'),
(6, 'Australia', 'New Zealand belongs to this continent', 'The smallest continent?'),
(7, 'Antarctica', 'This is the South Poles continent', 'The fifth largest continent?');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(50) NOT NULL,
  `word` varchar(50) NOT NULL,
  `hint` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `word`, `hint`, `question`) VALUES
(1, 'Orange', 'Can be called a colour', 'The opposite of grapefruit?'),
(2, 'Strawberry', 'Small and sweet always red in colour', 'The colour of the fruit is Red?'),
(3, 'Banana', 'Yellow and Always needs to be peeled', 'The fruit monkeys eat ?'),
(4, 'Kiwi', 'The outside is hairy', 'Its a New Zealand fruit?'),
(5, 'Pineapple', 'The outside is prickly', 'Spongebob lives in this fruit?'),
(6, 'Apple', 'Only get Green and Red ones', 'One of these keep the doctor away?'),
(7, 'Watermelon', 'Extremely heavy', 'Biggest Fruit of them all?'),
(8, 'Pear', 'look very much like some apples', 'Very soft inside?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
