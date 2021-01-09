-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2018 at 11:56 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flora_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Venues', '1542098872_venue1.jpg', 1, '2018-11-13 03:17:52', '2018-11-13 03:19:44'),
(2, 'Design & Decor', '1542098897_decor.jpg', 1, '2018-11-13 03:18:17', '2018-11-13 03:19:52'),
(3, 'Wedding Photography', '1542098920_photography.jpg', 1, '2018-11-13 03:18:40', '2018-11-13 03:19:58'),
(4, 'Wedding Videography', '1542098943_videography.jpg', 1, '2018-11-13 03:19:03', '2018-11-13 03:20:19'),
(5, 'Invitation Card', '1542098966_cards.jpg', 1, '2018-11-13 03:19:26', '2018-11-13 03:20:30'),
(6, 'Designer Cakes', '1542098979_cake.jpg', 1, '2018-11-13 03:19:39', '2018-11-13 03:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category_id`, `name`, `description`, `date`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Presentation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2018-11-14 00:00:00', '1542099203_blue_car.jpeg', 0, '2018-11-13 03:23:23', '2018-11-13 03:23:23'),
(2, 4, 'Entertainment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', '2018-11-30 00:00:00', '1542099251_yellow_car.jpg', 0, '2018-11-13 03:24:12', '2018-11-13 03:24:12'),
(3, 6, 'test', 'gfghjh', '2018-12-29 00:00:00', '1542100126_orange_car.jpeg', 0, '2018-11-13 03:38:46', '2018-11-13 03:38:46');

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
(3, '2018_11_13_074312_create_categories_table', 2),
(4, '2018_11_13_074716_create_events_table', 3),
(5, '2018_11_13_075007_create_newsletters_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jane@gmail.com', 1, '2018-11-13 03:24:51', '2018-11-13 03:24:51'),
(2, 'ann@gmail.com', 1, '2018-11-13 03:28:04', '2018-11-13 03:28:04'),
(3, 'rrr@gmail.com', 1, '2018-11-13 03:33:00', '2018-11-13 03:33:00'),
(4, 'hfgghfh@gmail.com', 1, '2018-11-13 03:37:31', '2018-11-13 03:37:31'),
(5, 'jhkkkhk@gmail.com', 1, '2018-11-13 03:39:21', '2018-11-13 03:39:21'),
(6, 'paul@gmail.com', 1, '2018-11-13 03:41:51', '2018-11-13 03:41:51'),
(7, 'hi@gmail.com', 1, '2018-11-14 00:24:52', '2018-11-14 00:24:52'),
(8, 'new@gmail.com', 1, '2018-11-14 00:27:38', '2018-11-14 00:27:38'),
(9, 'anu@gmail.com', 1, '2018-11-14 00:29:18', '2018-11-14 00:29:18'),
(10, 'menu@gmail.com', 1, '2018-11-14 00:31:30', '2018-11-14 00:31:30'),
(11, 'paul@gmail.com', 1, '2018-11-14 00:37:17', '2018-11-14 00:37:17'),
(12, 'paul@gmail.com', 1, '2018-11-14 00:39:23', '2018-11-14 00:39:23'),
(13, 'ghfhg@thg.com', 1, '2018-11-14 00:39:56', '2018-11-14 00:39:56'),
(14, 'hghngfhgh.com', 1, '2018-11-14 00:41:17', '2018-11-14 00:41:17'),
(15, 'dgfs@hgjws.com', 1, '2018-11-14 00:45:31', '2018-11-14 00:45:31');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jane Ann Paul', 'admin@gmail.com', '$2y$10$YVrldoJm8l/XF8FifIaOt.n.gAGXxg7nvr4XD7XrrSieedSGNI/9W', NULL, '2018-11-13 03:15:53', '2018-11-13 03:15:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
