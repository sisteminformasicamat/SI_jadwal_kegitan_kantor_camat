-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 03:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `no_kegiatan` varchar(20) NULL,
  `nama_kegiatan` varchar(50) NULL,
  `pelaksana` varchar(50) NULL,
  `lokasi` varchar(50) NULL,
  `ket` varchar(50) NULL,
  `tanggal` date NOT NULL,
  
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `no_kegiatan`, `nama_kegiatan`, `pelaksana`, `lokasi`, `ket`, `tanggal`) VALUES
(1, '001/AB/2020', 'Upacara', 'Camat', 'Lapangan Olahraga', 'Pakaian Olahraga', '2020-01-01'),
(2, '002/AB/2020', 'Gotong Royong', 'Kepling', 'Lingkungan Rumah',  'Pakaian Bebas', '2020-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jacwal` (
  `no_kegiatan` varchar(20) NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(20) NOT NULL,
  'id' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jacwal` (`no_kegiatan`, `tanggal`, `hari`, `jam`, 'id') VALUES
('001/AB/2020', '2020-01-01', 'Rabu', '08.00-10.00'),
('002/AB/2020', '2020-01-04', 'Sabtu', '09.00-12.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  'level' varchar (15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`,  `email`, `keterangan`, 'level') VALUES
('staff', '12345678', 'Putra', 'putra123@gmail.com', 'Staff Kantor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kegiatan` (`no_kegiatan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jacwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jacwal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
