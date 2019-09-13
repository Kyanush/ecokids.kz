-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 13 2019 г., 15:00
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecokids`
--

-- --------------------------------------------------------

--
-- Структура таблицы `t_addresses`
--

CREATE TABLE `t_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_attributes`
--

CREATE TABLE `t_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `required` int(11) DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_in_filter` int(11) DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_group_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attributes`
--

INSERT INTO `t_attributes` (`id`, `type`, `name`, `required`, `code`, `use_in_filter`, `description`, `attribute_group_id`, `created_at`, `updated_at`) VALUES
(1, 'dropdown', 'Бренд', 0, 'brend', 1, 'null', NULL, '2019-09-13 03:09:26', '2019-09-13 11:42:10'),
(2, 'dropdown', 'Вес', 0, 'ves', 1, 'null', NULL, '2019-09-13 03:12:00', '2019-09-13 11:42:13'),
(3, 'dropdown', 'На главную страницу', 0, 'na_glavnuyu_stranitsu', 0, NULL, NULL, '2019-09-13 03:25:36', '2019-09-13 03:25:36'),
(4, 'multiple_select', 'Тип товара', 0, 'tip_tovara', 0, 'null', NULL, '2019-09-13 04:00:45', '2019-09-13 04:02:47');

-- --------------------------------------------------------

--
-- Структура таблицы `t_attribute_attribute_set`
--

CREATE TABLE `t_attribute_attribute_set` (
  `id` int(11) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_set_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attribute_attribute_set`
--

INSERT INTO `t_attribute_attribute_set` (`id`, `attribute_id`, `attribute_set_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_attribute_groups`
--

CREATE TABLE `t_attribute_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attribute_groups`
--

INSERT INTO `t_attribute_groups` (`id`, `name`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Главные характеристики', 1, NULL, NULL),
(2, 'Память и процессор', 2, NULL, NULL),
(3, 'Звук', 3, NULL, NULL),
(4, 'Мультимедийные возможности', 4, NULL, NULL),
(5, 'Экран', 5, NULL, NULL),
(6, 'Прошивка', 6, NULL, NULL),
(7, 'Другие функции', 7, NULL, NULL),
(8, 'Связь', 8, NULL, NULL),
(9, 'Дополнительная информация', 9, NULL, NULL),
(10, 'Интерфейсы', 10, NULL, NULL),
(11, 'Общие характеристики', 11, NULL, NULL),
(12, 'Мультимедиа', 12, NULL, NULL),
(13, 'Аккумулятор и Питание', 13, NULL, NULL),
(14, 'Датчики', 14, NULL, NULL),
(15, 'Робот', 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_attribute_product_value`
--

CREATE TABLE `t_attribute_product_value` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attribute_product_value`
--

INSERT INTO `t_attribute_product_value` (`id`, `product_id`, `attribute_id`, `value`, `created_at`, `updated_at`) VALUES
(45, 5, 1, 'Joie (Великобритания)', NULL, '2019-09-13 11:42:10'),
(46, 5, 2, '1 кг', NULL, '2019-09-13 11:42:13'),
(47, 5, 3, 'Нет', NULL, NULL),
(48, 6, 1, 'Joie (Великобритания)', NULL, '2019-09-13 11:42:10'),
(49, 6, 2, '1 кг', NULL, '2019-09-13 11:42:13'),
(50, 6, 3, 'Нет', NULL, NULL),
(73, 1, 1, 'Joie (Великобритания)', NULL, '2019-09-13 11:42:10'),
(74, 1, 2, '1 кг', NULL, '2019-09-13 11:42:13'),
(75, 1, 3, 'Да', NULL, NULL),
(76, 1, 4, '', NULL, NULL),
(77, 2, 1, 'Joie (Великобритания)', NULL, NULL),
(78, 2, 2, '1 кг', NULL, NULL),
(79, 2, 3, 'Да', NULL, NULL),
(80, 2, 4, 'Новинки', NULL, NULL),
(81, 3, 1, 'Joie (Великобритания)', NULL, NULL),
(82, 3, 2, '1 кг', NULL, NULL),
(83, 3, 3, 'Да', NULL, NULL),
(84, 3, 4, '', NULL, NULL),
(85, 4, 1, 'Joie (Великобритания)', NULL, NULL),
(86, 4, 2, '1 кг', NULL, NULL),
(87, 4, 3, 'Да', NULL, NULL),
(88, 4, 4, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_attribute_sets`
--

CREATE TABLE `t_attribute_sets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attribute_sets`
--

INSERT INTO `t_attribute_sets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Коляска', '2019-09-13 03:11:05', '2019-09-13 03:11:05');

-- --------------------------------------------------------

--
-- Структура таблицы `t_attribute_values`
--

CREATE TABLE `t_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `props` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_attribute_values`
--

INSERT INTO `t_attribute_values` (`id`, `attribute_id`, `value`, `code`, `props`, `created_at`, `updated_at`) VALUES
(1, 1, 'Joie (Великобритания)', 'joie-velikobritaniya', NULL, '2019-09-13 03:09:26', '2019-09-13 03:09:26'),
(2, 2, '1 кг', '1-kg', NULL, '2019-09-13 03:12:00', '2019-09-13 03:12:00'),
(3, 2, '2 кг', '2-kg', NULL, '2019-09-13 03:12:00', '2019-09-13 03:12:00'),
(4, 2, '3 кг', '3-kg', NULL, '2019-09-13 03:12:00', '2019-09-13 03:12:00'),
(5, 3, 'Да', 'da', NULL, '2019-09-13 03:25:36', '2019-09-13 03:25:36'),
(6, 3, 'Нет', 'net', NULL, '2019-09-13 03:25:36', '2019-09-13 03:25:36'),
(7, 4, 'Новинки', 'new', NULL, '2019-09-13 04:00:45', '2019-09-13 04:02:47');

-- --------------------------------------------------------

--
-- Структура таблицы `t_banners`
--

CREATE TABLE `t_banners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `t_callbacks`
--

CREATE TABLE `t_callbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT 0 COMMENT 'Статус',
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Комментарий администратора',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_carriers`
--

CREATE TABLE `t_carriers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(13,2) DEFAULT 0.00,
  `delivery_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_carriers`
--

INSERT INTO `t_carriers` (`id`, `name`, `price`, `delivery_text`, `logo`, `created_at`) VALUES
(1, 'Доставка', '1000.00', 'Доставка по всему Казахстану  <br/>от 1000 тг до 3000 тг', 'c15a1dae095730a1ddfee5727bab97dd.png', NULL),
(2, 'Самовывоз', '0.00', 'г. Алматы, ул. Жибек жолы 115,<br/>оф. 113 (Рядом с Аэровокзалом)', '8226890cbcd331b2567a82e201a3a5d6.png', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_carts`
--

CREATE TABLE `t_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `visit_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_carts`
--

INSERT INTO `t_carts` (`id`, `visit_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 1, '2019-09-13 05:51:31', '2019-09-13 05:51:31');

-- --------------------------------------------------------

--
-- Структура таблицы `t_cart_items`
--

CREATE TABLE `t_cart_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_cart_items`
--

INSERT INTO `t_cart_items` (`id`, `product_id`, `cart_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, '2019-09-13 05:51:31', '2019-09-13 06:55:40'),
(2, 1, 1, 1, '2019-09-13 06:07:06', '2019-09-13 06:07:06');

-- --------------------------------------------------------

--
-- Структура таблицы `t_categories`
--

CREATE TABLE `t_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT 0,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_categories`
--

INSERT INTO `t_categories` (`id`, `parent_id`, `name`, `url`, `image`, `class`, `sort`, `type`, `description`, `seo_keywords`, `seo_description`, `active`, `created_at`, `updated_at`) VALUES
(1, 0, 'Автокресла', 'avtokresla', '1306ab1e32f215a17e4dd1cb7ec2e324.png', NULL, 0, NULL, NULL, NULL, NULL, 0, '2019-09-12 09:13:25', '2019-09-12 09:25:02'),
(2, 0, 'Прогулка  и улица', 'progulka-i-ulitsa', '211ddcfa3d56146e37b348b5882ed49d.png', NULL, 0, NULL, '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, NULL, 1, '2019-09-12 09:17:34', '2019-09-13 11:17:16'),
(3, 0, 'Кормление', 'kormlenie', '5b9499e883fd147446336dc7b4833ac1.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:18:14', '2019-09-12 09:18:14'),
(4, 0, 'Забота и уход', 'zabota-i-ukhod', 'e569916d2bb10860ff8b3aae8b111d6f.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:18:54', '2019-09-12 09:18:54'),
(5, 0, 'Детская комната', 'detskaya-komnata', 'e3004a8a411a7b88fb2a20a5caa534e0.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:19:25', '2019-09-12 09:19:25'),
(6, 0, 'Игрушки и развлечения', 'igrushki-i-razvlecheniya', '8cf1829890f3d6a4fb860a8f6d8cfca3.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:20:07', '2019-09-12 09:20:07'),
(7, 0, 'Защита и безопасность', 'zashchita-i-bezopasnost', '368b6e8dd5593ad7c88509ff7ba0ed02.png', NULL, 0, NULL, NULL, NULL, NULL, 0, '2019-09-12 09:20:44', '2019-09-12 09:25:15'),
(8, 0, 'Купание', 'kupanie', '4849b1eadc3b831f353b4d123c86f455.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:21:24', '2019-09-12 09:21:24'),
(9, 0, 'Одежда и обувь', 'odezhda-i-obuv', '989ddecc18f3e754a8de2fb53d8fa11e.png', NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:21:53', '2019-09-12 09:21:53'),
(10, 2, 'Коляски', 'kolyaski', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:39:30', '2019-09-12 09:39:30'),
(11, 2, 'Модульные коляски', 'modulnye-kolyaski', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:44:32', '2019-09-12 09:44:32'),
(12, 2, 'Люльки переноски', 'lyulki-perenoski', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:44:55', '2019-09-12 09:44:55'),
(13, 2, 'Слинги и кенгуру', 'slingi-i-kenguru', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:03', '2019-09-12 09:45:03'),
(14, 2, 'Сумки для мамы', 'sumki-dlya-mamy', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:14', '2019-09-12 09:45:14'),
(15, 2, 'Поводки, вожжи', 'povodki-vozhzhi', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:23', '2019-09-12 09:45:23'),
(16, 2, 'Самокаты', 'samokaty', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:37', '2019-09-12 09:45:37'),
(17, 2, 'Толокары, каталки', 'tolokary-katalki', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:46', '2019-09-12 09:45:46'),
(18, 2, 'Велосипеды', 'velosipedy', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:45:58', '2019-09-12 09:45:58'),
(19, 2, 'Беговелы', 'begovely', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:46:22', '2019-09-12 09:46:22'),
(20, 2, 'Санки, снегокаты', 'sanki-snegokaty', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:46:31', '2019-09-12 09:46:31'),
(21, 2, 'Аксессуары', 'aksessuary', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:46:41', '2019-09-12 09:46:41'),
(22, 3, 'Стульчики для кормления', 'stulchiki-dlya-kormleniya', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:47:26', '2019-09-12 09:47:26'),
(23, 3, 'Стерилизаторы, подогреватели', 'sterilizatory-podogrevateli', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:47:52', '2019-09-12 09:47:52'),
(24, 3, 'Пароварки, блендеры', 'parovarki-blendery', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2019-09-12 09:48:01', '2019-09-12 09:48:01');

-- --------------------------------------------------------

--
-- Структура таблицы `t_category_filter_links`
--

CREATE TABLE `t_category_filter_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sort` int(10) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_category_product`
--

CREATE TABLE `t_category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_category_product`
--

INSERT INTO `t_category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 10, 1, NULL, NULL),
(2, 10, 2, NULL, NULL),
(3, 10, 3, NULL, NULL),
(4, 10, 4, NULL, NULL),
(5, 10, 5, NULL, NULL),
(6, 10, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_cities`
--

CREATE TABLE `t_cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `t_cities`
--

INSERT INTO `t_cities` (`id`, `name`, `code`, `sort`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Аксай', 'aksay', 1, 0, '2019-06-27 02:48:55', '2019-06-02 21:37:52'),
(2, 'Актау', 'aktau', 2, 1, '2019-06-27 02:51:14', '2019-06-27 02:51:14'),
(3, 'Актобе', 'aktobe', 3, 1, '2019-06-27 02:50:34', '2019-06-27 02:50:34'),
(4, 'Алматы', 'almaty', 4, 1, '2019-06-27 02:49:21', '2019-06-27 02:49:21'),
(5, 'Алтай', 'altay', 5, 0, '2019-06-27 02:49:04', '2019-06-02 21:38:47'),
(6, 'Арысь', 'arys', 6, 0, '2019-06-27 02:49:04', '2019-06-02 21:38:57'),
(7, 'Атырау', 'atyrau', 7, 1, '2019-06-27 02:49:41', '2019-06-27 02:49:41'),
(8, 'Балхаш', 'balkhash', 8, 0, '2019-06-27 02:49:04', '2019-06-02 21:39:46'),
(9, 'Есик', 'esik', 9, 0, '2019-06-27 02:49:04', '2019-06-02 21:39:57'),
(10, 'Жанаозен', 'zhanaozen', 10, 0, '2019-06-27 02:49:04', '2019-06-02 21:40:03'),
(11, 'Жезказган', 'zhezkazgan', 11, 0, '2019-06-27 02:49:04', '2019-06-02 21:40:09'),
(12, 'Жетысай', 'zhetysay', 12, 0, '2019-06-27 02:49:04', '2019-06-02 21:40:22'),
(13, 'Капшагай', 'kapshagay', 13, 0, '2019-06-27 02:49:04', '2019-06-02 21:40:38'),
(14, 'Караганда', 'karaganda', 14, 1, '2019-06-27 02:50:27', '2019-06-27 02:50:27'),
(15, 'Каскелен', 'kaskelen', 15, 0, '2019-06-27 02:49:04', '2019-06-02 21:40:51'),
(16, 'Кокшетау', 'kokshetau', 16, 0, '2019-06-27 02:49:04', '2019-06-02 21:41:01'),
(17, 'Костанай', 'kostanay', 17, 0, '2019-06-27 02:49:04', '2019-06-02 21:41:11'),
(18, 'Кульсары', 'kulsary', 18, 0, '2019-06-27 02:49:04', '2019-06-02 21:41:18'),
(19, 'Кызылорда', 'kyzylorda', 19, 0, '2019-06-27 02:49:04', '2019-06-02 21:41:26'),
(20, 'Астана(Нур-Султан)', 'astana-nur-sultan', 20, 1, '2019-06-27 02:49:30', '2019-06-27 02:49:30'),
(21, 'Павлодар', 'pavlodar', 21, 1, '2019-06-27 02:50:03', '2019-06-27 02:50:03'),
(22, 'Петропавловск', 'petropavlovsk', 22, 0, '2019-06-27 02:49:04', '2019-06-02 21:41:55'),
(23, 'Риддер', 'ridder', 23, 0, '2019-06-27 02:49:04', '2019-06-02 21:42:01'),
(24, 'Рудный', 'rudnyy', 24, 0, '2019-06-27 02:49:04', '2019-06-02 21:42:10'),
(25, 'Сарань', 'saran', 25, 0, '2019-06-27 02:49:04', '2019-06-02 21:42:19'),
(26, 'Сарыагаш', 'saryagash', 26, 0, '2019-06-27 02:49:04', '2019-06-02 21:43:07'),
(27, 'Сатпаев', 'satpaev', 27, 0, '2019-06-27 02:49:04', '2019-06-02 21:43:18'),
(28, 'Семей', 'semey', 28, 1, '2019-06-27 02:50:12', '2019-06-27 02:50:12'),
(29, 'Талгар', 'talgar', 29, 0, '2019-06-27 02:49:04', '2019-06-02 21:43:34'),
(30, 'Талдыкорган', 'taldykorgan', 30, 0, '2019-06-27 02:49:04', '2019-06-02 21:43:43'),
(31, 'Тараз', 'taraz', 31, 1, '2019-06-27 02:50:20', '2019-06-27 02:50:20'),
(32, 'Темиртау', 'temirtau', 32, 0, '2019-06-27 02:49:04', '2019-06-02 21:44:03'),
(33, 'Туркестан', 'turkestan', 33, 0, '2019-06-27 02:49:04', '2019-06-02 21:44:12'),
(34, 'Уральск', 'uralsk', 34, 1, '2019-06-27 02:49:55', '2019-06-27 02:49:55'),
(35, 'Усть-Каменогорск', 'ust-kamenogorsk', 35, 0, '2019-06-27 02:49:04', '2019-06-02 21:44:33'),
(36, 'Шахтинск', 'shakhtinsk', 36, 0, '2019-06-27 02:49:04', '2019-06-02 21:44:43'),
(37, 'Шиели', 'shieli', 37, 0, '2019-06-27 02:49:04', '2019-06-02 21:44:54'),
(38, 'Шымкент', 'shymkent', 38, 1, '2019-06-27 02:49:47', '2019-06-27 02:49:47'),
(39, 'Щучинск', 'shchuchinsk', 39, 0, '2019-06-27 02:49:04', '2019-06-02 21:45:21'),
(40, 'Экибастуз', 'ekibastuz', 40, 0, '2019-06-27 02:49:04', '2019-06-02 21:45:28');

-- --------------------------------------------------------

--
-- Структура таблицы `t_companies`
--

CREATE TABLE `t_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_migrations`
--

CREATE TABLE `t_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_migrations`
--

INSERT INTO `t_migrations` (`id`, `migration`, `batch`) VALUES
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2014_10_12_100000_create_password_resets_table', 1),
(73, '2017_07_03_000001_create_carriers_table', 1),
(74, '2017_07_03_000002_create_attribute_sets_table', 1),
(75, '2017_07_03_000004_create_settings_table', 1),
(76, '2017_07_03_000006_create_taxes_table', 1),
(77, '2017_07_03_000007_create_notification_templates_table', 1),
(78, '2017_07_03_000008_create_currencies_table', 1),
(79, '2017_07_03_000009_create_order_statuses_table', 1),
(80, '2017_07_03_000010_create_product_groups_table', 1),
(81, '2017_07_03_000011_create_categories_table', 1),
(82, '2017_07_03_000012_create_attributes_table', 1),
(83, '2017_07_03_000013_create_countries_table', 1),
(84, '2017_07_03_000014_create_notifications_table', 1),
(85, '2017_07_03_000015_create_addresses_table', 1),
(86, '2017_07_03_000016_create_attribute_attribute_set_table', 1),
(87, '2017_07_03_000017_create_companies_table', 1),
(88, '2017_07_03_000018_create_products_table', 1),
(89, '2017_07_03_000019_create_attribute_values_table', 1),
(90, '2017_07_03_000020_create_orders_table', 1),
(91, '2017_07_03_000021_create_order_product_table', 1),
(92, '2017_07_03_000022_create_product_images_table', 1),
(93, '2017_07_03_000023_create_attribute_product_value_table', 1),
(94, '2017_07_03_000024_create_order_status_history_table', 1),
(95, '2017_07_03_000025_create_category_product_table', 1),
(96, '2017_07_03_000026_create_permission_tables', 1),
(97, '2017_08_07_091623_create_cart_rules_table', 1),
(98, '2017_08_07_102321_create_cart_rules_customers_table', 1),
(99, '2017_08_07_102633_create_cart_rules_categories_table', 1),
(100, '2017_08_07_103148_create_cart_rules_products_table', 1),
(101, '2017_08_07_111214_create_cart_rules_product_groups_table', 1),
(102, '2017_08_07_111321_create_cart_rules_combinations_table', 1),
(103, '2017_08_17_131600_create_specific_prices_table', 1),
(104, '2018_01_10_120321_delete_notifications_table', 1),
(105, '2018_01_23_153705_modify_orders_table_created_at_required', 1),
(106, '2018_12_03_042911_create_payments_table', 2),
(109, '2018_12_03_052500_update_orders_table', 3),
(110, '2018_12_03_055455_update_orders_table2', 3),
(111, '2018_12_23_080044_create_sliders_table', 4),
(112, '2018_12_23_162023_create_attribute_groups_table', 5),
(113, '2018_12_23_165410_update_attributes_table', 6),
(115, '2018_12_26_161310_create_reviews_table', 7),
(116, '2018_12_26_172955_create_review_likes_table', 8),
(117, '2018_12_26_183103_create_compare_products_table', 9),
(120, '2018_12_28_150204_create_product_features_wishlist_table', 11),
(121, '2018_12_27_052127_create_carts_table', 12),
(122, '2018_12_27_052734_create_cart_items_table', 12),
(123, '2019_01_01_151439_create_callbacks_table', 13),
(124, '2019_01_03_040738_create_category_filter_links_table', 14),
(125, '2019_01_03_150026_create_you_watched_products_table', 15),
(127, '2019_01_04_065421_create_product_accessories_table', 16),
(130, '2019_01_08_170806_create_questions_answers_table', 17),
(131, '2019_01_09_092647_create_subscribe_table', 18);

-- --------------------------------------------------------

--
-- Структура таблицы `t_news`
--

CREATE TABLE `t_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `preview_text` varchar(500) DEFAULT NULL,
  `detail_text` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `t_news`
--

INSERT INTO `t_news` (`id`, `title`, `code`, `image`, `preview_text`, `detail_text`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Новая линейка смартфонов в семействе Xiaomi — CC!', 'novaya-lineyka-smartfonov-v-semeystve-xiaomi-cc', 'novaya-lineyka-smartfonov-v-semeystve-xiaomi-cc.jpeg', '<p><strong>Сегодня на платформе Wiebo основатель Xiaomi Лэй Цзюнь объявил о запуске новой линейки с необычным&nbsp; для русскоговорящего пользователя названием&nbsp; &mdash; Xiaomi CC!</strong></p>', '<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/xiaomi_cc_wiebo_1.png\" /></p>\n\n<p>Несколько дней назад в базе китайского сертифицирующего бюро TENAA появились некоторые характеристики и первые изображения нового смартфона, который предположительно выйдет под названием&nbsp;<strong>Xiaomi CC 9</strong>, и был разработан совместно с компанией Meitu.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/xiaomi_cc_weibo.jpg\" />Ожидается, что смартфон получит AMOLED экран со встроенным сканером отпечатков пальцев и диагональю 6.39&Prime; при габаритах 156.8 х 74.5 х 8.67 мм.</p>\n\n<p>Новая модель будет позиционироваться, как смартфон для селфи, и все это благодаря фронтальной камере на&nbsp;<strong>32 Мп</strong>&nbsp;и специальным алгоритмам обработки изображений. Основная камера будет состоять из 3 модулей на 48 Мп.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/xiaomi_cc_tenaa.png\" /></p>\n\n<p>Кроме того, по слухам, Xiaomi CC 9 получит емкий аккумулятор на 4000 mAh и 730 Snapdragon. Подтвердятся ли слухи? Узнаем совсем скоро&nbsp;</p>', 1, '2019-06-01 15:33:10', '2019-06-23 16:26:19'),
(4, 'Город Портативный Беспроводной Колонка Блютуз 2000 — или как еще назвать новый продукт с краудфандинга?', 'gorod-portativnyy-besprovodnoy-kolonka-blyutuz-2000-ili-kak-eshche-nazvat-novyy-produkt-s-kraudfandinga', 'gorod-portativnyy-besprovodnoy-kolonka-blyutuz-2000-ili-kak-eshche-nazvat-novyy-produkt-s-kraudfandinga.jpeg', '<p><strong>Компания Xiaomi анонсировала на своей краудфандинговой площадке Youpin новый продукт, название которого звучит как Vifa City Portable Bluetooth Speaker. Из этого названия сразу ясно, что речь идет о беспроводной колонке стоимостью 699 юаней (101 доллар). Чем объясняется такая стоимость? Попробуем разобраться вместе.</strong></p>', '<p><img alt=\"\" height=\"600\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new.jpg 800w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-300x225.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-768x576.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-560x420.jpg 560w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-80x60.jpg 80w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-100x75.jpg 100w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-180x135.jpg 180w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-238x178.jpg 238w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-640x480.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-681x511.jpg 681w\" width=\"800\" /></p>\n\n<p>Очевидно, что ценник в 101 доллар на краудфандинге и уже 130 долларов в рознице не является привычно низким для продукции под эгидой Xiaomi. Связано это с технологией воспроизведения звука и качеством самого бренда Vifa. Компания Vifa является всемирно известным датским брендом, специализирующимся на производстве аудио-оборудования. Основана Vifa была в далеком 1933 году господином Н.С. Мадсеном. Первое поколение своей продукция Vifa запустила в занменитом городе Видебек в Дании и с тех пор компания удерживает лидирующие позиции в мировой практики производства электроакустики. Компания также обеспечивает поставку звуковых систем для более чем 500 известных аудио-брендов по всему миру.</p>\n\n<p><img alt=\"\" height=\"600\" sizes=\"(max-width: 829px) 100vw, 829px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2.jpg 829w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2-300x217.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2-768x556.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2-580x420.jpg 580w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2-640x463.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-2-681x493.jpg 681w\" width=\"829\" /></p>\n\n<p>Vifa City Portable Wireless Bluetooth Speaker использует в своей конструкции коаксильный динамик. Колонка может похвастаться четкими и очень выраженными средними и высокими частотами воспроизведения. Несмотря на небольшие габариты новинки, звук она выдает очень мощный.</p>\n\n<p><img alt=\"\" height=\"1001\" sizes=\"(max-width: 1080px) 100vw, 1080px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3.jpg 1080w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-300x278.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-768x712.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-1024x949.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-453x420.jpg 453w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-640x593.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/speaker-new-3-681x631.jpg 681w\" width=\"1080\" /></p>\n\n<p>Помимо воспроизведения музыки, колонка поддерживает функцию гарнитуры для громкой связи, для этого предусмотрен встроенный микрофон. Данный микрофон минимизирует шумы и эхо, обладает высокой чувствительностью и эффективно отделяет четкий голос от шумов окружающей среды.</p>\n\n<p>Беспроводные колонки от Xiaomi в Румикоме</p>\n\n<p>Vifa City Bluetooth Speaker изготовлена из высокопрочного алюминиевого сплава и весит всего 0,3 кг. Новинка имеет пыле- и влагозащиту по стандарту IPX4. Автономность колонки обеспечивает аккумулятор емкостью 2000 мАч, которого хватит на 12 часов непрерывной работы устройства при среднем уровне громкости. В продажу новинка поступит в нескольких цветовых решениях: Солнечный Красный и Изумрудный Зеленый. Поставки начнутся с 1 августа.</p>', 1, '2019-06-20 16:27:56', '2019-06-23 16:30:50'),
(5, 'Сравнение Xiaomi Mi Band 4, Hey+ и Amazfit Cor 2', 'sravnenie-xiaomi-mi-band-4-hey-i-amazfit-cor-2', 'sravnenie-xiaomi-mi-band-4-hey-i-amazfit-cor-2.jpeg', '<p><strong>Рынок носимой электроники растет, а производителям приходится только и делать, что успевать за растущим аппетитом покупателей. Для Xiaomi это не проблема и сейчас китайский техногигант предлагает широкий ассортимент фитнес-трекеров, умных часов и во всем этом многообразии можно легко запутаться. В этой статье мы сравним новенький Mi Band 4 с Hey Plus и Amazfit Cor 2.</strong></p>', '<p><img alt=\"\" height=\"1000\" sizes=\"(max-width: 3000px) 100vw, 3000px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison.jpg 3000w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-300x100.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-768x256.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-1024x341.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-1260x420.jpg 1260w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-640x213.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/comparison-681x227.jpg 681w\" width=\"3000\" /></p>\n\n<p>Приведем краткую сравнительную таблицу:</p>\n\n<table>\n	<tbody>\n		<tr>\n			<td>&nbsp;</td>\n			<td><strong>Mi Band 4</strong></td>\n			<td><strong>Hey Plus</strong></td>\n			<td><strong>Amazfit Cor</strong></td>\n			<td><strong>Amazfit Cor 2</strong></td>\n		</tr>\n		<tr>\n			<td><strong>Интерфейс подключения</strong></td>\n			<td>Bluetooth 5.0</td>\n			<td>Bluetooth 4.2</td>\n			<td>Bluetooth 4.1</td>\n			<td>Bluetooth 4.2</td>\n		</tr>\n		<tr>\n			<td><strong>Дисплей</strong></td>\n			<td>AMOLED 0.95&rdquo;</td>\n			<td>AMOLED 0.95&rdquo;</td>\n			<td>IPS 1.23&rdquo;</td>\n			<td>IPS 1.23&rdquo;</td>\n		</tr>\n		<tr>\n			<td><strong>Защита дисплея</strong></td>\n			<td>стекло</td>\n			<td>пластик</td>\n			<td>стекло Gorilla Glass</td>\n			<td>стекло Gorilla Glass</td>\n		</tr>\n		<tr>\n			<td><strong>Датчики и модули</strong></td>\n			<td>акселерометр\n			<p>&nbsp;</p>\n\n			<p>гироскоп</p>\n\n			<p>NFC</p>\n			</td>\n			<td>акселерометр\n			<p>&nbsp;</p>\n\n			<p>гироскоп</p>\n\n			<p>NFC</p>\n			</td>\n			<td>акселерометр</td>\n			<td>акселерометр</td>\n		</tr>\n		<tr>\n			<td><strong>Емкость аккумулятора</strong></td>\n			<td>125 мАч</td>\n			<td>120 мАч</td>\n			<td>170 мАч</td>\n			<td>160 мАч</td>\n		</tr>\n		<tr>\n			<td><strong>Материал корпуса</strong></td>\n			<td>пластик</td>\n			<td>пластик</td>\n			<td>алюминий</td>\n			<td>алюминий</td>\n		</tr>\n		<tr>\n			<td><strong>Пыле- и влагозащита</strong></td>\n			<td>IP68</td>\n			<td>IP68</td>\n			<td>IP67</td>\n			<td>IP67</td>\n		</tr>\n		<tr>\n			<td><strong>Дата анонса</strong></td>\n			<td>июнь 2019</td>\n			<td>февраль 2019</td>\n			<td>март 2018</td>\n			<td>май 2019</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Первую версию Amazfit Cor мы сравнивать не будем, однако для наглядности включили ее в сравнительную таблицу.</p>\n\n<p><b>Дизайн</b></p>\n\n<p><img alt=\"\" height=\"1345\" sizes=\"(max-width: 1527px) 100vw, 1527px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus.jpg 1527w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-300x264.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-768x676.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-1024x902.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-477x420.jpg 477w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-640x564.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-681x600.jpg 681w\" width=\"1527\" /></p>\n\n<p>На первый взгляд, устройства очень похожи друг на друга и, действительно, общие черты можно найти у всех фитнес-трекеров. Mi Band 4 отличается от Hey Plus буквально в мелочах: вместо управляющей кнопки на дисплее таковая вынесена на нижнюю часть передней панели, тем самым экономится полезное пространство дисплея Mi Band 4.</p>\n\n<p><img alt=\"\" height=\"814\" sizes=\"(max-width: 1061px) 100vw, 1061px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2.jpg 1061w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-300x230.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-768x589.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-1024x786.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-547x420.jpg 547w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-80x60.jpg 80w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-640x491.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-3-2-681x522.jpg 681w\" width=\"1061\" /></p>\n\n<p>Аналогично строится дизайн передней панели и у Amazfit Cor 2, за тем лишь исключением, что дисплей последнего существенно больше. Но это не значит, что дисплей Cor 2 лучше &mdash; напротив, при большей диагонали этот дисплей имеет меньшее разрешение и менее яркий IPS-дисплей.</p>\n\n<p><img alt=\"\" height=\"600\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo.jpg 800w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-300x225.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-768x576.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-560x420.jpg 560w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-80x60.jpg 80w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-100x75.jpg 100w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-180x135.jpg 180w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-238x178.jpg 238w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-640x480.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-logo-681x511.jpg 681w\" width=\"800\" /></p>\n\n<p>Все сравниваемые устройства имеют возможность замены ремешков, на на Amazfit Cor 2 это делается несколько сложнее.</p>\n\n<p><b>Характеристики</b></p>\n\n<p><img alt=\"\" height=\"770\" sizes=\"(max-width: 1024px) 100vw, 1024px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-300x226.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-768x578.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-559x420.jpg 559w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-80x60.jpg 80w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-100x75.jpg 100w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-180x135.jpg 180w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-238x178.jpg 238w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-640x481.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-681x512.jpg 681w\" width=\"1024\" /></p>\n\n<p>Плотность пиксельной матрицы дисплея Mi Band 4 и Hey Plus составляет 282 ppi, в то время, как у Amazfit Cor 2 это всего лишь 145 ppi. Дисплеи всех устройств сенсорные для удобного управления, однако пользоваться Mi Band 4 и Hey Plus гораздо приятнее за счет яркого и сочного AMOLED-дисплея, который хорошо видно даже на солнце.</p>\n\n<p><img alt=\"\" height=\"1080\" sizes=\"(max-width: 2152px) 100vw, 2152px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2.jpg 2152w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-300x151.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-768x385.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-1024x514.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-837x420.jpg 837w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-640x321.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-2-2-681x342.jpg 681w\" width=\"2152\" /></p>\n\n<p>Емкость аккумулятора Mi Band 4, Hey Plus и Amazfit Cor 2 составляет 125 мАч, 120 мАч и 160 мАч соответственно. В целом, устройства выдают схожую автономность, превышающую 20 дней обычного использования.</p>\n\n<p>Браслеты соединяются со смартфоном по Bluetooth, но только Mi Band 4 делает это по новому протоколу Bluetooth 5.0, что в теории должно помочь увеличить стабильность сигнала и автономность.</p>\n\n<p><img alt=\"\" height=\"500\" sizes=\"(max-width: 500px) 100vw, 500px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-2.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-2.jpg 500w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-2-150x150.jpg 150w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-2-300x300.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-2-420x420.jpg 420w\" width=\"500\" /></p>\n\n<p>Все устройства получили акселерометр и гироскоп для определения активности, однако только у Mi Band 4 и Hey Plus имеются версии с NFC-модулем, которым можно расплачиваться в китайских магазинах, поддерживающих AliPay. Впрочем уже сейчас можно в Hey Plus можно добавить карту &ldquo;Тройки&rdquo;, что будет актуально и для россиян. Есть смысл о приобретении версии с NFC еще и потому, что недавно Xiaomi&nbsp;<a href=\"https://ru-mi.com/blog/skoro-zarabotaet-platezhniy-servis-mi-pay-v-rossii.html\" rel=\"noopener\" target=\"_blank\"><strong>заключила соглашение</strong></a>&nbsp;с MasterCard о сотрудничестве в России.</p>\n\n<p><b>Функционал</b></p>\n\n<p>Стоит сразу отметить, что все устройства способны работать как с Android, так и с iOS смартфонами, для этого предусмотрены специальные приложения: Mi Fit для Mi Band 4 и Amazfit Cor 2 и Mi Home для Hey Plus.</p>\n\n<p>Кстати, Hey Plus стал одним из первых умных браслетов, в котором была реализована поддержка управления умным домом. Возможно назначить несколько пресетов для управления умным светом, чайником или другими гаджетами для умного дома, поддерживаемыми приложением Mi Home.</p>\n\n<p><img alt=\"\" height=\"1600\" sizes=\"(max-width: 2560px) 100vw, 2560px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces.jpg 2560w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-300x188.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-768x480.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-1024x640.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-672x420.jpg 672w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-640x400.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/mi-band-4-watchfaces-681x426.jpg 681w\" width=\"2560\" /></p>\n\n<p>Конечно, все устройства могут оповещать владельца вибрацией о входящих вызовах, об уведомлениях от приложений с выводом текста на дисплей, о выставленных будильниках и таймерах. Можно запустить и секундомер.</p>\n\n<p>Никуда не делись привычные в любом фитнес-трекере шагомер, счетчик калорий, измерение пульса в режиме реального времени, оповещения об отсутствии активности и даже отслеживание фаз сна.</p>\n\n<p><img alt=\"\" height=\"1080\" sizes=\"(max-width: 1920px) 100vw, 1920px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3.jpg 1920w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-300x169.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-768x432.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-1024x576.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-747x420.jpg 747w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-640x360.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-3-681x383.jpg 681w\" width=\"1920\" /></p>\n\n<p>Серьезным нововведением в Mi Band 4 стало внедрение голосового помощника XiaoAI, который не будет работать на территории России. Однако сам факт наличия микрофона дает надежду, что в будущих обновлениях для Mi Band 4 пользователи получат возможность отвечать на входящие уведомления голосовыми ответами.</p>\n\n<p>Mi Band 4 порадует своих владельцев огромным количеством сменных циферблатов, новые можно загружать прямо в приложении Mi Fit. Более того, уже скоро появятся первые кастомные циферблаты от простых людей, увлекающихся дизайном и рисованием вочфейсов для носимой электроники. Конечно, разнообразие циферблатов есть и в случае с Hey Plus и Amazfit Cor 2, однако количественно и качественно до Mi Band 4 все же далеко.</p>\n\n<p><img alt=\"\" height=\"1000\" sizes=\"(max-width: 1000px) 100vw, 1000px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2.jpg 1000w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-150x150.jpg 150w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-300x300.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-768x768.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-420x420.jpg 420w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-640x640.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/hey-plus-2-681x681.jpg 681w\" width=\"1000\" /></p>\n\n<p>Также Mi Band 4 более ориентирован на людей, увлеченных спортом, и предусматривает несколько видов тренировок прямо в интерфейсе самого браслета. Mi Band 4 способен самостоятельно отслеживать некоторые виды активности, вроде продолжительной ходьбы, бега, езды на велосипеде или плавания. Этот браслет, как и Hey Plus и Amazfit Cor 2 пыле- и влагозащищены, что позволяет плавать или мыть руки, не переживая за сохранность гаджета.</p>\n\n<p><img alt=\"\" height=\"480\" sizes=\"(max-width: 480px) 100vw, 480px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz.jpg 480w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-150x150.jpg 150w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-300x300.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/amaz-420x420.jpg 420w\" width=\"480\" /></p>\n\n<p>Выбирая сегодня новый фитнес-трекер, важно отталкиваться от собственных ощущений от того или иного устройства, его дизайна и философии. Но с технической точки зрения, самым интересным сегодня предложением является именно новый Mi Band 4. Hey Plus не имеет должной поддержки со стороны производителя и потому продукт не развивается, по крайней мере на территории России. Amazfit Cor 2 предлагает весь базовый набор функций, которые ждешь от трекера на запястье, и, действительно, многим может понравиться именно этот вариант: своим дизайном, простотой и отсутствием многим ненужных функций. Так или иначе, но каждый должен выбрать сам. Что же выберете вы?&nbsp;</p>', 1, '2019-06-20 16:34:02', '2019-06-23 16:35:41'),
(6, 'Смартфон Meitu 9T уже поступил в продажи на площадке Xiaomi&Youpin', 'smartfon-meitu-9t-uzhe-postupil-v-prodazhi-na-ploshchadke-xiaomiyoupin', 'smartfon-meitu-9t-uzhe-postupil-v-prodazhi-na-ploshchadke-xiaomiyoupin.jpeg', '<p><strong>Когда в социальных сетях начали появляться первые рендеры и фотографии экспериментальной модели, выпущенной Xiaomi совместно с брендом Meitu, мы думали, что это окажется шуткой. Но как бы не так &mdash; Xiaomi не привыкли шутить,&nbsp; Meitu T9 Mobile Phoneбыл&nbsp; представлен на площадке Xiaomi&amp;Youpin, и уже доступен для заказа.</strong></p>', '<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_3.jpg\" />Смартфон представлен в ярких цветовых исполнениях &mdash; розовый, красный, бирюзовый и зеленый.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9.jpg\" />Новинка имеет цельнометаллический симметричный корпус, габариты которого составляют 172.1 х 75 х 9.5 мм. На задней панели расположен сканер отпечатков пальцев, двойной модуль камеры и фотовспышка, выполненная в форме кольца.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/pink.jpg\" />На передней нас встречает&nbsp;<strong>AMOLED-экран</strong>&nbsp;с соотношением сторон в&nbsp;<strong>18:9</strong>&nbsp;и диагональю&nbsp;<strong>6.01&Prime;</strong>. В верхней части фронтальной панели разместился двойной модуль селфи-камеры, 2 LED-светодиода, датчик приближения и освещенности, а так же динамик.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_5.jpg\" />Основная и селфи-камеры повторяют друг друга по характеристикам. В качестве главного модуля выбран&nbsp;<strong>Sony IMX363</strong>+ на&nbsp;<strong>12 Мп (1.4 qm,&nbsp; F/1.8)</strong>, а дополняется он вспомогательным модулем на 5 Мп &mdash;&nbsp;<strong>Samsung 4E8</strong>.&nbsp; Обе камеры поддерживают OIS-оптическую стабилизацию.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_2.jpg\" /><strong>Meitu T9</strong>&nbsp;управляется на специальной разработанной для смартфонов Meitu операционной системе &mdash; MEIOS, основанной на Android 8.1. Приложение камеры имеет дополнительные фильтры и настройки, позволяющие получить улучшенные версии фотографий. Смартфон оснащен специальными AI-алгоритмами размытия заднего фона и&nbsp; системой интеллектуальной настройки цвета&nbsp;<strong>MTcolor System</strong>.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_6.jpg\" /><br />\nКроме того, при съемке фото или записи видео возможна корректировка фигуры (до пост-обработки). Тонкая талия, красивые плечи, длинные ноги &mdash; и ты станешь самым желанным фотографом для любой девушки&nbsp;</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_4.jpg\" />В качестве чипсета выбран 8 ядерный&nbsp;<strong>Qualcomm Snapdragon 660</strong>&nbsp;с частотой 1.84 ГГц. Так же смартфон получил аналог режима GameTurbo от Xiaomi &mdash;&nbsp;<strong>MTGame 2.0</strong>, который программно оптимизирует процессы, увеличивая частоту кадров и обеспечивая быстрый отклик.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_7.jpg\" />Емкость аккумулятора составляет&nbsp;<strong>3100 mAh</strong>. Смартфон поддерживает быструю зарядку QC 3.0 (18W), а для зарядки предусмотрен разъем Type-C. К сожалению, производитель не раскрывает данные по автономности устройства, но мы надеемся, что полного заряда точно хватит на 6-8 часов в режиме постоянной фотосъемки.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_1.jpg\" />В угоду необычному дизайну пришлось пожертвовать разъемом 3.5 мм, но зато&nbsp;<strong>Meitu T9</strong>&nbsp;оснащен Hi-Fi аудиочипом от AKM, который характеризуется улучшенным качеством звука и сниженной потребляемой мощностью.&nbsp; NFC-модулю и ИК-порту тоже места не нашлось.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/biryuz.jpg\" />Доступно 2 комплектации &mdash; 4/64 Gb и 6/128Gb. Младшая версия обойдется в 1499 юаней (~14 000 рублей), старшая в 1899 юаней (~17 600 рублей) соответственно.</p>\n\n<p><img alt=\"\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/meitu_t9_9.jpg\" /></p>\n\n<p>&nbsp;</p>', 1, '2019-06-19 16:37:30', '2019-06-23 16:39:47'),
(7, 'Информация о смартфонах Xiaomi Mi A3 и Mi A3 Lite', 'informatsiya-o-smartfonakh-xiaomi-mi-a3-i-mi-a3-lite', 'informatsiya-o-smartfonakh-xiaomi-mi-a3-i-mi-a3-lite.jpeg', '<p><strong>Уже прошло два года с того момента, как компания Xiaomi выпустила свой первый смартфон на &laquo;чистом&raquo; Android &mdash; Mi A1. Логическим его продолжение стал Mi A2. А теперь на подходе третья версия устройства. Хоть пока точно неизвестна дата появления на рынке, но некоторая информация о новинке уже появилась в сети.</strong></p>', '<p>Версий третьего поколения будет две. Модели получат названия: Mi A3 и Mi A3 Lite. Старшей версии пророчат процессор&nbsp;Snapdragon 712, а младшая получит&nbsp;чип Snapdragon 710. За автономность будет отвечать аккумулятор емкостью 4000 мАч, с наличием быстрой зарядки на 18 ватт. Как и положено новинкам, устройство получит тройную основную камеру, одним из датчиков которой будет&nbsp;Sony IMX582 (судя по всему, такую же, как в Redmi K20). Фронтальная подэкранная (с круглым отверстием) камера получит датчик на 32 Мп.</p>\n\n<p>О стоимости устройств пока ничего не сообщается, но она не должна быть &laquo;заоблачной&raquo;, как и положено, данной линейке&nbsp;<strong>смартфонов</strong>&nbsp;от Xiaomi.</p>\n\n<p>По мере поступления новой информации, мы обязательно напишем об этом.</p>', 1, '2019-06-13 16:40:31', '2019-06-23 16:43:58'),
(8, 'Стало известно о существовании трех новых смартфонов Xiaomi', 'stalo-izvestno-o-sushchestvovanii-trekh-novykh-smartfonov-xiaomi', 'stalo-izvestno-o-sushchestvovanii-trekh-novykh-smartfonov-xiaomi.jpeg', '<p><strong>Остается не так уж и много времени, буквально считанные месяцы перед потенциальной презентацией, где Xiaomi должна будет представить преемников Mi A2 и Mi A2 Lite. Первые подробности о смартфонах появляются уже сейчас.</strong></p>', '<p><img alt=\"\" height=\"581\" sizes=\"(max-width: 1080px) 100vw, 1080px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3.jpg 1080w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-300x160.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-768x413.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-1024x551.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-781x420.jpg 781w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-640x344.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-681x366.jpg 681w\" width=\"1080\" /></p>\n\n<p>На форуме разработчиков XDA Developers имеется несколько людей, которые известны тем, что достают подробности о технических и программных особенностях будущих смартфонов из файлов прошивки, которые каким-то образом попадают в сеть. И теперь они заявляют, что нашли упоминания как минимум о трех новых смартфонах Xiaomi, в данный момент находящихся на тестировании. Устройства имеют кодовые названия &laquo;pyxis&raquo;, &laquo;bamboo_sprout&raquo; и &laquo;cosmos_sprout&raquo;. Последние два опознаны как смартфона на операционной системе Android One, так как все такие смартфоны имеют &laquo;_sprout&raquo; в своих кодовых именах.</p>\n\n<p><img alt=\"\" height=\"460\" sizes=\"(max-width: 820px) 100vw, 820px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept.jpg 820w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept-300x168.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept-768x431.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept-749x420.jpg 749w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept-640x359.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-concept-681x382.jpg 681w\" width=\"820\" /></p>\n\n<p>Сообщается, что в списке тестирования смартфонов имеется пункт &ldquo;fod&rdquo;, что означает &ldquo;finger-on-display&rdquo; или сканер отпечатков в дисплее. Все устройства могут получить фронтальную 32 Мп камеру с технологией объединения четырех пикселей в один, поскольку в результате тестирования камер в результате имеется изображение с разрешением 6560 x 4928 пикселов.</p>\n\n<p>&nbsp;</p>\n\n<p>Остальные спецификации пока неизвестны, но предполагается, что &laquo;pyxis&raquo; может быть MIUI-версией &laquo;bamboo_sprout&raquo; или &laquo;cosmos_sprout&raquo;. Телефоны, скорее всего, будут работать на разных процессорах. Mi A2 имеет процессор Snapdragon 660, и есть много вариантов, которые можно было бы использовать для его преемника. Это Snapdragon 670, Snapdragon 675, Snapdragon 710 или Snapdragon 712, который дебютировал на Mi 9 SE.</p>\n\n<p><img alt=\"\" height=\"675\" sizes=\"(max-width: 1100px) 100vw, 1100px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red.jpg 1100w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-300x184.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-768x471.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-1024x628.jpg 1024w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-684x420.jpg 684w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-640x393.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/03/mi-a3-red-681x418.jpg 681w\" width=\"1100\" /></p>\n\n<p>Mi A3 Lite также имеет достаточное количество вариантов процессора, которые может получить в финальном варианте: Snapdragon 632, Snapdragon 636 или даже Snapdragon 660. Все три телефона будут доступны в разных конфигурациях оперативной и постоянной памяти и должны иметь как минимум две задние камеры. Все устройства из коробки будут работать на операционной системе Android 9 Pie.</p>\n\n<p>&nbsp;</p>\n\n<p>Неудивительно, что в этих телефонах будут установлены сканеры отпечатков пальцев в дисплее. Около месяца назад менеджер по продуктам Xiaomi заявил, что эта технология появится во множестве телефонов среднего класса, выпущенных в этом году. Например, ею удостоился новый Mi 9 SE.</p>', 1, '2019-06-22 16:44:31', '2019-06-23 16:45:38'),
(9, 'Xiaomi выпустила беспроводную камеру для наружного наблюдения', 'xiaomi-vypustila-besprovodnuyu-kameru-dlya-naruzhnogo-nablyudeniya', 'xiaomi-vypustila-besprovodnuyu-kameru-dlya-naruzhnogo-nablyudeniya.jpeg', '<p><strong>Накануне китайский техногигант выпустил новый продукт &mdash; умную камеру для наружного наблюдения. Главной ее особенностью является возможность беспроводного монтажа, но новинке есть, чем еще похвастаться. Читайте подробнее в нашем материале!</strong></p>', '<p><img alt=\"\" height=\"600\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new.jpg 800w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-300x225.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-768x576.jpg 768w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-560x420.jpg 560w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-80x60.jpg 80w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-100x75.jpg 100w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-180x135.jpg 180w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-238x178.jpg 238w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-640x480.jpg 640w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-new-681x511.jpg 681w\" width=\"800\" /></p>\n\n<p>В комплект поставки входит небольшое по размером устройства для усиления сигнала, исходящего от камеры, установленной на улице, тем самым возможно снижение энергопотребления самой камерой. Об автономности скажем далее, а пока отметим возможность установки карты памяти MicroSD, что позволит локально сохранить весь записанный материал.</p>\n\n<p><img alt=\"\" height=\"489\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-with-repitter.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-with-repitter.jpg 600w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-with-repitter-300x245.jpg 300w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-with-repitter-515x420.jpg 515w\" width=\"600\" /></p>\n\n<p>Xiaomi Smart Camera оснащена встроенной литиевой батареей емкостью 5100 мАч, которой хватит до 100 дней работы без подзарядки. Не обошли стороной и продление долговечности устройства: камера защищена от пыли и влаги по стандарту IP65, что позволяет использовать ее для наружного наблюдения в течение длительного времени без опаски за сохранность гаджета.</p>\n\n<p>Возможна настройка камеры таким образом, чтобы запись начиналась только после того, как в кадре объектива появился человек. Новинка оснащена обученным искусственным интеллектом, который позволяет распознавать в кадре человеческие лица, таким образом камера не начнет случайную запись, если произойдет детектирование животного или даже насекомых.</p>\n\n<p><img alt=\"\" height=\"704\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-xiaomi.jpg\" srcset=\"https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-xiaomi.jpg 600w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-xiaomi-256x300.jpg 256w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-xiaomi-358x420.jpg 358w, https://ru-mi.com/blog/wp-content/uploads/2019/06/ip-camera-xiaomi-341x400.jpg 341w\" width=\"600\" /></p>\n\n<p>Есть и другой способ обнаружения активности на объекте: в новинке также предусмотрена инфракрасная камера, которая реагирует на инфракрасное излучение от тела человека (расстояние обнаружения достигает 10 метров). Используя две описанные технологии, можно быть полностью уверенным, что подобная камера точно не пропустит случайного посетителя, а коли и найдется такой, то владелец сразу получит уведомление с трансляцией в режиме реального времени на свой смартфон.</p>\n\n<p>Xiaomi Smart Camera записывает видео в разрешении 1080p, а благодаря достаточно светосильной оптической схеме новинки с диафрагмой f/2.6, которая пропускает на матрицу больше света, записи получаются действительно качественными. Ночью высокое качество съемки обеспечивают 8 встроенных инфракрасных прожекторов, не заметных человеческому глазу.</p>', 1, '2019-06-13 16:46:11', '2019-06-23 16:47:11'),
(10, 'Xiaomi выпустила Black Shark 2 Pro для геймеров', 'xiaomi-vypustila-black-shark-2-pro-dlya-geymerov', 'xiaomi-vypustila-black-shark-2-pro-dlya-geymerov.png', '<p>Компания Xiaomi&nbsp;показала Black Shark 2 Pro, предназначенный для игр. Основной акцент производитель сделал на том, что ему удалось создать один из самых мощных смартфонов, который обгоняет конкурентов. Так, создатели уверяют, что по результатам теста в AnTuTu новинка набирает впечатляющие 500 тысяч баллов.<br />\n&nbsp;</p>', '<p>Корпус Black Shark 2 Pro выполнен в стиле предшественника с небольшими коррективами в оформлении тыльной крышки. А еще производитель решил добавить яркости устройству, предложив фиолетовую и оранжевую расцветки.</p>\n\n<p>Внутри смартфона скрывается главное его преимущество &mdash; Snapdragon 855 Plus и компания заявляет, что это самое доступное устройство на рынке с этой платформой. Это и не удивительно, ведь кроме ASUS&nbsp;ROG Phone 2&nbsp;и Black Shark 2 Pro других устройств с этой однокристальной системой на рынке нет.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 3\" height=\"400\" src=\"https://andro-news.com/images/content/Se6461290-8e4a-40ae-8eb1-b30ce594e735.jpg\" title=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 3\" width=\"600\" /></p>\n\n<p>&nbsp;</p>\n\n<p>А еще производитель не забыл предложить систему жидкостного охлаждения, которая была доработана и усовершенствована. Прочие характеристики: 12 Гб оперативной памяти, внутренний накопитель на 128 Гб и 256 Гб типа UFS 3.0.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 4\" height=\"450\" src=\"https://andro-news.com/images/content/07af2831a32447fca337041410d32da4.jpg\" title=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 4\" width=\"600\" /></p>\n\n<p>&nbsp;</p>\n\n<p>В смартфоне установили AMOLED-экран диагональю 6,39 дюймов разрешением 2340х1080 точек с технологией DC Dimming, аккумулятор емкостью 4000 мАч, фронтальную 20 Мп камеру и двойную тыльную 48 Мп (Sony IMX586, f/1.75) + 13 Мп (Samsung S5K3M5, f/2.2).</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 5\" height=\"338\" src=\"https://andro-news.com/images/content/c4a8cdd7ca884a14a59a92eb06a4ba2d.gif\" title=\"Xiaomi выпустила Black Shark 2 Pro для геймеров – фото 5\" width=\"600\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Предлагает Black Shark 2 Pro операционную систему Android 9.0 Pie с оболочкой JOY UI, быструю зарядку мощностью 27 Вт, дисплейный дактилоскопический датчик и порт USB Type-C. Вместе со смартфоном можно прикупить и аксессуары, которые упаковали в специальный чемодан.</p>\n\n<p>&nbsp;</p>\n\n<p>В продажу Black Shark 2 Pro поступит 2 августа по цене $435 за версию 12/128 Гб и за модификацию 12/256 Гб запросили $508.<br />\n&nbsp;</p>', 1, '2019-08-01 11:44:35', '2019-09-13 08:49:00'),
(12, 'Xiaomi Mi A3 поступил в продажу', 'xiaomi-mi-a3-postupil-v-prodazhu', 'xiaomi-mi-a3-postupil-v-prodazhu.png', '<p>Mi A3&nbsp;&ndash; стильный бюджетник среднего класса, обладающий вполне достойным функционалом.</p>\n\n<p>Он имеет мощный процессор Snapdragon 665, достаточное количество резервного питания (аккумулятор 4030 мАч с поддержкой QC 3.0) и впечатляющие фотографические возможности: 3 основных камеры (48 МП +8 МП + 2 МП) + одна фронтальная на 32 МП.</p>', '<h3><strong>Настоящий камерофон</strong></h3>\n\n<p>Что касается камер, то Mi A3 (CC9e) имеет 48-мегапиксельную камеру Ultra HD Sony с диафрагмой f / 1,79; вторую 8 МП камеру с диафрагмой f / 2.2 и третью 2 МП камеру с диафрагмой f / 2.4. Этот камерофон может снимать фотографии сверхвысокой четкости с разрешением 6560 &times; 4920 пикселей.</p>\n\n<p>Также, он оборудован 32-мегапиксельной фронтальной камерой с апертурой f / 2.0 для съемки сочных селфи. С помощью селфи камеры, вы можете не только создавать мультипликационные селфи (Mimoji), но и воплотить креативные идеи на основе сотен предлагаемых вариантов.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>8-ядерный процессор Snapdragon</strong></h3>\n\n<p>За быстродействие смартфона при выполнении различных задач, отвечает 8-ядерный проц. Snapdragon 665 с пиковой тактовой частотой 2 ГГц. Работает девайс на базе ОС Android Pie.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>Великолепная графика с процессором Adreno 610</strong></h3>\n\n<p>Смартфон имеет графический процессор Adreno 610, который дает великолепную графику. Смартфон уверенно себя чувствует при воспроизведении видеоконтента и в не слишком требовательном гейминге.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>Коммуникационные возможности</strong></h3>\n\n<p>Mi A3 (CC9e) &ndash; смартфон поддерживающий работу с двумя SIM-картами Nano-SIM. Также он оснащен Wi-Fi, GPS, Bluetooth v5.0 и портом зарядки USB Type-C.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>Оптимальный объем памяти и аккумулятор на 4030 мАч</strong></h3>\n\n<p>Смартфон имеет 4/6 ГБ оперативной памяти (в зависимости от модификации) и ПЗУ на 64/128 ГБ, также в зависимости от выбранной версии. При необходимости, память можно расширить до 256 ГБ, что обеспечит вам достаточно места для хранения большой коллекции музыки, видео, рабочих файлов, электронной литературы и т. д.</p>\n\n<p>Источником питания смартфона Mi A3 (CC9e) служит аккумулятор с емкостью 4030 мАч, процесс восполнения заряда которого можно ускорить, благодаря применению технологии QC 3.0.</p>\n\n<p>&nbsp;</p>\n\n<h3><strong>Базовый набор датчиков</strong></h3>\n\n<p>В смартфоне Mi A3 (CC9e) предусмотрен достаточно широкий набор самых необходимых датчиков: датчик отпечатков пальцев, датчик приближения, акселерометр и гироскоп. Кроме того, для дополнительной безопасности в устройстве предусмотрена возможность разблокировки с помощью технологии распознавания лица.</p>', 1, '2019-08-01 11:49:27', '2019-09-13 08:48:53'),
(13, 'Компания Xiaomi представила Mi Gaming Laptop  3-го поколения', 'kompaniya-xiaomi-predstavila-mi-gaming-laptop-3-go-pokoleniya', 'kompaniya-xiaomi-predstavila-mi-gaming-laptop-3-go-pokoleniya.png', '<p>Компания Xiaomi представила обновлённую серию игровых ноутбуков Mi Gaming Laptop. В линейку 2019 года вошли три 15,6-дюймовые модели с разрешением экрана Full HD и частотой обновления 144 Гц. Помимо производительного железа, лэптопы получили клавиатуру с подсветкой, внушительный набор интерфейсов и хорошую автономность.</p>', '<p><a data-lightbox=\"post-359937\" href=\"http://s.4pda.to/cy5seCZv4gepi2CfLf8meS2Nz0mA2.jpg\"><img alt=\"Mi Gaming Laptop\" height=\"359\" src=\"http://s.4pda.to/cy5sgHQMgIyvXbxLFkv8sA3Cd4CCXr.jpg\" title=\"\" width=\"480\" /></a></p>\n\n<p>В базовой конфигурации ноутбук оснащён четырёхъядерным процессором Intel Core i5-9300H с тактовой частотой 2,4 ГГц (до 4,1 ГГц при использовании Turbo Boost), 8 ГБ оперативной памяти DDR4-2666, SSD-накопителем на 512 ГБ и дискретной графикой NVIDIA GeForce GTX 1660 Ti с 6 ГБ видеопамяти GDDR6.</p>\n\n<p>Лэптоп работает под управлением Windows 10 Home, имеет 4 USB-порта 3.0, HDMI-порт 3,5-мм аудиоразъём, стереодинамики, 1-мегапиксельную веб-камеру и слот для карт памяти SD. Аппарат также получил модули Bluetooth 5.0, Wi-Fi 802.11ac и гигабитный LAN-порт. Габариты устройства составляют: 364 х 265,2 х 20,9 мм, вес &mdash; 2,7 килограмма.</p>\n\n<p><a data-lightbox=\"post-359937\" href=\"http://s.4pda.to/cy5sfFbsSMECi2iPDrUNKQDF1Mr2.jpg\"><img alt=\"Mi Gaming Laptop\" height=\"360\" src=\"http://s.4pda.to/cy5sgLI287z0wdgZffHPOz1z1nHIrt6mU.jpg\" title=\"\" width=\"480\" /></a></p>\n\n<p>Продвинутая модификация весит 2,3 килограмма и немного отличается габаритами &mdash; они составляют 378 х 250 х 29,8 мм. Этот вариант построен на базе шестиядерного Intel Core i7-9750H с частотой 2,6 ГГц (в режиме Turbo Boost &mdash; до 4,5 ГГц). За графические возможности устройства отвечает NVIDIA GeForce GTX 1660 Ti с 6 ГБ видеопамяти GDDR6. Модель получила 16 ГБ ОЗУ и SSD-накопитель на 512 ГБ. Операционная система, набор портов и список интерфейсов аналогичны базовой версии.</p>\n\n<p>Старшая конфигурация Mi Gaming Laptop получила Intel Core i7-9750H (2,6 ГГц, Turbo Boost до 4,5 ГГц), видеокарту NVIDIA GeForce RTX 2060 с 6 ГБ памяти GDDR6, 16 ГБ оперативной памяти и твердотельный накопитель ёмкостью 512 ГБ. Все модели, по заверению производителя, способны проработать до 4,5 часов в режиме воспроизведения видео.</p>', 1, '2019-08-05 06:37:25', '2019-09-13 08:48:46');

-- --------------------------------------------------------

--
-- Структура таблицы `t_orders`
--

CREATE TABLE `t_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(10) DEFAULT 1,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `carrier_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_address_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `total` decimal(13,2) DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Тип оплаты',
  `paid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `payment_date` timestamp NULL DEFAULT NULL,
  `payment_result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `where_ordered` int(11) NOT NULL DEFAULT 0 COMMENT 'Где заказал',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_order_product`
--

CREATE TABLE `t_order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_order_statuses`
--

CREATE TABLE `t_order_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification` int(11) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Описание',
  `class` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Класс иконки',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_order_status_history`
--

CREATE TABLE `t_order_status_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_password_resets`
--

CREATE TABLE `t_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_payments`
--

CREATE TABLE `t_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_payments`
--

INSERT INTO `t_payments` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Наличная оплата', 'd9e4778cc8e891052e4c6e703c56c65f.png', NULL, NULL),
(2, 'Безналичная оплата', '866055caab94353c23623b5a92b471fa.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `t_products`
--

CREATE TABLE `t_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `attribute_set_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ссылка товара',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_mini` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `viewed` int(11) DEFAULT 0,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(11) DEFAULT 1,
  `youtube` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_products`
--

INSERT INTO `t_products` (`id`, `group_id`, `attribute_set_id`, `name`, `url`, `description`, `description_mini`, `photo`, `price`, `sku`, `stock`, `viewed`, `seo_keywords`, `seo_description`, `created_at`, `updated_at`, `active`, `youtube`, `view_count`) VALUES
(1, 1, 1, 'Коляска прогулочная Joie Muze Juniper', 'kolyaska-progulochnaya-joie-muze-juniper', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper.png', 42700, '1', 0, 0, NULL, NULL, '2019-09-13 03:13:04', '2019-09-13 11:59:16', 1, NULL, 0),
(2, 1, 1, 'Коляска прогулочная Joie Muze Juniper 2', 'kolyaska-progulochnaya-joie-muze-juniper-2', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper-2.png', 100000, '2', 10, 0, NULL, NULL, '2019-09-13 03:14:16', '2019-09-13 11:59:16', 1, NULL, 0),
(3, 1, 1, 'Коляска прогулочная Joie Muze Juniper 3', 'kolyaska-progulochnaya-joie-muze-juniper-3', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper-3.png', 82700, '3', 10, 0, NULL, NULL, '2019-09-13 03:14:28', '2019-09-13 11:59:16', 1, NULL, 0),
(4, 1, 1, 'Коляска прогулочная Joie Muze Juniper 4', 'kolyaska-progulochnaya-joie-muze-juniper-4', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper-4.png', 242700, '4', 10, 0, NULL, NULL, '2019-09-13 03:14:38', '2019-09-13 11:59:16', 1, NULL, 0),
(5, 1, 1, 'Коляска прогулочная Joie Muze Juniper 5', 'kolyaska-progulochnaya-joie-muze-juniper-5', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper-5.png', 42700, '5', 10, 0, NULL, NULL, '2019-09-13 03:14:58', '2019-09-13 11:59:16', 1, NULL, 0),
(6, 1, 1, 'Коляска прогулочная Joie Muze Juniper 6', 'kolyaska-progulochnaya-joie-muze-juniper-6', '<p>Коляска прогулочная Joie Muze Juniper</p>\n\n<p><strong>Характеристики:</strong></p>\n\n<ul>\n	<li>Прочная рама из современного высококачественного алюминия и практичные колеса обеспечивают коляске&nbsp;надежность и устойчивость</li>\n	<li>Мультипозиционнная, полностью раскладывающаяся до горизонтального положения спинка</li>\n	<li>Спинка регулируется одним движением руки так плавно, что ваш спящий ребёнок не проснётся</li>\n	<li>2 позиции подножки</li>\n	<li>Родительский поднос с 2 подстаканниками для вашего удобства</li>\n	<li>Детский поднос может сниматься или поворачиваться, чтобы вашему ребёнку было удобно</li>\n	<li>Мягкие 5-точечные ремни безопасности имеют 3 положения по высоте</li>\n	<li>Раскладывающийся капюшон с окошком</li>\n	<li>Большая корзина</li>\n	<li>Автоматическая система складывания освободит ваши руки</li>\n	<li>Свободно стоит в сложенном состоянии и помещается в маленький багажник</li>\n	<li>Амортизация передних колёс обеспечивает плавный ход</li>\n	<li>Фиксатор передних колёс удобно расположен</li>\n	<li>Может быть использована с автокреслом Joie&trade; группы 0+(приобретается отдельно).</li>\n	<li>Адаптеры для крепления автокресел не нужны</li>\n</ul>\n\n<p><strong>Для детей:</strong>&nbsp;с рождения до 3 лет&nbsp;( до 15 кг)</p>\n\n<p><strong>Вес:</strong>&nbsp;9.6 кг.</p>', NULL, 'kolyaska-progulochnaya-joie-muze-juniper-6.png', 42700, '6', 10, 0, NULL, NULL, '2019-09-13 03:15:22', '2019-09-13 11:59:16', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `t_product_accessories`
--

CREATE TABLE `t_product_accessories` (
  `id` int(10) UNSIGNED NOT NULL,
  `accessory_product_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_product_features_compare`
--

CREATE TABLE `t_product_features_compare` (
  `id` int(10) UNSIGNED NOT NULL,
  `visit_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_product_features_wishlist`
--

CREATE TABLE `t_product_features_wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_product_groups`
--

CREATE TABLE `t_product_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_product_groups`
--

INSERT INTO `t_product_groups` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-09-13 03:13:04', '2019-09-13 03:13:04');

-- --------------------------------------------------------

--
-- Структура таблицы `t_product_images`
--

CREATE TABLE `t_product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_product_images`
--

INSERT INTO `t_product_images` (`id`, `product_id`, `name`, `order`, `created_at`, `updated_at`) VALUES
(1, 1, 'kolyaska-progulochnaya-joie-muze-juniper-1.jpeg', 0, '2019-09-13 03:13:04', '2019-09-13 03:13:04'),
(2, 1, 'kolyaska-progulochnaya-joie-muze-juniper-2.jpeg', 1, '2019-09-13 03:13:04', '2019-09-13 03:13:04'),
(3, 1, 'kolyaska-progulochnaya-joie-muze-juniper-3.jpeg', 2, '2019-09-13 03:13:04', '2019-09-13 03:13:04'),
(4, 1, 'kolyaska-progulochnaya-joie-muze-juniper-4.jpeg', 3, '2019-09-13 03:13:04', '2019-09-13 03:13:04'),
(5, 2, '680e14a7d2557769ff30b5dd368fec40.jpeg', 0, '2019-09-13 03:14:16', '2019-09-13 03:14:16'),
(6, 2, 'f17fb94c5433b7a7a492f27b963530b0.jpeg', 1, '2019-09-13 03:14:16', '2019-09-13 03:14:16'),
(7, 2, '2b7277ebc39f02b3783d64c311da3d25.jpeg', 2, '2019-09-13 03:14:16', '2019-09-13 03:14:16'),
(8, 2, '6452476e30a93e9ffb0453cf4b602eff.jpeg', 3, '2019-09-13 03:14:16', '2019-09-13 03:14:16'),
(9, 3, 'fd3780dbeb7877f63dc12dc81768b1fd.jpeg', 0, '2019-09-13 03:14:28', '2019-09-13 03:14:28'),
(10, 3, 'c72f9d2c15e8d817011405a1d060ea19.jpeg', 1, '2019-09-13 03:14:28', '2019-09-13 03:14:28'),
(11, 3, '85cc54860dfcd4dbb8d96d8b324b4901.jpeg', 2, '2019-09-13 03:14:28', '2019-09-13 03:14:28'),
(12, 3, 'b76bfaab3573f6c118cd331467d48c8a.jpeg', 3, '2019-09-13 03:14:28', '2019-09-13 03:14:28'),
(13, 4, '85b27c3ecd510b50be47c4c66054b297.jpeg', 0, '2019-09-13 03:14:38', '2019-09-13 03:14:38'),
(14, 4, '213492aab3b996bb4f2a3de9771b5377.jpeg', 1, '2019-09-13 03:14:38', '2019-09-13 03:14:38'),
(15, 4, '0730121c9c880e59ffceca736058975a.jpeg', 2, '2019-09-13 03:14:38', '2019-09-13 03:14:38'),
(16, 4, 'ab8c00b28a7c1963448dbfd184b5b5f0.jpeg', 3, '2019-09-13 03:14:38', '2019-09-13 03:14:38'),
(17, 5, 'e4e3d01f2ddc1ba88e596170aac4b012.jpeg', 0, '2019-09-13 03:14:58', '2019-09-13 03:14:58'),
(18, 5, 'b2102da3877cbbfb6bc20e0389e7b722.jpeg', 1, '2019-09-13 03:14:58', '2019-09-13 03:14:58'),
(19, 5, 'aab377feafdacfbd20436ce8a598a245.jpeg', 2, '2019-09-13 03:14:58', '2019-09-13 03:14:58'),
(20, 5, '77883b0d78061afa535e0feb29f92690.jpeg', 3, '2019-09-13 03:14:58', '2019-09-13 03:14:58'),
(21, 6, 'da0daba05efb1a1b4439a2938646e3b0.jpeg', 0, '2019-09-13 03:15:22', '2019-09-13 03:15:22'),
(22, 6, '35bc7af71a85f321a6a87430c8f584ba.jpeg', 1, '2019-09-13 03:15:22', '2019-09-13 03:15:22'),
(23, 6, 'be9f3179bb5978490bae74e3af4fb785.jpeg', 2, '2019-09-13 03:15:22', '2019-09-13 03:15:22'),
(24, 6, '9b6baa91219c7e29d649250f0fd01105.jpeg', 3, '2019-09-13 03:15:22', '2019-09-13 03:15:22');

-- --------------------------------------------------------

--
-- Структура таблицы `t_questions_answers`
--

CREATE TABLE `t_questions_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_reviews`
--

CREATE TABLE `t_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_reviews`
--

INSERT INTO `t_reviews` (`id`, `name`, `email`, `comment`, `plus`, `minus`, `rating`, `product_id`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Куаныш', 'zheksenkulov.kuanysh@gmail.com', 'До этого за неделю, написала на what’s app но мне никто не ответил, пришлось ехать в магазин', NULL, NULL, 5, 2, '2019-09-04 09:01:33', '2019-09-13 09:02:32', 1),
(2, 'Болат', 'zheksenkulov.kuanysh@gmail.com', 'Лучший интернет магазин. Покупала коляску и очень довольны и курьеру спасибо.Отдельное спасибо консультанту Камилью.', NULL, NULL, 4, 2, '2019-09-02 09:01:33', '2019-09-13 09:02:57', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `t_review_likes`
--

CREATE TABLE `t_review_likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL DEFAULT 0,
  `visit_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_roles`
--

CREATE TABLE `t_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Описание'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_roles`
--

INSERT INTO `t_roles` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'admin', NULL, NULL, 'Администратор'),
(2, 'client', NULL, NULL, 'Клиент');

-- --------------------------------------------------------

--
-- Структура таблицы `t_sliders`
--

CREATE TABLE `t_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `show_where` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_sliders`
--

INSERT INTO `t_sliders` (`id`, `name`, `link`, `image`, `sort`, `show_where`, `created_at`, `updated_at`, `active`) VALUES
(5, 'Xiaomi Mi 9T', '/catalog/xiaomi-mi-9t', 'c85aebf99bd5be8c0081fb59143f94ed.jpeg', 1, 'home_page', '2019-03-05 08:07:13', '2019-09-12 06:17:38', 1),
(7, 'Xiaomi Mi Band 4', '/p/xiaomi-mi-band-4-global-version', '8c7ceabb519243532c22fdaac1be4b3d.jpeg', 2, 'home_page', '2019-03-05 10:07:35', '2019-09-12 06:17:34', 1),
(8, 'Xiaomi Mi A3', '/catalog/xiaomi-mi-a3', '9a4da63dd4e99a2f21b7ace54529897d.jpeg', 3, 'home_page', '2019-08-01 11:07:24', '2019-09-12 06:17:30', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `t_specific_prices`
--

CREATE TABLE `t_specific_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `reduction` int(10) DEFAULT 0,
  `discount_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_specific_prices`
--

INSERT INTO `t_specific_prices` (`id`, `reduction`, `discount_type`, `start_date`, `expiration_date`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 10, 'percent', NULL, NULL, 1, '2019-09-13 03:41:26', '2019-09-13 03:41:26'),
(2, 5000, 'sum', NULL, NULL, 2, '2019-09-13 03:41:35', '2019-09-13 03:41:35');

-- --------------------------------------------------------

--
-- Структура таблицы `t_statuses`
--

CREATE TABLE `t_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `where_use` int(11) NOT NULL,
  `default` int(11) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `t_statuses`
--

INSERT INTO `t_statuses` (`id`, `name`, `class`, `where_use`, `default`, `sort`) VALUES
(1, 'Новый', ' fa fa-plus-square status-new', 1, 1, 1),
(2, 'Заказал', 'fa fa-check-circle status-completed', 1, 0, 2),
(3, 'Не заказал', 'fa fa-ban status-canceled', 1, 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `t_subscribe`
--

CREATE TABLE `t_subscribe` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `t_users`
--

CREATE TABLE `t_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Телефон',
  `active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_users`
--

INSERT INTO `t_users` (`id`, `name`, `surname`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `active`) VALUES
(1, 'Куаныш', NULL, 'zheksenkulov.kuanysh@gmail.com', 1, NULL, '$2y$10$sLQJ6gKE0DInSO25LVzaNelBMkbBwQsJbzYrZc0albmetQXb3tZCm', 'mBBN6CZgDIv0T6UIRIvkiNTc91hxKIiYT07FG0Y1E1nFGYYallPuiQJG9TrV', '2018-10-30 04:52:24', '2019-08-04 14:33:31', '+7(777) 777-7777', 1),
(17, 'AntonImamb', NULL, 'toni.lyadov.95@mail.ru', 2, NULL, '$2y$10$ydifT.7oNaWiw5a65HkjN.ItWRvy1mBHX5ACLQUjCgIP5T6CJrDKG', NULL, '2019-02-12 12:24:54', '2019-02-12 12:24:54', '87422217143', 1),
(18, 'Pavel', NULL, 'pavel@mail.ru', 2, NULL, '$2y$10$7RDuNCQkxHCJBM7vDAhxgOvKrUzhigmNE2PtDNmWiAFHp74Fl57Wy', NULL, '2019-02-15 09:12:53', '2019-02-15 09:12:53', '+7 (701) 511-7918', 1),
(19, 'Adilkhan Myrzakhanov', NULL, 'abusoft92@gmail.com', 2, NULL, '$2y$10$VQbAFowxYlDJWh2YazpDBe1oLRAaxzrvqyoGBzk2BfP42.Y6sUCaW', NULL, '2019-02-15 11:30:55', '2019-02-15 11:30:55', '+7 (747) 269-6628', 1),
(20, 'мурат', NULL, 'b-boy_mura@mail.ru', 2, NULL, '$2y$10$nNSjnZT5vjRrBH5OkUEeWew06whwxpNmWDmfBA066cdT75UPa7Vs2', NULL, '2019-02-15 11:31:45', '2019-02-15 11:31:45', '+7 (707) 187-7772', 1),
(22, 'Ұлпан', NULL, 'altairtasbolatov@gmail.com', 2, NULL, '$2y$10$.H/YFO.Z9PuZYaL4oTr6fe1cFlGGADr3PBvAcDI3I5FoAcPobdiOG', NULL, '2019-02-26 02:19:54', '2019-02-26 02:19:54', '+7(707) 717-3077', 1),
(23, 'Динара', NULL, 'eddee@inbox.ru', 2, NULL, '$2y$10$GRtsnct5jNfQnUEcGBKu7O20K8l1ZNwmQNHpNzBeUbm1nsFQQqoJO', NULL, '2019-02-28 04:13:24', '2019-02-28 04:13:24', '+7(700) 887-7668', 1),
(24, 'NurMutanT', NULL, 'nurtas.sotsialov@gmail.com', 2, NULL, '$2y$10$6XLFMrZnLb3ROP2NGCq9dukZ/VHPjmIZMX62kbQhzEm6.19vPcw3O', NULL, '2019-02-28 15:32:42', '2019-07-02 10:42:22', '+7(705) 771-0600', 1),
(25, 'Egor Ostroverkhov', NULL, 'reketir2009@gmail.com', 2, NULL, '$2y$10$E58TSxPt56MZ4pvrWiyIJeYF/utqQaLyz5WL45YRHq13tY.z/Od0C', NULL, '2019-03-01 10:55:19', '2019-03-01 10:55:19', '+7(777) 686-9306', 1),
(26, 'Максим', NULL, 'PogorelowMax@gmail.com', 2, NULL, '$2y$10$FhVEOALq8DqcXO7Q.7PgT.fDCmrTzeQTiTGmOGKQahTaFkA8unD8C', NULL, '2019-03-01 16:41:39', '2019-03-01 16:45:57', '+7 (707) 317-6347', 1),
(27, 'Рома', NULL, 'roma426282@gmail.com', 2, NULL, '$2y$10$Gja39wstb0o6LvUJurZpoevguVzArVftdC7/IwyNiwxJdY5GGAj86', NULL, '2019-03-04 19:47:28', '2019-03-04 19:47:28', '+7 (702) 411-9339', 1),
(28, 'fidan celenler', NULL, 'celenlerfidan@gmail.com', 2, NULL, '$2y$10$W9k16jkeOhg2wRrj62GsHO8qWEjuByb1T.YyJ2TGBzquJ8GUccrAm', NULL, '2019-03-13 06:36:56', '2019-03-13 06:36:56', '+7(701) 921-0312', 1),
(29, 'Valerakip', NULL, 'rebrovvall@gmail.com', 2, NULL, '$2y$10$qT13g/Dq80BJpPi3pLdO/upbW3S36RInBJZxg/FUgO36puMIwVRkq', NULL, '2019-03-16 07:26:13', '2019-03-16 07:26:13', '86517468774', 1),
(30, 'Назим', NULL, 'n2888898@gmail.com', 2, NULL, '$2y$10$LidzfWuoWKvV2Ho4jX7B4eDjvZIkqBr.1PSMgtURioFZ49qCagPqy', NULL, '2019-03-18 11:35:52', '2019-03-18 11:35:52', '+7(702) 288-8898', 1),
(31, 'Артем', NULL, '123@mail.ru', 2, NULL, '$2y$10$c9osVNX5mL3gvTCS84KHNOVAkKVgE8D8rQ0V/LnsA0p1XyUukoNjq', NULL, '2019-03-28 09:36:52', '2019-03-28 09:36:52', '+7 (771) 864-0424', 1),
(32, 'Бекмурат', NULL, '19_beka_95@mail.ru', 2, NULL, '$2y$10$/l8S6uAFkMFTzWvbX2BuJeqV571F8trwjqazrcb2BeiJgDN3MxX0m', NULL, '2019-03-31 21:08:28', '2019-03-31 21:08:28', '+7(705) 445-0505', 1),
(33, 'Серега', NULL, 'p.s.motya@mail.ru', 2, NULL, '$2y$10$2./PfXu51sXmeVo4Wec2/etVLGHDENOZeTAKoOhXiI3avCXLoxYSq', NULL, '2019-04-02 09:26:09', '2019-04-02 09:26:09', '+7 (747) 704-1310', 1),
(34, 'test', NULL, 'test@gmail.com', 2, NULL, '$2y$10$EvEGr/pp3wcgBQPRLgA95.XzTHRwDZbw1Umalg9Rh1aDvhyEVZ.Au', 'DwmMf7TDvPVyGnZsjmD9TlrrR7rRErJbKV7Fxlnrg6NlzwZwOnmmIx0BLGGC', '2019-04-03 05:37:10', '2019-08-10 05:51:11', '+7 (777) 777-7777', 1),
(35, 'Арнур', NULL, 'arnurkuatov@gmail.com', 2, NULL, '$2y$10$Ev7VBcdNd7sKnWJy.qvBSuDivQevBn0N2MImWGS6Kk.puvWH35Cei', NULL, '2019-04-03 16:56:06', '2019-04-03 16:56:06', '+7(705) 123-5598', 1),
(36, 'АЛЕКСЕЙ', NULL, '1_84@list.ru', 2, NULL, '$2y$10$pKFApW9U7ZnibNog4mjKGOjTkfFEMxKsC/wDYGjUWre2mZ.ILITPa', NULL, '2019-04-05 08:43:39', '2019-04-05 08:43:39', '+7 (701) 098-2727', 1),
(37, 'talgat', NULL, 'usenovtalgat505@gmail.com', 2, NULL, '$2y$10$wci/VBU5In0tjXz8oIDiHuzSnBNfUOb9SEqZqAg4uGuHGp54AsNOC', NULL, '2019-04-05 12:05:04', '2019-04-05 12:05:04', '+7(708) 710-7798', 1),
(38, 'Назар', NULL, 'nazzartareev@mail.ru', 2, NULL, '$2y$10$YiUx8TV4TAOptRSuWkaCOenBu5AIMmNTNyz4/IUaCN3eTPdJpIcOu', NULL, '2019-04-11 08:22:57', '2019-04-11 08:22:57', '+7 (707) 105-4491', 1),
(39, 'Петр', NULL, 'sherbakow_petr@mail.ru', 2, NULL, '$2y$10$NxHU81kLuj5ikiMz/nScm.w4koWJo2tJ9AgPXWZkaNsV5cp4jBnwe', NULL, '2019-04-11 15:15:41', '2019-04-11 15:15:41', '+7(700) 354-8040', 1),
(40, 'Yessen Shokparov', NULL, 'essensy@yandex.com', 2, NULL, '$2y$10$oAfB9sNxDAG3o2dILL48Zu/hGiVdrH3B2/gD2fTV8UOcEefoXA/v6', NULL, '2019-04-13 09:51:18', '2019-04-13 09:51:18', '+7(705) 620-7857', 1),
(41, 'Дмитрий', NULL, 'avdmail@yandex.ru', 2, NULL, '$2y$10$jCXe37SD3X63O.BapBzlmec6SlTKZzQZy5YJvI2Ej3dlxyncF0zE.', NULL, '2019-04-14 14:27:24', '2019-04-14 14:27:24', '+7(778) 883-2277', 1),
(42, 'Руслан', NULL, 'ruslanmashanov@gmail.com', 2, NULL, '$2y$10$BdgQYR7pq6nI6Wo9qcyaC.UA.CADd6G9sUmn27EATY36EMROIJnoG', NULL, '2019-04-14 19:04:58', '2019-04-14 19:04:58', '+7(705) 510-4450', 1),
(43, 'Алмат', NULL, 'almatus_83@mail.ru', 2, NULL, '$2y$10$1fbLmUVj8cSs2aiwTOZpKu3E20LikFTQamNAuV5Gj9bSNm/B23AZi', NULL, '2019-04-15 06:07:48', '2019-04-15 06:07:48', '+7(747) 558-1545', 1),
(44, 'Александр', NULL, 'alexandr.sumin@gmail.com', 2, NULL, '$2y$10$kWLy/wv/GiENyKsgQKkGxuPLqKAT5MTNj4JwAv2j/BcCMvdzlmb2G', NULL, '2019-04-15 07:18:03', '2019-04-15 07:18:03', '+7 (701) 766-7483', 1),
(45, 'Дамеш', NULL, 'irmuxametov@gmail.com', 2, NULL, '$2y$10$8zl78SmYv42XdCNfO1zNz.YNfk7J0Ixi7AwtYCGOV81bdi0s1fJnC', NULL, '2019-04-16 14:42:22', '2019-04-16 14:42:22', '+7 (777) 114-7656', 1),
(46, 'Сергей', NULL, 'mitinsa88@mail.ru', 2, NULL, '$2y$10$3Vf6DSyaZomaImPos6j8VOSul78pfgBwJH/FhaOFIjga37CvlMZ8a', NULL, '2019-04-17 05:11:46', '2019-04-17 05:11:46', '+7 (701) 527-4893', 1),
(47, 'WalterSed', NULL, 'retvertupret@gmail.com', 2, NULL, '$2y$10$A1xUVP3sgK7wTLPezRRl9.ObaLoSlbXPF3BcSTuWwsjAFKbLSJiZS', NULL, '2019-04-22 01:43:03', '2019-04-22 01:43:03', '84867385283', 1),
(48, 'Руслан', NULL, 'x2rik@mail.ru', 2, NULL, '$2y$10$2TyjnAp0/hranLTCN3.7XeELNxvP.DsFLNsp2DbHSJINSlKLDrYtC', NULL, '2019-04-22 18:04:36', '2019-04-22 18:04:36', '+7(747) 666-1566', 1),
(49, 'Влад', NULL, 'vlad.almaty@gmail.com', 2, NULL, '$2y$10$Gg67ctkWZ8NytKcuQ6RvOe.LUHIG0q9u3IJF9lqyiG3LjnQLQqyzm', NULL, '2019-04-23 05:40:32', '2019-04-23 05:40:32', '+7(701) 761-0340', 1),
(50, 'Olya Turuhina', NULL, 'olgaturuhina1990@gmail.com', 2, NULL, '$2y$10$fC7VqkpL.FxD3AfkZU14FepDoOCu7OewNSps0P/XegSN.rM/mPfOK', NULL, '2019-04-26 08:00:04', '2019-04-26 08:00:04', '+7(707) 449-4565', 1),
(51, 'Андрей', NULL, 'ondrepenner@gmail.com', 2, NULL, '$2y$10$7HpubXGBGGZ3onD8hKOkp.TjAwSRXr7IQ7Gs6tbbAUvDAcGLNeFZS', 'q5QTm0W5MhZxsGedAqJ5FnLWhLeSNlSk6oiYXphhVgtSU0wgadb0vvYo3smr', '2019-04-26 16:17:32', '2019-04-26 16:17:32', '+7 (707) 188-3820', 1),
(52, 'Ердос', NULL, 'erdos-98@mail.ru', 2, NULL, '$2y$10$DsfoXhbHx4WUbWdOhmggKu1.51D0jBh8tA0kT7CmeqtBzCIuEunA6', NULL, '2019-04-27 10:28:50', '2019-04-27 10:28:50', '+7(777) 889-4961', 1),
(53, 'Xenmut', NULL, '4e7dfdg@yandex.com', 2, NULL, '$2y$10$0435S8Prowg3dvx67RS.8eVIY0o/0fKWsPqaMYOG7.ok/q8tIQKMG', NULL, '2019-05-01 01:10:22', '2019-05-01 01:10:22', '86782323854', 1),
(54, 'Асель', NULL, 'bapiyeva.assel@mail.ru', 2, NULL, '$2y$10$0c3xGwhrOzXl/S6GNVcY9ejh76gtW.bKQAM7HIT27/FB7nWNvyG92', NULL, '2019-05-01 06:48:40', '2019-05-01 06:48:40', '+7 (708) 522-7463', 1),
(55, 'Александр', NULL, '7617213@mail.ru', 2, NULL, '$2y$10$tTlxubsHTcZnS1wDkT7x1eff56e4IQ8m5Va1I7vvWADa0spYeZ/Pe', '94ATfPDhtMicZ0MQLjc2R3XwNg6kQtxLmfRMQBVfsU14Vy2pxkkyScVqvL1H', '2019-05-02 04:56:03', '2019-05-02 07:22:49', '+7 (705) 761-7213', 1),
(56, 'Михаил', NULL, 'r_13_scm@mail.ru', 2, NULL, '$2y$10$tl6QpFwMcgT.T5wQbl/jXOaiP7CjTns9/iHMJ5caWPKCrxQ02TVQC', NULL, '2019-05-02 06:23:37', '2019-05-02 06:23:37', '+7(701) 571-1707', 1),
(57, 'Ggg', NULL, 'test@mail.ru', 2, NULL, '$2y$10$sRJYts6XGC76eJkJmPBx7eDLMgq8Tk12jwvaAX7q06P4Ft1fYn/wK', NULL, '2019-05-02 16:48:52', '2019-05-02 16:48:52', '+7(777) 777-7777', 1),
(58, 'Руслан Саханов', NULL, 'detraidhr@gmail.com', 2, NULL, '$2y$10$keuuorCLvdPlUVAxFdqbcOk0oaR3aMabYKswaL9ib7.22wQ6WOk/u', NULL, '2019-05-04 06:23:27', '2019-05-04 06:23:27', '+7(708) 878-0642', 1),
(59, 'Kairat', NULL, 'murzagaliyev.kairat@mail.ru', 2, NULL, '$2y$10$XOS64g8eEU8ZJRGS2v.2S.8DDD27hlXZs22FXfc.5LZNNU4BRCFKG', NULL, '2019-05-04 07:17:41', '2019-05-04 07:17:41', '+7(775) 413-3000', 1),
(60, 'Дмитрий', NULL, 'senatorov-d@mail.ru', 2, NULL, '$2y$10$M6SCWpLFDVtBFzJMlAoLH.Fz2QUp3afcaKCgt36smfcTio8XrJh4K', NULL, '2019-05-05 08:24:20', '2019-05-05 08:24:20', '+7(777) 446-6242', 1),
(61, 'Альберт', NULL, 'uar1107@mail.ru', 2, NULL, '$2y$10$1It6ygAWF.dczbh5o.TH7e/PE94cNNpQ5IxKzZXYLA/zHB3YlWkoW', NULL, '2019-05-05 11:40:33', '2019-05-05 11:40:33', '+7(700) 324-9196', 1),
(62, 'Андрей', NULL, 'werwolf55uaaa@gmail.com', 2, NULL, '$2y$10$9x6mSEoYsvWWbD/7QGO0EOjxLrEnjSt39TBS9GWzgm.q9ik4Wjc3a', NULL, '2019-05-08 04:44:07', '2019-05-08 04:44:07', '+7(705) 191-2291', 1),
(63, 'Loli Istaeva', NULL, 'istaeva.loli@mail.ru', 2, NULL, '$2y$10$ImkO.hf5DgUFf87AgeQwTuWXA8b1vpe2JlBB7lC96sEE3GdI0wLcu', NULL, '2019-05-09 17:20:38', '2019-05-09 17:20:38', '+7(777) 183-1704', 1),
(64, 'Александр', NULL, '7150652@mail.ru', 2, NULL, '$2y$10$m7kWzsGHiObTr0jp1AbUZOIPa5fpMgK3Jez5zKbM3XbVGHoizpfGG', NULL, '2019-05-12 11:51:24', '2019-05-12 11:51:24', '+7(701) 715-0652', 1),
(65, 'Роман', NULL, 'danromnik@mail.ru', 2, NULL, '$2y$10$iObM3Qx8cawWeJnNtstbquEzGYBT.sq0VAQp50XBR2mzbqM4h2DIC', NULL, '2019-05-15 08:40:08', '2019-05-15 08:40:08', '+7 (777) 355-7302', 1),
(66, 'Денис', NULL, 'denisavst@gmail.com', 2, NULL, '$2y$10$fhMvVwREgOLAYDLZKBStKeh2DUVevuytWy6F2MHR7JQf67iTats3O', NULL, '2019-05-15 10:48:28', '2019-05-15 10:48:28', '+7(701) 799-4747_', 1),
(67, 'Даурен', NULL, 'beybars99@mail.ru', 2, NULL, '$2y$10$TIwrFCbcdGNFWb9RRHdRMuMnEdQ3aan2FAQeiCvB7iILIdgD.trsW', 'ENQoCQ4xCy6uIxNMIetwByyFVOppHfPQsjpLyvduROw4zTA8tsoY7hW9NdqU', '2019-05-15 15:06:42', '2019-05-15 15:06:42', '+7(747) 327-9465', 1),
(70, 'tesr', NULL, 'test@gmail.ru', 2, NULL, '$2y$10$FNW3Tu/KD1EGiu8eG.6TB.gS3a0gnYXKsqfSVGFsBUcpYQVhDBqC6', 'vjW0PYPEEA5XxHsBboZP7DNI3tx1ZFGjiuVomQoBRfdMGgKm408c2b8uT8Bj', '2019-05-17 05:29:55', '2019-05-17 05:29:55', '+7 (777) 777-7777', 1),
(71, 'Test', NULL, 'Test@mail.com', 2, NULL, '$2y$10$rrkPza1pHG3.AQyrUdXfgeBxXwHY/JGIW2vgrjctcdAp3JoJEQCpK', NULL, '2019-05-19 12:17:28', '2019-05-19 12:17:28', '+7(777) 777-7777', 1),
(72, 'Луиза', NULL, 'luiza2979881@mail.ru', 2, NULL, '$2y$10$oeTOu3wj2la4yq3d1TzCae8847KBtynTvgj7yVZh/4/d3.ZEa.28K', NULL, '2019-05-21 13:45:29', '2019-05-21 13:45:29', '+7(708) 246-9766', 1),
(73, 'Вадим', NULL, 'vadimknyazev@mail.ru', 2, NULL, '$2y$10$6WfJgt.UDhA1sH6.WQzb5eHpcxCXolixu1mo9QBwu1jH9a6HWCKq6', NULL, '2019-05-22 12:08:10', '2019-05-22 12:08:10', '+7 (701) 743-8313', 1),
(74, 'Наталья', NULL, 'alex0513@mail.ru', 2, NULL, '$2y$10$cc5lD/XOxYst6GaPhQ0BCOTI8LlDQ7VPMx0VjEa34JAo2xUS/S5tS', NULL, '2019-05-23 12:25:14', '2019-05-23 12:25:14', '+7(705) 339-8683', 1),
(75, 'Наталья', NULL, 'natali_0530@mail.ru', 2, NULL, '$2y$10$KyPIT2h2noYJHD0xMpCcAeMxEyGc86IHvWEoSshw6V.Utlw3t8PSG', NULL, '2019-05-23 12:56:36', '2019-05-23 12:56:36', '+7(705) 339-8603', 1),
(76, 'Жусипбек', NULL, 'zhidebay@mail.ru', 2, NULL, '$2y$10$gMSbIoNwhVSYb1iy4VjQe.BFwU9jvd1oplIgCGfIRyQdR2mzcpc.a', NULL, '2019-05-23 15:05:18', '2019-05-23 15:07:47', '+7 (771) 401-2633', 1),
(77, 'Saken', NULL, 'k_s_r87@mail.ru', 2, NULL, '$2y$10$IH8O5nOPQOZzLAc4a3e2Y.gwQQYrpQj66nL/RyuDKHJYW2oqNwW1e', NULL, '2019-05-31 03:28:15', '2019-05-31 03:28:15', '+7(701) 151-1222', 1),
(78, 'Nurken', NULL, 'nurikaz@gmail.com', 2, NULL, '$2y$10$GFHd8ZzzoKHqKYGDsMK4oe4qwPhfJPDFJ3Nhgymz7kPL.FWrwHyGC', NULL, '2019-06-01 15:02:15', '2019-07-28 18:16:56', '+7(777) 389-9911', 1),
(79, 'Арман', NULL, 'arman@gmail.com', 2, NULL, '$2y$10$PTWEbCtdJzGJtlct6PUdCuEK0hwzUpqywjtonjoX5o83WdxHKoyo2', NULL, '2019-06-02 07:24:05', '2019-06-02 07:24:05', '+7(707) 526-6651', 1),
(80, 'Омар', NULL, 'omka717@mail.ru', 2, NULL, '$2y$10$cDBhs8LRDnB5wZ6bKekYXuyC4jrxFmWLZ3eM5a5pUERZEnXB2OsYW', NULL, '2019-06-02 11:07:26', '2019-06-02 11:07:26', '+7(775) 335-7751', 1),
(81, 'Игорь', NULL, 'medvedsky.kz@gmail.com', 2, NULL, '$2y$10$3T5aYIeReNgbSNrSceq60uCol.p0GDRueBZ3OfuNqy0ztCfSHhJTe', NULL, '2019-06-03 03:30:44', '2019-06-03 03:30:44', '+7(702) 110-0032', 1),
(82, 'Талгат Талтанов', NULL, 'propeople@yandex.ru', 2, NULL, '$2y$10$tIYtvyZTha1xJNnC.hja8OzFasKCQzQH9YCZ9RXHLairW2J6pDfWq', NULL, '2019-06-03 22:13:32', '2019-06-03 22:13:32', '+7 (775) 888-6450', 1),
(83, 'Алибек', NULL, 'alibekalpysov0308@gmail.com', 2, NULL, '$2y$10$IALUYEnogk.mWTrm.VhuxucXjf66PCVPvHTSKMwn8tkFa2SK1Clo2', NULL, '2019-06-04 10:38:44', '2019-06-04 10:38:44', '+7(708) 495-2520', 1),
(84, 'Игорь', NULL, 'igor.shuvaev@mail.ru', 2, NULL, '$2y$10$d4idg2vxwVqjaYRPcHc7QOLkZGOZzkLhv5LyhYXkM8Ts6ZY.yph76', NULL, '2019-06-04 13:12:10', '2019-06-04 13:12:10', '+7(707) 650-2039', 1),
(85, 'Rrtrtt', NULL, 'rttt@mail.ru', 2, NULL, '$2y$10$fHakf1.JkxL9bhb71I5Ar.ky5PdJCJux4IIfKAfTnr6.cGvbazmCm', NULL, '2019-06-06 16:41:20', '2019-06-06 16:41:20', '+7(777) 727-8963', 1),
(86, 'Кемел', NULL, 'kemafornia@gmail.com', 2, NULL, '$2y$10$L4AU5dEu1ndWvUddmvs9p.XYhkU6tRN7OSjpgMZYfda94Ns/DGAFq', NULL, '2019-06-08 18:39:58', '2019-06-08 18:39:58', '+7(705) 814-5571', 1),
(87, 'Иван', NULL, 'maltcev.ivan@gmail.com', 2, NULL, '$2y$10$pI8x8nBMLdOyTkhUodrHsORNZM5h9eAM3WkhazngB8eOZ8k8reF7G', NULL, '2019-06-11 07:17:42', '2019-06-11 07:17:42', '+7 (777) 193-3855', 1),
(88, 'Пётр', NULL, 'ipn123456789@gmail.com', 2, NULL, '$2y$10$wq7l15Fej4Y31j1nM8BgFeGa0b59AjodJQWExUkf/zH1vT238jpBC', NULL, '2019-06-12 18:20:49', '2019-06-12 18:20:49', '+7(707) 290-2000', 1),
(89, 'Александр', NULL, 'maulsasha@bk.ru', 2, NULL, '$2y$10$nhNlhb6RF/RX0obA5miMbe55ifMN73wSGpf5VNTVumbOkuSJHDwga', NULL, '2019-06-13 05:06:07', '2019-06-13 05:06:07', '+7 (707) 211-0985', 1),
(90, 'Ержан', NULL, 'ysuleimanov@gmail.com', 2, NULL, '$2y$10$2ba6ssA.KfL8Vh5EgWrX0uhTmpRQ8J.xGOWnKKSB4s/bqWDH3CXBG', NULL, '2019-06-14 10:11:13', '2019-06-14 10:11:13', '+7 (701) 744-7712', 1),
(91, 'Ahmet', NULL, 'kamashev.chelsea@gmail.com', 2, NULL, '$2y$10$wz/Wu0K/3Of3v.2L97gNOOTIp5ZeLudoF/zF9NX1riKhu1FDjKrZ2', NULL, '2019-06-15 15:36:18', '2019-06-15 15:36:18', '+7(707) 616-0424', 1),
(92, 'Vladimir  Medvedev', NULL, 'medvedevvladimir@mail.ru', 2, NULL, '$2y$10$iNW4HJfskPPiWL8JkWLu.OFRhh6yxHhi5pQie7AKdFtAImMOGI5XS', NULL, '2019-06-15 20:36:34', '2019-06-15 20:36:34', '+7(___) ___-____', 1),
(93, 'Askar', NULL, 'siptsilpe@mail.ru', 2, NULL, '$2y$10$RMpzSIGtmWdZb9SpxYULOetlJK97RK0RLgVKtJs6XGEg7r6WAqcQO', NULL, '2019-06-17 14:21:00', '2019-06-17 14:21:00', '+7(701) 223-2158', 1),
(94, 'Сергей', NULL, '1161053@mail.ru', 2, NULL, '$2y$10$KwOXwC67CuInvO590sx1geFzseS5Y2RvoTKmjjkV9ntU2U6gfVko2', NULL, '2019-06-18 04:32:25', '2019-06-18 04:32:25', '+7(701) 491-0307', 1),
(95, 'Azamat', NULL, 'aza.99.tam@gmail.com', 2, NULL, '$2y$10$DjI3NQVpD4EFyboL7KsqGOQI7hjfEX.gfHJRgxJcbFkxQ/EZwTgdK', NULL, '2019-06-18 08:24:40', '2019-06-18 08:24:40', '+7(707) 794-8114', 1),
(96, 'Сергей', NULL, 'pilot0667@mail.ru', 2, NULL, '$2y$10$x0AoXJokD5pUPR1aKhLKCubAj5uKOK1JGTujqU4i2LYULwpg8bLNm', NULL, '2019-06-19 06:48:34', '2019-06-19 06:48:34', '+7(701) 740-9461', 1),
(97, 'Али', NULL, 'kumyzpower@gmail.com', 2, NULL, '$2y$10$xYu5bmRuS2343fnKqHPUR.5zR9OEioKHdHS9yCB4xxq8C2R7B9wg6', NULL, '2019-06-21 05:17:22', '2019-06-21 05:17:22', '+7(701) 777-4660', 1),
(98, 'Балдырган', 'Байтенова', 'botatuma@mail.ru', 2, NULL, '$2y$10$DuvFlqdaL2eFVnMGAjYP1.8pyqHf4hSxh9FhL576ievmiyxYf5/Ei', 'cXqsqd3zckecJgXthvUPRrS7WmOaJliY1czCrabrQpcIDUVrGIEkDPMhlYYP', '2019-06-21 17:05:22', '2019-06-22 14:26:46', '+7(702) 769-2782', 1),
(99, 'Всеволод', NULL, 'mee3ch@mail.ru', 2, NULL, '$2y$10$1of4dorzumHLsPGhQ8sOSuczhkW3JhnidUB20OPBn3ZnCOkzxHJcC', NULL, '2019-06-23 17:18:38', '2019-06-23 17:18:38', '+7 (701) 099-7744', 1),
(100, 'Владимир', NULL, 'vavanll03@mail.ru', 2, NULL, '$2y$10$Ky2VDpZTyKWNgTfk35wzcOxSoXKBIbHesBNmvuRmCHaefBCVkXQta', NULL, '2019-06-24 01:19:30', '2019-06-24 01:19:30', '+7(708) 860-7303', 1),
(101, 'Дмитрий', NULL, 'makarovdmitriy03@gmail.com', 2, NULL, '$2y$10$.AAhH0xHpnN1xi7NoDB0ZeM9.uBCXZ06gqwFvRY2.URddM2j7Rlle', NULL, '2019-06-24 19:29:41', '2019-06-24 19:29:41', '+7(747) 101-9953', 1),
(102, 'Абуталип', NULL, 'a.omirbek@documentolog.com', 2, NULL, '$2y$10$QCeW7bc0PJlTXTENWMJV8u38AioLvdrF5W2et5Vi4eTkRtJ.CGrk.', NULL, '2019-06-25 03:17:36', '2019-06-25 03:17:36', '+7 (701) 478-6497', 1),
(103, 'Askar', NULL, 'askar91_13@mail.ru', 2, NULL, '$2y$10$CUHFSij2d4fxPT50zeiABeSTYTlmOo.eE7fWgncebagKdGk.ifv5K', NULL, '2019-06-25 12:21:40', '2019-06-25 12:49:09', '+7 (702) 761-8646', 1),
(104, 'Дина', NULL, 'dina.abilhanova@mail.ru', 2, NULL, '$2y$10$ScpWLL2SX1Bh9uds360zQ.6tI8WcbaV5GxtDZ7mZTyyq2aDGuDlfe', NULL, '2019-06-26 08:51:26', '2019-06-26 08:51:26', '+7 (707) 105-0414', 1),
(105, 'Бекзат', NULL, 'bmyrzan@inbox.ru', 2, NULL, '$2y$10$3oZg6wh13BOtCoePg0e/AOxpsUUXjXo8tnImDzuFD4rYIiPKwRYcO', NULL, '2019-06-27 03:57:43', '2019-06-27 03:57:43', '+7(747) 635-7934', 1),
(106, 'Надежда', NULL, 'Milovna@mail.ru', 2, NULL, '$2y$10$wVMurRZnSsc.smdmIUYBmugCuPIdTs48HkDzMgczqverJmGoCUOB2', NULL, '2019-06-28 06:31:38', '2019-06-28 06:31:38', '+7(705) 145-4878', 1),
(107, 'Юрий', NULL, 'G_proff@mail.ru', 2, NULL, '$2y$10$ztlr4TCnVLoS0zaTDUWBi.mEnHxf4bbyDfUO3VSWVxvxHO5Yul0Re', NULL, '2019-06-29 07:04:34', '2019-06-29 07:04:34', '+7(776) 978-7707', 1),
(108, 'Ержан', NULL, 'erzhan010@gmail.com', 2, NULL, '$2y$10$7fzO7QQF57JBa2m3WL.EUO.2dJanCA2BmFMMOStcGNo5vNSRnspOy', NULL, '2019-06-30 08:52:40', '2019-06-30 08:52:40', '+7(747) 713-0010', 1),
(109, 'Антон', NULL, 'A.stepanenko1992@mail.ru', 2, NULL, '$2y$10$ihVZ1cwsbDfuAaspvd4yGeskPyL6mOx5T1HB74MtDLgqCCdkgt/Fm', NULL, '2019-07-02 03:04:18', '2019-07-02 03:04:18', '+7(702) 029-9186', 1),
(110, 'Константин Семков', NULL, 'k.semkov@gmail.com', 2, NULL, '$2y$10$.piTZBjxNHFznrs2yEnlYef7AOavz/hyifHZ7KoKpRjMGCSovMT8i', NULL, '2019-07-02 09:20:37', '2019-07-02 09:20:37', '+7(705) 364-5261', 1),
(111, 'Kuanysh', NULL, 'kunik007@mail.ru', 2, NULL, '$2y$10$N64Gkr4jOr6naX4nCo4nees1jIp2pWpjz2KCC/r5Kb2DquJXQCKSy', NULL, '2019-07-04 00:10:00', '2019-07-04 00:10:00', '+7(702) 758-3568', 1),
(112, 'Альбина', NULL, 'alba_96.uk@mail.ru', 2, NULL, '$2y$10$tUyqOTrqhd41azYD8v1ybeqLFdswbRYuKni4fM9ukpdiviR9w2Fmm', NULL, '2019-07-04 16:05:31', '2019-07-04 16:05:31', '+7(777) 753-0006', 1),
(113, 'Aibek', NULL, 'kupjasarov.aibek@gmail.com', 2, NULL, '$2y$10$FMWTqKnPhD/eqKp8Mgz8E.cFURjPaKqU7DIWVp7COnhgRoeF6G2ni', NULL, '2019-07-08 17:43:47', '2019-07-08 17:43:47', '+7(747) 133-5030', 1),
(114, 'Галим', NULL, 'Moov3@mail.ru', 2, NULL, '$2y$10$DWGZuwlltfllmTyj./7Lf.hyQq3xvf2L/Drfs.IKlRnhQRcLkr/wW', 'xhuFBDXik2oSukxJwiyCfEjPA1rWjCEGZNlyJQxLLMEgvNM5x5eZVxfEHNhu', '2019-07-09 01:05:11', '2019-08-12 06:44:28', '+7(701) 999-2679', 1),
(115, 'Артем', NULL, 'a.pozdnyakov@clsllp.kz', 2, NULL, '$2y$10$Gi6NiQ0LYPRmQTbO/YndEOJrFZ7Gnk4OTmRMNDICDno19trFpTLXu', NULL, '2019-07-09 06:20:31', '2019-07-09 06:20:31', '+7(777) 311-1034', 1),
(116, 'Кристина', NULL, 'nikolaevakkristina@gmail.com', 2, NULL, '$2y$10$mjM4IIlmPJGk3hziKp7kReG8i.xIBPVKiI8vynowJz3yDDt5VIDgq', NULL, '2019-07-10 12:30:04', '2019-07-10 12:30:04', '+7(___) ___-____', 1),
(117, 'Samat', NULL, 'satcity5@gmail.com', 2, NULL, '$2y$10$.BiPuE.VdJuOrIBEMKOhqukHLleXT9DL0Fpg1Uudf2jZmiZeQplwu', NULL, '2019-07-13 03:41:02', '2019-07-13 03:41:02', '+7(701) 496-6788', 1),
(118, 'Ainara', NULL, 'kani.23@bk.ru', 2, NULL, '$2y$10$LZ7XIKm2K1mRoPC5.6tuXOC3gAvs5ml6K4xnj5Y0Z4S02YgMIaxpK', NULL, '2019-07-13 06:08:54', '2019-07-13 06:08:54', '+77477902897', 1),
(119, 'Mikhail', NULL, 'zinin.m@gmail.com', 2, NULL, '$2y$10$cpuWw6N220Z0mhoEPnO1Vu7HihceZA/acLWTtISRnz2EL51y6T25W', NULL, '2019-07-17 09:15:29', '2019-07-17 09:15:29', '+7 (707) 230-4868', 1),
(120, 'Olga', NULL, 'dkattarinu@mail.ru', 2, NULL, '$2y$10$dC/Za4wVFHT8VdI7Q/H7g.wHHSHAg1pZPzyJRDp/SJlSr2TIMlmf2', NULL, '2019-07-17 11:59:52', '2019-07-17 11:59:52', '+7(777) 230-0651', 1),
(121, 'Алимхан', NULL, 'a.alimkhan2007@gmail.com', 2, NULL, '$2y$10$OFr3tbleZYXKQ7N/cS5ev.4tb3CWtvC9uK6ua9z1PqUQKPrjShQMC', NULL, '2019-07-19 14:57:18', '2019-07-19 14:57:18', '+7(778) 793-9052', 1),
(122, 'Игорь', NULL, 'frost70@bk.ru', 2, NULL, '$2y$10$78n0vZvFa3XTjuVKY5tgK.K43kZVd35pRzSNezHplQN1vHjHYZ1/6', NULL, '2019-07-23 11:56:32', '2019-07-23 12:04:55', '+7 (777) 224-9761', 1),
(123, 'Алия', NULL, 'isagalievnaaliya@icloud.com', 2, NULL, '$2y$10$CmUKNPYAJOyVhH2BBlaKt.a6xak7StOS/ShA/TKNhZQLbeKXiXYam', NULL, '2019-07-23 19:17:51', '2019-07-23 19:17:51', '+7(705) 915-9167', 1),
(124, 'Василий', NULL, 'tschernichw@mail.ru', 2, NULL, '$2y$10$Uuepaz30FMGnFKmhYyjAYubCUC8oiN545RIYLuaVc/HRDMULwLjJu', NULL, '2019-07-27 07:42:25', '2019-07-27 07:42:25', '+7(705) 313-5628', 1),
(125, 'Инна', NULL, 'inna-ws@mail.ru', 2, NULL, '$2y$10$Qr8nvKGZe4tAgmqZ8MeBWef3Jq6RWKgMuNXIVadpKRXt68dRxynHO', NULL, '2019-07-27 10:09:55', '2019-07-27 10:15:11', '+7(707) 866-6611', 1),
(126, 'Никита Маерс', NULL, 'n_maers@mail.ru', 2, NULL, '$2y$10$bz2XIsTWDSg3v6SfFt1.mu9VgzdfqDQuTWOfO8kj8UikaCmlc7i42', NULL, '2019-07-29 17:38:33', '2019-07-29 17:38:33', '+7(968) 127-5232', 1),
(127, 'Kairat', NULL, 'baimuratov.k@gmail.com', 2, NULL, '$2y$10$go1/.p2QUb1ts1fs7wMur.0jAf4k6fwXCMI.nZncSY33pAPYuW0qK', NULL, '2019-07-31 07:35:55', '2019-07-31 07:35:55', '+7(707) 447-8015', 1),
(128, 'Мандшир', NULL, 'thejoy.1804@gmail.com', 2, NULL, '$2y$10$xloHFl6XXymxt/X50.47N.pSC1Ot8hASO54ky7BnRAD/7JyB3omru', NULL, '2019-08-01 06:14:35', '2019-08-01 06:14:35', '+7(700) 253-9337', 1),
(129, 'Кирилл', 'Торопцев', 'neonjazz@yandex.com', 2, NULL, '$2y$10$qESwSUbxs9rAGK9KCbZoGeh2PCsT0s4hRR5tltA23FUqgnK0MI76O', NULL, '2019-08-02 12:18:35', '2019-08-02 12:21:31', '+7(705) 204-4499', 1),
(130, 'Арман', NULL, 'amm_94@mail.ru', 2, NULL, '$2y$10$SGcypesGXyM99fQb8kRJfOJJKJScLfDxAwz0WRqy1.NanGTqhoR7e', NULL, '2019-08-03 12:22:55', '2019-08-03 12:22:55', '+7(705) 177-8404', 1),
(131, 'Иван', NULL, 'limito123@mail.ru', 2, NULL, '$2y$10$fyyHh47ZJSWeLrm.idYj0uj7uYaQehU7LsgNChov5jBg3Itho.AZy', NULL, '2019-08-04 07:09:08', '2019-08-04 07:09:08', '+7 (701) 181-3949', 1),
(132, 'Николай', NULL, 'ghjcnjrjkz@mail.ru', 2, NULL, '$2y$10$V1EK8o9XTA1ncPX6J93eaOSgSMucH3TTe2ZTSVAB.C8UeRza.LPNO', NULL, '2019-08-05 03:36:10', '2019-08-05 03:36:10', '+7(707) 515-1291', 1),
(133, 'Николай', NULL, 'ghjcnjrjkz@mail.ru', 2, NULL, '$2y$10$botF2MowVZDwUL7W5b3wuuR6Z8GR7KYyInmWEJwQa0D79MYAkmkW.', NULL, '2019-08-05 03:36:13', '2019-08-05 03:36:13', '+7(707) 515-1291', 1),
(134, 'Михаил', NULL, 'mixa_13_83@mail.ru', 2, NULL, '$2y$10$3wUywE/MwNZXqsMmdjVOBuv42bPFmbXryTuaLFD.AGeVwsQrscN9.', NULL, '2019-08-05 05:57:53', '2019-08-05 05:57:53', '+7(701) 225-2004', 1),
(135, 'Гульмира', NULL, 'galaxis_2011@mail.ru', 2, NULL, '$2y$10$VmfHjlwpAb0m7D/RY1ebiuwrMwRM888YVF7eP9DEeQp2Bhh2qFz0G', NULL, '2019-08-06 05:05:56', '2019-08-06 05:05:56', '+7(777) 877-6687', 1),
(136, 'Анжелика', NULL, 'anjebug@icloud.com', 2, NULL, '$2y$10$p/twHYLTdrCQpYGuLG/KBedYEP7zO6aFux8NnonNlJplfvDMeOPIm', NULL, '2019-08-06 05:25:38', '2019-08-06 05:25:38', '+7(705) 622-3203', 1),
(137, 'Олег', NULL, 'oleg.lee2013@mail.ru', 2, NULL, '$2y$10$ukR79sE0QFNj.7/X3gxk8O.XMHYsmWvh0JK7ycpeTz436Cd8GTa9a', NULL, '2019-08-06 06:46:47', '2019-08-06 06:46:47', '+7(707) 397-0402', 1),
(138, 'Чингиз', NULL, 'ch.nosinov@gmail.com', 2, NULL, '$2y$10$mmSUUIrau0FF5i.6bnctl.mUdagheanvjKjPuCVNZGxZNrXJjmPwC', NULL, '2019-08-06 07:25:12', '2019-08-06 07:25:12', '+7(705) 107-3957', 1),
(139, 'Жани', NULL, 'zhani1979@gmail.com', 2, NULL, '$2y$10$ISUZULdNhlFyE3adK5JRK.KqAPvu/0SN7.2tMeQ5Il1MPqKLsyjle', NULL, '2019-08-06 12:38:01', '2019-08-06 12:38:01', '+7(705) 651-0393', 1),
(140, 'Abdullakh', NULL, 'aabdullaerikbay@gmail.com', 2, NULL, '$2y$10$QJ3jmkdanjqGAtAjjtiYpej5YsBXNVhkxlRoZArr60tFUAgt028kS', NULL, '2019-08-07 14:16:12', '2019-08-07 14:16:12', '+7(707) 585-3244', 1),
(141, 'Рома', 'Сушков', 'romansushcov@mail.ru', 2, NULL, '$2y$10$xmvi19LyUZnFLnYzYxr3CujF.MeYmoRcgcCUZavMN4vtENimRlmQG', NULL, '2019-08-08 12:09:40', '2019-08-08 12:09:54', '+7(705) 905-1347', 1),
(142, 'Дмитрий', 'Рах', 'tanya.rah4@gmail.com', 2, NULL, '$2y$10$HgfR03WcrB8lcGNPlseAj.wnjeprBpvc/P9v3Ort29SRp4HIi4ufO', NULL, '2019-08-08 14:40:31', '2019-08-08 14:41:09', '+7(705) 385-7244', 1),
(143, 'test', NULL, 'test2@ffin.kz', 2, NULL, '$2y$10$6mcw8Eor7QnmTAOj8esdG.5/Y2cYyL70h41QGl742N7h.VIYnueHa', '22mP146WB35Z68q69zV7vjo695MtZSq0IMBDstL9cZs6r4jKkb7GoYdnYJJG', '2019-08-10 05:50:25', '2019-08-10 05:50:25', '+7(777) 777-7777', 1),
(144, 'Сергей', NULL, 'prone120767@gmail.com', 2, NULL, '$2y$10$WiDeOQQc1Z5V.huuN9vFB.vaMZqge.NbK3fQu/MLYo83vAukUJK12', 'RWGT7psV0jzSwLs7eDUDVj1l90Sw34fmPGwbRVWLjMvEpETCP59C6CFjFi8U', '2019-08-10 08:56:04', '2019-08-10 08:56:04', '+7(701) 976-8358', 1),
(145, 'Никита', NULL, 'frozenterrible@yandex.ru', 2, NULL, '$2y$10$PyB3SPKPtE3N65cWa2MpJuGW0KduJGFRGk3lldUOULWGZ.diGUX3i', NULL, '2019-08-10 14:14:06', '2019-08-10 14:14:06', '+7 (775) 793-0124', 1),
(146, 'Евгений', NULL, 'ebshops@mail.ru', 2, NULL, '$2y$10$3Mf06rdD7YAu.L49hJL0ku.0IpCh19j4Nz5WBhqvaRp9S4cBClXCG', NULL, '2019-08-12 07:01:48', '2019-08-12 07:01:48', '+7(777) 052-1221', 1),
(147, 'Раушан', NULL, 'rau_k@mail.ru', 2, NULL, '$2y$10$bCHbyO.Ixzh.zch1OzBBPekah5YWc54BwuJQnrAFYGopFdVj4JbrC', NULL, '2019-08-13 04:04:52', '2019-08-13 04:04:52', '+7(708) 700-8042', 1),
(148, 'Каламкас', NULL, 'kelimbetova.k@mail.ru', 2, NULL, '$2y$10$CFli8zuCOP8Ff9aH7jS47eTK7qxXTUKdtCvgMnoY8GY2E0xiz2h5a', NULL, '2019-08-13 18:47:56', '2019-08-13 18:47:56', '+7(701) 124-9202', 1),
(149, 'Берик', NULL, 'Berik_zax@mail.ru', 2, NULL, '$2y$10$EORBd4VUjJ7h5oHRttzbeutq4B2RJoA57bcYdqB/tJjAz6tleQp8O', 'o58fL4HvwIzBzTZpD1VNP8e8RyjI6Fsn2T21AdO0EBdfkBZDjkMK8STOImw0', '2019-08-14 05:36:07', '2019-08-14 05:36:07', '+7 (778) 344-2053', 1),
(150, 'Aigul', NULL, 'ai_2607@mail.ru', 2, NULL, '$2y$10$wOmJJ1NYpJUzhjKxAiaX1eYsqm0VDFdvCudP8oWHtOQEErMEKCzJy', NULL, '2019-08-15 04:05:33', '2019-08-15 04:05:33', '+7(701) 738-9096', 1),
(151, 'Даниял Жантурин', NULL, 'daniyal5536@gmail.com', 2, NULL, '$2y$10$Uy.Jgrkgwk/gcK.llyXqX.tGvrgjKUVqDdjI4N8n2gMkuR7YIyqNO', NULL, '2019-08-15 14:06:01', '2019-08-15 14:06:01', '+7(707) 921-0321', 1),
(152, 'Ольга', 'Колешко', 'koga@bk.ru', 2, NULL, '$2y$10$VLCFwb3wnzgsXMcsIF0vieOQWqGeI09QGZzeaXGBccN.O7veTuuwO', NULL, '2019-08-16 03:49:11', '2019-08-16 03:50:28', '+7(705) 181-1464', 1),
(153, 'Алибек', NULL, 'alibek19900509@gmail.com', 2, NULL, '$2y$10$Y2lvBNeycnr9j0DJY/4aj.RAtXe4DhE0m49m5EL7kW./fQlqKQPs2', NULL, '2019-08-17 12:27:18', '2019-08-17 12:27:18', '+7(777) 666-2403', 1),
(154, 'Руслан Степанов', NULL, 'ruslanstepanov38@gmail.com', 2, NULL, '$2y$10$oUbqARslnU9VdljjtPdKweGgOpgoGhX0k3HyGGaPjgtTfRl1jJk4a', NULL, '2019-08-18 11:28:08', '2019-08-18 11:28:08', '+7(707) 875-8590', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `t_you_watched_products`
--

CREATE TABLE `t_you_watched_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `visit_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `t_you_watched_products`
--

INSERT INTO `t_you_watched_products` (`id`, `visit_number`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 4, '2019-09-13 03:37:55', '2019-09-13 03:37:55'),
(2, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 2, '2019-09-13 09:15:41', '2019-09-13 09:15:41'),
(3, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 6, '2019-09-13 09:54:49', '2019-09-13 09:54:49'),
(4, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 1, '2019-09-13 09:54:50', '2019-09-13 09:54:50'),
(5, '6a9f07e6dc7c0c7b67b8f2e9f90a3e5d7481697b', 3, '2019-09-13 09:54:50', '2019-09-13 09:54:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `t_addresses`
--
ALTER TABLE `t_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `t_attributes`
--
ALTER TABLE `t_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_attribute_group_id_foreign` (`attribute_group_id`);

--
-- Индексы таблицы `t_attribute_attribute_set`
--
ALTER TABLE `t_attribute_attribute_set`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_attribute_set_attribute_id_foreign` (`attribute_id`),
  ADD KEY `attribute_attribute_set_attribute_set_id_foreign` (`attribute_set_id`);

--
-- Индексы таблицы `t_attribute_groups`
--
ALTER TABLE `t_attribute_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_attribute_product_value`
--
ALTER TABLE `t_attribute_product_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_product_value_attribute_id_foreign` (`attribute_id`),
  ADD KEY `attribute_product_value_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_attribute_sets`
--
ALTER TABLE `t_attribute_sets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_attribute_values`
--
ALTER TABLE `t_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Индексы таблицы `t_banners`
--
ALTER TABLE `t_banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_callbacks`
--
ALTER TABLE `t_callbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_carriers`
--
ALTER TABLE `t_carriers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_carts`
--
ALTER TABLE `t_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `t_cart_items`
--
ALTER TABLE `t_cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`);

--
-- Индексы таблицы `t_categories`
--
ALTER TABLE `t_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_categories` (`url`);

--
-- Индексы таблицы `t_category_filter_links`
--
ALTER TABLE `t_category_filter_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_filter_links_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `t_category_product`
--
ALTER TABLE `t_category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_cities`
--
ALTER TABLE `t_cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_companies`
--
ALTER TABLE `t_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `t_migrations`
--
ALTER TABLE `t_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_orders`
--
ALTER TABLE `t_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_carrier_id_foreign` (`carrier_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`),
  ADD KEY `orders_shipping_address_id_idx` (`shipping_address_id`);

--
-- Индексы таблицы `t_order_product`
--
ALTER TABLE `t_order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_order_statuses`
--
ALTER TABLE `t_order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_order_status_history`
--
ALTER TABLE `t_order_status_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_history_status_id_foreign` (`status_id`),
  ADD KEY `order_status_history_order_id_foreign` (`order_id`),
  ADD KEY `order_status_history_user_id_foreign_idx` (`user_id`);

--
-- Индексы таблицы `t_password_resets`
--
ALTER TABLE `t_password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `t_payments`
--
ALTER TABLE `t_payments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_products`
--
ALTER TABLE `t_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_attribute_set_id_foreign` (`attribute_set_id`),
  ADD KEY `products_group_id_foreign` (`group_id`);

--
-- Индексы таблицы `t_product_accessories`
--
ALTER TABLE `t_product_accessories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_accessories_accessory_product_id_foreign` (`accessory_product_id`),
  ADD KEY `product_accessories_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_product_features_compare`
--
ALTER TABLE `t_product_features_compare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compare_products_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_product_features_wishlist`
--
ALTER TABLE `t_product_features_wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_features_wishlist_user_id_foreign` (`user_id`),
  ADD KEY `product_features_wishlist_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_product_groups`
--
ALTER TABLE `t_product_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_product_images`
--
ALTER TABLE `t_product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_questions_answers`
--
ALTER TABLE `t_questions_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_answers_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_reviews`
--
ALTER TABLE `t_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_review_likes`
--
ALTER TABLE `t_review_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_likes_review_id_foreign` (`review_id`);

--
-- Индексы таблицы `t_roles`
--
ALTER TABLE `t_roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_sliders`
--
ALTER TABLE `t_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_specific_prices`
--
ALTER TABLE `t_specific_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specific_prices_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_statuses`
--
ALTER TABLE `t_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_subscribe`
--
ALTER TABLE `t_subscribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribe_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_you_watched_products`
--
ALTER TABLE `t_you_watched_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `you_watched_products_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `t_addresses`
--
ALTER TABLE `t_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_attributes`
--
ALTER TABLE `t_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `t_attribute_attribute_set`
--
ALTER TABLE `t_attribute_attribute_set`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `t_attribute_groups`
--
ALTER TABLE `t_attribute_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `t_attribute_product_value`
--
ALTER TABLE `t_attribute_product_value`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT для таблицы `t_attribute_sets`
--
ALTER TABLE `t_attribute_sets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `t_attribute_values`
--
ALTER TABLE `t_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `t_banners`
--
ALTER TABLE `t_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_callbacks`
--
ALTER TABLE `t_callbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_carriers`
--
ALTER TABLE `t_carriers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_carts`
--
ALTER TABLE `t_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `t_cart_items`
--
ALTER TABLE `t_cart_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_categories`
--
ALTER TABLE `t_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `t_category_filter_links`
--
ALTER TABLE `t_category_filter_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_category_product`
--
ALTER TABLE `t_category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `t_cities`
--
ALTER TABLE `t_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `t_companies`
--
ALTER TABLE `t_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_migrations`
--
ALTER TABLE `t_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT для таблицы `t_news`
--
ALTER TABLE `t_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `t_orders`
--
ALTER TABLE `t_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_order_product`
--
ALTER TABLE `t_order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_order_statuses`
--
ALTER TABLE `t_order_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_order_status_history`
--
ALTER TABLE `t_order_status_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_payments`
--
ALTER TABLE `t_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_products`
--
ALTER TABLE `t_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `t_product_accessories`
--
ALTER TABLE `t_product_accessories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_product_features_compare`
--
ALTER TABLE `t_product_features_compare`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_product_features_wishlist`
--
ALTER TABLE `t_product_features_wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `t_product_groups`
--
ALTER TABLE `t_product_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `t_product_images`
--
ALTER TABLE `t_product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `t_questions_answers`
--
ALTER TABLE `t_questions_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `t_reviews`
--
ALTER TABLE `t_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_review_likes`
--
ALTER TABLE `t_review_likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_roles`
--
ALTER TABLE `t_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_sliders`
--
ALTER TABLE `t_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `t_specific_prices`
--
ALTER TABLE `t_specific_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `t_statuses`
--
ALTER TABLE `t_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `t_subscribe`
--
ALTER TABLE `t_subscribe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT для таблицы `t_you_watched_products`
--
ALTER TABLE `t_you_watched_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `t_addresses`
--
ALTER TABLE `t_addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_attributes`
--
ALTER TABLE `t_attributes`
  ADD CONSTRAINT `attributes_attribute_group_id_foreign` FOREIGN KEY (`attribute_group_id`) REFERENCES `t_attribute_groups` (`id`);

--
-- Ограничения внешнего ключа таблицы `t_attribute_attribute_set`
--
ALTER TABLE `t_attribute_attribute_set`
  ADD CONSTRAINT `attribute_attribute_set_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `t_attributes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `attribute_attribute_set_attribute_set_id_foreign` FOREIGN KEY (`attribute_set_id`) REFERENCES `t_attribute_sets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_attribute_product_value`
--
ALTER TABLE `t_attribute_product_value`
  ADD CONSTRAINT `attribute_product_value_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `t_attributes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `attribute_product_value_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_attribute_values`
--
ALTER TABLE `t_attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `t_attributes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_carts`
--
ALTER TABLE `t_carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_cart_items`
--
ALTER TABLE `t_cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `t_carts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_category_filter_links`
--
ALTER TABLE `t_category_filter_links`
  ADD CONSTRAINT `category_filter_links_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `t_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_category_product`
--
ALTER TABLE `t_category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `t_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_companies`
--
ALTER TABLE `t_companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_orders`
--
ALTER TABLE `t_orders`
  ADD CONSTRAINT `orders_carrier_id_foreign` FOREIGN KEY (`carrier_id`) REFERENCES `t_carriers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `t_payments` (`id`),
  ADD CONSTRAINT `orders_shipping_address_id` FOREIGN KEY (`shipping_address_id`) REFERENCES `t_addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `t_order_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_order_product`
--
ALTER TABLE `t_order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `t_orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_order_status_history`
--
ALTER TABLE `t_order_status_history`
  ADD CONSTRAINT `order_status_history_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `t_orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_status_history_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `t_order_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_status_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_products`
--
ALTER TABLE `t_products`
  ADD CONSTRAINT `products_attribute_set_id_foreign` FOREIGN KEY (`attribute_set_id`) REFERENCES `t_attribute_sets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `t_product_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_product_accessories`
--
ALTER TABLE `t_product_accessories`
  ADD CONSTRAINT `product_accessories_accessory_product_id_foreign` FOREIGN KEY (`accessory_product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_accessories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_product_features_compare`
--
ALTER TABLE `t_product_features_compare`
  ADD CONSTRAINT `compare_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_product_features_wishlist`
--
ALTER TABLE `t_product_features_wishlist`
  ADD CONSTRAINT `product_features_wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_features_wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `t_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_product_images`
--
ALTER TABLE `t_product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_questions_answers`
--
ALTER TABLE `t_questions_answers`
  ADD CONSTRAINT `questions_answers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_reviews`
--
ALTER TABLE `t_reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_review_likes`
--
ALTER TABLE `t_review_likes`
  ADD CONSTRAINT `review_likes_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `t_reviews` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_specific_prices`
--
ALTER TABLE `t_specific_prices`
  ADD CONSTRAINT `specific_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_subscribe`
--
ALTER TABLE `t_subscribe`
  ADD CONSTRAINT `subscribe_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `t_you_watched_products`
--
ALTER TABLE `t_you_watched_products`
  ADD CONSTRAINT `you_watched_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `t_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
