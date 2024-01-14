-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 03:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('B', 'Beverage'),
('CB', 'Coffee Beans');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_produk` varchar(15) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `harga` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `diskon` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `IDProduk` varchar(10) NOT NULL,
  `NamaProduk` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Deskripsi` varchar(255) DEFAULT NULL,
  `FotoProduk` varchar(255) DEFAULT NULL,
  `IDKategori` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`IDProduk`, `NamaProduk`, `Harga`, `Deskripsi`, `FotoProduk`, `IDKategori`) VALUES
('B001', 'ICED COFFEE', 17000, 'Excelso’s House blend coffee, chilled and served on ice', '14012024143740iced-coffee.jpg', 'B'),
('B002', 'IRISH COFFEE', 19000, 'Excelso’s House blend coffee with Irish Whisky, topped with brown sugar and whipped cream', '14012024144149irish-coffee-.png', 'B'),
('B003', 'ICED ESPRESSO SHAKE', 21000, 'Espresso served cold', '14012024145322iced-espresso-shake.jpg', 'B'),
('B004', 'CARAMEL JELLY', 18000, 'Ice blended coffee mixed with caramel syrup and jelly inside', '14012024145731caramel-jelly.jpg', 'B'),
('B005', 'CHOCO CHIP', 20000, 'Perfect ice blended coffee with vanilla creamer, mixed with real chocolate chips', '14012024150131choco-chip.jpg', 'B'),
('B006', 'COOKIES AND CREAM', 22000, 'Delicious ice blended coffee with savory taste of cookies and cream.', '14012024150241cookies-and-cream.jpg', 'B'),
('B007', 'ICED CARAMEL CAPPUCCINO', 23000, 'Modern style espresso sweetened with caramel syrup', '14012024150411iced-caramel-cappuccino.jpg', ''),
('B008', 'MEGA MOCHA SHAKE', 24000, 'Refreshing blend of chilled coffee and coffee ice cream', '14012024150539mega-mocha-shake.jpg', 'B'),
('CB001', 'House Blend Biji 320g', 55000, 'Buat kamu yang menyukai citarasa kopi yang seimbang. Harmonisasi aroma rempah, bunga dan rasa buah kering. Sangat menyenangkan untuk dinikmati.', '140120241514001.jpg', 'CB'),
('CB002', 'The Clasic Biji 320g', 50000, 'Blend favorit sepanjang masa dengan karakter buah-buahan citrus, citarasa karamel dan aroma bunga samar-samar yang menyenangkan', '140120241517472.jpg', 'CB'),
('CB003', 'Java Arabica Biji 320g', 60000, 'Kopi ini untuk kamu yang suka dengan karakter body dan rasa dark chocolate yang kuat. Rasa manis-pahit diakhir dengan aroma kacang-kacangan.', '140120241518553.jpg', 'CB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`IDProduk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
