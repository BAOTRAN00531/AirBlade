-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 04:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airblade`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `iduser` int(11) NOT NULL,
  `MASP` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `Sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`iduser`, `MASP`, `NoiDung`, `Sao`) VALUES
(0, 6, 'z', 5);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `IDDM` varchar(10) NOT NULL,
  `LOAISP` varchar(100) NOT NULL,
  `THUTU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`IDDM`, `LOAISP`, `THUTU`) VALUES
('sd12', 'GFGK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MASP` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `IDDH` int(11) NOT NULL,
  `HOTEN` varchar(100) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `PHONE` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TONG` double(10,0) NOT NULL DEFAULT 0,
  `PTTT` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. COD\r\n2. Ví MoMo\r\n3. VNPay',
  `NGAYDATHANG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MASP`, `iduser`, `IDDH`, `HOTEN`, `DIACHI`, `PHONE`, `EMAIL`, `TONG`, `PTTT`, `NGAYDATHANG`) VALUES
(22, 11, 1, 'zxczxczx', 'asdzxcb', '12345', 'abc@yahoo.com', 100000, 3, ''),
(22, 11, 2, 'zxczxc', 'asdzxcb', '12345', 'abc@yahoo.com', 100000, 3, '20-02-2024 10:34:53'),
(22, 11, 4, 'ZXCZXC', 'asdzxcb', '12345', 'abc@yahoo.com', 100000, 2, '20-02-2024 10:35:53'),
(22, 11, 5, 'asd', 'asdzxcb', '12345', 'abc@yahoo.com', 100000, 2, '20-02-2024 10:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `khieunai`
--

CREATE TABLE `khieunai` (
  `MAKN` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `MASP` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `HINH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khieunai`
--

INSERT INTO `khieunai` (`MAKN`, `iduser`, `MASP`, `NoiDung`, `HINH`) VALUES
(4, 1, 1, 'zxc', 'donhang.sql');

-- --------------------------------------------------------

--
-- Table structure for table `luutru_khieunai`
--

CREATE TABLE `luutru_khieunai` (
  `MAKN` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `MASP` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `HINH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `luutru_khieunai`
--

INSERT INTO `luutru_khieunai` (`MAKN`, `iduser`, `MASP`, `NoiDung`, `HINH`) VALUES
(0, 1, 1, 'zxc', 'donhang.sql');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IDDM` varchar(9) NOT NULL,
  `MASP` int(11) NOT NULL,
  `TENSP` varchar(100) NOT NULL,
  `GIASP` double(10,2) NOT NULL,
  `TONKHO` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `MOTA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDDM`, `MASP`, `TENSP`, `GIASP`, `TONKHO`, `hinhanh`, `MOTA`) VALUES
('sd12', 26, 'hoa', 125000.00, 23324, '489bf3d25adacb5accc55e756a1034bf.jpg', 'dfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`THUTU`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDH`),
  ADD KEY `MASP` (`MASP`);

--
-- Indexes for table `khieunai`
--
ALTER TABLE `khieunai`
  ADD PRIMARY KEY (`MAKN`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`) USING BTREE,
  ADD KEY `IDDM_2` (`IDDM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `THUTU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khieunai`
--
ALTER TABLE `khieunai`
  MODIFY `MAKN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
