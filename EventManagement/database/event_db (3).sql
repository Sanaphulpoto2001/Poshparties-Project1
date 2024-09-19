-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 08:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_number` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `special_requests` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` bigint(20) UNSIGNED NOT NULL,
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `b_name`, `b_number`, `b_date`, `email`, `theme`, `guests`, `special_requests`, `payment_method`, `user_id`, `venue_id`, `time_id`, `created_at`, `updated_at`) VALUES
(2, 'ayeasha', '03003227916', '2024-08-23', 'ayesha@gmail.com', 'pink', '1-50', 'hello', 'cash', 3, 10, 3, '2024-08-22 02:40:12', '2024-08-22 02:40:12'),
(3, 'ayeasha', '03003227916', '2024-08-30', 'ayesha@gmail.com', 'pink', '51-100', 'hello', 'cash', 3, 12, 3, '2024-08-22 03:00:06', '2024-08-22 03:00:06'),
(4, 'sana', '03003227917', '2024-08-30', 'sana@gmail.com', 'white', '51-100', 'hellloo', 'cash', 2, 5, 4, '2024-08-22 03:09:03', '2024-08-22 03:09:03'),
(5, 'sana', '03003227917', '2024-08-30', 'sana@gmail.com', 'white', '1-50', 'helloo', 'cash', 2, 10, 3, '2024-08-22 03:17:07', '2024-08-22 03:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('174ce019ebac8bd991834b09fd9f3986', 'i:1;', 1726481835),
('174ce019ebac8bd991834b09fd9f3986:timer', 'i:1726481835;', 1726481835),
('6eaa2004d65ced903a2437f33d0aade4', 'i:1;', 1724755074),
('6eaa2004d65ced903a2437f33d0aade4:timer', 'i:1724755074;', 1724755074),
('944420db96bff82b3d017942604692e2', 'i:1;', 1724315878),
('944420db96bff82b3d017942604692e2:timer', 'i:1724315878;', 1724315878);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_image`, `created_at`, `updated_at`) VALUES
(1, 'Birthday Party', '1724153838.jpg', '2024-08-20 06:37:18', '2024-08-20 06:37:18'),
(2, 'Graducation Ceremony', '1724155510.jpg', '2024-08-20 07:05:10', '2024-08-20 07:05:10'),
(3, 'Wedding Events', '1724167680.jpg', '2024-08-20 10:28:00', '2024-08-20 10:28:00'),
(4, 'Bridal Shower', '1724277390.webp', '2024-08-21 16:56:30', '2024-08-21 16:56:30'),
(5, 'Engagement', '1724277422.jpg', '2024-08-21 16:57:02', '2024-08-21 16:57:02'),
(6, 'Social Events', '1724277510.webp', '2024-08-21 16:57:53', '2024-08-21 16:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `g_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `g_image`, `created_at`, `updated_at`) VALUES
(1, '1724068507.jpg', '2024-08-19 06:55:07', '2024-08-19 06:55:07'),
(2, '1724068519.jpg', '2024-08-19 06:55:19', '2024-08-19 06:55:19'),
(3, '1724311832.jpg', '2024-08-19 06:55:32', '2024-08-22 02:30:32'),
(4, '1724068555.jpg', '2024-08-19 06:55:55', '2024-08-19 06:55:55'),
(5, '1724068573.webp', '2024-08-19 06:56:13', '2024-08-19 06:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_location` varchar(200) DEFAULT NULL,
  `h_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `h_name`, `h_location`, `h_image`, `created_at`, `updated_at`, `category_id`) VALUES
(5, 'Beach Luxury Hotel', 'Karachi', '1724175870.jpg', '2024-08-20 12:44:30', '2024-08-20 12:44:30', 3),
(6, 'Pc Hotel', 'Karachi', '1724307979.jpg', '2024-08-20 12:52:15', '2024-08-22 01:26:19', 3),
(7, 'Hotel', 'Karachi', '1724308051.jpg', '2024-08-20 13:01:42', '2024-08-22 01:27:31', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_books`
--

CREATE TABLE `hotel_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_number` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `special_requests` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_books`
--

INSERT INTO `hotel_books` (`id`, `b_name`, `b_number`, `b_date`, `email`, `theme`, `guests`, `special_requests`, `payment_method`, `user_id`, `hotel_id`, `time_id`, `created_at`, `updated_at`) VALUES
(2, 'sana', '03003227917', '2024-08-22', 'sana1122@gmail.com', 'pink', '1-50', 'hello', 'cash', 4, 6, 3, '2024-08-22 05:33:36', '2024-08-22 05:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2024_08_05_144536_create_user_table', 1),
(8, '2024_08_13_103335_create_time_table', 3),
(9, '2024_08_14_142101_create_venue_table', 4),
(10, '2024_08_14_151322_create_gallery_table', 5),
(11, '2024_08_14_160137_create_gallery_table', 6),
(12, '2024_08_14_175600_create_gallery_table', 7),
(27, '0001_01_01_000000_create_users_table', 8),
(28, '0001_01_01_000001_create_cache_table', 8),
(29, '0001_01_01_000002_create_jobs_table', 8),
(30, '2024_08_05_142618_add_two_factor_columns_to_users_table', 8),
(31, '2024_08_05_142854_create_personal_access_tokens_table', 8),
(32, '2024_08_11_105716_create_categories_table', 8),
(33, '2024_08_15_140423_create_galleries_table', 8),
(34, '2024_08_16_151802_create_hotels_table', 8),
(35, '2024_08_17_102947_create_times_table', 8),
(36, '2024_08_17_155518_create_contact_us_table', 8),
(37, '2024_08_18_094758_create_venues_table', 8),
(38, '2024_08_20_163045_create_bookings_table', 9),
(39, '2024_08_21_064845_create_services_table', 10),
(40, '2024_08_21_112251_create_hotelbooking_table', 11),
(41, '2024_08_21_112251_create_hotelbookings_table', 12),
(42, '2024_08_21_112251_create_hotel_books_table', 13),
(43, '2024_08_21_155027_create_event_organizers_table', 13),
(44, '2024_08_21_155027_create_organizers_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_image` text NOT NULL,
  `o_email` varchar(255) NOT NULL,
  `o_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `o_name`, `o_image`, `o_email`, `o_description`, `created_at`, `updated_at`) VALUES
(1, 'Haris', '1724306479.jpg', 'Haris@gamil.com', 'Experienced Professionals', '2024-08-21 16:02:53', '2024-08-22 01:01:19'),
(2, 'Fawad', '1724306535.jpeg', 'fawad@gamil.com', 'Experienced Professionals', '2024-08-22 01:02:15', '2024-08-22 01:02:15'),
(3, 'Ali', '1724307803.jpg', 'ali@gamil.com', 'Experienced Professionals', '2024-08-22 01:23:23', '2024-08-22 01:23:23'),
(4, 'Faizan', '1724307848.jpg', 'Faizan@gamil.com', 'Experienced Professionals', '2024-08-22 01:24:08', '2024-08-22 01:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `s_name`, `s_image`, `created_at`, `updated_at`) VALUES
(1, 'photography', '1724311584.jpg', '2024-08-21 04:43:21', '2024-08-22 02:26:24'),
(2, 'catering', '1724311627.jpg', '2024-08-21 04:49:41', '2024-08-22 02:27:07'),
(3, 'Entertainment(DJ/Band)', '1724311738.jpg', '2024-08-21 04:49:59', '2024-08-22 02:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PsJZmkdQ6fOX5qkSMBaHMucxUTormVq2UzXu39OZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXJlR0EySnBnUklUZWI5eDlSSjNQVU9XVHJSUndSblFBSUdlbDY4YiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1726683469);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time_in`, `time_out`, `date`, `created_at`, `updated_at`) VALUES
(3, '16:00:00', '21:00:00', '2024-08-29', '2024-08-22 02:07:16', '2024-08-22 02:07:16'),
(4, '12:11:00', '15:12:00', '2024-08-24', '2024-08-22 02:12:13', '2024-08-22 02:12:13'),
(5, '20:00:00', '23:00:00', '2024-09-03', '2024-08-22 04:44:27', '2024-08-22 04:44:27'),
(6, '20:00:00', '23:00:00', '2024-09-02', '2024-08-22 04:45:24', '2024-08-22 04:45:24'),
(7, '20:12:00', '12:00:00', '2024-08-26', '2024-08-22 04:47:50', '2024-08-22 04:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Sana', 'sana@gmail.com', 'admin', NULL, '$2y$12$P5hBPy7EF1q14gS0WaHcxOi8DplQpKFQsZrKfRNRGU8Zwvjjo.xme', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-19 05:43:56', '2024-08-19 05:43:56'),
(3, 'Ayesha', 'ayesha@gmail.com', 'user', NULL, '$2y$12$gTlFCb0jealsdSuOpSotPefI1ycC04RbGzFyqEFqNHhg0UJPc.VBW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-22 01:49:56', '2024-08-22 01:49:56'),
(4, 'Sana', 'sana1122@gmail.com', 'user', NULL, '$2y$12$xIawQEbpp.PiUtEtJHstheQXBOWD.tYsdS/SNkorJg6PpQcBo5AQO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-22 03:42:03', '2024-08-22 03:42:03'),
(5, 'hifza siddiqui', 'hifzasiddiqui@gmail.com', 'user', NULL, '$2y$12$skdf1.dfFkdR8rvcvpYZ/.QbprSVz1nrnTokVB1U0SsvlMsnZv6ja', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-22 06:08:33', '2024-08-22 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_image` text NOT NULL,
  `v_name` varchar(200) NOT NULL,
  `v_location` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `v_image`, `v_name`, `v_location`, `created_at`, `updated_at`, `category_id`) VALUES
(1, '1724064593.jpeg', 'pc', 'gulshan', '2024-08-19 05:45:27', '2024-08-22 02:16:18', 3),
(2, '1724064612.jpeg', 'venue', 'landhi', '2024-08-19 05:45:45', '2024-08-22 02:18:35', 6),
(3, '1724064364.jpg', 'hotel', 'shah e faisal', '2024-08-19 05:46:04', '2024-08-20 07:05:51', 2),
(4, '1724311170.jpeg', 'serena hotel', 'shah e faisal', '2024-08-19 05:46:24', '2024-08-22 02:19:30', 1),
(5, '1724064428.jpg', 'beach hotel', 'malir', '2024-08-19 05:47:08', '2024-08-22 02:20:27', 3),
(6, '1724064452.jpg', 'hotel', 'gulshan', '2024-08-19 05:47:32', '2024-08-19 05:47:32', 1),
(7, '1724064502.jpg', 'sajjad hotel', 'gulshan', '2024-08-19 05:48:22', '2024-08-19 05:48:22', 1),
(8, '1724064534.jpg', 'lal qila', 'sadar', '2024-08-19 05:48:54', '2024-08-19 05:48:54', 1),
(9, '1724277316.jpg', 'zamzam hotel', 'karachi', '2024-08-20 06:40:23', '2024-08-21 16:55:16', 3),
(10, '1724277250.jpg', 'clock tower', 'malir', '2024-08-20 07:05:23', '2024-08-21 16:54:10', 1),
(11, '1724167727.jpg', 'areena', 'malir', '2024-08-20 10:28:47', '2024-08-20 10:28:47', 3),
(12, '1724176169.jpeg', 'venue', 'karachi', '2024-08-20 12:49:29', '2024-08-20 12:49:29', 3),
(13, '1724308284.jpg', 'venue', 'karachi', '2024-08-22 01:31:24', '2024-08-22 01:31:24', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_venue_id_foreign` (`venue_id`),
  ADD KEY `bookings_time_id_foreign` (`time_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_us_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `hotel_books`
--
ALTER TABLE `hotel_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_books_user_id_foreign` (`user_id`),
  ADD KEY `hotel_books_hotel_id_foreign` (`hotel_id`),
  ADD KEY `hotel_books_time_id_foreign` (`time_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizers_o_email_unique` (`o_email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotel_books`
--
ALTER TABLE `hotel_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_venue_id_foreign` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotel_books`
--
ALTER TABLE `hotel_books`
  ADD CONSTRAINT `hotel_books_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_books_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
