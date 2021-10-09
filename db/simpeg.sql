-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 04:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `idauth` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`idauth`, `nik`, `password`, `level`) VALUES
(5, '11551105412', '90973652b88fe07d05a4304f0a945de8', '3'),
(9, '11551105411', '21232f297a57a5a743894a0e4a801fc3', '1'),
(10, '11551105410', '047aeeb234644b9e2d4138ed3bc7976a', '2'),
(11, '11551102945', '202cb962ac59075b964b07152d234b70', '1'),
(12, '11551102946', '202cb962ac59075b964b07152d234b70', '2'),
(13, '11551102947', '202cb962ac59075b964b07152d234b70', '3'),
(14, '11551102949', '827ccb0eea8a706c4c34a16891f84e7b', '2'),
(15, '11551102948', '202cb962ac59075b964b07152d234b70', '3'),
(16, '11551102940', '202cb962ac59075b964b07152d234b70', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `idcuti` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `mulaicuti` date NOT NULL,
  `akhircuti` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`idcuti`, `nik`, `keterangan`, `tanggal`, `mulaicuti`, `akhircuti`, `status`) VALUES
(2, '11551105412', 'izin sunat', '2019-02-06', '2019-02-14', '2019-02-28', 1),
(4, '11551102947', 'sakit hati', '2019-02-19', '2019-02-20', '2019-02-28', 1),
(14, '11551102946', 'Ada kwan mau pesta', '2019-03-17', '2019-03-18', '2019-03-19', 1),
(19, '11551102949', 'Cuti Melahirkan\r\n', '2019-03-26', '2019-03-27', '2019-03-28', 1),
(25, '11551105410', 'dadawdawd', '2019-04-16', '2019-01-01', '2019-04-25', 1),
(26, '11551105410', 'jhbhbhj', '2019-06-19', '2019-06-20', '2019-07-06', 1),
(27, '11551102940', 'Cuti melahirkan', '2019-06-26', '2019-06-27', '2019-06-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `idmutasi` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `statusjabatan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jabatanlama` varchar(50) NOT NULL,
  `jabatanbaru` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`idmutasi`, `nik`, `statusjabatan`, `tanggal`, `jabatanlama`, `jabatanbaru`, `alasan`, `status`) VALUES
(1, '11551105411', 'TETAP', '2019-02-19', 'KASI', 'KABID', 'e', 1),
(2, '11551105412', 'SEMENTARA', '2019-02-05', 'KABID', 'KEPALA', 'Karna saya ingin mencoba jabatan baru', 0),
(3, '11551102946', 'SEMENTARA', '2019-02-20', 'KEPALA', 'PIMPINAN', 'Tidak betah di jabatan yang lama', 0),
(5, '11551105410', 'TETAP', '2019-02-23', 'SUB SEKSI', 'KASI', 'test', 1),
(8, '11551102946', 'TETAP', '2019-03-17', 'KEPALA', 'SUB SEKSI', 'Gaji gak pas', 1),
(11, '11551105410', 'TETAP', '2019-03-22', 'KASI', 'KEPALA', 'ingin gaji besar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` enum('P','L') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `departmen` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `darah` varchar(2) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `jeniskelamin`, `jabatan`, `departmen`, `tempatlahir`, `tanggallahir`, `pendidikan`, `darah`, `agama`, `status`, `nohp`, `email`, `alamat`) VALUES
('11111111111', 'ADMIN', 'L', 'PIMPINAN', 'KABID', 'MEDAN', '1998-04-08', 'S1', 'A', 'ISLAM', 'LAJANG', '081232321284', 'admin@gmail.com', 'kapusari'),
('11551102940', 'ZULKARNAIN', 'L', 'KASI', 'KASI', 'JAKARTA', '1999-06-26', 'S1', 'B', 'ISLAM', 'LAJANG', '082169673890', 'zul@gmail.com', 'jl kenangan no III'),
('11551102945', 'ANDRI REGAR', 'L', 'KEPALA', 'PIMPINAN', 'MEDAN', '1995-12-26', 'S2', 'B', 'ISLAM', 'LAJANG', '082169673892', 'andrymx@yahoo.co.id', 'gg kenanga'),
('11551102946', 'REGAR PIMPINAN', 'L', 'SUB SEKSI', 'SUB SEKSI', 'PEKANBARU', '1996-12-26', 'S2', 'A', 'ISLAM', 'LAJANG', '085266566828', 'regarpimpinan@gmail.com', 'jalan menuju surga'),
('11551102947', 'REGAR PEGAWAI', 'L', 'KASI', 'KASI', 'PERLAK', '1996-12-26', 'SMA', 'A', 'ISLAM', 'MENIKAH', '082169673892', 'andryregaragawai@gmail.com', 'uinsuskariau'),
('11551102948', 'ANDRE REGAR', 'L', 'KASI', 'KASI', 'MEDAN', '1997-12-26', 'S1', 'A', 'ISLAM', 'MENIKAH', '082169673899', 'andry@pegawai.com', 'sirotol mustaqin'),
('11551102949', 'REGAR BAYU', 'L', 'KASI', 'KASI', 'KUOK', '1999-01-12', 'S1', 'B', 'ISLAM', 'MENIKAH', '0813566828', 'regarbayu@gmail.com', 'jalan manyar sakti'),
('11551105410', 'SAID MAULANA', 'L', 'KEPALA', 'KEPALA', 'MEDAN', '1995-11-23', 'S3', 'O', 'ISLAM', 'DUDA', '081233362282', 'saidmaulana@gmail.com', 'bangkinang'),
('11551105411', 'BAYU SUGARA', 'L', 'KABID', 'KABID', 'PEKANBARU', '1996-05-26', 'S3', 'A', 'ISLAM', 'LAJANG', '081235326195', 'bayusugara9615@gmail.com', 'jln. kapau sari'),
('11551105412', 'ROHANA', 'P', 'KABID', 'KABID', 'PEKANBARU', '1985-10-23', 'D3', 'AB', 'ISLAM', 'MENIKAH', '081362738164', 'rohanakepala@gmail.com', 'jln. manyar sakti no.90'),
('11551155111', 'FAIZ', 'L', 'PIMPINAN', 'PIMPINAN', 'PEKANBARU', '1995-02-23', 'S1', 'A', 'ISLAM', 'JANDA', '082372625327', 'faiz@gmail.com', 'jln garuda sakti');

-- --------------------------------------------------------

--
-- Table structure for table `skp`
--

CREATE TABLE `skp` (
  `idskp` int(9) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `awalpenilaian` date DEFAULT NULL,
  `akhirpenilaian` date DEFAULT NULL,
  `penilai` varchar(100) DEFAULT NULL,
  `nilaikesetiaan` int(3) NOT NULL DEFAULT '0',
  `nilaiprestasi` int(3) NOT NULL DEFAULT '0',
  `nilaitj` int(3) NOT NULL DEFAULT '0',
  `nilaiketaatan` int(3) NOT NULL DEFAULT '0',
  `nilaikejujuran` int(3) NOT NULL DEFAULT '0',
  `nilaikerjasama` int(3) NOT NULL DEFAULT '0',
  `nilaiprakarsa` int(3) NOT NULL DEFAULT '0',
  `nilaikepemimpinan` int(3) NOT NULL DEFAULT '0',
  `hasilpenilaian` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skp`
--

INSERT INTO `skp` (`idskp`, `nik`, `awalpenilaian`, `akhirpenilaian`, `penilai`, `nilaikesetiaan`, `nilaiprestasi`, `nilaitj`, `nilaiketaatan`, `nilaikejujuran`, `nilaikerjasama`, `nilaiprakarsa`, `nilaikepemimpinan`, `hasilpenilaian`) VALUES
(1, '11551105411', '2019-02-01', '2019-02-28', 'KEPALA KEPEGAWAIAN', 87, 89, 90, 90, 99, 94, 75, 70, 'AMAT BAIK'),
(4, '11551105410', '2019-03-01', '2019-03-27', 'PIMPINAN', 12, 44, 67, 90, 85, 90, 90, 90, 'PERFECT'),
(7, '11551105410', '2019-03-07', '2019-03-07', 'BAYU, ST', 34, 84, 88, 57, 67, 79, 67, 44, 'VERY GOOD'),
(10, '11551102946', '2019-03-17', '2019-03-17', 'POLAN', 70, 70, 70, 60, 65, 70, 75, 80, 'VERY GOOD'),
(14, '11551105410', '2019-03-22', '2019-03-29', 'BAYU, ST', 100, 75, 75, 85, 100, 90, 73, 100, 'Amat Baik'),
(15, '11551102949', '2019-03-26', '2019-03-26', 'ROHANA', 80, 75, 80, 80, 80, 80, 80, 80, 'VERY GOOD'),
(17, '11551105410', '2019-03-29', '2019-03-29', '98', 98, 89, 89, 87, 74, 76, 74, 100, 'AMAT BAIK'),
(18, '11551105410', '2019-03-29', '2019-03-29', '12', 42, 42, 42, 100, 100, 100, 98, 94, 'BAIK'),
(19, '11551105410', '2019-03-29', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '0'),
(20, '11551102946', '2019-05-20', '2019-06-26', 'MUHAMMAD ARIF,ST', 80, 80, 80, 80, 76, 50, 65, 78, ''),
(21, '11551102940', '2019-06-26', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '0');

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
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`idmutasi`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `skp`
--
ALTER TABLE `skp`
  ADD PRIMARY KEY (`idskp`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `idauth` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `idcuti` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `idmutasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skp`
--
ALTER TABLE `skp`
  MODIFY `idskp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skp`
--
ALTER TABLE `skp`
  ADD CONSTRAINT `skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
