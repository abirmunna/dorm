-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 07:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--



INSERT INTO `menu` (`day`, `breakfast_item`, `lunch_item`, `dinner_item`) VALUES
('Friday', 'Sliced Bread,Jam/Jelly, One egg/Banana', 'Birani', 'Rice, Chicken'),
('Monday', 'Sliced Bread,Jam/Jelly, One egg/Banana', 'Mutton Vuna Khicuri', 'Rice, Vegitble, Egg'),
('Saturday', 'Mutton Vuna Khicuri', 'Rice, Vorta, Fish', 'Rice, Vegitable, Chicken'),
('Sunday', 'Sliced Bread,Jam/Jelly, One egg/Banana', 'Rice, Vegitable, Chicken', 'Rice, Vorta, Fish'),
('Thursday', 'Sliced Bread,Jam/Jelly, One egg/Banana', 'Rice, Vegitable, Chicken', 'Mutton Vuna Khicuri'),
('Tuesday', 'Mutton Vuna Khicuri', 'Rice, Vorta, Fish', 'Rice, Vegitable, Chicken'),
('Wednesday', 'Sliced Bread,Jam/Jelly, One egg/Banana', 'Rice, Vorta, Fish', 'Rice, Vegitable, Chicken');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
