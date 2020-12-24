-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 07:03 PM
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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `description`) VALUES
(1, 'CS-101', 'Introduction to Computer Science'),
(2, 'CE-101', 'Introduction to Computer Engineering'),
(3, 'DS-101', 'Introduction to Data Science');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
