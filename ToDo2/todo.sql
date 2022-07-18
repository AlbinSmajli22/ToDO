-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `done` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `start`, `end`, `description`, `tags`, `priority`, `done`) VALUES
(1, 'To Do app', '2022-07-15', '2022-07-18', 'Aplikacion qe perdoret per shenimin e taskave gjat punes tuaj', '', 'no', 'no'),
(2, 'Portofolio Web', '2022-07-14', '2022-07-19', 'Nje Web qe flet per veten tuaj dhe punen tuaj', '', 'no', 'yes'),
(4, 'Movie Page', '2022-07-14', '2022-07-29', 'Nje Web page per filma me pages', '', 'no', 'no'),
(5, 'Calculator', '2022-07-05', '2022-07-29', 'Makin qe sherben per kalkulim te numrave te ndryshum', 'no', 'yes', 'yes'),
(6, 'Online Food Ordering ', '2022-07-04', '2022-07-18', 'Aplikacion per porisitje online te ushqimit', 'no', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
