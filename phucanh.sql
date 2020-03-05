-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 02:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1501040023_hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(0, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisanpham` int(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id_sanpham`, `tensanpham`, `hinhanh`, `gia`, `mota`, `id_loaisanpham`, `thutu`) VALUES
(19, 'Samsung Galaxy J6', 'samsung-galaxy-j6-2018-1-600x600-400x400.jpg', 5290000, '', 34, 0),
(20, 'iPhone 8 Plus 64GB', 'iphone-8-plus-hh-400x400.jpg', 23990000, '', 34, 0),
(21, 'Oppo F5', 'oppo-f5-black-400x400.jpg', 6990000, '', 34, 0),
(22, 'Samsung Galaxy S8 Plus', 'samsung-galaxy-s8-plus-hh-600x600-400x400.jpg', 17990000, '', 34, 0),
(23, 'Huawei Nova 3e Há»“ng', 'huawei-nova-3e-hong-10-400x400.jpg', 6990000, '', 34, 0),
(24, 'Samsung Galaxy J7 Pro', 'samsung-galaxy-j7-pro-hh-400x400.jpg', 6090000, '', 34, 0),
(25, 'Samsung Galaxy A6 (2018)', 'samsung-galaxy-a6-2018-1-400x460.png', 6990000, '', 34, 0),
(26, 'Oppo F7', 'oppo-f7-bac-400x400.jpg', 7990000, '', 34, 0),
(27, 'Vivo Y85', 'vivo-y85-red-docquyen-400x400.jpg', 5890000, '', 34, 0),
(28, 'Samsung Galaxy Tab E 9.6', 'samsung-galaxy-tab-e-96-sm-t561-75-400x400.jpg', 4490000, '', 35, 0),
(29, 'Mobell Tab 8 Pro', 'mobell-tab-8-pro-432-400x400.jpg', 2990000, '', 35, 0),
(30, 'iPad Wifi 128 GB (2018)', 'ipad-6th-wifi-128-gb-2-400x400.jpg', 11990000, '', 35, 0),
(31, 'Acer Aspire ES1 432 N3350', 'acer-aspire-es1-432-c3c9-n3350-nxgfssv005-450-450x300-400x400.jpg', 6290000, '', 36, 0),
(32, 'Dell Insprison 7570 i5 8250U', 'dell-inspiron-7570-i5-8250u-4gb-1tb-128gb-4gb-940m-600x600.jpg', 22990000, '', 36, 0),
(33, 'Lenovo IdeaPad 120S', 'lenovo-ideapad-120s-11iap-450x300-1-230x153.jpg', 5190000, '', 36, 0),
(34, 'HP 15 bs647TU i3 6006U', 'hp-15-bs647tu-i3-6006u-3mr94pa-450-300a-400x400.jpg', 10890000, '', 36, 0),
(35, ' Dell Inspiron 3567 i5 7200U', 'dell-inspiron-3567-i5-7200u-70119158-450-300-600x600.png', 14890000, '', 36, 0),
(36, 'eSaver YD13', 'pin-sac-du-phong-7500-mah-esaver-yd13-xanh-la-5-200x200.jpg', 175000, '', 37, 0),
(37, 'CÃ¡p Xmobile MU03', 'cap-micro-usb-20cm-x-mobile-mu03-avatar-1-200x200.jpg', 24000, '', 37, 0),
(38, 'Micro SD 8 GB class 4', 'the-nho-microsd-8gb-class-4-8-200x200.jpg', 150000, '', 37, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id_khachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id_khachhang`, `tenkhachhang`, `matkhau`, `email`, `dienthoai`, `diachi`) VALUES
(1, 'Kiá»u Chinh', '54321', 'baprangbo212@gmail.com', 975200280, 'Hanu');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_loaisanpham` int(11) NOT NULL,
  `tenloaisanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_loaisanpham`, `tenloaisanpham`, `soluong`) VALUES
(34, 'Äiá»‡n thoáº¡i', 90),
(35, 'Tablet', 0),
(36, 'Laptop', 0),
(37, 'Phá»¥ kiá»‡n', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loaisanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_loaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
