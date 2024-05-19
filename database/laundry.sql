-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 08.02
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
  `harga_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `jenis_barang`, `harga_jenis`) VALUES
('JN001', 'Kaos', '10000'),
('JN002', 'Kemeja', '12000'),
('JN003', 'Jaket', '15000'),
('JN004', 'Celana', '11000'),
('JN005', 'Rok', '10000'),
('JN006', 'Jumpsuit', '15000'),
('JN007', 'Dress', '15000'),
('JN008', 'Kebaya', '30000'),
('JN009', 'Jas/Blazer', '25000'),
('JN010', 'Rompi', '14000');

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
('K007', 'Rafa', 'Cikarang', '081234567891'),
('K008', 'Rio', 'Jakarta', '081234567891'),
('K009', 'Miko', 'Bogor', '081234567891'),
('K010', 'Asiyah', 'Tangerang', '081234567891'),
('K011', 'Bagas', 'Bekasi', '081234567891');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `kode_paket` varchar(20) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`kode_paket`, `nama_paket`, `harga_paket`) VALUES
('PK001', 'Dry Clean [ /Kg ]', '25000'),
('PK002', 'Wet Clean [ /Kg ] ', '10000'),
('PK003', 'Cuci + Setrika [ /Kg ]', '25000'),
('PK004', 'Only Setrika  [ /Kg ]', '10000'),
('PK005', 'Self Service [ /Kg ]', '5000'),
('PK006', 'Dry Clean [ /Pcs ]', '5000'),
('PK007', 'Wet Clean [ /Pcs ]', '4000'),
('PK008', 'Cuci + Setrika [ /Pcs ]', '5000'),
('PK009', 'Only Setrika [ /Pcs ]', '4000'),
('PK010', 'Self Service [ /Pcs ]', '2000');

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
('TRS20240508002', 'K009', 'PK009', 'JN007', '2024-05-08 06:00:26', '0000-00-00 00:00:00', 2, 34000, 'Lunas', 'Ready'),
('TRS20240508003', 'K002', 'PK006', 'JN001', '2024-05-08 06:00:46', '2024-05-09 03:19:48', 5, 55000, 'Lunas', 'Selesai'),
('TRS20240509004', 'K002', 'PK007', 'JN005', '2024-05-09 12:18:40', '0000-00-00 00:00:00', 1, 14000, 'Lunas', 'Ready'),
('TRS20240509005', 'K005', 'PK009', 'JN009', '2024-05-09 12:30:50', '0000-00-00 00:00:00', 2, 54000, 'Lunas', 'Ready'),
('TRS20240510006', 'K002', 'PK006', 'JN004', '2024-05-10 07:18:30', '0000-00-00 00:00:00', 2, 27000, 'Lunas', 'Proses'),
('TRS20240510007', 'K001', 'PK008', 'JN003', '2024-05-10 07:28:43', '0000-00-00 00:00:00', 1, 20000, 'Lunas', 'Proses'),
('TRS20240510008', 'K001', 'PK007', 'JN002', '2024-05-10 01:23:58', '0000-00-00 00:00:00', 1, 16000, 'Lunas', 'Baru'),
('TRS20240510009', 'K001', 'PK009', 'JN010', '2024-05-10 01:24:26', '0000-00-00 00:00:00', 2, 30000, 'Belum Lunas', 'Baru'),
('TRS20240510010', 'K001', 'PK008', 'JN007', '2024-05-10 06:28:12', '0000-00-00 00:00:00', 1, 20000, 'Lunas', 'Proses');

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
('TRK20240507001', 'K006', 'PK002', '2024-05-09 12:29:36', '0000-00-00 00:00:00', 5, 50000, 'Lunas', 'Proses'),
('TRK20240508002', 'K004', 'PK004', '2024-05-08 05:57:07', '0000-00-00 00:00:00', 3, 30000, 'Belum Lunas', 'Ready'),
('TRK20240509003', 'K002', 'PK005', '2024-05-09 12:18:08', '2024-05-09 03:15:34', 5, 25000, 'Lunas', 'Selesai'),
('TRK20240509004', 'K001', 'PK001', '2024-05-09 02:41:27', '0000-00-00 00:00:00', 5, 125000, 'Lunas', 'Ready'),
('TRK20240510005', 'K001', 'PK002', '2024-05-10 07:16:53', '0000-00-00 00:00:00', 3, 30000, 'Lunas', 'Ready'),
('TRK20240510006', 'K008', 'PK002', '2024-05-10 07:26:51', '0000-00-00 00:00:00', 2, 20000, 'Lunas', 'Proses'),
('TRK20240510007', 'K005', 'PK003', '2024-05-10 06:26:39', '0000-00-00 00:00:00', 10, 250000, 'Lunas', 'Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '12345');

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
