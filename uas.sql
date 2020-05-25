-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 04:08 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_cuti` int(11) DEFAULT NULL,
  `id_seminar` int(11) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  `tglawal` date NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tglakhir` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `konfirmasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id_izin`, `id_pegawai`, `id_cuti`, `id_seminar`, `id_sekolah`, `tglawal`, `tempat`, `tglakhir`, `status`, `konfirmasi`) VALUES
(7, 3, NULL, 2, NULL, '2018-05-15', 'Tangerang', '2018-06-17', 'Seminar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(3, 'yauma', '1', 'yaumabowo', 'user'),
(4, 'imam', '1', 'imam', 'user'),
(7, 'Fauzi', '1', 'Fauzi', 'admin'),
(8, 'rhamat', '1', 'rhamat', 'manajer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cuti`
--

CREATE TABLE `tb_cuti` (
  `id_cuti` int(11) NOT NULL,
  `nama_kolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cuti`
--

INSERT INTO `tb_cuti` (`id_cuti`, `nama_kolah`) VALUES
(1, 'Lebaran'),
(2, 'Idhul Adha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Manajer'),
(2, 'Pegawai'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` int(11) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `pendidikan_terakhir` varchar(25) NOT NULL,
  `status_perkawinan` varchar(25) NOT NULL,
  `status_pegawai` varchar(25) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `no_rumah` int(11) NOT NULL,
  `no_handphone` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tanggal_pengangkatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `status_perkawinan`, `status_pegawai`, `id_jabatan`, `id_bidang`, `id_login`, `agama`, `alamat`, `no_ktp`, `no_rumah`, `no_handphone`, `email`, `tanggal_pengangkatan`) VALUES
(3, 'Yauma', 123, 'Tangerang', '1998-05-10', 'P', 'SMA', 'Lajang', 'Aktif', 2, 1, 3, 'Islam', 'Jl.Babakan', 11123, 1, 856989182, 'yaumabowo@gmail.com', '2005-05-10'),
(4, 'Imam', 322, 'tangerang', '1998-04-01', 'L', 'S1', 'Nikah', 'aktif', 2, 1, 4, 'Islam', 'jl.nanas V', 16662, 12, 84555612, 'Imam@gmail.com', '2005-05-01'),
(5, 'Fauzi', 122, 'tangerang', '1998-05-01', 'L', 'S1', 'Lajang', 'aktif', 3, 1, 7, 'Islam', 'jl.nanas', 122, 12, 11123, 'achmadnurfauzi46@gmail.co', '2005-05-01'),
(6, 'Rhamat', 322, 'tangerang', '1998-05-01', 'L', 'S1', 'Lajang', 'aktif', 1, 1, 8, 'Islam', 'jl.nanas', 122, 12, 11123, 'rhamat@gmail.com', '2005-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`) VALUES
(1, 'Yuppentek'),
(2, 'SMA 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seminar`
--

CREATE TABLE `tb_seminar` (
  `id_seminar` int(11) NOT NULL,
  `nama_seminar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_seminar`
--

INSERT INTO `tb_seminar` (`id_seminar`, `nama_seminar`) VALUES
(1, 'Kewirausahaan'),
(2, 'Pahlawan'),
(3, 'Kewirausahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `id_cuti` (`id_cuti`),
  ADD KEY `id_seminar` (`id_seminar`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_seminar`
--
ALTER TABLE `tb_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_seminar`
--
ALTER TABLE `tb_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izin`
--
ALTER TABLE `izin`
  ADD CONSTRAINT `izin_ibfk_1` FOREIGN KEY (`id_cuti`) REFERENCES `tb_cuti` (`id_cuti`),
  ADD CONSTRAINT `izin_ibfk_2` FOREIGN KEY (`id_seminar`) REFERENCES `tb_seminar` (`id_seminar`),
  ADD CONSTRAINT `izin_ibfk_3` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`),
  ADD CONSTRAINT `izin_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `tb_bidang` (`id_bidang`),
  ADD CONSTRAINT `tb_pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tb_pegawai_ibfk_3` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
