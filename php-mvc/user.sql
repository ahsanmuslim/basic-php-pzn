-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:24 PM
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
-- Database: `workorder`
--

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
  `id_dept` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_register` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `profile` varchar(30) NOT NULL,
  `id_telegram` varchar(30) DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `email`, `no_telp`, `role`, `password`, `id_dept`, `status`, `tgl_register`, `profile`, `id_telegram`, `last_activity`) VALUES
(1, 'susanto', 'Susanto', 'susanto@argapura.com', '0857173968', 2, '176c3f739747b75670380ecf317717c501a1ea8b', 1, 1, '2022-10-17 03:13:32.885457', 'author.jpg', '747278008', '2022-10-17 03:13:32'),
(3, 'watno', 'Watno', 'watno@argapura.com', '085861282412', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-10-16 17:17:23.213903', 'default.jpg', '747278008', '2022-10-16 17:17:23'),
(4, 'robie', 'Robbie Maulidan', 'maintenance@argapura.com', '08119456241', 6, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-10-16 17:17:54.153627', 'admin.jpg', '747278008', '2022-10-16 17:17:54'),
(6, 'elman', 'Elman Firmansyah', 'elman.firmansyah@argapura.com', '085861282412', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(12, 'ardha', 'Ardha Dyota Ahimsa', 'ardha.dyota@argapura.com', '085643855562', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', NULL, '2022-05-25 02:15:51'),
(13, 'devaego', 'Arasena Devaego', 'devaego@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 13, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(14, 'yusriani', 'Siti Yusriani', 'siti.yusriani@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 13, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(15, 'agata', 'Agata Medeline', 'agatha@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 13, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(16, 'rully', 'Rully Prasethio', 'rully@argapura.com', '082212546987', 3, '412437c16aead562960ecc2f7b2c2dd2655fce78', 13, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(17, 'saepudin', 'Saepudin', 'saefudin@argapura.com', '082212546987', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 7, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(18, 'trikrist', 'Tri Kristiyanto', 'kristianto@argapura.com', '089671979312', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 9, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(19, 'saleh', 'Muhammad Saleh', 'saleh@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 9, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(20, 'david', 'David Andriyanto', 'david@argapura.com', '082212546987', 2, 'fa95adb880ea08bc1d5352db40c626b9a153cec4', 9, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(21, 'dicky', 'Dicky Irawan', 'dicky@argapura.com', '081932176000', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 9, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(22, 'maria', 'Maria Goreti', 'maria.goreti@argapura.com', '082212546987', 7, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-10-16 17:19:23.167897', 'default.jpg', '747278008', '2022-10-16 17:19:23'),
(23, 'admin', 'Administrator', 'ahmadsusanto912@gmail.com', '085717396839', 1, '176c3f739747b75670380ecf317717c501a1ea8b', 1, 1, '2022-11-03 06:13:23.513860', 'Santo.jpg', '1011454359', '2022-11-03 06:13:23'),
(26, 'anas', 'Anastasia Ratri Astuti', 'anas@argapura.com', '082212546987', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(27, 'nia', 'Theodora Nia Sari', 'theodora.nia@argapura.com', '08998455446', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(28, 'firza', 'Firza Desiana Putri', 'firza@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(29, 'rani', 'Rani Widuri', 'rani.widuri@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(30, 'sugi', 'Sugiarto', 'sugi@argapura.com', '082212546987', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(31, 'gendhis', 'Gendhis Ayu', 'gendhis.ayu@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '1451527275', '2022-05-25 02:15:51'),
(32, 'arif', 'Arif Priharyanto', 'arif@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(33, 'dollar', 'Dollar Hidayat', 'dollar.hidayat@argapura.com', '082242111731', 6, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '1746683599', '2022-05-25 02:15:51'),
(34, 'hasan', 'Hasanudin', 'hasanudin@argapura.com', '089629752553', 2, 'e5984d47ad91afca63c55782b1cb3d534d429336', 12, 1, '2022-05-25 02:15:51.734076', 'admin.jpg', '1711480891', '2022-05-25 02:15:51'),
(35, 'sarip', 'Sarip Hidayat', 'sarip.hidayat@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(36, 'suci', 'Suci Setiabudi', 'suci.setiabudi@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 12, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(37, 'reza', 'Reza', 'reza.rachman@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 14, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(38, 'mulia', 'Mulia Hutagalung', 'mulia.hutagalung@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 14, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(39, 'syarif', 'Syariffuddin', 'syarif@argapura.com', '082212546987', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 14, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(40, 'nono', 'Nono Karsono', 'stiffener@argapura.com', '082212546987', 2, 'ac57c046ceeba9a32bbcd786ff1a104c23e7c95a', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(44, 'aan.anwar', 'Aan Anwar', 'aan.anwar@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(45, 'endra', 'Endra Adi Sampurna', 'endra@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(47, 'yuli', 'Yuliani', 'yuliani@argapura.com', '082212546987', 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 17, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(48, 'kenny', 'Kenny Susanto', 'kenny@argapura.com', '085717396839', 4, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 11, 1, '2022-10-17 02:22:27.494759', 'default.jpg', '1681934771', '2022-10-17 02:22:27'),
(49, 'arandika', 'Arandika', 'arandika@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(50, 'bernart', 'Bernart Pardede', 'bernart.pardede@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(51, 'dendy', 'Dendy Ranjeng', 'dendy.pamungkas@argapura.com', '082212546987', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 0, '2022-10-16 16:28:35.783563', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(52, 'agus', 'Agus Cipto', 'noutong@argapura.com', '082212546987', 2, '5d615731078a6dd77dcee2c528920caee6b2fdf8', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(56, 'ifal', 'Ifal Syafaat', 'ifalsyafaat@gmail.com', '082212546987', 2, '176c3f739747b75670380ecf317717c501a1ea8b', 1, 1, '2022-05-25 02:15:51.734076', 'default.jpg', NULL, '2022-05-25 02:15:51'),
(57, 'aju', 'yulyana tandri', 'yulyana@argapura.com', '081586810732', 2, '788b203b81dd240b6b5616d813456c80867ec527', 11, 1, '2022-05-25 02:15:51.734076', 'default.jpg', NULL, '2022-05-25 02:15:51'),
(58, 'ade', 'Ade Mulyadi', 'ade.mulyadi@agapura.com', '085213413413', 8, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 16, 1, '2022-05-25 02:15:51.734076', 'default.jpg', '747278008', '2022-05-25 02:15:51'),
(59, 'adithia', 'Adithia Varuna Jayanegara', 'adithia@gmail.com', '081280077343', 5, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '2022-10-17 02:16:49.505784', 'default.jpg', '747278008', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role` (`role`) USING BTREE,
  ADD KEY `id_dept` (`id_dept`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`id_role`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_dept`) REFERENCES `department` (`id_dept`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
