-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 07:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bios`
--

-- --------------------------------------------------------

--
-- Table structure for table `biow`
--

CREATE TABLE `biow` (
  `Nama` varchar(50) NOT NULL,
  `NPM` varchar(20) NOT NULL,
  `TTL` varchar(20) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biow`
--

INSERT INTO `biow` (`Nama`, `NPM`, `TTL`, `Agama`, `Alamat`, `Email`, `Hobi`) VALUES
('Maulina', '17081010066', 'Surabaya, 16 juni 99', 'Islam', 'jl. petemon barat 135b', 'cimolimolis@gmail.com', 'Makan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
