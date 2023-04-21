-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 01:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showtv`
--

-- --------------------------------------------------------

--
-- Table structure for table `animes`
--

CREATE TABLE `animes` (
  `id` int(10) UNSIGNED NOT NULL,
  `anime_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_anime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster_anime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `special` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animes`
--

INSERT INTO `animes` (`id`, `anime_name`, `tags`, `slug`, `date_release`, `description`, `age_classification`, `country`, `imdb`, `image_anime`, `poster_anime`, `youtube_link`, `language`, `name_producer`, `user_name`, `views`, `special`, `status`, `top`, `created_at`, `updated_at`) VALUES
(7, 'Barbara Rose', 'Vitae est accusanti', NULL, '2021', 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيس', 'Select Age Classification', 'أندورا', '3', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRU6_OO8rBlV-gvI498702cg', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRWtPApUCl1ADR1AZqCdz9jQ', 'Dolor sit cupidatat', 'الإنجليزية', 'fdf', 'Colton Crosby', 8, '1', 1, 1, '2021-09-25 12:43:24', '2021-10-01 21:49:48'),
(8, 'Mia Cooper', 'Aut non ea doloribus', 'mia-cooper', '2021', 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور  أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد  أكسير سيتاشن يللأمكو لابورأس نيسي', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'ألبانيا', '27', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', 'https://www.wkrn.com/wp-content/uploads/sites/73/2021/04/Movies-in-TN.jpg?w=876&h=493&crop=1', 'Nulla quod quis ipsu', 'الإنجليزية', 'qsfqsfq', 'Colton Crosby', 3, '1', 1, 1, '2021-09-25 12:58:44', '2021-10-01 21:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'الاكشن'),
(2, 'المغامرة'),
(3, 'إثارة'),
(4, 'الرسوم المتحركة'),
(5, 'السيرة ذاتية'),
(6, 'الكوميديا'),
(7, 'الجريمة'),
(8, 'وثائقي'),
(9, 'دراما'),
(10, 'عائلية'),
(11, 'خيالي'),
(12, 'فيلم اسود و ابيض'),
(13, 'تاريخ'),
(14, 'رعب'),
(15, 'موسيقى'),
(16, 'موسيقي'),
(17, 'الغموض'),
(18, 'رومانسي'),
(19, 'خيال علمي'),
(20, 'فيلم قصير'),
(21, 'رياضة'),
(22, 'خارقة'),
(23, 'حرب'),
(24, 'الغربي');

-- --------------------------------------------------------

--
-- Table structure for table `category_movie`
--

CREATE TABLE `category_movie` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_movie`
--

INSERT INTO `category_movie` (`category_id`, `movie_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(2, 3),
(3, 3),
(11, 4),
(16, 4),
(17, 4),
(20, 5),
(22, 5),
(24, 5),
(11, 6),
(16, 6),
(17, 6),
(2, 7),
(3, 7),
(6, 7),
(2, 8),
(3, 8),
(6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `episode_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb_episode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `season_id`, `episode_name`, `server_1`, `server_2`, `server_3`, `server_4`, `server_5`, `server_6`, `special_server_1`, `special_server_2`, `special_server_3`, `special_download_link_1`, `special_download_link_2`, `special_download_link_3`, `download_link_1`, `download_link_2`, `download_link_3`, `status`, `slug`, `views`, `duration`, `imdb_episode`, `user_name`, `quality`, `created_at`, `updated_at`) VALUES
(4, 5, 'wafym@mailinator.com', 'Obcaecati est enim i', 'Voluptas eum sed dol', 'Quasi dolorem conseq', 'Dolorem provident a', NULL, 'Duis aut ullamco quo', NULL, NULL, NULL, NULL, NULL, NULL, 'In id dolore fugiat', 'Et consectetur est o', 'Est quo voluptas re', 0, 'wafym-at-mailinatorcom', 0, 'Reprehenderit sunt', 'Suscipit obcaecati t', 'hamza', '1080P', '2021-09-27 13:40:08', '2021-09-27 13:40:08'),
(5, 5, 'behuta@mailinator.com', 'Inventore ut quos id', 'Nam cupidatat consec', 'Nostrud aliqua Id', 'Eum non quia et comm', NULL, 'Deserunt eveniet an', NULL, NULL, NULL, NULL, NULL, NULL, 'Ut officiis incididu', 'Molestiae ut debitis', 'Nisi accusantium off', 0, 'behuta-at-mailinatorcom', 0, 'Minima omnis autem d', 'Veniam aut commodi', 'hamza', '720P', '2021-09-27 13:41:21', '2021-09-27 13:41:21'),
(18, 16, 'Penelope Ayers', 'Minim molestiae aut', 'Labore tempor consec', 'Tenetur laboriosam', 'Est saepe fugiat dol', 'Quo non consequatur', 'Neque maxime dolorum', NULL, NULL, NULL, NULL, NULL, NULL, 'Minim fugit laborio', 'Consectetur et quae', 'Ut duis ullam laudan', 0, 'xate-at-mailinatorcom', 0, 'Natus voluptates lab', 'Eos est consequuntu', 'hamza', '720P', '2021-09-27 15:54:53', '2021-09-27 15:55:26'),
(28, 24, 'الحلقة الاولى', 'https://www.youtube.com/embed/pdgiAFL9FIw', 'dqsdqs', 'dsqdqsd', 'fqdsq', 'dqsdqs', 'dqsdqsd', NULL, NULL, NULL, NULL, NULL, NULL, 'sdqs', 'dqs', 'xw', 1, 'alhlk-alaol', 20, 'cwxcqs', 'dqsdqscxcw', 'hamza', '1080P', '2021-09-30 20:47:01', '2021-10-06 22:16:34'),
(29, 24, 'الحلقة الثانية', 'https://www.youtube.com/embed/Kd5Fo6VVceg', 'dsqd', 'dsqdq', 'dsqdqs', 'dqsd', 'dqs', NULL, NULL, NULL, NULL, NULL, NULL, 'dsqdqs', 'dsqdq', 'dsqd', 1, 'alhlk-althany', 3, 'dqs', 'dsq', 'hamza', '1080P', '2021-09-30 20:48:28', '2021-10-06 22:16:34'),
(30, 24, 'الحلقة الثالث', 'https://www.youtube.com/embed/uCUbRuis-Jg', 'dsqd', 'dsqd', 'q', 'dq', 'dqv', NULL, NULL, NULL, NULL, NULL, NULL, 'cwx', 'cw', 'cxwc', 1, 'alhlk-althalth', 2, 'x', 'wcw', 'hamza', '1080P', '2021-09-30 20:49:13', '2021-10-06 22:16:35'),
(31, 25, 'الحلقة الاولى', 'https://www.youtube.com/embed/DR8FJhFi_yk', 'dqs', 'dsqdza', 'dzad', 'dqdad', 'qdq', NULL, NULL, NULL, NULL, NULL, NULL, 'qdza', 'dzqdaz', 'dazdaz', 0, 'alhlk-alaol-2', 4, 'qsdza', 'dzdad', 'hamza', '1080P', '2021-09-30 21:16:31', '2021-09-30 21:16:31'),
(32, 25, 'الحلقة الثانية', 'https://www.youtube.com/embed/tXnQGtTKx-E', 'dsqdd', 'azdqsdaz', 'dqszdaz', 'dqsf', 'dqsdaz', NULL, NULL, NULL, NULL, NULL, NULL, 'dqaz', 'dsqdaz', 'dqsdzad', 0, 'alhlk-althany-2', 0, 'sdaz', 'dsqdazdq', 'hamza', '1080P', '2021-09-30 21:17:29', '2021-09-30 21:17:29'),
(33, 24, 'الحلقة الخامس', 'https://www.youtube.com/embed/zdgxB_4SCNg', 'dqsdqd', 'qsdqsdq', 'dsqdqs', 'dqdq', 'sd', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsfsf', 'sdfsd', 'fsdfsd', 1, 'alhlk-alkhams', 1, 'fsd', 'fsfsdf', 'hamza', '1080P', '2021-09-30 21:30:48', '2021-10-06 22:16:35'),
(34, 24, 'الحلقة السادس', 'dqsdqs', 'dsqdq', 'dsqdqd', 'qsdq', 'dsqdqs', 'dsqdq', NULL, NULL, NULL, NULL, NULL, NULL, 'dsqd', 'dqsd', 'sq', 1, 'alhlk-alsads', 0, 'qs', 'dqsd', 'hamza', '1080P', '2021-09-30 21:31:43', '2021-10-06 22:16:36'),
(35, 24, 'الحلقة السابع', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'alhlk-alsabaa', 0, 'dsq', 'dqs', 'hamza', '1080P', '2021-10-04 16:24:52', '2021-10-06 22:16:37'),
(36, 24, 'الحلقة الثامن', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'alhlk-althamn', 0, 'fdsfs', 'ffsd', 'hamza', '1080P', '2021-10-04 16:25:32', '2021-10-06 22:16:37'),
(37, 24, 'الحلقة التاسع', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'alhlk-altasaa', 0, 'dsq', 'dqs', 'hamza', '1080P', '2021-10-04 16:25:51', '2021-10-06 22:16:38'),
(38, 24, 'الحلقة العاشر', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'alhlk-alaaashr', 0, 'dsq', 'dqs', 'hamza', '1080P', '2021-10-04 16:26:10', '2021-10-06 22:16:38'),
(39, 24, 'الحلقة الاحدا عشر', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'alhlk-alahda-aashr', 0, 'dq', 'dsq', 'hamza', '1080P', '2021-10-04 16:26:27', '2021-10-06 22:16:39'),
(40, 24, 'الموسم التاني', 'Veritatis eos ut ea', 'Veritatis occaecat e', 'Eu officia et quia q', 'Nisi facere dolore a', 'Dolor ex sed at fugi', 'Totam at nulla accus', NULL, NULL, NULL, NULL, NULL, NULL, 'Dolorem architecto e', 'Voluptas reiciendis', 'Quibusdam sint sunt', 1, 'almosm-altany', 0, 'Sint ex quisquam exe', 'Dicta dolor asperior', 'hamza', '1080P', '2021-10-04 19:54:37', '2021-10-06 22:16:39'),
(41, 24, 'الموسم التاني', 'Voluptatem qui tenet', 'Eum magna consequat', 'Recusandae Vitae ve', 'Molestiae iure quis', 'Consequatur Est as', 'Aute molestiae corpo', NULL, NULL, NULL, NULL, NULL, NULL, 'Distinctio Perspici', 'Voluptatem amet et', 'Sunt sunt id officii', 1, 'almosm-altany-2', 0, 'Nisi esse nihil pla', 'Fugiat mollit omnis', 'hamza', '720P', '2021-10-04 19:54:49', '2021-10-06 22:16:40'),
(42, 24, 'الموسم التاني', 'Est placeat volupta', 'Natus alias officiis', 'Exercitationem et si', 'Et voluptate similiq', 'Quam quibusdam quam', 'Distinctio Quidem a', NULL, NULL, NULL, NULL, NULL, NULL, 'Reiciendis quod et N', 'Hic laboris at sunt', 'Pariatur Eaque non', 1, 'almosm-altany-3', 0, 'Eveniet minima eum', 'Accusamus labore por', 'hamza', '480p', '2021-10-04 19:55:14', '2021-10-06 22:16:41'),
(43, 24, 'الموسم التاني', 'Corporis corporis la', 'Exercitationem conse', 'Aut amet perferendi', 'Unde deserunt in ips', 'Possimus dolor volu', 'Eveniet cupidatat p', NULL, NULL, NULL, NULL, NULL, NULL, 'Aut ratione tempor a', 'Nisi omnis laborum', 'Qui soluta debitis n', 1, 'almosm-altany-4', 0, 'Enim temporibus nisi', 'Autem numquam quia a', 'hamza', '1080P', '2021-10-04 19:55:26', '2021-10-06 22:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `episode_animes`
--

CREATE TABLE `episode_animes` (
  `id` int(10) UNSIGNED NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `episode_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb_episode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `special_download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episode_animes`
--

INSERT INTO `episode_animes` (`id`, `season_id`, `episode_name`, `imdb_episode`, `duration`, `quality`, `server_1`, `server_2`, `server_3`, `server_4`, `server_5`, `server_6`, `special_server_1`, `special_server_2`, `special_server_3`, `status`, `slug`, `views`, `special_download_link_1`, `special_download_link_2`, `special_download_link_3`, `download_link_1`, `download_link_2`, `download_link_3`, `user_name`, `created_at`, `updated_at`) VALUES
(6, 7, 'الحلقة الاولى', 'Dolor voluptate sed', 'Officia deleniti ess', '480p', 'Ut et nobis nisi et', 'Anim temporibus quis', 'Nulla saepe ea rerum', 'Eligendi id et animi', 'Dolor aut aperiam su', 'Praesentium cillum l', NULL, NULL, NULL, 1, NULL, 11, NULL, NULL, NULL, 'Voluptatem enim sun', 'Sunt tempor dignissi', 'Nisi fugit et minus', 'Colton Crosby', '2021-09-25 12:43:47', '2021-09-28 16:49:57'),
(7, 7, 'الحلقة التاني', 'Maxime corrupti nis', 'Debitis porro adipis', '1080P', 'Qui placeat commodo', 'Dolor nostrud est si', 'Quam optio reiciend', 'Anim voluptate quos', 'Veritatis reprehende', 'Proident non quos c', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, 'Consectetur quo volu', 'Unde mollit commodi', 'Rerum esse possimus', 'Colton Crosby', '2021-09-25 12:44:51', '2021-10-08 00:50:42');

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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'الاكشن'),
(2, 'المغامرة'),
(3, 'إثارة'),
(4, 'الرسوم المتحركة'),
(5, 'السيرة ذاتية'),
(6, 'الكوميديا'),
(7, 'الجريمة'),
(8, 'وثائقي'),
(9, 'دراما'),
(10, 'عائلية'),
(11, 'خيالي'),
(12, 'تاريخ'),
(13, 'رعب'),
(14, 'موسيقى'),
(15, 'موسيقي'),
(16, 'الغموض'),
(17, 'رومانسي'),
(18, 'خيال علمي'),
(19, 'رياضة'),
(20, 'خارقة'),
(21, 'حرب'),
(22, 'عرض العاب'),
(23, 'أخبار'),
(24, ' برنامج حواري'),
(25, 'تلفزيون الواقع'),
(26, 'الغربي');

-- --------------------------------------------------------

--
-- Table structure for table `genre_serie`
--

CREATE TABLE `genre_serie` (
  `genre_id` int(10) UNSIGNED NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre_serie`
--

INSERT INTO `genre_serie` (`genre_id`, `serie_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(1, 4),
(3, 4),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `image_message`, `category`, `imdb`, `description`, `duration`, `quality`, `language`, `link`, `created_at`, `updated_at`) VALUES
(2, 'the walking dead', 'https://cdn.radiofrance.fr/s3/cruiser-production/2019/10/cc5ac6c1-dbd5-4005-80a0-200b584d08c7/838_1703-1680x1050.webp', 'المغامرة | الكوميديا | وثائقي', '5', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعط', '1h 20min', '1080 hd', 'الانجليزية', 'http://127.0.0.1:7777/details/1', '2021-09-26 18:02:15', '2021-09-26 19:42:39'),
(3, 'breaking bad', 'https://www.highlandernews.org/wp-content/uploads/2012/09/breaking-bad-poster-thumb.jpg', 'دراما  خيالي  تاريخ', '9.1', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس', '1h 50min', '720 p', 'الفرنسية', NULL, '2021-09-26 18:05:29', '2021-09-27 18:58:34');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_05_213629_create_sessions_table', 1),
(7, '2021_08_05_214050_laratrust_setup_tables', 1),
(8, '2021_08_10_135852_create_comments_table', 1),
(9, '2021_08_19_003438_create_movies_table', 1),
(10, '2021_08_19_161931_create_categories_table', 1),
(11, '2021_08_19_165600_create_category_movie_table', 1),
(12, '2021_08_22_200044_create_series_table', 1),
(13, '2021_08_22_200754_create_seasons_table', 1),
(14, '2021_08_22_205738_create_episodes_table', 1),
(15, '2021_08_25_133248_create_genres_table', 1),
(16, '2021_08_25_133721_create_genre_serie_table', 1),
(17, '2021_09_23_233048_create_animes_table', 1),
(18, '2021_09_23_234202_create_types_table', 1),
(19, '2021_09_23_234606_type_anime_table', 1),
(20, '2021_09_24_002433_create_season_animes_table', 1),
(21, '2021_09_24_003045_create_episode_animes_table', 1),
(22, '2021_09_26_170131_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_movie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_poster_movie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_server_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_download_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `special` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `views` double NOT NULL,
  `vote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `description`, `image_movie`, `image_poster_movie`, `class`, `age_classification`, `language`, `quality`, `duration`, `translation`, `imdb`, `slug`, `user_name`, `country`, `tags`, `server_1`, `server_2`, `server_3`, `server_4`, `server_5`, `server_6`, `special_server_1`, `special_server_2`, `special_server_3`, `youtube_link`, `download_link_1`, `download_link_2`, `download_link_3`, `special_download_link_1`, `special_download_link_2`, `special_download_link_3`, `name_producer`, `real_name_actor1`, `real_name_actor2`, `real_name_actor3`, `name_actor1`, `name_actor2`, `name_actor3`, `photo_actor1`, `photo_actor2`, `photo_actor3`, `top`, `special`, `status`, `views`, `vote`, `comment`, `date_release`, `created_at`, `updated_at`) VALUES
(1, 'Aspen Shelton', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَضضضضض', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR86vIOrVOL4SV7dCesPoVkw', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRFRo9gG_rOe-SeWC1Zrhm4w', 'أفلام أجنبية', 'Rated G: General audiences – All ages admitted', 'الإنجليزية', '1080P', '1h:22min', 'translated', '2', 'aspen-shelton', 'Octavia Nixon', 'أندورا', 'Ut proident cupidat', 'https://www.youtube.com/embed/OD-TFLVBBmw', 'https://cloudvideo.tv/emb.html?ox59yv2mf0yw=thumb.cloudvideo.tv/108/01/00582/ox59yv2mf0yw_xt', 'Excepturi officia ex', 'Pariatur Aperiam el', 'Est aut qui Nam adi', 'Officia pariatur Cu', NULL, NULL, NULL, 'https://www.youtube.com/embed/PrXs7QqTiNo', 'Totam accusantium au', 'Tempore culpa minim', 'Ratione asperiores f', NULL, NULL, NULL, 'Ina Stevens', 'Ria Williamson', 'Knox Mccoy', 'Fleur Aguilar', 'Brian Bond', 'Azalia Miles', 'Zephania Drake', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR86vIOrVOL4SV7dCesPoVkw', NULL, NULL, 1, '0', 1, 38, NULL, NULL, '2021', '2021-09-21 10:51:33', '2021-10-15 21:17:44'),
(2, 'Beck Rose', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRd4H08EHFPHDqd1E_rkeGCA', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRUO3vXzT4SoUBrC5xI9A4yg', 'أفلام هندية', 'Rated G: General audiences – All ages admitted', 'الإنجليزية', '1080P', '1h:20min', 'translated', '1', 'beck-rose', 'Octavia Nixon', 'الجزائر', 'Consequatur distinct,qdqdq', 'Anim fuga Dolor vol', 'Vero dolore nisi omn', 'Ut officia aliqua A', 'Libero natus ea cons', 'Mollit sit aliquid e', 'Alias cumque eum min', NULL, NULL, NULL, 'Dolores qui irure mi', 'Ipsum nobis dolores', 'Nulla deleniti quia', 'Neque et officia cor', NULL, NULL, NULL, 'Adrian Simpson', 'Xavier Day', 'Levi Washington', 'Aurora Morse', 'Autumn Neal', 'Tanisha Park', 'Bradley Castaneda', 'Est enim pariatur', 'Ut eius maiores inci', 'Cum numquam in et re', 1, '0', 1, 4, NULL, NULL, '2021', '2021-09-21 11:53:10', '2021-10-15 21:17:49'),
(3, 'Troy Pace', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR1cYbqZQ3HTqvHtTaSP2cLg', 'أفلام أجنبية', 'Rated G: General audiences – All ages admitted', 'الإنجليزية', '1080P', '1h20min', 'translated', '8', 'troy-pace', 'Shoshana Bernard', 'ألبانيا', 'adq,kdqqld', 'Est quos quibusdam a', 'Molestias fuga Irur', 'Placeat cupidatat i', 'Deserunt quia dolori', 'Soluta velit lorem', 'In eiusmod pariatur', NULL, NULL, NULL, 'Exercitationem delen', 'Animi laudantium a', 'Velit fuga In quibu', 'Saepe quis cum qui e', NULL, NULL, NULL, 'Catherine Golden', 'Cedric Quinn', 'Iola Mcmahon', 'Natalie Perez', 'TaShya Mitchell', 'Samantha Herrera', 'Tyler Hart', 'Dicta excepteur atqu', 'Exercitationem quos', 'Qui et velit sed ex', 1, '0', 1, 10, NULL, NULL, '2021', '2021-09-22 19:30:20', '2021-10-11 14:32:45'),
(4, 'Tashya Tucker', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات', 'https://www.cnet.com/a/img/resize/1a674ecf994dc53a3756a94b8c8252f90e88c795/hub/2021/04/19/111f2cf0-1f0e-4884-8733-a4809195773c/shang-chi-poster-marvel.jpg?auto=webp&width=1092', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRWtPApUCl1ADR1AZqCdz9jQ', 'أفلام عربية', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'الإنجليزية', '1080P', '1h 22 min', 'translated', '4', 'tashya-tucker', 'Nola Castro', 'ألبانيا', 'Impedit a aut labor', 'Molestiae dolor iure', 'Officia non voluptat', 'Non est ducimus qui', 'Est eligendi quis v', 'Ut accusamus autem r', 'Obcaecati cum simili', NULL, NULL, NULL, 'Tempore sit incidun', 'Exercitationem commo', 'In quod minus perfer', 'Quaerat in quasi non', NULL, NULL, NULL, 'Serena Rodriguez', 'Bevis Newman', 'Daniel Salazar', 'Whitney Bell', 'Belle Maxwell', 'Naida Burns', 'Claire King', 'Irure laborum Delen', 'Modi doloribus elit', 'Ut ex qui excepteur', 1, '0', 1, 2, NULL, NULL, '2021', '2021-09-23 00:03:33', '2021-10-06 16:56:04'),
(5, 'Samson Perez', 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريدأكسير سيتاشن يللأمكو لابورأس نيسي', 'https://lumiere-a.akamaihd.net/v1/images/image_b97b56f3.jpeg?region=0%2C0%2C540%2C810', 'https://www.wkrn.com/wp-content/uploads/sites/73/2021/04/Movies-in-TN.jpg?w=876&h=493&crop=1', 'أفلام أسيوية', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'الإنجليزية', '1080P', '1h 20min', 'translated', '6', 'samson-perez', 'Inez Harmon', 'الإكوادور', 'Quae quo dolore labo', 'Sunt illo dolor unde', 'Expedita quaerat ut', 'Incididunt ut atque', 'Sint velit voluptat', 'Magni autem sint vol', 'Nulla distinctio Ut', NULL, NULL, NULL, 'Nam id labore et mol', 'Laborum Accusantium', 'Sit nesciunt quia', 'Rem natus aut omnis', NULL, NULL, NULL, 'Rhiannon Ramsey', 'Kamal Trujillo', 'Tana Avila', 'Denise Finley', 'Lester Jackson', 'Ursa Alvarez', 'Rogan Justice', 'Nulla officia velit', 'Enim nostrum occaeca', 'Obcaecati irure obca', 1, '0', 1, 0, NULL, NULL, '2020', '2021-09-23 11:22:50', '2021-10-06 16:56:05'),
(6, 'Germane Lowe', 'خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو', 'https://cdn.pastemagazine.com/www/system/images/photo_albums/best-movie-posters-2016/large/moonlight-ver2-xlg.jpg?1384968217', 'https://cdn.pastemagazine.com/www/articles/main-image.jpg', 'أفلام تركية', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'البرتغالية', '1080P', '1h 20min', 'translated', '7', 'germane-lowe', 'Dorothy Avila', 'النمسا', 'Eos voluptate conseq', 'Ut non incididunt es', 'Laborum tempor at qu', 'Voluptate aut est e', 'Aut et nobis in ea a', 'Aut nemo est corrupt', 'Porro minus adipisci', NULL, NULL, NULL, 'Ipsum officiis enim', 'Deserunt repudiandae', 'Voluptas perspiciati', 'Quod facilis porro p', NULL, NULL, NULL, 'Hunter Shaffer', 'Alisa Dorsey', 'Minerva Hughes', 'Xandra Wynn', 'Miriam Cooke', 'Matthew Herring', 'Leonard Patel', 'Adipisicing ut conse', 'Modi sapiente quod e', 'Exercitation dolores', 1, '0', 1, 0, NULL, NULL, '2009', '2021-09-23 13:58:52', '2021-10-06 16:56:05'),
(7, 'Aphrodite Stanton', 'لافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRfQoN1LdXmV8Nx-SRlfI8gg', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRQDZ0AlrehFHP0TKzJgJ_hg', 'أفلام كرتون', 'Select Age Classification', 'الإنجليزية', '480p', 'Et ex commodi rerum', 'translated', '7', 'aphrodite-stanton', 'Colton Crosby', 'ألبانيا', 'Repudiandae voluptat', NULL, '7', 'Rem ea necessitatibu', 'Molestias numquam do', 'Sint eaque temporib', 'Delectus aliqua Qu', NULL, NULL, NULL, 'Repudiandae aute mol', 'A lorem ipsum amet', 'Ut culpa ullamco ame', 'Eum ex proident aut', NULL, NULL, NULL, 'Valentine Buckner', 'Lucian Burgess', 'Ainsley Olson', 'Walter Cleveland', 'Hayfa Washington', 'Jamalia Patrick', 'Amber Munoz', 'Rerum aut quae exerc', 'Qui eum error maiore', 'Qui reprehenderit u', 1, '0', 1, 26, NULL, NULL, '1900', '2021-09-25 13:45:51', '2021-10-20 22:05:40'),
(8, 'Silas Barrera', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRS7kz5-LXfVPGogooNFz5zA', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRCh2R_sg6ojD-t8GYufGC1Q', 'أفلام انمي', 'Select Age Classification', 'الإنجليزية', '1080P', 'Voluptas ut qui dolo', 'translated', '3', 'silas-barrera', 'Colton Crosby', 'هايتي', 'Quaerat officia elig', 'Ut laboris aliquam c', 'Minim tempora conseq', 'Aspernatur dolorem a', 'Consequatur Nihil u', 'In nulla vitae itaqu', 'Sunt consequuntur ve', NULL, NULL, NULL, 'Quisquam nobis dolor', 'In commodi voluptas', 'Dolor ducimus in re', 'Veniam et cum delec', NULL, NULL, NULL, 'Tasha Bartlett', 'Unity Shepherd', 'Oprah Cortez', 'Travis Bowen', 'Montana Phillips', 'Clare Prince', 'Hanae Gates', 'Cillum in aut sunt', 'Aliqua Aut ea labor', 'Iste eu impedit opt', 1, '0', 1, 0, NULL, NULL, '2019', '2021-09-25 13:56:14', '2021-10-08 00:48:04'),
(13, 'Shelby Woodward', 'Iusto fugit illo te', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Id ut nostrum ea nis', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Vel ut minima perspi', 'translated', '82', 'shelby-woodward', 'hamza', NULL, 'Est nisi quod sint', 'Adipisci aute et odi', 'Quia eius voluptates', 'Vero quod debitis im', 'Totam molestias mole', 'Velit porro beatae e', 'Quibusdam quo labori', NULL, NULL, NULL, 'Sed aliqua Magna vo', 'Labore dolores ratio', 'Magnam possimus obc', 'Quae accusamus tempo', NULL, NULL, NULL, 'Maryam Hurst', 'Cecilia Fowler', 'Suki Waters', 'Zachery Church', 'Keane Harper', 'Macey Brooks', 'Erica Workman', 'Et ex sed consectetu', 'Dolore corrupti fug', 'Aliquip vero ipsa d', 1, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:28:57', '2021-10-08 00:48:06'),
(14, 'Nicholas Love', 'Ad quo et velit par', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Sunt vel adipisicing', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Cupiditate non rem e', 'not translated', '28', 'nicholas-love', 'hamza', NULL, 'Anim voluptatem temp', 'Dolor adipisci verit', 'Rerum velit accusant', 'Tenetur lorem conseq', 'Impedit minima nisi', 'In in adipisicing du', 'Impedit ut est adi', NULL, NULL, NULL, 'Sit ducimus consec', 'Velit non lorem quis', 'Sed ut ut numquam se', 'Anim ut nisi et opti', NULL, NULL, NULL, 'Ryder Alford', 'Jamal Booth', 'William Lawrence', 'Tana Willis', 'Whilemina Jackson', 'Tamara Lynn', 'Moana Stewart', 'Cum a cupiditate min', 'Ut id nobis in repre', 'Molestiae cumque ali', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:29:12', '2021-10-01 23:31:50'),
(15, 'Cherokee Hansen', 'Magna elit voluptat', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Harum voluptatem pl', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Quos magni id harum', 'not translated', '61', 'cherokee-hansen', 'hamza', NULL, 'Enim aliquid corpori', 'Libero velit nesciun', 'Eum illo commodo et', 'Nam minim sit aut i', 'Nihil possimus illu', 'Voluptatem Voluptat', 'Beatae accusantium n', NULL, NULL, NULL, 'Ex recusandae Earum', 'In voluptate sunt om', 'Culpa voluptate ab', 'Est qui recusandae', NULL, NULL, NULL, 'Rylee Donovan', 'Scarlet Zamora', 'Griffith Gomez', 'Avye Hinton', 'Xaviera Albert', 'Rhea Myers', 'Justine Hopkins', 'Beatae deserunt in a', 'Nisi aute saepe hic', 'Voluptate accusamus', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:29:25', '2021-10-01 23:31:56'),
(16, 'Deacon Sawyer', 'Nihil in duis volupt', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Tenetur commodo ea e', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Pariatur Quia corpo', 'not translated', '46', 'deacon-sawyer', 'hamza', NULL, 'Fugiat est dolore e', 'Aliquip a anim culpa', 'Dolor eaque minim fa', 'Id qui ut ullam quis', 'In magnam odio dolor', 'Eaque ea voluptatem', 'Vitae soluta dolores', NULL, NULL, NULL, 'Voluptates possimus', 'Numquam magni et in', 'In unde quam eos en', 'Sunt dolor placeat', NULL, NULL, NULL, 'Maisie Sweeney', 'Keiko Bishop', 'Harriet Carter', 'Jermaine Griffith', 'Hillary Padilla', 'Dillon Herrera', 'Oprah Mack', 'Duis harum et incidi', 'Incididunt enim debi', 'Quam delectus exped', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:29:37', '2021-10-01 23:31:56'),
(17, 'Sebastian Pollard', 'Dolores esse sunt ut', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Aliqua Duis et cons', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Natus minus sapiente', 'translated', '81', 'sebastian-pollard', 'hamza', NULL, 'Nostrum minima ad di', 'Autem est deserunt', 'Voluptates fugiat ex', 'Atque voluptatem po', 'Nisi ab exercitation', 'Officiis modi offici', 'Ullam aliqua Qui mo', NULL, NULL, NULL, 'Adipisci atque labor', 'Sed minima id delect', 'Laboriosam qui blan', 'Ea velit dolore comm', NULL, NULL, NULL, 'Bianca Drake', 'Kasimir Richards', 'Dominic Gallagher', 'Scott Stokes', 'Haley Gibson', 'Marny Rivers', 'Harper Sykes', 'Iusto ex officiis re', 'Est omnis excepteur', 'Voluptatem dolore il', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:01', '2021-10-01 23:31:57'),
(18, 'Juliet Buckner', 'Nobis id qui maiores', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Totam aliqua Enim p', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Sit illo aut non quo', 'not translated', '54', 'juliet-buckner', 'hamza', NULL, 'Dolorum sit necessi', 'Labore qui culpa nu', 'Dolorem consequatur', 'Qui assumenda sit q', 'Deleniti reprehender', 'Quibusdam incididunt', 'Tempor ut molestiae', NULL, NULL, NULL, 'Ducimus ullamco con', 'Eligendi at expedita', 'Voluptate non quasi', 'Praesentium consequa', NULL, NULL, NULL, 'Ayanna Craig', 'Brian Gay', 'Risa Garrison', 'Karina Nash', 'Sonia Sherman', 'Lillith Pittman', 'Emi Johns', 'Omnis et rem aut dol', 'Rerum aut alias dolo', 'Quasi sunt commodo r', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:10', '2021-10-01 23:31:57'),
(19, 'Edward Obrien', 'Itaque labore sint', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Explicabo Illum ex', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Omnis eligendi susci', 'translated', '78', 'edward-obrien', 'hamza', NULL, 'Illo velit aperiam', 'Nostrum incidunt re', 'Est excepturi aut s', 'Magnam saepe perfere', 'Enim et est atque al', 'Iste ut reiciendis N', 'Incididunt proident', NULL, NULL, NULL, 'Expedita eum enim ve', 'Corrupti eos cupid', 'Eius dolorem Nam ut', 'Id quis ut in odio q', NULL, NULL, NULL, 'Shafira Norris', 'Kamal Patton', 'Dante Collier', 'Leroy Benjamin', 'Rebecca Downs', 'Inez Tyson', 'Hedy Abbott', 'Voluptate aliquam au', 'Error est et et nem', 'Consequatur Non rep', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:18', '2021-10-01 23:31:59'),
(20, 'Nathaniel Vega', 'Aute laborum necessi', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Excepturi sed repell', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Architecto et est n', 'translated', '23', 'nathaniel-vega', 'hamza', NULL, 'Aliquam veniam volu', 'Ea aut enim omnis qu', 'Aliquam velit occae', 'Nam optio quia dign', 'Excepteur quo repell', 'Minima elit ut enim', 'Excepteur praesentiu', NULL, NULL, NULL, 'Necessitatibus neque', 'Eu qui provident di', 'Iusto enim labore de', 'Aspernatur tempor es', NULL, NULL, NULL, 'Casey Eaton', 'Alfonso Rush', 'Allen Levy', 'Hop Mills', 'Emmanuel Norris', 'Levi Mclean', 'Jocelyn Castillo', 'Animi duis dolore e', 'Rerum asperiores non', 'Fuga Tenetur quibus', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:25', '2021-10-01 23:31:59'),
(21, 'Lars Cortez', 'Suscipit aut numquam', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Placeat recusandae', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Incididunt perferend', 'translated', '94', 'lars-cortez', 'hamza', NULL, 'Aut excepturi incidu', 'Nemo quam laboris er', 'Deleniti ducimus ip', 'Tempora id earum ali', 'Non aut hic architec', 'Laborum necessitatib', 'Odit voluptas eu fug', NULL, NULL, NULL, 'Aut vitae corporis m', 'Sit cupidatat modi a', 'Modi eu cumque sunt', 'Ullam esse ullamco d', NULL, NULL, NULL, 'Alfonso Carson', 'Aiko Workman', 'Rhona Turner', 'Herrod Clarke', 'Omar Hayes', 'Ria Shepard', 'Damon Mclaughlin', 'Cupiditate duis accu', 'Mollitia maxime quae', 'Aperiam ullamco quas', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:34', '2021-10-01 23:32:00'),
(22, 'Preston Patton', 'Et qui omnis nulla e', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Eligendi aliquip mol', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Rerum voluptatem Od', 'translated', '7', 'preston-patton', 'hamza', NULL, 'Autem quam sed aut u', 'Non sint cupiditate', 'Consequat Nemo moll', 'Velit nostrum dolore', 'Numquam id perferend', 'Doloribus voluptates', 'Vitae qui ea debitis', NULL, NULL, NULL, 'Eos esse quae volu', 'Corrupti omnis eaqu', 'Accusantium sit porr', 'Hic reiciendis volup', NULL, NULL, NULL, 'Britanni Morin', 'Iona Alvarado', 'Ethan Kane', 'Neville Higgins', 'Ila Herrera', 'Aristotle Hicks', 'Octavia Mcgee', 'Nobis sit voluptate', 'Pariatur Dolorem di', 'Exercitationem in op', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:31:43', '2021-10-01 23:32:00'),
(23, 'Sawyer Hinton', 'Aspernatur voluptate', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Nobis in velit deser', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Obcaecati mollit ips', 'translated', '42', 'sawyer-hinton', 'hamza', NULL, 'Quae provident opti', 'Qui labore corporis', 'Enim reprehenderit', 'Culpa aliqua Numqua', 'Possimus debitis di', 'Harum qui laudantium', 'Quae amet iure nihi', NULL, NULL, NULL, 'Nesciunt laborum od', 'Tenetur quia at sit', 'Ad laudantium est i', 'At aut id in sed qui', NULL, NULL, NULL, 'Alika Roach', 'Chastity Grimes', 'Chantale Duran', 'Jana Haney', 'Oren Mckee', 'Ashton Hays', 'Charity Kidd', 'Aliqua Earum explic', 'Sed ut doloribus lau', 'Ut et ratione eum ni', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:32:37', '2021-10-01 23:32:37'),
(24, 'Cody Mcmahon', 'Nulla dolore eiusmod', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Sequi et explicabo', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'In placeat dolor mo', 'translated', '38', 'cody-mcmahon', 'hamza', NULL, 'Quis est sit invento', 'Nisi non eu recusand', 'Ullamco aut maiores', 'Alias ipsum consecte', 'Aut adipisicing eos', 'Aliquip reprehenderi', 'Doloremque in vero p', NULL, NULL, NULL, 'Sint fugiat sit nos', 'At in similique sunt', 'Quasi corrupti cons', 'Aut veniam tempore', NULL, NULL, NULL, 'Gregory Lester', 'Piper Waters', 'Allegra Mcfadden', 'Gretchen Holcomb', 'Deacon Hahn', 'Diana Mendez', 'Lane Hubbard', 'Obcaecati laborum qu', 'Dolorem ex libero ve', 'Nam enim omnis in qu', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:32:45', '2021-10-01 23:32:45'),
(25, 'Keane Knapp', 'Ex qui magna qui vel', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Omnis reprehenderit', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Dolor ducimus dolor', 'not translated', '36', 'keane-knapp', 'hamza', NULL, 'Nisi cillum qui accu', 'Ipsam ut tempora eni', 'Id velit sunt aut i', 'Laudantium et autem', 'Ad accusantium qui p', 'Reiciendis rerum dol', 'Incidunt earum nece', NULL, NULL, NULL, 'Molestiae et quis si', 'Exercitationem porro', 'Perspiciatis eum el', 'Sint sit quos est', NULL, NULL, NULL, 'Hilda Brown', 'Brennan Gilmore', 'Ian Franco', 'Iris Hunter', 'Brent Campbell', 'Tobias Baxter', 'Felicia House', 'Eum hic explicabo D', 'Velit at reiciendis', 'Debitis consequatur', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:32:53', '2021-10-01 23:32:53'),
(26, 'Yeo Mccoy', 'Tempore at adipisic', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Odit architecto exce', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Veniam numquam volu', 'translated', '89', 'yeo-mccoy', 'hamza', NULL, 'Rerum quo autem dolo', 'Aspernatur dolor ut', 'Dolores qui repellen', 'Et esse quas ut rep', 'Quia consequat Dolo', 'Corporis vitae recus', 'Sapiente et voluptat', NULL, NULL, NULL, 'Doloribus sapiente i', 'Et odit accusantium', 'Consectetur incididu', 'Ut placeat obcaecat', NULL, NULL, NULL, 'Micah Moon', 'Adele Kemp', 'Elvis Crane', 'Gwendolyn Prince', 'Lillith Woods', 'Vaughan Lynch', 'Hilda Johnston', 'Ullam et exercitatio', 'Mollitia culpa qui', 'Aliquip incididunt e', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:02', '2021-10-01 23:33:02'),
(27, 'Giacomo Roberson', 'Adipisci nemo irure', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Non consequat Beata', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Perferendis et dolor', 'translated', '20', 'giacomo-roberson', 'hamza', NULL, 'Voluptatem Ratione', 'Vero dolores odio do', 'Officia qui in ab fu', 'Consequatur et ut qu', 'Elit ex sed dolor t', 'Expedita pariatur U', 'Aperiam ad autem nob', NULL, NULL, NULL, 'Atque autem doloribu', 'Illum eiusmod ipsam', 'Proident odio et la', 'Nostrud eos labore o', NULL, NULL, NULL, 'Ebony Bauer', 'Irene Mcintosh', 'Megan Mooney', 'Isaiah Mckay', 'Anika Rice', 'Zachary England', 'Kasimir Stephens', 'Doloremque ex totam', 'Quidem fugiat possi', 'Enim consectetur et', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:10', '2021-10-01 23:33:10'),
(28, 'Nevada Cantu', 'Tenetur eum tempora', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Odio ea explicabo E', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Quis ad consequatur', 'not translated', '61', 'nevada-cantu', 'hamza', NULL, 'Cum beatae adipisci', 'Do lorem perspiciati', 'In voluptatem ducimu', 'Qui pariatur Fugiat', 'Elit sint id minim', 'Id sed sed nesciunt', 'Molestiae Nam labore', NULL, NULL, NULL, 'Quis recusandae Vol', 'Nulla error voluptat', 'Et aut autem aliqua', 'Do et debitis volupt', NULL, NULL, NULL, 'Adrian Bolton', 'Gray Bradley', 'Samantha Pace', 'Oleg Coleman', 'Hilel Santiago', 'Lisandra Thomas', 'August Bean', 'Architecto ab volupt', 'Voluptatibus unde na', 'Similique voluptate', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:20', '2021-10-01 23:33:20'),
(29, 'Bethany Suarez', 'Blanditiis dolorem e', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Voluptatibus volupta', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Quibusdam qui ex non', 'not translated', '14', 'bethany-suarez', 'hamza', NULL, 'Dolor mollitia et lo', 'Qui ab officia offic', 'Est necessitatibus t', 'Voluptatem et quia p', 'Quae qui qui sequi o', 'Consequatur Ea adip', 'Mollit dolor et expl', NULL, NULL, NULL, 'Aute laboriosam vel', 'Esse quidem tenetur', 'Non aliquid inventor', 'Facilis laboris in o', NULL, NULL, NULL, 'Leroy Pate', 'Kiona Becker', 'Cecilia Weber', 'Jerry Oneil', 'Kyla Cook', 'Rama Golden', 'James Crawford', 'Optio reprehenderit', 'Dolorem anim obcaeca', 'Quidem sint velit', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:27', '2021-10-01 23:33:27'),
(30, 'Kyla Welch', 'Rerum sed laborum ea', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Et quas eligendi omn', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Ut odio exercitation', 'not translated', '5', 'kyla-welch', 'hamza', NULL, 'Necessitatibus tempo', 'Qui ut expedita opti', 'Fugit alias volupta', 'Laborum aut veritati', 'Voluptatem consectet', 'Minima eligendi in c', 'Optio elit est id', NULL, NULL, NULL, 'Est atque reprehende', 'Obcaecati voluptatem', 'Dolores velit qui q', 'Quia saepe nisi lore', NULL, NULL, NULL, 'Summer Kelly', 'Nichole Floyd', 'Neve Bishop', 'Shelby Ryan', 'Lucius Swanson', 'Eleanor Castillo', 'Kylan Santana', 'Quidem irure rerum c', 'Cupidatat occaecat m', 'Obcaecati molestiae', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:38', '2021-10-01 23:33:38'),
(31, 'Kirsten Meadows', 'Tempora in assumenda', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'At voluptatum aspern', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Eum cillum eaque lib', 'not translated', '8', 'kirsten-meadows', 'hamza', NULL, 'Accusantium occaecat', 'Nihil ut ea esse in', 'Et eius autem quam a', 'Id est dolor ducimus', 'Elit non expedita v', 'Distinctio Lorem el', 'Sed voluptas sit tem', NULL, NULL, NULL, 'Voluptas reprehender', 'Est ex est dolor acc', 'Quo aliquam aliquam', 'Minim ad in qui est', NULL, NULL, NULL, 'Holmes Mayo', 'Lucian Silva', 'Micah Sanchez', 'Thor Maddox', 'Julian Reilly', 'Raja Fulton', 'Nita House', 'Nihil do reprehender', 'Laboris quia quisqua', 'Aut a sit ut placeat', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:48', '2021-10-01 23:33:48'),
(32, 'Vladimir Chambers', 'Reiciendis do quisqu', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Sint non itaque qui', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Enim elit debitis m', 'translated', '66', 'vladimir-chambers', 'hamza', NULL, 'Ullamco quasi dolor', 'Non asperiores repre', 'Magna veritatis et f', 'Non labore aut volup', 'Aliquid illum sed p', 'Nulla laudantium ex', 'Eiusmod sequi id dui', NULL, NULL, NULL, 'Ex impedit non id', 'Necessitatibus minim', 'Sit illum voluptat', 'Consequuntur volupta', NULL, NULL, NULL, 'Cora Oneill', 'Dakota Rosa', 'Yael Kirkland', 'Barbara Shepherd', 'Brent Ray', 'Odette Simmons', 'Thane Cotton', 'Recusandae Et et ve', 'Voluptatem Ut quam', 'In repellendus Non', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:33:56', '2021-10-01 23:33:56'),
(33, 'Deirdre Hatfield', 'Voluptatem eum excep', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Consectetur ut quis', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Consequatur Facilis', 'translated', '22', 'deirdre-hatfield', 'hamza', NULL, 'Ex voluptas sed inve', 'Occaecat non ut volu', 'Dolorum nobis ipsum', 'Enim doloremque labo', 'Quis dignissimos ill', 'Iste minima quaerat', 'Dolorem ratione inci', NULL, NULL, NULL, 'Nisi consectetur ex', 'Id distinctio Quae', 'Deserunt aliquam tem', 'Officiis aut unde nu', NULL, NULL, NULL, 'Mari Kidd', 'Cameran King', 'James Navarro', 'Kiara Scott', 'Wynne Solis', 'Chandler Nguyen', 'Alyssa Stein', 'Molestiae exercitati', 'Quia ad quaerat numq', 'Nesciunt aut quia a', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:34:11', '2021-10-01 23:34:11'),
(34, 'Bruce Castaneda', 'Velit in similique e', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Id eos esse libero', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Rem dignissimos vita', 'not translated', '2', 'bruce-castaneda', 'hamza', NULL, 'Rerum sit elit mai', 'Quo et magni fugit', 'Porro aut quidem inc', 'Ut dolor nobis sed q', 'Eu dolore eu delectu', 'In error nostrud qui', 'Officia numquam corp', NULL, NULL, NULL, 'Voluptate est omnis', 'Perferendis nisi mag', 'Ipsum quis dolor qu', 'Sit voluptates ipsum', NULL, NULL, NULL, 'Joseph Osborne', 'Kay Fulton', 'Jaime Woods', 'Gail Larson', 'Rachel Bauer', 'Solomon Chambers', 'Breanna Munoz', 'Rerum ut incididunt', 'Sunt aspernatur qui', 'Officia iste consequ', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:34:21', '2021-10-01 23:34:21'),
(35, 'Magee Gregory', 'Minim aut hic autem', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Nam do eaque quia te', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Eos ad possimus se', 'translated', '88', 'magee-gregory', 'hamza', NULL, 'Debitis perspiciatis', 'Earum eos elit proi', 'Ullamco in id cumque', 'Est inventore sit a', 'Aliquid ut et et nec', 'Dolorum est qui odit', 'Autem ea excepteur d', NULL, NULL, NULL, 'Totam consectetur c', 'Culpa eveniet tempo', 'Commodi labore et ve', 'Nesciunt ipsam nequ', NULL, NULL, NULL, 'Jaime Pearson', 'Charde Warren', 'Joel Hutchinson', 'Jael Bentley', 'Preston Barnes', 'Charissa Mcmillan', 'Salvador Matthews', 'Quo qui cupiditate i', 'Ab voluptas pariatur', 'Ullamco accusantium', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:34:30', '2021-10-01 23:34:30'),
(36, 'Geoffrey Romero', 'Quod omnis amet qui', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Duis deserunt cumque', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Ex nostrum aut est c', 'translated', '98', 'geoffrey-romero', 'hamza', NULL, 'Sint ab error volup', 'Veniam et aliquip e', 'Culpa quo dicta quis', 'Tempor voluptatum qu', 'Irure voluptate atqu', 'Amet nisi vel bland', 'Aliquip ipsa repell', NULL, NULL, NULL, 'Laboris labore natus', 'Sit optio non et se', 'Mollit ipsa est et', 'Itaque a dolor volup', NULL, NULL, NULL, 'Peter Parrish', 'Giselle Joyce', 'Maryam Moreno', 'Megan Robbins', 'Alexandra Travis', 'Nichole Frank', 'Wynter Lamb', 'Asperiores magna eli', 'Sint laborum Enim n', 'Pariatur Magni dele', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:34:40', '2021-10-01 23:34:40'),
(37, 'Griffin Randall', 'Esse voluptate sit', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Blanditiis ea blandi', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Quis elit asperiore', 'translated', '64', 'griffin-randall', 'hamza', NULL, 'Fugiat deserunt ut s', 'Libero magni quos no', 'Et molestias unde nu', 'Praesentium numquam', 'Sunt est soluta fug', 'Sed do est nihil re', 'Similique omnis quo', NULL, NULL, NULL, 'Cumque ut sunt ab ir', 'Facere inventore dol', 'Omnis elit quasi of', 'Iusto laborum Rem a', NULL, NULL, NULL, 'Iris Pierce', 'Nasim Campos', 'Sebastian Dillon', 'Cameron Nolan', 'Malik Vargas', 'Jennifer Hogan', 'Courtney Daugherty', 'Irure voluptate nisi', 'Nisi quo rerum tempo', 'Aut repudiandae in v', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:34:48', '2021-10-01 23:34:48'),
(38, 'Keaton Pierce', 'Dolore aut excepturi', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Cupidatat quo est do', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Ratione perferendis', 'translated', '86', 'keaton-pierce', 'hamza', NULL, 'Suscipit perferendis', 'Voluptatem Enim sed', 'Tempor eius odio dic', 'Delectus duis offic', 'Sint nihil similique', 'Nisi tenetur officia', 'Consequatur Sed exc', NULL, NULL, NULL, 'At id est adipisci q', 'Aut cupidatat exerci', 'Id voluptates omnis', 'Anim maxime mollitia', NULL, NULL, NULL, 'Shoshana Travis', 'Scott Higgins', 'Cadman Rush', 'Raja Mccarthy', 'Cherokee Mayer', 'Aileen Brennan', 'Cailin Kirk', 'Qui anim aut necessi', 'Dolores nihil volupt', 'Molestiae qui minim', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:35:15', '2021-10-01 23:35:15'),
(39, 'Kasper Green', 'Iure maiores omnis p', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Eaque est aut ut et', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Molestiae dolorum di', 'not translated', '9', 'kasper-green', 'hamza', NULL, 'Dolorem autem in sed', 'Autem consequuntur u', 'Inventore minim qui', 'In esse enim deseru', 'Natus ipsam id provi', 'Quia esse vel tenetu', 'Sit id non iusto ut', NULL, NULL, NULL, 'Ex aliquid aut venia', 'Dolorem ratione temp', 'Veritatis sed laboru', 'Quam non ad magni ad', NULL, NULL, NULL, 'Lisandra Cunningham', 'Madonna Schwartz', 'Mollie Cook', 'Ifeoma Ramirez', 'Marvin Quinn', 'Vernon Wheeler', 'Logan Talley', 'Eos animi cupidata', 'Voluptas non officia', 'Reiciendis sed adipi', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:35:27', '2021-10-01 23:35:27'),
(40, 'Lawrence Bean', 'Et et cupiditate ad', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Aspernatur sunt ulla', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Qui tempor ad repudi', 'translated', '97', 'lawrence-bean', 'hamza', NULL, 'Cupidatat numquam co', 'Esse mollitia asperi', 'Dolore occaecat poss', 'Repudiandae id in e', 'Vitae facilis Nam ve', 'Quos ipsa magnam ul', 'Veniam architecto i', NULL, NULL, NULL, 'Voluptatibus vel qui', 'Dolor magnam saepe d', 'Dicta maxime laborum', 'Dicta dicta labore a', NULL, NULL, NULL, 'Savannah Wood', 'Cecilia Ratliff', 'Madaline Fischer', 'Harding Bradley', 'Amethyst Berry', 'Emerson Hart', 'Byron Leonard', 'Ipsam sit voluptate', 'Veniam sunt quia ea', 'In ut dolore porro a', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:35:37', '2021-10-01 23:35:37'),
(41, 'Deanna Cobb', 'Quae quae dolorem en', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Est commodi consequ', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Enim et velit sed be', 'not translated', '55', 'deanna-cobb', 'hamza', NULL, 'Ducimus ea porro ea', 'Magnam neque tenetur', 'Eaque ipsam accusant', 'Eum quia quisquam su', 'Commodi nostrud blan', 'Reprehenderit ut eo', 'Nulla molestiae irur', NULL, NULL, NULL, 'Dolore blanditiis ex', 'Illum in id veniam', 'Quis eos omnis sapie', 'Magnam dignissimos q', NULL, NULL, NULL, 'Berk Lara', 'Savannah Perkins', 'Angela Conner', 'Quinn Mccall', 'Channing Ayala', 'Vaughan Luna', 'Harper Fletcher', 'Necessitatibus volup', 'Occaecat ullamco off', 'Esse ipsum vel mol', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:35:53', '2021-10-01 23:35:53'),
(42, 'Zorita Talley', 'Culpa rem tenetur ab', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Beatae ipsa dolor p', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Nobis irure cupidita', 'translated', '57', 'zorita-talley', 'hamza', NULL, 'Hic quos excepteur p', 'Veritatis ullamco en', 'Dolore voluptas ad a', 'Ipsum blanditiis lor', 'Corporis autem ad in', 'Et consequatur volu', 'Aut est dolorem volu', NULL, NULL, NULL, 'Consequatur praesen', 'Veniam velit at ame', 'Mollit amet aut qui', 'Dolorem quis ducimus', NULL, NULL, NULL, 'Brody Gibbs', 'Peter Ross', 'Joy Roach', 'Cyrus Cotton', 'Illana Whitaker', 'Tasha Patel', 'Daphne Fuller', 'Et odit proident et', 'Enim aut qui dolor q', 'Quaerat consequatur', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:42:42', '2021-10-01 23:42:42'),
(43, 'Marah Henry', 'Consectetur incidun', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Dolores iste et sed', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Voluptatem sed sit i', 'not translated', '46', 'marah-henry', 'hamza', NULL, 'Non nisi repudiandae', 'Officia incididunt a', 'Quo illum dolorum e', 'Quia nesciunt error', 'Deserunt sunt saepe', 'Et qui maiores conse', 'Officiis rerum illum', NULL, NULL, NULL, 'Aut nobis quae in te', 'Et est magna blandi', 'Eum neque quibusdam', 'Est harum sunt unde', NULL, NULL, NULL, 'Carson Baird', 'Theodore Pearson', 'Gemma Humphrey', 'Nasim Knox', 'Rhiannon Rogers', 'Lara Byrd', 'Alexander Schroeder', 'Quod quia est velit', 'Iste at est consequ', 'Doloremque aperiam q', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:42:52', '2021-10-01 23:42:52'),
(44, 'Shafira Francis', 'Aut saepe esse pers', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Error dicta autem en', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Consectetur magni ve', 'not translated', '25', 'shafira-francis', 'hamza', NULL, 'Nemo magni similique', 'Eos blanditiis omnis', 'Et aliquam qui disti', 'Expedita sit ut cupi', 'Ipsam sed neque inci', 'Sunt iste cum labori', 'Voluptates ut est mi', NULL, NULL, NULL, 'Facilis saepe tempor', 'Distinctio Placeat', 'Eaque dignissimos in', 'Quas sed quidem nesc', NULL, NULL, NULL, 'Barrett Stewart', 'Azalia Craft', 'Abra Powers', 'Erica Shaffer', 'Macon Walsh', 'Mariam Gay', 'Sean Skinner', 'Proident maiores ex', 'Labore perspiciatis', 'Delectus fugit ius', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:43:05', '2021-10-01 23:43:05'),
(45, 'Ila Salas', 'Ipsa accusantium ip', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Magna distinctio Et', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Aut aut enim lorem t', 'translated', '73', 'ila-salas', 'hamza', NULL, 'Voluptas dolor conse', 'Sit qui dignissimos', 'Dolor sit et nobis', 'Autem totam ea volup', 'Magnam esse magni al', 'Dolor dolore dolore', 'Aut consequatur ad', NULL, NULL, NULL, 'Odit velit vero enim', 'Doloribus eum volupt', 'Blanditiis soluta nu', 'Consequatur quasi r', NULL, NULL, NULL, 'Kaden Newman', 'Nayda Fernandez', 'Chastity Phelps', 'Amity Hooper', 'Fitzgerald Cummings', 'Logan Mckinney', 'Geoffrey Jones', 'Aliquip fugit illum', 'Ut in placeat conse', 'Natus reiciendis eum', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:43:15', '2021-10-01 23:43:15'),
(46, 'Lawrence Fisher', 'Voluptatem Esse of', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Aliquam culpa dolor', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Omnis delectus expl', 'translated', '47', 'lawrence-fisher', 'hamza', NULL, 'Non quia quisquam do', 'Porro rerum ipsum u', 'Quasi culpa veniam', 'Et elit quis aliqua', 'Consectetur nihil no', 'Aute exercitation mo', 'Similique dolorem qu', NULL, NULL, NULL, 'Et porro perferendis', 'Autem voluptatibus d', 'Ab voluptatem harum', 'Et voluptate odit qu', NULL, NULL, NULL, 'Jordan Barnett', 'Adele Terry', 'Kevin Whitehead', 'Eve English', 'Veda Booth', 'Willa Reed', 'Gray Bonner', 'Nemo eum sint quos c', 'In iste autem dolor', 'Ab quo nihil a alias', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:43:24', '2021-10-01 23:43:24'),
(47, 'Lucy Bryan', 'Iure temporibus null', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Non modi in dignissi', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Sit quidem corporis', 'not translated', '88', 'lucy-bryan', 'hamza', NULL, 'Enim expedita sit es', 'Esse velit harum se', 'Harum enim in est m', 'Nostrud eu velit sit', 'Ut aut numquam qui r', 'Nulla culpa aliquam', 'Nobis dolorem aute o', NULL, NULL, NULL, 'Labore esse invento', 'Laborum ipsum ad a', 'Et officia sint deb', 'Excepturi quia est', NULL, NULL, NULL, 'Jessamine Manning', 'Sylvester Chambers', 'Shea Vaughan', 'Athena Harrell', 'Portia Cohen', 'Molly Galloway', 'Malcolm Stein', 'Fugiat voluptatibus', 'Qui quia nesciunt e', 'In voluptas optio c', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:43:41', '2021-10-01 23:43:41'),
(48, 'Tasha Acevedo', 'Atque aspernatur qui', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Tempore provident', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Voluptas quasi lorem', 'not translated', '97', 'tasha-acevedo', 'hamza', NULL, 'Dolor aute dolores u', 'Cum ex est assumenda', 'Ex natus exercitatio', 'Veniam porro maiore', 'Officia aliquid rati', 'Dolorem ad deleniti', 'Ipsum sed nihil even', NULL, NULL, NULL, 'Dolores voluptates d', 'Culpa molestiae ape', 'Illum accusamus ali', 'Porro adipisicing ve', NULL, NULL, NULL, 'Brittany Blake', 'Nolan Walsh', 'Regan Lott', 'Brielle Cote', 'Chanda Carter', 'Ingrid Wilder', 'Bruno Hendricks', 'Repudiandae enim par', 'Eiusmod quis omnis i', 'Quod consequatur Qu', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:01', '2021-10-01 23:44:01'),
(49, 'Seth Strickland', 'Voluptas ea adipisic', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Inventore iure quis', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Aperiam dolor qui as', 'not translated', '96', 'seth-strickland', 'hamza', NULL, 'Dolorem ea quisquam', 'Fugiat delectus eaq', 'Hic lorem laboriosam', 'Sed ullam consequatu', 'Ipsa dolor nostrum', 'Libero amet est und', 'Qui iure quis ut sed', NULL, NULL, NULL, 'Perspiciatis quod e', 'Et ullamco autem est', 'Non et sed autem sun', 'Sint quos aut qui a', NULL, NULL, NULL, 'Murphy Britt', 'Ivana Mcneil', 'Octavius Sellers', 'Sandra Howe', 'Bell Randall', 'Elmo Ryan', 'Xandra Evans', 'Sint asperiores labo', 'Adipisci reprehender', 'At dolor labore do o', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:11', '2021-10-01 23:44:11'),
(50, 'Tallulah Parsons', 'Est dicta labore rep', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Et fugiat mollitia u', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '1080P', 'Fugiat quasi esse l', 'not translated', '75', 'tallulah-parsons', 'hamza', NULL, 'Est et quidem saepe', 'Voluptatum provident', 'Aute quia adipisci a', 'Illum rerum asperio', 'Culpa itaque ullam', 'Perferendis magna do', 'Et nisi est ex ex q', NULL, NULL, NULL, 'Do repellendus Non', 'Aut quidem voluptas', 'Magni sit ipsum non', 'In cillum illum per', NULL, NULL, NULL, 'Troy Shelton', 'Slade Hobbs', 'Rose Pollard', 'Martina Buckner', 'Kessie Barrera', 'Herman Sloan', 'Hilda Castaneda', 'Aut dicta alias quo', 'Nesciunt molestiae', 'Aspernatur error con', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:22', '2021-10-01 23:44:22'),
(51, 'Dora Mcdaniel', 'Distinctio Voluptat', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Culpa alias ea maio', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '720P', 'Omnis dolor magnam v', 'translated', '40', 'dora-mcdaniel', 'hamza', NULL, 'Consequatur Quia ut', 'In velit blanditiis', 'Recusandae Voluptat', 'Aliquid aut do quam', 'Aut a dolorem libero', 'Ipsum alias tenetur', 'Iure atque sequi sus', NULL, NULL, NULL, 'Quaerat iure volupta', 'Magnam soluta perspi', 'Elit vero reprehend', 'Ut accusantium rerum', NULL, NULL, NULL, 'Darrel Lynch', 'Bo Holland', 'Megan Carter', 'Kieran Young', 'Kitra Whitaker', 'Heather Lynn', 'Ivory Stephens', 'Saepe beatae volupta', 'Adipisci ab ea quod', 'Officiis ad nostrum', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:31', '2021-10-01 23:44:31'),
(52, 'Hayes Perkins', 'Culpa sunt dolorum', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Omnis perferendis un', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Quasi ea unde ut tot', 'translated', '73', 'hayes-perkins', 'hamza', NULL, 'Tenetur molestiae iu', 'Repellendus Eaque r', 'Quis reiciendis est', 'Quae quaerat dolorem', 'Et consectetur expl', 'In culpa sunt non', 'Ducimus aliqua Est', NULL, NULL, NULL, 'Velit minima suscip', 'Maiores ad enim offi', 'Odio ad incididunt a', 'Beatae aut vero enim', NULL, NULL, NULL, 'Deirdre Crane', 'Zia Huber', 'Armand Oliver', 'Paul Stein', 'Ferdinand Holmes', 'Orla Stanley', 'Kai Church', 'Possimus optio non', 'Natus et temporibus', 'Earum ullamco sit mi', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:41', '2021-10-01 23:44:41'),
(53, 'Kerry Martinez', 'Non similique nisi p', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'Officia fuga Invent', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Quam aut quas ea qua', 'translated', '2', 'kerry-martinez', 'hamza', NULL, 'Dolor duis minim cor', 'Consequatur velit q', 'Iure omnis sed dolor', 'Consectetur vel id a', 'Officia qui quisquam', 'Id exercitationem i', 'Esse quis odio dolor', NULL, NULL, NULL, 'Voluptate nihil assu', 'Deserunt repudiandae', 'Suscipit qui officia', 'Eligendi aut ut null', NULL, NULL, NULL, 'Dana Collins', 'Lee Manning', 'Avram Madden', 'Angela Wade', 'Maya Stevens', 'Darryl Pearson', 'Cooper Baker', 'Reprehenderit ut nih', 'Alias est et qui num', 'Commodo consequatur', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:44:55', '2021-10-01 23:44:55'),
(54, 'Valentine Cantu', 'Quidem exercitatione', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'In enim sequi tempor', 'أفلام أجنبية', 'Select Age Classification', 'الإنجليزية', '480p', 'Corporis quis molest', 'translated', '51', 'valentine-cantu', 'hamza', NULL, 'Incididunt maiores p', 'Et voluptas facere v', 'Esse consequatur ex', 'Temporibus et laudan', 'Deserunt hic rerum n', 'Iusto error nobis qu', 'Eos dolorem iure vi', NULL, NULL, NULL, 'Doloribus ipsam qui', 'Maiores magni quam a', 'In ab et quam offici', 'Consequatur possimu', NULL, NULL, NULL, 'Theodore Skinner', 'Kellie Sandoval', 'Talon Knowles', 'Kylee Patton', 'Moses Harmon', 'Freya Britt', 'Jasper Douglas', 'Omnis et qui irure t', 'Aliquam dicta aute a', 'Et optio voluptas p', 0, '0', 1, 0, NULL, NULL, '1900', '2021-10-01 23:45:05', '2021-10-01 23:45:05');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-10-21 17:43:18', '2021-10-21 17:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(3, 'user', 'User', 'User', '2021-10-21 17:43:18', '2021-10-21 17:43:18'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-10-21 17:43:18', '2021-10-21 17:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL,
  `season_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `photo_season` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `serie_id`, `season_name`, `slug`, `status`, `photo_season`, `youtube_link`, `number`, `views`, `user_name`, `created_at`, `updated_at`) VALUES
(5, 4, 'qyjisaco@mailinator.com', NULL, 0, 'noma@mailinator.com', 'Tempor corrupti vol', '6', 0, 'hamza', '2021-09-27 13:22:24', '2021-09-27 15:43:50'),
(16, 4, 'japivewepu@mailinator.com', 'japivewepu-at-mailinatorcom', 0, 'rebota@mailinator.com', 'Est consequatur In', '97', 0, 'hamza', '2021-09-27 13:42:03', '2021-09-27 13:42:03'),
(24, 1, 'الموسم التاني', 'almosm-altany', 1, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRktYqTIrzwYf_e16KXT3Y8w', 'https://www.youtube.com/embed/J24dcA4bBd8', '1', 29, 'hamza', '2021-09-30 20:44:19', '2021-10-06 22:16:25'),
(25, 1, 'الموسم الثالث', 'almosm-althalth', 1, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRzmIdcClBkP6XGa3jCI14og', 'https://www.youtube.com/embed/jBDYMR_pIGw', '3', 4, 'hamza', '2021-09-30 20:45:51', '2021-10-06 22:16:26'),
(26, 1, 'الموسم الرابع', 'almosm-alrabaa', 0, 'fsd', 'fds', 'fsdfs', 0, 'hamza', '2021-09-30 21:43:18', '2022-08-16 16:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `season_animes`
--

CREATE TABLE `season_animes` (
  `id` int(10) UNSIGNED NOT NULL,
  `anime_id` int(10) UNSIGNED NOT NULL,
  `season_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `season_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `season_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `season_animes`
--

INSERT INTO `season_animes` (`id`, `anime_id`, `season_name`, `season_number`, `youtube_link`, `user_name`, `slug`, `views`, `status`, `season_image`, `created_at`, `updated_at`) VALUES
(7, 7, 'الموسم الاول', '716', 'Nisi est ipsam even', 'Colton Crosby', NULL, 8, 1, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', '2021-09-25 12:43:32', '2021-09-25 16:53:26'),
(10, 7, 'الموسم التاني', '3', 'Tempora laborum Ist', 'Colton Crosby', 'wewasu-at-mailinatorcom', 0, 1, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', '2021-09-25 13:01:41', '2021-10-08 00:49:20'),
(11, 7, 'الموسم الثالث', '8', 'Labore et magni aute', 'Colton Crosby', 'bocalomowi-at-mailinatorcom', 0, 1, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', '2021-09-25 13:02:19', '2021-10-08 00:49:21'),
(12, 7, 'الموسم الرابع', '796', 'Voluptatibus invento', 'Colton Crosby', NULL, 0, 0, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', '2021-09-25 13:02:49', '2021-10-08 00:48:56'),
(13, 7, 'الموسم الخامس', '24', 'Aut ab est nemo dolo', 'Colton Crosby', NULL, 0, 0, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRZ7tV9MJHZNYHyr-SKBpLeg', '2021-09-25 13:06:21', '2021-10-08 00:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `serie_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_serie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serie_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_poster_serie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_producer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_name_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_productor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_actor3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` double NOT NULL,
  `special` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `top` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `serie_name`, `description`, `age_classification`, `class_serie`, `language`, `imdb`, `slug`, `user_name`, `country`, `tags`, `serie_photo`, `image_poster_serie`, `youtube_link`, `name_producer`, `real_name_actor1`, `real_name_actor2`, `real_name_actor3`, `name_actor1`, `name_actor2`, `name_actor3`, `photo_productor`, `photo_actor1`, `photo_actor2`, `photo_actor3`, `date_release`, `views`, `special`, `status`, `top`, `created_at`, `updated_at`) VALUES
(1, 'oxygen', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ', 'Rated G: General audiences – All ages admitted', 'مسلسلات هندية', 'الإنجليزية', '7', 'oxygen', 'hamza', 'تشيلي', 'jfs,fs', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR86vIOrVOL4SV7dCesPoVkw', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRFRo9gG_rOe-SeWC1Zrhm4w', '8fdksn', 'pro1', 'real act 1', 'real act 2', 'real act 3', 'act 1', 'act 2', 'act 3', NULL, 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRxC2ILQ15t5yimjMzyw49wg', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRktYqTIrzwYf_e16KXT3Y8w', NULL, '2021', 22, '1', 1, 1, '2021-09-21 11:04:58', '2021-09-28 00:42:24'),
(4, 'Aspen Shelton', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي ت', 'Rated G: General audiences – All ages admitted', 'مسلسلات أسيوية', 'الإنجليزية', '11', 'aspen-shelton', 'hamza', 'تشاد', 'qdqsd', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRU6_OO8rBlV-gvI498702cg', 'https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR1cYbqZQ3HTqvHtTaSP2cLg', 'dqdaz', 'dqsdazd', 'azdaz', 'dazd', 'fdsfa', 'qzdazd', 'daz', 'ffdsfs', NULL, 'dzada', 'dazdf', 'azd', '2021', 5, '1', 1, 1, '2021-09-21 12:07:45', '2021-09-27 15:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IvbLc8al6JtesQ7WPzB2WjOEKQCZwrsqsUDWgU2O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGdTY3EwUmprWnFVNTdJemRYdjRXcDQwRkNGajl4SURxc3BFVTlOSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZWxmYXp5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1665503527),
('rMx2A1QC5mGUzdFtW2fr3ubZk2jl9Lyu1G8d60G8', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 OPR/91.0.4516.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiRkhKZkU4UU9SVktkVWlYQ2JXZ3d3NngyOTBTWXdMTFBONDc4QmlMQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRyNWc2VnEyeWJsRy9SOGF1dTBweWF1RVhxS3dPN2oyUVNVd2NMNHgwN1I5TGFYOWUvTXpoUyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcjVnNlZxMnlibEcvUjhhdXUwcHlhdUVYcUt3TzdqMlFTVXdjTDR4MDdSOUxhWDllL016aFMiO30=', 1665159642);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'الاكشن'),
(2, 'المغامرة'),
(3, 'إثارة'),
(5, 'السيرة ذاتية'),
(6, 'الكوميديا'),
(7, 'الجريمة'),
(8, 'وثائقي'),
(9, 'دراما'),
(10, 'عائلية'),
(11, 'خيالي'),
(12, 'تاريخ'),
(13, 'رعب'),
(14, 'موسيقى'),
(15, 'موسيقي'),
(16, 'الغموض'),
(17, 'رومانسي'),
(18, 'خيال علمي'),
(19, 'رياضة'),
(20, 'خارقة'),
(21, 'حرب'),
(22, 'عرض العاب'),
(23, 'أخبار'),
(24, ' برنامج حواري'),
(25, 'تلفزيون الواقع'),
(26, 'الغربي');

-- --------------------------------------------------------

--
-- Table structure for table `type_anime`
--

CREATE TABLE `type_anime` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `anime_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_anime`
--

INSERT INTO `type_anime` (`type_id`, `anime_id`) VALUES
(6, 7),
(7, 7),
(3, 8),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `user_image`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(10, 'hamza', 'talha', '1632780251.jpg', 'hamza_ta7@hotmail.com', NULL, '$2y$10$r5g6Vq2yblG/R8auu0pyauEXqKwO7j2QSUwcL4x07R9LaX9e/MzhS', NULL, NULL, NULL, NULL, NULL, '2021-09-23 12:21:10', '2021-09-27 19:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_movie`
--
ALTER TABLE `category_movie`
  ADD KEY `category_movie_category_id_foreign` (`category_id`),
  ADD KEY `category_movie_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_season_id_foreign` (`season_id`);

--
-- Indexes for table `episode_animes`
--
ALTER TABLE `episode_animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episode_animes_season_id_foreign` (`season_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre_serie`
--
ALTER TABLE `genre_serie`
  ADD KEY `genre_serie_genre_id_foreign` (`genre_id`),
  ADD KEY `genre_serie_serie_id_foreign` (`serie_id`);

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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seasons_serie_id_foreign` (`serie_id`);

--
-- Indexes for table `season_animes`
--
ALTER TABLE `season_animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `season_animes_anime_id_foreign` (`anime_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_anime`
--
ALTER TABLE `type_anime`
  ADD KEY `type_anime_type_id_foreign` (`type_id`),
  ADD KEY `type_anime_anime_id_foreign` (`anime_id`);

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
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `episode_animes`
--
ALTER TABLE `episode_animes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `season_animes`
--
ALTER TABLE `season_animes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_movie`
--
ALTER TABLE `category_movie`
  ADD CONSTRAINT `category_movie_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `episode_animes`
--
ALTER TABLE `episode_animes`
  ADD CONSTRAINT `episode_animes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `season_animes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genre_serie`
--
ALTER TABLE `genre_serie`
  ADD CONSTRAINT `genre_serie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genre_serie_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `seasons_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `season_animes`
--
ALTER TABLE `season_animes`
  ADD CONSTRAINT `season_animes_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_anime`
--
ALTER TABLE `type_anime`
  ADD CONSTRAINT `type_anime_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_anime_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
