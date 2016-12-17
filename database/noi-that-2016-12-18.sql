-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 05:06 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noi-that`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Phòng khách', 'Sản phẩm về phòng khách', 'img_phong_khach_1481895266.jpg', '2016-12-16 06:11:16', '2016-12-16 06:36:05'),
(4, 'Phòng ngủ', 'Sản phầm về phòng ngủ', 'img_phong_ngu_1481901246.jpg', '2016-12-16 08:14:07', '2016-12-16 08:14:07'),
(5, 'Phòng học', 'Sản phẩm về phòng học', 'img_phong_hoc_1481955316.jpg', '2016-12-16 08:14:44', '2016-12-16 23:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `groups_roles`
--

CREATE TABLE `groups_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups_roles`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `price` float NOT NULL DEFAULT '0',
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `short_description`, `price`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `highlight`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'AB23123', 'Test sản phẩm nè', 'đây là mô tả dài', 'Đây là mô tả ngắn', 2000000, 'img_test_san_pham_ne_1.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 0, 5, '2016-12-16 21:54:56', '2016-12-17 03:28:34'),
(3, 'tt23723', 'Bàn học chuẩn châu âu', 'test sản phâmtest sản phâmtest sản phâm test sản phâmtest sản phâmtest sản phâmtest sản phâm', 'test sản phâm', 1000000, 'img_ban_hoc_chuan_chau_au_1.jpg', 'img_ban_hoc_chuan_chau_au_2.jpg', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 5, '2016-12-16 23:27:01', '2016-12-17 03:16:59'),
(4, 'PN12390', 'Phòng ngủ', 'Diamlorem rutrum nulla est pharetra laborum eleifend possimus, natus neque ullam, purus magni interdum illum ea exercitation tellus\r\nDiamlorem rutrum nulla est pharetra laborum eleifend possimus, natus neque ullam, purus magni interdum illum ea exercitation tellusDiamlorem rutrum nulla est pharetra laborum eleifend possimus, natus neque ullam, purus magni interdum illum ea exercitation tellusDiamlorem rutrum nulla est pharetra laborum eleifend possimus, natus neque ullam, purus magni interdum illum ea exercitation tellus', 'Diamlorem rutrum nulla est pharetra laborum eleifend possimus, natus neque ullam, purus magni interdum illum ea exercitation tellus', 5000000, 'img_phong_ngu_1.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 'no-image.png', 1, 4, '2016-12-17 03:20:15', '2016-12-17 03:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'letanphat0706@gmail.com', '$2y$10$Du7eTzeI3bOZnIwkryRQWuhRaASLtRxfQnapLFwTEZsZPgvWnqnG6', 1, 'wVnOfFZXEdCCQzBh3Nhyhcl6uhD3kcneRXIdriBtVhByy7TUH3Ey0O26F9eG', NULL, '2016-12-16 08:42:29'),
(2, 'Admin', 'admin@admin.com', '$2y$10$Du7eTzeI3bOZnIwkryRQWuhRaASLtRxfQnapLFwTEZsZPgvWnqnG6', 5, 'nsAauNvorJUUxA9wMhALNJdTm1VKmVSlOfbFgnaBCvrroCYqkQ0xkYaxxMfb', NULL, '2016-12-15 07:40:40'),
(6, 'Content user', 'content@content.com', '$2y$10$Iitwt4sYEmlCRq7DWkoXHOQwmoqDjMC6NasPghAVsTeRq2./wo1cu', 6, NULL, '2016-12-15 05:39:39', '2016-12-15 05:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', '', NULL, '2016-07-23 23:02:05'),
(5, 'Admin', '', '2016-12-15 05:44:14', '2016-12-15 05:46:17'),
(6, 'Sub Admin', '', '2016-12-15 05:48:34', '2016-12-15 05:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
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
-- Dumping data for table `users_roles`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_roles`
--
ALTER TABLE `groups_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_roles_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups_roles`
--
ALTER TABLE `groups_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
