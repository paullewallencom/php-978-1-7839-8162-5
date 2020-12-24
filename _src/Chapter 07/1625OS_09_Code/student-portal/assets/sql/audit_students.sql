-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 07:04 PM
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
-- Table structure for table `audit_students`
--

CREATE TABLE IF NOT EXISTS `audit_students` (
  `audit_id` int(11) NOT NULL AUTO_INCREMENT,
  `changed_by` varchar(30) DEFAULT NULL,
  `changed_at` datetime DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`audit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `audit_students`
--

INSERT INTO `audit_students` (`audit_id`, `changed_by`, `changed_at`, `type`, `username`) VALUES
(1, 'root@localhost', '2014-03-16 19:14:38', 'I', 'jason.chau'),
(2, 'root@localhost', '2014-03-16 19:31:26', 'I', 'joe.north'),
(3, 'root@localhost', '2014-03-16 19:34:09', 'I', 'kelly.west'),
(4, 'root@localhost', '2014-03-29 00:10:18', 'I', 'george.johnson'),
(5, 'root@localhost', '2014-03-29 00:10:18', 'I', 'charles.davis'),
(6, 'root@localhost', '2014-03-29 00:10:18', 'I', 'edward.moore'),
(7, 'root@localhost', '2014-03-29 00:10:18', 'I', 'brian.anderson');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
