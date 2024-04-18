-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2024 г., 13:02
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
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_korzina` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
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
  `model` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `date`, `image`, `price`, `id_type`, `country`, `model`) VALUES
(1, 'Принтер1', '2024-04-01', '', 20000, 1, 'Россия', 'Модель1'),
(2, 'Принтер2', '2024-04-02', '', 30000, 2, 'Канада', 'Модель2'),
(3, 'Принтер3', '2024-04-03', '', 40000, 3, 'Япония', 'Модель3');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name`) VALUES
(1, 'Готовится'),
(2, 'Оформлен'),
(3, 'Отказано'),
(4, 'Доставлено');

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
  `id_user` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `isAdmin`) VALUES
(1, 'name1', 'surname1', 'patronymic1', 'user1', 'user1@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'admin', 'admin', 'admin', 'admin', 'admin@mail.ru', '$2y$10$.YEGEH6lDt3SvfWcjbaeceO.2bIp/41Uggl6xbr/o32U8xKFCNYhG', 1);

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
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_korzina` (`id_korzina`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_type`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `korzina`
--
ALTER TABLE `korzina`
  MODIFY `id_korzina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `korzina_product`
--
ALTER TABLE `korzina_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD CONSTRAINT `korzina_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `korzina_product`
--
ALTER TABLE `korzina_product`
  ADD CONSTRAINT `korzina_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `korzina_product_ibfk_2` FOREIGN KEY (`id_korzina`) REFERENCES `korzina` (`id_korzina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_korzina`) REFERENCES `korzina` (`id_korzina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
