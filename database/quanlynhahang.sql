-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2023 lúc 07:25 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban`
--

CREATE TABLE `ban` (
  `SO_BAN` int(255) NOT NULL,
  `TRANG_THAI` varchar(255) DEFAULT NULL,
  `DEL` varchar(255) DEFAULT NULL,
  `MA_HOA_DON` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `ban`
--

INSERT INTO `ban` (`SO_BAN`, `TRANG_THAI`, `DEL`, `MA_HOA_DON`) VALUES
(1, '0', '0', 0),
(2, '0', '0', 0),
(3, '0', '0', 0),
(4, '0', '0', 0),
(5, '0', '0', NULL),
(6, '0', '0', NULL),
(7, '0', '0', 0),
(8, '0', '0', 0),
(9, '0', '0', 0),
(10, '0', '0', 0),
(11, '0', '0', NULL),
(12, '0', '0', NULL),
(13, '0', '0', 0),
(14, '0', '0', NULL),
(15, '0', '0', NULL),
(16, '0', '0', NULL),
(17, '0', '0', NULL),
(18, '0', '0', NULL),
(19, '0', '0', NULL),
(20, '0', '0', NULL),
(21, '0', '1', NULL),
(22, '0', '1', NULL),
(23, '0', '1', NULL),
(24, '0', '1', NULL),
(25, '0', '1', NULL),
(26, '0', '1', NULL),
(27, '0', '1', NULL),
(28, '0', '1', NULL),
(29, '0', '1', NULL),
(30, '0', '1', NULL),
(31, '0', '1', NULL),
(32, '0', '1', NULL),
(33, '0', '1', NULL),
(34, '0', '1', NULL),
(35, '0', '1', NULL),
(36, '0', '1', NULL),
(37, '0', '1', NULL),
(38, '0', '1', NULL),
(39, '0', '1', NULL),
(40, '0', '1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_mon`
--

CREATE TABLE `dat_mon` (
  `MA_HOA_DON` int(255) NOT NULL,
  `MA_MON` int(255) NOT NULL,
  `SO_LUONG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `dat_mon`
--

INSERT INTO `dat_mon` (`MA_HOA_DON`, `MA_MON`, `SO_LUONG`) VALUES
(30, 12, '1'),
(32, 12, '1'),
(33, 12, '1'),
(34, 12, '1'),
(38, 12, '3'),
(39, 12, '1'),
(40, 12, '1'),
(41, 12, '1'),
(42, 12, '1'),
(43, 12, '1'),
(44, 12, '1'),
(45, 12, '1'),
(46, 12, '1'),
(47, 12, '1'),
(48, 12, '1'),
(50, 12, '1'),
(51, 12, '1'),
(30, 13, '1'),
(32, 13, '1'),
(33, 13, '1'),
(34, 13, '1'),
(37, 13, '2'),
(38, 13, '4'),
(39, 13, '1'),
(40, 13, '1'),
(41, 13, '1'),
(42, 13, '1'),
(43, 13, '1'),
(44, 13, '1'),
(45, 13, '1'),
(46, 13, '1'),
(47, 13, '1'),
(48, 13, '1'),
(30, 14, '1'),
(32, 14, '1'),
(34, 14, '1'),
(37, 14, '4'),
(39, 14, '1'),
(40, 14, '1'),
(42, 14, '1'),
(43, 14, '1'),
(44, 14, '1'),
(45, 14, '1'),
(46, 14, '1'),
(47, 14, '1'),
(48, 14, '1'),
(50, 14, '1'),
(51, 14, '1'),
(30, 15, '1'),
(32, 15, '1'),
(34, 15, '1'),
(42, 15, '1'),
(43, 15, '1'),
(44, 15, '1'),
(45, 15, '1'),
(46, 15, '1'),
(47, 15, '1'),
(48, 15, '1'),
(50, 15, '1'),
(51, 15, '1'),
(30, 16, '1'),
(32, 16, '1'),
(34, 16, '1'),
(42, 16, '1'),
(43, 16, '1'),
(44, 16, '1'),
(45, 16, '1'),
(46, 16, '1'),
(47, 16, '1'),
(48, 16, '1'),
(30, 17, '1'),
(32, 17, '1'),
(33, 17, '1'),
(34, 17, '10'),
(36, 17, '10'),
(37, 17, '6'),
(49, 17, '1'),
(50, 17, '1'),
(51, 17, '1'),
(30, 18, '1'),
(32, 18, '1'),
(33, 18, '1'),
(34, 18, '10'),
(36, 18, '10'),
(37, 18, '7'),
(49, 18, '1'),
(50, 18, '1'),
(51, 18, '1'),
(30, 19, '1'),
(32, 19, '1'),
(33, 19, '1'),
(34, 19, '5'),
(36, 19, '10'),
(37, 19, '1'),
(50, 19, '1'),
(51, 19, '1'),
(30, 20, '1'),
(32, 20, '3'),
(33, 20, '1'),
(34, 20, '10'),
(36, 20, '10'),
(50, 20, '1'),
(51, 20, '1'),
(30, 21, '1'),
(49, 21, '1'),
(30, 22, '1'),
(49, 22, '1'),
(30, 23, '1'),
(30, 24, '1'),
(30, 25, '1'),
(30, 26, '1'),
(30, 27, '1'),
(30, 28, '1'),
(30, 29, '1'),
(30, 30, '1'),
(32, 30, '4'),
(33, 30, '1'),
(34, 30, '20'),
(36, 30, '10'),
(37, 30, '1'),
(50, 30, '1'),
(51, 30, '1'),
(50, 31, '1'),
(51, 31, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `MA_HOA_DON` int(255) NOT NULL,
  `MA_KHACH_HANG` int(11) DEFAULT NULL,
  `NGAY_LAP` date DEFAULT NULL,
  `DON_GIA` int(255) DEFAULT NULL,
  `SO_BAN` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`MA_HOA_DON`, `MA_KHACH_HANG`, `NGAY_LAP`, `DON_GIA`, `SO_BAN`) VALUES
(30, 110, '2022-07-20', 950000, 1),
(32, 110, '2022-07-20', 1150000, 3),
(33, NULL, '2022-07-20', 680000, 4),
(34, NULL, '2022-07-20', 4600000, 13),
(36, 110, '2022-07-20', 6175000, 8),
(37, 110, '2022-07-20', 2916000, 3),
(38, 110, '2022-07-20', 93500, 9),
(39, NULL, '2022-07-20', 55000, 7),
(40, NULL, '2022-07-20', 55000, 8),
(41, 110, '2022-07-20', 25500, 4),
(42, 110, '2022-07-21', 85000, 1),
(43, 110, '2022-07-21', 85000, 2),
(44, 110, '2022-07-21', 85000, 3),
(45, 110, '2022-07-21', 85000, 2),
(46, 112, '2022-07-21', 85000, 2),
(47, 110, '2022-07-21', 85000, 3),
(48, 110, '2022-07-21', 85000, 2),
(49, 111, '2022-07-21', 425000, 3),
(50, NULL, '2022-07-21', 713000, 3),
(51, 120, '2022-07-21', 713000, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MA_KHACH_HANG` int(11) NOT NULL,
  `TEN_KHACH_HANG` varchar(255) DEFAULT NULL,
  `SO_DIEN_THOAI` varchar(255) DEFAULT NULL,
  `TONG_TIEN` int(255) DEFAULT NULL,
  `DEL` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`MA_KHACH_HANG`, `TEN_KHACH_HANG`, `SO_DIEN_THOAI`, `TONG_TIEN`, `DEL`) VALUES
(110, 'Phạm Đình Minh', '0696969696', 11454500, 1),
(111, 'Đỗ Đặng Phương', '0987654321', 10925000, 0),
(112, 'Trịnh Quốc Đạt', '0123456789', 20250000, 0),
(113, 'Vũ Bá Lượng', '0888888888', 2500000, 0),
(114, 'Nguyễn Văn A', '0147258369', 150000, 0),
(115, 'Trần Thị B', '0985632741', 3602500, 0),
(116, 'Phạm Văn C', '0874596321', 2500000, 0),
(117, 'Hoàng Thị D', '0856932147', 9500000, 0),
(118, 'Lê Thị E', '0987632154', 7806000, 0),
(119, 'Donald Trump', '0123456987', 3650000, 0),
(120, 'Nguyễn Văn Z', '0368952147', 713000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', '2001-04-01', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `MA_MENU` int(255) NOT NULL,
  `TEN_MENU` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`MA_MENU`, `TEN_MENU`) VALUES
(1, 'Món phụ'),
(2, 'Món Chính'),
(3, 'Đồ uống'),
(4, 'Hoa Quả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `MA_MON` int(255) NOT NULL,
  `TEN_MON` varchar(255) DEFAULT NULL,
  `GIA` int(255) NOT NULL,
  `MA_MENU` int(255) DEFAULT NULL,
  `DEL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `mon_an`
--

INSERT INTO `mon_an` (`MA_MON`, `TEN_MON`, `GIA`, `MA_MENU`, `DEL`) VALUES
(12, 'Salad', 10000, 1, '0'),
(13, 'Ngô chiên', 20000, 1, '1'),
(14, 'Khoai tay chiên', 25000, 1, '0'),
(15, 'Đậu phụ rán', 20000, 1, '0'),
(16, 'Lạc luộc', 25000, 1, '1'),
(17, 'Lẩu ếch', 200000, 2, '0'),
(18, 'Lẩu hải sản', 250000, 2, '0'),
(19, 'Mì xào bò', 50000, 2, '0'),
(20, 'Cánh gà chiên mắm', 50000, 2, '0'),
(21, 'Bia hơi', 30000, 3, '0'),
(22, 'Bia chai', 20000, 3, '0'),
(23, 'Coca', 15000, 3, '0'),
(24, 'Pepsi', 15000, 3, '0'),
(25, 'Dưa hấu', 20000, 4, '0'),
(26, 'Xoài', 20000, 4, '0'),
(27, 'Táo', 15000, 4, '0'),
(28, 'Fanta', 15000, 3, '0'),
(29, 'Ba kích', 50000, 3, '0'),
(30, 'Hàu nướng', 100000, 2, '0'),
(31, 'Xúc xích', 8000, 1, '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`SO_BAN`) USING BTREE;

--
-- Chỉ mục cho bảng `dat_mon`
--
ALTER TABLE `dat_mon`
  ADD PRIMARY KEY (`MA_MON`,`MA_HOA_DON`) USING BTREE,
  ADD KEY `fk_3` (`MA_HOA_DON`) USING BTREE;

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`MA_HOA_DON`) USING BTREE,
  ADD KEY `fk_1` (`SO_BAN`) USING BTREE,
  ADD KEY `fk_2` (`MA_KHACH_HANG`) USING BTREE;

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MA_KHACH_HANG`) USING BTREE;

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MA_MENU`) USING BTREE;

--
-- Chỉ mục cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`MA_MON`) USING BTREE,
  ADD KEY `fk_5` (`MA_MENU`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `MA_HOA_DON` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MA_KHACH_HANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `MA_MON` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dat_mon`
--
ALTER TABLE `dat_mon`
  ADD CONSTRAINT `dat_mon_ibfk_1` FOREIGN KEY (`MA_MON`) REFERENCES `mon_an` (`MA_MON`),
  ADD CONSTRAINT `dat_mon_ibfk_2` FOREIGN KEY (`MA_HOA_DON`) REFERENCES `hoa_don` (`MA_HOA_DON`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`SO_BAN`) REFERENCES `ban` (`SO_BAN`),
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`MA_KHACH_HANG`) REFERENCES `khach_hang` (`MA_KHACH_HANG`);

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `mon_an_ibfk_1` FOREIGN KEY (`MA_MENU`) REFERENCES `menu` (`MA_MENU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
