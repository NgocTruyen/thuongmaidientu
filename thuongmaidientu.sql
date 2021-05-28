-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2021 lúc 10:26 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuongmaidientu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

CREATE TABLE `tb_admin` (
  `cart_id` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chititet_hoadon`
--

CREATE TABLE `tb_chititet_hoadon` (
  `mahoadon` int(9) NOT NULL,
  `masp` varchar(20) NOT NULL,
  `soluong` int(20) NOT NULL,
  `giaban` int(20) NOT NULL,
  `magiamgia` varchar(20) NOT NULL,
  `thanhtien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_chititet_hoadon`
--

INSERT INTO `tb_chititet_hoadon` (`mahoadon`, `masp`, `soluong`, `giaban`, `magiamgia`, `thanhtien`) VALUES
(1, 'ad1', 2, 20000, '12345', 40000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_giohang`
--

CREATE TABLE `tb_giohang` (
  `cart_id` int(9) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `soluong` int(20) NOT NULL,
  `tinh_trang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `mahoadon` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `ngayban` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`mahoadon`, `cart_id`, `ngayban`, `tongtien`) VALUES
(1, 1, '2021-05-14', 10000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_magiamgia`
--

CREATE TABLE `tb_magiamgia` (
  `mgg` varchar(20) NOT NULL,
  `giamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_magiamgia`
--

INSERT INTO `tb_magiamgia` (`mgg`, `giamgia`) VALUES
('12345', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `masp` varchar(20) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `phanloai` varchar(50) NOT NULL,
  `soluong` int(20) NOT NULL,
  `dvt` varchar(20) NOT NULL,
  `gianhap` int(50) NOT NULL,
  `giaban` int(50) NOT NULL,
  `ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`masp`, `tensp`, `phanloai`, `soluong`, `dvt`, `gianhap`, `giaban`, `ghichu`) VALUES
('ad1', 'Táo', 'Trái cây', 21, 'Kg', 10000, 20000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_thongtin_user`
--

CREATE TABLE `tb_thongtin_user` (
  `cart_id` int(9) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_users`
--

CREATE TABLE `tb_users` (
  `cart_id` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_users`
--

INSERT INTO `tb_users` (`cart_id`, `username`, `password`) VALUES
(1, 'tuyen', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `tb_chititet_hoadon`
--
ALTER TABLE `tb_chititet_hoadon`
  ADD KEY `mahoadon` (`mahoadon`),
  ADD KEY `magiamgia` (`magiamgia`);

--
-- Chỉ mục cho bảng `tb_giohang`
--
ALTER TABLE `tb_giohang`
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Chỉ mục cho bảng `tb_magiamgia`
--
ALTER TABLE `tb_magiamgia`
  ADD PRIMARY KEY (`mgg`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `tb_thongtin_user`
--
ALTER TABLE `tb_thongtin_user`
  ADD KEY `cart_id` (`cart_id`);

--
-- Chỉ mục cho bảng `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `cart_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `cart_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_chititet_hoadon`
--
ALTER TABLE `tb_chititet_hoadon`
  ADD CONSTRAINT `tb_chititet_hoadon_ibfk_1` FOREIGN KEY (`mahoadon`) REFERENCES `tb_hoadon` (`mahoadon`),
  ADD CONSTRAINT `tb_chititet_hoadon_ibfk_2` FOREIGN KEY (`magiamgia`) REFERENCES `tb_magiamgia` (`mgg`);

--
-- Các ràng buộc cho bảng `tb_giohang`
--
ALTER TABLE `tb_giohang`
  ADD CONSTRAINT `tb_giohang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `tb_sanpham` (`masp`),
  ADD CONSTRAINT `tb_giohang_ibfk_3` FOREIGN KEY (`cart_id`) REFERENCES `tb_users` (`cart_id`);

--
-- Các ràng buộc cho bảng `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD CONSTRAINT `tb_hoadon_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `tb_users` (`cart_id`);

--
-- Các ràng buộc cho bảng `tb_thongtin_user`
--
ALTER TABLE `tb_thongtin_user`
  ADD CONSTRAINT `tb_thongtin_user_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `tb_users` (`cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
