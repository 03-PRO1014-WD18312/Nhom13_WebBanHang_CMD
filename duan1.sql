-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2023 lúc 11:01 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `account` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` bit(1) NOT NULL,
  `Dateofbirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `full_name`, `phone_number`, `email`, `address`, `image`, `account`, `password`, `role`, `Dateofbirth`) VALUES
(1, 'Nguyễn Mạnh Cường', '0963612045', 'cuongnmph38402@fpt.edu.vn', 'Đan Phượng, Hà Nội', 'avata', 'cuongnmph38402', '1234', b'1', '2004-05-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhsanpham`
--

CREATE TABLE `anhsanpham` (
  `idanhsanpham` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `anhsanpham` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anhsanpham`
--

INSERT INTO `anhsanpham` (`idanhsanpham`, `idsanpham`, `anhsanpham`) VALUES
(72, 65, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(73, 66, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(74, 67, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(75, 69, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(76, 71, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(77, 72, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbinhluan` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `xephang` int(1) NOT NULL,
  `noidungbinhluan` varchar(250) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbinhluan`, `idsanpham`, `idkhachhang`, `xephang`, `noidungbinhluan`, `ngaybinhluan`) VALUES
(1, 1, 1, 5, 'Sản phẩm tốt, lần sau lại ghé shop', '2023-11-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `idcolor` int(11) NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`idcolor`, `color`) VALUES
(1, 'trắng'),
(2, 'xanh'),
(3, 'đỏ '),
(4, 'cam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(250) NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`iddanhmuc`, `tendanhmuc`, `trangthai`) VALUES
(1, 'Bếp Điện', b'0'),
(2, 'Nồi Cơm', b'0'),
(3, 'Nồi và Nồi áp suất', b'0'),
(4, 'Bát, Đĩa, và Đồ đựng thực phẩm', b'0'),
(5, 'Đồ cắt, Thái, và Chế biến thức ăn', b'0'),
(6, 'Đồ dùng vệ sinh và Làm sạch bếp', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `options` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `ngaythemvaogiohang` date NOT NULL,
  `soluongsanpham` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichco`
--

CREATE TABLE `kichco` (
  `idkichco` int(11) NOT NULL,
  `kichco` varchar(250) NOT NULL,
  `mota` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kichco`
--

INSERT INTO `kichco` (`idkichco`, `kichco`, `mota`) VALUES
(1, '30*20cm', 'Kích thước: R = 30cm, h= 20cm'),
(2, '40*50*60', 'Dài 40cm; Rộng 50cm; Cao 60cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idloaisanpham` int(11) NOT NULL,
  `tenloaisanpham` varchar(250) NOT NULL,
  `motasanpham` varchar(1000) NOT NULL,
  `anhloaisanpham` varchar(250) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idloaisanpham`, `tenloaisanpham`, `motasanpham`, `anhloaisanpham`, `iddanhmuc`) VALUES
(72, 'sfffvfdb', 'dfbfdbda', 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitems`
--

CREATE TABLE `orderitems` (
  `idorderItems` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `iddondathang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `iddondathang` int(11) NOT NULL,
  `nguoidathang` int(11) NOT NULL,
  `idorderItems` int(11) NOT NULL,
  `tongsoluongsanpham` int(11) NOT NULL,
  `tonggiatien` int(100) NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `id` int(11) NOT NULL,
  `tenphuongthuc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`id`, `tenphuongthuc`) VALUES
(1, 'Banking'),
(2, 'Momo'),
(3, 'Visa'),
(4, 'MasterCard'),
(5, 'Nhận hàng thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphambienthe`
--

CREATE TABLE `sanphambienthe` (
  `idsanphambienthe` int(11) NOT NULL,
  `soluongsanpham` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `giatiengoc` int(11) NOT NULL,
  `giakhuyenmai` int(11) NOT NULL,
  `idloaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphambienthe`
--

INSERT INTO `sanphambienthe` (`idsanphambienthe`, `soluongsanpham`, `size`, `color`, `giatiengoc`, `giakhuyenmai`, `idloaisanpham`) VALUES
(28, 3, 1, 1, 1, 2, 65),
(29, 3, 1, 1, 1, 2, 65),
(30, 3, 1, 1, 1, 2, 66),
(31, 3, 1, 1, 1, 2, 66),
(32, 5, 2, 1, 3, 4, 67),
(33, 99, 1, 1, 99, 99, 69),
(34, 99, 1, 1, 99, 99, 71),
(35, 99, 1, 1, 12, 12, 72);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  ADD PRIMARY KEY (`idanhsanpham`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbinhluan`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kichco`
--
ALTER TABLE `kichco`
  ADD PRIMARY KEY (`idkichco`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idloaisanpham`);

--
-- Chỉ mục cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`idorderItems`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphambienthe`
--
ALTER TABLE `sanphambienthe`
  ADD PRIMARY KEY (`idsanphambienthe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `anhsanpham`
--
ALTER TABLE `anhsanpham`
  MODIFY `idanhsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `idcolor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kichco`
--
ALTER TABLE `kichco`
  MODIFY `idkichco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idloaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `idorderItems` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanphambienthe`
--
ALTER TABLE `sanphambienthe`
  MODIFY `idsanphambienthe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
