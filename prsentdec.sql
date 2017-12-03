-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 10:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prsentdec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tjk_bestelling`
--

CREATE TABLE `tjk_bestelling` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `patronen` varchar(255) NOT NULL,
  `formaat` varchar(255) NOT NULL,
  `soort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tjk_users`
--

CREATE TABLE `tjk_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `huisnr` int(7) NOT NULL,
  `postcode` varchar(15) NOT NULL,
  `adres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjk_users`
--

INSERT INTO `tjk_users` (`id`, `username`, `achternaam`, `password`, `email`, `straat`, `huisnr`, `postcode`, `adres`) VALUES
(1, 'test', '', 'testpw', '', '', 0, '', ''),
(3, 'Jan', 'Jansen', 'abc', 'jan@jansen.vv', 'Steenstraat', 4, '1234 GZ', 'Gooi'),
(5, 'root', 'Groot', 'cde', 'peter@groot.nn', 'Landweg', 2, '1234 GG', 'Gooi'),
(6, 'root', 'Jansen', 'abc', 'jan@jansen.nn', 'Steenstraat', 7, '1234 GH', 'Hoogland'),
(7, 'root', 'Kraak', 'def', 'piet@kraak.mm', 'Groenstraat', 4, '6789 AS', 'Heerde'),
(8, 'root', 'Kraak', 'def', 'piet@kraak.mm', 'Groenstraat', 4, '6789 AS', 'Heerde'),
(9, 'root', 'Leer', 'qwer', 'geert@leer.cc', 'Waterweg', 1, '1234 RE', 'Laagwater'),
(11, 'Tea', 'Dijkstra', 'ghjk', 'tea@dijkstra', 'Grasweg', 4, '6544 JI', 'Aadorp'),
(13, 'Greetje', 'Rijnders', 'werd', 'greetje@rijnders.gg', 'Waterkant', 3, '2345', 'Haalem'),
(14, 'Gerda ', 'Albers', 'werd', 'gerd@albers.nn', 'Roos', 5, '6778', 'Houten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tjk_bestelling`
--
ALTER TABLE `tjk_bestelling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tjk_users`
--
ALTER TABLE `tjk_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tjk_bestelling`
--
ALTER TABLE `tjk_bestelling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tjk_users`
--
ALTER TABLE `tjk_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
