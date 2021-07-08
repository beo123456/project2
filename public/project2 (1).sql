-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2021 lúc 10:01 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `desc`, `status`) VALUES
(11, 'picnic', 'picnic.jpg', NULL, '2'),
(12, 'model', 'model.jpg', '', '1'),
(15, 'dress', 'dress.jpg', NULL, '1'),
(16, 'sungglasses', 'sungglasses.jpg', NULL, '1'),
(17, 'willow', 'willow.jpg', NULL, '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', NULL, 1, NULL, NULL),
(2, 'Zara', NULL, 1, NULL, NULL),
(3, 'Nike', NULL, 1, NULL, NULL),
(5, 'Adidas', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo Nam', NULL, 1, NULL, NULL),
(2, 'Áo Nữ', NULL, 1, NULL, NULL),
(3, 'Váy Nữ', NULL, 1, NULL, NULL),
(4, 'Giày Nữ', NULL, 1, NULL, NULL),
(6, 'Kính Nam', NULL, 1, NULL, NULL),
(7, 'Túi Xách', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2021_06_27_032614_category_product', 1),
(21, '2021_06_27_092340_brand', 1),
(22, '2021_06_27_095537_product', 1),
(23, '2021_07_02_030244_customer', 2),
(24, '2021_07_02_071745_customer', 3),
(25, '2021_07_02_084029_customer', 4),
(26, '2021_07_02_090630_shipping', 5),
(27, '2021_07_02_102606_shipping', 6),
(28, '2021_07_02_103308_shipping', 7),
(29, '2021_07_02_103917_shipping', 8),
(30, '2021_07_02_112428_customer', 9),
(31, '2021_07_02_112448_shipping', 9),
(32, '2021_07_02_112721_shipping', 10),
(33, '2021_07_02_113130_customer', 10),
(34, '2021_07_03_013409_customer', 11),
(35, '2021_07_03_014931_shipping', 12),
(36, '2021_07_03_020715_shipping', 13),
(37, '2021_07_03_021717_customer', 14),
(38, '2021_07_03_021738_shipping', 14),
(39, '2021_07_03_061842_shipping', 15),
(40, '2021_07_03_070222_shipping', 16),
(41, '2021_07_04_014442_customer', 17),
(42, '2021_07_04_014542_create_shippings_table', 17),
(43, '2021_07_04_015538_customer', 18),
(44, '2021_07_04_015814_shipping', 19),
(45, '2021_07_04_021029_order', 20),
(46, '2021_07_04_021253_product_order', 20),
(47, '2021_07_04_023444_product_order', 21),
(48, '2021_07_04_032511_order', 22),
(49, '2021_07_04_032549_product_order', 22),
(50, '2021_07_04_033331_order', 23),
(51, '2021_07_04_033352_product_order', 23),
(52, '2021_07_05_041701_banner', 24),
(53, '2021_07_05_044831_banner', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `phone`, `note`, `total`, `state`, `created_at`, `updated_at`) VALUES
(1, 'hoàng dũng', 'TP HN', '0355747529', 'gọi trước khi giao hàng', '500000', '2', '2021-07-04 01:26:39', '2021-01-04 20:17:44'),
(2, 'Ngọc Lâm', 'TP HN', '0355747529', 'gọi trước khi giao hàng', '2500000', '2', '2021-07-04 01:27:54', '2021-02-05 00:13:46'),
(3, 'khánh ly', 'TP HN', '0355747529', 'gọi trước khi giao hàng', '500000', '2', '2021-07-04 01:28:18', '2021-03-04 20:09:17'),
(4, 'Nhi Vũ', 'TP HN', '0355747529', 'gọi trước khi giao hàng', '4000000', '2', '2021-07-04 19:52:50', '2021-04-04 20:16:07'),
(10, 'hoàng dũng', 'TP HN', '0355747529', 'gọi trước khi giao hàng', '100000', '2', '2021-07-06 02:27:04', '2021-05-06 02:27:04'),
(11, 'Ý Nhi', 'TP HN', '0397508608', 'gọi trước khi giao hàng', '600000', '2', '2021-07-06 02:30:00', '2021-06-06 02:30:00'),
(13, 'Lan Anh', 'TP HN', '03557475291', NULL, '4000000', '2', '2021-07-06 02:31:05', '2021-07-06 02:31:05'),
(14, 'Trang', 'TP HN', '03557475291', NULL, '12000000', '1', '2021-07-06 02:33:38', '2021-07-06 02:33:38'),
(15, 'Bùi Dũng', 'TP HN', '0355747589', NULL, '300000', '1', '2021-07-06 02:34:26', '2021-07-06 02:35:29'),
(16, 'Liên', 'TP HN', '039750860', NULL, '3000000', '2', '2021-07-06 02:35:05', '2021-07-06 02:37:38'),
(17, 'hoàng dũng', 'TP HN', '0355747529', NULL, '12000000', '2', '2021-07-06 03:13:03', '2021-07-06 03:14:13'),
(18, 'Thùy Linh', 'TP HN', '03557475291', 'gọi trước khi giao hàng', '3000000', '1', '2021-07-07 00:41:15', '2021-07-07 00:41:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `name`, `desc`, `content`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 4, 3, 'Giày Nike Nike Air Force 1 Shadow Pale', 'White color', 'Xuất xứ Mỹ', '2000000', 'giay-nike-nike-air-force-1-shadow-pale.jpg', '1', NULL, NULL),
(8, 1, 1, 'Áo Cộc', 'blue', 'Xuất Xứ VN', '100000', 'ao-coc.jpg', '1', NULL, NULL),
(9, 3, 2, 'Chân Váy', 'Màu Trắng', 'Xuất Xứ VN', '500000', '../../../public/backend/images/chan-vay.jpg', '1', NULL, NULL),
(10, 2, 2, 'Áo kiểu nữ đẹp cao cấp vải xô Boi', 'Màu vàng', '- Đây là sản phẩm đang trong thời gian khuyến mại', '500000', 'ao-kieu-nu-dep-cao-cap-vai-xo-boi.jpg', '1', NULL, NULL),
(11, 2, 2, 'Áo cộc nữ', 'chất liệu thoáng mát', '- Sản phẩm hot trên thị trường', '100000', '../../../public/backend/images/ao-coc-nu.jpg', '1', NULL, NULL),
(12, 3, 2, 'váy trắng', '- chất liệu thoáng mát', NULL, '500000', 'vay-trang.jpg', '1', NULL, NULL),
(13, 6, 5, 'Kính Thời Trang', NULL, NULL, '200000', 'kinh-thoi-trang.jpg', '1', NULL, NULL),
(14, 7, 5, 'Túi Xách Thời Trang', NULL, NULL, '120000', 'tui-xach-thoi-trang.jpg', '1', NULL, NULL),
(15, 3, 1, 'Váy Đỏ', '- chất liệu thoáng mát', NULL, '2000000', 'vay-do.jpg', '1', NULL, NULL),
(16, 4, 3, 'Giày Mickey', NULL, NULL, '1850000', 'giay-mickey.jpg', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_order`
--

CREATE TABLE `product_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_order`
--

INSERT INTO `product_order` (`id`, `name`, `quantity`, `price`, `image`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Váy ngắn', '1', '500000', '../../../public/backend/images/vay-ngan.jpg', 1, NULL, NULL),
(2, 'Giày Nike Nike Air Force 1 Shadow Pale', '1', '2000000', 'giay-nike-nike-air-force-1-shadow-pale.jpg', 2, NULL, NULL),
(3, 'Áo kiểu nữ đẹp cao cấp vải xô Boi', '1', '500000', 'ao-kieu-nu-dep-cao-cap-vai-xo-boi.jpg', 2, NULL, NULL),
(4, 'Áo kiểu nữ đẹp cao cấp vải xô Boi', '1', '500000', 'ao-kieu-nu-dep-cao-cap-vai-xo-boi.jpg', 3, NULL, NULL),
(5, 'Áo kiểu nữ đẹp cao cấp vải xô Boi', '2', '500000', 'ao-kieu-nu-dep-cao-cap-vai-xo-boi.jpg', 4, NULL, NULL),
(6, 'Váy ngắn', '2', '500000', '../../../public/backend/images/vay-ngan.jpg', 4, NULL, NULL),
(7, 'Chân Váy', '4', '500000', '../../../public/backend/images/chan-vay.jpg', 4, NULL, NULL),
(19, 'Áo Cộc', '1', '100000', 'ao-coc.jpg', 10, NULL, NULL),
(20, 'Áo cộc nữ', '6', '100000', '../../../public/backend/images/ao-coc-nu.jpg', 11, NULL, NULL),
(21, 'Chân Váy', '4', '500000', '../../../public/backend/images/chan-vay.jpg', 13, NULL, NULL),
(22, 'Giày Nike Nike Air Force 1 Shadow Pale', '1', '2000000', 'giay-nike-nike-air-force-1-shadow-pale.jpg', 13, NULL, NULL),
(23, 'Áo kiểu nữ đẹp cao cấp vải xô Boi', '4', '500000', 'ao-kieu-nu-dep-cao-cap-vai-xo-boi.jpg', 14, NULL, NULL),
(24, 'Giày Nike Nike Air Force 1 Shadow Pale', '4', '2000000', 'giay-nike-nike-air-force-1-shadow-pale.jpg', 14, NULL, NULL),
(25, 'váy trắng', '4', '500000', 'vay-trang.jpg', 14, NULL, NULL),
(26, 'Áo Cộc', '3', '100000', 'ao-coc.jpg', 15, NULL, NULL),
(27, 'váy trắng', '6', '500000', 'vay-trang.jpg', 16, NULL, NULL),
(28, 'Váy Đỏ', '6', '2000000', 'vay-do.jpg', 17, NULL, NULL),
(29, 'Giày Nike Nike Air Force 1 Shadow Pale', '1', '2000000', 'giay-nike-nike-air-force-1-shadow-pale.jpg', 18, NULL, NULL),
(30, 'Chân Váy', '2', '500000', '../../../public/backend/images/chan-vay.jpg', 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `level`) VALUES
(1, 'hoangdinhmanhdung98@gmail.com', '$2y$10$Q2MH6xX/p7nt2onZGu6XVePbmN9YHPaDzYmUzEcrSkiFf3Vr5Qaxm', 'HoangDung', '0355747529', 1),
(4, 'admin@gmail.com', '$2y$10$BKJwH5ucQbV2xo12V8m.Fe9Znflqs0DSMnpBesL/1VlK15lthE8la', 'admin', '0397508608', 1),
(5, 'chip@gmail.com', '$2y$10$s8x.9K/dtCClWCxv3t4pbO8Dscig/pUwJml8na6i8.PbKQwYh3Yle', 'Ngọc Lâm', '0355747527', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`),
  ADD KEY `product_brand_id_foreign` (`brand_id`);

--
-- Chỉ mục cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_order_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
