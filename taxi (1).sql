-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 01:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+32',
  `phoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimation` int(20) NOT NULL,
  `suitecaseNum` int(11) NOT NULL,
  `personsNum` int(11) NOT NULL,
  `choiceTaxi` enum('standard','VIP') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'standard',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` enum('cash','visa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash',
  `additionalInfo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fullName`, `email`, `phoneCode`, `phoneNumber`, `from`, `to`, `estimation`, `suitecaseNum`, `personsNum`, `choiceTaxi`, `time`, `payment`, `additionalInfo`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-08 17:48:14', '2021-12-08 17:48:14'),
(2, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-08 18:00:44', '2021-12-08 18:00:44'),
(3, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 06:58:18', '2021-12-11 06:58:18'),
(4, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 06:59:10', '2021-12-11 06:59:10'),
(5, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 06:59:13', '2021-12-11 06:59:13'),
(6, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 06:59:22', '2021-12-11 06:59:22'),
(7, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 06:59:48', '2021-12-11 06:59:48'),
(8, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '1234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:00:04', '2021-12-11 07:00:04'),
(9, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:00:57', '2021-12-11 07:00:57'),
(10, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:01:23', '2021-12-11 07:01:23'),
(11, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:01:49', '2021-12-11 07:01:49'),
(12, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:02:12', '2021-12-11 07:02:12'),
(13, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:07:37', '2021-12-11 07:07:37'),
(14, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:08:45', '2021-12-11 07:08:45'),
(15, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:11:29', '2021-12-11 07:11:29'),
(16, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:12:06', '2021-12-11 07:12:06'),
(17, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:12:37', '2021-12-11 07:12:37'),
(18, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:13:13', '2021-12-11 07:13:13'),
(19, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:13:34', '2021-12-11 07:13:34'),
(20, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 0, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-11 07:14:46', '2021-12-11 07:14:46'),
(21, 'ahmed', 'engahmedhamedmoham@gmail.com', '+32', '0234567899', 'autre', NULL, 'autre', NULL, 50, 1, 1, 'standard', '@Test1234', 'visa', NULL, '2021-12-18 08:43:11', '2021-12-18 08:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `city_name`) VALUES
(1, 'Bruxelles aéroport'),
(2, 'Charleroi aéroport    '),
(5, 'Ostende Aéroport'),
(6, 'Aéroport de Liège'),
(7, 'Aéroport d\'Anvers'),
(8, 'Aéroport d\'Amsterdam-Schiphol'),
(9, 'Aéroport de Paris-Charles-de-Gaulle'),
(10, 'Aéroport de Lille'),
(11, 'Aéroport Paris-Orly'),
(12, 'Aéroport Paris Beauvais');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_12_08_181541_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_table`
--

CREATE TABLE `pricing_table` (
  `id` int(11) NOT NULL,
  `pick_from` varchar(150) NOT NULL,
  `pick_to` varchar(150) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_table`
--

INSERT INTO `pricing_table` (`id`, `pick_from`, `pick_to`, `price`) VALUES
(1, 'Bruxelles ville', 'Bruxelles aéroport', 37),
(2, 'Bruxelles ville', 'Charleroi aéroport', 74),
(3, 'Bruxelles ville', 'Ostende Aéroport', 119),
(4, 'Bruxelles ville', 'Aéroport de Liège', 109),
(5, 'Bruxelles ville', 'Aéroport d\'Anvers', 69),
(6, 'Bruxelles ville', 'Aéroport d\'Amsterdam-Schiphol', 249),
(7, 'Bruxelles ville', 'Aéroport de Paris-Charles-de-Gaulle', 489),
(8, 'Bruxelles ville', 'Aéroport de Lille', 129),
(9, 'Bruxelles ville', 'Aéroport Paris-Orly', 489),
(10, 'Bruxelles ville', 'Aéroport Paris Beauvais', 349),
(11, 'Bruxelles aéroport', 'Bruxelles ville', 37),
(12, 'Bruxelles aéroport', 'Charleroi aéroport', 74),
(13, 'Bruxelles aéroport', 'Ostende Aéroport', 119),
(14, 'Bruxelles aéroport', 'Aéroport de Liège', 109),
(15, 'Bruxelles aéroport', 'Aéroport d\'Anvers', 69),
(16, 'Bruxelles aéroport', 'Aéroport d\'Amsterdam-Schiphol', 249),
(17, 'Bruxelles aéroport', 'Aéroport de Paris-Charles-de-Gaulle', 489),
(18, 'Bruxelles aéroport', 'Aéroport de Lille', 129),
(19, 'Bruxelles aéroport', 'Aéroport Paris-Orly', 489),
(20, 'Bruxelles aéroport', 'Aéroport Paris Beauvais', 349),
(21, 'Charleroi aéroport', 'Bruxelles ville', 74),
(22, 'Charleroi aéroport', 'Bruxelles aéroport', 74),
(23, 'Charleroi aéroport', 'Ostende Aéroport', 198),
(24, 'Charleroi aéroport', 'Aéroport de Liège', 125),
(25, 'Charleroi aéroport', 'Aéroport d\'Anvers', 132),
(26, 'Charleroi aéroport', 'Aéroport d\'Amsterdam-Schiphol', 329),
(27, 'Charleroi aéroport', 'Aéroport de Paris-Charles-de-Gaulle', 321),
(28, 'Charleroi aéroport', 'Aéroport de Lille', 109),
(29, 'Charleroi aéroport', 'Aéroport Paris-Orly', 362),
(30, 'Charleroi aéroport', 'Aéroport Paris Beauvais', 314),
(31, 'Ostende Aéroport', 'Bruxelles ville', 139),
(32, 'Ostende Aéroport', 'Bruxelles aéroport', 139),
(33, 'Ostende Aéroport', 'Charleroi aéroport', 225),
(34, 'Ostende Aéroport', 'Aéroport de Liège', 349),
(35, 'Ostende Aéroport', 'Aéroport d\'Anvers', 232),
(36, 'Ostende Aéroport', 'Aéroport d\'Amsterdam-Schiphol', 349),
(37, 'Ostende Aéroport', 'Aéroport de Paris-Charles-de-Gaulle', 549),
(38, 'Ostende Aéroport', 'Aéroport de Lille', 169),
(39, 'Ostende Aéroport', 'Aéroport Paris-Orly', 590),
(40, 'Ostende Aéroport', 'Aéroport Paris Beauvais', 590),
(41, 'Aéroport de Liège', 'Bruxelles ville', 115),
(42, 'Aéroport de Liège', 'Bruxelles aéroport', 115),
(43, 'Aéroport de Liège', 'Charleroi aéroport', 125),
(44, 'Aéroport de Liège', 'Ostende Aéroport', 349),
(45, 'Aéroport de Liège', 'Aéroport d\'Anvers', 179),
(46, 'Aéroport de Liège', 'Aéroport d\'Amsterdam-Schiphol', 449),
(47, 'Aéroport de Liège', 'Aéroport de Paris-Charles-de-Gaulle', 449),
(48, 'Aéroport de Liège', 'Aéroport de Lille', 179),
(49, 'Aéroport de Liège', 'Aéroport Paris-Orly', 499),
(50, 'Aéroport de Liège', 'Aéroport Paris Beauvais', 499),
(51, 'Aéroport d\'Anvers', 'Bruxelles ville', 74),
(52, 'Aéroport d\'Anvers', 'Bruxelles aéroport', 69),
(53, 'Aéroport d\'Anvers', 'Charleroi aéroport', 149),
(54, 'Aéroport d\'Anvers', 'Ostende Aéroport', 249),
(55, 'Aéroport d\'Anvers', 'Aéroport de Liège', 159),
(56, 'Aéroport d\'Anvers', 'Aéroport d\'Amsterdam-Schiphol', 299),
(57, 'Aéroport d\'Anvers', 'Aéroport de Paris-Charles-de-Gaulle', 499),
(58, 'Aéroport d\'Anvers', 'Aéroport de Lille', 169),
(59, 'Aéroport d\'Anvers', 'Aéroport Paris-Orly', 499),
(60, 'Aéroport d\'Anvers', 'Aéroport Paris Beauvais', 499),
(61, 'Aéroport d\'Amsterdam-Schiphol', 'Bruxelles ville', 299),
(62, 'Aéroport d\'Amsterdam-Schiphol', 'Bruxelles aéroport', 299),
(63, 'Aéroport d\'Amsterdam-Schiphol', 'Charleroi aéroport', 369),
(64, 'Aéroport d\'Amsterdam-Schiphol', 'Ostende Aéroport', 399),
(65, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport de Liège', 349),
(66, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport d\'Anvers', 249),
(67, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport de Paris-Charles-de-Gaulle', 659),
(68, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport de Lille', 399),
(69, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport Paris-Orly', 659),
(70, 'Aéroport d\'Amsterdam-Schiphol', 'Aéroport Paris Beauvais', 659),
(71, 'Aéroport de Paris-Charles-de-Gaulle', 'Bruxelles ville', 599),
(72, 'Aéroport de Paris-Charles-de-Gaulle', 'Bruxelles aéroport', 599),
(73, 'Aéroport de Paris-Charles-de-Gaulle', 'Charleroi aéroport', 525),
(74, 'Aéroport de Paris-Charles-de-Gaulle', 'Ostende Aéroport', 639),
(75, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport de Liège', 639),
(76, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport d\'Anvers', 619),
(77, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport d\'Amsterdam-Schiphol', 659),
(78, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport de Lille', 499),
(79, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport Paris-Orly', 149),
(80, 'Aéroport de Paris-Charles-de-Gaulle', 'Aéroport Paris Beauvais', 149),
(81, 'Aéroport de Lille', 'Bruxelles ville', 149),
(82, 'Aéroport de Lille', 'Bruxelles aéroport', 149),
(83, 'Aéroport de Lille', 'Charleroi aéroport', 99),
(84, 'Aéroport de Lille', 'Ostende Aéroport', 249),
(85, 'Aéroport de Lille', 'Aéroport de Liège', 289),
(86, 'Aéroport de Lille', 'Aéroport d\'Anvers', 189),
(87, 'Aéroport de Lille', 'Aéroport d\'Amsterdam-Schiphol', 399),
(88, 'Aéroport de Lille', 'Aéroport de Paris-Charles-de-Gaulle', 149),
(89, 'Aéroport de Lille', 'Aéroport Paris-Orly', 149),
(90, 'Aéroport de Lille', 'Aéroport Paris Beauvais', 149),
(91, 'Aéroport Paris-Orly', 'Bruxelles ville', 599),
(92, 'Aéroport Paris-Orly', 'Bruxelles aéroport', 599),
(93, 'Aéroport Paris-Orly', 'Charleroi aéroport', 525),
(94, 'Aéroport Paris-Orly', 'Ostende Aéroport', 639),
(95, 'Aéroport Paris-Orly', 'Aéroport de Liège', 639),
(96, 'Aéroport Paris-Orly', 'Aéroport d\'Anvers', 619),
(97, 'Aéroport Paris-Orly', 'Aéroport d\'Amsterdam-Schiphol', 659),
(98, 'Aéroport Paris-Orly', 'Aéroport de Paris-Charles-de-Gaulle', 659),
(99, 'Aéroport Paris-Orly', 'Aéroport de Lille', 399),
(100, 'Aéroport Paris-Orly', 'Aéroport Paris Beauvais', 149),
(101, 'Aéroport Paris Beauvais', 'Bruxelles ville', 599),
(102, 'Aéroport Paris Beauvais', 'Bruxelles aéroport', 599),
(103, 'Aéroport Paris Beauvais', 'Charleroi aéroport', 525),
(104, 'Aéroport Paris Beauvais', 'Ostende Aéroport', 639),
(105, 'Aéroport Paris Beauvais', 'Aéroport de Liège', 639),
(106, 'Aéroport Paris Beauvais', 'Aéroport d\'Anvers', 619),
(107, 'Aéroport Paris Beauvais', 'Aéroport d\'Amsterdam-Schiphol', 659),
(108, 'Aéroport Paris Beauvais', 'Aéroport de Paris-Charles-de-Gaulle', 659),
(109, 'Aéroport Paris Beauvais', 'Aéroport de Lille', 399),
(110, 'Aéroport Paris Beauvais', 'Aéroport Paris-Orly', 149);

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_table`
--
ALTER TABLE `pricing_table`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pricing_table`
--
ALTER TABLE `pricing_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
