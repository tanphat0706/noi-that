-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 20, 2016 lúc 12:29 PM
-- Phiên bản máy phục vụ: 5.7.16-0ubuntu0.16.04.1
-- Phiên bản PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `noithatgiarethanhtai.com`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `alias`, `description`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Tủ Quần Áo', 'tu-quan-ao', '', 'img_tu_quan_ao_1482078575.jpg', '2016-12-18 16:29:35', '2016-12-18 16:29:35'),
(13, 'Bàn Trang Điểm', 'ban-trang-diem', '', 'img_ban_trang_diem_1482078735.jpg', '2016-12-18 16:32:16', '2016-12-18 16:32:16'),
(18, 'Tủ bếp', 'tu-bep', '', 'img_tu_bep_1482191516.jpg', '2016-12-19 23:51:56', '2016-12-19 23:51:56'),
(19, 'Bàn làm việc', 'ban-lam-viec', '', 'img_ban_lam_viec_1482197805.jpg', '2016-12-20 01:36:45', '2016-12-20 01:36:45'),
(9, 'Thiết kế văn phòng', 'thiet-ke-van-phong', '', 'img_thiet_ke_van_phong_1482075433.jpg', '2016-12-18 15:37:13', '2016-12-18 15:37:13'),
(10, 'Nội thất phổ thông', 'noi-that-pho-thong', '', 'img_thiet_ke_noi_that_nha_o_thuong_1482075964.jpg', '2016-12-18 16:26:30', '2016-12-18 16:26:30'),
(11, 'Nội thất chuyên nghiệp', 'noi-that-chuyen-nghiep', '', 'img_thiet_ke_noi_that_nha_o_1482078326.png', '2016-12-18 16:33:22', '2016-12-18 16:33:22'),
(14, 'Giường Ngủ', 'giuong-ngu', '', 'img_giuong_ngu_1482079030.jpg', '2016-12-18 16:37:10', '2016-12-18 16:37:10'),
(15, 'Bàn học', 'ban-hoc', '', 'img_ban_hoc_1482080351.jpg', '2016-12-18 16:59:12', '2016-12-18 16:59:12'),
(16, 'Combo Khuyến Mãi', 'combo-khuyen-mai', '', 'img_combo_khuyen_mai_1482080637.jpg', '2016-12-18 17:03:57', '2016-12-18 17:03:57'),
(17, 'Kệ tivi', 'ke-tivi', '', 'img_ke_tivi_1482156965.jpg', '2016-12-19 14:16:05', '2016-12-19 14:16:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_roles`
--

CREATE TABLE `groups_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups_roles`
--

INSERT INTO `groups_roles` (`id`, `group_id`, `role_id`, `created_at`, `updated_at`) VALUES
(103, 1, 54, '2016-07-10 23:46:38', '2016-07-10 23:46:38'),
(104, 1, 55, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(105, 1, 56, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(106, 1, 57, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(107, 1, 58, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(108, 1, 59, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(109, 1, 60, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(110, 1, 61, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(111, 1, 1, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(112, 1, 2, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(113, 1, 3, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(114, 1, 4, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(115, 1, 5, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(116, 1, 6, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(117, 1, 7, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(118, 1, 8, '2016-07-10 23:46:39', '2016-07-10 23:46:39'),
(127, 5, 54, '2016-12-15 05:46:17', '2016-12-15 05:46:17'),
(128, 5, 55, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(129, 5, 56, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(130, 5, 57, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(131, 5, 58, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(132, 5, 59, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(133, 5, 60, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(134, 5, 61, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(135, 5, 1, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(136, 5, 2, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(137, 5, 3, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(138, 5, 4, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(139, 5, 5, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(140, 5, 6, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(141, 5, 7, '2016-12-15 05:46:18', '2016-12-15 05:46:18'),
(142, 6, 54, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(143, 6, 55, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(144, 6, 56, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(145, 6, 57, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(146, 6, 58, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(147, 6, 59, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(148, 6, 60, '2016-12-15 05:48:34', '2016-12-15 05:48:34'),
(149, 6, 61, '2016-12-15 05:48:34', '2016-12-15 05:48:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `meta_description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `old_price` decimal(15,0) DEFAULT '0',
  `price` decimal(15,0) DEFAULT '0',
  `image_1` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_2` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_3` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_4` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_5` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `image_6` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `meta_description`, `name`, `alias`, `description`, `short_description`, `old_price`, `price`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `highlight`, `category_id`, `created_at`, `updated_at`) VALUES
(11, '', 'Giường ván công nghiệp chống ẩm sơn', 'giuong-van-cong-nghiep-chong-am-son', '<p>Giường v&aacute;n c&ocirc;ng nghiệp chống ẩm sơn</p>\r\n', 'Giường ván công nghiệp chống ẩm sơn', '0', '6300000', 'img_giuong_hop_da_nang_gia_re_1.jpg', 'img_giuong_hop_da_nang_gia_re_2.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 10, '2016-12-18 16:00:09', '2016-12-20 01:21:08'),
(35, '', 'Tủ áo đa năng trắng đa kệ', 'tu-ao-da-nang-trang-da-ke', '<p>Tủ &aacute;o đa năng trắng đa kệ</p>\r\n', 'Tủ áo đa năng trắng đa kệ', '0', '0', 'img_tu_ao_da_nang_trang_da_ke_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-20 01:55:27', '2016-12-20 01:55:27'),
(33, '', 'Tủ áo đa năng 2 in 1', 'tu-ao-da-nang-2-in-1', '<p>Tủ &aacute;o đa năng 2 in 1</p>\r\n', 'Tủ áo đa năng 2 in 1', '0', '0', 'img_tu_ao_da_nang_2_in_1_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-20 01:45:28', '2016-12-20 01:45:28'),
(34, '', 'Tủ áo 2 màu', 'tu-ao-2-mau', '<p>Tủ &aacute;o 2 m&agrave;u</p>\r\n', 'Tủ áo 2 màu', '0', '0', 'img_tu_ao_2_mau_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-20 01:49:45', '2016-12-20 01:49:45'),
(36, '', 'Kệ tivi 40', 'ke-tivi-40', '<p>Kệ tivi 40</p>\r\n', 'Kệ tivi 40', '0', '6000000', 'img_ke_tivi_40_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 17, '2016-12-20 02:05:38', '2016-12-20 02:05:38'),
(12, '', 'Tủ đứng cho phòng biệt thự', 'tu-dung-cho-phong-biet-thu', '<p>Gỗ c&ocirc;ng nghiệp MDF&nbsp;l&agrave; loại gỗ &eacute;p được sản xuất từ gỗ qua qu&aacute; tr&igrave;nh xử l&yacute; bằng c&aacute;ch li&ecirc;n kết c&aacute;c sợi gỗ bằng keo hoặc h&oacute;a chất tổng hợp.</p>\r\n\r\n<p>Đặc điểm</p>\r\n\r\n<p>Do c&oacute; độ d&agrave;y kh&aacute;c nhau v&agrave; khả năng &aacute;p dụng c&aacute;c m&aacute;y m&oacute;c chế biến gỗ hiện đại, gỗ &eacute;p rất được ưa chuộng trong ng&agrave;nh nội thất&nbsp;v&agrave; x&acirc;y dựng v&agrave; n&oacute; đang dần thay thể c&aacute;c loại gỗ thịt&nbsp;vốn c&agrave;ng ng&agrave;y c&agrave;ng trở n&ecirc;n khan hiếm. Ngo&agrave;i ra do người ta dần kiểm so&aacute;t được độ ẩm trong gỗ n&ecirc;n gỗ MDF c&oacute; nhiều ứng dụng kh&aacute;c nhau</p>\r\n\r\n<p>Gỗ MDF c&oacute; thể được sản xuất từ c&aacute;c loại gỗ cứng v&agrave; gỗ mềm. Th&agrave;nh phần ch&iacute;nh của gỗ MDF l&agrave; c&aacute;c sợi gỗ được chế biến từ c&aacute;c loại gỗ mềm, ngo&agrave;i ra người ta c&oacute; thể th&ecirc;m v&agrave;o một số th&agrave;nh phần gỗ cứng t&ugrave;y theo c&aacute;c nh&agrave; sản xuất chọn được loại nguy&ecirc;n liệu gỗ cứng sẵn c&oacute; gần đ&oacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; hai kiểu quy tr&igrave;nh sản xuất MDF: quy tr&igrave;nh kh&ocirc;, quy tr&igrave;nh ướt.</p>\r\n\r\n<p>Quy tr&igrave;nh kh&ocirc;: keo , phụ gia được phun trộn v&agrave;o bột gỗ kh&ocirc; trong m&aacute;y trộn -sấy sơ bộ. Bột sợi đ&atilde; &aacute;o keo sẽ được trải ra bằng m&aacute;y rải -c&agrave;o th&agrave;nh 2-3 tầng t&ugrave;y theo khổ, cỡ d&agrave;y của v&aacute;n đ&iacute;nh sản xuất. C&aacute;c tầng n&agrave;y được chuyển qua m&aacute;y &eacute;p c&oacute; gia nhiệt. M&aacute;y &eacute;p thực hiện &eacute;p nhiều lần ( 2 lần). Lần 1 ( &eacute;p sơ bộ) cho lớp tr&ecirc;n, lớp thứ 2 , lớp thứ 3 Lần &eacute;p 2 l&agrave; &eacute;p tiếp cả ba lớp lại. Chế độ nhiệt được thiết lập để sao cho đuổi hơi nước v&agrave; l&agrave;m keo h&oacute;a rắn từ từ. Sau khi &eacute;p, v&aacute;n được xuất ra, cắt bỏ bi&ecirc;n, ch&agrave; nh&aacute;m v&agrave; ph&acirc;n loại.</p>\r\n\r\n<p>Quy tr&igrave;nh ướt: bột gỗ được phun nước l&agrave;m ướt để kết v&oacute;n th&agrave;nh dạng vẩy (mat formation). Ch&uacute;ng được c&agrave;o rải ngay sau đ&oacute; l&ecirc;n m&acirc;m &eacute;p. &Eacute;p nhiệt một lần đến độ d&agrave;y sơ bộ. Tấm được đưa qua c&aacute;n hơi-nhiệt như b&ecirc;n l&agrave;m giấy để n&eacute;n chặt hai mặt v&agrave; r&uacute;t nước dư ra.</p>\r\n', 'Tủ đứng cho phòng biệt thự kiểu dáng đẹp và sang trọng.', '0', '20000000', 'img_tu_dung_cho_phong_biet_thu_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 11, '2016-12-18 16:20:04', '2016-12-19 14:38:44'),
(38, '', 'Tủ áo đa năng 3 in 1', 'tu-ao-da-nang-3-in-1', '<p>Tủ &aacute;o đa năng 3 in 1</p>\r\n', 'Tủ áo đa năng 3 in 1', '0', '0', 'img_tu_ao_da_nang_3_in_1_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 0, 12, '2016-12-20 02:12:32', '2016-12-20 02:12:32'),
(39, '', 'Tủ giày', 'tu-giay', '<p>Tủ gi&agrave;y nhiều ngăn, kết hợp 1 tủ ngang.</p>\r\n', 'Tủ giày nhiều ngăn, kết hợp 1 tủ ngang.', '0', '2000000', 'img_tu_giay_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-20 02:14:32', '2016-12-20 02:14:32'),
(14, '', 'Giường ngủ gỗ MDF', 'giuong-ngu-go-mdf', '<p>Giường ngủ đẹp. K&iacute;ch thước lớn. Kiểu d&aacute;ng thanh lịch.</p>\r\n', 'Giường ngủ gỗ dành cho gia đình.', '0', '4500000', 'img_giuong_ngu_go_mdf_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 14, '2016-12-18 16:38:23', '2016-12-19 14:48:27'),
(15, '', 'Bàn trang điểm đen sơn bóng', 'ban-trang-diem-den-son-bong', '<p>B&agrave;n trang điểm đen sơn b&oacute;ng đẹp, chất liệu bền kiểu d&aacute;ng chuy&ecirc;n nghiệp</p>\r\n', 'Bàn trang điểm đen sơn bóng đẹp, chất liệu bền kiểu dáng chuyên nghiệp', '0', '2200000', 'img_ban_trang_diem_den_son_bong_1.jpg', 'img_ban_trang_diem_den_son_bong_2.jpg', 'img_ban_trang_diem_den_son_bong_3.jpg', 'img_ban_trang_diem_den_son_bong_4.jpg', 'img_ban_trang_diem_den_son_bong_5.jpg', 'img_ban_trang_diem_den_son_bong_6.jpg', 1, 13, '2016-12-18 16:41:38', '2016-12-20 01:20:12'),
(16, 'Bàn trang điểm phổ thông', 'Bàn trang điểm phổ thông', 'ban-trang-diem-pho-thong', '<p>B&agrave;n trang điểm phổ th&ocirc;ng m&agrave;u sơn trắng. Gỗ MDF tự nhi&ecirc;n. <strong>Chất liệu bền đẹp.</strong></p>\r\n', 'Bàn trang điểm phổ thông màu sơn trắng. Gỗ MDF tự nhiên.', '0', '5000000', 'img_ban_trang_diem_pho_thong_1.jpg', 'no-image.png', 'no-image.png', 'img_ban_trang_diem_pho_thong_4.jpg', 'no-image.png', 'no-image.png', 1, 13, '2016-12-18 16:42:46', '2016-12-19 14:11:12'),
(17, '', 'Bàn trang điểm mặt kính', 'ban-trang-diem-mat-kinh', '<p>B&agrave;n trang điểm mặt k&iacute;nh, sử dụng kết hợp đ&egrave;n cho kh&ocirc;ng gian ấm &aacute;p.</p>\r\n', 'Bàn trang điểm mặt kính, sử dụng kết hợp đèn cho không gian ấm áp.', '0', '3500000', 'img_ban_trang_diem_mat_kinh_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 13, '2016-12-18 16:47:57', '2016-12-20 01:26:08'),
(18, '', 'Tủ áo đứng 3 cửa', 'tu-ao-dung-3-cua', '<p>Tủ &aacute;o đứng 3 cửa</p>\r\n\r\n<p>K&iacute;ch thước tủ: 500 x 1200 x &nbsp;2000</p>\r\n', 'Tủ áo đứng 3 cửa. Có nhiều ngăn (có thể gia công mặt kín). 500 x 1200 x 2000', '0', '4500000', 'img_tu_ao_dung_3_cua_1.jpg', 'img_tu_ao_dung_3_cua_2.jpg', 'img_tu_ao_dung_3_cua_3.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-18 16:52:05', '2016-12-20 01:16:14'),
(37, '', 'Kệ tivi đa năng', 'ke-tivi-da-nang', '<p>Kệ tivi đa năng</p>\r\n', 'Kệ tivi đa năng', '0', '7000000', 'img_ke_tivi_da_nang_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 0, 17, '2016-12-20 02:09:36', '2016-12-20 02:09:36'),
(27, '', 'Giưởng ngủ trắng', 'giuong-ngu-trang', '<p>Giưởng ngủ trắng, thiết kế cực sang trọng. Bề mặt b&oacute;ng, s&aacute;ng v&agrave; ch&oacute;ng b&aacute;m bụi cực tốt</p>\r\n', 'Giưởng ngủ trắng, thiết kế cực sang trọng. Bề mặt bóng, sáng và chóng bám bụi cực tốt', '0', '5000000', 'img_giuong_ngu_trang_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 14, '2016-12-19 14:55:21', '2016-12-19 16:33:25'),
(20, '', 'Trọn bộ combo giường ngủ bàn tủ kệ tivi', 'tron-bo-combo-giuong-ngu-ban-tu-ke-tivi', '<p>Trọn bộ combo giường ngủ b&agrave;n tủ kệ tivi</p>\r\n', 'Trọn bộ combo giường ngủ bàn tủ kệ tivi', '0', '18000000', 'img_tron_bo_combo_giuong_ngu_ban_tu_ke_tivi_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 16, '2016-12-18 17:04:48', '2016-12-19 17:39:50'),
(21, '', 'Tủ đứng màu xanh lá', 'tu-dung-mau-xanh-la', '<p>Tủ đứng m&agrave;u xanh l&aacute; k&iacute;ch thước t&ugrave;y chọn, m&agrave;u xanh (hoặc hồng, cam,..). Sử dụng chất liệu sơn b&oacute;ng.</p>\r\n', 'Tủ đứng màu xanh lá', '0', '7400000', 'img_tu_dung_mau_xanh_la_1.jpg', 'img_tu_dung_mau_xanh_la_2.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-18 17:22:20', '2016-12-20 02:35:51'),
(22, '', 'Tủ Gỗ Nâu Màu Sậm', 'tu-go-nau-mau-sam', '<p>Tủ Gỗ N&acirc;u M&agrave;u Sậm. K&iacute;ch thước đa dạng (c&oacute; thể t&ugrave;y chọn).</p>\r\n\r\n<p>Lắp r&aacute;p dễ, m&agrave;u sơn s&aacute;ng đẹp. Kiểu d&aacute;ng chuy&ecirc;n nghiệp.</p>\r\n\r\n<p>K&iacute;ch thước 500 x 1800 x 2000</p>\r\n', 'Tủ Gỗ Nâu Màu Sậm. Kích thước 500 x 1800 x 2000', '0', '8000000', 'img_tu_go_nau_mau_sam_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-18 17:27:49', '2016-12-19 14:14:34'),
(23, '', 'Tủ kết hợp kệ đa tầng', 'tu-ket-hop-ke-da-tang', '<p>Tủ kết hợp kệ đa tầng, thiết kế gọn. Hoạt t&iacute;nh đa năng, c&oacute; thể sử dụng để đặt những vật dụng phổ th&ocirc;ng như: d&eacute;p, t&uacute;i x&aacute;ch, chậu hoa,...</p>\r\n', 'Tủ kết hợp kệ đa tầng, thiết kế gọn. Hoạt tính đa năng, có thể sử dụng để đặt những vật dụng phổ thông như: dép, túi xách, chậu hoa,...', '0', '2000000', 'img_tu_ket_hop_ke_da_tang_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-18 17:34:01', '2016-12-19 17:42:08'),
(24, '', 'Tủ đen sọc trắng đa năng nhiều kệ', 'tu-den-soc-trang-da-nang-nhieu-ke', '<p>Tủ đen sọc trắng đa năng nhiều kệ.</p>\r\n', 'Tủ đen đa năng nhiều kệ, thiết kế linh động. Sơn đen sọc trắng', '0', '0', 'img_tu_den_soc_trang_da_nang_nhieu_ke_1.jpg', 'img_tu_den_soc_trang_da_nang_nhieu_ke_2.jpg', 'img_tu_den_soc_trang_da_nang_nhieu_ke_3.jpg', 'img_tu_den_soc_trang_da_nang_nhieu_ke_4.jpg', 'img_tu_den_soc_trang_da_nang_nhieu_ke_5.jpg', 'img_tu_den_soc_trang_da_nang_nhieu_ke_6.jpg', 1, 12, '2016-12-18 17:49:07', '2016-12-20 00:01:35'),
(25, '', 'Giường thấp vân gỗ sồi', 'giuong-thap-van-go-soi', '<p>Giường thấp v&acirc;n gỗ kiểu v&acirc;n sồi, kết hợp sơn b&oacute;ng. C&oacute; thể chọn c&aacute;c m&agrave;u v&agrave; kiểu v&acirc;n y&ecirc;u th&iacute;ch kh&aacute;c.</p>\r\n', 'Giường thấp vân gỗ kiểu vân sồi, kết hợp sơn bóng. Có thể chọn các màu và kiểu vân yêu thích khác', '0', '4000000', 'img_giuong_thap_van_go_soi_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 14, '2016-12-18 17:52:31', '2016-12-19 14:13:25'),
(31, '', 'Kệ đa năng', 'ke-da-nang', '<p>Kệ đa năng</p>\r\n', 'Kệ đa năng', '0', '3000000', 'img_ke_da_nang_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-20 01:28:52', '2016-12-20 01:28:52'),
(26, '', 'Bộ tủ bếp gia đình', 'bo-tu-bep-gia-dinh', '<p>Bộ tủ bếp gia đ&igrave;nh kết hợp tủ nhiều ngăn. Đa m&agrave;u sắc. C&oacute; thể kết hợp giữa trắng v&agrave; xanh l&aacute; mạ. Sơn b&oacute;ng bề ngo&agrave;i tạo sự chuy&ecirc;n nghiệp, to&aacute;t l&ecirc;n vẻ sang trọng cho ng&ocirc;i nh&agrave; bạn.</p>\r\n', 'Bộ tủ bếp gia đình. Đa màu sắc. Có thể kết hợp giữa trắng và xanh lá mạ. Sơn bóng bề ngoài tạo sự chuyên nghiệp, toát lên vẻ sang trọng cho ngôi nhà bạn.', '0', '0', 'img_ke_tivi_ket_hop_tu_nhieu_ngan_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 18, '2016-12-19 14:22:27', '2016-12-20 01:21:36'),
(30, '', 'Kệ tivi đa sắc', 'ke-tivi-da-sac', '<p>Kệ tivi đa sắc, thiết kế thanh. Kiểu d&aacute;ng sang trọng.</p>\r\n\r\n<p>Model thuộc kiểu nh&agrave; nội thất nước ngo&agrave;i được tạo bởi c&aacute;ch chất liệu tốt từ thi&ecirc;n nhi&ecirc;n.</p>\r\n', 'Kệ tivi đa sắc, thiết kế thanh. Kiểu dáng sang trọng.', '0', '0', 'img_ban_hop_nhieu_ngan_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 17, '2016-12-19 17:49:45', '2016-12-19 23:54:03'),
(29, '', 'Tủ gỗ đa năng ', 'tu-go-da-nang-', '<p>Tủ gỗ đa năng m&agrave;u sắc s&aacute;ng.</p>\r\n', 'Tủ gỗ đa năng màu sắc sáng.', '0', '8000000', 'img_tu_go_da_nang__1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 12, '2016-12-19 15:44:39', '2016-12-19 16:33:19'),
(32, '', 'Bàn làm việc 2 tủ', 'ban-lam-viec-2-tu', '<p>B&agrave;n l&agrave;m việc 2 tủ</p>\r\n', 'Bàn làm việc 2 tủ', '0', '2500000', 'img_ban_lam_viec_2_tu_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 19, '2016-12-20 01:38:10', '2016-12-20 01:50:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@admin.com', '$2y$10$qa2bOR8o5Jn8aOuJIP339u7GerZ1r.vXkJKmqLbtBeJHUHOwKk2qm', 1, 'jNR1qSp2809bHiIB7DMv6kGK2AVwiapR0s9zC4gr5cFK1OMh9MVevIM2Zz8W', '2016-12-18 04:05:16', '2016-12-19 15:23:15'),
(2, 'Admin', 'admin@admin.com', '$2y$10$Du7eTzeI3bOZnIwkryRQWuhRaASLtRxfQnapLFwTEZsZPgvWnqnG6', 5, 'RFud9OMAYHSQakfIqf7ydJH2kEEgcveK4wekFFrmx2IKNnAIEEiepMUnFll6', NULL, '2016-12-19 15:24:12'),
(6, 'Content user', 'content@content.com', '$2y$10$Iitwt4sYEmlCRq7DWkoXHOQwmoqDjMC6NasPghAVsTeRq2./wo1cu', 6, NULL, '2016-12-15 05:39:39', '2016-12-15 05:51:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_groups`
--

INSERT INTO `users_groups` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', '', NULL, '2016-07-23 23:02:05'),
(5, 'Admin', '', '2016-12-15 05:44:14', '2016-12-15 05:46:17'),
(6, 'Sub Admin', '', '2016-12-15 05:48:34', '2016-12-15 05:48:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_parent` int(11) DEFAULT NULL,
  `role_group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_roles`
--

INSERT INTO `users_roles` (`id`, `code`, `note`, `role_parent`, `role_group`, `created_at`, `updated_at`) VALUES
(1, 'viewUsersList', NULL, NULL, 'user', NULL, NULL),
(2, 'addUser', NULL, NULL, 'user', NULL, NULL),
(3, 'editUser', NULL, NULL, 'user', NULL, NULL),
(4, 'deleteUser', NULL, NULL, 'user', NULL, NULL),
(5, 'viewUserGroupList', NULL, NULL, 'user', NULL, NULL),
(6, 'addUserGroup', NULL, NULL, 'user', NULL, NULL),
(7, 'editUserGroup', NULL, NULL, 'user', NULL, NULL),
(8, 'deleteUserGroup', NULL, NULL, 'user', NULL, NULL),
(54, 'viewCategoryList', NULL, NULL, 'category', NULL, NULL),
(55, 'addCategory', NULL, NULL, 'category', NULL, NULL),
(56, 'editCategory', NULL, NULL, 'category', NULL, NULL),
(57, 'deleteCategory', NULL, NULL, 'category', NULL, NULL),
(58, 'viewProductList', NULL, NULL, 'image', NULL, NULL),
(59, 'addProduct', NULL, NULL, 'image', NULL, NULL),
(60, 'editProduct', NULL, NULL, 'image', NULL, NULL),
(61, 'deleteProduct', NULL, NULL, 'image', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups_roles`
--
ALTER TABLE `groups_roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_roles_code_unique` (`code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `groups_roles`
--
ALTER TABLE `groups_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
