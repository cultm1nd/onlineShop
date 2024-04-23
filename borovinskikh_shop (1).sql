-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 23 2024 г., 10:11
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `borovinskikh_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `korzina`
--

CREATE TABLE `korzina` (
  `id_korzina` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `korzina`
--

INSERT INTO `korzina` (`id_korzina`, `id_user`, `status`) VALUES
(1, 10, 'select');

-- --------------------------------------------------------

--
-- Структура таблицы `korzina_product`
--

CREATE TABLE `korzina_product` (
  `id` int(11) NOT NULL,
  `id_korzina` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `korzina_product`
--

INSERT INTO `korzina_product` (`id`, `id_korzina`, `id_product`, `count`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1),
(3, 1, 3, 1),
(4, 1, 3, 1),
(5, 1, 1, 1),
(6, 1, 1, 1),
(7, 1, 1, 1),
(8, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_korzina` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `country` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `date`, `image`, `price`, `id_type`, `country`, `model`, `count`) VALUES
(1, 'Принтер1', '2024-04-01', '1p.png', 20000, 1, 'Россия', 'Модель1', 3),
(2, 'Принтер2', '2024-04-02', '2p.png', 30000, 2, 'Канада', 'Модель2', 2),
(3, 'Принтер3', '2024-04-03', '3p.png', 40000, 3, 'Япония', 'Модель3', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `type_product`
--

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_product`
--

INSERT INTO `type_product` (`id_type`, `name`) VALUES
(1, 'Лазерные принтеры'),
(2, 'Струйные принтеры'),
(3, 'Термопринтеры');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'name1', 'surname1', 'patronymic1', 'user1', 'user1@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 0, NULL, NULL),
(2, 'admin', 'admin', 'admin', 'admin', 'admin@mail.ru', '$2y$10$.YEGEH6lDt3SvfWcjbaeceO.2bIp/41Uggl6xbr/o32U8xKFCNYhG', 1, NULL, NULL),
(3, 'qq', 'qq', NULL, 'qq', 'qq@qq.qq', '$2y$12$F0EiNV11KZrkYK7KvPOyuOz2i6XD03SUaEhAJvcRanVXMMHiWvrQ2', 0, NULL, NULL),
(5, 'ww', 'ww', NULL, 'ww', 'ww@ww.ww', 'ww', 0, NULL, NULL),
(8, 'rr', 'rr', NULL, 'rr', 'rr@rr.rr', '$2y$12$8TgdPhpZDoe6tgpFZy.wue8aZCPuC4f.SZI0A27BIRCQMFfrHQ4cC', 0, '2024-04-23 04:33:23', '2024-04-23 04:33:23'),
(9, 'yy', 'yy', NULL, 'yy', 'yy@yy.yy', '$2y$12$xa0fAdPW20ILDbKvh8.jc.KqEznRWjBEJyccrHR8CGirNuKINsIWG', 0, '2024-04-23 05:11:01', '2024-04-23 05:11:01'),
(10, 'aa', 'aa', NULL, 'aa', 'aa@aa.aa', '$2y$12$LbomBWry4UyPLHar5zapo.9U6i8VIEoh4KR./bNZKViL8jRVr5asO', 0, '2024-04-23 06:20:41', '2024-04-23 06:20:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD PRIMARY KEY (`id_korzina`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `korzina_product`
--
ALTER TABLE `korzina_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_korzina` (`id_korzina`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_type`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`,`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `korzina`
--
ALTER TABLE `korzina`
  MODIFY `id_korzina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `korzina_product`
--
ALTER TABLE `korzina_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD CONSTRAINT `korzina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `korzina_product`
--
ALTER TABLE `korzina_product`
  ADD CONSTRAINT `korzina_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `korzina_product_ibfk_2` FOREIGN KEY (`id_korzina`) REFERENCES `korzina` (`id_korzina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
