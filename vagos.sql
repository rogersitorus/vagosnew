-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 04:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vagos`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminvagos`
--

CREATE TABLE `adminvagos` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_alamat` text NOT NULL,
  `admin_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminvagos`
--

INSERT INTO `adminvagos` (`admin_id`, `admin_nama`, `admin_email`, `admin_password`, `admin_alamat`, `admin_gambar`) VALUES
(63, 'roger', 'roger@gmail.com', '$2y$10$ZQ69KKH1BX9k0EbErusC/eLIzweAvxsWULMglAANuIdXR1887zSr2', 'goa gong', 'bg-about.jpg'),
(64, 'yoga', 'yoga@gmail.com', '$2y$10$3MX/zq.lC5gEktQjS5ZQ7unVfjxuvqd6fzq2j8sIdOlNwzftLDiiO', 'abiansemal', 'heropicMobile.jpg'),
(65, 'pak dwi', 'dwi@gmail.com', '$2y$10$AeXL.1QlLgdh7L41gwrxWepbj.Byvb3U32MVklU3wiGJej6E6tpT6', 'denpasar', 'heropic (2).jpg'),
(66, 'pak dwi 2', 'dwi2@gmail.com', '$2y$10$aW6.ktgyMrDnt1e4b/R3ZugBUSI7Q1gkgel9EWLFOiIjBKf.gPTQS', 'thamrin', 'kunci.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_game` varchar(50) NOT NULL,
  `news_tanggal` date NOT NULL,
  `news_judul` text NOT NULL,
  `news_isi` text NOT NULL,
  `news_gambar` text NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_game`, `news_tanggal`, `news_judul`, `news_isi`, `news_gambar`, `news_id`) VALUES
('PUBG', '2023-09-05', 'KEMENANGAN VAGOS DI PIALA DUNIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta sed elit vitae imperdiet. Proin varius massa ac elit vulputate, in consequat diam pulvinar. Fusce scelerisque interdum ipsum, efficitur iaculis mauris feugiat ut. In facilisis odio sit amet est cursus, sed tempor lectus accumsan. Pellentesque dapibus, lorem quis laoreet auctor, turpis purus eleifend magna, sit amet vulputate ante ex pellentesque urna. Integer et egestas metus. Donec in nisl accumsan, fringilla ex id, faucibus ex. Curabitur finibus sem enim, vitae congue turpis pellentesque sit amet. Praesent nisi erat, egestas non bibendum id, blandit vitae lorem. Aenean nisl eros, porttitor in venenatis id, lacinia at ipsum. Aliquam semper ligula et mi vulputate, in bibendum dolor luctus. Aenean leo magna, suscipit at mauris vitae, tristique scelerisque est. Sed hendrerit dui et augue interdum imperdiet. Vivamus blandit ante non nunc blandit, id venenatis nisl tempor. Pellentesque ut efficitur risus, in porta dolor. Praesent eget laoreet mi.', 'heropic.jpg', 31),
('AYO DANCE', '2023-09-05', 'VAGOS MENANG AYO DANCE LEAGUE', 'dkalsdlawlwajdjaljdljl', 'news1.jpeg', 32),
('Mobile Legends', '2023-09-05', 'KEMENANGAN VAGOS DI PIALA DUNIA', 'dopawdadlaj kjawldjaldjaldak', 'video1.jpg', 33),
('DOTA 2', '2023-09-09', 'MENANG TI NIH BRO', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'bg-main-news.jpg', 34),
('Mobile Legends', '2023-09-25', 'dlaksldaldkaldlakk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta sed elit vitae imperdiet. Proin varius massa ac elit vulputate, in consequat diam pulvinar. Fusce scelerisque interdum ipsum, efficitur iaculis mauris feugiat ut. In facilisis odio sit amet est cursus, sed tempor lectus accumsan. Pellentesque dapibus, lorem quis laoreet auctor, turpis purus eleifend magna, sit amet vulputate ante ex pellentesque urna. Integer et egestas metus. Donec in nisl accumsan, fringilla ex id, faucibus ex. Curabitur finibus sem enim, vitae congue turpis pellentesque sit amet. Praesent nisi erat, egestas non bibendum id, blandit vitae lorem. Aenean nisl eros, porttitor in venenatis id, lacinia at ipsum. Aliquam semper ligula et mi vulputate, in bibendum dolor luctus. Aenean leo magna, suscipit at mauris vitae, tristique scelerisque est. Sed hendrerit dui et augue interdum imperdiet. Vivamus blandit ante non nunc blandit, id venenatis nisl tempor. Pellentesque ut efficitur risus, in porta dolor. Praesent eget laoreet mi.', 'bg-about.jpg', 35),
('DOTA 2', '2023-09-05', 'kkkkkkkkkkkk', '', 'video3.jpg', 36),
('Mobile Legends', '2023-09-30', 'dkkkkkkkkkkkkkkkkkk kd k kkkdaldklak', '', 'bg-news.png', 37),
('mobille', '2023-09-07', 'VAGOS MENANG AYO DANCE LEAGUE', '', 'heropic.jpg', 38),
('MOBILE LEGENDS', '2023-09-08', 'PERTANDINGAN BESAR ANTARA VAGOS DAN EVOS', '', 'heropic (2).jpg', 39);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_nama` varchar(50) NOT NULL,
  `player_game` varchar(50) NOT NULL,
  `player_foto` text NOT NULL,
  `player_role` text NOT NULL,
  `player_resume` text NOT NULL,
  `player_birth` text NOT NULL,
  `player_province` text NOT NULL,
  `player_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_nama` varchar(50) NOT NULL,
  `shop_jenis` text NOT NULL,
  `shop_harga` decimal(50,0) NOT NULL,
  `shop_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminvagos`
--
ALTER TABLE `adminvagos`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminvagos`
--
ALTER TABLE `adminvagos`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
