-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 04:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `date`, `feedback`) VALUES
(41, 'mahima', '2021-04-07', 'dfdfdf'),
(44, 'mahima', '0000-00-00', ''),
(46, 'mahima', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `takeorder`
--

CREATE TABLE `takeorder` (
  `id` int(50) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `takeorder`
--

INSERT INTO `takeorder` (`id`, `order_date`, `username`, `item_name`, `quantity`, `price`) VALUES
(77, '2021-04-15 08:39:08', 'mahima', 'Doughnuts', 34, 34),
(78, '2021-04-15 08:43:13', 'mahima', 'Doughnuts', 112, 112),
(79, '2021-04-15 13:03:54', 'mahima', 'Burger', 22, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(13, 'Paratha', '13.jpg', 20.00),
(12, 'Sandwich', '12.jpg', 40.00),
(11, 'Coffee', '11.jpg', 60.00),
(6, 'MO:MO', '14.jpg', 100.00),
(7, 'Burger', '15.jpg', 120.00),
(14, 'Chowmin', '17.jpg', 90.00),
(8, 'Samosa', '18.jpg', 40.00),
(9, 'Doughnuts', '20.jpg', 80.00),
(36, 'pizza', '16.jpg', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `user`, `email`, `contact`) VALUES
(1, 'admin', 'admin', 'admin', '', ''),
(2, 'trilo', '1234', '', 'aryaltrylowchan@gmai', '9861574412'),
(3, 'mahima', '1234', '', 'aryaltrylowchan@gmai', '984999489');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takeorder`
--
ALTER TABLE `takeorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `takeorder`
--
ALTER TABLE `takeorder`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
