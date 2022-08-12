-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 11:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checksheet_mesin`
--

-- --------------------------------------------------------

--
-- Table structure for table `compressors`
--

CREATE TABLE `compressors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `LCDDisplay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmergencyButton` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LoadingPressure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemperatureMesin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TemperatureOil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PressureOil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BodyCompressor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TempLPElement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TempHPElement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compressors`
--

INSERT INTO `compressors` (`id`, `LCDDisplay`, `remarks1`, `EmergencyButton`, `remarks2`, `LoadingPressure`, `remarks3`, `TemperatureMesin`, `remarks4`, `TemperatureOil`, `remarks5`, `PressureOil`, `remarks6`, `BodyCompressor`, `remarks7`, `TempLPElement`, `remarks8`, `TempHPElement`, `remarks9`, `checker`, `created_at`, `updated_at`) VALUES
(10, 'Tidak Nyala', NULL, 'Tidak ditekan', NULL, '0.6 ~ 0.8 kg/cm2', NULL, '< 65°C', NULL, '< 65°C', NULL, '> 1.6 bar', NULL, 'Bebas Debu', NULL, '< 200°C', NULL, '< 200°C', NULL, 'Bagus Besar Bagaskara', '2022-08-10 08:54:53', '2022-08-10 09:03:27'),
(11, 'Mati', 'mati lampu', 'Tidak ditekan', NULL, '0.6 ~ 0.8 kg/cm2', NULL, '< 65°C', 'aaa', '< 65°C', NULL, '> 1.6 bar', NULL, 'Bebas Debu', NULL, '< 200°C', NULL, '< 200°C', NULL, 'Bagus Besar Bagaskara', '2022-08-11 02:24:31', '2022-08-11 03:40:06'),
(12, 'Nyala', NULL, 'Tidak ditekan', NULL, '0.6 ~ 0.8 kg/cm2', NULL, '< 65°C', NULL, '< 65°C', NULL, '> 1.6 bar', NULL, 'Bebas Debu', NULL, '< 200°C', NULL, '< 200°C', NULL, 'Bagus Besar Bagaskara', '2022-08-12 01:59:40', '2022-08-12 01:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `dryers`
--

CREATE TABLE `dryers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Humidity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BodyDryer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IndikatorFilterIn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IndikatorFilterOut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dryers`
--

INSERT INTO `dryers` (`id`, `Humidity`, `remarks1`, `BodyDryer`, `remarks2`, `IndikatorFilterIn`, `remarks3`, `IndikatorFilterOut`, `remarks4`, `checker`, `created_at`, `updated_at`) VALUES
(2, 'Min -20%', NULL, 'Bebas Debu', NULL, 'Range Hijau', NULL, 'Range Hijau', NULL, 'Bagus Besar Bagaskara', '2022-08-10 06:27:19', '2022-08-10 06:27:19'),
(3, 'Min -40%', 'mines', 'Berdebu', 'Belom dilap', 'Range Hijau', 'sasas', 'Range Hijau', NULL, 'Bagus Besar Bagaskara', '2022-08-11 03:30:40', '2022-08-11 03:40:17');

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
(5, '2022_08_08_014142_create_compressors_table', 1),
(6, '2022_08_08_112220_create_dryers_table', 1),
(7, '2022_08_08_113230_create_nitrogens_table', 1),
(8, '2022_08_08_113748_create_tangkis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nitrogens`
--

CREATE TABLE `nitrogens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `LCDDisplay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Purity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nitrogens`
--

INSERT INTO `nitrogens` (`id`, `LCDDisplay`, `remarks1`, `Purity`, `remarks2`, `checker`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Nyala', 'Lupa dinyalain', '100km/sce', NULL, 'Bagus Besar Bagaskara', '2022-08-11 03:39:23', '2022-08-11 03:41:18');

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
-- Table structure for table `tangkis`
--

CREATE TABLE `tangkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `KranPembuanganAirTangki1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TekananAnginTangki1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TekananAnginTangki2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TekananAnginTangki3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tangkis`
--

INSERT INTO `tangkis` (`id`, `KranPembuanganAirTangki1`, `remarks1`, `TekananAnginTangki1`, `remarks2`, `TekananAnginTangki2`, `remarks3`, `TekananAnginTangki3`, `remarks4`, `checker`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Ada Air', NULL, '0.6 ~ 0.9 kg/cm2', NULL, '0.6 ~ 0.8 kg/cm2', NULL, '0.5 ~ 0.8 kg/cm2', NULL, 'basazard', '2022-08-11 04:25:49', '2022-08-11 04:30:52');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bagus Besar Bagaskara', 'bagas123ft@gmail.com', NULL, '$2y$10$5fk6JFxP43PHu9hzC6pIyuQIff.OPZOXYDlRipVYIYM3DBPwdSLaa', NULL, '2022-08-10 03:06:14', '2022-08-10 03:06:14'),
(3, 'basazard', 'basazard@gmail.com', NULL, '$2y$10$lOxpd8oQ5NMsOiJO1JbFzerZ5fa5mHyXtVDOJSOfEMBr5R5z.EJCi', NULL, '2022-08-11 04:30:39', '2022-08-11 04:30:39'),
(4, 'Admin', 'admin@astra-visteon.com', NULL, '$2y$10$4/L3PvHivfqlG465sZAXs.7DpfzYH11Prsfvgw5oCf5y/vrQEyIx.', NULL, '2022-08-12 09:07:19', '2022-08-12 09:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compressors`
--
ALTER TABLE `compressors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dryers`
--
ALTER TABLE `dryers`
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
-- Indexes for table `nitrogens`
--
ALTER TABLE `nitrogens`
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
-- Indexes for table `tangkis`
--
ALTER TABLE `tangkis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `compressors`
--
ALTER TABLE `compressors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dryers`
--
ALTER TABLE `dryers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nitrogens`
--
ALTER TABLE `nitrogens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangkis`
--
ALTER TABLE `tangkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
