-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 08:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.', '202005050648alcohol-architecture-bar-beer-260922.jpg', 1, 1, '2020-05-04 23:01:19', '2020-05-05 00:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `image`, `short_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, '2020-05-05', '202005050640crackers-cheese-and-fruits-2122278.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.', 1, NULL, '2020-05-05 00:40:20', '2020-05-05 00:40:20'),
(5, '2020-05-05', '202005050641white-and-brown-cooked-dish-on-white-ceramic-bowls-958545.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.', 1, NULL, '2020-05-05 00:41:08', '2020-05-05 00:41:08'),
(6, '2020-05-05', '202005050641clear-footed-drinking-glasses-989699.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.', 1, NULL, '2020-05-05 00:41:50', '2020-05-05 00:41:50'),
(7, '2020-05-05', '202005050642cheesecake-1126359.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.', 1, NULL, '2020-05-05 00:42:27', '2020-05-05 00:42:27'),
(8, '2020-05-05', '202005050642four-champagne-flutes-with-assorted-color-liquids-1028637.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.', 1, NULL, '2020-05-05 00:42:51', '2020-05-05 00:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `breakfasts`
--

CREATE TABLE `breakfasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfasts`
--

INSERT INTO `breakfasts` (`id`, `title`, `description`, `price`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Bangla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 250, '202005050618food-coffee-breakfast-103124.jpg', 1, 1, '2020-05-04 03:47:46', '2020-05-05 00:18:06'),
(4, 'English Breakfast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050619variety-of-cooked-dishes-374052.jpg', 1, NULL, '2020-05-05 00:19:04', '2020-05-05 00:19:04'),
(5, 'Chines Breakfast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050619egg-corn-kiwi-with-bowls-724302.jpg', 1, NULL, '2020-05-05 00:19:53', '2020-05-05 00:19:53'),
(6, 'Indian Breakfast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050621platter-of-foods-941869.jpg', 1, NULL, '2020-05-05 00:21:12', '2020-05-05 00:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '+8801517167619', 'spicyx@gmail.com', 'Dhanmondi, Dhaka-1209, Bangladesh', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 1, NULL, '2020-05-05 00:04:23', '2020-05-05 00:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `title`, `description`, `price`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Bangla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 300, '202005050628artistic-beef-cuisine-delicious-341048.jpg', 1, NULL, '2020-05-05 00:28:06', '2020-05-05 00:28:06'),
(6, 'Indain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 500, '202005050628anniversary-beautiful-birthday-birthday-cake-433527.jpg', 1, NULL, '2020-05-05 00:28:34', '2020-05-05 00:28:34'),
(7, 'Chines', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050629blueberries-bokeh-celebration-cold-461189.jpg', 1, NULL, '2020-05-05 00:29:07', '2020-05-05 00:29:07'),
(8, 'Thai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 550, '202005050629assorted-flavor-ice-creams-1352296.jpg', 1, NULL, '2020-05-05 00:29:42', '2020-05-05 00:29:42'),
(9, 'Indain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050630chocolate-coated-ice-creams-749102.jpg', 1, NULL, '2020-05-05 00:30:19', '2020-05-05 00:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `title`, `description`, `price`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Indain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050630clear-footed-drinking-glasses-989699.jpg', 1, NULL, '2020-05-05 00:30:55', '2020-05-05 00:30:55'),
(4, 'Chines', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050631clear-wine-glass-with-liquid-in-focus-photography-1170599.jpg', 1, NULL, '2020-05-05 00:31:14', '2020-05-05 00:31:14'),
(5, 'Bangla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050631four-champagne-flutes-with-assorted-color-liquids-1028637.jpg', 1, NULL, '2020-05-05 00:31:42', '2020-05-05 00:31:42'),
(6, 'English', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 1200, '202005050632four-clear-glass-drinking-cups-filled-with-orange-and-clear-1441122.jpg', 1, NULL, '2020-05-05 00:32:07', '2020-05-05 00:32:07');

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
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '202005050632blueberries-bokeh-celebration-cold-461189.jpg', 1, NULL, '2020-05-05 00:32:29', '2020-05-05 00:32:29'),
(4, '202005050632clear-footed-drinking-glasses-989699.jpg', 1, NULL, '2020-05-05 00:32:39', '2020-05-05 00:32:39'),
(5, '202005050632cooked-food-in-white-and-brown-ceramic-bowl-close-up-2741458.jpg', 1, NULL, '2020-05-05 00:32:51', '2020-05-05 00:32:51'),
(6, '202005050633cheesecake-1126359.jpg', 1, NULL, '2020-05-05 00:33:04', '2020-05-05 00:33:04'),
(7, '202005050633shallow-focus-photo-of-spoon-373941.jpg', 1, NULL, '2020-05-05 00:33:27', '2020-05-05 00:33:27'),
(8, '202005050633egg-corn-kiwi-with-bowls-724302.jpg', 1, NULL, '2020-05-05 00:33:43', '2020-05-05 00:33:43'),
(9, '202005050633purple-and-brown-food-on-white-surface-921361.jpg', 1, NULL, '2020-05-05 00:33:57', '2020-05-05 00:33:57'),
(10, '202005050634delicious-roasted-chicken-698308.jpg', 1, NULL, '2020-05-05 00:34:20', '2020-05-05 00:34:20'),
(11, '202005050634white-and-brown-cooked-dish-on-white-ceramic-bowls-958545.jpg', 1, NULL, '2020-05-05 00:34:44', '2020-05-05 00:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(12, '202005040750logo.jpg', 1, NULL, '2020-05-04 01:50:02', '2020-05-04 01:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `title`, `description`, `price`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'English Breakfast', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 2500, '202005050622cooked-food-in-white-and-brown-ceramic-bowl-close-up-2741458.jpg', 1, NULL, '2020-05-05 00:22:49', '2020-05-05 00:22:49'),
(4, 'Chines', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 1800, '202005050623cooked-food-on-brown-wooden-board-670705.jpg', 1, NULL, '2020-05-05 00:23:56', '2020-05-05 00:23:56'),
(5, 'Indain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 3000, '202005050624delicious-roasted-chicken-698308.jpg', 1, NULL, '2020-05-05 00:24:28', '2020-05-05 00:24:28'),
(6, 'Bangla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 1500, '202005050625platter-of-foods-941869.jpg', 1, NULL, '2020-05-05 00:25:13', '2020-05-05 00:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Shakil', 'sajedul.idb@gmail.com', 'hello', 'goood', '2020-05-05 11:31:15', '2020-05-05 11:31:15'),
(2, 'Shakil Ahamed', 'sajedul.idb@gmail.com', 'hello', 'good', '2020-05-05 11:32:13', '2020-05-05 11:32:13'),
(3, 'Shakil Ahamed', 'sishakil546@gmail.com', 'hello', 'Shakil . how are you.', '2020-05-05 11:48:04', '2020-05-05 11:48:04'),
(4, 'Shakil Ahamed', 'sishakil546@gmail.com', 'hello', 'Shakil . how are you.', '2020-05-05 11:48:47', '2020-05-05 11:48:47'),
(5, 'Shakil Ahamed', 'sishakil546@gmail.com', 'hello', 'Shakil . how are you.', '2020-05-05 11:50:50', '2020-05-05 11:50:50'),
(6, 'Shakil Ahamed', 'sishakil546@gmail.com', 'hello', 'Shakil . how are you.', '2020-05-05 11:55:42', '2020-05-05 11:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_03_105628_create_logos_table', 2),
(5, '2020_05_04_065213_create_sliders_table', 3),
(6, '2020_05_04_091820_create_breakfasts_table', 4),
(7, '2020_05_04_095312_create_meals_table', 5),
(8, '2020_05_04_101357_create_snacks_table', 6),
(9, '2020_05_04_102901_create_desserts_table', 7),
(10, '2020_05_04_104756_create_drinks_table', 8),
(11, '2020_05_04_153221_create_restaurants_table', 9),
(12, '2020_05_04_153454_create_foods_table', 9),
(13, '2020_05_04_170445_create_blogs_table', 10),
(14, '2020_05_05_044055_create_abouts_table', 11),
(15, '2020_05_05_050612_create_contacts_table', 12),
(16, '2020_05_05_170634_create_messages_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '202005050637table-in-vintage-restaurant-6267.jpg', 1, NULL, '2020-05-05 00:37:19', '2020-05-05 00:37:19'),
(4, '202005050637blur-breakfast-chef-cooking-262978.jpg', 1, NULL, '2020-05-05 00:37:33', '2020-05-05 00:37:33'),
(5, '202005050637vegetable-salad-on-white-ceramic-plate-3933207.jpg', 1, NULL, '2020-05-05 00:37:51', '2020-05-05 00:37:51'),
(6, '202005050638dinnerware-on-table-top-1395964.jpg', 1, NULL, '2020-05-05 00:38:04', '2020-05-05 00:38:04'),
(7, '202005050638clear-long-stemmed-wine-glass-on-brown-table-1484516.jpg', 1, NULL, '2020-05-05 00:38:15', '2020-05-05 00:38:15'),
(8, '202005050638pink-ceramic-cup-with-saucer-besides-white-napkin-2337845.jpg', 1, NULL, '2020-05-05 00:38:30', '2020-05-05 00:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `short_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '202005050614burrito-chicken-delicious-dinner-461198.jpg', 'TO THE SPICYX', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', 1, 1, '2020-05-05 00:14:45', '2020-05-05 01:17:16'),
(6, '202005050615cooked-food-in-white-and-brown-ceramic-bowl-close-up-2741458.jpg', 'Chines Hot King', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', 1, 1, '2020-05-05 00:15:40', '2020-05-05 01:18:49'),
(7, '202005050616food-plate-chocolate-dessert-132694.jpg', 'Dessert  Is Love', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', 1, 1, '2020-05-05 00:16:14', '2020-05-05 01:19:21'),
(8, '202005050616four-champagne-flutes-with-assorted-color-liquids-1028637.jpg', 'WoW JuSt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', 1, 1, '2020-05-05 00:16:41', '2020-05-05 01:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `title`, `description`, `price`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'English', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 800, '202005050625appetizer-bacon-baked-baking-263070.jpg', 1, NULL, '2020-05-05 00:25:57', '2020-05-05 00:25:57'),
(4, 'Chines', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 1000, '202005050626close-up-photo-of-baked-food-with-toppings-1893568.jpg', 1, NULL, '2020-05-05 00:26:26', '2020-05-05 00:26:26'),
(5, 'Indain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.', 1200, '202005050627burrito-chicken-delicious-dinner-461198.jpg', 1, NULL, '2020-05-05 00:27:24', '2020-05-05 00:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `gender`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$GPzpF3.ApR/0pvRLZEcYJOeMaQGNULR7BvNpp9dYQHHlo9TZSYPRG', '01517167619', 'Male', '202005040746si.jpg', 1, NULL, '2020-04-19 09:42:54', '2020-05-04 01:46:30'),
(7, 'User', 'Shakil Ahamed', 'shakil@gmail.com', NULL, '$2y$10$0qS.b//gPKib5NBy4XyDs.lP.Br7Qc1OW8bhD.542gOcNg.2BC1le', NULL, NULL, NULL, 1, NULL, '2020-04-20 19:56:15', '2020-04-23 03:06:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
