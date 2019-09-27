-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 06:10 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `no` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nm_barang` varchar(25) NOT NULL,
  `satuan_barang` int(11) NOT NULL,
  `harga_barang` int(25) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no`, `kode_barang`, `nm_barang`, `satuan_barang`, `harga_barang`, `gambar`, `deskripsi`) VALUES
(4, 'B001', 'Solder Full Set', 2, 20000, 'kpk2.jpg', 'Mampu Menembuas besi dengan ketebalan yang sedang dan berbagai Jenis kayu'),
(15, 'B002', 'Kunci sok 27 pcs KenMaste', 2, 50000, 'Tukang1.jpg', 'Kunci sok Bukan T-Sok 27 pcs  dari Kenmaster'),
(16, 'B003', 'Weigester', 21, 55000, '0_8fede9d0-167f-4f95-82d0-95adea0c7ff9_2048_0.jpg', 'Kelapa Muda'),
(17, 'B004', 'Gerenda Super', 5, 200000, 'Smpk.jpg', 'Dapat memotong Besi Ketebalan 50mm'),
(18, 'B005', 'Obeng KenMaster', 25, 50000, '9014251.jpg', 'Obeng ukuran 2-25'),
(19, 'B006', 'Pisau Multi-size', 5, 25000, 'Skjmpkask1.jpg', 'Dapat digunkan dalam segala situasi baik saat didapur, di alam, di perjalanan dll');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_berakhir` datetime NOT NULL,
  `jumlah_bayar` int(30) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status` enum('Sudah bayar','Belum bayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `no`, `tanggal`, `tanggal_berakhir`, `jumlah_bayar`, `bukti_transfer`, `status`) VALUES
(197, 17, '2018-08-13 07:05:47', '2018-08-14 07:05:47', 200000, 'polo_chelsea2.png', 'Sudah bayar'),
(198, 15, '2018-08-14 00:22:41', '2018-08-15 00:22:41', 105000, 'P_20161021_143251_PN_1-011.jpg', 'Sudah bayar'),
(199, 16, '2018-08-14 00:22:41', '2018-08-15 00:22:41', 105000, 'P_20161021_143251_PN_1-011.jpg', 'Sudah bayar'),
(200, 15, '2018-08-15 07:42:26', '2018-08-16 07:42:26', 125000, 'adi3.jpg', 'Sudah bayar'),
(201, 19, '2018-08-15 07:42:26', '2018-08-16 07:42:26', 125000, 'adi3.jpg', 'Sudah bayar'),
(202, 18, '2018-08-15 07:42:26', '2018-08-16 07:42:26', 125000, 'adi3.jpg', 'Sudah bayar'),
(203, 15, '2018-08-16 04:42:52', '2018-08-17 04:42:52', 50000, 'polo_chelsea3.png', 'Sudah bayar');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_pembayaran`, `alamat`) VALUES
(131, 0, 'Jl Saariasih no. 50, Bandung, Jawa Barat, Indonesia'),
(132, 0, 'Jl Saariasih no. 511, Bandung, Jawa Barat'),
(133, 0, 'Jl Saariasih no. 57, Bandung, Jawa Barat, Indonesia'),
(134, 0, 'Jl Saariasih no. 56, Bandung, Jawa Barat, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `id_pembayaran` int(20) NOT NULL,
  `nm_pelanggan` varchar(25) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `total_transaksi` int(25) NOT NULL,
  `jumlah_barang` int(25) NOT NULL,
  `email` varchar(70) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `no`, `id_pembayaran`, `nm_pelanggan`, `nm_barang`, `total_transaksi`, `jumlah_barang`, `email`, `no_hp`, `tanggal_transaksi`) VALUES
(171, 17, 197, 'Choiri', 'Gerenda Super', 200000, 1, 'sahabaaatsport99@gmail.com', '081222333444', '2018-08-13 07:05:08'),
(172, 15, 198, 'Salim', 'Kunci sok 27 pcs KenMaste', 105000, 1, 'mwildans97@gmail.com', '081222333444', '2018-08-14 00:22:15'),
(173, 16, 199, 'Salim', 'Weigester', 105000, 1, 'mwildans97@gmail.com', '081222333444', '2018-08-14 00:22:15'),
(174, 15, 200, 'Amiinnn', 'Kunci sok 27 pcs KenMaste', 125000, 1, 'mwildans97@gmail.com', '085855902000', '2018-08-15 07:40:48'),
(175, 19, 200, 'Amiinnn', 'Pisau Multi-size', 125000, 1, 'mwildans97@gmail.com', '085855902000', '2018-08-15 07:40:48'),
(176, 18, 200, 'Amiinnn', 'Obeng KenMaster', 125000, 1, 'mwildans97@gmail.com', '085855902000', '2018-08-15 07:40:48'),
(177, 15, 203, 'Fatakhna Leo', 'Kunci sok 27 pcs KenMaste', 50000, 1, 'mwildans71@gmail.com', '081222333455', '2018-08-16 04:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'wildan Sks', 'wildan', '1234', 'admin'),
(2, 'cholidi Amran', 'cholidi', '12345', 'pemilik'),
(3, 'Asnaban', 'Aska', '1234', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
