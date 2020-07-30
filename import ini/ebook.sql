-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 05:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin@gmail.com', '123'),
('zauqi09@gmail.com', 'cecepno9');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `kodebuku` varchar(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `cover` varchar(20) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`kodebuku`, `judul`, `kategori`, `harga`, `cover`, `pdf`) VALUES
('cf1', 'Peter Pan', 'cfb', 50000, 'peter.jpg', 'Peter Pan.pdf'),
('fan1', 'Harry Potter ', 'fanb', 100000, 'harry.jpg', 'Harry Potter and the Sorcerers Stone.pdf'),
('mys1', 'The Woman in White', 'mysb', 50000, 'thewoman.jpg', 'Wilkie+Collins+-+The+Woman+in+White.epub'),
('rom1', 'Hujan Bulan Juni', 'romb', 100000, 'hujan.jpg', 'Sapardi DJoko Damono-Hujan Bulan Juni.pdf'),
('scif1', 'The Martian', 'scib', 100000, 'themartian.jpg', 'The Martian.epub');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `idmsg` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`idmsg`, `nama`, `email`, `message`) VALUES
('7PY1YTjhZ1', 'Fuad Zauqi Nur', 'zauqi09@gmail.com', 'aku ganteng ga kak?');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan`
--

CREATE TABLE `kepemilikan` (
  `id` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kodebuku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepemilikan`
--

INSERT INTO `kepemilikan` (`id`, `email`, `kodebuku`) VALUES
('gf2vmWPM', 'a@gmail.com', 'scif1'),
('I3cR070F', 'zauqi09@gmail.com', 'cf1'),
('keFG0Cp7', 'a@gmail.com', 'cf1'),
('LJ7u39AL', 'a@gmail.com', 'mys1'),
('VAcM7sBC', 'a@gmail.com', 'rom1');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodepembayaran` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bukti` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kodepembayaran`, `email`, `bukti`) VALUES
('GvG9qU73dk', 'a@gmail.com', 'peter.jpg'),
('hUulKDCT8W', 'a@gmail.com', '27a7013b8464c42172ab57b21');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kodepemesanan` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kodebuku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kodepemesanan`, `email`, `kodebuku`) VALUES
('wal0X4VA', 'a@gmail.com', 'fan1');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `confirmpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `nama`, `pass`, `confirmpass`) VALUES
('a@gmail.com', 'aa', '123', '123'),
('zauqi09@gmail.com', 'Fuad Zauqi Nur', 'cecepno9', 'cecepno9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`kodebuku`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`idmsg`);

--
-- Indexes for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `kepemilikan_ibfk_2` (`kodebuku`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodepembayaran`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kodepemesanan`),
  ADD KEY `email` (`email`),
  ADD KEY `kodebuku` (`kodebuku`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kepemilikan`
--
ALTER TABLE `kepemilikan`
  ADD CONSTRAINT `kepemilikan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`),
  ADD CONSTRAINT `kepemilikan_ibfk_2` FOREIGN KEY (`kodebuku`) REFERENCES `catalog` (`kodebuku`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`kodebuku`) REFERENCES `catalog` (`kodebuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
