-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 09:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040160`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` char(9) NOT NULL,
  `bahan_dasar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `nama`, `harga`, `bahan_dasar`, `deskripsi`, `gambar`) VALUES
(1, 'Nasi Goreng', '15.000', 'Nasi, Telur', 'Nasi goreng dengan cita rasa Nusantara', '1.jpg'),
(2, 'Ayam Bakar Bumbu Bacem', '13.000', 'Paha Ayam', 'Ayam bakar yang dibaluri bumbu bacem', '2.jpg'),
(3, 'Gudeg', '18.000', 'Nangka, Telur, Daging Tetelan', 'Gudeg dengan rasa yang khas asli Yogyakarta', '3.jpg'),
(4, 'Soto Ayam', '15.000', 'Bihun, Suwir Ayam', 'Soto ayam memakai bumbu yang membuat anda ketagihan', '4.jpg'),
(5, 'Rendang', '10.000', 'Daging Sapi', 'Rendang dengan bumbu yang kuat memanjakan lidah', '5.jpg'),
(6, 'Sate Ayam Bumbu Kacang', '13.000', 'Ayam Potong', 'Sate ayam yang dibaluri bumbu kacang', '6.jpg'),
(7, 'Nasi Tutug Oncom', '25.000', 'Nasi, Oncom', 'Nasi tutug diberi oncom yang wangi diberi kencur', '7.jpg'),
(8, 'Tahu Gejrot Belimbing Wuluh', '10.000', 'Tahu', 'Tahu diberi bumbu cairan khas dan ditambah belimbing wuluh', '8.jpg'),
(9, 'Mie Ayam', '15.000', 'Mie, Suwir Ayam', 'Mie khusus dipadukan ayam yang diberi bumbu rahasia', '9.jpg'),
(10, 'Batagor', '12.000', 'Tahu, Pangsit', 'Batagor khas Bandung dengan bumbu kacang', '10.jpg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
