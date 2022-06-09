-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 08:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `deskripsi_barang`, `gambar`) VALUES
(32, 'Scarlett Body Care', 120000, 'Mengatasi masalah kulit kusam, kering, sensitif, dan lainnya', '62a09a0fd9ff2bodycares.png'),
(33, 'Scarlett Hair Care', 120000, 'Mengatasi masalah rambut lepek/berminyak, ketombean, rambut rontok dan lainnya', '629d85d3d3de3haircares.png'),
(34, 'Scarlett Face Care', 120000, 'Mengatasi masalah masalah seperti wajah berjerawat, kulit wajah kusam, noda/flek hitam yang susah hilang, dan lainnya', '629d85e286b4dfacecares.png'),
(39, 'Jacket Ultra Light Uniqlo x Theory', 899000, 'Jaket performa tinggi untuk Wanita dengan desain stylish dari Theory. Dikarenakan produk dilipat dalam kardus saat pengiriman, mungkin terdapat kerutan pada produk. Silakan gunakan setrika untuk mengurangi kerut (terkait metode penyetrikaan, silakan mengecek pada care label).', '62a0563f04728Uniqlo x Theory.png'),
(40, 'MEN Kemeja Extra Fine Cotton Broadcloth Kerah Tegak', 399000, 'Kemeja Pria dengan kelembutan 100% katun premium.', '62a05803a3ef9Fine Cotton.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `role` enum('pelanggan','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_admin`, `user_admin`, `pass_admin`, `role`) VALUES
(1, 'Admin', 'admin', '$2y$10$NPscBgDf2uHrKNTa/sv3TujIxQ.LXid.XrVG74MgUd.82RNXtEmom', 'admin'),
(2, 'User', 'user', '$2y$10$3iubFmh34aYz5rGc2rxdm.ysLFzquM1SvulYUEQ6AxqMscdL473fS', 'pelanggan'),
(3, 'Testing', 'testing', '$2y$10$wVJRYUdTXFORnOnZBoBfmeB4kJ9XcokQJgguxy8gw.U1SdnqglZqG', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);
ALTER TABLE `barang` ADD FULLTEXT KEY `deskripsi_barang` (`deskripsi_barang`);

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
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
