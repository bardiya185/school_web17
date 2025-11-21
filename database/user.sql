-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2025 at 03:44 AM
-- Server version: 5.7.24
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
-- Database: `scidata`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `rowid` int(11) NOT NULL COMMENT 'شماره سطر',
  `fandlname` varchar(50) DEFAULT NULL COMMENT 'نام و نام خانوادگی',
  `username` varchar(10) DEFAULT NULL COMMENT 'نام کاربری',
  `phone` varchar(11) DEFAULT NULL COMMENT 'شماره تلفن',
  `password` varchar(9) DEFAULT NULL COMMENT 'رمز عبور',
  `color_profile` varchar(20) DEFAULT '#4C5D7EFF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`rowid`, `fandlname`, `username`, `phone`, `password`, `color_profile`) VALUES
(1, 'سیدرضا میرمحمدی', 'seyed', '09334274074', 'R4274074m', '#4C5D7EFF'),
(2, 'غلامعلی صائمی فرد', 'saemi', '09113388013', 'g1234567s', '#4C5D7EFF'),
(3, 'بردیا واحدی', 'bardiya', '09371967351', 'B1234567v', '#4C5D7EFF'),
(7, 'بردیا واحدی', 'bardiya18', '09371967351', 'bardiya12', 'rgb(76, 93, 126)'),
(8, 'حامد فدایی', 'bardiya34', '09356743212', 'bardiya1', '#4C5D7EFF'),
(9, 'حامد بابایی', 'mahan23', '09271867531', 'bardiya36', 'rgb(76, 93, 126)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'شماره سطر', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
