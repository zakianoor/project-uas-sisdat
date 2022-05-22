-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(6) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `usn_adm` varchar(200) NOT NULL,
  `pass_adm` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `usn_adm`, `pass_adm`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `stok_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `ket_brg` text NOT NULL,
  `id_kategori` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `harga_brg`, `stok_brg`, `img_brg`, `ket_brg`, `id_kategori`) VALUES
(4, 'Masala Bread', '27500', 50, '41.png', 'An aromatic and flavourful bread that can be enjoyed just plain, as it is already loaded with the fabulous flavours of garlic, herbs and spices.', 5),
(5, 'Assorted Muffins', '12500', 50, '46.png', 'Moist crumb. Chewy texture. Uneven crumb grain with holes or tunnels throughout. Peaked (bell-type) or flat tops.', 11),
(6, 'Butter Croissants', '20000', 50, '38.png', 'Butter Croissants terenak sedunia harus beli sihA buttery, flaky, French viennoiserie pastry inspired by the shape of the Austrian kipferl but using the French yeast-leavened laminated dough.', 10),
(8, 'Eggless Walnut Bread', '22500', 50, '45.png', 'Vegan-friendly! Nobody really needs a reason to eat a good Walnut Bread. Whether you are just looking to satisfy a sweet tooth craving, for evening tea time or after school snack or even for a celebration when you have little time to bake, this Eggless Walnut Bread is the perfect choice!', 5),
(9, 'Garlic Bread', '22500', 50, '44.png', 'Garlic bread consists of bread, topped with garlic and olive oil or butter and may include additional herbs, such as oregano or chives. It is then either grilled until toasted or baked in a conventional or bread oven.', 5),
(10, 'Sesame Bagels', '12500', 50, '47.png', 'A traditional bagel with sesame seeds scattered liberally on the surface, sometimes boiled in sweetened water, and then baked in an oven. Sesame bagels from the deli are often toasted at home and then spread with cream cheese.', 9),
(11, 'Flax & Walnut Loaf', '22500', 50, '48.png', 'Flax bread is a healthy bread made with nutritious almond flour and flax seed meal. Its keto, low carb, and naturally gluten-free! The flax imparts a slightly nutty flavor to the bread dan delicious.', 5),
(13, 'Wheat Masala Pav', '20000', 50, '43.png', 'Pav-bhaji served in restaurant (or as street food in India) has butter on bread (pav) and in the bhaji.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id_buyer` int(6) NOT NULL,
  `usn_buyer` varchar(50) NOT NULL,
  `pass_buyer` varchar(200) NOT NULL,
  `tgl_akun_buyer` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `usn_buyer`, `pass_buyer`, `tgl_akun_buyer`) VALUES
(14, 'leejeno', '9c48c4b1b36bc0a7e4538f21115f18e5', '2022-05-22'),
(13, 'kiacoba', 'e28611980b0fa242a570f68ec3032bf9', '2022-05-16'),
(15, 'zhongchenle', '04c0b6d4fc38fc48bc55fe0c4780bbc6', '2022-05-22'),
(16, 'najaemin', '757440a56df9daab370c86cfe8fc2ad8', '2022-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `qyt_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `id_brg` int(6) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `nama_brg`, `harga_brg`, `qyt_brg`, `img_brg`, `id_buyer`, `id_brg`, `status`, `id_transaksi`) VALUES
(39, 'Assorted Muffins', '12500', 1, '46.png', 16, 5, 2, 22),
(38, 'Assorted Muffins', '12500', 1, '46.png', 15, 5, 2, 21),
(40, 'Wheat Masala Pav', '20000', 1, '43.png', 16, 13, 2, 22),
(36, 'Wheat Masala Pav', '20000', 1, '43.png', 15, 13, 2, 21),
(35, 'Sesame Bagels', '12500', 1, '47.png', 15, 10, 2, 21),
(34, 'Assorted Muffins', '12500', 1, '46.png', 14, 5, 2, 20),
(33, 'Butter Croissants', '20000', 1, '38.png', 14, 6, 2, 20),
(32, 'Garlic Bread', '22500', 1, '44.png', 14, 9, 2, 20),
(41, 'Assorted Muffins', '12500', 1, '46.png', 16, 5, 2, 22);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(6) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Bread'),
(9, 'Bagel'),
(10, 'Croissant'),
(11, 'Muffin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(6) NOT NULL,
  `total_transaksi` int(10) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `norek_buyer` bigint(20) NOT NULL,
  `namarek_buyer` varchar(50) NOT NULL,
  `bank_buyer` varchar(50) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `nama_buyer` varchar(50) NOT NULL,
  `alamat_buyer` text NOT NULL,
  `telp_buyer` bigint(20) NOT NULL,
  `order` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `total_transaksi`, `tgl_transaksi`, `norek_buyer`, `namarek_buyer`, `bank_buyer`, `id_buyer`, `nama_buyer`, `alamat_buyer`, `telp_buyer`, `order`) VALUES
(20, 55000, '2022-05-22 10:57:15', 123456789, 'Lee Jeno', 'BCA-BA', 14, 'Lee Jeno', 'Seoul, Korea', 82208238182, NULL),
(21, 70000, '2022-05-22 10:57:29', 1234567890, 'Zhong Chenle', 'PMT-BA', 15, 'Zhong Chenle', 'Seoul, Korea', 82208220822, NULL),
(22, 45000, '2022-05-22 10:57:38', 2147483647, 'Na Jaemin', 'CMB-BA', 16, 'Na Jaemin', 'Seoul, Korea', 82308230823, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id_buyer`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id_buyer` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
