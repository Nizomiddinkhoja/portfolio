-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 14 2020 г., 05:49
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolios`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'web', '2020-08-03 23:32:54', '2020-08-03 23:32:54'),
(2, 'Telegram-bot', 'front-end', '2020-08-03 23:33:25', '2020-08-03 23:41:34'),
(3, 'JavaScript Games', 'back-end', '2020-08-03 23:33:37', '2020-08-03 23:42:10');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Об авторе', '<p><strong>Здравствуй.</strong></p>\r\n\r\n<p>Я веб-разработчик/ разработчик из Худжанда, Таджикистан.&nbsp;У меня есть страсть к веб-разработке и к созданию веб-сайтов.</p>\r\n\r\n<hr />\r\n<p><strong>Я могу помочь.</strong></p>\r\n\r\n<p>Я в настоящее время доступен для внештатной работы.</p>\r\n\r\n<p>Если у вас есть проект, который вы хотите начать, подумайте, что вам нужна моя помощь в чем-то, тогда свяжитесь со мной.</p>', 'SPLU2UBYlx.jpeg', '2020-08-02 02:16:50', '2020-08-04 00:04:58');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_16_081956_create_categories_table', 1),
(4, '2020_07_16_082413_create_tags_table', 1),
(5, '2020_07_16_082445_create_comments_table', 1),
(6, '2020_07_16_082507_create_posts_table', 1),
(7, '2020_07_16_082534_create_subscriptions_table', 1),
(8, '2020_07_16_083412_create_posts_tags_table', 1),
(9, '2020_07_31_092546_add_name_email_to_comment', 2),
(10, '2020_07_31_100128_edit_user_id_on_comments', 3),
(11, '2020_08_02_051147_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `user_id`, `status`, `views`, `is_featured`, `date`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'tanin.tj', 'tanin-tj', '<p>Официальный сайт телерадио компании &quot;ТАНИН&quot;</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code><a href=\"https://tanintj.000webhostapp.com/\" target=\"_blank\">https://tanintj.000webhostapp.com/</a></code></pre>\r\n</blockquote>', 1, 1, 1, 0, 1, '2019-02-01', 'l0cY3Lbj5g.jpeg', '<p>Официальный сайт телерадио компании &quot;ТАНИН&quot;</p>', '2020-08-03 23:41:03', '2020-08-03 23:54:49'),
(2, 'isfara.tj', 'isfara-tj', '<p>Официальный сайт исполнительный орган городского правительства Исфара</p>\r\n\r\n<blockquote>\r\n<p><a href=\"http://isfara.tj/\" target=\"_blank\">http://isfara.tj/</a></p>\r\n</blockquote>', 1, 1, 1, 0, 1, '2020-03-01', 'yH2tdaUta0.jpeg', '<p>Официальный сайт исполнительный орган городского правительства Исфара</p>', '2020-08-03 23:50:30', '2020-08-03 23:50:30'),
(3, 'Динамический landing-page', 'dinamicheskiy-landing-page', '<p>Динамический landing-page</p>\r\n\r\n<blockquote>\r\n<p><a href=\"https://bqtemplate.000webhostapp.com/\">https://bqtemplate.000webhostapp.com/</a></p>\r\n</blockquote>', 1, 1, 1, 0, 1, '2020-07-01', 'VTj99u7ytw.jpeg', '<p>Динамический landing-page</p>', '2020-08-04 00:56:26', '2020-08-04 00:56:26'),
(4, 'IT компания \"KomNet\"', 'it-kompaniya-komnet', '<p>Официальный сайт IT компании &quot;KomNet&quot;</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<a href=\"https://komnet.tj/\">https://komnet.tj/</a>\r\n</pre>\r\n</blockquote>', 1, 1, 1, 0, 1, '2020-02-20', 'jYT32OV4KR.jpeg', '<p>Официальный сайт IT компания &quot;KomNet&quot;</p>', '2020-08-13 08:36:32', '2020-08-14 00:35:43'),
(5, 'Бот для изучения Английского языка', 'bot-dlya-izucheniya-angliyskogo-yazyka', '<p>С помощью этого <strong>бота</strong> пользователь может <ins>УЧИТЬ НОВЫЕ СЛОВА, УЧИТЬ ГРАММАТИКУ(чтение, устный рассказ, диктант),&nbsp;ПРОВЕРИТЬ СВОИ ЗНАНИЯ С ПОМОЩЬЮ ТЕСТОВ, ЧИТАТЬ MIX-тексты(англо-русский текст)</ins> и многое другое.</p>\r\n\r\n<p>Можете быть уверены, что теперь процесс запоминания английских слов будет проходить для Вас намного интереснее и быстрее. И вот почему:&nbsp;</p>\r\n\r\n<p>Ученые давно доказали, что наша память устроена таким образом, что лучше всего она запоминает яркие образы и картинки.&nbsp;</p>\r\n\r\n<p>Не зря же говорят, что лучше один раз увидеть &ndash; чем 💯 раз услышать.</p>\r\n\r\n<p>&nbsp;В этом ботe использована УНИКАЛЬНАЯ методика запоминания английских слов в основе которой лежит техника визуальных ассоциаций. (Мнемотехника)</p>\r\n\r\n<p>&nbsp;Что это такое и как это работает, спросите Вы?🤔&nbsp;</p>\r\n\r\n<p>⬇️⬇️⬇️</p>\r\n\r\n<p>Все очень просто!&nbsp;</p>\r\n\r\n<p>К каждому английскому слову, представленному в этом приложении подобрана уникальная картинка с ассоциацией, которая навсегда привяжет это слово к себе.&nbsp;</p>\r\n\r\n<p>И в будущем, для того чтобы вспомнить какое-нибудь слово &ndash; Вам достаточно будет просто вспомнить связанную с ним картинку.🌁</p>\r\n\r\n<p>Больше не нужно зубрить слова и тратить на это все свое свободное время.&nbsp;</p>\r\n\r\n<p>Достаточно всего несколько минут в день просматривать картинки-ассоциации и Вы навсегда запомните эти слова.&nbsp;</p>\r\n\r\n<p>Просто отдыхайте и листайте картинки пополняя свой словарный запас.</p>\r\n\r\n<blockquote>\r\n<p><strong>https://t.me/En_Ru_Tj_Vocabulary_Bot</strong> - пожалуй самый простой и действенный способ, чтобы запомнить английские слова НАВСЕГДА! 🤩</p>\r\n</blockquote>', 2, 1, 1, 0, 1, '2020-08-12', 'YYaP25judR.jpeg', '<p><strong>https://t.me/En_Ru_Tj_Vocabulary_Bot</strong> - уникальный бот для запоминания английских слов, которое прекрасно подойдет как для новичка,&nbsp;который только начинает свой путь в изучении английского языка, так и для тех, кто хочет расширить свой словарный запас.</p>', '2020-08-14 00:13:34', '2020-08-14 00:35:31');

-- --------------------------------------------------------

--
-- Структура таблицы `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 3, 1, NULL, NULL),
(8, 3, 2, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 4, 2, NULL, NULL),
(12, 4, 3, NULL, NULL),
(13, 5, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'web', '2020-08-03 23:33:58', '2020-08-03 23:33:58'),
(2, 'Front-end', 'front-end', '2020-08-03 23:34:11', '2020-08-03 23:34:11'),
(3, 'Back-end', 'back-end', '2020-08-03 23:34:17', '2020-08-03 23:34:17'),
(4, 'Bot', 'bot', '2020-08-14 00:09:20', '2020-08-14 00:09:20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `status`, `description`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nizomiddinkhoja', 'nizomiddinkhoja@gmail.com', NULL, '$2y$10$3ankxduPlvqq2yNutaGF2OhmnjuqJep4Xj6zrjVvBhLPiJgbSQ/MG', 0, 0, 'Web-developer / Back End Developer', 'GU4KVHHKsE.jpeg', NULL, '2020-07-31 04:30:39', '2020-08-14 00:37:24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
