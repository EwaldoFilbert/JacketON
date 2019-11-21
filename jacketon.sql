-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 09:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jacketon`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `slider` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`slider`, `image`) VALUES
(1, 'img/Carousel/carousel1.jpg'),
(2, 'img/Carousel/carousel2.jpg'),
(3, 'img/Carousel/carousel3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jaket`
--

CREATE TABLE `jaket` (
  `id_jaket` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `kategorijaket_id` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jaket`
--

INSERT INTO `jaket` (`id_jaket`, `nama`, `deskripsi`, `harga`, `quantity`, `tanggal_masuk`, `kategori_id`, `kategorijaket_id`, `gambar`) VALUES
(1, 'Hoodie Zipper Abu Tua', 'BAHAN : FLEECE 1\r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 60000, 50, '2019-11-01', 1, 6, 'img/Cowo/HoodieZipperAbuTua.jpg'),
(2, 'Hoodie Zipper Pink', 'BAHAN : FLEECE 2\r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 65000, 50, '2019-11-11', 1, 6, 'img/Cowo/HoodieZipperBabyPink.jpg'),
(3, 'Hoodie Zipper Hijau', 'BAHAN : FLEECE 3\r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 60000, 50, '2019-11-10', 1, 6, 'img/Cowo/HoodieZipperHijau.jpg'),
(4, 'Hoodie Zipper Merah', 'BAHAN : FLEECE 4\r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 60000, 50, '2019-11-05', 1, 6, 'img/Cowo/HoodieZipperMerah.jpg'),
(5, 'Hoodie Zipper Mocca', 'BAHAN : FLEECE \r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 63000, 50, '2019-11-09', 1, 6, 'img/Cowo/HoodieZipperMocca.jpg'),
(6, 'Hoodie Zipper Biru', 'BAHAN : FLEECE \r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 60000, 50, '2019-11-05', 1, 6, 'img/Cowo/HoodieZipperBiru.jpg'),
(7, 'Hoodie Jumper Fleece', 'BAHAN : FLEECE \r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 70000, 50, '2019-11-01', 1, 5, 'img/Cowo/hmgoepprod (1).jpg'),
(8, 'Hoodie Jumper Fleece 2', 'BAHAN : FLEECE \r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 60000, 50, '2019-11-08', 1, 4, 'img/Cowo/hmgoepprod (2).jpg'),
(9, 'Hoodie Jumper Fleece 3', 'BAHAN : FLEECE \r\nUKURAN : L, XL, XXL\r\nDETAIL UKURAN :\r\n( Lebar x Panjang x Panjang Lengan )\r\nL = 55cm x 65cm x 56cm  (Pria/Wanita Tinggi MAX 170cm)\r\nXL = 57cm x 67cm x 58cm (Pria/Wanita Tinggi MAX 175cm)\r\nXXL = 60cm x 70cm x 60cm (Pria/Wanita Tinggi MAX 180cm)', 65000, 50, '2019-11-09', 1, 3, 'img/Cowo/hmgoepprod (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan'),
(3, 'Anak-Anak');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jaket`
--

CREATE TABLE `kategori_jaket` (
  `kategorijaket_id` int(50) NOT NULL,
  `kategorijaket_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_jaket`
--

INSERT INTO `kategori_jaket` (`kategorijaket_id`, `kategorijaket_nama`) VALUES
(1, 'Jaket Bomber'),
(2, 'Jaket Varsity'),
(3, 'Jaket Kulit'),
(4, 'Jaket Parka'),
(5, 'Hoodie Jumper'),
(6, 'Hoodie Zipper');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`slider`);

--
-- Indexes for table `jaket`
--
ALTER TABLE `jaket`
  ADD PRIMARY KEY (`id_jaket`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kategori_jaket`
--
ALTER TABLE `kategori_jaket`
  ADD PRIMARY KEY (`kategorijaket_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `slider` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jaket`
--
ALTER TABLE `jaket`
  MODIFY `id_jaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_jaket`
--
ALTER TABLE `kategori_jaket`
  MODIFY `kategorijaket_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
