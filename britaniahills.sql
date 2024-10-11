-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 03.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `britaniahills`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'denden', 'denden');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agen`
--

CREATE TABLE `agen` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agen`
--

INSERT INTO `agen` (`id`, `nama`, `foto`, `no_telp`, `instagram`) VALUES
(1, 'Fransisko', '628dc8fbd9929.jpg', '081292751271', '@britaniahills.frans'),
(4, 'Ammar', '628dc924be7fd.jpg', '085609781711', '@britaniahills.ammar'),
(5, 'Spongebob', '628dc95e13eca.jpg', '089666388464', '@britaniahills.fahmi'),
(6, 'Akbar', '628dc979f2ae0.jpg', '081382822007', '@britaniahills.salsy'),
(7, 'Thelma', '628dc9d068509.jpg', '08179997904', '@britaniahills.thelm'),
(8, 'Xena', '628dc9e91f928.jpg', '081510158827', '@britaniahills.xena'),
(11, 'User1', '62cbdc3ac5852.jpg', '08773738433', '@user1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desain progress & legalitas`
--

CREATE TABLE `desain progress & legalitas` (
  `id` int(3) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desain progress & legalitas`
--

INSERT INTO `desain progress & legalitas` (`id`, `tipe`, `foto`, `deskripsi`) VALUES
(1, 'pamulang', '628b275233fcf.jpeg', 'Bangunan mewah'),
(2, 'serpong', '628aa12f3a41d.jpg', 'DISINI SERPONG'),
(5, 'serpong', '628a89ceb952e.jpg', 'Ruangan'),
(6, 'pamulang', '628a99182b03b.jpeg', 'Sedikit lagi selesai'),
(7, 'pamulang', '628a9dc90d8ed.jpg', 'Indah Sekali'),
(8, 'legalitas', '628dca78aa6d2.jpg', 'Izin Lingkungan Hidup Britania Pamulang'),
(11, 'pamulang', '62cbdc07d97a8.jpg', 'ini pamulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas modern`
--

CREATE TABLE `fasilitas modern` (
  `id` int(11) NOT NULL,
  `tipe_fasilitas` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas modern`
--

INSERT INTO `fasilitas modern` (`id`, `tipe_fasilitas`, `nama`, `deskripsi`) VALUES
(1, 'Smart Home System ', 'Smart Lock', 'Kunci pintu yang dapat dibuka menggunakan fingerprint, aplikasi mobile, code, dan NFC\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe rumah`
--

CREATE TABLE `tipe rumah` (
  `id_tiperumah` int(3) NOT NULL,
  `nama_tipe` varchar(15) NOT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `luas_tanah(m2)` int(4) DEFAULT 0,
  `luas_bangunan(m2)` int(4) DEFAULT 0,
  `luas_bangunan2(m2)` int(4) DEFAULT 0,
  `kamar_tidur` int(2) DEFAULT 0,
  `kamar_tidur2` int(2) DEFAULT 0,
  `kamar_mandi` int(2) DEFAULT 0,
  `ruang_tamu` int(2) DEFAULT 0,
  `ruang_keluarga` int(2) DEFAULT 0,
  `dapur` int(2) DEFAULT 0,
  `taman_indoor` int(2) DEFAULT 0,
  `taman_outdoor` int(2) DEFAULT 0,
  `carport` int(2) DEFAULT 0,
  `desc_pro` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe rumah`
--

INSERT INTO `tipe rumah` (`id_tiperumah`, `nama_tipe`, `harga`, `luas_tanah(m2)`, `luas_bangunan(m2)`, `luas_bangunan2(m2)`, `kamar_tidur`, `kamar_tidur2`, `kamar_mandi`, `ruang_tamu`, `ruang_keluarga`, `dapur`, `taman_indoor`, `taman_outdoor`, `carport`, `desc_pro`) VALUES
(57, 'Syahira', '800 juta-an', 60, 63, 68, 2, 3, 2, 1, 1, 1, 1, 1, 1, 'Tipe Syahira adalah tipe hunian minimalis yang sangat cocok bagi millenial yg menginginkan rumah berdesign modern, berteknologi tinggi, compact, dan nyaman.'),
(58, 'Syabila', '900 JT-an', 63, 72, 70, 2, 3, 2, 1, 1, 1, 1, 2, 1, 'Tipe Syabila adalah tipe hunian minimalis yang sangat cocok untuk pecinta alam'),
(62, 'Rasamala', '1 Miliar-an', 70, 65, 66, 2, 1, 2, 1, 2, 1, 2, 2, 1, 'Tipe ini sangat cocok untuk kalangan milenial'),
(64, 'Hills', '1 Miliar', 50, 45, 40, 1, 2, 1, 2, 1, 1, 1, 2, 1, 'Kawasan milenial'),
(66, 'Cendana', '800 Jutaan', 60, 63, 63, 2, 1, 2, 1, 1, 2, 1, 2, 1, 'Ini merupakan tipe rumah yang cocok untuk milenial');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desain progress & legalitas`
--
ALTER TABLE `desain progress & legalitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas modern`
--
ALTER TABLE `fasilitas modern`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe rumah`
--
ALTER TABLE `tipe rumah`
  ADD PRIMARY KEY (`id_tiperumah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `desain progress & legalitas`
--
ALTER TABLE `desain progress & legalitas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `fasilitas modern`
--
ALTER TABLE `fasilitas modern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tipe rumah`
--
ALTER TABLE `tipe rumah`
  MODIFY `id_tiperumah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
