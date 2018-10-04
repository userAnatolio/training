-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 04 2018 г., 03:51
-- Версия сервера: 5.5.61-cll
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anatolio_shop`
--

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
  `category_id` int(11) NOT NULL,
  `name_` varchar(20) CHARACTER SET utf8 NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `name_`, `stock_id`) VALUES
(1, 'одежда', 2),
(2, 'нижнее белье', 2),
(3, 'головные уборы', 3),
(4, 'аксессуары', 3),
(5, 'обувь', 1),
(6, 'косметика', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL,
  `vendor_code` varchar(40) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`goods_id`, `vendor_code`, `price`, `number`, `brand_id`, `subcategory_id`) VALUES
(366, 'AE3', 1046, 3, 1, 7),
(365, 'AL85', 613, 85, 2, 14),
(364, 'AB91', 2259, 91, 3, 1),
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
(331, 'AQ10', 2179, 10, 1, 17);

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
  `subсategory_id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`subсategory_id`, `name`, `category_id`) VALUES
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subсategory_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subсategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
