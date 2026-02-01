-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table taskboard. cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.cache : ~0 rows (environ)
DELETE FROM `cache`;

-- Listage de la structure de table taskboard. cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.cache_locks : ~0 rows (environ)
DELETE FROM `cache_locks`;

-- Listage de la structure de table taskboard. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.failed_jobs : ~0 rows (environ)
DELETE FROM `failed_jobs`;

-- Listage de la structure de table taskboard. jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.jobs : ~0 rows (environ)
DELETE FROM `jobs`;

-- Listage de la structure de table taskboard. job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.job_batches : ~0 rows (environ)
DELETE FROM `job_batches`;

-- Listage de la structure de table taskboard. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.migrations : ~4 rows (environ)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_01_26_175306_create_tasks_table', 2);


-- Listage de la structure de table taskboard. sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.sessions : ~1 rows (environ)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('Lhuj8MSImAcLt5U3IPE33ulAE188cdXRE65Zc93Q', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjV5YjFFWDhocHZWRzB1Q01KZmY0bmtES0ZiNVdLSjVCQ3JDUEVYMSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769878939);

-- Listage de la structure de table taskboard. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.users : ~4 rows (environ)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nora Collier', 'qyqorevu@mailinator.com', NULL, '$2y$12$gogaa3XgcbjvYsiLwshRHuP6o4KerNXpViHJcgS6gGK/X.QsKVKYG', '0gg5seB7tII9euMtYhxKkKQREnF6Nc5DJKuhLi0agtfSk8XIzlsBLekVGNtM', '2026-01-26 18:07:12', '2026-01-26 18:07:12'),
	(2, 'd3', 'sateki@mailinator.com', NULL, '$2y$12$rijVVqoa7h0Dgfl3q3wH3OHAIXeH78PF8X/owhIzXqy3.H/k31WMW', NULL, '2026-01-27 09:07:35', '2026-01-27 09:07:35'),
	(3, 'Kenneth Cohen', 'xakix@mailinator.com', NULL, '$2y$12$6tp3zVddtRN8ogDIhWcsO.RBxWUtZJeBLg/JU7jSySS0ljOeT91GG', 'pZCZrs3nCWzPYkmD1nflm5N7HdfLUcIPQ3iNS7eLepB6O0iqOgaMJDLED2qU', '2026-01-27 09:33:52', '2026-01-27 09:33:52'),
	(4, 'Bianca Martin', 'zygafy@mailinator.com', NULL, '$2y$12$VmsHOmcEVdiOPQu.vvJcZOwmndLO8caTPfePS2jILPVnCyNjra8gm', NULL, '2026-01-27 12:43:27', '2026-01-27 12:43:27'),
	(5, 'Alec Wooten', 'wiqifil@mailinator.com', NULL, '$2y$12$uhY8Y51UKDigDFvSlFOaJ.SykHv01KLb.F/fYWMtt4688RhI3UPfy', NULL, '2026-01-27 21:12:05', '2026-01-27 21:12:05'),
	(6, 'Paul Reed', 'visapatela@mailinator.com', NULL, '$2y$12$UudPh/RLN.og/y8zh5jfw.LSM9j3DhuPeV7KVaICVfU2lw0B0vdHe', 'DXQXmG0ZcAeedp59al4kpDOOgyTe1aimylYZAHlwJ8tfnPLVLu6z1AQS8DNa', '2026-01-28 07:13:32', '2026-01-28 07:13:32');


-- Listage de la structure de table taskboard. tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deadline` date DEFAULT NULL,
  `priority` enum('low','medium','high') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medium',
  `status` enum('todo','in_progress','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'todo',
  `user_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.tasks : ~38 rows (environ)
DELETE FROM `tasks`;
INSERT INTO `tasks` (`id`, `title`, `description`, `deadline`, `priority`, `status`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Yassine', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, '2026-01-31 12:52:49', NULL, '2026-01-31 12:52:49'),
	(2, 'Yassine', 'erdf', '2024-01-28', 'medium', 'done', 6, NULL, NULL, '2026-01-29 18:53:22'),
	(3, 'task', 'erdf', '2024-01-28', 'low', 'in_progress', 6, '2026-01-30 14:51:13', NULL, '2026-01-30 14:51:13'),
	(4, 'sekkah', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, '2026-01-29 17:53:13', NULL, '2026-01-29 17:53:13'),
	(5, 'Yassine', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, '2026-01-30 07:16:05', NULL, '2026-01-30 07:16:05'),
	(6, 'update', 'now', '2024-01-28', 'medium', 'done', 6, '2026-01-30 14:51:18', NULL, '2026-01-30 14:51:18'),
	(7, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-29 17:53:05', '2026-01-28 17:29:32', '2026-01-29 17:53:05'),
	(8, 'Yassine', 'erdf', '2026-01-29', 'medium', 'todo', 6, NULL, '2026-01-28 17:30:14', '2026-01-29 18:01:26'),
	(9, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-28 17:30:29', '2026-01-31 14:43:19'),
	(10, 'Yassine', 'erdf', '2024-01-28', 'low', 'done', 6, NULL, '2026-01-28 17:31:13', '2026-01-31 14:05:39'),
	(11, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-30 14:53:10', '2026-01-28 17:32:10', '2026-01-30 14:53:10'),
	(12, 'Yassine', 'erdf', '2024-01-28', 'high', 'done', 6, NULL, '2026-01-28 17:35:45', '2026-01-31 14:59:05'),
	(13, 'Yassine', 'erdf', '2024-01-28', 'medium', 'done', 6, NULL, '2026-01-28 17:36:01', '2026-01-31 14:05:37'),
	(14, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-30 14:53:13', '2026-01-28 19:31:44', '2026-01-30 14:53:13'),
	(15, 'Yassine', 'erdf', '2024-01-28', 'medium', 'done', 6, NULL, '2026-01-29 07:22:41', '2026-01-30 17:27:48'),
	(16, 'Yassine', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, NULL, '2026-01-29 08:17:28', '2026-01-30 07:16:25'),
	(17, 'Yassine', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, NULL, '2026-01-29 08:31:02', '2026-01-30 07:16:27'),
	(18, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-30 14:53:16', '2026-01-29 08:31:13', '2026-01-30 14:53:16'),
	(19, 'Yassine', 'erdf', '2024-01-28', 'medium', 'done', 6, NULL, '2026-01-29 08:50:21', '2026-01-31 14:05:35'),
	(20, 'Yassine', 'erdf', '2024-01-28', 'high', 'todo', 6, NULL, '2026-01-29 08:50:36', '2026-01-31 14:04:26'),
	(21, 'Yassine', 'erdf', '2024-01-28', 'medium', 'in_progress', 6, NULL, '2026-01-29 08:52:22', '2026-01-31 14:05:32'),
	(22, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-31 14:05:42', '2026-01-29 08:55:05', '2026-01-31 14:05:42'),
	(23, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 08:55:28', '2026-01-29 14:16:20'),
	(24, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 08:55:54', '2026-01-29 14:16:20'),
	(25, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 08:57:44', '2026-01-29 14:16:20'),
	(26, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 08:58:04', '2026-01-29 14:16:20'),
	(27, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-30 14:53:07', '2026-01-29 09:00:52', '2026-01-30 14:53:07'),
	(28, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 09:01:24', '2026-01-29 14:16:20'),
	(29, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 09:02:04', '2026-01-29 14:16:20'),
	(30, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 09:36:16', '2026-01-29 14:16:20'),
	(31, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 09:45:38', '2026-01-29 14:16:20'),
	(32, 'Yassine', 'erdf', '2024-01-28', 'medium', 'todo', 6, '2026-01-29 18:31:56', '2026-01-29 11:57:23', '2026-01-29 18:31:56'),
	(33, 'take a shower after eating', 'let be fresh', '2024-01-28', 'medium', 'todo', 6, NULL, '2026-01-29 13:52:02', '2026-01-29 18:33:30'),
	(34, 'fwwe', 'wefw', '2026-01-27', 'medium', 'todo', 6, NULL, '2026-01-29 18:33:18', '2026-01-29 18:33:18'),
	(35, 'fw', 'wef', '2026-01-20', 'medium', 'todo', 6, NULL, '2026-01-29 18:39:05', '2026-01-29 18:39:05'),
	(36, 'test1234', 'test', '2026-01-20', 'medium', 'todo', 6, NULL, '2026-01-29 18:53:35', '2026-01-31 16:00:49'),
	(37, 'test', 'teest', '2026-01-14', 'medium', 'todo', 6, '2026-01-31 16:00:00', '2026-01-29 18:55:36', '2026-01-31 16:00:00'),
	(38, 'rw', 'fea', '2026-01-28', 'medium', 'done', 6, NULL, '2026-01-31 09:38:55', '2026-01-31 16:00:11');

-- Listage de la structure de table taskboard. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table taskboard.password_reset_tokens : ~0 rows (environ)
DELETE FROM `password_reset_tokens`;
INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('xakix@mailinator.com', '$2y$12$wKtcjh/Ex/NLiykaKx7DH.x1XUxiVkvk8WfyBWp1577PRZjb0xDVe', '2026-01-27 10:15:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
