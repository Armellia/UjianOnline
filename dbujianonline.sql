-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 06:32 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbujianonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `kodejadwal` int(11) NOT NULL,
  `kodepengawas` int(11) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `hari` date NOT NULL,
  `jammulai` time NOT NULL,
  `jamselesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbjadwal`
--

INSERT INTO `tbjadwal` (`kodejadwal`, `kodepengawas`, `ruangan`, `hari`, `jammulai`, `jamselesai`) VALUES
(3, 111111, '31', '2019-11-14', '16:20:00', '18:00:00'),
(4, 111111, '3.2', '2019-11-14', '16:20:00', '18:00:00'),
(5, 1345, '3.2', '2019-11-21', '16:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbjurusan`
--

CREATE TABLE `tbjurusan` (
  `kodejurusan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbjurusan`
--

INSERT INTO `tbjurusan` (`kodejurusan`, `nama`) VALUES
(1, 'Rekayas Perangkat Lunak'),
(2, 'Multi Media'),
(4, 'jaringan komputer'),
(5, 'aku'),
(6, 'aaa'),
(7, 'aaa'),
(8, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `kodekelas` varchar(10) NOT NULL,
  `kodejurusan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`kodekelas`, `kodejurusan`, `nama`, `kelas`) VALUES
('10jk1', 4, 'jk1', 10),
('12MM1', 2, 'MM1', 12),
('12RPLL1', 1, 'RPLL1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbmapel`
--

CREATE TABLE `tbmapel` (
  `kodemapel` varchar(20) NOT NULL,
  `kodejurusan` varchar(20) NOT NULL,
  `kodekelas` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmapel`
--

INSERT INTO `tbmapel` (`kodemapel`, `kodejurusan`, `kodekelas`, `nama`) VALUES
('MPMM2001', '2', '10jk1', 'ilmu pengetahuan sosial'),
('MPRPL1001', '1', '12RPLL1', 'IPA'),
('MPRPL1002', '1', '12RPLL1', 'Story Board lanjutan'),
('MPRPL1003', '1', '10jk1', 'asas'),
('MPRPL1004', '1', '12RPLL1', 'Web Programming');

-- --------------------------------------------------------

--
-- Table structure for table `tbpengawas`
--

CREATE TABLE `tbpengawas` (
  `kodepengawas` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `jkel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpengawas`
--

INSERT INTO `tbpengawas` (`kodepengawas`, `nama`, `alamat`, `telp`, `jkel`) VALUES
('111111', 'bima123456', 'jalan', '0808', 'perempuan1'),
('1345', 'ardan', 'hghgfhgf', '7654', 'laki1');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `nis` int(11) NOT NULL,
  `kodekelas` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jkel` char(10) NOT NULL,
  `telp` char(14) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`nis`, `kodekelas`, `nama`, `alamat`, `jkel`, `telp`, `username`, `password`) VALUES
(987, '12MM1', 'qewqw', 'lkjlkj', 'oppa', '098765', 'user', '346789'),
(999, 'Kelas', 'bin', 'jalanin', 'perempuan', '09876543', 'user', 'ertyui'),
(11212, '12RPLL1', '12121fd', 'fgdfgd', 'fgdfgd', '465456', 'bima', '123456'),
(20020, '12RPLL1', 'bima', 'jalan noja', 'Laki-laki', '0811111', 'bima', 'bima');

-- --------------------------------------------------------

--
-- Table structure for table `tbsoal`
--

CREATE TABLE `tbsoal` (
  `kodesoal` varchar(20) NOT NULL,
  `kodemapel` varchar(20) NOT NULL,
  `kodekelas` varchar(20) NOT NULL,
  `soal` mediumtext NOT NULL,
  `jawaban1` mediumtext NOT NULL,
  `jawaban2` mediumtext NOT NULL,
  `jawaban3` mediumtext NOT NULL,
  `jawaban4` mediumtext NOT NULL,
  `kuncijawaban` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsoal`
--

INSERT INTO `tbsoal` (`kodesoal`, `kodemapel`, `kodekelas`, `soal`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `kuncijawaban`) VALUES
('SWP12_1', 'MPRPL1004', '12RPLL1', 'Apa itu website?', 'Sekumpulan halaman pada internet', 'Sebuah perangkat lunak', 'Protipe yang ada pada browser', 'Sekumpulan gambar yang ada pada internet', 'Sekumpulan halaman pada internet'),
('SWP12_2', 'MPRPL1004', '12RPLL1', 'Apa itu HTML?', 'Sebuah hyperlink', 'Sebuah bahasa markup', 'Sebuah website', 'Sebuah perangkat lunak', 'Sebuah bahasa markup'),
('SWP12_3', 'MPRPL1004', '12RPLL1', 'Apa itu PHP?', 'Pemberi harapan palsu', 'Sebuah website', 'Sebuah bahasa pemrograman', 'Sebuah perangkat lunak', 'Sebuah bahasa pemrograman'),
('SWP12_4', 'MPRPL1004', '12RPLL1', 'Kenapa diperlukan PHP?', 'Untuk mempercantik tampilan website', 'Membuat website menjadi lebih interaktif', 'Membuat halaman website menjadi lebih dinamis', 'Membuat website lebih canggih', 'Membuat halaman website menjadi lebih dinamis'),
('SWP12_5', 'MPRPL1004', '12RPLL1', 'Apa itu web client?', 'Website yang berjalan pada client', 'Sebuah website untuk client', 'Sebuah website yang dibuat client', 'Website nya client', 'Website yang berjalan pada client');

-- --------------------------------------------------------

--
-- Table structure for table `tbujian`
--

CREATE TABLE `tbujian` (
  `kodeujian` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `kodejadwal` int(11) NOT NULL,
  `kodesoal` varchar(20) NOT NULL,
  `jawaban` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbujian`
--

INSERT INTO `tbujian` (`kodeujian`, `nis`, `kodejadwal`, `kodesoal`, `jawaban`, `status`, `nilai`) VALUES
(3, 20020, 3, 'SWP12_1', 'Sekumpulan halaman pada internet', 0, 0),
(4, 20020, 3, 'SWP12_2', 'Sebuah hyperlink', 0, 0),
(5, 20020, 3, 'SWP12_3', 'Pemberi harapan palsu', 0, 0),
(6, 20020, 3, 'SWP12_4', 'Untuk mempercantik tampilan website', 0, 0),
(7, 20020, 3, 'SWP12_5', 'Website yang berjalan pada client', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `kodeuser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`kodeuser`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`kodejadwal`);

--
-- Indexes for table `tbjurusan`
--
ALTER TABLE `tbjurusan`
  ADD PRIMARY KEY (`kodejurusan`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`kodekelas`);

--
-- Indexes for table `tbmapel`
--
ALTER TABLE `tbmapel`
  ADD PRIMARY KEY (`kodemapel`);

--
-- Indexes for table `tbpengawas`
--
ALTER TABLE `tbpengawas`
  ADD PRIMARY KEY (`kodepengawas`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbsoal`
--
ALTER TABLE `tbsoal`
  ADD PRIMARY KEY (`kodesoal`);

--
-- Indexes for table `tbujian`
--
ALTER TABLE `tbujian`
  ADD PRIMARY KEY (`kodeujian`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`kodeuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  MODIFY `kodejadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbjurusan`
--
ALTER TABLE `tbjurusan`
  MODIFY `kodejurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbujian`
--
ALTER TABLE `tbujian`
  MODIFY `kodeujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `kodeuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
