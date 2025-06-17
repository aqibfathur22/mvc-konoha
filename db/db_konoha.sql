-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2025 pada 13.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konoha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoripengaduan`
--

CREATE TABLE `kategoripengaduan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategoripengaduan`
--

INSERT INTO `kategoripengaduan` (`id_kategori`, `nama_kategori`, `deskripsi`, `created_at`) VALUES
(1, 'Umum', NULL, '2025-06-16 08:05:29'),
(2, 'Sosial', NULL, '2025-06-16 08:05:42'),
(3, 'Keamanan', NULL, '2025-06-16 08:05:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_admin`
--

CREATE TABLE `log_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `nomor_telepon` varchar(25) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL,
  `detail_pengaduan` text NOT NULL,
  `path_lampiran` varchar(255) DEFAULT NULL,
  `status` enum('pending','diproses','selesai','ditolak') NOT NULL DEFAULT 'pending',
  `catatan_admin` text DEFAULT NULL,
  `tanggal_dikirim` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_diperbarui` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `id_admin_handler` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama_pelapor`, `nomor_telepon`, `id_kategori`, `detail_pengaduan`, `path_lampiran`, `status`, `catatan_admin`, `tanggal_dikirim`, `tanggal_diperbarui`, `id_admin_handler`) VALUES
(1, 'Desi', '08923788944', 1, 'Jalan banyak yang bolong, sudah dari 5 tahun yang lalu', NULL, 'pending', NULL, '2025-06-16 08:06:58', NULL, NULL),
(2, 'Fade', '03803123455', 2, 'Pejabatnya Korup', NULL, 'pending', NULL, '2025-06-16 08:21:42', NULL, NULL),
(3, 'Sage', '09809839204', 2, 'Pejabatnya korup 300T', '684fd52bcf902.png', 'pending', NULL, '2025-06-16 08:26:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `konten` longtext DEFAULT NULL,
  `urutan` int(11) DEFAULT 0,
  `status` enum('active','inactive') DEFAULT 'active',
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `konten` longtext DEFAULT NULL,
  `status` enum('draft','published') DEFAULT 'draft',
  `tanggal_publish` timestamp NULL DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategoripengaduan`
--
ALTER TABLE `kategoripengaduan`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin_handler` (`id_admin_handler`),
  ADD KEY `status` (`status`),
  ADD KEY `tanggal_dikirim` (`tanggal_dikirim`);

--
-- Indeks untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `slug` (`slug`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `slug` (`slug`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategoripengaduan`
--
ALTER TABLE `kategoripengaduan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategoripengaduan` (`id_kategori`),
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`id_admin_handler`) REFERENCES `log_admin` (`id_admin`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD CONSTRAINT `profil_desa_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `log_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
