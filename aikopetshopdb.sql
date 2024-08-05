-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 07:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aikopetshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datagrooming`
--

CREATE TABLE `datagrooming` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_owner` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `jenis_perawatan` varchar(255) NOT NULL,
  `ukuran_hewan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datagrooming`
--

INSERT INTO `datagrooming` (`id`, `nama_owner`, `nomor_hp`, `jenis_perawatan`, `ukuran_hewan`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'John Thor', '6281347087213', 'Basic Grooming', 'Small', '160.000', '2022-12-08 07:03:53', '2022-12-08 07:16:00'),
(3, 'John Doe', '6289976141245', 'Basic Grooming', 'Small', '160.000', '2022-12-08 07:04:22', '2022-12-08 07:15:48'),
(4, 'Anastasia Anasui', '6281250159511', 'Treatment Jamur', 'Medium', '140.000', '2022-12-08 07:10:59', '2022-12-08 07:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `dataproduk`
--

CREATE TABLE `dataproduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dataproduk`
--

INSERT INTO `dataproduk` (`id`, `nama_produk`, `link`, `photo`, `harga`, `created_at`, `updated_at`) VALUES
(13, 'Makanan Kucing 1st Choice', 'https://www.tokopedia.com/aiko-pet/makanan-kucing-1st-choice-kitten-2-72kg?extParam=whid%3D10125614', 'photos/q23VwpHF1lrRVdP4aGpI1tOm7K6KIF5vYhQ4ps86.jpg', 430000, '2022-12-08 06:57:12', '2022-12-08 06:57:12'),
(14, 'Obat Kutu Anjing Vet', 'https://www.tokopedia.com/aiko-pet/obat-kutu-anjing-vet-s-best-flea-tick-for-small-dogs?extParam=whid%3D10125614', 'photos/UJiP1BN4YhDWlcYR29tGs2t9j3HgCJfx5DaJ8Ale.jpg', 370000, '2022-12-08 06:57:37', '2022-12-08 06:57:37'),
(15, 'Kandang Hamster Besar', 'https://www.tokopedia.com/aiko-pet/kandang-hamster-besar-dayang-pedometer-gym-m-03-ping?extParam=whid%3D10125614', 'photos/KcQa7l6pGG37wlinPF04e5zqD3CTpiLVEuJ7M5eG.jpg', 485000, '2022-12-08 06:58:13', '2022-12-08 06:58:13'),
(16, 'Tempat Main Kucing Tree Besar', 'https://www.tokopedia.com/aiko-pet/tempat-main-kucing-cat-tree-besar-ps12?extParam=whid%3D10125614', 'photos/Cnu0crUhvURYcJtEa1rFdYdtF1sNLLYMR2x1btky.jpg', 4200000, '2022-12-08 06:58:37', '2022-12-08 06:58:37'),
(17, 'Cici Makanan Kucing', 'https://www.tokopedia.com/aiko-pet/cici-makanan-kucing-pilchards?extParam=whid%3D10125614', 'photos/kRknLytMCX3kq5ABFSb4B7sZUoQVSAwAKeuCnQzT.jpg', 19000, '2022-12-08 07:00:49', '2022-12-08 07:00:49'),
(18, 'Pasir Kucing Wangi Cat Litter Kit Cat Classic', 'https://www.tokopedia.com/aiko-pet/pasir-kucing-wangi-cat-litter-kit-cat-classic-clump-10litters-cherry-blossom?extParam=whid%3D10125614', 'photos/IXaQoqvNUYedBBSjDJz32L0jxMniKY5IWW7MrHRd.jpg', 80000, '2022-12-08 07:01:19', '2022-12-08 07:01:19'),
(19, 'Shampoo Kucing Perfect Coat', 'https://www.tokopedia.com/aiko-pet/shampoo-kucing-perfect-coat-tearless-kitten-shampoo?extParam=whid%3D10125614', 'photos/0CxyjNbuYZsg2f9cGB5idLYXLZZPXfB8E476rkjE.jpg', 15000, '2022-12-08 07:01:55', '2022-12-08 07:01:55'),
(20, 'Tali Harness Tuntun Anjing', 'https://www.tokopedia.com/aiko-pet/tali-harness-tali-tuntun-anjing-zooland-tebal-bulat-size-m-120cm?extParam=whid%3D10125614', 'photos/dISjGbriFkdtgcmkpmVQToS5ZTF5siNqTyzS3ejK.jpg', 275000, '2022-12-08 07:02:57', '2022-12-08 07:02:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_27_064844_create_datagrooming_table', 1),
(5, '2022_11_27_065151_create_databarangjual_table', 1),
(6, '2022_12_07_055331_create_hargagrooming_table', 1),
(7, '2022_12_08_040551_create_dataproduk_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'adminaiko111', '$2y$10$kBS24xWPcvv7E7IsRnicyOwI3JRCvZQZq8KHxY8/yAopZ2AxtWSLa', '2022-12-06 23:22:09', '2022-12-06 23:22:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datagrooming`
--
ALTER TABLE `datagrooming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataproduk`
--
ALTER TABLE `dataproduk`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datagrooming`
--
ALTER TABLE `datagrooming`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dataproduk`
--
ALTER TABLE `dataproduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
