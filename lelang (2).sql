-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2020 pada 18.34
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
  `id_petugas` int(11) NOT NULL,
  `nama_aktifitas` enum('CREATE','UPDATE','DELETE') NOT NULL,
  `nama_tabel` varchar(25) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_aktifitas`
--

INSERT INTO `tb_aktifitas` (`id_aktivitas`, `id_petugas`, `nama_aktifitas`, `nama_tabel`, `create_at`) VALUES
(1, 0, 'UPDATE', 'tb_masyarakat', '2020-03-10 15:35:45'),
(2, 1, 'UPDATE', 'tb_masyarakat', '2020-03-10 15:35:45'),
(3, 0, 'DELETE', 'tb_barang', '2020-03-10 15:52:04'),
(4, 0, 'DELETE', 'tb_barang', '2020-03-10 15:54:30'),
(5, 0, 'CREATE', 'tb_barang', '2020-03-10 16:02:49'),
(6, 1, 'CREATE', 'tb_barang', '2020-03-10 16:02:50'),
(7, 0, 'UPDATE', 'tb_barang', '2020-03-10 16:03:01'),
(8, 0, 'DELETE', 'tb_barang', '2020-03-10 16:03:28'),
(9, 0, 'UPDATE', 'tb_barang', '2020-03-10 19:31:07'),
(10, 0, 'UPDATE', 'tb_barang', '2020-03-10 19:31:07'),
(11, 0, 'CREATE', 'tb_barang', '2020-03-10 19:34:58'),
(12, 1, 'CREATE', 'tb_barang', '2020-03-10 19:34:59'),
(13, 0, 'CREATE', 'tb_petugas', '2020-03-10 20:32:27'),
(14, 1, 'CREATE', 'tb_petugas', '2020-03-10 20:32:28'),
(15, 0, 'DELETE', 'tb_barang', '2020-03-10 20:36:52'),
(16, 0, 'DELETE', 'tb_barang', '2020-03-10 20:37:34'),
(17, 0, 'CREATE', 'tb_barang', '2020-03-10 21:25:35'),
(18, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:25:37'),
(19, 1, 'CREATE', 'tb_barang', '2020-03-10 21:25:38'),
(20, 0, 'CREATE', 'tb_barang', '2020-03-10 21:32:35'),
(21, 1, 'CREATE', 'tb_barang', '2020-03-10 21:32:35'),
(22, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:32:36'),
(23, 0, 'CREATE', 'tb_barang', '2020-03-10 21:37:11'),
(24, 1, 'CREATE', 'tb_barang', '2020-03-10 21:37:12'),
(25, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:37:12'),
(26, 0, 'CREATE', 'tb_barang', '2020-03-10 21:41:44'),
(27, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:41:44'),
(28, 1, 'CREATE', 'tb_barang', '2020-03-10 21:41:44'),
(29, 0, 'CREATE', 'tb_barang', '2020-03-10 21:44:20'),
(30, 1, 'CREATE', 'tb_barang', '2020-03-10 21:44:21'),
(31, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:44:21'),
(32, 0, 'CREATE', 'tb_barang', '2020-03-10 21:49:47'),
(33, 0, 'UPDATE', 'tb_barang', '2020-03-10 21:49:48'),
(34, 1, 'CREATE', 'tb_barang', '2020-03-10 21:49:48'),
(35, 0, 'CREATE', 'tb_barang', '2020-03-10 23:12:50'),
(36, 0, 'UPDATE', 'tb_barang', '2020-03-10 23:12:52'),
(37, 1, 'CREATE', 'tb_barang', '2020-03-10 23:12:52'),
(38, 0, 'CREATE', 'tb_barang', '2020-03-10 23:28:58'),
(39, 1, 'CREATE', 'tb_barang', '2020-03-10 23:28:58'),
(40, 0, 'UPDATE', 'tb_barang', '2020-03-10 23:28:59'),
(41, 0, 'UPDATE', 'tb_barang', '2020-03-11 13:29:13'),
(42, 0, 'CREATE', 'tb_barang', '2020-03-11 13:39:42'),
(43, 1, 'CREATE', 'tb_barang', '2020-03-11 13:39:42'),
(44, 0, 'CREATE', 'tb_masyarakat', '2020-03-11 18:48:56'),
(45, 1, 'CREATE', 'tb_masyarakat', '2020-03-11 18:48:56'),
(46, 0, 'DELETE', 'tb_masyarakat', '2020-03-11 20:18:48'),
(47, 1, 'DELETE', 'tb_masyarakat', '2020-03-11 20:18:50'),
(48, 0, 'CREATE', 'tb_masyarakat', '2020-03-11 20:20:59'),
(49, 1, 'CREATE', 'tb_masyarakat', '2020-03-11 20:21:00'),
(50, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(51, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(52, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(53, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(54, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(55, 0, 'UPDATE', 'tb_barang', '2020-03-11 21:00:00'),
(56, 0, 'DELETE', 'tb_barang', '2020-03-11 22:21:05'),
(57, 0, 'UPDATE', 'tb_barang', '2020-03-11 23:00:00'),
(58, 0, 'UPDATE', 'tb_barang', '2020-03-11 23:00:00'),
(59, 0, 'CREATE', 'tb_barang', '2020-03-11 23:10:49'),
(60, 1, 'CREATE', 'tb_barang', '2020-03-11 23:10:49'),
(61, 0, 'CREATE', 'tb_barang', '2020-03-11 23:10:50'),
(62, 1, 'CREATE', 'tb_barang', '2020-03-11 23:10:51'),
(63, 0, 'CREATE', 'tb_barang', '2020-03-11 23:51:19'),
(64, 1, 'CREATE', 'tb_barang', '2020-03-11 23:51:20'),
(65, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:47'),
(66, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:52'),
(67, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:52'),
(68, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:53'),
(69, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(70, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(71, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(72, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(73, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(74, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:55'),
(75, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(76, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(77, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(78, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(79, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(80, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(81, 0, 'DELETE', 'tb_barang', '2020-03-12 00:40:56'),
(82, 0, 'DELETE', 'tb_barang', '2020-03-12 00:42:25'),
(83, 0, 'CREATE', 'tb_barang', '2020-03-12 00:44:13'),
(84, 1, 'CREATE', 'tb_barang', '2020-03-12 00:44:13'),
(85, 0, 'CREATE', 'tb_barang', '2020-03-12 00:44:58'),
(86, 0, 'UPDATE', 'tb_barang', '2020-03-12 00:44:59'),
(87, 1, 'CREATE', 'tb_barang', '2020-03-12 00:44:59'),
(88, 0, 'CREATE', 'tb_barang', '2020-03-12 00:54:54'),
(89, 1, 'CREATE', 'tb_barang', '2020-03-12 00:54:56'),
(90, 0, 'UPDATE', 'tb_barang', '2020-03-12 00:56:00'),
(91, 0, 'CREATE', 'tb_barang', '2020-03-12 00:57:43'),
(92, 1, 'CREATE', 'tb_barang', '2020-03-12 00:57:45'),
(93, 0, 'UPDATE', 'tb_barang', '2020-03-12 00:57:45'),
(94, 0, 'UPDATE', 'tb_barang', '2020-03-12 00:59:00'),
(95, 0, 'CREATE', 'tb_barang', '2020-03-12 11:04:15'),
(96, 0, 'UPDATE', 'tb_barang', '2020-03-12 11:04:16'),
(97, 1, 'CREATE', 'tb_barang', '2020-03-12 11:04:17'),
(98, 0, 'CREATE', 'tb_barang', '2020-03-12 23:35:37'),
(99, 1, 'CREATE', 'tb_barang', '2020-03-12 23:35:37'),
(100, 0, 'UPDATE', 'tb_barang', '2020-03-12 23:35:38'),
(101, 0, 'CREATE', 'tb_barang', '2020-03-12 23:36:38'),
(102, 1, 'CREATE', 'tb_barang', '2020-03-12 23:36:39'),
(103, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:00:00'),
(104, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:00:00'),
(105, 1, 'DELETE', 'tb_barang', '2020-03-13 00:14:28'),
(106, 0, 'DELETE', 'tb_barang', '2020-03-13 00:14:38'),
(107, 1, 'DELETE', 'tb_barang', '2020-03-13 00:14:38'),
(108, 0, 'DELETE', 'tb_barang', '2020-03-13 00:15:10'),
(109, 1, 'DELETE', 'tb_barang', '2020-03-13 00:15:10'),
(110, 0, 'DELETE', 'tb_barang', '2020-03-13 00:15:18'),
(111, 1, 'DELETE', 'tb_barang', '2020-03-13 00:15:20'),
(112, 0, 'DELETE', 'tb_barang', '2020-03-13 00:16:39'),
(113, 1, 'DELETE', 'tb_barang', '2020-03-13 00:16:39'),
(114, 0, 'DELETE', 'tb_barang', '2020-03-13 00:18:12'),
(115, 1, 'DELETE', 'tb_barang', '2020-03-13 00:18:12'),
(116, 0, 'CREATE', 'tb_barang', '2020-03-13 00:23:58'),
(117, 1, 'CREATE', 'tb_barang', '2020-03-13 00:23:58'),
(118, 0, 'CREATE', 'tb_barang', '2020-03-13 00:25:35'),
(119, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:25:36'),
(120, 1, 'CREATE', 'tb_barang', '2020-03-13 00:25:38'),
(121, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:27:00'),
(122, 0, 'CREATE', 'tb_barang', '2020-03-13 00:28:39'),
(123, 1, 'CREATE', 'tb_barang', '2020-03-13 00:28:39'),
(124, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:28:39'),
(125, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:29:00'),
(126, 0, 'CREATE', 'tb_barang', '2020-03-13 00:30:12'),
(127, 1, 'CREATE', 'tb_barang', '2020-03-13 00:30:13'),
(128, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:30:13'),
(129, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:31:00'),
(130, 0, 'CREATE', 'tb_barang', '2020-03-13 00:32:27'),
(131, 1, 'CREATE', 'tb_barang', '2020-03-13 00:32:27'),
(132, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:32:28'),
(133, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:33:00'),
(134, 0, 'CREATE', 'tb_barang', '2020-03-13 00:33:54'),
(135, 1, 'CREATE', 'tb_barang', '2020-03-13 00:33:54'),
(136, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:33:55'),
(137, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:34:00'),
(138, 0, 'CREATE', 'tb_barang', '2020-03-13 00:37:04'),
(139, 1, 'CREATE', 'tb_barang', '2020-03-13 00:37:04'),
(140, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:37:06'),
(141, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:38:00'),
(142, 0, 'CREATE', 'tb_barang', '2020-03-13 00:39:45'),
(143, 1, 'CREATE', 'tb_barang', '2020-03-13 00:39:45'),
(144, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:39:46'),
(145, 0, 'UPDATE', 'tb_barang', '2020-03-13 00:40:00'),
(146, 0, 'DELETE', 'tb_barang', '2020-03-13 00:41:13'),
(147, 1, 'DELETE', 'tb_barang', '2020-03-13 00:41:13'),
(148, 0, 'DELETE', 'tb_barang', '2020-03-13 00:41:18'),
(149, 1, 'DELETE', 'tb_barang', '2020-03-13 00:41:19'),
(150, 0, 'DELETE', 'tb_barang', '2020-03-13 00:41:27'),
(151, 1, 'DELETE', 'tb_barang', '2020-03-13 00:41:27'),
(152, 0, 'DELETE', 'tb_barang', '2020-03-13 08:26:44'),
(153, 1, 'DELETE', 'tb_barang', '2020-03-13 08:26:44'),
(154, 0, 'DELETE', 'tb_barang', '2020-03-13 08:26:49'),
(155, 1, 'DELETE', 'tb_barang', '2020-03-13 08:26:49'),
(156, 0, 'DELETE', 'tb_barang', '2020-03-13 08:26:54'),
(157, 1, 'DELETE', 'tb_barang', '2020-03-13 08:26:55'),
(158, 0, 'DELETE', 'tb_barang', '2020-03-13 08:26:58'),
(159, 1, 'DELETE', 'tb_barang', '2020-03-13 08:26:58'),
(160, 0, 'DELETE', 'tb_barang', '2020-03-13 08:27:02'),
(161, 1, 'DELETE', 'tb_barang', '2020-03-13 08:27:02'),
(162, 0, 'DELETE', 'tb_barang', '2020-03-13 08:27:06'),
(163, 1, 'DELETE', 'tb_barang', '2020-03-13 08:27:06'),
(164, 0, 'DELETE', 'tb_barang', '2020-03-13 08:27:11'),
(165, 1, 'DELETE', 'tb_barang', '2020-03-13 08:27:11'),
(166, 0, 'CREATE', 'tb_barang', '2020-03-13 08:30:50'),
(167, 1, 'CREATE', 'tb_barang', '2020-03-13 08:30:51'),
(168, 0, 'UPDATE', 'tb_barang', '2020-03-13 08:30:51'),
(169, 0, 'CREATE', 'tb_barang', '2020-03-13 08:31:26'),
(170, 1, 'CREATE', 'tb_barang', '2020-03-13 08:31:26'),
(171, 0, 'UPDATE', 'tb_barang', '2020-03-13 08:31:28'),
(172, 0, 'DELETE', 'tb_barang', '2020-03-13 10:55:36'),
(173, 1, 'DELETE', 'tb_barang', '2020-03-13 10:55:37'),
(174, 0, 'CREATE', 'tb_barang', '2020-03-13 15:38:16'),
(175, 1, 'CREATE', 'tb_barang', '2020-03-13 15:38:16'),
(176, 0, 'UPDATE', 'tb_barang', '2020-03-13 15:38:17'),
(177, 0, 'UPDATE', 'tb_barang', '2020-03-13 15:39:00'),
(178, 0, 'CREATE', 'tb_barang', '2020-03-13 15:40:24'),
(179, 1, 'CREATE', 'tb_barang', '2020-03-13 15:40:25'),
(180, 0, 'CREATE', 'tb_barang', '2020-03-13 15:47:17'),
(181, 1, 'CREATE', 'tb_barang', '2020-03-13 15:47:17'),
(182, 0, 'UPDATE', 'tb_barang', '2020-03-13 15:47:17'),
(183, 0, 'CREATE', 'tb_barang', '2020-03-13 17:02:07'),
(184, 1, 'CREATE', 'tb_barang', '2020-03-13 17:02:08'),
(185, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:02:09'),
(186, 0, 'CREATE', 'tb_barang', '2020-03-13 17:06:43'),
(187, 1, 'CREATE', 'tb_barang', '2020-03-13 17:06:43'),
(188, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:06:44'),
(189, 0, 'DELETE', 'tb_barang', '2020-03-13 17:09:30'),
(190, 1, 'DELETE', 'tb_barang', '2020-03-13 17:09:31'),
(191, 0, 'DELETE', 'tb_barang', '2020-03-13 17:09:41'),
(192, 1, 'DELETE', 'tb_barang', '2020-03-13 17:09:41'),
(193, 0, 'DELETE', 'tb_barang', '2020-03-13 17:09:52'),
(194, 1, 'DELETE', 'tb_barang', '2020-03-13 17:09:53'),
(195, 0, 'CREATE', 'tb_barang', '2020-03-13 17:10:22'),
(196, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:10:22'),
(197, 1, 'CREATE', 'tb_barang', '2020-03-13 17:10:22'),
(198, 0, 'CREATE', 'tb_barang', '2020-03-13 17:12:36'),
(199, 1, 'CREATE', 'tb_barang', '2020-03-13 17:12:37'),
(200, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:12:37'),
(201, 0, 'DELETE', 'tb_barang', '2020-03-13 17:13:32'),
(202, 1, 'DELETE', 'tb_barang', '2020-03-13 17:13:33'),
(203, 0, 'DELETE', 'tb_barang', '2020-03-13 17:18:21'),
(204, 1, 'DELETE', 'tb_barang', '2020-03-13 17:18:21'),
(205, 0, 'CREATE', 'tb_barang', '2020-03-13 17:34:11'),
(206, 1, 'CREATE', 'tb_barang', '2020-03-13 17:34:11'),
(207, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:34:12'),
(208, 0, 'DELETE', 'tb_barang', '2020-03-13 17:39:25'),
(209, 1, 'DELETE', 'tb_barang', '2020-03-13 17:39:25'),
(210, 0, 'CREATE', 'tb_barang', '2020-03-13 17:39:50'),
(211, 1, 'CREATE', 'tb_barang', '2020-03-13 17:39:51'),
(212, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:39:51'),
(213, 0, 'DELETE', 'tb_barang', '2020-03-13 17:43:40'),
(214, 1, 'DELETE', 'tb_barang', '2020-03-13 17:43:40'),
(215, 0, 'CREATE', 'tb_barang', '2020-03-13 17:44:35'),
(216, 1, 'CREATE', 'tb_barang', '2020-03-13 17:44:35'),
(217, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:44:36'),
(218, 0, 'DELETE', 'tb_barang', '2020-03-13 17:44:40'),
(219, 1, 'DELETE', 'tb_barang', '2020-03-13 17:44:41'),
(220, 0, 'CREATE', 'tb_barang', '2020-03-13 17:45:00'),
(221, 1, 'CREATE', 'tb_barang', '2020-03-13 17:45:00'),
(222, 0, 'UPDATE', 'tb_barang', '2020-03-13 17:45:01'),
(223, 0, 'DELETE', 'tb_barang', '2020-03-13 17:45:26'),
(224, 1, 'DELETE', 'tb_barang', '2020-03-13 17:45:26'),
(225, 0, 'CREATE', 'tb_barang', '2020-03-13 20:24:40'),
(226, 1, 'CREATE', 'tb_barang', '2020-03-13 20:24:40'),
(227, 0, 'UPDATE', 'tb_barang', '2020-03-13 20:24:41'),
(228, 0, 'DELETE', 'tb_barang', '2020-03-13 20:24:52'),
(229, 1, 'DELETE', 'tb_barang', '2020-03-13 20:24:52'),
(230, 0, 'CREATE', 'tb_barang', '2020-03-13 22:21:22'),
(231, 1, 'CREATE', 'tb_barang', '2020-03-13 22:21:22'),
(232, 0, 'UPDATE', 'tb_barang', '2020-03-13 22:21:23'),
(233, 0, 'DELETE', 'tb_barang', '2020-03-13 23:37:13'),
(234, 1, 'DELETE', 'tb_barang', '2020-03-13 23:37:13'),
(235, 0, 'CREATE', 'tb_barang', '2020-03-14 09:11:09'),
(236, 1, 'CREATE', 'tb_barang', '2020-03-14 09:11:09'),
(237, 0, 'UPDATE', 'tb_barang', '2020-03-14 09:12:00'),
(238, 0, 'CREATE', 'tb_barang', '2020-03-14 14:56:49'),
(239, 0, 'UPDATE', 'tb_barang', '2020-03-14 14:57:10'),
(240, 0, 'UPDATE', 'tb_barang', '2020-03-14 14:57:52'),
(241, 0, 'UPDATE', 'tb_barang', '2020-03-14 14:58:07'),
(242, 0, 'CREATE', 'tb_petugas', '2020-03-14 20:47:34'),
(243, 1, 'CREATE', 'tb_petugas', '2020-03-14 20:47:34'),
(244, 0, 'DELETE', 'tb_petugas', '2020-03-14 20:47:51'),
(245, 1, 'DELETE', 'tb_petugas', '2020-03-14 20:47:51'),
(246, 0, 'CREATE', 'tb_masyarakat', '2020-03-22 11:22:53'),
(247, 1, 'CREATE', 'tb_masyarakat', '2020-03-22 11:22:54'),
(248, 0, 'UPDATE', 'tb_masyarakat', '2020-03-22 11:24:10'),
(249, 1, 'UPDATE', 'tb_masyarakat', '2020-03-22 11:24:10'),
(250, 0, 'CREATE', 'tb_petugas', '2020-03-22 13:49:29'),
(251, 1, 'CREATE', 'tb_petugas', '2020-03-22 13:49:30'),
(252, 0, 'CREATE', 'tb_barang', '2020-03-22 20:15:36'),
(253, 0, 'DELETE', 'tb_barang', '2020-03-22 20:18:16'),
(254, 0, 'DELETE', 'tb_barang', '2020-03-22 20:18:22'),
(255, 0, 'CREATE', 'tb_barang', '2020-03-22 20:21:40'),
(256, 0, 'CREATE', 'tb_barang', '2020-03-22 20:24:30'),
(257, 0, 'CREATE', 'tb_barang', '2020-03-22 20:36:23'),
(258, 1, 'CREATE', 'tb_barang', '2020-03-22 20:36:23'),
(259, 0, 'CREATE', 'tb_barang', '2020-03-22 20:46:23'),
(260, 1, 'CREATE', 'tb_barang', '2020-03-22 20:46:23'),
(261, 0, 'UPDATE', 'tb_petugas', '2020-03-22 20:48:06'),
(262, 1, 'UPDATE', 'tb_petugas', '2020-03-22 20:48:06'),
(263, 0, 'CREATE', 'tb_barang', '2020-03-22 20:49:19'),
(264, 16, 'CREATE', 'tb_barang', '2020-03-22 20:49:19'),
(265, 0, 'DELETE', 'tb_barang', '2020-03-25 12:09:23'),
(266, 0, 'DELETE', 'tb_barang', '2020-03-25 12:09:23'),
(267, 0, 'CREATE', 'tb_barang', '2020-03-25 12:10:05'),
(268, 1, 'CREATE', 'tb_barang', '2020-03-25 12:10:05'),
(269, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:02:57'),
(270, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:02:58'),
(271, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:04:00'),
(272, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:05:07'),
(273, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:05:08'),
(274, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:06:24'),
(275, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:15:38'),
(276, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:15:39'),
(277, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:16:25'),
(278, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:17:18'),
(279, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:17:18'),
(280, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:18:24'),
(281, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:24:51'),
(282, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:24:51'),
(283, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:26:24'),
(284, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:26:24'),
(285, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:26:25'),
(286, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:27:48'),
(287, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:27:49'),
(288, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:28:00'),
(289, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:29:09'),
(290, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:29:09'),
(291, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:30:00'),
(292, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:30:00'),
(293, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:30:01'),
(294, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:31:27'),
(295, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:31:28'),
(296, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:32:00'),
(297, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:33:50'),
(298, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:34:00'),
(299, 0, 'DELETE', 'tb_lelang', '2020-03-25 14:39:31'),
(300, 0, 'DELETE', 'tb_barang', '2020-03-25 14:39:31'),
(301, 1, 'DELETE', 'tb_barang', '2020-03-25 14:39:31'),
(302, 0, 'DELETE', 'tb_lelang', '2020-03-25 14:39:50'),
(303, 0, 'DELETE', 'tb_barang', '2020-03-25 14:39:50'),
(304, 1, 'DELETE', 'tb_barang', '2020-03-25 14:39:50'),
(305, 0, 'DELETE', 'tb_lelang', '2020-03-25 14:45:07'),
(306, 0, 'DELETE', 'tb_barang', '2020-03-25 14:45:07'),
(307, 1, 'DELETE', 'tb_barang', '2020-03-25 14:45:07'),
(308, 0, 'DELETE', 'tb_lelang', '2020-03-25 14:45:12'),
(309, 0, 'DELETE', 'tb_barang', '2020-03-25 14:45:12'),
(310, 1, 'DELETE', 'tb_barang', '2020-03-25 14:45:12'),
(311, 0, 'CREATE', 'tb_barang', '2020-03-25 14:49:43'),
(312, 0, 'CREATE', 'tb_lelang', '2020-03-25 14:49:43'),
(313, 16, 'CREATE', 'tb_barang', '2020-03-25 14:49:43'),
(314, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:49:44'),
(315, 0, 'CREATE', 'tb_barang', '2020-03-25 14:58:11'),
(316, 0, 'CREATE', 'tb_lelang', '2020-03-25 14:58:11'),
(317, 16, 'CREATE', 'tb_barang', '2020-03-25 14:58:11'),
(318, 0, 'UPDATE', 'tb_lelang', '2020-03-25 14:58:12'),
(319, 0, 'CREATE', 'tb_barang', '2020-03-25 15:01:46'),
(320, 0, 'CREATE', 'tb_lelang', '2020-03-25 15:01:46'),
(321, 16, 'CREATE', 'tb_barang', '2020-03-25 15:01:46'),
(322, 0, 'UPDATE', 'tb_lelang', '2020-03-25 15:01:47'),
(323, 0, 'CREATE', 'tb_barang', '2020-03-25 15:04:04'),
(324, 0, 'CREATE', 'tb_lelang', '2020-03-25 15:04:04'),
(325, 1, 'CREATE', 'tb_barang', '2020-03-25 15:04:04'),
(326, 0, 'DELETE', 'tb_lelang', '2020-03-25 19:05:19'),
(327, 0, 'DELETE', 'tb_lelang', '2020-03-25 19:05:19'),
(328, 0, 'DELETE', 'tb_lelang', '2020-03-25 19:05:19'),
(329, 0, 'DELETE', 'tb_lelang', '2020-03-25 19:05:19'),
(330, 0, 'DELETE', 'tb_barang', '2020-03-25 19:05:37'),
(331, 0, 'DELETE', 'tb_barang', '2020-03-25 19:05:37'),
(332, 0, 'DELETE', 'tb_barang', '2020-03-25 19:05:37'),
(333, 0, 'DELETE', 'tb_barang', '2020-03-25 19:05:37'),
(334, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:19:40'),
(335, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:20:09'),
(336, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:24:55'),
(337, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:25:24'),
(338, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:26:09'),
(339, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:26:15'),
(340, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:36:27'),
(341, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:36:35'),
(342, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:44:46'),
(343, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:46:58'),
(344, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:49:37'),
(345, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:49:45'),
(346, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:50:15'),
(347, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:50:21'),
(348, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:50:28'),
(349, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:50:33'),
(350, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:50:39'),
(351, 1, 'DELETE', 'tb_kategori', '2020-03-25 23:52:01'),
(352, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:52:17'),
(353, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:52:40'),
(354, 1, 'CREATE', 'tb_kategori', '2020-03-25 23:55:47'),
(355, 1, 'CREATE', 'tb_kategori', '2020-03-26 00:22:18'),
(356, 1, 'CREATE', 'tb_kategori', '2020-03-26 00:22:49'),
(357, 1, 'DELETE', 'tb_kategori', '2020-03-26 00:22:59'),
(358, 1, 'UPDATE', 'tb_kategori', '2020-03-26 08:36:34'),
(359, 1, 'UPDATE', 'tb_kategori', '2020-03-26 08:36:53'),
(360, 0, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:07'),
(361, 0, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:18'),
(362, 1, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:18'),
(363, 0, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:45'),
(364, 1, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:45'),
(365, 0, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:52'),
(366, 1, 'UPDATE', 'tb_kategori', '2020-03-26 08:42:52'),
(367, 0, 'UPDATE', 'tb_kategori', '2020-03-26 23:25:16'),
(368, 1, 'UPDATE', 'tb_kategori', '2020-03-26 23:25:17'),
(369, 0, 'CREATE', 'tb_barang', '2020-03-27 00:18:34'),
(370, 0, 'CREATE', 'tb_lelang', '2020-03-27 00:18:34'),
(371, 16, 'CREATE', 'tb_barang', '2020-03-27 00:18:34'),
(372, 0, 'UPDATE', 'tb_lelang', '2020-03-27 00:18:35'),
(373, 0, 'CREATE', 'tb_barang', '2020-03-27 00:21:32'),
(374, 0, 'CREATE', 'tb_lelang', '2020-03-27 00:21:33'),
(375, 16, 'CREATE', 'tb_barang', '2020-03-27 00:21:35'),
(376, 0, 'UPDATE', 'tb_lelang', '2020-03-27 00:21:34'),
(377, 0, 'CREATE', 'tb_barang', '2020-03-27 00:25:19'),
(378, 0, 'CREATE', 'tb_lelang', '2020-03-27 00:25:21'),
(379, 1, 'CREATE', 'tb_barang', '2020-03-27 00:25:21'),
(380, 0, 'CREATE', 'tb_barang', '2020-03-27 00:28:08'),
(381, 0, 'CREATE', 'tb_lelang', '2020-03-27 00:28:08'),
(382, 1, 'CREATE', 'tb_barang', '2020-03-27 00:28:08');

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
(1, 11, 487, 'Tv', '243a756391ebf6fb98c3a546fd347290.jpg', '2020-03-27 00:18:34', 1000000, 'Tv', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 3000),
(2, 9, 28, 'Rumah', 'ddbc01050aefa7d741b3fcaf3b6061cb.jpg', '2020-03-27 00:21:32', 200000, 'Rumah', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 0),
(3, 11, 56, 'Mouse', 'c866e23f7b0dc01b42f4c641e2fbc63b.jpg', '2020-03-27 00:25:19', 20000, 'Mouse', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 5000),
(4, 10, 56, 'Mobil', '2500af4f7919ea70fe20c82cbfc920fb.jpg', '2020-03-27 00:28:08', 20000, 'Mouse', '0000-00-00 00:00:00', 'Dusun krajan rt 007 rw 004 desa sukorejo kecamatan tugu kabupaten trenggalek jawa timur', 0);

--
-- Trigger `tb_barang`
--
DELIMITER $$
CREATE TRIGGER `tb_barang_delete` AFTER DELETE ON `tb_barang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'DELETE','tb_barang',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_barang_insert` AFTER INSERT ON `tb_barang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'CREATE','tb_barang',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_barang_update` AFTER UPDATE ON `tb_barang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'UPDATE','tb_barang',now())
$$
DELIMITER ;

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

--
-- Trigger `tb_kategori`
--
DELIMITER $$
CREATE TRIGGER `tb_kategori_delete` AFTER DELETE ON `tb_kategori` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'DELETE','tb_kategori',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_kategori_insert` AFTER INSERT ON `tb_kategori` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'CREATE','tb_kategori',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_kategori_update` AFTER UPDATE ON `tb_kategori` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'UPDATE','tb_kategori',now())
$$
DELIMITER ;

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
(9, 1, '2020-03-27 00:00:00', '2020-03-28 00:00:00', 0, NULL, 16, 'dibuka', '2020-03-27 00:18:34', '2020-03-27 00:18:35'),
(10, 2, '2020-03-27 00:00:00', '2020-03-28 00:00:00', 0, NULL, 16, 'dibuka', '2020-03-27 00:21:33', '2020-03-27 00:21:34'),
(11, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 1, 'draf', '2020-03-27 00:25:21', '0000-00-00 00:00:00'),
(12, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 1, 'draf', '2020-03-27 00:28:08', '0000-00-00 00:00:00');

--
-- Trigger `tb_lelang`
--
DELIMITER $$
CREATE TRIGGER `tb_lelang_delete` AFTER DELETE ON `tb_lelang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'DELETE','tb_lelang',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_lelang_insert` AFTER INSERT ON `tb_lelang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'CREATE','tb_lelang',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_lelang_update` AFTER UPDATE ON `tb_lelang` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'UPDATE','tb_lelang',now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` enum('Sistem','Administrator','Petugas') NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`, `create_at`, `update_at`) VALUES
(0, 'Sistem', '2020-03-10 00:00:00', '0000-00-00 00:00:00'),
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
(95, 'Pratama', 'Pratama', '25d55ad283aa400af464c76d7', '08237343', '2020-03-11 20:20:59', '0000-00-00 00:00:00'),
(96, 'Alvi ', 'alviadriana', 'da32a0af1d7d6e99234b97d69', '081234567890', '2020-03-22 11:22:53', '2020-03-22 11:24:09');

--
-- Trigger `tb_masyarakat`
--
DELIMITER $$
CREATE TRIGGER `tb_masyarakat_delete` AFTER DELETE ON `tb_masyarakat` FOR EACH ROW INSERT INTO tb_aktifitas VALUES('',0,'DELETE','tb_masyarakat',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_masyarakat_insert` AFTER INSERT ON `tb_masyarakat` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'CREATE','tb_masyarakat',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_masyarakat_update` AFTER UPDATE ON `tb_masyarakat` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'UPDATE','tb_masyarakat',now())
$$
DELIMITER ;

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
(0, 'Sistem', 'Sistem', 'e64b78fc3bc91bcbc7dc232ba', 0, '2020-02-14 00:00:00', '0000-00-00 00:00:00'),
(1, 'Dimas Anton', 'Admin', 'e64b78fc3bc91bcbc7dc232ba', 1, '2020-02-14 00:00:00', '0000-00-00 00:00:00'),
(16, 'Dimas Anton', 'Dimas', '25d55ad283aa400af464c76d7', 2, '2020-03-14 20:47:34', '2020-03-22 20:48:06'),
(17, 'esres', 'uiyiugiuy', '53e08b1875a02c8fc67f4f2d0', 2, '2020-03-22 13:49:29', '0000-00-00 00:00:00');

--
-- Trigger `tb_petugas`
--
DELIMITER $$
CREATE TRIGGER `tb_petugas_delete` AFTER DELETE ON `tb_petugas` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'DELETE','tb_petugas',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_petugas_insert` AFTER INSERT ON `tb_petugas` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'CREATE','tb_petugas',now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tb_petugas_update` AFTER UPDATE ON `tb_petugas` FOR EACH ROW INSERT INTO tb_aktifitas values('',0,'UPDATE','tb_petugas',now())
$$
DELIMITER ;

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
  ADD PRIMARY KEY (`id_aktivitas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kota` (`id_kota`);

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
  ADD KEY `fk1` (`id_level`);

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
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`id_lelang`) REFERENCES `tb_lelang` (`id_lelang`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_aktifitas`
--
ALTER TABLE `tb_aktifitas`
  ADD CONSTRAINT `tb_aktifitas_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`),
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`);

--
-- Ketidakleluasaan untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`);

--
-- Ketidakleluasaan untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `fk6` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`),
  ADD CONSTRAINT `fk7` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

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
