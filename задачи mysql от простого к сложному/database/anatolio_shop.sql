-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2018 г., 00:46
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bond`
--

CREATE TABLE `bond` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hobby_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bond`
--

INSERT INTO `bond` (`id`, `user_id`, `hobby_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 5, 6),
(7, 6, 7),
(8, 6, 8),
(9, 7, 1),
(10, 7, 2),
(11, 8, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'adidas'),
(2, 'nike'),
(3, 'rebook');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `stock_id`) VALUES
(1, 'одежда', 2),
(2, 'нижнее белье', 2),
(3, 'головные уборы', 3),
(4, 'аксессуары', 3),
(5, 'обувь', 1),
(6, 'косметика', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`, `country_id`) VALUES
(1, 'Москва', 1),
(2, 'Ростов', 1),
(4, 'Волгоград', 1),
(5, 'Минск', 2),
(6, 'Полоцк', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Россия'),
(2, 'Беларусь');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `vendor_code` varchar(40) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `vendor_code`, `price`, `number`, `brand_id`, `subcategory_id`) VALUES
(366, 'AE3', 1046, 3, 1, 7),
(365, 'AL85', 613, 85, 2, 14),
(364, 'AB91', 2259, 91, 3, 3),
(363, 'AZ51', 1368, 51, 2, 11),
(362, 'AY90', 2097, 90, 1, 7),
(361, 'AV88', 2945, 88, 3, 12),
(360, 'AQ26', 2411, 26, 1, 4),
(359, 'AX13', 1862, 13, 2, 1),
(358, 'AF52', 1301, 52, 2, 2),
(357, 'AE35', 1046, 35, 1, 9),
(356, 'AA12', 2912, 12, 3, 1),
(355, 'AR82', 1187, 82, 3, 15),
(354, 'AQ84', 2749, 84, 3, 18),
(353, 'AG91', 2928, 91, 3, 13),
(352, 'AU13', 2771, 13, 2, 17),
(351, 'AG62', 2501, 62, 3, 18),
(350, 'AX37', 2696, 37, 3, 6),
(349, 'AR20', 1672, 20, 2, 11),
(348, 'AP30', 2621, 30, 1, 6),
(347, 'AF52', 1258, 52, 2, 16),
(346, 'AB51', 2768, 51, 1, 2),
(345, 'AU59', 1224, 59, 1, 4),
(344, 'AV56', 2471, 56, 3, 14),
(343, 'AZ18', 1780, 18, 2, 18),
(342, 'AL73', 1940, 73, 2, 5),
(341, 'AF34', 1543, 34, 2, 9),
(340, 'AI34', 1786, 34, 3, 10),
(339, 'AK67', 1162, 67, 1, 2),
(338, 'AE32', 1995, 32, 1, 8),
(337, 'A65', 1411, 65, 2, 1),
(336, 'A71', 1776, 71, 3, 7),
(335, 'AL76', 1827, 76, 2, 3),
(334, 'AK10', 2419, 10, 2, 18),
(333, 'A20', 1315, 20, 2, 2),
(332, 'AS66', 901, 66, 1, 14),
(331, 'AQ10', 2179, 10, 1, 17),
(367, 'AB91', 2259, 91, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hobby`
--

INSERT INTO `hobby` (`id`, `description`) VALUES
(1, 'Футбол'),
(2, 'Хоккей'),
(3, 'Шахматы'),
(4, 'Покер'),
(5, 'Плавание'),
(6, 'Прыжки на батуте'),
(7, 'Стрельба'),
(8, 'Кулинария');

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `user_id`, `goods_id`, `date`) VALUES
(1, 'Покупка1', 1, 366, '2018-10-03 05:00:00'),
(2, 'Покупка2', 2, 365, '2018-11-02 06:15:38'),
(3, 'Покупка3', 3, 364, '2018-11-03 00:00:00'),
(4, 'Покупка4', 4, 363, '2018-11-04 03:26:00'),
(5, 'Покупка5', 5, 361, '2018-11-05 06:40:42'),
(6, 'Покупка6', 6, 362, '2018-10-25 00:00:00'),
(7, 'Покупка7', 7, 357, '2018-11-08 07:00:00'),
(8, 'Покупка8', 8, 356, '2018-11-09 07:00:00'),
(9, 'Покупка9', 1, 355, '2018-11-10 13:36:00'),
(10, 'Покупка10', 2, 354, '2018-11-11 05:23:00'),
(11, 'Покупка11', 3, 353, '2018-09-11 08:00:00'),
(12, 'Покупка12', 5, 352, '2018-11-13 09:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `name_stock` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`stock_id`, `name_stock`) VALUES
(1, 'stock_1'),
(2, 'stock_2'),
(3, 'stock_3');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `name_` varchar(20) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`id`, `name_`, `category_id`) VALUES
(1, 'верхняя одежда', 1),
(2, 'нижняя одежда', 1),
(3, 'шапки', 3),
(4, 'кепки', 3),
(5, 'сумки', 4),
(6, 'кошельки', 4),
(7, 'ботинки', 5),
(8, 'кросовки', 5),
(9, 'масс', 6),
(10, 'люкс', 6),
(11, 'трусы', 2),
(12, 'носки', 2),
(13, 'колготки', 2),
(14, 'перчатки', 4),
(15, 'шарфы', 4),
(16, 'сапоги', 5),
(17, 'туфли', 5),
(18, 'шлепки', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `city_id`) VALUES
(1, 'Андрей', 1),
(2, 'Владислав', 1),
(3, 'Константин', 2),
(4, 'Олег', 1),
(5, 'Иван', 5),
(6, 'Дмитрий', 6),
(7, 'Сергей', 5),
(8, 'Юрий', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bond`
--
ALTER TABLE `bond`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bond`
--
ALTER TABLE `bond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT для таблицы `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
