-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 11:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity_laser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email_admin`, `password_admin`) VALUES
(1, 'nakibulislam54@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coustome_design_oder`
--

CREATE TABLE `coustome_design_oder` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `description` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coustome_design_oder`
--

INSERT INTO `coustome_design_oder` (`id`, `image`, `description`, `size`, `materials`) VALUES
(1, '3123.PNG', 'I want best one.', '20', 'wooden'),
(2, '3123.PNG', 'I want best one.', '20', 'Metal'),
(3, '34.PNG', 'Do best for my product', '30', 'Acrylic'),
(4, '665373.jpg', 'I want best one.', '40', 'wooden');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(1, 'Md Nakibul', 'islam', 1627199815, 'nakibulislam54@gmail.com', 'nakib'),
(2, 'Hana', 'Sultan', 1773959859, 'hanasultan23@gmail.com', 'hana'),
(3, 'Arman', 'Hamid', 1773959859, 'armanhamid@gamil.com', 'arman'),
(4, 'Al Adib', 'Shupto', 1625641659, 'adinshupto@gmail.com', 'adib'),
(5, 'Nure Nannat', 'Disha', 1738018505, '1930160@iub.edu.bd', '12345'),
(6, 'Rafi', 'Islam', 12645695, 'rafiislam12@gmail.com', 'rafi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `description`, `price`) VALUES
(1, 'Skin-Touch-Mobile-Case-Full-Protection-Phone-Cover-Mobile-Phone-Accessories.jpg', 'Mobile Case Design', 'This design my make by our shop', '400'),
(2, 'images.jpg', 'Tree Design', 'This design my make by our shop', '200'),
(3, 'Wooden-wall-by-Wonderwall-Studios1.jpg', 'Wooden Design', 'This design my make by our shop', '500'),
(4, '123.jpg', 'Spiker Design', 'This design my make by our shop', '150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustome_design_oder`
--
ALTER TABLE `coustome_design_oder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coustome_design_oder`
--
ALTER TABLE `coustome_design_oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
