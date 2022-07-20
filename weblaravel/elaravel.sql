-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 06:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_12_063053_create_tbl_admin_table', 1),
(6, '2022_05_16_033455_create_tbl_all_users', 2),
(7, '2022_05_16_063806_create_tbl_all_category_product', 3),
(8, '2022_05_20_010929_tbl_all_custom', 4),
(9, '2022_05_23_030046_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'badman@gmail.com', '12345678', 'dat', '03339999', '2022-05-12 08:54:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_all_category_product`
--

CREATE TABLE `tbl_all_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_gia` int(11) NOT NULL,
  `category_chucnang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_all_category_product`
--

INSERT INTO `tbl_all_category_product` (`category_id`, `category_name`, `category_gia`, `category_chucnang`, `category_desc`, `category_file`, `created_at`, `updated_at`) VALUES
(9, 'Sản phẩm eee', 999, 'Chức năng pôppo', 'Đang bán', '', NULL, NULL),
(10, 'Ps4', 123, 'âsassss', 'Đang bán', '', NULL, NULL),
(13, 'Ps4111212121', 7777, '121212121', 'Đang bán', '', NULL, NULL),
(14, 'a', 0, 'a', 'Hết hàng', '', NULL, NULL),
(15, '11', 11, '11', 'Đang bán', '', NULL, NULL),
(16, 'Ps41111', 0, '1111', 'Đang bán', '', NULL, NULL),
(17, 'asasasas', 0, 'asd', 'Đang bán', '', NULL, NULL),
(18, 'yyyyyy', 12312, 'yyyyyy', 'Đang bán', '', NULL, NULL),
(19, 'ád', 123, 'ád', 'Đang bán', '', NULL, NULL),
(21, '123123', 11111, '123123', 'Đang bán', '', NULL, NULL),
(22, 'qưqwqwqw', 1212121, 'qưqwqwqwqw', 'Đang bán', '', NULL, NULL),
(23, 'ưqqweqwe', 9999, 'qưeqweqwe', 'Đang bán', '', NULL, NULL),
(25, 'ádasdasdasd', 121212, 'ádasdasd', 'Đang bán', '', NULL, NULL),
(26, 'Ps4sadasd', 1212, 'asdasdasd', 'Đang bán', '', NULL, NULL),
(27, 'Ps4wwww', 12345, 'asccccc', 'Đang bán', 'bao cao ensure.jpg', NULL, NULL),
(28, 'Ps4Zzxz', 111111, 'zxxaasa', 'Đang bán', 'bao cao ensure.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_all_custom`
--

CREATE TABLE `tbl_all_custom` (
  `custom_id` int(10) UNSIGNED NOT NULL,
  `custom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_all_custom`
--

INSERT INTO `tbl_all_custom` (`custom_id`, `custom_name`, `custom_email`, `custom_address`, `custom_phone`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Bô', 'nguyenvanbo@gmail.com', '566 U Văn Khiêm, phường 5, Quận Bình Thạnh,TP.Hồ Chí Minh', 123456789, NULL, NULL),
(2, 'Lê Thị Hương', 'huonglethi@gmail.com', '555, phường 1, Quận 4, TP.Hồ Chí Minh', 565124789, NULL, NULL),
(3, 'Võ Văn Bảy', 'vovanbay11@gmail.com', '123, Hàm Nghi, Quận 1, TP.Hồ Chí Minh', 567856124, NULL, NULL),
(4, 'Nguyễn Minh Khôi', 'khoiminhnguyen22@gmail.com', '156 Hàm Nghi, Quận 1, TP.Hồ Chí Minh', 892345678, NULL, NULL),
(5, 'ádasdadad', 'jakakakakaka@gmail.com', '123123123123123', 131234567, NULL, NULL),
(6, 'qưeqweqweqwe', 'jakakakakqweqweaka@gmail.com', '1212312312312312asda', 131234567, NULL, NULL),
(7, 'ádasdadad12121', 'jakakakaka1211ka@gmail.com', '1212312312312312asda', 2147483647, NULL, NULL),
(8, 'ádasdadadádasd', 'jakakakakaádasdka@gmail.com', '1212312312312312asdaádasdasd', 131234567, NULL, NULL),
(9, 'ádasdadad', 'jakakaksssakaka@gmail.com', '1212312312312312asda', 1234657981, NULL, NULL),
(10, 'asdasdasdasd', 'jakakakakssssssaka@gmail.com', 'asdasdasd', 123456789, NULL, NULL),
(11, 'Hádasdasd', 'jakakakaddkaka@gmail.com', '1212312312312312asda', 131234567, NULL, NULL),
(12, 'H1111', 'jakakaka11kaka@gmail.com', '1212312312312312asda', 131234567, NULL, NULL),
(13, 'H1212', 'sjaskakakakaka@gmail.com', '1212312312312312asda', 131234567, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_all_users`
--

CREATE TABLE `tbl_all_users` (
  `users_id` int(10) UNSIGNED NOT NULL,
  `users_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_gmail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_all_users`
--

INSERT INTO `tbl_all_users` (`users_id`, `users_name`, `users_gmail`, `users_group`, `users_desc`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 'nguyenvana13@gmail.com', 'Admin', 'Tạm khóa', NULL, NULL),
(2, 'Nguyễn Văn B', 'nguyenvanb123@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(4, 'Nguyễn Văn C', 'nguyenvanc111@gmail.com', 'Reviewer', 'Đang hoạt động', NULL, NULL),
(5, 'Nguyễn Văn DDDĐ', 'nguyenvandddddd33@gmail.com', 'Admin', 'Tạm khóa', NULL, NULL),
(6, 'Nguyễn Văn GGGGG', 'nguyenvangggggg44@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(7, 'nguyen van cu', 'adsada@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(8, 'nguyenthinguyen', 'eeeeeeda@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(9, 'nguyen van cusdsdad', 'eeeeedasdasdaddadeda@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(10, 'nguyenthinguyen22222', 'adsad45454545a@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(11, 'letandat139', 'letandat139@gmail.com', 'Reviewer', 'Đang hoạt động', NULL, NULL),
(12, 'nguyen van cusdsdad', 'eeeeeeda@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(16, 'asd', 'adsada@gmail.com', 'Reviewer', 'Đang hoạt động', NULL, NULL),
(19, 'sd', 'sss@asdsd.com', 'Reviewer', 'Đang hoạt động', NULL, NULL),
(21, 'nguyen van cu', 'adsada@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(22, 'nguyen van cuqqqq', 'adsaqqqqqqda@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(24, 'nguyen van cu1212', 'adsad1212a@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(25, 'nguyen van cu', 'adsada@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(27, 'levanluyen', 'levanluyen13@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(28, 'qweqweqwewq', 'adsada@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(29, 'nguyen van cuqq', 'adqqqsada@gmail.com', 'Admin', 'Đang hoạt động', NULL, NULL),
(33, 'Nguyễn Văn kkkkkkkk', 'nguyenvaaang44kkkkkk@gmail.com', 'Reviewer', 'Đang hoạt động', NULL, NULL),
(34, 'Nguyễn Văn GGGGGaaaaaaa', 'nguyenvaaansssg44@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(35, 'Nguyễn Văn GGGGGaaaaaaa', 'nguyenvaaansssg44@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(36, 'ssssssss', 'ssssssss@gmail.com', 'Editor', 'Tạm khóa', NULL, NULL),
(37, 'Nguyễn Văn GGGGGasas', 'nguyenvaasssang44@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(38, 'Nguyễn Văn GGGGG', 'letandat139@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(39, 'Nguyễn Văn GGGGGdd', 'letandat139sss@gmail.com', 'Editor', 'Đang hoạt động', NULL, NULL),
(48, 'asdasdasdasdasd', 'nguyenvaaang44@gmail.com', 'Reviewer', 'Đang hoạt động', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_all_category_product`
--
ALTER TABLE `tbl_all_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_all_custom`
--
ALTER TABLE `tbl_all_custom`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `tbl_all_users`
--
ALTER TABLE `tbl_all_users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_all_category_product`
--
ALTER TABLE `tbl_all_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_all_custom`
--
ALTER TABLE `tbl_all_custom`
  MODIFY `custom_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_all_users`
--
ALTER TABLE `tbl_all_users`
  MODIFY `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
