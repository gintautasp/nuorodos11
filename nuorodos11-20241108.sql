-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 12:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuorodos11`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuorodos`
--

CREATE TABLE `nuorodos` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `pav` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipas` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ar_viesa` tinyint(4) NOT NULL,
  `zymos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nuorodos`
--

INSERT INTO `nuorodos` (`id`, `data`, `pav`, `url`, `tipas`, `ar_viesa`, `zymos`) VALUES
(1, '2024-11-08 11:30:25', 'Madingų baldų tendencijos', 'https://www.varle.lt/blog/5-svarbiausios-madingu-baldu-tendencijos-2022-m/', 'kiti', 1, 'baldai, interjeras, mados');

-- --------------------------------------------------------

--
-- Table structure for table `zymos`
--

CREATE TABLE `zymos` (
  `zyma` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kiek_kartojasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zymos`
--

INSERT INTO `zymos` (`zyma`, `kiek_kartojasi`) VALUES
('baldai', 0),
('interjeras', 0),
('mados', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nuorodos`
--
ALTER TABLE `nuorodos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zymos`
--
ALTER TABLE `zymos`
  ADD PRIMARY KEY (`zyma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nuorodos`
--
ALTER TABLE `nuorodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
