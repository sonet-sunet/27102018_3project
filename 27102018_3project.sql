-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 17 2019 г., 18:59
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `27102018_3project`
--
CREATE DATABASE IF NOT EXISTS `27102018_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `27102018_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sku` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sale` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `description`, `price`, `imgSrc`, `active`, `sale`) VALUES
(1, 'Куртка синяя', 19191919, 'Куртка синяя мужская,классная,покупай!', 12000.9, '/images/catalog/1.jpg', 1, 0),
(2, 'Куртка зеленая', 4235678, 'Куртка зеленая,городская.', 19990, '/images/catalog/2.jpg', 1, 0),
(3, 'Куртка зеленая без капюшона', 1343467, 'Куртка зеленая без капюшона...', 6000, '/images/catalog/3.png', 1, 0),
(4, 'Куртка черная', 4356, 'Куртка черная байкерская какая-то', 13000, '/images/catalog/4.jpg', 1, 0),
(5, 'Куртка оливкового цвета', 35356, 'Куртка оливкового цвета. Даже болотного наверное.', 11400, '/images/catalog/5.jpg', 1, 0.15),
(6, 'Куртка кожаная', 98756, 'Куртка кожаная. Будешь как чекист!', 21900, '/images/catalog/6.jpg', 1, 0),
(7, 'Кеды серые', 19191919, 'Кеды серые,ADIDAS', 3000, '/images/catalog/7.jpg', 1, 0),
(8, 'Кеды черные', 4235678, 'Кеды черные,высокие,тканевые', 3500, '/images/catalog/8.jpg', 1, 0),
(9, 'Кеды черные', 1343467, 'Кеды черные,высокие,глянцевые', 3200, '/images/catalog/9.jpg', 1, 0),
(10, 'Ботинки серые', 4356, 'Высокие серые ботинки', 4100, '/images/catalog/10.jpg', 1, 0),
(11, 'Джинсы темно-синие', 35356, 'Джинсы темно-синие,классический крой', 2000, '/images/catalog/11.jpg', 1, 0.15),
(12, 'Джинсы голубые', 98756, 'Джинсы голубые,узкого покроя', 2500, '/images/catalog/12.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size`, `quantity`) VALUES
(1, 1, 'XL', 10),
(2, 1, 'L', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
