-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 03:13 PM
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
-- Database: `duansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `ma_ct` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_dh` int(11) NOT NULL,
  `ma_sach` int(11) NOT NULL,
  `hinh_ct` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` float NOT NULL,
  `thanh_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiet_donhang`
--

INSERT INTO `chitiet_donhang` (`ma_ct`, `ma_kh`, `ma_dh`, `ma_sach`, `hinh_ct`, `so_luong`, `don_gia`, `thanh_tien`) VALUES
(3, 13, 64, 47, 'product-2.jpg', 1, 455500, 455500),
(4, 13, 64, 38, 'product-5.jpg', 3, 455500, 1366500),
(8, 13, 68, 46, 'product-7.jpg', 3, 455500, 1366500),
(9, 13, 69, 46, 'product-7.jpg', 3, 455500, 1366500),
(10, 13, 70, 46, 'product-7.jpg', 3, 455500, 1366500),
(11, 13, 72, 47, 'product-2.jpg', 1, 455500, 455500),
(13, 13, 74, 45, 'product-8.jpg', 3, 455500, 1366500),
(14, 13, 77, 45, 'product-8.jpg', 3, 455500, 1366500),
(15, 13, 78, 45, 'product-8.jpg', 3, 455500, 1366500),
(16, 13, 79, 45, 'product-8.jpg', 3, 455500, 1366500),
(17, 13, 80, 45, 'product-8.jpg', 3, 455500, 1366500),
(18, 13, 81, 46, 'product-7.jpg', 3, 455500, 1366500),
(19, 13, 82, 46, 'product-7.jpg', 3, 455500, 1366500),
(20, 13, 83, 45, 'product-8.jpg', 3, 455500, 1366500),
(21, 13, 85, 46, 'product-7.jpg', 3, 455500, 1366500),
(22, 13, 86, 41, 'product-2.jpg', 1, 455500, 455500),
(23, 13, 87, 46, 'product-7.jpg', 3, 455500, 1366500),
(24, 13, 88, 42, 'product-1.jpg', 3, 455500, 1366500),
(25, 2, 89, 46, 'product-7.jpg', 3, 455500, 1366500),
(26, 13, 90, 45, 'product-8.jpg', 3, 455500, 1366500);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_dm`, `ten_dm`, `trang_thai`) VALUES
(3, 'Công nghệ', 0),
(4, 'Kinh doanh', 1),
(5, 'Văn học', 1),
(6, 'Lịch sử', 0),
(7, 'Kỹ năng sống', 1),
(8, 'Tài chính', 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(11) NOT NULL,
  `ten_dh` varchar(255) NOT NULL,
  `diachi_dh` varchar(255) NOT NULL,
  `sodt_dh` int(11) NOT NULL,
  `email_dh` varchar(255) NOT NULL,
  `dh_pttt` varchar(255) NOT NULL COMMENT '1. thanh toán trực tiếp 2. thanh toán chuyến khoản 3. thanh toán online',
  `tong_tien` float NOT NULL,
  `ngay_dh` date NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ten_dh`, `diachi_dh`, `sodt_dh`, `email_dh`, `dh_pttt`, `tong_tien`, `ngay_dh`, `trang_thai`) VALUES
(52, 'Phu Cuong', 'THANH HÓA', 987654355, 'phucuong@gmail.com', 'Thanh toán chuyển khoản', 455500, '0000-00-00', '0'),
(53, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 3644000, '0000-00-00', '0'),
(54, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 3644000, '0000-00-00', '0'),
(56, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán online', 3644000, '0000-00-00', '0'),
(57, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán online', 3644000, '0000-00-00', '0'),
(61, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 455500, '0000-00-00', '0'),
(62, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 455500, '0000-00-00', '0'),
(63, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 455500, '0000-00-00', '0'),
(64, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1822000, '0000-00-00', '0'),
(65, 'Phu Cuong', 'THANH HÓA', 13232132, 'cuon@gmail.com', 'Thanh toán online', 455500, '0000-00-00', '0'),
(66, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán online', 455500, '0000-00-00', '0'),
(67, 'lephucuong', 'THANH HÓA', 13232132, 'cuong@gmail.com', 'Thanh toán chuyển khoản', 1366500, '0000-00-00', '0'),
(68, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 1366500, '0000-00-00', '0'),
(69, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán chuyển khoản', 1366500, '0000-00-00', '0'),
(70, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', '0'),
(71, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 0, '0000-00-00', '0'),
(72, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán chuyển khoản', 455500, '0000-00-00', '0'),
(73, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 1366500, '0000-00-00', '0'),
(74, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 1366500, '0000-00-00', '0'),
(75, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán trực tiếp', 0, '0000-00-00', '0'),
(76, '', '', 0, '', 'Không có lựa chọn', 0, '0000-00-00', '0'),
(77, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', '0'),
(78, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', '0'),
(79, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Đang xử lí'),
(80, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Huỷ đơn hàng'),
(81, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Đơn hàng thành công !'),
(82, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Huỷ đơn hàng'),
(83, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Huỷ đơn hàng'),
(84, 'Phu Cuong', 'THANH HÓA', 987654323, 'phucuong@gmail.com', 'Thanh toán online', 0, '0000-00-00', 'Huỷ đơn hàng'),
(85, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Huỷ đơn hàng'),
(86, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 455500, '0000-00-00', 'Huỷ đơn hàng'),
(87, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Đang giao hàng'),
(88, 'Phu Cuong', 'THANH HÓA', 2147483647, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '0000-00-00', 'Đơn hàng thành công !'),
(89, 'cuongggle', 'thanh hoá', 987612345, 'cuong@gmail.com', 'Thanh toán online', 1366500, '2024-01-02', 'Đơn hàng thành công !'),
(90, 'Phu Cuong', 'THANH HÓA', 9876543, 'phucuong@gmail.com', 'Thanh toán online', 1366500, '2024-01-03', 'Đang xử lí');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `email_kh` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `so_dt` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `hinh_kh` varchar(255) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `cap_bac` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email_kh`, `mat_khau`, `so_dt`, `dia_chi`, `hinh_kh`, `gioi_tinh`, `cap_bac`, `trang_thai`) VALUES
(2, 'cuongggle', 'cuong@gmail.com', 'lephucuong@A1', 9876, 'thanh hoá', 'hinh.jpg', 1, 1, 1),
(3, '', 'dhád@gmail.com', '1234', 9876, 'thanh hoá', 'product-1.jpg', 1, 1, 1),
(4, 'lephucuong', '', 'lephucuong', 0, '', '', 0, 0, 0),
(5, 'lephucuong', '', 'lephucuong1A@', 0, '', '', 0, 0, 0),
(6, '', 'lephucuong', 'lephucuong1A@', 0, '', '', 0, 0, 0),
(7, '', 'lephucuong', 'lephucuong1A@', 0, '', '', 0, 0, 0),
(8, 'cuon@gmail.com', 'lephucuong', 'lephucuong1A@', 0, '', '', 0, 0, 0),
(9, 'cuon@gmail.com', 'lephucuong', 'lephucung812003A@', 0, '', '', 0, 0, 0),
(10, 'cuong@gmail.com', 'lephucuong', 'lephucuong812003A@', 0, '', '', 0, 0, 0),
(11, 'lephucuong', 'cuong@gmail.com', 'lephucuong812003A', 0, '', '', 0, 0, 0),
(12, 'lephucuongggggggggg', 'cuonggggg@gmail.com', 'lephucuong1@A', 0, 'THANH HÓA', '', 0, 1, 1),
(13, 'Phu Cuong', 'phucuong@gmail.com', 'lephucuong812003A@', 9876543, 'THANH HÓA', '', 0, 1, 0),
(14, 'đasjhgfd', 'cuong@gmail.com', '12345678A@', 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `ma_sach` int(11) NOT NULL,
  `ten_sach` varchar(255) NOT NULL,
  `hinh_sach` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_sach` float NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `nha_xb` varchar(255) NOT NULL,
  `ngay_xb` date NOT NULL,
  `ma_dm` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ma_sach`, `ten_sach`, `hinh_sach`, `so_luong`, `gia_sach`, `mo_ta`, `nha_xb`, `ngay_xb`, `ma_dm`, `trang_thai`) VALUES
(3, 'dsaddsadsd', 'product-3.jpg', 1, 4332, 'dsafadsadsd', 'dsdd', '2023-11-01', 3, 0),
(34, 'sách võ', 'product-6.jpg', 3, 455500, 'hay lắm', 'hậu cần', '0000-00-00', 6, 0),
(35, 'sách kinh tế nè', 'product-7.jpg', 1, 455500, 'hayyyyyyy', 'hậu cần', '0000-00-00', 5, 0),
(36, 'dsad đ', 'product-5.jpg', 1, 455500, 'đasad', 'dsdd', '0000-00-00', 8, 0),
(37, 'fsds', 'product-4.jpg', 3, 455500, 'asâ', 'dsdd', '0000-00-00', 6, 0),
(38, 'sách kinh tế', 'product-5.jpg', 3, 455500, 'dsads', 'dsadsa', '0000-00-00', 4, 0),
(39, 'sách võ', 'product-6.jpg', 1, 455500, 'dsa', 'hậu cần', '0000-00-00', 6, 0),
(40, 'sách kinh tế nè', 'product-4.jpg', 1, 455500, 'ưdư', 'dsads', '0000-00-00', 8, 0),
(41, 'sách kinh tế nè', 'product-2.jpg', 1, 455500, 'dsdsa', 'dsad', '0000-00-00', 4, 0),
(42, 'sách võ', 'product-1.jpg', 3, 455500, 'dá', 'dsadsa', '0000-00-00', 5, 0),
(43, 'dsad đ', 'product-3.jpg', 3, 455500, 'eqewq', 'dsadsa', '0000-00-00', 8, 0),
(44, 'sách kinh tế nè', 'product-6.jpg', 3, 455500, 'dư', 'dsads', '0000-00-00', 7, 0),
(45, 'sách võ', 'product-8.jpg', 3, 455500, 'đasd', 'dsadsa', '0000-00-00', 6, 0),
(46, 'sách kinh tế nè', 'product-7.jpg', 3, 455500, 'Cấu tạo của đoạn văn: Cũng giống như một bài văn cần có 3 phần: Mở bài, Thân bài và Kết bài, khi viết một đoạn văn, để đảm bảo tính mạch lạc, hấp dẫn các em cũng cần viết theo cấu trúc 3 phần: Mở đoạn, Thân đoạn, Kết đoạn.\r\n', 'dsads', '0000-00-00', 7, 0),
(47, 'sách kinh tế nè', 'product-2.jpg', 1, 455500, 'đas', 'dsdd', '0000-00-00', 6, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`ma_ct`),
  ADD KEY `ma_dh` (`ma_dh`),
  ADD KEY `ma_sach` (`ma_sach`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_dm`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ma_sach`),
  ADD KEY `ma_dm` (`ma_dm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  MODIFY `ma_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `ma_sach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD CONSTRAINT `chitiet_donhang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`),
  ADD CONSTRAINT `chitiet_donhang_ibfk_2` FOREIGN KEY (`ma_sach`) REFERENCES `sach` (`ma_sach`),
  ADD CONSTRAINT `chitiet_donhang_ibfk_3` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`ma_dm`) REFERENCES `danh_muc` (`ma_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
