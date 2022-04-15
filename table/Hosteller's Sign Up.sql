-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 04:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sxcran`
--

-- --------------------------------------------------------

--
-- Table structure for table `Hosteller's Sign Up`
--

CREATE TABLE IF NOT EXISTS `hosteller's sign up` (
  `First Name` varchar(20) NOT NULL,
  `Middle Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Class Roll no.` int(3) NOT NULL,
  `Exam Roll no.` varchar(12) NOT NULL,
  `Registration Roll no.` varchar(11) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Father's Occupation` varchar(30) NOT NULL,
  `Line1` varchar(100) NOT NULL,
  `Line2` varchar(100) NOT NULL,
  `Line3` varchar(100) NOT NULL,
  `Line4` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Mobile no.:` int(10) NOT NULL,
  `New Password` varchar(20) NOT NULL,
  `Confirm Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hosteller's Sign Up`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
