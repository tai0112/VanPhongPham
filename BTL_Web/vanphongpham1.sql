-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2024 lúc 01:25 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vanphongpham1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `maGH` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` text NOT NULL,
  `HinhAnh` text NOT NULL,
  `soLuong` int(11) NOT NULL DEFAULT 1,
  `thanhTien` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`maGH`, `maSP`, `tenSP`, `HinhAnh`, `soLuong`, `thanhTien`) VALUES
(2, 1, 'Pen box				', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442498856_1152049619441294_7972942393309703008_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=a1LnT0jl3usQ7kNvgG1pUF6&_nc_oc=AdgB8zRqLQ8IgKRsAYQRB99FYOwSibkIclz_cIjaxH_iNM03N5I4MynpHOEoWVeZLt0aJuGpf1ev9nmMhUgRqb8M&_nc_ht=scontent.fhan14-1.fna&oh=00_AYA-ButCa7LsoJ_v47Sv3XLXye7vpLriSEGjBZi0vaBUFg&oe=66515994', 1, 45000),
(2, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 1, 11000),
(13, 2, 'Pack of Pencil', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441516370_1152049609441295_5668520394993299975_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=04NHi-s87YgQ7kNvgFduh-e&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDTHLhPPOiBeB0fuuzrVFfOujf5p4m1pm12txD4YvwsGg&oe=665139BA', 1, 55000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `maHD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` text NOT NULL,
  `hinhAnh` text NOT NULL,
  `soLuong` int(9) NOT NULL,
  `thanhTien` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`maHD`, `maSP`, `tenSP`, `hinhAnh`, `soLuong`, `thanhTien`) VALUES
(41, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(41, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 1, 11000),
(42, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(43, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 3, 15000),
(43, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(44, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 1, 11000),
(45, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(46, 12, 'RUỘT BÚT BI THIÊN LONG BPR-08 - DÙNG CHO BÚT BI THIÊN LONG', 'https://product.hstatic.net/1000230347/product/fdsf_36841285099e4977a8ada272b01c0aac_large.jpg', 1, 2000),
(52, 27, 'MỰC BÚT LÔNG BẢNG THIÊN LONG WBI-01', 'https://product.hstatic.net/1000230347/product/wbi-01_c5296bf9c8bd41138db1849bf0e3c72a_large.jpg', 1, 25200),
(53, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(53, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(55, 26, 'BÚT LÔNG DẦU THIÊN LONG PM-04', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867_large.jpg', 3, 35100),
(56, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 10, 50000),
(57, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(58, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(58, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 1, 11000),
(59, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 3, 33000),
(60, 1, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_3_30b224a815064725aa9b5171472c4825_large.jpg', 9, 40500),
(60, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(61, 1, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_3_30b224a815064725aa9b5171472c4825_large.jpg', 1, 4500),
(61, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(61, 8, 'BÚT CHÌ GỖ THIÊN LONG GP', 'https://product.hstatic.net/1000230347/product/b12_0262c247d9fe408795e01f515f4cd47b_large.jpg', 1, 4000),
(61, 27, 'MỰC BÚT LÔNG BẢNG THIÊN LONG WBI-01', 'https://product.hstatic.net/1000230347/product/wbi-01_c5296bf9c8bd41138db1849bf0e3c72a_large.jpg', 1, 25200),
(64, 1, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_3_30b224a815064725aa9b5171472c4825_large.jpg', 3, 13500),
(65, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(65, 10, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-09_bf33418871584732a2cceb37e091aaca_large.jpg', 1, 11000),
(66, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 3, 33000),
(66, 7, 'ỐNG MỰC ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/ong_muc_thien_long_-_diem_10_fpic-02__9__large.jpg', 3, 3000),
(66, 26, 'BÚT LÔNG DẦU THIÊN LONG PM-04', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867_large.jpg', 4, 46800),
(74, 1, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_3_30b224a815064725aa9b5171472c4825_large.jpg', 1, 4500),
(75, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 3, 33000),
(75, 5, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_1_dcd900919c0648c09dd6cba1bf535f28_large.jpg', 3, 12000),
(77, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 3, 33000),
(77, 4, 'BÚT BI ĐIỂM 10', 'https://product.hstatic.net/1000230347/product/but-bi-diem-10-tp-06_632be6ed7142432dbfd19b74e17ab1fb_large.jpg', 1, 5000),
(78, 8, 'BÚT CHÌ GỖ THIÊN LONG GP', 'https://product.hstatic.net/1000230347/product/b12_0262c247d9fe408795e01f515f4cd47b_large.jpg', 10, 40000),
(80, 3, 'BÚT LÔNG DẦU THIÊN LONG ', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867.jpg', 8, 88000),
(84, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(86, 1, 'BÚT BI FLEXOFFICE', 'https://product.hstatic.net/1000230347/product/artboard_3_30b224a815064725aa9b5171472c4825_large.jpg', 3, 13500),
(86, 2, 'Bút bi thiên long', 'https://product.hstatic.net/1000230347/product/artboard_1_a4dec805fbc74754870e22f9d548a0c7_large.jpg', 1, 5000),
(87, 4, 'Fine Line Colored Gel Pens', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/428358263_1151459756166947_4596748834970572181_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U0TuiHfSYscQ7kNvgE_kBod&_nc_ht=scontent.fhan14-3.fna&oh=00_AYAGnB4aRtcuR9FHiFEOwBqoPGnOnpmqAHzhDeUTFiVUzw&oe=66500CC7', 1, 5000),
(87, 8, 'Lever Arch File A4 3-Inch Spin...', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442469493_1151459892833600_3090190492845199935_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=zp5uKqjGSVkQ7kNvgGQ469X&_nc_ht=scontent.fhan14-1.fna&oh=00_AYBEi1eELk9g68WHWgKEZ-GmDrYOhJwgu_xNHP3dvm_TCg&oe=664FF21E', 1, 50000),
(87, 18, ' Bulle und Pelle', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442463328_1151459729500283_388477537240145626_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=sSQsvC4MFSsQ7kNvgHb_0xT&_nc_ht=scontent.fhan14-1.fna&oh=00_AYC4T-GuD_6LIGGEvjtTnXOjvhZ7MD_MMF0daik_dMskbQ&oe=6650026F', 1, 120000),
(87, 46, ' Masking Creative Tape', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441405205_1151754259470830_7429390013719590767_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=f5MfUVr9edAQ7kNvgEPqX8c&_nc_ht=scontent.fhan14-3.fna&oh=00_AYC3NZNPr8MKjiMiIAjXYxuSYGMkcPxfXx3JrgH7sVj_bA&oe=66509E1B', 1, 26000),
(88, 1, 'Pen box				', 'https://tehsen.waheeddev.com/ingoude/wp-content/uploads/2023/12/product-13-1-290x300.jpg', 1, 45000),
(88, 2, 'Pack of Pencil', 'https://tehsen.waheeddev.com/ingoude/wp-content/uploads/2023/12/product-11-1-290x300.jpg', 1, 55000),
(88, 18, ' Bulle und Pelle', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442463328_1151459729500283_388477537240145626_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=sSQsvC4MFSsQ7kNvgHb_0xT&_nc_ht=scontent.fhan14-1.fna&oh=00_AYC4T-GuD_6LIGGEvjtTnXOjvhZ7MD_MMF0daik_dMskbQ&oe=6650026F', 1, 120000),
(89, 2, 'Pack of Pencil', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441516370_1152049609441295_5668520394993299975_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=04NHi-s87YgQ7kNvgFduh-e&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDTHLhPPOiBeB0fuuzrVFfOujf5p4m1pm12txD4YvwsGg&oe=665139BA', 1, 55000),
(89, 3, 'Academic Calendar', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/442496069_1152049562774633_3431809086076184647_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XyuQFkaZp5sQ7kNvgEq47hR&_nc_ht=scontent.fhan14-3.fna&oh=00_AYC4GVL43vuTa3SrI7UWE7wpkrZFnZfpP34g3sB0P-IUxQ&oe=66513A5C', 1, 22000),
(89, 6, 'Modern Promotional Notebook', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/442485756_1152045546108368_6958713567453238656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=SmIq5J0AIfMQ7kNvgHKIvvO&_nc_ht=scontent.fhan14-3.fna&oh=00_AYA7bJx4S0LMH8IF3KtxfMu4QvcorOm9qAsWrX7DFD4D2g&oe=66514D68', 1, 9000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `maGH` int(11) NOT NULL,
  `maTK` int(11) NOT NULL,
  `thanhTien` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`maGH`, `maTK`, `thanhTien`) VALUES
(1, 1, 0),
(2, 2, 56000),
(3, 3, 0),
(13, 4, 55000),
(14, 5, 0),
(15, 6, 0),
(21, 12, 0),
(22, 13, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `maTaiKhoan` int(11) NOT NULL,
  `ngayMua` datetime NOT NULL,
  `thanhTien` int(8) NOT NULL,
  `DiaChi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `maTaiKhoan`, `ngayMua`, `thanhTien`, `DiaChi`) VALUES
(41, 1, '2024-05-14 11:43:19', 16000, 'Hà Nội'),
(42, 1, '2024-05-14 11:56:27', 5000, 'Hà Đông'),
(43, 1, '2024-05-16 08:18:25', 10000, ''),
(44, 2, '2024-05-16 08:19:27', 11000, ''),
(45, 2, '2024-05-16 08:19:50', 5000, ''),
(46, 1, '2024-05-16 08:21:25', 2000, ''),
(52, 1, '2024-05-16 08:31:08', 25200, ''),
(53, 1, '2024-05-16 08:32:49', 10000, ''),
(55, 1, '2024-05-16 08:55:23', 11700, ''),
(56, 1, '2024-05-16 08:58:19', 5000, ''),
(57, 1, '2024-05-16 09:02:27', 5000, ''),
(58, 1, '2024-05-16 09:04:06', 16000, ''),
(59, 1, '2024-05-17 09:54:16', 11000, ''),
(60, 1, '2024-05-17 09:56:35', 45500, ''),
(61, 2, '2024-05-17 10:46:34', 38700, ''),
(64, 3, '2024-05-18 03:16:12', 4500, ''),
(65, 3, '2024-05-18 03:16:41', 16000, ''),
(66, 2, '2024-05-18 10:10:47', 47700, ''),
(74, 2, '2024-05-18 10:46:01', 4500, ''),
(75, 2, '2024-05-18 10:47:11', 45000, ''),
(77, 1, '2024-05-18 11:16:21', 38000, ''),
(78, 1, '2024-05-18 11:17:34', 40000, ''),
(80, 1, '2024-05-18 11:19:20', 88000, ''),
(84, 5, '2024-05-18 11:31:00', 5000, ''),
(86, 6, '2024-05-19 10:38:00', 9500, ''),
(87, 4, '2024-05-20 05:36:38', 201000, ''),
(88, 4, '2024-05-20 11:59:21', 220000, ''),
(89, 1, '2024-05-21 09:25:06', 86000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `SDT`, `email`) VALUES
(1, 'Lê Hữu Tài', '0328097858', 'tai023156@gmail.com'),
(2, 'Nguyễn Minh Anh', '0984851460', 'minhanh@gmail.com'),
(3, 'Nguyễn Văn Minh', '0984828123', 'vanminh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maLoaiSP` int(11) NOT NULL,
  `tenLoaiSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maLoaiSP`, `tenLoaiSP`) VALUES
(1, 'Bút viết'),
(2, 'Văn phòng phẩm'),
(3, 'Dụng cụ học tập'),
(4, 'Mỹ thuật'),
(5, 'Giấy in'),
(6, 'Sách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `HoTen` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `maLoaiSP` int(11) NOT NULL,
  `tenSP` varchar(100) NOT NULL,
  `giaSP` int(11) NOT NULL,
  `moTa` text NOT NULL,
  `hinhAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `maLoaiSP`, `tenSP`, `giaSP`, `moTa`, `hinhAnh`) VALUES
(1, 3, 'Pen box				', 45000, 'Hộp đựng bút là một vật dụng quen thuộc đối với học sinh, sinh viên và những người thường xuyên sử dụng bút viết. Hộp bút có nhiều loại, mẫu mã và kích thước khác nhau, nhưng chức năng chính của chúng đều là để đựng bút viết, thước kẻ, tẩy và các dụng cụ học tập khác.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442498856_1152049619441294_7972942393309703008_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=a1LnT0jl3usQ7kNvgG1pUF6&_nc_oc=AdgB8zRqLQ8IgKRsAYQRB99FYOwSibkIclz_cIjaxH_iNM03N5I4MynpHOEoWVeZLt0aJuGpf1ev9nmMhUgRqb8M&_nc_ht=scontent.fhan14-1.fna&oh=00_AYA-ButCa7LsoJ_v47Sv3XLXye7vpLriSEGjBZi0vaBUFg&oe=66515994'),
(2, 4, 'Pack of Pencil', 55000, 'Hộp bút chì là một vật dụng quen thuộc đối với học sinh, sinh viên, nghệ sĩ và những người thường xuyên sử dụng bút chì. Hộp bút chì có nhiều loại, mẫu mã và kích thước khác nhau, nhưng chức năng chính của chúng đều là để đựng bút chì, tẩy và các dụng cụ học tập khác.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441516370_1152049609441295_5668520394993299975_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=04NHi-s87YgQ7kNvgFduh-e&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDTHLhPPOiBeB0fuuzrVFfOujf5p4m1pm12txD4YvwsGg&oe=665139BA'),
(3, 2, 'Academic Calendar', 22000, 'Lịch học có vai trò quan trọng đối với việc tổ chức các hoạt động học tập trong năm học. Nó giúp cho học sinh, sinh viên, giáo viên và phụ huynh nắm được thời gian học tập, thời gian thi cử và các sự kiện quan trọng khác trong năm học. Nhờ vậy, mọi người có thể lên kế hoạch học tập, thi cử và tham gia các hoạt động ngoại khóa một cách hợp lý.', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/442496069_1152049562774633_3431809086076184647_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XyuQFkaZp5sQ7kNvgEq47hR&_nc_ht=scontent.fhan14-3.fna&oh=00_AYC4GVL43vuTa3SrI7UWE7wpkrZFnZfpP34g3sB0P-IUxQ&oe=66513A5C'),
(4, 4, 'Fine Line Colored Gel Pens', 5000, 'Fine Line Colored Gel Pens là sản phẩm do Tập đoàn văn phòng phẩm Thiên Long sản xuất, mang nhãn hiệu FlexOffice. Bút FO-03 thiết kế trẻ trung , nhỏ gọn , dễ sử dụng . Sản phẩm được sản xuất theo công nghệ hiện đại, kiểu dáng phù hợp cho đối tượng học sinh, nhân viên văn phòng, tiểu thương, lao động phổ thông. Dạng bút bi cửa sổ bấm. Nút bấm và lò xo rất nhạy và bền, không bung, không kẹt, không tự rơi ra ngoài của sổ bấm. Tay cầm có hoa văn , giúp cầm bút không trơn , trượt khi viết. Mực không độc hại tiêu chuẩn quốc tế.', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441406707_1152045586108364_380905381059992760_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=iVwz_WJBFzYQ7kNvgFHhSdQ&_nc_ht=scontent.fhan14-3.fna&oh=00_AYD9cTHi4U27DjVK3H8-QzZRqb815bl8T2bSLKmx1M1doQ&oe=66512F7A'),
(5, 3, 'A5 Lined Notebook', 4000, 'Những notebook này được thiết kế cho các tác vụ văn phòng năng suất, chẳng hạn như soạn thảo văn bản, bảng tính và thuyết trình. Chúng thường có màn hình lớn hơn, bàn phím thoải mái hơn và ổ cứng dung lượng lớn hơn.', 'https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/441405032_1152045542775035_8536599289567139052_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=oMCK00IAKhQQ7kNvgEva31C&_nc_ht=scontent.fhan14-4.fna&oh=00_AYAIBEYGk9RNYIO1c03Xup5O1gU9IjJKULdM9sLLetEBvw&oe=66512E33'),
(6, 3, 'Modern Promotional Notebook', 9000, 'Sổ tay quảng cáo hiện đại có nhiều kích thước, hình dạng và màu sắc khác nhau. Chúng có thể được tùy chỉnh với logo, khẩu hiệu và thông tin liên hệ của doanh nghiệp của bạn. Chúng cũng có thể được cá nhân hóa bằng cách thêm tên của người nhận hoặc thông điệp đặc biệt.', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/442485756_1152045546108368_6958713567453238656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=SmIq5J0AIfMQ7kNvgHKIvvO&_nc_ht=scontent.fhan14-3.fna&oh=00_AYA7bJx4S0LMH8IF3KtxfMu4QvcorOm9qAsWrX7DFD4D2g&oe=66514D68'),
(7, 3, 'Acrylic Stylish Pencil Holder', 1000, 'Giá đỡ bút Acrylic Phong cách là một vật dụng trang trí và tiện dụng cho bàn làm việc hoặc bàn học của bạn. Nó được làm bằng acrylic trong suốt, tạo vẻ ngoài hiện đại và thanh lịch.', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/442479848_1152045576108365_5327073328057822061_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QGX5tpap3ZYQ7kNvgG8Rz-a&_nc_ht=scontent.fhan14-5.fna&oh=00_AYCyeQrHyTfgwTXTMpSP8DCV8vGuzrNq5iC1-PTQbvBkDA&oe=665139C2'),
(8, 5, 'Lever Arch File A4 3-Inch Spin...', 50000, 'File kẹp lò xo A4 3 Inch Spinnet là một dụng cụ lưu trữ tài liệu phổ biến được sử dụng trong văn phòng, trường học và nhà riêng. Nó được thiết kế để lưu trữ các tài liệu kích thước A4 một cách an toàn và có tổ chức.', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441465020_1152049559441300_4238992313520513333_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=0MogEY_S3f0Q7kNvgHnj-_K&_nc_ht=scontent.fhan14-3.fna&oh=00_AYD8Nkp0k7s0GBsQOLkVS6P3amq3jjLeCB0CNDrSzj1j8g&oe=6651549B'),
(9, 1, 'Stainless steel fountain pen', 25000, 'Bút máy thép không gỉ là một loại bút máy được làm từ thép không gỉ. Thép không gỉ là một hợp kim của sắt, crom và niken, có khả năng chống gỉ và ăn mòn. Điều này khiến bút máy thép không gỉ trở thành một lựa chọn phổ biến cho những người muốn có một cây bút bền và đáng tin cậy.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442469525_1152049552774634_5710210473234233617_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=B6f5DFtDDVgQ7kNvgGWYryE&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDNc7f0kUaWA09q9rCQ-Z_bGFG86yZuzJ4qwVgmCd8B6A&oe=665126CD'),
(10, 3, 'Smart Wireless Label Printer', 11000, 'Máy in nhãn thông minh không dây là thiết bị cho phép bạn in nhãn từ điện thoại thông minh hoặc máy tính bảng của mình mà không cần kết nối với máy tính. Chúng sử dụng công nghệ Bluetooth, Wi-Fi hoặc NFC để kết nối với thiết bị của bạn và có thể in nhiều loại nhãn khác nhau, bao gồm nhãn kích thước, nhãn mã vạch và nhãn văn bản tùy chỉnh.', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/441517117_1152045466108376_1217623990713094459_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=VTitj-pnj9IQ7kNvgG3gkT2&_nc_ht=scontent.fhan14-5.fna&oh=00_AYDdmFAY6x2hZEVngdHpcP8oqLQlq8LQsbug8PNMtNr3lQ&oe=665142D5'),
(11, 3, 'Spiral clipping isolated noteb...', 8000, 'Sổ tay gáy lò xo có kẹp là loại sổ tay phổ biến cho học sinh và những người ghi chép. Gáy lò xo cho phép sổ tay nằm phẳng, và kẹp có thể được sử dụng để cố định giấy tờ hoặc các vật dụng khác.\r\n\r\n', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442482500_1152045462775043_3267898675003251759_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Y2MqSHKJk70Q7kNvgG7xFKf&_nc_ht=scontent.fhan14-2.fna&oh=00_AYDnEPlcF9PURggK9Qb5isTj8oo9Cgwkes2mzwg4I7QcVQ&oe=66513620'),
(12, 6, 'The Assualt', 80000, 'Tóm tắt tiểu thuyết \"Cuộc tấn công\" (The Assault) của Harry Mulisch\r\nTác giả: Harry Mulisch (1927-2007)\r\n\r\nNăm xuất bản: 1981\r\n\r\nThể loại: Tiểu thuyết tâm lý, chiến tranh\r\n\r\nBối cảnh: Thế chiến II, Hà Lan\r\n\r\nNhân vật chính: Anton Antonides, một sĩ quan quân đội Hà Lan trẻ tuổi', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442489737_1151710162808573_4679615353015279985_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=57AqAtg93AIQ7kNvgH0R-eB&_nc_ht=scontent.fhan14-2.fna&oh=00_AYDeq-hHHkCtoPmVcq76nTrEA0P6WezO0xUVPdjlaVh0oA&oe=6650B0E7'),
(13, 6, 'Karate Enemy', 95000, 'Tóm tắt tiểu thuyết \"Kẻ thù Karate\" (Karate Enemy) của Mike Marquardt\r\nTác giả: Mike Marquardt\r\n\r\nNăm xuất bản: 1974\r\n\r\nThể loại: Tiểu thuyết võ thuật\r\n\r\nBối cảnh: Hoa Kỳ những năm 1970\r\n\r\nNhân vật chính: Frank Logan, một võ sĩ karate trẻ tuổi\r\n\r\nLợi ích:\r\n- Đầu bi nhỏ cho nét chữ thanh mảnh.\r\n- Cơ chế bấm nằm gọn dưới giắt bút, giúp thuận tay khi sử dụng.\r\n- Thay ruột khi hết mực.', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/442483031_1151710152808574_3189865511743877587_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=TRE_cPX4VCEQ7kNvgFpSbeT&_nc_ht=scontent.fhan14-5.fna&oh=00_AYBuINSKLOMUlcGm3z6woYnrzOhYnqqr_3pKC9i25Dvqcg&oe=66508FB7'),
(14, 6, 'Overthinking', 79000, 'Mô tả sách Overthinking: Overcoming Unhelpful Beliefs and Emotions by Gail D. Peterson\r\nTác giả: Gail D. Peterson, Tiến sĩ tâm lý học\r\n\r\nNăm xuất bản: 2013\r\n\r\nThể loại: Sách self-help, tâm lý học\r\n\r\nĐối tượng độc giả: Những người thường xuyên suy nghĩ tiêu cực, lo âu, hay lo lắng quá mức.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442484034_1151459569500299_6153465335204235377_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=qc_TtT6h94AQ7kNvgGGaiWa&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDEh_b7YcmEOxqZo7omcK1CJAtgzMZifMgwRvCsYyNk6g&oe=66501ADE'),
(15, 6, 'Disappeared', 83600, 'Thể loại:\r\n\r\nTâm lý ly kỳ: Thể loại này thường có cốt truyện ly kỳ, bí ẩn và liên quan đến những người mất tích. Chúng có thể khiến bạn hồi hộp khi cố gắng đoán xem chuyện gì đã xảy ra với những nhân vật biến mất.\r\nTrinh thám: Những cuốn sách này thường tập trung vào việc giải quyết các câu đố và khám phá những bí mật ẩn giấu. Chúng có thể liên quan đến thám tử, điều tra viên hoặc thám tử nghiệp dư cố gắng piecing together clues and identifying the culprit behind the disappearances.', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/441288093_1151459639500292_6760320080736712595_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=mWpysI2Dpa8Q7kNvgFkQ_zS&_nc_ht=scontent.fhan14-2.fna&oh=00_AYAMHa6UtxawUWBKmTZEk6CvYfBL8KxQfyv2eMPZC4U8rQ&oe=66501C2D'),
(16, 6, 'The Night Ocean', 99000, 'Tác giả: Vikram Seth\r\n\r\nNăm xuất bản: 1991\r\n\r\nThể loại: Tiểu thuyết\r\n\r\nBối cảnh: Ấn Độ những năm 1980\r\n\r\nNhân vật chính: Kathu, một phụ nữ trẻ widowed, và Manohar, một giáo viên trẻ.\r\n\r\n\"The Night Ocean\" là một tiểu thuyết kể về câu chuyện tình yêu giữa Kathu, một phụ nữ trẻ widowed, và Manohar, một giáo viên trẻ. Câu chuyện được đặt trong bối cảnh Ấn Độ những năm 1980, và khám phá các chủ đề về tình yêu, mất mát, và sự trưởng thành.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442503823_1151459662833623_4142139531508675920_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=VR2LYAqowL0Q7kNvgFJzEnT&_nc_ht=scontent.fhan14-1.fna&oh=00_AYAyjAPO9rmwPnvnRJadNT3T3vUbDVtmEzRDwuf9eAn5lw&oe=664FE9B0'),
(17, 6, 'The Summer ', 79400, 'Mô tả sách \"Mùa hè không tên\" - Nguyễn Nhật Ánh\r\nTác giả: Nguyễn Nhật Ánh\r\n\r\nNăm xuất bản: 2023\r\n\r\nThể loại: Văn học Việt Nam, Truyện dài\r\n\r\nBối cảnh: Làng Đo Đo, Việt Nam những năm 1980\r\n\r\nNhân vật chính: Khang, một cậu bé tuổi mới lớn, và các bạn của cậu: Tí, Chỉnh, Túc, Đính,...\r\n\r\nTóm tắt:\r\n\r\n\"Mùa hè không tên\" là câu chuyện về Khang, một cậu bé tuổi mới lớn sống ở làng Đo Đo. Mùa hè năm ấy, Khang trải qua nhiều biến động trong cuộc sống, từ những rung động đầu đời với cô bạn Nhàn, đến những thử thách về tình bạn và gia đình. Cuốn sách là một bức tranh sinh động về cuộc sống tuổi thơ ở làng quê Việt Nam những năm 1980, với những trò chơi dân gian, những tình bạn hồn nhiên và những bài học quý giá về cuộc sống.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441414059_1151459659500290_6352195467537102759_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=E3madD9DNCoQ7kNvgHXvaJU&_nc_ht=scontent.fhan14-1.fna&oh=00_AYBGrppumX4ShxUzaiCSTwcXCMUcCFUSNLKM-5SoXVbIzA&oe=664FF681'),
(18, 6, ' Bulle und Pelle', 120000, '\"Bulle und Pelle: Eine Geschichte über den Tod\" là một cuốn sách dành cho trẻ em về cái chết. Nó kể về câu chuyện của hai người bạn, Bulle và Pelle, những người học về cái chết khi ông nội của Pelle qua đời. Cuốn sách khám phá các chủ đề về đau buồn, mất mát và đối phó với cái chết một cách nhạy cảm và phù hợp với lứa tuổi.\r\n\r\nCó tính ứng dụng rộng\r\nKẹp bướm công thái học Thiên Long - Ergonomic Binder Clips có thể kẹp chặt lượng tài liệu ít, mỏng tối đa 10 tờ A4 để không bị bung rời. Kẹp giấy đầu tròn hiệu quả trong việc bảo quản, phân loại và tránh thất lạc các liên giấy, tài liệu rời trong công việc, học tập. Nhờ đó mà công tác văn phòng sẽ trở nên đơn giản và nhẹ nhàng hơn.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442463328_1151459729500283_388477537240145626_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=sSQsvC4MFSsQ7kNvgHb_0xT&_nc_ht=scontent.fhan14-1.fna&oh=00_AYC4T-GuD_6LIGGEvjtTnXOjvhZ7MD_MMF0daik_dMskbQ&oe=6650026F'),
(19, 6, 'Beyound Gratitude', 82000, 'Cuốn sách \"Beyond Gratitude\" (Vượt qua Lòng Biết Ơn) của tác giả Michael J. Fox là một hành trình khám phá sức mạnh biến đổi của lòng biết ơn. Thay vì chỉ tập trung vào việc cảm thấy biết ơn những điều tốt đẹp trong cuộc sống, Fox đề xuất một cách tiếp cận sâu sắc hơn, giúp ta chuyển hóa những trải nghiệm khó khăn thành cơ hội cho sự phát triển cá nhân và tinh thần.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441418732_1151459739500282_5495493652471982931_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=wjVOWTF4LAMQ7kNvgGbqgT9&_nc_ht=scontent.fhan14-1.fna&oh=00_AYA9rY5y7Q3ILmUsja7JRzAVx3CDeX8o-huGxhFS4h0p7g&oe=66501A29'),
(20, 2, 'PIN ALKALINE AA THIÊN LONG FLEXIO', 17600, 'PIN ALKALINE AA THIÊN LONG FLEXIO', 'https://product.hstatic.net/1000230347/product/artboard_3_copy_2_44a81837e9664be4936148e2c3fba91b.jpg'),
(21, 2, 'SỔ LÒ XO ĐƯỜNG KẺ NGANG B5 THIÊN LONG', 45900, 'Quyển sổ tay là một cuốn sách nhỏ có kích thước phổ biến là 15x21cm hoặc 10x15cm, được làm từ giấy trắng hoặc màu và có bìa cứng hoặc mềm. Nó thường được sử dụng để ghi chép các thông tin, ý tưởng, lời nhắn, kế hoạch và các ghi chú khác. Quyển sổ tay có thể có nhiều loại bìa khác nhau, từ bìa da, bìa vải, bìa giấy đến bìa nhựa. Nó cũng có thể có các trang giấy trắng, giấy kẻ ngang hoặc giấy kẻ dọc, tùy thuộc vào mục đích sử dụng. Quyển sổ tay là một vật dụng hữu ích cho những người thường xuyên phải ghi chép và lưu trữ thông tin.', 'https://product.hstatic.net/1000230347/product/04_d1e08d80bcd143bd9b26d48aadd422ab_large.jpg'),
(23, 2, 'Băng keo - Băng dính kéo 2 mặt', 27900, 'Tính năng nổi bật:\r\n\r\n• Keo bám dính tốt, không làm nhăn giấy.\r\n\r\n• Thân và nắp được làm từ nhựa ABS và PS.\r\n\r\n• Sản phẩm nhỏ gọn, dễ dàng mang theo bất cứ đâu, nắp đậy chống bụi bẩn.', 'https://product.hstatic.net/1000230347/product/artboard_1_87416f1daf9d4ef3b304b02319663053_large.jpg'),
(24, 1, 'Pilot Frixion Erasable Rollerball Pack of 3 Black\r\n', 96000, 'Bút bi Frixion Erasable 3 cây mực đen của Pilot là bộ bút bi có 3 cây bút với mực có thể xóa được. Bút có đầu ngòi mảnh (0.7 mm) và mực đen. Mực có thể xóa được bằng gôm tẩy ma sát cao su đặc biệt trên đầu bút. Điều này cho phép bạn sửa sai mà không làm hỏng giấy.', 'https://livedemo00-opencart.template-help.com/opencart_prod-22379/image/cache/catalog/products/product-45-1000x1000.png'),
(25, 2, 'BÌA CÒNG FLEXOFFICE 50F4 FO-BC13', 57600, 'Đặc Điểm:\r\n\r\nBìa còng Thiên Long - Flexoffice 50F4 FO-BC13 có khổ F4, dày 50mm. Sản phẩm được sản xuất theo công nghệ hiện đại, đạt tiêu chuẩn quốc tế, thuận tiện khi sử dụng.\r\n\r\nMột mặt bìa được sản xuất từ vật liệu simili cao cấp, mặt trong phủ màng OPP.\r\n\r\nKhóa và thanh kẹp giấy bằng thép chắc chắn, có lớp mạ chống oxi hóa, giữ được tính năng ổn định sau nhiều lần sử dụng.\r\n\r\nBìa dày dặn, cứng cáp, có thể lưu giữ tài liệu nhiều hơn .\r\n\r\nMột bìa chứa được 330 tờ F4, giúp việc lưu giữ tài liệu, hồ sơ, báo cáo, tranh ảnh, tạp chí, catalogue, project … nhanh chóng và tiện lợi hơn\r\n\r\nCó thể lưu được các loại bìa: Bìa lỗ, bìa kẹp nhựa,...', 'https://product.hstatic.net/1000230347/product/423asdsg_60b37daa2ae34f47abd75c926953cbae_large.jpg'),
(26, 1, 'BÚT LÔNG DẦU THIÊN LONG PM-04', 11700, 'Bút lông dầu Thiên Long PM-04 là một trong những loại bút lông dầu được sử dụng phổ biến nhất tại Việt Nam. Bút có thiết kế rất hợp lý, dễ sử dụng, chất lượng ổn định. Bút lông dầu Thiên Long PM-04 là sản phẩm mới thuộc nhóm dụng cụ văn phòng, do Tập đoàn Thiên Long sản xuất. Sản phẩm được sản xuất theo công nghệ hiện đại, đạt tiêu chuẩn chất lượng quốc tế, kiểu dáng được cải tiến ấn tượng, thân bút cầm chắc tay, dễ cầm nắm, không gây mỏi tay khi sử dụng .', 'https://product.hstatic.net/1000230347/product/pm-04_9e023ebd67a24f0c85be2800b848c867_large.jpg'),
(27, 2, 'MỰC BÚT LÔNG BẢNG THIÊN LONG WBI-01', 25200, 'Đặc tính sản phẩm :\r\n- Mực sử dụng cho bút lông bảng.\r\n- Màu mực tươi, nhanh khô, dễ dàng xóa sạch trên bảng trắng hoặc bề mặt nhẵn.\r\n- Mực không độc hại, đạt tiêu chuẩn Châu Âu EN71/3, EN71/9 và Mỹ ASTM D-4236.\r\n- Thiết kế hộp khoa học giúp tránh bay hơi và chảy mực. Van tiết lưu giúp mực luôn nhỏ thành dạng giọt khi bơm.\r\n- Tặng kèm 01 ngòi bút lông bảng.\r\n\r\nTuổi thọ & bảo quản:\r\n- Tuổi thọ trung bình của sản phẩm: 18 tháng tính từ ngày sản xuất.\r\n- Bảo quản nơi khô ráo, thoáng mát, tuyệt đối tránh xa nguồn nhiệt, lửa và hóa chất.\r\n- Tránh ánh nắng trực tiếp chiếu vào sản phẩm.\r\n\r\nKhuyến cáo:\r\n- Đậy nắp ngay sau khi sử dụng.\r\n- Tránh làm bẩn hoặc thấm mực lên quần, áo, túi áo, vật có bề mặt thấm hút.', 'https://product.hstatic.net/1000230347/product/wbi-01_c5296bf9c8bd41138db1849bf0e3c72a_large.jpg'),
(28, 3, 'Notebook', 25000, 'Notebook, hay còn gọi là sổ tay, là một quyển sổ có nhiều trang giấy bên trong được sử dụng để ghi chép lại những thông tin quan trọng và cần ghi nhớ. Notebook có nhiều kích thước, kiểu dáng và chất liệu khác nhau, phù hợp với nhiều mục đích sử dụng đa dạng.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442480540_1151722592807330_3352185011541855575_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=LfdFS-I9eUwQ7kNvgFs60bb&_nc_ht=scontent.fhan14-1.fna&oh=00_AYCPWz_Trvyl2VLjuOx3SXGllSPnl5_DDTvebOezzhqIjg&oe=66509178'),
(29, 3, 'Notebook', 22000, 'Notebook, hay còn gọi là sổ tay, là một quyển sổ có nhiều trang giấy bên trong được sử dụng để ghi chép lại những thông tin quan trọng và cần ghi nhớ. Notebook có nhiều kích thước, kiểu dáng và chất liệu khác nhau, phù hợp với nhiều mục đích sử dụng đa dạng', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441448317_1152051462774443_3259241680868964671_n.jpg?stp=dst-jpg_p206x206&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=IkKpoZk1zcYQ7kNvgHTfGQd&_nc_ht=scontent.fhan14-3.fna&oh=00_AYDTmz75L763KZC4mfavKMuM1gzeLa68atvj2zJLDe0ZNA&oe=66512822'),
(30, 3, 'Utensil cup', 58000, 'Hộp đựng dụng cụ là một vật dụng được sử dụng để đựng các dụng cụ văn phòng phẩm như bút, thước kẻ, tẩy, kẹp giấy, v.v. Khay đựng dụng cụ có nhiều loại, mẫu mã và kích thước khác nhau,', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441318282_1151730819473174_7769834350312686497_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=HmTGjr9wI9sQ7kNvgF-naIV&_nc_ht=scontent.fhan14-1.fna&oh=00_AYBA0Hr5StFc45f3s3WLsIOJ3BZ5T1PN-Lmsgat-lv5Zpg&oe=6650A76A'),
(31, 2, 'Document clip a4', 82000, 'Kẹp tài liệu A4 là một dụng cụ văn phòng phẩm quen thuộc được sử dụng để kẹp chặt nhiều tờ giấy A4 lại với nhau. Kẹp tài liệu A4 có nhiều loại, mẫu mã và màu sắc khác nhau, nhưng chức năng chính của chúng đều là giúp giữ cho tài liệu gọn gàng,', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442493728_1151730822806507_4003442779533087657_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=2lBuhJQXNncQ7kNvgHdswvO&_nc_ht=scontent.fhan14-2.fna&oh=00_AYCtffKABTqZO3pHOsYCenwHDDz2pnwcPEJmTHJE2-N17w&oe=6650A9E7'),
(32, 3, 'Notebook', 22000, 'Notebook, hay còn gọi là sổ tay, là một quyển sổ có nhiều trang giấy bên trong được sử dụng để ghi chép lại những thông tin quan trọng và cần ghi nhớ. Notebook có nhiều kích thước, kiểu dáng và chất liệu khác nhau, phù hợp với nhiều mục đích sử dụng đa dạng.\r\n\r\n', 'https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/442468087_1151730826139840_6716640402479565148_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=wvySLrxmPs8Q7kNvgFovaca&_nc_ht=scontent.fhan14-4.fna&oh=00_AYDq0iVlgdApTBtts4SnF6XsquOvLvSTbKeZaS7xH8yHfQ&oe=6650A915'),
(33, 3, 'Notebook', 27000, 'Notebook, hay còn gọi là sổ tay, là một quyển sổ có nhiều trang giấy bên trong được sử dụng để ghi chép lại những thông tin quan trọng và cần ghi nhớ. Notebook có nhiều kích thước, kiểu dáng và chất liệu khác nhau, phù hợp với nhiều mục đích sử dụng đa dạng.\r\n', 'https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/442485672_1151730886139834_7895611822625472987_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=lBI-75kjYHkQ7kNvgFCN4AJ&_nc_ht=scontent.fhan14-4.fna&oh=00_AYB-WEoG166g5kOY_nZibF-oV-cB929GA0QOeJ1NaK_Xcg&oe=665140A9'),
(34, 1, 'Fountain pen 5', 39000, 'Fountain pen 5', 'https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/441316236_1151730879473168_7694832117959787371_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Rx6UfmzyTiQQ7kNvgG6mi-X&_nc_ht=scontent.fhan14-4.fna&oh=00_AYCHiOmdv1j565zYNNIzNPKKBruf0SBYwO5FtjG_fSwE-A&oe=6650BB3C'),
(35, 4, 'Colored pencil x27', 68000, 'Bút chì màu là một loại bút chì có lõi được làm từ hỗn hợp than chì, sáp và chất màu. Bút chì màu có nhiều màu sắc khác nhau, giúp bạn tạo ra những hình ảnh và tác phẩm nghệ thuật đầy màu sắc. Bút chì màu được sử dụng phổ biến trong học tập, vẽ tranh, tô màu và thiết kế.', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442481266_1151730882806501_4468768556725751293_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=xvKkY7rGDC8Q7kNvgFC1Na9&_nc_ht=scontent.fhan14-2.fna&oh=00_AYCRuacxjljV7_Qee2Mb4LSW5O5iXD_QdPDRDkbi6A7HmA&oe=6650A2C0'),
(36, 2, 'Large notepad', 95000, 'Sổ tay khổ lớn hay còn gọi là lớn A3, là loại sổ tay có kích thước lớn hơn so với các loại sổ tay thông thường. Kích thước phổ biến của sổ tay khổ lớn là A3 (297mm x 420mm). Sổ tay khổ lớn được sử dụng phổ biến trong nhiều mục đích khác nhau', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/441329853_1151745416138381_8858397755305965077_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=5H8EnHE2Zb8Q7kNvgFEkghA&_nc_ht=scontent.fhan14-2.fna&oh=00_AYA_L8MS3yL_pstvNoOCpahOTihB4xTug-gah9wNK-gAUg&oe=6650B924'),
(37, 4, 'Colored pencil x30', 105000, 'Bút chì màu là một loại bút chì có lõi được làm từ hỗn hợp than chì, sáp và chất màu. Bút chì màu có nhiều màu sắc khác nhau, giúp bạn tạo ra những hình ảnh và tác phẩm nghệ thuật đầy màu sắc. Bút chì màu được sử dụng phổ biến trong học tập, vẽ tranh,', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442494243_1151745406138382_1447921261031014649_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=OfoYkgKDvQUQ7kNvgE0asZy&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDZmMqLzq6IJ5TGsFRj6AVy3HcPdGtCsTlW0OqfSzqwZQ&oe=66509CB5'),
(38, 3, 'Stapler', 22000, 'Cái bấm ghim (hay còn gọi là máy bấm ghim, dụng cụ bấm ghim) là một dụng cụ văn phòng phẩm nhỏ gọn được sử dụng để ghim các tờ giấy lại với nhau. Cái bấm ghim thường được làm từ nhựa hoặc kim loại và có thiết kế đơn giản với lò xo, thanh ghim và khay chứa kim ghim.', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/442478660_1151745389471717_2222438862115019635_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=WBXFabiwRYMQ7kNvgHpUsb6&_nc_ht=scontent.fhan14-5.fna&oh=00_AYAeH07ER8m__vTLWGZDq7ILIJxQdibTwtQtIgToLkQCZg&oe=6650B2F6'),
(39, 2, 'Black ring binder folder', 79000, 'Bìa kẹp nhẫn đen là một loại bìa kẹp được sử dụng để lưu trữ và sắp xếp tài liệu. Bìa kẹp nhẫn đen thường được làm từ nhựa hoặc bìa cứng và có thiết kế đơn giản với các vòng kẹp kim loại để giữ tài liệu. Bìa kẹp nhẫn đen được sử dụng phổ biến trong văn phòng, trường học và gia đình.', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/441337073_1151745442805045_7201297673699807348_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=fMD_nBsMDs0Q7kNvgFJhrIm&_nc_ht=scontent.fhan14-1.fna&oh=00_AYCf1IU6aBnI_Gqa3pDT0Yag6Gmq_c74Q4H-Orr7QeC4HA&oe=6650C622'),
(40, 2, 'red ring binder folder', 75000, 'Bìa kẹp đỏ là một loại bìa kẹp được sử dụng để lưu trữ và sắp xếp tài liệu. Bìa kẹp nhẫn đen thường được làm từ nhựa hoặc bìa cứng và có thiết kế đơn giản với các vòng kẹp kim loại để giữ tài liệu. Bìa kẹp nhẫn đen được sử dụng phổ biến trong văn phòng, trường học và gia đình.', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/436223692_1151745469471709_8567687167358028494_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=cRMN-URkMH4Q7kNvgFyKVTX&_nc_ht=scontent.fhan14-2.fna&oh=00_AYDSqXY7cFMu8CzxFlRft3XPhbHIAEFhQ0ISFARWwMQaLg&oe=6650A7AE'),
(41, 1, 'Sky ballpoint pen', 15000, 'Bút bi Sky là một loại bút bi phổ biến được sử dụng rộng rãi trong văn phòng, trường học và gia đình. Bút bi Sky được nhiều người yêu thích bởi thiết kế đơn giản, thanh lịch và chất lượng tốt.', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442488786_1151745479471708_7388389004014008778_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=OSezv1NtpIMQ7kNvgEBTy2T&_nc_ht=scontent.fhan14-2.fna&oh=00_AYAf3BS-nEIXmgzDo1p2t5i5TWzUlWGheIcztNL3WxwJ9Q&oe=6650A825'),
(42, 2, 'Company seal', 45000, 'Con dấu công ty (hay còn gọi là ấn tín công ty, dấu công ty) là một công cụ được sử dụng để đóng lên văn bản, giấy tờ của đơn vị. Con dấu công ty có ý nghĩa thể hiện giá trị pháp lý đối với các văn bản, giấy tờ của doanh nghiệp ban hành. Có thể hiểu rằng những hợp đồng, giao dịch của công ty phải được đóng dấu thì mới xem là có hiệu lực.', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/442476603_1151745506138372_4981083446142774935_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=iKExCpD97c4Q7kNvgEV0Xkr&_nc_ht=scontent.fhan14-5.fna&oh=00_AYA4ePnDpYsg-hBDnQ_htJBsRVcnm32wzrvFQbmavyM9mg&oe=6650B95B'),
(43, 3, 'Marble pencil holder', 47000, 'Giá đỡ bút đá cẩm thạch là một dụng cụ văn phòng phẩm được sử dụng để đựng bút viết và các vật dụng văn phòng phẩm khác. Giá đỡ bút đá cẩm thạch được làm từ đá cẩm thạch tự nhiên, có độ bền cao và vẻ đẹp sang trọng. Giá đỡ bút đá cẩm thạch được sử dụng phổ biến trong văn phòng,', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/442463328_1151754226137500_2617553143792839397_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=RgeHgQdsuuMQ7kNvgH4Atbx&_nc_ht=scontent.fhan14-5.fna&oh=00_AYBvy3pjGMRt5__upfGKfI70JmNUU0Z3cbtpjPtIqF0PWg&oe=6650A49C'),
(44, 4, 'Mechanical pencils set', 43000, 'Bút màu dạ, hay còn gọi là bút lông dầu, bút lông màu, bút marker, là một loại bút vẽ có đầu bút được làm từ sợi tổng hợp hoặc nỉ, chứa mực gốc dầu. Bút màu dạ được sử dụng phổ biến trong vẽ tranh, tô màu, đánh dấu, ghi chú,', 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/442481406_1151754169470839_6181868824805428088_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=V8kbByswBHYQ7kNvgGbOl63&_nc_ht=scontent.fhan14-1.fna&oh=00_AYDbDdLZkkfXo8jAFlkzdMZmjUB0BIygNY2IF9pf5rhCqg&oe=66509D12'),
(45, 4, 'Colored pens', 29000, 'Bút màu dạ, hay còn gọi là bút lông dầu, bút lông màu, bút marker, là một loại bút vẽ có đầu bút được làm từ sợi tổng hợp hoặc nỉ, chứa mực gốc dầu. Bút màu dạ được sử dụng phổ biến trong vẽ tranh, tô màu, đánh dấu, ghi chú, và nhiều ứng dụng khác.', 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/442484499_1151754212804168_1189461828830330001_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=MBbab8EeZ7MQ7kNvgHK4P1-&_nc_ht=scontent.fhan14-2.fna&oh=00_AYCtBvLhXVoRGaFuO5FdH74-pjGubo_VPKvn60PTYQ5orQ&oe=6650A1C1'),
(46, 4, ' Masking Creative Tape', 26000, 'Băng dính sáng tạo Masking Tape là một loại băng dính được sử dụng cho nhiều mục đích khác nhau, từ trang trí, thủ công mỹ nghệ đến che chắn và bảo vệ bề mặt. Băng dính Masking Tape được làm từ giấy mỏng, dai và dễ xé bằng tay. Băng dính Masking Tape có nhiều màu sắc và họa tiết khác nhau, giúp bạn dễ dàng lựa chọn sản phẩm phù hợp với nhu cầu của mình', 'https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/441405205_1151754259470830_7429390013719590767_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=f5MfUVr9edAQ7kNvgEPqX8c&_nc_ht=scontent.fhan14-3.fna&oh=00_AYC3NZNPr8MKjiMiIAjXYxuSYGMkcPxfXx3JrgH7sVj_bA&oe=66509E1B'),
(47, 4, ' Masking Creative Tape 2', 28000, 'Băng dính sáng tạo Masking Tape là một loại băng dính được sử dụng cho nhiều mục đích khác nhau, từ trang trí, thủ công mỹ nghệ đến che chắn và bảo vệ bề mặt. Băng dính Masking Tape được làm từ giấy mỏng, dai và dễ xé bằng tay. Băng dính Masking Tape có nhiều màu sắc và họa tiết khác nhau, giúp bạn dễ dàng lựa chọn sản phẩm phù hợp với nhu cầu của mình', 'https://scontent.fhan14-5.fna.fbcdn.net/v/t39.30808-6/441552336_1151754172804172_4783288306939478662_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=3TlQj6xW9tMQ7kNvgEdUDmo&_nc_ht=scontent.fhan14-5.fna&oh=00_AYAzeqZbN13KPJcABZGFv4Jgi5FHcyJAr7euEU8tnfckeA&oe=6650C0E1'),
(48, 5, 'Double A printing paper', 69000, 'Giấy in Double A là một loại giấy in phổ biến được sử dụng rộng rãi trong văn phòng, trường học và gia đình. Giấy in Double A được nhiều người yêu thích bởi chất lượng tốt, giá cả hợp lý và khả năng tương thích với nhiều loại máy in khác nhau.', 'https://vanphongphamhoasen.com.vn/upload/images/giay_doublea.jpg'),
(49, 5, 'Supreme printing paper', 97000, 'Giấy in Supreme là một loại giấy in cao cấp được sản xuất bởi công ty SCG Paper Plc., Thái Lan. Giấy Supreme được biết đến với chất lượng cao,', 'https://vanphongphamminaco.com/wp-content/uploads/2023/06/Giay-in-A4-Supreme-DL70.webp'),
(50, 5, 'IKPlus printing paper', 77000, 'Giấy in IKPlus là thương hiệu giấy in phổ biến đến từ Indonesia, được sản xuất bởi công ty PT. Indah Kapuas Kraft Pulp & Paper Mills. Giấy IKPlus được nhiều người tin dùng bởi chất lượng tốt, giá thành hợp lý và khả năng tương thích với nhiều loại máy in khác nhau.', 'https://bizweb.dktcdn.net/100/081/313/files/giay-in-ik-plus-535ee511-4c24-4ec6-8f67-dbec89ae880c.jpg?v=1646646919991'),
(51, 1, 'Parker Vector Black Medium Nib Fountain Pen Gift-Boxed', 180000, 'Bút máy Parker Vector Đen Ngòi Mềm (Medium) Hộp Quà là một lựa chọn hấp dẫn cho những ai đang tìm kiếm một cây bút máy chất lượng tốt, sang trọng và giá cả phải chăng.', 'https://livedemo00-opencart.template-help.com/opencart_prod-22379/image/cache/catalog/products/product-37-1000x1000.png'),
(52, 1, 'Pilot G207 Retractable Gel Rollerball 0.7 mm Tip Red', 17000, 'Pilot G207 là dòng bút gel phổ biến được nhiều người yêu thích bởi chất lượng tốt, giá cả hợp lý và trải nghiệm viết mượt mà. Mẫu cụ thể chúng ta đang nhắc đến là Pilot G207 Retractable Gel Rollerball 0.7 mm Tip Red, tức là bút gel Pilot G207 thiết kế rút gọn, ngòi 0.7mm và mực màu đỏ.', 'https://livedemo00-opencart.template-help.com/opencart_prod-22379/image/cache/catalog/products/product-49-1000x1000.png'),
(53, 1, 'Pilot G207 Retractable Gel Rollerball 0.7 mm Tip Blue', 5000, 'Pilot G207 là dòng bút gel phổ biến được nhiều người yêu thích bởi chất lượng tốt, giá cả hợp lý và trải nghiệm viết mượt mà. Mẫu cụ thể chúng ta đang nhắc đến là Pilot G207 Retractable Gel Rollerball 0.7 mm Tip Red, tức là bút gel Pilot G207 thiết kế rút gọn, ngòi 0.7mm và mực màu xanh.', 'https://livedemo00-opencart.template-help.com/opencart_prod-22379/image/cache/catalog/products/product-51-1000x1000.png'),
(54, 1, 'Wood pencil', 12000, 'Bút chì gỗ là dụng cụ viết hoặc vẽ được làm bằng một lõi chì than chì mỏng, được bao bọc bởi một lớp gỗ mỏng. Lõi chì được làm từ hỗn hợp đất sét và than chì, được nung ở nhiệt độ cao. Vỏ gỗ được làm từ nhiều loại gỗ khác nhau, bao gồm tuyết tùng, thông và linh sam.', 'https://demo-store13-tm.myshopify.com/cdn/shop/products/3_590X668_crop_center.jpg?v=1660106317'),
(55, 1, 'Pen pencils', 10000, 'Bút chì kim là một loại bút chì sử dụng ruột chì thay vì lõi chì than chì như bút chì gỗ truyền thống. Ruột chì thường được làm bằng than chì, nhưng cũng có thể được làm từ các vật liệu khác như sáp, polymer hoặc kim loại. Bút chì kim thường có vỏ kim loại hoặc nhựa và có một cơ chế để đẩy ruột chì ra khi nó bị mòn.', 'https://demo-store13-tm.myshopify.com/cdn/shop/products/4_c020cb27-d757-446d-a89a-6c34656b995d_590X668_crop_center.jpg?v=1660366665'),
(57, 1, 'Mechanical pencil 0.5mm', 17000, 'Bút chì kim 0.5mm\r\nBút chì kim 0.5mm là loại bút chì kim sử dụng ruột chì có đường kính 0.5mm. Đây là kích thước ruột chì phổ biến nhất và được sử dụng cho nhiều mục đích khác nhau, bao gồm viết, vẽ, phác thảo và tô màu.', 'https://demo-store13-tm.myshopify.com/cdn/shop/products/2_e07537ca-c462-49bf-a79e-6ba14220987f_590X668_crop_center.jpg?v=1660107496'),
(58, 1, 'Lead pencil', 22000, '\r\nBút chì than chì (Lead pencil)\r\nBút chì than chì, hay còn gọi là bút chì gỗ, là dụng cụ viết hoặc vẽ được làm bằng một lõi chì than chì mỏng được bao bọc bởi một lớp gỗ mỏng. Lõi chì được làm từ hỗn hợp đất sét và than chì, được nung ở nhiệt độ cao. Vỏ gỗ được làm từ nhiều loại gỗ khác nhau, bao gồm tuyết tùng, thông và linh sam.', 'https://demo-store13-tm.myshopify.com/cdn/shop/products/1_f40a3779-db9e-4d53-ad6b-d68e11db702f_590X668_crop_center.jpg?v=1660366403'),
(59, 3, 'Pencil sharpener', 11000, 'Gọt bút chì tay: Loại gọt bút chì này được sử dụng bằng tay và thường được làm bằng nhựa hoặc kim loại. Gọt bút chì tay có nhiều kích cỡ và hình dạng khác nhau và có thể có một hoặc nhiều lỗ để gọt bút chì có kích cỡ khác nhau.', 'https://demo-store13-tm.myshopify.com/cdn/shop/files/Shop-by-category-2_67908aca-6c27-4193-a012-ed5abbb61af5.jpg?v=1660374730'),
(60, 3, 'Eraser\r\n', 9000, 'Tẩy là dụng cụ được sử dụng để xóa các dấu viết hoặc vẽ trên giấy, bảng trắng hoặc các bề mặt khác. Tẩy được làm từ nhiều loại vật liệu khác nhau, bao gồm cao su,', 'https://demo-store13-tm.myshopify.com/cdn/shop/files/Shop-by-category-3.jpg?v=1660386604'),
(61, 3, 'Ruler', 14000, 'Thước kẻ là dụng cụ dùng để đo độ dài hoặc vẽ đường thẳng. Thước kẻ được làm từ nhiều loại vật liệu khác nhau, bao gồm nhựa, gỗ, kim loại và thủy tinh. Chúng có nhiều kích thước và hình dạng khác nhau và có thể được sử dụng cho nhiều mục đích khác nhau.', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/334/874/products/3367-1.jpg?v=1587366455067'),
(62, 4, 'watercolor brush pen', 34000, 'Bút lông màu nước (Watercolor brush pen)\r\nBút lông màu nước là loại bút vẽ có đầu cọ được làm từ các sợi tổng hợp hoặc tự nhiên, có khả năng chứa và nhả màu nước một cách linh hoạt. Bút lông màu nước được sử dụng để vẽ tranh màu nước, tô màu, viết calligraphy, và nhiều ứng dụng sáng tạo khác.', 'https://down-vn.img.susercontent.com/file/475074d69cf4295a307a88323324f46c'),
(63, 4, 'Watercolor brush pen black', 45000, 'Bút lông màu nước (Watercolor brush pen)\r\nBút lông màu nước là loại bút vẽ có đầu cọ được làm từ các sợi tổng hợp hoặc tự nhiên, có khả năng chứa và nhả màu nước một cách linh hoạt. Bút lông màu nước được sử dụng để vẽ tranh màu nước, tô màu, viết calligraphy, và nhiều ứng dụng sáng tạo khác.', 'https://pos.nvncdn.com/6dc534-15668/art/20210326_jE2Y40lWNwt2zcXPLdnuCQqp.jpg'),
(64, 4, 'Water color', 37000, 'Màu nước (Watercolor) là một loại hình nghệ thuật sử dụng các sắc tố hòa tan trong nước để tạo màu sắc. Màu nước thường được vẽ trên giấy, nhưng cũng có thể được vẽ trên các bề mặt khác như vải, gỗ và da.', 'https://tuyetson.vn/upload/kiotviet/mau-nuoc-waco-c06-8-mau-13025039-01.webp'),
(65, 4, 'Thien Long watercolor', 42000, 'Màu nước (Watercolor) là một loại hình nghệ thuật sử dụng các sắc tố hòa tan trong nước để tạo màu sắc. Màu nước thường được vẽ trên giấy, nhưng cũng có thể được vẽ trên các bề mặt khác như vải, gỗ và da.', 'https://vn-test-11.slatic.net/original/02012a890ffe7f91e3362481c3f53bf2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` int(11) NOT NULL,
  `loaiTK` int(11) NOT NULL DEFAULT 1,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `loaiTK`, `username`, `password`, `name`) VALUES
(1, 2, 'tai023156@gmail.com', '123456789', 'Lê Hữu Tài'),
(2, 2, 'minhanh@gmail.com', '123456789', 'Minh Anh'),
(3, 1, 'vanminh@gmail.com', '123456789', 'Văn Minh'),
(4, 1, 'nguyenhongson@gmail.com', '123456789', 'Hồng Sơn'),
(5, 1, 'phamvanminh@gmail.com', '123456789', 'Phạm Văn Minh'),
(6, 1, 'namve@gmail.com', 'taicho123', 'namve'),
(12, 1, '0984851460', '01122003', 'Phùng Tuấn Anh'),
(13, 1, '12345@gmail.com', '123456789', '    ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`maGH`,`maSP`),
  ADD KEY `FK_SanPham` (`maSP`);

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`maHD`,`maSP`),
  ADD KEY `FK_ChiTietHD_SanPham` (`maSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maGH`),
  ADD KEY `maTK` (`maTK`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `FK_HoaDon_TK` (`maTaiKhoan`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maLoaiSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `FK_LoaiSanPham` (`maLoaiSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `maGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `FK_SanPham` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`),
  ADD CONSTRAINT `Fk_GioHang` FOREIGN KEY (`maGH`) REFERENCES `giohang` (`maGH`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `FK_ChiTietHD` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ChiTietHD_SanPham` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HoaDon_TK` FOREIGN KEY (`maTaiKhoan`) REFERENCES `taikhoan` (`maTK`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LoaiSanPham` FOREIGN KEY (`maLoaiSP`) REFERENCES `loaisp` (`maLoaiSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
