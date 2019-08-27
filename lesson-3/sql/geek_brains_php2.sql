-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 27 2019 г., 18:30
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geek_brains_php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url_min_images` varchar(255) NOT NULL,
  `url_max_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `url_min_images`, `url_max_images`) VALUES
(1, 'Image One', 'img/tm-img-01.jpg', 'img/tm-img-01-tn.jpg'),
(2, 'Image Two', 'img/tm-img-02.jpg', 'img/tm-img-02-tn.jpg'),
(3, 'Image Three', 'img/tm-img-03.jpg', 'img/tm-img-03-tn.jpg'),
(4, 'Image Four', 'img/tm-img-04.jpg', 'img/tm-img-04-tn.jpg'),
(5, 'Image Five', 'img/tm-img-05.jpg', 'img/tm-img-05-tn.jpg'),
(6, 'Image Six', 'img/tm-img-06.jpg', 'img/tm-img-06-tn.jpg'),
(7, 'Image Seven', 'img/tm-img-07.jpg', 'img/tm-img-07-tn.jpg'),
(8, 'Image Eight', 'img/tm-img-08.jpg', 'img/tm-img-08-tn.jpg'),
(9, 'Image Nine', 'img/tm-img-09.jpg', 'img/tm-img-09-tn.jpg'),
(10, 'Image Ten', 'img/tm-img-10.jpg', 'img/tm-img-10-tn.jpg'),
(11, 'Image Eleven', 'img/tm-img-11.jpg', 'img/tm-img-11-tn.jpg'),
(12, 'Image Twelve', 'img/tm-img-12.jpg', 'img/tm-img-12-tn.jpg'),
(13, 'Image Thirteen', 'img/tm-img-13.jpg', 'img/tm-img-13-tn.jpg'),
(14, 'Image Fourteen', 'img/tm-img-14.jpg', 'img/tm-img-14-tn.jpg'),
(15, 'Image Fifteen', 'img/tm-img-15.jpg', 'img/tm-img-15-tn.jpg'),
(16, 'Image Sixteen', 'img/tm-img-16.jpg', 'img/tm-img-16-tn.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
