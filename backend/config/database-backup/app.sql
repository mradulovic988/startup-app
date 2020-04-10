-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 12:30 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `work` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `current_city` varchar(30) NOT NULL,
  `home_town` varchar(30) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `website` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `profile_image`, `work`, `education`, `phone_number`, `state`, `current_city`, `home_town`, `relationship_status`, `gender`, `hobbies`, `website`, `company`, `position`, `bio`, `date`, `user_role`) VALUES
(56, 'Marko', 'Radulovic', 'upss1988', 'upss070288@gmail.com', 'b2d125c76b14d7b78823841ce3130ea9', '20190907_123001.jpg', 'Software Developer', 'MIT', '0606631540', 'Serbia', 'Smederevo', 'Smederevo', 'Married', 'Male', 'Programming', 'mlab-studio.com', 'M Lab Studio', 'CEO', 'I\\\'m a communicative, active a', '2020-04-06 22:38:27', 10),
(59, 'Andrija', 'Radulovic', 'andra2020', 'andra@gmail.com', '8758b8ee2b84d22a13cf908843f4d17a', 'f38e01fb-2920-4c4f-b708-87a4d151411c.JPG', 'Sleaping', 'Eating', '55555555', 'Serbia', 'Smederevo', 'Smederevo', 'Single', 'Male', 'Crying', 'mlab-studio.com', 'M Lab Studio', 'CEO', 'I\\\'m a little baby boy from Serbia, Smederevo. I was born on February 29th, 2020 and I\\\'m really young right now :)', '2020-04-07 14:26:32', 10),
(60, 'Marija', 'Stolic', 'majajoma88', 'majajoma88@gmail.com', '9f48e78caaf2b5227367918268907d53', 'IMG_20191219_231842_132.jpg', 'Medical nurse', 'Medical school', '0645555555', 'Serbia', 'Smederevo', 'Smederevo', 'Married', 'Female', 'Graphic manipulation', '', '', '', 'I love photography, nursing and my son Andrija :)', '2020-04-07 22:36:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
