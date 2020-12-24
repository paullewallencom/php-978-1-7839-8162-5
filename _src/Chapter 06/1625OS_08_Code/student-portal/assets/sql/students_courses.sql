-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2014 at 02:48 AM
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
-- Table structure for table `students_courses`
--

CREATE TABLE IF NOT EXISTS `students_courses` (
  `course_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_courses`
--

INSERT INTO `students_courses` (`course_id`, `student_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
