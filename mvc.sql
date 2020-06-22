-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 02:40 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--


-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `tb_dosen` (
  `nid` int(10) NOT NULL DEFAULT '',
  `nama_dosen` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(15) NOT NULL,
  `kd_dosen` int(10) NOT NULL,
  'mk' varchar(30) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `tb_dosen` (`nid`, `nama_dosen`, `alamat`, `telepon`, `kd_dosen` ,'mk') VALUES
('123001', 'Eva Nursamsi', 'karawang', '084657678','001', 'Ilmu Komputer '),
('123002', 'Sinta Laura', 'jakarta', '0195676767', '002','Pendidikan Ilmu pancasila'),
('123003', 'Madun Ginanjar', 'bekasi', '0878565576','003', 'Pendidikan Ilmu alam'),
('123004', 'Zainal Abidin', 'bandung', '0856454355', '004','Pendidikan Ilmu sosial'),
('123005', 'Surip Andri', 'yogyakarta', '0857544655', '005','web desain'),
('123006', 'Ani Suryani', 'tangerang', '0856352423653', '006','oop');

-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gambar`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gambar`
--
ALTER TABLE `tb_dosen`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
