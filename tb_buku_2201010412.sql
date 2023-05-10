-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 06:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_2201010412`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_2201010412`
--

CREATE TABLE `tb_buku_2201010412` (
  `idbuku_2201010412` char(10) NOT NULL,
  `judulbuku_2201010412` varchar(100) NOT NULL,
  `kategoribuku_2201010412` varchar(50) NOT NULL,
  `penerbit_2201010412` varchar(100) NOT NULL,
  `penulis_2201010412` varchar(100) NOT NULL,
  `stok_2201010412` int(11) NOT NULL,
  `harga_2201010412` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_buku_2201010412`
--

INSERT INTO `tb_buku_2201010412` (`idbuku_2201010412`, `judulbuku_2201010412`, `kategoribuku_2201010412`, `penerbit_2201010412`, `penulis_2201010412`, `stok_2201010412`, `harga_2201010412`) VALUES
('9780446310', 'To Kill a Mockingbird', 'Fiks', 'Grand Central Publishing', 'Harper Lee', 0, 132),
('9780984782', 'Cracking the Coding Interview', 'teknologi', 'CareerCup LLC', 'Gayle Laakmann McDowell', 0, 587),
('9781409129', 'The History of Football Tactics', 'hobi', 'Orion', 'Jonathan Wilson', 0, 264);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku_2201010412`
--
ALTER TABLE `tb_buku_2201010412`
  ADD PRIMARY KEY (`idbuku_2201010412`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
