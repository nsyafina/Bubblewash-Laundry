-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2024 pada 02.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `kode_jenis` varchar(20) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_jenis` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `jenis_barang`, `harga_jenis`, `gambar`) VALUES
('JN001', 'Kaos', '10000', 'kaos.jpg'),
('JN002', 'Kemeja', '12000', 'kemeja.jpg'),
('JN003', 'Jaket', '15000', 'jaket.jpg'),
('JN004', 'Celana', '11000', 'celanakargo.jpg'),
('JN005', 'Rok', '10000', 'rok.jpg'),
('JN006', 'Jumpsuit', '15000', 'jumpsuit.jpg'),
('JN007', 'Dress', '15000', 'dress.jpg'),
('JN008', 'Kebaya', '30000', 'kebaya.jpg'),
('JN009', 'Jas/Blazer', '25000', 'jas.jpg'),
('JN010', 'Rompi', '14000', 'rompi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `kode_konsumen` varchar(12) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `alamat_konsumen` text NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`kode_konsumen`, `nama_konsumen`, `alamat_konsumen`, `no_telp`) VALUES
('K001', 'Najla', 'Cibitung', '081234567891'),
('K002', 'Silmi', 'Kranji', '081234567891'),
('K003', 'Bina', 'Rawamangun', '081234567891'),
('K004', 'Salma', 'Kaliabang', '081234567891'),
('K005', 'Cia', 'Manggarai', '081234567891'),
('K006', 'Jasmine', 'Tambun', '081234567891'),
('K007', 'Bagas', 'Bandung', '081364757686'),
('K008', 'Miko', 'Kaliabang', '081364757686'),
('K009', 'Raffy', 'Medan tempur', '089506645921');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(20) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `harga_paket`, `gambar`) VALUES
('PK001', 'Dry Clean [ /Kg ]', '25000', 'dry.jpg'),
('PK002', 'Wet Clean [ /Kg ] ', '10000', 'wet.jpg'),
('PK003', 'Cuci + Setrika [ /Kg ]', '25000', 'cucisetrika.jpg'),
('PK004', 'Only Setrika  [ /Kg ]', '10000', 'setrika.jpg'),
('PK005', 'Self Service [ /Kg ]', '5000', 'self.jpg'),
('PK006', 'Dry Clean [ /Pcs ]', '5000', 'dry.jpg'),
('PK007', 'Wet Clean [ /Pcs ]', '4000', 'wet.jpg'),
('PK008', 'Cuci + Setrika [ /Pcs ]', '5000', 'cucisetrika.jpg'),
('PK009', 'Only Setrika [ /Pcs ]', '4000', 'setrika.jpg'),
('PK010', 'Self Service [ /Pcs ]', '2000', 'self.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `kode_transaksi` varchar(20) NOT NULL,
  `kode_konsumen` varchar(12) NOT NULL,
  `kode_paket` varchar(12) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_ambil` datetime NOT NULL,
  `qty` int(12) NOT NULL,
  `grand_total` int(12) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`kode_transaksi`, `kode_konsumen`, `kode_paket`, `kode_jenis`, `tgl_masuk`, `tgl_ambil`, `qty`, `grand_total`, `bayar`, `status`) VALUES
('TRS20240507001', 'K003', 'PK009', 'JN005', '2024-05-07 11:10:50', '2024-05-10 01:23:16', 1, 14000, 'Lunas', 'Selesai'),
('TRS20240625002', 'K002', 'PK009', 'JN005', '2024-06-25 08:01:39', '0000-00-00 00:00:00', 2, 24000, 'Lunas', 'Ready'),
('TRS20240625003', 'K009', 'PK009', 'JN006', '2024-06-25 08:05:38', '0000-00-00 00:00:00', 1, 19000, 'Lunas', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(20) NOT NULL,
  `kode_konsumen` varchar(12) NOT NULL,
  `kode_paket` varchar(12) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_ambil` datetime NOT NULL,
  `berat` int(10) NOT NULL,
  `grand_total` int(12) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `kode_konsumen`, `kode_paket`, `tgl_masuk`, `tgl_ambil`, `berat`, `grand_total`, `bayar`, `status`) VALUES
('TRK20240507001', 'K006', 'PK002', '2024-05-09 12:29:36', '2024-05-27 10:19:09', 5, 50000, 'Lunas', 'Selesai'),
('TRK20240625002', 'K001', 'PK003', '2024-06-25 07:22:14', '2024-06-25 07:22:47', 1, 25000, 'Lunas', 'Selesai'),
('TRK20240625003', 'K008', 'PK003', '2024-06-25 08:04:36', '0000-00-00 00:00:00', 2, 50000, 'Lunas', 'Ready'),
('TRK20240625004', 'K002', 'PK003', '2024-06-25 08:16:47', '0000-00-00 00:00:00', 1, 25000, 'Lunas', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `image`, `tanggal_input`) VALUES
(3, 'admin_jakarta', '$2y$10$XAWDHGrn/PFgK9o8Bqzkd./u62Msg2M7Z6sPsfQohRi', 'default.jpg\r\n', 0),
(4, 'admin', '$2y$10$zCza6vTnXxpwkMgHtdeQ9.tUzWcG7IoPSyhLsxZAdQn', 'default.jpg', 1719195944),
(5, 'admin_bandung', '$2y$10$Y2t046YnkRx3auLS.h848.uCZeX96CWMtLV7j7ANJc.', 'default.jpg', 1719317358),
(6, 'adminlaundry', '$2y$10$eawJ7NWpMPmC791IiUErRulQEeQAt8DmsiNWVHFt5jv', 'default.jpg', 1719318949);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
