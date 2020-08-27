-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Agu 2020 pada 20.59
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
  `paket` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`, `harga`, `type`) VALUES
(1, 'Potong Rambut', '15000', 'dewasa'),
(2, 'Kerok Kumis', '5000', ''),
(3, 'Cat Rambut', '35000', ''),
(4, 'Potong Rambut', '10000', 'anak-anak'),
(8, 'Krimbat', '45000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
`id_pengeluaran` int(5) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `jml_pengeluaran` int(12) NOT NULL,
  `total` varchar(255) NOT NULL,
  `pendapatan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `keterangan`, `jml_pengeluaran`, `total`, `pendapatan`) VALUES
(19, '2020-08-28', 'test', 200000, '345000', '145000');

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
  `id_pengeluaran` int(12) NOT NULL,
  `paket` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `dewasa` varchar(15) NOT NULL,
  `anak` varchar(15) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `kembalian` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pengeluaran`, `paket`, `harga`, `tanggal`, `jam`, `nama_lengkap`, `atas_nama`, `dewasa`, `anak`, `bayar`, `total`, `kembalian`, `org`, `status`) VALUES
(127, 5, 0, 'Potong Rambut </br> Kerok Kumis</br>Cat Rambut', '85000', '2020-08-27', '12:01:37', 'ucok Disini', 'Rizki Alam Ramdhani', '1', '3', ' 100000', '85000', '15000', '4', 'success'),
(128, 5, 0, 'Potong Rambut </br> Kerok Kumis', '50000', '2020-08-27', '12:04:34', 'ucok Disini', 'darwin', '3', '', ' 70000', '50000', '20000', '3', 'success'),
(129, 5, 0, 'Potong Rambut </br> ', '20000', '2020-08-27', '12:05:28', 'ucok Disini', 'dadang', '', '2', '20000', '20000', '0', '2', 'success'),
(130, 6, 0, 'Potong Rambut </br> ', '45000', '2020-08-27', '12:07:10', 'otong', 'Rizki Alam Ramdhani', '3', '', ' 50000', '45000', '5000', '3', 'success'),
(131, 6, 0, 'Potong Rambut </br> Cat Rambut', '50000', '2020-08-27', '12:07:32', 'otong', 'dadang', '1', '', ' 50000', '50000', '0', '1', 'success'),
(132, 5, 0, 'Potong Rambut </br> ', '30000', '2020-08-27', '12:08:13', 'ucok Disini', 'darwin', '', '3', ' 70000', '30000', '40000', '3', 'success'),
(133, 6, 0, 'Potong Rambut </br> ', '30000', '2020-08-27', '12:10:03', 'otong', 'Adi Santoso', '2', '', ' 50000', '30000', '20000', '2', 'success'),
(134, 5, 0, 'Potong Rambut </br> Cat Rambut', '35000', '2020-08-27', '23:23:17', 'ucok Disini', 'Rizki Alam Ramdhani', '', '', '', '35000', '', '0', '');

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
(1, 'administrator', 'admin', 'admin@localhost.com', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(5, 'ucok Disini', 'ucok', 'ucok@gmail.com', '2fc4bfee344471c68b724856b9b6f13d', '', 'karyawan'),
(6, 'otong', 'otong', 'otong@gmail.com', 'f8210b5a6219450b5f0082654fecd92c', '', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
 ADD PRIMARY KEY (`id_pengeluaran`);

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
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
MODIFY `id_pengeluaran` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
