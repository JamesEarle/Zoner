-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 01:41 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cbhousing`
--

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE IF NOT EXISTS `landlords` (
  `id` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
('56074219c32a8', 'John A. Landlordson', 'IAmAlandlord@landlord.landlord', '$2y$10$WmSrJObNEQp0GxMeLVRzCe4SMQcXq4dgmR8oMbqBZEnJ9JzifLBh2', '2015-09-27 01:10:49', '2015-09-27 01:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `city` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`city`, `province`, `country`) VALUES
('Thorold', 'ON', 'Canada'),
('St. Catharines', 'ON', 'Canada'),
('Waterloo', 'ON', 'Canada'),
('Toronto', 'ON', 'Canada'),
('Brampton', 'ON', 'Canada'),
('Mississauga', 'ON', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(13) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
('56073f7ad45bc', 'james earle', 'je11zi@brocku.ca', '$2y$10$4sozprbJUrcYxo1Fu1.AQuT.1MS9PU8xZglwVdjtE/gYQUNCBmZXa', '2015-09-27 00:59:38', '2015-09-27 00:59:38'),
('56073fdec8a33', 'james earle', 'je11zi@brocku.ca', '$2y$10$VC2Yfae5p8.MEnFWfnTw1e/5aE0LWB3whDEsU2Xq53KCUX1VUrUIe', '2015-09-27 01:01:18', '2015-09-27 01:01:18'),
('5607407010463', 'my name is earle', 'blahdiggy@blah.ca', '$2y$10$CBVQ9Z7po/kG5Ke3nYSEGO71iMJhWxDxHWMUAfmOkpO/X1DwKk2xe', '2015-09-27 01:03:44', '2015-09-27 01:03:44'),
('5607410920bea', 'asdasdasd', 'asdasd@jasm.ca', '$2y$10$7bj8xLBOdYFLYN6IXWuKoe3OhmmBaBO9BYMgRHih0qgXmioqyhylO', '2015-09-27 01:06:17', '2015-09-27 01:06:17'),
('560866db53e1c', 'James Earle', 'je11zi@brocku.ca', '$2y$10$mzsM8GcNTkCniax5Z1ybH.eWyT6IYCnMZVSxBI2aHUt4LN2Y5P8dy', '2015-09-27 21:59:55', '2015-09-27 21:59:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
