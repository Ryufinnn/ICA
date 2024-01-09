-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2016 at 11:34 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `limit_absen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`limit_absen`) VALUES
('10');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE IF NOT EXISTS `nasabah` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `pinjaman` varchar(25) NOT NULL,
  `jangka` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `legal` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keluarga` varchar(20) NOT NULL,
  `disiplin` varchar(20) NOT NULL,
  `hasil` varchar(25) NOT NULL,
  `photo` varchar(80) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`kode`, `nama`, `umur`, `nohp`, `alamat`, `pendapatan`, `jaminan`, `pekerjaan`, `pinjaman`, `jangka`, `npwp`, `ktp`, `legal`, `status`, `keluarga`, `disiplin`, `hasil`, `photo`) VALUES
('Edi Wahyudi', 'Laki-laki', '27', '082170214499', 'Jl.Duku no 90', '6 s/d 10 Juta', 'Sertifikat', 'PNS', '100', '3-5 Tahun', '99821212818299', '99821212818289', '', 'Menikah', '0-3 Orang', 'Baik', 'Diterima', 'Edi Wahyudi.jpg'),
('Joni Iskandar', 'Laki-laki', '34', '081993448877', 'Jl. Batang Hari no 21 A', '6 s/d 10 Juta', 'SK Pegawai', 'PNS', '120', '3-5 Tahun', '0980280121212121', '0980280122354646', '0896734836623632', 'Menikah', '0-3 Orang', 'Baik', 'Diterima', 'Joni Iskandar.');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `login_hash`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
('ak', '17540aef7b8470cc3ea8b2b9046af3b6', 'akademik'),
('ica', '827ccb0eea8a706c4c34a16891f84e7b', 'akademik');
