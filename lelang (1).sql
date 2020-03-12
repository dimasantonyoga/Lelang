-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2020 pada 04.50
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
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
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
  `create_at` datetime NOT NULL
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
(94, 0, 'UPDATE', 'tb_barang', '2020-03-12 00:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_berakhir` datetime NOT NULL,
  `harga_awal` int(20) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `status` enum('draf','dibuka','ditutup') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `foto`, `tgl_mulai`, `tgl_berakhir`, `harga_awal`, `deskripsi_barang`, `status`, `create_at`, `update_at`) VALUES
(26, 'User', '37693cb726f955498a048af532b46f7d.jpg', '2020-03-26 00:00:00', '2020-04-26 00:00:00', 100000, 'b', 'draf', '2020-03-12 00:44:13', '0000-00-00 00:00:00'),
(27, 'Dimas Anton', 'f7cfc007cae8db801c8cf9510416d1a0.jpg', '2020-03-12 00:00:00', '2020-03-13 00:00:00', 600000, 'aws', 'dibuka', '2020-03-12 00:44:58', '0000-00-00 00:00:00'),
(28, 'Fendi', '6aeb781d4f7c5d5b09e8811be883185e.jpg', '2020-03-12 00:56:00', '2020-03-13 00:00:00', 123, 'a', 'dibuka', '2020-03-12 00:54:54', '0000-00-00 00:00:00'),
(29, 'User', '2fea7c581396c8fa3fdbc5b0453f2ef8.jpg', '2020-03-12 00:00:00', '2020-03-12 00:59:00', 1222, 'w', 'ditutup', '2020-03-12 00:57:43', '0000-00-00 00:00:00');

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
-- Struktur dari tabel `tb_lelang`
--

CREATE TABLE `tb_lelang` (
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_lelang` date NOT NULL,
  `harga_akhir` int(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `status` enum('dibuka','ditutup') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` enum('Sistem','Administrator','Petugas') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
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
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1:online;0:offline',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`, `status`, `create_at`, `update_at`) VALUES
(94, 'Dimas', 'Dimas', '25d55ad283aa400af464c76d7', '12346', 0, '2020-03-11 18:48:55', '0000-00-00 00:00:00'),
(95, 'Pratama', 'Pratama', '25d55ad283aa400af464c76d7', '08237343', 0, '2020-03-11 20:20:59', '0000-00-00 00:00:00');

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
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_level`, `create_at`, `update_at`) VALUES
(0, 'Sistem', 'Sistem', 'e64b78fc3bc91bcbc7dc232ba', 0, '2020-02-14 00:00:00', '0000-00-00 00:00:00'),
(1, 'Dimas Anton', 'Admin', 'e64b78fc3bc91bcbc7dc232ba', 1, '2020-02-14 00:00:00', '0000-00-00 00:00:00'),
(15, 'Dani', 'Dani', '25d55ad283aa400af464c76d7', 2, '2020-03-10 20:32:27', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
CREATE DEFINER=`root`@`localhost` EVENT `open_lelang` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:25:19' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_barang SET status='dibuka' WHERE tgl_mulai <= now() and tgl_berakhir > now() and status !='dibuka'$$

CREATE DEFINER=`root`@`localhost` EVENT `tutup_lelang` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_barang SET status='ditutup' WHERE tgl_berakhir <= now() and status = 'dibuka' and status !='ditutup'$$

CREATE DEFINER=`root`@`localhost` EVENT `draf` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-09 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tb_barang SET status='draf' WHERE tgl_mulai > now() and tgl_berakhir > now() and status !='draf'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
