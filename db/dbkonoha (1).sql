-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2025 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkonoha`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoripengaduan`
--

CREATE TABLE `kategoripengaduan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE `log_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_admin`
--

INSERT INTO `log_admin` (`id_admin`, `email`, `password`) VALUES
(1, 'anhar24@students.amikom.ac.id', '12345678'),
(2, 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `nomor_telepon` varchar(25) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `detail_pengaduan` text NOT NULL,
  `path_lampiran` varchar(255) DEFAULT NULL,
  `tanggal_dikirim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil` int(11) NOT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `gambar`, `judul`, `deskripsi`, `id_admin`) VALUES
(11, 'Planet9_3840x2160.jpg', 'coba', 'cobacoba', NULL),
(12, 'Planet9_3840x2160.jpg', 'coba', 'cobacoba', NULL),
(13, 'Planet9_3840x2160.jpg', 'coba', 'cobacoba', NULL),
(14, 'Premium Vector _ Tree pixel design.png', 'POHON', 'pohonpohon', NULL),
(15, 'Premium Vector _ Tree pixel design.png', 'POHON', 'pohonpohon', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_demografi`
--

CREATE TABLE `tb_demografi` (
  `id_demografi` int(11) NOT NULL,
  `penduduk` int(11) NOT NULL,
  `kepala_keluarga` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `lakilaki` int(11) NOT NULL,
  `grafik` varchar(225) NOT NULL,
  `label` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `jumlah` decimal(19,2) NOT NULL,
  `tanggal` date NOT NULL,
  `rincian` text DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoripengaduan`
--
ALTER TABLE `kategoripengaduan`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_demografi`
--
ALTER TABLE `tb_demografi`
  ADD PRIMARY KEY (`id_demografi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoripengaduan`
--
ALTER TABLE `kategoripengaduan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_demografi`
--
ALTER TABLE `tb_demografi`
  MODIFY `id_demografi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoripengaduan` (`id_kategori`);

--
-- Constraints for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD CONSTRAINT `profil_desa_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);

--
-- Constraints for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);

--
-- Constraints for table `tb_demografi`
--
ALTER TABLE `tb_demografi`
  ADD CONSTRAINT `tb_demografi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);

--
-- Constraints for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD CONSTRAINT `tb_keuangan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
