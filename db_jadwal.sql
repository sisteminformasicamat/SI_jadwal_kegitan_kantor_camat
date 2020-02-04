-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 04:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `no_kegiatan` varchar(20) DEFAULT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no_kegiatan`, `nama_kegiatan`, `tanggal`, `hari`, `jam`, `id`) VALUES
('001/AB/2019', 'Upacara', '2019-08-17', 'Sabtu', '07.30-10.00', 1),
('002/AB/2020', 'Gotong Royong', '2020-01-02', 'Kamis', '09.00-12.00', 2),
('003/AB/2020', 'Rapat Paripurna', '2020-01-03', 'Jum''at', '10.00-12.00', 3),
('004/AB/2020', 'Rapat Penyuluhan Dana', '2020-01-05', 'Minggu', '09.00-11.30', 4),
('005/AB/2020', 'Senam Sehat', '2020-01-06', 'Senin', '07.00-09.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kegiatan` varchar(20) DEFAULT NULL,
  `nama_kegiatan` varchar(50) DEFAULT NULL,
  `pelaksana` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `no_kegiatan`, `nama_kegiatan`, `pelaksana`, `lokasi`, `ket`, `tanggal`) VALUES
(1, '001/AB/2019', 'Upacara', 'Camat', 'Halaman Kantor', 'Pakaian Dinas', '2019-08-17'),
(13, '002/AB/2020', 'Gotong Royong', 'Para Staff', 'Lingkungan Rumah', 'Pakaian bebas dan bawa peralatan', '2020-01-02'),
(14, '003/AB/2019', 'Rapat Paripurna', 'DPRD', 'Ruang Sidang DPRD', 'Pakaian Dinas Lengkap', '2020-01-03'),
(15, '004/AB/2020', 'Rapat Penyuluhan Dana', 'Camat', 'Kantor Camat Air Batu', 'Pakaian Dinas', '2020-01-05'),
(16, '005/AB/2020', 'Senam Sehat', 'Para Staff', 'Halaman Kantor', 'Pakaian Olahraga', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `keterangan`, `level`) VALUES
('staff', '25d55ad283aa400af464c76d713c07ad', 'Putra', 'putra123@gmail.com', 'Staff Kantor', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
