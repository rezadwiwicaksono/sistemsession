-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2018 at 06:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ummi`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Pocutrazha', '163051107', 'pocutrauzha@ummi.ac.id', 'Keperawatan', '2.jpg'),
(5, 'Mugia Raasyida', '163051101', 'ugicat@gmail.com', 'PGSD', '4.jpg'),
(11, 'Asep Syarif', '163051100', 'asepkasep@gmail.com', 'PJKR', '1.png'),
(12, 'Robby Takdirillah', '163051110', 'robbytakdirillah@gmail.com', 'Teknik Informatika', '1.png'),
(13, 'Eneng Konengeun', '163051101', 'eneng@yahoo.com', 'PGPAUD', 'a.jpeg'),
(16, 'Messi', '163051010', 'messi@fcb.org', 'PJKR', 'a.jpeg'),
(17, 'Putri', '16305019', 'putriii@ummi.ac.id', 'Hukum', 'b.png'),
(18, 'Dewi', '173051108', 'dewilaut@ummi.ac.id', 'SASING', 'b.png'),
(19, 'Heru Haer', '163051102', 'aceng@ummi.ac.id', 'Kimia', 'a.jpeg'),
(20, 'Gaping', '183051100', 'gaping11@outlook.com', 'PGSD', 'a.jpeg'),
(21, 'Dewa', '153051101', 'dewa19@gmail.com', 'Teknik Sipil', 'a.jpeg'),
(22, 'Supri', '163080801', 'supriana@kfc.com', 'Ekonomi', 'a.jpeg'),
(23, 'Habliansyah', '193051109', 'hablibiking@persib.net', 'ADBIS', 'a.jpeg'),
(24, 'Siti', '17621340', 'siti@gmail.com', 'P MTK', 'b.png'),
(25, 'Silvi', '173051102', 'silviany@ummi.ac.id', 'P Biologi', 'b.png'),
(26, 'Jess No Limit', '143051100', 'jess@ml.game', 'PTI', 'a.jpeg'),
(27, 'Desi', '18345110', 'desadesi@yahoo.com', 'Perpajakan', 'b.png'),
(28, 'Topik Bicara', '16308911', 'topikhangat@business.com', 'Public Relations', 'a.jpeg'),
(29, 'Vinti', '18543211', 'vinti@gmail.com', 'ADPUB', 'b.png'),
(30, 'Desti', '19732032', 'destiw@tiktok.id', 'ADBIS', 'b.png'),
(31, 'Hesti', '19308912', 'hesti@outlook.com', 'PBSI', 'b.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'robby', '$2y$10$7gZB2UMqHGfRYtkAddy9Lu.cdVusmj/jV/TfSo1b/yh.Ni.YRRdYW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
