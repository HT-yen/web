-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 03:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasecnw`
--
CREATE DATABASE databasecnw;
USE databasecnw;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('sin', '12345'),
('Linh', '123'),
('Han', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

CREATE TABLE `ban` (
  `soban` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`soban`) VALUES
('A01'),
('A02'),
('A03'),
('B01'),
('B02');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_dichvu` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `ten_monan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_dichvu`, `id_hoadon`, `ten_monan`, `soluong`, `gia`) VALUES
(4, 2, 'Sandwich trứng', 1, 25),
(5, 2, 'Hải sản', 8, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `soban` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbatdau` datetime DEFAULT NULL,
  `thoigianketthuc` datetime DEFAULT NULL,
  `tinhtrangthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `soban`, `thoigianbatdau`, `thoigianketthuc`, `tinhtrangthanhtoan`) VALUES
(1, 'A01', '2017-05-16 05:00:00', '2017-05-16 07:05:00', 1),
(2, 'A02', '2017-05-17 11:22:00', '2017-05-16 13:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id_monan` int(6) NOT NULL,
  `ten_monan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `avt_monan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`id_monan`, `ten_monan`, `avt_monan`, `giatien`) VALUES
(1, 'Sandwich trứng', 'swt.jpg', 25),
(2, 'Hải sản', 'hs.jpg', 200),
(3, 'Canh sườn non cải ch', 'csn.jpg', 75);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Hoten` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Diachi` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sdt` varchar(12) CHARACTER SET latin1 DEFAULT NULL,
  `user` varchar(10) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `Diachi`, `sdt`, `user`, `pass`) VALUES
('1', 'Hoàng Anh', 'da nang', '0987 123 123', 'a', 'a123'),
('2', 'Minh Liên', 'da nang', '0987 667 763', 'b', 'b123'),
('3', 'Quân Du', 'da nang', '0966 123 767', 'ann', 'ann123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`soban`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_dichvu`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id_monan`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_dichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id_monan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
