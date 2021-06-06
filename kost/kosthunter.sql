-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 02:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosthunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakost`
--

CREATE TABLE `datakost` (
  `idKost` int(20) NOT NULL,
  `namaKost` varchar(50) NOT NULL,
  `totalKost` int(10) NOT NULL,
  `alamatKost` varchar(100) NOT NULL,
  `fasilitasKost` varchar(100) NOT NULL,
  `hargaKost` int(15) NOT NULL,
  `imageKost` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakost`
--

INSERT INTO `datakost` (`idKost`, `namaKost`, `totalKost`, `alamatKost`, `fasilitasKost`, `hargaKost`, `imageKost`, `user_id`, `created_at`) VALUES
(12, 'Kost Annisa', 10, 'Jl H. Umar', '24 jam, AC, kamar mandi dalam, water heater', 700000, 0x312e6a7067, 2, '2021-06-06'),
(14, 'Kost Rafflesia', 12, 'Jalan Sukapura 3 No.15C', 'Kamar mandi dalam, water heater, kasur, lemari, parkiran.', 850000, 0x6b6f7374526166666c657369612e6a7067, 2, '2021-06-06'),
(16, 'Kost Rumah Daun', 10, 'Jalan Bojongsoang III No. 19B', 'AC, kamar mandi dalam, kasur, lemari, dapur umum, parkiran.', 900000, 0x6b6f7374416e616e6461312e6a7067, 2, '2021-06-06'),
(17, 'Kost Putra', 8, 'Jalan. PGA Timur No.19U', 'Kamar mandi dalam - lemari baju - kasur - gerbang 24 jam.', 700000, 0x6b6f737450757472612e6a7067, 2, '2021-06-06'),
(20, 'Kost BlacknWhite', 5, 'Jl. Bojongsoang Barat No.17F', 'Kamar mandi dalam - AC - Dapur bersama - Ruang belajar bersama - Kulkas bersama - Gerbang 24/7', 800000, 0x6b6f737447616c6c616e312e6a7067, 4, '2021-06-06'),
(23, 'Kost Rumah Strawberry', 3, 'Jl. Radio Dalam 3 No. 5A', 'AC, water heater, kasur dipan, meja belajar, lemari, dapur umum, gerbang 24/7.', 750000, 0x6b6f7374416e6e697361312e6a7067, 4, '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanankost`
--

CREATE TABLE `pemesanankost` (
  `idPemesanan` int(20) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `duration` int(11) NOT NULL,
  `totalHargaKost` int(11) NOT NULL,
  `statusPemesanan` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kost_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanankost`
--

INSERT INTO `pemesanankost` (`idPemesanan`, `startDate`, `endDate`, `duration`, `totalHargaKost`, `statusPemesanan`, `paymentMethod`, `reason`, `user_id`, `kost_id`, `created_at`) VALUES
(0, '2021-06-16', '2021-09-16', 3, 21055000, 'Booked', 'dana', 'I ordered for personal', 1, 12, '2021-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `level` varchar(20) NOT NULL,
  `usercreated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `nohp`, `alamat`, `email`, `username`, `password`, `birth_date`, `level`, `usercreated_at`) VALUES
(1, 'dinda', '08293039029', 'Jalan Riau Timur No.9C', 'dinda@gmail.com', 'dinda', 'dindaa', '2021-06-05', 'pencari', '2021-06-06'),
(2, 'Agnes', '082829929', 'Jalan Matraman', 'agnes@gmail.com', 'agnes', 'agnes', '1999-03-02', 'pemilik', '2021-06-06'),
(3, 'Admin', '081298301025', 'Jl. Matraman', 'admin@gmail.com', 'admin', 'admin', '1999-01-01', 'pemilik', '2021-06-06'),
(4, 'Ihza', '081298203000', 'Jalan Radio Dalam III', 'ihza@gmail.com', 'ihza', 'ihza', '1998-01-15', 'pemilik', '2021-06-06'),
(5, 'Rosmelina', '081298113999', 'Jalan Riau No.42', 'rosmel@gmail.com', 'rosmel', 'rosmel', '1998-10-14', 'pencari', '2021-06-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakost`
--
ALTER TABLE `datakost`
  ADD PRIMARY KEY (`idKost`),
  ADD KEY `datakost_ibfk_1` (`user_id`);

--
-- Indexes for table `pemesanankost`
--
ALTER TABLE `pemesanankost`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `pemesanankost_ibfk_3` (`user_id`),
  ADD KEY `pemesanankost_ibfk_2` (`kost_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakost`
--
ALTER TABLE `datakost`
  MODIFY `idKost` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanankost`
--
ALTER TABLE `pemesanankost`
  ADD CONSTRAINT `pemesanankost_ibfk_2` FOREIGN KEY (`kost_id`) REFERENCES `datakost` (`idKost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
