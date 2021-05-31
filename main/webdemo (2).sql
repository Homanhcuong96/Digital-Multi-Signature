-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 04, 2018 lúc 02:47 CH
-- Phiên bản máy phục vụ: 5.7.17-log
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(3) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `path` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `tendm`, `path`) VALUES
(6, 'Đề cương', 'images/de-cuong.jpg'),
(7, 'Đề thi - Kiểm tra', 'images/de thi.png'),
(8, 'Đồ án - Luận văn', 'images/do an-luan van.jpg'),
(9, 'Văn bản pháp luật', 'images/vanban-phapluat.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `idtl` int(3) NOT NULL,
  `username` varchar(225) COLLATE utf8_vietnamese_ci NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `star`
--

INSERT INTO `star` (`id`, `idtl`, `username`, `rate`, `dt_rated`) VALUES
(9, 12, 'admin', 3, '2018-11-02 07:51:48'),
(10, 8, 'admin', 3, '2018-11-02 07:52:01'),
(11, 5, 'admin', 4, '2018-11-02 07:52:05'),
(12, 12, 'admin1', 5, '2018-11-02 07:52:43'),
(13, 8, 'admin1', 2, '2018-11-02 07:52:50'),
(14, 5, 'admin1', 4, '2018-11-02 07:52:54'),
(16, 13, 'admin', 3, '2018-11-04 14:36:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `idtl` int(3) NOT NULL,
  `username` varchar(225) COLLATE utf8_vietnamese_ci NOT NULL,
  `iddm` int(3) NOT NULL,
  `tentl` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `path` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluotdl` int(3) DEFAULT '0',
  `luotxemtl` int(3) DEFAULT '0',
  `ngayupload` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`idtl`, `username`, `iddm`, `tentl`, `path`, `soluotdl`, `luotxemtl`, `ngayupload`) VALUES
(5, 'admin', 6, 'Đề cương ATMMT', 'uploads/An-toàn-MMT.doc', 0, 12, '2018-11-04 02:21:04'),
(6, 'admin', 8, 'CSDL suy diễn', 'uploads/Báo cáo tìm hiểu CSDL suy diễn và ứng dụng.docx', 0, 1, '2018-11-04 02:21:04'),
(7, 'admin', 9, 'Bổ sung BLHS 2015', 'uploads/ktra1.doc', 0, 1, '2018-11-04 02:21:04'),
(8, 'admin', 6, 'Mật mã cổ điển', 'uploads/Mật mã cổ điển.docx', 2, 11, '2018-11-04 02:21:04'),
(9, 'admin', 8, 'Tấn công Web server', 'uploads/Báo cáo đồ án chuyên ngành.docx', 0, 1, '2018-11-04 02:21:04'),
(10, 'admin', 7, 'Đề kiểm tra số 1', 'uploads/DeSo1.doc', 0, 0, '2018-11-04 02:21:04'),
(11, 'admin', 7, 'Đề kiểm tra số 2', 'uploads/DeSo2.doc', 0, 1, '2018-11-04 02:21:04'),
(12, 'admin', 6, 'Chứng thư số', 'uploads/Chung-thu-so.doc', 4, 15, '2018-11-04 02:21:04'),
(13, 'admin', 6, 'kkkk', 'uploads/uploads_ktra1.doc', 0, 2, '2018-11-04 04:04:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(225) COLLATE utf8_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idtl` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(225) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator@gmail.com', 1),
('admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', 'admin1@gmail.com', 1),
('user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1', 'user1@gmail.com', 2),
('user2', '7e58d63b60197ceb55a1c487989a3720', 'user2', 'user2@gmail.com', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Chỉ mục cho bảng `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtl` (`idtl`,`username`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`idtl`),
  ADD KEY `username` (`username`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `username` (`username`,`idtl`),
  ADD KEY `idtl` (`idtl`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `idtl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `star`
--
ALTER TABLE `star`
  ADD CONSTRAINT `star_ibfk_1` FOREIGN KEY (`idtl`) REFERENCES `tailieu` (`idtl`),
  ADD CONSTRAINT `star_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Các ràng buộc cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD CONSTRAINT `tailieu_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `tailieu_ibfk_2` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`);

--
-- Các ràng buộc cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `tbl_comment_ibfk_2` FOREIGN KEY (`idtl`) REFERENCES `tailieu` (`idtl`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
