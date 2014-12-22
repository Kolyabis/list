-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2014 г., 16:21
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `2z`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page` char(15) NOT NULL,
  `child` tinyint(4) DEFAULT NULL,
  `controller` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `page`, `child`, `controller`) VALUES
(1, 'Главная', NULL, ''),
(2, 'О нас', 1, ''),
(3, 'Контакты', 4, ''),
(4, 'Портфолио', NULL, ''),
(5, 'User1', NULL, ''),
(6, 'User2', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, 'User1'),
(2, 'User2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
