-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2017 at 07:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `no_hp_admin` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_hp_admin`, `password`) VALUES
(1, 'admin', '', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bayi`
--

CREATE TABLE `bayi` (
  `id_bayi` int(11) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `nm_bayi` varchar(50) NOT NULL,
  `no_reg` varchar(30) NOT NULL,
  `bulan_lahir` text NOT NULL,
  `tahun_lahir` varchar(4) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `asi_eks` int(11) NOT NULL,
  `bb_ideal` int(11) DEFAULT NULL,
  `vit_a` int(11) NOT NULL DEFAULT '0',
  `mp_asi` int(11) NOT NULL DEFAULT '0',
  `pmt` int(11) NOT NULL DEFAULT '0',
  `tablet_besi` int(11) NOT NULL DEFAULT '0',
  `hepatitis_b` int(11) NOT NULL DEFAULT '0',
  `poso` int(11) NOT NULL DEFAULT '0',
  `dtp` int(11) NOT NULL DEFAULT '0',
  `campak` int(11) NOT NULL DEFAULT '0',
  `hib` int(11) NOT NULL DEFAULT '0',
  `rotavirus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayi`
--

INSERT INTO `bayi` (`id_bayi`, `nm_ibu`, `nm_bayi`, `no_reg`, `bulan_lahir`, `tahun_lahir`, `berat_badan`, `asi_eks`, `bb_ideal`, `vit_a`, `mp_asi`, `pmt`, `tablet_besi`, `hepatitis_b`, `poso`, `dtp`, `campak`, `hib`, `rotavirus`) VALUES
(1, 'Dklsdksl', 'Edo', '34343', '09', '1990', 56, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0),
(2, 'asd', 'qwew', '09130743', '12', '233', 45, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'asd', 'asd', '09132745', '23', '23', 32, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'jono', '', '09142843', '', '', 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'sad', '12', '09143156', '1', '12', 2, 1, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bumil`
--

CREATE TABLE `bumil` (
  `id_bumil` int(11) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `nm_ibu` varchar(30) NOT NULL,
  `nm_suami` varchar(50) NOT NULL,
  `lama_nikah` int(4) NOT NULL,
  `tekanan` int(11) NOT NULL DEFAULT '0',
  `darah` int(11) NOT NULL DEFAULT '0',
  `hipertensi` int(11) NOT NULL DEFAULT '0',
  `cekhamil` int(11) NOT NULL DEFAULT '0',
  `pmt` int(11) NOT NULL DEFAULT '0',
  `tablet` int(11) NOT NULL DEFAULT '0',
  `tetanus` int(11) NOT NULL DEFAULT '0',
  `vita` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bumil`
--

INSERT INTO `bumil` (`id_bumil`, `no_reg`, `nm_ibu`, `nm_suami`, `lama_nikah`, `tekanan`, `darah`, `hipertensi`, `cekhamil`, `pmt`, `tablet`, `tetanus`, `vita`) VALUES
(1, '09143139', 'asd', 'adss', 222, 0, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `imun`
--

CREATE TABLE `imun` (
  `id_imun` int(11) NOT NULL,
  `hepatitis_b` int(11) NOT NULL,
  `poso` int(11) NOT NULL,
  `dtp` int(11) NOT NULL,
  `campak` int(11) NOT NULL,
  `hib` int(11) NOT NULL,
  `rotavirus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyuluhan_bayi`
--

CREATE TABLE `penyuluhan_bayi` (
  `id_pb` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `id_timbang` int(11) NOT NULL DEFAULT '0',
  `vit_a` int(11) NOT NULL DEFAULT '0',
  `mp_asi` int(11) NOT NULL DEFAULT '0',
  `tablet_besi` int(11) NOT NULL DEFAULT '0',
  `hepatitis_b` int(11) NOT NULL DEFAULT '0',
  `poso` int(11) NOT NULL DEFAULT '0',
  `dtp` int(11) NOT NULL DEFAULT '0',
  `campak` int(11) NOT NULL DEFAULT '0',
  `hib` int(11) NOT NULL DEFAULT '0',
  `rotavirus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyuluhan_bayi`
--

INSERT INTO `penyuluhan_bayi` (`id_pb`, `id_bayi`, `id_timbang`, `vit_a`, `mp_asi`, `tablet_besi`, `hepatitis_b`, `poso`, `dtp`, `campak`, `hib`, `rotavirus`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wupus`
--

CREATE TABLE `wupus` (
  `id_wus` int(11) NOT NULL,
  `no_reg` varchar(30) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `nm_suami` varchar(50) NOT NULL,
  `lama_nikah` int(11) NOT NULL,
  `personal` int(11) NOT NULL DEFAULT '0',
  `gizi` int(11) NOT NULL DEFAULT '0',
  `masalah` int(11) NOT NULL DEFAULT '0',
  `gangguan` int(11) NOT NULL DEFAULT '0',
  `pembalut` int(11) NOT NULL DEFAULT '0',
  `suntik_kb` int(11) NOT NULL DEFAULT '0',
  `pilkb` int(11) NOT NULL DEFAULT '0',
  `vitamin` int(11) NOT NULL DEFAULT '0',
  `tambah_darah` int(11) NOT NULL DEFAULT '0',
  `konsul` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wupus`
--

INSERT INTO `wupus` (`id_wus`, `no_reg`, `nm_ibu`, `nm_suami`, `lama_nikah`, `personal`, `gizi`, `masalah`, `gangguan`, `pembalut`, `suntik_kb`, `pilkb`, `vitamin`, `tambah_darah`, `konsul`) VALUES
(1, '09142911', 'asd', 'ads', 3, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1),
(4, '09142141', 'sad', 'sa', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '09142853', 'asd', 'sad', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '09142908', 'sad', 'sd', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '09142934', 'asd', 'asd', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bayi`
--
ALTER TABLE `bayi`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indexes for table `bumil`
--
ALTER TABLE `bumil`
  ADD PRIMARY KEY (`id_bumil`);

--
-- Indexes for table `penyuluhan_bayi`
--
ALTER TABLE `penyuluhan_bayi`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `wupus`
--
ALTER TABLE `wupus`
  ADD PRIMARY KEY (`id_wus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bayi`
--
ALTER TABLE `bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bumil`
--
ALTER TABLE `bumil`
  MODIFY `id_bumil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penyuluhan_bayi`
--
ALTER TABLE `penyuluhan_bayi`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wupus`
--
ALTER TABLE `wupus`
  MODIFY `id_wus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
