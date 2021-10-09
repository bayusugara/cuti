-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2020 pada 12.40
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `idauth` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`idauth`, `nik`, `password`, `level`) VALUES
(14, '11551105411', '341ae348cafae81f3647b0de71eed9e3', '3'),
(15, '11551105411', '047aeeb234644b9e2d4138ed3bc7976a', '2'),
(16, '11551105411', '82849c85acf1f4e6e4eec748f0aeddf4', '1'),
(17, '11551105411', '335f9c411cdeee7d05d2ea6c015232a4', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `idcuti` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jeniscuti` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `mulaicuti` date NOT NULL,
  `akhircuti` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`idcuti`, `nik`, `jeniscuti`, `keterangan`, `tanggal`, `mulaicuti`, `akhircuti`, `status`) VALUES
(32, '11551105411', 'Cuti Besar', 'wew', '2020-05-12', '2020-04-26', '2020-05-07', 1),
(33, '11551105411', 'Cuti Karena Alasan Penting', 'asasa', '2020-05-12', '2020-04-28', '2020-05-07', 0),
(34, '11551105411', 'Cuti Besar', 'uhuy', '2020-05-12', '2020-04-26', '2020-05-05', 3),
(35, '11551105411', 'Cuti Besar', 'sasas', '2020-05-12', '2020-05-10', '2020-05-25', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Kabapas'),
(2, 'Pengadministrasian Umum'),
(3, 'Pembimbing Kemasyarakatan Muda'),
(4, 'Kasubsi Bimbingan Klien Anak'),
(5, 'Asisten Pembimbing Kemasyarakatan Penyelia'),
(6, 'Asisten Pembimbing Kemasyarakatan Mahir'),
(7, 'Kepala Urusan Tata Usaha'),
(8, 'Pengelola Kepegawaian'),
(9, 'Pembimbing Kemasyarakatan Pertama'),
(10, 'Kepala Subseksi Bimbingan Klien Dewasa'),
(11, 'Penelaah Status WBP'),
(12, 'Asisten Pembimbing Kemasyarakatan Terampil'),
(13, 'Bendahara'),
(14, 'Pengelola Keuangan'),
(15, 'Pengelola BMN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` enum('P','L') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `jatahcuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `jeniskelamin`, `jabatan`, `tanggallahir`, `pendidikan`, `agama`, `status`, `nohp`, `jatahcuti`) VALUES
('11551105410', 'BAYU SUGARA', 'L', 'Pengadministrasian Umum', '1996-05-26', 'S2', 'ISLAM', 'CPNS', '081235326195', 12),
('11551105411', 'ARSY', 'P', 'Kasubsi Bimbingan Klien Anak', '1996-05-01', 'S2', 'ISLAM', 'PNS', '081235326195', 12),
('11551105412', 'ROHANA', 'P', 'Kepala Urusan Tata Usaha', '1985-10-23', 'D3', 'ISLAM', 'CPNS', '081362738164', 12),
('11551105413', 'DAMA', 'P', 'Asisten Pembimbing Kemasyarakatan Penyelia', '2020-05-06', 'S2', 'ISLAM', 'PNS', '081233362282', 0),
('11551105511', 'BENS', 'L', 'Bendahara', '2020-05-05', 'S1', 'ISLAM', 'CPNS', '081275756433', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`idauth`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`idcuti`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `idauth` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `idcuti` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
