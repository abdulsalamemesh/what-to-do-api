-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 06:16 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `what_to_do_api`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_29_194451_create_tasks_table', 1),
(6, '2022_11_29_211730_create_jobs_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identifier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `cost` double(8,2) NOT NULL,
  `accessibility` double(8,2) NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `identifier`, `task`, `category`, `count`, `cost`, `accessibility`, `link`, `created_at`, `updated_at`) VALUES
(1, '5977626', 'Look at your finances and find one way to save money', 'busywork', 1, 0.00, 1.00, '', '2022-11-29 20:21:41', '2022-11-29 20:21:41'),
(2, '4286250', 'Go for a walk', 'relaxation', 1, 0.00, 0.10, '', '2022-11-29 20:21:42', '2022-11-29 20:21:42'),
(3, '9714586', 'Organize a cluttered drawer', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:21:44', '2022-11-29 20:21:44'),
(4, '5585829', 'Go to an escape room', 'social', 4, 0.50, 0.30, '', '2022-11-29 20:21:45', '2022-11-29 20:21:45'),
(5, '2062010', 'Write a list of things you are grateful for', 'relaxation', 1, 0.00, 0.00, '', '2022-11-29 20:21:47', '2022-11-29 20:21:47'),
(6, '9765530', 'Study a foreign language', 'education', 1, 0.00, 0.10, '', '2022-11-29 20:21:48', '2022-11-29 20:21:48'),
(7, '4894697', 'Pick up litter around your favorite park', 'charity', 1, 0.00, 0.05, '', '2022-11-29 20:21:50', '2022-11-29 20:21:50'),
(8, '3818400', 'Make homemade ice cream', 'cooking', 1, 0.20, 0.20, '', '2022-11-29 20:21:52', '2022-11-29 20:21:52'),
(9, '9212950', 'Watch a movie you\'d never usually watch', 'relaxation', 1, 0.15, 0.15, '', '2022-11-29 20:21:53', '2022-11-29 20:21:53'),
(10, '8061754', 'Prepare a dish from a foreign culture', 'cooking', 1, 0.20, 0.30, '', '2022-11-29 20:21:56', '2022-11-29 20:21:56'),
(11, '1799120', 'Cook something together with someone', 'cooking', 2, 0.30, 0.80, '', '2022-11-29 20:21:58', '2022-11-29 20:21:58'),
(12, '1303906', 'Mow your neighbor\'s lawn', 'charity', 1, 0.00, 0.20, '', '2022-11-29 20:21:59', '2022-11-29 20:21:59'),
(13, '3149232', 'Go on a fishing trip with some friends', 'social', 3, 0.40, 0.40, '', '2022-11-29 20:22:01', '2022-11-29 20:22:01'),
(14, '4877086', 'Repaint a room in your house', 'recreational', 1, 0.30, 0.40, '', '2022-11-29 20:22:02', '2022-11-29 20:22:02'),
(15, '1505028', 'Go swimming with a friend', 'social', 2, 0.10, 0.10, '', '2022-11-29 20:22:04', '2022-11-29 20:22:04'),
(16, '8557562', 'Have a paper airplane contest with some friends', 'social', 4, 0.02, 0.05, '', '2022-11-29 20:22:06', '2022-11-29 20:22:06'),
(17, '3920096', 'Volunteer and help out at a senior center', 'charity', 1, 0.00, 0.10, '', '2022-11-29 20:22:07', '2022-11-29 20:22:07'),
(18, '5914292', 'Host a movie marathon with some friends', 'social', 3, 0.10, 0.00, '', '2022-11-29 20:22:09', '2022-11-29 20:22:09'),
(19, '1942393', 'Plant a tree', 'recreational', 1, 0.30, 0.30, '', '2022-11-29 20:22:10', '2022-11-29 20:22:10'),
(20, '8779876', 'Start a daily journal', 'relaxation', 1, 0.00, 0.00, '', '2022-11-29 20:22:13', '2022-11-29 20:22:13'),
(21, '8750692', 'Take a class at your local community center that interests you', 'education', 1, 0.00, 0.15, '', '2022-11-29 20:22:15', '2022-11-29 20:22:15'),
(22, '4151544', 'Solve a Rubik\'s cube', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:22:16', '2022-11-29 20:22:16'),
(23, '1129748', 'Make your own LEGO creation', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:22:18', '2022-11-29 20:22:18'),
(24, '8926492', 'Learn how to french braid hair', 'education', 1, 0.00, 0.10, '', '2022-11-29 20:22:19', '2022-11-29 20:22:19'),
(25, '6852505', 'Go for a run', 'recreational', 1, 0.00, 0.90, '', '2022-11-29 20:22:20', '2022-11-29 20:22:20'),
(26, '3590127', 'Mow your lawn', 'busywork', 1, 0.10, 0.30, '', '2022-11-29 20:22:23', '2022-11-29 20:22:23'),
(27, '1432113', 'Hold a yard sale', 'social', 1, 0.00, 0.10, '', '2022-11-29 20:22:24', '2022-11-29 20:22:24'),
(28, '2715253', 'Have a jam session with your friends', 'music', 5, 0.10, 0.30, '', '2022-11-29 20:22:26', '2022-11-29 20:22:26'),
(29, '6706598', 'Learn the NATO phonetic alphabet', 'education', 1, 0.00, 0.00, 'https://en.wikipedia.org/wiki/NATO_phonetic_alphabet', '2022-11-29 20:22:28', '2022-11-29 20:22:28'),
(30, '1934228', 'Start a garden', 'recreational', 1, 0.30, 0.35, '', '2022-11-29 20:22:29', '2022-11-29 20:22:29'),
(31, '3954882', 'Organize your pantry', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:22:31', '2022-11-29 20:22:31'),
(32, '4522866', 'Learn how to use a french press', 'recreational', 1, 0.30, 0.30, 'https://en.wikipedia.org/wiki/French_press', '2022-11-29 20:22:32', '2022-11-29 20:22:32'),
(33, '6613428', 'Invite some friends over for a game night', 'social', 4, 0.00, 0.20, '', '2022-11-29 20:22:34', '2022-11-29 20:22:34'),
(34, '2211716', 'Go to a concert with local artists with some friends', 'social', 3, 0.40, 0.30, '', '2022-11-29 20:22:35', '2022-11-29 20:22:35'),
(35, '4266522', 'Prepare a 72-hour kit', 'busywork', 1, 0.50, 0.50, 'https://www.ready.gov/kit', '2022-11-29 20:22:37', '2022-11-29 20:22:37'),
(36, '8550768', 'Do a jigsaw puzzle', 'recreational', 1, 0.10, 1.00, 'https://en.wikipedia.org/wiki/Jigsaw_puzzle', '2022-11-29 20:22:38', '2022-11-29 20:22:38'),
(37, '8394738', 'Learn origami', 'education', 1, 0.20, 0.30, '', '2022-11-29 20:22:40', '2022-11-29 20:22:40'),
(38, '2055368', 'Volunteer at your local food bank', 'charity', 1, 0.00, 0.10, '', '2022-11-29 20:22:42', '2022-11-29 20:22:42'),
(39, '1878070', 'Volunteer at your local food pantry', 'charity', 1, 0.00, 0.10, '', '2022-11-29 20:22:44', '2022-11-29 20:22:44'),
(40, '3192099', 'Learn to play a new instrument', 'music', 1, 0.55, 0.60, '', '2022-11-29 20:22:45', '2022-11-29 20:22:45'),
(41, '6081071', 'Text a friend you haven\'t talked to in a long time', 'social', 2, 0.05, 0.20, '', '2022-11-29 20:22:47', '2022-11-29 20:22:47'),
(42, '9216391', 'Learn woodworking', 'diy', 1, 0.30, 0.30, '', '2022-11-29 20:22:48', '2022-11-29 20:22:48'),
(43, '1770521', 'Write a note of appreciation to someone', 'social', 1, 0.00, 0.00, '', '2022-11-29 20:22:50', '2022-11-29 20:22:50'),
(44, '2085321', 'Take a spontaneous road trip with some friends', 'social', 4, 0.20, 0.30, '', '2022-11-29 20:22:52', '2022-11-29 20:22:52'),
(45, '3943506', 'Learn Express.js', 'education', 1, 0.10, 0.25, 'https://expressjs.com/', '2022-11-29 20:22:53', '2022-11-29 20:22:53'),
(46, '8683473', 'Play basketball with a group of friends', 'social', 5, 0.00, 0.70, '', '2022-11-29 20:22:55', '2022-11-29 20:22:55'),
(47, '3136729', 'Listen to your favorite album', 'music', 1, 0.08, 0.20, '', '2022-11-29 20:22:57', '2022-11-29 20:22:57'),
(48, '4306710', 'Play a volleyball match with some friends', 'social', 4, 0.00, 0.30, '', '2022-11-29 20:22:58', '2022-11-29 20:22:58'),
(49, '7806284', 'Fill out a basketball bracket', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:23:00', '2022-11-29 20:23:00'),
(50, '4809815', 'Make bread from scratch', 'cooking', 1, 0.20, 0.20, '', '2022-11-29 20:23:02', '2022-11-29 20:23:02'),
(51, '7023703', 'Clean out your garage', 'busywork', 1, 0.00, 0.10, '', '2022-11-29 20:23:03', '2022-11-29 20:23:03'),
(52, '4448913', 'Go see a Broadway production', 'recreational', 4, 0.80, 0.30, '', '2022-11-29 20:23:05', '2022-11-29 20:23:05'),
(53, '8503795', 'Go to a local thrift shop', 'recreational', 1, 0.10, 0.20, '', '2022-11-29 20:23:07', '2022-11-29 20:23:07'),
(54, '2277801', 'Write a handwritten letter to somebody', 'social', 1, 0.10, 0.80, '', '2022-11-29 20:23:08', '2022-11-29 20:23:08'),
(55, '9324336', 'Clean out your refrigerator', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:23:10', '2022-11-29 20:23:10'),
(56, '5554174', 'Make a scrapbook with pictures of your favorite memories', 'diy', 1, 0.10, 0.10, '', '2022-11-29 20:23:11', '2022-11-29 20:23:11'),
(57, '2430066', 'Shred old documents you don\'t need anymore', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:23:14', '2022-11-29 20:23:14'),
(58, '6204657', 'Surprise your significant other with something considerate', 'social', 1, 0.00, 0.00, '', '2022-11-29 20:23:15', '2022-11-29 20:23:15'),
(59, '7091374', 'Make a simple musical instrument', 'music', 1, 0.40, 0.25, '', '2022-11-29 20:23:17', '2022-11-29 20:23:17'),
(60, '4708863', 'Listen to a new music genre', 'music', 1, 0.00, 0.00, '', '2022-11-29 20:23:18', '2022-11-29 20:23:18'),
(61, '3469378', 'Learn Javascript', 'education', 1, 0.00, 0.90, '', '2022-11-29 20:23:20', '2022-11-29 20:23:20'),
(62, '5322987', 'Color', 'relaxation', 1, 0.10, 0.00, '', '2022-11-29 20:23:22', '2022-11-29 20:23:22'),
(63, '1408058', 'Play a game of Monopoly', 'social', 4, 0.20, 0.30, '', '2022-11-29 20:23:24', '2022-11-29 20:23:24'),
(64, '6778219', 'Learn how to write in shorthand', 'education', 1, 0.00, 0.10, '', '2022-11-29 20:23:25', '2022-11-29 20:23:25'),
(65, '8724324', 'Take a hike at a local park', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:23:27', '2022-11-29 20:23:27'),
(66, '8364626', 'Start a blog for something you\'re passionate about', 'recreational', 1, 0.05, 0.10, '', '2022-11-29 20:23:29', '2022-11-29 20:23:29'),
(67, '3950821', 'Learn Kotlin', 'education', 1, 0.00, 0.80, 'https://kotlinlang.org/', '2022-11-29 20:23:30', '2022-11-29 20:23:30'),
(68, '8832605', 'Go stargazing', 'relaxation', 1, 0.00, 0.10, '', '2022-11-29 20:23:33', '2022-11-29 20:23:33'),
(69, '5808228', 'Learn how to play a new sport', 'recreational', 1, 0.10, 0.20, '', '2022-11-29 20:23:35', '2022-11-29 20:23:35'),
(70, '8631548', 'Create a compost pile', 'diy', 1, 0.00, 0.15, '', '2022-11-29 20:23:36', '2022-11-29 20:23:36'),
(71, '4688012', 'Do yoga', 'recreational', 1, 0.00, 0.90, '', '2022-11-29 20:23:38', '2022-11-29 20:23:38'),
(72, '6509779', 'Donate blood at a local blood center', 'charity', 1, 0.00, 0.35, 'https://www.redcross.org/give-blood', '2022-11-29 20:23:39', '2022-11-29 20:23:39'),
(73, '5262759', 'Go see a movie in theaters with a few friends', 'social', 4, 0.20, 0.30, '', '2022-11-29 20:23:41', '2022-11-29 20:23:41'),
(74, '4748214', 'Watch the sunset or the sunrise', 'recreational', 1, 0.00, 1.00, '', '2022-11-29 20:23:42', '2022-11-29 20:23:42'),
(75, '5554727', 'Plan a trip to another country', 'recreational', 1, 0.00, 0.00, '', '2022-11-29 20:23:44', '2022-11-29 20:23:44'),
(76, '1000000', 'Make a new friend', 'social', 1, 0.00, 0.00, '', '2022-11-29 20:23:45', '2022-11-29 20:23:45'),
(77, '7114122', 'Start a book you\'ve never gotten around to reading', 'relaxation', 1, 0.10, 0.10, '', '2022-11-29 20:23:47', '2022-11-29 20:23:47'),
(78, '8253550', 'Go to the library and find an interesting book', 'relaxation', 1, 0.05, 0.20, '', '2022-11-29 20:23:48', '2022-11-29 20:23:48'),
(79, '9414706', 'Learn how the internet works', 'education', 1, 0.00, 0.10, '', '2022-11-29 20:23:50', '2022-11-29 20:23:50'),
(80, '3305912', 'Have a photo session with some friends', 'social', 4, 0.05, 0.80, '', '2022-11-29 20:23:52', '2022-11-29 20:23:52'),
(81, '8203595', 'Organize your basement', 'busywork', 1, 0.00, 0.90, '', '2022-11-29 20:23:54', '2022-11-29 20:23:54'),
(82, '8264223', 'Learn how to use an Arduino', 'education', 1, 0.10, 0.70, 'https://en.wikipedia.org/wiki/Arduino', '2022-11-29 20:23:57', '2022-11-29 20:23:57'),
(83, '2167064', 'Learn GraphQL', 'education', 1, 0.00, 0.80, 'https://graphql.org/', '2022-11-29 20:24:01', '2022-11-29 20:24:01'),
(84, '3136036', 'Learn how to fold a paper crane', 'education', 1, 0.10, 0.05, '', '2022-11-29 20:24:03', '2022-11-29 20:24:03'),
(85, '6553978', 'Learn a new recipe', 'cooking', 1, 0.00, 0.05, '', '2022-11-29 20:24:07', '2022-11-29 20:24:07'),
(86, '1645485', 'Learn to write with your nondominant hand', 'recreational', 1, 0.00, 0.02, '', '2022-11-29 20:24:10', '2022-11-29 20:24:10'),
(87, '2742452', 'Learn the Chinese erhu', 'music', 1, 0.60, 0.40, '', '2022-11-29 20:24:12', '2022-11-29 20:24:12'),
(88, '4981819', 'Find a DIY to do', 'diy', 1, 0.40, 0.30, '', '2022-11-29 20:24:13', '2022-11-29 20:24:13'),
(89, '9318514', 'Take your dog on a walk', 'relaxation', 1, 0.00, 0.20, '', '2022-11-29 20:24:15', '2022-11-29 20:24:15'),
(90, '5490351', 'Visit a nearby museum', 'recreational', 1, 0.20, 0.70, '', '2022-11-29 20:24:17', '2022-11-29 20:24:17'),
(91, '9081214', 'Back up important computer files', 'busywork', 1, 0.20, 0.20, '', '2022-11-29 20:24:20', '2022-11-29 20:24:20'),
(92, '2581372', 'Take a bubble bath', 'relaxation', 1, 0.15, 0.10, '', '2022-11-29 20:24:22', '2022-11-29 20:24:22'),
(93, '3151646', 'Organize your music collection', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:24:24', '2022-11-29 20:24:24'),
(94, '9937387', 'Give your pet ten minutes of focused attention', 'relaxation', 1, 0.00, 0.00, '', '2022-11-29 20:24:25', '2022-11-29 20:24:25'),
(95, '6482790', 'Go to a music festival with some friends', 'social', 4, 0.40, 0.20, '', '2022-11-29 20:24:27', '2022-11-29 20:24:27'),
(96, '4179309', 'Memorize the fifty states and their capitals', 'education', 1, 0.00, 0.00, '', '2022-11-29 20:24:30', '2022-11-29 20:24:30'),
(97, '9072906', 'Go to a karaoke bar with some friends', 'social', 4, 0.50, 0.35, '', '2022-11-29 20:24:31', '2022-11-29 20:24:31'),
(98, '2850593', 'Uninstall unused apps from your devices', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:24:34', '2022-11-29 20:24:34'),
(99, '5920481', 'Make a to-do list for your week', 'busywork', 1, 0.00, 0.05, '', '2022-11-29 20:24:36', '2022-11-29 20:24:36'),
(100, '3352474', 'Read a formal research paper on an interesting subject', 'education', 1, 0.00, 0.10, '', '2022-11-29 20:24:38', '2022-11-29 20:24:38'),
(101, '6813070', 'Have a picnic with some friends', 'social', 3, 0.10, 0.10, '', '2022-11-29 20:24:40', '2022-11-29 20:24:40'),
(102, '8442249', 'Have a bonfire with your close friends', 'social', 4, 0.10, 0.10, '', '2022-11-29 20:24:43', '2022-11-29 20:24:43'),
(103, '2300257', 'Hold a video game tournament with some friends', 'social', 4, 0.00, 0.10, '', '2022-11-29 20:24:44', '2022-11-29 20:24:44'),
(104, '4124860', 'Listen to a new podcast', 'relaxation', 1, 0.05, 0.12, '', '2022-11-29 20:24:47', '2022-11-29 20:24:47'),
(105, '8159356', 'Explore a park you have never been to before', 'recreational', 1, 0.00, 0.00, '', '2022-11-29 20:24:49', '2022-11-29 20:24:49'),
(106, '1638604', 'Have a football scrimmage with some friends', 'social', 8, 0.00, 0.20, '', '2022-11-29 20:24:51', '2022-11-29 20:24:51'),
(107, '7556665', 'Organize your dresser', 'busywork', 1, 0.00, 1.00, '', '2022-11-29 20:24:53', '2022-11-29 20:24:53'),
(108, '6613330', 'Pot some plants and put them around your house', 'relaxation', 1, 0.40, 0.30, '', '2022-11-29 20:24:54', '2022-11-29 20:24:54'),
(109, '5665663', 'Bake something you\'ve never tried before', 'cooking', 1, 0.40, 0.30, '', '2022-11-29 20:24:56', '2022-11-29 20:24:56'),
(110, '2095681', 'Learn about the Golden Ratio', 'education', 1, 0.10, 0.20, 'https://en.wikipedia.org/wiki/Golden_ratio', '2022-11-29 20:24:58', '2022-11-29 20:24:58'),
(111, '2360432', 'Draft your living will', 'busywork', 1, 0.00, 0.50, 'https://www.investopedia.com/terms/l/livingwill.asp', '2022-11-29 20:25:01', '2022-11-29 20:25:01'),
(112, '9366464', 'Create and follow a savings plan', 'busywork', 1, 0.00, 0.20, '', '2022-11-29 20:25:03', '2022-11-29 20:25:03'),
(113, '7265395', 'Plan a vacation you\'ve always wanted to take', 'relaxation', 1, 0.00, 0.05, '', '2022-11-29 20:25:05', '2022-11-29 20:25:05'),
(114, '1592381', 'Learn how to make an Alexa skill', 'education', 1, 0.00, 0.10, 'https://developer.amazon.com/en-US/docs/alexa/custom-skills/steps-to-build-a-custom-skill.html', '2022-11-29 20:25:10', '2022-11-29 20:25:10'),
(115, '6197243', 'Rearrange and organize your room', 'busywork', 1, 0.00, 0.15, '', '2022-11-29 20:25:12', '2022-11-29 20:25:12'),
(116, '8827573', 'Do something you used to do as a kid', 'relaxation', 1, 0.10, 0.80, '', '2022-11-29 20:25:14', '2022-11-29 20:25:14'),
(117, '5675880', 'Start a band', 'music', 4, 0.30, 0.80, '', '2022-11-29 20:25:16', '2022-11-29 20:25:16'),
(118, '9908721', 'Sit in the dark and listen to your favorite music with no distractions', 'relaxation', 1, 0.00, 1.00, '', '2022-11-29 20:25:18', '2022-11-29 20:25:18'),
(119, '2352669', 'Make a couch fort', 'recreational', 1, 0.00, 0.08, '', '2022-11-29 20:25:20', '2022-11-29 20:25:20'),
(120, '9149470', 'Compliment someone', 'social', 2, 0.00, 0.00, '', '2022-11-29 20:25:22', '2022-11-29 20:25:22'),
(121, '8344539', 'Conquer one of your fears', 'recreational', 1, 0.10, 0.10, '', '2022-11-29 20:25:23', '2022-11-29 20:25:23'),
(122, '5881028', 'Learn a new programming language', 'education', 1, 0.10, 0.25, '', '2022-11-29 20:25:25', '2022-11-29 20:25:25'),
(123, '5590133', 'Catch up with a friend over a lunch date', 'social', 2, 0.20, 0.15, '', '2022-11-29 20:25:27', '2022-11-29 20:25:27'),
(124, '6098037', 'Organize a bookshelf', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:25:30', '2022-11-29 20:25:30'),
(125, '1488053', 'Find a charity and donate to it', 'charity', 1, 0.40, 0.10, '', '2022-11-29 20:25:32', '2022-11-29 20:25:32'),
(126, '8321894', 'Do something nice for someone you care about', 'social', 1, 0.00, 0.10, '', '2022-11-29 20:25:34', '2022-11-29 20:25:34'),
(127, '8125168', 'Bake pastries for you and your neighbor', 'cooking', 1, 0.40, 0.30, '', '2022-11-29 20:25:37', '2022-11-29 20:25:37'),
(128, '4940907', 'Match your storage containers with their lids', 'busywork', 1, 0.00, 1.00, '', '2022-11-29 20:25:42', '2022-11-29 20:25:42'),
(129, '9364041', 'Create or update your resume', 'busywork', 1, 0.00, 0.10, '', '2022-11-29 20:25:43', '2022-11-29 20:25:43'),
(130, '4150284', 'Donate to your local food bank', 'charity', 1, 0.50, 0.80, '', '2022-11-29 20:25:45', '2022-11-29 20:25:45'),
(131, '3621244', 'Learn the periodic table', 'education', 1, 0.00, 0.60, 'https://en.wikipedia.org/wiki/Periodic_table', '2022-11-29 20:25:46', '2022-11-29 20:25:46'),
(132, '5534113', 'Play a video game', 'recreational', 1, 0.00, 0.00, '', '2022-11-29 20:25:48', '2022-11-29 20:25:48'),
(133, '9660022', 'Learn and play a new card game', 'recreational', 1, 0.00, 0.00, 'https://www.pagat.com', '2022-11-29 20:25:50', '2022-11-29 20:25:50'),
(134, '8238918', 'Visit your past teachers', 'social', 1, 0.00, 0.70, '', '2022-11-29 20:25:53', '2022-11-29 20:25:53'),
(135, '7154873', 'Watch a Khan Academy lecture on a subject of your choosing', 'education', 1, 0.00, 0.00, 'https://www.khanacademy.org/', '2022-11-29 20:25:56', '2022-11-29 20:25:56'),
(136, '3491470', 'Create a meal plan for the coming week', 'cooking', 1, 0.00, 0.00, '', '2022-11-29 20:26:00', '2022-11-29 20:26:00'),
(137, '9008639', 'Memorize a favorite quote or poem', 'education', 1, 0.00, 0.80, '', '2022-11-29 20:26:01', '2022-11-29 20:26:01'),
(138, '1288934', 'Pull a harmless prank on one of your friends', 'social', 1, 0.10, 0.20, '', '2022-11-29 20:26:04', '2022-11-29 20:26:04'),
(139, '1382389', 'Volunteer at a local animal shelter', 'charity', 1, 0.10, 0.50, '', '2022-11-29 20:26:06', '2022-11-29 20:26:06'),
(140, '8731971', 'Learn to sew on a button', 'education', 1, 0.05, 0.10, '', '2022-11-29 20:26:10', '2022-11-29 20:26:10'),
(141, '1718657', 'Start a collection', 'recreational', 1, 0.00, 0.50, '', '2022-11-29 20:26:13', '2022-11-29 20:26:13'),
(142, '8688620', 'Write a poem', 'recreational', 1, 0.00, 0.00, '', '2022-11-29 20:26:18', '2022-11-29 20:26:18'),
(143, '6301585', 'Write a short story', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:26:20', '2022-11-29 20:26:20'),
(144, '1017771', 'Wash your car', 'busywork', 1, 0.05, 0.15, '', '2022-11-29 20:26:22', '2022-11-29 20:26:22'),
(145, '1572120', 'Configure two-factor authentication on your accounts', 'busywork', 1, 0.00, 0.00, 'https://en.wikipedia.org/wiki/Multi-factor_authentication', '2022-11-29 20:26:26', '2022-11-29 20:26:26'),
(146, '8979931', 'Shop at support your local farmers market', 'relaxation', 1, 0.20, 0.10, '', '2022-11-29 20:26:28', '2022-11-29 20:26:28'),
(147, '4704256', 'Learn to greet someone in a new language', 'education', 1, 0.10, 0.20, '', '2022-11-29 20:26:30', '2022-11-29 20:26:30'),
(148, '5188388', 'Write a song', 'music', 1, 0.00, 0.00, '', '2022-11-29 20:26:34', '2022-11-29 20:26:34'),
(149, '6925988', 'Fix something that\'s broken in your house', 'diy', 1, 0.10, 0.30, '', '2022-11-29 20:26:36', '2022-11-29 20:26:36'),
(150, '4558850', 'Go to a concert with some friends', 'social', 4, 0.60, 0.40, '', '2022-11-29 20:26:44', '2022-11-29 20:26:44'),
(151, '3699502', 'Meditate for five minutes', 'relaxation', 1, 0.00, 0.05, '', '2022-11-29 20:26:46', '2022-11-29 20:26:46'),
(152, '8092359', 'Make tie dye shirts', 'diy', 1, 0.20, 0.20, '', '2022-11-29 20:26:49', '2022-11-29 20:26:49'),
(153, '4387026', 'Go to the gym', 'recreational', 1, 0.20, 0.10, '', '2022-11-29 20:26:52', '2022-11-29 20:26:52'),
(154, '5319204', 'Patronize a local independent restaurant', 'recreational', 1, 0.20, 0.10, '', '2022-11-29 20:26:54', '2022-11-29 20:26:54'),
(155, '4614092', 'Draw and color a Mandala', 'relaxation', 1, 0.05, 0.10, 'https://en.wikipedia.org/wiki/Mandala', '2022-11-29 20:26:56', '2022-11-29 20:26:56'),
(156, '4290333', 'Go on a long drive with no music', 'relaxation', 1, 0.10, 0.20, '', '2022-11-29 20:26:57', '2022-11-29 20:26:57'),
(157, '1947449', 'Create a cookbook with your favorite recipes', 'cooking', 1, 0.00, 0.05, '', '2022-11-29 20:26:59', '2022-11-29 20:26:59'),
(158, '2790297', 'Learn how to whistle with your fingers', 'education', 1, 0.00, 0.00, '', '2022-11-29 20:27:02', '2022-11-29 20:27:02'),
(159, '7096020', 'Practice coding in your favorite lanaguage', 'recreational', 1, 0.00, 0.10, '', '2022-11-29 20:27:05', '2022-11-29 20:27:05'),
(160, '6826029', 'Start a webinar on a topic of your choice', 'education', 1, 0.00, 0.90, '', '2022-11-29 20:27:09', '2022-11-29 20:27:09'),
(161, '5940465', 'Take your cat on a walk', 'relaxation', 1, 0.02, 0.10, '', '2022-11-29 20:27:11', '2022-11-29 20:27:11'),
(162, '9924423', 'Learn how to make a website', 'education', 1, 0.10, 0.30, '', '2022-11-29 20:27:15', '2022-11-29 20:27:15'),
(163, '3141592', 'Bake a pie with some friends', 'cooking', 3, 0.30, 0.30, '', '2022-11-29 20:27:17', '2022-11-29 20:27:17'),
(164, '8033599', 'Draw something interesting', 'recreational', 1, 0.00, 0.00, '', '2022-11-29 20:27:18', '2022-11-29 20:27:18'),
(165, '6808057', 'Think of a new business idea', 'recreational', 1, 0.00, 0.05, '', '2022-11-29 20:27:22', '2022-11-29 20:27:22'),
(166, '2735499', 'Make a bucket list', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:27:25', '2022-11-29 20:27:25'),
(167, '7526324', 'Go to a nail salon', 'relaxation', 1, 0.40, 0.50, '', '2022-11-29 20:27:28', '2022-11-29 20:27:28'),
(168, '6596257', 'Catch up on world news', 'recreational', 1, 0.05, 0.07, '', '2022-11-29 20:27:30', '2022-11-29 20:27:30'),
(169, '2565076', 'Look at pictures and videos of cute animals', 'relaxation', 1, 0.00, 1.00, '', '2022-11-29 20:27:33', '2022-11-29 20:27:33'),
(170, '3456114', 'Buy a new house decoration', 'recreational', 1, 0.40, 0.30, '', '2022-11-29 20:27:35', '2022-11-29 20:27:35'),
(171, '5092652', 'Take a caffeine nap', 'relaxation', 1, 0.10, 0.08, '', '2022-11-29 20:27:37', '2022-11-29 20:27:37'),
(172, '9303608', 'Learn about a distributed version control system such as Git', 'education', 1, 0.00, 0.00, 'https://en.wikipedia.org/wiki/Distributed_version_control', '2022-11-29 20:27:41', '2022-11-29 20:27:41'),
(173, '6184514', 'Take a nap', 'relaxation', 1, 0.00, 0.00, '', '2022-11-29 20:27:49', '2022-11-29 20:27:49'),
(174, '2526437', 'Improve your touch typing', 'busywork', 1, 0.00, 0.80, 'https://en.wikipedia.org/wiki/Touch_typing', '2022-11-29 20:27:52', '2022-11-29 20:27:52'),
(175, '4296813', 'Listen to music you haven\'t heard in a while', 'music', 1, 0.05, 0.90, '', '2022-11-29 20:27:56', '2022-11-29 20:27:56'),
(176, '6825484', 'Start a family tree', 'social', 1, 0.00, 1.00, 'https://en.wikipedia.org/wiki/Family_tree', '2022-11-29 20:28:07', '2022-11-29 20:28:07'),
(177, '3646173', 'Learn Morse code', 'education', 1, 0.00, 0.00, 'https://en.wikipedia.org/wiki/Morse_code', '2022-11-29 20:28:10', '2022-11-29 20:28:10'),
(178, '6378359', 'Organize your movie collection', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:28:13', '2022-11-29 20:28:13'),
(179, '8731710', 'Learn how to beatbox', 'recreational', 1, 0.00, 1.00, 'https://en.wikipedia.org/wiki/Beatboxing', '2022-11-29 20:28:27', '2022-11-29 20:28:27'),
(180, '1162360', 'Paint the first thing you see', 'recreational', 1, 0.25, 0.20, '', '2022-11-29 20:28:29', '2022-11-29 20:28:29'),
(181, '6693574', 'Try a food you don\'t like', 'recreational', 1, 0.10, 0.05, '', '2022-11-29 20:28:31', '2022-11-29 20:28:31'),
(182, '5947957', 'Learn how to iceskate or rollerskate', 'recreational', 1, 0.10, 0.25, '', '2022-11-29 20:28:37', '2022-11-29 20:28:37'),
(183, '1093640', 'Play a game of tennis with a friend', 'social', 2, 0.10, 0.40, '', '2022-11-29 20:28:39', '2022-11-29 20:28:39'),
(184, '4379552', 'Make a budget', 'busywork', 1, 0.00, 0.10, '', '2022-11-29 20:28:41', '2022-11-29 20:28:41'),
(185, '8081693', 'Watch a classic movie', 'recreational', 1, 0.10, 0.10, '', '2022-11-29 20:28:42', '2022-11-29 20:28:42'),
(186, '4101229', 'Write a thank you letter to an influential person in your life', 'social', 1, 0.00, 0.10, '', '2022-11-29 20:29:02', '2022-11-29 20:29:02'),
(187, '3561421', 'Research a topic you\'re interested in', 'education', 1, 0.00, 0.90, '', '2022-11-29 20:29:12', '2022-11-29 20:29:12'),
(188, '3141417', 'Create a personal website', 'recreational', 1, 0.10, 0.12, '', '2022-11-29 20:29:19', '2022-11-29 20:29:19'),
(189, '7687030', 'Contribute code or a monetary donation to an open-source software project', 'charity', 1, 0.10, 0.00, 'https://github.com/explore', '2022-11-29 20:29:22', '2022-11-29 20:29:22'),
(190, '4565537', 'Learn calligraphy', 'education', 1, 0.10, 0.10, '', '2022-11-29 20:29:27', '2022-11-29 20:29:27'),
(191, '5881647', 'Binge watch a trending series', 'recreational', 1, 0.20, 0.20, '', '2022-11-29 20:29:52', '2022-11-29 20:29:52'),
(192, '1668223', 'Teach your dog a new trick', 'relaxation', 1, 0.05, 0.15, '', '2022-11-29 20:30:12', '2022-11-29 20:30:12'),
(193, '9999999', 'Resolve a problem you\'ve been putting off', 'busywork', 1, 0.00, 0.00, '', '2022-11-29 20:30:20', '2022-11-29 20:30:20'),
(194, '9026787', 'Clean out your closet and donate the clothes you\'ve outgrown', 'charity', 1, 0.00, 0.10, '', '2022-11-29 20:31:21', '2022-11-29 20:31:21'),
(195, '2237769', 'Explore the nightlife of your city', 'social', 1, 0.10, 0.32, '', '2022-11-29 20:31:33', '2022-11-29 20:31:33'),
(196, '2896176', 'Clean out your car', 'busywork', 1, 0.00, 0.08, '', '2022-11-29 20:32:45', '2022-11-29 20:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2022-11-29 20:21:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T3j9XAymwV', '2022-11-29 20:21:25', '2022-11-29 20:21:25');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4001;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
