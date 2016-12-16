-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 08:24 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'fasdfasdf asdf', 'img_fasdfasdf_asdf_1481871951.jpg', 'df adf asdf asdf asd', ' asdf asdf as', '2016-12-16 00:05:52', '2016-12-16 00:05:52'),
(2, 'fasdfasf dasf sadf', 'img_fasdfasf_dasf_sadf_1481872055.jpg', 'df asdf asdf asdf', ' dasf asdf as', '2016-12-16 00:07:36', '2016-12-16 00:07:36');

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
(118, 1, 8, '2016-07-10 23:46:39', '2016-07-10 23:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'SysAdmin', 'letanphat0706@gmail.com', '$2y$10$Du7eTzeI3bOZnIwkryRQWuhRaASLtRxfQnapLFwTEZsZPgvWnqnG6', 'kC1SYKtNybFZcj4hHRRXj52Q6F1Ttyt1thopLOW3uWiRTzSPLpAFi43TijkA', '2016-12-14 17:00:00', '2016-12-15 23:47:10');

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
(1, 'System Admin', NULL, '2016-12-15 17:00:00', '2016-12-15 17:00:00'),
(2, 'Admin', NULL, '2016-12-15 17:00:00', '2016-12-15 17:00:00');

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
(58, 'viewImageList', NULL, NULL, 'image', NULL, NULL),
(59, 'addImage', NULL, NULL, 'image', NULL, NULL),
(60, 'editImage', NULL, NULL, 'image', NULL, NULL),
(61, 'deleteImage', NULL, NULL, 'image', NULL, NULL);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups_roles`
--
ALTER TABLE `groups_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
