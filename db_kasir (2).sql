-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 09:06 AM
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
(1, 'NOURA FAMILY', 'noura', 'admin', 'admin', 'profile.jpg'),
(2, 'Baharuddin Izha Al S.', 'bahar', 'admin', 'admin', 'izal.jpeg'),
(6, 'joang', 'jo', 'jo', 'admin', ''),
(7, 'uud', 'uud', 'uud', 'admin', ''),
(8, 'rida', 'rida', 'rida', 'admin', '');

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
('KB001', 1, 'Segitiga Biru 1Kg', 20000, 'tepung-segitiga-biru.jpg', 'Bogasari', 6),
('KB002', 1, 'Kunci Biru 1Kg', 20000, 'kuncibiru.jpg', 'Bogasari', 20),
('KB003', 1, 'Cakra Kembar 1Kg', 20000, 'cakrakembar.jpg', 'Bogasari', 93),
('KB004', 1, 'Kawan Baru 1Kg', 15000, 'kawanbaru.png', 'Kawan Baru', 41),
('KB005', 1, 'Mila 1Kg', 20000, 'mila.jpg', 'Mila', 44),
('KB006', 1, 'Tapioka 500gr', 10000, 'tapiokagunung.jpg', 'Gunung Agung', 97),
('KB007', 1, 'Tapioka 500gr', 15000, 'tapiokasagutani.png', 'Sagu Tani', 45),
('KB008', 1, 'Maizenaku 100gr', 5000, 'maizenaku.webp', 'Maizenaku', 49),
('KB009', 1, 'Ketan Putihh', 15000, 'ketanputihrosebrand.jpg', 'Rose Brand', 10),
('KB010', 1, 'Beras Putih 500gr', 20000, 'berasputihrosebrand.jpg', 'Rose Brand', 9),
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
('KB069', 1, 'RM (Parrot)', 15000, '', 'Cokelat Compund', 10),
('KB070', 8, 'Tulip', 20000, '', 'Cokelat Bubuk', 10),
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
(1, 'Tepungg'),
(2, 'Margarin'),
(3, 'butter'),
(4, 'Pewarna'),
(5, 'Pasta'),
(6, 'Meses'),
(7, 'Cokelat Compound'),
(8, 'Cokelat Bubuk'),
(9, 'Pengembang'),
(10, 'Pelembut'),
(11, 'Ragi'),
(12, 'Pondan'),
(13, 'air'),
(14, 'tepung 1/4');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `caption` text NOT NULL,
  `foto` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `caption`, `foto`) VALUES
(1, 'ngeluuu bosss', '1GY.JPG'),
(6, 'haha hihih', '2.PNG');

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
(1, '2020-06-17', 20000, 50000, 30000),
(2, '2020-06-19', 20000, 0, -20000),
(3, '2020-06-19', 20000, 50000, 30000),
(4, '2020-06-19', 40000, 0, -40000),
(5, '2020-06-19', 60000, 100000, 40000),
(6, '2020-09-02', 55000, 100000, 45000),
(7, '2020-09-02', 140000, 150000, 10000),
(8, '2020-09-07', 40000, 50000, 10000),
(9, '2020-09-07', 20000, 30000, 10000);

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
(1, 1, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(2, 2, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(3, 3, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(4, 4, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(5, 4, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(6, 5, 'KB001', 3, 'Segitiga Biru 1Kg', 20000, 60000),
(7, 6, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(8, 6, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000),
(9, 6, 'KB004', 1, 'Kawan Baru 1Kg', 15000, 15000),
(10, 7, 'KB001', 1, 'Segitiga Biru 1Kg', 20000, 20000),
(11, 7, 'KB002', 4, 'Kunci Biru 1Kg', 20000, 80000),
(12, 7, 'KB005', 1, 'Mila 1Kg', 20000, 20000),
(13, 7, 'KB010', 1, 'Beras Putih 500gr', 20000, 20000),
(14, 8, 'KB002', 2, 'Kunci Biru 1Kg', 20000, 40000),
(15, 9, 'KB002', 1, 'Kunci Biru 1Kg', 20000, 20000);

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
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

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
  MODIFY `id_akun` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  MODIFY `id_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
