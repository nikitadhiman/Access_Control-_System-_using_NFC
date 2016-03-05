-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2016 at 06:01 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphical_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `layer` bigint(7) NOT NULL,
  `1` varchar(800) NOT NULL,
  `2` varchar(800) NOT NULL,
  `3` varchar(800) NOT NULL,
  `4` varchar(800) NOT NULL,
  `5` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `access_code` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `clg` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `userimage` varchar(800) NOT NULL,
  `combo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`access_code`, `username`, `password`, `name`, `clg`, `email`, `phone`, `userimage`, `combo`) VALUES
(436677, 'nikita', '123456', 'nikita dhiman', 'st john', 'nikita@gmail.com', 1231234561, 'images/nikita.jpg', '18646ae46c83285e2e95b62fc8f7bfcad74073cce2d2499f71091aa2fa90fdf7'),
(486159, 'ronit', 'ronitdias', 'Ronit Dias', 'SJCET', 'ronit@gmail.com', 8446582998, '', 'f978b0e01ff930914eb84da5d1a522173581d7fabddf00b45405f4b918d7b2fb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`layer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`,`email`,`phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
