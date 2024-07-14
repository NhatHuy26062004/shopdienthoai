-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2024 lúc 12:28 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, '  đẹp', 0),
(2, 3, 22, '  thấp', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 1, 28190000, 10, '1.png', 26690000),
(3, 1, 23290000, 12, '3.png', 0),
(4, 1, 14990000, 12, '4.png', 0),
(5, 1, 8900000, 12, '5.png', 0),
(6, 1, 12400000, 12, '6.png', 0),
(7, 1, 17490000, 12, '7.png', 0),
(8, 1, 20490000, 12, '8.png', 0),
(30, 1, 42990000, 12, 'mac1.png', 0),
(31, 1, 32990000, 12, 'mac2.png', 0),
(32, 1, 64490000, 12, 'mac3.png', 0),
(33, 1, 39990000, 12, 'mac4.png', 0),
(34, 1, 14590000, 12, 'ipad1.png', 13000000),
(35, 1, 20590000, 12, 'ipad2.png', 0),
(36, 1, 14190000, 12, 'ipad3.png', 0),
(37, 1, 10790000, 12, 'ipad4.png', 0),
(38, 1, 7490000, 6, 'watch1.png', 0),
(39, 1, 13690000, 6, 'watch2.png', 0),
(40, 1, 21490000, 6, 'watch3.png', 0),
(41, 1, 12890000, 6, 'watch4.png', 0),
(42, 1, 5990000, 6, 'airpods1.png', 0),
(43, 1, 3190000, 8, 'airpods2.png', 0),
(44, 1, 12990000, 8, 'airpods3.png', 11900000),
(45, 1, 2790000, 8, 'airpods4.png', 0),
(46, 1, 550000, 10, 'phukien1.png', 0),
(47, 1, 3110000, 10, 'phukien2.png', 0),
(48, 1, 210000, 10, 'phukien3.png', 0),
(49, 1, 550000, 10, 'phukien4.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(74, 46, 1, 'Màu Trắng', 0, 550000, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `hinhanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `ngaylap`, `mota`, `hinhanh`) VALUES
(2, 'iPhone 14 Pro Max', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(3, 'iPhone 15 Plus', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(4, 'iPhone 12 Plus', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(5, 'iPhone 12 ProMax', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(6, 'iPhone 14', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(7, 'iPhone 15', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(8, 'iPhone 13 Plus', 1, '2020-08-08', 'Sản Phẩm Tốt, Chất Lượng', 0),
(30, 'MacBook Air 15 inch M3 2024 8CPU - 10GPU', 2, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(31, 'MacBook Air 13 inch M3 2024 8CPU - 10GPU', 2, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(32, 'MacBook Pro 14 inch M3 Pro 2023 - 14GPU', 2, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(33, 'MacBook Pro 13 inch M2 2022 8CPU - 10GPU', 2, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(34, 'iPad Air 5 WiFi', 3, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(35, 'iPad Pro M2 WiFi', 3, '2023-10-09', 'Sản Phẩm Tốt, Chất Lượng', 0),
(36, 'iPad 10 WiFi ', 3, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(37, 'iPad 9 WiFi', 3, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(38, 'Apple Watch SE 2023 GPS + Cellular 40mm viền nhôm dây vải', 4, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(39, 'Apple Watch Series 9 GPS + Cellular 45mm viền nhôm  size S/M', 4, '2023-10-23', 'Sản Phẩm Tốt, Chất Lượng', 0),
(40, 'Apple Watch Ultra 2 GPS + Cellular 49mm viền Titanium Trail', 4, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(41, 'Apple Watch Series 9 GPS + Cellular 41mm viền nhôm  thể thao', 4, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(42, 'AirPods Pro (2nd Gen)', 5, '2023-10-03', 'Sản Phẩm Tốt, Chất Lượng', 0),
(43, 'Tai nghe True Wireless Beats', 5, '2023-10-03', 'Sản Phẩm Tốt, Chất Lượng', 0),
(44, 'AirPods Max (2nd Gen)', 5, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(45, 'AirPods 2 Hộp sạc thường', 5, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0),
(46, 'Adapter sạc Apple USB-C 20W', 6, '2023-10-30', 'Sản Phẩm Tốt, Chất Lượng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(73, 8, '2024-05-06', 900000),
(74, 8, '2024-05-12', 550000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699'),
(7, 'huy', 'huy', '8d1ed8d27f2f95ec71e1ad750ab4597f', 'longvip@gmail.com', '123', '0783951493'),
(8, 'Tình', 'TinhTinh', '8d1ed8d27f2f95ec71e1ad750ab4597f', 'tinh@itc.edu.vn', 'HCM', '0783951493'),
(9, 'Nhật Huy', 'Nhật Huy', 'd49300744dde1fbe404598f330aaacbc', 'nhathuy26062004dz@gmail.com', 'Tiền Giang', '0783951493');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'iphone', 3),
(2, 'mac', 3),
(3, 'ipad', 3),
(4, 'watch', 3),
(5, 'airpods', 3),
(6, 'phukien', 3),
(7, 'Củ cải', 7),
(8, 'hello', 8),
(9, 'cc', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `Idmau` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`Idmau`, `mausac`) VALUES
(1, 'Màu Trắng'),
(2, ' Màu Đen'),
(3, ' Màu Trắng'),
(4, ' Màu Trắng'),
(5, ' Màu Trắng'),
(6, ' Màu Trắng'),
(7, ' Màu Trắng'),
(8, ' Màu Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'nguyễn hạo vy', 'hcm', 'admin', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`) USING BTREE;

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`Idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `Idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
