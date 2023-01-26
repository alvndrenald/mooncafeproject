-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 05:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mooncafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 3, '2023-01-26 09:35:32', '2023-01-26 09:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`cart_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 5, 3, '2023-01-26 09:35:32', '2023-01-26 09:35:32'),
(2, 13, 2, '2023-01-26 09:35:38', '2023-01-26 09:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', 'ID', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(2, 'Malaysia', 'MY', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(3, 'Singapore', 'SG', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(4, 'Thailand', 'TH', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(5, 'Vietnam', 'VN', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(6, 'Philippines', 'PH', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(7, 'Cambodia', 'KH', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(8, 'Laos', 'LA', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(9, 'Brunei', 'BN', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(10, 'Myanmar', 'MM', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(11, 'Timor Leste', 'TL', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(12, 'Bangladesh', 'BD', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(13, 'India', 'IN', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(14, 'Pakistan', 'PK', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(15, 'Sri Lanka', 'LK', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(16, 'Nepal', 'NP', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(17, 'Bhutan', 'BT', '2023-01-26 09:33:13', '2023-01-26 09:33:13');

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
(1, '2013_10_11_000000_create_countries_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_23_153437_create_product_categories_table', 1),
(7, '2022_12_23_153506_create_products_table', 1),
(8, '2022_12_23_153610_create_transactions_table', 1),
(9, '2022_12_23_153627_create_carts_table', 1),
(10, '2022_12_23_153648_create_transaction_details_table', 1),
(11, '2022_12_23_153710_create_cart_details_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `product_name`, `product_description`, `product_price`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chciken Oyakodon', 'Japanese Style Rice Bowl With Chicken and Egg', 58000, 'Chicken Oyakodon.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(2, 1, 'Spaghetti Bolognese', 'Italian Style Pasta With Tomato Sauce With Beef Chunks', 41000, 'Spaghetti Bolognese.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(3, 1, 'Crab And Corn Soup', 'Chinese Style Crab and Corn Soup', 29000, 'Crab and Corn Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(4, 1, 'Loaded Fries', 'French Fries With Beef Chunks, Gravy and Cheese', 32000, 'Loaded Fries.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(5, 1, 'Caramel Macchiato', 'Single Shot Coffee With Milk and Caramel Drizzle', 32000, 'Caramel Macchiato.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(6, 2, 'Beef Rice Bowl', 'Japanese Style Rice Bowl With Beef and Onion', 43000, 'Beef Rice Bowl.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(7, 2, 'Chciken Oyakodon', 'Japanese Style Rice Bowl With Chicken and Egg', 58000, 'Chicken Oyakodon.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(8, 2, 'Chciken Katsudon', 'Japanese Style Rice Bowl With Fried Chicken Fillet', 49000, 'Chicken Katsudon.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(9, 2, 'Chicken Katsu Curry', 'Japanese Style Rice Bowl With Fried Chicken Fillet and Japanese Curry', 65000, 'Chicken Katsu Curry.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(10, 2, 'Nasi Ayam Geprek', 'Ayam Geprek Rice Bowl With Sambal', 25000, 'Ayam Geprek.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(11, 3, 'Shoyu Ramen', 'Japanese Noodle With Soy Based Soup', 38000, 'Shoyu Ramen.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(12, 3, 'Miso Ramen', 'Japanese Noodle With Miso Based Soup', 35000, 'Miso Ramen.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(13, 3, 'Bakmie Ayam', 'Noodle With Chicken', 20000, 'Bakmie Ayam.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(14, 3, 'Spaghetti Carbonara', 'Italian Style Creamy Pasta With Chicken Or Beef Bacon', 43000, 'Spaghetti Carbonara.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(15, 3, 'Spaghetti Bolognese', 'Italian Style Pasta With Tomato Sauce With Beef Chunks', 41000, 'Spaghetti Bolognese.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(16, 4, 'Chicken Soup', 'Homemade Chicken Soup', 23000, 'Chicken Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(17, 4, 'Mushroom Cream Soup', 'Homemade Mushroom Cream Soup', 28000, 'Mushroom Cream Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(18, 4, 'French Onion Soup', 'French Style Slow Cooked Onion Soup With Garlic Bread', 32000, 'French Onion Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(19, 4, 'Crab And Corn Soup', 'Chinese Style Crab and Corn Soup', 29000, 'Crab and Corn Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(20, 4, 'Fish Soup', 'Homemade Snapper Fish Soup', 30000, 'Fish Soup.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(21, 5, 'French Fries', 'Shoestring Cut Fried Potato', 22000, 'French Fries.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(22, 5, 'Potato Wedges', 'Rustic Style Fried Potato', 25000, 'Potato Wedges.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(23, 5, 'Singkong Goreng', 'Fried Cassava Served With Tomato and Chili Sauce', 15000, 'Singkong goreng.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(24, 5, 'Loaded Fries', 'French Fries With Beef Chunks, Gravy and Cheese', 32000, 'Loaded Fries.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(25, 5, 'Poutine', 'Canadian Style Loaded Fries With Gravy and Butter', 35000, 'Poutine.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(26, 6, 'Espresso', 'Single Shot Coffee', 21000, 'Espresso.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(27, 6, 'Latte', 'Single Shot Coffee With Milk', 25000, 'Latte.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(28, 6, 'Caramel Macchiato', 'Single Shot Coffee With Milk and Caramel Drizzle', 32000, 'Caramel Macchiato.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(29, 6, 'Affogato', 'Single Shot Coffee With Vanilla Ice Cream', 29000, 'Affogato.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(30, 6, 'Irish Coffee', 'Single Shot Coffee With A Shot Of Baileys', 28000, 'Irish Coffee.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(31, 7, 'Chocolate Milkshake', 'Chocolate Milk Blended With Chocolate Ice Cream', 24000, 'Chocolate Milkshake.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(32, 7, 'Vanilla Milkshake', 'Plain Milk Blended With Vanilla Ice Cream', 22000, 'Vanilla Milkshake.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(33, 7, 'Strawberry Milkshake', 'Strawberry Milk Blended With Strawberry Ice Cream', 25000, 'Strawberry Milkshake.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(34, 7, 'Iced Tea', 'Iced Tea', 10000, 'Iced Tea.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(35, 7, 'Iced Lemon Tea', 'Iced Tea With Lemon', 18000, 'Lemon Tea.jpg', '2023-01-26 09:33:13', '2023-01-26 09:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Best Seller', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(2, 'Rice', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(3, 'Noodle', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(4, 'Soup', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(5, 'Snack', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(6, 'Coffee', '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(7, 'Non-Coffee', '2023-01-26 09:33:13', '2023-01-26 09:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-01-26 09:35:24', '2023-01-26 09:35:24', '2023-01-26 09:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transaction_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-01-26 09:35:24', '2023-01-26 09:35:24'),
(1, 8, 1, '2023-01-26 09:35:24', '2023-01-26 09:35:24'),
(1, 10, 5, '2023-01-26 09:35:25', '2023-01-26 09:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `date_of_birth` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider_id`, `password`, `gender`, `role`, `date_of_birth`, `country_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chatarine Caroline', 'chatarinecaroline@gmail.com', NULL, '$2y$10$D.vWbtUTcKKTulyr7K0KPuQsUcnYLwD5jv0AXgW2HiMz1SoFXCvPu', 'Female', 'user', '2002-12-18 17:00:00', 1, NULL, '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(2, 'Alvindra Renaldo', 'alvindrarenaldo@gmail.com', NULL, '$2y$10$dX9sRTdAcc7Auos1AIddC.k2JT3N1uKLK044.Edv2sSPmGKKUO/Py', 'Male', 'user', '2002-06-06 17:00:00', 3, NULL, '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(3, 'Dewi Bulan Irene', 'dewibulanirene@gmail.com', NULL, '$2y$10$i9aOxNdv8szVaak.Dt7GwO7ITfR8lCWqfmmQXYmJLKzEtzZgp0C9K', 'Male', 'user', '2004-06-06 17:00:00', 2, NULL, '2023-01-26 09:33:13', '2023-01-26 09:33:13'),
(4, 'Admin', 'admin@admin.com', NULL, '$2y$10$SwlT4mYi1FDFDcDD1y0QyuP6e63Yeu0AhwZI8B.GCA4a212sGTJsS', 'Male', 'admin', '2002-09-07 17:00:00', 5, NULL, '2023-01-26 09:33:13', '2023-01-26 09:33:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `cart_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`transaction_id`,`product_id`),
  ADD KEY `transaction_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
