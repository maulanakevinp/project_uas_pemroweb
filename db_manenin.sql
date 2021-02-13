-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2019 pada 16.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manenin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` double NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` date NOT NULL,
  `foto1` text NOT NULL,
  `foto2` text NOT NULL,
  `foto3` text NOT NULL,
  `foto4` text NOT NULL,
  `foto5` text NOT NULL,
  `foto6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_user`, `id_kategori`, `nama`, `harga`, `stok`, `deskripsi`, `created_at`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`) VALUES
(1, 2, 1, 'Wortel', 5000, 50, 'Wortel segar baru diambil dari kebun, murah berkualitas, terjamin, halal', '2019-06-09', '09062019174645carrots-2387394__340.jpg', '', '', '', '', ''),
(2, 2, 2, 'Pisang', 6000, 20, 'Pisang manis buah kesukaan para monyet :v', '2019-06-10', '10062019152423bananas-1119790__340.jpg', '', '', '', '', ''),
(3, 2, 3, 'Beras', 12500, 50, 'Beras murah berkualitas silahkan dibeli', '2019-06-10', '10062019152723056963000_1543304430-7-tips-mengusir-kutu-beras-masak-nasi-pun-tenang.jpg', '', '', '', '', ''),
(4, 2, 2, 'Strawberries', 20000, 30, 'Strawberries murah dijamin manisnya selangit siapa cepat dia dapat promo diskon 50%', '2019-06-10', '10062019153358strawberries-3359755__340.jpg', '', '', '', '', ''),
(5, 4, 1, 'jagung', 12000, 10, 'jagung manis cocok untuk di buat makanan manis', '2019-06-10', '10062019192535sweet-corn-3705687__340.jpg', '', '', '', '', ''),
(6, 4, 2, 'alpukat', 30000, 5, 'alpukat spanyol pilihan buahnya sangat bergizi', '2019-06-10', '10062019192623alpukat.jpg', '', '', '', '', ''),
(8, 4, 2, 'delima hawaii', 35000, 5, 'delima segar dan manis asli hawaii', '2019-06-10', '10062019194217delima.jpg', '', '', '', '', ''),
(9, 4, 1, 'brokoli', 20000, 3, 'brokoli hidroponik sehat dan bergizi', '2019-06-10', '10062019194253broccoli-1450274__340.png', '', '', '', '', ''),
(10, 4, 1, 'kentang senduro', 15000, 10, 'kentang asli senduro yang besar dan enak', '2019-06-10', '10062019194342potatoes-411975__340.jpg', '', '', '', '', ''),
(12, 4, 1, 'sawi putih', 23000, 4, 'sawi segar dan sehat', '2019-06-10', '10062019194508sawi.png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Sayuran'),
(2, 'Buah-Buahan'),
(3, 'Beras dan Biji-Bijian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `level_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id`, `level_user`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_level_user`, `nama`, `username`, `email`, `password`, `nomor_telepon`, `alamat`, `foto`, `cover`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin', 'admin@manen.in', '21232f297a57a5a743894a0e4a801fc3', '081111222333', '', '', '', '2019-06-01', '2019-06-10 20:14:46'),
(2, 2, 'Maulana Kevin Pradana', 'maulanakevinp', 'maulanakevinp@gmail.com', '6f1fb23241759f30b481ed08ca95b6f0', '082331571857', 'PPLI NO 1 RT 1 RW 4 Arjasa', '10062019185643kevin(1).jpg', '10062019030811slide.jpg', '2019-06-01', '2019-06-10 19:27:25'),
(4, 2, 'Muchamad Rizqi', 'rmuchamad', 'kolepz11@gmail.com', '965a5f9d244351648a11f36aea3f54a6', '081231329369', 'JAWA NO 2', '10062019192431MANEN.IN (1).png', '10062019194032carrots-2387394__340.jpg', '2019-06-09', '2019-06-10 19:41:00'),
(5, 2, 'bintang', 'bintang', 'bintang@gmail.com', '801dc3c9e3bcd2a3cf428f3b79b312b6', '089789678567', 'Arjasa', '1006201919112610062019190803_DSC6546 Full Face.jpg', '1006201919112609062019012814slide2.jpg', '2019-06-10', '2019-06-10 19:11:39'),
(6, 2, 'dedek', 'dedek', 'dedek@gmail.com', 'd5576e85442b159eeb4e0c41f8bb5940', '081231321321', 'jl jawa no 5', '10062019201910Capture.PNG', '10062019201910bibit apel.png', '2019-06-10', '2019-06-10 20:19:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nomor_telepon` (`nomor_telepon`),
  ADD KEY `id_level_user` (`id_level_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
