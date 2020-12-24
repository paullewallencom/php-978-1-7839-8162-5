-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 07:02 PM
-- Server version: 5.5.36-MariaDB-1~saucy-log
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course_registry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- The hash is for the string "password"
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--
-- The hash is for "password"
INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'admin1', 'admin1', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
(2, 'admin2', 'admin2', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
