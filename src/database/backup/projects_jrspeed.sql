-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_jrspeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `img` text NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `type`, `img`, `price`, `description`) VALUES
(1, 'NEW STRADA RIVAL XPLR 1X12', 'BIKE', 'src\\img\\bikes\\strada-icr-rival-xplr.png', 5199, 'ROAD BIKE'),
(2, 'NEW STRADA RIVAL AXS 2X12', 'BIKE', 'src\\img\\bikes\\strada-icr-rival-axs-2x12.png', 5499, 'ROAD BIKE'),
(3, 'NEW STRADA FORCE D1 AXS 2X12', 'BIKE', 'src\\img\\bikes\\new-strada-force-d1-axs-2x12.png', 5499, 'ROAD BIKE'),
(4, 'EXPLORO ULTRA RIVAL 1X11', 'BIKE', 'src\\img\\bikes\\expngjpg', 3299, 'GRAVEL BIKE'),
(5, 'EXPLORO ULTRA RIVAL XPLR 1X12 650B', 'BIKE', 'src\\img\\bikes\\exploro-ultra-rival-1x11 650b.png', 4999, 'GRAVEL BIKE'),
(6, 'EXPLORO ULTRA FORCE D1/EAGLE AXS 1X', 'BIKE', 'src\\img\\bikes\\exploro-ultra-force-d1eagle-axs-1x.png', 5799, 'GRAVEL BIKE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks`
--

CREATE TABLE `tbl_stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_count` int(11) NOT NULL,
  `low_stock_indicator` int(11) NOT NULL,
  `date_modified` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_stocks`
--

INSERT INTO `tbl_stocks` (`id`, `product_id`, `stock_count`, `low_stock_indicator`, `date_modified`) VALUES
(1, 1, 10, 5, '2023-04-23'),
(2, 2, 3, 5, '2023-04-23'),
(3, 3, 8, 5, '2023-04-23'),
(4, 4, 5, 5, '2023-04-23'),
(5, 5, 6, 5, '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `position` text NOT NULL,
  `email` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user`, `pass`, `position`, `email`, `fname`, `lname`, `contact`) VALUES
(1, 'admin', '1', 'administrator', 'vnc@gmail.com', 'vincent', 'rivera', '09569986654'),
(2, 'cashier', '1', 'cashier', 'kiana@gmail.com', 'kiana', 'alexis', '09588425569'),
(3, 'dev', '1', 'customer', 'xxx@gmail.com', 'xxx', 'xxx', '09123423413');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stocks`
--
ALTER TABLE `tbl_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_stocks`
--
ALTER TABLE `tbl_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
