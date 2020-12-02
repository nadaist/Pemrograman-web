-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 08.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `nama`) VALUES
(1, 'Instagram'),
(2, 'Facebook'),
(3, 'Gmail'),
(4, 'Youtube');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama`) VALUES
(1, 'SDN Karang Anyar 1 Bangkalan Madura'),
(2, 'MTsN Rejoso Peterongan 2 Jombang'),
(3, 'SMA Darul Ulum 1 Unggulan BPP-T Jombang'),
(4, 'UPN Veteran Jawa Timur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
