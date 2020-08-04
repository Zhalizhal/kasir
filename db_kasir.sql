-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 01:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(20) NOT NULL,
  `nama` char(30) NOT NULL,
  `username` char(30) NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  `foto_profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `password`, `level`, `foto_profil`) VALUES
(1, 'NOURA FAMILY', 'aqila', 'admin', 'admin', 'profile.jpg'),
(2, 'Baharuddin Izha Al S', 'bahar', 'admin', 'admin', 'izal.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(30) NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(30) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `dekripsi_barang` text NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `id_kategori`, `nama_barang`, `harga_barang`, `foto_barang`, `dekripsi_barang`, `stok`) VALUES
('KB001', 1, 'Segitiga Biru 1Kg', 20000, 'tepung-segitiga-biru.jpg', 'Bogasari', 20),
('KB002', 1, 'Kunci Biru 1Kg', 20000, 'kuncibiru.jpg', 'Bogasari', 29),
('KB003', 1, 'Cakra Kembar 1Kg', 20000, 'cakrakembar.jpg', 'Bogasari', 93),
('KB004', 1, 'Kawan Baru 1Kg', 15000, 'kawanbaru.png', 'Kawan Baru', 42),
('KB005', 1, 'Mila 1Kg', 20000, 'mila.jpg', 'Mila', 45),
('KB006', 1, 'Tapioka 500gr', 10000, 'tapiokagunung.jpg', 'Gunung Agung', 97),
('KB007', 1, 'Tapioka 500gr', 15000, 'tapiokasagutani.png', 'Sagu Tani', 45),
('KB008', 1, 'Maizenaku 100gr', 5000, 'maizenaku.webp', 'Maizenaku', 49),
('KB009', 1, 'Ketan Putih', 15000, 'ketanputihrosebrand.jpg', 'Rose Brand', 10),
('KB010', 1, 'Beras Putih 500gr', 20000, 'berasputihrosebrand.jpg', 'Rose Brand', 10),
('KB011', 1, 'Tapioka', 20000, 'tapiokarosebrand.jpg', 'Rose Brand', 10),
('KB012', 1, 'Beras Putih', 15000, 'tepungberas.jpg', 'Aromanis', 10),
('KB013', 2, 'forVITA 200gr', 10000, 'forVITA.jpg', 'Margarin ', 10),
('KB014', 2, 'Blueband cake&cookies 200gr', 10000, 'Blueband_Cook_and_Cookies_200_gr.jpg', 'Blueband', 10),
('KB015', 2, 'Blueband Serbaguna 200gr', 10000, 'blueband.jpg', 'Blueband', 10),
('KB016', 2, 'Palmia Serbaguna 200gr', 10000, 'palmiaserbaguna.jpg', 'Palmia', 10),
('KB017', 2, 'Palmia Royal 200gr', 10000, 'palmiaroyal.jpg', 'Palmia', 10),
('KB018', 2, 'Medalia Putih 250gr', 10000, '', 'Medalian', 10),
('KB019', 2, 'Simas 250gr', 10000, '', 'Simas', 10),
('KB020', 2, 'Bakeria 250gr', 10000, '', 'Bakeria', 10),
('KB021', 2, 'Blueband 250gr', 10000, '', 'Blueband kiloan', 10),
('KB022', 3, 'Vanbos\'pail 250gr', 30000, '', 'Vambos\'pail butter', 0),
('KB023', 3, 'Wisman 250gr', 75000, '', 'Wisman butter', 10),
('KB024', 4, 'Kuning Tua', 5000, '', 'Pewarna', 10),
('KB025', 4, 'Kuning Muda', 5000, '', 'Pewarna', 10),
('KB026', 4, 'Hijau Tua', 5000, '', 'Pewarna', 10),
('KB027', 4, 'Hijau Muda', 5000, '', 'Pewarna', 10),
('KB028', 4, 'Hitam', 5000, '', 'Pewarna', 10),
('KB030', 4, 'Merah Rose', 5000, '', 'Pewarna', 10),
('KB031', 4, 'Merah Cabe', 5000, '', 'Pewarna', 10),
('KB032', 4, 'Merah Tua', 5000, '', 'Pewarna', 10),
('KB033', 4, 'Oranye', 5000, '', 'Pewarna', 10),
('KB034', 4, 'Ungu', 5000, '', 'Pewarna', 10),
('KB035', 4, 'Cokelat', 5000, '', 'Pewarna', 10),
('KB036', 4, 'Putih', 5000, '', 'Pewarna', 10),
('KB037', 5, 'Santan', 10000, '', 'Pasta', 10),
('KB038', 5, 'Stroberi', 10000, '', 'Pasta', 10),
('KB039', 5, 'Vanilla', 10000, '', 'Pasta', 10),
('KB040', 5, 'Pandan', 10000, '', 'Pasta', 10),
('KB041', 5, 'Pisang Ambon', 10000, '', 'Pasta', 10),
('KB042', 5, 'Leci', 10000, '', 'Pasta', 10),
('KB043', 5, 'Kopi Moka', 10000, '', 'Pasta', 10),
('KB044', 5, 'Moka', 10000, '', 'Pasta', 10),
('KB045', 5, 'Anggur', 10000, '', 'Pasta', 10),
('KB046', 5, 'Cocopandan', 10000, '', 'Pasta', 10),
('KB047', 5, 'Cokelat', 10000, '', 'Pasta', 10),
('KB048', 5, 'Es Doger', 10000, '', 'Pasta', 10),
('KB049', 5, 'Alpukat', 10000, '', 'Pasta', 10),
('KB050', 5, 'Cokelat Wilton', 10000, '', 'Pasta', 10),
('KB051', 6, 'ELMER', 10000, '', 'Messes', 10),
('KB052', 6, 'HOLLAND', 10000, '', 'Messes', 10),
('KB053', 6, 'GOGO', 10000, '', 'Messes', 10),
('KB054', 6, 'DUNIA', 10000, '', 'Messes', 10),
('KB055', 6, 'PARROT', 10000, '', 'Messes', 10),
('KB056', 6, 'SPUTNIK', 10000, '', 'Messes', 10),
('KB057', 7, 'Mercolade', 15000, '', 'Cokelat Compound', 10),
('KB058', 7, 'Collata', 15000, '', 'Cokelat Compound', 10),
('KB059', 7, 'Permata Cokelat', 15000, '', 'Cokelat Compound', 10),
('KB060', 7, 'Permata Vanilla', 15000, '', 'Cokelat Compound', 10),
('KB061', 7, 'Permata Strawberry', 15000, '', 'Cokelat Compund', 10),
('KB062', 7, 'Permata Grape', 15000, '', 'Cokelat Compund', 10),
('KB063', 7, 'Permata Lemon', 15000, '', 'Cokelat Compund', 10),
('KB064', 7, 'Kiss', 15000, '', 'Cokelat Compund', 10),
('KB065', 7, 'Virgo', 15000, '', 'Cokelat Compund', 10),
('KB066', 7, 'Diana', 15000, '', 'Cokelat Compund', 10),
('KB067', 7, 'Chefmate Stick', 15000, '', 'Cokelat Compund', 10),
('KB068', 7, 'Dunia', 15000, '', 'Cokelat Compund', 10),
('KB069', 7, 'RM (Parrot)', 15000, '', 'Cokelat Compund', 9),
('KB070', 8, 'Tulip', 20000, '', 'Cokelat Bubuk', 8),
('KB071', 8, 'Vanhoutten', 20000, '', 'Cokelat Bubuk', 10),
('KB072', 8, 'Bensdrop', 20000, '', 'Cokelat Bubuk', 10),
('KB073', 8, 'Cocoa', 20000, '', 'Cokelat Bubuk', 10),
('KB074', 9, 'SP Kupu-Kupu', 5000, '', 'Pengembang', 10),
('KB075', 9, 'BP Kupu-Kupu', 5000, '', 'Pengembang', 10),
('KB076', 9, 'Vx Kupu-Kupu', 5000, '', 'Pengembang', 10),
('KB077', 9, 'Spekoek Kupu-Kupu', 5000, '', 'Pengembang', 10),
('KB078', 9, 'Cream of Tartar', 10000, '', 'Pengembang', 10),
('KB079', 9, 'SP Raja Kupu', 10000, '', 'Pengembang', 10),
('KB080', 10, 'SP Kupu-Kupu', 10000, '', 'Pelembut', 10),
('KB081', 10, 'TBM Kupu-Kupu', 10000, '', 'Pelembut', 10),
('KB082', 10, 'Ovalet Kupu-Kupu', 10000, '', 'Pelembut', 10),
('KB083', 10, 'SPONTAN SCS BIRU (Vanilla)', 10000, '', 'Pelembut', 10),
('KB084', 10, 'SPONTAN SCS MERAH (Wysman)', 10000, '', 'Pelembut', 10),
('KB085', 10, 'Perisa Kupu-Kupu', 10000, '', 'Pelembut', 10),
('KB086', 10, 'Larome Perisa', 10000, '', 'Pelembut', 10),
('KB087', 11, 'Ibish', 20000, '', 'Ragi', 10),
('KB088', 11, 'Mauripan', 20000, '', 'Ragi', 10),
('KB089', 11, 'Fermipan', 20000, '', 'Ragi', 10),
('KB090', 11, 'Saf-Instanbakeria', 20000, '', 'Ragi', 10),
('KB091', 11, 'Angel', 20000, '', 'Ragi', 10),
('KB092', 11, 'Baker Bonus A', 20000, '', 'Ragi', 10),
('KB093', 12, 'BLACKFOREST OVEN', 20000, '', 'Pondan', 10),
('KB094', 12, 'BLACKFOREST KUKUS', 20000, '', 'Pondan', 10),
('KB095', 12, 'SPONGE CAKE MIX', 20000, '', 'Pondan', 10),
('KB096', 12, 'WHIP CREAM', 20000, '', 'Pondan', 10),
('KB097', 12, 'BROWNIES KUKUS', 20000, '', 'Pondan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(30) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Tepung'),
(2, 'Margarin'),
(3, 'Butter'),
(4, 'Pewarna'),
(5, 'Pasta'),
(6, 'Meses'),
(7, 'Cokelat Compound'),
(8, 'Cokelat Bubuk'),
(9, 'Pengembang'),
(10, 'Pelembut'),
(11, 'Ragi'),
(12, 'Pondan');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(20) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(30) NOT NULL,
  `uang` int(30) NOT NULL,
  `kembalian` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal_pembelian`, `total_pembelian`, `uang`, `kembalian`) VALUES
(1, '2020-05-03', 33500, 0, 0),
(2, '2020-05-03', 17000, 0, 0),
(3, '2020-05-03', 2000, 0, 0),
(4, '2020-05-01', 50000, 0, 0),
(5, '2020-05-03', 23500, 0, 0),
(6, '2020-05-05', 3500, 0, 0),
(7, '2020-05-05', 2000, 0, 0),
(8, '2020-05-05', 20000, 0, 0),
(9, '2020-05-05', 5000, 0, 0),
(10, '2020-05-05', 3000, 0, 0),
(11, '2020-05-05', 25000, 0, 0),
(12, '2020-05-05', 100000, 0, 0),
(13, '2020-05-05', 0, 0, 0),
(14, '2020-05-05', 18500, 0, 0),
(15, '2020-05-05', 3500, 0, 0),
(16, '2020-05-05', 100000, 0, 0),
(17, '2020-05-05', 2000, 0, 0),
(18, '2020-05-05', 3500, 0, 0),
(19, '2020-05-05', 3000, 0, 0),
(20, '2020-05-05', 0, 0, 0),
(21, '2020-05-05', 3000, 0, 0),
(22, '2020-05-05', 0, 0, 0),
(23, '2020-05-05', 20000, 0, 0),
(24, '2020-05-05', 0, 0, 0),
(25, '2020-05-05', 15000, 0, 0),
(26, '2020-05-05', 0, 0, 0),
(27, '2020-05-05', 15000, 0, 0),
(28, '2020-05-05', 0, 0, 0),
(29, '2020-05-05', 15000, 0, 0),
(30, '2020-05-05', 3500, 0, 0),
(31, '2020-05-05', 20000, 0, 0),
(32, '2020-05-05', 5000, 0, 0),
(33, '2020-05-05', 0, 0, 0),
(34, '2020-05-05', 5000, 0, 0),
(35, '2020-05-05', 2000, 0, 0),
(36, '2020-05-05', 0, 0, 0),
(37, '2020-05-05', 3000, 0, 0),
(38, '2020-05-05', 2000, 0, 0),
(39, '2020-05-05', 2000, 0, 0),
(40, '2020-05-05', 2000, 0, 0),
(41, '2020-05-05', 2000, 0, 0),
(42, '2020-05-05', 2000, 0, 0),
(43, '2020-05-05', 2000, 0, 0),
(44, '2020-05-05', 2000, 0, 0),
(45, '2020-05-05', 2000, 0, 0),
(46, '2020-05-05', 2000, 0, 0),
(47, '2020-05-05', 2000, 0, 0),
(48, '2020-05-05', 28500, 0, 0),
(49, '2020-05-05', 100000, 0, 0),
(50, '2020-05-05', 5000, 0, 0),
(51, '2020-05-10', 40000, 0, 0),
(52, '2020-05-13', 55000, 0, 0),
(53, '2020-05-13', 60000, 0, 0),
(54, '2020-05-13', 20000, 0, 0),
(55, '2020-05-19', 30000, 0, 0),
(56, '2020-05-19', 20000, 0, 0),
(57, '2020-05-21', 75000, 0, 0),
(58, '2020-05-21', 20000, 0, 0),
(59, '2020-05-21', 15000, 0, 0),
(60, '2020-05-21', 40000, 0, 0),
(61, '2020-05-21', 60000, 0, 0),
(62, '2020-05-21', 40000, 0, 0),
(63, '2020-05-21', 40000, 0, 0),
(64, '2020-05-21', 15000, 0, 0),
(65, '2020-05-21', 20000, 30000, 0),
(66, '2020-05-21', 80000, 100000, 20000),
(67, '2020-05-22', 20000, 80000, 60000),
(68, '2020-05-22', 20000, 30000, 10000),
(69, '2020-05-22', 20000, 30000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_barang`
--

CREATE TABLE `pembelian_barang` (
  `id_pembelian_barang` int(11) NOT NULL,
  `id_pembelian` int(20) NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(30) NOT NULL,
  `subharga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_barang`
--

INSERT INTO `pembelian_barang` (`id_pembelian_barang`, `id_pembelian`, `kode_barang`, `jumlah`, `nama_barang`, `harga_barang`, `subharga`) VALUES
(1, 1, 'KB008', 1, 'Mayumi', 5000, 5000),
(2, 1, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(3, 1, 'KB004', 1, 'Le Mineral', 5000, 5000),
(4, 1, 'KB005', 1, 'gelas', 20000, 20000),
(5, 2, 'KB001', 2, 'Indomi Goreng Pedas', 3500, 7000),
(6, 2, 'KB004', 2, 'Le Mineral', 5000, 10000),
(7, 3, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(8, 5, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(9, 5, 'KB004', 1, 'Le Mineral', 5000, 5000),
(10, 5, 'KB007', 1, 'Tepung Terigu Segitiga Biru', 15000, 15000),
(11, 6, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(12, 7, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(13, 8, 'KB005', 1, 'gelas', 20000, 20000),
(14, 9, 'KB008', 1, 'Mayumi', 5000, 5000),
(15, 10, 'KB003', 1, 'French fries', 3000, 3000),
(16, 11, 'KB004', 1, 'Le Mineral', 5000, 5000),
(17, 11, 'KB005', 1, 'gelas', 20000, 20000),
(18, 12, 'KB006', 1, 'Genteng', 100000, 100000),
(19, 14, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(20, 14, 'KB007', 1, 'Tepung Terigu Segitiga Biru', 15000, 15000),
(21, 15, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(22, 16, 'KB006', 1, 'Genteng', 100000, 100000),
(23, 17, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(24, 18, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(25, 19, 'KB003', 1, 'French fries', 3000, 3000),
(26, 21, 'KB003', 1, 'French fries', 3000, 3000),
(27, 23, 'KB005', 1, 'gelas', 20000, 20000),
(28, 25, 'KB007', 1, 'Tepung Terigu Segitiga Biru', 15000, 15000),
(29, 27, 'KB007', 1, 'Tepung Terigu Segitiga Biru', 15000, 15000),
(30, 29, 'KB007', 1, 'Tepung Terigu Segitiga Biru', 15000, 15000),
(31, 30, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(32, 31, 'KB005', 1, 'gelas', 20000, 20000),
(33, 32, 'KB004', 1, 'Le Mineral', 5000, 5000),
(34, 34, 'KB004', 1, 'Le Mineral', 5000, 5000),
(35, 35, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(36, 37, 'KB003', 1, 'French fries', 3000, 3000),
(37, 38, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(38, 39, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(39, 40, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(40, 41, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(41, 42, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(42, 43, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(43, 44, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(44, 45, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(45, 46, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(46, 47, 'KB002', 1, 'Masako Ayam', 2000, 2000),
(47, 48, 'KB001', 1, 'Indomi Goreng Pedas', 3500, 3500),
(48, 48, 'KB004', 1, 'Le Mineral', 5000, 5000),
(49, 48, 'KB005', 1, 'gelas', 20000, 20000),
(50, 49, 'KB006', 1, 'Genteng', 100000, 100000),
(51, 50, 'KB008', 1, 'Mayumi', 5000, 5000),
(52, 51, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(53, 51, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(54, 52, 'KB069', 1, 'RM (Parrot)', 15000, 15000),
(55, 52, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(56, 52, 'KB010', 1, 'Beras Putih 500gr', 20000, 20000),
(57, 53, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(58, 53, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(59, 53, 'KB003', 1, 'Cakra Kembar 1Kg', 20000, 20000),
(60, 54, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(61, 56, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(62, 57, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(63, 57, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(64, 57, 'KB003', 1, 'Cakra Kembar 1Kg', 20000, 20000),
(65, 57, 'KB004', 1, 'Kawan Baru 1Kg', 15000, 15000),
(66, 58, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(67, 59, 'KB004', 1, 'Kawan Baru 1Kg', 15000, 15000),
(68, 60, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(69, 60, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(70, 61, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(71, 61, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(72, 61, 'KB003', 1, 'Cakra Kembar 1Kg', 20000, 20000),
(80, 62, 'KB001', 2, 'Segitiga Biru 1Kg', 20000, 40000),
(82, 63, 'KB001', 2, 'Segitiga Biru 1Kg', 20000, 40000),
(83, 64, 'KB004', 1, 'Kawan Baru 1Kg', 15000, 15000),
(84, 65, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(85, 66, 'KB001', 4, 'Segitiga Biru 1Kg', 20000, 80000),
(86, 67, 'Kb070', 1, 'Tulip', 20000, 20000),
(87, 68, 'Kb070', 1, 'Tulip', 20000, 20000),
(88, 69, 'kb002', 1, 'Kunci Biru 1Kg', 20000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD PRIMARY KEY (`id_pembelian_barang`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  MODIFY `id_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD CONSTRAINT `pembelian_barang_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
