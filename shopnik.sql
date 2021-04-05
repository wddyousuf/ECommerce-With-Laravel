-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 04:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext COLLATE utf8_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Lorem Under the V-Model, the corresponding testing phase of the development phase is planned in parallel. So, there are Verification phases on one side of the ‘V’ and Validation phases on the other side. The Coding Phase joins the two sides of the V-Model.Under the V-Model, the corresponding testing phase of the development phase is planned in parallel. So, there are Verification phases on one side of the ‘V’ and Validation phases on the other side. The Coding Phase joins the two sides of the V-Model.Under the V-Model, the corresponding testing phase of the development phase is planned in parallel. So, there are Verification phases on one side of the ‘V’ and Validation phases on the other side. The Coding Phase joins the two sides of the V-Model.Under the V-Model, the corresponding testing phase of the development phase is planned in parallel. So, there are Verification phases on one side of the ‘V’ and Validation phases on the other side. The Coding Phase joins the two sides of the V-Model.', 1, NULL, '2021-03-25 11:12:07', '2021-03-25 11:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'BATA', 1, NULL, '2021-03-25 13:24:34', '2021-03-25 13:24:34'),
(2, 'LOTTO', 1, NULL, '2021-03-25 13:24:43', '2021-03-25 13:24:43'),
(3, 'ARTISAN', 1, NULL, '2021-03-25 13:24:51', '2021-03-25 13:24:51'),
(4, 'HP', 1, 1, '2021-03-25 13:24:56', '2021-03-25 13:25:22'),
(5, 'ASUS', 1, NULL, '2021-03-25 13:25:02', '2021-03-25 13:25:02'),
(6, 'AMERICAN TOURISTER', 1, NULL, '2021-03-27 05:36:32', '2021-03-27 05:36:32'),
(7, 'SAMSONITE', 1, NULL, '2021-03-27 05:36:46', '2021-03-27 05:36:46'),
(8, 'DELSEY', 1, NULL, '2021-03-27 05:37:22', '2021-03-27 05:37:22'),
(9, 'EAGLE CREEK', 1, NULL, '2021-03-27 05:37:35', '2021-03-27 05:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'CLOTHING', 1, 1, '2021-03-25 12:10:32', '2021-03-25 12:10:48'),
(2, 'ELECTRONICS', 1, 1, '2021-03-25 12:11:00', '2021-03-25 12:13:36'),
(3, 'WATCHES', 1, NULL, '2021-03-25 12:13:53', '2021-03-25 12:13:53'),
(4, 'HEALTH & BEAUTY', 1, NULL, '2021-03-25 12:14:05', '2021-03-25 12:14:05'),
(8, 'SHOES', 1, 1, '2021-03-25 13:01:57', '2021-03-25 13:05:26'),
(10, 'KIDS & GIRLS', 1, NULL, '2021-03-25 13:11:31', '2021-03-25 13:11:31'),
(11, 'JEWELLERY', 1, NULL, '2021-03-25 13:11:58', '2021-03-25 13:11:58'),
(12, 'BAGS & LUGGAGES', 1, NULL, '2021-03-27 05:35:19', '2021-03-27 05:35:19'),
(13, 'CRAFTS', 1, NULL, '2021-03-27 05:36:00', '2021-03-27 05:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Red', 1, 1, '2021-03-25 14:04:16', '2021-03-25 14:13:07'),
(2, 'White', 1, NULL, '2021-03-25 14:04:27', '2021-03-25 14:04:27'),
(3, 'Grey', 1, NULL, '2021-03-27 05:33:09', '2021-03-27 05:33:09'),
(4, 'Green', 1, NULL, '2021-03-27 05:33:16', '2021-03-27 05:33:16'),
(5, 'Yellow', 1, NULL, '2021-03-27 05:33:24', '2021-03-27 05:33:24'),
(6, 'Purple', 1, NULL, '2021-03-27 05:33:33', '2021-03-27 05:33:33'),
(7, 'Black', 1, NULL, '2021-03-27 05:33:42', '2021-03-27 05:33:42'),
(8, 'Navy Blue', 1, NULL, '2021-03-27 05:34:03', '2021-03-27 05:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `communicates`
--

CREATE TABLE `communicates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `communicates`
--

INSERT INTO `communicates` (`id`, `name`, `email`, `number`, `address`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Md. Abu Bakker Siddik shamsul', 'samsulpust6264@gmail.com', '01766053206', 'BSMR Hall-308', 'গাবর বোয়ালী মোড়ের বাজার\r\nজেলা- ময়মনসিংহ।, স্থান- গাবরবোয়ালী, ডাকঘর- চরজিথর (২২৮০), উপেজেলা- ঈশ্বরগঞ্জ', '2021-03-24 16:27:23', '2021-03-24 16:27:23'),
(3, 'Yousuf', 'saikatyousuf@gmail.com', '01521309208', 'Mymensingh', 'Address: Zonaid Palli,Homeopathy Mor,Shalgaria,Pabna-6600, Mobile: 01857938869,01521309208, Email: Saikatyousuf@gmail.com', '2021-03-24 16:43:33', '2021-03-24 16:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linked_in_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `number`, `email`, `fb_link`, `youtube_link`, `twitter_link`, `linked_in_link`, `gplus_link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Zonaid Palli,Homeopathy Mor,Shalgaria,Pabna-6600', '01521309208', 'Saikatyousuf@gmail.com', 'https://www.facebook.com/ysaikat', 'https://www.youtube.com/channel/UCammTFwzSL5f1q1WknaSISQ', 'www.twitter.com/ysaikat', 'https://www.linkedin.com/in/md-yousuf-hossain-7863b2184/', 'www.googleplus.com/ysaikat', 1, 1, '2021-03-24 05:51:54', '2021-03-24 06:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, '2021MarSat1216logo.png', 1, NULL, '2021-03-27 06:16:28', '2021-03-27 06:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_23_161445_create_logos_table', 2),
(5, '2021_03_23_203423_create_sliders_table', 3),
(11, '2021_03_24_111755_create_contacts_table', 8),
(12, '2021_03_24_125016_create_abouts_table', 9),
(13, '2021_03_24_212853_create_communicates_table', 10),
(14, '2021_03_25_172404_create_categories_table', 11),
(15, '2021_03_25_191618_create_brands_table', 12),
(16, '2021_03_25_195336_create_colors_table', 13),
(17, '2021_03_25_202221_create_sizes_table', 14),
(24, '2021_03_25_204418_create_products_table', 15),
(25, '2021_03_25_205617_create_product_sizes_table', 15),
(26, '2021_03_25_205631_create_product_colors_table', 15),
(27, '2021_03_25_205650_create_product_images_table', 15),
(28, '2021_03_25_205737_create_product_tags_table', 15),
(29, '2021_03_25_205814_create_product_reviews_table', 15),
(31, '2021_03_27_181044_create_sub_categories_table', 17),
(32, '2021_03_28_112525_create_sub_sub_categories_table', 18),
(33, '2021_04_03_165957_create_shippings_table', 19),
(34, '2021_04_03_170044_create_payments_table', 19),
(35, '2021_04_03_170058_create_orders_table', 19),
(36, '2021_04_03_170114_create_order_details_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `user_id`, `shipping_id`, `payment_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 6, 1, 1299, 0, '2021-04-05 07:10:38', '2021-04-05 07:10:38'),
(5, 2, 9, 7, 5, 4497, 0, '2021-04-05 07:45:07', '2021-04-05 07:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_no`, `product_id`, `color_id`, `size_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 1, 6, 1, '2021-04-05 07:10:38', '2021-04-05 07:10:38'),
(2, 5, 10, 2, 8, 2, '2021-04-05 07:45:07', '2021-04-05 07:45:07'),
(3, 5, 8, 2, 7, 1, '2021-04-05 07:45:07', '2021-04-05 07:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `transaction_no`, `created_at`, `updated_at`) VALUES
(1, 'cod', NULL, '2021-04-05 07:10:38', '2021-04-05 07:10:38'),
(5, 'cod', NULL, '2021-04-05 07:45:07', '2021-04-05 07:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(5) DEFAULT NULL,
  `subsubcat_id` int(5) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `discount_price` double DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `long_description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `subsubcat_id`, `brand_id`, `name`, `slug`, `price`, `discount_price`, `description`, `long_description`, `image`, `stock`, `created_at`, `updated_at`) VALUES
(4, 1, 5, 1, 2, 'Floral Print Buttoned', 'floral-print-buttoned', 1200, 800, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021MarSun2009p8.jpg', 15, '2021-03-25 18:18:04', '2021-03-28 14:09:23'),
(7, 1, 5, 1, 3, 'Floral Print Buttoned SS', 'floral-print-buttoned-ss', 1499, 1299, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2021MarSun2009p12.jpg', 15, '2021-03-27 05:28:50', '2021-03-28 14:09:38'),
(8, 1, 3, 1, 3, 'Floral Print Buttoned LL', 'floral-print-buttoned-ll', 1499, 1299, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021MarSun2010p10.jpg', 15, '2021-03-27 05:29:48', '2021-03-28 14:10:10'),
(9, 2, 2, 14, 5, 'Floral Print Buttoned SSS', 'floral-print-buttoned-sss', 2099, 1999, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021MarSun2011p26.jpg', 15, '2021-03-27 05:30:44', '2021-03-28 14:11:20'),
(10, 8, 5, 2, 2, 'Floral Print Buttoned SSSS', 'floral-print-buttoned-ssss', 1599, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021MarTue1425p22.jpg', 15, '2021-03-27 05:31:48', '2021-03-30 08:25:33'),
(11, 11, 2, 9, 2, 'Floral Print Buttoned LLL', 'floral-print-buttoned-lll', 1999, 1299, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021MarSun2012p19.jpg', 12, '2021-03-27 05:32:36', '2021-03-28 14:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(44, 4, 1, '2021-03-28 14:09:23', '2021-03-28 14:09:23'),
(45, 4, 2, '2021-03-28 14:09:23', '2021-03-28 14:09:23'),
(46, 7, 1, '2021-03-28 14:09:38', '2021-03-28 14:09:38'),
(47, 7, 2, '2021-03-28 14:09:38', '2021-03-28 14:09:38'),
(48, 8, 1, '2021-03-28 14:10:10', '2021-03-28 14:10:10'),
(49, 8, 2, '2021-03-28 14:10:10', '2021-03-28 14:10:10'),
(50, 9, 2, '2021-03-28 14:11:20', '2021-03-28 14:11:20'),
(53, 11, 1, '2021-03-28 14:12:02', '2021-03-28 14:12:02'),
(54, 11, 2, '2021-03-28 14:12:02', '2021-03-28 14:12:02'),
(57, 10, 1, '2021-03-30 08:25:33', '2021-03-30 08:25:33'),
(58, 10, 2, '2021-03-30 08:25:33', '2021-03-30 08:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sub_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(24, 4, '2021MarSat1204p27.jpg', '2021-03-27 06:04:06', '2021-03-27 06:04:06'),
(25, 7, '2021MarSat1204p27.jpg', '2021-03-27 06:04:30', '2021-03-27 06:04:30'),
(26, 8, '2021MarSat1204p12.jpg', '2021-03-27 06:04:56', '2021-03-27 06:04:56'),
(27, 9, '2021MarSat1205p2.jpg', '2021-03-27 06:05:11', '2021-03-27 06:05:11'),
(29, 11, '2021MarSat1205p9.jpg', '2021-03-27 06:05:49', '2021-03-27 06:05:49'),
(30, 10, '2021MarMon1756p5.jpg', '2021-03-29 11:56:30', '2021-03-29 11:56:30'),
(31, 10, '2021MarMon1756p6.jpg', '2021-03-29 11:56:30', '2021-03-29 11:56:30'),
(32, 10, '2021MarMon1756p23.jpg', '2021-03-29 11:56:30', '2021-03-29 11:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `review` double DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(54, 4, 7, '2021-03-28 14:09:23', '2021-03-28 14:09:23'),
(55, 4, 8, '2021-03-28 14:09:23', '2021-03-28 14:09:23'),
(56, 7, 6, '2021-03-28 14:09:38', '2021-03-28 14:09:38'),
(57, 7, 7, '2021-03-28 14:09:38', '2021-03-28 14:09:38'),
(58, 8, 7, '2021-03-28 14:10:10', '2021-03-28 14:10:10'),
(59, 8, 8, '2021-03-28 14:10:10', '2021-03-28 14:10:10'),
(60, 8, 9, '2021-03-28 14:10:10', '2021-03-28 14:10:10'),
(61, 9, 8, '2021-03-28 14:11:20', '2021-03-28 14:11:20'),
(65, 11, 6, '2021-03-28 14:12:02', '2021-03-28 14:12:02'),
(66, 11, 7, '2021-03-28 14:12:02', '2021-03-28 14:12:02'),
(70, 10, 7, '2021-03-30 08:25:33', '2021-03-30 08:25:33'),
(71, 10, 8, '2021-03-30 08:25:33', '2021-03-30 08:25:33'),
(72, 10, 9, '2021-03-30 08:25:33', '2021-03-30 08:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `tag1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `name`, `email`, `number`, `address`, `created_at`, `updated_at`) VALUES
(6, 9, 'Md. Abu Bakker Siddik shamsul', 'samsulpust6264@gmail.com', '01766053206', 'BSMR Hall-308', '2021-04-05 06:10:32', '2021-04-05 06:10:32'),
(7, 9, 'Md. Abu Bakker Siddik shamsul', 'samsulpust6264@gmail.com', '01766053206', 'BSMR Hall-308', '2021-04-05 07:45:02', '2021-04-05 07:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'S', 1, NULL, '2021-03-25 14:35:24', '2021-03-25 14:35:24'),
(7, 'M', 1, NULL, '2021-03-25 14:35:30', '2021-03-25 14:35:30'),
(8, 'L', 1, NULL, '2021-03-25 14:35:36', '2021-03-25 14:35:36'),
(9, 'XL', 1, 1, '2021-03-25 14:35:42', '2021-03-25 14:36:17'),
(11, 'XXL', 1, NULL, '2021-03-27 02:41:31', '2021-03-27 02:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '2021MarWed1524img1.jpg', 'First Slider', 'This is a description for the Fisrt slide.', 1, NULL, '2021-03-24 09:24:23', '2021-03-24 09:24:23'),
(6, '2021MarWed1524img2.jpg', 'Second Slider', 'This is a description for the second slide.', 1, NULL, '2021-03-24 09:24:35', '2021-03-24 09:24:35'),
(8, '2021MarWed1732img3.jpg', 'Third Slider', 'This Slider is for Third Slide', 1, NULL, '2021-03-24 11:32:32', '2021-03-24 11:32:32'),
(9, '2021MarSat125301.jpg', 'New Collections', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, NULL, '2021-03-27 06:53:58', '2021-03-27 06:53:58'),
(10, '2021MarSat125502.jpg', 'Women Fashion', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit', 1, NULL, '2021-03-27 06:55:04', '2021-03-27 06:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '1', 'MEN', 1, NULL, '2021-03-27 12:43:00', '2021-03-27 12:43:00'),
(3, '1', 'WOMEN', 1, NULL, '2021-03-27 12:43:32', '2021-03-27 12:43:32'),
(4, '1', 'BOYS', 1, NULL, '2021-03-27 12:43:45', '2021-03-27 12:43:45'),
(5, '1', 'GIRLS', 1, NULL, '2021-03-27 12:43:53', '2021-03-27 12:43:53'),
(6, '2', 'LAPTOPS', 1, NULL, '2021-03-27 12:44:14', '2021-03-27 12:44:14'),
(7, '2', 'DESKTOPS', 1, NULL, '2021-03-27 12:44:24', '2021-03-27 12:44:24'),
(8, '2', 'CAMERAS', 1, NULL, '2021-03-27 12:44:33', '2021-03-27 12:44:33'),
(9, '2', 'MOBILE PHONES', 1, NULL, '2021-03-27 12:44:48', '2021-03-27 12:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `cat_id`, `subcat_id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'DRESSES', 1, 1, '2021-03-28 13:51:24', '2021-03-28 13:56:11'),
(2, 1, 2, 'SHOES', 1, NULL, '2021-03-28 13:56:53', '2021-03-28 13:56:53'),
(3, 1, 2, 'JACKETS', 1, NULL, '2021-03-28 13:57:07', '2021-03-28 13:57:07'),
(4, 1, 2, 'SUNGLASSES', 1, NULL, '2021-03-28 13:57:21', '2021-03-28 13:57:21'),
(5, 1, 2, 'SPORTS WEAR', 1, NULL, '2021-03-28 13:57:39', '2021-03-28 13:57:39'),
(6, 1, 2, 'BLAZERS', 1, NULL, '2021-03-28 13:57:53', '2021-03-28 13:57:53'),
(7, 1, 2, 'SHIRTS', 1, NULL, '2021-03-28 13:58:06', '2021-03-28 13:58:06'),
(8, 1, 3, 'HANDBAGS', 1, NULL, '2021-03-28 13:58:24', '2021-03-28 13:58:24'),
(9, 1, 3, 'JWELLERY', 1, NULL, '2021-03-28 13:58:39', '2021-03-28 13:58:39'),
(10, 1, 3, 'SWIMWEAR', 1, NULL, '2021-03-28 13:58:55', '2021-03-28 13:58:55'),
(11, 1, 3, 'TOPS', 1, NULL, '2021-03-28 13:59:04', '2021-03-28 13:59:04'),
(12, 1, 3, 'FLATS', 1, NULL, '2021-03-28 13:59:19', '2021-03-28 13:59:19'),
(13, 1, 3, 'WINTER WEAR', 1, NULL, '2021-03-28 14:01:29', '2021-03-28 14:01:29'),
(14, 2, 2, 'WATCHES', 1, NULL, '2021-03-28 14:11:07', '2021-03-28 14:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) DEFAULT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `number`, `code`, `address`, `gender`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Md. Yousuf Hossain', 'yousufice@gmail.com', NULL, '$2y$10$7sV8EvX3f4sj374/XRAhAeZHj9bpHY1UBtnsIiELT2bqde1vX9T3e', 1521309208, NULL, 'Mymensingh', 'Male', '2021MarTue1313MVIMG_20210210_130823.jpg', 1, NULL, NULL, '2021-03-23 09:01:08'),
(9, 'customer', 'Md. Yousuf Hossain', 'yousuf.160604@s.pust.ac.bd', NULL, '$2y$10$ELTtxhkLckYLIRS/n5o6R.9r3I7HL1YmSZGhgeKH0fIl83ql38o06', 1775579493, '478272', 'Zonaid Palli,Homeopathy Mor,Shalgaria,Pabna-6600', 'Male', '2021AprSat1357MVIMG_20210210_130823.jpg', 1, NULL, '2021-04-03 05:08:43', '2021-04-03 10:19:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `communicates`
--
ALTER TABLE `communicates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_name_unique` (`name`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_sub_categories_name_unique` (`name`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `communicates`
--
ALTER TABLE `communicates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
