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
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `zip_code` char(5) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `uk_students_username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip_code`, `username`, `password`) VALUES
(1, 'John', 'Doe', '3225 Woodland Park St', 'Houston', 'TX', '77082', 'john.doe', '6579e96f76baa00787a28653876c6127'),
(2, 'Jane', 'Dane', '49 Puritan Ln', 'Stamford', 'CT', '06906', 'jane.dane', '7f95133e42c00ce84c4dbeb5db326d00'),
(3, 'Richard', 'Roe', NULL, 'Atlanta', 'GA', '30328', 'richard.roe', 'd6e854df17d6ce05b1dcbdf6fc802f04'),
(4, 'Patrick', 'Smith', '911A Clopper Rd', 'Gburg', 'MD', '20078', 'patrick.smith', 'f44f5279ff35dad73ade8a227586b4dd'),
(5, 'William', 'Dice', '779 Lebanon Rd.', 'Frisco', 'TX', '75034', 'william.dice', '3a798cbc5d770c26c8af5c98eae9c2f0'),
(6, 'James', 'Price', '11900 Hobby course ct.', 'Austin', 'TX', '78757', 'james.price', 'd8ea964be32255a894c1e84a7cc3cb43'),
(7, 'Jason', 'Chau', '10 Downing Street', 'Houston', 'TX', '70887', 'jason.chau', 'password'),
(8, 'Joe', 'North', '', 'Raleigh', 'NC', '27560', 'joe.north', 'password'),
(9, 'Kelly', 'West', '', 'Raleigh', 'NC', '27560', 'kelly.west', 'password'),
(10, 'George', 'Johnson', '3225 Woodland Park Dr', 'Houston', 'TX', '77087', 'george.johnson', '6579e96f76baa00787a28653876c6127'),
(11, 'Charles', 'Davis', '3225 Woodland Park Dr', 'Houston', 'TX', '77087', 'charles.davis', '6579e96f76baa00787a28653876c6127'),
(12, 'Edward', 'Moore', '3225 Woodland Park Dr', 'Houston', 'TX', '77087', 'edward.moore', '6579e96f76baa00787a28653876c6127'),
(13, 'Brian', 'Anderson', '3225 Woodland Park Dr', 'Houston', 'TX', '77087', 'brian.anderson', '6579e96f76baa00787a28653876c6127');

--
-- Triggers `students`
--
DROP TRIGGER IF EXISTS `td_students`;
DELIMITER //
CREATE TRIGGER `td_students` BEFORE DELETE ON `students`
 FOR EACH ROW begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "D",OLD.username);

	end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `ti_students`;
DELIMITER //
CREATE TRIGGER `ti_students` AFTER INSERT ON `students`
 FOR EACH ROW begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "I",NEW.username);

	end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `tu_students`;
DELIMITER //
CREATE TRIGGER `tu_students` AFTER UPDATE ON `students`
 FOR EACH ROW begin

	    insert into audit_students(changed_by, changed_at, type, username)
		values(USER(), NOW(), "U",NEW.username);

	end
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
