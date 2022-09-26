-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 07:21 AM
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
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `student` varchar(255) NOT NULL,
  `contribution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`student`, `contribution`) VALUES
('Nakib', '10'),
('Hana', '20'),
('Rafi', '25'),
('Disha', '10');

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
(12, 'c_d_imagedesigner-ss304.jpg', 'Will you laser cutting me as per the design I have given in steel. Hope to see something good from you.', '50*50', 'Metal'),
(13, 'c_d_imagewooden-pattern-laser.jpg', 'Will you laser cutting me as per the design I have given in wooden.', '30*30', 'wooden'),
(14, 'c_d_imageimg_4673.jpg', 'Will you laser cutting me as per the design I have given in Acrylic. Hope to see something good from you.', '60*60', 'Acrylic');

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
(6, 'phones-news.jpg', 'iphone 14', 'A magical new way to interact with iPhone. Groundbreaking safety features designed to save lives. An innovative 48MP camera for mind-blowing detail. All powered by the ultimate smartphone chip. Pro. Beyond. iPhone 14 Pro and iPhone 14 Pro Max  Pre-order s', '$799'),
(7, 'clock.PNG', 'Honeycomb Clock', 'When it comes to style, this honeycomb clock is oh-so sweet. Etsy seller Woodinky found inspiration in the Voronoi diagram combined with parametric design theory to create a time keeper that you don’t have to be a mathematician to love.', '$120'),
(8, 'lixie clock.PNG', 'Lixie Clock', 'Engineer Connor Nishijima loves the style and functionality of Nixie tube clocks and wanted to build one of his own. But the price point in today’s market was a deal-breaker. So he designed and built the Lixie—an LED Nixie clock—that incorporates edge lig', '$300');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
