-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 03:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingcareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `mem_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mem_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mem_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_lastName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_type` int(1) NOT NULL COMMENT '1=admin,2=member',
  `mem_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `mem_email`, `mem_pass`, `mem_name`, `mem_lastName`, `mem_tel`, `mem_type`, `mem_create`) VALUES
(1, 'te@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'เต้', 'เต้', '1111111111', 1, '2016-09-05 23:13:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
