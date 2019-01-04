-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 03:54 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `id` int(10) NOT NULL,
  `tenbaihat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tencasi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `tencasi`, `link`, `anh`) VALUES
(1, 'Thanh xuân', 'Dalab', 'nhac\\Thanh-Xuan-Da-LAB.mp3', './image/download (1).jpg'),
(2, 'Túy Âm', 'Xesi-Masew-Nhật Nguyễn', 'nhac\\Tuy-Am-Xesi-Masew-Nhat-Nguyen.mp3', './image/download (2).jpg'),
(3, 'Em ngủ chưa', 'Trịnh Thăng Bình-Osad', 'nhac\\Em-Ngu-Chua-Trinh-Thang-Binh-OSAD.mp3', './image/download (3).jpg'),
(4, 'Vô tình', 'Xesi-Hoaprox', 'nhac\\Vo-Tinh-Xesi-Hoaprox.mp3', './image/download (7).jpg'),
(5, 'Sao em nỡ', 'Jaykii', 'nhac\\Sao-Em-No-JayKii.mp3', './image/download (6).jpg'),
(6, 'Mashup rapcostic 4', 'Đen-Lynk Lee-Kimmese', 'nhac\\Mashup-Rapcoustic-4-Den-Kimmese-Lynk-Lee.mp3', './image/download (11).jpg'),
(7, 'Yêu rồi', 'Tino', 'nhac\\Yeu-Roi-Gao-Nep-Gao-Te-OST-Tino.mp3', './image/download (13).jpg'),
(8, 'Em không  thể', 'Tiên Tiên', 'nhac\\Em-Khong-The-Tien-Tien-Touliver.mp3', './image/download (8).jpg'),
(9, 'Từ ngày em đến', 'Dalab', 'nhac\\Tu-Ngay-Em-Den-Da-LAB.mp3', './image/download (19).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mv`
--

CREATE TABLE `mv` (
  `id` int(10) NOT NULL,
  `tenmv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tencasi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mv`
--

INSERT INTO `mv` (`id`, `tenmv`, `tencasi`, `link`, `anh`) VALUES
(1, 'Chạy ngay đi', 'Sơn Tùng MTP', 'https://www.youtube.com/embed/32sYGCOYJUM', './image/download (12).jpg'),
(2, 'Mời anh vào team em', 'Chi Pu', 'https://www.youtube.com/embed/AhNMmPuHt_8', './image/download (14).jpg'),
(3, 'Đã lỡ yêu em nhiều', 'Justatee', 'https://www.youtube.com/embed/KhTCatAKVpk', './image/download (15).jpg'),
(4, 'Mặt trời của em', 'Phương Ly', 'https://www.youtube.com/embed/t0WFOnwp3MM', './image/download (16).jpg'),
(5, 'Bùa yêu', 'Bích Phương', 'https://www.youtube.com/embed/FkOt19CUC30', './image/images.jpg'),
(6, 'Tận cùng nỗi nhớ', 'Will(365)', 'https://www.youtube.com/embed/dmnEJwWFHD0', './image/download (18).jpg'),
(7, 'Sau tất cả', 'Erik(St319)', 'https://www.youtube.com/embed/wHF3Jv6Gk2o', './image/download (20).jpg'),
(8, 'Anh đang ở đâu đấy anh', 'Hương Giang Idol', 'https://www.youtube.com/embed/RLGiEBsQ1Xg', './image/download (5).jpg'),
(9, 'Còn yêu,đâu ai rời đi', 'Đức Phúc', 'https://www.youtube.com/embed/VCYJckDc_fw', './image/download (17).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'ronaldo7', '96e79218965eb72c92a549dd5a330112'),
(3, 'huy123', '5492784d81919b6d48a6b79fdceba049');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mv`
--
ALTER TABLE `mv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `mv`
--
ALTER TABLE `mv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
