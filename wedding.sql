-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 07:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `foto`) VALUES
(1, '../uploads/649a702853014_yoru.jpg'),
(2, '../uploads/649a702853016_jett.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(32) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `foto`) VALUES
(3, '../uploads/64966ca134540_photo-1475113548554-5a36f1f523d6.jpg'),
(4, '../uploads/64942680da9e8_photo-1513836279014-a89f7a76ae86.jpg'),
(5, '../uploads/6494268721fd4_photo-1518173946687-a4c8892bbd9f.jpg'),
(6, '../uploads/649433e495b33_photo-1518495973542-4542c06a5843.jpg'),
(7, '../uploads/6494380d616f5_photo-1546514355-7fdc90ccbd03.jpg'),
(13, '../uploads/649a6fe6d30b7_photo-1414609245224-afa02bfb3fda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai`
--

CREATE TABLE `mempelai` (
  `id` int(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mempelai`
--

INSERT INTO `mempelai` (`id`, `nama`, `namaLengkap`, `gender`) VALUES
(1, 'Yoru', 'Muhammad Yoru', 'L'),
(2, 'Jett', 'Siti Nur Jett', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggal`
--

INSERT INTO `tanggal` (`id`, `tanggal`, `waktu`) VALUES
(1, '2023-06-28', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(32) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `judul`, `tanggal`, `deskripsi`, `foto`) VALUES
(1, 'Bertemu', 'Juni 2020', 'Bertemu di Haven', '../uploads/649a65db90b58_yj.jpg'),
(2, 'Bekerja Bersama', 'Januari 2021', 'Bekerja bersama di Valorant', '../uploads/649a662331f2f_jett_and_yoru_by_chaiffon_deq9f89-fullview.jpg'),
(3, 'Berhasil Clutch', 'Juni 2022', 'Berhasil clutch bersama 2v5 dan menyelamatkan tim dari kekalahan', ''),
(4, 'Menikah', 'Juni 2023', 'Slebeww', ''),
(6, 'COBA', 'COBA', 'COBACIOACAOBIC', '');

-- --------------------------------------------------------

--
-- Table structure for table `ucapan`
--

CREATE TABLE `ucapan` (
  `id` int(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ucapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ucapan`
--

INSERT INTO `ucapan` (`id`, `nama`, `ucapan`) VALUES
(1, 'Sage', 'Fusce et enim facilisis, ultricies tellus cursus, gravida turpis. Aliquam id fermentum erat. Donec commodo quam et purus consectetur tristique.'),
(2, 'Chamber', 'Nulla quis nisi ac nunc mattis placerat. Quisque at quam eget orci tempor fermentum feugiat quis elit. Vestibulum lacinia posuere egestas.'),
(3, 'Harbor', 'Nullam ut finibus nibh, vel pellentesque diam. Aenean vehicula eleifend odio, eget eleifend velit ultrices eu. Proin arcu ante, tempor id volutpat id, accumsan sit amet risus. '),
(4, 'Brim', 'Ajojing ala ala ajojing'),
(5, 'Skye', 'asede ***** sama lo semua'),
(6, 'Cypher', 'giggigigiggiigiggigigigiigimme a corpse'),
(7, 'Omen', 'behind you'),
(8, 'Fade', 'aweaweaweawewewewewewe'),
(10, 'Gecko', 'Oye! Monster on the loose!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mempelai`
--
ALTER TABLE `mempelai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mempelai`
--
ALTER TABLE `mempelai`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
