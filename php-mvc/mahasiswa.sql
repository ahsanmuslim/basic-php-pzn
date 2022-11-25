-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `controller`
--

CREATE TABLE `controller` (
  `id` int(11) NOT NULL,
  `nama_controller` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `controller`
--

INSERT INTO `controller` (`id`, `nama_controller`) VALUES
(1, 'home'),
(2, 'about'),
(3, 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `email`, `alamat`) VALUES
('201514063', 'Ahmad Susanto', 'Teknik Informatika', 'ahmadsusanto912@gmail.com', 'Kp. Pabuaran, Curug Kulon, Curug'),
('2015148987', 'Arina Sabila', 'Teknik Elektro', 'arin@gmail.com', 'Panongan');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(3) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` int(3) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_register` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `profile` varchar(30) NOT NULL,
  `id_telegram` varchar(30) DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `email`, `no_telp`, `role`, `password`, `status`, `tgl_register`, `profile`, `id_telegram`, `last_activity`) VALUES
(1, 'susanto', 'Susanto', 'susanto@gmail.com', '0857173968', 1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2022-11-24 00:15:13.699743', 'author.jpg', '747278008', '2022-10-17 03:13:32'),
(2, 'watno', 'Watno', 'watno@gmail.com', '085861282412', 2, '8cb2237d0679ca88db6464eac60da96345513964', 1, '2022-11-24 13:45:49.434242', 'default.jpg', '747278008', '2022-10-16 17:17:23'),
(3, 'elman', 'Elman Firmansyah', 'elman@gmail.com', '085861282412', 3, '8cb2237d0679ca88db6464eac60da96345513964', 1, '2022-11-24 13:45:56.139626', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(4, 'ardha', 'Ardha Dyota Ahimsa', 'ardha@gmail.com', '085643855562', 2, '8cb2237d0679ca88db6464eac60da96345513964', 1, '2022-11-21 16:28:46.003410', 'default.jpg', NULL, '2022-05-25 02:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_acces`
--

CREATE TABLE `user_acces` (
  `id` int(20) NOT NULL,
  `role` int(3) NOT NULL,
  `controller` int(3) NOT NULL,
  `create` int(1) DEFAULT NULL,
  `update` int(1) DEFAULT NULL,
  `delete` int(1) DEFAULT NULL,
  `print` int(1) DEFAULT NULL,
  `import` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_acces`
--

INSERT INTO `user_acces` (`id`, `role`, `controller`, `create`, `update`, `delete`, `print`, `import`) VALUES
(1885, 2, 1, NULL, NULL, NULL, NULL, NULL),
(1886, 2, 2, NULL, NULL, NULL, NULL, NULL),
(1887, 1, 1, NULL, NULL, NULL, NULL, NULL),
(1888, 1, 3, NULL, NULL, NULL, NULL, NULL),
(1889, 1, 2, NULL, NULL, NULL, NULL, NULL),
(1890, 3, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controller`
--
ALTER TABLE `controller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `user_acces`
--
ALTER TABLE `user_acces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`role`),
  ADD KEY `id_menu` (`controller`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controller`
--
ALTER TABLE `controller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_acces`
--
ALTER TABLE `user_acces`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1891;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_acces`
--
ALTER TABLE `user_acces`
  ADD CONSTRAINT `user_acces_ibfk_1` FOREIGN KEY (`controller`) REFERENCES `controller` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_acces_ibfk_2` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
