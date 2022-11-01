-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 09:50 AM
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
-- Database: `shoes26_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bl` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `iduser`, `idpro`, `ngay_bl`) VALUES
(32, 'sss', 0, 104, ' 24 Oct, 22'),
(33, 'dd', 0, 104, ' 24 Oct, 22');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `iddm` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name`, `price`, `img`, `mota`, `iddm`, `luotxem`) VALUES
(101, 'huong', 2021.00, '6.jpeg', 'fdf', 36, 0),
(103, 'abc', 2222.00, '14.jpg', '21212', 36, 0),
(104, 'abc', 2222.00, '14.jpg', '21212', 36, 0),
(105, 'abc', 2222.00, '14.jpg', '21212', 36, 0),
(106, 'abc', 2222.00, '14.jpg', '21212', 36, 0),
(112, 'eeee', 261203.00, '7.jpeg', 'ee', 36, 0),
(113, 'tanduy', 261203.00, '3.jpg', 'z', 36, 0),
(114, 'duy', 1234.00, '6.jpeg', '', 36, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(36, 'Thể thao'),
(37, 'Nguyễn Duy');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(128, 'admin', '123', '', 'Thôn 1, Lộc Ngãi, Bảo Lâm, Lâm Đồng', '0383383053', 1),
(139, 'ntd', '123', 'duyntps24415@fpt.edu.vn', 'Bảo Lâm, Lâm Đồng', '0369469525', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydang` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `name`, `img`, `mota`, `ngaydang`) VALUES
(20, 'tanduy', '5.jpg', 'aaaaaa', '28 Oct, 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
