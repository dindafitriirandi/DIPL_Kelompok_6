-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 04:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usernameAdmin` varchar(50) NOT NULL,
  `passwordAdmin` varchar(50) NOT NULL,
  `idAdmin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `imageKost` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakost`
--

INSERT INTO `datakost` (`idKost`, `namaKost`, `totalKost`, `alamatKost`, `fasilitasKost`, `hargaKost`, `imageKost`) VALUES
(1, 'Kost Annisa', 4, 'Jl. Sukabirus No.11A', 'Kasur - Lemari - Meja belajar - Kamar mandi dalam - Parkiran - Dapur bersama', 8000000, ''),
(2, 'Kost Rumah Daun', 8, 'Jl. Sukabirus No. 8 ', 'Dapur umum, gerbang 24 jam, kamar mandi dalam, parkiran luas.', 9000000, ''),
(3, 'Kost Rafflesia', 6, 'Jl. Sukapura No.17 B', 'AC - Kamar mandi dalam - Kasur spring bed - Dapur umum', 12000000, ''),
(4, 'Kost Putra', 4, 'JL. PGA Timur No.19U', 'Kamar mandi dalam - lemari baju - kasur - gerbang 24 jam', 7000000, ''),
(5, 'Kost BlacknWhite', 12, 'Jl. Bojongsoang Barat No.17F', 'Kamar mandi dalam - AC - Dapur bersama - Ruang belajar bersama - Kulkas bersama - Gerbang 24/7', 10000000, ''),
(6, 'Kost Sedjuk', 5, 'Jl. Radio Dalam 3 No. 5A', 'AC - Water heater - Kasur dipan - Meja belajar - Lemari - Dapur umum - Gerbang 24/7', 12000000, ''),
(7, 'Kost Gallan', 4, 'Jl. H.Umar No.12B', 'AC - Kasur - Lemari - Water heater - Parkiran - Gerbang 24/7', 7000000, ''),
(8, 'Kost Rumah DaunAPAA', 0, 'SFASAA', 'AC - Kasur - Lemari - Water heater - Parkiran - Gerbang 24/7', 9000000, ''),
(10, 'Kost GallanVFDVD', 7, 'GHFN', 'AC - Kasur - Lemari - Water heater - Parkiran - Gerbang 24/7', 12000000, ''),
(11, 'Kost Putravdvdsvsv', 2, 'vdfbdb', 'Dapur umum, gerbang 24 jam, kamar mandi dalam, parkiran luas.', 11000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanankost`
--

CREATE TABLE `pemesanankost` (
  `idPemesanan` int(20) NOT NULL,
  `namaPencari` varchar(50) NOT NULL,
  `waktuPemesanan` datetime(6) NOT NULL,
  `namaKost` varchar(50) NOT NULL,
  `hargaKost` int(15) NOT NULL,
  `alamatKost` varchar(100) NOT NULL,
  `statusPemesanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilikkost`
--

CREATE TABLE `pemilikkost` (
  `idPemilikKost` int(10) NOT NULL,
  `noKtp` int(20) NOT NULL,
  `namaPemilik` varchar(50) NOT NULL,
  `noPemilik` int(20) NOT NULL,
  `alamatPemilik` varchar(50) NOT NULL,
  `usernamePemilik` varchar(50) NOT NULL,
  `passwordPemilik` varchar(50) NOT NULL,
  `emailPemilik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `nohp`, `alamat`, `email`, `username`, `password`, `birth_date`, `level`) VALUES
(0, 'Rahman', '081298203000', 'Jl. Bali Raya No.14', 'rahman@gmail.com', 'rahman', '123', '0000-00-00', 'pencari'),
(1, 'ABC', '081298301025', 'Jl. MatramanB', 'agneszahr@gmail.com', '123', '123', '0000-00-00', 'pemilik'),
(2, 'Admin', '0812787750', 'Jl. Sukapura No.9', 'admin@gmail.com', 'admin', 'admin', '1998-04-02', 'admin'),
(3, 'Chelsie Monica', '0822830274', 'Jl. Soedirman no 3A', 'chelsie@gmail.com', 'chelsiemonica', 'chelsie123', '1997-10-02', ''),
(4, 'Rachel Venya', '0822876392', 'Jl. Riau no 28B', 'rachel@gmail.com', 'rachelvenya', 'rachel123', '2000-01-23', ''),
(5, 'Anya Geraldine', '0812383927', 'Jl. Soekarno Hatta no 12C', 'anya@gmail.com', 'anyageral', 'anya123', '1999-11-04', ''),
(6, 'Rosmelina', '0822800000', 'Jl. Ahmad Yani 3', 'rosmel@gmail.com', 'rosmel', 'rosmel', '2000-01-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakost`
--
ALTER TABLE `datakost`
  ADD PRIMARY KEY (`idKost`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
