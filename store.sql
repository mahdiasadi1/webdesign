-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2019 at 07:30 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `chocolates`
--

DROP TABLE IF EXISTS `chocolates`;
CREATE TABLE IF NOT EXISTS `chocolates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `chocolates`
--

INSERT INTO `chocolates` (`id`, `price`, `type`, `name`, `country`) VALUES
(1, 20000, 'کاکایویی', 'مینو', NULL),
(2, 3000, 'قهوه با مغز فندق', 'ایدین', NULL),
(3, 4000, 'کارامل', 'ناتل', 'ایران'),
(4, 8000, 'نارگیلی', 'کیت کت', 'امریکا'),
(15, 10000, 'فندقی', 'شونیز', NULL),
(14, 6000, 'نارگیلی', 'آناتا', NULL),
(13, 4000, 'کارامل', 'ویتانا', 'ایران');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
