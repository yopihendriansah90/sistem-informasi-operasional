-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Bulan Mei 2024 pada 09.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `tanggal`, `total`, `created_at`, `updated_at`) VALUES
('INVBSD234234', '2024-05-16', 400000, '2024-05-16 09:10:30', '2024-05-16 09:10:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_keluar`
--

CREATE TABLE `kas_keluar` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` float(20,2) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `status` enum('hold','submitted') DEFAULT 'hold',
  `foto` varchar(200) NOT NULL,
  `id_invoices` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kas_keluar`
--

INSERT INTO `kas_keluar` (`id`, `tanggal`, `jumlah`, `keterangan`, `id_lokasi`, `status`, `foto`, `id_invoices`, `created_at`, `updated_at`) VALUES
(5, '2024-05-17', 20000.00, 'asdfasdf', 1, 'hold', 'nota_1_20240518074745.jpeg', NULL, '2024-05-17 06:41:44', '2024-05-18 05:47:45'),
(6, '2024-05-17', 100000.00, 'hanya tes saja', 2, 'hold', '', NULL, '2024-05-17 10:08:06', '2024-05-17 10:08:06'),
(10, '2024-04-30', 150000.00, 'pulas mekanik tayo\r\n\r\n', 2, 'hold', '', NULL, '2024-05-17 11:08:58', '2024-05-17 11:08:58'),
(11, '2024-05-15', 234234240.00, 'sdfsdf', 2, 'hold', '', NULL, '2024-05-17 11:18:10', '2024-05-17 11:18:10'),
(12, '2024-05-09', 345345.00, 'sadfasd', 2, 'hold', '', NULL, '2024-05-18 02:42:12', '2024-05-18 02:42:12'),
(13, '2024-05-02', 213.00, 'testn', 2, 'hold', '', NULL, '2024-05-18 02:42:24', '2024-05-18 02:42:24'),
(14, '2024-05-31', 200000.00, '3333333333333333333', 2, 'hold', '', NULL, '2024-05-18 02:51:22', '2024-05-18 03:31:13'),
(16, '2024-05-18', 500000.00, 'tambal ban', 2, 'hold', '', NULL, '2024-05-18 03:33:59', '2024-05-18 03:33:59'),
(17, '2024-05-18', 300000.00, 'tes upload foto', 2, 'hold', 'ktp__20240518060127.png', NULL, '2024-05-18 04:01:27', '2024-05-18 04:01:27'),
(18, '2024-05-18', 800000.00, 'tes upload foto nota', 2, 'hold', 'nota_2_20240518075101.jpeg', NULL, '2024-05-18 04:02:00', '2024-05-18 05:51:01'),
(19, '2024-05-18', 70000.00, 'tes upload foto', 2, 'hold', 'ktp__20240518060241.png', NULL, '2024-05-18 04:02:41', '2024-05-18 04:02:41'),
(20, '2024-05-18', 70000.00, 'tes upload foto', 2, 'hold', 'ktp_2_20240518060506.png', NULL, '2024-05-18 04:05:06', '2024-05-18 04:05:06'),
(21, '2024-05-18', 70000.00, 'tes upload foto', 2, 'hold', 'ktp_2_20240518060600.png', NULL, '2024-05-18 04:06:00', '2024-05-18 04:06:00'),
(22, '2024-05-18', 70000.00, 'tes upload foto', 2, 'hold', 'nota_2_20240518060626.png', NULL, '2024-05-18 04:06:26', '2024-05-18 04:06:26'),
(23, '2024-05-18', 60000.00, 'tes upload', 2, 'hold', 'nota_2_20240518073755.png', NULL, '2024-05-18 04:07:21', '2024-05-18 05:37:55'),
(24, '2024-05-18', 200000.00, 'Testing lagi ya\r\n', 2, 'hold', 'nota_2_20240518075835.jpg', NULL, '2024-05-18 05:57:56', '2024-05-18 05:58:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Kendaraan`
--

CREATE TABLE `Kendaraan` (
  `id` int(11) NOT NULL,
  `nomor_kendaraan` varchar(10) NOT NULL,
  `model` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Kendaraan`
--

INSERT INTO `Kendaraan` (`id`, `nomor_kendaraan`, `model`, `merek`, `tahun`, `warna`) VALUES
(4, 'B 9025 WIN', 'TRUCK TRONTON', 'HINO', 2023, 'MERAH'),
(5, 'B 9026 WIN', 'TRUCK TRONTON', 'HINO', 2023, 'MERAH'),
(6, 'B 9027 WIN', 'TRUCK TRONTON', 'HINO', 2023, 'MERAH'),
(7, 'B 9028 WIN', 'TRUCK TRONTON', 'HINO', 2023, 'MERAH'),
(8, 'b', 'd', 'd', 3, 'd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Plant BSD Cisauk', 'jalan cisauk nomor alkasdflkjasd\r\nfasdfalksdjfalksdjf\r\nasdflkjasdf\r\n', '2024-05-16 09:07:23', '2024-05-17 07:34:25'),
(2, 'Plant Bekasi Timur', 'Bekasi', '2024-05-16 09:07:23', '2024-05-16 09:07:23'),
(3, 'Plant Karawang Timur', 'Karawang', '2024-05-16 09:07:41', '2024-05-16 09:07:41'),
(7, 'asdf', 'asdf', '2024-05-17 07:37:03', '2024-05-17 07:37:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `PajakKendaraan`
--

CREATE TABLE `PajakKendaraan` (
  `id` int(11) NOT NULL,
  `pajak_1th` date NOT NULL,
  `pajak_5th` date NOT NULL,
  `nomor_kendaraan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `PajakKendaraan`
--

INSERT INTO `PajakKendaraan` (`id`, `pajak_1th`, `pajak_5th`, `nomor_kendaraan`) VALUES
(3, '2024-05-08', '2024-05-16', 'B 9025 WIN'),
(4, '2024-05-16', '2024-05-23', 'B 9026 WIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `UjiKIR`
--

CREATE TABLE `UjiKIR` (
  `id_uji_kir` int(11) NOT NULL,
  `masa_aktif` date NOT NULL,
  `nomor_uji` varchar(30) DEFAULT NULL,
  `nomor_kendaraan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `UjiKIR`
--

INSERT INTO `UjiKIR` (`id_uji_kir`, `masa_aktif`, `nomor_uji`, `nomor_kendaraan`) VALUES
(1, '2024-05-23', 'alskdfjasoifdu', 'B 9026 WIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Yopi', 'admin', 'admin', 'operator');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_kas_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_kas_keluar` (
`id` int(11)
,`tanggal` date
,`jumlah` float(20,2)
,`keterangan` varchar(255)
,`id_lokasi` int(11)
,`lokasi` varchar(100)
,`status` enum('hold','submitted')
,`foto` varchar(200)
,`id_invoices` varchar(20)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_kas_keluar`
--
DROP TABLE IF EXISTS `view_kas_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kas_keluar`  AS SELECT `kas_keluar`.`id` AS `id`, `kas_keluar`.`tanggal` AS `tanggal`, `kas_keluar`.`jumlah` AS `jumlah`, `kas_keluar`.`keterangan` AS `keterangan`, `kas_keluar`.`id_lokasi` AS `id_lokasi`, `lokasi`.`nama` AS `lokasi`, `kas_keluar`.`status` AS `status`, `kas_keluar`.`foto` AS `foto`, `kas_keluar`.`id_invoices` AS `id_invoices`, `kas_keluar`.`created_at` AS `created_at`, `kas_keluar`.`updated_at` AS `updated_at` FROM (`kas_keluar` join `lokasi` on(`kas_keluar`.`id_lokasi` = `lokasi`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_invoices` (`id_invoices`);

--
-- Indeks untuk tabel `Kendaraan`
--
ALTER TABLE `Kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plat_nomor` (`nomor_kendaraan`),
  ADD KEY `nomor_kendaraan` (`nomor_kendaraan`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `PajakKendaraan`
--
ALTER TABLE `PajakKendaraan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nomor_kendaraan` (`nomor_kendaraan`);

--
-- Indeks untuk tabel `UjiKIR`
--
ALTER TABLE `UjiKIR`
  ADD PRIMARY KEY (`id_uji_kir`),
  ADD KEY `fk_ujiKendraan` (`nomor_kendaraan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `Kendaraan`
--
ALTER TABLE `Kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `PajakKendaraan`
--
ALTER TABLE `PajakKendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `UjiKIR`
--
ALTER TABLE `UjiKIR`
  MODIFY `id_uji_kir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kas_keluar`
--
ALTER TABLE `kas_keluar`
  ADD CONSTRAINT `kas_keluar_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id`),
  ADD CONSTRAINT `kas_keluar_ibfk_2` FOREIGN KEY (`id_invoices`) REFERENCES `invoices` (`id`);

--
-- Ketidakleluasaan untuk tabel `PajakKendaraan`
--
ALTER TABLE `PajakKendaraan`
  ADD CONSTRAINT `fkPajakKendaraan` FOREIGN KEY (`nomor_kendaraan`) REFERENCES `Kendaraan` (`nomor_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `UjiKIR`
--
ALTER TABLE `UjiKIR`
  ADD CONSTRAINT `fk_ujiKendraan` FOREIGN KEY (`nomor_kendaraan`) REFERENCES `Kendaraan` (`nomor_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
