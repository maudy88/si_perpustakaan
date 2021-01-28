-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 02.46
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus3n`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_buku` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_buku`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('A063N', 'Darla', '2021-01-05', 'Belum Kembali', 0, 'Seni', 2),
('A013N', 'rizki', '2021-01-18', 'Belum Kembali', 0, 'Skripsi', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(5) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `no_buku` varchar(200) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `pemberi` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `penulis_buku`, `judul_buku`, `no_buku`, `tgl_terbit`, `peminjam`, `pemberi`, `status`, `keterangan`) VALUES
(0, 'Sun Tzu', 'Seni Berperang', 'A063N', '2017-12-31', 'Darla', 'delin', 'Dipinjam', 'Seni'),
(1, 'Musdalifah', 'Sistem Informasi Arsip Perdata Pidana Kisaran ', 'A013N', '2017-12-31', 'rizki', 'delin', 'Dipinjam', 'Skripsi'),
(2, 'Dr. dr. Hans Tandra', 'Virus Corona Baru Covid-19', 'A023N', '2020-04-20', '-', '-', 'Ada', 'Kesehatan'),
(3, 'Hery, S.E., M.SI., CRP., RSA.', 'Analisis Laporan Keuangan', 'A033N', '2016-06-20', '-', '-', 'Ada', 'Ekonomi'),
(4, 'Mark Manson', 'Sebuah Seni Untuk Bersikap Bodo Amat', 'A043N', '2005-02-20', '-', '-', 'Ada', '-'),
(6, 'Riko Herwanto', 'Cloud Computing', 'A053N', '2020-10-30', '-', '-', 'Ada', 'Komputer & Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Open Source 2', 1, 'Staff Perpustakaan'),
('member', '827ccb0eea8a706c4c34a16891f84e7b', 'member@perpus.id', 'Member ', 3, 'Member Perpustakaan'),
('operator', '827ccb0eea8a706c4c34a16891f84e7b', 'operator@gmail.com', 'Operator', 2, 'Operator Perpustakaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
