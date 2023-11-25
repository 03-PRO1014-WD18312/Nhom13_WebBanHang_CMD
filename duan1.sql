-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 05:46 PM
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
(141, 94, 'ip1.jpg'),
(142, 94, 'ip2.jpg'),
(143, 94, 'ip3.jpg'),
(144, 94, 'ip4.jpg'),
(145, 95, 'QuizizzSampleSpreadsheetUpdated.xlsx'),
(146, 96, 'ip2.jpg'),
(147, 96, 'ip3.jpg'),
(148, 97, 'admin.jpg'),
(149, 97, 'dkydn.jpg'),
(150, 97, 'usercase.drawio (1).png'),
(151, 97, 'usercase.drawio.png'),
(152, 98, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(153, 98, 'z4885734743884_f614dd8156675625b1822e126558a0f1.jpg'),
(154, 98, 'z4750946381163_a37a91305cf82691af047b8a089387c2.jpg'),
(155, 98, 'ds.jpg'),
(156, 99, 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg'),
(157, 99, 'z4885734743884_f614dd8156675625b1822e126558a0f1.jpg'),
(158, 99, 'z4750946381163_a37a91305cf82691af047b8a089387c2.jpg'),
(159, 99, 'ds.jpg'),
(160, 100, 'ds.jpg'),
(161, 100, 'admin.jpg'),
(162, 100, 'dkydn.jpg'),
(163, 100, 'usercase.drawio (1).png');

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
(3, 'Nồi và Nồi áp suất', b'0'),
(4, 'Bát, Đĩa, và Đồ đựng thực phẩm', b'0'),
(5, 'Đồ cắt, Thái, và Chế biến thức ăn', b'0');

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
  `giasanpham` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idloaisanpham`, `tenloaisanpham`, `motasanpham`, `anhloaisanpham`, `giasanpham`, `iddanhmuc`) VALUES
(94, 'Nguyễn Mạnh Cương', 'Đẹp trai', 'admin.jpg', 0, 3),
(95, '1', '2', 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg', 0, 1),
(96, 'dũng', '1', 'ip1.jpg', 0, 1),
(97, 'sdvdsv', 'ưd', 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg', 0, 1),
(98, 'sdvdsv', 'ưdsad', 'z4886303002892_48c85167eb5a4aaab623e84897245bb3.jpg', 1, 1),
(99, 'cường', 'áccscs', 'z4885734743884_f614dd8156675625b1822e126558a0f1.jpg', 213, 1),
(100, 'agagag', 'saccsc', 'z4750946381163_a37a91305cf82691af047b8a089387c2.jpg', 23213213, 5);

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
  `giakhuyenmai` int(11) NOT NULL,
  `idloaisanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphambienthe`
--

INSERT INTO `sanphambienthe` (`idsanphambienthe`, `soluongsanpham`, `size`, `color`, `giakhuyenmai`, `idloaisanpham`) VALUES
(71, 1, 1, 3, 1, 94),
(72, 2, 2, 3, 2, 94),
(73, 3, 2, 3, 3, 94),
(74, 2, 1, 1, 2, 95),
(75, 2, 1, 1, 2, 95),
(76, 1, 1, 1, 1, 96),
(77, 1, 1, 1, 1, 96),
(78, 1, 1, 1, 1, 97),
(79, 1, 1, 2, 1, 98),
(80, 123, 1, 2, 123, 99),
(81, 12313, 2, 1, 12313, 100);

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
  MODIFY `idanhsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

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
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `idloaisanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
  MODIFY `idsanphambienthe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
