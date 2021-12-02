-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 02:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daraz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `cid`, `name`) VALUES
(1, 1, 'apple'),
(2, 1, 'samsung'),
(3, 2, 'ibm'),
(4, 2, 'intel'),
(5, 4, 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `cusid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`cusid`, `pid`, `id`) VALUES
(10, 168, 27),
(11, 168, 28);

-- --------------------------------------------------------

--
-- Table structure for table `catagary`
--

CREATE TABLE `catagary` (
  `cid` int(11) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagary`
--

INSERT INTO `catagary` (`cid`, `type`) VALUES
(1, 'moble'),
(2, 'computer'),
(3, 'ram'),
(4, 'laptops'),
(5, 'hard drive');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusid` int(11) NOT NULL,
  `cusname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cusphone` varchar(25) NOT NULL,
  `cuspass` varchar(25) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `varify` tinyint(1) NOT NULL DEFAULT 0,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `cusname`, `email`, `cusphone`, `cuspass`, `vkey`, `varify`, `city`) VALUES
(10, 'mobile', 'abdulhannanlhr@gmail.com', '45235454', 'fds', '2897a2222187780d18cf14232100ddea', 1, 'lahore'),
(11, 'hduoerherh', 'abdulhannanlhr@gmail.com', 'efwww', 'asdasd', '1e9ae27928acaab95b9d97d87f14ba6f', 1, 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `eid` int(11) NOT NULL,
  `ename` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ephone` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `epass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `ename`, `city`, `email`, `ephone`, `address`, `epass`) VALUES
(1, 'abdul', 'lahore', 'ge', '63456', 'rgfgdfh', 'gdg'),
(2, '23r3r', 'karachi', 'drg', 'rge', 'erg', 'erg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `oid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cusid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `eid`, `pid`, `cusid`, `address`, `phone`, `quantity`) VALUES
(10, 1, 8, 10, 'wfwf', '45235454', 12),
(11, 1, 15, 10, 'wfwf', '45235454', 12),
(12, 1, 168, 10, 'wfwf', '45235454', 12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `quantity` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `price`, `description`, `img`, `quantity`, `bid`, `cid`) VALUES
(8, 'lop', 34, 'ewrrrrrrrrggggggggggggggggggggggggggggggggge', 0x75706c6f61647366696c652f7469746c652d696d672e706e67, 32, 1, 2),
(15, 'computer', 34, 'weeweweweewe', 0x75706c6f61647366696c652f7469746c652d696d672e706e67, 32, 1, 2),
(16, 'laptop', 34, 'weeweweweewe', 0x75706c6f61647366696c652f7469746c652d696d672e706e67, 32, 1, 2),
(167, 'mobile', 34, 'weeweweweewe', 0x75706c6f61647366696c652f7469746c652d696d672e706e67, 32, 1, 2),
(168, 'loptop', 34, 'ewrrrrrrrrgggggggggggggggggggggggggggggggggggggggg', 0x75706c6f61647366696c652f7469746c652d696d672e706e67, 32, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcatagary`
--

CREATE TABLE `subcatagary` (
  `name` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  `scid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcatagary`
--

INSERT INTO `subcatagary` (`name`, `cid`, `scid`) VALUES
('mac book', 1, 0),
('ibm computer', 2, 0),
('ssd 1', 5, 0),
('ibm computer', 4, 0),
('ddr1', 3, 0),
('dd3', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`cusid`),
  ADD KEY `foreign key-1` (`pid`);

--
-- Indexes for table `catagary`
--
ALTER TABLE `catagary`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `cid` (`cid`),
  ADD KEY `bid` (`bid`),
  ADD KEY `cusid` (`cusid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cid` (`pid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `cusid` (`cusid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `subcatagary`
--
ALTER TABLE `subcatagary`
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `catagary` (`cid`);

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`),
  ADD CONSTRAINT `foreign key-1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `catagary` (`cid`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `brand` (`bid`),
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`),
  ADD CONSTRAINT `history_ibfk_4` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `emp` (`eid`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`),
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `catagary` (`cid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `brand` (`bid`);

--
-- Constraints for table `subcatagary`
--
ALTER TABLE `subcatagary`
  ADD CONSTRAINT `subcatagary_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `catagary` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
