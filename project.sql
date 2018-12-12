-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 07:59 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `resultshow` ()  BEGIN
SELECT * from result;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Adi', '9631111359'),
('ani', '12345'),
('barsha', '123'),
('Hiku', '8235359523');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CID` int(10) NOT NULL,
  `CName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CID`, `CName`, `Address`, `PID`) VALUES
(102, 'Arwind kejriwal', 'Delhi', 202),
(110, 'hitesh', 'dsfk', 206),
(111, 'anirudh', 'aecs', 201),
(123, 'Narendra Modi', 'Gujarat', 201),
(155, 'Nitesh kumar', 'bihar', 204),
(156, 'barsa', 'aecs layout', 204),
(157, 'Lalu Yadav', 'bihar', 205),
(183, 'abc', 'xyz', 201),
(190, 'Poornima', 'Bangalore', 206),
(220, 'dfsf', 'gsgs', 204),
(420, 'Rahul Gandhi', 'Pune', 203);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `PID` int(11) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `Symbol` varchar(10) NOT NULL,
  `total_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`PID`, `PName`, `Symbol`, `total_vote`) VALUES
(201, 'BJP', 'Lotus', 9),
(202, 'AAP', 'Jhaaru', 9),
(203, 'Congress', 'Hand', 0),
(204, 'JDU', 'Arrow', 0),
(205, 'RJD', 'Lamp', 1),
(206, 'N/A', 'phone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `CnfPassword` varchar(40) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `Name`, `Email`, `password`, `CnfPassword`, `DOB`) VALUES
('1cr15cs024', 'anirudhya', 'deb.anirudh@gmail.com', 'anirudhya', 'anirudhya', '2018-10-10'),
('aa', 'aakash', 'heloo@gmail.com', 'hoo', 'hoo', '1965-12-12'),
('aaa', 'aabb', 'ashg@gmail.com', 'aghj123', 'aghj123', '2018-10-17'),
('abcd', 'abcde', 'jggjlghlh@gmail.com', 'anid123', 'anid123', '2018-11-08'),
('abhi', 'Abhinab', 'askj@aksh.cj', '1234', '1234', '2015-01-01'),
('abhisek', 'Abhisek Kumar', 'avik15ec@cmrit.ac.in', '1234', '1234', '1999-10-06'),
('Adku', 'Aditya kumar', 'adku15cs@cmrit.ac.in', '123456', '123456', '1997-01-20'),
('ani', 'Anurudh', 'kjsdhfjk@gmail.com', '12345', '12345', '1997-07-24'),
('asdf', 'rohan', 'afan@gmail', 'asdf', 'asdf', '1907-04-20'),
('Avin', 'Avinash modi', 'avin15cs@jhg.chk', '12345', '12345', '2012-01-30'),
('ayushi', 'Ayushi', 'ayus15cs@cmrit.ac.in', '1234', '1234', '1997-09-20'),
('barsa', 'Barsabaran Saha', 'hide@ggs.xc', '12345', '12345', '1997-01-31'),
('fyjgc', 'khgfhgf', 'zjkf@kash.cd', '1234', '1234', '1992-01-31'),
('Haseeb', 'Haseeb', 'jfd@skjf.cn', '12345', '12345', '1996-12-31'),
('hfkhfk', 'dkhfkdshf', 'asdkhf@kdh.j', '123654', '123654', '8787-05-04'),
('hiku', 'Hitesh', 'hiku15cs@cmrit.ac.in', '123456', '123456', '2017-01-02'),
('jhasgj', 'akjh', 'ashgh@dj.cj', '12345', '12345', '2017-11-23'),
('mdhf', 'wmfbe', 'skfh@jd.c', '12345', '12345', '1222-12-12'),
('Nehu', 'Neha', 'jsadhkj@zjv.cj', '8462', '8462', '2012-07-29'),
('qwerty', 'cat', 'asadd2aah@gan', 'qwerty', 'qwerty', '0202-01-30'),
('Rahul', 'Rahul ogi', 'raul15cv@cmrit.ac.in', '123', '123', '2012-11-03'),
('siva', 'siva', 'gsivanandham@gmail.com', 'sivamaster', 'sivamaster', '1980-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `CID` int(11) NOT NULL,
  `VoteCount` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`CID`, `VoteCount`, `PID`) VALUES
(102, 9, 202),
(110, 2, 206),
(111, 3, 201),
(123, 9, 201),
(155, 0, 204),
(156, 0, 204),
(157, 1, 205),
(183, 0, 201),
(190, 1, 206),
(220, 0, 204),
(420, 0, 203);

--
-- Triggers `result`
--
DELIMITER $$
CREATE TRIGGER `barsha` AFTER UPDATE ON `result` FOR EACH ROW UPDATE party SET total_vote=new.VoteCount 
WHERE party.PID=new.PID
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `PID` (`PID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `party` (`PID`) ON DELETE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `candidate` (`CID`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `party` (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
