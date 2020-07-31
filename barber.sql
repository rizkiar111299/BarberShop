-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2020 pada 22.34
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barber`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id_paket` int(11) NOT NULL,
  `paket` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`) VALUES
(1, 'Potong Rambut'),
(2, 'Kerok jenggot'),
(3, 'Cat Rambut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id_email` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `waktu_dikirim` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(12) NOT NULL,
  `id_user` int(5) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tanggal_jam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_lengkap` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `org` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `paket`, `harga`, `tanggal_jam`, `nama_lengkap`, `total`, `org`) VALUES
(39, 5, 'Potong Rambut</br>Kerok Jengot', 'Rp 15.000</br>Rp 5.000', '2020-07-31 03:13:52', 'ucok Disini', '20000', 2),
(40, 5, 'Potong Rambut</br>Cat Rambut</br>Kerok Jengot', 'Rp 15.000</br>Rp 35.000</br>Rp 5.000', '2020-07-31 03:14:05', 'ucok Disini', '55000', 3),
(41, 5, 'Potong Rambut</br>Kerok Jengot</br>Cat Rambut</br>Kerok Jengot', 'Rp 15.000</br>Rp 5.000</br>Rp 35.000</br>Rp 5.000', '2020-07-31 03:14:23', 'ucok Disini', '60000', 4),
(42, 6, 'Potong Rambut</br>Cat Rambut</br>Kerok Jengot</br>Cat Rambut', 'Rp 15.000</br>Rp 35.000</br>Rp 5.000</br>Rp 35.000', '2020-07-31 03:14:39', 'Otong', '90000', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `email`, `password`, `no_hp`, `level`) VALUES
(4, 'Rizki Alam Ramdhani', 'ghostroot', 'ghostroot200@gmail.com', '9562eaf3da1d92ab31445495dfc4ccdc', '087312341231', 'admin'),
(5, 'ucok Disini', 'ucok', 'ucok@gmail.com', '2fc4bfee344471c68b724856b9b6f13d', '', 'karyawan'),
(6, 'Otong', 'Otong', 'otong@gmail.com', '83beaa151b5f6eeb703a8ad8c9d82999', '', 'karyawan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_transaksi`
--
CREATE TABLE IF NOT EXISTS `v_transaksi` (
`id_user` int(5)
,`nama_lengkap` varchar(255)
,`id_transaksi` int(12)
,`org` int(255)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `v_transaksi`
--
DROP TABLE IF EXISTS `v_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_transaksi` AS select `user`.`id_user` AS `id_user`,`user`.`nama_lengkap` AS `nama_lengkap`,`transaksi`.`id_transaksi` AS `id_transaksi`,`transaksi`.`org` AS `org` from (`user` join `transaksi`) where (`user`.`id_user` = `transaksi`.`id_user`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `nama_lengkap` (`nama_lengkap`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
