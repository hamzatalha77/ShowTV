-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 04:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Action', NULL, NULL),
(2, 'Anime', NULL, NULL),
(3, 'Arabic Nostalgia', NULL, NULL),
(4, 'Arabic-Language', NULL, NULL),
(5, 'Award-Winning', NULL, NULL),
(6, 'Children & Family', NULL, NULL),
(7, 'Classics', NULL, NULL),
(8, 'Comedies', NULL, NULL),
(9, 'Crime', NULL, NULL),
(10, 'Documentaries', NULL, NULL),
(11, 'Dramas', NULL, NULL),
(12, 'Fantasy', NULL, NULL),
(13, 'Hollywood', NULL, NULL),
(14, 'Horror', NULL, NULL),
(15, 'Independent', NULL, NULL),
(16, 'Music & Musicals', NULL, NULL),
(17, 'Romance', NULL, NULL),
(18, 'sci-Fi', NULL, NULL),
(19, 'Sports', NULL, NULL),
(20, 'Stand-Up-Comedy', NULL, NULL),
(21, 'Thriller', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_movie`
--

CREATE TABLE `category_movie` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_movie`
--

INSERT INTO `category_movie` (`category_id`, `movie_id`) VALUES
(1, 1),
(3, 1),
(6, 1),
(2, 2),
(3, 2),
(1, 3),
(3, 3),
(11, 3),
(1, 4),
(16, 4),
(19, 4),
(3, 5),
(17, 5),
(18, 5),
(2, 6),
(4, 6),
(7, 6),
(1, 7),
(5, 7),
(8, 7),
(6, 8),
(13, 8),
(16, 8),
(2, 9),
(4, 9),
(20, 9),
(1, 10),
(3, 10),
(5, 10),
(1, 12),
(11, 12),
(17, 12);

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
  `episode_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb_episode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `season_id`, `episode_name`, `episode_link`, `download_link`, `imdb_episode`, `status`, `slug`, `duration`, `user_name`, `quality`, `created_at`, `updated_at`) VALUES
(6, 3, 'first episode', 'qehr5WUfJUk', 'Quae adipisicing pra', '9', 0, 'desoce-at-mailinatorcom', '2h', 'Blaine Foreman', '1080P', '2021-08-26 14:12:39', '2021-09-06 16:39:43'),
(7, 3, 'second episode', 'FXFVurmBRek', 'Nihil rerum omnis ip', '8', 0, 'karly-boyle-season-1-episode-1', '1h', 'Blaine Foreman', '1080P', '2021-08-28 01:29:12', '2021-09-06 16:40:19'),
(8, 3, 'Karly Boyle season 1 episode 2', 'Consequatur sunt et', 'Nemo adipisci minima', 'Porro commodo conseq', 0, 'karly-boyle-season-1-episode-2', 'Sed id quam qui in', 'Aurelia Robbins', '720P', '2021-08-28 01:29:35', '2021-08-28 01:29:35'),
(9, 3, 'Karly Boyle season 1 episode 3', 'Doloremque enim et v', 'Quae voluptatum dolo', 'Rerum nulla non non', 0, 'karly-boyle-season-1-episode-3', 'Molestiae totam expl', 'Aurelia Robbins', '360p', '2021-08-28 01:29:48', '2021-08-28 01:29:48'),
(10, 14, 'episode 1', 'Xj2Rtakpn2c', NULL, '4', 0, 'episode-1', '1h', 'Blaine Foreman', '1080P', '2021-09-06 17:25:02', '2021-09-06 17:25:02'),
(11, 14, 'episode 2', 'DiSDNLpGYgM', NULL, '8', 0, 'episode-2', '3h', 'Blaine Foreman', '1080P', '2021-09-06 17:25:40', '2021-09-06 17:25:40'),
(12, 15, 'episode 1', 'EKYhbtmcoo', NULL, '8', 0, NULL, '9h', 'Blaine Foreman', '1080P', '2021-09-06 17:26:11', '2021-09-06 17:26:11'),
(13, 15, 'episode 2', 'CsCnG4OCfGU', NULL, '6', 0, NULL, '6h', 'Blaine Foreman', '1080P', '2021-09-06 17:27:02', '2021-09-06 17:27:02'),
(14, 15, 'episode 32', 'CsCnG4OCfGU', NULL, '5', 0, 'episode-32', '1h', 'Blaine Foreman', '1080P', '2021-09-06 17:27:57', '2021-09-06 17:27:57'),
(15, 11, 'episode 1', 'cL_D86o6yRA', NULL, '8', 0, NULL, '1h', 'Glenna Hayes', '1080P', '2021-09-06 20:42:59', '2021-09-06 20:42:59');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Action', NULL, NULL),
(2, 'Anime', NULL, NULL),
(3, 'Asian', NULL, NULL),
(4, 'British', NULL, NULL),
(5, 'Comedies', NULL, NULL),
(6, 'Crime', NULL, NULL),
(7, 'Docuseries', NULL, NULL),
(8, 'Dramas', NULL, NULL),
(9, 'European', NULL, NULL),
(10, 'Horror', NULL, NULL),
(11, 'Kids', NULL, NULL),
(12, 'Middle Eastern', NULL, NULL),
(13, 'Reality & Talk', NULL, NULL),
(14, 'Romance', NULL, NULL),
(15, 'Sci-Fi & Fantasy', NULL, NULL),
(16, 'Science & Nature', NULL, NULL),
(17, 'Teen', NULL, NULL),
(18, 'Thriller', NULL, NULL),
(19, 'Turkish', NULL, NULL),
(20, 'Us', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre_serie`
--

CREATE TABLE `genre_serie` (
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `serie_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre_serie`
--

INSERT INTO `genre_serie` (`genre_id`, `serie_id`) VALUES
(2, 1),
(6, 1),
(2, 2),
(3, 2),
(7, 2),
(3, 3),
(6, 3),
(2, 5),
(7, 5),
(2, 6),
(3, 6),
(6, 6),
(2, 7),
(4, 7),
(5, 7),
(1, 8),
(5, 8),
(7, 8),
(2, 9),
(3, 9),
(17, 9),
(4, 3),
(2, 4),
(4, 4),
(6, 4);

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
(254, '2014_10_12_000000_create_users_table', 1),
(255, '2014_10_12_100000_create_password_resets_table', 1),
(256, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(257, '2019_08_19_000000_create_failed_jobs_table', 1),
(258, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(259, '2021_08_05_213629_create_sessions_table', 1),
(260, '2021_08_05_214050_laratrust_setup_tables', 1),
(261, '2021_08_10_135852_create_comments_table', 1),
(262, '2021_08_19_003438_create_movies_table', 1),
(263, '2021_08_19_161931_create_categories_table', 1),
(264, '2021_08_19_165600_create_category_movie_table', 1),
(265, '2021_08_22_200044_create_series_table', 1),
(266, '2021_08_22_200754_create_seasons_table', 1),
(267, '2021_08_22_205738_create_episodes_table', 1),
(268, '2021_08_25_133248_create_genres_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_movie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `download_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `views` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movie_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `description`, `image_movie`, `class`, `age_classification`, `language`, `quality`, `duration`, `translation`, `imdb`, `slug`, `user_name`, `country`, `tags`, `download_link`, `name_producer`, `real_name_actor1`, `real_name_actor2`, `real_name_actor3`, `name_actor1`, `name_actor2`, `name_actor3`, `photo_productor`, `photo_actor1`, `photo_actor2`, `photo_actor3`, `status`, `views`, `vote`, `comment`, `date_release`, `movie_link`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, 'Rashad Atkinson', 'كياسي أرشيتيكتو بيتاي فيتاي ديكاتا سيونت أكسبليكابو. نيمو أنيم أبسام فوليوباتاتيم كيواي  فوليوبتاس سايت أسبيرناتشر أيوت أودايت أيوت فيوجايت, سيد كيواي كونسيكيونتشر ماجناي  دولارس أيوس كيواي راتاشن', '1630717720.jpg', 'translated movies', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'الإنجليزية', '1080P', '1h 42min', 'translated', '9', 'rashad-atkinson', 'Amos Good', 'الجزائر', 'Accusantium voluptat', 'Voluptatem iusto et', 'Merrill Compton', 'Aaron Petersen', 'fzefesfsf', 'szefze', 'Vladimir Savage', 'Lyle Booker', 'Chloe Moran', NULL, '1630109619.jpg', '1630109619.jpg', '1630109619.png', 1, NULL, NULL, NULL, '2021', 'Aliquip qui ut qui v', 'Obcaecati necessitat', '2021-08-27 09:51:43', '2021-09-07 21:57:24'),
(2, 'the second movie', 'dsvfzfef', '1630633976.jpg', 'translated movies', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'Afrikaans', '480p', '05:00:00', 'translated', '5', 'the-second-movie', 'Aurelia Robbins', 'Select a state...', 'dsq,dsqdqs', 'fsdfze', 'fdscz', 'fzefe', 'fsfzfz', 'fsfgzegb', 'fzefs', 'fsdze', 'fzefz', NULL, '1630108811.png', '1630108811.jpg', '1630108811.jpg', 1, NULL, NULL, NULL, '2021-08-28', 'fdsz', 'https://www.youtube.com/embed/XLB_MyyJuec', '2021-08-27 22:09:11', '2021-09-03 00:52:56'),
(3, 'Darrel Perkins', 'Enim ad a molestiae', '1630183386.JPG', 'translated movies', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'Afrikaans', '1080P', '07:00:00', 'translated', '7', 'darrel-perkins', 'Aladdin Chang', 'أنغولا', 'Vero minus consequat,gfdgger,ggdfdl', 'Non repudiandae inve', 'Alyssa Hart', 'Lane Pittman', NULL, NULL, 'James Solis', 'Logan Hall', 'Trevor Yang', '1630183386.JPG', '1630183386.JPG', '1630183386.JPG', '1630183386.JPG', 1, NULL, NULL, NULL, 'year', 'Quos in laboris null', 'Esse iusto excepturi', '2021-08-28 19:43:06', '2021-09-07 21:26:09'),
(4, 'Zephania Shields', 'Qui facere aut maxim', '1630183556.JPG', 'translated movies', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'Afrikaans', '480p', '02:00:00', 'not translated', '69', 'zephania-shields', 'Aladdin Chang', 'Algeria', 'Ut nulla,fsdhf,fzfzfz', 'Ut deleniti dolorem', 'Constance Medina', 'Tamekah Golden', NULL, NULL, 'Lacy Workman', 'Cleo Ballard', 'Zenia Raymond', '1630183556.JPG', '1630183556.JPG', '1630183556.JPG', '1630183556.JPG', 1, NULL, NULL, NULL, '12-Sep-1987', 'Alias quis inventore', 'Laboris ut consequat', '2021-08-28 19:45:56', '2021-08-28 19:47:30'),
(5, 'Thane Russell2', 'Magni ut quia ullam', '1630633960.jpg', 'translated movies', 'Select Age Classification', 'Afrikaans', '1080P', '02:00:05', 'translated', '42', 'thane-russell', 'Aladdin Chang', 'Select a state...', 'Rerum corrupti volu,gdsge,gsgerhj', 'Eius reiciendis offi', 'Kimberley Gibbs', 'Amal Holder', NULL, NULL, 'Hedy Rios', 'Ryder Winters', 'Nichole Marks', '1630183642.JPG', '1630183642.JPG', '1630183642.JPG', '1630183642.JPG', 1, NULL, NULL, NULL, '1972-04-27', 'Tempore et iure vol', 'Nihil at commodi ut', '2021-08-28 19:47:22', '2021-09-03 00:52:40'),
(6, 'Levi Chang', 'Molestiae rerum fugi', '1630316313.JPG', 'japanese movies', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Armenian', '1080P', '02:00:00', 'translated', '4', 'levi-chang', 'Teagan Gray', 'Albania', 'Dicta eveniet enim', 'Dolorem incididunt i', 'Cheryl Mcclain', 'Leilani White', NULL, NULL, 'Kareem Yates', 'Alyssa Marquez', 'Valentine Young', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '30-Jan-2005', 'Officia enim sed mol', 'Occaecat minus sed a', '2021-08-30 08:38:33', '2021-08-30 08:41:16'),
(7, 'Owen Lopez', 'Totam impedit nisi', '1630316348.JPG', 'korean movies', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'Basque', '1080P', '01:00:02', 'translated', '79', 'owen-lopez', 'Teagan Gray', 'Angola', 'Suscipit proident t', 'Impedit eaque molli', 'McKenzie Medina', 'Hayes Holden', NULL, NULL, 'Ryan Roach', 'Randall Warner', 'Michael Olsen', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '01-Dec-1979', 'Voluptas dolor proid', 'Ad sequi voluptate c', '2021-08-30 08:39:08', '2021-08-30 08:41:17'),
(8, 'Iona Lowery', 'Molestiae eiusmod eo', '1630316420.JPG', 'japanese movies', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Maori', '240p', '01:00:00', 'not translated', '94', 'iona-lowery', 'Teagan Gray', 'Algeria', 'In accusamus animi', 'Consequatur numquam', 'Harrison Soto', 'Slade Hodge', NULL, NULL, 'Richard Schneider', 'Demetria Webb', 'Mark Rosales', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '07-Feb-2012', 'Ipsum consequuntur', 'Neque voluptatem Qu', '2021-08-30 08:40:20', '2021-08-30 08:41:18'),
(9, 'Coby Conley', 'Adipisci enim quas m', '1630316452.JPG', 'korean movies', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Basque', '720P', '01:00:00', 'translated', '1', 'coby-conley', 'Teagan Gray', 'American Samoa', 'Totam debitis error', 'Excepturi debitis et', 'Noble Cooke', 'Rinah Duke', NULL, NULL, 'Orlando Pitts', 'Hilda Whitaker', 'Lara Vazquez', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '10-May-1992', 'Neque eos et reicien', 'Quia aut dolores cum', '2021-08-30 08:40:52', '2021-08-30 08:41:19'),
(10, 'Karly Boyle', 'وبنمسيتنربصسن بيسمبتسلايصثتبصث بسيمبىنسلا', '1630972747.jpg', 'translated movies', 'Rated PG: Parental guidance suggested – Some material may not be suitable for children.', 'Arabic', '1080P', '00:00:00', 'translated', '2', 'karly-boyle', 'Glenna Hayes', 'Afganistan', 'jflknfs,efsd,n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2021-09-07', NULL, NULL, '2021-09-06 22:59:07', '2021-09-07 12:11:07'),
(12, 'game of thrones', 'ببسيبستىس بىيسمرىلاعاقى ىيسمبىسخعص', '1631020113.jpg', 'translated movies', 'Rated G: General audiences – All ages admitted', 'Afrikaans', '1080P', '1h 44min', 'translated', '6', 'game-of-thrones', 'Jaden Cotton', 'الأرجنتين', 'game', NULL, 'mjid mbarki', 'dqffa', 'fdqfaze', 'fzefe', 'alex', 'saad', 'ahmada', NULL, '1631020113.jpg', '1631020113.jpg', '1631020113.jpg', 1, NULL, NULL, NULL, 'year', NULL, NULL, '2021-09-07 12:08:33', '2021-09-07 12:17:03');

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
(1, 'users-create', 'Create Users', 'Create Users', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-08-25 21:49:51', '2021-08-25 21:49:51');

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
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(3, 'user', 'User', 'User', '2021-08-25 21:49:51', '2021-08-25 21:49:51'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-08-25 21:49:51', '2021-08-25 21:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 12, 'App\\Models\\User'),
(2, 13, 'App\\Models\\User'),
(2, 14, 'App\\Models\\User'),
(2, 15, 'App\\Models\\User'),
(2, 16, 'App\\Models\\User'),
(2, 17, 'App\\Models\\User'),
(2, 18, 'App\\Models\\User'),
(2, 19, 'App\\Models\\User'),
(2, 20, 'App\\Models\\User'),
(2, 21, 'App\\Models\\User'),
(2, 22, 'App\\Models\\User'),
(2, 23, 'App\\Models\\User'),
(2, 24, 'App\\Models\\User'),
(2, 25, 'App\\Models\\User'),
(2, 26, 'App\\Models\\User'),
(2, 27, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User');

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
  `imdb_season` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `serie_id`, `season_name`, `slug`, `status`, `photo_season`, `youtube_link`, `number`, `imdb_season`, `user_name`, `created_at`, `updated_at`) VALUES
(3, 3, 'karly bolye season 1', 'wyhyzu-at-mailinatorcom', 0, '1630893568.jpg', 'Aut perspiciatis am', '67', '799', 'Joseph Manning', '2021-08-26 12:52:44', '2021-09-06 00:59:28'),
(11, 3, 'Karly Boyle season 2', 'karly-boyle-season-2', 0, '1630893609.jpg', 'dqsf,lz', 'season 2', '5', 'Joseph Manning', '2021-08-28 01:09:57', '2021-09-06 01:00:09'),
(12, 3, 'Karly Boyle season 3', 'karly-boyle-season-3', 0, '1630893584.jpg', 'fskfdskfkl', 'season 3', '4', 'Joseph Manning', '2021-08-28 01:10:30', '2021-09-06 00:59:44'),
(13, 3, 'Karly Boyle season 4', 'karly-boyle-season-4', 0, '1630892188.jpg', 'fds', 'season 4', '5', 'Joseph Manning', '2021-09-06 00:36:28', '2021-09-06 00:36:28'),
(14, 4, 'season 1', 'season-1', 0, '1630952422.jpg', 'DiSDNLpGYgM', '1', '8', 'Blaine Foreman', '2021-09-06 17:20:22', '2021-09-06 17:20:22'),
(15, 4, 'season 2', 'season-2', 0, '1630952452.jpg', 'DiSDNLpGYgM', '2', '8', 'Blaine Foreman', '2021-09-06 17:20:52', '2021-09-06 17:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `serie_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_classification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `serie_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `serie_name`, `description`, `age_classification`, `language`, `imdb`, `slug`, `user_name`, `country`, `tags`, `status`, `serie_photo`, `youtube_link`, `name_producer`, `real_name_actor1`, `real_name_actor2`, `real_name_actor3`, `name_actor1`, `name_actor2`, `name_actor3`, `photo_productor`, `photo_actor1`, `photo_actor2`, `photo_actor3`, `date_release`, `created_at`, `updated_at`) VALUES
(3, 'Karly Boyle', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي', 'Rated G: General audiences – All ages admitted', 'الإنجليزية', '6', 'karly-boyle', 'Kyra Bernard', 'الجزائر', 'Explicabo Sint nul', 1, '1630865585.jpg', 'Facere occaecat sapi', 'Guinevere Clements', 'Denise Hartman', 'Jayme Stokes', 'Tanner Camacho', 'Kirk Barrera', 'Eleanor Dean', 'Gretchen Jennings', '1630865585.jpg', '1630865585.jpg', '1630865585.jpg', '1630865585.jpg', '2021', '2021-08-26 01:49:30', '2021-09-07 22:31:26'),
(4, 'Jackson Strong', 'وبسيهحبسينبسمبسبنس بسياقعصكثةبسين نلمبىةبنىليمتلكب  بةسينلبالتهخ', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Arabic', '10', 'jackson-strong', 'Blaine Foreman', 'Afganistan', 'Cupidatat impedit a', 1, '1630952339.jpg', 'Quia obcaecati molli', 'Dana Sharpe', 'Rigel Combs', 'Benedict Patterson', 'Wesley Morin', 'Solomon Mccullough', 'Nigel Walker', 'Gisela Clements', NULL, NULL, NULL, NULL, '1976-11-26', '2021-08-26 13:25:27', '2021-09-06 17:18:59'),
(6, 'Georgia Schultz', 'Nesciunt eu exercit', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Afrikaans', '23', 'georgia-schultz', 'Skyler Vargas', 'Select a state...', 'Ut enim quia perspic', 1, '1630634178.jpg', 'Eu consectetur qui p', 'Larissa Solomon', 'Adena Chase', 'Jason Jacobson', 'Pandora Greene', 'Brenna Meadows', 'Yael Sykes', 'Melyssa Barker', NULL, NULL, NULL, NULL, '2000-07-21', '2021-08-30 08:42:12', '2021-09-03 00:56:18'),
(7, 'Hanae Terrell', 'Deleniti reprehender', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Afrikaans', '48', 'hanae-terrell', 'Skyler Vargas', 'Select a state...', 'Recusandae Voluptat', 1, '1630634193.jpg', 'Distinctio Architec', 'Jerry Estrada', 'Mufutau Ashley', 'Clementine Pierce', 'Devin Ellis', 'Marah Sawyer', 'Samantha Nichols', 'Eleanor Levine', NULL, NULL, NULL, NULL, '1983-01-21', '2021-08-30 08:42:42', '2021-09-03 00:56:33'),
(8, 'Plato Alston', 'Totam numquam commod', 'Rated R: Restricted – Under 17 requires accompanying parent or adult guardian.', 'Arabic', '69', 'plato-alston', 'Teagan Gray', 'American Samoa', 'Debitis officiis mod', 1, '1630316591.JPG', 'Voluptas impedit il', 'Stuart Ochoa', 'Miriam Lawson', 'Diana Frye', 'Reagan Gamble', 'Colby Hayes', 'Josephine Weber', 'Travis Bullock', NULL, NULL, NULL, NULL, '13-Sep-2010', '2021-08-30 08:43:11', '2021-08-30 08:43:18'),
(9, 'Talon Summers', 'Ducimus nesciunt l', 'Rated PG-13: Parents strongly cautioned – Some material may be inappropriate for children under 13.', 'Armenian', '49', 'talon-summers', 'Teagan Gray', 'Algeria', 'Aut quis officia fac', 1, '1630316633.JPG', 'Reprehenderit nulla', 'Byron Gates', 'Chester Robbins', 'Kevin Hale', 'Hadley Rogers', 'Basia Mccarthy', 'Camden Garner', 'Elvis Ferguson', NULL, NULL, NULL, NULL, '25-Mar-2010', '2021-08-30 08:43:53', '2021-08-30 08:43:56');

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
('t393Ks4Ia2q1RIhn31S5a5LKNI6netyd5R8kPZqK', 27, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36 OPR/78.0.4093.186', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZm1uM25BV3dRVjR5R1FMU2hMMnJmQ3gzMzBVWTRSd016QzZxRTdPRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6Nzc3Ny9tb3ZpZXMvaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFVtTGJuWU5UTXExU2x4NzN0Sy5FTXV1eDI3MEZaNWFqQTV4NmZVUFpvSEg3N1JCa0tINnJHIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRVbUxibllOVE1xMVNseDczdEsuRU11dXgyNzBGWjVhakE1eDZmVVBab0hINzdSQmtLSDZyRyI7fQ==', 1631152137),
('ylgV7WgJn9LiI4gW2aT5MuswnOMgnWiIL9ZQ64r1', 28, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicUpRUnJZbjV0R29QS1A4TU10ekZTa3hwTDVmaGVPdkxVQnVhbVZ0UiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjc3NzcvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjg7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRNNnJsQTF2OFJ1ZlYzUG1mbS5KRlJleGkyQW90TFRyNGJxMTBFazkvWHcyTlRrRldYN2FqYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkTTZybEExdjhSdWZWM1BtZm0uSkZSZXhpMkFvdExUcjRicTEwRWs5L1h3Mk5Ua0ZXWDdhamEiO30=', 1631139529);

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
(1, 'Buffy Vazquez', NULL, NULL, 'genevox@mailinator.com', NULL, '$2y$10$BhLBdVHm0fg7JEtpAMP2YOWBmSXDdkGrCWgesvJ/vycOX.eP3rFxO', NULL, NULL, NULL, NULL, NULL, '2021-08-25 21:50:11', '2021-08-25 21:50:11'),
(2, 'Carson Page', NULL, NULL, 'lebyhyl@mailinator.com', NULL, '$2y$10$3FSRfVziuswDOIOAlWAb7OfeRZiZ8mOX7CnwOanm.wrvVQV3bp4W.', NULL, NULL, NULL, NULL, NULL, '2021-08-26 12:52:12', '2021-08-26 12:52:12'),
(3, 'Amos Good', NULL, NULL, 'niwinireme@mailinator.com', NULL, '$2y$10$E6adoH9J5/yiwBAIwp6hUObWJ2sTYoL80A0qPtfpSiF3/Zgb/Lfaa', NULL, NULL, NULL, NULL, NULL, '2021-08-27 09:30:04', '2021-08-27 09:30:04'),
(4, 'Aurelia Robbins', NULL, NULL, 'dupyd@mailinator.com', NULL, '$2y$10$cGQ1ysQdtxJ9fE7vOu32veSO7hBaIbOxNy7vQr5KIPjhNELtjMkQm', NULL, NULL, NULL, NULL, NULL, '2021-08-27 22:01:30', '2021-08-27 22:01:30'),
(5, 'Aladdin Chang', NULL, NULL, 'gywit@mailinator.com', NULL, '$2y$10$wn0FHkm9IQEacdOMl53lgei/fm/0n2zZcFPFbq23schmMX/tUOvee', NULL, NULL, NULL, NULL, NULL, '2021-08-28 12:41:59', '2021-08-28 12:41:59'),
(6, 'Tashya Mcintosh', NULL, NULL, 'qokefozoc@mailinator.com', NULL, '$2y$10$OCRkDu/GtteqV4dfM5kwEOqT09tUwsijYQ3cPAhhQ1jW8RPUlfE4m', NULL, NULL, NULL, NULL, NULL, '2021-08-29 09:08:41', '2021-08-29 09:08:41'),
(7, 'Allegra Anderson', NULL, NULL, 'nehur@mailinator.com', NULL, '$2y$10$p4MrXmBTxS8KA0SBN6CEsOWjUR1EtT2XmG12qFKSZllLGkUc.gFZC', NULL, NULL, NULL, NULL, NULL, '2021-08-29 17:36:16', '2021-08-29 17:36:16'),
(8, 'Brian Callahan', NULL, NULL, 'wyloseriq@mailinator.com', NULL, '$2y$10$wavXCWr.geAynoL/5ebXPOM8mGAq0zO.FlA01KFs51PnN4oTWt97W', NULL, NULL, NULL, NULL, NULL, '2021-08-29 21:25:31', '2021-08-29 21:25:31'),
(9, 'Colette Hughes', NULL, NULL, 'vutygig@mailinator.com', NULL, '$2y$10$8xYaVD6Hd9uahW74YXm47OUJMxjavoW2N.g1z4Wx3An7w3xpBRoIu', NULL, NULL, NULL, NULL, NULL, '2021-08-30 00:43:01', '2021-08-30 00:43:01'),
(10, 'Teagan Gray', NULL, NULL, 'dogepin@mailinator.com', NULL, '$2y$10$mCbmTUb5Q0HqZ4c3/5Fni.diG6vX2PMGunx.g26asU0ESJJC0.gdK', NULL, NULL, NULL, NULL, NULL, '2021-08-30 08:26:51', '2021-08-30 08:26:51'),
(11, 'Jamalia Hyde', NULL, NULL, 'tofoq@mailinator.com', NULL, '$2y$10$PwkCHIbgkvXjpqNzJ/wH7.5ibyA5hM0qtOErt/l6WQxbDyOnpOXwq', NULL, NULL, NULL, NULL, NULL, '2021-08-30 12:19:20', '2021-08-30 12:19:20'),
(12, 'Lydia Wilson', NULL, NULL, 'duqerefaba@mailinator.com', NULL, '$2y$10$.fBVrvX5eJZYtD.buF9.R.7AH/B.CJPiWriHNMJk27HGZZIRt.w.a', NULL, NULL, NULL, NULL, NULL, '2021-08-30 20:00:01', '2021-08-30 20:00:01'),
(13, 'Donovan Barnes', NULL, NULL, 'qabavoxul@mailinator.com', NULL, '$2y$10$W2aMdrBx4F2WISSOAuwKCubQ.HLIBXoXADzNZIe0YZzYsXIGwteNO', NULL, NULL, NULL, NULL, NULL, '2021-08-31 14:37:04', '2021-08-31 14:37:04'),
(14, 'Zachary Molina', NULL, NULL, 'bemowica@mailinator.com', NULL, '$2y$10$VutE.uMKy0xcJG6M.QI7YeqtYw2RBSW5gu7sBY10B.prerm6x5hcS', NULL, NULL, NULL, NULL, NULL, '2021-08-31 22:24:14', '2021-08-31 22:24:14'),
(15, 'Jada Delgado', NULL, NULL, 'wutujyluc@mailinator.com', NULL, '$2y$10$eBcgZsH82zauxxRkvsMtu.Z1k90k9/9UAdHGB0EkGv3ard7BWeG5W', NULL, NULL, NULL, NULL, NULL, '2021-09-01 21:36:13', '2021-09-01 21:36:13'),
(16, 'Skyler Vargas', NULL, NULL, 'gapuqar@mailinator.com', NULL, '$2y$10$8ENvxeaTkbgsoKnVpcHvbuQ90OOQX6mrEJ/K1EQNMkl3g1RIUT7.i', NULL, NULL, NULL, NULL, NULL, '2021-09-03 00:45:53', '2021-09-03 00:45:53'),
(17, 'Mohammad Randolph', NULL, NULL, 'larec@mailinator.com', NULL, '$2y$10$1k/PPMmBGJ4bLqc.MYcuie9OpDFsSgp0X4xdelgD.hF69Wja42cYe', NULL, NULL, NULL, NULL, NULL, '2021-09-03 12:25:39', '2021-09-03 12:25:39'),
(18, 'Barry Potter', NULL, NULL, 'calucyryxy@mailinator.com', NULL, '$2y$10$uUu2/9gftSGQOleldalAXu0w0PCD2XSN/qfGQC0bwhY9s.yYfgEN2', NULL, NULL, NULL, NULL, NULL, '2021-09-03 23:52:16', '2021-09-03 23:52:16'),
(19, 'Moana Cortez', NULL, NULL, 'lagogy@mailinator.com', NULL, '$2y$10$hf3vYaaK32Kseu1bvkBjKuQ/F17wBnDrRlS1TpAg2Bqf6UmPotbja', NULL, NULL, NULL, NULL, NULL, '2021-09-05 13:22:49', '2021-09-05 13:22:49'),
(20, 'Ivan Franklin', NULL, NULL, 'tile@mailinator.com', NULL, '$2y$10$0ntxjrKot5nc/irYeBfHBumkK3XrUdaS787TYOBglKKyoCpD/tAhK', NULL, NULL, NULL, NULL, NULL, '2021-09-05 17:10:25', '2021-09-05 17:10:25'),
(21, 'Joseph Manning', NULL, NULL, 'jypyvyj@mailinator.com', NULL, '$2y$10$4OlOSBfQefAQOre3QzcfROevB0Ki3y.7MFUq..re6KvwGjyMf2xe6', NULL, NULL, NULL, NULL, NULL, '2021-09-05 22:40:24', '2021-09-05 22:40:24'),
(22, 'Blaine Foreman', NULL, NULL, 'tewyfoceqo@mailinator.com', NULL, '$2y$10$9nKxnJxRhd0sXrMdz9aGRu3qu9Fvk9qkFq67fPYvcWlDlmn1hEpiy', NULL, NULL, NULL, NULL, NULL, '2021-09-06 15:16:27', '2021-09-06 15:16:27'),
(23, 'Glenna Hayes', NULL, NULL, 'casaco@mailinator.com', NULL, '$2y$10$7UVY.YB0JXSrB/OVo30jTOnp47xzUbbT3/f.Iohz9vgMruOP34YGe', NULL, NULL, NULL, NULL, NULL, '2021-09-06 20:39:14', '2021-09-06 20:39:14'),
(24, 'Jaden Cotton', NULL, NULL, 'lasyqu@mailinator.com', NULL, '$2y$10$IQ2onzCnpMlGJcNGb3yTluJtfHaC2QcwFVQtEJBS7m9rAU5ioC6sq', NULL, NULL, NULL, NULL, NULL, '2021-09-07 11:55:56', '2021-09-07 11:55:56'),
(25, 'Kyra Bernard', NULL, NULL, 'cibav@mailinator.com', NULL, '$2y$10$wvdkoaeQxtRc7TWWz5Fglu10DZ8U7sHWeqGj4AUvsZk78PZdHgO4q', NULL, NULL, NULL, NULL, NULL, '2021-09-07 20:11:10', '2021-09-07 20:11:10'),
(26, 'Garth Hill', NULL, NULL, 'zuro@mailinator.com', NULL, '$2y$10$54Y3hSq.uOQkz2wVdp8WkOGevPGf2OvZwTb7Umqz6EYYZAIFLt/6y', NULL, NULL, NULL, NULL, NULL, '2021-09-08 14:24:46', '2021-09-08 14:24:46'),
(27, 'Bryar Mcbride', NULL, NULL, 'lanekix@mailinator.com', NULL, '$2y$10$UmLbnYNTMq1Slx73tK.EMuux270FZ5ajA5x6fUPZoHH77RBkKH6rG', NULL, NULL, NULL, NULL, NULL, '2021-09-08 19:58:02', '2021-09-08 19:58:02'),
(28, 'fffze', NULL, NULL, 'fzeufzn@fdnznfz', NULL, '$2y$10$M6rlA1v8RufV3Pmfm.JFRexi2AotLTr4bq10Ek9/Xw2NTkFWX7aja', NULL, NULL, NULL, NULL, NULL, '2021-09-08 21:18:48', '2021-09-08 21:18:48');

--
-- Indexes for dumped tables
--

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
  ADD KEY `genre_serie_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_movie_name_unique` (`movie_name`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `genre_serie`
--
ALTER TABLE `genre_serie`
  ADD CONSTRAINT `genre_serie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
