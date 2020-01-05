-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 08:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Event One', 1, '2020-01-02 06:28:59', '2020-01-02 06:28:59'),
(2, 'Event Two two', 1, '2020-01-02 06:38:18', '2020-01-02 06:58:55'),
(3, 'three', 1, '2020-01-05 06:30:27', '2020-01-05 06:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `blog_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor', 'lorem-ipsum-dolor', '<p><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">So, what if the incoming request parameters do not pass the given validation rules? As mentioned previously, Laravel will automatically redirect the user back to their previous</span></p>', '1577772832.jpg', 1, '2019-12-31 06:14:20', '2019-12-31 00:13:52'),
(2, 'Where does it come from?', 'where-does-it-come-from', '<p><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">Again, notice that we did not have to explicitly bind the error messages to the view in our&nbsp;</span><code class=\" language-php\" style=\"box-sizing: border-box; font-family: source-code-pro, monospace; font-size: 0.8rem; line-height: 1.9; color: #ca473f; background: #fbfbfd; padding: 0px 0.25em; white-space: pre; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px;\"><span class=\"token constant\" style=\"box-sizing: border-box; color: #981d15;\">GET</span></code><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">&nbsp;route. This is because Laravel will check for errors</span></p>', '1577772927.jpg', 1, '2019-12-31 06:15:27', '2019-12-31 00:15:27'),
(3, 'মানুষ হবে মানুষ শুধু', 'মানুষ-হবে-মানুষ-শুধু', '<p><span style=\"color: #4f4f4f; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; font-size: 16px; text-align: justify;\">আমি অধম তাই বলিয়া তুমি উত্তম হইবে না কেনো?\" ভারতের নাগরিক গণনা বা এনআরসি অনেকের মুখোশ খুলে দিয়েছে। যে দল ধর্মনিরপেক্ষতাকে কবর দিয়ে একটি বিশেষ ধর্মকে সংযোজন করেছিলো, সেই দলের মহাসচিব বিবৃতি দিয়েছেন।</span></p>', '1577877206.jpg', 1, '2020-01-01 11:13:26', '2020-01-01 05:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ashraf', 'admin@exp.com', '654894', 'guide assumes intermediate', 'guide assumes intermediateguide assumes intermediateguide assumes intermediateguide assumes intermediateguide assumes intermediate', '2020-01-02 02:41:06', '2020-01-02 02:41:06'),
(2, 'Ashraful Islam', 'admin@exp.com', '654894', 'official guide assumes intermediate level knowledge', 'official guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledge', '2020-01-02 02:48:32', '2020-01-02 02:48:32'),
(3, 'Ashraf', 'admin@email.com', '6548944657', 'At the core of Vue.js is', 'official guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledge', '2020-01-02 03:25:02', '2020-01-02 03:25:02');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_02_043356_create_features_table', 1),
(5, '2019_12_02_043754_create_services_table', 1),
(6, '2019_12_02_043918_create_teams_table', 1),
(7, '2019_12_02_044033_create_priceplans_table', 1),
(8, '2019_12_02_044140_create_plans_table', 1),
(9, '2019_12_02_044326_create_blogs_table', 1),
(10, '2019_12_02_044426_create_contacts_table', 1),
(11, '2019_12_02_051847_create_testimonials_table', 1),
(12, '2019_12_05_081805_create_portfolios_table', 1),
(13, '2019_12_08_110103_create_sliders_table', 1),
(14, '2019_12_30_060834_create_user_query_table', 2),
(15, '2020_01_02_110030_create_albums_table', 3);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priceplans`
--

CREATE TABLE `priceplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `product_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `service_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `type`, `image`, `status`, `service_link`, `created_at`, `updated_at`) VALUES
(1, 'অ্যাম্বুলেন্স সার্ভিস', 'অ্যাম্বুলেন্স-সার্ভিস', '<p>Modals have two optional sizes, available via modifier classes to be placed on ambu</p>', 'সল্পমূল্যে', '1577613055.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddfgfff', '2019-12-29 09:56:01', '2020-01-01 02:00:04'),
(2, 'প্যাথলজিক্যাল পরীক্ষা নিরীক্ষা', 'প্যাথলজিক্যাল-পরীক্ষা-নিরীক্ষা', '<p>Embedding YouTube videos in modals requiresequiresequires</p>', 'সল্পমূল্যে', '1577613220.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddfgfff', '2019-12-29 09:56:07', '2020-01-01 01:50:14'),
(3, 'ফিজিওথেরাপি', 'ফিজিওথেরাপি', '<p>Embedding YouTube videos in a modals requiresEmbedding YouTube videos in modals requires</p>', 'বিনামূল্যে', '1577613924.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddfgfff', '2019-12-29 10:07:00', '2020-01-01 01:51:19'),
(4, 'প্যাথলজিক্যাল পরীক্ষা পরীক্ষা', 'প্যাথলজিক্যাল-পরীক্ষা-পরীক্ষা', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</span></p>', 'সল্পমূল্যে', '1577856307.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdf', '2020-01-01 06:54:35', '2020-01-01 01:52:24'),
(5, 'সেলাই প্রশিক্ষণ', 'সেলাই-প্রশিক্ষণ', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">but also the leap into electronic typesetting, remaining essentially unchanged.</span><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">entially unchanged</span></p>', 'বিনামূল্যে', '1577856538.jpg', 1, 'fb.com/dfgdfg-4566543dsfg', '2020-01-01 06:54:39', '2020-01-01 01:54:25'),
(6, 'বেকার যুবসমাজকে কম্পিউটার প্রশিক্ষণ', 'বেকার-যুবসমাজকে-কম্পিউটার-প্রশিক্ষণ', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">The Slug class itself is pretty simple. createSlug calls getRelatedSlugs which performs a</span></p>', 'বিনামূল্যে', '1577856622.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddf', '2020-01-01 06:54:45', '2020-01-01 01:55:56'),
(7, 'চক্ষু অপারেশন (ছানি), লেন্স প্রতিস্থাপন', 'চক্ষু-অপারেশন-(ছানি),-লেন্স-প্রতিস্থাপন', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</span><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</span></p>', 'বিনামূল্যে', '1577856947.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/d', '2020-01-01 06:54:46', '2020-01-01 01:58:48'),
(8, 'লাশ গোসল', 'লাশ গোসল', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">The Slug class itself is pretty simple. createSlug calls getRelatedSlugs which performs</span></p>', 'বিনামূল্যে', '1577863259.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/d', '2020-01-01 07:20:59', '2020-01-01 07:20:59'),
(9, 'নারী-পুরুষ ও শিশুদের প্রাথমিক চিকিৎসা', 'নারী-পুরুষ-ও-শিশুদের-প্রাথমিক-চিকিৎসা', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">single query selecting all the records that could possibly be a doouplicate</span></p>', 'সল্পমূল্যে', '1577863520.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddf', '2020-01-01 07:25:20', '2020-01-01 01:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_id` int(191) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `caption`, `album_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Throw a caption', 2, '1578204766.jpg', 1, '2019-12-31 10:26:29', '2020-01-05 00:12:46'),
(2, 'Throw a caption second edit', 2, '1577787708.jpg', 1, '2019-12-31 10:26:31', '2020-01-05 00:14:59'),
(3, 'Throw a caption third', 1, '1577857001.jpg', 1, '2019-12-31 10:26:33', '2020-01-05 05:44:58'),
(4, 'Throw a caption forth', 1, '1577857022.jpg', 1, '2019-12-31 10:26:34', '2020-01-05 05:44:59'),
(5, 'Throw a caption fifth', 2, '1577857040.jpg', 1, '2019-12-31 10:26:36', '2020-01-05 05:45:02'),
(6, 'Throw a caption4', 3, '1577857075.jpg', 1, '2020-01-01 05:37:55', '2020-01-05 00:30:57'),
(7, 'Throw a caption 6', 2, '1577857141.jpg', 1, '2020-01-01 05:39:02', '2020-01-05 05:45:05'),
(8, 'Throw a caption 7edit', 1, '1577857187.jpg', 1, '2020-01-01 05:39:47', '2020-01-05 00:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', '2019-12-26 06:28:50', '$2y$12$fR3GSODDP8s6/L1h3I9TsuBsV4ktJ9OLSweCADr0hjy0fhoWYGcYS', NULL, '2019-12-26 06:28:58', '2020-01-05 01:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`id`, `service_id`, `name`, `phone`, `address`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ashraf', '654894', 'dfghjdfgfhjdgh', 'fyryytngjy', 0, '2019-12-31 05:23:32', '2019-12-31 05:23:34'),
(2, 3, 'Ashraful Islam', '875345465', 'reytdfggdnbcvb', 'xfgjfgfgfgjjgkjghgszf', 0, '2019-12-31 05:25:18', '2019-12-31 05:25:19'),
(3, 2, 'Sadique', '65489456679', 'gghjdffdhgfh', 'ttyrghjytftstg', 0, '2019-12-31 05:38:13', '2019-12-31 05:38:13'),
(4, 3, 'Ashraful Hoque', '2346556754', 'sfjghgfhdffsdf', 'cfgbghjthfghfdgs', 0, '2019-12-31 05:40:29', '2019-12-31 05:40:29'),
(5, 1, 'hello world', '6548945663', 'sdgfhjdfjhj', 'dfhlyyrytitfgdfx', 0, '2019-12-31 05:43:04', '2019-12-31 05:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

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
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_title_unique` (`title`);

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priceplans`
--
ALTER TABLE `priceplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_sort_description_unique` (`title`) USING HASH;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priceplans`
--
ALTER TABLE `priceplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
