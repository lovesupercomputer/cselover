-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 08:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Mr. Nazim Zaidi', 'officer.eci@india');

-- --------------------------------------------------------

--
-- Table structure for table `prc`
--

CREATE TABLE IF NOT EXISTS `prc` (
  `prc` varchar(16) NOT NULL DEFAULT '',
  `uidno` varchar(16) NOT NULL DEFAULT '',
  `fname` varchar(35) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL,
  `sex` varchar(12) DEFAULT NULL,
  `fathername` varchar(45) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `houseno` varchar(25) DEFAULT NULL,
  `at` varchar(25) DEFAULT NULL,
  `po` varchar(25) DEFAULT NULL,
  `ps` varchar(25) DEFAULT NULL,
  `const` varchar(25) DEFAULT NULL,
  `pin` varchar(8) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`prc`),
  UNIQUE KEY `uidno` (`uidno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prc`
--

INSERT INTO `prc` (`prc`, `uidno`, `fname`, `lname`, `sex`, `fathername`, `bday`, `houseno`, `at`, `po`, `ps`, `const`, `pin`, `state`, `district`, `mobile`, `email`) VALUES
('219575423', '791401861580', 'Jyoti', 'Kumari', 'female', 'Om Prakash', '1998-01-05', 'GR007', 'Chakand Garh', 'Chakand', 'Chandauti', 'Belaganj', '804404', 'Bihar', 'Gaya', '+91-8804135063', 'jyoti.pragyanvihar@gmail.com'),
('43356244', '831819334934', 'Sahej', 'Munda', 'male', 'Sri Rameshwar Munda', '0000-00-00', 'ICH03', 'Ichadag Pandra', 'Ichadag', 'Ichadag', 'Ramgarh Sadar', '835219', 'Jharkhand', 'Ramgarh', '+91-8434247485', 'sahej.bitmesra@gmail.com'),
('485237230', '76847653423467', 'Anjni', 'Mishra', 'male', 'Akhilanand Mishra', '1985-07-05', 'GM003', 'Gumla', 'Gumla', 'Gumla', 'Gumla Sadar', '835413', 'Jharkhand', 'Gumla', '+91-9852486059', 'anjani.mishra@gmail.com'),
('535591710', '434674341614', 'Deepak', 'Kumar', 'male', 'Sri Om Prakash', '1998-01-05', 'GR007', 'Chakand Garh', 'Chakand', 'Chandauti', 'Belaganj', '804404', 'Bihar', 'Gaya', '+91-8804135063', 'love.supercomputer@gmail.com'),
('85239475', '841533554516', 'Sunita ', 'Devi', 'female', 'Sri Akhilanand Mishra', '1977-01-01', 'SN004', 'Shanti Nagar,Gumla', 'Gumla', 'Gumla', 'Gumla Sadar', '835207', 'Jharkhand', 'Gumla', '+91-9431067681', 'sunitamishra@gmail.com'),
('868593496', '319214146248', 'OM', 'Prakash', 'male', 'Sri Bhakti Kant Mishra', '1973-06-03', 'GR007', 'Chakand Garh', 'Chakand', 'Chandauti', 'Belaganj', '804404', 'Bihar', 'Araria', '+91-8804135063', 'pragyanvihar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `eno` varchar(16) NOT NULL,
  `fname` varchar(35) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL,
  `prc` varchar(16) DEFAULT NULL,
  `pass2` varchar(12) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`eno`, `fname`, `lname`, `prc`, `pass2`, `photo`) VALUES
('33078942', 'Deepak', 'Kumar', '535591710', 'nittedee', 'Deepak@.jpg'),
('63738843', 'Om', 'Prakash', '8685577745', '54545454', 'om prakash_2.jpg'),
('1165345217', 'Sahej', 'Munda', '43356244', '89898989', 'shaej.jpg'),
('470100785', 'Jyoti ', 'Kumari', '219575423', 'moni@ckh', 'IMG_20150430_093210.jpg'),
('917571935', 'Anjni', 'Mishra', '485237230', 'anjniansu', 'mamu 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `eno` varchar(16) NOT NULL,
  `vote` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`eno`, `vote`) VALUES
('917571935  ', '7'),
('63738843', '6'),
('', ''),
('33078942', '3'),
('1165345217', '4'),
('470100785', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
