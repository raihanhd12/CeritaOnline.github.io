-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 01:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerita_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_cerita` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`id_cerita`, `id_kategori`, `judul_cerita`, `author`, `gambar`, `isi`) VALUES
(2, 2, 'Percobaan 3', 'Percobaan4', '282-gigachad.jpg', 'LOL Ini Percobaan Saja'),
(3, 1, 'Percobaan 4', 'Percobaan5', 'c62590c1756680060e7c38011cd704b5.jpg', 'LOL Ini Percobaan Saja WKWKKWKWKW'),
(5, 2, 'Percobaan 8 Saja', 'Percobaan 8 ', 'Bukti1.JPG', 'Pengen Nonton Spiderman NWH Cuyyyyy'),
(6, 4, 'Five Nights At Freddy', 'Scott', '787-thumbnail.png', 'Wuihhh Menyeramkan Sekali'),
(7, 4, 'Five Nights At Freddy Reborn', 'Scott Lang', '341-fnaf.png', 'The main video game series consists of eight survival horror games taking place in locations somehow connected to family pizza restaurant Freddy Fazbear’s Pizza. In most games, the player takes on the role of a night-time employee, who must utilise tools such as security cameras, lights, doors, and vents to defend themselves against hostile animatronic characters that inhabit the locations. The series canon is revealed through voice recordings, minigames, and easter eggs featured throughout the games.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Adventure'),
(2, 'Comedy'),
(4, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama_lengkap`, `email`, `tanggal_lahir`, `jenis_kelamin`, `level`) VALUES
(1, 'alkausar', 'alka123', 'Al Kausar Ramadhan', 'alkausar@gmail.com', '2021-12-15', 'Pria', 'admin'),
(2, 'raihan', 'raihan123', 'Raihan', 'raihan@gmail.com', '2021-12-14', 'Pria', 'pembaca'),
(3, 'sinister', 'sinister123', 'Sinister', 'sinister@gmail.com', '2005-10-18', 'male', 'pembaca'),
(5, 'asdasdasd', 'asdasdasdd', 'sadasdasd', 'asdasdasdasd', '2021-12-24', 'PILIHAN', 'pembaca'),
(6, 'sdfsdfsdf', 'sdfsdfsdfsdf', 'dsfdsfdsf', 'sdfsdfsdf', '2021-12-31', 'PILIHAN', 'pembaca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cerita`
--
ALTER TABLE `cerita`
  ADD CONSTRAINT `cerita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
