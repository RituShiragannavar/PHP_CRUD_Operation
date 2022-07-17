-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 04:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chicken`
--

-- --------------------------------------------------------

--
-- Table structure for table `sire`
--

CREATE TABLE `sire` (
  `s_id` int(15) NOT NULL,
  `s_color` varchar(20) NOT NULL,
  `s_breed` varchar(25) NOT NULL,
  `s_bloodline` varchar(30) NOT NULL,
  `s_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sire`
--

INSERT INTO `sire` (`s_id`, `s_color`, `s_breed`, `s_bloodline`, `s_address`) VALUES
(1, 'Backtailed', 'Bielefelder', 'hatch', 'Germany'),
(2, 'brown', 'Ausralorp', 'Black Butcher', 'Londan'),
(3, 'white', 'silkie', 'Supermacy', 'Belgium'),
(4, 'Pencilled', 'Mug asil', 'Asil', 'England'),
(5, 'redbrown', 'Giro Blanco', 'Sweater', 'Londan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sire`
--
ALTER TABLE `sire`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sire`
--
ALTER TABLE `sire`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
