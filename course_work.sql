-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 01 2020 г., 00:59
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `course_work`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart_item`
--

CREATE TABLE `cart_item` (
  `newid` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart_item`
--

INSERT INTO `cart_item` (`newid`, `user_id`, `product_id`, `count`) VALUES
(4, 1, 23, 1),
(62, 3, 24, 1),
(64, 3, 3, 2),
(65, 3, 2, 2),
(66, 3, 1, 1),
(67, 3, 4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'discount'),
(2, 'new'),
(3, 'pod'),
(4, 'liquid'),
(5, 'vape'),
(6, 'atomizer'),
(7, 'accessory');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `img`, `idCategory`) VALUES
(1, 'PONS Basic Kit', 990, 'https://babylonvape.ru/upload/resize_cache/iblock/e12/170_170_0/e12ef5442146ade338ba924a40bc083f.png', 3),
(2, 'Logic Compact', 1350, 'https://babylonvape.ru/upload/resize_cache/iblock/ebb/170_170_0/ebb9bd618e9c1101fb7cf18782dcedb2.png', 3),
(3, 'JUUL Promo Kit Mint', 1499, 'https://babylonvape.ru/upload/resize_cache/iblock/f2c/170_170_0/f2c8aec890735397459b303bb729e8bc.jpg', 3),
(4, 'PONS Basic Kit 2', 990, 'https://babylonvape.ru/upload/resize_cache/iblock/e12/170_170_0/e12ef5442146ade338ba924a40bc083f.png', 3),
(5, 'Logic Compact 2', 1350, 'https://babylonvape.ru/upload/resize_cache/iblock/ebb/170_170_0/ebb9bd618e9c1101fb7cf18782dcedb2.png', 3),
(6, 'JUUL Promo Kit Mint 2', 1490, 'https://babylonvape.ru/upload/resize_cache/iblock/f2c/170_170_0/f2c8aec890735397459b303bb729e8bc.jpg', 3),
(7, 'PONS Basic Kit 3', 990, 'https://babylonvape.ru/upload/resize_cache/iblock/e12/170_170_0/e12ef5442146ade338ba924a40bc083f.png', 3),
(8, 'Logic Compact 3', 1350, 'https://babylonvape.ru/upload/resize_cache/iblock/ebb/170_170_0/ebb9bd618e9c1101fb7cf18782dcedb2.png', 3),
(9, 'JUUL Promo Kit Mint 3', 1490, 'https://babylonvape.ru/upload/resize_cache/iblock/f2c/170_170_0/f2c8aec890735397459b303bb729e8bc.jpg', 3),
(10, 'Justfog Minifit', 1190, 'https://babylonvape.ru/upload/resize_cache/iblock/f55/170_170_0/f55f6f05d2aedcaffdc08d52c86dede8.jpg', 2),
(11, 'Жидкость Illusion Soda Pop', 930, 'https://babylonvape.ru/upload/resize_cache/iblock/757/170_170_0/7573c7c3c0b3d14319921d2dc3d16387.jpg', 2),
(12, 'Joyetech Teros One', 2190, 'https://babylonvape.ru/upload/resize_cache/iblock/026/170_170_0/026a8d87c56f53c4fcd5414f5ebe392d.jpg', 2),
(13, 'Smoant Battlestar Baby', 1890, 'https://babylonvape.ru/upload/resize_cache/iblock/78f/170_170_0/78f14a01bdef00bb8010420df60e227b.jpg', 2),
(14, 'Жидкость Cuttwood Bird Brains', 1050, 'https://babylonvape.ru/upload/resize_cache/iblock/964/170_170_0/964c9670cc03a1e39d957a7283539eb2.jpg', 2),
(15, 'Жидкость The Finest Salt', 990, 'https://babylonvape.ru/upload/resize_cache/iblock/5bd/170_170_0/5bd95bd84797852e5753490c8a9a0d66.jpg', 2),
(21, 'Drip Fried: Жидкость Banana', 1090, 'https://babylonvape.ru/upload/resize_cache/iblock/d05/170_170_0/d0531c3500d0dc935e2a7d87a996fe7f.jpg', 4),
(22, 'BRWD: Жидкость Rio', 1350, 'https://babylonvape.ru/upload/resize_cache/iblock/bdc/170_170_0/bdcd101a466df553172b24a78eda2f2a.jpg', 4),
(23, 'Cola Man: Жидкость Lime', 1050, 'https://babylonvape.ru/upload/resize_cache/iblock/0d2/170_170_0/0d2a978d7afce9e8f202a1b8abc31b08.jpg', 4),
(24, 'Жидкость Illusion Lila Saft', 930, 'https://babylonvape.ru/upload/resize_cache/iblock/27f/170_170_0/27fe51703ca5ee25877fd877b5ec0ac2.jpg', 4),
(25, 'Жидкость Gusto Watermelon', 1150, 'https://babylonvape.ru/upload/resize_cache/iblock/e2b/170_170_0/e2bb9c03fc152096c16c23d88ca8519f.jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'misha.solyanoy.000@mail.ru', 'admin'),
(3, 'artemka2232', 'misha.solyanoy.000@mail.ru', '123'),
(4, 'vova', 'vova@vova.com', '1'),
(5, 'plomba634', 'mish12a.solyanoy.000@mail.ru', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`newid`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `newid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_item_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
