-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 17.10
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_ilness`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(20) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(20) NOT NULL,
  `penyakit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala_penyakit` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala_penyakit`) VALUES
(1, 'Perubahan Emosi Mendalam'),
(2, 'Keinginan Tidur Menurun'),
(3, 'Mudah Terganggu'),
(4, 'Mengantuk Pada Siang Hari'),
(5, 'Tidak Bisa Tidur Malam Hari'),
(6, 'Lebih Sulit Berkonsentrasi'),
(7, 'Berhalusinasi'),
(8, 'Tingkah Laku Tidak Jelas'),
(9, 'Mengalami Delusi'),
(10, 'Rasa Khawatir Berlebih'),
(11, 'Berperilaku Kompulsif'),
(12, 'Tertekan Dengan Keadaan'),
(13, 'Pandai Berbohong'),
(14, 'Memanipulasi Emosi Seseorang'),
(15, 'Tidak Memiliki Empati'),
(16, 'Memiliki Egoisme Tinggi'),
(17, 'Mempertehakankan Berat Badan Dibawah Berat Normal'),
(18, 'Ketakutan Intens Berat Badan Naik'),
(19, 'Tidak Mengalami Menstruasi'),
(20, 'Mengalami Perasaan Tidak Nyata'),
(21, 'Sakit Kepala dan Keinginan Bunuh Diri'),
(22, 'Mengalami Distorsi Waktu'),
(23, 'Menganggap Dirinya Orang Asing'),
(24, 'MSulit Mengendalikan Emosi'),
(25, 'Tidak Berpikir Logis'),
(26, 'Tidak Menyukasi Dirinya Sendiri'),
(27, 'Memiliki Rasa Berlebih Kepada Sesama Jenis'),
(28, 'Tidak Tertarik Pada Lawan Jenis'),
(29, 'Tidak Dapat Mengontrol Hasrat Sexsual'),
(30, 'Ingatan Pada Peristiwa Trauatis'),
(31, 'Kecenderungan Untuk Mengelak'),
(32, 'Pemikiran dan Perasaan Negatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`) VALUES
(1, 'Endometriosis'),
(2, 'Radang Panggul'),
(3, 'PCOS (Syindrom Ovarium Polikistik)'),
(4, 'Miom'),
(5, 'Epidemitis'),
(6, 'Orchitis'),
(7, 'Gangguan Prostat'),
(8, 'Hipogonadisme');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `umur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `alamat`, `umur`) VALUES
(2, 'admin', '.', 'Mie Sedap Soto', 'Kediri', 25),
(3, 'abc', '.', 'Tazkia Aulia Prismadana', 'Gampeng', 19);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
