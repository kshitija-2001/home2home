-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 11:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home2home`
--

-- --------------------------------------------------------

--
-- Table structure for table `buisness`
--

CREATE TABLE `buisness` (
  `id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL,
  `buisnesstype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buisness`
--

INSERT INTO `buisness` (`id`, `name`, `email`, `password`, `buisnesstype`) VALUES
('61b20c2339d41', 'kshitija', 'examples123@gmail.com', '12345678', ''),
('61b20c9d2ea98', 'purva', '123@gmail.com', '1234', ''),
('61b20ccae0fb3', 'purva1', '1234@gmail.com', '12345', ''),
('61b20d267ad9c', 'purva2', 'xyz@gmail.com', '1234567', 'Snacks'),
('61b20e725a734', 'Shashank', 'bharambekshitija21@gmail.com', '1234567890', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
('61b1f7fdb8c74', 'kshitija', 'abc123@gmail.com', '123456'),
('61b1fcad13664', 'Kshitija Bharambe', 'bharambekshitija2@gmail.com', '123456789'),
('61b2066b47355', 'Kshitija Bharambe', 'pbharambe15@gmail.com', '12345r678'),
('61b20a5ea39fe', 'abc', 'abc1234@gmail.com', '123456'),
('61b20c1c9581c', 'Shashank', 'kshitijabharambe@gmail.com', '1234567890'),
('61b20c6406c0d', 'Shashank', 'kshitijabharambe12@gmail.com', '1234567890'),
('61b20e3e838ae', 'qwetgfdg', 'dsafsdf@fdhdfh.com', '21436457'),
('61b5c3a2f0b4e', 'Kshitija Bharambe', '1234@gmail.com', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
