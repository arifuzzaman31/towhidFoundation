-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 01:21 PM
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
(1, 'One', 1, '2020-01-02 06:28:59', '2020-01-06 05:29:00'),
(2, 'Two', 1, '2020-01-02 06:38:18', '2020-01-06 05:29:19'),
(3, 'three', 1, '2020-01-05 06:30:27', '2020-01-05 06:30:27'),
(4, 'four', 1, '2020-01-23 05:24:13', '2020-01-23 05:24:13'),
(5, 'five', 1, '2020-01-23 05:24:25', '2020-01-23 05:24:25'),
(6, 'six', 1, '2020-01-23 05:24:40', '2020-01-23 05:24:40'),
(7, 'seven', 1, '2020-01-23 05:24:49', '2020-01-23 05:24:49'),
(8, 'Eight', 1, '2020-01-23 05:25:07', '2020-01-23 05:25:07'),
(9, 'Nine', 1, '2020-01-23 05:25:21', '2020-01-23 05:25:21');

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
(1, 'Lorem ipsum dolor', 'Lorem-ipsum-dolor', '<p><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">So, what if the incoming request parameters do not pass the given validation rules? As mentioned previously, Laravel will automatically redirect the user back to their previous. </span><br /><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\"><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">So, what if the incoming request parameters do not pass the given validation rules? As mentioned previously, Laravel will automatically redirect the user back to their previous</span></span></p>', '1577772832.jpg', 1, '2019-12-31 06:14:20', '2020-01-25 22:48:23'),
(2, 'Where does it come from?', 'where-does-it-come-from', '<p><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">Again, notice that we did not have to explicitly bind the error messages to the view in our&nbsp;</span><code class=\" language-php\" style=\"box-sizing: border-box; font-family: source-code-pro, monospace; font-size: 0.8rem; line-height: 1.9; color: #ca473f; background: #fbfbfd; padding: 0px 0.25em; white-space: pre; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px;\"><span class=\"token constant\" style=\"box-sizing: border-box; color: #981d15;\">GET</span></code><span style=\"color: rgba(9, 9, 16, 0.7); font-family: scandia-web, sans-serif; font-size: 16px;\">&nbsp;route. This is because Laravel will check for errors</span></p>', '1577772927.jpg', 1, '2019-12-31 06:15:27', '2019-12-31 00:15:27'),
(3, 'আমি অধম তাই বলিয়া তুমি উত্তম', 'আমি-অধম-তাই-বলিয়া-তুমি-উত্তম', '<p><span style=\"color: #4f4f4f; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; font-size: 16px; text-align: justify;\">আমি অধম তাই বলিয়া তুমি উত্তম হইবে না কেনো?\" ভারতের নাগরিক গণনা বা এনআরসি অনেকের মুখোশ খুলে দিয়েছে। যে দল ধর্মনিরপেক্ষতাকে কবর দিয়ে একটি বিশেষ ধর্মকে সংযোজন করেছিলো, সেই দলের মহাসচিব বিবৃতি দিয়েছেন।</span></p>', '1577877206.jpg', 1, '2020-01-01 11:13:26', '2020-01-25 22:48:59'),
(4, 'since the 1500s is reproduced below', 'since-the-1500s-is-reproduced-below', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>', '1580016350.jpg', 1, '2020-01-26 05:25:50', '2020-01-25 23:25:50'),
(5, 'mbined with a handful of model', 'mbined-with-a-handful-of-model', '<p>combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '1580016496.jpg', 1, '2020-01-26 05:28:16', '2020-01-25 23:28:16');

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
(3, 'Ashraf', 'admin@email.com', '6548944657', 'At the core of Vue.js is', 'official guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledgeofficial guide assumes intermediate level knowledge', '2020-01-02 03:25:02', '2020-01-02 03:25:02'),
(4, 'ryydfg', 'admin@gmail.com', '78564453765', 'Nothing', 'asdffjhgfsnghfgjghjfh', '2020-01-21 23:48:43', '2020-01-21 23:48:43');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `album_id`, `image`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '1578204766.jpg', 'Throw a caption', 1, '2019-12-31 04:26:29', '2020-01-04 18:12:46'),
(2, 2, '1577787708.jpg', 'Throw a caption second', 1, '2019-12-31 04:26:31', '2020-01-06 23:40:12'),
(3, 1, '1577857001.jpg', 'Throw a caption third', 1, '2019-12-31 04:26:33', '2020-01-07 00:30:26'),
(4, 1, '1577857022.jpg', 'Throw a caption forth', 1, '2019-12-31 04:26:34', '2020-01-04 23:44:59'),
(5, 2, '1577857040.jpg', 'Throw a caption fifth', 1, '2019-12-31 04:26:36', '2020-01-04 23:45:02'),
(6, 3, '1577857075.jpg', 'Throw a caption4', 1, '2019-12-31 23:37:55', '2020-01-04 18:30:57'),
(7, 2, '1577857141.jpg', 'Throw a caption 6', 1, '2019-12-31 23:39:02', '2020-01-04 23:45:05'),
(8, 1, '1577857187.jpg', 'Throw a caption 7edit', 1, '2019-12-31 23:39:47', '2020-01-04 18:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `image`, `fb_link`, `tw_link`, `inst_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hasan Ali', 'Admin & HR', '1578477592.jpg', 'fb.com', 'twitter.com', 'instagram.com', 1, '2020-01-09 10:55:48', '2020-01-08 05:07:59'),
(2, 'Shakil Khan', 'Genarel Manager', '1578478678.jpg', 'fb.com', 'twitter.com', 'instagram.com', 1, '2020-01-09 10:55:49', '2020-01-14 04:35:06'),
(3, 'Tarek Anam', 'Coordinator', '1580015679.jpg', 'https//:fb.com', 'https//:twitter.com', 'https//:instagram.com', 1, '2020-01-26 05:14:39', '2020-01-25 23:14:39');

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
(5, '2019_12_02_043754_create_services_table', 1),
(9, '2019_12_02_044326_create_blogs_table', 1),
(10, '2019_12_02_044426_create_contacts_table', 1),
(14, '2019_12_30_060834_create_user_query_table', 2),
(15, '2020_01_02_110030_create_albums_table', 3),
(16, '2020_01_08_065616_create_members_table', 4),
(17, '2020_01_08_073009_create_galleries_table', 5);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `services` (`id`, `title_en`, `title_bn`, `slug`, `description`, `type`, `image`, `status`, `service_link`, `created_at`, `updated_at`) VALUES
(1, 'Ambulance', 'অ্যাম্বুলেন্স সার্ভিস', 'অ্যাম্বুলেন্স-সার্ভিস', '<p>Modals have two optional sizes, available via modifier classes to be placed on ambu</p>', 'সল্পমূল্যে', '1577613055.jpg', 1, 'fb.com', '2019-12-29 09:56:01', '2020-01-14 11:25:24'),
(2, 'Pathological Testing', 'প্যাথলজিক্যাল পরীক্ষা নিরীক্ষা', 'প্যাথলজিক্যাল-পরীক্ষা-নিরীক্ষা', '<p>Embedding YouTube videos in modals requiresequiresequires</p>', 'সল্পমূল্যে', '1577613220.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddfgfff', '2019-12-29 09:56:07', '2020-01-14 11:28:50'),
(3, 'Physiotherapy', 'ফিজিওথেরাপি', 'ফিজিওথেরাপি', '<p>Embedding YouTube videos in a modals requiresEmbedding YouTube videos in modals requires</p>', 'সল্পমূল্যে', '1578463850.jpg', 1, 'fb.com', '2019-12-29 10:07:00', '2020-01-14 11:30:48'),
(4, 'Body cloths, coffins and other materials', 'লাশের কাপড়, কফিন ও অন্যান্য উপকরণ', 'লাশের-কাপড়,-কফিন-ও-অন্যান্য-উপকরণ', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</span></p>', 'সল্পমূল্যে', '1578463562.jpg', 1, 'fb.com', '2020-01-01 06:54:35', '2020-01-14 11:31:23'),
(5, 'Sewing Training', 'সেলাই প্রশিক্ষণ', 'সেলাই-প্রশিক্ষণ', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">but also the leap into electronic typesetting, remaining essentially unchanged.</span><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">entially unchanged</span></p>', 'বিনামূল্যে', '1578464543.jpg', 1, 'fb.com', '2020-01-01 06:54:39', '2020-01-14 11:32:07'),
(6, 'Computer training for unemployed youth', 'বেকার যুবসমাজকে কম্পিউটার প্রশিক্ষণ', 'বেকার-যুবসমাজকে-কম্পিউটার-প্রশিক্ষণ', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">The Slug class itself is pretty simple. createSlug calls getRelatedSlugs which performs a</span></p>', 'বিনামূল্যে', '1578465716.jpg', 1, 'fb.com', '2020-01-01 06:54:45', '2020-01-14 11:32:32'),
(7, 'Eye operation (cataract), lens replacement', 'চক্ষু অপারেশন (ছানি), লেন্স প্রতিস্থাপন', 'চক্ষু-অপারেশন-(ছানি),-লেন্স-প্রতিস্থাপন', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</span><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</span></p>', 'বিনামূল্যে', '1578465091.jpg', 1, 'fb.com', '2020-01-01 06:54:46', '2020-01-14 11:33:25'),
(8, 'The body is bathed', 'লাশ গোসল', 'লাশ গোসল', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">The Slug class itself is pretty simple. createSlug calls getRelatedSlugs which performs</span></p>', 'বিনামূল্যে', '1577863259.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/d', '2020-01-01 07:20:59', '2020-01-14 11:33:54'),
(9, 'First aid for men and women', 'নারী-পুরুষ ও শিশুদের প্রাথমিক চিকিৎসা', 'নারী-পুরুষ-ও-শিশুদের-প্রাথমিক-চিকিৎসা', '<p><span style=\"color: #4a5568; font-family: \'Whitney SSm A\', \'Whitney SSm B\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 18px;\">single query selecting all the records that could possibly be a doouplicate</span></p>', 'সল্পমূল্যে', '1578464596.jpg', 1, 'fb.com/dfgdfg-4566543dsfggdff/ddf', '2020-01-01 07:25:20', '2020-01-14 11:34:22');

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
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`id`, `service_id`, `name`, `phone`, `address`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ashraf', '01553300022', 'dfghjdfgfhjdgh', 'With skipper and Karnataka\'s mainstay bowler R Vinay Kumar moving on to Pondicherry at the start of the season, Mithun has come into his own in a leadership role', 0, '2019-12-31 05:23:32', '2020-01-07 08:45:50'),
(2, 3, 'Ashraful Islam', '875345465', 'reytdfggdnbcvb', 'xfgjfgfgfgjjgkjghgszf', 1, '2019-12-31 05:25:18', '2020-01-07 04:03:08'),
(3, 2, 'Sadique', '65489456679', 'gghjdffdhgfh', 'ttyrghjytftstg', 1, '2019-12-31 05:38:13', '2020-01-07 06:26:23'),
(4, 3, 'Ashraful Hoque', '2346556754', 'sfjghgfhdffsdf', 'cfgbghjthfghfdgs', 1, '2019-12-31 05:40:29', '2020-01-07 23:27:44'),
(5, 1, 'hello world', '6548945663', 'sdgfhjdfjhj', 'dfhlyyrytitfgdfx', 1, '2019-12-31 05:43:04', '2020-01-07 04:03:30'),
(6, 7, 'hello world', '654894', 'estrthfghfgh', 'ffhgtyergfjghj', 1, '2020-01-05 10:01:24', '2020-01-07 04:04:35'),
(7, 8, 'hello world', '654894', 'estrthfghfgh', 'ffhgtyergfjghj', 0, '2020-01-05 10:01:24', '2020-01-05 10:01:24'),
(8, 7, 'Sadique', '654894657', 'ghjdersdhgdf', 'fghsrerutfggghjygtjtrtdr', 0, '2020-01-05 10:04:39', '2020-01-05 10:04:39'),
(9, 5, 'Feri', '01335656776', 'Dhanmondi, Dhaka-1205', 'How to Use Font Awesome 5 on LaravelHow to Use Font Awesome 5 on LaravelHow to Use Font Awesome 5 on LaravelHow to Use Font Awesome 5 on Laravel', 0, '2020-01-07 12:36:40', '2020-01-07 12:36:40'),
(10, 1, 'Shakil Khan', '909949435943', 'Lorem Ispumd', 'Dolor Ispul Dolor suit imor', 0, '2020-01-09 08:08:09', '2020-01-09 08:08:09'),
(11, 2, 'arid', '01949281513', 'dhaka', 'ghjghjkkhjkfghdfgtyhjf', 0, '2020-01-09 09:06:06', '2020-01-09 09:06:06'),
(12, 2, 'arid', '01949281513', 'dhaka', 'ghjghjkkhjkfghdfgtyhjf', 0, '2020-01-09 09:06:31', '2020-01-09 09:06:31'),
(13, 1, 'arid', '01949281513', 'dhaka', 'ghjghjkkhjkfghdfgtyhjf', 0, '2020-01-09 09:11:08', '2020-01-09 09:11:08'),
(14, 2, 'Abir', '01824220935', 'dhaka, BD', 'would suggest the above as it bind the clearinwould suggest the above as it bind the clearin', 0, '2020-01-09 09:47:11', '2020-01-09 09:47:11'),
(15, 3, 'Abir', '01824220935', 'dhaka, BD', 'would suggest the above as it bind the clearinwould suggest the above as it bind the clearin', 0, '2020-01-09 09:47:12', '2020-01-09 09:47:12'),
(16, 5, 'Lemon', '02333888775', 'Feni', 'Manually readjust the modal’s position if the height', 0, '2020-01-09 10:00:23', '2020-01-09 10:00:23'),
(17, 5, 'deva', '56744537567', 'Diago', NULL, 0, '2020-01-09 10:14:32', '2020-01-09 10:14:32'),
(18, 3, 'Mannan', '9866755366', 'dolapur', 'This event fires immediately when the This event fires immediately when the', 0, '2020-01-09 10:24:44', '2020-01-09 10:24:44');

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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_en` (`title_en`) USING HASH;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
