-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 02:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `a_id` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`a_id`, `email`, `password`) VALUES
(1, 'sedhal4356@gmail.com', 'sedhal@123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `cart_id` int(3) NOT NULL,
  `model` varchar(20) NOT NULL,
  `material` varchar(15) NOT NULL,
  `price` varchar(4) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`cart_id`, `model`, `material`, `price`, `qty`, `email`) VALUES
(17, 'VX GV ACTIV ACH23 C0', 'Metal', '4999', '1', 'binoymakwana43@gmail.com'),
(39, 'i-gog Full rim frame', 'Glass', '3999', '15', 'dixeetam@gmail.com'),
(40, 'Full Rim Frame ', 'Fiber', '4999', '1', 'dixeetam@gmail.com'),
(41, 'Olvin Rim Frame', 'fiber', '500', '2', 'arpita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `name`) VALUES
(3, 'clothes'),
(4, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `c_id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`c_id`, `fname`, `email`, `message`) VALUES
(7, 'arpita', 'arpita@gmail.com', 'best site ever...'),
(8, 'raju', 'raju@gmail.com', 'Best site ever!!!!'),
(9, 'sedhal', 'sedhal4356@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_optics`
--

CREATE TABLE `tb_optics` (
  `o_id` int(3) NOT NULL,
  `model` varchar(20) NOT NULL,
  `material` varchar(15) NOT NULL,
  `price` varchar(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_optics`
--

INSERT INTO `tb_optics` (`o_id`, `model`, `material`, `price`, `gender`, `img`) VALUES
(39, 'i-gog Full rim frame', 'Glass', '3999', 'Female', 'upload/img6.jpg'),
(40, 'Zyden Round Frame', 'Metal', '509', 'Male', 'upload/img5.jpg'),
(41, 'i-gog Rim Frame', 'fiber', '500', 'Male', 'upload/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(3) NOT NULL,
  `model` varchar(20) NOT NULL,
  `material` varchar(15) NOT NULL,
  `price` varchar(4) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `model`, `material`, `price`, `qty`, `email`, `date`) VALUES
(8, 'VX GV ACTIV ACJ02 B', 'Metal', '3999', '1', 'dixeetam@gmail.com', '2016-10-14'),
(11, 'VX GV ACTIV ACH23 C0', 'Metal', '4999', '2', 'dixeetam@gmail.com', '2016-10-16'),
(12, 'VX GV ACTIV ACH23 C0', 'Metal', '4999', '2', 'dixeetam@gmail.com', '2016-10-16'),
(13, 'Full Rim Frame ', 'Fiber', '4999', '1', 'dixeetam@gmail.com', '2017-10-08'),
(14, 'Full Rim Frame ', 'Fiber', '4999', '1', 'dixeetam@gmail.com', '2017-10-08'),
(15, 'Full Rim Frame ', 'Fiber', '4999', '1', 'dixeetam@gmail.com', '2017-10-08'),
(16, 'Full Rim Frame ', 'Fiber', '4999', '1', 'dixeetam@gmail.com', '2017-10-08'),
(17, 'Full Rim Frame ', 'Fiber', '4999', '5', 'dixeetam@gmail.com', '2017-10-08'),
(18, 'Full Rim Frame ', 'Fiber', '4999', '2', 'dixeetam@gmail.com', '2017-10-08'),
(19, 'VX GV ACTIV ACJ02 B', 'Metal', '3999', '10', 'raju@gmail.com', '2017-10-09'),
(20, 'i-gog Full rim frame', 'Glass', '3999', '50', 'raju@gmail.com', '2017-10-09'),
(21, 'Full Rim Frame ', 'Fiber', '4999', '3', 'appi@gmail.com', '2017-10-09'),
(23, 'Zyden Round Frame', 'Metal', '509', '3', 'abc@gmail.com', '2017-10-10'),
(24, 'i-gog Full rim frame', 'Glass', '3999', '1', 'abc@gmail.com', '2017-10-10'),
(25, 'Full Rim Frame ', 'Fiber', '4999', '15', 'raju@gmail.com', '2017-10-11'),
(26, 'Full Rim Frame ', 'Fiber', '4999', '50', 'raju@gmail.com', '2017-10-11'),
(27, 'i-gog Full rim frame', 'Glass', '3999', '2', 'raju@gmail.com', '2017-10-11'),
(28, 'i-gog Full rim frame', 'Glass', '3999', '10', 'sedhal4356@gmail.com', '2018-01-27'),
(29, 'Zyden Round Frame', 'Metal', '509', '1', 'sedhal4356@gmail.com', '2018-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registration`
--

CREATE TABLE `tb_registration` (
  `reg_id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_registration`
--

INSERT INTO `tb_registration` (`reg_id`, `fname`, `lname`, `sex`, `username`, `email`, `phone`, `dob`, `password`) VALUES
(7, 'Binoy', 'Makwana', '', '', 'binoymakwana43@gmail.com', '8488058270', '05/10/1995', 'dhIngali143'),
(10, 'abc', 'xyz', '', '', 'abc@gmail.com', '7894561230', '25/9/1995', '123456'),
(11, 'raju', 'rajput', '', '', 'raju@gmail.com', '9874563210', '16/10/1993', 'test@123'),
(12, 'appi', 'chaudhari', '', '', 'appi@gmail.com', '7894656132', '25/9/1995', '123456'),
(13, 'arpita', 'chaudhari', '', '', 'arpita@gmail.com', '7894561230', '25/9/1995', '123456'),
(14, 'sedhal', 'soni', '', '', 'sedhal4356@gmail.com', '1234567890', '18/11/1994', 'sedhal123'),
(15, 'vdachjdcaj', 'vdhvsdjhvjh', 'male', 'bsacghcdg', 'csgca@gmail.com', '1234567890', '18/11/1994', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `s_id` int(2) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `pdf` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`s_id`, `sname`, `pdf`) VALUES
(1, 'Cataract Surgery', 'pdf/cataract.pdf'),
(2, 'Contact Lenses', 'pdf/contact-lenses.pdf'),
(3, 'Diabetes', 'pdf/diabetic-retinopathy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_info`
--

CREATE TABLE `tb_user_info` (
  `u_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `address` varchar(150) NOT NULL,
  `landmark` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_optics`
--
ALTER TABLE `tb_optics`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_registration`
--
ALTER TABLE `tb_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user_info`
--
ALTER TABLE `tb_user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `a_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `cart_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_optics`
--
ALTER TABLE `tb_optics`
  MODIFY `o_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_registration`
--
ALTER TABLE `tb_registration`
  MODIFY `reg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `s_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user_info`
--
ALTER TABLE `tb_user_info`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
