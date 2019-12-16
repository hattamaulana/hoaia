-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 17 Des 2019 pada 01.15
-- Versi Server: 10.3.20-MariaDB-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoaia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forest_id` bigint(20) UNSIGNED DEFAULT NULL,
  `imgurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donations`
--

INSERT INTO `donations` (`id`, `forest_id`, `imgurl`, `title`, `description`, `plant`, `money`, `created_at`, `updated_at`) VALUES
(1, NULL, 'WhatsApp Image 2019-12-11 at 09.09.41.jpeg', 'Untuk Hutan Gunung Rinjani', 'Mari Berdonasi', 100, 1000000, '2019-12-10 21:05:23', '2019-12-10 21:05:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `forests`
--

CREATE TABLE `forests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imgurl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forests`
--

INSERT INTO `forests` (`id`, `imgurl`, `name`, `description`, `country`, `location`, `large`, `created_at`, `updated_at`) VALUES
(1, 'WhatsApp Image 2019-12-11 at 09.15.51.jpeg', 'Hutan Gunung Rinjani', 'Perambahan liar telah menggerogoti beberapa titik di hutan konservasi di kawasan Hutan Rinjani. Mari berdonasi untuk menjadikan Hutan Rinjani menjadi  hijau kembali', 'Indonesia', 'Lombok, Nusa Tenggara Barat', 413, '2019-12-10 21:00:11', '2019-12-10 21:00:11'),
(2, 'WhatsApp Image 2019-12-11 at 09.09.41.jpeg', 'Hutan Betet', 'Butuh penanaman', 'Indonesia', 'Blitar, Jawa Timur', 123, '2019-12-10 21:32:46', '2019-12-10 21:32:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `from_user_id`, `to_user_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 'Eligendi quod consectetur quisquam quas in numquam.', 'Odio quia nihil fugiat eos non minima. Maiores quidem et aut itaque. Recusandae modi cum aut tempora commodi itaque rem dolorum.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(2, 3, 3, 'Velit perspiciatis et non excepturi unde vero rerum.', 'Non veritatis accusamus dolorem repudiandae minus sapiente ipsum. Vero eum et nulla corporis quaerat. Nostrum aut architecto quod dicta consequatur. Enim mollitia corrupti voluptates.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(3, 4, 2, 'Accusantium ducimus omnis magnam commodi a et omnis ex.', 'Nobis cum dignissimos aut maiores minima natus odio. Reiciendis harum enim laboriosam et omnis possimus.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(4, 4, 1, 'Odit minima sit quasi delectus.', 'Voluptatem facilis vitae in dolor dolores. Est perferendis quod eum et ea ea. Magni dolores quod consequuntur temporibus quia excepturi sit.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(5, 1, 3, 'Autem nobis nihil magni et vitae est.', 'Sit vel vero enim quia molestiae. Repudiandae voluptatum dolores quis inventore. Quaerat at nulla earum excepturi. Maxime sint rerum totam dolores earum. Qui ut temporibus quas commodi nostrum similique.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(6, 1, 5, 'Odit occaecati consequatur non ut dignissimos.', 'Voluptas autem sed a harum explicabo omnis. Quis veniam molestias maiores incidunt voluptate officiis. Labore unde facilis eveniet temporibus ut commodi.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(7, 4, 2, 'Ut aut distinctio voluptates eos est autem ea est.', 'Qui magnam voluptate eveniet fugiat reprehenderit nostrum. Sunt aliquam fugiat et nihil molestiae eveniet blanditiis vel. Possimus officiis modi facere nihil dolores earum odio. Cumque corrupti repellendus soluta pariatur aut autem voluptas.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(8, 3, 2, 'Ut consectetur odio quia rem eligendi non est voluptas.', 'A necessitatibus asperiores quibusdam enim. Expedita animi occaecati eos et aperiam et eveniet. Nihil eos voluptatibus perferendis qui exercitationem aperiam tenetur et.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(9, 5, 4, 'Eveniet corrupti voluptates molestiae natus odio hic.', 'Corporis nihil ex nam non nisi ut accusantium. Maxime officia ut laboriosam quam ullam ullam eveniet. Officiis fugiat quia dolorem soluta laudantium nulla iure. Totam vero eos consequatur assumenda reiciendis voluptatem non quis.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(10, 3, 2, 'Et nisi id voluptatem.', 'Velit asperiores necessitatibus omnis eum. Mollitia necessitatibus quam sed et optio. Et a eos non est maxime soluta.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(11, 5, 5, 'Tempore saepe amet temporibus voluptatem.', 'Et sequi velit est quis. Non molestiae eligendi natus voluptatem. Iusto ea sint dolore facere. Molestiae velit et quos aut consequatur amet tenetur.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(12, 4, 1, 'Rerum omnis eaque debitis tenetur sunt quae.', 'Recusandae ea non ipsam qui totam nihil. Sint sed sint debitis. Sapiente voluptas est in corrupti vel.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(13, 5, 1, 'Sit placeat ea assumenda omnis eum sequi tempora.', 'Natus voluptates repudiandae non omnis sed. Commodi aliquid et ut consequuntur. Aspernatur nesciunt minima vel tenetur.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(14, 4, 1, 'Aut provident sed et.', 'Ut ut ut voluptas aliquam. Dolore ex rerum dolor et dolorem quod et. Fuga veniam et deserunt ea sapiente.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(15, 2, 4, 'Molestias dolores quaerat temporibus harum.', 'Ut soluta fugiat autem perspiciatis qui necessitatibus. Fuga dolores perspiciatis voluptas rerum alias unde sapiente. Molestias accusantium vel laudantium. Possimus saepe deleniti aspernatur sit repellat.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(16, 5, 1, 'Nemo et explicabo omnis ea perspiciatis soluta et quos.', 'Asperiores harum eveniet dolorem qui ut sint deserunt. Ut voluptatem neque nam. Cum eum nisi et placeat temporibus similique voluptatem.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(17, 2, 3, 'Dolor eius earum qui occaecati cum.', 'Quisquam eaque ut ipsam aut eius nesciunt mollitia. Dolor sed aut ipsum quam et et. Odit ipsam ipsa aliquam ducimus praesentium pariatur. Sequi qui minus dolor fuga molestiae qui illo.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(18, 1, 3, 'Accusantium possimus ut veritatis laboriosam placeat modi optio.', 'Ut est ut nesciunt debitis. Voluptas accusamus qui dolores illo debitis esse. Quaerat ex mollitia eos.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(19, 1, 1, 'Ad voluptas voluptas veritatis ut.', 'Illum ab aliquid odit. Perspiciatis est vero excepturi fuga enim saepe aspernatur nulla. Aliquam deleniti et id maxime temporibus eum sit. Molestias possimus amet dignissimos.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(20, 1, 4, 'Animi asperiores deleniti saepe alias voluptatem.', 'Vel possimus doloremque itaque est. Alias tempora eligendi totam deleniti quod animi saepe. Rem debitis eius et consequatur eum ut. Fuga reiciendis voluptatem maiores ipsa neque aliquam molestiae aspernatur.', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(21, 4, 1, 'Eos modi laborum porro sit dolores ab.', 'Harum quibusdam nulla voluptas aut laborum tenetur. Dolor in voluptatem molestiae laborum quo sit. Et nihil aut tempore omnis. At ut odit quod nulla et odit quos qui.', '2019-12-10 21:19:20', '2019-12-10 21:19:20'),
(22, 3, 3, 'Et aut impedit numquam et sunt doloremque.', 'Magnam et qui voluptas alias eius. Voluptatibus voluptatem dolorum cumque quia. Veritatis repellat neque omnis optio.', '2019-12-10 21:19:20', '2019-12-10 21:19:20'),
(23, 1, 3, 'Voluptatem non pariatur illum molestiae.', 'Reprehenderit sunt iste sequi ut. Libero laborum illo enim natus quis eligendi. Reprehenderit et non quis est quam quia.', '2019-12-10 21:19:20', '2019-12-10 21:19:20'),
(24, 1, 3, 'Tempore at velit quis officiis earum.', 'Quaerat quis voluptas labore qui sint. Commodi velit facilis dolorem nesciunt. Cum est similique inventore illum ut consequatur doloremque. Perspiciatis illo ut exercitationem incidunt aut dignissimos deserunt.', '2019-12-10 21:19:20', '2019-12-10 21:19:20'),
(25, 5, 5, 'Laborum vel laborum dicta repellat ipsam.', 'Repellendus modi reprehenderit modi deserunt accusantium fugiat. Minima odio dolorum libero et doloribus ipsa. Ratione inventore amet qui reiciendis ea qui.', '2019-12-10 21:19:20', '2019-12-10 21:19:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_06_065518_create_forests_table', 1),
(5, '2019_12_06_070220_create_donations_table', 1),
(6, '2019_12_06_070319_create_transactions_table', 1),
(7, '2019_12_10_152658_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `donation_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endowment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imgurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `verify` tinyint(4) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `imgurl`, `name`, `email`, `email_verified_at`, `password`, `role`, `verify`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Hatta', 'hatta@example.org', NULL, '$2y$10$s.EHLu8yuFHkE7HFyL4QvuN2n/LnxUo0INh7jQVYZWZ9uqBfEIWxy', 1, 0, NULL, '2019-12-10 21:03:35', '2019-12-10 21:03:35'),
(2, NULL, 'admin', 'admin@example.org', NULL, '$2y$10$6oyc9rocZzO0MWOhFCfbp.qiqZIT4xvzdGvEJSnZMSlqbI7MDYxDm', 1, 0, NULL, '2019-12-10 21:05:20', '2019-12-10 21:05:20'),
(3, 'https://lorempixel.com/640/480/?97966', 'Soleh Hutasoit', 'ana89@example.com', '2019-12-10 21:19:18', '$2y$10$bHKEVtNgrsAR8cNd1I8Yo.ETiWKIGgenXGsGYpv4m11.D9YAx6Cqi', 0, 0, 'K9ElnTEfhQyu0x8NE32hEKu5Thr4GO9AhdJCXSRFGmZm5P43EgGALGCfTmu0', '2019-12-10 21:19:18', '2019-12-10 21:19:18'),
(4, 'https://lorempixel.com/640/480/?36251', 'Harimurti Kurniawan', 'jono.hartati@example.com', '2019-12-10 21:19:18', '$2y$10$5/rKi5iEFrbJWpEGN8.VDOF2M3kiIBGQ.rwLxQVDniTxciqbH8VBi', 0, 0, 'nldVPZg2Vn', '2019-12-10 21:19:18', '2019-12-10 21:19:18'),
(5, 'https://lorempixel.com/640/480/?83273', 'Cinthia Aurora Wahyuni S.Kom', 'luyainah@example.net', '2019-12-10 21:19:18', '$2y$10$TOPKBRiLgHqYP2zCPKP11./wScPhXY8TCqkaQgBkWRML9dFVgOoGK', 0, 0, 'Sy9ZQuhwmw', '2019-12-10 21:19:19', '2019-12-10 21:19:19'),
(6, NULL, 'astiti', 'astiti@gmail.com', NULL, '$2y$10$MEuMr5TV4AATByj0DWkDCONrlRoTQ9gTsJ/zSz2Wn6k/5106wEjMO', 0, 0, NULL, '2019-12-10 21:30:42', '2019-12-10 21:30:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donations_forest_id_foreign` (`forest_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forests`
--
ALTER TABLE `forests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forests_name_unique` (`name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_from_user_id_foreign` (`from_user_id`),
  ADD KEY `messages_to_user_id_foreign` (`to_user_id`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_donation_id_foreign` (`donation_id`);

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
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forests`
--
ALTER TABLE `forests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_forest_id_foreign` FOREIGN KEY (`forest_id`) REFERENCES `forests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_donation_id_foreign` FOREIGN KEY (`donation_id`) REFERENCES `donations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
