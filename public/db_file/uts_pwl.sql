-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 05:37 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pwl`
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
(5, '2021_10_26_141142_create_siswas_table', 1),
(6, '2021_10_26_143534_create_updates_table', 2);

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
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `nisn`, `no_hp`, `alamat`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Kasiyah Wulandari', '511868', '0348 6674 747', 'Jr. Peta No. 793, Lhokseumawe 44444, Jatim', 98.40, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(2, 'Muhammad Kusumo', '559', '0761 3596 278', 'Psr. Bakhita No. 150, Tomohon 36761, DIY', 85.80, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(3, 'Gatra Hutasoit', '6796', '(+62) 745 0401 1731', 'Psr. Baya Kali Bungur No. 837, Administrasi Jakarta Selatan 59657, Kalsel', 92.40, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(4, 'Ilyas Hadi Budiyanto', '5667159', '(+62) 22 0144 7211', 'Ds. Dewi Sartika No. 736, Banda Aceh 98067, Kalbar', 90.90, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(5, 'Rina Pratiwi', '1772', '(+62) 419 3337 228', 'Kpg. Aceh No. 181, Pangkal Pinang 87248, Sultra', 95.00, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(6, 'Gaman Wibisono', '53052836', '(+62) 21 8134 685', 'Jln. Barat No. 802, Metro 87157, Bengkulu', 92.90, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(7, 'Cecep Dongoran', '311', '0530 0182 466', 'Jr. Ronggowarsito No. 173, Banjar 92709, Sultra', 90.70, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(8, 'Tiara Wastuti', '637465354', '(+62) 724 4671 423', 'Ds. Baing No. 396, Administrasi Jakarta Selatan 34197, Jambi', 98.60, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(9, 'Baktianto Lasmono Wacana', '155929', '(+62) 785 3324 6142', 'Gg. Baladewa No. 216, Salatiga 55898, Kepri', 86.90, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(10, 'Agus Maryanto Thamrin', '502', '(+62) 350 8379 5404', 'Ds. Dipatiukur No. 981, Pontianak 56010, Gorontalo', 97.70, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(11, 'Unjani Pia Suartini', '9', '(+62) 441 7932 7472', 'Ki. Nangka No. 599, Salatiga 73195, Sumut', 98.60, '2021-10-26 07:53:26', '2021-10-26 07:53:26'),
(12, 'Puji Wulandari', '972263', '(+62) 295 4523 298', 'Jln. Peta No. 275, Ambon 68186, Kalteng', 88.60, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(13, 'Aslijan Prakasa', '45', '(+62) 265 3315 7410', 'Ki. Gambang No. 781, Padangsidempuan 52737, NTT', 93.10, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(14, 'Kamaria Winarsih', '1302', '(+62) 400 7914 1102', 'Jln. Setia Budi No. 804, Mataram 65410, Sumsel', 89.00, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(15, 'Nugraha Thamrin', '941773', '(+62) 24 4520 0610', 'Jr. Cihampelas No. 871, Bogor 81410, Bali', 92.50, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(16, 'Irfan Radit Salahudin S.IP', '1', '0544 2968 950', 'Dk. Bagas Pati No. 975, Tegal 39477, Riau', 93.30, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(17, 'Suci Uchita Hartati M.TI.', '892978438', '0368 2769 4652', 'Gg. Flora No. 588, Sungai Penuh 69845, Malut', 92.90, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(18, 'Gantar Cemani Rajata S.Pd', '442', '(+62) 387 4889 6411', 'Jr. Karel S. Tubun No. 623, Serang 51199, Sumut', 87.00, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(19, 'Cagak Eman Prabowo', '4974', '(+62) 671 9628 776', 'Psr. Warga No. 606, Cirebon 70412, DIY', 88.00, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(20, 'Adikara Hutagalung', '163436483', '0277 4572 1590', 'Ds. Ters. Jakarta No. 335, Makassar 54939, Sumsel', 98.40, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(21, 'Silvia Shania Hariyah', '559127034', '0433 7985 6742', 'Jln. Bambu No. 822, Mojokerto 59390, NTB', 98.10, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(22, 'Taswir Utama Waluyo', '652', '(+62) 421 8993 947', 'Jln. Sutarjo No. 845, Gunungsitoli 22577, Jambi', 90.10, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(23, 'Galih Sitorus M.TI.', '701', '(+62) 257 6163 7233', 'Ki. Suniaraja No. 50, Balikpapan 13304, Kalteng', 91.10, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(24, 'Jarwi Cengkir Budiyanto', '85', '0421 9802 434', 'Psr. Jayawijaya No. 344, Sawahlunto 13289, Babel', 90.20, '2021-10-26 07:53:27', '2021-10-26 07:53:27'),
(25, 'Eka Mulyani', '50243520', '(+62) 21 0857 9322', 'Ki. Bayam No. 538, Parepare 41119, Papua', 97.30, '2021-10-26 07:53:27', '2021-10-26 07:53:27');

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
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
