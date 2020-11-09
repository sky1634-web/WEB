-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 09 2020 г., 17:42
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test1.local`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `link`) VALUES
(1, 'Новость номер 1', 'Владимир Путин исключил введение общенационального локдауна в стране. По его словам, власти будут принимать точечные решения для борьбы с пандемией COVID-19, чтобы максимально сох<a href=\"https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum\">...</a>', 'https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum'),
(2, 'Новость номер 2', 'У правительства России нет плана по введению тотальных ограничений для бизнеса и граждан на фоне пандемии коронавируса. Об этом в четверг, 2 октября, заявил Владимир Путин затем<a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">...</a>', 'https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'TAT', 'hrth@yandex.ru', '$2y$10$AiCRF8P7e4qlHoW1PIa3KORURjhBT7oUBtXG/g/WVPiFtxQY7eipy'),
(3, 'account', 'dada@yandex.ru', '$2y$10$f6w/TiACPLZpm88cadEK8OUXBSWCV6BaMcqMbPGxDvC1BlNVBeni6'),
(4, 'test', 'asd@mail.ru', '$2y$10$iSkeFuQWdVHw9uKlUQusfuQolwXzr6xoc5m/bwjLj7TpSSHsbsY9S'),
(5, 'asd', 'wadwadwad@tae.ru', '$2y$10$54o44mYzTyZyirtdj/gbKuluqHieVrFMWpBjbo6LKZ9LiSJHnQLn2'),
(6, 'USER', 'dasda@yan.ru', '$2y$10$dhmVegMzxvV4LPVMgikchOQqY6eO0TxDwWO8WynZ628RL5NuG0eh.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
