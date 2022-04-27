-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 27 2022 г., 16:10
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1056610_grandroud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `territory` text COLLATE utf8mb4_unicode_ci,
  `workers` int(11) DEFAULT NULL,
  `plant_area` text COLLATE utf8mb4_unicode_ci,
  `old` int(11) DEFAULT NULL,
  `projects` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `description_ru` text COLLATE utf8mb4_unicode_ci,
  `description_uz` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `years` int(11) DEFAULT NULL,
  `history_ru` text COLLATE utf8mb4_unicode_ci,
  `history_uz` text COLLATE utf8mb4_unicode_ci,
  `history_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `territory`, `workers`, `plant_area`, `old`, `projects`, `photo`, `description_ru`, `description_uz`, `description_en`, `years`, `history_ru`, `history_uz`, `history_en`, `created_at`, `updated_at`) VALUES
(1, '255', 500, '17,4', 15, '2521800', '/img_about/XcAnROh65H.webp', '<p>Весь комплекс, созданный компанией Grand Road Tashkent, является высокотехнологичным предприятием. В процессе возведения зданий и модернизации оборудования были использованы уникальные, не имеющие аналогов технологии.<br />\r\nСтратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).<br />\r\nСущественные решения по инженерии и конструкции производственных<br />\r\nучастков и инфраструктуры предприятия были заложены на стадии разработки проекта. На территории свыше 17 га, помимо карьера площадью 130 га, расположены:<br />\r\n&middot; дробильно-сортировочный комплекс;<br />\r\n&middot; асфальтовый завод;<br />\r\n&middot; участок производства бетонной смеси;<br />\r\n&middot; участок производства ЖБИ;<br />\r\n&middot; участок производства брусчатки и бордюров;<br />\r\n&middot; дорожно-строительное управление;<br />\r\n&middot; лаборатория;<br />\r\n&middot; участки сервисного обслуживания;<br />\r\n&middot; автозаправочная станция и другие вспомогательные объекты.<br />\r\nПроизведенная продукция реализуется на внутреннем рынке, в перспективе будет экспортироваться в зарубежные страны.</p>', '<p>Весь комплекс, созданный компанией Grand Road Tashkent, является высокотехнологичным предприятием. В процессе возведения зданий и модернизации оборудования были использованы уникальные, не имеющие аналогов технологии.<br />\r\nСтратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).<br />\r\nСущественные решения по инженерии и конструкции производственных<br />\r\nучастков и инфраструктуры предприятия были заложены на стадии разработки проекта. На территории свыше 17 га, помимо карьера площадью 130 га, расположены:<br />\r\n&middot; дробильно-сортировочный комплекс;<br />\r\n&middot; асфальтовый завод;<br />\r\n&middot; участок производства бетонной смеси;<br />\r\n&middot; участок производства ЖБИ;<br />\r\n&middot; участок производства брусчатки и бордюров;<br />\r\n&middot; дорожно-строительное управление;<br />\r\n&middot; лаборатория;<br />\r\n&middot; участки сервисного обслуживания;<br />\r\n&middot; автозаправочная станция и другие вспомогательные объекты.<br />\r\nПроизведенная продукция реализуется на внутреннем рынке, в перспективе будет экспортироваться в зарубежные страны.</p>', '<p>Весь комплекс, созданный компанией Grand Road Tashkent, является высокотехнологичным предприятием. В процессе возведения зданий и модернизации оборудования были использованы уникальные, не имеющие аналогов технологии.<br />\r\nСтратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).<br />\r\nСущественные решения по инженерии и конструкции производственных<br />\r\nучастков и инфраструктуры предприятия были заложены на стадии разработки проекта. На территории свыше 17 га, помимо карьера площадью 130 га, расположены:<br />\r\n&middot; дробильно-сортировочный комплекс;<br />\r\n&middot; асфальтовый завод;<br />\r\n&middot; участок производства бетонной смеси;<br />\r\n&middot; участок производства ЖБИ;<br />\r\n&middot; участок производства брусчатки и бордюров;<br />\r\n&middot; дорожно-строительное управление;<br />\r\n&middot; лаборатория;<br />\r\n&middot; участки сервисного обслуживания;<br />\r\n&middot; автозаправочная станция и другие вспомогательные объекты.<br />\r\nПроизведенная продукция реализуется на внутреннем рынке, в перспективе будет экспортироваться в зарубежные страны.</p>', NULL, NULL, NULL, NULL, '2022-02-14 19:10:44', '2022-03-11 02:09:00');

-- --------------------------------------------------------

--
-- Структура таблицы `calculate_costs`
--

CREATE TABLE `calculate_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `calculate_costs`
--

INSERT INTO `calculate_costs` (`id`, `name`, `email`, `view`, `created_at`, `updated_at`) VALUES
(2, 'Sam', 'sam@gamil.com', 1, '2022-02-19 23:46:35', '2022-02-20 00:16:12');

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catalog` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `catalog`, `created_at`, `updated_at`) VALUES
(1, '/catalog/AV38nQKRuw.webp', '2022-02-14 10:52:08', '2022-02-14 11:02:12');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_uz` text COLLATE utf8mb4_unicode_ci,
  `category_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_ru`, `category_uz`, `category_en`, `created_at`, `updated_at`) VALUES
(1, 'Асфальтирование', 'Asfaltlash', 'Asphalting', '2022-02-18 19:00:00', '2022-02-18 19:00:00'),
(2, 'Ямочный ремонт', 'Yamoq', 'Patching', '2022-02-18 19:00:00', '2022-02-18 19:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `phone1` text COLLATE utf8mb4_unicode_ci,
  `phone2` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `addres` text COLLATE utf8mb4_unicode_ci,
  `telegram` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `link`, `phone1`, `phone2`, `email`, `addres`, `telegram`, `youtube`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Grand Road@grand.uz', '+998 91 152 97 23', '+998 91 152 97 22', 'road@grand.uz', '100174, г. Ташкент, Алмазарский р-н, ул. Университетская, дом 7', 'https://t.me/grandroad', '/', 'https://m.facebook.com/grandroadtashkent', 'https://www.instagram.com/grandroadtashkent/', '2022-02-14 07:30:03', '2022-03-09 05:09:57');

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `header_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`id`, `photo`, `header_ru`, `header_uz`, `header_en`, `created_at`, `updated_at`) VALUES
(5, '/img_equipment/I6bXPiiD2h.webp', 'Точечный двухтрубный вискозиметр', 'Точечный двухтрубный вискозиметр', 'Точечный двухтрубный вискозиметр', '2022-02-14 10:28:54', '2022-02-14 10:29:40'),
(4, '/img_equipment/oFORqdHWOM.webp', 'Цифровой термогигрометр', 'Цифровой термогигрометр', 'Цифровой термогигрометр', '2022-02-14 10:28:38', '2022-02-14 10:28:38'),
(3, '/img_equipment/JotG8RG5Nx.webp', 'Рефлюксэкстрактор', 'Рефлюксэкстрактор', 'Рефлюксэкстрактор', '2022-02-14 10:15:04', '2022-02-14 10:30:08'),
(6, '/img_equipment/gHlVqEHqfM.webp', 'Отбойный бетонный молот (типа N) Бетонкомпрессорна', 'Отбойный бетонный молот (типа N) Бетонкомпрессорна', 'Отбойный бетонный молот (типа N) Бетонкомпрессорна', '2022-02-14 10:29:54', '2022-02-14 10:29:54'),
(7, '/img_equipment/8ut3hPDD2O.webp', 'Полуавтоматический пенетрометр', 'Полуавтоматический пенетрометр', 'Полуавтоматический пенетрометр', '2022-02-14 10:30:24', '2022-02-14 10:30:35'),
(8, '/img_equipment/S39Mj2KuHY.webp', 'Точечный двухтрубный вискозиметр', 'Точечный двухтрубный вискозиметр', 'Точечный двухтрубный вискозиметр', '2022-02-14 10:33:11', '2022-02-14 10:33:35'),
(9, '/img_equipment/RxOpE2HftL.webp', 'Рефлюксэкстрактор', 'Рефлюксэкстрактор', 'Рефлюксэкстрактор', '2022-02-14 10:33:15', '2022-02-14 10:33:44');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `view`, `created_at`, `updated_at`) VALUES
(40, 'sardor', '91 309 03 18', 1, '2022-02-19 20:03:22', '2022-02-19 21:40:19'),
(41, 'Sami', '91 309 03 18', 1, '2022-02-19 23:20:41', '2022-02-19 23:23:09');

-- --------------------------------------------------------

--
-- Структура таблицы `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `description_ru` text COLLATE utf8mb4_unicode_ci,
  `description_uz` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `year` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `histories`
--

INSERT INTO `histories` (`id`, `photo`, `description_ru`, `description_uz`, `description_en`, `year`, `created_at`, `updated_at`) VALUES
(2, '/img_history/9XNyS650V3.webp', 'Темп развития компании на самом максимальном уровне', 'Темп развития компании на самом максимальном уровне', 'Темп развития компании на самом максимальном уровне', 2, '2022-02-16 08:09:12', '2022-02-16 08:22:19'),
(3, '/img_history/jxM1FPIzLx.webp', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 6, '2022-03-11 02:10:29', '2022-03-11 02:10:29'),
(4, '/img_history/dgWZX5ybdJ.webp', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов!', 6, '2022-03-11 02:10:42', '2022-03-11 02:10:42');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `header_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1_ru` text COLLATE utf8mb4_unicode_ci,
  `description1_uz` text COLLATE utf8mb4_unicode_ci,
  `description1_en` text COLLATE utf8mb4_unicode_ci,
  `description2_ru` text COLLATE utf8mb4_unicode_ci,
  `description2_uz` text COLLATE utf8mb4_unicode_ci,
  `description2_en` text COLLATE utf8mb4_unicode_ci,
  `view_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` text COLLATE utf8mb4_unicode_ci,
  `type_ru` text COLLATE utf8mb4_unicode_ci,
  `type_uz` text COLLATE utf8mb4_unicode_ci,
  `type_en` text COLLATE utf8mb4_unicode_ci,
  `class` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `photo`, `header_ru`, `header_uz`, `header_en`, `description1_ru`, `description1_uz`, `description1_en`, `description2_ru`, `description2_uz`, `description2_en`, `view_ru`, `view_uz`, `view_en`, `size`, `type_ru`, `type_uz`, `type_en`, `class`, `created_at`, `updated_at`) VALUES
(1, '/img_materials/fwJuqbGcKg.webp', 'Мытый песок фракцией 0-5 мм', 'Мытый песок фракцией 0-5 мм', 'Мытый песок фракцией 0-5 мм', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', 'карьерный', 'карьерный', 'карьерный', '1 - 0, 5', 'бетонные смеси, штукатурные растворы', 'бетонные смеси, штукатурные растворы', 'бетонные смеси, штукатурные растворы', 1, '2022-02-14 12:58:48', '2022-02-16 05:44:50'),
(2, '/img_materials/mpRNC7kNdQ.webp', 'Асфальтобетонная смесь марка 1', 'Асфальтобетонная смесь марка 1', 'Асфальтобетонная смесь марка 1', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Темп развития компании на самом максимальном уровне, что является одним &nbsp;Темп развития компании на самом максимальном уровне, что является одним Темп развития компании на самом максимальном уровне, что является одним&nbsp;</p>\r\n\r\n<ul>\r\n	<li>минимальная влажность</li>\r\n	<li>низкое содержание глинистой составляющей</li>\r\n	<li>подходит для штукатурных составов, клеевых и выравнивающих смесей</li>\r\n</ul>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', '<p>Мытый (также &ndash; намывной) песок имеет четыре фракции: тонкая (0,5-1 мм), мелкая (1-2 мм), средняя (2-2,5 мм), крупная (более 2,5 мм). Чаще всего производится и используется первая фракция. Причем иногда ее предпочитают применять вместо речного или морского песка, гранулы которого подвержены оседанию.</p>', 'карьерный', 'карьерный', 'карьерный', '1 - 0, 5', 'бетонные смеси, штукатурные растворы', 'бетонные смеси, штукатурные растворы', 'бетонные смеси, штукатурные растворы', 2, '2022-02-14 14:43:24', '2022-02-14 14:43:24');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `message`, `view`, `created_at`, `updated_at`) VALUES
(46, 'Sami', '91 309 03 18', 'Helloo', 1, '2022-02-19 23:21:03', '2022-02-19 23:23:13'),
(44, 'Sam', '91 309 03 18', 'Здравствуйте', 1, '2022-02-19 04:24:51', '2022-02-19 21:50:37');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_02_10_063040_create_sessions_table', 1),
(10, '2022_02_14_014416_create_productions_table', 2),
(12, '2022_02_14_023337_create_projects_table', 3),
(13, '2022_02_14_125605_create_reports_table', 4),
(14, '2022_02_14_162806_create_workwiths_table', 5),
(15, '2022_02_14_173238_create_partners_table', 6),
(16, '2022_02_14_181513_create_contacts_table', 7),
(17, '2022_02_14_184357_create_feedback_table', 8),
(18, '2022_02_14_195946_create_catalogs_table', 9),
(19, '2022_02_14_201629_create_equipment_table', 9),
(20, '2022_02_14_223308_create_materials_table', 10),
(22, '2022_02_15_042852_create_abouts_table', 11),
(23, '2022_02_16_113112_create_histories_table', 12),
(24, '2022_02_16_113809_create_years_table', 12),
(25, '2022_02_18_002624_create_messages_table', 13),
(26, '2022_02_19_061732_create_categories_table', 14),
(27, '2022_02_19_062020_create_services_table', 14),
(28, '2022_02_19_121449_create_orders_table', 15),
(29, '2022_02_20_041627_create_calculate_costs_table', 16),
(30, '2022_02_20_093640_create_words_table', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `service` int(11) DEFAULT NULL,
  `price_type` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `message`, `service`, `price_type`, `view`, `created_at`, `updated_at`) VALUES
(78, 'test', '+998(00) 000-00-00', 'qwe', 6, 1, 1, '2022-02-22 05:45:50', '2022-02-23 07:22:03');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, '/img_partners/YmWtY8Z0RU.png', '2022-02-14 06:44:00', '2022-02-14 06:58:34'),
(2, '/img_partners/8ktJKQaxTW.png', '2022-02-14 06:46:41', '2022-02-14 06:46:41'),
(3, '/img_partners/eqkRC6xWgc.png', '2022-02-14 06:46:46', '2022-02-14 17:42:36'),
(5, '/img_partners/wXlAhRKw6D.png', '2022-02-14 07:00:14', '2022-02-14 07:00:14');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('samir@gmail.com', '$2y$10$TSS2TAghCiY0rAIUtvH6IODmfQcnJvCsapHYE7pnhexIgvQ67jheG', '2022-02-09 22:22:57');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `productions`
--

CREATE TABLE `productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workers` int(11) DEFAULT NULL,
  `territory` int(11) DEFAULT NULL,
  `years` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `productions`
--

INSERT INTO `productions` (`id`, `workers`, `territory`, `years`, `created_at`, `updated_at`) VALUES
(1, 500, 255, 15, '2022-02-13 15:23:34', '2022-02-13 15:31:52');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `territory` int(11) DEFAULT NULL,
  `number_of_lanes` int(11) DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `header_ru`, `header_uz`, `header_en`, `description_ru`, `description_uz`, `description_en`, `time`, `height`, `territory`, `number_of_lanes`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Транспортная развязка на пересечении ТКАД и улицы Амир Темура', 'AMIR TEMUR LOYIHASI', 'Amir Temur project', 'Транспортная развязка на пересечении ТКАД и улицы Амир Темура', 'AMIR TEMUR LOYIHASI', 'Traffic interchange at the intersection of the TKAD and Amir Temur Street', 2, 40, 255, 4, '/img_project/piUPEvtDL8.jpg', '2022-02-13 21:09:53', '2022-03-10 13:43:44'),
(2, 'Транспортная развязка на пересечении МКАД и улицы Карасарай', 'QARASARAY LOYIHASI', 'KARASARAAY PROJECT', 'Транспортная развязка на пересечении МКАД и улицы Карасарай', 'TKAD va Qorasaroy ko\'chasi chorrahasida harakatlanish joyi', 'Transport interchange at the intersection of the TKAD and KARASARAAY street', 2, 40, 255, 4, '/img_project/BrzBbgzjcX.jpg', '2022-02-13 21:10:08', '2022-03-10 13:42:55'),
(21, 'Транспортная развязка на пересечении МКАД и улицы Сагбан', 'SIGBAN LOYIHAsi', 'SIGBAN PROJECT', 'Транспортная развязка на пересечении МКАД и улицы Сагбан', 'TKAD va Sigbana ko\'chasi chorrahasida harakatlanish joyi', 'Traffic interchange at the intersection of the TKAD and SAGBANA street', 2, 40, 255, 4, '/img_project/z9KnYqMcOM.jpg', '2022-02-14 00:50:07', '2022-03-10 13:43:59');

-- --------------------------------------------------------

--
-- Структура таблицы `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_ru` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_uz` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_en` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci,
  `description_uz` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `photo_a` text COLLATE utf8mb4_unicode_ci,
  `description1_ru` text COLLATE utf8mb4_unicode_ci,
  `description1_uz` text COLLATE utf8mb4_unicode_ci,
  `description1_en` text COLLATE utf8mb4_unicode_ci,
  `photo_b` text COLLATE utf8mb4_unicode_ci,
  `photo_c` text COLLATE utf8mb4_unicode_ci,
  `description2_ru` text COLLATE utf8mb4_unicode_ci,
  `description2_uz` text COLLATE utf8mb4_unicode_ci,
  `description2_en` text COLLATE utf8mb4_unicode_ci,
  `photo_d` text COLLATE utf8mb4_unicode_ci,
  `description3_ru` text COLLATE utf8mb4_unicode_ci,
  `description3_uz` text COLLATE utf8mb4_unicode_ci,
  `description3_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reports`
--

INSERT INTO `reports` (`id`, `header_ru`, `header_uz`, `header_en`, `description_ru`, `description_uz`, `description_en`, `photo_a`, `description1_ru`, `description1_uz`, `description1_en`, `photo_b`, `photo_c`, `description2_ru`, `description2_uz`, `description2_en`, `photo_d`, `description3_ru`, `description3_uz`, `description3_en`, `created_at`, `updated_at`) VALUES
(1, 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '/img_reports/1RjwQtq1lY.webp', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '/img_reports/hwVhBLIpNA.webp', '/img_reports/st63yv4N3A.webp', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '/img_reports/pQ2trYa2Mh.webp', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '<p><strong>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самомТемп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсовТемп развития компании на&nbsp;самом</p>', '2022-02-14 03:29:20', '2022-02-14 04:52:45'),
(2, 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '/img_reports/PckA7Q2uWK.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '/img_reports/xE99bVHVOg.webp', '/img_reports/zWD7T4IZ8p.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '/img_reports/qcpEYZV9bS.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong></p>\r\n\r\n<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов&nbsp;Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '2022-02-14 04:20:20', '2022-02-14 05:00:03'),
(3, 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов ', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов ', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов ', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '/img_reports/S7W6bA8zsW.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '/img_reports/4o8hFWic6t.webp', '/img_reports/01SY7lY7Nj.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong>&nbsp;</p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '/img_reports/ubETqvfZys.webp', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;</strong></p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '<p><strong>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</strong>&nbsp;</p>\r\n\r\n<p>Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов&nbsp;Темп развития компании на самом максимальном уровне, что является одним из важных плюсов</p>', '2022-02-14 04:40:37', '2022-02-14 05:02:32');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `service_name_ru` text COLLATE utf8mb4_unicode_ci,
  `service_name_uz` text COLLATE utf8mb4_unicode_ci,
  `service_name_en` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `description_ru` text COLLATE utf8mb4_unicode_ci,
  `description_uz` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `full_price` text COLLATE utf8mb4_unicode_ci,
  `price` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `category_id`, `service_name_ru`, `service_name_uz`, `service_name_en`, `photo`, `description_ru`, `description_uz`, `description_en`, `full_price`, `price`, `created_at`, `updated_at`) VALUES
(6, 1, 'Стандартное', 'Стандартное', 'Стандартное', '/img_calculator/QeNTG86Q9T.webp', '<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>', '<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>', '<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp; &nbsp;Слой песка: 15см</p>', '1000$', '800$', '2022-02-19 04:23:04', '2022-02-22 08:16:19'),
(4, 2, 'Бюджетное', 'Byudjetli', 'Budgetary', '/img_calculator/i80u8II77K.webp', '<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>', '<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>', '<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>\r\n\r\n<p>Слой песка: 15см&nbsp; &nbsp;Слой песка: 15см</p>', '1200$', '1000$', '2022-02-19 03:01:05', '2022-02-19 04:22:42');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UKLZvjHIOtv6fVp5qkh6cHFE1ErplVsSSgExA8xj', NULL, '34.86.35.18', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVjRDT2ZRVEpDZThIQm9HN0FPRk82b3BiWTRLemZhcHJSTDRzcGw4RiI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649775580),
('IlvafZAPpJ84EaWtV7VjP41sBQLj8s9ns1uQ8saV', NULL, '198.235.24.29', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMUx4QkhJR0d2QzZMcTFPNU1XNFM2MkZFdkgwOUNTeGw5eENQTjZMYyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649828608),
('vsRfNcSwlKUrRl98AcauggG8gauZ6Q3ZCbN7pIt6', NULL, '13.234.11.248', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic1lidlhOVGtwbUFlYk5hMHlsdVlPOWloUnpGNVRja29HYW1GZnRxdSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1650429989),
('nClGebofKhJ1ylJkw80wOhVUGjNk4ltZLvQFm45M', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibjRZSGJEemxpQjJoRXQ0WU5nWldGS1EwRW5TUnhqNnJYdWp1eVQzSyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1650809888),
('kLkn7X0h0LaBHjeQCsBeaKCDY9lG9p1RBnUsfvuJ', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRjVycnRaa0pFUWNWaVpmSWRhaXlZb1lwSndIdFlkbktrQmgwODZ3RiI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1650809897),
('U7cNxQFc2gdscf8wnjeP0UCAInTKYlQ7IWBkZTE8', NULL, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU0RydHh4eG53WVVaSHAxVFRwTGZGd2taaldmbVhBaVl3MmxybTEwMSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1650868451),
('HNoxywb6Tlgd2rj9RpLeyJ68GfMYrUbLTYTP4S4d', 2, '195.158.30.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.141 YaBrowser/22.3.2.644 Yowser/2.5 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiM2xzclJKYzJwN0phMXdva3d2M0VvemtzSmpDVHQwME9WUTgwZHNXVSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydS9hYm91dHMvMS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR3bnMuZDZyRmZIakxwWVJHWjNsY04uNjhqMHhKS3RldlFtc2dMN1dhSjZ5ZzhBajdQdGdINiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkd25zLmQ2ckZmSGpMcFlSR1ozbGNOLjY4ajB4Skt0ZXZRbXNnTDdXYUo2eWc4QWo3UHRnSDYiO30=', 1651064618),
('myLQ8vqE5ANSE08gL3CxIty6MnC2A16sPCzGBXn9', NULL, '34.77.162.21', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMDlwdWdLNmx3ZmtNRTRTRWl2MFB0Z3lJWWVSNEFnY1VSS1BUc2hPQSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649452325),
('hcykj10R8s1tq0kkJZhxZId9yXnmMgr8LfsOtl0d', NULL, '34.77.162.28', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGJNdEt4Q2hvTzUzYmtaQ2xXM2ZvdDhGcGZSbm43NWk1OEZsY1hWQyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwczovL2dycm9hZC51MTA1NjYxMC5jcC5yZWdydWhvc3RpbmcucnUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649715343),
('lK0BKoqOmJS1RZ6h5ky1fDbqX67tj9Mcz5vZoU9p', NULL, '5.255.231.204', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.268', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoickVqR0dWaERxelB2dzVjTVE4b0lFSjU5VFRrQk4zNDVDVTF3QVczUCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649655435),
('HY1QOkAt6muL7vebXLPKAmTcF1mwDP9jK2TRRt2C', NULL, '92.118.160.61', 'NetSystemsResearch studies the availability of various services across the internet. Our website is netsystemsresearch.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicVp6UzBGdVczQlhEYzR2dWhiZVQ2azdIaUJ0QWZFS3RodFR3MWxYUSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwczovL2dycm9hZC51MTA1NjYxMC5jcC5yZWdydWhvc3RpbmcucnUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649707060),
('zQaapvAn1aCR3ryJS2VV5IeF8s1gobUzJbFsruqz', NULL, '34.86.35.17', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidVRRcno4T1ZEQkpiaUJtb2hxd1dONnlYUGdDUXR5UWdXU1RlNjFQNyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649713558),
('pGXs18iEf8kMqDAq8AdPdTaxgojtJxRNV5m7sMa2', NULL, '5.255.253.142', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUTNYQ0JqZllhZEw0NlIxemluYjNvZUZCM2JuV0dqY1EwY2NwNFU3dSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydS9wbGFuaW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649655215),
('yRNhewV406AkohwiyxNV59VnDycoTwExe80ihqCx', NULL, '5.255.231.204', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.268', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVzI2MjFwQ2Y4eVJzQ1kyVmRFQ2p5SXJ5cUwwazA4NmJrVmhsYUFVbyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649655348),
('V5KF07TPtoJXjiwDxagPmxBUR4PwjFqXrGRq8xoV', NULL, '92.118.160.5', 'NetSystemsResearch studies the availability of various services across the internet. Our website is netsystemsresearch.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTnVEY0diMGxkY0g5cXZwcTd1TnlEV09sSW85Nm9uMkVvOFFtTFhNNSI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649492550),
('1YTs4PpkvbWKuX5jFsiABF9XFK9h5VACOa7m07Jj', NULL, '87.250.224.86', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.268', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNVBSRVQycjVjNGY0UGkxQWJGekp3UkpkWVFtREZNb0tOOG9WWUROeCI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydS9yZXBvcnRzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1649589619),
('6KXxzq3FBjOEF2Fz8gupFWQdfbuqdTWTAe2oo59F', NULL, '34.86.35.27', 'Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicFhJcG41bVZqb3o3WUt0ZTl2YW5aa09tT2JaQWk2eHFBZFVyZ2tlTyI7czo2OiJsb2NhbGUiO3M6MjoicnUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vZ3Jyb2FkLnUxMDU2NjEwLmNwLnJlZ3J1aG9zdGluZy5ydSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649453081);

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sam\'s Team', 1, '2022-02-09 19:34:40', '2022-02-09 19:34:40'),
(2, 2, 'Sam\'s Team', 1, '2022-03-01 08:48:23', '2022-03-01 08:48:23');

-- --------------------------------------------------------

--
-- Структура таблицы `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$knJ31f1sa4Nu.gqTBhlQjeXvteAw2gOn19m7LnzccEQT02ESvIhaO', NULL, NULL, NULL, 1, NULL, '2022-02-09 19:34:40', '2022-03-14 03:19:26'),
(2, 'Sam', 'ravshanovsamir@gmail.com', NULL, '$2y$10$wns.d6rFfHjLpYRGZ3lcN.68j0xJKtevQmsgL7WaJ6yg8Aj7PtgH6', NULL, NULL, NULL, NULL, NULL, '2022-03-01 08:48:23', '2022-03-01 08:51:35');

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci,
  `ru` text COLLATE utf8mb4_unicode_ci,
  `uz` text COLLATE utf8mb4_unicode_ci,
  `en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `key`, `ru`, `uz`, `en`, `created_at`, `updated_at`) VALUES
(1, 'Главная', 'Главная', 'Bosh sahifa', 'Main', '2022-02-20 05:16:34', '2022-02-20 05:45:16'),
(2, 'Услуги', 'Услуги', 'Услуги', 'Услуги', '2022-02-20 05:18:08', '2022-02-20 05:18:08'),
(3, 'Производство', 'Производство', 'Производство', 'Производство', '2022-02-20 06:10:27', '2022-02-20 06:10:27'),
(4, 'Проекты', 'Проекты', 'Проекты', 'Проекты', '2022-02-20 06:10:35', '2022-02-20 06:10:35'),
(5, 'Продукция', 'Продукция', 'Продукция', 'Продукция', '2022-02-20 06:10:46', '2022-02-20 06:10:46'),
(6, 'Новости', 'Новости', 'Новости', 'Новости', '2022-02-20 06:12:26', '2022-02-20 06:12:26'),
(7, 'Контакты', 'Контакты', 'Контакты', 'Контакты', '2022-02-20 06:12:41', '2022-02-20 06:12:41'),
(8, 'Асфальтирование,', 'Асфальтирование,', 'Асфальтирование,', 'Асфальтирование,', '2022-02-20 06:13:23', '2022-03-10 08:10:09'),
(9, 'прокладка дорог, дорожно- строительные работы', 'прокладка дорог, дорожно- строительные работы', 'прокладка дорог, дорожно- строительные работы', 'прокладка дорог, дорожно- строительные работы', '2022-02-20 06:13:48', '2022-03-10 08:09:03'),
(10, 'Ответственность и исполнительность — отличительные черты нашей компании. Довольный клиент — наша цель.', 'Ответственность и исполнительность — отличительные черты нашей компании. Довольный клиент — наша цель.', 'Ответственность и исполнительность — отличительные черты нашей компании. Довольный клиент — наша цель.', 'Ответственность и исполнительность — отличительные черты нашей компании. Довольный клиент — наша цель.', '2022-02-20 06:21:42', '2022-03-10 11:08:05'),
(204, 'Вся продукция производится на современном высокотехнологичном оборудовании европейских компаний.', 'Вся продукция производится на современном высокотехнологичном оборудовании европейских компаний.', 'Вся продукция производится на современном высокотехнологичном оборудовании европейских компаний.', 'Вся продукция производится на современном высокотехнологичном оборудовании европейских компаний.', '2022-03-10 11:09:16', '2022-03-10 11:09:16'),
(11, 'Узнать больше', 'Узнать больше', 'Узнать больше', 'Узнать больше', '2022-02-20 06:22:01', '2022-02-20 06:22:01'),
(12, 'Скачать каталог', 'Скачать каталог', 'Скачать каталог', 'Скачать каталог', '2022-02-20 06:22:13', '2022-02-20 06:22:13'),
(13, 'Проектирование', 'Проектирование', 'Проектирование', 'Проектирование', '2022-02-20 06:29:25', '2022-02-20 06:29:25'),
(14, 'Разметка дорог', 'Разметка дорог', 'Разметка дорог', 'Разметка дорог', '2022-02-20 06:31:00', '2022-02-20 06:31:00'),
(15, 'Лаборатория', 'Лаборатория', 'Лаборатория', 'Лаборатория', '2022-02-20 06:31:23', '2022-02-20 06:31:23'),
(16, 'Нами используются современные технологии ремонта и асфальтирования дорожного покрытия. Мы успешно применяем европейские технологии. При выполнении работ используются материалы соответствующие дорожно-строительным гостам.', 'Нами используются современные технологии ремонта и асфальтирования дорожного покрытия. Мы успешно применяем европейские технологии. При выполнении работ используются материалы соответствующие дорожно-строительным гостам.', 'Нами используются современные технологии ремонта и асфальтирования дорожного покрытия. Мы успешно применяем европейские технологии. При выполнении работ используются материалы соответствующие дорожно-строительным гостам.', 'Нами используются современные технологии ремонта и асфальтирования дорожного покрытия. Мы успешно применяем европейские технологии. При выполнении работ используются материалы соответствующие дорожно-строительным гостам.', '2022-02-20 06:37:42', '2022-03-10 11:07:05'),
(17, 'О компании', 'О компании', 'О компании', 'О компании', '2022-02-20 06:40:21', '2022-02-20 06:40:21'),
(18, 'С кем мы работаем', 'С кем мы работаем', 'С кем мы работаем', 'С кем мы работаем', '2022-02-20 06:40:34', '2022-02-20 06:40:34'),
(19, 'Наши партнёры', 'Наши партнеры', 'Наши партнеры', 'Наши партнеры', '2022-02-20 06:40:46', '2022-02-20 07:00:22'),
(20, 'Наши специалисты работают на современном оборудовании, а для<br> выполнения поставленных задач используют высококачественные материалы.', 'Наши специалисты работают на современном оборудовании, а для<br> выполнения поставленных задач используют высококачественные материалы.', 'Наши специалисты работают на современном оборудовании, а для<br> выполнения поставленных задач используют высококачественные материалы.', 'Наши специалисты работают на современном оборудовании, а для<br> выполнения поставленных задач используют высококачественные материалы.', '2022-02-20 06:42:28', '2022-03-10 11:05:35'),
(21, 'Количество работников', 'Количество работников', 'Количество работников', 'Количество работников', '2022-02-20 06:42:41', '2022-02-20 06:42:41'),
(22, 'Территория карьера', 'Территория карьера', 'Территория карьера', 'Территория карьера', '2022-02-20 06:42:48', '2022-02-20 06:42:48'),
(23, 'лет на рынке', 'лет на рынке', 'лет на рынке', 'лет на рынке', '2022-02-20 06:42:56', '2022-02-20 06:42:56'),
(24, 'Все проекты', 'Все проекты', 'Все проекты', 'Все проекты', '2022-02-20 06:43:11', '2022-02-20 06:43:11'),
(25, 'Скачать каталог PDF', 'Скачать каталог PDF', 'Скачать каталог PDF', 'Скачать каталог PDF', '2022-02-20 06:44:16', '2022-02-20 06:44:16'),
(26, 'Инертные материалы', 'Инертные материалы', 'Инертные материалы', 'Инертные материалы', '2022-02-20 06:44:57', '2022-02-20 06:44:57'),
(27, 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', 'Темп развития компании на самом максимальном уровне, что является одним из важных плюсов', '2022-02-20 06:46:02', '2022-02-20 06:46:02'),
(28, 'Асфальтовое покрытие', 'Асфальтовое покрытие', 'Асфальтовое покрытие', 'Асфальтовое покрытие', '2022-02-20 06:46:51', '2022-02-20 06:46:51'),
(29, 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', '2022-02-20 06:47:11', '2022-02-20 06:48:14'),
(30, 'ДОРОЖНАЯ ТЕХНИКА', 'ДОРОЖНАЯ ТЕХНИКА', 'ДОРОЖНАЯ ТЕХНИКА', 'ДОРОЖНАЯ ТЕХНИКА', '2022-02-20 06:47:27', '2022-02-20 06:48:38'),
(31, 'СОВРЕМЕННАЯ ДОРОЖНО-СТРОИТЕЛЬНАЯ ЛАБОРАТОРИЯ', 'СОВРЕМЕННАЯ ДОРОЖНО-СТРОИТЕЛЬНАЯ ЛАБОРАТОРИЯ', 'СОВРЕМЕННАЯ ДОРОЖНО-СТРОИТЕЛЬНАЯ ЛАБОРАТОРИЯ', 'СОВРЕМЕННАЯ ДОРОЖНО-СТРОИТЕЛЬНАЯ ЛАБОРАТОРИЯ', '2022-02-20 06:48:52', '2022-02-20 06:48:52'),
(32, 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', '2022-02-20 06:49:06', '2022-02-20 06:49:06'),
(33, 'СВЯЗАТЬСЯ С НАМИ', 'СВЯЗАТЬСЯ С НАМИ', 'СВЯЗАТЬСЯ С НАМИ', 'СВЯЗАТЬСЯ С НАМИ', '2022-02-20 06:49:19', '2022-02-20 06:49:19'),
(34, 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', '2022-02-20 06:49:27', '2022-02-20 06:49:27'),
(35, 'Написать', 'Написать', 'Написать', 'Написать', '2022-02-20 06:49:34', '2022-02-20 06:49:34'),
(36, 'Все новости', 'Все новости', 'Все новости', 'Все новости', '2022-02-20 06:51:30', '2022-02-20 06:51:30'),
(37, 'Вы можете написать нам свой вопрос. Мы ответим вам немедленно. Заполните обязательные поля и нажмите кнопку «Отправить» в предоставленной форме.', 'Вы можете написать нам свой вопрос. Мы ответим вам немедленно. Заполните обязательные поля и нажмите кнопку «Отправить» в предоставленной форме', 'Вы можете написать нам свой вопрос. Мы ответим вам немедленно. Заполните обязательные поля и нажмите кнопку «Отправить» в предоставленной форме', 'Вы можете написать нам свой вопрос. Мы ответим вам немедленно. Заполните обязательные поля и нажмите кнопку «Отправить» в предоставленной форме', '2022-02-20 06:53:36', '2022-02-20 06:56:50'),
(38, 'Ваше имя фамилия', 'Ваше имя фамилия', 'Ваше имя фамилия', 'Ваше имя фамилия', '2022-02-20 06:53:47', '2022-02-20 06:53:47'),
(39, 'Ваш номер телефона', 'Ваш номер телефона', 'Ваш номер телефона', 'Ваш номер телефона', '2022-02-20 06:54:00', '2022-02-20 06:54:00'),
(40, 'Ваше сообщение', 'Ваше сообщение', 'Ваше сообщение', 'Ваше сообщение', '2022-02-20 06:54:09', '2022-02-20 06:54:09'),
(41, 'Отправить', 'Отправить', 'Отправить', 'Отправить', '2022-02-20 06:54:23', '2022-02-20 06:54:23'),
(42, 'Ваша заявка успешно отправлена', 'Ваша заявка успешно отправлена', 'Ваша заявка успешно отправлена', 'Ваша заявка успешно отправлена', '2022-02-20 06:54:57', '2022-02-20 06:54:57'),
(43, 'Наши менеджеры обязательно свяжутся с Вами и ответят на все Ваши вопросы.', 'Наши менеджеры обязательно свяжутся с Вами и ответят на все Ваши вопросы.', 'Наши менеджеры обязательно свяжутся с Вами и ответят на все Ваши вопросы.', 'Наши менеджеры обязательно свяжутся с Вами и ответят на все Ваши вопросы.', '2022-02-20 06:55:15', '2022-02-20 06:55:15'),
(44, 'На главную', 'На главную', 'На главную', 'На главную', '2022-02-20 06:55:22', '2022-02-20 06:55:22'),
(45, 'Дорожное строительство', 'Дорожное строительство', 'Дорожное строительство', 'Дорожное строительство', '2022-02-20 07:01:17', '2022-02-20 07:01:17'),
(46, 'СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.', 'СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.', 'СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.', 'СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.', '2022-02-20 07:47:37', '2022-02-20 07:47:37'),
(47, 'КОМПАНИЯ «GRAND ROAD TASHKENT»', 'КОМПАНИЯ «GRAND ROAD TASHKENT»', 'КОМПАНИЯ «GRAND ROAD TASHKENT»', 'КОМПАНИЯ «GRAND ROAD TASHKENT»', '2022-02-20 07:47:55', '2022-02-20 07:47:55'),
(48, 'Ведущий производитель', 'Ведущий производитель', 'Ведущий производитель', 'Ведущий производитель', '2022-02-20 07:48:25', '2022-02-20 07:48:25'),
(49, 'Общая площадь завода', 'Общая площадь завода', 'Общая площадь завода', 'Общая площадь завода', '2022-02-20 07:48:32', '2022-02-20 07:48:32'),
(50, 'тонна', 'тонна', 'тонна', 'тонна', '2022-02-20 07:49:13', '2022-02-20 07:49:13'),
(51, 'Производство инертных материалов', 'Производство инертных материалов', 'Производство инертных материалов', 'Производство инертных материалов', '2022-02-20 07:49:24', '2022-02-20 07:57:44'),
(52, 'ИСТОРИЯ КОМПАНИИ', 'ИСТОРИЯ КОМПАНИИ', 'ИСТОРИЯ КОМПАНИИ', 'ИСТОРИЯ КОМПАНИИ', '2022-02-20 07:49:51', '2022-02-20 07:49:51'),
(53, 'Специализация предприятия', 'Специализация предприятия', 'Специализация предприятия', 'Специализация предприятия', '2022-02-20 07:50:07', '2022-02-20 07:50:07'),
(54, 'НАМ ДОВЕРЯЮТ', 'НАМ ДОВЕРЯЮТ', 'НАМ ДОВЕРЯЮТ', 'НАМ ДОВЕРЯЮТ', '2022-02-20 07:50:58', '2022-02-20 07:55:05'),
(55, 'Адрес:', 'Адрес:', 'Адрес:', 'Адрес:', '2022-02-20 07:53:13', '2022-02-20 07:54:47'),
(56, 'Телефон:', 'Телефон:', 'Телефон:', 'Телефон:', '2022-02-20 07:53:38', '2022-02-20 07:54:47'),
(57, 'Факс:', 'Факс:', 'Факс:', 'Факс:', '2022-02-20 07:53:47', '2022-02-20 07:54:47'),
(58, 'Почта:', 'Почта:', 'Почта:', 'Почта:', '2022-02-20 07:54:09', '2022-02-20 07:54:46'),
(59, 'Мы в соц.сетях:', 'Мы в соц.сетях:', 'Мы в соц.сетях:', 'Мы в соц.сетях:', '2022-02-20 07:54:31', '2022-02-20 07:54:31'),
(60, 'Пн-чт:', 'Пн-чт:', 'Пн-чт:', 'Пн-чт:', '2022-02-20 07:58:45', '2022-02-20 07:58:45'),
(61, 'Пятница:', 'Пятница:', 'Пятница:', 'Пятница:', '2022-02-20 07:58:52', '2022-02-20 07:59:12'),
(62, 'Рабочие дни:', 'Рабочие дни:', 'Рабочие дни:', 'Рабочие дни:', '2022-02-20 07:59:52', '2022-02-20 07:59:52'),
(63, 'Разработка сайта', 'Разработка сайта', 'Разработка сайта', 'Разработка сайта', '2022-02-20 08:00:21', '2022-02-20 08:00:21'),
(64, 'Укладка асфальта', 'Укладка асфальта', 'Укладка асфальта', 'Укладка асфальта', '2022-02-20 08:09:12', '2022-02-20 08:09:12'),
(65, 'соответствуют всем физико-механическим характеристикам ГОСТов;<br>качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br>качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br>качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br>качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', '2022-02-20 08:09:31', '2022-02-20 08:13:03'),
(66, 'Этапы работ', 'Этапы работ', 'Этапы работ', 'Этапы работ', '2022-02-20 08:09:46', '2022-02-20 08:09:46'),
(67, 'Лабораторные исследования', 'Лабораторные исследования', 'Лабораторные исследования', 'Лабораторные исследования', '2022-02-20 08:09:55', '2022-02-20 08:09:55'),
(68, 'Геодезические исследования', 'Геодезические исследования', 'Геодезические исследования', 'Геодезические исследования', '2022-02-20 08:10:03', '2022-02-20 08:10:03'),
(69, 'Подбор оптимального вида асфальта', 'Подбор оптимального вида асфальта', 'Подбор оптимального вида асфальта', 'Подбор оптимального вида асфальта', '2022-02-20 08:10:12', '2022-02-20 08:10:12'),
(70, 'Подбор оборудования и техники', 'Подбор оборудования и техники', 'Подбор оборудования и техники', 'Подбор оборудования и техники', '2022-02-20 08:10:20', '2022-02-20 08:10:20'),
(71, 'Благоустройство и создание инфраструктуры', 'Благоустройство и создание инфраструктуры', 'Благоустройство и создание инфраструктуры', 'Благоустройство и создание инфраструктуры', '2022-02-20 08:10:43', '2022-02-20 08:10:43'),
(72, 'Укладка дорожного полотна', 'Укладка дорожного полотна', 'Укладка дорожного полотна', 'Укладка дорожного полотна', '2022-02-20 08:11:11', '2022-02-20 08:11:11'),
(73, 'Определение сетевого графика', 'Определение сетевого графика', 'Определение сетевого графика', 'Определение сетевого графика', '2022-02-20 08:11:44', '2022-02-20 08:11:44'),
(74, 'Технология OKUR', 'Технология OKUR', 'Технология OKUR', 'Технология OKUR', '2022-02-20 08:14:00', '2022-02-20 08:14:00'),
(75, 'основание, на котором уложены слои щебня, является несущим слоем «дорожной одежды», он воспринимает транспортную нагрузку и распределяет ее на земляное полотно', 'основание, на котором уложены слои щебня, является несущим слоем «дорожной одежды», он воспринимает транспортную нагрузку и распределяет ее на земляное полотно', 'основание, на котором уложены слои щебня, является несущим слоем «дорожной одежды», он воспринимает транспортную нагрузку и распределяет ее на земляное полотно', 'основание, на котором уложены слои щебня, является несущим слоем «дорожной одежды», он воспринимает транспортную нагрузку и распределяет ее на земляное полотно', '2022-02-20 08:14:20', '2022-02-20 08:14:20'),
(76, 'Финишная отделка', 'Финишная отделка', 'Финишная отделка', 'Финишная отделка', '2022-02-20 08:15:17', '2022-02-20 08:15:17'),
(77, 'это верхний слой основания, основное назначение которого состоит в распределении эксплуатационных нагрузок. Применяется особый материал с высокими прочностными свойствами, который производится с оптимальной влажностью.', 'это верхний слой основания, основное назначение которого состоит в распределении эксплуатационных нагрузок. Применяется особый материал с высокими прочностными свойствами, который производится с оптимальной влажностью.', 'это верхний слой основания, основное назначение которого состоит в распределении эксплуатационных нагрузок. Применяется особый материал с высокими прочностными свойствами, который производится с оптимальной влажностью.', 'это верхний слой основания, основное назначение которого состоит в распределении эксплуатационных нагрузок. Применяется особый материал с высокими прочностными свойствами, который производится с оптимальной влажностью.', '2022-02-20 08:15:43', '2022-02-20 08:15:43'),
(78, 'Разметка горячая термопластиком', 'Разметка горячая термопластиком', 'Разметка горячая термопластиком', 'Разметка горячая термопластиком', '2022-02-20 08:15:52', '2022-02-20 08:15:52'),
(79, 'способ нанесения дорожной разметки путем разогрева полимерного материала до жидкого состояния, с последующим нанесением его на размечаемую поверхность. Данный способ применяется в местах с повышенными требованиями к износостойкости и сроку службы разметки', 'способ нанесения дорожной разметки путем разогрева полимерного материала до жидкого состояния, с последующим нанесением его на размечаемую поверхность. Данный способ применяется в местах с повышенными требованиями к износостойкости и сроку службы разметки', 'способ нанесения дорожной разметки путем разогрева полимерного материала до жидкого состояния, с последующим нанесением его на размечаемую поверхность. Данный способ применяется в местах с повышенными требованиями к износостойкости и сроку службы разметки', 'способ нанесения дорожной разметки путем разогрева полимерного материала до жидкого состояния, с последующим нанесением его на размечаемую поверхность. Данный способ применяется в местах с повышенными требованиями к износостойкости и сроку службы разметки', '2022-02-20 08:16:08', '2022-02-20 08:16:08'),
(80, 'Инновационные технологии ирригационной системы', 'Инновационные технологии ирригационной системы', 'Инновационные технологии ирригационной системы', 'Инновационные технологии ирригационной системы', '2022-02-20 08:16:19', '2022-02-20 08:16:19'),
(81, 'новая дренажная система с высокими техническими характеристиками препятствует разрушению дорожного покрытия и продлевает срок эксплуатации дороги', 'новая дренажная система с высокими техническими характеристиками препятствует разрушению дорожного покрытия и продлевает срок эксплуатации дороги', 'новая дренажная система с высокими техническими характеристиками препятствует разрушению дорожного покрытия и продлевает срок эксплуатации дороги', 'новая дренажная система с высокими техническими характеристиками препятствует разрушению дорожного покрытия и продлевает срок эксплуатации дороги', '2022-02-20 08:16:32', '2022-02-20 08:16:32'),
(82, 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов', '2022-02-20 08:17:25', '2022-02-20 08:17:25'),
(83, 'СВЯЖИТЕСЬ С НАМИ', 'СВЯЖИТЕСЬ С НАМИ', 'СВЯЖИТЕСЬ С НАМИ', 'СВЯЖИТЕСЬ С НАМИ', '2022-02-20 08:18:37', '2022-02-20 08:18:37'),
(84, 'ПРОДУКЦИЯ', 'ПРОДУКЦИЯ', 'ПРОДУКЦИЯ', 'ПРОДУКЦИЯ', '2022-02-20 08:25:25', '2022-02-20 08:25:25'),
(85, 'Преимущества', 'Преимущества', 'Преимущества', 'Преимущества', '2022-02-20 08:27:13', '2022-02-20 08:27:13'),
(86, 'В структуру СП ООО Grand Road Tashkent входит проектная организация, которая занимается широким спектром проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная организация, которая занимается широким спектром проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная организация, которая занимается широким спектром проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная организация, которая занимается широким спектром проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', '2022-02-20 08:27:28', '2022-02-20 08:27:28'),
(87, 'Калькулятор расчета', 'Калькулятор расчета', 'Калькулятор расчета', 'Калькулятор расчета', '2022-02-20 08:27:39', '2022-02-20 08:27:39'),
(88, 'входной контроль качества и анализ инертных материалов;', 'входной контроль качества и анализ инертных материалов;', 'входной контроль качества и анализ инертных материалов;', 'входной контроль качества и анализ инертных материалов;', '2022-02-20 08:27:59', '2022-02-20 08:27:59'),
(89, 'разработку составов асфальтобетонных и бетонных смесей;', 'разработку составов асфальтобетонных и бетонных смесей;', 'разработку составов асфальтобетонных и бетонных смесей;', 'разработку составов асфальтобетонных и бетонных смесей;', '2022-02-20 08:28:06', '2022-02-20 08:28:06'),
(90, 'разработку и контроль технологического процесса производства;', 'разработку и контроль технологического процесса производства;', 'разработку и контроль технологического процесса производства;', 'разработку и контроль технологического процесса производства;', '2022-02-20 08:28:14', '2022-02-20 08:28:14'),
(91, 'контроль качества произведенной продукции;', 'контроль качества произведенной продукции;', 'контроль качества произведенной продукции;', 'контроль качества произведенной продукции;', '2022-02-20 08:28:22', '2022-02-20 08:28:22'),
(92, 'полное сопровождение объектов дорожного строительства', 'полное сопровождение объектов дорожного строительства', 'полное сопровождение объектов дорожного строительства', 'полное сопровождение объектов дорожного строительства', '2022-02-20 08:28:32', '2022-02-20 08:28:32'),
(93, 'оформление документов по лабораторным и полевым испытаниям;', 'оформление документов по лабораторным и полевым испытаниям;', 'оформление документов по лабораторным и полевым испытаниям;', 'оформление документов по лабораторным и полевым испытаниям;', '2022-02-20 08:28:39', '2022-02-20 08:28:39'),
(94, 'контроль качества выполненных работ на объектах строительства;', 'контроль качества выполненных работ на объектах строительства;', 'контроль качества выполненных работ на объектах строительства;', 'контроль качества выполненных работ на объектах строительства;', '2022-02-20 08:28:46', '2022-02-20 08:28:46'),
(95, 'Контроль качества материалов и работ является основным условием надежности нашей продукции', 'Контроль качества материалов и работ является основным условием надежности нашей продукции', 'Контроль качества материалов и работ является основным условием надежности нашей продукции', 'Контроль качества материалов и работ является основным условием надежности нашей продукции', '2022-02-20 08:28:55', '2022-02-20 08:28:55'),
(96, 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов и инертных материалов; органических вяжущих; асфальтобетонных смесей различных типов и марок; цемента, бетонных смесей и бетона.', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов и инертных материалов; органических вяжущих; асфальтобетонных смесей различных типов и марок; цемента, бетонных смесей и бетона.', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов и инертных материалов; органических вяжущих; асфальтобетонных смесей различных типов и марок; цемента, бетонных смесей и бетона.', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов и инертных материалов; органических вяжущих; асфальтобетонных смесей различных типов и марок; цемента, бетонных смесей и бетона.', '2022-02-20 08:29:11', '2022-02-20 08:29:11'),
(97, 'НАШЕ ОБОРУДОВАНИЕ', 'НАШЕ ОБОРУДОВАНИЕ', 'НАШЕ ОБОРУДОВАНИЕ', 'НАШЕ ОБОРУДОВАНИЕ', '2022-02-20 08:29:31', '2022-02-20 08:29:31'),
(98, 'Заказать обратный звонок', 'Заказать обратный звонок', 'Заказать обратный звонок', 'Заказать обратный звонок', '2022-02-20 08:32:25', '2022-02-20 08:32:25'),
(99, 'Оставьте ваши координаты и мы свяжемся с вами в ближайшее время', 'Оставьте ваши координаты и мы свяжемся с вами в ближайшее время', 'Оставьте ваши координаты и мы свяжемся с вами в ближайшее время', 'Оставьте ваши координаты и мы свяжемся с вами в ближайшее время', '2022-02-20 08:32:34', '2022-02-20 08:32:34'),
(100, 'Ваше имя', 'Ваше имя', 'Ваше имя', 'Ваше имя', '2022-02-20 08:32:43', '2022-02-20 08:32:43'),
(101, 'Ваш телефон', 'Ваш телефон', 'Ваш телефон', 'Ваш телефон', '2022-02-20 08:32:51', '2022-02-20 08:32:51'),
(102, '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '2022-02-20 08:39:06', '2022-02-22 06:25:31'),
(103, '<p>Без снятия старого покрытия</p>', '<p>Без снятия старого покрытия</p>', '<p>Без снятия старого покрытия</p>', '<p>Без снятия старого покрытия</p>', '2022-02-20 08:39:23', '2022-02-22 06:24:52'),
(104, 'Оставить заявку', 'Оставить заявку', 'Оставить заявку', 'Оставить заявку', '2022-02-20 08:39:37', '2022-02-20 08:39:37'),
(105, 'ОСТАВЬТЕ ЗАЯВКУ', 'ОСТАВЬТЕ ЗАЯВКУ', 'ОСТАВЬТЕ ЗАЯВКУ', 'ОСТАВЬТЕ ЗАЯВКУ', '2022-02-20 08:40:34', '2022-02-20 08:40:34'),
(106, 'свяжитесь с нами', 'свяжитесь с нами', 'свяжитесь с нами', 'свяжитесь с нами', '2022-02-20 08:40:49', '2022-02-20 08:40:49'),
(107, 'имя фамили', 'имя фамили', 'имя фамили', 'имя фамили', '2022-02-20 08:41:07', '2022-02-20 08:41:07'),
(108, 'номер телефона', 'номер телефона', 'номер телефона', 'номер телефона', '2022-02-20 08:41:15', '2022-02-20 08:41:15'),
(109, 'сообщение', 'сообщение', 'сообщение', 'сообщение', '2022-02-20 08:41:23', '2022-02-20 08:41:23'),
(110, 'Соответствуют всем физико-механическим характеристикам ГОСТов; качество и свойства, соответствующие стандартам - прочность породы и лещадность; морозоустойчивость; не имеют посторонних вредных примесей;', 'Соответствуют всем физико-механическим характеристикам ГОСТов; качество и свойства, соответствующие стандартам - прочность породы и лещадность; морозоустойчивость; не имеют посторонних вредных примесей;', 'Соответствуют всем физико-механическим характеристикам ГОСТов; качество и свойства, соответствующие стандартам - прочность породы и лещадность; морозоустойчивость; не имеют посторонних вредных примесей;', 'Соответствуют всем физико-механическим характеристикам ГОСТов; качество и свойства, соответствующие стандартам - прочность породы и лещадность; морозоустойчивость; не имеют посторонних вредных примесей;', '2022-02-20 08:48:30', '2022-02-20 08:48:30'),
(111, 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов:', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов:', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов:', 'Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов:', '2022-02-20 08:49:05', '2022-02-20 08:49:05'),
(112, 'Все продукты', 'Все продукты', 'Все продукты', 'Все продукты', '2022-02-20 08:49:55', '2022-02-20 08:49:55'),
(113, 'Применение', 'Применение', 'Применение', 'Применение', '2022-02-20 08:58:39', '2022-02-20 08:58:39'),
(114, 'Характеристики', 'Характеристики', 'Характеристики', 'Характеристики', '2022-02-20 08:58:51', '2022-02-20 08:58:51'),
(115, 'Рекомендуемые', 'Рекомендуемые', 'Рекомендуемые', 'Рекомендуемые', '2022-02-20 08:58:58', '2022-02-20 08:58:58'),
(116, 'соответствуют всем физико-механическим характеристикам ГОСТов;<br> качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br> качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br> качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', 'соответствуют всем физико-механическим характеристикам ГОСТов;<br> качество и свойства, соответствующие стандартам - прочность породы и лещадность;<br> морозоустойчивость;<br> не имеют посторонних вредных примесей;', '2022-02-20 09:10:37', '2022-02-20 09:10:37'),
(117, 'Для этого нужно учитывать определенные нормы проектирования автомобильных дорог, обеспечивающие нужный уровень удобства и безопасности.', 'Для этого нужно учитывать определенные нормы проектирования автомобильных дорог, обеспечивающие нужный уровень удобства и безопасности.', 'Для этого нужно учитывать определенные нормы проектирования автомобильных дорог, обеспечивающие нужный уровень удобства и безопасности.', 'Для этого нужно учитывать определенные нормы проектирования автомобильных дорог, обеспечивающие нужный уровень удобства и безопасности.', '2022-02-20 09:11:01', '2022-02-20 09:11:01'),
(118, 'Схема работы', 'Схема работы', 'Схема работы', 'Схема работы', '2022-02-20 09:11:09', '2022-02-20 09:11:09'),
(119, 'Вxодящая заявка', 'Вxодящая заявка', 'Вxодящая заявка', 'Вxодящая заявка', '2022-02-20 09:11:19', '2022-02-20 09:11:19'),
(120, 'Сбор данных для проектирования, подготовка КП, подписание договора, внесение аванса', 'Сбор данных для проектирования, подготовка КП, подписание договора, внесение аванса', 'Сбор данных для проектирования, подготовка КП, подписание договора, внесение аванса', 'Сбор данных для проектирования, подготовка КП, подписание договора, внесение аванса', '2022-02-20 09:13:16', '2022-02-20 09:13:16'),
(121, 'Доп. решения', 'Доп. решения', 'Доп. решения', 'Доп. решения', '2022-02-20 09:13:35', '2022-02-20 09:13:35'),
(122, 'Спределение необкодимости разработки дапслнитальных проектных решений', 'Спределение необкодимости разработки дапслнитальных проектных решений', 'Спределение необкодимости разработки дапслнитальных проектных решений', 'Спределение необкодимости разработки дапслнитальных проектных решений', '2022-02-20 09:13:44', '2022-02-20 09:13:44'),
(123, 'Согласование', 'Согласование', 'Согласование', 'Согласование', '2022-02-20 09:13:50', '2022-02-20 09:13:50'),
(124, 'Аркитентурно градостроительно решение замазчином и направленных Гредостроительном совете', 'Архитектурно градостроительное решение  Градостроительного совета', 'Архитектурно градостроительное решение  Градостроительного совета', 'Архитектурно градостроительное решение  Градостроительного совета', '2022-02-20 09:14:03', '2022-03-10 11:55:50'),
(215, 'оборудование', 'оборудование', 'оборудование', 'оборудование', '2022-03-10 12:16:58', '2022-03-10 12:16:58'),
(125, 'техническое задание', 'техническое задание', 'техническое задание', 'техническое задание', '2022-02-20 09:14:10', '2022-02-20 09:14:10'),
(126, 'Оформление технического задания на проектирование', 'Оформление технического задания на проектирование', 'Оформление технического задания на проектирование', 'Оформление технического задания на проектирование', '2022-02-20 09:14:16', '2022-02-20 09:14:16'),
(127, 'инженерные изыскания', 'инженерные изыскания', 'инженерные изыскания', 'инженерные изыскания', '2022-02-20 09:14:22', '2022-02-20 09:14:22'),
(128, 'одготовна и согласование отчатсв об инженерно-топографических, инженерно-геологических,инженерно- экологических, иниенерно гидрометеорологических изысканиях', 'Подготовка и согласование отчетов об инженерно-топографических, инженерно - геологических, \r\nинженерно - экологических, иниенерно - гидрометеорологических изысканиях', 'Подготовка и согласование отчетов об инженерно-топографических, инженерно - геологических, \r\nинженерно - экологических, иниенерно - гидрометеорологических изысканиях', 'Подготовка и согласование отчетов об инженерно-топографических, инженерно - геологических, \r\nинженерно - экологических, иниенерно - гидрометеорологических изысканиях', '2022-02-20 09:14:32', '2022-03-10 11:56:30'),
(129, 'ПРОЕКТНАЯ ДОКУМЕНТАЦИЯ', 'ПРОЕКТНАЯ ДОКУМЕНТАЦИЯ', 'ПРОЕКТНАЯ ДОКУМЕНТАЦИЯ', 'ПРОЕКТНАЯ ДОКУМЕНТАЦИЯ', '2022-02-20 09:14:39', '2022-02-20 09:14:39'),
(130, 'Разработка проектной документации в соответствии с требованиями Постановления Провительства РФ N87, ИРД, градастроительной донументацией', 'Разработка проектной документации в соответствии с требованиями Постановления Провительства РУз и градастроительной документации', 'Разработка проектной документации в соответствии с требованиями Постановления Провительства РУз и градастроительной документации', 'Разработка проектной документации в соответствии с требованиями Постановления Провительства РУз и градастроительной документации', '2022-02-20 09:14:47', '2022-03-10 11:57:32'),
(131, 'Получение разрешений', 'Получение разрешений', 'Получение разрешений', 'Получение разрешений', '2022-02-20 09:14:53', '2022-02-20 09:14:53'),
(132, 'Прокождание Государстаенной или негосударственной энспертизы Проентной дакументации и результатов инженерных изысианий. Получение положительного занлючения энспертизы, Получение разрешения на строительство', 'Прокождание Государстаенной или негосударственной энспертизы Проентной дакументации и результатов инженерных изысианий. Получение положительного занлючения энспертизы, Получение разрешения на строительство', 'Прокождание Государстаенной или негосударственной энспертизы Проентной дакументации и результатов инженерных изысианий. Получение положительного занлючения энспертизы, Получение разрешения на строительство', 'Прокождание Государстаенной или негосударственной энспертизы Проентной дакументации и результатов инженерных изысианий. Получение положительного занлючения энспертизы, Получение разрешения на строительство', '2022-02-20 09:15:05', '2022-02-20 09:15:05'),
(133, 'РАБОЧАЯ ДОКУМЕНТАЦИЯ', 'РАБОЧАЯ ДОКУМЕНТАЦИЯ', 'РАБОЧАЯ ДОКУМЕНТАЦИЯ', 'РАБОЧАЯ ДОКУМЕНТАЦИЯ', '2022-02-20 09:15:16', '2022-02-20 09:15:16'),
(134, 'Подготовка задания на разработку Рабочей документации. Согласование с заназчином. Разработка Рабочей документации', 'Подготовка задания на разработку Рабочей документации. Согласование с заназчином. Разработка Рабочей документации', 'Подготовка задания на разработку Рабочей документации. Согласование с заназчином. Разработка Рабочей документации', 'Подготовка задания на разработку Рабочей документации. Согласование с заназчином. Разработка Рабочей документации', '2022-02-20 09:15:24', '2022-02-20 09:15:24'),
(135, 'РЕГИСТРАЦИЯ ОБЪЕКТА', 'РЕГИСТРАЦИЯ ОБЪЕКТА', 'РЕГИСТРАЦИЯ ОБЪЕКТА', 'РЕГИСТРАЦИЯ ОБЪЕКТА', '2022-02-20 09:15:32', '2022-02-20 09:15:32'),
(136, 'Регистрация объента недвижимости Едином Государственном ресстре недоинимасти', 'Регистрация объента недвижимости Едином Государственном ресстре недоинимасти', 'Регистрация объента недвижимости Едином Государственном ресстре недоинимасти', 'Регистрация объента недвижимости Едином Государственном ресстре недоинимасти', '2022-02-20 09:15:40', '2022-02-20 09:15:40'),
(137, 'Наши проекты', 'Наши проекты', 'Наши проекты', 'Наши проекты', '2022-02-20 09:16:46', '2022-02-20 09:16:46'),
(138, 'и мы рассчитаем затраты на строительство, отправим пошаговый план проектирования', 'и мы рассчитаем затраты на строительство, отправим пошаговый план проектирования', 'и мы рассчитаем затраты на строительство, отправим пошаговый план проектирования', 'и мы рассчитаем затраты на строительство, отправим пошаговый план проектирования', '2022-02-20 09:17:56', '2022-02-20 09:17:56'),
(139, 'Получить расчет', 'Получить расчет', 'Получить расчет', 'Получить расчет', '2022-02-20 09:18:36', '2022-02-20 09:18:36'),
(140, 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ....', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ....', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ....', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ....', '2022-02-20 09:30:31', '2022-02-20 09:30:31'),
(141, 'О наших проектах', 'О наших проектах', 'О наших проектах', 'О наших проектах', '2022-02-20 09:30:39', '2022-02-20 09:30:39'),
(142, 'широкий спектр услуг в области проектно-изыскательских работ', 'широкий спектр услуг в области проектно-изыскательских работ', 'широкий спектр услуг в области проектно-изыскательских работ', 'широкий спектр услуг в области проектно-изыскательских работ', '2022-02-20 09:30:55', '2022-02-20 09:30:55'),
(143, 'индивидуальные проектные решения', 'индивидуальные проектные решения', 'индивидуальные проектные решения', 'индивидуальные проектные решения', '2022-02-20 09:31:05', '2022-02-20 09:31:05'),
(144, 'Cовременное оборудование и новейшее программное обеспечение', 'Cовременное оборудование и новейшее программное обеспечение', 'Cовременное оборудование и новейшее программное обеспечение', 'Cовременное оборудование и новейшее программное обеспечение', '2022-02-20 09:31:13', '2022-02-20 09:31:13'),
(145, 'высококвалифицированные специалисты', 'высококвалифицированные специалисты', 'высококвалифицированные специалисты', 'высококвалифицированные специалисты', '2022-02-20 09:31:21', '2022-02-20 09:31:21'),
(146, 'месяца', 'месяца', 'месяца', 'месяца', '2022-02-20 09:31:32', '2022-02-20 09:31:32'),
(147, 'высота моста', 'высота моста', 'высота моста', 'высота моста', '2022-02-20 09:31:39', '2022-02-20 09:31:39'),
(148, 'м', 'м', 'м', 'м', '2022-02-20 09:31:48', '2022-02-20 09:31:48'),
(149, 'Территория', 'Территория', 'Территория', 'Территория', '2022-02-20 09:31:58', '2022-02-20 09:31:58'),
(150, 'полосная дорога', 'полосная дорога', 'полосная дорога', 'полосная дорога', '2022-02-20 09:32:06', '2022-02-20 09:32:06'),
(151, 'Перечень предоставляемых услуг', 'Перечень предоставляемых услуг', 'Перечень предоставляемых услуг', 'Перечень предоставляемых услуг', '2022-02-20 09:34:05', '2022-02-20 09:34:05'),
(152, 'инженерные изыскания', 'инженерные изыскания', 'инженерные изыскания', 'инженерные изыскания', '2022-02-20 09:34:13', '2022-02-20 09:34:13'),
(153, 'проектирование автомобильных дорог всех классов и категорий', 'проектирование автомобильных дорог всех классов и категорий', 'проектирование автомобильных дорог всех классов и категорий', 'проектирование автомобильных дорог всех классов и категорий', '2022-02-20 09:34:20', '2022-02-20 09:34:20'),
(154, 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', '2022-02-20 09:34:34', '2022-02-20 09:34:34'),
(155, 'проектирование подземных переходов;', 'проектирование подземных переходов;', 'проектирование подземных переходов;', 'проектирование подземных переходов;', '2022-02-20 09:35:15', '2022-02-20 09:35:15'),
(156, 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', '2022-02-20 09:35:23', '2022-02-20 09:35:23'),
(157, 'разработка сметной документации; диагностика, обследование мостов и труб;', 'разработка сметной документации; диагностика, обследование мостов и труб;', 'разработка сметной документации; диагностика, обследование мостов и труб;', 'разработка сметной документации; диагностика, обследование мостов и труб;', '2022-02-20 09:35:31', '2022-02-20 09:35:31'),
(158, 'авторский надзор;', 'авторский надзор;', 'авторский надзор;', 'авторский надзор;', '2022-02-20 09:35:38', '2022-02-20 09:35:38'),
(159, 'консультационные и экспертные услуги; трехмерное моделирование зданий и сооружений.', 'консультационные и экспертные услуги; трехмерное моделирование зданий и сооружений.', 'консультационные и экспертные услуги; трехмерное моделирование зданий и сооружений.', 'консультационные и экспертные услуги; трехмерное моделирование зданий и сооружений.', '2022-02-20 09:35:46', '2022-02-20 09:35:46'),
(160, 'месяца', 'месяца', 'месяца', 'месяца', '2022-02-20 09:35:59', '2022-02-20 09:35:59'),
(161, 'высота моста', 'высота моста', 'высота моста', 'высота моста', '2022-02-20 09:36:07', '2022-02-20 09:36:07'),
(162, 'Территория', 'Территория', 'Территория', 'Территория', '2022-02-20 09:36:12', '2022-02-20 09:36:12'),
(163, 'полосная дорога', 'полосная дорога', 'полосная дорога', 'полосная дорога', '2022-02-20 09:36:19', '2022-02-20 09:36:19'),
(164, 'наша ДОРОЖНАЯ ТЕХНИКА', 'наша ДОРОЖНАЯ ТЕХНИКА', 'наша ДОРОЖНАЯ ТЕХНИКА', 'наша ДОРОЖНАЯ ТЕХНИКА', '2022-02-20 09:36:29', '2022-02-20 09:36:29'),
(165, 'га', 'га', 'га', 'га', '2022-02-20 09:37:44', '2022-02-20 09:37:44'),
(166, 'Мы всегда открыты для сотрудничества. Вы можете обратиться в пресс-центр группы компаний «GRAND ROAD TASHKENT»  по любым вопросам, связанным с деятельностью компании.', 'Мы всегда открыты для сотрудничества. Вы можете обратиться в пресс-центр группы компаний «GRAND ROAD TASHKENT»  по любым вопросам, связанным с деятельностью компании.', 'Мы всегда открыты для сотрудничества. Вы можете обратиться в пресс-центр группы компаний «GRAND ROAD TASHKENT»  по любым вопросам, связанным с деятельностью компании.', 'Мы всегда открыты для сотрудничества. Вы можете обратиться в пресс-центр группы компаний «GRAND ROAD TASHKENT»  по любым вопросам, связанным с деятельностью компании.', '2022-02-20 09:40:42', '2022-02-20 09:40:42'),
(167, 'ЗАГРУЗИТЬ ЕЩЕ', 'ЗАГРУЗИТЬ ЕЩЕ', 'ЗАГРУЗИТЬ ЕЩЕ', 'ЗАГРУЗИТЬ ЕЩЕ', '2022-02-20 09:41:18', '2022-02-20 09:41:18'),
(168, 'Темп развития ...', 'Темп развития ...', 'Темп развития ...', 'Темп развития ...', '2022-02-20 09:46:10', '2022-02-20 09:46:10'),
(169, 'РЕКОМЕНДУЕМЫЕ', 'РЕКОМЕНДУЕМЫЕ', 'РЕКОМЕНДУЕМЫЕ', 'РЕКОМЕНДУЕМЫЕ', '2022-02-20 09:46:33', '2022-02-20 09:46:33'),
(170, 'Дорожня техника', 'Дорожня техника', 'Дорожня техника', 'Дорожня техника', '2022-02-20 10:00:01', '2022-02-20 10:00:01'),
(171, 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', '2022-02-20 10:00:43', '2022-02-20 10:00:43'),
(172, 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика', '2022-02-20 10:01:48', '2022-02-20 10:01:48'),
(173, 'Производительность укладки до 900 т/ч', 'Производительность укладки до 900 т/ч', 'Производительность укладки до 900 т/ч', 'Производительность укладки до 900 т/ч', '2022-02-20 10:01:56', '2022-02-20 10:01:56'),
(174, 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума', '2022-02-20 10:02:04', '2022-02-20 10:02:04'),
(175, 'Максимальная ширина укладки 11 м', 'Максимальная ширина укладки 11 м', 'Максимальная ширина укладки 11 м', 'Максимальная ширина укладки 11 м', '2022-02-20 10:02:11', '2022-02-20 10:02:11'),
(176, 'Мощный дизельный двигатель Deutz последнего поколения', 'Мощный дизельный двигатель Deutz последнего поколения', 'Мощный дизельный двигатель Deutz последнего поколения', 'Мощный дизельный двигатель Deutz последнего поколения', '2022-02-20 10:02:19', '2022-02-20 10:02:19'),
(177, 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', 'Асфальтоукладчик с высокой производительностью', '2022-02-20 10:02:28', '2022-03-12 05:08:59'),
(178, 'Грунтовый каток с гладким вибрационным бандажом', 'Грунтовый каток с гладким вибрационным бандажом', 'Грунтовый каток с гладким вибрационным бандажом', 'Грунтовый каток с гладким вибрационным бандажом', '2022-02-20 10:03:17', '2022-02-20 10:03:17'),
(179, NULL, NULL, NULL, NULL, '2022-02-20 10:03:28', '2022-03-12 05:23:10'),
(180, '3-точечное качающееся шарнирное соединение для отменного сцепления и проходимости на связном грунте', '3-точечное качающееся шарнирное соединение для отменного сцепления и проходимости на связном грунте', '3-точечное качающееся шарнирное соединение для отменного сцепления и проходимости на связном грунте', '3-точечное качающееся шарнирное соединение для отменного сцепления и проходимости на связном грунте', '2022-02-20 10:03:36', '2022-02-20 10:03:36'),
(181, 'Эргономичная платформа машиниста с устройством управления поворотным механизмом сиденья, регулируемым сиденьем машиниста и откидной рулевой колонкой', 'Эргономичная платформа машиниста с устройством управления поворотным механизмом сиденья, регулируемым сиденьем машиниста и откидной рулевой колонкой', 'Эргономичная платформа машиниста с устройством управления поворотным механизмом сиденья, регулируемым сиденьем машиниста и откидной рулевой колонкой', 'Эргономичная платформа машиниста с устройством управления поворотным механизмом сиденья, регулируемым сиденьем машиниста и откидной рулевой колонкой', '2022-02-20 10:03:45', '2022-02-20 10:03:45'),
(182, NULL, NULL, NULL, NULL, '2022-02-20 10:03:53', '2022-03-12 05:25:03'),
(183, 'Высокая мощность уплотнения благодаря высокой линейной нагрузке и большим амплитудам', 'Высокая мощность уплотнения благодаря высокой линейной нагрузке и большим амплитудам', 'Высокая мощность уплотнения благодаря высокой линейной нагрузке и большим амплитудам', 'Высокая мощность уплотнения благодаря высокой линейной нагрузке и большим амплитудам', '2022-02-20 10:04:01', '2022-02-20 10:04:01'),
(184, 'Пневмоколесный каток', 'Пневмоколесный каток', 'Пневмоколесный каток', 'Пневмоколесный каток', '2022-02-20 10:04:34', '2022-02-20 10:04:34'),
(185, NULL, NULL, NULL, NULL, '2022-02-20 10:04:40', '2022-03-12 05:22:52'),
(186, 'Высокое качество уплотнения и поверхности благодаря равномерному распределению веса и перекрытию следа передних и задних колесных пар', 'Высокое качество уплотнения и поверхности благодаря равномерному распределению веса и перекрытию следа передних и задних колесных пар', 'Высокое качество уплотнения и поверхности благодаря равномерному распределению веса и перекрытию следа передних и задних колесных пар', 'Высокое качество уплотнения и поверхности благодаря равномерному распределению веса и перекрытию следа передних и задних колесных пар', '2022-02-20 10:04:48', '2022-02-20 10:04:48'),
(187, 'Продуманная концепция балластировки для гибкой адаптации массы машины в соответствии с видом работ', 'Продуманная концепция балластировки для гибкой адаптации массы машины в соответствии с видом работ', 'Продуманная концепция балластировки для гибкой адаптации массы машины в соответствии с видом работ', 'Продуманная концепция балластировки для гибкой адаптации массы машины в соответствии с видом работ', '2022-02-20 10:04:56', '2022-02-20 10:04:56'),
(188, 'Устройство управления перемещением и поворотным механизмом сиденья', 'Устройство управления перемещением и поворотным механизмом сиденья', 'Устройство управления перемещением и поворотным механизмом сиденья', 'Устройство управления перемещением и поворотным механизмом сиденья', '2022-02-20 10:05:02', '2022-02-20 10:05:02'),
(189, 'Отличный обзор шин, машины и стройплощадки', 'Отличный обзор шин, машины и стройплощадки', 'Отличный обзор шин, машины и стройплощадки', 'Отличный обзор шин, машины и стройплощадки', '2022-02-20 10:05:32', '2022-02-20 10:05:32'),
(190, 'Мощные машины для снятия дорожного покрытия на больших площадях', 'Мощные машины для снятия дорожного покрытия на больших площадях', 'Мощные машины для снятия дорожного покрытия на больших площадях', 'Мощные машины для снятия дорожного покрытия на больших площадях', '2022-02-20 10:05:38', '2022-03-12 05:46:05');
INSERT INTO `words` (`id`, `key`, `ru`, `uz`, `en`, `created_at`, `updated_at`) VALUES
(191, 'Экологический класс ЕС стадия IIIa / США уровень 3', 'Экологический класс ЕС стадия IIIa / США уровень 3', 'Экологический класс ЕС стадия IIIa / США уровень 3', 'Экологический класс ЕС стадия IIIa / США уровень 3', '2022-02-20 10:05:55', '2022-02-20 10:05:55'),
(192, 'Эксплуатационная масса CE * 27 750 кг', 'Эксплуатационная масса CE * 27 750 кг', 'Эксплуатационная масса CE * 27 750 кг', 'Эксплуатационная масса CE * 27 750 кг', '2022-02-20 10:06:06', '2022-02-20 10:06:06'),
(193, 'Глубина фрезерования 0 мм - 330 мм', 'Глубина фрезерования 0 мм - 330 мм', 'Глубина фрезерования 0 мм - 330 мм', 'Глубина фрезерования 0 мм - 330 мм', '2022-02-20 10:06:16', '2022-02-20 10:06:16'),
(194, 'Ширина фрезерования 2 000 мм', 'Ширина фрезерования 2 000 мм', 'Ширина фрезерования 2 000 мм', 'Ширина фрезерования 2 000 мм', '2022-02-20 10:06:25', '2022-02-20 10:06:25'),
(195, 'Мощность двигателя 410 кВт / 558 л.с.', 'Мощность двигателя 410 кВт / 558 л.с.', 'Мощность двигателя 410 кВт / 558 л.с.', 'Мощность двигателя 410 кВт / 558 л.с.', '2022-02-20 10:06:42', '2022-02-20 10:06:42'),
(196, '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '<p>Со снятием старого покрытия</p>', '2022-02-22 06:23:38', '2022-02-22 06:23:38'),
(197, 'Для экспорта и импорта:', 'Для экспорта и импорта:', 'Для экспорта и импорта:', 'Для экспорта и импорта:', '2022-02-23 07:23:35', '2022-02-23 07:23:35'),
(198, 'Телефоны:', 'Телефоны:', 'Телефоны:', 'Телефоны:', '2022-02-23 07:24:04', '2022-02-23 07:24:04'),
(199, 'E-mail:', 'E-mail:', 'E-mail:', 'E-mail:', '2022-02-23 07:24:12', '2022-02-23 07:24:12'),
(200, 'TASHKENT CITY DEVELOPMENT', 'TASHKENT CITY DEVELOPMENT', 'TASHKENT CITY DEVELOPMENT', 'TASHKENT CITY DEVELOPMENT', '2022-02-23 08:02:10', '2022-02-23 08:02:10'),
(201, 'С кем работаем', 'С кем работаем', 'С кем работаем', 'С кем работаем', '2022-03-03 07:00:49', '2022-03-03 07:00:49'),
(202, 'наши услуги', 'наши услуги', 'наши услуги', 'наши услуги', '2022-03-03 07:02:57', '2022-03-03 07:02:57'),
(203, 'Обратная связь', 'Обратная связь', 'Обратная связь', 'Обратная связь', '2022-03-03 07:07:42', '2022-03-03 07:07:42'),
(205, 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность.', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность.', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность.', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность.', '2022-03-10 11:17:26', '2022-03-10 11:17:26'),
(206, 'Применение материалов, покрытий и слоев, способных выдержать поток и тяжесть автомобилей.', 'Применение материалов, покрытий и слоев, способных выдержать поток и тяжесть автомобилей.', 'Применение материалов, покрытий и слоев, способных выдержать поток и тяжесть автомобилей.', 'Применение материалов, покрытий и слоев, способных выдержать поток и тяжесть автомобилей.', '2022-03-10 11:18:18', '2022-03-10 11:18:18'),
(207, 'Кладка асфальта и бетона на самых сложных участках; Применение модифицированного гибкого битума с полимерами.', 'Кладка асфальта и бетона на самых сложных участках; Применение модифицированного гибкого битума с полимерами.', 'Кладка асфальта и бетона на самых сложных участках; Применение модифицированного гибкого битума с полимерами.', 'Кладка асфальта и бетона на самых сложных участках; Применение модифицированного гибкого битума с полимерами.', '2022-03-10 11:19:07', '2022-03-10 11:19:07'),
(208, 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', '2022-03-10 11:20:00', '2022-03-10 11:20:00'),
(209, 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', '2022-03-10 11:20:47', '2022-03-10 11:20:47'),
(210, 'Широкий спектр проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'Широкий спектр проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'Широкий спектр проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', 'Широкий спектр проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.', '2022-03-10 11:21:31', '2022-03-10 11:21:31'),
(211, 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', 'Наши сотрудники помогут выполнить подбор оборудования и расчет цены с учетом ваших требований', '2022-03-10 11:23:59', '2022-03-10 11:23:59'),
(212, 'Проектирование автомобильных...', 'Проектирование автомобильных...', 'Проектирование автомобильных...', 'Проектирование автомобильных...', '2022-03-10 11:51:46', '2022-03-10 11:51:46'),
(213, 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ <br> И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ <br> И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ <br> И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', 'ПРОЕКТИРОВАНИЕ АВТОМОБИЛЬНЫХ ДОРОГ <br> И ТРАНСПОРТНЫХ СООРУЖЕНИЙ', '2022-03-10 11:52:40', '2022-03-10 11:52:40'),
(214, 'В структуру СП ООО Grand Road Tashkent входит проектная <br> организация, которая занимается широким спектром проектно- <br> изыскательских работ, по обустройству, благоустройству <br> автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная <br> организация, которая занимается широким спектром проектно- <br> изыскательских работ, по обустройству, благоустройству <br> автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная <br> организация, которая занимается широким спектром проектно- <br> изыскательских работ, по обустройству, благоустройству <br> автомобильных дорог и транспортных сооружений.', 'В структуру СП ООО Grand Road Tashkent входит проектная <br> организация, которая занимается широким спектром проектно- <br> изыскательских работ, по обустройству, благоустройству <br> автомобильных дорог и транспортных сооружений.', '2022-03-10 11:54:25', '2022-03-10 11:54:25'),
(216, 'Современное геодезическое оборудование, автоматизированные системы CREDO (Белоруссия), IndorCAD (Россия), ABS (Россия), AutoCAD (США) и др., а также программное обеспечение последнего поколения позволяют решать сложные и комплексные задач по изысканию и проектированию автомобильных дорог и транспортных сооружений, что повышает достоверность проектных решений и сокращает сроки выполнения проектных работ.', 'Современное геодезическое оборудование, автоматизированные системы CREDO (Белоруссия), IndorCAD (Россия), ABS (Россия), AutoCAD (США) и др., а также программное обеспечение последнего поколения позволяют решать сложные и комплексные задач по изысканию и проектированию автомобильных дорог и транспортных сооружений, что повышает достоверность проектных решений и сокращает сроки выполнения проектных работ.', 'Современное геодезическое оборудование, автоматизированные системы CREDO (Белоруссия), IndorCAD (Россия), ABS (Россия), AutoCAD (США) и др., а также программное обеспечение последнего поколения позволяют решать сложные и комплексные задач по изысканию и проектированию автомобильных дорог и транспортных сооружений, что повышает достоверность проектных решений и сокращает сроки выполнения проектных работ.', 'Современное геодезическое оборудование, автоматизированные системы CREDO (Белоруссия), IndorCAD (Россия), ABS (Россия), AutoCAD (США) и др., а также программное обеспечение последнего поколения позволяют решать сложные и комплексные задач по изысканию и проектированию автомобильных дорог и транспортных сооружений, что повышает достоверность проектных решений и сокращает сроки выполнения проектных работ.', '2022-03-10 12:17:27', '2022-03-10 12:17:27'),
(217, 'Перечень предоставляемых услуг:', 'Перечень предоставляемых услуг:', 'Перечень предоставляемых услуг:', 'Перечень предоставляемых услуг:', '2022-03-10 12:18:20', '2022-03-10 12:18:20'),
(218, 'инженерные изыскания;', 'инженерные изыскания;', 'инженерные изыскания;', 'инженерные изыскания;', '2022-03-10 13:39:45', '2022-03-10 13:39:45'),
(219, 'проектирование автомобильных дорог всех классов и категорий;', 'проектирование автомобильных дорог всех классов и категорий;', 'проектирование автомобильных дорог всех классов и категорий;', 'проектирование автомобильных дорог всех классов и категорий;', '2022-03-10 13:40:02', '2022-03-10 13:40:02'),
(220, 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', 'проектирование мостовых сооружений;', '2022-03-10 13:40:10', '2022-03-10 13:40:10'),
(221, 'авторский надзор;', 'авторский надзор;', 'авторский надзор;', 'авторский надзор;', '2022-03-10 13:40:20', '2022-03-10 13:40:20'),
(222, 'проектирование подземных переходов;', 'проектирование подземных переходов;', 'проектирование подземных переходов;', 'проектирование подземных переходов;', '2022-03-10 13:40:29', '2022-03-10 13:40:29'),
(223, 'разработка сметной документации;', 'разработка сметной документации;', 'разработка сметной документации;', 'разработка сметной документации;', '2022-03-10 13:40:49', '2022-03-10 13:40:49'),
(224, 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', 'разработка проектов организации дорожного движения;', '2022-03-10 13:40:56', '2022-03-10 13:40:56'),
(225, 'консультационные и экспертные услуги;', 'консультационные и экспертные услуги;', 'консультационные и экспертные услуги;', 'консультационные и экспертные услуги;', '2022-03-10 13:41:04', '2022-03-10 13:41:04'),
(226, 'трехмерное моделирование зданий и сооружений.', 'трехмерное моделирование зданий и сооружений.', 'трехмерное моделирование зданий и сооружений.', 'трехмерное моделирование зданий и сооружений.', '2022-03-10 13:41:12', '2022-03-10 13:41:12'),
(227, 'диагностика, обследование мостов и труб;', 'диагностика, обследование мостов и труб;', 'диагностика, обследование мостов и труб;', 'диагностика, обследование мостов и труб;', '2022-03-10 13:41:19', '2022-03-10 13:41:19'),
(228, 'Благодаря качественной работы и надежности, наша дорожно-строительная компания завоевала доверие у многих представителей малого и среднего бизнеса, частных лиц и государственных учреждений.', 'Благодаря качественной работы и надежности, наша дорожно-строительная компания завоевала доверие у многих представителей малого и среднего бизнеса, частных лиц и государственных учреждений.', 'Благодаря качественной работы и надежности, наша дорожно-строительная компания завоевала доверие у многих представителей малого и среднего бизнеса, частных лиц и государственных учреждений.', 'Благодаря качественной работы и надежности, наша дорожно-строительная компания завоевала доверие у многих представителей малого и среднего бизнеса, частных лиц и государственных учреждений.', '2022-03-10 13:44:54', '2022-03-10 13:44:54'),
(229, 'Мы сотрудничаем с европейскими компаниями, которые помогают нам внедрять новейшие технологии, обеспечивая тем самым максимальное качество работ.', 'Мы сотрудничаем с европейскими компаниями, которые помогают нам внедрять новейшие технологии, обеспечивая тем самым максимальное качество работ.', 'Мы сотрудничаем с европейскими компаниями, которые помогают нам внедрять новейшие технологии, обеспечивая тем самым максимальное качество работ.', 'Мы сотрудничаем с европейскими компаниями, которые помогают нам внедрять новейшие технологии, обеспечивая тем самым максимальное качество работ.', '2022-03-10 13:46:50', '2022-03-10 13:46:50'),
(230, 'Асфальтирование, прокладка дорог', 'Асфальтирование, прокладка дорог', 'Асфальтирование, прокладка дорог', 'Асфальтирование, прокладка дорог', '2022-03-11 05:15:47', '2022-03-11 05:15:47'),
(231, 'Выгодная цена за счет прямых поставок от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок от самого производителя, без посредников.', '2022-03-11 05:34:53', '2022-03-11 05:34:53'),
(232, 'Сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'Сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'Сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'Сертификаты качества и полный пакет документов на отгружаемую продукцию;', '2022-03-11 05:50:10', '2022-03-11 05:50:10'),
(233, 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', '2022-03-11 05:50:28', '2022-03-11 05:50:28'),
(234, 'Шероховатая фактура покрытия обеспечивает безопасное движение;', 'Шероховатая фактура покрытия обеспечивает безопасное движение;', 'Шероховатая фактура покрытия обеспечивает безопасное движение;', 'Шероховатая фактура покрытия обеспечивает безопасное движение;', '2022-03-11 05:50:37', '2022-03-11 05:50:37'),
(235, 'Равномерное покрытие;', 'Равномерное покрытие;', 'Равномерное покрытие;', 'Равномерное покрытие;', '2022-03-11 05:50:45', '2022-03-11 05:50:45'),
(236, 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', '2022-03-11 05:50:54', '2022-03-11 05:50:54'),
(237, 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', '2022-03-11 05:51:01', '2022-03-11 05:51:01'),
(238, 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', '2022-03-11 05:51:09', '2022-03-11 05:51:09'),
(239, 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.', '2022-03-11 06:27:00', '2022-03-11 06:27:00'),
(240, 'Выгодная цена за счет прямых поставок материалов с собственного карьера, от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок материалов с собственного карьера, от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок материалов с собственного карьера, от самого производителя, без посредников.', 'Выгодная цена за счет прямых поставок материалов с собственного карьера, от самого производителя, без посредников.', '2022-03-11 06:29:19', '2022-03-11 06:29:19'),
(241, 'Практически отсутствуют глинистые и другие пылевидные частицы;', 'Практически отсутствуют глинистые и другие пылевидные частицы;', 'Практически отсутствуют глинистые и другие пылевидные частицы;', 'Практически отсутствуют глинистые и другие пылевидные частицы;', '2022-03-11 06:29:28', '2022-03-11 06:29:28'),
(242, 'Не имеют посторонних вредных примесей;', 'Не имеют посторонних вредных примесей;', 'Не имеют посторонних вредных примесей;', 'Не имеют посторонних вредных примесей;', '2022-03-11 06:29:37', '2022-03-11 06:29:37'),
(243, 'Морозоустойчивость;', 'Морозоустойчивость;', 'Морозоустойчивость;', 'Морозоустойчивость;', '2022-03-11 06:29:45', '2022-03-11 06:29:45'),
(244, 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность;', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность;', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность;', 'Качество и свойства, соответствующие стандартам – прочность породы и лещадность;', '2022-03-11 06:29:54', '2022-03-11 06:29:54'),
(245, 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', '2022-03-11 06:30:03', '2022-03-11 06:30:03'),
(246, 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики <br> оборудования всемирно известных западных марок: AMMANN (Швейцария),<br> Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), <br> Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики <br> оборудования всемирно известных западных марок: AMMANN (Швейцария),<br> Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), <br> Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики <br> оборудования всемирно известных западных марок: AMMANN (Швейцария),<br> Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), <br> Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики <br> оборудования всемирно известных западных марок: AMMANN (Швейцария),<br> Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), <br> Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', '2022-03-11 07:23:09', '2022-03-11 07:23:09'),
(247, 'Максимальная ширина укладки 11 м;', 'Максимальная ширина укладки 11 м;', 'Максимальная ширина укладки 11 м;', 'Максимальная ширина укладки 11 м;', '2022-03-11 07:30:08', '2022-03-11 07:30:08'),
(248, 'Мощный дизельный двигатель Deutz последнего поколения;', 'Мощный дизельный двигатель Deutz последнего поколения;', 'Мощный дизельный двигатель Deutz последнего поколения;', 'Мощный дизельный двигатель Deutz последнего поколения;', '2022-03-11 07:30:33', '2022-03-11 07:30:33'),
(249, 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика;', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика;', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика;', 'Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика;', '2022-03-11 07:31:16', '2022-03-11 07:31:16'),
(250, 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума;', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума;', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума;', 'Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума;', '2022-03-11 07:31:38', '2022-03-11 07:31:38'),
(251, 'Высокое предварительное уплотнение с помощью раздвижного рабочего органа AB 220 TV (трамбующий брус и вибратор)', 'Высокое предварительное уплотнение с помощью раздвижного рабочего органа AB 220 TV (трамбующий брус и вибратор)', 'Высокое предварительное уплотнение с помощью раздвижного рабочего органа AB 220 TV (трамбующий брус и вибратор)', 'Высокое предварительное уплотнение с помощью раздвижного рабочего органа AB 220 TV (трамбующий брус и вибратор)', '2022-03-11 07:32:44', '2022-03-11 07:32:44'),
(252, 'Простое управление благодаря интуитивно понятной и инновационной концепции управления ErgoBasic', 'Простое управление благодаря интуитивно понятной и инновационной концепции управления ErgoBasic', 'Простое управление благодаря интуитивно понятной и инновационной концепции управления ErgoBasic', 'Простое управление благодаря интуитивно понятной и инновационной концепции управления ErgoBasic', '2022-03-11 07:32:52', '2022-03-11 07:32:52'),
(253, 'Компактные размеры позволяют работать на самых узких рабочих площадках', 'Компактные размеры позволяют работать на самых узких рабочих площадках', 'Компактные размеры позволяют работать на самых узких рабочих площадках', 'Компактные размеры позволяют работать на самых узких рабочих площадках', '2022-03-11 07:33:02', '2022-03-11 07:33:02'),
(254, 'Габаритная ширина 2,2 м', 'Габаритная ширина 2,2 м', 'Габаритная ширина 2,2 м', 'Габаритная ширина 2,2 м', '2022-03-11 07:33:11', '2022-03-11 07:33:11'),
(255, 'Максимальная производительность укладки 300 т/ч', 'Максимальная производительность укладки 300 т/ч', 'Максимальная производительность укладки 300 т/ч', 'Максимальная производительность укладки 300 т/ч', '2022-03-11 07:34:07', '2022-03-11 07:34:07'),
(256, 'Шарнирно сочлененный тандемный каток с 2 вибровальцами', 'Шарнирно сочлененный тандемный каток с 2 вибровальцами', 'Шарнирно сочлененный тандемный каток с 2 вибровальцами', 'Шарнирно сочлененный тандемный каток с 2 вибровальцами', '2022-03-11 07:34:37', '2022-03-11 07:34:37'),
(257, '3-точечное качающееся шарнирное соединение для равномерного распределения веса и непревзойденной курсовой устойчивост', '3-точечное качающееся шарнирное соединение для равномерного распределения веса и непревзойденной курсовой устойчивост', '3-точечное качающееся шарнирное соединение для равномерного распределения веса и непревзойденной курсовой устойчивост', '3-точечное качающееся шарнирное соединение для равномерного распределения веса и непревзойденной курсовой устойчивост', '2022-03-11 07:40:00', '2022-03-11 07:40:00'),
(258, 'Отличный обзор машины и стройплощадки', 'Отличный обзор машины и стройплощадки', 'Отличный обзор машины и стройплощадки', 'Отличный обзор машины и стройплощадки', '2022-03-11 07:40:32', '2022-03-11 07:40:32'),
(259, 'Простая, интуитивная и понятная на любом языке концепция управления', 'Простая, интуитивная и понятная на любом языке концепция управления', 'Простая, интуитивная и понятная на любом языке концепция управления', 'Простая, интуитивная и понятная на любом языке концепция управления', '2022-03-11 07:40:39', '2022-03-11 07:40:39'),
(260, NULL, NULL, NULL, NULL, '2022-03-11 07:40:59', '2022-03-12 05:19:24'),
(261, 'Система смещения колеи для комфортного подъезда и отъезда, а также уплотнения вдоль бордюров', 'Система смещения колеи для комфортного подъезда и отъезда, а также уплотнения вдоль бордюров', 'Система смещения колеи для комфортного подъезда и отъезда, а также уплотнения вдоль бордюров', 'Система смещения колеи для комфортного подъезда и отъезда, а также уплотнения вдоль бордюров', '2022-03-11 07:41:13', '2022-03-11 07:41:13'),
(262, 'Бетоноукладчик самоходный, на гусеничном ходу', 'Бетоноукладчик самоходный, на гусеничном ходу', 'Бетоноукладчик самоходный, на гусеничном ходу', 'Бетоноукладчик самоходный, на гусеничном ходу', '2022-03-11 07:44:39', '2022-03-11 07:44:39'),
(263, 'Скорость укладки 15 м/мин', 'Скорость укладки 15 м/мин', 'Скорость укладки 15 м/мин', 'Скорость укладки 15 м/мин', '2022-03-11 07:45:08', '2022-03-11 07:45:08'),
(264, 'Объем бункера: 76,00 м3', 'Объем бункера: 76,00 м3', 'Объем бункера: 76,00 м3', 'Объем бункера: 76,00 м3', '2022-03-11 07:45:16', '2022-03-11 07:45:16'),
(265, 'Термопластиковая дорожно-разметочная автомашина', 'Термопластиковая дорожно-разметочная автомашина', 'Термопластиковая дорожно-разметочная автомашина', 'Термопластиковая дорожно-разметочная автомашина', '2022-03-11 07:46:47', '2022-03-11 07:46:47'),
(266, 'С баком краски: 1000 кг + 1500 кг', 'С баком краски: 1000 кг + 1500 кг', 'С баком краски: 1000 кг + 1500 кг', 'С баком краски: 1000 кг + 1500 кг', '2022-03-11 07:46:59', '2022-03-11 07:46:59'),
(267, 'На базе шасси MERS ATEGO 1518 KK /42', 'На базе шасси MERS ATEGO 1518 KK /42', 'На базе шасси MERS ATEGO 1518 KK /42', 'На базе шасси MERS ATEGO 1518 KK /42', '2022-03-11 07:47:11', '2022-03-11 07:47:11'),
(268, 'Объем двигателя: 5,1 см3', 'Объем двигателя: 5,1 см3', 'Объем двигателя: 5,1 см3', 'Объем двигателя: 5,1 см3', '2022-03-11 07:47:23', '2022-03-11 07:47:23'),
(269, 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', 'УКЛАДКА АСФАЛЬТА', '2022-03-11 07:54:55', '2022-03-11 07:54:55'),
(270, 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', 'Соответствуют всем физико-механическим характеристикам ГОСТов;', '2022-03-11 07:56:28', '2022-03-11 07:56:28'),
(271, 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', 'Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;', '2022-03-11 07:56:36', '2022-03-11 07:56:36'),
(272, 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', 'Устойчивость к температурным перепадам и климатическим осадкам;', '2022-03-11 07:56:55', '2022-03-11 07:56:55'),
(273, 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', 'Износостойкость и длительность эксплуатации;', '2022-03-11 07:57:15', '2022-03-11 07:57:15'),
(274, 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', 'Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;', '2022-03-11 07:57:51', '2022-03-11 07:57:51'),
(275, 'сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'сертификаты качества и полный пакет документов на отгружаемую продукцию;', 'сертификаты качества и полный пакет документов на отгружаемую продукцию;', '2022-03-11 07:58:28', '2022-03-11 07:58:28'),
(276, 'Продукция', 'Продукция', 'Продукция', 'Продукция', '2022-03-11 08:23:57', '2022-03-11 08:23:57'),
(277, 'Проектирование автомобильных....', 'Проектирование автомобильных....', 'Проектирование автомобильных....', 'Проектирование автомобильных....', '2022-03-11 08:24:06', '2022-03-11 08:24:06'),
(278, 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', 'Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).', '2022-03-11 08:26:58', '2022-03-11 08:26:58'),
(279, 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', 'Контроль качества материалов и работ является основным условием надежности нашей продукции.', '2022-03-11 08:50:56', '2022-03-11 08:50:56'),
(280, 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов, инертных материалов, асфальтобетонных смесей различных типов и марок;', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов, инертных материалов, асфальтобетонных смесей различных типов и марок;', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов, инертных материалов, асфальтобетонных смесей различных типов и марок;', 'Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов, инертных материалов, асфальтобетонных смесей различных типов и марок;', '2022-03-11 09:08:55', '2022-03-11 09:08:55'),
(281, 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов! Компания «GRAND ROAD TASHKENT» - Мы за процветание страны!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов! Компания «GRAND ROAD TASHKENT» - Мы за процветание страны!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов! Компания «GRAND ROAD TASHKENT» - Мы за процветание страны!', 'Процветания, благополучия, хороших дорог, красивых и благоустроенных городов! Компания «GRAND ROAD TASHKENT» - Мы за процветание страны!', '2022-03-11 11:34:58', '2022-03-11 11:34:58'),
(282, 'VOGELE 1900-3', 'VOGELE 1900-3', 'VOGELE 1900-3', 'VOGELE 1900-3', '2022-03-12 04:48:03', '2022-03-12 04:48:03'),
(283, 'VOGELE SUPER 800', 'VOGELE SUPER 800', 'VOGELE SUPER 800', 'VOGELE SUPER 800', '2022-03-12 04:48:13', '2022-03-12 04:48:13'),
(284, 'HD+ 140 VV', 'HD+ 140 VV', 'HD+ 140 VV', 'HD+ 140 VV', '2022-03-12 04:48:24', '2022-03-12 04:48:24');

-- --------------------------------------------------------

--
-- Структура таблицы `workwiths`
--

CREATE TABLE `workwiths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header1_ru` text COLLATE utf8mb4_unicode_ci,
  `header1_uz` text COLLATE utf8mb4_unicode_ci,
  `header1_en` text COLLATE utf8mb4_unicode_ci,
  `header2_ru` text COLLATE utf8mb4_unicode_ci,
  `header2_uz` text COLLATE utf8mb4_unicode_ci,
  `header2_en` text COLLATE utf8mb4_unicode_ci,
  `header3_ru` text COLLATE utf8mb4_unicode_ci,
  `header3_uz` text COLLATE utf8mb4_unicode_ci,
  `header3_en` text COLLATE utf8mb4_unicode_ci,
  `description1_ru` text COLLATE utf8mb4_unicode_ci,
  `description1_uz` text COLLATE utf8mb4_unicode_ci,
  `description1_en` text COLLATE utf8mb4_unicode_ci,
  `description2_ru` text COLLATE utf8mb4_unicode_ci,
  `description2_uz` text COLLATE utf8mb4_unicode_ci,
  `description2_en` text COLLATE utf8mb4_unicode_ci,
  `description3_ru` text COLLATE utf8mb4_unicode_ci,
  `description3_uz` text COLLATE utf8mb4_unicode_ci,
  `description3_en` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workwiths`
--

INSERT INTO `workwiths` (`id`, `header1_ru`, `header1_uz`, `header1_en`, `header2_ru`, `header2_uz`, `header2_en`, `header3_ru`, `header3_uz`, `header3_en`, `description1_ru`, `description1_uz`, `description1_en`, `description2_ru`, `description2_uz`, `description2_en`, `description3_ru`, `description3_uz`, `description3_en`, `created_at`, `updated_at`) VALUES
(1, 'B2C', 'B2B', 'B2B', 'B2B', 'B2B', 'B2B', 'B2G', 'B2B', 'B2B', '<p>Асфальтирование и ремонт дорог в частном секторе.</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p>Благоустройство территории новостроек, стройплощадок.</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p>Текущий и капитальный ремонт дорожного покрытия.</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '<p>Темп развития компании на&nbsp;самом максимальном уровне, что является одним из&nbsp;важных плюсов</p>', '2022-02-14 06:09:54', '2022-03-10 13:46:08');

-- --------------------------------------------------------

--
-- Структура таблицы `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `years`
--

INSERT INTO `years` (`id`, `year`, `created_at`, `updated_at`) VALUES
(1, 2016, '2022-02-16 07:41:13', '2022-02-16 07:41:13'),
(2, 2017, '2022-02-16 07:41:21', '2022-02-16 07:41:21'),
(3, 2018, '2022-02-16 07:41:29', '2022-02-16 07:41:29'),
(4, 2019, '2022-02-16 07:41:34', '2022-02-16 07:41:34'),
(5, 2020, '2022-02-16 07:41:45', '2022-02-16 07:41:45'),
(6, 2021, '2022-02-16 07:41:51', '2022-02-16 07:41:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `calculate_costs`
--
ALTER TABLE `calculate_costs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Индексы таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Индексы таблицы `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workwiths`
--
ALTER TABLE `workwiths`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `calculate_costs`
--
ALTER TABLE `calculate_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `productions`
--
ALTER TABLE `productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT для таблицы `workwiths`
--
ALTER TABLE `workwiths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
