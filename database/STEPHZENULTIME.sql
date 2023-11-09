-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2023 at 07:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couture`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `name` varchar(255) NOT NULL,
                               `description` longtext NOT NULL,
                               `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `description`, `image`) VALUES
                                                                     (1, 'couture', 'Des sacs petits ou grands et des accessoires : des pochettes , des portefeuilles et même des paniers pour tout y ranger. \r\n\r\nRetrouvez ma collection creationsaom CHAQUE MODELE RESTE UNIQUE avec un choix de tissu ou matiere differente en fonction de mes envies.\r\n\r\nJe crée des nouveautés régulièrement. \r\n\r\nA vous de découvrir', '/imgs/coutureBackground.jpg'),
                                                                     (2, 'tricot', 'Tricot Fait Main je vous propose deux laines.\r\n\r\n1) Fil doux 100% Polyester, chaud \r\n\r\n2) Laine douce 100% Merino chaude et extensible. \r\n\r\nCes deux laines ne piquent pas et sont lavables en machine.', '/imgs/tricotBackground.jpg'),
                                                                     (3, 'durable', 'Fini les produits jetables, place aux articles écologiques TRICOTES MAIN ! Ce fil fantaisie aux couleurs vives et éclatantes a été spécialement conçu pour la fabrication d\'éponges ou de gants aux propriétés abrasives et réutilisables.', '/imgs/durableBackground.jpg');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'oe');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `product_id`) VALUES
(1, '/imgs/produits/sac-kat.jpg', 5),
(2, '/imgs/produits/sac-kat.jpg', 5),
(3, '/imgs/produits/sac-kat.jpg', 5),
(4, '/imgs/produits/sac-kat.jpg', 5);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_06_19_095150_create_variantes_table', 1),
(4, '2019_06_19_101237_create_collections_table', 1),
(5, '2019_07_13_095817_create_tailles_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_11_05_175148_create_groups_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2020_06_19_101659_create_sous_collections_table', 1),
(10, '2020_06_22_194528_create_sous_categories_table', 1),
(11, '2023_06_15_151232_create_products_table', 1),
(12, '2023_06_27_150103_create_welcomes_table', 1),
(13, '2023_07_11_161020_create_images_table', 1),
(14, '2023_11_05_145403_create_sessions_table', 1),
(15, '2023_11_05_152817_create_products_tailles', 1),
(16, '2023_11_05_160129_create_products_groups', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `sous_collection_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sous_categorie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `collection_id`, `sous_collection_id`, `sous_categorie_id`, `name`, `description`, `image`, `price`, `active`, `group_id`) VALUES
(2, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(3, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(4, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, 1),
(5, 1, 1, NULL, 'Le sac oe1', 'Everyone knows what it\'s like to feel a great victory after a great work, effort and overcoming whether it\'s like our brother Alcaraz in front of 10,000 people or like me in 2007 in Wii Sports humiliating my little cousin at my grandpa’s house.', '/imgs/produits/sac-kat.jpg', 15, 1, 1),
(6, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(7, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(8, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(9, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(10, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(11, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(12, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(13, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(14, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(15, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(16, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(17, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(18, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(19, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(20, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(21, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(22, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(23, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(24, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(25, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(26, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(27, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(28, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(29, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(30, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(31, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(32, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(33, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(34, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(35, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(36, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(37, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(38, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(39, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(40, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(41, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(42, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(43, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(44, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(45, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(46, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(47, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(48, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(49, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(50, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(51, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(52, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(53, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(54, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(55, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(56, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(57, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(58, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(59, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(60, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(61, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(62, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(63, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(64, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(65, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(66, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(67, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(68, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(69, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(70, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(71, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(72, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(73, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(74, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(75, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(76, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(77, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(78, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(79, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(80, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(81, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(82, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(83, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(84, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(85, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(86, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(87, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(88, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(89, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(90, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(91, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(92, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(93, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(94, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(95, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(96, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(97, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(98, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(99, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(100, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(101, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(102, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(103, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(104, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL),
(105, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(106, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL),
(107, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL),
(108, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_tailles`
--

CREATE TABLE `products_tailles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taille_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_groups`
--

CREATE TABLE `product_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `taille` bigint(20) UNSIGNED DEFAULT NULL,
  `variante` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_groups`
--

INSERT INTO `product_groups` (`id`, `group_id`, `product_id`, `taille`, `variante`) VALUES
(1, 1, 5, 1, NULL),
(2, 1, 4, 2, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sous_collection_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `name`, `sous_collection_id`) VALUES
(1, 'Protection jambes', 3),
(2, 'Mitaines', 3),
(3, 'Tour de cou', 4),
(4, 'Couverture', 4),
(5, 'Chaussons', 4),
(6, 'Bonnet', 4),
(7, 'Bolero /étole', 4),
(8, 'Réversible', 5),
(9, 'Pliable', 5),
(10, 'Fermeture éclair', 5),
(11, 'Portefeuilles ou porte monnaies', 6),
(12, 'Pochettes ou trousses', 6),
(13, 'Paniers ou corbeilles', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sous_collections`
--

CREATE TABLE `sous_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sous_collections`
--

INSERT INTO `sous_collections` (`id`, `name`, `collection_id`) VALUES
(1, 'Gant Exfoliant', 3),
(2, 'Eponge', 3),
(3, 'Laine 100% MERINOS', 2),
(4, 'Fil doux 100% polyester', 2),
(5, 'Sacs', 1),
(6, 'Accessoires', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tailles`
--

CREATE TABLE `tailles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tailles`
--

INSERT INTO `tailles` (`id`, `name`) VALUES
(1, 'm'),
(2, 's');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'ewen', 'ewen.david@gmail.com', NULL, '$2y$10$6rjqokM16fvqUbICmLlDAugVSfEroOqk4OeUJhcWrh98gV5Zhk1L2', '9HInCs5FQu0OfGD5OVOYDX9qhw6aCELhmWBETZAShjB3jJJuOmmqVxH6MJp2', 1, '2023-09-12 13:56:34', '2023-09-12 13:56:34'),
(2, 'hamed', 'eeee@eee.fr', NULL, '$2y$10$L/duRcza8wapKhMcb0QFE.w7aga49T2uL7kLVD019v4qiMKdqoBOG', NULL, 0, '2023-09-12 14:06:22', '2023-09-12 14:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `variantes`
--

CREATE TABLE `variantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variantes`
--

INSERT INTO `variantes` (`id`, `name`) VALUES
(1, 'Sac bob');

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `description1` text NOT NULL,
  `sous_description1` text NOT NULL,
  `description2` text NOT NULL,
  `sous_description2` text NOT NULL,
  `description3` text NOT NULL,
  `sous_description3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`description1`, `sous_description1`, `description2`, `sous_description2`, `description3`, `sous_description3`) VALUES
('Tricot & Couture fait main', 'Mon savoir faire à votre portée', 'Tout est Disponible.', 'Ma devise : chaque pièce est unique.', 'En mains propre sur Nantes', 'Ou livraison via collisimo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sous_categorie_id_foreign` (`sous_categorie_id`),
  ADD KEY `products_collection_id_foreign` (`collection_id`),
  ADD KEY `products_sous_collection_id_foreign` (`sous_collection_id`),
  ADD KEY `products_group_id_foreign` (`group_id`);

--
-- Indexes for table `products_tailles`
--
ALTER TABLE `products_tailles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_tailles_taille_id_foreign` (`taille_id`),
  ADD KEY `products_tailles_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_groups`
--
ALTER TABLE `product_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_groups_group_id_foreign` (`group_id`),
  ADD KEY `product_groups_product_id_foreign` (`product_id`),
  ADD KEY `product_groups_taille_foreign` (`taille`),
  ADD KEY `product_groups_variante_foreign` (`variante`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sous_categories_sous_collection_id_foreign` (`sous_collection_id`);

--
-- Indexes for table `sous_collections`
--
ALTER TABLE `sous_collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sous_collections_collection_id_foreign` (`collection_id`);

--
-- Indexes for table `tailles`
--
ALTER TABLE `tailles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variantes`
--
ALTER TABLE `variantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `products_tailles`
--
ALTER TABLE `products_tailles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_groups`
--
ALTER TABLE `product_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sous_collections`
--
ALTER TABLE `sous_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tailles`
--
ALTER TABLE `tailles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variantes`
--
ALTER TABLE `variantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`),
  ADD CONSTRAINT `products_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `products_sous_categorie_id_foreign` FOREIGN KEY (`sous_categorie_id`) REFERENCES `sous_categories` (`id`),
  ADD CONSTRAINT `products_sous_collection_id_foreign` FOREIGN KEY (`sous_collection_id`) REFERENCES `sous_collections` (`id`);

--
-- Constraints for table `products_tailles`
--
ALTER TABLE `products_tailles`
  ADD CONSTRAINT `products_tailles_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `products_tailles_taille_id_foreign` FOREIGN KEY (`taille_id`) REFERENCES `tailles` (`id`);

--
-- Constraints for table `product_groups`
--
ALTER TABLE `product_groups`
  ADD CONSTRAINT `product_groups_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `product_groups_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_groups_taille_foreign` FOREIGN KEY (`taille`) REFERENCES `tailles` (`id`),
  ADD CONSTRAINT `product_groups_variante_foreign` FOREIGN KEY (`variante`) REFERENCES `variantes` (`id`);

--
-- Constraints for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_sous_collection_id_foreign` FOREIGN KEY (`sous_collection_id`) REFERENCES `sous_collections` (`id`);

--
-- Constraints for table `sous_collections`
--
ALTER TABLE `sous_collections`
  ADD CONSTRAINT `sous_collections_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
