-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 13 2020 г., 18:48
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
(2, 'Новость номер 2', 'У правительства России нет плана по введению тотальных ограничений для бизнеса и граждан на фоне пандемии коронавируса. Об этом в четверг, 2 октября, заявил Владимир Путин затем<a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">...</a>', 'https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/'),
(3, 'Новость номер 3', 'Премьер-министр России Михаил Мишустин подписал постановление о продлении программы льготной ипотеки под 6,5% годовых до 1 июля 2021 года. По оценкам властей, инициатива позволит<a href=\"https://russian.rt.com/business/article/796781-prodlenie-lgotnaya-ipoteka\">...</a>', 'https://russian.rt.com/business/article/796781-prodlenie-lgotnaya-ipoteka'),
(4, 'Новость номер 4', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти<a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">господдержку</a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">расширить</a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">...</a>', 'https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm'),
(5, 'Новость номер 5', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти<a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">господдержку </a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">у</a> <a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">...</a>', 'https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm'),
(6, 'Новость номер 6', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти намерены<a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">господдержку </a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">у</a> <a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">...</a>', 'https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm'),
(7, 'Новость номер 7', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти намерены<a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">у </a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\"></a> <a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">...</a>', 'https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm'),
(8, 'Новость номер 8', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти намерены <a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">у </a><a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">у</a> <a href=\"https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm\">...</a>', 'https://russian.rt.com/business/article/803499-nacionalnyj-proekt-turizm'),
(9, 'Новость номер 9', 'Президент России Владимир Путин поддержал запуск национального проекта в сфере туризма. Об этом заявил глава правительства Михаил Мишустин. Власти намерены <a href=\"https://russian.rt.com/business/article/796676-rossiya-turizm-intervyu\">расширить </a><a href=\"https://russian.rt.com/business/article/796676-rossiya-turizm-intervyu\">господдержку</a> <a href=\"https://russian.rt.com/business/article/796676-rossiya-turizm-intervyu\">...</a>', 'https://russian.rt.com/business/article/796676-rossiya-turizm-intervyu'),
(10, 'Новость номер 10', 'Премьер-министр России Михаил Мишустин распорядился дополнительно направить 62 млрд рублей для выплат на детей в возрасте от трёх до семи лет. Как отметил глава <a href=\"https://russian.rt.com/business/article/802323-pravitelstvo-vyplaty-deti\">кабмина, </a><a href=\"https://russian.rt.com/business/article/802323-pravitelstvo-vyplaty-deti\">в</a><a href=\"https://russian.rt.com/business/article/802323-pravitelstvo-vyplaty-deti\">...</a>', 'https://russian.rt.com/business/article/802323-pravitelstvo-vyplaty-deti'),
(11, 'Новость номер 11', 'Премьер-министр России Михаил Мишустин распорядился дополнительно направить 62 млрд рублей для выплат на детей в возрасте от трёх до семи лет. Как отметил глава кабмина, <a href=\"https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum\">кабмина, </a><a href=\"https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum\">в</a><a href=\"https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum\">...</a>', 'https://russian.rt.com/business/article/797567-rossiya-ekonomika-forum'),
(12, 'Новость номер 12', 'В октябре 2020 года объём выданных в России ипотечных кредитов установил исторический рекорд и достиг 555 млрд рублей. Об этом в эксклюзивном интервью RT рассказал <a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">рассказал </a><a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">руководитель</a><a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">...</a>', 'https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya'),
(13, 'Новость номер 13', 'В октябре 2020 года объём выданных в России ипотечных кредитов установил исторический рекорд и достиг 555 млрд рублей. Об этом в эксклюзивном интервью RT <a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">рассказал </a><a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">руководитель</a><a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">...</a>', 'https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/'),
(14, 'Новость номер 14', 'В октябре 2020 года объём выданных в России ипотечных кредитов установил исторический рекорд и достиг 555 млрд рублей. Об этом в эксклюзивном интервью RT <a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">рассказал </a><a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">руководитель</a><a href=\"https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya\">...</a>', 'https://russian.rt.com/business/article/801670-nedvizhimost-ipoteka-rossiya'),
(15, 'Новость номер 15', 'В октябре 2020 года объём выданных в России ипотечных кредитов установил исторический рекорд и достиг 555 млрд рублей. Об этом в эксклюзивном интервью RT рассказал <a href=\"https://www.yandex.ru\">руководитель </a><a href=\"https://www.yandex.ru\">ана</a><a href=\"https://www.yandex.ru\">...</a>', 'https://www.yandex.ru'),
(16, 'Новость номер 16', 'В III квартале 2020 года рынок труда в России начал восстанавливаться от последствий пандемии COVID-19. Как рассказали RT представители сервисов по подбору персонала, с июля <a href=\"https://www.yandex.ru\">по </a><a href=\"https://www.yandex.ru\">сен</a><a href=\"https://www.yandex.ru\">...</a>', 'https://www.yandex.ru'),
(17, 'Новость номер 17', 'В III квартале 2020 года рынок труда в России начал восстанавливаться от последствий пандемии COVID-19. Как рассказали RT представители сервисов по подбору персонала, с июля <a href=\"https://www.yandex.ru\">посен </a><a href=\"https://www.yandex.ru\">...</a>', 'https://www.yandex.ru'),
(18, 'Новость номер 18', 'В III квартале 2020 года рынок труда в России начал восстанавливаться от последствий пандемии COVID-19. Как рассказали RT представители сервисов по подбору персонала, с июля <a href=\"https://russian.rt.com/business/article/801106-rynok-truda-vosstanovlenie-vkansii\">по сен </a><a href=\"https://russian.rt.com/business/article/801106-rynok-truda-vosstanovlenie-vkansii\">...</a>', 'https://russian.rt.com/business/article/801106-rynok-truda-vosstanovlenie-vkansii'),
(19, 'Новость номер 19', 'В III квартале 2020 года рынок труда в России начал восстанавливаться от последствий пандемии COVID-19. Как рассказали RT представители сервисов по подбору персонала, с июля <a href=\"https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/\">по сен...</a>', 'https://rns.online/regions/V-Novom-Urengoe-zakroyut-chast-detskih-sadov--2020-11-05/'),
(20, 'Новость номер 20', 'awd                                 wd                              wad                         wad            wad                                       <a href=\"https://www.yandex.ru\"> wad...</a>', 'https://www.yandex.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) UNSIGNED NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolvo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `region`, `kolvo`, `responsible`, `cap`, `money`) VALUES
(13, 'Волгоградская область', '1000000', 'Андрей Бочаров', 'Волгоград', '100000000'),
(14, 'Пермская область', '1000000', 'Вячеслав Никитин', 'Пермь', '200000000'),
(17, 'ФЦВЦФВ', '123', 'ЦФВЦФВ', 'ФЦВФЦВ', '312312'),
(19, 'Московская область', '10000000', 'Сергей Собянин', 'Москва', '999999999');

-- --------------------------------------------------------

--
-- Структура таблицы `temperature`
--

CREATE TABLE `temperature` (
  `id` int(11) UNSIGNED NOT NULL,
  `oblast` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `temperature`
--

INSERT INTO `temperature` (`id`, `oblast`, `temp`) VALUES
(1, 'Волгоградская область', -10),
(3, 'Пермская область', -15),
(6, 'Московская область', -14.5),
(8, 'Вологодская область', -13.5);

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
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `temperature`
--
ALTER TABLE `temperature`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
