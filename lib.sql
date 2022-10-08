-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2022 at 06:47 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

DROP TABLE IF EXISTS `add_book`;
CREATE TABLE IF NOT EXISTS `add_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  `bimg` text NOT NULL,
  `bauthor` varchar(100) NOT NULL,
  `bpublication` varchar(100) NOT NULL,
  `buydate` varchar(20) NOT NULL,
  `bqty` int(20) NOT NULL,
  `aqty` int(20) NOT NULL,
  `bprice` int(20) NOT NULL,
  `libuser` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `bname`, `bimg`, `bauthor`, `bpublication`, `buydate`, `bqty`, `aqty`, `bprice`, `libuser`) VALUES
(8, 'Database System concept', 'dbms.jpg', 'Korth', 'Mcgraw hill', '2018-04-10', 32, 11, 655, 'r_kumar'),
(9, 'JAVA', 'java.png', 'Herbert Schildt', 'Mcgraw hill', '2018-06-17', 43, 18, 730, 'r_kumar'),
(7, 'Introduction To Algo', 'daa.jpeg', 'Coreman', 'pearson', '2018-03-22', 35, 17, 830, 'r_kumar'),
(6, 'Fundamental Of Database System', 'navathe.jpg', 'Navathe', 'Pearson', '2017-07-05', 20, 15, 750, 'r_kumar'),
(10, 'HTML', 'html.jpg', ' Steven Holzner ', 'Connolly', '2018-08-19', 45, 33, 1050, 'r'),
(11, 'Pro  JAVA', 'brett.jpg', 'Brett Spell', 'Apress', '2017-02-15', 30, 11, 495, 'r_kumar'),
(12, 'Fundamentals of Computer Algo', 'horowitz.jpg', 'Horowitz', 'CS Press', '2018-09-15', 25, 16, 640, 'r_kumar'),
(15, 'hfkjhdk', 'Capture.PNG', 'hghjhgjg', 'gjgjh', '2018-12-01', 45, 44, 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

DROP TABLE IF EXISTS `issue_book`;
CREATE TABLE IF NOT EXISTS `issue_book` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `ssem` varchar(50) NOT NULL,
  `scontact` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `idate` varchar(20) NOT NULL,
  `retdate` varchar(20) NOT NULL,
  `suser` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `name`, `rollno`, `ssem`, `scontact`, `semail`, `bname`, `idate`, `retdate`, `suser`) VALUES
(36, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'Database System concept', '12-Jun-2021', '12-Jun-2021', 'akm7376'),
(35, 'kjvhjkh khjkhjh', '45454', 's', '544', 'df@kfjk.com', 'hfkjhdk', '04-Jul-2019', '04-Jul-2019', 'hkjhkjhkjh'),
(28, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'Database System concept', '06-Dec-2018', '06-Dec-2018', 'akm7376'),
(26, 'man si', '1616610027', 's', '123456', 'ms@gmailc.com', 'HTML', '03-Dec-2018', '03-Dec-2018', 'MANish'),
(27, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'JAVA', '03-Dec-2018', '03-Dec-2018', 'akm7376'),
(25, 'man si', '1616610027', 's', '123456', 'ms@gmailc.com', 'Introduction To Algo', '03-Dec-2018', '03-Dec-2018', 'MANish'),
(24, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'HTML', '03-Dec-2018', '03-Dec-2018', 'akm7376'),
(32, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'Database System concept', '06-Dec-2018', '27-Aug-2019', 'akm7376'),
(33, 'Abhishek Mishra', '1616610006', 's', '1234567', 'abhi@gmail.com', 'JAVA', '06-Dec-2018', '', 'akm7376'),
(34, 'Krishna Kumar', '1616610024', 's', '987456321', 'kkg@gmail.com', 'hfkjhdk', '06-Dec-2018', '', 'kkg');

-- --------------------------------------------------------

--
-- Table structure for table `i_book`
--

DROP TABLE IF EXISTS `i_book`;
CREATE TABLE IF NOT EXISTS `i_book` (
  `id` int(100) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `s_contact` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `b_name` varchar(70) NOT NULL,
  `i_date` varchar(20) NOT NULL,
  `s_user` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i_book`
--

INSERT INTO `i_book` (`id`, `roll_no`, `name`, `sem`, `s_contact`, `s_email`, `b_name`, `i_date`, `s_user`) VALUES
(1, '1616610007', 'as as', '5', '794613', 'abhi@gmail.com', 'java', '26-Nov-2018', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `i_roll`
--

DROP TABLE IF EXISTS `i_roll`;
CREATE TABLE IF NOT EXISTS `i_roll` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `rollno` varchar(100) NOT NULL,
  `ret_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i_roll`
--

INSERT INTO `i_roll` (`id`, `rollno`, `ret_date`) VALUES
(1, '45', ''),
(2, '1616610007', ''),
(3, '45', ''),
(4, '1616610007', ''),
(5, '45', ''),
(6, '', ''),
(7, '45', ''),
(8, '1616610007', ''),
(9, '45', '');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_reg`
--

DROP TABLE IF EXISTS `librarian_reg`;
CREATE TABLE IF NOT EXISTS `librarian_reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_reg`
--

INSERT INTO `librarian_reg` (`id`, `fname`, `lname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Abhishek', 'Kumar', 'abc', 'abc', 'ab@gmail.com', '1234564');

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

DROP TABLE IF EXISTS `msgs`;
CREATE TABLE IF NOT EXISTS `msgs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `suser` varchar(50) NOT NULL,
  `duser` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `msg` varchar(1500) NOT NULL,
  `read1` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`id`, `suser`, `duser`, `title`, `msg`, `read1`) VALUES
(1, 'abc', 'admin', 'abc', 'hai', 'yes'),
(2, 'abc', 'ada', 'Book', 'Please return your book.', 'no'),
(6, 'abc', 'admin', 'hello', 'return book.', 'yes'),
(7, 'abc', 'admin', 'hello', 'hello', 'yes'),
(8, 'abc', 'admin', 'hello', 'hello', 'yes'),
(9, 'abc', 'admin', 'book', 'return your book', 'yes'),
(10, 'abc', 'MANish', 'Book', 'Please return your book.', 'yes'),
(11, 'abc', 'manish9559', 'info', 'return your DBMS book', 'yes'),
(12, 'abc', 'akm7376', 'gjhgjg', 'fghfhgfhg', 'yes'),
(13, 'abc', 'akm7376', '', 'hare', 'yes'),
(14, 'abc', 'akm7376', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'yes'),
(15, 'abc', 'akm7376', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'yes'),
(16, 'abc', 'akm7376', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'yes'),
(17, 'abc', 'akm7376', 'Online Quiz', 'hi', 'yes'),
(18, 'abc', 'akm7376', 'New ', 'hi! there ', 'yes'),
(19, 'abc', 'akm7376', 'again new msg', 'this is new msg', 'yes'),
(20, 'abc', 'kkg', 'jllj', 'dsdldlds', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

DROP TABLE IF EXISTS `student_reg`;
CREATE TABLE IF NOT EXISTS `student_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(13) NOT NULL,
  `sem` int(5) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `fname`, `lname`, `username`, `password`, `email`, `contact`, `sem`, `rollno`, `status`) VALUES
(4, 'Abhishek', 'Mishra', 'akm7376', '12345', 'abhi@gmail.com', 1234567, 5, '1616610006', 'YES'),
(3, 'Krishna', 'Kumar', 'kkg', '1212', 'kkg@gmail.com', 987456321, 5, '1616610024', 'YES');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
