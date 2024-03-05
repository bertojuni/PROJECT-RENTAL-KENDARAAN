-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 09.02
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesananbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `camp`
--

CREATE TABLE `camp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_ke` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uang_masuk` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lain_lain` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_uang_masuk` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_trainer_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_gaji_trainer` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team8` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team9` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team10` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_team_nama10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_gaji_team` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_cabang` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booknote` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grammarly` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peserta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_nama7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tiket_trainer_berangkat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_trainer_pulang_nama7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tiket_trainer_pulang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_nama7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tiket_team_berangkat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket_team_pulang_nama7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tiket_team_pulang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konsumsi_tambahan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keuntungan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_keuntungan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `tanggal_akhir` datetime DEFAULT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `camp`
--

INSERT INTO `camp` (`id`, `user_id`, `id_transaksi`, `token`, `title`, `camp_ke`, `uang_masuk`, `lain_lain`, `total_uang_masuk`, `gaji_trainer`, `gaji_trainer_nama`, `gaji_trainer1`, `gaji_trainer_nama1`, `gaji_trainer2`, `gaji_trainer_nama2`, `gaji_trainer3`, `gaji_trainer_nama3`, `gaji_trainer4`, `gaji_trainer_nama4`, `gaji_trainer5`, `gaji_trainer_nama5`, `gaji_trainer6`, `gaji_trainer_nama6`, `total_gaji_trainer`, `gaji_team`, `gaji_team_nama`, `gaji_team1`, `gaji_team_nama1`, `gaji_team2`, `gaji_team_nama2`, `gaji_team3`, `gaji_team_nama3`, `gaji_team4`, `gaji_team_nama4`, `gaji_team5`, `gaji_team_nama5`, `gaji_team6`, `gaji_team_nama6`, `gaji_team7`, `gaji_team_nama7`, `gaji_team8`, `gaji_team_nama8`, `gaji_team9`, `gaji_team_nama9`, `gaji_team10`, `gaji_team_nama10`, `total_gaji_team`, `team_cabang`, `booknote`, `grammarly`, `peserta`, `tiket_trainer`, `tiket_trainer_nama`, `tiket_trainer1`, `tiket_trainer_nama1`, `tiket_trainer2`, `tiket_trainer_nama2`, `tiket_trainer3`, `tiket_trainer_nama3`, `tiket_trainer4`, `tiket_trainer_nama4`, `tiket_trainer5`, `tiket_trainer_nama5`, `tiket_trainer6`, `tiket_trainer_nama6`, `tiket_trainer7`, `tiket_trainer_nama7`, `total_tiket_trainer_berangkat`, `tiket_trainer_pulang`, `tiket_trainer_pulang_nama`, `tiket_trainer_pulang1`, `tiket_trainer_pulang_nama1`, `tiket_trainer_pulang2`, `tiket_trainer_pulang_nama2`, `tiket_trainer_pulang3`, `tiket_trainer_pulang_nama3`, `tiket_trainer_pulang4`, `tiket_trainer_pulang_nama4`, `tiket_trainer_pulang5`, `tiket_trainer_pulang_nama5`, `tiket_trainer_pulang6`, `tiket_trainer_pulang_nama6`, `tiket_trainer_pulang7`, `tiket_trainer_pulang_nama7`, `total_tiket_trainer_pulang`, `tiket_team`, `tiket_team_nama`, `tiket_team1`, `tiket_team_nama1`, `tiket_team2`, `tiket_team_nama2`, `tiket_team3`, `tiket_team_nama3`, `tiket_team4`, `tiket_team_nama4`, `tiket_team5`, `tiket_team_nama5`, `tiket_team6`, `tiket_team_nama6`, `tiket_team7`, `tiket_team_nama7`, `total_tiket_team_berangkat`, `tiket_team_pulang`, `tiket_team_pulang_nama`, `tiket_team_pulang1`, `tiket_team_pulang_nama1`, `tiket_team_pulang2`, `tiket_team_pulang_nama2`, `tiket_team_pulang3`, `tiket_team_pulang_nama3`, `tiket_team_pulang4`, `tiket_team_pulang_nama4`, `tiket_team_pulang5`, `tiket_team_pulang_nama5`, `tiket_team_pulang6`, `tiket_team_pulang_nama6`, `tiket_team_pulang7`, `tiket_team_pulang_nama7`, `total_tiket_team_pulang`, `hotel`, `marketing`, `konsumsi_tambahan`, `lainnya`, `total`, `keuntungan`, `persentase_keuntungan`, `tanggal`, `tanggal_akhir`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 22, 'LSW0Q', NULL, 'yesss', '1', '30000000', '20000000', '50000000', '10000', 'qweqweqw', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '10000', '10000', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '10000', '10000', '10000', '500000', '2', '0', 'sdfsdfsdfs', '10000', 'dfasdasdasd', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '10000', '10000', NULL, '10000', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '20000', '10000', 'jhjklhjklh', '10000', 'fgh', '10000', 'dadawdawd', '5000', 'SFESF', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '35000', '10000', NULL, '10000', NULL, '10000', NULL, '5000', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '35000', '10000', '5000000', '500000', '500000', '1650000', '48350000', '96.7', '2023-11-01 00:00:00', '2023-11-04 00:00:00', 'pending', NULL, '2023-12-30 14:32:27', '2024-02-27 08:38:03'),
(2, 22, 'GMLJC', NULL, 'TESSSS', '1', '10000', '100000', '110000', '100000', NULL, '10000', NULL, '100000', NULL, '10000', NULL, '100000', NULL, '100000', NULL, '10000', NULL, '430000', '10000', NULL, '100000', NULL, '100000', NULL, '100000', NULL, '100000', NULL, '100000', NULL, '100000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '650000', '10000', '10000', '10000', '8', '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '80000', '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '100000', NULL, '170000', '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '80000', '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '10000', NULL, '100000', NULL, '10000', NULL, '170000', '10000', '11000', '10000', '10000', '1640000', '-1530000', '-1390.9090909090908', '2023-12-30 00:00:00', '2024-01-01 00:00:00', 'pending', '<p>SFSEFSEFS</p>', '2023-12-30 14:42:25', '2023-12-30 14:49:44'),
(3, 22, 'HJK0I', NULL, 'coba', '1', '30000000', '0', '30000000', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', '0', '3000000', '0', '0', '0', '30000000', '100', '2024-01-01 00:00:00', '2024-01-05 00:00:00', 'pending', NULL, '2024-01-01 03:13:50', '2024-01-01 03:13:50'),
(5, 22, 'HEVLF', 'yZ)j?vp^G$(@>6#lkG*tNp+FZNc?^KWOG4u9OL?$SKA>N+hVcH>HT@_yJI>#8(Kw2sHHGu2goTOjlT^qC67X7u>Ko9<J%*_IW(ZI', 'fgsdfsd', '1', '30000000', '20000000', '50000000', '100000', 'qweqweqw', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '100000', '10000', 'eqweqweqwe', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '10000', '10000', '10000', '10000', '3', '10000', 'sdfsdfsdfs', '100000', 'dfasdasdasd', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '110000', '10000', NULL, '100000', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '110000', '10000', 'fgh', '100000', 'dfasdasdas', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '110000', '10000', NULL, '100000', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '110000', '10000', '5000000', '10000', '10000', '610000', '49390000', '98.78', '2024-02-28 00:00:00', '2024-03-01 00:00:00', 'pending', NULL, '2024-02-28 01:56:05', '2024-02-28 02:04:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories_credit`
--

CREATE TABLE `categories_credit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories_credit`
--

INSERT INTO `categories_credit` (`id`, `user_id`, `kode`, `name`, `created_at`, `updated_at`) VALUES
(2, 22, 'C002', 'TEST CREDIT', '2023-09-18 08:05:13', '2023-09-18 08:05:13'),
(8, 22, 'CM002', 'CREDIT MANAGER', '2023-09-21 16:36:53', '2023-09-21 16:36:53'),
(10, 54, 'CU002', 'CREDIT USER', '2023-09-21 16:37:11', '2023-09-21 16:37:11'),
(11, 54, 'CU003', 'CREDIT USER 2', '2023-09-21 16:37:19', '2023-09-21 16:37:19'),
(12, 49, 'CK002', 'CREDIT KARYAWAN', '2023-10-06 08:45:59', '2023-10-06 08:45:59'),
(13, 49, 'CK003', 'CREDIT KARYAWAN2', '2023-10-06 10:25:59', '2023-10-06 10:25:59'),
(14, 22, 'CM003', 'CREDIT MANAGER2', '2023-10-06 10:26:29', '2023-10-06 10:26:29'),
(15, 22, 'TES KODE CREDIT', 'COBA KODE CREDT', '2023-10-13 08:38:00', '2023-10-13 08:38:00'),
(16, 49, '02 NYOBA KODE', 'COBA KODE', '2023-10-13 08:38:30', '2023-10-13 08:47:37'),
(17, 49, '22', 'SDADADAS', '2023-10-13 10:43:11', '2023-10-13 10:43:11'),
(18, 59, 'TRAINER01', 'TRAIBNER', '2023-10-24 10:57:10', '2023-10-24 10:57:10'),
(19, 59, 'TRAINER', 'TESS', '2023-10-24 10:59:27', '2023-10-24 10:59:27'),
(20, 59, 'TRAINE-01', 'BARU', '2023-10-24 11:02:26', '2023-10-24 11:02:26'),
(21, 59, 'AAAA-0001', 'CREDIT', '2023-10-24 12:05:13', '2023-10-24 12:05:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories_debit`
--

CREATE TABLE `categories_debit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_barang` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_barang` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diskon` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories_debit`
--

INSERT INTO `categories_debit` (`id`, `user_id`, `kode`, `name`, `created_at`, `updated_at`, `nama_barang`, `harga_barang`, `diskon`, `stok`) VALUES
(1, 22, 'D002', 'TESS DEBIT', '2023-09-18 06:32:11', '2023-09-18 06:32:11', NULL, NULL, NULL, NULL),
(4, 22, 'D003', 'DEBIT', '2023-09-18 08:20:01', '2023-09-18 08:20:01', NULL, NULL, NULL, NULL),
(5, 22, 'D004', 'NYOBA DEBIT', '2023-09-18 08:20:53', '2023-09-18 08:20:53', NULL, NULL, NULL, NULL),
(13, 15, 'DA002', 'DEBIT ADMIN', '2023-09-21 16:34:14', '2023-09-21 16:34:14', NULL, NULL, NULL, NULL),
(14, 54, 'DU002', 'DEBIT USER', '2023-09-21 16:34:26', '2023-09-21 16:34:26', NULL, NULL, NULL, NULL),
(15, 15, 'DA003', 'DEBIT ADMIN 2', '2023-09-21 16:34:34', '2023-09-21 16:34:34', NULL, NULL, NULL, NULL),
(18, 15, 'DA004', 'DEBIT ADMIN3', '2023-09-21 16:45:47', '2023-09-21 16:45:47', NULL, NULL, NULL, NULL),
(19, 22, 'DM002', 'MANAGER', '2023-10-05 08:01:01', '2023-10-05 08:01:01', NULL, NULL, NULL, NULL),
(23, 49, 'DK002', 'DEBIT KARYWAN', '2023-10-06 08:49:37', '2023-10-06 08:49:37', NULL, NULL, NULL, NULL),
(24, 49, 'DK003', 'DEBIT KARYWAN 2', '2023-10-06 09:15:43', '2023-10-06 09:15:43', NULL, NULL, NULL, NULL),
(25, 22, 'DM003', 'DEBIT MANAGER 10', '2023-10-06 09:16:24', '2023-10-09 07:51:25', NULL, NULL, NULL, NULL),
(26, 22, 'DM004', 'WILDAN', '2023-10-09 07:39:27', '2023-10-09 07:39:27', NULL, NULL, NULL, NULL),
(27, 22, 'DM0056', 'CAMP JOGJA', '2023-10-09 07:52:02', '2023-10-18 09:26:40', NULL, NULL, NULL, NULL),
(29, 22, 'DU001', 'NYOBA KODE', '2023-10-13 05:56:44', '2023-10-13 05:56:44', NULL, NULL, NULL, NULL),
(31, 49, '021 NYOBA KODE', 'COBA KODE', '2023-10-13 07:27:51', '2023-10-13 09:22:57', NULL, NULL, NULL, NULL),
(32, 22, 'TESS 01 MANAGER', 'TES KODE  MANAG', '2023-10-13 08:37:25', '2023-10-13 08:37:25', NULL, NULL, NULL, NULL),
(34, 59, 'TRAINER', 'TRAINER', '2023-10-24 10:51:16', '2023-10-24 10:51:16', NULL, NULL, NULL, NULL),
(35, 59, 'TRAINER002', 'PROJECT', '2023-10-24 12:00:09', '2023-10-24 12:00:09', NULL, NULL, NULL, NULL),
(36, 22, 'AAA02', 'TESSS KATEGORI', '2023-10-31 04:52:33', '2023-10-31 04:52:33', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories_scopuscamp`
--

CREATE TABLE `categories_scopuscamp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `kuota` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AKTIF',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email_company` varchar(200) DEFAULT NULL,
  `telp_company` varchar(200) DEFAULT NULL,
  `alamat_company` text DEFAULT NULL,
  `logo_company` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `credit`
--

CREATE TABLE `credit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_date` datetime NOT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `credit`
--

INSERT INTO `credit` (`id`, `user_id`, `category_id`, `id_transaksi`, `nominal`, `description`, `credit_date`, `gambar`, `created_at`, `updated_at`) VALUES
(83, 24, 2, '2DM6O', 20000, 'asdasdasdas', '2023-09-18 12:00:00', '1695024334.jpg', '2023-09-18 08:05:34', '2023-09-18 08:05:34'),
(84, 24, 2, 'AZZL9', 200000, 'dsadasdasd', '2023-09-18 12:00:00', '1695024357.jpg', '2023-09-18 08:05:57', '2023-09-18 08:05:57'),
(85, 22, 2, '2Z8CL', 50000, 'fefsefsefsfs', '2023-09-21 12:00:00', '1695263213.jpg', '2023-09-21 02:26:40', '2023-09-21 02:26:53'),
(86, 22, 2, '53AK8', 100000, 'asdasdasdasda', '2023-09-21 12:00:00', '1695263301.jpg', '2023-09-21 02:28:21', '2023-09-21 02:28:21'),
(88, 22, 8, 'OZZR9', 100000, 'sdffsdfs', '2023-10-05 12:00:00', '1696493582.png', '2023-10-05 08:13:02', '2023-10-05 08:13:02'),
(89, 49, 12, NULL, 1000123, 'hgsajhda00000000000000000', '2023-10-06 12:00:00', NULL, '2023-10-06 10:27:30', '2023-10-06 10:49:39'),
(90, 24, 14, 'GN8II', 10123, 'asbdjbasdas1234560000000tesssssssss', '2023-10-06 12:00:00', NULL, '2023-10-06 10:34:40', '2023-10-06 10:50:22'),
(91, 49, 17, NULL, 32112, 'fdsfsdf', '2023-10-14 12:00:00', NULL, '2023-10-14 10:40:41', '2023-10-14 10:40:41'),
(92, 59, 18, NULL, 50000, 'dadadad', '2023-10-24 12:00:00', NULL, '2023-10-24 10:57:25', '2023-10-24 10:57:25'),
(93, 22, 8, 'A7816', 20000, 'gfgfyu', '2023-10-31 22:21:00', '1698751310.jpg', '2023-10-31 11:21:50', '2023-10-31 11:21:50'),
(94, 49, 16, NULL, 50000, 'ergfsdgsdfsd', '2023-11-01 17:05:00', NULL, '2023-11-01 10:05:13', '2023-11-01 10:05:13'),
(95, 22, 14, 'W3W4Z', 30000, 'jhbjkghbk', '2023-11-01 19:09:00', NULL, '2023-11-01 12:09:22', '2023-11-01 12:09:22'),
(96, 22, 15, 'S0JB3', 100000, 'fasdfasdasda', '2023-11-01 19:10:00', NULL, '2023-11-01 12:10:33', '2023-11-01 12:10:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `debit`
--

CREATE TABLE `debit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `debit_date` datetime NOT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `debit`
--

INSERT INTO `debit` (`id`, `user_id`, `category_id`, `id_transaksi`, `nominal`, `description`, `debit_date`, `gambar`, `created_at`, `updated_at`) VALUES
(46, 24, 1, '8O4Z0', 20000, 'sdasdasdasda', '2023-09-18 12:00:00', '1695018832.png', '2023-09-18 06:33:52', '2023-09-18 06:33:52'),
(47, 24, 1, 'DVSXX', 100000, 'ijokjjo', '2023-09-18 12:00:00', '1695018877.jpg', '2023-09-18 06:34:37', '2023-09-18 06:34:37'),
(48, 22, 5, '8QCFE', 5000, 'ujicoba', '2023-08-17 12:00:00', '1695174447.jpg', '2023-09-20 01:47:27', '2023-09-20 01:47:27'),
(49, 22, 4, '37ZOS', 5000, 'dsfsdfsdfsdfsdfsdfs', '2023-09-21 12:00:00', '1695263178.jpg', '2023-09-21 02:25:24', '2023-09-21 02:26:18'),
(50, 22, 4, 'KZ2GE', 50000, 'fsdfsdfsdf', '2023-09-21 12:00:00', '1695263270.jpg', '2023-09-21 02:27:50', '2023-09-21 02:27:50'),
(52, 22, 1, 'OHC2Y', 5000, 'hjgjhgj', '2023-10-05 12:00:00', '1696491675.jpg', '2023-10-05 07:41:15', '2023-10-05 07:41:15'),
(53, 24, 1, '2H3L7', 50000, 'dsasdasd', '2023-10-05 12:00:00', '1696493618.png', '2023-10-05 08:13:38', '2023-10-05 08:13:38'),
(54, 22, 25, 'OYEJ8', 11123, 'tes0000000000000123', '2023-10-06 12:00:00', NULL, '2023-10-06 10:53:35', '2023-10-06 10:58:59'),
(55, 49, 24, NULL, 100123, 'dasdasdsadasd00000000000', '2023-10-06 12:00:00', NULL, '2023-10-06 10:59:20', '2023-10-06 10:59:53'),
(56, 49, 31, NULL, 32112, 'asdasdasda', '2023-10-14 12:00:00', NULL, '2023-10-14 10:58:03', '2023-10-14 10:58:03'),
(57, 22, 27, 'XZPGD', 500000, 'sfdsfs', '2023-10-18 12:00:00', NULL, '2023-10-18 09:24:35', '2023-10-18 09:25:32'),
(58, 59, 34, NULL, 5000, 'asdasdasd', '2023-10-24 12:00:00', NULL, '2023-10-24 10:56:41', '2023-10-24 10:56:41'),
(59, 22, 32, 'O6NZG', 50000, 'dadasd', '2023-10-31 12:00:00', '1698727444.jpg', '2023-10-31 04:44:04', '2023-10-31 04:44:04'),
(60, 22, 36, '5VLDC', 5000, 'sadasda', '2023-10-31 12:00:00', '1698727971.jpg', '2023-10-31 04:52:51', '2023-10-31 04:52:51'),
(61, 22, 32, 'N8B0Z', 100000, 'dawdada', '2023-11-01 19:10:00', NULL, '2023-11-01 12:10:52', '2023-11-01 12:10:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `presensi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_transaksi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji_pokok` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur8` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur9` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembur10` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lembur10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_lembur` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus8` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus9` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus10` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar5` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar6` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar7` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar8` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar9` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_luar10` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_bonus_luar10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_bonus` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunjangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunjangan_bpjs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunjangan_thr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tunjangan_pulsa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `potongan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pph` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alpha` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `user_id`, `presensi_id`, `email`, `id_transaksi`, `gaji_pokok`, `lembur`, `lembur1`, `lembur2`, `lembur3`, `lembur4`, `lembur5`, `lembur6`, `lembur7`, `lembur8`, `lembur9`, `lembur10`, `jumlah_lembur`, `jumlah_lembur1`, `jumlah_lembur2`, `jumlah_lembur3`, `jumlah_lembur4`, `jumlah_lembur5`, `jumlah_lembur6`, `jumlah_lembur7`, `jumlah_lembur8`, `jumlah_lembur9`, `jumlah_lembur10`, `total_lembur`, `bonus`, `bonus1`, `bonus2`, `bonus3`, `bonus4`, `bonus5`, `bonus6`, `bonus7`, `bonus8`, `bonus9`, `bonus10`, `bonus_luar`, `bonus_luar1`, `bonus_luar2`, `bonus_luar3`, `bonus_luar4`, `bonus_luar5`, `bonus_luar6`, `bonus_luar7`, `bonus_luar8`, `bonus_luar9`, `bonus_luar10`, `jumlah_bonus`, `jumlah_bonus1`, `jumlah_bonus2`, `jumlah_bonus3`, `jumlah_bonus4`, `jumlah_bonus5`, `jumlah_bonus6`, `jumlah_bonus7`, `jumlah_bonus8`, `jumlah_bonus9`, `jumlah_bonus10`, `jumlah_bonus_luar`, `jumlah_bonus_luar1`, `jumlah_bonus_luar2`, `jumlah_bonus_luar3`, `jumlah_bonus_luar4`, `jumlah_bonus_luar5`, `jumlah_bonus_luar6`, `jumlah_bonus_luar7`, `jumlah_bonus_luar8`, `jumlah_bonus_luar9`, `jumlah_bonus_luar10`, `total_bonus`, `tunjangan`, `tunjangan_bpjs`, `tunjangan_thr`, `tunjangan_pulsa`, `tanggal`, `potongan`, `pph`, `alpha`, `total`, `status`, `note`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 22, NULL, NULL, 'T7UGL', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10000', '50000', '10000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '140000', '0', '0', '0', '0', '2023-12-30 15:44:00', '0', '0', '0', '2140000', 'pending', NULL, NULL, '2023-12-30 08:44:18', '2023-12-30 08:44:18'),
(4, 22, NULL, NULL, 'YZLMY', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '100000', '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600000', '0', '0', '0', '0', '2023-12-30 15:47:00', '0', '0', '0', '5600000', 'pending', NULL, NULL, '2023-12-30 08:47:08', '2023-12-30 08:47:08'),
(5, 22, NULL, NULL, '17V7M', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100000', '100000', '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600000', '0', '0', '0', '0', '2023-12-30 15:47:00', '0', '0', '0', '5600000', 'pending', NULL, NULL, '2023-12-30 08:48:06', '2023-12-30 08:48:06'),
(6, 22, NULL, NULL, '2YJYP', '200', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '10', '10', '10', '10', NULL, '10', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '10', '10', '10', '10', '2023-12-30 17:04:00', '10', '10', '0', '220', 'pending', NULL, NULL, '2023-12-30 10:08:31', '2023-12-30 10:08:31'),
(7, 22, NULL, NULL, 'VR8J9', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2023-12-30 17:19:00', '0', '0', '0', '2', 'pending', NULL, NULL, '2023-12-30 10:20:13', '2023-12-30 10:20:13'),
(8, 22, NULL, NULL, 'DMB7O', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2023-12-30 17:23:00', '0', '0', '0', '2', 'pending', NULL, NULL, '2023-12-30 10:23:12', '2023-12-30 10:23:12'),
(9, 22, NULL, NULL, 'Y1SMQ', '2.000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2023-12-30 17:25:00', '0', '0', '0', '2', 'pending', NULL, NULL, '2023-12-30 10:25:42', '2023-12-30 10:25:42'),
(10, 22, NULL, NULL, 'Z6MLJ', '200.000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2023-12-30 17:28:00', '0', '0', '0', '200', 'terbauar', NULL, NULL, '2023-12-30 10:29:04', '2023-12-30 10:29:04'),
(11, 22, NULL, NULL, 'WTLUH', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10000', '10000', '10000', '10000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000', '0', '0', '0', '0', '2023-12-30 18:30:00', '0', '0', '0', '2110000', 'pending', NULL, NULL, '2023-12-30 11:30:38', '2023-12-30 11:30:38'),
(12, 22, NULL, NULL, '7DBWY', '2000000', '10000', '10000', '10000', '10000', '10000', '10000', '10000', '10000', '10000', '10000', '10000', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '110000', '10000', '10000', '10000', '10000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000', '10000', '10000', '10000', '10000', '2023-12-30 18:36:00', '10000', '10000', '0', '2240000', 'pending', '<p>ASDASDASDASDA</p>', NULL, '2023-12-30 11:36:22', '2023-12-30 11:36:22'),
(13, 49, NULL, NULL, 'KD0A2', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '50000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', '0', '0', '0', '0', '2023-12-31 16:23:00', '0', '0', '0', '2050000', 'terbauar', NULL, NULL, '2024-01-01 09:23:19', '2024-01-01 09:23:19'),
(14, 49, NULL, NULL, 'C123M', '3000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100000', '0', '0', '0', '0', '2024-01-05 16:24:00', '0', '0', '0', '3100000', 'terbauar', NULL, NULL, '2024-01-01 09:25:09', '2024-01-01 09:25:09'),
(15, 22, NULL, NULL, 'YLUIX', '3000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '50000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50000', '0', '0', '0', '0', '2024-01-03 16:42:00', '0', '0', '0', '3050000', 'terbauar', NULL, NULL, '2024-01-01 09:42:32', '2024-01-01 09:42:32'),
(16, 22, NULL, NULL, 'M7SET', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-03 11:56:00', '0', '0', '100000000', '-99990000', 'pending', NULL, NULL, '2024-01-03 04:56:24', '2024-01-03 04:56:24'),
(17, 49, NULL, NULL, 'TV41M', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-03 12:20:00', '0', '0', '20000', '1980000', 'pending', NULL, NULL, '2024-01-03 05:20:50', '2024-01-15 12:56:46'),
(24, 49, NULL, NULL, 'F17D0', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 20:30:00', '0', '0', '50000', '4950000', 'terbauar', NULL, NULL, '2024-01-15 13:30:52', '2024-01-15 13:30:52'),
(42, 49, NULL, 'bertojunikrisnanto@gmail.com', 'K1PBG', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 21:39:00', '0', '0', '50000', '4950000', 'terbayar', NULL, NULL, '2024-01-15 14:39:04', '2024-01-15 14:39:04'),
(43, 49, NULL, 'bertojunikrisnanto@gmail.com', 'JL3T6', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 21:39:00', '0', '0', '50000', '4950000', 'pending', NULL, NULL, '2024-01-15 14:39:59', '2024-01-15 14:39:59'),
(44, 49, NULL, 'bertojunikrisnanto@gmail.com', '4C3HN', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 21:57:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-15 14:57:38', '2024-01-16 14:06:23'),
(45, 49, NULL, 'bertojunikrisnanto@gmail.com', 'OM7SB', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 21:59:00', '0', '0', '50000', '4950000', 'terbayar', NULL, NULL, '2024-01-15 14:59:49', '2024-01-16 14:04:37'),
(46, 49, NULL, 'bertojunikrisnanto@gmail.com', 'PVXIX', '5000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 22:00:00', '0', '0', '50000', '4950000', 'terbayar', NULL, NULL, '2024-01-15 15:00:28', '2024-01-16 14:07:22'),
(47, 49, NULL, 'bertojunikrisnanto@gmail.com', 'DAY0E', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 22:01:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-15 15:01:27', '2024-01-16 14:04:08'),
(48, 49, NULL, 'bertojunikrisnanto@gmail.com', '4QMIS', '3000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-15 22:01:00', '0', '0', '30000', '2970000', 'terbayar', NULL, NULL, '2024-01-15 15:01:55', '2024-01-15 15:01:55'),
(51, 49, NULL, 'bertojunikrisnanto@gmail.com', 'N7I0S', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 20:38:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 13:38:19', '2024-01-16 13:38:19'),
(52, 49, NULL, 'bertojunikrisnanto@gmail.com', 'JIBAA', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 20:45:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 13:45:09', '2024-01-16 13:45:09'),
(53, 49, NULL, 'bertojunikrisnanto@gmail.com', '5IHZ7', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 20:50:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 13:50:15', '2024-01-16 13:50:15'),
(54, 49, NULL, 'bertojunikrisnanto@gmail.com', 'W73EQ', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 20:50:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 13:53:27', '2024-01-16 13:53:27'),
(55, 49, NULL, 'bertojunikrisnanto@gmail.com', '19QSH', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 20:58:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 13:58:06', '2024-01-16 13:58:06'),
(56, 49, NULL, 'bertojunikrisnanto@gmail.com', '69AF1', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-01-16 21:03:00', '0', '0', '20000', '1980000', 'terbayar', NULL, NULL, '2024-01-16 14:03:08', '2024-01-16 14:03:08'),
(57, 49, NULL, 'bertojunikrisnanto@gmail.com', 'NIFEP', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100000', '0', '0', '0', '0', '2024-02-01 16:28:00', '0', '0', '0', '2100000', 'terbayar', NULL, NULL, '2024-02-01 09:28:53', '2024-02-01 10:45:29'),
(58, 49, NULL, 'bertojunikrisnanto@gmail.com', 'D4J0S', '2000000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, '0.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '2024-02-23 17:35:00', '0', '0', '0', '2000000', 'terbayar', NULL, NULL, '2024-02-23 10:36:00', '2024-02-23 10:38:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karir`
--

CREATE TABLE `karir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lamaran` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lainnya` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_interview` datetime DEFAULT NULL,
  `lokasi_interview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `gambar` varchar(300) DEFAULT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`id`, `user_id`, `title`, `note`, `start_date`, `end_date`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(9, NULL, 'fhgfhfghfg', 'ggfdgdfgdfgdfgdfg', NULL, NULL, NULL, 'non-aktif', '2024-02-29 11:31:03', '2024-02-29 11:31:03'),
(10, NULL, 'dfsdfsdfsdfsdfd', 'dfsdfsdfsdfsdfsdfsdfs', NULL, NULL, NULL, 'aktif', '2024-02-29 11:32:58', '2024-02-29 11:32:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_11_08_081749_create_categories_credit_table', 1),
(10, '2019_11_08_081805_create_credit_table', 1),
(11, '2019_11_08_081821_create_categories_debit_table', 1),
(12, '2019_11_08_081836_create_debit_table', 1),
(13, '2023_07_25_152808_add_company_to_categories_debit', 2),
(14, '2023_12_30_103240_create_camp', 3),
(15, '2023_12_30_152352_create_presensi', 3),
(16, '2023_12_30_152646_create_gaji', 3),
(22, '2024_01_20_124813_recrutment', 4),
(26, '2024_01_23_163124_recruitment', 5),
(56, '2024_01_24_172510_karir', 6),
(57, '2024_02_02_215319_laporan_peserta', 6),
(86, '2024_02_13_200324_categories_scopuscamp', 7),
(87, '2024_02_14_143850_scopuscamp', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bertojunikrisnanto@gmail.com', '$2y$10$VErPDUpeBmh0tXR3hUFZrODQrAdZZEa489/97vNuKaVmZ4GgjYUVq', '2023-09-24 03:53:02'),
('karyawan@gmail.com', '$2y$10$ySlF31v3MxdzmAm0baN9weeLf92fYm7JeNTOses7ACM126C9ePW0u', '2024-01-09 16:08:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tambah_barang_id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telp` varchar(200) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `identitas` varchar(200) DEFAULT NULL,
  `jumlah` varchar(200) DEFAULT NULL,
  `lama_peminjaman` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pengembalian` date NOT NULL,
  `subtotal` varchar(300) DEFAULT NULL,
  `total` varchar(300) DEFAULT NULL,
  `diskon` varchar(300) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `jaminan` varchar(100) DEFAULT NULL,
  `jenis_pembayaran` varchar(100) DEFAULT NULL,
  `kekurangan_pembayaran` varchar(100) DEFAULT NULL,
  `jumlah_pembayaran` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id`, `user_id`, `tambah_barang_id`, `id_transaksi`, `nama`, `email`, `telp`, `alamat`, `identitas`, `jumlah`, `lama_peminjaman`, `tanggal`, `pengembalian`, `subtotal`, `total`, `diskon`, `status`, `jaminan`, `jenis_pembayaran`, `kekurangan_pembayaran`, `jumlah_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 22, 2, NULL, 'Berto Juni Krisnanto', 'bertojunikrisnanto@gmail.com', '0895421735441', 'fghdfgdfgdf', '56456456', '3', NULL, '2023-08-03', '0000-00-00', NULL, NULL, NULL, 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 00:37:53', '2023-08-03 00:37:53'),
(2, 22, 3, NULL, 'Berto Juni Krisnanto', 'bertojunikrisnanto@gmail.com', '0895421735441', 'tc', '56456456', '1', NULL, '2023-08-03', '0000-00-00', NULL, NULL, NULL, 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 00:42:40', '2023-08-03 00:42:40'),
(3, 22, 3, NULL, 'Berto Juni Krisnanto', 'bertojunikrisnanto@gmail.com', '08954217354413', 'afasdasdasd', '56456456', '5', NULL, '2023-08-03', '0000-00-00', NULL, NULL, NULL, 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 01:28:41', '2023-08-03 01:28:41'),
(4, 22, 3, NULL, 'berto juni', 'bertojunikrisnanto@gmail.com', '08954217354413', 'afdasdasdas', '56456456', '3', NULL, '2023-08-03', '0000-00-00', '150000', '150000', NULL, 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 01:32:18', '2023-08-03 01:32:18'),
(5, 22, 3, NULL, 'emka digital juni', 'bertojunikrisnanto@gmail.com', '0895421735441', 'afasdasdasd', '56456456', '5', NULL, '2023-08-03', '0000-00-00', '250000', '250000', NULL, 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 01:36:43', '2023-08-03 01:36:43'),
(6, 22, 3, NULL, 'febi', 'bertojunikrisnanto@gmail.com', '0895421735441', 'sadasdasdas', '56456456', '5', NULL, '2023-08-03', '0000-00-00', '250000', '240000', '10000', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 03:06:39', '2023-08-03 03:06:39'),
(8, 22, 5, NULL, 'baim', 'bertojunikrisnanto@gmail.com', '0895421735441', 'sdafasdasdas', '56456456', '5', NULL, '2023-08-03', '0000-00-00', '1250000', '1240000', '10000', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 03:41:07', '2023-08-03 03:41:07'),
(9, 22, 5, NULL, 'berto juni', 'bertojunikrisnanto@gmail.com', '0895421735441', 'dasdasdas', '56456456', '1', NULL, '2023-08-03', '0000-00-00', '250000', '250000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 03:57:13', '2023-08-03 03:57:13'),
(10, 22, 2, NULL, 'emka digital juni', 'dajksdnklas4535@gmail.com', '0895421735441', 'dawdawdada', '56456456', '1', NULL, '2023-08-03', '0000-00-00', '50000', '50000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 03:59:20', '2023-08-03 03:59:20'),
(11, 22, 2, NULL, 'berto juni123', 'bertojunikrisnanto@gmail.com', '0895421735441', 'asdasdasd', '56456456', '3', NULL, '2023-08-03', '0000-00-00', '150000', '150000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 04:01:23', '2023-08-03 04:28:34'),
(13, 22, 5, NULL, '31 januari ujicoba part 2', 'bertojunikrisnanto@gmail.com', '08954217', 'dawdawdaw', '56456456', '1', NULL, '2023-08-03', '0000-00-00', '250000', '250000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-03 04:39:52', '2023-08-03 04:39:52'),
(15, 22, 6, NULL, 'hapid', 'bertojunikrisnanto@gmail.com', '0895421735441', 'drgrggsdgsdg', '56456456', '3', '2', '2023-08-05', '0000-00-00', '300000', '300000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-04 20:20:01', '2023-08-04 20:20:01'),
(16, 22, 3, NULL, 'ida ervi', 'bertojunikrisnanto@gmail.com', '0895421735441', 'DASDASDAS', '56456456', '1', '7', '2023-08-05', '2023-08-12', '350000', '350000', '0', 'dikembalikan', NULL, NULL, NULL, NULL, '2023-08-04 23:13:38', '2023-08-05 22:54:49'),
(17, 22, 2, NULL, 'yolanda', 'bertojunikrisnanto@gmail.com', '0895421735441', 'sdfdsfsdf', '56456456', '3', '5', '2023-08-06', '2023-08-11', '750000', '750000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-05 22:14:05', '2023-08-05 22:14:05'),
(18, 22, 5, NULL, 'berto juni', 'bertojunikrisnanto@gmail.com', '0895421735441', 'DFGSFSDF', '56456456', '3', '5', '2023-08-06', '2023-08-11', '3750000', '3750000', '0', 'dipakai', NULL, NULL, NULL, NULL, '2023-08-05 23:35:15', '2023-08-05 23:35:15'),
(19, 22, 5, NULL, 'emka digital juni', 'bertojunikrisnanto@gmail.com', '0895421735441', 'SDFSDFSDF', '56456456', '3', '5', '2023-08-06', '2023-08-11', '3750000', '3750000', '0', 'dikembalikan', 'ktm', NULL, NULL, NULL, '2023-08-05 23:36:14', '2023-08-09 10:32:36'),
(21, 22, 5, NULL, 'Berto Juni Krisnanto12345', 'bertojunikrisnanto@gmail.com', '0895421735441', 'jbjbj', '56456456', '3', '2', '2023-08-06', '2023-08-08', '1500000', '1000000', '500000', 'dikembalikan', NULL, NULL, NULL, NULL, '2023-08-06 00:21:20', '2023-08-06 00:27:39'),
(22, 22, 5, NULL, 'ipan', 'bertojunikrisnanto@gmail.com', '0895421735441', 'gfdgdgdfgdf', '56456456', '3', '3', '2023-08-06', '2023-08-09', '2250000', '2250000', '0', 'dikembalikan', 'ktm', NULL, NULL, NULL, '2023-08-06 00:56:51', '2023-08-06 00:57:46'),
(24, 22, 5, NULL, 'wildan', 'wildan@gmail.com', '0895421735441', 'adasdasd', '56456456', '3', '5', '2023-08-10', '2023-08-15', '3750000', '3650000', '100000', 'dikembalikan', 'sim', NULL, NULL, NULL, '2023-08-09 08:29:52', '2023-08-09 10:29:49'),
(29, 22, 5, NULL, 'cahyo', 'cahyo@gmail.com', '0895421735441', 'sdfsdf', '56456456', '3', '5', '2023-08-10', '2023-08-15', '3750000', '3650000', '100000', 'dikembalikan', 'sim', NULL, NULL, NULL, '2023-08-09 08:54:51', '2023-08-09 10:27:34'),
(30, 22, 5, NULL, 'baim', 'bertojunikrisnanto@gmail.com', '0895421735441', 'sgfsdfsdfsd', '56456456', '3', '5', '2023-08-10', '2023-08-15', '3750000', '3650000', '100000', 'dikembalikan', 'sim', NULL, NULL, NULL, '2023-08-09 08:59:26', '2023-08-09 10:26:29'),
(33, 22, 5, NULL, 'Berto Juni Krisnanto', 'bertojunikrisnanto@gmail.com', '0895421735441', 'sfgsdfsd', '56456456', '3', '5', '2023-08-10', '2023-08-15', '3750000', '3750000', '0', 'dikembalikan', 'ktm', NULL, NULL, NULL, '2023-08-09 10:33:12', '2023-08-09 10:33:40'),
(34, 22, 7, NULL, 'emka digital juni123', 'bertojunikrisnanto1@gmail.com', '08954217354411', 'hjvvhvjvghvj123', '56456456123', '5', '10', '2023-08-10', '2023-08-20', '2500000', '2000000', '500000', 'dikembalikan', 'sim', 'lunas', '0', '0', '2023-08-09 10:56:23', '2023-08-09 19:37:38'),
(35, 22, 7, NULL, 'baim1234567', 'bertojunikrisnanto1234@gmail.com', '0895421735441', 'fdxxfxdf', '56456456', '5', '5', '2023-08-10', '2023-08-15', '1250000', '1150000', '100000', 'dikembalikan', 'sim', 'dp', '650000', '500000', '2023-08-09 18:48:13', '2023-08-09 19:57:26'),
(36, 22, 7, NULL, 'fertika123', 'bertojunikrisnanto1@gmail.com', '08954217354412', 'sdfsdfsdf123', '56456456124', '5', '5', '2023-08-10', '2023-08-15', '1250000', '1150000', '100000', 'dikembalikan', 'motor', 'dp', '1150000', '0', '2023-08-09 19:46:43', '2023-08-09 19:54:08'),
(37, 22, 7, 'JJY3V', 'peboyy', 'bertojunikrisnanto@gmail.com', '0895421735441', 'asdadasd', '56456456', '5', '5', '2023-08-10', '2023-08-15', '1250000', '1250000', '0', 'dikembalikan', 'sim', 'lunas', '0', '0', '2023-08-09 22:58:49', '2023-08-09 23:41:24'),
(38, 22, 7, 'QW4VV', '31 januari ujicoba part 2', 'bertojunikrisnanto@gmail.com', '0895421735441', 'dasdasdasdasd', '56456456', '5', '5', '2023-08-10', '2023-08-15', '1250000', '1250000', '0', 'dikembalikan', 'motor', 'lunas', '0', '0', '2023-08-10 03:17:21', '2023-08-10 03:17:42'),
(40, 47, 8, NULL, 'berto juni', 'bertojunikrisnanto@gmail.com', '08968-4290-3641', 'sfesfse', '56456456124', '3', '2', '2024-03-08', '2024-03-10', '1200000', '1200000', '0', 'dipakai', 'ktm', NULL, NULL, NULL, '2024-03-02 14:59:26', '2024-03-02 14:59:26'),
(41, 47, 8, '2VV51', 'asdasd', 'bertojunikrisnanto@gmail.com', '08968-4290-3641', 'ijoj', '56456456124', '1', '2', '2024-03-03', '2024-03-05', '400000', '400000', '0', 'dipakai', 'sim', 'lunas', '0', '50000', '2024-03-02 15:19:13', '2024-03-02 15:19:13'),
(42, 47, 8, 'NUDWG', 'berto juni', 'bertojunikrisnanto@gmail.com', '123456789012', 'gfdgdgdf', '56456456124', '1', '2', '2024-03-02', '2024-03-04', '400000', '350000', '50000', 'dikembalikan', 'sim', 'lunas', '0', '0', '2024-03-02 15:24:32', '2024-03-05 07:48:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_update` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `afiliasi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurnal` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refrensi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digital_writing` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mendeley` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_penyelesaian` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` datetime DEFAULT NULL,
  `scopus_camp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `makanan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelayanan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terfavorit` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terbaik` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terlucu` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kritik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pulang` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_pulang` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_pulang` datetime DEFAULT NULL,
  `latitude` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hadir` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alpha` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_jogja` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perjalanan_jawa` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perjalanan_luar_jawa` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp_luar_kota` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remote` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `izin` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `user_id`, `status`, `status_pulang`, `note`, `gambar`, `gambar_pulang`, `lokasi`, `time_pulang`, `latitude`, `longitude`, `hadir`, `alpha`, `camp_jogja`, `perjalanan_jawa`, `perjalanan_luar_jawa`, `camp_luar_kota`, `remote`, `izin`, `created_at`, `updated_at`) VALUES
(1, 22, 'hadir', NULL, NULL, NULL, NULL, 'Unknown', NULL, '-7.8051218', '110.3904715', '1', NULL, '2', '3', '5', NULL, NULL, NULL, '2023-12-30 08:33:05', '2023-12-30 08:33:05'),
(7, 22, 'camp jogja', 'pulang', NULL, NULL, NULL, 'Unknown', '2024-01-03 12:05:11', '-7.708154', '110.2713189', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 05:04:40', '2024-01-03 05:05:11'),
(11, 49, 'alpha', 'pulang', NULL, NULL, NULL, 'Unknown', '2024-01-03 12:20:08', '-7.708154', '110.2713189', NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 05:19:34', '2024-01-03 05:20:08'),
(41, 49, 'hadir', NULL, NULL, NULL, NULL, 'Unknown', NULL, '-7.766016', '110.3429632', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 03:01:03', '2024-01-17 03:01:03'),
(57, 49, 'camp jogja', 'pulang', NULL, NULL, NULL, 'Unknown', '2024-02-03 09:00:51', '-7.7529088', '110.4084992', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2024-02-03 02:00:39', '2024-02-03 02:00:51'),
(58, 49, 'perjalanan luar kota luar jawa', 'pulang', NULL, NULL, NULL, 'Unknown', '2024-02-12 20:41:45', '-7.798784', '110.3888384', NULL, NULL, NULL, NULL, '0.5', NULL, NULL, NULL, '2024-02-12 11:26:43', '2024-02-12 13:41:45'),
(59, 49, 'hadir', 'pulang', NULL, NULL, NULL, 'Unknown', '2024-02-13 10:08:40', '-7.798784', '110.3888384', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 02:40:20', '2024-02-13 03:08:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `scopuscamp`
--

CREATE TABLE `scopuscamp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_transaksi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_scopuscamp_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `afiliasi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camp` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `tempat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `scopuscamp`
--

INSERT INTO `scopuscamp` (`id`, `token`, `id_transaksi`, `categories_scopuscamp_id`, `email`, `nama`, `judul`, `telp`, `afiliasi`, `pembayaran`, `gambar`, `status`, `camp`, `mulai`, `selesai`, `tempat`, `note`, `created_at`, `updated_at`) VALUES
(1, 'l1X0ox8Y2-J<gu&xkfQf?Bf<mww!JYC&%biiH+B4Ml(dA5baI=', '23MX0', NULL, 'bertojunikrisnanto@gmail.com', 'adasda', 'asdasda', '1231231231', 'adsasdas', 'BRI', '1708485319.jpg', 'Pendaftaran Diterima', 'YOGYAKARTA', '2024-02-21 18:29:00', '2024-02-24 18:29:00', 'Joglo Rumah Scopus', 'dsfsdfsd', '2024-02-21 03:15:19', '2024-02-23 10:03:04'),
(2, '+owb3&)z37!A)%)2G3NWeM7E8vgJeImqK8+^-RREMh#X&mKRqv', 'E8YM2', NULL, 'bertojunikrisnanto@gmail.com', 'dasdas', 'asdas', '08954-2173-5441', 'adasdas', 'BRI', '1708596056.jpg', 'Dalam Proses Pengecekan', 'dasdasd', NULL, NULL, NULL, NULL, '2024-02-22 10:00:56', '2024-02-22 10:00:56'),
(3, 'tc4&OU<qm8wQ)rl1g@!6xg&#KFpgrSM8Q)h$U%Pz3xI5bNw<M$', '7M0PB', NULL, 'bertojunikrisnanto@gmail.com', 'berto juni', 'fsefsefs', '08954-2173-5441', 'adasdas', 'BRI', '1708596142.jpg', 'Dalam Proses Pengecekan', 'banjarmasin #1', NULL, NULL, NULL, NULL, '2024-02-22 10:02:23', '2024-02-22 10:02:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_barang`
--

CREATE TABLE `tambah_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `harga_barang` bigint(200) DEFAULT NULL,
  `stok` varchar(200) DEFAULT NULL,
  `diskon` bigint(200) DEFAULT NULL,
  `jenis` varchar(300) DEFAULT NULL,
  `perhari` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tambah_barang`
--

INSERT INTO `tambah_barang` (`id`, `user_id`, `nama_barang`, `harga_barang`, `stok`, `diskon`, `jenis`, `perhari`, `created_at`, `updated_at`) VALUES
(2, 22, 'TESS12', 50000, '2', 2000, NULL, NULL, '2023-08-02 09:16:42', '2023-08-05 22:14:05'),
(3, 22, 'NYOBA123', 50000, '53', 5000, NULL, NULL, '2023-08-02 09:37:30', '2023-08-05 22:54:49'),
(4, 22, 'TESS123456', 50000, '20', 2000, NULL, NULL, '2023-08-02 09:53:30', '2023-08-02 09:53:30'),
(5, 22, 'TESS', 250000, '1', 5000, 'crossover', 'setengah', '2023-08-02 18:42:06', '2023-08-09 19:10:29'),
(6, 22, 'MAZDA', 50000, '0', 0, 'sedan', 'sehari', '2023-08-03 07:14:32', '2023-08-09 09:54:54'),
(7, 22, 'HRV', 50000, '25', 0, 'suv', 'sehari', '2023-08-09 10:41:08', '2023-08-10 03:17:42'),
(8, 47, 'BMW', 200000, '16', 0, 'sedan', 'sehari', '2023-08-11 21:04:46', '2024-03-05 07:48:25'),
(9, 15, 'NYOBA123', 250000, '100', 500000, 'hybrid', 'sehari', '2024-03-01 09:59:09', '2024-03-01 09:59:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gaji_id` bigint(20) UNSIGNED DEFAULT NULL,
  `presensi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hadir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `jenis` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'perorangan',
  `company` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pj_company` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notif` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenggat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `norek` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobdesk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hadir` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `username`, `password`, `reset_token`, `email_verified_at`, `avatar`, `remember_token`, `created_at`, `updated_at`, `level`, `jenis`, `company`, `alamat_company`, `telp_company`, `email_company`, `logo_company`, `pj_company`, `telp`, `status`, `notif`, `tenggat`, `title`, `nik`, `norek`, `bank`, `gambar`, `jobdesk`, `total_hadir`) VALUES
(1, 'Berto Juni', 'bertojuni@gmail.com', 'bertojuni', 'junijuni008', NULL, NULL, '898192462.png', NULL, NULL, NULL, 'user', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'bertojunik', 'bertojunijuni@gmail.com', 'bertojunik', '$2y$10$wwknRoFVyEgG51kO0sxICepdHSjf5Dvd2QdxKkOexM.XyMEddihS.', NULL, '2023-07-15 22:14:15', NULL, NULL, '2023-07-15 01:15:22', '2023-07-15 22:14:15', 'admin', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'junijuni', 'juni@gmail.com', 'juni', '$2y$10$LCf6VN3S7vpf0aw87rdG7ursTKa7gide8ziPUl64P5stnbdd9CeyC', NULL, NULL, NULL, NULL, '2023-07-15 03:50:27', '2023-07-15 03:50:27', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'AJIROHMAT', 'aji@gmail.com', 'aji123', '$2y$10$bq1CweJhPPSviFZT7AmyFufN6J0rm2ojJJ1LTV62UCxG.QNka6l.6', NULL, NULL, NULL, NULL, '2023-07-15 04:30:17', '2023-07-15 08:16:08', 'bisnis', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Berto Krisnanto', 'admin@gmail.com', 'admin', '$2y$10$HfeNu60ry3y0iMqe48LITubOI0dIVYZAHshOmlY6D5EF8KLl2/4hG', NULL, '2023-07-15 22:28:38', NULL, NULL, '2023-07-15 22:28:38', '2023-11-14 05:02:37', 'admin', '', 'bertojuni', NULL, NULL, NULL, NULL, NULL, '+6285155240654', 'on', NULL, NULL, NULL, '123456', '123456', '451', NULL, '<p>sdasdas</p>', NULL),
(16, 'user', 'user@gmail.com', 'user', '$2y$10$1LbprO4sqJha0rQYVq.Zp.2lZDVRXkbNqhs2qVWfY/ldSIqbTxwYu', NULL, NULL, NULL, NULL, '2023-07-15 22:29:08', '2023-07-15 22:29:08', 'user', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'bisnis', 'bisnis@gmail.com', 'bisnis', '$2y$10$5i1VcojhcIe.d17xyxMkYu/w5B9IbxWR4YbHCAfoGb6Dm./CxM262', NULL, NULL, '5d66284f74f17963dd1b68e2b3fd49b5.jpg', NULL, '2023-07-15 22:31:55', '2023-07-15 22:31:55', 'bisnis', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'user2', 'user2@gmail.com', 'user2', '$2y$10$ij09uJWwUSED1xesf2nyceme9MlQyrL7L9ObwwIxEDlpHZGRL5fKG', NULL, NULL, '5d66284f74f17963dd1b68e2b3fd49b5.jpg', NULL, '2023-07-15 22:44:41', '2023-07-15 22:44:41', 'user', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'admin2', 'admin2@gmail.com', 'admin2', '$2y$10$ZXWl8md4Tts7TtkQSBgLR.R7qmrhj6LmxgVJN9joaLHVmPQQsxNQu', NULL, '2023-07-16 07:48:39', NULL, NULL, '2023-07-16 07:48:39', '2023-07-16 07:48:39', 'admin', '', '', NULL, NULL, NULL, NULL, NULL, '', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'manager', 'manager@gmail.com', 'manager', '$2y$10$fIOHMi7XbpMrX1774/gEJevQiasVLwo0KMZ307nplhMioeibRNXp.', NULL, '2023-07-31 06:33:39', NULL, NULL, '2023-07-25 03:07:04', '2023-12-22 07:51:45', 'manager', 'perorangan', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895-4217-35441', 'on', NULL, NULL, NULL, '123456', '123456', '506', '1698207997.jpg', '<p>fsdfsdfdsfs</p>', '1'),
(24, 'staff', 'staff@gmail.com', 'staff', '$2y$10$h.zowDsg0SrwjE3psUAkF..YsqQjbp.dkCYo.KdtQuTYjSOuWAuNW', NULL, '2023-08-11 21:17:32', NULL, NULL, '2023-07-25 03:44:11', '2023-10-25 11:21:44', 'staff', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895421735441', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'azlinda', 'azlinda@gmail.com', 'azlinda', '$2y$10$Yaw3qwIOAQsTMwdY0qJQn.klaPKl4geCNaSSF7jQac0yElipRNBQO', NULL, '2023-07-26 08:16:30', NULL, NULL, '2023-07-26 08:04:55', '2023-07-26 08:16:30', 'user', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '0895421735441', 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'tessss', 'tess@gmail.com', 'tessss', '$2y$10$/UhG6LTus26zty/etTOLJuz6uQXscUje20//4G4nhkZ8Bj0jnUY5C', NULL, NULL, NULL, NULL, '2023-07-26 09:36:58', '2023-07-26 09:36:58', 'user', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '0895421735441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'ebiiiiiii', 'ebi@gmail.com', 'ebiiiiiii', '$2y$10$5l3hOxKAKM4aVeluGt1Ibe557kCwiTT/AIJGOOv7ZyZSu2VSUVlSu', NULL, '2023-07-27 08:59:18', NULL, NULL, '2023-07-27 08:52:45', '2023-10-25 11:21:44', 'staff', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895421735441', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'jonii', 'joni@gmail.com', 'jonii', '$2y$10$khOUus0zo4B/CqPvuNhEoOipDxBfwaDdHDezUGxTN1aUufl1VG77y', NULL, NULL, NULL, NULL, '2023-07-27 08:56:54', '2023-07-27 08:56:54', 'user', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '0895421735441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'staff2', 'staff2@gmail.com', 'staff2', '$2y$10$OWQko./89s/ZWRBVlps0pu0ui1uvdHtH9aAurgY.IpeNbhbLn7V4.', NULL, '2023-07-28 21:47:25', NULL, NULL, '2023-07-28 21:45:31', '2023-10-25 11:21:44', 'staff', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895421735441', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'yolanda', 'yola@gmail.com', 'yolanda', '$2y$10$eDJhpUHPafy6B.2t9Q9NEeG91IV3FF0LdNI5L6D0O.jSDIci.lDlO', NULL, '2023-08-22 08:20:24', NULL, NULL, '2023-07-29 02:03:59', '2023-10-25 11:21:44', 'karyawan', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895421735441', 'on', NULL, NULL, NULL, '123456', '123456', '441', NULL, NULL, NULL),
(45, 'hafid', 'hafid@gmail.com', 'hafid', '$2y$10$lEdZ9612KDsk1dlojVB/2uIy3Wy6eSLQEN.IyCftAdCL/DDGdrevW', NULL, NULL, NULL, NULL, '2023-07-29 02:45:46', '2023-07-29 02:45:46', 'users', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '0895421735441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'ipann', 'ipan@gmai.com', 'ipann', '$2y$10$42AuxNDJ6GMD8Q6SnkM/uenpiNOVhfzfx8iNFlrpYEWs.40SXZhPu', NULL, NULL, NULL, NULL, '2023-07-29 02:50:24', '2023-10-25 11:21:44', 'staff', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895421735441', NULL, NULL, NULL, NULL, '123', '123', '1234', NULL, NULL, NULL),
(47, 'rental', 'rental@gmail.com', 'rental', '$2y$10$mccAiMPIyQ9J75.0u9Aee.JiJ.aNIObmC4FTOxmKFT9Cze4/Fhl7a', NULL, '2023-08-10 22:27:13', NULL, NULL, '2023-08-10 22:26:13', '2023-08-10 22:27:13', 'manager', 'penyewaan', 'rental', NULL, NULL, NULL, NULL, NULL, '0895421735441', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Muhammad Hafidhudin Saputra', 'bertojunikrisnanto@gmail.com', 'karyawan', '$2y$10$FnecXhnPxWZM5RmatpQDSu/BVE6RItWuBAXUvfFlqyqUtQohMdUoC', 'fQVSs4Nj7vV9InX4ll2cGdboyI5rW4Us', '2024-01-11 03:27:59', NULL, NULL, '2023-08-12 03:36:07', '2024-01-24 10:44:53', 'karyawan', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '+62895421735441', 'on', NULL, NULL, NULL, '123456', '123456', '014', NULL, '<p>dasdasdasdasdasdasdasda</p>', '6'),
(50, 'baimm', 'baim@gmail.com', 'baimm', '$2y$10$7AZeYgj8Gvd8.w1C96Q.3uirSviRB0qyETZRYHEkQj.fIRpZ.sn6a', NULL, NULL, NULL, NULL, '2023-08-14 05:00:37', '2023-10-25 11:21:44', 'staff', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '123456789012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'ida ervi', 'erviida@gmail.com', 'ida ervi', '$2y$10$fT6sS53/0rkj7wZJI/gv7ea3OaA1tONWWq0xOGhZ0som8UMtG2Cc2', NULL, NULL, NULL, NULL, '2023-09-21 15:29:16', '2023-10-25 11:21:44', 'karyawan', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895415165136', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'fertika', 'fertika@gmail.com', 'fertika', '$2y$10$HaneVoc.ox3l2SAjhfXOJOxzTgMSzGE29Y0pkNb9z9bV5ISGlA7T.', NULL, '2023-09-21 15:55:46', NULL, NULL, '2023-09-21 15:50:47', '2023-09-21 15:55:46', 'admin', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '08951616516', 'on', NULL, NULL, NULL, '54564', '54654', '022', NULL, NULL, NULL),
(54, 'dwilestari', 'dwilestari@gmail.com', 'dwilestari', '$2y$10$iPcdzrUAHs156Fbq6.G8m.kpYvHbDIWXFTSDTjA4EaNDYxG0eVSVy', NULL, '2023-09-21 16:01:49', NULL, NULL, '2023-09-21 15:59:32', '2023-09-21 16:01:49', 'users', 'perorangan', NULL, NULL, NULL, NULL, NULL, NULL, '45646546', 'on', NULL, NULL, NULL, '123456', '123456', '200', NULL, NULL, NULL),
(56, 'awdawdadwada', 'berto@gmail.com', 'awdadawdaw', '$2y$10$cnsyGIBkangXYxFkYvjVpuD0MHrOLw9cNqP6vHYY0VT3406.X5A/2', NULL, NULL, NULL, NULL, '2023-10-09 13:53:46', '2023-10-09 13:53:46', 'karyawan', 'bisnis', 'dawdawdawdaw', NULL, NULL, NULL, NULL, NULL, '13231231231', 'off', NULL, NULL, NULL, '123456', '123456', '009', NULL, NULL, NULL),
(59, 'ludiro', 'ludiro@gmail.com', 'ludiro', '$2y$10$DlKIqqmBaAvKFLZ3Ic0gXOuuzC7S1DJaV4FF5sL0JZxiKaIgXJtma', NULL, '2023-10-25 06:08:39', NULL, NULL, '2023-10-20 04:55:39', '2023-10-25 11:21:44', 'trainer', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895-4217-3544', 'on', NULL, NULL, NULL, '2313221312', '123121232423', '022', NULL, '<p>fsdfsdfsdfsdfsd</p>', NULL),
(60, 'desiii', 'desii@gmail.com', 'desiiii', '$2y$10$enj3TjJosVHrrjdTaO6HneYul/IQ8kvza6xYrm7e97Nnrw9qst1Bu', NULL, '2024-02-28 03:12:37', NULL, NULL, '2023-10-25 04:20:58', '2024-02-28 03:12:37', 'karyawan', 'bisnis', 'rumahscopus', 'Tegal Catak UH IV/No.638 Warungboto, Umbulharjo, Yogyakarta\r\nDaerah Istimewa Yogyakarta 55164', '0895-4217-35441', 'bertojunikrisnanto@gmail.com', '1698213665.png', NULL, '0895-4217-35441', 'on', '25 October 2023 11:20', NULL, NULL, '2313221312', '12323232', '028', NULL, '<p>adsdasdasd</p>', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `camp_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `categories_credit`
--
ALTER TABLE `categories_credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_credit_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `categories_debit`
--
ALTER TABLE `categories_debit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_debit_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `categories_scopuscamp`
--
ALTER TABLE `categories_scopuscamp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `credit_user_id_foreign` (`user_id`),
  ADD KEY `credit_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debit_user_id_foreign` (`user_id`),
  ADD KEY `debit_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gaji_user_id_foreign` (`user_id`),
  ADD KEY `gaji_presensi_id_foreign` (`presensi_id`);

--
-- Indeks untuk tabel `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tambah_barang_id` (`tambah_barang_id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `presensi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `scopuscamp`
--
ALTER TABLE `scopuscamp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scopuscamp_categories_scopuscamp_id_foreign` (`categories_scopuscamp_id`);

--
-- Indeks untuk tabel `tambah_barang`
--
ALTER TABLE `tambah_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`gaji_id`,`presensi_id`),
  ADD KEY `presensi_id` (`presensi_id`),
  ADD KEY `gaji_id` (`gaji_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `company` (`company`),
  ADD KEY `company_2` (`company`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `camp`
--
ALTER TABLE `camp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `categories_credit`
--
ALTER TABLE `categories_credit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `categories_debit`
--
ALTER TABLE `categories_debit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `categories_scopuscamp`
--
ALTER TABLE `categories_scopuscamp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `credit`
--
ALTER TABLE `credit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `debit`
--
ALTER TABLE `debit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `karir`
--
ALTER TABLE `karir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `scopuscamp`
--
ALTER TABLE `scopuscamp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tambah_barang`
--
ALTER TABLE `tambah_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `total`
--
ALTER TABLE `total`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `camp`
--
ALTER TABLE `camp`
  ADD CONSTRAINT `camp_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `categories_credit`
--
ALTER TABLE `categories_credit`
  ADD CONSTRAINT `categories_credit_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `categories_debit`
--
ALTER TABLE `categories_debit`
  ADD CONSTRAINT `categories_debit_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `credit`
--
ALTER TABLE `credit`
  ADD CONSTRAINT `credit_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories_credit` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `credit_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `debit`
--
ALTER TABLE `debit`
  ADD CONSTRAINT `debit_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories_debit` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `debit_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_presensi_id_foreign` FOREIGN KEY (`presensi_id`) REFERENCES `presensi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `gaji_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`tambah_barang_id`) REFERENCES `tambah_barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `scopuscamp`
--
ALTER TABLE `scopuscamp`
  ADD CONSTRAINT `scopuscamp_categories_scopuscamp_id_foreign` FOREIGN KEY (`categories_scopuscamp_id`) REFERENCES `categories_scopuscamp` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tambah_barang`
--
ALTER TABLE `tambah_barang`
  ADD CONSTRAINT `tambah_barang_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `total`
--
ALTER TABLE `total`
  ADD CONSTRAINT `total_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `total_ibfk_2` FOREIGN KEY (`presensi_id`) REFERENCES `presensi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `total_ibfk_3` FOREIGN KEY (`gaji_id`) REFERENCES `gaji` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
