-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 04:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waki_lau`
--

-- --------------------------------------------------------

--
-- Table structure for table `hugo_keyboards`
--

CREATE TABLE `hugo_keyboards` (
  `keyb_id` int(11) NOT NULL,
  `keyb_brand` text NOT NULL,
  `keyb_model` text NOT NULL,
  `keyb_type` text NOT NULL,
  `keyb_connectivity` text NOT NULL,
  `keyb_price` int(11) NOT NULL,
  `keyb_layout` text NOT NULL,
  `keyb_switch` text NOT NULL,
  `keyb_rgb` text NOT NULL,
  `keyb_programmableKeys` text NOT NULL,
  `keyb_warranty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hugo_keyboards`
--

INSERT INTO `hugo_keyboards` (`keyb_id`, `keyb_brand`, `keyb_model`, `keyb_type`, `keyb_connectivity`, `keyb_price`, `keyb_layout`, `keyb_switch`, `keyb_rgb`, `keyb_programmableKeys`, `keyb_warranty`) VALUES
(2, 'Royal Kludge', 'H81', 'Membrane', 'Wired', 120, 'Wired', 'Sky Cyan', 'Yes', '30', '1 year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hugo_keyboards`
--
ALTER TABLE `hugo_keyboards`
  ADD PRIMARY KEY (`keyb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hugo_keyboards`
--
ALTER TABLE `hugo_keyboards`
  MODIFY `keyb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
