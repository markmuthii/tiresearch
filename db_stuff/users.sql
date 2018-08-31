-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 10:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `keywords` text,
  `qualifications` text,
  `experience` text,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phonenumber`, `username`, `password`, `role`, `created`, `keywords`, `qualifications`, `experience`, `resume`) VALUES
(1, 'Mark', 'Muthii', 'mark@muthii.me', '772219258', 'mark', '$2y$10$Fn2pCG1svzDbv29iSjtOA.52U4DX2Mmb7WYrFkNWNEMif.Fboz.sq', 'jobseeker', NULL, NULL, NULL, NULL, NULL),
(2, 'Kram', 'Aniam ', 'mark@muthii.mee', '772219258', 'markm', '$2y$10$MQuXwjAR.ZW4YZVvw.zlYuSndzWx9ey9xw/1toUg6IE65Acgs8nh6', 'jobseeker', NULL, NULL, NULL, NULL, NULL),
(3, 'Kram', 'Aniam', 'muthiimainam@gmail.com', '0772219258', 'kramm', '$2y$10$BpYB/bt2vc/6ogJltya4COPTVwGjTXTt/U01q8CeE7.Xpp6vdEYDm', 'jobseeker', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
