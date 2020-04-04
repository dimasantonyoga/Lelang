-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2020 pada 09.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_lelang`
--

CREATE TABLE `history_lelang` (
  `id_history` int(11) NOT NULL,
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `penawaran_harga` int(20) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aktifitas`
--

CREATE TABLE `tb_aktifitas` (
  `id_aktivitas` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `nama_aktifitas` enum('CREATE','UPDATE','DELETE') NOT NULL,
  `nama_tabel` varchar(25) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_aktifitas`
--

INSERT INTO `tb_aktifitas` (`id_aktivitas`, `id_petugas`, `nama_aktifitas`, `nama_tabel`, `create_at`) VALUES
(1, 2, 'CREATE', 'tb_masyarakat', '2020-03-29 08:57:44'),
(2, 2, 'UPDATE', 'tb_masyarakat', '2020-03-29 08:58:00'),
(3, 2, 'DELETE', 'tb_masyarakat', '2020-03-29 08:58:16'),
(4, 2, 'CREATE', 'tb_petugas', '2020-03-29 08:58:34'),
(5, 2, 'UPDATE', 'tb_petugas', '2020-03-29 08:58:44'),
(6, 2, 'DELETE', 'tb_petugas', '2020-03-29 08:58:50'),
(7, 2, 'CREATE', 'tb_petugas', '2020-03-29 08:59:10'),
(8, 2, 'CREATE', 'tb_kategori', '2020-03-29 09:00:17'),
(9, 2, 'UPDATE', 'tb_kategori', '2020-03-29 09:00:28'),
(10, 2, 'UPDATE', 'tb_kategori', '2020-03-29 09:00:36'),
(11, 2, 'DELETE', 'tb_kategori', '2020-03-29 09:00:41'),
(12, 2, 'CREATE', 'tb_barang', '2020-03-29 09:07:00'),
(13, 4, 'CREATE', 'tb_barang', '2020-03-29 09:09:38'),
(14, 4, 'CREATE', 'tb_barang', '2020-03-29 09:12:00'),
(15, 4, 'CREATE', 'tb_barang', '2020-03-29 09:14:11'),
(16, 4, 'CREATE', 'tb_barang', '2020-03-29 09:15:54'),
(18, 0, 'UPDATE', 'tb_lelang', '2020-03-29 09:27:00'),
(19, 0, 'UPDATE', 'tb_lelang', '2020-03-29 09:28:21'),
(20, 0, 'UPDATE', 'tb_lelang', '2020-03-29 09:29:40'),
(21, 0, 'UPDATE', 'tb_lelang', '2020-03-29 09:33:23'),
(22, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:42:39'),
(23, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:42:40'),
(24, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:42:41'),
(25, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:42:45'),
(26, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:42:53'),
(27, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:43:04'),
(28, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:43:08'),
(29, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:43:15'),
(30, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:51:10'),
(31, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:52:36'),
(32, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:52:42'),
(33, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:52:49'),
(34, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:52:51'),
(35, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:53:20'),
(36, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:53:22'),
(37, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:53:45'),
(38, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:53:59'),
(39, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:03'),
(40, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:07'),
(41, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:17'),
(42, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:22'),
(43, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:23'),
(44, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:34'),
(45, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:54:39'),
(46, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:56:44'),
(47, 0, 'UPDATE', 'tb_lelang', '2020-03-29 21:57:06'),
(49, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:04:41'),
(50, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:06:58'),
(51, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:07:21'),
(53, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:14:11'),
(54, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:15:03'),
(55, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:15:04'),
(56, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:16:14'),
(57, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:16:14'),
(58, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:17:50'),
(59, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:17:50'),
(60, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:18:42'),
(61, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:18:42'),
(62, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:19:13'),
(63, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:19:13'),
(64, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:27:22'),
(65, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:27:22'),
(66, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:31:16'),
(67, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:31:16'),
(68, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:31:42'),
(69, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:31:42'),
(70, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:32:43'),
(71, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:32:43'),
(72, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:36:32'),
(73, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:36:32'),
(74, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:38:24'),
(75, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:38:25'),
(76, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:49:19'),
(77, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:49:19'),
(78, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:49:29'),
(79, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:49:29'),
(80, 0, 'UPDATE', 'tb_lelang', '2020-03-29 22:49:53'),
(81, 2, 'UPDATE', 'tb_barang', '2020-03-29 22:49:53'),
(82, 0, 'UPDATE', 'tb_lelang', '2020-03-29 23:20:48'),
(83, 4, 'CREATE', 'tb_barang', '2020-03-29 23:20:48'),
(84, 0, 'UPDATE', 'tb_lelang', '2020-03-29 23:53:18'),
(85, 4, 'UPDATE', 'tb_barang', '2020-03-29 23:53:19'),
(86, 0, 'UPDATE', 'tb_lelang', '2020-03-29 23:54:40'),
(87, 4, 'UPDATE', 'tb_barang', '2020-03-29 23:54:41'),
(88, 0, 'UPDATE', 'tb_lelang', '2020-03-29 23:55:14'),
(89, 4, 'UPDATE', 'tb_barang', '2020-03-29 23:55:14'),
(90, 0, 'UPDATE', 'tb_lelang', '2020-03-30 00:37:33'),
(91, 4, 'UPDATE', 'tb_barang', '2020-03-30 00:37:35'),
(92, 0, 'UPDATE', 'tb_lelang', '2020-03-30 00:47:30'),
(93, 4, 'UPDATE', 'tb_barang', '2020-03-30 00:47:30'),
(94, 0, 'UPDATE', 'tb_lelang', '2020-03-30 00:52:39'),
(95, 4, 'UPDATE', 'tb_barang', '2020-03-30 00:52:40'),
(96, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:27:01'),
(97, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:27:01'),
(98, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:27:38'),
(99, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:27:38'),
(100, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:27:58'),
(101, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:27:58'),
(102, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:36:23'),
(103, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:36:23'),
(104, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:39:16'),
(105, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:39:17'),
(106, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:40:01'),
(107, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:40:03'),
(108, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:41:37'),
(109, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:41:38'),
(110, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:42:22'),
(111, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:42:23'),
(112, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:43:34'),
(113, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:43:35'),
(114, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:45:05'),
(115, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:45:06'),
(116, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:50:39'),
(117, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:50:39'),
(118, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:53:05'),
(119, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:53:05'),
(120, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:54:32'),
(121, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:54:33'),
(122, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:54:50'),
(123, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:54:50'),
(124, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:55:12'),
(125, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:55:12'),
(126, 0, 'UPDATE', 'tb_lelang', '2020-03-30 08:56:03'),
(127, 4, 'UPDATE', 'tb_barang', '2020-03-30 08:56:03'),
(128, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:02:02'),
(129, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:02:02'),
(130, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:03:01'),
(131, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:03:01'),
(132, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:10:01'),
(133, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:10:02'),
(134, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:12:12'),
(135, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:12:12'),
(136, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:16:17'),
(137, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:16:18'),
(138, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:20:35'),
(139, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:20:35'),
(140, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:29:25'),
(141, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:29:25'),
(142, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:35:57'),
(143, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:35:57'),
(144, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:56:58'),
(145, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:56:59'),
(146, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:57:13'),
(147, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:57:14'),
(148, 0, 'UPDATE', 'tb_lelang', '2020-03-30 09:57:28'),
(149, 4, 'UPDATE', 'tb_barang', '2020-03-30 09:57:28'),
(150, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:12:42'),
(151, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:12:43'),
(152, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:13:40'),
(153, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:13:42'),
(154, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:06'),
(155, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:14:06'),
(156, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:06'),
(157, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:13'),
(158, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:14'),
(159, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:20'),
(160, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:14:22'),
(161, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:22:41'),
(162, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:22:41'),
(163, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:37:01'),
(164, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:37:01'),
(165, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:37:01'),
(166, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:37:01'),
(167, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:37:01'),
(168, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:37:01'),
(169, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:37:13'),
(170, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:37:13'),
(171, 0, 'UPDATE', 'tb_lelang', '2020-03-30 10:38:54'),
(172, 4, 'UPDATE', 'tb_barang', '2020-03-30 10:38:54'),
(173, 0, 'UPDATE', 'tb_lelang', '2020-03-30 11:09:07'),
(174, 4, 'UPDATE', 'tb_barang', '2020-03-30 11:09:07'),
(175, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(176, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(177, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(178, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(179, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(180, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:00:23'),
(181, 2, 'UPDATE', 'tb_barang', '2020-03-30 13:00:23'),
(182, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(183, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(184, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(185, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(186, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(187, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:09:22'),
(188, 2, 'UPDATE', 'tb_barang', '2020-03-30 13:09:23'),
(189, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(190, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(191, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(192, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(193, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(194, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:10:07'),
(195, 2, 'UPDATE', 'tb_barang', '2020-03-30 13:10:07'),
(196, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(197, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(198, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(199, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(200, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(201, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:21'),
(202, 4, 'UPDATE', 'tb_barang', '2020-03-30 13:11:21'),
(203, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:22'),
(204, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:22'),
(205, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:22'),
(206, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:22'),
(207, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:22'),
(208, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:36'),
(209, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:11:38'),
(210, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(211, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(212, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(213, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(214, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(215, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:22'),
(216, 4, 'UPDATE', 'tb_barang', '2020-03-30 13:12:22'),
(217, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(218, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(219, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(220, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(221, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(222, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:12:23'),
(223, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:25:36'),
(224, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:31:12'),
(225, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:36:37'),
(226, 0, 'UPDATE', 'tb_lelang', '2020-03-30 13:36:49'),
(227, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:25:56'),
(228, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:25:57'),
(229, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:26:18'),
(230, 4, 'UPDATE', 'tb_barang', '2020-03-30 14:26:18'),
(231, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:26:19'),
(232, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:37:49'),
(233, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:37:50'),
(234, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:38:20'),
(235, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:38:21'),
(236, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:38:37'),
(237, 4, 'UPDATE', 'tb_barang', '2020-03-30 14:38:37'),
(238, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:38:39'),
(239, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:11'),
(240, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:11'),
(241, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:23'),
(242, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:24'),
(243, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:28'),
(244, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:30'),
(245, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:38'),
(246, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:38'),
(247, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:38'),
(248, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:41:39'),
(249, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:42:00'),
(250, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:42:00'),
(251, 4, 'UPDATE', 'tb_barang', '2020-03-30 14:42:01'),
(252, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:43:19'),
(253, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:43:19'),
(254, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:43:19'),
(255, 0, 'UPDATE', 'tb_lelang', '2020-03-30 14:43:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tgl` datetime DEFAULT current_timestamp(),
  `harga_awal` int(20) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `update_at` datetime NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `weight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_kategori`, `id_kota`, `nama_barang`, `foto`, `tgl`, `harga_awal`, `deskripsi_barang`, `update_at`, `alamat`, `weight`) VALUES
(1, 11, 28, 'Smart 4K Ultra HD TV', '7f23d1e0ed14135f63f801574cae1b5c.jpg', '2020-03-29 09:06:59', 1000000, '- Instantly stream content from Netflix\r\n- 1080p resolution\r\n- Dual-band 802.11ac\r\n- Alexa voice sea', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 500),
(2, 11, 487, 'Ninja – Coffee Bar 10-Cup', '9685d05365b6a6d0479e70aeac3f602a.jpg', '2020-03-29 09:09:38', 200000, '- Instantly stream content from Netflix\r\n- 1080p resolution\r\n- Dual-band 802.11ac\r\n- Alexa voice sea', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 600),
(3, 11, 152, 'Gaming Mouse for PC', 'd4e5b55056041bf8acf1ca065a5a3072.jpg', '2020-03-29 09:12:00', 150000, '- Instantly stream content from Netflix\r\n- 1080p resolution\r\n- Dual-band 802.11ac\r\n- Alexa voice sea', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 200),
(4, 11, 28, 'Video Camera', '3b00f8d568aa93d5a826c5dfc242e6b7.jpg', '2020-03-29 09:14:11', 500000, '- Instantly stream content from Netflix\r\n- 1080p resolution\r\n- Dual-band 802.11ac\r\n- Alexa voice sea', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 200),
(5, 9, 28, 'Rumah', '6065f794ec79821d6c2640097680a7bc.png', '2020-03-29 09:15:54', 300000000, '- Instantly stream content from Netflix\r\n- 1080p resolution\r\n- Dual-band 802.11ac\r\n- Alexa voice sea', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 0),
(6, 11, 41, 'Ketupat', '7b696ef7619cf562eefe0ea6037ca852.png', '2020-03-29 23:20:47', 200000000, 'Tanah Pegunungan', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `ongkir` int(11) NOT NULL COMMENT '1:ya;0:tidak',
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `ongkir`, `create_at`, `update_at`) VALUES
(9, 'Tanah & Bangunan', 0, '2020-03-25 23:52:17', '0000-00-00 00:00:00'),
(10, 'Mobil & Motor', 0, '2020-03-25 23:52:40', '0000-00-00 00:00:00'),
(11, 'Elektronik & Gatget', 1, '2020-03-25 23:55:46', '2020-03-26 23:25:16'),
(12, 'Fashion', 1, '2020-03-26 00:22:18', '2020-03-26 08:42:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `nama_kota` varchar(150) NOT NULL,
  `kode_pos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `id_provinsi`, `type`, `nama_kota`, `kode_pos`) VALUES
(1, 21, 'Kabupaten', 'Aceh Barat', 23681),
(2, 21, 'Kabupaten', 'Aceh Barat Daya', 23764),
(3, 21, 'Kabupaten', 'Aceh Besar', 23951),
(4, 21, 'Kabupaten', 'Aceh Jaya', 23654),
(5, 21, 'Kabupaten', 'Aceh Selatan', 23719),
(6, 21, 'Kabupaten', 'Aceh Singkil', 24785),
(7, 21, 'Kabupaten', 'Aceh Tamiang', 24476),
(8, 21, 'Kabupaten', 'Aceh Tengah', 24511),
(9, 21, 'Kabupaten', 'Aceh Tenggara', 24611),
(10, 21, 'Kabupaten', 'Aceh Timur', 24454),
(11, 21, 'Kabupaten', 'Aceh Utara', 24382),
(12, 32, 'Kabupaten', 'Agam', 26411),
(13, 23, 'Kabupaten', 'Alor', 85811),
(14, 19, 'Kota', 'Ambon', 97222),
(15, 34, 'Kabupaten', 'Asahan', 21214),
(16, 24, 'Kabupaten', 'Asmat', 99777),
(17, 1, 'Kabupaten', 'Badung', 80351),
(18, 13, 'Kabupaten', 'Balangan', 71611),
(19, 15, 'Kota', 'Balikpapan', 76111),
(20, 21, 'Kota', 'Banda Aceh', 23238),
(21, 18, 'Kota', 'Bandar Lampung', 35139),
(22, 9, 'Kabupaten', 'Bandung', 40311),
(23, 9, 'Kota', 'Bandung', 40111),
(24, 9, 'Kabupaten', 'Bandung Barat', 40721),
(25, 29, 'Kabupaten', 'Banggai', 94711),
(26, 29, 'Kabupaten', 'Banggai Kepulauan', 94881),
(27, 2, 'Kabupaten', 'Bangka', 33212),
(28, 2, 'Kabupaten', 'Bangka Barat', 33315),
(29, 2, 'Kabupaten', 'Bangka Selatan', 33719),
(30, 2, 'Kabupaten', 'Bangka Tengah', 33613),
(31, 11, 'Kabupaten', 'Bangkalan', 69118),
(32, 1, 'Kabupaten', 'Bangli', 80619),
(33, 13, 'Kabupaten', 'Banjar', 70619),
(34, 9, 'Kota', 'Banjar', 46311),
(35, 13, 'Kota', 'Banjarbaru', 70712),
(36, 13, 'Kota', 'Banjarmasin', 70117),
(37, 10, 'Kabupaten', 'Banjarnegara', 53419),
(38, 28, 'Kabupaten', 'Bantaeng', 92411),
(39, 5, 'Kabupaten', 'Bantul', 55715),
(40, 33, 'Kabupaten', 'Banyuasin', 30911),
(41, 10, 'Kabupaten', 'Banyumas', 53114),
(42, 11, 'Kabupaten', 'Banyuwangi', 68416),
(43, 13, 'Kabupaten', 'Barito Kuala', 70511),
(44, 14, 'Kabupaten', 'Barito Selatan', 73711),
(45, 14, 'Kabupaten', 'Barito Timur', 73671),
(46, 14, 'Kabupaten', 'Barito Utara', 73881),
(47, 28, 'Kabupaten', 'Barru', 90719),
(48, 17, 'Kota', 'Batam', 29413),
(49, 10, 'Kabupaten', 'Batang', 51211),
(50, 8, 'Kabupaten', 'Batang Hari', 36613),
(51, 11, 'Kota', 'Batu', 65311),
(52, 34, 'Kabupaten', 'Batu Bara', 21655),
(53, 30, 'Kota', 'Bau-Bau', 93719),
(54, 9, 'Kabupaten', 'Bekasi', 17837),
(55, 9, 'Kota', 'Bekasi', 17121),
(56, 2, 'Kabupaten', 'Belitung', 33419),
(57, 2, 'Kabupaten', 'Belitung Timur', 33519),
(58, 23, 'Kabupaten', 'Belu', 85711),
(59, 21, 'Kabupaten', 'Bener Meriah', 24581),
(60, 26, 'Kabupaten', 'Bengkalis', 28719),
(61, 12, 'Kabupaten', 'Bengkayang', 79213),
(62, 4, 'Kota', 'Bengkulu', 38229),
(63, 4, 'Kabupaten', 'Bengkulu Selatan', 38519),
(64, 4, 'Kabupaten', 'Bengkulu Tengah', 38319),
(65, 4, 'Kabupaten', 'Bengkulu Utara', 38619),
(66, 15, 'Kabupaten', 'Berau', 77311),
(67, 24, 'Kabupaten', 'Biak Numfor', 98119),
(68, 22, 'Kabupaten', 'Bima', 84171),
(69, 22, 'Kota', 'Bima', 84139),
(70, 34, 'Kota', 'Binjai', 20712),
(71, 17, 'Kabupaten', 'Bintan', 29135),
(72, 21, 'Kabupaten', 'Bireuen', 24219),
(73, 31, 'Kota', 'Bitung', 95512),
(74, 11, 'Kabupaten', 'Blitar', 66171),
(75, 11, 'Kota', 'Blitar', 66124),
(76, 10, 'Kabupaten', 'Blora', 58219),
(77, 7, 'Kabupaten', 'Boalemo', 96319),
(78, 9, 'Kabupaten', 'Bogor', 16911),
(79, 9, 'Kota', 'Bogor', 16119),
(80, 11, 'Kabupaten', 'Bojonegoro', 62119),
(81, 31, 'Kabupaten', 'Bolaang Mongondow (Bolmong)', 95755),
(82, 31, 'Kabupaten', 'Bolaang Mongondow Selatan', 95774),
(83, 31, 'Kabupaten', 'Bolaang Mongondow Timur', 95783),
(84, 31, 'Kabupaten', 'Bolaang Mongondow Utara', 95765),
(85, 30, 'Kabupaten', 'Bombana', 93771),
(86, 11, 'Kabupaten', 'Bondowoso', 68219),
(87, 28, 'Kabupaten', 'Bone', 92713),
(88, 7, 'Kabupaten', 'Bone Bolango', 96511),
(89, 15, 'Kota', 'Bontang', 75313),
(90, 24, 'Kabupaten', 'Boven Digoel', 99662),
(91, 10, 'Kabupaten', 'Boyolali', 57312),
(92, 10, 'Kabupaten', 'Brebes', 52212),
(93, 32, 'Kota', 'Bukittinggi', 26115),
(94, 1, 'Kabupaten', 'Buleleng', 81111),
(95, 28, 'Kabupaten', 'Bulukumba', 92511),
(96, 16, 'Kabupaten', 'Bulungan (Bulongan)', 77211),
(97, 8, 'Kabupaten', 'Bungo', 37216),
(98, 29, 'Kabupaten', 'Buol', 94564),
(99, 19, 'Kabupaten', 'Buru', 97371),
(100, 19, 'Kabupaten', 'Buru Selatan', 97351),
(101, 30, 'Kabupaten', 'Buton', 93754),
(102, 30, 'Kabupaten', 'Buton Utara', 93745),
(103, 9, 'Kabupaten', 'Ciamis', 46211),
(104, 9, 'Kabupaten', 'Cianjur', 43217),
(105, 10, 'Kabupaten', 'Cilacap', 53211),
(106, 3, 'Kota', 'Cilegon', 42417),
(107, 9, 'Kota', 'Cimahi', 40512),
(108, 9, 'Kabupaten', 'Cirebon', 45611),
(109, 9, 'Kota', 'Cirebon', 45116),
(110, 34, 'Kabupaten', 'Dairi', 22211),
(111, 24, 'Kabupaten', 'Deiyai (Deliyai)', 98784),
(112, 34, 'Kabupaten', 'Deli Serdang', 20511),
(113, 10, 'Kabupaten', 'Demak', 59519),
(114, 1, 'Kota', 'Denpasar', 80227),
(115, 9, 'Kota', 'Depok', 16416),
(116, 32, 'Kabupaten', 'Dharmasraya', 27612),
(117, 24, 'Kabupaten', 'Dogiyai', 98866),
(118, 22, 'Kabupaten', 'Dompu', 84217),
(119, 29, 'Kabupaten', 'Donggala', 94341),
(120, 26, 'Kota', 'Dumai', 28811),
(121, 33, 'Kabupaten', 'Empat Lawang', 31811),
(122, 23, 'Kabupaten', 'Ende', 86351),
(123, 28, 'Kabupaten', 'Enrekang', 91719),
(124, 25, 'Kabupaten', 'Fakfak', 98651),
(125, 23, 'Kabupaten', 'Flores Timur', 86213),
(126, 9, 'Kabupaten', 'Garut', 44126),
(127, 21, 'Kabupaten', 'Gayo Lues', 24653),
(128, 1, 'Kabupaten', 'Gianyar', 80519),
(129, 7, 'Kabupaten', 'Gorontalo', 96218),
(130, 7, 'Kota', 'Gorontalo', 96115),
(131, 7, 'Kabupaten', 'Gorontalo Utara', 96611),
(132, 28, 'Kabupaten', 'Gowa', 92111),
(133, 11, 'Kabupaten', 'Gresik', 61115),
(134, 10, 'Kabupaten', 'Grobogan', 58111),
(135, 5, 'Kabupaten', 'Gunung Kidul', 55812),
(136, 14, 'Kabupaten', 'Gunung Mas', 74511),
(137, 34, 'Kota', 'Gunungsitoli', 22813),
(138, 20, 'Kabupaten', 'Halmahera Barat', 97757),
(139, 20, 'Kabupaten', 'Halmahera Selatan', 97911),
(140, 20, 'Kabupaten', 'Halmahera Tengah', 97853),
(141, 20, 'Kabupaten', 'Halmahera Timur', 97862),
(142, 20, 'Kabupaten', 'Halmahera Utara', 97762),
(143, 13, 'Kabupaten', 'Hulu Sungai Selatan', 71212),
(144, 13, 'Kabupaten', 'Hulu Sungai Tengah', 71313),
(145, 13, 'Kabupaten', 'Hulu Sungai Utara', 71419),
(146, 34, 'Kabupaten', 'Humbang Hasundutan', 22457),
(147, 26, 'Kabupaten', 'Indragiri Hilir', 29212),
(148, 26, 'Kabupaten', 'Indragiri Hulu', 29319),
(149, 9, 'Kabupaten', 'Indramayu', 45214),
(150, 24, 'Kabupaten', 'Intan Jaya', 98771),
(151, 6, 'Kota', 'Jakarta Barat', 11220),
(152, 6, 'Kota', 'Jakarta Pusat', 10540),
(153, 6, 'Kota', 'Jakarta Selatan', 12230),
(154, 6, 'Kota', 'Jakarta Timur', 13330),
(155, 6, 'Kota', 'Jakarta Utara', 14140),
(156, 8, 'Kota', 'Jambi', 36111),
(157, 24, 'Kabupaten', 'Jayapura', 99352),
(158, 24, 'Kota', 'Jayapura', 99114),
(159, 24, 'Kabupaten', 'Jayawijaya', 99511),
(160, 11, 'Kabupaten', 'Jember', 68113),
(161, 1, 'Kabupaten', 'Jembrana', 82251),
(162, 28, 'Kabupaten', 'Jeneponto', 92319),
(163, 10, 'Kabupaten', 'Jepara', 59419),
(164, 11, 'Kabupaten', 'Jombang', 61415),
(165, 25, 'Kabupaten', 'Kaimana', 98671),
(166, 26, 'Kabupaten', 'Kampar', 28411),
(167, 14, 'Kabupaten', 'Kapuas', 73583),
(168, 12, 'Kabupaten', 'Kapuas Hulu', 78719),
(169, 10, 'Kabupaten', 'Karanganyar', 57718),
(170, 1, 'Kabupaten', 'Karangasem', 80819),
(171, 9, 'Kabupaten', 'Karawang', 41311),
(172, 17, 'Kabupaten', 'Karimun', 29611),
(173, 34, 'Kabupaten', 'Karo', 22119),
(174, 14, 'Kabupaten', 'Katingan', 74411),
(175, 4, 'Kabupaten', 'Kaur', 38911),
(176, 12, 'Kabupaten', 'Kayong Utara', 78852),
(177, 10, 'Kabupaten', 'Kebumen', 54319),
(178, 11, 'Kabupaten', 'Kediri', 64184),
(179, 11, 'Kota', 'Kediri', 64125),
(180, 24, 'Kabupaten', 'Keerom', 99461),
(181, 10, 'Kabupaten', 'Kendal', 51314),
(182, 30, 'Kota', 'Kendari', 93126),
(183, 4, 'Kabupaten', 'Kepahiang', 39319),
(184, 17, 'Kabupaten', 'Kepulauan Anambas', 29991),
(185, 19, 'Kabupaten', 'Kepulauan Aru', 97681),
(186, 32, 'Kabupaten', 'Kepulauan Mentawai', 25771),
(187, 26, 'Kabupaten', 'Kepulauan Meranti', 28791),
(188, 31, 'Kabupaten', 'Kepulauan Sangihe', 95819),
(189, 6, 'Kabupaten', 'Kepulauan Seribu', 14550),
(190, 31, 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', 95862),
(191, 20, 'Kabupaten', 'Kepulauan Sula', 97995),
(192, 31, 'Kabupaten', 'Kepulauan Talaud', 95885),
(193, 24, 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', 98211),
(194, 8, 'Kabupaten', 'Kerinci', 37167),
(195, 12, 'Kabupaten', 'Ketapang', 78874),
(196, 10, 'Kabupaten', 'Klaten', 57411),
(197, 1, 'Kabupaten', 'Klungkung', 80719),
(198, 30, 'Kabupaten', 'Kolaka', 93511),
(199, 30, 'Kabupaten', 'Kolaka Utara', 93911),
(200, 30, 'Kabupaten', 'Konawe', 93411),
(201, 30, 'Kabupaten', 'Konawe Selatan', 93811),
(202, 30, 'Kabupaten', 'Konawe Utara', 93311),
(203, 13, 'Kabupaten', 'Kotabaru', 72119),
(204, 31, 'Kota', 'Kotamobagu', 95711),
(205, 14, 'Kabupaten', 'Kotawaringin Barat', 74119),
(206, 14, 'Kabupaten', 'Kotawaringin Timur', 74364),
(207, 26, 'Kabupaten', 'Kuantan Singingi', 29519),
(208, 12, 'Kabupaten', 'Kubu Raya', 78311),
(209, 10, 'Kabupaten', 'Kudus', 59311),
(210, 5, 'Kabupaten', 'Kulon Progo', 55611),
(211, 9, 'Kabupaten', 'Kuningan', 45511),
(212, 23, 'Kabupaten', 'Kupang', 85362),
(213, 23, 'Kota', 'Kupang', 85119),
(214, 15, 'Kabupaten', 'Kutai Barat', 75711),
(215, 15, 'Kabupaten', 'Kutai Kartanegara', 75511),
(216, 15, 'Kabupaten', 'Kutai Timur', 75611),
(217, 34, 'Kabupaten', 'Labuhan Batu', 21412),
(218, 34, 'Kabupaten', 'Labuhan Batu Selatan', 21511),
(219, 34, 'Kabupaten', 'Labuhan Batu Utara', 21711),
(220, 33, 'Kabupaten', 'Lahat', 31419),
(221, 14, 'Kabupaten', 'Lamandau', 74611),
(222, 11, 'Kabupaten', 'Lamongan', 64125),
(223, 18, 'Kabupaten', 'Lampung Barat', 34814),
(224, 18, 'Kabupaten', 'Lampung Selatan', 35511),
(225, 18, 'Kabupaten', 'Lampung Tengah', 34212),
(226, 18, 'Kabupaten', 'Lampung Timur', 34319),
(227, 18, 'Kabupaten', 'Lampung Utara', 34516),
(228, 12, 'Kabupaten', 'Landak', 78319),
(229, 34, 'Kabupaten', 'Langkat', 20811),
(230, 21, 'Kota', 'Langsa', 24412),
(231, 24, 'Kabupaten', 'Lanny Jaya', 99531),
(232, 3, 'Kabupaten', 'Lebak', 42319),
(233, 4, 'Kabupaten', 'Lebong', 39264),
(234, 23, 'Kabupaten', 'Lembata', 86611),
(235, 21, 'Kota', 'Lhokseumawe', 24352),
(236, 32, 'Kabupaten', 'Lima Puluh Koto/Kota', 26671),
(237, 17, 'Kabupaten', 'Lingga', 29811),
(238, 22, 'Kabupaten', 'Lombok Barat', 83311),
(239, 22, 'Kabupaten', 'Lombok Tengah', 83511),
(240, 22, 'Kabupaten', 'Lombok Timur', 83612),
(241, 22, 'Kabupaten', 'Lombok Utara', 83711),
(242, 33, 'Kota', 'Lubuk Linggau', 31614),
(243, 11, 'Kabupaten', 'Lumajang', 67319),
(244, 28, 'Kabupaten', 'Luwu', 91994),
(245, 28, 'Kabupaten', 'Luwu Timur', 92981),
(246, 28, 'Kabupaten', 'Luwu Utara', 92911),
(247, 11, 'Kabupaten', 'Madiun', 63153),
(248, 11, 'Kota', 'Madiun', 63122),
(249, 10, 'Kabupaten', 'Magelang', 56519),
(250, 10, 'Kota', 'Magelang', 56133),
(251, 11, 'Kabupaten', 'Magetan', 63314),
(252, 9, 'Kabupaten', 'Majalengka', 45412),
(253, 27, 'Kabupaten', 'Majene', 91411),
(254, 28, 'Kota', 'Makassar', 90111),
(255, 11, 'Kabupaten', 'Malang', 65163),
(256, 11, 'Kota', 'Malang', 65112),
(257, 16, 'Kabupaten', 'Malinau', 77511),
(258, 19, 'Kabupaten', 'Maluku Barat Daya', 97451),
(259, 19, 'Kabupaten', 'Maluku Tengah', 97513),
(260, 19, 'Kabupaten', 'Maluku Tenggara', 97651),
(261, 19, 'Kabupaten', 'Maluku Tenggara Barat', 97465),
(262, 27, 'Kabupaten', 'Mamasa', 91362),
(263, 24, 'Kabupaten', 'Mamberamo Raya', 99381),
(264, 24, 'Kabupaten', 'Mamberamo Tengah', 99553),
(265, 27, 'Kabupaten', 'Mamuju', 91519),
(266, 27, 'Kabupaten', 'Mamuju Utara', 91571),
(267, 31, 'Kota', 'Manado', 95247),
(268, 34, 'Kabupaten', 'Mandailing Natal', 22916),
(269, 23, 'Kabupaten', 'Manggarai', 86551),
(270, 23, 'Kabupaten', 'Manggarai Barat', 86711),
(271, 23, 'Kabupaten', 'Manggarai Timur', 86811),
(272, 25, 'Kabupaten', 'Manokwari', 98311),
(273, 25, 'Kabupaten', 'Manokwari Selatan', 98355),
(274, 24, 'Kabupaten', 'Mappi', 99853),
(275, 28, 'Kabupaten', 'Maros', 90511),
(276, 22, 'Kota', 'Mataram', 83131),
(277, 25, 'Kabupaten', 'Maybrat', 98051),
(278, 34, 'Kota', 'Medan', 20228),
(279, 12, 'Kabupaten', 'Melawi', 78619),
(280, 8, 'Kabupaten', 'Merangin', 37319),
(281, 24, 'Kabupaten', 'Merauke', 99613),
(282, 18, 'Kabupaten', 'Mesuji', 34911),
(283, 18, 'Kota', 'Metro', 34111),
(284, 24, 'Kabupaten', 'Mimika', 99962),
(285, 31, 'Kabupaten', 'Minahasa', 95614),
(286, 31, 'Kabupaten', 'Minahasa Selatan', 95914),
(287, 31, 'Kabupaten', 'Minahasa Tenggara', 95995),
(288, 31, 'Kabupaten', 'Minahasa Utara', 95316),
(289, 11, 'Kabupaten', 'Mojokerto', 61382),
(290, 11, 'Kota', 'Mojokerto', 61316),
(291, 29, 'Kabupaten', 'Morowali', 94911),
(292, 33, 'Kabupaten', 'Muara Enim', 31315),
(293, 8, 'Kabupaten', 'Muaro Jambi', 36311),
(294, 4, 'Kabupaten', 'Muko Muko', 38715),
(295, 30, 'Kabupaten', 'Muna', 93611),
(296, 14, 'Kabupaten', 'Murung Raya', 73911),
(297, 33, 'Kabupaten', 'Musi Banyuasin', 30719),
(298, 33, 'Kabupaten', 'Musi Rawas', 31661),
(299, 24, 'Kabupaten', 'Nabire', 98816),
(300, 21, 'Kabupaten', 'Nagan Raya', 23674),
(301, 23, 'Kabupaten', 'Nagekeo', 86911),
(302, 17, 'Kabupaten', 'Natuna', 29711),
(303, 24, 'Kabupaten', 'Nduga', 99541),
(304, 23, 'Kabupaten', 'Ngada', 86413),
(305, 11, 'Kabupaten', 'Nganjuk', 64414),
(306, 11, 'Kabupaten', 'Ngawi', 63219),
(307, 34, 'Kabupaten', 'Nias', 22876),
(308, 34, 'Kabupaten', 'Nias Barat', 22895),
(309, 34, 'Kabupaten', 'Nias Selatan', 22865),
(310, 34, 'Kabupaten', 'Nias Utara', 22856),
(311, 16, 'Kabupaten', 'Nunukan', 77421),
(312, 33, 'Kabupaten', 'Ogan Ilir', 30811),
(313, 33, 'Kabupaten', 'Ogan Komering Ilir', 30618),
(314, 33, 'Kabupaten', 'Ogan Komering Ulu', 32112),
(315, 33, 'Kabupaten', 'Ogan Komering Ulu Selatan', 32211),
(316, 33, 'Kabupaten', 'Ogan Komering Ulu Timur', 32312),
(317, 11, 'Kabupaten', 'Pacitan', 63512),
(318, 32, 'Kota', 'Padang', 25112),
(319, 34, 'Kabupaten', 'Padang Lawas', 22763),
(320, 34, 'Kabupaten', 'Padang Lawas Utara', 22753),
(321, 32, 'Kota', 'Padang Panjang', 27122),
(322, 32, 'Kabupaten', 'Padang Pariaman', 25583),
(323, 34, 'Kota', 'Padang Sidempuan', 22727),
(324, 33, 'Kota', 'Pagar Alam', 31512),
(325, 34, 'Kabupaten', 'Pakpak Bharat', 22272),
(326, 14, 'Kota', 'Palangka Raya', 73112),
(327, 33, 'Kota', 'Palembang', 30111),
(328, 28, 'Kota', 'Palopo', 91911),
(329, 29, 'Kota', 'Palu', 94111),
(330, 11, 'Kabupaten', 'Pamekasan', 69319),
(331, 3, 'Kabupaten', 'Pandeglang', 42212),
(332, 9, 'Kabupaten', 'Pangandaran', 46511),
(333, 28, 'Kabupaten', 'Pangkajene Kepulauan', 90611),
(334, 2, 'Kota', 'Pangkal Pinang', 33115),
(335, 24, 'Kabupaten', 'Paniai', 98765),
(336, 28, 'Kota', 'Parepare', 91123),
(337, 32, 'Kota', 'Pariaman', 25511),
(338, 29, 'Kabupaten', 'Parigi Moutong', 94411),
(339, 32, 'Kabupaten', 'Pasaman', 26318),
(340, 32, 'Kabupaten', 'Pasaman Barat', 26511),
(341, 15, 'Kabupaten', 'Paser', 76211),
(342, 11, 'Kabupaten', 'Pasuruan', 67153),
(343, 11, 'Kota', 'Pasuruan', 67118),
(344, 10, 'Kabupaten', 'Pati', 59114),
(345, 32, 'Kota', 'Payakumbuh', 26213),
(346, 25, 'Kabupaten', 'Pegunungan Arfak', 98354),
(347, 24, 'Kabupaten', 'Pegunungan Bintang', 99573),
(348, 10, 'Kabupaten', 'Pekalongan', 51161),
(349, 10, 'Kota', 'Pekalongan', 51122),
(350, 26, 'Kota', 'Pekanbaru', 28112),
(351, 26, 'Kabupaten', 'Pelalawan', 28311),
(352, 10, 'Kabupaten', 'Pemalang', 52319),
(353, 34, 'Kota', 'Pematang Siantar', 21126),
(354, 15, 'Kabupaten', 'Penajam Paser Utara', 76311),
(355, 18, 'Kabupaten', 'Pesawaran', 35312),
(356, 18, 'Kabupaten', 'Pesisir Barat', 35974),
(357, 32, 'Kabupaten', 'Pesisir Selatan', 25611),
(358, 21, 'Kabupaten', 'Pidie', 24116),
(359, 21, 'Kabupaten', 'Pidie Jaya', 24186),
(360, 28, 'Kabupaten', 'Pinrang', 91251),
(361, 7, 'Kabupaten', 'Pohuwato', 96419),
(362, 27, 'Kabupaten', 'Polewali Mandar', 91311),
(363, 11, 'Kabupaten', 'Ponorogo', 63411),
(364, 12, 'Kabupaten', 'Pontianak', 78971),
(365, 12, 'Kota', 'Pontianak', 78112),
(366, 29, 'Kabupaten', 'Poso', 94615),
(367, 33, 'Kota', 'Prabumulih', 31121),
(368, 18, 'Kabupaten', 'Pringsewu', 35719),
(369, 11, 'Kabupaten', 'Probolinggo', 67282),
(370, 11, 'Kota', 'Probolinggo', 67215),
(371, 14, 'Kabupaten', 'Pulang Pisau', 74811),
(372, 20, 'Kabupaten', 'Pulau Morotai', 97771),
(373, 24, 'Kabupaten', 'Puncak', 98981),
(374, 24, 'Kabupaten', 'Puncak Jaya', 98979),
(375, 10, 'Kabupaten', 'Purbalingga', 53312),
(376, 9, 'Kabupaten', 'Purwakarta', 41119),
(377, 10, 'Kabupaten', 'Purworejo', 54111),
(378, 25, 'Kabupaten', 'Raja Ampat', 98489),
(379, 4, 'Kabupaten', 'Rejang Lebong', 39112),
(380, 10, 'Kabupaten', 'Rembang', 59219),
(381, 26, 'Kabupaten', 'Rokan Hilir', 28992),
(382, 26, 'Kabupaten', 'Rokan Hulu', 28511),
(383, 23, 'Kabupaten', 'Rote Ndao', 85982),
(384, 21, 'Kota', 'Sabang', 23512),
(385, 23, 'Kabupaten', 'Sabu Raijua', 85391),
(386, 10, 'Kota', 'Salatiga', 50711),
(387, 15, 'Kota', 'Samarinda', 75133),
(388, 12, 'Kabupaten', 'Sambas', 79453),
(389, 34, 'Kabupaten', 'Samosir', 22392),
(390, 11, 'Kabupaten', 'Sampang', 69219),
(391, 12, 'Kabupaten', 'Sanggau', 78557),
(392, 24, 'Kabupaten', 'Sarmi', 99373),
(393, 8, 'Kabupaten', 'Sarolangun', 37419),
(394, 32, 'Kota', 'Sawah Lunto', 27416),
(395, 12, 'Kabupaten', 'Sekadau', 79583),
(396, 28, 'Kabupaten', 'Selayar (Kepulauan Selayar)', 92812),
(397, 4, 'Kabupaten', 'Seluma', 38811),
(398, 10, 'Kabupaten', 'Semarang', 50511),
(399, 10, 'Kota', 'Semarang', 50135),
(400, 19, 'Kabupaten', 'Seram Bagian Barat', 97561),
(401, 19, 'Kabupaten', 'Seram Bagian Timur', 97581),
(402, 3, 'Kabupaten', 'Serang', 42182),
(403, 3, 'Kota', 'Serang', 42111),
(404, 34, 'Kabupaten', 'Serdang Bedagai', 20915),
(405, 14, 'Kabupaten', 'Seruyan', 74211),
(406, 26, 'Kabupaten', 'Siak', 28623),
(407, 34, 'Kota', 'Sibolga', 22522),
(408, 28, 'Kabupaten', 'Sidenreng Rappang/Rapang', 91613),
(409, 11, 'Kabupaten', 'Sidoarjo', 61219),
(410, 29, 'Kabupaten', 'Sigi', 94364),
(411, 32, 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', 27511),
(412, 23, 'Kabupaten', 'Sikka', 86121),
(413, 34, 'Kabupaten', 'Simalungun', 21162),
(414, 21, 'Kabupaten', 'Simeulue', 23891),
(415, 12, 'Kota', 'Singkawang', 79117),
(416, 28, 'Kabupaten', 'Sinjai', 92615),
(417, 12, 'Kabupaten', 'Sintang', 78619),
(418, 11, 'Kabupaten', 'Situbondo', 68316),
(419, 5, 'Kabupaten', 'Sleman', 55513),
(420, 32, 'Kabupaten', 'Solok', 27365),
(421, 32, 'Kota', 'Solok', 27315),
(422, 32, 'Kabupaten', 'Solok Selatan', 27779),
(423, 28, 'Kabupaten', 'Soppeng', 90812),
(424, 25, 'Kabupaten', 'Sorong', 98431),
(425, 25, 'Kota', 'Sorong', 98411),
(426, 25, 'Kabupaten', 'Sorong Selatan', 98454),
(427, 10, 'Kabupaten', 'Sragen', 57211),
(428, 9, 'Kabupaten', 'Subang', 41215),
(429, 21, 'Kota', 'Subulussalam', 24882),
(430, 9, 'Kabupaten', 'Sukabumi', 43311),
(431, 9, 'Kota', 'Sukabumi', 43114),
(432, 14, 'Kabupaten', 'Sukamara', 74712),
(433, 10, 'Kabupaten', 'Sukoharjo', 57514),
(434, 23, 'Kabupaten', 'Sumba Barat', 87219),
(435, 23, 'Kabupaten', 'Sumba Barat Daya', 87453),
(436, 23, 'Kabupaten', 'Sumba Tengah', 87358),
(437, 23, 'Kabupaten', 'Sumba Timur', 87112),
(438, 22, 'Kabupaten', 'Sumbawa', 84315),
(439, 22, 'Kabupaten', 'Sumbawa Barat', 84419),
(440, 9, 'Kabupaten', 'Sumedang', 45326),
(441, 11, 'Kabupaten', 'Sumenep', 69413),
(442, 8, 'Kota', 'Sungaipenuh', 37113),
(443, 24, 'Kabupaten', 'Supiori', 98164),
(444, 11, 'Kota', 'Surabaya', 60119),
(445, 10, 'Kota', 'Surakarta (Solo)', 57113),
(446, 13, 'Kabupaten', 'Tabalong', 71513),
(447, 1, 'Kabupaten', 'Tabanan', 82119),
(448, 28, 'Kabupaten', 'Takalar', 92212),
(449, 25, 'Kabupaten', 'Tambrauw', 98475),
(450, 16, 'Kabupaten', 'Tana Tidung', 77611),
(451, 28, 'Kabupaten', 'Tana Toraja', 91819),
(452, 13, 'Kabupaten', 'Tanah Bumbu', 72211),
(453, 32, 'Kabupaten', 'Tanah Datar', 27211),
(454, 13, 'Kabupaten', 'Tanah Laut', 70811),
(455, 3, 'Kabupaten', 'Tangerang', 15914),
(456, 3, 'Kota', 'Tangerang', 15111),
(457, 3, 'Kota', 'Tangerang Selatan', 15332),
(458, 18, 'Kabupaten', 'Tanggamus', 35619),
(459, 34, 'Kota', 'Tanjung Balai', 21321),
(460, 8, 'Kabupaten', 'Tanjung Jabung Barat', 36513),
(461, 8, 'Kabupaten', 'Tanjung Jabung Timur', 36719),
(462, 17, 'Kota', 'Tanjung Pinang', 29111),
(463, 34, 'Kabupaten', 'Tapanuli Selatan', 22742),
(464, 34, 'Kabupaten', 'Tapanuli Tengah', 22611),
(465, 34, 'Kabupaten', 'Tapanuli Utara', 22414),
(466, 13, 'Kabupaten', 'Tapin', 71119),
(467, 16, 'Kota', 'Tarakan', 77114),
(468, 9, 'Kabupaten', 'Tasikmalaya', 46411),
(469, 9, 'Kota', 'Tasikmalaya', 46116),
(470, 34, 'Kota', 'Tebing Tinggi', 20632),
(471, 8, 'Kabupaten', 'Tebo', 37519),
(472, 10, 'Kabupaten', 'Tegal', 52419),
(473, 10, 'Kota', 'Tegal', 52114),
(474, 25, 'Kabupaten', 'Teluk Bintuni', 98551),
(475, 25, 'Kabupaten', 'Teluk Wondama', 98591),
(476, 10, 'Kabupaten', 'Temanggung', 56212),
(477, 20, 'Kota', 'Ternate', 97714),
(478, 20, 'Kota', 'Tidore Kepulauan', 97815),
(479, 23, 'Kabupaten', 'Timor Tengah Selatan', 85562),
(480, 23, 'Kabupaten', 'Timor Tengah Utara', 85612),
(481, 34, 'Kabupaten', 'Toba Samosir', 22316),
(482, 29, 'Kabupaten', 'Tojo Una-Una', 94683),
(483, 29, 'Kabupaten', 'Toli-Toli', 94542),
(484, 24, 'Kabupaten', 'Tolikara', 99411),
(485, 31, 'Kota', 'Tomohon', 95416),
(486, 28, 'Kabupaten', 'Toraja Utara', 91831),
(487, 11, 'Kabupaten', 'Trenggalek', 66312),
(488, 19, 'Kota', 'Tual', 97612),
(489, 11, 'Kabupaten', 'Tuban', 62319),
(490, 18, 'Kabupaten', 'Tulang Bawang', 34613),
(491, 18, 'Kabupaten', 'Tulang Bawang Barat', 34419),
(492, 11, 'Kabupaten', 'Tulungagung', 66212),
(493, 28, 'Kabupaten', 'Wajo', 90911),
(494, 30, 'Kabupaten', 'Wakatobi', 93791),
(495, 24, 'Kabupaten', 'Waropen', 98269),
(496, 18, 'Kabupaten', 'Way Kanan', 34711),
(497, 10, 'Kabupaten', 'Wonogiri', 57619),
(498, 10, 'Kabupaten', 'Wonosobo', 56311),
(499, 24, 'Kabupaten', 'Yahukimo', 99041),
(500, 24, 'Kabupaten', 'Yalimo', 99481),
(501, 5, 'Kota', 'Yogyakarta', 55111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lelang`
--

CREATE TABLE `tb_lelang` (
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_dibuka` datetime NOT NULL,
  `tgl_ditutup` datetime NOT NULL,
  `harga_akhir` int(20) NOT NULL DEFAULT 0,
  `id_user` int(11) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `status` enum('draf','coming_soon','dibuka','ditutup') NOT NULL DEFAULT 'draf',
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lelang`
--

INSERT INTO `tb_lelang` (`id_lelang`, `id_barang`, `tgl_dibuka`, `tgl_ditutup`, `harga_akhir`, `id_user`, `id_petugas`, `status`, `create_at`, `update_at`) VALUES
(1, 1, '2020-04-13 13:00:00', '2020-04-14 13:11:36', 0, NULL, 4, 'coming_soon', '2020-03-29 09:06:59', '2020-03-30 13:12:23'),
(2, 2, '2020-04-13 13:00:00', '2020-04-14 13:11:36', 0, NULL, 4, 'coming_soon', '2020-03-29 09:09:38', '2020-03-30 13:12:23'),
(3, 3, '2020-03-30 14:43:19', '2020-04-14 13:11:36', 0, NULL, 4, 'dibuka', '2020-03-29 09:12:00', '2020-03-30 14:43:20'),
(4, 4, '2020-03-30 14:41:38', '2020-04-14 13:11:36', 0, NULL, 4, 'dibuka', '2020-03-29 09:14:11', '2020-03-30 14:41:39'),
(5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 4, 'draf', '2020-03-29 09:15:54', '2020-03-30 14:41:30'),
(6, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 4, 'draf', '2020-03-29 23:20:47', '2020-03-30 14:41:11');

--
-- Trigger `tb_lelang`
--
DELIMITER $$
CREATE TRIGGER `REALTIME_LELANG` AFTER UPDATE ON `tb_lelang` FOR EACH ROW INSERT INTO tb_aktifitas(id_petugas,nama_aktifitas,nama_tabel,create_at) values(0,'UPDATE','tb_lelang',now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` enum('Administrator','Petugas') NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`, `create_at`, `update_at`) VALUES
(1, 'Administrator', '2020-02-14 00:00:00', '0000-00-00 00:00:00'),
(2, 'Petugas', '2020-02-14 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`, `create_at`, `update_at`) VALUES
(94, 'Dimas', 'Dimas', '25d55ad283aa400af464c76d7', '12346', '2020-03-11 18:48:55', '0000-00-00 00:00:00'),
(95, 'Prataman', 'Pratama', 'fdc68ea4cf2763996cf215451', '08237343', '2020-03-11 20:20:59', '2020-03-29 01:50:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_level` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_level`, `create_at`, `update_at`) VALUES
(2, 'Dimas Anton', 'Admin', 'e64b78fc3bc91bcbc7dc232ba', 1, '2020-03-29 08:46:09', '0000-00-00 00:00:00'),
(4, 'dimas', 'dimas', '25d55ad283aa400af464c76d7', 2, '2020-03-29 08:59:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Bali'),
(2, 'Bangka Belitung'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'DI Yogyakarta'),
(6, 'DKI Jakarta'),
(7, 'Gorontalo'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nanggroe Aceh Darussalam (NAD)'),
(22, 'Nusa Tenggara Barat (NTB)'),
(23, 'Nusa Tenggara Timur (NTT)'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `fk3` (`id_lelang`),
  ADD KEY `fk4` (`id_barang`),
  ADD KEY `fk5` (`id_user`);

--
-- Indeks untuk tabel `tb_aktifitas`
--
ALTER TABLE `tb_aktifitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `tb_barang_ibfk_2` (`id_kategori`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indeks untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD PRIMARY KEY (`id_lelang`),
  ADD KEY `fk2` (`id_petugas`),
  ADD KEY `fk6` (`id_user`),
  ADD KEY `fk7` (`id_barang`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_aktifitas`
--
ALTER TABLE `tb_aktifitas`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `history_lelang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `history_lelang_ibfk_2` FOREIGN KEY (`id_lelang`) REFERENCES `tb_lelang` (`id_lelang`),
  ADD CONSTRAINT `history_lelang_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`),
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`);

--
-- Ketidakleluasaan untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD CONSTRAINT `tb_lelang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_lelang_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_lelang_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `open_lelang` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:25:19' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_lelang SET status='dibuka' WHERE tgl_dibuka <= now() and tgl_ditutup > now() and status !='dibuka' and tgl_dibuka != '0000-00-00 00:00:00' and tgl_ditutup != '0000-00-00 00:00:00'$$

CREATE DEFINER=`root`@`localhost` EVENT `tutup_lelang` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_lelang SET status='ditutup' WHERE tgl_ditutup <= now() and status !='ditutup' and tgl_dibuka != '0000-00-00 00:00:00' and tgl_ditutup != '0000-00-00 00:00:00'$$

CREATE DEFINER=`root`@`localhost` EVENT `draf` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_lelang SET status='draf' WHERE tgl_dibuka = '0000-00-00 00:00:00' and tgl_ditutup = '0000-00-00 00:00:00' and status !='draf'$$

CREATE DEFINER=`root`@`localhost` EVENT `coming_soon` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-13 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_lelang SET status='coming_soon' WHERE tgl_dibuka >= now() and tgl_ditutup > now() and status !='coming_soon' and tgl_dibuka != '0000-00-00 00:00:00' and tgl_ditutup != '0000-00-00 00:00:00'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
