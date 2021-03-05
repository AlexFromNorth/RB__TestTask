-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2021 г., 03:14
-- Версия сервера: 5.6.37
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
-- База данных: `promo_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `insert-item`
--

CREATE TABLE `insert-item` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `insert-item`
--

INSERT INTO `insert-item` (`id`, `data`, `text`) VALUES
(1, '2020-10-15', 'Акции на размещение баннерного\r\nпанно 20% до конца июля'),
(2, '2020-10-10', 'Мы работаем в обычном режиме\r\nс 15 июня!'),
(3, '2020-10-08', 'Как правильно подобрать рекламный канал?'),
(4, '2020-10-15', 'Акции на размещение баннерного\r\nпанно 20% до конца июля'),
(5, '2020-10-10', 'Мы работаем в обычном режиме\r\nс 15 июня!'),
(6, '2020-10-08', 'Как правильно подобрать рекламный канал?'),
(7, '2020-10-15', 'Акции на размещение баннерного\r\nпанно 20% до конца июля'),
(8, '2020-10-10', 'Мы работаем в обычном режиме\r\nс 15 июня!'),
(9, '2020-10-08', 'Как правильно подобрать рекламный канал?');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `insert-item`
--
ALTER TABLE `insert-item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `insert-item`
--
ALTER TABLE `insert-item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
