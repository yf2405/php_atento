-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 12:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba_php_atento`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulary`
--

CREATE TABLE `formulary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulary`
--

INSERT INTO `formulary` (`id`, `name`, `email`, `password`, `birthday`, `city`) VALUES
(12, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', '34', '2023-03-21', 'Pereira'),
(13, 'Felipe ', 'yersonstuardlittle@hotmail.com', '343', '0325-05-31', 'Pereira'),
(14, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', 'erh', '2023-03-03', 'Pereira'),
(15, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', '23553', '2023-03-07', 'Pereira'),
(16, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', '436', '2023-03-10', 'Pereira'),
(17, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', '434', '2023-03-07', 'Pereira'),
(18, 'Felipe Correa', 'yersonstuardlittle@hotmail.com', '5756', '2023-03-10', 'Pereira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulary`
--
ALTER TABLE `formulary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulary`
--
ALTER TABLE `formulary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
