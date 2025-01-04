-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 05:23 PM
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
-- Database: `laravel_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nicole Cronin', 'casper.kristy@example.org', 'Cupiditate aperiam ut id autem mollitia et.', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(2, 'Lavada Connelly', 'ward.amie@example.com', 'Sit illum aspernatur aliquid autem et dicta.', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(3, 'Chelsea Zieme', 'tanya27@example.net', 'Aut possimus ipsa assumenda.', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(4, 'Elvera Hill', 'randal.schulist@example.com', 'Sed eaque tempora qui repellendus quia amet.', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(5, 'Prof. Mckenna Dicki', 'napoleon29@example.org', 'Est distinctio dolorem molestiae sunt voluptatem.', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(6, 'Jordi Harvey', 'hbatz@example.com', 'Accusantium et natus sunt sed incidunt dolorem doloribus quos.', '2024-12-29 04:01:12', '2024-12-29 04:01:12'),
(7, 'Dr. Olen Marquardt I', 'antoinette82@example.com', 'Ex voluptas corrupti qui sit praesentium.', '2024-12-29 04:01:12', '2024-12-29 04:01:12'),
(8, 'Mrs. Annie Quitzon MD', 'xhyatt@example.net', 'Numquam quaerat corporis quas ut.', '2024-12-29 04:01:12', '2024-12-29 04:01:12'),
(9, 'Kelsi Bradtke', 'demario.zulauf@example.com', 'Est nihil sed necessitatibus.', '2024-12-29 04:01:12', '2024-12-29 04:01:12'),
(10, 'Yazmin Fay', 'juliana.sporer@example.com', 'Minima cumque aut omnis sed rerum qui illum.', '2024-12-29 04:01:12', '2024-12-29 04:01:12'),
(11, 'Felicity Crooks', 'aiden.wyman@example.net', 'Amet dolorem enim cum.', '2024-12-29 04:02:17', '2024-12-29 04:02:17'),
(12, 'Abdiel Conroy DDS', 'rogahn.maximilian@example.org', 'Fugit velit vero ea voluptatem sit et.', '2024-12-29 04:02:17', '2024-12-29 04:02:17'),
(13, 'Dorris Murphy', 'linda97@example.org', 'Aut quod exercitationem impedit vitae omnis.', '2024-12-29 04:02:17', '2024-12-29 04:02:17'),
(14, 'Rosetta Nitzsche', 'dell.waters@example.com', 'Facere est quisquam vel sit debitis incidunt laboriosam.', '2024-12-29 04:02:17', '2024-12-29 04:02:17'),
(15, 'Missouri Schumm', 'billie15@example.net', 'Quisquam est facere nostrum veritatis.', '2024-12-29 04:02:17', '2024-12-29 04:02:17'),
(16, 'Mia Hoeger Jr.', 'adams.arnold@example.org', 'Placeat maiores dolores est perspiciatis nulla.', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(17, 'Dr. Dereck Bernhard', 'jaime.walsh@example.net', 'Perspiciatis sequi qui repellat perferendis cupiditate.', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(18, 'Augustine Cassin', 'mkshlerin@example.org', 'Non occaecati nemo odit repellendus.', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(19, 'Dr. Vita Braun V', 'antonetta84@example.org', 'Voluptas facere vero omnis in est possimus velit magni.', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(20, 'Cristobal Konopelski', 'ernestina.boehm@example.net', 'Corrupti qui ut quidem sapiente ut enim autem.', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(21, 'Kaung Nyi Thit', 'bob@email.com', 'Hi', '2025-01-03 01:57:50', '2025-01-03 01:57:50'),
(22, 'C Nexx', 'cnexx@email.com', 'hi', '2025-01-03 03:56:11', '2025-01-03 03:56:11');

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
(8, '0001_01_01_000000_create_users_table', 1),
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_12_08_194749_create_personal_access_tokens_table', 1),
(12, '2024_12_08_204038_create_trainers_table', 1),
(13, '2024_12_11_074904_create_services_table', 1),
(14, '2024_12_25_104714_create_messages_table', 1);

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
  `name` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `header`, `text`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'State-of-the-Art Equipment', 'State-of-the-Art Equipment', 'Each Powerhouse facility offers high quality cardio & strength equipment.', 'photos/H4u3aXqp3BE7FXWyVb07mEK4KDnWSGK6fQVkisTI.png', '2025-01-03 01:44:32', '2025-01-03 01:44:32'),
(2, 'Personal Trainers', 'Personal Trainers', 'Maximize your workout with the help of our personal trainers.', 'photos/1bWLFkbXCic0BACRIB4xXLJW3hqwmUo5tD4Oojgg.png', '2025-01-03 01:51:10', '2025-01-03 01:51:10');

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
('QQLSSBC25eqrVbwePuWVZtNUb4KtoSfORLC1qPpX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1E5MG5mbWhwclpoUUtPWG1UbEpFbGMwT1A1dVBsYThxVUR3RjRGbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZW1iZXJzaGlwL2NoZWNrb3V0Ijt9fQ==', 1735901916);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `expertise`, `bio`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Mr. Sheldon Thiel', 'ipsa', 'Ad quaerat sunt cupiditate nihil qui quia illum.', 'https://via.placeholder.com/640x480.png/0077ff?text=molestiae', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(4, 'Mr. Ibrahim Conn II', 'saepe', 'Qui et vel minima odio animi enim voluptatem ut.', 'https://via.placeholder.com/640x480.png/0000aa?text=blanditiis', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(5, 'Manuel Klein', 'nihil', 'Dolor eaque voluptatem sunt quas ea dolorem et.', 'https://via.placeholder.com/640x480.png/006677?text=sint', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(6, 'Dr. Clemmie Terry DVM', 'non', 'Voluptate sint consectetur saepe velit voluptas.', 'https://via.placeholder.com/640x480.png/003300?text=corrupti', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(7, 'Prof. Rey Pouros DDS', 'voluptate', 'Dolorem sed consectetur consequatur doloribus nesciunt exercitationem.', 'https://via.placeholder.com/640x480.png/00aaff?text=cum', '2024-12-29 04:02:39', '2024-12-29 04:02:39'),
(8, 'Kaung', 'Yoga', 'Hey', NULL, '2024-12-31 01:53:45', '2024-12-31 01:53:45'),
(9, 'Kaung', 'Yoga', 'Hey', NULL, '2024-12-31 01:56:39', '2024-12-31 01:56:39'),
(10, 'Kaung Nyi Thit', 'Gym', 'hi', 'photos/aKEnKifWUtN43a64X7HgU9obEaf0ZrH81ztmn5PN.jpg', '2025-01-03 04:26:00', '2025-01-03 04:26:00');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hope Blanda I', 'bridgette.davis@example.org', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'SbovsWphLn', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(2, 'Betsy D\'Amore III', 'tyler.greenholt@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'bHxKbxT83LEYHuzF1w9r12xTQjoaJFqImbhudysm6imOXmbY4BQ9lMd1v2b3', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(3, 'Dr. Shyann Bailey Jr.', 'kennedi89@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'ccaN0orvmh', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(4, 'Tyra Collier', 'eliza.moen@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, '07yuRATwuL', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(5, 'Dr. Isadore Kulas', 'brook54@example.com', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'cAzEhqtg62', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(6, 'Prof. Rosendo Runolfsdottir', 'tremayne13@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'GAHnXlVlX3', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(7, 'Rosetta Dare', 'lockman.kiara@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'pizwn0kzYb', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(8, 'Devante Leffler', 'malinda14@example.net', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'PriFGlnd0l', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(9, 'Mrs. Alessandra O\'Keefe', 'kyler23@example.com', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'a59B2vuqSz', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(10, 'Annetta Collier', 'dcummerata@example.org', '2024-12-25 13:52:42', '$2y$12$H1KNXN3rGSsScYZ19vaU8OCXvbHCfQCFaXJ/kNUeac9BeiDqqXlX.', 0, 'zuCl9R4nVV', '2024-12-25 13:52:42', '2024-12-25 13:52:42'),
(11, 'Admin User', 'admin@example.com', '2024-12-25 13:52:43', '$2y$12$XaR3ZO6OI4ZqbQzuxVEtSuy7USmZhvIpSxNeyq9ClgqQwG6ayqu4a', 1, '7FeTLKihLreBwRFqaMuO6zsbN03IH6BdMWvTQt1SlqU17P8u4TCHVhmyhMEq', '2024-12-25 13:52:43', '2024-12-25 13:52:43'),
(12, 'Janick Robel', 'cwilderman@example.net', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'PAVZjWS2C1', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(13, 'Alvera Lakin', 'kuphal.haskell@example.net', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'syxk7sJ1Nf', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(14, 'Prof. Roscoe Corwin Jr.', 'vkling@example.org', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'Zek00C6GIa', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(15, 'Lavonne Vandervort MD', 'ondricka.carrie@example.com', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'PO7hzL8Qao', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(16, 'Evert Armstrong', 'walter.philip@example.org', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'ugx1m9WBrx', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(17, 'Prof. Osbaldo Sporer III', 'penelope55@example.org', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'y5uzvQZcAA', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(18, 'Julian Torphy', 'hodkiewicz.katrina@example.org', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'mcsWmagVRw', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(19, 'Dr. Jamaal Jones', 'emante@example.com', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'bD2Tk2tltC', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(20, 'Adrien Hirthe', 'jmonahan@example.com', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, '6Med2WYPy4', '2024-12-29 04:00:25', '2024-12-29 04:00:25'),
(21, 'Jaunita Nader', 'hcarter@example.com', '2024-12-29 04:00:25', '$2y$12$rr5eFy/g5/gUP.1syNQK0OUXI1/FBZCws8ZzWXd3Bsly0vJQPH8Hq', 0, 'P9iLhVcZdf', '2024-12-29 04:00:25', '2024-12-29 04:00:25');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
