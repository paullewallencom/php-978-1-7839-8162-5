CREATE DATABASE IF NOT EXISTS `employee_db`
--
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`) VALUES
(1, 'John', 'Doe'),
(2, 'Jane', 'Dane'),
(3, 'Richard', 'Roe');
